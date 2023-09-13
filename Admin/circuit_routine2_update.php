<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row["routine2_Id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update circuit 2 performer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" class="form-control" value="<?php echo $row["routine2_Id"];?>" name="Id">

          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>1 Min. Elbow plank</b></label>
            <input type="text" class="form-control" value="<?php echo $row["1_min_elbow_plank"];?>" name="1min">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>Plank Jack</b></label>
            <input type="text" class="form-control" value="<?php echo $row["plank_jack"];?>" name="plankajack">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>Bicycles</b></label>
            <input type="text" class="form-control" value="<?php echo $row["bicycles"];?>" name="bicycles">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>L-crunches</b></label>
            <input type="text" class="form-control" value="<?php echo $row["L_crunches"];?>" name="crunches">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>Flutter kicks</b></label>
            <input type="text" class="form-control" value="<?php echo $row["flutter_kicks"];?>" name="flutter">
          </div>
          <div class="col-lg-4 form-group mb-3">
            <label for=""><b>1 Min. hollow plank</b></label>
            <input type="text" class="form-control" value="<?php echo $row["1_min_hollow_plank"];?>" name="hooloplank">
          </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="routine2"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>