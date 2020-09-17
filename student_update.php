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
		$id 	= $_POST['id'];
		$name 	= $_POST['name'];
		$add 	= $_POST['add'];
		$bg 	= $_POST['bg'];
		$dob 	= $_POST['dob'];
		$phone 	= $_POST['ph'];
		$email 	= $_POST['em'];
		$password 	= $_POST['password'];
		if (mysqli_query($con,
		"UPDATE `student_info` SET `s_name`='$name',`s_add`='$add',`s_bg`='$bg ',`dob`='$dob',`s_ph`='$phone',`email`='$email',`pass`='$password' WHERE `s_id` ='$id'
		")) {
	    		echo "Record updated successfully";
		    	if(isset($_FILES['image']['name'])){ 
		            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/student/std_'.$id.'.jpg');
		            echo "Success";
		            //header('location:admin_std.php');
		        }
			} else {
		    	echo "Error editing record: " . mysqli_error($con);
			}
		
		
		header('location:student.php');
		
	}
	else{
		echo "There is an error!!!";
	}
?>