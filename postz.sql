-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 11:09 PM
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
  `userid` int(16) NOT NULL,
  `postid` int(16) NOT NULL,
  `title` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `solved` int(1) NOT NULL,
  `timest` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`userid`, `postid`, `title`, `content`, `solved`, `timest`) VALUES
(55, 10, 'my first post', 'here is what i want to say', 0, '2024-04-30 19:49:41'),
(55, 11, 'post number two', 'computer science 365', 0, '2024-04-30 19:50:06'),
(0, 0, 'post number three', 'this one im submitting in the page', 0, '2024-04-30 19:55:05'),
(0, 0, 'post number four', 'working on redirect', 0, '2024-04-30 19:55:32'),
(0, 0, 'i need help', 'my computer wont work somebody fix pls', 0, '2024-04-30 20:58:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
