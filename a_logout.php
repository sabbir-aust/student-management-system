<?php
	session_start();
	
	$_SESSION['logged_in'] = 'no';
	$_SESSION['user'] = '';
	
	header('location:a_login.php');
?>