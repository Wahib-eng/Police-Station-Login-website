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
    <? echo $_SESSION['polis_id'] ?>
  
    
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


  <div class="container">
    <div class="row justify-content-left">
      <div class="col-lg-6 col-md-6 col-12"><br><br>
        
        <h2 style="color: grey; "> Update Page </h2> <br><br>
           <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control"  name="polis_adi">
           </div>
           <div class="mb-3">
               <label  class="form-label">Date of Birth</label>
               <input type="date" class="form-control"  name="polis_dt">
           </div>
           <div class="mb-3">
               <label  class="form-label">Email</label>
               <input type="email" class="form-control"  placeholder="username@gmail.com"  name="polis_eposta">
           </div>
           <div class="mb-3">
               <label  class="form-label">Password</label>
               <input type="password" class="form-control" name="sifre"><br>
           </div>
           <div class="mb-3">
               <label  class="form-label">Phone No</label>
           <input type="text" class="form-control"  placeholder="0533-002-22-22"  name="polis_tn">
           </div>
           <div class="mb-3">
               <label class="form-label">Address</label>
               <input type="text" class="form-control"  name="polis_adresi">
           </div>
           
           <div class="mb-3">
                <button type="submit" class="btn btn-success">update</button> <br><br>
           </div>
       </form>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-right">
      <div class="col-lg-6 col-md-6 col-12">

    <form action="<?php $_PHP_SELF ?>" method="post" class="container" style="margin-top :50px; margin-bottom:50px">
          <?php  
            if(isset($mesaj)){ echo $mesaj;}  
            
            ?>
            <h2 style="color: grey; "> Delete Account  </h2><br> <br> 
       <div class="mb-3">
          <label class="form-label">Username  </label>
          <input type="text" class="form-control" name="polis_adi" >
        </div>  
        <div class="mb-3">
           <label class="form-label">Password  </label>
           <input name="password" type="password"   class="form-control" >
        </div>  

       <div>
          <button  type="submit" class="btn btn-success"> Delete  </button>
       </div><br>
     <div >
     </form>
     </div>
    </div>
  </div>

    </body> 
</html>
