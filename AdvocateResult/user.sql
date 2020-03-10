-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 07:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advocate`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pinno` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(150) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` int(12) NOT NULL,
  `distributor` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pinno`, `date`, `name`, `designation`, `address`, `contact`, `distributor`) VALUES
(0, '224354546', '0000-00-00', '', '', '', 0, ''),
(0, '23', '0000-00-00', '', '54tr', '', 0, ''),
(0, '235365', '2018-08-25', 'dfg', 'gfbvcx', 'For Login use this row', 45654, ''),
(0, '235365ghjf', '2018-08-25', 'dfg', 'gfbvcx', 'bxvncnbbv', 78978, 'asS'),
(0, '34235', '2018-08-14', 'dfsdf', 'dfgfg', 'ewreterw', 254354, 'rfsgf'),
(0, '4', '2018-08-01', 'xDa', 'dAX', 'ZxZC', 6, ''),
(0, '475', '2018-08-09', 'fd', 'asd', 'asdasd', 121321, 'adaDds'),
(0, '7896556', '2018-08-16', 'aSDs', 'zxCzvxzxcv', 'cfssaczx', 152254666, 'asdasfcxz'),
(0, '7987654', '2018-08-11', 'aSa', 'sadxz', 'xcZc', 898546, 'dfzdf'),
(0, 'aaD', '2018-08-14', 'ADx', 'ZCZ', 'ZCZX', 345454, 'sdczxv'),
(0, 'eeafd454', '2018-08-07', '', '', '', 0, 'dsfsgfgh'),
(0, 'gfdgdfghd', '0000-00-00', 'fdgdf', '', '', 4535, ''),
(0, 'gfsf', '2018-08-08', 'sdfgv', 'fgfdxv', 'bvxc', 32453654, 'vbdxghd'),
(0, 'rterfgfge', '0000-00-00', '', '', '', 0, ''),
(0, 'rw6657', '0000-00-00', '', 'thgd', '', 0, ''),
(0, 'sdafas', '0000-00-00', 'adsfasf', 'adfa', 'ggfds', 65, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`pinno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
