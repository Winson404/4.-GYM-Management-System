<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine5_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update fitness bootcamp 5 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine5_Id"];?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SIT UP WITH PLATES</b></label>
            <input type="text" class="form-control" value="<?php echo $row["sit_up"];?>" name="PLATES">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>RUSSIAN TWIST WITH PTES</b></label>
            <input type="text" class="form-control" value="<?php echo $row["russian_twist"];?>" name="RUSSIAN">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>KNEE TO CHEST</b></label>
            <input type="text" class="form-control" value="<?php echo $row["knee_to_chest"];?>" name="KNEE">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SID CRUNCHES L/R</b></label>
            <input type="text" class="form-control" value="<?php echo $row["sid_crunches"];?>" name="CRUNCHES">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>FLUTTER BACK</b></label>
            <input type="text" class="form-control" value="<?php echo $row["flutter_back"];?>" name="BACK">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SCISSORS</b></label>
            <input type="text" class="form-control" value="<?php echo $row["scissors"];?>" name="SCISSORS">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>LEG RAISE HALF TO FULL</b></label>
            <input type="text" class="form-control" value="<?php echo $row["leg_raise"];?>" name="RAISE">
          </div>
         
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="bootcamp5"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>