<form aciton="/loginSystem/signup.php" method="post" style="background-color:white;" class="mt-5 p-5"  style="border-radius: 1000rem;">
   <div class="heading">
      <h1 class="text-center mt-2">SignUp To Our Website</h1>
    </div> 
    <div class="mb-3">
    <label for="Name" class="form-label"> Name  </label>
    <input type="text" class="form-control " id="Name" name="Name"  required>
     
  </div>
<div class="mb-3">
    <label for="mobile" class="form-label"> Mobile No.  </label>
    <input type="tel" class="form-control " id="username" name="mobile" aria-describedby="emailHelp" placeholder="Enter  Correct Mobile No" required>
    <div id="emailHelp" class="form-text">We'll never share your Mobile No. and password with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name ="password" placeholder="Enter Strong Password" required >
  </div>
  <div class="mb-3">
    <label for="Confirm_Password" class="form-label"> Confirm Password</label>
    <input type="password" class="form-control" id="Confirm_Password" name="Confirm_Password"  aria-describedby="cHelp" placeholder="Retype Password" required>
    <div id="cHelp" class="form-text">Enter same password as above....</div>
    
  </div>
  <div class="mb-3">
    <label for="dob" class="form-label">Date Of Birth</label>
    <input type="date" class="form-control" id="Confirm_Password" name="dob" required>
    
    
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>