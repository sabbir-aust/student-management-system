<?php
	$con = mysqli_connect("localhost","root","","sms");
	$id = $_GET['id'];
	unlink('uploads/lecture/lec_'.$id.'.jpg');
	if (mysqli_query($con," DELETE FROM `lecture` WHERE lecture_id = '$id' ")) {
    	echo "Record deleted successfully";
    	header('location:admin_lecture.php');
	} else {
    	echo "Error deleting record: " . mysqli_error($con);
	}
	
?>