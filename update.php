<?php
include 'connectDB.php';
# get id from url

$id = $_GET['updateid'];
# start set data in iput

$sql = "SELECT * FROM students WHERE id=$id ";
$res = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($res);
$img=$data['img'];
$Name = $data['Name'];
$Email = $data['Email'];
$phone = $data['phone'];
$EnrolNumber = $data['EnrolNumber'];
# end set data in iput

if (isset($_POST['save'])) {
    $img=$_POST['img'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $phone = $_POST['phone'];
    $EnrolNumber = $_POST['EnrolN'];
    $sql = "UPDATE `students` SET id=$id, img='$img',Name='$Name',Email='$Email',phone='$phone',EnrolNumber='$EnrolNumber' where id=$id";
    $res = mysqli_query($con, $sql);
    if ($res) {

        header('location:Student.php');
    } else {
        die(mysqli_error($con));
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page Student for see Students List and more informaition about student  ">
    <meta name="keywords" content="Student Students List ">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>update</title>

</head>

<body>



    <div class="container">
        <form method="POST">
            <!-- img input -->
                <div class="form-outline mb-4 mt-5">
                <label for="formFile" class="form-label">image</label>
                <input class="form-control" type="file" id="formFile" name="img" value="<?php echo './img/'.$img ?>"/>
                </div>
            <!-- Name input -->
              <div class="form-outline mb-4 ">
                <label class="form-label" for="form5Example1">Name</label>
                <input type="text" name="Name" class="form-control" value="<?php echo $Name ?>" />
               </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form5Example2">Email address</label>
                <input type="email" name="Email" class="form-control" value="<?php echo $Email ?>" />

            </div>
            <!-- phone input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form5Example2">phone</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $phone ?>" />

            </div>
            <!-- Enrol Number input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form5Example2">Enrol Number</label>
                <input type="text" name="EnrolN" class="form-control" value="<?php echo $EnrolNumber ?>" />

            </div>
            <!-- Submit button -->
            <div class=" d-flex  justify-content-center">
                <button type="submit" name="save" class="btn btn-info btn-block mb-4">save</button>

            </div>
        </form>
    </div>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>

</html>