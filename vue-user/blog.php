<?php
                    require_once('../controllers/blogController.php');
                    $blogController = new blogController();
                    $blogs = $blogController->blogList();


                    foreach ($blogs as $blog) {

                      echo "<div class='movie-card'>
                      <li>
                      
                      <h3 class='card-title'>{$blog['titre']}</h3>

                            <figure class='card-banner'>
                              <img src='{$blog['image']}' alt='The Northman movie poster'>
                              <time datetime='2022'>{$blog['description']}</time>
                            </figure>
                          ";


                          echo "

                                
                              

                                <div class='rating'>

                                  <data>blog by {$blog['nom']}</data>
                                </div>
                              </div>

                            </div>
                            </li>
                            </br> </br> </br> </br>";



                  
                  }
                  
                    ?>