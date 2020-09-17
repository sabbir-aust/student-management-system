<?php
	session_start();
	
	$con=mysqli_connect("localhost","root","","sms");
	if($_SESSION['student_logged_in'] == 'yes'){
		header('location:student.php');
	}	
	
	if(!isset($_SESSION['student_logged_in'])){
		$_SESSION['student_logged_in'] = 'no';
	}
	
	if($_POST){
		$name = $_POST['name'];
		$password = $_POST['password'];
		
		$result = mysqli_query($con, "SELECT * FROM student_info WHERE s_name = '$name' AND pass = '$password'");
		while($row = mysqli_fetch_array($result)){
			$_SESSION['student_logged_in'] = 'yes';
			$_SESSION['user_id'] = $row['s_id'];
			header('location:student.php');
		}
	}

?>
<?php
	include 'header.php';
?>


	<link rel="stylesheet" type="text/css" href="lg.css">
    <script type="text/javascript" src="lgjs.js"></script>

<div class="row">   
	<div class="col-md-12">
		<span href="#" class="button" id="toggle-login">Log in</span>

		<div id="login">
	 	 	<div id="triangle">
	 	 	</div>
	  			<h1>
	  				Log in
	  			</h1>
					  <form action="" method="post" >
					    <input type="text" placeholder="Username" name="name" />
					    <input type="password" placeholder="Password" name="password" />
					    <input type="submit" value="Log in" />
					  </form>
		</div>
	</div>
</div>

<?php
	include 'footer.php';
?>
   
