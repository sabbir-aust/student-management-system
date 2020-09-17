<!DOCTYPE html>
<?php error_reporting(0)?>
<head>
    <title>Welcome to Our Website</title>
  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    
    <link rel="icon" type="icon" href="assets/icon.png">
 	
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    
        <script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>

</head> 

<body class="home-page">
    <div>
        <!-- ******HEADER****** --> 
        <header class="header">  
            <div class="top-bar">
                <div class="container">              
                    <ul class="social-icons col-md-6 col-sm-6 col-xs-12 hidden-xs">
                        <li><a href="https://twitter.com/" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/" ><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://bd.linkedin.com/" ><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://plus.google.com/" ><i class="fa fa-google-plus"></i></a></li>         
                        <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>             
                    </ul><!--//social-icons-->
                    <form class="pull-right search-form" role="search" action="search.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search the site..." name="srch">
                        </div>
                        <button type="submit" class="btn btn-theme">Go</button>
                    </form>         
                </div>      
            </div><!--//to-bar-->
            <div class="header-main container">
                <h4 class="logo col-md-4 col-sm-4">
                    <a href="#"><img id="logo" width="200px" height="70px;" src="assets/icon.png" alt="Logo"></a>
                    <strong>Loopers_33</strong>
                </h4>           
                <!--//info-->
            </div><!--//header-main-->
        </header><!--//header-->
        
        <!-- ******NAV****** -->
        <nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item"><a href="index.php">Home</a></li>

                        <li class="nav-item"><a href="news.php">News</a></li>
                        <li class="nav-item"><a href="event.php">Events</a></li>
                        <?php if($_SESSION['student_logged_in'] == 'yes'){?>
                            <li class="nav-item"><a href="student_list.php">Students</a></li>
                            
                        <?php }?>
                        <li class="nav-item"><a href="lecture.php">Lecture</a></li>
                        <li class="nav-item"><a href="routine.php">Routine</a></li>
                        <?php if($_SESSION['student_logged_in'] == 'no'){?>
                         <li class="nav-item"><a href="login.php">Login</a></li>
                         <?php }else {?>
                         <li class="nav-item"><a href="student.php">Your Profile</a></li>
                         <?php }?>
                         <li class="nav-item"><a href="a_login.php">Admin</a></li>
						 
						
                        <!--//dropdown-->
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->
        
        <!-- ******CONTENT****** --> 

        