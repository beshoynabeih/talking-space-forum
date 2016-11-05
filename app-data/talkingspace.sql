-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 04:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talkingspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Web Programming', 'It''s a very interesting work field. You can earn what do you want forever...\r\n'),
(2, 'Web Design', 'You need to be creative one.. to work in this career.');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `topic_id`, `user_id`, `body`, `create_date`) VALUES
(1, 1, 1, 'this is a reply can you help me?', '2016-10-30 22:07:36'),
(2, 1, 1, 'this is a reply can you help me?', '2016-10-30 22:07:43'),
(3, 5, 1, '<p>sdasdwqeweqqeqwedasdasd</p>', '2016-11-05 13:36:14'),
(4, 1, 1, '<p>new reply here</p>', '2016-11-05 13:37:46'),
(5, 5, 1, '<p>dqweqweqwdasdasd</p>', '2016-11-05 13:43:30'),
(6, 5, 1, '<p>weqweewrretert ert eter qweqeqwe</p>', '2016-11-05 13:44:52'),
(7, 4, 1, '<p>asdasdqweqwe</p>', '2016-11-05 13:46:02'),
(8, 5, 1, '<p>aweqwweerwe rwer wer wer</p>', '2016-11-05 13:48:39'),
(9, 3, 1, '<p>asdasqweqweqwe</p>', '2016-11-05 13:49:39'),
(10, 3, 1, '<p>asdasdasdasd</p>', '2016-11-05 13:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `last_activity` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `cat_id`, `user_id`, `title`, `body`, `last_activity`, `create_date`) VALUES
(1, 1, 1, 'How did you learn PHP?', 'This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time.This topic is about how you learned php over time..earned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..', '0000-00-00 00:00:00', '2016-10-30 20:25:05'),
(2, 2, 2, 'PHP and MVC pattern', 'This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..This topic is about how you learned php over time..', '0000-00-00 00:00:00', '2016-10-30 20:25:05'),
(3, 1, 5, 'This is new Title', 'This is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new TitleThis is new Title', '0000-00-00 00:00:00', '2016-11-01 01:23:05'),
(4, 1, 1, 'ASdasd', '<p>asdasd asd asdqw eqw e</p>', '0000-00-00 00:00:00', '2016-11-05 13:22:03'),
(5, 2, 1, 'wqeq weqwe', '<p>asdqweqwe</p>', '0000-00-00 00:00:00', '2016-11-05 13:22:17'),
(6, 1, 1, 'asdasdqweqweqweqw', '<p>qeqweqweqwe qwe qweqwe qweqw eqw</p>', '2016-11-05 15:51:31', '2016-11-05 13:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `about` text NOT NULL,
  `last_activity` datetime NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `username`, `password`, `about`, `last_activity`, `join_date`) VALUES
(1, 'Beshoy', 'beshoo@gmail.com', 'avatar1.jpg', 'beshoo', '123123', 'I''m a web developer on Google', '0000-00-00 00:00:00', '2016-10-30 19:36:06'),
(2, 'mina', 'mina@gmail.com', 'avatar1.jpg', 'mina', '123123', '', '0000-00-00 00:00:00', '2016-10-30 20:24:25'),
(3, 'mina', 'mina@gmail.com', 'avatar2.jpg', 'mina', '123123', '', '0000-00-00 00:00:00', '2016-10-30 20:24:30'),
(4, 'khalaf', 'khlaaf@gmail.com', 'Hydrangeas.jpg', 'khalaf', '123123', 'khalaf', '2016-11-03 01:03:26', '2016-11-03 00:05:26'),
(5, 'thomas edward', 'toto@gmail.com', 'Tulips.jpg', 'TOTO', '123', 'i''m a web development.\r\nCantact me at \r\nfacebook.com', '2016-11-03 16:03:18', '2016-11-03 15:55:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
