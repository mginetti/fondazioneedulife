<?php
      
      function box(){
            $conn = new mysqli("localhost", "root", "", "fondazioneedu");

            //Controllo errori di connessione
            if ($conn->connect_error) {
              die("Errore di connessione al database");
            }
    
            //Creazione query
                        $query = "SELECT * FROM video";
    
            //Esecuzione query
                        $result = $conn->query($query);
    
            //Controllo risultato query
                        
            if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                        echo 
                              '
                              <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="box-video">
                                          <video id="video'. $row['id'] .'" height="150px">
                                                <source src= "' . $row['path'] . ' " >
                                          </video>
                                          <div class="play">
                                                <button onclick="playPause("video'. $row['id'] .'")">
                                                      <i class="material-icons md-48" href="#">
                                                            play_circle_outline
                                                      </i>
                                                </button>  
                                          </div>
                                    </div>
                              </div>
                        ';
                  }
            }      
            $conn->close();
            
            
            



            
      }

      
      
?>

<!DOCTYPE html>
 <html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/bootstrap-social.css">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <title>Document</title>
      </head>
      <body>

      <div class="container-fluid">
            <header>
                  <div class="logo">
                        <img class="edu-logo" src="media/img/logo.png" alt="">
                  </div>
                  <nav class="navbar  navbar-expand-lg navbar-light top-navbar" data-toggle="sticky-onscroll">
                        <div class="container">
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                              </button>
      
                              <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                    <ul class="navbar-nav pull-left">
                                          <li class="nav-item">
                                                <img class="edu-logo" src="media/img/logo.png" alt="">
                                          </li>
                                          <li class="nav-item">
                                                <a class="nav-link active" href="#">Home</a>
                                          </li>
                                          <li class="nav-item">
                                                <a class="nav-link" href="#">Services</a>
                                          </li>
                                          <li class="nav-item">
                                                <a class="nav-link" href="#">Our Work</a>
                                          </li>
                                          <li class="nav-item">
                                                <a class="nav-link" href="#">Pricing</a>
                                          </li>
                                          <li class="nav-item">
                                                <a class="nav-link" href="#">About</a>
                                          </li>
                                          <li class="nav-item">
                                                <a class="nav-link" href="#">Contact</a>
                                          </li>
                                    </ul>
      
                              </div>
                        </div>
                  </nav>
      
            </header>

            <hr>

            <div class="container ">
        
                  <div class="row">

                        <?= box() ?>

                  
                  </div>
            </div>
            
            
            </div>

            <br>

            <hr>

            <br>

            <div class="container">
                  <div class="row">
                        <div class="project col-sm-12 col-md-4">
                              <div class="logo-footer"><img class="logo-img" src="media/img/logo-311.jpeg" alt=""></div>
                              <div class="description"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente neque et saepe officiis nemo, autem iusto similique, unde libero sed impedit esse itaque iure voluptates ab minima molestias quis dicta.</p></div>
                        </div>
                        <div class="project col-sm-12 col-md-4">
                              <div class="logo-footer"><img class="logo-img" src="media/img/logo-futuro.jpeg" alt=""></div>
                              <div class="description"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente neque et saepe officiis nemo, autem iusto similique, unde libero sed impedit esse itaque iure voluptates ab minima molestias quis dicta.</p></div>
                        </div>
                        <div class="project col-sm-12 col-md-4">
                              <div class="logo-footer"><img class="logo-img" src="media/img/logo-last.jpeg" alt=""></div>
                              <div class="description"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente neque et saepe officiis nemo, autem iusto similique, unde libero sed impedit esse itaque iure voluptates ab minima molestias quis dicta.</p></div>
                        </div>
                  </div>

                  
            </div>
      </div>

      <footer class="container">
            <div class="row">
                  <div class="col-sm-12 col-md-3"><img class="img-footer" src="media/img/logo-footer.png" alt=""></div>
                  <div class="col-sm-12 col-md-7">
                  <p>Testo</p>
                  <p>Testo</p>
                  <p>Testo</p>
                  <p>Testo</p>
                  <p>Testo</p>
                  <p>Testo</p>
                  </div>
                  <div class="col-sm-12 col-md-2">
                        <a class="btn btn-social-icon btn-instagram">
                              <span class="fa fa-instagram"></span>
                        </a>
                  </div>
            </div>
            
      </footer>

      <script>
      function playPause(video) {
        var myVideo = document.getElementById(video); 
        if (myVideo.paused) 
            myVideo.play(); 
        else 
            myVideo.pause(); 
    } </script>

      <script src="js/script.js"></script>
      
      </body>
 </html>