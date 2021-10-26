-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 10:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp_fstest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mylearn`
--

CREATE TABLE `tbl_mylearn` (
  `srno` int(10) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `sub_Icon` varchar(500) NOT NULL DEFAULT 'default.svg',
  `sub_details` varchar(1000) NOT NULL,
  `sub_img` varchar(500) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mylearn`
--

INSERT INTO `tbl_mylearn` (`srno`, `subject_name`, `sub_Icon`, `sub_details`, `sub_img`) VALUES
(1, 'Learning', 'DL-learning.svg', 'Usability enhancement and Training for Transaction Portal for Customers', './files/images/DL-Learning-1.jpg'),
(2, 'Technology', 'DL-technology.svg', 'Usability enhancement and Training for Transaction Portal for Customers', './files/images/DL-Technology.jpg'),
(5, 'Communication', 'DL-communication.svg', 'Usability enhancement and Training for Transaction Portal for Customers', './files/images/DL-Communication.jpg'),
(14, 'Hindi', 'default.svg', 'Usability enhancement and Training for Transaction Portal for Customers', './files/images/background-wallpaper-2_1635192958.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mylearn`
--
ALTER TABLE `tbl_mylearn`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mylearn`
--
ALTER TABLE `tbl_mylearn`
  MODIFY `srno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
