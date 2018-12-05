-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2018 pada 07.54
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_event`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftarevent`
--

CREATE TABLE `tb_daftarevent` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(200) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_event` varchar(50) NOT NULL,
  `harga` int(30) NOT NULL,
  `desc_event` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_daftarevent`
--

INSERT INTO `tb_daftarevent` (`id_event`, `nama_event`, `lokasi`, `tanggal`, `jenis_event`, `harga`, `desc_event`) VALUES
(2, 'Belajar', 'Banda aceh', '2018-05-08', 'Workshop', 30000, 'Belajar Bersama kami !');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftarregister`
--

CREATE TABLE `tb_daftarregister` (
  `id_register` int(11) NOT NULL,
  `nama_register` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_daftarregister`
--

INSERT INTO `tb_daftarregister` (`id_register`, `nama_register`, `alamat`, `telpon`, `email`) VALUES
(3, 'karma', 'bireun', '085276638383', 'yudi@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `nama`, `password`, `level`, `foto`, `email`) VALUES
(11, 'fahmi', 'fahmi', 'fahmi', 'Admin', 'thumb-1.jpg', 'fahmi@gmail.com'),
(12, 'dendi', 'dendi', 'dendi', 'Userweb', 'thumb-5.jpg', 'dendi@gmail.com'),
(13, 'zulfahmi', 'zulfahmi', 'zulfahmi', 'Userweb', 'pinguin.jpg', 'zulfahmi10@gmail.com'),
(14, 'zulfahmi', 'zulfahmi', 'zulfahmi', 'Userweb', 'pinguin.jpg', 'zulfahmi10@gmail.com'),
(15, 'ade', 'ade', 'ade', 'Userweb', 'Android.png', 'ade@gmail.com'),
(16, 'muksal', 'muksal@gmail.com', 'muksal', 'Userweb', 'ggwp.jpg', 'asdasd'),
(17, 'muksal', 'muksal', 'muksal', 'Webuser', 'ggwp.jpg', 'muksabakriel@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_daftarevent`
--
ALTER TABLE `tb_daftarevent`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `tb_daftarregister`
--
ALTER TABLE `tb_daftarregister`
  ADD PRIMARY KEY (`id_register`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_daftarevent`
--
ALTER TABLE `tb_daftarevent`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_daftarregister`
--
ALTER TABLE `tb_daftarregister`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
