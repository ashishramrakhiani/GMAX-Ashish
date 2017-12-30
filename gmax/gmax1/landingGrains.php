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
		<title>Flour, Rice and Grains, Simplified!</title>
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

				
					<header id="header" class="alt style25">
						<a href="index.php" class="logo"><strong>G-MAX</strong> <span>Groceries, simplified!</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
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


				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style25">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>Flour, Rice and Grains</h1>
							</header>
							<div class="content">
								<p>Multi-Grain? MP Superior, or Chakki Fresh? Or Basmati?<br />
								At G-Max, we got you covered!</p>
							</div>
							<ul class="actions">
								<li><a href="index.php" class="button pre scrolly">Go Back</a></li>
						
							
								<li><a href="generic.php" class="button pre scrolly">Go to Cart</a></li>
							</ul>
						</div>
					</section>

				<!-- Main -->
					<div id="main">					

						<!-- Two -->
							<section id="two" class="spotlights">
								<section>
								
										<img src="images/pic08.png" alt="" data-position="center center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Aashirwaad Superior MP Atta</h3>
											</header>
											<p>Made from the choicest grains- heavy on the palm, golden amber in colour and hard in bite this atta is carefully ground using <strong>modern 'chakki - grinding'</strong> process for the perfect balance of colour, taste and nutrition which also ensures that Aashirvaad atta contains 0% Maida and is 100% Sampoorna Atta. The dough made from Aashirvaad Atta absorbs more water, hence rotis remain softer for longer. </p>
															<div class="4u 12u$(small)">
																<input type="radio" id="demo-priority-low" name="demo-priority" checked>
																<label for="demo-priority-low"> 5kg @ ₹ 185</label>
															</div>															
															
															<br>
											<ul class="actions">												
												<!--<li><a href="generic.html" class="button">Buy</a></li>-->
												<form role="form" action="" method="post">
												<input type="Submit" value="Add to Cart" name="Submit1">
												</form>
												<?php
									if(isset($_POST['Submit1']))
									{
										$sql1="select * from product where pname like 'Aashirwaad Superior MP Aata'";
			$result1 = $conn->query($sql1);
			if ($result1->num_rows > 0)
			{		
			while($row = $result1->fetch_assoc())
			{
						
			
			
				
				$productid=$row["productid"];
			
				$pname=$row["pname"];
				
				$pprice=$row["pprice"];
				  
				 
				$pcategory=$row["pcategory"];
				 
				$pbrand=$row["pbrand"];
				
			}
			}
			$sql="INSERT INTO cart(productid,pname,pprice,pcategory,pbrand) values('$productid','$pname','$pprice','$pcategory','$pbrand')";
			if(mysqli_query($conn,$sql))
			{
		

				echo '<script> alert("Added to cart") </script>';
			}
			else{
	
			echo '<script> alert("'.mysqli_error($conn).'") </script>';
					}
	
		}?>
											</ul>
										</div>
									</div>
									
									
								</section>
								<section>
									<a href="generic.html" class="image">
										<img src="images/pic09.png" alt="" data-position="top center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Nature Fresh Sampoorna Chakki Atta</h3>
											</header>
											<p>Made from the finest quality wheat grains, <strong>Nature Fresh</strong> prides itself on its selection of high quality, natural ingredients that are processed right, to produce atta that is just the right texture – neither too fine, nor too coarse.</p>
											
											<ul class="actions">
												<li><a href="generic.html" class="button">Buy 10kg @ ₹255</a></li>
												<form role="form" action="" method="post">
												<input type="Submit" value="Add to Cart" name="Submit2">
												</form>
												<?php
									if(isset($_POST['Submit2']))
									{
										$sql1="select * from product where pname like 'Nature Fresh Sampoorna Chakki Atta'";
			$result1 = $conn->query($sql1);
			if ($result1->num_rows > 0)
			{		
			while($row = $result1->fetch_assoc())
			{
						
			
			
				
				$productid=$row["productid"];
			
				$pname=$row["pname"];
				
				$pprice=$row["pprice"];
				  
				 
				$pcategory=$row["pcategory"];
				 
				$pbrand=$row["pbrand"];
				
			}
			}
			$sql="INSERT INTO cart(productid,pname,pprice,pcategory,pbrand) values('$productid','$pname','$pprice','$pcategory','$pbrand')";
			if(mysqli_query($conn,$sql))
			{
		

				echo '<script> alert("Added to cart") </script>';
			}
			else{
	
			echo '<script> alert("'.mysqli_error($conn).'") </script>';
					}
	
		}?>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a href="generic.html" class="image">
										<img src="images/pic10.png" alt="" data-position="25% 25%" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Pillsbury Multi Grain Atta</h3>
											</header>
											<p>The unique blend of <strong>seven natural grains</strong>, exponentially multiplying the nutritional value of atta, is found in Pillsbury Atta Multigrains. Wheat, Soya, Oats, Maize, Ragi, Barley and Channa dal are among the ingredients that add to the nutritional value of this atta.</p>
											<ul class="actions">
												<li><a href="generic.html" class="button">Buy 5kg @ ₹200</a></li>
												<li><a href="generic.html" class="button special">Add to Cart </a></li>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a href="generic.html" class="image">
										<img src="images/Rice01.png" alt="" data-position="top center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>India Gate Basmati Rice- Mini Mogra II</h3>
											</header>
											<p>India Gate Basmati Rice Mini Mogra-II is cultivated in the <strong>Terai</strong> region of the <strong>North-Western Himalayas</strong>. This high quality harvest is aged in a state-of-the-art rice milling plant.India Gate is a well reputed company known for providing variety range of product with the guarantee of quality pus healthy. India Gate Basmati Mini Mogra gives you the long and tasty basmati rice which makes it a healthy to have on regular basis.</p>
											<ul class="actions">
												<li><a href="generic.html" class="button">Buy 10kg @ ₹309</a></li>
												<li><a href="generic.html" class="button special">Add to Cart </a></li>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a href="generic.html" class="image">
										<img src="images/Rice02.png" alt="" data-position="25% 25%" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Kohinoor Charminar- Basmati Rice</h3>
											</header>
											<p>Each grain of Charminar on cooking brings out a distinct aroma and become fluffy, thin, long and non-sticky. And no wonder, features like these make Charminar one of the most popular basmati rice in the country.</p>
											<ul class="actions">
												<li><a href="generic.html" class="button">Buy 5kg @ ₹394</a></li>
												<li><a href="generic.html" class="button special">Add to Cart </a></li>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a href="generic.html" class="image">
										<img src="images/Rice03.png" alt="" data-position="top center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Daawat Rozana Super Basmati Rice</h3>
											</header>
											<p>A unique blend of flavoursome white basmati+Fibre rich Brown Rice, Rozana Gold plus offers you the same great taste of aromatic and flavoursome basmati rice with the added goodness of healthy fibre in one pack.</p>
											<ul class="actions">
												<li><a href="generic.html" class="button">Buy 5kg @ ₹265</a></li>
												<li><a href="generic.html" class="button special">Add to Cart </a></li>
											</ul>
										</div>
									</div>
								</section>																
							</section>

						<!-- Three
							<section id="three">
								<div class="inner">
									<header class="major">
										<h2>Massa libero</h2>
									</header>
									<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
									<ul class="actions">
										<li><a href="generic.html" class="button next">Get Started</a></li>
									</ul>
								</div>
							</section>-->

					</div>

				<!-- Contact
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="6"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">information@untitled.tld</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 x12387</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section> -->

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
								<li>&copy; G-MAX</li><li>Design: <a href="https://www.facebook.com/yashpramodshinde">Yash Shinde</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
