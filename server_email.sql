-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 11:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `server_email`
--

-- --------------------------------------------------------

--
-- Table structure for table `outbox_mail`
--

CREATE TABLE `outbox_mail` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `to` text DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `body` longtext DEFAULT NULL,
  `web_from` text DEFAULT 'KlikWM' COMMENT 'ganti sesuai domain / nama asplikasi nya',
  `lampiran` text DEFAULT NULL COMMENT 'gunakan tanda | untuk pemisah lampiran',
  `stt_lampiran` varchar(10) DEFAULT NULL COMMENT 'jika lampiran di hapus isi "hapus", jika tidak isi "tetap"',
  `create_date` datetime DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `flag` varchar(2) DEFAULT '*' COMMENT 'detail flag lihat di db automailer',
  `insert_from` text DEFAULT NULL,
  `update_from` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outbox_mail`
--

INSERT INTO `outbox_mail` (`id`, `to`, `subject`, `name`, `body`, `web_from`, `lampiran`, `stt_lampiran`, `create_date`, `update_date`, `flag`, `insert_from`, `update_from`) VALUES
(000001, 'komisarisutama.wm@gmail.com|basukiyenny@gmail.com|gianto.darmawan@gmail.com|kerry.thamrim@gmail.com|hendrardi168@gmail.com|kasmiati2.smg@gmail.com|syaifur.bprwm@gmail.com|skkmr.bprwm@gmail.com|acctwmsmg@gmail.com|simak.bprwm@gmail.com|treasury.bprwm@gmail.com|admbisnis3.wm@gmail.com|admbisnis3.wmsmg@gmail.com|tsi.wmsmg@gmail.com|ilalangfjh@gmail.com|legal.bprwm@gmail.com|skaiwelerimakmur@gmail.com|yosinursukma@gmail.com|rachmat.wmsmg@gmail.com|yolandadianna@gmail.com|sdm.bprwm@gmail.com|ppsdm.bprwm@gmail.com|chandrapardhiharto@gmail.com|umum.wmsmg@gmail.com|adm.kaoprsmg@gmail.com|bizdev2.bprwm@gmail.com|heri.wmsmg@gmail.com|setyoprasojowm@gmail.com|syknes80@gmail.com|sinyo.galeen@gmail.com|amu.wmsmg@gmail.com|funding.divisionwm@gmail.com|kabidoprs.smg@gmail.com|kasieteller.wmsmg@gmail.com|bo.wmsmg2@gmail.com|loanprocessing2.wmsmg@gmail.com|loanberkas2.wmsmg@gmail.com|yudi.wmsmg@gmail.com|csobprwm@gmail.com|hendra.wmsmg@gmail.com|asido.wmsmg@gmail.com|andi1.wmsmg@gmail.com|wmsiliwangi2@gmail.com|luqman.wmsmg@gmail.com|wmngaliyan@gmail.com|anisari.wmsmg@gmail.com|wmbanyumanik2@gmail.com|karno.wmkds@gmail.com|isnanto.wmwlr@gmail.com|yanah.wmwlr@gmail.com|liliek.wmwlr2@gmail.com|loanweleri@gmail.com|zushilafitria@gmail.com|deny.wmwlr@gmail.com|wmkaskendal2@gmail.com|wmpegandon@gmail.com|wmkaliwunguwlr@gmail.com|wmcepiring@gmail.com|doni.riyanto07@gmail.com|pancatyas05@gmail.com|bisnis.wmkds@gmail.com|diky.wmkds@gmail.com|agusistiqlal3@gmail.com|Ali.bprwmkds@gmail.com|klw2.wmkds@gmail.com|sis.wmkds@gmail.com|csbprwm.pati@gmail.com|tellerbprwm.pati@gmail.com|wisnusubroto83@gmail.com|aprin.wmslo1@gmail.com|operasional.wmslo@gmail.com|cs.wmsolo@gmail.com|loan.wmsolo1@gmail.com|yanto.wmklt@gmail.com|subari.wmslo@gmail.com|cs.wmpjg@gmail.com|adit.wmslo@gmail.com|kaswmsukoharjo@gmail.com|mudjinugrohobprwmklt@gmail.com|bpr.wmklt2@gmail.com|csbprwmklt3@gmail.com|elantdeep@gmail.com|bisnis.wmsrg2@gmail.com|cswmsrg2@gmail.com|hendro.wmsmg@gmail.com|bprwmtegal2@gmail.com|cswmtegal@gmail.com', '', 'sekar', '', 'sekar|publikasi', 'http://192.168.0.4/sekar/files/Memo_Intern_No._034_Memo.01_VII_2022_perihal_Penghentian_Sementara_Pemasaran_Tabungan_Smart_dan_Smart_Pro.pdf', 'tetap', '0000-00-00 00:00:00', '2022-09-19 05:02:56', '*', '', ''),
(000002, 'komisarisutama.wm@gmail.com|basukiyenny@gmail.com|gianto.darmawan@gmail.com|kerry.thamrim@gmail.com|hendrardi168@gmail.com|kasmiati2.smg@gmail.com|syaifur.bprwm@gmail.com|skkmr.bprwm@gmail.com|acctwmsmg@gmail.com|simak.bprwm@gmail.com|treasury.bprwm@gmail.com|admbisnis3.wm@gmail.com|admbisnis3.wmsmg@gmail.com|tsi.wmsmg@gmail.com|ilalangfjh@gmail.com|legal.bprwm@gmail.com|skaiwelerimakmur@gmail.com|yosinursukma@gmail.com|rachmat.wmsmg@gmail.com|yolandadianna@gmail.com|sdm.bprwm@gmail.com|ppsdm.bprwm@gmail.com|chandrapardhiharto@gmail.com|umum.wmsmg@gmail.com|adm.kaoprsmg@gmail.com|bizdev2.bprwm@gmail.com|heri.wmsmg@gmail.com|setyoprasojowm@gmail.com|syknes80@gmail.com|sinyo.galeen@gmail.com|amu.wmsmg@gmail.com|funding.divisionwm@gmail.com|kabidoprs.smg@gmail.com|kasieteller.wmsmg@gmail.com|bo.wmsmg2@gmail.com|loanprocessing2.wmsmg@gmail.com|loanberkas2.wmsmg@gmail.com|yudi.wmsmg@gmail.com|csobprwm@gmail.com|hendra.wmsmg@gmail.com|asido.wmsmg@gmail.com|andi1.wmsmg@gmail.com|wmsiliwangi2@gmail.com|luqman.wmsmg@gmail.com|wmngaliyan@gmail.com|anisari.wmsmg@gmail.com|wmbanyumanik2@gmail.com|karno.wmkds@gmail.com|isnanto.wmwlr@gmail.com|yanah.wmwlr@gmail.com|liliek.wmwlr2@gmail.com|loanweleri@gmail.com|zushilafitria@gmail.com|deny.wmwlr@gmail.com|wmkaskendal2@gmail.com|wmpegandon@gmail.com|wmkaliwunguwlr@gmail.com|wmcepiring@gmail.com|doni.riyanto07@gmail.com|pancatyas05@gmail.com|bisnis.wmkds@gmail.com|diky.wmkds@gmail.com|agusistiqlal3@gmail.com|Ali.bprwmkds@gmail.com|klw2.wmkds@gmail.com|sis.wmkds@gmail.com|csbprwm.pati@gmail.com|tellerbprwm.pati@gmail.com|wisnusubroto83@gmail.com|aprin.wmslo1@gmail.com|operasional.wmslo@gmail.com|cs.wmsolo@gmail.com|loan.wmsolo1@gmail.com|yanto.wmklt@gmail.com|subari.wmslo@gmail.com|cs.wmpjg@gmail.com|adit.wmslo@gmail.com|kaswmsukoharjo@gmail.com|mudjinugrohobprwmklt@gmail.com|bpr.wmklt2@gmail.com|csbprwmklt3@gmail.com|elantdeep@gmail.com|bisnis.wmsrg2@gmail.com|cswmsrg2@gmail.com|hendro.wmsmg@gmail.com|bprwmtegal2@gmail.com|cswmtegal@gmail.com', 'PUBLIKASI TEMPEL', 'sekar', 'wsqsqwsa<br />\r\nqw<br />\r\ns<br />\r\nqwsqws<br />\r\nqwsq', 'sekar|publikasi', 'http://192.168.0.4/sekar/files/Memo_Intern_No._023_Memo.01_VI_2022_perihal_Kebijakan_Pemeriksaan_Dokumen_Kredit.pdf', 'tetap', '0000-00-00 00:00:00', '2022-09-19 05:31:02', '*', '', ''),
(000003, 'komisarisutama.wm@gmail.com|gianto.darmawan@gmail.com|hendrardi168@gmail.com', 'PUBLIKASI TEMPEL', 'sekar', 'Kepada<br />\r\nYth.', 'sekar|memo', 'SEKAR WEB  BPR WM.pdf|Notulen Direksi 31 Mei 2022_1 (1).pdf|Notulen Direksi 31 Mei 2022_1.pdf|FOTO_4X6-removebg-preview.png', 'tetap', '0000-00-00 00:00:00', '2022-09-28 03:43:18', '*', '', ''),
(000004, 'komisarisutama.wm@gmail.com|basukiyenny@gmail.com', 'PUBLIKASI TEMPEL', 'sekar', 'Kepada<br />\r\nYt.', 'sekar|memo', 'Array', 'tetap', '0000-00-00 00:00:00', '2022-09-28 04:58:14', '*', '', ''),
(000005, 'komisarisutama.wm@gmail.com|basukiyenny@gmail.com', 'COBA', 'sekar', 'dasdsa<br />\r\nd<br />\r\nasd<br />\r\nasdasdad', 'sekar|memo', 'http://192.168.0.4/sekar/files/FOTO_4X6-removebg-preview.png', 'tetap', '0000-00-00 00:00:00', '2022-09-28 05:49:58', '*', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outbox_mail`
--
ALTER TABLE `outbox_mail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `outbox_mail`
--
ALTER TABLE `outbox_mail`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
