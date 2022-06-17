-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: db721157988.db.1and1.com
-- Generation Time: Mar 14, 2022 at 05:05 AM
-- Server version: 5.7.36-log
-- PHP Version: 7.0.33-0+deb9u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db721157988`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `created_at` text,
  `updated_at` text,
  `mailer` text,
  `mail_host` text,
  `mail_port` text,
  `mail_username` text,
  `mail_password` text,
  `mail_encryption` text,
  `mail_from_address` text,
  `mail_from_name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `created_at`, `updated_at`, `mailer`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encryption`, `mail_from_address`, `mail_from_name`) VALUES
(1, 'JSigman@360homeconnect.com', 'justin', 'Justin Sigman', '', '', '', 'outlook.office365.com', '993', 'JSigman@360homeconnect.com', 'JSig?!3600619794', 'STARTTLS', 'JSigman@360homeconnect.com', 'JSigman@360homeconnect.com'),
(2, 'hamza@gmail.com', 'test1234', 'Hamza', '', '', '', '', '', '', '', '', '', ''),
(3, 'andrews@360homeconnect.com', '360!?', 'Andrew Simons', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'nicw@360homeconnect.com', '360Wehrwein?!', 'Nic Wehwein', '', '', '', '', '', 'nicw@360homeconnect.com', '3lburn 1ll1no1s R0w3 R0@d!', '', '', ''),
(6, 'douglasg@360homeconnect.com', '360Green?!', 'Douglas Green', '', '', '', '', '', 'Doug G', '360HC-Doug', '', '', ''),
(7, 'ryanj@360homeconnect.com', '360Janke?!', 'Ryan Janke', '', '', '', '', '', 'ryanj@360homeconnect.com', 'Packer$3', '', '', ''),
(8, 'ericaa@360homeconnect.com', 'Laila17!', 'Erica Allen', '', '', '', '', '', '', '', '', '', ''),
(9, 'shawnr@360homeconnect.com', '360Ross?!', 'Shawn Ross', '', '', '', '', '', 'shawnr@360homeconnect.com', 'Ramos1017#', '', '', ''),
(10, 'indiaf@360homeconnect.com', '360Fields?!', 'India Fields', '', '', '', '', '', 'indiaf@360homeconnect.com', 'Dandia@910', '', '', ''),
(11, 'shawnc@360homeconnect.com', '360Cassellius?!', 'Shawn Cassellius', '', '', '', '', '', 'shawnc@360homeconnect.com', '360Cassellius?!', '', '', ''),
(12, 'danielled@360homeconnect.com', '360Dunn?!', 'Danielle Dunn', '', '', '', '', '', 'danielled@360homeconnect.com', '360Dunn?!', '', '', ''),
(13, 'gervonnen@360homeconnect.com', '360Ngoumba?!', 'Gervonne Ngoumba', '', '', '', '', '', 'gervonnen@360homeconnect.com', '360Ngoumba?!', '', '', ''),
(14, 'christopherl@360homeconnect.com', '360Locke?!', 'Christopher Locke', '', '', '', '', '', 'christopherl@360homeconnect.com', 'Lyssa127', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
