<?php

class traducteurModel{
    private $dbname="webproject";
    private $host="localhost";
    private $user="root";
    private $password="";
    private $mysqli;

    function getTraducteurs(){
        $this->mysqli=$this->mysqli();
        $query1="select * from traducteur ";
        $sql1= mysqli_query($this->mysqli, $query1);
        return $sql1;
    }


    private function mysqli(){
        $c= new mysqli('localhost', 'root', '', 'webproject');
        return $c;
    }



    public function assoctypetrad($id){
        $this->mysqli=$this->mysqli();
        $qtf="select * from assoctradtype  where id_traduc=".$id ;
        $r=mysqli_query($this->mysqli,$qtf);
        return $r;
    }

    public function assoclanguetrad($id){
        $this->mysqli=$this->mysqli();
        $qtf="select * from assoctradlang  where id_traduc=".$id ;
        $r=mysqli_query( $this->mysqli,$qtf);

        return $r;
    }


    public function typeaffich($id){
        $this->mysqli=$this->mysqli();
        $qtf="select * from typetraduction  where id=".$id ;
        $r=mysqli_query( $this->mysqli,$qtf);
        return $r;
    }

    public function langueaffich($id){
        $this->mysqli=$this->mysqli();
        $qtf="select * from langue  where id=".$id ;
        $r=mysqli_query( $this->mysqli,$qtf);
        return $r;
    }

    public function supprim($id){
        $this->mysqli=$this->mysqli();
        $qtf="update traducteur set supprime='1' WHERE id=".$id ;
        $r=mysqli_query( $this->mysqli,$qtf);

    }

    public function bloq($id){
        $this->mysqli=$this->mysqli();
        $qtf="update traducteur set bloque='1' WHERE id=".$id ;
        $r=mysqli_query( $this->mysqli,$qtf);

    }


    public function debloq($id){
        $this->mysqli=$this->mysqli();
        $qtf="update traducteur set bloque='0' WHERE id=".$id ;
        $r=mysqli_query( $this->mysqli,$qtf);

    }
    public function getTraducteur($id){
        $this->mysqli=$this->mysqli();
        $query1="select * from traducteur WHERE id= '" . $id. "'LIMIT 1 " ;
        $sql1= mysqli_query($this->mysqli, $query1);
        return $sql1;
    }
    public function getWilaya($id){
        $this->mysqli=$this->mysqli();
        $query1="select * from wilayas WHERE id= '" . $id. "'LIMIT 1 " ;
        $sql1= mysqli_query($this->mysqli, $query1);
        return $sql1;
    }
    public function getCommune($id){
        $this->mysqli=$this->mysqli();
        $query1="select * from communes WHERE id= '" . $id. "'LIMIT 1 " ;
        $sql1= mysqli_query($this->mysqli, $query1);
        return $sql1;
    }

    public function modifier($id,$nom,$prenom,$mail,$num,$fax,$adr){

        $this->mysqli=$this->mysqli();

            $req="update traducteur set nom='".$nom."' , prenom='".$prenom."',email='".$mail."',tel=".$num.",adresse='".$adr."', fax='".$fax."' where id=".$id;
        $sql1= mysqli_query($this->mysqli, $req);

    }
}