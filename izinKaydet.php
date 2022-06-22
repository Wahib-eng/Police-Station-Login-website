<html>
<head><meta charset="utf-8"></head>
<body>
<?php
 
include("MysqlConn.php");

session_start(); 
$detail=$_POST['detail'];
$from=$_POST['from'];
$To=$_POST['To'];


$sql = "INSERT INTO permission ".
       "(details,from,to) ".
       "VALUES ( '$detail','$from', '$To')";
	   

$answer = mysqli_query( $connect,$sql);
    
if(!$answer)
{
    echo '<br>Hata:' . mysqli_error($connect);
}
else
{
    echo "Your permission is taken ";
    echo " <a href='giris.php'>Click to see your permission </a>\n";
}

mysqli_close($connect);
?>
</body>
</html>
