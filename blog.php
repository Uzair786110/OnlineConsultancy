  
<?php
 include('Include/Header.php');
 include('Include/Connection.php');
 $query = mysqli_query($con,'select * from blogs');
?>
 <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
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

                    <li class="nav-item active"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
<!-- END nav -->

<div class="container" style="margin-top: 50px;">
            <div class="content">
                <div class="row">
                    <div class="col-sm-8 col-4">
                        <h4 class="page-title">Blog</h4>
                    </div>
                    <div class="col-sm-4 col-8 text-right m-b-30">
                        <a class="btn btn-primary btn-rounded float-right" href="index.php"><i class="fa fa-home back-icon"></i> Back to Home</a>
                    </div>
                </div>
                <div class="row">
                <?php
	            while($fetch = mysqli_fetch_array($query))
                {
                    ?>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="blog_view.php?id=<?php echo $fetch['Blog_id']?>"><img class="img-fluid" src="uploads/<?php echo $fetch['Image']?>" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog_view.php?id=<?php echo $fetch['Blog_id']?>"><?php echo $fetch['Title']?></a></h3>
                                <p><?php echo $fetch['Tagline']?></p>
                                <a href="blog_view.php?id=<?php echo $fetch['Blog_id']?>" class="read-more"><i class="fa fa-long-arrow-right"></i> Read More</a>
                                <div class="blog-info clearfix">
                                    <div class="post-left">
                                        <ul>
                                            <li><a href="#."><i class="fa fa-user-o"></i> <span>Written By :<?php echo $fetch['Author_Name']?></span></a></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                     </div>
        </div>
    </div>
    
  
<?php
 include('Include/Footer.php');
?>