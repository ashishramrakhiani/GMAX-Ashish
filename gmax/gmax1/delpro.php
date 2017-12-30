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
	margin:0px;
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
<body>
<div class="container">
<h1 align="center">Delete products</h1>
<form action="" method="post">
<?php

	include_once("dbconfig1.php");

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
				 ?>
				 <td><font color="black"><input name="selector" type="radio" value="<?php echo $row['productid']; ?>"></font></td>
				 
				 <?php
				 
     			echo '</tr>';
			}
								
			echo '</tbody>'.'</table>'.'</div>'; 
		}
		
		
	
		?>
		
		
		<input type="submit" class="button" value="Delete" name="eb">
		
		
		</form>
		<?php
		
			if(isset($_POST['eb']) && !empty($_POST['selector']))
			{
				$selector=$_POST['selector'];
				$sql2 = "DELETE from product WHERE productid='$selector'";
				if(mysqli_query($conn,$sql2))
								{
									echo '<script>alert("Record Deleted")</script>';
									

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
		</div>
	</body>
	</html>