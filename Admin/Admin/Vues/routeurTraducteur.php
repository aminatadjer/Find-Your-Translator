<?php
require_once('GeneralComponentsAdmin.php');

require_once('traducteur.php');

class routeurTraducteur
{public function affich(){
    $g=new GeneralComponentsAdmin();
    $c=new traducteur();
    $content=$c;
    $g->affich($content);

}
}
$page=new routeurTraducteur();
$page->affich();