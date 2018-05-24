-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 24 2018 г., 17:55
-- Версия сервера: 5.7.22-0ubuntu0.16.04.1
-- Версия PHP: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `archive`
--

-- --------------------------------------------------------

--
-- Структура таблицы `table`
--

CREATE TABLE `table` (
  `id` int(11) NOT NULL,
  `full_name` varchar(125) CHARACTER SET utf8 NOT NULL,
  `contract_number` varchar(45) CHARACTER SET utf8 NOT NULL,
  `amount` varchar(45) CHARACTER SET utf8 NOT NULL,
  `actual_amount` varchar(45) CHARACTER SET utf8 NOT NULL,
  `phone_number` varchar(45) CHARACTER SET utf8 NOT NULL,
  `account` varchar(45) CHARACTER SET utf8 NOT NULL,
  `m_pay` varchar(45) CHARACTER SET utf8 NOT NULL,
  `payment_date` datetime DEFAULT NULL,
  `work_date` datetime DEFAULT NULL,
  `employee` varchar(45) CHARACTER SET utf8 NOT NULL,
  `update_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `table`
--

INSERT INTO `table` (`id`, `full_name`, `contract_number`, `amount`, `actual_amount`, `phone_number`, `account`, `m_pay`, `payment_date`, `work_date`, `employee`, `update_time`) VALUES
(3, 'asdfadf', 'adsfas', '84000', '34000', 'asdfasdf', '16054028113801', '7000', '2018-05-08 00:00:00', NULL, 'asdfasdf', '2018-05-23 10:53:50'),
(4, 'asa', 'sdfsdf', '84000', '34448.7', 'sdfsdf', '2474301796600000', '7000', '2018-05-08 00:00:00', NULL, 'dasd', '2018-05-23 15:58:12'),
(5, 'sadasd', 'asd', '72000', '34000.1', 'fgdfg', '16008054544705', '6000', '2018-05-08 00:00:00', NULL, 'sdfsdf', '2018-05-23 15:59:02'),
(6, 'sad', 'adsfasd', '72000', '34827.3', '00000000', '2474301927880000', '6000', '2018-05-10 00:00:00', NULL, 'ՄԱՆՈՒԿՅԱՆ ԱՐՍԵՆ ԼԵՆԴՐՈՒՇԻ', '2018-05-24 11:12:19'),
(7, 'asa', 'sdfsdf', '84000', '34448.7', 'sdfsdf', '2474301796600000', '7000', '2018-05-08 00:00:00', NULL, 'dasd', '2018-05-23 15:58:12'),
(10, 'asatr', 'sdfsdf', '84000', '34262.3', 'sdfsdf', '2474301924650000', '7000', '2018-05-10 00:00:00', NULL, 'dasd', '2018-05-23 15:58:12'),
(11, 'asatr', 'sdfsdf', '84000', '34000', 'sdfsdf', '2474302541410000', '7000', '2018-05-10 00:00:00', NULL, 'dasd', '2018-05-23 15:58:12'),
(12, 'asatr', 'sdfsdf', '84000', '34000', 'sdfsdf', '11500425778400', '7000', '2018-05-17 00:00:00', NULL, 'dasd', '2018-05-23 15:58:12'),
(13, 'asatr', 'sdfsdf', '84000', '46014.9', 'sdfsdf', '2470804654430000', '7000', '2018-05-10 00:00:00', NULL, 'dasd', '2018-05-23 15:58:12'),
(14, 'asatr', 'sdfsdf', '84000', '70832.3', 'sdfsdf', '2474301928380000', '7000', '2018-05-10 00:00:00', NULL, 'dasd', '2018-05-23 15:58:12'),
(16, 'asatr', 'sdfsdf', '84000', '34000', 'sdfsdf', '16054028113801', '7000', '2018-05-08 00:00:00', NULL, 'dasd', '2018-05-23 15:58:12'),
(17, 'asatr', 'sdfsdf', '84000', '34000', 'sdfsdf', '16008054534804', '7000', '2018-05-08 00:00:00', NULL, 'dasd', '2018-05-23 15:58:12'),
(19, 'asatr', 'sdfsdf', '84000', '34066.3', 'sdfsdf', '2474301784800000', '7000', '2018-05-10 00:00:00', NULL, 'dasd', '2018-05-23 15:58:12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `table`
--
ALTER TABLE `table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
