<?php
	 session_start();
	 if($_SESSION['student_logged_in']=='no'){
	 	header('location:login.php');
	 }
?>
<?php
	include 'header.php';
?>

	<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Profile</small></h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Profile</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">     
                    <div class="row page-row">
                    	<ul class="nav nav-tabs">
                                  <li class="active"><a href="student.php" data-toggle="tab">Proflie</a></li>
                                  <li><a href="conv.php">Conversation</a></li>
                        			<li>
                        				<a href="logout.php">
                        					Logout
                        				</a>
                        			</li>       
                         </ul>

                        <div class="col-md-12">

                                        <div class="table-responsive">                      
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>
																Student Id
															</th>
															<th>
																Student Name
															</th>
															
															
															<th>
																Phone
															</th>
															<th>
																Email
															</th>
															<th>
																Password
															</th>
								                       </tr>
                                                </thead>
                                                <?php
													$con=mysqli_connect("localhost","root","","sms");
													$id=$_SESSION['user_id'];
													$rslt=mysqli_query($con,"SELECT * from student_info Where s_id='$id'");
													while ($row=mysqli_fetch_array($rslt))
													{
												?>
												<div class="col-md-12">
                         		<img class="img-responsive pull-left" style="margin-top:5%" src="uploads/student/std_<?php echo $row['s_id']?>.jpg">
                         		<a  class="btn btn-sm btn-primary pull-right" href="edit.php?id=<?php echo $row['s_id']; ?>">
                                        Edit
                                      </a>
                         </div>
                                                <tbody>
                                                    <tr>
                                                        <td>
								<?php
									echo $row['s_id'];
								?> 
							</td>
							<td>
								<?php
									echo $row['s_name'];
								?>
							</td>
							<td>
								<?php
									echo $row['s_ph'];
								?>
							</td>
							
							<td>
								<?php
									echo $row['email'];
								?>
							</td>
							<td>
								<?php
									echo $row['pass'];
								?>
							</td>
                                                    </tr>
                                                </tbody>
                                                <?php
                                                	}
                                                ?>
                                            </table><!--//table-->
                                        </div><!--//table-responsive-->
                                    </div>
                        
                    </div><!--//page-row-->
                </div><!--//page-content--> 
            </div><!--//page--> 
        </div><!--//content-->
   
<?php
	include 'footer.php';
?>

    