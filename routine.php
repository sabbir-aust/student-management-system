
<?php
          
    include 'header.php';
?>
<div class="row">
    <div class="col-md-12">
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Routine</h1>
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
                      $rslt=mysqli_query($con,"SELECT * from routine");
                      while ($row=mysqli_fetch_array($rslt))
                        {
                    ?>
                    <div class="row page-row">
                        <div class="jobs-wrapper col-md-12 col-sm-12">           
                            <div class="panel panel-default page-row">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><a href="#"></a>Routine </h3>
                                </div>
                                <div class="panel-body">
                                    <center>
                                        <img class="img-responsive" src="uploads/rou_<?php echo $row['routine_id']?>.png">
                                    </center>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Department:</strong> Computer Science</li>
                                    <li class="list-group-item"><strong>Semester:</strong> <?php echo $row['sem'];?></li>
                                    <li class="list-group-item"><strong>Section :</strong> <?php echo $row['sec'];?></li>
                                </ul>
                               
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