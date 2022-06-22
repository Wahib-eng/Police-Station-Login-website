<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Permission Form</title>
</head>

<body  style =" background-image: url(3d-render-police-line-tape-against-defocussed-background.jpg); color: white; ">

<div class="row justify-content-center">
   <div class="col-lg-6 col-md-6 col-12">
     
    
    <form action="izinKaydet.php" method="post" class="container" style="margin-top :50px; margin-bottom:50px" >
        
       <h2 >Police Permission Page </h2><br> <br> 
        
       <div class="mb-3">
          <label class="form-label">Permission Reason </label>
          <textarea class="form-control" name="detail" required >  </textarea>
        </div>  
       
        <div class="mb-3">
           <label class="form-label">from</label>
           <input  type="date"   class="form-control" name="from" required >
        </div>
        <div class="mb-3">
           <label class="form-label">to    </label>
           <input  type="date"   class="form-control" name="to" required >
        </div>
       <div>
          <button  type="submit" class="btn btn-success"> submitt </button>
         
       </div>
     <div><br><br>
       
     </form>
   </div>
   </div>
  </div> 

</body>
</html>
