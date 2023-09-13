<?php 
	
	session_start();
	include 'config.php';

	// MEMBER REGISTRATION
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
            header("Location: register_guest.php");
		} else {

			if($password != $cpassword) {
				$_SESSION['exists']  = "Password does not matched.";
            	header("Location: register_guest.php");
			} else {

				  // Check if image file is a actual image or fake image
		          $target_dir = "images-member/";
		          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		          $uploadOk = 1;
		          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header("Location: register_guest.php");
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header("Location: register_guest.php");
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     	
                      	$save = mysqli_query($conn, "INSERT INTO users (firstname, middlename, lastname, suffix, gender, dob, age, address, email, contact, password, image, date_registered) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$file','$date_registered')");

                            if($save) {
	                            $_SESSION['success']  = "Registration successful. Please login.";
	                            header("Location: register_guest.php");                                
                            } else {
                              $_SESSION['exists'] = "Something went wrong while saving your information. Please try again.";
                              header("Location: register_guest.php");
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header("Location: register_guest.php");
                      }
			}

		}

	}
}






// EMPLOYER REGISTRATION
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
            header("Location: register_admin.php");
		} else {

			if($password != $cpassword) {
				$_SESSION['exists']  = "Password does not matched.";
            	header("Location: register_admin.php");
			} else {

				  // Check if image file is a actual image or fake image
		          $target_dir = "images-employees/";
		          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		          $uploadOk = 1;
		          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['error']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
                  header("Location: register_admin.php");
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['error']  = "Your file was not uploaded.";
                  header("Location: register_admin.php");
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     	
                      	$save = mysqli_query($conn, "INSERT INTO employees (firstname, middlename, lastname, suffix, gender, dob, age, address, email, contact, password, image, date_registered) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$file','$date_registered')");

                            if($save) {
	                            $_SESSION['success']  = "Registration successful. Please login.";
	                            header("Location: register_admin.php");                                
                            } else {
                              $_SESSION['exists'] = "Something went wrong while saving your information. Please try again.";
                              header("Location: register_admin.php");
                            }
                      } else {
                            $_SESSION['exists'] = "There was an error uploading your file.";
                            header("Location: register_admin.php");
                      }
			}

		}

	}
}

?>