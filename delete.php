<?php
	$con = mysqli_connect("localhost","root","","sms");
	$id = $_GET['id'];
	unlink('uploads/student/std_'.$id.'.jpg');
	mysqli_query($con,"DELETE FROM `student_info` WHERE s_id = '$id'");
	header('location:admin_std.php');
?>
