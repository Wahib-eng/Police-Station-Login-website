 <?php 

    $server = 'localhost' ;
    $userName = 'root'; 
    $password= '';
    $dB = '' ;


    $connect = mysqli_connect ($server,$userName,$password,$dB);

    if (!$connect = mysqli_connect ($server,$userName,$password,$dB)) {
   
    echo "error: " . mysqli_connect_error();
    die("Maalsef MySQL sunucuya  baglanamadiniz !!" );
    exit;
}

?>

