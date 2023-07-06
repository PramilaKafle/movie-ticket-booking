-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 09:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmovies`
--

CREATE TABLE `addmovies` (
  `Movie_ID` int(20) NOT NULL,
  `Moviename` varchar(30) NOT NULL,
  `Release_date` date DEFAULT NULL,
  `Running_time` int(11) DEFAULT NULL,
  `Director` varchar(30) DEFAULT NULL,
  `Writer` varchar(30) DEFAULT NULL,
  `Cast` varchar(30) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmovies`
--

INSERT INTO `addmovies` (`Movie_ID`, `Moviename`, `Release_date`, `Running_time`, `Director`, `Writer`, `Cast`, `image`) VALUES
(1, 'PUSHPA part1', '2022-06-24', 2, 'Sukumar', 'Sukumar(story),Srikanth Vissa(', 'Allu Arjun,Fahadh Faasil,Rashm', 0x2e2f696d616765732f322e6a7067),
(2, '123', '2022-06-24', 2, 'Sukumar', 'Sukumar(story),Srikanth Vissa(', 'qawe', 0x2e2f696d616765732f332e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `addshows`
--

CREATE TABLE `addshows` (
  `show_ID` int(20) NOT NULL,
  `movie` varchar(40) DEFAULT NULL,
  `screen` varchar(30) DEFAULT NULL,
  `showtime` varchar(25) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `ticketcharge` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addshows`
--

INSERT INTO `addshows` (`show_ID`, `movie`, `screen`, `showtime`, `date`, `seats`, `ticketcharge`) VALUES
(1, 'PUSHPA part1', 'DEMO', 'Morning(6-9)', '2022-06-21', 40, 300);

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `Fullname` varchar(24) NOT NULL,
  `Email` varchar(12) NOT NULL,
  `Number` int(23) NOT NULL,
  `Message` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`Fullname`, `Email`, `Number`, `Message`) VALUES
('Pramila Kafle', 'pramilakafle', 2147483647, 'ksjhcgv xbznm,'),
('Pramila Kafle', 'lpramila5@gm', 2147483647, 'w\"E:rlfvbh cmnxz,skdfjguhbv ncxmz,'),
('Pramila Kafle', 'pramila@gmai', 2147483647, '\"W;eflkdvjhjb cmxz');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `cid` int(11) NOT NULL,
  `firstname` varchar(23) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `confirmpass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`cid`, `firstname`, `lastname`, `email`, `address`, `gender`, `username`, `password`, `confirmpass`) VALUES
(1, 'Pramila', 'Kafle', 'pramilakafle114@gmail.com', 'Tulsipur', 0, 'pramila114', 'pramila@114', ' pramila@114');

-- --------------------------------------------------------

--
-- Table structure for table `upcomingmovies`
--

CREATE TABLE `upcomingmovies` (
  `moviename` varchar(40) DEFAULT NULL,
  `movietype` varchar(30) DEFAULT NULL,
  `Releasedate` date DEFAULT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcomingmovies`
--

INSERT INTO `upcomingmovies` (`moviename`, `movietype`, `Releasedate`, `image`) VALUES
('Avatar 2 ', '', '2022-12-14', 0x2e2f7570636f6d696e672f392e6a7067),
('Avatar 2 ', '', '2022-12-14', 0x2e2f7570636f6d696e672f392e6a7067),
('Avatar 2 ', '', '2022-12-14', 0x2e2f7570636f6d696e672f392e6a7067),
('Avatar 2', '(Sci-fi/Action)', '2022-11-14', 0x2e2f7570636f6d696e672f392e6a7067),
('Avatar 2', '(Sci-fi/Action)', '2022-11-14', 0x2e2f7570636f6d696e672f392e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `pid`, `timestamp`) VALUES
(8, 2, '2022-07-13'),
(9, 1, '2022-07-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
