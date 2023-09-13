<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine3_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update tabata 3 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine3_Id"]; ?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>STAR JUMP (CARDIO)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["start_jump_cardio"];?>" name="CARDIO">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>TRICEP EXTENSIONS (TRICEPS) = KB</b></label>
            <input type="text" class="form-control" value="<?php echo $row["tricep_ext"];?>" name="TRICEP">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>JACK TO NARROW PRESS (CARDIO)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["jack_to_narrow"];?>" name="JACK">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>TWISTED MOUNT CLIMBERS (CARDIO, LOWER)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["twisted_mount"];?>" name="TWISTED">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>JUMPING LUNGES (CARDIO, LOSE)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["jumping_lunges"];?>" name="JUMPING">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SIDE TO SIDE JUMP SCOUT (LOWER)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["side_to_side_jump"];?>" name="SIDE">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SUPINE MARCHING (CORE)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["supine_marching"];?>" name="MARCHING">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>WALL SIT (LOWER, CORE) KB, DB</b></label>
            <input type="text" class="form-control" value="<?php echo $row["wall_sit"];?>" name="WALL">
          </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="tabata_routine3"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>