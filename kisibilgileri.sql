-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Şub 2020, 17:34:44
-- Sunucu sürümü: 10.4.8-MariaDB
-- PHP Sürümü: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kisi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisibilgileri`
--

CREATE TABLE `kisibilgileri` (
  `ID` int(11) NOT NULL,
  `kisiAdi` varchar(255) NOT NULL,
  `kisiSoyadi` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kisibilgileri`
--

INSERT INTO `kisibilgileri` (`ID`, `kisiAdi`, `kisiSoyadi`, `mail`, `sifre`) VALUES
(1, 'a', 'b', 'ab@gmail.com', '123456');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kisibilgileri`
--
ALTER TABLE `kisibilgileri`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kisibilgileri`
--
ALTER TABLE `kisibilgileri`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
