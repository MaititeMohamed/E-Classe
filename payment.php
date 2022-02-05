<?php
include 'connectDB.php';
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
               <div class="container">
               <div class="table-responsive Tr " style="max-height:400px; ">
             <table class="table  table-striped ">
               <thead >
                
               </thead>
               <tbody class="border-top-0">
                   <tr>
                   <td class="text-secondary p-3">Name</td>
                   <td  class="text-secondary p-3">Payment Schedule</td>
                   <td  class="text-secondary p-3">Bill Number</td>
                   <td  class="text-secondary p-3">Amount Paid</td>
                   <td  class="text-secondary p-3">Balance amount</td>
                   <td  class="text-secondary p-3" colspan="2">Date</td> 
                 
                 </tr>
                 <?php  foreach($res as $pay) :?>
                 <tr>
                     <td class="text-black p-3"><?php echo $pay['Name']; ?></td>
                     <td class="text-black p-3"><?php echo $pay['PaymentSchedule']; ?></td>
                     <td class="text-black p-3"><?php echo $pay['BillNumber']; ?></td>
                     <td class="text-black p-3"><?php echo $pay['AmountPaid'];?></td>
                     <td class="text-black p-3"><?php echo $pay['BalanceAmount']; ?></td>
                     <td class="text-black p-3"><?php echo $pay['Date'];?></td>
                     <td class="p-3"><i class="bi bi-eye text-info"></i></td>
                 </tr>
                
               <?php endforeach ;?>
                
              
             
               </tbody>
             </table>
            </div>
              </div>
                 </div>
        <!-- end  Content -->








    </div>
    
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>

</html>