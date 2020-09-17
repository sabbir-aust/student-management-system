<!DOCTYPE html>
<?php
    $con=mysqli_connect("localhost","root","","sms");
    if($_POST){
         $nm=$_POST['name'];
         $em=$_POST['em'];
         $phone=$_POST['phone'];
       $password=$_POST['password'];
        mysqli_query($con,"INSERT INTO `user` ( `name`, `email`, `phone`, `password`) VALUES ( '$nm', '$em', '$phone', '$password')"); 
		header('location:login.php');
    }
?>
<?php
	include 'header.php';
?>

	<div class="content container">
            <div class="page-wrapper">
                 
                <div class="page-content">     
                    <div class="row page-row">
	                    <div class="col-md-12">                           
                            
                            <form action="" method="POST">
                                <div class="form-group name">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" placeholder="Enter your name"name="name">
                                </div><!--//form-group-->
                                <div class="form-group phone">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="tel" class="form-control" placeholder="Enter your contact number"name="phone">
                                </div>
                                <div class="form-group email">
                                    <label for="email">Email<span class="required"></span></label>
                                    <input id="email" type="email" class="form-control" placeholder="Enter your email" name="em">
                                </div><!--//form-group-->
                                <!--//form-group-->
                                <div class="form-group message">
                                    <label for="password">Password<span class="required"></span></label>
                                    <input id="password" type="password" class="form-control" placeholder="Enter your contact number"name="password">
                                </div><!--//form-group-->
                                <button type="submit" class="btn btn-theme">Sign up</button>
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
    </body>
</html>
                                        
<?php
    include 'footer.php';
?>

    