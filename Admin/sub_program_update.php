<!-- Modal -->
<div class="modal fade" id="update_sub_prog<?php echo $row['sub_program_Id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Add new sub program</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">

          <input type="hidden" value="<?php echo $row['sub_program_Id']; ?>" name="sub_program_Id">

          <div class="form-group mb-3">
            <?php                           
                $program  = mysqli_query($conn, "SELECT * FROM program");
                $ids = $row['sub_program_Id'];
                $all_program = mysqli_query($conn, "SELECT * FROM sub_program where sub_program_Id = '$ids' ");
                $row = mysqli_fetch_array($all_program);
            ?>
                <label><b>Program name</b></label>
                 <select class="form-control form-select" name="program_Id" required="">
                  <?php foreach($program as $rows):?>
                        <option value="<?php echo $rows['program_Id']; ?>"  
                            <?php if($row['prog_Id'] == $rows['program_Id']) echo 'selected="selected"'; ?> 
                             > <!--/////   CLOSING OPTION TAG  -->
                            <?php echo $rows['program_name']; ?>                                           
                        </option>

                 <?php endforeach;?>
               </select>
          </div>


          <div class="form-group mb-3">
            <label for=""><b>Sub program name</b></label>
            <input type="text" class="form-control" name="sub_program_name"  value="<?php echo $row['sub_program_name']; ?>" required>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="update_sub_program"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>