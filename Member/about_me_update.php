<?php 
    include 'sidebar.php'; 
    $id = $_SESSION['user_id'];

    $fetch = mysqli_query($conn, "SELECT * FROM users WHERE user_Id='$id'");
    $row = mysqli_fetch_array($fetch);

    include 'about_me_photo.php';
?>

<div id="layoutSidenav_content" class="bg-primary">
<main>
    <div class="container mb-3">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-lg mt-3">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Personal information</h3></div>
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

            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-center">
                    <style> img:hover { opacity: .8; } .camera {background-color: lightgrey; border-radius: 20%;} </style>
                    <img src="../images-member/<?php echo $row['image']; ?>" alt="" style="height: 95px; width: 95px; border-radius: 50%;">

                    <button style="background-color: transparent; margin-top: 70px;" type="button" class="btn camera" data-bs-toggle="modal" type="button" data-bs-target="#emp_photo<?php echo $row['user_Id']; ?>" ><i class="bi bi-camera-fill"></i></button>
                </div>

            </div>
            <form action="process_update.php" method="POST">
                <input type="hidden" class="form-control" name="user_Id" value="<?php echo $row['user_Id']; ?>">
                <div class="row mb-3">
                    <div class="col-md-3 mb-3">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputFirstName" type="text" name="firstname" placeholder="Enter your first name" value="<?php echo $row['firstname']; ?>" required/>
                            <label for="inputFirstName">First name</label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="inputMiddleName" type="text" name="middlename" placeholder="Enter your middle name" value="<?php echo $row['middlename']; ?>" required/>
                            <label for="inputMiddleName">Middle name</label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="inputLastName" type="text" name="lastname" placeholder="Enter your last name" value="<?php echo $row['lastname']; ?>" required/>
                            <label for="inputLastName">Last name</label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="inputsuffix" type="text" name="suffix" placeholder="Enter your suffix" value="<?php echo $row['lastname']; ?>" required/>
                            <label for="inputsuffix">Suffix</label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="form-floating">
                            <?php                           
                                $gender  = mysqli_query($conn, "SELECT DISTINCT gender FROM users");
                                $ids = $row['user_Id'];
                                $all_gender = mysqli_query($conn, "SELECT * FROM users  where user_Id = '$ids' ");
                                $row = mysqli_fetch_array($all_gender);
                            ?>
                                 <select class="form-control form-select" name="gender" required="">
                                  <?php foreach($gender as $rows):?>
                                        <option value="<?php echo $rows['gender']; ?>"  
                                            <?php if($row['gender'] == $rows['gender']) echo 'selected="selected"'; ?> 
                                             > <!--/////   CLOSING OPTION TAG  -->
                                            <?php echo $rows['gender']; ?>                                           
                                        </option>

                                 <?php endforeach;?>
                               </select> 
                            <label for="gender">Gender</label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="dob" type="date" name="dob" placeholder="Enter your suffix" value="<?php echo $row['dob']; ?>" required/>
                            <label for="dob">Date of Birth</label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="age" type="number" name="age" placeholder="Enter your suffix" value="<?php echo $row['age']; ?>" required/>
                            <label for="age">Age</label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="contact" type="number" name="contact" placeholder="Enter your suffix" value="<?php echo $row['contact']; ?>" required/>
                            <label for="contact">Contact</label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="email" type="email"  name="email" placeholder="Enter your suffix" value="<?php echo $row['email']; ?>" required/>
                            <label for="email">Email address</label>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-floating">
                            <input class="form-control" id="Address" type="text" name="address" placeholder="Enter your suffix" value="<?php echo $row['address']; ?>" required/>
                            <label for="Address">Address</label>
                        </div>
                    </div>
                </div>
                <div class="mb-0">
                    <div class="d-grid"><button class="btn btn-primary" type="submit" name="update_member"><i class="bi bi-save"></i> Save</button></div>
                </div>
            </form>





                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="about_me.php" style="text-decoration: none;"><i class="bi bi-arrow-left-short"></i> Back</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>
</div>



<!-- DO NOT DELETE END DIV TAG -->
    </div>
<!-- DO NOT DELETE END DIV TAG -->