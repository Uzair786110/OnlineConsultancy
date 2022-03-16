<?php
 include('Include/admin_Header.php');
 include('Include/Connection.php');

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
						 <li  >
							 <a href="admin_index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
						 </li>
						 
						  <li>
							 <a href="admin_doctor.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
						 </li>
						 <li >
							 <a href="admin_users.php"><i class="fa fa-wheelchair"></i> <span>Registered Users</span></a>
						 </li>
						 <li  class="active">
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
						 
						 
						 <li >
							 <a href="admin_users.php"><i class="fa fa-wheelchair"></i> <span>Registered Users</span></a>
						 </li>
						 <li  class="active">
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
			<div class="row d-flex">
				<div class="col-md-7 py-5">
					<div class="py-lg-5">
						<div class="row justify-content-center pb-5">
							<div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-3">Make An <span>Appointment</span></h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Emergency Help</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ophthalmologist"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Qualified Doctors</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-flag"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Location &amp; Directions</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Medical Treatment</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>      
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 d-flex">
					<div class="appointment-wrap p-4 p-lg-5 d-flex align-items-center">
						<form action="#" class="appointment-form ftco-animate" method="POST">
							<h3>Appointment Form</h3>
							<?php
							
						
						if(isset($_GET['id']))
						{
						$userid=$_GET['id'];
						$query=mysqli_query($con,"SELECT * FROM appointment where Appointment_id = '$userid'");
						$fetch = mysqli_fetch_array($query);
						}
						 ?>
							<div class="">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Full Name" name="Name" value="<?php echo $fetch['Name'] ?? null?>">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Email Address" name="Email" value="<?php echo $fetch['Email'] ?? null?>">
								</div>
							</div>
							<div class="">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="Services" id="" class="form-control">
												<option value="">Select Your Services</option>
												<option value="Neurology">Neurology</option>
												<option value="Cardiology">Cardiology</option>
												<option value="Dental">Dental</option>
												<option value="Ophthalmology">Ophthalmology</option>
												<option value="Other Services">Other Services</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Phone" name="Phone" value="<?php echo $fetch['Phone'] ?? null?>">
								</div>
							</div>
							<div class="">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-calendar"></span></div>
										<input type="text" class="form-control appointment_date" placeholder="Date" name="Date" value="<?php echo $fetch['Date'] ?? null?>">
									</div>
								</div>
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-clock-o"></span></div>
										<input type="text" class="form-control appointment_time" placeholder="Time" name="Time" value="<?php echo $fetch['Time'] ?? null?>">
									</div>
								</div>
							</div>
							<div class="">
								<div class="form-group">
									<textarea name="Message" id="" cols="30" rows="2" class="form-control" placeholder="Message" value="" ><?php echo $fetch['Message'] ?? null?></textarea>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
								</div>
							</div>
						</form>
						<?php
						if(isset($_POST['submit']))
						{
							$Name=$_POST['Name'];
							$Email=$_POST['Email'];
							$Services=$_POST['Services'];
							$Phone=$_POST['Phone'];
							$date=date('Y-m-d', strtotime($_POST['Date']));
							$Time=$_POST['Time'];
							$Message=$_POST['Message'];
							if(isset($_GET['id']))
							{
								$sql_query ="UPDATE `appointment` SET `Name` = '$Name', `Email` = '$Email', `Phone` = '$Phone', `Service` = '$Services', 
								`Date` = '$date', `Time` = '$Time', `Message` = '$Message' WHERE `appointment`.`Appointment_id` = $userid;";
							}
							else{
								$sql_query = "INSERT INTO `Appointment` (`Appointment_id`, `Name`, `Email`, `Phone`, `Service`, `Date`, `Time`, `Message`) VALUES 
							(NULL, '$Name', '$Email', '$Phone', '$Services', '$date', '$Time', '$Message')";

							}
							
							if(mysqli_query($con,$sql_query))
							{
								?>
							 
							   <script language="javascript">
								alert("Data inserted! successfully");
								</script>
								<?php
							}
							else{
								?>
							   <script language="javascript">
							   alert("Data not inserted! Error");
							   </script>
							  <?php
								}
							
						}
						?>
					</div>
				</div>
			</div>
		</div>
        <?php
 include('Include/admin_Footer.php');
?>