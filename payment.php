<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page payment for see Payment Details ">
    <meta name="keywords" content="payment Payment Details  ">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
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
     
            <div class="container-fluid">
                <div class="d-flex justify-content-between py-3  border-bottom border-5">
                <h2 class="fw-bold">Payment Details</h2>
                <i class="bi bi-chevron-expand fs-3 text-info"></i>
               </div>
            <div class=" table-responsive">
           <table class="table  table-striped overflow-scroll">
               <thead style="display: none;">
                 <tr >
                   <td scope="col">#</td>
                   <th scope="col">First</th>
                   <th scope="col">Last</th>
                   <th scope="col">Handle</th>
                 </tr>
               </thead>
               <tbody class="border-top-0">
                   <tr>
                   <td scope="row" class="text-secondary p-3">Name</td>
                   <td  class="text-secondary p-3">Payment Schedule</td>
                   <td  class="text-secondary p-3">Bill Number</td>
                   <td  class="text-secondary p-3">Amount Paid</td>
                   <td  class="text-secondary p-3">Balance amount</td>
                   <td  class="text-secondary p-3" colspan="2">Date</td>  
                 </tr>
                 <tr>
                     <td class="text-black p-3">Karthi</td>
                     <td class="text-black p-3">First</td>
                     <td class="text-black p-3">00012223</td>
                     <td class="text-black p-3">DHS 100,000</td>
                     <td class="text-black p-3">DHS 500,000</td>
                     <td class="text-black p-3">05-Jan,2022</td>
                     <td class="p-3"><i class="bi bi-eye text-info"></i></td>
                 </tr>
                 <tr>
                   <td class="text-black p-3">Karthi</td>
                   <td class="text-black p-3">First</td>
                   <td class="text-black p-3">00012223</td>
                   <td class="text-black p-3">DHS 100,000</td>
                   <td class="text-black p-3">DHS 500,000</td>
                   <td class="text-black p-3">05-Jan,2022</td>
                   <td class="p-3"><i class="bi bi-eye text-info"></i></td>
               </tr>
               <tr>
                   <td class="text-black p-3">Karthi</td>
                     <td class="text-black p-3">First</td>
                     <td class="text-black p-3">00012223</td>
                     <td class="text-black p-3">DHS 100,000</td>
                     <td class="text-black p-3">DHS 500,000</td>
                     <td class="text-black p-3">05-Jan,2022</td>
                     <td class="p-3"><i class="bi bi-eye text-info"></i></td>
               </tr>
               <tr>
                   <td class="text-black p-3">Karthi</td>
                   <td class="text-black p-3">First</td>
                   <td class="text-black p-3">00012223</td>
                   <td class="text-black p-3">DHS 100,000</td>
                   <td class="text-black p-3">DHS 500,000</td>
                   <td class="text-black p-3">05-Jan,2022</td>
                   <td class="p-3"><i class="bi bi-eye text-info"></i></td>
               </tr>
               </tbody>
             </table>
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