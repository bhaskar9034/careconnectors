<?php include('server1.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Care Connectors &amp; </title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

  <!-- 
  Essential stylesheets
  =====================================-->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">



  <style>
        /* CSS for the calendar container */
        .calendar {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
        }

        /* CSS for calendar days */
        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
        }

        /* CSS for individual day cells */
        .calendar-day {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            cursor: pointer;
        }
        /* CSS for available day cells */
        .available-day {
			width: 50%,50%;
            background-color: green;
            color: white;
            text-align: center;

        }

        /* CSS for unavailable day cells */
        .unavailable-day {
            background-color: red;
            color: white;
            text-align: center;
		}
    </style>

</head>

<body id="top">

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i><careconnectors class="com"></careconnectors></a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Bhimavaram</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890">
							<span>Call Now : </span>
							<span class="h4">9676583892</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="images/logo3.png" alt="" class="img-fluid">
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
				aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icofont-navigation-menu"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarmain">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
					<li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Hospitals <i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown02">
							<li><a class="dropdown-item" href="department.html"></a></li>
							<li><a class="dropdown-item" href="department-single.html">Department Single</a></li>
                    
							<li class="dropdown dropdown-submenu dropright">
								<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
			
								<ul class="dropdown-menu" aria-labelledby="dropdown0301">
									<li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
									<li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown03">
							<li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
							<li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
							<li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>

							<li class="dropdown dropdown-submenu dropleft">
								<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
			
								<ul class="dropdown-menu" aria-labelledby="dropdown0501">
									<li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
									<li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown05">
							<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>
							<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Book your Seat</span>
          <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Call for an Emergency Service!</span>
              <h2 class="text-color mt-3">+84 789 1256 </h2>
          </div>
      </div>
	  <div class="col-lg-8">
    <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
        <h2 class="mb-2 title-color">Book an appointment</h2>
        <p class="mb-4"> </p>
        <form onsubmit="sendEmail(); return false;" id="appointment-form" class="appointment-form" method="post" action="server1.php"> 

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <select class="form-control" name="department" id="exampleFormControlSelect1">
                            <option>Choose Department</option>
                            <option>Neurology</option>
                            <option>Dental</option>
                            <option>Cardiology</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <select class="form-control" name="doctorName" id="exampleFormControlSelect2">
                            <option>Select Doctor Name</option>
                            <option>Dr.P.R.K Varma--M.D,D.M</option>
                            <option>Dr.K.Sridevi--M.D Psychiatry</option>
                            <option>Dr.Y.S Ramanjaneyalu -- M.S,M.CH</option>
                            <option>Dr.I.R.K.Gandhi--M.B.B.S,D.CH</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="date" name="date" id="date" class="form-control" placeholder="dd/mm/yyyy" value="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="time" name="time" id="time" class="form-control" placeholder="Time" value="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" value="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input name="phone" id="phone" type="number" class="form-control" placeholder="Phone Number" value="">
                    </div>
                </div>
            </div>
            <div class="form-group-2 mb-4">
                <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
            </div>

            <button type="submit" class="btn btn-main btn-round-full">Make Appointment<i class="icofont-simple-right ml-2"></i></button>
        </form>
    </div>
</div>

</section>
<center>
<h5>Dr.P.R.K Varma-M.D,D.M</h4>
<h6>Attendance List</h6>
</center>
<div class="calendar">
        <div class="calendar-days">
            <!-- Displaying all 30 days for the month -->
            <div class="calendar-day" onclick="checkAvailability('2023-09-01')">1</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-02')">2</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-03')">3</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-04')">4</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-05')">5</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-06')">6</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-07')">7</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-08')">8</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-09')">9</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-10')">10</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-11')">11</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-12')">12</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-13')">13</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-14')">14</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-15')">15</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-16')">16</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-17')">17</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-18')">18</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-19')">19</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-20')">20</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-21')">21</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-22')">22</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-23')">23</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-24')">24</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-25')">25</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-26')">26</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-27')">27</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-28')">28</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-29')">29</div>
            <div class="calendar-day" onclick="checkAvailability('2023-09-30')">30</div>
        </div>
    </div>
	<br>

    <div id="availability-status"></div>

    <script>
        function checkAvailability(date) {
            // Simulated availability check (replace with your logic)
            const isAvailable = Math.random() < 0.6; // 80% chance of availability

            const availabilityStatus = document.getElementById('availability-status');
            const formattedDate = new Date(date).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });

            if (isAvailable) {
                availabilityStatus.textContent = `Doctor is available on ${formattedDate}`;
                availabilityStatus.classList.remove('unavailable-day');
                availabilityStatus.classList.add('available-day');
            } else {
                availabilityStatus.textContent = `Doctor is unavailable on ${formattedDate}`;
                availabilityStatus.classList.remove('available-day');
                availabilityStatus.classList.add('unavailable-day');
            }
        }
    </script>

<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/logo3.jpg" alt="" class="img-fluid">
					</div>
<br>
					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item">
							<a href="https://www.facebook.com/"><i class="icofont-facebook"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="https://twitter.com/"><i class="icofont-twitter"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.pinterest.com/"><i class="icofont-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Department</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#!">Surgery </a></li>
						<li><a href="#!">Health</a></li>
						<li><a href="#!">Dental</a></li>
						<li><a href="#!">Cardioc</a></li>
						<li><a href="#!">Medicine</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Support</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#!">Terms & Conditions</a></li>
						<li><a href="#!">Privacy Policy</a></li>
						<li><a href="#!">Company Support </a></li>
						<li><a href="#!">FAQuestions</a></li>
						<li><a href="#!">Company Licence</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Get in Touch</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a href="mailto:support@email.com">Support@email.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">

                </div>
				</div>
				<div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Your Email address" required>
							<button type="submit" class="btn btn-main-2 btn-round-full">Subscribe</button>
						</form>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop scroll-top-to" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
   

    <!-- 
    Essential Scripts
    =====================================-->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
    <script src="plugins/google-map/gmap.js"></script>
    
    <script src="js/script.js"></script>

  </body>
  </html>ergv