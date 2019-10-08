-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 05:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webteken`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `header` varchar(64) CHARACTER SET latin1 NOT NULL,
  `content` varchar(1500) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `header`, `content`) VALUES
(1, 'United Arab Republic', 'The United States, the Republic of Egypt, Syria and the country announced on February 1, 1958 and approved the referendum in both countries (referendum) is the result of a political merger. The President was Jamal Abdul Nasir. After a military coup d\'état ended on September 28, 1961, with Syria declaring its independence from Egypt. Despite the dissolution of the union, Egypt retained the name of the United Arab Republic until 2 September 1971. At that time he took the name of the Arab Republic of Egypt. In his early years (1958-1961), he was a member of the United Arab States, a confederation with North Yemen.'),
(2, '1952 Egyptian Revolution', 'The 1952 Egyptian Revolution, the July 23 Revolution, or the well-known military coup d\'état of Free Officers, the military coup d\'état carried out by the Movement of Free Officers in Egypt on 23 July 1952.\r\n\r\nCemal Abdul Nasir was established and carried out by the Movement of Free Officers with the participation of some young officers and carried out the current government and carried out bloodless spirits. They have made Muhammad Najib, a prestigious general, a leading figure in action, in order to provide support to HaK. The original aim of the revolution was to overthrow the current government, but beyond that young officers with the view of Egyptian nationalism were aimed at the liquidation of the remains of colonialism, the abolition of British presence and influence in Egypt, and the realization of the independence of the country.'),
(3, 'Ramadan War or October War', 'The Battle of Ramadan, also known as the 1973 Arab-Israeli War, or the October War, was a war fought by the coalition of Arab states against Israel in October 6th-25th, 1973, led by Egypt and Syria. The conflict occurred mostly in Sinai and the Golan Heights and lands occupied by Israel since the 1967 Six Day War. Egyptian President Anwar Sadat also wanted to reopen the Suez Canal. Although the Israeli leaders can not be sure of this, they have not planned to destroy Israel in particular. The war began when the Arab League launched a joint surprise attack on Israeli positions in the Israeli occupied territories. The Egyptian and Syrian forces passed the ceasefire line to enter Sinai. Peninsula and Golan Heights. Both the United States and the Soviet Union launched a massive reintegration of their allies during the war and led to almost confrontation between these two nuclear superpowers.');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `writer` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `comment` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `title` varchar(16) CHARACTER SET latin1 NOT NULL,
  `link` varchar(32) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `title`, `link`) VALUES
(1, 'Home', 'Demo(English).php'),
(2, 'Articles', 'Demo(English).php#articles'),
(3, 'Gallery', 'Demo(English).php#gallery'),
(4, 'Contact', 'demo(english).php#footer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) CHARACTER SET latin1 NOT NULL,
  `email` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(64) CHARACTER SET latin1 NOT NULL,
  `permission` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `permission`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 1),
(2, 'khaled', 'khaled@gmail.com', '12345', 1),
(3, 'Redwan', 'redwan@gmail.com', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
