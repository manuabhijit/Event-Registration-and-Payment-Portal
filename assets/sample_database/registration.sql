-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 06:04 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` varchar(10) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_cost` int(11) NOT NULL,
  `event_players` int(11) NOT NULL,
  `event_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_cost`, `event_players`, `event_details`) VALUES
('e_001', 'eventname1', 200, 1, 'details1'),
('e_002', 'eventname2', 100, 5, 'details2'),
('e_003', 'eventname3', 400, 2, 'details3'),
('e_004', 'eventname3', 150, 3, 'details4'),
('e_005', 'eventname4', 450, 1, 'details5');

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `r_id` varchar(10) NOT NULL,
  `r_name` varchar(100) DEFAULT NULL,
  `r_password` varchar(100) DEFAULT NULL,
  `r_access` varchar(10) NOT NULL DEFAULT 'offline'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrar`
--

INSERT INTO `registrar` (`r_id`, `r_name`, `r_password`, `r_access`) VALUES
('reg_001', 'registrar_p1', '$2y$09$bXlfc2FsdF8xMjM0NTY3O.ua8qaRPCXXdpHVVva73iLK2WTB.4FVu', 'offline'),
('reg_002', 'registrar_p2', '$2y$09$bXlfc2FsdF8xMjM0NTY3O.sXpJPts31ofS0kNBPf20SFfH2tXQj46', 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `s_name` varchar(100) DEFAULT NULL,
  `s_id` varchar(50) DEFAULT NULL,
  `s_email` varchar(100) DEFAULT NULL,
  `s_gender` varchar(8) NOT NULL DEFAULT 'male',
  `s_college` varchar(200) DEFAULT NULL,
  `s_event_id` varchar(100) DEFAULT NULL,
  `s_player_1` varchar(100) DEFAULT NULL,
  `s_player_2` varchar(100) DEFAULT NULL,
  `s_player_3` varchar(100) DEFAULT NULL,
  `s_player_4` varchar(100) DEFAULT NULL,
  `s_player_5` varchar(100) DEFAULT NULL,
  `s_phone` varchar(10) DEFAULT NULL,
  `s_status` varchar(10) NOT NULL DEFAULT 'unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_timestamp`, `s_name`, `s_id`, `s_email`, `s_gender`, `s_college`, `s_event_id`, `s_player_1`, `s_player_2`, `s_player_3`, `s_player_4`, `s_player_5`, `s_phone`, `s_status`) VALUES
('2017-01-12 02:11:52', 'Person Name', 'id_4878', 'person4878@domain.com', 'male', 'Jaypee University of Information Technology, Waknaghat', 'e_001', 'Person Name', NULL, NULL, NULL, NULL, '8978984878', 'unpaid'),
('2017-01-12 23:50:46', 'Person Nam', 'id_1899', 'person1899@domain.com', 'male', 'Jaypee University of Information Technology, Waknaghat', 'e_001', 'Person Nam', NULL, NULL, NULL, NULL, '8978981899', 'unpaid'),
('2017-01-12 23:51:04', 'Person Namg', 'id_4794', 'person4794@domain.com', 'male', 'Jaypee University of Information Technology, Waknaghat', 'e_001', 'Person Namg', NULL, NULL, NULL, NULL, '8978984794', 'unpaid'),
('2017-01-12 23:51:16', 'Person', 'id_8621', 'person8621@domain.com', 'male', 'Jaypee University of Information Technology, Waknaghat', 'e_005', 'Person', NULL, NULL, NULL, NULL, '8978988621', 'unpaid'),
('2017-01-12 23:51:45', 'Person Nam', 'id_6540', 'person6540@domain.com', 'male', 'Jaypee University of Information Technology, Waknaghat', 'e_001', 'Person Nam', NULL, NULL, NULL, NULL, '8978986540', 'unpaid'),
('2017-01-12 23:52:25', 'Perso', 'id_4621', 'person4621@domain.com', 'male', 'Jaypee University of Information Technology, Waknaghat', 'e_001', 'Perso', NULL, NULL, NULL, NULL, '8978984621', 'unpaid'),
('2017-01-13 00:04:54', 'Person N', 'id_6279', 'person6279@domain.com', 'male', 'Jaypee University of Information Technology, Waknaghat', 'e_001', 'Person N', NULL, NULL, NULL, NULL, '8978986279', 'unpaid'),
('2017-01-13 00:05:27', 'Perso', 'id_5118', 'person5118@domain.com', 'male', 'Jaypee University of Information Technology, Waknaghat', 'e_001', 'Perso', NULL, NULL, NULL, NULL, '8978985118', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `registrar_id` varchar(20) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `event_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`timestamp`, `registrar_id`, `student_email`, `event_id`) VALUES
('2017-01-14 04:57:05', 'reg_001', 'person4878@domain.com', 'e_001'),
('2017-01-14 04:57:45', 'reg_001', 'person6279@domain.com', 'e_001'),
('2017-01-14 04:57:45', 'reg_001', 'person4621@domain.com', 'e_001'),
('2017-01-14 04:59:11', 'reg_001', 'person5118@domain.com', 'e_001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_timestamp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
