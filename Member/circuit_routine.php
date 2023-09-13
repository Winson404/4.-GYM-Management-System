 <title>Circuit routine </title>
 <?php 
    include 'sidebar.php';
    $id = $_SESSION['user_id'];
 ?>

 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">



        <h4 class="mt-4">Circuit Routines</h4>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-center text-primary"><b>Whole body circuit with active rest</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Guest name</th>
                               <th>Burbees</th>
                               <th>DB Arnold Press</th>
                               <th>Wall ball</th>
                               <th>KB Overhead Triceps Ext.</th>
                               <th>EZ bar rent over rows</th>
                               <th>DB Bicep to hammer curls</th>
                               <th>KB Snatch (R)</th>
                               <th>Reverse Lunges</th>
                               <th>KB Snatch (L)</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $query ="SELECT * FROM circuit_routine1 JOIN sub_program ON circuit_routine1.routine_sub_prog_Id=sub_program.sub_program_Id JOIN users ON circuit_routine1.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["Burpees"];?></td>
                                  <td><?php echo $row["DB_Arnold_press"];?></td>
                                  <td><?php echo $row["Wall_ball"];?></td>
                                  <td><?php echo $row["KB_overhead_triceps_ext"];?></td>
                                  <td><?php echo $row["Ez_bar_bent_over_rows"];?></td>
                                  <td><?php echo $row["DB_bicep_to_hammer_curls"];?></td>
                                  <td><?php echo $row["KB_snatch_R"];?></td>
                                  <td><?php echo $row["Reverse_lunges"];?></td>
                                  <td><?php echo $row["KB_snatch_L"];?></td>
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
                    <h4 class="text-center text-primary"><b>Core Workout</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Guest name</th>
                               <th>1 Min. Elbow Plank</th>
                               <th>Plank Jack</th>
                               <th>Bicycles</th>
                               <th>L-crunches</th>
                               <th>Flutter Kicks</th>
                               <th>1 Min. hollow plank</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $query ="SELECT * FROM circuit_routine2 JOIN sub_program ON circuit_routine2.routine2_sub_prog_Id=sub_program.sub_program_Id JOIN users ON circuit_routine2.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["1_min_elbow_plank"];?></td>
                                  <td><?php echo $row["plank_jack"];?></td>
                                  <td><?php echo $row["bicycles"];?></td>
                                  <td><?php echo $row["L_crunches"];?></td>
                                  <td><?php echo $row["flutter_kicks"];?></td>
                                  <td><?php echo $row["1_min_hollow_plank"];?></td>
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
                    <h4 class="text-center text-primary"><b>Upper body/ Pull Circuit</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Guest name</th>
                               <th>TRX Superman to push</th>
                               <th>KB Halo w/ Front press</th>
                               <th>Half kneeling side arm press(R)</th>
                               <th>KB Snatch</th>
                               <th>Half kneeling side arm press(L)</th>
                               <th>Suicides</th>
                               <th>Deadlift to front raise</th>
                               <th>Inclined box push ups</th>
                               <th>Medicine ball half burfee</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $query ="SELECT * FROM circuit_routine3 JOIN sub_program ON circuit_routine3.routine3_sub_prog_Id=sub_program.sub_program_Id JOIN users ON circuit_routine3.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["trx_superman_to_push"];?></td>
                                  <td><?php echo $row["kb_halo_with_front_press"];?></td>
                                  <td><?php echo $row["half_kneeling_side_arm_press_R"];?></td>
                                  <td><?php echo $row["kb_snatch"];?></td>
                                  <td><?php echo $row["half_kneeling_side_arm_press_L"];?></td>
                                  <td><?php echo $row["suicides"];?></td>
                                  <td><?php echo $row["deadlift_to_front_raise"];?></td>
                                  <td><?php echo $row["inclinde_box_push_ups"];?></td>
                                  <td><?php echo $row["medicine_ball_half_burpee_to_frog_jump"];?></td>
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