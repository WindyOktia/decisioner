-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2020 pada 19.28
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decisioner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_co`
--

CREATE TABLE `as_co` (
  `id_as_co` int(11) NOT NULL,
  `tipe` int(11) NOT NULL,
  `indeks` int(11) NOT NULL,
  `persentase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_co`
--

INSERT INTO `as_co` (`id_as_co`, `tipe`, `indeks`, `persentase`) VALUES
(1, 1, 1, 6),
(2, 1, 1, 16),
(3, 1, 1, 30),
(4, 1, 2, 6),
(5, 1, 2, 15),
(6, 1, 2, 25),
(7, 1, 3, 8),
(8, 1, 3, 4),
(9, 1, 3, 2),
(10, 2, 1, 6),
(11, 2, 1, 16),
(12, 2, 1, 30),
(13, 2, 2, 6),
(14, 2, 2, 15),
(15, 2, 2, 25),
(16, 2, 3, 8),
(17, 2, 3, 4),
(18, 2, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `config`
--

CREATE TABLE `config` (
  `id_config` int(11) NOT NULL,
  `config` text NOT NULL,
  `val` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `config`
--

INSERT INTO `config` (`id_config`, `config`, `val`) VALUES
(1, 'set_user_bank', '2'),
(2, 'set_user_saham', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `eks_bank`
--

CREATE TABLE `eks_bank` (
  `id_eks_bank` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `tipe` int(11) NOT NULL COMMENT '1=no-reference, 2=reference',
  `indeks` int(11) NOT NULL COMMENT '1=SBS,2=SBL,3=Ras',
  `persentase` int(11) NOT NULL COMMENT '(%)',
  `jawaban` int(11) NOT NULL COMMENT '1=tarik,0=tahan',
  `waktu_isi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `eks_bank`
--

INSERT INTO `eks_bank` (`id_eks_bank`, `id_user`, `session`, `tipe`, `indeks`, `persentase`, `jawaban`, `waktu_isi`) VALUES
(1, 14, 1, 1, 1, 6, 1, '2020-03-13 09:21:24'),
(2, 14, 1, 1, 1, 16, 1, '2020-03-13 09:28:25'),
(3, 14, 1, 1, 1, 30, 0, '2020-03-13 09:28:41'),
(4, 14, 1, 1, 2, 6, 1, '2020-03-13 09:29:34'),
(5, 14, 1, 1, 2, 15, 1, '2020-03-13 09:30:48'),
(6, 14, 1, 1, 2, 25, 0, '2020-03-14 23:42:44'),
(7, 14, 1, 1, 3, 8, 0, '2020-03-14 23:42:59'),
(8, 14, 1, 1, 3, 4, 0, '2020-03-14 23:45:09'),
(9, 14, 1, 1, 3, 2, 0, '2020-03-14 23:45:31'),
(10, 15, 1, 1, 1, 6, 0, '2020-03-15 00:12:47'),
(11, 15, 1, 1, 1, 16, 0, '2020-03-15 00:13:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `eks_saham`
--

CREATE TABLE `eks_saham` (
  `id_eks_saham` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `tipe` int(11) NOT NULL COMMENT '1=no-pros, 2=pros, 3=bank_no_ref, 4=bank_ref',
  `indeks` int(11) NOT NULL COMMENT '1=SBS,2=SBL,3=Ras',
  `persentase` int(11) NOT NULL COMMENT '(%)',
  `jawaban` int(11) NOT NULL COMMENT '1=jual,0=tahan',
  `waktu_isi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `eks_saham`
--

INSERT INTO `eks_saham` (`id_eks_saham`, `id_user`, `session`, `tipe`, `indeks`, `persentase`, `jawaban`, `waktu_isi`) VALUES
(19, 12, 1, 1, 1, 6, 1, '2020-03-14 21:36:54'),
(20, 12, 1, 1, 1, 16, 0, '2020-03-14 21:36:55'),
(21, 12, 1, 1, 1, 30, 1, '2020-03-14 21:36:56'),
(22, 12, 1, 1, 2, 6, 1, '2020-03-14 21:37:01'),
(23, 12, 1, 1, 2, 15, 0, '2020-03-14 21:37:02'),
(24, 12, 1, 1, 2, 25, 1, '2020-03-14 21:37:03'),
(25, 12, 1, 1, 3, 8, 1, '2020-03-14 21:37:09'),
(26, 12, 1, 1, 3, 4, 0, '2020-03-14 21:37:10'),
(27, 12, 1, 1, 3, 2, 1, '2020-03-14 21:37:11'),
(28, 12, 1, 2, 1, 6, 1, '2020-03-14 21:39:42'),
(29, 12, 1, 2, 1, 16, 0, '2020-03-14 21:39:43'),
(30, 12, 1, 2, 1, 30, 1, '2020-03-14 21:39:44'),
(31, 12, 1, 2, 2, 6, 1, '2020-03-14 21:39:53'),
(32, 12, 1, 2, 2, 15, 0, '2020-03-14 21:39:54'),
(33, 12, 1, 2, 2, 25, 0, '2020-03-14 21:39:56'),
(34, 12, 1, 2, 3, 8, 1, '2020-03-14 21:40:28'),
(35, 12, 1, 2, 3, 4, 1, '2020-03-14 21:40:29'),
(36, 12, 1, 2, 3, 2, 0, '2020-03-14 21:40:30'),
(37, 12, 1, 3, 1, 6, 0, '2020-03-14 21:53:19'),
(38, 12, 1, 3, 1, 16, 1, '2020-03-13 09:28:34'),
(39, 12, 1, 3, 1, 30, 1, '2020-03-13 09:28:44'),
(40, 12, 1, 3, 2, 6, 1, '2020-03-13 09:30:00'),
(41, 12, 1, 3, 2, 15, 0, '2020-03-13 09:31:04'),
(42, 12, 1, 3, 2, 25, 1, '2020-03-13 09:31:34'),
(43, 13, 1, 3, 1, 6, 1, '2020-03-15 00:12:49'),
(44, 13, 1, 3, 1, 16, 0, '2020-03-15 00:13:41'),
(45, 13, 1, 3, 1, 30, 1, '2020-03-14 23:39:07'),
(46, 13, 1, 3, 2, 6, 1, '2020-03-14 23:39:53'),
(47, 13, 1, 3, 2, 15, 0, '2020-03-14 23:40:18'),
(48, 13, 1, 3, 2, 25, 0, '2020-03-14 23:41:22'),
(49, 13, 1, 3, 3, 8, 1, '2020-03-14 23:43:10'),
(50, 13, 1, 3, 3, 4, 1, '2020-03-14 23:45:16'),
(51, 13, 1, 3, 3, 2, 1, '2020-03-14 23:50:26'),
(52, 13, 1, 1, 1, 6, 1, '2020-03-15 00:19:29'),
(53, 13, 1, 1, 1, 16, 1, '2020-03-15 00:19:30'),
(54, 13, 1, 1, 1, 30, 0, '2020-03-15 00:19:32'),
(55, 13, 1, 1, 2, 6, 1, '2020-03-15 00:19:37'),
(56, 13, 1, 1, 2, 15, 1, '2020-03-15 00:19:39'),
(57, 13, 1, 1, 2, 25, 0, '2020-03-15 00:19:39'),
(58, 13, 1, 1, 3, 8, 1, '2020-03-15 00:19:44'),
(59, 13, 1, 1, 3, 4, 1, '2020-03-15 00:19:45'),
(60, 13, 1, 1, 3, 2, 1, '2020-03-15 00:19:46'),
(61, 13, 1, 2, 1, 6, 0, '2020-03-15 00:19:56'),
(62, 13, 1, 2, 1, 16, 1, '2020-03-15 00:20:01'),
(63, 13, 1, 2, 1, 30, 1, '2020-03-15 00:20:00'),
(64, 13, 1, 2, 2, 6, 1, '2020-03-15 00:20:07'),
(65, 13, 1, 2, 2, 15, 0, '2020-03-15 00:20:11'),
(66, 13, 1, 2, 2, 25, 1, '2020-03-15 00:20:12'),
(67, 13, 1, 2, 3, 8, 0, '2020-03-15 00:20:20'),
(68, 13, 1, 2, 3, 4, 1, '2020-03-15 00:20:24'),
(69, 13, 1, 2, 3, 2, 0, '2020-03-15 00:20:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_session`
--

CREATE TABLE `set_session` (
  `id_set_session` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `tipe` int(11) NOT NULL,
  `indeks` int(11) NOT NULL,
  `persentase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `set_session`
--

INSERT INTO `set_session` (`id_set_session`, `session`, `tipe`, `indeks`, `persentase`) VALUES
(1, 1, 1, 1, 6),
(2, 1, 1, 1, 16),
(3, 1, 1, 1, 30),
(4, 1, 1, 2, 6),
(5, 1, 1, 2, 15),
(6, 1, 1, 2, 25),
(7, 1, 1, 3, 8),
(8, 1, 1, 3, 4),
(9, 1, 1, 3, 2),
(10, 1, 2, 1, 6),
(11, 1, 2, 1, 16),
(12, 1, 2, 1, 30),
(13, 1, 2, 2, 6),
(14, 1, 2, 2, 15),
(15, 1, 2, 2, 25),
(16, 1, 2, 3, 8),
(17, 1, 2, 3, 4),
(18, 1, 2, 3, 2),
(19, 2, 1, 1, 6),
(20, 2, 1, 1, 16),
(21, 2, 1, 1, 30),
(22, 2, 1, 2, 6),
(23, 2, 1, 2, 15),
(24, 2, 1, 2, 25),
(25, 2, 1, 3, 8),
(26, 2, 1, 3, 4),
(27, 2, 1, 3, 2),
(28, 2, 2, 1, 6),
(29, 2, 2, 1, 16),
(30, 2, 2, 1, 30),
(31, 2, 2, 2, 6),
(32, 2, 2, 2, 15),
(33, 2, 2, 2, 25),
(34, 2, 2, 3, 8),
(35, 2, 2, 3, 4),
(36, 2, 2, 3, 2),
(37, 3, 1, 1, 6),
(38, 3, 1, 1, 16),
(39, 3, 1, 1, 30),
(40, 3, 1, 2, 6),
(41, 3, 1, 2, 15),
(42, 3, 1, 2, 25),
(43, 3, 1, 3, 8),
(44, 3, 1, 3, 4),
(45, 3, 1, 3, 2),
(46, 3, 2, 1, 6),
(47, 3, 2, 1, 16),
(48, 3, 2, 1, 30),
(49, 3, 2, 2, 6),
(50, 3, 2, 2, 15),
(51, 3, 2, 2, 25),
(52, 3, 2, 3, 8),
(53, 3, 2, 3, 4),
(54, 3, 2, 3, 2),
(55, 4, 1, 1, 6),
(56, 4, 1, 1, 16),
(57, 4, 1, 1, 30),
(58, 4, 1, 2, 6),
(59, 4, 1, 2, 15),
(60, 4, 1, 2, 25),
(61, 4, 1, 3, 8),
(62, 4, 1, 3, 4),
(63, 4, 1, 3, 2),
(64, 4, 2, 1, 6),
(65, 4, 2, 1, 16),
(66, 4, 2, 1, 30),
(67, 4, 2, 2, 6),
(68, 4, 2, 2, 15),
(69, 4, 2, 2, 25),
(70, 4, 2, 3, 8),
(71, 4, 2, 3, 4),
(72, 4, 2, 3, 2),
(73, 5, 1, 1, 6),
(74, 5, 1, 1, 16),
(75, 5, 1, 1, 30),
(76, 5, 1, 2, 6),
(77, 5, 1, 2, 15),
(78, 5, 1, 2, 25),
(79, 5, 1, 3, 8),
(80, 5, 1, 3, 4),
(81, 5, 1, 3, 2),
(82, 5, 2, 1, 6),
(83, 5, 2, 1, 16),
(84, 5, 2, 1, 30),
(85, 5, 2, 2, 6),
(86, 5, 2, 2, 15),
(87, 5, 2, 2, 25),
(88, 5, 2, 3, 8),
(89, 5, 2, 3, 4),
(90, 5, 2, 3, 2),
(91, 6, 1, 1, 6),
(92, 6, 1, 1, 16),
(93, 6, 1, 1, 30),
(94, 6, 1, 2, 6),
(95, 6, 1, 2, 15),
(96, 6, 1, 2, 25),
(97, 6, 1, 3, 8),
(98, 6, 1, 3, 4),
(99, 6, 1, 3, 2),
(100, 6, 2, 1, 6),
(101, 6, 2, 1, 16),
(102, 6, 2, 1, 30),
(103, 6, 2, 2, 6),
(104, 6, 2, 2, 15),
(105, 6, 2, 2, 25),
(106, 6, 2, 3, 8),
(107, 6, 2, 3, 4),
(108, 6, 2, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` text NOT NULL,
  `access_code` text NOT NULL,
  `session` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `access_code`, `session`, `role`, `status`) VALUES
(3, 'Admin', '00000', 0, 1, 0),
(12, 'Responden', 'VZ24L', 1, 2, 0),
(13, 'Responden', 'YWBVA', 1, 2, 1),
(14, 'Responden', 'K2NCF', 1, 3, 0),
(15, 'Responden', 'V1YQP', 1, 3, 0);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_count_each`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_count_each` (
`6_SBS_no` decimal(22,0)
,`16_SBS_no` decimal(22,0)
,`30_SBS_no` decimal(22,0)
,`6_SBL_no` decimal(22,0)
,`15_SBL_no` decimal(22,0)
,`25_SBL_no` decimal(22,0)
,`8_Ras_no` decimal(22,0)
,`4_Ras_no` decimal(22,0)
,`2_Ras_no` decimal(22,0)
,`6_SBS_ref` decimal(22,0)
,`16_SBS_ref` decimal(22,0)
,`30_SBS_ref` decimal(22,0)
,`6_SBL_ref` decimal(22,0)
,`15_SBL_ref` decimal(22,0)
,`25_SBL_ref` decimal(22,0)
,`8_Ras_ref` decimal(22,0)
,`4_Ras_ref` decimal(22,0)
,`2_Ras_ref` decimal(22,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_done`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_done` (
`jml_res_done` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_jml_res`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_jml_res` (
`jml_res` bigint(21)
,`tipe` bigint(21)
,`indeks` bigint(21)
,`persentase` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_real_bank`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_real_bank` (
`tipe` int(11)
,`indeks` int(11)
,`persentase` int(11)
,`jml_res` bigint(21)
,`tarik` decimal(22,0)
,`tahan` decimal(22,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_real_bank_ses`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_real_bank_ses` (
`session` int(11)
,`tipe` int(11)
,`indeks` int(11)
,`persentase` int(11)
,`jml_res` bigint(21)
,`tarik` decimal(22,0)
,`tahan` decimal(22,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_res_bank`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_res_bank` (
`tipe` int(11)
,`indeks` int(11)
,`persentase` int(11)
,`jml_res` bigint(21)
,`tarik` decimal(22,0)
,`tahan` decimal(22,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_res_bank_ses`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_res_bank_ses` (
`session` int(11)
,`tipe` int(11)
,`indeks` int(11)
,`persentase` int(11)
,`jml_res` bigint(21)
,`tarik` decimal(22,0)
,`tahan` decimal(22,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_user_per_session`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_user_per_session` (
`session` int(11)
,`jml_user` bigint(21)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_count_each`
--
DROP TABLE IF EXISTS `v_count_each`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_count_each`  AS  select sum(case when (`eks_bank`.`tipe` = '1' and `eks_bank`.`indeks` = '1' and `eks_bank`.`persentase` = '6') then 1 else 0 end) AS `6_SBS_no`,sum(case when (`eks_bank`.`tipe` = '1' and `eks_bank`.`indeks` = '1' and `eks_bank`.`persentase` = '16') then 1 else 0 end) AS `16_SBS_no`,sum(case when (`eks_bank`.`tipe` = '1' and `eks_bank`.`indeks` = '1' and `eks_bank`.`persentase` = '30') then 1 else 0 end) AS `30_SBS_no`,sum(case when (`eks_bank`.`tipe` = '1' and `eks_bank`.`indeks` = '2' and `eks_bank`.`persentase` = '6') then 1 else 0 end) AS `6_SBL_no`,sum(case when (`eks_bank`.`tipe` = '1' and `eks_bank`.`indeks` = '2' and `eks_bank`.`persentase` = '15') then 1 else 0 end) AS `15_SBL_no`,sum(case when (`eks_bank`.`tipe` = '1' and `eks_bank`.`indeks` = '2' and `eks_bank`.`persentase` = '25') then 1 else 0 end) AS `25_SBL_no`,sum(case when (`eks_bank`.`tipe` = '1' and `eks_bank`.`indeks` = '3' and `eks_bank`.`persentase` = '8') then 1 else 0 end) AS `8_Ras_no`,sum(case when (`eks_bank`.`tipe` = '1' and `eks_bank`.`indeks` = '3' and `eks_bank`.`persentase` = '4') then 1 else 0 end) AS `4_Ras_no`,sum(case when (`eks_bank`.`tipe` = '1' and `eks_bank`.`indeks` = '3' and `eks_bank`.`persentase` = '2') then 1 else 0 end) AS `2_Ras_no`,sum(case when (`eks_bank`.`tipe` = '2' and `eks_bank`.`indeks` = '1' and `eks_bank`.`persentase` = '6') then 1 else 0 end) AS `6_SBS_ref`,sum(case when (`eks_bank`.`tipe` = '2' and `eks_bank`.`indeks` = '1' and `eks_bank`.`persentase` = '16') then 1 else 0 end) AS `16_SBS_ref`,sum(case when (`eks_bank`.`tipe` = '2' and `eks_bank`.`indeks` = '1' and `eks_bank`.`persentase` = '30') then 1 else 0 end) AS `30_SBS_ref`,sum(case when (`eks_bank`.`tipe` = '2' and `eks_bank`.`indeks` = '2' and `eks_bank`.`persentase` = '6') then 1 else 0 end) AS `6_SBL_ref`,sum(case when (`eks_bank`.`tipe` = '2' and `eks_bank`.`indeks` = '2' and `eks_bank`.`persentase` = '15') then 1 else 0 end) AS `15_SBL_ref`,sum(case when (`eks_bank`.`tipe` = '2' and `eks_bank`.`indeks` = '2' and `eks_bank`.`persentase` = '25') then 1 else 0 end) AS `25_SBL_ref`,sum(case when (`eks_bank`.`tipe` = '2' and `eks_bank`.`indeks` = '3' and `eks_bank`.`persentase` = '8') then 1 else 0 end) AS `8_Ras_ref`,sum(case when (`eks_bank`.`tipe` = '2' and `eks_bank`.`indeks` = '3' and `eks_bank`.`persentase` = '4') then 1 else 0 end) AS `4_Ras_ref`,sum(case when (`eks_bank`.`tipe` = '2' and `eks_bank`.`indeks` = '3' and `eks_bank`.`persentase` = '2') then 1 else 0 end) AS `2_Ras_ref` from `eks_bank` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_done`
--
DROP TABLE IF EXISTS `v_done`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_done`  AS  select count(distinct `eks_saham`.`id_user`) AS `jml_res_done` from `eks_saham` where `eks_saham`.`tipe` = '2' and `eks_saham`.`indeks` = '3' and `eks_saham`.`persentase` = '2' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_jml_res`
--
DROP TABLE IF EXISTS `v_jml_res`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jml_res`  AS  select count(distinct `eks_saham`.`id_user`) AS `jml_res`,count(distinct `eks_saham`.`tipe`) AS `tipe`,count(distinct `eks_saham`.`indeks`) AS `indeks`,count(distinct `eks_saham`.`persentase`) AS `persentase` from `eks_saham` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_real_bank`
--
DROP TABLE IF EXISTS `v_real_bank`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_real_bank`  AS  select `as_co`.`tipe` AS `tipe`,`as_co`.`indeks` AS `indeks`,`as_co`.`persentase` AS `persentase`,`v_res_bank`.`jml_res` AS `jml_res`,`v_res_bank`.`tarik` AS `tarik`,`v_res_bank`.`tahan` AS `tahan` from (`as_co` left join `v_res_bank` on(`as_co`.`tipe` = `v_res_bank`.`tipe` and `as_co`.`indeks` = `v_res_bank`.`indeks` and `as_co`.`persentase` = `v_res_bank`.`persentase`)) order by `as_co`.`tipe`,`as_co`.`indeks`,`as_co`.`persentase` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_real_bank_ses`
--
DROP TABLE IF EXISTS `v_real_bank_ses`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_real_bank_ses`  AS  select `set_session`.`session` AS `session`,`set_session`.`tipe` AS `tipe`,`set_session`.`indeks` AS `indeks`,`set_session`.`persentase` AS `persentase`,`v_res_bank_ses`.`jml_res` AS `jml_res`,`v_res_bank_ses`.`tarik` AS `tarik`,`v_res_bank_ses`.`tahan` AS `tahan` from (`set_session` left join `v_res_bank_ses` on(`set_session`.`session` = `v_res_bank_ses`.`session` and `set_session`.`tipe` = `v_res_bank_ses`.`tipe` and `set_session`.`indeks` = `v_res_bank_ses`.`indeks` and `set_session`.`persentase` = `v_res_bank_ses`.`persentase`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_res_bank`
--
DROP TABLE IF EXISTS `v_res_bank`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_res_bank`  AS  select `eks_bank`.`tipe` AS `tipe`,`eks_bank`.`indeks` AS `indeks`,`eks_bank`.`persentase` AS `persentase`,count(distinct `eks_bank`.`id_user`) AS `jml_res`,sum(case when `eks_bank`.`jawaban` = '1' then 1 else 0 end) AS `tarik`,sum(case when `eks_bank`.`jawaban` = '0' then 1 else 0 end) AS `tahan` from `eks_bank` group by `eks_bank`.`tipe`,`eks_bank`.`indeks`,`eks_bank`.`persentase` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_res_bank_ses`
--
DROP TABLE IF EXISTS `v_res_bank_ses`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_res_bank_ses`  AS  select `eks_bank`.`session` AS `session`,`eks_bank`.`tipe` AS `tipe`,`eks_bank`.`indeks` AS `indeks`,`eks_bank`.`persentase` AS `persentase`,count(distinct `eks_bank`.`id_user`) AS `jml_res`,sum(case when `eks_bank`.`jawaban` = '1' then 1 else 0 end) AS `tarik`,sum(case when `eks_bank`.`jawaban` = '0' then 1 else 0 end) AS `tahan` from `eks_bank` group by `eks_bank`.`session`,`eks_bank`.`tipe`,`eks_bank`.`indeks`,`eks_bank`.`persentase` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_user_per_session`
--
DROP TABLE IF EXISTS `v_user_per_session`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_user_per_session`  AS  select distinct `set_session`.`session` AS `session`,count(distinct `eks_saham`.`id_user`) AS `jml_user` from (`set_session` left join `eks_saham` on(`set_session`.`session` = `eks_saham`.`session` and `eks_saham`.`tipe` = 2 and `eks_saham`.`indeks` = 3 and `eks_saham`.`persentase` = 2)) group by `set_session`.`session` order by `set_session`.`session` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `as_co`
--
ALTER TABLE `as_co`
  ADD PRIMARY KEY (`id_as_co`);

--
-- Indeks untuk tabel `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id_config`);

--
-- Indeks untuk tabel `eks_bank`
--
ALTER TABLE `eks_bank`
  ADD PRIMARY KEY (`id_eks_bank`);

--
-- Indeks untuk tabel `eks_saham`
--
ALTER TABLE `eks_saham`
  ADD PRIMARY KEY (`id_eks_saham`);

--
-- Indeks untuk tabel `set_session`
--
ALTER TABLE `set_session`
  ADD PRIMARY KEY (`id_set_session`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `as_co`
--
ALTER TABLE `as_co`
  MODIFY `id_as_co` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `config`
--
ALTER TABLE `config`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `eks_bank`
--
ALTER TABLE `eks_bank`
  MODIFY `id_eks_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `eks_saham`
--
ALTER TABLE `eks_saham`
  MODIFY `id_eks_saham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `set_session`
--
ALTER TABLE `set_session`
  MODIFY `id_set_session` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
