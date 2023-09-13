<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine3_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update fitness bootcamp 3 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine3_Id"];?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>HIGH PLANK</b></label>
            <input type="text" class="form-control" value="<?php echo $row["high_plank"];?>" name="HIGH">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SIDE PLANK RIGHT</b></label>
            <input type="text" class="form-control" value="<?php echo $row["side_plank_R"];?>" name="RIGHT">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SIDE PLANK LEFT</b></label>
            <input type="text" class="form-control" value="<?php echo $row["side_plank_L"];?>" name="LEFT">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>ELBOW PLANK</b></label>
            <input type="text" class="form-control" value="<?php echo $row["elbow_plank"];?>" name="ELBOW">
          </div>
         
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="bootcamp3"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>