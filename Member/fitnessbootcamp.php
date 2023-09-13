 <title>Fitness bootcamp routine </title>
 <?php 
    include 'sidebar.php';
    $id = $_SESSION['user_id'];
 ?>

 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">



        <h4 class="mt-4">Fitness bootcamp Routines</h4>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-center text-primary"><b>STATION 1: 3-5 sets. 3 rounds is 2 set</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Guest name</th>
                               <th>BURPEES TO FORWARD JUMP</th>
                               <th>FORWARD BACKWARD HOPS TO FORWARD JUMP</th>
                               <th>180 DEGREES ROTATION TO FORWARD JUMP</th>
                               <th>HIGH KNEES TO STEP UPS</th>
                               <th>SQUAT JUMP TO SLAM BALL 5x</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $i = 1;
                               include("../config.php");
                               $query ="SELECT * FROM bootcamp_routine1 JOIN sub_program ON bootcamp_routine1.routine1_sub_prog_Id=sub_program.sub_program_Id JOIN users ON bootcamp_routine1.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["burpees_to_forward_jump"];?></td>
                                  <td><?php echo $row["forward_backward"];?></td>
                                  <td><?php echo $row["180_degrees"];?></td>
                                  <td><?php echo $row["high_knees"];?></td>
                                  <td><?php echo $row["squat_jump"];?></td>
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
                    <h4 class="text-center text-primary"><b>STATION 2: 3 rounds = 1 set</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Guest name</th>
                               <th>FORWARD JUMP TO IN IN OUT OUT TO BOX JUMP</th>
                               <th>BOX SHUFFLE 10x</th>
                               <th>SKIERS TO BOX JUMP</th>
                               <th>CORE TO CORE 9x</th>
                               <th>TRAPBAR DL 5x TO FORWARD JUMP</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $query ="SELECT * FROM bootcamp_routine2 JOIN sub_program ON bootcamp_routine2.routine2_sub_prog_Id=sub_program.sub_program_Id JOIN users ON bootcamp_routine2.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["forward_jump"];?></td>
                                  <td><?php echo $row["box_shuffle"];?></td>
                                  <td><?php echo $row["skiers_to_jump"];?></td>
                                  <td><?php echo $row["core_to_core"];?></td>
                                  <td><?php echo $row["trapbar"];?></td>
                                  <td><?php echo $row["date_created"];?></td>
                            </tr>
                            <?php  
                               }    
                            ?>

                        </tbody>
                    </table>
            </div>





            <div class="card mb-4 mt-5">
                <div class="card-body">
                    <h4 class="text-center text-primary"><b>Core: 3 sets</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Guest name</th>
                               <th>HIGH PLANK</th>
                               <th>SIDE PLANK RIGHT</th>
                               <th>SIDE PLANK LEFT</th>
                               <th>ELBOW PLANK</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $query ="SELECT * FROM bootcamp_routine3 JOIN sub_program ON bootcamp_routine3.routine3_sub_prog_Id=sub_program.sub_program_Id JOIN users ON bootcamp_routine3.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["high_plank"];?></td>
                                  <td><?php echo $row["side_plank_R"];?></td>
                                  <td><?php echo $row["side_plank_L"];?></td>
                                  <td><?php echo $row["elbow_plank"];?></td>
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
                    <h4 class="text-center text-primary"><b>5-8 Rounds</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Guest name</th>
                               <th>CORE SLIDER BACK AND FORTH</th>
                               <th>WEIGHTED LATERAL WALK</th>
                               <th>QUICK FEET AROUND CONES</th>
                               <th>SLAM BALL TO BURPEES S TO S</th>
                               <th>WEIGHTED BUNNY HOP TO BOX JUMP</th>
                               <th>ICKY SHUFFLE</th>
                               <th>LATERAL HIGH KICKS</th>
                               <th>SHUTTLE RUN</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $query ="SELECT * FROM bootcamp_routine4 JOIN sub_program ON bootcamp_routine4.routine4_sub_prog_Id=sub_program.sub_program_Id JOIN users ON bootcamp_routine4.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
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
                    <h4 class="text-center text-primary"><b>CORE EXERCISE 2 SETS OF 10 KPS</b></h4>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                               <th>Guest name</th>
                               <th>SIT UP WITH PLATES</th>
                               <th>RUSSIAN TWIST WITH PTES</th>
                               <th>KNEE TO CHEST</th>
                               <th>SID CRUNCHES L/R</th>
                               <th>FLUTTER BACK</th>
                               <th>SCISSORS</th>
                               <th>LEG RAISE HALF TO FULL</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $query ="SELECT * FROM bootcamp_routine5 JOIN sub_program ON bootcamp_routine5.routine5_sub_prog_Id=sub_program.sub_program_Id JOIN users ON bootcamp_routine5.guest_Id=users.user_Id";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["sit_up"];?></td>
                                  <td><?php echo $row["russian_twist"];?></td>
                                  <td><?php echo $row["knee_to_chest"];?></td>
                                  <td><?php echo $row["sid_crunches"];?></td>
                                  <td><?php echo $row["flutter_back"];?></td>
                                  <td><?php echo $row["scissors"];?></td>
                                  <td><?php echo $row["leg_raise"];?></td>
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