<?php
session_start();
if(isset($_SESSION['EMAIL']))
{
	$output=$_SESSION['EMAIL'];
}
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
							<li><a href="generic.php">My Cart</a></li>
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
								<h1>Welcome to G-max</h1>
							</header>
							<div class="content">
								<p>Here, you can buy a variety of your everyday groceries<br />
								at the comfort of your home!</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Get Started</a></li>
								</ul>
							</div>
						</div>
					</section>

				
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landingGrains.php" class="link">Edibles</a></h3>
										<p>Edible Oil and Ghee</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landingGrains.php" class="link">Daily Groceries</a></h3>
										<p>Dals and Pulses</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landingGrains.php" class="link">Spices</a></h3>
										<p>Not just Chillies</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landingGrains.php" class="link">Occasionals</a></h3>
										<p>Dry Fruits & Jaggery</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landingGrains.php" class="link">Flour, Rice and Grains</a></h3>
										<p>Where does Bran Come from?</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landingGrains.php" class="link">Tastes</a></h3>
										<p>Salt and Sugar</p>
									</header>
								</article>								
							</section>
						
					</div>			

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<!--<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>-->
							</ul>
							<ul class="copyright">
								<li>&copy; G-MAX</li><li>Developers <a href="https://www.facebook.com/yashpramodshinde">Yash Shinde</a> <a href="#"> &nbsp;&nbsp;Ashish Ramrakhiani</a></li>
							</ul>
							<ul class="copyright">
								<li><?php if(isset($_SESSION['EMAIL']))
								{
									echo "Logged in as ".$_SESSION['EMAIL'];
								}?></li>
							</ul>
						</div>
					</footer>

			</div>

		<!--Scripts--> 
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>