-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2023 pada 03.12
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cuti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adminstrator', 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$vXr5n3akqcHmOGecXWzFOOMNFQz.N1/CY1mieTwSxKKhuivKe6g1u', NULL, '2023-06-09 08:35:23', '2023-07-08 01:00:26'),
(2, 'Pegawai', 'pegawai', 'pegawai', 'pegawai@gmail.com', NULL, '$2y$10$ktXNi4KAJ9HAW.ng1.mH6OWuslGn6FE3k2x53e0gjijH3OMhTLroG', NULL, '2023-06-09 08:38:00', '2023-06-09 08:38:00'),
(3, 'Staff', 'staff', 'staff', 'staff@gmail.com', NULL, '$2y$10$zX9xTtfW4sdqH3BAj3g2BesMYAIivVwtRLYa4IbZlLkdlC/q0fDt.', NULL, '2023-06-09 08:38:38', '2023-06-09 08:38:38'),
(4, 'Testing', 'testing', 'pegawai', 'testing@gmail.com', NULL, '$2y$10$xJeiEmxgoir4PFf56hvYpegWZMSf5o32jEPaIgL/znQQF1SpxUPN2', NULL, '2023-07-08 00:57:08', '2023-07-08 00:57:08'),
(5, 'Farhan Rizky Ramadhan', '_farhanfarhan_', 'pegawai', 'farhan@gmail.com', NULL, '$2y$10$G0A2Midk66j1UbCeV/FSi.ch/lkeHVVwmk3AJQyWd5Q99uWqIbJRW', NULL, '2023-07-08 00:58:05', '2023-07-08 00:58:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
