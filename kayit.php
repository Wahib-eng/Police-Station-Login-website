<!DOCTYPE html>
<?php
    require ('mysqlConn.php');
    if (isset($_POST['polis_adi']) && isset($_POST['sifre'])){
         extract($_POST);
        
         $sifre = hash('sha256', $sifre);  	 	 	 	 		 	 	 	 	 	
         $sql="INSERT INTO `polis` (kullaniciadi, eposta ,sifre , dt, adres, tn)";
         $sql = $sql . " VALUES ('$polis_adi','$polis_eposta' ,'$sifre',  '$polis_dt' ,'$polis_adresi','$polis_tn')";
        $answer = mysqli_query($connect, $sql);
        if ($answer){
            $msg = "<h1>Kullanıcı oluşturuldu.</h1>";
        }
        else{
            $msg  = "<h1>Kullanıcı oluşturulamadı!</h1>";
        }
    }
?>

<html>
   <head>
     <title>Register Page </title>
     <meta http-equiv="Content-Type" content="text/html;  
    charset=UTF-8" />
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
   </head>
  
<body>  


      <?php 
                if (isset($msg)) echo $msg;
       ?>
        <form  class="container"><br><br> 
        
         <h2 style="color: grey; "> Register Page </h2> <br><br>
            <div class="mb-3">
                 <label class="form-label">Name</label>
                 <input type="text" class="form-control"  name="polis_adi" >
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
                 <button type="submit" class="btn btn-success">register</button> <br><br>
            </div>
            <div> 
                <a href="giris.php" >Click to login</a><br><br>
               <a class="link-secondary" href ="anaSite.php">Go to main page </a><br><br>
               
            </div>
            
        </form>

</body>
</html>
