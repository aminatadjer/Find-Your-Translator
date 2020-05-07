<?php
require_once ('GeneralComponents.php');
require_once ('Recrutement.php');

class routeurRecrutement
{
    public function affich(){
        $g=new GeneralComponents();
        $c=new Recrutement();
        $title=$c->title;
        $content=$c;
        $g->affich($content,$title);

    }
}
$page=new routeurRecrutement();
$page->affich();