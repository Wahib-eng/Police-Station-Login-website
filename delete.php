<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row justify-content-right">
      <div class="col-lg-6 col-md-6 col-12">

    <form action="del.php" method="post" class="container" style="margin-top :50px; margin-bottom:50px">
          
            <h2 style="color: grey; "> Delete Account  </h2><br> <br> 
       <div class="mb-3">
          <label class="form-label">Email  </label>
          <input type="text" class="form-control" name="email" >
        </div>  
        <div class="mb-3">
           <label class="form-label">Password  </label>
           <input type="password"   class="form-control" name="password">
        </div>  

       <div>
          <button  type="submit" class="btn btn-danger"> Delete  </button>
       </div><br>
     
     </form>
     </div>
    </div>
  </div>

</body>
</html>
