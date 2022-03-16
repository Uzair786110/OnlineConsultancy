<?php
 include('Include/admin_Header.php');
 include('Include/Connection.php');
 $query = mysqli_query($con,'select * from registration');
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
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">USERS</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                    <?php
                    if($stats==1)
                    {
                      ?>  
                    
                        <a href="Registration.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add User</a>
                    <?php
                }
                ?>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
            
									<tr>
										<th>Name</th>
										<th>Phone</th>
										<th>Email</th>
                                        <th>Status</th>
										<th>Details</th>
										<th>Medical History</th>
										<?php
										if($stats==1)
										{
										echo' <th class="text-right">Action</th>';
										}

										?>
									</tr>
								</thead>
								<tbody>
                 <?php
           
                         while($fetch = mysqli_fetch_array($query))
                            {
                ?>
            
									
									<tr>
										<td><img width="28" height="28" src="uploads/<?php echo $fetch['Image']?>" class="rounded-circle m-r-5" alt=""> <?php echo $fetch['Name']?></td>
										<td><?php echo $fetch['Contact_Number']?></td>
                                        <td><?php echo $fetch['Email']?></td>
                                       
                                        <?php
                                         $userstatus=$fetch['status'];
                                        if($userstatus==1)
                                        {
                                        echo '<td><span class="custom-badge status-red">Inactive</span></td>';
                                        }
                                        else{
                                            echo'<td><span class="custom-badge status-green">Active</span></td>';
                                        }
                                        ?>
										<td><a href="admin_viewuser.php?id=<?php echo $fetch['P_id']?>" class="btn btn-primary py-3 px-4">Details</a> </td>
										<td><a href="admin_view_medicalhistory.php?id=<?php echo $fetch['P_id']?>" class="btn btn-primary py-3 px-4">Medical History</a></td>
										<?php
										if($stats==1)
										{
											?>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="Registration.php?id=<?php echo $fetch['P_id']?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item delete"href="#delete_appointment" data-href="admin_users.php?id=<?php echo $fetch['P_id']?>" data-toggle="modal" data-target="#delete_appointment"><i class="fa fa-ban m-r-5"></i> Blocked</a>
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
                               
                                $statuscheck=mysqli_query($con,"SELECT `status` from `registration`  WHERE `registration`.`P_id` = '$id'" );
                                $checkfetch=(mysqli_fetch_array($statuscheck));
                                $check=$checkfetch['status'];
                                if($check==1)

                                {
                                $query = mysqli_query($con, "UPDATE `registration` SET `status` = '0' WHERE `registration`.`P_id` = '$id'");
                                }
                                else
                                {
                                    $query = mysqli_query($con, "UPDATE `registration` SET `status` = '1' WHERE `registration`.`P_id` = '$id'");
                                }
                                
								if($query)
								{
                                    ?>
                  
                                    <script type="text/javascript">
                                  alert("User has been Blocked/Unblockes");
                                  window.location.href = "admin_users.php";
                                  </script>
                                       <?php
								 
								  
								}
								else{
                                    ?>
                  
                                    <script type="text/javascript">
                                  alert("Error");
                                 
                                  </script>
                                       <?php

								}
							}
							
                      ?>
								</tbody>
							</table>
						</div>
					</div>
					<div id="delete_appointment" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center">
							<img src="asset/img/sent.png" alt="" width="50" height="46">
							<h3>Are you sure want to Block or Unblock this User?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<a href="" id='confirm_delete'>	<button type="submit" name="delete" class="btn btn-danger">Block</button></a>
							</div>
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