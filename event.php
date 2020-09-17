<?php
	include 'header.php';
?>
<div class="content container">
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">Events</small></h1>
            <div class="breadcrumbs pull-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                    <li class="current">News & Events</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
         <div class="page-content">     
            <div class="row page-row">
              <div class="events-wrapper col-md-8 col-sm-7">                         
                    <article class="events-item page-row has-divider clearfix">
                        <div class="date-label-wrapper col-md-1 col-sm-2">
                          <?php
                            $con=mysqli_connect("localhost","root","","sms");
                            $rslt=mysqli_query($con,"SELECT * from event order by e_id desc");
                            while ($row=mysqli_fetch_array($rslt))
                            {
                          ?> 
                            <p class="date-label">
                                <span class="month"> 
                                    <?php
                                            echo $row['month'];
                                    ?>
                                </span>
                                <span class="date-number">
                                    <?php
                                            echo $row['date'];
                                    ?>
                                </span>
                            </p>
                        </div><!--//date-label-wrapper-->
                        <div class="details col-md-11 col-sm-10">
                            <h3 class="title"> 
                                <?php
                                        echo $row['title'];
                                ?>
                            </h3>
                            <p class="meta">
                            <span class="time">
                                <i class="fa fa-clock-o">
                                    <?php
                                        echo $row['time'];
                                    ?>
                                </i>
                                </span>
                            <span class="location">
                                <i class="fa fa-map-marker"></i>
                                    <?php
                                            echo $row['loc'];
                                    ?>
                                </span>
                            </p>  
                            <p class="desc">
                            <?php
                                    echo $row['desc'];
                            ?>
                            </p> 
                            <?php
                                }
                            ?>                      
                        </div><!--//details-->
                    </article><!--//events-item-->  
              </div>
           </div>
         </div>
     </div>
 </div>
<?php 
	include 'footer.php';
?>
