-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-12-15 14:17:28
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
(6, '超大蘋果', '水果', '100%超級甜'),
(7, '荷蘭餅乾', '乾糧', '異國風味'),
(8, '卡通筆記本', '文具', '最流型的動畫'),
(9, '膠帶', '文具', '新型好用'),
(10, '香香筆', '文具', '日本來的'),
(43, '123', 'twt', 'dfef'),
(52, 'test1', '2', '3'),
(53, '北美純淨水', '水', '100%純'),
(54, '電腦', '資通訊類', '最新款'),
(55, '手機', ' 行動裝置', '好用'),
(56, 'Notebook', '行動裝置	', '超好用的~~'),
(100, '海菜', '海菜類', '大海的味道~'),
(101, '美味堡', '堡類', '美味阿'),
(120, 'iphonee', '手機 ', '效能好'),
(121, 'iphonee', '手機 ', '效能好'),
(122, 'Newnotebook', '筆電 ', '效能好');

-- --------------------------------------------------------

--
-- 資料表結構 `productstore`
--

CREATE TABLE `productstore` (
  `productId` int(11) NOT NULL,
  `productName` varchar(30) DEFAULT NULL,
  `productPrice` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `productstore`
--

INSERT INTO `productstore` (`productId`, `productName`, `productPrice`) VALUES
(1, 'ITPRO手機', 12000),
(2, 'ICMax手機', 18000),
(3, 'GoGoChrom手機', 36000),
(4, 'GoGoTablet', 32000),
(5, 'ITPadPro', 50000),
(6, 'AppleeCloth', 500),
(7, 'AppleePad', 5800);

-- --------------------------------------------------------

--
-- 資料表結構 `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL COMMENT '使用者名稱',
  `password` varchar(32) NOT NULL COMMENT '密碼',
  `email` varchar(30) NOT NULL COMMENT '郵箱',
  `token` varchar(50) NOT NULL COMMENT '帳號啟用碼',
  `token_exptime` int(10) NOT NULL COMMENT '啟用碼有效期',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '狀態,0-未啟用,1-已啟用',
  `regtime` int(10) NOT NULL COMMENT '註冊時間'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `password`, `email`, `token`, `token_exptime`, `status`, `regtime`) VALUES
(67, 'ed', '202cb962ac59075b964b07152d234b70', 'nickyoung3300@gmail.com', 'da02fddf0774f4455c37217e13aaa59e', 1639657779, 1, 1639571379),
(65, 'tot1', '202cb962ac59075b964b07152d234b70', 'nickyoung3300@gmail.com', '297b9f398592d8c47c075b1694c9d642', 1639129464, 1, 1639043064),
(60, 'tot', '202cb962ac59075b964b07152d234b70', 'nickyoung3300@gmail.com', '79a15af46175651913ae3603a52f4ebb', 1639102481, 1, 1639016081),
(55, 'nick', '202cb962ac59075b964b07152d234b70', 'nickyoung3300@gmail.com', 'd1fc705ee7a8d8b069557dcff87340ce', 1639013189, 1, 1638926789),
(54, 'nick132', '202cb962ac59075b964b07152d234b70', 'nickyoung3300@gmail.com', '5d5357dc8bd0c550f7723961b5edf6cd', 1639013101, 0, 1638926701),
(46, 'guio1', '202cb962ac59075b964b07152d234b70', 'nickyoung3300@gmail.com', 'b41adbe8d005a7d0bdc49482f87304d5', 1638964107, 0, 1638877707),
(52, 'tony', 'a906449d5769fa7361d7ecc6aa3f6d28', 'nickyoung3300@gmail.com', 'f4c6262ad0d9f8d0711d5561e70fa9a3', 1638966534, 1, 1638880134),
(44, 'guio123', '65ded5353c5ee48d0b7d48c591b8f430', 'nickyoung3300@gmail.com', '6874237a18dc2b985b66bd39e4424231', 1638963116, 1, 1638876716);

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
-- 資料表索引 `productstore`
--
ALTER TABLE `productstore`
  ADD PRIMARY KEY (`productId`);

--
-- 資料表索引 `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `productstore`
--
ALTER TABLE `productstore`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
