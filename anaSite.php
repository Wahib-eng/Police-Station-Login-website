<?php 
session_start(); 
 if ( !isset($_SESSION['email']) ) { 
   echo "<h2 font-color:>Giris yapiniz  !! </h2>"; 
   header("Location: giris.php"); 
   
 
   exit(); 
 
  } 
?>
<!DOCTYPE html>
<html lang="en">

<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        
        <title>police station</title>
    </head>
    <body >
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="anaSite.php">Police Permission System </a>
          
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="list.php">List polices </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="izin.php">get permission  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="delete.php">Delete</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="updateForm.php">Update Profile</a>
              </li>
              <li class="nav-item">
                    <a href="cikis.php"><button class="btn btn-danger" >log out  </button></a>  
              </li>
      
            </ul>
            
          </div>
          </div>
        </div>
      </nav> <br><br><br><br>
       
     <div class="container">
        <div class="row">
          <div class="col-sm">
        <h3 style="color : Grey"> Hello  <?php echo $_SESSION['email'] ?>, <br /> 
              Welcome To Your Page . <h3><br /><br /> 
          </div>

          <a href="https://github.com/Wahib-eng/php_projesi" ><h4  style="color :#FF4546"> Click To see my code in Github </h4></a>
              
      </div>
     
    </body> 
</html>
