<?php
include 'connectDB.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="DELETE FROM students WHERE id=$id";
    $res=mysqli_query($con,$sql);
    if($res)
    {
        // echo 'Deleted successfull';
        header('location:Student.php');

    }else{
        die(mysqli_error($con));

    }

}






