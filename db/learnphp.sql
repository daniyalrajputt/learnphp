-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 12:37 PM
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
-- Database: `learnphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(20) NOT NULL,
  `emp_name` varchar(200) NOT NULL,
  `emp_positon` varchar(200) NOT NULL,
  `emp_email` varchar(250) NOT NULL,
  `emp_age` int(20) NOT NULL,
  `emp_sdate` date NOT NULL,
  `emp_salary` int(150) NOT NULL,
  `emp_status` tinyint(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_name`, `emp_positon`, `emp_email`, `emp_age`, `emp_sdate`, `emp_salary`, `emp_status`) VALUES
(0, 'Rao Daniyal', 'frontend developer', 'raodaniyal1995@yahoo.com', 25, '2020-03-16', 30000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `f_name` varchar(150) NOT NULL,
  `l_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `l_name`, `email`, `password`, `status`) VALUES
(1, 'Danish', 'Sheraz', 'danish.sheraz575@gmail.com', '457096e3fa67c61b77ce1e9abd68362085c732f5', 1),
(2, 'Rao', 'Daniyal', 'raodaniyal1995@yahoo.com', '457096e3fa67c61b77ce1e9abd68362085c732f5', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
