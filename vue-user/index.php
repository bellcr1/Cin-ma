<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filmlane - Best movie collections</title>

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


</style>

<body id="top">

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

          <li>
            <a href="addblog.php" class="navbar-link">ADD blog</a>
          </li>
          <li>
            <a href="blog.php" class="navbar-link">blog</a>
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
        - #HERO
      -->

      <section class="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Filmlane</p>

            <h1 class="h1 hero-title">
              Unlimited <strong>Movie</strong>, TVs Shows, & More.
            </h1>

            <div class="meta-wrapper">

              <div class="badge-wrapper">
                <div class="badge badge-fill">PG 18</div>

                <div class="badge badge-outline">HD</div>
              </div>

              <div class="ganre-wrapper">
                <a href="#">Romance,</a>

                <a href="#">Drama</a>
              </div>

              <div class="date-time">

                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2022">2024</time>
                </div>

                

              </div>

            </div>

            

          </div>

        </div>
      </section>





      <!-- 
        - #UPCOMING
      -->

      <section class="upcoming">
        <div class="container">

          <div class="flex-wrapper">

            <div class="title-wrapper">
              <p class="section-subtitle">only cinema</p>

              <h2 class="h2 section-title">Best Movies</h2>
            </div>




            </div>


            <ul class="movies-list  has-scrollbar">
            
            <?php
                    require_once('../controllers/filmeController.php');
                    $filmeController = new filmeController();
                    $filmes = $filmeController->filmeList();


                    foreach ($filmes as $filme) {
                      if ($filme['best']=="yes") {
                      
                      $idfilme = urlencode($filme['idfilme']);

                      echo "<div class='movie-card'>
                      <li>
                      
                      
                      <a href='movie-details.php?id={$filme['idfilme']}'>
                            <figure class='card-banner'>
                              <img src='{$filme['image']}' alt='The Northman movie poster'>
                            </figure>
                          </a>";


                          echo "<div class='title-wrapper'>
                                <a href='./movie-details.html'>
                                  <h3 class='card-title'>{$filme['nomfilme']}</h3>
                                </a>

                                <time datetime='2022'>{$filme['idjour']}</time>
                              </div>

                              <div class='card-meta'>
                                <div class='badge badge-outline'>HD</div>

                                <div class='duration'>
                                  <ion-icon name='time-outline'></ion-icon>

                                  <time datetime='PT137M'>{$filme['timefilme']}</time>
                                </div>

                                <div class='rating'>
                                  <ion-icon name='star'></ion-icon>

                                  <data>{$filme['dated']}</data>
                                </div>
                              </div>

                            </div>
                            </li>";



                  
                  }}
                  
                    ?>
                    

          

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service">
        <div class="container">

          <div class="service-banner">



 
          <?php


                      echo "
                      <a href='movie-details.php?id={$filme['idfilme']}'>
                      <figure>
                      <img src='{$filme['image']}' alt=''>
                        </figure>
                        </a>
            
                      </div>
            
                      <div class='service-content'>
            
                        <p class='service-subtitle'>Last Movie</p>
            
                        <h2 class='h2 service-title'>{$filme['nomfilme']}</h2>
            
                        <p class='service-text'>
                        {$filme['description']}
                        </p>
            
                        <ul class='service-list'>
            
                          
            
                          <li>
                            <div class='service-card'>
            
                              <div class='card-icon'>
                                <ion-icon name='videocam'></ion-icon>
                              </div>
            
                              <div class='card-content'>
                                <h3 class='h3 card-title'>{$filme['idjour']}</h3>
            
                                <p class='card-text'>
                                {$filme['dated']} - {$filme['datef']} 
                                </p>
                              </div>
            
                            </div>
                          </li>
                          <li>
                            <div class='service-card'>
            
                              <div class='card-icon'>
                                <ion-icon name='tv'></ion-icon>
                              </div>
            
                              <div class='card-content'>
                                <h3 class='h3 card-title'>Enjoy on Your Cnima.</h3>
            
                                <p class='card-text'>
                                le cinéma est le média qui bénéficie d'une forte valeur d'attention et une excellente mémorisation, le meilleur taux, tout media confondus et de loin                                </p>
                              </div>
            
                            </div>
                          </li>
            
                        </ul>
            
                      </div>";
                      
                      




                      





                  
                  
                  
                    ?>






           

        </div>
      </section>




      <section class="top-rated">
        <div class="container">

          <p class="section-subtitle">Online Streaming</p>

          <h2 class="h2 section-title">Top Rated Movies</h2>

          <ul class="filter-list">

      <?php
                    require_once('../controllers/jourController.php');
                    $jourController = new jourController();
                    $jours = $jourController->jourList();

                    foreach ($jours as $jour) {
                        $nomjour = urlencode($jour['idjour']);

                        echo "<li><a href='index.php?id={$jour['idjour']}'
                              <button class='filter-btn' >{$jour['idjour']}</button></a>
                              </li>";
                      
                    }
                    ?>




</ul>








     


        
          <ul class="movies-list">
          <?php
require_once('../controllers/jourController.php');
require_once('../models/jour.php');
require_once('../controllers/filmeController.php');


$jourController = new jourController();
$jour = new jour();


                    $filmeController = new filmeController();
                    $filmes = $filmeController->filmeList();


                    foreach ($filmes as $filme) {
                      if (isset($_GET['id'])) {
                      
                      if ($filme['idjour']==$_GET['id']) {
                      

                        echo "<div class='movie-card'>
                        <li>
                        
                        
                        <a href='movie-details.php?id={$filme['idfilme']}'>
                              <figure class='card-banner'>
                                <img src='{$filme['image']}' alt='The Northman movie poster'>
                              </figure>
                            </a>";
  
  
                            echo "<div class='title-wrapper'>
                                  <a href='./movie-details.html'>
                                    <h3 class='card-title'>{$filme['nomfilme']}</h3>
                                  </a>
  
                                  <time datetime='2022'>{$filme['idjour']}</time>
                                </div>
  
                                <div class='card-meta'>
                                  <div class='badge badge-outline'>HD</div>
  
                                  <div class='duration'>
                                    <ion-icon name='time-outline'></ion-icon>
  
                                    <time datetime='PT137M'>{$filme['timefilme']}</time>
                                  </div>
  
                                  <div class='rating'>
                                    <ion-icon name='star'></ion-icon>
  
                                    <data>{$filme['dated']}</data>
                                  </div>
                                </div>
  
                              </div>
                              </li>";}}else {

                                echo "<div class='movie-card'>
                        <li>
                        
                        
                        <a href='movie-details.php?id={$filme['idfilme']}'>
                              <figure class='card-banner'>
                                <img src='{$filme['image']}' alt='The Northman movie poster'>
                              </figure>
                            </a>";
  
  
                            echo "<div class='title-wrapper'>
                                  <a href='./movie-details.html'>
                                    <h3 class='card-title'>{$filme['nomfilme']}</h3>
                                  </a>
  
                                  <time datetime='2022'>{$filme['idjour']}</time>
                                </div>
  
                                <div class='card-meta'>
                                  <div class='badge badge-outline'>HD</div>
  
                                  <div class='duration'>
                                    <ion-icon name='time-outline'></ion-icon>
  
                                    <time datetime='PT137M'>{$filme['timefilme']}</time>
                                  </div>
  
                                  <div class='rating'>
                                    <ion-icon name='star'></ion-icon>
  
                                    <data>{$filme['dated']}</data>
                                  </div>
                                </div>
  
                              </div>
                              </li>";
                                
                              }
                    }

            ?>

            

          </ul>

        </div>
      </section>





      <!-- 
        - #TV SERIES
      -->

    




      <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="cta-title">contact us</h2>

            <p class="cta-text">
              Enter your email to sned mesg.
            </p>
          </div>

          <form action="" class="cta-form">
            <input type="email" name="email" required placeholder="Enter your email" class="email-field">

            <button type="submit" class="cta-form-btn">Get started</button>
          </form>

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
          &copy; 2024 <a href="#">jihed</a>. All Rights Reserved
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