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
                            <?php
                                $con = mysqli_connect("localhost","root","","sms");
                                $id = $_GET['id'];
                                $result = mysqli_query($con,"SELECT * FROM routine WHERE routine_id = '$id'");
                                while($row = mysqli_fetch_array($result)){  
                            ?>
                            <form action="rou_update.php" method="POST" enctype='multipart/form-data'>
                            
                               
                                <div class="form-group name">
                                    <label for="name">Semester</label>
                                    <input type="text" class="form-control" value="<?php echo $row['sem']?>" placeholder="Enter Semester" name="sem"></textarea>
                                </div>
                                <div class="form-group name">
                                    <label for="name">Section</label>
                                    <input type="text" class="form-control" value="<?php echo $row['sec']?>" placeholder="Enter section" name="sec"></textarea>
                                </div>
                                <div class="form-group name">
                                    <img class="img-responsive" src="uploads/rou_<?php echo $row['routine_id']?>.png">
                                    <label for="name">Image</label>
                                    <input type="file" class="form-control" name="image"></textarea>
                                </div>
                                
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <!--//form-group-->
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
