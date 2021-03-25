-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 01:27 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms_metropoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_details`
--

CREATE TABLE `bus_details` (
  `bus_id` int(50) NOT NULL,
  `bus_no` varchar(250) NOT NULL,
  `bus_type_id` varchar(250) NOT NULL,
  `dri_id` int(250) NOT NULL,
  `con_id` int(250) NOT NULL,
  `eng_id` int(50) NOT NULL,
  `plate_no` varchar(250) NOT NULL,
  `sap_code` int(50) NOT NULL,
  `route_id` int(50) NOT NULL,
  `seat_cap` int(50) NOT NULL,
  `bus_stat_id` int(50) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `trip_stat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_details`
--

INSERT INTO `bus_details` (`bus_id`, `bus_no`, `bus_type_id`, `dri_id`, `con_id`, `eng_id`, `plate_no`, `sap_code`, `route_id`, `seat_cap`, `bus_stat_id`, `time_stamp`, `trip_stat_id`) VALUES
(48, 'DDN-1001', '8', 10, 20, 1, ' ABC-1234', 123456, 1, 50, 1, '2021-03-24 15:24:13', 1),
(50, 'NB-1002', '10', 5, 11, 1, ' POI-1234', 123131, 2, 50, 1, '2021-03-23 23:22:44', 1),
(51, 'DVC-1004', '3', 0, 0, 1, ' LKJ-14134', 21231, 1, 50, 2, '2021-03-23 22:12:32', 0),
(52, 'LK-2001', '11', 16, 22, 1, ' YTR-87646', 1313132, 3, 50, 1, '2021-03-23 23:17:00', 1),
(53, 'POIR-15425', '2', 15, 19, 2, ' 5225-FFDD', 441414, 1, 50, 1, '2021-03-24 15:38:09', 1),
(54, 'DGG-7635-EW', '5', 11, 21, 2, ' 1131-RYER', 13213123, 3, 60, 1, '2021-03-24 15:48:02', 1),
(55, '78124yuwer', '9', 14, 19, 2, ' uyqwetu71374134', 2147483647, 4, 59, 1, '2021-03-24 16:24:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bus_eng_type`
--

CREATE TABLE `bus_eng_type` (
  `eng_id` int(50) NOT NULL,
  `descrip` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_eng_type`
--

INSERT INTO `bus_eng_type` (`eng_id`, `descrip`) VALUES
(1, 'TYPE A'),
(2, 'TYPE B');

-- --------------------------------------------------------

--
-- Table structure for table `bus_stat`
--

CREATE TABLE `bus_stat` (
  `bus_stat_id` int(50) NOT NULL,
  `descrip` varchar(250) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_stat`
--

INSERT INTO `bus_stat` (`bus_stat_id`, `descrip`, `time_stamp`) VALUES
(1, 'Active', '2021-02-02 17:05:28'),
(2, 'In-Active', '2021-02-02 17:05:39'),
(3, 'On Shop', '2021-02-02 17:05:52'),
(4, 'Rental', '2021-02-02 17:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `bus_type`
--

CREATE TABLE `bus_type` (
  `bus_type_id` int(50) NOT NULL,
  `descrip` varchar(250) NOT NULL,
  `abbr` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_type`
--

INSERT INTO `bus_type` (`bus_type_id`, `descrip`, `abbr`) VALUES
(2, 'AC', 'AIRCON'),
(3, 'DEL', 'DELUXE'),
(4, 'CBAC', 'CLASS B AIRCON '),
(5, 'CAAC', 'CLASS C AIRCON \r\n'),
(6, 'CAAC ', 'CLASS A AIRCON '),
(8, 'GDAC', 'GOLDEN DRAGON AIRCON'),
(9, 'GDC', 'GOLDEN DRAGON COASTER'),
(10, 'SC', 'SPIDER COACH'),
(11, 'VAC', 'VOLVO AIRCON'),
(12, 'YAC', 'YUTONG AIRCON'),
(13, 'YD', 'YUTONG DELUXE'),
(15, 'NAC', 'NEW AIRCON');

-- --------------------------------------------------------

--
-- Table structure for table `que_details`
--

CREATE TABLE `que_details` (
  `que_id` int(50) NOT NULL,
  `trip_no` varchar(250) NOT NULL,
  `bus_no` varchar(250) NOT NULL,
  `dri_id` int(250) NOT NULL,
  `con_id` int(250) NOT NULL,
  `bus_type_id` int(50) NOT NULL,
  `seat_cap` int(50) NOT NULL,
  `from_ter` varchar(250) NOT NULL,
  `to_ter` varchar(250) NOT NULL,
  `que_time` time NOT NULL,
  `que_date` date NOT NULL,
  `dep_time` time NOT NULL,
  `dep_date` date NOT NULL,
  `arr_time` time NOT NULL,
  `arr_date` date NOT NULL,
  `que_stat_id` int(50) NOT NULL,
  `que_stat_arr_id` int(50) NOT NULL,
  `que_long` decimal(10,6) NOT NULL,
  `que_lat` decimal(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `que_details`
--

INSERT INTO `que_details` (`que_id`, `trip_no`, `bus_no`, `dri_id`, `con_id`, `bus_type_id`, `seat_cap`, `from_ter`, `to_ter`, `que_time`, `que_date`, `dep_time`, `dep_date`, `arr_time`, `arr_date`, `que_stat_id`, `que_stat_arr_id`, `que_long`, `que_lat`) VALUES
(58, 'VAC-243202171658-New Bataan', 'LK-2001', 16, 22, 11, 50, 'Tagum', 'New Bataan', '07:16:00', '2021-03-24', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 0, 0, '0.000000', '0.000000'),
(59, 'SC-243202172242-Davao', 'NB-1002', 5, 11, 10, 50, 'Tagum', 'Davao', '07:22:00', '2021-03-24', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 0, 0, '125.832993', '7.464092'),
(60, 'SC-243202202242-Davao', 'NB-1002', 5, 11, 10, 50, 'Laak', 'Davao', '07:22:00', '2021-03-24', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 0, 0, '125.574299', '7.075340'),
(61, 'GDAC-2432021231028-Tagum', 'DDN-1001', 0, 0, 8, 50, 'Tagum', 'Tagum', '23:10:00', '2021-03-24', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 0, 0, '0.000000', '0.000000'),
(62, 'GDAC-243202123245-New Bataan', 'DDN-1001', 15, 17, 8, 50, 'Tagum', 'New Bataan', '23:23:00', '2021-03-24', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 0, 0, '0.000000', '0.000000'),
(63, 'AC-2432021233759-Maragusan', 'POIR-15425', 13, 19, 2, 50, 'Tagum', 'Maragusan', '23:37:00', '2021-03-24', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 1, 0, '0.000000', '0.000000'),
(64, 'CAAC-2432021234757-New Bataan', 'DGG-7635-EW', 17, 21, 5, 60, 'Davao', 'New Bataan', '23:47:00', '2021-03-24', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 0, 0, '0.000000', '0.000000'),
(65, 'GDC-25320210246-Tagum', '78124yuwer', 14, 19, 9, 59, 'Davao', 'Tagum', '00:23:00', '2021-03-25', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 1, 0, '125.870018', '7.497962');

-- --------------------------------------------------------

--
-- Table structure for table `que_stat`
--

CREATE TABLE `que_stat` (
  `que_stat_id` int(50) NOT NULL,
  `descrip` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `que_stat`
--

INSERT INTO `que_stat` (`que_stat_id`, `descrip`) VALUES
(0, 'Waiting'),
(1, 'Departed');

-- --------------------------------------------------------

--
-- Table structure for table `que_stat_arr`
--

CREATE TABLE `que_stat_arr` (
  `que_stat_arr_id` int(50) NOT NULL,
  `descrip` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `que_stat_arr`
--

INSERT INTO `que_stat_arr` (`que_stat_arr_id`, `descrip`) VALUES
(1, 'Arrived'),
(2, 'OnRoad');

-- --------------------------------------------------------

--
-- Table structure for table `route_details`
--

CREATE TABLE `route_details` (
  `route_id` int(50) NOT NULL,
  `f_descrip` varchar(250) NOT NULL,
  `l_descrip` varchar(250) NOT NULL,
  `abbr` varchar(50) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route_details`
--

INSERT INTO `route_details` (`route_id`, `f_descrip`, `l_descrip`, `abbr`, `time_stamp`) VALUES
(1, 'Tagum', 'Davao', 'TGMDVO', '2021-03-21 10:18:19'),
(2, 'Tagum ', 'New Bataan', 'TGMNB', '2021-03-21 10:18:19'),
(3, 'Tagum', 'Laak', 'TGMLK', '2021-03-21 10:18:19'),
(4, 'Tagum', 'Maragusan', 'TGMMAR', '2021-03-21 10:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `ter_details`
--

CREATE TABLE `ter_details` (
  `ter_id` int(50) NOT NULL,
  `descrip` varchar(250) NOT NULL,
  `ter_abbr` varchar(50) NOT NULL,
  `ter_lat` decimal(10,6) NOT NULL,
  `ter_long` decimal(10,6) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ter_details`
--

INSERT INTO `ter_details` (`ter_id`, `descrip`, `ter_abbr`, `ter_lat`, `ter_long`, `time_stamp`) VALUES
(1, 'Tagum', 'TGM', '7.461092', '125.798725', '2021-03-24 23:27:42'),
(2, 'Davao', 'DVO', '7.070911', '125.597506', '2021-03-24 23:27:42'),
(3, 'New Bataan', 'NB', '0.000000', '0.000000', '2021-03-21 10:27:41'),
(4, 'Maragusan', 'MAR', '0.000000', '0.000000', '2021-03-21 10:27:41'),
(5, 'Nabunturan', 'NAB', '0.000000', '0.000000', '2021-03-21 10:27:41'),
(6, 'Laak', 'LK', '0.000000', '0.000000', '2021-03-21 10:27:41'),
(8, 'Monkayo', 'MONK', '0.000000', '0.000000', '2021-03-21 10:27:41'),
(9, 'Montivista', 'MONT', '0.000000', '0.000000', '2021-03-21 10:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `trip_stat`
--

CREATE TABLE `trip_stat` (
  `trip_stat_id` int(10) NOT NULL,
  `descrip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip_stat`
--

INSERT INTO `trip_stat` (`trip_stat_id`, `descrip`) VALUES
(0, 'Available'),
(1, 'Travelling'),
(2, 'Absent'),
(3, 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `type_id` int(50) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `m_intl` varchar(250) NOT NULL,
  `sufx` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `ter_id` int(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `cont_no` int(50) NOT NULL,
  `stat_id` int(50) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `type_id`, `u_name`, `l_name`, `f_name`, `m_intl`, `sufx`, `sex`, `ter_id`, `pass`, `cont_no`, `stat_id`, `time_stamp`) VALUES
(33, 2, 'ad_dave', 'Perez', 'Carl Luis', 'D', '', 'female', 2, 'd1488e742a1629bfb84d6b3fbf3551cd', 414134, 1, '2021-02-02 16:08:37'),
(34, 2, 'jay', 'Fukbit', 'Jhon Mark ', 'D', '', 'male', 1, '1f86f40cee8970c54622716ffcdf39aa', 1434134, 1, '2021-02-02 16:09:03'),
(36, 1, 'Carry_Sackrider', 'Sackrider', 'Carry ', 'O', '', 'Male', 0, 'f9c05403344bba5b3993d54797b56820', 2147483647, 0, '2021-02-17 16:55:39'),
(37, 1, 'sal_trabue', 'Trabue', 'Sal', 'S', '', 'Female', 0, '7794fc517590053809f758b7e16d87ed', 978653452, 0, '2021-02-17 16:56:27'),
(38, 1, 'joseph007', 'Dufresne', 'Joseph', 'Z', 'Jr.', 'Male', 0, 'cb07901c53218323c4ceacdea4b23c98', 2147483647, 0, '2021-02-17 16:57:29'),
(40, 1, 'garth_shedd87', 'Shedd', 'Garth', 'Q', '', 'Male', 0, '83a8282903ee8043fad50f2a070b4208', 2147483647, 1, '2021-02-17 17:00:31'),
(41, 1, 'pat_massenburg', 'Massenburg', 'Pat', 'L', '', 'Male', 4, '7852341745c93238222a65a910d1dcc5', 2147483647, 1, '2021-02-17 17:14:17'),
(42, 2, 'jarrett69', 'Brassfield', 'Jarrett', 'B', 'III', 'Male', 3, 'f27e7659cc98c87d625b2a6b1b9b445e', 2147483647, 1, '2021-02-02 19:16:23'),
(43, 2, 'Estafana456', 'Matousek', 'Estefana', 'V', '', 'Female', 2, '4d591a64e65275371ec43c10f5eb910b', 2147483647, 1, '2021-02-02 19:18:24'),
(44, 2, 'Estafana456', 'Matousek', 'Estefana', 'V', '', 'Female', 2, '4d591a64e65275371ec43c10f5eb910b', 2147483647, 1, '2021-02-02 19:18:26'),
(45, 2, 'carolin', 'Avant', 'Carolin', 'H', '', 'Female', 3, 'c00eec94738cf59dd646b047cee9a590', 2147483647, 1, '2021-02-02 19:20:01'),
(46, 2, 'leda_cueto', 'Cueto', 'Leda', 'K', '', 'Female', 1, '68e3d3ca71bae332832b42bb38df7503', 2147483647, 1, '2021-02-02 19:21:07'),
(47, 2, 'lucy876', 'Bittinger', 'Lucy', 'R', '', 'Female', 3, 'ecfb2ca9428299f31f0bbb9b5ea28dc3', 2147483647, 1, '2021-02-02 19:22:12'),
(48, 2, 'jamika', 'Errico', 'Jamika', 'J', '', 'Female', 1, '304be235474a099c09c4bdfd10f84173', 2147483647, 1, '2021-02-02 19:23:33'),
(49, 2, 'ommar_shannon123', 'Shannon', 'Omar', 'C', '', 'Male', 3, '92453097b261f830da92dd403a75eb9d', 2147483647, 2, '2021-02-17 18:44:32'),
(70, 5, 'josh3456789', 'Grenz', 'Josh ', 'H', '', 'Male', 3, 'f94adcc3ddda04a8f34928d862f404b4', 2147483647, 1, '2021-02-02 20:18:12'),
(71, 5, 'ocatavio_23', 'Benbow', 'Octavio', 'A', '', 'Male', 1, '997100cd64f9032692288cc33e512c56', 2147483647, 1, '2021-02-02 20:19:46'),
(72, 5, 'duane_mcgiviney', 'Mcgivney', 'Duane', 'Z', '', 'Male', 3, '357ddb585594fe6400d3114fc94239c2', 948573596, 4, '2021-02-02 20:22:13'),
(73, 5, 'duane_mcgiviney', 'Mcgivney', 'Duane', 'Z', '', 'Male', 3, '357ddb585594fe6400d3114fc94239c2', 948573596, 4, '2021-02-02 20:22:14'),
(74, 5, 'james_figueras', 'Figueras', 'James', 'A', '', 'Male', 1, 'b4cc344d25a2efe540adbf2678e2304c', 2147483647, 1, '2021-02-02 20:27:35'),
(75, 5, 'santiago00891', 'Etienne', 'Santiago', 'K', '', 'Male', 2, 'a6f30815a43f38ec6de95b9a9d74da37', 2147483647, 4, '2021-02-02 20:29:08'),
(76, 5, 'garth_lorio', 'Lorio', 'Garth', 'C', 'III', 'Male', 3, '83a8282903ee8043fad50f2a070b4208', 2147483647, 2, '2021-02-02 20:30:22'),
(77, 5, 'cletus891', 'Okeefe', 'Cletus', 'W', '', 'Male', 1, '2c87a0128dc323bff723b1a5c86ac6c3', 2147483647, 3, '2021-02-02 20:31:48'),
(78, 5, 'darell_livermore', 'Livermore', 'Darell ', 'T', '', 'Male', 2, '4dbab62e6b46537ac937d5b5cc7433fe', 2147483647, 1, '2021-02-02 20:33:16'),
(79, 5, 'efrain', 'Zendejas', 'Efrain', 'R', '', 'Male', 1, '69423f0c254e5c1d2b0f5ee202459d2c', 2147483647, 2, '2021-02-02 20:36:53'),
(80, 6, 'zachary_tafoya', 'Tafoya', 'Zachary', 'B', '', 'Male', 2, '0905a74d4251fc1b2ec794738a81f324', 2147483647, 2, '2021-02-02 20:42:14'),
(81, 6, 'kenton_rush', 'Rush', 'Kenton', 'L', '', 'Male', 2, 'bd78dba91ed7dd3794d9ee702cafa8fb', 2147483647, 1, '2021-02-02 20:43:49'),
(82, 6, 'conrad123', 'Messersmith', 'Conrad', 'K', '', 'Male', 1, 'a66483fb374daaef2c09ca1d24ee152a', 2147483647, 2, '2021-02-03 01:34:12'),
(83, 6, 'darrel_ruocco', 'Ruocco', 'Darrel', 'G', '', 'Male', 2, 'e6562ade52585f20dd79ffbc1d59797b', 2147483647, 4, '2021-02-03 01:35:56'),
(84, 6, 'daniel_gravatt', 'Gravatt', 'Daniel', 'C', '', 'Male', 3, 'aa47f8215c6f30a0dcdb2a36a9f4168e', 2147483647, 1, '2021-02-03 01:37:05'),
(85, 6, 'wilson_macklin', 'Macklin', 'Wilson', 'G', '', 'Male', 3, 'abd7372bba55577590736ef6cb3533c6', 2147483647, 2, '2021-02-03 01:38:17'),
(86, 6, 'buster_ponds', 'Ponds', 'Buster', 'S', '', 'Male', 1, 'd9b23ebbf9b431d009a20df52e515db5', 2147483647, 2, '2021-02-03 01:39:10'),
(87, 6, 'marlon_westover22', 'Westover', 'Marlon', 'T', '', 'Male', 1, 'c8f759a539858b08e9e46251b1ae9f09', 2147483647, 2, '2021-02-03 01:40:06'),
(88, 6, 'mariano678', 'Mckenny', 'Mariano', 'L', 'Sr.', 'Male', 2, '0804048efcb1f0b3c2f18a4412b1016c', 2147483647, 2, '2021-02-03 01:41:10'),
(89, 6, 'everett_toomey', 'Toomey', 'Everett', 'M', '', 'Male', 3, 'd60bbb7684dffc8995dea0a56c8d0a37', 2147483647, 3, '2021-02-03 01:42:21'),
(103, 7, 'erqrqrqe', 'Vincent Dave', 'Vincent Dave', 'D', 'Jr.', 'Male', 2, 'c7ee9e57dfecf81cadb484abde705f48', 12413431, 2, '2021-02-03 05:03:11'),
(104, 8, 'admin_dave', 'Jay', 'Jay', 'A', 'Jr.', 'Male', 2, '3c5bb4887627a4ec06c9a7cc483dd10c', 414134, 2, '2021-02-03 05:03:46'),
(109, 7, 'marlan2021po', 'Belan', 'Margarito', 'C', '', 'Male', 5, 'b0b724fd55342b87c635a67bb8bb93f3', 2147483647, 2, '2021-02-03 15:50:03'),
(112, 7, 'Dantov23o02', 'Tovar', 'Danielle ', 'Z', 'I', 'Male', 1, '345770c9dff54e94d3a92217a4762502', 2147483647, 1, '2021-02-03 15:53:36'),
(113, 7, 'dEMONdon231', 'Demonteverde', 'Donatello', 'K.', '', 'Male', 2, '4903e0be5f3a8e7246bd99480684d2f9', 2147483647, 1, '2021-02-03 15:56:43'),
(114, 7, 'alexbantaw9009', 'Bantawil', 'Alexander', 'M.', '', 'Male', 4, 'dcc104e20978c4b2a361f0c88a8a9975', 2147483647, 3, '2021-02-03 16:00:32'),
(115, 8, 'marlan2021po', 'Crawford', 'Mathew', 'R', '', 'Male', 5, 'cdf31ac7f55c5fc887e06dc82c34efae', 926737342, 1, '2021-02-03 16:03:16'),
(116, 8, 'mao nani', 'Froville', 'Sander', 'T', '', 'Male', 6, 'c4db835db844412ea9633db357d0cee0', 2147483647, 2, '2021-02-03 16:05:18'),
(117, 8, 'POttehhh', 'Rolous', 'Raven', 'W', '', 'Male', 7, 'e8e7819db2bcdba5de39af4ba9d5e847', 935763678, 1, '2021-02-03 16:07:18'),
(118, 8, 'naolaghwan', 'Napala', 'Winslet', 'Q', '', 'Male', 1, '16b1807e9792eae2786687c88ca52d15', 2147483647, 2, '2021-02-03 16:09:13'),
(121, 5, 'op_dave', 'Vincent Dave', 'Vincent Dave', 'D', '', 'Male', 1, '827ccb0eea8a706c4c34a16891f84e7b', 131, 1, '2021-02-05 20:59:38'),
(124, 7, 'ddenit', 'Denit', 'Doneto', 'P', 'Jr.', 'Male', 1, 'ba542c5ebc9ed3060201181cb9e1dd6b', 936984621, 2, '2021-02-08 17:33:13'),
(125, 8, 'luffypist', 'Pist', 'Luffy', 'C', 'Sr.', 'Male', 1, '256384f6b309e501768bf7e04769a8fe', 2147483647, 1, '2021-02-08 17:34:52'),
(126, 7, 'Fdela', 'Dela Cerna', 'Francis', 'D', 'I', 'Male', 2, 'ed03ad98d56c9b291259c5e64a38651d', 2147483647, 4, '2021-02-17 19:50:45'),
(127, 8, 'HenOlive', 'Guillimo', 'Henry Oliver', 'A', 'III', 'Male', 3, '57f2b58889831eaa3b506b6bfabd409e', 2147483647, 1, '2021-02-08 17:40:48'),
(128, 8, 'Ypilrico', 'Ypil', 'Rico', 'A', 'Jr.', 'Male', 1, '18982f72ff35b9431651929148c76cdd', 2147483647, 1, '2021-02-08 17:43:35'),
(129, 6, 'Davidsals', 'Salon', 'David', 'E', 'I', 'Male', 1, '1a49d1c78f3775a762779415b1be9514', 2147483647, 1, '2021-02-08 17:45:29'),
(130, 8, 'jilmicivc', 'Jilmico', 'Vincent', 'P', 'I', 'Male', 5, '3cc98d0d2d1cbd6bbb2f33fb15deb3b0', 2147483647, 4, '2021-02-08 17:47:31'),
(132, 7, 'lovider', 'Devilla', 'Lovimer', 'P', 'Sr.', 'Male', 3, '2e9c985f4025a79e24a7bbdbb163e35e', 2147483647, 2, '2021-02-08 17:52:26'),
(133, 8, 'dortaman', 'Dorta', 'Norman', 'P', 'Jr.', 'Male', 6, '6f136730567879f1357b19b1a17f14b6', 2147483647, 3, '2021-02-17 19:49:58'),
(134, 7, 'marvye', 'Ye', 'Marven', 'A', 'I', 'Male', 2, '6f9acffab2d7c8ae2176c8509514954a', 926729532, 1, '2021-02-08 17:55:21'),
(135, 7, 'Maxwealth', 'Moon', 'Maxwell', 'M', 'IV', 'Male', 2, 'eaef071efe2f6452d4ef1755add80dfb', 2147483647, 1, '2021-02-08 17:57:44'),
(136, 2, 'admin', 'soratos', 'dave', 'D', 'III', 'Male', 2, '827ccb0eea8a706c4c34a16891f84e7b', 1114134134, 1, '2021-03-21 12:17:53'),
(137, 1, 'topadmin', 'soratos', 'dave', 'c', 'III', 'Female', 5, '827ccb0eea8a706c4c34a16891f84e7b', 1313, 1, '2021-03-21 12:19:03'),
(138, 7, 'new_driver', 'driver', 'new', 'D', 'III', 'Male', 1, '827ccb0eea8a706c4c34a16891f84e7b', 2147483647, 1, '2021-03-23 06:58:39'),
(139, 0, 'no Driver', 'no driver', '', '', '', '', 0, '827ccb0eea8a706c4c34a16891f84e7b', 0, 1, '2021-03-23 06:58:39'),
(141, 5, 'op_davao', 'soratoe', 'dave', 'D', 'Sr.', 'Male', 2, '827ccb0eea8a706c4c34a16891f84e7b', 31243, 1, '2021-03-24 07:02:53'),
(142, 2, 'admin_davao', 'Perez', 'Carl Luis', 'D', 'III', 'Male', 2, '827ccb0eea8a706c4c34a16891f84e7b', 11214, 1, '2021-03-24 16:27:35'),
(143, 2, 'admin_tgm', 'Perez', 'Armando ', 'D', 'Sr.', 'Male', 1, '827ccb0eea8a706c4c34a16891f84e7b', 12314314, 1, '2021-03-24 16:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `ad_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `m_intl` varchar(250) NOT NULL,
  `sufx` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `ter_id` int(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `cont_no` int(50) NOT NULL,
  `stat_id` int(50) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`ad_id`, `user_id`, `u_name`, `l_name`, `f_name`, `m_intl`, `sufx`, `sex`, `ter_id`, `pass`, `cont_no`, `stat_id`, `time_stamp`) VALUES
(1, 33, 'ad_dave', 'Perez', 'Carl Luis', 'D', '', 'female', 2, 'd1488e742a1629bfb84d6b3fbf3551cd', 414134, 1, '2021-02-02 16:08:38'),
(2, 34, 'jay', 'Fukbit', 'Jhon Mark ', 'D', '', 'male', 1, '1f86f40cee8970c54622716ffcdf39aa', 1434134, 1, '2021-02-02 16:09:04'),
(3, 42, 'jarrett69', 'Brassfield', 'Jarrett', 'B', 'III', 'Male', 3, 'f27e7659cc98c87d625b2a6b1b9b445e', 2147483647, 1, '2021-02-02 19:16:23'),
(4, 44, 'Estafana456', 'Matousek', 'Estefana', 'V', '', 'Female', 2, '4d591a64e65275371ec43c10f5eb910b', 2147483647, 1, '2021-02-02 19:18:26'),
(5, 44, 'Estafana456', 'Matousek', 'Estefana', 'V', '', 'Female', 2, '4d591a64e65275371ec43c10f5eb910b', 2147483647, 1, '2021-02-02 19:18:26'),
(6, 45, 'carolin', 'Avant', 'Carolin', 'H', '', 'Female', 3, 'c00eec94738cf59dd646b047cee9a590', 2147483647, 1, '2021-02-02 19:20:02'),
(7, 46, 'leda_cueto', 'Cueto', 'Leda', 'K', '', 'Female', 1, '68e3d3ca71bae332832b42bb38df7503', 2147483647, 1, '2021-02-02 19:21:08'),
(8, 47, 'lucy876', 'Bittinger', 'Lucy', 'R', '', 'Female', 3, 'ecfb2ca9428299f31f0bbb9b5ea28dc3', 2147483647, 1, '2021-02-02 19:22:13'),
(9, 48, 'jamika', 'Errico', 'Jamika', 'J', '', 'Female', 1, '304be235474a099c09c4bdfd10f84173', 2147483647, 1, '2021-02-02 19:23:33'),
(10, 49, 'ommar_shannon123', 'Shannon', 'Omar', 'C', '', 'Male', 3, '92453097b261f830da92dd403a75eb9d', 2147483647, 2, '2021-02-17 18:44:32'),
(11, 136, 'admin', 'soratos', 'dave', 'D', 'III', 'Male', 2, '827ccb0eea8a706c4c34a16891f84e7b', 1114134134, 1, '2021-03-21 12:17:53'),
(12, 142, 'admin_davao', 'Perez', 'Carl Luis', 'D', 'III', 'Male', 2, '827ccb0eea8a706c4c34a16891f84e7b', 11214, 1, '2021-03-24 16:27:35'),
(13, 143, 'admin_tgm', 'Perez', 'Armando ', 'D', 'Sr.', 'Male', 1, '827ccb0eea8a706c4c34a16891f84e7b', 12314314, 1, '2021-03-24 16:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_con`
--

CREATE TABLE `user_con` (
  `con_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `m_intl` varchar(250) NOT NULL,
  `sufx` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `ter_id` int(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `cont_no` int(50) NOT NULL,
  `stat_id` int(50) NOT NULL,
  `emp_date` date NOT NULL,
  `time_stamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `trip_stat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_con`
--

INSERT INTO `user_con` (`con_id`, `user_id`, `u_name`, `l_name`, `f_name`, `m_intl`, `sufx`, `sex`, `ter_id`, `pass`, `cont_no`, `stat_id`, `emp_date`, `time_stamp`, `trip_stat_id`) VALUES
(11, 104, 'admin_dave', 'Jay', 'Jay', 'A', 'Jr.', 'Male', 2, '3c5bb4887627a4ec06c9a7cc483dd10c', 414134, 2, '2021-01-31', '2021-03-23 23:22:44.801474', 1),
(16, 115, 'marlan2021po', 'Crawford', 'Mathew', 'R', '', 'Male', 5, 'cdf31ac7f55c5fc887e06dc82c34efae', 926737342, 1, '2021-03-05', '2021-02-03 16:03:16.397964', 0),
(17, 116, 'mao nani', 'Froville', 'Sander', 'T', '', 'Male', 6, 'c4db835db844412ea9633db357d0cee0', 2147483647, 2, '2020-12-14', '2021-03-24 15:24:13.043908', 1),
(18, 117, 'POttehhh', 'Rolous', 'Raven', 'W', '', 'Male', 7, 'e8e7819db2bcdba5de39af4ba9d5e847', 935763678, 1, '2021-02-11', '2021-02-03 16:07:19.126783', 0),
(19, 118, 'naolaghwan', 'Napala', 'Winslet', 'Q', '', 'Male', 1, '16b1807e9792eae2786687c88ca52d15', 2147483647, 2, '2020-05-07', '2021-03-24 16:24:15.416843', 1),
(20, 125, 'luffypist', 'Pist', 'Luffy', 'C', 'Sr.', 'Male', 1, '256384f6b309e501768bf7e04769a8fe', 2147483647, 1, '2017-06-28', '2021-03-23 23:14:24.139105', 1),
(21, 127, 'HenOlive', 'Guillimo', 'Henry Oliver', 'A', 'III', 'Male', 3, '57f2b58889831eaa3b506b6bfabd409e', 2147483647, 1, '2017-05-11', '2021-03-24 15:48:02.048442', 1),
(22, 128, 'Ypilrico', 'Ypil', 'Rico', 'A', 'Jr.', 'Male', 1, '18982f72ff35b9431651929148c76cdd', 2147483647, 1, '2018-10-09', '2021-03-23 23:17:00.714940', 1),
(23, 130, 'jilmicivc', 'Jilmico', 'Vincent', 'P', 'I', 'Male', 5, '3cc98d0d2d1cbd6bbb2f33fb15deb3b0', 2147483647, 4, '2017-02-09', '2021-03-23 19:48:12.516830', 3),
(25, 133, 'dortaman', 'Dorta', 'Norman', 'P', 'Jr.', 'Male', 6, '6f136730567879f1357b19b1a17f14b6', 2147483647, 3, '2015-06-02', '2021-03-23 19:48:18.569146', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_dispt`
--

CREATE TABLE `user_dispt` (
  `dispt_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `m_intl` varchar(250) NOT NULL,
  `sufx` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `ter_id` int(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `cont_no` int(50) NOT NULL,
  `stat_id` int(50) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_dispt`
--

INSERT INTO `user_dispt` (`dispt_id`, `user_id`, `u_name`, `l_name`, `f_name`, `m_intl`, `sufx`, `sex`, `ter_id`, `pass`, `cont_no`, `stat_id`, `time_stamp`) VALUES
(1, 80, 'zachary_tafoya', 'Tafoya', 'Zachary', 'B', '', 'Male', 2, '0905a74d4251fc1b2ec794738a81f324', 2147483647, 2, '2021-02-02 20:42:14'),
(2, 81, 'kenton_rush', 'Rush', 'Kenton', 'L', '', 'Male', 2, 'bd78dba91ed7dd3794d9ee702cafa8fb', 2147483647, 1, '2021-02-02 20:43:49'),
(3, 82, 'conrad123', 'Messersmith', 'Conrad', 'K', '', 'Male', 1, 'a66483fb374daaef2c09ca1d24ee152a', 2147483647, 2, '2021-02-03 01:34:12'),
(4, 83, 'darrel_ruocco', 'Ruocco', 'Darrel', 'G', '', 'Male', 2, 'e6562ade52585f20dd79ffbc1d59797b', 2147483647, 4, '2021-02-03 01:35:56'),
(5, 84, 'daniel_gravatt', 'Gravatt', 'Daniel', 'C', '', 'Male', 3, 'aa47f8215c6f30a0dcdb2a36a9f4168e', 2147483647, 1, '2021-02-03 01:37:08'),
(6, 85, 'wilson_macklin', 'Macklin', 'Wilson', 'G', '', 'Male', 3, 'abd7372bba55577590736ef6cb3533c6', 2147483647, 2, '2021-02-03 01:38:18'),
(7, 86, 'buster_ponds', 'Ponds', 'Buster', 'S', '', 'Male', 1, 'd9b23ebbf9b431d009a20df52e515db5', 2147483647, 2, '2021-02-03 01:39:10'),
(8, 87, 'marlon_westover22', 'Westover', 'Marlon', 'T', '', 'Male', 1, 'c8f759a539858b08e9e46251b1ae9f09', 2147483647, 2, '2021-02-03 01:40:09'),
(9, 88, 'mariano678', 'Mckenny', 'Mariano', 'L', 'Sr.', 'Male', 2, '0804048efcb1f0b3c2f18a4412b1016c', 2147483647, 2, '2021-02-03 01:41:10'),
(10, 89, 'everett_toomey', 'Toomey', 'Everett', 'M', '', 'Male', 3, 'd60bbb7684dffc8995dea0a56c8d0a37', 2147483647, 3, '2021-02-03 01:42:22'),
(11, 129, 'Davidsals', 'Salon', 'David', 'E', 'I', 'Male', 1, '1a49d1c78f3775a762779415b1be9514', 2147483647, 1, '2021-02-08 17:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_dri`
--

CREATE TABLE `user_dri` (
  `dri_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `m_intl` varchar(250) NOT NULL,
  `sufx` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `ter_id` int(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `cont_no` int(50) NOT NULL,
  `stat_id` int(50) NOT NULL,
  `emp_date` date NOT NULL,
  `licen_no` varchar(250) NOT NULL,
  `licen_exp` date NOT NULL,
  `time_stamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `trip_stat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_dri`
--

INSERT INTO `user_dri` (`dri_id`, `user_id`, `u_name`, `l_name`, `f_name`, `m_intl`, `sufx`, `sex`, `ter_id`, `pass`, `cont_no`, `stat_id`, `emp_date`, `licen_no`, `licen_exp`, `time_stamp`, `trip_stat_id`) VALUES
(5, 103, 'erqrqrqe', 'Vincent Dave', 'Vincent Dave', 'D', 'Jr.', 'Male', 2, 'c7ee9e57dfecf81cadb484abde705f48', 12413431, 2, '2021-01-31', 'c2x2zwE1X314', '2021-01-31', '2021-03-23 23:22:44.477253', 1),
(6, 109, 'marlan2021po', 'Belan', 'Margarito', 'C', '', 'Male', 5, 'b0b724fd55342b87c635a67bb8bb93f3', 2147483647, 2, '2021-02-14', 'D12-1234-325', '2023-02-03', '2021-03-21 11:58:38.476882', 2),
(9, 112, 'Dantov23o02', 'Tovar', 'Danielle ', 'Z', 'I', 'Male', 1, '345770c9dff54e94d3a92217a4762502', 2147483647, 1, '2021-01-18', 'DO2-2459-794', '2025-06-25', '2021-03-21 11:58:38.640491', 3),
(10, 113, 'dEMONdon231', 'Demonteverde', 'Donatello', 'K.', '', 'Male', 2, '4903e0be5f3a8e7246bd99480684d2f9', 2147483647, 1, '2019-10-28', 'D04-4532-568', '2024-02-28', '2021-03-23 23:14:23.973072', 1),
(11, 114, 'alexbantaw9009', 'Bantawil', 'Alexander', 'M.', '', 'Male', 4, 'dcc104e20978c4b2a361f0c88a8a9975', 2147483647, 3, '2019-05-06', 'D01-12-12357', '2023-04-03', '2021-03-23 19:34:53.251286', 3),
(13, 124, 'ddenit', 'Denit', 'Doneto', 'P', 'Jr.', 'Male', 1, 'ba542c5ebc9ed3060201181cb9e1dd6b', 936984621, 2, '2018-02-13', 'D01-12-123458', '2022-09-08', '2021-03-24 15:38:09.047464', 1),
(14, 126, 'Fdela', 'Dela Cerna', 'Francis', 'D', 'I', 'Male', 2, 'ed03ad98d56c9b291259c5e64a38651d', 2147483647, 1, '2017-09-05', 'D01-12-123459', '2022-01-04', '2021-03-24 16:24:15.239716', 1),
(15, 132, 'lovider', 'Devilla', 'Lovimer', 'P', 'Sr.', 'Male', 3, '2e9c985f4025a79e24a7bbdbb163e35e', 2147483647, 2, '2017-09-13', 'D01-12-123410', '2024-05-07', '2021-03-24 15:24:12.811141', 1),
(16, 134, 'marvye', 'Ye', 'Marven', 'A', 'I', 'Male', 2, '6f9acffab2d7c8ae2176c8509514954a', 926729532, 1, '2019-05-06', 'D01-12-123411', '2023-09-24', '2021-03-23 23:17:00.495487', 1),
(17, 135, 'Maxwealth', 'Moon', 'Maxwell', 'M', 'IV', 'Male', 2, 'eaef071efe2f6452d4ef1755add80dfb', 2147483647, 1, '2020-01-01', 'D01-12-123412', '2025-01-01', '2021-03-24 15:48:01.903285', 1),
(18, 138, 'new_driver', 'driver', 'new', 'D', 'III', 'Male', 1, '827ccb0eea8a706c4c34a16891f84e7b', 2147483647, 1, '2021-03-02', '12131-akjsakh-121', '2021-04-01', '2021-03-23 19:16:55.953064', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_opt`
--

CREATE TABLE `user_opt` (
  `opt_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `m_intl` varchar(250) NOT NULL,
  `sufx` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `ter_id` int(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `cont_no` int(50) NOT NULL,
  `stat_id` int(50) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_opt`
--

INSERT INTO `user_opt` (`opt_id`, `user_id`, `u_name`, `l_name`, `f_name`, `m_intl`, `sufx`, `sex`, `ter_id`, `pass`, `cont_no`, `stat_id`, `time_stamp`) VALUES
(1, 70, 'josh3456789', 'Grenz', 'Josh ', 'H', '', 'Male', 3, 'f94adcc3ddda04a8f34928d862f404b4', 2147483647, 1, '2021-02-02 20:18:13'),
(2, 71, 'ocatavio_23', 'Benbow', 'Octavio', 'A', '', 'Male', 1, '997100cd64f9032692288cc33e512c56', 2147483647, 1, '2021-02-02 20:19:46'),
(3, 72, 'duane_mcgiviney', 'Mcgivney', 'Duane', 'Z', '', 'Male', 3, '357ddb585594fe6400d3114fc94239c2', 948573596, 4, '2021-02-02 20:22:14'),
(4, 73, 'duane_mcgiviney', 'Mcgivney', 'Duane', 'Z', '', 'Male', 3, '357ddb585594fe6400d3114fc94239c2', 948573596, 4, '2021-02-02 20:22:14'),
(5, 74, 'james_figueras', 'Figueras', 'James', 'A', '', 'Male', 1, 'b4cc344d25a2efe540adbf2678e2304c', 2147483647, 1, '2021-02-02 20:27:36'),
(6, 75, 'santiago00891', 'Etienne', 'Santiago', 'K', '', 'Male', 2, 'a6f30815a43f38ec6de95b9a9d74da37', 2147483647, 4, '2021-02-02 20:29:09'),
(7, 76, 'garth_lorio', 'Lorio', 'Garth', 'C', 'III', 'Male', 3, '83a8282903ee8043fad50f2a070b4208', 2147483647, 2, '2021-02-02 20:30:22'),
(8, 77, 'cletus891', 'Okeefe', 'Cletus', 'W', '', 'Male', 1, '2c87a0128dc323bff723b1a5c86ac6c3', 2147483647, 3, '2021-02-02 20:31:48'),
(9, 78, 'darell_livermore', 'Livermore', 'Darell ', 'T', '', 'Male', 2, '4dbab62e6b46537ac937d5b5cc7433fe', 2147483647, 1, '2021-02-02 20:33:17'),
(10, 79, 'efrain', 'Zendejas', 'Efrain', 'R', '', 'Male', 1, '69423f0c254e5c1d2b0f5ee202459d2c', 2147483647, 2, '2021-02-02 20:36:55'),
(11, 121, 'op_dave', 'Vincent Dave', 'Vincent Dave', 'D', '', 'Male', 1, '827ccb0eea8a706c4c34a16891f84e7b', 131, 1, '2021-02-05 20:59:38'),
(12, 141, 'op_davao', 'soratoe', 'dave', 'D', 'Sr.', 'Male', 2, '827ccb0eea8a706c4c34a16891f84e7b', 31243, 1, '2021-03-24 07:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_stat`
--

CREATE TABLE `user_stat` (
  `stat_id` int(50) NOT NULL,
  `descrip` varchar(250) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_stat`
--

INSERT INTO `user_stat` (`stat_id`, `descrip`, `time_stamp`) VALUES
(1, 'Regular', '2021-01-31 15:50:15'),
(2, 'Casual', '2021-01-31 15:50:21'),
(3, 'Terminated', '2021-02-07 11:47:05'),
(4, 'Suspended', '2021-01-31 15:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `type_id` int(50) NOT NULL,
  `descrip` varchar(250) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`type_id`, `descrip`, `time_stamp`) VALUES
(1, 'Top Admin', '2021-01-31 15:44:19'),
(2, 'Admin', '2021-01-31 15:44:19'),
(5, 'Operator', '0000-00-00 00:00:00'),
(6, 'Dispatcher', '0000-00-00 00:00:00'),
(7, 'Driver', '0000-00-00 00:00:00'),
(8, 'Conductor', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_t_ad`
--

CREATE TABLE `user_t_ad` (
  `t_ad_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `m_intl` varchar(250) NOT NULL,
  `sufx` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `ter_id` int(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `cont_no` int(50) NOT NULL,
  `stat_id` int(50) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_t_ad`
--

INSERT INTO `user_t_ad` (`t_ad_id`, `user_id`, `u_name`, `l_name`, `f_name`, `m_intl`, `sufx`, `sex`, `ter_id`, `pass`, `cont_no`, `stat_id`, `time_stamp`) VALUES
(36, 36, 'Carry_Sackrider', 'Sackrider', 'Carry ', 'O', '', 'Male', 1, 'f9c05403344bba5b3993d54797b56820', 2147483647, 1, '2021-02-17 17:11:53'),
(37, 37, 'sal_trabue', 'Trabue', 'Sal', 'S', '', 'Female', 5, '7794fc517590053809f758b7e16d87ed', 978653452, 1, '2021-02-17 17:11:53'),
(38, 38, 'joseph007', 'Dufresne', 'Joseph', 'Z', 'Jr.', 'Male', 1, 'cb07901c53218323c4ceacdea4b23c98', 2147483647, 1, '2021-02-17 17:11:53'),
(40, 40, 'garth_shedd87', 'Shedd', 'Garth', 'Q', '', 'Male', 1, '83a8282903ee8043fad50f2a070b4208', 2147483647, 1, '2021-02-17 17:11:53'),
(41, 41, 'pat_massenburg', 'Massenburg', 'Pat', 'L', '', 'Male', 4, '7852341745c93238222a65a910d1dcc5', 2147483647, 1, '2021-02-17 17:14:17'),
(42, 137, 'topadmin', 'soratos', 'dave', 'c', 'III', 'Female', 5, '827ccb0eea8a706c4c34a16891f84e7b', 1313, 1, '2021-03-21 12:19:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_details`
--
ALTER TABLE `bus_details`
  ADD PRIMARY KEY (`bus_id`),
  ADD KEY `bus_type` (`bus_type_id`,`eng_id`,`route_id`,`bus_stat_id`),
  ADD KEY `bus_stat_id` (`bus_stat_id`);

--
-- Indexes for table `bus_eng_type`
--
ALTER TABLE `bus_eng_type`
  ADD PRIMARY KEY (`eng_id`);

--
-- Indexes for table `bus_stat`
--
ALTER TABLE `bus_stat`
  ADD PRIMARY KEY (`bus_stat_id`);

--
-- Indexes for table `bus_type`
--
ALTER TABLE `bus_type`
  ADD PRIMARY KEY (`bus_type_id`);

--
-- Indexes for table `que_details`
--
ALTER TABLE `que_details`
  ADD PRIMARY KEY (`que_id`),
  ADD KEY `bus_type_id` (`bus_type_id`,`que_stat_id`);

--
-- Indexes for table `que_stat`
--
ALTER TABLE `que_stat`
  ADD PRIMARY KEY (`que_stat_id`);

--
-- Indexes for table `que_stat_arr`
--
ALTER TABLE `que_stat_arr`
  ADD PRIMARY KEY (`que_stat_arr_id`);

--
-- Indexes for table `route_details`
--
ALTER TABLE `route_details`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `ter_details`
--
ALTER TABLE `ter_details`
  ADD PRIMARY KEY (`ter_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `stat_id` (`stat_id`),
  ADD KEY `ter_id` (`ter_id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`ad_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `stat_id` (`stat_id`),
  ADD KEY `ter_id` (`ter_id`);

--
-- Indexes for table `user_con`
--
ALTER TABLE `user_con`
  ADD PRIMARY KEY (`con_id`),
  ADD KEY `user_id` (`user_id`,`stat_id`,`ter_id`);

--
-- Indexes for table `user_dispt`
--
ALTER TABLE `user_dispt`
  ADD PRIMARY KEY (`dispt_id`),
  ADD KEY `user_id` (`user_id`,`ter_id`,`stat_id`);

--
-- Indexes for table `user_dri`
--
ALTER TABLE `user_dri`
  ADD PRIMARY KEY (`dri_id`),
  ADD KEY `user_id` (`user_id`,`stat_id`,`ter_id`);

--
-- Indexes for table `user_opt`
--
ALTER TABLE `user_opt`
  ADD PRIMARY KEY (`opt_id`),
  ADD KEY `user_id` (`user_id`,`ter_id`,`stat_id`);

--
-- Indexes for table `user_stat`
--
ALTER TABLE `user_stat`
  ADD PRIMARY KEY (`stat_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user_t_ad`
--
ALTER TABLE `user_t_ad`
  ADD PRIMARY KEY (`t_ad_id`) USING BTREE,
  ADD KEY `ter_id` (`ter_id`),
  ADD KEY `stat_id` (`stat_id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_details`
--
ALTER TABLE `bus_details`
  MODIFY `bus_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `bus_eng_type`
--
ALTER TABLE `bus_eng_type`
  MODIFY `eng_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bus_stat`
--
ALTER TABLE `bus_stat`
  MODIFY `bus_stat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bus_type`
--
ALTER TABLE `bus_type`
  MODIFY `bus_type_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `que_details`
--
ALTER TABLE `que_details`
  MODIFY `que_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `que_stat`
--
ALTER TABLE `que_stat`
  MODIFY `que_stat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `que_stat_arr`
--
ALTER TABLE `que_stat_arr`
  MODIFY `que_stat_arr_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `route_details`
--
ALTER TABLE `route_details`
  MODIFY `route_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ter_details`
--
ALTER TABLE `ter_details`
  MODIFY `ter_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `ad_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_con`
--
ALTER TABLE `user_con`
  MODIFY `con_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_dispt`
--
ALTER TABLE `user_dispt`
  MODIFY `dispt_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_dri`
--
ALTER TABLE `user_dri`
  MODIFY `dri_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_opt`
--
ALTER TABLE `user_opt`
  MODIFY `opt_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_stat`
--
ALTER TABLE `user_stat`
  MODIFY `stat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `type_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_t_ad`
--
ALTER TABLE `user_t_ad`
  MODIFY `t_ad_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
