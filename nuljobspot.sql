-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 09:12 PM
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
-- Database: `nuljobspot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adminuser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminuser`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '$2y$10$qbJij87N9edhQjlCS/6PruNKcKu6p9Tto66x7AHu9mE5tQ3q6KLrG', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobs_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `uname`, `resume`, `jobs_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'Bossing', 'applicants/zlNJpc9N2oiHlEzb1WrlMwgZGfpUWYHLf6Yo2rgp.pdf', 1, '2022-06-21 00:02:46', '2022-06-21 00:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptions` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_logo`, `department`, `descriptions`, `created_at`, `updated_at`) VALUES
(1, 'images/2np1OjBsPFZ3Orp7QQaROcLmfQUi6Pa5m1p46Xhx.jpg', 'Criminology Department', 'Criminology Department of National U aiming to produce future police officers', '2022-06-20 23:45:25', '2022-06-20 23:45:25'),
(2, 'images/c2MuhTAyON4Lpd9Yb48HVLkkwPsvhIXtPkYY9KpT.jpg', 'CCS Department', 'College of Computer Studies Department of National U Laguna', '2022-06-20 23:45:46', '2022-06-20 23:45:46'),
(3, 'images/PxaTIAE92IkFzkMPpj6IJBTZAmomp5f8G47CcY1v.jpg', 'Magic Department', 'Magic Department of National University Laguna', '2022-06-20 23:46:07', '2022-06-20 23:46:07'),
(4, 'images/jtGZbwYo5Zjm66hkPflfF20aPUy7GrRvugOKGZch.jpg', 'Security Department', 'Department dedicated to protect and make NU-L', '2022-06-20 23:46:43', '2022-06-20 23:46:43'),
(5, 'images/YS1mMWJp0onYWuzJRkuxoiTKmntnUg5v4kw8Vhcz.jpg', 'General Education Department', 'Department that dedicates teaching General Education subjects/courses', '2022-06-20 23:47:17', '2022-06-20 23:47:17'),
(6, 'images/Il9HAuWt1wODbnTscJGGYQjVmFDI4pUUl7Un1qNB.jpg', 'Psychology Department', 'Department for Psychology', '2022-06-20 23:47:35', '2022-06-20 23:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `uname`, `job_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 3, 'Maine123', 1, 'Magician', '2022-06-21 00:09:26', '2022-06-21 00:15:15');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobs_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` int(10) UNSIGNED NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `qualifications` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `jobs_logo`, `title`, `dept_id`, `department`, `salary`, `qualifications`, `description`, `created_at`, `updated_at`) VALUES
(1, 'jobslogo/ON6tnoPXWOnLnCrrYNmZpifUp847tfOPj0Y2imIw.jpg', 'Magician', 3, 'Magic Department', 100000, '-Fast Hands\r\n-Good mind games\r\n-College Graduate', 'Magician aiming to perform on NU-L Stage', '2022-06-20 23:49:59', '2022-06-20 23:49:59'),
(2, 'jobslogo/8k95Ol9NKJV96uI7zIqXV5wfKYimyGCfsIAD0xJD.jpg', 'Magician\'s Assistant', 3, 'Magic Department', 50000, '-Female\r\n-Good looks\r\n-College Graduate', 'Assistant of a Magician', '2022-06-20 23:50:46', '2022-06-20 23:50:46'),
(3, 'jobslogo/OOFgEetiEIXkDmMSvC9YXPQGDbS2FnVW1wcawkLq.jpg', 'ROTC Officer', 1, 'Criminology Department', 100000, '-Criminology Graduate\r\n-Tall', 'In charge of ROTC for SHS students of NU-L', '2022-06-20 23:53:13', '2022-06-20 23:53:13'),
(4, 'jobslogo/SVt1SvX0LjuC0Nb25krnwmmm1vVaKY7kHWpQZ5mX.jpg', 'Police Instructor', 1, 'Criminology Department', 100000, '-College Graduate\r\n-Officer Rank', 'Teaches all about Criminology Course', '2022-06-20 23:54:15', '2022-06-20 23:54:15'),
(5, 'jobslogo/qLROwJ2qJvMW36ngEgcwNfoiQIenYYOiCENxzsVG.jpg', 'CCS Professor', 2, 'CCS Department', 150000, '-College Graduate\r\n-Knows a lot of programming language\r\n-Knows programming fundamentals', 'Teaches Programming and other CCS Related stuff', '2022-06-20 23:55:52', '2022-06-20 23:55:52'),
(8, 'jobslogo/yS24a7RefBmkUUuUxk4XrIXjn2s7IZCMvRYNQWCi.jpg', 'Cyber Security Officer', 4, 'Security Department', 100000, '-College Graduate\r\n-Have Cyber Security Background\r\n-Can work 24/7', 'Maintains Security Online and monitors online related NU-L posts etc.', '2022-06-21 00:00:45', '2022-06-21 00:00:45'),
(10, 'jobslogo/taPrfsip0x1lAMc3BRBEHXrxtHFZYR94SvrHlET5.png', 'Janitor', 2, 'CCS Department', 100000, '-good at cleaning\r\n-atleast college graduate', 'Janitor of NUL', '2022-06-22 17:48:23', '2022-06-22 17:49:16');

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2022_06_14_043911_create_departments_table', 1),
(24, '2022_06_14_043912_create_jobs_table', 1),
(25, '2022_06_15_145804_create_admin_table', 1),
(26, '2022_06_16_030544_create_applications_table', 1),
(27, '2022_06_19_165409_create_employees_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civilstatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `fname`, `lname`, `mname`, `gender`, `address`, `birthdate`, `contact_number`, `civilstatus`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '+639915273787', 'Palomaxers', 'Capistrano', 'Paloma', 'Male', 'Blk 227 lot 24 phase 2 Mabuhay City\r\nBrgy. Mamatid', '2000-11-01', '+639915273787', 'Single', 'ash@gmail.com', NULL, '$2y$10$/5yom8Not32MBdW.OoUKGOr.8AhBIyoyOWA98ReUOxc94pUqV2gZm', NULL, '2022-06-20 23:39:20', '2022-06-20 23:39:20'),
(2, 'Bossing', 'Vic', 'Sotto', 'Boss', 'Male', 'Eat Bulaga', '1955-01-01', '+639915273727', 'Married', 'vicboss@gmail.com', NULL, '$2y$10$7PDyCLjBq8o.MhC245/cTePsEru8FB8BzbdkTm/aunMKShHHlGnrm', NULL, '2022-06-20 23:40:06', '2022-06-20 23:40:06'),
(3, 'Maine123', 'Maine', 'Mendoza', 'Bulaga', 'Female', 'Eat Bolaga', '1990-01-01', '+639915258986', 'Married', 'maine@gmail.com', NULL, '$2y$10$721ZK05RZhESjb0WnDrFdOq4xrnLsjWOM55LkSdZLe4VdymCxE7Py', NULL, '2022-06-20 23:41:56', '2022-06-21 00:15:15'),
(4, 'Aldensss', 'Alden', 'Richards', 'Palma', 'Male', 'ASDASDASDASD', '2000-11-01', '+639915273653', 'Single', 'ashcaps43@gmail.com', NULL, '$2y$10$dZAnRASwQqwR2Ds7yGTTmej3yqC3QJtEN1baoUu4N4.nKeF/F0mgC', NULL, '2022-06-22 05:20:12', '2022-06-22 05:20:12'),
(5, 'JOseManalo', 'jose', 'manalo', 'kalbo', 'Male', 'Eat Bualaga', '2000-11-01', '+639915273666', 'Single', 'josemanalo@gmail.com', NULL, '$2y$10$La4uTV4KDG5GtUtf.zWm3.3ph3pQlgCVWWxnKZXaqUQ3mDti.Ns0O', NULL, '2022-06-22 05:44:54', '2022-06-22 05:44:54'),
(6, 'wallybayola', 'Wally', 'Bayola', 'Kalbo', 'Male', 'Eat Bulaga', '2000-11-01', '+639915273123', 'Married', 'wallyB@gmail.com', NULL, '$2y$10$MR1AESutk0sH0/xBtLWxiuhURHvGFoGBuI6ELSsrkJGFcHJvbn/.i', NULL, '2022-06-22 05:52:45', '2022-06-22 05:52:45'),
(7, 'AllanK', 'Allan Cayetano', 'K', 'EatBulaga', 'Male', 'San Roque Bilej', '2000-11-01', '+639915273555', 'Single', 'marksoni@gmail.com', NULL, '$2y$10$u0CJ45VZqIO.HhTVzXmzJuicNhmj1WdneLlKlTBB7DThb9MszAQDW', NULL, '2022-06-22 17:42:54', '2022-06-22 17:52:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_user_id_foreign` (`user_id`),
  ADD KEY `applications_jobs_id_foreign` (`jobs_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_user_id_foreign` (`user_id`),
  ADD KEY `employees_job_id_foreign` (`job_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_dept_id_foreign` (`dept_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_uname_unique` (`uname`),
  ADD UNIQUE KEY `users_contact_number_unique` (`contact_number`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_jobs_id_foreign` FOREIGN KEY (`jobs_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `employees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
