<?php


class docModel
{
    private $docs;
   private $nomDoc;
   private $path;
   private $mysqli;
   private $date;

function getDocs(){
    $this->mysqli= new mysqli('localhost', 'root', '', 'webproject');
    $query1="SELECT * FROM `documentsoumis` ORDER BY date";
    $sql1= mysqli_query($this->mysqli, $query1);
    return $sql1;
}
function deleteDocs($doc){
    $this->mysqli= new mysqli('localhost', 'root', '', 'webproject');
    $req = "DELETE FROM `documentsoumis`  WHERE id='" . $doc. "'";
    $sql1= mysqli_query($this->mysqli, $req);
}
function  fetchBy($type,$TradDevis,$TriDate,$dateD,$dateF){
    $this->mysqli= new mysqli('localhost', 'root', '', 'webproject');
    $dateDD="2019-01-01";
    $dateFF=date("Y-m-d");
    if (($dateD != "") || ($dateF != "") ){
        if ($dateD != "") $dateDD=$dateD;
        if ($dateF != "") $dateFF=$dateF;
    }
    $query="select * from `documentsoumis` where id>0";
    if($type!="tousType")
    $query.=" AND type='$type' ";
    if ($TradDevis!="Tous")
        $query.=" AND devisVsTrad ='$TradDevis'";
    $query.=" AND date BETWEEN '$dateDD' AND '$dateFF' ";
    $query.=" ORDER BY date ";
    if ($TriDate =="faux") {$query.=" DESC"; }
    $sql1= mysqli_query($this->mysqli, $query);
    return $sql1;
}
}