 
<?php

//conecting to the database
$severname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "anish" ; 
$inserted = false; 
$conn = mysqli_connect($severname, $username ,$password , $database) ; 
if(!$conn)
 {
    die("sorry we failed to connect to the server"); 

 }
  
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
     <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
     <link rel="shortcut icon" type="image/x-icon" href="logo_s.jpg">
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
   
<div class="container mt-5">

</div>
<div class="container my-5 mt-5">

<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
     
  <?php
       $sql = "SELECT * FROM `anish`";
      $result = mysqli_query($conn , $sql) ; 
      // find the number of the records returned
  $num = mysqli_num_rows($result);  
  // diplay the rows returned by the sql query
  $i = $num; 
  $j=1;
  while($i>0)
  {
    if($num>0)
     {
       $row = mysqli_fetch_assoc($result); 
        //echo var_dump($row); 
        echo "
        <tr>
        <th scope='row'>" . $j . "</th>
        <td> " . $row['Name']. "</td>
        <td>" . $row['Mobile'] . "</td>
          <td>" . $row['dob'] . "</td>
          <td>" . $row['Password'] . "</td>
      </tr>
        " ; 
        $i--;
        $j++;
   }
  }
 
     ?>
 <script>
       var delete = document.getElementsByClassName('del');
       console.log("done"); 
  </script>

  </tbody>
  <hr>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
      <script>
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element)=>{
          element.addEventListner("click" ,(e)=>{
            console.log(e.target.parentNode.parentNode;)
          })
        })

      </script>
  </body>
</html>