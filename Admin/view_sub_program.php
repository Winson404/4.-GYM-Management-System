 <title>Employee & Staff | LM System </title>
 <?php 
    include 'sidebar.php';
    if(isset($_GET['program_Id'])) {
        $id = $_GET['program_Id'];

        $fetch = mysqli_query($conn, "SELECT * FROM sub_program JOIN program ON sub_program.prog_Id=program.program_Id WHERE sub_program.prog_Id='$id'");
    
 ?>

 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h4 class="mt-4">View sub programs</h4>
        <div class="card mb-4">
                <div class="card-header">
                    <!-- <i class="fas fa-table me-1"></i>
                    Types of Loan -->
                    <!-- <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addnewsubprogramfromprogram"><i class="bi bi-plus-square"></i> Add new</button> -->
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
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                               <th>#</th>
                               <th>Sub program name</th>
                               <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $i = 1;
                               
                               while($row = mysqli_fetch_assoc($fetch))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $i++; ?></td>
                                 
                                  <td><?php echo $row["sub_program_name"];?></td>
                                 <!--  <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" type="button" data-bs-target="#update_prog<?php //echo $row['sub_program_Id']; ?>"><i class="bi bi-pencil-square"></i> </button>
                                    <button class="btn btn-danger" data-bs-toggle="modal" type="button" data-bs-target="#del_sub_program<?php //echo $row['sub_program_Id']; ?>"><i class="bi bi-trash"></i> </button>
                                     <a class="btn btn-primary" href="routine.php?program_Id=<?php// echo $row['program_Id']; ?>"><i class="bi bi-eye"></i> View Routines</a> -->
                                  <!-- </td>       -->

                                  <?php 
                                      include 'program_update.php'; 
                                  ?>             
                            </tr>
                            <?php include 'view_sub_program_create.php'; ?>
                            <?php  
                                include 'view_sub_program_delete.php';  

                               } }    
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