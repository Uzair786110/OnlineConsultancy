<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon.ico">
    <title>Medex</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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

    <!-- <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    

</head>
<body>
    <div class="py-1 top">
        <div class="container">
            <div class="row">
                <div class="col-sm text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper align-items-center">
                    <p class="mb-0 w-100">
                        <span class="fa fa-paper-plane"></span>
                        <span class="text">youremail@email.com</span>
                    </p>
                </div>
                <div class="col-sm justify-content-center d-flex mb-md-0 mb-2">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="https://www.facebook.com/aptechsfc/" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-7 d-flex topper align-items-center text-lg-right justify-content-end" style="z-index: 10000000;">
                     <!-- User Not Logged - link to login page-->
                     
              <?php 
              $status = session_status();
              if($status == PHP_SESSION_NONE){
               
                   session_start(); 
               } 
              if(isset($_SESSION['id']))
              {
              ?>
               
             
       
           
            

              <li  class="dropdown ">
  <button class="dropbtn nav-item" style="height: 40px;margin-right:10px;padding: revert;"> <span class="user-img" >
                            <img class="rounded-circle" src="uploads/<?php echo $_SESSION['image'] ?? null?>" width="24" alt="Admin">
                            <span class="status online"></span>
                        </span>
                        <span><?php echo $_SESSION['name'] ?? null?>
               <i class="fa fa-chevron-down"></i></span></button>
                    
  <div class="dropdown-content nav-item nav-link" style="text-align: initial;">
    <a href="View_user.php?id=<?php echo $_SESSION['id']?>">My Profile</a>
    <a href="Registration.php?id=<?php echo $_SESSION['id']?>">Edit Profile</a>
    <a href="view_medicalhistory.php?id=<?php echo $_SESSION['id']?>">My Medical History</a>
    <a href="Logout.php">Logout</a>
  </div>
  </li>
  <?php 
              }else
              {
              ?>
               <button class="dropbtn nav-item"  style="height: 40px;margin-right:10px;padding: inherit; margin:4px;"> 
              <a href="Registration.php" style="color:#fff">Signup</a>
               </button>
               <button class="dropbtn nav-item" style="height: 40px;padding: inherit; margin:4px;"> 
              <a href="Login.php" style="color:#fff">Login</a>
               </button>
            <?php 
              }
              ?>



  
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-3">
        <div class="container">
            <div class="row d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-md-4 d-flex mb-2 mb-md-0">
                    <a class="navbar-brand d-flex align-items-center" href="index.php"><img src="images/logo_dark.png" width="35" height="35" alt=""> <span>Medex</span></a>
                </div>
                <div class="col-md-4 d-flex topper mb-md-0 mb-2 align-items-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fa fa-map"></span>
                    </div>
                    <div class="pr-md-4 pl-md-3 pl-3 text">
                        <p class="con"><span>Free Call</span> <span>+1 234 456 78910</span></p>
                        <p class="con">Call Us Now 24/7 Customer Support</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex topper mb-md-0 align-items-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span>
                    </div>
                    <div class="text pl-3 pl-md-3">
                        <p class="hr"><span>Our Location</span></p>
                        <p class="con">198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
          