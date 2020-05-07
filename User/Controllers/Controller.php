<?php

//controller
class controller
{
function recrutement(){

    if(isset($_POST['submit']) AND $_POST['submit'] == 'register'){
        $traducteur['nom']= $_POST['nom'];
        $traducteur['prenom']=$_POST['prenom'];
        $traducteur['email']=$_POST['email'];
        $traducteur['num']=$_POST['num'];
        $traducteur['adresse']=$_POST['adresse'];
        $traducteur['mdp']=$_POST['mdp'];
        $langues=$_POST['Langues'];
        $fichiers['cv']=$_FILES["cv"];
        $fichiers['preuveIn']=$_FILES['preuveIn'];
        if (isset($_POST['general']) )
        {$type[1]=true;}
        else         {$type[1]=0;}
        if (isset($_POST['scientifique']) )
        {$type[2]=true;}
        else         {$type[2]=0;}
        if (isset($_POST['site']) )
        {$type[3]=true;}
        else         {$type[3]=0;}


        if (isset($_POST['asserment']) )
        {$traducteur['asserment']=true;}
        else         {$traducteur['asserment']=0;}



        try {
                   include '../Models/recrutement.php';
                   new recrutement($traducteur,$langues,$fichiers,$type);
                   $recrutement=1;


        }
        catch (Exception $exc){
            echo $exc->getMessage();
        }

    }
}
function inscription(){
    $client['nom']= $_POST['nomc'];
    $client['prenom']=$_POST['prenomc'];
    $client['email']=$_POST['emailc'];
    $client['num']=$_POST['numc'];
    $client['adresse']=$_POST['adressec'];
    $client['mdp']=$_POST['mdpc'];
    try {
        include '../Models/incription.php';


        new incription($client);

    }
    catch (Exception $exc){
        echo $exc->getMessage();
    }
}
function logIn(){
    session_start();
    if(isset($_POST['logIn']) AND $_POST['logIn'] == 'logIn'){
        $user['email']=$_POST['logmail'];
        $user['mdp']=$_POST['logmdp'];
        $user['type']=$_POST['personne'];


        include '../Models/logIn.php';
        $modal=new logIn();
        $profile=$modal->logina($user);



            foreach ($profile as $pro)
            {
                session_regenerate_id();
                $_SESSION['id_user']=$pro['id'];
                $_SESSION['prenom']=$pro['prenom'];
                $_SESSION['nom']=$pro['nom'];
                $_SESSION['type']= $user['type'];

                header("Location: ../Vues/routeurProfile.php");


            }



    }
}
function cherchTrad($langueS,$langueD,$type){

}


}

$c=new controller();
if(isset($_POST['submit']) AND $_POST['submit'] == 'register'){

    $c->recrutement();
    $recrutement=1;
    header('Location: '.$_SERVER['HTTP_REFERER']);
}
if(isset($_POST['inscription']) AND $_POST['inscription'] == 'inscription'){

    $c->inscription();
    $_SESSION['recrutement']=1;


}
if(isset($_POST['logIn']) AND $_POST['logIn'] == 'logIn'){
    $c->logIn();
    if ($_SESSION['error']='error'){
        $erreur='Mail ou mot de passe invalide';
    }
}

