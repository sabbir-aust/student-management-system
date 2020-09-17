<!DOCTYPE html>

<?php
	include 'header.php';
?>

	<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Edit Student</small></h1>
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
                            <?php
                                $con = mysqli_connect("localhost","root","","sms");
                                $id = $_GET['id'];
                                $result = mysqli_query($con,"SELECT * FROM student_info WHERE s_id = '$id'");
                                while($row = mysqli_fetch_array($result)){  
                            ?>
                            <form action="update_process.php" method="POST" enctype='multipart/form-data'>
                                <div class="form-group name">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" value="<?php echo $row['s_name']?>" placeholder="Enter name"name="name">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Address</label>
                                    <input id="name" type="text" class="form-control" value="<?php echo $row['s_add']?>" placeholder=" Enter Address"name="add">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Blood Group</label>
                                    <input id="name" type="text" class="form-control" value="<?php echo $row['s_bg']?>" placeholder="Enter blood group"name="bg">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Date of Birth</label>
                                    <input id="name" type="date" class="form-control" value="<?php echo $row['dob']?>" placeholder="Enter Date of birth"name="dob">
                                </div>
                                
                                <div class="form-group phone">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="tel" class="form-control"  value="<?php echo $row['s_ph']?>" placeholder="Enter Phone number"name="ph">
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="email">Email<span class="required"></span></label>
                                    <input id="email" type="email" class="form-control" value="<?php echo $row['email']?>" placeholder="Enter email" name="em">
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="email">Password<span class="required"></span></label>
                                    <input id="password" type="text" class="form-control" value="<?php echo $row['pass']?>" placeholder="Enter new password" name="password">
                                </div><!--//form-group-->
                                <div class="form-group name">
                                    <img class="img-responsive" src="uploads/student/std_<?php echo $row['s_id']?>.jpg">
                                    <label for="name">Image</label>
                                    <input type="file" class="form-control" name="image"></textarea>
                                </div>
                                <button type="submit" class="btn btn-theme">Submit</button>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </form>
                            <br>
                            <br>
                            <br>
                            <br>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
                                        
<?php
    include 'footer.php';
?>
