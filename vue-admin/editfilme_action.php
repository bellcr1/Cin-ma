<?php

require_once('../models/filme.php');
require_once('../controllers/filmeController.php');

$filmeController = new filmeController();
$filme = new filme();

$filme->setidfilme($_POST['idfilme']);
$filme->setnomfilme($_POST['nomfilme']);
$filme->setdescription($_POST['description']);
$filme->setdatef($_POST['datef']);
$filme->setdated($_POST['dated']);
$filme->settimefilme($_POST['timefilme']);

$filme->setimage($_POST['image']);
$filme->setidjour($_POST['idjour']);
$filme->setbest($_POST['best']);




$result =$filmeController->updatefilme($filme);

header('Location: listefilme.php');
exit();

?>
