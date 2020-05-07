<?php


class logIn
{
    private $email;
    private $mdp;
    private $type;
    private $table;
    private $mysqli;
function logina($user)
{     $this->mysqli= new mysqli('localhost', 'root', '', 'webproject');
    $this->email=$user['email'];
    $this->mdp=$user['mdp'];
    $this->type=$user['type'];
    if ($this->type== 'client'){
        $this->table="`client`";
    }
    else $this->table="`traducteur`";
    $sql="SELECT * FROM $this->table WHERE `email` ='".$this->email."' AND `mdp`='".$this->mdp."'";
    $profile=mysqli_query($this->mysqli,$sql);

return $profile;

}




}