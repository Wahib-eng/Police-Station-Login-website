<?php 
   session_start(); 
   
   require('MysqlConn.php'); 
   
    
   
   if (isset($_POST['email']) and isset($_POST['password'])){ 
   
   extract($_POST); 
   
    

   $password = hash('sha256', $password); 
   
   $sql = "SELECT * FROM `polis` WHERE "; 
   
   $sql= $sql . "eposta='$email' and sifre='$password'"; 
   
    
   
   $answer = mysqli_query($connect, $sql); 
   
   if(!$answer ){ 
   
       echo '<br>Hata:' . mysqli_error($connect); 
   
   } 
   
   
   $count = mysqli_num_rows($answer); 
   
   if ($count == 1){ 
   
       $_SESSION['email'] = $email; 
   
    }else{ 
   
   $msg = "<h1>  Kullanıcı adı veya Şifre Hatalıdır !</h1>"; 
   
    } 
   
   } 
   
   if (isset($_SESSION['email'])){ 
   
   header("Location: anaSite.php"); 
   
   }else{ 
   
   
   ?> 
<html>
   <head>
     <title>Login Page</title>
     <meta http-equiv="Content-Type" content="text/html;  
         charset=UTF-8" />
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
<body  style =" background-image: url(3d-render-police-line-tape-against-defocussed-background.jpg); color: white; ">

<div class="row justify-content-center">
   <div class="col-lg-6 col-md-6 col-12">
    
    <form action="<?php $_PHP_SELF ?>" method="post" class="container" style="margin-top :50px; margin-bottom:50px">
            
            <h2 >Police Login page  </h2><br> <br> 
            <?php  
            if(isset($msg)){ echo $msg;}  
            
            ?> 
       <div class="mb-3">
          <label class="form-label">Email   </label>
          <input type="text" class="form-control" name="email"  required>
        </div>  
        <div class="mb-3">
           <label class="form-label">Password  </label>
           <input name="password" type="password"   class="form-control" required >
        </div>  <br>

       <div>
          <button  type="submit" class="btn btn-success"> log in  </button> &#160&#160&#160&#160 &#160&#160&#160&#160
          <a href = "kayitForm.php" class="btn btn-info" >sign up </a> <br><br>
       </div><br>
     <div >
       
     </form>
   </div>
   </div>
  </div> 
</body>
</html>
<?php } ?>
