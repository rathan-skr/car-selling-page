-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 11:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19/it/it/491`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `nic` int(11) NOT NULL,
  `city` text NOT NULL,
  `psw1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `email`, `nic`, `city`, `psw1`) VALUES
('aa', 'c', 'js', 0, 'cv', '55555'),
('ab', 'cd', 'ef', 12, 'gh', '1234'),
('john', 'snow', 'js@gmail.com', 1665, 'westeros', '55555'),
('kuga', 'rathan', 'skugarathan2@gmail.com', 1998, 'chava', '55555'),
('ad', 'hr', 'ks@gmail.com', 4789, 'jp', '1234'),
('harry', 'potter', 'harry@gmail.com', 6523, 'godric', '666');

-- --------------------------------------------------------

--
-- Table structure for table `vdetails`
--

CREATE TABLE `vdetails` (
  `vmodel` varchar(25) NOT NULL,
  `vtype` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `price` int(55) NOT NULL,
  `vcondition` varchar(25) NOT NULL,
  `filename` varchar(55) NOT NULL,
  `email` varchar(35) NOT NULL,
  `vno` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vdetails`
--

INSERT INTO `vdetails` (`vmodel`, `vtype`, `brand`, `price`, `vcondition`, `filename`, `email`, `vno`) VALUES
('car', 'hybrid', 'Hyundai Tucson 2008 SUV ', 1, 'used', 'hyundai-tucson-202149381.jpg', ' js', 895),
('car', 'hybrid', 'honda', 100000, 'used', '4-2-car-png-hd.png', ' js@gmail.com', 1665),
('car', 'hybrid', 'Toyota Aqua S Grade 2013', 4, 'new', '5d0962f9914fe728334965.png', ' js@gmail.com', 1985),
('van', 'hybrid', 'Toyota Kdh 2010 Van ', 7, 'new', 'toyota-kdh-202200361.jpg', ' js@gmail.com', 1995),
('van', 'hybrid', 'Toyota Kdh 2010 ', 7, 'new', 'toyota-kdh-202200361.jpg', ' js@gmail.com', 1998),
('car', 'analog', 'honda', 100000, 'new', 'nebo-seascape-sand-sea-pliazh-leto-tropical-summer-voln', ' ks@gmail.com', 4789),
('car;', 'hybrid', 'Toyota ', 7, 'used', '4-2-car-png-hd.png', ' js@gmail.com', 7892),
('car', 'hybrid', 'Hyundai Tucson 2009 SUV ', 1, 'new', 'hyundai-tucson-202149384.jpg', ' js', 8956);

-- --------------------------------------------------------

--
-- Table structure for table `webadmindetails`
--

CREATE TABLE `webadmindetails` (
  `name` text NOT NULL,
  `emaill` text NOT NULL,
  `psw1` text NOT NULL,
  `adminid` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webadmindetails`
--

INSERT INTO `webadmindetails` (`name`, `emaill`, `psw1`, `adminid`) VALUES
('[admin1]', '[admin1@ad.com]', '[admin1234]', 1234),
('[admin2]', '[admin2@ad.com]', '[admin2345]', 2234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `vdetails`
--
ALTER TABLE `vdetails`
  ADD PRIMARY KEY (`vno`);

--
-- Indexes for table `webadmindetails`
--
ALTER TABLE `webadmindetails`
  ADD PRIMARY KEY (`adminid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
