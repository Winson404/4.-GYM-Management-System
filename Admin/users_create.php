<!-- Modal -->
<div class="modal fade" id="addnewstaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Add new member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_save.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">


        <div class="row">
            
           <div class="col-md-4 mb-3">
            <label for=""><b>First name</b></label>
            <input type="text" class="form-control" name="firstname" required>
          </div>

          <div class="col-md-4 mb-3">
            <label for=""><b>Middle name</b></label>
            <input type="text" class="form-control" name="middlename" required>
          </div>

          <div class="col-md-4 mb-3">
            <label for=""><b>Last name</b></label>
            <input type="text" class="form-control" name="lastname" required>
          </div>

          <div class="col-md-2 mb-3">
            <label for=""><b>Suffix</b></label>
            <input type="text" class="form-control" name="suffix">
          </div>

          <div class="col-md-3  mb-3">
            <label for=""><b>Gender</b></label>
            <select class="form-control form-select" name="gender" id="" required>
              <option value="" selected disabled>Select gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>

          <div class="col-md-3 mb-3">
            <label for=""><b>Date of Birth</b></label>
            <input type="date" class="form-control" id="txtbirthdate" name="dob" required onchange="getAgeVal(0)" onblur="getAgeVal(0);">
          </div>

          <div class="col-md-4  mb-3">
            <label for=""><b>Age</b></label>
            <input type="number" class="form-control" name="age" required id="txtage">
            <span id="agestatus" class="text-muted"><b>Age must be at least 12yrs old and above.</b></span>
          </div>

          <div class="col-md-6 mb-3">
            <label for=""><b>Contact</b></label>
            <input type="number" class="form-control" name="contact" required>
          </div>

          <div class="col-md-6 mb-3">
            <label for=""><b>Email address</b></label>
            <input type="email" class="form-control" name="email" required>
          </div>

          <div class="col-md-6 mb-3">
            <label for=""><b>Password</b></label>
            <input type="password" class="form-control" name="password" required>
          </div>

          <div class="col-md-6 mb-3">
            <label for=""><b>Confirm password</b></label>
            <input type="password" class="form-control" name="cpassword" required>
          </div>

          <div class="col-md-12 mb-3">
            <label for=""><b>Image</b></label>
            <input type="file" class="form-control" name="fileToUpload" required>
          </div>

          <div class="col-md-12">
            <label for=""><b>Address</b></label>
            <input type="text" class="form-control" name="address" required>
          </div>

        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="register_member"><i class="bi bi-save"></i> Register</button>
      </div>
      </form>
    </div>
  </div>
</div>