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
                    <h4 class="text-center text-primary"><b>Tabata Workout(5-8 Rounds)</b></h4>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                               <th>#</th>
                               <th>Guest name</th>
                               <th>GOBLET SQUAT</th>
                               <th>CRAB KICKS</th>
                               <th>PUSH UP ROTATE </th>
                               <th>ALT BENT OVER ROW (DB)</th>
                               <th>SQUAT 2X</th>
                               <th>UPRIGHT ROW TO HAMMER CURL (DB)</th>
                               <th>QUICK FEET</th>
                               <th>STATIC HOLD</th>
                               <th>Date</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $i = 1;
                               include("../config.php");
                               $query ="SELECT * FROM tabata_routine1 JOIN sub_program ON tabata_routine1.routine1_sub_prog_Id=sub_program.sub_program_Id JOIN users ON tabata_routine1.guest_Id=users.user_Id";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["goblet_squat"];?></td>
                                  <td><?php echo $row["crab_kicks"];?></td>
                                  <td><?php echo $row["push_up_rotate"];?></td>
                                  <td><?php echo $row["alt_bent_over_row_db"];?></td>
                                  <td><?php echo $row["squat_2x"];?></td>
                                  <td><?php echo $row["upright_row_to_hammer_curl_db"];?></td>
                                  <td><?php echo $row["quick_feet"];?></td>
                                  <td><?php echo $row["static_hold"];?></td>
                                  <td><?php echo $row["date_created"];?></td>
                                  <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" type="button" data-bs-target="#update_prog<?php echo $row["routine1_Id"];?>"><i class="bi bi-pencil-square"></i> </button>
                                    <button class="btn btn-danger" data-bs-toggle="modal" type="button" data-bs-target="#del_program<?php echo $row["routine1_Id"];?>"><i class="bi bi-trash"></i> </button>
                                  </td>      

                                  <?php 
                                      include 'tabata_routine1_update.php'; 
                                  ?>             
                            </tr>
                            <?php  
                                include 'tabata_routine1_delete.php';   
                               }    
                            ?>

                        </tbody>
                    </table>
                </div>
                 <?php include 'tabata_routine1_create.php'; ?>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</div>



<!-- DO NOT DELETE END DIV TAG -->
    </div>
<!-- DO NOT DELETE END DIV TAG -->