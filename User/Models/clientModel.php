<?php

class clientModel{
    private $dbname="webproject";
    private $host="localhost";
    private $user="root";
    private $password="";

    private $mysqli;

    function getClients(){
        $this->mysqli=$this->mysqli();
        $query1="select * from client ";
        $sql1= mysqli_query($this->mysqli, $query1);
        return $sql1;
    }


    private function mysqli(){
        $c= new mysqli('localhost', 'root', '', 'webproject');
        return $c;
    }


    public function supprim($id){
        $this->mysqli=$this->mysqli();
        $qtf="update client set supprime='1' WHERE id=".$id ;
        $r=mysqli_query( $this->mysqli,$qtf);

    }

    public function bloq($id){
        $this->mysqli=$this->mysqli();
        $qtf="update client set bloque='1' WHERE id=".$id ;
        $r=mysqli_query( $this->mysqli,$qtf);

    }


    public function debloq($id){
        $this->mysqli=$this->mysqli();
        $qtf="update client set bloque='0' WHERE id=".$id ;
        $r=mysqli_query( $this->mysqli,$qtf);

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
    public function getClient($id){
        $this->mysqli=$this->mysqli();
        $query1="select * from client WHERE id= '" . $id. "'LIMIT 1 " ;
        $sql1= mysqli_query($this->mysqli, $query1);
        return $sql1;
    }
    public function modifier($id,$nom,$prenom,$mail,$num,$fax,$adr){

        $this->mysqli=$this->mysqli();
        $req="update client set nom='".$nom."' , prenom='".$prenom."',email='".$mail."',tel=".$num.",adresse='".$adr."', fax='".$fax."' where id=".$id;
        $sql1= mysqli_query($this->mysqli, $req);

    }
    public function getNonVus($id){
        $this->mysqli=$this->mysqli();
        $qtf="select * from `assoctradtraduction`  where supp =0 AND unseen=1 AND idTrad=".$id ;
        $r=mysqli_query( $this->mysqli,$qtf);
        return $r;
    }
    public  function getDocByIdTraductionDevis($idTraduction){
        $this->mysqli=$this->mysqli();
        $qtf="select * from `documentsoumis` where devisVsTrad=0 AND idTraduction=".$idTraduction ;
        $r=mysqli_query( $this->mysqli,$qtf);
        return $r;
    }
    public function getTraducteur($id){
        $this->mysqli=$this->mysqli();
        $query1="select * from traducteur WHERE id= '" . $id. "'LIMIT 1 " ;
        $sql1= mysqli_query($this->mysqli, $query1);
        return $sql1;
    }
    public function noter($id,$note){
        $this->mysqli=$this->mysqli();
        $req="update `assoctradtraduction` set note='".$note."' WHERE id=".$id;
        $qtf=mysqli_query( $this->mysqli,$req);
    }
}
