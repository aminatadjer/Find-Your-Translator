<?php

include '../Models/traductionetdevisModel.php';
class traductionetdevisController{
    function addTraductionDevis(){
       $idClient=4;
       $nom=$_POST['nom1'];
       $prenom=$_POST['prenom1'];
       $email=$_POST['email1'];
       $num=$_POST['num1'];
       $adresse=$_POST['adresse1'];
       $typeTrad=$_POST['typeTrad'];
       $langOrigin=$_POST['langueS'];
       $langDest=$_POST['langueD'];
       $asserm=$_POST['assermentc'];
       $devisVsTrad=$_POST['devisVsTrad'];
       $doc["docTrad"]=$_FILES["docTrad"];
       $traducteurs=$_POST["choix"];
       $modal=new traductionetdevisModel($asserm,$idClient,$nom,$prenom,$email,$num,$adresse,$langOrigin,$langDest,$traducteurs,$doc,$typeTrad,$devisVsTrad);



    }

}
$c=new traductionetdevisController();
if(isset($_POST['btnDevis']) && ($_POST['btnDevis']=="devisettraduction") ){
 $c->addTraductionDevis();
    header('Location: '.$_SERVER['HTTP_REFERER']);
}
