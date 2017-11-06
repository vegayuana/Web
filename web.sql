-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 05:23 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `merch`
--

CREATE TABLE `merch` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `harga` float NOT NULL,
  `jumlah` int(11) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merch`
--

INSERT INTO `merch` (`id_barang`, `nama_barang`, `harga`, `jumlah`, `img`) VALUES
(1, 'Ode to Sleep Hoodie', 300, 20, 'merch1.jpg'),
(2, 'White Roses Hoodie', 400, 22, 'merch2.jpg'),
(3, 'Pink Hoodie', 350, 30, 'merch3.jpg'),
(4, 'Pink Roses Hat', 300, 27, 'merch4.jpg'),
(5, 'Clickbait Hat', 275, 30, 'merch5.jpg'),
(6, 'Black XO Hat', 220, 30, 'merch6.jpg'),
(7, 'Pink T-Shirt', 200, 28, 'merch7.jpg'),
(8, 'The Wall T-Shirt', 235, 30, 'merch8.jpg'),
(9, 'Black T-Shirt', 332, 24, 'merch9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_merch`
--

CREATE TABLE `pembelian_merch` (
  `id_transaksi` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `total` float NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `waktu_pembayaran` datetime NOT NULL,
  `no_ticket` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_tiket`
--

CREATE TABLE `pembelian_tiket` (
  `id_transaksi` int(11) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `total` float NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `waktu_pembayaran` datetime NOT NULL,
  `no_ticket` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `no_ticket` int(11) NOT NULL,
  `festival` char(1) NOT NULL,
  `row` int(11) NOT NULL,
  `seat` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pembelian_merch`
--
ALTER TABLE `pembelian_merch`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `no_ticket` (`no_ticket`);

--
-- Indexes for table `pembelian_tiket`
--
ALTER TABLE `pembelian_tiket`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `no_ticket` (`no_ticket`),
  ADD KEY `no_users` (`id_users`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`no_ticket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merch`
--
ALTER TABLE `merch`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pembelian_merch`
--
ALTER TABLE `pembelian_merch`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembelian_tiket`
--
ALTER TABLE `pembelian_tiket`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `no_ticket` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian_merch`
--
ALTER TABLE `pembelian_merch`
  ADD CONSTRAINT `id_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pembelian_merch_ibfk_1` FOREIGN KEY (`no_ticket`) REFERENCES `ticket` (`no_ticket`);

--
-- Constraints for table `pembelian_tiket`
--
ALTER TABLE `pembelian_tiket`
  ADD CONSTRAINT `no_ticket` FOREIGN KEY (`no_ticket`) REFERENCES `ticket` (`no_ticket`),
  ADD CONSTRAINT `no_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
