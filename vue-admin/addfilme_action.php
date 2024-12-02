<?php

include_once('../models/filme.php');
include_once('../controllers/filmeController.php');
include_once('../controllers/chairsController.php');

$nomfilme = $_POST["nomfilme"];
$description =  $_POST['description'];
$dated = $_POST['dated'];
$datef= $_POST['datef'];
$timefilme =  $_POST['timefilme'];
$jour= $_POST['jour'];
$image =  $_POST['image'];
$best =  $_POST['best'];




$filmeController = new filmeController();
$res = $filmeController->insert($nomfilme,$description, $dated, $datef,$timefilme ,$image, $jour,$best);

$filmes = $filmeController->filmeList();


foreach ($filmes as $filme) { if ($filme['nomfilme']= $nomfilme) {
   $idfilme = $filme['idfilme'];
                    }}


for ($i=1; $i < 21; $i++) { 
    $chairsController = new chairsController();
    $res = $chairsController->insert($i,'false', $idfilme);

}

header('Location: listefilme.php');

?>
