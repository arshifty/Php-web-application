-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 11:39 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mapdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'university of barisal', 'university of barisal lat and lng', 22.659901, 90.362000, 'institution'),
(2, 'potuakhali lat and lng', 'potuakhali', 22.224899, 90.454803, 'district'),
(3, 'jhalokathi lat and lng', 'jhalokathi', 22.572100, 90.186996, 'district'),
(4, 'bhola lat and lng', 'bhola', 22.178499, 90.710098, 'district'),
(5, 'borguna lat and lng', 'borguna', 22.095301, 90.112099, 'district'),
(6, 'pirojpur district coordinates', 'pirojpur ', 22.579100, 89.975899, 'district'),
(7, 'bakerjong lat and lng', 'bakerjong ', 22.704969, 90.370132, 'district'),
(8, 'madaripur lat and lng', 'madaripur ', 23.239300, 90.186996, 'city'),
(9, 'Madaripur Police Station, Madaripur - Dhaka Highway, Madarip', 'madaripur ', 23.166965, 90.207069, 'city'),
(10, 'Gournadi, Bangladesh', 'Gournadi', 22.974237, 90.222122, 'district'),
(13, 'khulna district', 'khulna', 22.845640, 89.540329, 'district'),
(12, 'faridpur district', 'faridpur', 23.542393, 89.630890, 'district'),
(14, 'khulna district', 'khulna', 22.845640, 89.540329, 'district');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
