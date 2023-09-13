<?php
session_start();
include '../config.php';
  if(isset($_SESSION['admin_id'])) {
    $id = $_SESSION['admin_id'];

    $admin = mysqli_query($conn, "SELECT * FROM employees WHERE emp_Id='$id'");
    while($row = mysqli_fetch_array($admin)) {
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GYM System </title>
        <!---FAVICON ICON FOR WEBSITE--->
    		<link rel="shortcut icon" type="image/png" href="../images/logo2.png">

        <!-- BOOTSTRAP ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <!-- BOOTSTRAP LAYOUT LINK : BOOTSTRAP.MIN.CSS -->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

	    </head>

	    <body class="sb-nav-fixed">
	        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
	            <!-- Navbar Brand-->
	            <a class="navbar-brand ps-3 text-warning" href="index.html">Phenom Athletics</a>
	            <!-- Sidebar Toggle-->
	            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>


	            <!-- Navbar Search-->
	            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
	                <div class="input-group">
	                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
	                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
	                </div>
	            </form> -->



	            <!-- Navbar-->
	            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
	                <li class="nav-item dropdown">
	                  <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	                    	<img src="../images-employees/<?php echo $row['image']; ?>" alt="" style="height: 25px; width: 25px; border-radius: 50%;"> <?php echo $row['email']; ?>
	                	</a>
	                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
	                        <li><a class="dropdown-item" href="#!">Profile</a></li>
	                        <li><a class="dropdown-item" href="admin_change_pass.php">Change password</a></li>
	                        <li><hr class="dropdown-divider" /></li>
	                        <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#logoutmodal">Logout</a></li>
	                    </ul>
	                </li>
	            </ul>
	        </nav>
	        <div id="layoutSidenav">
	            <div id="layoutSidenav_nav">
	                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
	                    <div class="sb-sidenav-menu">
	                        <div class="nav">


	                            <div class="sb-sidenav-menu-heading">Core</div>
	                            <a class="nav-link" href="dashboard.php">
	                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
	                                Dashboard
	                            </a>

	                            <div class="sb-sidenav-menu-heading">Programs</div>
	                            
	                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
	                                <div class="sb-nav-link-icon"><i class="bi bi-bookmark-check-fill"></i></div>
	                                Program lists
	                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
	                            </a>
	                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
	                                <nav class="sb-sidenav-menu-nested nav">

	                                	<a class="nav-link" href="program.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	Program
				                            </a>
				                            <a class="nav-link" href="sub_program.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	Sub program
				                            </a>
	                                	<!-- <a class="nav-link" href="">Tabata Workout</a>
	                                	<a class="nav-link" href="">Crossfit Workout</a>
	                                	<a class="nav-link" href="">Fitness Bootcamp</a> -->

	                                </nav>
	                            </div>


	                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
	                                <div class="sb-nav-link-icon"><i class="bi bi-bookmark-check-fill"></i></div>
	                                Circuit Training
	                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
	                            </a>
	                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">	
	                                <nav class="sb-sidenav-menu-nested nav">

	                                	<a class="nav-link" href="circuit_routine.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	Whole body circuit with active rest
				                            </a>
				                            <a class="nav-link" href="circuit_routine2.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	Core Workout
				                            </a>
				                            <a class="nav-link" href="circuit_routine3.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	Upper body/ Pull Circuit
				                            </a>
	                                </nav>
	                            </div>


	                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">
	                                <div class="sb-nav-link-icon"><i class="bi bi-bookmark-check-fill"></i></div>
	                                Crossfit Workout
	                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
	                            </a>
	                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
	                                <nav class="sb-sidenav-menu-nested nav">

	                                	<a class="nav-link" href="crossfit_routine.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	Crossfit Wod
				                            </a>
				                            <a class="nav-link" href="crossfit_routine2.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	Core (2 Rounds)
				                            </a>
				                           
	                                </nav>
	                            </div>





	                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts4">
	                                <div class="sb-nav-link-icon"><i class="bi bi-bookmark-check-fill"></i></div>
	                                Tabata Workout
	                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
	                            </a>
	                            <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
	                                <nav class="sb-sidenav-menu-nested nav">

	                                	<a class="nav-link" href="tabata_routine1.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	Tabata Workout(5-8 Rounds)
				                            </a>
				                            <a class="nav-link" href="tabata_routine2.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	Tabata Core Workout
				                            </a>
				                            <a class="nav-link" href="tabata_routine3.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	Tabata Target Everything
				                            </a>
				                            <a class="nav-link" href="tabata_routine4.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	Small Ground Core
				                            </a>
				                           
	                                </nav>
	                            </div>




	                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts5">
	                                <div class="sb-nav-link-icon"><i class="bi bi-bookmark-check-fill"></i></div>
	                                Fitness Bootcamp
	                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
	                            </a>
	                            <div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
	                                <nav class="sb-sidenav-menu-nested nav">

	                                	<a class="nav-link" href="bootcamp_routine1.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	STATION 1: 3-5 sets. 3 rounds is 2 set
				                            </a>
				                            <a class="nav-link" href="bootcamp_routine2.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	STATION 2: 3 rounds = 1 set
				                            </a>
				                            <a class="nav-link" href="bootcamp_routine3.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	Core: 3 sets
				                            </a>
				                            <a class="nav-link" href="bootcamp_routine4.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	5-8 Rounds
				                            </a>
				                            <a class="nav-link" href="bootcamp_routine5.php">
				                                <div class="sb-nav-link-icon"></div>
				                                	CORE EXERCISE 2 SETS OF 10 KPS
				                            </a>
				                           
	                                </nav>
	                            </div>

	                            <div class="sb-sidenav-menu-heading">Program schedule</div>
	                            <a class="nav-link" href="schedule.php">
	                                <div class="sb-nav-link-icon"><i class="bi bi-door-closed-fill"></i></div>
	                                Schedule
	                            </a>

	                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts_akoy-nag-ilis-nani" aria-expanded="false" aria-controls="collapseLayouts_akoy-nag-ilis-nani">
	                                <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
	                                Users
	                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
	                            </a>


	                            <div class="collapse" id="collapseLayouts_akoy-nag-ilis-nani" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
	                                <nav class="sb-sidenav-menu-nested nav">
	                                    <a class="nav-link" href="staff.php">Administrators</a>
	                                    <a class="nav-link" href="users.php">Registered guests</a>
	                                </nav>
	                            </div>


	                            <div class="sb-sidenav-menu-heading">Logout</div>
	                            <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#logoutmodal">
	                                <div class="sb-nav-link-icon"><i class="bi bi-door-closed-fill"></i></div>
	                                Logout
	                            </a>
	                           
	                        </div>
	                    </div>
	                    <div class="sb-sidenav-footer">
	                        <div class="small">Welcome,</div>
	                        <?php echo $row['email']; ?> !
	                    </div>
	                </nav>
	            </div>


	          <!-------------------------------LOGOUT MODAL------------------------------------>
				<!-- The Modal -->
				<div class="modal fade" id="logoutmodal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h5 class="modal-title">Admin logout</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				      </div>
				      
				        <!-- Modal body -->
				        <div class="modal-body">
				        
				          <?php if($row['gender'] === 'Male'):?>
				              <h6>Mr.   <?php echo $row['lastname'];?>, are you sure you want to logout?</h6>
				          <?php else: ?>
				              <h6>Ma'am <?php echo $row['lastname'];?>, are you sure you want to logout?</h6>
				          <?php endif; ?>
				        </div>

				        <!-- Modal footer -->
				        <div class="modal-footer">
				              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
				              <a class="btn btn-primary" href="../logout.php"><i class="bi bi-check-circle"></i> Confirm</a>
				        </div>
				        
				    </div>
				  </div>
				</div>


<!-------------------------------END LOGOUT MODAL-------------------------------->
		<?php } ?>
        

				<!-- CAN BE DELETEd ############################################################################################ -->
        <!-- FOR CHARTS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <!-- END FOR CHARTS -->
        <!-- CAN BE DELETEd ############################################################################################ -->


        <!-- POPPER -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- END POPPER -->

        <!-- TOGGLER -->
        <script src="js/scripts.js"></script>
        <!-- END TOGGLER -->

        <!-- ALERT MESSAGES TIMEOUT  -->
        <script src="js/jquery.min.js"></script>
        <!-- END ALERT MESSAGES TIMEOUT  -->

        <!-- DATATABLES -->
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
         <!-- END DATATABLES -->


    </body>
</html>



<script>
  //-----------------------------ALERT TIMEOUT-------------------------//
  $(document).ready(function() {
      setTimeout(function() {
          $('.alert').hide();
      } ,5000);
  }
  );
//-----------------------------END ALERT TIMEOUT---------------------//

</script>

<?php
// ------------------------------CLOSING THE SESSION OF THE LOGGED IN USER WITH else statement----------//
    } else {
     header('Location: ../index.php');
    }
?>
