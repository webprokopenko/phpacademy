SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `books` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `books`;

DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `authors` (`id`, `title`, `bio`) VALUES
(1, 'Ivanov', 'Test for Ivanov'),
(2, 'Petrov', 'Petrov''s bio'),
(3, 'Sidorov', 'Test for Sidorov'),
(4, 'Innokentiy', 'Innokentiy bio');

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `category_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `books` (`id`, `title`, `price`, `category_id`) VALUES
(1, 'PHP for Beginners', 250, 4),
(2, 'PHP + MySQL', 360, 4),
(3, 'Java', 550, 5),
(4, 'Java EE', 760, 5),
(5, 'Unknown Category Book', 1200, 9);

DROP TABLE IF EXISTS `books_authors`;
CREATE TABLE `books_authors` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `book_id` smallint(5) UNSIGNED NOT NULL,
  `author_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `books_authors` (`id`, `book_id`, `author_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 4),
(4, 2, 2),
(5, 3, 4),
(6, 4, 1);

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `parent_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`id`, `parent_id`, `title`) VALUES
(1, NULL, 'Fantasy'),
(2, NULL, 'Lyrics'),
(3, NULL, 'Programming'),
(4, 3, 'PHP'),
(5, 3, 'Java');


ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `books_authors`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `authors`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
ALTER TABLE `books`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
ALTER TABLE `books_authors`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
ALTER TABLE `categories`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
