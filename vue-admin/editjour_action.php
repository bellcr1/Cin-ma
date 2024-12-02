<?php

require_once('../models/jour.php');
require_once('../controllers/jourController.php');

$jourController = new jourController();
$jour = new jour();

$jour->setjour($_POST['jour']);
$jour->setoldjour($_POST['old']);

echo $jour->getoldjour();
echo $jour->getjour();

$result =$jourController->updatejour($jour);

header('Location: listefilme.php');
exit();

?>
