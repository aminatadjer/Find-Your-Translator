<?php



include '../Controllers/getElementsController.php';

class Recrutement
{   var $elementsController;
    var $title = 'Recrutement ';


    public function affich()
    {   $this->elementsController=new getElementsController();
        ?>
        <div class="recrutement" xmlns="http://www.w3.org/1999/html" style="padding-top: 0;">


            <div class="row row-grid justify-content-between">
                <div class="col-md" style="padding-top: 10%;">
                    <h3 class="display-3 text-white">Devenez un traducteur sur notre plateforme!

                    </h3>
                    <p class="text-white mb-3"> Il suffit de vous inscrire en remplissant ce formulaire. Une fois votre
                        demande est validée par notre équipe, vous pourrez recevoir des offres de travail!</p>
                    <div class="btn-wrapper">
                        <a href="routeurApropos.php" class="btn btn-info">Lire A propos de nous!</a>
                    </div>
                </div>
                <div class="col-md ">
                    <div class="card card-register" style="margin: 10%">
                        <div class="card-header" style="padding: 2%; padding-top: 4%;">
                            <img class="card-img" src="../DesignKit/assets/img/square1.png" alt="Card image"
                                 style="width: 65%">
                            <h4 class="card-title">Register</h4>
                            <ul class="nav nav-tabs nav-tabs-primary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" id="profile">
                                        <i class="tim-icons icon-spaceship"></i> Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" id="competence">
                                        <i class="tim-icons icon-settings-gear-63"></i>Compétences
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#link3" role="tablist" id="categorie">
                                        <i class="tim-icons icon-bag-16"></i>Catégorie
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body" style="padding-top: 0;">
                            <form class="form" action="../Controllers/Controller.php" method="post" enctype="multipart/form-data">
                            <div class="tab-content tab-space">
                                <div class="tab-pane active" id="link1">

                                        <div class="row">
                                            <div class="input-group col-md">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="tim-icons icon-email-85"></i>
                                                    </div>
                                                </div>
                                                <input name="nom" type="text" placeholder="Nom" class="form-control" required>
                                            </div>
                                            <div class="input-group col-md">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="tim-icons icon-single-02"></i>
                                                    </div>
                                                </div>
                                                <input name="prenom" type="text" class="form-control" placeholder="Prénom" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group col-md">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="tim-icons icon-email-85"></i>
                                                    </div>
                                                </div>
                                                <input name="email" type="text" placeholder="Email" class="form-control" required>
                                            </div>
                                            <div class="input-group col-md">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="tim-icons icon-single-02"></i>
                                                    </div>
                                                </div>
                                                <input name="num" type="text" class="form-control" placeholder="N° Tel" required>
                                            </div>
                                        </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="tim-icons icon-email-85"></i>
                                                    </div>
                                                </div>
                                                <input name="adresse" type="text" placeholder="adresse" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-key-25"></i>
                      </span>
                                                    </div>
                                                    <input name="mdp" class="form-control" placeholder="Password" type="password" required>
                                                </div>
                                            </div>


                                        <a  class="btn btn-info btn-round btn-lg"
                                           style="float: right; margin-top: 10%;"  onclick="suivre1()">Suivant</a>

                                </div>


                                <div class="tab-pane" id="link2">


                                        <div class="row">
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect2">Langues maitrisée</label>
                                                    <select multiple class="form-control"
                                                            id="selectedLangues" name="Langues[]" required>
                                                        <?php
                                                        $langues=$this->elementsController->controllGetLangues();
                                                        foreach ($langues as $langue){
                                                            ?> <option  value="<?php echo($langue['id'])?>"><?php echo($langue['nom'])?></option> <?php
                                                        }
                                                       ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <label class="small"> Votre CV</label><br>
                                                <div class="input-group">


                                                    <div class="custom-file">

                                                        <input name="cv" type="file" class="custom-file-input"
                                                               id="cv"
                                                               aria-describedby="inputGroupFileAddon01" required>
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <label class="small"> Choisissez des références</label><br>
                                                <div class="input-group">


                                                    <div class="custom-file">

                                                        <input type="file" class="custom-file-input"
                                                               id="inputGroupFile01"
                                                               aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md"><a
                                                                   class="btn btn-info btn-round btn-lg"
                                                                   style="float: right; margin-top: 10%;" onclick="suivre2()">Suivant</a>
                                            </div>
                                        </div>




                                </div>
                                <div class="tab-pane" id="link3">


                                    <label style="margin: auto">Choisissez le type de documents que vous pouvez
                                        traduire!</label>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="general" id="general">
                                                        General
                                                        <span class="form-check-sign">
              <span class="check"></span>
          </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="site" id="site">
                                                        Site web
                                                        <span class="form-check-sign">
              <span class="check"></span>
          </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="scientifique" id="scientifique">
                                                        Scientifique
                                                        <span class="form-check-sign">
              <span class="check"></span>
          </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input name="asserment" class="form-check-input" type="checkbox" id="asserment"
                                                           onchange="return validate()" value="off">
                                                    Etes vous assermenté?
                                                    <span class="form-check-sign">
              <span class="check"></span>
          </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md" style="visibility: hidden" id="preuve">
                                            <label class="small"> Preuve</label><br>
                                            <div class="input-group">


                                                <div class="custom-file">

                                                    <input type="file" class="custom-file-input"
                                                           id="preuveIn" name="preuveIn"
                                                           aria-describedby="inputGroupFileAddon01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button  class="btn btn-info btn-round btn-lg"
                                       style="float: right; margin-top: 10%;" value="register" type="submit" name="submit">Confirmer</button>

                                </div>
                            </div>

                </form>
                        </div>


                    </div>
                </div>

            </div>

        </div>
                <script>
            $('.carousel').carousel({
                interval: 3000
            })
        </script>

        <script>
            function suivre1() {
                document.getElementById('profile').className="nav-link";
                document.getElementById('competence').className="nav-link active";
                document.getElementById('link1').className="tab-pane";
                  document.getElementById('link2').className="tab-pane active";
            }
            function suivre2() {
                document.getElementById('competence').className="nav-link";
                document.getElementById('categorie').className="nav-link active";
                document.getElementById('link2').className="tab-pane";
                  document.getElementById('link3').className="tab-pane active";
            }
            function validate() {
                if (document.getElementById('asserment').checked) {
                    document.getElementById('preuve').style.visibility = 'visible';
                    document.getElementById("preuveIn").required = true;
                } else {
                    document.getElementById('preuve').style.visibility = 'hidden';
                    document.getElementById("preuveIn").required = false;

                }
            }


        </script>
        <?php
    }

}
