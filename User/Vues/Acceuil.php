<?php

include "../Controllers/getElementsController.php";

class Acceuil
{     var $title='Home';
    var $elementsController;
    public function affich(){
        $this->elementsController=new getElementsController();
     ?>


            <div class="row mycontainer">
                <div class="col-sm partieG" style="position: relative">
                    <h2 class="title">Articles à lire</h2>


                    <!-- Nav tabs -->
                    <div class="card" style="background-color: #e5b2fa;">
                        <div class="card-header" style="margin-top: 2vh; margin-left: 4vh; color: #171941;">
                            <i class="tim-icons icon-spaceship"></i><b>Objectif</b>
                        </div>
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content tab-space">
                                <div class="tab-pane active">
                                    <p style="color: #171941"><b>
                                            Ce site vous permet de trouver votre traducteur assérmenté ou non,
                                            pour tous vos documents et sites web.<span id="dots1">....</span><span id="more1">Pour ceci, il suffit de vous authntifier, envoyer
                                  votre formulaire de demande de devis de traduction, une liste de traducteurs adaptés à votre demande seront affichés</span>
                                            <a style="font-weight: bold; cursor: pointer; color:  #ba54f5;"
                                               onclick="readMore(1)" id="lireLasuite1">Lire la
                                                suite</a>


                                            </a>
                                        </b>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card" style="background-color: #e5b2fa;">
                        <div class="card-header" style="margin-top: 2vh; margin-left: 4vh; color: #171941;">
                            <i class="tim-icons icon-spaceship"></i><b>Objectif</b>
                        </div>
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content tab-space">
                                <div class="tab-pane active">
                                    <p style="color: #171941"><b>
                                            Ce site vous permet de trouver votre traducteur assérmenté ou non,
                                            pour tous vos documents et sites web.<span id="dots2">....</span><span id="more2">Pour ceci, il suffit de vous authntifier, envoyer
                                  votre formulaire de demande de devis de traduction, une liste de traducteurs adaptés à votre demande seront affichés</span>
                                            <a style="font-weight: bold; cursor: pointer; color:  #ba54f5;"
                                               onclick="readMore(2)" id="lireLasuite2">Lire la
                                                suite</a>


                                            </a>
                                        </b>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card" style="background-color: #e5b2fa;">
                        <div class="card-header" style="margin-top: 2vh; margin-left: 4vh; color: #171941;">
                            <i class="tim-icons icon-spaceship"></i><b>Objectif</b>
                        </div>
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content tab-space">
                                <div class="tab-pane active">
                                    <p style="color: #171941"><b>
                                            Ce site vous permet de trouver votre traducteur assérmenté ou non,
                                            pour tous vos documents et sites web.<span id="dots3">....</span><span id="more3">Pour ceci, il suffit de vous authntifier, envoyer
                                  votre formulaire de demande de devis de traduction, une liste de traducteurs adaptés à votre demande seront affichés</span>
                                            <a style="font-weight: bold; cursor: pointer; color:  #ba54f5;"
                                               onclick="readMore(3)" id="lireLasuite3">Lire la
                                                suite</a>


                                            </a>
                                        </b>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-sm partieD" >

                <span class="badge badge-success" style="padding: 1vh;background-color: transparent;"
                      data-toggle="tooltip" data-placement="top" title="Pour avoir plus de fonctionnalités"
                      data-container="body" data-animation="true">Authentifiez-vous!</span>
                    <br>

                    <div class="row" id="modals">
                        <div class="col-md">
                            <button class="btn btn-warning" data-toggle="modal" data-target="#myModal1">
                                Connexion
                            </button>
                        </div>
                        <div class="col-md">
                            <button class="btn btn-success" data-toggle="modal" data-target="#myModal2">
                                Inscription
                            </button>
                        </div>
                    </div>
                    <h3 class="title"> Demande de devis</h3>
                    <div class="" style="text-align: center !important;">
                        <form class="form" role="form"  method="post" enctype="multipart/form-data" action="../Controllers/traductionetdevisController.php">
                            <span id="avertir" style="color: #dc3545; visibility: hidden">Vous devez vous connecter d'abord! </span>
                            <div style="float: left; color: white">Infromations personelles</div>
                            <br><br>
                            <div class="row">
                                <div class="col-md">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-single-02"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nom" id="nom1" name="nom1" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-single-02"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Prénom" id="prenom1" name="prenom1" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-single-02"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Mail" id="email1" name="email1" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-single-02"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="N° de Tél" id="num1" name="num1" required>
                                    </div>
                                </div>

                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tim-icons icon-email-85"></i>
                                    </div>
                                </div>
                                <input type="text" placeholder="Votre adresse" class="form-control" name="adresse1" required>
                            </div>
                            <br>
                            <div style="float: left; color: white">Infromations sur la traduction</div>
                            <br><br>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Langue d'origine</label>
                                        <select class="form-control" id="langueS" name="langueS" required>
                                            <option value="">Selectionner Langue</option>
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
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Langue de traduction</label>
                                        <select class="form-control" id="langueD" name="langueD" required>
                                            <option value="">Selectionner Langue</option>
                                            <?php
                                            $langues=$this->elementsController->controllGetLangues();
                                            foreach ($langues as $langue){
                                                ?> <option  value="<?php echo($langue['id'])?>"><?php echo($langue['nom'])?></option> <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <label class="small"> Uploadez votre document</label><br>
                                    <div class="input-group">


                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input"
                                                   id="docTrad"
                                                   aria-describedby="inputGroupFileAddon01" name="docTrad" required>
                                            <label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Type de traduction</label>
                                        <select class="form-control" id="typeTrad" name="typeTrad" required >
                                            <option value="">Selectionner type</option>
                                            <?php
                                            $types=$this->elementsController->controllGetTypes();
                                            foreach ($types as $type){
                                                ?> <option  value="<?php echo($type['id'])?>"><?php echo($type['nom'])?></option> <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md">Traducteur Assermenté?</div>
                                <div class="col-md">Traduction ou Devis</div>
                            </div>
                            <div class="row">

                                <div class="col-md row">

                                    <div class="form-check form-check-radio col-md">
                                        <label class="form-check-label">

                                            <input class="form-check-input" type="radio" name="assermentc" id="asserment1" value=1  >
                                            <span class="form-check-sign"></span>
                                          Oui
                                        </label>
                                    </div>
                                    <div class="form-check form-check-radio col-md">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="assermentc" id="asserment2" value=0 checked >
                                            <span class="form-check-sign"></span>
                                            Pas forcément
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md row">
                            <div class="form-check form-check-radio col-md">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="devisVsTrad" id="devisVsTrad1" value=1  >
                                    <span class="form-check-sign"></span>
                                    Traduction
                                </label>
                            </div>
                            <div class="form-check form-check-radio col-md">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="devisVsTrad" id="devisVsTrad2" value=0 checked >
                                    <span class="form-check-sign"></span>
                                    Devis
                                </label>
                            </div>
                                </div>
                            </div>
                            <div class="form-group col-md">


                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Laissez un commentaire si vous voulez"></textarea>
                            </div>


                            <div class="g-recaptcha" data-sitekey="6LdMts8UAAAAABeelyOMpI_otNA91Ex58QuXOkX9" style="transform:scale(0.8);transform-origin:0 0"></div>


                            <div style="float: right">
                                <a  class=" btn btn-primary"  onclick="get_all_traducteurs()" >Afficher les traducteurs</a>

                            </div>



        <div class="modal fade modal-black" id="listeTraducteurs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove text-white"></i>
                        </button>
                        <div class="text-muted text-center ml-auto mr-auto">
                            <h3 class="mb-0">Traducteurs</h3>
                            <label>
                                Choisissez les traducteurs
                            </label>
                        </div>
                    </div>
                    <div class="modal-body">

                        <div class="row" id="liste" style="overflow-y: auto">


                        </div>
                        <button type="submit" class="btn btn-primary my-4" id="btnDevis" name="btnDevis" value="devisettraduction">Confirmer</button>
                    </div>
                </div></div></div>

        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade  modal-black modal-mini" id="myModal1" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" >
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="tim-icons icon-simple-remove text-white"></i>
                            </button>
                            <div class="modal-profile">
                                <i class="tim-icons icon-single-02"></i>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form role="form" action="../Controllers/Controller.php" method="post" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-email-85" style="float: left;"></i>
                      </span>
                                        </div>
                                        <input class="form-control" placeholder="Email" type="email" name="logmail" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-key-25"></i>
                      </span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password" name="logmdp" required>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="personne" id="traducteur" value="traducteur">
                                                <span class="form-check-sign"></span>
                                                Traducteur
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-md">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="personne" id="client" value="client" checked>
                                                <span class="form-check-sign"></span>
                                                Client
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4" name="logIn" value="logIn">Sign in</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Modal -->
            <div class="modal fade modal-black" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="tim-icons icon-simple-remove text-white"></i>
                            </button>
                            <div class="text-muted text-center ml-auto mr-auto">
                                <h3 class="mb-0">Inscription</h3>
                                <label>
                                    Si vous etes traducteur,
                                    <a href="#">inscivez-vous ici</a>
                                </label>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="text-center text-muted mb-4 mt-3">
                                <small>Remplissez le formulaire</small>
                            </div>
                            <form role="form" action="../Controllers/Controller.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group mb-3 col-md">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                      <span class="input-group-text">
                       <i class="tim-icons icon-single-02"></i>
                      </span>
                                            </div>
                                            <input class="form-control" placeholder="Nom" type="text" name="nomc" required/>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 col-md">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                      <span class="input-group-text">
                       <i class="tim-icons icon-single-02"></i>
                      </span>
                                            </div>
                                            <input class="form-control" placeholder="Prénom" type="text" name="prenomc" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-3 col-md">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-email-85"></i>
                      </span>
                                            </div>
                                            <input class="form-control" placeholder="Email" type="email" name="emailc" required/>
                                        </div>
                                    </div>
                                    <div class="form-group col-md">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-phone-volume"></i>
                      </span>
                                            </div>
                                            <input class="form-control" placeholder="N° de tél" type="text" name="numc" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-phone-volume"></i>
                      </span>
                                        </div>
                                        <input class="form-control" placeholder="Adresse" type="text" name="adressec" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-key-25"></i>
                      </span>
                                            </div>
                                            <input class="form-control" placeholder="Mot de passe" type="password" name="mdpc" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-key-25"></i>
                      </span>
                                            </div>
                                            <input class="form-control" placeholder="Confirmer mot de passe" type="password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check mt-3">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="checkbox" class="bootstrap-switch"/>
                                        J'accepte les termes
                                    </label>
                                </div>

                                <div class="text-center">
                                    <button  class="btn btn-primary my-4" type="submit" name="inscription" value="inscription">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!--  End Modal -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script>
            function get_all_traducteurs() {

                var langS = $("#langueS").val();
                var typeTrad = $("#typeTrad").val();
                var langD = $("#langueD").val();
                var asserm=$('input[name$="assermentc"]:checked').val();

                if ((langS!="") && (langD != "") &&(asserm != "") &&(typeTrad !="")){
                    $('#listeTraducteurs').modal('show');

                    $.ajax(
                        {
                            url:'../Controllers/getElementsController',
                            type:'POST',
                            data:{langS:langS,langD:langD,asserm:asserm,typeTrad:typeTrad},

                            beforeSend:function()
                            {
                                $("#liste").html("working...");

                            },
                            success:function(data)
                            {
                                $("#liste").html(data);
                            },
                        });
                }

         /*      */
            }

        </script>


<?php
    }

}
