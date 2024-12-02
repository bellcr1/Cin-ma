<?php

include_once('../models/filme.php');
include_once('../controllers/filmeController.php');

$filmeController = new filmeController();


if (isset($_GET['id'])) {
    $idfilme = urldecode($_GET['id']);
    $result = $filmeController->delete($idfilme);
   if ($result) {
        header('Location: listefilme.php');
        exit();
    } else {
        echo "Failed";
    }
}
?>