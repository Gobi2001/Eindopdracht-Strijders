-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 jun 2019 om 23:28
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strijders`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aanbiedingen`
--

CREATE TABLE `aanbiedingen` (
  `id` int(100) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `prijs` int(255) NOT NULL,
  `plaatje` text NOT NULL,
  `beschrijving` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `aanbiedingen`
--

INSERT INTO `aanbiedingen` (`id`, `naam`, `prijs`, `plaatje`, `beschrijving`) VALUES
(1, 'Gazelle CityZen Speed', 3999, '', 'Gazelle fiets'),
(2, 'Gazelle Orange C7+ HMB', 2549, '', 'Nog een gazelle fiets'),
(3, 'Rockrider mtb', 6991, '', 'Mountainbike fiets'),
(4, 'Spirit Regular Herenfiets', 3999, '', 'Een spirit regular herenfiets'),
(5, 'Riverside Hybridfiets', 5140, '', 'een riverside Hybridfiets'),
(6, '24-inch vouwfiets', 1995, '', 'een vouwfiets');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `speciale_aanbiedingen`
--

CREATE TABLE `speciale_aanbiedingen` (
  `id` int(200) NOT NULL,
  `plaatje` text NOT NULL,
  `naam` varchar(255) NOT NULL,
  `oude_prijs` int(255) NOT NULL,
  `nu_prijs` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `speciale_aanbiedingen`
--

INSERT INTO `speciale_aanbiedingen` (`id`, `plaatje`, `naam`, `oude_prijs`, `nu_prijs`) VALUES
(1, '', 'Gazelle CityZen Speed', 5000, 3999),
(2, '', 'Gazelle Orange C7+ HMB', 3500, 2549),
(3, '', 'Rockrider mtb', 7500, 6991),
(4, '', 'Spirit Regular Herenfiets', 6000, 3999),
(5, '', 'Riverside Hybridfiets', 6850, 5140),
(6, '', '24-inch vouwfiets', 3050, 1995);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `aanbiedingen`
--
ALTER TABLE `aanbiedingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `speciale_aanbiedingen`
--
ALTER TABLE `speciale_aanbiedingen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `aanbiedingen`
--
ALTER TABLE `aanbiedingen`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `speciale_aanbiedingen`
--
ALTER TABLE `speciale_aanbiedingen`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
