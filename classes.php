<?php 
  include 'navbar.php'; 
  include 'login_guest.php'; 
  include 'login_admin.php';
?>

<div id="hero" style="height: 73px;"></div>

<!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PROGRAM schedules</h2>
          <p>These are the schedules for the programs we have. Please do follow these schedules. Thank you!</p>
        </div>

        <div class="row">
          <?php 

            $fetch = mysqli_query($conn, "SELECT * FROM schedule LEFT JOIN program ON schedule.prog_Id=program.program_Id");
            while ($row = mysqli_fetch_array($fetch)){
          ?>

          <div class="col-lg-4 mb-3 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h3><?php echo $row['program_name']; ?></h3>
              <h6><a href=""><?php echo $row['sched_today']; ?></a></h6>
              <p><?php echo $row['sched_time']; ?>PM</p>
            </div>
          </div>

        <?php } ?>

          <!-- <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">APPLY FOR AN SPU COOPERATIVE NUMBER ONLINE</a></h4>
              <p>Read more...</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">SPU COOPERATIVE PORTAL</a></h4>
              <p>Read more...</p>
            </div>
          </div> -->

         <!--  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Services Section -->


<?php include 'footer.php'; ?>

