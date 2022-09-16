-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2022 pada 10.53
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buyme`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_db`
--

CREATE TABLE `users_db` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Status` varchar(12) NOT NULL,
  `NamaLengkap` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `TanggalLahir` varchar(20) NOT NULL,
  `NomorTelp` varchar(20) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `TanggalJoin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_db`
--

INSERT INTO `users_db` (`id`, `user_id`, `Status`, `NamaLengkap`, `Username`, `Password`, `Email`, `TanggalLahir`, `NomorTelp`, `Alamat`, `TanggalJoin`) VALUES
(4, 319629914, 'user', 'Andrey Anugrah Putra', 'aap0119', '$2y$10$XYHTeMkOqdZrryeFgYgS5e7Ht3eJh6d.o8.rrBkz8HKBNcD62gvky', 'andreyanugrahputra@gmail.com', '2001-01-19', '082248858901', 'Perumnas Sudiang', '13-09-2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_picture`
--

CREATE TABLE `users_picture` (
  `user_id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_picture`
--

INSERT INTO `users_picture` (`user_id`, `Username`, `Picture`) VALUES
(319629914, 'aap0119', 'aap0119.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users_db`
--
ALTER TABLE `users_db`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_picture`
--
ALTER TABLE `users_picture`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users_db`
--
ALTER TABLE `users_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
