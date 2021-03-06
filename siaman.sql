-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 12:18 PM
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
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `id_mapel` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nisn` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `pertemuan` varchar(20) NOT NULL,
  `kehadiran` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `id_mapel`, `id_kelas`, `nisn`, `tanggal`, `pertemuan`, `kehadiran`, `created_at`, `updated_at`) VALUES
(1, 'MATH001', 1, 32153215, '2021-06-22', 'Pertemuan 1', 'Hadir', '2021-06-22 08:42:10', '2021-06-22 08:42:10'),
(2, 'MATH001', 1, 11190910000005, '2021-06-22', 'Pertemuan 1', 'Sakit', '2021-06-22 08:42:10', '2021-06-22 08:42:10'),
(3, 'MATH001', 1, 11190910000006, '2021-06-22', 'Pertemuan 1', 'Izin', '2021-06-22 08:42:10', '2021-06-22 08:42:10'),
(4, 'MATH001', 1, 11190910000021, '2021-06-22', 'Pertemuan 1', 'Alfa', '2021-06-22 08:42:10', '2021-06-22 08:42:10'),
(5, 'MATH001', 1, 11190910000022, '2021-06-22', 'Pertemuan 1', 'Hadir', '2021-06-22 08:42:10', '2021-06-22 08:42:10'),
(6, 'MATH001', 1, 32153215, '2021-06-29', 'Pertemuan 2', 'Hadir', '2021-06-22 08:43:06', '2021-06-22 08:43:06'),
(7, 'MATH001', 1, 11190910000005, '2021-06-29', 'Pertemuan 2', 'Hadir', '2021-06-22 08:43:06', '2021-06-22 08:43:06'),
(8, 'MATH001', 1, 11190910000006, '2021-06-29', 'Pertemuan 2', 'Hadir', '2021-06-22 08:43:06', '2021-06-22 08:43:06'),
(9, 'MATH001', 1, 11190910000021, '2021-06-29', 'Pertemuan 2', 'Sakit', '2021-06-22 08:43:06', '2021-06-22 08:43:06'),
(10, 'MATH001', 1, 11190910000022, '2021-06-29', 'Pertemuan 2', 'Hadir', '2021-06-22 08:43:06', '2021-06-22 08:43:06'),
(11, 'MATH001', 1, 32153215, '2021-07-06', 'Pertemuan 3', 'Hadir', '2021-06-22 09:17:46', '2021-06-22 09:17:46'),
(12, 'MATH001', 1, 11190910000005, '2021-07-06', 'Pertemuan 3', 'Sakit', '2021-06-22 09:17:46', '2021-06-22 09:17:46'),
(13, 'MATH001', 1, 11190910000006, '2021-07-06', 'Pertemuan 3', 'Sakit', '2021-06-22 09:17:46', '2021-06-22 09:17:46'),
(14, 'MATH001', 1, 11190910000021, '2021-07-06', 'Pertemuan 3', 'Sakit', '2021-06-22 09:17:46', '2021-06-22 09:17:46'),
(15, 'MATH001', 1, 11190910000022, '2021-07-06', 'Pertemuan 3', 'Hadir', '2021-06-22 09:17:46', '2021-06-22 09:17:46'),
(16, 'MATH001', 2, 11190910000020, '2021-06-22', 'Pertemuan 1', 'Hadir', '2021-06-22 09:19:23', '2021-06-22 09:19:23');

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
(0, 'Istirahat', NULL, NULL, NULL, NULL, NULL, '2021-06-22 02:48:31', NULL),
(111000222, 'Amando Banda', NULL, NULL, NULL, NULL, NULL, '2021-06-10 04:17:08', NULL),
(11190910000001, 'Julius Simatupang', NULL, NULL, NULL, NULL, NULL, '2021-06-12 11:46:01', NULL),
(11190910000007, 'Anugrah Pramesta', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11190910000013, 'Sigit Tri P', '2021-06-01', 'Laki-laki', '085282156489', 'dimana mana hatiku senang juah', NULL, NULL, '2021-06-10 05:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_mapel`
--

CREATE TABLE `jadwal_mapel` (
  `id_jadwal` int(11) NOT NULL,
  `id_mapel` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_mapel`
--

INSERT INTO `jadwal_mapel` (`id_jadwal`, `id_mapel`, `id_kelas`, `hari`, `jam_mulai`, `jam_akhir`, `created_at`, `updated_at`) VALUES
(1, 'PAI002', 1, 'Senin', '08:00:00', '09:30:00', '2021-06-21 09:31:17', '2021-06-21 09:31:17'),
(2, 'MATH002', 1, 'Senin', '09:30:00', '11:00:00', '2021-06-21 09:31:17', '2021-06-21 09:31:17'),
(3, 'BREAK', 1, 'Senin', '11:00:00', '12:00:00', '2021-06-22 02:50:39', '2021-06-22 02:50:39'),
(4, 'MATH001', 1, 'Selasa', '09:00:00', '11:00:00', '2021-06-21 12:18:20', '2021-06-21 12:18:20'),
(5, 'BREAK', 1, 'Selasa', '11:00:00', '12:00:00', '2021-06-22 02:51:14', '2021-06-22 02:51:14'),
(6, 'PAI002', 1, 'Selasa', '12:00:00', '14:00:00', '2021-06-21 12:18:20', '2021-06-21 12:18:20'),
(7, 'PAI001', 1, 'Rabu', '07:15:00', '09:00:00', '2021-06-21 12:18:59', '2021-06-21 12:18:59'),
(8, 'BREAK', 1, 'Rabu', '11:00:00', '12:00:00', '2021-06-22 02:51:34', '2021-06-22 02:51:34'),
(9, 'MATH002', 1, 'Kamis', '08:00:00', '09:30:00', '2021-06-21 12:19:27', '2021-06-21 12:19:27'),
(10, 'BREAK', 1, 'Kamis', '11:00:00', '12:00:00', '2021-06-22 02:51:48', '2021-06-22 02:51:48'),
(14, 'MATH001', 2, 'Senin', '07:00:00', '08:30:00', '2021-06-22 05:12:16', '2021-06-22 05:12:16'),
(15, 'BREAK', 2, 'Senin', '08:30:00', '09:00:00', '2021-06-22 05:12:16', '2021-06-22 05:12:16'),
(16, 'PAI001', 2, 'Senin', '09:00:00', '10:00:00', '2021-06-22 05:12:16', '2021-06-22 05:12:16');

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
  `nip` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`, `nip`, `created_at`, `updated_at`) VALUES
('BREAK', 'Istirahat', 0, '2021-06-22 02:43:11', NULL),
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
  `nilai` float DEFAULT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_kelas`, `nisn`, `id_mapel`, `id_semester`, `nilai`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 11190910000005, 'MATH001', 1, 75.5, 'uts', '2021-06-19 10:07:08', '2021-06-19 10:07:08'),
(2, 1, 11190910000006, 'MATH001', 1, 85.5, 'uts', '2021-06-19 10:07:08', '2021-06-19 10:07:08'),
(3, 1, 32153215, 'MATH001', 1, 90.5, 'uts', '2021-06-19 10:07:08', '2021-06-19 10:07:08'),
(4, 1, 11190910000005, 'MATH001', 1, 60, 'formatif', '2021-06-19 10:19:59', '2021-06-19 10:19:59'),
(5, 1, 11190910000006, 'MATH001', 1, 60, 'formatif', '2021-06-19 10:19:59', '2021-06-19 10:19:59'),
(6, 1, 32153215, 'MATH001', 1, 60, 'formatif', '2021-06-19 10:19:59', '2021-06-19 10:19:59'),
(7, 1, 11190910000005, 'PAI001', 1, 80, 'uas', '2021-06-19 10:24:40', '2021-06-19 10:24:40'),
(8, 1, 11190910000006, 'PAI001', 1, 82, 'uas', '2021-06-19 10:24:40', '2021-06-19 10:24:40'),
(9, 1, 32153215, 'PAI001', 1, 73, 'uas', '2021-06-19 10:24:40', '2021-06-19 10:24:40');

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
(11190910000020, 2, 'Lukman Syahid', NULL, NULL, NULL, NULL, NULL, '2021-06-11 13:18:03', NULL),
(11190910000021, 1, 'Tiara Andini', NULL, NULL, NULL, NULL, NULL, '2021-06-22 00:38:30', '2021-06-22 03:30:17'),
(11190910000022, 1, 'Loki Asgard', NULL, NULL, NULL, NULL, NULL, '2021-06-22 00:38:59', '2021-06-22 03:30:17');

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
(1, 'Wahyu Ramadhani', 11190910000011, 'Admin', 'wahyurmd13@gmail.com', '$2y$10$yZU6JLvUh/GtB9eEHQhh0.CcUR1e/hF3PTabWMWfJy2SlpcO2/KAS', 'admin', NULL, NULL, '2021-06-10 05:02:45', '2021-06-22 05:11:11'),
(2, 'Sigit Tri P', 11190910000013, 'Guru', 'sigit123@gmail.com', '$2y$10$e77jUf2NAz956ks4sFmt7OhFwCyPyumhpBKFHHibTh27n.BsBsgzS', 'guru', NULL, NULL, '2021-06-10 05:23:58', '2021-06-12 16:25:23'),
(3, 'Awiez Fathwa Zein', 11190910000005, 'Siswa', 'awis12345@gmail.com', '$2y$10$oclQ/bHIu4FVj6OqyItME.T5DG6XA80XyGQkwj/Acpkr82mTgHLxm', 'siswa', NULL, NULL, '2021-06-10 05:13:39', '2021-06-22 09:21:17'),
(4, 'Anugrah Pramesta', 11190910000007, 'Wali Kelas', NULL, '$2y$10$1Z5YYSVH4n7ig4YivSPsC.SaqzdCVsKh89ORBc5y2EO3dhc/GD42S', 'guru', NULL, NULL, NULL, '2021-06-12 06:50:08'),
(7, 'Jajang Nurjaman', 11190910000006, 'Siswa', NULL, '$2y$10$RA2665lWo9BEo9kYBk.MGu.3b5LmSeAA/Pft21rHwzBjMQbATd6z2', 'siswa', NULL, NULL, NULL, '2021-06-22 10:11:05'),
(11, 'Amando Banda', 111000222, 'Guru', NULL, '$2y$10$5NDUlGzuKuvuAw4.VE07gOt4V/6fVvOK4nzd9.oUYJLxm75Cf67OC', 'guru', NULL, '2021-06-10 04:18:01', NULL, NULL),
(12, 'Nurhidayat', 32153215, 'Siswa', NULL, '$2y$10$JreeE3Z6Pl2llS7GaNeMDeKBEOVKWcxSVaKXkdueWpd2.sGFPBbiy', 'siswa', NULL, '2021-06-10 04:18:42', NULL, NULL),
(16, 'Lukman Syahid', 11190910000020, 'Siswa', NULL, '$2y$10$IVF4oKVH0LlNsXE7ktMOz.7Gdug/4uonzvVCXa170O.HZReB3eGsm', 'siswa', NULL, '2021-06-11 13:18:03', NULL, '2021-06-22 05:12:26'),
(17, 'Julius Simatupang', 11190910000001, 'BK', NULL, '$2y$10$m9ufo5.qLg85dieE3HmwWej1sx.OQptIE3Gwg5hDkUvTsH3bENbxe', 'guru', NULL, '2021-06-12 11:46:01', NULL, '2021-06-22 07:16:26'),
(18, 'Tiara Andini', 11190910000021, 'Siswa', NULL, '$2y$10$qMeL7iZ6qTn/PTCaWMgwfuj9jV59HrpuhGxRWuv4akerEs0QRYBFu', 'siswa', NULL, '2021-06-22 00:38:30', NULL, '2021-06-22 05:10:23'),
(19, 'Loki Asgard', 11190910000022, 'Siswa', NULL, '$2y$10$FHzjKOx6KXC7XYxVM39L3eKNT5bZzqmCHAna0HGrMkWX8xMK2koBy', 'siswa', NULL, '2021-06-22 00:38:59', NULL, NULL);

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
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_mapel` (`id_mapel`);

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
-- Indexes for table `jadwal_mapel`
--
ALTER TABLE `jadwal_mapel`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_mapel` (`id_mapel`);

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
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_mapel`
--
ALTER TABLE `jadwal_mapel`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  MODIFY `id_wali_kelas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `absensi_ibfk_2` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`),
  ADD CONSTRAINT `absensi_ibfk_3` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);

--
-- Constraints for table `jadwal_mapel`
--
ALTER TABLE `jadwal_mapel`
  ADD CONSTRAINT `jadwal_mapel_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `jadwal_mapel_ibfk_3` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);

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
