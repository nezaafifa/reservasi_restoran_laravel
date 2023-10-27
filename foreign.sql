-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2023 pada 03.46
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
-- Database: `foreign`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `name`, `description`) VALUES
(4, 'Foreign Resto', 'The restaurant is a place that serves food and drinks complete with various comfortable facilities so that guests who come will feel at home while eating a meal. There are many restaurants that carry their mainstay menus such as seafood, processed chicken, Japanese food, Korean or even fast food restaurants. Generally, a restaurant will be designed in such a way that it looks more exclusive compared to ordinary food stalls. Apart from that, in a restaurant you will usually be served by a uniformed waiter/waitress and the menu will be cooked directly by a professional chef. For those of you who don\'t know, the following will explain the meaning of a restaurant, its purpose, types, products offered, purpose and differences from ordinary restaurants.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chef`
--

CREATE TABLE `chef` (
  `id` int(20) NOT NULL,
  `img_chef` varchar(400) NOT NULL,
  `name` varchar(200) NOT NULL,
  `profesi` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chef`
--

INSERT INTO `chef` (`id`, `img_chef`, `name`, `profesi`, `description`) VALUES
(4, 'uploads/1/2023-06/c8cxPD5ddeTfrkx9.jpg', 'walter chef', 'master chef', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'),
(5, 'uploads/1/2023-06/sEcMMNp005hGVlTI.jpg', 'Sarah Jhonson', 'Patissier', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'uploads/1/2023-06/218VArn2x0RlpmfH.jpg', 'William Anderson', 'cook', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'maulia', 'tes@mail.com', 'nhnhnhnhnhnhnhnh', 'dcfdddf'),
(2, 'maulia', 'nezzaafifa@mail.com', 'nhnhnhnhnhnhnhnh', 'wdergtyujyhtgtr'),
(3, 'nauval', 'nauval@gmail.com', 'bagus', '2'),
(4, 'afifa', 'nezzaafifa@mail.com', 'bagus', 'njkklk'),
(5, 'maulia', 'nesacantik@gmail.com', 'nhnhnhnhnhnhnhnh', 'inpoooooo'),
(6, 'maulia', 'nesacantik@gmail.com', 'nhnhnhnhnhnhnhnh', 'inpooooooo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(20) NOT NULL,
  `img_menu` varchar(500) NOT NULL,
  `price` varchar(300) NOT NULL,
  `ingredients` varchar(300) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `img_menu`, `price`, `ingredients`, `name`) VALUES
(5, 'uploads/1/2023-06/Xr2diDJbmmKHdjQy.jpg', '$5.59', 'lorem, lobster, ipsum, dolor', 'lobster roll'),
(6, 'uploads/1/2023-06/qtYykquxkvkzaf5U.jpg', '$2.50', 'Sayur, buah, tomato, mayones', 'spinach salad'),
(7, 'uploads/1/2023-06/6VP2RdNf17yi1T2V.jpg', '$2.55', 'lorem, bread, ipsum, dolor', 'bread barrel'),
(8, 'uploads/1/2023-06/s4oFebxHw3V2hrf0.jpg', '$2.40', 'lorem, moxarella, ipsum, dolor', 'mozarella'),
(9, 'uploads/1/2023-06/LiVT8Pzp1pSk5yxe.jpg', '$9.50', 'lorem, tuscan, ipsum, dolor', 'tuscan grilled'),
(10, 'uploads/1/2023-06/bV7Mrzczz1qaDjXr.jpg', '$4.30', 'lorem, cake, ipsum, dolor', 'cake');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `password`, `email`, `username`) VALUES
(2, '301205', 'foreignresto@gmail.com', 'nezza'),
(3, '112233', 'foreignresto@gmail.com', 'nauval');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `people` int(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `email`, `phone`, `date`, `time`, `people`, `message`, `created_at`) VALUES
(1, 'nesa', 'nesacantik@gmail.com', '08974637493', '2023-06-21', '16:37:00.000000', 2, 'inpoooooo', '2023-06-14 11:33:48'),
(2, 'afifa', 'nezzaafifa@mail.com', '08974637493', '2023-06-29', '15:35:00.000000', 3, 'gdsfudiwahduwfhrdgfewhryqwet', '2023-06-16 13:33:45'),
(3, 'nesa', 'nezzaafifa@mail.com', '08954843524', '2023-10-11', '16:30:00.000000', 2, 'saya mau coklat', '2023-10-11 12:25:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `chef`
--
ALTER TABLE `chef`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
