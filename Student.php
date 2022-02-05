



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

            <div class="container-fluid ">
                <div class="d-flex justify-content-between  pt-2 border-4 border-bottom ">
                    <h2>Students List</h2>
                    <div class="d-flex pb-3">
                        <i class="bi bi-chevron-expand fs-3 text-info pe-2 "></i>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            ADD NEW STUDENT
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">ADD NEW STUDENT</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="container">
                                        <form method="POST">
                                            <!-- Name input -->
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form5Example1">Name</label>
                                                <input type="text" name="Name" class="form-control" />

                                            </div>

                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form5Example2">Email address</label>
                                                <input type="email" name="Email" class="form-control" />

                                            </div>
                                            <!-- phone input -->
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form5Example2">phone</label>
                                                <input type="email" class="form-control" />

                                            </div>
                                            <!-- Enrol Number input -->
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form5Example2">Enrol Number</label>
                                                <input type="email" name="phone" class="form-control" />

                                            </div>
                                            <!-- Submit button -->
                                            <div class=" d-flex  justify-content-center">
                                                <button type="submit" name="save" class="btn btn-info btn-block mb-4">save</button>

                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="table-responsive Tr " style="max-height:400px; ">

                        <table class="table">
                            <thead>
                                <tr class="text-secondary">
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">Enrol Number</th>
                                    <th scope="col">Date of admission</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0 ">
                                <?php $get = file_get_contents("Studentinfo.json");
                                $json = json_decode($get, true);
                                ?>
                                <?php foreach ($json as $v) : ?>

                                    <tr class=" bg-white ">
                                        <th scope="row"> <img src="img/pu.jpg" alt="people" width="80"> </th>
                                        <td class="align-middle"><?php echo $v['Name']; ?></td>
                                        <td class="align-middle"><?php echo $v['Email']; ?></td>
                                        <td class="align-middle"><?php echo $v['Phone']; ?></td>
                                        <td class="align-middle"><?php echo $v['EnrollNumber']; ?></td>
                                        <td class="align-middle"><?php echo $v['Date_addmission']; ?></td>
                                        <td class="align-middle">
                                            <a href="#"><i class="bi bi-pencil  text-info mx-3"></i></a>
                                        </td>
                                        <td class="align-middle"> <a href="#"><i class="bi bi-trash text-info "></i></a></td>
                                    </tr>
                                    <tr id="spacing-row">
                                        <td></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- end table -->


        </div>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/script.js"></script>
</body>

</html>