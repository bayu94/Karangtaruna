-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2017 at 12:26 PM
-- Server version: 5.5.55-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_karangtaruna`
--

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
`kecamatan_id` int(5) NOT NULL,
  `kecamatan_nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kecamatan_id`, `kecamatan_nama`) VALUES
(1, 'Kebayoran Baru'),
(2, 'Kebayoran Lama'),
(3, 'Pesanggrahan'),
(4, 'Cilandak'),
(5, 'Pasar Minggu'),
(6, 'Jagakarsa'),
(7, 'Mampang Prapatan'),
(8, 'Pancoran');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
`kelurahan_id` int(5) NOT NULL,
  `kelurahan_nama` varchar(30) DEFAULT NULL,
  `kecamatan_id` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`kelurahan_id`, `kelurahan_nama`, `kecamatan_id`) VALUES
(1, 'Selong', 1),
(2, 'Gunung', 1),
(3, 'Kramat Pela', 1),
(4, 'Gandaria Utara', 1),
(5, 'Cipete Utara', 1),
(6, 'Pulo', 1),
(7, 'Melawai', 1),
(8, 'Petogogan', 1),
(9, 'Rawa Barat', 1),
(10, 'Senayan', 1),
(11, 'Grogol Utara', 2),
(12, 'Grogol Selatan', 2),
(13, 'Cipulir', 2),
(14, 'Kebayoran Lama Utara', 2),
(15, 'Kebayoran Lama Selatan', 2),
(16, 'Pondok Pinang', 2),
(18, 'Ulujami', 3),
(19, 'Petukangan Utara', 3),
(20, 'Petukangan Selatan', 3),
(21, 'Pesanggrahan', 3),
(22, 'Bintaro', 3),
(23, 'Cipete Selatan', 4),
(24, 'Gandaria Selatan', 4),
(25, 'Cilandak Barat', 4),
(26, 'Lebak Bulus', 4),
(27, 'Pondok Labu', 4),
(28, 'Pejaten Barat', 5),
(29, 'Pejaten Timur', 5),
(30, 'Pasar Minggu', 5),
(31, 'Kebagusan', 5),
(32, 'Jati Padang', 5),
(33, 'Ragunan', 5),
(34, 'Cilandak Timur', 5),
(35, 'Tanjung Barat', 6),
(36, 'Lenteng Agung', 6),
(37, 'Jagakarsa', 6),
(38, 'Ciganjur', 6),
(39, 'Srengseng Sawah', 6),
(40, 'Cipedak', 6),
(41, 'Kuningan Barat', 7),
(42, 'Pela Mampang', 7),
(43, 'Bangka', 7),
(44, 'Tegal Parang', 7),
(45, 'Mampang Prapatan', 7),
(46, 'Kalibata', 8),
(47, 'Rawa Jati', 8),
(48, 'Duren Tiga', 8),
(49, 'Cikoko', 8),
(50, 'Pengadegan', 8),
(51, 'Pancoran', 8),
(52, 'Tebet Barat', 9),
(53, 'Tebet Timur', 9),
(54, 'Kebon Baru', 9),
(55, 'Bukit Duri', 9),
(56, 'Manggarai', 9),
(57, 'Manggarai Selatan', 9),
(58, 'Menteng Dalam', 9),
(59, 'Setiabudi', 10),
(60, 'Karet', 10),
(61, 'Karet Semanggi', 10),
(62, 'Karet Kuningan', 10),
(63, 'Kuningan Timur', 10),
(64, 'Menteng Atas', 10),
(65, 'Pasar Manggis', 10),
(66, 'Guntur', 10),
(67, 'tes testing', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`pesan_id` int(5) NOT NULL,
  `pesan_judul` varchar(100) DEFAULT NULL,
  `pesan_tema` varchar(100) DEFAULT NULL,
  `pesan_isi` text,
  `user_id` int(5) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL,
  `kecamatan_id` int(3) NOT NULL,
  `kelurahan_id` int(3) NOT NULL,
  `rw_id` int(3) NOT NULL,
  `rt_id` int(3) NOT NULL,
  `status_id` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`pesan_id`, `pesan_judul`, `pesan_tema`, `pesan_isi`, `user_id`, `tanggal`, `status`, `kecamatan_id`, `kelurahan_id`, `rw_id`, `rt_id`, `status_id`) VALUES
(1, 'tes', 'testing', 'Ini acara kelurahan', 1, '2017-06-22 14:24:23', 2, 0, 0, 0, 0, 0),
(2, ' ke 2', 'perubahan lingkungan', '<p>dasdfs \\</p>\r\n\r\n<p><strong>sdfasdfsdf&nbsp;</strong></p>\r\n\r\n<p><strong><em>sdfsadf</em></strong></p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>Tes</td>\r\n			<td>tes</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2017-06-23 05:10:22', 3, 0, 0, 0, 2, 0),
(3, 'Testing kesekian', 'kesekian', '<p>dalam rangka kesekian tes</p>\r\n', 1, '2017-06-22 21:32:30', 1, 1, 1, 1, 1, 0),
(4, 'Ngetes', 'Ngetes tambahan', '<p>Dalamrangka ngetes tambahan</p>\r\n\r\n<p>jadi harus di tes lagi</p>\r\n', 1, '2017-06-22 21:23:22', 1, 1, 1, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE IF NOT EXISTS `rt` (
`rt_id` int(5) NOT NULL,
  `rt_nama` varchar(30) DEFAULT NULL,
  `kecamatan_id` int(5) NOT NULL,
  `kelurahan_id` int(5) NOT NULL,
  `rw_id` int(5) DEFAULT NULL,
  `rt_no` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=254 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`rt_id`, `rt_nama`, `kecamatan_id`, `kelurahan_id`, `rw_id`, `rt_no`) VALUES
(1, '001', 1, 1, 1, '005'),
(2, '002', 0, 0, 1, '0'),
(3, '001', 0, 0, 2, '0'),
(8, '002', 0, 0, 4, '0'),
(9, '001', 0, 0, 5, '0'),
(10, '002', 0, 0, 5, '0'),
(11, '001', 0, 0, 6, '0'),
(12, '002', 0, 0, 6, '0'),
(13, '001', 0, 0, 7, '0'),
(14, '002', 0, 0, 7, '0'),
(15, '001', 0, 0, 8, '0'),
(16, '002', 0, 0, 8, '0'),
(17, '001', 0, 0, 9, '0'),
(18, '002', 0, 0, 9, '0'),
(19, '001', 0, 0, 10, '0'),
(20, '002', 0, 0, 10, '0'),
(21, '001', 0, 0, 11, '0'),
(22, '002', 0, 0, 11, '0'),
(23, '001', 0, 0, 12, '0'),
(24, '002', 0, 0, 12, '0'),
(25, '001', 0, 0, 13, '0'),
(26, '002', 0, 0, 13, '0'),
(27, '001', 0, 0, 14, '0'),
(28, '002', 0, 0, 14, '0'),
(29, '001', 0, 0, 15, '0'),
(30, '002', 0, 0, 15, '0'),
(31, '001', 0, 0, 16, '0'),
(32, '002', 0, 0, 16, '0'),
(33, '001', 0, 0, 17, '0'),
(34, '002', 0, 0, 17, '0'),
(35, '001', 0, 0, 18, '0'),
(36, '002', 0, 0, 18, '0'),
(37, '001', 0, 0, 19, '0'),
(38, '002', 0, 0, 19, '0'),
(39, '001', 0, 0, 20, '0'),
(40, '002', 0, 0, 20, '0'),
(41, '001', 0, 0, 21, '0'),
(42, '002', 0, 0, 21, '0'),
(43, '001', 0, 0, 22, '0'),
(44, '002', 0, 0, 22, '0'),
(45, '001', 0, 0, 23, '0'),
(46, '002', 0, 0, 23, '0'),
(47, '001', 0, 0, 24, '0'),
(48, '002', 0, 0, 24, '0'),
(49, '001', 0, 0, 25, '0'),
(50, '002', 0, 0, 25, '0'),
(51, '001', 0, 0, 26, '0'),
(52, '002', 0, 0, 26, '0'),
(53, '001', 0, 0, 27, '0'),
(54, '002', 0, 0, 27, '0'),
(55, '001', 0, 0, 28, '0'),
(56, '002', 0, 0, 28, '0'),
(57, '001', 0, 0, 29, '0'),
(58, '002', 0, 0, 29, '0'),
(59, '001', 0, 0, 30, '0'),
(60, '002', 0, 0, 30, '0'),
(61, '001', 0, 0, 31, '0'),
(62, '002', 0, 0, 31, '0'),
(63, '001', 0, 0, 32, '0'),
(64, '002', 0, 0, 32, '0'),
(65, '001', 0, 0, 33, '0'),
(66, '002', 0, 0, 33, '0'),
(67, '001', 0, 0, 34, '0'),
(68, '002', 0, 0, 34, '0'),
(69, '001', 0, 0, 35, '0'),
(70, '002', 0, 0, 35, '0'),
(71, '001', 0, 0, 36, '0'),
(72, '002', 0, 0, 36, '0'),
(73, '001', 0, 0, 37, '0'),
(74, '002', 0, 0, 37, '0'),
(75, '001', 0, 0, 38, '0'),
(76, '002', 0, 0, 38, '0'),
(77, '001', 0, 0, 39, '0'),
(78, '002', 0, 0, 39, '0'),
(79, '001', 0, 0, 40, '0'),
(80, '002', 0, 0, 40, '0'),
(81, '001', 0, 0, 41, '0'),
(82, '002', 0, 0, 41, '0'),
(83, '001', 0, 0, 42, '0'),
(84, '002', 0, 0, 42, '0'),
(85, '001', 0, 0, 43, '0'),
(86, '002', 0, 0, 43, '0'),
(87, '001', 0, 0, 44, '0'),
(88, '002', 0, 0, 44, '0'),
(89, '001', 0, 0, 45, '0'),
(90, '002', 0, 0, 45, '0'),
(91, '001', 0, 0, 46, '0'),
(92, '002', 0, 0, 46, '0'),
(93, '001', 0, 0, 47, '0'),
(94, '002', 0, 0, 47, '0'),
(95, '001', 0, 0, 48, '0'),
(96, '002', 0, 0, 48, '0'),
(97, '001', 0, 0, 49, '0'),
(98, '002', 0, 0, 49, '0'),
(99, '001', 0, 0, 50, '0'),
(100, '002', 0, 0, 50, '0'),
(101, '001', 0, 0, 51, '0'),
(102, '002', 0, 0, 51, '0'),
(103, '001', 0, 0, 52, '0'),
(104, '002', 0, 0, 52, '0'),
(105, '001', 0, 0, 53, '0'),
(106, '002', 0, 0, 53, '0'),
(107, '001', 0, 0, 54, '0'),
(108, '002', 0, 0, 54, '0'),
(109, '001', 0, 0, 55, '0'),
(110, '002', 0, 0, 55, '0'),
(111, '001', 0, 0, 56, '0'),
(112, '002', 0, 0, 56, '0'),
(113, '001', 0, 0, 57, '0'),
(114, '002', 0, 0, 57, '0'),
(115, '001', 0, 0, 58, '0'),
(116, '002', 0, 0, 58, '0'),
(117, '001', 0, 0, 59, '0'),
(118, '002', 0, 0, 59, '0'),
(119, '001', 0, 0, 60, '0'),
(120, '002', 0, 0, 60, '0'),
(121, '001', 0, 0, 61, '0'),
(122, '002', 0, 0, 61, '0'),
(123, '001', 0, 0, 62, '0'),
(124, '002', 0, 0, 62, '0'),
(125, '001', 0, 0, 63, '0'),
(126, '002', 0, 0, 63, '0'),
(127, '001', 0, 0, 64, '0'),
(128, '002', 0, 0, 64, '0'),
(129, '001', 0, 0, 65, '0'),
(130, '002', 0, 0, 65, '0'),
(131, '001', 0, 0, 66, '0'),
(132, '002', 0, 0, 66, '0'),
(133, '001', 0, 0, 67, '0'),
(134, '002', 0, 0, 67, '0'),
(135, '001', 0, 0, 68, '0'),
(136, '002', 0, 0, 68, '0'),
(137, '001', 0, 0, 69, '0'),
(138, '002', 0, 0, 69, '0'),
(139, '001', 0, 0, 70, '0'),
(140, '002', 0, 0, 70, '0'),
(141, '001', 0, 0, 71, '0'),
(142, '002', 0, 0, 71, '0'),
(143, '001', 0, 0, 72, '0'),
(144, '002', 0, 0, 72, '0'),
(145, '001', 0, 0, 73, '0'),
(146, '002', 0, 0, 73, '0'),
(147, '001', 0, 0, 74, '0'),
(148, '002', 0, 0, 74, '0'),
(149, '001', 0, 0, 75, '0'),
(150, '002', 0, 0, 75, '0'),
(151, '001', 0, 0, 76, '0'),
(152, '002', 0, 0, 76, '0'),
(153, '001', 0, 0, 77, '0'),
(154, '002', 0, 0, 77, '0'),
(155, '001', 0, 0, 78, '0'),
(156, '002', 0, 0, 78, '0'),
(157, '001', 0, 0, 79, '0'),
(158, '002', 0, 0, 79, '0'),
(159, '001', 0, 0, 80, '0'),
(160, '002', 0, 0, 80, '0'),
(161, '001', 0, 0, 81, '0'),
(162, '002', 0, 0, 81, '0'),
(163, '001', 0, 0, 82, '0'),
(164, '002', 0, 0, 82, '0'),
(165, '001', 0, 0, 83, '0'),
(166, '002', 0, 0, 83, '0'),
(167, '001', 0, 0, 84, '0'),
(168, '002', 0, 0, 84, '0'),
(169, '001', 0, 0, 85, '0'),
(170, '002', 0, 0, 85, '0'),
(171, '001', 0, 0, 86, '0'),
(172, '002', 0, 0, 86, '0'),
(173, '001', 0, 0, 87, '0'),
(174, '002', 0, 0, 87, '0'),
(175, '001', 0, 0, 88, '0'),
(176, '002', 0, 0, 88, '0'),
(177, '001', 0, 0, 89, '0'),
(178, '002', 0, 0, 89, '0'),
(179, '001', 0, 0, 90, '0'),
(180, '002', 0, 0, 90, '0'),
(181, '001', 0, 0, 91, '0'),
(182, '002', 0, 0, 91, '0'),
(183, '001', 0, 0, 92, '0'),
(184, '002', 0, 0, 92, '0'),
(185, '001', 0, 0, 93, '0'),
(186, '002', 0, 0, 93, '0'),
(187, '001', 0, 0, 94, '0'),
(188, '002', 0, 0, 94, '0'),
(189, '001', 0, 0, 95, '0'),
(190, '002', 0, 0, 95, '0'),
(191, '001', 0, 0, 96, '0'),
(192, '002', 0, 0, 96, '0'),
(193, '001', 0, 0, 97, '0'),
(194, '002', 0, 0, 97, '0'),
(195, '001', 0, 0, 98, '0'),
(196, '002', 0, 0, 98, '0'),
(197, '001', 0, 0, 99, '0'),
(198, '002', 0, 0, 99, '0'),
(199, '001', 0, 0, 100, '0'),
(200, '002', 0, 0, 100, '0'),
(201, '001', 0, 0, 101, '0'),
(202, '002', 0, 0, 101, '0'),
(203, '001', 0, 0, 102, '0'),
(204, '002', 0, 0, 102, '0'),
(205, '001', 0, 0, 103, '0'),
(206, '002', 0, 0, 103, '0'),
(207, '001', 0, 0, 104, '0'),
(208, '002', 0, 0, 104, '0'),
(209, '001', 0, 0, 105, '0'),
(210, '002', 0, 0, 105, '0'),
(211, '001', 0, 0, 106, '0'),
(212, '002', 0, 0, 106, '0'),
(213, '001', 0, 0, 107, '0'),
(214, '002', 0, 0, 107, '0'),
(215, '001', 0, 0, 108, '0'),
(216, '002', 0, 0, 108, '0'),
(217, '001', 0, 0, 109, '0'),
(218, '002', 0, 0, 109, '0'),
(219, '001', 0, 0, 110, '0'),
(220, '002', 0, 0, 110, '0'),
(221, '001', 0, 0, 111, '0'),
(222, '002', 0, 0, 111, '0'),
(223, '001', 0, 0, 112, '0'),
(224, '002', 0, 0, 112, '0'),
(225, '001', 0, 0, 113, '0'),
(226, '002', 0, 0, 113, '0'),
(227, '001', 0, 0, 114, '0'),
(228, '002', 0, 0, 114, '0'),
(229, '001', 0, 0, 115, '0'),
(230, '002', 0, 0, 115, '0'),
(231, '001', 0, 0, 116, '0'),
(232, '002', 0, 0, 116, '0'),
(233, '001', 0, 0, 117, '0'),
(234, '002', 0, 0, 117, '0'),
(235, '001', 0, 0, 118, '0'),
(236, '002', 0, 0, 118, '0'),
(237, '001', 0, 0, 119, '0'),
(238, '002', 0, 0, 119, '0'),
(239, '001', 0, 0, 120, '0'),
(240, '002', 0, 0, 120, '0'),
(241, '001', 0, 0, 121, '0'),
(242, '002', 0, 0, 121, '0'),
(243, '001', 0, 0, 122, '0'),
(244, '002', 0, 0, 122, '0'),
(245, '001', 0, 0, 123, '0'),
(246, '002', 0, 0, 123, '0'),
(247, '001', 0, 0, 124, '0'),
(248, '002', 0, 0, 124, '0'),
(249, '001', 0, 0, 125, '0'),
(250, '002', 0, 0, 125, '0'),
(251, '001', 0, 0, 126, '0'),
(252, '002', 0, 0, 126, '0'),
(253, '001', 0, 0, 127, '0');

-- --------------------------------------------------------

--
-- Table structure for table `rw`
--

CREATE TABLE IF NOT EXISTS `rw` (
`rw_id` int(5) NOT NULL,
  `rw_nama` varchar(20) DEFAULT NULL,
  `kelurahan_id` int(5) DEFAULT NULL,
  `rw_no` varchar(3) NOT NULL,
  `kecamatan_id` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rw`
--

INSERT INTO `rw` (`rw_id`, `rw_nama`, `kelurahan_id`, `rw_no`, `kecamatan_id`) VALUES
(1, 'Mukidi', 1, '005', 1),
(3, 'Dedeng', 2, '004', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`status_id` int(3) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `keterangan`) VALUES
(1, 'Ketua'),
(2, 'Sekertaris'),
(3, 'ketua_jaksel');

-- --------------------------------------------------------

--
-- Table structure for table `status_agenda`
--

CREATE TABLE IF NOT EXISTS `status_agenda` (
`status_id` int(3) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_agenda`
--

INSERT INTO `status_agenda` (`status_id`, `keterangan`) VALUES
(1, 'Belum Di Setujui'),
(2, 'Di Setujui'),
(3, 'Tidak Di Setujui');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(5) NOT NULL,
  `user_nama` varchar(30) DEFAULT NULL,
  `user_jk` varchar(2) DEFAULT NULL,
  `user_pass` varchar(30) DEFAULT NULL,
  `user_level` int(2) DEFAULT NULL,
  `kecamatan_id` int(5) DEFAULT NULL,
  `kelurahan_id` int(5) DEFAULT NULL,
  `rw_id` int(5) DEFAULT NULL,
  `rt_id` int(5) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_jk`, `user_pass`, `user_level`, `kecamatan_id`, `kelurahan_id`, `rw_id`, `rt_id`, `status`) VALUES
(1, 'bayu', 'L', 'bayu', 1, 1, 1, 1, 1, 1),
(4, 'admin', 'L', 'admin', 1, 1, 1, 1, 1, 3),
(5, 'sanjaya', 'L', 'sanjaya', 1, 1, 1, 1, 1, 1),
(6, 'hanii', 'L', 'hani', 1, 1, 1, 1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
 ADD PRIMARY KEY (`kecamatan_id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
 ADD PRIMARY KEY (`kelurahan_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`pesan_id`);

--
-- Indexes for table `rt`
--
ALTER TABLE `rt`
 ADD PRIMARY KEY (`rt_id`);

--
-- Indexes for table `rw`
--
ALTER TABLE `rw`
 ADD PRIMARY KEY (`rw_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `status_agenda`
--
ALTER TABLE `status_agenda`
 ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
MODIFY `kecamatan_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
MODIFY `kelurahan_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `pesan_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rt`
--
ALTER TABLE `rt`
MODIFY `rt_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=254;
--
-- AUTO_INCREMENT for table `rw`
--
ALTER TABLE `rw`
MODIFY `rw_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `status_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `status_agenda`
--
ALTER TABLE `status_agenda`
MODIFY `status_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
