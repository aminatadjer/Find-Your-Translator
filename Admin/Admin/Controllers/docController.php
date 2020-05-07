<?php


class docController
{

    function setDoc(){

        if(isset($_POST['submit']) AND $_POST['submit'] == 'ajoutDoc'){

            $docs['doc']=$_FILES['doc'];


            try {
                include "../Models/docModel.php";
                new docModel($docs);



            }
            catch (Exception $exc){
                echo $exc->getMessage();
            }

        }
}
    function getDoc(){
        include "../Models/docModel.php";
        $model=new docModel();
        $documents=$model->getDocs();
        return $documents;
    }
    function deleteDoc(){
        if(isset($_POST['submit']) AND $_POST['submit'] == 'supprimer'){
            $doc=$_POST['doc'];

            include "../Models/docModel.php";
            $model=new docModel();
            $model->deleteDocs($doc);
        }

    }
    function fetchBy(){
        $type=$_POST['type'];
        $TradDevis=$_POST['TradDevis'];
        $TriDate=$_POST['TriDate'];
        $dateD=$_POST['dateD'];
        $dateF=$_POST['dateF'];
        include "../Models/docModel.php";
        $model=new docModel();
        $documents=$model->fetchBy($type,$TradDevis,$TriDate,$dateD,$dateF);
        echo(
        '<table class="table tablesorter ">
         <thead class=" text-primary">
           <tr>
               <th class="header"> Nom du document</th>
                   <th class="header "> Client</th>
                 <th class="header "> Traducteur</th>
               <th class="header"> Date de soumission</th>
               <th class="header"> Type</th>
               <th class="header"> Devis Ou Traduction</th>
               <th class="header"> Supprimer</th>
           </tr>
           </thead>
              ');
        foreach ($documents as $document ){
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
                <td style="text-align: center"> <a class="remove" href="" data-toggle="modal" data-target="#suppModal" id="'.$document['id'].'">
                        <i class="fas fa-trash-alt"></i>
                     </a></td>
                </tr>');


        }


    }
}
$c=new docController();
if(isset($_POST['submit']) AND $_POST['submit'] == 'supprimer'){
    $c->deleteDoc();
    header('Location: '.$_SERVER['HTTP_REFERER']);
}
if(isset($_POST['type']) &&  isset($_POST['TradDevis']) &&  isset($_POST['TriDate'])){
    $c->fetchBy();
}
/*if(isset($_POST['submit']) AND $_POST['submit'] == 'ajoutDoc'){
    $c->setDoc();
    header('Location: '.$_SERVER['HTTP_REFERER']);
}*/