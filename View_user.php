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
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">User Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="index.php" class="btn btn-primary btn-rounded"><i class="fa fa-chevron-left"></i> Back to Home</a>
                    </div>
                </div>
                <?php
                if(isset($_GET['id']))
						{
						$id=$_GET['id'];
						$query=mysqli_query($con,"select * from registration where P_id = '$id' ");
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
                                                <small class="text-muted">Member Since:</small>
                                                <div class="staff-id"><?php echo $fetch['Date_Time']?></div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><?php echo $fetch['Contact_Number']?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><?php echo $fetch['Email']?>	</span>
                                                </li>
                                                <li>
                                                    <span class="title">Birthday:</span>
                                                    <span class="text"><?php echo $fetch['Date_of_Birth']?></span>
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
                   
                        
                        </div>
                        <div class="card-box mb-0">
                            
                            <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
<div class="col-md-12 heading-section ftco-animate">
         <h2 class="mb-3">Question<span>Asked</span></h2>
       </div>
       <?php
        $Health_query="select * from health_details where health_details.P_id = '$id'";
        $H_query = mysqli_query($con,$Health_query);
        if(mysqli_num_rows($H_query)<1)
        {
        echo "<h4>User did not ask any question</h4>";
        }
        while($fetch = mysqli_fetch_array($H_query))
        {
        ?>
        <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5 " style="font-size: 24px;color: #000;font-weight: bold;">
        <p style="background-color: #f0f4fa; border-radius: 10px;padding-left: inherit; padding: 10px;font-family: monospace">Symptoms:<span style="font-weight: 400;">  <?php echo $fetch['Symptoms']?></span></p>
        <p style="background-color: #f0f4fa; border-radius: 10px;padding-left: inherit; padding: 10px;font-family: monospace">Disease: <span style="font-weight: 400;">  <?php echo $fetch['Desease']?></span></p>
        <p style="background-color: #f0f4fa; border-radius: 10px;padding-left: inherit; padding: 10px;font-family: monospace">Details: <span style="font-weight: 400;"><br/><?php echo $fetch['Comments']?></span></p>
        <p style="background-color: #f0f4fa; border-radius: 10px;padding-left: inherit; padding: 10px;font-family: monospace">Mental Condition: <span style="font-weight: 400;"><br/><?php echo $fetch['Mental_Condition']?></span></p>
    
    <?php
        $Question_Id= $fetch['H_id'];
        $Sugeestion_query="select * from suggestion where  suggestion.Relation_id =  '$Question_Id' ";
        $Solution_query =mysqli_query($con,$Sugeestion_query);
        if(mysqli_num_rows($Solution_query)<1)
        {
    ?>
   
    <hr style="height:2px;border-width:0;color:gray;background-color:gray; margin-top:100px;"/>
    <?php
      }
     else{
    while($Sol = mysqli_fetch_array($Solution_query))
    {
    ?>
    <p style="border: solid;border-color: green;padding: inherit; border-radius: 10px; background: #f5fff8;"><u>Suggestions:</u><br/> <span style="font-weight: 400;"><?php echo $Sol['Suggestion_Details']?></span></p>
    <p style="border: solid;border-color: green;padding: inherit; border-radius: 10px; background: #f5fff8;"><u>Treatment:</u><br/>Treatment Type:<br/><span style="font-weight: 400;"><?php echo $Sol['Treatment_Type']?></span><br/>Details:<br/><span style="font-weight: 400;"><?php echo $Sol['Treatment_Details']?></span></p>
    <?php
     } 
    
     ?>
    
    <hr style="height:2px;border-width:0;color:gray;background-color:gray; margin-top:100px;"/>

       <?php
     }
     } 
     ?>       
              </div>
              
              
</section>
                        </div>
                    </div>
                </div>
						</div>
				
            <?php
 include('Include/Footer.php');
 ?>