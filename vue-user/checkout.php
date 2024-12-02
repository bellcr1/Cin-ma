<html>
<head>
    <meta charset="utf-8">
    <title>Ma page</title>
    <link href="./css/checkout.css" rel="stylesheet">
</head>

<body>


<?php 
          session_start();

          
          require_once('../controllers/chairsController.php');
                 require_once('../controllers/filmeController.php');


                 $filmeController = new filmeController();

$chairsController = new chairsController();
$chairs = $chairsController->getchairs($_GET['id']);
$filme = $filmeController->getfilme($chairs['idfilme']) ;

  
    
  ?>

<div class="mainscreen">
    <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg"  class="bgimg " alt="">--> 
      <div class="card">
        <div class="leftside">
          <img
            src="<?php echo $filme['image']?>"
            class="product"
            alt="Shoes"
          />

        </div>
        <div class="rightside">
          <form action="ticket.php" method="POST">

          <input type="hidden"  name="image" value="<?php echo $filme['image']?>"   />

        
            <h1>Reservation</h1>
            <h2>Ticket Information</h2>
            <p>Name</p>
            <input type="text" class="inputbox" name="nom"  value="<?php echo $_SESSION ['nom'].' '.$_SESSION ['prenom']; ?>"  required />


            <p>Chair Numero </p>
            <input type="text" class="inputbox" name="numchairs" value="<?php echo $chairs['numchairs']?>" readonly  />
            <input type="hidden" class="inputbox" name="idchairs" value="<?php echo $chairs['idchairs']?>" readonly  />
            <p>Name Movie</p>
            <input type="text" class="inputbox" name="nomfilme" value="<?php echo $filme['nomfilme']?>" readonly  />
             
            <div class="expcvv">

            <p class="expcvv_text">Movie Date</p>
            <input type="text" class="inputbox" name="idjour" value="<?php echo $filme['idjour']?>" readonly   />

            <p class="expcvv_text2">Movie start</p>
            <input type="text" class="inputbox" name="dated" value="<?php echo $filme['dated']?>" readonly   />
            <input type="hidden" class="inputbox" name="datef" value="<?php echo $filme['datef']?>" readonly   />
            </div>
            <p></p>
            <button type="submit" class="button">Reserve</button>
          </form>
        </div>
      </div>
    </div>
</body></html>
