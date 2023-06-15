
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign Up</title>
    <link rel="shortcut icon" type="image/x-icon" href="logo_s.jpg">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>
  <body style="background-image: url(s.jpg); background-repeat: no-repeat;
    background-attachment: fixed;
    background-position:center;
    background-size: cover; ">
    <?php require 'partials\_nav.php' ?>
    <?php require 'partials/dbconnect.php'?>
    <?php
if($_SERVER['REQUEST_METHOD']=='POST')
   {
    $error = false; 
    $nodata = false; 
    $mobile = $_POST['mobile']; 
    $cpassword = $_POST['Confirm_Password'];
    $password= $_POST['password']; 
    $dob = $_POST['dob']; 
    $Name = $_POST['Name']; 
    //  here we are checking username is unique or not  
    $sqlExists="SELECT * FROM `anish` WHERE `Mobile` = '$mobile'";
           $alreadyExitsCheck = mysqli_query($conn , $sqlExists); 
           $num = mysqli_num_rows($alreadyExitsCheck);
     if($num>0)
      {
         echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
    <h4 class="alert-heading">Error!!!</h4>
      <p>
        ooohooo!! Username already Exits. Please different Username . 
      </p>
    </div>' ;
      }
     else 
     {
    if(($password == $cpassword)){
     $mysql = "INSERT INTO `anish` (`Sno.`, `mobile`,`Name`, `Password`, `dob` , `Date`) VALUES ('', '$mobile','$Name' ,'$password','$dob' ,current_timestamp())";
    $result = mysqli_query($conn , $mysql); 
    if($result)
    {
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
    <h4 class="alert-heading">Well done!</h4>
      <p>
        Aww yeah, you successfully Created the Account . Now You can login
        through Login Section!!!!
      </p>
    </div>' ;
    }
  
   }
   else {
       echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
    <h4 class="alert-heading">Error!</h4>
      <p>
         Please Enter Same Password
      </p>
    </div>' ;
   }
  }
}
?>
    
    <div
      class="container"
      style="
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      "
    >
      <?php
       require 'partials/_form.php' ; 
       ?>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
