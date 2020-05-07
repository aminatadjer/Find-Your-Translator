<?php

//model

class recrutement
{
// `id`, `nom`, `prenom`, `email`, `num`, `adresse`, `mdp`, `asserment`
private $nom;
private $prenom;
private $email;
private $num;
private $adresse;
private  $mdp;
private $asserment;
private $langues;
private $fichiers;
private $pathCV;
private $pathPreuve;
private $mysqli;
private $type;


function __construct($traducteur,$langues,$fichiers,$type)
{
    if (is_array($traducteur)){
 $this->setDataTraducteur($traducteur);
 $this->setDataLangues($langues);
 $this->fichiers=$fichiers;
 $this->type=$type;

    }
    else{
    throw new Exception("Error: traducteurs data must be an array!");}
    $this->mysqli= new mysqli('localhost', 'root', '', 'webproject');
    $this->registerTraducteur();

}
private function setDataTraducteur($traducteur){
    $this->nom=$traducteur['nom'];
    $this->prenom=$traducteur['prenom'];
    $this->email=$traducteur['email'];
    $this->num=$traducteur['num'];
    $this->adresse=$traducteur['adresse'];
    $this->mdp=$traducteur['mdp'];
    $this->asserment=$traducteur['asserment'];
}
private function setDataLangues($langues){
    $this->langues=$langues;

}
private function setDataFiles($fichiers,$idTrad){
    $target_dirCV = "../fichiersTraducteur/cv/";
    $target_fileCV = $target_dirCV . $idTrad."CV". basename($fichiers["cv"]["name"]);
    $uploadOk = 1;
    if (move_uploaded_file($fichiers["cv"]["tmp_name"], $target_fileCV)) {
        echo "The cv has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your cv.";
    }
     $this->pathCV=$target_fileCV;
    if ($fichiers['preuveIn']['size'] > 0 ) {
        $target_dirPreuve = "../fichiersTraducteur/assermentation/";
        $target_filePreuve = $target_dirPreuve . $idTrad . "Preuve" . basename($fichiers["preuveIn"]["name"]);
        $uploadOk = 1;
        if (move_uploaded_file($fichiers["preuveIn"]["tmp_name"], $target_filePreuve)) {
            echo "The Asserm has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your asserm.";
        }

        $this->pathPreuve = $target_filePreuve;
    }

}
private function setDataType(){

}
function registerTraducteur(){
echo 'hi';
    $query1="INSERT INTO   `traducteur` ( `nom`, `prenom`, `email`, `tel`, `adresse`, `mdp`, `asseremente`) 
            VALUES ('$this->nom','$this->prenom','$this->email','$this->num','$this->adresse','$this->mdp','$this->asserment')";
    $sql= mysqli_query($this->mysqli, $query1);
    if ($sql){
        $idTrad=$this->mysqli->insert_id;
        foreach ($this->langues as $langue) {
            $query2 = "INSERT INTO `assoctradlang` (`idTrad`, `idLang`) VALUES ('$idTrad','$langue')";
            $sql1= mysqli_query($this->mysqli, $query2);

            }

        for ($i=1;$i<4;$i++){


            if($this->type[$i] == 1){
                $queryType="INSERT INTO `assoctradtype` (`idTrad`, `idType`) VALUES ('$idTrad','$i')";
                $sqlType= mysqli_query($this->mysqli, $queryType);
            }
        }

        $this->setDataFiles($this->fichiers,$idTrad);
        $nameCV=basename($this->fichiers["cv"]["name"]);
        $query3= "INSERT INTO `fichiertraducteurs` (`nom`, `chemin`, `typeFich`, `idTrad`) VALUES ('$nameCV','$this->pathCV','0','$idTrad')";
        $sql3= mysqli_query($this->mysqli, $query3);
        if ($this->fichiers['preuveIn']['size'] > 0){
            $namePreuve=basename($this->fichiers["preuveIn"]["name"]);
            $query3= "INSERT INTO `fichiertraducteurs` (`nom`, `chemin`, `typeFich`, `idTrad`) VALUES ('$namePreuve','$this->pathPreuve','2','$idTrad')";
            $sql3= mysqli_query($this->mysqli, $query3);
        }
    }
    else {
        echo "Error: ";
    }
}

}