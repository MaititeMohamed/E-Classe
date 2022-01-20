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


        <!-- start  Content -->
        <div id="page-content-wrapper" style="background: #ffffff;">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-list primary-text fs-2 me-3" id="menu-toggle"></i>

                    <a class="text-black" href="#"> <i class="bi bi-arrow-left-circle fs-3 ms-4"></i></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <form class="d-flex input-group">
                            <div class="  d-flex align-items-center me-3 rounded border  navb-inp d-flex"
                                style="border :2px solid black">
                                <input type="search" class="form-control rounded border-0 shadow-none"
                                    placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <!--   start search  -->
                                <button class="border-0 bg-transparent " type="submit"><i
                                        class="bi bi-search fs-5 me-1 "></i></button>
                                <!--  end  search  -->
                            </div>

                        </form>
                        <div>
                            <!--   start  notification     -->
                            <button class="border-0 bg-transparent not-but"><i class="bi bi-bell fs-4"></i></button>
                            <!--   end  notification     -->
                        </div>
                    </div>
                </div>


            </nav>
     
            <div class="container-fluid px-4">
                <div class="row g-5 my-2">
                    <div class="col-md-6 col-lg-3">
                        <div class=" p-3  shadow-sm rounded" style="background-color: #F0F9FF;">
                            <div>
                                <i class="bi bi-mortarboard fs-1 text-info"></i>
                                <p class="fs-5 mt-2 text-secondary">Students</p>
                                <div class="d-flex justify-content-end">
                                    <h3 class="fs-2 fw-5 ">720</h3>
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
                                    <h3 class="fs-2 fw-5 ">13</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class=" p-3 shadow-sm rounded payments-c" style="background-color: #FEFBEC;">
                            <div>
                                <i class="bi bi-wallet fs-1  p-3 text-info "></i>
                                <p class="fs-5 mt-2 text-secondary">Payments</p>
                                <div class="d-flex justify-content-end">
                                    <div class="d-flex align-items-center">
                                        <h6 class=" me-1 price">DHS</h6>
                                        <h5 class="fs-2 fw-5 price1 ">556,000</h5>
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
                                    <h3 class="fs-2 fw-5 ">3</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- end  Content -->








    </div>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>