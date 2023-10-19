-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 04:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app-peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `stok`, `deskripsi`, `foto`) VALUES
(2, 'suntikan', 2, 'awdawd', '1a5b3b70-6861-46db-b3b0-4b2794c7f70e.jpeg'),
(3, 'perban', 48, 'perbankan', 'download (1).jpeg'),
(4, 'karet', 4050, 'karet', '54bf45f0-3376-49d0-a580-271ca30d69c8.jpg'),
(5, 'jarum', 50, 'jarum a', 'DetectivePikachu.png'),
(6, 'alkohol', 45, 'alkohol b', 'ONEMED-Alkohol-70-1000ml-360x360.jpg'),
(7, 'kapas', 100, 'kapas medis', '2018-12-13.png');

-- --------------------------------------------------------

--
-- Table structure for table `pinjambarang`
--

CREATE TABLE `pinjambarang` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `qty` varchar(255) NOT NULL,
  `lokasi_barang` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjambarang`
--

INSERT INTO `pinjambarang` (`id`, `id_barang`, `id_user`, `tgl_mulai`, `tgl_selesai`, `qty`, `lokasi_barang`, `status`) VALUES
(4, 2, 2, '2023-10-12 00:00:00', '2023-10-13 00:00:00', '1000', 'condet', 'selesai'),
(8, 2, 2, '2023-10-12 00:00:00', '2023-10-15 00:00:00', '2', 'jakarta', 'selesai'),
(9, 6, 2, '2023-10-13 00:00:00', '2023-10-14 00:00:00', '20', 'condet', 'approve'),
(10, 5, 2, '2023-10-13 00:00:00', '2023-10-14 00:00:00', '5', '', 'selesai'),
(11, 2, 2, '2023-10-13 00:00:00', '2023-10-18 00:00:00', '1', '', 'approve'),
(12, 4, 2, '2023-10-13 00:00:00', '2023-10-20 00:00:00', '1', '', 'menunggu'),
(13, 3, 3, '2023-10-14 00:49:47', '2023-10-27 00:50:00', '1', '', 'menunggu'),
(14, 3, 3, '2023-10-14 00:50:31', '2023-10-28 00:50:00', '1', 'tes', 'menunggu'),
(15, 6, 3, '2023-10-16 00:10:31', '2023-10-24 00:10:00', '5', '', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `pinjamruangan`
--

CREATE TABLE `pinjamruangan` (
  `id` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjamruangan`
--

INSERT INTO `pinjamruangan` (`id`, `id_ruangan`, `id_user`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
(1, 1, 2, '2023-10-12', '2023-10-14', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `nama_ruangan`, `deskripsi`, `foto`, `status`) VALUES
(1, 'ruangan ngewe', 'ngewe', 'pilih atau.jpeg', 'dipinjam'),
(2, 'ruangan ngerokok', 'roko', 'RANDOM.jpg', 'free'),
(3, 'ruangan ngocok', 'ngocok kontol', 'bcd83717-556b-4dd4-b522-1ae244c4be3d.jpeg', 'free');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `perasat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `nama_dosen`, `matkul`, `semester`, `email`, `nohp`, `username`, `password`, `level`, `kelas`, `perasat`) VALUES
(1, 'audi', 'Cabul Banget M.Kom', 'Teknik Mesin Resing', '6', 'audi@mail.com', '12121212', 'admin', 'admin', 'admin', 'Kontol', 'Dekomposisi Memek Merah'),
(2, 'Rafif Ahnafyusi', '', '', '0', 'rafifahnafyusi@gmail.com', '12121212', 'petugas', 'petugas', 'user', 'Anjay KELAS', ''),
(3, 'Rizky', '', '', '0', 'rizky@mail.com', '817215', '11119154', '1234', 'user', 'BNN', ''),
(5, 'Nopanto winajay', '', '', '0', 'nopanto@mail.com', '098571389', 'nopanto', 'nopanto', 'user', 'Kelas Mani', ''),
(7, 'Reja', 'Reja Arap', 'Teknik Ngobok', 'Donatur Kampus', 'reja@mail.com', '085723123456', 'reja', 'reja', 'user', '69/2010', 'Dekomposisi Pantat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjambarang`
--
ALTER TABLE `pinjambarang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pinjamruangan`
--
ALTER TABLE `pinjamruangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ruangan` (`id_ruangan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pinjambarang`
--
ALTER TABLE `pinjambarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pinjamruangan`
--
ALTER TABLE `pinjamruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pinjambarang`
--
ALTER TABLE `pinjambarang`
  ADD CONSTRAINT `pinjambarang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `pinjambarang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `pinjamruangan`
--
ALTER TABLE `pinjamruangan`
  ADD CONSTRAINT `pinjamruangan_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id`),
  ADD CONSTRAINT `pinjamruangan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
