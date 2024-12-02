<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Accounts - Product Admin Template</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
  <link rel="stylesheet" href="../vue-admin/css/fontawesome.min.css" />
  <link rel="stylesheet" href="../vue-admin/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../vue-admin/css/templatemo-style.css">
</head>

<?php
session_start();

?>

<body id="reportsPage">
  <div class="" id="home">
  
   


    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="tm-block-col tm-col-account-settings">
          <div class="tm-bg-primary-dark tm-block tm-block-settings">
            <h2 class="tm-block-title">Blog</h2>
            <form action="addblog_action.php" method="post">
                <div class="mb-3">
                    
                    <label for="nomfilme" class="form-label">titre</label>
                    <input type="text" name="titre" id="nomfilme" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" name="description" id="description" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="dated" class="form-label">image</label>
                    <input type="text" name="image" id="dated" class="form-control" value="">
                </div>
                

                    

                    
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
