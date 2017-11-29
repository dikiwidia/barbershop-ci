-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 03:48 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barbershop-ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pangkas`
--

CREATE TABLE IF NOT EXISTS `tbl_pangkas` (
`id_pangkas` int(11) NOT NULL,
  `nama_pangkas` varchar(50) NOT NULL,
  `id_usia` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pangkas`
--

INSERT INTO `tbl_pangkas` (`id_pangkas`, `nama_pangkas`, `id_usia`, `harga`) VALUES
(1, 'Rambut', 1, 15000),
(2, 'Rambut', 2, 20000),
(3, 'Jenggot dan Kumis', 2, 10000),
(4, 'Cat Rambut', 2, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE IF NOT EXISTS `tbl_pengguna` (
`id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(10) NOT NULL,
  `katasandi` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `nama_pengguna`, `katasandi`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE IF NOT EXISTS `tbl_register` (
`id_register` int(11) NOT NULL,
  `nama_register` varchar(50) NOT NULL,
  `date_register` date NOT NULL,
  `time_register` time NOT NULL,
  `id_pangkas` int(11) NOT NULL,
  `status` enum('N','Y') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id_register`, `nama_register`, `date_register`, `time_register`, `id_pangkas`, `status`) VALUES
(30, 'Moch Diki Widianto, S.E., M.Ak', '2016-08-02', '10:30:00', 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usia`
--

CREATE TABLE IF NOT EXISTS `tbl_usia` (
`id_usia` int(11) NOT NULL,
  `nama_usia` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usia`
--

INSERT INTO `tbl_usia` (`id_usia`, `nama_usia`) VALUES
(1, 'Anak-anak'),
(2, 'Dewasa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_waktu`
--

CREATE TABLE IF NOT EXISTS `tbl_waktu` (
`id_waktu` int(11) NOT NULL,
  `nama_waktu` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_waktu`
--

INSERT INTO `tbl_waktu` (`id_waktu`, `nama_waktu`) VALUES
(1, '09:00:00'),
(2, '09:30:00'),
(3, '10:00:00'),
(4, '10:30:00'),
(5, '11:00:00'),
(6, '11:30:00'),
(7, '12:00:00'),
(8, '12:30:00'),
(9, '13:00:00'),
(10, '13:30:00'),
(11, '14:00:00'),
(12, '14:30:00'),
(13, '15:00:00'),
(14, '15:30:00'),
(15, '16:00:00'),
(16, '16:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pangkas`
--
ALTER TABLE `tbl_pangkas`
 ADD PRIMARY KEY (`id_pangkas`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
 ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
 ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `tbl_usia`
--
ALTER TABLE `tbl_usia`
 ADD PRIMARY KEY (`id_usia`);

--
-- Indexes for table `tbl_waktu`
--
ALTER TABLE `tbl_waktu`
 ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pangkas`
--
ALTER TABLE `tbl_pangkas`
MODIFY `id_pangkas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_usia`
--
ALTER TABLE `tbl_usia`
MODIFY `id_usia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_waktu`
--
ALTER TABLE `tbl_waktu`
MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
