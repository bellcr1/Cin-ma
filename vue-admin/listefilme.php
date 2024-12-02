<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <style>
  .tm-product-table img {
    width: 400px; /* Adjust the width as needed */
    height: auto; /* Keeps the aspect ratio */
    max-height: 1000px; /* Adjust the height as needed */
  }
</style>

<?php
session_start();


if ($_SESSION ['userrole'] == "admin") {
  
}else{
  header('Location: login.html');
}?>

  <body id="reportsPage">
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
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col"> Filme</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date debut</th>
                    <th scope="col">Date fin</th>
                    <th scope="col">Time Filme</th>
                    <th scope="col">Image</th>
                    <th scope="col">Jour</th>
                    <th scope="col">Best</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Modify</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    require_once('../controllers/filmeController.php');
                    $filmeController = new filmeController();
                    $filmes = $filmeController->filmeList();


                    foreach ($filmes as $filme) {
                      $idfilme = urlencode($filme['idfilme']);

                      echo "<tr>";
                      echo "<td>{$filme['nomfilme']}</td>";
                      echo "<td>{$filme['description']}</td>";
                      echo "<td>{$filme['dated']}</td>";
                      echo "<td>{$filme['datef']}</td>";
                      echo "<td>{$filme['timefilme']}</td>";

                      echo "<td><img src='{$filme['image']}' class='img-fluid tm-product-image' alt=''></td>";
                      echo "<td>";
                      if (!empty($filme['idjour'])) {
                          echo $filme['idjour'];
                      } else {
                          echo "N/A";
                      }
                      echo "<td>{$filme['best']}</td>";
                      echo "</td>";
                      echo "<td>
                      <a href='deletefilme_action.php?id=$idfilme' class='tm-product-delete-link'>
                        <i class='far fa-trash-alt tm-product-delete-icon'></i>
                       </a>
                        </td>";
                      echo "<td><a href='editfilme.php?id={$filme['idfilme']}' class='btn btn-warning'>Edit</a></td>";
                      echo "</tr>";
                  }
                  
                    ?>


                 
                  
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="addfilme.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
          </div>
        </div>










        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Jour</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>

                <?php
                    require_once('../controllers/jourController.php');
                    $jourController = new jourController();
                    $jours = $jourController->jourList();

                    foreach ($jours as $jour) {
                        $nomjour = urlencode($jour['idjour']);

                        echo "<tr>";
                        echo "<td class='tm-product-name' >{$jour['idjour']}</td>";
                        echo "<td class='text-center'>
                        <a href='deletejour_action.php?id=$nomjour' class='tm-product-delete-link'>
                          <i class='far fa-trash-alt tm-product-delete-icon'></i>
                        </a>
                      </td>";
                        echo "<td><a href='editjour.php?id={$jour['idjour']}' class='btn btn-warning'>Edit</a></td>";
                        echo "</tr>";
                    }
                    ?>
                  
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a href='addjour.php' class="btn btn-primary btn-block text-uppercase mb-3">
              Add new category
                </a>
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

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "edit-product.html";
        });
      });
    </script>
  </body>
</html>