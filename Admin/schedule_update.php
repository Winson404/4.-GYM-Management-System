<!-- Modal -->
<div class="modal fade" id="update_prog<?php echo $row['sched_Id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="staticBackdropLabel">Update schedule</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="process_update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <input type="hidden" value="<?php echo $row['sched_Id']; ?>" name="sched_Id">

        
        <div class="form-group mb-3">
            <label for=""><b>Program</b></label>
            <select class="form-control form-select" name="prog_Id" required>
              <option selected disabled>Select program</option>
            <?php
                $pro = mysqli_query($conn, "SELECT * FROM program");
                while ($program = mysqli_fetch_array($pro)) {
             ?>    
             <option value="<?php echo $program['program_Id']; ?>"><?php echo $program['program_name']; ?></option>
             <?php } ?> 
            </select>
          </div>


          <div class="form-group mt-3">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Monday" name="day[]">
            <label class="form-check-label" for="inlineCheckbox1">Monday</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Tuesday" name="day[]">
            <label class="form-check-label" for="inlineCheckbox2">Tuesday</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Wednesday" name="day[]">
            <label class="form-check-label" for="inlineCheckbox3">Wednesday</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Thursday" name="day[]">
            <label class="form-check-label" for="inlineCheckbox3">Thursday</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Friday" name="day[]">
            <label class="form-check-label" for="inlineCheckbox3">Friday</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Saturday" name="day[]">
            <label class="form-check-label" for="inlineCheckbox3">Saturday</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Sunday" name="day[]">
            <label class="form-check-label" for="inlineCheckbox3">Sunday</label>
          </div>
          </div>

          <div class="form-group">
            <label for=""><b>Time from:</b></label>
            <input type="time" name="timefrom" class="form-control" >
          </div>

          <div class="form-group">
            <label for=""><b>Time to:</b></label>
            <input type="time" name="timeto" class="form-control" >
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button class="btn btn-primary" type="submit" name="schedule"><i class="bi bi-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>