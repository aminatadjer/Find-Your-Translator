<?php
require_once ('GeneralComponents.php');
require_once('ProfileTraducteur.php');
require_once('profileClient.php');
if (!isset($_SESSION['id_user'])) {
    header('Location: routeurAcceuil.php');
    exit();
}
class routeurProfile
{

    public function affich(){
        $g=new GeneralComponents();
        if ($_SESSION['type']=='client'){
        $c=new profileClient($_SESSION['id_user']);}
        else{
            $c=new profileTraducteur($_SESSION['id_user']);
        }
        $title=$c->title;
        $content=$c;
        $g->affich($content,$title);

    }
}
$page=new routeurProfile();
$page->affich();
