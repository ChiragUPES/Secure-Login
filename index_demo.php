<?php
require 'common.php';
if(!isset($_SESSION['mail'])){
  header('location:login.php');
}

?>

<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   
    <title>BLACKBOARD</title>
    <link rel = "icon" href = "photos/bicon.png"
		type = "image/x-icon"> 
    
  </head>
  <body>
      <div class="first">
           
      <img class="float-left" src="photos/logo.jpg" alt="Chania" width="150" height="100">
      <div class="text-right">
           
       
            <div class="btn-group">
                    <button type="button" class="hamburger hamburger--squeeze">STUDENTS NAME <span class="badge badge-light">7</span></button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">settings</a>
                      <a class="dropdown-item" href="#">tools</a>
                      <a class="dropdown-item" href="#">courses</a>
                    </div>
                    <a href="logout.php" class="btn btn-dark" role="button">log out</a>
                </div>
                
      </div>
</div>

    
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#">
                <img src="photos/download.jpg" alt="logo" style="width:50px;">
              </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Faculty</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Report</a>
                    </li>    
                  </ul>
                </div>  
                <form class="form-inline" action="/action_page.php" 
                target="_blank" onsubmit="try {return window.confirm(&quot;This form may not function
                 properly due to certain security constraints.\nContinue?&quot;);} catch (e) {return false;}">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-primary" type="submit">Search</button>
                </form>
              </nav>

              <div class="bottom">
                    <div class="container">
                      <div class="row1">
                      <div class="col-sm-2">
                            <h1 class="text2">Respondus LockDown Browser Download</h1>
                            <a href="http://www.respondus.com/lockdown/download.php?id=624253989" target="_blank">
                                <img src="photos/ld.jpg" alt="respondus locldown browser"
       height="100%" width="100%"></a>
                          </div>
                            <div class="col-sm-8">
                                   
                                    <div class="text-center">
                                            <h2 class="courses">My Courses
                                                  </h2>
                                                  
                                                      <ul>
                                                        <li><a href="download.php" target="_blank">.NET TECHNOLOGY</a></li>
                                                        <li><a href="download.php" target="_blank">IT APPLICATION</a></li>
                                                        <li><a href="download.php" target="_blank">AUTOMATA</a></li>
                                                        <li><a href="download.php" target="_blank">COMPUTER GRAPHICS</a></li>
                                                        <li><a href="download.php" target="_blank">MINOR</a></li>
                                                        <li><a href="download.php" target="_blank">VENTURE IDEATION</a></li>
                                                      </ul>
                                                      
                                           

                                </div>
                               
                            </div>
                                <div class="col-sm-2">
                                        <h1 class="text2">My Calender</h1>
                                        <img class="float-center" src="photos/calender.gif" alt="calender" width="150px" height="200px">
                                </div>
                      </div>
                      <br>
  
                      <br>
                      <br>
                      <br><br>
  
                      <br>
                      <br>
                      <br><br>
  
                      <br>
                      <br>
                      <br><br>
  
                      <br>
                      <br>
                      <br>
                      <br><br>
  
                      
                      
                            <h2>What our courses say</h2>
                            <div class="second">
                            <div id="demo" class="carousel slide" data-ride="carousel">

                                    <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                                      <li data-target="#demo" data-slide-to="1"></li>
                                      <li data-target="#demo" data-slide-to="2"></li>
                                    </ul>
                                    
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="photos/cg.png" alt="Los Angeles">
                                        
                                      </div>
                                      <div class="carousel-item">
                                        <img src="photos/net.png" alt="Chicago">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="photos/it.png" alt="New York">
                                      </div>
                                    </div>
                                    
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                      <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#demo" data-slide="next">
                                      <span class="carousel-control-next-icon"></span>
                                    </a>
                                  </div></div>
                    </div>


                      </div>
                    </div>
                     
                      
                     




                <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</div>
</body>
</html>
