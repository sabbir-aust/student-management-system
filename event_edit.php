<?php
	include 'header.php';
?>

	<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Insert Event</small></h1>
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
                                $result = mysqli_query($con,"SELECT * FROM event WHERE e_id = '$id'");
                                while($row = mysqli_fetch_array($result)){  
                            ?>
                            <form action="event_update.php" method="POST">
                            <div class="form-group name">
                                    <label for="name">Title</label>
                                    <input id="name" value="<?php echo $row['title']?>" type="text" class="form-control" placeholder=" Enter Time"name="title">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Date</label>
                                    <input id="name" type="date" value="<?php echo $row['month'].'-'.$row['date'].'-2016';?>" class="form-control" placeholder="Enter Date"name="date">
                                </div><!--//form-group-->
                                <div class="form-group name">
                                    <label for="name">Time</label>
                                    <input id="name" type="text" value="<?php echo $row['time']?>" class="form-control" placeholder=" Enter Time"name="time">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Location</label>
                                    <input id="name" type="text" value="<?php echo $row['loc']?>" class="form-control" placeholder="Enter Location"name="loc">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Description</label>
                                    <textarea type="date"  class="form-control" placeholder="Enter Description"name="desc"><?php echo $row['desc']?></textarea>
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