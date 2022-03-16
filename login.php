<?php
include('Include/Connection.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon.ico">
    <title>Medex</title>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/mainlogin.css">
<!--===============================================================================================-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action="" class="form-signin" method="POST" >
						<div class="account-logo">
                            <a href="index-2.html"><img src="asset/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
					
                            <label>Enter Your Email</label>
                            <input type="email" required  autofocus="" class="form-control" name="email">
                        
						</div>
                        <div class="form-group">
						
                            <label>Enter Your Password</label>
                            <input type="password" class="form-control" required name="password">
                      
						</div>
                        <div class="form-group text-right">
                            <a href="Forget.php">Forgot your password?</a>
                        </div>
						
                        <div class="form-group text-center container-login100-form-btn m-t-20">
                            <button type="submit" class="btn btn-primary account-btn login100-form-btn" name="login">Login</button>
                        </div>
						<?php
                  if(isset($_POST['login']))
                  {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $check = mysqli_query($con,"select * from `registration` where email = '$email' and password = '$password'");
                    
                    
                    if(mysqli_num_rows($check) == 1)
                    {
						$user = mysqli_fetch_array($check);
                      session_start();
                        $_SESSION['id']         = $user['P_id'];
                        $_SESSION['name']       = $user['Name'];
                        $_SESSION['image']      = $user['Image'];
                        $status                 =$user['status'];
                        if($status==1)
                        {
                            echo '<p class="alert alert-danger">User has been bloked by admin</p>';
                        }
                        else
                        {

                            header('location:index.php');
                        }

                        }
                      
                     
                    
                    else
                    { 
                        $checkdoctor = mysqli_query($con,"select * from `doctor` where Email = '$email' and Password = '$password'");
                    
                    
                        if(mysqli_num_rows($checkdoctor) == 1)
                        {
                            $doctor = mysqli_fetch_array($checkdoctor);
                          session_start();
                            $_SESSION['Doctor_id']   =  $doctor['D_id'];
                            $_SESSION['name']       =  $doctor['Name'];
                            $_SESSION['image']      =  $doctor['Image'];
                            $_SESSION['role']       = $doctor['status'];
                             header('location:admin_index.php');
                       }
                       else {
                 echo '<p class="alert alert-danger">Invalid doctor Email or Password</p>';
                    }
                }
                  }
                ?>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="Registration.php">Register Now</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="asset/js/jquery-3.2.1.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/app.js"></script>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/mainlogin.js"></script>
</body>


<!-- login23:12-->
</html>