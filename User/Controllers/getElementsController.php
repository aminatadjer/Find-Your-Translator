<?php

include '../Models/getElements.php';
class getElementsController
{
function controllGetLangues(){
    $langueManager=new getElements();
    $langues=$langueManager->getLangues();
    return $langues;
}
    function controllGetTypes(){
        $langueManager=new getElements();
        $types=$langueManager->getTypes();
        return $types;
    }
    function controllGetTraducteurs(){
        $Manager=new getElements();
        $traducteurs=$Manager->getTraducteurs();
        return $traducteurs;
    }
    function controllGetTraducteursGeneral(){
        $Manager=new getElements();
        $traducteurs=$Manager->getTraducteursGenral();
        return $traducteurs;
    }
    function controllGetTraducteursScientifique(){
        $Manager=new getElements();
        $traducteurs=$Manager->getTraducteursScientifique();
        return $traducteurs;
    }
    function controllGetTraducteursSite(){
        $Manager=new getElements();
        $traducteurs=$Manager->getTraducteursSite();
        return $traducteurs;
    }
    function get_Traducteurs_choix(){
        $Manager=new getElements();
        $langS=$_POST['langS'];
        $langD=$_POST['langS'];
        $asserm=$_POST['asserm'];
        $typeTrad=$_POST['typeTrad'];
        $traducteurs=$Manager->getTraducteursByChoix($langS,$langD,$asserm,$typeTrad);

        foreach ($traducteurs as $traducteur){
            echo ' <div class="card col-md-6 " style="padding: 2px;">
                                    <div class="card-header">
                                      '.$traducteur['nom'].'   '.$traducteur['prenom'].'

                                    </div>
                                    <div class="card-body" >
                                          <table>
  <thead class=" text-primary">
           <tr>
            
                <th class="header "> </th>
                
               <th class="header "></th>
              
               
           </tr>
           </thead>
            <tbody>
            <tr>
            <td><strong>Email</strong></td>
            <td>'.$traducteur['email'].' </td>
</tr>
<tr>
            <td><strong>Numéro</strong></td>
            <td>'.$traducteur['tel'].' </td>
</tr>
<tr>
            <td><strong>Fax</strong></td>
            <td>'.$traducteur['fax'].' </td>
</tr>
<tr>
            <td><strong>Nb Trad</strong></td>
            <td>'.$traducteur['nbTraductions'].' </td>
</tr>
            </tbody></table>
             <div class="form-check">
                                                    <label class="form-check-label">
                                                   
                                                        <input class="form-check-input" type="checkbox" name="choix[]" id="choix" value='.$traducteur['id'].'>
                                                        Choisir
                                                        <span class="form-check-sign">
              <span class="check"></span>
          </span>
                                                    </label>
                                                </div>

                                    </div>
                                </div>
';

        }

    }
}
$c =new getElementsController();
if(isset($_POST['langS']) &&  isset($_POST['langD']) &&  isset($_POST['asserm']) &&  isset($_POST['typeTrad'])){
    $c->get_Traducteurs_choix();
}