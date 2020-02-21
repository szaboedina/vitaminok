-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Feb 14. 09:30
-- Kiszolgáló verziója: 10.4.8-MariaDB
-- PHP verzió: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `szaboedina`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vitaminok`
--

CREATE TABLE `vitaminok` (
  `id` int(11) NOT NULL,
  `hagyomanyosNev` varchar(1000) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `tudomanyosNev` varchar(1000) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `termeszetesForrasok` varchar(1000) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `napiSzukseglet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `vitaminok`
--

INSERT INTO `vitaminok` (`id`, `hagyomanyosNev`, `tudomanyosNev`, `termeszetesForrasok`, `napiSzukseglet`) VALUES
(4, 'A vitamin', 'Retinol', 'sajtos-túrós sütemények, margarinféleségek, húsipari terméke, májkészítmények', 900),
(6, 'B1 vitamin', 'Tiamin', 'máj, élesztő, hántolatlan rizs, korpás búza, zabliszt, földimogyoró, sertéshús, hüvelyesek', 2),
(7, 'B2 vitamin', 'Riboflavin', ' tej, máj, tojás, élesztő, olajos magvak, hüvelyesek', 2);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `vitaminok`
--
ALTER TABLE `vitaminok`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `vitaminok`
--
ALTER TABLE `vitaminok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
