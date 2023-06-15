<form aciton="login.php" method="post" style="background-color:white;" class="mt-5 p-5"  style="border-radius: 1000rem;" >
<div class="heading" >
      <h1 class="text-center"> HEY!! Admin </h1>
    </div>
  <div class="mb-3">
    <label for="mobile" class="form-label" >Private Key</label>
    <input type="text" class="form-control " id="mobile" name="mobile" aria-describedby="emailHelp" placeholder="Enter Private key Admin" required>
    <!-- <div id="emailHelp" class="form-text">We'll never share your user id and password with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label"  >Password</label>
    <input type="password" class="form-control" id="Password" name ="password" placeholder="Enter Your Password" required >
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
   <!-- <button type="buttob" class="btn btn-success" onClick="document.location.href='partials/_forgot.php'" >forgot</button> -->
   
</form>