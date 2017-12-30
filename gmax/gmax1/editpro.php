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
</head>
<body>
<div class="container">
<h1 align="center">Edit products</h1>
<form role="form" action="" method="post">
<?php
session_start();
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
			<th>Product Image Path </th>
			</tr>
			</thead>
			<tbody>';
			while($row = $result->fetch_assoc()) {
							

				 echo '<tr><td>'. $row["productid"].'</td>';
				 echo '<td>'. $row["pname"].'</td>';
				 echo '<td>'. $row["pprice"].'</td>';
				 echo '<td>'. $row["pquantity"].'</td>';
				 echo '<td>'. $row["pcategory"].'</td>';
				 echo '<td>'. $row["pbrand"].'</td>';
				 echo '<td>'.$row["pimage"].'</td>';
				 ?>
				 <form action="" method="post">
				 <td><font color="black"><input type="radio" name="selector" value="<?php echo $row['productid']; ?>" ></font></td>
					
				 <?php
				
     			echo '</tr>';
				
			}
								
			echo '</tbody>'.'</table>'.'</div>'; 
			
		}
		
		
	
		?>
		
	
		<input type="submit" class="button" value="Edit" name="eb">
		</form>
		<?php
			
			if(isset($_POST['eb']) && !empty($_POST['selector']))
			{
				$_SESSION['selectors']=$_POST['selector'];
				header("Location:editpro2.php");


			}
			else
			{
				echo "Select a product";
			}
			
		?>
		</div>
	</body>
	</html>