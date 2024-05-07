-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 09:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `postz`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `userid` varchar(16) NOT NULL,
  `postid` int(16) NOT NULL,
  `title` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `subjectName` varchar(30) NOT NULL,
  `solved` int(1) NOT NULL DEFAULT 0,
  `timest` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`userid`, `postid`, `title`, `content`, `subjectName`, `solved`, `timest`) VALUES
('user1', 17, 'help please', 'someone fix my computer pls', '', 1, '2024-05-01 12:38:56'),
('user15', 18, 'mee too', 'i also need help', '', 1, '2024-05-01 12:39:08'),
('Anonymous', 21, 'Lab', 'I need help with a new lab question?\r\n', '', 1, '2024-05-06 01:59:13'),
('test4', 22, 'I need help', 'Please help me with this math question for statistics\r\n', '', 1, '2024-05-06 02:00:01'),
('test3', 23, 'Math Question', 'Can someone help me with a math question for calculus?', '', 0, '2024-05-06 03:51:05'),
('Anonymous', 24, 'Lab for my paper?', 'Yes I need help', '', 1, '2024-05-06 12:49:07'),
('Anonymous', 25, 'Stats Question', 'FOr my statiscts class', '', 1, '2024-05-06 12:52:21'),
('Anonymous', 26, 'Lab Help', 'Help', '', 0, '2024-05-06 12:53:42'),
('Anonymous', 27, 'Yes', 'Yes', '', 0, '2024-05-06 12:54:30'),
('Anonymous', 28, 'Stats Paper', 'I need help with a stats paper', '', 0, '2024-05-06 13:00:43'),
('Anonymous', 29, 'Refrence Help', 'I need help with refrences', '', 0, '2024-05-06 13:02:35'),
('Anonymous', 30, 'Math Question Number 5', 'Yes', '', 0, '2024-05-06 13:04:32'),
('Anonymous', 31, 'New Math Class', 'I need to know of any tutoring classes', 'math', 0, '2024-05-06 13:06:14'),
('Anonymous', 32, 'Lab', 'A', 'computerScience', 0, '2024-05-06 19:46:16'),
('Anonymous', 33, 'a', 'a', 'math', 1, '2024-05-07 17:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `userid` varchar(16) NOT NULL,
  `postid` int(16) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `timest` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`userid`, `postid`, `title`, `content`, `timest`) VALUES
('1', 17, 'idk', 'i dont know if i can', '2024-05-01 13:03:59'),
('', 17, '', 'i think i can', '2024-05-01 13:07:28'),
('', 17, '', 'mee too', '2024-05-01 13:10:07'),
('', 18, '', 'good luck with that', '2024-05-01 13:12:48'),
('Anonymous', 17, '', 'Yes', '2024-05-04 14:56:47'),
('Anonymous', 21, '', 'What is the question?\r\n', '2024-05-06 01:59:23'),
('test4', 22, '', 'Yes', '2024-05-06 02:38:31'),
('test4', 21, '', 'Yes', '2024-05-06 03:29:02'),
('test3', 23, '', 'Yes, I can', '2024-05-06 03:51:16'),
('test3', 23, '', 'What is it though', '2024-05-06 03:51:44'),
('Anonymous', 25, '', 'YES', '2024-05-06 19:50:42'),
('Anonymous', 23, '', 'Yes', '2024-05-07 16:15:49'),
('Anonymous', 33, '', 'a', '2024-05-07 17:20:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`timest`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
