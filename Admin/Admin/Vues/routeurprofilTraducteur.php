<?php
require_once('GeneralComponentsAdmin.php');

require_once('profilTraducteur.php');

class routeurprofilTraducteur
{public function affich(){
    $id=$_GET['id'];
    $g=new GeneralComponentsAdmin();
    $c=new profilTraducteur($id);
    $content=$c;
    $g->affich($content);

}
}
$page=new routeurprofilTraducteur();
$page->affich();