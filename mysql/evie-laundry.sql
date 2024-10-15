-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2024 pada 18.35
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evie-laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('register123@gmail.com|127.0.0.1', 'i:1;', 1720018014),
('register123@gmail.com|127.0.0.1:timer', 'i:1720018014;', 1720018014);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `cust_id` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`cust_id`, `nama_customer`, `alamat`, `created_at`, `updated_at`) VALUES
('C001', 'Jane Doe', 'Jl. Anggur', '2024-07-02 07:14:56', '2024-07-02 07:14:56'),
('C002', 'Berka', 'Jalan Dr. Moh. Hatta No.47, RT.3/RW.4, Binuang Kampung Dalam, Pauh', '2024-07-03 03:32:53', '2024-07-03 03:32:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` varchar(255) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `biaya` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `biaya`, `satuan`, `deskripsi`, `created_at`, `updated_at`) VALUES
('Bon', 'Boneka', 5000, 'potongan', NULL, '2024-07-03 19:50:45', '2024-07-03 19:50:45'),
('CS', 'Cuci Saja', 3000, 'kilogram', 'Mantap', '2024-07-02 15:43:58', '2024-07-02 15:43:58'),
('CSt', 'Cuci Setrika', 7000, 'kilogram', 'Kelas', '2024-07-03 02:33:58', '2024-07-03 02:33:58'),
('S', 'Selimut', 20000, 'potongan', 'Oke', '2024-07-03 05:16:47', '2024-07-03 05:16:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '0001_01_01_000001_create_cache_table', 1),
(10, '0001_01_01_000002_create_jobs_table', 1),
(11, '2024_06_29_000000_create_staffs_table', 1),
(12, '2024_06_29_010000_create_users_table', 1),
(13, '2024_07_02_132641_create_customers_table', 2),
(14, '2024_07_02_140424_create_customers_table', 3),
(15, '2024_07_02_140957_create_customers_table', 4),
(16, '2024_07_02_205958_create_layanan_table', 5),
(17, '2024_07_02_214943_create_transaction_details_table', 6),
(18, '2024_07_03_110404_create_transaction_headers_table', 7),
(19, '2024_07_03_132138_create_transaction_details_table', 8),
(20, '2024_07_03_134211_create_transaction_details_table', 9),
(21, '2024_07_03_134348_create_transaction_headers_table', 10),
(22, '2024_07_03_142807_create_transaction_details_table', 11),
(23, '2024_07_03_142925_create_transaction_headers_table', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BZ73gG0nIGTDu8MTm9ymY1VOCcgmIN4AIZQPoV7w', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUlRLdmRYWGN6dldHYXNzNWdlU0lTMGJOeUxWd1BJaG9GUEFvMkQ1ZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jdXN0b21lciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1729010016);

-- --------------------------------------------------------

--
-- Struktur dari tabel `staffs`
--

CREATE TABLE `staffs` (
  `staff_id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'staff',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `staffs`
--

INSERT INTO `staffs` (`staff_id`, `nama`, `role`, `created_at`, `updated_at`) VALUES
('S001', 'Manusia', 'admin', '2024-07-02 01:11:45', '2024-07-02 06:16:06'),
('S002', 'Jane Smith', 'admin', '2024-07-02 01:11:45', '2024-07-02 14:33:48'),
('S003', 'Robert Brown', 'staff', '2024-07-02 01:11:45', '2024-07-02 01:11:45'),
('S004', 'Dagon', 'staff', '2024-07-02 01:36:34', '2024-07-02 01:36:34'),
('S005', 'Hanami', 'staff', '2024-07-02 01:37:02', '2024-07-02 01:37:02'),
('S006', 'Gojo Satoru', 'admin', '2024-07-02 01:39:10', '2024-07-02 01:39:10'),
('S007', 'Berka Aldizar', 'admin', '2024-07-02 03:03:15', '2024-07-02 03:03:15'),
('S008', 'Arduino', 'staff', '2024-07-02 03:14:57', '2024-07-02 03:14:57'),
('S009', 'Mega', 'staff', '2024-07-02 14:34:02', '2024-07-02 14:34:02'),
('S010', 'Nabila Satoru', 'staff', '2024-07-03 02:32:51', '2024-07-03 02:32:51'),
('S011', 'Asyifa Putri R', 'admin', '2024-07-03 02:35:33', '2024-07-03 02:35:51'),
('S012', 'Aulia Defy Hasanah', 'staff', '2024-07-03 05:18:03', '2024-07-03 05:18:03'),
('S013', 'Bang Vicky', 'admin', '2024-07-03 19:44:11', '2024-07-03 19:44:28'),
('S014', 'Berka Aldizar', 'staff', '2024-07-03 20:02:33', '2024-07-03 20:02:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_details`
--

CREATE TABLE `transaction_details` (
  `no_pesanan` int(11) NOT NULL,
  `id_layanan` varchar(255) DEFAULT NULL,
  `kuantitas` int(11) NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `metode_pembayaran` varchar(255) DEFAULT NULL,
  `status_pembayaran` varchar(255) NOT NULL DEFAULT 'belum bayar',
  `nama_customer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaction_details`
--

INSERT INTO `transaction_details` (`no_pesanan`, `id_layanan`, `kuantitas`, `total_biaya`, `metode_pembayaran`, `status_pembayaran`, `nama_customer`, `created_at`, `updated_at`) VALUES
(3, 'CSt', 3, 7000, 'Tunai', 'belum bayar', 'Kita', '2024-07-03 19:46:48', '2024-07-03 19:46:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_headers`
--

CREATE TABLE `transaction_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_pesanan` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `cust_id` varchar(255) DEFAULT NULL,
  `staff_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaction_headers`
--

INSERT INTO `transaction_headers` (`id`, `no_pesanan`, `tanggal_masuk`, `cust_id`, `staff_id`, `created_at`, `updated_at`) VALUES
(4, 3, '2024-07-04', NULL, 'S004', '2024-07-03 19:46:48', '2024-07-03 19:46:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` varchar(255) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `staff_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'S001', 'admin@gmail.com', NULL, '$2y$12$9YPI.JWMGWJ9f5arCs.uEuGj9.s81DViDDDa4279kT03lLDQXUZSW', NULL, '2024-07-02 01:12:00', '2024-07-02 01:12:00'),
(2, 'S002', 'ainul@gmail.com', NULL, '$2y$12$UQjvRQFKUZ6vzcbQB1LKj.vk9OwRnwPZN0zzWioJW6KuelZP1dKL2', NULL, '2024-07-03 02:31:14', '2024-07-03 02:31:14'),
(3, 'S011', 'aldizardrive8@gmail.com', NULL, '$2y$12$XPssCZsP/a1Jw2PeY9Cwre9boHJvzg.tKp9b2jfuMmIi8YdkbVxFO', NULL, '2024-07-03 04:25:14', '2024-07-03 04:25:14'),
(4, 'S002', 'berka123@gmail.com', NULL, '$2y$12$6xfvytmjFZNvTMWfQ76iQOheP8qUibaebFEhzX/iWDE/aZvrsmrgW', 'JfsGfDytKsaHFJLCMSmqfGKi60U0pTKR2tzlbko5nTdrQ0hYFD7JxZKKNJWN', '2024-07-03 07:45:25', '2024-07-03 07:45:25'),
(5, 'S004', 'berka7@gmail.com', NULL, '$2y$12$IiI5YiMc2/UajtpOYn44l.HcvNAiYlmZiyoA.7bY2kKdZNiBXK8Hq', NULL, '2024-07-03 19:42:11', '2024-07-03 19:42:11'),
(6, 'S013', 'vicky@gmail.com', NULL, '$2y$12$QGlof6WH1uZAKbQfFaY.i.cAgZovbHyhP9tItFsfiIdclSTGOMntq', NULL, '2024-07-03 19:56:50', '2024-07-03 19:56:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indeks untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`no_pesanan`),
  ADD KEY `transaction_details_id_layanan_foreign` (`id_layanan`);

--
-- Indeks untuk tabel `transaction_headers`
--
ALTER TABLE `transaction_headers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_headers_no_pesanan_foreign` (`no_pesanan`),
  ADD KEY `transaction_headers_cust_id_foreign` (`cust_id`),
  ADD KEY `transaction_headers_staff_id_foreign` (`staff_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_staff_id_foreign` (`staff_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `transaction_headers`
--
ALTER TABLE `transaction_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_id_layanan_foreign` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`);

--
-- Ketidakleluasaan untuk tabel `transaction_headers`
--
ALTER TABLE `transaction_headers`
  ADD CONSTRAINT `transaction_headers_cust_id_foreign` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`),
  ADD CONSTRAINT `transaction_headers_no_pesanan_foreign` FOREIGN KEY (`no_pesanan`) REFERENCES `transaction_details` (`no_pesanan`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaction_headers_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`staff_id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`staff_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
