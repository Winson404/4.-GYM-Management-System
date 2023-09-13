<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row['program_Id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update program</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <input type="hidden" value="<?php echo $row['program_Id']; ?>" name="prog_Id">
        <div class="row">
           <div class="form-group">
            <label for=""><b>Program name</b></label>
            <input type="text" class="form-control" name="program" required value="<?php echo $row['program_name']; ?>">
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="update_program"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>