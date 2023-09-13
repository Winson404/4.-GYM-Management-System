<?php 

	session_start();
	include 'config.php';

	// ADMIN / EMPLOYER LOGIN
	if(isset($_POST['employer_login'])) {
		$email    = $_POST['email'];
		$password = md5($_POST['password']);

		$check = mysqli_query($conn, "SELECT * FROM employees WHERE email='$email' AND password='$password' AND user_type='2'");

		if(mysqli_num_rows($check)===1) {

			$row = mysqli_fetch_array($check);
			if($row['email'] === $email && $row['password'] === $password) {
				$_SESSION['admin_id'] = $row['emp_Id'];
				header("Location: Admin/dashboard.php");
			} else {
				$_SESSION['exists'] = "Password is incorrect. Try again!"; 
               // $script =  "<script> $(document).ready(function(){ $('#employerlogin').modal('show'); }); </script>";  
                header("Location: index.php"); 
			}
			
		} else {
                $_SESSION['exists'] = "Password is incorrect. Try again!"; 
                header("Location: index.php");
                // $script =  "<script> $(document).ready(function(){ $('#employerlogin').modal('show'); }); </script>";
                     
         }
	}







	// MEMBER / USER LOGIN
	if(isset($_POST['member_login'])) {
		$email    = $_POST['email'];
		$password = md5($_POST['password']);

		$check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

		if(mysqli_num_rows($check)===1) {

			$row = mysqli_fetch_array($check);
			if($row['email'] === $email && $row['password'] === $password) {
				$_SESSION['user_id'] = $row['user_Id'];
				header("Location: Member/about_me.php");
			} else {
				$_SESSION['exists'] = "Password is incorrect. Try again!"; 
               // $script =  "<script> $(document).ready(function(){ $('#employerlogin').modal('show'); }); </script>";  
                header("Location: index.php"); 
			}
			
		} else {
                $_SESSION['exists'] = "Password is incorrect. Try again!"; 
                header("Location: index.php");
                // $script =  "<script> $(document).ready(function(){ $('#employerlogin').modal('show'); }); </script>";
                     
         }
	}	

?>