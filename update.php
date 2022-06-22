<?php

include("MysqlConn.php");

extract($_POST);
$q ="UPDATE polis ".
      "SET id='$id',adi_soyadi='$adi_soyadi',eposta='$eposta',tn='$tn' ,adres='$adres',dt='$dt' ".
      "WHERE memur_id=".$_GET['id'];

$answer = mysqli_query( $connect,$q);

if(!$answer){
    echo '<br>Error :' . mysqli_error($connect);
}
else{
    echo "Upadted Successfully .";
    echo " <br><a href='list.php'> Show List</a>\n";
}

mysqli_close($connect);
?>
