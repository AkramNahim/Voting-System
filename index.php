<?php
    require 'connection.php';
  
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Voting system in php</title>
            <!-- Compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" href="src/css/main.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
        </head>

        <nav>
            <div class="nav-wrapper">
            <a href="" class="brand-logo">GOT</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
            </ul>
            </div>
        </nav>
        <body> 
            <div class="container">
                <blockquote>
                    <h1 class="background" >Vote for your favorite House</h1>
                </blockquote>
                <form action="index.php" method="POST">
                    <div class="row">
                        <div class="col s4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="src/images/stark.png">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Hous of Stark<i class="material-icons right">more_vert</i></span>
                                    <p>
                                        <label>
                                            <button class="waves-effect waves-light btn-small" name="stark">
                                                <i class="material-icons">
                                                    how_to_vote 
                                                </i>
                                            </button>
                                        </label>
                                    </p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Description of the House</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="src/images/lanisters.png">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">House of Lanister<i class="material-icons right">more_vert</i></span>
                                    <p>
                                        <label>
                                            <button class="waves-effect waves-light btn-small" name="lanister">
                                                <i class="material-icons">
                                                    how_to_vote
                                                </i>
                                            </button>
                                        </label>
                                    </p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Description of the House</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="src/images/targaryen.png">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Hous of Targaryen<i class="material-icons right">more_vert</i></span>
                                    <p>
                                        <label>
                                            <button  class="waves-effect waves-light btn-small" name="targaryen">
                                                <i class="material-icons">
                                                    how_to_vote
                                                </i>
                                            </button    >
                                        </label>
                                    </p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Description of the House</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </form>

                <?php
                require 'porcess.php';
                ?>
            </div>  
        </body>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text <a href="#!">More Links</a>
            </div>
          </div>
        </footer>
    </html>