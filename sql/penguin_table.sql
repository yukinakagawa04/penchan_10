-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 2 月 02 日 14:44
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_f07_01`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `penguin_table`
--

CREATE TABLE `penguin_table` (
  `penguin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `penguinname` text NOT NULL,
  `birth` date NOT NULL,
  `penguinvalue` varchar(50) NOT NULL,
  `feature` text NOT NULL,
  `place` varchar(50) NOT NULL,
  `img_type` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `penguin_table`
--

INSERT INTO `penguin_table` (`penguin_id`, `username`, `penguinname`, `birth`, `penguinvalue`, `feature`, `place`, `img_type`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'potepen', 'ぼんぼり', '2021-05-06', 'マゼランペンギン', '水の中に入らずに陸でぼーっとしている。', 'すみだ水族館', '', '', '2023-01-29 16:48:32', '2023-01-29 16:48:32'),
(2, 'potepen', 'しらたま', '2022-04-30', 'マゼランペンギン', '特等席でご飯をもらっていた。あざとい♡', 'すみだ水族館', '', '', '2023-01-29 16:49:26', '2023-01-29 16:49:26'),
(3, 'ぺんさん', 'ぺんちゃん', '2022-04-04', 'にんげん', 'よく歩く', 'すみだ水族館', '', '', '2023-01-29 22:37:09', '2023-01-29 22:37:09'),
(4, 'ぺんちゃん', 'ななぺん', '2022-01-01', 'ジェンツーペンギン', 'よく飛ぶ', 'すみだ水族館', '', '', '2023-01-29 22:41:01', '2023-01-29 22:41:01'),
(5, 'ポテぺん', 'だいふく', '2022-04-14', 'マゼランペンギン', 'スイスイ泳ぐ', 'すみだ水族館', '', '', '2023-01-29 23:06:15', '2023-01-29 23:06:15'),
(6, 'ポテぺん', 'だいふく', '2022-04-14', 'マゼランペンギン', 'スイスイ泳ぐ', 'すみだ水族館', '', '', '2023-01-29 23:08:00', '2023-01-29 23:08:00'),
(7, 'ポテぺん', 'スイカ', '2019-04-05', 'マゼランペンギン', 'いけぺん', 'すみだ水族館', '', '', '2023-01-29 23:12:00', '2023-01-29 23:12:00'),
(8, 'ちろペン', 'こまり', '2022-04-30', 'マゼランペンギン', 'ひとりでいる', 'すみだ水族館', '', '', '2023-01-30 12:47:33', '2023-01-30 12:47:33'),
(9, 'ポテぺん', 'スイカ', '2019-04-05', 'マゼランペンギン', 'スイスイ泳ぐ', 'すみだ水族館', 'image/png', 'img/20230202142730img01.png', '2023-02-02 22:27:30', '2023-02-02 22:27:30');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `penguin_table`
--
ALTER TABLE `penguin_table`
  ADD PRIMARY KEY (`penguin_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `penguin_table`
--
ALTER TABLE `penguin_table`
  MODIFY `penguin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
