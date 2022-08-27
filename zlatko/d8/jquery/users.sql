-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 09:26 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `position`, `salary`) VALUES
(1, 'Billy Silly', 'programmer', 10006),
(2, 'Kate Bush', 'programmer', 10004),
(3, 'Marcus Katowize', 'admin', 100054),
(4, 'Ivan Kozacev', 'project manager', 100),
(5, 'Marko Markowich', 'boss', 1000),
(6, 'Markos Baikso', 'programmer', 1000),
(7, 'Dark Angel', 'programmer', 1000),
(8, 'John Smith', 'programmer', 1000),
(9, 'vts', 'it manager', 1000),
(10, 'Big monster', 'boss', 1000),
(11, 'Big monster', 'boss', 1000),
(28, 'vts6', 'boss', 1000),
(29, 'vts6', 'boss', 1000),
(30, 'vts6', 'boss', 1000),
(74, 'mar', 'admin', 0),
(75, 'VTS VTS', 'programmer', 0),
(76, 'VTS VTS', 'programmer', 0),
(77, 'VTS VTS', 'programmer', 0),
(78, 'VTS VTS', 'programmer', 0),
(79, 'VTS VTS', 'programmer', 0),
(80, 'VTS VTS', 'programmer', 0),
(81, 'VTS VTS', 'programmer', 0),
(82, 'VTS VTS', 'programmer', 0),
(83, 'VTS VTS', 'programmer', 0),
(84, 'VTS VTS', 'programmer', 0),
(85, 'VTS VTS', 'programmer', 0),
(86, 'VTS VTS', 'programmer', 0),
(87, 'VTS VTS', 'programmer', 0),
(88, 'VTS VTS', 'programmer', 0),
(89, 'VTS VTS', 'programmer', 0),
(90, 'VTS VTS', 'programmer', 0),
(91, 'VTS VTS', 'programmer', 0),
(92, 'vts', 'vts', 0),
(93, 'vts', 'vts', 0),
(94, 'vts', 'vts', 0),
(95, 'vts', 'vts', 0),
(96, 'vts', 'vts', 0),
(97, 'vts', 'vts', 0),
(98, 'vts', 'vts', 0),
(99, 'vts', 'vts', 0),
(100, 'vts', 'vts', 0),
(101, 'vts', 'vts', 0),
(102, 'vts', 'vts', 0),
(103, 'vts', 'vts', 0),
(104, 'vts', 'vts', 0),
(105, 'vts', 'vts', 0),
(106, 'vts', 'vts', 0),
(107, 'nikola', 'nikola', 0),
(108, 'nikola', 'nikola', 0),
(109, 'nikola', 'nikola', 0),
(110, 'nikola', 'nikola', 0),
(111, 'nikola', 'nikola', 0),
(112, 'nikola', 'nikola', 0),
(113, 'nikola', 'nikola', 0),
(114, 'nikola', 'nikola', 0),
(115, 'nikola', 'nikola', 0),
(116, 'nikola', 'nikola', 0),
(117, 'nikola', 'nikola', 0),
(118, 'nikola', 'nikola', 0),
(119, 'nikola', 'nikola', 0),
(120, 'nikola', 'nikola', 0),
(121, 'nikola', 'nikola', 0),
(122, 'vts', 'vts', 0),
(123, '12', '22', 0),
(124, '12', '22', 0),
(125, '12', '22', 0),
(126, '12', '22', 0),
(127, '3', '3', 0),
(128, '3', '3', 0),
(129, '3', '3', 0),
(130, '3', '3', 0),
(131, 'vtsss', 'ssss', 0),
(132, 'vtsss', 'ssss', 0),
(133, 'vtsss', 'ssss', 0),
(134, 'vtsss', 'ssss', 0),
(135, 'vtsss', 'ssss', 0),
(136, 'vts', 'programmer', 0),
(137, '1213', '123', 0),
(138, '1213', '123', 0),
(139, '1213', '123', 0),
(140, '1213', '123', 0),
(141, '1213', '123', 0),
(142, '1213', '123', 0),
(143, '1213', '123', 0),
(144, '1213', '123', 0),
(145, 'vtv', 'vtt', 0),
(146, 'vtv', 'vtt', 0),
(147, 'vtv', 'vtt', 0),
(148, 'vtv', 'vtt', 0),
(149, '5', '45', 0),
(150, 'rt', 'rt', 0);

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
