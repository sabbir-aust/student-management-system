<!DOCTYPE html>

<head>
    <title>Welcome to Our Website</title>
  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="icon" type="icon" href="icon.png">
 
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">

</head> 

<body class="home-page">
    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header class="header">  
            <div class="top-bar">
                <div class="container">              
                    <ul class="social-icons col-md-6 col-sm-6 col-xs-12 hidden-xs">
                        <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>         
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
                    <a href="#"><img id="logo" width="200px" height="70px;" src="icon.png" alt="Logo"></a>
                    Loopers33
                </h4><!--//logo-->           
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
                        <li class="active nav-item"><a href="#">Home</a></li>

                        
                        
                         <li class="nav-item"><a href="login.php">Login</a></li>
                        
                       
                        <li class="nav-item"><a href="contact.php">Sign up</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->
        
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div id="promo-slider" class="slider flexslider">
                <ul class="slides">
                    <li>
                        <img src="bappi_1.jpg"  alt="" />
                    </li>
                    <li>
                        <img src="bappi_2.jpg"  alt="" />
                    </li>
                    <li>
                        <img src="bappi_3.jpg"  alt="" />
                    </li>
                    <li>
                        <img src="bappi_4.jpg"  alt="" />
                    </li>
                    <li>
                        <img src="bappi_5.jpg"  alt="" />
                    </li>
                </ul><!--//slides-->
            </div><!--//flexslider-->
          
    
   
    
    <!-- *****CONFIGURE STYLE****** -->  
    <div class="config-wrapper hidden-xs">
        <div class="config-wrapper-inner">
            <a id="config-trigger" class="config-trigger" href="#"><i class="fa fa-cog"></i></a>
            <div id="config-panel" class="config-panel">
                <p>Choose Colour</p>
                <ul id="color-options" class="list-unstyled list-inline">
                    <li class="default active" ><a data-style="assets/css/styles.css" data-logo="assets/images/logo.png" href="#"></a></li>
                    <li class="green"><a data-style="assets/css/styles-green.css" data-logo="assets/images/logo-green.png" href="#"></a></li>
                    <li class="purple"><a data-style="assets/css/styles-purple.css" data-logo="assets/images/logo-purple.png" href="#"></a></li>
                    <li class="red"><a data-style="assets/css/styles-red.css" data-logo="assets/images/logo-red.png" href="#"></a></li>
                </ul><!--//color-options-->
                <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
            </div><!--//configure-panel-->
        </div><!--//config-wrapper-inner-->
    </div><!--//config-wrapper-->
      <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> 
    <script type="text/javascript" src="assets/js/main.js"></script>     
</body>


</html> 

