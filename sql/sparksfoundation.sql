-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 08:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Database: `sparksfoundation`
--
-- Table structure for table `sparkstransact`
--

CREATE TABLE `sparkstransact` (
  
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(9) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sparksusers`
--

CREATE TABLE `sparksusers` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sparksusers`
--

INSERT INTO `sparksusers` (`id`, `name`, `email`, `balance`) VALUES

(110, 'adi','adi@gmail.com', 2700),  
(111, 'bansi','bani@gmail.com', 3450),  
(112, 'harsh','harsh@gmail.com', 6550),  
(113, 'hitesh','hitesh@gmail.com',3000),  
(114, 'pari', 'parita@gmail.com',4000),  
(115, 'kinjal','kinju@gmail.com' ,6000),  
(116, 'rivan', 'rivan7@gmail.com',5500),  
(117, 'aarav', 'arav55@gmail.com',5800),  
(118, 'nikita','nikita6@gmail.com',1500),  
(119, 'raj','rajp@gmail.com',7000),  
(120, 'jaimin','jaimin45@@gmail.com',6700),  
(121, 'nitesh','nitesh66@gmail.com',8000),
COMMIT;
