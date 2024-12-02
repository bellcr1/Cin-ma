<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Index</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<?php
session_start();


if ($_SESSION ['userrole'] == "admin") {
  
}else{
  header('Location: login.html');
}?>

<body>
<div>
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
                        <a href="listefilme.php" class="nav-link"">
                            <i class="fas fa-shopping-cart"></i> Filme
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="uesrlist.php">
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
</div>
<div class="container mt-5">
    <div class="col-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
            <h2 class="tm-block-title d-flex justify-content-between align-items-center">
                Liste des utilisateurs
                <a href="adduser.php" class="btn btn-success btn-circle" title="Add Account">
                    <i class="fas fa-plus"></i> Add Account
                </a>
            </h2>
            <table class="table">
                <thead>
                    <tr>
                    <th>id</th>
                        <th>Email</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>Roles</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    require_once('../models/user.php');
                    require_once('../controllers/userController.php');

                    $uController = new UserController();
                    $users = $uController->userList();

                    if ($users) {
                        foreach ($users as $user) {
                            $iddeluser = urlencode($user['id']);
                            echo "<tr>

                             <td>{$user['id']}</td>
                             <td>{$user['email']}</td>
                             <td>{$user['nom']}</td>
                             <td>{$user['prenom']}</td>
                             <td>{$user['roles']}</td>
                             <td><a href='edituser.php?id={$user['id']}' class='btn btn-warning'>Edit</a></td>
                             <td><a href='deleteuser.php?id=$iddeluser' class='btn btn-warning'>Delete</a></td>
                             
                             </tr>";
                            }
                            
                        
                        }else{
                            echo    "  <td colspan='5'>No records found</td>";
                        }
                    
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/templatemo-script.js"></script>
</body>
</html>
