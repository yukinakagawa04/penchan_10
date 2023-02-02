-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 2 月 02 日 14:46
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
-- テーブルの構造 `users_table_00`
--

CREATE TABLE `users_table_00` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_admin` int(1) NOT NULL COMMENT '管理者ユーザと一般ユーザの識別に使用',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL COMMENT '論理削除に使用',
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `users_table_00`
--

INSERT INTO `users_table_00` (`id`, `email`, `password`, `is_admin`, `created_at`, `updated_at`, `deleted_at`, `username`) VALUES
(1, 'test@gmail.com', 'testtest', 0, '2023-01-14 16:03:44', '2023-01-29 16:08:02', NULL, ''),
(2, 'pote@email.com', 'potepote', 0, '2023-01-15 21:38:38', '2023-01-21 13:13:34', NULL, ''),
(3, 'nemu@aqualand.com', 'nemu', 0, '2023-01-17 20:20:29', '2023-01-17 23:27:59', NULL, ''),
(4, 'potepote@email.com', 'potepote', 0, '2023-01-21 14:08:06', '2023-01-21 14:08:54', NULL, '');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `users_table_00`
--
ALTER TABLE `users_table_00`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `users_table_00`
--
ALTER TABLE `users_table_00`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
