<!DOCTYPE html>
<?php
    session_start();
    require('mysqlConn.php');
    if (isset($_POST['polis_adi']) and isset($_POST['password'])){
    extract($_POST);
   
    $password = hash('sha256', $password);
    $sql = "SELECT * FROM `polis`  ";
    $sql= $sql . "polis_adi}='$polis_adi' and
    password='$password'";
    $answer = mysqli_query($connect, $sql);
    
    if(!$answer ){
    echo '<br>Error:' . mysqli_error($connect);
    }
    
    $count = mysqli_num_rows($cevap);
    if ($count == 1){
    $_SESSION['polis_adi'] = $polis_id;
    }else{
    $mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>";
    }
    }
    if (isset($_SESSION['polis_adi'])){
    header("Location: YeniGiris.php");
    }
?>
    
?>

<html>
   <head>
     <title>Login Page</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
<body>
<div>
  <h2>
    <h2 > Login </h2>
 
  <div class="form-group"> 
    <form action="<?php $_PHP_SELF ?>" method="post" >
        police name : &#160&#160
        <input class="uN" type="text"  id="kadi" name="polis_adi"> <br/><br/>
        Password :&#160&#160
        <input class="psd" name="password" type="password" id="pwd"  > <br/><br/><br/><br/>
      <button class="sub" name="submit" type="submit" > Login </button><br/><br/>
      <a href = "YeniGiris.php" >sign up </a> <br/><br/>
      <a href = "anaSite.php" >main Page</a> 
    </form>
  </div>

</div>
  </h2>
</body>
</html>
