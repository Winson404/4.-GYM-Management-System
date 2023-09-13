<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine1_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update fitness bootcamp 1 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine1_Id"];?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>BURPEES TO FORWARD JUMP</b></label>
            <input type="text" class="form-control" value="<?php echo $row["burpees_to_forward_jump"];?>" name="BURPEES">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>FORWARD BACKWARD HOPS TO FORWARD JUMP</b></label>
            <input type="text" class="form-control" value="<?php echo $row["forward_backward"];?>" name="FORWARD">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>180 DEGREES ROTATION TO FORWARD JUMP</b></label>
            <input type="text" class="form-control" value="<?php echo $row["180_degrees"];?>" name="DEGREES">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>HIGH KNEES TO STEP UPS</b></label>
            <input type="text" class="form-control" value="<?php echo $row["high_knees"];?>" name="HIGH">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SQUAT JUMP TO SLAM BALL 5x</b></label>
            <input type="text" class="form-control" value="<?php echo $row["squat_jump"];?>" name="SQUAT">
          </div>
         
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="bootcamp1"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>