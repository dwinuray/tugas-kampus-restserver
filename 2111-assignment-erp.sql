-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 10:11 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2111-assignment-erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `hs_biayapembuatan`
--

CREATE TABLE `hs_biayapembuatan` (
  `id_pembuatan` int(11) NOT NULL,
  `kd_bahan` varchar(35) NOT NULL,
  `kd_produk` varchar(35) NOT NULL,
  `kebutuhan_bahan` varchar(50) NOT NULL,
  `kebutuhan_produk` int(11) NOT NULL,
  `tanggal_pembuatan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hs_biayapembuatan`
--

INSERT INTO `hs_biayapembuatan` (`id_pembuatan`, `kd_bahan`, `kd_produk`, `kebutuhan_bahan`, `kebutuhan_produk`, `tanggal_pembuatan`) VALUES
(3, 'BN-001', 'SF01', '1', 1, '2022-01-02 17:41:29'),
(4, 'BN-002', 'SF01', '1', 1, '2022-01-02 17:41:29');

-- --------------------------------------------------------

--
-- Table structure for table `hs_penjualan_detail`
--

CREATE TABLE `hs_penjualan_detail` (
  `id_detail` int(11) NOT NULL,
  `kd_penjualan` varchar(75) NOT NULL,
  `kd_produk` varchar(35) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hs_penjualan_detail`
--

INSERT INTO `hs_penjualan_detail` (`id_detail`, `kd_penjualan`, `kd_produk`, `jumlah`) VALUES
(1, '618573822E439', 'XI-02990', 1),
(2, '61A4591B12B9C', 'SF01', 1),
(3, '61D1E36F28181', 'SF01', 3),
(4, '61D1E36F28181', 'XI-02990', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hs_penjualan_info`
--

CREATE TABLE `hs_penjualan_info` (
  `kd_penjualan` varchar(75) NOT NULL,
  `nama_lengkap` varchar(75) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(75) NOT NULL,
  `status` enum('process','confirm','decline') NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `tanggal_keputusan` date DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL COMMENT 'opsional'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hs_penjualan_info`
--

INSERT INTO `hs_penjualan_info` (`kd_penjualan`, `nama_lengkap`, `alamat`, `telp`, `email`, `status`, `tanggal_penjualan`, `tanggal_keputusan`, `catatan`) VALUES
('618573822E439', 'Dwi Nur Cahyo', 'JL.Perumahan Griyaasri blok R-11', '08816254060', 'dwinuchy@gmail.com', 'confirm', '2021-11-05', '2021-11-05', ''),
('61A4591B12B9C', 'Misbahul Munir', 'JL.Perumahan', '089903077', 'mibahul@gmail.com', 'confirm', '2021-11-29', '2021-11-29', ''),
('61D1E36F28181', 'Aprilia Putri Ariantini', 'alamt', '081', '100003850869647@facebook.com', 'process', '2022-01-02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hs_vendor`
--

CREATE TABLE `hs_vendor` (
  `id_vendor` int(11) NOT NULL,
  `nama_vendor` varchar(30) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hs_vendor`
--

INSERT INTO `hs_vendor` (`id_vendor`, `nama_vendor`, `deskripsi`, `created_at`) VALUES
(1, 'PT.Candika Mesra', NULL, '2022-01-02 18:10:35'),
(2, 'CV.Hummasu', NULL, '2022-01-02 18:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `mst_bahan`
--

CREATE TABLE `mst_bahan` (
  `kd_bahan` varchar(20) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `satuan` varchar(35) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `diperbarui_pada` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_bahan`
--

INSERT INTO `mst_bahan` (`kd_bahan`, `id_vendor`, `nama`, `satuan`, `harga`, `stok`, `diperbarui_pada`) VALUES
('BN-001', 0, 'Kulit Sepatu Premium', 'unit', 1000000, 0, '2021-11-05 18:08:36'),
('BN-002', 0, 'Karet untuk sepatu running', 'unit', 25000000, 0, '2021-11-05 18:08:28'),
('kode', 0, 'nama', 'satuan', 5000, 0, '2021-11-21 11:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `mst_pegawai`
--

CREATE TABLE `mst_pegawai` (
  `kd_pegawai` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jkl` enum('L','P') NOT NULL,
  `jobdesk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mst_produk`
--

CREATE TABLE `mst_produk` (
  `kd_produk` varchar(35) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `berat` int(11) NOT NULL,
  `tanggal_pembuatan` timestamp NOT NULL DEFAULT current_timestamp(),
  `penyelesaian` int(11) DEFAULT NULL,
  `gambar` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_produk`
--

INSERT INTO `mst_produk` (`kd_produk`, `nama_produk`, `deskripsi`, `berat`, `tanggal_pembuatan`, `penyelesaian`, `gambar`) VALUES
('IF-1818043', 'Sepatu Pantofel v.2.0', 'Lorepisum dolar sit amlet', 320, '2021-11-29 04:28:49', 10, NULL),
('SF01', 'Sepatu Pantofel Pria S. Van Decka J-TK016', 'Ringan dan Lembut/soft Trendi dan Elegan Bentuk dan Warna Dinamis Cocok untuk berbagai aktifitas ', 200, '2021-11-05 18:01:18', 4, NULL),
('test', 'devi nhm ed', 'des', 20, '2022-01-05 08:52:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_varian`
--

CREATE TABLE `mst_varian` (
  `id_varian` int(11) NOT NULL,
  `kd_produk` varchar(35) NOT NULL,
  `kd_varian` varchar(35) NOT NULL,
  `nama_varian` varchar(75) NOT NULL,
  `harga_varian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_varian`
--

INSERT INTO `mst_varian` (`id_varian`, `kd_produk`, `kd_varian`, `nama_varian`, `harga_varian`) VALUES
(2, 'SF01', 'SF011', 'Warna Hitam - Ukuran 38', 185000),
(3, 'SF01', 'SF012', 'Warna Hitam - Ukuran 39', 185000),
(4, 'XI-02990', 'kd01', 'Questar Ride - UK', 650000),
(5, 'XI-02990', 'kd02', 'Questar Ride - EU', 670000),
(6, 'IF-1818043', 'IF-1818043-A', 'Ukuran 36', 540000),
(7, 'IF-1818043', 'IF-1818043-B', 'Ukuran 40', 620000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_profile` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id_profile`, `username`, `password`) VALUES
(1, 'superadmin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hs_biayapembuatan`
--
ALTER TABLE `hs_biayapembuatan`
  ADD PRIMARY KEY (`id_pembuatan`),
  ADD KEY `kd_produk` (`kd_produk`),
  ADD KEY `kd_bahan` (`kd_bahan`);

--
-- Indexes for table `hs_penjualan_detail`
--
ALTER TABLE `hs_penjualan_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `kd_penjualan` (`kd_penjualan`),
  ADD KEY `kd_produk` (`kd_produk`);

--
-- Indexes for table `hs_penjualan_info`
--
ALTER TABLE `hs_penjualan_info`
  ADD PRIMARY KEY (`kd_penjualan`);

--
-- Indexes for table `hs_vendor`
--
ALTER TABLE `hs_vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- Indexes for table `mst_bahan`
--
ALTER TABLE `mst_bahan`
  ADD PRIMARY KEY (`kd_bahan`);

--
-- Indexes for table `mst_pegawai`
--
ALTER TABLE `mst_pegawai`
  ADD PRIMARY KEY (`kd_pegawai`);

--
-- Indexes for table `mst_produk`
--
ALTER TABLE `mst_produk`
  ADD PRIMARY KEY (`kd_produk`);

--
-- Indexes for table `mst_varian`
--
ALTER TABLE `mst_varian`
  ADD PRIMARY KEY (`id_varian`),
  ADD KEY `kd_produk` (`kd_produk`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hs_biayapembuatan`
--
ALTER TABLE `hs_biayapembuatan`
  MODIFY `id_pembuatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hs_penjualan_detail`
--
ALTER TABLE `hs_penjualan_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hs_vendor`
--
ALTER TABLE `hs_vendor`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_varian`
--
ALTER TABLE `mst_varian`
  MODIFY `id_varian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
