-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 04:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websyslab7`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `crn` int(11) NOT NULL,
  `prefix` varchar(4) NOT NULL,
  `number` smallint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `section` varchar(255) DEFAULT NULL,
  `year` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`crn`, `prefix`, `number`, `title`, `section`, `year`) VALUES
(60068, 'ECON', 2010, 'Intermediate Microecon Theory', '2', 2022),
(61121, 'BMED', 2100, 'Biomaterials Sci & Engineering', '1', 2022),
(63148, 'MGMT', 1260, 'Business Law And Ethics', '2', 2022),
(65054, 'ASTR', 1520, 'Stars, Galaxies And The Cosmos', '1', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `crn` int(11) DEFAULT NULL,
  `RIN` int(9) DEFAULT NULL,
  `grade` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `crn`, `RIN`, `grade`) VALUES
(1, 60068, 112354968, 98),
(2, 61121, 112354968, 88),
(3, 60068, 123456789, 100),
(4, 63148, 123456789, 100),
(5, 65054, 321456789, 67),
(6, 63148, 321456789, 80),
(7, 65054, 445583920, 47),
(8, 61121, 445583920, 30),
(9, 65054, 661996025, 95),
(10, 61121, 661996025, 89);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `RIN` int(9) NOT NULL,
  `RCSID` char(7) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`RIN`, `RCSID`, `name`, `lastname`, `alias`, `phone`, `street`, `city`, `state`, `zip`) VALUES
(112354968, 'kassar8', 'Kassarenna', 'Katwaroo', 'SO', 2147483647, '230-30 152nd Ave', 'Queens', 'NY', 11678),
(123456789, 'bachin4', 'Divya', 'Bachina', 'SR', 2147483647, '123-67 155th Ave', 'Brooklyn', 'NY', 19830),
(321456789, 'suemar5', 'Mary', 'Sue', 'JR', 2147483647, '345-20 983rd Ave', 'Midgar', 'FL', 19283),
(445583920, 'daisyr4', 'Daisy', 'Mae', 'FR', 2147483647, '123-45 345th Ave', 'Hyrule', 'OH', 12093),
(661996025, 'haynet3', 'Tyler', 'Haynes', 'SO', 2147483647, '229-20 144th Ave', 'Rosedale', 'NY', 11413);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`crn`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crn` (`crn`),
  ADD KEY `RIN` (`RIN`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`RIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`crn`) REFERENCES `courses` (`crn`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`RIN`) REFERENCES `students` (`RIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
