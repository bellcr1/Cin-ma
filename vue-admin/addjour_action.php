<?php

include_once('../models/jour.php');
include_once('../controllers/jourController.php');


$jour= $_POST['jour'];


$jour=new jour($jour);
$jourController = new jourController();
$res = $jourController->insert( $jour);
header('Location: listefilme.php');


?>