<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine2_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update crossfit 2 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine2_Id"]; ?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>10 SIT UPS</b></label>
            <input type="text" class="form-control" value="<?php echo $row["10_sit_ups"];?>" name="UPS">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>10 FLUTTER KICKS</b></label>
            <input type="text" class="form-control" value="<?php echo $row["10_flutter_kicks"];?>" name="FLUTTER">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>10 SCISSOR KICK</b></label>
            <input type="text" class="form-control" value="<?php echo $row["10_scissors"];?>" name="SCISSOR">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>10 LEG RAISES</b></label>
            <input type="text" class="form-control" value="<?php echo $row["10_leg"];?>" name="RAISES">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>10 KNEE CRUNCHES</b></label>
            <input type="text" class="form-control" value="<?php echo $row["10_knee_crunches"];?>" name="CRUNCHES">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>10 KNEE TO CHEST</b></label>
            <input type="text" class="form-control" value="<?php echo $row["10_knee_to_chest"];?>" name="CHEST">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>10 PLANK ALT SINGLE ARM/LEG</b></label>
            <input type="text" class="form-control" value="<?php echo $row["10_plank_alt_single"];?>" name="SINGLE">
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