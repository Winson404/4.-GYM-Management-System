 <title>Registered users | LM System </title>
 <?php 
    include 'sidebar.php';
 ?>

 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h4 class="mt-4">Registered users</h4>
        <div class="card mb-4">
                <div class="card-header">
                    <!-- <i class="fas fa-table me-1"></i>
                    Types of Loan -->
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addnewstaff"><i class="bi bi-plus-square"></i> Add new</button>
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
                               <th>ID Number</th>
                               <th>Image</th> 
                               <th>Full name</th>    
                               <th>Contact</th>
                               <th>Date registered</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $i = 1;
                               include("../config.php");
                               $query ="SELECT * FROM users";
                               $result = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_assoc($result))
                                {
                             ?>
                              <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td>
                                    <img src="../images-member/<?php echo $row['image'];?>"  style="width: 35px; height: 35px;border: 3px solid #e6f2ff;" alt="image">
                                  </td>
                                  <td><?php echo $row["firstname"];?> <?php echo $row["middlename"];?> <?php echo $row["lastname"];?> <?php echo $row["suffix"];?></td>
                                  <td><?php echo $row["contact"];?></td>
                                  <td><?php echo $row["date_registered"];?></td>
                                  <td>
                                    <button class="btn btn-primary" data-bs-toggle="modal" type="button" data-bs-target="#view_mem<?php echo $row['user_Id']; ?>"><i class="bi bi-eye"></i> </button>
                                    <button class="btn btn-success" data-bs-toggle="modal" type="button" data-bs-target="#update_mem<?php echo $row['user_Id']; ?>"><i class="bi bi-pencil-square"></i> </button>
                                    <button class="btn btn-danger" data-bs-toggle="modal" type="button" data-bs-target="#del_mem<?php echo $row['user_Id']; ?>"><i class="bi bi-trash"></i> </button>
                                    <button class="btn btn-warning" data-bs-toggle="modal" type="button" data-bs-target="#pass_mem<?php echo $row['user_Id']; ?>"><i class="bi bi-key"></i> </button>
                                  </td>      

                                  <?php 
                                       include 'users_update.php'; 
                                       include 'users_view.php';
                                       include 'users_change_password.php';  
                                  ?>             
                            </tr>
                            <?php  
                                include 'users_delete.php';   
                               }    
                            ?>

                        </tbody>
                    </table>
                </div>
                 <?php include 'users_create.php'; ?>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</div>



<!-- DO NOT DELETE END DIV TAG -->
    </div>
<!-- DO NOT DELETE END DIV TAG -->


<script>
  function formatDate(date){
    var d = new Date(date),
    month = '' + (d.getMonth() + 1),
    day = '' + d.getDate(),
    year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
    }
// JUNIOR HIGH GETTING AGE VALUE----------------------------------------------------------------->
    function getAge(dateString){
        var birthdate = new Date().getTime();
        if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')){
        // variable is undefined or null value
        birthdate = new Date().getTime();
        }
        birthdate = new Date(dateString).getTime();
        var now = new Date().getTime();
        // now find the difference between now and the birthdate
        var n = (now - birthdate)/1000;
        if (n < 378683112) { // less than 12 years(378683112 seconds)
            var day_n = Math.floor(n/86400);
            if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')){
            // variable is undefined or null
            return '';
            } else {   
                 return '';  
                 //return day_n + ' day' + (day_n > 1 ? 's' : '') + ' old';   
            }
        } else {
            var year_n = Math.floor(n/31556926);
            if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')){
            return year_n = '';
            } else {
                return year_n + (year_n > 1 ? '' : '') ;
                //return year_n + ' year' + (year_n > 1 ? 's' : '') + ' old';
            }
        }
    }

    function getAgeVal(pid) {
        var birthdate = formatDate(document.getElementById("txtbirthdate").value);
        var count = document.getElementById("txtbirthdate").value.length;
        if (count=='10') {
                var age = getAge(birthdate);
                var str = age;
                var res = str.substring(0, 1);
                if (res =='-' || res =='0') {
                    document.getElementById("txtbirthdate").value = "";
                    document.getElementById("txtage").value = "";
                    $('#txtbirthdate').focus();
                    return false;
                } else {
                        document.getElementById("txtage").value = age;
                        // DISPLAYING AUTOMATICALLY THE ERROR MESSAGE IF AGE IS LESS THAN 12 YEARS OLD
                        if(document.getElementById("txtage").value == "") {
                            document.getElementById("agestatus").style.display = "block";
                            return false;
                        } else {
                            document.getElementById("agestatus").style.display = "none";
                            return true;
                        }
                }
        } else {
            document.getElementById("txtage").value = "";
            return false;
        }
    }








    // SENIOR HIGH GETTING AGE VALUE--------------------------------------------------------------------->
// -------------------------------------------------------------------------------------------------->
    function seniorgetAgeVal(pid) {
        var birthdate = formatDate(document.getElementById("seniorbirthdate").value);
        var count = document.getElementById("seniorbirthdate").value.length;
        if (count=='10') {
                var age = getAge(birthdate);
                var str = age;
                var res = str.substring(0, 1);
                if (res =='-' || res =='0') {
                document.getElementById("seniorbirthdate").value = "";
                document.getElementById("seniorage").value = "";
                $('#seniorbirthdate').focus();
                return false;
                } else {
                        document.getElementById("seniorage").value = age;
                        // DISPLAYING AUTOMATICALLY THE ERROR MESSAGE IF AGE IS LESS THAN 12 YEARS OLD
                        if(document.getElementById("seniorage").value == "") {
                            document.getElementById("senioragestatus").style.display = "block";
                            return false;
                        } else {
                            document.getElementById("senioragestatus").style.display = "none";
                            return true;
                        }
                }
        } else {
            document.getElementById("seniorage").value = "";
            return false;
        }
    }
// END SENIOR HIGH GETTING AGE VALUE----------------------------------------------------------------->
</script>