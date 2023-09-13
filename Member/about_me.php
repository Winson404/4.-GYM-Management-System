<?php 
    include 'sidebar.php'; 
    $id = $_SESSION['user_id'];

    $fetch = mysqli_query($conn, "SELECT * FROM users WHERE user_Id='$id'");
    $row = mysqli_fetch_array($fetch);

?>

<div id="layoutSidenav_content" class="bg-light">
<main>
    <div class="container mb-3">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-lg mt-3">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Personal information</h3></div>
                    <div class="card-body">


                        <div class="row mb-3">
                            <div class="col-md-12 d-flex justify-content-center">
                                <style> img:hover { opacity: .8; } .camera {background-color: lightgrey; border-radius: 20%;} </style>
                                <img src="../images-member/<?php echo $row['image']; ?>" alt="" style="height: 95px; width: 95px; border-radius: 50%;">
                            </div>
                        </div>


                            <div class="row mb-3">
                                <div class="col-md-3 mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="<?php echo $row['firstname']; ?>" readonly/>
                                        <label for="inputFirstName">First name</label>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputMiddleName" type="text" placeholder="Enter your middle name" value="<?php echo $row['middlename']; ?>" readonly/>
                                        <label for="inputMiddleName">Middle name</label>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="<?php echo $row['lastname']; ?>" readonly/>
                                        <label for="inputLastName">Last name</label>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputsuffix" type="text" placeholder="Enter your suffix" value="<?php echo $row['lastname']; ?>" readonly/>
                                        <label for="inputsuffix">Suffix</label>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="gender" type="text" placeholder="Enter your suffix" value="<?php echo $row['gender']; ?>"  readonly/>
                                        <label for="gender">Gender</label>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="dob" type="text" placeholder="Enter your suffix" value="<?php echo $row['dob']; ?>" readonly/>
                                        <label for="dob">Date of Birth</label>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="age" type="text" placeholder="Enter your suffix" value="<?php echo $row['age']; ?>" readonly/>
                                        <label for="age">Age</label>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="contact" type="text" placeholder="Enter your suffix" value="<?php echo $row['contact']; ?>" readonly/>
                                        <label for="contact">Contact</label>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="email" type="text" placeholder="Enter your suffix" value="<?php echo $row['email']; ?>" readonly/>
                                        <label for="email">Email address</label>
                                    </div>
                                </div>

                                <div class="col-md-9 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="Address" type="text" placeholder="Enter your suffix" value="<?php echo $row['address']; ?>" readonly/>
                                        <label for="Address">Address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><a class="btn btn-primary btn-block" href="about_me_update.php">Update</a></div>
                            </div>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="#" style="text-decoration: none;">You are currently viewing your information.</a></div>
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
