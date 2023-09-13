 <title>Tabata routine </title>
 <?php 
    include 'sidebar.php';
    $id = $_SESSION['user_id'];
 ?>

 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">



        <h4 class="mt-4">Tabata Routines</h4>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-center text-primary"><b>Tabata Workout(5-8 Rounds)</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Guest name</th>
                               <th>GOBLET SQUAT</th>
                               <th>CRAB KICKS</th>
                               <th>PUSH UP ROTATE </th>
                               <th>ALT BENT OVER ROW (DB)</th>
                               <th>SQUAT 2X</th>
                               <th>UPRIGHT ROW TO HAMMER CURL (DB)</th>
                               <th>QUICK FEET</th>
                               <th>STATIC HOLD</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $query ="SELECT * FROM tabata_routine1 JOIN sub_program ON tabata_routine1.routine1_sub_prog_Id=sub_program.sub_program_Id JOIN users ON tabata_routine1.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
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
                            </tr>
                            <?php  
                               }    
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>





            <div class="card mb-4 mt-5">
                <div class="card-body">
                    <h4 class="text-center text-primary"><b>Tabata Core Workout</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Guest name</th>
                               <th>SIDE PLANK (R)</th>
                               <th>SIDE PLANK (L)</th>
                               <th>ELBOW PLANK</th>
                               <th>KNEE PLANK</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $query ="SELECT * FROM tabata_routine2 JOIN sub_program ON tabata_routine2.routine2_sub_prog_Id=sub_program.sub_program_Id JOIN users ON tabata_routine2.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["side_plank_R"];?></td>
                                  <td><?php echo $row["side_plank_L"];?></td>
                                  <td><?php echo $row["elbow_plank"];?></td>
                                  <td><?php echo $row["knee_plank"];?></td>
                                  <td><?php echo $row["date_created"];?></td>
                            </tr>
                            <?php  
                               }    
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>





            <div class="card mb-4 mt-5">
                <div class="card-body">
                    <h4 class="text-center text-primary"><b>Tabata Target Everything</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Guest name</th>
                               <th>STAR JUMP (CARDIO)</th>
                               <th>TRICEP EXTENSIONS (TRICEPS) = KB</th>
                               <th>JACK TO NARROW PRESS (CARDIO)</th>
                               <th>TWISTED MOUNT CLIMBERS (CARDIO, LOWER)</th>
                               <th>JUMPING LUNGES (CARDIO, LOSE)</th>
                               <th>SIDE TO SIDE JUMP SCOUT (LOWER)</th>
                               <th>SUPINE MARCHING (CORE)</th>
                               <th>WALL SIT (LOWER, CORE) KB, DB</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $query ="SELECT * FROM tabata_routine3 JOIN sub_program ON tabata_routine3.routine3_sub_prog_Id=sub_program.sub_program_Id JOIN users ON tabata_routine3.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
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
                            </tr>
                            <?php  
                               }    
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>






            <div class="card mb-4 mt-5">
                <div class="card-body">
                    <h4 class="text-center text-primary"><b>Small Ground Core</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Guest name</th>
                               <th>CRUNCHES WITH DB ROTATION CLOCKWISE</th>
                               <th>BICYCLE WITH DB ROTATION</th>
                               <th>CRUNCHES WITH DB ROTATION COUNTER CLOCKWISE</th>
                               <th>ELBOW PLANK HOLD</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $query ="SELECT * FROM tabata_routine4 JOIN sub_program ON tabata_routine4.routine4_sub_prog_Id=sub_program.sub_program_Id JOIN users ON tabata_routine4.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["crunches_with_db_clockwise"];?></td>
                                  <td><?php echo $row["bicycle_with_db"];?></td>
                                  <td><?php echo $row["crunches_with_db_counter"];?></td>
                                  <td><?php echo $row["elbow_prank_hold"];?></td>
                                  <td><?php echo $row["date_created"];?></td>
                            </tr>
                            <?php  
                               }    
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>









        </div>
    </main>

    <?php include 'footer.php'; ?>

</div>



<!-- DO NOT DELETE END DIV TAG -->
    </div>
<!-- DO NOT DELETE END DIV TAG -->