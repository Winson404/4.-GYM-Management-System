<?php 
  include 'navbar.php'; 
  include 'login_guest.php'; 
  include 'login_admin.php';
?>


<!-- ======= GIVE BACKGROUND COLOR FOR NAVBAR: GI CUSTOMIZED NAKO NI ======= -->
  <div id="hero" style="height: 73px;"></div>
<!-- ======= GIVE BACKGROUND COLOR FOR NAVBAR: GI CUSTOMIZED NAKO NI ======= -->

  <main id="main">

      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Guest registration</h2>

              <?php if(isset($_SESSION['success'])) { ?> 
                  <p class="alert text-success" role="alert"><b><?php echo $_SESSION['success']; ?></b></p> 
              <?php unset($_SESSION['success']); } ?>


              <?php if(isset($_SESSION['invalid']) && isset($_SESSION['error'])) { ?>
                  <h6 class="alert text-danger" role="alert"><b><?php echo $_SESSION['invalid']; ?> <?php echo $_SESSION['error']; ?></b></h6>
              <?php unset($_SESSION['invalid']);  unset($_SESSION['error']);  } ?>


              <?php  if(isset($_SESSION['exists'])) { ?>
                  <h6 class="alert text-danger" role="alert"><b><?php echo $_SESSION['exists']; ?></b></h6>
              <?php unset($_SESSION['exists']); } ?>

        </div>

        <div class="row justify-content-center">

          <div class="col-lg-11 mt-5 mt-lg-0 d-flex align-items-stretch rounded p-4 bg-light" style="border:1px solid lightgrey;">
            <form action="register_code.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-md-4 mb-4">
                  <label for="firstname">First name</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>
                <div class="form-group col-md-3 mb-4">
                  <label for="middlename">Middle name</label>
                  <input type="text" class="form-control" id="middlename" name="middlename"required>
                </div>
                <div class="form-group col-md-3 mb-4">
                  <label for="lastname">Last name</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
                <div class="form-group col-md-2 mb-4">
                  <label for="suffix">Suffix</label>
                  <input type="text" class="form-control" id="suffix" name="suffix">
                </div>
                <div class="form-group col-md-3 mb-4">
                  <label for="gender">Gender</label>
                  <select class="form-control form-select" id="gender" name="gender" required>
                    <option value="" selected disabled>Select your gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="form-group col-md-3 mb-4">
                  <label for="dob">Date of Birth</label>
                  <input type="date" class="form-control" id="txtbirthdate" name="dob" required onchange="getAgeVal(0)" onblur="getAgeVal(0);">
                </div>
                <div class="form-group col-md-3 mb-4">
                  <label for="age">Age</label>
                  <input type="number" class="form-control" name="age" required id="txtage">
                  <span id="agestatus" class="text-muted"><b>Age must be at least 12yrs old and above.</b></span>
                </div>
                <div class="form-group col-md-3 mb-4">
                  <label for="contact">Contact number</label>
                  <input type="number" class="form-control" id="contact" name="contact" required>
                </div>
                <div class="form-group col-md-4 mb-4">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                 <div class="form-group col-md-4 mb-4">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group col-md-4 mb-4">
                  <label for="cpassword">Confirm password</label>
                  <input type="password" class="form-control" id="cpassword" name="cpassword"required>
                </div>
                <div class="form-group col-md-12 mb-4">
                  <label for="fileToUpload">Image</label>
                  <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required>
                </div>
                <div class="form-group col-md-12">
                  <label for="address">Address</label>
                  <textarea class="form-control" cols="30" rows="3" id="address" name="address" required></textarea>
                </div>
              </div>
              
            <!--   <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->

              <div class="text-center mt-3"><button type="submit" class="btn btn-primary" name="register_member">Register</button></div>
              <p>Already have an account? <a href="" data-bs-toggle="modal" data-bs-target="#memberlogin">Click here!</a></p>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


<?php include 'footer.php'; ?>



<script>
  function formatDate(date){
    var d = new Date(date),
    month = '' + (d.getMonth() + 1),
    day = '' + d.getDate(),
    year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
    }
// JUNIOR HIGH GETTING AGE VALUE----------------------------------------------------------------->
    function getAge(dateString){
        var birthdate = new Date().getTime();
        if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')){
        // variable is undefined or null value
        birthdate = new Date().getTime();
        }
        birthdate = new Date(dateString).getTime();
        var now = new Date().getTime();
        // now find the difference between now and the birthdate
        var n = (now - birthdate)/1000;
        if (n < 378683112) { // less than 12 years(378683112 seconds)
            var day_n = Math.floor(n/86400);
            if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')){
            // variable is undefined or null
            return '';
            } else {   
                 return '';  
                 //return day_n + ' day' + (day_n > 1 ? 's' : '') + ' old';   
            }
        } else {
            var year_n = Math.floor(n/31556926);
            if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')){
            return year_n = '';
            } else {
                return year_n + (year_n > 1 ? '' : '') ;
                //return year_n + ' year' + (year_n > 1 ? 's' : '') + ' old';
            }
        }
    }

    function getAgeVal(pid) {
        var birthdate = formatDate(document.getElementById("txtbirthdate").value);
        var count = document.getElementById("txtbirthdate").value.length;
        if (count=='10') {
                var age = getAge(birthdate);
                var str = age;
                var res = str.substring(0, 1);
                if (res =='-' || res =='0') {
                    document.getElementById("txtbirthdate").value = "";
                    document.getElementById("txtage").value = "";
                    $('#txtbirthdate').focus();
                    return false;
                } else {
                        document.getElementById("txtage").value = age;
                        // DISPLAYING AUTOMATICALLY THE ERROR MESSAGE IF AGE IS LESS THAN 12 YEARS OLD
                        if(document.getElementById("txtage").value == "") {
                            document.getElementById("agestatus").style.display = "block";
                            return false;
                        } else {
                            document.getElementById("agestatus").style.display = "none";
                            return true;
                        }
                }
        } else {
            document.getElementById("txtage").value = "";
            return false;
        }
    }
</script>