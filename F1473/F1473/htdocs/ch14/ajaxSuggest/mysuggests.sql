-- phpMyAdmin SQL Dump
-- version 5.1.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2021-01-26 09:56:04
-- 伺服器版本: 10.1.9-MariaDB
-- PHP 版本： 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mysuggests`
--
CREATE DATABASE IF NOT EXISTS `mysuggests` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mysuggests`;

-- --------------------------------------------------------

--
-- 資料表結構 `suggest`
--

CREATE TABLE `suggest` (
  `suggestId` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `suggest`
--

INSERT INTO `suggest` (`suggestId`, `title`) VALUES
(1, 'C'),
(2, 'C++'),
(3, 'Java'),
(4, 'JavaScript'),
(5, 'PHP'),
(6, 'JSP'),
(7, 'ASP'),
(8, 'ASP.NET'),
(9, 'VB.NET'),
(10, 'Visual Basic');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `suggest`
--
ALTER TABLE `suggest`
  ADD PRIMARY KEY (`suggestId`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `suggest`
--
ALTER TABLE `suggest`
  MODIFY `suggestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
