-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2019 at 12:21 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cintabaca`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblAnggota`
--

CREATE TABLE `tblAnggota` (
  `idAnggota` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birth` date NOT NULL,
  `placeBirth` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `isLimit` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblAnggota`
--

INSERT INTO `tblAnggota` (`idAnggota`, `name`, `gender`, `address`, `birth`, `placeBirth`, `email`, `phone`, `isLimit`) VALUES
(1, 'mansky', 'Male', 'Depok', '2019-10-01', 'Depok', 'man@man.com', '1234', 3),
(3, 'rizki', 'Male', 'Depok', '2019-10-01', 'Depok', 'man@man2.com', '1234', 3),
(4, 'asdf', 'asdf', 'asf', '2019-10-02', 'asf', 'agsdgas', 'sadf', 3),
(5, 'asdf', 'asdf', 'asf', '2019-10-02', 'asf', 'agsdgasdfas', 'sadf', 3),
(6, 'asasdfasdfdf', 'asdf', 'asf', '2019-10-02', 'asf', 'agsdgasdsdffas', 'sadf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblBuku`
--

CREATE TABLE `tblBuku` (
  `idBuku` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(200) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `koderak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblBuku`
--

INSERT INTO `tblBuku` (`idBuku`, `judul`, `pengarang`, `genre`, `tahun`, `penerbit`, `jumlah`, `koderak`) VALUES
(1, 'Buku ini', 'ini aja', 'gatau', '2002', 'siapa aje', 10, 'AC-01'),
(2, 'Buku ini', 'ini aja', 'gatau', '2002', 'siapa aje', 10, 'AC-01'),
(3, 'Buku ini', 'ini aja', 'gatau', '2002', 'siapa aje', 10, 'AC-01'),
(4, 'Buku ini', 'ini aja', 'gatau', '2002', 'siapa aje', 10, 'AC-01'),
(5, 'Buku ini', 'ini aja', 'gatau', '2002', 'siapa aje', 10, 'AC-01');

-- --------------------------------------------------------

--
-- Table structure for table `tblKehadiran`
--

CREATE TABLE `tblKehadiran` (
  `idKehadiran` int(11) NOT NULL,
  `idAnggota` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblKehadiran`
--

INSERT INTO `tblKehadiran` (`idKehadiran`, `idAnggota`, `hari`, `tanggal`) VALUES
(1, 1, 'Rabu', '2019-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `tblPeminjaman`
--

CREATE TABLE `tblPeminjaman` (
  `idPeminjaman` int(11) NOT NULL,
  `idAnggota` int(11) NOT NULL,
  `idBuku` int(11) NOT NULL,
  `tanggalMinjam` date NOT NULL,
  `tanggalKembali` date NOT NULL,
  `denda` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblAnggota`
--
ALTER TABLE `tblAnggota`
  ADD PRIMARY KEY (`idAnggota`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tblBuku`
--
ALTER TABLE `tblBuku`
  ADD PRIMARY KEY (`idBuku`);

--
-- Indexes for table `tblKehadiran`
--
ALTER TABLE `tblKehadiran`
  ADD PRIMARY KEY (`idKehadiran`),
  ADD KEY `idAnggota` (`idAnggota`);

--
-- Indexes for table `tblPeminjaman`
--
ALTER TABLE `tblPeminjaman`
  ADD PRIMARY KEY (`idPeminjaman`),
  ADD KEY `idAnggota` (`idAnggota`),
  ADD KEY `idBuku` (`idBuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblAnggota`
--
ALTER TABLE `tblAnggota`
  MODIFY `idAnggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblBuku`
--
ALTER TABLE `tblBuku`
  MODIFY `idBuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblKehadiran`
--
ALTER TABLE `tblKehadiran`
  MODIFY `idKehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblPeminjaman`
--
ALTER TABLE `tblPeminjaman`
  MODIFY `idPeminjaman` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblKehadiran`
--
ALTER TABLE `tblKehadiran`
  ADD CONSTRAINT `tblKehadiran_ibfk_1` FOREIGN KEY (`idAnggota`) REFERENCES `tblAnggota` (`idAnggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblPeminjaman`
--
ALTER TABLE `tblPeminjaman`
  ADD CONSTRAINT `tblPeminjaman_ibfk_1` FOREIGN KEY (`idAnggota`) REFERENCES `tblAnggota` (`idAnggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblPeminjaman_ibfk_2` FOREIGN KEY (`idBuku`) REFERENCES `tblBuku` (`idBuku`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
