-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Nov 2019 pada 15.54
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
  `passwordA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`no_pegawai`, `usernameA`, `passwordA`) VALUES
(1301174125, 'Alvianda Ricky', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ISBN` int(20) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `penerbit` varchar(30) DEFAULT NULL,
  `penulis` varchar(30) DEFAULT NULL,
  `isi` varchar(1000) DEFAULT NULL,
  `no_pegawai` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`ISBN`, `judul`, `penerbit`, `penulis`, `isi`, `no_pegawai`) VALUES
(1, 'Ricky Hebat ', 'MANTAB FIX', 'MANTAB2 ', 'BERHASIL', 1301174125),
(2, 'Ricky Hebat ', 'Gramedia ', 'sfsknf', 'asd', 1301174125);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembaca`
--

CREATE TABLE `pembaca` (
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembaca`
--

INSERT INTO `pembaca` (`uname`, `email`, `pass`, `tgl_lahir`, `keterangan`) VALUES
('pembaca1', 'pembaca@gmail.com', '123', '6 Juni 1999', 'pembaca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penulis`
--

INSERT INTO `penulis` (`uname`, `email`, `pass`, `tgl_lahir`, `keterangan`) VALUES
('penulis1', 'penulis@gmail.com', '123', '6 Juni 1999', 'penulis');

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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`no_pegawai`) REFERENCES `admin` (`no_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
