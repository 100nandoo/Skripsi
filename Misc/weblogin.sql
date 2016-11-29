-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 11:52 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `ke` int(10) NOT NULL,
  `uid` varchar(20) CHARACTER SET latin1 NOT NULL,
  `masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `keluar` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`ke`, `uid`, `masuk`, `keluar`) VALUES
(81, '10314623852', '2016-11-29 08:54:53', '2016-11-29 08:56:23'),
(82, '250190214226', '2016-11-29 08:55:54', '2016-11-29 08:56:32'),
(83, '221241714', '2016-11-29 08:56:03', '2016-11-29 08:56:39'),
(84, '250190214226', '2016-11-29 09:14:17', '2016-11-29 09:18:50'),
(85, '10314623852', '2016-11-29 09:14:27', '2016-11-29 09:19:01'),
(86, '250190214226', '2016-11-29 10:38:46', '2016-11-29 10:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_pengunjung`
--

CREATE TABLE `jumlah_pengunjung` (
  `jumlah` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jumlah_pengunjung`
--

INSERT INTO `jumlah_pengunjung` (`jumlah`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `user` varchar(20) CHARACTER SET latin1 NOT NULL,
  `pass` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`user`, `pass`) VALUES
('admin', 'admin'),
('mikel', 'mikel');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `nama` varchar(20) CHARACTER SET latin1 NOT NULL,
  `uid` varchar(20) CHARACTER SET latin1 NOT NULL,
  `privilege` tinyint(1) DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`nama`, `uid`, `privilege`, `status`) VALUES
('Giorgy', '10314623852', 3, 0),
('Dale Watson', '221241714', 1, 0),
('Fernando', '250190214226', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`ke`);

--
-- Indexes for table `jumlah_pengunjung`
--
ALTER TABLE `jumlah_pengunjung`
  ADD PRIMARY KEY (`jumlah`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `ke` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
