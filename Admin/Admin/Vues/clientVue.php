<?php

include '../Controllers/clientController.php';

class clientVue
{
    var $Controller;
    public function affich()
    {
        $this->Controller = new clientController();
        $clients = $this->Controller->getClients();
        ?>
   <div style="padding-left: 10vh; padding-top: 15vh; padding-right: 10vh;">
            <div class="card" style="">
                <div class="card-header" >
                    <a class="btn btn-primary btn-simple btn-round" type="button" href="routeurAdmin.php"><i class="fas fa-arrow-left"></i>  Retour</a>
                    <br>
                    <br>
                    <h4>Gérez les clients</h4>


                </div>
                <div class="card-body" style="padding-top: 0;">

                    <div class="tab-content tab-space">
                        <div class="tab-pane active" id="link1">
                            <div class="tab-pane active" id="link1">

                                    <div class="panel panel-primary filterable">

                                <table class="table tablesorter " id="table_format">
                                    <thead class=" text-primary">
                                    <tr class="filters">
                                        <th><input type="text" class="form-control" placeholder="Nom" ></th>
                                        <th><input type="text" class="form-control" placeholder="Prenom"></th>
                                        <th><input type="text" class="form-control" placeholder="Wilaya" </th>
                                        <th><input type="text" class="form-control" placeholder="Commune"></th>
                                        <th class="header "> Bloquer/Debloquer</th>
                                        <th class="header"> Supprimer</th>


                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php

                                    foreach($clients as $client){
                                        if(!$client['supprime']){

                                            echo'<tr><td><a href="routeurprofilClient.php?id='.$client["id"].'">'.$client["nom"].'</a></td>';
                                            echo'<td><a href="routeurprofilClient.php?id='.$client["id"].'">'.$client["prenom"].'</a></td>';
                                            echo '<td>';
                                            $wilayas=$this->Controller->getWilayas($client['wilaya']);
                                            foreach ($wilayas as $wilaya)
                                            { echo $wilaya['nom'];}
                                            echo '</td>';
                                            echo '<td>';
                                            $communes=$this->Controller->getCommunes($client['commune']);
                                            foreach ($communes as $commune)
                                            { echo $commune['nom'];}
                                            echo '</td>';


                                            if ($client['bloque']){
                                                echo'
                 <form method="POST" action="../Controllers/clientController.php">
                       <td>
                              
                                                 
                             <button disabled class="btn btn-link btn-danger" name="bloq" > bloquer</button>
                             <button  class="btn btn-link btn-success" name="debloq"> debloquer</button>
                      <input type="hidden" name="clientid" id="clientid" value="'.$client['id'].'">
                       </td>
                       </form>
                  ';
                                            }
                                            else{
                                                echo'
                <form method="POST" action="../Controllers/clientController.php">
                       <td>
                              
                             <button class="btn btn-link btn-danger" name="bloq" "> bloquer</button>
                             <button disabled class="btn btn-link btn-success" name="debloq"> debloquer</button>
                              <input type="hidden" name="clientid" id="clientid" value="'.$client['id'].'">
                              
                       </td>
                       </form>
                  ';
                                            }



                                            echo' <form method="POST" action="../Controllers/clientController.php">
 <td>
                             <button class="btn btn-link" name="supp"><i class="fas fa-trash-alt"></i></button>
                              <input type="hidden" name="clientid" id="clientid" value="'.$client['id'].'">
                        </td>
                   </form>
                   ';
                                            echo '</tr> ';
                                        }}
                                    echo '  </tbody> </table>  </div>  ';
                                    ?>

                            </div>



                        </div>


                    </div>


                </div>





            </div>

        </div>
   </div>


        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.filterable .btn-filter').click(function(){
                    var $panel = $(this).parents('.filterable'),
                        $filters = $panel.find('.filters input'),
                        $tbody = $panel.find('.table tbody');
                    if ($filters.prop('disabled') == true) {
                        $filters.prop('disabled', false);
                        $filters.first().focus();
                    } else {
                        $filters.val('').prop('disabled', true);
                        $tbody.find('.no-result').remove();
                        $tbody.find('tr').show();
                    }
                });

                $('.filterable .filters input').keyup(function(e){
                    /* Ignore tab key */
                    var code = e.keyCode || e.which;
                    if (code == '9') return;
                    /* Useful DOM data and selectors */
                    var $input = $(this),
                        inputContent = $input.val().toLowerCase(),
                        $panel = $input.parents('.filterable'),
                        column = $panel.find('.filters th').index($input.parents('th')),
                        $table = $panel.find('.table'),
                        $rows = $table.find('tbody tr');
                    /* Dirtiest filter function ever ;) */
                    var $filteredRows = $rows.filter(function(){
                        var value = $(this).find('td').eq(column).text().toLowerCase();
                        return value.indexOf(inputContent) === -1;
                    });
                    /* Clean previous no-result if exist */
                    $table.find('tbody .no-result').remove();
                    /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                    $rows.show();
                    $filteredRows.hide();
                    /* Prepend no-result row if all rows are filtered */
                    if ($filteredRows.length === $rows.length) {
                        $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                    }
                });
            });
        </script>
        <?php

    }
}