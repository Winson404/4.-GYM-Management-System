<!-- Modal -->
<div class="modal fade" id="pass_mem<?php echo $row['user_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="process_update.php" method="POST">
           <input type="hidden" class="form-control" name="user_Id" value="<?php echo $row['user_Id']; ?>">

            <div class="form-group mb-4">
              <label for=""><b>Old password</b></label>
              <input type="password" class="form-control" name="OldPassword" required>
            </div>

            <div class="form-group mb-4">
              <label for=""><b>New password</b></label>
              <input type="password" class="form-control" name="NewPassword" required>
            </div>

            <div class="form-group mb-4">
              <label for=""><b>Confirm password</b></label>
              <input type="password" class="form-control" name="ConfirmPassword" required>
            </div>
          
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="change_password_mem"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>