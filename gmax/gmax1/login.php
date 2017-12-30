
<?php
ob_start();
session_start();
 include_once('dbconfig1.php');
$errors='';
$flag=0;
$error='';
$flags=0;
$ready=0;
$user='';
$pass='';
$user1='';
$pass1='';
$readys=0;


if(isset($_POST['submit']))
{
	if(empty($_POST['email']))
	{
		$errors=$errors."email id cannot be empty<br>";
		$flag=1;
	}
	if(empty($_POST['password']))
	{
		$errors=$errors."passsword cannot be empty<br>";
		$flag=1;
	}
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login </title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="loginstyle.css">

  
</head>

<body>
<form role="" action="" method="post">
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="email" class="input" name="email">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" name="submit">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			
		</div>
	</div>
</div>
 </form> 
  
</body>
<?php

if(isset($_POST['submit']))
{
$user=test_input($_POST['email']);
$pass=$_POST['password'];

if (!filter_var($user, FILTER_VALIDATE_EMAIL)) {
  $errors = $errors."Invalid email format";
	$flags=1;
}
}
$sql = "SELECT * from user where email='$user' AND password='$pass'";

$result=$conn->query($sql);
while($row = $result->fetch_assoc()) 
{
	
	$user1=$row['email'];
	$pass1=$row['password'];
	$name=$row['fullname'];
}
$_SESSION['EMAIL']=$user1;
$_SESSION['PASSWORD']=$pass1;
$_SESSION['NAME']=$name;

if($user1=="a.ramrakhiani@somaiya.edu" && $pass1=="123456")
{
	$readys=1;
}
else
{
	$readys=0;
}
if(($result->num_rows)==1)
{
	echo '<script> alert("log in sucess") </script>';
	header('Location:index.php');
}
else
{		$flags=1;
		$error="Invalid username or password";
}

?>
	<?php
	if(isset($_POST['submit']) && $flags==1)
	{
			echo '<script> alert("Invalid Username or Password") </script>';
		
		
		
	}
if(isset($_POST['submit']) && $flag==1)
{
	echo '<div class="error">'.$errors.'</div>';
	
}


?>
<?php
function test_input($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	
	return $data;
}
?>

</html>
