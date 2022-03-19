<?php
include 'connectDB.php';
$title="log in";
include 'head.php';

?>

<body class="body">
    <div class="d-flex justify-content-center align-items-center vh-100 ">
        <div class="card " style="width:25rem; border-radius: 15px;">
            <div class="card-body">
                <h3 class="border-start border-4 border-primary ms-5 ps-2">E-classe</h3>
                <h6 class="d-flex justify-content-center text-uppercase "><?php echo $title?></h6>
                <P class="d-flex justify-content-center mt-2 text-secondary">Enter your credentials to access your account </P>

                <form method="POST">
                    <div class="form-group">
                        <?php                      
                        if (isset($_POST['signIn'])) {
                            $Email=$_POST['Email'];
                            $password =$_POST['password'];
                            $rememberme=@$_POST['rememberme'];
                            if(!filter_var($Email,FILTER_VALIDATE_EMAIL))
                            {
                             echo '
                             <div class="alert alert-danger" role="alert">
                             forma email invalid 
                             </div>
                             ';
                            }
                             else{
                            $sql = "SELECT * FROM users WHERE Email='$Email' AND  password='$password';";
                            $res =mysqli_query($con,$sql);
                            $row=mysqli_fetch_array($res);
                            $count=mysqli_num_rows($res);
                            if ($count == 1) {
                                 session_start();                           
                                $_SESSION['Email'] = $Email;
                                $_SESSION['password']=$password;
                                $_SESSION['FirstNam']=$row['FirstName'].'&nbsp;'.$row['LastName'];
                                if($rememberme==1)
                                {
                                    setcookie('Email',$Email,time()+(3600*24));
                                    setcookie('password',$password,time()+(3600*24));
                                }
                                header("location:Student.php");
                            } else {
                                echo '
                                <div class="alert alert-danger" role="alert">
                                Your Login Name or Password is invalid 
                                </div>
                                ';
                            }
                        }
                        }
                        ?>
                        <label>Email</label>
                        <input type="email" class="form-control" id="usrEmail" name="Email" placeholder="Enter you Email "
                        value="<?php if(isset($_COOKIE['Email'])) echo $_COOKIE['Email'];?>">
                    </div>
                    <div class="form-group mt-3">
                        <label>Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password" placeholder="Enter you password "
                        value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>">
                    </div>
                    <div class="form-check mt-3">
                        <input type="checkbox" name="rememberme"  value="1" class="form-check-input" id="Remember">
                        <label>Remember me</label>
                    </div>
                    <button type="submit" class="text-decoration-none btn btn-info container-fluid mt-2  text-uppercase" name="signIn">Log In</button>

                    <div class="d-flex justify-content-center mt-3">
                        <p class="text-secondary">if you don't have acount?<span> <a href="SignUp.php">Create New</a> </span> </p>

                    </div>
                </form>

            </div>
        </div>
    </div>


    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>