-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2021 at 07:52 PM
-- Server version: 5.7.29
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csc385_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `first` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`first`, `last`, `email`, `phone`, `gender`, `country`, `subject`, `comments`) VALUES
('johnny', 'sleiman', 'johnny.sleiman@ndu.edu.lb', '03654789', 'male', 'lb', 'sadkljaslkdj', 'sadkjfklsjdfloasjdiop');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `time`) VALUES
(1, 'johnny', 'johnny123', '2021-05-24 12:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cases_graph_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deaths_graph_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`name`, `cases_graph_path`, `deaths_graph_path`) VALUES
('beirut', '/images/Province/Beirut/cases.jpg', '/images/Province/Beirut/death.jpg'),
('lebanon', '/images/cases.png', '/images/deaths.png'),
('mount-lebanon', '/images/Province/Mount-Lebanon/cases.jpg', '/images/Province/Mount-Lebanon/death.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `date` date NOT NULL,
  `cases` int(11) NOT NULL,
  `deaths` int(11) NOT NULL,
  `tests` int(11) NOT NULL,
  `delta_diff` int(11) NOT NULL,
  `province_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`date`, `cases`, `deaths`, `tests`, `delta_diff`, `province_name`) VALUES
('2021-03-25', 837, 22, 10120, -305, 'beirut'),
('2021-03-24', 1142, 16, 23005, -459, 'beirut'),
('2021-03-23', 1601, 14, 32100, 1046, 'beirut'),
('2021-03-22', 555, 18, 17423, -341, 'beirut'),
('2021-03-21', 896, 9, 18232, -105, 'beirut'),
('2021-03-20', 1001, 16, 22001, -317, 'beirut'),
('2021-03-25', 1054, 18, 9117, 443, 'mount-lebanon'),
('2021-03-24', 1487, 14, 19162, 545, 'mount-lebanon'),
('2021-03-23', 942, 11, 15101, 356, 'mount-lebanon'),
('2021-03-22', 586, 23, 19100, -203, 'mount-lebanon'),
('2021-03-21', 789, 11, 19991, -130, 'mount-lebanon'),
('2021-03-20', 919, 21, 21212, -132, 'mount-lebanon'),
('2021-03-25', 3560, 61, 45710, 32, 'lebanon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
