-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 05 يناير 2021 الساعة 19:15
-- إصدار الخادم: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14871961_data`
--

-- --------------------------------------------------------

--
-- بنية الجدول `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `password`) VALUES
(2, 'AwsHyasat', 'awshyasat35@gmail.com', '$2y$10$57jUNtPSAYuA8g/h.giDceEhVBkZ7dAz95HILBpg0heev6mMbe.UO');

-- --------------------------------------------------------

--
-- بنية الجدول `count`
--

CREATE TABLE `count` (
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `count`
--

INSERT INTO `count` (`count`) VALUES
(105);

-- --------------------------------------------------------

--
-- بنية الجدول `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filetype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `newname` text COLLATE utf8_unicode_ci NOT NULL,
  `size2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `files`
--

INSERT INTO `files` (`id`, `name`, `username`, `filetype`, `size`, `url`, `newname`, `size2`) VALUES
(42, '٢٠٢٠١١٠٩_١٥٢٤٠٠.jpg', 'Aws Hyasat', 'image', '222 كيلوبايت', 'null', '307228227-image-11.jpg', 228227),
(43, 'IMG-20201109-WA0016.jpg', 'Aws Hyasat', 'image', '71 كيلوبايت', 'null', '95973527-image-11.jpg', 73527),
(44, 'IMG-20201109-WA0015.jpg', 'Aws Hyasat', 'image', '65 كيلوبايت', 'null', '70667076-image-11.jpg', 67076),
(45, 'IMG-20201109-WA0014.jpg', 'Aws Hyasat', 'image', '74 كيلوبايت', 'null', '48575948-image-11.jpg', 75948),
(46, 'IMG-20201109-WA0012.jpg', 'Aws Hyasat', 'image', '85 كيلوبايت', 'null', '43987534-image-10.jpg', 87534),
(47, 'IMG-20201109-WA0011.jpg', 'Aws Hyasat', 'image', '76 كيلوبايت', 'null', '13978316-image-11.jpg', 78316),
(48, 'IMG-20201109-WA0010.jpg', 'Aws Hyasat', 'image', '78 كيلوبايت', 'null', '67880845-image-11.jpg', 80845),
(49, 'IMG-20201109-WA0008.jpg', 'Aws Hyasat', 'image', '77 كيلوبايت', 'null', '57078871-image-10.jpg', 78871),
(50, 'IMG-20201109-WA0009.jpg', 'Aws Hyasat', 'image', '92 كيلوبايت', 'null', '20094991-image-11.jpg', 94991),
(51, 'IMG-20201109-WA0006.jpg', 'Aws Hyasat', 'image', '52 كيلوبايت', 'null', '33253576-image-10.jpg', 53576),
(52, 'IMG-20201109-WA0007.jpg', 'Aws Hyasat', 'image', '62 كيلوبايت', 'null', '39363542-image-10.jpg', 63542),
(53, 'IMG-20201109-WA0002.jpg', 'Aws Hyasat', 'image', '59 كيلوبايت', 'null', '96560714-image-11.jpg', 60714),
(54, 'IMG-20201017-WA0029.jpg', 'Aws Hyasat', 'image', '14 كيلوبايت', 'null', '53514811-image-11.jpg', 14811),
(55, 'IMG-20201017-WA0022.jpg', 'Aws Hyasat', 'image', '20 كيلوبايت', 'null', '86821058-image-11.jpg', 21058),
(56, 'IMG-20201017-WA0026.jpg', 'Aws Hyasat', 'image', '44 كيلوبايت', 'null', '34245832-image-11.jpg', 45832),
(57, 'IMG-20201017-WA0027.jpg', 'Aws Hyasat', 'image', '21 كيلوبايت', 'null', '75322381-image-10.jpg', 22381),
(58, 'IMG-20201017-WA0014.jpg', 'Aws Hyasat', 'image', '171 كيلوبايت', 'null', '412176034-image-10.jpg', 176034),
(59, 'IMG-20201017-WA0019.jpg', 'Aws Hyasat', 'image', '13 كيلوبايت', 'null', '96214323-image-10.jpg', 14323),
(60, 'IMG-20201017-WA0020.jpg', 'Aws Hyasat', 'image', '27 كيلوبايت', 'null', '71427873-image-10.jpg', 27873),
(61, 'IMG-20201017-WA0023.jpg', 'Aws Hyasat', 'image', '24 كيلوبايت', 'null', '51924584-image-10.jpg', 24584),
(64, 'الحصول على أشتراك canva مجانا .mp4', 'Aws Hyasat', 'video', '3 ميجابايت', 'null', '3883974365-video-10.mp4', 3974365),
(65, '2020-11-12_09-38-17.jpg', 'Aws Hyasat', 'image', '14 كيلوبايت', 'null', '50814749-image-11.jpg', 14749),
(66, '٢٠٢٠١١١٢_٠٩٤٦٢٥.jpg', 'Aws Hyasat', 'image', '35 كيلوبايت', 'null', '50735975-image-10.jpg', 35975),
(67, '٢٠٢٠١١١٥_١٥١٤٢٣.jpg', 'Aws Hyasat', 'image', '3 ميجابايت', 'null', '6893570724-image-11.jpg', 3570724);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `email`) VALUES
(2, 'Ahmad fuad', 'ahmadfoaad078@gmail.com'),
(7, 'Aws Hyasat', 'awshyasat35@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
