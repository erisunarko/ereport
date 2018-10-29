-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 05:38 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_tickets`
--

CREATE TABLE `tb_tickets` (
  `ticket_id` int(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `service_by` text NOT NULL,
  `progress` text NOT NULL,
  `status` text NOT NULL,
  `due_date` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tickets`
--

INSERT INTO `tb_tickets` (`ticket_id`, `title`, `description`, `service_by`, `progress`, `status`, `due_date`, `date_created`, `date_modified`) VALUES
(24, 'Laptop mendadak mati', 'Laptop saya sering mati mendadak, tolong diperbaiki.', 'IT support-1', 'waiting for the queue', 'open', '2018-10-31 00:00:00', '2018-10-29 23:09:42', '2018-10-29 23:18:58'),
(25, 'Scroll mouse error', 'Mouse saya scrollnya tidak bisa digunakan.', 'not yet processed', 'not yet processed', 'open', '0000-00-00 00:00:00', '2018-10-29 23:13:14', '2018-10-29 23:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `employee_id` varchar(5) NOT NULL,
  `employee_name` text NOT NULL,
  `employee_password` varchar(255) NOT NULL,
  `employee_position` varchar(25) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`employee_id`, `employee_name`, `employee_password`, `employee_position`, `date_created`, `date_modified`) VALUES
('admin', 'administrator', '$2y$10$j6ylcXTFKUgWhjLHtsEiweBr.DEyg64opx92BoL8Mq/xnkQaYg5b6', 'administrator', '2018-10-21 00:00:00', '2018-10-21 00:00:00'),
('EM001', 'it_manager', '$2y$10$j6ylcXTFKUgWhjLHtsEiweBr.DEyg64opx92BoL8Mq/xnkQaYg5b6', 'it_manager', '2018-10-22 00:00:00', '2018-10-22 00:00:00'),
('EM002', 'it_admin', '$2y$10$j6ylcXTFKUgWhjLHtsEiweBr.DEyg64opx92BoL8Mq/xnkQaYg5b6', 'it_admin', '2018-10-22 00:00:00', '2018-10-22 00:00:00'),
('EM003', 'it_support', '$2y$10$j6ylcXTFKUgWhjLHtsEiweBr.DEyg64opx92BoL8Mq/xnkQaYg5b6', 'it_support', '2018-10-22 00:00:00', '2018-10-22 00:00:00'),
('EM004', 'employee', '$2y$10$j6ylcXTFKUgWhjLHtsEiweBr.DEyg64opx92BoL8Mq/xnkQaYg5b6', 'employee', '2018-10-22 00:00:00', '2018-10-22 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_tickets`
--
ALTER TABLE `tb_tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_tickets`
--
ALTER TABLE `tb_tickets`
  MODIFY `ticket_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
