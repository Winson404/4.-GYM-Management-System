<!-- Modal -->
<div class="modal fade" id="del_emp<?php echo $row['emp_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="process_delete.php" method="POST">
          <input type="hidden" class="form-control" name="emp_Id" value="<?php echo $row['emp_Id']; ?>">
          <h6>Are you sure you want to delete this employee?</h6>
          
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        <button type="submit" class="btn btn-danger" name="delete_emp"><i class="bi bi-trash3-fill"></i>  Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>