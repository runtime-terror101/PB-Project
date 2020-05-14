-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 12:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stay_at_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

CREATE TABLE `chatroom` (
  `m_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `user` varchar(100) NOT NULL DEFAULT '4N0N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatroom`
--

INSERT INTO `chatroom` (`m_id`, `msg`, `user`) VALUES
(1, 'Hey wassup', 'Vish'),
(2, 'Hi Vish!', 'Rose'),
(3, 'Hello folks!\r\n', 'Mike'),
(4, '4NON', 'Mike'),
(7, 'kimchi ', 'Emily'),
(8, 'We were on a break!\r\n', 'RossGeller'),
(9, '', 'MrsChanandlarBong'),
(10, 'OMG if you say this one more time I am gonna kill you?!', 'MrsChanandlarBong'),
(11, 'Hi', 'ria');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `q_id` int(11) NOT NULL,
  `quote` text NOT NULL DEFAULT '\'"Life is beautiful"\''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`q_id`, `quote`) VALUES
(1, 'Heya'),
(2, 'As sweet as sugar'),
(3, 'Hi, have a sunny morning!'),
(4, 'Heavy is the head that wears the crown!'),
(6, 'Carpe diem!'),
(7, 'Hello hello'),
(11, 'Niceness is a quality \r\nI have that in plenty'),
(18, 'Niceness is a quality one should possess'),
(22, 'Gold bar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `upassword` varchar(100) NOT NULL,
  `age` int(11) NOT NULL DEFAULT 18
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `email_id`, `upassword`, `age`) VALUES
(1, 'Vishesh Agrawal', '0', 'chuggy', 20),
(2, 'Vishesh', '0', 'hellohello', 20),
(3, 'Vishesh', 'vish', 'chuggy', 20),
(4, 'V', 'vish', 'chichi', 20),
(5, 'V', 'vish', 'chyahych', 20),
(6, 'Vishesh Agrawal', 'visha', 'chiyaa', 20),
(7, 'Vishesh Agrawal', 'vish', 'yutab', 20),
(8, 'Vishesh Agrawal', 'vish', 'shihsi', 20),
(9, '', 'vishaa', 'chichi', 0),
(10, 'Vishesh Agrawal', 'vio', 'viu', 20),
(11, 'VA', 'vi', 'vishesh', 20),
(12, 'Vantika`', 'hu', 'ui', 20),
(13, 'Vish', 'uuid', 'vi', 20),
(14, 'Vantika', 'vantikascorpio28@gmail.com', 'magnus', 18),
(15, 'Juhi', 'juhi', 'juhi', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid` (`uid`,`email_id`),
  ADD KEY `email_id` (`email_id`),
  ADD KEY `uid_2` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
