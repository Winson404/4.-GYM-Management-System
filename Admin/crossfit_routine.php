 <title>Employee & Staff | LM System </title>
 <?php 
    include 'sidebar.php';
 ?>

 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h4 class="mt-4">Crossfit Routines</h4>
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
                    <h4 class="text-center text-primary"><b>Crossfit WOD</b></h4>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                               <th>#</th>
                               <th>Guest name</th>
                               <th>11 KB SQUAT JUMP</th>
                               <th>11 KB SNATCH (R)</th>
                               <th>11KB SWING </th>
                               <th>11 KB SNATCH (L)</th>
                               <th>11 IN AND OUT SQUAT PULSES</th>
                               <th>11 TRAP BAR DEADLIFT</th>
                               <th>11 BB SQUAT</th>
                               <th>BB GOOD MORNINGS</th>
                               <th>11 PUSH PRESS</th>
                               <th>3 ROUNDS FARMERS WALK FORWARD & BACK</th>
                               <th>100 JUMP ROPE</th>
                               <th>30 SECONDS DEAD HANG</th>
                               <th>Date</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $i = 1;
                               include("../config.php");
                               $query ="SELECT * FROM crossfit_routine1 JOIN sub_program ON crossfit_routine1.routine1_sub_prog_Id=sub_program.sub_program_Id JOIN users ON crossfit_routine1.guest_Id=users.user_Id";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["11_kb_squat_jump"];?></td>
                                  <td><?php echo $row["11_kb_snatch_R"];?></td>
                                  <td><?php echo $row["11_kb_swing"];?></td>
                                  <td><?php echo $row["11_kb_snatch_L"];?></td>
                                  <td><?php echo $row["11_in_out_squat_pulses"];?></td>
                                  <td><?php echo $row["11_trap_bar_deadlift"];?></td>
                                  <td><?php echo $row["11_bb_squat"];?></td>
                                  <td><?php echo $row["bb_good_mornings"];?></td>
                                  <td><?php echo $row["11_push_press"];?></td>
                                  <td><?php echo $row["3_round_farmers_walk"];?></td>
                                  <td><?php echo $row["100_jump_rope"];?></td>
                                  <td><?php echo $row["30_sec_dead_hang"];?></td>
                                  <td><?php echo $row["date_created"];?></td>
                                  <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" type="button" data-bs-target="#update_prog<?php echo $row["routine1_Id"];?>"><i class="bi bi-pencil-square"></i> </button>
                                    <button class="btn btn-danger" data-bs-toggle="modal" type="button" data-bs-target="#del_program<?php echo $row["routine1_Id"];?>"><i class="bi bi-trash"></i> </button>
                                  </td>      

                                  <?php 
                                      include 'crossfit_routine_update.php'; 
                                  ?>             
                            </tr>
                            <?php  
                                include 'crossfit_routine_delete.php';   
                               }    
                            ?>

                        </tbody>
                    </table>
                </div>
                 <?php include 'crossfit_routine_create.php'; ?>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</div>



<!-- DO NOT DELETE END DIV TAG -->
    </div>
<!-- DO NOT DELETE END DIV TAG -->