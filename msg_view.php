
<?php session_start();?>
<?php
    
    if($_SESSION['student_logged_in'] == 'no'){
        header('location:index.php');
    }   
    $id=$_GET['id'];
    $from=$_SESSION['user_id'];
    $con=mysqli_connect("localhost","root","","sms");
    if($_POST){
         $sub=$_POST['sub'];
         $msg=$_POST['msg'];
         $to=$_POST['rcv_id'];
        mysqli_query($con,"INSERT INTO `student_contact` ( `sub`, `msg`, `msg_to`, `msg_from`) VALUES ( '$sub', '$msg', '$to', '$from')"); 
		header('location:student.php');
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
                             <?php
                              $con=mysqli_connect("localhost","root","","sms");
                              $rslt=mysqli_query($con,"SELECT * from student_contact WHERE student_contact_id = '$id'") ;

                              while ($row=mysqli_fetch_array($rslt))
                                {
                                    //print_r($row);

                            ?>
                            <p>Msg From <?php if($_SESSION['user_id']==$row['msg_from']){?>You :<?php echo $row['msg']?><?php } else{?><?php echo $row['msg']?><?php }?></p>
                        </div>
                    </div>    
                    <div class="row page-row">
	                    <div class="col-md-12">                           
                            <h2>Reply</h2>
                            <form action="" method="POST">
                                <div class="form-group name">
                                    <label for="name">Subject</label>
                                    <input id="name" type="text" class="form-control" placeholder="Enter Subject " name="sub">
                                </div><!--//form-group-->
                                <div class="form-group phone">
                                    <label for="phone">Message</label>
                                    <textarea rows="6" class="form-control" placeholder="Enter your message"name="msg"></textarea>
                                </div>
                                <input type="hidden" name="rcv_id" value="<?php echo $row['msg_from']; ?>">
                                <button type="submit" class="btn btn-theme">Reply</button>
                            </form>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </body>
</html>
                                        
<?php
    include 'footer.php';
?>

    