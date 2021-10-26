-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 05:25 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `NO` int(3) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `kegiatan_masuk` varchar(255) NOT NULL,
  `dana_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`NO`, `tgl_masuk`, `kegiatan_masuk`, `dana_masuk`) VALUES
(7, '0000-00-00', 'Kebersihan', 100),
(8, '2020-07-02', 'Kebersihan', 100000),
(9, '2020-07-16', 'Jumantik', 11550000);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `NO` int(3) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `kegiatan_keluar` varchar(255) NOT NULL,
  `dana_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`NO`, `tgl_keluar`, `kegiatan_keluar`, `dana_keluar`) VALUES
(21, '2020-07-15', 'kas juni', 40000),
(22, '2020-07-09', 'Kerja Bakti 3', 100000),
(23, '2020-07-14', 'Fotocopy', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_request`
--

CREATE TABLE `tb_request` (
  `id_request` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `no_ktp`, `jabatan`, `no_telp`, `jenis_kelamin`, `alamat`) VALUES
(41, 'eza', '$2y$10$mNub6fwiGvGDlpYODIMCPujqIY1erqRU20fG5TDRuvg/Yap35.6rq', 'eza', '', '', '', '', ''),
(53, 'meydina.ar ', '$2y$10$BAUly.PmQHxdDovbGQD0LuPIC/Gr0AUeSTcPj.S25uNal.f3peabe', 'Meydina Rahmawati', '3173015705990012', 'Ketua RT.04/06', '083892514825', 'Perempuan', 'Jl. Anggrek Cakra'),
(54, 'ezaap ', '$2y$10$BN6KQXp3PPPEt1sTO.KGpOLaiH3AK2KgC7tr9wwOiCaTy.F46wIYm', 'Eza Ananda', '3173012004990007', 'Bendahara RT.04/06', '0895627787865', 'Laki-laki', 'Jl. Mawar No. 02');

-- --------------------------------------------------------

--
-- Table structure for table `turnamen`
--

CREATE TABLE `turnamen` (
  `No` int(3) NOT NULL,
  `tgl_donasi` date NOT NULL,
  `nm_perusahaan` varchar(255) NOT NULL,
  `donasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turnamen`
--

INSERT INTO `turnamen` (`No`, `tgl_donasi`, `nm_perusahaan`, `donasi`) VALUES
(1, '0000-00-00', 'Tunas ', 500),
(2, '2019-12-06', 'Bank BRI', 500),
(3, '2019-12-06', 'Makaroni Ngehe', 200),
(4, '0000-00-00', 'Endang S.(Richeese)', 100000),
(5, '0000-00-00', 'INDOMARET', 50000),
(6, '0000-00-00', 'Hamba Allah', 100000),
(7, '0000-00-00', 'INDOMARET (Jl. Aggrek Cakra)', 20000),
(8, '0000-00-00', 'Turnamen Futsal 2019', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `tb_request`
--
ALTER TABLE `tb_request`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turnamen`
--
ALTER TABLE `turnamen`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `NO` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `NO` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_request`
--
ALTER TABLE `tb_request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `turnamen`
--
ALTER TABLE `turnamen`
  MODIFY `No` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
