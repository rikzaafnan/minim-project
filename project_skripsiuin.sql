-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Des 2018 pada 08.31
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
  `status_` varchar(10) NOT NULL,
  `tgl_lulus` date NOT NULL,
  `penguji_1` varchar(50) NOT NULL,
  `penguji_2` varchar(50) NOT NULL,
  `nilaiskripsi` float NOT NULL,
  `ipk` float NOT NULL,
  `yudisium` varchar(255) NOT NULL,
  `totalsks` int(80) NOT NULL,
  `wisuda_ke` varchar(255) NOT NULL,
  `abstrak` varchar(100) DEFAULT NULL,
  `full_pdf` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skripsi`
--

INSERT INTO `skripsi` (`id`, `nama`, `nim`, `judul_skripsi`, `jenis_penelitian`, `tgl_sk`, `pembimbing_1`, `pembimbing_2`, `status_`, `tgl_lulus`, `penguji_1`, `penguji_2`, `nilaiskripsi`, `ipk`, `yudisium`, `totalsks`, `wisuda_ke`, `abstrak`, `full_pdf`) VALUES
(36, 'sasa', '88', 'Perancangan aplikasi e-commerce', 'kualitatif', '2018-12-03', 'Dr pembimbing 1', 'Dr pembimbing 2', 'lulus', '2018-12-25', 'Prof. Dr. Penguji 1', 'Prof. Dr. Penguji 2', 3.45, 3.5, 'cumlaude', 144, '11', '../upload_file/26-77-1-PB.pdf', '../upload_file/full_pdf/ICT80121-0360FP-CE.pdf\r\n        ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`) VALUES
('admin', 'admin');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
