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
</style>
</head>
<body>
<div class="container">
<h1 align="center">Admin Access</h1>
<h2 align="center">Product Information</h2>

<form role="form" action="" method="post">
<input type="submit" class="button" value="Display Prodcut Info" name="dp">
<input type="submit" class="button" value="Edit Prodcut Info" name="ep">
<input type="submit" class="button" value="Delete Prodcut Info" name="dep">
<input type="submit" class="button" value="Search Prodcut Info" name="sp">
</form>
<?php
include_once("dbconfig1.php");


if(isset($_POST['dp']))
{
	
	$sql="select * from product order by productid";
	$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
						
		    echo '<div class="display"><table border="2">
	    	<thead>
			<tr>
			<th>Product Id</th>
			<th>Product Name</th>
			<th>Product price</th>
			<th>Product Quantity</th>
			<th>Product Category</th>
			<th>Product Brand </th>
			</tr>
			</thead>
			<tbody>';
			// output data of each row
			while($row = $result->fetch_assoc()) {
							

				 echo '<tr><td>'. $row["productid"].'</td>';
				 echo '<td>'. $row["pname"].'</td>';
				 echo '<td>'. $row["pprice"].'</td>';
				 echo '<td>'. $row["pquantity"].'</td>';
				 echo '<td>'. $row["pcategory"].'</td>';
				 echo '<td>'. $row["pbrand"].'</td>';
				 
     			echo '</tr>';
			}
								
			echo '</tbody>'.'</table>'.'</div>'; 
			
		}
	}
	if(isset($_POST['sp']))
	{
		header("Location:searchpro.php");

	}
	if(isset($_POST['ep']))
	{
		header("Location:editpro.php");

	}
	if(isset($_POST['dep']))
	{
		header("Location:delpro.php");

	}
	?>
		

</div>
</body>
</html>