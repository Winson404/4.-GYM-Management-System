<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine2_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update fitness bootcamp 2 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine2_Id"];?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>FORWARD JUMP TO IN IN OUT OUT TO BOX JUMP</b></label>
            <input type="text" class="form-control" value="<?php echo $row["forward_jump"];?>" name="FORWARD">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>BOX SHUFFLE 10x</b></label>
            <input type="text" class="form-control" value="<?php echo $row["box_shuffle"];?>" name="SHUFFLE">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>SKIERS TO BOX JUMP</b></label>
            <input type="text" class="form-control" value="<?php echo $row["skiers_to_jump"];?>" name="SKIERS">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>CORE TO CORE 9x</b></label>
            <input type="text" class="form-control" value="<?php echo $row["core_to_core"];?>" name="CORE">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>TRAPBAR DL 5x TO FORWARD JUMP</b></label>
            <input type="text" class="form-control" value="<?php echo $row["trapbar"];?>" name="TRAPBAR">
          </div>
         
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="bootcamp2"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>