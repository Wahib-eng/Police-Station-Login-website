 <?php 

    $server = 'localhost' ;
    $userName = 'root'; 
    $password= '';
    $dB = 'polisler' ;


    $connect = mysqli_connect ($server,$userName,$password,$dB);

    if (!$connect) {
   
    echo "error: " . mysqli_connect_error();
    die("Maalsef MySQL sunucuya  baglanamadiniz !!" );
    exit;
}

?>

