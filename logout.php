<?php
	session_start();
	
	$_SESSION['student_logged_in'] = 'no';
	$_SESSION['user_id'] = '';
	
	header('location:login.php');
?>