<?php
 include('Include/Header.php');
 include('Include/Connection.php');
?>

<div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                    <li  class="dropdown">
  <button class="dropbtn nav-item">Patient Portal</button>
  <div class="dropdown-content nav-item nav-link">
    <a href="Health.php">Ask Query</a>
    <a href="GetSolution.php">My Queries</a>
    <a href="Medical_History.php">Medical History</a>
    <a href="Appointment.php">Make Appointment</a>
  </div>
  </li>
                    <li class="nav-item  active"><a href="doctors.php" class="nav-link">Doctors</a></li>
                    <li class="nav-item"><a href="department.php" class="nav-link">Departments</a></li>

                    <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


   <div class="container" style="margin-top:30px;margin-bottom:30px">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">Doctor Details</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="doctors.php" class="btn btn-primary btn-rounded"><i class="fa fa-chevron-left"></i> Back</a>
                    </div>
                </div>
                <?php
                if(isset($_GET['id']))
						{
						$id=$_GET['id'];
						$query=mysqli_query($con,"select * from doctor where D_id = '$id' ");
						 $fetch = mysqli_fetch_array($query);
                        }
                        
                ?>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="uploads/<?php echo $fetch['Image']?>" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $fetch['Name']?></h3>
                                                <small class="text-muted"><?php echo $fetch['Specialization']?></small>
                                                <div class="staff-id">Member Since:<br/><?php echo $fetch['Date_time']?></div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><?php echo $fetch['Phone']?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><?php echo $fetch['Email']?>	</span>
                                                </li>
                                                <li>
                                                    <span class="title">Birthday:</span>
                                                    <span class="text"><?php echo $fetch['Date of Birth']?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"><?php echo $fetch['Address']?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text"><?php echo $fetch['Gender']?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h3 class="card-title">Details</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content" style="color:#000;font-size:20px">
                                            <span class="name">Qualification:</span>
                                             <span class="time" style="font-size:16px"><?php echo $fetch['Qualification']?></span>
                                             <span class="name" >Specialization:</span>
                                             <span class="time" style="font-size:16px"><?php echo $fetch['Specialization']?></span>
                                             <span class="name" >Experience:</span>
                                             <span class="time" style="font-size:16px"><?php echo $fetch['Experiance']?> Years</span>
                                               
                                            </div>
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="card-box mb-0">
                            <h3 class="card-title">Short Description</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name"><?php echo $fetch['Description']?></a>
                                                <!-- <span class="time">Jan 2014 - Present (4 years 8 months)</span> -->
                                            </div>
                                        </div>
                                    </li>
                                   
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div> </div>
              
				
            <?php
 include('Include/Footer.php');
 ?>