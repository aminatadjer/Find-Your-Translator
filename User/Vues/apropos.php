<?php


class apropos
{   var $title='A propos';
    public function affich(){
        ?>
        <div class="section">
            <div class="container" style="padding: 10vh;">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h1 class="profile-title text-left">Find your Translator! </h1>
                        <h5 class="text-on-back">01</h5>
                        <p class="profile-description">Vous etes traducteur assermenté, ou non ! Vous voulez gagner de l'argent. Vous connaissez le chinois, espagnol, anglais,... Ou n'importe quelle langue, vous voulez traduire des documents, ,'hésitez surtout pas à vous inscrire!</p>
                        <div class="btn-wrapper profile pt-3">
                            <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-icon btn-twitter btn-round" data-toggle="tooltip" data-original-title="Follow us">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-icon btn-facebook btn-round" data-toggle="tooltip" data-original-title="Like us">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-icon btn-dribbble  btn-round" data-toggle="tooltip" data-original-title="Follow us">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                        <h4 class="title" style="color: white!important;"><a href="routeurRecrutement.php">On recrute</a></h4>
                        <div class="card card-coin card-plain">
                            <div class="card-header" style="color: white!important;">
                                <img src="../DesignKit/assets/img/mike.jpg" class="img-center img-fluid rounded-circle">

                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#linka">
                                            Info
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#linkb">
                                            Skills
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#linkc">
                                            Catégorie
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-subcategories">
                                    <div class="tab-pane active" id="linka">
                                        Vous devez rentrer vos informations personelles: Nom, prénom, Email...
                                    </div>
                                    <div class="tab-pane" id="linkb">
                                        <div class="row">
                                            Vous devez attacher votre CV, des références si vous en avez! Et spécifier les langues que vous maitrisez!
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="linkc">
                                        <div class="table-responsive">
                                            <table class="table tablesorter " id="plain-table">
                                                <thead class=" text-primary">
                                                <tr>
                                                    <th class="header">
                                                        Il y'a trois catégorie pour le moment
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                     Sites web à traduire!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Documents Generaux
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                       Documents Scientifiques
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between" style="padding-top: 10vh">
                    <div class="col-md-6">
                        <div class="row justify-content-between align-items-center">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-left: 5vh">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block" src="../DesignKit/assets/img/drapeaux.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Big City Life, United States</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block" src="../DesignKit/assets/img/fabien-bazanegue.jpg" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Somewhere Beyond, United States</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block" src="../DesignKit/assets/img/mark-finn.jpg" alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Stocks, United States</h5>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <i class="tim-icons icon-minimal-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <i class="tim-icons icon-minimal-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h1 class="profile-title text-left">Nos projets</h1>
                        <h5 class="text-on-back">02</h5>
                        <p class="profile-description text-left">Notre site a été crée par une jeune équipe d'étudiants. Nous avons voulu faciliter le processus de recerche de traducteurs en ligne, tout en tenant compte des exigences du client</p>
                        <div class="btn-wrapper pt-3">
                            <button href="javascript:void(0)" class="btn btn-simple btn-primary">
                                <i class="tim-icons icon-book-bookmark"></i> Bookmark
                            </button>
                            <button href="javascript:void(0)" class="btn btn-simple btn-info">
                                <i class="tim-icons icon-bulb-63"></i> Check it!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section" style="margin: 10vh">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-plain">
                            <div class="card-header">
                                <h1 class="profile-title text-left">Contact</h1>
                                <h5 class="text-on-back">03</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <input type="text" class="form-control" value="Amina">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" class="form-control" placeholder="amina@email.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" value="001-12321345">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" class="form-control" value="Esi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <input type="text" class="form-control" placeholder="Hello there!">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-round float-right" rel="tooltip" data-original-title="Can't wait for your message" data-placement="right">Send text</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="tim-icons icon-square-pin"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Rejoingez nous sur notre office</h4>
                                <p> Esi Oued Smar
                                    <br> Alger
                                    <br> Algerie
                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="tim-icons icon-mobile"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Appelez-nous</h4>
                                <p> Tadjer Amina
                                    <br> +697 64 24 12
                                    <br> dim-ven 8:00-15h
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }

}