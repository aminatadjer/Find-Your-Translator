<?php
require_once ('GeneralComponents.php');
require_once('choixTraducteurs.php');
class routeurChoixTraducteur
{
    public function affich(){
        $g=new GeneralComponents();
        $c=new choixTraducteurs();
        $title=$c->title;
        $content=$c;
        $g->affich($content,$title);

    }
}
$page=new routeurChoixTraducteur();
$page->affich();
