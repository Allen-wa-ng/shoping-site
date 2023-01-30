-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2023 年 01 月 30 日 16:34
-- 伺服器版本： 10.4.27-MariaDB
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `shopping_site`
--

-- --------------------------------------------------------

--
-- 資料表結構 `items`
--

CREATE TABLE `items` (
  `no` int(11) NOT NULL,
  `guid` text NOT NULL,
  `quantity` text NOT NULL,
  `itemName` text NOT NULL,
  `orderguid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `no` int(11) NOT NULL,
  `guid` text NOT NULL,
  `userguid` text NOT NULL,
  `note` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `no` int(11) NOT NULL,
  `guid` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `name` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`no`, `guid`, `email`, `phone`, `address`, `name`, `time`) VALUES
(25, '.feb2326f-3638-4690-9e29-c1e5e475376f.', '.email.', '.phone.', '.address.', '.name.', '.2023 01 30 16:21.'),
(26, '.05035e23-d556-4df1-81e1-f2fea2bbf376.', '.email.', '.phone.', '.address.', '.name.', '.2023 01 30 16:22.'),
(27, '.e48990a2-09ce-40b5-ad02-b56e117c3e8c.', '.email.', '.phone.', '.address.', '.name.', '.2023 01 30 16:23.'),
(28, '.6ba9880a-7ff2-41a9-afc8-a856ccff7b41.', '.email.', '.phone.', '.address.', '.name.', '.2023 01 30 16:23.'),
(29, '.dba9f7f7-a90b-48b1-bb7c-812924eb4e3a.', '.email.', '.phone.', '.address.', '.name.', '.2023 01 30 16:23.'),
(30, '.f95d985d-f40c-4a33-8b99-cea42eec4ecf.', '.email.', '.phone.', '.address.', '.name.', '.2023 01 30 16:23.'),
(31, '.b833e43f-94ce-454a-800f-8931f976a2f4.', '.email.', '.phone.', '.address.', '.name.', '.2023 01 30 16:23.'),
(32, '.003980ba-113d-42f6-91e4-2a60637c9aea.', '.email.', '.phone.', '.address.', '.name.', '.2023 01 30 16:23.');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`no`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`no`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `items`
--
ALTER TABLE `items`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
