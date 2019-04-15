-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 04:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_creator`
--

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `user_id` varchar(20) NOT NULL,
  `footer_content` text NOT NULL,
  `footer_color` varchar(20) NOT NULL,
  `footer_size` int(11) NOT NULL,
  `footer_style` varchar(20) NOT NULL,
  `footer_weight` varchar(20) NOT NULL,
  `footer_background` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`user_id`, `footer_content`, `footer_color`, `footer_size`, `footer_style`, `footer_weight`, `footer_background`) VALUES
('qizheng609', 'Footer', 'skyblue', 20, 'normal', 'normal', '');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `user_id` varchar(20) NOT NULL,
  `header_content` text NOT NULL,
  `header_color` varchar(20) NOT NULL,
  `header_size` int(11) NOT NULL,
  `header_style` varchar(20) NOT NULL,
  `header_weight` varchar(20) NOT NULL,
  `header_background` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`user_id`, `header_content`, `header_color`, `header_size`, `header_style`, `header_weight`, `header_background`) VALUES
('qizheng609', 'NEW HEADER', 'green', 55, 'italic', 'bold', 'img/background1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `left_column`
--

CREATE TABLE `left_column` (
  `user_id` varchar(20) NOT NULL,
  `left_content` text NOT NULL,
  `left_color` varchar(20) NOT NULL,
  `left_size` int(11) NOT NULL,
  `left_style` varchar(20) NOT NULL,
  `left_weight` varchar(20) NOT NULL,
  `left_background` varchar(100) NOT NULL,
  `left_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `left_column`
--

INSERT INTO `left_column` (`user_id`, `left_content`, `left_color`, `left_size`, `left_style`, `left_weight`, `left_background`, `left_photo`) VALUES
('qizheng609', '								', 'black', 15, 'normal', 'normal', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `middle_column`
--

CREATE TABLE `middle_column` (
  `user_id` varchar(20) NOT NULL,
  `middle_content` text NOT NULL,
  `middle_color` varchar(20) NOT NULL,
  `middle_size` int(11) NOT NULL,
  `middle_style` varchar(20) NOT NULL,
  `middle_weight` varchar(20) NOT NULL,
  `middle_background` varchar(100) NOT NULL,
  `middle_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `middle_column`
--

INSERT INTO `middle_column` (`user_id`, `middle_content`, `middle_color`, `middle_size`, `middle_style`, `middle_weight`, `middle_background`, `middle_photo`) VALUES
('qizheng609', '								', 'black', 15, 'normal', 'normal', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `right_column`
--

CREATE TABLE `right_column` (
  `user_id` varchar(20) NOT NULL,
  `right_content` text NOT NULL,
  `right_color` varchar(20) NOT NULL,
  `right_size` int(11) NOT NULL,
  `right_style` varchar(20) NOT NULL,
  `right_weight` varchar(20) NOT NULL,
  `right_background` varchar(100) NOT NULL,
  `right_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `right_column`
--

INSERT INTO `right_column` (`user_id`, `right_content`, `right_color`, `right_size`, `right_style`, `right_weight`, `right_background`, `right_photo`) VALUES
('qizheng609', '								', 'black', 15, 'normal', 'normal', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(20) NOT NULL,
  `psw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `psw`) VALUES
('qizheng609', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `web_page`
--

CREATE TABLE `web_page` (
  `user_id` varchar(20) NOT NULL,
  `page_editor` text NOT NULL,
  `page_change` text NOT NULL,
  `page_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_page`
--

INSERT INTO `web_page` (`user_id`, `page_editor`, `page_change`, `page_review`) VALUES
('qizheng609', 'user_pages/qizheng609_page_editor.php', 'user_pages/qizheng609_page_change.php', 'user_pages/qizheng609_page_review.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `web_page`
--
ALTER TABLE `web_page`
  ADD KEY `user_id` (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `web_page`
--
ALTER TABLE `web_page`
  ADD CONSTRAINT `web_page_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
