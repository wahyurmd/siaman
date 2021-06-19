-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 01:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto_profil` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `tgl_lahir`, `jenis_kelamin`, `no_telp`, `alamat`, `foto_profil`, `created_at`, `updated_at`) VALUES
(111000222, 'Amando Banda', NULL, NULL, NULL, NULL, NULL, '2021-06-10 04:17:08', NULL),
(11190910000001, 'Julius Simatupang', NULL, NULL, NULL, NULL, NULL, '2021-06-12 11:46:01', NULL),
(11190910000007, 'Anugrah Pramesta', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11190910000013, 'Sigit Tri P', '2021-06-01', 'Laki-laki', '085282156489', 'dimana mana hatiku senang juah', NULL, NULL, '2021-06-10 05:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_wali_kelas` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_wali_kelas`, `kelas`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, '1', 'X', 'IPA 1', NULL, NULL),
(2, '1', 'XI', 'IPA 1', NULL, NULL),
(3, '1', 'XII', 'IPA 1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` bigint(20) UNSIGNED NOT NULL,
  `nip` bigint(20) NOT NULL,
  `nisn` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `kronologi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nip`, `nisn`, `id_kelas`, `kronologi`, `status`, `created_at`, `updated_at`) VALUES
(1, 11190910000007, 11190910000005, 1, 'menghamili anak kucing', 1, '2021-06-12 08:22:25', '2021-06-13 13:43:05'),
(2, 11190910000007, 11190910000020, 2, 'Mencabuli sigit', 1, '2021-06-12 08:25:08', NULL),
(3, 11190910000007, 11190910000006, 1, 'Membawa sabu 1kg', 1, '2021-06-12 08:50:35', '2021-06-13 13:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`, `nip`, `created_at`, `updated_at`) VALUES
('MATH001', 'Matematika', 11190910000007, '2021-06-13 08:04:52', NULL),
('MATH002', 'Matematika', 11190910000013, '0000-00-00 00:00:00', NULL),
('PAI001', 'Pendidikan Agama Islam', 11190910000001, '2021-06-13 08:03:42', NULL),
('PAI002', 'Pendidikan Agama Islam', 111000222, '2021-06-13 08:03:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_06_09_075920_kelas', 1),
(8, '2021_06_09_083052_create_wali_kelas_table', 2),
(10, '2021_06_09_085239_create_mapel_table', 3),
(11, '2021_06_17_013024_create_semester_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nisn` bigint(20) UNSIGNED NOT NULL,
  `id_mapel` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_semester` bigint(20) UNSIGNED NOT NULL,
  `formatif` float DEFAULT NULL,
  `uts` float DEFAULT NULL,
  `uas` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`, `tahun_ajaran`, `created_at`, `updated_at`) VALUES
(1, 'Ganjil', '2020/2021', '2021-06-17 02:02:17', NULL),
(2, 'Genap', '2020/2021', '2021-06-17 02:02:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_profil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `id_kelas`, `nama`, `tgl_lahir`, `jenis_kelamin`, `no_telp`, `alamat`, `foto_profil`, `created_at`, `updated_at`) VALUES
(32153215, 1, 'Nurhidayat', NULL, NULL, NULL, NULL, NULL, '2021-06-10 04:18:42', NULL),
(11190910000005, 1, 'Awiez Fathwa Zein', '2000-02-10', 'Laki-laki', '085282156184', 'dimana mana asdasda zzzz', '', NULL, '2021-06-10 05:13:39'),
(11190910000006, 1, 'Jajang Nurjaman', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11190910000020, 2, 'Lukman Syahid', NULL, NULL, NULL, NULL, NULL, '2021-06-11 13:18:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` bigint(20) NOT NULL,
  `jabatan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `jabatan`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`, `last_login`) VALUES
(1, 'Wahyu Ramadhani', 11190910000011, 'Admin', 'wahyurmd13@gmail.com', '$2y$10$yZU6JLvUh/GtB9eEHQhh0.CcUR1e/hF3PTabWMWfJy2SlpcO2/KAS', 'admin', NULL, NULL, '2021-06-10 05:02:45', '2021-06-12 11:43:33'),
(2, 'Sigit Tri P', 11190910000013, 'Guru', 'sigit123@gmail.com', '$2y$10$e77jUf2NAz956ks4sFmt7OhFwCyPyumhpBKFHHibTh27n.BsBsgzS', 'guru', NULL, NULL, '2021-06-10 05:23:58', '2021-06-12 16:25:23'),
(3, 'Awiez Fathwa Zein', 11190910000005, 'Siswa', 'awis12345@gmail.com', '$2y$10$oclQ/bHIu4FVj6OqyItME.T5DG6XA80XyGQkwj/Acpkr82mTgHLxm', 'siswa', NULL, NULL, '2021-06-10 05:13:39', '2021-06-17 07:51:49'),
(4, 'Anugrah Pramesta', 11190910000007, 'Wali Kelas', NULL, '$2y$10$1Z5YYSVH4n7ig4YivSPsC.SaqzdCVsKh89ORBc5y2EO3dhc/GD42S', 'guru', NULL, NULL, NULL, '2021-06-12 06:50:08'),
(7, 'Jajang Nurjaman', 11190910000006, 'Siswa', NULL, '$2y$10$RA2665lWo9BEo9kYBk.MGu.3b5LmSeAA/Pft21rHwzBjMQbATd6z2', 'siswa', NULL, NULL, NULL, '2021-06-10 03:29:23'),
(11, 'Amando Banda', 111000222, 'Guru', NULL, '$2y$10$5NDUlGzuKuvuAw4.VE07gOt4V/6fVvOK4nzd9.oUYJLxm75Cf67OC', 'guru', NULL, '2021-06-10 04:18:01', NULL, NULL),
(12, 'Nurhidayat', 32153215, 'Siswa', NULL, '$2y$10$JreeE3Z6Pl2llS7GaNeMDeKBEOVKWcxSVaKXkdueWpd2.sGFPBbiy', 'siswa', NULL, '2021-06-10 04:18:42', NULL, NULL),
(16, 'Lukman Syahid', 11190910000020, 'Siswa', NULL, '$2y$10$IVF4oKVH0LlNsXE7ktMOz.7Gdug/4uonzvVCXa170O.HZReB3eGsm', 'siswa', NULL, '2021-06-11 13:18:03', NULL, NULL),
(17, 'Julius Simatupang', 11190910000001, 'BK', NULL, '$2y$10$m9ufo5.qLg85dieE3HmwWej1sx.OQptIE3Gwg5hDkUvTsH3bENbxe', 'guru', NULL, '2021-06-12 11:46:01', NULL, '2021-06-18 09:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `id_wali_kelas` bigint(20) UNSIGNED NOT NULL,
  `nip` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wali_kelas`
--

INSERT INTO `wali_kelas` (`id_wali_kelas`, `nip`, `created_at`, `updated_at`) VALUES
(1, 11190910000007, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`id_wali_kelas`),
  ADD KEY `nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  MODIFY `id_wali_kelas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`),
  ADD CONSTRAINT `laporan_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `mapel`
--
ALTER TABLE `mapel`
  ADD CONSTRAINT `mapel_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`),
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `nilai_ibfk_4` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD CONSTRAINT `wali_kelas_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
