<?php
 include('Include/Header.php');
 include('Include/Connection.php');
 $query = mysqli_query($con,'select * from doctor WHERE `status`=0');
?>
 <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
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

	<!-- END nav -->
	
    <!-- END nav -->
	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-start">
				<div class="col-md-9 ftco-animate pb-5">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Doctors <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-3 bread">Qualified Doctors</h1>
				</div>
			</div>
		</div>
	</section>
	

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
			<?php
	while($fetch = mysqli_fetch_array($query))
                            {
								?>
				<div class="col-md-6 col-lg-3 ftco-animate">
				<a href="doctor_details.php?id=<?php echo $fetch['D_id']?>">	<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(uploads/<?php echo $fetch['Image']?>);"></div>
						</div>
						
					
						<div class="text text-center">
							<h3 class="mb-2"><?php echo $fetch['Name']?></h3>
							<span class="position mb-2"><?php echo $fetch['Specialization']?></span>
							<div class="faded">
								<p><?php echo $fetch['Description']?></p>
								<!-- <ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
								</ul> -->
								
								
							</div>
							
						</div>
					</div>
					</a>
				</div>
				<?php
							}
							?>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
		<div class="container">
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
							
							$status = session_status();
							if($status == PHP_SESSION_NONE){
							 
								 session_start(); 
							 } 
						if(isset($_SESSION['id']))
						{
						$userid=$_SESSION['id'];
						$query=mysqli_query($con,"SELECT * FROM registration where registration.P_id = '$userid'");
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
									<input type="text" class="form-control" placeholder="Phone" name="Phone" value="<?php echo $fetch['Contact_Number'] ?? null?>">
								</div>
							</div>
							<div class="">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-calendar"></span></div>
										<input type="text" class="form-control appointment_date" placeholder="Date" name="Date">
									</div>
								</div>
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-clock-o"></span></div>
										<input type="text" class="form-control appointment_time" placeholder="Time" name="Time">
									</div>
								</div>
							</div>
							<div class="">
								<div class="form-group">
									<textarea name="Message" id="" cols="30" rows="2" class="form-control" placeholder="Message" ></textarea>
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
							$sql_query = "INSERT INTO `Appointment` (`Appointment_id`, `Name`, `Email`, `Phone`, `Service`, `Date`, `Time`, `Message`) VALUES 
							(NULL, '$Name', '$Email', '$Phone', '$Services', '$date', '$Time', '$Message')";
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
 include('Include/Footer.php');
?>