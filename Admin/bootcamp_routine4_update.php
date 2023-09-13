<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine4_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update fitness bootcamp 4 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine4_Id"];?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>CORE SLIDER BACK AND FORTH</b></label>
            <input type="text" class="form-control" value="<?php echo $row["core_slider"];?>" name="FORTH">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>WEIGHTED LATERAL WALK</b></label>
            <input type="text" class="form-control" value="<?php echo $row["weighted_lateral"];?>" name="LATERAL">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>QUICK FEET AROUND CONES</b></label>
            <input type="text" class="form-control" value="<?php echo $row["quick_feet"];?>" name="CONES">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SLAM BALL TO BURPEES S TO S</b></label>
            <input type="text" class="form-control" value="<?php echo $row["slam_ball"];?>" name="BURPEES">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>WEIGHTED BUNNY HOP TO BOX JUMP</b></label>
            <input type="text" class="form-control" value="<?php echo $row["weighted_bunny"];?>" name="BUNNY">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>ICKY SHUFFLE</b></label>
            <input type="text" class="form-control" value="<?php echo $row["icky_shuffle"];?>" name="SHUFFLE">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>LATERAL HIGH KICKS</b></label>
            <input type="text" class="form-control" value="<?php echo $row["lateral_high"];?>" name="HIGH">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SHUTTLE RUN</b></label>
            <input type="text" class="form-control" value="<?php echo $row["shuttle_run"];?>" name="RUN">
          </div>
         
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="bootcamp4"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>