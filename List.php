<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm justify-content-center navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="anaSite.php">police Registration </a>
    
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
       
        <li class="nav-item">
              <a href="cikis.php"><button class="btn btn-danger" >log out  </button></a>  
        </li>
      </ul>
       
    </div>
    </div>
  </div>
</nav> <br><br>  
    <?php
        include("MysqlConn.php");
        $sql="SELECT * FROM polis  "; 
        $answer = mysqli_query($connect,$sql);
        $res=mysqli_fetch_array($answer);
        $password = hash('sha256', $password); 
        $password = hash('sha256', $password);  


        $answer = mysqli_query($connect , $sql ); 
        if($answer){

            echo "<div class='container mt-5'><h3 class='text-center mb-3'> Police List </h3> <div class='table-responsive'>
            <div class='col'>
             <table class='table table-dark table-striped table-hover table-bordered '> <thead>";
             echo "<tr>
                    <th scope='col'>Police Id</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Address</th>
                    <th scope='col'>Phone No</th>
                    <th scope='col'>Date of Birth</th>
                    <th scope = 'col' > Update </th>
                </tr></thead>
                </div>
                </div>
                </div>";
            

            while($res=mysqli_fetch_array($answer)) {
                
                echo "<tbody><tr><td data-label='Police Id'>".$res['id']."</td>";
                echo "<td data-label='Adı'>".$res['adi_soyadi']."</td>";
                echo "<td data-label='Email'>".$res['eposta']."</td>";
                echo "<td data-label='Address'>". $res ['adres']. "</td>";
                echo "<td data-label='Phone No'>".$res['tn']."</td>";  
                echo "<td data-label='Date of Birth'>".$res['dt']."</td>";  
                echo "<td data-label='update'><a href=form.php?id=";
                echo $res['id'];
                echo " >update</a></td></tr></tbody>";
                }
                echo "</table>";

                mysqli_close($connect);

               
              }

    ?>
</body>
</html>
