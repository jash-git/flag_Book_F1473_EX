-- phpMyAdmin SQL Dump
-- version 5.1.1  
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2021-01-27 02:51:11
-- 伺服器版本: 10.1.9-MariaDB
-- PHP 版本： 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mycontacts`
--
CREATE DATABASE IF NOT EXISTS `mycontacts` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mycontacts`;

-- --------------------------------------------------------

--
-- 資料表結構 `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tel` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `contact`
--

INSERT INTO `contact` (`id`, `name`, `tel`) VALUES
(1, '陳會安', '02-12345678'),
(2, '江小魚', '02-45678901'),
(3, '陳允傑', '02-89072345'),
(4, '張小品', '03-36541234'),
(5, '江寧', '03-44444444'),
(6, '陳允東', '04-12345678'),
(7, '周傑輪', '0933123434');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
