-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 03:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi`
--

-- --------------------------------------------------------

--
-- Table structure for table `jabatan2`
--

CREATE TABLE `jabatan2` (
  `id_jabatan` int(11) NOT NULL,
  `id_nik` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `no_nik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan2`
--

INSERT INTO `jabatan2` (`id_jabatan`, `id_nik`, `nama_jabatan`, `nama_user`, `no_nik`) VALUES
(1, 1, 'Komisaris Utama', 'DJOKO SUMARNO', '3374070401590001'),
(2, 2, 'Komisaris', 'YENNY BASUKI', '3374094105570001'),
(3, 3, 'Direktur Utama', 'KERRY THAMRIM', '01-0575008'),
(4, 4, 'Direktur Kepatuhan', 'HENDRARDI', '01-0761030'),
(5, 5, 'Direktur Operasional', 'KASMIATI', '01-0174040'),
(6, 6, 'Kepala Operasional-  Kantor Pusat Semarang', 'VIEKE NOVIKA DEWI', '01-0175044'),
(7, 7, 'Staf Monitoring', 'AGUS KUSTRIJANTO', '01-0370058'),
(8, 8, 'Account Officer Senior Kas Tlogosari-Semarang', 'DIDIK KRISMULYANTO', '01-0371064'),
(9, 9, 'Kepala Bisnis Kantor Pusat Semarang', 'SETYO PRASOJO', '01-0379070'),
(10, 10, 'Kepala Kantor Pusat Semarang', 'HERI TRIYATNO', '01-0578098'),
(11, 11, 'Kepala SIMAK', 'JOKO SUSANTO', '01-0567005'),
(12, 12, 'Kepala Human Capital', 'ESTI WIDIYANINGRUM', '01-0382065'),
(13, 13, 'Kepala Teknologi Informasi', 'GIDEON ADMIGA P', '01-0683012'),
(14, 14, 'Kepala Pelayanan Kantor Pusat Semarang', 'ANITA YULIANTI', '01-0779018'),
(15, 15, 'Wakil Kepala SIMAK', 'CHANDRA DEWI', '01-0786020'),
(16, 16, 'Kepala Monitoring Semarang- Wilayah Timur Selatan ', 'SYNESIUS WAHYU SUPRIYANTO', '01-0780022'),
(17, 17, 'Kepala Kantor Kas Siliwangi-Semarang', 'ANDI SETIARSO', '01-0781023'),
(18, 18, 'Kepala Dana - Kantor Pusat Semarang', 'DIYAH LISNAWARDANI', '01-0377056'),
(19, 19, 'Customer Service Kas-Cabang Utama Semarang', 'ARIS BUDHIYONO', '01-0883032'),
(20, 20, 'Staff Teknologi Sistem Informasi', 'BAGAS ARYO PAMBUDI', '01-0985033'),
(21, 21, 'Kepala Monitoring Semarang - Wilayah Barat & Tenga', 'KARNO', '01-0978037'),
(22, 22, 'Customer Service Semarang', 'QAHARDI ARDHAS RAKHMAWAN', '01-1082046'),
(23, 23, 'Kepala SKAI ', 'DONALD LINTIN YURISDWIPUTRA', '01-1086043'),
(24, 24, 'Kepala Kantor Kas Gang Besen - Semarang', 'MANGARA ASIDO TAMBUNAN', '01-1081045'),
(25, 25, 'Staff Loan Processing- Cabang Utama Semarang', 'FADJAR ADE PRAMONO', '01-1084051'),
(26, 26, 'Staff Finance & Treasury', 'SUSAN TRI AGUSTINA', '01-0482081'),
(27, 27, 'Kepala Umum', 'M. ROHADI', '01-0181072'),
(28, 28, 'Customer Service Kas-Cabang Utama Semarang', 'ALDI PERDANA ADIGUNA', '01-1188059'),
(29, 29, 'Staff Dana-Kantor Pusat Semarang', 'HENDRA GITA PRAYUDI', '01-1185061'),
(30, 30, 'Analis KPSM', 'RISSA DWI PURNOMO', '01-0884047'),
(31, 31, 'Admin SLIK', 'IRWAN SETYAWAN', '01-1181062'),
(32, 32, 'Customer Service Kas-Cabang Utama Semarang', 'OKTAVIANTO SUTRISNO', '01-1188065'),
(33, 33, 'Staf Kepatuhan Dan Manajemen Risiko', 'AMIL INDARYANTO', '01-1185087'),
(34, 34, 'Kepala Pengembangan Bisnis', 'MUHAMMAD SRI TULUS', '01-1186070'),
(35, 35, 'Kepala Kantor Kas Ngaliyan Semarang', 'LUQMAN HAKIM MAHENDRA', '01-1285075'),
(36, 36, 'Analis Kredit Kecil Menengah - Semarang', 'EDY SULISTIYONO', '01-1182071'),
(37, 37, 'Staff Logistik & Umum', 'IWAN WIDIYANTO', '01-9979024'),
(38, 38, 'Internal Kontrol-Semarang', 'PUPUT SATRIA MUTTAQIEN', '01-1287072'),
(39, 39, 'Staf Monitoring Semarang- Wilayah Barat & Tengah', 'ARDI ASMI SUWARDI', '01-1286078'),
(40, 40, 'Admin Operasional', 'OEI BIE LIAN', '01-1265077'),
(41, 41, 'Internal Kontrol-Semarang', 'NUR RACHMAT DIANSAH', '01-1285083'),
(42, 42, 'Admin Bisnis', 'YUNARSO', '01-1283089'),
(43, 43, 'Internal Kontrol-Semarang', 'YOLANDA DIANA PARERA', '01-0573007'),
(44, 44, 'Analis Kredit Kecil Menengah - Semarang', 'IGNATIUS CATUR SETIAWAN', '01-1379091'),
(45, 45, 'Analis Kredit Kecil Menengah - Semarang', 'NURDIYANTO ', '01-1389098'),
(46, 46, 'Analis Kredit Mikro -  Semarang', 'LALAN SENTONO', '01-1388107'),
(47, 47, 'Staff MATB K1', 'EDI MARWANTO', '01-1182060'),
(48, 48, 'Kepala Satuan Kerja Corporate Legal', 'FADJAR HIDAJAT', '01-0168041'),
(49, 49, 'Internal Kontrol-Semarang', 'YOSI NUR SUKMA', '01-1486102'),
(50, 50, 'Staff Loan Penyimpanan Agunan - Cabang Utama Semar', 'AHMAD ASYIK', '01-1388103'),
(51, 51, 'Sekretaris', 'FIKRINA AZIZAH', '01-1491106'),
(52, 52, 'Kepala Pengawasan & Penyelesaian Kredit Bermasalah', 'RM. DWI CHANDRA PBP', '02-0169042'),
(53, 53, 'Kepala Kantor Kas Tlogosari Semarang', 'HENDRA TAUHAR', '01-1586110'),
(54, 54, 'Internal Kontrol-Semarang', 'ADIMAS BAGUS PAMUNGKAS', '01-1591111'),
(55, 55, 'Staff Teknologi Sistem Informasi', 'DIMAS AGUNG NOVIYANTO', '01-1591112'),
(56, 56, 'Kepala Kantor Kas Banyumanik Semarang', 'ANIS ARIANTO', '01-1186094'),
(57, 57, 'Account Officer Senior Kas Banyumanik', 'ARIF HENRY DUNANTO', '01-1383109'),
(58, 58, 'Account Officer Lending Kas Ngaliyan-Semarang', 'HERU HENDRAYANA', '3325071407850004'),
(59, 59, 'Kepala SKKMR & APUPPT', 'SYAIFUR ROKHMAN', '01-0780017'),
(60, 60, 'Customer Service Kas-Cabang Utama Semarang', 'SUGENG RIADI', '05-0985036'),
(61, 61, 'Staff Human Capital', 'AGUNG JADMIKO', '01-1285080'),
(62, 62, 'Customer Service-Tegal', 'EVINA SUCIANTI', '01-0481089'),
(63, 63, 'Kepala Marketing Kantor Gayamsari Semarang', 'TJATUR YUDI WIBOWO', '01-0881029'),
(64, 64, 'Staff Pengembangan Bisnis', 'YOGA WAHYU SASONGKO', '01-1791113'),
(65, 65, 'Kepala Operasional-Weleri', 'NUR ROHYANAH', '02-0082050'),
(66, 66, 'Kepala Monitoring Weleri & Tegal', 'ZUSHILA FITRIA', '02-0682013'),
(67, 67, 'Kepala Kantor Kas Kendal-Weleri', 'DENY ANDRIAN RACHMAT', '02-0071025'),
(68, 68, 'Customer Service-Weleri', 'LILIEK WINARSIH', '02-0079052'),
(69, 69, 'Customer Service Kas-Weleri', 'WAHYU KURNIAWAN', '02-1186043'),
(70, 70, 'Teller-Weleri', 'SITI SOFIAH', '02-9070004'),
(71, 71, 'Customer Service Kas-Weleri', 'DWI PURWANTI', '02-9980017'),
(72, 72, 'Teller-Weleri', 'EMY INDRIYANI', '02-8966003'),
(73, 73, 'Staff Loan Processing-Weleri', 'NIHAYATUN NIKMAH', '02-1184046'),
(74, 74, 'Analis Kredit Kecil Menengah - Weleri', 'ISDARWANTO', '02-1187044'),
(75, 75, 'Staff Monitoring Cabang-Weleri', 'ARIS DARMAWAN', '02-1388051'),
(76, 76, 'Staff Monitoring Cabang-Weleri', 'PRIYO PURWANDOYO', '02-1381049'),
(77, 77, 'Staff Monitoring Cabang-Weleri', 'ABDUL ROFIQ', '02-1380050'),
(78, 78, 'Analis Kredit Mikro - Weleri', 'YUSUF ANTON GUNADI', '01-0779034'),
(79, 79, 'Account Officer Lending-Weleri', 'MUHAMMAD', '02-1585056'),
(80, 80, 'Kepala Cabang Weleri', 'KARNO ( PINCA )', '03-9778009'),
(81, 81, 'Kepala Bisnis-Weleri', 'ISNANTO BUDI ASKARA', '01-1084040'),
(82, 82, 'Account Officer Lending-Weleri', 'IDHAM KHOLID', '02-1581054'),
(83, 83, 'Customer Service Kas-Weleri', 'PRAPTO FARIZ CATUR SUSILO', '02-1388052'),
(84, 84, 'Account Officer Lending-Weleri', 'MUHAMMAD FALIQUL ANWAR', '02-1688053'),
(85, 85, 'Kepala Cabang Kudus', 'DONI RIYANTO', '01-0874031'),
(86, 86, 'Kepala Operasional-Kudus', 'PANCANINGTYAS R', '03-0477077'),
(87, 87, 'Kepala Bisnis Area Pati', 'SISWANTO', '03-1083093'),
(88, 88, 'Analis Kredit Mikro - Kudus', 'NUR ARI DANI. R', '03-1188094'),
(89, 89, 'Analis Kredit Mikro - Kudus', 'SYAILENDRA', '03-1289096'),
(90, 90, 'Teller-Kudus', 'AYU NAWAITU FITRAYANI', '03-1389097'),
(91, 91, 'Staff Monitoring -Kudus', 'SEPTIAN ADI CHANDRA', '03-1388098'),
(92, 92, 'Customer Service-Kudus', 'CHOIRIN NISA', '03-0484080'),
(93, 93, 'Kepala Seksi Monitoring-Kudus', 'AGUS ISTIQLAL', '03-0877090'),
(94, 94, 'Service Assistance-Sragen', 'ROSYADA AMELIA PERMATASARI', '03-1489099'),
(95, 95, 'Staff Dana-Kudus', 'RAMA HADI PAMUNGKAS', '01-0885088'),
(96, 96, 'Staff Loan Processing-Kudus', 'DIKY HARMANTO', '03-1488100'),
(97, 97, 'Analis Kredit - Kantor Area Pati', 'NOVIAN AGUNG RESTYANTO', '01-1288081'),
(98, 98, 'Analis Kredit Kecil Menengah - Kudus', 'EKO TEGUH PRAYITNO', '01-1086050'),
(99, 99, 'Office Boy-Kudus', 'KHASAN KAHONO', '03-0726001'),
(100, 100, 'Account Officer Senior-Kudus', 'ZAMHAR ARIFIN', '03-1480103'),
(101, 101, 'Kepala Kantor Kas Kaliwungu-Kudus', 'ALI MAS UD', '03-1685102'),
(102, 102, 'Teller-Kudus', 'BURHAN SHIDIQ', '03-1990101'),
(103, 103, 'Account Officer Hunter-Kudus', 'ZEQI MUBAROK', '3321081405860009'),
(104, 104, 'Account Officer Lending-Kudus', 'ATOK BANU HERMAWAN', '3319012304860003'),
(105, 105, 'Kepala Operasional-Surakarta', 'UNTARI SRI HARTATI', '99-0579006'),
(106, 106, 'Kepala Cabang Surakarta', 'WISNU SUBROTO', '99-1084042'),
(107, 107, 'Teller-Surakarta', 'NITHA SALONIKHA', '99-0675009'),
(108, 108, 'Staff Loan Processing-Surakarta', 'AMBAR SUSILOWATI', '99-0681011'),
(109, 109, 'Teller-Surakarta', 'ESA ARDI NUGROHO', '99-1086052'),
(110, 110, 'Kepala Kantor Kas Sukoharjo-Surakarta', 'ADITYA NUGRAHA', '99-1182037'),
(111, 111, 'Teller-Surakarta', 'SEVENTINUS AGUSTUS SURIDNO', '99-1185035'),
(112, 112, 'Customer Service-Surakarta', 'SUTRISNO', '99-1284038'),
(113, 113, 'Staff Monitoring Cabang-Surakarta', 'GUNAWAN', '99-1380041'),
(114, 114, 'Analis Kredit Kecil Menengah - Surakarta', 'ARIYANTO', '99-1282039'),
(115, 115, 'Kepala Bisnis-Surakarta', 'APRIN ADHI PRABOWO', '99-0984029'),
(116, 116, 'Analis Kredit Mikro - Surakarta', 'ARDI IRMANSYAH', '99-1489042'),
(117, 117, 'Office Boy-Surakarta', 'AGUNG CONDRO WICAKSONO', '99-1182032'),
(118, 118, 'Kepala Kantor Kas Pajang-Surakarta', 'SUBARI', '99-1186036'),
(119, 119, 'Staff Monitoring ALL Cabang-Surakarta', 'WIJI PRAMONO', '99-1790043'),
(120, 120, 'Kepala Cabang Klaten', 'MUDJI NUGROHO', '01-0371060'),
(121, 121, 'Customer Service-Klaten', 'ENI ISWAHYUNINGSIH', '05-1281002'),
(122, 122, 'Service Assistance-Klaten', 'FRANCISCA ROMANA ARY ANGGRAHINI', '05-1483004'),
(123, 123, 'Kepala Monitoring Surakarta, Klaten & Sragen ', 'HERCAHYANTO', '99-0570000'),
(124, 124, 'Teller-Klaten', 'NIKEN ROSIDAH KHUSNA', '05-1892005'),
(125, 125, 'Kepala Cabang Sragen', 'ELIANTO', '01-0480076'),
(126, 126, 'Analis Kredit Kecil Menengah-Sragen ', 'AGUS WIBOWO', '01-1188056'),
(127, 127, 'Customer Service Kas-Surakarta', 'HUTRI KARTIKA IRIANTI', '06-1484002'),
(128, 128, 'Account Officer Senior-Sragen ', 'BILLY ADITYA WARDANA', '06-1481004'),
(129, 129, 'Account Officer Lending-Sragen ', 'BUDI SETIYAWAN', '3314052810880002 '),
(130, 130, 'Account Officer Lending-Sragen ', 'RATNA WIDIASTUTI', '06-1784006'),
(131, 131, 'Kepala Cabang Tegal', 'YB R HENDRO LUKYTO', '01-1075059'),
(132, 132, 'Analis Kredit Kecil Menengah-Tegal', 'BACHTIAR AHDI', '01-1382092'),
(133, 133, 'Office Boy-Tegal', 'BRAM ADITYA', '07-1593001'),
(134, 134, 'Account Officer Hunter-Tegal', 'DWINA MURTI', '3328185002820004'),
(135, 135, 'Customer Service Semarang', 'SISKA YULI ASTUTI', '01-1890114'),
(136, 136, 'Customer Service Semarang', 'AGUS FAISAL', '01-1892115'),
(137, 137, 'Teller-Cabang Utama Semarang', 'LISDIYA ULFA FATFAENI', '01-1594116'),
(138, 138, 'Customer Service Kas-Cabang Utama Semarang', 'HERMIN YULIANA PURNAMANINGRUM', '3374085507920001'),
(139, 139, 'Analis Kredit Mikro -  Semarang', 'ADHITYA REZA KURNIAWAN', '3374061505920002'),
(140, 140, 'Teller-Cabang Utama Semarang', 'ALAM EDY KUSUMAWARDANI', '3321110702920002'),
(141, 141, 'Staff Pengembangan Bisnis', 'PUGUH ADI SETIAWAN', '3327123003940007'),
(142, 142, 'Customer Service Kas-Surakarta', 'LARAS HAPSARI', '3311126211930002'),
(143, 143, 'Teller-Tegal', 'TRININGRUM', '07-1890003'),
(144, 144, 'Teller-Weleri', 'NIKMATUL ALAWIYAH', '3324094204940005'),
(145, 145, 'Customer Service Kas-Weleri', 'JATI PUJI ATMOJO', '3324071907940004'),
(146, 146, 'Analis Kredit Kecil Menengah-Klaten', 'RONY AGUNG PRASETYO', '3311082005880004'),
(147, 147, 'Analis Kredit Mikro-Sragen ', 'HISTONY ELLLY S PAMUNGKAS', '3314100506850001'),
(148, 148, 'Staff Monitoring Cabang-Sragen ', 'WINDU ADHI SAPUTRO', '3313113005880001'),
(149, 149, 'Staff Monitoring-Semarang', 'HERU SANTOSO', '3374041510700004'),
(150, 150, 'Staff Teknologi Sistem Informasi', 'FERRA OKY NETASA', '01-1996119'),
(151, 151, 'Teller-Cabang Utama Semarang', 'MUKHAMAD ARI SYAFRUDI', '3321012910930003'),
(152, 152, 'Account Officer Hunter-Tegal', 'RIZA RIZQIL MAJID', '3328111212880002'),
(153, 153, 'Staff Monitoring Cabang-Tegal', 'RUSNENDAR PRIYO UTOMO', '3328152903830003'),
(154, 154, 'Account Officer Senior Kas Tlogosari-Semarang', 'AFIX RENDRA', '01-1981168'),
(155, 155, 'Account Officer Hunter-Kudus', 'MOHAMAD CHOIRUL ANWAR', '3319051302840002'),
(156, 156, 'Account Officer Hunter Kas Banyumanik-Semarang', 'IRWAN SETYAWAN (AO)', '3374112506860003'),
(157, 157, 'Staff Teknologi Sistem Informasi', 'PUTRA SETYA BUDI', '01-1994117'),
(158, 158, 'Service Assistance-Tegal', 'SUNINGSIH', '3376015107910002'),
(159, 159, 'Account Officer Hunter-Weleri', 'RIFQY HAZIMY', '3324141501930004'),
(160, 160, 'Office Boy-Weleri', 'MUHAMAD FAQIH', '3324142605830001'),
(161, 161, 'Komisaris', 'GIANTO DARMAWAN', '3374112210580002'),
(162, 162, 'Staff Monitoring Cabang-Klaten', 'MUHAMMAD ILHAM KHUMAINI', '3372020909940003'),
(163, 163, 'Office Boy-Klaten', 'WAWAN CENDANI', '3310260903900001'),
(164, 164, 'Customer Service Kas-Kudus', 'FILIKO HERNANDES', '3320071008960004'),
(165, 165, 'Staff Teknologi Sistem Informasi', 'BAYU PRAMUDYO ANANTARUM', '3319020207840005'),
(166, 166, 'Account Officer Hunter-Kudus', 'BOY SULFIANTO', '3319042303900002'),
(167, 167, 'Account Officer Hunter-Tegal', 'NIKI TRISTANDI', '3376031205930002'),
(168, 168, 'Account Officer Hunter - Kas Sukoharjo', 'PANCA INDRYA MUKTI', '3372051806900005'),
(169, 169, 'Account Officer Hunter - Kas Pajang', 'ALFA PRASETYONO', '3372040208870001'),
(170, 170, 'Account Officer Hunter Kas Siliwangi-Semarang', 'ABI SETIOKO', '3374102704840005'),
(171, 171, 'Account Officer Hunter-Tegal', 'LUKMAN WIDYANTO', '3376020903860003'),
(172, 172, 'Teller-Cabang Utama Semarang', 'YOGI AGUNG PRAKOSO', '3374062206980006'),
(173, 173, 'Account Officer _ Kantor Area Pati', 'MASHUDI', '3319051710860003'),
(174, 174, 'Account Officer Hunter - Kas Sukoharjo', 'DWI JOKO WALOYO', '3311081204940003'),
(175, 175, 'Account Officer Hunter-Weleri', 'HARIS SUHARJANTO', '3324121206860002'),
(176, 176, 'Teller-Sragen ', 'DEVI NILAM VITRIASARI', '3314105511940002'),
(177, 177, 'Account Officer Hunter-Klaten', 'BINTANG GUMILANG SAKTI', '3310182803970001'),
(178, 178, 'Teller-Weleri', 'YAYAN FAJAR ARIYANTO', '3324080501930001'),
(179, 179, 'Customer Service-Sragen ', 'CITRA INDAH PERTIWI', '3314106009960002'),
(180, 180, 'Corporate Legal', 'HENI ANGGRAINI', '1771087108890001'),
(181, 181, 'Office Boy-Semarang', 'AL ARIF', '3374050111800008'),
(182, 182, 'Teller-Tegal', 'FERA ISMIYATUNISSA', '3328124605940003'),
(183, 183, 'Teller-Weleri', 'HENI RIYAWATI', '3324166804000002'),
(184, 184, 'Office Boy-Semarang', 'OB_RISKY BAYU SAMUDRA', '3374130607980004'),
(185, 185, 'Teller - Kantor Area Pati', 'SONIA SEKHA ANGGRIANI', '3319054509980001'),
(186, 186, 'Account Officer _ Kantor Area Pati', 'MUHAMAD ZAINAL ARIFIN', '3319031612850004'),
(187, 187, 'Account Officer _ Kantor Area Pati', 'AGUS FAHMI ULIN NUHA', '3318182608960001'),
(188, 188, 'Customer Service - Kantor Area Pati', 'WAHYU KRISTIANI', '3320097006940001'),
(189, 189, 'Office Boy-Kudus', 'OB_SUPARNO', '3318152905930002'),
(190, 190, 'Account Officer _ Kantor Area Pati', 'FREDI EKA ADITIA', '3318040912940001'),
(191, 191, 'Analis Kredit Mikro-Tegal', 'KHAERUDIN', '3328150204870015'),
(192, 192, 'Teller-Cabang Utama Semarang', 'UMUL KHUSNA', '3321016903940007'),
(193, 193, 'Staff Monitoring Cabang-Sragen ', 'IG ANDI SURJO KRISTANTO', '3372042803860006'),
(194, 194, 'Account Officer Hunter-Klaten', 'FRENGKI ARDIAN', '3310141011930004'),
(195, 195, 'Teller-Cabang Utama Semarang', 'SATRIANA ERRA BELLA MEGA', '3374086706990001'),
(196, 196, 'Account Officer Hunter Kas Siliwangi-Semarang', 'NOR AZIS', '3374131009770007'),
(197, 197, 'Staff Teknologi Sistem Informasi', 'PRADICA RIFQI HINDAMI DIPUTRO', '3374132104970004'),
(198, 198, 'Account Officer Hunter Kas Siliwangi-Semarang', 'HARI SETIAWAN', '3374040303820001'),
(199, 199, 'Account Officer Hunter-Gayamsari', 'NATHANIEL KEVIN ARISTO', '3374100506990001'),
(200, 200, 'Account Officer Hunter-Weleri', 'NUR HERI PURWANTO', '3324142211980001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan2`
--
ALTER TABLE `jabatan2`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jabatan2`
--
ALTER TABLE `jabatan2`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
