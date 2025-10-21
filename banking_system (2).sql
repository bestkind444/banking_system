-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2025 at 05:26 PM
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
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminName` varchar(70) NOT NULL,
  `passwords` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminName`, `passwords`) VALUES
(1, 'admin@admin.com', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(11) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `Date_Of_Birth` date DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `Marital_Status` varchar(30) DEFAULT NULL,
  `statue` enum('pending','approved','declined') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `user_id`, `full_name`, `phone_number`, `Date_Of_Birth`, `gender`, `Marital_Status`, `statue`) VALUES
(1, 1, 'Ayogu Kingsley', '07019855552', '2025-10-21', 'Male', 'Married', 'approved'),
(2, 1, 'Ayogu Kingsley', '07019855552', '2025-10-21', 'Male', 'Married', 'approved'),
(3, 1, 'Ayogu Kingsley', '07019855552', '2025-10-21', 'Male', 'Unmarried', 'approved'),
(4, 3, 'OKAY', '7019866664', '2025-10-21', 'Female', 'Married', 'approved'),
(5, 3, 'OKAY', '7019866664', '2025-10-21', 'Female', 'Married', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `user_status` enum('active','inactive') DEFAULT 'active',
  `time_registered` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `pswd`, `user_status`, `time_registered`) VALUES
(1, 'Ayogu Chimezie', 'ayoguchimezie00@gmail.com', '$2y$10$QUEXy3gUx2OiA/fPro5E8uaILYLlX.yNpMYsQe87409Cd7xDtwD4i', 'active', '2025-10-14 14:19:24'),
(2, 'kay', 'kay001@gmail.com', '$2y$10$82bI8.C6ehOUpRhpDzPAjOVgRLD/mfBfL0VlCa6IUoygql2fmcosO', 'active', '2025-10-16 13:39:46'),
(3, 'cent', 'cent343@gmail.com', '$2y$10$vzH6uN6ga8yKAYXrxsY0vOlBAPTiJjd04a4klLIwTWSSkC166Mx.y', 'active', '2025-10-16 13:41:45'),
(4, 'fav', 'fav43@gmail.com', '$2y$10$w/R2tA5asusQ5qjEyp/pl.YyDxIQ.MYPq4RBrIxH0zRVit6zJuKVq', 'active', '2025-10-16 13:42:58'),
(5, 'kingz', 'kingz3@gmail.com', '$2y$10$emXu7zGDhUjWua6Qp6yIZe2xQx//Bp1ifdvdivzurlV00oKYHGk0u', 'active', '2025-10-16 13:43:47'),
(6, 'obed', 'obed23@gmail.com', '$2y$10$2bcUQQKGNGbzKai2BzWZ0.MB1i9DYQ9KnfmasHZDchOD3qdDW569G', 'inactive', '2025-10-16 13:44:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
