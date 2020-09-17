<?php
  include 'header.php';
?>
<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Admin Panel</small></h1>
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
                    	<ul class="nav nav-tabs">
                          <li><a href="admin_std.php">Student</a></li>
                          <li><a href="admin_news.php">News</a></li>
                          <li><a href="admin_desc.php">Description</a></li>
                          
                          <li><a href="admin_routine.php">Routine</a></li>
                          <li><a href="admin_events.php">Events</a></li>
                          <li class="active"><a href="admin_lecture.php">Lecture</a></li>
                          <li><a href="a_logout.php">Logout</a></li>
                      </ul>
	                    <div class="col-md-12">
                        <a href="lecture_add.php" class="btn btn-sm btn-primary pull-right">
                            Insert lecture
                          </a>
                        <div class="table-responsive">                      
                          <table class="table table-hover">
                              <thead>
                                
                                <tr>
                                  <th>
                                    lecture Id
                                  </th>
                                  <th>
                                    Lecture Name
                                  </th>
                                  <th>
                                    Semester
                                  </th>
                                  <th>
                                    pdf options
                                  </th>
                                  <th>
                                    Edit
                                  </th>
                                  <th>
                                    Delete
                                  </th>
                                </tr>
                              </thead>
                                <?php
                                  $con=mysqli_connect("localhost","root","","sms");
                                  $rslt=mysqli_query($con,"SELECT * from lecture order by lecture_id desc");
                                  while ($row=mysqli_fetch_array($rslt))
                                    {
                                ?>
                                <tbody>
                                  <tr>
                                    <td>
                                      <?php
                                        echo $row['lecture_id'];
                                      ?> 
                                    </td>
                                    <td>
                                      <?php
                                        echo $row['name'];
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                        echo $row['sem'];
                                      ?>
                                    </td>
                                    <td>
                                      
                                      <a href="pdf_view.php?id=<?php echo $row['lecture_id']; ?>" target="_blank" class="btn btn-sm btn-primary">
                                        View pdf
                                      </a>
                                      <a href="pdf_download.php?id=<?php echo $row['lecture_id']; ?>" class="btn btn-sm btn-primary">
                                        download pdf
                                      </a>
                                      
                                    </td>
                                    <td>
                                      <a href="lecture_edit.php?id=<?php echo $row['lecture_id']; ?>">
                                        Edit
                                      </a>
                                    </td>
                                    <td>
                                      <a onclick="return confirm('do you really want to delete this?')"
                                        href="lec_del.php?id=<?php echo $row['lecture_id']; ?>">
                                        delete
                                      </a>
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