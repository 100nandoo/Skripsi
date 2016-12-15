-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 05:14 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
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
(1, '2525118514', '2016-12-12 07:39:48', '2016-12-12 07:47:08'),
(2, '250190214226', '2016-12-12 08:00:04', '2016-12-12 08:00:13'),
(3, '2525118514', '2016-12-12 08:00:25', '2016-12-12 08:00:41');

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
('Pak Arnold', '2322723052', 3, 0),
('Fernando', '250190214226', 2, 0),
('Cal', '2525118514', 1, 0);

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
  MODIFY `ke` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
