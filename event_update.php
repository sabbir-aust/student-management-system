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
		$dt 	= $_POST['date'];
		$title 	= $_POST['title'];
		$dt2	= strtotime(str_replace('-','/', $dt));
		$date   = date("d", $dt2);
		$mon   = date("m", $dt2);
		if($mon==1){
			$month='Jan';
		} elseif($mon==2) {
			$month='Feb';
		} else if($mon==3){
			$month='Mar';
		} else if($mon==4){
			$month='Apr';
		} else if($mon==5){
			$month='May';
		} else if($mon ==6){
			$month='Jun';
		} else if($mon==7){
			$month='Jul';
		} else if($mon ==8){
			$month='Aug';
		} else if($mon==9){
			$month='Sep';
		} else if($mon==10){
			$month='Oct';
		} else if($mon==11){
			$month='Nov';
		} else {
			$month='Dec';
		}
		$time 	= $_POST['time'];
		$loc 	= $_POST['loc'];
		$desc 	= $_POST['desc'];
		$id 	= $_POST['id'];	
		if (mysqli_query($con,
		"UPDATE `event` SET `date`='$date',`month`='$month',`time`='$time',`title`='$title',`loc`='$loc',`desc`='$desc' WHERE `e_id` ='$id'
		")) {
		        echo "Success";
		     	header('location:admin_events.php');

		}else {
		    	echo "Error editing record: " . mysqli_error($con);
		}
		
	}
	else{
		echo "There is an error!!!";
	}
?>