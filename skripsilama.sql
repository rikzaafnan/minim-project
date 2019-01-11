-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Nov 2018 pada 14.15
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_skripsiuin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `skripsi`
--

CREATE TABLE `skripsi` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `judul_skripsi` text NOT NULL,
  `jenis_penelitian` varchar(20) NOT NULL,
  `tgl_sk` date NOT NULL,
  `pembimbing_1` varchar(25) NOT NULL,
  `pembimbing_2` varchar(25) NOT NULL,
  `tgl_lulus` date NOT NULL,
  `penguji_1` varchar(50) NOT NULL,
  `penguji_2` varchar(50) NOT NULL,
  `nilaiskripsi` decimal(10,0) NOT NULL,
  `ip` decimal(10,0) NOT NULL,
  `yudisium` varchar(255) NOT NULL,
  `totalsks` int(80) NOT NULL,
  `wisuda_ke` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skripsi`
--

INSERT INTO `skripsi` (`id`, `nama`, `nim`, `judul_skripsi`, `jenis_penelitian`, `tgl_sk`, `pembimbing_1`, `pembimbing_2`, `tgl_lulus`, `penguji_1`, `penguji_2`, `nilaiskripsi`, `ip`, `yudisium`, `totalsks`, `wisuda_ke`) VALUES
(1, 'rick', '123', 'aplikasi prediksi cuaca', 'publikasi', '2002-01-01', '', '', '2002-02-02', 'Dr.Soepomo', 'Drs.Handa', '0', '0', '', 0, ''),
(2, 'jae', '11', 'aplikasi penerimaan wanita cantik', 'PUBLIKASI', '2008-02-09', '', '', '0000-00-00', 'j', 'a', '0', '0', '', 0, ''),
(3, 'alwi', '1', 'aplikasi penerimaan wanita cantik', '', '2018-11-01', '', '', '2018-11-14', 'Dr.Soepomo', 'Dr.Soetarjo', '0', '0', '', 0, ''),
(5, 'hoax', '2132123', 'aplikasi penerimaan siswa cantik banget', 'publikasi', '2018-11-02', '', '', '2018-11-03', 'Dr.Soepomo', 'Dr.Soetarjo', '0', '0', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
