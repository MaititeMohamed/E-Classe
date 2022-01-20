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
        <?php
      include 'Sidebar.php'
     ?>
        <!--     end  Sidebar       -->

       <!-- start  Content -->
       <div id="page-content-wrapper" style="background:#e5e5e58f ;">
        
            <!-- start nav -->
            <?php
                 include 'Header.php'
              ?>
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