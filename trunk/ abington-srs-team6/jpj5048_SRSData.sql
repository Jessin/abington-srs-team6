-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2012 at 08:56 PM
-- Server version: 5.1.61
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jpj5048_SRSData`
--

-- --------------------------------------------------------

--
-- Table structure for table `Course_Schedule`
--

CREATE TABLE IF NOT EXISTS `Course_Schedule` (
  `course_id` int(6) NOT NULL AUTO_INCREMENT,
  `semester` int(1) NOT NULL,
  `location` varchar(4) CHARACTER SET utf8 NOT NULL,
  `capacity` int(3) NOT NULL,
  `day_id` int(1) NOT NULL,
  `time_id` int(1) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`course_id`),
  KEY `time_id` (`time_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Course_Schedule`
--

INSERT INTO `Course_Schedule` (`course_id`, `semester`, `location`, `capacity`, `day_id`, `time_id`, `year`) VALUES
(1, 0, '320A', 30, 0, 2, 2012),
(2, 1, '120W', 120, 1, 3, 2013),
(3, 0, '101W', 123, 0, 8, 2012);

-- --------------------------------------------------------

--
-- Table structure for table `People`
--

CREATE TABLE IF NOT EXISTS `People` (
  `user_id` int(9) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `m_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `address` varchar(35) CHARACTER SET utf8 NOT NULL,
  `city` varchar(15) CHARACTER SET utf8 NOT NULL,
  `state` varchar(2) CHARACTER SET utf8 NOT NULL,
  `zip` varchar(5) CHARACTER SET utf8 NOT NULL,
  `ssc` varchar(9) CHARACTER SET utf8 NOT NULL,
  `dob` date NOT NULL,
  `phone_number` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `People`
--

INSERT INTO `People` (`user_id`, `f_name`, `l_name`, `m_name`, `address`, `city`, `state`, `zip`, `ssc`, `dob`, `phone_number`) VALUES
(1, 'Jessin', 'Jose', 'J', '123 Fake Street', 'Philadelphia', 'PA', '18112', '192312312', '2012-04-03', '5555555555'),
(2, 'James', 'Jose', 'J', '123 Fake Street', 'Philadelphia', 'PA', '18112', '192312312', '2012-04-03', '5555555555'),
(3, 'James', 'Jose', 'J', '123 Fake Street', 'Philadelphia', 'PA', '18112', '192312312', '2012-04-03', '5555555555'),
(4, 'Jake', 'John', 'J', 'June', 'Philadelphia', 'PA', '19312', '444444444', '0000-00-00', '5555555555'),
(5, 'James', 'Jose', 'J', '123 Fake Street', 'Philadelphia', 'PA', '18112', '192312312', '2012-04-03', '5555555555'),
(6, 'Jake', 'nice', 'J', 'June ave', 'Philadelphia', 'DC', '19312', '444444444', '0000-00-00', '5555555555'),
(7, 'Login', 'Bad', 'J', 'June ave', 'Philadelphia', 'DC', '19312', '444444444', '0000-00-00', '5555555555'),
(8, 'Login', 'kojo', 'J', 'June ave', 'Philadelphia', 'DC', '19312', '444444444', '0000-00-00', '5555555555'),
(9, 'Login', 'Luffy', 'J', 'June ave', 'Philadelphia', 'DC', '19312', '444444444', '0000-00-00', '5555555555'),
(11, 'Willson', 'Mike', 'P', 'fake street', 'abington', 'FL', '32121', '555555555', '0000-00-00', '5555555555'),
(12, 'John', 'John', 'K', 'fake street', 'abington', 'FL', '32121', '555555555', '0000-00-00', '5555555555'),
(13, 'facebook', 'Ebay', 'm', 'fake street', 'abington', 'ME', '32121', '555555555', '0000-00-00', '5555555555'),
(14, 'dasdas', 'dasdas', 'sadas', 'fake street', 'abington', 'AL', '19312', '444444444', '0000-00-00', '5555555555');

-- --------------------------------------------------------

--
-- Table structure for table `States`
--

CREATE TABLE IF NOT EXISTS `States` (
  `state_id` int(2) NOT NULL AUTO_INCREMENT,
  `state` varchar(2) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`state_id`),
  UNIQUE KEY `state` (`state`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Student_Courses`
--

CREATE TABLE IF NOT EXISTS `Student_Courses` (
  `std_course_Id` int(6) NOT NULL AUTO_INCREMENT,
  `user_id` int(9) NOT NULL,
  `course_schedule_id` int(6) NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `day_id` int(1) NOT NULL,
  `time_id` int(2) NOT NULL,
  `grade` varchar(1) NOT NULL,
  PRIMARY KEY (`std_course_Id`),
  UNIQUE KEY `user_id` (`user_id`,`course_schedule_id`),
  KEY `time_id` (`time_id`),
  KEY `course_schedule_id` (`course_schedule_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Time_Slots`
--

CREATE TABLE IF NOT EXISTS `Time_Slots` (
  `time_id` int(2) NOT NULL AUTO_INCREMENT,
  `class_start` time NOT NULL,
  `class_end` time NOT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Time_Slots`
--

INSERT INTO `Time_Slots` (`time_id`, `class_start`, `class_end`) VALUES
(2, '07:30:00', '09:00:00'),
(3, '09:00:00', '10:00:00'),
(4, '10:00:00', '11:00:00'),
(5, '11:00:00', '12:00:00'),
(6, '13:00:00', '14:00:00'),
(7, '14:00:00', '15:00:00'),
(8, '16:00:00', '17:00:00'),
(9, '17:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_cred`
--

CREATE TABLE IF NOT EXISTS `user_cred` (
  `account_num` int(9) NOT NULL AUTO_INCREMENT,
  `user_id` int(9) NOT NULL,
  `user_login` varchar(7) NOT NULL,
  `user_pass` varchar(15) NOT NULL,
  `access_lvl` int(1) NOT NULL DEFAULT '0',
  `account_status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`account_num`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `user_login` (`user_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_cred`
--

INSERT INTO `user_cred` (`account_num`, `user_id`, `user_login`, `user_pass`, `access_lvl`, `account_status`) VALUES
(2, 1, 'jpj5048', '555555', 1, 0),
(3, 9, 'jpj1234', '1234', 0, 1),
(6, 12, 'usernam', 'password', 0, 1),
(7, 13, 'fem1950', '1234', 0, 1),
(8, 14, 'ddm1950', '312312', 0, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Course_Schedule`
--
ALTER TABLE `Course_Schedule`
  ADD CONSTRAINT `Course_Schedule_ibfk_1` FOREIGN KEY (`time_id`) REFERENCES `Time_Slots` (`time_id`);

--
-- Constraints for table `Student_Courses`
--
ALTER TABLE `Student_Courses`
  ADD CONSTRAINT `Student_Courses_ibfk_3` FOREIGN KEY (`course_schedule_id`) REFERENCES `Course_Schedule` (`course_id`),
  ADD CONSTRAINT `Student_Courses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `People` (`user_id`),
  ADD CONSTRAINT `Student_Courses_ibfk_2` FOREIGN KEY (`time_id`) REFERENCES `Time_Slots` (`time_id`);

--
-- Constraints for table `user_cred`
--
ALTER TABLE `user_cred`
  ADD CONSTRAINT `user_cred_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `People` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
