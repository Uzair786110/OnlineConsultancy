<?php
 include('Include/Header.php');
 include('Include/Connection.php');
 $status = session_status();
if($status == PHP_SESSION_NONE)
{
 
   session_start(); 
   
 } 
 if(isset($_SESSION['id']))
   { 
     $userid=$_SESSION['id'];
    $Registration_query="select * from registration where registration.P_id = '$userid'";
    $query = mysqli_query($con,$Registration_query);
    $fetch = mysqli_fetch_array($query);
   }
 
 

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

                    <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item  active"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
 
    <!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Contact us</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row d-flex contact-info mb-5">
      <div class="col-md-6 col-lg-3 d-flex ftco-animate">
       <div class="align-self-stretch box p-4 text-center bg-light">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="flaticon-flag"></span>
       </div>
       <h3 class="mb-4">Address</h3>
       <p>198 West 21th Street, Suite 721 New York NY 10016</p>
     </div>
   </div>
   <div class="col-md-6 col-lg-3 d-flex ftco-animate">
     <div class="align-self-stretch box p-4 text-center bg-light">
      <div class="icon d-flex align-items-center justify-content-center">
       <span class="flaticon-phone-call"></span>
     </div>
     <h3 class="mb-4">Contact Number</h3>
     <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
   </div>
 </div>
 <div class="col-md-6 col-lg-3 d-flex ftco-animate">
   <div class="align-self-stretch box p-4 text-center bg-light">
    <div class="icon d-flex align-items-center justify-content-center">
     <span class="flaticon-paper-plane"></span>
   </div>
   <h3 class="mb-4">Email Address</h3>
   <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
 </div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
 <div class="align-self-stretch box p-4 text-center bg-light">
  <div class="icon d-flex align-items-center justify-content-center">
   <span class="flaticon-world-wide-web-on-grid"></span>
 </div>
 <h3 class="mb-4">Website</h3>
 <p><a href="#">yoursite.com</a></p>
</div>
</div>
</div>
<div class="row no-gutters block-9">
  <div class="col-md-6 order-md-last d-flex">

    <form action="" class="bg-light p-5 contact-form" method="POST">
      <div class="form-group">
        <input type="text" name="Name" class="form-control" placeholder="Your Name" value="<?php echo $fetch['Name'] ?? null?>" required>
      </div>
      <div class="form-group">
        <input type="email" name="Email" class="form-control" placeholder="Your Email" value="<?php echo $fetch['Email'] ?? null?>"  required>
      </div>
      <div class="form-group">
        <input type="text" name="Subject" class="form-control" placeholder="Subject"  required>
      </div>
      <div class="form-group">
        <textarea name="Message" id="" cols="30" rows="7" class="form-control" placeholder="Message"  required></textarea>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
      </div>
    </form>
    <?php
     if(isset($_POST['submit']))
     {
       $Name=$_POST['Name'];
       $Email=$_POST['Email'];
       $Subject=$_POST['Subject'];
       $Message=$_POST['Message'];

       $sql_query ="INSERT INTO `Contactus_form` (`id`, `Name`, `Email`, `Subject`, `Message`) VALUES (NULL, '$Name', '$Email', '$Subject', '$Message')";

       if(mysqli_query($con,$sql_query))
       {
        // echo "<p class='alert alert-success'>Data inserted!</p>";
        echo '<script language="javascript">';
        echo 'alert("Data inserted! successfully")';
        echo '</script>';
       }
       else{
        echo '<script language="javascript">';
        echo 'alert("Data Not inserted! Error")';
        echo '</script>';
         }
       


     }

    ?>
    
  </div>

  <div class="col-md-6 d-flex">
  
   <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.019744621455!2d67.07241709157033!3d24.863175222597853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33ea3dcaf47d9%3A0xe7ec8bb05b628158!2sFranchise+Support+Office+-+Aptech+Learning!5e0!3m2!1sen!2s!4v1544818060464" width="500" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>




</div><!--map-->
   </div>
 </div>
</div>
</div>
</section>

<?php
 include('Include/Footer.php');
?>