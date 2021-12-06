-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-12-06 13:18:53
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `persons`
--

CREATE TABLE `persons` (
  `PersonID` int(11) NOT NULL,
  `LastName` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `FirstName` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `City` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `district` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `userPassword` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `userEmail` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `persons`
--

INSERT INTO `persons` (`PersonID`, `LastName`, `FirstName`, `City`, `district`, `userPassword`, `userEmail`) VALUES
(1, 'lin', 'nick', 'Taipei', '信義', 'ab21d3163e816c672fb9f7b025ab66d99fed3ac4429d5f741f5b13e31db172d5', 'test123@gmail.com');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `productCate` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `productDiscr` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`productId`, `productName`, `productCate`, `productDiscr`) VALUES
(2, '好蘋果', '水果', '甜度100'),
(3, '大蘋果', '水果', '甜度83'),
(4, '山泉水', '水', '淡淡的甘甜'),
(5, '可樂', '碳酸飲料', '甜度100'),
(6, '可可', '飲品', '濃郁'),
(7, '荷蘭餅乾', '乾糧', '異國風味'),
(8, '卡通筆記本', '文具', '最流型的動畫'),
(9, '膠帶', '文具', '新型好用'),
(10, '香香筆', '文具', '日本來的'),
(43, '123', 'twt', 'dfef'),
(52, 'test1', '2', '3');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`PersonID`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `persons`
--
ALTER TABLE `persons`
  MODIFY `PersonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
