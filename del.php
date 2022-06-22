<?php


include("MysqlConn.php");

$email = $_POST['email']; 
$password = $_POST['password'];

$password = hash('sha256', $password); 

$sql = "SELECT * FROM `polis` "; 


if(isset($email) && isset($password)){
    if( "eposta='$email' and sifre='$password'"){
        $delete = mysqli_query($connect  , "delete from polis where eposta ='$email'");
        header ("location: list.php");
    }
}


?>
