<?php

session_start();
include_once('dbconfig1.php');
if(!isset($_SESSION['EMAIL']))
{
	header('Location:index.php');
}
?><!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Payment</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="codstyle.css">
<style>
#order
{
	background-color:#7ed321;
}
</style>
  
</head>

<body>
  
<div class="container">
  <form action="thankyou.php" method="post">
    <div class="row">
      <h4>Payment</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name" name="fn"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="State" name="state"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="District" name="district"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
    </div>
	<div class="input-group input-group-icon">
        <input type="text" placeholder="Town" name="town"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
    
	<div class="input-group input-group-icon">
        <input type="text" placeholder="Phone Number" name="pn"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="text" placeholder="Pin Code" name="pc"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
    
    
    <div class="row">
      <h4>Payment Details</h4>
      <div class="input-group">
        <input type="radio" name="payment-method" value="Cash On Delivery" id="payment-method-card" checked="true"/>
        <label for="payment-method-card">Cash On delivery</label>
        
      </div>
      
      
      </div>

      
    
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for receiving the order in my cart, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>
	<div class="row">
      
      <div class="input-group">
        <input type="Submit" id="order" name="Submit" value="Order"/>
        
      </div>
    </div>

  

  
<?php
if(isset($_POST['Submit']))
{
	include_once('dbconfig1.php');
	$fn=$_POST['fn'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	$town=$_POST['town'];
	$pn=$_POST['pn'];
	$pc=$_POST['pc'];
	$email=$_SESSION['EMAIL'];
	$sql="INSERT INTO cod(email,fullname,state,district,town,pn,pc) values('$email','$fn','$state','$district','$town','$pn','$pc')";
if(mysqli_query($conn,$sql))
{
	echo '<script> alert("Order Placed") </script>';
	echo '<script> alert("'.$_SESSION['EMAIL'].'") </script>';
$to = $email;
$subject = 'Order Placed! GMAX';
$message = 'Your order has been placed and it will reach you in 2-3 bussiness days';
$headers = "From:GMAX";
if (mail($to, $subject, $message, $headers)) {
   echo '<script>alert("mail")</script>';
   header('Location:thankyou.php');
} else {
    echo '<script>alert("mail fail")</script>';
}

}
else{
	
echo '<script>alert("'.mysqli_error($conn).'")</script>';
}
	
}

?>
</form>
</div>

</body>
</html>
