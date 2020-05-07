<?php
require_once('GeneralComponentsAdmin.php');

require_once('profilClient.php');

class routeurprofilClient
{public function affich(){
    $id=$_GET['id'];
    $g=new GeneralComponentsAdmin();
    $c=new profilClient($id);
    $content=$c;
    $g->affich($content);

}
}
$page=new routeurprofilClient();
$page->affich();