<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sms";

    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } 
	if($_POST){	
	
		$sem 	= $_POST['sem'];
    	$sec    = $_POST['sec'];
		$id 	= $_POST['id'];	
		if (mysqli_query($con,
		"UPDATE `routine` SET `sem`='$sem',`sec`='$sec' WHERE `routine_id` ='$id'
		")) {
	    		echo "Record updated successfully";
		    	if(isset($_FILES['image']['name'])){ 
		            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/rou_'.$id.'.png');
		            echo "Success";
		            header('location:admin_routine.php');
		        }
			} else {
		    	echo "Error editing record: " . mysqli_error($con);
			}
		
	}
	else{
		echo "There is an error!!!";
	}
?>