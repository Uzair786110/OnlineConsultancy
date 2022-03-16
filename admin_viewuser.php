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
						
                         <li>
                            <a href="admin_doctor.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li  class="active">
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
						
                        
                        <li  class="active">
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
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">User Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                    <input class="btn btn-primary btn-rounded " action="action"onclick="window.history.go(-1); return false;"type="submit" value="Go Back to Previous Page" />
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
    <p style="float:right"><a href="admin_reply.php?id=<?php echo $fetch['H_id']?>" class="btn btn-primary py-3 px-4">Reply</a></p>
 
    <?php
      }
    
        else{
            while($Sol = mysqli_fetch_array($Solution_query))
        {
          ?>
          <h4>Reply By:<?php echo $Sol['Reply By']?></h4>
            <p style="border: solid;border-color: green;padding: inherit; border-radius: 10px; background: #f5fff8;"><u>Suggestions:</u><br/> <span style="font-weight: 400;"><?php echo $Sol['Suggestion_Details']?></span></p>
            <p style="border: solid;border-color: green;padding: inherit; border-radius: 10px; background: #f5fff8;"><u>Treatment:</u><br/>Treatment Type:<br/><span style="font-weight: 400;"><?php echo $Sol['Treatment_Type']?></span><br/>Details:<br/><span style="font-weight: 400;"><?php echo $Sol['Treatment_Details']?></span></p>
        <?php }
        } ?>
            
            <hr style="height:2px;border-width:0;color:gray;background-color:gray; margin-top:100px;"/>
          
          </div>
         
          
         
          <?php 
          } ?>
          </div>
          </div>
          </div>
          
</section>
                        </div>
                    </div>
                </div>
						</div>
				
            <?php
 include('Include/admin_Footer.php');
 ?>