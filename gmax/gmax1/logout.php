<?php
session_start();
unset($_SESSION['EMAIL']);
unset($_SESSION['NAME']);
unset($_SESSION['PASSWORD']);
session_destroy();
header('Location:index.php');
?>