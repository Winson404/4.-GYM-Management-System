 <title>Crossfit routine </title>
 <?php 
    include 'sidebar.php';
    $id = $_SESSION['user_id'];
 ?>

 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">



        <h4 class="mt-4">Crossfit Routines</h4>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-center text-primary"><b>Crossfit WOD</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
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
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $query ="SELECT * FROM crossfit_routine1 JOIN sub_program ON crossfit_routine1.routine1_sub_prog_Id=sub_program.sub_program_Id JOIN users ON crossfit_routine1.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
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
                    <h4 class="text-center text-primary"><b>Core (2 Rounds)</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>#</th>
                               <th>Guest name</th>
                               <th>10 SIT UPS</th>
                               <th>10 FLUTTER KICKS</th>
                               <th>10 SCISSOR KICK</th>
                               <th>10 LEG RAISES</th>
                               <th>10 KNEE CRUNCHES</th>
                               <th>10 KNEE TO CHEST</th>
                               <th>10 PLANK ALT SINGLE ARM/LEG</th>
                               <th>Date created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $i = 1;
                               include("../config.php");
                               $query ="SELECT * FROM crossfit_routine2 JOIN sub_program ON crossfit_routine2.routine2_sub_prog_Id=sub_program.sub_program_Id JOIN users ON crossfit_routine2.guest_Id=users.user_Id WHERE users.user_Id='$id'";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $row["firstname"]; echo ' '; echo $row["middlename"]; echo ' '; echo $row["lastname"]; echo ' '; echo $row["suffix"];?></td>
                                  <td><?php echo $row["10_sit_ups"];?></td>
                                  <td><?php echo $row["10_flutter_kicks"];?></td>
                                  <td><?php echo $row["10_scissors"];?></td>
                                  <td><?php echo $row["10_leg"];?></td>
                                  <td><?php echo $row["10_knee_crunches"];?></td>
                                  <td><?php echo $row["10_knee_to_chest"];?></td>
                                  <td><?php echo $row["10_plank_alt_single"];?></td>
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