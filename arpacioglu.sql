-- phpMyAdmin SQL Dump
-- version 3.4.3.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Oca 2014, 23:44:23
-- Sunucu sürümü: 5.5.15
-- PHP Sürümü: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `arpacioglu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `eposta`
--

CREATE TABLE IF NOT EXISTS `eposta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) NOT NULL,
  `eposta` varchar(250) NOT NULL,
  `masaj` varchar(2500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `eposta`
--

INSERT INTO `eposta` (`id`, `adi`, `eposta`,`masaj`) VALUES
(1, 'yavuz', 'yavuz@infra.net.tr'),
(2, 'nagihan', 'nagihan@infra.net.tr'),
(3, 'nagihan', 'nagihan@infra.net.tr'),
(4, 'Yavuz Selim MALKOC', 'yavuz@infra.net.tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `adi` varchar(1000) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `acıklama` text COLLATE utf8_turkish_ci NOT NULL,
  `imgurl` text COLLATE utf8_turkish_ci NOT NULL,
  `aktif` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`id`, `adi`, `acıklama`, `imgurl`, `aktif`) VALUES
(1, 'KARTONPİYER-ALÇI-BOYA', 'ahmet beyin ofisinden', 'kartonpiyer.jpg', 1),
(2, 'ASMA TAVAN-PARKE-BOYA', 'YER: REİNA', 'reina.jpg', 1),
(3, 'seramik', 'Murat Kablo\r\n', 'seramik.jpg', 1),
(4, 'STROPİYER', 'ALTIN emlak ofisi', 'stropiyer.jpg', 1);

-- --------------------------------------------------------
--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE IF NOT EXISTS `haberler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `baslik` text NOT NULL,
  `icerik` varchar(9000) NOT NULL,
  `tarih` date NOT NULL,
  `onay` int(2) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `baslik`, `icerik`, `tarih`, `onay`) VALUES
(1, 'ilk Haber', 'web sitemiz yayına hazırlanmaktadır..', '2013-12-31', 1),
(2, 'Canım Babama :) ', 'bu site Hanife Özdemir tarafından babasına ithafen hazırlanmıştır!', '2013-12-30', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(100) DEFAULT NULL,
  `icerik` text CHARACTER SET utf32 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `baslik`, `icerik`) VALUES
(1, 'SALİM ÖZDEMİR', 'Senelerin vermiş olduğu tecrübe ile kalite ve güven anlayışımızdan ödün vermeden en iyi hizmeti sunmaya devam ediyoruz.. ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE IF NOT EXISTS `referanslar` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `adi` varchar(1000) NOT NULL,
  `aciklama` text NOT NULL,
  `imgurl` text NOT NULL,
  `aktif` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`id`, `adi`, `aciklama`, `imgurl`, `aktif`) VALUES
(1, 'KYK Yapı Kimyasalları', 'KYK, Eskişehir Merkez olmak üzere, Samsun, Adana ve Diyarbakır üretim tesislerinde yıllık 600 bin ton üretim kapasitesine sahiptir. Türkiye genelinde İstanbul, Bursa, İzmir, Antalya, Ankara, Samsun, Eskişehir Merkez, Adana ve Diyarbakır Bölge Müdürlükleri ile hizmet vererek, dağıtım, perakende ve uygulama yapan 200 ana bayi, 1.000 tali bayisi ile ürünlerinin yurt genelinde penetrasyonunu sağlamaktadır.', 'kyk.jpg', 1),
(3, 'POLİSAN ', 'Gülen Boya :) ', 'polisan.jpg', 1),
(4, 'KALE', 'Dantelin modern yorumu..', 'kale.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
