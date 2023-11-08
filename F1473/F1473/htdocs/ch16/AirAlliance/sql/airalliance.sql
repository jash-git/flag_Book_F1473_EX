-- phpMyAdmin SQL Dump
-- version 5.1.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2021-01-28 02:46:16
-- 伺服器版本: 10.1.9-MariaDB
-- PHP 版本： 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `airalliance`
--
CREATE DATABASE IF NOT EXISTS `airalliance` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `airalliance`;

-- --------------------------------------------------------

--
-- 資料表結構 `flights`
--

CREATE TABLE `flights` (
  `FID` int(11) NOT NULL,
  `FName` varchar(10) NOT NULL,
  `SourceSID` int(11) NOT NULL,
  `DestSID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `flights`
--

INSERT INTO `flights` (`FID`, `FName`, `SourceSID`, `DestSID`) VALUES
(1, 'AA056', 1, 3),
(2, 'AA032', 5, 6),
(3, 'AA087', 20, 4),
(4, 'AA003', 19, 17),
(5, 'AA004', 10, 13),
(6, 'AA045', 2, 5),
(7, 'AA033', 8, 11),
(8, 'AA089', 12, 9),
(9, 'AA099', 7, 16),
(10, 'AA098', 15, 14);

-- --------------------------------------------------------

--
-- 資料表結構 `guest`
--

CREATE TABLE `guest` (
  `GID` int(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `guest`
--

INSERT INTO `guest` (`GID`, `FirstName`, `LastName`) VALUES
(1, '會安', '陳'),
(2, '小魚', '江'),
(3, '允傑', '陳'),
(4, '小小', '李'),
(5, '美麗', '王'),
(6, '成功', '王'),
(7, '富國', '李'),
(8, '峰', '江'),
(9, '允東', '陳'),
(10, '天生', '高');

-- --------------------------------------------------------

--
-- 資料表結構 `itinerary`
--

CREATE TABLE `itinerary` (
  `IID` int(11) NOT NULL,
  `GID` int(11) NOT NULL,
  `FID` int(11) NOT NULL,
  `SID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `itinerary`
--

INSERT INTO `itinerary` (`IID`, `GID`, `FID`, `SID`) VALUES
(1, 4, 6, 5),
(2, 1, 10, 9),
(3, 6, 1, 1),
(4, 9, 8, 7),
(5, 3, 3, 3),
(6, 2, 4, 8),
(7, 7, 7, 4),
(8, 5, 9, 6),
(9, 10, 5, 2),
(10, 8, 2, 10);

-- --------------------------------------------------------

--
-- 資料表結構 `schedule`
--

CREATE TABLE `schedule` (
  `SID` int(11) NOT NULL,
  `GID` int(11) NOT NULL,
  `FID` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `schedule`
--

INSERT INTO `schedule` (`SID`, `GID`, `FID`, `Date`) VALUES
(1, 4, 4, '2021-11-01'),
(2, 6, 1, '2021-11-04'),
(3, 2, 10, '2021-10-04'),
(4, 3, 9, '2021-10-21'),
(5, 5, 8, '2021-10-20'),
(6, 1, 7, '2021-10-03'),
(7, 8, 6, '2021-10-04'),
(8, 9, 3, '2021-10-07'),
(9, 7, 2, '2021-10-15'),
(10, 10, 5, '2021-10-17');

-- --------------------------------------------------------

--
-- 資料表結構 `sectors`
--

CREATE TABLE `sectors` (
  `SID` int(11) NOT NULL,
  `Sector` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `sectors`
--

INSERT INTO `sectors` (`SID`, `Sector`) VALUES
(1, '台北'),
(2, '高雄'),
(3, '香港'),
(4, '東京'),
(5, '大阪'),
(6, '新加坡'),
(7, '曼谷'),
(8, '上海'),
(9, '北京'),
(10, '孟買'),
(11, '吉隆坡'),
(12, '首爾'),
(13, '洛杉磯'),
(14, '舊金山'),
(15, '巴黎'),
(16, '倫敦'),
(17, '柏林'),
(18, '多倫多'),
(19, '雪梨'),
(20, '墨爾本');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`FID`);

--
-- 資料表索引 `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`GID`);

--
-- 資料表索引 `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`IID`);

--
-- 資料表索引 `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`SID`);

--
-- 資料表索引 `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`SID`),
  ADD KEY `Sector` (`Sector`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `guest`
--
ALTER TABLE `guest`
  MODIFY `GID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用資料表 AUTO_INCREMENT `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `IID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用資料表 AUTO_INCREMENT `schedule`
--
ALTER TABLE `schedule`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用資料表 AUTO_INCREMENT `sectors`
--
ALTER TABLE `sectors`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
