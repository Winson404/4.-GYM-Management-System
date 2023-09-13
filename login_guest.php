<div class="modal fade" id="userlogin" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog"  style="width: 20rem;">
    <div class="modal-content">
      
      <div class="modal-body p-4">
         <div class="d-flex justify-content-center">
          <!-------------------------------SESSIONS--------------------------------------->
              <?php if(isset($_SESSION['error'])) { ?> 
                  <p class="alerts text-white bg-danger p-1 rounded" id="error" ><?php echo $_SESSION['error']; ?></p>  
              <?php unset($_SESSION['error']);  }  ?>
          <!-------------------------------END SESSIONS----------------------------------->
         </div>
          <div class="d-flex justify-content-center login  mt-2">
            <img src="images/user.png" alt="" class="mb-2" width="60">
          </div>
          <div class="d-flex justify-content-center mb-2">
            <h6><b>GUEST LOGIN</b></h6>
          </div>
        <form action="login_code.php" method="POST">
            <div class="form-group mb-3 ">
              <input type="email" class="form-control text-center" name="email" placeholder="Email@mail.com">
            </div>

            <div class="form-group mb-3">
              <input type="password" class="form-control text-center mb-1" name="password" id="password" placeholder="Password">
              <input type="checkbox" onclick="myFunction()"> Show Password
            </div>
          
            <div class="d-flex form-group">
              <button type="submit" class="btn btn-primary" style="width: 20rem;" name="member_login"><i class="bi bi-door-open"></i> Login</button>
            </div>
        </form>
        <p class="mb-4 mt-3" id="link">Don't have an account? <a href="register_guest.php">Click here!</a></p>
      </div>
        
    </div>
  </div>
</div>


<script>
  function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>