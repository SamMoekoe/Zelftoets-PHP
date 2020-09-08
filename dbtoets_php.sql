-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 08 sep 2020 om 09:43
-- Serverversie: 8.0.18
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtoets_php`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `birthdays`
--

CREATE TABLE `birthdays` (
  `id` int(11) NOT NULL,
  `Person` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Day` int(11) NOT NULL,
  `Month` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `More info` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `birthdays`
--

INSERT INTO `birthdays` (`id`, `Person`, `Day`, `Month`, `Year`, `More info`) VALUES
(3, 'Gert', 14, 1, 1999, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed blandit libero. Quisque sit amet ligula urna. Cras consectetur commodo dictum. Vivamus interdum, magna sit amet scelerisque dictum, velit velit tempus orci, sodales tempus sapien diam id orci. Nullam finibus rutrum ligula, et dictum ex. Nunc efficitur ornare augue nec ullamcorper. Nullam id tortor purus. Etiam at maximus lacus. Ut at semper magna. Integer vestibulum, elit id consectetur consectetur, est purus consequat massa, ac vehicula felis magna sed felis. Sed eget dictum dui, eget maximus tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec.'),
(5, 'Peter', 13, 2, 1999, ''),
(6, 'Jan', 13, 1, 1999, ''),
(7, 'Henk', 14, 1, 2001, '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `birthdays`
--
ALTER TABLE `birthdays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `birthdays`
--
ALTER TABLE `birthdays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
