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
    <title>Student</title>
    <style>
        
        .table thead th,
        .table td {
            border: none
        }

        .table tbody td:first-child {
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px
        }

        .table tbody td:last-child {
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px
        }
    </style>
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
                <a href="dashboard.php"
                    class="list-group-item list-group-item-action bg-transparent w-75 second-text m-auto  aside-bar-links ">
                    <i class="bi  bi-house "></i> Home</a>
                <a href="#"
                    class="list-group-item list-group-item-action bg-transparent w-75 second-text m-auto  aside-bar-links ">
                    <i class="bi bi-bookmark"></i> Course</a>
                <a href="#"
                    class="list-group-item list-group-item-action active w-75 second-text m-auto  aside-bar-links ">
                    <i class="bi bi-mortarboard"></i> Students</a>
                <a href="payment.php"
                    class="list-group-item list-group-item-action bg-transparent w-75 second-text m-auto  aside-bar-links ">
                    <i class="bi bi-wallet"></i> Payment</a>
                <a href="#"
                    class="list-group-item list-group-item-action bg-transparent w-75 second-text m-auto  aside-bar-links ">
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
       <div id="page-content-wrapper" style="background:#e5e5e58f ;">
        <nav class="navbar navbar-expand-lg bg-white py-4 px-4">
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

            <!-- end nav -->
            <!-- start table -->

            <div class="container-fluid">
                <div class="d-flex justify-content-between  pt-2 border-4 border-bottom ">
                    <h2>Students List</h2>
                   
                    <div  class="d-flex pb-3">
                        <i class="bi bi-chevron-expand fs-3 text-info pe-2 "></i>
                        <button type="button" class="btn btn-primary active border-0  ">ADD NEW STUDENT</button>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr class="text-secondary   " >
                            <th scope="col " "></th>
                            <th scope="col" >Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">phone</th>
                            <th scope="col">Enrol Number</th>
                            <th scope="col">Date of admission</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody class="border-top-0 ">
                     
                        <tr class=" bg-white " >
                            <th scope="row" >
                                <img src="img/pu.jpg" alt="people" width="80">
                            </th>
                            <td >username</td>
                            <td >user@email.com</td>
                            <td >7305477760</td>
                            <td >1234567305477760 </td>
                            <td >08-Dec, 2021</td>
                         <td >
                             
                                <a href="#" ><i class="bi bi-pencil  text-info mx-3"></i></a>
                                <a href="#" ><i class="bi bi-trash text-info "></i></a>
                          
                            </td>
                            
                        </tr>
                        <tr id="spacing-row">
                            <td></td>
                        </tr>
                      
                        <tr class=" bg-white">
                            <th scope="row">
                                <img src="img/pu.jpg" alt="people" width="80">      
                            </th>
                            <td class="align-middle">username</td>
                            <td class="align-middle">user@email.com</td>
                            <td class="align-middle">7305477760</td>
                            <td class="align-middle">1234567305477760 </td>
                            <td class="align-middle">08-Dec, 2021</td>
                            <td class="align-middle">
                                <a href="#"  ><i class="bi bi-pencil  text-info mx-3 vl"></i></a>
                                <a href="#"  ><i class="bi bi-trash text-info "></i></a>
                            </td>
                        </tr>
                        <tr id="spacing-row">
                            <td></td>
                        </tr>
                        <tr class=" bg-white">
                            <th scope="row">
                                <img src="img/pu.jpg" alt="people" width="80">      
                            </th>
                            <td class="align-middle">username</td>
                            <td class="align-middle">user@email.com</td>
                            <td class="align-middle">7305477760</td>
                            <td class="align-middle">1234567305477760 </td>
                            <td class="align-middle">08-Dec, 2021</td>
                            <td class="align-middle">
                                <a href="#"  ><i class="bi bi-pencil  text-info mx-3 vl"></i></a>
                                <a href="#"  ><i class="bi bi-trash text-info "></i></a>
                            </td>
                        </tr>
                          <tr id="spacing-row">
                            <td></td>
                        </tr>
                        <tr class=" bg-white">
                            <th scope="row">
                                <img src="img/pu.jpg" alt="people" width="80">      
                            </th>
                            <td class="align-middle">username</td>
                            <td class="align-middle">user@email.com</td>
                            <td class="align-middle">7305477760</td>
                            <td class="align-middle">1234567305477760 </td>
                            <td class="align-middle">08-Dec, 2021</td>
                            <td class="align-middle">
                                <a href="#"  ><i class="bi bi-pencil  text-info mx-3 vl"></i></a>
                                <a href="#"  ><i class="bi bi-trash text-info "></i></a>
                            </td>
                            <tr id="spacing-row">
                                <td></td>
                            </tr>
                        </tr>
                        <tr class=" bg-white">
                            <th scope="row">
                                <img src="img/pu.jpg" alt="people" width="80">      
                            </th>
                            <td class="align-middle">username</td>
                            <td class="align-middle">user@email.com</td>
                            <td class="align-middle">7305477760</td>
                            <td class="align-middle">1234567305477760 </td>
                            <td class="align-middle">08-Dec, 2021</td>
                            <td class="align-middle">
                                <a href="#"  ><i class="bi bi-pencil  text-info mx-3 vl"></i></a>
                                <a href="#"  ><i class="bi bi-trash text-info "></i></a>
                            </td>
                        </tr>
                        <tr id="spacing-row">
                            <td></td>
                        </tr>
                        <tr class=" bg-white">
                            <th scope="row">
                                <img src="img/pu.jpg" alt="people" width="80">      
                            </th>
                            <td class="align-middle">username</td>
                            <td class="align-middle">user@email.com</td>
                            <td class="align-middle">7305477760</td>
                            <td class="align-middle">1234567305477760 </td>
                            <td class="align-middle">08-Dec, 2021</td>
                            <td class="align-middle">
                                <a href="#"  ><i class="bi bi-pencil  text-info mx-3 vl"></i></a>
                                <a href="#"  ><i class="bi bi-trash text-info "></i></a>
                            </td>
                        </tr>
                        <tr id="spacing-row">
                            <td></td>
                        </tr>
                        <tr class=" bg-white">
                            <th scope="row">
                                <img src="img/pu.jpg" alt="people" width="80">      
                            </th>
                            <td class="align-middle">username</td>
                            <td class="align-middle">user@email.com</td>
                            <td class="align-middle">7305477760</td>
                            <td class="align-middle">1234567305477760 </td>
                            <td class="align-middle">08-Dec, 2021</td>
                            <td class="align-middle">
                                <a href="#"  ><i class="bi bi-pencil  text-info mx-3 vl"></i></a>
                                <a href="#"  ><i class="bi bi-trash text-info "></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>



            </div>


            <!-- end table -->







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