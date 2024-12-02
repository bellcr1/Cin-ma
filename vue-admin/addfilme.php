           <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Accounts - Product Admin Template</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
  <link rel="stylesheet" href="css/fontawesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<?php
session_start();


if ($_SESSION ['userrole'] == "admin") {
  
}else{
  header('Location: login.html');
}?>

<body id="reportsPage">
  <div class="" id="home">
  <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
            <a class="navbar-brand" href="index.php">
                <h1 class="tm-site-title mb-0">Product Admin</h1>
            </a>
            <button
                class="navbar-toggler ml-auto mr-0"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars tm-nav-icon"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="listefilme.php" class="nav-link">
                            <i class="fas fa-shopping-cart"></i> Filme
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="userslist.php">
                            <i class="far fa-user"></i> Accounts
                        </a>
                    </li>
                   
                </ul>
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="logout_action.php">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>
   


    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="tm-block-col tm-col-account-settings">
          <div class="tm-bg-primary-dark tm-block tm-block-settings">
            <h2 class="tm-block-title">Account Settings</h2>
            <form action="addfilme_action.php" method="post">
                <div class="mb-3">
                    <label for="nomfilme" class="form-label">filme Name</label>
                    <input type="text" name="nomfilme" id="nomfilme" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" name="description" id="description" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="dated" class="form-label">date debut</label>
                    <input type="text" name="dated" id="dated" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="datef" class="form-label">date fin</label>
                    <input type="text" name="datef" id="datef" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="datef" class="form-label">Time Filme</label>
                    <input type="text" name="timefilme" id="timefilme" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" name="image" id="image" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="jour" class="form-label">jour</label>
                    <select name="jour" id="jour" class="form-control">
                    <?php
                        require_once('../controllers/jourController.php');
                        $jourController = new jourController();
                        $res = $jourController->jourList();
                        foreach($res as $row) {
                            echo "<option value='" . $row['idjour'] . "'>" . $row['idjour'] . "</option>";
                        }
                        ?>
                    </select>

                    <div class="mb-3">
                    <label for="datef" class="form-label">Best : </label>

                    <input type="radio" id="contactChoice1" name="best" value="yes" />
                    <label for="contactChoice1">yes</label>

                    <input type="radio" id="contactChoice2" name="best" value="no" checked="checked" />
                    <label for="contactChoice2">no</label>

                    
                </div>
                </div>
                
                <button type="submit" class="btn btn-success">Add</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2018</b> All rights reserved. 
          Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
