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
                   
                    <div class="col-sm-12 col-8 text-right m-b-30">
                        <div class="btn-group btn-group-sm">
                        <div class=" text-right">
                <input class="btn btn-primary btn-rounded " action="action"onclick="window.history.go(-1); return false;"type="submit" value="Go Back to previous page" />
                        
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
           

<?php
 include('Include/admin_Footer.php');
 ?>