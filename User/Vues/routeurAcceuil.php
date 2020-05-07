<?php

require_once ('GeneralComponents.php');
require_once ('Acceuil.php');

class routeurAcceuil
{
public function affich(){
    $g=new GeneralComponents();
    $c=new Acceuil();
    $title=$c->title;
    $content=$c;
   $g->affich($content,$title);

}
}
$page=new routeurAcceuil();
$page->affich();