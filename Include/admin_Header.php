<!DOCTYPE html>
<html lang="en">


<!-- doctors23:12-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon.ico">
    <title>Medex</title>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    
    
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/stye.css">
    <!--[if lt IE 9]>
		<script src="asset/js/html5shiv.min.js"></script>
		<script src="asset/js/respond.min.js"></script>
	<![endif]-->
</head>
<style>
a.disabled {
    pointer-events: none;
}
</style>
<body>
 <div class="main-wrapper">
 
 <?php 
            include('Include/Connection.php');

              $status = session_status();
              if($status == PHP_SESSION_NONE){
               
                   session_start(); 
               } 
            //   if(isset($_SESSION['id']))
            //   {
            //     $userid=$_SESSION['id'];
            //     $Registration_query="select * from registration where registration.P_id = '$userid'";
            //     $query = mysqli_query($con,$Registration_query);
            //     $fetch = mysqli_fetch_array($query);
                
            //   }
              ?>
	 
	 <div class="header">
	 
			<div class="header-left">
				<a href="admin_index.php" class="logo">
					<img src="asset/img/logo.png" width="35" height="35" alt=""> <span>Medex</span>
				</a>
			</div>
			
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
             
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="uploads/<?php echo $_SESSION['image'] ?? null?>" width="24" alt="">
							<span class="status online"></span>
						</span>
						<span><?php echo $_SESSION['name'] ?? null?></span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="admin_doctor_details.php?id=<?php echo  $_SESSION['Doctor_id']?>">My Profile</a>
						<a class="dropdown-item" href="doctor_registration.php?id=<?php echo  $_SESSION['Doctor_id']?>">Edit Profile</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                   