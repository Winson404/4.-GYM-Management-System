<?php 
  session_start();
  include 'config.php';
  if(isset($_SESSION['admin_id'])) {
      header('Location: Admin/dashboard.php');
  } elseif(isset($_SESSION['user_id'])) {
      header('Location: Member/dashboard.php');
  } else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GYM Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/logo2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
         nav li a.nav-link, li.dropdown span {
          color: yellow;
         }
       </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-dark" >

    <div class="container d-flex align-items-center">
      
      <h3 class=" me-auto"><a href="index.php" class="text-light" ><img src="images/p.jpg" alt="" width="50">  <span style="color: yellow;">Phenom Athletics (Dasmariñas)</span></a></h3>
      
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar " >
        <ul>
          <li><a  class="nav-link  " href="index.php">Home</a></li>
          <li><a  class="nav-link " href="about_us.php">About</a></li>
          <li><a  class="nav-link " href="classes.php">Schedule</a></li>
          <li><a  class="nav-link   " href="instructors.php">Gym Instructor</a></li>
          <!-- <li><a class="nav-link scrollto" href="team_section.php">Team</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="contact_section.php">Contact</a></li> -->
          <li class="dropdown"><a style="color: #ffff66" href="#"><span class="nav-link">Login portals</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto"  type="button" data-bs-toggle="modal" data-bs-target="#adminlogin">Admin login</a></li>
              <li><a class="nav-link scrollto"  type="button" data-bs-toggle="modal" data-bs-target="#userlogin">Guest login</a></li>
            </ul>
          </li>
          
         <!--  <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<!-- ALERT MESSAGES TIMEOUT  -->
<script src="Admin/js/jquery.min.js"></script>
<!-- END ALERT MESSAGES TIMEOUT  -->
<script>
  //-----------------------------ALERT TIMEOUT-------------------------//
  $(document).ready(function() {
      setTimeout(function() {
          $('.alert').hide();
      } ,6000);
  }
  );
//-----------------------------END ALERT TIMEOUT---------------------//
</script>

<?php } ?>
