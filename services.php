<?php
 include('Include/Header.php');
?>
 <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item  active"><a href="services.php" class="nav-link">Services</a></li>
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
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
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
       <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Services</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
 <div class="container">
  <div class="row d-flex">
   <div class="col-md-7 py-5">
    <div class="py-lg-5">
     <div class="row justify-content-center pb-5">
       <div class="col-md-12 heading-section ftco-animate">
         <h2 class="mb-3">Our <span>Services</span></h2>
       </div>
     </div>
     <div class="row">
      <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
       <div class="media block-6 services d-flex">
         <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
         <div class="media-body pl-md-4">
           <h3 class="heading mb-3">Emergency Help</h3>
           <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
         </div>
       </div>      
     </div>
     <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
       <div class="media block-6 services d-flex">
         <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ophthalmologist"></span></div>
         <div class="media-body pl-md-4">
           <h3 class="heading mb-3">Qualified Doctors</h3>
           <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
         </div>
       </div>      
     </div>
     <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
       <div class="media block-6 services d-flex">
         <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-flag"></span></div>
         <div class="media-body pl-md-4">
           <h3 class="heading mb-3">Location &amp; Directions</h3>
           <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
         </div>
       </div>      
     </div>
     <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
       <div class="media block-6 services d-flex">
         <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
         <div class="media-body pl-md-4">
           <h3 class="heading mb-3">Medical Treatment</h3>
           <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
         </div>
       </div>      
     </div>
   </div>
 </div>
</div>
<div class="col-md-5 d-flex align-items-stretch">
 <div class="img w-100" style="background-image: url(images/about.jpg);"></div>
</div>
</div>

</div>
</section>

<?php
 include('Include/Footer.php');
?>