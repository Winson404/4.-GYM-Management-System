<!-- Modal -->
<div class="modal fade" id="addnewprogram" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Add new program</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_save.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">
           <div class="form-group">
            <label for=""><b>Program name</b></label>
            <input type="text" class="form-control" name="program" required>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="add_program"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>