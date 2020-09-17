<?php session_start();?>
<?php
    if($_SESSION['student_logged_in'] == 'no'){
        header('location:index.php');
    } 
      
    include 'header.php';
?>
<div class="row">
    <div class="col-md-12">
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Students</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index-2.html">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Students</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <?php
                      $con=mysqli_connect("localhost","root","","sms");
                      $rslt=mysqli_query($con,"SELECT * from student_info");
                      while ($row=mysqli_fetch_array($rslt))
                        {
                    ?>
                    <div class="row page-row">
                        <div class="jobs-wrapper col-md-12 col-sm-12">           
                            <div class="panel panel-default page-row">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><a href="#">Name: <?php echo $row['s_name']?></a> </h3>
                                </div>
                                <div class="panel-body">
                                    <center>
                                        <img class="img-responsive" src="uploads/student/std_<?php echo $row['s_id']?>.jpg">
                                    </center>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Department:</strong> Computer Science</li>
                                    <li class="list-group-item"><strong>Phone:</strong> <?php echo $row['s_ph'];?></li>
                                    <li class="list-group-item"><strong>Email:</strong> <?php echo $row['email'];?></li>
                                    <li class="list-group-item"><strong>Blood Group:</strong> <?php echo $row['s_bg'];?></li>
                                    <li class="list-group-item"><strong>Death of Birth:</strong> <?php echo $row['dob'];?></li>
                                </ul>
                                <div class="panel-footer">
                                    <div class="row">
                                        <ul class="list-inline pull-right">
                                            <li><a href="student_contact.php?id=<?php echo $row['s_id']?>" class="btn btn-sm btn-primary" style="font-size:16px">Message me</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--//panel-->                 
                        </div><!--//jobs-wrapper-->
                    </div><!--//page-row-->
                    <?php 
                        }
                    ?>
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div>
</div>
<?php
    include 'footer.php';
?>