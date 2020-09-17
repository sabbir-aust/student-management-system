<?php
	$con = mysqli_connect("localhost","root","","sms");
	$id = $_GET['id'];
	unlink('uploads/rou_'.$id.'.jpg');
	if (mysqli_query($con," DELETE FROM `routine` WHERE routine_id = '$id' ")) {
    	echo "Record deleted successfully";
    	header('location:admin_routine.php');
	} else {
    	echo "Error deleting record: " . mysqli_error($con);
	}
	//header('location:admin_desc.php');
?>