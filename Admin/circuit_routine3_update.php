<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine3_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update circuit 2 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine3_Id"];?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>TRX Superman to push</b></label>
            <input type="text" class="form-control" value="<?php echo $row["trx_superman_to_push"];?>" name="trx">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>KB Halo w/ Front press</b></label>
            <input type="text" class="form-control" value="<?php echo $row["kb_halo_with_front_press"];?>" name="kbhalo">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>Half kneeling side arm press(R)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["half_kneeling_side_arm_press_R"];?>" name="halfkneeling">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>KB Snatch</b></label>
            <input type="text" class="form-control" value="<?php echo $row["kb_snatch"];?>" name="snatch">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>Half kneeling side arm press(L)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["half_kneeling_side_arm_press_L"];?>" name="kneelingside">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>Suicides</b></label>
            <input type="text" class="form-control" value="<?php echo $row["suicides"];?>" name="suicides">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>Deadlift to front raise</b></label>
            <input type="text" class="form-control" value="<?php echo $row["deadlift_to_front_raise"];?>" name="Deadlift">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>Inclined box push ups</b></label>
            <input type="text" class="form-control" value="<?php echo $row["inclinde_box_push_ups"];?>" name="Inclined">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>Medicine ball half burfee</b></label>
            <input type="text" class="form-control" value="<?php echo $row["medicine_ball_half_burpee_to_frog_jump"];?>" name="Medicine">
          </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="routine3"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>