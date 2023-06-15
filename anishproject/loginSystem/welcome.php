 <?php
 session_start();
if(!isset(($_SESSION['loggedin'])  ) )
{
  header ("location: login.php"); 
  exit; 
}
 ?>
 
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
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

<div class="container">
  <!-- <h2 class="text-center my-5">Welcome to the system You are successful login </h2> -->
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done! </h4>
  <p>Aww yeah , you successfully  logged in to your dashboard  .</p>
  <hr>
  <p class="mb-0">Whenever you need to logout from your dashbord go to logout section to logout.</p>
</div>
</div>
     <h1>PDF Example</h1>
    <p>Open a PDF file <a href="1.pdf">example</a>.</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>