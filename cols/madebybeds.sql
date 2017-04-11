-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 06:19 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madebybeds`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(16) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_title` varchar(64) NOT NULL,
  `project_name` varchar(32) NOT NULL,
  `project_description` varchar(64) NOT NULL,
  `project_images` blob NOT NULL,
  `project_subject` varchar(64) NOT NULL,
  `project_author` varchar(64) NOT NULL,
  `date` datetime NOT NULL,
  `project_rating` varchar(16) DEFAULT NULL,
  `project_single_group` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_login` varchar(32) NOT NULL,
  `project_id` int(16) NOT NULL,
  `user_first_name` varchar(32) NOT NULL,
  `user_last_name` varchar(32) NOT NULL,
  `user_dob` date NOT NULL,
  `user_email` varchar(32) NOT NULL,
  `password` int(16) NOT NULL,
  `user_type` int(16) NOT NULL,
  `field_of_research` varchar(64) NOT NULL,
  `user_contact` varchar(32) DEFAULT NULL,
  `user_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `project_id`, `user_first_name`, `user_last_name`, `user_dob`, `user_email`, `password`, `user_type`, `field_of_research`, `user_contact`, `user_created_date`) VALUES
(1, 'ee', 0, 'ee', 'ee', '2017-04-05', 't@t.com', 1111, 1, 'rr', '33', '2017-04-06 21:16:34'),
(3, '', 0, 'tt', 'ttt', '0000-00-00', 'ty@t.com', 0, 0, '', 'tt', '2017-04-07 19:10:32'),
(4, '', 0, 'eee', 'eee', '0000-00-00', 'test@test.com', 0, 0, '', 'eee', '2017-04-07 19:13:03'),
(5, '', 0, 'eee', 'eee1', '0000-00-00', 'test@test.com1', 0, 0, '', 'eee', '2017-04-07 19:21:37'),
(6, '', 0, '', 'gg', '0000-00-00', '', 0, 0, '', NULL, '2017-04-10 21:11:54'),
(7, '', 0, 'ttt', 'ttt', '0000-00-00', '', 0, 0, '', NULL, '2017-04-10 21:13:05'),
(8, '', 0, 'yy', 'yy', '0000-00-00', 'user_email', 0, 0, '', NULL, '2017-04-10 21:16:34'),
(9, '', 0, 'try', 'try', '0000-00-00', 're@tr', 0, 0, '', NULL, '2017-04-10 21:19:35'),
(10, '', 0, 'er', 'er', '0000-00-00', 'er@er', 0, 0, '', 'eee', '2017-04-10 21:24:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`,`user_login`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `project_id_2` (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(16) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
