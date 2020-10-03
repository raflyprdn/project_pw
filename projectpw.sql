-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 04:15 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectpw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `alamat`, `username`, `password`) VALUES
(5, 'habib', 'boyoyolali', 'habib', '098'),
(6, 'syban', 'boyolli', 'syaban', '89');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `nama`, `alamat`, `notelp`, `admin`) VALUES
(1, 'indah', ' seturann', '0980980989', 5),
(3, 'cekek', 'seturan', '09808', 6),
(4, 'okok', 'babarsari', '090990', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `fasilitas` text NOT NULL,
  `foto` text NOT NULL,
  `hotel` int(11) NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `nama`, `fasilitas`, `foto`, `hotel`, `keterangan`, `admin`) VALUES
(29, 'sdasd', '  asias', '50083521-thank-you-golden-lettering-design-vector-illustration.jpg', 1, 'tidaktersedia', 5),
(30, 'asads', 'acac', 'bmx-rider-corey-martinez-does-a-bunnyhop-barspin-in-nashville-tennessee1.jpg', 1, 'tersedia', 5),
(31, 'bunga', 'ac', '50083521-thank-you-golden-lettering-design-vector-illustration1.jpg', 1, 'tersedia', 5),
(32, 'enak', ' ac air', 'PE-Shredder-Matt-Silo-Barspin-Library-Gardens.jpg', 4, 'tersedia', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `kamar` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `user`, `kamar`, `keterangan`, `checkin`, `checkout`) VALUES
(8, 3, 30, 'accept', '2019-11-05', '2019-11-13'),
(9, 3, 31, 'belum di konfirmasi', '2019-11-20', '2019-11-23'),
(10, 3, 30, 'accept', '2019-11-13', '2019-11-27'),
(11, 3, 32, 'belum di konfirmasi', '2019-11-05', '2019-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `tgl_lahir`, `username`, `password`) VALUES
(1, '', '', '0000-00-00', '', ''),
(3, 'syabana', 'noyoyo', '2019-11-05', 'habib', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkadmin` (`admin`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkhotel` (`hotel`),
  ADD KEY `fkadminkamar` (`admin`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkuser` (`user`),
  ADD KEY `fkkamar` (`kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `fkadmin` FOREIGN KEY (`admin`) REFERENCES `admin` (`id`);

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `fkadminkamar` FOREIGN KEY (`admin`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `fkhotel` FOREIGN KEY (`hotel`) REFERENCES `hotel` (`id`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fkkamar` FOREIGN KEY (`kamar`) REFERENCES `kamar` (`id`),
  ADD CONSTRAINT `fkuser` FOREIGN KEY (`user`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
