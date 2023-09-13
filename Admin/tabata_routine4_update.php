<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine4_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update tabata 4 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine4_Id"]; ?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>CRUNCHES WITH DB ROTATION CLOCKWISE</b></label>
            <input type="text" class="form-control" value="<?php echo $row["crunches_with_db_clockwise"];?>" name="CRUNCHES">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>BICYCLE WITH DB ROTATION</b></label>
            <input type="text" class="form-control" value="<?php echo $row["bicycle_with_db"];?>" name="BICYCLE">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>CRUNCHES WITH DB ROTATION COUNTER CLOCKWISE</b></label>
            <input type="text" class="form-control" value="<?php echo $row["crunches_with_db_counter"];?>" name="ROTATION">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>ELBOW PLANK HOLD</b></label>
            <input type="text" class="form-control" value="<?php echo $row["elbow_prank_hold"];?>" name="PLANK">
          </div>
          <div class="col-lg-4 form-group mb-3">

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="tabata_routine4"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>