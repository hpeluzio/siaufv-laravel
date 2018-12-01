-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Maio-2018 às 18:59
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opala`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ano`
--

CREATE TABLE `ano` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `ano`
--

INSERT INTO `ano` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, '2017', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id` int(10) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `horario` time NOT NULL,
  `tipo` int(11) NOT NULL,
  `sala_id` int(10) UNSIGNED DEFAULT NULL,
  `avaliador_id` int(10) UNSIGNED NOT NULL,
  `ano_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `avaliacao`
--

INSERT INTO `avaliacao` (`id`, `data`, `horario`, `tipo`, `sala_id`, `avaliador_id`, `ano_id`, `created_at`, `updated_at`) VALUES
(2, '2017-10-25', '19:00:00', 1, 3, 80, 1, '2017-09-29 23:01:33', '2017-09-29 23:01:33'),
(3, '2017-10-25', '19:00:00', 1, 4, 72, 1, '2017-09-29 23:04:10', '2017-09-29 23:04:10'),
(4, '2017-10-25', '19:00:00', 1, 5, 66, 1, '2017-09-29 23:06:52', '2017-10-16 18:43:45'),
(11, '2017-10-25', '16:00:00', 2, NULL, 65, 1, '2017-09-30 01:38:43', '2017-09-30 01:38:43'),
(12, '2017-10-25', '19:00:00', 1, 2, 70, 1, '2017-09-30 05:50:01', '2017-09-30 05:50:01'),
(13, '2017-10-26', '16:00:00', 1, 2, 41, 1, '2017-10-04 00:17:49', '2017-10-04 00:23:48'),
(14, '2017-10-26', '16:00:00', 1, 3, 64, 1, '2017-10-04 00:30:21', '2017-10-04 00:30:21'),
(15, '2017-10-26', '16:00:00', 1, 4, 40, 1, '2017-10-04 00:35:59', '2017-10-04 00:35:59'),
(16, '2017-10-26', '16:00:00', 1, 5, 63, 1, '2017-10-04 00:43:04', '2017-10-04 00:43:04'),
(17, '2017-10-24', '16:00:00', 1, 2, 23, 1, '2017-10-04 00:48:19', '2017-10-04 00:48:19'),
(18, '2017-10-26', '16:00:00', 1, 6, 62, 1, '2017-10-04 00:51:46', '2017-10-04 00:51:46'),
(19, '2017-10-26', '16:00:00', 1, 7, 36, 1, '2017-10-04 00:54:24', '2017-10-04 00:54:24'),
(20, '2017-10-24', '16:00:00', 1, 3, 96, 1, '2017-10-04 00:56:46', '2017-10-04 00:56:46'),
(21, '2017-10-26', '16:00:00', 1, 8, 48, 1, '2017-10-04 00:56:58', '2017-10-04 00:56:58'),
(22, '2017-10-26', '16:00:00', 1, 9, 30, 1, '2017-10-04 00:59:34', '2017-10-04 00:59:34'),
(23, '2017-10-24', '16:00:00', 1, 4, 25, 1, '2017-10-04 01:03:06', '2017-10-04 01:03:06'),
(24, '2017-10-24', '16:00:00', 1, 5, 20, 1, '2017-10-04 01:06:12', '2017-10-04 01:06:12'),
(25, '2017-10-25', '16:00:00', 2, NULL, 36, 1, '2017-10-04 01:23:43', '2017-10-04 01:23:43'),
(27, '2017-10-24', '16:00:00', 1, 6, 10, 1, '2017-10-05 19:41:21', '2017-10-05 23:47:08'),
(28, '2017-10-25', '16:00:00', 2, NULL, 24, 1, '2017-10-05 19:53:07', '2017-10-05 19:53:07'),
(29, '2017-10-25', '16:00:00', 2, NULL, 15, 1, '2017-10-05 19:57:30', '2017-10-05 19:57:30'),
(30, '2017-10-24', '16:00:00', 1, 7, 7, 1, '2017-10-05 23:55:03', '2017-10-05 23:55:03'),
(31, '2017-10-24', '16:00:00', 1, 8, 13, 1, '2017-10-06 00:06:00', '2017-10-06 00:06:00'),
(32, '2017-10-24', '16:00:00', 1, 9, 2, 1, '2017-10-06 00:13:01', '2017-10-06 00:13:01'),
(33, '2017-10-24', '16:00:00', 1, 10, 3, 1, '2017-10-10 20:05:26', '2017-10-10 20:05:26'),
(34, '2017-10-24', '16:00:00', 1, 11, 4, 1, '2017-10-10 20:08:51', '2017-10-10 20:08:51'),
(35, '2017-10-25', '16:00:00', 2, NULL, 5, 1, '2017-10-10 20:21:41', '2017-10-10 20:31:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao_detalhe`
--

CREATE TABLE `avaliacao_detalhe` (
  `id` int(10) UNSIGNED NOT NULL,
  `trabalho_id` int(10) UNSIGNED NOT NULL,
  `avaliador1_id` int(10) UNSIGNED NOT NULL,
  `avaliador2_id` int(10) UNSIGNED NOT NULL,
  `avaliacao_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `avaliacao_detalhe`
--

INSERT INTO `avaliacao_detalhe` (`id`, `trabalho_id`, `avaliador1_id`, `avaliador2_id`, `avaliacao_id`, `created_at`, `updated_at`) VALUES
(5, 9080, 69, 85, 2, '2017-09-29 23:01:33', '2017-09-29 23:01:33'),
(6, 9092, 69, 85, 2, '2017-09-29 23:01:33', '2017-09-29 23:01:33'),
(7, 9100, 69, 85, 2, '2017-09-29 23:01:33', '2017-09-29 23:01:33'),
(8, 9136, 69, 85, 2, '2017-09-29 23:01:33', '2017-09-29 23:01:33'),
(9, 9075, 75, 84, 3, '2017-09-29 23:04:10', '2017-09-29 23:04:10'),
(10, 9088, 75, 84, 3, '2017-09-29 23:04:10', '2017-09-29 23:04:10'),
(11, 9103, 75, 84, 3, '2017-09-29 23:04:10', '2017-09-29 23:04:10'),
(12, 9158, 75, 84, 3, '2017-09-29 23:04:10', '2017-09-29 23:04:10'),
(40, 9071, 67, 87, 11, '2017-09-30 05:52:23', '2017-09-30 05:52:23'),
(41, 9134, 79, 73, 11, '2017-09-30 05:52:23', '2017-09-30 05:52:23'),
(42, 9135, 86, 79, 11, '2017-09-30 05:52:23', '2017-09-30 05:52:23'),
(43, 9179, 85, 86, 11, '2017-09-30 05:52:23', '2017-09-30 05:52:23'),
(44, 9182, 73, 85, 11, '2017-09-30 05:52:23', '2017-09-30 05:52:23'),
(45, 9204, 73, 87, 11, '2017-09-30 05:52:23', '2017-09-30 05:52:23'),
(46, 9125, 71, 87, 11, '2017-09-30 05:52:23', '2017-09-30 05:52:23'),
(47, 9154, 82, 71, 11, '2017-09-30 05:52:23', '2017-09-30 05:52:23'),
(53, 9063, 26, 39, 13, '2017-10-04 00:23:48', '2017-10-04 00:23:48'),
(54, 9145, 41, 26, 13, '2017-10-04 00:23:48', '2017-10-04 00:23:48'),
(55, 9156, 42, 41, 13, '2017-10-04 00:23:48', '2017-10-04 00:23:48'),
(56, 9188, 43, 26, 13, '2017-10-04 00:23:48', '2017-10-04 00:23:48'),
(57, 9077, 103, 55, 14, '2017-10-04 00:30:21', '2017-10-04 00:30:21'),
(58, 9094, 60, 100, 14, '2017-10-04 00:30:21', '2017-10-04 00:30:21'),
(59, 9160, 50, 54, 14, '2017-10-04 00:30:22', '2017-10-04 00:30:22'),
(60, 9199, 54, 64, 14, '2017-10-04 00:30:22', '2017-10-04 00:30:22'),
(61, 9079, 40, 37, 15, '2017-10-04 00:35:59', '2017-10-04 00:35:59'),
(62, 9082, 40, 101, 15, '2017-10-04 00:35:59', '2017-10-04 00:35:59'),
(63, 9132, 38, 99, 15, '2017-10-04 00:35:59', '2017-10-04 00:35:59'),
(64, 9172, 102, 32, 15, '2017-10-04 00:35:59', '2017-10-04 00:35:59'),
(65, 8142, 47, 63, 16, '2017-10-04 00:43:04', '2017-10-04 00:43:04'),
(66, 9086, 56, 53, 16, '2017-10-04 00:43:04', '2017-10-04 00:43:04'),
(67, 9091, 35, 52, 16, '2017-10-04 00:43:04', '2017-10-04 00:43:04'),
(68, 9139, 35, 52, 16, '2017-10-04 00:43:04', '2017-10-04 00:43:04'),
(69, 9061, 14, 19, 17, '2017-10-04 00:48:19', '2017-10-04 00:48:19'),
(70, 9068, 14, 19, 17, '2017-10-04 00:48:19', '2017-10-04 00:48:19'),
(71, 9072, 14, 19, 17, '2017-10-04 00:48:19', '2017-10-04 00:48:19'),
(72, 9119, 23, 14, 17, '2017-10-04 00:48:19', '2017-10-04 00:48:19'),
(73, 9181, 19, 23, 17, '2017-10-04 00:48:19', '2017-10-04 00:48:19'),
(74, 9137, 59, 57, 18, '2017-10-04 00:51:46', '2017-10-04 00:51:46'),
(75, 9163, 59, 57, 18, '2017-10-04 00:51:46', '2017-10-04 00:51:46'),
(76, 9165, 62, 46, 18, '2017-10-04 00:51:46', '2017-10-04 00:51:46'),
(77, 9178, 33, 46, 18, '2017-10-04 00:51:46', '2017-10-04 00:51:46'),
(78, 9141, 28, 58, 19, '2017-10-04 00:54:24', '2017-10-04 00:54:24'),
(79, 9148, 28, 58, 19, '2017-10-04 00:54:24', '2017-10-04 00:54:24'),
(80, 9159, 28, 58, 19, '2017-10-04 00:54:24', '2017-10-04 00:54:24'),
(81, 9070, 24, 95, 20, '2017-10-04 00:56:46', '2017-10-04 00:56:46'),
(82, 9108, 18, 96, 20, '2017-10-04 00:56:46', '2017-10-04 00:56:46'),
(83, 9129, 16, 96, 20, '2017-10-04 00:56:46', '2017-10-04 00:56:46'),
(84, 9185, 95, 96, 20, '2017-10-04 00:56:46', '2017-10-04 00:56:46'),
(85, 9203, 95, 96, 20, '2017-10-04 00:56:46', '2017-10-04 00:56:46'),
(86, 9155, 29, 44, 21, '2017-10-04 00:56:58', '2017-10-04 00:56:58'),
(87, 9170, 29, 44, 21, '2017-10-04 00:56:58', '2017-10-04 00:56:58'),
(88, 9183, 29, 44, 21, '2017-10-04 00:56:58', '2017-10-04 00:56:58'),
(89, 9064, 30, 51, 22, '2017-10-04 00:59:34', '2017-10-04 00:59:34'),
(90, 9171, 30, 51, 22, '2017-10-04 00:59:34', '2017-10-04 00:59:34'),
(91, 9054, 21, 25, 23, '2017-10-04 01:03:06', '2017-10-04 01:03:06'),
(92, 9073, 21, 25, 23, '2017-10-04 01:03:06', '2017-10-04 01:03:06'),
(93, 9127, 110, 25, 23, '2017-10-04 01:03:06', '2017-10-04 01:03:06'),
(94, 9130, 93, 20, 24, '2017-10-04 01:06:12', '2017-10-04 01:06:12'),
(95, 9177, 22, 20, 24, '2017-10-04 01:06:12', '2017-10-04 01:06:12'),
(96, 9202, 93, 20, 24, '2017-10-04 01:06:12', '2017-10-04 01:06:12'),
(97, 9051, 33, 48, 25, '2017-10-04 01:23:43', '2017-10-04 01:23:43'),
(98, 9098, 55, 43, 25, '2017-10-04 01:23:43', '2017-10-04 01:23:43'),
(99, 9111, 62, 59, 25, '2017-10-04 01:23:43', '2017-10-04 01:23:43'),
(100, 9120, 41, 27, 25, '2017-10-04 01:23:44', '2017-10-04 01:23:44'),
(101, 9146, 28, 51, 25, '2017-10-04 01:23:44', '2017-10-04 01:23:44'),
(102, 9146, 28, 46, 25, '2017-10-04 01:23:44', '2017-10-04 01:23:44'),
(103, 9161, 53, 41, 25, '2017-10-04 01:23:44', '2017-10-04 01:23:44'),
(104, 9164, 97, 54, 25, '2017-10-04 01:23:44', '2017-10-04 01:23:44'),
(105, 9166, 27, 26, 25, '2017-10-04 01:23:44', '2017-10-04 01:23:44'),
(106, 9173, 46, 29, 25, '2017-10-04 01:23:44', '2017-10-04 01:23:44'),
(117, 7890, 111, 68, 12, '2017-10-04 23:03:39', '2017-10-04 23:03:39'),
(118, 9074, 111, 68, 12, '2017-10-04 23:03:39', '2017-10-04 23:03:39'),
(119, 9104, 111, 68, 12, '2017-10-04 23:03:39', '2017-10-04 23:03:39'),
(120, 9175, 111, 68, 12, '2017-10-04 23:03:39', '2017-10-04 23:03:39'),
(129, 9083, 24, 96, 28, '2017-10-05 19:53:07', '2017-10-05 19:53:07'),
(130, 9109, 18, 96, 28, '2017-10-05 19:53:07', '2017-10-05 19:53:07'),
(131, 9126, 24, 14, 28, '2017-10-05 19:53:07', '2017-10-05 19:53:07'),
(132, 9128, 24, 96, 28, '2017-10-05 19:53:07', '2017-10-05 19:53:07'),
(133, 9150, 18, 92, 28, '2017-10-05 19:53:07', '2017-10-05 19:53:07'),
(134, 9152, 14, 23, 28, '2017-10-05 19:53:07', '2017-10-05 19:53:07'),
(135, 9157, 19, 23, 28, '2017-10-05 19:53:07', '2017-10-05 19:53:07'),
(136, 9168, 95, 18, 28, '2017-10-05 19:53:07', '2017-10-05 19:53:07'),
(137, 9176, 19, 92, 28, '2017-10-05 19:53:07', '2017-10-05 19:53:07'),
(138, 9180, 18, 24, 28, '2017-10-05 19:53:07', '2017-10-05 19:53:07'),
(144, 9084, 94, 15, 29, '2017-10-05 19:57:31', '2017-10-05 19:57:31'),
(145, 9089, 93, 22, 29, '2017-10-05 19:57:31', '2017-10-05 19:57:31'),
(146, 9105, 15, 94, 29, '2017-10-05 19:57:31', '2017-10-05 19:57:31'),
(147, 9133, 15, 94, 29, '2017-10-05 19:57:31', '2017-10-05 19:57:31'),
(148, 9144, 93, 22, 29, '2017-10-05 19:57:31', '2017-10-05 19:57:31'),
(149, 9162, 93, 22, 29, '2017-10-05 19:57:31', '2017-10-05 19:57:31'),
(150, 9207, 15, 94, 29, '2017-10-05 19:57:31', '2017-10-05 19:57:31'),
(163, 9096, 117, 112, 30, '2017-10-05 23:55:03', '2017-10-05 23:55:03'),
(164, 9097, 7, 112, 30, '2017-10-05 23:55:03', '2017-10-05 23:55:03'),
(165, 9101, 117, 112, 30, '2017-10-05 23:55:03', '2017-10-05 23:55:03'),
(166, 9114, 7, 112, 30, '2017-10-05 23:55:03', '2017-10-05 23:55:03'),
(167, 9090, 107, 115, 27, '2017-10-05 23:58:41', '2017-10-05 23:58:41'),
(168, 9124, 107, 115, 27, '2017-10-05 23:58:41', '2017-10-05 23:58:41'),
(169, 9117, 105, 115, 27, '2017-10-05 23:58:41', '2017-10-05 23:58:41'),
(170, 9140, 107, 115, 27, '2017-10-05 23:58:41', '2017-10-05 23:58:41'),
(171, 9200, 105, 115, 27, '2017-10-05 23:58:41', '2017-10-05 23:58:41'),
(172, 9052, 106, 114, 31, '2017-10-06 00:06:00', '2017-10-06 00:06:00'),
(173, 9055, 106, 114, 31, '2017-10-06 00:06:00', '2017-10-06 00:06:00'),
(174, 9085, 34, 13, 31, '2017-10-06 00:06:00', '2017-10-06 00:06:00'),
(175, 9107, 34, 13, 31, '2017-10-06 00:06:00', '2017-10-06 00:06:00'),
(176, 9138, 34, 13, 31, '2017-10-06 00:06:00', '2017-10-06 00:06:00'),
(177, 9121, 109, 113, 32, '2017-10-06 00:13:01', '2017-10-06 00:13:01'),
(178, 9122, 2, 8, 32, '2017-10-06 00:13:01', '2017-10-06 00:13:01'),
(179, 9149, 2, 113, 32, '2017-10-06 00:13:01', '2017-10-06 00:13:01'),
(180, 9151, 109, 113, 32, '2017-10-06 00:13:02', '2017-10-06 00:13:02'),
(181, 9116, 3, 104, 33, '2017-10-10 20:05:26', '2017-10-10 20:05:26'),
(182, 9118, 3, 118, 33, '2017-10-10 20:05:26', '2017-10-10 20:05:26'),
(183, 9131, 11, 118, 33, '2017-10-10 20:05:26', '2017-10-10 20:05:26'),
(184, 9169, 3, 104, 33, '2017-10-10 20:05:26', '2017-10-10 20:05:26'),
(189, 9102, 4, 9, 34, '2017-10-10 20:10:01', '2017-10-10 20:10:01'),
(190, 9143, 6, 9, 34, '2017-10-10 20:10:01', '2017-10-10 20:10:01'),
(191, 9153, 4, 9, 34, '2017-10-10 20:10:01', '2017-10-10 20:10:01'),
(192, 9078, 4, 6, 34, '2017-10-10 20:10:01', '2017-10-10 20:10:01'),
(197, 9099, 5, 13, 35, '2017-10-10 20:31:32', '2017-10-10 20:31:32'),
(198, 9142, 4, 5, 35, '2017-10-10 20:31:32', '2017-10-10 20:31:32'),
(199, 8001, 119, 86, 4, '2017-10-16 18:43:45', '2017-10-16 18:43:45'),
(200, 9106, 119, 86, 4, '2017-10-16 18:43:45', '2017-10-16 18:43:45'),
(201, 9112, 119, 86, 4, '2017-10-16 18:43:45', '2017-10-16 18:43:45'),
(202, 9123, 119, 86, 4, '2017-10-16 18:43:45', '2017-10-16 18:43:45'),
(203, 9187, 119, 86, 4, '2017-10-16 18:43:45', '2017-10-16 18:43:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliador`
--

CREATE TABLE `avaliador` (
  `id` int(10) UNSIGNED NOT NULL,
  `matricula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instituto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `avaliador`
--

INSERT INTO `avaliador` (`id`, `matricula`, `nome`, `curso`, `instituto`, `email`, `ano_id`, `created_at`, `updated_at`) VALUES
(2, '11298-4', 'Allan Robledo Filaho e Moraes', '', 'IAP', 'allanrfm@yahoo.com.br', 1, NULL, NULL),
(3, '10089-7', 'André Mundstock Xavier de Carvalho', '', 'IAP', 'andremundstock@gmail.com', 1, NULL, NULL),
(4, '11553-3', 'Evandro Galvão Tavares Menezes', '', 'IAP', 'evandrogtmenezes@gmail.com', 1, NULL, NULL),
(5, '10327-6', 'Everaldo Antônio Lopes', '', 'IAP', 'everaldolopes@ufv.br', 1, NULL, NULL),
(6, '8861-7', 'Fabrícia Queiroz Mendes', '', 'IAP', 'fabricia.mendes@ufv.br', 1, NULL, NULL),
(7, '10141-9', 'Flávio Lemes Fernandes', '', 'IAP', 'flaviofernandes@ufv.br', 1, NULL, NULL),
(8, '11860-5', 'Isabela Costa Guimarães', '', 'IAP', 'icostag@yahoo.com.br', 1, NULL, NULL),
(9, '11450-2', 'Isadora Rebouças Nolasco de Oliveira', '', 'IAP', 'isareboucas@gmail.com', 1, NULL, NULL),
(10, '10302-0', 'Marcelo Rodrigues dos Reis', '', 'IAP', 'marceloreis@ufv.br', 1, NULL, NULL),
(11, '11040-X', 'Maria Elisa de Sena Fernandes', '', 'IAP', 'maria.sena@ufv.br', 1, NULL, NULL),
(12, '11492-8', 'Vinícius Ribeiro Silva', '', 'IAP', 'virfaria@yahoo.com.br', 1, NULL, NULL),
(13, '11613-0', 'Willian Rodrigues Macedo', '', 'IAP', 'willian_rmacedo@yahoo.com.br', 1, NULL, NULL),
(14, ' 10182-6', 'Edmilson Amaral de Souza', '', 'IBP', 'edmilson.souza@ufv.br', 1, NULL, NULL),
(15, '12416-8', 'Felipe Zílio', '', 'IBP', 'felipe.zilio@ufv.br', 1, NULL, NULL),
(16, '10316-0', 'Karine Frehner Kavalco', '', 'IBP', 'kavalco@ufv.br', 1, NULL, NULL),
(17, '10187-7', 'Luciane Cristina de Oliveira Lisboa', '', 'IBP', 'luciane.lisboa@ufv.br', 1, NULL, NULL),
(18, ' 8881-1', 'Luciano Bueno dos Reis', '', 'IBP', 'luciano.bueno@ufv.br', 1, NULL, NULL),
(19, '12178-9', 'Marcelo Ribeiro Pereira', '', 'IBP', 'marcelo.ribeiropereira@gmail.com', 1, NULL, NULL),
(20, '8828-5', 'Martha Elisa Ferreira de Almeida', '', 'IBP', 'martha.almeida@ufv.br', 1, NULL, NULL),
(21, '11547-9', 'Meire de Oliveira Barbosa', '', 'IBP', 'meirabqi@gmail.com', 1, NULL, NULL),
(22, '11085-X', 'Regiane Lopes de Sales', '', 'IBP', 'regiane@ufv.br', 1, NULL, NULL),
(23, '8656-8', 'Rubens Pazza', '', 'IBP', 'rpazza@ufv.br', 1, NULL, NULL),
(24, '10294-6', 'Silvana da Costa Ferreira', '', 'IBP', 'silvanacferreira@ufv.br', 1, NULL, NULL),
(25, '11178-3', 'Tatiana Coura Oliveira', '', 'IBP', 'contato.tatiana@gmail.com', 1, NULL, NULL),
(26, '10339-X', 'Adriana Zanella Martinhago', '', 'IEP', 'adriana.martinhago@ufv.br', 1, NULL, NULL),
(27, '12513-X', 'Alba Assis Campos', '', 'IEP', 'alba.sistemas@gmail.com', 1, NULL, NULL),
(28, 'Não tem', 'Ana Luiza Ferreira Costa Mendes', '', 'IEP', 'analuiza.fc@hotmail.com', 1, NULL, NULL),
(29, 'Não tem', 'Arthur Filipe Freire', '', 'IEP', 'arthurfreire2009@gmail.com', 1, NULL, NULL),
(30, '12309-9', 'Aurea Dayse Cosmo Da Silva', '', 'IEP', 'aureadayse@gmail.com', 1, NULL, NULL),
(31, '12175-4', 'Carla Maíra Bossu', '', 'IEP', 'carla.bossu@gmail.com', 1, NULL, NULL),
(32, '10186-9', 'Cassiano R. de Oliveira', '', 'IEP', 'croliveira1979@yahoo.com.br', 1, NULL, NULL),
(33, '12406-0', 'Diogo Soares Resende', '', 'IEP', 'diogo.soares@engenharia.ufjf.br', 1, NULL, NULL),
(34, '11201-1', 'Éder Matsuo', '', 'IEP', 'edermatsuo@ufv.br', 1, NULL, NULL),
(35, '12133-9', 'Felipe Galvão Rafael Magalhães', '', 'IEP', 'felipe.rapaiz@gmail.com', 1, NULL, NULL),
(36, '11108-2', 'Frederico Carlos M. de M. Filho', '', 'IEP', 'menezesfilho.frederico@gmail.com', 1, NULL, NULL),
(37, '10085-4', 'Frederico Garcia Pinto', '', 'IEP', 'frederico.pinto@ufv.br', 1, NULL, NULL),
(38, '11488-X', 'Geraldo Humberto Silva', '', 'IEP', 'silvagh@ufv.br', 1, NULL, NULL),
(39, '8655-X', 'Iris Fabiana De Barcelos Tronto', '', 'IEP', 'irisbarcelos@ufv.br', 1, NULL, NULL),
(40, '8683-5', 'Jairo Tronto', '', 'IEP', 'jairotronto@ufv.br', 1, NULL, NULL),
(41, '8884-6', 'João Fernando Mari', '', 'IEP', 'joaof.mari@ufv.br', 1, NULL, NULL),
(42, 'Não tem', 'Joelson Santos', '', 'IEP', 'joelsonn.santos@gmail.com', 1, NULL, NULL),
(43, '12306-4', 'Leandro Henrique Furtado Pinto Silva', '', 'IEP', 'leandro.pinto@ufv.br', 1, NULL, NULL),
(44, '12074-X', 'Leonardo Mesquita', '', 'IEP', 'leonardo.mesquita@ufv.br', 1, NULL, NULL),
(45, '10222-9', 'Lillian Do Nascimento Gambi', '', 'IEP', 'lillian.gambi@gmail.com', 1, NULL, NULL),
(46, '11223-2', 'Lucas Martins Guimarães', '', 'IEP', 'guimaraeslm@ufv.br', 1, NULL, NULL),
(47, '10420-5', 'Márcio Santos Soares', '', 'IEP', 'marciosoares@ufv.br', 1, NULL, NULL),
(48, '11297-6', 'Maria Cláudia Sousa Alvarenga', '', 'IEP', 'mariaclaudia.crp@gmail.com', 1, NULL, NULL),
(49, '11577-0', 'Maria Gabriela Mendonça Peixoto', '', 'IEP', 'mgabriela@ufv.br', 1, NULL, NULL),
(50, '12287-4', 'Mariana Alves Pereira', '', 'IEP', 'alvesmari92@gmail.com', 1, NULL, NULL),
(51, '12494-X', 'Mariana Miziara Amui', '', 'IEP', 'mariana.amui@ufv.br', 1, NULL, NULL),
(52, '10891-X', 'Miguel Júnior Cezana', '', 'IEP', 'migueljrcezana@gmail.com', 1, NULL, NULL),
(53, '10296-2', 'Pablo Damasceno Borges', '', 'IEP', 'pabloborges@ufv.br', 1, NULL, NULL),
(54, '11964-4', 'Pablo Luiz Araujo Munhoz', '', 'IEP', 'pablo.munhoz@gmail.com', 1, NULL, NULL),
(55, '11618-1', 'Pedro Moises De Sousa', '', 'IEP', 'profpedromoises@yahoo.com.br', 1, NULL, NULL),
(56, '12500-8', 'Rafael Marcelino do Carmo Silva', '', 'IEP', 'rafaelmarcelinocs@gmail.com', 1, NULL, NULL),
(57, '8663-0', 'Raiane Ribeiro Machado', '', 'IEP', 'raianemachado@gmail.com', 1, NULL, NULL),
(58, '10288-1', 'Reynaldo Furtado Faria Lima', '', 'IEP', 'reynaldofilho@ufv.br', 1, NULL, NULL),
(59, '12498-2', 'Samuel Borges Barbosa', '', 'IEP', 'osamuelbarbosa@gmail.com', 1, NULL, NULL),
(60, '11191-0', 'Sidney Xavier dos Santos', '', 'IEP', 'sidney.santos@ufv.br', 1, NULL, NULL),
(61, '11080-9', 'Tácito Trindade De Araújo Tiburtino Neves', '', 'IEP', 'tacito.neves@ufv.br', 1, NULL, NULL),
(62, '10290-3', 'Thiago Henrique Nogueira', '', 'IEP', 'thiago_ufmg@yahoo.com.br', 1, NULL, NULL),
(63, '10295-4', 'Vagner Rodrigues De Bessa', '', 'IEP', 'vagnerbessa@ufv.br', 1, NULL, NULL),
(64, '8867-6', 'Vânia Maria Moreira Valente', '', 'IEP', 'vvalente@ufv.br', 1, NULL, NULL),
(65, '10194-X', 'Antônio Carlos Brunozi Júnior', '', 'IHP', 'antonio.brunozi@ufv.br', 1, NULL, NULL),
(66, '10074-9', 'Áurea Lúcia Silva Andrade', '', 'IHP', 'aurea.andrade@ufv.br', 1, NULL, NULL),
(67, '10321-7', 'Cristiano Pacheco de Deus Mundim', '', 'IHP', 'cristianomundim@ufv.br', 1, NULL, NULL),
(68, '11600-9', 'Donizete Aparecido Batista', '', 'IHP', 'donebat@gmail.com', 1, NULL, NULL),
(69, '11120-1', 'Edson Rodrigo de Almeida', '', 'IHP', 'edsonrodrigo1@hotmail.com', 1, NULL, NULL),
(70, '8878-1', 'João Alfredo Costa de Campos Melo Júnior', '', 'IHP', 'joao.melo@ufv.br', 1, NULL, NULL),
(71, '12340-4', 'Lays Matias Mazoti Correa', '', 'IHP', 'laysmm@gmail.com', 1, NULL, NULL),
(72, '8657-6', 'Leonardo Pinheiro Deboçã', '', 'IHP', 'leonardopd@gmail.com', 1, NULL, NULL),
(73, '11107-4', 'Maria Auxiliadora da Silva', '', 'IHP', 'mauxiliadora@ufv.br', 1, NULL, NULL),
(74, '8645-2', 'Marilene de Souza Campos', '', 'IHP', 'marilenecampos@ufv.br', 1, NULL, NULL),
(75, '10081-1', 'Paulo Nogueira Andrade Godoi', '', 'IHP', 'paulo.godoi@ufv.br', 1, NULL, NULL),
(76, '10073-0', 'Raquel Santos Soares Menezes', '', 'IHP', 'raquel.menezes@ufv.br', 1, NULL, NULL),
(77, '10532-5', 'Ricardo Freitas Martins da Costa', '', 'IHP', 'rfcosta.ufv@gmail.com', 1, NULL, NULL),
(78, '11309-3', 'Rodrigo Silva Diniz Leroy', '', 'IHP', 'leroy.rodrigo@gmail.com', 1, NULL, NULL),
(79, '11394-8', 'Rosália Rodrigues Alves', '', 'IHP', 'rosaliaadm@gmail.com', 1, NULL, NULL),
(80, '8643-6', 'Rosiane Maria Lima Gonçalves', '', 'IHP', 'rosiane.goncalves@ufv.br', 1, NULL, NULL),
(81, '8962-1', 'Thiago Rodrigues Silame', '', 'IHP', 'thiago.silame@gmail.com', 1, NULL, NULL),
(82, '12000-6', 'Viviane Cabral Bengezen', '', 'IHP', 'vbengezen@gmail.com', 1, NULL, NULL),
(83, '3004949', 'Agnaldo Henrique Silva Fonseca', 'PROFIAP', 'IHP', 'agnaldo.fonseca@ufv.br', 1, '2017-09-29 22:51:08', '2017-09-29 22:51:08'),
(84, '10720', 'Alysson Ribeiro Paiva', 'PROFIAP', 'IHP', 'alysson.paiva@ufv.br', 1, '2017-09-29 22:51:57', '2017-09-29 22:51:57'),
(85, '30000781', 'Lais Barbosa Vieira', 'PROFIAP', 'IHP', 'lais.barbosa@ufv.br', 1, '2017-09-29 22:52:44', '2017-09-29 22:52:44'),
(86, '30000830', 'Lara Luisa Silva', 'PROFIAP', 'IHP', 'lara.luiza@ufv.br', 1, '2017-09-29 22:53:16', '2017-09-29 22:53:16'),
(87, '30004945', 'Rejane Aparecida Pereira', 'PROFIAP', 'IHP', 'rejane.pereira@ufv.br', 1, '2017-09-29 22:53:59', '2017-09-29 22:53:59'),
(88, '11130', 'Fábio André Teixeira', 'ADMINISTRAÇÃO', 'IHP', 'fateixeira.ufv@gmail.com', 1, '2017-09-30 00:25:57', '2017-09-30 00:25:57'),
(89, '000001', 'Hernani Martins Júnior', 'PROFIAP', 'IEP', 'hernani.junior@ufv.br', 1, '2017-09-30 01:40:18', '2017-09-30 01:40:18'),
(90, '000002', 'Débora Silva Melo', 'ADMINISTRAÇÃO', 'IHP', 'deborasm@ufv.br', 1, '2017-09-30 01:41:09', '2017-09-30 01:41:09'),
(91, '00003', 'Julienne de Jesus Andrade', 'ADMINISTRAÇÃO', 'IHP', 'fateixeira.ufv@gmail.com', 1, '2017-09-30 01:43:16', '2017-09-30 01:43:16'),
(92, '11103', 'Sabrina da Silva Pinheiro de Almeida', 'Ciências Biológicas', 'IBP', 'sabrina.almeida@ufv.br', 1, '2017-10-03 00:32:19', '2017-10-03 00:32:19'),
(93, '11221', 'LUCIANA RESENDE CARDOSO JULIO', 'Nutrição', 'IBP', 'luciana.julio@ufv.br', 1, '2017-10-03 20:24:48', '2017-10-03 20:24:48'),
(94, '12303', 'LUCIMAR SOARES DE ARAUJO', 'Ciências Biológicas', 'IBP', 'lucimar.araujo@gmail.com', 1, '2017-10-03 20:26:58', '2017-10-03 20:26:58'),
(95, '10222', 'LILIANE EVANGELISTA VISÔTTO', 'Ciências Biológicas', 'IBP', 'lvisotto@ufv.br', 1, '2017-10-03 20:32:56', '2017-10-03 20:32:56'),
(96, '8744', 'MARLON CORREA PEREIRA', 'Ciências Biológicas', 'IBP', 'marlon.pereira@ufv.br', 1, '2017-10-03 20:34:48', '2017-10-03 20:34:48'),
(97, '1', 'Gilmar Gonçalves Ferreira', 'Quimica', 'IEP', 'teste@ufv.br', 1, '2017-10-04 00:04:46', '2017-10-04 00:04:46'),
(98, '2', 'Érica Fidelis Gomes', 'Técnica', 'IEP', 'teste@ufv.br', 1, '2017-10-04 00:05:52', '2017-10-04 00:07:05'),
(99, '1', 'Bruno Viotti', 'Quimica', 'IEP', 'bruno.viotti@ufv.br', 1, '2017-10-04 00:06:45', '2017-10-04 01:06:58'),
(100, '2', 'Barbara Caetano dos Santos', 'Quimica', 'IEP', 'barbara.caetano@ufv.br', 1, '2017-10-04 00:07:35', '2017-10-04 01:07:52'),
(101, '3', 'Valber Georgio de Oliveira Duarte', 'Quimica', 'IEP', 'valber.g@hotmail.com', 1, '2017-10-04 00:08:13', '2017-10-04 01:08:59'),
(102, '4', 'Victor Santos', 'Quimica', 'IEP', 'victor.santos.70@hotmail.com', 1, '2017-10-04 00:08:38', '2017-10-04 01:09:42'),
(103, '5', 'Vander Alencar', 'Quimica', 'IEP', 'vanderalencarcastro2012@gmail.com', 1, '2017-10-04 00:09:52', '2017-10-04 01:11:48'),
(104, '30002002', 'Danúbia Aparecida Costa Nobre', 'Agronomia', 'IAP', 'danubia_nobre@yahoo.com.br', 1, '2017-10-04 00:10:22', '2017-10-04 01:06:00'),
(105, '10367', 'Leonardo Ângelo de Aquino', 'Agronomia', 'IAP', 'leonardo.aquino@ufv.br', 1, '2017-10-04 00:36:47', '2017-10-04 00:36:47'),
(106, '8855', 'Pedro Ivo Vieira Good God', 'Agronomia', 'IAP', 'pedro.god@ufv.br', 1, '2017-10-04 00:39:18', '2017-10-04 00:39:18'),
(107, '10087', 'Renato Adriane Alves Ruas', 'Agronomia', 'IAP', 'renatoruas@ufv.br', 1, '2017-10-04 00:42:52', '2017-10-04 00:42:52'),
(108, '11492', 'Vinícius Ribeiro Faria', 'Agronomia', 'IAP', 'virfaria@yahoo.com.br', 1, '2017-10-04 00:43:59', '2017-10-04 00:43:59'),
(109, '11676', 'Camila Rocha da Silva', 'Ciência e Tecnologia de Alimentos', 'IAP', 'camila.rocha@ufv.br', 1, '2017-10-04 00:44:57', '2017-10-04 00:44:57'),
(110, '11164', 'MONISE VIANA ABRANCHES', 'Nutrição', 'IBP', 'monisevianaufv@hotmail.com', 1, '2017-10-04 00:59:39', '2017-10-04 00:59:39'),
(111, '12438', 'Hudson Machado de Almeida', 'ADMINISTRAÇÃO', 'IHP', 'hudson_ufv@yahoo.com.br', 1, '2017-10-04 20:44:41', '2017-10-04 20:44:41'),
(112, '30002061', 'Ana Caroline de Lourdes Pereira Assis', 'Agronomia – Produção Vegetal', 'IAP', 'ana.lourdes@ufv.br', 1, '2017-10-05 19:12:38', '2017-10-05 19:12:38'),
(113, '30002229', 'Mariana Teixeira Pigozzi', 'Agronomia – Produção Vegetal', 'IAP', 'mariana.pigozzi@ufv.br', 1, '2017-10-05 19:13:20', '2017-10-05 19:13:20'),
(114, '30001707', 'Mariana Cecilia Melo', 'Agronomia – Produção Vegetal', 'IAP', 'mariana.c.melo@ufv.br', 1, '2017-10-05 19:14:04', '2017-10-05 19:14:04'),
(115, '30000263', 'Laudiane Erica Leite', 'Agronomia – Produção Vegetal', 'IAP', 'laudiane.leite@ufv.br', 1, '2017-10-05 19:14:44', '2017-10-05 19:14:44'),
(116, '30002002', 'Danúbia Aparecida Costa Nobre', 'Agronomia – Pós Doutorado', 'IAP', 'danubia_nobre@yahoo.com.br', 1, '2017-10-05 19:24:40', '2017-10-05 19:24:40'),
(117, '10008', 'Ézio Marques da Silva', 'Agronomia', 'IAP', 'ezio.silva@ufv.br', 1, '2017-10-05 19:26:42', '2017-10-05 19:26:42'),
(118, '30001707', 'Mariana Cecilia Melo', 'Agronomia – Produção Vegetal', 'IAP', 'mariana.c.melo@ufv.br', 1, '2017-10-10 20:02:16', '2017-10-10 20:02:16'),
(119, '0000002', 'Tatianne Aparecida de Oliveira Cardoso', 'Ciências Contábeis', 'IHP', 'tatiannecontadora@gmail.com', 1, '2017-10-16 18:38:31', '2017-10-16 18:38:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_ano_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2017_07_14_062606_create_sala_table', 1),
(5, '2017_07_14_062625_create_trabalho_table', 1),
(6, '2017_07_14_062641_create_avaliador_table', 1),
(7, '2017_07_14_062740_create_avaliacao_table', 1),
(8, '2017_07_28_143544_create_avaliacao_detalhe_table', 1),
(9, '2017_07_30_062548_create_minicurso_table', 1),
(10, '2017_07_30_180604_create_minicurso_ministrante_table', 1),
(11, '2017_07_30_180700_create_minicurso_horario_table', 1),
(12, '2017_07_31_180604_create_trabalho_autor_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `minicurso`
--

CREATE TABLE `minicurso` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vagas` int(11) NOT NULL,
  `sala_id` int(10) UNSIGNED NOT NULL,
  `ano_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `minicurso_horario`
--

CREATE TABLE `minicurso_horario` (
  `id` int(10) UNSIGNED NOT NULL,
  `inicio` datetime NOT NULL,
  `fim` datetime NOT NULL,
  `minicurso_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `minicurso_ministrante`
--

CREATE TABLE `minicurso_ministrante` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minicurso_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacidade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`id`, `nome`, `descricao`, `capacidade`, `created_at`, `updated_at`) VALUES
(2, 'PVA 101', 'Sala para apresentação oral', 50, '2017-09-28 02:22:03', '2017-09-28 02:22:03'),
(3, 'PVA 102', 'Sala para apresentação oral', 50, '2017-09-28 02:22:16', '2017-09-28 02:22:16'),
(4, 'PVA 103', 'Sala para apresentação oral', 50, '2017-09-28 02:22:57', '2017-09-28 02:22:57'),
(5, 'PVA 106', 'Sala para apresentação oral', 50, '2017-09-28 02:23:08', '2017-09-28 02:23:08'),
(6, 'PVA 107', 'Sala para apresentação oral', 50, '2017-09-28 02:23:22', '2017-09-28 02:23:22'),
(7, 'PVA 108', 'Sala para apresentação oral', 50, '2017-09-28 02:23:34', '2017-09-28 02:23:34'),
(8, 'PVA 113', 'Sala para apresentação oral', 50, '2017-09-28 02:23:43', '2017-09-28 02:23:43'),
(9, 'PVA 114', 'Sala para apresentação oral', 50, '2017-09-28 02:23:55', '2017-09-28 02:23:55'),
(10, 'PVA 202', 'Sala para apresentação oral', 50, '2017-10-10 19:55:05', '2017-10-10 19:55:05'),
(11, 'PVA 229', 'Sala para apresentação oral', 50, '2017-10-10 19:55:21', '2017-10-10 19:55:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalho`
--

CREATE TABLE `trabalho` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orientador` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modalidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `trabalho`
--

INSERT INTO `trabalho` (`id`, `nome`, `orientador`, `modalidade`, `area`, `ano_id`, `created_at`, `updated_at`) VALUES
(7890, 'Formação Política: Educação, Ética, Moral e Cidadania', 'JOAO ALFREDO COSTA DE CAMPOS MELO JUNIOR', 'Extensão', 'Oral', 1, NULL, NULL),
(8001, 'Gestão de Pessoas na Cafeicultura da Região do Cerrado Mineiro', 'RAQUEL SANTOS SOARES MENEZES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(8142, 'Primeiro Passo- Fase 5', 'ERICA FIDELIS GOMES', 'Extensão', 'Oral', 1, NULL, NULL),
(9051, 'Desenvolvimento de Software Livre para Realização de Projeto Geométrico de Estradas', 'REYNALDO FURTADO FARIA FILHO', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9052, 'Efeito da profundidade de semeadura sobre o comprimento do hipocótilo e do epicótilo de plantas de soja', 'EDER MATSUO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9054, 'Desenvolvimento de bolo de cenoura sem glúten e avaliação da sua aceitabilidade', 'MONISE VIANA ABRANCHES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9055, 'Diversidade genética entre progênies de macaúba por meio de descritores morfológicos vegetativos - Ano 2016', 'EDER MATSUO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9061, 'Estudos citogenéticos em Hoplias intermedius na bacia do rio São Francisco', 'RUBENS PAZZA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9063, 'Classificação de células HEp-2 utilizando redes neurais convolucionais', 'MURILO COELHO NALDI', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9064, 'Apoio à disseminação de técnicas de baixo custo para aproveitamento de água de chuva e reúso de água cinza', 'REJANE NASCENTES', 'Extensão', 'Oral', 1, NULL, NULL),
(9068, 'Diversidade cromossômica e fenotípica em Astyanax rivularis, bacia do rio São Francisco', 'RUBENS PAZZA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9070, 'Descrição de novo cariótipo e número cromossômico de Astyanax rivularis (Characiformes, Characidae) no córrego Abaeté (Bacia do rio São Francisco)', 'KARINE FREHNER KAVALCO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9071, 'As legislações trabalhista e previdenciária rumo à horizontalização dos seus direitos', 'DEBORA SILVA MELO', 'Extensão', 'Painel', 1, NULL, NULL),
(9072, 'Rock com Ciência', 'RUBENS PAZZA', 'Extensão', 'Oral', 1, NULL, NULL),
(9073, 'Aceitabilidade de sorvete artesanal com adição de prebiótico em substituição a gordura', 'MONISE VIANA ABRANCHES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9074, 'Metodologia ativa no ensino jurídico para outros cursos de graduação', 'CRISTIANO PACHECO DE DEUS MUNDIM', 'Ensino', 'Oral', 1, NULL, NULL),
(9075, 'AS LEIS TRABALHISTAS E DIREITOS PREVIDENCIÁRIOS: conhecimentos extracurriculares aplicados para alunos do ensino médio.', 'MARIA AUXILIADORA DA SILVA', 'Extensão', 'Oral', 1, NULL, NULL),
(9077, 'Resíduos de Valor', 'VANIA MARIA MOREIRA VALENTE', 'Extensão', 'Oral', 1, NULL, NULL),
(9078, 'Beneficiamento de cenouras fora do padrão de comercialização produzidas na região de Rio Paranaíba', 'ISADORA REBOUCAS NOLASCO DE OLIVEIRA', 'Extensão', 'Oral', 1, NULL, NULL),
(9079, 'Isolamento, caracterização e avaliação da atividade biológica das substâncias produzidas in vitro por fungos endofíticos isolados do feijoeiro(PHASEOLUS VULGARIS)', 'GERALDO HUMBERTO SILVA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9080, 'Transparência na Gestão Pública Municipal: um estudo nos Municípios da Mesorregião do Alto Paranaíba/Triângulo Mineiro – Mg', 'ROSIANE MARIA LIMA GONCALVES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9082, 'Estudo de eletrodos de alta performance de baixo custo: nanofitas de grafeno incorporadas em eletrodos à base de carbono', 'CASSIANO RODRIGUES DE OLIVEIRA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9083, 'Germinação in vitro de embriões de macaúba Acrocomia aculeata [ (Jacq.) Lodd. ex Mart.] – Uma alternativa para a propagação da espécie.', 'LUCIANO BUENO DOS REIS', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9084, 'Análise citogenética em Astyanax paranae na região do Alto Paranaíba no córrego Olhos D´Água', 'KARINE FREHNER KAVALCO', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9085, 'Produção de videoaulas: Novas experiências didáticas no processo ensino-aprendizagem', 'PEDRO IVO VIEIRA GOOD GOD', 'Ensino', 'Oral', 1, NULL, NULL),
(9086, 'Desenvolvimento e Aplicação da Técnica de Relaxação Lagrangeana com Fixação de Variáveis ao Problema de Sequenciamento de Uma Máquina', 'VAGNER RODRIGUES DE BESSA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9088, 'A crise econômica do subprime e seus impactos nos indicadores financeiros de empresas listadas na BM&FBovespa.', 'FABIO ANDRE TEIXEIRA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9089, 'Laboratório do Pensamento: Grupos de Encontro como recurso de enfrentamento das dificuldades existenciais dos discentes da UFV campus Rio Paranaíba', 'ELIAS MARCO VEIGA GONCALVES', 'Extensão', 'Painel', 1, NULL, NULL),
(9090, 'Métodos de aplicação de fósforo na cultura do repolho', 'LEONARDO ANGELO DE AQUINO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9091, 'Modelagem: uma abordagem a problemas de Equações Diferenciais Ordinárias', 'VAGNER RODRIGUES DE BESSA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9092, 'Assessoria financeira e gerencial a entidades filantrópicas de Rio Paranaíba/MG', 'RODRIGO SILVA DINIZ LEROY', 'Extensão', 'Oral', 1, NULL, NULL),
(9094, 'Semente de Schinus molle: óleo essencial, atividade biológica e composição química', 'VANIA MARIA MOREIRA VALENTE', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9096, 'Melhor pH de calda do inseticida clorantraniliprole 350 WG® e sua ação ovicida em Leucoptera coffeella (Lepidoptera: Lyonetiidae)', 'FLAVIO LEMES FERNANDES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9097, 'Caracterização de genótipos de soja sob diferentes doses de fósforo', 'VINICIUS RIBEIRO FARIA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9098, 'LiveVis: um arcabouço computacional para auxiliar no processo de criação de mapas visuais', 'TACITO TRINDADE DE ARAUJO TIBURTINO NEVES', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9099, 'Caracterização química da polpa de araticum (Annona crassiflora Mart) produzido no Cerrado de Minas Gerais.', 'EVANDRO GALVAO TAVARES MENEZES', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9100, 'Artesanato e Cultura Local: Capacitação Técnica e de Gestão para Artesãos em Rio Paranaíba-MG', 'LUCIANE CRISTINA DE OLIVEIRA LISBOA', 'Extensão', 'Oral', 1, NULL, NULL),
(9101, 'Sazonalidade de novas pragas, tripes e mosca minadora no cultivo de Daucus carota', 'FLAVIO LEMES FERNANDES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9102, 'Caracterização Química do feijão produzido em solos fertilizados com pó de rochas', 'FABRICIA QUEIROZ MENDES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9103, 'Cálculo do Índice de preços para a cidade de Rio Paranaíba', 'FABIO ANDRE TEIXEIRA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9104, 'Análise da Configuração da Identidade Gerencial de Prefeitos: Um Estudo a partir da Ideia de Dominação em Max Weber', 'JOAO ALFREDO COSTA DE CAMPOS MELO JUNIOR', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9105, 'Diversidade da avifauna urbana em praças de cidades do Alto Paranaíba, Minas Gerais', 'SABRINA DA SILVA PINHEIRO DE ALMEIDA', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9106, 'Por que os jovens trabalham, voluntariamente? Concepção e implantação de programas educacionais no Time Enactus UFV-CRP', 'RAQUEL SANTOS SOARES MENEZES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9107, 'Avaliação de genótipos de soja quanto à eficiência de utilização de fósforo', 'PEDRO IVO VIEIRA GOOD GOD', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9108, 'Influência do déficit hídrico nos parâmetros fisiológicos, morfológicos e na qualidade nutricional dos grãos de soja', 'LILIANE EVANGELISTA VISOTTO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9109, 'Identificação de espécies de Meloidogyne na cultura da cenoura nas três principais regiões produtoras do estado de Minas Gerais', 'LILIANE EVANGELISTA VISOTTO', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9111, 'Estudo da cultura/contexto nacional e adoção de práticas de manufatura em países desenvolvidos e em desenvolvimento', 'LILLIAN DO NASCIMENTO GAMBI', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9112, 'Relações de gênero na cafeicultura da região do Cerrado Mineiro: a visão das mulheres nos diferentes segmentos da cadeia agroindustrial do café', 'RAQUEL SANTOS SOARES MENEZES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9114, 'Métodos multivariados para análise da distinguibilidade de cultivares', 'VINICIUS RIBEIRO FARIA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9116, 'CARACTERIZAÇÃO FÍSICO - QUÍMICA DE ACESSOS DE Solanum DO BGH - UFV', 'MARIA ELISA DE SENA FERNANDES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9117, 'Uso do ácido salicílico na redução de estresse causado pelo metribuzin na cultura da cenoura', 'MARCELO RODRIGUES DOS REIS', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9118, 'Avaliação da não preferência alimentar de Spodoptera frugiperda a acessos de tomateiro', 'MARIA ELISA DE SENA FERNANDES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9119, 'Influência do efeito de borda na diversidade de formigas de restinga', 'MARCELO RIBEIRO PEREIRA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9120, 'Um Estudo da Aplicação de Técnicas de Visualização de Informação sobre Dados de Saúde', 'TACITO TRINDADE DE ARAUJO TIBURTINO NEVES', 'Ensino', 'Painel', 1, NULL, NULL),
(9121, 'INFLUÊNCIA DO REVESTIMENTO DE GELATINA ADICIONADO DE ÓLEO ESSENCIAL DE ALECRIM (Rosmarinus officinalis) NAS CARACTERISTICAS FÍSICO-QUÍMICAS DE CORTES DE LOMBO SUÍNO', 'ISABELA COSTA GUIMARAES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9122, 'Avaliação do potencial tecnológico de Lactococcus isolados dos queijos artesanais produzidos na região do cerrado mineiro', 'CAMILA ROCHA DA SILVA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9123, 'Duas décadas de empoderamento do agronegócio na microrregião de Patos de Minas', 'AUREA LUCIA SILVA ANDRADE', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9124, 'Biondicador de flumioxazin no solo', 'MARCELO RODRIGUES DOS REIS', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9125, 'Duas décadas de empoderamento do agronegócio na microrregião de Patos de Minas', 'AUREA LUCIA SILVA ANDRADE', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9126, 'Caracterização citogenética de Astyanax rivularis (Characiformes, Characidae) do córrego Tiros (Bacia do rio São Francisco)', 'KARINE FREHNER KAVALCO', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9127, 'Avaliação antropométrica e do consumo alimentar de gestantes atendidas na unidade de Estratégia da Saúde da Família - São Francisco, Rio Paranaíba - MG', 'MEIRE DE OLIVEIRA BARBOSA', 'Extensão', 'Oral', 1, NULL, NULL),
(9128, 'Germinação in vitro de embriões de macaúba Acrocomia aculeata[(Jacq.) Lodd. ex Mart.]- Uma alternativa para a propagação da espécie', 'LUCIANO BUENO DOS REIS', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9129, 'Asteraceae do município de Serra do Salitre, Minas Gerais Brasil (dados preliminares)', 'SILVANA DA COSTA FERREIRA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9130, 'Educação Alimentar e Nutricional como estratégia para melhoria da escolhas alimentares relacionadas a frutas e hortaliças de pré-escolares de Rio Paranaíba-MG.', 'MARILIA LELIS RIBEIRO', 'Extensão', 'Oral', 1, NULL, NULL),
(9131, 'Inoculação com fungos micorrízicos não aumenta produtividade, acúmulo de fósforo e colonização micorrízica da soja em solo sob uso agrícola', 'ANDRE MUNDSTOCK XAVIER DE CARVALHO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9132, 'Síntese e caracterização de compostos do tipo da Hidrocalumita intercalados com ânions carbonato e hidroxila e seus derivados térmicos', 'JAIRO TRONTO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9133, 'Transferibilidade de loci microssatélites em Brycon nattereri, uma espécie ameaçada de extinção.', 'KARINE FREHNER KAVALCO', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9134, 'Modelos não lineares para crescimento do PIB na microrregião de Patrocínio/MG', 'HERNANI MARTINS JUNIOR', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9135, 'O Agronegócio e a Dinâmica Macroeconômica dos Municípios que Compõe a Região do Alto Paranaíba/MG', 'FABIO ANDRE TEIXEIRA', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9136, 'Cooperação e o despertar para a força das organizações sociais', 'ROSIANE MARIA LIMA GONCALVES', 'Extensão', 'Oral', 1, NULL, NULL),
(9137, 'O Problema de Sequenciamento de Caminhões em um Centro de Crossdocking com Máquinas Flexíveis', 'THIAGO HENRIQUE NOGUEIRA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9138, 'Seleção de progênies de soja para produção de grãos, teor de óleo e proteína com uso de modelos mistos', 'PEDRO IVO VIEIRA GOOD GOD', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9139, 'Um Estudo sobre a forma canônica de Jordan e algumas aplicações', 'VAGNER RODRIGUES DE BESSA', 'Ensino', 'Oral', 1, NULL, NULL),
(9140, 'Métodos de aplicação de fósforo para o cultivo da batata', 'LEONARDO ANGELO DE AQUINO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9141, 'Avaliação do Saneamento Ambiental em um Município de Pequeno Porte Por Meio da Proposição e Aplicação de Índices de Percepção e Satisfação Populacional', 'FREDERICO CARLOS MARTINS DE MENEZES FILHO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9142, 'Análise de crescimento de plantas de feijão sob uso de biorreguladores', 'WILLIAN RODRIGUES MACEDO', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9143, 'Extrações de óleos da polpa de abacate (Persea ameriana Mill) utilizando diferentes solventes', 'EVANDRO GALVAO TAVARES MENEZES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9144, 'Avaliação Antropométrica de Pré-Escolares de Escolas Privadas da Cidade de Rio Paranaíba/MG', 'MEIRE DE OLIVEIRA BARBOSA', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9145, 'Inclusão Digital: Capacitação de Crianças, Jovens e Adultos', 'IRIS FABIANA DE BARCELOS TRONTO', 'Extensão', 'Oral', 1, NULL, NULL),
(9146, 'Aspectos institucionais e regulação da drenagem urbana nas capitais da região sudeste brasileira', 'FREDERICO CARLOS MARTINS DE MENEZES FILHO', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9148, 'Mapeamento Da Fragilidade Ambiental De Sub-Bacias Pertencentes À Bacia Hidrográfica Dos Afluentes Mineiros Do Alto Paranaíba Em Rio Paranaíba', 'FREDERICO CARLOS MARTINS DE MENEZES FILHO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9149, 'Desenvolvimento da agricultura familiar por meio da promoção e aprimoramento das boas praticas de fabricação em queijarias artesanais do Alto Paranaíba – MG', 'MILENE THEREZINHA DAS DORES', 'Extensão', 'Oral', 1, NULL, NULL),
(9150, 'Potencial de microrganismos endofíticos de raíz em promover crescimento de orquídeas', 'MARLON CORREA PEREIRA', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9151, 'Capacitação em processamento mínimo de vegetais de produtores e comerciantes da região do Alto Paranaíba', 'ISABELA COSTA GUIMARAES', 'Extensão', 'Oral', 1, NULL, NULL),
(9152, 'Campanha \"Traga sua caneca\"', 'SABRINA DA SILVA PINHEIRO DE ALMEIDA', 'Extensão', 'Painel', 1, NULL, NULL),
(9153, 'Otimização da produção de fitases por fermentação no estado sólido (FES) utilizando resíduos agrícolas', 'PAULO SERGIO MONTEIRO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9154, 'Cursinho Popular Preparatório Para o Enem no Campus de Rio Paranaíba: “perspectiva de uma Universidade Mais Pública”', 'DONIZETE APARECIDO BATISTA', 'Extensão', 'Painel', 1, NULL, NULL),
(9155, 'Análise das patologias decorrentes de vícios construtivos em estruturas de concreto armado na cidade de Rio Paranaíba/MG', 'MARIA CLAUDIA SOUSA ALVARENGA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9156, 'Uma iniciativa para atrair as estudantes de ensino médio do município de Rio Paranaíba para a área de Tecnologia da Informação.', 'ADRIANA ZANELLA MARTINHAGO', 'Extensão', 'Oral', 1, NULL, NULL),
(9157, 'Influência do manejo das entrelinhas do café na diversidade de insetos', 'SABRINA DA SILVA PINHEIRO DE ALMEIDA', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9158, 'Educação Financeira: aprendendo a lidar com dinheiro', 'FABIO ANDRE TEIXEIRA', 'Extensão', 'Oral', 1, NULL, NULL),
(9159, 'Análise do manejo de águas pluviais através dos sistemas de biorretenção e sua inserção na infraestrutura brasileira', 'FREDERICO CARLOS MARTINS DE MENEZES FILHO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9160, 'LifeCraft: nutrição e tecnologia para os jovens', 'PEDRO MOISES DE SOUSA', 'Extensão', 'Oral', 1, NULL, NULL),
(9161, 'Aplicação de Redes Neurais Artificiais do tipo Multilayer Perceptrons (MLP) na determinação da Qualidade de vinhos', 'GILMAR GONÇALVES FERREIRA', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9162, 'Níveis pressóricos de adolescentes mediante a utilização de vestimentas coloridas ou brancas pelo aferidor', 'MARTHA ELISA FERREIRA DE ALMEIDA', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9163, 'Desenvolvimento e aplicação de uma heurística híbrida ao problema de sequenciamento de máquinas com indexação no tempo', 'THIAGO HENRIQUE NOGUEIRA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9164, 'Classificação de núcleos celulares cancerígenos na região colorretal utilizando redes neurais convolucionais', 'JOÃO FERNANDO MARI', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9165, 'Desenvolvimento de um modelo de simulação para o dimensionamento da equipe mecânica de pavimentação de estradas rurais e florestais', 'RAIANE RIBEIRO MACHADO GOMES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9166, 'Métodos de segmentação de células em imagens de microscopia baseado na transformada watershed', 'JOÃO FERNANDO MARI', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9168, 'Degradação da palhada de cana-de-açúcar em função da inoculação de diferentes produtos biológicos', 'MARLON CORREA PEREIRA', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9169, 'Resistência do tomateiro Solanum spp. à Helicoverpa armigera', 'MARIA ELISA DE SENA FERNANDES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9170, 'Engenharia para todos - acessibilidade no dia a dia das pessoas', 'MARIA CLAUDIA SOUSA ALVARENGA', 'Extensão', 'Oral', 1, NULL, NULL),
(9171, 'Recirculação de chorume em minicélulas de aterros sanitários', 'REJANE NASCENTES', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9172, 'Adsorção de chumbo utilizando um hidróxido duplo lamelar como adsorvente', 'FREDERICO GARCIA PINTO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9173, 'Geotecnia ambiental aplicada à prevenção e avaliação de problemas ambientais: Estudo de caso do lixão de Rio Paranaíba', 'REJANE NASCENTES', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9175, 'O ecoar de uma voz urbana: a ditadura militar nos versos de Renato Russo', 'THIAGO RODRIGUES SILAME', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9176, 'MORFOLOGIA DA GLÂNDULA SALIVAR DE Edessa meditabunda(HETEROPTERA:PENTATOMIDAE)', 'EDMILSON AMARAL DE SOUZA', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9177, 'Análise antropométrica e do consumo alimentar de um grupo terceirizado da Universidade Federal de Viçosa, Campus Rio Paranaíba - MG', 'LUCIANA RESENDE CARDOSO JULIO', 'Ensino', 'Oral', 1, NULL, NULL),
(9178, 'Diagnóstico dos procedimentos de instalação elétrica da cidade de Rio Paranaíba - MG', 'LINEKER MAX GOULART COELHO', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9179, 'Gestão de Custos na Pecuária Leiteira', 'LEONARDO PINHEIRO DEBOCA', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9180, 'Baixa diversidade de fungos endofíticos em uma população de Cattleya walkeriana', 'MARLON CORREA PEREIRA', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9181, 'Descrição histológica e histoquímica de espermatecas de fêmeas de Rhodnius neglectus (Lent, 1954) (Hemiptera, Reduviidae) com ovários desenvolvidos e não desenvolvidos', 'EDMILSON AMARAL DE SOUZA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9182, 'Evolução da exportação do agronegócio na microrregião de Araxá nos últimos 25 anos.', 'JULIENNE DE JESUS ANDRADE', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9183, 'Estudo de Caso das Manifestações Patológicas em Marquises de Concreto Armado em Rio Paranaíba-MG', 'MARIA CLAUDIA SOUSA ALVARENGA', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9184, 'Uso de técnicas de visualização de informação para análise de dados políticos', 'TACITO TRINDADE DE ARAUJO TIBURTINO NEVES', 'Ensino', 'Painel', 1, NULL, NULL),
(9185, 'Propagação de Arracacia xanthorriza', 'LUCIANO BUENO DOS REIS', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9186, 'A importância da tecnologia de informação em um posto de combustível', 'MICHELE MORAIS OLIVEIRA PEREIRA', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9187, 'Sustentabilidade na Agricultura Familiar: uma abordagem de gênero', 'RAQUEL SANTOS SOARES MENEZES', 'Extensão', 'Oral', 1, NULL, NULL),
(9188, 'Agrupamento de dados na segmentação de células de imagens de microscopia', 'MURILO COELHO NALDI', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9199, 'Química Elevator: Um Jogo Digital para o Auxílio no Ensino de Química', 'PEDRO MOISES DE SOUSA', 'Extensão', 'Oral', 1, NULL, NULL),
(9200, 'Interações entre adjuvante e pontas hidráulicas no controle da deriva de glifosato', 'RENATO ADRIANE ALVES RUAS', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9201, 'Uma comparação entre dois métodos para a segmentação de cromossomos sobrepostos em imagens de microscopia', 'JOÃO FERNANDO MARI', 'Pesquisa', 'Painel', 1, NULL, NULL),
(9202, 'Avaliação nutricional de crianças e adolescentes da Escolinha de Futebol Amador, na Cidade de Rio Paranaíba – MG', 'REGIANE LOPES DE SALES', 'Extensão', 'Oral', 1, NULL, NULL),
(9203, 'O efeito do silício na germinação e desenvolvimento in vitro de embriões zigóticos de macaúba', 'LUCIANO BUENO DOS REIS', 'Pesquisa', 'Oral', 1, NULL, NULL),
(9204, 'Análise da Conjuntura Econômica do estado de Minas Gerais', 'RICARDO FREITAS MARTINS DA COSTA', 'Extensão', 'Painel', 1, NULL, NULL),
(9207, 'Análise citogenética de Astyanax paranae do córrego Lava Pés, região do alto Paranaíba', 'KARINE FREHNER KAVALCO', 'Pesquisa', 'Painel', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalho_autor`
--

CREATE TABLE `trabalho_autor` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trabalho_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `trabalho_autor`
--

INSERT INTO `trabalho_autor` (`id`, `nome`, `trabalho_id`, `created_at`, `updated_at`) VALUES
(1, 'Wellington Souza Santos', 7890, NULL, NULL),
(2, 'Mariana Alvarinho Lorizola', 8142, NULL, NULL),
(3, 'Paula Eliene de Souza', 9074, NULL, NULL),
(4, 'Luís Fernando de Resende Moura', 9075, NULL, NULL),
(5, 'Martha Silva Neves', 9078, NULL, NULL),
(6, 'Gustavo Henrique Dias Souza', 9080, NULL, NULL),
(7, 'Jose Francisco Gontijo Junior', 9086, NULL, NULL),
(8, 'Ana Beatriz de Abreu Costa', 9088, NULL, NULL),
(9, 'Ellen Cassia Cunha Silva', 9091, NULL, NULL),
(10, 'Luana Martins Guimarães Sousa', 9100, NULL, NULL),
(11, 'Mariana Ishhanuhi da Silva Sismanoglu', 9102, NULL, NULL),
(12, 'Marcos Bruno da Silva', 9119, NULL, NULL),
(13, 'David Roger Paixão Marques', 9121, NULL, NULL),
(14, 'Yara Karine de Lima Silva', 9131, NULL, NULL),
(15, 'Ciro Gomes Soares', 9136, NULL, NULL),
(16, 'Antonio Brasileiro de Oliveira Falavina', 9137, NULL, NULL),
(17, 'Michele da Costa Figueiredo', 9139, NULL, NULL),
(18, 'Ana Luiza Melo Rodrigues', 9141, NULL, NULL),
(19, 'Guilherme Marques Santos', 9148, NULL, NULL),
(20, 'Ana Luiza de Souza Miranda', 9151, NULL, NULL),
(21, 'Ludmila Silva Luiz', 9155, NULL, NULL),
(22, 'Rafaela Cruz Marques', 9156, NULL, NULL),
(23, 'Gabriella Silva Melo', 9158, NULL, NULL),
(24, 'Rafael Pereira Ribeiro', 9163, NULL, NULL),
(25, 'Amanda Bimbato Bettoni', 9165, NULL, NULL),
(26, 'Myller Marques de Oliveira Assuncão', 9169, NULL, NULL),
(27, 'Laiane de Souza Vieira', 9175, NULL, NULL),
(28, 'Júlia Valeriano de Lira Moura', 9183, NULL, NULL),
(29, 'Lucas Caixeta Vieira', 9200, NULL, NULL),
(30, 'Nikolas Daves dos Santos', 9203, NULL, NULL),
(31, 'Valdinei Ferreira Gomes', 8001, NULL, NULL),
(32, 'Núbia Soares de Campos', 9052, NULL, NULL),
(33, 'Rafaela Braz Gonçalves', 9054, NULL, NULL),
(34, 'Deivisson Queiroz da Silva', 9055, NULL, NULL),
(35, 'Francisco de Menezes Cavalcante Sassi', 9061, NULL, NULL),
(36, 'Larissa Ferreira Rodrigues', 9063, NULL, NULL),
(37, 'Vitor Luis Amorim Fonseca', 9064, NULL, NULL),
(38, 'Matheus Lewi Cruz Bonaccorsi de Campos', 9068, NULL, NULL),
(39, 'Igor Henrique Rodrigues Oliveira', 9070, NULL, NULL),
(40, 'Leticia Faine Gomes', 9072, NULL, NULL),
(41, 'Caline Pereira Cardoso', 9073, NULL, NULL),
(42, 'Camila de Souza Magalhaes', 9077, NULL, NULL),
(43, 'Joyce Fabíula Rodrigues', 9079, NULL, NULL),
(44, 'Luis Gustavo Brogliato Camargo', 9082, NULL, NULL),
(45, 'Antonio Sergio de Souza', 9085, NULL, NULL),
(46, 'Talita Gabriela Gentil', 9090, NULL, NULL),
(47, 'Lucas Alexandre Rocha', 9092, NULL, NULL),
(48, 'Nathany Kássia Morais', 9094, NULL, NULL),
(49, 'Adélio Barbosa Teixeira', 9096, NULL, NULL),
(50, 'Lucas Oliveiros de Andrade', 9097, NULL, NULL),
(51, 'Rafael Vinhal Silva', 9101, NULL, NULL),
(52, 'Adriana Aparecida Ribeiro', 9103, NULL, NULL),
(53, 'Thales Albino dos Santos', 9104, NULL, NULL),
(54, 'Claudionor Ivo de Oliveira Sousa', 9106, NULL, NULL),
(55, 'Andre Bernardes Dias', 9107, NULL, NULL),
(56, 'Mariana Rocha Roswell', 9108, NULL, NULL),
(57, 'QUEZIA DE SOUZA BOAVENTURA', 9112, NULL, NULL),
(58, 'Lana Karoline Santos', 9114, NULL, NULL),
(59, 'Filipe de Souza Carneiro', 9116, NULL, NULL),
(60, 'Valesca Pinheiro de Miranda', 9117, NULL, NULL),
(61, 'Betânia Silva de Oliveira', 9118, NULL, NULL),
(62, 'Isabela Cristina Braga Lima', 9122, NULL, NULL),
(63, 'Ravilla de Castro Barbosa', 9123, NULL, NULL),
(64, 'Amanda Rocha Barbosa', 9124, NULL, NULL),
(65, 'Isabela Oliveira Santana', 9127, NULL, NULL),
(66, 'Marcos Lima de Oliveira', 9129, NULL, NULL),
(67, 'Lenita da Cunha Sales', 9130, NULL, NULL),
(68, 'Addila Gabriela Salgado Corrêa', 9132, NULL, NULL),
(69, 'Rafaela Lanusse de Bessa Lima', 9138, NULL, NULL),
(70, 'Maria Elisa Paraguassu Soares', 9140, NULL, NULL),
(71, 'Amanda Paula de Oliveira', 9143, NULL, NULL),
(72, 'Victoria Passoni', 9145, NULL, NULL),
(73, 'Louise Paiva Passos', 9149, NULL, NULL),
(74, 'Danielle Jesus de Carvalho', 9153, NULL, NULL),
(75, 'Lucas Humberto Silva', 9159, NULL, NULL),
(76, 'Pedro Henrique dos Reis Araujo', 9160, NULL, NULL),
(77, 'Gabriela Silveira Brandão', 9170, NULL, NULL),
(78, 'Maria Clara Moreira Fort', 9171, NULL, NULL),
(79, 'Ana Rita de Oliveira', 9172, NULL, NULL),
(80, 'Andreza Nataline Rodrigues de Amorim', 9177, NULL, NULL),
(81, 'Renato Oliveira Vaz de Melo', 9178, NULL, NULL),
(82, 'Jullie Anne Pereira Farias', 9181, NULL, NULL),
(83, 'Maria Carolina Silva', 9185, NULL, NULL),
(84, 'Barbara Zimerman dos Santos', 9187, NULL, NULL),
(85, 'ROBSON DE SOUZA VIEIRA', 9188, NULL, NULL),
(86, 'Patrick Aparecido Rocha Faria', 9199, NULL, NULL),
(87, 'Francielle da Silva Barbosa', 9202, NULL, NULL),
(88, 'Lucas Batista Fialho', 9051, NULL, NULL),
(89, 'Karoline Santos Barbosa', 9071, NULL, NULL),
(90, 'Júlia Mendonça Silva', 9083, NULL, NULL),
(91, 'Nicole Analia Borges Rocha', 9084, NULL, NULL),
(92, 'Vanessa Daniela Reis', 9089, NULL, NULL),
(93, 'Breno Figueiredo Nunes', 9098, NULL, NULL),
(94, 'Alberto Lima de Oliveira', 9099, NULL, NULL),
(95, 'Guilherme Wince de Moura', 9105, NULL, NULL),
(96, 'Camila Miwa Hanzawa', 9109, NULL, NULL),
(97, 'Brendo Otavio Paiva Castro', 9111, NULL, NULL),
(98, 'Cibele Mara Fonseca', 9120, NULL, NULL),
(99, 'Deivisson Costa de Carvalho', 9125, NULL, NULL),
(100, 'Iuri Batista da Silva', 9126, NULL, NULL),
(101, 'Gabriela Mendes Rocha', 9128, NULL, NULL),
(102, 'Snaydia Viegas Resende', 9133, NULL, NULL),
(103, 'Lais Cristina Toledo de Paiva', 9134, NULL, NULL),
(104, 'Vivian Raniere Mendes Silva', 9135, NULL, NULL),
(105, 'Kênia Cristina Sugawara', 9142, NULL, NULL),
(106, 'Laiene Moreira Vieira', 9144, NULL, NULL),
(107, 'Pedro Henrique Alves Braga', 9146, NULL, NULL),
(108, 'João Rafael Mena Romeiro', 9150, NULL, NULL),
(109, 'Mayumi Furuya de Assis', 9152, NULL, NULL),
(110, 'Raniel Jose Luiz de Sousa', 9154, NULL, NULL),
(111, 'Jessica Cintia de Lima Castro', 9157, NULL, NULL),
(112, 'Cecília Baldoíno Ferreira', 9161, NULL, NULL),
(113, 'Geovana Souza Amorim', 9162, NULL, NULL),
(114, 'Lucas Gonçalves Pellaquim', 9164, NULL, NULL),
(115, 'Welton Felipe Gonçalves', 9166, NULL, NULL),
(116, 'Diego Felipe Alves Melo', 9168, NULL, NULL),
(117, 'Rafaela Cruz de Oliveira', 9173, NULL, NULL),
(118, 'Davy Soares Gomes', 9176, NULL, NULL),
(119, 'Lucas Mendes Rodrigues de Oliveira', 9179, NULL, NULL),
(120, 'Paloma Cavalcante Cunha', 9180, NULL, NULL),
(121, 'Julia Rosa Trindade', 9182, NULL, NULL),
(122, 'Lara Isabella Costa de Oliveira', 9184, NULL, NULL),
(123, 'Amanda Kelly da Silva', 9186, NULL, NULL),
(124, 'Rodrigo Junior Rodrigues dos Santos', 9201, NULL, NULL),
(125, 'Guilherme Carvalho Borges', 9204, NULL, NULL),
(126, 'Isabella Santos de Lima', 9207, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano_selecionado` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `ano_selecionado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jackson Santana', 'jack.rsantana@gmail.com', '$2y$10$Gcd6/FWLQiW9H4jnYcAQru5aBAeBstF2YZpbxk1MAwt4/8bUf9SqG', 0, 'lcnXEr92fz', '2017-09-07 03:16:26', '2017-09-07 03:16:26'),
(2, 'Pedro Sousa', 'profpedromoises@gmail.com', '$2y$10$Gcd6/FWLQiW9H4jnYcAQru5aBAeBstF2YZpbxk1MAwt4/8bUf9SqG', 0, 'Pz7TeoYfV8', '2017-09-07 03:16:26', '2017-09-07 03:16:26'),
(3, 'Fábio André Teixeira', 'fateixeira.ufv@gmail.com', '$2y$10$Gcd6/FWLQiW9H4jnYcAQru5aBAeBstF2YZpbxk1MAwt4/8bUf9SqG', 0, 'qlmvBWqNuA', '2017-09-07 03:16:26', '2017-09-07 03:16:26'),
(4, 'Lais Barbosa Vieira', 'laisbarbosavieira@gmail.com', '$2y$10$Gcd6/FWLQiW9H4jnYcAQru5aBAeBstF2YZpbxk1MAwt4/8bUf9SqG', 0, 'J6KhHEn1hN', '2017-09-07 03:16:26', '2017-09-07 03:16:26'),
(5, 'Comissão1', 'comissao1@ufv.com', '$2y$10$Gcd6/FWLQiW9H4jnYcAQru5aBAeBstF2YZpbxk1MAwt4/8bUf9SqG', 0, 'oQ654LXF6Glct6oEXWrx7cJn8JmJJMJtseWvZ5lXvyaMwWRF9kyFk3SQygZu', '2017-09-07 03:16:26', '2017-09-07 03:16:26'),
(6, 'Comissão2', 'comissao2@ufv.com', '$2y$10$Gcd6/FWLQiW9H4jnYcAQru5aBAeBstF2YZpbxk1MAwt4/8bUf9SqG', 0, 'PYvtf8c0Ln', '2017-09-07 03:16:26', '2017-09-07 03:16:26'),
(7, 'Comissão3', 'comissao3@ufv.com', '$2y$10$Gcd6/FWLQiW9H4jnYcAQru5aBAeBstF2YZpbxk1MAwt4/8bUf9SqG', 0, 'gEPwf1LsKbq04Wx4wBSavpDUl2Eq76whGrpzCQ8xqOTjkPsmVwn5hT0MDozs', '2017-09-07 03:16:26', '2017-09-07 03:16:26'),
(8, 'Comissão4', 'comissao4@ufv.com', '$2y$10$Gcd6/FWLQiW9H4jnYcAQru5aBAeBstF2YZpbxk1MAwt4/8bUf9SqG', 0, 'AWYHkc0eJYZDKltcSghs5EDrAJjHW442N4gtDfXAoUo6lrETMkqrk6dCZgrN', '2017-09-07 03:16:26', '2017-09-07 03:16:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ano`
--
ALTER TABLE `ano`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `avaliacao_ano_id_foreign` (`ano_id`) USING BTREE,
  ADD KEY `avaliacao_sala_id_foreign` (`sala_id`) USING BTREE,
  ADD KEY `avaliacao_avaliador_id_foreign` (`avaliador_id`) USING BTREE;

--
-- Indexes for table `avaliacao_detalhe`
--
ALTER TABLE `avaliacao_detalhe`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `avaliacao_detalhe_trabalho_id_foreign` (`trabalho_id`) USING BTREE,
  ADD KEY `avaliacao_detalhe_avaliador1_id_foreign` (`avaliador1_id`) USING BTREE,
  ADD KEY `avaliacao_detalhe_avaliador2_id_foreign` (`avaliador2_id`) USING BTREE,
  ADD KEY `avaliacao_detalhe_avaliacao_id_foreign` (`avaliacao_id`) USING BTREE;

--
-- Indexes for table `avaliador`
--
ALTER TABLE `avaliador`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `avaliador_ano_id_foreign` (`ano_id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `minicurso`
--
ALTER TABLE `minicurso`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `minicurso_ano_id_foreign` (`ano_id`) USING BTREE,
  ADD KEY `minicurso_sala_id_foreign` (`sala_id`) USING BTREE;

--
-- Indexes for table `minicurso_horario`
--
ALTER TABLE `minicurso_horario`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `minicurso_horario_minicurso_id_foreign` (`minicurso_id`) USING BTREE;

--
-- Indexes for table `minicurso_ministrante`
--
ALTER TABLE `minicurso_ministrante`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `minicurso_ministrante_minicurso_id_foreign` (`minicurso_id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `trabalho`
--
ALTER TABLE `trabalho`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `trabalho_ano_id_foreign` (`ano_id`) USING BTREE;

--
-- Indexes for table `trabalho_autor`
--
ALTER TABLE `trabalho_autor`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `trabalho_autor_trabalho_id_foreign` (`trabalho_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE,
  ADD KEY `users_ano_selecionado_foreign` (`ano_selecionado`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ano`
--
ALTER TABLE `ano`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `avaliacao_detalhe`
--
ALTER TABLE `avaliacao_detalhe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `avaliador`
--
ALTER TABLE `avaliador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `minicurso`
--
ALTER TABLE `minicurso`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `minicurso_horario`
--
ALTER TABLE `minicurso_horario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `minicurso_ministrante`
--
ALTER TABLE `minicurso_ministrante`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trabalho`
--
ALTER TABLE `trabalho`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9208;

--
-- AUTO_INCREMENT for table `trabalho_autor`
--
ALTER TABLE `trabalho_autor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `avaliacao_ano_id_foreign` FOREIGN KEY (`ano_id`) REFERENCES `ano` (`id`),
  ADD CONSTRAINT `avaliacao_avaliador_id_foreign` FOREIGN KEY (`avaliador_id`) REFERENCES `avaliador` (`id`),
  ADD CONSTRAINT `avaliacao_sala_id_foreign` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`);

--
-- Limitadores para a tabela `avaliacao_detalhe`
--
ALTER TABLE `avaliacao_detalhe`
  ADD CONSTRAINT `avaliacao_detalhe_avaliacao_id_foreign` FOREIGN KEY (`avaliacao_id`) REFERENCES `avaliacao` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `avaliacao_detalhe_avaliador1_id_foreign` FOREIGN KEY (`avaliador1_id`) REFERENCES `avaliador` (`id`),
  ADD CONSTRAINT `avaliacao_detalhe_avaliador2_id_foreign` FOREIGN KEY (`avaliador2_id`) REFERENCES `avaliador` (`id`),
  ADD CONSTRAINT `avaliacao_detalhe_trabalho_id_foreign` FOREIGN KEY (`trabalho_id`) REFERENCES `trabalho` (`id`);

--
-- Limitadores para a tabela `avaliador`
--
ALTER TABLE `avaliador`
  ADD CONSTRAINT `avaliador_ano_id_foreign` FOREIGN KEY (`ano_id`) REFERENCES `ano` (`id`);

--
-- Limitadores para a tabela `minicurso`
--
ALTER TABLE `minicurso`
  ADD CONSTRAINT `minicurso_ano_id_foreign` FOREIGN KEY (`ano_id`) REFERENCES `ano` (`id`),
  ADD CONSTRAINT `minicurso_sala_id_foreign` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`);

--
-- Limitadores para a tabela `minicurso_horario`
--
ALTER TABLE `minicurso_horario`
  ADD CONSTRAINT `minicurso_horario_minicurso_id_foreign` FOREIGN KEY (`minicurso_id`) REFERENCES `minicurso` (`id`);

--
-- Limitadores para a tabela `minicurso_ministrante`
--
ALTER TABLE `minicurso_ministrante`
  ADD CONSTRAINT `minicurso_ministrante_minicurso_id_foreign` FOREIGN KEY (`minicurso_id`) REFERENCES `minicurso` (`id`);

--
-- Limitadores para a tabela `trabalho`
--
ALTER TABLE `trabalho`
  ADD CONSTRAINT `trabalho_ano_id_foreign` FOREIGN KEY (`ano_id`) REFERENCES `ano` (`id`);

--
-- Limitadores para a tabela `trabalho_autor`
--
ALTER TABLE `trabalho_autor`
  ADD CONSTRAINT `trabalho_autor_trabalho_id_foreign` FOREIGN KEY (`trabalho_id`) REFERENCES `trabalho` (`id`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ano_selecionado_foreign` FOREIGN KEY (`ano_selecionado`) REFERENCES `ano` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
