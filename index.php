<?php
 include('Include/Header.php');
 
?>
  <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
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
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <!-- END nav -->
		<section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
				<div class="col-lg-6 ftco-animate">
					<div class="mt-5">
						<h1 class="mb-4">The Most Valuable Thing is Your Health</h1>
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
						<div class="row">
							<div class="col-md-7 col-lg-10">
								<form action="Health.php" class="appointment-form-intro ftco-animate">
									<div class="d-flex">
										<div class="form-group">
											<div class="form-field">
												<div class="select-wrap">
													
											</div>
										</div>
										<div class="form-group">
										<input type="submit" name="Appointment" value="Get Consultancy" class="btn-custom form-control py-3 px-4" style="font-size: larger;">
										
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
		
	</section>

	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img w-100 d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
					<div class="py-md-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
								<h2 class="mb-4">We Are <span>Medex</span> A Healthcare Provider</h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								<p><a href="Appointment.php" class="btn btn-primary py-3 px-4">Make an appointment</a> <a href="Contact.php" class="btn btn-secondary py-3 px-4">Contact us</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-intro img" style="background-image: url(images/bg_3.jpg); height:auto;">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-7">
					<h2>Your Health is Our Priority</h2>
					<p>We can manage your dream building A small river named Duden flows by their place</p>
					<p class="mb-0"><a href="Appointment.php" class="btn btn-white px-4 py-3">Make An Appointment</a></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Medex <span>Department</span></h2>
				</div>
			</div>
			<div class="row tabulation mt-4 ftco-animate">
				<div class="col-md-3">
					<ul class="nav nav-pills nav-fill d-block w-100">
						<li class="nav-item text-left">
							<a class="nav-link active d-flex align-items-centere py-4" data-toggle="tab" href="#services-1"><span class="flaticon-health flaticon mr-3"></span> <span>Neurology</span></a>
						</li>
						<li class="nav-item text-left">
							<a class="nav-link py-4 d-flex align-items-center" data-toggle="tab" href="#services-2"><span class="flaticon-health flaticon mr-3"></span> <span>Ophthalmology</span></a>
						</li>
						<li class="nav-item text-left">
							<a class="nav-link py-4 d-flex align-items-center" data-toggle="tab" href="#services-3"><span class="flaticon-health flaticon mr-3"></span> <span>Nuclear Magnetic</span></a>
						</li>
						<li class="nav-item text-left">
							<a class="nav-link py-4 d-flex align-items-center" data-toggle="tab" href="#services-4"><span class="flaticon-health flaticon mr-3"></span> <span>X-ray</span></a>
						</li>
						<li class="nav-item text-left">
							<a class="nav-link py-4 d-flex align-items-center" data-toggle="tab" href="#services-5"><span class="flaticon-health flaticon mr-3"></span> <span>Surgical</span></a>
						</li>
						<li class="nav-item text-left">
							<a class="nav-link d-flex align-items-centerm py-4" data-toggle="tab" href="#services-6"><span class="flaticon-health flaticon mr-3"></span> <span>Cardiology</span></a>
						</li>
						<li class="nav-item text-left">
							<a class="nav-link d-flex align-items-centerm py-4" data-toggle="tab" href="#services-7"><span class="flaticon-health flaticon mr-3"></span> <span>Dental Clinic</span></a>
						</li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="tab-content pt-4 pt-md-0 pl-md-3">
						<div class="tab-pane container p-0 active" id="services-1">
							<div class="row">
								<div class="col-md-5 img" style="background-image: url(images/dept-1.jpg);"></div>
								<div class="col-md-7 text pl-md-4">
									<h3><a href="#">Neurology</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
									<ul>
										<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
										<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
										<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
										<li><span class="fa fa-check"></span>She packed her seven versalia</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane container p-0 fade" id="services-2">
							<div class="row">
								<div class="col-md-5 img" style="background-image: url(images/dept-2.jpg);"></div>
								<div class="col-md-7 text pl-md-4">
									<h3><a href="#">Ophthalmology</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
									<ul>
										<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
										<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
										<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
										<li><span class="fa fa-check"></span>She packed her seven versalia</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane container p-0 fade" id="services-3">
							<div class="row">
								<div class="col-md-5 img" style="background-image: url(images/dept-3.jpg);"></div>
								<div class="col-md-7 text pl-md-4">
									<h3><a href="#">Nuclear Magnetic</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
									<ul>
										<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
										<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
										<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
										<li><span class="fa fa-check"></span>She packed her seven versalia</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane container p-0 fade" id="services-4">
							<div class="row">
								<div class="col-md-5 img" style="background-image: url(images/dept-4.jpg);"></div>
								<div class="col-md-7 text pl-md-4">
									<h3><a href="#">X-Ray</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
									<ul>
										<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
										<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
										<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
										<li><span class="fa fa-check"></span>She packed her seven versalia</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane container p-0 fade" id="services-5">
							<div class="row">
								<div class="col-md-5 img" style="background-image: url(images/dept-5.jpg);"></div>
								<div class="col-md-7 text pl-md-4">
									<h3><a href="#">Surgical</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
									<ul>
										<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
										<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
										<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
										<li><span class="fa fa-check"></span>She packed her seven versalia</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane container p-0 fade" id="services-6">
							<div class="row">
								<div class="col-md-5 img" style="background-image: url(images/dept-6.jpg);"></div>
								<div class="col-md-7 text pl-md-4">
									<h3><a href="#">Cardiology</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
									<ul>
										<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
										<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
										<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
										<li><span class="fa fa-check"></span>She packed her seven versalia</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane container p-0 fade" id="services-7">
							<div class="row">
								<div class="col-md-5 img" style="background-image: url(images/dept-7.jpg);"></div>
								<div class="col-md-7 text pl-md-4">
									<h3><a href="#">Dental Clinic</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
									<ul>
										<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
										<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
										<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
										<li><span class="fa fa-check"></span>She packed her seven versalia</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container-fluid px-5">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Our Qualified Doctors</h2>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/doc-1.jpg);"></div>
						</div>
						<div class="text text-center">
							<h3 class="mb-2">Dr. Lloyd Wilson</h3>
							<span class="position mb-2">Neurologist</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/doc-2.jpg);"></div>
						</div>
						<div class="text text-center">
							<h3 class="mb-2">Dr. Rachel Parker</h3>
							<span class="position mb-2">Ophthalmologist</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/doc-3.jpg);"></div>
						</div>
						<div class="text text-center">
							<h3 class="mb-2">Dr. Ian Smith</h3>
							<span class="position mb-2">Dentist</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/doc-4.jpg);"></div>
						</div>
						<div class="text text-center">
							<h3 class="mb-2">Dr. Alicia Henderson</h3>
							<span class="position mb-2">Pediatrician</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-facts img ftco-counter" style="background-image: url(images/bg_3.jpg); height:auto;">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 p-4">
						<div class="text">
							<strong class="number" data-number="30">0</strong>
							<span>Years of Experienced</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 p-4">
						<div class="text">
							<strong class="number" data-number="4500">0</strong>
							<span>Happy Patients</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 p-4">
						<div class="text">
							<strong class="number" data-number="84">0</strong>
							<span>Number of Doctors</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 p-4">
						<div class="text">
							<strong class="number" data-number="300">0</strong>
							<span>Number of Staffs</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section bg-light">
		<div class="container-fluid px-md-5">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-10 heading-section text-center ftco-animate">
					<h2 class="mb-4">Latest Blog Updates</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-lg-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="d-flex">
							<div class="meta pt-3 text-right pr-2">
								<div><a href="#"><span class="fa fa-calendar mr-2"></span>Aug. 12, 2020</a></div>
								<div><a href="#"><span class="fa fa-user mr-2"></span>Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a></div>
							</div>
							<div class="text d-block">
								<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
								<p><a href="blog.html" class="btn btn-secondary btn-outline-secondary py-2 px-3">Read more</a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="d-flex">
							<div class="meta pt-3 text-right pr-2">
								<div><a href="#"><span class="fa fa-calendar mr-2"></span>Aug. 12, 2020</a></div>
								<div><a href="#"><span class="fa fa-user mr-2"></span>Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a></div>
							</div>
							<div class="text d-block">
								<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
								<p><a href="blog.html" class="btn btn-secondary btn-outline-secondary py-2 px-3">Read more</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="d-flex">
							<div class="meta pt-3 text-right pr-2">
								<div><a href="#"><span class="fa fa-calendar mr-2"></span>Aug. 12, 2020</a></div>
								<div><a href="#"><span class="fa fa-user mr-2"></span>Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a></div>
							</div>
							<div class="text d-block">
								<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
								<p><a href="blog.html" class="btn btn-secondary btn-outline-secondary py-2 px-3">Read more</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section img" style="background-image: url(images/bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center pb-3">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Read testimonials</span>
					<h2 class="mb-4">Our Patient Says</h2>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap py-4 pb-5 d-flex justify-content-between">
								<div class="user-img" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
									<p class="name">Jeff Freshman</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4 pb-5 d-flex justify-content-between">
								<div class="user-img" style="background-image: url(images/person_2.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
									<p class="name">Jeff Freshman</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4 pb-5 d-flex justify-content-between">
								<div class="user-img" style="background-image: url(images/person_3.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
									<p class="name">Jeff Freshman</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4 pb-5 d-flex justify-content-between">
								<div class="user-img" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
									<p class="name">Jeff Freshman</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4 pb-5 d-flex justify-content-between">
								<div class="user-img" style="background-image: url(images/person_3.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
									<p class="name">Jeff Freshman</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
 include('Include/Footer.php');
?>