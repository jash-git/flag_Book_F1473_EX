-- phpMyAdmin SQL Dump
-- version 5.1.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2021-01-27 03:57:35
-- 伺服器版本: 10.1.9-MariaDB
-- PHP 版本： 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- 資料表結構 `books`
--

CREATE TABLE `books` (
  `bookid` varchar(6) NOT NULL DEFAULT '',
  `booktitle` varchar(50) NOT NULL DEFAULT '',
  `bookauthor` varchar(10) NOT NULL DEFAULT '',
  `bookprice` double NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='圖書資料';

--
-- 資料表的匯出資料 `books`
--

INSERT INTO `books` (`bookid`, `booktitle`, `bookauthor`, `bookprice`) VALUES
('F036', 'Visual Basic程式設計範例教本', '陳會安', 490),
('EP684', '資料結構理論與實務-C語言實作', '陳會安', 490),
('EP696', '資料結構理論與實務-Java語言實作', '陳會安', 520),
('P679', 'Java SE程式設計範例教本', '陳會安', 650),
('P689', 'ASP.NET網頁設計範例教本', '陳會安', 580),
('P697', 'JSP網頁設計範例教本', '陳會安', 650),
('P703', 'C語言程式設計範例教本', '陳會安', 490);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
