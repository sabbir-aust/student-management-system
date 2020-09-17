-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2016 at 12:59 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bappi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `address`, `phone`, `email`, `password`) VALUES
(1, 'bappi', 'Niketon', 12345678, 'bappi@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `description_id` int(11) NOT NULL,
  `description` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`description_id`, `description`) VALUES
(13, 'This is a community group for Aust CSE spring 2K14. Only the members of the CSE department of AUST Spring14 are added here. \r\nAS we know, The 150 students of CSE department will be divided into 3 sections, so this group is created in order to build up the unity among 3 sections.');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `month`, `date`, `title`, `time`, `loc`, `desc`) VALUES
(2, 'Aug', 29, 'Fresher Orientation', '10am-2pm', 'IEB', 'Fresher orienttion programme of new comers in AUST will be held on IEB.'),
(3, 'Jan', 14, 'Imagine cup', '12am-2pm', '7A03', 'Microsoft Imagine cup will be held on AUST.'),
(4, 'Mar', 10, 'AUST Soccer Tournament', '10am-4pm', 'Army Museam Field', 'Aust inter-university football tournament will be held on AMF. '),
(5, 'May', 15, 'Indoor Tournament', '10am-2pm', 'AUST', 'Aust indoor sports tournament will be held on AUST campus. '),
(7, 'aug', 28, 'seminar', '10-1pm', 'conference room ', 'robi seminer'),
(8, 'july', 25, 'msp', '1-4pm', 'multipurpose hall', 'msp seminar');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `lecture_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`lecture_id`, `name`, `sem`) VALUES
(6, 'php 1', '3rd Year 1st Semester');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(200) NOT NULL,
  `news` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `routine_id` int(11) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `sec` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`routine_id`, `sem`, `sec`) VALUES
(2, '3rd Year 1st Semester', 'A'),
(4, '3rd year 1st semester', 'B'),
(5, '3rd year 1st semester', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `student_contact`
--

CREATE TABLE `student_contact` (
  `student_contact_id` int(11) NOT NULL,
  `msg_to` varchar(20) NOT NULL,
  `msg_from` varchar(20) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `msg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_contact`
--

INSERT INTO `student_contact` (`student_contact_id`, `msg_to`, `msg_from`, `sub`, `msg`) VALUES
(1, '130204098', '140104044', 'gukfjknljml;l', 'jblknklnknkln'),
(2, '130204098', '140104044', 'gj vbjnm,', 'jhkjkbjjbnklnkllk'),
(3, '140104044', '140104044', 'mcmv', 'mv lmx v,xzv '),
(4, '140104045', '140104044', 'amni', 'hi'),
(5, '140104045', '140104044', 'htdhgf', 'fjgkhlkhugi'),
(6, '140104044', '140104045', 'll', 'luv u'),
(7, '140104045', '140104044', 'hgdfjksf', 'jshjksglg;');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `s_id` bigint(9) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_add` varchar(100) NOT NULL,
  `s_bg` varchar(3) NOT NULL,
  `dob` date NOT NULL,
  `s_ph` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`s_id`, `s_name`, `s_add`, `s_bg`, `dob`, `s_ph`, `email`, `pass`) VALUES
(140104044, 'Sabbir', 'Kolabagan', 'AB+', '1993-10-25', 1620105345, 'sabbir07.ahmed@gmail.com', '123456'),
(140104045, 'Bappi', 'khilgaon', 'A+ ', '1994-02-16', 1683024051, 'bappihoque16@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`description_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`routine_id`);

--
-- Indexes for table `student_contact`
--
ALTER TABLE `student_contact`
  ADD PRIMARY KEY (`student_contact_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `description_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `lecture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `routine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student_contact`
--
ALTER TABLE `student_contact`
  MODIFY `student_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `s_id` bigint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140104046;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
