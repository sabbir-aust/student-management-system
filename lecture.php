<?php
  include 'header.php';
?>
<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">User Panel</small></h1>
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