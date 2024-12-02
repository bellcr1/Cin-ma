<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Free Guy 2021</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="#top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="index.php" class="logo">
        <img src="./assets/images/logo.svg" alt="Filmlane logo">
      </a>

      <div class="header-actions">

        <button class="search-btn">
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <div class="lang-wrapper">
          <label for="language">
            <ion-icon name="globe-outline"></ion-icon>
          </label>

          <select name="language" id="language">
            <option value="en">EN</option>
          </select>
        </div>
        <?php 
        session_start();

        if ($_SESSION ['userrole']=="user") {
          echo"<a href='logout_action.php'>
        <button class='btn btn-primary'>Logout</button></a>";
        }else {

          echo"<a href='login.html'>
        <button class='btn btn-primary'>Sign in</button></a>";
          
        }

        
        
        ?>
      

      </div>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="index.php" class="logo">
            <img src="./assets/images/logo.svg" alt="Filmlane logo">
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="contact.php" class="navbar-link">Contact</a>
          </li>

        </ul>

        <ul class="navbar-social-list">

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #MOVIE DETAIL
      -->

      <section class="movie-detail">
        <div class="container">






        <?php

require_once('../controllers/filmeController.php');





                    $filmeController = new filmeController();
                    $filme = $filmeController->getfilme($_GET['id']);



                      

                        echo "<figure class='movie-detail-banner'>

                        <img src='{$filme['image']}' alt='Free guy movie poster'>
            
                        
                      </figure>
            
                      <div class='movie-detail-content'>
            
                        <p class='detail-subtitle'>New Filme</p>
            
                        <h1 class='h1 detail-title'>
                        {$filme['nomfilme']}
                        </h1>
            
                        <div class='meta-wrapper'>
            
                          <div class='badge-wrapper'>
                            <div class='badge badge-fill'>PG 13</div>
            
                            <div class='badge badge-outline'>HD</div>
                          </div>
            
                          <div class='ganre-wrapper'>
                          {$filme['dated']} - {$filme['datef']}
            

                          </div>
            
                          <div class='date-time'>
            
                            <div>
                              <ion-icon name='calendar-outline'></ion-icon>
            
                              <time datetime='2021'>{$filme['idjour']}</time>
                            </div>
            
                            <div>
                              <ion-icon name='time-outline'></ion-icon>
            
                              <time datetime='PT115M'>{$filme['timefilme']}</time>
                            </div>
            
                          </div>
            
                        </div>
            
                        <p class='storyline'>
                          A bank teller called Guy realizes he is a background character in an open world video game called Free
                          City that will
                          soon go offline.
                        </p>
            
                        <div class='details-actions'>
            
                        
                            ";
                           require_once('../controllers/chairsController.php');


                            $chairsController = new chairsController();
                            $chairs = $chairsController->chairsListfilme($_GET['id']);

                            foreach ($chairs as $chair) {
                            
                              if ($chair['reserve']=='false') {
                                echo "<a href='checkout.php?id={$chair['idchairs']}'>";
                                echo "<img src=./images/green.png>";
                                echo "</a>";}
                                else {
                                  echo "<img src=./images/red.png>";
                                } 
                             
                              }
                                

            
                                echo "</div> </div> ";
  
  
                              
                              ?>


            




   

        </div>
      </section>







      <!-- 
        - #TV SERIES
      -->

      <section class="tv-series">
        <div class="container">

          <p class='section-subtitle'>Best Movies</p>

          <h2 class='h2 section-title'>Movies of the day</h2>

          <ul class='movies-list'>



          




        <?php
require_once('../controllers/filmeController.php');




                    $filmeController = new filmeController();
                    $filmes = $filmeController->filmeList();


                    foreach ($filmes as $fil) {
                      
                      if ($fil['idjour']==$filme['idjour']) {
                      

                        echo "<div class='movie-card'>
                        <li>
                        
                        
                        <a href='movie-details.php?id={$fil['idfilme']}'>
                              <figure class='card-banner'>
                                <img src='{$fil['image']}' alt='The Northman movie poster'>
                              </figure>
                            </a>";
  
  
                            echo "<div class='title-wrapper'>
                                  <a href='./movie-details.html'>
                                    <h3 class='card-title'>{$fil['nomfilme']}</h3>
                                  </a>
  
                                  <time datetime='2022'>{$fil['idjour']}</time>
                                </div>
  
                                <div class='card-meta'>
                                  <div class='badge badge-outline'>HD</div>
  
                                  <div class='duration'>
                                    <ion-icon name='time-outline'></ion-icon>
  
                                    <time datetime='PT137M'>{$fil['timefilme']}</time>
                                  </div>
  
                                  <div class='rating'>
                                    <ion-icon name='star'></ion-icon>
  
                                    <data>{$fil['dated']}</data>
                                  </div>
                                </div>
  
                              </div>
                              </li>";}
                    }

            ?>




         

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand-wrapper">

          <a href="./index.html" class="logo">
            <img src="./assets/images/logo.svg" alt="Filmlane logo">
          </a>

          <ul class="footer-list">

            <li>
              <a href="./index.html" class="footer-link">Home</a>
            </li>

            <li>
              <a href="#" class="footer-link">Movie</a>
            </li>

            

          </ul>

        </div>

        <div class="divider"></div>

        <div class="quicklink-wrapper">

          <ul class="quicklink-list">

            <li>
              <a href="#" class="quicklink-link">Faq</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Help center</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Terms of use</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Privacy</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="#">jihed</a>. All Rights Reserved
        </p>

        <img src="./assets/images/footer-bottom-img.png" alt="Online banking companies logo" class="footer-bottom-img">

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>