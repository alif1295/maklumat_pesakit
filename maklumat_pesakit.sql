-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 09:20 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maklumat_pesakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `maklumat_pesakit`
--

CREATE TABLE IF NOT EXISTS `maklumat_pesakit` (
  `id_pesakit` int(11) NOT NULL,
  `nama_pesakit` varchar(200) DEFAULT NULL,
  `ic` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `no_tel` varchar(200) DEFAULT NULL,
  `jantina` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maklumat_pesakit`
--

INSERT INTO `maklumat_pesakit` (`id_pesakit`, `nama_pesakit`, `ic`, `alamat`, `no_tel`, `jantina`) VALUES
(1, 'a', 'a', 'a', 'a', 'lelaki'),
(3, 'asdasd', 'a23', 'sad', 'asd', 'lelaki'),
(4, 'asdasd213123', 'asdasd', 'asdas', 'dasdas', 'Perempuan'),
(5, 'aasdas', 'adasdas', 'adasdas', 'adasdasdd', 'Lelaki'),
(6, '1=', '1', '1', '11', 'lelaki');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `katalaluan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `katalaluan`) VALUES
(1, 'alif', 'alif'),
(2, 'aliff2', 'aliff2'),
(3, 'aliff3', 'aliff3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maklumat_pesakit`
--
ALTER TABLE `maklumat_pesakit`
  ADD PRIMARY KEY (`id_pesakit`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maklumat_pesakit`
--
ALTER TABLE `maklumat_pesakit`
  MODIFY `id_pesakit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
