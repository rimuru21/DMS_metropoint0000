-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 10:35 AM
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
  `bus_no` int(50) NOT NULL,
  `bus_type_id` varchar(250) NOT NULL,
  `ass_dri` varchar(250) NOT NULL,
  `ass_con` varchar(250) NOT NULL,
  `eng_id` int(50) NOT NULL,
  `plate_no` varchar(250) NOT NULL,
  `sap_code` int(50) NOT NULL,
  `route_id` int(50) NOT NULL,
  `seat_cap` int(50) NOT NULL,
  `bus_stat_id` int(50) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `ip_add1` int(50) NOT NULL,
  `ip_add2` int(50) NOT NULL,
  `ip_add3` int(50) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_details`
--

INSERT INTO `bus_details` (`bus_id`, `bus_no`, `bus_type_id`, `ass_dri`, `ass_con`, `eng_id`, `plate_no`, `sap_code`, `route_id`, `seat_cap`, `bus_stat_id`, `ip_add`, `ip_add1`, `ip_add2`, `ip_add3`, `time_stamp`) VALUES
(14, 4234, '4', 'Tovar Danielle ', 'Froville Sander', 2, ' UJWE612B2', 131231, 2, 50, 3, '123', 12, 12, 45, '2021-02-07 08:00:27'),
(15, 123123313, '8', 'Demonteverde Donatello', 'Froville Sander', 2, ' sdf24eqweq', 2147483647, 2, 502, 1, '452', 452, 452, 452, '2021-02-07 10:55:24'),
(18, 6363, '13', 'Belan Margarito', 'Crawford Mathew', 2, ' SFSD24324', 1434, 1, 34, 1, '42', 24, 23, 23, '2021-02-07 21:44:33'),
(19, 7867, '2', 'Belan Margarito', 'Napala Winslet', 1, ' QE343', 143434, 3, 14, 2, '123', 12, 12, 12, '2021-02-07 21:54:30'),
(20, 14134, '9', 'Demonteverde Donatello', 'Crawford Mathew', 2, ' DFG434', 234234, 1, 43, 2, '45', 45, 45, 34, '2021-02-07 21:54:45'),
(21, 685, '5', 'Tovar Danielle ', 'Crawford Mathew', 2, ' ada112', 14134, 2, 143, 1, '131', 23, 23, 123, '2021-02-07 21:52:32'),
(22, 234234, '6', 'Belan Margarito', 'Napala Winslet', 2, ' SGE234', 2342, 2, 34, 3, '34', 54, 45, 23, '2021-02-07 21:54:08'),
(23, 1312, '5', 'Belan Margarito', 'Jay Jay', 2, ' DSD213', 1231, 3, 50, 2, '1', 1, 1, 1, '2021-02-07 21:55:34'),
(24, 10001, '2', 'Vincent Dave Vincent Dave', 'Jay Jay', 1, ' DD1-123-00001', 1, 1, 13, 1, '123', 12, 145, 1, '2021-02-08 08:15:19'),
(25, 10002, '2', 'none', 'Crawford Mathew', 2, ' DD1-123-00002', -2, 2, 15, 1, '123', 12, 145, 2, '2021-02-08 08:15:00'),
(26, 10003, '3', 'Belan Margarito', 'Crawford Mathew', 1, ' DD1-123-00003', -6, 3, 12, 1, '123', 12, 145, 3, '2021-02-08 08:15:31'),
(27, 10004, '3', 'Belan Margarito', 'Froville Sander', 2, ' DD1-123-00004', 3, 4, 13, 2, '123', 12, 145, 4, '2021-02-08 08:15:42'),
(28, 10005, '4', 'Tovar Danielle ', 'Rolous Raven', 1, ' DD1-123-00005', -6, 3, 14, 2, '123', 12, 145, 5, '2021-02-08 08:16:35'),
(29, 10006, '4', 'Demonteverde Donatello', 'Napala Winslet', 2, ' DD1-123-00006', 9, 3, 17, 3, '123', 12, 145, 6, '2021-02-08 08:17:41'),
(30, 10007, '5', 'Bantawil Alexander', 'none', 1, ' DD1-123-00007', 5, 1, 10, 4, '123', 12, 145, 7, '2021-02-08 08:18:35'),
(31, 10008, '6', 'Vincent Dave Vincent Dave', 'Rolous Raven', 1, ' DD1-123-00008', 12, 4, 13, 1, '123', 12, 145, 7, '2021-02-08 08:19:24'),
(32, 10009, '6', 'none', 'none', 1, ' DD1-123-00009', 6, 3, 14, 1, '123', 12, 145, 9, '2021-02-08 08:20:28'),
(33, 10010, '6', 'Tovar Danielle ', 'Crawford Mathew', 2, ' DD1-123-00010', 8, 3, 10, 3, '123', 12, 145, 10, '2021-02-08 08:21:15'),
(34, 10011, '8', 'Belan Margarito', 'Jay Jay', 1, ' DD1-123-00011', 8, 3, 9, 3, '123', 12, 134, 11, '2021-02-08 08:23:20'),
(35, 10012, '8', 'none', 'Crawford Mathew', 2, ' DD1-123-00012', 2, 2, 12, 4, '12', 131, 123, 12, '2021-02-08 08:29:47'),
(36, 10013, '10', 'Bantawil Alexander', 'Napala Winslet', 2, ' DD1-123-00013', 5, 2, 12, 3, '123', 12, 145, 13, '2021-02-08 08:31:01'),
(37, 10014, '10', 'Belan Margarito', 'Crawford Mathew', 2, ' DD1-123-00014', 11, 2, 13, 3, '123', 13, 145, 14, '2021-02-08 08:35:46'),
(38, 10015, '9', 'Tovar Danielle ', 'Crawford Mathew', 1, ' DD1-123-00015', 5, 1, 14, 4, '21', 311, 13, 15, '2021-02-08 08:42:10'),
(39, 10016, '11', 'Demonteverde Donatello', 'Froville Sander', 1, ' DD1-123-00016', 8, 4, 14, 2, '12', 145, 12, 16, '2021-02-08 08:43:19'),
(40, 10017, '12', 'Demonteverde Donatello', 'Rolous Raven', 1, ' DD1-123-00017', 5, 2, 13, 3, '12', 123, 145, 17, '2021-02-08 08:44:45'),
(41, 10018, '13', 'Vincent Dave Vincent Dave', 'Crawford Mathew', 1, ' DD1-123-00018', 9, 2, 12, 1, '12', 123, 145, 18, '2021-02-08 08:46:50'),
(42, 10019, '13', 'Vincent Dave Vincent Dave', 'Jay Jay', 2, ' DD1-123-00019', 5, 3, 10, 2, '12', 123, 145, 19, '2021-02-08 08:48:05'),
(43, 10020, '12', 'none', 'Crawford Mathew', 2, ' DD1-123-00020', 7, 2, 14, 2, '12', 123, 145, 20, '2021-02-08 08:49:23'),
(44, 10021, '10', 'Belan Margarito', 'none', 1, ' DD1-123-00021', 5, 4, 11, 1, '12', 123, 145, 21, '2021-02-08 08:50:06'),
(45, 10022, '2', 'Demonteverde Donatello', 'Crawford Mathew', 1, ' DD1-123-00022', 6, 2, 12, 3, '12', 123, 145, 22, '2021-02-08 08:53:48'),
(46, 10023, '11', 'Demonteverde Donatello', 'Crawford Mathew', 1, ' DD1-123-00023', 5, 2, 11, 2, '123', 12, 145, 30, '2021-02-08 09:13:12');

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
(13, 'YD', 'YUTONG DELUXE');

-- --------------------------------------------------------

--
-- Table structure for table `que_details`
--

CREATE TABLE `que_details` (
  `que_id` int(50) NOT NULL,
  `trip_no` int(50) NOT NULL,
  `bus_no` int(50) NOT NULL,
  `ass_dri` varchar(250) NOT NULL,
  `ass_con` varchar(250) NOT NULL,
  `bus_type_id` int(50) NOT NULL,
  `seat_cap` int(50) NOT NULL,
  `from_ter` varchar(250) NOT NULL,
  `to_ter` varchar(250) NOT NULL,
  `ip_add` int(50) NOT NULL,
  `ip_add1` int(50) NOT NULL,
  `ip_add2` int(50) NOT NULL,
  `ip_add3` int(50) NOT NULL,
  `que_time` time NOT NULL,
  `que_date` date NOT NULL,
  `dep_time` time NOT NULL,
  `dep_date` date NOT NULL,
  `arr_time` time NOT NULL,
  `arr_date` date NOT NULL,
  `que_stat_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `que_details`
--

INSERT INTO `que_details` (`que_id`, `trip_no`, `bus_no`, `ass_dri`, `ass_con`, `bus_type_id`, `seat_cap`, `from_ter`, `to_ter`, `ip_add`, `ip_add1`, `ip_add2`, `ip_add3`, `que_time`, `que_date`, `dep_time`, `dep_date`, `arr_time`, `arr_date`, `que_stat_id`) VALUES
(2, 1212, 123123313, 'Tovar Danielle ', 'Crawford Mathew', 5, 21, 'Tagum', 'Davao', 12, 12, 12, 12, '18:16:00', '2021-02-07', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(3, 13123, 123123313, 'Demonteverde Donatello', 'Froville Sander', 9, 43, 'New Bataan', 'Maragusan', 12, 12, 434, 43, '18:43:00', '2021-02-07', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(4, 1313, 123123313, 'Demonteverde Donatello', 'Froville Sander', 8, 123, 'Tagum', 'New Bataan', 0, 0, 0, 0, '05:30:00', '2021-02-08', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(5, 14314, 123123313, 'Belan Margarito', 'Jay Jay', 8, 12, 'Tagum', 'Davao', 1, 1, 1, 1, '05:57:00', '2021-02-08', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(7, 123, 234234, 'Vincent Dave Vincent Dave', 'Jay Jay', 4, 32, 'New Bataan', 'Tagum', 2, 2, 2, 2, '05:58:00', '2021-02-08', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 3),
(8, 76474, 14134, 'Belan Margarito', 'Froville Sander', 3, 80, 'Nabunturan', 'Tagum', 112, 123, 123, 13, '05:58:00', '2021-02-08', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 3),
(9, 3636, 6363, 'Belan Margarito', 'Rolous Raven', 9, 234, 'Maragusan', 'Tagum', 32, 23, 23, 2, '05:59:00', '2021-02-08', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 3),
(10, 1, 10012, 'Tovar Danielle ', 'Jay Jay', 3, 11, 'New Bataan', 'Laak', 123, 145, 12, 13, '19:33:00', '2021-02-01', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(11, 2, 10020, 'Belan Margarito', 'Crawford Mathew', 4, 12, 'Maragusan', 'New Bataan', 0, 0, 0, 0, '05:04:00', '2020-08-04', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(12, 1004, 10004, 'Tovar Danielle ', 'Rolous Raven', 6, 13, 'Monkayo', 'Davao', 12, 123, 145, 22, '06:00:00', '2020-06-10', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(13, 1005, 10001, 'Bantawil Alexander', 'Jay Jay', 6, 15, 'Davao', 'Nabunturan', 123, 12, 145, 22, '08:11:00', '2019-11-12', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(15, 1006, 234234, 'Demonteverde Donatello', 'Crawford Mathew', 3, 9, 'Maragusan', 'Nabunturan', 12, 145, 12, 26, '09:08:00', '2020-04-16', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(16, 1007, 10017, 'Demonteverde Donatello', 'Froville Sander', 10, 13, 'Monkayo', 'Davao', 123, 12, 145, 27, '10:07:00', '2019-03-05', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(17, 1008, 10007, 'Bantawil Alexander', 'Jay Jay', 9, 12, 'Davao', 'Maragusan', 123, 12, 145, 28, '10:09:00', '2020-05-06', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(18, 1009, 10008, 'Belan Margarito', 'Froville Sander', 12, 12, 'Monkayo', 'Nabunturan', 123, 12, 145, 29, '20:11:00', '2019-08-13', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(19, 123123, 123123313, 'Tovar Danielle ', 'Froville Sander', 1, 32, 'Davao', 'Davao', 232, 232, 23, 23, '20:50:00', '2021-02-08', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 2),
(20, 9678567, 4234, 'Tovar Danielle ', 'Napala Winslet', 8, 34, '', 'Davao', 23, 23, 23, 23, '01:24:00', '2021-02-09', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(21, 15452, 234234, 'Tovar Danielle ', 'Froville Sander', 8, 21, 'Tagum', 'New Bataan', 12, 323, 43, 12, '05:33:00', '2021-02-09', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(22, 39838, 123123313, 'Belan Margarito', 'Rolous Raven', 8, 50, 'Tagum', 'Maragusan', 34, 43, 34, 65, '08:42:00', '2021-02-09', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4),
(23, 76455, 4234, 'Tovar Danielle ', 'Crawford Mathew', 2, 50, 'Tagum', 'Davao', 12, 33, 23, 23, '08:49:00', '2021-02-09', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', 4);

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
(1, 'Arrived'),
(2, 'Departed'),
(3, 'OnRoad'),
(4, 'Waiting');

-- --------------------------------------------------------

--
-- Table structure for table `route_details`
--

CREATE TABLE `route_details` (
  `route_id` int(50) NOT NULL,
  `f_descrip` varchar(250) NOT NULL,
  `l_descrip` varchar(250) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route_details`
--

INSERT INTO `route_details` (`route_id`, `f_descrip`, `l_descrip`, `time_stamp`) VALUES
(1, 'Tagum', 'Davao', '2021-02-07 11:01:44'),
(2, 'Tagum ', 'New Bataan', '2021-02-07 11:01:44'),
(3, 'Tagum', 'Laak', '2021-02-07 11:31:28'),
(4, 'Tagum', 'Maragusan', '2021-02-07 11:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `ter_details`
--

CREATE TABLE `ter_details` (
  `ter_id` int(50) NOT NULL,
  `descrip` varchar(250) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ter_details`
--

INSERT INTO `ter_details` (`ter_id`, `descrip`, `time_stamp`) VALUES
(1, 'Tagum', '2021-02-07 11:33:49'),
(2, 'Davao', '2021-01-31 15:52:55'),
(3, 'New Bataan', '2021-01-31 15:53:02'),
(4, 'Maragusan', '2021-02-03 02:28:57'),
(5, 'Nabunturan', '2021-02-03 02:29:28'),
(6, 'Laak', '2021-02-03 02:29:41'),
(8, 'Monkayo', '2021-02-17 10:32:07'),
(9, 'Monkayo', '2021-02-17 10:32:09');

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
(50, 3, 'logan5609', 'Goldsby', 'Logan', 'O', '', 'Male', 3, '3447adfd742cdfb9048a3b29baf1ae7d', 2147483647, 2, '2021-02-02 19:27:08'),
(52, 3, 'tory232', 'Killion', 'Tory', 'F', '', 'Male', 3, 'cbb992661c4430d1f3419aff73326f17', 2147483647, 3, '2021-02-02 19:29:50'),
(53, 3, 'jean39939', 'Antone', 'jean', 'H', '', 'Male', 1, '229e8192a023bd6da58603b49f313594', 2147483647, 1, '2021-02-02 19:31:15'),
(56, 3, 'jacob_davids', 'Davids', 'Jacob', 'G', '', 'Male', 3, '736b19f69aaca691fecd8400294cc383', 2147483647, 4, '2021-02-02 19:37:55'),
(57, 3, 'kraig232', 'Mabe', 'Kraig', 'I', '', 'Male', 2, '81dc9bdb52d04dc20036dbd8313ed055', 2147483647, 3, '2021-02-02 19:38:45'),
(58, 3, 'benny_bertsch', 'Bertsch', 'Benny', 'P', '', 'Male', 1, '42f4b247702c99bda0fc7bcc41c70d19', 2147483647, 2, '2021-02-17 18:56:18'),
(59, 3, 'donny_winzer', 'Winzer', 'Donny ', 'D', '', 'Male', 2, 'befcc07a5d7b46c63c6087f08bc601d4', 2147483647, 1, '2021-02-02 19:51:23'),
(60, 4, 'armando239', 'Fairbank', 'Armando ', 'N', 'Jr.', 'Male', 1, '7b64d09060db17ca6b96c0af99575903', 2147483647, 1, '2021-02-17 19:03:44'),
(61, 4, 'rufus_mahi23', 'Mahi', 'Rufus', 'S', '', 'Male', 1, '3a2967f3d7e135a55d8bb158e61d95d4', 2147483647, 1, '2021-02-02 19:58:24'),
(62, 4, 'keven_peper', 'Pepper', 'Keven', 'P', '', 'Male', 2, '34d206d21923a92cdc92758a8b9c9905', 2147483647, 2, '2021-02-02 20:00:59'),
(63, 4, 'louis1432', 'Hodapp', 'Loius', 'G', '', 'Male', 3, '21232f297a57a5a743894a0e4a801fc3', 2147483647, 1, '2021-02-02 20:02:07'),
(65, 4, 'jordan_ollison', 'Ollison', 'Jordan', 'V', '', 'Male', 2, 'd16d377af76c99d27093abc22244b342', 2147483647, 3, '2021-02-02 20:04:18'),
(66, 4, 'nathanael_berthold12', 'Berthold', 'Nathanael', 'A', 'Sr.', 'Male', 1, 'd27ba11620b07630f8d301a2af03d956', 2147483647, 2, '2021-02-02 20:11:57'),
(67, 4, 'vaughn_charleston', 'Charleston', 'Vaughn', 'Y', '', 'Male', 3, '57d413bca681029a844e59a46adcbd5d', 2147483647, 2, '2021-02-02 20:13:47'),
(68, 4, 'nathaniel_michalik', 'Michalik', 'Nathaniel', 'O', '', 'Male', 2, '525ef3e7827f41beb11e2e1ac84e0269', 2147483647, 3, '2021-02-02 20:15:24'),
(69, 4, 'dennis_soper', 'Soper', 'Dennis ', 'B', '', 'Male', 1, '7daacea5f373b4c1c054158b126d317f', 2147483647, 4, '2021-02-02 20:16:09'),
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
(135, 7, 'Maxwealth', 'Moon', 'Maxwell', 'M', 'IV', 'Male', 2, 'eaef071efe2f6452d4ef1755add80dfb', 2147483647, 1, '2021-02-08 17:57:44');

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
(10, 49, 'ommar_shannon123', 'Shannon', 'Omar', 'C', '', 'Male', 3, '92453097b261f830da92dd403a75eb9d', 2147483647, 2, '2021-02-17 18:44:32');

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
  `time_stamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_con`
--

INSERT INTO `user_con` (`con_id`, `user_id`, `u_name`, `l_name`, `f_name`, `m_intl`, `sufx`, `sex`, `ter_id`, `pass`, `cont_no`, `stat_id`, `emp_date`, `time_stamp`) VALUES
(11, 104, 'admin_dave', 'Jay', 'Jay', 'A', 'Jr.', 'Male', 2, '3c5bb4887627a4ec06c9a7cc483dd10c', 414134, 2, '2021-01-31', '2021-02-03 05:03:46.270368'),
(16, 115, 'marlan2021po', 'Crawford', 'Mathew', 'R', '', 'Male', 5, 'cdf31ac7f55c5fc887e06dc82c34efae', 926737342, 1, '2021-03-05', '2021-02-03 16:03:16.397964'),
(17, 116, 'mao nani', 'Froville', 'Sander', 'T', '', 'Male', 6, 'c4db835db844412ea9633db357d0cee0', 2147483647, 2, '2020-12-14', '2021-02-03 16:05:19.816084'),
(18, 117, 'POttehhh', 'Rolous', 'Raven', 'W', '', 'Male', 7, 'e8e7819db2bcdba5de39af4ba9d5e847', 935763678, 1, '2021-02-11', '2021-02-03 16:07:19.126783'),
(19, 118, 'naolaghwan', 'Napala', 'Winslet', 'Q', '', 'Male', 1, '16b1807e9792eae2786687c88ca52d15', 2147483647, 2, '2020-05-07', '2021-02-03 16:09:14.506201'),
(20, 125, 'luffypist', 'Pist', 'Luffy', 'C', 'Sr.', 'Male', 1, '256384f6b309e501768bf7e04769a8fe', 2147483647, 1, '2017-06-28', '2021-02-08 17:34:52.601559'),
(21, 127, 'HenOlive', 'Guillimo', 'Henry Oliver', 'A', 'III', 'Male', 3, '57f2b58889831eaa3b506b6bfabd409e', 2147483647, 1, '2017-05-11', '2021-02-08 17:40:49.432340'),
(22, 128, 'Ypilrico', 'Ypil', 'Rico', 'A', 'Jr.', 'Male', 1, '18982f72ff35b9431651929148c76cdd', 2147483647, 1, '2018-10-09', '2021-02-08 17:43:35.756624'),
(23, 130, 'jilmicivc', 'Jilmico', 'Vincent', 'P', 'I', 'Male', 5, '3cc98d0d2d1cbd6bbb2f33fb15deb3b0', 2147483647, 4, '2017-02-09', '2021-02-08 17:47:31.821992'),
(25, 133, 'dortaman', 'Dorta', 'Norman', 'P', 'Jr.', 'Male', 6, '6f136730567879f1357b19b1a17f14b6', 2147483647, 3, '2015-06-02', '2021-02-17 19:50:26.235371');

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
  `time_stamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_dri`
--

INSERT INTO `user_dri` (`dri_id`, `user_id`, `u_name`, `l_name`, `f_name`, `m_intl`, `sufx`, `sex`, `ter_id`, `pass`, `cont_no`, `stat_id`, `emp_date`, `licen_no`, `licen_exp`, `time_stamp`) VALUES
(5, 103, 'erqrqrqe', 'Vincent Dave', 'Vincent Dave', 'D', 'Jr.', 'Male', 2, 'c7ee9e57dfecf81cadb484abde705f48', 12413431, 2, '2021-01-31', 'c2x2zwE1X314', '2021-01-31', '2021-02-03 05:03:11.240390'),
(6, 109, 'marlan2021po', 'Belan', 'Margarito', 'C', '', 'Male', 5, 'b0b724fd55342b87c635a67bb8bb93f3', 2147483647, 2, '2021-02-14', 'D12-1234-325', '2023-02-03', '2021-02-03 15:50:04.429290'),
(9, 112, 'Dantov23o02', 'Tovar', 'Danielle ', 'Z', 'I', 'Male', 1, '345770c9dff54e94d3a92217a4762502', 2147483647, 1, '2021-01-18', 'DO2-2459-794', '2025-06-25', '2021-02-03 15:53:36.394332'),
(10, 113, 'dEMONdon231', 'Demonteverde', 'Donatello', 'K.', '', 'Male', 2, '4903e0be5f3a8e7246bd99480684d2f9', 2147483647, 1, '2019-10-28', 'D04-4532-568', '2024-02-28', '2021-02-03 15:56:43.364538'),
(11, 114, 'alexbantaw9009', 'Bantawil', 'Alexander', 'M.', '', 'Male', 4, 'dcc104e20978c4b2a361f0c88a8a9975', 2147483647, 3, '2019-05-06', 'D01-12-12357', '2023-04-03', '2021-02-03 16:00:32.584525'),
(13, 124, 'ddenit', 'Denit', 'Doneto', 'P', 'Jr.', 'Male', 1, 'ba542c5ebc9ed3060201181cb9e1dd6b', 936984621, 2, '2018-02-13', 'D01-12-123458', '2022-09-08', '2021-02-08 17:33:13.275969'),
(14, 126, 'Fdela', 'Dela Cerna', 'Francis', 'D', 'I', 'Male', 2, 'ed03ad98d56c9b291259c5e64a38651d', 2147483647, 4, '2017-09-05', 'D01-12-123459', '2022-01-04', '2021-02-17 19:50:46.444521'),
(15, 132, 'lovider', 'Devilla', 'Lovimer', 'P', 'Sr.', 'Male', 3, '2e9c985f4025a79e24a7bbdbb163e35e', 2147483647, 2, '2017-09-13', 'D01-12-123410', '2024-05-07', '2021-02-08 17:52:29.388417'),
(16, 134, 'marvye', 'Ye', 'Marven', 'A', 'I', 'Male', 2, '6f9acffab2d7c8ae2176c8509514954a', 926729532, 1, '2019-05-06', 'D01-12-123411', '2023-09-24', '2021-02-08 17:55:21.554397'),
(17, 135, 'Maxwealth', 'Moon', 'Maxwell', 'M', 'IV', 'Male', 2, 'eaef071efe2f6452d4ef1755add80dfb', 2147483647, 1, '2020-01-01', 'D01-12-123412', '2025-01-01', '2021-02-08 17:57:44.567392');

-- --------------------------------------------------------

--
-- Table structure for table `user_man`
--

CREATE TABLE `user_man` (
  `man_id` int(50) NOT NULL,
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
-- Dumping data for table `user_man`
--

INSERT INTO `user_man` (`man_id`, `user_id`, `u_name`, `l_name`, `f_name`, `m_intl`, `sufx`, `sex`, `ter_id`, `pass`, `cont_no`, `stat_id`, `time_stamp`) VALUES
(1, 60, 'armando239', 'Fairbank', 'Armando ', 'N', 'Jr.', 'Male', 1, '7b64d09060db17ca6b96c0af99575903', 2147483647, 1, '2021-02-17 19:05:00'),
(2, 61, 'rufus_mahi23', 'Mahi', 'Rufus', 'S', '', 'Male', 1, '3a2967f3d7e135a55d8bb158e61d95d4', 2147483647, 1, '2021-02-02 19:58:25'),
(3, 62, 'keven_peper', 'Pepper', 'Keven', 'P', '', 'Male', 2, '34d206d21923a92cdc92758a8b9c9905', 2147483647, 2, '2021-02-02 20:01:00'),
(4, 63, 'louis1432', 'Hodapp', 'Loius', 'G', '', 'Male', 3, '21232f297a57a5a743894a0e4a801fc3', 2147483647, 1, '2021-02-02 20:02:08'),
(6, 65, 'jordan_ollison', 'Ollison', 'Jordan', 'V', '', 'Male', 2, 'd16d377af76c99d27093abc22244b342', 2147483647, 3, '2021-02-02 20:04:18'),
(7, 66, 'nathanael_berthold12', 'Berthold', 'Nathanael', 'A', 'Sr.', 'Male', 1, 'd27ba11620b07630f8d301a2af03d956', 2147483647, 2, '2021-02-02 20:11:57'),
(8, 67, 'vaughn_charleston', 'Charleston', 'Vaughn', 'Y', '', 'Male', 3, '57d413bca681029a844e59a46adcbd5d', 2147483647, 2, '2021-02-02 20:13:47'),
(9, 68, 'nathaniel_michalik', 'Michalik', 'Nathaniel', 'O', '', 'Male', 2, '525ef3e7827f41beb11e2e1ac84e0269', 2147483647, 3, '2021-02-02 20:15:25'),
(10, 69, 'dennis_soper', 'Soper', 'Dennis ', 'B', '', 'Male', 1, '7daacea5f373b4c1c054158b126d317f', 2147483647, 4, '2021-02-02 20:16:09');

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
(11, 121, 'op_dave', 'Vincent Dave', 'Vincent Dave', 'D', '', 'Male', 1, '827ccb0eea8a706c4c34a16891f84e7b', 131, 1, '2021-02-05 20:59:38');

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
-- Table structure for table `user_sup`
--

CREATE TABLE `user_sup` (
  `sup_id` int(50) NOT NULL,
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
-- Dumping data for table `user_sup`
--

INSERT INTO `user_sup` (`sup_id`, `user_id`, `u_name`, `l_name`, `f_name`, `m_intl`, `sufx`, `sex`, `ter_id`, `pass`, `cont_no`, `stat_id`, `time_stamp`) VALUES
(1, 50, 'logan5609', 'Goldsby', 'Logan', 'O', '', 'Male', 3, '3447adfd742cdfb9048a3b29baf1ae7d', 2147483647, 2, '2021-02-02 19:27:08'),
(3, 52, 'tory232', 'Killion', 'Tory', 'F', '', 'Male', 3, 'cbb992661c4430d1f3419aff73326f17', 2147483647, 3, '2021-02-02 19:29:51'),
(4, 53, 'jean39939', 'Antone', 'jean', 'H', '', 'Male', 1, '229e8192a023bd6da58603b49f313594', 2147483647, 1, '2021-02-02 19:31:17'),
(7, 56, 'jacob_davids', 'Davids', 'Jacob', 'G', '', 'Male', 3, '736b19f69aaca691fecd8400294cc383', 2147483647, 4, '2021-02-02 19:37:57'),
(8, 57, 'kraig232', 'Mabe', 'Kraig', 'I', '', 'Male', 2, '81dc9bdb52d04dc20036dbd8313ed055', 2147483647, 3, '2021-02-02 19:38:48'),
(9, 58, 'benny_bertsch', 'Bertsch', 'Benny', 'P', '', 'Male', 1, '42f4b247702c99bda0fc7bcc41c70d19', 2147483647, 2, '2021-02-17 18:56:18'),
(10, 59, 'donny_winzer', 'Winzer', 'Donny ', 'D', '', 'Male', 2, 'befcc07a5d7b46c63c6087f08bc601d4', 2147483647, 1, '2021-02-02 19:51:24');

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
(3, 'Supervisor', '0000-00-00 00:00:00'),
(4, 'Manager', '0000-00-00 00:00:00'),
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
(41, 41, 'pat_massenburg', 'Massenburg', 'Pat', 'L', '', 'Male', 4, '7852341745c93238222a65a910d1dcc5', 2147483647, 1, '2021-02-17 17:14:17');

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
-- Indexes for table `user_man`
--
ALTER TABLE `user_man`
  ADD PRIMARY KEY (`man_id`),
  ADD KEY `user_id` (`user_id`,`ter_id`,`stat_id`);

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
-- Indexes for table `user_sup`
--
ALTER TABLE `user_sup`
  ADD PRIMARY KEY (`sup_id`),
  ADD KEY `user_id` (`user_id`,`ter_id`,`stat_id`);

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
  MODIFY `bus_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
  MODIFY `bus_type_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `que_details`
--
ALTER TABLE `que_details`
  MODIFY `que_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `que_stat`
--
ALTER TABLE `que_stat`
  MODIFY `que_stat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `ad_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `dri_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_man`
--
ALTER TABLE `user_man`
  MODIFY `man_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_opt`
--
ALTER TABLE `user_opt`
  MODIFY `opt_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_stat`
--
ALTER TABLE `user_stat`
  MODIFY `stat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sup`
--
ALTER TABLE `user_sup`
  MODIFY `sup_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `type_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_t_ad`
--
ALTER TABLE `user_t_ad`
  MODIFY `t_ad_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
