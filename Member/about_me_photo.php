<!-- Modal -->
<div class="modal fade" id="emp_photo<?php echo $row['user_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update profile photo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="process_update.php" method="POST" enctype="multipart/form-data">
          
          <input type="hidden" class="form-control" name="user_Id" value="<?php echo $row['user_Id']; ?>">

           <div class="d-flex justify-content-center">
             <style> img:hover { opacity: .8; } .camera {background-color: lightgrey; border-radius: 20%;} </style>
             <img src="../images-member/<?php echo $row['image']; ?>" alt="" style="height: 95px; width: 95px; border-radius: 50%;">
           </div>

           <div class="col-md-12 mb-3">
                <label for=""><b>Image</b></label>
                <input type="file" class="form-control" name="fileToUpload">
              </div>
          </div>
          
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button type="submit" class="btn btn-primary" name="update_mem_photo"><i class="bi bi-save"></i>  Save</button>
      </div>
      </form>
    </div>
  </div>
</div>