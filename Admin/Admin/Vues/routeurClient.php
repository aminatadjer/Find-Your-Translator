<?php
require_once('GeneralComponentsAdmin.php');

require_once ('clientVue.php');


class routeurClient
{public function affich(){
    $g=new GeneralComponentsAdmin();
    $c=new clientVue();
    $content=$c;
    $g->affich($content);

}
}
$page=new routeurClient();
$page->affich();