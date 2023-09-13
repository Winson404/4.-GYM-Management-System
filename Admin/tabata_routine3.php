 <title>Employee & Staff | LM System </title>
 <?php 
    include 'sidebar.php';
 ?>

 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h4 class="mt-4">Tabata Routines</h4>
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
                    <h4 class="text-center text-primary"><b>Tabata Target Everything</b></h4>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                               <th>#</th>
                               <th>Guest name</th>
                               <th>STAR JUMP (CARDIO)</th>
                               <th>TRICEP EXTENSIONS (TRICEPS) = KB</th>
                               <th>JACK TO NARROW PRESS (CARDIO)</th>
                               <th>TWISTED MOUNT CLIMBERS (CARDIO, LOWER)</th>
                               <th>JUMPING LUNGES (CARDIO, LOSE)</th>
                               <th>SIDE TO SIDE JUMP SCOUT (LOWER)</th>
                               <th>SUPINE MARCHING (CORE)</th>
                               <th>WALL SIT (LOWER, CORE) KB, DB</th>
                               <th>Date</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $i = 1;
                               include("../config.php");
                               $query ="SELECT * FROM tabata_routine3 JOIN sub_program ON tabata_routine3.routine3_sub_prog_Id=sub_program.sub_program_Id JOIN users ON tabata_routine3.guest_Id=users.user_Id";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["start_jump_cardio"];?></td>
                                  <td><?php echo $row["tricep_ext"];?></td>
                                  <td><?php echo $row["jack_to_narrow"];?></td>
                                  <td><?php echo $row["twisted_mount"];?></td>
                                  <td><?php echo $row["jumping_lunges"];?></td>
                                  <td><?php echo $row["side_to_side_jump"];?></td>
                                  <td><?php echo $row["supine_marching"];?></td>
                                  <td><?php echo $row["wall_sit"];?></td>
                                  <td><?php echo $row["date_created"];?></td>
                                  <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" type="button" data-bs-target="#update_prog<?php echo $row["routine3_Id"];?>"><i class="bi bi-pencil-square"></i> </button>
                                    <button class="btn btn-danger" data-bs-toggle="modal" type="button" data-bs-target="#del_program<?php echo $row["routine3_Id"];?>"><i class="bi bi-trash"></i> </button>
                                  </td>      

                                  <?php 
                                      include 'tabata_routine3_update.php'; 
                                  ?>             
                            </tr>
                            <?php  
                                include 'tabata_routine3_delete.php';   
                               }    
                            ?>

                        </tbody>
                    </table>
                </div>
                 <?php include 'tabata_routine3_create.php'; ?>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</div>



<!-- DO NOT DELETE END DIV TAG -->
    </div>
<!-- DO NOT DELETE END DIV TAG -->