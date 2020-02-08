-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 10:15 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rapat`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_rapat`
--

CREATE TABLE `pengajuan_rapat` (
  `id` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keterangan` int(11) NOT NULL,
  `hasil_rapat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_rapat`
--

INSERT INTO `pengajuan_rapat` (`id`, `tema`, `tanggal`, `jam`, `keterangan`, `hasil_rapat`) VALUES
(3, 'fhjsahfshfjh', '2019-10-10', '10:10:00', 2, '1. kenaikan gaji\r\n2. tingkatkan keamanan\r\n3. akan ada event internasional di jakarta'),
(4, 'pemecatan karyawan', '2019-11-16', '10:10:00', 1, '1. libur lebaran diperpanjang\r\n2. masuk pada tanggal 31 desember 2020'),
(5, 'blabla', '2019-11-06', '05:00:00', 1, ''),
(6, 'penambahan karyawan baru', '2019-11-30', '12:00:00', 1, 'ok enjoy aman'),
(7, 'tambah gaji', '2019-11-29', '01:00:00', 1, 'ok'),
(8, 'Seminar internasional', '2019-12-12', '08:00:00', 1, 'ok'),
(9, 'laporan bulanan', '2019-12-13', '03:02:00', 1, 'ok'),
(10, 'open lowongan kerja', '2019-12-14', '02:02:00', 1, 'ok'),
(11, 'pemecatan karyawan', '2019-12-15', '03:04:00', 1, 'ok'),
(12, 'produk baru', '2019-12-20', '18:01:00', 1, 'ok'),
(13, 'rapat bulanan', '2019-12-01', '14:00:00', 1, '1. akan ditambahkan karyawan baru'),
(14, 'rapat mingguan', '2019-12-08', '12:00:00', 1, 'kkabdfkbsdkv ksjflsdg');

--
-- Triggers `pengajuan_rapat`
--
DELIMITER $$
CREATE TRIGGER `info_rapat` AFTER INSERT ON `pengajuan_rapat` FOR EACH ROW BEGIN
 INSERT INTO tugas_divisi SET
 tema=NEW.tema, tanggal=new.tanggal, jam=new.jam;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tugas_divisi`
--

CREATE TABLE `tugas_divisi` (
  `id` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `penanggung_jawab` varchar(255) NOT NULL,
  `tugas` text NOT NULL,
  `hasil_tugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas_divisi`
--

INSERT INTO `tugas_divisi` (`id`, `tema`, `tanggal`, `jam`, `tujuan`, `penanggung_jawab`, `tugas`, `hasil_tugas`) VALUES
(2, 'pemecatan karyawan', '2019-11-16', '10:10:00', 'bussiness and development', '', 'laporan bisnis bulan 10', '26624Laporan bussiness and development (2).doc'),
(3, 'op', '2019-11-20', '05:00:00', 'bussiness and development', '', 'a', '2662426624Laporan bussiness and development (2).doc'),
(4, 'pemecatan karyawan', '2019-11-16', '10:10:00', 'finance, accounting, and tax', '', 'laporan bulanan 2019', '26624SURAT KUASA.doc'),
(5, 'fhjsahfshfjh', '2019-10-10', '10:10:00', 'human resource and general', '', 'laporan bulanan 2011', ''),
(6, 'pemecatan karyawan', '2019-11-16', '10:10:00', 'supply chain management', '', 'laporan keuangan 2020', ''),
(7, 'penambahan karyawan baru', '2019-11-30', '12:00:00', '', '', '', ''),
(8, 'penambahan karyawan baru', '2019-11-30', '12:00:00', 'bussiness and development', '', 'buat sistem yg baru', '2662426624SURAT KUASA.doc'),
(9, 'penambahan karyawan baru', '2019-11-30', '12:00:00', 'finance, accounting, and tax', '', 'serah', ''),
(10, 'tambah gaji', '2019-11-29', '01:00:00', '', '', '', ''),
(11, 'penambahan karyawan baru', '2019-11-30', '12:00:00', 'bussiness and development', '', 'KJH', '2662426624SURAT KUASA (1).doc'),
(12, 'penambahan karyawan baru', '2019-11-30', '12:00:00', 'human resource and general', '', 'hsjdf', ''),
(13, 'Seminar internasional', '2019-12-12', '08:00:00', '', '', '', ''),
(14, 'laporan bulanan', '2019-12-13', '03:02:00', '', '', '', ''),
(15, 'open lowongan kerja', '2019-12-14', '02:02:00', '', '', '', ''),
(16, 'pemecatan karyawan', '2019-12-15', '03:04:00', '', '', '', ''),
(17, 'produk baru', '2019-12-20', '18:01:00', '', '', '', ''),
(18, 'pemecatan karyawan', '2019-11-16', '10:10:00', 'bussiness and development', '', 'tugas 1', '2662426624Laporan bussiness and development (2).doc'),
(19, 'rapat bulanan', '2019-12-01', '14:00:00', '', '', '', ''),
(20, 'rapat bulanan', '2019-12-01', '14:00:00', 'finance, accounting, and tax', '', 'rekap keuangan bulan november', ''),
(21, 'rapat mingguan', '2019-12-08', '12:00:00', '', '', '', ''),
(22, 'rapat mingguan', '2019-12-08', '12:00:00', 'supply chain management', 'wawan kurniawan', 'kau  bersihkan ruangan kerja kau tu yaa\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nip` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nip`, `nama`, `password`, `tipe`, `foto`) VALUES
(1, 'wawan kurniawan ST MT', '1', 'direktur', 'rona.jpg'),
(2, 'ridho darmawan', '1', 'admin', 'rona.jpg'),
(3, 'ojik', '1', 'karyawan', 'rini.jpg'),
(5, 'alya SR', '1', 'finance, accounting, and tax', 'rona.jpg'),
(6, 'rio', '1', 'supply chain management', 'rini.jpg'),
(8, 'fitra', '1', 'bussiness and development', 'rona.jpg'),
(21, 'rini andini ST', '1', 'human resource and general', 'rini.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengajuan_rapat`
--
ALTER TABLE `pengajuan_rapat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas_divisi`
--
ALTER TABLE `tugas_divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajuan_rapat`
--
ALTER TABLE `pengajuan_rapat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tugas_divisi`
--
ALTER TABLE `tugas_divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
