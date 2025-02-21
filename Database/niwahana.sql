-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2025 at 07:08 PM
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
-- Database: `niwahana`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `LivingRooms` decimal(65,0) DEFAULT NULL,
  `LivingRoomSqFt` decimal(65,0) NOT NULL,
  `DiningRooms` decimal(65,0) NOT NULL,
  `DiningRoomSqft` decimal(65,0) NOT NULL,
  `OpenPantrys` decimal(65,0) NOT NULL,
  `OpenPantrySqFt` decimal(65,0) NOT NULL,
  `Kitchens` decimal(65,0) NOT NULL,
  `KitchenSqFt` decimal(65,0) NOT NULL,
  `Bedrooms` decimal(65,0) NOT NULL,
  `BedroomSqFt` decimal(65,0) NOT NULL,
  `BathRooms` decimal(65,0) NOT NULL,
  `BathRoomSqFt` decimal(65,0) NOT NULL,
  `StudyLobbies` decimal(65,0) NOT NULL,
  `StudyLobbySqFt` decimal(65,0) NOT NULL,
  `TVRooms` decimal(65,0) NOT NULL,
  `TVRoomSqFt` decimal(65,0) NOT NULL,
  `ClosetRooms` decimal(65,0) NOT NULL,
  `ClosetRoomSqFt` decimal(65,0) NOT NULL,
  `Garages` decimal(65,0) NOT NULL,
  `GarageSqFt` decimal(65,0) NOT NULL,
  `HomeGyms` decimal(65,0) NOT NULL,
  `HomeGymSqFt` decimal(65,0) NOT NULL,
  `Others` decimal(65,0) NOT NULL,
  `OtherSqFt` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `role`, `username`, `password`, `code`, `update_time`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', 'super_admin', 'super_admin', '827ccb0eea8a706c4c34a16891f84e7b', 'GLKW7EC4JA', '2025-02-21 18:03:44'),
(28, 'Dinitha Nipunaka', 'dinithanipunaka333@gmail.com', 'user', 'dinitha_nipunaka', '81dc9bdb52d04dc20036dbd8313ed055', '', '2025-02-21 18:04:10'),
(31, 'Achini', 'achinidilhara@gmail.com', 'admin', 'achini_dilhara', '81dc9bdb52d04dc20036dbd8313ed055', '', '2025-02-21 18:05:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
