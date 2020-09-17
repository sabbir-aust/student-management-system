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
	
		$lec 	= $_POST['lec'];
    	$sem    = $_POST['sem'];
		$id 	= $_POST['id'];	
		if (mysqli_query($con,
		"UPDATE `lecture` SET `name`='$lec',`sem`='$sem' WHERE `lecture_id` ='$id'
		")) {
	    		echo "Record updated successfully";
		    	if(isset($_FILES['pdf_f']['name'])){ 
		            move_uploaded_file($_FILES['pdf_f']['tmp_name'], 'uploads/lecture/lec_'.$id.'.pdf');
		            echo "Success";
		            header('location:admin_lecture.php');
		        }
			} else {
		    	echo "Error editing record: " . mysqli_error($con);
			}
		
	}
	else{
		echo "There is an error!!!";
	}
?>