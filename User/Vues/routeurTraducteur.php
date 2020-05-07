<?php
require_once ('GeneralComponents.php');
require_once('Traducteurs.php');

class routeurTraducteur
{
    public function affich(){
        $g=new GeneralComponents();
        $c=new Traducteurs();
        $title=$c->title;
        $content=$c;
        $g->affich($content,$title);

    }
}
$page=new routeurTraducteur();
$page->affich();