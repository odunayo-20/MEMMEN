-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 02:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manomen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `token`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Alade Odunayo', 'admin1@gmail.com', NULL, ' ', 'public/admin/Yd1btQ7jyFlx0HXGVBwyA1aDGwREVqNb6ps83pmX.jpg', '$2y$12$qFkNMqemIWv1e6RY0Dxb3.xpjbbnPM8gIIGGFtSVV.BvxyrXw6mOm', NULL, NULL, '2024-01-11 20:12:45'),
(4, 'Samuel ayomide', 'admin2@gmail.com', NULL, NULL, 'public/admin/ftE12ENVkqmizooMVVpUqhrVbyR31CXp3Swril3N.jpg', '$2y$12$qegkgdJelSBJD7EsUwjmN.ycF.9c3Xx/CWL0wpw5Se1Oc2cSxswGy', NULL, NULL, '2024-01-06 14:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Admin2', 'admin3@gmail.com', 'eveniet nam quod ipsum ex obcaecati consectetur mollitia illo!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ipsa eligendi sunt laudantium neque nesciunt cum nam exercitationem odio dolorum blanditiis omnis rerum corporis vero necessitatibus, expedita deleniti laborum error, culpa voluptatibus, quisquam explicabo quae ducimus dicta. Deserunt atque at quidem fuga eaque voluptatibus minus iure nam eos enim. Voluptas aliquid amet ipsa explicabo fugit. Voluptate iusto, suscipit nam provident molestias maiores nobis? Itaque soluta quibusdam, quisquam enim mollitia animi ipsa consequatur! Corrupti, debitis? Facere laboriosam dolore dignissimos odit? Quos ut alias est vel maiores, harum numquam veniam velit necessitatibus, pariatur eveniet nam quod ipsum ex obcaecati consectetur mollitia illo!\n', '2024-01-06 15:02:29', '2024-01-06 15:02:29'),
(4, 'Admin3', 'admi3n@gmail.com', 'lorenkncdnascndsalknckdsnadklnsandlkvnsknvlskndvsadsasadv', ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam incidunt a fugiat, amet iste consequatur asperiores praesentium fugit odio repudiandae, alias enim nostrum cumque molestiae voluptates placeat itaque fuga doloribus veniam repellendus dolorum sit. Minus, perferendis qui repellendus quibusdam quasi, facilis exercitationem repellat natus eius, fugiat veniam! Dolore dignissimos velit voluptas officiis, ab laudantium repellendus maiores veritatis culpa cupiditate vitae voluptatum hic, esse quis molestiae a porro ipsam nihil eligendi repellat! Explicabo repellat vero esse ipsum voluptates accusantium, aspernatur recusandae facilis eius dignissimos minus deleniti fugiat cumque, nihil illo laudantium numquam laborum doloribus voluptatem enim. Aspernatur corporis dolore suscipit unde. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam incidunt a fugiat, amet iste consequatur asperiores praesentium fugit odio repudiandae, alias enim nostrum cumque molestiae voluptates placeat itaque fuga doloribus veniam repellendus dolorum sit. Minus, perferendis qui repellendus quibusdam quasi, facilis exercitationem repellat natus eius, fugiat veniam! Dolore dignissimos velit voluptas officiis, ab laudantium repellendus maiores veritatis culpa cupiditate vitae voluptatum hic, esse quis molestiae a porro ipsam nihil eligendi repellat! Explicabo repellat vero esse ipsum voluptates accusantium, aspernatur recusandae facilis eius dignissimos minus deleniti fugiat cumque, nihil illo laudantium numquam laborum doloribus voluptatem enim. Aspernatur corporis dolore suscipit unde. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam incidunt a fugiat, amet iste consequatur asperiores praesentium fugit odio repudiandae, alias enim nostrum cumque molestiae voluptates placeat itaque fuga doloribus veniam repellendus dolorum sit. Minus, perferendis qui repellendus quibusdam quasi, facilis exercitationem repellat natus eius, fugiat veniam! Dolore dignissimos velit voluptas officiis, ab laudantium repellendus maiores veritatis culpa cupiditate vitae voluptatum hic, esse quis molestiae a porro ipsam nihil eligendi repellat! Explicabo repellat vero esse ipsum voluptates accusantium, aspernatur recusandae facilis eius dignissimos minus deleniti fugiat cumque, nihil illo laudantium numquam laborum doloribus voluptatem enim. Aspernatur corporis dolore suscipit unde. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam incidunt a fugiat, amet iste consequatur asperiores praesentium fugit odio repudiandae, alias enim nostrum cumque molestiae voluptates placeat itaque fuga doloribus veniam repellendus dolorum sit. Minus, perferendis qui repellendus quibusdam quasi, facilis exercitationem repellat natus eius, fugiat veniam! Dolore dignissimos velit voluptas officiis, ab laudantium repellendus maiores veritatis culpa cupiditate vitae voluptatum hic, esse quis molestiae a porro ipsam nihil eligendi repellat! Explicabo repellat vero esse ipsum voluptates accusantium, aspernatur recusandae facilis eius dignissimos minus deleniti fugiat cumque, nihil illo laudantium numquam laborum doloribus voluptatem enim. Aspernatur corporis dolore suscipit unde. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam incidunt a fugiat, amet iste consequatur asperiores praesentium fugit odio repudiandae, alias enim nostrum cumque molestiae voluptates placeat itaque fuga doloribus veniam repellendus dolorum sit. Minus, perferendis qui repellendus quibusdam quasi, facilis exercitationem repellat natus eius, fugiat veniam! Dolore dignissimos velit voluptas officiis, ab laudantium repellendus maiores veritatis culpa cupiditate vitae voluptatum hic, esse quis molestiae a porro ipsam nihil eligendi repellat! Explicabo repellat vero esse ipsum voluptates accusantium, aspernatur recusandae facilis eius dignissimos minus deleniti fugiat cumque, nihil illo laudantium numquam laborum doloribus voluptatem enim. Aspernatur corporis dolore suscipit unde. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam incidunt a fugiat, amet iste consequatur asperiores praesentium fugit odio repudiandae, alias enim nostrum cumque molestiae voluptates placeat itaque fuga doloribus veniam repellendus dolorum sit. Minus, perferendis qui repellendus quibusdam quasi, facilis exercitationem repellat natus eius, fugiat veniam! Dolore dignissimos velit voluptas officiis, ab laudantium repellendus maiores veritatis culpa cupiditate vitae voluptatum hic, esse quis molestiae a porro ipsam nihil eligendi repellat! Explicabo repellat vero esse ipsum voluptates accusantium, aspernatur recusandae facilis eius dignissimos minus deleniti fugiat cumque, nihil illo laudantium numquam laborum doloribus voluptatem enim. Aspernatur corporis dolore suscipit unde.', '2024-01-06 15:53:21', '2024-01-06 15:53:21'),
(5, 'Staff11', 'staff@gmail.com11', '+2348105219630', 'sdcscdsadsavsavd', '2024-01-08 11:09:11', '2024-01-08 11:09:11'),
(6, 'Staff11d', 'staff@gmail.com11d', '+2348105219630', ' hbb  ki', '2024-01-08 11:13:10', '2024-01-08 11:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

CREATE TABLE `donates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `payer_name` varchar(255) DEFAULT NULL,
  `payer_email` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donates`
--

INSERT INTO `donates` (`id`, `payment_id`, `product_name`, `fullname`, `email`, `address`, `phone`, `country`, `state`, `postal_code`, `city`, `amount`, `currency`, `payer_name`, `payer_email`, `payment_status`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, '6X880590AU766840F', 'Donate', 'ALADE ODUNAYO', 'odunayo@gmail.com', 'Alafiatayo street', '+2348105219630', NULL, NULL, NULL, NULL, '400.00', 'USD', 'John', 'sb-tzxkb29137260@personal.example.com', 'COMPLETED', 'Paypal', '2024-01-11 19:59:22', '2024-01-11 19:59:22'),
(2, '0LD86123VS961303M', 'Donate', 'ALADE isreal', 'isreal@gmail.com', 'Alafiatayo street', '+2348105219630', NULL, NULL, NULL, NULL, '400.00', 'USD', 'John', 'sb-tzxkb29137260@personal.example.com', 'COMPLETED', 'Paypal', '2024-01-11 20:30:49', '2024-01-11 20:30:49'),
(3, '5YS924761U261150D', 'Donate', 'ALADE isreal', 'isreal@gmail.com', 'Alafiatayo street', '+2348105219630', NULL, NULL, NULL, NULL, '400.00', 'USD', 'John', 'sb-tzxkb29137260@personal.example.com', 'COMPLETED', 'Paypal', '2024-01-11 22:00:31', '2024-01-11 22:00:31'),
(4, 'cs_test_a1yGkUnIRu5Cld7Ypu6NMylrolXLujZz2XLwy380X7GGdFKx8aTrZhsxIa', 'Donate', 'ALADE isreal', 'isreal@gmail.com', 'Alafiatayo street', NULL, 'GB', NULL, 'SN15 3RB', NULL, '200', 'usd', 'odunnation', 'odunayo@gmail.com', 'complete', 'Stripe', '2024-01-11 22:11:18', '2024-01-11 22:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `location` text NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `content`, `location`, `time`, `date`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ea ipsam possimus quasi maiores, tenetur neque sequi voluptatem quas aliquid, placeat nihil corrupti suscipit! Illo, quam. Rem sit blanditiis soluta veritatis non laborum officiis numquam sint animi reprehenderit consequatur maxime, odit voluptas. Recusandae voluptatibus provident, ullam fugiat, rerum minima quam numquam accusamus eius at ipsum necessitatibus esse iste voluptatem, tempore delectus eaque quaerat! Libero accusamus obcaecati eligendi odit commodi? Qui distinctio nisi odio ducimus eligendi incidunt nobis porro suscipit magnam, rem culpa maxime corrupti. Tempora, soluta veritatis nisi facilis repellendus odit, eos accusamus nesciunt autem reprehenderit voluptatem cum neque harum!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ea ipsam possimus quasi maiores, tenetur neque sequi voluptatem quas aliquid, placeat nihil corrupti suscipit! Illo, quam. Rem sit blanditiis soluta veritatis non laborum officiis numquam sint animi reprehenderit consequatur maxime, odit voluptas. Recusandae voluptatibus provident, ullam fugiat, rerum minima quam numquam accusamus eius at ipsum necessitatibus esse iste voluptatem, tempore delectus eaque quaerat! Libero accusamus obcaecati eligendi odit commodi? Qui distinctio nisi odio ducimus eligendi incidunt nobis porro suscipit magnam, rem culpa maxime corrupti. Tempora, soluta veritatis nisi facilis repellendus odit, eos accusamus nesciunt autem reprehenderit voluptatem cum neque harum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ea ipsam possimus quasi maiores, tenetur neque sequi voluptatem quas aliquid, placeat nihil corrupti suscipit! Illo, quam. Rem sit blanditiis soluta veritatis non laborum officiis numquam sint animi reprehenderit consequatur maxime, odit voluptas. Recusandae voluptatibus provident, ullam fugiat, rerum minima quam numquam accusamus eius at ipsum necessitatibus esse iste voluptatem, tempore delectus eaque quaerat! Libero accusamus obcaecati eligendi odit commodi? Qui distinctio nisi odio ducimus eligendi incidunt nobis porro suscipit magnam, rem culpa maxime corrupti. Tempora, soluta veritatis nisi facilis repellendus odit, eos accusamus nesciunt autem reprehenderit voluptatem cum neque harum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ea ipsam possimus quasi maiores, tenetur neque sequi voluptatem quas aliquid, placeat nihil corrupti suscipit! Illo, quam. Rem sit blanditiis soluta veritatis non laborum officiis numquam sint animi reprehenderit consequatur maxime, odit voluptas. Recusandae voluptatibus provident, ullam fugiat, rerum minima quam numquam accusamus eius at ipsum necessitatibus esse iste voluptatem, tempore delectus eaque quaerat! Libero accusamus obcaecati eligendi odit commodi? Qui distinctio nisi odio ducimus eligendi incidunt nobis porro suscipit magnam, rem culpa maxime corrupti. Tempora, soluta veritatis nisi facilis repellendus odit, eos accusamus nesciunt autem reprehenderit voluptatem cum neque harum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ea ipsam possimus quasi maiores, tenetur neque sequi voluptatem quas aliquid, placeat nihil corrupti suscipit! Illo, quam. Rem sit blanditiis soluta veritatis non laborum officiis numquam sint animi reprehenderit consequatur maxime, odit voluptas. Recusandae voluptatibus provident, ullam fugiat, rerum minima quam numquam accusamus eius at ipsum necessitatibus esse iste voluptatem, tempore delectus eaque quaerat! Libero accusamus obcaecati eligendi odit commodi? Qui distinctio nisi odio ducimus eligendi incidunt nobis porro suscipit magnam, rem culpa maxime corrupti. Tempora, soluta veritatis nisi facilis repellendus odit, eos accusamus nesciunt autem reprehenderit voluptatem cum neque harum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ea ipsam possimus quasi maiores, tenetur neque sequi voluptatem quas aliquid, placeat nihil corrupti suscipit! Illo, quam. Rem sit blanditiis soluta veritatis non laborum officiis numquam sint animi reprehenderit consequatur maxime, odit voluptas. Recusandae voluptatibus provident, ullam fugiat, rerum minima quam numquam accusamus eius at ipsum necessitatibus esse iste voluptatem, tempore delectus eaque quaerat! Libero accusamus obcaecati eligendi odit commodi? Qui distinctio nisi odio ducimus eligendi incidunt nobis porro suscipit magnam, rem culpa maxime corrupti. Tempora, soluta veritatis nisi facilis repellendus odit, eos accusamus nesciunt autem reprehenderit voluptatem cum neque harum!', 'owo, ondo state.', '20:57:00', '2024-01-20', 'public/events/wzDMqB5fVD08pYFfZiWIcBSFfBU49yyUZ8VQb8f6.jpg', 'Active', '2024-01-03 18:57:37', '2024-01-08 10:49:48');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_25_131923_create_payments_table', 1),
(6, '2024_01_02_073021_create_events_table', 1),
(8, '2024_01_03_212849_create_testimonials_table', 2),
(10, '2024_01_04_104448_create_teams_table', 3),
(13, '2024_01_02_210301_create_admins_table', 4),
(15, '2024_01_04_140317_create_contacts_table', 5),
(22, '2019_05_03_000001_create_customer_columns', 6),
(23, '2019_05_03_000002_create_subscriptions_table', 6),
(24, '2019_05_03_000003_create_subscription_items_table', 6),
(25, '2024_01_07_021610_create_donates_table', 6);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `stripe_status` varchar(255) NOT NULL,
  `stripe_price` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

CREATE TABLE `subscription_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `stripe_product` varchar(255) NOT NULL,
  `stripe_price` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `profession` text NOT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `profession`, `facebook`, `twitter`, `instagram`, `linkedin`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ALADE ODUNAYO', 'web Developer', '', 'https://www.facebook.com/profile.php?id=100095652871951', 'https://www.facebook.com/profile.php?id=100095652871951', 'https://www.facebook.com/profile.php?id=100095652871951', 'public/teams/zA3jJKfX8dhKDl33tcl2jVsHV7E0SqFtL704ZR8A.jpg', 'Active', '2024-01-04 11:12:54', '2024-01-11 20:20:50'),
(3, 'Samuel ayomide', 'content creator', 'https://www.facebook.com/profile.php/?id=100095652871951', 'https://www.instagram.com/profile.php/?id=100095652871951', 'https://www.instagram.com/profile.php/?id=100095652871951', 'https://www.linkedin.com/profile.php/?id=100095652871951', 'public/teams/M7lFIVibHt16g34YENqBUifD9zCsUMxlEzXpHXtX.jpg', 'Active', '2024-01-04 12:20:44', '2024-01-11 20:19:59'),
(4, 'Joshua samson', 'content creator', 'https://www.facebook.com/profile.php/?id=100095652871951', 'https://www.instagram.com/profile.php/?id=100095652871951', 'https://www.instagram.com/profile.php/?id=100095652871951', 'https://www.linkedin.com/profile.php/?id=100095652871951', 'public/teams/JaKb0br84VbQ0xO9DuPI0QTkvi1tSJ7XhlZ5WCBL.jpg', 'Active', '2024-01-04 12:28:53', '2024-01-11 20:19:26'),
(5, 'Jacob Dele', 'Doctor', 'https://www.facebook.com/profile.php/?id=100095652871951', 'https://www.twitter.com/profile.php/?id=100095652871951', 'https://www.instagram.com/profile.php/?id=100095652871951', 'https://www.linkedin.com/profile.php/?id=100095652871951', 'public/teams/wth1O1J1lXAhGNF7pbktNIswN893gOU0ZMiIi43p.jpg', 'Active', '2024-01-08 20:38:54', '2024-01-11 20:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `profession` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `profession`, `content`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'ALADE ODUNAYO', 'web Developer', 'dasdvs cv xxz czx zx cdzxvczxvcxzv c', 'public/testimonials/J4eSpBUlMCxkp4XzLmaEmlPq1JYsbmvu6pXafa4a.jpg', 'Active', '2024-01-03 22:16:37', '2024-01-04 09:07:13'),
(5, 'Computer aid Staff', 'web Designer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex culpa labore cum ratione facere neque reiciendis eaque minima! Provident porro magnam eveniet repellat quos impedit tempore suscipit perferendis possimus modi?', 'public/testimonials/fJfPF9ZEEwa9QdKJ9dywgNbEcCsOeYFrHJiTfXTJ.jpg', 'Active', '2024-01-03 22:17:54', '2024-01-04 09:24:01'),
(6, 'Computer aid Staff', 'Content Writer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex culpa labore cum ratione facere neque reiciendis eaque minima! Provident porro magnam eveniet repellat quos impedit tempore suscipit perferendis possimus modi?', 'public/testimonials/5OdDHq1Yt37M2RmzPVJ7tm0a4s0B5jR2XgxZIwpY.jpg', 'Active', '2024-01-03 22:19:02', '2024-01-04 09:18:04'),
(7, 'Computer Staff', 'Content Writer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex culpa labore cum ratione facere neque reiciendis eaque minima! Provident porro magnam eveniet repellat quos impedit tempore suscipit perferendis possimus modi?', 'public/testimonials/T8SO2ehSuAxNcM1Xm5iL9ag7webVUiaopTBO3PtG.jpg', 'Active', '2024-01-03 22:19:57', '2024-01-03 22:19:57');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) DEFAULT NULL,
  `pm_type` varchar(255) DEFAULT NULL,
  `pm_last_four` varchar(4) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donates`
--
ALTER TABLE `donates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  ADD KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`);

--
-- Indexes for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`),
  ADD KEY `subscription_items_subscription_id_stripe_price_index` (`subscription_id`,`stripe_price`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donates`
--
ALTER TABLE `donates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
