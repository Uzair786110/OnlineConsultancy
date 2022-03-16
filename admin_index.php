
<?php
 
 include('Include/admin_Header.php');
 include('Include/Connection.php');
 $doctor_query=mysqli_query($con,"select * from doctor limit 3");
 $doctor_count=mysqli_query($con,"SELECT * FROM doctor") ;
 $doctorcount=mysqli_num_rows($doctor_count);

 $user_query=mysqli_query($con,"select * from registration  ORDER BY `P_id` DESC limit 5");
 $user_count=mysqli_query($con,"SELECT * FROM registration") ;
 $usercount=mysqli_num_rows($user_count);

 $Question_query=mysqli_query($con,"SELECT * FROM `health_details`,`registration` where registration.p_id=health_details.P_id  ORDER BY `H_id` DESC limit 4");
 $Query_count=mysqli_query($con,"SELECT * FROM health_details") ;
 $Querycount=mysqli_num_rows($Query_count);

 $Answer_count=mysqli_query($con,"SELECT * FROM suggestion") ;
 $Answercount=mysqli_num_rows($Answer_count);

 $blog_query=mysqli_query($con,"select * from blogs limit 3");
 $appointment_query=mysqli_query($con,"select * from appointment limit 5");
 $contact_query=mysqli_query($con,"select * from contactus_form limit 3");

 
 $status = session_status();
if($status == PHP_SESSION_NONE){
 
	 session_start(); 
 } 
 
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
                        <li  class="active" >
                            <a href="admin_index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						
                         <li>
                            <a href="admin_doctor.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li>
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
                        <li  class="active" >
                            <a href="admin_index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						
                        
                        <li>
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
 <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3><?php echo $doctorcount ?></h3>
								<span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $usercount ?></h3>
                                <span class="widget-title2">Users <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $Answercount ?></h3>
                                <span class="widget-title3">Attend Queries <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $Querycount-$Answercount ?></h3>
                                <span class="widget-title4">Pending Queries <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
				
					
				</div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Upcoming Queries</h4> <a href="admin_querylist.php" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="d-none">
											<tr>
												<th>Question Id</th>
												<th>Asked By</th>
												<th>Status</th>
												<th class="text-right">Status</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
                                while( $fetch_Question = mysqli_fetch_array($Question_query))
            						{
                                        ?>
											<tr>
										<td><?php echo "Quest".$fetch_Question['H_id']?></td>
										<td><img width="28" height="28" src="Uploads/<?php echo $fetch_Question['Image']?>" class="rounded-circle m-r-5" alt=""> <?php echo $fetch_Question['Name']?></td>
                                        <?php
                                        $Question_Id=$fetch_Question['H_id'];
										$Sugeestion_query="select * from suggestion where  suggestion.Relation_id =  '$Question_Id' ";
										$Solution_query =mysqli_query($con,$Sugeestion_query);
                                        echo (mysqli_num_rows($Solution_query)<1)?
										'<td><a class="custom-badge status-red " href="#"  >Pending </a></td>':'<td><a class="custom-badge status-green " href="#"  >Replied </a>'
										?>
										<td><a href="admin_reply.php?id=<?php echo $fetch_Question['H_id']?>" class="btn btn-primary py-3 px-4" style="display:block">
										<?php
										
										 echo (mysqli_num_rows($Solution_query)<1)? 'Reply' : 'Update' ?></a>
                                     </td>
									</tr>
                                    <?php
                                    }
                                    ?>
											
											
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card member-panel">
							<div class="card-header bg-white">
								<h4 class="card-title mb-0">Doctors</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                <?php
                               
                                while( $fetch_doctor = mysqli_fetch_array($doctor_query))
            						{
                                        ?>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                           
                                       
                                            <a href="admin_doctor_details.php?id=<?php echo $fetch_doctor['D_id'] ?>" title="<?php echo $fetch_doctor['Name'] ?>"><img src="uploads/<?php echo $fetch_doctor['Image'] ?>" alt="" class="w-40 rounded-circle "><span class="status online"></span></a>
                                       
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis"><?php echo $fetch_doctor['Name'] ?></span>
                                                <span class="contact-date"><?php echo $fetch_doctor['Specialization'] ?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="card-footer text-center bg-white">
                            <?php
                            if($stats==1)
                            {
                               echo '<a href="admin_doctor.php"  class="text-muted">View all Doctors</a>';
                            }
                            else{
                                echo '<a href="admin_doctor.php"  class="text-muted disabled">View all Doctors</a>';

                            }
                            ?>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">New User </h4> <a href="admin_users.php" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-block">
								<div class="table-responsive">
									<table class="table mb-0 new-patient-table">
										<tbody>
                                        <?php
                                while( $fetch_user = mysqli_fetch_array($user_query))
            						{
                                        ?>
											<tr>
												<td>
													<img width="28" height="28" class="rounded-circle" src="uploads/<?php echo $fetch_user['Image'] ?>" alt=""> 
													<h2><?php echo $fetch_user['Name'] ?></h2>
												</td>
												<td><?php echo $fetch_user['Email'] ?></td>
                                                <td>
                                                <?php
                                        $userstatus=$fetch_user['status'];
                                        if($userstatus==1)
                                        {
                                        echo '<td><span class="custom-badge status-red">Inactive</span></td>';
                                        }
                                        else{
                                            echo'<td><span class="custom-badge status-green">Active</span></td>';
                                        }
                                        ?>
										</td>
												
											</tr>
											
											<?php
                                    }
                                    ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card member-panel">
							<div class="card-header bg-white">
								<h4 class="card-title mb-0">Doctors</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                <?php
                                while( $fetch_blogs = mysqli_fetch_array($blog_query))
            						{
                                        ?>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="admin_blog_read.php?id=<?php echo $fetch_blogs['Blog_id']?>" ><img src="uploads/<?php echo $fetch_blogs['Image'] ?>" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis"><?php echo $fetch_blogs['Title'] ?></span>
                                                <span class="contact-date"><?php echo $fetch_blogs['Author_Name'] ?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="admin_view_blog.php" class="text-muted">View all Blogs</a>
                            </div>
                        </div>
                    </div>
				</div>
                <div class="row">
					<div class="col-12 col-md-6 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Upcoming Appointments</h4> <a href="admin_appointment.php" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="d-none">
											<tr>
												<th>Appointment Id</th>
												<th>Name</th>
												<th>Service</th>
                                                <th>Date</th>
                                                <th>Time</th>
												<th class="text-right">Status</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
                                while( $fetch_Appointment = mysqli_fetch_array($appointment_query))
            						{
                                        ?>
											<tr>
										<td><?php echo "Apt".$fetch_Appointment['Appointment_id']?></td>
										<td> <?php echo $fetch_Appointment['Name']?></td>
										<td><?php echo $fetch_Appointment['Service']?></td>
                                        <td><?php echo $fetch_Appointment['Date']?></td>
                                        <td><?php echo $fetch_Appointment['Time']?></td>
										
										
									</tr>
                                    <?php
                                    }
                                    ?>
											
											
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                    
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card member-panel">
							<div class="card-header bg-white">
								<h4 class="card-title mb-0">Messages</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                
                                <?php
                                
                                if($stats==1)
                                {
                                  
                                while( $fetch_Mesaage = mysqli_fetch_array($contact_query))
            						{
                                        ?>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="#" title="<?php echo $fetch_Mesaage['Name'] ?>"></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis"><?php echo $fetch_Mesaage['Subject'] ?></span>
                                                <span class="contact-date"><?php echo$fetch_Mesaage['Name'] ?></span>
                                                <span class="contact-date"><?php echo$fetch_Mesaage['Email'] ?></span>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                    }
                                }
                                else
                                {
                                    echo "Only admin can see Messages";
                                }
                                    ?>
                                </ul>
                            </div>
                            <div class="card-footer text-center bg-white">
                            <?php
                    if($stats==1)
                    {
                      ?> 
                                <a href="admin_contact.php" class="text-muted">View all Messages</a>
                                <?php
                                }
                                else
                                {
                             ?>
                                <a href="admin_contact.php" class="text-muted disabled">View all Messages</a>
                             <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
				</div>
				</div>
            </div>
           
<?php
 include('Include/admin_footer.php');
?>