-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 26 2017 г., 23:43
-- Версия сервера: 5.5.53
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `firstname`, `lastname`) VALUES
(1, 'Юрий', 'Акунин'),
(2, 'Сергей', 'Бойко');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`) VALUES
(1, 'Новые боссы Милана: кто все эти люди?', 'яжелые переговоры о продаже Милана завершились, и в истории Россо-нери наступила новая, китайская эра. Славный дуэт Сильвио Берлускони и Адриано Галлиани уже не руководит клубом, балом правит загадочная компания Sino-Europe Sports.\n\nНовый совет директоров Милана состоит из восьми человек. Места поровну распределены между итальянцами и китайцами. В теории это должно выглядеть так: китайцы дают деньги и осуществляют контроль над тратами, а практическими вопросами занимаются итальянцы, уже имеющие опыт работы в Кальчо. Вроде бы логично, но красно-черный дьявол скрывается в деталях.'),
(2, 'Рамос дисквалифицирован на один матч\n', 'В матче с Барселоной капитан мадридского Реала Серхио Рамос получил прямую красную карточку за фол на Лионеле Месси. \n\nКомитет Испанской Футбольной Федерации (RFEF) принял решение дать один матч дисквалификации защитнику Реала. '),
(3, 'Как из 58 миллионов евро сделать 308: почему Мончи — гений', 'Новый спортивный директор Ромы Мончи не зря считается корифеем своего дела — и вот 15 доказательств этому.\n'),
(7, 'Трансферный бан Атлетико может быть отменен в ближайшее время', 'По информации AS, в понедельник (24 апреля) один из директоров Атлетико Клементе Вильяверде, глава клубной академии Эмилио Гутиэррес и юрист Кристиан Кайдель прибыли в Швейцарию. Целью визита было рассмотрение апелляции клуба об отмене запрета на трансферы.'),
(8, 'Нападающий Интера может перейти в Вест Бромвич', 'В текущем сезоне 30-летний игрок сыграл 35 матчей во всех турнирах, но большую часть матчей он начинал на скамейке запасных. Игрок перешел в Интер в январе 2016 года, однако так и не смог оправдать ожиданий. В случае приемлемого предложения клуб готов расстаться с бразильцем, заигранным за сборную Италии.'),
(9, 'Пасторе не прочь вернуться в Италию', 'Агент Хавьера Пасторе Марсело Симонян прокомментировал возможность возвращения аргентинца в Серию А. По словам Симоняна, возвращение Пасторе возможно, но маловероятно в ближайшее время.'),
(10, 'Интер сделал запрос по Крыховяку\n', 'Руководство Интера готово начать переговоры о полноценном трансфере польского полузащитника. Парижане готовы вести диалог о продаже игрока, который не имеет регулярного места в составе. '),
(11, 'Title TEST UPDATE', 'Text TEST UPDATE'),
(12, 'Новые боссы Милана: кто все эти люди?', 'Tяжелые переговоры о продаже Милана завершились, и в истории Россо-нери наступила новая, китайская эра. Славный дуэт Сильвио Берлускони и Адриано Галлиани уже не руководит клубом, балом правит загадочная компания Sino-Europe Sports.\r\n\r\nНовый совет директоров Милана состоит из восьми человек. Места поровну распределены между итальянцами и китайцами. В теории это должно выглядеть так: китайцы дают деньги и осуществляют контроль над тратами, а практическими вопросами занимаются итальянцы, уже имеющие опыт работы в Кальчо. Вроде бы логично, но красно-черный дьявол скрывается в деталях.'),
(14, 'Официально: Кавани продлил контракт с ПСЖ\r\n', 'Еще в январе сообщалось, что Кавани должен \"в ближайшем времени\" подписать новый контракт с ПСЖ. Сегодня (25 апреля) официальный твиттер клуба отрапортовал о продлении соглашения с уругвайским нападающим.\r\n\r\nСогласно новому контракту, Эдинсон будет защищать цвета ПСЖ до 2020 года.'),
(15, 'Маскерано впервые забил за Барселону', 'Барселона в 34-м туре играет с Осасуной. На 67-й минуте встречи при счете 5:1 в пользу сине-гранатовых в ворота Осасуны был назначен пенальти.'),
(16, 'На ЧМ-2018 будут использовать видеоповторы', 'Напомним, что система видеоповторов была протестирована в недавнем товарищеском поединке между сборными Испании и Франции. Тогда с помощью видео-ассистента был отменен неправильно засчитанный гол Антуана Гризманна и наоборот, засчитан сперва отмененный мяч Жерара Деулофеу.\nНапомним, что система видеоповторов была протестирована в недавнем товарищеском поединке между сборными Испании и Франции. Тогда с помощью видео-ассистента был отменен неправильно засчитанный гол Антуана Гризманна и наоборот, засчитан сперва отмененный мяч Жерара Деулофеу.\n\n\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
