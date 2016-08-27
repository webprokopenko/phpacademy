-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2016 at 07:52 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `reply_to` smallint(5) UNSIGNED DEFAULT NULL,
  `page_id` smallint(5) UNSIGNED NOT NULL,
  `email` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_id` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `reply_to`, `page_id`, `email`, `msg`, `dt`, `status_id`) VALUES
(1, NULL, 1, 'oleg.shumar@gmail.com', 'Test comment, тестовый комментарий', '2016-07-25 17:29:02', 0),
(2, 1, 1, 'oleg.shumar@gmail.com', 'Это ответ на первый комментарий', '2016-07-25 17:29:44', 0),
(5, NULL, 1, 'oleg.shumar@gmail.com', 'Test 3', '2016-07-25 17:50:15', 0),
(6, NULL, 1, 'oleg.shumar@gmail.com', 'Test 4', '2016-07-25 17:51:27', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;