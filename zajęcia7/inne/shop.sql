-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Kwi 2020, 21:40
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `voivodeshipid` int(10) UNSIGNED NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `city`
--

INSERT INTO `city` (`id`, `voivodeshipid`, `city`) VALUES
(1, 1, 'Poznań'),
(2, 2, 'Gniezno');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `cityid` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `cityid`, `name`, `surname`, `birthday`) VALUES
(1, 1, 'Janusz', 'Kowalski', '2020-04-05'),
(2, 2, 'Anna', 'Nowak', '2019-10-07'),
(3, 1, 'Paweł', 'Nowak', '2020-04-06'),
(7, 2, 'Janusz', 'Nowak', '2020-04-23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `voivodeship`
--

CREATE TABLE `voivodeship` (
  `id` int(10) UNSIGNED NOT NULL,
  `voivodeship` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `voivodeship`
--

INSERT INTO `voivodeship` (`id`, `voivodeship`) VALUES
(1, 'Wielkopolskie'),
(2, 'Pomorskie');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voivodeshipid` (`voivodeshipid`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cityid` (`cityid`);

--
-- Indeksy dla tabeli `voivodeship`
--
ALTER TABLE `voivodeship`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `voivodeship`
--
ALTER TABLE `voivodeship`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`voivodeshipid`) REFERENCES `voivodeship` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
