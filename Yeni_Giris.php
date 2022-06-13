<!DOCTYPE html>
<?php
    require ('mysqlConn.php');
    if (isset($_POST['username']) && isset($_POST['sifre'])){
         extract($_POST);
        
         $password = hash('sha256', $password);
         $sql="INSERT INTO `polis` (polis_adi, , polis_dt, polis_tn, polis_eposta, polis_adresi,sifre,sifre2)";
         $sql = $sql . "VALUES ('$name', '$DateOfBirht', '$PhoneNo' ,'$polis__eposta','$polis_adresi','$password','$password2')";
            $answer = mysqli_query($baglanti, $sql);
            if ($answer){
                 $mesaj = "<h1>Kullanıcı oluşturuldu.</h1>";
             }
             else{
                     $mesaj = "<h1>Kullanıcı oluşturulamadı!</h1>";
                 }
         }

   
?>

<html>
   <head>
     <title>Register Page </title>
     <meta charset="utf-8">
     <!-- CSS only -->
     
     
   </head>
  
<body>
    <h2> Register Page </h2>
   

    <div class="mb-3">
        <form action="<?php $_PHP_SELF ?>" method="post">
              Name : &#160&#160&#160
          <input class="form-control" type="text"  id="uN" name="username"> <br/><br/>
         Date of Birth : &#160&#160&#160
         <input class="" type="date"  id="uN" name="DateOfBirht"> <br/><br/>
         Phone No : &#160&#160&#160
          <input class="" type="text"  id="uN" name="PhoneNo"> <br/><br/>
          
           Email adress : &#160&#160&#160
          <input class="" type="text"  id="uN" name="eposta"> <br/><br/>
          Adress : &#160&#160&#160
              
          <br><br><textarea class="" type="textarea"  id="uN" name="adress"> Enter your Adress ...</textarea>> <br/><br/>
          Password :&#160&#160&#160
        <input class="" type="password" id="pwd" name="sifre" > <br/><br/>
             
         <button class= "" type="submit" name="submit">register</button><br><br>

             <a href="oturum.php">Click to login</a><br><br>
             <a href ="anaSite.php">Go to main page </a>
       </form>
    </div>

</body>
</html>
