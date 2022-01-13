-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2018 at 10:51 AM
-- Server version: 5.6.33-79.0-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saiprop_sb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `status`, `date`) VALUES
(1, 'admin', 'saibroking333@gmail.com', '32243224', 'active', '2016-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `advertisment`
--

CREATE TABLE `advertisment` (
  `aid` int(11) NOT NULL,
  `adveristment_name` varchar(500) NOT NULL,
  `top_advertisement` varchar(500) DEFAULT NULL,
  `advertisment_image` varchar(600) NOT NULL,
  `mid` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisment`
--

INSERT INTO `advertisment` (`aid`, `adveristment_name`, `top_advertisement`, `advertisment_image`, `mid`, `status`, `date`) VALUES
(169, 'real estate', 'Top Position Page', 'sai1234-8179.jpg', 1, 'active', '2016-12-31 14:57:29'),
(174, 'real estate', 'Top Position Page', 'Real Eastet 285-199-7934.jpg', 1, 'active', '2016-12-31 15:01:20'),
(175, 'real estate', 'Top Position Page', '134-1551.jpg', 1, 'active', '2016-12-31 15:01:32'),
(181, 'real estate', 'Top Position Page', '285-199-1657.jpg', 1, 'active', '2016-12-31 15:02:05'),
(185, 'real estate', 'Top Position Page', '75821-2918.jpg', 1, 'active', '2016-12-31 15:07:00'),
(186, 'real estate', 'Top Position Page', '285-199-----2741.jpg', 1, 'active', '2016-12-31 15:13:34'),
(187, 'real estate', 'Bottom Position Page', 'sai1234 ---382=380-5988.jpg', 1, 'active', '2016-12-31 15:15:12'),
(188, 'real estate', 'Bottom Position Page', 'Real Eastet 382=380=-=-=--8863.jpg', 1, 'active', '2016-12-31 15:19:53'),
(189, 'real estate', 'Bottom Position Page', '134-4324.jpg', 1, 'active', '2016-12-31 15:20:47'),
(190, 'real estate', 'Bottom Position Page', '285-199-----4167.jpg', 1, 'active', '2016-12-31 15:21:10'),
(191, 'real estate', 'Bottom Position Page', '388-380-=-9299.jpg', 1, 'active', '2016-12-31 15:21:30'),
(192, 'real estate', 'Bottom Position Page', '285-199-8266.jpg', 1, 'active', '2016-12-31 15:21:59'),
(193, 'real estate', 'Internal Page (Map Side)', 'sai1234 ---382=380-3548.jpg', 1, 'active', '2016-12-31 15:25:00'),
(194, 'real estate', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--4488.jpg', 1, 'active', '2016-12-31 15:25:44'),
(195, 'real estate', 'Internal Page (Map Side)', '382-380=-6257.jpg', 1, 'active', '2016-12-31 15:26:28'),
(196, 'real estate', 'Internal Page (Map Side)', '388-380-=-8648.jpg', 1, 'active', '2016-12-31 15:26:57'),
(198, 'real estate', 'Internal Page (Map Side)', '382-380p-2624.jpg', 1, 'active', '2016-12-31 15:30:36'),
(199, 'real estate', 'Internal Page (Map Side)', '382-380ll-7082.jpg', 1, 'active', '2016-12-31 15:31:38'),
(200, 'home ', 'Top Position Page', 'sai1234-5266.jpg', 1, 'active', '2016-12-31 15:33:33'),
(201, 'home ', 'Top Position Page', 'Real Eastet 285-199-3241.jpg', 3, 'active', '2016-12-31 15:33:56'),
(202, 'home ', 'Top Position Page', '134-193.jpg', 3, 'active', '2016-12-31 15:34:18'),
(203, 'home ', 'Top Position Page', '285-199 --5963.jpg', 3, 'active', '2016-12-31 15:34:41'),
(204, 'home ', 'Top Position Page', '285-199-----403.jpg', 3, 'active', '2016-12-31 15:35:08'),
(205, 'home ', 'Top Position Page', '285-199-6307.jpg', 3, 'active', '2016-12-31 15:35:33'),
(206, 'home ', 'Top Position Page', 'sai1234-9823.jpg', 3, 'active', '2016-12-31 15:37:40'),
(207, 'home ', 'Internal Page (Map Side)', 'sai1234 ---382=380-892.jpg', 3, 'active', '2016-12-31 15:38:49'),
(208, 'home ', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--3821.jpg', 3, 'active', '2016-12-31 15:39:29'),
(209, 'home ', 'Internal Page (Map Side)', '134-2652.jpg', 3, 'active', '2016-12-31 15:39:51'),
(210, 'home ', 'Internal Page (Map Side)', '285-199 --8128.jpg', 3, 'active', '2016-12-31 15:40:09'),
(212, 'home ', 'Internal Page (Map Side)', '382-380p-3155.jpg', 3, 'active', '2016-12-31 15:42:17'),
(213, 'home ', 'Internal Page (Map Side)', '382-380ll-2939.jpg', 3, 'active', '2016-12-31 15:42:41'),
(214, 'home ', 'Bottom Position Page', 'sai1234-7030.jpg', 3, 'active', '2016-12-31 15:43:48'),
(215, 'home ', 'Bottom Position Page', 'Real Eastet 285-199-3673.jpg', 3, 'active', '2016-12-31 15:48:35'),
(216, 'home ', 'Bottom Position Page', '134-3166.jpg', 3, 'active', '2016-12-31 15:48:58'),
(217, 'home ', 'Bottom Position Page', '285-199 --973.jpg', 3, 'active', '2016-12-31 15:49:25'),
(218, 'home ', 'Bottom Position Page', '285-199-----3579.jpg', 3, 'active', '2016-12-31 15:49:57'),
(219, 'home ', 'Bottom Position Page', '382-380-3027.jpg', 3, 'active', '2016-12-31 15:50:54'),
(220, 'repairing ', 'Top Position Page', '285-199 u-4309.jpg', 4, 'active', '2016-12-31 17:29:58'),
(221, 'repairing ', 'Top Position Page', 'Real Eastet 285-199-9815.jpg', 4, 'active', '2016-12-31 17:30:28'),
(222, 'repairing ', 'Top Position Page', '285-199 o-8975.jpg', 4, 'active', '2016-12-31 17:30:49'),
(223, 'repairing ', 'Top Position Page', '285-199 --6234.jpg', 4, 'active', '2016-12-31 17:31:41'),
(224, 'repairing ', 'Top Position Page', '285-199-----7825.jpg', 4, 'active', '2016-12-31 17:32:10'),
(225, 'repairing ', 'Top Position Page', '285-199 t-7318.jpg', 4, 'active', '2016-12-31 17:32:39'),
(226, 'repairing ', 'Internal Page (Map Side)', 'sai1234 ---382=380-6741.jpg', 4, 'active', '2016-12-31 17:35:16'),
(227, 'repairing ', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--5413.jpg', 4, 'active', '2016-12-31 17:36:06'),
(228, 'repairing ', 'Internal Page (Map Side)', '382-380 kk-236.jpg', 4, 'active', '2016-12-31 17:36:29'),
(229, 'repairing ', 'Internal Page (Map Side)', '382-380--4480.jpg', 4, 'active', '2016-12-31 17:37:01'),
(230, 'repairing ', 'Internal Page (Map Side)', '382-380ll-4745.jpg', 4, 'active', '2016-12-31 17:37:30'),
(231, 'repairing ', 'Internal Page (Map Side)', '382-380-131.jpg', 4, 'active', '2016-12-31 17:38:05'),
(232, 'repairing ', 'Bottom Position Page', '285-199 u-9624.jpg', 4, 'active', '2016-12-31 17:39:57'),
(233, 'repairing ', 'Bottom Position Page', 'Real Eastet 285-199-18.jpg', 4, 'active', '2016-12-31 17:40:23'),
(234, 'repairing ', 'Bottom Position Page', '285-199 o-4087.jpg', 4, 'active', '2016-12-31 17:40:54'),
(235, 'repairing ', 'Bottom Position Page', '285-199 --9620.jpg', 4, 'active', '2016-12-31 17:41:17'),
(236, 'repairing ', 'Bottom Position Page', '285-199-----4406.jpg', 4, 'active', '2016-12-31 17:41:37'),
(237, 'repairing ', 'Bottom Position Page', '285-199 t-1046.jpg', 4, 'active', '2016-12-31 17:41:59'),
(238, 'all classes', 'Top Position Page', '285-199 u-4082.jpg', 5, 'active', '2016-12-31 17:44:26'),
(239, 'all classes', 'Top Position Page', 'Real Eastet 285-199-9994.jpg', 5, 'active', '2016-12-31 17:44:46'),
(240, 'all classes', 'Top Position Page', '285-199 o-7290.jpg', 5, 'active', '2016-12-31 17:45:12'),
(241, 'all classes', 'Top Position Page', '285-199 --1425.jpg', 5, 'active', '2016-12-31 17:45:40'),
(242, 'all classes', 'Top Position Page', '285-199-----9990.jpg', 5, 'active', '2016-12-31 17:46:01'),
(243, 'all classes', 'Top Position Page', '285-199 t-2594.jpg', 5, 'active', '2016-12-31 17:46:23'),
(244, 'all classes', 'Bottom Position Page', '285-199 u-4432.jpg', 5, 'active', '2016-12-31 17:47:33'),
(245, 'all classes', 'Bottom Position Page', 'Real Eastet 285-199-7305.jpg', 5, 'active', '2016-12-31 17:47:52'),
(246, 'all classes', 'Bottom Position Page', '285-199 o-9416.jpg', 5, 'active', '2016-12-31 17:48:11'),
(247, 'all classes', 'Bottom Position Page', '285-199 --8921.jpg', 5, 'active', '2016-12-31 17:48:27'),
(248, 'all classes', 'Bottom Position Page', '285-199-----4748.jpg', 5, 'active', '2016-12-31 17:48:44'),
(249, 'all classes', 'Bottom Position Page', '285-199 t-4866.jpg', 5, 'active', '2016-12-31 17:49:05'),
(250, 'all classes', 'Internal Page (Map Side)', 'sai1234 ---382=380-9664.jpg', 5, 'active', '2016-12-31 17:51:10'),
(251, 'all classes', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--1103.jpg', 5, 'active', '2016-12-31 17:51:34'),
(252, 'all classes', 'Internal Page (Map Side)', '382-380ll-5148.jpg', 5, 'active', '2016-12-31 17:51:55'),
(253, 'all classes', 'Internal Page (Map Side)', '382-380--9347.jpg', 5, 'active', '2016-12-31 17:52:14'),
(254, 'all classes', 'Internal Page (Map Side)', '382-380-8576.jpg', 5, 'active', '2016-12-31 17:52:39'),
(255, 'all classes', 'Internal Page (Map Side)', '382-380 kk-1702.jpg', 5, 'active', '2016-12-31 17:53:01'),
(256, 'car for sale rent ', 'Top Position Page', 'Real Eastet 285-199-9458.jpg', 6, 'active', '2016-12-31 18:51:27'),
(257, 'car for sale rent ', 'Top Position Page', '285-199-----7785.jpg', 6, 'active', '2016-12-31 18:51:46'),
(258, 'car for sale rent ', 'Top Position Page', '285-199 u-8087.jpg', 6, 'active', '2016-12-31 18:52:13'),
(260, 'car for sale rent ', 'Top Position Page', '285-199 t-6027.jpg', 6, 'active', '2016-12-31 18:52:52'),
(262, 'car for sale rent ', 'Top Position Page', '285-199 o-7963.jpg', 6, 'active', '2016-12-31 18:53:34'),
(263, 'car for sale rent ', 'Top Position Page', '285-199 --2773.jpg', 6, 'active', '2016-12-31 18:53:59'),
(264, 'car for sale rent ', 'Bottom Position Page', '285-199 --5060.jpg', 6, 'active', '2016-12-31 18:57:48'),
(265, 'car for sale rent ', 'Bottom Position Page', '285-199 o-1122.jpg', 6, 'active', '2016-12-31 18:58:10'),
(266, 'car for sale rent ', 'Bottom Position Page', '285-199 t-472.jpg', 6, 'active', '2016-12-31 18:58:31'),
(267, 'car for sale rent ', 'Bottom Position Page', '285-199 u-99.jpg', 6, 'active', '2016-12-31 18:58:53'),
(268, 'car for sale rent ', 'Bottom Position Page', '285-199-----6253.jpg', 6, 'active', '2016-12-31 18:59:16'),
(269, 'car for sale rent ', 'Bottom Position Page', 'Real Eastet 285-199-3721.jpg', 6, 'active', '2016-12-31 18:59:33'),
(270, 'car for sale rent ', 'Internal Page (Map Side)', 'sai1234 ---382=380-7598.jpg', 6, 'active', '2016-12-31 19:03:44'),
(271, 'car for sale rent ', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--5784.jpg', 6, 'active', '2016-12-31 19:04:09'),
(272, 'car for sale rent ', 'Internal Page (Map Side)', '382-380ll-1651.jpg', 6, 'active', '2016-12-31 19:04:32'),
(273, 'car for sale rent ', 'Internal Page (Map Side)', '382-380--6688.jpg', 6, 'active', '2016-12-31 19:04:54'),
(275, 'car for sale rent ', 'Internal Page (Map Side)', '382-380-5072.jpg', 6, 'active', '2016-12-31 19:05:40'),
(276, 'car for sale rent ', 'Internal Page (Map Side)', '382-380 kk-9541.jpg', 6, 'active', '2016-12-31 19:06:01'),
(277, 'bike for sale ', 'Top Position Page', 'Real Eastet 285-199-2693.jpg', 7, 'active', '2016-12-31 19:09:42'),
(278, 'bike for sale ', 'Top Position Page', '285-199-----1156.jpg', 7, 'active', '2016-12-31 19:10:01'),
(279, 'bike for sale ', 'Top Position Page', '285-199 u-4464.jpg', 7, 'active', '2016-12-31 19:10:23'),
(280, 'bike for sale ', 'Top Position Page', '285-199 t-7665.jpg', 7, 'active', '2016-12-31 19:10:39'),
(281, 'bike for sale ', 'Top Position Page', '285-199 o-5090.jpg', 7, 'active', '2016-12-31 19:11:06'),
(282, 'bike for sale ', 'Top Position Page', '285-199 --205.jpg', 7, 'active', '2016-12-31 19:11:35'),
(283, 'bike for sale ', 'Bottom Position Page', 'Real Eastet 285-199-5773.jpg', 7, 'active', '2016-12-31 19:12:23'),
(284, 'bike for sale ', 'Bottom Position Page', '285-199-----3310.jpg', 7, 'active', '2016-12-31 19:12:41'),
(285, 'bike for sale ', 'Bottom Position Page', '285-199 u-863.jpg', 7, 'active', '2016-12-31 19:13:07'),
(286, 'bike for sale ', 'Bottom Position Page', '285-199 t-8240.jpg', 7, 'active', '2016-12-31 19:13:26'),
(287, 'bike for sale ', 'Bottom Position Page', '285-199 o-2605.jpg', 7, 'active', '2016-12-31 19:13:46'),
(289, 'bike for sale ', 'Internal Page (Map Side)', 'sai1234 ---382=380-7959.jpg', 7, 'active', '2016-12-31 19:14:56'),
(290, 'bike for sale ', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--2060.jpg', 7, 'active', '2016-12-31 19:15:18'),
(291, 'bike for sale ', 'Internal Page (Map Side)', '382-380ll-5888.jpg', 7, 'active', '2016-12-31 19:15:35'),
(292, 'bike for sale ', 'Internal Page (Map Side)', '382-380--2339.jpg', 7, 'active', '2016-12-31 19:15:52'),
(293, 'bike for sale ', 'Internal Page (Map Side)', '382-380-9110.jpg', 7, 'active', '2016-12-31 19:16:23'),
(294, 'bike for sale ', 'Internal Page (Map Side)', '382-380 kk-9046.jpg', 7, 'active', '2016-12-31 19:17:24'),
(295, 'old electronice', 'Top Position Page', '285-199 --9842.jpg', 8, 'active', '2016-12-31 19:21:13'),
(296, 'old electronice', 'Top Position Page', '285-199 o-5354.jpg', 8, 'active', '2016-12-31 19:21:44'),
(298, 'old electronice', 'Top Position Page', '285-199 t-2069.jpg', 8, 'active', '2016-12-31 19:22:24'),
(299, 'old electronice', 'Top Position Page', '285-199 u-2304.jpg', 8, 'active', '2016-12-31 19:22:47'),
(300, 'old electronice', 'Top Position Page', '285-199-----7138.jpg', 8, 'active', '2016-12-31 19:23:04'),
(301, 'old electronice', 'Top Position Page', 'Real Eastet 285-199-9240.jpg', 8, 'active', '2016-12-31 19:23:22'),
(302, 'old electronice', 'Bottom Position Page', 'Real Eastet 285-199-7871.jpg', 8, 'active', '2016-12-31 19:24:38'),
(303, 'old electronice', 'Bottom Position Page', '285-199-----8500.jpg', 8, 'active', '2016-12-31 19:25:00'),
(304, 'old electronice', 'Bottom Position Page', '285-199 u-2257.jpg', 8, 'active', '2016-12-31 19:25:18'),
(305, 'old electronice', 'Bottom Position Page', '285-199 t-7514.jpg', 8, 'active', '2016-12-31 19:25:35'),
(306, 'old electronice', 'Bottom Position Page', '285-199 o-898.jpg', 8, 'active', '2016-12-31 19:25:56'),
(307, 'old electronice', 'Bottom Position Page', '285-199 --8970.jpg', 8, 'active', '2016-12-31 19:26:14'),
(308, 'old electronice', 'Internal Page (Map Side)', 'sai1234 ---382=380-317.jpg', 8, 'active', '2016-12-31 19:27:04'),
(309, 'old electronice', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--3384.jpg', 8, 'active', '2016-12-31 19:27:22'),
(310, 'old electronice', 'Internal Page (Map Side)', '382-380ll-5726.jpg', 8, 'active', '2016-12-31 19:28:46'),
(311, 'old electronice', 'Internal Page (Map Side)', '382-380--7586.jpg', 8, 'active', '2016-12-31 19:29:07'),
(312, 'old electronice', 'Internal Page (Map Side)', '382-380-1801.jpg', 8, 'active', '2016-12-31 19:29:34'),
(313, 'old electronice', 'Internal Page (Map Side)', '382-380 kk-8728.jpg', 8, 'active', '2016-12-31 19:29:56'),
(314, 'old furniture for sale ', 'Top Position Page', 'Real Eastet 285-199-1777.jpg', 9, 'active', '2016-12-31 19:31:20'),
(315, 'old furniture for sale ', 'Top Position Page', '285-199-----7127.jpg', 9, 'active', '2016-12-31 19:31:36'),
(317, 'old furniture for sale ', 'Top Position Page', '285-199 u-3276.jpg', 9, 'active', '2016-12-31 19:32:27'),
(318, 'old furniture for sale ', 'Top Position Page', '285-199 t-782.jpg', 8, 'active', '2016-12-31 19:32:46'),
(319, 'old furniture for sale ', 'Top Position Page', '285-199 o-2063.jpg', 9, 'active', '2016-12-31 19:33:03'),
(320, 'old furniture for sale ', 'Top Position Page', '285-199 --1893.jpg', 9, 'active', '2016-12-31 19:33:44'),
(321, 'old furniture for sale ', 'Bottom Position Page', 'Real Eastet 285-199-7049.jpg', 9, 'active', '2016-12-31 19:34:39'),
(322, 'old furniture for sale ', 'Bottom Position Page', '285-199-----5270.jpg', 9, 'active', '2016-12-31 19:34:59'),
(323, 'old furniture for sale ', 'Bottom Position Page', '285-199 u-3717.jpg', 9, 'active', '2016-12-31 19:35:19'),
(324, 'old furniture for sale ', 'Bottom Position Page', '285-199 t-9681.jpg', 9, 'active', '2016-12-31 19:35:37'),
(325, 'old furniture for sale ', 'Bottom Position Page', '285-199 o-564.jpg', 9, 'active', '2016-12-31 19:36:02'),
(326, 'old furniture for sale ', 'Bottom Position Page', '285-199 --1416.jpg', 9, 'active', '2016-12-31 19:36:18'),
(327, 'old furniture for sale ', 'Internal Page (Map Side)', 'sai1234 ---382=380-9395.jpg', 9, 'active', '2016-12-31 19:37:07'),
(328, 'old furniture for sale ', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--9396.jpg', 9, 'active', '2016-12-31 19:37:22'),
(329, 'old furniture for sale ', 'Internal Page (Map Side)', '382-380ll-7597.jpg', 9, 'active', '2016-12-31 19:37:46'),
(330, 'old furniture for sale ', 'Internal Page (Map Side)', '382-380--7491.jpg', 9, 'active', '2016-12-31 19:38:04'),
(331, 'old furniture for sale ', 'Internal Page (Map Side)', '382-380-9578.jpg', 9, 'active', '2016-12-31 19:38:26'),
(332, 'old furniture for sale ', 'Internal Page (Map Side)', '382-380 kk-5705.jpg', 9, 'active', '2016-12-31 19:38:46'),
(333, 'tempo & lading rikshaw for rent sale ', 'Top Position Page', 'Real Eastet 285-199-9189.jpg', 10, 'active', '2016-12-31 19:41:01'),
(335, 'tempo & lading rikshaw for rent sale ', 'Top Position Page', '285-199-----825.jpg', 10, 'active', '2016-12-31 19:41:36'),
(336, 'tempo & lading rikshaw for rent sale ', 'Top Position Page', '285-199 u-7392.jpg', 10, 'active', '2016-12-31 19:41:56'),
(338, 'tempo & lading rikshaw for rent sale ', 'Top Position Page', '285-199 t-2153.jpg', 10, 'active', '2016-12-31 19:42:39'),
(339, 'tempo & lading rikshaw for rent sale ', 'Top Position Page', '285-199 o-4382.jpg', 10, 'active', '2016-12-31 19:43:01'),
(340, 'tempo & lading rikshaw for rent sale ', 'Top Position Page', '285-199 --877.jpg', 10, 'active', '2016-12-31 19:43:20'),
(341, 'tempo & lading rikshaw for rent sale ', 'Bottom Position Page', 'Real Eastet 285-199-6691.jpg', 10, 'active', '2016-12-31 19:44:26'),
(342, 'tempo & lading rikshaw for rent sale ', 'Bottom Position Page', '285-199-----9609.jpg', 10, 'active', '2016-12-31 19:44:47'),
(343, 'tempo & lading rikshaw for rent sale ', 'Bottom Position Page', '285-199 u-1099.jpg', 10, 'active', '2016-12-31 19:45:05'),
(344, 'tempo & lading rikshaw for rent sale ', 'Bottom Position Page', '285-199 t-9104.jpg', 10, 'active', '2016-12-31 19:45:27'),
(345, 'tempo & lading rikshaw for rent sale ', 'Bottom Position Page', '285-199 o-4507.jpg', 10, 'active', '2016-12-31 19:45:48'),
(346, 'tempo & lading rikshaw for rent sale ', 'Bottom Position Page', '285-199 --536.jpg', 10, 'active', '2016-12-31 19:46:03'),
(347, 'tempo & lading rikshaw for rent sale ', 'Internal Page (Map Side)', 'sai1234 ---382=380-7872.jpg', 10, 'active', '2016-12-31 19:47:07'),
(348, 'tempo & lading rikshaw for rent sale ', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--7035.jpg', 10, 'active', '2016-12-31 19:47:25'),
(349, 'tempo & lading rikshaw for rent sale ', 'Internal Page (Map Side)', '382-380ll-3428.jpg', 10, 'active', '2016-12-31 19:47:42'),
(350, 'tempo & lading rikshaw for rent sale ', 'Internal Page (Map Side)', '382-380--5017.jpg', 10, 'active', '2016-12-31 19:48:03'),
(351, 'tempo & lading rikshaw for rent sale ', 'Bottom Position Page', '382-380-8929.jpg', 10, 'active', '2016-12-31 19:48:27'),
(352, 'tempo & lading rikshaw for rent sale ', 'Internal Page (Map Side)', '382-380 kk-477.jpg', 10, 'active', '2016-12-31 19:48:49'),
(353, 'jobs', 'Top Position Page', '285-199 u-5737.jpg', 11, 'active', '2017-01-01 20:39:46'),
(354, 'jobs', 'Top Position Page', 'Real Eastet 285-199-5130.jpg', 11, 'active', '2017-01-01 20:40:04'),
(355, 'jobs', 'Top Position Page', '285-199 o-3075.jpg', 11, 'active', '2017-01-01 20:40:18'),
(356, 'jobs', 'Top Position Page', '285-199 --1540.jpg', 11, 'active', '2017-01-01 20:40:33'),
(357, 'jobs', 'Top Position Page', '285-199-----690.jpg', 11, 'active', '2017-01-01 20:40:53'),
(358, 'jobs', 'Top Position Page', '285-199 t-7267.jpg', 11, 'active', '2017-01-01 20:41:08'),
(359, 'jobs', 'Bottom Position Page', '285-199 --7221.jpg', 11, 'active', '2017-01-01 20:41:44'),
(360, 'jobs', 'Bottom Position Page', '285-199 o-7311.jpg', 11, 'active', '2017-01-01 20:41:58'),
(361, 'jobs', 'Bottom Position Page', '285-199 t-4639.jpg', 11, 'active', '2017-01-01 20:42:15'),
(362, 'jobs', 'Bottom Position Page', '285-199 u-9613.jpg', 11, 'active', '2017-01-01 20:42:34'),
(363, 'jobs', 'Bottom Position Page', '285-199-----1912.jpg', 11, 'active', '2017-01-01 20:42:50'),
(364, 'jobs', 'Bottom Position Page', 'Real Eastet 285-199-9549.jpg', 11, 'active', '2017-01-01 20:43:06'),
(365, 'jobs', 'Internal Page (Map Side)', '382-380 kk-7353.jpg', 11, 'active', '2017-01-01 20:43:46'),
(366, 'jobs', 'Internal Page (Map Side)', '382-380-2969.jpg', 11, 'active', '2017-01-01 20:44:07'),
(367, 'jobs', 'Internal Page (Map Side)', '382-380--8864.jpg', 11, 'active', '2017-01-01 20:44:25'),
(368, 'jobs', 'Internal Page (Map Side)', '382-380ll-9725.jpg', 11, 'active', '2017-01-01 20:44:39'),
(369, 'jobs', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--6406.jpg', 11, 'active', '2017-01-01 20:44:54'),
(370, 'jobs', 'Internal Page (Map Side)', 'sai1234 ---382=380-7367.jpg', 11, 'active', '2017-01-01 20:45:11'),
(371, 'wedding halls', 'Top Position Page', '285-199 --1239.jpg', 12, 'active', '2017-01-01 20:46:17'),
(372, 'wedding halls', 'Top Position Page', '285-199 o-2514.jpg', 12, 'active', '2017-01-01 20:46:31'),
(374, 'wedding halls', 'Top Position Page', '285-199 t-160.jpg', 12, 'active', '2017-01-01 20:46:58'),
(375, 'wedding halls', 'Top Position Page', '285-199 u-701.jpg', 12, 'active', '2017-01-01 20:47:17'),
(376, 'wedding halls', 'Top Position Page', '285-199-----1584.jpg', 12, 'active', '2017-01-01 20:47:30'),
(377, 'wedding halls', 'Top Position Page', 'Real Eastet 285-199-4502.jpg', 12, 'active', '2017-01-01 20:47:46'),
(378, 'wedding halls', 'Bottom Position Page', '285-199 --5752.jpg', 12, 'active', '2017-01-01 20:48:32'),
(379, 'wedding halls', 'Bottom Position Page', '285-199 o-9125.jpg', 12, 'active', '2017-01-01 20:48:50'),
(380, 'wedding halls', 'Bottom Position Page', '285-199 t-9549.jpg', 12, 'active', '2017-01-01 20:49:03'),
(381, 'wedding halls', 'Bottom Position Page', '285-199 u-9593.jpg', 12, 'active', '2017-01-01 20:49:17'),
(382, 'wedding halls', 'Bottom Position Page', '285-199-----7306.jpg', 12, 'active', '2017-01-01 20:49:31'),
(383, 'wedding halls', 'Bottom Position Page', 'Real Eastet 285-199-455.jpg', 12, 'active', '2017-01-01 20:49:44'),
(384, 'wedding halls', 'Internal Page (Map Side)', '382-380 kk-5329.jpg', 12, 'active', '2017-01-01 20:50:19'),
(385, 'wedding halls', 'Internal Page (Map Side)', '382-380-2436.jpg', 12, 'active', '2017-01-01 20:50:32'),
(386, 'wedding halls', 'Internal Page (Map Side)', '382-380--3530.jpg', 12, 'active', '2017-01-01 20:50:46'),
(387, 'wedding halls', 'Internal Page (Map Side)', '382-380ll-6870.jpg', 12, 'active', '2017-01-01 20:51:02'),
(388, 'wedding halls', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--3126.jpg', 12, 'active', '2017-01-01 20:51:18'),
(389, 'wedding halls', 'Internal Page (Map Side)', 'sai1234 ---382=380-796.jpg', 12, 'active', '2017-01-01 20:51:33'),
(390, 'wedding  services ', 'Top Position Page', '285-199 --7915.jpg', 13, 'active', '2017-01-02 18:08:46'),
(391, 'wedding  services ', 'Top Position Page', '285-199 o-1870.jpg', 13, 'active', '2017-01-02 18:09:15'),
(393, 'wedding  services ', 'Top Position Page', '285-199 t-4583.jpg', 13, 'active', '2017-01-02 18:09:50'),
(394, 'wedding  services ', 'Top Position Page', '285-199 u-6926.jpg', 13, 'active', '2017-01-02 18:10:08'),
(395, 'wedding  services ', 'Top Position Page', '285-199-----8657.jpg', 12, 'active', '2017-01-02 18:10:27'),
(396, 'wedding  services ', 'Top Position Page', 'Real Eastet 285-199-4849.jpg', 12, 'active', '2017-01-02 18:10:43'),
(397, 'wedding  services ', 'Bottom Position Page', 'Real Eastet 285-199-5523.jpg', 13, 'active', '2017-01-02 18:11:22'),
(398, 'wedding  services ', 'Bottom Position Page', '285-199-----8866.jpg', 13, 'active', '2017-01-02 18:11:37'),
(399, 'wedding  services ', 'Bottom Position Page', '285-199 u-5982.jpg', 13, 'active', '2017-01-02 18:11:56'),
(400, 'wedding  services ', 'Bottom Position Page', '285-199 t-8365.jpg', 13, 'active', '2017-01-02 18:12:11'),
(401, 'wedding  services ', 'Bottom Position Page', '285-199 o-9359.jpg', 13, 'active', '2017-01-02 18:12:33'),
(402, 'wedding  services ', 'Bottom Position Page', '285-199 --1578.jpg', 13, 'active', '2017-01-02 18:12:48'),
(403, 'wedding  services ', 'Internal Page (Map Side)', '382-380 kk-6409.jpg', 13, 'active', '2017-01-02 18:13:40'),
(404, 'wedding  services ', 'Internal Page (Map Side)', '382-380-7185.jpg', 13, 'active', '2017-01-02 18:13:57'),
(405, 'wedding  services ', 'Internal Page (Map Side)', '382-380--6304.jpg', 13, 'active', '2017-01-02 18:14:16'),
(407, 'wedding  services ', 'Internal Page (Map Side)', '382-380ll-9915.jpg', 13, 'active', '2017-01-02 18:14:53'),
(408, 'wedding  services ', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--73.jpg', 13, 'active', '2017-01-02 18:15:08'),
(409, 'wedding  services ', 'Internal Page (Map Side)', 'sai1234 ---382=380-5582.jpg', 13, 'active', '2017-01-02 18:15:28'),
(410, 'hotel  lodging ', 'Top Position Page', '285-199 --7581.jpg', 14, 'active', '2017-01-02 18:16:21'),
(411, 'hotel  lodging ', 'Top Position Page', '285-199 o-8964.jpg', 14, 'active', '2017-01-02 18:16:35'),
(412, 'hotel  lodging ', 'Top Position Page', '285-199 t-9461.jpg', 14, 'active', '2017-01-02 18:16:48'),
(413, 'hotel  lodging ', 'Top Position Page', '285-199 u-2558.jpg', 14, 'active', '2017-01-02 18:17:02'),
(414, 'hotel  lodging ', 'Top Position Page', '285-199-----6496.jpg', 14, 'active', '2017-01-02 18:17:19'),
(415, 'hotel  lodging ', 'Top Position Page', 'Real Eastet 285-199-2285.jpg', 14, 'active', '2017-01-02 18:17:32'),
(416, 'hotel  lodging ', 'Bottom Position Page', 'Real Eastet 285-199-9624.jpg', 14, 'active', '2017-01-02 18:17:59'),
(418, 'hotel  lodging ', 'Bottom Position Page', '285-199-----8207.jpg', 14, 'active', '2017-01-02 18:18:26'),
(419, 'hotel  lodging ', 'Bottom Position Page', '285-199 u-7118.jpg', 14, 'active', '2017-01-02 18:18:45'),
(420, 'hotel  lodging ', 'Bottom Position Page', '285-199 t-8286.jpg', 14, 'active', '2017-01-02 18:19:02'),
(421, 'hotel  lodging ', 'Bottom Position Page', '285-199 o-6121.jpg', 14, 'active', '2017-01-02 18:19:18'),
(422, 'hotel  lodging ', 'Bottom Position Page', '285-199 --8988.jpg', 14, 'active', '2017-01-02 18:19:34'),
(423, 'hotel  lodging ', 'Internal Page (Map Side)', 'sai1234 ---382=380-3938.jpg', 14, 'active', '2017-01-02 18:20:40'),
(424, 'hotel  lodging ', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--704.jpg', 14, 'active', '2017-01-02 18:20:54'),
(426, 'hotel  lodging ', 'Internal Page (Map Side)', '382-380ll-2594.jpg', 14, 'active', '2017-01-02 18:21:33'),
(427, 'hotel  lodging ', 'Internal Page (Map Side)', '382-380--5553.jpg', 14, 'active', '2017-01-02 18:21:50'),
(428, 'hotel  lodging ', 'Internal Page (Map Side)', '382-380-1436.jpg', 14, 'active', '2017-01-02 18:22:05'),
(429, 'hotel  lodging ', 'Internal Page (Map Side)', '382-380 kk-1460.jpg', 14, 'active', '2017-01-02 18:22:21'),
(430, 'mall & business', 'Top Position Page', '285-199 --1534.jpg', 16, 'active', '2017-01-02 18:23:11'),
(431, 'mall & business', 'Top Position Page', '285-199 o-9802.jpg', 16, 'active', '2017-01-02 18:23:31'),
(433, 'mall & business', 'Top Position Page', '285-199 t-3113.jpg', 16, 'active', '2017-01-02 18:24:09'),
(434, 'mall & business', 'Top Position Page', '285-199 u-6210.jpg', 16, 'active', '2017-01-02 18:24:25'),
(435, 'mall & business', 'Top Position Page', '285-199-----8004.jpg', 16, 'active', '2017-01-02 18:24:39'),
(436, 'mall & business', 'Top Position Page', 'Real Eastet 285-199-9417.jpg', 16, 'active', '2017-01-02 18:25:02'),
(437, 'mall & business', 'Bottom Position Page', '285-199 --5585.jpg', 16, 'active', '2017-01-02 18:26:37'),
(438, 'mall & business', 'Bottom Position Page', '285-199 o-7918.jpg', 16, 'active', '2017-01-02 18:26:57'),
(439, 'mall & business', 'Bottom Position Page', '285-199 t-9491.jpg', 16, 'active', '2017-01-02 18:27:13'),
(440, 'mall & business', 'Bottom Position Page', '285-199 u-1166.jpg', 16, 'active', '2017-01-02 18:27:31'),
(441, 'mall & business', 'Bottom Position Page', '285-199-----5499.jpg', 16, 'active', '2017-01-02 18:28:12'),
(442, 'mall & business', 'Bottom Position Page', 'Real Eastet 285-199-8455.jpg', 16, 'active', '2017-01-02 18:28:32'),
(443, 'mall & business', 'Internal Page (Map Side)', 'sai1234 ---382=380-8168.jpg', 16, 'active', '2017-01-02 18:41:26'),
(444, 'mall & business', 'Internal Page (Map Side)', 'Real Eastet 382=380=-=-=--3682.jpg', 16, 'active', '2017-01-02 18:41:41'),
(445, 'mall & business', 'Internal Page (Map Side)', '382-380ll-8396.jpg', 16, 'active', '2017-01-02 18:41:55'),
(447, 'mall & business', 'Internal Page (Map Side)', '382-380--3444.jpg', 16, 'active', '2017-01-02 18:42:29'),
(448, 'mall & business', 'Internal Page (Map Side)', '382-380-9158.jpg', 16, 'active', '2017-01-02 18:42:46'),
(449, 'mall & business', 'Internal Page (Map Side)', '382-380 kk-5984.jpg', 16, 'active', '2017-01-02 18:43:21'),
(450, 'real estate', 'Top Position Page', '456775-8012.jpg', 1, 'active', '2017-01-02 18:49:16'),
(451, 'real estate', 'Top Position Page', '382-380-----7980.jpg', 1, 'active', '2017-01-02 19:01:52'),
(453, 'real estate', 'Top Position Page', '285-199-3078.jpg', 1, 'active', '2017-01-02 19:02:52'),
(454, 'real estate', 'Bottom Position Page', '285-199 (2)-6031.jpg', 1, 'active', '2017-01-02 19:03:06'),
(455, 'real estate', 'Bottom Position Page', '285-199 --6159.jpg', 1, 'active', '2017-01-02 19:03:20'),
(457, 'real estate', 'Bottom Position Page', '285-199-7855.jpg', 1, 'active', '2017-01-02 19:04:16'),
(458, 'real estate', 'Internal Page (Map Side)', '382-380 ol-2216.jpg', 1, 'active', '2017-01-02 19:04:44'),
(459, 'real estate', 'Internal Page (Map Side)', '382-380-----5861.jpg', 1, 'active', '2017-01-02 19:05:02'),
(460, 'real estate', 'Internal Page (Map Side)', '382-385-1755.jpg', 1, 'active', '2017-01-02 19:05:25'),
(461, 'home ', 'Top Position Page', '285-199 (2)-3095.jpg', 3, 'active', '2017-01-02 19:10:29'),
(462, 'home ', 'Top Position Page', '285-199-9040.jpg', 3, 'active', '2017-01-02 19:10:42'),
(463, 'home ', 'Top Position Page', '285-199 --7801.jpg', 3, 'active', '2017-01-02 19:11:00'),
(464, 'home ', 'Bottom Position Page', '285-199 (2)-2448.jpg', 3, 'active', '2017-01-02 19:11:15'),
(465, 'home ', 'Bottom Position Page', '285-199-8686.jpg', 3, 'active', '2017-01-02 19:11:32'),
(467, 'home ', 'Bottom Position Page', '285-199 --9041.jpg', 3, 'active', '2017-01-02 19:12:51'),
(468, 'home ', 'Internal Page (Map Side)', '382-380-----3722.jpg', 3, 'active', '2017-01-02 19:13:11'),
(469, 'home ', 'Internal Page (Map Side)', '382-385-4038.jpg', 3, 'active', '2017-01-02 19:13:25'),
(470, 'home ', 'Internal Page (Map Side)', '382-380 ol-7360.jpg', 3, 'active', '2017-01-02 19:13:44'),
(472, 'repairing ', 'Internal Page (Map Side)', '382-380-----7739.jpg', 4, 'active', '2017-01-02 19:18:34'),
(473, 'repairing ', 'Internal Page (Map Side)', '382-385-3020.jpg', 4, 'active', '2017-01-02 19:18:47'),
(474, 'repairing ', 'Internal Page (Map Side)', '382-380 ol-1233.jpg', 4, 'active', '2017-01-02 19:19:30'),
(475, 'repairing ', 'Top Position Page', '285-199 (2)-3557.jpg', 4, 'active', '2017-01-02 19:19:59'),
(476, 'repairing ', 'Top Position Page', '285-199 --1683.jpg', 4, 'active', '2017-01-02 19:20:16'),
(477, 'repairing ', 'Top Position Page', '285-199-7744.jpg', 4, 'active', '2017-01-02 19:20:29'),
(478, 'repairing ', 'Bottom Position Page', '285-199 (2)-5167.jpg', 4, 'active', '2017-01-02 19:20:54'),
(479, 'repairing ', 'Bottom Position Page', '285-199 --3223.jpg', 4, 'active', '2017-01-02 19:21:09'),
(480, 'repairing ', 'Bottom Position Page', '285-199-7851.jpg', 4, 'active', '2017-01-02 19:21:40'),
(481, 'all classes', 'Top Position Page', '285-199 (2)-9078.jpg', 5, 'active', '2017-01-02 19:22:06'),
(482, 'all classes', 'Top Position Page', '285-199 --6714.jpg', 5, 'active', '2017-01-02 19:22:19'),
(483, 'all classes', 'Top Position Page', '285-199-4232.jpg', 5, 'active', '2017-01-02 19:22:37'),
(484, 'all classes', 'Bottom Position Page', '285-199 (2)-2226.jpg', 5, 'active', '2017-01-02 19:23:00'),
(485, 'all classes', 'Bottom Position Page', '285-199 --6113.jpg', 5, 'active', '2017-01-02 19:23:12'),
(486, 'all classes', 'Bottom Position Page', '285-199-5655.jpg', 5, 'active', '2017-01-02 19:23:28'),
(487, 'all classes', 'Internal Page (Map Side)', '382-380 ol-5816.jpg', 5, 'active', '2017-01-02 19:24:13'),
(488, 'all classes', 'Internal Page (Map Side)', '382-380-----8409.jpg', 5, 'active', '2017-01-02 19:24:29'),
(489, 'all classes', 'Internal Page (Map Side)', '382-385-2277.jpg', 5, 'active', '2017-01-02 19:24:45'),
(490, 'car for sale rent ', 'Internal Page (Map Side)', '382-380 ol-5346.jpg', 6, 'active', '2017-01-02 19:26:11'),
(491, 'car for sale rent ', 'Internal Page (Map Side)', '382-380-----7478.jpg', 6, 'active', '2017-01-02 19:26:28'),
(492, 'car for sale rent ', 'Internal Page (Map Side)', '382-385-5373.jpg', 6, 'active', '2017-01-02 19:26:43'),
(493, 'car for sale rent ', 'Top Position Page', '285-199 (2)-4386.jpg', 6, 'active', '2017-01-02 19:27:28'),
(494, 'car for sale rent ', 'Top Position Page', '285-199 --5278.jpg', 6, 'active', '2017-01-02 19:27:42'),
(495, 'car for sale rent ', 'Top Position Page', '285-199-7821.jpg', 6, 'active', '2017-01-02 19:27:57'),
(496, 'car for sale rent ', 'Bottom Position Page', '285-199 (2)-3071.jpg', 6, 'active', '2017-01-02 19:28:10'),
(497, 'car for sale rent ', 'Bottom Position Page', '285-199 --2441.jpg', 6, 'active', '2017-01-02 19:28:28'),
(498, 'car for sale rent ', 'Bottom Position Page', '285-199-6862.jpg', 6, 'active', '2017-01-02 19:28:41'),
(499, 'bike for sale ', 'Top Position Page', '285-199 (2)-6794.jpg', 7, 'active', '2017-01-02 19:29:31'),
(500, 'bike for sale ', 'Top Position Page', '285-199 --6479.jpg', 7, 'active', '2017-01-02 19:29:43'),
(501, 'bike for sale ', 'Top Position Page', '285-199-4221.jpg', 7, 'active', '2017-01-02 19:29:55'),
(502, 'bike for sale ', 'Bottom Position Page', '285-199 (2)-3625.jpg', 7, 'active', '2017-01-02 19:30:08'),
(503, 'bike for sale ', 'Bottom Position Page', '285-199 --119.jpg', 7, 'active', '2017-01-02 19:30:27'),
(504, 'bike for sale ', 'Bottom Position Page', '285-199-9942.jpg', 7, 'active', '2017-01-02 19:30:40'),
(505, 'bike for sale ', 'Internal Page (Map Side)', '382-380 ol-5744.jpg', 7, 'active', '2017-01-02 19:31:14'),
(506, 'bike for sale ', 'Internal Page (Map Side)', '382-380-----1410.jpg', 7, 'active', '2017-01-02 19:31:34'),
(507, 'bike for sale ', 'Internal Page (Map Side)', '382-385-8642.jpg', 7, 'active', '2017-01-02 19:31:49'),
(508, 'old electronice', 'Internal Page (Map Side)', '382-380 ol-147.jpg', 8, 'active', '2017-01-02 19:34:33'),
(509, 'old electronice', 'Internal Page (Map Side)', '382-380-----1797.jpg', 8, 'active', '2017-01-02 19:34:51'),
(510, 'old electronice', 'Internal Page (Map Side)', '382-385-8957.jpg', 8, 'active', '2017-01-02 19:35:09'),
(511, 'old electronice', 'Top Position Page', '285-199 (2)-7048.jpg', 8, 'active', '2017-01-02 19:35:35'),
(512, 'old electronice', 'Top Position Page', '285-199 --5993.jpg', 8, 'active', '2017-01-02 19:35:48'),
(513, 'old electronice', 'Top Position Page', '285-199-8958.jpg', 8, 'active', '2017-01-02 19:35:59'),
(514, 'old electronice', 'Bottom Position Page', '285-199 (2)-8773.jpg', 8, 'active', '2017-01-02 19:36:22'),
(515, 'old electronice', 'Bottom Position Page', '285-199 --8221.jpg', 8, 'active', '2017-01-02 19:36:36'),
(516, 'old electronice', 'Bottom Position Page', '285-199-5189.jpg', 8, 'active', '2017-01-02 19:36:49'),
(517, 'old furniture for sale ', 'Top Position Page', '285-199 (2)-3818.jpg', 9, 'active', '2017-01-02 19:37:26'),
(518, 'old furniture for sale ', 'Top Position Page', '285-199 --2293.jpg', 9, 'active', '2017-01-02 19:37:47'),
(519, 'old furniture for sale ', 'Top Position Page', '285-199-8290.jpg', 9, 'active', '2017-01-02 19:37:59'),
(520, 'old furniture for sale ', 'Bottom Position Page', '285-199 (2)-4816.jpg', 9, 'active', '2017-01-02 19:38:27'),
(521, 'old furniture for sale ', 'Bottom Position Page', '285-199 --4238.jpg', 9, 'active', '2017-01-02 19:38:45'),
(522, 'old furniture for sale ', 'Bottom Position Page', '285-199-905.jpg', 9, 'active', '2017-01-02 19:39:01'),
(523, 'old furniture for sale ', 'Internal Page (Map Side)', '382-380 ol-2254.jpg', 9, 'active', '2017-01-02 19:39:32'),
(524, 'old furniture for sale ', 'Internal Page (Map Side)', '382-380-----5952.jpg', 9, 'active', '2017-01-02 19:39:48'),
(525, 'old furniture for sale ', 'Internal Page (Map Side)', '382-385-9037.jpg', 9, 'active', '2017-01-02 19:40:03'),
(526, 'tempo & lading rikshaw for rent sale ', 'Internal Page (Map Side)', '382-380 ol-1937.jpg', 10, 'active', '2017-01-02 19:45:42'),
(527, 'tempo & lading rikshaw for rent sale ', 'Internal Page (Map Side)', '382-380-----2959.jpg', 10, 'active', '2017-01-02 19:46:02'),
(528, 'tempo & lading rikshaw for rent sale ', 'Internal Page (Map Side)', '382-385-3250.jpg', 10, 'active', '2017-01-02 19:46:16'),
(529, 'tempo & lading rikshaw for rent sale ', 'Top Position Page', '285-199 (2)-6369.jpg', 10, 'active', '2017-01-02 19:46:44'),
(530, 'tempo & lading rikshaw for rent sale ', 'Top Position Page', '285-199 --4520.jpg', 10, 'active', '2017-01-02 19:46:57'),
(531, 'tempo & lading rikshaw for rent sale ', 'Top Position Page', '285-199-7892.jpg', 10, 'active', '2017-01-02 19:47:14'),
(532, 'tempo & lading rikshaw for rent sale ', 'Bottom Position Page', '285-199 (2)-3591.jpg', 10, 'active', '2017-01-02 19:47:49'),
(533, 'tempo & lading rikshaw for rent sale ', 'Bottom Position Page', '285-199 --6818.jpg', 10, 'active', '2017-01-02 19:48:01'),
(534, 'tempo & lading rikshaw for rent sale ', 'Bottom Position Page', '285-199-7919.jpg', 10, 'active', '2017-01-02 19:48:18'),
(535, 'jobs', 'Top Position Page', '285-199 (2)-7599.jpg', 11, 'active', '2017-01-02 19:51:56'),
(536, 'jobs', 'Top Position Page', '285-199 --6808.jpg', 11, 'active', '2017-01-02 19:52:08'),
(537, 'jobs', 'Top Position Page', '285-199-7331.jpg', 11, 'active', '2017-01-02 19:52:20'),
(538, 'jobs', 'Bottom Position Page', '285-199 (2)-8934.jpg', 11, 'active', '2017-01-02 19:52:43'),
(539, 'jobs', 'Bottom Position Page', '285-199 --4850.jpg', 11, 'active', '2017-01-02 19:52:54'),
(540, 'jobs', 'Bottom Position Page', '285-199-912.jpg', 11, 'active', '2017-01-02 19:53:07'),
(541, 'jobs', 'Internal Page (Map Side)', '382-380 ol-9095.jpg', 11, 'active', '2017-01-02 19:53:24'),
(542, 'jobs', 'Internal Page (Map Side)', '382-380-----9197.jpg', 11, 'active', '2017-01-02 19:53:40'),
(543, 'jobs', 'Internal Page (Map Side)', '382-385-7482.jpg', 11, 'active', '2017-01-02 19:53:53'),
(544, 'wedding halls', 'Internal Page (Map Side)', '382-380 ol-1309.jpg', 12, 'active', '2017-01-02 19:54:34'),
(545, 'wedding halls', 'Internal Page (Map Side)', '382-380-----9444.jpg', 12, 'active', '2017-01-02 19:54:52'),
(546, 'wedding halls', 'Internal Page (Map Side)', '382-385-5694.jpg', 12, 'active', '2017-01-02 19:55:10'),
(547, 'wedding halls', 'Top Position Page', '285-199 (2)-6659.jpg', 12, 'active', '2017-01-02 19:55:40'),
(548, 'wedding halls', 'Top Position Page', '285-199 --1811.jpg', 12, 'active', '2017-01-02 19:55:53'),
(549, 'wedding halls', 'Top Position Page', '285-199-6230.jpg', 12, 'active', '2017-01-02 19:56:07'),
(550, 'wedding halls', 'Bottom Position Page', '285-199 (2)-4357.jpg', 12, 'active', '2017-01-02 19:56:32'),
(551, 'wedding halls', 'Bottom Position Page', '285-199 --7525.jpg', 12, 'active', '2017-01-02 19:56:49'),
(552, 'wedding halls', 'Bottom Position Page', '285-199-844.jpg', 12, 'active', '2017-01-02 19:57:03'),
(553, 'wedding  services ', 'Top Position Page', '285-199 (2)-8003.jpg', 13, 'active', '2017-01-02 19:57:35'),
(554, 'wedding  services ', 'Top Position Page', '285-199 --6629.jpg', 13, 'active', '2017-01-02 19:57:57'),
(555, 'wedding  services ', 'Top Position Page', '285-199-3721.jpg', 13, 'active', '2017-01-02 19:58:09'),
(556, 'wedding  services ', 'Bottom Position Page', '285-199 (2)-8261.jpg', 13, 'active', '2017-01-02 19:58:34'),
(557, 'wedding  services ', 'Bottom Position Page', '285-199 --7802.jpg', 13, 'active', '2017-01-02 19:58:46'),
(558, 'wedding  services ', 'Bottom Position Page', '285-199-2151.jpg', 13, 'active', '2017-01-02 19:58:59'),
(559, 'wedding  services ', 'Internal Page (Map Side)', '382-380 ol-9431.jpg', 13, 'active', '2017-01-02 19:59:29'),
(560, 'wedding  services ', 'Internal Page (Map Side)', '382-380-----1129.jpg', 13, 'active', '2017-01-02 19:59:45'),
(561, 'wedding  services ', 'Internal Page (Map Side)', '382-385-3040.jpg', 13, 'active', '2017-01-02 19:59:59'),
(563, 'hotel  lodging ', 'Internal Page (Map Side)', '382-380-----2731.jpg', 14, 'active', '2017-01-02 20:01:35'),
(564, 'hotel  lodging ', 'Internal Page (Map Side)', '382-385-8959.jpg', 14, 'active', '2017-01-02 20:01:49'),
(565, 'hotel  lodging ', 'Internal Page (Map Side)', '382-380 ol-8145.jpg', 14, 'active', '2017-01-02 20:02:33'),
(566, 'hotel  lodging ', 'Top Position Page', '285-199 (2)-9510.jpg', 14, 'active', '2017-01-02 20:03:15'),
(567, 'hotel  lodging ', 'Top Position Page', '285-199 --7970.jpg', 14, 'active', '2017-01-02 20:03:29'),
(568, 'hotel  lodging ', 'Top Position Page', '285-199-2599.jpg', 14, 'active', '2017-01-02 20:03:42'),
(569, 'hotel  lodging ', 'Bottom Position Page', '285-199 (2)-8350.jpg', 14, 'active', '2017-01-02 20:03:59'),
(570, 'hotel  lodging ', 'Bottom Position Page', '285-199 --2315.jpg', 14, 'active', '2017-01-02 20:04:12'),
(571, 'hotel  lodging ', 'Bottom Position Page', '285-199-5269.jpg', 14, 'active', '2017-01-02 20:04:30'),
(572, 'mall & business', 'Top Position Page', '285-199 (2)-3060.jpg', 16, 'active', '2017-01-02 20:04:59'),
(573, 'mall & business', 'Top Position Page', '285-199 --9217.jpg', 16, 'active', '2017-01-02 20:05:12'),
(574, 'mall & business', 'Top Position Page', '285-199-9119.jpg', 16, 'active', '2017-01-02 20:05:23'),
(575, 'mall & business', 'Bottom Position Page', '285-199 (2)-4667.jpg', 16, 'active', '2017-01-02 20:05:42'),
(576, 'mall & business', 'Bottom Position Page', '285-199 --7386.jpg', 16, 'active', '2017-01-02 20:05:57'),
(577, 'mall & business', 'Bottom Position Page', '285-199-4546.jpg', 16, 'active', '2017-01-02 20:06:08'),
(578, 'mall & business', 'Internal Page (Map Side)', '382-380 ol-9757.jpg', 16, 'active', '2017-01-02 20:07:01'),
(579, 'mall & business', 'Internal Page (Map Side)', '382-380-----5924.jpg', 16, 'active', '2017-01-02 20:07:17'),
(580, 'mall & business', 'Internal Page (Map Side)', '382-385-7868.jpg', 16, 'active', '2017-01-02 20:07:31'),
(581, 'real estate', 'Top Position Page', '285-199 a-1151.gif', 1, 'active', '2017-01-16 10:40:58'),
(582, 'real estate', 'Top Position Page', '285--199-8926.jpg', 1, 'active', '2017-01-16 10:41:14'),
(583, 'real estate', 'Top Position Page', '285-199---840.jpg', 1, 'active', '2017-01-16 10:41:31'),
(584, 'real estate', 'Bottom Position Page', '285-199 a-2314.gif', 1, 'active', '2017-01-16 10:41:52'),
(585, 'real estate', 'Bottom Position Page', '285--199-5089.jpg', 1, 'active', '2017-01-16 10:42:10'),
(586, 'real estate', 'Bottom Position Page', '285-199---1326.jpg', 1, 'active', '2017-01-16 10:42:29'),
(587, 'real estate', 'Internal Page (Map Side)', 'tttrrrr-2666.jpg', 1, 'active', '2017-01-16 10:47:49'),
(588, 'real estate', 'Internal Page (Map Side)', 'wqwwww-2741.jpg', 1, 'active', '2017-01-16 10:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `bike_master`
--

CREATE TABLE `bike_master` (
  `bid` int(11) NOT NULL,
  `bike_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bike_master`
--

INSERT INTO `bike_master` (`bid`, `bike_name`) VALUES
(1, 'Bajaj\r\n'),
(2, 'Honda\r\n'),
(3, 'Hero\r\n'),
(4, 'TVS\r\n'),
(5, 'Yamaha\r\n'),
(6, 'Suzuki\r\n'),
(7, 'Mahindra\r\n'),
(8, 'Kawasaki\r\n'),
(9, 'Royal Enfield\r\n\r\n'),
(10, 'KTM\r\n'),
(11, 'Moto Guzzi\r\n'),
(12, 'LML ( Piaggio)\r\n'),
(13, 'Triumph\r\n'),
(14, 'Yezdi\r\n'),
(15, 'Lambretta\r\n'),
(16, 'Aprilia\r\n'),
(17, 'YO Bikes\r\n'),
(18, 'Benelli\r\n'),
(19, 'BMW\r\n'),
(20, 'Ducati\r\n'),
(21, 'Harley Davidson\r\n'),
(22, ' Hyosung\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `builder_property`
--

CREATE TABLE `builder_property` (
  `bid` int(11) NOT NULL,
  `buillder_name` varchar(100) NOT NULL,
  `status` enum('active','active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `builder_property`
--

INSERT INTO `builder_property` (`bid`, `buillder_name`, `status`) VALUES
(1, 'Owner ', ''),
(2, 'Broker', ''),
(3, 'Builder', '');

-- --------------------------------------------------------

--
-- Table structure for table `car_master`
--

CREATE TABLE `car_master` (
  `cid` int(11) NOT NULL,
  `car_name` varchar(209) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_master`
--

INSERT INTO `car_master` (`cid`, `car_name`) VALUES
(1, 'Maruti Suzuki\r\n'),
(2, 'Hyundai\r\n'),
(3, 'Honda\r\n'),
(4, 'Toyota\r\n'),
(5, 'Tata\r\n'),
(6, 'Mahindra\r\n'),
(7, 'Volkswagen\r\n'),
(8, 'Maserati\r\n'),
(9, 'Daewoo\r\n'),
(10, 'ICML\r\n'),
(11, 'Mercedes Benz\r\n'),
(12, 'Volvo\r\n'),
(13, 'Mini\r\n'),
(14, 'Fiat\r\n'),
(15, 'Isuzu\r\n'),
(16, 'Mitsubishi\r\n'),
(17, 'Renault\r\n'),
(18, 'Porsche\r\n'),
(19, 'Ford\r\n'),
(20, 'Premier\r\n'),
(21, 'Nissan\r\n'),
(22, 'Aston Martin\r\n'),
(23, 'Ashok Leyland\r\n'),
(24, 'Hindustan Motors\r\n'),
(25, 'Force Motors\r\n'),
(26, 'Opel\r\n'),
(27, 'Ferrari\r\n'),
(28, 'Audi\r\n'),
(29, 'Bugatti\r\n'),
(30, 'San\r\n'),
(31, 'Rolls Royce\r\n'),
(32, 'Jaguar\r\n'),
(33, 'Caterham\r\n'),
(34, 'Ssangyong\r\n'),
(35, 'Skoda\r\n'),
(36, 'Lamborghini\r\n'),
(37, 'BMW\r\n'),
(38, 'Datsun\r\n'),
(39, 'Eicher Polaris\r\n'),
(40, 'Land Rover\r\n'),
(41, 'Chevrolet\r\n'),
(42, 'DC\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `child_category`
--

CREATE TABLE `child_category` (
  `ccid` int(11) NOT NULL,
  `scid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `child_category_name` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_category`
--

INSERT INTO `child_category` (`ccid`, `scid`, `mid`, `child_category_name`, `status`) VALUES
(1, 193, 8, 'Samsung', 'active'),
(2, 193, 8, 'Sony', 'active'),
(3, 198, 8, 'LG', 'active'),
(4, 198, 8, 'Samsung', 'active'),
(5, 198, 8, 'Voltas', 'active'),
(6, 204, 8, 'Samsung', 'active'),
(7, 204, 8, 'Symphony', 'active'),
(8, 204, 8, 'Kenstar', 'active'),
(9, 201, 8, 'Canon', 'active'),
(10, 201, 8, 'Sony', 'active'),
(11, 201, 8, 'Kodak', 'active'),
(12, 200, 8, 'Samsung', 'active'),
(13, 200, 8, 'LG', 'active'),
(14, 200, 8, 'Lenovo', 'active'),
(15, 200, 8, 'Dell', 'active'),
(16, 197, 8, 'Sony', 'active'),
(17, 197, 8, 'Panasonic', 'active'),
(18, 197, 8, 'Samsung', 'active'),
(19, 196, 8, 'Samsung', 'active'),
(20, 196, 8, 'Whirlpool', 'active'),
(21, 196, 8, 'Godrej', 'active'),
(22, 194, 8, 'Samsung', 'active'),
(23, 194, 8, 'Micromax', 'active'),
(24, 194, 8, 'Sony', 'active'),
(25, 195, 8, 'Sony', 'active'),
(26, 195, 8, 'LG', 'active'),
(27, 195, 8, 'Samsung', 'active'),
(28, 195, 8, 'Panasonic', 'active'),
(29, 199, 8, 'Samsung', 'active'),
(30, 199, 8, 'IFB', 'active'),
(31, 199, 8, 'LG', 'active'),
(32, 198, 8, 'Whirlpool', 'active'),
(33, 198, 8, 'Blue Star', 'active'),
(34, 198, 8, 'Others', 'active'),
(35, 204, 8, 'Usha', 'active'),
(36, 204, 8, 'Bajaj', 'active'),
(37, 204, 8, 'Others', 'active'),
(38, 201, 8, 'Samsung', 'active'),
(39, 201, 8, 'Panasonic', 'active'),
(40, 201, 8, 'Others', 'active'),
(41, 200, 8, 'HCL', 'active'),
(42, 200, 8, 'Others', 'active'),
(43, 197, 8, 'LG', 'active'),
(44, 197, 8, 'Philips', 'active'),
(45, 197, 8, 'Others', 'active'),
(46, 193, 8, ' Apple', 'active'),
(47, 193, 8, ' Micromax', 'active'),
(48, 193, 8, 'Motorola', 'active'),
(49, 193, 8, 'Others', 'active'),
(50, 196, 8, 'Panasonic', 'active'),
(51, 196, 8, 'Hitachi', 'active'),
(52, 196, 8, 'Others', 'active'),
(53, 194, 8, 'Apple', 'active'),
(54, 194, 8, 'Intex', 'active'),
(55, 194, 8, 'Others', 'active'),
(56, 195, 8, 'Videocon', 'active'),
(57, 195, 8, 'Others', 'active'),
(58, 199, 8, 'Whirlpool', 'active'),
(59, 199, 8, 'Bosch', 'active'),
(60, 199, 8, 'Others', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_property`
--

CREATE TABLE `commercial_property` (
  `cid` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_property`
--

INSERT INTO `commercial_property` (`cid`, `name`) VALUES
(1, 'Residential Property'),
(2, 'Commercial Property'),
(3, 'Land/Plot');

-- --------------------------------------------------------

--
-- Table structure for table `cycle_master`
--

CREATE TABLE `cycle_master` (
  `cyid` int(11) NOT NULL,
  `cycle_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cycle_master`
--

INSERT INTO `cycle_master` (`cyid`, `cycle_name`) VALUES
(1, 'Hero'),
(2, 'Firefox'),
(3, 'Hercules'),
(4, 'Atlas'),
(5, 'BSA'),
(6, 'Avon'),
(7, 'Montra'),
(8, 'Kross'),
(9, 'Btwin'),
(10, 'Scott'),
(11, 'Lapierre'),
(12, 'Schwinn'),
(13, 'Bianchi'),
(14, 'Tern'),
(15, 'Cannondale'),
(16, 'Cipollini'),
(17, 'Cosmic'),
(18, 'Dahon'),
(19, 'Decathlon'),
(20, 'Raleigh'),
(21, 'Ducati'),
(22, 'BH'),
(23, 'Fuji'),
(24, 'Ghost'),
(25, 'Giant'),
(26, 'GT'),
(27, 'Haibike'),
(28, 'Hi Bird'),
(29, 'Huffy'),
(30, 'La Sovereign'),
(31, 'Merida'),
(32, 'Mongoose'),
(33, 'Rock Machine'),
(34, 'Suncross'),
(35, 'Trek'),
(36, 'Unifox'),
(37, 'Upland'),
(38, 'Ut'),
(39, 'Bergamont'),
(40, 'Orbea'),
(41, 'Schnell'),
(42, 'Surly'),
(43, 'Specialized');

-- --------------------------------------------------------

--
-- Table structure for table `electronic_master`
--

CREATE TABLE `electronic_master` (
  `emid` int(11) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronic_master`
--

INSERT INTO `electronic_master` (`emid`, `name`) VALUES
(1, 'Samsung'),
(2, ' Sony'),
(3, ' Apple'),
(4, ' Micromax'),
(5, ' Nokia'),
(7, ' Docoss'),
(8, ' Brandsdaddy'),
(9, ' LG'),
(10, ' Itel'),
(11, ' Wickedleak'),
(12, ' QiKU'),
(13, ' Smartab'),
(14, ' Easyfone'),
(15, ' Penta'),
(16, ' Hyve'),
(17, ' TP-LINK'),
(18, ' Pel'),
(19, ' Motorola'),
(20, ' EXTREME'),
(21, ' Pepsi'),
(22, ' A & K'),
(23, ' Karbonn'),
(24, ' Good One'),
(25, ' Kodak'),
(26, ' iKall'),
(27, ' Sharp'),
(28, ' ZSTONE'),
(29, ' Vaio'),
(30, ' Ringing Bells'),
(31, ' I-Berry'),
(32, ' Google'),
(33, ' OnePlus'),
(34, ' Hyundai'),
(35, ' Blu'),
(36, ' Beetel'),
(37, ' Gionee'),
(38, ' Wynncom'),
(39, ' CREO'),
(40, ' Yu'),
(41, ' Ambrane'),
(42, ' Phicomm'),
(43, ' BQ'),
(44, ' Rage'),
(45, ' Acer'),
(46, ' Alcatel'),
(47, ' Xiaomi'),
(48, ' ZTE'),
(49, ' Huawei'),
(50, ' Zopo'),
(51, ' BSNL'),
(52, ' Reach'),
(53, ' Maxx'),
(54, ' Mobell'),
(55, ' Vodafone'),
(56, ' Salora'),
(57, ' Spice'),
(58, ' Yota'),
(59, ' Gfive'),
(60, ' Microsoft'),
(61, ' Kenxinda'),
(62, ' iBall'),
(63, ' Whitecherry'),
(64, ' Chilli'),
(65, ' Lima'),
(66, ' Josh'),
(67, ' Mtech'),
(68, ' TCL'),
(69, ' InFocus'),
(70, ' BlackBerry'),
(71, ' HSL'),
(72, ' Vivo'),
(73, ' Sansui'),
(74, ' Intex'),
(75, ' Adcom'),
(76, ' Wham'),
(77, ' LYF'),
(78, ' Kult'),
(79, ' Forme'),
(80, ' Videocon'),
(81, ' UNI'),
(82, ' Celkon'),
(83, ' Zync'),
(84, ' Oppo'),
(85, ' Xillion'),
(86, ' Zen'),
(87, ' Archos'),
(88, ' Swipe'),
(89, ' MTS'),
(90, ' I-Smart'),
(91, ' Infix'),
(92, ' Vox'),
(93, ' Cheers'),
(94, ' Fly'),
(95, ' Coolpad'),
(96, ' LeEco'),
(97, ' Swiss'),
(98, ' Lava'),
(99, ' Idea'),
(100, ' Datawind'),
(101, ' Nextbit'),
(102, ' Ziox'),
(103, ' Mitashi'),
(104, ' Atom'),
(105, ' Xolo'),
(106, ' Dell'),
(107, ' Haier'),
(108, ' iberry'),
(109, ' Asus'),
(110, ' Hitech'),
(111, ' Lemon'),
(112, ' Yxtel'),
(113, ' HPL'),
(114, ' Nubia'),
(115, ' Onida'),
(116, ' Philips'),
(117, ' Jivi'),
(118, ' Meizu'),
(119, ' HP'),
(120, ' Nexian'),
(121, ' Trio'),
(122, ' Lenovo'),
(123, ' Obi'),
(124, ' Champion'),
(125, ' Airtyme'),
(126, ' Panasonic'),
(127, ' Others'),
(128, 'Samsung'),
(129, 'Micromax'),
(130, 'HP ( Hewlett-Packard)'),
(131, 'HCL'),
(132, 'Google'),
(133, 'Apple'),
(134, 'Other Brand Name:'),
(135, 'iZOTRON'),
(136, 'Sharp'),
(137, 'Amosta'),
(138, 'Zomo'),
(139, 'ISUN'),
(140, 'Acer'),
(141, 'ABB'),
(142, 'Pinig'),
(143, 'iBall'),
(144, 'Arow'),
(145, 'IBM'),
(146, 'Zync'),
(147, 'Sony'),
(148, 'Swipe'),
(149, 'Smart'),
(150, 'Milagrow'),
(151, 'Amazon'),
(152, 'Binatone'),
(153, 'MiGadgets'),
(154, 'Intex'),
(155, 'Wintab'),
(156, 'Toshiba'),
(157, 'Ambrane'),
(158, 'ADCOM'),
(159, 'BlackBerry'),
(160, 'Asus'),
(161, 'BSNL PENTA'),
(162, 'Karbonn'),
(163, 'I KALL'),
(164, 'Wipro'),
(165, 'Honor'),
(166, 'MoreGmax'),
(167, 'Salora'),
(168, 'Benq'),
(169, 'Leafline'),
(170, 'Lenovo'),
(171, 'Unic'),
(172, 'Xolo'),
(173, 'UNI'),
(174, 'Anwyn'),
(175, 'AOC'),
(176, 'Compaq'),
(177, 'Amtrak'),
(178, 'HP'),
(179, 'LG'),
(180, 'BaSlate'),
(181, 'Zenith'),
(182, 'Alcatel'),
(183, 'D-Link'),
(184, 'Tescom'),
(185, 'Dell'),
(186, 'Datawind'),
(187, 'MSI'),
(188, 'Celkon'),
(189, 'Eddy'),
(190, 'Shrih'),
(191, 'Zebronics'),
(192, 'Fujitsu-Siemens'),
(193, 'Byjus'),
(194, 'Panasonic'),
(195, 'Adnasan'),
(196, 'Simmtronics'),
(197, 'AXL'),
(198, 'Teclast'),
(199, 'Barbie'),
(200, 'Hitachi'),
(201, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `furnished_property`
--

CREATE TABLE `furnished_property` (
  `fid` int(11) NOT NULL,
  `name_furnished` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furnished_property`
--

INSERT INTO `furnished_property` (`fid`, `name_furnished`) VALUES
(1, 'Fullyfurnished'),
(2, 'Unfurnished'),
(3, 'Semifurnished');

-- --------------------------------------------------------

--
-- Table structure for table `loan_master`
--

CREATE TABLE `loan_master` (
  `lid` int(11) NOT NULL,
  `loan_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_master`
--

INSERT INTO `loan_master` (`lid`, `loan_name`) VALUES
(1, 'Home loan'),
(2, 'Personal loan'),
(3, 'Car loan or Vehicle loan '),
(4, 'Educational loan'),
(5, 'Gold loan'),
(6, 'Loan against insurance policies'),
(7, 'Loan against Bank FDs'),
(8, 'Loan from PPF or EPF'),
(9, 'Loan against shares or mutual funds'),
(10, 'Loan from unrecognized sector');

-- --------------------------------------------------------

--
-- Table structure for table `locality_master`
--

CREATE TABLE `locality_master` (
  `lid` int(11) NOT NULL,
  `city_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locality_master`
--

INSERT INTO `locality_master` (`lid`, `city_name`) VALUES
(1, 'Adalat Road'),
(2, 'Ajantha'),
(3, 'Akashwani'),
(4, 'Ambedkar Chowk'),
(5, 'Bahadurpura'),
(6, 'Baijipura'),
(7, 'Bajaj Nagar'),
(8, 'Balaji Nagar'),
(9, 'Banjara Colony'),
(10, 'Bansilal Nagar'),
(11, 'Barudgar Nala'),
(12, 'Beed Bypass Road'),
(13, 'Begumpura'),
(14, 'Bhadkal Gate'),
(15, 'Bhagya Nagar'),
(16, 'Bhalgaon'),
(17, 'Bhausingpura'),
(18, 'Bhavani Nagar'),
(19, 'Bhim Nagar'),
(20, 'Buddhi Lane'),
(21, 'Cannaught Place'),
(22, 'Cantonment'),
(23, 'CBS Road'),
(24, 'Central Naka'),
(25, 'Chauraha'),
(26, 'Chelipura'),
(27, 'Chetna Nagar'),
(28, 'Chikalthana'),
(29, 'Chitegaon'),
(30, 'CIDCO'),
(31, 'CIDCO, N-1'),
(32, 'CIDCO, N-2'),
(33, 'CIDCO, N-3'),
(34, 'CIDCO, N-4'),
(35, 'CIDCO, N-5'),
(36, 'CIDCO, N-6'),
(37, 'CIDCO, N-7'),
(38, 'CIDCO, N-8'),
(39, 'CIKALTHANA'),
(40, 'City Chowk'),
(42, 'City Chowk'),
(43, 'Dalalwadi'),
(44, 'Dargah Road'),
(45, 'Dashmesh Nagar'),
(46, 'Daulatabad'),
(47, 'Delhi Gate'),
(48, 'Deolai'),
(49, 'Diwan Deodi'),
(50, 'Diwan Deodi'),
(51, 'Ellora'),
(52, 'Fazilpura'),
(53, 'Fischer'),
(54, 'Gajanan Maharaj Mandir'),
(55, 'Ganesh Colony'),
(56, 'Gangapur'),
(57, 'Garampani'),
(58, 'Garkheda'),
(59, 'Ghat Shendra'),
(60, 'GHATI Area'),
(61, 'Golatgaon'),
(62, 'Gulmandi'),
(63, 'Hanuman Nagar'),
(64, 'Harsul'),
(65, 'HUDCO'),
(66, 'HUDCO Corner'),
(67, 'HUDCO, N-11'),
(68, 'HUDCO, N-12'),
(69, 'HUDCO, N-13'),
(70, 'HUDCO, N-9'),
(71, 'Itkheda'),
(72, 'Jadhav Mandi'),
(73, 'Jadhav Wadi'),
(74, 'Jaibhavani Nagar'),
(75, 'Jaisingpura'),
(76, 'Jaivishwabharti Colony'),
(77, 'Jalna Road'),
(78, 'Jatwada'),
(79, 'Jatwada Road'),
(80, 'Jawahar Colony'),
(82, 'Jubilee Park'),
(83, 'Juna Bazar'),
(84, 'Jyoti Nagar'),
(85, 'Kailash Nagar'),
(86, 'Kanchanwadi'),
(87, 'Kannad'),
(88, 'Karmad'),
(89, 'Kasari Bazar'),
(90, 'Katkat Gate'),
(91, 'Keli Bazar'),
(92, 'Khadkeshwar'),
(93, 'Khara Kuwa'),
(94, 'Khokadpura'),
(95, 'Khultabad'),
(96, 'Kile Ark'),
(97, 'Kiraan Chawdi'),
(98, 'Kiradpura'),
(99, 'Kokadpura'),
(100, 'Kokanwadi'),
(101, 'Kranti Chowk'),
(102, 'Labour Colony'),
(103, 'Lota Karanja'),
(104, 'Machhali Khadak'),
(105, 'Mahesh Nagar'),
(106, 'Maliwada'),
(107, 'Manikgarh Cement'),
(108, 'Manzoorpura'),
(109, 'MIDC Waluj'),
(110, 'Mill Corner'),
(111, 'Mitmita'),
(112, 'Mondha'),
(113, 'Moti Karanja'),
(114, 'Mukundwadi'),
(115, 'Nageshwarwadi'),
(116, 'Nagsenvan Colony'),
(117, 'Naigaon'),
(118, 'Nakshatrawadi'),
(119, 'Nandanvan colony'),
(120, 'Naregaon'),
(122, 'Nirala Bazar'),
(123, 'Nutan Colony'),
(124, 'Osmanpura'),
(125, 'Other'),
(126, 'Padampura'),
(127, 'Padegaon'),
(128, 'Pahadsingpura'),
(129, 'Paithan'),
(130, 'Paithan Gate'),
(131, 'Paithan Road'),
(132, 'PaithanRoad'),
(133, 'Panchakki'),
(134, 'Pandariba'),
(135, 'Pannalal Nagar'),
(136, 'Peer Bazar'),
(137, 'Phulambri'),
(138, 'Pisadevi Road'),
(139, 'Pundalik Nagar'),
(140, 'Pushpa Nagari'),
(141, 'Railway Station'),
(142, 'Railway Station Road'),
(143, 'Raja Bazar'),
(144, 'Ram Nagar'),
(145, 'Rangargalli'),
(146, 'Rokdiya Hanuman Colony'),
(147, 'Roshan Gate'),
(148, 'Rouza Bagh'),
(149, 'RTO Office'),
(150, 'Sahakar Nagar'),
(151, 'Samarth Nagar'),
(152, 'Sarafa'),
(153, 'Satara Parisar'),
(154, 'Sawangi'),
(155, 'Seven Hills'),
(156, 'Shah Bazar'),
(157, 'Shahgunj'),
(158, 'Shahnurwadi'),
(159, 'Sharnapur'),
(160, 'Shekta'),
(162, 'Shendra'),
(163, 'Shivaji Nagar'),
(164, 'Shreya Nagar'),
(165, 'Sillod'),
(166, 'Soegaon'),
(167, 'Sutgirni Chowk'),
(168, 'T V Center'),
(169, 'Tilak Nagar'),
(170, 'Tilak Path'),
(171, 'Tisgaon'),
(172, 'Town Centre'),
(173, 'Town Hall'),
(174, 'Tuborg'),
(175, 'Ulka Nagari'),
(176, 'University'),
(177, 'Vaijapur'),
(178, 'Vedant Nagar'),
(179, 'Waluj'),
(180, 'Angoori Bagh'),
(181, 'Vidya Nagar'),
(182, 'Ajab Nagar'),
(183, 'Arif Colony'),
(184, 'MIDC Industrial Area\r\n'),
(185, 'Nagar Naka\r\n'),
(186, 'Naralibag\r\n'),
(187, 'Pandharpur Village\r\n'),
(188, 'Sindhi Colony\r\n'),
(189, 'SwapnaNagri\r\n'),
(190, 'Ashok Nagar'),
(191, 'Bhagatsingh Nagar'),
(192, 'Chatrapathi Nagar'),
(193, 'CIDCO N 9'),
(194, 'CIDCO N 10'),
(195, 'CIDCO N 11\r\n'),
(196, 'CIDCO N 12\r\n'),
(197, 'CIDCO N 13\r\n'),
(198, 'Chintamani Colony\r\n'),
(199, 'DargahChowk\r\n'),
(200, 'DrAmbedkar Nagar\r\n'),
(201, 'GadiaVihar\r\n'),
(202, 'GarkhedaParisar\r\n'),
(203, 'HimayatBagh\r\n'),
(204, 'Jalan Nagar\r\n'),
(205, 'Kotla Colony\r\n'),
(206, 'M G M Road\r\n'),
(207, 'MIDC Industrial Area\r\n'),
(208, 'Nagar Naka\r\n'),
(209, 'Naralibag\r\n'),
(210, 'Pandharpur Village\r\n'),
(211, 'Sangram Nagar\r\n'),
(212, 'Station Road\r\n'),
(213, 'Shantiniketan Colony\r\n'),
(214, 'Sindhi Colony\r\n'),
(215, 'SwapnaNagri\r\n'),
(216, 'Cidco Waluj Mahanagar-1'),
(217, 'Cidco Waluj Mahanagar-2'),
(218, 'Pandharpur Chowk'),
(219, 'Maharana Pratap Chowk'),
(220, 'Vadgaon Phata'),
(221, 'Vadgaon'),
(222, 'Mohata Devi Chowk'),
(223, 'More Chowk');

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `mid` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `category_images` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`mid`, `category_name`, `category_images`, `date`, `status`) VALUES
(1, 'Real Estate', 'real estate-6110.jpg', '2016-11-11 16:22:50', 'active'),
(3, 'Home important', 'electrician-3993.png', '2016-12-03 15:44:58', 'active'),
(4, 'Repairing Services', 'Computer-Service-Icons-6661.png', '2016-12-03 15:49:14', 'active'),
(5, 'All Classes', 'all classes-719.jpg', '2016-12-03 15:51:47', 'active'),
(6, 'Car For Rent/Sale', 'car for sale 2-8739.jpg', '2016-12-03 15:57:26', 'active'),
(7, 'Bike For sale', 'bike for sale-7598.jpg', '2016-12-03 16:00:34', 'active'),
(8, 'Old Electronics For Sale', 'electronics-5863.png', '2016-12-03 16:03:49', 'active'),
(9, 'Old Furniture For Sale', 'Set-Of-Vector-3D-Furniture-01-8449.jpg', '2016-12-03 16:07:03', 'active'),
(10, 'Tempo & Loading Rikshaw For Rent/Sale', 'tempo 2-7828.jpg', '2016-12-03 16:15:50', 'active'),
(11, 'Jobs', 'jobs-128-4788.png', '2016-12-03 16:18:35', 'active'),
(12, 'Wedding & Halls', 'hall-6284.jpg', '2016-12-03 16:27:02', 'active'),
(13, 'Wedding Services', 'bride-icon-png-22-7572.png', '2016-12-03 16:31:32', 'active'),
(14, 'Hotel & Lodging', 'hotel-714.png', '2016-12-03 16:35:05', 'active'),
(16, 'Mall & Business Offers', 'christmas gifts-8820.png', '2016-12-27 12:50:11', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `medium_of_school`
--

CREATE TABLE `medium_of_school` (
  `moid` int(11) NOT NULL,
  `school_medium_namee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medium_of_school`
--

INSERT INTO `medium_of_school` (`moid`, `school_medium_namee`) VALUES
(1, 'English / Convent'),
(2, 'Hindi'),
(3, 'Urdu'),
(4, 'Marathi');

-- --------------------------------------------------------

--
-- Table structure for table `offer_master`
--

CREATE TABLE `offer_master` (
  `ofid` int(11) NOT NULL,
  `offer_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_master`
--

INSERT INTO `offer_master` (`ofid`, `offer_name`) VALUES
(1, 'Buy 1 Get 1 free'),
(2, 'Buy 1 Get 2 Free'),
(3, 'Buy 1 Get 3 Free'),
(4, 'Buy 2 Get 3 Free'),
(5, 'Buy To Get 10% Off'),
(6, 'Buy To Get 50% Off'),
(7, 'Flat 50% Off'),
(8, 'Up To 50% Off'),
(9, 'Buy 4 Get 1 Free'),
(10, 'Buy 2 Get 1 Free'),
(11, 'Other Offers'),
(12, 'Up To 70% Off'),
(13, '80% Off'),
(14, '75% Off');

-- --------------------------------------------------------

--
-- Table structure for table `post_requirement`
--

CREATE TABLE `post_requirement` (
  `prid` int(11) NOT NULL,
  `property_unique_id` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `eamil` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `yourpropesinal` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `property_title` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `slaeby` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `budget` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_requirement`
--

INSERT INTO `post_requirement` (`prid`, `property_unique_id`, `firstname`, `lastname`, `eamil`, `mobile_no`, `yourpropesinal`, `address`, `property_title`, `category_name`, `slaeby`, `description`, `budget`, `status`, `date`) VALUES
(1, 'SBR143992P', 'Snehasish ', 'Mukherjee', 'snehasishmukherjee281@gmail.com', '8348253277', 'Job', 'Betwan Bazar, Munger, Bihar', 'I have a requirement of a 1BHK flat in Aurangabad. ', '3', 'Ad Agency (Marketing Services)', 'Need a 1bhk apartment soon. I work for Shoot transmission so it will be better if I get some place near it.', 'Rs 2000-5000', 'active', '2018-06-07 19:01:01'),
(2, 'SBR485039P', 'Sarang', 'Borade', 'sarangsborade@gmail.com', '9970376121', 'Job', 'Cidco Aurangabad', 'I want 1bhk apartment plat for small family in Garkheda area', '1', 'Rent', 'Flat on rent Up to Rs 6000 /- ', 'Rs 5000-10000', 'active', '2018-06-11 10:59:59'),
(3, 'SBR287473P', 'Manohar', 'Shelake', 'dr.manu0389@gmail.com', '9096274656', 'Job', 'Ghati hospital aurangabad', '1 or 2 bhk on rent near ghati hospital aurangabad', '1', 'Rent', 'Dr family. Husband and wife only. Required gated community security water electricity', 'Rs 5000-10000', 'active', '2018-07-19 09:03:49'),
(4, 'SBR280539P', 'Vikas', 'Nehale', 'Nehalevikas@gmail.com', '7709805497', 'Job', 'Aurangabad ', 'Required 1 Bhk in Jalna road or Samarth nagar or kranti chok', '1', 'Buy', 'Upto 6000 budget', 'Rs 2000-5000', 'active', '2018-08-22 11:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `property_category`
--

CREATE TABLE `property_category` (
  `pcid` int(11) NOT NULL,
  `property_name` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_category`
--

INSERT INTO `property_category` (`pcid`, `property_name`, `status`, `date`) VALUES
(1, 'Buy', 'active', '2016-10-25 16:24:13'),
(2, 'Rent', 'active', '2016-10-25 16:24:47'),
(3, 'Sale', 'active', '2016-10-25 16:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `piid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `image_name` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`piid`, `pid`, `image_name`, `date`) VALUES
(1, 1, 'screen.png', '2016-11-24 07:06:04'),
(2, 2, '7JnVOa.jpg', '2016-11-22 13:34:51'),
(3, 2, '2016- 1.jpg', '2016-11-22 13:34:51'),
(4, 2, 'DCIM100.jpg', '2016-11-22 13:34:51'),
(9, 6, 'maxresdefault (1).jpg', '2016-11-22 16:04:14'),
(10, 6, 'maxresdefault.jpg', '2016-11-22 16:04:14'),
(11, 6, 'msb-Mathieu-Dupuis-12.jpg', '2016-11-22 16:04:14'),
(12, 6, 'pc-wallpaper-hd-nature-9.jpg', '2016-11-22 16:04:14'),
(13, 7, 'IMG_20161004_110156.jpg', '2016-11-22 16:41:35'),
(14, 7, 'IMG_20161004_110220.jpg', '2016-11-22 16:41:35'),
(15, 7, 'IMG_20161004_110254.jpg', '2016-11-22 16:41:35'),
(16, 7, 'IMG_20161004_110303.jpg', '2016-11-22 16:41:35'),
(17, 7, 'IMG_20161004_110307.jpg', '2016-11-22 16:41:35'),
(18, 7, 'IMG_20161004_110620.jpg', '2016-11-22 16:41:35'),
(19, 8, 'IMG_20161004_110620.jpg', '2016-11-22 16:43:47'),
(20, 8, 'IMG_20161004_110156.jpg', '2016-11-22 16:43:47'),
(21, 8, 'IMG_20161004_110220.jpg', '2016-11-22 16:43:47'),
(22, 8, 'IMG_20161004_110254.jpg', '2016-11-22 16:43:47'),
(23, 8, 'IMG_20161004_110303.jpg', '2016-11-22 16:43:47'),
(24, 8, 'IMG_20161004_110307.jpg', '2016-11-22 16:43:47'),
(25, 9, 'IMG_20161010_111316.jpg', '2016-11-22 17:10:37'),
(26, 9, 'IMG_20161010_111348.jpg', '2016-11-22 17:10:37'),
(27, 9, 'IMG_20161010_111411.jpg', '2016-11-22 17:10:37'),
(28, 9, 'IMG_20161010_111422.jpg', '2016-11-22 17:10:37'),
(29, 9, 'IMG_20161010_111540.jpg', '2016-11-22 17:10:37'),
(30, 9, 'IMG_20161010_111611.jpg', '2016-11-22 17:10:37'),
(31, 9, 'IMG_20161010_111704.jpg', '2016-11-22 17:10:37'),
(32, 9, 'IMG_20161010_112252.jpg', '2016-11-22 17:10:37'),
(59, 19, 'IMG_20161107_162529.jpg', '2016-11-23 05:46:21'),
(60, 19, 'IMG_20161107_162037.jpg', '2016-11-23 05:46:21'),
(61, 19, 'IMG_20161107_162054.jpg', '2016-11-23 05:46:21'),
(62, 19, 'IMG_20161107_162104.jpg', '2016-11-23 05:46:21'),
(63, 19, 'IMG_20161107_162112.jpg', '2016-11-23 05:46:21'),
(75, 22, 'AAEAAQAAAAAAAAaHAAAAJGU3OTBhNjhhLWZjZjItNDcyYS1hN2QyLWY0YzA0ZTQ0MDlmNg.png', '2016-12-02 14:44:36'),
(146, 38, 'IMG_20151227_114536.jpg', '2016-11-25 09:24:41'),
(166, 42, 'IMG_20160124_115551.jpg', '2016-11-23 08:58:07'),
(167, 42, 'IMG_20160124_115141.jpg', '2016-11-23 08:58:07'),
(168, 42, 'IMG_20160124_115157.jpg', '2016-11-23 08:58:07'),
(169, 42, 'IMG_20160124_115215.jpg', '2016-11-23 08:58:07'),
(170, 42, 'IMG_20160124_115207.jpg', '2016-11-23 08:58:07'),
(180, 45, 'IMG_20160107_154028.jpg', '2016-11-23 09:17:31'),
(181, 45, 'IMG_20160107_154020.jpg', '2016-11-23 09:17:31'),
(182, 46, 'IMG_20160805_114439.jpg', '2016-11-23 09:21:50'),
(186, 48, 'IMG_20150107_154423.jpg', '2016-11-23 09:34:37'),
(220, 65, 'IMG_20150801_170314.jpg', '2016-11-23 12:57:11'),
(221, 65, 'IMG_20150801_170354.jpg', '2016-11-23 12:57:11'),
(222, 65, 'IMG_20150801_170422.jpg', '2016-11-23 12:57:11'),
(223, 65, 'IMG_20150801_170457.jpg', '2016-11-23 12:57:11'),
(232, 70, 'IMG_20150812_130420.jpg', '2016-11-23 13:26:57'),
(233, 71, 'IMG_20161002_105705.jpg', '2016-11-23 13:31:06'),
(234, 71, 'IMG_20161002_105955.jpg', '2016-11-23 13:31:06'),
(235, 71, 'IMG_20161002_110005.jpg', '2016-11-23 13:31:06'),
(236, 71, 'IMG_20161002_110103.jpg', '2016-11-23 13:31:06'),
(237, 71, 'IMG_20161002_110114.jpg', '2016-11-23 13:31:06'),
(239, 73, 'IMG_20151013_110601.jpg', '2016-11-23 13:42:35'),
(246, 75, '14095898_974630145989489_5624351603385390661_n.jpg', '2016-11-23 13:54:20'),
(247, 75, '14225443_1111242128961673_1399531201791441071_n.jpg', '2016-11-23 13:54:20'),
(248, 75, '14232620_1111241868961699_3881612715562830340_n.jpg', '2016-11-23 13:54:20'),
(249, 75, '14233095_1111241965628356_6773962009604544824_n.jpg', '2016-11-23 13:54:20'),
(250, 75, '10731003_647149958737511_4391693313961926265_n.jpg', '2016-11-23 13:54:20'),
(251, 75, '14095898_974630145989489_5624351603385390661_n.jpg', '2016-11-23 13:54:41'),
(259, 77, 'IMG_20161123_164853.jpg', '2016-11-23 14:18:51'),
(260, 77, 'IMG_20161123_164346.jpg', '2016-11-23 14:18:51'),
(261, 77, 'IMG_20161123_164424.jpg', '2016-11-23 14:18:51'),
(262, 77, 'IMG_20161123_164438.jpg', '2016-11-23 14:18:51'),
(263, 77, 'IMG_20161123_164453.jpg', '2016-11-23 14:18:51'),
(275, 79, 'airport-pickup-bg.png', '2016-11-24 09:39:31'),
(276, 79, 'fleet_banner.png', '2016-11-24 09:39:31'),
(277, 79, 'quality1.png', '2016-11-24 09:40:58'),
(278, 79, 'reliable1.png', '2016-11-24 09:40:58'),
(300, 64, 'IMG_20150123_150714.jpg', '2016-11-24 14:11:02'),
(301, 64, 'IMG_20150123_150726.jpg', '2016-11-24 14:11:02'),
(302, 64, 'IMG_20150123_150735.jpg', '2016-11-24 14:11:02'),
(303, 64, 'IMG_20150123_151014.jpg', '2016-11-24 14:11:03'),
(304, 64, 'IMG_20150123_151057.jpg', '2016-11-24 14:11:03'),
(310, 83, 'maxresdefault.jpg', '2016-11-25 06:53:25'),
(311, 70, 'IMG_20150812_131307.jpg', '2016-11-25 07:31:58'),
(312, 70, 'IMG_20150812_131346.jpg', '2016-11-25 07:31:59'),
(316, 85, 'IMG_20160405_035553.jpg', '2016-11-25 07:51:01'),
(323, 46, 'IMG_20160805_114210.jpg', '2016-11-25 08:06:59'),
(324, 46, 'IMG_20160805_114233.jpg', '2016-11-25 08:06:59'),
(325, 46, 'IMG_20160805_114308.jpg', '2016-11-25 08:06:59'),
(326, 45, 'IMG_20160107_154348.jpg', '2016-11-25 08:16:39'),
(327, 45, 'IMG_20160107_154403.jpg', '2016-11-25 08:16:39'),
(328, 45, 'IMG_20160107_154428.jpg', '2016-11-25 08:16:39'),
(329, 45, 'IMG_20160107_154518.jpg', '2016-11-25 08:16:39'),
(330, 45, 'IMG_20160107_154918.jpg', '2016-11-25 08:16:39'),
(331, 45, 'IMG_20160107_154836.jpg', '2016-11-25 08:16:40'),
(341, 38, 'IMG_20151227_114546.jpg', '2016-11-25 09:24:41'),
(342, 38, 'IMG_20151227_114554.jpg', '2016-11-25 09:24:41'),
(343, 38, 'IMG_20151227_114606.jpg', '2016-11-25 09:24:42'),
(344, 38, 'IMG_20151227_114649.jpg', '2016-11-25 09:24:42'),
(345, 38, 'IMG_20151227_114755.jpg', '2016-11-25 09:24:42'),
(346, 38, 'IMG_20151227_114802.jpg', '2016-11-25 09:24:42'),
(354, 86, '137719773_14475468614_large - Copy - Copy.jpg', '2016-11-25 10:20:16'),
(355, 86, 'maxresdefault (1) - Copy - Copy.jpg', '2016-11-25 10:20:16'),
(356, 86, 'Nariman-Point-Mumbai - Copy - Copy.jpg', '2016-11-25 10:20:16'),
(357, 86, 'Japnese-garden - Copy.jpg', '2016-11-25 10:20:16'),
(358, 86, 'images - Copy.jpg', '2016-11-25 10:20:16'),
(359, 86, 'botanical-garden - Copy.JPG', '2016-11-25 10:20:16'),
(360, 87, 'IMG_20160601_045844.jpg', '2016-11-26 09:42:15'),
(361, 87, 'IMG_20160601_050244.jpg', '2016-11-26 09:42:15'),
(362, 87, 'IMG_20160601_045918.jpg', '2016-11-26 09:42:15'),
(363, 87, 'IMG_20160601_050244.jpg', '2016-11-26 09:42:16'),
(364, 87, 'IMG_20160601_050011.jpg', '2016-11-26 09:42:16'),
(365, 87, 'download.jpg', '2016-11-26 09:32:06'),
(366, 87, 'xcx.jpg', '2016-11-26 09:34:34'),
(367, 88, 'IMG_20160601_045844.jpg', '2016-11-26 09:51:26'),
(368, 88, 'IMG_20160601_045857.jpg', '2016-11-26 09:51:27'),
(369, 88, 'IMG_20160601_045918.jpg', '2016-11-26 09:51:27'),
(370, 83, '2.png', '2016-11-26 12:23:34'),
(371, 83, '2.png', '2016-11-26 12:23:35'),
(372, 83, '2 (1).png', '2016-11-26 12:23:35'),
(377, 73, 'jhgnnggngg.jpg', '2016-11-27 05:42:27'),
(378, 73, '45554.jpg', '2016-11-27 05:42:27'),
(379, 73, 'jjhhh.jpg', '2016-11-27 05:42:27'),
(383, 83, 'protfolio_8083.jpg', '2016-11-28 05:59:27'),
(384, 83, 'screen.png', '2016-11-28 06:01:37'),
(385, 94, '7JnVOa.jpg', '2016-11-28 06:31:24'),
(386, 94, '2016- 1.jpg', '2016-11-28 06:31:24'),
(387, 94, '3539014_orig.jpg', '2016-11-28 06:31:24'),
(388, 94, '14940105_1075875095867410_5375533593872549548_o.jpg', '2016-11-28 06:31:24'),
(389, 94, '1432210828_leased_line_city_banner.jpg', '2016-11-28 06:31:24'),
(390, 94, 'AAEAAQAAAAAAAAaHAAAAJGU3OTBhNjhhLWZjZjItNDcyYS1hN2QyLWY0YzA0ZTQ0MDlmNg.png', '2016-11-28 06:31:24'),
(391, 94, '1.png', '2016-11-28 07:04:22'),
(392, 95, 'home 3.jpg', '2016-11-28 07:40:36'),
(393, 95, 'home.jpg', '2016-11-28 07:40:36'),
(394, 95, 'home2.png', '2016-11-28 07:40:36'),
(395, 95, 'home 1.png', '2016-11-28 07:40:36'),
(396, 95, 'home2.png', '2016-11-28 07:41:57'),
(397, 95, 'home 3.jpg', '2016-11-28 07:41:57'),
(398, 95, 'home 3.jpg', '2016-11-28 07:41:57'),
(399, 95, 'home 4.jpg', '2016-11-28 07:41:57'),
(400, 96, 'home 3.jpg', '2016-11-28 07:57:59'),
(401, 96, 'home.jpg', '2016-11-28 07:57:59'),
(402, 96, 'home2.png', '2016-11-28 07:57:59'),
(403, 96, 'home 1.png', '2016-11-28 07:57:59'),
(404, 96, 'home.jpg', '2016-11-28 07:58:35'),
(405, 96, 'home2.png', '2016-11-28 07:58:35'),
(406, 22, 'home.jpg', '2016-11-28 08:10:26'),
(407, 22, 'home2.png', '2016-11-28 08:10:26'),
(408, 97, 'protfolio_8083.jpg', '2016-11-28 08:43:13'),
(409, 22, 'home2.png', '2016-11-28 08:54:23'),
(410, 22, 'home 1.png', '2016-11-28 08:54:23'),
(411, 98, 'WEB.jpg', '2016-11-28 10:02:43'),
(412, 99, '121212121.jpg', '2016-11-28 10:05:56'),
(413, 99, '15232335_1140162722745556_8718276807302187473_n.jpg', '2016-11-28 10:05:56'),
(414, 100, '15232335_1140162722745556_8718276807302187473_n.jpg', '2016-11-28 10:08:23'),
(415, 101, '121212121.jpg', '2016-11-28 10:11:32'),
(434, 105, 'room pic.jpg', '2016-12-02 13:27:53'),
(435, 107, 'img5.jpg', '2016-12-02 14:40:16'),
(436, 108, '1432210828_leased_line_city_banner.jpg', '2016-12-02 14:44:02'),
(475, 118, 'office.jpg', '2016-12-03 08:43:26'),
(476, 118, 'room pic.jpg', '2016-12-03 08:44:21'),
(499, 127, '3539014_orig.jpg', '2016-12-05 06:44:06'),
(505, 129, 'room pic.jpg', '2016-12-06 11:18:40'),
(506, 130, 'home.jpg', '2016-12-06 11:34:43'),
(507, 130, 'home2.png', '2016-12-06 11:34:43'),
(508, 130, 'home 1.png', '2016-12-06 11:34:43'),
(509, 130, 'home 3.jpg', '2016-12-06 11:34:43'),
(510, 130, 'room pic.jpg', '2016-12-06 11:34:43'),
(511, 130, 'room pic.jpg', '2016-12-06 11:38:21'),
(534, 135, 'home 1.png', '2016-12-10 11:57:51'),
(535, 136, 'home 1.png', '2016-12-10 12:03:25'),
(562, 143, 'home 1.png', '2016-12-12 05:00:25'),
(563, 143, 'home 3.jpg', '2016-12-12 05:00:25'),
(564, 143, 'office.jpg', '2016-12-12 05:01:26'),
(565, 143, 'room pic.jpg', '2016-12-12 05:02:52'),
(566, 144, 'home 4.jpg', '2016-12-12 05:06:34'),
(567, 144, 'office.jpg', '2016-12-12 05:06:34'),
(568, 144, 'room pic.jpg', '2016-12-12 05:06:34'),
(575, 146, 'home2.png', '2016-12-13 06:45:06'),
(576, 146, 'home 1.png', '2016-12-13 06:45:06'),
(577, 146, 'office.jpg', '2016-12-13 06:45:06'),
(578, 147, 'home 4.jpg', '2016-12-13 09:25:02'),
(579, 147, 'home2.png', '2016-12-13 09:25:02'),
(580, 147, 'home 1.png', '2016-12-13 09:25:02'),
(581, 147, 'home 3.jpg', '2016-12-13 09:25:02'),
(582, 148, 'office.jpg', '2016-12-13 09:26:47'),
(583, 148, 'room pic.jpg', '2016-12-13 09:26:47'),
(584, 149, 'new home 4.jpg', '2016-12-13 09:28:03'),
(585, 149, 'new home 1.jpg', '2016-12-13 09:28:03'),
(586, 149, 'new home 2.jpg', '2016-12-13 09:28:03'),
(587, 149, 'new home 3.png', '2016-12-13 09:28:03'),
(588, 150, 'room 4.jpg', '2016-12-13 09:29:22'),
(589, 150, 'room 1.jpg', '2016-12-13 09:29:22'),
(590, 150, 'room 2.jpg', '2016-12-13 09:29:22'),
(591, 150, 'room 3.jpg', '2016-12-13 09:29:22'),
(592, 151, 'Winter.jpg', '2016-12-13 09:30:32'),
(593, 151, 'Blue hills.jpg', '2016-12-13 09:30:32'),
(594, 151, 'Sunset.jpg', '2016-12-13 09:30:32'),
(595, 151, 'Water lilies.jpg', '2016-12-13 09:30:32'),
(596, 152, 'Blue hills.jpg', '2016-12-15 07:07:48'),
(597, 153, 'car for sale 2.jpg', '2016-12-15 07:25:03'),
(598, 154, 'bike for sale.jpg', '2016-12-15 07:36:35'),
(599, 155, 'electrician 2.png', '2016-12-15 08:11:25'),
(649, 173, '12132212.jpg', '2016-12-19 16:11:19'),
(650, 175, '12132212.jpg', '2016-12-19 16:09:59'),
(651, 176, '12132212.jpg', '2016-12-19 16:09:23'),
(652, 177, '12132212.jpg', '2016-12-19 08:08:25'),
(659, 181, 'IMG_20161218_131719.jpg', '2016-12-18 10:57:32'),
(660, 182, '122.jpg', '2016-12-18 13:25:32'),
(667, 188, 'IMG_20161219_163223.jpg', '2016-12-19 11:34:34'),
(668, 188, 'IMG_20161219_163306.jpg', '2016-12-19 11:34:34'),
(669, 188, 'IMG_20161219_163132.jpg', '2016-12-19 16:35:34'),
(670, 188, 'IMG_20161219_163110.jpg', '2016-12-19 11:34:34'),
(671, 188, 'IMG_20161219_163053.jpg', '2016-12-19 16:35:34'),
(685, 185, '12132212.jpg', '2016-12-19 16:08:41'),
(686, 185, '12132212.jpg', '2016-12-19 16:08:41'),
(687, 176, '12132212.jpg', '2016-12-19 16:09:23'),
(688, 175, '12132212.jpg', '2016-12-19 16:10:00'),
(689, 174, '12132212.jpg', '2016-12-19 16:10:36'),
(690, 174, '12132212.jpg', '2016-12-19 16:10:36'),
(691, 173, '12132212.jpg', '2016-12-19 16:11:19'),
(692, 183, '122.jpg', '2016-12-19 16:14:13'),
(693, 183, '122.jpg', '2016-12-19 16:14:13'),
(694, 178, 'IMG_20161218_125921.jpg', '2016-12-19 16:17:14'),
(695, 178, 'IMG_20161218_130007.jpg', '2016-12-19 16:17:14'),
(696, 178, 'IMG_20161218_130023.jpg', '2016-12-19 16:17:14'),
(697, 181, 'IMG_20161218_131602.jpg', '2016-12-19 16:29:07'),
(698, 180, 'IMG_20161218_133541.jpg', '2016-12-19 16:32:05'),
(699, 180, 'IMG_20161218_133546.jpg', '2016-12-19 16:32:05'),
(700, 193, '1212111.jpg', '2016-12-20 10:14:22'),
(701, 193, 'IMG_20161220_113314.jpg', '2016-12-20 10:14:22'),
(702, 193, 'IMG_20161220_113331.jpg', '2016-12-20 10:14:22'),
(703, 194, 'IMG_20161220_113836.jpg', '2016-12-20 10:33:06'),
(704, 195, 'IMG_20161220_114431.jpg', '2016-12-20 10:34:51'),
(710, 199, 'ZZZZZZZZZZZZZZZZZZZZZZZZZZZ.jpg', '2016-12-20 11:11:47'),
(711, 200, '3 hp BOSS.jpg', '2016-12-23 08:05:58'),
(712, 200, 'shop crane.jpg', '2016-12-23 08:05:58'),
(713, 201, '14411414.jpg', '2016-12-20 14:41:58'),
(730, 209, 'IMG_20161221_125449.jpg', '2016-12-21 13:22:44'),
(731, 210, 'IMG_20161221_125613.jpg', '2016-12-21 13:26:09'),
(732, 211, 'IMG_20161221_125517.jpg', '2016-12-21 13:29:11'),
(733, 211, 'IMG_20161221_125503.jpg', '2016-12-21 13:29:11'),
(734, 212, 'IMG_20161221_125636.jpg', '2016-12-21 13:32:49'),
(735, 213, 'IMG_20161221_125629.jpg', '2016-12-21 13:36:54'),
(736, 214, 'IMG_20161221_125227.jpg', '2016-12-21 13:44:48'),
(737, 215, 'IMG_20161221_125200.jpg', '2016-12-21 13:47:53'),
(738, 216, 'IMG_20161221_125340.jpg', '2016-12-21 13:50:22'),
(739, 217, 'IMG_20161221_125355.jpg', '2016-12-21 13:52:34'),
(794, 239, 'ggggggjgjgjgjg.jpg', '2016-12-22 09:19:45'),
(795, 200, 'dental-compressor.jpg', '2016-12-23 08:05:58'),
(796, 200, 'battery Hydrometer.jpg', '2016-12-23 08:05:58'),
(797, 200, 'frank.png', '2016-12-23 08:05:58'),
(798, 200, 'images.jpg', '2017-01-04 04:40:37'),
(799, 200, 'single-stage-compressor.jpg', '2016-12-23 08:05:59'),
(800, 200, 'frank auto drain.png', '2016-12-23 08:05:59'),
(801, 240, 'scan1.jpg', '2016-12-24 05:20:04'),
(803, 242, 'IMG_20161224_124718.jpg', '2016-12-24 10:21:50'),
(804, 242, 'IMG_20161224_124727.jpg', '2016-12-24 10:21:50'),
(805, 242, 'IMG_20161224_124733.jpg', '2016-12-24 10:21:50'),
(806, 243, 'IMG_20161224_163832.jpg', '2016-12-24 12:57:53'),
(807, 243, 'IMG_20161224_163825.jpg', '2016-12-24 12:57:53'),
(808, 244, 'aaaa.jpg', '2016-12-25 05:53:27'),
(809, 244, 'ddd.jpg', '2016-12-25 05:53:27'),
(810, 245, 'IMG_20161225_115551wwwwwwwwwww.jpg', '2016-12-25 06:34:36'),
(818, 246, '121221.jpg', '2017-01-06 11:36:48'),
(836, 250, '20161227_153510.jpg', '2016-12-28 08:09:29'),
(837, 250, '20161227_153527.jpg', '2016-12-28 08:09:29'),
(838, 250, '20161227_151534.jpg', '2016-12-28 08:09:29'),
(839, 250, '20161227_151701.jpg', '2016-12-28 08:09:29'),
(840, 250, '20161227_151721.jpg', '2016-12-28 08:09:29'),
(841, 250, '20161227_151907.jpg', '2016-12-28 08:09:29'),
(842, 250, '20161227_151915.jpg', '2016-12-28 08:09:29'),
(843, 251, '20161227_160409.jpg', '2016-12-28 09:15:00'),
(844, 251, '20161227_160339.jpg', '2016-12-28 09:15:00'),
(845, 251, '20161227_160439.jpg', '2016-12-28 09:15:00'),
(846, 251, '20161227_160515.jpg', '2016-12-28 09:15:00'),
(847, 251, '20161227_160632.jpg', '2016-12-28 09:15:00'),
(848, 251, '20161227_160825.jpg', '2016-12-28 09:15:00'),
(849, 251, '20161227_160330.jpg', '2016-12-28 09:15:00'),
(850, 252, 'pppp1.jpg', '2016-12-28 09:57:23'),
(851, 252, 'ppp.png', '2016-12-28 09:57:23'),
(852, 252, 'ppp2.png', '2016-12-28 09:57:23'),
(853, 252, 'pppp1.jpg', '2016-12-28 09:57:23'),
(854, 252, 'PPPPPPPPPP5.png', '2016-12-28 09:57:23'),
(855, 252, 'PPPPPPPPPP45.png', '2016-12-28 09:57:23'),
(856, 252, 'ppppppppppp3.png', '2016-12-28 09:57:23'),
(857, 253, 'IMG_20161229_103520.jpg', '2016-12-29 05:44:37'),
(858, 253, 'IMG_20161229_103639.jpg', '2016-12-29 05:44:37'),
(859, 254, 'aaaaaaa.jpg', '2016-12-29 05:47:09'),
(866, 261, '1111111.jpg', '2016-12-30 08:40:33'),
(882, 261, '111111111111111111111222222222222.jpg', '2016-12-30 08:40:33'),
(883, 268, 'car.jpg', '2016-12-30 13:32:30'),
(885, 270, 'IMG-20161230-WA0004.jpg', '2016-12-31 12:48:11'),
(886, 270, 'IMG-20161230-WA0015.jpg', '2016-12-31 12:48:11'),
(887, 270, 'IMG-20161230-WA0000.jpg', '2016-12-31 12:48:11'),
(888, 270, 'IMG-20161230-WA0001.jpg', '2016-12-31 12:48:11'),
(889, 270, 'IMG-20161230-WA0005.jpg', '2016-12-31 12:48:11'),
(890, 270, 'IMG-20161230-WA0008.jpg', '2016-12-31 12:48:11'),
(891, 270, 'IMG-20161230-WA0009.jpg', '2016-12-31 12:48:11'),
(892, 270, 'IMG-20161230-WA0010.jpg', '2016-12-31 12:48:11'),
(893, 271, 'IMG-20161230-WA0013.jpg', '2016-12-31 13:15:06'),
(894, 271, 'IMG-20161230-WA0016.jpg', '2016-12-31 13:15:06'),
(895, 271, 'IMG-20161230-WA0014.jpg', '2016-12-31 13:15:06'),
(896, 271, 'IMG-20161230-WA0007.jpg', '2016-12-31 13:15:06'),
(897, 271, 'IMG-20161230-WA0004.jpg', '2016-12-31 13:15:06'),
(898, 271, 'IMG-20161230-WA0011.jpg', '2016-12-31 13:15:07'),
(899, 271, 'IMG-20161230-WA0012.jpg', '2016-12-31 13:15:07'),
(900, 271, 'IMG-20161230-WA0002.jpg', '2016-12-31 13:15:07'),
(907, 273, 'angeal copy OK desktop.jpg', '2017-01-05 12:53:31'),
(908, 274, '1450383842452.jpg', '2017-01-05 14:43:14'),
(909, 274, '1450383843518.jpg', '2017-01-05 14:43:14'),
(910, 274, '1450383836052.jpg', '2017-01-05 14:43:14'),
(911, 274, '1450383837873.jpg', '2017-01-05 14:43:14'),
(912, 274, '1450383838929.jpg', '2017-01-05 14:43:14'),
(913, 274, '1450383839935.jpg', '2017-01-05 14:43:14'),
(914, 274, '1450302757006.jpg', '2017-01-05 14:43:14'),
(915, 275, 'IMG_20170102_212628.jpg', '2017-01-06 13:32:34'),
(916, 276, '1483538179964.jpg', '2017-01-06 13:34:52'),
(937, 280, 'IMG-20170106-WA0001.jpg', '2017-01-07 12:53:10'),
(938, 280, 'IMG-20170106-WA0003.jpg', '2017-01-07 12:53:10'),
(939, 280, 'ff.jpg', '2017-01-07 12:53:10'),
(947, 283, 'ppp.jpg', '2017-01-08 13:58:56'),
(948, 283, 'ppp.jpg', '2017-01-08 13:58:56'),
(956, 292, 'vfvfvfvfcvfvfvfvf.jpg', '2017-01-10 10:33:58'),
(957, 293, '129_700_Annual-Gathering-Performance-by-students-2.jpg', '2017-01-09 12:36:23'),
(990, 299, 'llll.jpg', '2017-01-10 05:12:15'),
(991, 300, 'df2416_filmedit_lrg.jpg', '2017-01-10 14:01:33'),
(992, 301, 'hny3.png', '2017-01-11 08:07:02'),
(1009, 306, '753c0e3b77b7756d1b69574075c744b9.gif', '2017-01-15 13:54:01'),
(1010, 306, 'download (2).jpg', '2017-01-15 13:54:01'),
(1011, 306, 'online-data-entry.jpg', '2017-01-15 13:54:01'),
(1012, 307, 'PicsArt_01-06-09.29.36.jpg', '2017-01-15 16:57:16'),
(1013, 307, 'IMG-20170112-WA0007.jpg', '2017-01-15 16:57:16'),
(1019, 309, 'bvvv.jpg', '2017-01-16 12:12:44'),
(1020, 310, '1481816592784.jpg', '2017-01-17 03:26:39'),
(1051, 318, 'IMG_20170123_122140.jpg', '2017-01-24 05:06:49'),
(1052, 318, 'IMG_20170123_121127.jpg', '2017-01-24 05:06:49'),
(1053, 318, 'IMG_20170123_121133.jpg', '2017-01-24 05:06:49'),
(1054, 318, 'IMG_20170123_121247.jpg', '2017-01-24 05:06:50'),
(1055, 318, 'IMG_20170123_121133.jpg', '2017-01-24 05:06:50'),
(1056, 318, 'IMG_20170123_122152.jpg', '2017-01-24 05:06:50'),
(1057, 318, 'IMG_20170123_121215.jpg', '2017-01-24 05:06:50'),
(1058, 319, 'IMG_20170124_181830.jpg', '2017-01-24 13:13:17'),
(1059, 319, 'IMG_20170124_181822.jpg', '2017-01-24 13:13:17'),
(1060, 320, 'IMG_20170125_114800.jpg', '2017-01-25 08:51:14'),
(1061, 320, 'IMG_20170125_114803.jpg', '2017-01-25 08:51:15'),
(1062, 320, 'IMG_20170125_113704.jpg', '2017-01-25 08:51:15'),
(1063, 320, 'IMG_20170125_113713.jpg', '2017-01-25 08:51:15'),
(1064, 320, 'IMG_20170125_114447.jpg', '2017-01-25 08:51:15'),
(1065, 320, 'IMG_20170125_114619.jpg', '2017-01-25 08:51:15'),
(1087, 324, 'WP_20161217_014.jpg', '2017-02-01 19:04:26'),
(1109, 329, 'IMG_20170131_173647.jpg', '2017-02-03 13:48:33'),
(1110, 329, 'IMG_20170131_173628.jpg', '2017-02-03 13:48:33'),
(1111, 329, 'IMG_20170131_173634.jpg', '2017-02-03 13:48:33'),
(1112, 329, 'IMG_20170131_173641.jpg', '2017-02-03 13:48:33'),
(1175, 340, 'IMG_20170208_191619.jpg', '2017-02-08 14:08:59'),
(1176, 340, 'IMG_20170208_191619.jpg', '2017-02-08 14:08:59'),
(1177, 341, 'IMG_20170208_191609.jpg', '2017-02-08 14:14:20'),
(1272, 361, 'IMG_20170304_112427.jpg', '2017-03-04 08:22:11'),
(1273, 361, 'IMG_20170304_112409.jpg', '2017-03-04 08:22:11'),
(1325, 366, 'Photo-0071.jpg', '2017-03-08 07:42:30'),
(1326, 366, 'Photo-0072.jpg', '2017-03-08 07:42:30'),
(1327, 374, 'Aqua_4.5E_20160706_114849.jpg', '2017-03-08 16:31:38'),
(1328, 374, 'Aqua_4.5E_20160706_114923.jpg', '2017-03-08 16:31:38'),
(1329, 374, 'Aqua_4.5E_20160706_114932.jpg', '2017-03-08 16:31:38'),
(1330, 374, 'Aqua_4.5E_20160706_115017.jpg', '2017-03-08 16:31:38'),
(1331, 375, 'IMG_20151227_172941.jpg', '2017-03-09 13:19:03'),
(1332, 375, 'IMG_20151227_172531.jpg', '2017-03-09 13:19:03'),
(1333, 375, 'IMG_20151227_172538.jpg', '2017-03-09 13:19:03'),
(1334, 375, 'IMG_20151227_172603.jpg', '2017-03-09 13:19:03'),
(1335, 375, 'IMG_20151227_172609.jpg', '2017-03-09 13:19:03'),
(1336, 375, 'IMG_20151227_172936.jpg', '2017-03-09 13:19:03'),
(1641, 434, 'IMG_20170429_155500.jpg', '2017-05-03 14:18:11'),
(1642, 434, 'IMG_20170429_155324.jpg', '2017-05-03 14:18:11'),
(1643, 434, 'IMG_20170429_155330.jpg', '2017-05-03 14:18:11'),
(1644, 434, 'IMG_20170429_155341.jpg', '2017-05-03 14:18:11'),
(1767, 462, 'IMG_20170524_110706.jpg', '2017-05-24 09:07:52'),
(1768, 462, 'IMG_20170524_110800.jpg', '2017-05-24 09:07:52'),
(1769, 462, 'IMG_20170524_110927.jpg', '2017-05-24 09:07:52'),
(1770, 462, 'IMG_20170524_110913.jpg', '2017-05-24 09:07:52'),
(1771, 462, 'IMG_20170524_110918.jpg', '2017-05-24 09:07:52'),
(1821, 472, 'special_offers01.png', '2017-05-28 11:14:40'),
(1870, 483, '01.jpg', '2017-06-03 05:33:34'),
(1871, 483, '02.jpg', '2017-06-03 05:33:34'),
(1872, 483, 'Architect Akshay thakre UV VC=1000.jpg', '2017-06-03 05:33:34'),
(1873, 483, 'AKSHAY THAKRE.jpg', '2017-06-03 05:33:34'),
(1874, 483, 'FINAL aKASHY.jpg', '2017-06-03 05:35:11'),
(1875, 483, 'IMG-20160130-WA0000.jpg', '2017-06-03 05:35:11'),
(1907, 489, 'IMG_20170614_132401_1.jpg', '2017-06-14 12:51:11'),
(1908, 489, 'IMG_20170614_132401.jpg', '2017-06-14 12:51:11'),
(1931, 494, '300(1).png', '2017-06-17 07:09:46'),
(1932, 494, 'hd1080.png', '2017-06-17 07:09:46'),
(1933, 494, 'index.png', '2017-06-17 07:09:46'),
(1934, 494, 'placeholder.jpg', '2017-06-17 07:09:46'),
(2181, 538, '1501052516262-2114012475.jpg', '2017-07-26 07:21:22'),
(2182, 538, '1501052582487904843665.jpg', '2017-07-26 07:21:22'),
(2183, 538, '1501052605356228985051.jpg', '2017-07-26 07:21:22'),
(2184, 538, '1501052627840-883952444.jpg', '2017-07-26 07:21:22'),
(2585, 624, '20170928_192939sss.jpg', '2017-10-01 05:33:03'),
(2586, 624, '20170928_192930mmmm.jpg', '2017-10-01 05:33:03'),
(2587, 625, '20170928_193003sssxx.jpg', '2017-10-01 05:35:23'),
(2588, 625, 'ddd.jpg', '2017-10-01 05:35:23'),
(2621, 634, 'PicsArt_12-12-12.17.03.jpg', '2017-12-17 14:22:10'),
(2622, 634, '11_09_2017_23_58_37_697efb7454463a58d469b5850c09780f_76z9ysl3b5.jpg', '2017-10-05 13:10:14'),
(2623, 634, 'abhinav-packers-and-movers-aurangabad-ho-aurangabad-maharashtra-29idx.jpg', '2017-10-05 13:10:14'),
(2624, 634, 'abhinav-packers-and-movers-aurangabad-ho-aurangabad-maharashtra-0p3sj.jpg', '2017-10-05 13:10:14'),
(2625, 634, 'abhinav-packers-and-movers-aurangabad-ho-aurangabad-maharashtra-7wv8g.jpg', '2017-10-05 13:10:14'),
(2626, 634, 'tanishka-packers-and-movers-cidco-colony-aurangabad-maharashtra-fyel.jpeg', '2017-10-05 13:10:14'),
(2627, 634, '06_furniture_moving.jpg', '2017-10-05 13:10:14'),
(2628, 634, 'packers-and-movers-in-pune-maharashtra.jpg', '2017-10-05 13:10:14'),
(2643, 637, 'IMG_20171007_091238_081.jpg', '2017-10-08 14:54:06'),
(2706, 652, '22407757_1766270970330803_1967643246_n.jpg', '2017-10-13 05:21:36'),
(2747, 663, '1.jpg', '2017-10-26 10:43:31'),
(2748, 663, '2.jpg', '2017-10-26 10:43:31'),
(2749, 663, '3.jpg', '2017-10-26 10:43:31'),
(2750, 663, '4.jpg', '2017-10-26 10:43:31'),
(2751, 663, '8.jpg', '2017-11-18 19:04:21'),
(2752, 663, '6.jpg', '2017-10-26 10:43:31'),
(2753, 663, '7.jpg', '2017-10-26 10:43:31'),
(2754, 663, '4.jpg', '2017-11-18 19:04:21'),
(2782, 670, '20171026_170226.jpg', '2017-10-28 10:33:26'),
(2783, 670, '20171026_170301.jpg', '2017-10-28 10:33:26'),
(2784, 670, '20171026_170315.jpg', '2017-10-28 10:33:26'),
(2785, 670, '20171026_170332.jpg', '2017-10-28 10:33:26'),
(2786, 670, '20171026_170431.jpg', '2017-10-28 10:33:26'),
(2787, 670, '20171026_170445.jpg', '2017-10-28 10:33:26'),
(2788, 670, '20171026_170455.jpg', '2017-10-28 10:33:26'),
(2789, 670, '20171026_170900.jpg', '2017-10-28 10:33:26'),
(2959, 708, 'PS_Hotel_KingRoom_new.jpg', '2017-11-04 11:04:08'),
(2976, 712, '23415956_1775666319391268_2028989918_n.jpg', '2017-11-07 06:39:27'),
(2983, 715, '23476819_1776441252647108_826012014_n.jpg', '2017-11-09 07:23:53'),
(2984, 716, 'indian-wedding-hd-background-wallpapers-16.jpg', '2017-11-09 13:52:29'),
(2985, 716, '20171109_182921MNNNNN.jpg', '2017-11-09 13:52:29'),
(2986, 716, 'DT_hands01_27.jpg', '2017-11-09 13:52:29'),
(2987, 716, 'membership.jpg', '2017-11-09 13:52:29'),
(3022, 724, '23574474_1778540092437224_1203836736_n (1).jpg', '2017-11-14 13:41:59'),
(3066, 735, '1.jpg', '2017-11-18 19:03:13'),
(3067, 735, '2.jpg', '2017-11-18 19:03:13'),
(3068, 735, '4.jpg', '2017-11-18 19:03:13'),
(3069, 735, '5.jpg', '2017-11-18 19:03:13'),
(3070, 735, '7.jpg', '2017-11-18 19:03:13'),
(3071, 735, '8.jpg', '2017-11-18 19:03:13'),
(3072, 735, '9.jpg', '2017-11-18 19:03:13'),
(3073, 735, '6.jpg', '2017-11-18 19:03:13'),
(3201, 763, 'home_tiffin_pune.jpg', '2017-12-04 13:45:17'),
(3202, 763, 'tiffin-service-250x250.png', '2017-12-04 13:45:17'),
(3203, 764, 'IMG_20170215_110823.jpg', '2017-12-22 12:43:48'),
(3204, 764, 'IMG_20170215_110823.jpg', '2017-12-22 12:43:48'),
(3205, 765, 'sheesham-shisham-solid-wood-wooden-furniture-shekhawati-brass-dining-table_8__1.jpg', '2017-12-04 13:56:40'),
(3206, 765, '59ca2c2a7d60c.png', '2017-12-04 13:56:40'),
(3207, 766, 'aluminum-glass-work-500x500.jpg', '2017-12-04 14:03:43'),
(3208, 766, '01.jpg', '2017-12-04 14:03:43'),
(3209, 767, 'tiffin-service-250x250.png', '2017-12-04 14:09:30'),
(3210, 768, 'cccc.jpg', '2017-12-07 11:09:13'),
(3232, 773, 'dish tv.jpg', '2017-12-07 13:13:16'),
(3238, 778, 'aqua-point-sales-and-services-virar-west-palghar-water-purifier-dealers-2rnvt55.jpg', '2017-12-07 14:26:27'),
(3239, 778, 'DrAquaguard-pani-ka-doctor-ak_1473269846-1444817695.jpeg', '2017-12-22 12:51:09'),
(3240, 778, 'my-eco-1-450x254.jpg', '2017-12-22 12:51:09'),
(3241, 779, 'AAEAAQAAAAAAAAr4AAAAJGE5YzI4MThhLWEyMGYtNGM2YS05MjJiLTg5Y2E5NDg2ZDUzZA.jpg', '2017-12-08 06:02:00'),
(3242, 781, 'professionals (1).jpg', '2017-12-08 06:17:01'),
(3243, 782, '02b.jpg', '2017-12-08 06:43:02'),
(3244, 782, '631675124.jpg', '2017-12-08 06:43:02'),
(3245, 783, 'new-brijwasi-caterers-and-krishna-tent-house-dwarka-delhi-b638c.jpg', '2017-12-08 07:03:43'),
(3246, 783, 'slider-img2.jpg', '2017-12-08 07:03:43'),
(3247, 784, 'Computer-Services2.jpg', '2017-12-23 07:07:06'),
(3248, 784, 'pc-laptop-repair.jpg', '2017-12-08 07:11:15'),
(3249, 785, 'images (1).jpg', '2017-12-08 07:31:45'),
(3250, 786, '554.jpg', '2017-12-22 14:21:40'),
(3251, 787, 'cropped_11052779_1684399917_m23q_113667201672x25081-1500x529.jpg', '2017-12-08 09:59:01'),
(3252, 787, 'download (3).jpg', '2017-12-08 09:59:01'),
(3253, 787, 'download (4).jpg', '2017-12-08 09:59:01'),
(3254, 788, 'fbh printer 001b.jpg', '2017-12-08 10:20:05'),
(3255, 788, 'pc-laptop-repair.jpg', '2017-12-08 10:20:05'),
(3256, 789, '5596-man-tga-40400-non-potable-water-tank-6x4-1-.jpg', '2017-12-08 10:33:43'),
(3257, 789, 'th.jpg', '2017-12-22 12:52:53'),
(3258, 789, 'water tank.jpg', '2017-12-08 10:33:43'),
(3259, 790, 'about-lic.jpg', '2017-12-08 12:52:42'),
(3260, 790, 'image_313561.jpg', '2017-12-08 12:52:42'),
(3261, 791, 'IMG_9524.jpg', '2017-12-09 06:40:48'),
(3262, 791, '12x36 (5).jpg', '2017-12-09 06:40:48'),
(3263, 791, 'IMG_9432.jpg', '2017-12-09 06:40:48'),
(3264, 791, '12x36 (14).jpg', '2017-12-09 06:40:48'),
(3272, 794, 'golden-purple-unique-wedding-cards-1024x683.jpg', '2017-12-09 14:50:52'),
(3273, 794, 'images.jpg', '2017-12-09 14:50:52'),
(3318, 803, 'Electrical Work Tenders.jpg', '2017-12-11 07:16:44'),
(3319, 803, '205384.jpg', '2017-12-11 07:16:44'),
(3320, 804, 'community_development.jpg', '2017-12-11 07:34:24'),
(3321, 804, 'default-cooking-gas-agencies-8.jpg', '2017-12-11 07:34:24'),
(3322, 805, 'sri-venkateswara-h-p-gas-agency-kushaiguda-hyderabad-gas-agencies-461yhwl.jpg', '2017-12-11 07:45:25'),
(3323, 805, 'aahilya-hp-gas-gramin-vitarak-aurangabad-ho-aurangabad-maharashtra-cooking-gas-agencies-hp-zklhoq5.jpg', '2017-12-11 07:45:25'),
(3324, 806, 'lpg-filling-carousel-sikandrabad-hyderabad-india-asia-F70WYH.jpg', '2017-12-11 07:52:08'),
(3325, 806, 'raj-gas-agencies-cuddalore-ho-cuddalore-cooking-gas-agencies-hp-zxq3rio.jpg', '2017-12-11 07:52:09'),
(3326, 807, 'community_development.jpg', '2017-12-11 08:00:59'),
(3327, 807, 'pawan-gas-service-osmanpura-aurangabad-maharashtra-gas-agencies-exnwzvg.jpg', '2017-12-11 08:00:59'),
(3328, 808, 'sambhaji-bharat-gas-aurangabad-maharashtra-zxbnk.jpg', '2017-12-11 10:02:24'),
(3329, 808, 'sambhaji-bharat-gas-shivaji-nagar-aurangabad-maharashtra-76ubi.jpg', '2017-12-11 10:02:24'),
(3330, 809, 'sambhaji-bharat-gas-shivaji-nagar-aurangabad-maharashtra-76ubi.jpg', '2017-12-11 10:09:15'),
(3331, 809, '925612992s.jpg', '2017-12-23 06:41:03'),
(3332, 810, '925612992s.jpg', '2017-12-11 10:14:22'),
(3333, 810, 'lpg-cylinders-shutterstock.jpg', '2017-12-11 10:14:22'),
(3334, 811, 'lpg-cylinders-shutterstock.jpg', '2017-12-11 10:26:01'),
(3335, 811, 'Gas-cylindr-pic-1497202007_835x547.jpg', '2017-12-11 10:26:01'),
(3336, 812, '1471275108436226900.jpg', '2017-12-11 10:33:40'),
(3337, 812, 'pawan-gas-service-osmanpura-aurangabad-maharashtra-gas-agencies-exnwzvg.jpg', '2017-12-11 10:33:40'),
(3353, 818, 'lpg-cylinders-shutterstock.jpg', '2017-12-23 06:38:51'),
(3354, 818, 'Indane-LPG-Gas-Cylinder-170813 (1).jpg', '2017-12-13 06:29:17'),
(3355, 819, '205384.jpg', '2017-12-22 14:19:27'),
(3356, 819, 'shutterstock_1906680.jpg', '2017-12-13 06:58:02'),
(3357, 820, 'joynet-broadband-aurangabad-ho-aurangabad-maharashtra-internet-service-providers-tv2evkj.jpg', '2017-12-13 07:05:32'),
(3358, 820, 'jau98pp.jpg', '2017-12-13 07:05:32'),
(3374, 823, 'internet.jpeg', '2017-12-16 13:20:20'),
(3375, 823, 'internet.jpeg', '2017-12-16 13:20:20'),
(3376, 823, 'internet.jpeg', '2017-12-13 09:50:29'),
(3377, 824, 'Mercedes-Benz-Driving-Academy-Student-and-Coach.jpg', '2017-12-13 11:41:49'),
(3378, 824, 'volvo-autonomous-car.jpg', '2017-12-13 11:41:49'),
(3379, 825, '5a2de484f11b9eabd35648d2b91917c8--driving-school-driving-test.jpg', '2017-12-13 12:09:08'),
(3380, 825, 'volvo-autonomous-car.jpg', '2017-12-23 07:15:09'),
(3381, 825, 'Mercedes-Benz-Driving-Academy-Student-and-Coach.jpg', '2017-12-13 12:09:08'),
(3382, 826, 'kartik-motor-driving-school-satara-parisar-aurangabad-maharashtra-f9abh.jpg', '2017-12-13 12:18:35'),
(3383, 826, 'volvo-autonomous-car.jpg', '2017-12-13 12:18:35'),
(3384, 827, 'Mercedes-Benz-Driving-Academy-Student-and-Coach.jpg', '2017-12-13 12:24:54'),
(3385, 827, 'volvo-autonomous-car.jpg', '2017-12-13 12:24:54'),
(3402, 831, 'aa-250x250.png', '2017-12-14 09:33:02'),
(3403, 831, 'yoga-class-250x250.jpg', '2017-12-14 09:33:02'),
(3404, 832, 'all-the-best-fitness-center-and-nutrition-club-cidco-aurangabad-maharashtra-3b1pf.jpg', '2017-12-14 09:43:56'),
(3405, 832, 'yoga-class-250x250.jpg', '2017-12-14 09:43:56'),
(3406, 833, 'auto-dealer-safety.jpg', '2017-12-14 10:34:22'),
(3407, 833, 'cars-7591.jpg', '2017-12-14 10:34:22'),
(3408, 834, '4-big.jpg', '2017-12-14 14:29:30'),
(3409, 834, 'punjabi-thali-indian-food-wallpaper-600x375-98.jpg', '2017-12-14 14:29:30'),
(3410, 835, 'Dhaba_saket_4.jpg', '2017-12-14 14:39:51'),
(3411, 835, 'maratha-samrat.jpg', '2017-12-14 14:39:51'),
(3412, 836, 'hotel-maratha-shahi-hadapsar-pune-24-hours-home-delivery-restaurants-2mexj0p.jpg', '2017-12-14 14:45:09'),
(3413, 836, 'hotel-maratha-shahi-hadapsar-pune-24-hours-home-delivery-restaurants-3tmzplc.jpg', '2017-12-14 14:45:09'),
(3427, 840, '20171214_104821.jpg', '2017-12-16 05:07:14'),
(3428, 841, 'caterers_10.jpg', '2017-12-16 05:15:25'),
(3429, 841, 'Sumati-Catering-Services-Chennai.jpg', '2017-12-16 05:15:25'),
(3430, 842, 'skin-fade-pompadour-2.jpg', '2017-12-16 05:45:53'),
(3431, 842, 'unnamed.jpg', '2017-12-16 05:45:30'),
(3432, 842, '512.jpg', '2017-12-23 06:37:05'),
(3433, 842, 'unnamed.jpg', '2017-12-16 05:44:18'),
(3434, 843, 'IMG_8540.jpg', '2017-12-16 13:14:02'),
(3435, 844, 'a-img923-6866-az9iqi-250x250.jpg', '2017-12-16 06:03:04'),
(3436, 844, 'download.jpg', '2017-12-16 06:03:04'),
(3437, 845, 'hqdefault.jpg', '2017-12-16 10:21:12'),
(3438, 845, 'mqdefault.jpg', '2017-12-16 10:21:12'),
(3441, 848, '00.jpg', '2017-12-16 10:41:59'),
(3442, 848, '...jpg', '2017-12-16 10:42:00'),
(3443, 849, 'calligraphy-570x428.jpg', '2017-12-16 10:53:36'),
(3444, 849, '7555.jpg', '2017-12-23 07:11:29'),
(3445, 850, 'images (1).jpg', '2017-12-16 12:05:01'),
(3446, 850, 'images (2).jpg', '2017-12-16 12:05:01'),
(3449, 843, 'a-m-fabricators-image-4.jpg', '2017-12-16 13:14:02'),
(3451, 854, '24.jpg', '2017-12-18 06:33:19'),
(3454, 856, 'a-to-z-service-bhosari-gaonthan-pune-aadhaar-card-agents-9npnsi.jpg', '2017-12-18 10:47:28'),
(3455, 856, 'images.png', '2017-12-23 06:33:55'),
(3456, 857, 'unnamed (1).png', '2017-12-19 05:18:32'),
(3457, 857, 'RamchandraHall-Aurangabad-MH.jpeg', '2017-12-19 05:18:32'),
(3458, 857, 'unnamed.png', '2017-12-19 05:18:32'),
(3459, 858, '17.jpg', '2017-12-19 05:27:43'),
(3460, 858, 'ICan-Learning-Centre-SPOKEN-ENGLISH-ChIJjTfNn-N4AjoRbNFmWjT-VL0-ts-20170328-162001_0.png', '2017-12-19 05:27:43'),
(3461, 859, 'download.png', '2017-12-22 14:17:41'),
(3462, 859, 'download.png', '2017-12-19 05:42:11'),
(3463, 860, '4152541994_812a98e87a_b.jpg', '2017-12-19 05:56:37'),
(3464, 860, 'maxresdefault.jpg', '2017-12-19 05:56:37'),
(3465, 861, 'Download-WILL-Deed-Format-Template-Draft-in-India-pic-Will-Deed-Vs-Settlement-Deed-Vs-Relinquishment-Deed-pic.jpg', '2017-12-19 06:08:21'),
(3466, 861, 'filing-of-it-returns-1995017.jpg', '2017-12-19 06:08:21'),
(3467, 862, '68309570.jpg', '2017-12-19 06:19:15'),
(3468, 862, 'ac_hotel_phototour03.jpg', '2017-12-19 06:19:15'),
(3469, 862, 'ac_hotel_phototour03.jpg', '2017-12-22 11:31:15'),
(3472, 864, 'sanjaytravelsonline.com_bus7.jpg', '2017-12-19 06:39:57'),
(3473, 864, 'sanjaytravels.com_bus2.jpg', '2017-12-19 06:39:14'),
(3474, 864, 'jhnopfhiouoof.jpg', '2017-12-19 06:39:57'),
(3475, 865, 'handloom-carpets-250x250.jpg', '2017-12-19 07:22:48'),
(3476, 865, 'kashmiri-silk-carpets-500x500.jpg', '2017-12-19 07:22:48'),
(3477, 866, 'download.jpg', '2017-12-19 07:38:13'),
(3478, 866, 'mineral-water-suppliers-akkayyapalem-visakhapatnam-mineral-water-dealers-4a4y63k.jpg', '2017-12-19 07:38:13'),
(3482, 868, 'DDAD.jpg', '2017-12-19 07:55:09'),
(3483, 868, 'wooden-chair-repairing-service-250x250.jpg', '2017-12-19 07:54:37'),
(3492, 870, 'r1.png', '2017-12-19 12:15:31'),
(3493, 870, 'r2.jpg', '2017-12-19 12:15:31'),
(3494, 870, 'r3.jpg', '2017-12-19 12:15:31'),
(3495, 871, 'r1.png', '2017-12-19 12:18:49'),
(3496, 871, 'r2.jpg', '2017-12-19 12:18:49'),
(3497, 871, 'r3.jpg', '2017-12-19 12:18:49'),
(3498, 871, 'sketch.png', '2017-12-19 12:18:49'),
(3499, 871, 'smiley-face-wallpaper-12337-12724-hd-wallpapers.jpg', '2017-12-19 12:18:49'),
(3566, 887, 'IMG-20171224-WA0088.jpg', '2017-12-24 14:00:07'),
(3567, 887, 'IMG-20171224-WA0089.jpg', '2017-12-24 14:00:07'),
(3568, 887, 'IMG-20171224-WA0087.jpg', '2017-12-24 14:00:07'),
(3569, 887, 'IMG-20171224-WA0086.jpg', '2017-12-24 14:00:07'),
(3570, 888, 'download (3).jpg', '2017-12-27 05:01:01'),
(3571, 888, 'download (5).jpg', '2017-12-27 05:01:01'),
(3572, 888, 'download (4).jpg', '2017-12-27 05:01:01'),
(3751, 936, 'Factors-to-Consider-When-Painting-Your-House-Featured-Image.png', '2018-01-28 07:14:23'),
(3752, 936, 'Factors-to-Consider-When-Painting-Your-House-Featured-Image (1).png', '2018-01-28 07:12:28'),
(3753, 936, '411.jpg', '2018-01-28 07:13:31'),
(3754, 937, 'Cosmetic-Dentistry3.jpg', '2018-01-28 07:24:27'),
(3755, 937, 'waynepdc.com_.jpg', '2018-01-28 07:24:27'),
(3758, 939, '2015-10-17 18.49.20.jpg', '2018-01-29 04:36:10'),
(3759, 939, '2015-10-17 18.49.48.jpg', '2018-01-29 04:36:10'),
(3760, 939, '2015-10-17 18.50.05.jpg', '2018-01-29 04:36:10'),
(3761, 939, '2015-10-17 18.50.18.jpg', '2018-01-29 04:36:10'),
(3762, 939, '2015-10-17 18.50.51.jpg', '2018-01-29 04:36:10'),
(3763, 939, '2015-10-17 18.51.11.jpg', '2018-01-29 04:36:10'),
(3764, 939, '2015-10-17 18.51.24.jpg', '2018-01-29 04:36:10'),
(3765, 940, 'IMG_20151009_132622 - Copy.jpg', '2018-01-29 04:46:56'),
(3766, 940, 'IMG_20151009_132631.jpg', '2018-01-29 04:46:56'),
(3767, 940, 'IMG_20151009_132706.jpg', '2018-01-29 04:46:56'),
(3768, 940, 'IMG_20151009_132722.jpg', '2018-01-29 04:46:56'),
(3847, 954, 'PA_4.158151445_std.jpg', '2018-02-03 09:35:35'),
(3848, 954, 'soundsystemspkrwall.jpg', '2018-02-03 09:35:35'),
(3849, 955, 'slider_img_2.jpg', '2018-02-03 09:45:28'),
(3850, 955, 'Tours-And-Travels-In-Amravati-Mahalaxmi.png', '2018-02-03 09:45:28'),
(3851, 956, 'soundsystemspkrwall.jpg', '2018-02-03 09:51:15'),
(3852, 956, 'PA_4.158151445_std.jpg', '2018-02-03 09:51:15'),
(3861, 960, 'image_1907.jpg', '2018-02-06 14:54:51'),
(3876, 963, 'videocon-hd.png', '2018-02-08 14:19:04'),
(3877, 963, 'dth_1428869f.jpg', '2018-02-08 14:19:04'),
(3878, 964, 'event-and-fetewale-and-pagadi-wala-ak_LWBP45757926-1514119721.png', '2018-02-10 06:08:15'),
(3879, 964, 'event-and-fetewale-and-pagadi-wala-ak_LWBP447294343-1514119721.png', '2018-02-10 06:08:15'),
(3880, 965, '2.jpg', '2018-02-10 11:10:33'),
(3914, 973, 'IMG-20180219-WA0142.jpg', '2018-02-21 08:31:54'),
(3915, 973, 'IMG-20180219-WA0169.jpg', '2018-02-21 08:31:54'),
(3916, 973, 'IMG_20180219_152812_278.jpg', '2018-02-21 08:31:54'),
(3917, 973, 'IMG_20180219_153237_327.jpg', '2018-02-21 08:31:54'),
(3918, 973, 'IMG-20180219-WA0123.jpg', '2018-02-21 08:31:54'),
(3919, 973, 'IMG-20170707-WA0003.jpg', '2018-02-21 08:31:54'),
(3920, 973, 'IMG-20170702-WA0040.jpg', '2018-02-21 08:31:54'),
(3921, 973, 'IMG_20180219_153625_626.jpg', '2018-02-21 08:31:54'),
(4040, 998, 'NEED MONEY.jpg', '2018-03-12 20:20:34'),
(4041, 999, '1436561913_loanoffer.jpg', '2018-03-12 20:30:05'),
(4048, 1002, 'Hydrangeas.jpg', '2018-03-20 09:13:10'),
(4087, 1009, 'dec.jpg', '2018-04-05 12:22:22'),
(4111, 1016, '44.jpg', '2018-04-12 22:07:29'),
(4112, 1016, 'dhaa.jpg', '2018-04-12 22:07:29'),
(4151, 1025, 'IMG20180425105426.jpg', '2018-04-25 12:59:35'),
(4152, 1025, 'IMG20180425105436.jpg', '2018-04-25 12:59:35'),
(4153, 1025, 'IMG20180425172523.jpg', '2018-04-25 12:59:35'),
(4200, 1037, '20180528_114942.jpg', '2018-05-28 08:14:58'),
(4201, 1037, '20180528_114341.jpg', '2018-05-28 08:14:58'),
(4202, 1037, '20180528_114344.jpg', '2018-05-28 08:14:58'),
(4203, 1037, '20180528_114353.jpg', '2018-05-28 08:14:58'),
(4275, 1052, '20180602_134027.jpg', '2018-06-05 05:48:37'),
(4276, 1052, '20180602_133406.jpg', '2018-06-05 05:48:37'),
(4277, 1052, '20180602_133415.jpg', '2018-06-05 05:48:37'),
(4278, 1052, '20180602_133422.jpg', '2018-06-05 05:48:37'),
(4279, 1052, '20180602_133442.jpg', '2018-06-05 05:48:37'),
(4280, 1052, '20180602_133447.jpg', '2018-06-05 05:48:37'),
(4341, 1062, 'Untitled 12346e.png', '2018-06-09 07:31:53'),
(4342, 1063, 'Food Photography.jpg', '2018-06-12 05:52:45'),
(4343, 1063, 'Food Photography 2.jpg', '2018-06-12 05:52:45'),
(4344, 1063, 'Food Photography 1.jpg', '2018-06-12 05:52:45'),
(4351, 1065, '11.jpg', '2018-06-13 04:53:50'),
(4352, 1066, 'IMG-20180613-WA0022.jpg', '2018-06-13 07:29:06'),
(4353, 1066, 'IMG-20180613-WA0013.jpg', '2018-06-13 07:29:06'),
(4354, 1066, 'IMG-20180613-WA0014.jpg', '2018-06-13 07:29:06'),
(4355, 1066, 'IMG-20180613-WA0015.jpg', '2018-06-13 07:29:06'),
(4356, 1066, 'IMG-20180613-WA0018.jpg', '2018-06-13 07:29:06'),
(4357, 1066, 'IMG-20180613-WA0019.jpg', '2018-06-13 07:29:06'),
(4358, 1066, 'IMG-20180613-WA0020.jpg', '2018-06-13 07:29:06'),
(4359, 1066, 'IMG-20180613-WA0021.jpg', '2018-06-13 07:29:06'),
(4398, 1076, 'IMG_20150107_154108.jpg', '2018-06-15 09:02:39'),
(4399, 1076, 'IMG_20150107_154423.jpg', '2018-06-15 09:02:39'),
(4400, 1076, 'IMG_20150107_153643.jpg', '2018-06-15 09:02:39'),
(4401, 1076, 'IMG_20150107_153733.jpg', '2018-06-15 09:02:39'),
(4402, 1076, 'IMG_20150107_153745.jpg', '2018-06-15 09:02:39'),
(4403, 1076, 'IMG_20150107_153917.jpg', '2018-06-15 09:02:39'),
(4404, 1076, 'IMG_20150107_153926.jpg', '2018-06-15 09:02:39'),
(4418, 1080, 'th_patrick_combo_base.jpg', '2018-06-20 08:53:48'),
(4419, 1080, 'offer8.jpg', '2018-06-20 08:53:48'),
(4420, 1080, 'turtle-exclusive-showroom-ranchi-gpo-ranchi-readymade-garment-retailers-2dpakpd.jpg', '2018-06-20 08:53:48'),
(4421, 1080, 'tropical-collection.jpg', '2018-06-20 08:53:48'),
(4445, 1087, '20180701_164214.jpg', '2018-07-01 12:28:01'),
(4446, 1087, '20180701_163417.jpg', '2018-07-01 12:28:01'),
(4447, 1087, '20180701_163438.jpg', '2018-07-01 12:28:01'),
(4448, 1087, '20180701_163443.jpg', '2018-07-01 12:28:01'),
(4449, 1087, '20180701_163502.jpg', '2018-07-01 12:28:01'),
(4450, 1087, '20180701_163831.jpg', '2018-07-01 12:28:01'),
(4451, 1087, '20180701_163843.jpg', '2018-07-01 12:28:01'),
(4459, 1089, '20180702_135150.jpg', '2018-07-02 11:03:35'),
(4460, 1089, '20180702_134036.jpg', '2018-07-02 11:03:35'),
(4461, 1089, '20180702_134050.jpg', '2018-07-02 11:03:35'),
(4462, 1089, '20180702_134111.jpg', '2018-07-02 11:03:35'),
(4488, 1094, '20180705_105658.jpg', '2018-07-05 08:49:01'),
(4489, 1094, '20180705_105206.jpg', '2018-07-05 08:49:01'),
(4490, 1094, '20180705_105410.jpg', '2018-07-05 08:49:01'),
(4529, 1102, '20180721_145316.jpg', '2018-07-21 10:23:02'),
(4530, 1102, '20180721_145012.jpg', '2018-07-21 10:23:02'),
(4531, 1102, '20180721_145029.jpg', '2018-07-21 10:23:02'),
(4532, 1102, '20180721_145038.jpg', '2018-07-21 10:23:02'),
(4533, 1102, '20180721_145108.jpg', '2018-07-21 10:23:02'),
(4535, 1104, '412.jpg', '2018-07-23 08:19:39'),
(4536, 1105, '123.jpg', '2018-07-23 08:22:27'),
(4538, 1107, 'IMG_20160907_144508.jpg', '2018-07-26 10:50:50'),
(4539, 1107, 'IMG_20160907_143836.jpg', '2018-07-26 10:50:50'),
(4540, 1107, 'IMG_20160907_143843.jpg', '2018-07-26 10:50:50'),
(4541, 1107, 'IMG_20160907_143920.jpg', '2018-07-26 10:50:50'),
(4542, 1107, 'IMG_20160907_143933.jpg', '2018-07-26 10:50:50'),
(4543, 1107, 'IMG_20160907_144017.jpg', '2018-07-26 10:50:50'),
(4544, 1107, 'IMG_20160907_144023.jpg', '2018-07-26 10:50:50'),
(4549, 1109, '20180727_115127.jpg', '2018-07-28 05:05:45'),
(4550, 1109, '20180727_115137.jpg', '2018-07-28 05:05:45'),
(4551, 1109, '20180727_115148.jpg', '2018-07-28 05:05:45'),
(4552, 1109, '20180727_115209.jpg', '2018-07-28 05:05:45'),
(4553, 1109, '20180727_115217.jpg', '2018-07-28 05:05:45'),
(4554, 1110, '20180729_115806.jpg', '2018-07-29 06:59:22'),
(4555, 1110, '20180729_115832.jpg', '2018-07-29 06:59:22'),
(4556, 1110, '20180729_115852.jpg', '2018-07-29 06:59:22'),
(4562, 1112, '20180728_160314.jpg', '2018-07-29 09:41:59'),
(4563, 1112, '20180729_144304.jpg', '2018-07-29 09:41:59'),
(4564, 1112, '20180729_144313.jpg', '2018-07-29 09:41:59'),
(4565, 1112, '20180729_144323.jpg', '2018-07-29 09:41:59'),
(4566, 1112, '20180729_144328.jpg', '2018-07-29 09:41:59'),
(4567, 1113, '20180605_180359.jpg', '2018-07-31 05:37:34'),
(4568, 1113, '20180605_181213.jpg', '2018-07-31 05:37:34'),
(4569, 1113, '20180605_181230.jpg', '2018-07-31 05:37:34'),
(4570, 1113, '20180605_181253.jpg', '2018-07-31 05:37:34'),
(4571, 1113, '20180605_181332.jpg', '2018-07-31 05:37:34'),
(4572, 1113, '20180605_181343.jpg', '2018-07-31 05:37:34'),
(4573, 1113, '20180605_181407.jpg', '2018-07-31 05:37:34'),
(4579, 1115, '20180802_103944.jpg', '2018-08-02 13:40:11'),
(4580, 1115, '20180802_103820.jpg', '2018-08-02 13:40:11'),
(4581, 1115, '20180802_103833.jpg', '2018-08-02 13:40:11'),
(4582, 1115, '20180802_103839.jpg', '2018-08-02 13:40:11'),
(4583, 1115, '20180802_103849.jpg', '2018-08-02 13:40:11'),
(4584, 1115, '20180802_103856.jpg', '2018-08-02 13:40:11'),
(4585, 1116, '20180804_113117.jpg', '2018-08-04 07:41:05'),
(4586, 1116, '20180804_112325.jpg', '2018-08-04 07:41:05'),
(4587, 1116, '20180804_112333.jpg', '2018-08-04 07:41:05'),
(4588, 1116, '20180804_112338.jpg', '2018-08-04 07:41:05'),
(4589, 1116, '20180804_112343.jpg', '2018-08-04 07:41:05'),
(4590, 1116, '20180804_112355.jpg', '2018-08-04 07:41:05'),
(4591, 1117, '20180804_114738.jpg', '2018-08-04 07:57:49'),
(4592, 1117, '20180804_114645.jpg', '2018-08-04 07:57:49'),
(4593, 1117, '20180804_114650.jpg', '2018-08-04 07:57:49'),
(4594, 1117, '20180804_114701.jpg', '2018-08-04 07:57:49'),
(4610, 1122, 'indexwert.jpg', '2018-08-07 03:41:25'),
(4621, 1125, '20180811_113331.jpg', '2018-08-11 06:30:08'),
(4622, 1125, '20180811_113339.jpg', '2018-08-11 06:30:08'),
(4623, 1125, '20180811_113346.jpg', '2018-08-11 06:30:08'),
(4624, 1125, '20180811_113839.jpg', '2018-08-11 06:30:08'),
(4625, 1126, '20180811_113839.jpg', '2018-08-11 06:39:37'),
(4626, 1126, '20180811_113452.jpg', '2018-08-11 06:39:37'),
(4627, 1126, '20180811_113501.jpg', '2018-08-11 06:39:37'),
(4628, 1126, '20180811_113511.jpg', '2018-08-11 06:39:37'),
(4629, 1127, '20180812_121226.jpg', '2018-08-12 07:02:50'),
(4630, 1127, '20180812_121236.jpg', '2018-08-12 07:02:50'),
(4631, 1127, '20180812_121241.jpg', '2018-08-12 07:02:50'),
(4632, 1127, '20180812_121245.jpg', '2018-08-12 07:02:50'),
(4633, 1127, '20180812_121251.jpg', '2018-08-12 07:02:50'),
(4634, 1128, '20180812_201151.jpg', '2018-08-14 06:25:51'),
(4635, 1128, '20180812_200953.jpg', '2018-08-14 06:25:51'),
(4636, 1128, '20180812_201001.jpg', '2018-08-14 06:25:51'),
(4637, 1128, '20180812_201008.jpg', '2018-08-14 06:25:51'),
(4638, 1128, '20180812_201018.jpg', '2018-08-14 06:25:51'),
(4639, 1128, '20180812_201044.jpg', '2018-08-14 06:25:51'),
(4640, 1129, '20180814_105103.jpg', '2018-08-14 06:39:26'),
(4641, 1129, '20180814_104623.jpg', '2018-08-14 06:39:26'),
(4642, 1129, '20180814_104646.jpg', '2018-08-14 06:39:26'),
(4643, 1129, '20180814_104728.jpg', '2018-08-14 06:39:26'),
(4644, 1129, '20180814_104800.jpg', '2018-08-14 06:39:26'),
(4645, 1129, '20180814_104807.jpg', '2018-08-14 06:39:26'),
(4646, 1129, '20180814_104814.jpg', '2018-08-14 06:39:26'),
(4647, 1129, '20180814_104829.jpg', '2018-08-14 06:39:26'),
(4648, 1130, '20180814_111655.jpg', '2018-08-14 06:47:50'),
(4649, 1130, '20180814_111701.jpg', '2018-08-14 06:47:50'),
(4650, 1130, '20180814_111704.jpg', '2018-08-14 06:47:50'),
(4651, 1130, '20180814_111731.jpg', '2018-08-14 06:47:50'),
(4652, 1130, '20180814_111739.jpg', '2018-08-14 06:47:50'),
(4653, 1130, '20180814_111753.jpg', '2018-08-14 06:47:50'),
(4654, 1130, '20180814_111803.jpg', '2018-08-14 06:47:50'),
(4655, 1130, '20180814_112152.jpg', '2018-08-14 06:47:50'),
(4656, 1131, '20180817_132659.jpg', '2018-08-17 08:15:09'),
(4657, 1131, '20180817_132705.jpg', '2018-08-17 08:15:09'),
(4658, 1131, '20180817_132718.jpg', '2018-08-17 08:15:09'),
(4659, 1131, '20180817_132756.jpg', '2018-08-17 08:15:09'),
(4660, 1132, '29138419_1837289239895642_1892125939_n.jpg', '2018-08-22 10:29:32'),
(4661, 1132, '20180825_151245.jpg', '2018-08-26 05:25:03'),
(4662, 1132, '20180825_151252.jpg', '2018-08-26 05:25:03'),
(4663, 1132, '20180825_151257.jpg', '2018-08-26 05:25:03'),
(4664, 1132, '20180825_151304.jpg', '2018-08-26 05:25:03'),
(4665, 1132, '20180825_151317.jpg', '2018-08-26 05:25:03'),
(4666, 1133, 'IMG_20160106_125912.jpg', '2018-08-22 10:47:54'),
(4667, 1133, 'IMG_20160106_125929.jpg', '2018-08-22 10:47:54'),
(4668, 1133, 'IMG_20160106_125941.jpg', '2018-08-22 10:47:54'),
(4669, 1133, 'IMG_20160106_125959.jpg', '2018-08-22 10:47:54'),
(4670, 1133, 'IMG_20160106_130010.jpg', '2018-08-22 10:47:54'),
(4671, 1133, 'IMG_20160106_130022.jpg', '2018-08-22 10:47:54'),
(4672, 1133, 'IMG_20160106_130030.jpg', '2018-08-22 10:47:54'),
(4673, 1134, 'IMG_20160529_101937.jpg', '2018-08-23 13:31:06'),
(4674, 1134, 'IMG_20160529_101431.jpg', '2018-08-23 13:31:06'),
(4675, 1134, 'IMG_20160529_101440.jpg', '2018-08-23 13:31:06'),
(4676, 1134, 'IMG_20160529_101516.jpg', '2018-08-23 13:31:06'),
(4677, 1134, 'IMG_20160529_101526.jpg', '2018-08-23 13:31:06'),
(4678, 1134, 'IMG_20160529_101602.jpg', '2018-08-23 13:31:06'),
(4679, 1134, 'IMG_20160529_101610.jpg', '2018-08-23 13:31:06'),
(4680, 1132, '20180825_151343.jpg', '2018-08-26 05:25:03'),
(4681, 1135, 'IMG-20180827-WA0008.jpg', '2018-08-28 07:39:01'),
(4682, 1135, 'IMG-20180827-WA0009.jpg', '2018-08-28 07:39:01'),
(4683, 1135, 'IMG-20180827-WA0010.jpg', '2018-08-28 07:39:01'),
(4684, 1135, 'IMG-20180827-WA0011.jpg', '2018-08-28 07:39:01'),
(4685, 1135, 'IMG-20180827-WA0012.jpg', '2018-08-28 07:39:01'),
(4686, 1135, 'IMG-20180827-WA0013.jpg', '2018-08-28 07:39:01'),
(4687, 1135, 'IMG-20180827-WA0014.jpg', '2018-08-28 07:39:01'),
(4688, 1136, '20180828_111310.jpg', '2018-08-28 08:07:37'),
(4689, 1136, '20180828_110948.jpg', '2018-08-28 08:07:37'),
(4690, 1136, '20180828_110953.jpg', '2018-08-28 08:07:37'),
(4691, 1137, '20180819_120731.jpg', '2018-08-28 09:30:20'),
(4692, 1137, '20180819_120741.jpg', '2018-08-28 09:30:20'),
(4693, 1137, '20180819_120747.jpg', '2018-08-28 09:30:20'),
(4694, 1137, '20180819_120933.jpg', '2018-08-28 09:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `property_post`
--

CREATE TABLE `property_post` (
  `pid` int(11) NOT NULL,
  `property_unique_id` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL,
  `near_bus_stand` varchar(500) DEFAULT NULL,
  `near_railway_station` varchar(500) DEFAULT NULL,
  `amenities` varchar(500) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `main_categories_id` int(11) NOT NULL,
  `brokerage_price` varchar(30) NOT NULL,
  `brokerage_negociable` int(11) NOT NULL,
  `property_builder` varchar(200) NOT NULL,
  `property_residentaily` varchar(100) NOT NULL,
  `residential_category` varchar(100) NOT NULL,
  `property_furnish` varchar(200) NOT NULL,
  `property_title` varchar(200) NOT NULL,
  `property_price` double NOT NULL,
  `price_negociable` varchar(10) NOT NULL,
  `deposite_price` varchar(20) NOT NULL,
  `deposite_negociable` int(11) NOT NULL,
  `rooms` varchar(100) NOT NULL,
  `area` varchar(500) DEFAULT NULL,
  `property_owner_name` varchar(500) NOT NULL,
  `owner_contact_no` varchar(30) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address_details` varchar(500) NOT NULL,
  `property_description` text NOT NULL,
  `date` datetime NOT NULL,
  `latitutde` varchar(200) DEFAULT NULL,
  `car_name` varchar(200) DEFAULT NULL,
  `longitutde` varchar(40) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `car_driven_kilometer` varchar(200) DEFAULT NULL,
  `year` varchar(200) DEFAULT NULL,
  `fuel` varchar(200) DEFAULT NULL,
  `furniture_condtion` varchar(200) DEFAULT NULL,
  `dealer_type` varchar(500) DEFAULT NULL,
  `hall_facility` varchar(300) DEFAULT NULL,
  `hall_type` varchar(300) DEFAULT NULL,
  `water_storage` varchar(300) DEFAULT NULL,
  `hanuman_temple` varchar(300) DEFAULT NULL,
  `parking_square_foot` varchar(200) DEFAULT NULL,
  `parking_type_one` varchar(44) DEFAULT NULL,
  `parking_capcity` varchar(200) DEFAULT NULL,
  `loan_type` varchar(200) DEFAULT NULL,
  `single_room_type` varchar(200) DEFAULT NULL,
  `store_name` varchar(200) DEFAULT NULL,
  `offer_name` varchar(200) DEFAULT NULL,
  `offer_type` varchar(200) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `school_name` varchar(200) DEFAULT NULL,
  `school_pattern` varchar(200) DEFAULT NULL,
  `dept_type` varchar(200) DEFAULT NULL,
  `school_medium` varchar(200) DEFAULT NULL,
  `root_num` varchar(200) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_post`
--

INSERT INTO `property_post` (`pid`, `property_unique_id`, `uid`, `near_bus_stand`, `near_railway_station`, `amenities`, `category_id`, `main_categories_id`, `brokerage_price`, `brokerage_negociable`, `property_builder`, `property_residentaily`, `residential_category`, `property_furnish`, `property_title`, `property_price`, `price_negociable`, `deposite_price`, `deposite_negociable`, `rooms`, `area`, `property_owner_name`, `owner_contact_no`, `city`, `address_details`, `property_description`, `date`, `latitutde`, `car_name`, `longitutde`, `model`, `car_driven_kilometer`, `year`, `fuel`, `furniture_condtion`, `dealer_type`, `hall_facility`, `hall_type`, `water_storage`, `hanuman_temple`, `parking_square_foot`, `parking_type_one`, `parking_capcity`, `loan_type`, `single_room_type`, `store_name`, `offer_name`, `offer_type`, `from_date`, `end_date`, `product_name`, `school_name`, `school_pattern`, `dept_type`, `school_medium`, `root_num`, `status`) VALUES
(45, 'SBA330125P', 5, '2km', '5KM', ',Lift,Water Storage,Security,Park', 2, 1, '6000', 0, 'Broker', 'Residential Property', 'Apartments', 'Unfurnished', '1,2BHK FLAT FOR RENT FOR FAMILY WORKING BACHELORS PADEGAO RAOD', 6000, '0', '15000', 0, '4 Rooms', '1000', 'ambadas patil', '8087245555', 'Aurangabada', 'Padegaon', '1BHK RENT 5000\r\n2BHK RENT 6000\r\n3BHK ROW HOUSE RENT 10000\r\nTOTAL THREE PRPERTY PADEGAO NEAR NANDHAVAN COLONY 1,2BHK FLAT FOR RENT FOR FAMILY WORKING BACHELORS PADEGAO RAOD', '2016-11-23 14:47:31', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(64, 'SBA916146P', 5, '', '', ',Water Storage,Security', 2, 1, '40000', 0, 'Broker', 'Commercial Property', 'Space For IT Office', 'Unfurnished', '500TO3000Sq OFFICE SPACE FOR RENT NEAR GARWARE STYDIUM', 40000, '1', '100000', 1, '6 Rooms+', '3500', 'ambadas patil', '8087245555', 'Aurangabada', 'Jatwada Road', '500TO3000Sq OFFICE SPACE FOR RENT NEAR GARWARE STYDIUM', '2016-11-23 18:22:37', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(65, 'SBA598044P', 5, '', '', ',Lift,Security', 2, 1, '60000', 0, 'Broker', 'Commercial Property', 'Office', 'Unfurnished', '1000TO3000Sq OFFICE SPACE FOR RENT JALNA ROAD MODA NAKA', 60000, '0', '360000', 0, '1 Room', '3500', 'ambadas patil', '8087245555', 'Aurangabada', 'Mondha', '1000TO3000Sq OFFICE SPACE FOR RENT JALNA ROAD MODA NAKA', '2016-11-23 18:27:11', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(70, 'SBA690081P', 5, '', '', ',Lift,Security', 2, 1, '60000', 0, 'Broker', 'Commercial Property', 'Office', 'Unfurnished', '1000TO3000Sq OFFICE SPACE FOR RENT JALNA ROAD SEVEN HILL ', 60000, '0', '360000', 0, '1 Room', '3000', 'ambadas patil', '8087245555', 'Aurangabada', 'Jalna Road', '1000TO3000Sq OFFICE SPACE FOR RENT JALNA ROAD SEVEN HILL ', '2016-11-23 18:56:56', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(173, 'SBA441979H', 23, NULL, NULL, NULL, 181, 3, '', 0, '', '', '', '', 'Nisha Buity Parlour Service Provide By All Aurangabad', 0, '0', '', 0, '', NULL, 'nisha gaikwad', '7720836310', 'aurangabad', 'Garkheda', 'Nisha Buity Parlour Service Provide By All Aurangabad', '2016-12-18 15:06:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(174, 'SBA826683C', 23, NULL, NULL, NULL, 79, 5, '', 0, '', '', '', '', 'nisha shivan classes', 500, '1', '', 0, '', NULL, 'nisha gaikwad', '7720836310', 'aurangabad', 'Garkheda', 'nisha shivan classes', '2016-12-18 15:16:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Home tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(175, 'SBA800600C', 23, NULL, NULL, NULL, 83, 5, '', 0, '', '', '', '', 'nisha rangoli classes', 300, '0', '', 0, '', NULL, 'nisha gaikwad', '7720836310', 'aurangabad', 'Garkheda', 'nisha rangoli classes', '2016-12-18 15:20:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Home tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(176, 'SBA112918C', 23, NULL, NULL, NULL, 44, 5, '', 0, '', '', '', '', 'nisha mehandi classes', 500, '1', '', 0, '', NULL, 'nisha gaikwad', '7720836310', 'aurangabad', 'Garkheda', 'nisha rangoli classes', '2016-12-18 15:22:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Home tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(177, 'SBA718319WS', 23, NULL, NULL, NULL, 39, 13, '', 0, '', '', '', '', ' dulha dulhan makeup and mehandi service', 1001, '0', '', 0, '', NULL, 'nisha gaikwad', '7720836310', 'aurangabad', 'Garkheda', ' dulha dulhan makeup and mehandi service', '2016-12-18 15:25:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(178, 'SBA250259H', 24, NULL, NULL, NULL, 189, 3, '', 0, '', '', '', '', 'mauli auto garege all two wheeler servicing service provide by all aurangabad home service ', 200, '1', '', 0, '', NULL, 'gajanan  gadekar ', '7798961010', 'aurangabad', 'Garkheda', '				mauli auto garege all two wheeler servicing service provide by all aurangabad home service 				', '2016-12-18 15:43:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(180, 'SBA627401H', 27, NULL, NULL, NULL, 164, 3, '', 0, '', '', '', '', 'shree gajanan labrotary complete diagnostic solution home service service provide by all aurangabad', 0, '0', '', 0, '', NULL, 'shankar', '9405452690', 'aurangabad', 'Garkheda', 'shree gajanan labrotary complete diagnostic solution home service service provide by all aurangabad', '2016-12-18 16:13:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(181, 'SBA997673H', 30, NULL, NULL, NULL, 136, 3, '', 0, '', '', '', '', 'sree pharma holesale agency service provide by all aurangabad home delivery service', 0, '0', '', 0, '', NULL, 'srikant   choure', '9028332362', 'aurangabad', 'Garkheda', 'sree pharma holesale agency service provide by all aurangabad home delivery service', '2016-12-18 16:27:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(182, 'SBA408172H', 24, NULL, NULL, NULL, 160, 3, '', 0, '', '', '', '', 'SAPANA BOREWELL  ALL TYPE  BORE AVAILABLE : - 4.5 &  6.5  SERVICE ALL AURANGABAD.', 0, '0', '', 0, '', NULL, 'RAFIK PATIL ', '9822798261', 'aurangabad', 'Garkheda', 'SAPANA BOREWELL  ALL TYPE  BORE AVAILABLE : - 4.5 &  6.5  SERVICE ALL AURANGABAD.', '2016-12-18 18:55:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(183, 'SBA856495RS', 24, NULL, NULL, NULL, 56, 4, '', 0, '', '', '', '', 'SAPANA BORE & ALL  MOTOR  REPAER  SERVICE  : SERVICE ALL AURANGABAD.', 0, '0', '', 0, '', NULL, 'RAFIK PATIL ', '9822798261', 'aurangabad', 'Garkheda', 'SAPANA BORE & ALL  MOTOR  REPAER  SERVICE  : SERVICE ALL AURANGABAD.', '2016-12-18 19:04:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(185, 'SBA548674H', 23, NULL, NULL, NULL, 325, 3, '', 0, '', '', '', '', 'NISHA BUITY PARLOUR SERVICE PROVIDE BY ALL AURANGABAD', 50, '0', '', 0, '', NULL, 'nisha gaikwad', '7720836310', 'aurangabad', 'Garkheda', '				NISHA BUITY PARLOUR SERVICE PROVIDE BY ALL AURANGABAD				', '2016-12-19 14:53:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(188, 'SBA526561H', 32, NULL, NULL, NULL, 129, 3, '', 0, '', '', '', '', 'hotel viraj tifin service location garkheda only ', 1800, '0', '', 0, '', NULL, 'datta wagh ', '9503615484', 'aurangabad', 'Garkheda', 'hotel viraj tifin service location garkheda only \r\nbest quality and home  delivery    service  100/ present. veg \r\n\r\n1time 1100 two time 1800', '2016-12-19 17:04:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(193, 'SBA799102H', 35, NULL, NULL, NULL, 148, 3, '', 0, '', '', '', '', 'SAI TOURS AND TRAVELS ALL AURANGABAD SERVICE ', 0, '0', '', 0, '', NULL, 'KAILASH', '9404679338', 'aurangabad', 'Garkheda', '				SAI TOURS AND TRAVELS ALL AURANGABAD SERVICE			', '2016-12-20 15:43:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(194, 'SBA991932TL', 35, NULL, NULL, NULL, 23, 10, '', 0, '', '', '', '', 'LOADING RIKSHAW  FOR RENT SERVICES GARKHEDA ONLY ', 150, '0', '', 0, '', NULL, 'laxman ruchke', '9822954301', 'aurangabad', 'Garkheda', '				LOADING RIKSHAW  FOR RENT SERVICES GARKHEDA ONLY 				', '2016-12-20 16:03:06', NULL, 'Other', NULL, '', '', '', NULL, NULL, 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(195, 'SBA676971TL', 35, NULL, NULL, NULL, 23, 10, '', 0, '', '', '', '', 'LOADING RIKSHAW  FOR RENT SERVICES GARKHEDA ONLY ', 200, '0', '', 0, '', NULL, 'laxman ruchke', '9822954301', 'aurangabad', 'Garkheda', '				LOADING RIKSHAW  FOR RENT SERVICES GARKHEDA ONLY 				', '2016-12-20 16:04:51', NULL, 'Other', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(199, 'SBA372949RS', 37, NULL, NULL, NULL, 185, 4, '', 0, '', '', '', '', 'HOME ELECTRCIAN ALL  SERVICES BY ALL AURANGABAD ', 0, '0', '', 0, '', NULL, 'yogesh', '9096547255', 'aurangabad', 'Garkheda', 'HOME ELECTRCIAN ALL  SERVICES BY ALL AURANGABAD ', '2016-12-20 16:41:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(200, 'SBA891688H', 39, NULL, NULL, NULL, 60, 3, '', 0, '', '', '', '', 'Compressor and Stabilizer', 0, '0', '', 0, '', NULL, 'Mukesh Gadekar', '9823220213', 'aurangabad', 'Garkheda', '								\r\nServices of Mangadeep Services\r\nWhy Mangaldeep Services?\r\n\r\nMangaldeep Services Aurangabad deals in following services.\r\n\r\n    Authorized Dealer for Frank  Air-Compressor\r\n	    Any type of compressor Servicing\r\n    Any type of Stabilizer Servicing\r\n    Material Handling Pallet trucks/Forklift\r\n    All spare related to Compressor any type any make\r\n    Filters/Air receivers/FRL\r\n    Pneumatic All spares\r\n\r\n	\r\n\r\n    Hydraulic All spares\r\n\r\n    VFD And Drives\r\n\r\n	\r\n\r\n    MCC/PCC/PLC Panels\r\n\r\n    Pipel				', '2016-12-20 19:50:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(201, 'SBA510733H', 40, NULL, NULL, NULL, 148, 3, '', 0, '', '', '', '', 'shravani turs and Travels service all India', 0, '0', '', 0, '', NULL, 'Radheshyam Chikhale', '9028213995', 'aurangabad', 'CIDCO, N-6', 'shravani turs and Travels service all India', '2016-12-20 20:11:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(209, 'SBA324089OF', 41, NULL, NULL, NULL, 208, 9, '', 0, '', '', '', '', 'Office Chair For sale', 2000, '1', '', 0, '', NULL, 'vithal kendre ', '9422714444', 'aurangabad', 'Gajanan Maharaj Mandir', '				Office Chair For sale			', '2016-12-21 18:52:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gentaly Used', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(210, 'SBA587460OF', 41, NULL, NULL, NULL, 214, 9, '', 0, '', '', '', '', 'home Chair For sale', 200, '0', '', 0, '', NULL, 'vithal kendre ', '9422714444', 'aurangabad', 'Gajanan Maharaj Mandir', '				home  Chair For sale 				', '2016-12-21 18:56:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gentaly Used', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(211, 'SBA316280OF', 41, NULL, NULL, NULL, 209, 9, '', 0, '', '', '', '', 'office tabel for  sale ', 1100, '0', '', 0, '', NULL, 'vithal kendre ', '9422714444', 'aurangabad', 'Gajanan Maharaj Mandir', 'office tabel for  sale ', '2016-12-21 18:59:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gentaly Used', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(212, 'SBA219190OF', 41, NULL, NULL, NULL, 214, 9, '', 0, '', '', '', '', 'sagwaan bakada for sale', 1100, '1', '', 0, '', NULL, 'vithal kendre ', '9422714444', 'aurangabad', 'Gajanan Maharaj Mandir', 'sagwaan bakada for sale', '2016-12-21 19:02:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Almost like new', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(213, 'SBA976278OF', 41, NULL, NULL, NULL, 214, 9, '', 0, '', '', '', '', 'sagwaan bakada for sale', 2100, '0', '', 0, '', NULL, 'vithal kendre ', '9422714444', 'aurangabad', 'Gajanan Maharaj Mandir', 'sagwaan bakada for sale', '2016-12-21 19:06:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gentaly Used', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(214, 'SBA794933OF', 41, NULL, NULL, NULL, 214, 9, '', 0, '', '', '', '', 'old parlour derssing set for sale ', 8000, '0', '', 0, '', NULL, 'vithal kendre ', '9422714444', 'aurangabad', 'Gajanan Maharaj Mandir', 'old parlour derssing set for sale ', '2016-12-21 19:14:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gentaly Used', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(215, 'SBA484951OF', 41, NULL, NULL, NULL, 214, 9, '', 0, '', '', '', '', 'old parlour  chair for sale ', 2500, '0', '', 0, '', NULL, 'vithal kendre ', '9422714444', 'aurangabad', 'Gajanan Maharaj Mandir', '				old parlour  chair for sale 				', '2016-12-21 19:17:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Almost like new', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(216, 'SBA225272OF', 41, NULL, NULL, NULL, 214, 9, '', 0, '', '', '', '', 'cooler stand for sale', 350, '0', '', 0, '', NULL, 'vithal kendre ', '9422714444', 'aurangabad', 'Gajanan Maharaj Mandir', 'cooler stand for sale', '2016-12-21 19:20:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Almost like new', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(217, 'SBA798728OF', 41, NULL, NULL, NULL, 214, 9, '', 0, '', '', '', '', 'Office  Kapat  For Sale ', 3000, '0', '', 0, '', NULL, 'vithal kendre ', '9422714444', 'aurangabad', 'Gajanan Maharaj Mandir', 'Office  Kapat  For Sale ', '2016-12-21 19:22:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Almost like new', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(239, 'SBA464930WS', 35, NULL, NULL, NULL, 32, 13, '', 0, '', '', '', '', 'new Kailash Mandap And Kecaring Services by All Aurangabad  l', 0, '0', '', 0, '', NULL, 'Laxman  Ruchke ', '9822954301', 'aurangabad', 'GarkhedaParisar\r\n', '				new Kailash Mandap And Kecaring Services by All Aurangabad 				', '2016-12-22 14:49:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(240, 'SBA990951WS', 46, NULL, NULL, NULL, 32, 13, '', 0, '', '', '', '', 'shree ganesh icecream and multiservices all aurangabad', 0, '0', '', 0, '', NULL, 'venketesh narayan rao gonewad', '9423709100', 'aurangabad', 'Gajanan Maharaj Mandir', 'wedind ,birthday ,weding reception ', '2016-12-24 10:50:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(242, 'SBA806576B', 47, NULL, NULL, NULL, 95, 7, '', 0, '', '', '', '', 'my TVS Wego  bike for sale in garkheda location ', 28000, '1', '', 0, '', NULL, 'RAM ', '8625839999', 'aurangabad', 'Garkheda', 'my TVS Wego  bike for sale in garkheda location ', '2016-12-24 15:51:50', NULL, 'TVS\r\n', NULL, '', '19000', '2013', NULL, NULL, 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(243, 'SBA984601H', 48, NULL, NULL, NULL, 135, 3, '', 0, '', '', '', '', 'gurukrupa watar saplayars sarvic pravaid by al aurangabad', 0, '0', '', 0, '', NULL, 'abhay huse ', '9673595382', 'aurangabad', 'T V Center', 'gurukrupa watar saplayars sarvic pravaid by al aurangabad\r\nstoreg 2000 to 5000 letar available ', '2016-12-24 18:27:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(244, 'SBA433395H', 49, NULL, NULL, NULL, 158, 3, '', 0, '', '', '', '', 'SAI CAR WASH AT YOUR HOME SERVICE PROVIDED IN ALL AURANGABAD', 500, '1', '', 0, '', NULL, 'DHANANJAY DHANDE', '9403203232', 'aurangabad', 'Hanuman Nagar', 'SAI CAR WASH AT YOUR HOME SERVICE PROVIDED IN ALL AURANGABAD', '2016-12-25 11:23:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(245, 'SBA271407H', 51, NULL, NULL, NULL, 142, 3, '', 0, '', '', '', '', ' News Papar agent  Sarvice by garkheda only ', 100, '0', '', 0, '', NULL, ' News Papar agent  Sarvice by garkheda only ', '8975461452', 'aurangabad', 'GarkhedaParisar\r\n', ' News Papar agent  Sarvice by garkheda only ', '2016-12-25 12:04:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(246, 'SBA363350RS', 53, NULL, NULL, NULL, 185, 4, '', 0, '', '', '', '', 'Viswa laxmi electrical  All Aurangabad  location', 0, '0', '', 0, '', NULL, 'Adinath borse', '   9764200324', 'aurangabad', 'Garkheda', '								Garukrupa electrical  Services  Provider All Aurangabad  location								', '2016-12-25 14:19:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(250, 'SBA645563WL', 55, NULL, NULL, NULL, 25, 12, '', 0, '', '', '', '', 'PRASAD LOWN BEED BY PASS ROAD BALAPUR', 71000, '1', '', 0, '', '3300', 'KALE SIR ', '9405410269', 'aurangabad', 'Beed Bypass Road', 'PRASAD LOWN BEED BY PASS ROAD BALAPUR\r\n\r\n', '2016-12-28 13:39:28', NULL, NULL, NULL, '3000', NULL, NULL, NULL, NULL, NULL, 'Non A/C Hall', 'With Decoration', '10000', '1', '5000', 'Yes', '300', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(251, 'SBA959697WL', 56, NULL, NULL, NULL, 25, 12, '', 0, '', '', '', '', 'SAVITRI  LWANS BEED BY PASS  ROAD ', 0, '0', '', 0, '', '2000', 'ABHIJEET S. MHASKE', '9372828009', 'aurangabad', 'Beed Bypass Road', 'SAVITRI  LWANS BEED BY PASS  ROAD ', '2016-12-28 14:45:00', NULL, NULL, NULL, '4000', NULL, NULL, NULL, NULL, NULL, 'Non A/C Hall', 'With Decoration', '15000', '1', '4000', 'Yes', '300', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(252, 'SBA578134WL', 57, NULL, NULL, NULL, 24, 12, '', 0, '', '', '', '', 'PATEL  LAWNS BEED BY PASS ROAD ', 45000, '0', '', 0, '', '5000', 'WAJED PATEL ', '9923205033', 'aurangabad', 'Beed Bypass Road', 'PATEL  LAWNS BEED BY PASS ROAD ', '2016-12-28 15:27:23', NULL, NULL, NULL, '3000', NULL, NULL, NULL, NULL, NULL, 'Non A/C Hall', 'With Decoration', '0', '', '800', 'Yes', '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(253, 'SBA210861H', 58, NULL, NULL, NULL, 173, 3, '', 0, '', '', '', '', 'deepak foluer mill  in garkheda', 0, '0', '', 0, '', NULL, 'deepak ambilke', '8275322859', 'aurangabad', 'Garkheda', 'deepak foluer mill  in garkheda', '2016-12-29 11:14:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(254, 'SBA367592OF', 58, NULL, NULL, NULL, 214, 9, '', 0, '', '', '', '', 'show case for sale ', 500, '1', '', 0, '', NULL, 'deepak ambilke', '8275322859', 'aurangabad', 'GarkhedaParisar\r\n', 'show case for sale ', '2016-12-29 11:17:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gentaly Used', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(261, 'SBA698337MB', 5, NULL, NULL, NULL, 402, 16, '', 0, '', '', '', '', 'SAI BROKING REAL ESTATE BROKER IN AURANGABAD GARKHEDA', 0, '0', '', 0, '', NULL, 'ambadas patil', '8087245555', 'aurangabad', 'GarkhedaParisar\r\n', '												SAI BROKING REAL ESTATE BROKER IN AURANGABAD GARKHEDA\r\n\r\n\r\n2BHK FLAT FOR 50 % OFF FOR BROKING \r\n3BHK FLAT FOR  60% OFF FOR BROKING \r\nOFFICE 70 % OFF \r\n												', '2016-12-30 11:12:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SAI BROKING  .COM ', '26 january republic day', 'Other Offers', '2017-01-26', '2017-01-28', 'FLAT RENT ', NULL, NULL, NULL, NULL, NULL, 'active'),
(268, 'SBA481984CR', 60, NULL, NULL, NULL, 330, 6, '', 0, '', '', '', '', 'private car on rent', 50000, '0', '', 0, '', NULL, 'prakash Tupe', '9423780095', 'Aurangabad', 'Harsul', 'i want give my car on for office and hotel for private user model 2011', '2016-12-30 19:02:29', NULL, 'Dzire', NULL, '', '', '', 'Diesel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(270, 'SBA561340WL', 63, NULL, NULL, NULL, 24, 12, '', 0, '', '', '', '', 'surya  lawns beed by  pass road in aurangabad ', 192000, '1', '', 0, '', '10000', 'office ', '9049994446', 'aurangabad', 'Beed Bypass Road', '								surya  lawns beed by  pass road in aurangabad 								', '2016-12-31 18:18:11', NULL, NULL, NULL, '4000', NULL, NULL, NULL, NULL, NULL, 'Non A/C Hall', 'Without Decoration', '7000', '', '2000', 'Yes', '300 car', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(271, 'SBA283469WL', 63, NULL, NULL, NULL, 25, 12, '', 0, '', '', '', '', 'surya hall & lawn  beed by pass roa', 270000, '1', '', 0, '', '10000', 'office ', '9049994446', 'aurangabad', 'Beed Bypass Road', 'surya hall & lawn  beed by pass roa', '2016-12-31 18:29:12', NULL, NULL, NULL, '2000', NULL, NULL, NULL, NULL, NULL, 'Non A/C Hall', 'Without Decoration', '8000', '1 km ', '10000', 'Yes', '500 car ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(273, 'SBA666345WS', 67, NULL, NULL, NULL, 183, 13, '', 0, '', '', '', '', 'all event in one company', 0, '0', '', 0, '', NULL, 'asif', '8482919568', 'aurangabad', 'Gajanan Maharaj Mandir', '				We do aall types event				', '2017-01-05 18:23:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(274, 'SBA455429CR', 68, NULL, NULL, NULL, 94, 6, '', 0, '', '', '', '', 'Skoda fabia diesel', 230000, '1', '', 0, '', NULL, 'Khan noman', '9921232229', 'Aurangabad', 'Lota Karanja', 'Skoda Fabia - Ambiente 1.4 Tdi DIESEL, Well maintained, Cappuccino Beige colour,  \r\nWell maintained\r\nPersonal use\r\n2nd owner\r\n\r\nDual Air Bags & Anti Lock Braking\r\n\r\nAlloy wheel with tubeless tyres \r\nBigger boot space\r\nMusic system with speakers\r\nPower steering\r\nAll 4 Power Windows\r\nReverse parking sensors\r\nHeated mirror\r\nRemote lock with central locking\r\nFront disc brake.\r\nDriver & passenger seat height adjustment\r\n\r\nDoor open sensor, head light ON sensor, Parking brake ON sensor,Telescopic stee', '2017-01-05 20:13:14', NULL, 'Skoda\r\n', NULL, 'Fabia', '196000', '2008', 'Diesel', NULL, 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(275, 'SBA406566OF', 70, NULL, NULL, NULL, 208, 9, '', 0, '', '', '', '', 'BRAND NEW REVOLVING OFFICE CHAIR', 1990, '0', '', 0, '', NULL, 'Pratik Khairnar', '9403004784', 'Aurangabad', 'CIDCO, N-7', '				Brand New Revolving Office Chair with Metal Stand and Square Back at lowest price\r\nColors Available : Red , Black, Blue\r\n			', '2017-01-06 19:02:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Almost like new', 'Dealer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(276, 'SBA638699OF', 70, NULL, NULL, NULL, 214, 9, '', 0, '', '', '', '', 'Brand New Bar Chair', 3990, '1', '', 0, '', NULL, 'Pratik Khairnar', '9403004784', 'Aurangabad', 'CIDCO, N-7', 'Brand New Bar chair available at lowest price', '2017-01-06 19:04:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Almost like new', 'Dealer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(280, 'SBA119571H', 71, NULL, NULL, NULL, 189, 3, '', 0, '', '', '', '', 'GURU MAULI AUTO GAREGE ALL TWO WHEELER SERVICING SERVICE PROVIDE BY ALL AURANGABAD HOME SERVICE', 200, '0', '', 0, '', NULL, 'santosh patil ', '9850871678', 'aurangabad', 'Garkheda', '				GURU MAULI AUTO GAREGE ALL TWO WHEELER SERVICING SERVICE PROVIDE BY ALL garkheda only  HOME SERVICE				', '2017-01-07 18:23:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(283, 'SBA556466H', 5, NULL, NULL, NULL, 60, 3, '', 0, '', '', '', '', 'SHREE GANESH PLUMBING SERVICE GARKHEDA ONLY', 0, '0', '', 0, '', NULL, 'GANESH', '9767946537', 'aurangabad', 'Garkheda', 'SHREE GANESH PLUMBING SERVICE GARKHEDA ONLY', '2017-01-08 19:26:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(284, 'SBA621877WS', 74, NULL, NULL, NULL, 31, 13, '', 0, '', '', '', '', 'Angel events', 0, '0', '', 0, '', NULL, 'asif n jamadar', '8482919568', 'aurangabad', 'Gajanan Maharaj Mandir', 'Angel Events\r\nBringing whole new dimensions in corporate evnts, weddings, parties and other special events. Angel Events is an event management ', '2017-01-08 20:54:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(292, 'SBA530845C', 69, NULL, NULL, NULL, 46, 5, '', 0, '', '', '', '', 'Home tution are available.100% results.', 6000, '1', '', 0, '', NULL, 'smart home tutor', '8421942059', 'Aurangabad', 'Cannaught Place', 'I am Shaikh Sir. My institute name is smart home tutor. \r\n\r\nI have 5 Years experience in home tution for 1 st to 12 th standard all medium ,all board, all subject ,special subject, weak student ,grow confidence your child ,grow your child concentration.  No fear. High results. In my  institute, all student passed  in first class. 100% results. Reply me.', '2017-01-09 14:10:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Home tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(293, 'SBA701082WS', 74, NULL, NULL, NULL, 31, 13, '', 0, '', '', '', '', 'ANGEL EVENTS', 0, '0', '', 0, '', NULL, 'ASIF NAZIR JAMADAR', '8482919568', 'AURANGABAD', 'GarkhedaParisar\r\n', 'Angel Event\'s.\r\nBringing whole new dimensions in corporate evnts, weddings, parties and other special events. Event\'s is an event management firm managed by a group of young professionals, providing a wide range of event related services and consultancy.\r\nServices that we offer includes- Dj party,Weddings,Corporate,Events,Conference,Seminars,Conventions,Exhibitions,Occasion Parties\r\nEntertainment Events,Celebrity Management. Sports & health events and other Allied Services.\r\n', '2017-01-09 18:06:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(299, 'SBA829651H', 80, NULL, NULL, NULL, 149, 3, '', 0, '', '', '', '', 'Gayatri Contrashtion', 0, '0', '', 0, '', NULL, 'Rameshwar ', '9921004531', 'aurangabad', 'Paithan Road', 'Gayatri Contrashtion', '2017-01-10 10:41:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(300, 'SBA315466OE', 81, NULL, NULL, NULL, 197, 8, '', 0, '', '', '', '', 'Editing Software and Video Tutorial in HD quality 720', 500, '0', '', 0, '', NULL, 'VIjay', '9096547397', 'Aurangabad', 'Garkheda', 'Editing Software and Video Tutorial in HD quality 720\r\n\r\nSoftware\'s are available In DVD\'s and Pen Drive\r\n\r\n1) Adobe Master Collection CS5 Rs 500/-\r\n\r\n2) Adobe CC 2015 Rs 1000/-\r\n\r\n3) Adobe CS 3 Rs 400/-\r\n\r\n5) Adobe Photoshop CS 5 Rs 100/-\r\n\r\n6) Sony Vegas Pro 11 Rs 500/-\r\n\r\n7) Pinnacle Studio 16 Rs 500/-\r\n\r\n8) Autodesk Maya 2013 Rs 500/-\r\n\r\n9) Autodesk 3ds Max Rs 500/-\r\n\r\n10) Avid Liquid 7 2 Rs 800/-\r\n\r\n11) FCP 7 Rs 1000/-\r\n\r\n12) Coral Draw 3 and 4 Rs 500/-\r\n\r\n13) Adobe Audition CC Tutorial HD quality 720 Rs.1000/- \r\n\r\n14', '2017-01-10 19:31:28', NULL, 'Others', NULL, '', NULL, NULL, NULL, 'Almost like new', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(301, 'SBA183108MB', 82, NULL, NULL, NULL, 410, 16, '', 0, '', '', '', '', 'Get online website in lowest cost..', 0, '0', '', 0, '', NULL, 'Dipali', '9370977391', 'Pune', 'Other', 'We believe success begins with our commitment in understanding in you, your industry and your clients. \r\nOur goal is to provide high quality, unique and professional services at affordable cost.				', '2017-01-11 13:36:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Globallianz', '10% OFF', 'Other Offers', '2017-01-11', '2017-01-15', 'Website ', NULL, NULL, NULL, NULL, NULL, 'active'),
(306, 'SBA507285J', 5, NULL, NULL, NULL, 109, 11, '', 0, '', '', '', '', 'Data Entry Job  Work For Home & Office ', 0, '0', '', 0, '', NULL, 'ambadas patil', '8087245555', 'aurangabad', 'Gajanan Maharaj Mandir', 'Data Entry Job  Work For Home & Office ', '2017-01-15 19:23:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(307, 'SBA522049C', 89, NULL, NULL, NULL, 125, 5, '', 0, '', '', '', '', 'Govt. Technical Highschool Vaijapur, dis. Aurangabad.', 0, '0', '', 0, '', NULL, 'Principal ', '9767209192', 'Vaijapur', 'Bhadkal Gate', '8th & 9th std electrical and mechanical  training  is given  in our institution.', '2017-01-15 22:27:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Class tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(309, 'SBA333986MB', 36, NULL, NULL, NULL, 410, 16, '', 0, '', '', '', '', 'QUICK HEAL ANTIVIRUS OFFER APPSYSM TECHNOLOGIES', 0, '0', '', 0, '', NULL, 'MR,SUDESH LUTE', '9545509477', 'Aurangabad', 'Garkheda', '				Mr.Sudesh Lute  l Appsysm Technologies   sudesh@appsysm.com | www.appsysm.com\r\n\r\nHead Office     :-  Shop No 9 , Shivgaya Complex, Chatrapati Nagar, Behind Reliance Mall, Garkheda ,Aurangabad – 431001 Maharashtra.\r\n\r\n\r\n				', '2017-01-16 12:19:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'APPSYSM TECHNOLOGIES', 'QUICK HEAL ANTIVIRUS OFFER BIG SALE FLAT 20 % OFF', 'Other Offers', '2017-01-17', '2017-01-31', 'QUICK HEAL ANTIVIRUS ', NULL, NULL, NULL, NULL, NULL, 'active'),
(310, 'SBA832885C', 89, NULL, NULL, NULL, 46, 5, '', 0, '', '', '', '', 'KOLTE SCIENCE ACADEMY', 1000, '0', '', 0, '', NULL, 'RUPALI N KOLTE', '9421424566', 'AURANGABAD', 'CIDCO, N-4', '				STATE BOARD & CBSE : FROM 5th TO 10th STD.				', '2017-01-17 08:56:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Class tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(318, 'SBA747600WL', 94, NULL, NULL, NULL, 24, 12, '', 0, '', '', '', '', 'pravati  lawns ', 40000, '1', '', 0, '', '10000', 's darade ', '9422702848', 'aurangabad', 'Beed Bypass Road', 'pravati  lawns ', '2017-01-24 10:33:44', NULL, NULL, NULL, '2000', NULL, NULL, NULL, NULL, NULL, 'Non A/C Hall', 'Without Decoration', '2000', '', '5000', 'Yes', '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(319, 'SBA591726OE', 95, NULL, NULL, NULL, 195, 8, '', 0, '', '', '', '', 'Philips T V for sale', 3000, '1', '', 0, '', NULL, 'kendre', '9422714444', 'Aurangabad', 'Gajanan Maharaj Mandir', 'Philips T V for sale', '2017-01-24 18:43:12', NULL, 'Others', NULL, '21', NULL, NULL, NULL, 'Almost like new', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(320, 'SBA786313P', 5, '', '', ',Water Storage,Security,Park', 2, 1, '50000', 0, 'Broker', 'Commercial Property', 'Office', 'Unfurnished', '1000 to 4000 sq COMMERCIAL OFFICE SPACE ADALAT ROAD ', 50000, '0', '300000', 0, '1 Room', '4000', 'ambadas patil', '8087245555', 'aurangabad', 'Adalat Road', '1000 to 4000 sq COMMERCIAL OFFICE SPACE ADALAT ROAD ', '2017-01-25 14:18:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(324, 'SBA248270C', 98, NULL, NULL, NULL, 48, 5, '', 0, '', '', '', '', 'UPSC/MPSC/SSC CLASSES', 50000, '0', '', 0, '', NULL, 'monica kharat', '8551966983', 'aurangabad', 'Akashwani', 'classes for upsc/mpsc and other competitive exams with complete guidence and counselling.', '2017-02-02 00:34:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Class tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(329, 'SBA779301OE', 5, NULL, NULL, NULL, 195, 8, '', 0, '', '', '', '', 'ONIDA KY THANDAR OLD TV FOR SALE', 4000, '1', '', 0, '', NULL, 'AMIOL PATIL', '8087245555', 'aurangabad', 'Garkheda', 'ONIDA KY THANDAR OLD TV FOR SALE', '2017-02-03 19:18:28', NULL, 'Others', NULL, '001', NULL, NULL, NULL, 'Almost like new', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(340, 'SBA334874H', 99, NULL, NULL, NULL, 151, 3, '', 0, '', '', '', '', 'Jivan Vima Agent Lic ', 0, '0', '', 0, '', NULL, 'nagre sir ', '9422297177', 'aurangabad', 'GarkhedaParisar\r\n', 'Jivan Vima Agent Lic  \r\n\r\n\r\nJivan Vima Agent Lic \r\n\r\n\r\n\r\nJivan Vima Agent Lic ', '2017-02-08 19:38:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(341, 'SBA298279H', 99, NULL, NULL, NULL, 148, 3, '', 0, '', '', '', '', 'Tours & Travels in aurangabad ', 0, '0', '', 0, '', NULL, 'nagre sir ', '9422297177', 'aurangabad', 'GarkhedaParisar\r\n', 'Tours & Travels in aurangabad ', '2017-02-08 19:44:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(361, 'SBA159817P', 5, '0M', '1km', ',Water Storage', 2, 1, '24000', 0, 'Broker', 'Commercial Property', 'Office', 'Unfurnished', '1000 Sq SPACE FOR RENT  LOCATION OSMANPURA ', 24000, '0', '100000', 0, '1 Room', '1000', 'ambadas patil', '8087245555', 'aurangabad', 'Osmanpura', '1000 Sq SPACE FOR RENT  LOCATION OSMANPURA ', '2017-03-04 13:52:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(366, 'SBA815575OE', 100, NULL, NULL, NULL, 204, 8, '', 0, '', '', '', '', 'Air Purifier For Sale', 2500, '0', '', 0, '', NULL, 'Sachin Bagde', '9422705134', 'Aurangabad', 'CIDCO, N-2', 'Air Purifier, Company - Eureka Forbes\r\nModel- Euroair, 32-52W, Wt. 6 Kg. ,\r\nFor Home, Office and Commercial Use								\r\n', '2017-03-05 12:15:33', NULL, 'Others', NULL, 'Euroair', NULL, NULL, NULL, 'Gentaly Used', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(374, 'SBA132846OF', 100, NULL, NULL, NULL, 214, 9, '', 0, '', '', '', '', 'Yera Transparent Glass Storage Jars For Sale', 100, '0', '', 0, '', NULL, 'Sachin Bagde', '9422705134', 'Aurangabad', 'CIDCO, N-2', 'Yera Company\r\nTransparent Glass Storage Jars with cap\r\nsize-1kg - 6Nos. 600/-\r\nsize-2kg - 6Nos. 600/-\r\nsize- 4Kg -12Nos. 1,200/-\r\nWashable, Reusable	\r\nEach Jar for Just 100/- only			', '2017-03-08 22:01:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gentaly Used', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(375, 'SBA521547P', 5, '5m', '13KM', ',Lift,Water Storage,Security,Park', 2, 1, '10000', 0, 'Broker', 'Residential Property', 'Apartments', 'Unfurnished', '2bhk FLAT FOR RENT FOR FAMILY ONLY NEAR AIRPORT AURANGABAD ', 10000, '0', '20000', 0, '4 Rooms', '1000', 'ambadas patil', '8087245555', 'aurangabad', 'Chikalthana', '2bhk FLAT FOR RENT FOR FAMILY ONLY NEAR AIRPORT AURANGABAD ', '2017-03-09 18:48:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(434, 'SBA676629HL', 5, NULL, NULL, 'Ac,Non/Ac', 220, 14, '', 0, '', '', '', '', 'SAI PLAC GUST HAUCE NEAR MAHARANA PRATAP CHOK BAJAJ NAGAR WALUJ', 600, '1', '', 0, '', NULL, 'SAI ', '7887722442', 'aurangabad', 'Balaji Nagar', 'SAI PLAC GUST HAUCE NEAR MAHARANA PRATAP CHOK BAJAJ NAGAR WALUJ', '2017-05-03 19:48:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Single Room,Double Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(462, 'SBA641567P', 5, '0M', '', ',Lift,Water Storage,Security,Park', 2, 1, '16000', 1, 'Broker', 'Commercial Property', 'Office', 'Unfurnished', 'SHOP FOR RENT FOR CIDCO N1 NEAR PROZONE MALL POST BY BROKER SAIBROKING.COM ', 16000, '1', '100000', 1, '1 Room', '400', 'ambadas patil', '8087245555', 'aurangabad', 'CIDCO, N-1', 'SHOP FOR RENT FOR CIDCO N1 NEAR PROZONE MALL POST BY BROKER SAIBROKING.COM ', '2017-05-24 14:37:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(472, 'SBA605818MB', 11, NULL, NULL, NULL, 410, 16, '', 0, '', '', '', '', 'Special discount on websites, softwares, applications', 10000, '0', '', 0, '', NULL, 'Dipali', '9370977391', 'Pune', 'HUDCO', 'Websites\r\nSoftwares\r\nWeb Applications', '2017-05-28 16:44:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Globallianz', 'DISJUN', 'Other Offers', '0000-00-00', '0000-00-00', 'Web Applications', NULL, NULL, NULL, NULL, NULL, 'active'),
(483, 'SBA319856H', 106, NULL, NULL, NULL, 149, 3, '', 0, '', '', '', '', 'All Types of Architect Work And Civil Work', 0, '1', '', 0, '', NULL, 'Akshay Ramkrunshna Thakare', '8237077776', 'Aurangabad', 'CIDCO, N-5', 'Building Planning.\r\n3D Drawing.\r\nStructure Design.\r\nInterior Design.\r\nValuer.\r\nAll Types Of Civil Work', '2017-06-03 11:03:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(489, 'SBA892312OF', 5, NULL, NULL, NULL, 211, 9, '', 0, '', '', '', '', 'SHOE RACK OFFICE RACK FOR SALE IN GARKHEDA AURANGABAD ', 2000, '0', '', 0, '', NULL, 'ambadas patil', '8087245555', 'aurangabad', 'GarkhedaParisar\r\n', 'SHOE RACK OFFICE RACK FOR SALE IN GARKHEDA AURANGABAD ', '2017-06-14 18:21:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Almost like new', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(494, 'SBA875056J', 8, NULL, NULL, NULL, 335, 11, '', 0, '', '', '', '', 'Test', 500, '1', '', 0, '', NULL, 'Test', '9595959595', 'aurangabad', 'Arif Colony', 'test', '2017-06-17 12:39:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(500, 'SBA665697J', 110, NULL, NULL, NULL, 385, 11, '', 0, '', '', '', '', 'Online Jobs in India - without any investment', 0, '1', '', 0, '', NULL, 'sonu khurana', '8467049758', 'DELHI', 'Balaji Nagar', '\r\nAre You Looking for Home-Based Online Jobs? Are You a Student, Housewife, jobseeker ? Just Work 1 to 2 Hours daily at own Free Time. Get Guaranteed Monthly Payments. Here is the best Guide for Online jobs. http://www.onlinejobs4us.co.in\r\nNEON0083946  22 06 2017 17:37:46', '2017-06-22 17:57:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(537, 'SBA584708OE', 121, NULL, NULL, NULL, 200, 8, '', 0, '', '', '', '', 'D-Link DIR-600M wireless N150 Home router', 800, '1', '', 0, '', NULL, 'mohit ', '8855805737', 'Aurangabad', 'Garkheda', 'Router is in very good condition.', '2017-07-26 09:15:21', NULL, 'Others', NULL, 'D-Link DIR-600M', NULL, NULL, NULL, 'Almost like new', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(538, 'SBA393843OF', 122, NULL, NULL, NULL, 205, 9, '', 0, '', '', '', '', 'Black and creamy shade sofa ', 5000, '1', '', 0, '', NULL, 'Nayan Rathod ', '9623892807', 'Aurangabad ', 'Garkheda', 'Balck leather hand rest ... \r\nBlack and golden pillow seating ', '2017-07-26 12:51:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Heavily used', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(624, 'SBA976754OE', 5, NULL, NULL, NULL, 196, 8, '', 0, '', '', '', '', 'BPL Refreter For Sale', 4000, '1', '', 0, '', NULL, 'badbade', '9423724478', 'aurangabad', 'Shivaji Nagar', 'BPL Refreter For Sale', '2017-10-01 11:02:57', NULL, 'Others', NULL, '2050', NULL, NULL, NULL, 'Almost like new', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(625, 'SBA690068OE', 5, NULL, NULL, NULL, 199, 8, '', 0, '', '', '', '', 'LG washing machine For Sale', 6000, '1', '', 0, '', NULL, 'badbade', '9423724478', 'aurangabad', 'Shivaji Nagar', 'LG washing machine For Sale', '2017-10-01 11:05:18', NULL, 'LG', NULL, '1144', NULL, NULL, NULL, 'Almost like new', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(634, 'SBA402258H', 134, NULL, NULL, NULL, 144, 3, '', 0, '', '', '', '', 'Shree Enterprises packer & Movers', 0, '0', '', 0, '', NULL, 'Amol Shelar', '9552536653', ' Aurangabad ', 'Garkheda', '																Good service provide in low amount.																', '2017-10-05 15:10:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(637, 'SBA335943H', 136, NULL, NULL, NULL, 144, 3, '', 0, '', '', '', '', 'SAI PACKERS AND MOVERS', 0, '1', '', 0, '', NULL, 'Bhagwan', '9730307290', 'Aurangabad', 'CIDCO', 'India\'s Most Awarded Movers is Sai Packers and Movers ', '2017-10-08 20:24:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(652, 'SBA740718OF', 5, NULL, NULL, NULL, 206, 9, '', 0, '', '', '', '', 'Old Is Gold  Old Furnished For Sale ', 2000, '0', '', 0, '', NULL, 'Ambadas Patil', '8087245555', 'Aurangabad', 'GarkhedaParisar\r\n', 'Old Is Gold  Old Furnished For Sale \r\n\r\nOld Bed,Sofa,Table,Kapat,Diwan,Fridge, etc. \r\nShop Address ; Behind Near Reliance Mart Vijay Chowk Shop No. 1 Garkheda Parisar Aurangabad \r\n', '2017-10-13 10:51:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gentaly Used', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(653, 'SBA997522CR', 139, NULL, NULL, NULL, 330, 6, '', 0, '', '', '', '', 'Alfa india tour and travels Pvt.Ltd', 0, '0', '', 0, '', NULL, 'Alfa', '9325376772', 'aurangabad', 'CIDCO', 'Aurangabad Taxi Car Cab Coach Hire on Rent\r\nAurangabad Nanded Taxi Car Cab Coach Hire on Rent\r\nAurangabad Ajanta Ellora Taxi Car Cab Coach Hire on Rent\r\nAurangabad Ajanta Taxi Car Cab Coach Hire on Rent\r\nAurangabad Ellora Taxi Car Cab Coach Hire on Rent\r\nAurangabad Ajanta Caves Ellora Caves Taxi Car Cab Coach Hire on Rent\r\nAurangabad Ajanta Ellora Caves Taxi Car Cab Coach Hire on Rent\r\nAurangabad Shirdi Taxi Car Cab Coach Hire on Rent\r\nAurangabad Shanishignapur Taxi Car Cab Coach Hire on Rent\r\nAurangabad', '2017-10-13 16:17:10', NULL, 'Toyota\r\n', NULL, '', '', '', 'Diesel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(663, 'SBA539310MB', 142, NULL, NULL, NULL, 410, 16, '', 0, '', '', '', '', 'GET Rs 200 OFF ON DOOR TO DOOR CAR WASH DOT COM AT DELHI, R K PURAM', 400, '1', '', 0, '', NULL, 'Vishal Kumar', '7982010584', 'Delhi', 'HUDCO', 'Get Rs 200/- Off for doorstep stem car wash. It is pure Steam Car Wash at your doorstep. We use RO Water only with FREE WAX plus VACCUM as complimentary on every wash. Our imported hi-tech steam jet machine fitted on a mobile van which will be reached at your doorstep. Our cleaning staff will serves you better than normal water wash. IT IS STEAM WASH NOT A NORMAL WATER WASH.  To get Rs. 200/- Off kindly visit our webstie www.DoorToDoorCarWash.Com and u ser coupon code as CARWASH200\r\n\r\nDOOR TO DOOR', '2017-10-26 16:13:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'steam wash', 'doorstep car wash', 'Up To 50% Off', '2017-10-26', '0000-00-00', 'steam car wash', NULL, NULL, NULL, NULL, NULL, 'active');
INSERT INTO `property_post` (`pid`, `property_unique_id`, `uid`, `near_bus_stand`, `near_railway_station`, `amenities`, `category_id`, `main_categories_id`, `brokerage_price`, `brokerage_negociable`, `property_builder`, `property_residentaily`, `residential_category`, `property_furnish`, `property_title`, `property_price`, `price_negociable`, `deposite_price`, `deposite_negociable`, `rooms`, `area`, `property_owner_name`, `owner_contact_no`, `city`, `address_details`, `property_description`, `date`, `latitutde`, `car_name`, `longitutde`, `model`, `car_driven_kilometer`, `year`, `fuel`, `furniture_condtion`, `dealer_type`, `hall_facility`, `hall_type`, `water_storage`, `hanuman_temple`, `parking_square_foot`, `parking_type_one`, `parking_capcity`, `loan_type`, `single_room_type`, `store_name`, `offer_name`, `offer_type`, `from_date`, `end_date`, `product_name`, `school_name`, `school_pattern`, `dept_type`, `school_medium`, `root_num`, `status`) VALUES
(670, 'SBA857554P', 5, '15m', '5km', ',Lift,Water Storage,Security,Park', 2, 1, '14000', 1, 'Broker', 'Residential Property', 'Row Houses', 'Unfurnished', 'New 3 Bhk Row House For Rent For Family Near Airport Chikalthana Post By Broker Saibroking.com', 14000, '1', '30000', 1, '5 Rooms', '1200', 'Ambadas patil', '8087245555', 'Aurangabad', 'Chikalthana', 'New 3 Bhk Row House For Rent For Family Near Airport Chikalthana Post By Broker Saibroking.com\r\nParking\r\nLift\r\nWater Storage\r\nSecurity\r\nPark\r\n24Hrs Water\r\nNear Hotel \r\nNear Market\r\nGood location \r\nAll Campany Bus Stop \r\nOne Month Rent Broking Charge  \r\nHome Branch ; Near Reliance Mart Gajanan Colony Garkheda Parisar Auranagbad \r\nWaluj Branch ; Near P.M. Complex Near Kailas Hotel Cidco Mahanagar 2 Waluj MIDC \r\n\r\n', '2017-10-28 16:03:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(708, 'SBA946755HL', 146, NULL, NULL, 'Ac,Non/Ac,Luxury', 221, 14, '', 0, '', '', '', '', 'HOTEL KAILAS RESIDENCY AC ROOM   WALUJ CIDCO SOUTH CITY AURANGABAD', 1000, '0', '', 0, '', NULL, 'MUKUND JADHV ', '7774026354', 'Aurangabad', 'Waluj', 'HOTEL KAILAS RESIDENCY AC ROOM   WALUJ CIDCO SOUTH CITY AURANGABAD\r\n\r\nA\\C ROOM \r\nNON AC \r\nLUXURIOUS ROOMS \r\nCONFERENCE HALL\r\nFAAMILY RESTAURANT\r\nBAR & RESTAURANT ', '2017-11-04 16:34:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Single Room,Double Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(712, 'SBA723348OF', 5, NULL, NULL, NULL, 214, 9, '', 0, '', '', '', '', 'OLD FURNISHED FOR SALE \\', 1000, '0', '', 0, '', NULL, 'Namdev Pawar ', '8975667532', 'Aurangabad', 'Waluj', '				Old Furnished For Sale\r\n OfficeChair,Office Table,Bed,Dressing Table,Sofa Set etc \r\n\r\nShop Address ;C 134 MIDC Waluj Aurangabad  				', '2017-11-07 12:09:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Heavily used', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(715, 'SBA779907H', 5, NULL, NULL, NULL, 59, 3, '', 0, '', '', '', '', 'ALL TYPE OF PAINTING WORK', 3000, '0', '', 0, '', NULL, 'waseem raj', '9545500306', 'Aurangabad', 'GadiaVihar\r\n', '				ALL TYPE OF PAINTING WORK \r\n3000 ONLY 				', '2017-11-09 12:53:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(716, 'SBA543888WS', 147, NULL, NULL, NULL, 417, 13, '', 0, '', '', '', '', 'PARTH VADHUVAR SUCHIT KENDRA AURANGABAD', 2500, '0', '', 0, '', NULL, 'PARTH VADHUVAR SUCHIT KENDRA AURANGABAD  ONLY MARATHA ', '8421252944', 'Aurangabad', 'CIDCO, N-2', '				PARTH VADHUVAR SUCHIT KENDRA AURANGABAD\r\nRAGISTION FREES 2500 VALIDITY 1 YEAR \r\nFINALY FREES 5000\r\nONLY MARATHA MARRIGE \r\nOffice Ad ; Plot No. 29 Maya Nagar N 2 Cidco Behind Deepali Hotel Auranagbad				', '2017-11-09 19:22:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(724, 'SBA666847H', 5, NULL, NULL, NULL, 324, 3, '', 0, '', '', '', '', 'Om Sai Drainage Services ', 0, '0', '', 0, '', NULL, 'Arun Karke ', '9765900958', 'Aurangabad', 'Osmanpura', '\r\nOm Sai Drainage Services \r\n\r\n\r\nDraining Services \r\nShop Address; Chota Murlidhar Nagar ,Osmanpura,Aurangabad', '2017-11-14 19:11:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(735, 'SBA516418RS', 142, NULL, NULL, NULL, 115, 4, '', 0, '', '', '', '', 'Doorstep Car Wash Services @400  in South Delhi', 400, '0', '', 0, '', NULL, 'Vishal Kumar', '8851401212', 'New Delhi', 'Other', 'Get Steam Car Wash at your doorstep by Rs 400 only in South Delhi\r\n\r\nSteam Car Wash @400\r\nSteam Bike Wash @50\r\n\r\nSTEAM CAR WASH WITH RO WATER ONLY\r\nFREE WAX (MIXED WITH STEAM)\r\nVACUUM (OPTIONAL)\r\nDOORSTEP SERVICE\r\n\r\nSteam Car wash is now cheaper than normal water wash.\r\nSave your car’s life with steam washing.\r\n\r\nSteam Car Wash is for Germ-Free\r\nSteam Car Wash is for Bacteria-Free\r\nSteam Car Wash is for Dust-Free\r\n\r\nFor online booking:\r\nVisit: www.door2doorCarWash.Com\r\n\r\nFor Tele Booking:\r\nCall @8851401212\r\n', '2017-11-19 00:33:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(763, 'SBA596807H', 5, NULL, NULL, NULL, 129, 3, '', 0, '', '', '', '', 'SAI TIFFIN SERVICE LOCATION BEED BY PASS AURANGABAD', 2000, '1', '', 0, '', NULL, 'GANESH KALE', '9850484878', 'Aurangabad', 'Beed Bypass Road', '				SAI TIFFIN SERVICE LOCATION BEED BY PASS AURANGABAD				', '2017-12-04 19:15:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(764, 'SBA619041H', 5, NULL, NULL, NULL, 127, 3, '', 0, '', '', '', '', 'JOSHI\'S KITCHEN TROLLY SERVICE BY ALL AURANGABAD', 0, '0', '', 0, '', NULL, 'RAVINDRA JOSHI', '7588062770', 'Aurangabad', 'Kranti Chowk', 'JOSHI\'S KITCHEN TROLLY SERVICE BY ALL AURANGABAD', '2017-12-04 19:21:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(765, 'SBA181916H', 5, NULL, NULL, NULL, 63, 3, '', 0, '', '', '', '', 'SADGURU FURNITURE SERVICE BY ALL AURANGABAD', 0, '0', '', 0, '', NULL, 'VILAS DORALE', '9850988496', 'Aurangabad', 'CIDCO, N-4', '				SADGURU FURNITURE SERVICE BY ALL AURANGABAD				', '2017-12-04 19:26:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(766, 'SBA258032H', 5, NULL, NULL, NULL, 329, 3, '', 0, '', '', '', '', 'SOMAYA GLASS AND ALLUMINIUM SERVICE BY ALL AURANGABAD', 0, '0', '', 0, '', NULL, 'SOMAYA', '9325210588', 'aurangabad', 'Chikalthana', 'SOMAYA GLASS AND ALLUMINIUM SERVICE BY ALL AURANGABAD', '2017-12-04 19:33:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(767, 'SBA828087H', 5, NULL, NULL, NULL, 129, 3, '', 0, '', '', '', '', 'SREE TIFFIN SERVICES LOCATION BY ALL AURANGABAD', 0, '0', '', 0, '', NULL, 'SONWANE', '9011061985', 'Aurangabad', 'Beed Bypass Road', '				SREE TIFFIN SERVICES LOCATION BY ALL AURANGABAD				', '2017-12-04 19:39:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(768, 'SBA377750J', 157, NULL, NULL, NULL, 323, 11, '', 0, '', '', '', '', 'All kind of Free jobs available', 0, '0', '', 0, '', NULL, 'mpd', '9881125230', 'Aurangabad', 'Bahadurpura', '				All kind of Free jobs available with Shri Sai Info Tech\r\n1)Ad posting\r\n2)Ad clicking\r\n3)Video watching\r\n4)Video anchoring\r\n.......... and many more..\r\n 			', '2017-12-04 19:54:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(773, 'SBA641659RS', 159, NULL, NULL, NULL, 57, 4, '', 0, '', '', '', '', 'All Aurangabad Services', 500, '0', '', 0, '', NULL, 'Dinesh Sangule', '8378872713', 'Aurangabad', 'GarkhedaParisar\r\n', 'all auarnagabad services \r\n', '2017-12-07 18:43:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(778, 'SBA582356H', 5, NULL, NULL, NULL, 414, 3, '', 0, '', '', '', '', 'ARNAV ENTERPRISES  SOLAR WATER HEATER WATER PURIFIER SERCICE BY WALUJ', 0, '0', '', 0, '', NULL, 'CHAVHAN PATIL ', '9923167348', 'Aurangabad', 'Cidco Waluj Mahanagar-1', 'ARNAV ENTERPRISES  SOLAR WATER HEATER WATER PURIFIER SERCICE BY WALUJ\r\n', '2017-12-07 19:56:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(779, 'SBA940031H', 5, NULL, NULL, NULL, 134, 3, '', 0, '', '', '', '', 'JOJARE BADY MASAJ ONLY WOMEN ', 0, '0', '', 0, '', NULL, 'MEENA JOJARE ', '7058582710', 'Aurangabad', 'Gajanan Maharaj Mandir', 'JOJARE BADY MASAJ ONLY WOMEN \r\n', '2017-12-08 11:31:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(781, 'SBA251484J', 5, NULL, NULL, NULL, 323, 11, '', 0, '', '', '', '', 'ALL TYPE OF JOB PLACEMENT ', 0, '0', '', 0, '', NULL, 'BALAJI RITHHEKAR ', '9623200011', 'AURANAGABAD', 'Samarth Nagar', 'ALL TYPE OF JOB PLACEMENT \r\n10 FAIL / PASS    ALL TYPE OF JAB \r\nOffice Address ; Varad Ganesh Mandir Road ,Savarakar Chowk Samarth Nagar Aurangabad  ', '2017-12-08 11:46:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Placements / Consultancy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(782, 'SBA715683WS', 160, NULL, NULL, NULL, 33, 13, '', 0, '', '', '', '', 'D.K SOUND ', 0, '0', '', 0, '', NULL, 'KALYAN DONGARDIVE', '9325204273', 'AURANAGABAD', 'Moti Karanja', 'D.K. Sound  All Type Of Program \r\nD.J Show ,Fashion Show\r\nLive Recording System \r\nAll Type Of P.A System \r\nSale Of Sound System \r\nAddress ; MotiKaranja ,Naikwada ,Auranagabad ', '2017-12-08 12:12:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(783, 'SBA471837WS', 5, NULL, NULL, NULL, 32, 13, '', 0, '', '', '', '', 'Vishadeep Tent House & Catering Services ', 0, '0', '', 0, '', NULL, 'Vishnu Wagh ', '9423456308', 'AURANAGABAD', 'GarkhedaParisar\r\n', 'Vishadeep Tent House & Catering Services \r\n\r\nOffice Address ; 73 Gajanan Colony Garkheda Parisar Aurangabad', '2017-12-08 12:33:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(784, 'SBA814545RS', 5, NULL, NULL, NULL, 50, 4, '', 0, '', '', '', '', 'R-Tech Computers Sale& services ', 0, '0', '', 0, '', NULL, 'Vinod ', '9420405928', 'Aurangabad', 'Garkheda', 'R-Tech Computers Sale& services \r\nCar On Rent \r\nShop Address ; Near Reliance Mart, Garkheda, Aurangabad  ', '2017-12-08 12:41:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(785, 'SBA989925RS', 161, NULL, NULL, NULL, 185, 4, '', 0, '', '', '', '', 'Shree Vaishnavi Electricals & Repairing', 0, '0', '', 0, '', NULL, 'vinod bahire', '9552515875', 'Aurangabad', 'CIDCO, N-4', 'Shree Vaishnavi Electricals \r\n\r\nShop Address ; Plot No. 96 Balaji Tower Parijat Nagar Cidco N 4 Auranagabad ', '2017-12-08 13:01:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(786, 'SBA944767RS', 162, NULL, NULL, NULL, 50, 4, '', 0, '', '', '', '', 'Savta Computers Sale ,Services & Buyback', 0, '0', '', 0, '', NULL, 'Vijay Khobre ', '9766992222', 'AURANAGABAD', 'Deolai', 'Savta Computers Sale ,Services & Buyback\r\n\r\nAddress ; B-6, Mauli Nagar ,Beside Surya Lon\"s Beed By Pass Road,Deolai,Aurangabad ', '2017-12-08 13:31:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(787, 'SBA668157C', 5, NULL, NULL, NULL, 187, 5, '', 0, '', '', '', '', 'Omkar Motar Driving School ', 3000, '1', '', 0, '', NULL, 'S.B.Omkari', '9422203525', 'Aurangabad', 'Sutgirni Chowk', 'Omkar Motar Driving School \r\n\r\nOffice Address ; 6,Shreenivas Garden ,Sutgirni Chowk Garkheda Parisar ,Aurangabad ', '2017-12-08 15:28:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Class tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(788, 'SBA593886RS', 164, NULL, NULL, NULL, 50, 4, '', 0, '', '', '', '', 'Shree Rajeshwar Computers', 0, '0', '', 0, '', NULL, 'Chagan Patel', '8623916212', 'Aurangabad', 'Paithan Gate', 'Shree Rajeshwar Computer \r\nAll Type Of Printer Repair ,Sales & Services \r\nShop Address ;Shop No. 3 Bhgagwati Complex,Paithan Gate To Nirala Bazar Road Auranagabad ', '2017-12-08 15:50:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(789, 'SBA759790H', 5, NULL, NULL, NULL, 135, 3, '', 0, '', '', '', '', 'K.R Water Services ', 0, '0', '', 0, '', NULL, 'K.R ', '9326555535', 'Aurangabad', 'Central Naka', 'K.R Water Services \r\n\\\r\nOffce Address ; Khan Manjil ,V.I.P Hall Samor Jasvatpura Central Naka Aurangabad ', '2017-12-08 16:03:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(790, 'SBA888255H', 5, NULL, NULL, NULL, 151, 3, '', 0, '', '', '', '', 'Bhartia Jivan Bima Nirgam (LIC Agent )', 0, '0', '', 0, '', NULL, 'Pandurang Bhanudas Nagre ', '9422294177', 'AURANAGABAD', 'Town Centre', 'Bhartia Jivan Bima Nirgam (LIC Agent )\r\n\r\nOffice Address ; 98-D Jivan Suman ,Town Center ,Cidco,Auranagabad   ', '2017-12-08 18:22:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(791, 'SBA970573WS', 166, NULL, NULL, NULL, 36, 13, '', 0, '', '', '', '', 'Nitin Photography  service provide by all aurangabad', 0, '0', '', 0, '', NULL, 'Nitin Shejul Patil', '8605135817', 'Aurangabad', 'Nirala Bazar', 'Photography & Videogrphy\r\nCandit Photography\r\nCandit Wedding Video\r\nPri Wedding Photo Shoot\r\nPri Wedding Video Song\r\nKids Photography\r\nWedding Live Setup\r\nMakeking For The Album House\r\nKarizma Album\r\nPhoto Book Album\r\nZumbo Album\r\nAll Type Desing Work\r\nAll Type Video Editing Work ', '2017-12-09 12:10:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(794, 'SBA471331WS', 168, NULL, NULL, NULL, 388, 13, '', 0, '', '', '', '', 'Mayur Computer & Printers', 0, '0', '', 0, '', NULL, 'devre sir', '7798605612', 'Aurangabad', 'CIDCO, N-1', 'Mayur Computer & Printers\r\n\r\n Shop No.D-17 Bharat Bazar Bajula Aurangabad ', '2017-12-09 20:20:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(803, 'SBA439640RS', 5, NULL, NULL, NULL, 185, 4, '', 0, '', '', '', '', 'Sandeep Electrical All Aurangabad Repairing Services ', 200, '0', '', 0, '', NULL, 'Sandeep Somavanse ', '8180865585', 'Aurangabad', 'Garkheda', 'Sandeep Electrical All Aurangabad Repairing Services ', '2017-12-11 12:29:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(804, 'SBA202520H', 5, NULL, NULL, NULL, 62, 3, '', 0, '', '', '', '', 'Ahilya HP Gas Agency Beed By Pass ', 0, '0', '', 0, '', NULL, 'Ahilya Agency ', '9823080040', 'Aurangabad', 'Beed Bypass Road', 'Ahilya HP Gas Agency Beed By Pass \r\n\r\nOffice Address; Plot No 567 Gat No 91 Part, Beed Pass Road, Aurangabad Ho, Aurangabad-Maharashtra - 431001, Deep Nagar , Behind Godavari Hotel', '2017-12-11 13:04:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(805, 'SBA758976H', 5, NULL, NULL, NULL, 62, 3, '', 0, '', '', '', '', 'Bhakara Agencies Samarth Nagar ', 0, '0', '', 0, '', NULL, 'Bhaskara Agency ', '8888823456', 'AURANAGABAD', 'Samarth Nagar', '\r\nBhakara Agencies Samarth Nagar \r\n\r\nOffice Address;;Samarthnagar Aurangabad, Aurangabad-Maharashtra - 431001', '2017-12-11 13:15:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(806, 'SBA750384H', 5, NULL, NULL, NULL, 62, 3, '', 0, '', '', '', '', 'Umakiran HP Gas Agency ', 0, '0', '', 0, '', NULL, 'Umakiran Agency ', '9637501141', 'Aurangabad', 'Shahnurwadi', 'Umakiran HP Gas Agency \r\n\r\n Agency Address; Renuka Krupa Apartment, Shahanoorwadi, Aurangabad, ', '2017-12-11 13:21:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(807, 'SBA417771H', 5, NULL, NULL, NULL, 62, 3, '', 0, '', '', '', '', 'Pawan Gas Services ', 0, '0', '', 0, '', NULL, 'pawan agency', '9422202555', 'Aurangabad', 'Osmanpura', 'Pawan Gas Services \r\nAgency Address ;;  No 2, near sant Eaknath rang mndir, Osmanpura, Aurangabad-Maharashtra - 431005, Vikas Nagar,new osmanpura', '2017-12-11 13:30:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(808, 'SBA768567H', 5, NULL, NULL, NULL, 62, 3, '', 0, '', '', '', '', 'Sambhaji Bharat  Gas Agency Shivaji Nagar Garkheda Parisar ', 0, '0', '', 0, '', NULL, 'Sambhaji Gas Agency ', '8600012228', 'Aurangabad', 'Sutgirni Chowk', 'Sambhaji Bharat  Gas Agency Shivaji Nagar Garkheda Parisar \r\nAgency Address \'; shop no.03, Yash Nakshatra Apartment, Embrald city road Opp.Janki Hotel Shivaji Nagar, Aurangabad', '2017-12-11 15:32:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(809, 'SBA635067H', 5, NULL, NULL, NULL, 62, 3, '', 0, '', '', '', '', 'C.T.Parikh  (gas Booking & Refiling Centre)', 0, '0', '', 0, '', NULL, 'parikh ', '9923220926', 'Aurangabad', 'Bajaj Nagar', 'C.T.Parikh  (gas Booking & Refiling Centre)\r\nAddress;   Meenatai Thakre Market, Bajaj Nagar, Pandharpur, Aurangabad', '2017-12-11 15:38:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(810, 'SBA593912H', 5, NULL, NULL, NULL, 62, 3, '', 0, '', '', '', '', 'Umakiran Bhart Gas Agency', 0, '0', '', 0, '', NULL, 'agecy', '9423147572', 'Aurangabad', 'Dargah Road', 'Umakiran Bhart Gas Agency\r\nOffice Address Dargha Road Aurangabad', '2017-12-11 15:44:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(811, 'SBA966596H', 5, NULL, NULL, NULL, 62, 3, '', 0, '', '', '', '', 'Uma Kiran Bharat Gas Agency', 0, '0', '', 0, '', NULL, 'Uma Kiran Bharat Gas Agency', '9823595926', 'Aurangabad', 'Garkheda', 'Uma Kiran Bharat Gas Agency\r\n\r\n Office Address ; renuka complex, sangram nagar, Garkheda, Aurangabad-Maharashtra - 431009, below uddan pul, behind jain school', '2017-12-11 15:55:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(812, 'SBA820050H', 5, NULL, NULL, NULL, 62, 3, '', 0, '', '', '', '', 'Shree Yogeshwari Bharat gas', 0, '0', '', 0, '', NULL, 'Shree  Yogeshwari Bharat Gas ', '8446572700', 'AURANAGABAD', 'Chikalthana', 'Shree  Yogeshwari Bharat Gas \r\nAgency Address ; Shop No 17, Gayatri Complex, Jalna Road, Chikalthana Industrial Area, Aurangabad-Maharashtra', '2017-12-11 16:03:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(818, 'SBA273064H', 5, NULL, NULL, NULL, 62, 3, '', 0, '', '', '', '', 'Satyajeet Indane  Gas Agency Waluj', 0, '0', '', 0, '', NULL, 'Satyajeet Agency ', '9623224365', 'Aurangabad', 'Waluj', 'Satyajeet Indane  Gas Agency Waluj\r\n\r\nAgency Address; F 11/12 Udyog Icon, Nagar Pune Highway, Waluj MIDC, Aurangabad-Maharashtra - 431136, Oasis Chowk ', '2017-12-13 11:59:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(819, 'SBA727539RS', 5, NULL, NULL, NULL, 185, 4, '', 0, '', '', '', '', 'Sopanpurti Eletricals In Cidco ', 0, '0', '', 0, '', NULL, 'Prakash Raut', '7507536496', 'Aurangabad', 'CIDCO', 'Sopanpurti Eletricals In Cidco \r\n\r\nAll Aurangabad Services ', '2017-12-13 12:27:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(820, 'SBA142092H', 5, NULL, NULL, NULL, 68, 3, '', 0, '', '', '', '', 'Joynet Broad Brand Internet Connection ', 0, '0', '', 0, '', NULL, 'Joynet Office', '8446464612', 'Aurangabad', 'Sutgirni Chowk', 'Joynet Broad Brand Internet Connection \r\nAll Aurangabad Services Internet Connection\r\nOffice Address ; Sutgirni Chowk Garkheda Parisar Auranagabad  \r\n', '2017-12-13 12:35:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(823, 'SBA504930H', 5, NULL, NULL, NULL, 68, 3, '', 0, '', '', '', '', 'Seva Internet Works Service By All Aurangabad & Waluj ', 0, '0', '', 0, '', NULL, 'internet office', '7219878704', 'Aurangabad', 'Waluj', '				Seva Internet Works \r\nSeva Internet Works \r\nAll Aurangabad &Waluj 				', '2017-12-13 15:20:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(824, 'SBA668710C', 5, NULL, NULL, NULL, 187, 5, '', 0, '', '', '', '', 'BABA MOTOR DRIVING SCHOOL', 5000, '1', '', 0, '', NULL, 'BABA MOTAR', '9158337777', 'Aurangabad', 'CIDCO, N-7', 'BABA MOTOR DRIVING SCHOOL\r\nAddress: Shop No: 6, CIDCO Shopping Centre, Wockhardt Corner, Beside Devgiri Bank, N 7, Cidco, Aurangabad, Maharashtra 431003', '2017-12-13 17:11:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Class tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(825, 'SBA144860C', 5, NULL, NULL, NULL, 187, 5, '', 0, '', '', '', '', 'Tuljai Driving School (For Ladies)', 5000, '1', '', 0, '', NULL, 'Driving Office ', '9823033594', 'Aurangabad', 'GarkhedaParisar\r\n', 'Tuljai Driving School (For Ladies)\r\nAddress: 3, Emerald City, Garkheda Area, Garkheda, Aurangabad, Maharashtra 431009', '2017-12-13 17:38:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Class tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(826, 'SBA159491C', 5, NULL, NULL, NULL, 187, 5, '', 0, '', '', '', '', 'Kartik Motor Driving School', 5000, '1', '', 0, '', NULL, 'Kartik', '7385843371', 'Aurangabad', 'Deolai', 'Kartik Motor Driving School\r\n\r\nAddress: KK Patel And Sons Complex, NH 211, Rajiv Gandhi Bhaji Market, Satara Deolai Parisar, Aurangabad, Maharashtra 431005', '2017-12-13 17:48:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Class tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(827, 'SBA172366C', 5, NULL, NULL, NULL, 187, 5, '', 0, '', '', '', '', 'Bajrang Motor Driving School', 5000, '0', '', 0, '', NULL, 'Ambadas patil', '9923974576', 'Aurangabad', 'CIDCO, N-4', 'Bajrang Motor Driving School\r\nAddress: Shop No:27, Dharti Dhan Plaza, Hanuman Chowk, Gurusahani Nagar, Sector N 4, Cidco, Aurangabad, Maharashtra 431009', '2017-12-13 17:54:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Class tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(831, 'SBA687338C', 5, NULL, NULL, NULL, 42, 5, '', 0, '', '', '', '', 'Shri GAJANAN YOGA International Center In Yoga Excellence', 1500, '1', '', 0, '', NULL, 'Yoga Centre ', '9922525049', 'Aurangabad', 'Jalna Road', 'Shri GAJANAN YOGA International Center In Yoga Excellence\r\n\r\nAddress: floor Tulsi chambers, 3, In Front Of S.F.S School, Jalna Road, Mahesh Nagar, Mahesh nagar, Jalna road, Aurangabad, Maharashtra 431001', '2017-12-14 15:02:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Class tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(832, 'SBA391862C', 5, NULL, NULL, NULL, 42, 5, '', 0, '', '', '', '', 'DHANWATARI YOGA CLASSES', 2000, '1', '', 0, '', NULL, 'dhanwantari yoga ', '7775827377', 'AURANAGABAD', 'CIDCO, N-5', 'DHANWATARI YOGA CLASSES\r\n\r\n\r\nAddress: plot no.7/ H/, Satyam Nagar, N 5, Cidco, Aurangabad, Maharashtra 431003', '2017-12-14 15:13:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Class tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(833, 'SBA811972CR', 5, NULL, NULL, NULL, 94, 6, '', 0, '', '', '', '', 'Vijay Auto Deal ', 300000, '1', '', 0, '', NULL, 'Vijay Jonjale', '9766925555', 'aurangabad', 'Garkheda', 'Vijay Auto Deal \r\n\r\n Gajanan Mandir Kada Office Samor Vishal Nagar Auranagbad \r\n', '2017-12-14 16:04:09', NULL, 'Maruti Suzuki\r\n', NULL, '', '10000', '2005', 'Petrol', NULL, 'Dealer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(834, 'SBA350829H', 5, NULL, NULL, NULL, 170, 3, '', 0, '', '', '', '', 'SHELKE MAMA VEG  DHABA DAULATABAD ROAD AURANGABAD', 0, '0', '', 0, '', NULL, 'MR.Shelke Mama ', '9860103023', 'aurangabd', 'Padegaon', 'VEG DHABA FAMILY GARDEN DAULATABAD T POINT DAULTABAD ROAD DIST.AURANGABAD', '2017-12-14 19:59:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(835, 'SBA373694H', 5, NULL, NULL, NULL, 170, 3, '', 0, '', '', '', '', 'SPECIALLY NON VEG HOTEL ONLY GANGE PATIL HOTEL', 0, '0', '', 0, '', NULL, 'gange patil', '7798222122', 'AURANAGABAD', 'GarkhedaParisar\r\n', 'Description\r\nSpecially Non Veg Hotel Only Gange patil Hotel Best Hotel Hotel Time ; 9;00 AM TO 9;00 PM Hotel Address ; Behind Near Reliance Mart Vijay Chowk Garkheda Parisar Aurangabad', '2017-12-14 20:09:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(836, 'SBA366303H', 5, NULL, NULL, NULL, 170, 3, '', 0, '', '', '', '', 'Hotel Nitin Maratha Veg &Non Veg Auranagabad', 0, '0', '', 0, '', NULL, 'Santosh Patil', '9112452048', 'Aurangabad', 'GarkhedaParisar\r\n', 'Hotel Nitin Maratha Veg &Non Veg Auranagabad	\r\nHotel Address ; Gajanan Colony ,Reliance Mart To Hindurashtra Chowk Road Garkheda Parisar Auranagabad 			', '2017-12-14 20:14:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(840, 'SBA343346H', 5, NULL, NULL, NULL, 143, 3, '', 0, '', '', '', '', 'Taka Tak Bhangar Wala ', 0, '0', '', 0, '', NULL, 'Taka Tak Bhangar Wala ', '9561688428', 'AURANAGABAD', 'CIDCO, N-4', 'Taka Tak Bhangar Wala \r\nAll Auranagabad Services ', '2017-12-16 10:36:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(841, 'SBA684038WS', 5, NULL, NULL, NULL, 32, 13, '', 0, '', '', '', '', 'Shree Gajanan Catering', 0, '0', '', 0, '', NULL, 'Bhimrao Aaswat ', '9822953892', 'Aurangabad', 'GarkhedaParisar\r\n', 'Shree Gajanan Catering\r\n    \r\nAddress ; Shree Pan Centre Essar Petrol Pump Samor Pundlik Nagar Road Aurangabad  ', '2017-12-16 10:45:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(842, 'SBA470239H', 5, NULL, NULL, NULL, 328, 3, '', 0, '', '', '', '', 'Shree Gajanan Style Saloon ', 0, '0', '', 0, '', NULL, 'Gajanana Bidve ', '9860006176', 'Aurangabad', 'Pundalik Nagar', 'Shree Gajanan Style Saloon \r\n  Shop Address ;Shop No. 18 Vaheguru Complex,Gajanan Mandir, Pundlik Nagar Road Aurangabad ', '2017-12-16 11:14:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(843, 'SBA580798H', 172, NULL, NULL, NULL, 152, 3, '', 0, '', '', '', '', 'Gaurav Fabrication ', 0, '0', '', 0, '', NULL, 'Vishal Khanse ', '8007292298', 'Aurangabad', 'GarkhedaParisar\r\n', 'Gaurav Fabrication \r\nShop ADDRESS ; Kalpatru Hausing Society Hindu Rashtra Chowk Vijay Nagar Road Aurangabad', '2017-12-16 11:25:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(844, 'SBA561329WS', 173, NULL, NULL, NULL, 33, 13, '', 0, '', '', '', '', 'DJSUMIT SS', 0, '0', '', 0, '', NULL, 'SUMIT', '8928451561', 'Aurangabad', 'GarkhedaParisar\r\n', 'DJSUMIT SS\r\nAll Auranagabad Services \r\n     Special Show  Dj ,live, Orchestra , Roadshow ', '2017-12-16 11:32:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(845, 'SBA527974WS', 5, NULL, NULL, NULL, 184, 13, '', 0, '', '', '', '', 'Shiv Mahalhar Shaktishali Party', 0, '0', '', 0, '', NULL, 'Govind Bhande ', '7057127059', 'AURANAGABAD', 'Satara Parisar', 'Shiv Mahalhar Shaktishali Party\r\n\r\nAddress ; Satara Parisar ', '2017-12-16 15:50:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(848, 'SBA311804H', 5, NULL, NULL, NULL, 59, 3, '', 0, '', '', '', '', 'New Look Painter', 0, '0', '', 0, '', NULL, 'Sayyed A Imaran ', '7758884257', 'Aurangabad', 'Panchakki', 'New Look Painter\r\n\r\nOpp.Panchakki PES College Road Auranangabad ', '2017-12-16 16:09:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(849, 'SBA284377C', 5, NULL, NULL, NULL, 117, 5, '', 0, '', '', '', '', 'Braincorp Exploring Talents', 1000, '1', '', 0, '', NULL, 'nitin saboo', '9021728025', 'aurangabad', 'Osmanpura', 'Braincorp Exploring Talents\r\nAddress ;Block 1,Laxmishanti Building ,Beside Pawan Gas Agency ,New Osmanpura ,Aurangabad', '2017-12-16 16:23:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Class tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(850, 'SBA372675RS', 5, NULL, NULL, NULL, 50, 4, '', 0, '', '', '', '', 'Parth Services ', 1000, '1', '', 0, '', NULL, 'Ramesh Kathar ', '9595299268', 'AURANAGABAD', 'GarkhedaParisar\r\n', 'Parth Services \r\nShop Address ;Vishal Nagar Gajanan Mandir,Garkheda Parisar Auranagabad ', '2017-12-16 17:34:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(854, 'SBA527496J', 110, NULL, NULL, NULL, 382, 11, '', 0, '', '', '', '', 'We are Hiring - Earn Rs.15000/- Per month - Simple Copy Paste Jobs', 0, '0', '', 0, '', NULL, 'sonu khurana', '8467049758', 'Delhi', 'Bansilal Nagar', ' 	Earn Rs.25000/- per month - Simple online Jobs - Are You Looking for Home-Based Online Jobs? - Are You a Student, Housewife, jobseeker ? - Are you ready to Work 1 to 2 Hours daily Online? - Do You need Guaranteed Payment Monthly? Then this is for You, - Clicking on their Advertisement E-mails. - Submitting their Data\'s online. - Reading their Advertisement Sms. - Filling Forms on their websites, etc,. FREE to Join >> http://dailyonlinejobs.com\r\nDPJ0003433  13 06 2018 10:10:30\r\n				', '2017-12-18 12:03:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Placements / Consultancy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(856, 'SBA671000H', 5, NULL, NULL, NULL, 147, 3, '', 0, '', '', '', '', 'Pawar Associate', 0, '0', '', 0, '', NULL, 'Pawar b.p', '7841964241', 'Aurangabad', 'Hanuman Nagar', 'Pawar Associate\r\nAll Type Loan \r\nBank Account Opening \r\nDemat Account Opening \r\nI.T.R File\r\nPan Card\r\nShop Act License \r\nFood License \r\nP.F.ESI Registration \r\nN.G.O Registration \r\nN.G.O Registration L.I.C Policy \r\nVehicle Insurance \r\nCustomer Service Point \r\nGeneral Insurance \r\nLabor & Security License\r\n\r\nADDRESS ; Plot No. 214 New Hanuman Nagar ,Cidco Auranagabad ', '2017-12-18 16:17:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(857, 'SBA257039WL', 5, NULL, NULL, NULL, 25, 12, '', 0, '', '', '', '', 'Ramchandra Hall Beed By Pass', 0, '0', '', 0, '', '2500', 'Atish Pole ', '9920983366', 'Aurangabad', 'Beed Bypass Road', 'Ramchandra Hall Beed By Pass\r\nHall Address ;M I T College Samor Beed By Pass ,Auranagabad', '2017-12-19 10:48:18', NULL, NULL, NULL, '1900', NULL, NULL, NULL, NULL, NULL, 'A/C Hall', 'Without Decoration', '2000', '200 ', '', 'Yes', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(858, 'SBA351443C', 5, NULL, NULL, NULL, 125, 5, '', 0, '', '', '', '', 'Spoken English Grammer Classes Near Parimal Society ', 3000, '1', '', 0, '', NULL, 'sanjay khadke', '9405912947', 'AURANAGABAD', 'Other', 'Spoken English Grammer Classes Near Parimal Society \r\nInstitide Of English Development \r\n\r\nClasses Address ; 28,Durgamata Colony Near Parimal Society Auranagabad ', '2017-12-19 10:56:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Home tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(859, 'SBA105301RS', 5, NULL, NULL, NULL, 431, 4, '', 0, '', '', '', '', 'Website Developer ', 10000, '1', '', 0, '', NULL, 'Developer ', '9673526222', 'Aurangabad', 'Juna Bazar', 'Website Developer \r\nAddress ;Juna Bazar , Near Head Post Office ,Aurangabad', '2017-12-19 11:11:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(860, 'SBA838088H', 5, NULL, NULL, NULL, 126, 3, '', 0, '', '', '', '', 'Jai Bhadra Dish Fitting', 0, '0', '', 0, '', NULL, 'Santosh Patil', '8554031119', 'Aurangabad', 'Khokadpura', 'Jai Bhadra Dish Fitting\r\n\r\nShop Address ;Hanuman Mandirajaval,Khokadpura ,Aurangabad', '2017-12-19 11:26:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(861, 'SBA780300H', 5, NULL, NULL, NULL, 424, 3, '', 0, '', '', '', '', 'Stamp Vendor ', 0, '0', '', 0, '', NULL, 'Satish Harsulkar', '9422211142', 'Aurangabad', 'Adalat Road', 'Stamp Vendor \r\ne-payment of stamp duty and regi fee\r\ne-fileing services \r\ne-registration\r\ndeed drafting \r\nAdd  Sub Registrar Office, Collector Office Premisses,Auranagabad ', '2017-12-19 11:38:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(862, 'SBA578773HL', 178, NULL, NULL, 'Ac,Meeting Hall,Conference Hall', 221, 14, '', 0, '', '', '', '', 'Hotel Starlight Inn ', 0, '0', '', 0, '', NULL, 'P.K.Khan', '7066816599', 'Aurangabad', 'Mondha', 'Hotel Starlight Inn \r\n\r\nAc\r\nMeeting Hall\r\nConference Hall\r\nSingle Room\r\nDouble Room\r\nHotel Address ; Laaxman Chawdi Mondhaa Road,Aurangabad', '2017-12-19 11:49:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Single Room,Double Room,Hall', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(864, 'SBA973600H', 5, NULL, NULL, NULL, 148, 3, '', 0, '', '', '', '', 'Sanjay Tours & Travels', 0, '0', '', 0, '', NULL, 'Cidco Office', '9423450424', 'Aurangabad', 'CIDCO', 'Sanjay Tours & Travels\r\n\r\nCidco Office ;Shop No.6 Yash Tower Near Naik College ,Jalna Road Aurangabad', '2017-12-19 12:09:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(865, 'SBA452902H', 5, NULL, NULL, NULL, 427, 3, '', 0, '', '', '', '', 'Raza Hussain Handloom Carpet ', 0, '0', '', 0, '', NULL, 'Md.Ishaa ', '9156167558', 'Aurangabad', 'Other', 'Raza Hussain Handloom Carpet \r\nShop Address ; Godown Shahbazar ,Champa Chowk ,Aurangabad', '2017-12-19 12:52:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(866, 'SBA808287H', 5, NULL, NULL, NULL, 413, 3, '', 0, '', '', '', '', 'Arvind Jaldhara  in All Aurangabad', 0, '0', '', 0, '', NULL, 'No Name ', '9423686325', 'Aurangabad', 'Garkheda', 'Arvind Jaldhara  in All Aurangabad\r\n\r\nSwami Samarth Kendra Jawal ,Garkheda Parisar ,Aurangabad', '2017-12-19 13:08:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(868, 'SBA480450RS', 5, NULL, NULL, NULL, 396, 4, '', 0, '', '', '', '', 'Sai Siddha Chair Gangapur', 0, '0', '', 0, '', NULL, 'Suresh B.Sonawane', '8408055818', 'Aurangabad', 'Gangapur', 'Sai Siddha Chair Gangapur\r\nSeating Systems , Revolving , Computer Chair, Stand Frame , Component Of Chair \r\n\r\n\r\nRajangaon ,Gangapur ', '2017-12-19 13:24:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(870, 'SBA366399RS', 11, NULL, NULL, NULL, 50, 4, '', 0, '', '', '', '', 'Computer Repairing Services', 500, '0', '', 0, '', NULL, 'Globallianz', '9370977391', 'Aurangabad', 'Gajanan Maharaj Mandir', 'Computer repairing services', '2017-12-19 17:45:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(871, 'SBA355753H', 11, NULL, NULL, NULL, 171, 3, '', 0, '', '', '', '', 'Home Important Category', 1000, '0', '', 0, '', NULL, 'Globallianz', '9370977391', 'Aurangabad', 'Gajanan Maharaj Mandir', 'Home Important Category', '2017-12-19 17:48:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(887, 'SBA825002P', 5, '2m', '2km', ',Water Storage,Security,Park', 2, 1, '17000', 0, 'Broker', 'Commercial Property', 'Office', 'Unfurnished', 'Shop For Rent For Office Cidco N 1 Near Prozone Mall Post By Broker Saibroking', 17000, '1', '20000', 0, '', '300', 'Ambadas patil', '8087245555', 'Aurangabad', 'CIDCO, N-1', 'Shop For Rent For Office Cidco N 1 Near Prozone Mall Post By Broker Saibroking\r\nGood location \r\nCar Parking\r\nOne Month Rent Broking Charge  \r\nHome Branch ; Near Reliance Mart Gajanan Colony Garkheda Parisar Auranagbad \r\nWaluj Branch ; Near P.M. Complex Near Kailas Hotel Cidco Mahanagar 2 Waluj MIDC \r\n', '2017-12-24 19:29:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(888, 'SBA447608C', 181, NULL, NULL, NULL, 125, 5, '', 0, '', '', '', '', 'Join illuminati +27747758172', 200, '1', '', 0, '', NULL, 'jacobs lloyd', '0747758172', 'Johannesburg', 'Bajaj Nagar', 'Are you sure that you want to join illuminati society?\r\nI have been guiding many people through\r\nSpirit guides from all over the World.\r\nI will reveal to you the secrets of\r\nYour life, and mysteries of the untold.\r\nHelping you achieve your goals for success\r\nAnd ways to improve your destiny.\r\n', '2017-12-27 10:30:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Class tution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(936, 'SBA571739H', 5, NULL, NULL, NULL, 59, 3, '', 0, '', '', '', '', 'rahul painting ', 0, '0', '', 0, '', NULL, 'rahul', '8796074883', 'AURANAGABAD', 'Gajanan Maharaj Mandir', '				Rahul Painting \r\n\r\nDico Paints \r\nLamination \r\nPollish \r\nAll Type Painting \r\nAddress ; Plot No. Gajanan Colony ,Auranagabad 				', '2018-01-28 12:42:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(937, 'SBA940320H', 5, NULL, NULL, NULL, 137, 3, '', 0, '', '', '', '', 'Sai Dental Clinic ', 0, '0', '', 0, '', NULL, 'Rahul Birajdar ', '9822608320', 'AURANAGABAD', 'Jyoti Nagar', 'Sai Dental Clinic \r\n\r\nClinic Addresss ; Plot No. 240 Success Hill ,Jyotinagaar ,Ridhhi Sidhhi Apartment Near ,Durga Road ,Aurangabad \r\nClinic Time ;9;30 To 1;30  & 5;30 to 9;30', '2018-01-28 12:53:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(939, 'SBA321716P', 5, '', '', ',Water Storage,Security', 2, 1, '10000', 0, 'Broker', 'Residential Property', 'Row Houses', 'Unfurnished', '3 Bhk Row House  For Rent For Family Near Chate School Beed By Pass  Post By Broker Saibroking ', 10000, '0', '30000', 0, '5 Rooms', '1200', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Beed Bypass Road', '3 Bhk Row House  For Rent For Family Near Chate School Beed By Pass  Post By Broker Saibroking \r\n\r\nBest Row House \r\n24Hrs Water\r\nNear Hotel \r\nNear Market\r\nGood location \r\nCar Parking\r\nOne Month Rent Broking Charge  \r\nHome Branch ; Near Reliance Mart Gajanan Colony Garkheda Parisar Auranagbad \r\nWaluj Branch ; Near P.M. Complex Near Kailas Hotel Cidco Mahanagar 2 Waluj MIDC \r\n\r\n', '2018-01-29 10:06:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(940, 'SBA670304P', 5, '', '', ',Lift,Water Storage,Security,Park', 2, 1, '8000', 0, 'Broker', 'Residential Property', 'Apartments', 'Unfurnished', '2Bhk Flat For Rent For Family Near Chate School Beed By Pass Post By Broker Saibroking ', 8000, '0', '16000', 0, '4 Rooms', '900', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Beed Bypass Road', '2Bhk Flat For Rent For Family Near Chate School Beed By Pass Post By Broker Saibroking \r\n\r\nBest Flat \r\n24Hrs Water\r\nNear Hotel \r\nNear Market\r\nGood location  \r\nCar Parking\r\nOne Month Rent Broking Charge  \r\nHome Branch ; Near Reliance Mart Gajanan Colony Garkheda Parisar Auranagbad \r\nWaluj Branch ; Near P.M. Complex Near Kailas Hotel Cidco Mahanagar 2 Waluj MIDC \r\n\r\n', '2018-01-29 10:16:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(954, 'SBA464690WS', 5, NULL, NULL, NULL, 33, 13, '', 0, '', '', '', '', 'Swar-Samraath  DJ & System ', 0, '0', '', 0, '', NULL, 'Narvade ', '9096060599', 'AURANAGABAD', 'Jaibhavani Nagar', 'Swar-Samraath  DJ & System \r\n\r\nGali No.12 Jai Bhavani Nagar ,Aurangabad', '2018-02-03 15:05:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(955, 'SBA859114H', 5, NULL, NULL, NULL, 148, 3, '', 0, '', '', '', '', 'Mahalaxmi Travels ', 0, '0', '', 0, '', NULL, 'rajesh paatni', '9021888100', 'AURANAGABAD', 'CIDCO, N-5', 'Mahalaxmi Travels \r\n\r\nOffice ; Plot No.13 N 5 Opp.Bhakti Ganesh Mandir,Jalgaon Road,Auranagabad\r\n', '2018-02-03 15:15:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(956, 'SBA658877WS', 5, NULL, NULL, NULL, 33, 13, '', 0, '', '', '', '', 'Sai Raj Dj ', 0, '0', '', 0, '', NULL, 'Ameya s.Pole ', '9595228878', 'AURANAGABAD', 'Beed Bypass Road', 'Sai Raj Dj \r\nAddress ; Opp.Hotel Aditya Beed By Pass ,Deolai Chowk ,Aurangabad \r\n\r\n\r\n', '2018-02-03 15:21:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(960, 'SBA264654J', 189, NULL, NULL, NULL, 109, 11, '', 0, '', '', '', '', 'Ad Posting Work-Part Time Job-Franchise Offer-Business Promotion in Gaya K-Mention', 0, '1', '', 0, '', NULL, 'chandan k', '9898665104', 'ajantha', 'Ajantha', 'kig5094Ad-posting work is an extremely easy job; it requires basic You can work at any time and place,You can work full time or part time as you wish to earn more or less.Promote your Business/Services through our online advertising marketing system. We promote your business/services worldwide. Get benefited from national & international customer through our web promotion activities and targeted advertising. We also require Franchise Develoment Manager in every country for Online Adposting Jobs.', '2018-02-06 20:24:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Placements / Consultancy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(963, 'SBA987451H', 5, NULL, NULL, NULL, 126, 3, '', 0, '', '', '', '', 'Dish TV New Connection ', 0, '0', '', 0, '', NULL, 'Santosh Jadhav ', '7841863118', 'AURANAGABAD', 'Balaji Nagar', 'Dish TV New Connection \r\nAddress ; Plot No;C 39 Tanaji Chowk ,Shivshankar Colony ,Aurangabad', '2018-02-08 19:48:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(964, 'SBA380649WS', 5, NULL, NULL, NULL, 182, 13, '', 0, '', '', '', '', 'Jai Feta & Inwell ', 0, '0', '', 0, '', NULL, 'sanjay utade ', '7741819964', 'AURANAGABAD', 'Sillod', 'Maharashtrach Shan Fetyacha Maan \r\n\r\n\r\nJai Feta & Inwell \r\nAddress ; Savarkhedi Wadi, (Borgaon Bazar ) Taluka.Sillod    Dist.A\'bad', '2018-02-10 11:38:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active');
INSERT INTO `property_post` (`pid`, `property_unique_id`, `uid`, `near_bus_stand`, `near_railway_station`, `amenities`, `category_id`, `main_categories_id`, `brokerage_price`, `brokerage_negociable`, `property_builder`, `property_residentaily`, `residential_category`, `property_furnish`, `property_title`, `property_price`, `price_negociable`, `deposite_price`, `deposite_negociable`, `rooms`, `area`, `property_owner_name`, `owner_contact_no`, `city`, `address_details`, `property_description`, `date`, `latitutde`, `car_name`, `longitutde`, `model`, `car_driven_kilometer`, `year`, `fuel`, `furniture_condtion`, `dealer_type`, `hall_facility`, `hall_type`, `water_storage`, `hanuman_temple`, `parking_square_foot`, `parking_type_one`, `parking_capcity`, `loan_type`, `single_room_type`, `store_name`, `offer_name`, `offer_type`, `from_date`, `end_date`, `product_name`, `school_name`, `school_pattern`, `dept_type`, `school_medium`, `root_num`, `status`) VALUES
(965, 'SBA320691WS', 5, NULL, NULL, NULL, 182, 13, '', 0, '', '', '', '', 'Sopnil Fetewala ', 0, '0', '', 0, '', NULL, 'sopnil', '8055559502', 'AURANAGABAD', 'Hanuman Nagar', 'Sowpnil Fetewala \r\nAddress ; Hanuman Chowk , Garkheda Parisar ,Aurangabad  ', '2018-02-10 16:40:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(973, 'SBA481855WS', 194, NULL, NULL, NULL, 31, 13, '', 0, '', '', '', '', 'Balloon Decorations In Aurangabad', 0, '0', '', 0, '', NULL, 'Akash Pandey', '7020826056', 'aurangabad', 'Other', 'Balloon Decorations Aurangabad has been helping people across the city with balloon decorations on various occasions like birthday parties,  anniversaries, get-togethers etc. Balloon decorations can also be done in showrooms, homes, shops, malls etc.\r\nWe have a trained professional team whose job is to give you the best balloon decor in the best time and price possible.\r\n& Mr. Akash head the firm and motivate our team. You can directly reach them at \r\n\r\nAkash - 7020826056', '2018-02-21 14:01:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(998, 'SBA833114MB', 201, NULL, NULL, NULL, 410, 16, '', 0, '', '', '', '', 'LOAN OFFER, APPLY NOW', 0, '0', '', 0, '', NULL, 'ahmedalim', '8147009263', 'india', 'Mukundwadi', '				\r\n\r\nHello,\r\n\r\nAre you looking for a loan? We can grant you the loan, with an interest rate of 3%\r\nBelow are the types of loans, that we offer.\r\n\r\n*Personal Loan\r\n*Business Loan\r\n*Secured Loan\r\n*Unsecured loan\r\n*Consolidation Loan\r\n*Mortgage Loan\r\n*Project Loan\r\n*Student Loans\r\n*Commercial Loan\r\n*Car Loan\r\n\r\nIf you are highly interested, kindly contact us via e-mail address:collinbest.loan@yahoo.in\r\n\r\nMr. Richard Walters\r\ncollinbest.loan@yahoo.in				', '2018-03-13 01:50:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ahmedalim', 'ahmedalim', 'Buy 2 Get 3 Free', '0000-00-00', '0000-00-00', 'ahmedalim', NULL, NULL, NULL, NULL, NULL, 'active'),
(999, 'SBA807027MB', 201, NULL, NULL, NULL, 410, 16, '', 0, '', '', '', '', 'Do you need financial assistance apply now', 0, '0', '', 0, '', NULL, 'ahmedalim', '8147009263', 'India', 'Ambedkar Chowk', '\r\n\r\n\r\nI am a private loan lender which have all take to be a genuine lender I give out the best loan to my client at a very convenient rate. The interest rate of this loan is 3%.i give out loan to public and private individuals. The maximum amount i give out in this loan is $500,000.00 USD why the minimum amount i give out is $3000.for more information contact us email :collinbest.loan@yahoo.in\r\n', '2018-03-13 02:00:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ahmedalim', 'ahmedalim', 'Buy To Get 50% Off', '0000-00-00', '0000-00-00', 'ahmedalim', NULL, NULL, NULL, NULL, NULL, 'active'),
(1002, 'SBA116020J', 204, NULL, NULL, NULL, 109, 11, '', 0, '', '', '', '', 'online Copy Paste Jobs - Work form Home at your Free time', 12000, '0', '', 0, '', NULL, 'data', '9869000000', 'Mumbai', 'Barudgar Nala', '1. You Can work from Home, Office , college, Anywhere @ your own timings. 2. No need to work daily, You can also work in weekends. 3. 100% Guaranteed Monthly Payments. 4. You can see your Work, Earnings and Payments status 24X7. 5. Payment will be made thru Cheque, Online Net Transfer (NEFT). 6. Dedicated Customer Support via Phone / E-mail. Also, Be the Direct Employee to Our Company & Get Paid Straightly From Our Company. http://datapostingjobs.in/ \r\nNEON0138001  20 03 2018 14:41:34', '2018-03-20 14:43:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1009, 'SBA619019J', 208, NULL, NULL, NULL, 323, 11, '', 0, '', '', '', '', 'Best Online Jobs 2017 - Simple Data entry Jobs', 15000, '1', '', 0, '', NULL, 'sarika', '8355073833', 'Lucknow', 'Ashok Nagar', '	Do you want to Earn good income ? Then work from Home,Office,College anywhere at anytime. guaranteed payment to your Home. http://www.dataentrycareer.com\r\nDATA0047699  05 04 2018 17:43:15', '2018-04-05 17:52:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1016, 'SBA785536J', 209, NULL, NULL, NULL, 366, 11, '', 0, '', '', '', '', 'SSD CHEMICAL SOLUTION FOR USD,EURO,GBP', 1000, '0', '', 0, '', NULL, 'greg lucas', '8860814171', 'delhi', 'Barudgar Nala', 'We sell SSD Chemical Solution used to clean all type of blackened, tainted and defaced bank notes. Our technicians are highly qualified and are always ready to handle the cleaning perfectly.', '2018-04-13 03:37:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Placements / Consultancy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1025, 'SBA766367OF', 5, NULL, NULL, NULL, 205, 9, '', 0, '', '', '', '', 'Steel Sofa With Two Chairs  Fine and use condition', 1800, '1', '', 0, '', NULL, 'mahes pawar', '8796276291', 'aurangabad ', 'GarkhedaParisar\r\n', 'Steel Sofa With Two Chairs  Fine and use condition', '2018-04-25 18:29:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gentaly Used', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1037, 'SBA677664P', 5, '5m', '3.5km', ',Water Storage', 2, 1, '9000', 0, 'Broker', 'Residential Property', 'Apartments', 'Unfurnished', '1BHK Flat  For Rent For Family Only Cidco N 4  Post By Broker Post By Broker sai broking.com ', 9000, '0', '18000', 0, '3 Rooms', '700', 'Ambadas kale patil ', '8087245555', 'aurangabad ', 'CIDCO, N-4', '1BHK Flat  For Rent For Family Only Cidco N 4  Post By Broker Post By Broker sai broking.com ', '2018-05-28 13:44:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1052, 'SBA233729P', 5, '5m', '3.5km', ',Water Storage', 2, 1, '14000', 0, 'Broker', 'Residential Property', 'Apartments', 'Semifurnished', '2bhk flat for rent for family bachelors cidco n5 post by broker sai broking.com ', 14000, '0', '42000', 0, '4 Rooms', '1100', 'Ambadas kale patil ', '8087245555', 'aurangabad ', 'CIDCO, N-5', '2bhk flat for rent for family bachelors cidco n5 post by broker sai broking.com ', '2018-06-05 11:18:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1062, 'SBA907653RS', 214, NULL, NULL, NULL, 115, 4, '', 0, '', '', '', '', 'URGENT LOAN FOOR BUSINESS AND PERSONAL USE', 10000, '0', '', 0, '', NULL, 'max william', '9174483605', 'Khadkeshwar', 'Khadkeshwar', 'Do you need Finance?\r\nAre you looking for Finance?\r\nAre you looking for a money to enlarge your business?\r\nWe help individuals and companies to obtain loan for business\r\nexpanding and to setup a new business ranging any amount. Get a loan at affordable interest rate of 3%, Do you need this cash/loan for business and to clear your bills? Then send us an email now for more information contact us now via Email:maxcreditfinance@googlemail.com', '2018-06-09 13:01:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1063, 'SBA462260H', 216, NULL, NULL, NULL, 181, 3, '', 0, '', '', '', '', 'Food photography', 0, '0', '', 0, '', NULL, 'Sumanth Kumar Photography', '9884281118', 'Kodambakkam, Chennai', 'Other', 'With his love for food and photography, Sumanth Kumar specializes in capturing highly detailed and advertising style food photography. He is also known for producing mouth-watering food images that capture the color, tone and texture of the food with great flair and accuracy. For tempting food photography, contact Sumanth Kumar Photography.', '2018-06-12 11:22:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'active'),
(1065, 'SBA773020J', 110, NULL, NULL, NULL, 382, 11, '', 0, '', '', '', '', ' 	We are Hiring - Earn Rs.15000/- Per month - Simple Copy Paste Jobs', 1100, '0', '', 0, '', NULL, 'sonu khurana', '8684919512', 'Delhi', 'Chauraha', ' 	Earn Rs.25000/- per month - Simple online Jobs - Are You Looking for Home-Based Online Jobs? - Are You a Student, Housewife, jobseeker ? - Are you ready to Work 1 to 2 Hours daily Online? - Do You need Guaranteed Payment Monthly? Then this is for You, - Clicking on their Advertisement E-mails. - Submitting their Data\'s online. - Reading their Advertisement Sms. - Filling Forms on their websites, etc,. FREE to Join >> http://dailyonlinejobs.com\r\nDPJ0003433  13 06 2018 10:10:30', '2018-06-13 10:23:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1066, 'SBA887391P', 5, '', '3.5km', ',Lift,Water Storage,Security,Park', 2, 1, '15000', 1, 'Broker', 'Commercial Property', 'Office', 'Unfurnished', ' 2BHK FLAT FOR RENT FOR FAMILY BACHELORS CIDCO N5 POST BY BROKER SAI BROKING.COM', 15000, '0', '30000', 0, '4 Rooms', '1000', 'Ambadas kale patil ', '8087245555', 'aurangabad ', 'Cannaught Place', '\r\n2BHK FLAT FOR RENT FOR FAMILY BACHELORS CIDCO N5 POST BY BROKER SAI BROKING.COM', '2018-06-13 12:59:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1076, 'SBA320370P', 5, '', '', ',Water Storage,Park', 2, 1, '20000', 0, 'Broker', 'Residential Property', 'Bunglow', 'Unfurnished', '4bhk Row Bunglow For Rent For Working Bachelors Company Guest House CIDCO Waluj Mahanagar 2 Post By Broker Sai Broking ', 20000, '1', '40000', 0, '6 Rooms+', '5000', 'AMBADAS KALE PATIL', '8087245555', 'aurangabad ', 'Cidco Waluj Mahanagar-2', '4bhk Row Bunglow For Rent For Working Bachelors Company Guest House CIDCO Waluj Mahanagar 2 Post By Broker Sai Broking ', '2018-06-15 14:32:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1080, 'SBA653372MB', 217, NULL, NULL, NULL, 433, 16, '', 0, '', '', '', '', 'AMIT READYMADES GARMENTS SHOWROOM ,JALNA ROAD KARMAD  ', 500, '0', '', 0, '', NULL, 'Amit Nagre', '7507016581', 'AURANAGABAD', 'Karmad', 'AMIT READYMADES GARMENTS SHOWROOM \r\nAddress - Aurangabad-Jalna Highway Road, above Shubham Agro Spares,Karmad,Aurangabad 431001\r\n its an wholesale  showroom  for all type of Mens wear at lowest price \r\n\r\n  ', '2018-06-20 14:23:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AMIT READYMADES GARMENTS SHOWROOM ,JALNA ROAD KARMAD  ', 'Launching offer of showroom', 'Other Offers', '2018-07-01', '2018-07-31', 'ALL TYPE OF MENS WEAR', NULL, NULL, NULL, NULL, NULL, 'active'),
(1087, 'SBA573205P', 5, '5m', '4km', ',Lift,Water Storage,Security,Park', 2, 1, '15000', 1, 'Broker', 'Residential Property', 'Apartments', 'Unfurnished', 'New Semi Furnished  3bhk Flat  For Rent For Family Working Bachelors  Only Near Airport   Chikalthana  Post By Broker Sai  Broking', 15000, '1', '30000', 1, '5 Rooms', '1400', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Chikalthana', 'New Semi Furnished  3bhk Flat  For Rent For Family Working Bachelors & Company Guest House  Near Airport   Chikalthana Midc  Post By Broker Sai  Broking.com\r\n\r\n Cavar Car  Parking \r\n24 h water \r\nGood Location \r\nOne Month Rent Broking Charges \r\n\r\n\r\n\r\n\r\n', '2018-07-01 17:58:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1089, 'SBA985520P', 5, '5m', '3.5km', ',Water Storage', 2, 1, '8500', 1, 'Broker', 'Residential Property', 'Apartments', 'Unfurnished', '1BHK Flat  For Rent For Family  Working Bachelors Only Cidco N4  Mart Post By Broker Post By Broker sai broking.com ', 8500, '0', '25000', 1, '3 Rooms', '650', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'CIDCO, N-4', '1BHK Flat  For Rent For Family  Working Bachelors Only Cidco N4  Mart Post By Broker Post By Broker sai broking.com ', '2018-07-02 16:33:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1094, 'SBA212224P', 5, '5m', '4km', ',Water Storage', 2, 1, '9000', 0, 'Broker', 'Residential Property', 'Apartments', 'Semifurnished', 'Semi Furnitures  1BHK Flat  For Rent For Family Working bachelors  For Cidco Bus Stand   Post By Broker Post By Broker sai broking.com ', 9000, '0', '20000', 0, '3 Rooms', '600', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'CIDCO', 'Semi Furnitures  1BHK Flat  For Rent For Family Working bachelors  For Cidco Bus Stand   Post By Broker Post By Broker sai broking.com \r\n\r\n Cidco Bus Stand 5 minut Distance', '2018-07-05 14:19:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1102, 'SBA687798P', 5, '0', '1.5', ',Water Storage', 2, 1, '7500', 0, 'Broker', 'Residential Property', 'Houses', 'Unfurnished', '1BHK Flat  For Rent For Working Bachelors Jyoti Nagar   Only Post By Broker Post By Broker sai broking.com ', 7500, '0', '14000', 0, '3 Rooms', '650', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Jyoti Nagar', '1BHK Flat  For Rent For Working Bachelors Jyoti Nagar   Only Post By Broker Post By Broker sai broking.com ', '2018-07-21 15:53:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1104, 'SBA221461WS', 222, NULL, NULL, NULL, 183, 13, '', 0, '', '', '', '', 'Gujcart : Best Designer Saree - Sarees Wholesaler Site', 0, '0', '', 0, '', NULL, 'Sarees Wholesaler Site', '7778010547', 'Bangalore', 'Ashok Nagar', 'kmcn310Gujcart are manufacturer and wholesaler of top online selling salwar suite, dress material, lehengha, kurti and goun, Sarees. The best dress materials are now available in classic styles for regular ear and there is a new range in wholesale casual kurti suits. The regular fashion for anarkali suits are pleasant and well worked with the art of fashion. It is wonderful to find the new collection for the teens which has the splendor with amazing zardozi works and sequined embellishments. It ', '2018-07-23 13:49:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1105, 'SBA510501OE', 223, NULL, NULL, NULL, 198, 8, '', 0, '', '', '', '', 'USED 20 KVA TO 750 KVA KIRLOSKAR GENERATOR FOR SALE', 0, '1', '', 0, '', NULL, 'k-mention', '9879304079', 'Nashik maharshtra india', 'Bhavani Nagar', 'kmcn309we sale and buy and sale used generators,and we are DEALER FOR supply ashok leyland Caterpillar diesel generators with kirloskar ,ELGI, Compton, stamford alternators ranging from 5kva to 1250 kva of diesel generator sets. we also manufacture and supply accostic enclosers, and spare parts of diesel generators of all makes. erraction and commissioning of DG sets. After the highest levels of testing of Generators, they are certified ?Used Diesel Generators?. We specialize in finding units in', '2018-07-23 13:52:27', NULL, 'Others', NULL, '', NULL, NULL, NULL, 'Almost like new', 'Individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1107, 'SBA649885P', 5, '1.5', '0', ',Lift,Water Storage,Security,Park', 2, 1, '11000', 1, 'Broker', 'Residential Property', 'Apartments', 'Unfurnished', '2bhk Flat For Rent For Family Only Jalan Nagar Near Railway Station Post By Broker Sai Broking ', 11000, '0', '25000', 0, '4 Rooms', '1100', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Jalan Nagar\r\n', '2bhk Flat For Rent For Family Only Jalan Nagar Near Railway Station Post By Broker Sai Broking ', '2018-07-26 16:20:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1109, 'SBA293865P', 5, '5m', '3.5km', ',Water Storage', 2, 1, '7000', 1, 'Broker', 'Residential Property', 'Houses', 'Unfurnished', '1BHK Flat  For Rent For Family & Working Bachelors Near Reliance Mart  Road garkheda  Post By Broker Post By Broker sai broking.com ', 7000, '1', '10000', 0, '3 Rooms', '600', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'GarkhedaParisar\r\n', '1BHK Flat  For Rent For Family & Working Bachelors Near Reliance Mart  Road garkheda  Post By Broker Post By Broker sai broking.com ', '2018-07-28 10:35:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1110, 'SBA309492P', 5, '5m', '4km', ',Water Storage', 2, 1, '7000', 0, 'Broker', 'Residential Property', 'Houses', 'Fullyfurnished', 'Full  Furnished 1Room Flat For Rent For  Working Bachelors Cidco N 4Post By Broker Saibroking.com', 7000, '0', '7000', 0, '1 Room', '400', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'CIDCO, N-4', 'Full  Furnished 1Room Flat For Rent For  Working Bachelors Cidco N 4Post By Broker Saibroking.com', '2018-07-29 12:29:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1112, 'SBA210146P', 5, '0', '1.5', ',Water Storage', 2, 1, '12000', 0, 'Broker', 'Residential Property', 'Houses', 'Unfurnished', '2 Bhk Flat For Rent For Family Working Bachelors Kokanwadi  Post By Broker Saibroking.com ', 12000, '0', '20000', 0, '4 Rooms', '1000', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Kanchanwadi', '2 Bhk Flat For Rent For Family Working Bachelors Kokanwadi  Post By Broker Saibroking.com ', '2018-07-29 15:11:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1113, 'SBA371632P', 5, '0', '1.5', ',Lift,Water Storage,Security', 2, 1, '13500', 1, 'Broker', 'Residential Property', 'Apartments', 'Semifurnished', 'New Semi Furnished  2bhk Flat  For Rent For Family Only Adalat Road, Konkanwadi, Post By Broker Sai  Broking', 13500, '1', '26000', 0, '4 Rooms', '1000', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Kanchanwadi', 'New Semi Furnished  2bhk Flat  For Rent For Family Only Adalat Road, Konkanwadi, Post By Broker Sai  Broking', '2018-07-31 11:07:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1115, 'SBA371329P', 5, '5m', '1.5', ',Water Storage', 2, 1, '5000', 0, 'Broker', 'Residential Property', 'Houses', 'Unfurnished', '2Room For Rent For Working Bachelors Near Reliance Mart  Garkheda Post By Broker ', 5000, '0', '10000', 0, '2 Rooms', '400', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'GarkhedaParisar\r\n', '2Room For Rent For Working Bachelors Near Reliance Mart  Garkheda Post By Broker ', '2018-08-02 19:10:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1116, 'SBA931861P', 5, '0', '1.5', ',Water Storage', 2, 1, '14000', 0, 'Broker', 'Residential Property', 'Houses', 'Unfurnished', 'New Semi Furnished  2bhk Flat   For Rent For Family Office Mondha Naka Road Only  Post By Broker Sai  Broking', 14000, '0', '14000', 0, '4 Rooms', '1000', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Jalna Road', 'New Semi Furnished  2bhk Flat   For Rent For Family Office Mondha Naka Road Only  Post By Broker Sai  Broking', '2018-08-04 13:11:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1117, 'SBA873379P', 5, '0', '1k', ',Security', 2, 1, '20000', 0, 'Broker', 'Commercial Property', 'Shop', 'Unfurnished', 'SHOP OFFICE 500 SQ FOR RENT FOR OFFICE & ALL NEAR Railway Station Road Post BY BROKER SAIBROKING.COM ', 20000, '0', '100000', 0, '', '5000', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Kokanwadi', 'SHOP OFFICE 500 SQ FOR RENT FOR OFFICE & ALL NEAR Railway Station Road Post BY BROKER SAIBROKING.COM ', '2018-08-04 13:27:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1122, 'SBA864916MB', 214, NULL, NULL, NULL, 410, 16, '', 0, '', '', '', '', 'DO YOU NEED URGENT LOAN OFFER IF YES CONTACT US', 10000, '0', '', 0, '', NULL, 'Max  ', '0597261936', 'Bahadurpura', 'Bahadurpura', 'Do you need Finance?\r\nAre you looking for Finance?\r\nAre you looking for a money to enlarge your business?\r\nWe help individuals and companies to obtain loan for business\r\nexpanding and to setup a new business ranging any amount. Get a loan at affordable interest rate of 3%, Do you need this cash/loan for business and to clear your bills? Then send us an email now for more information contact us now via Email:maxcreditfinance@googlemail.com', '2018-08-07 09:11:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'max william', 'Loan', '75% Off', '0000-00-00', '0000-00-00', 'LOAN', NULL, NULL, NULL, NULL, NULL, 'active'),
(1125, 'SBA106622P', 5, '0', '1.5', ',Water Storage', 2, 1, '9000', 0, 'Broker', 'Residential Property', 'Houses', 'Unfurnished', '1BHK Flat  For Rent For Family Only Darga Road Near Potdar School Road garkheda  Post By Broker Post By Broker sai broking.com ', 9000, '0', '15000', 0, '3 Rooms', '600', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Dargah Road', '1BHK Flat  For Rent For Family Only Darga Road Near Potdar School Road garkheda  Post By Broker Post By Broker sai broking.com ', '2018-08-11 12:00:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1126, 'SBA326051P', 5, '0', '1.5', ',Water Storage', 2, 1, '5000', 0, 'Broker', 'Residential Property', 'Houses', 'Semifurnished', 'Semi Furnish 1ROOM FOR RENT FOR WORKING BACHELORS  NEAR D MART DARGA ROAD  GARKHEDA POST BY BROKER SAI BROKING ', 5000, '0', '10000', 0, '1 Room', '400', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'DargahChowk\r\n', 'Semi Furnish 1ROOM FOR RENT FOR WORKING BACHELORS  NEAR D MART DARGA ROAD  GARKHEDA POST BY BROKER SAI BROKING ', '2018-08-11 12:09:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1127, 'SBA990936P', 5, '0', '3.5km', ',Water Storage', 2, 1, '8500', 0, 'Broker', 'Residential Property', 'Houses', 'Unfurnished', '1BHK Flat  For Rent For Family Only Cidco N 3Post By Broker Post By Broker sai broking.com ', 8500, '0', '20000', 0, '3 Rooms', '700', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'CIDCO, N-3', '1BHK Flat  For Rent For Family Only Cidco N 3Post By Broker Post By Broker sai broking.com ', '2018-08-12 12:32:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1128, 'SBA678120P', 5, '0', '3.5km', ',Lift,Water Storage,Security,Park', 2, 1, '10000', 0, 'Broker', 'Residential Property', 'Apartments', 'Semifurnished', 'Semi Furnished 2BHK Flat  For Rent  For Family Beed By Pass Road   Only Post By Broker Post By Broker sai broking.com ', 10000, '0', '20000', 0, '4 Rooms', '950', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Beed Bypass Road', 'Semi Furnished 2BHK Flat  For Rent  For Family Beed By Pass Road   Only Post By Broker Post By Broker sai broking.com ', '2018-08-14 11:55:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1129, 'SBA773386P', 5, '0', '3.5km', ',Water Storage,Security,Park', 2, 1, '15000', 0, 'Broker', 'Residential Property', 'Row Houses', 'Unfurnished', '3bhk Row House For Rent For Family Near Reliance Mart Garkheda  Post By Broker Sai Broking ', 15000, '0', '30000', 0, '5 Rooms', '1200', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'GarkhedaParisar\r\n', '3bhk Row House For Rent For Family Near Reliance Mart Garkheda  Post By Broker Sai Broking ', '2018-08-14 12:09:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1130, 'SBA482578P', 5, '0', '1.5', ',Water Storage', 2, 1, '14000', 0, 'Broker', 'Residential Property', 'Duplex', 'Unfurnished', '2bhk BIG Flat For Rent For Family Only Jyoti Nagar Post By Broker Sai Broking ', 14000, '0', '30000', 0, '4 Rooms', '1000', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Jyoti Nagar', '2bhk BIG Flat For Rent For Family Only Jyoti Nagar Post By Broker Sai Broking ', '2018-08-14 12:17:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1131, 'SBA599267P', 5, '0', '3.5km', ',Water Storage', 2, 1, '5000', 1, 'Broker', 'Residential Property', 'Apartments', 'Unfurnished', '1ROOM KITCHEN FOR RENT FOR FAMILY  NEAR RELIANCE MART GAEKHEDA BY BROKER SAI BROKING .COM', 5000, '1', '5000', 1, '2 Rooms', '450', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'GarkhedaParisar\r\n', '1ROOM KITCHEN FOR RENT FOR FAMILY  NEAR RELIANCE MART GAEKHEDA BY BROKER SAI BROKING .COM', '2018-08-17 13:44:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1132, 'SBA522247P', 5, '5m', '3.5km', ',Water Storage', 2, 1, '8000', 0, 'Broker', 'Residential Property', 'Apartments', 'Unfurnished', '1BHK Flat  For Rent For Family Near Apex Hospital Jalna Road Post By Broker Post By Broker sai broking.com ', 8000, '0', '10000', 0, '3 Rooms', '600', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Jalna Road', '1BHK Flat  For Rent For Family Near Apex Hospital Jalna Road Post By Broker Post By Broker sai broking.com ', '2018-08-22 15:59:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1133, 'SBA459219P', 5, '0', '1.5', ',Water Storage,Park', 2, 1, '17000', 0, 'Broker', 'Residential Property', 'Apartments', 'Fullyfurnished', 'Full  Furnished 2Bhk Flat For Rent For  Working Bachelors Family Bansilal Nagar    Post By Broker Saibroking.com', 17000, '0', '45000', 0, '4 Rooms', '1100', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Bansilal Nagar', 'Full  Furnished 2Bhk Flat For Rent For  Working Bachelors Family Bansilal Nagar    Post By Broker Saibroking.com', '2018-08-22 16:17:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1134, 'SBA239247P', 5, '5m', '3.5km', ',Water Storage,Park', 2, 1, '3500', 0, 'Broker', 'Residential Property', 'Houses', 'Semifurnished', 'Semifurnished 1Room  FLAT FOR RENT FOR Working Bachelors Near Reliance Mart Garkheda POST BY BROKER SAI BROKING   ', 3500, '0', '3500', 0, '3 Rooms', '400', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'GarkhedaParisar\r\n', 'Semifurnished 1Room  FLAT FOR RENT FOR Working Bachelors Near Reliance Mart Garkheda POST BY BROKER SAI BROKING   ', '2018-08-23 19:00:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1135, 'SBA248315P', 5, '5m', '', ',Water Storage,Security,Park', 2, 1, '8500', 0, 'Broker', 'Residential Property', 'Apartments', 'Unfurnished', '2bhk Flat For Rent For Family Working Bachelors Waluj cidco 1 Post By Broker Sai Broking ', 8500, '0', '15000', 0, '4 Rooms', '900', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Cidco Waluj Mahanagar-1', '2bhk Flat For Rent For Family Working Bachelors Waluj cidco 1 Post By Broker Sai Broking ', '2018-08-28 13:08:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1136, 'SBA437309P', 5, '', '', '', 2, 1, '20000', 0, 'Broker', 'Commercial Property', 'Office', 'Unfurnished', 'OFFICE 600SQ FOR RENT NEAR RELIANCE MART GARKHEDA POST BY BROKER SAIBROKING.COM ', 20000, '0', '20000', 1, '1 Room', '600', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'GarkhedaParisar\r\n', 'OFFICE 500SQ FOR RENT NEAR RELIANCE MART GARKHEDA POST BY BROKER SAIBROKING.COM ', '2018-08-28 13:37:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(1137, 'SBA279014P', 5, '20m', '3.5km', ',Water Storage', 2, 1, '5000', 0, 'Broker', 'Residential Property', 'Apartments', 'Unfurnished', '1ROOM KITCHEN FOR RENT FOR FAMILY WORKING BACHELORS BEHIND SUTGIRNI CHOWK NEAR PODAR SCHOOL GARKHEDA  POST BY BROKER SAI BROKING .COM', 5000, '0', '1000', 0, '2 Rooms', '450', 'Ambadas kale patil ', '8087245555', 'AURANAGABAD', 'Shahnurwadi', '1ROOM KITCHEN FOR RENT FOR FAMILY WORKING BACHELORS BEHIND SUTGIRNI CHOWK NEAR PODAR SCHOOL GARKHEDA  POST BY BROKER SAI BROKING .COM', '2018-08-28 15:00:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `school_dept_type`
--

CREATE TABLE `school_dept_type` (
  `sdid` int(11) NOT NULL,
  `dept_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_dept_type`
--

INSERT INTO `school_dept_type` (`sdid`, `dept_type`) VALUES
(1, 'Pre-Primary School'),
(2, 'Primary School'),
(3, 'Secondary School'),
(4, 'Higher Secondary School');

-- --------------------------------------------------------

--
-- Table structure for table `school_pattern`
--

CREATE TABLE `school_pattern` (
  `spid` int(11) NOT NULL,
  `school_pattern` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_pattern`
--

INSERT INTO `school_pattern` (`spid`, `school_pattern`) VALUES
(1, 'CBSC'),
(2, 'ISCE'),
(3, 'IB'),
(4, 'State Board');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `scid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`scid`, `mid`, `category_name`, `status`, `date`) VALUES
(1, 1, 'Buy', 'active', '2016-12-05 11:56:14'),
(2, 1, 'Rent', 'active', '2016-12-05 11:56:29'),
(3, 1, 'Sale', 'active', '2016-12-05 11:56:23'),
(20, 10, 'Tempo For Sale', 'active', '2016-12-13 15:25:43'),
(21, 10, 'Tempo For Rent', 'active', '2016-12-13 15:26:02'),
(22, 10, 'Loading Rikshaw For Sale', 'active', '2016-12-13 15:26:47'),
(23, 10, 'Loading Rikshaw For Rent', 'active', '2016-12-13 15:27:03'),
(24, 12, 'Lawns', 'active', '2016-12-13 15:28:56'),
(25, 12, 'Mangal Karyalay / Lawn', 'active', '2016-12-13 15:29:52'),
(26, 12, 'Engagement hall', 'active', '2016-12-13 15:30:42'),
(27, 12, 'Birthday Hall', 'active', '2016-12-13 15:31:04'),
(28, 12, 'Reception Hall', 'active', '2016-12-13 15:31:41'),
(29, 12, 'Meeting Hall', 'active', '2016-12-13 15:33:15'),
(30, 12, 'Open Land', 'active', '2016-12-13 15:34:06'),
(31, 13, 'Event Management', 'active', '2016-12-13 15:35:16'),
(32, 13, 'Catering Services', 'active', '2016-12-13 15:36:14'),
(33, 13, 'DJ Services', 'active', '2016-12-13 15:36:33'),
(34, 13, 'Bandbaja Services', 'active', '2016-12-13 15:36:55'),
(35, 13, 'Dulha Rath', 'active', '2016-12-13 15:37:23'),
(36, 13, 'photography & videography', 'active', '2016-12-13 15:37:48'),
(37, 13, 'Brahman Guruji', 'active', '2016-12-13 15:38:55'),
(38, 13, 'Dulha Car Decoration', 'active', '2016-12-13 15:39:19'),
(39, 13, 'Dulha & Dhulhan Makeup Service', 'active', '2016-12-13 15:40:01'),
(40, 13, 'Mehandi service', 'active', '2016-12-13 15:40:25'),
(41, 5, 'Dance Classes ', 'active', '2016-12-13 15:41:18'),
(42, 5, 'Yoga Classes', 'active', '2016-12-13 15:41:46'),
(43, 5, 'Drawing Classes', 'active', '2016-12-13 15:42:30'),
(44, 5, 'Mehandi Classes', 'active', '2016-12-13 15:42:55'),
(45, 5, 'Karate Classes', 'active', '2016-12-13 15:43:27'),
(46, 5, 'Tution Classes', 'active', '2016-12-13 15:43:48'),
(47, 5, 'Banking classes', 'active', '2016-12-13 15:44:08'),
(48, 5, 'MPSC / UPSC Classes', 'active', '2016-12-13 15:45:10'),
(49, 5, 'Beauty Parlour Classes', 'active', '2016-12-13 15:45:59'),
(50, 4, 'Computer Repair', 'active', '2016-12-13 15:49:07'),
(51, 4, 'Home Electrician', 'active', '2016-12-13 15:50:15'),
(52, 12, 'Conference Hall', 'active', '2016-12-13 15:52:25'),
(53, 4, 'Refrigerator Repair Service', 'active', '2016-12-13 15:52:51'),
(54, 4, 'A/C Repair Service', 'active', '2016-12-13 15:53:14'),
(55, 4, 'Tv Repair Service', 'active', '2016-12-13 16:06:30'),
(56, 4, 'Boar & Motors Repair Service', 'active', '2016-12-13 16:06:48'),
(57, 4, 'Dish TV (technician)', 'active', '2016-12-13 16:07:19'),
(59, 3, 'Painter', 'active', '2016-12-13 16:08:04'),
(60, 3, 'Plumber', 'active', '2016-12-13 16:08:17'),
(61, 3, 'Gas Servicing', 'active', '2016-12-13 16:10:08'),
(62, 3, 'Gas Agency', 'active', '2016-12-13 16:10:23'),
(63, 3, 'Carpainter', 'active', '2016-12-13 16:10:37'),
(65, 3, 'Mineral Water', 'active', '2016-12-13 16:11:25'),
(68, 3, 'Internet Connection', 'active', '2016-12-13 16:12:17'),
(74, 13, 'Dulha Ghoda', 'active', '2016-12-13 17:08:02'),
(75, 13, 'Dulha Pagadi & Katyar For Rent', 'active', '2016-12-13 17:09:07'),
(76, 13, 'Lamp Labour', 'active', '2016-12-13 17:10:54'),
(77, 13, 'Phatake Stall', 'active', '2016-12-13 17:12:28'),
(79, 5, 'Shivan Classes(tailoring Classes)', 'active', '2016-12-13 17:46:40'),
(80, 5, 'Study Centre', 'active', '2016-12-13 17:47:30'),
(81, 5, 'Two wheeler Driving Classes ', 'active', '2016-12-13 17:48:16'),
(83, 5, 'Rangoli Classes', 'active', '2016-12-13 17:49:21'),
(84, 5, 'Police & Army Bharthi  Classes', 'active', '2016-12-13 17:49:42'),
(85, 5, 'Cricket Coaching Classes', 'active', '2016-12-13 17:50:58'),
(86, 5, 'Gym (club) Classes', 'active', '2016-12-13 17:51:43'),
(87, 5, 'Skating Classes', 'active', '2016-12-13 17:53:11'),
(90, 4, 'Mobile Reparing', 'active', '2016-12-14 15:27:07'),
(92, 3, 'All Loans Enquiry', 'active', '2016-12-14 15:27:47'),
(94, 6, 'Car For Sale', 'active', '2016-12-15 12:48:47'),
(95, 7, 'Bike', 'active', '2016-12-15 12:49:00'),
(99, 11, 'Marketing', 'active', '2016-12-15 15:21:01'),
(101, 11, 'BPO / Telecaller', 'active', '2016-12-15 15:21:59'),
(102, 11, 'Receptionist / Front Office', 'active', '2016-12-15 15:22:34'),
(103, 11, 'Teacher', 'active', '2016-12-15 15:22:44'),
(105, 11, 'Nurse', 'active', '2016-12-15 15:23:14'),
(106, 11, 'Beautician', 'active', '2016-12-15 15:23:31'),
(107, 11, 'Pharmacist', 'active', '2016-12-15 15:23:50'),
(108, 11, 'Cashier', 'active', '2016-12-15 15:24:02'),
(109, 11, 'Data Entry / Back Office', 'active', '2016-12-15 15:24:27'),
(111, 11, 'Hospitality Executive', 'active', '2016-12-15 18:15:35'),
(112, 3, 'Milk Home Delivery', 'active', '2016-12-16 15:47:02'),
(113, 3, 'Vegetable Home Delivery', 'active', '2016-12-16 15:47:13'),
(114, 3, 'House servant(Kamwali Bai)', 'active', '2016-12-16 15:47:28'),
(115, 4, 'Others', 'active', '2016-12-16 16:01:11'),
(116, 5, 'Swimming Classes', 'active', '2016-12-16 16:03:49'),
(117, 5, 'Handwriting Classes', 'active', '2016-12-16 16:04:08'),
(118, 5, 'Mobile Repairing Classes', 'active', '2016-12-16 16:04:23'),
(119, 5, 'Modeling Classes', 'active', '2016-12-16 16:04:36'),
(120, 5, 'Website Development Classes', 'active', '2016-12-16 16:05:54'),
(121, 5, 'MSCIT & DTP Classses', 'active', '2016-12-16 16:06:07'),
(122, 5, 'Typing Classes', 'active', '2016-12-16 16:06:19'),
(123, 5, 'Photography Classes', 'active', '2016-12-16 16:06:34'),
(124, 5, 'Gitar&tabla Classes', 'active', '2016-12-16 16:07:02'),
(125, 5, 'Others', 'active', '2016-12-16 16:07:18'),
(126, 3, 'Dish TV Technician', 'active', '0000-00-00 00:00:00'),
(127, 3, 'Modular Kitchen\r\n', 'active', '2016-12-17 00:00:00'),
(129, 3, 'Tifin Service\r\n', 'active', '2016-12-17 00:00:00'),
(130, 3, 'Tv Cable\r\n', 'active', '2016-12-17 00:00:00'),
(134, 3, 'Baby Care\r\n', 'active', '2016-12-17 00:00:00'),
(135, 3, 'Tankar Water Service', 'active', '2016-12-17 00:00:00'),
(136, 3, 'Medical Medicine(Home Delivery Service)', 'active', '2016-12-17 00:00:00'),
(137, 3, 'Doctor\r\n', 'active', '2016-12-17 00:00:00'),
(139, 3, 'School Van\r\n', 'active', '2016-12-17 00:00:00'),
(140, 3, 'School Details', 'active', '2016-12-17 00:00:00'),
(141, 3, 'Pizza (Home Delivery Sarvice)\r\n', 'active', '0000-00-00 00:00:00'),
(142, 3, 'Paper Agent(News Paper Service)', 'active', '0000-00-00 00:00:00'),
(143, 3, 'Paper Scrap Deals', 'active', '2016-12-17 00:00:00'),
(144, 3, 'Movers & Packers', '', '0000-00-00 00:00:00'),
(145, 3, 'Kirana(Provision Service)\r\n', '', '0000-00-00 00:00:00'),
(146, 3, 'RTO Agent Service\r\n', 'active', '0000-00-00 00:00:00'),
(147, 3, 'Pan Card Agent Service', 'active', '0000-00-00 00:00:00'),
(148, 3, 'Tours and Travels & Railway Air Ticket Agency', 'active', '0000-00-00 00:00:00'),
(149, 3, 'Civil Contractor\r\n', 'active', '0000-00-00 00:00:00'),
(150, 3, 'Visa Agent Service\r\n', 'active', '0000-00-00 00:00:00'),
(151, 3, 'Jivan Vima (LIC Agent Service)', 'active', '0000-00-00 00:00:00'),
(152, 3, 'Fabrication Service', 'active', '0000-00-00 00:00:00'),
(153, 3, 'Driving school\r\n', 'active', '0000-00-00 00:00:00'),
(154, 3, 'Cocking Service\r\n', 'active', '0000-00-00 00:00:00'),
(155, 3, 'Shifting  Labour Service', 'active', '0000-00-00 00:00:00'),
(156, 3, 'Courier\r\n', 'active', '0000-00-00 00:00:00'),
(157, 3, 'Home Nurse\r\n', 'active', '0000-00-00 00:00:00'),
(158, 3, 'Car Cleaning Service', 'active', '0000-00-00 00:00:00'),
(159, 3, 'Gadighar Service(SlipWell)', 'active', '0000-00-00 00:00:00'),
(160, 3, 'Boarwell Service\r\n', 'active', '0000-00-00 00:00:00'),
(161, 3, 'Cab Service\r\n', 'active', '0000-00-00 00:00:00'),
(162, 3, 'Dog Training\r\n', 'active', '0000-00-00 00:00:00'),
(163, 3, 'Dry Cleaning\r\n', 'active', '0000-00-00 00:00:00'),
(164, 3, 'Pathology Lab Service\r\n', 'active', '0000-00-00 00:00:00'),
(165, 3, 'Fire Brigade', 'active', '0000-00-00 00:00:00'),
(166, 3, 'Swarg Rath\r\n', 'active', '0000-00-00 00:00:00'),
(167, 3, 'Blood Bank\r\n', 'active', '0000-00-00 00:00:00'),
(168, 3, 'Shopping Mall Offer & Home Delivery', 'active', '0000-00-00 00:00:00'),
(169, 3, 'Entertainment Movies\r\n', 'active', '0000-00-00 00:00:00'),
(170, 3, 'Best Hotel Veg/Non Veg\r\n', 'active', '0000-00-00 00:00:00'),
(171, 3, 'Ad Agency (Marketing Services)', 'active', '0000-00-00 00:00:00'),
(172, 3, 'Ambulance Home Service', 'active', '0000-00-00 00:00:00'),
(173, 3, 'Grain Grinders (Pitachi Girni)', 'active', '0000-00-00 00:00:00'),
(174, 3, 'Snake Friend\r\n', 'active', '0000-00-00 00:00:00'),
(175, 3, 'All Function Dresses For Rent\r\n', 'active', '0000-00-00 00:00:00'),
(176, 3, 'Gym (club)\r\n', 'active', '0000-00-00 00:00:00'),
(177, 3, 'Hospital\r\n', 'active', '0000-00-00 00:00:00'),
(178, 3, 'Architecture\r\n', 'active', '0000-00-00 00:00:00'),
(179, 3, 'Mirchi Kut kendra\r\n', 'active', '0000-00-00 00:00:00'),
(180, 3, 'Dog food', 'active', '0000-00-00 00:00:00'),
(181, 3, 'Others\r\n', 'active', '0000-00-00 00:00:00'),
(182, 13, 'Fetewale Bandhnare', 'active', '2016-12-17 09:59:53'),
(183, 13, 'Others', 'active', '2016-12-17 10:01:39'),
(184, 13, 'Jagran Gondhal', 'active', '2016-12-17 12:04:14'),
(185, 4, 'All Repairing Services', 'active', '2016-12-17 12:17:48'),
(186, 5, 'Signature Classes', 'active', '2016-12-17 12:18:53'),
(187, 5, 'Four wheeler Driving Classes', 'active', '2016-12-17 12:22:50'),
(188, 7, 'Cycle', 'active', '2016-12-17 12:24:50'),
(189, 3, 'Bike Servicing', 'active', '2016-12-17 12:44:11'),
(190, 3, 'Car Servicing', 'active', '2016-12-17 12:44:27'),
(191, 3, 'Crane Servicing', 'active', '2016-12-17 12:45:11'),
(192, 3, 'JCB & Crawler On Rent', 'active', '2016-12-17 12:48:21'),
(193, 8, 'Mobiles', 'active', '2016-12-17 13:48:10'),
(194, 8, 'Tabs', 'active', '2016-12-17 13:48:48'),
(195, 8, 'TV', 'active', '2016-12-17 13:49:18'),
(196, 8, 'Refrigerators', 'active', '2016-12-17 13:50:13'),
(197, 8, 'DVD', 'active', '2016-12-17 13:50:35'),
(198, 8, 'Air Conditioners', 'active', '2016-12-17 13:55:07'),
(199, 8, 'Washing Machines', 'active', '2016-12-17 13:55:27'),
(200, 8, 'Computers & Laptops', 'active', '2016-12-17 13:56:09'),
(201, 8, 'Cameras', 'active', '2016-12-17 14:02:45'),
(203, 3, 'POP Services', 'active', '2016-12-17 14:08:08'),
(204, 8, 'Air Coolers', 'active', '2016-12-17 15:08:23'),
(205, 9, 'Sofa Set', 'active', '2016-12-17 15:09:22'),
(206, 9, 'Bed ', 'active', '2016-12-17 15:09:44'),
(207, 9, 'Dressing Table', 'active', '2016-12-17 15:10:18'),
(208, 9, 'Office chair', 'active', '2016-12-17 15:14:10'),
(209, 9, 'Office Table', 'active', '2016-12-17 15:15:34'),
(210, 9, 'Wardrobes', 'active', '2016-12-17 15:17:21'),
(211, 9, 'Shoe Rack', 'active', '2016-12-17 15:18:15'),
(212, 9, 'TV Stand', 'active', '2016-12-17 15:18:57'),
(213, 9, 'Swings', 'active', '2016-12-17 15:19:31'),
(214, 9, 'Others', 'active', '2016-12-17 15:24:47'),
(218, 12, 'Others', 'active', '2016-12-17 15:28:40'),
(220, 14, 'Lodge', 'active', '2016-12-17 15:41:38'),
(221, 14, 'Luxury Hotel', 'active', '2016-12-17 15:42:21'),
(222, 14, 'Motels', 'active', '2016-12-17 15:42:49'),
(223, 14, 'Resorts', 'active', '2016-12-17 15:43:01'),
(224, 14, 'skyscrapers', 'active', '2016-12-17 15:44:51'),
(225, 14, 'Heritage Hotels', 'active', '2016-12-17 15:45:09'),
(226, 14, 'Others', 'active', '2016-12-17 15:45:19'),
(227, 13, 'Sangeet', 'active', '2016-12-17 16:37:36'),
(228, 0, 'Accountant', 'active', '0000-00-00 00:00:00'),
(229, 0, 'Animation', 'active', '0000-00-00 00:00:00'),
(230, 0, 'Architect', 'active', '0000-00-00 00:00:00'),
(231, 0, 'Bartender', 'active', '0000-00-00 00:00:00'),
(232, 0, 'Bouncer', 'active', '0000-00-00 00:00:00'),
(233, 0, 'Business Analyst', 'active', '0000-00-00 00:00:00'),
(234, 0, 'Cameraman', 'active', '0000-00-00 00:00:00'),
(235, 0, 'Caretaker/Nanny', 'active', '0000-00-00 00:00:00'),
(236, 0, 'Carpenter', 'active', '0000-00-00 00:00:00'),
(237, 0, 'Cleaner/Washer', 'active', '0000-00-00 00:00:00'),
(238, 0, 'Construction/Laborer', 'active', '0000-00-00 00:00:00'),
(239, 0, 'Content Writer', 'active', '0000-00-00 00:00:00'),
(240, 0, 'Control Room Operator', 'active', '0000-00-00 00:00:00'),
(241, 0, 'Cook', 'active', '0000-00-00 00:00:00'),
(242, 0, 'Counsellor', 'active', '0000-00-00 00:00:00'),
(243, 0, 'Data Collection/Survey', 'active', '0000-00-00 00:00:00'),
(244, 0, 'Data Scientist', 'active', '0000-00-00 00:00:00'),
(245, 0, 'Database/System/Linux Administrator', 'active', '0000-00-00 00:00:00'),
(246, 0, 'Delivery/Collections', 'active', '0000-00-00 00:00:00'),
(247, 0, 'Designer', 'active', '0000-00-00 00:00:00'),
(248, 0, 'Doctor', 'active', '0000-00-00 00:00:00'),
(249, 0, 'Draftsman', 'active', '0000-00-00 00:00:00'),
(250, 0, 'Driver', 'active', '0000-00-00 00:00:00'),
(251, 0, 'DTP Operator/Print Consultant', 'active', '0000-00-00 00:00:00'),
(252, 0, 'Dubbing Artist', 'active', '0000-00-00 00:00:00'),
(253, 0, 'Dye Maker', 'active', '0000-00-00 00:00:00'),
(254, 0, 'Editor', 'active', '0000-00-00 00:00:00'),
(255, 0, 'Electrician', 'active', '0000-00-00 00:00:00'),
(256, 0, 'Electroplater', 'active', '0000-00-00 00:00:00'),
(257, 0, 'Engineer', 'active', '0000-00-00 00:00:00'),
(258, 0, 'Event Planner', 'active', '0000-00-00 00:00:00'),
(259, 0, 'Financial Advisor', 'active', '0000-00-00 00:00:00'),
(260, 0, 'Fire Fighter', 'active', '0000-00-00 00:00:00'),
(261, 0, 'Fitter', 'active', '0000-00-00 00:00:00'),
(262, 0, 'Floor Manager', 'active', '0000-00-00 00:00:00'),
(263, 0, 'Foundryman', 'active', '0000-00-00 00:00:00'),
(264, 0, 'Gardener', 'active', '0000-00-00 00:00:00'),
(265, 0, 'Handyman', 'active', '0000-00-00 00:00:00'),
(266, 0, 'Host/Hostess', 'active', '0000-00-00 00:00:00'),
(267, 0, 'HR/Admin', 'active', '0000-00-00 00:00:00'),
(268, 0, 'Insurance Consultant', 'active', '0000-00-00 00:00:00'),
(269, 0, 'IT Hardware & Network Engineer', 'active', '0000-00-00 00:00:00'),
(270, 0, 'IT Software - Developer', 'active', '0000-00-00 00:00:00'),
(271, 0, 'IT Software - QA/Test Engineer', 'active', '0000-00-00 00:00:00'),
(272, 0, 'IT Software - Web Designer', 'active', '0000-00-00 00:00:00'),
(273, 0, 'Lab Assistant', 'active', '0000-00-00 00:00:00'),
(274, 0, 'Language Translator', 'active', '0000-00-00 00:00:00'),
(275, 0, 'Legal', 'active', '0000-00-00 00:00:00'),
(276, 11, 'Librarian', 'active', '0000-00-00 00:00:00'),
(277, 11, 'Life Guard', 'active', '0000-00-00 00:00:00'),
(278, 11, 'Lighting Technician', 'active', '0000-00-00 00:00:00'),
(279, 11, 'Made', 'active', '0000-00-00 00:00:00'),
(280, 11, 'Market Research Analyst', 'active', '0000-00-00 00:00:00'),
(281, 11, 'Mechanic', 'active', '0000-00-00 00:00:00'),
(282, 11, 'Medical Assistant', 'active', '0000-00-00 00:00:00'),
(283, 11, 'Microbiologist', 'active', '0000-00-00 00:00:00'),
(284, 11, 'MIS Executive', 'active', '0000-00-00 00:00:00'),
(285, 11, 'Moulder', 'active', '0000-00-00 00:00:00'),
(286, 11, 'Nutritionist/Dietician', 'active', '0000-00-00 00:00:00'),
(287, 11, 'Office Assistant/Helper', 'active', '0000-00-00 00:00:00'),
(288, 11, 'Operator/Machinist', 'active', '0000-00-00 00:00:00'),
(289, 11, 'Optometrist', 'active', '0000-00-00 00:00:00'),
(290, 11, 'Packager', 'active', '0000-00-00 00:00:00'),
(291, 11, 'Painter', 'active', '0000-00-00 00:00:00'),
(292, 11, 'Pest Control Executive', 'active', '0000-00-00 00:00:00'),
(293, 11, 'Photographer', 'active', '0000-00-00 00:00:00'),
(294, 11, 'Plumber', 'active', '0000-00-00 00:00:00'),
(295, 11, 'Porter', 'active', '0000-00-00 00:00:00'),
(296, 11, 'Product Manager', 'active', '0000-00-00 00:00:00'),
(297, 11, 'Program/Project Manager', 'active', '0000-00-00 00:00:00'),
(298, 11, 'Projectionist', 'active', '0000-00-00 00:00:00'),
(299, 11, 'Public Relations', 'active', '0000-00-00 00:00:00'),
(300, 11, 'Purchase Executive', 'active', '0000-00-00 00:00:00'),
(301, 11, 'Quality And Inspection', 'active', '0000-00-00 00:00:00'),
(302, 11, 'Reporter', 'active', '0000-00-00 00:00:00'),
(303, 11, 'Rigger', 'active', '0000-00-00 00:00:00'),
(304, 11, 'Safety Officer', 'active', '0000-00-00 00:00:00'),
(305, 11, 'Sales', 'active', '0000-00-00 00:00:00'),
(306, 11, 'SAP Consultant', 'active', '0000-00-00 00:00:00'),
(307, 11, 'Scientist-Research', 'active', '0000-00-00 00:00:00'),
(308, 11, 'Security/Guard', 'active', '0000-00-00 00:00:00'),
(309, 11, 'Sheet Metal Worker', 'active', '0000-00-00 00:00:00'),
(310, 11, 'Software Architect', 'active', '0000-00-00 00:00:00'),
(311, 11, 'Soldering Operator', 'active', '0000-00-00 00:00:00'),
(312, 11, 'Sound Engineer', 'active', '0000-00-00 00:00:00'),
(313, 11, 'Sports Trainer', 'active', '0000-00-00 00:00:00'),
(314, 11, 'Tailor', 'active', '0000-00-00 00:00:00'),
(315, 11, 'Ticketing Executive', 'active', '0000-00-00 00:00:00'),
(316, 11, 'Trainer', 'active', '0000-00-00 00:00:00'),
(317, 11, 'Videographer', 'active', '0000-00-00 00:00:00'),
(318, 11, 'Waiter/Steward', 'active', '0000-00-00 00:00:00'),
(319, 11, 'Ward Boy', 'active', '0000-00-00 00:00:00'),
(320, 11, 'Warehouse Executive', 'active', '0000-00-00 00:00:00'),
(321, 11, 'Welder', 'active', '0000-00-00 00:00:00'),
(322, 11, 'Wireman', 'active', '0000-00-00 00:00:00'),
(323, 11, 'Others', 'active', '0000-00-00 00:00:00'),
(324, 3, 'Drainage Services', 'active', '2016-12-17 17:10:31'),
(325, 3, 'Beauty Parlor', 'active', '2016-12-19 11:10:55'),
(326, 13, 'LED Screen On Rent', 'active', '2016-12-19 11:12:12'),
(327, 3, 'CA', 'active', '2016-12-20 12:01:42'),
(328, 3, 'Salon', 'active', '2016-12-20 12:02:55'),
(329, 3, 'Glass Vendors', 'active', '2016-12-20 12:06:57'),
(330, 6, 'Car On Rent', 'active', '2016-12-20 12:26:42'),
(331, 4, 'CCTV Repairing Services', 'active', '2016-12-20 13:55:17'),
(332, 4, 'Inverter Repairing', 'active', '2016-12-21 11:36:25'),
(333, 11, 'Accountant', 'active', '2016-12-22 14:26:23'),
(334, 11, 'Animation', 'active', '2016-12-22 14:26:35'),
(335, 11, 'Architect', 'active', '2016-12-22 14:26:46'),
(337, 11, 'Bartender', 'active', '2016-12-22 14:28:18'),
(338, 11, 'Bouncer', 'active', '2016-12-22 14:28:31'),
(339, 11, 'Business Analyst', 'active', '2016-12-22 14:28:46'),
(340, 11, 'Cameraman', 'active', '2016-12-22 14:29:00'),
(341, 11, 'Caretaker/Nanny', 'active', '2016-12-22 14:29:12'),
(343, 11, 'Cleaner/Washer', 'active', '2016-12-22 14:29:41'),
(344, 11, 'Construction/Laborer', 'active', '2016-12-22 14:29:53'),
(345, 11, 'Content Writer', 'active', '2016-12-22 14:30:05'),
(347, 11, 'Control Room Operator', 'active', '2016-12-22 14:30:27'),
(348, 11, 'Cook', 'active', '2016-12-22 14:30:39'),
(349, 11, 'Counsellor', 'active', '2016-12-22 14:30:51'),
(350, 11, 'Data Collection/Survey', 'active', '2016-12-22 14:31:07'),
(351, 11, 'Data Scientist', 'active', '2016-12-22 14:31:16'),
(352, 11, 'Database/System/Linux Administrator', 'active', '2016-12-22 14:31:34'),
(353, 11, 'Delivery/Collections', 'active', '2016-12-22 14:32:19'),
(354, 11, 'Designer', 'active', '2016-12-22 14:32:30'),
(355, 11, 'Doctor', 'active', '2016-12-22 14:32:41'),
(356, 11, 'Draftsman', 'active', '2016-12-22 14:32:56'),
(357, 11, 'Driver', 'active', '2016-12-22 14:33:06'),
(358, 11, 'DTP Operator/Print Consultant', 'active', '2016-12-22 14:33:34'),
(359, 11, 'Dubbing Artist', 'active', '2016-12-22 14:33:45'),
(360, 11, 'Dye Maker', 'active', '2016-12-22 14:33:56'),
(361, 11, 'Editor', 'active', '2016-12-22 14:34:07'),
(363, 11, 'Electroplater', 'active', '2016-12-22 14:34:28'),
(364, 11, 'Engineer', 'active', '2016-12-22 14:34:40'),
(365, 11, 'Event Planner', 'active', '2016-12-22 14:34:57'),
(366, 11, 'Financial Advisor', 'active', '2016-12-22 14:35:11'),
(367, 11, 'Fire Fighter', 'active', '2016-12-22 14:35:20'),
(368, 11, 'Fitter', 'active', '2016-12-22 14:35:31'),
(369, 11, 'Floor Manager', 'active', '2016-12-22 14:35:43'),
(370, 11, 'Foundryman', 'active', '2016-12-22 14:35:54'),
(371, 11, 'Gardener', 'active', '2016-12-22 14:36:05'),
(372, 11, 'Handyman', 'active', '2016-12-22 14:36:17'),
(373, 11, 'Host/Hostess', 'active', '2016-12-22 14:36:29'),
(374, 11, 'HR/Admin', 'active', '2016-12-22 14:36:43'),
(375, 11, 'Insurance Consultant', 'active', '2016-12-22 14:36:54'),
(376, 11, 'IT Hardware & Network Engineer', 'active', '2016-12-22 14:37:06'),
(377, 11, 'IT Software - Developer', 'active', '2016-12-22 14:37:17'),
(378, 11, 'IT Software-QA/Test Engineer', 'active', '2016-12-22 14:37:28'),
(380, 11, 'Lab Assistant', 'active', '2016-12-22 14:37:50'),
(381, 11, 'Language Translator', 'active', '2016-12-22 14:38:01'),
(382, 11, 'Legal', 'active', '2016-12-22 14:38:35'),
(383, 11, 'Electrician', 'active', '2016-12-22 14:42:40'),
(384, 11, 'IT Softwar -Web Designer', 'active', '2016-12-22 14:42:57'),
(385, 11, 'Carpenter', 'active', '2016-12-22 14:44:25'),
(386, 13, 'Travels And Bus For Rent', 'active', '2016-12-22 16:11:01'),
(387, 3, 'Advocate', 'active', '2016-12-23 12:05:31'),
(388, 13, 'Wedding Card Printing', 'active', '2016-12-24 16:50:15'),
(389, 3, 'Tailor Stiching', 'active', '2016-12-24 20:21:43'),
(395, 4, 'Water Purifier Repairing ', 'active', '2016-12-24 20:24:01'),
(396, 4, 'Office Chair Repairing ', 'active', '2016-12-24 20:27:23'),
(397, 4, 'Shutter Greasing', 'active', '2016-12-24 20:28:22'),
(398, 13, 'Sanai Vadak ', 'active', '2016-12-25 13:32:48'),
(399, 3, 'School Rikshaw (auto)', 'active', '2016-12-25 14:33:47'),
(400, 3, 'School Bus ', 'active', '2016-12-25 14:34:58'),
(401, 16, 'Cotton Showroom', 'active', '2016-12-29 13:59:13'),
(402, 16, 'Shoes Showroom', 'active', '2016-12-29 13:59:21'),
(403, 16, 'Shopping Mall ', 'active', '2017-01-03 13:39:29'),
(404, 16, 'Jewellery Showroom', 'active', '2017-01-03 13:40:16'),
(405, 16, 'Electronics Showroom', 'active', '2017-01-03 13:40:45'),
(406, 16, 'Real Estate offers', 'active', '2017-01-03 13:41:32'),
(407, 16, 'Bike Showroom', 'active', '2017-01-03 13:42:05'),
(408, 16, 'Car Showroom', 'active', '2017-01-03 13:42:27'),
(409, 16, 'Other Showrooms', 'active', '2017-01-03 13:45:12'),
(410, 16, 'Others', 'active', '2017-01-03 13:46:56'),
(411, 16, 'Fruit Offer', 'active', '2017-01-03 13:52:26'),
(412, 3, 'Pets', 'active', '2017-01-06 13:14:14'),
(413, 3, 'White Water Purifiers', 'active', '2017-01-06 14:14:03'),
(414, 3, 'Solar Water Heater', 'active', '2017-01-10 21:14:07'),
(415, 3, 'Gas Gisear', 'active', '2017-01-10 21:15:23'),
(416, 3, 'KIDS &  TOYS', 'active', '2017-06-14 18:29:58'),
(417, 13, 'VADHU VAR SUCHAK KENDRTA ', 'active', '2017-11-09 19:00:09'),
(418, 3, 'Tax Consultant', 'active', '2017-12-14 17:03:24'),
(419, 3, 'Key Services & Home Delivery', 'active', '2017-12-14 17:05:17'),
(421, 4, 'Shutter Rolling & Reparing', 'active', '2017-12-14 17:07:55'),
(422, 4, 'All Company Service Center All Product ', 'active', '2017-12-14 17:11:21'),
(423, 3, 'Landscaping ', 'active', '2017-12-14 17:13:46'),
(424, 3, 'Legal Service @ Agreement ', 'active', '2017-12-14 17:20:16'),
(426, 3, 'Door Name Plates', 'active', '2017-12-14 17:24:44'),
(427, 3, 'Handloom Services ', 'active', '2017-12-14 17:27:27'),
(428, 3, 'Craft Painter ( Shilpkar )', 'active', '2017-12-14 17:31:21'),
(429, 4, 'Car Care ', 'active', '2017-12-14 17:42:29'),
(430, 3, 'Home Cleaning Services ', 'active', '2017-12-14 17:44:20'),
(431, 4, 'Software Development ', 'active', '2017-12-19 11:04:28'),
(432, 3, 'shop act agent', 'active', '2018-06-08 12:23:52'),
(433, 16, 'Ready Garments Showroom', 'active', '2018-06-20 13:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `tempo_master`
--

CREATE TABLE `tempo_master` (
  `tid` int(11) NOT NULL,
  `tempo_name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempo_master`
--

INSERT INTO `tempo_master` (`tid`, `tempo_name`) VALUES
(1, 'Auto Rickshaw'),
(2, 'Tata Magic'),
(3, 'Bulldozer'),
(4, 'Bus'),
(5, 'Caravan'),
(6, 'Cement Mixer'),
(7, 'Tata ACE'),
(8, 'Crane'),
(9, 'Cycle Rickshaw'),
(10, 'Electric Rickshaw'),
(11, 'Tanker'),
(12, 'Tempo'),
(13, 'Tractor'),
(14, 'Trolley / Cart'),
(15, 'Truck'),
(16, 'Van'),
(17, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `temp_image`
--

CREATE TABLE `temp_image` (
  `piid` int(11) NOT NULL,
  `image_name` varchar(500) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `eamil` varchar(200) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `date` datetime NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `eamil`, `password`, `mobile_no`, `date`, `status`) VALUES
(1, 'vijay', 'vijay@gmail.com', '123456', '9158680769', '2016-10-25 15:10:17', 'active'),
(5, 'patil', 'saibroking333@gmail.com', '32243224', '8087245555', '2016-11-15 14:31:41', 'active'),
(8, 'vijay', 'vijay@globallianz.com', '123456', '9158680769', '2016-11-17 11:38:58', 'active'),
(11, 'Dipali', 'dipali@globallianz.com', '123456', '9370977391', '2016-11-22 19:02:26', 'active'),
(12, 'pooja', 'kulkarnipooja333@gmail.com', 'pooja', '7588369982', '2016-11-23 10:45:15', 'active'),
(13, 'Bhaskar Chockalingam', 'a_bhas@rediffmail.com', 'GANGES123', '7030345111', '2016-11-27 09:07:31', 'active'),
(14, 'pavan', 'pavanraje.raje30@gmail.com', '9643', '8446907064', '2016-11-27 11:23:03', 'active'),
(15, 'Pankaj Suresh Gunjarge', 'pankajgunjarge@gmail.com', 'yogi@123', '9049565722', '2016-11-30 11:22:53', 'active'),
(16, 'pooja', 'pooja@globallianz.com', 'poojak@2', '7588369982', '2016-12-02 15:43:01', 'active'),
(17, 'Vinit Jagtap', 'vinit17036@gmail.com', 'vineet1432', '9762103511', '2016-12-03 10:15:52', 'active'),
(18, 'ambadas', 'ambadaskale333@gmail.com', '2315', '9028582170', '2016-12-03 16:19:27', 'active'),
(19, 'sulane sir', 'sulane268@gmail.com', 'sulane', '9823227268', '2016-12-03 16:31:08', 'active'),
(20, 'Rohit Amilkanthwar', 'amilkanthwar.rohit55@gmail.com', 'rohit1234', '8007430663', '2016-12-05 17:19:20', 'active'),
(21, 'khan madam ', 'ah99303@gmail.com ', '1234', '8624073696', '2016-12-16 18:51:48', 'active'),
(22, 'Vinay Patil', 'vinayambition07@gmail.com', 'Parag@7474', '9657773473', '2016-12-18 08:51:22', 'active'),
(23, 'nisha gaikwad', 'nishagaikwad210@gmail.com', 'nisha210', '7720836310', '2016-12-18 15:00:30', 'active'),
(24, 'gajanan ', 'gajanangadekar1010@gmail.com', 'gajanan', '7798961010', '2016-12-18 15:35:22', 'active'),
(25, 'raphik patel', 'raphikpatel@gmail.com', '32243224', '9822798261', '2016-12-18 15:47:44', 'active'),
(26, 'umesh kale ', 'umesh.kale59@gmail.com', 'umesh', '9028222951', '2016-12-18 15:55:32', 'active'),
(27, 'shankar ', 'moreshankar89@gmail.com', 'shankar', '9405452690', '2016-12-18 16:05:25', 'active'),
(28, 'bhagwat bharat', 'bahagwat111@gmail.com', 'bhagwat', '9096218490', '2016-12-18 16:15:27', 'active'),
(29, 'bhagwat bharat', 'ambadaskale88@gmail.com', 'bhagwat', '9096218490', '2016-12-18 16:16:58', 'active'),
(30, 'srikant ', 'sreejon777@gmail.com', 'srikant', '9028332362', '2016-12-18 16:21:00', 'active'),
(32, 'datta wagh ', 'dattuhagh512@gmail.com', '5555', '9503615484', '2016-12-19 16:51:36', 'active'),
(33, 'Ganesh', 'ganeshtatu1@gmail.com', 'plotno750', '7588532445', '2016-12-19 21:28:53', 'active'),
(35, 'kailas', 'kailashruchke333@gmail.com', 'kailash', '9404679338', '2016-12-20 15:35:53', 'active'),
(36, 'sudesh', 'sudesh@appsysm.com', 'appsysm', '9545509477', '2016-12-20 16:09:50', 'active'),
(37, 'yogesh', 'yogeshkorde43@gmail.com', 'yogesh', '9096547255', '2016-12-20 16:29:22', 'active'),
(38, 'yogesh', 'yogesh.darak254@gmail.com', 'yogesh', '9881876978', '2016-12-20 18:15:27', 'active'),
(39, 'm k gadekar', 'mangaldeepservices@gmail.com', 'mkgadekar', '9823220213', '2016-12-20 19:38:04', 'active'),
(40, 'shravani travels ', 'radheshyamchikhale5@gmail.com', 'shravani', '9028213995', '2016-12-20 20:05:21', 'active'),
(41, 'vithal kendare', 'vithal.kendare@yohoo.com', 'kendre', '9422714444', '2016-12-21 17:13:13', 'active'),
(42, 'Parikshit Suryavanshi', 'suryavanshipd@gmail.com', 'Parikshit@1984', '9960227387', '2016-12-21 18:02:44', 'active'),
(43, 'Anna Girnare', 'girnareanna11@gmail.com', 'Anna@2662', '9921178830', '2016-12-22 10:57:26', 'active'),
(44, 'vijay', 'vijay123@gmail.com', '123456', '9158680769', '2016-12-22 16:35:32', 'active'),
(45, 'Avinash Godse', 'godseavinash0@gmail.com', '9021272962', '9764449073', '2016-12-22 21:39:08', 'active'),
(46, 'venketesh gonewad', 'venketeshgonewad@gmail.com', '9423709100', '9423709100', '2016-12-24 10:33:32', 'active'),
(47, 'Ram ', 'Jagdishmdgakne@gmail.com', 'jagdish', '8625839999', '2016-12-24 15:37:05', 'active'),
(48, 'abhay huse ', 'abhayhuse111@gmail.com', 'abhay', '9673595382', '2016-12-24 18:19:16', 'active'),
(49, 'dhananjay dhande', 'dhananjay.dhande39@gmail.com', 'dhande@123', '9403203232', '2016-12-25 11:14:06', 'active'),
(50, 'Bhaishree Ventures', 'uddhavj2@gmail.com', '9561684029', '9561684029', '2016-12-25 11:54:29', 'active'),
(51, 'pp', 'vishalkharat311@yahoo.com', '12345', '8975461452', '2016-12-25 11:54:41', 'active'),
(52, 'harish lande', 'harishonline10@gmail.com', 'Harish@123', '9673881188', '2016-12-25 13:22:30', 'active'),
(53, 'Adinath Borse Patil', 'adinathborse143@gmail.com', 'adinath', '9665339795', '2016-12-25 14:09:33', 'active'),
(54, 'pramod chakkar Patil', 'pramodchakkar@gmail.com', '8856035556', '9637060892', '2016-12-27 14:37:32', 'active'),
(55, 'ajit kale ', 'ajitkale1971@gmail.com ', 'ajit', '9405410269', '2016-12-28 13:23:32', 'active'),
(56, 'abhijeet s. Mhaske', 'abhiyogmotore@rediffmail.com', 'abhijeet', '9372828009', '2016-12-28 14:36:21', 'active'),
(57, 'wajit patel', 'wp5033@gmail.com', 'wajit', '9923205033', '2016-12-28 15:02:07', 'active'),
(58, 'deepak ambilke', 'deepakambilke@gmail.com', 'deepak@123', '8275322859', '2016-12-29 11:04:23', 'active'),
(59, 'Vishal ', 'sailee.gupta15@gmail.com', 'sunshine7150', '9075011987', '2016-12-29 21:38:16', 'active'),
(60, 'prakash Tupe', 'prakashtupe@gmail.com', 'kartik@1976', '9423780095', '2016-12-30 18:51:57', 'active'),
(63, 'surya lawns ', 'suryalawns.add@gmail.com', '12345', '9049994446', '2016-12-31 18:10:19', 'active'),
(64, 'Dipak Chungade', 'dipakchungade91@gmail.com', '9767131785', '8796663626', '2017-01-04 21:49:06', 'active'),
(65, 'Anup A Zilpe', 'anupzilpe@gmail.com', 'pratidnyai', '9766512609', '2017-01-05 12:00:32', 'active'),
(66, 'Dnyaneshwar Gaikwad', 'dkg191178@gmail.com', 'aayush2008', '7776886357', '2017-01-05 14:10:27', 'active'),
(67, 'asif n jamadar', 'asifjamadar2011@gmai.com', '9850031991', '8482919568', '2017-01-05 18:20:17', 'active'),
(68, 'Khan noman', 'Noman7771@gmail.com', 'khan7777', '9921232229', '2017-01-05 20:07:59', 'active'),
(69, 'Shaikh Irfan', 'shaikhirfan68745@gmail.com', '1234cash', '8421942059', '2017-01-06 18:26:25', 'active'),
(70, 'Pratik Khairnar', 'pratikkhairnar.pk@gmail.com', '9860270237', '9403004784', '2017-01-06 18:55:13', 'active'),
(71, 'santosh patil', 'santosh70_patil@yahoo.com', 'patil', '9850871678', '2017-01-07 18:10:41', 'active'),
(72, 'Devendra P.Pardikar', 'devendra.pardikar@cgglobal.com', 'Dpp@1983', '8149569274', '2017-01-08 11:23:26', 'active'),
(73, 'monica', '1207done@gmail.com', 'mmmmmmdone', '9623641763', '2017-01-08 13:27:55', 'active'),
(74, 'asif n jamadar', 'angeleventsentertainment@gmail.com', '9850031991', '8482919568', '2017-01-08 20:21:18', 'active'),
(79, 'dipak', 'dipakjadhav2013@gmail.com', '9561943252', '9561943252', '2017-01-09 23:49:45', 'active'),
(80, 'RAMESHWAR KUMAWAT', 'rameshwark350@gamil.com', 'gayatri31', '9921004531', '2017-01-10 10:25:40', 'active'),
(81, 'Vijay', 'bhaleraovijay1@gmail.com', 'vijay132@', '9096547397', '2017-01-10 19:25:41', 'active'),
(82, 'Dipali', 'dipali.gaikwad02@gmail.com', '123456', '9370977391', '2017-01-11 13:32:24', 'active'),
(84, 'pooja', 'kulkarnipooja222@gmail.com', 'pooja', '7588369982', '2017-01-11 14:40:45', 'active'),
(88, 'vijay', 'vijay171819@gmail.com', '123456', '9158680769', '2017-01-11 18:50:33', 'active'),
(89, 'Uday kolhe patil', 'udayraje303@gmail.com', '9767209092', '9767209192', '2017-01-15 22:05:47', 'active'),
(90, 'Joshi', 'mvksrs2016@gmail.com', 'SHARMA2017', '9423778473', '2017-01-16 01:02:07', 'active'),
(91, 'sachin jagdhane', 'sachinjagdhane26@gmail.com', 'asawari143', '8928637946', '2017-01-16 21:11:45', 'active'),
(92, 'Prashant Koleshwar', 'p.koleshwar1975@Gmail.com', 'PP_koleshwar1', '7507005739', '2017-01-17 20:41:52', 'active'),
(93, 'Amol Pawade ', 'amol.pawade4106@gmail.com', 'amol4106', '9850525225', '2017-01-22 10:54:16', 'active'),
(94, 's darade ', 'sdarade55@gmail.com', 'sdarade', '9422702848', '2017-01-24 10:24:44', 'active'),
(95, 'vithal mukundrao kendre', 'vithal.kendre@yahoo.com', 'umraikar', '9422714444', '2017-01-24 18:31:25', 'active'),
(96, 'BRIGHT', 'brightaurangabad@yahoo.com', 'SHRIRAM', '9404486641', '2017-01-24 19:11:56', 'active'),
(98, 'monica', 'monica.shubh7@gmail.com', 'mmmmmmdone', '8551966983', '2017-02-02 00:27:30', 'active'),
(99, 'pandura nagre ', 'pandurangnagre@gmail.com', 'nagre', '9422294177', '2017-02-08 19:32:27', 'active'),
(100, 'Sachin Bagde', 'pushparaj2001@rediffmail.com', 'pushparaj', '9422705134', '2017-03-05 12:07:43', 'active'),
(101, 'Yousuf Mohammed', 'MD.YOUSUF992@GMAIL.COM', 'jawvad@123', '9595959997', '2017-04-02 20:10:06', 'active'),
(102, 'veenit nikam', 'veenit_nikam13@rediffmail.com ', 'lakshu@1306', '9881131065', '2017-04-22 20:00:53', 'active'),
(103, 'Rajesh Gupta', 'gupta.rainbowsales@gmail.com', 'KRG071270*', '9823040467', '2017-05-12 16:30:35', 'active'),
(104, 'Dinesh Joshi', 'dineshjoshi663@gmail.com', 'avdhoot123', '9975468115', '2017-05-13 14:09:16', 'active'),
(105, 'kiran', 'kiran.urgunde@yahoo.com', '@Kirankumar07', '7745840940', '2017-05-26 11:31:53', 'active'),
(106, 'Akshay R. Thakare', 'athakre53@gmail.com', '7798007000', '8237077776', '2017-06-03 10:53:46', 'active'),
(107, 'Avinash Patil', ' godseavinash7@Gmail.com', '9021272962', '9764449073', '2017-06-14 13:20:56', 'active'),
(108, 'Tushar', 'tushargondhane21@gmail.com', '1234512345', '8868081111', '2017-06-21 11:59:29', 'active'),
(109, 'Shyam Shinde', 'shyampshinde@gmail.com', 'usha@123', '9892859858', '2017-06-21 13:32:00', 'active'),
(110, 'sonu khurana', 'sonukhurana581@gmail.com', 'P!@#$1234', '8467049758', '2017-06-22 17:56:17', 'active'),
(111, 'Jay', 'jaikishorpandit@yahoo.com ', '22sai90', '9891277664 ', '2017-07-07 18:14:03', 'active'),
(112, 'Ajay Rohankar', 'ajaymrohankar79@gmail.com', 'krishnaraj', '9595497979', '2017-07-13 19:09:26', 'active'),
(113, 'Ahsan', 'ahsan782@yahoo.com', 'er.ahsan772', '8484004741', '2017-07-16 20:36:15', 'active'),
(114, 'Ahsan', 'Butul9950@gmail.com', 'iambutul', '8484004741', '2017-07-16 20:37:32', 'active'),
(115, 'Vinay Darak', 'cavinaydarak@gmail.com', 'vinay1988@123', '9420624871', '2017-07-17 19:24:06', 'active'),
(116, 'Ranjeet Sahebrao palkar', 'rnjtplkr@gmail.com', 'ranj@2312', '8870787658', '2017-07-17 21:30:27', 'active'),
(117, 'sagar khandale', 'sagarkhandale10@gmail.com', 'Sagar@7840', '7020339241', '2017-07-18 10:34:07', 'active'),
(118, 'Vandana', 'sona898@gmail.com', 'neha@123', '7083387013', '2017-07-19 17:56:43', 'active'),
(119, 'anil', 'yashwante.anil3@gmail.com ', 'andy@123', '8668312126', '2017-07-21 12:17:27', 'active'),
(120, 'MUSHTAQUE', 'mushtaquem521@gmail.com', '867546', '9434019000', '2017-07-23 23:09:33', 'active'),
(121, 'mohit belge', 'mohitbelge97@gmail.com', 'Redmi@2017', '8855805737', '2017-07-26 09:00:05', 'active'),
(122, 'NAYAN RATHOD ', 'nayan18rsrathod@gmail.com ', 'nayan18', '9623892807', '2017-07-26 12:30:29', 'active'),
(123, 'MURLIDHAR RAMKRISHNA NAIK', 'murlidhar_naik@yahoo.in', 'sairamrahul', '9422709885', '2017-07-31 20:06:15', 'active'),
(124, 'Tejas ', 'Tejasghotekar007@gmail.com', 'sai123', '9404541760 ', '2017-08-15 21:47:22', 'active'),
(125, 'Vandana chikate', 'vandanachikate80@gmail.com', 'vastpurush', '8975434362', '2017-08-17 11:27:56', 'active'),
(126, 'Dr.Abhideep Shakalya', 'abhideepshakalya@gmail.com', '9993599366', '9993599366', '2017-08-19 19:15:24', 'active'),
(127, 'David', 'ddavid@kkpackaging.in', 'Nakshatra113', '8390215566', '2017-09-02 12:21:55', 'active'),
(128, 'prince', 'salujasingh@rocketmail.com', 'saluja12@@@', '9637453758', '2017-09-02 16:49:14', 'active'),
(129, 'Bhushan patil', 'Bhushanj2@ymail.com', 'aurangabadAb12', '7020496065', '2017-09-03 14:54:59', 'active'),
(130, 'Nayan', 'Nayanrangari@gmail.com', 'chealsea', '9673837207', '2017-09-06 18:44:34', 'active'),
(131, 'Mangesh fungusakr ', 'Mangesh101989@gmail.com', 'ys2b7865', '9764359399', '2017-09-11 09:51:48', 'active'),
(132, 'Karishma', 'Karuemarwadi@gmail.com', 'gajumashi', '8482869389', '2017-09-11 23:16:56', 'active'),
(133, 'Swapnil', 'Jadhavpatil53@gmail.com ', '9762426053', '9762426053', '2017-09-16 15:56:20', 'active'),
(134, 'SHREE ENTERPRISES PACKERS MOVE', 'Amolsh9604@gmail.com', '9552536653', '9552536653', '2017-09-25 14:38:19', 'active'),
(135, 'anil', 'solidanu007@gmail.com', 'andy@123', '8668312126', '2017-09-26 15:29:06', 'active'),
(136, 'BHAGWAN', 'saipackers01@gmail.com', '8806854300@', '9730307290', '2017-10-08 20:13:41', 'active'),
(137, 'Dataposting Jobs', 'yashshawdataposting@gmail.com', 'dataposting', '9047054449', '2017-10-11 16:37:09', 'active'),
(138, 'Nikhil Vakil ', 'vakilnikhil1972@gmail.com ', 'Ravindra1934#', '9403409998 ', '2017-10-13 13:21:26', 'active'),
(139, 'Alfa Group', 'contact@alfatravelcorporation.com', 'gaikwadps', '9325376772', '2017-10-13 16:11:52', 'active'),
(140, '3d', 'classifieds01.3dpower@gmail.com', '3dpower12345', '9372032805', '2017-10-14 14:37:19', 'active'),
(141, 'Adil khan', 'Adil.yamr1@gmail.com', 'hayabusa', '9860160777', '2017-10-18 21:02:02', 'active'),
(142, 'Vishal Kumar', 'door2doorcarwashing@gmail.com', 'Lucy1509*', '7982010584', '2017-10-26 16:09:42', 'active'),
(143, 'sd', 'sss@gma.ass', 'ss', '1234567890', '2017-10-27 14:36:02', 'active'),
(144, 'Pradip Dongave ', 'dongavep@gmail.com', '47944794', '9923695110 ', '2017-11-02 00:15:32', 'active'),
(145, 'Sonali ', '7887616154@gmail.com', 'jaisadguru', '9067819581', '2017-11-02 13:21:34', 'active'),
(146, 'manik jadhav', 'hotelkailashresidency113@gmail.com', '113113', '7774026352', '2017-11-04 16:26:56', 'active'),
(147, 'RAOSAHEB SONAVANE', 'raosahebsonawane111@gmail.com', '111111', '8421252944', '2017-11-09 18:15:49', 'active'),
(148, 'Abhishek Dhokte ', 'abhishekdhokte111@gmail.com', '004220', '8378969303', '2017-11-13 19:22:09', 'active'),
(149, 'Shubham ', 'Shub_198@yahoo.in', 'shubham113', '8482941947', '2017-11-15 07:49:31', 'active'),
(150, 'Govinda', 'Govindabhosale@gmail.com', 'Gb@12345', '9168686863', '2017-11-18 12:02:35', 'active'),
(151, 'sanjay', 'svkatekar19@gmail.com', 'Gargi@1804', '9175098143', '2017-11-18 12:54:10', 'active'),
(152, 'Jitendra parikh', 'jitupawanparikh@gmail.com', '7840994512', '8308489629', '2017-11-20 15:38:18', 'active'),
(153, 'NITIN MAHAJAN', 'nitinchem@yahoo.com', '$passion1', '9673424443', '2017-11-26 18:48:04', 'active'),
(154, 'manoj jain', 'atharwabuilders@gmail.com', 'atharwa1#', '9823180607', '2017-11-28 17:22:30', 'active'),
(155, 'Pravesh Pardeshi', 'rajputpravesh007@gmail.com', 'Pravesh15', '9021711515', '2017-11-29 18:17:33', 'active'),
(156, 'vijay', 'vijay@abellelectrosoft.com', '123456', '9158680769', '2017-12-01 12:35:05', 'active'),
(157, 'mukesh', 'md2007485@gmail.com', 'mpd@235', '8830122742', '2017-12-04 19:46:48', 'active'),
(158, 'B.S.BANSODE', 'bsbansode@gmail.com', 'Appaappa1961*', '9421667873', '2017-12-06 11:12:24', 'active'),
(159, 'Dinesh sagule ', 'dineshsangule5@gmail.com', 'dineshsangule', '8378872713', '2017-12-07 18:39:56', 'active'),
(160, 'kalyan dongardive', 'dksound10@gmail.com ', 'dksound10', '9325204273', '2017-12-08 12:10:22', 'active'),
(161, 'VINOD BAHIR ', 'shreevaishnavielect@gmail.com', 'shreevaishnavi', '9552515875', '2017-12-08 12:55:09', 'active'),
(162, 'vijay khobre ', 'savtacomputers@gmail.com', 'savta', '9823735555', '2017-12-08 13:21:19', 'active'),
(163, 'Raja Bhattacharya', 'rb_zivon@yahoo.co.in', 'homeneeds', '9545503857', '2017-12-08 14:51:28', 'active'),
(164, 'chegan patel ', 'shreerajeshwarcomputer@gmail.com', 'shreerajeshwar', '8623916212', '2017-12-08 15:37:56', 'active'),
(165, 'Bhiarav Thite', 'Bhiarav123thite@gmail.com', 'bh12345bh', '7722005003', '2017-12-09 00:18:20', 'active'),
(166, 'Nitin Photography', 'nitinphoto041293@gmail.com', '8605135817', '8605135817', '2017-12-09 11:43:30', 'active'),
(168, 'devre p', 'mayuriprints65@gmail.com', '7798605612', '7798605612', '2017-12-09 20:16:46', 'active'),
(169, 'anand', 'anand.bo@ncml.com', 'ncml@1612', '9922901612', '2017-12-12 21:25:09', 'active'),
(170, 'chandrakant dagadu badgujar', 'chandrakantbadgujar2@gmail.com', 'Aa07121981', '7756890909', '2017-12-13 20:53:09', 'active'),
(171, 'Patki Shrikant Bhimrao', 'shripatki@yahoo.com', 'meerap955', '9823195585', '2017-12-16 10:20:06', 'active'),
(172, 'Vishal Khanse ', 'vishalkhanse@gmail.com', '8007292298', '8007292298', '2017-12-16 11:18:08', 'active'),
(173, 'Sumit ', 'djsumitabd@gmail.com', '8928451561', '8928451561', '2017-12-16 11:27:38', 'active'),
(174, 'prafull', 'pswani76@gmail.com', 'P23@35', '9975359371', '2017-12-17 11:38:59', 'active'),
(175, 'prafull', 'prafullwani40@gmail.com', 'Ps23@65', '9975359371', '2017-12-17 11:40:15', 'active'),
(176, 'shivani', 'shivaniamle1296@yahoo.com', 'vasudha', '8087439354', '2017-12-17 18:31:24', 'active'),
(177, 'Sanjay Das', 'sanjdase@gmail.com', 'samarth', '9766595286', '2017-12-18 11:46:22', 'active'),
(178, 'P.K.Khan ', 'starlightlnn.90@gmail.com', '7066816599', '7066816599', '2017-12-19 11:42:22', 'active'),
(179, 'sandip', 'sandippatil123@gmail.com', 'sandip@123', '9145535578', '2017-12-20 13:08:52', 'active'),
(180, 'banduhapse', 'banduhapse@gmal.com', '32243224', '9156128041', '2017-12-24 15:59:23', 'active'),
(181, 'jacobs lloyd', 'jacobslloyd02@gmail.com', 'mamajude', '0747758172', '2017-12-27 10:22:27', 'active'),
(182, 'Rameshwar chalke', 'rceameshwarchlake99@gmail.com', 'kishan99', '7558467269', '2018-01-08 20:43:29', 'active'),
(183, 'Priyanka bhute', 'Priyanka.tadas@gmail.com', 'pripank123', '8989594850', '2018-01-15 14:28:01', 'active'),
(184, 'bhakti', 'bhavana.khonde94@gmail.com', 'bhakti11', '8605033527', '2018-01-18 10:49:33', 'active'),
(185, 'Robert Francis', 'robertfrancis767@gmail.com', 'destiny1', '7546769978', '2018-01-26 18:31:48', 'active'),
(186, 'kishan chalke ', 'kishanchalke1467@gmail.com', '1467', '9112651999', '2018-01-28 12:33:08', 'active'),
(187, 'Bhvana Pawar', 'bhavnapawar591@gmail.com', 'jesus701', '8888874701', '2018-01-30 19:03:55', 'active'),
(188, 'Pankaj', 'pankajpawar135@gmail.com', '009pankaj', '9970468295', '2018-02-05 13:14:15', 'active'),
(189, 'chandan k', 'kumarck0001@gmail.com', '123123123', '9898665104', '2018-02-06 20:14:26', 'active'),
(190, 'saket kumar', 'saketk006.1@gmail.com', '123123123', '8877668652', '2018-02-07 11:21:28', 'active'),
(191, 'Chandrakant Patil', 'chandrakant_patil2711@yahoo.com', 'cpp@1792', '9420268993', '2018-02-20 13:58:35', 'active'),
(192, 'drkhan', 'robinababirye1@gmail.com', 'babirye', '0736613276', '2018-02-20 14:08:04', 'active'),
(193, 'Rushikesh ', 'rushikulkarni.2303@gmail.con', 'mylifemyrule', '7776033042', '2018-02-21 07:51:09', 'active'),
(194, 'Akash Pandey', 'balloondecorationaurangabad026@gmail.com', 'akki1234', '7020826056', '2018-02-21 13:51:15', 'active'),
(195, 'KISHOR JOSHI', 'ksjoshiandco@gmail.com', 'K@123456789', '9822754755', '2018-02-27 11:58:24', 'active'),
(196, 'Darshana chavan', 'Chavan.darshana@gmail.com', 'mayu', '9146992180', '2018-03-01 22:41:30', 'active'),
(197, 'Amit', 'ams1985@gmail.com', 'rw19138586', '8390124934', '2018-03-05 23:33:02', 'active'),
(198, 'Lohit Chaudhary ', 'lohitrc@gmail.com', 'Lohit221188', '7276383788', '2018-03-08 20:35:48', 'active'),
(199, 'Bansilal Chabda', 'bansilal.chabda32@gmail.com', 'bansi@2468', '7276363534', '2018-03-09 15:58:17', 'active'),
(200, 'Aisha ', 'aish921.memon@gmail.com', 'aisha1333', '9822996921', '2018-03-09 20:00:40', 'active'),
(201, 'offerguaranteeloan', 'offerguaranteeloan@yahoo.com', '123456', '8147009263', '2018-03-13 01:41:07', 'active'),
(202, 'jenny lois', 'monabutt982@gmail.com', 'Aa123123', '0321225154', '2018-03-16 14:33:18', 'active'),
(203, 'Sudeep Bajpai', 'S.bajpai@loyalinfoservices.com', 'loyal@123', '9225539545', '2018-03-17 11:51:43', 'active'),
(204, 'data', 'pranali.pradhan@gmail.com', 'ansuyamata123', '9865225242', '2018-03-20 14:38:08', 'active'),
(205, 'Bhushan mulajkar', 'Bhushan.joshi102@gmail.com', 'bhushan1602', '9975036102', '2018-03-21 11:51:52', 'active'),
(206, 'Shubham', 'Shr1008sss@gmail.com', 'aaibaba1008', '9482100864', '2018-03-22 10:15:43', 'active'),
(207, 'gupta', 'gupta25@gmail.com', 'gupta@123', '9767225011', '2018-03-25 22:57:01', 'active'),
(208, 'Sarika', 'sarikasrmnifa@gmail.com', 'sarika1984', '8355073833', '2018-04-05 17:50:24', 'active'),
(209, 'greg lucas', 'exxonssd@gmail.com', 'blessed', '8860814171', '2018-04-13 03:25:49', 'active'),
(210, 'Eknath bhusare', 'Jayshriambore94@gmail.com', 'ekadant94', '8999619823', '2018-04-18 14:20:05', 'active'),
(211, 'Sreedhar', 'reddy.shreedhar213@gmail.com', 'usl@2016', '9148972213', '2018-04-19 20:42:50', 'active'),
(212, 'Sunil singh', 'Sunil200220@gmail.com', 'hunk1745', '9004780403', '2018-05-03 09:48:23', 'active'),
(213, 'Sharat Pavate ', 'sharat.pavate@gmail.com', 'sharat123', '9960408955', '2018-05-28 12:56:08', 'active'),
(214, 'max william', 'maxcreditfinance@gmail.com', '12345678', '0579483661', '2018-05-30 21:41:36', 'active'),
(215, 'Sarang Borade', 'sarangsborade@gmail.com', 'nikssaru@1994', '9970376121', '2018-06-11 10:55:14', 'active'),
(216, 'rubanraj', 'rubanraj821@gmail.com', 'Raj@12345', '9884281118', '2018-06-12 11:14:35', 'active'),
(217, 'Amit Nagre', 'amit.nagre15@gmail.com', 'Amit5582', '7507016581', '2018-06-20 13:32:35', 'active'),
(218, 'Abhishek Diwate', 'abhidiwate11@gmail.com', 'manuabhi11', '9922324066', '2018-06-28 10:32:07', 'active'),
(219, 'Himanshu', 'Himanshugaikwad8@gmail.com', '8888503203', '8888503203', '2018-07-13 22:27:33', 'active'),
(220, 'r malpani', 'rm.adarsh123@gmail.com', 'radhep@123', '9028073164', '2018-07-16 12:38:10', 'active'),
(221, 'Manohar', 'drmanu0389@gmail.com', 'Manu@sai1', '9096274656', '2018-07-19 08:52:50', 'active'),
(222, 'Gujcart : Best Designer Saree ', 'nikampp4410@gmail.com', 'npp1995@', '7778010547', '2018-07-23 13:47:46', 'active'),
(223, 'baviskarvv', 'baviskarvv6569@gmail.com', 'varsha159', '9879304079', '2018-07-23 13:48:42', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisment`
--
ALTER TABLE `advertisment`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `bike_master`
--
ALTER TABLE `bike_master`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `builder_property`
--
ALTER TABLE `builder_property`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `car_master`
--
ALTER TABLE `car_master`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `child_category`
--
ALTER TABLE `child_category`
  ADD PRIMARY KEY (`ccid`);

--
-- Indexes for table `commercial_property`
--
ALTER TABLE `commercial_property`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cycle_master`
--
ALTER TABLE `cycle_master`
  ADD PRIMARY KEY (`cyid`);

--
-- Indexes for table `electronic_master`
--
ALTER TABLE `electronic_master`
  ADD PRIMARY KEY (`emid`);

--
-- Indexes for table `furnished_property`
--
ALTER TABLE `furnished_property`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `loan_master`
--
ALTER TABLE `loan_master`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `locality_master`
--
ALTER TABLE `locality_master`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `medium_of_school`
--
ALTER TABLE `medium_of_school`
  ADD PRIMARY KEY (`moid`);

--
-- Indexes for table `offer_master`
--
ALTER TABLE `offer_master`
  ADD PRIMARY KEY (`ofid`);

--
-- Indexes for table `post_requirement`
--
ALTER TABLE `post_requirement`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `property_category`
--
ALTER TABLE `property_category`
  ADD PRIMARY KEY (`pcid`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`piid`);

--
-- Indexes for table `property_post`
--
ALTER TABLE `property_post`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `school_dept_type`
--
ALTER TABLE `school_dept_type`
  ADD PRIMARY KEY (`sdid`);

--
-- Indexes for table `school_pattern`
--
ALTER TABLE `school_pattern`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`scid`);

--
-- Indexes for table `tempo_master`
--
ALTER TABLE `tempo_master`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `temp_image`
--
ALTER TABLE `temp_image`
  ADD PRIMARY KEY (`piid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisment`
--
ALTER TABLE `advertisment`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=589;

--
-- AUTO_INCREMENT for table `bike_master`
--
ALTER TABLE `bike_master`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `builder_property`
--
ALTER TABLE `builder_property`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_master`
--
ALTER TABLE `car_master`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `child_category`
--
ALTER TABLE `child_category`
  MODIFY `ccid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `commercial_property`
--
ALTER TABLE `commercial_property`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cycle_master`
--
ALTER TABLE `cycle_master`
  MODIFY `cyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `electronic_master`
--
ALTER TABLE `electronic_master`
  MODIFY `emid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `furnished_property`
--
ALTER TABLE `furnished_property`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loan_master`
--
ALTER TABLE `loan_master`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `locality_master`
--
ALTER TABLE `locality_master`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `medium_of_school`
--
ALTER TABLE `medium_of_school`
  MODIFY `moid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offer_master`
--
ALTER TABLE `offer_master`
  MODIFY `ofid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post_requirement`
--
ALTER TABLE `post_requirement`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property_category`
--
ALTER TABLE `property_category`
  MODIFY `pcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `piid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4695;

--
-- AUTO_INCREMENT for table `property_post`
--
ALTER TABLE `property_post`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1138;

--
-- AUTO_INCREMENT for table `school_dept_type`
--
ALTER TABLE `school_dept_type`
  MODIFY `sdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `school_pattern`
--
ALTER TABLE `school_pattern`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `scid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=434;

--
-- AUTO_INCREMENT for table `tempo_master`
--
ALTER TABLE `tempo_master`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `temp_image`
--
ALTER TABLE `temp_image`
  MODIFY `piid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2580;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
