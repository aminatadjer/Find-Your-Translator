<?php

include '../Controllers/traducteurController.php';

class traducteur
{
    var $Controller;
    public function affich()
    {
        $this->Controller = new traducteurController();
        $traducteurs = $this->Controller->getTraducteurs();
        ?>
<div class="row" style="margin: 20px; margin-top: 10vh" id="contenu">
            <div class="card" style="margin-left: 0vh">
                <div class="card-header" style="padding: 2%; padding-top: 4%; ">
                    <a class="btn btn-primary btn-simple btn-round" type="button" href="routeurAdmin.php"><i class="fas fa-arrow-left"></i>  Retour</a>
                    <br>
                    <br>
                    <h4>Gérez les traducteurs</h4>


                </div>
                <div class="card-body" style="padding-top: 0;">

                    <div class="tab-content tab-space">
                        <div class="tab-pane active" id="link1">
                            <div class="tab-pane active" id="link1">

                                <div class="panel panel-primary filterable">
                                <table class="table tablesorter " id="table_format">
                                    <thead class=" text-primary">
                                    <tr class="filters">
                                        <th class="header skip-filter"><input type="text" class="form-control" placeholder="Nom" ></th>
                                        <th class="header skip-filter"><input type="text" class="form-control" placeholder="Prenom" ></th>
                                        <th class="header skip-filter">
                                            <input type="text" class="form-control" placeholder="Type" >
                                        </th>
                                        <th class="header skip-filter">      <input type="text" class="form-control" placeholder="Langue" ></th>
                                        <th class="header "> Assermenté</th>
                                        <th class="header "> Bloquer/Debloquer</th>
                                        <th class="header"> Supprimer</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php

                                    foreach($traducteurs as $traducteur){
                                        if(!$traducteur['supprime']){

                                            echo'<tr><td><a href="routeurprofilTraducteur.php?id='.$traducteur["id"].'">'.$traducteur["nom"].'</a></td>';
                                            echo'<td><a href="routeurprofilTraducteur.php?id='.$traducteur["id"].'">'.$traducteur["prenom"].'</a></td>';
                                            echo '<td>';
                                            $types=$this->Controller->tradType($traducteur["id"]);
                                           foreach($types as $tp){
                                                $typesname=$this->Controller->affichType($tp["id_type"]);
                                                foreach($typesname as $tpname){
                                                    echo '<div>'.$tpname["nom"].'</div>';
                                                }
                                            }
                                            echo '</td>';
                                            echo '<td>';
                                         $langues=$this->Controller->tradLang($traducteur["id"]);
                                            foreach($langues as $tp) {
                                                $typesname = $this->Controller->affichLangue($tp["id_langue"]);
                                                foreach ($typesname as $tpname) {
                                                    echo '<div>' . $tpname["nom"] . '</div>';
                                                }
                                            }
                                            echo '</td>';
                                            if ($traducteur['asseremente'])
                                                echo'<td>Oui</td>';
                                            else
                                                echo'<td>Non</td>';

                                            if ($traducteur['bloque']){
                                                echo'
                 <form method="POST" action="../Controllers/traducteurController.php">
                       <td>
                              
                                                 
                             <button disabled class="btn btn-link btn-danger" name="bloq" > bloquer</button>
                             <button  class="btn btn-link btn-success" name="debloq"> debloquer</button>
                      <input type="hidden" name="traducteurid" id="traducteurid" value="'.$traducteur['id'].'">
                       </td>
                       </form>
                  ';
                                            }
                                            else{
                                                echo'
                <form method="POST" action="../Controllers/traducteurController.php">
                       <td>
                              
                             <button class="btn btn-link btn-danger" name="bloq" "> bloquer</button>
                             <button disabled class="btn btn-link btn-success" name="debloq"> debloquer</button>
                              <input type="hidden" name="traducteurid" id="traducteurid" value="'.$traducteur['id'].'">
                              
                       </td>
                       </form>
                  ';
                                            }



                                            echo' <form method="POST" action="../Controllers/traducteurController.php">
 <td>
                             <button class="btn btn-link" name="supp"><i class="fas fa-trash-alt"></i></button>
                              <input type="hidden" name="traducteurid" id="traducteurid" value="'.$traducteur['id'].'">
                        </td>
                   </form>
                   ';


                                            echo '</tr> ';
                                        }}

                                    ?>
                                    </tbody> </table>
                                </div>
                            </div>



                        </div>


                    </div>


                </div>







        </div>
</div>
  <!--      <div class="modal fade modal-black" id="modifier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove text-white"></i>
                        </button>
                        <div class="text-muted text-center ml-auto mr-auto">
                            <h3 class="mb-0">Modification</h3>

                        </div>
                    </div>
                    <div class="modal-body">

                        <form role="form" action="../Controllers/traducteurController.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="idTrad" id="idTrad" value="">

                            <div class="row">
                                <div class="form-group mb-3 col-md">
                                    <small>Nom</small>
                                    <div class="input-group">

                                        <input class="form-control" placeholder="Nom" type="text" name="nomc" value="<?php echo $traducteur['nom'];?>" required/>
                                    </div>

                                </div>

                                <div class="form-group mb-3 col-md">
                                    <small>Prenom</small>
                                    <div class="input-group input-group-alternative">

                                        <input class="form-control" placeholder="Prénom" type="text" name="prenomc" value="<?php echo $traducteur['prenom'];?>" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-md">
                                    <small>Email</small>
                                    <div class="input-group input-group-alternative">


                                        <input class="form-control" placeholder="Email" type="email" name="emailc" value="<?php echo $traducteur['email'];?>" required/>
                                    </div>
                                </div>
                                <div class="form-group col-md">
                                    <small>N° Tel</small>
                                    <div class="input-group input-group-alternative">

                                        <input class="form-control" placeholder="N° de tél" type="text" name="numc" value="<?php echo $traducteur['tel'];?>" required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group mb-3 col-md">
                                    <small>Fax</small>
                                    <div class="input-group input-group-alternative">

                                        <input class="form-control" placeholder="Fax" type="text" name="fax" value="<?php echo $traducteur['fax'];?>" required/>
                                    </div>
                                </div>
                                <div class="form-group col-md">
                                    <small>Adresse</small>
                                    <div class="input-group input-group-alternative">

                                        <input class="form-control" placeholder="Adresse" type="text" name="adresse" value="<?php echo $traducteur['adresse'];?>" required>
                                    </div>
                                </div>

                            </div>
                            <?php if($traducteur['asseremente']== 1)
                            {$asser="checked";
                            $nonAsser="";
                            }
                            else
                            {$asser="";
                                $nonAsser="checked";
                            }
                            ?>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" <?php echo $nonAsser?> >
                                    <span class="form-check-sign"></span>
                                    Non assermenté
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option2" <?php echo $asser?> >
                                    <span class="form-check-sign"></span>
                                    Assermenté
                                </label>
                            </div>
                            <div class="text-center">
                                <button  class="btn btn-primary my-4" type="submit" name="modif" value="modif">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->



        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="bib.js"></script>
        <script>
            jQuery('#table_format').ddTableFilter();

        </script>


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