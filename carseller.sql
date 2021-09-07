-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Ápr 13. 17:50
-- Kiszolgáló verziója: 10.4.11-MariaDB
-- PHP verzió: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `carseller`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `account`
--

CREATE TABLE `account` (
  `accountID` int(11) NOT NULL,
  `LastName` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `FirstName` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Password` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `felhasznalonev` varchar(20) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `account`
--

INSERT INTO `account` (`accountID`, `LastName`, `FirstName`, `Email`, `Password`, `felhasznalonev`) VALUES
(1, 'Nagy', 'Karoly', 'nkar12@gmail.com', 'nkar120', 'nkar12'),
(2, 'Kiss', 'Balázs', 'kbalazs30@gmail.com', 'kbalazs300', 'kbalazs30'),
(3, 'Papp', 'Péter', 'ppeter241@gmail.com', 'ppeter99', 'ppeter990'),
(4, 'Varga', 'Katalin', 'vkata1D@gmail.com', 'vkata100', 'vkata10'),
(5, 'Nagy', 'Vivien', 'vivinagy@gmail.com', 'nvivien010', 'nvivien01'),
(6, 'Csik', 'Lajos', 'clajos34@gmail.com', 'clajos34', 'clajos34'),
(7, 'Kovács', 'Fanni', 'kfanni123@gmail.com', 'kfanni1230', 'kfanni123'),
(8, 'Horváth', 'Tamás', 'htamas@gmail.com', 'htamas910', 'htamas91'),
(9, 'Ferenczi', 'Dorina', 'fdorina210@gmail.com', 'fdorina2100', 'fdorina21'),
(10, 'Fülöp', 'Béla', 'fbel91@gmail.com', 'fbel910', 'fbel91'),
(11, 'teszt', 'teszt', 'teszt@gmail.com', 'tesztr', 'teszt');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `carmarket`
--

CREATE TABLE `carmarket` (
  `id` int(11) NOT NULL,
  `marka_tipus` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `kep` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `cim` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `szoveg` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `link` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `carmarket`
--

INSERT INTO `carmarket` (`id`, `marka_tipus`, `kep`, `cim`, `szoveg`, `link`, `ar`) VALUES
(1, 'audi', 'audi-a3-sportback-35-tfsi-s-tronic.jpg', 'Audia3', 'tesztszoveg', '#', 4600000),
(2, 'bmw', '2020-bmw-i4-render.jpg', 'BMW i4', 'tesztszoveg2', '#', 3250000),
(3, 'ford', 'fiestaface.jpg', 'Ford fiesta', 'tesztszoveg3', '#', 6780000),
(4, 'audi', 'lfzw_A20200424810_zCXHmwHNmHyt3PLS.jpg', 'Q2 Advanced 35 TFSI S tronic', 'tesztszoveg', '#', 5980000),
(5, 'bmw', 'bmw_x3_2017_20d_001-700x467.jpg', 'BMW x3', 'tesztszoveg', '#', 2410000),
(6, 'ford', '2021-Ford-Focus-Euro-spec-1.jpg', 'Ford Focus', 'tesztszoveg', '#', 4750000);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `profile`
--

CREATE TABLE `profile` (
  `profilnev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `varos` varchar(30) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `iranyitoszam` varchar(4) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `lakcim` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `telefonszam` varchar(12) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `profile`
--

INSERT INTO `profile` (`profilnev`, `varos`, `iranyitoszam`, `lakcim`, `telefonszam`) VALUES
('clajos34', 'kiskunhalas', '6400', 'Nagy Béla u 52', '06 70 428 39'),
('nkar12', 'Sajószöged', '3599', 'Hortobács u 13', '06 70 245 24'),
('nkar12', 'Sajószöged', '3599', 'Hortobágy u 13', '06 70 245 24'),
('kbalazs30', 'Fertőhomok', '9492', 'Fertő u 13', '06 70 245 24'),
('Őcsény', 'Őcsény', '7143', 'Fertő u 13', '06 70 741 25'),
('vkata10', 'Pécs', '7630', 'Fertő u 13', '06 70 172 82'),
('kfanni123', 'Kaposvár', '7400', 'Fagyöngy u 13', '06 70 172 82'),
('fdorina21', 'Szolnok', '5000', 'Lepsény u 20', '06 20 182 94'),
('fbel91', 'Szeged', '6700', 'Kisfüzes u 66', '06 30 672 41'),
('kfanni123', 'Békéscsaba', '5600', 'Nagydobos u 84', '06 70 142 82'),
('htamas91', 'Orosháza', '5900', 'Mernye u 91', '06 30 112 41'),
('clajos34', 'Bélapátfalva', '3346', 'Pomáz u 28', '06 20 179 41'),
('vkata10', 'Miskolc', '3500', 'Füredi u 19', '06 70 472 15'),
('ppeter990', 'Orosháza', '5900', 'Fagyöngy u 18', '06 40 472 15'),
('kbalazs30', 'Kaposvár', '7400', 'Lápfő u 27', '06 30 212 31'),
('nkar12', 'Miskolc', '3500', 'Semjén u 45', '06 20 205 61'),
('fdorina21', 'Békéscsaba', '5600', 'Teskánd u 75', '06 70 375 95');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `support`
--

CREATE TABLE `support` (
  `supportID` int(11) NOT NULL,
  `fhnev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `targy` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `hiba_szoveg` varchar(1024) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `support`
--

INSERT INTO `support` (`supportID`, `fhnev`, `targy`, `hiba_szoveg`) VALUES
(1, 'nsand12', 'error', 'Valami hiba történt'),
(2, 'nsand12', 'error', 'Valami hiba történt'),
(3, 'nsand12', 'error', 'Valami hiba történt'),
(4, 'clajos33', 'error', 'Ez a tesztszöveg helye.'),
(5, 'clajos33', 'error', 'Ez a tesztszöveg helye.'),
(6, 'clajos33', 'Hogyan tudom visszavonni a lefoglalást?', 'Hibás lefoglalás történt!'),
(7, 'clajos33', 'error', 'Ez a tesztszöveg helye.'),
(8, 'clajos33', 'Hogyan tudom visszavonni a lefoglalást?', 'Hibás lefoglalás történt!'),
(9, 'clajos33', 'error', 'Ez a tesztszöveg helye.sa'),
(10, 'clajos33', 'Hogyan tudom visszavonni a lefoglalást?', 'Hibás lefoglalás történt!'),
(11, 'clajos33', 'error', 'Ez a tesztszöveg helye.asd'),
(12, 'clajos33', 'Nem elérhető a weboldal.', 'Hibás lefoglalás történt!'),
(13, 'clajos33', 'error', 'error'),
(14, 'kpeter32', 'error', 'Ez a tesztszöveg helye.'),
(15, 'kpeter32', 'error', 'Ez a tesztszöveg helye.'),
(16, 'kpeter32', 'error', 'Ez a tesztszöveg helye.'),
(17, 'kpeter32', 'Nem elérhető a weboldal.', 'Ez a tesztszöveg helye.'),
(18, 'kpeter32', 'Nem tölti be a vásárlási oldalt.', 'Ez a tesztszöveg helye.'),
(19, 'kpeter32', 'Nem elérhető a weboldal.', 'Ez a tesztszöveg helye.'),
(20, 'clajos33', 'Nem lehet lefoglalni az általam kiválasztott járművet!', 'Ez a tesztszöveg helye.'),
(21, 'clajos33', 'Nem tölti be a vásárlási oldalt.', 'Ez a tesztszöveg helye.'),
(22, 'clajos34', 'Nem tölti be a vásárlási oldalt.', 'Valami oknál fogva megszakadt a vásárlás és nem tölti be a weboldalt!'),
(23, 'nvivien01', 'Nem tölti be a vásárlási oldalt.', 'Valami oknál fogva teljesen üres a vásárlási oldal. Akármelyik kategóriára szűkítem le , nem változik semmit. Többször próbáltam frissíteni ,de ez sem segített rajta.');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountID`);

--
-- A tábla indexei `carmarket`
--
ALTER TABLE `carmarket`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`supportID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `account`
--
ALTER TABLE `account`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT a táblához `carmarket`
--
ALTER TABLE `carmarket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `support`
--
ALTER TABLE `support`
  MODIFY `supportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
