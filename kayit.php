<html>
<?php
include ('MysqlConn.php');

    $polis_adi=$_POST['polis_adi'];
    $polis_eposta=$_POST['polis_eposta'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
    $polis_tn=$_POST['polis_tn'];
    $polis_dt=$_POST['polis_dt'];
    $polis_adresi=$_POST['polis_adresi'];

  
    $password = hash('sha256', $password);  
    $password2 = hash('sha256', $password2);

    
    $sq = mysqli_query($connect, "SELECT eposta FROM polis WHERE eposta = '".$_POST['polis_eposta']."'") ;
    if(mysqli_num_rows($sq)) {
            echo('This email is already being used');
            echo"<br> <a href='kayitForm.php' >click to go back ... </a> ";  
    }
    else {
    $q = "INSERT INTO polis ".
       "(adi_soyadi,eposta,sifre,sifre2, tn, dt, adres) ".
       "VALUES ('$polis_adi', '$polis_eposta', '$password', 
       '$password2', '$polis_tn', '$polis_dt', '$polis_adresi' )";
         
   
    $answer = mysqli_query($connect, $q);
    
        if ($answer){
            header ("location:giris.php"); 
            
            }
             
    mysqli_close($connect); 
}

?>
</html>
