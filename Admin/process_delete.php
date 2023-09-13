<?php 
	
	session_start();
	include '../config.php';

	// DELETE ADMIN
	if(isset($_POST['delete_emp'])) {
		$id = $_POST['emp_Id']; 

		$delete = mysqli_query($conn, "DELETE FROM employees WHERE emp_Id='$id'");
		if($delete) {
            $_SESSION['success']  = "Employee's account has been deleted.";
            header("Location: staff.php");                                
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: staff.php");
        }
	}



	// DELETE GUEST
	if(isset($_POST['delete_mem'])) {
		$id = $_POST['user_Id']; 

		$delete = mysqli_query($conn, "DELETE FROM users WHERE user_Id='$id'");
		if($delete) {
            $_SESSION['success']  = "Member's account has been deleted.";
            header("Location: users.php");                                
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: users.php");
        }
	}


	// DELETE PROGRAM
	if(isset($_POST['delete_prog'])) {
		$id = $_POST['program_Id']; 

		$delete = mysqli_query($conn, "DELETE FROM program WHERE program_Id='$id'");
		if($delete) {
            $_SESSION['success']  = "Program has been deleted.";
            header("Location: program.php");                                
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: program.php");
        }
	}


	// DELETE SUB PROGRAM
	if(isset($_POST['delete_sub_prog'])) {
		$id = $_POST['sub_program_Id']; 

		$delete = mysqli_query($conn, "DELETE FROM sub_program WHERE sub_program_Id='$id'");
		if($delete) {
            $_SESSION['success']  = "Sub program has been deleted.";
            header("Location: sub_program.php");                                
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: sub_program.php");
        }
	}



	// DELETE SUB PROGRAM FROM VIEW_SUB_PROGRAM_DELETE.PHP
	if(isset($_POST['view_delete_sub_prog'])) {
		$program     = $_POST['program'];
		$id = $_POST['sub_program_Id']; 

		$delete = mysqli_query($conn, "DELETE FROM sub_program WHERE sub_program_Id='$id'");
		if($delete) {
            $_SESSION['success']  = "Sub program has been deleted.";
            header("Location: view_sub_program.php?program_Id=$program");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: view_sub_program.php?program_Id=$program");
        }
	}


	// DELETE CIRCUIT 1 ROUTINE 1 PERFORMEr
	if(isset($_POST['delete_routine1'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM circuit_routine1 WHERE routine1_Id='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: circuit_routine.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: circuit_routine.php");
        }
	}



	// DELETE CIRCUIT 1 ROUTINE 2 PERFORMEr
	if(isset($_POST['delete_routine2'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM circuit_routine2 WHERE routine2_Id='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: circuit_routine2.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: circuit_routine2.php");
        }
	}


	// DELETE CIRCUIT 1 ROUTINE 3 PERFORMEr
	if(isset($_POST['delete_routine3'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM circuit_routine3 WHERE routine3_Id='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: circuit_routine3.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: circuit_routine3.php");
        }
	}



	// DELETE CROSSFIT 1 ROUTINE 1 PERFORMEr
	if(isset($_POST['delete_crossfit_routine1'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM crossfit_routine1 WHERE routine1_Id='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: crossfit_routine.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: crossfit_routine.php");
        }
	}




	// DELETE CROSSFIT 2 ROUTINE 2 PERFORMEr
	if(isset($_POST['delete_crossfit_routine2'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM crossfit_routine2 WHERE routine2_Id ='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: crossfit_routine2.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: crossfit_routine2.php");
        }
	}



	// DELETE TABATA 1 ROUTINE 1 PERFORMEr
	if(isset($_POST['delete_tabata_routine1'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM tabata_routine1 WHERE routine1_Id ='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: tabata_routine1.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: tabata_routine1.php");
        }
	}



	// DELETE TABATA 2 ROUTINE 2 PERFORMEr
	if(isset($_POST['delete_tabata_routine2'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM tabata_routine2 WHERE routine2_Id ='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: tabata_routine2.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: tabata_routine2.php");
        }
	}



	// DELETE TABATA 3 ROUTINE 3 PERFORMEr
	if(isset($_POST['delete_tabata_routine3'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM tabata_routine3 WHERE routine3_Id  ='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: tabata_routine3.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: tabata_routine3.php");
        }
	}



	// DELETE TABATA 4 ROUTINE 4 PERFORMEr
	if(isset($_POST['delete_tabata_routine4'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM tabata_routine4 WHERE routine4_Id  ='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: tabata_routine4.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: tabata_routine4.php");
        }
	}




	// DELETE BOOTCAMP ROUTINE 1 PERFORMEr
	if(isset($_POST['bootcamp1'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM bootcamp_routine1 WHERE routine1_Id   ='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: bootcamp_routine1.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: bootcamp_routine1.php");
        }
	}


	// DELETE BOOTCAMP ROUTINE 2 PERFORMEr
	if(isset($_POST['bootcamp2'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM bootcamp_routine2 WHERE routine2_Id ='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: bootcamp_routine2.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: bootcamp_routine2.php");
        }
	}


	// DELETE BOOTCAMP ROUTINE 3 PERFORMEr
	if(isset($_POST['bootcamp3'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM bootcamp_routine3 WHERE routine3_Id ='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: bootcamp_routine3.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: bootcamp_routine3.php");
        }
	}


	// DELETE BOOTCAMP ROUTINE 4 PERFORMEr
	if(isset($_POST['bootcamp4'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM bootcamp_routine4 WHERE routine4_Id ='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: bootcamp_routine4.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: bootcamp_routine4.php");
        }
	}
	


	// DELETE BOOTCAMP ROUTINE 5 PERFORMEr
	if(isset($_POST['bootcamp5'])) {
		$id = $_POST['Id']; 

		$delete = mysqli_query($conn, "DELETE FROM bootcamp_routine5 WHERE routine5_Id ='$id'");
		if($delete) {
            $_SESSION['success']  = "Performer has been deleted";
            header("Location: bootcamp_routine5.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: bootcamp_routine5.php");
        }
	}




	// DELETE SCHEDULE
	if(isset($_POST['schedule'])) {
		$id = $_POST['sched_Id']; 

		$delete = mysqli_query($conn, "DELETE FROM schedule WHERE sched_Id ='$id'");
		if($delete) {
            $_SESSION['success']  = "Schedule has been deleted";
            header("Location: schedule.php");                 
        } else {
            $_SESSION['exists'] = "Something went wrong. Please try again.";
            header("Location: schedule.php");
        }
	}

?>
