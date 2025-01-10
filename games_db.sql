-- Adminer 4.8.1 MySQL 8.4.3 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@test.com|172.22.0.1',	'i:2;',	1736354412),
('admin@test.com|172.22.0.1:timer',	'i:1736354412;',	1736354412);

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `games`;
CREATE TABLE `games` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `release_date` date DEFAULT NULL,
  `developer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` double DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `games_genre_id_foreign` (`genre_id`),
  CONSTRAINT `games_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `games` (`id`, `name`, `summary`, `release_date`, `developer`, `score`, `cover`, `genre_id`, `created_at`, `updated_at`) VALUES
(6,	'Maji Kyun! Renaissance',	'A cross media collaboration project between Sunrise & Broccolli.',	NULL,	'HuneX',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co5qi9.jpg',	1,	NULL,	NULL),
(7,	'Scooby-Doo and the Cyber Chase',	'Play as Shaggy or Scooby and try to defeat the Phantom Virus in Scooby-Doo and the Cyber Chase for PlayStation. Released to correlate with the same-titled movie, this seven-stage, multilevel adventure puts the Mystery Inc. gang in the middle of cyberspace warding off bad guys and evildoers in their attempt to locate the Phantom Virus.\n\nFrom a control room players can access the areas of Japan, Ancient Rome, Arctic Circle, Prehistoric Jungle, The Big City, Egypt, and an Amusement Park. Each area consists of three levels including the boss level, but initially only the Japan area can be accessed with other areas becoming available as play progresses. Each area alternates between Shaggy and Scooby as the character being controlled.',	NULL,	'ART',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co3uxs.jpg',	2,	NULL,	NULL),
(8,	'Hey Duggee: The Big Outdoor App',	'Welcome to the Big Outdoors, Squirrels! Introducing the latest app featuring Hey Duggee! Safe, ad-free fun for your little ones. \nCompleting each activity earns the Squirrel a badge. With 5 Squirrels playing for 7 badges each, that’s a whole lot of Duggee Hugs!',	NULL,	'Unknown',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/mshhnqotzb5bvc7aeyuk.jpg',	3,	NULL,	NULL),
(9,	'Endings',	'Between Life and Death .. 2D Puzzle Platformer Game',	NULL,	'Unknown',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co5gt2.jpg',	4,	NULL,	NULL),
(10,	'Dotra',	'',	NULL,	'Unknown',	NULL,	'Unknown',	3,	NULL,	NULL),
(11,	'Space station - build your own ISS',	'',	NULL,	'Unknown',	NULL,	'Unknown',	3,	NULL,	NULL),
(12,	'Bubble Whirl Shooter',	'Shoot bubbles and match colors to pop your way up to victory in this bubble shooting adventure, win magic keys to unlock more secret colorful bubble world, it’s time to enjoy the endless bubble shooting fun!',	NULL,	'Meng Li',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co448a.jpg',	5,	NULL,	NULL),
(13,	'Racing Live',	'',	NULL,	'Unknown',	NULL,	'Unknown',	3,	NULL,	NULL),
(14,	'KuruKuru Princess: Yume no White Quartet',	'',	NULL,	'Spike',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co6871.jpg',	6,	NULL,	NULL),
(15,	'Jonah Lomu Rugby',	'Jonah Lomu Rugby is a sports video game developed by Rage Software and published by Codemasters in 1997. It was released for MS-DOS, PlayStation and Sega Saturn. It was the first rugby union game released on the Saturn or PlayStation platforms.\n\nIt has five game modes: Friendly, World Cup, Tournament, Territories Cup and Classic Matches.\n\nThe title of the video game refers to former New Zealand winger Jonah Lomu.',	NULL,	'Codemasters',	70,	'https://images.igdb.com/igdb/image/upload/t_thumb/co8qcz.jpg',	7,	NULL,	NULL),
(16,	'The Ultimate FMV Bundle 2',	'Wales Interactive is proud to offer the ultimate bundle for their very best FMV games! Featuring Night Book, Who Pressed Mute on Uncle Marcus? Bloodshore, Five Dates and I Saw Black Clouds in one bundle!',	NULL,	'Unknown',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co52iy.jpg',	3,	NULL,	NULL),
(17,	'Crusades',	'Crusades: An Unholy War is a nine-level Ultimate Doom PWAD in episode four style made by Richard Wiles. It replaces maps E4M1-E4M9.',	NULL,	'Unknown',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co7anz.jpg',	8,	NULL,	NULL),
(18,	'Deathmatch Club',	'',	NULL,	'Unknown',	NULL,	'Unknown',	3,	NULL,	NULL),
(19,	'Tom\'s Adventure',	'A little but very fun and challenging platform game.',	NULL,	'Unknown',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co5nk2.jpg',	4,	NULL,	NULL),
(20,	'Heyspresso',	'Brew up a storm in this 2D physics-based coffee shop management sim! Juggle beans, blend flavors, and keep your customers buzzing with delight!',	NULL,	'Unknown',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co97e3.jpg',	7,	NULL,	NULL),
(21,	'Meat & Greed',	'In the atmospheric puzzle-platformer Meat & Greed, you will experience the horrors of a slaughterhouse from the perspective of different animals. Solve riddles and collaborate with other animals to try and escape this ill-fated factory.',	NULL,	'Unknown',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co5kvy.jpg',	4,	NULL,	NULL),
(22,	'MadBreak',	'Dive into MadBreak, a captivating reimagining of the beloved \"Brick Breaker\" game. With each level, you\'ll face exhilarating challenges that push your skills to the limit. Can you master the unique twists and turns that MadBreak throws your way? Break through the ordinary and embrace the extraordinary. Test your reflexes, strategize your moves, and discover if you have what it takes to conquer MadBreak! Get ready for an adrenaline-fueled journey where every block shattered brings you closer to victory. Are you up for the challenge? Game SUPPORTs controller use!',	NULL,	'Unknown',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co8qcq.jpg',	3,	NULL,	NULL),
(23,	'This hole in my chest',	'A game about feeling empty',	NULL,	'Unknown',	NULL,	'Unknown',	3,	NULL,	NULL),
(24,	'Pet Puzzle',	'Pet Puzzle is a relaxing and leisurely three-in-a-row game.',	NULL,	'cBlck',	NULL,	'Unknown',	7,	NULL,	NULL),
(25,	'Shadow Wolf Mysteries: Cursed Wedding - Collector\'s Edition',	'After being called to Paris, you find yourself in the middle of a shocking mystery involving an ancient werewolf hungry for revenge.',	NULL,	'ERS G Studios',	NULL,	'Unknown',	4,	NULL,	NULL),
(26,	'Hockey de Mesa',	'',	NULL,	'Tec Toy',	NULL,	'Unknown',	3,	NULL,	NULL),
(27,	'Raindrop Sprinters',	'Avoid rain, get stars, and run across the passage!',	NULL,	'Unknown',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co78ga.jpg',	9,	NULL,	NULL),
(28,	'Aster Tatariqus',	'Find your destiny in love, friendship, or family in the newest tactical RPG from Studio FgG!\nScheduled for release in 2023, Aster Tatariqus is a high fantasy smartphone game with tactical battles and an immersive story!',	NULL,	'Gumi Inc.',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co6muy.jpg',	10,	NULL,	NULL),
(29,	'Wubble Bubbles',	'',	NULL,	'Unknown',	NULL,	'Unknown',	3,	NULL,	NULL),
(30,	'Out of Orbit',	'Design, build and manage your very own spacecraft. Explore unlimited amounts of randomly generated universes, travel through wormholes, do missions, survive cosmic events, collect and trade materials, win epic bossfights and many, many more things to do. The sky is the limit. Literally.',	NULL,	'Unknown',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co5k66.jpg',	10,	NULL,	NULL),
(31,	'Word Champion!',	'',	NULL,	'Unknown',	NULL,	'Unknown',	3,	NULL,	NULL),
(32,	'Flashy Maze',	'',	NULL,	'Unknown',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co2q64.jpg',	3,	NULL,	NULL),
(33,	'Scooby-Doo and the Cyber Chase',	'GBA port of Scooby-Doo and the Cyber Chase.',	NULL,	'THQ',	NULL,	'https://images.igdb.com/igdb/image/upload/t_thumb/co6pij.jpg',	2,	NULL,	NULL),
(34,	'Lines',	'',	NULL,	'Unknown',	NULL,	'Unknown',	3,	NULL,	NULL),
(35,	'Aisleen',	'',	NULL,	'Unknown',	NULL,	'Unknown',	3,	NULL,	NULL),
(36,	'Train Simulator: Zhengxi Highspeed: Zhengzhou - Sanmenxia Route',	'Experience exhilarating Chinese high-speed rail operations with the Zhengxi passenger line from SimTech Vision for Train simulator.',	NULL,	'Unknown',	NULL,	'Unknown',	7,	NULL,	NULL),
(37,	'BackDoor- Door 1',	'',	NULL,	'Unknown',	NULL,	'Unknown',	3,	NULL,	NULL);

DROP TABLE IF EXISTS `genres`;
CREATE TABLE `genres` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `genres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'Action',	NULL,	NULL),
(2,	'Adventure',	NULL,	NULL),
(3,	'Puzzle',	NULL,	NULL),
(4,	'RPG',	NULL,	NULL),
(5,	'Strategy',	NULL,	NULL),
(6,	'Shooter',	NULL,	NULL),
(7,	'Sports',	NULL,	NULL),
(8,	'Simulation',	NULL,	NULL),
(9,	'Fighting',	NULL,	NULL),
(10,	'Platformer',	NULL,	NULL),
(11,	'Racing',	NULL,	NULL),
(12,	'Music',	NULL,	NULL),
(13,	'Party',	NULL,	NULL),
(14,	'Arcade',	NULL,	NULL),
(15,	'Educational',	NULL,	NULL),
(16,	'Card Game',	NULL,	NULL),
(17,	'Board Game',	NULL,	NULL),
(18,	'Trivia',	NULL,	NULL);

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'0001_01_01_000000_create_users_table',	1),
(2,	'0001_01_01_000001_create_cache_table',	1),
(3,	'0001_01_01_000002_create_jobs_table',	1),
(4,	'2025_01_08_152340_create_genres_table',	2),
(5,	'2025_01_08_152410_create_games_table',	2),
(6,	'2025_01_08_152851_create_permission_tables',	3);

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1,	'App\\Models\\User',	2);

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'web',	'2025-01-08 16:39:38',	'2025-01-08 16:39:38');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9fD3FKf8E4OPWasyGBzYHuX8VxlVdBwSKcjauAVV',	2,	'172.22.0.1',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',	'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU3U4WHpRcEZpWG9iUFVMbHBuU2F4MTlNRDRlQ1NudnBqTmRGSlhzMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3QvZGFzaGJvYXJkIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9',	1736357866);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2,	'Admin User',	'admin@example.com',	NULL,	'$2y$12$hGPI.sUPuoDfhRx4B7xWyuUyvUabM/U.gSMwS7F.zlkWIPRC6v7pW',	NULL,	'2025-01-08 16:39:38',	'2025-01-08 16:39:38'),
(3,	'test',	'test@gmail.com',	NULL,	'$2y$12$5QUWAVHV9B3Zjzq8xF6QYuYrNOKhlBTtp0vC.2JpaQkw1Uzrg0FSW',	NULL,	'2025-01-08 17:06:10',	'2025-01-08 17:06:10');

-- 2025-01-08 17:39:10
