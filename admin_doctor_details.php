<?php
 include('Include/admin_Header.php');
 include('Include/Connection.php');
 if(!isset( $_SESSION['Doctor_id'] ))
 {
	header('location:Login.php');
 }
 $stats=$_SESSION['role'] ;
 if($stats==1)
 {

?>
 <ul>
                        <li class="menu-title">Main</li>
                        <li  >
                            <a href="admin_index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						
                         <li  class="active">
                            <a href="admin_doctor.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li >
                            <a href="admin_users.php"><i class="fa fa-wheelchair"></i> <span>Registered Users</span></a>
                        </li>
                        <li>
                            <a href="admin_appointment.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li>
                            <a href="admin_querylist.php"><i class="fa fa-comments"></i> <span>Reply Queries</span></a>
                        </li>
                        <li>
                            <a href="admin_reply.php"><i class="fa fa-comments"></i> <span>View all Queries</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-commenting-o"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="admin_view_blog.php">Blog</a></li>
                                <li><a href="add_blog.php">Add Blog</a></li>
                            </ul>
                        </li>
						<li>
							<a href="admin_contact.php"><i class="fa fa-edit"></i> <span> Contacts </span> </a>
							
						</li>
                        
                       
                    
                </div>
            </div>
        </div>
 <?php
}  
else
{ ?>
<ul>
                        <li class="menu-title">Main</li>
                        <li  >
                            <a href="admin_index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						
                        
                        <li  >
                            <a href="admin_users.php"><i class="fa fa-wheelchair"></i> <span>Registered Users</span></a>
                        </li>
                        <li>
                            <a href="admin_appointment.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li>
                            <a href="admin_querylist.php"><i class="fa fa-comments"></i> <span>Reply Queries</span></a>
                        </li>
                        <li>
                            <a href="admin_reply.php"><i class="fa fa-comments"></i> <span>View all Queries</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-commenting-o"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="admin_view_blog.php">Blog</a></li>
                                <li><a href="add_blog.php">Add Blog</a></li>
                            </ul>
                        </li>
						
                        
                       
                    
                </div>
            </div>
        </div>
 <?php
}  
 ?>
        <!--End Navbar-->

   <div class="page-wrapper" style="margin-top:30px;margin-bottom:30px">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">Doctor Details</h4>
                    </div>
                    <?php
                if(isset($_GET['id']))
						{
						$id=$_GET['id'];
						$query=mysqli_query($con,"select * from doctor where D_id = '$id' ");
						 $fetch = mysqli_fetch_array($query);
                        }
                        
                ?>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                   
                    
                    
                    <input class="btn btn-primary btn-rounded " action="action"onclick="window.history.go(-1); return false;"type="submit" value="Go Back to previous page" />
                    </div>
                </div>
               
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
                </div>
                
                 <?php
               
  
 include('Include/admin_Footer.php');
 ?>
