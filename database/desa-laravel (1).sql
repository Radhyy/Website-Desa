-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2026 at 07:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `agamas`
--

CREATE TABLE `agamas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agama` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agamas`
--

INSERT INTO `agamas` (`id`, `agama`, `jumlah`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Islam', 100, NULL, '2025-12-16 02:04:40', '2025-12-16 03:29:50'),
(2, 'Kristen', 50, NULL, '2025-12-16 02:04:40', '2025-12-16 03:32:09'),
(3, 'Katolik', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(4, 'Hindu', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(5, 'Buddha', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(6, 'Konghucu', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `anggarans`
--

CREATE TABLE `anggarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `jumlah` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggarans`
--

INSERT INTO `anggarans` (`id`, `user_id`, `tahun`, `jenis`, `kategori`, `uraian`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, '2025', 'Pendapatan', 'Pendapatan Asli Desa', 'Hasil Usaha Desa', 50000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(2, 1, '2025', 'Pendapatan', 'Pendapatan Asli Desa', 'Hasil Aset Desa', 25000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(3, 1, '2025', 'Pendapatan', 'Pendapatan Asli Desa', 'Swadaya, Partisipasi dan Gotong Royong', 30000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(4, 1, '2025', 'Pendapatan', 'Pendapatan Asli Desa', 'Lain-lain Pendapatan Asli Desa', 15000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(5, 1, '2025', 'Pendapatan', 'Transfer', 'Dana Desa', 800000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(6, 1, '2025', 'Pendapatan', 'Transfer', 'Alokasi Dana Desa (ADD)', 600000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(7, 1, '2025', 'Pendapatan', 'Transfer', 'Bagi Hasil Pajak dan Retribusi', 75000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(8, 1, '2025', 'Pendapatan', 'Transfer', 'Bantuan Keuangan Provinsi', 100000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(9, 1, '2025', 'Pendapatan', 'Transfer', 'Bantuan Keuangan Kabupaten/Kota', 150000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(10, 1, '2025', 'Pendapatan', 'Pendapatan Lain-lain', 'Hibah dan Sumbangan Pihak Ketiga', 50000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(11, 1, '2025', 'Pendapatan', 'Pendapatan Lain-lain', 'Lain-lain Pendapatan Desa Yang Sah', 25000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(12, 1, '2025', 'Belanja', 'Bidang Penyelenggaraan Pemerintahan Desa', 'Penghasilan Tetap dan Tunjangan Kepala Desa', 60000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(13, 1, '2025', 'Belanja', 'Bidang Penyelenggaraan Pemerintahan Desa', 'Penghasilan Tetap dan Tunjangan Perangkat Desa', 180000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(14, 1, '2025', 'Belanja', 'Bidang Penyelenggaraan Pemerintahan Desa', 'Tunjangan BPD', 45000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(15, 1, '2025', 'Belanja', 'Bidang Penyelenggaraan Pemerintahan Desa', 'Operasional Perkantoran', 80000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(16, 1, '2025', 'Belanja', 'Bidang Penyelenggaraan Pemerintahan Desa', 'Operasional BPD', 25000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(17, 1, '2025', 'Belanja', 'Bidang Penyelenggaraan Pemerintahan Desa', 'Kegiatan Administrasi Pemerintahan Desa', 40000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(18, 1, '2025', 'Belanja', 'Bidang Pelaksanaan Pembangunan Desa', 'Pembangunan Jalan Desa', 350000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(19, 1, '2025', 'Belanja', 'Bidang Pelaksanaan Pembangunan Desa', 'Pembangunan Jembatan Desa', 150000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(20, 1, '2025', 'Belanja', 'Bidang Pelaksanaan Pembangunan Desa', 'Pembangunan Saluran Irigasi', 100000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(21, 1, '2025', 'Belanja', 'Bidang Pelaksanaan Pembangunan Desa', 'Pengadaan Sarana Prasarana Desa', 80000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(22, 1, '2025', 'Belanja', 'Bidang Pelaksanaan Pembangunan Desa', 'Pembangunan Gedung/Prasarana Desa', 120000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(23, 1, '2025', 'Belanja', 'Bidang Pembinaan Kemasyarakatan', 'Kegiatan Pembinaan Ketentraman dan Ketertiban', 30000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(24, 1, '2025', 'Belanja', 'Bidang Pembinaan Kemasyarakatan', 'Pembinaan Kerukunan Umat Beragama', 25000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(25, 1, '2025', 'Belanja', 'Bidang Pembinaan Kemasyarakatan', 'Pengadaan Sarana Prasarana Olahraga', 40000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(26, 1, '2025', 'Belanja', 'Bidang Pembinaan Kemasyarakatan', 'Pembinaan Lembaga Adat', 20000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(27, 1, '2025', 'Belanja', 'Bidang Pembinaan Kemasyarakatan', 'Pembinaan PKK', 35000000.00, '2025-12-16 08:12:55', '2025-12-16 08:12:55'),
(28, 1, '2025', 'Belanja', 'Bidang Pemberdayaan Masyarakat', 'Pelatihan Usaha Ekonomi Produktif', 50000000.00, '2025-12-16 08:12:56', '2025-12-16 08:12:56'),
(29, 1, '2025', 'Belanja', 'Bidang Pemberdayaan Masyarakat', 'Pelatihan Teknologi Tepat Guna', 40000000.00, '2025-12-16 08:12:56', '2025-12-16 08:12:56'),
(30, 1, '2025', 'Belanja', 'Bidang Pemberdayaan Masyarakat', 'Pembinaan UMKM/UEP', 60000000.00, '2025-12-16 08:12:56', '2025-12-16 08:12:56'),
(31, 1, '2025', 'Belanja', 'Bidang Pemberdayaan Masyarakat', 'Peningkatan Kapasitas Aparatur Desa', 30000000.00, '2025-12-16 08:12:56', '2025-12-16 08:12:56'),
(32, 1, '2025', 'Belanja', 'Bidang Penanggulangan Bencana, Darurat dan Mendesak', 'Penanggulangan Bencana', 50000000.00, '2025-12-16 08:12:56', '2025-12-16 08:12:56'),
(33, 1, '2025', 'Belanja', 'Bidang Penanggulangan Bencana, Darurat dan Mendesak', 'Kegiatan Keadaan Darurat', 30000000.00, '2025-12-16 08:12:56', '2025-12-16 08:12:56'),
(34, 1, '2025', 'Belanja', 'Bidang Penanggulangan Bencana, Darurat dan Mendesak', 'Kegiatan Mendesak Lainnya', 25000000.00, '2025-12-16 08:12:56', '2025-12-16 08:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `user_id`, `judul`, `slug`, `konten`, `gambar`, `tanggal_mulai`, `tanggal_selesai`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pengumuman Pembagian BLT', 'pengumuman-pembagian-blt', 'Kepada seluruh warga penerima Bantuan Langsung Tunai (BLT), diharapkan untuk mengambil bantuan pada tanggal 20-25 Desember 2025 di Kantor Desa dengan membawa KTP asli dan KK.', NULL, '2025-12-16', '2025-12-26', '2025-12-16 06:39:54', '2025-12-16 06:48:10'),
(2, 1, 'Rapat RT/RW Bulanan', 'rapat-rtrw-bulanan', 'Mengundang seluruh ketua RT dan RW untuk menghadiri rapat koordinasi bulanan yang akan dilaksanakan pada hari Rabu, 18 Desember 2025 pukul 19.00 WIB di Balai Desa.', NULL, '2025-12-16', '2025-12-21', '2025-12-16 06:39:54', '2025-12-16 06:48:10'),
(3, 1, 'Kegiatan Gotong Royong', 'kegiatan-gotong-royong', 'Dihimbau kepada seluruh warga untuk berpartisipasi dalam kegiatan gotong royong pembersihan lingkungan desa yang akan dilaksanakan pada hari Minggu, 22 Desember 2025 pukul 07.00 WIB. Tempat kumpul di Balai Desa.', NULL, '2025-12-16', '2025-12-23', '2025-12-16 06:39:54', '2025-12-16 06:48:10'),
(4, 1, 'Pelayanan Administrasi Tutup Sementara', 'pelayanan-administrasi-tutup-sementara', 'Pelayanan administrasi kependudukan di kantor desa akan tutup pada tanggal 25 Desember 2025 dalam rangka Hari Natal. Pelayanan akan kembali normal pada tanggal 26 Desember 2025.', NULL, '2025-12-16', '2025-12-31', '2025-12-16 06:39:54', '2025-12-16 06:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `excerpt` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `user_id`, `kategori_id`, `status_id`, `judul`, `slug`, `body`, `excerpt`, `gambar`, `views`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'Selamat Datang di Website Desa', 'selamat-datang-di-website-desa', '<p>Website resmi desa kami telah resmi diluncurkan. Melalui website ini, masyarakat dapat mengakses berbagai informasi terkait kegiatan, pengumuman, dan layanan desa dengan lebih mudah dan cepat.</p>', 'Website resmi desa kami telah resmi diluncurkan. Melalui website ini, masyarakat dapat mengakses berbagai informasi terkait kegiatan, pengumuman, d', NULL, 69, '2025-12-16 02:04:40', '2025-12-16 07:27:17'),
(2, 1, 3, 2, 'Gotong Royong Membersihkan Lingkungan Desa', 'gotong-royong-membersihkan-lingkungan-desa', '<p>Kegiatan gotong royong membersihkan lingkungan desa dilaksanakan setiap hari Minggu pagi. Seluruh warga diharapkan dapat berpartisipasi aktif dalam menjaga kebersihan lingkungan desa kita.</p>', 'Kegiatan gotong royong membersihkan lingkungan desa dilaksanakan setiap hari Minggu pagi. Seluruh warga diharapkan dapat berpartisipasi aktif dalam', NULL, 81, '2025-12-16 02:04:40', '2025-12-16 08:10:22'),
(3, 1, 8, 2, 'Program Bantuan Sosial untuk Warga Kurang Mampu', 'program-bantuan-sosial-untuk-warga-kurang-mampu', '<p>Pemerintah desa menyalurkan bantuan sosial kepada warga kurang mampu sebagai bentuk kepedulian terhadap kesejahteraan masyarakat. Bantuan berupa sembako dan uang tunai telah disalurkan kepada 100 KK.</p>', 'Pemerintah desa menyalurkan bantuan sosial kepada warga kurang mampu sebagai bentuk kepedulian terha...', 'img-berita//6940cbec8ec75.avif', 36, '2025-12-16 02:04:40', '2025-12-16 08:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `berita_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komentar` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `berita_id`, `nama`, `email`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Radhiyya Akbar', 'raaakb87@gmail.com', 'Bagus', '2025-12-16 07:20:43', '2025-12-16 07:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

CREATE TABLE `comment_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balasan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_replies`
--

INSERT INTO `comment_replies` (`id`, `comment_id`, `nama`, `email`, `balasan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Radg', 'raaakb87@gmail.com', 'tes', '2025-12-16 07:27:17', '2025-12-16 07:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Gotong Royong Desa', 'Kegiatan gotong royong membersihkan lingkungan desa', 'img-gallery//6946865e4c253.avif', '2025-12-16 02:04:41', '2025-12-20 11:19:58'),
(2, 'Kantor Desa', 'Gedung kantor desa yang baru', 'img-gallery//6941133263ef1.jpg', '2025-12-16 02:04:41', '2025-12-16 08:07:14'),
(3, 'Balai Desa', 'Balai desa untuk kegiatan masyarakat', 'img-gallery//694113418b629.jpg', '2025-12-16 02:04:41', '2025-12-16 08:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamins`
--

CREATE TABLE `jenis_kelamins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_kelamins`
--

INSERT INTO `jenis_kelamins` (`id`, `jenis_kelamin`, `jumlah`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Laki-laki', 1001, NULL, '2025-12-16 02:04:40', '2025-12-16 03:26:36'),
(2, 'Perempuan', 2222, NULL, '2025-12-16 02:04:40', '2025-12-16 03:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `user_id`, `kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Berita Desa', 'berita-desa', '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(2, 1, 'Pengumuman', 'pengumuman', '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(3, 1, 'Kegiatan', 'kegiatan', '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(4, 1, 'Pembangunan', 'pembangunan', '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(5, 1, 'Kesehatan', 'kesehatan', '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(6, 1, 'Pendidikan', 'pendidikan', '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(7, 1, 'Sosial', 'sosial', '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(8, 1, 'Ekonomi', 'ekonomi', '2025-12-16 02:04:40', '2025-12-16 02:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lokasi` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `lokasi`, `email`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Jl. Raya Desa No. 1, Desa Contoh, Kecamatan Contoh, Kabupaten Contoh', 'info@desacontoh.id', '081234567890', '2025-12-16 02:04:40', '2025-12-16 02:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `persyaratan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id`, `user_id`, `layanan`, `persyaratan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Surat Keterangan Domisili', '- Fotocopy KTP\r\n- Fotocopy KK\r\n- Surat Pengantar RT/RW', '2025-12-16 02:04:41', '2025-12-16 02:04:41'),
(2, 1, 'Surat Keterangan Usaha', '- Fotocopy KTP\r\n- Fotocopy KK\r\n- Surat Pengantar RT/RW\r\n- Foto tempat usaha', '2025-12-16 02:04:41', '2025-12-16 02:04:41'),
(3, 1, 'Surat Keterangan Tidak Mampu', '- Fotocopy KTP\r\n- Fotocopy KK\r\n- Surat Pengantar RT/RW\r\n- Surat Keterangan dari RT bahwa benar-benar tidak mampu', '2025-12-16 02:04:41', '2025-12-16 02:04:41'),
(4, 1, 'Surat Pengantar KTP', '- Fotocopy KK\r\n- Surat Pengantar RT/RW\r\n- Pas foto 3x4 sebanyak 2 lembar', '2025-12-16 02:04:41', '2025-12-16 02:04:41'),
(5, 1, 'Surat Pengantar Nikah', '- Fotocopy KTP calon pengantin\r\n- Fotocopy KK\r\n- Fotocopy Akta Kelahiran\r\n- Surat Pengantar RT/RW\r\n- Pas foto 3x4 sebanyak 2 lembar', '2025-12-16 02:04:41', '2025-12-16 02:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_01_01_000001_create_agamas_table', 1),
(5, '2023_01_01_000002_create_jenis_kelamins_table', 1),
(6, '2023_01_01_000003_create_pekerjaans_table', 1),
(7, '2023_01_01_000004_create_post_statuses_table', 1),
(8, '2023_01_01_000005_create_kategoris_table', 1),
(9, '2023_01_01_000006_create_beritas_table', 1),
(10, '2023_01_01_000007_create_comments_table', 1),
(11, '2023_01_01_000008_create_comment_replies_table', 1),
(12, '2023_01_01_000009_create_anggarans_table', 1),
(13, '2023_01_01_000010_create_announcements_table', 1),
(14, '2023_01_01_000011_create_wilayahs_table', 1),
(15, '2023_01_01_000012_create_perangkat_desas_table', 1),
(16, '2023_01_01_000013_create_umkms_table', 1),
(17, '2023_01_01_000014_create_galleries_table', 1),
(18, '2023_01_01_000015_create_sliders_table', 1),
(19, '2023_01_01_000016_create_layanans_table', 1),
(20, '2023_01_01_000017_create_kontaks_table', 1),
(21, '2023_01_01_000018_create_sejarahs_table', 1),
(22, '2023_01_01_000019_create_visi_misis_table', 1),
(24, '2023_01_01_000021_create_situs_table', 1),
(25, '2023_01_01_000022_create_video_profils_table', 1),
(26, '2023_01_01_000020_create_petas_table', 2),
(27, '2025_12_16_101908_add_jumlah_and_user_id_to_pekerjaans_table', 3),
(28, '2025_12_16_102354_add_jumlah_and_user_id_to_agamas_table', 4),
(29, '2025_12_16_102525_add_jumlah_and_user_id_to_jenis_kelamins_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaans`
--

CREATE TABLE `pekerjaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaans`
--

INSERT INTO `pekerjaans` (`id`, `pekerjaan`, `jumlah`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Petani', 100, NULL, '2025-12-16 02:04:40', '2025-12-16 03:21:04'),
(2, 'Buruh Tani', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(3, 'Nelayan', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(4, 'Pedagang', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(5, 'Wiraswasta', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(6, 'PNS', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(7, 'TNI/Polri', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(8, 'Guru', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(9, 'Dokter', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(10, 'Bidan', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(11, 'Perawat', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(12, 'Karyawan Swasta', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(13, 'Pengrajin', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(14, 'Peternak', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(15, 'Sopir', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(16, 'Montir', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(17, 'Tukang Kayu', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(18, 'Tukang Batu', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(19, 'Buruh Harian Lepas', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(20, 'Ibu Rumah Tangga', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(21, 'Pelajar/Mahasiswa', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(22, 'Belum/Tidak Bekerja', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(23, 'Pensiunan', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(24, 'Lainnya', 0, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `perangkat_desas`
--

CREATE TABLE `perangkat_desas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perangkat_desas`
--

INSERT INTO `perangkat_desas` (`id`, `user_id`, `nama`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kepala Desa', 'Kepala Desa', 'img-perangkat//6940c7b18b64d.jpg', '2025-12-16 02:04:40', '2025-12-16 02:45:05'),
(2, 1, 'Sekretaris Desa', 'Sekretaris Desa', 'img-perangkat//6940c7a92c3eb.jpg', '2025-12-16 02:04:40', '2025-12-16 02:44:57'),
(3, 1, 'Kaur Keuangan', 'Kepala Urusan Keuangan', 'img-perangkat//6940c79f90967.jpg', '2025-12-16 02:04:40', '2025-12-16 02:44:47'),
(4, 1, 'Kaur Umum', 'Kepala Urusan Umum', 'img-perangkat//6940c794a52e6.jpg', '2025-12-16 02:04:40', '2025-12-16 02:44:36'),
(5, 1, 'Kaur Pembangunan', 'Kepala Urusan Pembangunan', 'img-perangkat//6940c78cb49d4.jpg', '2025-12-16 02:04:40', '2025-12-16 02:44:28'),
(6, 1, 'Kasi Pemerintahan', 'Kepala Seksi Pemerintahan', 'img-perangkat//6940c7811988b.jpg', '2025-12-16 02:04:40', '2025-12-16 02:44:17'),
(7, 1, 'Kasi Kesejahteraan', 'Kepala Seksi Kesejahteraan', 'img-perangkat//6940c70164b18.jpg', '2025-12-16 02:04:40', '2025-12-16 02:42:09'),
(8, 1, 'Kasi Pelayanan', 'Kepala Seksi Pelayanan', 'img-perangkat//6940c6ef681ff.jpg', '2025-12-16 02:04:40', '2025-12-16 02:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petas`
--

CREATE TABLE `petas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petas`
--

INSERT INTO `petas` (`id`, `judul`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Peta Lokasi Desa', 'Desa Watu Pari, Kecamatan Komba Utara, Kabupaten Manggarai Timur, Nusa Tenggara Timur', '2025-12-16 02:55:33', '2025-12-16 02:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `post_statuses`
--

CREATE TABLE `post_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_statuses`
--

INSERT INTO `post_statuses` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Draft', '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(2, 'Published', '2025-12-16 02:04:40', '2025-12-16 02:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `sejarahs`
--

CREATE TABLE `sejarahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sejarahs`
--

INSERT INTO `sejarahs` (`id`, `judul`, `konten`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah Desa', 'Desa ini didirikan pada tahun 1945 oleh para pendiri desa yang merupakan tokoh masyarakat setempat. Awalnya desa ini merupakan bagian dari desa induk yang kemudian berkembang menjadi desa definitif. \r\n\r\nNama desa diambil dari nama pohon besar yang tumbuh di tengah desa dan menjadi tempat berkumpul masyarakat. Seiring berjalannya waktu, desa ini terus berkembang dengan berbagai pembangunan infrastruktur dan peningkatan kesejahteraan masyarakat.\r\n\r\nPada tahun 1980, desa ini mulai mengembangkan sektor pertanian sebagai mata pencaharian utama masyarakat. Kemudian pada tahun 2000-an, mulai berkembang sektor UMKM dan pariwisata yang menjadi potensi unggulan desa.', NULL, '2025-12-16 02:04:41', '2025-12-16 02:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `situs`
--

CREATE TABLE `situs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `situs`
--

INSERT INTO `situs` (`id`, `nm_desa`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Watu Pari', 'Komba Utara', 'Manggarai Timur', 'Nusa Tenggara Timur', '12345', 'img-logo//6941799bc20b9.jpg', '2025-12-16 02:04:40', '2025-12-16 15:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `img_slider` varchar(255) NOT NULL,
  `link_btn` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `user_id`, `judul`, `deskripsi`, `img_slider`, `link_btn`, `created_at`, `updated_at`) VALUES
(1, 1, 'Selamat Datang di Website Desa', 'Portal informasi dan layanan desa yang transparan dan akuntabel', 'img-slider/694113dd70ee3.JPG', 'http://127.0.0.1:8000/berita/selamat-datang-di-website-desa', '2025-12-16 02:04:41', '2025-12-16 08:10:05'),
(2, 1, 'Desa Bersih dan Asri', 'Mari bersama-sama menjaga kebersihan lingkungan desa kita', 'img-slider/6940c0e4674fc.jpg', 'http://127.0.0.1:8000/berita/gotong-royong-membersihkan-lingkungan-desa', '2025-12-16 02:04:41', '2025-12-16 08:10:31'),
(3, 1, 'Potensi Desa', 'Kembangkan potensi desa melalui UMKM dan pertanian', 'img-slider/6940c0fb5fccf.jpg', 'http://127.0.0.1:8000/berita/program-bantuan-sosial-untuk-warga-kurang-mampu', '2025-12-16 02:04:41', '2025-12-16 08:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `umkms`
--

CREATE TABLE `umkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `produk` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` decimal(15,2) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `umkms`
--

INSERT INTO `umkms` (`id`, `user_id`, `produk`, `slug`, `deskripsi`, `foto`, `harga`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 1, 'Keripik Singkong', 'keripik-singkong', 'Keripik singkong dengan berbagai varian rasa yang renyah dan gurih', 'keripik.jpg', 25000.00, '081234567890', '2025-12-16 02:04:41', '2025-12-16 02:04:41'),
(2, 1, 'Batik Tulis', 'batik-tulis', 'Batik tulis dengan motif khas daerah yang berkualitas tinggi', 'batik.jpg', 350000.00, '081234567891', '2025-12-16 02:04:41', '2025-12-16 02:04:41'),
(3, 1, 'Madu Hutan', 'madu-hutan', 'Madu hutan murni yang dipanen langsung dari hutan', 'madu.jpg', 75000.00, '081234567892', '2025-12-16 02:04:41', '2025-12-16 02:04:41'),
(4, 1, 'Anyaman Bambuu', 'anyaman-bambu', '<p>Berbagai produk anyaman bambu seperti tas, tempat nasi, dan hiasan</p>', 'img-produk//6940d4822a810.jpg', 50000.00, '081234567897', '2025-12-16 02:04:41', '2025-12-16 08:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@desa.com', NULL, '$2y$10$TJQnuiG4IKWceJtKOpew1ug2ww/KEOUIap5Z8wX.rmuesohNJiqve', 'img-profil//694104279e66e.jpg', NULL, '2025-12-16 02:04:40', '2025-12-16 07:03:05'),
(2, 'Operator Desa', 'operator@desa.com', NULL, '$2y$10$1TlpQyCGdWR/G6woYNpZQeN8Ha4BLhB8Hi.nWRWMQQAgFhcDWYXPa', NULL, NULL, '2025-12-16 02:04:40', '2025-12-16 02:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `video_profils`
--

CREATE TABLE `video_profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `url_video` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_profils`
--

INSERT INTO `video_profils` (`id`, `judul`, `deskripsi`, `url_video`, `created_at`, `updated_at`) VALUES
(1, 'Profil Desa', 'Video profil desa yang menampilkan potensi dan keindahan desa', 'https://www.youtube.com/embed/iwkea2Mg-p0', '2025-12-16 02:04:41', '2025-12-16 06:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misis`
--

CREATE TABLE `visi_misis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visi_misis`
--

INSERT INTO `visi_misis` (`id`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(1, 'Terwujudnya Desa yang Maju, Mandiri, dan Sejahtera berdasarkan Gotong Royong dan Kearifan Lokal', '1. Meningkatkan kualitas pelayanan publik kepada masyarakat\r\n2. Mengembangkan potensi ekonomi desa berbasis pertanian dan UMKM\r\n3. Meningkatkan kualitas pendidikan dan kesehatan masyarakat\r\n4. Membangun infrastruktur desa yang memadai\r\n5. Melestarikan nilai-nilai budaya dan kearifan lokal\r\n6. Menciptakan tata kelola pemerintahan desa yang baik dan bersih', '2025-12-16 02:04:41', '2025-12-16 02:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `wilayahs`
--

CREATE TABLE `wilayahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wilayah` varchar(255) NOT NULL,
  `kepala_wilayah` varchar(255) DEFAULT NULL,
  `jumlah_kk` int(11) NOT NULL DEFAULT 0,
  `jumlah_penduduk` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wilayahs`
--

INSERT INTO `wilayahs` (`id`, `nama_wilayah`, `kepala_wilayah`, `jumlah_kk`, `jumlah_penduduk`, `created_at`, `updated_at`) VALUES
(1, 'RW 01', 'Bapak Slamet', 140, 600, '2025-12-16 02:04:40', '2025-12-16 08:09:23'),
(2, 'RW 02', 'Bapak Joko', 120, 480, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(3, 'RW 03', 'Bapak Budi', 180, 720, '2025-12-16 02:04:40', '2025-12-16 02:04:40'),
(4, 'RW 04', 'Bapak Ahmad', 140, 560, '2025-12-16 02:04:40', '2025-12-16 02:04:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agamas`
--
ALTER TABLE `agamas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agamas_user_id_foreign` (`user_id`);

--
-- Indexes for table `anggarans`
--
ALTER TABLE `anggarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggarans_user_id_foreign` (`user_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcements_user_id_foreign` (`user_id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beritas_slug_unique` (`slug`),
  ADD KEY `beritas_user_id_foreign` (`user_id`),
  ADD KEY `beritas_kategori_id_foreign` (`kategori_id`),
  ADD KEY `beritas_status_id_foreign` (`status_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_berita_id_foreign` (`berita_id`);

--
-- Indexes for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_replies_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kelamins`
--
ALTER TABLE `jenis_kelamins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_kelamins_user_id_foreign` (`user_id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_slug_unique` (`slug`),
  ADD KEY `kategoris_user_id_foreign` (`user_id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `layanans_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pekerjaans_user_id_foreign` (`user_id`);

--
-- Indexes for table `perangkat_desas`
--
ALTER TABLE `perangkat_desas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perangkat_desas_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `petas`
--
ALTER TABLE `petas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_statuses`
--
ALTER TABLE `post_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarahs`
--
ALTER TABLE `sejarahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `situs`
--
ALTER TABLE `situs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_user_id_foreign` (`user_id`);

--
-- Indexes for table `umkms`
--
ALTER TABLE `umkms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `umkms_slug_unique` (`slug`),
  ADD KEY `umkms_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_profils`
--
ALTER TABLE `video_profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi_misis`
--
ALTER TABLE `visi_misis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayahs`
--
ALTER TABLE `wilayahs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agamas`
--
ALTER TABLE `agamas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `anggarans`
--
ALTER TABLE `anggarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_kelamins`
--
ALTER TABLE `jenis_kelamins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `perangkat_desas`
--
ALTER TABLE `perangkat_desas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petas`
--
ALTER TABLE `petas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_statuses`
--
ALTER TABLE `post_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sejarahs`
--
ALTER TABLE `sejarahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `situs`
--
ALTER TABLE `situs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `umkms`
--
ALTER TABLE `umkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_profils`
--
ALTER TABLE `video_profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visi_misis`
--
ALTER TABLE `visi_misis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wilayahs`
--
ALTER TABLE `wilayahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agamas`
--
ALTER TABLE `agamas`
  ADD CONSTRAINT `agamas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `anggarans`
--
ALTER TABLE `anggarans`
  ADD CONSTRAINT `anggarans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `beritas_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `post_statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `beritas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_berita_id_foreign` FOREIGN KEY (`berita_id`) REFERENCES `beritas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD CONSTRAINT `comment_replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jenis_kelamins`
--
ALTER TABLE `jenis_kelamins`
  ADD CONSTRAINT `jenis_kelamins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD CONSTRAINT `kategoris_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `layanans`
--
ALTER TABLE `layanans`
  ADD CONSTRAINT `layanans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  ADD CONSTRAINT `pekerjaans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `perangkat_desas`
--
ALTER TABLE `perangkat_desas`
  ADD CONSTRAINT `perangkat_desas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `umkms`
--
ALTER TABLE `umkms`
  ADD CONSTRAINT `umkms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
