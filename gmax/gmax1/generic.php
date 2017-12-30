<?php
session_start();
if(!isset($_SESSION['EMAIL']))
{
	header('Location:index.php');
}
include_once('dbconfig1.php');
include_once("dbconfig1.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Your Cart</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css"/>
		<link rel="shortcut icon" type="image/png" href="images/favicon.png">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo"><strong>YOUR CART</strong> <span> simplified!</span></a>
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

				<!-- Main -->
					<div id="main" class="alt">
						<!-- One -->
							<section id="one">
								<div class="inner">
									<h3>Here's what you carted</h3>													
													<div class="table-wrapper">
													<form action="" method="post">
													<?php
													$sql1="select * from cart";
															$result1 = $conn->query($sql1);
														if ($result1->num_rows > 0)
														{
															
														
					
													?>
														<table>
															<thead>
																<tr>
																	<th>Product id</th>
																	<th>Product Name</th>
																	<th>Price (₹)</th>
																	<th>Quantity</th>
																	<th>Category</th>
																	<th>Brand</th>
																	<th>Select </th>
																	
																</tr>
															</thead>
															<tbody>
															<?php
															$totprice=0;
															while($row = $result1->fetch_assoc()) {
							

															echo '<tr><td>'. $row["productid"].'</td>';
															echo '<td>'. $row["pname"].'</td>';
															echo '<td>'. $row["pprice"].'</td>';
															$totprice=$totprice+$row['pprice'];
															echo '<td>'."1".'</td>';
															echo '<td>'. $row["pcategory"].'</td>';
															echo '<td>'. $row["pbrand"].'</td>';
															?>
															<td><font color="black"><input name="selector" type="radio" value="<?php echo $row['cartid']; ?>"></font></td>
														
															<?php echo '</tr>';
															}
														}else
														{
															echo "no itmes in cart";
														}
														?>
															</tbody>
															<tfoot>
																<tr>
																	<td colspan="1"></td>
																	<td><strong>Total</strong></td>
																	<td><?php echo $totprice; ?></td>
																</tr>
															</tfoot>
															
														</table>
														
							<input type="submit" class="button next scrolly" value="Delete from cart" name="eb">
		</form>
		
							<?php
			
			if(isset($_POST['eb']) && !empty($_POST['selector']))
			{
				$selector=$_POST['selector'];
				$sql2 = "DELETE from cart WHERE cartid='$selector'";
				if(mysqli_query($conn,$sql2))
								{
									echo '<script>alert("Item Deleted")</script>';
									

								}
								else
								{
									
									echo mysqli_error($conn);
								}
								

			}
			else{
				echo "Select a product";
			}
			
			
		?>
														<div style="padding-left: 70.5%;padding-bottom:3%">
															<a href="codform.php" class="button next scrolly">Proceed to Checkout</a>
														</div>
													</div>														
								</div>

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
