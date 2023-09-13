<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine2_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update tabata 1 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine2_Id"]; ?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SIDE PLANK (R)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["side_plank_R"];?>" name="PLANK">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SIDE PLANK (L)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["side_plank_L"];?>" name="SIDE">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>ELBOW PLANK</b></label>
            <input type="text" class="form-control" value="<?php echo $row["elbow_plank"];?>" name="ELBOW">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>KNEE PLANK</b></label>
            <input type="text" class="form-control" value="<?php echo $row["knee_plank"];?>" name="KNEE">
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="tabata_routine2"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>