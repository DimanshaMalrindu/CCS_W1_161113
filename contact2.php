<?php
switch (@$_GET['do'])
 {

 case "send":

      $fname = $_POST['fname'];
      $fphone = $_POST['fphone'];
      $femail = $_POST['femail'];
      $fcountry = $_POST['fcountry'];
      $fnationality = $_POST['fnationality'];
      $fpackage = $_POST['fpackage'];
      $fdatein = $_POST['fdatein'];
      $fdateout = $_POST['fdateout'];
      $faccomadation = $_POST['faccomadation'];
      $fmeal = $_POST['fmeal'];
      $fbudget = $_POST['fbudget'];
      $froomT = $_POST['froomT'];
      $frooms = $_POST['frooms'];
      $faddults = $_POST['faddults'];
			$fchildren = $_POST['fchildren'];
      $fchildrenS = $_POST['fchildrenS'];
      $freq = $_POST['freq'];
      $secretinfo = $_POST['info'];

    if (!preg_match("/\S+/",$fname))
    {
      unset($_GET['do']);
      $message = "Name required...";
      break;
    }
    if (!preg_match("/^\S+@[A-Za-z0-9_.-]+\.[A-Za-z]{2,6}$/",$femail))
    {
      unset($_GET['do']);
      $message = "Invalid Email...";
      break;
    }
    if (!preg_match("/^[0-9 #\-\*\.\(\)]+$/",$fphone))
    {
      unset($_GET['do']);
      $message = "Invalid Phone Number...";
      break;
    }

    if ($secretinfo == "")
    {
       $myemail = "malrindu334@gmail.com";

			 $emess = "Personal Information\n\n";
       $emess.= "Name: ".$fname."\n";
       $emess.= "Phone Number: ".$fphone."\n";
       $emess.= "Email: ".$femail."\n";
       $emess.= "Country: ".$fcountry."\n";
       $emess.= "Nationality: ".$fnationality."\n";
			 $emess.= "Package Information\n\n";
       $emess.= "Package: ".$fpackage."\n";
       $emess.= "Date of Arrival: ".$fdatein."\nDate of Depature: ".$fdateout."\n";
			 $emess.= "Accommodation Information\n\n";
       $emess.= "Accommadation Type: ".$faccomadation."\n";
       $emess.= "Meal Plans: ".$fmeal."\n";
       $emess.= "Approximate Budget Per Person: ".$fbudget."\n";
			 $emess.= "How many rooms do they required\n\n";
       $emess.= "Room Type: ".$froomT."\n";
       $emess.= "Number of Rooms: ".$frooms."\n";
			 $emess.= "Number of Guests\n\n";
			 $emess.= "Adults: ".$faddults."\n";
       $emess.= "Children (06-11 Years): ".$fchildren."\n";
       $emess.= "Children (Below 05 Years): ".$fchildrenS."\n";
       $emess.= "Any Other Special Requests: ".$freq;
       $ehead = "From: ".$femail."\r\n";
       $subj = "VisitSriLankaOne !!!";
       $mailsend=mail("$myemail","$subj","$emess","$ehead");
       $message = "Email was sent.";
    }

       unset($_GET['do']);
       header("Location: contact2.php");
     break;

 default: break;
 }
?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>visitsrilankaone</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">www.visitsrilankaone.com</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="hotel.html" class="fh5co-sub-ddown">Hotel</a>
								<ul class="fh5co-sub-menu">
								 	<li><a href="#">Luxe Hotel</a></li>
								 	<li><a href="#">Deluxe Hotel</a></li>
									<li>
										<a href="#" class="fh5co-sub-ddown">King Hotel</a>
										<ul class="fh5co-sub-menu">
											<li><a href="" target="_blank">Build</a></li>
											<li><a href="" target="_blank">Work</a></li>
											<li><a href="" target="_blank">Light</a></li>
											<li><a href="" target="_blank">Relic</a></li>
											<li><a href="" target="_blank">Display</a></li>
											<li><a href="" target="_blank">Sprint</a></li>
										</ul>
									</li>
									<li><a href="#">Five Star Hotel</a></li>
								</ul>
							</li>
							<li><a href="services.html">Services</a></li>
							<li><a href="blog.html">Reviews</a></li>
							<li>
								<a href="packages.html">Packages</a>
									<ul class="fh5co-sub-menu">
								 	<li><a href="grandmiracletours.html">Grand Miracle Tour</a></li>
								 	<li><a href="adventuretour.html">Adventure Tour</a></li>
									<li><a href="smallmiracletour.html">Small Miracle Tour</a></li>
									<li><a href="srilankaatagalance.html">Sri Lanka at a Galance</a></li>
									<li><a href="familytour.html">Family Tour</a></li>
									<li><a href="quicktriptosrilanka.html">Quick Trip to Sri Lanka</a></li>
								</ul>
							</li>
							<li><a class="active" href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

	</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/ContactUs1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Contact Us</h1>
						<p>Feel free to ask anything from <a href="#">VISITSRILANKAONE</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-contact-section">
		<div class="row">
			<div class="container">
      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
  			<form class="form-horizontal" name="contactform" action="contact2.php?do=send" method="POST">
  				<?php
  				   if ($message) echo '<p class="bg-danger">'.$message.'</p>';
  				?>
  				<h3 class="form-topic text-center">Your Personal Information</h3>
  			  <div class="form-group">
  			    <label for="fname">Name</label>
  			    <input type="text" class="form-control" id="fname" placeholder="Your Name" name="fname" value="<?php echo @$fname ?>">
  			  </div>
  			  <div class="form-group">
  			    <label for="fphone">Phone</label>
  			    <input type="text" class="form-control" id="fphone" placeholder="Your Phone Number" name="fphone" value="<?php echo @$fphone ?>">
  			  </div>
  				<div class="form-group">
  			    <label for="femail">E-mail</label>
  			    <input type="email" class="form-control" id="femail" placeholder="Your E-mail" name="femail" value="<?php echo @$femail ?>">
  			  </div>
  				<div class="form-group">
  			    <label for="fcountry">Country</label>
  					<select class="form-control bfh-countries" id="fcountry" name="fcountry" value="<?php echo @$fcountry ?>">
  					</select>
  			  </div>
  				<div class="form-group">
  			    <label for="fnationality">Nationality</label>
  			    <input type="text" class="form-control" id="fnationality" placeholder="Your Nationality" name="fnationality" value="<?php echo @$fnationality ?>">
  			  </div>
  				<h3 class="form-topic text-center">Your Package Information</h3>
  				<div class="form-group">
  			    <label for="fpackage">Package</label>
  					<select class="form-control" id="fpackage" placeholder="Select Package" name="fpackage" value="<?php echo @$fpackage ?>">
  					  <option>Grand Miracle Tour</option>
  					  <option>Adventure Tour</option>
  					  <option>Small Miracle Tour</option>
  					  <option>Sri Lanka at a Galance</option>
  					  <option>Family Tour</option>
  						<option>Quick Trip to Sri Lanka</option>
  					</select>
  			  </div>
  				<div class="form-group">
  			    <label for="fdatein">Date Of Arrival</label>
  			    <input type="text" class="form-control" id="fdatein" placeholder="Date In" name="fdatein" value="<?php echo @$fdatein ?>">
  			  </div>
  				<div class="form-group">
  			    <label for="fdateout">Date of Depature</label>
  			    <input type="text" class="form-control" id="fdateout" placeholder="Date Out" name="fdateout" value="<?php echo @$fdateout ?>">
  			  </div>
  				<h3 class="form-topic text-center">Your Accommodation Information</h3>
  				<div class="form-group">
  			    <label for="faccomadation">Accommadation Type</label>
  					<select class="form-control" id="faccomadation" placeholder="Select Accommadation Type" name="faccomadation" value="<?php echo @$faccomadation ?>">
  					  <option>5 Star Hotels</option>
  					  <option>4 Star Hotels</option>
  					  <option>3 Star Hotels</option>
  					  <option>Budget Hotels</option>
  					  <option>Boutique Hotels</option>
  					</select>
  			  </div>
  				<div class="form-group">
  			    <label for="fmeal">Meal Plans</label>
  					<select class="form-control" id="fmeal" placeholder="Select Your Meal Plan" name="fmeal" value="<?php echo @$fmeal ?>">
  					  <option>Bed and Breakfast</option>
  					  <option>Half Board</option>
  					  <option>Full Board</option>
  					</select>
  			  </div>
  				<div class="form-group">
  			    <label for="fbudget">Approximate Budget Per Person</label>
  			    <input type="text" class="form-control" id="fbudget" placeholder="50 USD" name="fbudget" value="<?php echo @$fbudget ?>">
  			  </div>
  				<h3 class="form-topic">How many rooms do you require?</h3>
  				<div class="form-group">
  			    <label for="froomT">Room Type</label>
  			    <input type="text" class="form-control" id="froomT" name="froomT" value="<?php echo @$froomT ?>">
  			  </div>
  				<div class="form-group">
  			    <label for="frooms">Number of Rooms</label>
  			    <input type="text" class="form-control" id="frooms" placeholder="0" name="frooms" value="<?php echo @$frooms ?>">
  			  </div>
  				<h3 class="form-topic text-center">Number of Guests</h3>
  				<div class="form-group">
  			    <label for="faddults">Adults</label>
  			    <input type="text" class="form-control" id="faddults" placeholder="0" name="faddults" value="<?php echo @$faddults ?>">
  			  </div>
  				<div class="form-group">
  			    <label for="fchildren">Children (06-11 Years)</label>
  			    <input type="text" class="form-control" id="fchildren" name="fchildren" placeholder="0" value="<?php echo @$fchildren ?>">
  			  </div>
  				<div class="form-group">
  			    <label for="fchildrenS">Children (Below 05 Years)</label>
  			    <input type="text" class="form-control" id="fchildrenS" placeholder="0" name="fchildrenS" value="<?php echo @$fchildrenS ?>">
  			  </div>
  				<div class="form-group">
  			    <label for="freq">Any Other Special Requests</label>
  			    <textarea class="form-control" id="freq" rows="3" name="freq" value="<?php echo @$freq ?>">
  					</textarea>
  					<input style="display:none;" name="info" type="text" value="">
  			  </div>
  				<div class="form-group text-center">
  			    <div class="col-sm-10">
  			      <button type="submit" class="btn btn-success" value="Send Now">Submit</button>
  			    </div>
    			</div>
          <div class="form-group">
        		<div class="col-sm-10 col-sm-offset-2">
        			<?php echo $result; ?>
        		</div>
  	      </div>
  			</form>
      </div>
		</div>
		</div>
	</div>


	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2016 Crystal Code Solutions <br> All Rights Reserved. <br>
						Designed by<br> Web Team - <font color="blue"> Crystal Code Solutions</font></a></small></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Company</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="contact2.php">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Our Facilities</h3>
							<ul class="link">
								<li><a href="#">Resturant</a></li>
								<li><a href="#">Bars</a></li>
								<li><a href="#">Pick-up</a></li>
								<li><a href="#">Swimming Pool</a></li>
								<li><a href="#">Spa</a></li>
								<li><a href="#">Gym</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Subscribe</h3>
							<p>For stay tuned with our tours and facilities, subscribe us.</p>
							<form action="#" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Email Address" id="email">
									<input type="submit" id="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
							<a href="#"><i class="icon-twitter-with-circle"></i></a>
							<a href="#"><i class="icon-facebook-with-circle"></i></a>
							<a href="#"><i class="icon-instagram-with-circle"></i></a>
							<a href="#"><i class="icon-linkedin-with-circle"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- Javascripts -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Google Map -->


	<script src="js/bootstrap-formhelpers-countries.js"></script>
	<script src="js/bootstrap-formhelpers-countries.en_US.js"></script>
	<script src="js/custom.js"></script>
	<script type="text/javascript">
		$(function () {
				$("#fdatein").datepicker();
				$("#fdateout").datepicker();
		});
	</script>
</body>
</html>
