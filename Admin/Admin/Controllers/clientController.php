<?php

include "../Models/clientModel.php";
class clientController
{    function getClients(){

    $model=new clientModel();
    $clients=$model->getClients();
    return $clients;
}
    public function supprim($id){
        $mtf= new clientModel();
        $r= $mtf->supprim($id);

    }

    public function bloq($id){
        $mtf= new clientModel();
        $r= $mtf->bloq($id);
    }

    public function debloq($id){
        $mtf= new clientModel();
        $r= $mtf->debloq($id);
    }
    public function getWilayas($id){

        $model=new clientModel();
        $wilaya=$model->getWilaya($id);
        return $wilaya;

    }
    public function getCommunes($id){

        $model=new clientModel();
        $commune=$model->getCommune($id);
        return $commune;

    }
    public function getClient($id){

        $model=new clientModel();
        $client=$model->getClient($id);
        return $client;

    }
    public function modifier(){

        $mtf= new clientModel();
        $id=$_POST['idClient'];
        $nom=$_POST['nomc'];
        $prenom=$_POST['prenomc'];
        $email=$_POST['emailc'];
        $num=$_POST['numc'];
        $fax=$_POST['fax'];
        $adresse=$_POST['adresse'];

        $r= $mtf->modifier($id,$nom,$prenom,$email,$num,$fax,$adresse);
        echo $nom;

    }

}
$c=new clientController();
if(isset($_POST['bloq'])){
    $c->bloq($_POST['clientid']);
    header('Location: '.$_SERVER['HTTP_REFERER']);
}
if(isset($_POST['debloq'])){
    $c->debloq($_POST['clientid']);
    header('Location: '.$_SERVER['HTTP_REFERER']);
}
if(isset($_POST['supp'])){
    $c->supprim($_POST['clientid']);
    header('Location: '.$_SERVER['HTTP_REFERER']);
}
if(isset($_POST['modif']) && $_POST['modif']="modif"){
    $c->modifier();
    header('Location: '.$_SERVER['HTTP_REFERER']);
}