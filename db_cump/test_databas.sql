-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 16 maj 2018 kl 13:54
-- Serverversion: 10.1.31-MariaDB
-- PHP-version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `test databas`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `blogposts`
--

CREATE TABLE `blogposts` (
  `id` int(11) NOT NULL,
  `post` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `blogposts`
--

INSERT INTO `blogposts` (`id`, `post`, `author_id`, `title`) VALUES
(1344, 'BLOG POST\r\nSQL-Injection Ã¤r kod-injektion som kan fÃ¶rstÃ¶ra databaser, det Ã¤r det vanligaste sÃ¤ttet att hacka datorprogram som jobbar mot en databas. Du kan gÃ¶ra detta genom att Ã¤ndra url:en, eller skriva sql kod i formulÃ¤r. 	\r\nServer/klient arkitektur, nÃ¤r man besÃ¶ker en webbplats http fÃ¶rfrÃ¥gan till servern, apache tar emot den och hÃ¤mtar .php filen och omvandlar det till html sen skickas det tillbaka det till webblÃ¤saren.\r\nXSS eller Cross Site Scripting Ã¤r nÃ¤r du kan lÃ¤gga in skadlig kod i sidor fÃ¶r att till exempel stjÃ¤la cookies frÃ¥n anvÃ¤ndare pÃ¥ sidan som ger dig tillgÃ¥ng till deras uppgifter som anvÃ¤ndarnamn och lÃ¶senord.\r\nBroken Access Control Ã¤r nÃ¤r du tar dig runt spÃ¤rrar pÃ¥ sidor genom att Ã¤ndra url:en fÃ¶r en sida. \r\nBroken Authenication Ã¤r nÃ¤r du inte kan identifiera vem en anvÃ¤ndare Ã¤r grund av dÃ¥ligt haschade lÃ¶senord, HTTP istÃ¤llet fÃ¶r HTTPs eller att anvÃ¤ndare har allmÃ¤nt kassa lÃ¶senord sÃ¥ att en treÃ¥ring kan bruteforcea skiten.\r\n', 1, 'boi');

-- --------------------------------------------------------

--
-- Tabellstruktur `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment`, `author_id`) VALUES
(1240, 1310, 'dsada', 1),
(1241, 1310, 'dsada', 1),
(1242, 1310, 'dddsa', 1),
(1243, 1310, '', 1),
(1244, 1310, '', 1),
(1245, 1310, 'dsa', 1),
(1246, 1310, '', 1),
(1247, 1310, 'sda', 1),
(1248, 1310, '', 1),
(1249, 1310, 'das', 1),
(1250, 1310, '', 1),
(1251, 0, '', 1),
(1252, 1310, 'dsa', 1),
(1253, 1310, 'dsa', 1),
(1254, 1310, '', 1),
(1255, 1310, '', 1),
(1256, 1310, 'asdas', 1),
(1257, 1311, 'hej fint inlÃ¤gg', 1),
(1258, 1311, 'hohoh', 1),
(1259, 1315, 'nigga', 1),
(1260, 1315, '', 1),
(1261, 1315, 'h', 1),
(1262, 1315, 'h', 1),
(1263, 1315, 'h', 1),
(1264, 1315, 'h', 1),
(1265, 1315, 'h', 1),
(1266, 1316, 'hÃ¥ller med DUNDER BROR', 1),
(1267, 1317, 'dasdsa', 1),
(1268, 1317, '', 1),
(1269, 1317, '', 1),
(1270, 1318, '', 1),
(1271, 1318, '', 1),
(1272, 1318, '', 1),
(1273, 1318, '', 1),
(1274, 1318, '', 1),
(1275, 1318, 'd', 1),
(1276, 1318, 'dsa', 0),
(1277, 1318, 'ads', 1243),
(1278, 1318, 'ads', 1243),
(1279, 1318, '', 1243),
(1280, 1321, 'Hejsan', 1243),
(1281, 1321, 'tja', 1244),
(1282, 1329, 'itne nigger', 1243),
(1283, 1330, 'das', 1243),
(1284, 1332, '', 1243),
(1285, 1332, '', 1243),
(1286, 1332, '', 1243),
(1287, 1332, '', 1243),
(1288, 1332, '', 1243),
(1289, 1332, '', 1243),
(1290, 1332, '', 1243),
(1291, 1332, '', 1243),
(1292, 1332, '', 1243),
(1293, 1332, '', 1243),
(1294, 1332, '', 1243),
(1295, 1332, '', 1243),
(1296, 1332, '', 1243);

-- --------------------------------------------------------

--
-- Tabellstruktur `uploads`
--

CREATE TABLE `uploads` (
  `blogpost_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `uploads`
--

INSERT INTO `uploads` (`blogpost_id`, `path`) VALUES
(1342, './Uploads/15263744189252c05b-bb6b-4d0a-8102-2c169cfbed83.jpg');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1240, 'root', 'r');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`path`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1345;

--
-- AUTO_INCREMENT för tabell `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1297;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1241;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
