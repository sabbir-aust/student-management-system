<?php
	$con = mysqli_connect("localhost","root","","sms");
	
	if($_POST){	
		$id 	= $_POST['id'];
		$desc 	= $_POST['desc'];
		
		
		
		
		if (mysqli_query($con,
		"UPDATE `description` SET `description`='$desc' WHERE `description_id` ='$id'
		")) {
    	echo "Record updated successfully";
    	header('location:admin_desc.php');
	} else {
    	echo "Error editing record: " . mysqli_error($con);
	}
		
	}
	else{
		echo "There is an error!!!";
	}
?>