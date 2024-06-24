-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 10:38 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `star`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit_tray`
--

CREATE TABLE IF NOT EXISTS `audit_tray` (
  `id` bigint(20) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `operation` varchar(400) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `nat_id` varchar(40) NOT NULL,
  `b1` varchar(40) NOT NULL,
  `g1` char(1) NOT NULL,
  `b2` varchar(40) NOT NULL,
  `g2` char(1) NOT NULL,
  `b3` varchar(40) NOT NULL,
  `g3` char(1) NOT NULL,
  `passed_subs` int(2) NOT NULL,
  `Az` int(2) NOT NULL,
  `Maths` char(1) NOT NULL,
  `Science` char(1) NOT NULL,
  `English` char(1) NOT NULL,
  `results` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `graph`
--

CREATE TABLE IF NOT EXISTS `graph` (
  `graph_id` int(11) NOT NULL,
  `x_axis` varchar(200) NOT NULL,
  `y_axis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graph`
--

INSERT INTO `graph` (`graph_id`, `x_axis`, `y_axis`) VALUES
(1, 'Male', 3),
(1, 'Female', 6);

-- --------------------------------------------------------

--
-- Table structure for table `graph2`
--

CREATE TABLE IF NOT EXISTS `graph2` (
  `id` int(11) NOT NULL,
  `x_axis` varchar(45) NOT NULL,
  `y_axis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graph2`
--

INSERT INTO `graph2` (`id`, `x_axis`, `y_axis`) VALUES
(1, 'Harare', 6),
(1, 'Mashonaland East', 2),
(1, 'Masvingo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gurdian_info`
--

CREATE TABLE IF NOT EXISTS `gurdian_info` (
  `nat_id` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `relationship` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `nat_id` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `xul_name` varchar(40) NOT NULL,
  `Az` int(2) NOT NULL,
  `Accepted_rejected` varchar(40) NOT NULL,
  `date_added` varchar(1) NOT NULL,
  `time_added` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE IF NOT EXISTS `personal_info` (
  `name` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `nat_id` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `dietary_req` varchar(40) NOT NULL,
  `home_address` varchar(40) NOT NULL,
  `xul_name` varchar(40) NOT NULL,
  `Province` varchar(40) NOT NULL,
  `Az` int(2) NOT NULL,
  `accepted_rejected` varchar(40) NOT NULL,
  `date_added` varchar(40) NOT NULL,
  `time_added` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `self`
--

CREATE TABLE IF NOT EXISTS `self` (
  `nat_id` varchar(40) NOT NULL,
  `what_qtn` varchar(500) NOT NULL,
  `where_qtn` varchar(500) NOT NULL,
  `who_qtn` varchar(500) NOT NULL,
  `why_qtn` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `sbu` varchar(40) NOT NULL,
  `cell_num` int(40) NOT NULL,
  `access_level` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `sex` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `sbu`, `cell_num`, `access_level`, `username`, `password`, `sex`) VALUES
(1, 'John', 'Doe', 'john@staracademy.org', 'Harare', 777222754, 'Admin', 'John Doe', 'admin1234', ''),
(2, 'Sam', 'Stanley', 'sam19@staracademy.org', 'Harare', 777222320, 'Admin', 'stanley24', 'sam12345', ''),
(3, 'Emilia', 'Hatendi', 'emilia@staracademy.org', 'Mashonaland East', 777222325, 'Manager', 'Emmy19', 'manager123', ''),
(4, 'Walter', 'Nyamadze', 'wltrnmdz@gmail.com', 'Masvingo', 774336789, 'Senior', 'wale4Real', 'wale1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `xul_info`
--

CREATE TABLE IF NOT EXISTS `xul_info` (
  `nat_id` varchar(40) NOT NULL,
  `xul_name` varchar(40) NOT NULL,
  `xul_head` varchar(40) NOT NULL,
  `xul_area` varchar(40) NOT NULL,
  `xul_province` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_tray`
--
ALTER TABLE `audit_tray`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`nat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit_tray`
--
ALTER TABLE `audit_tray`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
