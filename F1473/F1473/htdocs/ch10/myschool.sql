-- phpMyAdmin SQL Dump
-- version 5.1.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2021-07-15 10:29:24
-- 伺服器版本: 10.1.9-MariaDB
-- PHP 版本： 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `myschool`
--
CREATE DATABASE IF NOT EXISTS `myschool` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `myschool`;

-- --------------------------------------------------------

--
-- 資料表結構 `classes`
--

CREATE TABLE `classes` (
  `sno` varchar(5) NOT NULL DEFAULT '',
  `cno` varchar(5) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `classes`
--

INSERT INTO `classes` (`sno`, `cno`) VALUES
('S001', 'CS101'),
('S001', 'CS102'),
('S001', 'CS203'),
('S002', 'CS101'),
('S002', 'CS102'),
('S002', 'CS201'),
('S005', 'CS204'),
('S005', 'CS203'),
('S006', 'CS201'),
('S006', 'CS203'),
('S006', 'CS204');

-- --------------------------------------------------------

--
-- 資料表結構 `courses`
--

CREATE TABLE `courses` (
  `cno` varchar(5) NOT NULL DEFAULT '',
  `pname` varchar(12) NOT NULL DEFAULT '',
  `title` varchar(30) NOT NULL DEFAULT '',
  `credits` int(11) NOT NULL DEFAULT '3'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `courses`
--

INSERT INTO `courses` (`cno`, `pname`, `title`, `credits`) VALUES
('CS101', '陳慶新', '計算機概論', 3),
('CS102', '王陽明', '程式語言', 3),
('CS104', '張獻忠', '網頁設計', 3),
('CS201', '陳慶新', '資料結構', 4),
('CS203', '張獻忠', '多媒體網頁設計', 2),
('CS204', '王陽明', '資料庫系統', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `sno` varchar(5) NOT NULL DEFAULT '',
  `name` varchar(12) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `username` varchar(12) NOT NULL DEFAULT '',
  `password` varchar(12) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='學生基本資料';

--
-- 資料表的匯出資料 `students`
--

INSERT INTO `students` (`sno`, `name`, `address`, `birthday`, `username`, `password`) VALUES
('S001', '陳會安', '新北市五股區', '2000-10-05', 'hueyan', '1234'),
('S002', '江小魚', '新北市中和區', '1999-01-02', 'smallfish', '1234'),
('S003', '周傑倫', '台北市松山區', '2001-05-01', 'jay', '1234'),
('S004', '蔡依玲', '台北市大安區', '1998-07-22', 'jolin', '1234'),
('S005', '張會妹', '台北市信義區', '1999-03-01', 'chiang', '1234'),
('S006', '張無忌', '台北市內湖區', '2000-03-01', 'chiang1234', '1234');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cno`);

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
