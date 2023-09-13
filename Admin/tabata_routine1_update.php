<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine1_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update tabata 1 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine1_Id"]; ?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>GOBLET SQUAT</b></label>
            <input type="text" class="form-control" value="<?php echo $row["goblet_squat"];?>" name="GOBLET">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>CRAB KICKS</b></label>
            <input type="text" class="form-control" value="<?php echo $row["crab_kicks"];?>" name="CRAB">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>PUSH UP ROTATE</b></label>
            <input type="text" class="form-control" value="<?php echo $row["push_up_rotate"];?>" name="PUSH">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>ALT BENT OVER ROW (DB)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["alt_bent_over_row_db"];?>" name="BENT">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SQUAT 2X</b></label>
            <input type="text" class="form-control" value="<?php echo $row["squat_2x"];?>" name="SQUAT">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>UPRIGHT ROW TO HAMMER CURL (DB)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["upright_row_to_hammer_curl_db"];?>" name="UPRIGHT">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>QUICK FEET</b></label>
            <input type="text" class="form-control" value="<?php echo $row["quick_feet"];?>" name="QUICK">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>STATIC HOLD</b></label>
            <input type="text" class="form-control" value="<?php echo $row["static_hold"];?>" name="STATIC">
          </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="tabata_routine1"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>