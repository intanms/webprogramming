-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2020 at 11:51 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbkomentar`
--

CREATE TABLE `tbkomentar` (
  `id_kmt` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `id_pesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkomentar`
--

INSERT INTO `tbkomentar` (`id_kmt`, `komentar`, `id_pesan`) VALUES
(1, 'Oke laksanakan', 1),
(2, 'Oke siap', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbladuan`
--

CREATE TABLE `tbladuan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladuan`
--

INSERT INTO `tbladuan` (`id`, `name`, `email`, `category`, `message`) VALUES
(2, 'Intus', 'admin@cias.com', 'Konten Ilegal', 'SW5pIGxhcG9yYW4=');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(4) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Intan', 'intan@maratus.com', 'intan'),
(2, 'intan2', 'intan@maratus.com', '$2y$10$C8S3fhAhyhkbdk8k1SqoQOFrpFA5CGlVfgtfi8IdMLw9E3omYayjm'),
(3, 'user1', 'intan@maratus.com', '$2y$10$O3MA2kfALVatr9rK4PDThuZcLeVs0MCA6L3kb0eDY1cjXVlo8Pziu'),
(4, 'user2', 'awaw@example.com', '$2y$10$hw/pCoTOvYOrW99qtFzHH.cSuke8R7OTSmwEkp833eDyzVOBwciBa'),
(6, 'intus', 'intan@maratus.com', '$2y$10$ZMy3J8dUwbJbb5orZhfeyuPg7np3K1CxxCYwuxkjsC16FY26wy3Om'),
(7, '', '', '$2y$10$4UYcY4VDtxBMSvD0gggS6.fZ5DIg2dvP.VqCKiue7Aa.uHipD1/Dm'),
(8, 'intus2', 'intan@maratus.com', '$2y$10$AgK.dAe18X.SFxN3RLXwVeR7aHeTW/bU9p4FUa8qu7pE3yuPXnRTi'),
(9, 'intan', 'intan@ymail.com', '$2y$10$iurRnmVWqwKUSUgdtzMBo.CAhpKKk8aCHQMaOYfqBr/t.dbFv4GSC'),
(10, 'admin', 'admin@cias.com', '$2y$10$A8UtRBuKoKBNa7RWOWxP8uo8NeakLw3gJ6eMPO6yDDXgzz1Ddo6MG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbkomentar`
--
ALTER TABLE `tbkomentar`
  ADD PRIMARY KEY (`id_kmt`),
  ADD UNIQUE KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `tbladuan`
--
ALTER TABLE `tbladuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbkomentar`
--
ALTER TABLE `tbkomentar`
  MODIFY `id_kmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbladuan`
--
ALTER TABLE `tbladuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
