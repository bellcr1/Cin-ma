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
   
   
   
   <?php
require_once('../controllers/userController.php');

$userController = new UserController();
$user = $userController->getUser($_GET['id']);
?>


    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="tm-block-col tm-col-account-settings">
          <div class="tm-bg-primary-dark tm-block tm-block-settings">
            <h2 class="tm-block-title">Account Settings</h2>
            <form action="edituser_action.php" method="post">
            <div class="form-group col-lg-6">
                <label for="name">ID User</label>
                <input type="text" name="id" value="<?php echo $user['id'] ?>" readonly class="form-control validate">
              </div>
              <div class="form-group col-lg-6">
                <label for="name">Nom</label>
                <input type="text" name="nom" value="<?php echo $user['nom'] ?>"  class="form-control validate">
              </div>
              <div class="form-group col-lg-6">
                <label for="name">Prenom</label>
                <input type="text" name="prenom" value="<?php echo $user['prenom'] ?>"  class="form-control validate">
              </div>
              <div class="form-group col-lg-6">
                <label for="email">Account Email</label>
                <input type="text" name="email" value="<?php echo $user['email'] ?>"  class="form-control validate">
              </div>
              <div class="form-group col-lg-6">
                <label for="password">Password</label>
                <input type="text" name="password" value="<?php echo $user['motp'] ?>" class="form-control validate">
              </div>

              
              <div class="form-group col-lg-6">
              <label for="password">role : <?php echo $user['roles'] ?></label>
              <select name="role">
                <option value="user">---- user ----</option>
                <option value="admin">---- admin ----</option>
              </select>
            
              </div>
              <div class="form-group col-lg-6">
                <label class="tm-hide-sm">&nbsp;</label>
                <button type="submit" class="btn btn-primary btn-block text-uppercase">
                  Update Profile
                </button>
              </div>
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