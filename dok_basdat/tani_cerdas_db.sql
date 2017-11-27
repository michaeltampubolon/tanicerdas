-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 10:50 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tani_cerdas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_komunitas`
--

CREATE TABLE `anggota_komunitas` (
  `id_komunitas` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tanam`
--

CREATE TABLE `jadwal_tanam` (
  `id_tanaman` varchar(15) NOT NULL,
  `id_lahan` varchar(15) NOT NULL,
  `kegiatan` text NOT NULL,
  `durasi` int(3) NOT NULL,
  `progress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keahlian_penyuluh`
--

CREATE TABLE `keahlian_penyuluh` (
  `id_keahlian` varchar(15) NOT NULL,
  `keahlian` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` varchar(15) NOT NULL,
  `id_komentar_ref` varchar(15) NOT NULL,
  `id_konsultasi` varchar(15) NOT NULL,
  `pesan` text NOT NULL,
  `id_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komunitas_tani`
--

CREATE TABLE `komunitas_tani` (
  `id_komunitas` varchar(15) NOT NULL,
  `nama_komunitas` varchar(50) NOT NULL,
  `tgl_dibentuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `id_komunitas` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lahan`
--

CREATE TABLE `lahan` (
  `id_lahan` varchar(15) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `longlat` varchar(30) NOT NULL,
  `luas` double NOT NULL,
  `temperatur` double NOT NULL,
  `curah_hujan` double NOT NULL,
  `tekstur` varchar(20) NOT NULL,
  `ph` double NOT NULL,
  `drainase` varchar(25) NOT NULL,
  `kedalaman_tanah` varchar(10) NOT NULL,
  `lereng` double NOT NULL,
  `ketebalan_gambut` double NOT NULL,
  `id_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyuluh`
--

CREATE TABLE `penyuluh` (
  `id_keahlian` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id_tanaman` varchar(15) NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `kelompok_tanaman` varchar(25) NOT NULL,
  `akar` varchar(25) NOT NULL,
  `biji` varchar(25) NOT NULL,
  `daun` varchar(25) NOT NULL,
  `batang` varchar(25) NOT NULL,
  `kategori_komoditas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_telp` text NOT NULL,
  `no_identitas` int(16) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `alamat_jalan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_penyuluh`
--

CREATE TABLE `user_penyuluh` (
  `id_user` varchar(15) NOT NULL,
  `instansi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_komunitas`
--
ALTER TABLE `anggota_komunitas`
  ADD KEY `id_komunitas` (`id_komunitas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `jadwal_tanam`
--
ALTER TABLE `jadwal_tanam`
  ADD KEY `id_tanaman` (`id_tanaman`),
  ADD KEY `id_lahan` (`id_lahan`);

--
-- Indexes for table `keahlian_penyuluh`
--
ALTER TABLE `keahlian_penyuluh`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_konsultasi` (`id_konsultasi`);

--
-- Indexes for table `komunitas_tani`
--
ALTER TABLE `komunitas_tani`
  ADD PRIMARY KEY (`id_komunitas`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_komunitas` (`id_komunitas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`id_lahan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penyuluh`
--
ALTER TABLE `penyuluh`
  ADD KEY `id_keahlian` (`id_keahlian`),
  ADD KEY `penyuluh_ibfk_1` (`id_user`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_penyuluh`
--
ALTER TABLE `user_penyuluh`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota_komunitas`
--
ALTER TABLE `anggota_komunitas`
  ADD CONSTRAINT `anggota_komunitas_ibfk_1` FOREIGN KEY (`id_komunitas`) REFERENCES `komunitas_tani` (`id_komunitas`),
  ADD CONSTRAINT `anggota_komunitas_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `jadwal_tanam`
--
ALTER TABLE `jadwal_tanam`
  ADD CONSTRAINT `jadwal_tanam_ibfk_1` FOREIGN KEY (`id_tanaman`) REFERENCES `tanaman` (`id_tanaman`),
  ADD CONSTRAINT `jadwal_tanam_ibfk_2` FOREIGN KEY (`id_lahan`) REFERENCES `lahan` (`id_lahan`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_konsultasi`) REFERENCES `konsultasi` (`id_konsultasi`);

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_1` FOREIGN KEY (`id_komunitas`) REFERENCES `komunitas_tani` (`id_komunitas`),
  ADD CONSTRAINT `konsultasi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `lahan`
--
ALTER TABLE `lahan`
  ADD CONSTRAINT `lahan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `penyuluh`
--
ALTER TABLE `penyuluh`
  ADD CONSTRAINT `penyuluh_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_penyuluh` (`id_user`),
  ADD CONSTRAINT `penyuluh_ibfk_2` FOREIGN KEY (`id_keahlian`) REFERENCES `keahlian_penyuluh` (`id_keahlian`);

--
-- Constraints for table `user_penyuluh`
--
ALTER TABLE `user_penyuluh`
  ADD CONSTRAINT `user_penyuluh_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
