<!-- Modal -->
<div class="modal fade" id="addnewprogram" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Add new crossfit 2 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_save.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">


          <div class="form-group mb-3">
            <label for=""><b>Routine</b></label>
            <select class="form-control form-select" name="sub_Id" required>
              <option selected disabled>Select routine</option>
            <?php
                $pro = mysqli_query($conn, "SELECT * FROM sub_program WHERE sub_program_name='Core (2 Rounds)'");
                while ($program = mysqli_fetch_array($pro)) {
             ?>    
             <option value="<?php echo $program['sub_program_Id']; ?>"><?php echo $program['sub_program_name']; ?></option>
             <?php } ?> 
            </select>
          </div>


          <div class="form-group mb-3">
            <label for=""><b>Guest name</b></label>
            <select class="form-control form-select" name="guest_Id" required>
              <option selected disabled>Select guest</option>
            <?php
                $select = mysqli_query($conn, "SELECT * FROM users");
                while ($users = mysqli_fetch_array($select)) {
             ?>    
             <option value="<?php echo $users['user_Id']; ?>"><?php echo $users['firstname']; echo ' '; echo $users['middlename']; echo ' '; echo $users['lastname']; echo ' '; echo $users['suffix']; echo ' ';?></option>
             <?php } ?> 
            </select>
          </div>


        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="crossfit_routine2"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>