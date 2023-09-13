<?php 
	
	session_start();
	include '../config.php';

	// UPDATE GUEST
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
            header("Location: about_me_update.php");                                
        } else {
          $_SESSION['exists'] = "Something went wrong while updating the information. Please try again.";
          header("Location: about_me_update.php");
        }

	}








	// UPDATE PHOTO OF GUEST
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
	      header("Location: about_me_update.php");
	      $uploadOk = 0;
	      }

	      // Check if $uploadOk is set to 0 by an error
	      if ($uploadOk == 0) {
	      $_SESSION['error']  = "Your file was not uploaded.";
	      header("Location: about_me_update.php");
	      // if everything is ok, try to upload file
	      } else {

	          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	         	
	          	$save = mysqli_query($conn, "UPDATE users SET image='$file' WHERE user_Id='$ids'");

	                if($save) {
	                    $_SESSION['success']  = "Profile has been updated.";
	                    header("Location: about_me_update.php");                                
	                } else {
	                  $_SESSION['exists'] = "Something went wrong while uploading the photo. Please try again.";
	                  header("Location: about_me_update.php");
	                }
	          } else {
	                $_SESSION['exists'] = "There was an error uploading your file.";
	                header("Location: about_me_update.php");
	          }
	}
}








// CHANGE PASSWORD GUEST
    
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
		          			header("Location: change_pass.php");
		    		} else {
			    			$update_password = mysqli_query($conn, "UPDATE users SET password='$NewPassword' WHERE user_Id='$user_Id' ");

			    			if($update_password) {
			    					$_SESSION['success']  = "Password has been changed.";
			          		header("Location: change_pass.php");
			    			} else {
			    					$_SESSION['exists']  = "Something went wrong while changing the password.";
			          		header("Location: change_pass.php");
			    			}
		    		}
    	} else {
    		$_SESSION['exists']  = "Old password is incorrect.";
            header("Location: change_pass.php");
    	}

    }








?>