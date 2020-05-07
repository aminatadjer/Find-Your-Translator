<?php

require_once ('GeneralComponents.php');
require_once('apropos.php');
class routeurApropos
{
    public function affich(){
        $g=new GeneralComponents();
        $c=new apropos();
        $title=$c->title;
        $content=$c;
        $g->affich($content,$title);

    }
}
$page=new routeurApropos();
$page->affich();