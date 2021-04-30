-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2021 at 04:15 AM
-- Server version: 5.6.50
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `republ23_viva`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `id_barang` varchar(100) NOT NULL,
  `nm_barang` varchar(500) NOT NULL,
  `gmb_barang` varchar(500) NOT NULL,
  `id_satuan` varchar(100) NOT NULL,
  `id_kategori` varchar(100) NOT NULL,
  `deskripsi_barang` varchar(1000) NOT NULL,
  `harga_jual` int(255) NOT NULL,
  `harga_diskon` int(255) NOT NULL,
  `harga_jual_diskon` int(255) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_barang`
--

INSERT INTO `tabel_barang` (`id_barang`, `nm_barang`, `gmb_barang`, `id_satuan`, `id_kategori`, `deskripsi_barang`, `harga_jual`, `harga_diskon`, `harga_jual_diskon`, `stok`) VALUES
('B001', 'Air Gallon 19 Liter', 'Prod-Galon-19lt-removebg-preview.png', 'S003', 'K003', 'Air Gallon 19 ltr Rp 18.000/ gallon', 18000, 0, 18000, 99),
('B002', 'Botol PET 1500 ml', 'Prod-Botol-1500ml-removebg-preview.png', 'S002', 'K001', 'Botol PET 1500 ml / box ( 12 botol ) Rp 49.000', 49000, 0, 49000, 5),
('B003', 'Botol PET 600 ml', 'Prod-Botol-600ml-removebg-preview.png', 'S002', 'K001', 'Botol PET 600 ml / box ( 24 botol ) Rp 49.000', 49000, 0, 49000, 5),
('B004', 'Botol PET 330 ml', 'Prod-Botol-330ml-removebg-preview.png', 'S002', 'K001', 'Botol PET 330 ml / box ( 24 botol ) Rp 46.000', 46000, 0, 46000, 5),
('B005', 'Cup 240 ml', 'Prod-Gelas-240ml-removebg-preview.png', 'S002', 'K002', 'Cup 240 ml / box ( 48 cup ) Rp 28.000', 28000, 0, 28000, 5),
('B006', 'Botol Gallon 12 Liter', 'Prod-Galon-12lt-removebg-preview.png', 'S003', 'K003', 'Botol Gallon 12 Liter', 45000, 0, 45000, 5),
('B007', 'Botol Gallon 5 Liter', 'Prod-Galon-5lt-removebg-preview.png', 'S003', 'K003', 'Botol Gallon 5 Liter', 40000, 0, 40000, 5),
('B008', 'Fresh Spray 60 ml', 'Prod-FreshSpray-removebg-preview.png', 'S001', 'K001', 'Fresh Spray 60 ml Rp 20.000', 20000, 0, 20000, 100),
('B009', 'Super Energy 1500 ml ', 'Prod-SuperEnergi-removebg-preview.png', 'S002', 'K001', 'Super Energi 1500 ml / box ( 12 botol ) Rp 180.000', 180000, 0, 180000, 100),
('B010', 'Air Gallon 19 ltr Double Oxygen ', 'Prod-Galon-19lt-removebg-preview.png', 'S001', 'K003', 'Air Gallon 19 ltr Double Oxygen harga Rp 21.000 / gallon', 21000, 0, 21000, 100),
('B011', 'Gallon dan Air 19 ltr', 'Galon-dan-air-19lt.png', 'S003', 'K003', 'Gallon dan Air 19 ltr Rp 55.000 / gallon', 55000, 0, 55000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_info`
--

CREATE TABLE `tabel_info` (
  `id_info` varchar(50) NOT NULL,
  `gbr_info` varchar(50) NOT NULL,
  `judul_info` varchar(100) NOT NULL,
  `ket_info` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori`
--

CREATE TABLE `tabel_kategori` (
  `id_kategori` varchar(100) NOT NULL,
  `nm_kategori` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_kategori`
--

INSERT INTO `tabel_kategori` (`id_kategori`, `nm_kategori`) VALUES
('K001', 'Botol'),
('K002', 'Gelas'),
('K003', 'Galon');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penjualan`
--

CREATE TABLE `tabel_penjualan` (
  `id_penjualan` varchar(100) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `tgl_penjualan` datetime NOT NULL,
  `id_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_penjualan` varchar(1000) NOT NULL,
  `status_penjualan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_penjualan`
--

INSERT INTO `tabel_penjualan` (`id_penjualan`, `id_user`, `tgl_penjualan`, `id_barang`, `jumlah`, `harga`, `total_penjualan`, `status_penjualan`) VALUES
('VA-1733103873', '13', '2021-01-28 14:15:06', 'B001', 5, 18000, '90000', 'success'),
('VA-1795294741', '12', '2021-01-27 17:53:48', 'B001', 7, 18000, '126000', 'success'),
('VA-2060310345', '13', '2021-01-28 12:05:15', 'B001', 1, 18000, '18000', 'finish'),
('VA-330384573', '12', '2021-01-26 08:44:04', 'B002', 10, 49000, '490000', 'success'),
('VA-392539927', '8', '2021-01-13 16:10:33', 'B005', 1, 28000, '28000', 'success'),
('VA-420499495', '7', '2021-01-28 14:06:54', 'B001', 1, 18000, '18000', 'success'),
('VA-689867585', '9', '2021-01-13 17:49:43', 'B001', 12, 18000, '216000', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_satuan`
--

CREATE TABLE `tabel_satuan` (
  `id_satuan` varchar(100) NOT NULL,
  `nm_satuan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_satuan`
--

INSERT INTO `tabel_satuan` (`id_satuan`, `nm_satuan`) VALUES
('S001', 'Pcs'),
('S002', 'Box'),
('S003', 'Gallon');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_slide`
--

CREATE TABLE `tabel_slide` (
  `id_slide` varchar(50) NOT NULL,
  `gbr_slide` varchar(50) NOT NULL,
  `judul_slide` varchar(100) NOT NULL,
  `ket_slide` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_slide`
--

INSERT INTO `tabel_slide` (`id_slide`, `gbr_slide`, `judul_slide`, `ket_slide`) VALUES
('BN001', '1.png', 'Standard Quality', '1. Tidak terdapat kandungan mineral anorganik (Polutan)\r\n\r\n2. Kandungan oksigen terlarut 40 PPM (Part Per Milion)\r\n\r\n3. Molekul air berbentuk segi enam (Hexagonal)\r\n\r\n4. Kadar PH 6,5 - 7,5 (Netral)');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(50) NOT NULL,
  `nm_user` varchar(25) NOT NULL,
  `alamat_user` varchar(500) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL,
  `log` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nm_user`, `alamat_user`, `hp`, `email`, `password`, `level`, `status`, `log`) VALUES
(1, 'Dicho', 'Malang', '081234567890', 'dichowicaksono10@gmail.com', 'cf40ba304ec6dee5cd53ccb5a1c6322b', 'user', 'active', '2020-12-12 03:49:00'),
(2, 'Dadang Brody', 'Magelang', '085678987890', 'mitra1@gmail.com', '39ac33385fb166cb7bc49c0309c48421', 'user', 'inactive', '2020-12-12 04:52:22'),
(5, 'Admin', 'Malang', '081081081081', 'admin@vivacelebrity.com', 'cf40ba304ec6dee5cd53ccb5a1c6322b', 'admin', 'active', '2020-12-13 03:10:05'),
(7, 'koko', 'Malang', '085959188887', 'admin@republicvisual.com', 'e9a9a4290fae9c0323a63f3d0165b694', 'user', 'active', '2020-12-21 21:33:18'),
(8, 'Moelyono', 'Jl garuda no 62', '087775138181', 'moelyono333@gmail.com', 'a22158c4597e7dd2cdb56bb3831a3b86', 'user', 'active', '2021-01-13 16:08:58'),
(9, 'yuda', 'jalan puri dago', '08987818126', 'yfr0976@gmail.com', 'e9a9a4290fae9c0323a63f3d0165b694', 'user', 'active', '2021-01-13 17:49:00'),
(10, 'yuda', 'jalan puri dago', '08987818126', 'yfr0976@gmail.com', '6b15af150f7c398e9a2a5017116b754e', 'user', 'active', '2021-01-26 08:27:55'),
(11, 'yuda', 'jalan puri dago', '08987818126', 'yfr0976@gmail.com', '6b15af150f7c398e9a2a5017116b754e', 'user', 'active', '2021-01-26 08:27:57'),
(12, 'yuda', 'jalan halim', '08987818126', 'toocoolss@yahoo.com', 'e9a9a4290fae9c0323a63f3d0165b694', 'user', 'active', '2021-01-26 08:29:00'),
(13, 'Cindy Simo Wibowo', 'Jl Raya Kranggan Kavling Palm Residence no 4 jatisampurna Bekasi', '087871330339', 'myqueendearheart@yahoo.com', '5c05db1e5e41222ea4ceb35cafe0a85c', 'user', 'active', '2021-01-27 17:48:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tabel_info`
--
ALTER TABLE `tabel_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `tabel_satuan`
--
ALTER TABLE `tabel_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tabel_slide`
--
ALTER TABLE `tabel_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
