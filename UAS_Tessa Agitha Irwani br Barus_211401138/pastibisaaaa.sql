-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 01:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pastibisaaaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `nama`, `email`, `jk`, `jabatan`) VALUES
(2, 'Karl Max', 'maxkarl@mayor.com', 'Pria', 'Security'),
(3, 'Napoleon Bonaparte', 'france123@paris.com', 'Pria', 'Manajer'),
(4, 'Lev Trotsky', 'leviathan@snowball.com', 'Pria', 'Manajer'),
(5, 'Adolf Hitler', 'hitleradolf@german.com', 'Pria', 'CEO'),
(6, 'George Orwell', 'animalfarm@fable.com', 'Pria', 'CTO'),
(7, 'Charles Darwin', 'darwin123@gmail.com', 'Pria', 'Karyawan'),
(8, 'Florence Pugh', 'pugh123@gmail.com', 'Wanita', 'Manajer'),
(9, 'Liz Truss', 'lizzie@gmail.com', 'Wanita', 'Karyawan'),
(19, 'Tessa', 'tessa@gmail.com', 'wanita', 'manajer'),
(21, 'Lolita', 'lolita@gmail.com', 'Wanita', 'Manajer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'Murahsenyum', 'murahsenyum@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'tessaagitha', 'tessairwani@gmail.com', '3a2e378df3e264ce468013b275102223'),
(10, 'a', 'a@a.com', '0cc175b9c0f1b6a831c399e269772661'),
(11, 'josephstalin', 'hijoseph@gmail.com', '90e528618534d005b1a7e7b7a367813f'),
(12, 'suci', 'suci@gmail.com', '1cc6545f956f39a79c80b05f65df3c0a'),
(13, 'Tessa123', 'tessaagitha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
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
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
