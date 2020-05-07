<?php


class GeneralComponentsAdmin
{


    private function head_page(){
        ?>
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="apple-touch-icon" sizes="76x76" href="../../DesignKit/assets/img/apple-icon.png">
            <link rel="icon" type="image/png" href="../../DesignKit/assets/img/favicon.png">
            <title>
                Admin | Find your Translator
            </title>
            <!--     Fonts and icons     -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet"/>
            <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
            <!-- Nucleo Icons -->
            <link href="../../DesignKit/assets/css/nucleo-icons.css" rel="stylesheet"/>
            <!-- CSS Files -->
            <link href="Styles/designedElements.css" rel="stylesheet"/>
            <link href="Styles/home.css" rel="stylesheet"/>






        </head>
    <?php }
    private function animatedBackground(){
    ?>
    <div class="backGroundAnimated">
        <div class="squares square1"></div>
        <div class="squares square2"></div>
        <div class="squares square3"></div>
        <div class="squares square4"></div>
        <div class="squares square5"></div>
        <div class="squares square6"></div>
        <div class="squares square7"></div>
    </div>
    <?php
}
    private function navbar(){
        ?>
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="5" id="mynavbar">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand">
                        <img src="https://img.icons8.com/nolan/64/google-translate.png" class="logoImg" rel="tooltip"
                             title="FTY•Find your translator here!" data-placement="bottom" target="_blank" />
                    </a>
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navigation"
                            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse justify-content-between" id="navigation">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a>
                                    FTY•
                                </a>
                            </div>
                            <div class="col-6 collapse-close text-right">
                                <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#navigation"
                                        aria-controls="navigation-index" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <i class="tim-icons icon-simple-remove"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item p-0">
                            <a class="nav-link" href="routeurAcceuil.php">
                                Acceuil
                            </a>
                        </li>
                        <li class="nav-item p-0">
                            <a class="nav-link" href="routeurRecrutement.php">
                                Recrutement
                            </a>
                        </li>
                        <li class="nav-item p-0">
                            <a class="nav-link" rel="tooltip" title="Type de traduction" data-placement="bottom" href=""
                               target="_blank">
                                Type

                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">Traducteurs
                            </a>
                            <div class="dropdown-menu dropdown-with-icons">
                                <a href="routeurTraducteur.php"
                                   class="dropdown-item">
                                    <i class="tim-icons icon-paper"></i> Tous
                                </a>
                                <a href="#"
                                   class="dropdown-item">
                                    <i class="tim-icons icon-paper"></i> général
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="tim-icons icon-bullet-list-67"></i>scientifique
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="tim-icons icon-image-02"></i>site web
                                </a>
                            </div>
                        </li>

                        <li class="nav-item p-0">
                            <a class="nav-link" href="routeurBlog.php">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item p-0">
                            <a class="nav-link" href="routeurApropos.php">
                                A propos
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item p-0 ">
                            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href=""
                               target="_blank">
                                <i class="fab fa-twitter"></i>
                                <p class="d-lg-none d-xl-none">Twitter</p>
                            </a>
                        </li>
                        <li class="nav-item p-0">
                            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href=""
                               target="_blank">
                                <i class="fab fa-facebook-square"></i>
                                <p class="d-lg-none d-xl-none">Facebook</p>
                            </a>
                        </li>
                        <li class="nav-item p-0"style>
                            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom"
                               href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                                <i class="fab fa-instagram"></i>
                                <p class="d-lg-none d-xl-none">Instagram</p>
                            </a>
                        </li>
                        <li class="dropdown nav-item" style="visibility: hidden;">
                            <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-with-icons">
                                <a href="#"
                                   class="dropdown-item">
                                    Mon profile
                                </a>
                                <a href="#"
                                   class="dropdown-item" onclick="<?php session_destroy(); ?>">
                                    <i class="fas fa-sign-out-alt"></i>Log out
                                </a>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <?php
    }
    private function footer(){
        ?>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h1 class="title">FYT•</h1>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">
                                    Acceuil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./examples/landing-page.html" class="nav-link">
                                    A propos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./examples/register-page.html" class="nav-link">
                                    Traducteurs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./examples/profile-page.html" class="nav-link">

                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="https://creative-tim.com/contact-us" class="nav-link">
                                    Contact Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://creative-tim.com/about-us" class="nav-link">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://creative-tim.com/blog" class="nav-link">
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://opensource.org/licenses/MIT" class="nav-link">
                                    License
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3 class="title">Follow us:</h3>
                        <div class="btn-wrapper profile">
                            <a target="_blank" href="https://twitter.com/creativetim"
                               class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip"
                               data-original-title="Follow us">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/creativetim"
                               class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip"
                               data-original-title="Like us">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a target="_blank" href="https://dribbble.com/creativetim"
                               class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip"
                               data-original-title="Follow us">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?php
    }
 /*   private function scripts(){
        ?> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../DesignKit/assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="../DesignKit/assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="../DesignKit/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
        <script src="../DesignKit/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="../DesignKit/assets/js/plugins/bootstrap-switch.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="../DesignKit/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
        <!-- Chart JS -->
        <script src="../DesignKit/assets/js/plugins/chartjs.min.js"></script>
        <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
        <script src="../DesignKit/assets/js/plugins/moment.min.js"></script>
        <script src="../DesignKit/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
        <!-- Black Dashboard DEMO methods, don't include it in your project! -->
        <script src="../DesignKit/assets/demo/demo.js"></script>
        <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
        <script src="../DesignKit/assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
        <script src="Scripts/home.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                blackKit.initDatePicker();
                blackKit.initSliders();
            });

            function scrollToDownload() {

                if ($('.section-download').length != 0) {
                    $("html, body").animate({
                        scrollTop: $('.section-download').offset().top
                    }, 1000);
                }
            }
            $('.carousel').carousel({
                interval: 3000
            })
        </script>

        <?php
    } */

    public function affich($content){
        $c=$content;
        ?>
        <!DOCTYPE html>
        <html lang="en">
     <?php
        $this->head_page(); ?>
     <body class="index-page" style="background-image: url('../../DesignKit/assets/img/dots.png');overflow-x: hidden" >
     <div class="page_acceuil">
         <?php
        $this->animatedBackground();
 ?>
         <div class="allContent" style="overflow-x: hidden">
     <?php  $content->affich();?>
         </div>
     </div>
     <?php /* $this->scripts(); */?>
     </body>
        </html>
<?php
}
     }


