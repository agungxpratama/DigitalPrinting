-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 09:23 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `percetakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idrole` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `iduser`, `idrole`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(11) NOT NULL,
  `namabarang` varchar(160) NOT NULL,
  `idvendor` int(11) NOT NULL,
  `ketbarang` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL,
  `idkategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `namabarang`, `idvendor`, `ketbarang`, `harga`, `stok`, `gambar`, `idkategori`) VALUES
(1, 'Topi', 5, 'Topi ini terbuat dari bahan yang tebal dan lembut', 10000, 500, 'topi.jpg', 2),
(2, 'Baju Lengan Pendek', 6, 'Baju ini terbuat dari bahan yang lembut', 50000, 800, 'lenganpendek.jpg', 1),
(3, 'Baju Lengan Panjang', 6, 'Baju ini Terbuat dari bahan yang lembut sehingga tidak panas menggunakannya', 65000, 700, 'lenganpanjang.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `idinvoice` int(11) NOT NULL,
  `tglpesan` datetime NOT NULL,
  `tglbayar` datetime NOT NULL,
  `jumlahbarang` int(11) NOT NULL,
  `jumlahbayar` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `idkonsumen` int(11) NOT NULL,
  `batasbayar` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`idinvoice`, `tglpesan`, `tglbayar`, `jumlahbarang`, `jumlahbayar`, `idbarang`, `idkonsumen`, `batasbayar`, `status`) VALUES
(4, '2020-03-18 00:00:00', '2020-03-19 00:00:00', 2, 100002, 1, 3, '0000-00-00 00:00:00', 1),
(5, '2020-03-20 00:00:00', '2020-03-21 00:00:00', 123, 10000123, 1, 3, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategoribarang`
--

CREATE TABLE `kategoribarang` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategoribarang`
--

INSERT INTO `kategoribarang` (`idkategori`, `kategori`) VALUES
(1, 'baju'),
(2, 'topi');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `idkon` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `noHp` varchar(15) NOT NULL,
  `gambar` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `idrole` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`idkon`, `alamat`, `noHp`, `gambar`, `iduser`, `idrole`) VALUES
(2, 'Gang PGA Pondok Larisa', '08932297422', 'vera.jpg', 2, 2),
(3, 'qwe', '082282710200', '63652150-alien-wallpapers.jpg', 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `idpengiriman` int(11) NOT NULL,
  `idinvoice` int(11) NOT NULL,
  `tglkirim` datetime NOT NULL,
  `tglsampai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idrole` int(1) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idrole`, `nama`) VALUES
(1, 'admin'),
(2, 'konsumen'),
(3, 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `email`) VALUES
(1, 'admin', '123', 'admin@gmail.com'),
(2, 'vera', 'vera123456', 'vera@gmail.com'),
(3, 'fau', 'fau123456', 'fau@gmail.com'),
(5, 'trapesium', 'trapesium123', 'trapesium@gmail.com'),
(9, 'qwe', '123', 'qwe@gm.com');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `idvendor` int(11) NOT NULL,
  `namatoko` varchar(255) NOT NULL,
  `ket_toko` varchar(255) NOT NULL,
  `alamat` varchar(360) NOT NULL,
  `gambar` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `idrole` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`idvendor`, `namatoko`, `ket_toko`, `alamat`, `gambar`, `iduser`, `idrole`) VALUES
(5, 'RAJAWALI PRINTING', 'Menjual beberapa barang yang dapat di cetak', 'Jl Terusan Buah Batu no. 25 Samping Indomaret', 'rajawali.jpg', 3, 3),
(6, 'TRAPESIUM PRINTING', 'Toko ini melengkapi semua pesanan anda yang akn di cetak sesuai keinginan anda', 'Jl Komunikasi no 2 Depan Bundaran', 'trapesium.jpg', 5, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`),
  ADD KEY `f5` (`idrole`),
  ADD KEY `g6` (`iduser`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`),
  ADD KEY `f6` (`idvendor`),
  ADD KEY `h4` (`idkategori`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`idinvoice`),
  ADD KEY `f8` (`idbarang`),
  ADD KEY `f9` (`idkonsumen`);

--
-- Indexes for table `kategoribarang`
--
ALTER TABLE `kategoribarang`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`idkon`),
  ADD KEY `g4` (`idrole`),
  ADD KEY `g8` (`iduser`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`idpengiriman`),
  ADD KEY `g5` (`idinvoice`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`idvendor`),
  ADD KEY `g9` (`idrole`),
  ADD KEY `h1` (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `idinvoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategoribarang`
--
ALTER TABLE `kategoribarang`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `idkon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `idpengiriman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idrole` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `idvendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `f5` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`) ON UPDATE CASCADE,
  ADD CONSTRAINT `g6` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON UPDATE CASCADE;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `f6` FOREIGN KEY (`idvendor`) REFERENCES `vendor` (`idvendor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `h4` FOREIGN KEY (`idkategori`) REFERENCES `kategoribarang` (`idkategori`) ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `f8` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`),
  ADD CONSTRAINT `f9` FOREIGN KEY (`idkonsumen`) REFERENCES `konsumen` (`idkon`) ON UPDATE CASCADE;

--
-- Constraints for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD CONSTRAINT `g4` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`) ON DELETE CASCADE,
  ADD CONSTRAINT `g8` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON UPDATE CASCADE;

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `g5` FOREIGN KEY (`idinvoice`) REFERENCES `invoice` (`idinvoice`) ON UPDATE CASCADE;

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `g9` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`) ON UPDATE CASCADE,
  ADD CONSTRAINT `h1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
