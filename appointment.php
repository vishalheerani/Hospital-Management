<!DOCTYPE html>
<html> 
<head>
	<title> E&T's Hospital | Appointment </title>
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/header.css">
		<link rel="stylesheet" href="assets/css/footer.css">
		<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
		<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
		<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

		<link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
	<div class="wrapper">
	<!--=== Header v1 ===-->
	<div class="header-v1">
	<!-- Topbar -->
	<div class="topbar-v1">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
		<ul class="list-inline top-v1-contacts">
			<li>
				<i class="fa fa-envelope"></i> Email: e&thospital@gmail.com
			</li>
			<li>
				<i class="fa fa-phone"></i> Contact no : +92 333 00xxxxx
			</li>
		</ul>
	</div>
	</div>
	</div>
	</div>

<!-- End Topbar -->

				<!-- Navbar -->
			<div class="navbar mega-menu" role="navigation" style=" height: 17vh;">
				<div class="container">
					<div class="res-container">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<div class="navbar-brand" style=">
							<a href="index.html">
								<img src="assets/img/logo/logo hos.png" alt="Logo" style="height: 14vh; width: 150px;">
							</a>
						</div>
					</div><!--/end responsive container-->

					<!-- nav links -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<div class="res-container">
							<ul class="nav navbar-nav">

								<!-- Collect the nav links, forms, and other content for toggling -->


								<!-- Home  -->
								<li class="mega-menu-fullwidth">
									<a href="index.html">
										<strong>HOME</strong>
									</a>

								</li>
								<!-- End Home-->

								<!-- About Us -->
								<li class="mega-menu-fullwidth">
									<a href="about.html">
										<strong>ABOUT US</strong>
									</a>
								</li>
								<!-- End About us -->

								<!-- Doctors -->
								<li class="mega-menu-fullwidth">
									<a href="doctors.html">
										<strong>DOCTORS</strong>
									</a>

								</li>
								<!-- End Doctors -->
						
								<!-- Contact Us -->
								<li class="mega-menu-fullwidth">
									<a href="contact.html">
										<strong>CONTACT US</strong>
									</a>
								</li>
								<!-- End Contact us -->

								<!-- Registration -->
								<li class="mega-menu-fullwidth">
									<a href="registration.php">
										<strong>REGISTRATION</strong>
									</a>
								</li>
								<!-- End registration -->

								<!-- login -->
								<li class="mega-menu-fullwidth">
									<a href="login.html">
										<strong>BOOK APPOINTMENT</strong>
									</a>
								</li>
								<!-- End login -->

								<!-- Appointment -->
								<!-- <li class="mega-menu-fullwidth">
									<a href="appointment.html">
										<strong>BOOK APPOINTMENT</strong>
									</a>

								</li> -->
								<!-- End Appointment -->

							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Navbar -->




	<!--=== Heading ===-->
	<div class="container content">
	<div class="row " style="margin-bottom: 30px;">
	<div class="col-md-9 " style="margin-bottom: 30px;">
	<div class="headline"><h2>Appointment Form</h2></div>

					<form action="aptmt_backend.php" method="post" class="sky-form sky-changes-3">
				<fieldset>
				<div class="row">
				<section class="col col-6">
				<label for="name" class="label">Name</label>
				<label class="input">
				<i class="icon-append fa fa-user"></i>
				<input type="text" name="name" id="name" required="">
				</label>
				</section>
				<section class="col col-6">
				<label for="email" class="label">E-mail</label>
				<label class="input">
				<i class="icon-append fa fa-envelope-o"></i>
				<input type="email" name="email" id="email" required="">
				</label>
				</section>
				</div>

				<section>
				<label for="subject" class="label">Purpose Of Appointment</label>
				<label class="input">
				<i class="icon-append fa fa-tag"></i>
				<input type="text" name="subject" id="subject" required="">
				</label>
				</section>

				<section>
				<label for="number" class="label">Mobile Number</label>
				<label class="input">
				<i class="icon-append fa fa-phone"></i>
				<input type="text" name="number" id="number" required="">
				</label>
				</section> 	

				<section>
				<label for="Department" class="select">
				<select name="Department" id="Department" required="">
				<option value="" selected="" disabled="">Select Department</option>
				<option value="Child Care">Child Care</option>
				<option value="Neurology">Neurology</option>
				<option value="General Surgery">General Surgery</option>
				<option value="Health Checkup">Health Checkup</option>
				<option value="Dermatology and Cosmetology">Dermatology and Cosmetology</option>
				<option value="Eye Specialist">Eye Specialist</option>
				<option value="CCU & ICU">CCU & ICU</option>
				<option value="Cardiology">Cardiology</option>
				</select>
				<i></i>
				</label>
				</section>
				<div class="row">
				<section class="col col-6">
				<label for="date" class="date">Select Date</label>
				<label class="input">
				<i class="icon-append fa fa-calendar"></i>
				<input name="date" id="date" type="date" required="">
				</label>
				</section>
				<section class="col col-6">
				<label for="time" class="time">Select Time</label>
				<label class="select">
				<select name="time" id="time" required="">
				<option value="" selected="" disabled="">Select Time</option>
				<option value="8 AM - 10 AM">8 AM - 10 AM</option>
				<option value="10 AM - 12 PM">10 AM - 12 PM</option>
				<option value="12 PM - 2 PM">12 PM - 2 PM</option>
				<option value="2 PM - 4 PM">2 PM - 4 PM</option>
				<option value="4 PM - 6 PM">4 PM - 6 PM</option>
				<option value="6 PM - 8 PM">6 PM - 8 PM</option>
				<option value="8 PM - 10 PM">8 PM - 10 PM</option>
				</select>
				<i></i>
				</label>
				</section>
				</div>
				</fieldset>

				<footer>
				<input type="submit" value="Book Appointment" class="btn-u">
				</footer>


				</form>
				</div><!--/col-md-9-->

				<!-- side part of appointment -->
						<div class="col-md-3" style="margin-top: 56px;">
						<!-- Address -->
						<div class="headline"><h2>Appointment Notes</h2></div>
						<p> You Only Can Book Your Appointment Between <strong>8 AM to 10 PM.</strong> </p>
						<p> In Other Times You Can Call Our Ambulance Which Is Available 24/7. </p>

						<!-- Business Hours -->
						<div class="headline" style="margin-top: 20px;"><h2>Business Hours</h2></div>
						<ul class="list-unstyled " style="margin-bottom: 30px;">
						<li><strong>Monday-Saturday:</strong> 24/7 Available.</li>
						<li><strong>Sunday:</strong> 4 AM to 11 PM.</li>
						</ul>

						<!-- Why choose us? -->
						<div class="headline"><h2>Why Choose Us?</h2></div>
						<p>All healthcare facilities can be accessed here under one roof, making UNITY Hospital a one point contact for all your healthcare needs.</p>
						<ul class="list-unstyled">
						<li><i class="fa fa-check color-green"></i> 24/7 Ambulance Support.</li>
						<li><i class="fa fa-check color-green"></i> Eminent and Experienced Doctors.</li>
						<li><i class="fa fa-check color-green"></i> Multiple Options For Treatment.</li>
						</ul>
						</div><!--/col-md-3-->
						</div><!--/row-->
						</div><!--/container-->


		<!--=== Footer ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-5 md-margin-bottom-40">
							<a href="index.html"><img id="logo-footer" class="footer-logo"
								src="assets/img/logo/logo_white.png" alt="" height="120vh"></a>
							<p>At E&T's Hospital, we are convinced that 'quality' and 'lowest cost' are not mutually
								exclusive when it comes to healthcare delivery.</p>
							<p>Our mission is to deliver high quality, affordable healthcare services to the peoples
								of Pakistan.</p>
						</div>

						<!-- Link List -->
						<div class="col-md-3" style="margin-bottom: 40px;">
							<div class="headline">
								<h2>Useful Links</h2>
							</div>
							<ul class="list-unstyled link-list">
								<li><a href="about.html">About us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="Contact.html">Contact us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="appointment.html">Book Appointment</a><i class="fa fa-angle-right"></i>
								</li>
							</ul>
						</div>
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-3 map-img" style="margin-bottom: 40px;">
							<div class="headline">
								<h2>Contact Us</h2>
							</div>
							<address class="md-margin-bottom-40">
							    E&T's Hospital <br />
								Hyderabad, <br />
								Phone: +92 333 00xxxxx <br />
								Email: e&thospital@gmail.com
							</address>
						</div>
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->
		<div class="copyright">
		<div class="container">
		<div class="row">
		<div class="col-md-6">
		<p>
		2020 &copy; All Rights Reserved.
		<a href="privacy.html">Privacy Policy</a> | <a href="terms.html">Terms of Service</a>
		</p>
		</div>

		<!-- Social Links -->
		<div class="col-md-6">
		<ul class="footer-socials list-inline">
		<li>
		<a href="http://www.facebook.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
		<i class="fa fa-facebook"></i>
		</a>
		</li>
		<li>
		<a href="http://www.skype.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
		<i class="fa fa-skype"></i>
		</a>
		</li>
		<li>
		<a href="http://www.googleplus.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
		<i class="fa fa-google-plus"></i>
		</a>
		</li>
		<li>
		<a href="http://www.linkedin.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
		<i class="fa fa-linkedin"></i>
		</a>
		</li>
		<li>
		<a href="http://www.Pinterest.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
		<i class="fa fa-pinterest"></i>
		</a>
		</li>
		<li>
		<a href="http://www.twitter.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
		<i class="fa fa-twitter"></i>
		</a>
		</li>
		</ul>
		</div>
		<!-- End Social Links -->
		</div>
		</div>
		</div><!--/copyright-->
		</div>
		<!--=== End Footer ===-->
</div><!--/wrapper-->

	<!-- Java scripts -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript">
	function showMsg(flag){
	if(flag==0){
	$('.successBox').css('display', 'block');
	}else{
	$('.successBox').css('display', 'none');
	}
	}
	</script>

</body>
</html>
