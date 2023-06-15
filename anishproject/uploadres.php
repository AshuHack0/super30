<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Homework</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
      <nav class=" navbar-expand-lg navbar-dark navbar bg-dark" data-bs-theme="dark ">
  <div class="container-fluid">
      <a class="navbar-brand round" href="#"><img src="logo_s.jpg" width="40" height="40" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="logout.php">Log out</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>  
   
    <div class="container  ">
<h1 style="color:darkgreen; text-align: center;">Maths Home Work Dashboard
     </h1>
    </div>

 <div class="container p-4 w-50" style="border:2px solid orange ;">
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="title">Title</label>
       <input class="form-control form-control-lg" id="title" type="text" name="title">

        <label for="File" class="form-label mt-4">Insert HomeWork</label>
        <input name="file" class="form-control form-control-lg" id="File" type="file">
        
        <button type="submit" class="btn btn-primary mt-4">Upload</button>
 
    </form>
 </div>
    

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
 
   
    <?php
     $servername = "sql302.epizy.com" ;
   $username = "epiz_33327012" ;
   $password="wLgCRzQD3m3WE"; 
    $database= "epiz_33327012_anish"; 
    $conn = mysqli_connect($servername , $username, $password , $database);
    if($conn)
{
    
}
else{
    echo "error" ; 
}
 
 
 

               $login=false;
               $showerror=false;
               if($_SERVER['REQUEST_METHOD']=='POST')
               {
                $filename= $_FILES["file"]["name"]; 
                $tempname =$_FILES["file"]["tmp_name"]; 
                $folder = "PDF/".$filename ; 
                $Title =  $_POST['title'];
                $fileuploded= move_uploaded_file($tempname ,$folder) ;
               if($fileuploded)
                { echo "file Uploded Successfull";
                }
                else 
                {
                    echo "file is not uploded successful" ;
                } 
                    $mysql =  " INSERT INTO `resHomework` (`S.No`, `Title`, `File_Name`, `Date`) VALUES (NULL, '$Title', '$folder', current_timestamp());";
                    $result = mysqli_query($conn , $mysql); 
                    if($result)
                    {
                        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
    <h4 class="alert-heading">Sucess!!!</h4>
      <p>
        Your Data inserted sucessfull!!! 
      </p>
    </div>' ;
                    }
                }
?>