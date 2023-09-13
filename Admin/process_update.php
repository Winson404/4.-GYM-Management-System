<?php 
	
	session_start();
	include '../config.php';
	// UPDATE ADMINISTRATORS
	if(isset($_POST['update_employer'])) {

		$id              = $_POST['emp_Id'];
		$firstname       = $_POST['firstname'];
		$middlename      = $_POST['middlename'];
		$lastname        = $_POST['lastname'];
		$suffix          = $_POST['suffix'];
		$gender          = $_POST['gender'];
		$dob             = $_POST['dob'];
		$age             = $_POST['age'];
		$address         = $_POST['address'];
		$email           = $_POST['email'];
		$contact         = $_POST['contact'];

		$update = mysqli_query($conn, "UPDATE employees SET firstname='$firstname', middlename='$middlename', lastname='$lastname', suffix='$suffix', gender='$gender', dob='$dob', age='$age', address='$address', email='$email', contact='$contact' WHERE emp_Id='$id'");

		if($update) {
            $_SESSION['success']  = "Employee's information has been updated.";
            header("Location: staff.php");                                
        } else {
          $_SESSION['exists'] = "Something went wrong while updating the information. Please try again.";
          header("Location: staff_update.php");
        }

	}



	// UPDATE PHOTO OF ADMINISTRATORS
	if(isset($_POST['update_emp_photo'])) {
		$ids    = $_POST['emp_Id'];
		$file  = basename($_FILES["fileToUpload"]["name"]);

		  // Check if image file is a actual image or fake image
	      $target_dir = "../images-employees/";
	      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	      $uploadOk = 1;
	      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


	      // Allow certain file formats
	      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	      $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
	      header("Location: staff.php");
	      $uploadOk = 0;
	      }

	      // Check if $uploadOk is set to 0 by an error
	      if ($uploadOk == 0) {
	      $_SESSION['error']  = "Your file was not uploaded.";
	      header("Location: staff.php");
	      // if everything is ok, try to upload file
	      } else {

	          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	         	
	          	$save = mysqli_query($conn, "UPDATE employees SET image='$file' WHERE emp_Id='$ids'");

	                if($save) {
	                    $_SESSION['success']  = "Profile has been updated.";
	                    header("Location: staff.php");                                
	                } else {
	                  $_SESSION['exists'] = "Something went wrong while uploading the photo. Please try again.";
	                  header("Location: staff.php");
	                }
	          } else {
	                $_SESSION['exists'] = "There was an error uploading your file.";
	                header("Location: staff.php");
	          }
	}
}




// CHANGE PASSWORD ADMINISTRATORS
    
    if(isset($_POST['change_password_emp'])) {

    	$emp_Id          = $_POST['emp_Id'];
    	$OldPassword     = md5($_POST['OldPassword']);
    	$NewPassword     = md5($_POST['NewPassword']);
    	$ConfirmPassword = md5($_POST['ConfirmPassword']);

    	$check_old_password = mysqli_query($conn, "SELECT * FROM employees WHERE password='$OldPassword' AND emp_Id='$emp_Id'");

    	// CHECK IF THERE IS MATCHED PASSWORD IN THE DATABASE COMPARED TO THE ENTERED OLD PASSWORD
    	if(mysqli_num_rows($check_old_password) === 1 ) {
    				// COMPARE BOTH NEW AND CONFIRM PASSWORD
		    		if($NewPassword != $ConfirmPassword) {
		    				$_SESSION['exists']  = "Password does not matched. Please try again";
		          			header("Location: staff.php");
		    		} else {
			    			$update_password = mysqli_query($conn, "UPDATE employees SET password='$NewPassword' WHERE emp_Id='$emp_Id' ");

			    			if($update_password) {
			    					$_SESSION['success']  = "Password has been changed.";
			          		header("Location: staff.php");
			    			} else {
			    					$_SESSION['exists']  = "Something went wrong while changing the password.";
			          		header("Location: staff.php");
			    			}
		    		}
    	} else {
    		$_SESSION['exists']  = "Old password is incorrect.";
            header("Location: staff.php");
    	}

    }



// CHANGE PASSWORD ADMINISTRATORS USING THE NAVBAR: CHANGE PASSWORD
    
    if(isset($_POST['password_emp'])) {

    	$emp_Id          = $_POST['emp_Id'];
    	$OldPassword     = md5($_POST['OldPassword']);
    	$NewPassword     = md5($_POST['NewPassword']);
    	$ConfirmPassword = md5($_POST['ConfirmPassword']);

    	$check_old_password = mysqli_query($conn, "SELECT * FROM employees WHERE password='$OldPassword' AND emp_Id='$emp_Id'");

    	// CHECK IF THERE IS MATCHED PASSWORD IN THE DATABASE COMPARED TO THE ENTERED OLD PASSWORD
    	if(mysqli_num_rows($check_old_password) === 1 ) {
    				// COMPARE BOTH NEW AND CONFIRM PASSWORD
		    		if($NewPassword != $ConfirmPassword) {
		    				$_SESSION['exists']  = "Password does not matched. Please try again";
		          			header("Location: admin_change_pass.php");
		    		} else {
			    			$update_password = mysqli_query($conn, "UPDATE employees SET password='$NewPassword' WHERE emp_Id='$emp_Id' ");

			    			if($update_password) {
			    					$_SESSION['success']  = "Password has been changed.";
			          		header("Location: admin_change_pass.php");
			    			} else {
			    					$_SESSION['exists']  = "Something went wrong while changing the password.";
			          		header("Location: admin_change_pass.php");
			    			}
		    		}
    	} else {
    		$_SESSION['exists']  = "Old password is incorrect.";
            header("Location: admin_change_pass.php");
    	}

    }






// UPDATE GUESTS
	if(isset($_POST['update_member'])) {

		$id              = $_POST['user_Id'];
		$firstname       = $_POST['firstname'];
		$middlename      = $_POST['middlename'];
		$lastname        = $_POST['lastname'];
		$suffix          = $_POST['suffix'];
		$gender          = $_POST['gender'];
		$dob             = $_POST['dob'];
		$age             = $_POST['age'];
		$address         = $_POST['address'];
		$email           = $_POST['email'];
		$contact         = $_POST['contact'];

		$update = mysqli_query($conn, "UPDATE users SET firstname='$firstname', middlename='$middlename', lastname='$lastname', suffix='$suffix', gender='$gender', dob='$dob', age='$age', address='$address', email='$email', contact='$contact' WHERE user_Id='$id'");

		if($update) {
            $_SESSION['success']  = "Employee's information has been updated.";
            header("Location: users.php");                                
        } else {
          $_SESSION['exists'] = "Something went wrong while updating the information. Please try again.";
          header("Location: users_update.php");
        }

	}








	// UPDATE PHOTO OF GUESTS
	if(isset($_POST['update_mem_photo'])) {
		$ids    = $_POST['user_Id'];
		$file  = basename($_FILES["fileToUpload"]["name"]);

		  // Check if image file is a actual image or fake image
	      $target_dir = "../images-member/";
	      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	      $uploadOk = 1;
	      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


	      // Allow certain file formats
	      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	      $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
	      header("Location: users.php");
	      $uploadOk = 0;
	      }

	      // Check if $uploadOk is set to 0 by an error
	      if ($uploadOk == 0) {
	      $_SESSION['error']  = "Your file was not uploaded.";
	      header("Location: users.php");
	      // if everything is ok, try to upload file
	      } else {

	          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	         	
	          	$save = mysqli_query($conn, "UPDATE users SET image='$file' WHERE user_Id='$ids'");

	                if($save) {
	                    $_SESSION['success']  = "Profile has been updated.";
	                    header("Location: users.php");                                
	                } else {
	                  $_SESSION['exists'] = "Something went wrong while uploading the photo. Please try again.";
	                  header("Location: users.php");
	                }
	          } else {
	                $_SESSION['exists'] = "There was an error uploading your file.";
	                header("Location: users.php");
	          }
	}
}








// CHANGE PASSWORD GUESTS
    
    if(isset($_POST['change_password_mem'])) {

    	$user_Id         = $_POST['user_Id'];
    	$OldPassword     = md5($_POST['OldPassword']);
    	$NewPassword     = md5($_POST['NewPassword']);
    	$ConfirmPassword = md5($_POST['ConfirmPassword']);

    	$check_old_password = mysqli_query($conn, "SELECT * FROM users WHERE password='$OldPassword' AND user_Id='$user_Id'");

    	// CHECK IF THERE IS MATCHED PASSWORD IN THE DATABASE COMPARED TO THE ENTERED OLD PASSWORD
    	if(mysqli_num_rows($check_old_password) === 1 ) {
    				// COMPARE BOTH NEW AND CONFIRM PASSWORD
		    		if($NewPassword != $ConfirmPassword) {
		    				$_SESSION['exists']  = "Password does not matched. Please try again";
		          			header("Location: users.php");
		    		} else {
			    			$update_password = mysqli_query($conn, "UPDATE users SET password='$NewPassword' WHERE user_Id='$user_Id' ");

			    			if($update_password) {
			    					$_SESSION['success']  = "Password has been changed.";
			          		header("Location: users.php");
			    			} else {
			    					$_SESSION['exists']  = "Something went wrong while changing the password.";
			          		header("Location: users.php");
			    			}
		    		}
    	} else {
    		$_SESSION['exists']  = "Old password is incorrect.";
            header("Location: users.php");
    	}

    }



// PROGRAM UPDATE
if(isset($_POST['update_program'])) {

    	$prog_Id     = $_POST['prog_Id'];
    	$program     = $_POST['program'];
    	
    	$update_program = mysqli_query($conn, "UPDATE program SET program_name='$program' WHERE program_Id='$prog_Id' ");

		if($update_program) {
				$_SESSION['success']  = "Program has been updated.";
  		header("Location: program.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: program.php");
		}
    }



// PROGRAM UPDATE
if(isset($_POST['update_sub_program'])) {

    	$id         = $_POST['sub_program_Id'];
    	$program_id = $_POST['program_Id'];
    	$sub_program_name    = $_POST['sub_program_name'];
    	
    	$update_program = mysqli_query($conn, "UPDATE sub_program SET prog_Id='$program_id', sub_program_name='$sub_program_name' WHERE sub_program_Id='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Sub program has been updated.";
  		header("Location: sub_program.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: sub_program.php");
		}
    }



  // CIRCUIT ROUTINE 1 UPDATE
if(isset($_POST['routine1'])) {

    	$id         = $_POST['Id'];
    	$burpees    = $_POST['burpees'];
    	$dbarnold   = $_POST['dbarnold'];
    	$wallball   = $_POST['wallball'];
    	$kboverhead = $_POST['kboverhead'];
    	$ezbar      = $_POST['ezbar'];
    	$dbbiceps   = $_POST['dbbiceps'];
    	$kbsnatch_r = $_POST['kbsnatch_r'];
    	$reverse    = $_POST['reverse'];
    	$kbsnatch_l = $_POST['kbsnatch_l'];
    	
    	$update_program = mysqli_query($conn, "UPDATE circuit_routine1 SET Burpees='$burpees', DB_Arnold_press='$dbarnold', Wall_ball='$wallball', KB_overhead_triceps_ext='$kboverhead', Ez_bar_bent_over_rows='$ezbar', DB_bicep_to_hammer_curls='$dbbiceps', KB_snatch_R='$kbsnatch_r', Reverse_lunges='$reverse', KB_snatch_L='$kbsnatch_l' WHERE routine1_Id ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: circuit_routine.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: circuit_routine.php");
		}
    }





    // CIRCUIT ROUTINE 2 UPDATE
if(isset($_POST['routine2'])) {

    	$id         = $_POST['Id'];
    	$min        = $_POST['1min'];
    	$plankajack = $_POST['plankajack'];
    	$bicycles   = $_POST['bicycles'];
    	$crunches   = $_POST['crunches'];
    	$flutter    = $_POST['flutter'];
    	$hooloplank = $_POST['hooloplank'];
    	
    	$update_program = mysqli_query($conn, "UPDATE circuit_routine2 SET 1_min_elbow_plank='$min', plank_jack='$plankajack', bicycles='$bicycles', L_crunches='$crunches', flutter_kicks='$flutter', 1_min_hollow_plank='$hooloplank' WHERE routine2_Id  ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: circuit_routine2.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: circuit_routine2.php");
		}
    }




    // CIRCUIT ROUTINE 3 UPDATE
if(isset($_POST['routine3'])) {

    	$id           = $_POST['Id'];
    	$trx          = $_POST['trx'];
    	$kbhalo       = $_POST['kbhalo'];
    	$halfkneeling = $_POST['halfkneeling'];
    	$snatch       = $_POST['snatch'];
    	$kneelingside = $_POST['kneelingside'];
    	$suicides     = $_POST['suicides'];
    	$Deadlift     = $_POST['Deadlift'];
    	$Inclined     = $_POST['Inclined'];
    	$Medicine     = $_POST['Medicine'];
    	
    	$update_program = mysqli_query($conn, "UPDATE circuit_routine3 SET trx_superman_to_push='$trx', kb_halo_with_front_press='$kbhalo', half_kneeling_side_arm_press_R='$halfkneeling', kb_snatch='$snatch', half_kneeling_side_arm_press_L='$kneelingside', suicides='$suicides', deadlift_to_front_raise='$Deadlift', inclinde_box_push_ups='$Inclined', medicine_ball_half_burpee_to_frog_jump='$Medicine' WHERE routine3_Id  ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: circuit_routine3.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: circuit_routine3.php");
		}
    }




    // CROSSFIT ROUTINE 1 UPDATE
if(isset($_POST['crossfit_routine1'])) {

    	$id         = $_POST['Id'];
    	$SQUATJUMP  = $_POST['SQUATJUMP'];
    	$SNATCHR    = $_POST['SNATCHR'];
    	$SWING      = $_POST['SWING'];
    	$SNATCHL    = $_POST['SNATCHL'];
    	$PULSES     = $_POST['PULSES'];
    	$DEADLIFT   = $_POST['DEADLIFT'];
    	$SQUAT      = $_POST['SQUAT'];
    	$MORNINGS   = $_POST['MORNINGS'];
    	$PRESS      = $_POST['PRESS'];
    	$FARMERS    = $_POST['FARMERS'];
    	$ROPE       = $_POST['ROPE'];
    	$SECONDS    = $_POST['SECONDS'];
    	
    	$update_program = mysqli_query($conn, "UPDATE crossfit_routine1 SET 11_kb_squat_jump='$SQUATJUMP', 11_kb_snatch_R='$SNATCHR', 11_kb_swing='$SWING', 11_kb_snatch_L='$SNATCHL', 11_in_out_squat_pulses='$PULSES', 11_trap_bar_deadlift='$DEADLIFT', 11_bb_squat='$SQUAT', bb_good_mornings='$MORNINGS', 11_push_press='$PRESS', 3_round_farmers_walk='$FARMERS', 100_jump_rope='$ROPE', 30_sec_dead_hang='$SECONDS' WHERE routine1_Id ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: crossfit_routine.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: crossfit_routine.php");
		}
    }




    // CROSSFIT ROUTINE 2 UPDATE
if(isset($_POST['crossfit_routine2'])) {

    	$id         = $_POST['Id'];
    	$UPS        = $_POST['UPS'];
    	$FLUTTER    = $_POST['FLUTTER'];
    	$SCISSOR    = $_POST['SCISSOR'];
    	$RAISES     = $_POST['RAISES'];
    	$CRUNCHES   = $_POST['CRUNCHES'];
    	$CHEST      = $_POST['CHEST'];
    	$SINGLE     = $_POST['SINGLE'];
    	
    	
    	$update_program = mysqli_query($conn, "UPDATE crossfit_routine2 SET 10_sit_ups='$UPS', 10_flutter_kicks='$FLUTTER', 10_scissors='$SCISSOR', 10_leg='$RAISES', 10_knee_crunches='$CRUNCHES', 10_knee_to_chest='$CHEST', 10_plank_alt_single='$SINGLE' WHERE routine2_Id  ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: crossfit_routine2.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: crossfit_routine2.php");
		}
    }


     // TABATA ROUTINE 1 UPDATE
	if(isset($_POST['tabata_routine1'])) {

    	$id      = $_POST['Id'];
    	$GOBLET  = $_POST['GOBLET'];
    	$CRAB    = $_POST['CRAB'];
    	$PUSH    = $_POST['PUSH'];
    	$BENT    = $_POST['BENT'];
    	$SQUAT   = $_POST['SQUAT'];
    	$UPRIGHT = $_POST['UPRIGHT'];
    	$QUICK   = $_POST['QUICK'];
    	$STATIC  = $_POST['STATIC'];
    	
    	
    	$update_program = mysqli_query($conn, "UPDATE tabata_routine1 SET goblet_squat	='$GOBLET', crab_kicks='$CRAB', push_up_rotate='$PUSH', alt_bent_over_row_db='$BENT', squat_2x='$SQUAT', upright_row_to_hammer_curl_db='$UPRIGHT', quick_feet='$QUICK', static_hold='$STATIC' WHERE routine1_Id   ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: tabata_routine1.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: tabata_routine1.php");
		}
    }




     // TABATA ROUTINE 2 UPDATE
	if(isset($_POST['tabata_routine2'])) {

    	$id      = $_POST['Id'];
    	$PLANK  = $_POST['PLANK'];
    	$SIDE    = $_POST['SIDE'];
    	$ELBOW    = $_POST['ELBOW'];
    	$KNEE    = $_POST['KNEE'];
    	
    	$update_program = mysqli_query($conn, "UPDATE tabata_routine2 SET side_plank_R	='$PLANK', side_plank_L='$SIDE', elbow_plank='$ELBOW', knee_plank='$KNEE' WHERE routine2_Id    ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: tabata_routine2.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: tabata_routine2.php");
		}
    }



    // TABATA ROUTINE 3 UPDATE
	if(isset($_POST['tabata_routine3'])) {

    	$id       = $_POST['Id'];
    	$CARDIO   = $_POST['CARDIO'];
    	$TRICEP   = $_POST['TRICEP'];
    	$JACK     = $_POST['JACK'];
    	$TWISTED  = $_POST['TWISTED'];
    	$JUMPING  = $_POST['JUMPING'];
    	$SIDE     = $_POST['SIDE'];
    	$MARCHING = $_POST['MARCHING'];
    	$WALL     = $_POST['WALL'];
    	
    	$update_program = mysqli_query($conn, "UPDATE tabata_routine3 SET start_jump_cardio	='$CARDIO', tricep_ext='$TRICEP', jack_to_narrow='$JACK', twisted_mount	='$TWISTED', jumping_lunges	='$JUMPING', side_to_side_jump='$SIDE', supine_marching='$MARCHING', wall_sit = '$WALL' WHERE routine3_Id ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: tabata_routine3.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: tabata_routine3.php");
		}
    }



    // TABATA ROUTINE 4 UPDATE
	if(isset($_POST['tabata_routine4'])) {

    	$id       = $_POST['Id'];
    	$CRUNCHES = $_POST['CRUNCHES'];
    	$BICYCLE  = $_POST['BICYCLE'];
    	$ROTATION = $_POST['ROTATION'];
    	$PLANK    = $_POST['PLANK'];
    	
    	$update_program = mysqli_query($conn, "UPDATE tabata_routine4 SET crunches_with_db_clockwise = '$CRUNCHES', bicycle_with_db = '$BICYCLE', crunches_with_db_counter = '$ROTATION', elbow_prank_hold = '$PLANK' WHERE routine4_Id ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: tabata_routine4.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: tabata_routine4.php");
		}
    }



    // BOOTCAMP ROUTINE 1 UPDATE
	if(isset($_POST['bootcamp1'])) {

    	$id       = $_POST['Id'];
    	$BURPEES  = $_POST['BURPEES'];
    	$FORWARD  = $_POST['FORWARD'];
    	$DEGREES  = $_POST['DEGREES'];
    	$HIGH     = $_POST['HIGH'];
    	$SQUAT    = $_POST['SQUAT'];
    	
    	$update_program = mysqli_query($conn, "UPDATE bootcamp_routine1 SET burpees_to_forward_jump = '$BURPEES', forward_backward = '$FORWARD', 180_degrees = '$DEGREES', high_knees = '$HIGH', squat_jump = '$SQUAT' WHERE routine1_Id ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: bootcamp_routine1.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: bootcamp_routine1.php");
		}
    }



    // BOOTCAMP ROUTINE 2 UPDATE
	if(isset($_POST['bootcamp2'])) {

    	$id         = $_POST['Id'];
    	$FORWARD    = $_POST['FORWARD'];
    	$SHUFFLE    = $_POST['SHUFFLE'];
    	$SKIERS     = $_POST['SKIERS'];
    	$CORE       = $_POST['CORE'];
    	$TRAPBAR    = $_POST['TRAPBAR'];
    	
    	$update_program = mysqli_query($conn, "UPDATE bootcamp_routine2 SET forward_jump = '$FORWARD', box_shuffle = '$SHUFFLE', skiers_to_jump = '$SKIERS', core_to_core = '$CORE', trapbar = '$TRAPBAR' WHERE routine2_Id ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: bootcamp_routine2.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: bootcamp_routine2.php");
		}
    }



    // BOOTCAMP ROUTINE 3 UPDATE
	if(isset($_POST['bootcamp3'])) {

    	$id         = $_POST['Id'];
    	$HIGH    = $_POST['HIGH'];
    	$RIGHT    = $_POST['RIGHT'];
    	$LEFT     = $_POST['LEFT'];
    	$ELBOW       = $_POST['ELBOW'];
    	
    	$update_program = mysqli_query($conn, "UPDATE bootcamp_routine3 SET high_plank = '$HIGH', side_plank_R = '$RIGHT', side_plank_L = '$LEFT', elbow_plank = '$ELBOW' WHERE routine3_Id ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: bootcamp_routine3.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: bootcamp_routine3.php");
		}
    }




    // BOOTCAMP ROUTINE 4 UPDATE
	if(isset($_POST['bootcamp4'])) {

    	$id         = $_POST['Id'];
    	$FORTH      = $_POST['FORTH'];
    	$LATERAL    = $_POST['LATERAL'];
    	$CONES      = $_POST['CONES'];
    	$BURPEES    = $_POST['BURPEES'];
    	$BUNNY      = $_POST['BUNNY'];
    	$SHUFFLE    = $_POST['SHUFFLE'];
    	$HIGH       = $_POST['HIGH'];
    	$RUN        = $_POST['RUN'];
    	
    	$update_program = mysqli_query($conn, "UPDATE bootcamp_routine4 SET core_slider = '$FORTH', weighted_lateral = '$LATERAL', quick_feet = '$CONES', slam_ball = '$BURPEES', weighted_bunny = '$BUNNY', icky_shuffle = '$SHUFFLE', lateral_high = '$HIGH', shuttle_run = '$RUN' WHERE routine4_Id  ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: bootcamp_routine4.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: bootcamp_routine4.php");
		}
    }




    // BOOTCAMP ROUTINE 5 UPDATE
	if(isset($_POST['bootcamp5'])) {

    	$id        = $_POST['Id'];
    	$PLATES    = $_POST['PLATES'];
    	$RUSSIAN   = $_POST['RUSSIAN'];
    	$KNEE      = $_POST['KNEE'];
    	$CRUNCHES  = $_POST['CRUNCHES'];
    	$BACK      = $_POST['BACK'];
    	$SCISSORS  = $_POST['SCISSORS'];
    	$RAISE     = $_POST['RAISE'];
    	
    	$update_program = mysqli_query($conn, "UPDATE bootcamp_routine5 SET sit_up = '$PLATES', russian_twist = '$RUSSIAN', knee_to_chest = '$KNEE', sid_crunches = '$CRUNCHES', flutter_back = '$BACK', scissors = '$SCISSORS', leg_raise = '$RAISE' WHERE routine5_Id  ='$id' ");

		if($update_program) {
				$_SESSION['success']  = "Performer's progress has been saved.";
  		header("Location: bootcamp_routine5.php");
		} else {
				$_SESSION['exists']  = "Something went wrong while changing the password.";
  		header("Location: bootcamp_routine5.php");
		}
    }




    //schedule
	if(isset($_POST['schedule'])) {

		$sched_Id     = $_POST['sched_Id'];
    	$prog_Id      = $_POST['prog_Id'];
        $day          = $_POST['day'];
        $timefrom     = $_POST['timefrom'];
        $timeto       = $_POST['timeto'];


        	 $day_type=""; 

        	 foreach($day as $days)  
           {  
              $day_type .= $days.",";  
           } 

           



         $save = mysqli_query($conn, "UPDATE schedule SET sched_today = '$day_type', sched_time = '$timefrom - $timeto', prog_Id ='$prog_Id' WHERE sched_Id='$sched_Id'");

         if($save) {
			$_SESSION['success']  = "Schedule has been updated.";
          header("Location: schedule.php");   
		} else {
			$_SESSION['exists'] = "Something went wrong while saving the information.";
          header("Location: schedule.php");
		}
    }




?>