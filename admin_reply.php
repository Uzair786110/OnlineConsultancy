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
						
                         <li >
                            <a href="admin_doctor.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li >
                            <a href="admin_users.php"><i class="fa fa-wheelchair"></i> <span>Registered Users</span></a>
                        </li>
                        <li>
                            <a href="admin_appointment.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li  >
                            <a href="admin_querylist.php"><i class="fa fa-comments"></i> <span>Reply Queries</span></a>
                        </li>
                        <li class="active">
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
						
                        
                        <li  >
                            <a href="admin_users.php"><i class="fa fa-wheelchair"></i> <span>Registered Users</span></a>
                        </li>
                        <li>
                            <a href="admin_appointment.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li  >
                            <a href="admin_querylist.php"><i class="fa fa-comments"></i> <span>Reply Queries</span></a>
                        </li>
                        <li class="active">
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
                    <?php
                        if(isset($_GET['id']))
                            {
                            $id=$_GET['id'];
                            $Health_query="select * from health_details where H_id='$id'";
                            
                     ?>
                
                <?php
                 }
                 else
                         {
                            $Health_query="select * from health_details ";
                         }
                        
 $H_query = mysqli_query($con,$Health_query);
 ?>
            <div class="content">
            
            
               
<div class="col-md-12 heading-section ftco-animate p-4 p-lg-5 " style="font-size: 18px; color: #000; background-color: #f0f4fa;border-radius: 10px; font-weight: bold;  padding: 10px;font-family: monospace">
    <?php            
if(mysqli_num_rows($H_query)<1)
        {
        echo "<h4>User did not ask any question</h4>";
        }
        while($fetch = mysqli_fetch_array($H_query))
        {
            $Asker_id    =    $fetch['P_id'];
            $User_query = mysqli_query($con,"select * from registration where P_id='$Asker_id'");
            $Userfetch = mysqli_fetch_array($User_query)
        ?>
        <h3>Asked By:<?php echo $Userfetch['Name']?> </h3>
        <div class="row text-right " style="">
                    <a href="admin_viewuser.php?id=<?php echo $fetch['P_id']?>" class="btn btn btn-primary btn-rounded float-right" style="font-size: 18px;font-weight: 400;margin:20px; width: 222px;height: 52px;padding: 14px;"><i class="fa fa-user"></i> View User</a>
                    <a href="admin_view_medicalhistory.php?id=<?php echo $fetch['P_id']?>" class="btn btn btn-primary btn-rounded float-right" style="font-size: 18px;font-weight: 400;margin:20px; width: 222px;height: 52px;padding: 14px;"><i class="fa fa-edit"></i> Medical Hisory </a>
          </div>
        <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5 " style="font-size: 24px;color: #000;font-weight: bold;">
        <p style="background-color: #f0f4fa; border-radius: 10px;padding-left: inherit; padding: 10px;font-family: monospace">Symptoms:<span style="font-weight: 400;">  <?php echo $fetch['Symptoms']?></span></p>
        <p style="background-color: #f0f4fa; border-radius: 10px;padding-left: inherit; padding: 10px;font-family: monospace">Disease: <span style="font-weight: 400;">  <?php echo $fetch['Desease']?></span></p>
        <p style="background-color: #f0f4fa; border-radius: 10px;padding-left: inherit; padding: 10px;font-family: monospace">Details: <span style="font-weight: 400;"><br/><?php echo $fetch['Comments']?></span></p>
        <p style="background-color: #f0f4fa; border-radius: 10px;padding-left: inherit; padding: 10px;font-family: monospace">Mental Condition: <span style="font-weight: 400;"><br/><?php echo $fetch['Mental_Condition']?></span></p>
        
    </div>
               
               

    <?php
        $Question_Id= $fetch['H_id'];
        $Sugeestion_query="select * from suggestion where  suggestion.Relation_id =  '$Question_Id' ";
        $Solution_query =mysqli_query($con,$Sugeestion_query);
        $Question_Id=$fetch['H_id'];
        $Sugeestion_query="select * from suggestion where  suggestion.Relation_id =  '$Question_Id' ";
        $Solution_query =mysqli_query($con,$Sugeestion_query);
        $Sol = mysqli_fetch_array($Solution_query);
        {
      
    ?>
     <div class="form-group">
                <form action="" method="POST">
                
                <label>Suggestion</label>
				<textarea name="Suggestions" required id="" cols="30" rows="5" class="form-control" placeholder="Suggestion Details" value=""><?php echo $Sol['Suggestion_Details']??null?></textarea>
				</div>
                <div class="form-group">
                <label>Treatment Type</label>
				<input type="text" name="Treatment_Type" required class="form-control" placeholder="Treatment type" value="<?php echo $Sol['Treatment_Type']??null?>">
				</div>
                <div class="form-group">
                <label>Treatment Details</label>
				<textarea name="Treatment" required id="" cols="30" rows="5" class="form-control" placeholder="Traetment Details" ><?php echo $Sol['Treatment_Details']??null?></textarea>
				</div>
                <div class="form-group">
				<input type="submit" name="submit" value="<?php echo (mysqli_num_rows($Solution_query)<1)? 'Reply' : 'Update' ?>" class="btn btn-secondary py-3 px-4" style="width:100%; font-size:24px">
				</div>
                </form>
                <?php
        }
                if(isset($_POST['submit']))
                {
                    $Suggestion     = $_POST['Suggestions'];
                    $Treatment_Type = $_POST['Treatment_Type'];
                    $Treatment      = $_POST['Treatment'];
                    $Reply          =$_SESSION['name'];

                $Question_Id=$fetch['H_id'];
                $Sugeestion_query="select * from suggestion where  suggestion.Relation_id =  '$Question_Id' ";
                $Solution_query =mysqli_query($con,$Sugeestion_query);
                if(mysqli_num_rows($Solution_query)<1)
                {
                    $sql_query ="INSERT INTO `suggestion` (`S_id`, `Relation_id`,`Reply By`, `Treatment_Type`, `Treatment_Details`, `Suggestion_Details`)
                    VALUES (NULL, ' $Question_Id','$Reply', '$Treatment_Type', '$Treatment', '$Suggestion')";
                }
                else{
                    $id=$_GET['id'];
                    $sql_query ="UPDATE suggestion SET `Reply By`='$Reply',`Treatment_Type` = '$Treatment_Type', `Treatment_Details`='$Treatment',
                    `Suggestion_Details` = '$Suggestion' Where `Relation_id` = '$id'";
                }
                    
                    if(mysqli_query($con,$sql_query))
                      {
                 ?>
                  
                        <script type="text/javascript">
                      alert("Your Answer hasbeen posted");
                      window.location.href = "admin_querylist.php";
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
                    
                

                ?>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray; margin-top:100px;"/>
    <?php
      }
    
   
    
   
     } 
     ?>       
               
 </div>
                
              

                

<?php
 include('Include/admin_Footer.php');
 ?>