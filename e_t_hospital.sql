-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 11:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e&t_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_list`
--

CREATE TABLE `appointment_list` (
  `NAME` text NOT NULL,
  `EMAIL` text NOT NULL,
  `PURPOSE` text NOT NULL,
  `NUMBER` text NOT NULL,
  `DEPARTMENT` text NOT NULL,
  `DATE` date NOT NULL,
  `TIME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_list`
--

INSERT INTO `appointment_list` (`NAME`, `EMAIL`, `PURPOSE`, `NUMBER`, `DEPARTMENT`, `DATE`, `TIME`) VALUES
('', '', '', '', '', '0000-00-00', ''),
('', '', '', '', '', '0000-00-00', ''),
('', '', '', '', '', '0000-00-00', ''),
('Chetan ', 'muslimabbas@gmail.com', 'dfngfdf', '03363103161', 'Health Checkup Packages', '2023-10-30', '10 AM - 12 PM'),
('', '', '', '', '', '0000-00-00', ''),
('hamza', 'jkhjkh@gmail.com', 'jkj', '03363103161', 'Neurology', '2023-11-17', '3 PM - 6 PM'),
('ssdkd', 'sjksk@gmail.com', 'nothing', '0394994942', 'CCU & ICU', '2023-11-16', '12 PM - 2 PM'),
('one plus', 'one@gmail.com', 'nothing', '3i33930030', 'Health Checkup', '2023-11-16', '8 PM - 10 PM'),
('abc', 'abc@gmail.com', 'nothing', '03363103161', 'Neurology', '2023-11-17', '8 AM - 10 AM'),
('efi', 'efi@gmail.com', 'nothing', '37482020', 'Neurology', '2023-11-18', '12 PM - 2 PM'),
('mno', 'mno@gmail.com', 'nothing', '388291001', 'Neurology', '2023-11-10', '6 PM - 8 PM'),
('hahaha', 'hahaha@gmail.com', 'nothing', '388400028', 'Neurology', '2023-11-16', '10 AM - 12 PM');

-- --------------------------------------------------------

--
-- Table structure for table `registration_data`
--

CREATE TABLE `registration_data` (
  `FIRST-NAME` text NOT NULL,
  `LAST-NAME` text DEFAULT NULL,
  `EMAIL` text NOT NULL,
  `PASSWORD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_data`
--

INSERT INTO `registration_data` (`FIRST-NAME`, `LAST-NAME`, `EMAIL`, `PASSWORD`) VALUES
('Chetan', 'dev', 'muslimabbas@gmail.com', 'muslim'),
('', '', '', ''),
('ash', 'win', 'ameetk03@gmail.com', 'ash123'),
('', '', '', ''),
('ali', 'as', 'tdftyfytfy', 'hhh'),
('', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
