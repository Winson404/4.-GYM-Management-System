 <?php 
    include 'sidebar.php';
    ?>

         <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <!-- DISPLAY program -->
                        <?php 
                            $program = mysqli_query($conn, "SELECT program_Id FROM program");
                            $row_program = mysqli_num_rows($program);
                        ?>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-dark text-warning mb-4">
                                <div class="card-body"><i class="bi bi-check-circle-fill"></i> Programs
                                    <h1 class="text-center"> <?php echo $row_program; ?></h1>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-warning stretched-link" href="program.php">View All</a>
                                    <div class="small text-warning"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>


                        <!-- DISPLAY sub_program -->
                        <?php 
                            $sub_program = mysqli_query($conn, "SELECT sub_program_Id FROM sub_program");
                            $row_sub_program = mysqli_num_rows($sub_program);
                        ?>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-dark text-warning mb-4">
                                <div class="card-body"><i class="bi bi-check-circle"></i> Sub programs
                                <h1 class="text-center"><?php echo $row_sub_program; ?></h1>
                                </div>

                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-warning stretched-link" href="sub_program.php">View All</a>
                                    <div class="small text-warning"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>



                        <!-- DISPLAY MEMBER -->
                        <?php 
                          $user = mysqli_query($conn, "SELECT user_Id FROM users");
                          $row_user = mysqli_num_rows($user);
                        ?>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-dark text-warning mb-4">
                                <div class="card-body"><i class="bi bi-check-circle-fill"></i> Members
                                    <h1 class="text-center"><?php echo $row_user; ?></h1>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-warning stretched-link" href="users.php">View All</a>
                                    <div class="small text-warning"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>



                         <!-- DISPLAY EMPLOYEE AND STAFF -->
                        <?php 
                          $staff = mysqli_query($conn, "SELECT emp_Id FROM employees");
                          $row_staff = mysqli_num_rows($staff);
                        ?>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-dark text-warning mb-4">
                                <div class="card-body"><i class="bi bi-check-circle-fill"></i> Employees and staff
                                    <h1 class="text-center"><?php echo $row_staff; ?></h1>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-warning stretched-link" href="staff.php">View All</a>
                                    <div class="small text-warning"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; GYM 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>



<!-- DO NOT DELETE END DIV TAG -->
    </div>
<!-- DO NOT DELETE END DIV TAG -->