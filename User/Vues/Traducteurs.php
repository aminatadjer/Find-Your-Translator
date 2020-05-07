<?php

include '../Controllers/getElementsController.php';
class Traducteurs
{
    var $title='Traducteurs';
    var $elementsController;
    public function affich(){

        $this->elementsController=new getElementsController();
        ?>

        <div >

        <div class="row" style="flex-wrap:wrap; margin-top: 5vh ">
            <div class="card" style="margin: 10%">
                <div class="card-header" style="padding: 2%; padding-top: 4%;">
                   <h4>Traducteurs</h4>

                    <ul class="nav nav-tabs nav-tabs-primary" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" id="profile">
                                <i class="tim-icons icon-spaceship"></i> Tous
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" id="competence">
                                <i class="tim-icons icon-settings-gear-63"></i>General
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#link3" role="tablist" id="categorie">
                                <i class="tim-icons icon-bag-16"></i>Scientifique
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#link4" role="tablist" id="categorie">
                                <i class="tim-icons icon-bag-16"></i>Site Web
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body" style="padding-top: 0;">

                        <div class="tab-content tab-space">
                            <div class="tab-pane active" id="link1">
                                <div class="row" style="flex-wrap: wrap">
                                <?php
                                $traducteurs=$this->elementsController->controllGetTraducteurs();
                                foreach ($traducteurs as $traducteur){
                                    ?> <div style="width: 45vh; padding-top: 10vh; margin: 5vh;" >
                                        <div class="card card-coin card-plain">
                                            <div class="card-header">
                                                <img src="../DesignKit/assets/img/mike.jpg" class="img-center img-fluid rounded-circle">
                                                <h4 class="title"><?php echo (''.$traducteur['nom'].' '.$traducteur['prenom']);?></h4>
                                            </div>
                                            <div class="card-body">
                                                <ul class="nav nav-tabs nav-tabs-primary justify-content-center">

                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#a<?php echo $traducteur['id'];?>">
                                                            Contacter
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#b<?php echo $traducteur['id'];?>">
                                                            Note
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content tab-subcategories">

                                                    <div class="tab-pane active" id="a<?php echo $traducteur['id'];?>">
                                                        <div class="row">
                                                            <label class="col-sm-3 col-form-label">Email</label>
                                                            <div class="col-sm-9">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" value="<?php echo($traducteur['email'])?>">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="col-sm-3 col-form-label">Message</label>
                                                            <div class="col-sm-9">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="your text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-simple btn-primary btn-icon btn-round float-right"><i class="tim-icons icon-send"></i></button>
                                                    </div>
                                                    <div class="tab-pane" id="b<?php echo $traducteur['id'];?>">

                                                        <div class="row">
                                                            <div class="col-md">
                                                                Note
                                                            </div>
                                                            <div class="col-md">
                                                                0
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md">
                                                                Noter
                                                            </div>
                                                            <div class="col-md">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">Votre note</label>
                                                                    <select class="form-control" id="langueS" name="langueS" >
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-simple btn-primary btn-icon btn-round float-right"><i class="tim-icons icon-send"></i></button>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <?php
                                }
                                ?>
                                </div>
                            </div>


                            <div class="tab-pane" id="link2">
                                <div class="row" style="flex-wrap: wrap">
                                    <?php
                                    $traducteursG=$this->elementsController->controllGetTraducteursGeneral();
                                    foreach ($traducteursG as $traducteurG){
                                        ?> <div style="width: 45vh; padding-top: 10vh; margin: 5vh;" >
                                            <div class="card card-coin card-plain">
                                                <div class="card-header">
                                                    <img src="../DesignKit/assets/img/mike.jpg" class="img-center img-fluid rounded-circle">
                                                    <h4 class="title"><?php echo (''.$traducteurG['nom'].' '.$traducteurG['prenom']);?></h4>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="nav nav-tabs nav-tabs-primary justify-content-center">

                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#a<?php echo $traducteurG['id'];?>">
                                                                Contacter
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#b<?php echo $traducteurG['id'];?>">
                                                                Note
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content tab-subcategories">

                                                        <div class="tab-pane active" id="a<?php echo $traducteurG['id'];?>">
                                                            <div class="row">
                                                                <label class="col-sm-3 col-form-label">Email</label>
                                                                <div class="col-sm-9">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" value="<?php echo($traducteurG['email'])?>">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-3 col-form-label">Message</label>
                                                                <div class="col-sm-9">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="your text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-simple btn-primary btn-icon btn-round float-right"><i class="tim-icons icon-send"></i></button>
                                                        </div>
                                                        <div class="tab-pane" id="b<?php echo $traducteurG['id'];?>">

                                                            <div class="row">
                                                                <div class="col-md">
                                                                    Note
                                                                </div>
                                                                <div class="col-md">
                                                                    0
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md">
                                                                    Noter
                                                                </div>
                                                                <div class="col-md">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlSelect1">Votre note</label>
                                                                        <select class="form-control" id="langueS" name="langueS" >
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-simple btn-primary btn-icon btn-round float-right"><i class="tim-icons icon-send"></i></button>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <?php
                                    }
                                    ?>
                                </div>


                            </div>
                            <div class="tab-pane" id="link3">
                                <div class="row" style="flex-wrap: wrap">
                                    <?php
                                    $traducteursSc=$this->elementsController->controllGetTraducteursScientifique();
                                    foreach ($traducteursSc as $traducteurSc){
                                        ?> <div style="width: 45vh; padding-top: 10vh; margin: 5vh;" >
                                            <div class="card card-coin card-plain">
                                                <div class="card-header">
                                                    <img src="../DesignKit/assets/img/mike.jpg" class="img-center img-fluid rounded-circle">
                                                    <h4 class="title"><?php echo (''.$traducteurSc['nom'].' '.$traducteurSc['prenom']);?></h4>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="nav nav-tabs nav-tabs-primary justify-content-center">

                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#a<?php echo $traducteurSc['id'];?>">
                                                                Contacter
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#b<?php echo $traducteurSc['id'];?>">
                                                                Note
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content tab-subcategories">

                                                        <div class="tab-pane active" id="a<?php echo $traducteurSc['id'];?>">
                                                            <div class="row">
                                                                <label class="col-sm-3 col-form-label">Email</label>
                                                                <div class="col-sm-9">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" value="<?php echo($traducteurSc['email'])?>">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-3 col-form-label">Message</label>
                                                                <div class="col-sm-9">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="your text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-simple btn-primary btn-icon btn-round float-right"><i class="tim-icons icon-send"></i></button>
                                                        </div>
                                                        <div class="tab-pane" id="b<?php echo $traducteurSc['id'];?>">

                                                            <div class="row">
                                                                <div class="col-md">
                                                                    Note
                                                                </div>
                                                                <div class="col-md">
                                                                    0
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md">
                                                                    Noter
                                                                </div>
                                                                <div class="col-md">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlSelect1">Votre note</label>
                                                                        <select class="form-control" id="langueS" name="langueS" >
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-simple btn-primary btn-icon btn-round float-right"><i class="tim-icons icon-send"></i></button>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <?php
                                    }
                                    ?>
                                </div>

                            </div>
                            <div class="tab-pane" id="link4">

                                <div class="row" style="flex-wrap: wrap">
                                    <?php
                                    $traducteursS=$this->elementsController->controllGetTraducteursSite();
                                    foreach ($traducteursS as $traducteurS){
                                        ?> <div style="width: 45vh; padding-top: 10vh; margin: 5vh;" >
                                            <div class="card card-coin card-plain">
                                                <div class="card-header">
                                                    <img src="../DesignKit/assets/img/mike.jpg" class="img-center img-fluid rounded-circle">
                                                    <h4 class="title"><?php echo (''.$traducteurS['nom'].' '.$traducteurS['prenom']);?></h4>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="nav nav-tabs nav-tabs-primary justify-content-center">

                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#a<?php echo $traducteurS['id'];?>">
                                                                Contacter
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#b<?php echo $traducteurS['id'];?>">
                                                                Note
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content tab-subcategories">

                                                        <div class="tab-pane active" id="a<?php echo $traducteurS['id'];?>">
                                                            <div class="row">
                                                                <label class="col-sm-3 col-form-label">Email</label>
                                                                <div class="col-sm-9">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" value="<?php echo($traducteurS['email'])?>">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-3 col-form-label">Message</label>
                                                                <div class="col-sm-9">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="your text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-simple btn-primary btn-icon btn-round float-right"><i class="tim-icons icon-send"></i></button>
                                                        </div>
                                                        <div class="tab-pane" id="b<?php echo $traducteurS['id'];?>">

                                                            <div class="row">
                                                                <div class="col-md">
                                                                    Note
                                                                </div>
                                                                <div class="col-md">
                                                                    0
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md">
                                                                    Noter
                                                                </div>
                                                                <div class="col-md">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlSelect1">Votre note</label>
                                                                        <select class="form-control" id="langueS" name="langueS" >
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-simple btn-primary btn-icon btn-round float-right"><i class="tim-icons icon-send"></i></button>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>


                </div>


            </div>





        </div>
        </div>
     <?php
    }

}