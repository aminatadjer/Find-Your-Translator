<?php

include '../Controllers/traducteurController.php';
class profileTraducteur
{ var $title='Profile Traducteur';
    private $monId;
    var $controller;
    var $traducteur;
    var $nonVus;
    public function __construct($id)
    {   $this->controller=new traducteurController();
        $this->monId=$id;
        $this->traducteur=$this->controller->getTraducteur($this->monId);
        $this->nonVus=$this->controller->getNonVu($this->monId);

    }



public function affich(){


    foreach ($this->traducteur as $trad) {


    ?>
    <div style="width: 100%;height: auto; padding: 10vh">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary btn-simple btn-round" type="button"
                       href="routeurTraducteur.php"><i class="fas fa-arrow-left"></i> Retour</a>

                    <h4 class="title" style="margin-left: 5vh">

                        Traducteur
                    </h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#linka">
                                Informations
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" data-toggle="tab" href="#linkb">
                                Traductions <button class=" btn-round" style="color: #dc3545" id="countNotif">
                                    <?php
                                    $i=0;
                                    foreach ($this->nonVus as $c)
                                    { if ($c['type']==1)
                                    { $i=$i+1;}

                                    }
                                    echo $i;
                                    ?>
                                </button>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" data-toggle="tab" href="#linkc">
                                Devis <button class=" btn-round" style="color: #dc3545" id="countNotif">
                                    <?php
                                    $i=0;
                                    foreach ($this->nonVus as $c)
                                    { if ($c['type']==0)
                                    { $i=$i+1;}

                                    }
                                    echo $i;
                                    ?>
                                </button>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content tab-subcategories">
                        <div class="tab-pane active" id="linka">
                            <div class="row">
                                <div class="col-md">
                                    <div class="table-responsive" style="overflow: hidden">
                                        <table class="table tablesorter " id="plain-table">
                                            <thead class=" text-primary">
                                            <tr>
                                                <th class="header">
                                                    <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#modifier">Modifier</button>

                                                </th>
                                                <th class="header">

                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    Nom
                                                </td>
                                                <td>
                                                    <?php echo $trad['nom'] ;?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Prenom
                                                </td>
                                                <td>
                                                    <?php echo $trad['prenom']; ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <?php echo $trad['email'] ; ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Wilaya
                                                </td>
                                                <td>
                                                    <?php
                                                    $wilayas=$this->controller->getWilayas($trad['idWilaya']);
                                                    foreach ($wilayas as $wilaya)
                                                    { echo $wilaya['nom'];}

                                                    ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Commune
                                                </td>
                                                <td>
                                                    <?php
                                                    $communes=$this->controller->getCommunes($trad['idCommune']);
                                                    foreach ($communes as $commune)
                                                    { echo $commune['nom'];}
                                                    ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Adresse
                                                </td>
                                                <td>
                                                    <?php

                                                    echo $trad['adresse'] ;
                                                    ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Téléphone
                                                </td>
                                                <td>
                                                    <?php echo $trad['tel'] ; ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Fax
                                                </td>
                                                <td>
                                                    <?php echo $trad['fax'] ;?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Assermenté
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($trad['asseremente'])
                                                        echo'Oui';
                                                    else
                                                        echo'Non';
                                                    ?>
                                                </td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md"></div>
                            </div>
                        </div>
                        <div class="tab-pane" id="linkb">
                            <div class="" style="">
                                <table class="table tablesorter " id="plain-table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Document Soumis
                                        </th>

                                        <th>
                                            Date
                                        </th>

                                        <th>
                                            Repondre
                                        </th>

                                        <th>
                                            Marquer comme vu
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  foreach ($this->nonVus as $nonVus){
                                        if($nonVus['type']==1){
                                        {
                                            $idTraduction= $nonVus['idTraduction'];
                                            $docs=$this->controller->getDocByIdTraductionDevis($idTraduction);
                                            foreach ($docs as $doc){

                                                echo '
                                                     <tr>  <td> <a onclick="OuvrirPopup(\''. $doc['chemin'] . '\')" href="javascript:void(0)">'.$doc['nom'].'</a>    </td>
                                                     <td>'.$doc['type'].'</td>
                                                      <td>'.$doc['date'].'</td> 
                                                         <form action="../Controllers/traducteurController.php" method="post" enctype="multipart/form-data">
                                                         <input class="form-control" style="visibility: hidden" type="text" name="idi" value="'.$nonVus['id'].'">
                                                         
                                                         <input class="form-control" type="text" name="rep" value="Acceptée" style="visibility: hidden">
                                                      <td>
                                                         <input name="doc" type="file"
                   id="doc" aria-describedby="inputGroupFileAddon01"
                   required> </td>
                                                         <td>
                                                         valider
                                                         <button type="submit" class="btn btn-simple btn-primary btn-icon btn-round float-right" name="reponse" value="reponse"><i class="tim-icons icon-send"></i></button>
                                                         </form></td>
                                                      
                                                         </tr>
                                                     ';
                                            }


                                        }}
                                        ?>

                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="linkc" style="overflow: hidden">
                            <div class="" style="">
                                <table class="table tablesorter " id="plain-table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Document Soumis
                                        </th>
                                        <th>
                                            Type
                                        </th>
                                        <th>
                                            Date
                                        </th>

                                        <th>
                                            Repondre
                                        </th>
                                        <th>
                                            Supprimer
                                        </th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                        <?php  foreach ($this->nonVus as $nonVus){
                                            if($nonVus['type']==0){

                                           {
                                                $idTraduction= $nonVus['idTraduction'];
                                                $docs=$this->controller->getDocByIdTraductionDevis($idTraduction);
                                                foreach ($docs as $doc){
                                                    echo '
                                                     <tr>  <td> <a onclick="OuvrirPopup(\''. $doc['chemin'] . '\')" href="javascript:void(0)">'.$doc['nom'].'</a>    </td>
                                                     <td>'.$doc['type'].'</td>
                                                      <td>'.$doc['date'].'</td> 
                                                         <td><form action="../Controllers/traducteurController.php" method="post">
                                                         <input class="form-control" style="visibility: hidden" type="text" name="idi" value="'.$nonVus['id'].'">
                                                         
                                                         <input class="form-control" type="text" name="rep">
                                                         <button type="submit" class="btn btn-simple btn-primary btn-icon btn-round float-right" name="reponse" value="reponse"><i class="tim-icons icon-send"></i></button>
                                                         </form></td>
                                                        <td style="text-align: center"> <a class="remove"  href="" data-toggle="modal" data-target="#suppModal" id="'.$nonVus['id'].'">
                    <i class="fas fa-trash-alt"></i>
                     </a></td>
                                                         </tr>
                                                     ';
                                                }


                                            }}
                                            ?>

                                      <?php }?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-black" id="modifier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                        <input type="hidden" name="idTrad" id="idTrad" value="<?php echo $trad['id'];?>">

                        <div class="row">
                            <div class="form-group mb-3 col-md">
                                <small>Nom</small>
                                <div class="input-group">

                                    <input class="form-control" placeholder="Nom" type="text" name="nomc" value="<?php echo $trad['nom'];?>" required/>
                                </div>

                            </div>

                            <div class="form-group mb-3 col-md">
                                <small>Prenom</small>
                                <div class="input-group input-group-alternative">

                                    <input class="form-control" placeholder="Prénom" type="text" name="prenomc" value="<?php echo $trad['prenom'];?>" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 col-md">
                                <small>Email</small>
                                <div class="input-group input-group-alternative">


                                    <input class="form-control" placeholder="Email" type="email" name="emailc" value="<?php echo $trad['email'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group col-md">
                                <small>N° Tel</small>
                                <div class="input-group input-group-alternative">

                                    <input class="form-control" placeholder="N° de tél" type="text" name="numc" value="<?php echo $trad['tel'];?>" required>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group mb-3 col-md">
                                <small>Fax</small>
                                <div class="input-group input-group-alternative">

                                    <input class="form-control" placeholder="Fax" type="text" name="fax" value="<?php echo $trad['fax'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group col-md">
                                <small>Adresse</small>
                                <div class="input-group input-group-alternative">

                                    <input class="form-control" placeholder="Adresse" type="text" name="adresse" value="<?php echo $trad['adresse'];?>" required>
                                </div>
                            </div>

                        </div>
                        <?php if($trad['asseremente']== 1)
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
    </div>
        <div class="modal fade modal-black modal-mini" id="suppModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="form-horizontal" method="POST" action="../Controllers/traducteurController.php" id="supp_doc">
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
    <?php


}

}
}