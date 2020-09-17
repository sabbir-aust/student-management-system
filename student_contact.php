
<?php session_start();?>
<?php
    
    if($_SESSION['student_logged_in'] == 'no'){
        header('location:index.php');
    }   
    $to=$_GET['id'];
    echo $from=$_SESSION['user_id'];
    $con=mysqli_connect("localhost","root","","sms");
    if($_POST){
         $sub=$_POST['sub'];
         $msg=$_POST['msg'];
        mysqli_query($con,"INSERT INTO `student_contact` ( `sub`, `msg`, `msg_to`, `msg_from`) VALUES ( '$sub', '$msg', '$to', '$from')"); 
		header('location:student_list.php');
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
                                    <label for="name">Subject</label>
                                    <input id="name" type="text" class="form-control" placeholder="Enter Subject " name="sub">
                                </div><!--//form-group-->
                                <div class="form-group phone">
                                    <label for="phone">Message</label>
                                    <textarea rows="6" class="form-control" placeholder="Enter your message"name="msg"></textarea>
                                </div>
                                <button type="submit" class="btn btn-theme">Send</button>
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

    