-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 04:04 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ex_offenders`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_login` varchar(255) NOT NULL,
  `admin_first_name` varchar(255) NOT NULL,
  `admin_last_name` varchar(255) NOT NULL,
  `Admin_gender` varchar(255) NOT NULL,
  `admin_address` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_register_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_login`, `admin_first_name`, `admin_last_name`, `Admin_gender`, `admin_address`, `admin_email`, `admin_password`, `admin_register_date`) VALUES
(2, 'ty', 'ty', 'proj', 'Confidential', 'abc', 'abc@dd.com', '1111', '2016-04-18 15:44:12'),
(3, 'testtttt', 'ttt', 'ttt', 'Confidential', 'ss', 'abc@dd.com', 'asdf', '2016-04-27 17:31:17'),
(4, 'admin', 'test', 'test', 'Male', 'abc', 'tt@tt.com', '1111', '2016-04-28 23:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `agency_id` int(8) NOT NULL,
  `agency_login` varchar(32) NOT NULL,
  `agency_password` varchar(32) NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `agency_type` varchar(255) NOT NULL,
  `agency_address` varchar(255) NOT NULL,
  `agency_email` varchar(255) NOT NULL,
  `agency_contact_person` varchar(255) NOT NULL,
  `agency_phone_number` int(16) NOT NULL,
  `agency_agreement` varchar(255) NOT NULL,
  `agency_registerd_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`agency_id`, `agency_login`, `agency_password`, `agency_name`, `agency_type`, `agency_address`, `agency_email`, `agency_contact_person`, `agency_phone_number`, `agency_agreement`, `agency_registerd_date`) VALUES
(1, 'testing', 'pass', 'test perpost', 'bla', 'av', 'ab@t.co', 'abc', 234324, 'yes', '2016-04-20 23:51:26'),
(2, 'login', '1111', 'abm agency', 'street crime', 'abc', 'ab@t.co', 'asdf', 234324, 'yes', '2016-04-22 01:00:35'),
(3, 'last_testing', '1111', 'Last test', 'crime', 'luton', 'luton@y.com', 'ty', 22222, 'yes', '2016-04-22 17:10:35'),
(4, 'assign', '1111', 'assigned_test', 'crime', 'abc xyz', 'ab@t.co', 'ww', 232323, 'yes', '2016-04-22 18:09:36'),
(22, 'agency_1', '1111', 'Agency 1', 'offenders', 'abc xyz', 'ty@pro.com', 'Tytoo', 988766, 'yes', '2016-04-18 18:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `agency_login`
--

CREATE TABLE `agency_login` (
  `agency_login_id` int(11) NOT NULL,
  `agency_login` varchar(32) NOT NULL,
  `agency_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agency_request`
--

CREATE TABLE `agency_request` (
  `agency_request_id` int(8) NOT NULL,
  `r_agency_login` varchar(32) NOT NULL,
  `r_agency_password` varchar(32) NOT NULL,
  `r_agency_name` varchar(255) NOT NULL,
  `r_agency_type` varchar(255) NOT NULL,
  `r_agency_address` varchar(255) NOT NULL,
  `r_agency_email` varchar(255) NOT NULL,
  `r_agency_contact_person` varchar(255) NOT NULL,
  `r_agency_phone_number` varchar(255) NOT NULL,
  `r_agency_agrement` varchar(255) DEFAULT NULL,
  `r_agency_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency_request`
--

INSERT INTO `agency_request` (`agency_request_id`, `r_agency_login`, `r_agency_password`, `r_agency_name`, `r_agency_type`, `r_agency_address`, `r_agency_email`, `r_agency_contact_person`, `r_agency_phone_number`, `r_agency_agrement`, `r_agency_date`) VALUES
(1, 'abc', '1111', 'abc_agency', 'basic', 'abc xyz', 'ab@t.co', 'asdf', '34324', 'yes', '2016-04-27 16:53:12'),
(2, 'ex123', '1111', 'ex123', 'ex123', 'asdf', 'asdf@sd.com', 'asdf', '234234', 'yes', '2016-11-17 12:15:19'),
(3, 'ty', '1111', 'abd', 'basic', 'lu2 0aa', 'asdf@sd.com', 'aasdf', '234234', 'yes', '2016-12-02 14:59:45'),
(4, 'exampl1', '1111', 'xyz', 'basic', 'abc xyaz', 'basitme@yahoo.com', 'anyname', '+447447901936', 'yes', '2016-12-02 15:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `banned_agency`
--

CREATE TABLE `banned_agency` (
  `b_agency_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deny_request`
--

CREATE TABLE `deny_request` (
  `r_agency_id` int(11) NOT NULL,
  `d_r_agency_login` varchar(32) NOT NULL,
  `d_r_agency_name` varchar(255) NOT NULL,
  `d_r_agency_type` varchar(255) NOT NULL,
  `d_r_agency_address` varchar(255) NOT NULL,
  `d_r_agency_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `offender_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `feedback` longtext NOT NULL,
  `offender_first_name` varchar(255) NOT NULL,
  `date_of_feedback` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `offender_id`, `agency_id`, `feedback`, `offender_first_name`, `date_of_feedback`) VALUES
(1, 0, 0, 'Submit feeds', '', '0000-00-00 00:00:00'),
(2, 0, 0, 'Submit feeds', '', '0000-00-00 00:00:00'),
(3, 0, 0, '', '', '0000-00-00 00:00:00'),
(4, 0, 0, 'xyz', '', '0000-00-00 00:00:00'),
(5, 0, 0, '', '', '0000-00-00 00:00:00'),
(6, 0, 0, 'eee', '', '0000-00-00 00:00:00'),
(7, 0, 0, 'dddd', '', '0000-00-00 00:00:00'),
(8, 0, 0, 'tttt', '', '0000-00-00 00:00:00'),
(9, 0, 0, 'tt', '', '0000-00-00 00:00:00'),
(10, 0, 0, 'ttt', '', '0000-00-00 00:00:00'),
(11, 0, 0, 'tt', '', '0000-00-00 00:00:00'),
(12, 0, 0, 'rrrr', '', '0000-00-00 00:00:00'),
(13, 0, 0, '', '', '0000-00-00 00:00:00'),
(14, 0, 0, 'fff', '', '0000-00-00 00:00:00'),
(15, 0, 0, 'tt', '', '0000-00-00 00:00:00'),
(16, 0, 0, 'ee', '', '0000-00-00 00:00:00'),
(17, 0, 0, '555', '', '0000-00-00 00:00:00'),
(18, 0, 0, 'eee', '', '0000-00-00 00:00:00'),
(19, 0, 0, 'test', '', '0000-00-00 00:00:00'),
(20, 0, 0, 'ttt', '', '0000-00-00 00:00:00'),
(21, 0, 0, 'ttt', '', '0000-00-00 00:00:00'),
(22, 0, 0, 'ddd', '', '0000-00-00 00:00:00'),
(23, 0, 0, 'eeee', '', '0000-00-00 00:00:00'),
(24, 0, 0, 'tt', '', '0000-00-00 00:00:00'),
(25, 0, 0, '', '', '0000-00-00 00:00:00'),
(26, 0, 0, '', '', '0000-00-00 00:00:00'),
(27, 0, 0, '', '', '0000-00-00 00:00:00'),
(28, 0, 0, 'ttt', '', '0000-00-00 00:00:00'),
(29, 0, 0, 'ttt', '', '0000-00-00 00:00:00'),
(30, 0, 0, 'ttt', '', '0000-00-00 00:00:00'),
(31, 0, 0, 'tttt', '', '0000-00-00 00:00:00'),
(32, 0, 0, 'testing perpose', '', '0000-00-00 00:00:00'),
(33, 0, 0, 'ttt', '', '0000-00-00 00:00:00'),
(34, 0, 0, 'test', '', '0000-00-00 00:00:00'),
(35, 0, 0, 'test', '', '0000-00-00 00:00:00'),
(36, 0, 0, '', '', '0000-00-00 00:00:00'),
(37, 0, 0, 'tt', '', '0000-00-00 00:00:00'),
(38, 0, 0, 'rrr', '', '0000-00-00 00:00:00'),
(39, 0, 0, '', '', '0000-00-00 00:00:00'),
(40, 0, 0, '', '', '0000-00-00 00:00:00'),
(41, 0, 0, 'rrr', '', '0000-00-00 00:00:00'),
(42, 0, 0, 'tt', '', '0000-00-00 00:00:00'),
(43, 0, 0, 'ggg', '', '0000-00-00 00:00:00'),
(44, 0, 0, 'ggg', '', '0000-00-00 00:00:00'),
(45, 0, 0, 'testingggsss', '', '0000-00-00 00:00:00'),
(46, 0, 0, '', '', '0000-00-00 00:00:00'),
(47, 0, 0, '', '', '0000-00-00 00:00:00'),
(48, 0, 0, 'testing for output', '', '0000-00-00 00:00:00'),
(49, 0, 0, 'tested hereeeee', '', '0000-00-00 00:00:00'),
(50, 0, 0, 'testing', '', '0000-00-00 00:00:00'),
(51, 0, 0, 'tester', '', '0000-00-00 00:00:00'),
(52, 0, 0, 'tester', '', '0000-00-00 00:00:00'),
(53, 0, 0, 'first name', '', '0000-00-00 00:00:00'),
(54, 0, 0, 'testing going', 'rr', '0000-00-00 00:00:00'),
(55, 0, 0, 'he is the person for this thing', 'practice', '0000-00-00 00:00:00'),
(56, 0, 0, 'testing for date perposes', 'practice', '2016-04-20 21:13:20'),
(57, 0, 0, 'again trying for date and time perpose', 'practice', '2016-04-20 21:16:11'),
(58, 0, 0, 'ty is good man he should be released ', 'ty', '2016-04-20 21:19:30'),
(59, 0, 0, '33', 'test no1', '2016-04-20 21:28:34'),
(60, 0, 0, '33', 'test 2', '2016-04-20 21:28:39'),
(61, 0, 0, '33', 'test 3', '2016-04-20 21:28:43'),
(62, 30, 0, 'feedback test 1', 'ty', '2016-04-20 21:31:18'),
(63, 30, 0, 'feedback test 2', 'ty', '2016-04-20 21:31:23'),
(64, 30, 0, 'feedback test 3', 'ty', '2016-04-20 21:31:29'),
(65, 33, 0, 'this is just for indivual history', 'practice', '2016-04-20 22:06:13'),
(66, 8, 0, 'this is test for 11', '11', '2016-04-20 22:35:09'),
(67, 33, 0, 'this is final test', 'practice', '2016-04-20 22:42:53'),
(68, 14, 0, 'I want to last test', 'rr', '2016-04-20 22:48:28'),
(69, 33, 0, 'this is the test tonight', 'practice', '2016-04-20 23:49:58'),
(70, 15, 0, 'test by agency', 'rr', '2016-04-22 17:24:32'),
(71, 14, 0, 'agency feeds', 'rr', '2016-04-22 17:25:28'),
(72, 22, 0, 'testing perpose for form', 'w', '2016-04-25 19:12:57'),
(73, 33, 0, 'this is 4th try', 'practice', '2016-04-27 20:56:22'),
(74, 27, 0, 'Im putting for e for testing perpose', 'e', '2016-04-27 21:18:20'),
(75, 31, 0, '', 'we', '2016-04-28 18:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `offender`
--

CREATE TABLE `offender` (
  `offender_id` int(11) NOT NULL,
  `feedback_id` int(11) NOT NULL,
  `offender_first_name` varchar(255) DEFAULT NULL,
  `offender_last_name` varchar(32) DEFAULT NULL,
  `offender_gender` varchar(12) DEFAULT NULL,
  `offender_image` blob,
  `probation_status` varchar(32) DEFAULT NULL,
  `offender_address` varchar(255) DEFAULT NULL,
  `offender_dob` datetime(6) DEFAULT NULL,
  `offence_type` varchar(255) DEFAULT NULL,
  `offender_agency` varchar(255) NOT NULL,
  `offender_catagory` varchar(255) DEFAULT NULL,
  `other_comments` varchar(255) DEFAULT NULL,
  `offender_admit_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offender`
--

INSERT INTO `offender` (`offender_id`, `feedback_id`, `offender_first_name`, `offender_last_name`, `offender_gender`, `offender_image`, `probation_status`, `offender_address`, `offender_dob`, `offence_type`, `offender_agency`, `offender_catagory`, `other_comments`, `offender_admit_date`) VALUES
(22, 0, 'w', 'w', 'confidential', NULL, NULL, 'w', NULL, 'w', 'Last test', 'w', ' w', '2016-04-05 22:35:52'),
(23, 0, 'w', 'w', 'male', NULL, NULL, 'w', NULL, 'w', 'Last test', 'w', ' w', '2016-04-05 22:37:30'),
(25, 0, 'q', 'q', 'male', NULL, NULL, 'qq', NULL, 'q', 'q', 'q', ' q', '2016-04-05 22:39:13'),
(26, 0, 'q', 'q', 'male', NULL, NULL, 'qq', NULL, 'q', 'Agency 1', 'q', ' q', '2016-04-05 22:39:57'),
(27, 0, 'e', 'e', 'female', NULL, NULL, 'e', NULL, 'e', 'assigned_test', 'e', ' e', '2016-04-05 22:42:35'),
(28, 0, 'e', 'e', 'female', NULL, NULL, 'e', NULL, 'e', 'Last test', 'e', ' e', '2016-04-05 22:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `release_offenders`
--

CREATE TABLE `release_offenders` (
  `release_offender_id` int(11) NOT NULL,
  `feedback_id` int(11) NOT NULL,
  `release_offender_first_name` varchar(255) DEFAULT NULL,
  `release_offender_last_name` varchar(32) DEFAULT NULL,
  `release_offender_gender` varchar(12) DEFAULT NULL,
  `release_offender_image` blob,
  `release_offender_probation_status` varchar(32) DEFAULT NULL,
  `release_offender_address` varchar(255) DEFAULT NULL,
  `release_offender_dob` datetime DEFAULT NULL,
  `release_offender_offence_type` varchar(255) DEFAULT NULL,
  `release_offender_agency` varchar(255) DEFAULT NULL,
  `release_offender_catagory` varchar(255) DEFAULT NULL,
  `other_comments` varchar(255) NOT NULL,
  `release_offender_admit_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `release_offenders`
--

INSERT INTO `release_offenders` (`release_offender_id`, `feedback_id`, `release_offender_first_name`, `release_offender_last_name`, `release_offender_gender`, `release_offender_image`, `release_offender_probation_status`, `release_offender_address`, `release_offender_dob`, `release_offender_offence_type`, `release_offender_agency`, `release_offender_catagory`, `other_comments`, `release_offender_admit_date`) VALUES
(3, 0, 'w', 'w', 'male', NULL, NULL, 'w', NULL, 'w', 'w', 'w', ' ww', '2016-04-05 21:37:02'),
(4, 0, 'w', 'w', 'male', NULL, NULL, 'w', NULL, 'w', 'w', 'w', ' ww', '2016-04-05 21:40:37'),
(5, 0, 'w', 'w', 'male', NULL, NULL, 'w', NULL, 'w', 'w', 'w', ' ww', '2016-04-05 21:40:40'),
(6, 0, 'q', 'q', 'male', NULL, NULL, 'q', NULL, 'q', 'q', 'q', ' q', '2016-04-05 21:40:55'),
(7, 0, 'q', 'q', 'male', NULL, NULL, 'q', NULL, 'q', 'q', 'q', ' q', '2016-04-05 21:42:09'),
(15, 0, 'rr', 'rr', 'male', NULL, NULL, 'rr', NULL, 'rr', 'rr', 'rr', ' rr', '2016-04-05 22:24:36'),
(17, 0, 'q', 'q', 'female', NULL, NULL, 'q', NULL, 'qq', 'ww', 'ww', 'qq', '2016-04-05 22:32:07'),
(18, 0, 'q', 'q', 'female', NULL, NULL, 'q', NULL, 'qq', 'ww', 'ww', 'qq', '2016-04-05 22:33:28'),
(19, 0, 'q', 'q', 'female', NULL, NULL, 'q', NULL, 'qq', 'ww', 'ww', 'qq', '2016-04-05 22:33:37'),
(20, 0, 'q', 'q', 'female', NULL, NULL, 'q', NULL, 'qq', 'ww', 'ww', 'qq', '2016-04-05 22:35:10'),
(21, 0, 'q', 'q', 'male', NULL, NULL, 'q', NULL, 'q', 'Agency 1', 'q', ' qq', '2016-04-05 22:35:25'),
(22, 0, 'w', 'w', 'confidential', NULL, NULL, 'w', NULL, 'w', 'abm agency', 'w', ' w', '2016-04-05 22:35:52'),
(24, 0, 'q', 'q', 'male', NULL, NULL, 'qq', NULL, 'q', 'q', 'q', ' q', '2016-04-05 22:38:20'),
(29, 0, 'e', 'e', 'female', NULL, NULL, 'e', NULL, 'e', 'e', 'e', ' e', '2016-04-05 22:45:03'),
(30, 0, 'ty', 'yt', 'female', NULL, NULL, 'er', NULL, 'er', 'Agency 1', 'ee', ' erer', '2016-04-08 16:18:21'),
(31, 0, 'we', 'we', 'female', NULL, NULL, 'we', NULL, 'we', 'Agency 1', 'we', ' wewe', '2016-04-08 16:19:24'),
(33, 0, 'practice', 'practice ', 'confidential', NULL, NULL, 'abc', NULL, 'street crime', 'assigned_test', 'text', ' this is comment', '2016-04-20 16:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(255) NOT NULL,
  `staff_login` varchar(255) NOT NULL,
  `staff_first_name` varchar(255) NOT NULL,
  `staff_last_name` varchar(255) NOT NULL,
  `staff_gender` varchar(255) NOT NULL,
  `staff_address` varchar(255) NOT NULL,
  `staff_email` varchar(255) NOT NULL,
  `staff_password` varchar(255) NOT NULL,
  `staff_register_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_login`, `staff_first_name`, `staff_last_name`, `staff_gender`, `staff_address`, `staff_email`, `staff_password`, `staff_register_date`) VALUES
(2, 'ty', 'ty', 'proj', 'Confidential', 'abc', 'abc@dd.com', '1111', '2016-04-18 15:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `updates_id` int(11) NOT NULL,
  `updates` varchar(255) NOT NULL,
  `updates_date_time` datetime NOT NULL,
  `admin_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user_login` varchar(32) NOT NULL,
  `user_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_login`, `user_password`) VALUES
(1, 'user', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `agency_login`
--
ALTER TABLE `agency_login`
  ADD PRIMARY KEY (`agency_login_id`);

--
-- Indexes for table `agency_request`
--
ALTER TABLE `agency_request`
  ADD PRIMARY KEY (`agency_request_id`);

--
-- Indexes for table `banned_agency`
--
ALTER TABLE `banned_agency`
  ADD PRIMARY KEY (`b_agency_id`);

--
-- Indexes for table `deny_request`
--
ALTER TABLE `deny_request`
  ADD PRIMARY KEY (`r_agency_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `offender`
--
ALTER TABLE `offender`
  ADD UNIQUE KEY `offeder_id` (`offender_id`);

--
-- Indexes for table `release_offenders`
--
ALTER TABLE `release_offenders`
  ADD PRIMARY KEY (`release_offender_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`updates_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`,`user_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `agency_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `agency_login`
--
ALTER TABLE `agency_login`
  MODIFY `agency_login_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agency_request`
--
ALTER TABLE `agency_request`
  MODIFY `agency_request_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `banned_agency`
--
ALTER TABLE `banned_agency`
  MODIFY `b_agency_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `deny_request`
--
ALTER TABLE `deny_request`
  MODIFY `r_agency_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `offender`
--
ALTER TABLE `offender`
  MODIFY `offender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `updates_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `agency_login`
--
ALTER TABLE `agency_login`
  ADD CONSTRAINT `agency_login_ibfk_1` FOREIGN KEY (`agency_login_id`) REFERENCES `agency` (`agency_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
