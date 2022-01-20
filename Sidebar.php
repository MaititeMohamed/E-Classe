<?php
echo '
<!--     start  Sidebar       -->
        <div class=" d-flex flex-column asidebar-C" id="sidebar-wrapper" style="background: #FAFFC1;">
            <div class=" border-start border-5 ms-4 mt-3" style="border-color: #00C1FE !important;">
                <h5 class="card-title fw-bold ms-2">E-classe</h5>
            </div>

            <div class="d-flex flex-column  mt-5">
                <img class="rounded-circle align-self-center" src="img/youcode.jpeg" alt="Youcode" width="100px">
                <h5 class="fw-bold ms-5 mt-3">Admin name</h5>
                <p class="text-info ms-7 fw-bold">Admin</p>
            </div>
            <div class="list-group list-group-flush my-4">
                <a href="#" class="list-group-item list-group-item-action active w-75 second-text m-auto  aside-bar-links ">
                    <i class="bi  bi-house "></i> Home</a>
                <a href="dashboard.php"
                    class="list-group-item list-group-item-action bg-transparent w-75 second-text m-auto  aside-bar-links ">
                    <i class="bi bi-bookmark"></i> Course</a>
                <a href="Student.php"
                    class="list-group-item list-group-item-action  bg-transparent w-75 second-text m-auto  aside-bar-links ">
                    <i class="bi bi-mortarboard"></i> Students</a>
                <a href="payment.php"
                    class="list-group-item list-group-item-action bg-transparent w-75 second-text m-auto  aside-bar-links ">
                    <i class="bi bi-wallet"></i> Payment</a>
                <a href="#"
                    class="list-group-item list-group-item-action  bg-transparent w-75 second-text m-auto  aside-bar-links ">
                    <i class="bi bi-file-earmark"></i> Report</a>
                <a href="#"
                    class="list-group-item list-group-item-action bg-transparent w-75 second-text m-auto  aside-bar-links ">
                    <i class="bi bi-sliders"></i> Settings</a>
            </div>
            <div class="ms-5 mt-6">
                <a href="#" class="list-group-item list-group-item-action bg-transparent  second-text ">
                    Logout <i class="bi bi-box-arrow-in-right"></i></a>
            </div>
        </div>
        <!--     end  Sidebar       -->
        '
?>