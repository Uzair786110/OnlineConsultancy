<?php
 include('Include/admin_Header.php');
 include('Include/Connection.php');
 $id=$_GET['id'];
 $query = mysqli_query($con,"select * from blogs where Blog_id='$id'");
 $fetch = mysqli_fetch_array($query);

 
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
						
                         <li >
                            <a href="admin_doctor.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li >
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
                        <li class="submenu active">
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
						
                        
                        <li  >
                            <a href="admin_users.php"><i class="fa fa-wheelchair"></i> <span>Registered Users</span></a>
                        </li>
                        <li>
                            <a href="admin_appointment.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li >
                            <a href="admin_querylist.php"><i class="fa fa-comments"></i> <span>Reply Queries</span></a>
                        </li>
                        <li>
                            <a href="admin_reply.php"><i class="fa fa-comments"></i> <span>View all Queries</span></a>
                        </li>
                        <li class="submenu active">
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
                        <h4 class="page-title">Blogs</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                    <input class="btn btn-primary btn-rounded " action="action"onclick="window.history.go(-1); return false;"type="submit" value="Go Back to previous page" />
                    </div>
                </div>
                <div class="row">
              
                    <div class="col-md-12">
                        <div class="blog-view">
                            <article class="blog blog-single-post">
                                <h3 class="blog-title"><?php echo $fetch['Title']?></h3>
                                <div class="blog-info clearfix">
                                    <div class="post-left">
                                        <ul>
                                            
                                            <li><a href="#."><i class="fa fa-user-o"></i> <span>Written By: <?php echo $fetch['Author_Name']?></span></a></li>
                                        </ul>
                                    </div>
                                   
                                </div>
                                <div class="blog-image">
                                    <a href="#."><img alt="" src="uploads/<?php echo $fetch['Image']?>" class="img-fluid"></a>
                                </div>
                                <div class="blog-content">
                               <i> <b><?php echo $fetch['Tagline']?></b></i>
                               <hr/>
                                <?php echo $fetch['Blog']?>
                                </article>
                                </div>
                          </div>
                       
                     </div>
                     </div>
                     </div>
                           
                     <?php
 include('Include/admin_Footer.php');
?>