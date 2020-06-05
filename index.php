<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stadium Management System</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">.
<link rel="stylesheet" href="style.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container"><!--header area start-->
     <h1 style="text-align:center;color:black;">Stadium Management System</h1>
      <div class="row">
          <div class="col-lg-4 logo">
              <a href="index.php"><img src="img/logo.png" alt="LOGO" style="height:60px;"></a>
          </div><!--LOGO AREA-->
          <div class="col-lg-8">
          
                  <ul class="nav nav-pills navbar-inverse navbar-right">
                      <li><a href="">Home</a></li>
                      
                          <!--view area start-->
                          <li class="dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown">View<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                          <li><a href="view/game_sch_v.php">Game Schedule</a></li>
                          
                          
                          
                      </ul>
                      </li>
                       <!--search area start-->
                      <li class="dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                          <li><a href="search/gam_sch_srch.php">Game Schedule</a></li>
                          <li class="divider"></li>
                          
                      </ul>
                      </li>
                      <li><a href="login.php">LOG IN</a></li>
                          
                      
                  </ul>
          </div><!--col 8 area end-->
      </div><!--row area end-->
  </div><!--header area end-->
  
  <div class="container-fluid"><!--galary area start-->
      <div class="row">
          <div class="col-lg-12">
              <div id="galary" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#galary" data-slide-to="0" class="active"></li>
                    <li data-target="#galary" data-slide-to="1"></li>
                    <li data-target="#galary" data-slide-to="2"></li>
                     </ol>
                     
                       <div class="carousel-inner" role="listbox">
                      <div class="item active">
                          <img src="img/galary/2.jpg" alt="galery photo">
                      </div>
                       <div class="item">
                          <img src="img/galary/3.jpg" alt="galery photo">
                      </div>
                       <div class="item">
                          <img src="img/galary/5.jpg" alt="galary photo">
                      </div>
                       <div class="item">
                          <img src="img/galary/4.jpg" alt="galary photo">
                        </div>
                          <div class="item">
                          <img src="img/galary/a.jpg" alt="galary photo">
                      </div> 
                  </div>  
              </div><!--garary id end-->
          </div><!--col 12 area end-->
      </div><!--row area end-->
  </div><!--galary area emd-->
  <footer>
      <h1 style="text-align:center">Code Breaker</h1>
  </footer>
</body>
</html>