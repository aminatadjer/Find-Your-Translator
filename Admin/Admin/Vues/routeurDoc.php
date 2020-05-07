<?php
require_once('GeneralComponentsAdmin.php');

require_once('docVue.php');


class routeurDoc
{public function affich(){
    $g=new GeneralComponentsAdmin();
    $c=new docVue();
    $content=$c;
    $g->affich($content);

}
}
$page=new routeurDoc();
$page->affich();