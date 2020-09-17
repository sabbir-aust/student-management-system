<!DOCTYPE html>

<?php
	include 'header.php';
?>

	<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Edit Descripton</small></h1>
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
                                $result = mysqli_query($con,"SELECT * FROM description WHERE description_id = '$id'");
                                while($row = mysqli_fetch_array($result)){  
                            ?>
                            <form action="desc_update.php" method="POST">
                               
                                <div class="form-group name">
                                    <label for="name">Description</label>
                                    <textarea class="form-control" rows="6" placeholder="Enter Description" name="desc"><?php echo $row['description']?></textarea>
                                </div>
                                <button type="submit" class="btn btn-theme">Submit</button>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </form>
                            <br>
                            <br>
                            <br>
                            <br>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
                                        
<?php
    include 'footer.php';
?>
