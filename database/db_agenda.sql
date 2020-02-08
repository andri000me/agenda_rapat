-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 05:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` varchar(50) NOT NULL,
  `topik` text NOT NULL,
  `title` text NOT NULL,
  `deskripsi` text,
  `story` varchar(50) DEFAULT NULL,
  `story_redaktur` varchar(50) DEFAULT NULL,
  `story_layout` varchar(50) DEFAULT NULL,
  `writer` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `kategori` varchar(25) DEFAULT NULL,
  `page` varchar(10) DEFAULT NULL,
  `publish_date` date NOT NULL,
  `editor` varchar(25) DEFAULT NULL,
  `layout` varchar(50) NOT NULL,
  `status_validasi` varchar(25) DEFAULT 'Belum Diproses',
  `status` varchar(25) NOT NULL DEFAULT 'Belum Terbit',
  `jam` time NOT NULL,
  `keterangan` varchar(255) DEFAULT 'Belum Diproses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `topik`, `title`, `deskripsi`, `story`, `story_redaktur`, `story_layout`, `writer`, `foto`, `kategori`, `page`, `publish_date`, `editor`, `layout`, `status_validasi`, `status`, `jam`, `keterangan`) VALUES
('BRT001', 'insiden', 'kecelakaan kereta api', '<p>kecelakaan memakan 1 korban</p>\r\n', 'assets/uploadfile/kecelakaan kereta api.doc', 'assets/uploadfile/kecelakaan kereta api-redaktur.', NULL, 'anju', 'assets/images/kecelakaan kereta api.jpg', '', '', '2018-10-18', 'zamil', '', 'Ditolak', 'Belum Terbit', '00:00:00', 'Belum Diproses'),
('BRT002', 'Elektronik', 'hp', '<p>hp terbaru</p>\r\n', 'assets/uploadfile/hp.doc', 'assets/uploadfile/hp-layout.doc', 'assets/uploadfile/hp-layout.doc', 'alya', 'assets/images/hp.jpg', 'Life', '3', '2018-10-18', 'zamil', 'roy', 'Diterima', 'Terbit', '14:17:27', 'ok'),
('BRT003', 'oleh oleh khas riau', 'baju kaos khas riau', '<p>budak melayu riau&nbsp;</p>\r\n', 'assets/uploadfile/baju kaos khas riau.doc', 'assets/uploadfile/baju kaos khas riau-layout.doc', 'assets/uploadfile/baju kaos khas riau-layout.doc', 'joko', 'assets/images/baju kaos khas riau.jpg', 'Life', '8', '2018-10-21', 'zamil', 'roy', 'Diterima', 'Terbit', '15:15:43', 'acc'),
('BRT004', 'meja bundar', 'meja', '<p>bundar</p>\r\n', 'assets/uploadfile/meja.doc', 'assets/uploadfile/meja-redaktur.', NULL, 'joko', 'assets/images/meja.jpg', '', '', '2018-10-21', 'zamil', '', 'Ditolak', 'Belum Terbit', '15:09:23', 'Belum Diproses'),
('BRT005', 'smartphone', 'new smartphone', '<p>hp oppo</p>\r\n', 'assets/uploadfile/new smartphone.doc', 'assets/uploadfile/new smartphone-redaktur.', NULL, 'joko', 'assets/images/new smartphone.jpg', '', '', '2018-10-21', 'zamil', '', 'Ditolak', 'Belum Terbit', '15:11:10', 'tidak layak'),
('BRT006', 'qqq', 'afds', '<p>dfsdf</p>\r\n', 'assets/uploadfile/afds.doc', 'assets/uploadfile/afds-redaktur.', NULL, 'joko', 'assets/images/afds.jpg', 'Life', '3', '2018-10-21', 'zamil', '', 'Diterima', 'Belum Terbit', '21:37:27', 'acc'),
('BRT007', 'dfsdfsd', 'dsadsad', '<p>asdasdsad</p>\r\n', 'assets/uploadfile/dsadsad.docx', 'assets/uploadfile/dsadsad-layout.doc', 'assets/uploadfile/dsadsad-layout.doc', 'agus', 'assets/images/dsadsad.jpg', 'Life', '2', '2018-10-28', 'lala', 'susi', 'Diterima', 'Terbit', '21:35:54', 'acc'),
('BRT008', 'olah raga', 'indonesia vs jepang', '<p>kalah 2-0</p>\r\n', 'assets/uploadfile/indonesia vs jepang.docx', 'assets/uploadfile/indonesia vs jepang-layout.docx', 'assets/uploadfile/indonesia vs jepang-layout.docx', 'filza', 'assets/images/indonesia vs jepang.jpg', 'Sport', '3', '2018-11-29', 'zamil', 'roy', 'Diterima', 'Terbit', '00:00:00', 'acc'),
('BRT009', 'Elektronik', 'pak fikry', '<p>pak jasril</p>\r\n', 'assets/uploadfile/pak fikry.docx', 'assets/uploadfile/pak fikry-redaktur.docx', NULL, 'filza', 'assets/images/pak fikry.jpg', 'Life', '4', '2018-11-29', 'zamil', '', 'Diterima', 'Belum Terbit', '14:12:29', 'acc\r\n'),
('BRT010', 'sayang rahman', 'i love you', '<p>aku sangat sayang rahman, aku tiada arti tanpa dia. oh sayang ku, i love you</p>\r\n', 'assets/uploadfile/i love you.docx', 'assets/uploadfile/i love you-layout.docx', 'assets/uploadfile/i love you-layout.docx', 'puuja', 'assets/images/i love you.jpg', 'Life', '7', '2019-02-09', 'puuja', 'aditya', 'Diterima', 'Terbit', '21:19:02', 'acc sayang'),
('BRT011', 'tidak ada yang salah', 'Oblong Riau', '<p>apa ya</p>\r\n', 'assets/uploadfile/Oblong Riau.docx', 'assets/uploadfile/Oblong Riau-redaktur.', NULL, 'adiwijaya', 'assets/images/Oblong Riau.jpg', '', '', '2019-03-12', 'adiwijaya', '', 'Ditolak', 'Belum Terbit', '22:03:59', 'Belum Diproses');

-- --------------------------------------------------------

--
-- Table structure for table `rapat`
--

CREATE TABLE `rapat` (
  `id` int(11) NOT NULL,
  `pimpinan_rapat` varchar(50) DEFAULT NULL,
  `tema` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `isi` varchar(100) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT 'Akan Datang',
  `hasil_rapat` text,
  `divisi_keuangan` varchar(50) DEFAULT '-',
  `divisi_keamanan` varchar(50) DEFAULT '-',
  `tugas_keuangan` varchar(50) NOT NULL DEFAULT '-',
  `tugas_keamanan` varchar(50) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapat`
--

INSERT INTO `rapat` (`id`, `pimpinan_rapat`, `tema`, `tanggal`, `jam`, `isi`, `keterangan`, `hasil_rapat`, `divisi_keuangan`, `divisi_keamanan`, `tugas_keuangan`, `tugas_keamanan`) VALUES
(32, 'ridho', 'peresmian produk baru', '2019-07-12', '13:00:00', 'assets/uploadrapat/peresmian produk baru file.', 'Terlaksana', '<p>produk bermasalah cek kembali secara keseluruhan</p>\r\n', '1. anggarkan dana perbaikan', '-', 'assets/uploadrapat/peresmian produk baru file.docx', 'assets/uploadrapat/peresmian produk baru file.docx'),
(33, 'Akmal', 'kenaikan pangkat', '2019-09-11', '12:56:00', 'assets/uploadrapat/kenaikan pangkat file.', 'Terlaksana', '<p>naik 30%</p>\r\n', 'manajemen uang gaji', 'amankan lingkungan\r\n', '-', 'assets/uploadrapat/kenaikan pangkat file.docx'),
(34, 'stefen', 'coba', '2019-10-31', '13:00:00', 'assets/uploadrapat/coba file.', 'Akan Datang', '', '-', '-', '-', '-'),
(35, NULL, 'naik gaji (kepala divisi)', '2019-10-21', '13:00:00', NULL, 'Akan Datang', NULL, '-', '-', '-', '-'),
(36, 'ojik', 'kenaikan gaji', '2019-11-30', '05:00:00', 'assets/uploadrapat/kenaikan gaji file.', 'Akan Datang', '', '', '', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `nama`) VALUES
(17, 'Sport'),
(18, 'Life'),
(19, 'Politik'),
(20, 'jiran');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nip`, `pass`, `email`, `tipe`, `nama`, `foto`) VALUES
(212178, '11111', '1', 'ridho@gamil.com', 'Pimpinan', 'Ridho Darmawan', 'assets/images_user/rido.jpg'),
(212179, '123', '1', 'rahmanaditya02@yahoo.co.id', 'Bagian Umum', 'rahman1', 'assets/images_user/rahman1.jpg'),
(212180, '1010', '1', 'wawan@gmail.com', 'Divisi Keuangan', 'wawan kurniawan', 'assets/images_user/wawan.jpg'),
(212181, '000111', '1', 'rahman11@gmail.com', 'Divisi Keamanan', 'arip', 'assets/images_user/arip.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rapat`
--
ALTER TABLE `rapat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rapat`
--
ALTER TABLE `rapat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212182;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
