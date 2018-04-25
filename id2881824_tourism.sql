-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2017 at 06:55 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2881824_tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `postdes` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `headline`, `image`, `date`, `postdes`) VALUES
(13, 'Hikka Sri lanka', 'images/admin/dd30f7d8ba38551d6a2fb65bc3f02e99f216184e3e955b952b7b52275aff389csea-turtle-hikkaduwa-sri-lanka.jpg', '2017-09-17', 'Hikkaduwa is a small town on the south coast of Sri Lanka located in the Southern Province, about 17 km (11 mi) north-west of Galle and 98 km (61 mi) south of Colombo.The name Hikkaduwa is thought to have been derived from the two words Ship Kaduwa, with Ship being the shorter version of Shilpaya which refers to knowledge in Sinhalese and Kaduwa which means sword. It is believed therefore that the name Hikkaduwa means sword of knowledge.'),
(11, '', 'images/admin/630d6b20a1861932d309bcceba1bda05black-wallpaper-10.jpg', '', ''),
(15, 'Nilaweli', 'images/admin/bca6bd861accebcca9afb8ae40ea04bec2034f59eaa7aea2eb4797183d014951.jpg', '2017-09-17', 'Nilaveli (Tamil: ???????), (Sinhalese: ????????) is a coastal resort town and suburb of the Trincomalee District, Sri Lanka located 16 km northwest of the city of Trincomalee. A historically popular Tamil village and tourist destination of the district alongside the nearby Uppuveli, the numbers of visitors declined following the 2004 Indian Ocean tsunami and Sri Lankan Civil War, but have risen again since 2010. Pigeon Island National Park, ');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `revid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `rate` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `review` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`revid`, `name`, `email`, `date`, `rate`, `headline`, `review`) VALUES
(1, 'Pubudu', '', '', 4, 'Wanna come again', 'fsf affsfs rtwtwgwg gwvfkjaehfiu afhauifha uafuiafhuiyr uiayr uiayf aufiuere iuafyuiahfuiaf uyiuhiuga uiaufagia uafguia utagaiuta'),
(2, 'Raveen', '', '', 2, 'Awesome ', 'Good service and everything is perfect '),
(44, 'Anjaleena', 'anjaleena@gmail.com', '2017-09-09', 5, 'Couting days to see you again', 'Had a really good time with you. Amazing guide i have ever seen in my life'),
(47, 'Brian', 'brian@gmail.com', '2017-09-17', 1, 'Hey', 'Jjahaa njjsjjww jjs jjhhse jhhsha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`revid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `revid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
