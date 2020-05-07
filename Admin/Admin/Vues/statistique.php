<?php


class statistique
{
    public function affich(){

        ?>

        <!-- <form action="../Controllers/docController.php" method="post" enctype="multipart/form-data">
             <input name="doc" type="file"
                    id="doc" aria-describedby="inputGroupFileAddon01"
                    required>


             <button value="ajoutDoc" type="submit" name="submit">Confirmer</button>
         </form> -->
        <div >
            <div class="row" style="flex-wrap:wrap;margin: 5% ;">
                <div class="card" style="margin-left: 2vh">
                    <div class="card-header" style="padding: 2%; padding-top: 4%; ">
                        <a class="btn btn-primary btn-simple btn-round" type="button" href="routeurAdmin.php"><i class="fas fa-arrow-left"></i>  Retour</a>
                        <br>
                        <br>
                        <h4>Statistiques!</h4>


                    </div>
                    <div class="card-body" style="padding-top: 0;">

                        <div class="tab-content tab-space">
                            <form method="POST" action="rcp.php">

                                <label> Date Debut </label>
                                <input type="date" name="trad1" id="trad1 " class="form-control">
                                <label> Date Fin</label>
                                <input type="date" name="trad2" id="trad2" class="form-control">

                                <h3>Entre deux date et un nom de traducteur</h3>
                                <div id="resultat"></div>


                                <label> Date Debut </label>
                                <input type="date" name="first1" id="first1" class="form-control">
                                <label> Date Fin</label>
                                <input type="date" name="first2" id="first2" class="form-control">
                                <label> nom traducteur </label>
                                <input name="first" id="first" class="form-control">

                                <h3>Entre deux date et un nom de client</h3>


                                <label> Date Debut </label>
                                <input type="date" name="devi1" id="devi1" class="form-control">
                                <label> Date Fin</label>
                                <input type="date" name="devi2" id="devi2" class="form-control">
                                <label> nom client </label>
                                <input name="devi" id="devi" class="form-control">
                                <button class="btn btn-primary btn-simple btn-round" type="submit" >Voir graphes!</button>
                            </form>




                        </div>


                    </div>


                </div>





            </div>

        </div>



        <?php
    }
}