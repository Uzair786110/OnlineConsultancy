<?php
include('Include/Connection.php');
if(isset($_GET['id']))
{
        $id=$_GET['id'];
        $query=mysqli_query($con,"select * from registration where `P_id` = '$id'");
        $fetch = mysqli_fetch_array($query);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon.ico">
    <title>Medex</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">


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

	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="asset/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/select2.min.css">

	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fullcalendar.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 



    

</head>
<body>
    
                    
                     
             

	
	
    
	<div class="header">
	 
	 <div class="header-left">
		 <a href="index.php" class="logo">
			 <img src="asset/img/logo.png" width="35" height="35" alt=""> <span>Medex</span>
             
		 </a>
         </div>
         <div class="nav user-menu float-right">
         <button class="dropbtn nav-item" style="height: 50px;margin-right: 50px;"> 
              <a href="Login.php" style="color:#fff">Login</a>
               </button>

          </div>
	 
	 
	 
	 
	 
 </div>
      
    
            <div class="container" style="margin-top:50px;">
		
                <div class="row">
				
                    <div class="col-md-12">
                        <div class="card-box">
						<div class="col-md-12 heading-section">
						<h2 class="mb-3">Registration <span>Form</span></h2>
						<h4 class=""><?php echo isset($_GET['id'])? 'Update Information' : 'Personal Information' ?></h4>
						</div>
                            <form action="#" method="POST"  enctype='multipart/form-data'>
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control" name='F_Name'  required value="<?php echo $fetch['Name'] ?? null?>" pattern="[A-Za-z]{1,32}" >
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control appointment_date" name="DOB" value="<?php echo $fetch['Date_of_Birth'] ?? null?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Blood Group</label>
                                            <span class="text-danger">*</span>
                                            <select  class="select" name="Blood" value="<?php echo $fetch['Blood_Group'] ?? null?>" required>
                                                <option>Select</option>
                                                <option value="A+">A+</option>
												<option value="A-">A-</option>
                                                <option value="O+">O+</option>
												<option value="O-">O-</option>
                                                <option value="B+">B+</option>
												<option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
												<option value="AB-">AB-</option>
                                            </select>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label class="display-block" >Gender:<span class="text-danger">*</span></label>
                                            
											<div class="form-check form-check-inline" >
												<input class="form-check-input" type="radio" name="gender" required="required" id="gender_male" value="Male" <?php if (isset($_GET['id'])){ echo ($fetch['Gender']=='male')? 'Checked':'';}?>>
												<label class="form-check-label" for="gender_male" >Male</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="gender" id="gender_female" value="Female" <?php if (isset($_GET['id'])){ echo ($fetch['Gender']=='Female')? 'Checked':'';}?>>
												<label class="form-check-label" for="gender_female">Female</label>
											</div>
											<div class="form-group">
                                            <label>Address</label>
                                            <span class="text-danger">*</span>
									<textarea name="Address" id="" cols="30" rows="5" class="form-control" placeholder=""  required ><?php echo $fetch['Address']  ?? null?></textarea>
                                        </div>
										
                                       
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control" name="L_Name"  value="<?php echo $fetch['Last_Name'] ?? null?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <span class="text-danger">*</span>
                                            <input type="Email" class="form-control" name="Email" value="<?php echo $fetch['Email'] ?? null?>" required>
                                        </div>
										<div class="form-group">
                                            <label>Contact Number</label>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control" name="Contact"value="<?php echo $fetch['Contact_Number'] ?? null?>"required>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <span class="text-danger">*</span>
                                            <input type="Password" class="form-control" name="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Repeat Password</label>
                                            <span class="text-danger">*</span>
                                            <input type="Password" class="form-control" name="R_password" required>
                                        </div>
										
										
                                    </div>
									
                                </div>
								<div class="form-group">
                                    <label>Insert Image</label>
                                    <span class="text-danger">*</span> 
                                        <input class="form-control" type="file" name="image" value="<?php echo $fetch['Image'] ?? null?>" required>
                                  
                                </div>
                            
                                <div class="text-right">
                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%">Submit</button>
                                </div>
                            </form>
                            <?php
                            if(isset($_POST['submit']))
                            {
                                $FullName=$_POST['F_Name'];
                                $lastName=$_POST['L_Name'];
                                $Date_of_Birth = date('Y-m-d', strtotime($_POST['DOB']));
                                $Email=$_POST['Email'];
                                $contact=$_POST['Contact'];
                                $Address=$_POST['Address'];
                                $Blood=$_POST['Blood'];
                                $Gender=$_POST['gender'];
                                $Password=$_POST["Password"];
                                $Repeat_Pass=$_POST["R_password"];
                                $image_name     = $_FILES['image']['name'];
                                $tmp_image_dir  = $_FILES['image']['tmp_name'];
                                $uploads        = 'Uploads/';


                                if(isset($_GET['id']))
                                {
                                    $check_email=mysqli_query($con,"Select* from registration where `Email`='$Email' and `P_id`='$id'");
                                    $count =  mysqli_num_rows($check_email);
                                            if($count > 0)
                                            {
                                                $value = "update";
                                            }
                                            else
                                            {
                                                $check_another_email = mysqli_query($con,"select * from registration where `Email` = '$Email'");
                                                $count_no =  mysqli_num_rows($check_another_email);
                                                if($count_no > 0)
                                                {   
                                                    $value = "unique";
                                                }
                                            }
                                            $count_on_insert = 0; 
                                }
                                        else
                                        {
                                            $check_email = mysqli_query($con,"select * from registration where `Email` = '$Email'");
                                            $count_on_insert =  mysqli_num_rows($check_email);
                                        }
                                        
                                        if($count_on_insert > 0)
                                        {
                                           ?>
                                           <script language="javascript">
                                            alert("Email Already Exist")
                                            </script>
                                             <?php
                                        }
                                        
                                         if($Password!=$Repeat_Pass)
                                            {
                                                ?>
                                           <script language="javascript">
                                            alert("Password Does not match")
                                            </script>
                                             <?php
                                             
                                            }
                               
                                        //   }
                                    
                                    else{
                                       if(isset($_GET['id']))
                                       {
                                           // Update query
                                    if(move_uploaded_file($tmp_image_dir,$uploads.$image_name))
                                    {
                                        $sql_query = "UPDATE registration SET `Name` = '$FullName', `Last_Name` = '$lastName',`image`='$image_name',`Gender`='$Gender',`Blood_Group`='$Blood', `Date_of_Birth` = '$Date_of_Birth', `Email` = '$Email', 
                                        `Password` = '$Password',`Contact_Number`='$contact',`Address`='$Address' Where `P_id` = '$id'";

                                    }
                                       }
                                       else
                                       {
                                
                                        if(move_uploaded_file($tmp_image_dir,$uploads.$image_name))
                                 {
                                        $sql_query =  " INSERT INTO `registration` (`P_id`, `Name`,`Last_Name`, `Image`, `Date_of_Birth`, `Gender`, `Blood_Group`, `Email`, `Password`, `Contact_Number`, `Address`)
                                         VALUES (NULL, '$FullName','$lastName', '$image_name', '$Date_of_Birth', '$Gender', '$Blood', '$Email', '$Password', '$contact', '$Address')";
                                 }
                                }
                            }
                                    if(mysqli_query($con,$sql_query))
                                    {
                                        ?>
                  
                                <script language="javascript">
                                alert("Your Account Has been created ");
                               
                             
                                </script>
                                <?php
                                    }

                               

                            }

                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
           
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="asset/js/jquery-3.2.1.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.slimscroll.js"></script>
    <script src="asset/js/select2.min.js"></script>
    <script src="asset/js/app.js"></script>

	<script src="js/bootstrap-datepicker.js"></script>

	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#299adc"/></svg></div>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>

		<!-- <script src="assets/js/jquery-3.2.1.min.js"></script>  -->
		<script src="assets/js/jquery.slimscroll.js"></script>
		<script src="assets/js/app.js"></script>
		
		<script src="js/main.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">   </script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>

	
</body>


<!-- form-vertical23:59-->
</html>
