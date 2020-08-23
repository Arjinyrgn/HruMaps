-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 23 Ağu 2020, 16:44:16
-- Sunucu sürümü: 5.7.24
-- PHP Sürümü: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hrumap`
--
CREATE DATABASE IF NOT EXISTS `hrumap` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `hrumap`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hrumaps`
--

DROP TABLE IF EXISTS `hrumaps`;
CREATE TABLE IF NOT EXISTS `hrumaps` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `lat` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `lng` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `yerleske_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `tel` int(12) NOT NULL,
  `url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `aktiflik` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`h_id`),
  KEY `yerleske_id` (`yerleske_id`,`kategori_id`),
  KEY `kategori_id` (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hrumaps`
--

INSERT INTO `hrumaps` (`h_id`, `ad`, `adres`, `lat`, `lng`, `yerleske_id`, `kategori_id`, `tel`, `url`, `aktiflik`) VALUES
(1, 'Eğitim fakültesi', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye', '37.167                ', '38.9988', 3, 1, 3183466, 'http://egitim.harran.edu.tr', 0),
(2, 'Fen edebiyat Fakültesi', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye', '37.1684   ', '39.001', 3, 1, 3183011, 'http://fef.harran.edu.tr', 0),
(3, 'Güzel sanatlar Fakültesi', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye', '37.1681', '39.0011', 3, 1, 3183000, 'http://gsf.harran.edu.tr', 1),
(4, 'İktisadi ve idari Bilimler Fakültesi', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye\r\n', '37.167', '38.9957', 3, 1, 3183000, 'http://iibf.harran.edu.tr', 1),
(5, 'İlahiyat Fakültesi', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye\r\n', '37.1684', '38.9961', 3, 1, 3183453, 'http://ilahiyat.harran.edu.tr', 1),
(6, 'Makina Mühendisliği', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye\r\n', '37.172325', '39.001728', 3, 1, 3183775, 'http://web.harran.edu.tr/muhendis/', 1),
(7, 'Sağlık Bilimleri Fakültesi', 'Osmanbey Yerleşkesi, Merkezi Derslik, Kat:2 / Şanlıurfa', '37.1683', '38.999', 3, 1, 3183201, 'http://sbf.harran.edu.tr', 1),
(8, 'Tıp Fakültesi', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye\r\n', '37.1694', '38.9936', 3, 1, 0, 'http://tip.harran.edu.tr', 1),
(9, 'Veteriner Fakültesi', 'Şanlıurfa-Akçakale Karayolu Üzeri 5.Km Şanlıurfa/Türkiye', '37.1188', '38.819', 1, 1, 3183859, 'http://veteriner.harran.edu.tr', 1),
(10, 'ziraat Fakültesi', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye', '37.1705', '39.002', 3, 1, 3183859, 'http://ziraat.harran.edu.tr', 1),
(11, 'Diş Hekimliği Fakültesi', 'Harran Üniversitesi Yenişehir Yerleşkesi, 63300 Şanlıurfa', '37.176373', '38.800517', 2, 1, 3183000, 'http://dishekimligi.harran.edu.tr', 1),
(12, 'Turizm Ve Otel İşletmeciliği Yüksekokulu', 'Merkezi Derslikler Binası 3. Kat\r\nMardin Yolu 22 Km. Osmanbey Kampüsü 63200 \r\nŞanlıurfa/ TÜRKİYE', '37.117579', '38.818013', 3, 3, 3183000, 'http://toiyo.harran.edu.tr', 1),
(13, 'Beden Eğitimi Ve Spor Yüksekokulu', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye', '37.1684', '38.9944', 3, 3, 3183489, 'http://besyo.harran.edu.tr', 1),
(14, 'Viranşehir Sağlık Yüksekokulu', 'Karataş Mahallesi, Unnamed Road, 63700 Viranşehir/Şanlıurfa', '37.2233', '39.7449', 4, 3, 3183000, 'http://saglikyo.harran.edu.tr/tr/', 1),
(15, 'Yabancı Diller Yüksekokulu', 'Harran Üniversitesi Yenişehir Yerleşkesi, 63300 Şanlıurfa', '37.176221', '38.800426', 2, 3, 3183000, 'http://ydyo.harran.edu.tr', 1),
(16, 'Devlet Konservatuarı', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye', '37.1683', '39.0014', 3, 3, 3183000, 'http://konservatuvar.harran.edu.tr', 1),
(17, 'Fen Bilimleri Enstitüsü', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye', '0', '0', 3, 2, 3183000, 'http://fenbilens.harran.edu.tr', 1),
(18, 'Sosyal Bilimler Enstitüsü', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye', '0', '0', 3, 2, 3183000, 'http://sosyalbilens.harran.edu.tr', 1),
(19, 'Sağlık Bilimleri Enstitüsü', 'Şanlıurfa-Mardin Karayolu Üzeri 18.Km Şanlıurfa/Türkiye', '0', '0', 3, 2, 3183000, 'http://saglikbilens.harran.edu.tr', 1),
(20, 'Akçakale Meslek Yüksekokulu', 'Fatih Sultan Mehmet Mahallesi, 63500 Akçakale/Şanlıurfa', '36.7209', '38.9463', 4, 4, 3183000, 'http://akcakale.harran.edu.tr', 1),
(21, 'Birecik Meslek Yüksekokulu', 'Karşıyaka Mah.\r\nProf.Dr. İbrahim Halil MUTLU Cad. \r\nBirecik / Şanlıurfa', '37.0315', '37.9824', 4, 4, 3183000, 'http://birecik.harran.edu.tr', 1),
(22, 'Bozova Meslek Yüksekokulu', 'Yavuz Selim Mahallesi, 63850 Bozova/Şanlıurfa', '37.3593', '38.5248', 4, 4, 3183000, 'http://bozova.harran.edu.tr', 1),
(23, 'Ceylanpınar Tarım Meslek Yüksekokulu ', 'ceylanpınar/Ş.urfa', '0', '0', 4, 4, 3183000, 'http://ceylanpinar.harran.edu.tr', 1),
(24, 'Hilvan Meslek Yüksekokulu', 'Bahçelievler Mahallesi, 63900 Hilvan/Şanlıurfa', '37.5919', '38.965', 4, 4, 3183249, 'http://hilvan.harran.edu.tr', 1),
(25, 'Sağlık Hizmetleri Meslek Yüksekokulu', 'Harran Üniversitesi Yenişehir Yerleşkesi, 63300 Şanlıurfa', '37.175288', '38.800954', 2, 4, 3183000, 'http://shmyo.harran.edu.tr', 1),
(26, 'Sosyal Bilimler Meslek Yüksekokulu', 'Şanlıurfa-Akçakale Karayolu Üzeri 5.Km Şanlıurfa/Türkiye', '37.119923', '38.821790', 1, 4, 3183995, 'http://sosbilmyo.harran.edu.tr', 1),
(27, 'Siverek Meslek Yüksekokulu', 'Kale Mahallesi, Üniversite Cad., 63600 Siverek/Şanlıurfa', '37.7566', '39.3174', 4, 4, 3183252, 'http://siverek.harran.edu.tr', 1),
(28, 'Suruç Meslek Yüksekokulu', 'Yıldırım Mahallesi, Hicret Sk. No:1, 63800 Suruç/Şanlıurfa', '36.9679', '38.4183', 4, 4, 3183233, 'http://suruc.harran.edu.tr', 1),
(29, 'Teknik Bilimler Meslek Yüksekokulu', 'Şanlıurfa-Akçakale Karayolu Üzeri 5.Km Şanlıurfa/Türkiye', '37.117173', '38.821806', 1, 4, 3183861, 'http://tekbilmyo.harran.edu.tr', 1),
(30, 'Viranşehir Meslek Yüksekokulu', 'Ceylanpınar yolu 2.Km.\r\nViranşehir Devlet Hastanesi yanı.', '37.2358', '39.7497', 4, 4, 3183000, 'http://viransehir.harran.edu.tr', 1),
(31, 'Halfeti Meslek Yüksekokulu', 'Fırat Mah. Nergiz Sok. Halk Eğitim Merkezi 3. Kat\r\nHalfeti/ŞANLIURFA', '37.221056', '37.945048', 4, 4, 3183170, 'http://halfeti.harran.edu.tr/tr/', 1),
(32, 'Harran Üniversitesi Yaşam Merkezi', 'Hamidiye Mahallesi, Harran Üniversitesi, Merkez, 63300 Haliliye/Şanlıurfa', '37.168327', '38.997869', 3, 6, 3183000, '', 1),
(33, 'Harran Üniversitesi Mühendislik Kantini', 'Gülveren Mahallesi, 63290 Haliliye/Şanlıurfa', '37.172', '39.0023', 3, 6, 3183000, '', 1),
(34, 'Yüzme Havuzu Ve Fitness Salonu', 'Gülveren Mahallesi, 63290 Haliliye/Şanlıurfa', '37.1694', '38.9936', 3, 5, 3183000, '', 1),
(35, 'Kampüs Kırtasiye', 'Hamidiye Mahallesi, Harran Üniversitesi, Merkez, 63300 Haliliye/Şanlıurfa', '37.168327', '38.997869', 3, 7, 0, '', 1),
(36, 'Harran Üniversitesi Araştırma Hastanesi', 'Gülveren, Mardin yolu üzeri 20 km Osmanbey kampüsü, 63300 Haliliye/Şanlıurfa', '37.168811', '38.991227', 3, 8, 3444444, '', 1),
(40, 'gap yenev', 'haran üniversitesi', '23.11', '21.54', 3, 1, 3183001, '', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE IF NOT EXISTS `kategoriler` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `aktiflik` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_ad`, `aktiflik`) VALUES
(1, 'Fakülteler', 1),
(2, 'Enstitüler', 1),
(3, 'Yüksek Okullar', 1),
(4, 'Meslek Yüksek Okulları', 1),
(5, 'Havuzlar Ve Spor Salonları', 1),
(6, 'Kantinler', 1),
(7, 'Kırtasiyeler', 1),
(8, 'Hastaneler', 1),
(11, 'Marketler', 0),
(12, 'Marketler', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `k_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `aktiflik` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`k_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`k_id`, `email`, `sifre`, `tarih`, `aktiflik`) VALUES
(1, 'admin@hrumap.com', 'admin1234', '2019-07-04 08:37:02', 1),
(2, 'admin1@hrumap.com', '12345678', '2019-07-05 11:23:49', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yerleskeler`
--

DROP TABLE IF EXISTS `yerleskeler`;
CREATE TABLE IF NOT EXISTS `yerleskeler` (
  `yerleske_id` int(11) NOT NULL AUTO_INCREMENT,
  `yerleske_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `aktiflik` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`yerleske_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yerleskeler`
--

INSERT INTO `yerleskeler` (`yerleske_id`, `yerleske_ad`, `aktiflik`) VALUES
(1, 'Eyyübiye Kampüsü', 1),
(2, 'Yenişehir Kampüsü', 1),
(3, 'Osmanbey kampüsü', 1),
(4, 'İlçeler', 1);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `hrumaps`
--
ALTER TABLE `hrumaps`
  ADD CONSTRAINT `hrumaps_ibfk_1` FOREIGN KEY (`yerleske_id`) REFERENCES `yerleskeler` (`yerleske_id`),
  ADD CONSTRAINT `hrumaps_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `kategoriler` (`kategori_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
