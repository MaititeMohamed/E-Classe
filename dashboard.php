<?php
include 'connectDB.php';
#number of student
$sql="SELECT COUNT(id) AS NumberOfstudent FROM students;";
$res=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);

#number of cources
$sqlc="SELECT COUNT(id) AS NumberOfcourses FROM courses;";
$resc=mysqli_query($con,$sqlc);
$rowc = mysqli_fetch_assoc($resc);

#total pay
$sqlp="SELECT SUM(AmountPaid)FROM payment_details;";
$resp=mysqli_query($con,$sqlp);
$rowp = mysqli_fetch_assoc($resp);
$sqlu="SELECT COUNT(id) AS NumberOfuser FROM users;";
$resu=mysqli_query($con,$sqlu);
$rowu = mysqli_fetch_assoc($resu);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page dashboard for see number of Users and Students course  ">
    <meta name="keywords" content="dashboard E-classe learn course">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <title>dashboard</title>
</head>

<body>

    <div class="d-flex" id="wrapper">
        

    <?php
      include 'Sidebar.php'
     ?>
        <!-- start  Content -->
        <div id="page-content-wrapper" style="background: #ffffff;">
              <!--   start  header     -->
              <?php
                 include 'Header.php'
              ?>
              <!--   end  header     -->
            <div class="container-fluid px-4">
                <div class="row g-5 my-2">
                    <div class="col-md-6 col-lg-3">
                        <div class=" p-3  shadow-sm rounded" style="background-color: #F0F9FF;">
                            <div>
                                <i class="bi bi-mortarboard fs-1 text-info"></i>
                                <p class="fs-5 mt-2 text-secondary">Students</p>
                                <div class="d-flex justify-content-end">
                                    <h3 class="fs-2 fw-5 "><?php 
                                   
                                    foreach($row as $num){
                                        echo $num;
                                    }
                                     ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class=" p-3  shadow-sm rounded" style="background-color: #FEF6FB;">
                            <div>
                                <i class="bi bi-bookmark fs-1  p-3 " style="color: #EE95C5;"></i>
                                <p class="fs-5 mt-2 text-secondary">Course</p>
                                <div class="d-flex justify-content-end">
                                    <h3 class="fs-2 fw-5 "><?php 
                                   
                                   foreach($rowc as $numc){
                                       echo $numc;
                                   }
                                    ?></h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class=" p-3 shadow-sm rounded " style="background-color: #FEFBEC;">
                            <div>
                                <i class="bi bi-wallet fs-1  p-3 text-info "></i>
                                <p class="fs-5 mt-2 text-secondary">Payments</p>
                                <div class="d-flex justify-content-end">
                                    <div class="d-flex align-items-center">
                                        <h6 class=" me-1 price">DHS</h6>
                                        <h5 class="fs-2 fw-5 price1 "><?php 
                                   
                                   foreach($rowp as $total){
                                       echo $total;
                                   }?></h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class=" p-3 shadow-sm rounded"
                            style=" background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);">
                            <div>
                                <i class="bi bi-person fs-1  p-3 text-white "></i>
                                <p class="fs-5 mt-2 text-secondary">Users</p>
                                <div class="d-flex justify-content-end">
                                    <h3 class="fs-2 fw-5 ">
                                    <?php 
                                   
                                   foreach($rowu as $users){
                                       echo $users;
                                   }?>
                                    </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- end  Content -->








    </div>
   
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>

</html>