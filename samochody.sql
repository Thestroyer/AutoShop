-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Lis 2023, 15:19
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `samochody`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `marki`
--

CREATE TABLE `marki` (
  `id` int(11) NOT NULL,
  `marka` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `marki`
--

INSERT INTO `marki` (`id`, `marka`) VALUES
(1, 'Toyota'),
(2, 'Seat'),
(3, 'Audi'),
(4, 'Mercedes'),
(5, 'Volkswagen'),
(6, 'BMW'),
(7, 'Skoda'),
(8, 'Ford'),
(9, 'Fiat'),
(10, 'Peugeot'),
(11, 'Renault'),
(12, 'Honda'),
(13, 'Hyundai'),
(14, 'Kia'),
(15, 'Mazda'),
(16, 'Nissan');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `modele`
--

CREATE TABLE `modele` (
  `id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `modele`
--

INSERT INTO `modele` (`id`, `model`) VALUES
(1, 'A2'),
(2, 'Yaris'),
(3, 'M5'),
(4, 'Golf'),
(5, 'Ibiza'),
(6, 'Octavia'),
(7, 'Mustang'),
(8, '500'),
(9, '208'),
(10, 'Clio'),
(11, 'Civic'),
(12, 'Tucson'),
(13, 'Rio'),
(14, 'MX-5'),
(15, 'Micra');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `paliwa`
--

CREATE TABLE `paliwa` (
  `id` int(11) NOT NULL,
  `rodzaj_paliwa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `paliwa`
--

INSERT INTO `paliwa` (`id`, `rodzaj_paliwa`) VALUES
(1, 'benzyna'),
(2, 'diesel'),
(3, 'elektryczny'),
(4, 'hybryda'),
(5, 'benzyna+LPG');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pojazdy`
--

CREATE TABLE `pojazdy` (
  `id` int(11) NOT NULL,
  `marka` int(11) DEFAULT NULL,
  `model` int(11) DEFAULT NULL,
  `rok_produkcji` int(11) DEFAULT NULL,
  `pojemnosc` int(11) DEFAULT NULL,
  `przebieg` int(11) DEFAULT NULL,
  `paliwo` int(11) DEFAULT NULL,
  `moc` int(11) DEFAULT NULL,
  `skrzynia_biegow` int(11) DEFAULT NULL,
  `stan` int(11) DEFAULT NULL,
  `cena` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `pojazdy`
--

INSERT INTO `pojazdy` (`id`, `marka`, `model`, `rok_produkcji`, `pojemnosc`, `przebieg`, `paliwo`, `moc`, `skrzynia_biegow`, `stan`, `cena`) VALUES
(1, 1, 2, 2020, 1300, 15000, 1, 100, 2, 2, 50000),
(2, 2, 5, 2019, 1400, 30000, 2, 90, 1, 2, 45000),
(3, 3, 1, 2018, 2000, 45000, 5, 150, 2, 2, 65000),
(24, 7, 11, 2020, 1600, 20000, 1, 115, 2, 2, 60000),
(25, 8, 12, 2018, 5000, 30000, 2, 450, 1, 2, 200000),
(26, 9, 13, 2017, 1400, 50000, 1, 69, 2, 2, 35000),
(27, 10, 14, 2021, 1200, 10000, 1, 110, 2, 1, 70000),
(28, 11, 15, 2019, 1500, 30000, 2, 90, 1, 2, 45000);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skrzynie`
--

CREATE TABLE `skrzynie` (
  `id` int(11) NOT NULL,
  `rodzaj_skrzyni` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `skrzynie`
--

INSERT INTO `skrzynie` (`id`, `rodzaj_skrzyni`) VALUES
(1, 'automatyczna'),
(2, 'manualna');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stan`
--

CREATE TABLE `stan` (
  `id` int(11) NOT NULL,
  `stan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `stan`
--

INSERT INTO `stan` (`id`, `stan`) VALUES
(1, 'nowy'),
(2, 'używany');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `marki`
--
ALTER TABLE `marki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `paliwa`
--
ALTER TABLE `paliwa`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pojazdy`
--
ALTER TABLE `pojazdy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marka_pojazdy` (`marka`),
  ADD KEY `modele_pojazdy` (`model`),
  ADD KEY `paliwa_pojazdy` (`paliwo`),
  ADD KEY `skrzynie_pojazdy` (`skrzynia_biegow`),
  ADD KEY `stan_pojazdy` (`stan`);

--
-- Indeksy dla tabeli `skrzynie`
--
ALTER TABLE `skrzynie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `stan`
--
ALTER TABLE `stan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `marki`
--
ALTER TABLE `marki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `modele`
--
ALTER TABLE `modele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `paliwa`
--
ALTER TABLE `paliwa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `pojazdy`
--
ALTER TABLE `pojazdy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT dla tabeli `skrzynie`
--
ALTER TABLE `skrzynie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `stan`
--
ALTER TABLE `stan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `pojazdy`
--
ALTER TABLE `pojazdy`
  ADD CONSTRAINT `marka_pojazdy` FOREIGN KEY (`marka`) REFERENCES `marki` (`id`),
  ADD CONSTRAINT `modele_pojazdy` FOREIGN KEY (`model`) REFERENCES `modele` (`id`),
  ADD CONSTRAINT `paliwa_pojazdy` FOREIGN KEY (`paliwo`) REFERENCES `paliwa` (`id`),
  ADD CONSTRAINT `skrzynie_pojazdy` FOREIGN KEY (`skrzynia_biegow`) REFERENCES `skrzynie` (`id`),
  ADD CONSTRAINT `stan_pojazdy` FOREIGN KEY (`stan`) REFERENCES `stan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
