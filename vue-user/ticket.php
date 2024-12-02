<?php
          session_start();

require_once('../models/chairs.php');
require_once('../controllers/chairsController.php');
require_once('../models/filme.php');
$filmee = new filme();






$chairsController = new chairsController();
$chairs = new chairs();

$chairs->setidchairs($_POST['idchairs']);
$chairs->setiduser($_SESSION ['id']);


    $result =$chairsController->updatechairs("true",$chairs->getiduser(), $chairs->getidchairs());




?>

<html>
<head>
    <meta charset="utf-8">
    <title>Ma page</title>
    <link href="./css/ticket.css" rel="stylesheet">
</head>
<style>
    .image {
    height: 250px;
    width: 169px;
    background-image: url(<?php echo $_POST['image'];?>); 
    background-size: contain;
    opacity: 0.85;
}
</style>
<body>

<link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<div class="ticket created-by-anniedotexe">
	<div class="left">
		<a href="index.php">
		<div class="image">
            <img src="" alt="">
			<p class="admit-one">
				<span><?php echo $_POST['nomfilme']?></span>
				<span><?php echo $_POST['nomfilme']?></span>
				<span><?php echo $_POST['nomfilme']?></span>
			</p>
			<div class="ticket-number">
				<p>
					#<?php echo $chairs->getidchairs()?>
				</p>
			</div>
		</div>
		</a>
		<div class="ticket-info">
			<p class="date">
				<span><?php echo $_POST['idjour']?></span>
				<span><?php echo date("Y"); ?></span>
			</p>
			<div class="show-name">
				<h1><?php echo $_POST['nom']?></h1>
				<h2><?php echo $_POST['nomfilme']?></h2>
			</div>
			<div class="time">
            <p><?php echo $_POST['dated']?> <span>TO</span> <?php echo $_POST['datef']?> </p>
            <p>Chair Numero<span>:</span> <?php echo $_POST['numchairs']?></p>
			</div>
			<p class="location"><span>Best Cinema In Tunisia</span>
				<span class="separator"><i class="far fa-smile"></i></span><span>Nabeul City, Hammamet</span>
			</p>
		</div>
	</div>
	<div class="right">
		<p class="admit-one">
			<span><?php echo $_POST['nomfilme']?></span>
			<span><?php echo $_POST['nomfilme']?></span>
			<span><?php echo $_POST['nomfilme']?></span>
		</p>
		<div class="right-info-container">
			<div class="show-name">
				<h1><?php echo $_POST['nomfilme']?></h1>
			</div>
			<div class="time">
				<p><?php echo $_POST['dated']?> <span>TO</span> <?php echo $_POST['datef']?> </p>
                <p>Chair Numero<span>:</span> <?php echo $_POST['numchairs']?></p>
			</div>
			<div class="barcode">
				<img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" alt="QR code">
			</div>
			<p class="ticket-number">
				#<?php echo $chairs->getiduser()?>
			</p>
		</div>
	</div>
	
</div>
</body>

