 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="logo_s.jpg">
    <link
    
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>
  <body style="background-image: url(backgroundm.jpg); background-repeat: no-repeat;
    background-attachment: fixed;
    background-position:center;
    background-size: cover; ">
    <?php require 'partials\_nav.php' ?>
       
    
    <div
      class="container"
      style="
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      "
    >
      <form aciton="login.php" method="post" style="background-color:white;" class="mt-5 p-5"  style="border-radius: 1000rem;" >
<div class="heading" >
      <h1 class="text-center"> HEY!! Login </h1>
    </div>
  <div class="mb-3">
    <label for="mobile" class="form-label" >Mobile No</label>
    <input type="text" class="form-control " id="mobile" name="mobile" aria-describedby="emailHelp" placeholder="Enter registered Mobile No" required>
    <div id="emailHelp" class="form-text">We'll never share your user id and password with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label"  >Password</label>
    <input type="password" class="form-control" id="Password" name ="password" placeholder="Enter Your Password" required >
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
   <button type="buttob" class="btn btn-success" onClick="document.location.href='partials/_forgot.php'" >forgot</button>
   
</form>
         <?php require 'partials/dbconnect.php'?>
        <?php
              $login=false;
              $showerror=false;
              if($_SERVER['REQUEST_METHOD']=='POST')
                  {
                    $Mobile = $_POST['mobile']; 
                    $password = $_POST['password'];  
                    // $name = $_POST['name'] ;
           $sqlLogin="SELECT * FROM `anish` WHERE `Mobile` = '$Mobile' AND `Password` = '$password'";
           $result = mysqli_query($conn , $sqlLogin); 
           $num = mysqli_num_rows($result); 
           if($num==1) 
           {
               $login=true;
               
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
    <h4 class="alert-heading">Hurrahh!</h4>
      <p>
        Aww yeah, you successfully logged in !!!!. 
      </p>
    </div>' ;
    session_start(); 
    $_SESSION['loggedin'] =true; 
    // $_SESSION['name'] = $name; 
    header("location: welcome.php"); 
           }
           else 
           {
             $showerror=true;
             echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
    <h4 class="alert-heading">Error!</h4>
      <p>
          Please Enter correct userid and password
      </p>
    </div>' ;
           }
           }
        ?>     

    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
