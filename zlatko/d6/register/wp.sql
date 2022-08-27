-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 09:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `code` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `registration_expires` datetime NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT 0,
  `new_password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `code_password` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `new_password_expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `firstname`, `lastname`, `password`, `email`, `code`, `registration_expires`, `active`, `new_password`, `code_password`, `new_password_expires`) VALUES
(2, 'vts', 'vts', 'vts', '', 'vts@gmail.com', '', '2018-12-06 13:52:22', 1, '', '', '0000-00-00 00:00:00'),
(3, 'vts2', 'vts', '', '', 'vts@vtsss.com', '', '2018-12-25 00:00:00', 1, '', '', '0000-00-00 00:00:00'),
(4, 'vts2', 'vts', '', '', 'vts@vtsss.com', '', '2018-12-25 00:00:00', 1, '', '', '0000-00-00 00:00:00'),
(5, 'vts2', 'vts', '', '', 'vts@vtsss.com', '', '2018-12-25 00:00:00', 1, '', '', '0000-00-00 00:00:00'),
(6, 'vts2', 'vts', '', '', 'vts@vtsss.com', '', '2018-12-25 20:22:43', 1, '', '', '0000-00-00 00:00:00'),
(7, 'vts2', 'vts', 'vtsss', '', 'vts@vtsss.com', '', '2018-12-25 20:23:37', 1, '', '', '0000-00-00 00:00:00'),
(8, 'vts2', 'vts', 'vtsss', '', 'vts@vtsss.com', '', '2018-12-25 20:24:55', 1, '', '', '0000-00-00 00:00:00'),
(9, 'vts1', 'vts1fn', 'vts1ln', '', 'vts1@vts.com', '', '2019-01-01 00:00:00', 1, '', '', '0000-00-00 00:00:00'),
(10, 'vts2', 'vts2fn', 'vts2ln', '', 'vts2@vts.com', '', '2019-01-01 00:00:00', 1, '', '', '0000-00-00 00:00:00'),
(12, 'vts1', 'vts1fn', 'vts1ln', '', 'vts1@vts.com', '', '2019-01-01 10:00:00', 1, '', '', '0000-00-00 00:00:00'),
(13, 'vts2', 'vts2fn', 'vts2ln', '', 'vts2@vts.com', '', '2019-01-02 11:00:00', 1, '', '', '0000-00-00 00:00:00'),
(15, 'vts2', 'vts', 'vtsss', '', 'vts@vtsss.com', '', '2018-12-26 12:46:16', 1, '', '', '0000-00-00 00:00:00'),
(16, 'vts2', 'vts', 'vtsss', '', 'vts@vtsss.com', '', '2018-12-26 12:47:49', 1, '', '', '0000-00-00 00:00:00'),
(17, 'vts2', 'vts', 'vtsss', '', 'vts@vtsss.com', '', '2018-12-26 12:47:52', 1, '', '', '0000-00-00 00:00:00'),
(18, 'vts2', 'vts', 'vtsss', '', 'vts@vtsss.com', '', '2018-12-26 12:47:52', 1, '', '', '0000-00-00 00:00:00'),
(19, 'vts2', 'vts', 'vtsss', '', 'vts@vtsss.com', '', '2018-12-26 12:47:53', 1, '', '', '0000-00-00 00:00:00'),
(20, 'vts2', 'vts', 'vtsss', '', 'vts@vtsss.com', '', '2018-12-26 12:47:53', 1, '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_web`
--

CREATE TABLE `users_web` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `token` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `registration_expires` datetime NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT 0,
  `code_password` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `new_password_expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_web`
--

INSERT INTO `users_web` (`id_user`, `username`, `firstname`, `lastname`, `password`, `email`, `token`, `registration_expires`, `active`, `code_password`, `new_password_expires`) VALUES
(1, 'john', 'John', 'Malkowich', '$2y$10$Lrtl9YZAjyjp8ptP6Jg4CeRd3PXHcBff2et007wuj7Cce97SZ0zfq', 'john@gmail.com', '', '2021-04-17 21:53:58', 1, '', '2021-04-17 21:53:58'),
(0, 'vts', 'vts', 'vts', '$2y$10$6NOPvRzK58kO6H4Fxs60jeDgSr7oyxwu0ljoA7IPks/KcL5QRbhoK', 'vts@gg.com', '', '0000-00-00 00:00:00', 1, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_email_failure`
--

CREATE TABLE `user_email_failure` (
  `id_user_email_failure` int(11) NOT NULL,
  `id_user_web` int(11) NOT NULL,
  `date_time_added` datetime NOT NULL,
  `date_time_tried` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
