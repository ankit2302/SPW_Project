<?php session_start();
	session_destroy();
	setcookie('user','Try After 15 min',time()+900);
	header("location:login.php");
?>
