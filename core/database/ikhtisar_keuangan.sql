-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2020 at 09:43 AM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.31-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nrecms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ikhtisar_keuangan`
--

CREATE TABLE `ikhtisar_keuangan` (
  `id` int(11) NOT NULL,
  `title_en` text,
  `title_id` text,
  `description_en` text,
  `description_id` text,
  `photo` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikhtisar_keuangan`
--

INSERT INTO `ikhtisar_keuangan` (`id`, `title_en`, `title_id`, `description_en`, `description_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'judul EN', 'judul ID', '-', '-', 'ikhtisar_keuangan_images/202007011159471306634155image.png', '2020-07-01 04:59:48', '2020-07-01 04:59:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ikhtisar_keuangan`
--
ALTER TABLE `ikhtisar_keuangan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ikhtisar_keuangan`
--
ALTER TABLE `ikhtisar_keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
