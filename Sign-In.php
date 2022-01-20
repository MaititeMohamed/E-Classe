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
    <title>Sing in</title>
</head>

<body class="body">

    <div class="d-flex justify-content-center align-items-center vh-100 ">
        <div class="card " style="width:25rem; border-radius: 15px;">
            <div class="card-body">
                <h3 class="border-start border-4 border-primary ms-5 ps-2">E-classe</h3>
                <h6 class="d-flex justify-content-center text-uppercase ">Sign In</h6>
                <P class="d-flex justify-content-center mt-2 text-secondary">Enter your credentials to access your account </P>

                <form action="">
                    <div class="form-group">
                        <label for="usrEmail">Email</label>
                        <input type="email" class="form-control" id="usrEmail" name="Email" required
                            placeholder="Enter you Email ">
                    </div>
                    <div class="form-group mt-3">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password" required
                            placeholder="Enter you password ">
                    </div>
                    <div class="form-check mt-3">
                        <input type="checkbox" class="form-check-input" id="Remember"  >
                        <label >Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-info container-fluid mt-2  text-uppercase">Sign In</button>
                     <div class="d-flex justify-content-center mt-3">
                    <p class="text-secondary">Forgot your password?<span > <a href="#">Reset Password</a> </span> </p>
                    </div>

                </form>
            </div>
        </div>
    </div>












  
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>