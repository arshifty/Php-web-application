-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 09, 2020 at 12:49 PM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalseba_map`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `id` int(20) NOT NULL,
  `quarantine` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `worktime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `quarantine`, `doctor`, `number`, `worktime`) VALUES
(1, '', 'Dr. Rehan Akhter', '01687670413', '24 Hours'),
(2, '', 'Dr.Nazir Shah', '01303316018', '24 Hours'),
(4, '', '14cse011', '01521466521', ''),
(14, '', 'Md.Asaduzzaman Shuvo', '01301880283', '24 Hours'),
(15, '', 'Dr.Niloy Prosad', '01718452558', '24 Hours'),
(16, '', 'Dr. Mahbubur Rahman Rajib', '01533987914', '24 Hours'),
(17, '', 'Dr.Mohona Khondoker', '01953513108', '24 Hours'),
(18, '', 'Dr. Saifa Islam', '01883581829', '24 Hours'),
(19, '', 'Dr. Atiya Rahman', '01772606470', '24 Hours'),
(20, '', 'Dr. Priyanka Mondal', '01717020118', '24 Hours'),
(21, '', 'Dr. Sharmin haque prima', '01795233354', '24 Hours'),
(22, '', 'Dr Shadman Sakib', '01675843987', '24 Hours'),
(23, '', 'Olia Mahjabin', '01796597198', '24 Hours'),
(24, '', 'Dr.Tanvir Rahman', '01518-615052', '24 Hours'),
(25, '', 'Dr. Sadia Afrin', '01534301925', '24 Hours'),
(26, '', 'Dr. Zaara Rahman', '01757540162', '8 am - 12 am'),
(27, '', 'Nawrin Jahan', '01873147497', '8 am - 12 am'),
(28, '', 'Dr.Farjana yeasmin', '01929422331', '8 am - 12 am'),
(29, '', ' Dr. Refat parvez amy', '01841716131', '8 am - 12 am'),
(30, '', 'Dr.Nusrat Nueri Raisa', '01856877748', '8 am - 12 am'),
(31, '', 'Dr. Subhashree monigram ', '01401288202', '8 am - 12 am'),
(32, '', 'Dr.Nigar sultana', '01972397197', '8 am - 12 am'),
(33, '', 'Dr. Nafisa Rahman', '01627585100', '8 am - 12 am'),
(34, '', 'Rasma Muzaffar', '01797287465', '8 am - 12 am	'),
(35, '', 'Dr hima', '01611108566', '8 am - 12 am'),
(36, '', 'Dr.Mahbub Alam', '01759800507', '8 am - 12 am	'),
(37, '', 'Dr. Farjana', '01534991865', '8 am - 12 am	'),
(43, '', 'IEDCR Hotline', '01927711784', '24 Hours'),
(44, '', 'IEDCR Hotline	', '01927711785', '24 Hours'),
(45, '', 'IEDCR Hotline	', '01937000011', '24 Hours'),
(46, '', 'IEDCR Hotline	', '01937110011', '24 Hours'),
(47, 'Army', '', '01769045739', '24 Hours'),
(48, '', 'à¦†à¦‡à¦‡à¦¡à¦¿à¦¸à¦¿à¦†à¦°', '01401184551', '24 Hours'),
(49, '', 'à¦†à¦‡à¦‡à¦¡à¦¿à¦¸à¦¿à¦†à¦°', '01401184554', '24 Hours'),
(50, '', 'à¦†à¦‡à¦‡à¦¡à¦¿à¦¸à¦¿à¦†à¦°', '01401184555', '24 Hours	'),
(51, '', 'à¦†à¦‡à¦‡à¦¡à¦¿à¦¸à¦¿à¦†à¦°', '01401184556', '24 Hours	'),
(52, '', 'à¦†à¦‡à¦‡à¦¡à¦¿à¦¸à¦¿à¦†à¦°', '01401184559', '24 Hours	'),
(53, '', 'à¦†à¦‡à¦‡à¦¡à¦¿à¦¸à¦¿à¦†à¦°', '01401184560', '24 Hours	'),
(54, '', 'à¦†à¦‡à¦‡à¦¡à¦¿à¦¸à¦¿à¦†à¦°', '01401184563', '24 Hours	'),
(55, '', 'à¦†à¦‡à¦‡à¦¡à¦¿à¦¸à¦¿à¦†à¦°', '01401184568', '24 Hours	'),
(56, '', 'Govt hotline', '16263', '24 hours '),
(57, '', 'Govt hotline', '333', '24 hours '),
(58, 'Lab test', 'IEDCR', '029898796', '24 Hours'),
(59, 'à¦°à§‹à¦—à¦¤à¦¤à§à¦¬ à¦°à§‹à¦— à¦¨à¦¿à§Ÿà¦¨à§à¦¤à§à¦°à¦£ à¦“ à¦—à¦¬à§‡à¦·à¦£à¦¾ à¦‡à¦¨à¦¸à§à¦Ÿà¦¿à¦Ÿà¦¿à¦‰à¦Ÿ (IEDCR), à¦¢à¦¾à¦•à¦¾à¥¤', 'corona test', '02-9898796', '24 Hours	'),
(60, 'à¦‡à¦¨à¦¸à§à¦Ÿà¦¿à¦Ÿà¦¿à¦‰à¦Ÿ à¦…à¦¬ à¦ªà¦¾à¦¬à¦²à¦¿à¦• à¦¹à§‡à¦²à¦¥(à¦œà¦¨à¦¸à§à¦¬à¦¾à¦¸à§à¦¥à§à¦¯ à¦‡à¦¨à¦¸à§à¦Ÿà¦¿à¦Ÿà¦¿à¦‰à¦Ÿ), à¦®à¦¹à¦¾à¦–à¦¾à¦²à§€, à¦¢à¦¾à¦•à¦¾à¥¤', 'corona test', '02-8821361', '24 Hours	'),
(61, 'à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦‡à¦¨à¦¸à§à¦Ÿà¦¿à¦Ÿà¦¿à¦‰à¦Ÿ à¦…à¦¬ à¦Ÿà§à¦°à¦ªà¦¿à¦•à§à¦¯à¦¾à¦² à¦à¦¨à§à¦¡ à¦‡à¦¨à¦«à§‡à¦•à¦¶à¦¾à¦¸ à¦¡à¦¿à¦œà¦¿à¦œà§‡à¦¸, à¦šà¦Ÿà§à¦Ÿà¦—à§à¦°à¦¾à¦®à¥¤', 'corona test', '031-2780426', '24 Hours	'),
(62, ' à¦¶à¦¿à¦¶à§ à¦¸à§à¦¬à¦¾à¦¸à§à¦¥à§à¦¯ à¦—à¦¬à§‡à¦·à¦£à¦¾ à¦«à¦¾à¦‰à¦¨à§à¦¡à§‡à¦¶à¦¨ (CHRF), à¦¢à¦¾à¦•à¦¾à¥¤', 'corona test', '02-48110117', '24 Hours	'),
(63, ' à¦†à¦‡à¦¸à¦¿à¦¡à¦¿à¦¡à¦¿à¦†à¦°à¦¬à¦¿ (icddr,b), à¦¢à¦¾à¦•à¦¾à¥¤', 'corona test', '09666-771100', '24 Hours	'),
(64, 'à¦†à¦‡à¦¡à¦¿à¦‡à¦à¦¸à¦à¦‡à¦šà¦†à¦‡ (ideSHi), à¦¢à¦¾à¦•à¦¾à¥¤', 'corona test', '01793-163304', '24 Hours	'),
(65, 'à¦¨à§à¦¯à¦¾à¦¶à¦¨à¦¾à¦² à¦‡à¦¨à¦¸à§à¦Ÿà¦¿à¦Ÿà¦¿à¦‰à¦Ÿ à¦²à§à¦¯à¦¾à¦¬à¦°à§‡à¦Ÿà¦°à§€ à¦®à§‡à¦¡à¦¿à¦¸à¦¿à¦¨, à¦¢à¦¾à¦•à¦¾à¥¤', 'corona test', '02-9139817', '24 Hours	'),
(66, 'à¦°à¦‚à¦ªà§à¦° à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ, à¦°à¦‚à¦ªà§à¦°à¥¤', 'corona test', '0521-63388', '24 Hours	'),
(67, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ, à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€à¥¤', 'corona test', '0721-772150', '24 Hours	'),
(68, 'à¦¢à¦¾à¦•à¦¾ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ, à¦¢à¦¾à¦•à¦¾à¥¤', 'corona test', '02-55165088', '24 Hours	'),
(69, 'à¦®à§Ÿà¦®à¦¨à¦¸à¦¿à¦‚à¦¹ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ, à¦®à§Ÿà¦®à¦¨à¦¸à¦¿à¦‚à¦¹à¥¤', 'corona test', '091-66063', '24 Hours	'),
(70, 'à¦“à¦¸à¦®à¦¾à¦¨à§€ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦², à¦¸à¦¿à¦²à§‡à¦Ÿà¥¤', 'corona test', '0821-713667', '24 Hours	'),
(71, 'à¦–à§à¦²à¦¨à¦¾ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ, à¦–à§à¦²à¦¨à¦¾à¥¤', 'corona test', '041-760350', '24 Hours	'),
(72, 'à¦¶à§‡à¦°à§‡ à¦¬à¦¾à¦‚à¦²à¦¾ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ, à¦¬à¦°à¦¿à¦¶à¦¾à¦²à¥¤', 'corona test', '0431-2173547', '24 Hours	'),
(73, 'à¦•à¦•à§à¦¸à¦¬à¦¾à¦œà¦¾à¦° à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ, à¦•à¦•à§à¦¸à¦¬à¦¾à¦œà¦¾à¦°à¥¤', 'corona test', '01821-431144', '24 Hours	'),
(74, 'à¦†à¦°à§à¦®à¦¡ à¦«à§‹à¦°à§à¦¸à§‡à¦¸ à¦‡à¦¨à¦¸à§à¦Ÿà¦¿à¦Ÿà¦¿à¦‰à¦Ÿ à¦…à¦¬ à¦ªà§à¦¯à¦¾à¦¥à¦²à¦œà¦¿, à¦¢à¦¾à¦•à¦¾à¥¤', 'corona test	', '01769-016616', '24 Hours	'),
(75, 'à¦¬à¦™à§à¦—à¦¬à¦¨à§à¦§à§ à¦¶à§‡à¦– à¦®à§à¦œà¦¿à¦¬ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿ, à¦¢à¦¾à¦•à¦¾à¥¤', 'corona test	', '01866-637482', '24 Hours	'),
(76, '......', 'à¦¨à§à¦¯à¦¾à¦¶à¦¨à¦¾à¦² à¦•à¦² à¦¸à§‡à¦¨à§à¦Ÿà¦¾à¦°', '333', '24 Hours'),
(77, '', 'à¦¨à§à¦¯à¦¾à¦¶à¦¨à¦¾à¦² à¦¹à§‡à¦²à§à¦ªà¦²à¦¾à¦‡à¦¨', '109', '24 hours'),
(78, '', 'à¦¸à§à¦¬à¦¾à¦¸à§à¦¥à§à¦¯ à¦¬à¦¾à¦¤à¦¾à§Ÿà¦¨', '16263', '24 hours'),
(79, '.....', 'à¦†à¦‡à¦‡à¦¡à¦¿à¦¸à¦¿à¦†à¦°', '10655', '24 hours	');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(20) NOT NULL,
  `total` varchar(50) NOT NULL,
  `death` varchar(50) NOT NULL,
  `recover` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL,
  `tt` varchar(20) NOT NULL,
  `dd` varchar(20) NOT NULL,
  `ss` varchar(20) NOT NULL,
  `test` varchar(50) NOT NULL,
  `female` varchar(50) NOT NULL,
  `male` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `total`, `death`, `recover`, `active`, `tt`, `dd`, `ss`, `test`, `female`, `male`) VALUES
(1, '13770', '214', '2414', '11142', '636', '8', '313', '5465', '32%    ', '68%    ');

-- --------------------------------------------------------

--
-- Table structure for table `isolation`
--

CREATE TABLE `isolation` (
  `id` int(30) NOT NULL,
  `qua` varchar(50) NOT NULL,
  `quacom` varchar(50) NOT NULL,
  `iso` varchar(50) NOT NULL,
  `isocom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isolation`
--

INSERT INTO `isolation` (`id`, `qua`, `quacom`, `iso`, `isocom`) VALUES
(1, '40, 503', '1, 63, 528', '1, 771', '950');

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`, `category`) VALUES
(1, 'shibchar', 'shibchar, Madaripur', 23.3584, 90.1682, 'Madaripur', 'Lockdown Area'),
(2, 'Mirpur ', 'North Tolarbagh of Darussalam, Mirpur ', 23.7889, 90.3519, 'Dhaka', 'Lockdown Area'),
(3, 'sadarpur Upazila (cormanayier , cornasirpur )', 'sadarpur, Faridpur', 23.4657, 90.028, 'Faridpur', 'Lockdown Area'),
(4, '3 Union (  kala mridha ,ajim nogor , candra)', 'bhanga , Faridpur', 23.3853, 89.9837, 'Faridpur', 'Lockdown Area'),
(5, 'jogonnathpur ', 'jogonnathpur , Bhairab', 24.0532, 90.9713, 'Kishoreganj', 'Suspect Zone'),
(6, 'nageshwari ', 'nageshwari , Kurigram', 25.9642, 89.6957, 'Kurigram', 'Quarantine Area'),
(7, 'Kurigram  sodor', 'Kurigram jail', 25.8042, 89.6329, 'Kurigram', 'Quarantine Area'),
(8, 'bhurungamari ', 'bhurungamari , Kurigram', 26.109, 89.6699, 'Kurigram', 'Quarantine Area'),
(9, 'phulbari ', 'phulbari , Kurigram', 25.9491, 89.5521, 'Kurigram', 'Quarantine Area'),
(10, 'Rajarhat ', 'Rajarhat , Kurigram', 25.7804, 89.5309, 'Kurigram', 'Quarantine Area'),
(11, 'Ulipur ', 'Ulipur ,Kurigram', 25.6564, 89.6205, 'Kurigram', 'Quarantine Area'),
(12, 'Chilmari ', 'Chilmari , Kurigram', 25.581, 89.6616, 'Kurigram', 'Quarantine Area'),
(13, 'rowmari ', 'rowmari , Kurigram', 25.5917, 89.8318, 'Kurigram', 'Quarantine Area'),
(14, 'Kalkini Simanto lockdown ', 'Kalkini ', 23.0724, 90.2808, 'Madaripur', 'Lockdown Area'),
(15, 'Kalkini Simanto lockdown ', 'Kalkini ', 23.0724, 90.2808, 'Madaripur', 'Lockdown Area'),
(16, 'Palordi river', 'Palordi river', 23.0482, 90.2447, 'Madaripur', 'Suspect Zone'),
(17, 'Barisal sodor', 'Sodor road,  barisal.', 22.7021, 90.3719, 'Barishal', 'Dense Area'),
(18, 'Barisal sodor', 'Notullabad,  barisal', 22.7149, 90.3499, 'Barishal', 'Dense Area'),
(19, 'Barishal sodor', 'Rupatoli,  barisal', 22.6701, 90.349, 'Barishal', 'Dense Area'),
(20, 'Barishal sodor', 'Lonch ghat,  barishal', 22.7, 90.3751, 'Barishal', 'Dense Area'),
(21, 'Kornokathi', 'Barisal University ', 22.6599, 90.3621, 'Barishal', 'Green Zone'),
(22, 'Rangpur sadar', 'Zilla parishad super market', 25.7513, 89.2532, 'Rangpur', 'Dense Area'),
(23, 'Rangpur sadar', 'Lalbag mor ,  Rangpur ', 25.7249, 89.2547, 'Rangpur', 'Dense Area'),
(24, 'Rangpur sadar', 'Medical mor,  rangpur', 25.765, 89.2315, 'Rangpur', 'Dense Area'),
(25, 'Satmatha ', 'Sat matha,  rangpur', 25.7341, 89.2865, 'Rangpur', 'Dense Area'),
(26, 'Kurigram sodor', 'Notun bazar,  kurigram', 25.8087, 89.6404, 'Kurigram', 'Dense Area'),
(27, 'Kurigram sodor', 'Kurigra super market  ', 25.8157, 89.6494, 'Kurigram', 'Dense Area'),
(28, 'Khulna ', 'Sonadanga,  khulna', 22.8248, 89.538, 'Khulna', 'Dense Area'),
(29, 'Khulna ', 'Shibbari circle,  khulna', 22.8221, 89.5529, 'Khulna', 'Dense Area'),
(30, 'Chittagong market and railway station ', 'New market,  Chittagong ', 22.3344, 91.8329, 'Chittagong ', 'Dense Area'),
(31, 'home quarantine ( 478 )', 'Barisal', 22.701, 90.3535, 'Barisal', 'Quarantine Area'),
(32, 'home quarantine ( 607) from abroad', 'Potuakhali', 22.2249, 90.4548, 'Potuakhali', 'Quarantine Area'),
(33, 'home quarantine ( 322) from abroad', 'bhola', 22.1785, 90.7101, 'Bhola', 'Quarantine Area'),
(34, 'home quarantine ( 342) from abroad', 'pirojopur', 22.5841, 89.972, 'Pirojopur', 'Quarantine Area'),
(35, 'home quarantine ( 300) from abroad', 'Barguna', 22.1605, 90.1201, 'Barguna', 'Quarantine Area'),
(36, 'home quarantine ( 171) from abroad', 'jhalokathi dc office', 22.6421, 90.2, 'jhalokathi ', 'Quarantine Area'),
(37, 'home quarantine ( 14 ) ', 'barishal city corporation', 22.7002, 90.3727, 'Barisal', 'Quarantine Area'),
(38, '2 home is selected as home quarantine zone', 'patuakhali', 22.2249, 90.4548, 'Potuakhali', 'Quarantine Area'),
(39, 'Land port', 'benapole , jessore', 23.0391, 88.8983, 'Jessore', 'Suspect Zone'),
(40, 'home quarantine ( 5) from india', 'Daulaotpur , Kustia', 23.8907, 89.1099, 'Kustia', 'Quarantine Area'),
(41, 'home quarantine ( 8)', 'Mymensingh different  upozilla', 24.7471, 90.4203, 'Mymensingh ', 'Quarantine Area'),
(42, 'sadulapur exhibits home auarantine', 'sadulapur , gainbandha', 25.3909, 89.466, 'Gainbandha', 'Suspect Zone'),
(43, 'home quarantine ( 34 )  past', 'Nilfamari', 25.8483, 88.9414, 'Nilfamari', 'Quarantine Area'),
(44, 'fled away ( 94 )', 'bogura', 24.8481, 89.373, 'Bogura', 'Suspect Zone'),
(45, 'fled away ( 861)', 'naogaon', 24.9132, 88.7531, 'Naogaon', 'Suspect Zone'),
(46, 'quarantine itself by local businessman ', 'sylhet', 24.8967, 91.8361, 'Sylhet', 'Lockdown Area'),
(48, 'home quarantine ( 5 home ) ', 'Moulvibazar ', 24.3095, 91.7315, 'Moulvibazar', 'Quarantine Area'),
(49, 'home quarantine ( 14 ) from abroad', 'sunamganj', 25.0715, 91.3992, 'Sunamganj', 'Quarantine Area'),
(50, 'home quarantine ( 137 ) but came 4000 ', 'sunamganj stadium', 25.07, 91.4021, 'Sunamganj ', 'Quarantine Area'),
(51, 'home quarantine ( 137 ) but came 4000 ', 'sunamganj all district', 25.0636, 91.3964, 'Sunamganj', 'Suspect Zone'),
(52, 'home quarantine ( 5 )', 'komolganj , moulvibazar', 24.2776, 91.8595, 'Moulvibazar', 'Quarantine Area'),
(53, 'partial lockdown', 'bandarban lama', 21.7937, 92.263, 'Bandarban ', 'Lockdown Area'),
(54, 'partial lockdown', 'Bandarban alikodom', 21.653, 92.3148, 'Bandarban ', 'Lockdown Area'),
(55, 'partial lockdown', 'Bandarban noikhanchori', 22.1936, 92.2188, 'Bandarban ', 'Lockdown Area'),
(56, 'signed 168 , fled away 479', 'motlob uttor upazilla ', 23.4287, 90.6394, 'Chandpur', 'Suspect Zone'),
(57, 'home quarantine ( 177) but came 26,000', 'chandpur', 23.2321, 90.6631, 'Chandpur', 'Suspect Zone'),
(58, 'home quarantine ( 177) but came 26,000', 'chandpur', 23.2321, 90.6631, 'chandpur', 'Suspect Zone'),
(59, 'home quarantine ( 83) ', 'Feni all upazilla', 23.0159, 91.3976, 'feni', 'Quarantine Area'),
(60, 'Land port', 'Benapole, Sharsha, Jessore', 23.0391, 88.8983, 'Jessore', 'Suspect Zone'),
(61, 'Land port', 'Burimari, Patgram, Lalmonirhat', 26.3977, 88.927, 'Lalmonirhat', 'Suspect Zone'),
(62, 'Land port', 'Akhaura, Brahmnbaria', 23.8686, 91.2097, 'Brahmnbaria', 'Suspect Zone'),
(63, 'Land port', 'Sadar Upazila, Satkhira', 22.7362, 89.037, 'Satkhira', 'Suspect Zone'),
(64, 'Land port', 'Nalitabari, Sherpur', 25.085, 90.194, 'Sherpur', 'Suspect Zone'),
(65, 'Land port', 'Goainghat, Sylhet', 25.1048, 91.9686, 'Sylhet', 'Suspect Zone'),
(66, 'Land port', 'Damurhuda, Chuadanga', 23.6067, 88.7758, 'Chuadanga', 'Suspect Zone'),
(67, 'Land port', 'Belonia, Feni', 23.2505, 91.4676, 'feni', 'Suspect Zone'),
(68, 'Land port', 'Haluaghat, Mymensingh', 25.1173, 90.356, 'Mymensingh ', 'Suspect Zone'),
(69, 'Land port', 'Ramgarh, Khagrachhari', 22.9947, 91.7417, 'Khagrachhari', 'Suspect Zone'),
(70, 'Land port', 'Bhurungamari, Kurigram', 26.112, 89.6816, 'Kurigram', 'Suspect Zone'),
(71, 'Land port', 'Tegamukh, Barkal, Rangamati', 22.7252, 92.3795, 'Rangamati', 'Suspect Zone'),
(72, 'Land port', 'Chilahati, Domar, Nilphamari', 26.2446, 88.7963, 'Nilphamari', 'Suspect Zone'),
(73, 'Land port', 'Daulatganj, Jibon Nagar, Chuadanga', 23.4226, 88.8239, 'Chuadanga', 'Suspect Zone'),
(74, 'Land port', 'Bokshigonj, Jamalpur', 25.1844, 89.868, 'Jamalpur', 'Suspect Zone'),
(75, 'Land port', 'Sheola, Bianibazar, Sylhet', 24.822, 92.1585, 'Sylhet', 'Suspect Zone'),
(76, 'Land port', 'Balla, Chunarughat, Hobiganj', 24.0837, 91.5899, 'Hobiganj', 'Suspect Zone'),
(77, 'Land port', 'Shibganj, Chapai Nawabganj', 24.6837, 88.1572, 'Chapai Nawabganj', 'Suspect Zone'),
(78, 'Land port', 'Hili, Hakimpur, Dinajpur', 25.2748, 89.0514, 'Dinajpur', 'Suspect Zone'),
(79, 'Land port', 'Tetulia, Panchagarh', 26.517, 88.4307, 'Panchagarh', 'Suspect Zone'),
(80, 'Land port', 'Teknaf, Coxâ€™s Bazar', 21.0557, 92.204, ' Coxâ€™s Bazar', 'Suspect Zone'),
(81, 'Land port', 'Birol, Dinajpur', 25.6319, 88.5372, 'Dinajpur', 'Suspect Zone'),
(82, 'Safe zone ', 'University Of Rajshahi   ', 24.3683, 88.6376, 'Rajshahi', 'Green Zone'),
(83, 'Whole upazila ', 'Sakhipur,  tangil', 24.2865, 90.187, 'Tangil', 'Quarantine Area'),
(84, 'Whole village lockdown  ', 'Bailjuri, ghior ulazilla', 23.8703, 89.916, 'Makingonj', 'Lockdown Area'),
(85, 'A house was lockdown ', 'Road 2,  Khulsi,  Chittagong ', 22.3629, 91.813, 'Chittagong ', 'Lockdown Area'),
(86, 'Home quarantines 474 ', 'Barisal', 22.701, 90.3535, 'Barisal', 'Quarantine Area'),
(87, 'Home quarantines 449 ', 'Gopalgonj', 23.0488, 89.8879, 'Gopalgonj ', 'Quarantine Area'),
(88, 'Home quarantines 214', 'Nilfamari', 25.8483, 88.9414, 'Nilfamari', 'Quarantine Area'),
(89, 'Home quarantines 786', 'Tangil, Bangladesh  ', 24.2513, 89.9167, 'Tangil', 'Quarantine Area'),
(90, 'Home quarantines 193 ', 'Kurigram', 25.8072, 89.6295, 'Kurigram', 'Quarantine Area'),
(91, 'Safe zone ', 'Chittagong University  ', 22.4716, 91.7877, 'Chittagong ', 'Green Zone'),
(92, 'Safe zone ', 'Khulna university ', 22.8031, 89.5323, 'Khulna', 'Green Zone'),
(93, 'Safe zone ', 'Brur', 25.718, 89.2592, 'Rangpur', 'Green Zone'),
(94, 'Safe zone ', 'HSTU', 25.6977, 88.6548, 'Dinajpur ', 'Green Zone'),
(95, 'Safe zone ', 'Islamic University ', 23.7237, 89.1511, 'Kustia', 'Green Zone'),
(96, 'Safe zone ', 'Comilla University  ', 23.4194, 91.1365, 'Comilla', 'Green Zone'),
(97, 'Safe zone ', 'BUET', 23.7272, 90.393, 'Dhaka', 'Green Zone'),
(98, 'Safe zone ', 'BAU, Bangladesh ', 24.7196, 90.4267, 'Mymensingh ', 'Green Zone'),
(99, 'Safe zone ', 'SUST, Bangladesh ', 24.9172, 91.8319, 'Sylhet', 'Green Zone'),
(100, 'Safe zone ', 'JNU,  Bangladesh  ', 23.7086, 90.4114, 'Dhaka', 'Green Zone'),
(101, 'Safe zone ', 'JU,  Bangladesh ', 23.8818, 90.2625, 'Dhaka', 'Green Zone'),
(102, 'Safe zone ', 'RUET, Bangladesh ', 24.3636, 88.6284, 'Rajshahi', 'Green Zone'),
(103, 'Safe zone ', 'KUET, Bangladesh ', 22.9006, 89.5024, 'Khulna', 'Green Zone'),
(104, 'Safe zone ', 'CUET, Bangladesh ', 22.46, 91.971, 'Chittagong ', 'Green Zone'),
(105, 'Safe zone ', 'PSTU, Bangladesh ', 22.4646, 90.3836, 'Patuakhali ', 'Green Zone'),
(106, 'Safe zone ', 'JUST,  Bangladesh ', 23.2334, 89.1254, 'Jessore ', 'Green Zone'),
(107, 'Safe zone ', 'NSTU,  Bangladesh ', 22.7923, 91.1023, 'Noakhali', 'Green Zone'),
(108, 'Safe zone ', 'Bangobondhu science and technology University  ,  Bangladesh ', 22.9659, 89.8173, 'Gopalgonj ', 'Green Zone'),
(109, 'Safe zone ', 'Kobi Nazrul science and technology University Bangladesh      ', 24.5817, 90.3749, 'Mymensingh ', 'Green Zone'),
(110, 'Safe zone ', 'Carmical college,  Rangpur ', 25.7211, 89.254, 'Rangpur', 'Green Zone'),
(111, 'Safe zone ', 'Bm college,  barisal', 22.7118, 90.3567, 'Barisal', 'Green Zone'),
(112, 'Safe zone ', 'BL college,  khulna', 22.8676, 89.5293, 'Khulna', 'Green Zone'),
(113, 'Very dense zone,  mirpur 10', 'Mirpur 10 mor', 23.8069, 90.3687, 'Dhaka', 'Dense Area'),
(114, 'Safe zone ', 'Chattogram Veterinary and Animal Sciences University', 22.3628, 91.8043, 'Chittagong ', 'Green Zone'),
(115, 'Lockdown by zilla authority   ', 'Ghior,  makingonj', 23.8703, 89.916, 'Makingonj', 'Lockdown Area'),
(116, 'Home quarantines 251 from abroad', 'Satkhira sadar upazilla ', 22.7362, 89.037, 'Satkhira ', 'Quarantine Area'),
(117, 'Home quarantines 158 from abroad', 'Asasuni upazilla', 22.5463, 89.1896, 'Satkhira ', 'Quarantine Area'),
(118, 'Home quarantines 232 from abroad', 'Debhata,  upazila ', 22.5809, 88.9892, 'Satkhira ', 'Quarantine Area'),
(119, 'Home quarantines 234 from abroad', 'Kaligonj, satkhira', 22.4741, 89.0562, 'Satkhira ', 'Quarantine Area'),
(120, 'Home quarantines 631 from abroad', 'Kolarowa upazilla', 22.8792, 89.037, 'Satkhira ', 'Quarantine Area'),
(121, 'Home quarantines 310 from abroad', 'Samnogor upazilla', 21.9502, 89.1706, 'Satkhira ', 'Quarantine Area'),
(122, 'Home quarantines 206 from abroad', 'Tala upazilla', 22.7609, 89.2087, 'Satkhira ', 'Quarantine Area'),
(123, 'A home of foreigners is lockdown  ', 'Ishwardi sadar', 24.1292, 89.0657, 'Pabna', 'Lockdown Area'),
(124, 'A man affected and fled from dhaka and his home is lockdown ', 'Bashail,  tangil', 24.2331, 90.0513, 'Tangil', 'Lockdown Area'),
(125, ' Home quarantine and red flag for one house  ', 'Sharsa, jessore ', 23.0693, 88.9605, 'Jessore ', 'Quarantine Area'),
(126, 'Home quarantines 254 from abroad', 'Sharsa', 23.0693, 88.9605, 'Jessore ', 'Quarantine Area'),
(127, 'Home quarantines 127 from abroad', 'Manirampur', 23.0232, 89.2277, 'Jessore ', 'Quarantine Area'),
(128, 'Lockdown', 'Dibigram,  catmohor,  pabna', 24.1796, 89.2273, 'Pabna', 'Lockdown Area'),
(129, 'Home quarantines from abroad', 'Hobipur,  jogonnathpur pouro sohor ', 24.7729, 91.5681, 'Sunamganj ', 'Quarantine Area'),
(130, '3/28  ( 10 house was lockdown) ', 'Shibgonj , bogura', 25.0213, 89.3037, 'Bogura', 'Lockdown Area'),
(131, 'Home quarantines  4 homes', 'Madhukhali upazilla,  raypur union ', 23.5485, 89.6063, 'Faridpur', 'Quarantine Area'),
(132, 'Home quarantine 6 family ', 'Kathali upazilla, amuya bondor. Sodorpara gram', 22.3526, 90.0752, 'Jhalokathi', 'Quarantine Area'),
(133, 'Lockdown 4 house', 'Durgapur union,  cadpur', 23.4382, 90.6988, 'Chandpur', 'Lockdown Area'),
(134, 'A house was lockdown ', 'Kotchchandpur,  Jhenaidah ', 23.4075, 89.012, 'Jhenaidah', 'Lockdown Area'),
(135, 'Khaiyapunjo is lockdown by civil people', 'Juri,  moulvibazar ', 24.5801, 92.1647, 'Moulvibazar ', 'Lockdown Area'),
(136, 'Home quarantines 21 ', 'Feni ', 23.0192, 91.3869, 'Feni', 'Quarantine Area'),
(137, 'Lockdown 12 family', 'Satkania,  Chittagong  ', 22.1059, 92.0861, 'Chittagong ', 'Lockdown Area'),
(138, 'Kolom nogor,  4 family lockdown ', 'Komolnogor, Lakshmipur', 22.7845, 90.8484, 'Lakshmipur', 'Lockdown Area'),
(139, 'Lockdown', 'Madaripur', 23.2393, 90.187, 'Madaripur', 'Lockdown Area'),
(140, 'Lockdown', 'dhaka', 23.8103, 90.4125, 'Dhaka', 'Lockdown Area'),
(141, 'Lockdown', 'Gaibanda', 25.3297, 89.543, 'Gaibanda', 'Lockdown Area'),
(142, 'Lockdown', 'Narayongonj', 23.6238, 90.5, 'Naranang', 'Lockdown Area'),
(143, 'dead and  8 house lockdown, 9 april', 'kalihor,joardarpara,purbadhola  ,Netrokona', 24.9268, 90.5825, 'Netrokona', 'Lockdown Area'),
(144, 'a house was lockdown , jamata from narayangonj ,  9 april', 'katala union , birampur', 25.3292, 88.9709, 'Dinajpur', 'Lockdown Area'),
(145, '8 house was lockdown , 9 april', 'Janki dhaper hat , soddopuskurini ,Rangpur', 25.6654, 89.2149, 'Rangpur', 'Lockdown Area'),
(146, 'dead and 16 house lockdown ,  9 april', 'Agailjhora , Barisal', 22.9713, 90.1635, 'Barisal', 'Lockdown Area'),
(147, 'lockdown', 'Mathbariya , Barisal', 22.292, 89.958, 'Pirojpur', 'Lockdown Area'),
(148, '17 house lockdown 9 april', 'dowara bazar upazilla, lakkhipur union', 25.1094, 91.579, 'Sunamganj', 'Lockdown Area'),
(149, 'lockdown', 'Rajnagar, moulvibazar', 24.5307, 91.8562, 'Moulvibazar', 'Lockdown Area'),
(150, 'lockdown', 'cox bazar', 21.4272, 92.0058, 'cox bazar', 'Lockdown Area'),
(151, 'a village was lockdown , 9 april', 'raypura upazilla , Narsingdi', 23.9749, 90.8866, 'Narsingdi', 'Lockdown Area'),
(152, '3 village were lockdown ', 'gopalpur upazilla , tangail', 24.548, 89.9066, 'Tangail', 'Lockdown Area'),
(153, 'Lockdown ', 'Chandpur', 23.2321, 90.6631, 'Chandpur', 'Lockdown Area'),
(154, 'Lockdown 10 house', 'Poulung gram, khetkhal', 25.0202, 89.1134, 'Jaypurhat', 'Lockdown Area'),
(155, 'Lockdown ', 'Monpura', 22.8889, 91.0718, 'Noakhali', 'Lockdown Area'),
(156, 'Lockdown whole city', 'Rangpur', 25.7439, 89.2752, 'Rangpur', 'Lockdown Area'),
(157, 'Lockdown whole city', 'Sylhet', 24.8949, 91.8687, 'Sylhet', 'Lockdown Area'),
(158, 'Lockdown whole city', 'Noakhali', 22.8246, 91.1017, 'Noakhali', 'Lockdown Area'),
(159, 'Lockdown ', 'Brahmanbaria', 23.9608, 91.1115, 'Brahmanbaria', 'Lockdown Area'),
(160, 'lockdown city ', 'thakurgaon', 26.0418, 88.4283, 'Thakurgaon', 'Lockdown Area'),
(162, '35', 'Rangpur', 25.8483, 88.9414, 'à¦¨à§€à¦²à¦«à¦¾à¦®à¦¾à¦°à§€', 'Affected Area'),
(163, '89', 'Rangpur', 25.7468, 89.2508, 'à¦°à¦‚à¦ªà§à¦°', 'Affected Area'),
(164, '24', 'Rangpur', 25.329, 89.5415, 'à¦—à¦¾à¦‡à¦¬à¦¾à¦¨à§à¦¦à¦¾', 'Affected Area'),
(165, '30', 'Mymensingh', 25.0194, 90.0137, 'à¦¶à§‡à¦°à¦ªà§à¦°', 'Affected Area'),
(166, '102', 'Mymensingh', 24.925, 89.9463, 'à¦œà¦¾à¦®à¦¾à¦²à¦ªà§à¦°', 'Affected Area'),
(167, '204', 'Mymensingh', 24.7471, 90.4203, 'à¦®à§Ÿà¦®à¦¨à¦¸à¦¿à¦‚à¦¹', 'Affected Area'),
(168, '202', 'Dhaka', 24.4331, 90.7866, 'à¦•à¦¿à¦¶à§‹à¦°à¦—à¦žà§à¦œ', 'Affected Area'),
(169, '70', 'Sylhet', 24.384, 91.4169, 'à¦¹à¦¬à¦¿à¦—à¦žà§à¦œ', 'Affected Area'),
(170, '30', 'Sylhet', 24.4843, 91.7685, 'à¦®à§Œà¦²à¦­à§€à¦¬à¦¾à¦œà¦¾à¦°', 'Affected Area'),
(171, '28', 'Sylhet', 24.8949, 91.8687, 'à¦¸à¦¿à¦²à§‡à¦Ÿ', 'Affected Area'),
(172, '57', 'Chattogram', 23.9608, 91.1115, 'à¦¬à§à¦°à¦¾à¦®à¦¨à¦¬à¦¾à§œà§€à§Ÿà¦¾', 'Affected Area'),
(173, '171', 'Dhaka', 23.9193, 90.7177, 'à¦¨à¦°à¦¸à¦¿à¦‚à¦¦à§€', 'Affected Area'),
(174, '330', 'Dhaka', 23.9999, 90.4203, 'à¦—à¦¾à¦œà§€à¦ªà§à¦°', 'Affected Area'),
(175, '6365', 'Dhaka', 23.8103, 90.4125, 'à¦¢à¦¾à¦•à¦¾', 'Affected Area'),
(176, '1136', 'Dhaka', 23.7147, 90.5636, 'à¦¨à¦¾à¦°à¦¾à§Ÿà¦£à¦—à¦žà§à¦œ', 'Affected Area'),
(177, '31', 'Dhaka', 24.2513, 89.9167, 'à¦Ÿà¦¾à¦™à§à¦—à¦¾à¦‡à¦²', 'Affected Area'),
(178, '28', 'Dhaka', 23.8644, 90.0047, 'à¦®à¦¾à¦¨à¦¿à¦•à¦—à¦žà§à¦œ', 'Affected Area'),
(179, '23', 'Dhaka', 23.7639, 89.6467, 'à¦°à¦¾à¦œà¦¬à¦¾à§œà§€', 'Affected Area'),
(180, '23', 'Khulna', 23.6161, 88.8263, 'à¦šà§à§Ÿà¦¾à¦¡à¦¾à¦™à§à¦—à¦¾', 'Affected Area'),
(181, '150', 'Chattogram', 23.4607, 91.1809, 'à¦•à§à¦®à¦¿à¦²à§à¦²à¦¾', 'Affected Area'),
(182, '54', 'Dhaka', 23.2393, 90.187, 'à¦®à¦¾à¦¦à¦¾à¦°à§€à¦ªà§à¦°', 'Affected Area'),
(183, '43', 'Chattogram', 23.2321, 90.6631, 'à¦šà¦¾à¦à¦¦à¦ªà§à¦°', 'Affected Area'),
(184, '49', 'Dhaka', 23.0488, 89.8879, 'à¦—à§‹à¦ªà¦¾à¦²à¦—à¦žà§à¦œ ', 'Affected Area'),
(185, '28', 'Barishal', 22.2249, 90.4548, 'à¦ªà¦Ÿà§à§Ÿà¦¾à¦–à¦¾à¦²à§€', 'Affected Area'),
(186, '34', 'Barishal', 22.0953, 90.1121, 'à¦¬à¦°à¦—à§à¦¨à¦¾', 'Affected Area'),
(187, '159', 'Chattogram', 22.3569, 91.7832, 'à¦šà¦Ÿà§à¦Ÿà¦—à§à¦°à¦¾à¦®', 'Affected Area'),
(188, '72', 'Chattogram', 21.4272, 92.0058, 'à¦•à¦•à§à¦¸à¦¬à¦¾à¦œà¦¾à¦°', 'Affected Area'),
(189, '48', 'Barishal', 22.701, 90.3535, 'à¦¬à¦°à¦¿à¦¶à¦¾à¦²', 'Affected Area'),
(190, '23', 'Rangpur', 26.0274, 88.4646, 'à¦ à¦¾à¦•à§à¦°à¦—à¦¾à¦à¦“', 'Affected Area'),
(191, '13', 'Rangpur', 25.9162, 89.4506, 'à¦²à¦¾à¦²à¦®à¦¨à¦¿à¦°à¦¹à¦¾à¦Ÿ', 'Affected Area'),
(192, '50', 'Chattogram', 22.9454, 90.8342, 'à¦²à¦•à§à¦·à§à¦®à§€à¦ªà§à¦°', 'Affected Area'),
(193, '13', 'Barishal', 22.6406, 90.1987, 'à¦à¦¾à¦²à¦•à¦¾à¦ à¦¿', 'Affected Area'),
(194, '33', 'Rangpur', 25.8072, 89.6295, 'à¦•à§à§œà¦¿à¦—à§à¦°à¦¾à¦®', 'Affected Area'),
(195, 'lockdown city ', 'barisal', 22.701, 90.3535, 'Barisal', 'Lockdown Area'),
(196, '26', 'Rajshahi', 24.3745, 88.6042, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'Affected Area'),
(197, '64', 'Mymensingh', 24.8103, 90.8656, 'à¦¨à§‡à¦¤à§à¦°à¦•à§‹à¦¨à¦¾', 'Affected Area'),
(198, '35', 'Sylhet', 25.0667, 91.4072, 'à¦¸à§à¦¨à¦¾à¦®à¦—à¦žà§à¦œ', 'Affected Area'),
(199, '210', 'Dhaka', 23.4981, 90.4127, 'à¦®à§à¦¨à§à¦¸à¦¿à¦—à¦žà§à¦œ', 'Affected Area'),
(200, '57', 'Dhaka', 23.2423, 90.4348, 'à¦¶à¦°à§€à§Ÿà¦¤à¦ªà§à¦°', 'Affected Area'),
(201, 'Lockdown ', 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€ ', 24.3745, 88.6042, 'Rajshahi', 'Lockdown Area'),
(202, 'Lockdown ', 'à¦®à§Ÿà¦®à¦¨à¦¸à¦¿à¦‚à¦¹ ', 24.7471, 90.4203, 'Mymensingh ', 'Lockdown Area'),
(203, 'Lockdown ', 'à¦—à§‹à¦ªà¦¾à¦²à¦—à¦žà§à¦œ ', 23.0488, 89.8879, 'Gopalgonj ', 'Lockdown Area'),
(204, '0', 'Barishal', 22.5841, 89.972, 'à¦ªà¦¿à¦°à§‹à¦œà¦ªà§à¦°', 'Affected Area'),
(205, '20', 'Khulna', 22.8456, 89.5403, 'à¦–à§à¦²à¦¨à¦¾', 'Affected Area'),
(206, '13', 'Khulna', 23.1163, 89.584, 'à¦¨à§œà¦¾à¦‡à¦²', 'Affected Area'),
(207, '21', 'Dhaka', 23.6019, 89.8333, 'à¦«à¦°à¦¿à¦¦à¦ªà§à¦°', 'Affected Area'),
(208, '36', 'Rangpur', 25.6221, 88.6438, 'à¦¦à¦¿à¦¨à¦¾à¦œà¦ªà§à¦°', 'Affected Area'),
(209, '27', 'Chattogram', 22.8724, 91.0973, 'à¦¨à§‹à§Ÿà¦¾à¦–à¦¾à¦²à¦¿', 'Affected Area'),
(210, 'Lockdown ', 'à¦°à¦‚à¦ªà§à¦° ', 25.7468, 89.2508, 'Rangpur', 'Lockdown Area'),
(211, 'Lockdown ', 'Dinajpur', 25.6279, 88.6332, 'Dinajpur ', 'Lockdown Area'),
(212, '4', 'Chattogram', 21.8311, 92.3686, 'à¦¬à¦¾à¦¨à§à¦¦à¦°à¦¬à¦¨', 'Affected Area'),
(213, '8', 'Chattogram', 22.9409, 91.4067, 'à¦«à§‡à¦¨à§€', 'Affected Area'),
(214, '39', 'Rajshahi', 25.0947, 89.0945, 'à¦œà§Ÿà¦ªà§à¦°à¦¹à¦¾à¦Ÿ', 'Affected Area'),
(215, '16', 'Rajshahi', 24.1585, 89.4481, 'à¦ªà¦¾à¦¬à¦¨à¦¾', 'Affected Area'),
(216, '18', 'Rajshahi', 24.8481, 89.373, 'à¦¬à¦—à§à§œà¦¾', 'Affected Area'),
(217, 'Lockdown ', 'à¦¬à¦°à¦—à§à¦¨à¦¾ ', 22.0953, 90.1121, 'borguna', 'Lockdown Area'),
(218, '79', 'Khulna', 23.1778, 89.1801, 'à¦¯à¦¶à§‹à¦°', 'Affected Area'),
(219, '2', 'Khulna', 22.6602, 89.7896, 'à¦¬à¦¾à¦—à§‡à¦°à¦¹à¦¾à¦Ÿ', 'Affected Area'),
(220, '10', 'Rangpur', 26.3354, 88.5517, 'à¦ªà¦žà§à¦šà¦—à§œ', 'Affected Area'),
(221, '24', 'Rajshahi', 24.7936, 88.9318, 'à¦¨à¦“à¦—à¦¾à¦', 'Affected Area'),
(222, '6', 'Rajshahi', 24.4526, 89.6816, 'à¦¸à¦¿à¦°à¦¾à¦œà¦—à¦žà§à¦œ', 'Affected Area'),
(223, '14', 'Rajshahi', 24.7413, 88.2912, 'à¦šà¦¾à¦à¦ªà¦¾à¦‡à¦¨à¦¬à¦¾à¦¬à¦—à¦žà§à¦œ', 'Affected Area'),
(224, '11', 'Khulna', 23.4855, 89.4198, 'à¦®à¦¾à¦—à§à¦°à¦¾', 'Affected Area'),
(225, '5', 'Khulna', 23.8052, 88.6724, 'à¦®à§‡à¦¹à§‡à¦°à¦ªà§à¦°', 'Affected Area'),
(226, '20', 'Khulna', 23.8907, 89.1099, 'à¦•à§à¦·à§à¦Ÿà¦¿à§Ÿà¦¾', 'Affected Area'),
(227, '12', 'Rajshahi', 24.4102, 89.0076, 'à¦¨à¦¾à¦Ÿà§‹à¦°', 'Affected Area'),
(228, 'lockdown', 'kurigram', 25.8072, 89.6295, 'Kurigram', 'Lockdown Area'),
(229, '7', 'Barishal', 22.1785, 90.7101, 'à¦­à§‹à¦²à¦¾', 'Affected Area'),
(230, '34', 'Khulna', 23.545, 89.1726, 'à¦à¦¿à¦¨à¦¾à¦‡à¦¦à¦¹', 'Affected Area'),
(231, 'Lockdown ', 'à¦¯à¦¶à§‹à¦°', 23.1634, 89.2182, 'à¦¯à¦¶à§‹à¦°', 'Lockdown Area'),
(232, '4', 'Khulna', 22.3155, 89.1115, 'à¦¸à¦¾à¦¤à¦•à§à¦·à¦¿à¦°à¦¾', 'Affected Area'),
(233, '2', 'Chattogram', 23.1108, 91.9906, 'à¦–à¦¾à¦—à§œà¦¾à¦›à§œà¦¿', 'Affected Area'),
(234, '4', 'Chattogram ', 22.7324, 92.2985, 'à¦°à¦¾à¦‚à¦™à¦¾à¦®à¦¾à¦Ÿà¦¿', 'Affected Area');

-- --------------------------------------------------------

--
-- Table structure for table `publicinfo`
--

CREATE TABLE `publicinfo` (
  `id` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `reference` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publicinfo`
--

INSERT INTO `publicinfo` (`id`, `address`, `District`, `category`, `reference`) VALUES
(1, 'paik para', 'Kurigram', 'Green Zone', 'hospitalseba.com'),
(2, 'babugonj', 'Barishal', 'Green Zone', ''),
(3, 'df', 'fdgf', 'Quarantine Area', 'fgfdsg'),
(4, 'dfds', 'dfd', 'Affected Area', 'dfd'),
(5, 'dfgds', 'sg', 'Green Zone', 'fgfdsg'),
(6, 'dvfsdg', 'fdgg', 'Affected Area', 'fdgfd'),
(7, 'dvfsdg', 'fdgg', 'Affected Area', 'fdgfd'),
(8, 'Barisal sada', 'Barisal', 'Affected Area', 'Online portal'),
(9, 'kotchandpur', 'jhenidah', 'Affected Area', ''),
(10, 'mongla', 'Bagerhat ', 'Affected Area', ''),
(11, 'mongla', 'Bagerhat ', 'Affected Area', 'affected'),
(12, 'Jadurchar,rowmary', 'Kurigram', 'Lockdown Area', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `world`
--

CREATE TABLE `world` (
  `id` int(20) NOT NULL,
  `total` varchar(50) NOT NULL,
  `death` varchar(50) NOT NULL,
  `recover` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `world`
--

INSERT INTO `world` (`id`, `total`, `death`, `recover`, `active`) VALUES
(1, '4057835', '277944', '1414731', '2365160');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isolation`
--
ALTER TABLE `isolation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publicinfo`
--
ALTER TABLE `publicinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `world`
--
ALTER TABLE `world`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `isolation`
--
ALTER TABLE `isolation`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `publicinfo`
--
ALTER TABLE `publicinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `world`
--
ALTER TABLE `world`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
