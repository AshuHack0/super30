<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="logincss.css">
    <body>
           <div class="login">
            <h1 class="text-center">Welcome!!!</h1>
            <form class="needs-validation">
                <div class="form-group was-validated">
                  <label for="email" class="form-level">Mobile No.</label>
                  <input type="number" name="email" id="email" class="form-control" placeholder="Enter Your username" required>
                  <div class="valid-feedback">
                    Looks Awesome!
                  </div>   
                  <div class="invalid-feedback">
                    Please Enter Correct Moblile  address
                  </div>
                                          
                </div>
                <div class="form-group was-validated">
                  <label for="password"  class="form-level">  Password</label>
                  <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>  
                  <div class="invalid-feedback">
                    Please Enter Correct Password
                  </div>             
                </div>
                <div class="form-group form-check">
                 
                  <input class="form-check-input" type="checkbox" name="check">
                  <label for="check" class="form-check-label">Remember Me</label>
                </div>
                    <input class="btn btn-success w-100" type="submit" value="SIGN IN">
                </div> 
                 
            </form>
           </div> 

        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"
      ></script>
    </body>
</html>
