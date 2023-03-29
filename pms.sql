-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 01:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_no` int(30) NOT NULL,
  `cell_num` varchar(10) NOT NULL,
  `crime` varchar(30) NOT NULL,
  `in_date` varchar(30) NOT NULL,
  `exit_date` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `name`, `id_no`, `cell_num`, `crime`, `in_date`, `exit_date`, `address`, `pic`) VALUES
(10, 'sajan', 5, 'A103', 'Murder', '2021-03-15', '2021-03-15', 'ktm', 'pic2.jpg'),
(11, 'shrdul', 13, 'A103', 'Murder', '2021-03-15', '2021-03-15', 'ktm', 'pic1.jpg'),
(12, 'shrdul', 19, 'A103', 'Murder', '2021-03-15', '2021-03-15', 'ktm', 'pic2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jail_capacity`
--

CREATE TABLE `jail_capacity` (
  `id` int(10) NOT NULL,
  `cell_num` varchar(10) NOT NULL,
  `capacity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jail_capacity`
--

INSERT INTO `jail_capacity` (`id`, `cell_num`, `capacity`) VALUES
(1, 'A100', 0),
(2, 'A101', 0),
(3, 'A102', 0),
(4, 'A103', 0),
(5, 'A104', 0),
(6, 'A105', 0),
(7, 'B100', 0),
(8, 'B101', 0),
(9, 'B102', 0),
(10, 'B103', 0),
(11, 'B104', 0),
(12, 'B105', 0),
(13, 'C100', 0),
(14, 'C101', 0),
(15, 'C102', 0),
(16, 'C103', 0),
(17, 'C104', 0),
(18, 'C105', 0),
(19, 'D100', 0),
(20, 'D101', 0),
(21, 'D102', 0),
(22, 'D103', 0),
(23, 'D104', 0),
(24, 'D105', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prisoners`
--

CREATE TABLE `prisoners` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_no` int(30) NOT NULL,
  `cell_num` varchar(10) NOT NULL,
  `crime` varchar(30) NOT NULL,
  `in_date` varchar(30) NOT NULL,
  `exit_date` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jail_capacity`
--
ALTER TABLE `jail_capacity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prisoners`
--
ALTER TABLE `prisoners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jail_capacity`
--
ALTER TABLE `jail_capacity`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `prisoners`
--
ALTER TABLE `prisoners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
