<?php
    session_start();
    error_reporting(0);
    $con = mysqli_connect("localhost","root","","sms");
    if($_SESSION['logged_in'] == 'yes'){
        header('location:adminpro.php');
    }   
    
    if(!isset($_SESSION['logged_in'])){
        $_SESSION['logged_in'] = 'no';
    }
    
    if($_POST){
        $admin_name = $_POST['aname'];
        $password = $_POST['apass'];
        
        $result = mysqli_query($con, "SELECT * FROM admin WHERE name = '$admin_name' AND password = '$password'");
        while($row = mysqli_fetch_array($result)){
            $_SESSION['logged_in'] = 'yes';
            $_SESSION['aid'] = $row['a_id'];
            header('location:adminpro.php');
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
                      <form action="" method="POST" >
                        <input type="text" placeholder="Username" name="aname" />
                        <input type="password" placeholder="Password" name="apass" />
                        <input type="submit" value="Log in" />
                      </form>
        </div>
    </div>
    </div>
  
<?php
	include 'footer.php';
?>

