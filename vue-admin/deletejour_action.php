<?php

include_once('../models/jour.php');
include_once('../controllers/jourController.php');

$jourController = new jourController();


if (isset($_GET['id'])) {
    $jour = urldecode($_GET['id']);
    $result = $jourController->delete($jour);
   if ($result) {
        header('Location: listefilme.php');
        exit();
    } else {
        echo "Failed";
    }
}
?>