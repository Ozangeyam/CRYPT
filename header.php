<?php
require 'site_name.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title; ?> - <?= $site_title ?></title>
	<meta charset="UTF-8">
	<meta name="title" content="<?= $site_title ?>">
	<meta name="description" content="Join millions who've already discovered smarter investment platform like our community and earn yourself huge returns.">
	<meta name="keywords" content="cryptocurrency, bitcoin, ethereum, investment, earning, money, returns, blockchain">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>

	<script type="text/javascript" src="user/js/sweetalert.min.js"></script>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body style="overflow: scroll;">
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	

	<!-- Header section -->
	<header class="header-section clearfix">
	<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<br>
		<div class="container-fluid">
			<a href="index" class="site-logo">
				<img style="width: 170px; height: 50px;" src="img/up_logo.png" alt="">
				<!-- <strong style="color:#20509E; font-weight: bold; font-size: 25px; width: 116px;height: 36px;">Base</strong> -->
			</a>
			

			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="" class="user"><i class="fa fa-user"></i></a>
			<a href="user/index" class="site-btn">Sign Up Free</a>
			<nav class="main-menu">
				<ul class="menu-list">
					<li><a href="index">Home</a></li>
					<?php 
					if ($title != "Contact Us") {
					

					 ?>
					<li><a href="#about">About Us</a></li>
					<?php 	
					} ?>

					<li><a href="contact">Contact Us</a></li>
				</ul>
			</nav>

		</div>
	</header>
	<!-- Header section end -->

<?php 

if (isset($_GET['status'])) {
	if ($_GET['status'] === "success") {
	    echo "<script>swal('Sent Successfully!', 'We will get back to you!', 'success');</script>";
	}else if($_GET['status'] === "fail"){
		echo "<script>swal('Failed!', 'Fill All Fields and Try Again!', 'warning');</script>";
	}
	
}

	 ?>