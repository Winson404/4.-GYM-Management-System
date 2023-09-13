<?php 
	
	session_start();
	include '../config.php';

	// GUEST REGISTRATION
	if(isset($_POST['register_member'])) {

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
		$password        = md5($_POST['password']);
		$cpassword       = md5($_POST['cpassword']);
		$date_registered = date('Y-m-d');
		$file            = basename($_FILES["fileToUpload"]["name"]);


		$check_email = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
		if(mysqli_num_rows($check_email)===1) {
			$_SESSION['exists']  = "Email is already taken.";
            header("Location: users_create.php");
		} else {

			if($password != $cpassword) {
				$_SESSION['exists']  = "Password does not matched.";
            	header("Location: users_create.php");
			} else {

				  		// Check if image file is a actual image or fake image
		          $target_dir = "../images-member/";
		          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		          $uploadOk = 1;
		          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header("Location: users_create.php");
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header("Location: users_create.php");
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     	
                      	$save = mysqli_query($conn, "INSERT INTO users (firstname, middlename, lastname, suffix, gender, dob, age, address, email, contact, password, image, date_registered) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$file','$date_registered')");

                            if($save) {
	                            $_SESSION['success']  = "Registration successful. Please login.";
	                            header("Location: users.php");                                
                            } else {
                              $_SESSION['exists'] = "Something went wrong while saving your information. Please try again.";
                              header("Location: users_create.php");
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header("Location: users_create.php");
                      }
			}

		}

	}
}






// ADMINISTRATORS REGISTRATION
	if(isset($_POST['register_employer'])) {

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
		$password        = md5($_POST['password']);
		$cpassword       = md5($_POST['cpassword']);
		$date_registered = date('Y-m-d');
		$file            = basename($_FILES["fileToUpload"]["name"]);


		$check_email = mysqli_query($conn, "SELECT * FROM employees WHERE email='$email'");
		if(mysqli_num_rows($check_email)===1) {
						$_SESSION['exists']  = "Email is already taken.";
            header("Location: staff_create.php");
		} else {

			if($password != $cpassword) {
							$_SESSION['exists']  = "Password does not matched.";
            	header("Location: staff_create.php");
			} else {

				  // Check if image file is a actual image or fake image
		          $target_dir = "../images-employees/";
		          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		          $uploadOk = 1;
		          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header("Location: staff_create.php");
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header("Location: staff_create.php");
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     	
                      	$save = mysqli_query($conn, "INSERT INTO employees (firstname, middlename, lastname, suffix, gender, dob, age, address, email, contact, password, image, date_registered) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$file','$date_registered')");

                            if($save) {
	                            $_SESSION['success']  = "Registration successful.";
	                            header("Location: staff.php");                                
                            } else {
                              $_SESSION['exists'] = "Something went wrong while saving your information. Please try again.";
                              header("Location: staff_create.php");
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header("Location: staff_create.php");
                      }
			}

		}

	}
}


	if(isset($_POST['add_program'])) {
		$name = $_POST['program'];

		$exists = mysqli_query($conn, "SELECT * FROM program WHERE program_name='$name'");
		if(mysqli_num_rows($exists)===1) {
			$_SESSION['exists'] = "Program already exists.";
      header("Location: program.php");
		} else {
			$save = mysqli_query($conn, "INSERT INTO program (program_name) VALUES ('$name')");
			 if($save) {
          $_SESSION['success']  = "Program has been added.";
          header("Location: program.php");                                
        } else {
          $_SESSION['exists'] = "Something went wrong while saving your information. Please try again.";
          header("Location: program.php");
        }
		}
	}



	if(isset($_POST['save_sub_program'])) {

		$program     = $_POST['program'];
		$sub_program = $_POST['sub_program'];

		$exists = mysqli_query($conn, "SELECT * FROM sub_program WHERE sub_program_name='$sub_program'");
		if(mysqli_num_rows($exists)===1) {
			$_SESSION['exists'] = "Sub program already exists.";
      header("Location: sub_program.php");
		} else {
			$save = mysqli_query($conn, "INSERT INTO sub_program (prog_Id, sub_program_name) VALUES ('$program', '$sub_program')");
			 if($save) {
          $_SESSION['success']  = "Sub program has been added.";
          header("Location: sub_program.php");                                
        } else {
          $_SESSION['exists'] = "Something went wrong while saving your information. Please try again.";
          header("Location: sub_program.php");
        }
		}
	}



	// VIEW SUB PROGRAM CREATE
	if(isset($_POST['view_save_sub_program'])) {

		$program     = $_POST['program'];
		$sub_program = $_POST['sub_program'];

		$exists = mysqli_query($conn, "SELECT * FROM sub_program WHERE sub_program_name='$sub_program'");
		if(mysqli_num_rows($exists)===1) {
			$_SESSION['exists'] = "Sub program already exists.";
      header("Location: view_sub_program.php?program_Id=$program");
   		// echo '<script>alert ("Sub program already exists.");</script>';  
     //  echo '<script>window.history.go(-1);</script>'; 
     //  echo '<script>window.location.reload();</script>'; 
		} else {
			$save = mysqli_query($conn, "INSERT INTO sub_program (prog_Id, sub_program_name) VALUES ('$program', '$sub_program')");
			 if($save) {
          $_SESSION['success']  = "Sub program has been added.";
          header("Location: view_sub_program.php?program_Id=$program");   
          // echo '<script>alert ("Sub program has been added.");</script>';  
          // echo '<script>window.history.go(-1);</script>';      
          // echo '<script>window.location.reload();</script>'; 
                       
        } else {
          $_SESSION['exists'] = "Something went wrong while saving your information. Please try again.";
          header("Location: view_sub_program.php?program_Id=$program");
          // echo '<script>alert ("Something went wrong while saving your information. Please try again.");</script>';
          // echo '<script>window.history.go(-1);</script>'; 
          // echo '<script>window.location.reload();</script>'; 

        }
		}
	}






	//CIRCUIT ROUTINE 1
	if(isset($_POST['routine1'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM circuit_routine1 WHERE guest_Id = '$guest_Id' AND (Burpees = 'Not yet' || DB_Arnold_press = 'Not yet' || Wall_ball = 'Not yet' || KB_overhead_triceps_ext = 'Not yet' || Ez_bar_bent_over_rows = 'Not yet' || DB_bicep_to_hammer_curls = 'Not yet' || KB_snatch_R = 'Not yet' || Reverse_lunges = 'Not yet' || KB_snatch_L = 'Not yet')");
		if(mysqli_num_rows($select) ==1) {

				$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			  header("Location: circuit_routine.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO circuit_routine1 (guest_Id, routine_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: circuit_routine.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: circuit_routine.php");
					}
		}	
	}





	//CIRCUIT ROUTINE 2
	if(isset($_POST['routine2'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM circuit_routine2 WHERE guest_Id = '$guest_Id' AND (1_min_elbow_plank = 'Not yet' || plank_jack = 'Not yet' || bicycles = 'Not yet' || L_crunches = 'Not yet' || flutter_kicks = 'Not yet' || 1_min_hollow_plank = 'Not yet')");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: circuit_routine2.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO circuit_routine2 (guest_Id, routine2_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: circuit_routine2.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: circuit_routine2.php");
					}
		}	
	}




	//CIRCUIT ROUTINE 3
	if(isset($_POST['routine3'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM circuit_routine3 WHERE guest_Id = '$guest_Id' AND (trx_superman_to_push = 'Not yet' || kb_halo_with_front_press = 'Not yet' || half_kneeling_side_arm_press_R = 'Not yet' || kb_snatch = 'Not yet' || half_kneeling_side_arm_press_L = 'Not yet' || suicides = 'Not yet' || deadlift_to_front_raise = 'Not yet' || inclinde_box_push_ups = 'Not yet' || medicine_ball_half_burpee_to_frog_jump = 'Not yet') ");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: circuit_routine3.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO circuit_routine3 (guest_Id, routine3_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: circuit_routine3.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: circuit_routine3.php");
					}
		}	
	}




	//CROSSFIT ROUTINE 1
	if(isset($_POST['crossfit_routine1'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM crossfit_routine1 WHERE guest_Id = '$guest_Id' AND (11_kb_squat_jump = 'Not yet' || 11_kb_snatch_R = 'Not yet' || 11_kb_swing = 'Not yet' || 11_kb_snatch_L = 'Not yet' || 11_in_out_squat_pulses = 'Not yet' || 11_trap_bar_deadlift = 'Not yet' || 11_bb_squat = 'Not yet' || bb_good_mornings = 'Not yet' || 11_push_press = 'Not yet' || 3_round_farmers_walk = 'Not yet' || 100_jump_rope = 'Not yet' || 30_sec_dead_hang = 'Not yet') ");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: crossfit_routine.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO crossfit_routine1 (guest_Id, routine1_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: crossfit_routine.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: crossfit_routine.php");
					}
		}	
	}



	//CROSSFIT ROUTINE 1
	if(isset($_POST['crossfit_routine2'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM crossfit_routine2 WHERE guest_Id = '$guest_Id' AND (10_sit_ups = 'Not yet' || 10_flutter_kicks = 'Not yet' || 10_scissors = 'Not yet' || 10_leg = 'Not yet' || 10_knee_crunches = 'Not yet' || 10_knee_to_chest = 'Not yet' || 10_plank_alt_single = 'Not yet') ");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: crossfit_routine2.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO crossfit_routine2 (guest_Id, routine2_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: crossfit_routine2.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: crossfit_routine2.php");
					}
		}	
	}




	//TABATA ROUTINE 1
	if(isset($_POST['tabata_routine'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM tabata_routine1 WHERE guest_Id = '$guest_Id' AND (goblet_squat	 = 'Not yet' || crab_kicks = 'Not yet' || push_up_rotate = 'Not yet' || alt_bent_over_row_db = 'Not yet' || squat_2x = 'Not yet' || upright_row_to_hammer_curl_db = 'Not yet' || quick_feet = 'Not yet' || static_hold = 'Not yet') ");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: tabata_routine1.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO tabata_routine1 (guest_Id, routine1_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: tabata_routine1.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: tabata_routine1.php");
					}
		}	
	}




	//TABATA ROUTINE 2
	if(isset($_POST['tabata_routine2'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM tabata_routine2 WHERE guest_Id = '$guest_Id' AND (side_plank_R	 = 'Not yet' || side_plank_L = 'Not yet' || elbow_plank = 'Not yet' || knee_plank = 'Not yet') ");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: tabata_routine2.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO tabata_routine2 (guest_Id, routine2_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: tabata_routine2.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: tabata_routine2.php");
					}
		}	
	}



	//TABATA ROUTINE 3
	if(isset($_POST['tabata_routine3'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM tabata_routine3 WHERE guest_Id = '$guest_Id' AND (start_jump_cardio = 'Not yet' || tricep_ext = 'Not yet' || jack_to_narrow = 'Not yet' || twisted_mount = 'Not yet' || jumping_lunges = 'Not yet' || side_to_side_jump = 'Not yet' || supine_marching = 'Not yet' || wall_sit = 'Not yet') ");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: tabata_routine3.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO tabata_routine3 (guest_Id, routine3_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: tabata_routine3.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: tabata_routine3.php");
					}
		}	
	}




	//TABATA ROUTINE 4
	if(isset($_POST['tabata_routine4'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM tabata_routine4 WHERE guest_Id = '$guest_Id' AND (crunches_with_db_clockwise = 'Not yet' || bicycle_with_db = 'Not yet' || crunches_with_db_counter = 'Not yet' || elbow_prank_hold = 'Not yet') ");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: tabata_routine4.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO tabata_routine4 (guest_Id, routine4_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: tabata_routine4.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: tabata_routine4.php");
					}
		}	
	}




	//BOOTCAMP ROUTINE 1
	if(isset($_POST['bootcamp1'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM bootcamp_routine1 WHERE guest_Id = '$guest_Id' AND (burpees_to_forward_jump = 'Not yet' || forward_backward = 'Not yet' || 180_degrees = 'Not yet' || high_knees = 'Not yet' || squat_jump = 'Not yet') ");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: bootcamp_routine1.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO bootcamp_routine1 (guest_Id, routine1_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: bootcamp_routine1.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: bootcamp_routine1.php");
					}
		}	
	}




	//BOOTCAMP ROUTINE 2
	if(isset($_POST['bootcamp2'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM bootcamp_routine2 WHERE guest_Id = '$guest_Id' AND (forward_jump	= 'Not yet' || box_shuffle = 'Not yet' || skiers_to_jump = 'Not yet' || core_to_core = 'Not yet' || trapbar = 'Not yet') ");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: bootcamp_routine2.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO bootcamp_routine2 (guest_Id, routine2_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: bootcamp_routine2.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: bootcamp_routine2.php");
					}
		}	
	}



	//BOOTCAMP ROUTINE 3
	if(isset($_POST['bootcamp3'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM bootcamp_routine3 WHERE guest_Id = '$guest_Id' AND (high_plank	= 'Not yet' || side_plank_R = 'Not yet' || side_plank_L = 'Not yet' || elbow_plank = 'Not yet') ");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: bootcamp_routine3.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO bootcamp_routine3 (guest_Id, routine3_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: bootcamp_routine3.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: bootcamp_routine3.php");
					}
		}	
	}





	//BOOTCAMP ROUTINE 4
	if(isset($_POST['bootcamp4'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM bootcamp_routine4 WHERE guest_Id = '$guest_Id' AND (core_slider	= 'Not yet' || weighted_lateral = 'Not yet' || quick_feet = 'Not yet' || slam_ball = 'Not yet' || weighted_bunny	= 'Not yet' || icky_shuffle	 = 'Not yet' || lateral_high = 'Not yet' || shuttle_run = 'Not yet') ");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: bootcamp_routine4.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO bootcamp_routine4 (guest_Id, routine4_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: bootcamp_routine4.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: bootcamp_routine4.php");
					}
		}	
	}




	//BOOTCAMP ROUTINE 5
	if(isset($_POST['bootcamp5'])) {
		$sub_Id = $_POST['sub_Id'];
		$guest_Id = $_POST['guest_Id'];
		$date = date('Y-m-d');

		$select = mysqli_query($conn, "SELECT * FROM bootcamp_routine5 WHERE guest_Id = '$guest_Id' AND (sit_up	= 'Not yet' || russian_twist = 'Not yet' || knee_to_chest = 'Not yet' || sid_crunches = 'Not yet' || flutter_back	= 'Not yet' || scissors	 = 'Not yet' || leg_raise = 'Not yet') ");
		if(mysqli_num_rows($select) ==1) {

					$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			    header("Location: bootcamp_routine5.php");
		} else {
					$save = mysqli_query($conn, "INSERT INTO bootcamp_routine5 (guest_Id, routine5_sub_prog_Id, date_created) VALUES ('$guest_Id', '$sub_Id', '$date') ");

					if($save) {
						$_SESSION['success']  = "Performer has been added.";
			          header("Location: bootcamp_routine5.php");   
					} else {
						$_SESSION['exists'] = "Performer is not yet finished in this routine.";
			          header("Location: bootcamp_routine5.php");
					}
		}	
	}




	if(isset($_POST['schedule'])) {

		 		$prog_Id      = $_POST['prog_Id'];
        $day          = $_POST['day'];
        $timefrom     = $_POST['timefrom'];
        $timeto       = $_POST['timeto'];


        	 $day_type=""; 

        	 foreach($day as $days)  
           {  
              $day_type .= $days.",";  
           } 

           



         $save = mysqli_query($conn, "INSERT INTO schedule (sched_today, sched_time, prog_Id) VALUES ('$day_type', '$timefrom - $timeto', '$prog_Id')");

         if($save) {
						$_SESSION['success']  = "Schedule has been added.";
			          header("Location: schedule.php");   
					} else {
						$_SESSION['exists'] = "Something went wrong while saving the information.";
			          header("Location: schedule.php");
					}
	}


?>
