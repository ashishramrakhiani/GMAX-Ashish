<html>
<head>
<style>
.button {
    background-color: #4CAF50;
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
	width:100%;
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
	margin:10px;
}
body label{
	font-size:1.3em;
}
body{
	font-size:1.3em;
}
</style>
</head>
<?php
session_start();
include_once("dbconfig1.php");
$selector='';
$selector=$_SESSION['selectors'];

$sql1="SELECT * FROM product WHERE productid='$selector'";
										$result1 = $conn->query($sql1);
										if ($result1->num_rows > 0)
											{
										
										while($row = $result1->fetch_assoc()) {
											$productid = $row["productid"];
											$pname = $row["pname"];
											$pprice=$row["pprice"];
											$pquantity=$row["pquantity"];
											$pcategory=$row["pcategory"];
											$pbrand=$row["pbrand"];
											$pimage=$row["pimage"];
											}
											
											
				?>
</head>
<body>
<div class="container">

								
										<h1 align="center">Edit Product Info</h1>
										
										
										 <form action="" method="post" enctype="multipart/form-data">

										Product name:<input type="text" placeholder="Product name" value="<?php echo $pname; ?>" name="pname"><br><br><br>
										Product price :<input type="text" placeholder="product price" value="<?php echo $pprice; ?>" name="pprice"><br><br><br>
										Product quantity :<input type="text" placeholder="product quantity" value="<?php echo $pquantity; ?>" name="pquantity"><br><br><br>
										Product category:<input type="text" placeholder="product category" value="<?php echo $pcategory; ?>" name="pcategory"><br><br><br>
										Product brand :<input type="text" placeholder="product brand" value="<?php echo $pbrand; ?>" name="pbrand"><br><br><br>
										product Image path:<input type="text" placeholder="product image path" value="<?php echo $pimage; ?>" name="pimage"><br><br><br>
							<input type = "submit" class = "button"  value = "save" name = "save">						
										</form>	
									<?php	
								  if(isset($_POST['save']))
								  {
									 
									  $productid=$selector;
									  $pname=$_POST['pname'];
									  $pprice=$_POST['pprice'];
									  $pquantity=$_POST['pquantity'];
									  $category=$_POST['pquantity'];
									  $pbrand=$_POST['pbrand'];
									  $sql2 = "UPDATE product SET pname='$pname',pprice='$pprice',pquantity='$pquantity',pcategory='$pcategory',pbrand='$pbrand' WHERE productid='$selector'";

								if(mysqli_query($conn,$sql2))
								{
									echo '<script>alert("Record Edited")</script>';
									

								}
								else
								{
									
									echo mysqli_error($conn);
								}
								
							}
						}
						else{
							echo "error";
						}
						
?>	

</div>
</body>

</html>							  