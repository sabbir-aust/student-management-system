<?php
	$con = mysqli_connect("localhost","root","","sms");
	$id = $_GET['id'];
	;
	if (mysqli_query($con," DELETE FROM `news` WHERE news_id = '$id' ")) {
    	echo "Record deleted successfully";
    	header('location:admin_news.php');
	} else {
    	echo "Error deleting record: " . mysqli_error($con);
	}
	//header('location:admin_desc.php');
?>