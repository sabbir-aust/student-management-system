<?php
	include 'header.php';
?>
	<div class="content container">
        <div class="page-wrapper">
            <header class="page-heading clearfix">
                <h1 class="heading-title pull-left">News</small></h1>
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
                    <div class="news-wrapper col-md-8 col-sm-7">                         
                        <article class="news-item page-row has-divider clearfix row">       
                            <figure class="thumb col-md-2 col-sm-3 col-xs-4">
                                
                            </figure>
                            <div class="details col-md-10 col-sm-9 col-xs-8">
                                <?php
                                    $con=mysqli_connect("localhost","root","","sms");
                                    $rslt=mysqli_query($con,"SELECT * from news order by news_id desc");
                                    while ($row=mysqli_fetch_array($rslt))
                                    {
                                ?>
                                    <h3 class="title">
                                    <?php
                                        echo $row['news_title'];
                                    ?>
                                    </h3>
                                    <p>
                                        <?php
                                            echo $row['news'];
                                        ?>
                                    </p>
                                <?php
                                    }
                                ?>
                          </div>
                        </article>  
                    </div> 
               </div>
             </div>
        </div>
    </div>
<?php
    include 'footer.php';
?>
