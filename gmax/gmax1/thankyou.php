<?php
session_start();
if(!isset($_SESSION['EMAIL']))
{
	header('Location:index.php');
}
include_once('dbconfig1.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>G-Max: Groceries, Simplified</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/png" href="images/favicon.png">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		
			<div id="wrapper">

				
					<header id="header" class="alt">
						<a href="index.php" class="logo"><strong>G-MAX</strong> <span>Groceries, simplified!</span></a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if(isset($_SESSION['EMAIL'])){
						echo "hi ".$_SESSION['NAME']; }?>
					
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Hi <?php if(isset($_SESSION['EMAIL'])){ echo $_SESSION['NAME'];}?></a></li>
							<li><a href="index.php">My Account</a></li>
							<!-- <li><a href="Admin\index.html#two">My Orders</a></li> -->
							<li><a href="generic.html">My Cart</a></li>
							<li><a href="index.php">About</a></li>
						</ul>
						<ul class="actions vertical">
						<?php if(!isset($_SESSION['EMAIL']))
						{?>
							<li><a href="login.php" class="button special fit">Log In</a></li>
						
							<li><a href="signup.php" class="button fit">Sign Up</a></li>
							<?php } ?>
							<?php if(isset($_SESSION['EMAIL']))
							{?>
							<li><a href="logout.php" class="button fit">Log out</a></li>
							<?php } ?>
						</ul>
					</nav>
				
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Thank You</h1>
							</header>
							<div class="content">
								<p>Thank You for ordering from Gmax, Hope you enjoy our products. A email has been sent to your email-id. CHeck it out</p>
								<ul class="actions">
									<li><a href="index.php" class="button next scrolly">Back To Home Page</a></li>
								</ul>
							</div>
						</div>
					</section>