 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin</title>
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
      <?php  require 'partials/Admin_form.php' ;  ?>
         <?php require 'partials/dbconnect.php'?>
        <?php
              $login=false;
              $showerror=false;
              if($_SERVER['REQUEST_METHOD']=='POST')
                  {
                    $Mobile = $_POST['mobile']; 
                    $password = $_POST['password'];  
                    // $name = $_POST['name'] ;
            
                    if($Mobile=='9801403785' && $password=='Ashu@')
                    {
               $login=true;
    session_start(); 
    $_SESSION['loggedin'] =true; 
    // $_SESSION['name'] = $name; 
    header("location: admin.php"); 
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
