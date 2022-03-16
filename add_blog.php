<?php
 include('Include/admin_Header.php');
 include('Include/Connection.php');
 if(isset($_GET['id']))
{
        $id=$_GET['id'];
        $query=mysqli_query($con,"select * from blogs where `blog_id` = '$id'");
        $fetch = mysqli_fetch_array($query);
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
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title"><?php echo isset($_GET['id'])? 'Edit Blog' : 'Add Blog' ?></h4>
                    </div>
                </div>
                <div class="row">
               
                    <div class="col-lg-8 offset-lg-2">
                        <form action="#" method="POST" enctype='multipart/form-data'>
                            <div class="form-group">
                                <label>Blog Name</label>
                                <input class="form-control" type="text" required name="title" value="<?php echo $fetch['Title'] ?? null?>">
                            </div>
                            <div class="form-group">
                                <label>Blog Images</label>
                                <div>
                                <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.</small>
                                    <input class="form-control" required  type="file" name="image" value="<?php echo $fetch['Image'] ?? null?>">
                                    
                                </div>
                    
                            </div>
                            <div class="form-group">
                                <label>Tagline </label>
                                <input type="text" placeholder="Enter your tagline" required  data-role="tagsinput" class="form-control"  name="tagline" value="<?php echo $fetch['Tagline'] ?? null?>">
                            </div>
                           
                            <div class="form-group">
                                <label>Blog Description</label>
                                <textarea cols="30" rows="6" class="form-control" required  name="blog"><?php echo $fetch['Blog'] ?? null?></textarea>
                            </div>
                            
                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" type="submit" name ="submit">Publish Blog</button>
                            </div>
                        </form>
                        <?php
                        if(isset($_POST['submit']))
                        {
                            $Title=$_POST['title'];
                            $tagline=$_POST['tagline'];
                            $blog=$_POST['blog'];
                            $Author=$_SESSION['name'];
                            $image_name     = $_FILES['image']['name'];
                            $tmp_image_dir  = $_FILES['image']['tmp_name'];
                            $uploads        = 'Uploads/';

                            if(isset($_GET['id']))
                            {
                                // Update query
                         if(move_uploaded_file($tmp_image_dir,$uploads.$image_name))
                         {
                             $sql_query = "UPDATE `blogs` SET  `Title` = '$Title', `Image` = '$image_name', `Tagline` = '$tagline', `Blog` = '$blog' WHERE `blogs`.`Blog_id`= '$id'";

                         }
                            }
                            else
                            {
                     
                             if(move_uploaded_file($tmp_image_dir,$uploads.$image_name))
                      {
                             $sql_query =  " INSERT INTO `blogs` (`Blog_id`, `Author_Name`, `Title`, `Image`, `Tagline`, `Blog`)
                             
                              VALUES (NULL, '$Author', '$Title', '$image_name', '$tagline', '$blog');";
                      }
                     }
                 
                         if(mysqli_query($con,$sql_query))
                         {
                            
									?>
                  
									<script type="text/javascript">
								  alert("Data Inserted Succecfully");
								  window.location.href = "admin_view_blog.php";
								  </script>
									   <?php
                         }



                        }

                        ?>
                    </div>
                </div>
            </div>
            <?php
 include('Include/admin_Footer.php');
?>