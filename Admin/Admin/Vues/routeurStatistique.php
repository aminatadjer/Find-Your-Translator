<?php
require_once('GeneralComponentsAdmin.php');

require_once ('statistique.php');


class routeurStatistique
{
    public function affich(){
        $g=new GeneralComponentsAdmin();
        $c=new statistique();
        $content=$c;
        $g->affich($content);

    }
}
$page=new routeurStatistique();
$page->affich();