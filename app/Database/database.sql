-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 07:49 AM
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
-- Database: `gestion_voyage`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_list`
--

CREATE TABLE `book_list` (
  `id` int(11) NOT NULL,
  `voyage_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `schedule` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `subject`, `created_at`, `message`) VALUES
(19, 'maryem Toufdra', 'maryamtoufdra609@gmail.com', 'information', '2024-12-11 17:16:57', 'plus d\'information');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `city`, `image_url`) VALUES
(1, 'Agadir', 'agadir.jpeg'),
(2, 'Marrakech', 'marrakech.jpeg'),
(3, 'Fes', 'fes.jpeg'),
(4, 'Tanger', 'tanger.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`, `status`, `last_login`) VALUES
(17, 'Maryem123', 'maryamtoufdra609@gmail.com', '$2y$10$91/8ib017t4Q4w7igjuNau8ql6gkBJ/g5G2S9jU6rAcRvVO02UlO2', '2024-12-11 16:15:25', '2024-12-11 16:15:25', 'active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `profile_image`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$ICZEKL7ifI8ZMo3GUxwYreNh8vr/NQaXzRA7VhMF639gtLRu1s6Vm', '1734008523_9525281779788090d39d.jpg', '2024-11-26 12:25:43', '2024-12-12 13:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `voyages`
--

CREATE TABLE `voyages` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_depart` date NOT NULL,
  `date_retour` date NOT NULL,
  `lieu_voyage` varchar(255) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `budget` decimal(10,2) NOT NULL DEFAULT 0.00,
  `nbr_max_personnes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voyages`
--

INSERT INTO `voyages` (`id`, `titre`, `description`, `date_depart`, `date_retour`, `lieu_voyage`, `images`, `budget`, `nbr_max_personnes`) VALUES
(1, 'Voyage à Essouira', 'découvrir Essouira', '2024-11-25', '2024-11-29', 'Essouira', 'essouira.jpeg', 1000.00, 10),
(67, 'Voyage à Agadir', 'Séjour ensoleillé à Agadir', '2024-12-15', '2024-12-20', 'Agadir', 'agadir.jpeg', 3000.00, 10),
(69, 'Voyage à Tanger', 'Séjour à Tanger', '2025-01-05', '2025-01-10', 'Tanger', 'tanger.jpeg', 3500.00, 10),
(70, 'Voyage à Fès', 'Immersion dans l’histoire de Fès', '2025-01-12', '2025-01-18', 'Fès', 'fes.jpeg', 2500.00, 15),
(71, 'Voyage au Azilal', 'Azilal est manifique!', '2024-12-26', '2024-12-28', 'Azilal', 'azilal.jpeg', 2000.00, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_list`
--
ALTER TABLE `book_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_voyage_id` (`voyage_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voyages`
--
ALTER TABLE `voyages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_list`
--
ALTER TABLE `book_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voyages`
--
ALTER TABLE `voyages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_list`
--
ALTER TABLE `book_list`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `participant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_voyage_id` FOREIGN KEY (`voyage_id`) REFERENCES `voyages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
