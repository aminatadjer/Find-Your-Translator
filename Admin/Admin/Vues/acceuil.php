<?php


class acceuil
{ public function affich(){
    ?>
    <div style="text-align: center">
        <h2 class="title" style="margin-top: 15vh"> Bienvenue dans la partie Admin!</h2>
        <div  class="row" style="flex-wrap:wrap; margin: 5vh ">
    <div class="card col-md" style="width: 18rem; margin: 5rem;padding: 1rem">
        <img class="card-img-top" src="../img/documents.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Documents</h5>
            <p class="card-text">Visualiser les documents soumis, leurs détails, les filtrer et les trier.</p>
            <a href="routeurDoc.php" class="btn btn-primary">Gestion Documents </a>
        </div>
    </div>
            <div class="card col-md" style="width: 18rem;margin: 5rem;padding: 1rem">
                <img class="card-img-top" src="../img/clients.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Client</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="routeurClient.php" class="btn btn-primary">Gestion Client</a>
                </div>
            </div>


        </div>
        <div  class="row" style="flex-wrap:wrap; margin: 5vh ">
            <div class="card col-md" style="width: 18rem; margin: 5rem;padding: 1rem">
                <img class="card-img-top" src="../img/traducteurs.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Traducteurs</h5>
                    <p class="card-text">Visualiser les documents soumis, leurs détails, les filtrer et les trier.</p>
                    <a href="routeurTraducteur.php" class="btn btn-primary">Gestion Traducteurs </a>
                </div>
            </div>
            <div class="card col-md" style="width: 18rem;margin: 5rem;padding: 1rem">
                <img class="card-img-top" src="../img/statistiques.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Statistiques</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="routeurStatistique.php" class="btn btn-primary">Statisqtiques</a>
                </div>
            </div>


        </div>

    </div>
    <?php
}
}