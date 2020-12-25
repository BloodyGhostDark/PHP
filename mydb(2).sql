-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-20 08:37:11
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- 資料表結構 `bulletin`
--

CREATE TABLE `bulletin` (
  `bid` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1.最新消息 2.招生資訊 3.行事曆',
  `title` varchar(200) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `bulletin`
--

INSERT INTO `bulletin` (`bid`, `type`, `title`, `content`, `time`) VALUES
(1, 1, '109學年度第1學期行事曆', '109學年度第1學期行事曆\r\n作者 管理研究所 小閔 \r\n', '2020-08-01'),
(2, 1, '明新大小事~通通在這裡~', '明新大小事~通通在這裡~\r\n作者 管理研究所 小閔 \r\n明新科大54週年校慶 磅礡太鼓表演打響全場 經濟日報\r\n明新科大54週年校慶 磅礡太鼓表演打響全場 大紀元', '2020-06-19'),
(3, 2, '109學年度招生-管理研究所碩士班甄試入學評分作業要點', '明新學校財團法人明新科技大學管理研究所甄試入學評分作業要點\r\n一、  本所碩士班甄試入學分為書面資料審查及口試二部份，書面資料審查佔總成績50%，口試成績佔總成績50%。\r\n二、   甄試評量方式規定。\r\n三、  其他規定事項，依據本校研究所招生委員會會議相關規定辦理。\r\n四、  本作業要點經所務會議通過，報請本校研究所招生委員會核備後實施，修正時亦同。', '2020-06-10'),
(4, 2, '明新科技大學獎學金', '明新科技大學獎學金\r\n詳見附件，自行下載。', '2020-11-16'),
(5, 3, '109學年度第1學期行事曆', '管理研究所－碩士在職專班\r\n109學年度第1學期行事曆\r\n作者 管理研究所 小閔 \r\n', '2020-11-03');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` varchar(40) NOT NULL,
  `pwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `pwd`) VALUES
('BABY', 'NO'),
('BgD', 'YES');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`bid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
