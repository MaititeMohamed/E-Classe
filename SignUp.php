<?php
include 'connectDB.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page Sign-in to e-clase">
    <meta name="keywords" content="Sign-in E-classe learn course">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign Up</title>
</head>

<body class="body">
    <div class="d-flex justify-content-center align-items-center vh-100 ">
        <div class="card " style="width:25rem; border-radius: 15px;">
            <div class="card-body">
                <h3 class="border-start border-4 border-primary ms-5 ps-2">E-classe</h3>
                <h6 class="d-flex justify-content-center text-uppercase ">Sign Up</h6>
                <P class="d-flex justify-content-center mt-2 text-secondary">Enter your credentials to access your account </P>

                <form method="POST">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="usrEmail" name="Email" placeholder="Enter you Email ">
                    </div>
                    <div class="form-group mt-2">
                        <label>Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password" placeholder="Enter you password ">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="usrEmail" name="Email" placeholder="Enter you Email ">
                    </div>
                    <div class="form-group mt-2">
                        <label>Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password" placeholder="Enter you password ">
                    </div>
                    <div class="form-group mt-2">
                        <label>Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password" placeholder="Enter you password ">
                    </div>
                    
                    <button type="submit" class="text-decoration-none btn btn-info container-fluid mt-2  text-uppercase" name="signIn">Sign In</button>

                    <div class="d-flex justify-content-center mt-2">
                        <p class="text-secondary">if you have acount?<span> <a href="index.php">log in </a> </span> </p>
                    </div>

                </form>
                
            </div>
        </div>
    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>