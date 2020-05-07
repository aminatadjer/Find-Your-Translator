<?php

include '../Controllers/docController.php';
class docVue
{
    var $Controller;
    public function affich(){
        $this->Controller=new docController();
        $documents=$this->Controller->getDoc();
        ?>

        <div >
            <div class="row" style="flex-wrap:wrap;margin: 5% ;">
                <div class="card" style="margin-left: 2vh">
                    <div class="card-header" style="padding: 2%; padding-top: 4%; ">
                        <a class="btn btn-primary btn-simple btn-round" type="button" href="routeurAdmin.php"><i class="fas fa-arrow-left"></i>  Retour</a>
                        <br>
                        <br>
                        <h4>Gérez les documents!</h4>

                        <div class="row" role="tablist">
                            <div class="col-sm" style="margin-left: 4vh">
                                <label></label>
                                   <label>Filtrez par type!</label>
                                    <div style="">
                                        <select id="fetchval" name="fetchby" onchange="get_all_filters()" class="form-control" >
                                            <option value="tousType">Tous Type</option>
                                            <option value="General">General</option>
                                            <option value="Site">Site</option>
                                            <option value="Scientifique">Scientifique</option>
                                        </select>
                                    </div>


                            </div>
                            <div class="col-sm" style="margin-left: 4vh">
                                <label></label>
                                <label>Filtrez  Devis/Traductions!</label>
                                <div style="" >
                                    <select id="devisTrad" name="devisTrad" onchange="get_all_filters()" class="form-control">
                                        <option value="Tous">Traduction ou Devis</option>
                                        <option value=0>Devis</option>
                                        <option value=1>Traduction</option>

                                    </select>
                                </div>
                            </div>

                            <div class=" col-sm" style="margin-left: 4vh;float: right!important;">



                                        <label for="exampleFormControlInput1">Date début</label>
                                        <input type="date" class="form-control" id="DateD" onchange="get_all_filters()">

                            </div>
                            <div class=" col-sm" style="margin-left: 4vh;float: right!important;">

                                <div style="">


                                    <label for="exampleFormControlInput1">Date fin</label>
                                    <input type="date" class="form-control" id="DateF" onchange="get_all_filters()" >







                                </div>
                            </div>
                            <div class="col-sm" style="margin-left: 4vh;float: right!important;">
                                <label> </label>
                                <label>Triez par date!</label>
                                <div style="">

                                    <select id="tri" name="tri" onchange="get_all_filters()" class="form-control" >
                                        <option value="vrai">Plus Ancien</option>
                                        <option value="faux">Plus Recent</option>
                                    </select>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-body" style="padding-top: 0;">

                        <div class="tab-content tab-space">
                            <div class="tab-pane active" id="link1">


                                <article id="listeDocuments">
                                    <?php echo(
                                    '  <table class="table tablesorter ">
  <thead class=" text-primary">
           <tr>
               <th class="header "> Nom du document</th>
                <th class="header "> Client</th>
                 <th class="header "> Traducteur</th>
               <th class="header "> Date de soumission</th>
               <th class="header "> Type</th>
               <th class="header "> Devis Ou Traduction</th>
               <th class="header"> Supprimer</th>
           </tr>
           </thead>
            <tbody>
              ');

                                    foreach ($documents as $document){


                                        if ($document['devisVsTrad']==0){
                                            $type='Devis';
                                        }
                                        else $type='Traduction';
                                        echo ('<tr id="'.$document['id'] .'">
                <td><a onclick="OuvrirPopup(\''. $document['chemin'] . '\')" href="javascript:void(0)">'.$document['nom'].'</a></td>
                   <td>'.$document['client'].'</td>
                     <td>'.$document['traducteur'].'</td>
                <td>'.$document['date'].'</td>
                <td>'.$document['type'].'</td>
                <td>'.$type.'</td>
                <td style="text-align: center"> <a class="remove"  href="" data-toggle="modal" data-target="#suppModal" id="'.$document['id'].'">
                    <i class="fas fa-trash-alt"></i>
                     </a></td>
                </tr> ');


                                    }

                                    ?>


                                    <?php  echo ('</tbody></table>');?>
                                </article>
                            </div>



                        </div>


                    </div>


                </div>





            </div>

        </div>

       <div class="modal fade modal-black modal-mini" id="suppModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <form class="form-horizontal" method="POST" action="../Controllers/docController.php" id="supp_doc">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                               <i class="tim-icons icon-simple-remove text-white"></i>
                           </button>>

                       </div>
                       <div class="modal-body">
                           <h4 style="font-size: 16px;">Etes vous sur de vouloir supprimer ce document ? </h4>
                           <input type="hidden" name="doc" id="doc" value="">
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-success" data-dismiss="modal">NON</button>
                           <button type="submit" name="submit" id="supp1" class="btn btn-primary" value="supprimer">OUI</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>

        <script>
            function OuvrirPopup(page) {
                window.open(page);
            }


                $(document).ready(function(){
                    $(document).on('click','.remove',function(){

                        var doc = $(this).attr("id");
                        $("#doc").val(doc);

                    });
                });


        </script>
        <script>
            function get_all_filters() {
                var type = $("#fetchval").val();
                var dateD = $("#DateD").val();
                var dateF = $("#DateF").val();
 console.log(dateD);
                console.log(dateF);
                var TradDevis = $("#devisTrad").val();
                var TriDate = $("#tri").val();

                $.ajax(
                    {
                        url:'../Controllers/docController',
                        type:'POST',
                        data:{type:type,TradDevis:TradDevis,TriDate:TriDate,dateD:dateD,dateF:dateF},

                        beforeSend:function()
                        {
                            $("#listeDocuments").html("working...");

                        },
                        success:function(data)
                        {
                            $("#listeDocuments").html(data);
                        },
                    });
            }

        </script>


        <?php
    }

}
