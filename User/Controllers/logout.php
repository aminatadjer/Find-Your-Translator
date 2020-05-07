<?php
if (!isset($_SESSION['id_user'])) {
    session_start();
    session_destroy(); }
    header('Location: ../Vues/routeurAcceuil.php');
    exit();
