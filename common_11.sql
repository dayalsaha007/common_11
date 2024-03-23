-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 07:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `common_11`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jobs`
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
-- Table structure for table `job_batches`
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_23_182121_create_seos_table', 2);

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
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer_logo` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `footer_logo`, `meta_title`, `meta_keyword`, `meta_description`, `facebook`, `twitter`, `google`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'backend/uploads/footer_logo/1794343119683663.png', 'Lorem ipsum dolor sit', 'Lorem ipsum, Lorem ipsum dolor', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.google.com/', 'https://www.linkedin.com/', NULL, '2024-03-23 12:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('01gGxnSsLeCU9ZOuNIhrz6SBd9w6WhZtAsKfsNFz', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzBrTVBNNUlMREdvR0lNdEZHc0s0enN6c3I4dld4YVFNNGRRNUU2ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218458),
('07vyh4jhVDFrRpZtlxC44v8XbA7bK4cZuta3I8QH', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZzZQNHNXZmJCRWFMNHhITnNPOWUzNW91SG41d25HMXZJNFJvWDdpVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213672),
('0lwgI5nm4CzM4zJRXcvBhySuvKzD5ZsJaxcEighR', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzBCQU1rNjM1a0RxNldKV0p6RUpHb1dJZHpxRDQyckt2Rk1aOVRrMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218636),
('0OIBWl6rR6dGbrls3LJvaG422Cwidi1JPCmrweGW', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlNmT3NEMFA0dFNRb3dqZ05URVpLT1lVUFZYN3B0UzVxbkh1c0pHeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711212988),
('1o7WH6SqNj6AXxqobFiSNQddCtk9KmtsRgEAGr8k', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVgzNDQzaHBvREZYRzV4b043TmRKNGdhMDNhS1dCaVBLVTVDS3pzSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218108),
('24F0oBMuybbsi41XC6UrwPasndQDcR7xZ50xl64I', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaUVhb0xlbUxZWDl5Tm43bFJudGpja1ZJTW1xRXJ3ZnQ4S096MTk2ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218355),
('4EP0r6wIQdY5I3FzzIPFiYo9wHQ5snK62PgXQVvF', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2Y2TGFvcVBrT1NTcnl2QnpKSG8wc2lYNnJnN2JHaDZ3UWhSVE55VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218111),
('51xbNHtRF4aPpsjNnNd2w3h6xaxx6rrIcqkxEhzF', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic05yb1ZQWjRHbEZ2MVJIWlFOSmVMdjA5U2pVSFdnSEdoeVFwbTZGSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218042),
('71suF5ZnLGWe6nnx0QLcsEdc7PQpLfSnojpIHKM3', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSDljZVVVaTJ5dkpWc0JKSG9zVXE3aFlrb0ZRU0FzcVJjUU5UeGd0eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216833),
('84TuBQfdj0MwS29zjRUMlPpvRI8RALhq8fIDSoOE', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEZ0NERLeTV2QmNiOWNmTG95bEZaMmZvNnhwTWpSYXVOazVka0I0WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213531),
('8SUvRDkPP4JxK8YyPSv6upOrVqv3MCbPDeC3F7s4', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNVJtWld2dGFkWktLN1A3OUwwcG0wOFVwaHJRWEF6QVRqeTNrTklQaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213996),
('a01sLppKe0u51Fzi5aymJFXGDR9DE837wDiVXtY0', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZHV6V3JoODZ3dG1rWUFVd3Zhdk9VVUdUVDNTTW5ZaURLSElTcWJ3QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218148),
('AJbbeLKrdikxV57hwajtPENWSY6bu2wJXzDI5KZn', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOU1ZeVZiWW8yaGRwSXFLQUs1ckRHWGFXZ0wxcHBGOUlhS05wOURXRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216907),
('aVZ1xRGZyPyeyERNgcGm2i95tpHgj1iLVum2F4Zl', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUczYUhUNFBXS2V1MUFnMk5YMWZrT0tGd2YwYjRYRlhaV0tBZHBuViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218105),
('B4LsIlSBaf76Q0KTHgqLl3cuCNkU5jv2NzqlhLxM', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSERWdFFtcm40QVY5UkowOVBzQU5hak5NTmFOQUlMRUVSZExsRWZEUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213393),
('bgMPJogtvlHHdZ7adxTzS0kwHxZQqCtw8mGkyr98', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjFGT3JzYXBaV2EyaERXc1B3eEt1elpmZFIzcjVQaEVqWW9lcWpoZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218473),
('BiXULTuYE81yLJS6mAZiVJWzm2O5XDIeO9oFbqHH', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0FYVzFwQ2x3bFNWWDdUZlF5aWpoWld6RHNMRzg3eWZlR2VHWTBOdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218680),
('bMdr6iv8IKWXJ1aJWiS0qrvWllkNwpEsZibbPSAf', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMm90eWdpeFRobGRpMFFRRk9veEJISDB0MUdpVVRuMk5EWDI5UVJJYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218907),
('bom88uBnU0jIphemohJ9weGyG8ZiG3M1yvhRgTyT', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWlDNEVmWUREVGkySlE0S0hVYmJ5empSN3JoZGRIRkZ1eENTZlJCYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711217001),
('c0qEES91CNwo5A2yksK11oBwETYCCiddfpSOGK6l', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVNNNEl0djh0RGE3NVV0ZzJrMWZ4czdqUWlNUGF1VXRCTzdKcEYwQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213928),
('ClpY82mCsD1r0CXVGuuGICr9HUfgsvjiMHao2Ihl', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFVOaHFXU2QxVlliN0Q3MTZUUEo5amppdGFzNmNhbldydUFiQW9lbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218470),
('d4AwIoMjDgcdmkLqiCTyvyFl4zR6MPQ3AzGNzLRp', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV1BaUjlsbEs1RGR4Qk5Qd3JCcVJZUGxKM2NUVnFwblhpUmRkNnZPWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218936),
('DDfUJCs2IdEXuWSZZFwTiMsVRcJzTfd5V6Me1m55', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0xsZUV1UVJ1QU9mU2hlbTZIWUJkUUNPd2I3dE5ZZ2xMUG02N3AwSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218157),
('EZJM9cg1xO5MB33szJYhyLoEsV67mnvmYuM9HSOD', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1VRNElvQlRBNGFRZG92Ukc0QTFWd3MzSVRZQ2U3SWpndGt2Zm1DcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213355),
('fN7113q6EVrJRPY13UIpxXLkUh3SBwtItF6xVAyD', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUU9qYUpzeVJjZHJhNkpaM0lNdVQ5U3FlWEdMWkN5c3ZKekZGRjlJUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218685),
('FRpAsLTKCpSnsk0hp8BN9omED1A7B0ZPzQwWWbfw', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWZXb056c2JjTWtRNmdCQ2x6eVNLZTFxMHNVVXVSNnlnY1p4N2xHdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218096),
('ftbGquHBLrJ83L2LLAIhH4ceIBntfN6Q0Snu0z7n', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYjV3b2NNeXpDNDhXUWRpdUlyRHlEZUx1T2FwdUI0S3p6YTV0RFJVcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZHZhbmNlL3NldHRpbmciO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1711218948),
('FucqDUojbLABpu8DjLoAj40qSSTc1U67KBF9PKOB', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkNtSEhSY2NHcFRZc0xaNUJmZWlGZVhuTlpYeTVwd2RMWHFJUW1xSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711217093),
('FUFvIXQla9iwhCpSuLk9jNTAc4Tr1HAubV9mYlpJ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicElHMGNyMVBiaGczVXJRTVY0Z1JQVUNOMklJNDZpYWlZaXRUZm0xdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218099),
('Fw1uXYJPmHMxfwXplibdq9mhbhIY2K9vKtauIrxt', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia1psak1FWmJMaFMybUlZcnZITzNkdHRORlc0NEdtdVJ2cWdHdDEwaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711212938),
('fYTsGxmojpKK51K6ctDZVYaa8YpD0WM1TTyZW52z', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN3FYY3ZROWlvMXhRVklkbGhsSFpGVmNab3oxd0twREVJYkFsQ2d5USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216997),
('Gn16rSJcsoDn0EYI8YTcWGPmke14nVVpOoOw9fXG', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidTlSTVBaZGNoMmRnWHg1NWdYOFhaM1Rvd0pQTWJwaWo3RE43dWF1RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216889),
('gStGCKKLSNX24CbLjqTB4cx4kuwyn3dOjcK4wupx', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0V0RWJHZGp1NHVwV3hkVDRPaHFWZVM1cVdGbWtRNnI3ZG1QTVpiRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213316),
('hAJgHdqWl3PjR8j83KxkzXJ4TkCvlSJ41pbEIeND', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnVvMVZ6c1RzV0t4U1BENW1RTmc2UDg0ZlpMN2txRE9FODlQU3lETiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218140),
('hdLaHVYsAnRcATnq5bkAR4viVlnV5jyqGKmcbPUN', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYmU3bGFoeklrUTRzOUZnZUlJZ1I1VTV1cVZia1kzSzZtVlJ6ejFRZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218484),
('htgdB1URRbTqHUUwQ283UOg2XyzpsmdvYuMeBrC0', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYllYaVpMbXhkR29VMjRQYXJjeGRyeXozYTJjTDZhdmxmSkZqTHlFYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213378),
('I2WRVY7o8Mr7gTkkIRE4kZJptuiu5VpuKFif62ks', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT3dOajZreDBGWkdJOG8xSzJsVlNHTEdUWkROODJWSk9BOEtmaVNybiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711214032),
('Iernji7uHMDxAbIJUKhPG8BTQvJVJTU1RuutFbeq', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN1I0ZkdEUmtPSUswZWlRakJteFBBd2ppWHMyTTJDZkNYTkFDcm9zRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213565),
('IyQDflvJqrscRPAVreDf6yMc1SQ6URtAiZqyKvIN', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZHVhY0pScUJ5bVc5S1JhRTZpcGtxMEdSUXNzN1g0Z0NoOXVERVh3aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213364),
('JfsSmT7uI8RSCIVQ7gP3k8DD6YbDiWZX9jzXp8Gs', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRDlCSDEyVUc4ZG1YeUxQUTZDa29aRnF1UnJpZFA3dWsxT0QxQUE5YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216987),
('JoG9qiH17ms7BjdHiwtkjhmvSKkvAT6ajMuojuQE', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiamxzUTBOZ2s4bmNNV3I4TzNENFc2UHFYVUVGUGdzUEgxRkMzdVJZbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216877),
('kbFW7zoA5MGOLUEr0d3yTEjCoEV5AxPwyhOFpifL', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVVhlVEk4M3FxN3RaMDNUeHpwRXhFMUtvVExIMk9FN1d4Qk5OS3BpNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213991),
('kizRfwb8glYGIW0wGKiU1dfm90SnNhyre6Qm9X5K', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYVZVNzBEc3p3aE5zanozVDZmOWt3eVh2bUtibGk1ZnlPdnB2NWxoUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213628),
('kzvqHEME8wMbZfbSarxjAM3UmFQO3laDw5SHSTKF', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajZ3QXdsYWp6cVJGUWdveHR0dEdvbG1KYW5NZFRIMTE5OEtIeGNQOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213445),
('LjYSNiEr5Z4ktYhMjdA2MJvl2Gur8by88PduaeBw', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVm9IZ1hZSWcyYjVMenY0ZnNtd0p4aTVVeFVtMW42QWxhUTlCcDBVbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213556),
('lvfREL69Xgx4VI3etcbLKvdNTcneiulqHek3wvRT', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUmJ2RmU4aTlDbTV4Z0NmMEdyODMxTVpsdnVwbXQyVm1MTFZqbUhwRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711212580),
('m0HRFuCk50ktTF9877rEhZfJ2FvyvyQOpePr5RH8', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic3JpVWdmektMcjYyMWVTMEJqV2daVmZhNUxaRGkyWmxJZjc0aU9xQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218853),
('m7rMovdO7mydzh92U4smZM9b4vG7g8byXxerok5K', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU1pEMmRwbHZGWW1vTlgyYzNseXpSUjBkT2FUcWpsMFZiRXdLSW91OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218352),
('MCHw6W1NubGGrlhd638RrMeU5nH9IFdFrx6roV3k', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVlk0UVFlTmpXR0pkTW1hb0hWeGdNUmM1RW10UGo4cDZIY2lOY1FmTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218461),
('Ms2PDOD5A52u5RuqWiZMnIXI6SpAnfxfvWn2MvSX', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWEFmY0RrWVFCM3QyMVFBd3REVmk1Z1d3Y1FGcmVabG9XSlE3cVVrRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711217034),
('Mykghotyt9NEIqGEaIL0zvUcnqipOpUhYWPh2zZ3', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNzM1YXZkRWp5eWxlQm51ZGtMS3FiejVJUXFNSllFaFBIaXBFeE9QOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213912),
('n2lCcXTMwwcRuRrM84Ol93NRjesgFPDSHe1Mgmmi', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTnJSOGU3MmNkN21YZUpkY0k2MkI5OFJRem9lWkZneTkwckxTU01pTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216912),
('Nc0KZhRLYbnLX2ibTbVxtbPirLK28L6yiz3fSl1B', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVmVETndMakdvTFozV21tckdRTWlwdjE0VE1uejZiRXVTY056WEVEQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213681),
('nH6ryF6hEfWZHZq35Pm1W1Gq5opNQBJdRYmDqx0A', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOEFiZkNYdld1MU9yY0dJZFdsQlNtM3pUUHZVWGIwVHpqb1d1cWVrdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216733),
('O1fBsBnKxd6TFkDSEQ7dtPIWFH9S3EGdVmF0Esbl', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejlMZHJ4OWNmTG1JdWlxM2RybmFqTEtHNEh5c2pIckdnR2t2Vm5HbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216803),
('OL45olHcFDO4kRN0anA4NdpOPCCGAD2LmE15DzCc', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiREJTMkVSNXd4Qmx2eVQ2WXhuZ2VnS05BdUc3ZE9JaFhKZ1RUNTFPeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218180),
('OLWjysYVhjKpNhtju1S7wOMoDbSjN8noqLkHMckE', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlhqalpvanY2TnI4YlhhZ2V6QXQ0alFOY0NXcE12UlVtTjBvbUpteSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213593),
('oRtwKkIhzQ3Lg8u9nFOhumAKteuuscnrNttf6tbj', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieTZrYjRmaDkxNGJNU1QybUZCM0pqSVQ1NzliY2Jqb0R3c3BDWVkwZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216943),
('P2sqeDeo6gS2DJxlC551MWinUpInea1O1DI0zKbn', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN3VGdFNvNVNQcG9nYXpWUlFNcjQ0S2cwVmlVREVmc3p4MTVTNmhZYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216931),
('p4GtvjV3vPgcuVBu4kmDv2D1M5ULa8AqBTCeqohn', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSjFZQmM0S2ExTlNYY0NYY0dUcmRObEdHUXpreGxXR3ZXbXF3MTdsSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213922),
('pBtnXgZbKU1ai4nRcI1Q3ys6ww4dXoSvMfyl2B5c', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOWx2ek9MNldLMlJEUGM2VFl4NTVtN1hWdzRNUEY5QnRENEN4N0ZlbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213918),
('Pf7qgAfinr1dxa6gXp2J6gMERb4UOQqmGXUpnkoR', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieDE5T29BVDN6TWwzM2I1QW1Jc0lEV2pRTWtDYm1oT0dSa2RPMDl3ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711212877),
('PNB7GSt4A4amrLplN8XHehkhHjTltrgqHVVFQily', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR2Naek0xRmhwV2RjWVdJZkFTMjJmMmhVU243RXRkNWE4cFh6dW9wSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216919),
('RJM6QU6HJivEo2xh6unt3bvgG5Cw7mCTuxoB0EFm', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ3dPYVJsS1R1OE1wYjIyTGcxNnJWSVd1NGhldnNEbkM1UzJweTFRVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218688),
('rNwJScD6w2DtnUubdwbiO6ecO9w7CddkBCuzumhS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3RKYmFydVB1M21yZTBOejZPVkpDV3MxOU55YlZCajZOTTlmR0pOUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711212586),
('rTlWXd3DBwyRymj8F83jBEmbtrVt8OGaYMCx90Co', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTNNaElHaGZiNlpGa2NDZW5hZ2xzWE1rVURDZUVwRlB4bjBFMW5PcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218693),
('U5Y5ExXBoieNqPJkeAjwF7U3dd0eCKM8xChQYyoz', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWxpVHdIbU1WcnVGNFNDM1M4VExLUUdvZTBsWVdPWlVwNXVMaG5pMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711212575),
('ukNPYw3OP290rF8Hk2ozfB89R5NrBogcflXKzaYl', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNVFHWjhPekxlRzNvZTVQdDkxOFBKWDJTSjJwRTBRdnRWbGJUYlA5VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218431),
('uRpiwzIBS3QP4MNdO3fQQPsdDSWT7JAzPUHg3qhC', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUtkeUxEeWdOdEcwbmVqclRhd2hmcnYxd1ZrMWFNWWVvSkFPb3JyYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213464),
('V6WCoT919xpwQG1hSQqoBTfv7ptooiHgBnxlnlFy', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiODZvZHc0dXV1cUJYWThlb2hWdEtrZjBxZVFXa210N1dBN0ZmV2RTbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711217083),
('VJkHD0Cbb6W982XHCfOJrsNIh86wCMWVTprLqz0o', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNHBFN1E4NmFJSmhZbWdiR2VyOGZwZGplOTIxa3kxYmN6Ym9MNGNheiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213506),
('VzQkmHSfktYofJHzT7nnZI4joXCXAPmExAZyxqOg', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidkNFUUw2alJEVlp4dVF1c2JhV0pyN1dObFFydHZ4UEF5UXhhcG5zUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213684),
('wbTA9MtEZasrh8NmhnidK99sxflKeTY1yhiwiYVx', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR2xTdGhUQ1FHRE1tR0w2U1pKUDRwSUNYa3E4WUJnZVF4eVZCRXo2ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213655),
('wlPIWXgJ3mzN5r0fuemU9TKCSYbDy5WO4HAnpGD0', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNzY0b0pqQVJMOG1nR3Rhb043WnR0Um1VVGhEV0ZTUFdlMmlUaFBOMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218926),
('xcrZQVFBxFjcFOydjUTNHDmeLVpCTAtDXcyd8TYL', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiamJhdXRUT2x4aTl6eFhYYWZrRjJvZHowa3JYeVJJOVdlTndydFA0dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216899),
('xEdLZKdsHFQXFgv9ciVcwonADCsbhjJ2sZkGxzej', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWkVtSW5FQ0VIaU9nb2NDdng5eEk2Yk5DaWNPYUlrQk5GVmd1YVpIdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711218132),
('XG2gyMaBKcFkEQmcwiolUIUbgcOgIL8FKftsJyvL', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2dxdHI1MDVTRHc4VGRJSkpuSDhxQktiUUo1ZGx1b25FSVNyU0JWbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711213528),
('XhFhVSrB1rRmW6W98w65bdbFqhQAE0hQyW9m9s8b', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidUc1Z24zNks3a3VSVllua2dCUUR2N2N1UllhWGZNcmRYaXpEV3lMNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216865),
('xklHJwMQOrDdKx1Ud3KEwZnl9N6eqNEYFH9UveCE', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGZGbHVDZnhuQmJaVEhWbDI1aUpOTm1nWXQ1WGlBQ2lJcUt0clVtYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216522),
('XLEfLIUdtX2hmv6ZaOcA8Orf36Rom6LUjGhxPVNE', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQkJ3OGlkSHg4NEZiQWtKREJwdUdzQU9DR21TQjM2VXlNR2NqQm54cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216909),
('y0DDXVftThUb8xySAp7D8L185CEobGLnHummjlLI', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYlJ3cnFoek9mVVhwZ1k4TmdFc0xPcDdnY29TT3lLWmlWV1BBWGp0NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216879),
('Z28zxlSp3EkPJrBnGxOP1hw4fAVFmBq0gwsbPsR6', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVVloa2ZzSXVIejh1SUsyZmUyeHJRaDZMdUwxajlyNzV6Y3RJVlJEViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216958),
('z2ApgIPcuMwSQ31IjOzyoM1aQKhHbWLz1OmhTEa0', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidDhEOVlXVmNwRVMxSmRUb3laaDJzQ2c4aFBBdWNnenBaU1czU05nSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711216962),
('ZhAopAC354GaSKMXK83labhXq9hqhU86V3EDFm4k', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3NCR1lYMnBheUJDWHo0Tk4zQ0IwUWNnNlc4THMwc1BuUDZtdk1WWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711217013),
('zMNld3GkqCRRSstrSUBORfZrNfOAtEKcrC3IvafG', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWhGTmo0dFJvS1RFSVNBd1RyZ3RlZ1k5OU1IUnlYZGUxRTVPSnNCdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711212957);

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
  `show_password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT '3',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `show_password`, `image`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dayal Saha', 'admin@gmail.com', NULL, '$2y$12$7uhDe6dRVq4sFUludcKfXOsxofD6NVAnHf1.zz5zpJiql/Y7ouEHC', NULL, NULL, '1', NULL, '2024-03-23 01:21:03', '2024-03-23 01:21:03'),
(2, 'pialy saha', 'pialy@gmail.com', NULL, '$2y$12$VTqj.tWroIOOPmfFNzZiy.UjU4CK7eBoYFW9XY72tFsavQrQ3go1y', NULL, NULL, '2', NULL, '2024-03-23 01:21:45', '2024-03-23 01:21:45'),
(3, 'puspo saha', 'puspo@gmail.com', NULL, '$2y$12$vC5nPkdyIUVo9/ARCSkDPuSMHdMch3LZYt55U3w69Te8L5wdexmJK', NULL, NULL, '3', NULL, '2024-03-23 01:24:54', '2024-03-23 01:24:54'),
(5, 'Tuku Saha', 'tuku@gmail.com', NULL, '$2y$12$509FKob5M.WR4GWBHcoI3.y2bMHj4907ySYzBxHCWvohsh97UVnbu', 'dayal007', NULL, '3', NULL, '2024-03-23 05:33:19', '2024-03-23 05:33:19'),
(6, 'Lev Wiley', 'nytepaluk@mailinator.com', NULL, '$2y$12$k5sVCst7GbmIKJHJ20a3au8rhlTSChzExLJql99PtbGILhclh5j22', 'Pa$$w0rd!', NULL, '3', NULL, '2024-03-23 09:51:34', '2024-03-23 09:51:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

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
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
