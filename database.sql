-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 26 2019 г., 17:02
-- Версия сервера: 5.7.14
-- Версия PHP: 5.4.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `answer_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`post_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`, `user_id`, `post_id`, `date`, `answer_id`) VALUES
(1, 'ewqeqw', 23, 220, '2019-02-26 19:43:24', 0),
(2, '1234', 23, 220, '2019-02-26 20:02:21', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `dates`
--

CREATE TABLE IF NOT EXISTS `dates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `deadline` (`date`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `dates`
--

INSERT INTO `dates` (`id`, `date`) VALUES
(6, '2019-02-11'),
(11, '2019-02-12'),
(5, '2019-02-13'),
(8, '2019-02-15'),
(1, '2019-02-18'),
(3, '2019-02-19'),
(18, '2019-02-21'),
(17, '2019-02-22'),
(7, '2019-02-25'),
(19, '2019-02-26'),
(10, '2019-12-20'),
(9, '2019-12-21');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` text,
  `user_id` int(11) unsigned NOT NULL,
  `date_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `deadline_id` (`date_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=223 ;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `description`, `user_id`, `date_id`) VALUES
(220, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est repellendus, itaque blanditiis modi neque quidem et! Reiciendis deleniti accusantium veniam iure eveniet dignissimos velit nostrum quasi debitis sunt iste, assumenda quae quisquam id cum doloremque aliquid voluptatibus esse modi adipisci culpa numquam dicta neque ut. Fugit, quam repellendus nostrum recusandae corporis sint? Impedit illum, placeat necessitatibus vel possimus voluptas eum excepturi mollitia, officiis aut quas expedita amet voluptates dolore ex quibusdam dolorem recusandae consequatur et iste sunt nam minus veniam qui! Possimus nihil ipsum beatae amet minus quasi tempora ducimus provident sequi, quo, excepturi temporibus ut commodi quae quas aut nulla, cum quis dolore. Dolores, voluptate, deserunt. Excepturi praesentium necessitatibus quis harum culpa, dolores soluta molestias, ex, rerum rem illum, temporibus animi pariatur in vitae cupiditate id. Doloribus veniam deleniti vitae, tenetur esse architecto, pariatur perspiciatis excepturi officia repellat odio nam? Molestiae veritatis natus iusto, optio tempore, corporis dolore cupiditate sit exercitationem deleniti explicabo obcaecati placeat quasi in pariatur est unde similique? Iste aut, nostrum, dolorem asperiores odio nam. Nulla deserunt tempore, iste nam, voluptatibus aspernatur hic? Quas eveniet, ab nemo. Laboriosam doloremque aperiam eius obcaecati tempore, nam minima est praesentium, numquam nesciunt voluptatem, ea ipsum reiciendis quasi, inventore? Labore, ipsum, voluptates? Nam vero distinctio nisi doloribus dolorem libero corrupti tenetur eius quis odio eveniet dignissimos, animi harum atque ut quo neque eos aperiam officiis! Mollitia, voluptatibus adipisci eos distinctio labore a vel quae aliquid voluptates assumenda similique voluptatum dolorum maxime ipsa corporis nemo. Doloremque assumenda nobis libero aliquam ad quasi amet sequi veniam beatae, cumque fugiat cum impedit eos quod corrupti ea. Doloremque quasi, officia ut totam, mollitia fuga beatae natus praesentium hic id, veritatis blanditiis eius nobis animi adipisci est! Aspernatur error dolorum, eos iste ut nobis deserunt! Vitae facere doloremque modi fugit rem laboriosam quisquam id officiis. Repudiandae ratione numquam perferendis quo, nemo voluptatibus repellat magnam nesciunt eum deserunt aspernatur itaque at molestiae, a quis quisquam saepe ipsum nihil eligendi ipsam veritatis adipisci provident officia rerum? Voluptate ipsum, tempora eius voluptates cumque obcaecati facere dolore, est, eos tenetur sapiente quod tempore? Unde quos illum accusamus nisi consequatur inventore deserunt nobis beatae voluptatem et soluta fugiat sint numquam officia aperiam neque, provident at. Fugit culpa ab autem repellat molestias doloremque dolores amet ex laborum aut! Cum dignissimos alias ratione iste rem consectetur deleniti non, explicabo consequuntur. Mollitia quia sed veniam voluptates pariatur, delectus error excepturi labore, officiis vitae iste dolore natus? Eaque est porro, magni, laboriosam temporibus facilis vero maxime delectus sapiente beatae ut! Error voluptatum accusamus architecto sapiente, deleniti sed incidunt repudiandae reprehenderit ratione similique corporis laborum tenetur commodi, voluptatem inventore deserunt assumenda a. Nobis obcaecati ratione ullam voluptatum praesentium illo quis officia quibusdam quidem dicta quos numquam modi doloremque, nisi soluta non dolores facilis adipisci, itaque facere placeat consectetur saepe quae maxime! Recusandae repellat esse porro omnis veniam officia similique corrupti, possimus provident cupiditate libero hic placeat explicabo eum accusantium, cum aut, voluptate temporibus, delectus inventore? Animi delectus velit quibusdam, aliquam temporibus. Iusto error dignissimos ipsam!', 23, 19),
(221, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est repellendus, itaque blanditiis modi neque quidem et! Reiciendis deleniti accusantium veniam iure eveniet dignissimos velit nostrum quasi debitis sunt iste, assumenda quae quisquam id cum doloremque aliquid voluptatibus esse modi adipisci culpa numquam dicta neque ut. Fugit, quam repellendus nostrum recusandae corporis sint? Impedit illum, placeat necessitatibus vel possimus voluptas eum excepturi mollitia, officiis aut quas expedita amet voluptates dolore ex quibusdam dolorem recusandae consequatur et iste sunt nam minus veniam qui! Possimus nihil ipsum beatae amet minus quasi tempora ducimus provident sequi, quo, excepturi temporibus ut commodi quae quas aut nulla, cum quis dolore. Dolores, voluptate, deserunt. Excepturi praesentium necessitatibus quis harum culpa, dolores soluta molestias, ex, rerum rem illum, temporibus animi pariatur in vitae cupiditate id. Doloribus veniam deleniti vitae, tenetur esse architecto, pariatur perspiciatis excepturi officia repellat odio nam? Molestiae veritatis natus iusto, optio tempore, corporis dolore cupiditate sit exercitationem deleniti explicabo obcaecati placeat quasi in pariatur est unde similique? Iste aut, nostrum, dolorem asperiores odio nam. Nulla deserunt tempore, iste nam, voluptatibus aspernatur hic? Quas eveniet, ab nemo. Laboriosam doloremque aperiam eius obcaecati tempore, nam minima est praesentium, numquam nesciunt voluptatem, ea ipsum reiciendis quasi, inventore? Labore, ipsum, voluptates? Nam vero distinctio nisi doloribus dolorem libero corrupti tenetur eius quis odio eveniet dignissimos, animi harum atque ut quo neque eos aperiam officiis! Mollitia, voluptatibus adipisci eos distinctio labore a vel quae aliquid voluptates assumenda similique voluptatum dolorum maxime ipsa corporis nemo. Doloremque assumenda nobis libero aliquam ad quasi amet sequi veniam beatae, cumque fugiat cum impedit eos quod corrupti ea. Doloremque quasi, officia ut totam, mollitia fuga beatae natus praesentium hic id, veritatis blanditiis eius nobis animi adipisci est! Aspernatur error dolorum, eos iste ut nobis deserunt! Vitae facere doloremque modi fugit rem laboriosam quisquam id officiis. Repudiandae ratione numquam perferendis quo, nemo voluptatibus repellat magnam nesciunt eum deserunt aspernatur itaque at molestiae, a quis quisquam saepe ipsum nihil eligendi ipsam veritatis adipisci provident officia rerum? Voluptate ipsum, tempora eius voluptates cumque obcaecati facere dolore, est, eos tenetur sapiente quod tempore? Unde quos illum accusamus nisi consequatur inventore deserunt nobis beatae voluptatem et soluta fugiat sint numquam officia aperiam neque, provident at. Fugit culpa ab autem repellat molestias doloremque dolores amet ex laborum aut! Cum dignissimos alias ratione iste rem consectetur deleniti non, explicabo consequuntur. Mollitia quia sed veniam voluptates pariatur, delectus error excepturi labore, officiis vitae iste dolore natus? Eaque est porro, magni, laboriosam temporibus facilis vero maxime delectus sapiente beatae ut! Error voluptatum accusamus architecto sapiente, deleniti sed incidunt repudiandae reprehenderit ratione similique corporis laborum tenetur commodi, voluptatem inventore deserunt assumenda a. Nobis obcaecati ratione ullam voluptatum praesentium illo quis officia quibusdam quidem dicta quos numquam modi doloremque, nisi soluta non dolores facilis adipisci, itaque facere placeat consectetur saepe quae maxime! Recusandae repellat esse porro omnis veniam officia similique corrupti, possimus provident cupiditate libero hic placeat explicabo eum accusantium, cum aut, voluptate temporibus, delectus inventore? Animi delectus velit quibusdam, aliquam temporibus. Iusto error dignissimos ipsam!', 23, 18),
(222, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est repellendus, itaque blanditiis modi neque quidem et! Reiciendis deleniti accusantium veniam iure eveniet dignissimos velit nostrum quasi debitis sunt iste, assumenda quae quisquam id cum doloremque aliquid voluptatibus esse modi adipisci culpa numquam dicta neque ut. Fugit, quam repellendus nostrum recusandae corporis sint? Impedit illum, placeat necessitatibus vel possimus voluptas eum excepturi mollitia, officiis aut quas expedita amet voluptates dolore ex quibusdam dolorem recusandae consequatur et iste sunt nam minus veniam qui! Possimus nihil ipsum beatae amet minus quasi tempora ducimus provident sequi, quo, excepturi temporibus ut commodi quae quas aut nulla, cum quis dolore. Dolores, voluptate, deserunt. Excepturi praesentium necessitatibus quis harum culpa, dolores soluta molestias, ex, rerum rem illum, temporibus animi pariatur in vitae cupiditate id. Doloribus veniam deleniti vitae, tenetur esse architecto, pariatur perspiciatis excepturi officia repellat odio nam? Molestiae veritatis natus iusto, optio tempore, corporis dolore cupiditate sit exercitationem deleniti explicabo obcaecati placeat quasi in pariatur est unde similique? Iste aut, nostrum, dolorem asperiores odio nam. Nulla deserunt tempore, iste nam, voluptatibus aspernatur hic? Quas eveniet, ab nemo. Laboriosam doloremque aperiam eius obcaecati tempore, nam minima est praesentium, numquam nesciunt voluptatem, ea ipsum reiciendis quasi, inventore? Labore, ipsum, voluptates? Nam vero distinctio nisi doloribus dolorem libero corrupti tenetur eius quis odio eveniet dignissimos, animi harum atque ut quo neque eos aperiam officiis! Mollitia, voluptatibus adipisci eos distinctio labore a vel quae aliquid voluptates assumenda similique voluptatum dolorum maxime ipsa corporis nemo. Doloremque assumenda nobis libero aliquam ad quasi amet sequi veniam beatae, cumque fugiat cum impedit eos quod corrupti ea. Doloremque quasi, officia ut totam, mollitia fuga beatae natus praesentium hic id, veritatis blanditiis eius nobis animi adipisci est! Aspernatur error dolorum, eos iste ut nobis deserunt! Vitae facere doloremque modi fugit rem laboriosam quisquam id officiis. Repudiandae ratione numquam perferendis quo, nemo voluptatibus repellat magnam nesciunt eum deserunt aspernatur itaque at molestiae, a quis quisquam saepe ipsum nihil eligendi ipsam veritatis adipisci provident officia rerum? Voluptate ipsum, tempora eius voluptates cumque obcaecati facere dolore, est, eos tenetur sapiente quod tempore? Unde quos illum accusamus nisi consequatur inventore deserunt nobis beatae voluptatem et soluta fugiat sint numquam officia aperiam neque, provident at. Fugit culpa ab autem repellat molestias doloremque dolores amet ex laborum aut! Cum dignissimos alias ratione iste rem consectetur deleniti non, explicabo consequuntur. Mollitia quia sed veniam voluptates pariatur, delectus error excepturi labore, officiis vitae iste dolore natus? Eaque est porro, magni, laboriosam temporibus facilis vero maxime delectus sapiente beatae ut! Error voluptatum accusamus architecto sapiente, deleniti sed incidunt repudiandae reprehenderit ratione similique corporis laborum tenetur commodi, voluptatem inventore deserunt assumenda a. Nobis obcaecati ratione ullam voluptatum praesentium illo quis officia quibusdam quidem dicta quos numquam modi doloremque, nisi soluta non dolores facilis adipisci, itaque facere placeat consectetur saepe quae maxime! Recusandae repellat esse porro omnis veniam officia similique corrupti, possimus provident cupiditate libero hic placeat explicabo eum accusantium, cum aut, voluptate temporibus, delectus inventore? Animi delectus velit quibusdam, aliquam temporibus. Iusto error dignissimos ipsam!', 23, 18);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(12, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `logins`, `last_login`) VALUES
(1, 'gamingchannel.zik@gmail.com', 'gamingchannel', '7e1cf11cbe655da63629d0aa954ef591efec66e9d25f7786af3c7d6aa1f48113', 0, NULL),
(2, 'maximchuk.bodya@gmail.com', 'gam', 'e60d49bb948cfd9c7d08a1f97635e890aca82c54fe3c96f5253a9594b51d2b88', 0, NULL),
(3, 'w1943738e@gmail.com', 'gamingsas', '51d421177a26f4202c9e0e1e3ae3c9e42f85895dc1a1c53e6e9b1879ad994bb5', 0, NULL),
(4, 'w1dsad943738e@gmail.com', 'gamingsasasdsad', '25d415ab2c968190d83ecbf7993d5ca581de1fb5674e998a4dc467c53938bbbe', 0, NULL),
(5, 'w1dsaddd943738e@gmail.comd', 'gamindd1231', '8f14141637ce79083323053236ff74eaec67829d9233bbaf97302b1440b2bcf4', 0, NULL),
(6, 'w1dsadddd943738e@gmail.comd', 'gamindd12312', '4144fa90e567aa2aedb1c38dbd949f852b09d4c682ae8d5d84cd355d235ecdc1', 0, NULL),
(7, 'madximchuk.bodya@gmail.com', 'dsa2123dsa', '13eb0dcddcbf296bab4192fee8751a6a9486e3e93e3b7c30e34c7ac9314ed73b', 0, NULL),
(8, 'gamingc2hannel.zik@gmail.com', 'gamingchannel2', '4fdd94f4a53ea1cc1df38dc2f87fc545645f25ed0a743c49d76a6630c1f9192c', 0, NULL),
(9, 'gaming2312channel.zik@gmail.com', 'gamingda2412', '716211a2320a8ed8d3a6a05f38582558d761216eefded13a4f763125cfa906bf', 0, NULL),
(10, 'w19asdasdasd43738e@gmail.com', 'user394977', '46f663e99d0065de61179a65b7acb680888e9f101baf4e407254a95f1cb1daa1', 0, NULL),
(11, 'w19asdasd2asd43738e@gmail.com', 'user3949772', '46f663e99d0065de61179a65b7acb680888e9f101baf4e407254a95f1cb1daa1', 0, NULL),
(12, 'maximchuk.bods2ya@gffmail.com', 'stringstring', 'abf9ed91903ec7c3d4ed239e7b47bfcc18b4a86eb92614e18b49d09b6be47868', 0, NULL),
(13, 'wewqeq43738e@gmail.com', 'username', 'ecda5eaeff39f7041d8701980d13e9f290bed8e6ed316f4d7a2afd085687a45a', 0, NULL),
(14, 'wsadasddewqeq43738e@gmail.com', 'username2', 'ecda5eaeff39f7041d8701980d13e9f290bed8e6ed316f4d7a2afd085687a45a', 0, NULL),
(15, 'gamin2312399olgchannel.zik@gmail.com', 'gamingchandsadasd', '4013e1aa95a4c218a8bd034ab8666213ddc5daa7b3d546fe0c5f9d707f5d91f9', 0, NULL),
(16, 'gamingdsadasdadsqw4121channel.zik@gmail.com', 'gamingcdsdahannel', 'fe6aaba977295a65d4ce434268a0716d48ab4253b15c52d54ee632baff7766c4', 0, NULL),
(17, 'gam2313132sadaingchannel.zik@gmail.com', 'maximchuk0071231', 'c4dd0663567e3bf1169ab6962ffee1fad94a40e345e84b7eacc903e4bbc61836', 0, NULL),
(18, '2gamingchannel.zik@gmail.com', '2maximchuk007', '4013e1aa95a4c218a8bd034ab8666213ddc5daa7b3d546fe0c5f9d707f5d91f9', 0, NULL),
(19, 'gamin31231fdsnhdserewwgchannel.zik@gmail.com', 'maximchuk0071231231231231', '854b11c4c0f3f2acec9b5d628b48a21957cd2b74ad67feb11c30bc7eb7d7b890', 0, NULL),
(20, 'gamingcqweqwehannel.zik@gmail.com', 'maximchuewqeqwek007', '69880fdfbfdba2802ce006c5c20bc42a869aa61ef41c6bfcf52b2fb1de8a9d0f', 0, NULL),
(21, 'gamingc31231231annel.zik@gmail.com', 'user3949773123', '2b124db8fbe01b570192ee48812032ce1df0474b6eec4ddc23543fd7744fd513', 0, NULL),
(22, 'firstuser@mail.com', 'firstuser', 'de10fdd235c6ff4cdd6f9fbab1d4920f82cca493598d73a35e30b0e5d0da5ead', 5, 1549835125),
(23, 'admin@s.ff', 'admin', '03868c39f2511ac8e4f7c3bd9c1a19522cfbc5fc04b1e2e3f74aca37e9ae5c26', 58, 1551202023),
(24, 'gamin123123e1gchannel.zik@gmail.com', 'maximchuk007dasdas', '4511ec52e1932f1bdf54ed233851628066193be44304628b94f84e190c49cfd2', 0, NULL),
(25, 'gamingdasdas1231channel.zik@gmail.com', 'maximchuk007dasdasd', '4de0d7610500a387fc471e73b2a9bfe7a52ef19e41236c09b4ff3a5652d9713f', 1, 1549924817);

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `user_tokens`
--

INSERT INTO `user_tokens` (`id`, `user_id`, `user_agent`, `token`, `created`, `expires`) VALUES
(1, 23, '6f7e2c0b2720a430810d747f318e18152df220d3', '703da4259fac7fdc7e0853a581e97a08e3c6b013', 1549933647, 1551143247),
(2, 23, '6f7e2c0b2720a430810d747f318e18152df220d3', '07a5ba1e1b3917981c6fd7b0e6e1521927cbda5e', 1550090570, 1551300170),
(3, 23, '6f7e2c0b2720a430810d747f318e18152df220d3', 'f9da5c9a686b98f345d7a0648d18213b889e3c4b', 1550106824, 1551316424);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`date_id`) REFERENCES `dates` (`id`);

--
-- Ограничения внешнего ключа таблицы `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
