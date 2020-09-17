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
					<li>
                        <img src="bappi-6.jpg"  alt="" />
                    </li>
					
					
                </ul><!--//slides-->
            </div><!--//flexslider-->
            <section class="promo box box-dark">        
                <div class="col-md-12">
                <h1 class="section-heading">About Loopers33</h1>
                    <p style="text-align:justify">This is a community group for Aust CSE spring 2K14. Only the members of the CSE department of AUST Spring'14 are added here.
AS we know, The 150 students of CSE department will be divided into 3 sections, so this group is created in order to build up the unity among 3 sections. Therefore, it doesn't matter whether you are in A/B/C section, because, u can always communicate with the people of other sections through this group. 

WE ARE ONE #CSE 
 </p>   
                </div>  
                
            </section><!--//promo-->
            <section class="news">
                <h1 class="section-heading text-highlight"><span class="line">Latest News</span></h1>     
                <div class="carousel-controls">
                    <a class="prev" href="#news-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                    <a class="next" href="#news-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                </div><!--//carousel-controls--> 
                <div class="section-content clearfix">
                    <div id="news-carousel" class="news-carousel carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                            
                             <?php
                                $con=mysqli_connect("localhost","root","","sms");
                                $rslt=mysqli_query($con,"SELECT * from news order by news_id desc");
                                while ($row=mysqli_fetch_array($rslt))
                                {
                            ?>
                                <div class="col-md-4 news-item">
                                    <h2 class="title"><?php echo $row['news_title'];?></h2>
                                    <img class="thumb" src="assets/images/news/newspic.jpg"  alt="" />
                                    <p><?php echo substr($row['news'],0,150);?></p>
                                    <a class="read-more" href="news.php">Read more<i class="fa fa-chevron-right"></i></a>                
                                </div>
                            <?php
                               }
                            ?>
                            </div>
                            
                    	</div><!--//news-carousel-->  
                	</div>
                   <!--//section-content--> 
                </div>    
            </section><!--//news-->
            <div class="row cols-wrapper">
                <div class="col-md-3">
                    <section class="events">
                        <h1 class="section-heading text-highlight"><span class="line">Events</span></h1>
                        <div class="section-content">
                            <div class="event-item">
                                 <?php
                                $con=mysqli_connect("localhost","root","","sms");
                                $rslt=mysqli_query($con,"SELECT * from event order by e_id desc");
                                while ($row=mysqli_fetch_array($rslt))
                                {
                            ?> 
                                <p class="date-label">
                                    <span class="month"><?php
                                                    echo $row['month'];
                                            ?></span>
                                    <span class="date-number">
                                    <?php
                                        echo $row['date'];
                                    ?>
                                    </span>
                                </p>
                                <div class="details">
                                    <h2 class="title">
                                        <?php
                                           echo $row['title'];
                                        ?>
                                    </h2>
                                    <p class="time">
                                        <i class="fa fa-clock-o"></i>
                                        <?php
                                                    echo $row['time'];
                                        ?>
                                    </p>
                                    <p class="location">
                                        <i class="fa fa-map-marker"></i>
                                            <?php
                                                 echo $row['loc'];
                                            ?>
                                    </p>                            
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                            
                            <a class="read-more" href="event.php">All events<i class="fa fa-chevron-right"></i></a>
                        </div><!--//section-content-->
                    </section><!--//events-->
                </div><!--//col-md-3-->
                <div class="col-md-9">
                    <!--//course-finder-->
                    <section class="video">
                        <h1 class="section-heading text-highlight"><span class="line">History of AUST CSE</span></h1>
                       
                        <div class="section-content">    
                                                     
                            <p class="description" style="text-align:justify">
    
                            The department of Computer Science and Engineering, abbreviated CSE, is offering an undergraduate engineering degree program since the establishment of the university in the year 1995 with a view to offer quality higher education to numerous worthy young fellows as well as to meet the huge demand of highly qualified specialists in the field. The program follows an intensive course curriculum containing well-organized courses on basic sciences, computer science, electrical and electronic engineering, computer engineering, management and humanities. Computer science and engineering courses constitute the bulk of the program (about 70%) and are most emphasized, of course. Usual intake of students in the department is twice in an year. Students graduated from this department are employed in different prestigious institutions and organizations home and abroad. A good number of our graduates have completed postgraduate programs including doctoral programs with brilliant performances at highly ranked universities around the world. The department has a good number of young full-time faculty members with best available exposure to ever-growing horizon of computer science and engineering. Besides, a number of part-time faculties also teach in each semester from other universities, research organizations and industrial establishments for extending experience-rich education. The department organizes various co-curricular and extra-curricular activities to develop important social and professional faculties in the students. Most common co-curricular activity is the programming contest, which has become regular by this time. And the most common extra-curricular activities are reception parties for welcoming the newly entered students and for biding farewell to the outgoing students. The department has developed its own laboratories which include six computer labs and one digital electronics lab equipped with modern personal computers and electronic devices. There is a server center attached to the department which is equipped with various PC-server systems for providing network facilities to the labs and offices all over the university campus</p>
                        </div><!--//section-content-->
                    </section><!--//video-->
                </div>
                <!--//col-md-3-->
            </div><!--//cols-wrapper-->
        </div>