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
		$news_title     = $_POST['title'];
        $news    = $_POST['desc']; 
		if (mysqli_query($con,
		"UPDATE `news` SET `news_title`='$news_title',`news`='$news' WHERE `news_id` ='$id'
		")) {
		        echo "Success";
		     	header('location:admin_news.php');

		}else {
		    	echo "Error editing record: " . mysqli_error($con);
		}
		
	}
	else{
		echo "There is an error!!!";
	}
?>