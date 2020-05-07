<?php


class blog
{ var $title='Blog';
public function affich(){
?>
<div style="padding:10vh">
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
</div>
<?php
}
}