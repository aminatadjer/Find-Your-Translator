<?php


class incription
{
    private $nom;
    private $prenom;
    private $email;
    private $num;
    private $adresse;
    private  $mdp;
    private $mysqli;
public function __construct($client)
{
    if (is_array($client)){
        $this->setDataClient($client);
        print_r($client);

    }
    else{
        throw new Exception("Error client must be an array");}

    $this->mysqli= new mysqli('localhost', 'root', '', 'webproject');
    $this->inscrireClient();
}
    private function setDataClient($client){
        $this->nom=$client['nom'];
        $this->prenom=$client['prenom'];
        $this->email=$client['email'];
        $this->num=$client['num'];
        $this->adresse=$client['adresse'];
        $this->mdp=$client['mdp'];

    }
    function inscrireClient(){
        $query1="INSERT INTO   `client` ( `nom`, `prenom`, `email`, `num`, `adresse`, `mdp`) 
            VALUES ('$this->nom','$this->prenom','$this->email','$this->num','$this->adresse','$this->mdp')";
        $sql= mysqli_query($this->mysqli, $query1);
        if ($sql){
            header('Location: '.$_SERVER['HTTP_REFERER']);
        }
        else echo "errrrrrrror";

    }
function mailExistant($mail){
    $this->mysqli= new mysqli('localhost', 'root', '', 'webproject');
    $query="SELECT * FROM `client` WHERE email='$mail'";
    $sql=mysqli_query($this->mysqli,$query);
    $lengths=mysqli_num_rows($sql);
    if ($lengths==0){
        return 0;
    }
    else return 1;
}


}