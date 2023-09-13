<?php 
    include 'sidebar.php'; 
    $id = $_SESSION['user_id'];

    $fetch = mysqli_query($conn, "SELECT * FROM users WHERE user_Id='$id'");
    $row = mysqli_fetch_array($fetch);

?>

<div id="layoutSidenav_content" class="bg-primary">
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Change password</h3></div>
                    <div class="card-body">
<!-----------------------------SUCCESS SESSION ALERT MESSAGES---------------------------------------------------------------->
  <?php if(isset($_SESSION['success'])) { ?> 
      <h6 class="alert alert-success text-success text-center" role="alert"><strong>Success!</strong> <?php echo $_SESSION['success']; ?></h6> 
  <?php unset($_SESSION['success']); } ?>
<!-----------------------------EXISTS  SESSION ALERT MESSAGES---------------------------------------------------------------->
  <?php if(isset($_SESSION['invalid']) && isset($_SESSION['error'])) { ?>
      <h6 class="alert alert-danger text-danger text-center" role="alert"><strong>Sorry,</strong> <?php echo $_SESSION['invalid']; ?>  <?php echo $_SESSION['error']; ?></h6>
  <?php unset($_SESSION['invalid']);  unset($_SESSION['error']);  } ?>

  <?php  if(isset($_SESSION['exists'])) { ?>
      <h6 class="alert alert-danger text-danger text-center" role="alert"><strong>Sorry,</strong> <?php echo $_SESSION['exists']; ?></h6>
  <?php unset($_SESSION['exists']); } ?>
                    <form action="process_update.php" method="POST">

                        <input type="hidden" class="form-control" name="user_Id" value="<?php echo $row['user_Id']; ?>">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputPassword" type="password" placeholder="Old password" name="OldPassword" required />
                            <label for="inputPassword">Old password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputPassword" type="password" placeholder="New password" name="NewPassword" required />
                            <label for="inputPassword">New password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputPassword" type="password" placeholder="Confirm new password" name="ConfirmPassword" required />
                            <label for="inputPassword">Confirm new password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button class="btn btn-primary" type="submit" name="change_password_mem"><i class="bi bi-save"></i> Save</button>
                        </div>
                        
                    </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="#" style="text-decoration: none;">Make your password more secured.</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>



<!-- DO NOT DELETE END DIV TAG -->
    </div>
<!-- DO NOT DELETE END DIV TAG -->