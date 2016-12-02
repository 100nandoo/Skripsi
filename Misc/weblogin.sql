-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 05:19 PM
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
(110, '250190214226', '2016-11-30 04:56:49', '2016-11-30 04:58:55'),
(111, '2525118514', '2016-11-30 04:56:56', '2016-11-30 04:57:22'),
(112, '887719016', '2016-11-30 04:57:03', '2016-11-30 04:57:12'),
(113, '887719016', '2016-11-30 10:42:18', '2016-11-30 10:42:18'),
(114, '887719016', '2016-11-30 10:42:27', '2016-11-30 10:42:29'),
(115, '887719016', '2016-11-30 10:42:36', '2016-11-30 10:42:43'),
(116, '2525118514', '2016-11-30 10:43:36', '2016-11-30 10:43:42'),
(117, '887719016', '2016-11-30 10:43:49', '2016-11-30 10:43:57'),
(118, '2322723052', '2016-11-30 10:44:21', '2016-11-30 10:44:52'),
(119, '250190214226', '2016-11-30 10:44:59', '2016-11-30 10:45:03'),
(120, '2322723052', '2016-11-30 10:45:13', '2016-11-30 10:45:33'),
(121, '250190214226', '2016-11-30 10:45:20', '2016-11-30 10:45:28'),
(122, '250190214226', '2016-11-30 10:46:48', '2016-11-30 10:47:58'),
(123, '2322723052', '2016-11-30 10:47:58', NULL),
(124, '2322723052', '2016-11-30 10:47:58', '2016-11-30 10:48:09'),
(125, '250190214226', '2016-11-30 10:48:16', '2016-11-30 10:48:24'),
(126, '2322723052', '2016-11-30 10:48:30', '2016-11-30 10:48:36'),
(127, '2322723052', '2016-11-30 10:48:47', '2016-11-30 10:49:10');

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
(1);

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
('Cal', '2525118514', 1, 0),
('Bot', '887719016', 1, 0);

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
  MODIFY `ke` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
