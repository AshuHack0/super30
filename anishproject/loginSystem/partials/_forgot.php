 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body style="background-image: url(s.jpg); background-repeat: no-repeat;
    background-attachment: fixed;
    background-position:center;
    background-size: cover; " >
    <?php require '_nav.php' ?>
    <div class="container text-center mt-5" style="
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      ">
    <?php require 'dbconnect.php' ?>
    
    <form action="_forgot.php" method="post" style="background-color:white;" class="mt-5 p-5"  style="border-radius: 1000rem;">
  <div class="mb-3">
    <label for="mobile" class="form-label">Mobile</label>
    <input type="text" class="form-control" id="username" name="mobile" placeholder="Type Your Mobile No." >
     </div>
     <div class="mb-3">
    <label for="dob" class="form-label">Date Of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob" placeholder="Type Your Mobile No." >
     </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form>
   <?php
       if($_SERVER['REQUEST_METHOD']=='POST')
                  {
                    $mobile = $_POST['mobile']; 
                    $dob = $_POST['dob']; 
       
                 
       $serach = "SELECT * FROM `anish` WHERE `Mobile` LIKE '$mobile'  && `dob` LIKE '$dob' ";
       $result= mysqli_query($conn,$serach); 
       $num = mysqli_num_rows($result); 
       if($num>0)
       {
          $row = mysqli_fetch_assoc($result) ; 
        echo  $row['Mobile'] . "   ->>>>>>>>>>>  " . $row['Password'];
        echo "<br>" ; 
       }
       else 
       {
        echo "enter correct UserName or Date of Birth!!!!";
       }
    }
   ?>
</div>
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>