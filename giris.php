<!DOCTYPE html>
<?php
    session_start();
    require('mysqlConn.php');
    if (isset($_POST['polis_adi']) and isset($_POST['password'])){
    extract($_POST);
   
    $password = hash('sha256', $password);
    $sql = "SELECT * FROM `polis` WHERE";
    $sql= $sql . "kullaniciadi='$polis_adi' and sifre='$password'";
    
    $answer = mysqli_query($connect, $sql);
    
    if(!$answer){
    echo '<br>Error:' . mysqli_error($connect);
    }
    
    $count = mysqli_num_rows($answer);
    if ($count == 0){
    $_SESSION['polis_adi'] = $polis_adi;
    }else{
    $mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>";
    }
    }
    if (isset($_SESSION['polis_adi'])){
    header("Location: anaSite.php");
    }
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
<body >
    
    <form action="<?php $_PHP_SELF ?>" method="post" class="container" style="margin-top :50px; margin-bottom:50px">
          <?php  
            if(isset($mesaj)){ echo $mesaj;}  
            
            ?>
            <h2 style="color: grey; "> Login page  </h2><br> <br> 
       <div class="mb-3">
          <label class="form-label">Username  </label>
          <input type="text" class="form-control" name="polis_adi" >
        </div>  
        <div class="mb-3">
           <label class="form-label">Password  </label>
           <input name="password" type="password"   class="form-control" >
        </div>  

       <div>
          <button  type="submit" class="btn btn-success"> log in  </button>
       </div><br>
     <div >
         <a href = "Yeni_Giris.php" >sign up </a> <br><br>
         <a  href = "anaSite.php" class="link-secondary">Main Page</a>
          <br/><br/>
          
          
   
     </form>
  </div> 
</body>
</html>
