-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 02:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-mjps`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai_posttest`
--

CREATE TABLE `nilai_posttest` (
  `id` int(11) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gg` varchar(25) NOT NULL,
  `nilai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_posttest`
--

INSERT INTO `nilai_posttest` (`id`, `nis`, `keterangan`, `name`, `gg`, `nilai`) VALUES
(5, '432007006190224', 'Post-test', 'tobirama', 'Ganjil', '75');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_pretest`
--

CREATE TABLE `nilai_pretest` (
  `id` int(11) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gg` varchar(50) NOT NULL,
  `nilai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_pretest`
--

INSERT INTO `nilai_pretest` (`id`, `nis`, `keterangan`, `name`, `gg`, `nilai`) VALUES
(6, '432007006190098', 'Pre-test', 'Hegar Raka', 'Ganjil', '70');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_quiz`
--

CREATE TABLE `nilai_quiz` (
  `id` int(11) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `keterangan` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gg` varchar(25) NOT NULL,
  `nilai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_quiz`
--

INSERT INTO `nilai_quiz` (`id`, `nis`, `keterangan`, `name`, `gg`, `nilai`) VALUES
(6, '432007006190098', 'Quiz', 'Hegar Raka', 'Ganjil', '90');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_posttest`
--

CREATE TABLE `tugas_posttest` (
  `id` int(11) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `file` varchar(256) NOT NULL,
  `fitur` varchar(50) NOT NULL,
  `date_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas_posttest`
--

INSERT INTO `tugas_posttest` (`id`, `nis`, `email`, `nama`, `file`, `fitur`, `date_upload`) VALUES
(5, '44200700619044', 'siradjudin@gmail.com', 'Siradjudin', '07_Proposal_RAMADHAN_1443_H.docx', 'Post-test', '2022-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_pretest`
--

CREATE TABLE `tugas_pretest` (
  `id` int(11) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `file` varchar(256) NOT NULL,
  `fitur` varchar(50) NOT NULL,
  `date_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas_pretest`
--

INSERT INTO `tugas_pretest` (`id`, `nis`, `email`, `nama`, `file`, `fitur`, `date_upload`) VALUES
(7, '44200700619044', 'siradjudin@gmail.com', 'Siradjudin', '07_Proposal_RAMADHAN_1443_H2.docx', 'Pre-test', '2022-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_quiz`
--

CREATE TABLE `tugas_quiz` (
  `id` int(11) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `file` varchar(256) NOT NULL,
  `fitur` varchar(50) NOT NULL,
  `date_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas_quiz`
--

INSERT INTO `tugas_quiz` (`id`, `nis`, `email`, `nama`, `file`, `fitur`, `date_upload`) VALUES
(4, '44200700619044', 'siradjudin@gmail.com', 'Siradjudin', '07_Proposal_RAMADHAN_1443_H.docx', 'Quiz', '2022-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nis`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, '442007006190098', 'Yori Saepul Barki', 'yorisaepulb@gmail.com', 'IMG_20201011_213024_562.JPG', '$2y$10$euMHyXv2neNepN8FINfceuRwASrg/Kj2MXPs6UDJSK0yvlPNJUa3a', 1, 1, 1651375334),
(28, '44200700619011', 'Taopik Firmansyah', 'taopikfirmansyah@gmail.com', 'default.png', '$2y$10$YYQoxP9WKuckQWl5JZN4Cev5LZsCwrWBK5LS/oN18yyqwiMF4JDM.', 1, 1, 2022),
(29, '44200700619044', 'Drs. Siradjudin, M.M', 'siradjudin@gmail.com', 'badomens-findinggodbeforegodfindsme.png', '$2y$10$JQ5xZf4qkplXZVrh.VAaNu5wIePAthnI1OiHLzByI7BBe6hWc3k4S', 3, 1, 2022),
(31, '432007006190098', 'Hegar Raka', 'hegarraka@gmail.com', 'default.png', '$2y$10$OLAR5hik900.umMuBHMjT.KLENLQ9Wj0TUhc4885QypSgbN8GIUFa', 2, 1, 2022),
(38, '44200700619088', 'Fajarudin', 'fajarudin@gmail.com', 'default.png', '$2y$10$Ki306Mi25ICR3i6LWTYjK.1TX/BtT.SucQhjN3U6Ml0gnzmxC6N9S', 2, 1, 2022),
(39, '43200700619022', 'tobirama', 'tobirama@gmail.com', 'default.png', '$2y$10$2n1VKIsI25VmrdTRdNcoKuEejN2KbhQH3gj2Vf99dcDvf2uGvfyOm', 2, 1, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(4, 2, 4),
(5, 1, 2),
(6, 2, 1),
(7, 3, 3),
(9, 3, 2),
(11, 3, 1),
(12, 3, 4),
(13, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_fitur`
--

CREATE TABLE `user_fitur` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `fitur` varchar(128) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_fitur`
--

INSERT INTO `user_fitur` (`id`, `role_id`, `fitur`, `judul`, `url`) VALUES
(56, 2, 'E-Modul', 'Bab 1 . Pengenalan Komputer', 'https://drive.google.com/file/d/1KGYPDl8fsh2d413tnQt90Dy6Vko7DFmh/view?usp=sharing'),
(57, 1, 'Pre-test', 'Pengenalan', 'https://drive.google.com/file/d/1e2NJygwheXMqrFs2KSLZb7k6lzjca4bN/view?usp=sharing'),
(58, 3, 'E-Learning', 'Installasi OS Windows 10', 'https://drive.google.com/file/d/1odhbyhZbFTiIs95C9gVeQthMPyKavvEm/view?usp=sharing'),
(59, 4, 'Quiz', '1', 'https://docs.google.com/document/d/193_zvtiC8jCkrubD29IxAszKqvtDUYy6/edit?rtpof=true'),
(60, 5, 'Post-Test', '1', 'https://drive.google.com/file/d/1TwB_0hbi_BOljTvXvlkHZABNKpSplxm8/view?usp=sharing'),
(61, 2, 'E-Modul', 'Bab . 2 Pengenalan Hardware', 'https://drive.google.com/file/d/1p0xPw86cHp8UyEGwfq9msnLlZQfMcN-f/view?usp=sharing'),
(62, 2, 'E-Modul', '3 . Hardware dan Perkembangannya', 'https://drive.google.com/file/d/183wavVc4u30hmwLuCkUis94pMC8QufPO/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Beranda'),
(2, 'Report'),
(3, 'Guru'),
(4, 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role_id` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role_id`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 3, 'Data Siswa', 'menu', 'fas fa-solid fa-users', 1),
(3, 3, 'Nilai Siswa', 'nilaisiswa', 'fas fa-solid fa-database', 1),
(4, 3, 'Input Nilai', 'nilai_siswa', 'fas fa-solid fa-scroll', 1),
(5, 3, 'Input Siswa', 'input_siswa', 'fas fa-solid fa-user-plus', 1),
(6, 4, 'Pre-test', 'pretest', 'fas fa-solid fa-comment', 1),
(7, 4, 'E-Modul', 'modul', 'fas fa-solid fa-file', 1),
(8, 4, 'E-Learning', 'learning', 'fas fa-solid fa-video', 1),
(9, 4, 'Quiz', 'quiz', 'fas fa-solid fa-book', 1),
(10, 4, 'Post-test', 'posttest', 'fas fa-solid fa-folder', 1),
(11, 3, 'Pengumpulan Tugas', 'tugas', 'fas fa-solid fa-folder-open', 1),
(12, 3, 'Input Mapel', 'input_mapel', 'fas fa-solid fa-upload', 1),
(13, 5, 'My Profile', 'profileuser', '', 1),
(14, 2, 'Laporan', 'laporan', 'fas fa-solid fa-receipt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai_posttest`
--
ALTER TABLE `nilai_posttest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_pretest`
--
ALTER TABLE `nilai_pretest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_quiz`
--
ALTER TABLE `nilai_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas_posttest`
--
ALTER TABLE `tugas_posttest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas_pretest`
--
ALTER TABLE `tugas_pretest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas_quiz`
--
ALTER TABLE `tugas_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_fitur`
--
ALTER TABLE `user_fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_posttest`
--
ALTER TABLE `nilai_posttest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nilai_pretest`
--
ALTER TABLE `nilai_pretest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai_quiz`
--
ALTER TABLE `nilai_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tugas_posttest`
--
ALTER TABLE `tugas_posttest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tugas_pretest`
--
ALTER TABLE `tugas_pretest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tugas_quiz`
--
ALTER TABLE `tugas_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_fitur`
--
ALTER TABLE `user_fitur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
