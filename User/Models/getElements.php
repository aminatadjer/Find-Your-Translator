<?php


class getElements
{
    private $mysqli;
    function __construct()
    {
        $this->mysqli= new mysqli('localhost', 'root', '', 'webproject');
    }

    function getLangues(){
    $query="SELECT * From langue";
    $sql= mysqli_query($this->mysqli, $query);
    return $sql;
}
    function getTypes(){
        $query="SELECT * From typetraduction";
        $sql= mysqli_query($this->mysqli, $query);

        return $sql;
    }
function getTraducteurs(){
    $query="SELECT * From traducteur";
    $sql= mysqli_query($this->mysqli, $query);
    return $sql;
}
    function getTraducteursGenral(){

        $query1="SELECT * From traducteur WHERE id IN (SELECT id_traduc From assoctradtype WHERE id_type=1)";
        $sql1= mysqli_query($this->mysqli, $query1);

        return $sql1;
    }
    function getTraducteursScientifique(){


        $query1="SELECT * From traducteur WHERE id IN (SELECT id_traduc From assoctradtype WHERE id_type=2)";
        $sql1= mysqli_query($this->mysqli, $query1);

        return $sql1;
    }
    function getTraducteursSite(){


        $query1="SELECT * From traducteur WHERE id IN (SELECT id_traduc From assoctradtype WHERE id_type=3)";
        $sql1= mysqli_query($this->mysqli, $query1);

        return $sql1;
    }
    function  getTraducteursByChoix($langS,$langD,$asserm,$typeTrad){
        $query1="SELECT * From traducteur WHERE (id IN (SELECT id_traduc From assoctradtype WHERE id_type='$typeTrad') AND id IN (SELECT id_traduc From assoctradlang WHERE id_langue='$langS')  AND id IN (SELECT id_traduc From assoctradlang WHERE id_langue='$langD')) ";
       if ($asserm =="1") {$query1.="AND (asseremente=1) ";

        }
        $sql1= mysqli_query($this->mysqli, $query1);

        return $sql1;
    }
}
