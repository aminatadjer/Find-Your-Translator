<?php

require_once('GeneralComponentsAdmin.php');
require_once('acceuil.php');


class routeurAcceuil
{
public function affichAcceuil(){
    $g=new GeneralComponentsAdmin();
    $c=new acceuil();

    $content=$c;
   $g->affich($content);

}
}
$page=new routeurAcceuil();
$page->affichAcceuil();