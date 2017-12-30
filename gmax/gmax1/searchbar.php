<?php
session_start();
$search='';
$pquantity='';
$productid='';
$pname='';
$pprice='';
$pcategory='';
$pbrand='';
$productids='';
$pnames='';
$pprices='';
$pcategorys='';
$pbrands='';
$searchs='';

$success=3;
?>
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
	
<style>
.button {
 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px;
    cursor: pointer;
}
.container{
	height:100%;
	background-color:black;
	color:white;
}
table {
    border-collapse: collapse;
    width: 90%;
	margin-left:10px;
}

th, td {
    text-align: left;
    padding: 8px;
	color:white;
}



th {
    background-color: #4CAF50;
    color: white;
}
input[type="text"]
{
	font:1.3em;
	width:220px;
	height:40px;
	
}
body label{
	font-size:1.3em;
}
body{
	font-size:1.3em;
}
.display
{
	float:left;
	margin:10px;
	padding:10px 10px 10px 10px;
	border: 2px solid white;

}
input[placeholder="Enter quantity"]
{
	width:100px;
	height:30px;
}
</style>
<body>
<div class="container">
<h1 align="center">Search Products</h1>
<form role="form" action="" method="post">
		<label for="sn">Enter product Name:  </label>
		<input type="text"  placeholder="Enter search name" name="sb"><br>
		<input type="submit" class="button" value="Search" name="sbutton" value="Search">
		<div></div>
		</form>
		<?php
		
		include_once("dbconfig1.php");

		if(isset($_POST['sbutton']))
		{
			
			$search=$_POST['sb'];
			$sql1="select * from product where pname like '%$search%'";
			$result1 = $conn->query($sql1);
			if ($result1->num_rows > 0)
			{		
			while($row = $result1->fetch_assoc())
			{
						
			echo '<div class="display">';
			
				 echo "Product Id :".$row["productid"].'<br>';
				  $productid=$row["productid"];
				 echo  $row["pname"].'<br>';
				 $pname=$row["pname"];
				echo '<img src="'.$row["pimage"].'" width=300 height=100> </img>'; echo '<br>'; 
				 $pprice=$row["pprice"];
				  echo  "Product price :".$row["pprice"].'<br>';
				 echo  "Product Quantity Available :".$row["pquantity"].'<br>';
				 echo  "Product Category :".$row["pcategory"].'<br>';
				 $pcategory=$row["pcategory"];
				 echo  "Product Brand :".$row["pbrand"].'<br>';
				 $pbrand=$row["pbrand"];
				
				 
				  echo '<ul class="actions">';
				 	
				 echo '<a href="landing'.$pcategory.'.php">View Full Details</a>';
			
				 echo '</ul>';
				 
				 	
				
				 
				echo '</div>';
				
			}
			}
		else
			{
				echo "Product Not found";
				
			}
				
			
	if(isset($_POST['cartbOcassional']))
	{
		header('Location:landingOcassional.html');
	}
	if(isset($_POST['cartbTastes']))
	{
		header('Location:landingTastes.html');
	}
	if(isset($_POST['cartbGroceries']))
	{
		header('Location:landingGroceries.html');
	}
	if(isset($_POST['cartbOils']))
	{
		header('Location:landingOils.html');
	}
	if(isset($_POST['cartbGrains']))
	{
		header('Location:landingGrains.php');
	}
	if(isset($_POST['cartbSpices']))
	{
		header('Location:landingSpices.html');
	}
  
		}

	?>

</div>
</body>
</html>