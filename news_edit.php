<?php
	include 'header.php';
?>

	<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Insert News</small></h1>
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
                            <?php
                                $con = mysqli_connect("localhost","root","","sms");
                                $id = $_GET['id'];
                                $result = mysqli_query($con,"SELECT * FROM news WHERE news_id = '$id'");
                                while($row = mysqli_fetch_array($result)){  
                            ?>
                            <form action="news_update.php" method="POST">
                            <div class="form-group name">
                                    <label for="name">Title</label>
                                    <input id="name" value="<?php echo $row['news_title']?>" type="text" class="form-control" placeholder=" Enter title"name="title">
                                </div>
                                
                                <div class="form-group name">
                                    <label for="name">Description</label>
                                    <textarea class="form-control" placeholder="Enter Description" name="desc" ><?php echo $row['news']?></textarea>
                                </div>
                                
                                <!--//form-group-->
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-theme">Submit</button>
                            </form>
                            <?php
                                }
                            ?>
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