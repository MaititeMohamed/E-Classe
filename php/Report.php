<?php
include 'connectDB.php';
include 'session.php';
$sql="SELECT * FROM `payment_details`";
$res=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page payment for see Payment Details ">
    <meta name="keywords" content="payment Payment Details  ">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>payment</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!--     start  Sidebar       -->
        <?php
       include 'Sidebar.php'
       ?>
        <!--     end  Sidebar       -->
        <!-- start  Content -->
        <div id="page-content-wrapper" style="background: #ffffff;">
               <?php
                 include 'Header.php'
              ?>
        <!--  start form repoort -->
        

    <div class="container">
        <form method="POST">
   
            <!-- Name input -->
              <div class="form-outline mb-4 ">
                <label class="form-label" for="form5Example1">First Name</label>
                <input type="text" name="Name" class="form-control" value="" />
                <label class="form-label" for="form5Example1"> Last Name</label>
                <input type="text" name="Name" class="form-control" value="" />
               </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form5Example2">Email address</label>
                <input type="email" name="Email" class="form-control" value="" />

            </div>
            <!-- phone input -->
            <div class="form-outline mb-4 ">
                <label class="form-label" for="form5Example2">phone</label>
                <input type="text" name="phone" class="form-control" value="" />
                </div>
            <!-- Submit button -->
            <div class=" d-flex  justify-content-center">
                <button type="submit" name="save" class="btn btn-info btn-block mb-4">save</button>

            </div>
        </form>
    </div>
        <!-- end form repoort   -->








    </div>
    
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>