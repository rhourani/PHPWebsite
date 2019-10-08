-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 05:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtektr`
--

-- --------------------------------------------------------

--
-- Table structure for table `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullaniciAdi` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `parola` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `izin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullaniciAdi`, `email`, `parola`, `izin`) VALUES
(1, 'admin', '', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `makaleler`
--

CREATE TABLE `makaleler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(1000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `makaleler`
--

INSERT INTO `makaleler` (`id`, `baslik`, `icerik`) VALUES
(1, 'Birleşik Arap Cumhuriyeti', 'Birleşik Arap Cumhuriyeti, Mısır ve Suriye arasında 1 Şubat 1958\'de ilan edilen ve her iki ülkedeki plebisitlerle (referandum) onaylanan siyasi birleşme sonucu kurulan devlet. Başkanı Cemal Abdül Nasır\'dı. Bir askerî darbenin ardından Suriye\'nin Mısır\'dan bağımsızlığını ilan etmesiyle, 28 Eylül 1961\'de son buldu. Birliğin dağılmasına karşın Mısır, Birleşik Arap Cumhuriyeti adını 2 Eylül 1971\'e değin korudu. O tarihte Mısır Arap Cumhuriyeti adını aldı. Birliğin ilk yıllarında (1958–1961), Kuzey Yemen ile birlikte, bir konfederasyon olan, Birleşik Arap Devletleri üyesiydi.'),
(2, '1952 Mısır Devrimi', '1952 Mısır Devrimi, 23 Temmuz Devrimi veya bilinen adıyla Hür Subaylar Darbesi, 23 Temmuz 1952 tarihinde Mısır\'da Hür Subaylar Hareketi tarafından gerçekleştirilen askeri darbe.\n\nCemal Abdül Nasır öncülüğünde kurulmuş ve bazı genç subayların katılımıyla büyümüş Hür Subaylar Hareketi\'nin gerçekleştirdiği ve mevcut hükumeti devirdiği ve kan dökmeden gerçekleştirdiği askeri darbedir. Halktan da destek sağlamak için prestijli bir general olan Muhammed Necib\'i hareketin göstermelik olarak liderliğine getirmişlerdir. Devrimin başlangıçtaki amacı mevut hükumeti devirmekti ancak bunun ötesinde Mısır milliyetçiliği görüşüne sahip genç subaylar sömürgecilik kalıntılarının tasfiyesini, Mısır\'daki İngiliz varlığına ve nüfuzuna son verilmesini ve ülkenin bağımsızlığın gerçekten sağlanmasını amaçlanmaktaydı.'),
(3, 'Ramazan Savaşı veya Ekim Savaşı', '1973 Arap-İsrail Savaşı olarak da bilinen Ramazan Savaşı ya da Ekim Savaşı, Mısır ve Suriye\'nin liderliğinde, 6-25 Ekim 1973\'te İsrail\'e karşı Arap devletleri koalisyonu tarafından savaşan bir savaştı. Çatışma çoğunlukla Sina\'da gerçekleşti ve 1967 Altı Gün Savaşı\'ndan bu yana İsrail tarafından işgal edilen Golan Tepeleri ve toprakları. Mısır Cumhurbaşkanı Anwar Sadat ayrıca Süveyş Kanalı\'nı yeniden açmak istedi. İsrail liderleri bundan emin olamasa da, özellikle İsrail\'i yok etmeyi planlamadılar. Savaş, Arap birliğinin İsrail işgal bölgelerinde İsrail\'in tutumlarına yönelik ortak bir sürpriz saldırı başlatmasıyla başladı. Mısır ve Suriye güçleri, Sina\'ya girmek için ateşkes hattını geçti. Yarımada ve Golan Tepeleri. Hem Birleşik Devletler hem de Sovyetler Birliği, savaş sırasında müttefiklerine büyük çapta yeniden yardım çabaları başlattı ve bu iki nükleer süper güç arasında neredeyse çatışmaya yol açtı.');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(16) COLLATE utf8_turkish_ci NOT NULL,
  `link` varchar(64) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `baslik`, `link`) VALUES
(4, 'Ana Sayfa', 'demo(turkish).php\r\n'),
(5, 'Makaleler', 'demo(turkish).php#articles'),
(6, 'Galeri', 'demo(turkish).php#gallery'),
(7, 'İletişim', 'demo(turkish).php#footer');

-- --------------------------------------------------------

--
-- Table structure for table `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `yazar` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `yorum` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makaleler`
--
ALTER TABLE `makaleler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `makaleler`
--
ALTER TABLE `makaleler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
