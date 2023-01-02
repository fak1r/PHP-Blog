-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 02 2023 г., 00:32
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cryptoblog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id_article` int(10) UNSIGNED NOT NULL,
  `id_cat` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` varchar(256) NOT NULL,
  `dt_add` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id_article`, `id_cat`, `id_user`, `title`, `content`, `dt_add`) VALUES
(1, 1, 1, 'BTC', 'Биткоин — это децентрализованная система, работающая на основе программного протокола и основанная на принципе прямого обмена между пользователями. ', '2022-11-16 11:14:11'),
(5, 1, 1, 'SNX', 'Токен Ethereum, на базе которого работает децентрализованный протокол эмиссии синтетических активов Synthetix.', '2022-11-17 11:38:01'),
(32, 1, 1, 'ETH', 'Криптовалюта и платформа для создания децентрализованных онлайн-сервисов на базе блокчейна, работающих на базе умных контрактов. Реализована как единая децентрализованная виртуальная машина. Концепт был предложен Виталиком Бутериным в конце 2013 года, сет', '2022-11-17 14:48:47'),
(33, 2, 1, 'DOGE', 'Dogecoin — это криптовалюта, созданная инженерами-программистами Билли Маркусом и Джексоном Палмером, которые решили создать платежную систему в качестве «шутки», высмеивая дикую спекуляцию криптовалютами в то время. Она считается как первой «монетой-мемом', '2022-11-17 14:51:57'),
(34, 1, 1, 'LTC', 'Litecoin — форк Bitcoin, пиринговая электронная платёжная система, использующая одноимённую криптовалюту. ', '2022-11-17 14:55:22'),
(52, 2, 1, 'WEX', '21 ноября 2018г. официальные представители Binance сообщили о попытке вывести со счетов, которые принадлежат WEX, десятки миллионов долларов в криптовалютном выражении. 28 ноября  2018г. все зеркала и домены, принадлежащие WEX, были заблокированы', '2022-11-17 19:53:21'),
(56, 2, 1, 'PRIZM', 'PRIZM отличает от других скамов крепкое сообщество. Его представители часто устраивают под видео и статьями, разоблачающими проект, «битву за справедливость». Активность инвесторов легко объяснить – в PRIZM действует реферальная система. Чем больше последо', '2022-11-18 08:25:48'),
(57, 1, 1, 'USDT', 'Криптовалютный токен, выпущенный компанией Tether Limited, которая утверждает, что его стоимость на 80 процентов обеспечивается запасами долларов США на банковских счетах или их эквивалент. Основная идея разработчиков данного токена состоит в предоставлен', '2022-11-18 09:12:53'),
(72, 1, 1, 'TRX', 'TRON — децентрализованная платформа для развлекательного контента, основанная на блокчейне и использующая токен TRX. TRON также предлагает инструменты, которые позволяют разработчикам создавать и запускать собственные dApps. Платформа была запущена китайск', '2022-12-04 14:17:16'),
(75, 4, 1, 'BNB', 'Это криптовалюта торговой площадки Binance, которая поддерживает экосистему Binance Chain. BNB является одним из самых популярных utility-токенов в мире.', '2022-12-06 20:32:45'),
(81, 4, 2, '1inch', 'это токен Ethereum, на базе которого работает децентрализованная биржа 1inch. Ее цель — предлагать «лучшие цены за счет поиска наиболее эффективных маршрутов обмена по всем ведущим DEX». Децентрализованные биржи (сокращенно DEX), например 1inch, позволяют ', '2022-12-16 13:07:08'),
(86, 4, 1, 'UNI', 'Токен Ethereum. Он лежит в основе протокола Uniswap, который предназначен для автоматического предоставления ликвидности и упрощает обмен токенов Ethereum (ERC-20). У Uniswap нет ни книги заявок, ни центрального координатора.', '2022-12-19 17:16:28'),
(88, 1, 5, 'XRP', 'Криптовалютная платформа для платёжных систем, ориентированная на операциях с обменом валют без возвратных платежей. Разработана компанией Ripple. Особенностью является консенсусный реестр. Система запущена в 2012 году.', '2022-12-26 19:31:35'),
(92, 1, 3, 'EOS', 'EOS.IO — блокчейн, оперирующий в качестве децентрализованной платформы с поддержкой смарт-контрактов для создания децентрализованных приложений. Основой блокчейна является криптовалюта EOS. На 26 июля 2018 года EOS, с капитализацией более 7,5 млрд долларов', '2022-12-30 17:29:43'),
(94, 1, 1, 'DOT', 'Polkadot — это блокчейн-платформа и криптовалюта. Он разработан, чтобы позволить блокчейнам обмениваться сообщениями и выполнять транзакции друг с другом без доверенной третьей стороны.', '2023-01-01 21:24:44');

-- --------------------------------------------------------

--
-- Структура таблицы `cats`
--

CREATE TABLE `cats` (
  `id_cat` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cats`
--

INSERT INTO `cats` (`id_cat`, `title`, `id_user`) VALUES
(1, 'To the moon', 1),
(2, 'Scam', 1),
(3, 'ььь', 3),
(4, 'Trading', 1),
(9, 'DDDDD', 3),
(13, '123', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id_session` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `token` varchar(128) NOT NULL,
  `dt_add` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id_session`, `id_user`, `token`, `dt_add`) VALUES
(17, 2, '86a9c886453eda4998626bc9c5f2bf8a2791727079e41e7060a6f65ce4991dd75177f703e462029f069df966ba70182dc1d1321373b874f6673dffeb04a061a8', '2022-12-30 08:00:34'),
(26, 1, '58e617fdc834cac03b515e4178f45593aaed9d16d1b814ca06125be4a3b458db53beee0217150ddb398d05f650a86727ce3ff8f78d9000391131f2e9933b20f3', '2022-12-31 17:54:38'),
(27, 1, 'deb69691c22654a17c6ef8d6265fc8dd666e9658699323a992e4566d8e8f545f58ec6b39cb10f266310b1f76abcf19d289f49da36ca9aa1899a2cb80b5a6f808', '2023-01-01 20:57:43');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `login` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `email`, `name`) VALUES
(1, 'admin', '$2y$10$wzechRmbGnmwb2Rf4fWiNukPkRlFiDQ6hcTgMWVajE6dtR7VpARHS', 'admin@localhost.ru', 'MainAdmin'),
(2, 'Mas', '$2y$10$fuhu7dPvhHaqRlLy0tY/MeaQAXYwZokZSmzfGG73.qLojCr5pN22W', 'w@w', 'Sim'),
(3, 'Mem', '$2y$10$RJ7KAusGUB/ZYYWi3JjqMe2OpBstnyrLXHukTII2ThWbcXU9zYQei', 'k@k', 'Lol'),
(5, 'Maximus', '$2y$10$aGGiCZTf7fR62eE2Nz3rOekgp4LDxGzVhC9QzQjX0/dTJuBOv3sqC', '6666@66666', 'User12'),
(7, 'User1', '$2y$10$m.1AyLy9PLfW70tB9cSNXu7lUhq7bB73gHfi2MpP0UWN41Z.KihOS', '2@22', 'Pepe'),
(8, 'User2', '$2y$10$Lbu5LDbOFDCdEQEWpSXUA.GhUClghiPHJj7XcSSDG8arArJIazV9O', '22@33', 'Name'),
(9, '222222', '$2y$10$2nK0bI5WtiSDzzd8WYpdJuV0rK2H.MS1G3h/t5BoZIPCI0BouPMdC', '222222@', '222222');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_cat` (`id_cat`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id_cat`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id_session`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT для таблицы `cats`
--
ALTER TABLE `cats`
  MODIFY `id_cat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id_session` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `cats` (`id_cat`),
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `cats`
--
ALTER TABLE `cats`
  ADD CONSTRAINT `cats_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
