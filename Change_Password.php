<?php
include('Include/Connection.php');
session_start();
$id=$_SESSION['id'];
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
					
                            <label>Enter Your New Password</label>
                            <input type="Password" required  autofocus="" class="form-control" name="Password">
                        
						</div>
                        <div class="form-group">
						
                            <label>Confirm Your New Password</label>
                            <input type="Password" class="form-control" required name="Repeat_Password">
                      
						</div>
                       
						
                        <div class="form-group text-center container-login100-form-btn m-t-20">
                            <button type="submit" class="btn btn-primary account-btn login100-form-btn" name="submit">Update Password</button>
                        </div>
						<?php
                 
                ?>
                        <div class="text-center register-link">
                             <a href="Login.php">Back To Login</a>
                        </div>
                    </form>
                    <?php
                     if(isset($_POST['submit']))
                     {
                         $pass=$_POST['Password'];
                         $R_pass=$_POST['Repeat_Password'];
                         if($pass!=$R_pass)
                         {
                            echo '<p class="alert alert-danger">Password and Confirm Password does not match</p>';
                         }
                         else{

                            $sql_query =" UPDATE `registration` SET `Password` = '$pass' WHERE `registration`.`P_id` = '$id'";
                         
                         
                         if(mysqli_query($con,$sql_query))
                         {
                            
                             ?>
       
                     <script language="javascript">
                     alert("Password Updated! successfully")
                     </script>
                     <?php
                      header('location:login.php');
                         }
                        }

                   

                     }
                    ?>
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