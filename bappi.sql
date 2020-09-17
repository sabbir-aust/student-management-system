

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `address`, `phone`, `email`, `password`) VALUES
(1, 'bappi', 'Niketon', 12345678, 'bappi@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE IF NOT EXISTS `description` (
  `description_id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`description_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`description_id`, `desc`) VALUES
(4, 'asfasfsaf'),
(5, 'jkgjgkjjk'),
(6, 'll;ml;m'),
(7, 'desc'),
(8, 'ACFasfasf'),
(9, 'This is a community group for Aust CSE spring 2K14.'),
(10, 'This is a community group for Aust CSE spring 2K14. Only the members of the CSE department of AUST Spring 14 are added here.'),
(11, 'This is a community group for Aust CSE spring 2K14. Only the members of the CSE department of AUST Spring14 are added here. AS we know, The 150 students of CSE department will be divided into 3 sections, so this group is created in order to build up the unity among 3 sections');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(11) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `month`, `date`, `title`, `time`, `loc`, `desc`) VALUES
(1, 'jan', 11, 'Project show', '10-12pm', 'multipurpose hall', 'show project'),
(2, 'Aug', 29, 'Fresher Orientation', '10am-2pm', 'IEB', 'Fresher orienttion programme of new comers in AUST will be held on IEB.'),
(3, 'Jan', 14, 'Imagine cup', '12am-2pm', '7A03', 'Microsoft Imagine cup will be held on AUST.'),
(4, 'Mar', 10, 'AUST Soccer Tournament', '10am-4pm', 'Army Museam Field', 'Aust inter-university football tournament will be held on AMF. '),
(5, 'May', 15, 'Indoor Tournament', '10am-2pm', 'AUST', 'Aust indoor sports tournament will be held on AUST campus. '),
(7, 'aug', 28, 'seminar', '10-1pm', 'conference room ', 'robi seminer'),
(8, 'july', 25, 'msp', '1-4pm', 'multipurpose hall', 'msp seminar');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(200) NOT NULL,
  `news` varchar(1000) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news`) VALUES
(1, 'Carry Info', 'The undergraduate students of AUST having the backlog of carryover course(s), are advised to apply in prescribed application form available in the Office of the Controller of Examinations of the University (Block D, Level 5). Filled in application after payment of requisite fees must be submitted to the office of the controller of examinations by Thursday, the 24th July 2014. No application will be received after the time limit mentioned above.  The students of 1st/ 2nd/ 3rd/ 4th/5th year 2nd semester can clear the backlog of carryover course(s) along with the students of 1st/ 2nd/ 3rd/ 4th/5th year 1st semester and the students of 2nd/ 3rd/ 4th/5th year 1st semester can clear such course(s) along with the students of 1st/ 2nd/ 3rd/4th year 2nd semester.  A student can appear at the carryover examination of a course provided that the examination date of the course does not coincide with any examination date of the student concerned.     	  '),
(2, 'Provesional Grade sheet', '	  	    	 NOTIFICATION     	  	    	It is hereby notified for information of all concerned that the undergraduate students of AUST will be issued provisional grade sheets of the last semester (Fall 2013). The students are asked to apply in the prescribed application form for taking delivery of their provisional grade sheets. Filled in application after payment of requisite fees (One hundred taka for each grade sheet) must be submitted to the Office of the Controller of Examinations by the 6th July 2014. No application will be received after the time limit mentioned above.	    	  	    	  	    	  	    	  	    	(M. Abul Hossain)	    	Controller of Examinations (In-charge)	    	AUST	'),
(3, 'Achievement of Aust', 'Achievement of AUST students in Imagine Cup 2014     	  	    	 The final round of one of the biggest science & technology based contest in Bangladesh, Microsoft Imagine Cup 2014, was held on 26thApril at IUB auditorium. Of the three categories AUST students showed extraordinary performances in two. The team “Karigor” consisting of three CSE students, Md. Yousuf Azad, Monesul Haque and Sourav Paul stood Champion in the gaming category, while the team “AUST Geeks”, consisting of two EEE students, Safayat Hossain Saajan and Farrukh Ahmad Uzzal, and two CSE students, Sarker Miraz Mahfuz and Srijon Chakraborti stood runners-up in world citizenship category. The Champion team contested with a very enjoyable computer game named “Not prince charming”, and the runners-up team was awarded for their outstanding combination of hardware and software titled “Safety on click”, which is a round-the-clock security monitoring system through mobile phones.  The high profile yearly contest under the name '),
(5, 'semester fee''s', '24 July is the last date.'),
(6, ' half tution fee''s', '12 Jun was the last date of submission for half tution fee''s');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'bappi', 'bappi@gmail.com', '133343', '1234'),
(2, 'test', 'test@test.com', '146541', '1234'),
(3, 'test2', 'test2@gmail.com', '51465415', '1234'),
(4, 'akib', 'admin@activeclassified.com', '4163453', '1234'),
(5, 'akib', 'admin@activeclassified.com', '41634535', '1234'),
(6, 'akib', 'admin@activeclassified.com', '4163453545', '1234'),
(7, 'akib', 'admin@activeclassified.com', '4163453545+', '1234');

