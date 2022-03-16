<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
 
	 session_start(); 
 } 
 if(!isset($_SESSION['id']))
 {
	header('location:Login.php');
 }
 include('Include/Connection.php');
 include('Include/Header.php');

?>
 <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                    <li  class="dropdown">
  <button class="dropbtn nav-item " style="background:#fff;color:#299adc;">Patient Portal</button>
  <div class="dropdown-content nav-item nav-link">
    <a href="Health.php">Ask Query</a>
    <a href="GetSolution.php">My Queries</a>
    <a href="Medical_History.php">Medical History</a>
    <a href="Appointment.php">Make Appointment</a>
  </div>
  </li>
                    <li class="nav-item"><a href="doctors.php" class="nav-link">Doctors</a></li>
                    <li class="nav-item"><a href="department.php" class="nav-link">Departments</a></li>

                    <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

<div class="container">
			<div class="row d-flex">
				<div class="col-md-7 py-5">
					<div class="py-lg-5">
						<div class="row justify-content-center pb-5">
							<div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-3">Ask Your Query <span>Here</span></h2>
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
						<?php echo isset($_GET['id'])? '<h3>Update Your Query</h3>' : '<h3>Ask Your Query</h3>' ;
						if(isset($_GET['id']))
						{
						$id=$_GET['id'];
						$query=mysqli_query($con,"select * from health_details where H_id = '$id' ");
						 $fetch = mysqli_fetch_array($query);
						}
						 ?>
							<div class="">
							<div class="form-group">
									<input type="text" class="form-control" placeholder="Symptoms" name="Symptoms" value="<?php echo $fetch['Symptoms'] ?? null?>" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Disease" name="Disease" value="<?php echo $fetch['Desease'] ?? null?>" required>
								</div>
							</div>
							
							<div class="">
								<div class="form-group">
									<textarea name="Query" id="" cols="30" rows="6" class="form-control" placeholder="Type your health Details" value="<?php echo $fetch['Comments'] ?? null?>" required></textarea>
								</div>
								<div class="form-group">
									<textarea name="Mental_Condition" id="" cols="30" rows="6" class="form-control" data-error="Write your message" required placeholder="Type your Mental Condition Here" value="<?php echo $fetch['Mental_Condition'] ?? null?>"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" value="Submit" name="submit" class="btn btn-secondary py-3 px-4">
								</div>
							</div>
						</form>
                        <?php
                       
                            if(isset($_POST['submit']))
                            {
                    $pateint_id=$_SESSION['id'];
                    $Symptoms=$_POST['Symptoms'];
                     $Disease=$_POST['Disease'];
					 $Query=$_POST['Query'];
					 $Mental_Condition=$_POST['Mental_Condition'];
                       if(empty($Symptoms)||empty($Disease)||empty($Query)||empty($Mental_Condition))
                {
                    echo '<script language="javascript">';
                    echo 'alert("Please Fill the fields")';
                    echo '</script>';
                    }
                    else{
						if(isset($_GET['id']))
						{
							// Update query
							$sql_query = "UPDATE health_details SET  `Symptoms`='$Symptoms', `Desease` = '$Disease', `Comments` = '$Query', `Mental_Condition` = '$Mental_Condition' Where `H_id` = '$id'";
						
						}
					else{
                       $sql_query = "INSERT INTO `health_details` (`H_id`, `P_id`, `Symptoms`, `Desease`, `Comments`,`Mental_Condition`) VALUES (NULL, '$pateint_id', '$Symptoms', '$Disease', '$Query','$Mental_Condition') ";
					}
					   if(mysqli_query($con,$sql_query))
                 {
					 ?>
                  
				  <script type="text/javascript">
				alert("We will Review Your Query");
				window.location.href = "index.php";
				</script>
					 <?php
                 }
                 else{
					 ?>
                    <script language="javascript">
                    alert("Data not inserted! Error")
                    </script>
				   <?php
				     }
                  
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