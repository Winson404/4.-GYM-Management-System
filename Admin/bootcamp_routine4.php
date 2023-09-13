 <title>Employee & Staff | LM System </title>
 <?php 
    include 'sidebar.php';
 ?>

 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h4 class="mt-4">Fitness Bootcamp Routines</h4>
        <div class="card mb-4">
                <div class="card-header">

                    <!-- <i class="fas fa-table me-1"></i>
                    Types of Loan -->
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addnewprogram"><i class="bi bi-plus-square"></i> Add new</button>
<!-----------------------------SUCCESS SESSION ALERT MESSAGES---------------------------------------------------------------->
  <?php if(isset($_SESSION['success'])) { ?> 
      <h6 class="alert alert-success text-success text-center" role="alert"><strong>Success!</strong> <?php echo $_SESSION['success']; ?></h6> 
  <?php unset($_SESSION['success']); } ?>
<!-----------------------------EXISTS  SESSION ALERT MESSAGES---------------------------------------------------------------->
  <?php if(isset($_SESSION['invalid']) && isset($_SESSION['error'])) { ?>
      <h6 class="alert alert-danger text-danger text-center" role="alert"><strong>Sorry,</strong> <?php echo $_SESSION['invalid']; ?>  <?php echo $_SESSION['error']; ?></h6>
  <?php unset($_SESSION['invalid']);  unset($_SESSION['error']);  } ?>

  <?php  if(isset($_SESSION['exists'])) { ?>
      <h6 class="alert alert-danger text-danger text-center" role="alert"><strong>Sorry,</strong> <?php echo $_SESSION['exists']; ?></h6>
  <?php unset($_SESSION['exists']); } ?>
            <!--#######################################################################################################################-->
                </div>

                <div class="card-body">
                    <h4 class="text-center text-primary"><b>5-8 Rounds</b></h4>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                               <th>#</th>
                               <th>Guest name</th>
                               <th>CORE SLIDER BACK AND FORTH</th>
                               <th>WEIGHTED LATERAL WALK</th>
                               <th>QUICK FEET AROUND CONES</th>
                               <th>SLAM BALL TO BURPEES S TO S</th>
                               <th>WEIGHTED BUNNY HOP TO BOX JUMP</th>
                               <th>ICKY SHUFFLE</th>
                               <th>LATERAL HIGH KICKS</th>
                               <th>SHUTTLE RUN</th>
                               <th>Date</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $i = 1;
                               include("../config.php");
                               $query ="SELECT * FROM bootcamp_routine4 JOIN sub_program ON bootcamp_routine4.routine4_sub_prog_Id=sub_program.sub_program_Id JOIN users ON bootcamp_routine4.guest_Id=users.user_Id";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["core_slider"];?></td>
                                  <td><?php echo $row["weighted_lateral"];?></td>
                                  <td><?php echo $row["quick_feet"];?></td>
                                  <td><?php echo $row["slam_ball"];?></td>
                                  <td><?php echo $row["weighted_bunny"];?></td>
                                  <td><?php echo $row["icky_shuffle"];?></td>
                                  <td><?php echo $row["lateral_high"];?></td>
                                  <td><?php echo $row["shuttle_run"];?></td>
                                  <td><?php echo $row["date_created"];?></td>
                                  <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" type="button" data-bs-target="#update_prog<?php echo $row["routine4_Id"];?>"><i class="bi bi-pencil-square"></i> </button>
                                    <button class="btn btn-danger" data-bs-toggle="modal" type="button" data-bs-target="#del_program<?php echo $row["routine4_Id"];?>"><i class="bi bi-trash"></i> </button>
                                  </td>      

                                  <?php 
                                      include 'bootcamp_routine4_update.php'; 
                                  ?>             
                            </tr>
                            <?php  
                                include 'bootcamp_routine4_delete.php';   
                               }    
                            ?>

                        </tbody>
                    </table>
                </div>
                 <?php include 'bootcamp_routine4_create.php'; ?>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</div>



<!-- DO NOT DELETE END DIV TAG -->
    </div>
<!-- DO NOT DELETE END DIV TAG -->