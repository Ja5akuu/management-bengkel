-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 10:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_baja`
--

CREATE TABLE `tb_baja` (
  `id_baja` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga_beli` varchar(50) DEFAULT NULL,
  `harga_jual` varchar(50) DEFAULT NULL,
  `diskon` varchar(50) DEFAULT NULL,
  `qty` varchar(10) DEFAULT NULL,
  `id_satuan` varchar(10) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `id_supplier` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_baja`
--

INSERT INTO `tb_baja` (`id_baja`, `nama`, `harga_beli`, `harga_jual`, `diskon`, `qty`, `id_satuan`, `id_kategori`, `id_supplier`) VALUES
('BRG-0001', 'operator1', '5000', '80000', '0', '50', 'STN-0002', 'KTG-0001', 'SPR-0001'),
('BRG-0002', 'tes1', '5000', '10000', '0', '30', 'STN-0002', 'KTG-0002', 'SPR-0002');

-- --------------------------------------------------------

--
-- Table structure for table `tb_brand`
--

CREATE TABLE `tb_brand` (
  `id_brand` varchar(10) NOT NULL,
  `brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_brand`
--

INSERT INTO `tb_brand` (`id_brand`, `brand`) VALUES
('BRN-0001', 'yamaha'),
('BRN-0002', 'honda'),
('BRN-0003', 'suzuki'),
('BRN-0004', 'viar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `nama`, `hp`, `alamat`) VALUES
('CST-0001', 'operator1', '2524525', 'PT. Maxxis International Indonesia\r\nGreenland International Industrial Center (GIIC) Blok CG No.1, Kelurahan, Pasirranji, Cikarang Pusat, Bekasi, Jawa Barat 17530, Indonesia'),
('CST-0002', 'Client1', '333335', 'cik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailtrans`
--

CREATE TABLE `tb_detailtrans` (
  `id_temp` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `id_baja` varchar(20) NOT NULL,
  `id_satuan` varchar(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `harga_jual` varchar(50) NOT NULL,
  `diskon` varchar(20) NOT NULL,
  `qty` varchar(20) DEFAULT NULL,
  `sisa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detailtrans`
--

INSERT INTO `tb_detailtrans` (`id_temp`, `invoice`, `id_baja`, `id_satuan`, `id_kategori`, `harga_jual`, `diskon`, `qty`, `sisa`) VALUES
(47, 'INV/201811/0001', 'BRG-0002', 'STN-0002', 'KTG-0002', '10000', '0', '50', '50'),
(48, 'INV/201811/0002', 'BRG-0002', 'STN-0002', 'KTG-0002', '10000', '0', '20', '30'),
(49, 'INV/201811/0002', 'BRG-0001', 'STN-0002', 'KTG-0001', '80000', '0', '50', '50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` varchar(10) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
('KTG-0001', 'OLI'),
('KTG-0002', 'Kabel');

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `id_satuan` varchar(10) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `satuan`) VALUES
('STN-0001', 'Pcs'),
('STN-0002', 'Rol'),
('STN-0003', 'Set');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` varchar(10) NOT NULL,
  `supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `supplier`) VALUES
('SPR-0001', 'PT.Cipta Kusama'),
('SPR-0002', 'CV. Berkah Mandiri'),
('SPR-0003', 'CV. Maju Setia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_teknisi`
--

CREATE TABLE `tb_teknisi` (
  `id_teknisi` varchar(10) NOT NULL,
  `teknisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_teknisi`
--

INSERT INTO `tb_teknisi` (`id_teknisi`, `teknisi`) VALUES
('TKI-0001', 'Tono'),
('TKI-0002', 'jojo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_temptrans`
--

CREATE TABLE `tb_temptrans` (
  `id_temp` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `id_baja` varchar(20) NOT NULL,
  `id_satuan` varchar(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `harga_jual` varchar(50) NOT NULL,
  `diskon` varchar(20) NOT NULL,
  `qty` varchar(20) DEFAULT NULL,
  `sisa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `id_customer` varchar(50) NOT NULL,
  `id_brand` varchar(20) NOT NULL,
  `id_type` varchar(20) NOT NULL,
  `no_pol` varchar(20) NOT NULL,
  `id_teknisi` varchar(20) NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `tgl`, `invoice`, `id_customer`, `id_brand`, `id_type`, `no_pol`, `id_teknisi`, `keluhan`) VALUES
(11, '2018-11-07', 'INV/201811/0001', 'CST-0001', 'BRN-0001', 'TYP-0002', '12345', 'TKI-0002', 'tes'),
(12, '2018-11-07', 'INV/201811/0002', 'CST-0002', 'BRN-0002', 'TYP-0002', '12345', 'TKI-0002', 'saet');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type`
--

CREATE TABLE `tb_type` (
  `id_type` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_type`
--

INSERT INTO `tb_type` (`id_type`, `type`) VALUES
('TYP-0001', 'matic'),
('TYP-0002', 'manual'),
('TYP-0003', 'kopling');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_baja`
--
ALTER TABLE `tb_baja`
  ADD PRIMARY KEY (`id_baja`),
  ADD KEY `id_satuan` (`id_satuan`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_kategori_2` (`id_kategori`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `tb_brand`
--
ALTER TABLE `tb_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tb_detailtrans`
--
ALTER TABLE `tb_detailtrans`
  ADD PRIMARY KEY (`id_temp`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `tb_temptrans`
--
ALTER TABLE `tb_temptrans`
  ADD PRIMARY KEY (`id_temp`),
  ADD KEY `id_baja` (`id_baja`),
  ADD KEY `id_satuan` (`id_satuan`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_baja_2` (`id_baja`),
  ADD KEY `id_satuan_2` (`id_satuan`),
  ADD KEY `id_kategori_2` (`id_kategori`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_brand` (`id_brand`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_teknisi` (`id_teknisi`),
  ADD KEY `id_type_2` (`id_type`);

--
-- Indexes for table `tb_type`
--
ALTER TABLE `tb_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detailtrans`
--
ALTER TABLE `tb_detailtrans`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_temptrans`
--
ALTER TABLE `tb_temptrans`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_baja`
--
ALTER TABLE `tb_baja`
  ADD CONSTRAINT `tb_baja_ibfk_1` FOREIGN KEY (`id_satuan`) REFERENCES `tb_satuan` (`id_satuan`),
  ADD CONSTRAINT `tb_baja_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`),
  ADD CONSTRAINT `tb_baja_ibfk_3` FOREIGN KEY (`id_supplier`) REFERENCES `tb_supplier` (`id_supplier`);

--
-- Constraints for table `tb_temptrans`
--
ALTER TABLE `tb_temptrans`
  ADD CONSTRAINT `tb_temptrans_ibfk_1` FOREIGN KEY (`id_baja`) REFERENCES `tb_baja` (`id_baja`),
  ADD CONSTRAINT `tb_temptrans_ibfk_2` FOREIGN KEY (`id_satuan`) REFERENCES `tb_satuan` (`id_satuan`),
  ADD CONSTRAINT `tb_temptrans_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_teknisi`) REFERENCES `tb_teknisi` (`id_teknisi`),
  ADD CONSTRAINT `tb_transaksi_ibfk_4` FOREIGN KEY (`id_type`) REFERENCES `tb_type` (`id_type`),
  ADD CONSTRAINT `tb_transaksi_ibfk_5` FOREIGN KEY (`id_brand`) REFERENCES `tb_brand` (`id_brand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
