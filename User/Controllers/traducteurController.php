<?php
include "../Models/traducteurModel.php";

class traducteurController{
    function getTraducteurs(){

        $model=new traducteurModel();
        $traducteurs=$model->getTraducteurs();
        return $traducteurs;
    }

    public function tradType($id){

        $model= new traducteurModel();
        $r= $model->assoctypetrad($id);
        return $r;
    }
    public function tradLang($id){
        $model= new traducteurModel();
        $r= $model->assoclanguetrad($id);
        return $r;
    }

    public function affichType($id){
        $model= new traducteurModel();
        $r= $model->typeaffich($id);
        return $r;
    }

    public function affichLangue($id){
        $model= new traducteurModel();
        $r= $model->langueaffich($id);
        return $r;
    }


    public function supprim($id){
        $mtf= new traducteurModel();
        $r= $mtf->supprim($id);

    }

    public function bloq($id){
        $mtf= new traducteurModel();
        $r= $mtf->bloq($id);
    }

    public function debloq($id){
        $mtf= new traducteurModel();
        $r= $mtf->debloq($id);
    }
    public function getNonVu($id){
        $model= new traducteurModel();
        $r= $model->getNonVus($id);
        return $r;
    }
    public  function getDocByIdTraductionDevis($idTraduction){
        $model= new traducteurModel();
        $r= $model->getDocByIdTraductionDevis($idTraduction);
        return $r;
    }

    /*
        public function traduc_id_controleur($id){
            $mtf= new traducteurModel();
            $r= $mtf->traduc_id_model($id);
            return $r;
        }
        public function client_id_controleur($id){
            $mtf= new traducteurModel();
            $r= $mtf->client_id_model($id);
            return $r;
        }

        public function allerProfil(){
            $a=$_POST["idtraducteur"];
            return $a;
        }

        public function profil($id){
            $mtf= new traducteurModel();
            $r= $mtf->profil($id);
            return $r;
        }


       */
    public function getTraducteur($id){

        $model=new traducteurModel();
        $traducteur=$model->getTraducteur($id);
        return $traducteur;

    }
public function modifier(){

        $mtf= new traducteurModel();
        $id=$_POST['idTrad'];
        $nom=$_POST['nomc'];
        $prenom=$_POST['prenomc'];
        $email=$_POST['emailc'];
        $num=$_POST['numc'];
        $fax=$_POST['fax'];
        $adresse=$_POST['adresse'];

        $r= $mtf->modifier($id,$nom,$prenom,$email,$num,$fax,$adresse);
        echo $nom;

    }
    public function getWilayas($id){

        $model=new traducteurModel();
        $wilaya=$model->getWilaya($id);
        return $wilaya;

    }
    public function getCommunes($id){

        $model=new traducteurModel();
        $commune=$model->getCommune($id);
        return $commune;

    }
function deleteAssocTradTradu(){
        $r=$_POST['doc'];
        echo $r;
    $model=new traducteurModel();
    $model->deleteAssoc($r);


}
function repondre(){
        $rep=$_POST['rep'];
        $id=$_POST['idi'];
        $doc=$_POST['doc'];
    $model=new traducteurModel();
    $model->repondre($id,$rep);
}

/*
    public function recup_devis_traduc_controleur($id){
        $mtf= new traducteurModel();
        $r= $mtf->recup_devis_traduc_model($id);
        return $r;
    }

    public function devis_controleur($id){
        $mtf= new traducteurModel();
        $r= $mtf->devis_model($id);
        return $r;
    }

    public function useraff_controleur($id){
        $mtf= new traducteurModel();
        $r= $mtf->useraff_model($id);
        return $r;
    }
    public function info_client_controleur(){
        $mtf= new traducteurModel();
        $r= $mtf->info_client_model();
        return $r;
    }

    public function bloqClient_controleur($id){
        $mtf= new traducteurModel();
        $r= $mtf->bloqClient_model($id);
    }

    public function supprimClient_controleur($id){
        $mtf= new traducteurModel();
        $r= $mtf->supprimClient_model($id);
    }
    public function debloqClient_controleur($id){
        $mtf= new traducteurModel();
        $r= $mtf->debloqClient_model($id);
    }
    public function profil_client($id){
        $mtf= new traducteurModel();
        $r= $mtf->profil_client($id);
        return $r;
    }

    public function modifier_client($btn,$nom1,$prenom,$mail,$numtel,$adr,$wil,$com,$id){
        $mtf= new traducteurModel();
        $r= $mtf->modifier_client($btn,$nom1,$prenom,$mail,$numtel,$adr,$wil,$com,$id);
        return $r;
    }

    public function devis_client_id_controleur($id){
        $mtf= new traducteurModel();
        $r= $mtf->devis_client_id_model($id);
        return $r;
    }
*/
}
$c=new traducteurController();
if(isset($_POST['bloq'])){
    $c->bloq($_POST['traducteurid']);
    header('Location: '.$_SERVER['HTTP_REFERER']);
}
if(isset($_POST['debloq'])){
    $c->debloq($_POST['traducteurid']);
    header('Location: '.$_SERVER['HTTP_REFERER']);
}
if(isset($_POST['supp'])){
    $c->supprim($_POST['traducteurid']);
    header('Location: '.$_SERVER['HTTP_REFERER']);
}
if(isset($_POST['modif']) && $_POST['modif']="modif"){
    $c->modifier();
   header('Location: '.$_SERVER['HTTP_REFERER']);
}
if(isset($_POST['submit']) AND $_POST['submit'] == 'supprimer'){
    $c->deleteAssocTradTradu();
  header('Location: '.$_SERVER['HTTP_REFERER']);
}
if(isset($_POST['reponse']) AND $_POST['reponse'] == 'reponse'){
    $c->repondre();
    header('Location: '.$_SERVER['HTTP_REFERER']);
}
