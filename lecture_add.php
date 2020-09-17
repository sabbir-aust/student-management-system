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
    
        if (mysqli_query($con,"INSERT INTO lecture (name, sem) VALUES ('$lec', '$sem')")) {
            echo "Record inserted successfully";
            $last_id = $con->insert_id;
        //move_uploaded_file($_FILES["img"]["tmp_name"], "baapi/rou_".$last_id.".png");
        //header('location:admin_routine.php');
            echo $_FILES['pdf_f']['name'];
            if(isset($_FILES['pdf_f']['name'])){ 
                move_uploaded_file($_FILES['pdf_f']['tmp_name'], 'uploads/lecture/lec_'.$last_id.'.pdf');

                echo "Success";
                header('location:admin_lecture.php');
            }
    } else {
        echo "Error adding record: " .  $con->error;
    }	
    
}
?>

<?php
	include 'header.php';
?>

	<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Insert Desription</small></h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Admin</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">     
                    <div class="row page-row">
	                    <div class="col-md-12">                           
                            <h3 class="title"></h3>
                            <p></p>
                            <form action="" method="POST" enctype='multipart/form-data'>
                            
                               
                                <div class="form-group name">
                                    <label for="name">Lecture Name</label>
                                    <input type="text" class="form-control" placeholder="Enter name of the lecture" name="lec">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Semester</label>
                                    <input type="text" class="form-control" placeholder="Enter semester" name="sem">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Choose Pdf </label>
                                    <input type="file" class="form-control" name="pdf_f">
                                </div>
                                
                                <!--//form-group-->
                                <button type="submit" class="btn btn-theme">Submit</button>
                            </form>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
                                        
<?php
    include 'footer.php';
?>
