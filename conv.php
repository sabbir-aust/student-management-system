<?php
   session_start();
   if($_SESSION['student_logged_in']=='no'){
    header('location:login.php');
   }
   $id=$_SESSION['user_id'];
?>
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
                    <ul class="nav nav-tabs">
                           <li><a href="student.php">Profile</a></li>
                          <li><a href="conv.php">Conversation</a></li>
                          <li><a href="logout.php">Logout</a></li>
                      
                    </ul>
                           
                    <div class="col-md-12">
                      <div class="table-responsive">                      
                      <table class="table table-hover">
                          <thead>
                            
                            <tr>
                              
                              
                              <th>
                                Subject
                              </th>
                              <th>
                                View
                              </th>
                              <th>
                                Delete
                              </th>
                            </tr>
                          </thead>
                            <?php
                              $con=mysqli_connect("localhost","root","","sms");
                              $rslt=mysqli_query($con,"SELECT * from student_contact WHERE msg_to = '$id' OR msg_from = '$id'") ;

                              while ($row=mysqli_fetch_array($rslt))
                                {
                                    //print_r($row);

                            ?>
                            <tbody>
                              <tr>
                                <td>
                                  <?php
                                    echo $row['sub'];
                                  ?> 
                                </td>
                                <td>
                                 <a href="msg_view.php?id=<?php echo $row['student_contact_id']; ?>">
                                    View
                                  </a>
                                </td>
                                <td>
                                  <a onclick="return confirm('do you really want to delete this?')"
                                    href="msg_del.php?id=<?php echo $row['student_contact_id']; ?>">
                                    delete
                                  </a>
                                </td>
                              </tr>

                              
                            </tbody>
                            <tr>
                                <td>
                                  
                                </td>
                              </tr>
                            <?php
                               }
                            ?>
                          </table><!--//table-->
                        </div><!--//table-responsive-->











                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
  include 'footer.php';
?>

