<?php
    $con = mysqli_connect("localhost","root","","sms");
    
    if($_POST){ 
        $news_title     = $_POST['title'];
        $news    = $_POST['dsec'];  
        mysqli_query($con,"INSERT INTO news (news_title, news) VALUES ('$news_title', '$news')");
        header('location:admin_news.php');
}
?>
<?php
	include 'header.php';
?>

	<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Insert Desription</small></h1>
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
                            <h3 class="title"></h3>
                            <p></p>
                            <form action="" method="POST" enctype='multipart/form-data'>
                            
                               
                                <div class="form-group name">
                                    <label for="name">News Title</label>
                                    <input type="text" class="form-control" placeholder="Enter title" name="title"></textarea>
                                </div>
                                <div class="form-group name">
                                    <label for="name">Description</label>
                                    <textarea  class="form-control" placeholder="Enter description" name="dsec"></textarea>
                                </div>
                              
                                
                                <!--//form-group-->
                                <button type="submit" class="btn btn-theme">Submit</button>
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
   
                                        
<?php
    include 'footer.php';
?>
