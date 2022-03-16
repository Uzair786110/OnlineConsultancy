<?php
 include('Include/Header.php');
 include('Include/Connection.php');
?>
 <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
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
                    <li class="nav-item"><a href="doctors.php" class="nav-link">Doctors</a></li>
                    <li class="nav-item"><a href="department.php" class="nav-link">Departments</a></li>

                    <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="Container">
            <div class="content" style="margin:50px">
                <div class="row">
                   
                    <div class="col-sm-12 col-8 text-right m-b-30">
                        <div class="btn-group btn-group-sm">
                        <div class=" text-right">
                        <a href="index.php" class="btn btn-primary btn-rounded"><i class="fa fa-chevron-left"></i> Back to Home</a>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="payslip-title"> Complete Medical History</h4>
                            <div class="row">
                                <div class="col-sm-6 m-b-20">
                <?php
                if(isset($_GET['id']))
						{
						$id=$_GET['id'];
						$query=mysqli_query($con,"select * from registration where P_id = '$id' ");
						 $fetch = mysqli_fetch_array($query);
                        }
                        
                ?>
                                    <img src="asset/img/logo-dark.png" class="inv-logo" alt="">
                                    <ul class="list-unstyled mb-0">
                                        <li><?php echo $fetch['Email']?>	</li>
                                        <li><?php echo $fetch['Contact_Number']?></li>
                                        <li><?php echo $fetch['Address']?></li>
                                    </ul>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-lg-12 m-b-20">
                                    <ul class="list-unstyled">
                                        <li>
                                        <h5 class="mb-0"><strong><?php echo $fetch['Name']?></strong></h5></li>
              <?php
           		 $birthDate = $fetch['Date_of_Birth'];
       			 $birthDate = explode("-", $birthDate);
 
				$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
					? ((date("Y") - $birthDate[0]) - 1)
					: (date("Y") - $birthDate[0]));
			?>
                                        <li><span>Age:<?php echo $age?></span></li>
                                        <li>Blood Group: <?php echo $fetch['Blood_Group']?></li>
                                        <li>Member Since: <?php echo $fetch['Date_Time']?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                             <?php
                                    $Medical_query=mysqli_query($con,"select * from medical_history where Relation_id = '$id' ");
                                    $fetch = mysqli_fetch_array($Medical_query);
                            ?>
                                        <h4 class="m-b-10"><strong>History of diseases</strong></h4>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                    <th style="background:#e3e6e3"><strong>Illness</strong> </th>
                                                </tr>
                                                <tr>
                                                    <td style=" padding-left:100px;"><?php echo $fetch['Illness']?></td>
                                                </tr>
                                                <tr>
                                                <tr>
                                                    <th style="background:#e3e6e3"><strong>Allergies</strong> </th>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left:100px;"><?php echo $fetch['Allergies']?></td>
                                                </tr>
                                                <tr>
                                                    <th style="background:#e3e6e3"><strong >Current Medications</strong> </th>
                                                </tr>
                                                <tr>
                                                    <td style=" padding-left:100px;"><?php echo $fetch['Medicines']?></td>
                                                </tr>
                                               
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <h4 class="m-b-10"><strong>Old Treatment</strong></h4>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                    <th style="background:#e3e6e3"><strong>Operation Date</strong> </th>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left:100px;"><?php echo $fetch['Operation_Date']?></td>
                                                </tr>
                                                <tr>
                                                    <th style="background:#e3e6e3"><strong>Operation Details</strong> </th>
                                                </tr>
                                                <tr>
                                                    <td style=" padding-left:100px;"><?php echo $fetch['Operation_Details']?></td>
                                                </tr>
                                                <tr>
                                                    <th style="background:#e3e6e3"><strong>Treatment Details</strong> </th>
                                                </tr>
                                                <tr>
                                                    <td style=" padding-left:100px;"><?php echo $fetch['Treatment']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12"> <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                    <th style="background:#e3e6e3"><strong>Other Details</strong> </th>
                                                </tr>
                                               
                                                <tr>
                                                    <td style=" padding-left:100px;"><?php echo $fetch['Comments']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
           

<?php
 include('Include/Footer.php');
 ?>