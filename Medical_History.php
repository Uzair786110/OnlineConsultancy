<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
 
	 session_start(); 
 } 
 if(!isset($_SESSION['id']))
 {
	header('location:Login.php');

 }
 include('Include/Header.php');
 include('Include/Connection.php');
 $userid=$_SESSION['id'];
 $History_query="select * from medical_history where medical_history.Relation_id = '$userid'";
 $query = mysqli_query($con,$History_query);
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
<script type="text/javascript">
        function ishow() { document.getElementById('illness').style.display = 'block'; }
        function ihide() { document.getElementById('illness').style.display = 'none'; }
        function show() { document.getElementById('Allergies').style.display = 'block'; }
        function hide() { document.getElementById('Allergies').style.display = 'none'; }
		function tshow() { document.getElementById('Treatment').style.display = 'block'; }
        function thide() { document.getElementById('Treatment').style.display = 'none'; }
		function oshow() { document.getElementById('Operation').style.display = 'block'; }
        function ohide() { document.getElementById('Operation').style.display = 'none'; }
      </script>
<div class="container">
			<div class="row d-flex">
				<div class="col-md-7 py-5">
					<div class="py-lg-5">
						<div class="row justify-content-center pb-5">
							<div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-3">Your Complete<span>Medical History</span></h2>
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
									<div class="icon justify-content-center align-items-center d-flex"><span class="fa fa-question"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Ask  Queries</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="fa fa-paper-plane"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Get Solution</h3>
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
							<h2>Medical History</h2>
							<div class="">
              <h3 class="heading mb-3">Do you have any <span style="color:#000">Illness</span>?</h3>
				<fieldset>
					<INPUT TYPE=RADIO name="illness" value="1" required="required" onclick="ishow();"/>Yes
                    <INPUT TYPE=RADIO name="illness" value="0" onclick="ihide();"/>No
                 </fieldset>
                      <div class="form-group">
									<input type="text" class="form-control" id="illness" style="display: none;" name="llness_Details" placeholder="Illness">
								</div>
							</div>
							<div class="">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
                      <h3 class="heading mb-3">Do you have any <span style="color:#000">Allergies</span>?</h3>
                      <fieldset>
						<INPUT TYPE=RADIO name="Allergies" required="required" value="1" onclick="show();"/>Yes
                    	<INPUT TYPE=RADIO  name="Allergies" value="0" onclick="hide();"/>No
                      </fieldset>
                      <div class="form-group">
									<input type="text" class="form-control" id="Allergies"  style="display: none;" NAME="Allergies_Details" placeholder="Allergies">
								</div>
										</div>
									</div>
								</div>
								
							</div>
							<div class="">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
                      <h3 class="heading mb-3">Do you have any <span style="color:#000">Treatment</span>?</h3>
                      <fieldset>
						<INPUT TYPE=RADIO name="Treatment" value="1" required="required" onclick="tshow();"/>Yes
                    	<INPUT TYPE=RADIO  name="Treatment" value="0" onclick="thide();"/>No
                      </fieldset>
                      <div class="form-group">
									<input type="text" class="form-control" id="Treatment" style="display: none;" NAME="Treatment_Details" placeholder="Enter your old Treatment Details">
								</div>
										</div>
									</div>
								</div>
								
							</div>
							<div class="">
              <h3 class="heading mb-3">Do you have any Previous <span style="color:#000">Operations</span>?</h3>
					<fieldset>
						<INPUT TYPE=RADIO name="Operations" required="required" value="1"  onclick="oshow();"/>Yes
                      	<INPUT TYPE=RADIO name="Operations" value="0" onclick="ohide();"/>No
                    </fieldset>
                      <div class="form-group" id="Operation" style="display: none;">
					  <div class="">
								<div class="form-group" >
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-calendar" ></span></div>
										<input type="text" class="form-control appointment_date"  NAME="Operation_Date" placeholder="Operation Date">
									</div>
								</div>
								
									
								
							</div>
							<div class="form-group">
									<input type="text" class="form-control"  NAME="Operation_Details" placeholder="Operation Details">
								</div>
							</div>
							<h3 class="heading mb-3">Which Type of <span style="color:#000">medicines</span> are you currently using?</h3>
							<div class="form-group">
									<input type="text" class="form-control"  NAME="medicine" required="required" placeholder="Medicines">
								</div>
							<div class="">
								<div class="form-group">
                <h3 class="heading mb-3">Type other Comments</h3>
									<textarea id="" cols="30" rows="2" required="required" class="form-control" name="Message" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" value="Submit" name="submit" class="btn btn-secondary py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
				</div></div>
		</div>
  <?php
 if(isset($_POST['submit']))
 {
	$pateint_id=$_SESSION['id'];
	$Illness=$_POST['illness'];
	$Allergies=$_POST['Allergies'];
	$Operation=$_POST['Operations'];
	$Medicines=$_POST['medicine'];
	$Message=$_POST['Message'];
	$Treatment=$_POST['Treatment'];

	
	

	if ($Illness==1)
	{
		$Illness_details=$_POST['llness_Details'];
	}
	else{
		$Illness_details="No Illness";
	}
	if ($Treatment==1)
	{
		$Treatment_details=$_POST['Treatment_Details'];
	}
	else{
		$Treatment_details="No Treatment";
	}

	if ($Allergies==1)
	{
		$Allergies_details=$_POST['Allergies_Details'];
	}
	else{
		$Allergies_details="No Allergies";
	}
	if($Operation==1)
	{
		$Operation_date=$_POST['Operation_Date'];
		$Operation_details=$_POST['Operation_Details'];
	}
	else{
		$Operation_date=null;
		$Operation_details="No Operation";
	}
	
	$Operation_date = date('Y-m-d', strtotime($_POST['Operation_Date']));

	// echo $Illness_details;
	// echo $Allergies_details;
	// echo $Operation_date;
	// echo $Operation_details;
	// echo $Medicines;
	// echo $Message;
	// echo $Treatment_details;

	if(mysqli_num_rows($query)<1)
	{
		$sql_query ="INSERT INTO `medical_history` (`M_ID`, `Relation_id`, `Allergies`, `Illness`,`Treatment`,`Operation_Date`, `Operation_Details`, `Medicines`, `Comments`)
		VALUES (NULL, '$pateint_id', '$Allergies_details', '$Illness_details','$Treatment_details', '$Operation_date', '$Operation_details', '$Medicines', '$Message')";
	}
else{
	$sql_query = "UPDATE medical_history SET  `Allergies`='$Allergies_details', `Illness` = '$Illness_details', `Treatment` = '$Treatment_details', `Operation_Date` = '$Operation_date',
	`Operation_Details` = '$Operation_details',`Medicines` = '$Medicines',`Comments` = '$Message' Where `Relation_id` = '$userid'";
}
	if(mysqli_query($con,$sql_query))
	  {
		 // echo "<p class='alert alert-success'>Data inserted!</p>";
		 echo '<script language="javascript">';
		 echo 'alert("Data inserted! successfully")';
		 echo '</script>';
	  }
	  else{
		 echo '<script language="javascript">';
		 echo 'alert("Data Not inserted! Error")';
		 echo '</script>';
		  }
 }

  ?>
        <?php
 include('Include/Footer.php');
?>
