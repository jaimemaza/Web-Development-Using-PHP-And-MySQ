-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: May 05, 2022 at 01:31 AM
-- Server version: 10.5.2-MariaDB-1:10.5.2+maria~bionic
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `useraccounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phonenumber`) VALUES
(8, 'Alex', 'Castillo', 'alexcastillo@gmail.com', '7123459087'),
(12, 'Brian', 'Nathaniel', 'bjn008@morningside.edu', '7129485043'),
(14, 'James', 'Evans', 'james@gmail.com', '9383848323'),
(18, 'sofia ', 'castelan', 'sofia@gmail.com', '8284848438'),
(23, 'Danny', 'O\'bryan', 'dno@gmail.com', '7127778980'),
(24, 'Mikhil', 'Raja', 'mkr@gmail.com', '7128906745'),
(25, 'Maria', 'Nava', 'mn8@gmail.com', '7123459876'),
(26, 'Rafael', 'Castilho', 'rct@gmail.com', '7128908900'),
(27, 'Emma', 'Cortfield', 'emm@gmail.com', '7123908765'),
(28, 'Grace', 'Struck', 'grs@gmail.com', '7129807652');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
