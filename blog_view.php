<?php
 include('Include/Header.php');
 include('Include/Connection.php');
 $id=$_GET['id'];
 $query = mysqli_query($con,"select * from blogs where Blog_id='$id'");
 $fetch = mysqli_fetch_array($query);
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

                    <li class="nav-item  active"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Blog View</h4>
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
 include('Include/Footer.php');
?>