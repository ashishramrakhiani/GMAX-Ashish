<?php
//session_start();
$database="GMAX";
$host="localhost";
$username="root";
$password="";
$conn=mysqli_connect($host,$username,$password,$database);
$_SESSION['conn']=$conn;

?>