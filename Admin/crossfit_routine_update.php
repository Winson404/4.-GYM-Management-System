<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine1_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update crossfit 1 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine1_Id"]; ?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>11 KB SQUAT JUMP</b></label>
            <input type="text" class="form-control" value="<?php echo $row["11_kb_squat_jump"];?>" name="SQUATJUMP">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>11 KB SNATCH (R)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["11_kb_snatch_R"];?>" name="SNATCHR">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>11KB SWING</b></label>
            <input type="text" class="form-control" value="<?php echo $row["11_kb_swing"];?>" name="SWING">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>11 KB SNATCH (L)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["11_kb_snatch_L"];?>" name="SNATCHL">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>11 IN AND OUT SQUAT PULSES</b></label>
            <input type="text" class="form-control" value="<?php echo $row["11_in_out_squat_pulses"];?>" name="PULSES">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>11 TRAP BAR DEADLIFT</b></label>
            <input type="text" class="form-control" value="<?php echo $row["11_trap_bar_deadlift"];?>" name="DEADLIFT">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>11 BB SQUAT</b></label>
            <input type="text" class="form-control" value="<?php echo $row["11_bb_squat"];?>" name="SQUAT">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>BB GOOD MORNINGS</b></label>
            <input type="text" class="form-control" value="<?php echo $row["bb_good_mornings"];?>" name="MORNINGS">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>11 PUSH PRESS</b></label>
            <input type="text" class="form-control" value="<?php echo $row["11_push_press"];?>" name="PRESS">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>3 ROUNDS FARMERS WALK FORWARD & BACK</b></label>
            <input type="text" class="form-control" value="<?php echo $row["3_round_farmers_walk"];?>" name="FARMERS">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>100 JUMP ROPE</b></label>
            <input type="text" class="form-control" value="<?php echo $row["100_jump_rope"];?>" name="ROPE">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>30 SECONDS DEAD HANG</b></label>
            <input type="text" class="form-control" value="<?php echo $row["30_sec_dead_hang"];?>" name="SECONDS">
          </div>


        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="crossfit_routine1"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>