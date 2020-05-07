<?php


class traductionetdevisModel
{
    private $mysqli;
    private $path;
    private $nameDoc;
    private $date;
    private $traducteurs;
    function __construct($asserm,$idClient,$nom,$prenom,$email,$num,$adresse,$langOrigin,$langDest,$traducteurs,$fichiers,$type,$devisVsTrad)
    {
        $this->mysqli= new mysqli('localhost', 'root', '', 'webproject');
        $query= "INSERT INTO `traduction` ( `nom`, `prenom`, `email`, `num`, `adresse`,  `idClient`, `typeTrad`, `langOrigin`, `langDest`, `asserm`, `devisVsTrad` ) 
                                    VALUES ('$nom','$prenom','$email','$num','$adresse','$idClient','$type','$langOrigin','$langDest','$asserm','$devisVsTrad')";
        $sql3= mysqli_query($this->mysqli, $query);
        $idTraductionDevis=$this->mysqli->insert_id;
        $this->setTraducteurs($idTraductionDevis,$traducteurs,$devisVsTrad);
        $this->setDataFiles($idTraductionDevis,$fichiers,$type,$devisVsTrad);
    }
    private function setDataFiles($idTraductionDevis,$fichiers,$type,$devisVstrad){
        $target_dirCV = "../documents/";
        $target_fileCV = $target_dirCV . $idTraductionDevis."Doc". basename($fichiers["docTrad"]["name"]);
        $uploadOk = 1;
        if (move_uploaded_file($fichiers["docTrad"]["tmp_name"], $target_fileCV)) {
            echo "The cv has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your cv.";
        }
        $this->path=$target_fileCV;
        $this->nameDoc=basename($fichiers["docTrad"]["name"]);
        $this->date=date("Y-m-d");
        $typo=$this->getNomType($type);

        $query3= "INSERT INTO `documentsoumis` (`nom`, `chemin`,`date`, `type`,`devisVsTrad`,`idTraduction` ) VALUES ('$this->nameDoc','$this->path','$this->date','$typo','$devisVstrad','$idTraductionDevis')";
        $sql3= mysqli_query($this->mysqli, $query3);



    }
    function setTraducteurs($idTraductionDevis,$traducteurs,$devisVsTrad){
        foreach ($traducteurs as $traducteur){
            echo $traducteur;
            $query="INSERT INTO assoctradtraduction ( `idTrad`, `idTraduction`, `type`) VALUES ('$traducteur','$idTraductionDevis','$devisVsTrad')";
            $sql= mysqli_query($this->mysqli, $query);

        }
    }
    private function getNomType($type){
        $query="SELECT * From typetraduction WHERE id='$type'";
        $sql= mysqli_query($this->mysqli, $query);
        foreach ($sql as $typpo){
            $typ=$typpo;
        }
return $typ['nom'];
}

    }

