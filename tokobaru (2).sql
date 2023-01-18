-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 02:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kodebrg` varchar(20) NOT NULL,
  `namabrg` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `hargabeli` double NOT NULL,
  `hargajual` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kodebrg`, `namabrg`, `satuan`, `hargabeli`, `hargajual`) VALUES
('b001', 'cpu', 'pcs', 2000, 3000),
('b002', 'Monitor', 'pcs', 2000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `detailgudang`
--

CREATE TABLE `detailgudang` (
  `kodetr` varchar(200) NOT NULL,
  `kodebrg` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailgudang`
--

INSERT INTO `detailgudang` (`kodetr`, `kodebrg`, `harga`, `jumlah`) VALUES
('20221212102235', 'b002', 1, 10000),
('20221212105443', 'b001', 1, 3000),
('20221215095857', 'b002', 1, 10000),
('20221215095857', 'b001', 2, 3000),
('20221219080133', 'b002', 5, 10000),
('20221219080133', 'b001', 1, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mastergudang`
--

CREATE TABLE `mastergudang` (
  `kodetr` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `namasup` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `grandtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mastergudang`
--

INSERT INTO `mastergudang` (`kodetr`, `tanggal`, `namasup`, `alamat`, `telp`, `keterangan`, `grandtotal`) VALUES
('20221212102235', '2022-12-12', 'Daniel', 'Surabaya', '091324', '-', 10000),
('20221212105443', '2022-12-12', 'Daniel', 'Surabaya', '09134980', '-', 3000),
('20221215095857', '2022-12-15', 'Daniel', 'Sidoarjo', '019340918', 'Ashiap', 16000),
('20221219080133', '2022-12-19', 'Daniel', 'Sidoarjo', '018320491123', '-', 53000);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `kodeorder` varchar(20) NOT NULL,
  `kodesup` varchar(20) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `do` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `grandtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`kodeorder`, `kodesup`, `id`, `tanggal`, `do`, `keterangan`, `grandtotal`) VALUES
('o1233', 's001', 2, '2022-11-28', 'do1213', 'Beli Bahan', 18000),
('o1234', 's001', 2, '2022-11-29', 'do1213', 'Beli Bahan', 20000),
('o1235', 's001', 2, '2022-11-28', 'do1213', 'Beli Bahan', 18000),
('o1237', 's002', 2, '2022-11-29', 'do1216', 'Beli Bahan', 18000),
('o1238', 's002', 2, '2022-11-29', 'do1216', 'Beli Bahan', 15000),
('o1239', 's002', 2, '2022-11-29', 'do1216', 'Beli Bahan', 12000),
('o1240', 's001', 2, '2022-11-28', 'do1213', 'Beli Bahan', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `kodeorder` varchar(20) NOT NULL,
  `kodebrg` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`kodeorder`, `kodebrg`, `harga`, `jumlah`, `total`) VALUES
('o1233', 'b001', 500, '6', 3000),
('o1233', 'b002', 1000, '3', 3000),
('o1233', 'b002', 2000, '2', 4000),
('o1234', 'b002', 500, '12', 6000),
('o1234', 'b002', 1000, '6', 6000),
('o1234', 'b002', 1000, '6', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kodesup` varchar(20) NOT NULL,
  `namasup` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `keterangan` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kodesup`, `namasup`, `telp`, `keterangan`, `alamat`) VALUES
('s001', 'Amiroh Adillia', '089212341212', 'Belum ada', 'Jl Tenggilis Mejoyo'),
('s002', 'Reynaldi Rizky', '089712341234', 'Supplier Monitor', 'Jl Raya');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','operator','gudang') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `alamat`, `telp`, `jeniskelamin`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Amiroh Adillia', 'rumah', '089912341234', 'perempuan', 'operator', 'amirohadillia@gmail.com', NULL, '$2y$10$yghCqjRU4YR0E3ZK/4J/petE4fdrx3AkcgzIrp6Ngv9sr/9KzDmzi', NULL, '2022-11-20 19:37:58', '2022-11-20 19:37:58'),
(4, 'Daniel Nugroho Simanjuntak', 'Rumah', '089145341256', 'laki-laki', 'gudang', 'daniel@gmail.com', NULL, '$2y$10$GvpwOG6BswjQ.tcxISlyv.QZjjNwFywFmCnmbrojEHK9qtJabnWb6', NULL, '2022-11-22 20:57:36', '2022-11-22 20:57:36'),
(5, 'Erick winata', 'Rumah', '08912313131', 'laki-laki', 'operator', 'erick@gmail.com', NULL, '$2y$10$uiaOb/C2nfxvSUhmphIKyuVY2VYSTdbOjtQhTtJ/uTv3IedGov27e', NULL, '2022-11-23 19:24:53', '2022-11-23 19:24:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kodebrg`);

--
-- Indexes for table `detailgudang`
--
ALTER TABLE `detailgudang`
  ADD KEY `kodetr` (`kodetr`),
  ADD KEY `kodebrg` (`kodebrg`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mastergudang`
--
ALTER TABLE `mastergudang`
  ADD PRIMARY KEY (`kodetr`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`kodeorder`),
  ADD KEY `kodesup` (`kodesup`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD KEY `kodeorder` (`kodeorder`),
  ADD KEY `kodebrg` (`kodebrg`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kodesup`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailgudang`
--
ALTER TABLE `detailgudang`
  ADD CONSTRAINT `detailgudang_ibfk_1` FOREIGN KEY (`kodetr`) REFERENCES `mastergudang` (`kodetr`),
  ADD CONSTRAINT `detailgudang_ibfk_2` FOREIGN KEY (`kodebrg`) REFERENCES `barang` (`kodebrg`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`kodesup`) REFERENCES `supplier` (`kodesup`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`kodeorder`) REFERENCES `order` (`kodeorder`),
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`kodebrg`) REFERENCES `barang` (`kodebrg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
