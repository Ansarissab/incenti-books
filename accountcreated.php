<?php

include_once 'config.php';


   $username = $_POST['username'];
   $password = $_POST['password'];

   $fname = $_POST['fname'];
   $surname = $_POST['surname'];
   $email = $_POST['email'];
   $company = $_POST['company'];
   $phone = $_POST['phone'];
   $country = $_POST['country'];
   $mondayStart = $_POST['mondayStart'];
   $mondayEnd = $_POST['mondayEnd'];
   $tuesdayStart = $_POST['tuesdayStart'];
   $tuesdayEnd = $_POST['tuesdayEnd'];
   $wednesdayStart = $_POST['wednesdayStart'];
   $wednesdayEnd = $_POST['wednesdayEnd'];
   $thursdayStart = $_POST['thursdayStart'];
   $thursdayEnd = $_POST['thursdayEnd'];
   $fridayStart = $_POST['fridayStart'];
   $fridayEnd = $_POST['fridayEnd'];
   $saturdayStart = $_POST['saturdayStart'];
   $saturdayEnd = $_POST['saturdayEnd'];
   $sundayStart = $_POST['sundayStart'];
   $sundayEnd = $_POST['sundayEnd'];


   ///////////

   $dbname = "incentibook";

   $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
   if(mysqli_connect_error()){
      die('connect error (' . 
         mysqli_connect_errno(). ' )' .
         mysqli_connect_error());

   }
   else {

      $sql = "INSERT INTO users (fname,surname, email, company,username,password, phone, country, mondayStart, mondayEnd, tuesdayStart, tuesdayEnd, wednesdayStart, wednesdayEnd, thursdayStart, thursdayEnd, fridayStart, fridayEnd, saturdayStart, saturdayEnd, sundayStart, sundayEnd) values ('$fname','$surname', '$email', '$company','$username','$password','$phone', '$country', '$mondayStart', '$mondayEnd', '$tuesdayStart', '$tuesdayEnd', '$wednesdayStart', '$wednesdayEnd', '$thursdayStart', '$thursdayEnd', '$fridayStart', '$fridayEnd', '$saturdayStart', '$saturdayEnd', '$sundayStart', '$sundayEnd')";
      }

      if ($conn ->query($sql)) {
      	header('Location:home.php');

      }
      else {
         echo "Error: " . $sql . "<br>" . $conn->error ;
         $conn->close();
      }



?>

<!doctype html>
<html lang="en" class="theme-c has-gradient has-pattern">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>IncentiBook Smart Scheduling Software For Multiple Appointments</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
        <meta name="HandheldFriendly" content="true">
        <meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9, user-scalable=no, target-densitydpi=device-dpi">
		<script src="javascript/head.js"></script>
		<link rel="stylesheet" media="screen" href="styles/screen.css">
		<link rel="stylesheet" media="print" href="styles/print.css">
		<link rel="icon" type="image/x-icon" href="images/logo.png">
	</head>
	<body>
		<div id="root">
			<header id="top">
				<div><h1>Thank you for signing up!</h1><br></div>
				<nav id="skip">
					<ul>
						<li><a href="#nav" accesskey="n">Skip to navigation (n)</a></li>
						<li><a href="#content" accesskey="c">Skip to content (c)</a></li>
						<li><a href="#footer" accesskey="f">Skip to footer (f)</a></li>
					</ul>
				</nav>
				<nav id="nav">
					<ul>
						<li><a accesskey="1" href="index.html">Home</a> <em>(1)</em></li>
						<!--<li><a accesskey="2" href="portfolio.html">Case Studies</a> <em>(2)</em>
							<ul>
								<li><a href="pest-control.html">Pest Control</a></li>
								<li><a href="#">Lorem ipsum dolor</a></li>
								<li><a href="#">Lorem ipsum dolor</a></li>
							</ul>
						</li> 
						<li><a accesskey="3" href="blog">Blog</a> <em>(3)</em></li> -->
						<li><a accesskey="4" href="contact.html">Contact</a> <em>(4)</em></li>
						<!--<li class="a"><a accesskey="5" href="#">Sign Up</a> <em>(5)</em></li> -->
					</ul>
				</nav>
			</header>    
			<article id="welcome">
				<figure class="mobile-c"><img src="images/image1.png" alt="booking system" width="352" height="628"></figure>
				<h2><span>Incenti</span>Book</h2>
				<p>Smart Scheduling Software For Businesses With Multiple Appointments.</p>
				<!-- <ul class="download-a a">
					<li class="as"><a rel="external" href="#">Download on the App Store</a></li>
					<li class="gp"><a rel="external" href="#">Get it on Google Play</a></li>
				</ul> -->
			</article>
			<section id="content" class="a">
				<article>
					<header class="heading-a">
						<h3><span class="small">About</span> <span class="strong">Smart Scheduling</span> For Your Business</h3>
						<p>IncentiBook is a smart scheduling software that helps businesses optimise their booking schedule 
						to spend less time driving between appointments, helping them save money by reducing fuel bills and lost opportunity cost.</p>
					</header>
					<ul class="list-a">
						<li><a href="./"><i class="icon-basic" data-icon="6"></i> <span class="title">Manage</span> Receive and manage bookings seemlessly in the app.</a></li>
						<li><a href="./"><i class="icon-basic" data-icon="&#xe014;"></i> <span class="title">Monitor</span> Monitor miles driven by your vehicles, and appointments booked, allowing you to see your savings with IncentiBook.</a></li>
						<li><a href="./"><i class="icon-basic" data-icon="}"></i> <span class="title">Save</span> Reduce your fuel bills and lost opportunity cost so you get more appointments in the same time.</a></li>
					</ul>

<!--					<header class="heading-a">
						<h3><span class="small">Team</span> <span class="strong">Lorem ipsum</span> dolor sit amet</h3>
						<p>See what’s included in the App</p>
					</header>
					<ul class="gallery-b b">
						<li><a href="./"><img src="http://placehold.it/300" alt="Placeholder" width="300" height="300"> </a>
							<div>
								<h4><span>John Smith</span> digital designer</h4>
							</div>
						</li>
						<li><a href="./"><img src="http://placehold.it/300" alt="Placeholder" width="300" height="300"> </a>
							<div>
								<h4><span>John Smith</span> digital designer</h4>
							</div>
						</li>
						<li><a href="./"><img src="http://placehold.it/300" alt="Placeholder" width="300" height="300"> </a>
							<div>
								<h4><span>John Smith</span> digital designer</h4>
							</div>
						</li>
						<li><a href="./"><img src="http://placehold.it/300" alt="Placeholder" width="300" height="300"> </a>
							<div>
								<h4><span>John Smith</span> digital designer</h4>
							</div>
						</li>
						<li><a href="./"><img src="http://placehold.it/300" alt="Placeholder" width="300" height="300"> </a>
							<div>
								<h4><span>John Smith</span> digital designer</h4>
							</div>
						</li>
						<li><a href="./"><img src="http://placehold.it/300" alt="Placeholder" width="300" height="300"> </a>
							<div>
								<h4><span>John Smith</span> digital designer</h4>
							</div>
						</li>
					</ul> 
				</article>
			 	<article>
					<header class="heading-a">
						<h3><span class="small">Team</span> <span class="strong">Lorem ipsum</span> dolor sit amet</h3>
					</header>
					<ul class="gallery-b a">
						<li><a href="./"><img src="http://placehold.it/300" alt="Placeholder" width="300" height="300"> </a>
							<div>
								<h4><span>John Smith</span> digital designer</h4>
								<p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
							</div>
						</li>
						<li><a href="./"><img src="http://placehold.it/300" alt="Placeholder" width="300" height="300"> </a>
							<div>
								<h4><span>John Smith</span> digital designer</h4>
								<p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
							</div>
						</li>
						<li><a href="./"><img src="http://placehold.it/300" alt="Placeholder" width="300" height="300"> </a>
							<div>
								<h4><span>John Smith</span> digital designer</h4>
								<p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
							</div>
						</li>
						<li><a href="./"><img src="http://placehold.it/300" alt="Placeholder" width="300" height="300"> </a>
							<div>
								<h4><span>John Smith</span> digital designer</h4>
								<p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
							</div>
						</li>
						<li><a href="./"><img src="http://placehold.it/300" alt="Placeholder" width="300" height="300"> </a>
							<div>
								<h4><span>John Smith</span> digital designer</h4>
								<p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
							</div>
						</li>
						<li><a href="./"><img src="http://placehold.it/300" alt="Placeholder" width="300" height="300"> </a>
							<div>
								<h4><span>John Smith</span> digital designer</h4>
								<p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
							</div>
						</li>
					</ul>-->
				</article> 
		
			</section>
			<footer id="footer">
				<figure><img src="images/logo.png" alt="Placeholder" width="110" height="55"></figure>
				<h3>Follow us</h3>
				<ul class="social-a">
					<li class="tw"><a rel="external" href="https://twitter.com/IncentiBook">Twitter</a></li>
				</ul>
				
				<p>&copy; <span class="date">2021</span> IncentiBook . All rights reserved. <a href="./">Privacy Policy</a> <a href="./">Terms of Service</a></p>
			</footer>
		
		</div>
        <script>
            head.load('javascript/jquery.js','javascript/tf.js','javascript/scripts.js','javascript/mobile.js')
        </script>
	</body>
</html>