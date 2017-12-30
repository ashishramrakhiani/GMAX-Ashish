
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
body{
	font-size:1.3em;
}
</style>
<body>
<div class="container">
<h1 align="center">Search Product</h1>
<form role="form" action="" method="post">
		<label for="sn">Enter product name:  </label>
		<input type="text" placeholder="Enter search name" name="sb"><br>
		<input type="submit" class="button" value="Search" name="sbutton" value="Search">
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
						
		    echo '<div class="display"><table border="2">
	    	<thead>
			<tr>
			<th>Product Id</th>
			<th>Product Name</th>
			<th>Product price</th>
			<th>Product Quantity</th>
			<th>Product Category</th>
			<th>Product Brand </th>
			<th>Product Image</th>
			
			</tr>
			</thead>
			<tbody>';
			// output data of each row
			while($row = $result1->fetch_assoc()) {
							

				 echo '<tr><td>'. $row["productid"].'</td>';
				 echo '<td>'. $row["pname"].'</td>';
				 echo '<td>'. $row["pprice"].'</td>';
				 echo '<td>'. $row["pquantity"].'</td>';
				 echo '<td>'. $row["pcategory"].'</td>';
				 echo '<td>'. $row["pbrand"].'</td>';
				 echo '<td>'?><img src="<?php echo $row["pimage"]?>" width=50 height=50"> </img><?php
				
     			echo '</tr>';
			}
							
			echo '</tbody>'.'</table>'.'</div>'; 
			
		}
		else
			{
				echo "Product Not found";
			}
				
			
	}
	


?>
</div>
</body>
</html>