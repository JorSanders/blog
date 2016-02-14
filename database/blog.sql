-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 14 feb 2016 om 19:15
-- Serverversie: 5.6.12
-- PHP-versie: 5.5.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s1096570_blog`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `ID` int(11) NOT NULL,
  `titel` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `op` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `message`
--

INSERT INTO `message` (`ID`, `titel`, `message`, `op`) VALUES
(2, 'Forever', '<p>Forever we remain oblivious to the future,</p>\r\n<p>lost to the past and enduring our torture.</p>\r\n<p>Forever we take chances to settle our scores,</p>\r\n<p>losing some battles and winning some wars.</p>', 14),
(10, 'Count', '<h1>lets count</h1>\r\n<ol>\r\n<li>one</li>\r\n<li>two</li>\r\n<li>three</li>\r\n<li>four</li>\r\n</ol>\r\n<p><span style="text-decoration: underline;">wow many impressive&nbsp;</span></p>', 14),
(11, 'jor', '<p>jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor jor&nbsp;</p>', 15),
(13, 'Admin loggin', '<p>&nbsp;</p>\r\n<p>To log in as admin,</p>\r\n<p>use username admin and password admin.</p>\r\n<p>as admin you can edit/delete all messages</p>', 16);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`, `admin`, `email`) VALUES
(14, 'aa', 'aa', '4124bc0a9335c27f086f24ba207a4912', 0, ''),
(15, 'jor', 'jor', '9b1e2f5b48647011e1c88ef057f236d6', 0, 's1096570@student.windesheim.nl'),
(16, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `op` (`op`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`op`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`op`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
