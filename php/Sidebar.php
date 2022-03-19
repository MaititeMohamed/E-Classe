<?php 
include 'session.php';
?>
<!--     start  Sidebar       -->
        <div  id="sidebar-wrapper" style="background: #FAFFC1;">
            <div class=" border-start border-5 ms-4 mt-3" style="border-color: #00C1FE !important;">
                <h5 class="card-title fw-bold ms-2">E-classe</h5>
            </div>
            <div class="d-flex flex-column  mt-1">
                <img class="rounded-circle align-self-center" src="../img/med.png" alt="Youcode" width="100px">
                <h5 class="small ms-5 mt-3"><?php echo  $_SESSION['FirstNam'];?></h5>
                <p class="text-info ms-7 fw-bold">Admin</p>
            </div>
            <div class="list-group list-group-flush ">
            <a href="dashboard.php"
                    class="list-group-item list-group-item-action bg-transparent w-75 second-text m-auto pb-0 aside-bar-links ">
                    <i class="bi bi-house"></i> Home</a>
                <a href="Course.php"
                    class="list-group-item list-group-item-action bg-transparent w-75 second-text m-auto pb-0 aside-bar-links ">
                    <i class="bi bi-bookmark"></i> Course</a>
                <a href="Student.php"
                    class="list-group-item list-group-item-action  bg-transparent w-75 second-text m-auto pb-0 aside-bar-links ">
                    <i class="bi bi-mortarboard"></i>Students</a>
                <a href="payment.php"
                    class="list-group-item list-group-item-action bg-transparent w-75 second-text m-auto pb-0 aside-bar-links ">
                    <i class="bi bi-wallet"></i> Payment</a>
                <a href="#"
                    class="list-group-item list-group-item-action  bg-transparent w-75 second-text m-auto pb-0 aside-bar-links ">
                    <i class="bi bi-file-earmark"></i> Report</a>
                <a href="#"
                    class="list-group-item list-group-item-action bg-transparent w-75 second-text m-auto  aside-bar-links ">
                    <i class="bi bi-sliders"></i> Settings</a>
                    <a href="logout.php" class="list-group-item list-group-item-action bg-transparent pt-0 ms-5   second-text ">
                    Logout <i class="bi bi-box-arrow-in-right"></i></a>
            </div>
        </div>
        <!--     end  Sidebar       -->
