-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 20, 2024 at 05:52 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u583602795_teknocide`
--

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`id`, `user_name`, `email`, `phone`, `message`, `service`, `package`, `price`, `ip_address`, `country`, `created_at`) VALUES
(1, 'duwaneqo', 'mocytesuq@mailinator.com', '+1 (959) 873-4103', 'Dolore ex fugiat rep', 'website design & development', '', '', '124.29.237.22', 'PK', '2024-07-11 19:25:26'),
(2, 'test', 'sdf@test.vom', '2323423423', 'dfgdfg', 'website design & development', 'Basic Web Package', '225', '124.29.237.22', 'PK', '2024-07-11 19:38:43'),
(3, 'leputel', 'nekid@mailinator.com', '+1 (992) 484-9933', 'Veniam omnis unde p', 'website design & development', 'Business Web Package', '2245', '124.29.237.22', 'PK', '2024-07-11 21:26:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lead`
--
ALTER TABLE `lead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
