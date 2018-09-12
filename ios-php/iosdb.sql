-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 04:10 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iosdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`id`, `firstname`, `lastname`, `email`, `middlename`) VALUES
(8, 'johnley mark 2', 'delgado', 'johnley00@gmail.com3', 'dalere'),
(9, 'johnley mark', 'delgado', 'johnley00@gmail.com', 'dalere'),
(10, 'skyler grey', 'delgado', 'sky@gmail.com', 'mendoza');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info2`
--

CREATE TABLE `patient_info2` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `maritalstatus` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_info2`
--

INSERT INTO `patient_info2` (`id`, `name`, `age`, `email`, `gender`, `address`, `maritalstatus`, `birthday`, `language`, `religion`, `img`) VALUES
(1, 'john', '23', 'johnley@gmail.com', 'male', '569 J. Marzan St. Sampaloc Manila', 'Single', '1994/04/16', 'Filipino', 'Catholic', 'C:\\xampp\\htdocs\\ios-php\\img\\spoder.jpg'),
(2, 'anne', '24', 'annemendoza@gmail.com', 'female', '569 J. Marzan St. Sampaloc Manila', 'Single', '1994/04/16', 'Filipino', 'Catholic', 'C:\\xampp\\htdocs\\ios-php\\img\\spoder.jpg'),
(3, 'sky', '1', 'sky@gmail.com', 'male', '569 J. Marzan St. Sampaloc Manila', 'Single', '1994/04/16', 'Filipino', 'Catholic', 'http://localhost/ios-php/v1/img2/p1.jpg'),
(49, 'a', '0', 's', 'de', 'df', 'dg', 'k', 'l', 'p', ''),
(50, 'Joseph', '22', 'joseph@gmail.com', 'Male', '293 balic balic sampaloc manila', 'Married', 'June  8, 1994', 'Filipino', 'Catholic', 'Pictures/rain.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_info2`
--
ALTER TABLE `patient_info2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient_info2`
--
ALTER TABLE `patient_info2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
