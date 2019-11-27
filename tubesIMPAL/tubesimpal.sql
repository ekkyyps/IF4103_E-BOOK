-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Nov 2019 pada 19.39
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesimpal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `no_pegawai` int(20) NOT NULL,
  `usernameA` varchar(20) DEFAULT NULL,
  `passwordA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`no_pegawai`, `usernameA`, `passwordA`) VALUES
(1301174038, 'Ekky Yulianti PS', 'ccb5057fe67cac991cde1fb9fa171256'),
(1301174061, 'M. Rayhan F', '079155c3b6d61abcdd52e98ff8893ae6'),
(1301174125, 'Alvianda Ricky', '9fa00f278495853b979a6a06f13546c0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ISBN` int(20) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `penerbit` varchar(30) DEFAULT NULL,
  `penulis` varchar(30) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `url` varchar(50) NOT NULL,
  `type` enum('image','video') NOT NULL,
  `isi` varchar(1000) DEFAULT NULL,
  `no_pegawai` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`ISBN`, `judul`, `penerbit`, `penulis`, `jenis`, `url`, `type`, `isi`, `no_pegawai`) VALUES
(1, 'Ricky Hebat ', 'Gramed', 'Gramed', 'novel', 'assets/uploads/cover1.jpg', '', 'Banyak dah isinya', 1301174125),
(2, 'Ricky Hebat  BEt', 'as', 'sd', 'jurnal', 'assets/uploads/cover2.jpg', '', 'asas', 1301174125),
(8, 'qw', 'qw', 'qq', 'novel', 'assets/uploads/cover8.jpg', '', 'ada', 1301174125),
(666, '6666', '1301174125', 'penulis1', 'novel', 'assets/uploads/cover666.jpg', '', '666', 1301174125);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukupenulis`
--

CREATE TABLE `bukupenulis` (
  `ISBN` int(20) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `penerbit` varchar(30) DEFAULT NULL,
  `penulis` varchar(30) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `url` varchar(30) DEFAULT NULL,
  `type` enum('image','video') DEFAULT NULL,
  `isi` varchar(1000) DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukupenulis`
--

INSERT INTO `bukupenulis` (`ISBN`, `judul`, `penerbit`, `penulis`, `jenis`, `url`, `type`, `isi`, `uname`) VALUES
(666, '6666', '666', '666', 'novel', 'assets/uploads/cover666.jpg', '', '666', 'penulis1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembaca`
--

CREATE TABLE `pembaca` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tgl_lahir` varchar(30) DEFAULT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembaca`
--

INSERT INTO `pembaca` (`uname`, `pass`, `email`, `tgl_lahir`, `keterangan`) VALUES
('pembaca1', '827ccb0eea8a706c4c34a16891f84e7b', 'pembaca1@gmail.com', '2019-11-18', 'pembaca'),
('pembaca2', '827ccb0eea8a706c4c34a16891f84e7b', 'pembaca2@gmail.com', '2019-11-13', 'pembaca'),
('pembaca3', '827ccb0eea8a706c4c34a16891f84e7b', 'pembaca3@gmail.com', '2019-11-05', 'pembaca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tgl_lahir` varchar(30) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penulis`
--

INSERT INTO `penulis` (`uname`, `pass`, `email`, `tgl_lahir`, `keterangan`) VALUES
('penulis1', '827ccb0eea8a706c4c34a16891f84e7b', 'penulis1@gmail.com', '2019-11-12', 'penulis'),
('penulis2', '827ccb0eea8a706c4c34a16891f84e7b', 'penulis2@gmail.com', '2019-11-05', 'penulis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no_pegawai`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `no_pegawai` (`no_pegawai`);

--
-- Indexes for table `bukupenulis`
--
ALTER TABLE `bukupenulis`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `uname` (`uname`);

--
-- Indexes for table `pembaca`
--
ALTER TABLE `pembaca`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`uname`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`no_pegawai`) REFERENCES `admin` (`no_pegawai`);

--
-- Ketidakleluasaan untuk tabel `bukupenulis`
--
ALTER TABLE `bukupenulis`
  ADD CONSTRAINT `bukupenulis_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `penulis` (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
