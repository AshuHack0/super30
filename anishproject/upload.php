<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
    <div class="container  ">
<h1 style="color:darkgreen; text-align: center;">Insert Home Work Dashboard
     </h1>
    </div>

 <div class="container p-4 w-50" style="border:2px solid orange ;">
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="title">Title</label>
       <input class="form-control form-control-lg" id="title" type="name">

  <label for="File" class="form-label mt-4">Insert HomeWork My janu</label>
  <input name="file" class="form-control form-control-lg" id="File" type="file">
  <button type="submit" class="btn btn-primary mt-4">Upload</button>
 
    </form>
 </div>
    

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php
   
     $servername = "localhost" ;
   $username = "root" ;
   $password=""; 
   $database= "homework"; 
    $conn = mysqli_connect($servername , $username, $password , $database);
    if($conn)
{
    
}
else{
    echo "Connection in data is not occer" ; 
}
 

               $login=false;
               $showerror=false;
               if($_SERVER['REQUEST_METHOD']=='POST')
               {
                $filename= $_FILES["file"]["name"]; 
                $tempname =$_FILES["file"]["tmp_name"]; 
                $folder = "PDF/".$filename ; 
                move_uploaded_file($tempname ,$folder) ;
                echo "file Uploded Successfull";
                }
?>