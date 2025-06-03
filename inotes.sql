-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2025 at 07:04 AM
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
-- Database: `inotes`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`, `submitted_at`) VALUES
(1, 'Mukul', 'abc@gmail.com', 'Like Your Work', 'This is a good project for entry-level graduates. also keep it up.', '2025-06-02 11:20:49'),
(2, 'Jamal', 'jamal@gmail.com', 'Jamal', 'Jamal is Jamal', '2025-06-02 12:34:57'),
(3, 'nigerian', 'nigerian@gmail.com', 'nigerian', 'nigera,smndf hf', '2025-06-02 12:36:58'),
(4, 'krt', 'kert@gmail.com', 'kdjfb', 'kdjh hdf dfjhgsdfjvhxhjg', '2025-06-02 12:38:11'),
(5, 'krt', 'a@a.co', 'sdjgh', 'sdfh df', '2025-06-02 12:41:17'),
(6, 'askjdb', 'a@w.co', 'dnfdf jsdfjg', 'sdfkjg jkfdg dfjgk hdfhj kfgkhj; fhj f;ghj khjgkg', '2025-06-02 12:49:23'),
(7, 'dfjgh sdjgf', 'abc@gmail.com', 'd gdfsgdsv', 'wef dsf sf dfgds fg', '2025-06-02 12:50:22'),
(8, 'sdjfkv', 'as@c.co', 'sdfhjdgfhdgs f', 'dkjfhg hgdfshgjdhfug sjdfhgu sfdhgjsfghhldfiugh fdgjyh fg', '2025-06-02 12:53:56'),
(9, 'sdfgasdf', 'as@c.co', 'sdg df sdg', 'dgfdsfg sfghd fhgfh', '2025-06-02 12:56:10'),
(10, 'kj', 'abc@gmail.com', 'kjdfng sf', 'jdfg jjsdfg', '2025-06-02 16:42:28'),
(11, 'lknln', 'abc@gmail.com', 'lknlklklk', 'fkjng iujfiog jsoifjgois jrg', '2025-06-02 17:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `s_no` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desp` text DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`s_no`, `title`, `desp`, `time`) VALUES
(37, 'Birthday Reminder', 'It\'s Riya’s birthday tomorrow — don’t forget to send wishes!', '2025-06-02 07:39:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
