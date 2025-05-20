<!DOCTYPE html>
<html>

<head>
	<title> E&T's Hospital | Doctors </title>


	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/footer.css">

	<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/custom.css">
	<style>
		.button-update {
			background-color: #FF0000;
		}

		.button {
			display: inline-block;
			text-decoration: none;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin: 10px 0px;

		}
	</style>
	<script>

		function updateRecord(name, number, date, time) {
			var newName = prompt("Enter new name", name);
			var newNumber = prompt("Enter new phone number", number);
			var newDate = prompt("Enter new date", date);
			var newTime = prompt("Enter new time", time);

			if (newName !== null && newNumber !== null && newDate !== null && newTime !== null) {
				// Redirect to a PHP script or update using AJAX
				window.location.href = "update_record.php?name=" + encodeURIComponent(name) +
					"&newName=" + encodeURIComponent(newName) +
					"&newNumber=" + encodeURIComponent(newNumber) +
					"&newDate=" + encodeURIComponent(newDate) +
					"&newTime=" + encodeURIComponent(newTime);
			}
		}
		function deleteRecord(name) {
			var confirmation = confirm("Are you sure you want to delete the record for " + name + "?");

			if (confirmation) {
				// Redirect to a PHP script that handles the deletion
				window.location.href = "delete_record.php?name=" + encodeURIComponent(name);
			}
		}

	</script>
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
							<a href=" index.html">
							<img src="assets/img/logo/logo hos.png" alt="Logo" style="height: 14vh; width: 150px;">
							</a>
						</div>
					</div><!--container-->

					<!-- nav links>-->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<div class="res-container">
							<ul class="nav navbar-nav">

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
		
		<div style=" text-align: center; margin-top: 50px;">
			<h2><strong>Appointments</strong></h2>
		</div>

		<!-- End title  -->
		<!-- php code -->
		<div width="100%">
		<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e&t_hospital";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$orderBy = ""; 

if (isset($_GET['department'])) {
    $department = $_GET['department'];
  

    $sql = "SELECT * FROM appointment_list WHERE DEPARTMENT = '$department'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1' style='border-collapse:collapse; width:95%; margin:10px;text-align:center;'>";
        echo "<tr><td>Patient Name</td><td>Phone No.</td><td>Date</td><td>Time</td></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["NAME"] . "</td>";
            echo "<td>" . $row["NUMBER"] . "</td>";
            echo "<td>" . $row["DATE"] . "</td>";
            echo "<td>" . $row["TIME"] . "</td>";
            echo "<td><button class='button btn-u' onclick='updateRecord(\"" . $row["NAME"] . "\", \"" . $row["NUMBER"] . "\", \"" . $row["DATE"] . "\", \"" . $row["TIME"] . "\")'>Update</button></td>";
            echo "<td><button class='button button-update btn-u' onclick='deleteRecord(\"" . $row["NAME"] . "\")'>Delete</button></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No records found";
    }
}

$conn->close();
?>

		</div>
		<br><br>
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
									<a href="http://www.facebook.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="http://www.skype.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Skype">
										<i class="fa fa-skype"></i>
									</a>
								</li>
								<li>
									<a href="http://www.googleplus.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="http://www.linkedin.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="http://www.Pinterest.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Pinterest">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
								<li>
									<a href="http://www.twitter.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Twitter">
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
	</div>


</body>

</html>