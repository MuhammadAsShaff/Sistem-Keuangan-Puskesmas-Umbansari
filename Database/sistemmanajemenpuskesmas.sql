-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2024 pada 14.22
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemmanajemenpuskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapemasukan1`
--

CREATE TABLE `datapemasukan1` (
  `idPemasukan` int(255) NOT NULL,
  `tanggalMasuk` date NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `sumberPemasukan` varchar(225) NOT NULL,
  `jumlahNominal` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datapemasukan1`
--

INSERT INTO `datapemasukan1` (`idPemasukan`, `tanggalMasuk`, `keterangan`, `sumberPemasukan`, `jumlahNominal`) VALUES
(6, '2024-01-20', 'aku tak paham di mana ini', 'ATMw', 10000),
(10, '2023-12-03', 'ini lha', 'ATM', 30000),
(11, '2024-01-18', 'asdsad', 'kasmdka', 1000),
(12, '2024-01-25', 'sdfsd', 'asdasd', 1000),
(13, '2024-01-09', 'sadas', 'dasdas', 1000),
(14, '2024-01-08', 'dkwjke', 'dljec', 240000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapengeluaran1`
--

CREATE TABLE `datapengeluaran1` (
  `idPengeluaran` int(255) NOT NULL,
  `tanggalKeluar` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `sumberPengeluaran` varchar(255) NOT NULL,
  `jumlahNominal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datapengeluaran1`
--

INSERT INTO `datapengeluaran1` (`idPengeluaran`, `tanggalKeluar`, `keterangan`, `sumberPengeluaran`, `jumlahNominal`) VALUES
(1, '2024-01-04', 'dasd', 'asdsa', 21321),
(2, '2024-01-13', 'adsad', 'asdas', 1000),
(4, '2024-01-03', 'tetew', 'ntahh', 10000),
(5, '2024-02-14', 'dqwd', 'wqdqw', 1000),
(7, '2024-01-18', 'asdas', 'sadas', 1000),
(8, '2024-04-06', 'ntha', 'dari tuhan', 9000),
(9, '2024-01-12', 'qweqw', 'adqwe', 1000),
(11, '2024-01-08', 'wjshkl3ed', 'jleded', 4000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori`
--

CREATE TABLE `histori` (
  `idHistori` int(225) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenisKelamin` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `levelUser` varchar(255) NOT NULL,
  `tanggalKeluar` date NOT NULL,
  `nik` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `histori`
--

INSERT INTO `histori` (`idHistori`, `nama`, `jenisKelamin`, `alamat`, `email`, `password`, `jabatan`, `levelUser`, `tanggalKeluar`, `nik`) VALUES
(1, 'As Shaff', 'Laki Laki', 'pokoknyadi sana', 'cop@3', '11111', 'gak tau', 'admin', '2024-01-07', 123),
(2, 'antah', 'Perempuan', 'asdas', 'cop@9', '123456789', 'gak tau', 'admin', '2024-01-07', 1293),
(4, 'acop', 'Laki Laki', 'saya tidak tau', 'acopgaming1@gmail.com', '1234567', 'kepala puskesma', 'admin', '2024-01-08', 8919721),
(5, 'Acop Ganteng', 'Perempuan', 'ntahlah', 'admin@1', '12345', 'admin', 'admin', '2024-01-08', 123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan1`
--

CREATE TABLE `laporan1` (
  `idLaporan` int(255) NOT NULL,
  `judulLaporan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `typeDana` varchar(255) NOT NULL,
  `jumlahNominal` int(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan1`
--

INSERT INTO `laporan1` (`idLaporan`, `judulLaporan`, `keterangan`, `typeDana`, `jumlahNominal`, `file`) VALUES
(17, 'asdasd', 'fgdsaf', 'sdafdf', 1231, '1704543342_Laporan Keuangan (1).pdf'),
(18, 'asdas', 'xvcfdgv', 'sdfsdf', 2141, '1704543442_1704468584_Laporan Keuangan.pdf'),
(19, 'asdsaf', 'asfrefdxefv', 'gsdgsdf', 23123, '1704543506_Laporan Keuangan (1).pdf'),
(21, 'asdas', 'asdasd', 'asdasd', 12321, '1704544762_Laporan Keuangan (1).pdf'),
(22, 'asd', 'asdsa', 'asdas', 124312, '1704546364_Laporan Keuangan (2).pdf'),
(23, 'anyahakdksa', 'asdsa', 'sadsa', 10888, '1704690447_Laporan Keuangan (5).pdf'),
(24, 'fjelf', 'kf;lekf', 'erl;fe', 10000, '1704702720_Laporan Keuangan (5).pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nik` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenisKelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `levelUser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `nama`, `jenisKelamin`, `alamat`, `email`, `password`, `jabatan`, `levelUser`) VALUES
(422, 'Muhammad As Shaff', 'Laki Laki', 'Gak Tau Sumpah', 'staffkeuangan@1', '1234', 'sadas', 'staff_keuangan'),
(1123, 'Bintang Puspita', 'Perempuan', 'tegalsari1', 'staffbiasa@1', '123', 'sad', 'staf'),
(8502, 'antahh', 'Perempuan', 'qdcxcwcw', 'admin@1', '123456', 'gak tau', 'admin'),
(3279823, 'acop', 'Perempuan', 'wlkdjwed', 'acop@WJS', '123456785', 'gak tau', 'staff_keuangan');

--
-- Trigger `user`
--
DELIMITER $$
CREATE TRIGGER `tr_user_delete` AFTER DELETE ON `user` FOR EACH ROW BEGIN
    INSERT INTO histori (nik, nama, jenisKelamin, alamat, email, password, jabatan, levelUser, tanggalKeluar)
    VALUES (OLD.nik,OLD.nama, OLD.jenisKelamin, OLD.alamat, OLD.email, OLD.password, OLD.jabatan, OLD.levelUser, CURDATE());
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapemasukan1`
--
ALTER TABLE `datapemasukan1`
  ADD PRIMARY KEY (`idPemasukan`);

--
-- Indeks untuk tabel `datapengeluaran1`
--
ALTER TABLE `datapengeluaran1`
  ADD PRIMARY KEY (`idPengeluaran`);

--
-- Indeks untuk tabel `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`idHistori`);

--
-- Indeks untuk tabel `laporan1`
--
ALTER TABLE `laporan1`
  ADD PRIMARY KEY (`idLaporan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapemasukan1`
--
ALTER TABLE `datapemasukan1`
  MODIFY `idPemasukan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `datapengeluaran1`
--
ALTER TABLE `datapengeluaran1`
  MODIFY `idPengeluaran` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `histori`
--
ALTER TABLE `histori`
  MODIFY `idHistori` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `laporan1`
--
ALTER TABLE `laporan1`
  MODIFY `idLaporan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
