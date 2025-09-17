-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2025 at 05:37 AM
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
-- Database: `ngocbaohan`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_product`
--

CREATE TABLE `table_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_list` int(11) DEFAULT 0,
  `id_item` int(11) DEFAULT 0,
  `id_cat` int(11) DEFAULT 0,
  `id_sub` int(11) DEFAULT 0,
  `id_brand` int(11) DEFAULT 0,
  `photo` varchar(255) DEFAULT NULL,
  `options` mediumtext DEFAULT NULL,
  `slugvi` varchar(255) DEFAULT NULL,
  `slugen` varchar(255) DEFAULT NULL,
  `contenten` mediumtext DEFAULT NULL,
  `contentvi` mediumtext DEFAULT NULL,
  `descen` mediumtext DEFAULT NULL,
  `descvi` mediumtext DEFAULT NULL,
  `nameen` varchar(255) DEFAULT NULL,
  `namevi` varchar(255) DEFAULT NULL,
  `code` varchar(30) DEFAULT NULL,
  `regular_price` double DEFAULT 0,
  `discount` double DEFAULT 0,
  `khoi_luong` float DEFAULT NULL,
  `sale_price` double DEFAULT 0,
  `numb` int(11) DEFAULT 0,
  `status` varchar(255) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `date_created` int(11) DEFAULT 0,
  `date_updated` int(11) DEFAULT 0,
  `view` int(11) DEFAULT 0,
  `icon` varchar(255) DEFAULT NULL,
  `file_attach` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_product`
--

INSERT INTO `table_product` (`id`, `id_list`, `id_item`, `id_cat`, `id_sub`, `id_brand`, `photo`, `options`, `slugvi`, `slugen`, `contenten`, `contentvi`, `descen`, `descvi`, `nameen`, `namevi`, `code`, `regular_price`, `discount`, `khoi_luong`, `sale_price`, `numb`, `status`, `type`, `date_created`, `date_updated`, `view`, `icon`, `file_attach`) VALUES
(9, 0, 0, 0, 0, 0, 'poduct-1-1318-7117.jpg', '{\"p\":\"poduct-1-1318-7117.jpg\",\"w\":540,\"h\":540,\"m\":\"image\\/jpeg\"}', 'hinh-anh-giay-nike-air-max', 'nike-air-max-shoe-image', '', '', '', '', 'Nike Air Max shoe image', 'Hình ảnh giày Nike Air Max', '', 0, 0, NULL, 0, 1, 'hienthi', 'thu-vien-anh', 1609287629, 1620819821, 26, NULL, NULL),
(10, 0, 0, 0, 0, 0, 'poduct-1-1758-8192.jpeg', '{\"p\":\"poduct-1-1758-8192.jpeg\",\"w\":540,\"h\":540,\"m\":\"image\\/jpeg\"}', 'hinh-anh-giay-nike-zoom', 'nike-zoom-shoe-image', '', '', '', '', 'Nike Zoom shoe image', 'Hình ảnh giày Nike Zoom', '', 0, 0, NULL, 0, 2, 'hienthi', 'thu-vien-anh', 1609287653, 1609287690, 4, NULL, NULL),
(11, 0, 0, 0, 0, 0, 'poduct-2-3013-5583.jpg', '', 'hinh-anh-giay-nike-air-force', 'nike-air-force-shoe-image', '', '', '', '', 'Nike Air Force shoe image', 'Hình ảnh giày Nike Air Force', '', 0, 0, NULL, 0, 3, 'hienthi', 'thu-vien-anh', 1609287703, 1609287726, 0, NULL, NULL),
(13, 0, 0, 0, 0, 0, 'poduct-8-2281-2890.jpg', '', 'hinh-anh-giay-nike-phantom', 'nike-phantom-shoe-image', '', '', '', '', 'Nike Phantom shoe image', 'Hình ảnh giày Nike Phantom', '', 0, 0, NULL, 0, 4, 'hienthi', 'thu-vien-anh', 1609287738, 1609287762, 0, NULL, NULL),
(44, 0, 0, 0, 0, 0, '192328927652645-16630-3362.jpg', '', 'hinh-1', '', '', '', '', '', '', 'hình 1', '', 0, 0, NULL, 0, 1, 'noibat,hienthi', 'album', 1726199385, 1726201446, 0, '', ''),
(45, 0, 0, 0, 0, 0, '192328927652645-16630-9217.jpg', '', 'hinh-2', '', '', '', '', '', '', 'hình 2', '', 0, 0, NULL, 0, 1, 'noibat,hienthi', 'album', 1726199393, 1726201438, 0, '', ''),
(46, 0, 0, 0, 0, 0, '192328927652645-16630-7009.jpg', '', 'hinh-3', '', '', '', '', '', '', 'hình 3', '', 0, 0, NULL, 0, 1, 'noibat,hienthi', 'album', 1726199399, 1726201420, 0, '', ''),
(47, 0, 0, 0, 0, 0, '192328927652645-16630-9416.jpg', '', 'hinh-4', '', '', '', '', '', '', 'hình 4', '', 0, 0, NULL, 0, 1, 'noibat,hienthi', 'album', 1726199408, 1726201412, 0, '', ''),
(48, 0, 0, 0, 0, 0, '192328927652645-16630-9352.jpg', '', 'hinh-5', '', '', '', '', '', '', 'hình 5', '', 0, 0, NULL, 0, 1, 'noibat,hienthi', 'album', 1726199415, 1726201404, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_product`
--
ALTER TABLE `table_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_product`
--
ALTER TABLE `table_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
