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
<div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Appointments</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="Admin_add_appointment.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Appointment</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>Appointment ID</th>
										<th>Patient Name</th>
										
										<th>Email</th>
										<th>Department</th>
										<th>Appointment Date</th>
										<th>Appointment Time</th>
										<th>Message</th>
										<?php
										if($stats==1)
										{
										?> 
										<th class="text-right">Action</th>
										<?php
										}
										?>
									</tr>
								</thead>
								<tbody>
									
									<?php
									$query = mysqli_query($con,"SELECT * FROM `appointment`");
									while($fetch = mysqli_fetch_array($query))
            						{
										?>
										<tr>
										<td><?php echo "APT".$fetch['Appointment_id']?></td>
										<td> <?php echo $fetch['Name']?></td>
										
										<td><?php echo $fetch['Email']?></td>
										<td><?php echo $fetch['Service']?></td>
										<td><?php echo $fetch['Date']?></td>
										<td><?php echo $fetch['Time']?></td>
										<td ><?php echo $fetch['Message']?></td>
										<?php
										if($stats==1)
										{
										?> 
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="Admin_add_appointment.php?id=<?php echo $fetch['Appointment_id']?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item delete"href="#delete_appointment" data-href="Admin_appointment.php?id=<?php echo $fetch['Appointment_id']?>" data-toggle="modal" data-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													
												</div>
											</div>
										</td>
										<?php
										}
										?>
									</tr>
									
									<?php
							}
							if(isset($_GET['id']))
							{
								
								$id= $_GET['id'];
								$query = mysqli_query($con, "DELETE from appointment where Appointment_id = '$id'");
								if($query)
								{
									?>
                  
                                    <script type="text/javascript">
                                  alert("Appointment has been Removed");
                                  window.location.href = "admin_appointment.php";
                                  </script>
                                       <?php
								 
								 
								  
								}
								else{
									echo '<script language="javascript">';
								  echo 'alert("Erorr")';
								  echo '</script>';

								}
							}
							
                      ?>
										
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
			<div id="delete_appointment" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center">
							<img src="asset/img/sent.png" alt="" width="50" height="46">
							<h3>Are you sure want to delete Appointment?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<a href="" id='confirm_delete'>	<button type="submit" name="delete" class="btn btn-danger">Delete</button></a>
							</div>
                </div>
            </div>
            <?php
 include('Include/admin_footer.php');
?>
<script>
   $(document).ready(function(){
       $('.delete').click(function(){
           var url=$(this).data('href');
           $('#confirm_delete').attr('href',url);
       });

});
</script>