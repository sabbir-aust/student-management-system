<?php
	$con = mysqli_connect("localhost","root","","sms");
	
	if($_POST){	
		$id 	= $_POST['id'];
		$dt 	= $_POST['date'];
		$title 	= $_POST['title'];
		$dt2	= strtotime(str_replace('-','/', $dt));
		$date   = date("d", $dt2);
		$mon   = date("m", $dt2);
		if($mon==1){
			$month='Jan';
		} elseif($mon==2) {
			$month='Feb';
		} else if($mon==3){
			$month='Mar';
		} else if($mon==4){
			$month='Apr';
		} else if($mon==5){
			$month='May';
		} else if($mon ==6){
			$month='Jun';
		} else if($mon==7){
			$month='Jul';
		} else if($mon ==8){
			$month='Aug';
		} else if($mon==9){
			$month='Sep';
		} else if($mon==10){
			$month='Oct';
		} else if($mon==11){
			$month='Nov';
		} else {
			$month='Dec';
		}
		$time 	= $_POST['time'];
		$loc 	= $_POST['loc'];
		$desc 	= $_POST['desc'];
		
	mysqli_query($con,"INSERT INTO `event`( `date`, `month`, `time`,`title`, `loc`, `desc`) VALUES ('$date','$month','$time ','$title ','$loc','$desc')");
	header('location:admin_events.php');
}
?>

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
                            <form action="" method="POST">
                            <div class="form-group name">
                                    <label for="name">Title</label>
                                    <input id="name" type="text" class="form-control" placeholder=" Enter Time"name="title">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Date</label>
                                    <input id="name" type="date" class="form-control" placeholder="Enter Date"name="date">
                                </div><!--//form-group-->
                                <div class="form-group name">
                                    <label for="name">Time</label>
                                    <input id="name" type="text" class="form-control" placeholder=" Enter Time"name="time">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Location</label>
                                    <input id="name" type="text" class="form-control" placeholder="Enter Location"name="loc">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Description</label>
                                    <textarea type="date" class="form-control" placeholder="Enter Description"name="desc"></textarea>
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

    
