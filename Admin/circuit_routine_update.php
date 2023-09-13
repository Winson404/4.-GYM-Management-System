<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine1_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update circuit 1 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine1_Id"];?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>Burpees</b></label>
            <select name="burpees" id="" class="form-control form-select">
              <option value="Done">Done</option>
              <option value="Not yet">Not yet</option>
            </select>
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>DB Arnold Press</b></label>
            <input type="text" class="form-control" value="<?php echo $row["DB_Arnold_press"];?>" name="dbarnold">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>Wall ball</b></label>
            <input type="text" class="form-control" value="<?php echo $row["Wall_ball"];?>" name="wallball">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>KB Overhead triceps extension</b></label>
            <input type="text" class="form-control" value="<?php echo $row["KB_overhead_triceps_ext"];?>" name="kboverhead">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>EZ bar rent over rows</b></label>
            <input type="text" class="form-control" value="<?php echo $row["Ez_bar_bent_over_rows"];?>" name="ezbar">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>DB Biceps to hammer curls</b></label>
            <input type="text" class="form-control" value="<?php echo $row["DB_bicep_to_hammer_curls"];?>" name="dbbiceps">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>KB Snatch (R)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["KB_snatch_R"];?>" name="kbsnatch_r">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>Reverse lunges</b></label>
            <input type="text" class="form-control" value="<?php echo $row["Reverse_lunges"];?>" name="reverse">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>KB Snatch (L)</b></label>
            <input type="text" class="form-control" value="<?php echo $row["KB_snatch_L"];?>" name="kbsnatch_l">
          </div>


        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="routine1"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>