<?php

include("MysqlConn.php");

$sql = "SELECT * FROM polis WHERE id=".$_GET['id'];

$answer = mysqli_query($connect,$sql);
 
if(!$answer ){
    echo '<br>Hata:' . mysqli_error($connect);
}

$res=mysqli_fetch_array($answer);
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
</head>
<body style =" background-image: url(3d-render-police-line-tape-against-defocussed-background.jpg) ; color : #ffffff">
<div class ="container">
    <div class="row justify-content-center">
       <div class="col-lg-6 col-md-6 col-12"><br><br>
         <h2 style="color: #ffffff; "> Update List</h2> <br><br>
          
         
        <form   action= "list.php" method="POST">
             
            <div class="form-group">
                <label class="form-label" >Polis id</label>
                <input type="text"   name="id" class="form-control" required value="<?php echo $res['id']?>">
            </div>
            <div class="form-group">
                <label  class="form-label">Name</label>
                <input type="text"  placeholder="username@gmail.com"  name="adi_soyadi" class="form-control" required value="<?php echo $res['adi_soyadi']?>">
            </div>
            <div class="form-group">
                <label  class="form-label">Email</label>
                <input type="email"  placeholder="username@gmail.com"  name="polis_eposta" class="form-control" required value="<?php echo $res['eposta']?>">
            </div>
           
            <div class="form-group">
                <label  class="form-label">Phone No</label>
                <input type="text"   placeholder="0533-002-22-22"  name="tn" class="form-control" required value="<?php echo $res['tn']?>">
            </div>

            

            <div class="form-group">
                <label class="form-label">Address</label>
                <input type="text"   name="polis_adresi" class="form-control" required value="<?php echo $res['adres']?>">
            </div>
            
             <div class="form-group">
                <label  class="form-label">Date of Birth</label>
                <input type="date"   name="polis_dt" class="form-control" required value="<?php echo $res['dt']?>">
            </div>
            <div>
                <a href="update.php"><button  type="submit" class="btn btn-success"> Update  </button></a>

            </div>
           
        </form><br>
     </div>
    </div>
</div>
</body>
</html>
