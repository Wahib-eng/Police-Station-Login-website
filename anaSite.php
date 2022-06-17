<?php
 session_start(); 
   
 //eğer username adlı oturum değişkeni yok ise  
 
 //login sayfasına yönlendir 
 
 if ( !isset($_SESSION['polis_adi']) ) { 
 
   header("Location: giris.php"); 
 
   exit(); 
 
  } 
    
 
   
?>
<!DOCTYPE html>
<html lang="en">

<html>
    <head>
        <meta charset="utf-8">
        <link href ="style.css" rel ="stylesheet"> 
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        
        <title>police station</title>
    </head>
    <body>
      <div>
    
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="anaSite.php">polis station</a>
    
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="anaSite.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">COMMUNITY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Polis stations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">About </a>
        </li>
        <li class="nav-item">
          <a class="btn btn-danger" href="cikis.php">log out  </a>
        </li>
        
        
        
        
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav> 
</div>

<main id="main">
<section id="breadcrumbs" class="breadcrumbs">
  
</section>
</main>
<footer id="footer">
<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h4>Join Our police officers </h4>
        <p>The last registeration date is 11/10/2022 take addventage to be the one who saves people</p>
        
      </div>
    </div>
  </div>
</div><br><br><br><br><br><br><br><br><br>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Police Station </h3>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +537 089 5588<br>
          <strong>Email:</strong> policeStation@force.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="anaSite.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">National Service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Police Day</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Police Heritage Trail</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Our History</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Airport Security</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Traffic</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Civilian officer</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Crime</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Volunteer Schemes</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <p>We are here to help you. We protect you anywhere in the city </p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>Police Station</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
   
  </div>
</div>
</footer>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    </body> 
</html>
