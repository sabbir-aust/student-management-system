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
	
	    $name  = $_POST['name'];
        $add    = $_POST['address'];
        $bg     = $_POST['bg'];
        $dob    = $_POST['dob'];
        $phone  = $_POST['ph'];
        $email  = $_POST['email'];
        $password   = $_POST['pass'];
    
        if (mysqli_query($con,"INSERT INTO student_info (s_name, s_add, s_bg, dob, s_ph, email, pass) VALUES ('$name', '$add','$bg','$dob','$phone','$email','$password')")) {
            echo "Record inserted successfully";
            $last_id = $con->insert_id;
        //move_uploaded_file($_FILES["img"]["tmp_name"], "baapi/rou_".$last_id.".png");
        //header('location:admin_routine.php');
            if(isset($_FILES['image']['name'])){ 
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/student/std_'.$last_id.'.jpg');

                echo "Success";
                header('location:admin_std.php');
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
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name" name="name"></textarea>
                                </div>
                                <div class="form-group name">
                                    <label for="name">Address</label>
                                    <input type="text" class="form-control" placeholder="Enter address" name="address">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Dath of Birth</label>
                                    <input type="date" class="form-control" placeholder="Enter date of birth" name="dob">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Blood Group</label>
                                    <input type="text" class="form-control" placeholder="Enter boold group" name="bg">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Phone</label>
                                    <input type="tel" class="form-control" placeholder="Enter your phone no" name="ph">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter email" name="email">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter password" name="pass">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Image</label>
                                    <input type="file" class="form-control" name="image"></textarea>
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
