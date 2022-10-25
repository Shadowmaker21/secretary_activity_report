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
-- Database: `multi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `id_online` int(11) NOT NULL,
  `agenda` enum('Rapat Bisnis','Rapat Direksi','Rapat Penyelesaian Kredit Bermasalah Per Cabang','Rapat Kerja','Rapat Kredit','Rapat Pra Raker') DEFAULT NULL,
  `nip` text NOT NULL,
  `jabatan` text NOT NULL,
  `nama_user` text DEFAULT NULL,
  `tgl_join` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `id_online`, `agenda`, `nip`, `jabatan`, `nama_user`, `tgl_join`) VALUES
(1, 1, 'Rapat Kerja', '197', 'Staff Teknologi Sistem Informasi', 'PRADICA RIFQI HINDAMI DIPUTRO', '2022-10-10 14:56:06'),
(2, 1, 'Rapat Kerja', '47', 'Staff MATB K1', 'EDI MARWANTO', '2022-10-10 14:56:41'),
(3, 1, '', '23', 'Kepala SKAI ', 'DONALD LINTIN YURISDWIPUTRA', '2022-10-10 17:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `absen2`
--

CREATE TABLE `absen2` (
  `id` int(11) NOT NULL,
  `id_offline` int(11) NOT NULL,
  `agenda` enum('Rapat Bisnis','Rapat Direksi','Rapat Penyelesaian Kredit Bermasalah Per Cabang','Rapat Kerja','Rapat Kredit','Rapat Pra Raker') DEFAULT NULL,
  `nip` varchar(1000) DEFAULT NULL,
  `jabatan` varchar(1000) DEFAULT NULL,
  `nama_user` text DEFAULT NULL,
  `tgl_join` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen2`
--

INSERT INTO `absen2` (`id`, `id_offline`, `agenda`, `nip`, `jabatan`, `nama_user`, `tgl_join`) VALUES
(1, 1, 'Rapat Kerja', '94', 'Service Assistance-Sragen', 'ROSYADA AMELIA PERMATASARI', '2022-10-10 14:59:30'),
(2, 1, '', '4', 'Direktur Kepatuhan', 'HENDRARDI', '2022-10-10 16:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'Kredit'),
(2, 'Operasional');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `id_kode` text NOT NULL,
  `nama_divisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `id_kode`, `nama_divisi`) VALUES
(1, '1', 'SEKERTARIS'),
(2, '2', 'SDM'),
(3, '3', 'SEKERTARIS');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_notdekom`
--

CREATE TABLE `hasil_notdekom` (
  `id_hasil` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `file_not` text DEFAULT NULL,
  `tanggal_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_notdekom`
--

INSERT INTO `hasil_notdekom` (`id_hasil`, `nama`, `file_not`, `tanggal_update`) VALUES
(1, 'Hasil Notulen Dewan Komisaris', 'ckeditor4-export-pdf (2).pdf', '2022-08-31 09:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `hukum`
--

CREATE TABLE `hukum` (
  `id` int(11) NOT NULL,
  `nama_hkm` varchar(100) NOT NULL,
  `nomor_hkm` varchar(100) NOT NULL,
  `ket_hkm` varchar(100) DEFAULT NULL,
  `file_hkm` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hukum`
--

INSERT INTO `hukum` (`id`, `nama_hkm`, `nomor_hkm`, `ket_hkm`, `file_hkm`) VALUES
(1, 'Denda Keterlambatan', '123456', 'adasd', '');

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
  `id` int(11) NOT NULL,
  `no_intern` varchar(100) NOT NULL,
  `tbt` date DEFAULT NULL,
  `blk` date DEFAULT NULL,
  `surat` varchar(100) NOT NULL,
  `kode` varchar(100) DEFAULT NULL,
  `jen` varchar(100) DEFAULT NULL,
  `div` varchar(100) DEFAULT NULL,
  `hal` varchar(100) NOT NULL,
  `dic` varchar(100) NOT NULL,
  `menc` varchar(100) NOT NULL,
  `jenis` enum('MEMO','SE','SK') DEFAULT NULL,
  `file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`id`, `no_intern`, `tbt`, `blk`, `surat`, `kode`, `jen`, `div`, `hal`, `dic`, `menc`, `jenis`, `file`) VALUES
(1, '001', '2022-01-17', '2022-01-18', '001/SK.02/I/2022', '02', 'Promosi/Demosi/Mutasi', 'SDM', 'Mutasi Hendra Gita', '', '', 'SK', 'Memo_Intern_No._020_Memo.01_VI_2022_perihal_Kebijakan_Prosedur_Permohonan_Kredit.pdf'),
(2, '002', '2022-01-24', '2022-01-24', '002/SK.02/I/2022', '02', '', 'SDM', 'Honor Komisaris dan Direksi', '', '', 'SK', NULL),
(3, '003', '2022-01-24', '2022-01-24', '003/SK.02/I/2022', '02', '', 'SDM', 'Gaji Karyawan', '', '', 'SK', NULL),
(4, '004', '2022-01-24', '2022-01-24', '004/SK.02/I/2022', '02', '', 'SDM', 'Uang Saku Magang', '', '', 'SK', NULL),
(5, '005', NULL, NULL, '005/SK.02/I/2022', '02', '', 'SDM', 'Surat Teguran I', '', '', 'SK', NULL),
(6, '006', NULL, NULL, '006/SK.02/I/2022', '02', '', 'SDM', 'Surat Teguran II', '', '', 'SK', NULL),
(7, '007', NULL, NULL, '007/SK.02/I/2022', '02', '', 'SDM', 'Surat Teguran III', '', '', 'SK', NULL),
(8, '008', '2022-02-04', '2022-02-04', '008/SK.02/I/2022', '02', '', 'SDM', 'Struktur Organisasi', '', '', 'SK', ''),
(9, '009', '2022-02-04', '2022-02-07', '009/SK.01/I/2022', '01', 'Kredit', 'Sekretaris', 'Pembentukan Komite dan Penetapan Batas Kewenangan Memutus Permohonan Kredit', '', 'SK Direksi No. 002/SK.Dir/KRD/IV/2021', 'SK', ''),
(10, '010', '2022-02-09', '2022-02-09', '010/SK.02/II/2022', '02', 'Promosi/Demosi/Mutasi', 'SDM', 'Perubahan Jabatan Bp. Syaifur Rokhman sebagai Kepala SKKMR dan APU PPT', '', '', 'SK', 'Memo_Intern_No. 029_Memo.01_VII_2022_perihal_Kebijakan_Plafon_Minimal_Permohonan_Kredit_Secara_Online_Melalui_kredit69.com.pdf'),
(11, '011', '2022-02-09', '2022-02-09', '011/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. RM Dwi Chandra sebagai Kepala SAM', '', '', 'SK', NULL),
(12, '012', '2022-02-09', '2022-02-09', '012/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Fadjar Hidajat sebagai Kepala Corporate Legal', '', '', 'SK', NULL),
(13, '013', '2022-02-09', '2022-02-09', '013/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Esti Widyaningrum sebagai Kepala SDM', '', '', 'SK', NULL),
(14, '014', '2022-02-09', '2022-02-09', '014/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Muhammad Sri Tulus sebagai Kepala Business Development', '', '', 'SK', NULL),
(15, '015', '2022-02-09', '2022-02-09', '015/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Gideon Admiga P sebagai Kepala TSI', '', '', 'SK', NULL),
(16, '016', '2022-02-09', '2022-02-09', '016/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Joko Susanto sebagai Kepala SIMAK', '', '', 'SK', NULL),
(17, '017', '2022-02-09', '2022-02-09', '017/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Muhammad Rohadi sebagai Kepala Umum & Logistik', '', '', 'SK', NULL),
(18, '018', '2022-02-11', '2022-02-11', '018/SK.01/II/2022', '01', 'Tabungan', 'Sekretaris', 'SOP Tabungan Edisi IX', '', 'a. SE Direksi No. 021/SE.Dir/BPR.WM/XI/2013 b. SK Direksi No. 003/SK.Dir/DpTb/III/2019', 'SK', NULL),
(19, '019', NULL, NULL, '019/SK.02/II/2022', '02', '', 'SDM', 'Analisis Kebutahan SDM', '', '', 'SK', NULL),
(20, '020', '2022-02-15', '2022-02-15', '020/SK.02/II/2022', '02', '', 'SDM', 'Pemberian Surat Peringatan 1 ', '', '', 'SK', NULL),
(21, '021', '2022-02-15', '2022-02-15', '021/SK.02/II/2022', '02', '', 'SDM', 'Pemberian Surat Teguran 1 ', '', '', 'SK', NULL),
(22, '022', '2022-02-15', '2022-02-15', '022/SK.02/II/2022', '02', '', 'SDM', 'Pemberian Surat Teguran 2', '', '', 'SK', NULL),
(23, '023', '2022-02-15', '2022-02-15', '023/SK.02/II/2022', '02', '', 'SDM', 'Pemberian Surat Teguran 3', '', '', 'SK', NULL),
(24, '024', NULL, NULL, '024/SK.02/II/2022', '02', '', 'SDM', 'Mutasi Sdr. Hutri', '', '', 'SK', NULL),
(25, '025', NULL, NULL, '025/SK.02/II/2022', '02', '', 'SDM', 'Mutasi Sdr. Wiji', '', '', 'SK', NULL),
(26, '026', NULL, NULL, '026/SK.02/II/2022', '02', '', 'SDM', 'Mutasi Sdr. Ardi Irmansyah', '', '', 'SK', NULL),
(27, '027', NULL, NULL, '027/SK.02/II/2022', '02', '', 'SDM', 'Mutasi Sdr. Seventinus', '', '', 'SK', NULL),
(28, '028', '2022-02-17', '2022-02-17', '028/SK.02/II/2022', '02', '', 'SDM', 'Penetapan CS Wahyu Kurniawan', '', '', 'SK', NULL),
(29, '029', '2022-02-17', '2022-02-17', '029/SK.02/II/2022', '02', '', 'SDM', 'Penetapan Kepala Kantor Kas Ali Masud', '', '', 'SK', NULL),
(30, '030', '2022-02-17', '2022-02-17', '030/SK.02/II/2022', '02', '', 'SDM', 'Penetapan Kepala Kantor Kas Andi Setiarso', '', '', 'SK', NULL),
(31, '031', '2022-02-17', '2022-02-17', '031/SK.02/II/2022', '02', '', 'SDM', 'Penetapan Kepala Kantor Kas Aditya Nugraha', '', '', 'SK', NULL),
(32, '032', '2022-02-17', '2022-02-17', '032/SK.02/II/2022', '02', '', 'SDM', 'Penetapan AO Senior Muhammad', '', '', 'SK', NULL),
(33, '033', '2022-02-17', '2022-02-17', '033/SK.02/II/2022', '02', '', 'SDM', 'Penetapan AO Lending Afix Rendra', '', '', 'SK', NULL),
(34, '034', '2022-02-17', '2022-02-17', '034/SK.01/II/2022', '01', 'Tabungan', 'Sekretaris', 'SOP Tabungan Bisnis Edisi II', '', '', 'SK', NULL),
(35, '035', '2022-02-17', '2022-02-17', '035/SK.03/II/2022', '03', '', 'Sekretaris', 'Penyesuaian RBB Tahun 2022', '', '', 'SK', NULL),
(36, '036', '2022-02-22', '2022-02-25', '036/SK.02/II/2022', '02', '', 'SDM', 'Mutasi Kepala Monitoring Surakarta', '', '', 'SK', NULL),
(37, '037', '2022-02-25', '2022-02-25', '037/SK.01/II/2022', '01', 'Tabungan', 'Sekretaris', 'SOP Tabungan Smart dan smart Pro Edisi IV', '08/24/2022', 'a. SK Direksi No. 002/SK.Dir/DpTb/II/2018       b. SE Direksi No. 002/SE.Dir/BPR.WM/II/2018', 'SK', NULL),
(38, '038', '2022-02-25', '2022-02-25', '038/SK.01/II/2022', '01', 'Tabungan', 'Sekretaris', 'Hadiah, Provisi, Insentif dan LTV Tabungan Smart', '', '', 'SK', NULL),
(39, '039', '2022-02-25', '2022-02-25', '039/SK.01/II/2022', '01', 'Layanan', 'Sekretaris', 'SOP FAR', '', '', 'SK', NULL),
(40, '040', '2022-03-01', '2022-03-07', '040/SK.02/III/2022', '02', '', 'SDM', 'Mutasi Sdr. Mangara Asido sebagai Kepala Kas Gang Besen', '', '', 'SK', NULL),
(41, '041', '2022-03-04', '2022-03-04', '041/SK.01/III/2022', '01', 'Layanan ', 'Sekretaris', 'SOP AAR', '', '', 'SK', NULL),
(42, '042', '2022-03-04', '2022-03-04', '042/SK.02/III/2022', '02', '', 'SDM', 'Surat Teguran 1', '', '', 'SK', NULL),
(43, '043', '2022-03-04', '2022-03-04', '043/SK.02/III/2022', '02', '', 'SDM', 'Surat Teguran 2', '', '', 'SK', NULL),
(44, '044', '2022-03-04', '2022-03-04', '044/SK.02/III/2022', '02', '', 'SDM', 'Surat Teguran 3', '', '', 'SK', NULL),
(45, '045', '2022-03-04', '2022-03-04', '045/SK.02/III/2022', '02', '', 'SDM', 'Surat Peringatan I', '', '', 'SK', NULL),
(46, '046', '2022-03-04', '2022-03-04', '046/SK.02/III/2022', '02', '', 'SDM', 'Surat Peringatan II', '', '', 'SK', NULL),
(47, '047', '2022-03-11', '2022-03-11', '047/SK.01/III/2022', '01', 'Layanan', 'Sekretaris', 'SOP CMO', '', '', 'SK', NULL),
(48, '048', '2022-03-11', '2022-03-11', '048/SK.01/III/2022', '01', '', 'Sekretaris', 'Daftar Formulir dan Dokumen Rsmi Perusahaan', '', '', 'SK', NULL),
(49, '049', '2022-03-15', '2022-03-29', '049/SK.02/III/2022', '02', '', 'SDM', 'Mutasi Novian Agung Analis Pati', '', '', 'SK', NULL),
(50, '050', '2022-03-15', '2022-03-29', '050/SK.02/III/2022', '02', '', 'SDM', 'Mutasi Novian Agung nalis Pati', '', '', 'SK', NULL),
(51, '051', '2022-03-15', '2022-03-29', '051/SK.02/III/2022', '02', '', 'SDM', 'Mutasi Septian Adi AMU Pati', '', '', 'SK', NULL),
(52, '052', '2022-03-18', '2022-03-21', '052/SK.03/III/2022', '03', '', 'Sekretaris', 'Kewenangan Persetujuan Transaksi dan Pembayaran Biaya Operasional', '08/08/2022', 'SK Direksi No. 012/SK.Dir/UM/IV/2021 ', 'SK', NULL),
(53, '053', '2022-03-25', '2022-03-29', '053/SK.02/III/2022', '02', '', 'SDM', 'Kepala Bisnis Area Pati P Siswanto', '', '', 'SK', NULL),
(54, '054', '2022-04-01', '2022-04-04', '054/SK.03/IV/2022', '03', '', 'Sekretaris', 'Standardisasi Stempel Kantor Kas', '', '', 'SK', NULL),
(55, '055', '2022-04-12', '2022-04-12', '055/SK.02/IV/2022', '02', '', 'SDM', 'Surat Peringatan I', '', '', 'SK', NULL),
(56, '056', '2022-04-12', '2022-04-12', '056/SK.02/IV/2022', '02', '', 'SDM', 'Surat Peringatan II', '', '', 'SK', NULL),
(57, '057', '2022-04-12', '2022-04-12', '057/SK.02/IV/2022', '02', '', 'SDM', 'Surat Teguran I', '', '', 'SK', NULL),
(58, '058', '2022-04-20', '2022-04-20', '058/SK.02/IV/2022', '02', '', 'SDM', 'Kenaikan Golongan Jabatan AO Rifqy Hazimy', '', '', 'SK', NULL),
(59, '059', '2022-04-21', '2022-04-21', '059/SK.02/IV/2022', '02', '', 'SDM', 'Surat Teguran 1', '', '', 'SK', NULL),
(60, '060', '2022-04-21', '2022-04-21', '060/SK.02/IV/2022', '02', '', 'SDM', 'Surat Teguran 2', '', '', 'SK', NULL),
(61, '061', '2022-04-21', '2022-04-21', '061/SK.02/IV/2022', '02', '', 'SDM', 'Surat Teguran 3', '', '', 'SK', NULL),
(62, '062', '2022-04-21', '2022-04-21', '062/SK.02/IV/2022', '02', '', 'SDM', 'Surat Peringatan 1', '', '', 'SK', NULL),
(63, '063', '2022-04-21', '2022-04-21', '063/SK.02/IV/2022', '02', '', 'SDM', 'Surat Peringatan 2', '', '', 'SK', NULL),
(64, '064', '2022-04-21', '2022-04-21', '064/SK.02/IV/2022', '02', '', 'SDM', 'Surat Peringatan 3', '', '', 'SK', NULL),
(65, '065', '2022-04-22', '2022-04-25', '065/SK.01/IV/2022', '01', 'Kredit', 'Sekretaris', 'Perubahan Suku Bunga Kredit, Porvisi dan Administrasi Kredit', '', 'SK Direksi No. 018/SK.Dir/KRD/XII/2021', 'SK', NULL),
(66, '066', '2022-05-11', '2022-05-11', '066/SK.02/V/2022', '02', '', 'SDM', 'Kepala Kas Kaliwungu P Ali', '', '', 'SK', NULL),
(67, '067', '2022-04-26', '2022-04-26', '067/SK.02/IV/2022', '02', '', 'SDM', 'Struktur Organisasi', '09/01/2022', '', 'SK', NULL),
(68, '068', '2022-04-26', '2022-04-26', '068/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. Syaifur Rokhman', '', '', 'SK', NULL),
(69, '069', '2022-04-26', '2022-04-26', '069/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. RM Dwi Chandra', '', '', 'SK', NULL),
(70, '070', '2022-04-26', '2022-04-26', '070/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. Fadjar Hidajat', '', '', 'SK', NULL),
(71, '071', '2022-04-26', '2022-04-26', '071/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Ibu Esti Widiyaningrum', '', '', 'SK', NULL),
(72, '072', '2022-04-26', '2022-04-26', '072/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. M Sri Tulus', '', '', 'SK', NULL),
(73, '073', '2022-04-26', '2022-04-26', '073/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. Gideon A P', '', '', 'SK', NULL),
(74, '074', '2022-04-26', '2022-04-26', '074/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. Joko Susanto', '', '', 'SK', NULL),
(75, '075', '2022-04-26', '2022-04-26', '075/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. M Rohadi', '', '', 'SK', NULL),
(76, '076', '2022-05-11', '2022-05-11', '076/SK.02/V/2022', '02', '', 'SDM', 'Kepala AO Kudus P Kris', '', '', 'SK', NULL),
(77, '077', '2022-05-17', '2022-05-18', '077/SK.03/V/2022', '03', '', 'Sekretaris', 'Standardisasi Stempel Pusat dan Cabang', '', '', 'SK', NULL),
(78, '078', '2022-05-17', '2022-05-17', '078/SK.02/V/2022', '02', '', 'SDM', 'Pengangkatan Tetap Zamhar Arifin', '', '', 'SK', NULL),
(79, '079', '2022-05-17', '2022-05-17', '079/SK.02/V/2022', '02', '', 'SDM', 'Kenaikan Golongan Zamhar Arifin', '', '', 'SK', NULL),
(80, '080', '2022-05-24', '2022-05-24', '080/SK.02/V/2022', '02', '', 'SDM', 'Surat Teguran I', '', '', 'SK', NULL),
(81, '081', '2022-05-24', '2022-05-24', '081/SK.02/V/2022', '02', '', 'SDM', 'Surat Teguran 2', '', '', 'SK', NULL),
(82, '082', '2022-05-24', '2022-05-24', '082/SK.02/V/2022', '02', '', 'SDM', 'Surat Teguran 3', '', '', 'SK', NULL),
(83, '083', '2022-05-24', '2022-05-24', '083/SK.02/V/2022', '02', '', 'SDM', 'Surat Peringatan 1', '', '', 'SK', NULL),
(84, '084', '2022-05-24', '2022-05-24', '084/SK.02/V/2022', '02', '', 'SDM', 'Surat Peringatan 2', '', '', 'SK', NULL),
(85, '085', '2022-05-24', '2022-05-24', '085/SK.02/V/2022', '02', '', 'SDM', 'Surat Peringatan 3', '', '', 'SK', NULL),
(86, '086', '2022-06-07', '2022-06-07', '086/SK.02/VI/2022', '02', '', 'SDM', 'Naik Golongan Apix Rendra Lending ke Senior', '', '', 'SK', NULL),
(87, '087', '2022-06-07', '2022-06-07', '087/SK.02/VI/2022', '02', '', 'SDM', 'Naik Golongan Irwan Setyawan Hunter ke Lending', '', '', 'SK', NULL),
(88, '088', '2022-06-07', '2022-06-26', '088/SK.02/VI/2022', '02', '', 'SDM', 'Pegawai Tetap Afix', '', '', 'SK', NULL),
(89, '089', '2022-06-13', '2022-06-13', '089/SK.02/VI/2022', '02', '', 'SDM', 'Teguran 1', '', '', 'SK', NULL),
(90, '090', '2022-06-13', '2022-06-13', '090/SK.02/VI/2022', '02', '', 'SDM', 'Teguran 2', '', '', 'SK', NULL),
(91, '091', '2022-06-13', '2022-06-13', '091/SK.02/VI/2022', '02', '', 'SDM', 'Peringatan 1', '', '', 'SK', NULL),
(92, '092', '2022-06-13', '2022-06-13', '092/SK.02/VI/2022', '02', '', 'SDM', 'Peringatan 2', '', '', 'SK', NULL),
(93, '093', '2022-06-13', '2022-06-13', '093/SK.02/VI/2022', '02', '', 'SDM', 'Peringatan 3', '', '', 'SK', NULL),
(94, '094', '2022-06-20', '2022-06-20', '094/SK.03/VI/2022', '03', '', 'Sekretaris', 'RBB Perubahan', '', '', 'SK', NULL),
(95, '095', '2022-06-22', '2022-06-22', '095/SK.02/VI/2022', '02', '', 'SDM', 'Surat Teguran AO Sragen', '', '', 'SK', NULL),
(96, '096', '2022-06-22', '2022-06-22', '096/SK.02/VI/2022', '02', '', 'SDM', 'Surat Teguran Analis Sragen', '', '', 'SK', NULL),
(97, '097', '2022-06-22', '2022-06-22', '097/SK.02/VI/2022', '02', '', 'SDM', 'Surat Teguran Kepala Cabang Sragen', '', '', 'SK', NULL),
(98, '098', '2022-07-05', '2022-07-18', '098/SK.01/VII/2022', '01', 'Layanan', 'Sekretaris', 'SOP Transfer dan Pemindahbukuan Online Edisi II', '', 'a. SK Direksi No. 030/SK.Dir/UM/XII/2020                b. 017/Memo.01/IV/2022', 'SK', NULL),
(99, '099', '2022-07-07', '2022-07-07', '099/SK.02/VII/2022', '02', '', 'HC', 'Surat Teguran 1 AO', '', '', 'SK', NULL),
(100, '100', '2022-07-07', '2022-07-07', '100/SK.02/VII/2022', '02', '', 'HC', 'Surat Teguran 3 AO', '', '', 'SK', NULL),
(101, '101', '2022-07-07', '2022-07-07', '101/SK.02/VII/2022', '02', '', 'HC', 'Surat Peringatan 2 AO', '', '', 'SK', NULL),
(102, '102', '2022-07-07', '2022-07-07', '102/SK.02/VII/2022', '02', '', 'HC', 'Surat Teguran 1 Sugeng Riadi', '', '', 'SK', NULL),
(103, '103', '2022-07-07', '2022-07-07', '103/SK.02/VII/2022', '02', '', 'HC', 'Surat Teguran 1 Hermin', '', '', 'SK', NULL),
(104, '104', '2022-07-26', '2022-07-26', '104/SK.02/VII/2022', '02', '', 'HC', 'Struktur Organisasi Kas', '', '', 'SK', NULL),
(105, '105', '2022-07-14', '2022-08-01', '105/SK.02/VII/2022', '02', '', 'HC', 'Mutasi Sdr. Anita Yulianti', '', '', 'SK', NULL),
(106, '106', '2022-07-22', '2022-07-22', '106/SK.02/VII/2022', '02', '', 'HC', 'Kenaikan Golongan Sdr. Siswanto', '', '', 'SK', NULL),
(107, '107', '2022-07-29', '2022-08-01', '107/SK.03/VII/2022', '03', '', 'Sekretaris', 'Kewenangan Persetujuan Transaksi dan Pembayaran Biaya Operasional', '', 'SK Direksi No. 052/SK.03/III/2022', 'SK', NULL),
(108, '108', '2022-08-03', '2022-08-03', '108/SK.02/VIII/2022', '02', '', 'HC', 'Surat Peringatan atas Kinerja Maret-Juli Sdr. Mudji Nugroho', '', '', 'SK', NULL),
(109, '109', '2022-08-04', '2022-08-04', '109/SK.02/VIII/2022', '02', '', 'HC', 'Surat Teguran 2', '', '', 'SK', NULL),
(110, '110', '2022-08-04', '2022-08-04', '110/SK.02/VIII/2022', '02', '', 'HC', 'Surat Teguran 3', '', '', 'SK', NULL),
(111, '111', '2022-08-04', '2022-08-04', '111/SK.02/VIII/2022', '02', '', 'HC', 'Surat Peringatan 3', '', '', 'SK', NULL),
(112, '112', '2022-08-04', '2022-08-04', '112/SK.02/VIII/2022', '02', '', 'HC', 'Surat Peringatan 1', '', '', 'SK', NULL),
(113, '113', '2022-08-15', '2022-08-19', '113/SK.02/VIII/2022', '02', '', 'HC', 'Penetapan Tetap Sdr. Ferra ', '', '', 'SK', NULL),
(114, '114', '2022-08-22', '2022-08-22', '114/SK.03/VIII/2022', '03', '', 'Sekretaris', 'Penetapan Limit Risiko', '', '', 'SK', NULL),
(115, '115', '2022-08-23', '2022-08-24', '115/SK.01/VIII/2022', '01', 'Tabungan', 'Sekretaris', 'SOP Tabungan Smart dan smart Pro Edisi V', '', 'a. SK Direksi No. 037/SK.01/II/2022             b.Memo Intern No. 034/Memo.01/VII/2022', 'SK', NULL),
(116, '116', '2022-08-24', '2022-08-25', '116/SK.01/VIII/2022', '01', 'Layanan', 'Sekretaris', 'SOP Virtual Account Edisi II', '', 'SK Direksi No. 001/SK.Dir/UM/II/2021', 'SK', NULL),
(117, '117', '2022-08-31', '2022-09-01', '117/SK.02/VIII/2022', '02', '', 'HC', 'Struktur Organisasi', '', 'SK Direksi No. 067/SK.02/IV/2022', 'SK', NULL),
(118, '118', '2022-08-30', '2022-09-02', '118/SK.02/VIII/2022', '02', '', 'HC', 'Penetapan Pegawai Tetap Hermin', '', '', 'SK', NULL),
(119, '001', '0000-00-00', '0000-00-00', '001/SK.02/II/2022', '01', 'Layanan', 'SDM', 'Analisis Kebutahan SDM', '', '', 'SE', 'Memo Intern Nomor_009 Memo.01_III_2022_perihal_Kebijakan_Perkreditan_Terkait_Sertifikat_Hak_Guna_Bangunan.pdf'),
(120, '002', '2022-03-29', '2022-04-01', '002/SK.01/III/2022', '01', 'Kredit', 'Sekretaris', 'Perubahan SE Direksi 007 2022 GP 150', '', '', 'SE', NULL),
(121, '003', '2022-04-07', '2022-04-18', '003/SK.02/IV/2022', '02', '', 'SDM', 'THR 1 2022 Karyawan', '', '', 'SE', NULL),
(122, '004', '2022-04-07', '2022-04-18', '004/SK.02/IV/2022', '02', '', 'SDM', 'THR 1 2022 Karyawan', '', '', 'SE', NULL),
(123, '005', '2022-05-30', '2022-06-02', '005/SK.01/VI/2022', '01', 'Kredit', 'Sekretaris', 'Kredit Promo Ekstra 69', '11/28/2022', '', 'SE', NULL),
(124, '006', '2022-05-30', '2022-06-02', '006/SK.01/VI/2022', '03', 'Kredit', 'Sekretaris', 'Kompetisi Perkreditan GP 150', '11/28/2022', '', 'SE', 'Memo_Intern_Nomor_008_Memo.01III2022_perihal_Kewajiban_Pengurusan_Perpanjangan_Hak_Guna_Bangunan_(HGB)_pada_Agunan_Sertifikat_Hak_Guna_Bangunan_(SHGB).pdf'),
(125, '001', '2021-01-03', '2021-01-03', '001/Memo.03/I/2022', '03', '', 'SKKMR', 'Anggaran Bsinis 2022', '', '', 'MEMO', NULL),
(126, '002', '2021-01-07', '2021-01-07', '002/Memo.02/I/2022', '02', '', 'SDM', 'Best Employee Best Branch', '', '', 'MEMO', NULL),
(127, '003', '2021-01-28', '2021-01-28', '003/Memo.02/I/2022', '02', '', 'SDM', 'Employee Gathering', '', '', 'MEMO', NULL),
(128, '004', NULL, NULL, '004/Memo.02/II/2022', '02', '', 'SDM', 'Surat Teguran Peringatan Online', '', '', 'MEMO', NULL),
(129, '005', '2022-02-14', '2022-02-14', '005/Memo.03/II/2022', '03', '', 'Sekretaris', 'Kebijakan WFH Covid-19 Omricon', '', '', 'MEMO', NULL),
(130, '006', '2022-03-01', '2022-03-01', '006/Memo.03/III/2022', '03', '', 'Sekretaris', 'Reward Target Realisasi Individu Kantor Kas dan AO', '', '', 'MEMO', NULL),
(131, '007', '2022-03-04', '2022-03-04', '007/Memo.03/III/2022', '03', '', 'Sekretaris', 'Hasil Kompetisi GP150 Seri I', '', '', 'MEMO', NULL),
(132, '008', '2022-03-11', '2022-03-11', '008/Memo.01/III/2022', '01', 'Kredit', 'Sekretaris', 'Kewajiban Pengurusan Perpanjangan HGB pada Agunan Sertifikat HGB', '', '', 'MEMO', NULL),
(133, '009', '2022-03-14', '2022-03-15', '009/Memo.01/III/2022', '01', 'Kredit', 'Sekretaris', 'Kebijakan Kredit terkait SHGB', '', '', 'MEMO', NULL),
(134, '010', '2022-03-15', '2022-03-15', '010/Memo.03/III/2022', '03', 'Penyesuaian', 'Sekretaris', 'Revisi Area Pemasaran', '07/01/2022', '', 'MEMO', 'SEKAR_WEB__BPR_WM.pdf|Notulen_Direksi_31_Mei_2022_1_(1).pdf|Notulen_Direksi_31_Mei_2022_1.pdf'),
(135, '011', '2022-03-17', '2022-03-18', '011/Memo.03/III/2022', '03', '', 'Sekretaris', 'Petugas SLIK dan Tata Cara Permintaan Infromasi Debitur', '', 'a. Memo Intern No. 009/Memo.WMSmg/III/2020 b. Memo Intern No. 058/Memo.WMSmg/VIII/2020              ', 'MEMO', NULL),
(136, '012', '2022-03-31', '2022-04-01', '012/Memo.01/III/2022', '01', 'Deposito', 'Sekretaris', 'Program Promo Dana Bundling', '', '', 'MEMO', NULL),
(137, '013', '2022-04-06', '2022-04-06', '013/Memo.03/IV/2022', '03', '', 'Sekretaris', 'Kebijakan Mengembangkan Budaya Sadar Risiko', '', '', 'MEMO', NULL),
(138, '014', '2022-04-07', '2022-04-07', '014/Memo.03/IV/2022', '03', '', 'Sekretaris', 'Program Bagi Takjil Ramadhan Grartis Pati', '', '', 'MEMO', NULL),
(139, '015', '2022-04-13', '2022-04-13', '015/Memo.03/IV/2022', '03', '', 'Sekretaris', 'Pengecualian Laporan Identifikasi Risiko', '', '', 'MEMO', NULL),
(140, '016', '2022-04-22', '2022-04-25', '016/Memo.03/IV/2022', '03', '', 'Sekretaris', 'Kebijakan Uang Muka Untuk Kegiatan Operasional', '', '', 'MEMO', NULL),
(141, '017', '2002-04-27', '2022-04-28', '017/Memo.01/IV/2022', '01', 'Layanan', 'Sekretaris', 'Kebijakan Konfirmasi Nasabah pada Program klikwm.com', '07/18/2022', '', 'MEMO', NULL),
(142, '018', '2022-05-09', '2022-05-09', '018/Memo.01/V/2022', '01', 'Deposito', 'Sekretaris', 'Promo Dana Bundling', '05/31/2022', '', 'MEMO', NULL),
(143, '019', '2022-05-20', '2022-05-23', '019/Memo.03/V/2022', '03', '', 'Sekretaris', 'Kebijakan Memakai Masker', '', '', 'MEMO', NULL),
(144, '020', '2022-06-02', '2022-06-02', '020/Memo.01/VI/2022', '01', 'Kredit', 'Sekretaris', 'Kebijakan Prosedur Permohonan Kredit', '', '', 'MEMO', NULL),
(145, '021', '2022-06-06', '2022-06-02', '021/Memo.01/VI/2022', '01', 'Deposito', 'Sekretaris', 'Promo Program Bundling', '06/30/2022', '', 'MEMO', NULL),
(146, '022', '2022-06-06', '2022-06-06', '022/Memo.03/VI/2022', '03', '', 'Sekretaris', 'Hasil Kompetisi GP150 Seri II', '', '', 'MEMO', NULL),
(147, '023', '2022-06-13', '2022-06-13', '023/Memo.01/VI/2022', '01', 'Kredit', 'Sekretaris', 'Kebijakan Pemeriksaan Program Kredit', '', '', 'MEMO', NULL),
(148, '024', '2022-06-21', '2022-07-01', '024/Memo.03/VI/2022', '03', '', 'Sekretaris', 'Kebijakan Wajib Meeting Koordinasi Bulanan', '', '', 'MEMO', NULL),
(149, '025', '2022-06-28', '2022-06-29', '025/Memo.01/VI/2022', '01', 'Layanan', 'Sekretaris', 'Kebijakan Biaya Administrasi Jasa Layanan Bank', '', '', 'MEMO', NULL),
(150, '026', '2022-06-29', '2022-07-01', '026/Memo.01/VI/2022', '01', 'Kredit', 'Sekretaris', 'Kebijakan Pencairan Kredit Jelang Akhir Bulan', '', '', 'MEMO', NULL),
(151, '027', '2022-06-28', '2022-06-28', '027/Memo.03/VI/2022', '03', '', 'Sekretaris', 'Pakta Integritas', '', '', 'MEMO', NULL),
(152, '028', '2022-07-06', '2022-07-06', '028/Memo.03/VII/2022', '03', '', 'Sekretaris', 'Penetapan Laporan Identifikasi Risiko Inhern Terbaik Mei 22022', '', '', 'MEMO', NULL),
(153, '029', '2022-07-18', '2022-07-18', '029/Memo.01/VII/2022', '01', 'Kredit', 'Sekretaris', 'Kebijakan Plafon Minimal Pengajuan Online', '', 'Memo Intern No. 050/Memo.WMSmg/X/2021', 'MEMO', NULL),
(154, '030', '2022-07-18', '2022-07-19', '030/Memo.01/VII/2022', '01', 'Kredit', 'Sekretaris', 'Formulir Aplikasi Permohonan Kredit', '', '', 'MEMO', NULL),
(155, '031', '2022-07-19', '2022-07-20', '031/Memo.01/VII/2022', '01', 'Deposito', 'Sekretaris', 'Formulir Aplikasi Pembukaan Deposito', '', 'Memo Intern No. 042/MEMO/WM SMG/VIII/2018', 'MEMO', NULL),
(156, '032', '2022-07-19', '2022-07-20', '031/Memo.01/VII/2022', '01', 'Tabungan', 'Sekretaris', 'Formulir Aplikasi Pembukaan Tabungan', '', '', 'MEMO', NULL),
(157, '033', '2022-07-25', '2022-07-25', '033/Memo.03/VII/2022', '03', '', 'Sekretaris', 'Prosedur Backup Data dan Permohonan Pembukaan Rekaman CCTV', '', '', 'MEMO', NULL),
(158, '034', '2022-07-28', '2022-07-28', '034/Memo.01/VII/2022', '01', 'Tabungan', 'Sekretaris', 'Penghentian Sementara Pemasaran Tabungan Smart dan Smart Pro', '08/24/2022', '', 'MEMO', NULL),
(159, '035', '2022-07-29', '2022-08-01', '035/Memo.03/VII/2022', '03', '', 'Sekretaris', 'Revisi Area Pemasaran', '', 'Memo Intern No. 010/Memo.03/III/2022', 'MEMO', NULL),
(160, '036', '2022-08-12', '2022-08-12', '036/Memo.02/VIII/2022', '02', '', 'HC', 'Sistem Kenaikan Golongan Karyawan 2022', '', '', 'MEMO', NULL),
(161, '037', '2022-08-25', '2022-08-25', '037/Memo.01/VIII/2022', '01', 'Layanan', 'Sekretaris', 'Kebijakan Biaya Administrasi Virtual Account dan Cashback', '', '', 'MEMO', NULL),
(162, '038', '2022-08-31', '2022-08-31', '038/Memo.03/VIII/2022', '03', '', 'Sekretaris', '5 Prinsip Tata Kerja Wmers', '', '', 'MEMO', NULL),
(163, '119', '2022-09-15', '2022-09-22', '119/SK.02/IX/2022', '022', 'Surat Teguran/PeringatanStruktur Organisasi', '2', 'qwdsqwdqwdqwdqwd', '', '', 'SK', '0232_16062021_OJK_perihal_Pengenaan_Sanksi_SLIK_periode_Nov_sd_Desember_2020.pdf'),
(164, '007', '2022-09-21', '2022-09-15', '007/SK.02/IX/2022', '01', 'Tabungan', 'SDM', 'Mutasi A/n.', '', '', 'SE', 'Memo_Intern_No._032_Memo.01_VII_2022_perihal_Penetapan_Formulir_Aplikasi_Pembukaan_Tabungan.pdf'),
(165, '008', '2022-09-21', '2022-09-23', '008/SK.02/IX/2022', '02', 'Promosi/Demosi/Mutasi', 'SDM', 'Mutasi', '', '', 'SE', ''),
(166, '009', '2022-09-21', '2022-09-24', '009/SK.02/IX/2022', '02', 'Surat Teguran/Peringatan', 'SDM', 'BARU', '', '', 'SE', ''),
(167, '010', '0000-00-00', '0000-00-00', '010/SK./IX/2022', '02', 'Tabungan', 'SDM', 'wsw', '', '', 'SE', ''),
(168, '011', '2022-09-24', '2022-09-05', '011/SK.03/IX/2022', '03', 'Layanan', 'SEKERTARIS', 'BARU', '', '', 'SE', ''),
(169, '012', '2022-09-06', '2022-09-22', '012/SK.02/IX/2022', '03', 'Tabungan', 'SEKERTARIS', 'wewwerf', '', '001/SK.02/I/2022 | 003/SK.02/I/2022 | 004/SK.02/I/2022', 'SE', ''),
(170, '120', '2022-10-11', '2022-10-15', '120/SK.03/X/2022', '03', 'Layanan', 'SEKERTARIS', 'Pencabutan', '', '001/SK.02/I/2022 | 002/SK.02/I/2022', 'SK', ''),
(171, '121', '2022-10-11', '2022-10-15', '121/SK.02/X/2022', '02', 'Surat Teguran/Peringatan', 'SDM', 'Pencabutan 2', '', '001/SK.02/I/2022', 'SK', ''),
(172, '122', '2022-10-11', '2022-10-14', '122/SK.03/X/2022', '03', 'Standarisasi', 'SEKERTARIS', 'Pembaruan SK', '', '002/SK.02/I/2022', 'SK', '');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `id_bidang`, `nama_jabatan`) VALUES
(1, 1, 'Direktur Utama'),
(2, 2, 'Direktur Operasional');

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

-- --------------------------------------------------------

--
-- Table structure for table `kode_srt`
--

CREATE TABLE `kode_srt` (
  `id_kode` int(11) NOT NULL,
  `kode_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kode_srt`
--

INSERT INTO `kode_srt` (`id_kode`, `kode_surat`) VALUES
(1, '01'),
(2, '02'),
(3, '03');

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE `memo` (
  `id` int(11) NOT NULL,
  `no_mem` varchar(100) NOT NULL,
  `tbt_mem` date NOT NULL,
  `blk_mem` varchar(100) NOT NULL,
  `surat_mem` varchar(100) NOT NULL,
  `kode_mem` varchar(100) NOT NULL,
  `jen_mem` varchar(100) NOT NULL,
  `div_mem` varchar(100) NOT NULL,
  `hal_mem` varchar(100) NOT NULL,
  `dic_mem` varchar(100) NOT NULL,
  `menc_mem` varchar(100) NOT NULL,
  `file_memo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`id`, `no_mem`, `tbt_mem`, `blk_mem`, `surat_mem`, `kode_mem`, `jen_mem`, `div_mem`, `hal_mem`, `dic_mem`, `menc_mem`, `file_memo`) VALUES
(1, '001', '2021-01-03', '01/03/2021', '001/Memo.03/I/2022', '03', '', 'SKKMR', 'Anggaran Bsinis 2022', '', '', NULL),
(2, '002', '2021-01-07', '01/07/2021', '002/Memo.02/I/2022', '02', '', 'SDM', 'Best Employee Best Branch', '', '', NULL),
(3, '003', '2021-01-28', '01/28/2021', '003/Memo.02/I/2022', '02', '', 'SDM', 'Employee Gathering', '', '', NULL),
(4, '004', '0000-00-00', '', '004/Memo.02/II/2022', '02', '', 'SDM', 'Surat Teguran Peringatan Online', '', '', NULL),
(5, '005', '2022-02-14', '02/14/2022', '005/Memo.03/II/2022', '03', '', 'Sekretaris', 'Kebijakan WFH Covid-19 Omricon', '', '', NULL),
(6, '006', '2022-03-01', '03/01/2022', '006/Memo.03/III/2022', '03', '', 'Sekretaris', 'Reward Target Realisasi Individu Kantor Kas dan AO', '', '', NULL),
(7, '007', '2022-03-04', '03/04/2022', '007/Memo.03/III/2022', '03', '', 'Sekretaris', 'Hasil Kompetisi GP150 Seri I', '', '', NULL),
(8, '008', '2022-03-11', '03/11/2022', '008/Memo.01/III/2022', '01', 'Kredit', 'Sekretaris', 'Kewajiban Pengurusan Perpanjangan HGB pada Agunan Sertifikat HGB', '', '', NULL),
(9, '009', '2022-03-14', '03/15/2022', '009/Memo.01/III/2022', '01', 'Kredit', 'Sekretaris', 'Kebijakan Kredit terkait SHGB', '', '', NULL),
(10, '010', '2022-03-15', '03/15/2022', '010/Memo.03/III/2022', '03', '', 'Sekretaris', 'Revisi Area Pemasaran', '07/01/2022', '', NULL),
(11, '011', '2022-03-17', '03/18/2022', '011/Memo.03/III/2022', '03', '', 'Sekretaris', 'Petugas SLIK dan Tata Cara Permintaan Infromasi Debitur', '', 'a. Memo Intern No. 009/Memo.WMSmg/III/2020 b. Memo Intern No. 058/Memo.WMSmg/VIII/2020              ', NULL),
(12, '012', '2022-03-31', '04/01/2022', '012/Memo.01/III/2022', '01', 'Deposito', 'Sekretaris', 'Program Promo Dana Bundling', '', '', NULL),
(13, '013', '2022-04-06', '04/06/2022', '013/Memo.03/IV/2022', '03', '', 'Sekretaris', 'Kebijakan Mengembangkan Budaya Sadar Risiko', '', '', NULL),
(14, '014', '2022-04-07', '04/07/2022', '014/Memo.03/IV/2022', '03', '', 'Sekretaris', 'Program Bagi Takjil Ramadhan Grartis Pati', '', '', NULL),
(15, '015', '2022-04-13', '04/13/2022', '015/Memo.03/IV/2022', '03', '', 'Sekretaris', 'Pengecualian Laporan Identifikasi Risiko', '', '', NULL),
(16, '016', '2022-04-22', '04/25/2022', '016/Memo.03/IV/2022', '03', '', 'Sekretaris', 'Kebijakan Uang Muka Untuk Kegiatan Operasional', '', '', NULL),
(17, '017', '2002-04-27', '04/28/2022', '017/Memo.01/IV/2022', '01', 'Layanan', 'Sekretaris', 'Kebijakan Konfirmasi Nasabah pada Program klikwm.com', '07/18/2022', '', NULL),
(18, '018', '2022-05-09', '05/09/2022', '018/Memo.01/V/2022', '01', 'Deposito', 'Sekretaris', 'Promo Dana Bundling', '05/31/2022', '', NULL),
(19, '019', '2022-05-20', '05/23/2022', '019/Memo.03/V/2022', '03', '', 'Sekretaris', 'Kebijakan Memakai Masker', '', '', NULL),
(20, '020', '2022-06-02', '06/02/2022', '020/Memo.01/VI/2022', '01', 'Kredit', 'Sekretaris', 'Kebijakan Prosedur Permohonan Kredit', '', '', NULL),
(21, '021', '2022-06-06', '06/02/2022', '021/Memo.01/VI/2022', '01', 'Deposito', 'Sekretaris', 'Promo Program Bundling', '06/30/2022', '', NULL),
(22, '022', '2022-06-06', '06/06/2022', '022/Memo.03/VI/2022', '03', '', 'Sekretaris', 'Hasil Kompetisi GP150 Seri II', '', '', NULL),
(23, '023', '2022-06-13', '06/13/2022', '023/Memo.01/VI/2022', '01', 'Kredit', 'Sekretaris', 'Kebijakan Pemeriksaan Program Kredit', '', '', NULL),
(24, '024', '2022-06-21', '07/01/2022', '024/Memo.03/VI/2022', '03', '', 'Sekretaris', 'Kebijakan Wajib Meeting Koordinasi Bulanan', '', '', NULL),
(25, '025', '2022-06-28', '06/29/2022', '025/Memo.01/VI/2022', '01', 'Layanan', 'Sekretaris', 'Kebijakan Biaya Administrasi Jasa Layanan Bank', '', '', NULL),
(26, '026', '2022-06-29', '07/01/2022', '026/Memo.01/VI/2022', '01', 'Kredit', 'Sekretaris', 'Kebijakan Pencairan Kredit Jelang Akhir Bulan', '', '', NULL),
(27, '027', '2022-06-28', '06/28/2022', '027/Memo.03/VI/2022', '03', '', 'Sekretaris', 'Pakta Integritas', '', '', NULL),
(28, '028', '2022-07-06', '07/06/2022', '028/Memo.03/VII/2022', '03', '', 'Sekretaris', 'Penetapan Laporan Identifikasi Risiko Inhern Terbaik Mei 22022', '', '', NULL),
(29, '029', '2022-07-18', '07/18/2022', '029/Memo.01/VII/2022', '01', 'Kredit', 'Sekretaris', 'Kebijakan Plafon Minimal Pengajuan Online', '', 'Memo Intern No. 050/Memo.WMSmg/X/2021', NULL),
(30, '030', '2022-07-18', '07/19/2022', '030/Memo.01/VII/2022', '01', 'Kredit', 'Sekretaris', 'Formulir Aplikasi Permohonan Kredit', '', '', NULL),
(31, '031', '2022-07-19', '07/20/2022', '031/Memo.01/VII/2022', '01', 'Deposito', 'Sekretaris', 'Formulir Aplikasi Pembukaan Deposito', '', 'Memo Intern No. 042/MEMO/WM SMG/VIII/2018', NULL),
(32, '032', '2022-07-19', '07/20/2022', '031/Memo.01/VII/2022', '01', 'Tabungan', 'Sekretaris', 'Formulir Aplikasi Pembukaan Tabungan', '', '', NULL),
(33, '033', '2022-07-25', '07/25/2022', '033/Memo.03/VII/2022', '03', '', 'Sekretaris', 'Prosedur Backup Data dan Permohonan Pembukaan Rekaman CCTV', '', '', NULL),
(34, '034', '2022-07-28', '07/28/2022', '034/Memo.01/VII/2022', '01', 'Tabungan', 'Sekretaris', 'Penghentian Sementara Pemasaran Tabungan Smart dan Smart Pro', '08/24/2022', '', NULL),
(35, '035', '2022-07-29', '08/01/2022', '035/Memo.03/VII/2022', '03', '', 'Sekretaris', 'Revisi Area Pemasaran', '', 'Memo Intern No. 010/Memo.03/III/2022', NULL),
(36, '036', '2022-08-12', '08/12/2022', '036/Memo.02/VIII/2022', '02', '', 'HC', 'Sistem Kenaikan Golongan Karyawan 2022', '', '', NULL),
(37, '037', '2022-08-25', '08/25/2022', '037/Memo.01/VIII/2022', '01', 'Layanan', 'Sekretaris', 'Kebijakan Biaya Administrasi Virtual Account dan Cashback', '', '', NULL),
(38, '038', '2022-08-31', '08/31/2022', '038/Memo.03/VIII/2022', '03', '', 'Sekretaris', '5 Prinsip Tata Kerja Wmers', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nik`
--

CREATE TABLE `nik` (
  `id_nik` int(11) NOT NULL,
  `no_nik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nik`
--

INSERT INTO `nik` (`id_nik`, `no_nik`) VALUES
(1, '3374070401590001'),
(2, '3374094105570001'),
(3, '01-0575008'),
(4, '01-0761030'),
(5, '01-0174040'),
(6, '01-0175044'),
(7, '01-0370058'),
(8, '01-0371064'),
(9, '01-0379070'),
(10, '01-0578098'),
(11, '01-0567005'),
(12, '01-0382065'),
(13, '01-0683012'),
(14, '01-0779018'),
(15, '01-0786020'),
(16, '01-0780022'),
(17, '01-0781023'),
(18, '01-0377056'),
(19, '01-0883032'),
(20, '01-0985033'),
(21, '01-0978037'),
(22, '01-1082046'),
(23, '01-1086043'),
(24, '01-1081045'),
(25, '01-1084051'),
(26, '01-0482081'),
(27, '01-0181072'),
(28, '01-1188059'),
(29, '01-1185061'),
(30, '01-0884047'),
(31, '01-1181062'),
(32, '01-1188065'),
(33, '01-1185087'),
(34, '01-1186070'),
(35, '01-1285075'),
(36, '01-1182071'),
(37, '01-9979024'),
(38, '01-1287072'),
(39, '01-1286078'),
(40, '01-1265077'),
(41, '01-1285083'),
(42, '01-1283089'),
(43, '01-0573007'),
(44, '01-1379091'),
(45, '01-1389098'),
(46, '01-1388107'),
(47, '01-1182060'),
(48, '01-0168041'),
(49, '01-1486102'),
(50, '01-1388103'),
(51, '01-1491106'),
(52, '02-0169042'),
(53, '01-1586110'),
(54, '01-1591111'),
(55, '01-1591112'),
(56, '01-1186094'),
(57, '01-1383109'),
(58, '3325071407850004'),
(59, '01-0780017'),
(60, '05-0985036'),
(61, '01-1285080'),
(62, '01-0481089'),
(63, '01-0881029'),
(64, '01-1791113'),
(65, '02-0082050'),
(66, '02-0682013'),
(67, '02-0071025'),
(68, '02-0079052'),
(69, '02-1186043'),
(70, '02-9070004'),
(71, '02-9980017'),
(72, '02-8966003'),
(73, '02-1184046'),
(74, '02-1187044'),
(75, '02-1388051'),
(76, '02-1381049'),
(77, '02-1380050'),
(78, '01-0779034'),
(79, '02-1585056'),
(80, '03-9778009'),
(81, '01-1084040'),
(82, '02-1581054'),
(83, '02-1388052'),
(84, '02-1688053'),
(85, '01-0874031'),
(86, '03-0477077'),
(87, '03-1083093'),
(88, '03-1188094'),
(89, '03-1289096'),
(90, '03-1389097'),
(91, '03-1388098'),
(92, '03-0484080'),
(93, '03-0877090'),
(94, '03-1489099'),
(95, '01-0885088'),
(96, '03-1488100'),
(97, '01-1288081'),
(98, '01-1086050'),
(99, '03-0726001'),
(100, '03-1480103'),
(101, '03-1685102'),
(102, '03-1990101'),
(103, '3321081405860009'),
(104, '3319012304860003'),
(105, '99-0579006'),
(106, '99-1084042'),
(107, '99-0675009'),
(108, '99-0681011'),
(109, '99-1086052'),
(110, '99-1182037'),
(111, '99-1185035'),
(112, '99-1284038'),
(113, '99-1380041'),
(114, '99-1282039'),
(115, '99-0984029'),
(116, '99-1489042'),
(117, '99-1182032'),
(118, '99-1186036'),
(119, '99-1790043'),
(120, '01-0371060'),
(121, '05-1281002'),
(122, '05-1483004'),
(123, '99-0570000'),
(124, '05-1892005'),
(125, '01-0480076'),
(126, '01-1188056'),
(127, '06-1484002'),
(128, '06-1481004'),
(129, '3314052810880002 '),
(130, '06-1784006'),
(131, '01-1075059'),
(132, '01-1382092'),
(133, '07-1593001'),
(134, '3328185002820004'),
(135, '01-1890114'),
(136, '01-1892115'),
(137, '01-1594116'),
(138, '3374085507920001'),
(139, '3374061505920002'),
(140, '3321110702920002'),
(141, '3327123003940007'),
(142, '3311126211930002'),
(143, '07-1890003'),
(144, '3324094204940005'),
(145, '3324071907940004'),
(146, '3311082005880004'),
(147, '3314100506850001'),
(148, '3313113005880001'),
(149, '3374041510700004'),
(150, '01-1996119'),
(151, '3321012910930003'),
(152, '3328111212880002'),
(153, '3328152903830003'),
(154, '01-1981168'),
(155, '3319051302840002'),
(156, '3374112506860003'),
(157, '01-1994117'),
(158, '3376015107910002'),
(159, '3324141501930004'),
(160, '3324142605830001'),
(161, '3374112210580002'),
(162, '3372020909940003'),
(163, '3310260903900001'),
(164, '3320071008960004'),
(165, '3319020207840005'),
(166, '3319042303900002'),
(167, '3376031205930002'),
(168, '3372051806900005'),
(169, '3372040208870001'),
(170, '3374102704840005'),
(171, '3376020903860003'),
(172, '3374062206980006'),
(173, '3319051710860003'),
(174, '3311081204940003'),
(175, '3324121206860002'),
(176, '3314105511940002'),
(177, '3310182803970001'),
(178, '3324080501930001'),
(179, '3314106009960002'),
(180, '1771087108890001'),
(181, '3374050111800008'),
(182, '3328124605940003'),
(183, '3324166804000002'),
(184, '3374130607980004'),
(185, '3319054509980001'),
(186, '3319031612850004'),
(187, '3318182608960001'),
(188, '3320097006940001'),
(189, '3318152905930002'),
(190, '3318040912940001'),
(191, '3328150204870015'),
(192, '3321016903940007'),
(193, '3372042803860006'),
(194, '3310141011930004'),
(195, '3374086706990001'),
(196, '3374131009770007'),
(197, '3374132104970004'),
(198, '3374040303820001'),
(199, '3374100506990001'),
(200, '3324142211980001');

-- --------------------------------------------------------

--
-- Table structure for table `not_dekom`
--

CREATE TABLE `not_dekom` (
  `id_offline` int(11) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `tanggal` text NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `jam` time NOT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `agenda` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `not_dekom`
--

INSERT INTO `not_dekom` (`id_offline`, `hari`, `tanggal`, `tempat`, `jam`, `email`, `agenda`, `ket`, `jenis`) VALUES
(1, 'Selasa', '2022-10-10 - 2022-10-10', 'Ruang Meeting 3 Kantor Pusat Semarang', '08:30:00', 'Array', 'Rapat Kerja Rencana Bisnis 2023 Tahap 1', '', 'Offline');

-- --------------------------------------------------------

--
-- Table structure for table `not_dir`
--

CREATE TABLE `not_dir` (
  `id_online` int(11) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `tanggal` text NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `jam` time NOT NULL,
  `email` varchar(1000) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `not_dir`
--

INSERT INTO `not_dir` (`id_online`, `hari`, `tanggal`, `tempat`, `jam`, `email`, `agenda`, `ket`, `jenis`) VALUES
(1, 'Selasa', '2022-10-11 - 2022-10-11', 'Ruang Meeting 1 Kantor Pusat Semarang', '08:30:00', 'Array', 'Rapat Kerja Rencana Bisnis 2023 Tahap 1', '', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `pemegang_saham`
--

CREATE TABLE `pemegang_saham` (
  `id` int(11) NOT NULL,
  `nama_ps` varchar(100) NOT NULL,
  `nominal_ps` varchar(100) NOT NULL,
  `saham_ps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemegang_saham`
--

INSERT INTO `pemegang_saham` (`id`, `nama_ps`, `nominal_ps`, `saham_ps`) VALUES
(1, 'TAN UDJAN SUGIARTO', '35200000000', '50.29'),
(2, 'YENNY BASUKI', '7492000000', '10.7'),
(3, 'CHENG, ARIF BUDIMAN CHANDRA', '2332000000', '3.33'),
(4, 'HENGKY TANTO SUGIARTO', '5452000000', '7.79'),
(5, 'KERRY THAMRIM', '3524000000', '5.03'),
(6, 'GUNAWAN HUNTORO', '4000000000', '5.71'),
(7, 'JENNY HUNTORO', '2400000000', '3.43'),
(8, 'LANNY HUNTORO', '4800000000', '6.86'),
(9, 'WENNY HUNTORO', '2400000000', '3.43'),
(10, 'TAN DEWI PUSPA', '2400000000', '3.43');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL,
  `nama_peng` varchar(100) NOT NULL,
  `jabatan_peng` varchar(100) NOT NULL,
  `awal_peng` date DEFAULT NULL,
  `mulai_peng` date DEFAULT NULL,
  `akhir_peng` date DEFAULT NULL,
  `rups_peng` date DEFAULT NULL,
  `akte_rups` varchar(100) NOT NULL,
  `ojk_peng` text NOT NULL,
  `sojk_peng` date DEFAULT NULL,
  `certif_peng` text NOT NULL,
  `jatem_peng` date DEFAULT NULL,
  `pend` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `nama_peng`, `jabatan_peng`, `awal_peng`, `mulai_peng`, `akhir_peng`, `rups_peng`, `akte_rups`, `ojk_peng`, `sojk_peng`, `certif_peng`, `jatem_peng`, `pend`) VALUES
(1, 'DJOKO SUMARNO', 'KOMISARIS UTAMA', '2011-03-19', '2021-03-03', '2026-03-03', '2021-01-21', 'Akta RUPS No. 32 tanggal 29 Januari 2021', 'Surat OJK Nomor S-97/KR.0313/2021', '2021-02-18', 'Komisaris', '2025-10-04', 'S1'),
(2, 'YENNY BASUKI', 'KOMISARIS', '1989-12-06', '2020-12-06', '2025-12-06', '2020-11-05', 'Akta RUPS No. 02 tanggal 05 November 2020', 'Surat OJK Nomor S-578/KR.0313/2020', '2020-11-20', 'Komisaris', '2025-10-04', 'D3'),
(3, 'GIANTO DARMAWAN', 'KOMISARIS INDEPENDEN', '2021-03-16', '2021-03-16', '2026-03-16', '2021-04-12', 'Akta RUPS No. 19 tanggal 16 April 2021', 'Surat OJK Nomor S-226/KR.0313/2021', '2021-04-30', 'Komisaris', '2025-03-08', 'S1'),
(4, 'KERRY THAMRIM', 'DIREKTUR UTAMA', '2012-07-04', '2017-07-04', '2022-07-04', '2017-01-26', 'Akta RUPS No. 2 tanggal 2 Februari 2017', 'Surat OJK Nomor S-94/KR.0312/2017', '2017-04-18', 'Direktur Tingkat 2', '2023-10-25', 'S1'),
(7, 'HENDRARDI', 'DIREKTUR KEPATUHAN', '2008-03-04', '2018-03-04', '2023-03-04', '2018-02-02', 'Akta RUPS No. 11 tanggal 07 Februari 2018', 'Surat OJK Nomor S-242/KR.0311/2018', '2018-04-13', 'Direktur Tingkat 2', '2023-04-26', 'S1'),
(8, 'KASMIATI', 'DIREKTUR OPERASIONAL', '2021-01-21', '2021-01-29', '2026-01-21', '2021-01-21', 'Akta RUPS No. 32 tanggal 29 Januari 2021', 'Surat OJK Nomor S-97/KR.0313/2021', '2021-02-18', 'Direktur Tingkat 2', '2025-11-08', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus_eksekutif`
--

CREATE TABLE `pengurus_eksekutif` (
  `id` int(11) NOT NULL,
  `nama_pe` varchar(100) NOT NULL,
  `ktp_pe` varchar(50) NOT NULL,
  `jabatan_pe` varchar(100) NOT NULL,
  `awal_pe` date DEFAULT NULL,
  `mjb_pe` date NOT NULL,
  `spb_pe` text NOT NULL,
  `spo_pe` varchar(100) NOT NULL,
  `certif_pe` text NOT NULL,
  `jatem_pe` date NOT NULL,
  `pend_pe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus_eksekutif`
--

INSERT INTO `pengurus_eksekutif` (`id`, `nama_pe`, `ktp_pe`, `jabatan_pe`, `awal_pe`, `mjb_pe`, `spb_pe`, `spo_pe`, `certif_pe`, `jatem_pe`, `pend_pe`) VALUES
(1, 'Syaifur Rokhman', '3324172512800001', 'Kepala SKKMR dan APU PPT', '2013-07-29', '2022-02-09', 'SK Direksi No. 010/SK.02/II/2022 tanggal 09 Februari 2022', '', 'Direktur Tingkat 1', '2022-11-26', 'S1'),
(2, 'Karno', '3324152505780005', 'Kepala Cabang Weleri', '2009-05-28', '2016-01-11', 'SK Direksi No. 004/SK.Dir/HRD/I/2016 tanggal 05 Januari 2016', 'Surat OJK No. S-46/KR.412/2016 tanggal 12 Februari 2016', 'Direktur 10 Modul', '2021-09-28', 'S1'),
(3, 'Doni Riyanto', '3374100708740006', 'Kepala Cabang Kudus', '2015-01-09', '2016-01-11', 'SK Direksi No. 003/SK.Dir/HRD/I/2016 tanggal 05 Januari 2016', 'Surat OJK No. S-46/KR.412/2016 tanggal 12 Februari 2016', '', '0000-00-00', 'S1'),
(4, 'Wisnu Subroto', '3372051504830009', 'Kepala Cabang Surakarta', '2016-10-01', '2016-10-01', 'SK Direksi No. 116/SK.Dir/HRD/IX/2016 tanggal 17 September 2016', 'Surat OJK No. S-152/KR.0312/2016 tanggal 21 November 2016', '', '0000-00-00', 'S1'),
(5, 'Mudji Nugroho', '3374111610770005', 'Kepala Cabang Klaten', '2014-01-02', '2014-01-02', 'SK Direksi No. 001/SK.Dir/HRD/I/2014 tanggal 02 Januari 2014', 'Surat OJK No. S-33/KR.412/2014 tanggal 13 Februari 2014', '', '0000-00-00', 'S1'),
(6, 'Elianto', '3374030603800002', 'Kepala Cabang Sragen', '2014-03-01', '2014-03-01', 'SK Direksi No. 019/SK.Dir/HRD/II/2014 tanggal 22 Februari 2014', 'Surat OJK No. S-60/KR.412/2014 tanggal 04 April 2014', '', '0000-00-00', 'D3'),
(7, 'YBR Hendro Lukyto', '3374082411750000', 'Kepala Cabang Tegal', '2015-04-11', '2015-04-11', 'SK Direksi No. 061/SK.Dir/HRD/IV/2015 tanggal 09 April 2015', 'Surat OJK No. S-146/KR.412/2015 tanggal 22 Juni 2015', '', '0000-00-00', 'S1'),
(8, 'Heri Triyatno', '3374092505780001', 'Kepala Kantor Pusat', '2019-11-01', '2021-01-29', 'SK Direksi No. 019/SK.Dir/HRD/I/2020 tanggal 29 Janauri 2021', 'Surat OJK No. S-144/KR.0312/2021 tanggal 29 Januari 2021', '', '0000-00-00', 'D3'),
(9, 'RM. Dwi Chandra P.B.P', '3374080108690002', 'Kepala Spesial Aset Manajemen', '2017-10-12', '2022-02-09', 'SK Direksi No. 011/SK.02/II/2022 tanggal 09 Februari 2022', '', 'Direktur Tingkat 1', '2027-01-23', 'S1'),
(10, 'Fadjar Hidajat', '3374100308680003', 'Kepala Corporate Legal', '2017-10-12', '2022-02-09', 'SK Direksi No. 012/SK.02/II/2022 tanggal 09 Februari 2022', '', '', '0000-00-00', 'S1'),
(11, 'Esti Widiyaningrum', '3374145404820001', 'Kepala SDM', '2017-10-12', '2022-02-09', 'SK Direksi No. 013/SK.02/II/2022 tanggal 09 Februari 2022', '', '', '0000-00-00', 'S2'),
(12, 'Muhammad Sri Tulus', '3320132806860005', 'Kepala Business Development', '2017-10-12', '2022-02-09', 'SK Direksi No. 014/SK.02/II/2022 tanggal 09 Februari 2022', '', '', '0000-00-00', 'S1'),
(13, 'Donald Lintin Yurisdwiputra', '441408226517000', 'Kepala SKAI', '2022-12-30', '2020-12-30', 'SK Direksi No. 060/SK.Dir/HRD/XII/2020 tanggal 30 Desemener 2020', 'Surat OJK No. S-18/KR.0312/2021 tanggal 08 Janauri 2021', '', '0000-00-00', 'S1'),
(14, 'Gideon Admiga P', '3374091602830005', 'Kepala TSI', '2021-01-29', '2022-02-09', 'SK Direksi No. 015/SK.02/II/2022 tanggal 09 Februari 2022', '', '', '0000-00-00', 'D3'),
(15, 'Joko Susanto', '3374111811670005', 'Kepala SIMAK', '2021-01-29', '2022-02-09', 'SK Direksi No. 016/SK.02/II/2022 tanggal 09 Februari 2022', '', '', '0000-00-00', 'S1'),
(16, 'Muhammad Rohadi', '3321010705810014', 'Kasie. Umum dan Logistik', '2021-01-29', '2022-02-09', 'SK Direksi No. 017/SK.02/II/2022 tanggal 09 Februari 2022', '', '', '0000-00-00', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus_hub`
--

CREATE TABLE `pengurus_hub` (
  `id` int(11) NOT NULL,
  `nama_peng` varchar(100) NOT NULL,
  `jabatan_peng` varchar(100) NOT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `hubkeldir` varchar(100) NOT NULL,
  `hubkelkom` varchar(100) NOT NULL,
  `hubkelps` varchar(100) NOT NULL,
  `hubkeudir` varchar(100) NOT NULL,
  `hubkeukom` varchar(100) NOT NULL,
  `hubkeups` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus_hub`
--

INSERT INTO `pengurus_hub` (`id`, `nama_peng`, `jabatan_peng`, `nik`, `hubkeldir`, `hubkelkom`, `hubkelps`, `hubkeudir`, `hubkeukom`, `hubkeups`) VALUES
(1, 'DJOKO SUMARNO', 'KOMISARIS UTAMA', '3374070401590001', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada'),
(2, 'YENNY BASUKI', 'KOMISARIS', '3374094105570001', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada'),
(3, 'GIANTO DARMAWAN', 'KOMISARIS INDEPENDEN', '3374112210580002', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada'),
(4, 'KERRY THAMRIM', 'DIREKTUR UTAMA', '3374112703750005', 'Tidak Ada', 'Tidak Ada', 'Tan Udjan Sugiarto (mertua) | Tan Dewi Puspa (istri)', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada'),
(7, 'HENDRARDI', 'DIREKTUR KEPATUHAN', '3311090303610002', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada'),
(8, 'KASMIATI', 'DIREKTUR OPERASIONAL', '3374045605740003', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `psdir`
--

CREATE TABLE `psdir` (
  `id` int(11) NOT NULL,
  `nama_ps2` varchar(100) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `jabatan_ps2` varchar(100) NOT NULL,
  `nominal_ps2` varchar(100) NOT NULL,
  `saham_ps2` varchar(100) NOT NULL,
  `pers_ps2` varchar(50) NOT NULL,
  `jenis_ps2` varchar(50) NOT NULL,
  `saham_psl2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psdir`
--

INSERT INTO `psdir` (`id`, `nama_ps2`, `nik`, `jabatan_ps2`, `nominal_ps2`, `saham_ps2`, `pers_ps2`, `jenis_ps2`, `saham_psl2`) VALUES
(1, 'DJOKO SUMARNO', '3374070401590001', 'KOMISARIS UTAMA', '-', '-', 'NIHIL', '-', '-'),
(2, 'YENNY BASUKI', '3374094105570001', 'KOMISARIS', '7492000000', '10.70', 'NIHIL', '-', '-'),
(3, 'GIANTO DARMAWAN', '3374112210580002', 'KOMISARIS INDEPENDEN', '-', '-', 'NIHIL', '-', '-'),
(4, 'KERRY THAMRIM', '3374112703750005', 'DIREKTUR UTAMA', '3524000000', '5.03', 'PT BPR MANDIRI ARTHA ABADI', 'PERBANKAN', '10.00'),
(5, 'KERRY THAMRIM', '3374112703750005', 'DIREKTUR UTAMA', '-', '-', 'PT MULTI KARYA MITRA SENTOSA', 'RENTAL/PENYEWAAN', '10.00'),
(7, 'HENDRARDI', '3311090303610002', 'DIREKTUR KEPATUHAN', '-', '-', 'NIHIL', '-', '-'),
(8, 'KASMIATI', '3374045605740000', 'DIREKTUR OPERASIONAL', '-', '-', 'NIHIL', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pswm`
--

CREATE TABLE `pswm` (
  `id` int(11) NOT NULL,
  `nama_pswm` varchar(100) NOT NULL,
  `pers_pswm` varchar(2000) NOT NULL,
  `kode_bank` varchar(100) NOT NULL,
  `jenis_pswm` varchar(100) NOT NULL,
  `saham_pswm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pswm`
--

INSERT INTO `pswm` (`id`, `nama_pswm`, `pers_pswm`, `kode_bank`, `jenis_pswm`, `saham_pswm`) VALUES
(1, 'TAN UDJAN SUGIARTO', 'PT DWI KARYA AKBAR', '', 'KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA', '51'),
(2, 'YENNY BASUKI', 'NIHIL', '', '-', '-'),
(3, 'CHENG, ARIF BUDIMAN CHANDRA', 'PT TRASINDO SURYA SARANA', '', 'JASA TRANSPORTASI ', '30'),
(4, 'HENGKY TANTO SUGIARTO', 'PT BPR MANDIRI ARTHA ABADI', '600787', 'PERBANKAN', '24.9'),
(5, 'HENGKY TANTO SUGIARTO', 'PT MULTI KARYA MITRA SENTOSA', '', 'RENTAL/PENYEWAAN', '30'),
(7, 'HENGKY TANTO SUGIARTO', 'PT ARTAMAS CITRA SETIA', '', 'PENUKARAN MATA UANG ASING', '25'),
(8, 'KERRY THAMRIM', 'PT BPR MANDIRI ARTHA ABADI', '600787', 'PERBANKAN', '10'),
(9, 'KERRY THAMRIM', 'PT MULTI KARYA MITRA SENTOSA', '', 'RENTAL/PENYEWAAN', '10'),
(11, 'GUNAWAN HUNTORO', 'PT GUNA TESUMA INTERNASIONAL', '', 'PENYALUR, EKSPOR, IMPOR', '34.67'),
(12, 'GUNAWAN HUNTORO', 'PT DWITA PRATAMA LESTARI', '', 'PENYALUR, EKSPOR, IMPOR', '82'),
(13, 'GUNAWAN HUNTORO', 'PT WIJAYA INTERNASIONAL NUGRAHA', '', 'PENYALUR, EKSPOR, IMPOR', '50'),
(14, 'JENNY HUNTORO', 'CV ANUGRAH JAYA BERSAMA ', '', 'PROPERTY AGENT', '25'),
(15, 'JENNY HUNTORO', 'PT PROVEST JAYA MAKMUR', '', 'KONTRAKTOR & DEVELOPER', ''),
(16, 'LANNY HUNTORO', 'PT GUNA TESUMA INTERNASIONAL', '', 'PENYALUR, EKSPOR, IMPOR', '33.33'),
(17, 'LANNY HUNTORO', 'PT DWITA PRATAMA LESTARI', '', 'PENYALUR, EKSPOR, IMPOR', '18'),
(18, 'LANNY HUNTORO', 'PT WIJAYA INTERNASIONAL NUGRAHA', '', 'PENYALUR, EKSPOR, IMPOR', '50'),
(19, 'WENNY HUNTORO', 'CV KING\'S BANGUN MEGAH PERSADA', '', 'BAHAN BANGUNAN', '99'),
(20, 'WENNY HUNTORO', 'PT KIKO MART INDONESIA', '', 'RETAIL', '50'),
(21, 'TAN DEWI PUSPA', 'NIHIL', '', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `publikasi`
--

CREATE TABLE `publikasi` (
  `id` int(11) NOT NULL,
  `nama_pub` varchar(100) NOT NULL,
  `tahun` year(4) DEFAULT NULL,
  `email` varchar(5000) NOT NULL,
  `file_pub` text NOT NULL,
  `tanggal` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file_pu1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publikasi`
--

INSERT INTO `publikasi` (`id`, `nama_pub`, `tahun`, `email`, `file_pub`, `tanggal`, `file_pu1`) VALUES
(21, 'TRIWULAN III', 2002, 'admbisnis3.wm@gmail.com', '4', '2022-09-19 09:19:22', ''),
(22, 'TRIWULAN III', 2002, 'simak.bprwm@gmail.com', '5', '2022-09-19 09:30:49', ''),
(23, 'TRIWULAN IV', 2001, 'gianto.darmawan@gmail.com', '', '2022-09-19 09:36:39', ''),
(24, 'TRIWULAN II', 2001, 'syaifur.bprwm@gmail.com|skkmr.bprwm@gmail.com', '', '2022-09-19 09:37:28', ''),
(25, 'TRIWULAN IV', 2002, 'wisnusubroto83@gmail.com', 'Memo_Intern_No._032_Memo.01_VII_2022_perihal_Penetapan_Formulir_Aplikasi_Pembukaan_Tabungan.pdf', '2022-09-19 09:39:07', ''),
(26, 'TRIWULAN III', 2000, 'komisarisutama.wm@gmail.com', 'Memo_Intern_No_021_Memo.01_VI_2022_perihal_Program_Promo_Dana_Bundling.pdf', '2022-09-19 09:41:09', ''),
(27, 'TRIWULAN I', 2000, 'komisarisutama.wm@gmail.com', 'Memo_Intern_Nomor_012_Memo.01_III_2022_perihal_Program_Promo_Dana_Blunding.pdf', '2022-09-19 09:47:06', ''),
(28, 'TRIWULAN I', 2000, 'komisarisutama.wm@gmail.com', 'Memo_Intern_No_021_Memo.01_VI_2022_perihal_Program_Promo_Dana_Bundling.pdf', '2022-09-19 11:11:36', ''),
(29, 'TRIWULAN I', 2001, 'wmpegandon@gmail.com', 'Memo_Intern_No._034_Memo.01_VII_2022_perihal_Penghentian_Sementara_Pemasaran_Tabungan_Smart_dan_Smart_Pro.pdf', '2022-09-19 11:34:06', ''),
(30, 'TRIWULAN IV', 2001, 'kasmiati2.smg@gmail.com', 'Memo_Intern_Nomor_008_Memo.01III2022_perihal_Kewajiban_Pengurusan_Perpanjangan_Hak_Guna_Bangunan_(HGB)_pada_Agunan_Sertifikat_Hak_Guna_Bangunan_(SHGB).pdf', '2022-09-19 12:04:21', ''),
(31, 'TRIWULAN III', 2022, 'komisarisutama.wm@gmail.com|basukiyenny@gmail.com|gianto.darmawan@gmail.com|kerry.thamrim@gmail.com|hendrardi168@gmail.com|kasmiati2.smg@gmail.com|syaifur.bprwm@gmail.com|skkmr.bprwm@gmail.com|acctwmsmg@gmail.com|simak.bprwm@gmail.com|treasury.bprwm@gmail.com|admbisnis3.wm@gmail.com|admbisnis3.wmsmg@gmail.com|tsi.wmsmg@gmail.com|ilalangfjh@gmail.com|legal.bprwm@gmail.com|skaiwelerimakmur@gmail.com|yosinursukma@gmail.com|rachmat.wmsmg@gmail.com|yolandadianna@gmail.com|sdm.bprwm@gmail.com|ppsdm.bprwm@gmail.com|chandrapardhiharto@gmail.com|umum.wmsmg@gmail.com|adm.kaoprsmg@gmail.com|bizdev2.bprwm@gmail.com|heri.wmsmg@gmail.com|setyoprasojowm@gmail.com|syknes80@gmail.com|sinyo.galeen@gmail.com|amu.wmsmg@gmail.com|funding.divisionwm@gmail.com|kabidoprs.smg@gmail.com|kasieteller.wmsmg@gmail.com|bo.wmsmg2@gmail.com|loanprocessing2.wmsmg@gmail.com|loanberkas2.wmsmg@gmail.com|yudi.wmsmg@gmail.com|csobprwm@gmail.com|hendra.wmsmg@gmail.com|asido.wmsmg@gmail.com|andi1.wmsmg@gmail.com|wmsiliwangi2@gmail.com|luqman.wmsmg@gmail.com|wmngaliyan@gmail.com|anisari.wmsmg@gmail.com|wmbanyumanik2@gmail.com|karno.wmkds@gmail.com|isnanto.wmwlr@gmail.com|yanah.wmwlr@gmail.com|liliek.wmwlr2@gmail.com|loanweleri@gmail.com|zushilafitria@gmail.com|deny.wmwlr@gmail.com|wmkaskendal2@gmail.com|wmpegandon@gmail.com|wmkaliwunguwlr@gmail.com|wmcepiring@gmail.com|doni.riyanto07@gmail.com|pancatyas05@gmail.com|bisnis.wmkds@gmail.com|diky.wmkds@gmail.com|agusistiqlal3@gmail.com|Ali.bprwmkds@gmail.com|klw2.wmkds@gmail.com|sis.wmkds@gmail.com|csbprwm.pati@gmail.com|tellerbprwm.pati@gmail.com|wisnusubroto83@gmail.com|aprin.wmslo1@gmail.com|operasional.wmslo@gmail.com|cs.wmsolo@gmail.com|loan.wmsolo1@gmail.com|yanto.wmklt@gmail.com|subari.wmslo@gmail.com|cs.wmpjg@gmail.com|adit.wmslo@gmail.com|kaswmsukoharjo@gmail.com|mudjinugrohobprwmklt@gmail.com|bpr.wmklt2@gmail.com|csbprwmklt3@gmail.com|elantdeep@gmail.com|bisnis.wmsrg2@gmail.com|cswmsrg2@gmail.com|hendro.wmsmg@gmail.com|bprwmtegal2@gmail.com|cswmtegal@gmail.com', 'Memo_Intern_No._023_Memo.01_VI_2022_perihal_Kebijakan_Pemeriksaan_Dokumen_Kredit.pdf', '2022-09-19 12:17:17', ''),
(32, 'TRIWULAN II', 2022, '|komisarisutama.wm@gmail.com|basukiyenny@gmail.com|gianto.darmawan@gmail.com|kerry.thamrim@gmail.com|hendrardi168@gmail.com|kasmiati2.smg@gmail.com|syaifur.bprwm@gmail.com|skkmr.bprwm@gmail.com|acctwmsmg@gmail.com|simak.bprwm@gmail.com|treasury.bprwm@gmail.com|admbisnis3.wm@gmail.com|admbisnis3.wmsmg@gmail.com|tsi.wmsmg@gmail.com|ilalangfjh@gmail.com|legal.bprwm@gmail.com|skaiwelerimakmur@gmail.com|yosinursukma@gmail.com|rachmat.wmsmg@gmail.com|yolandadianna@gmail.com|sdm.bprwm@gmail.com|ppsdm.bprwm@gmail.com|chandrapardhiharto@gmail.com|umum.wmsmg@gmail.com|adm.kaoprsmg@gmail.com|bizdev2.bprwm@gmail.com|heri.wmsmg@gmail.com|setyoprasojowm@gmail.com|syknes80@gmail.com|sinyo.galeen@gmail.com|amu.wmsmg@gmail.com|funding.divisionwm@gmail.com|kabidoprs.smg@gmail.com|kasieteller.wmsmg@gmail.com|bo.wmsmg2@gmail.com|loanprocessing2.wmsmg@gmail.com|loanberkas2.wmsmg@gmail.com|yudi.wmsmg@gmail.com|csobprwm@gmail.com|hendra.wmsmg@gmail.com|asido.wmsmg@gmail.com|andi1.wmsmg@gmail.com|wmsiliwangi2@gmail.com|luqman.wmsmg@gmail.com|wmngaliyan@gmail.com|anisari.wmsmg@gmail.com|wmbanyumanik2@gmail.com|karno.wmkds@gmail.com|isnanto.wmwlr@gmail.com|yanah.wmwlr@gmail.com|liliek.wmwlr2@gmail.com|loanweleri@gmail.com|zushilafitria@gmail.com|deny.wmwlr@gmail.com|wmkaskendal2@gmail.com|wmpegandon@gmail.com|wmkaliwunguwlr@gmail.com|wmcepiring@gmail.com|doni.riyanto07@gmail.com|pancatyas05@gmail.com|bisnis.wmkds@gmail.com|diky.wmkds@gmail.com|agusistiqlal3@gmail.com|Ali.bprwmkds@gmail.com|klw2.wmkds@gmail.com|sis.wmkds@gmail.com|csbprwm.pati@gmail.com|tellerbprwm.pati@gmail.com|wisnusubroto83@gmail.com|aprin.wmslo1@gmail.com|operasional.wmslo@gmail.com|cs.wmsolo@gmail.com|loan.wmsolo1@gmail.com|yanto.wmklt@gmail.com|subari.wmslo@gmail.com|cs.wmpjg@gmail.com|adit.wmslo@gmail.com|kaswmsukoharjo@gmail.com|mudjinugrohobprwmklt@gmail.com|bpr.wmklt2@gmail.com|csbprwmklt3@gmail.com|elantdeep@gmail.com|bisnis.wmsrg2@gmail.com|cswmsrg2@gmail.com|hendro.wmsmg@gmail.com|bprwmtegal2@gmail.com|cswmtegal@gmail.com', 'Memo_Intern_No. 029_Memo.01_VII_2022_perihal_Kebijakan_Plafon_Minimal_Permohonan_Kredit_Secara_Online_Melalui_kredit69.com.pdf', '2022-09-19 12:18:25', '');

-- --------------------------------------------------------

--
-- Table structure for table `qr`
--

CREATE TABLE `qr` (
  `id` int(11) NOT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `qr` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qr`
--

INSERT INTO `qr` (`id`, `nip`, `nama`, `jabatan`, `qr`) VALUES
(1, 'admin', '11223344555', 'DIREKTUR', ''),
(2, 'admin', '11223344555', 'KOMISARIS', 'qr-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `se`
--

CREATE TABLE `se` (
  `id` int(11) NOT NULL,
  `no_se` varchar(100) NOT NULL,
  `tbt_se` date DEFAULT NULL,
  `blk_se` date DEFAULT NULL,
  `surat_se` varchar(100) NOT NULL,
  `kode_se` varchar(100) NOT NULL,
  `jen_se` varchar(100) NOT NULL,
  `div_se` varchar(100) NOT NULL,
  `hal_se` varchar(100) NOT NULL,
  `dic_se` varchar(100) NOT NULL,
  `menc_se` varchar(100) NOT NULL,
  `file_se` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `se`
--

INSERT INTO `se` (`id`, `no_se`, `tbt_se`, `blk_se`, `surat_se`, `kode_se`, `jen_se`, `div_se`, `hal_se`, `dic_se`, `menc_se`, `file_se`) VALUES
(1, '001', NULL, NULL, '001/SK.02/II/2022', '02', '', 'SDM', 'Analisis Kebutahan SDM', '', '', NULL),
(2, '002', '2022-03-29', '2022-04-01', '002/SK.01/III/2022', '01', 'Kredit', 'Sekretaris', 'Perubahan SE Direksi 007 2022 GP 150', '', '', NULL),
(3, '003', '2022-04-07', '2022-04-18', '003/SK.02/IV/2022', '02', '', 'SDM', 'THR 1 2022 Karyawan', '', '', NULL),
(4, '004', '2022-04-07', '2022-04-18', '004/SK.02/IV/2022', '02', '', 'SDM', 'THR 1 2022 Karyawan', '', '', NULL),
(5, '005', '2022-05-30', '2022-06-02', '005/SK.01/VI/2022', '01', 'Kredit', 'Sekretaris', 'Kredit Promo Ekstra 69', '11/28/2022', '', NULL),
(6, '006', '2022-05-30', '2022-06-02', '006/SK.01/VI/2022', '01', 'Kredit', 'Sekretaris', 'Kompetisi Perkreditan GP 150', '11/28/2022', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siak`
--

CREATE TABLE `siak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_srt` varchar(100) NOT NULL,
  `tgl_srt` date DEFAULT NULL,
  `ket` varchar(2000) NOT NULL,
  `nominal` varchar(100) NOT NULL,
  `file` blob NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `notif` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sk`
--

CREATE TABLE `sk` (
  `id` int(50) NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `tbt_sk` date NOT NULL,
  `blk_sk` date NOT NULL,
  `surat_sk` varchar(100) NOT NULL,
  `kode_sk` varchar(100) NOT NULL,
  `jen_sk` varchar(50) NOT NULL,
  `div_sk` varchar(100) NOT NULL,
  `hal_sk` varchar(100) NOT NULL,
  `dic_sk` date DEFAULT NULL,
  `menc_sk` varchar(100) DEFAULT NULL,
  `file_sk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sk`
--

INSERT INTO `sk` (`id`, `no_sk`, `tbt_sk`, `blk_sk`, `surat_sk`, `kode_sk`, `jen_sk`, `div_sk`, `hal_sk`, `dic_sk`, `menc_sk`, `file_sk`) VALUES
(1, '001', '0000-00-00', '0000-00-00', '001/SK.02/I/2022', '02', '', 'SDM', 'Mutasi Hendra Gita', NULL, NULL, NULL),
(2, '002', '0000-00-00', '0000-00-00', '002/SK.02/I/2022', '02', '', 'SDM', 'Honor Komisaris dan Direksi', NULL, NULL, NULL),
(3, '003', '0000-00-00', '0000-00-00', '003/SK.02/I/2022', '02', '', 'SDM', 'Gaji Karyawan', NULL, NULL, NULL),
(4, '004', '0000-00-00', '0000-00-00', '004/SK.02/I/2022', '02', '', 'SDM', 'Uang Saku Magang', NULL, NULL, NULL),
(5, '005', '0000-00-00', '0000-00-00', '005/SK.02/I/2022', '02', '', 'SDM', 'Surat Teguran I', NULL, NULL, NULL),
(6, '006', '0000-00-00', '0000-00-00', '006/SK.02/I/2022', '02', '', 'SDM', 'Surat Teguran II', NULL, NULL, NULL),
(7, '007', '0000-00-00', '0000-00-00', '007/SK.02/I/2022', '02', '', 'SDM', 'Surat Teguran III', NULL, NULL, NULL),
(8, '008', '0000-00-00', '0000-00-00', '008/SK.02/I/2022', '02', '', 'SDM', 'Struktur Organisasi', NULL, NULL, NULL),
(9, '009', '0000-00-00', '0000-00-00', '009/SK.01/I/2022', '01', 'Kredit', 'Sekretaris', 'Pembentukan Komite dan Penetapan Batas Kewenangan Memutus Permohonan Kredit', NULL, 'SK Direksi No. 002/SK.Dir/KRD/IV/2021', NULL),
(10, '010', '0000-00-00', '0000-00-00', '010/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Syaifur Rokhman sebagai Kepala SKKMR dan APU PPT', NULL, NULL, NULL),
(11, '011', '0000-00-00', '0000-00-00', '011/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. RM Dwi Chandra sebagai Kepala SAM', NULL, NULL, NULL),
(12, '012', '0000-00-00', '0000-00-00', '012/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Fadjar Hidajat sebagai Kepala Corporate Legal', NULL, NULL, NULL),
(13, '013', '0000-00-00', '0000-00-00', '013/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Esti Widyaningrum sebagai Kepala SDM', NULL, NULL, NULL),
(14, '014', '0000-00-00', '0000-00-00', '014/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Muhammad Sri Tulus sebagai Kepala Business Development', NULL, NULL, NULL),
(15, '015', '0000-00-00', '0000-00-00', '015/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Gideon Admiga P sebagai Kepala TSI', NULL, NULL, NULL),
(16, '016', '0000-00-00', '0000-00-00', '016/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Joko Susanto sebagai Kepala SIMAK', NULL, NULL, NULL),
(17, '017', '0000-00-00', '0000-00-00', '017/SK.02/II/2022', '02', '', 'SDM', 'Perubahan Jabatan Bp. Muhammad Rohadi sebagai Kepala Umum & Logistik', NULL, NULL, NULL),
(18, '018', '0000-00-00', '0000-00-00', '018/SK.01/II/2022', '01', 'Tabungan', 'Sekretaris', 'SOP Tabungan Edisi IX', NULL, 'a. SE Direksi No. 021/SE.Dir/BPR.WM/XI/2013 b. SK Direksi No. 003/SK.Dir/DpTb/III/2019', NULL),
(19, '019', '0000-00-00', '0000-00-00', '019/SK.02/II/2022', '02', '', 'SDM', 'Analisis Kebutahan SDM', NULL, NULL, NULL),
(20, '020', '0000-00-00', '0000-00-00', '020/SK.02/II/2022', '02', '', 'SDM', 'Pemberian Surat Peringatan 1 ', NULL, NULL, NULL),
(21, '021', '0000-00-00', '0000-00-00', '021/SK.02/II/2022', '02', '', 'SDM', 'Pemberian Surat Teguran 1 ', NULL, NULL, NULL),
(22, '022', '0000-00-00', '0000-00-00', '022/SK.02/II/2022', '02', '', 'SDM', 'Pemberian Surat Teguran 2', NULL, NULL, NULL),
(23, '023', '0000-00-00', '0000-00-00', '023/SK.02/II/2022', '02', '', 'SDM', 'Pemberian Surat Teguran 3', NULL, NULL, NULL),
(24, '024', '0000-00-00', '0000-00-00', '024/SK.02/II/2022', '02', '', 'SDM', 'Mutasi Sdr. Hutri', NULL, NULL, NULL),
(25, '025', '0000-00-00', '0000-00-00', '025/SK.02/II/2022', '02', '', 'SDM', 'Mutasi Sdr. Wiji', NULL, NULL, NULL),
(26, '026', '0000-00-00', '0000-00-00', '026/SK.02/II/2022', '02', '', 'SDM', 'Mutasi Sdr. Ardi Irmansyah', NULL, NULL, NULL),
(27, '027', '0000-00-00', '0000-00-00', '027/SK.02/II/2022', '02', '', 'SDM', 'Mutasi Sdr. Seventinus', NULL, NULL, NULL),
(28, '028', '0000-00-00', '0000-00-00', '028/SK.02/II/2022', '02', '', 'SDM', 'Penetapan CS Wahyu Kurniawan', NULL, NULL, NULL),
(29, '029', '0000-00-00', '0000-00-00', '029/SK.02/II/2022', '02', '', 'SDM', 'Penetapan Kepala Kantor Kas Ali Masud', NULL, NULL, NULL),
(30, '030', '0000-00-00', '0000-00-00', '030/SK.02/II/2022', '02', '', 'SDM', 'Penetapan Kepala Kantor Kas Andi Setiarso', NULL, NULL, NULL),
(31, '031', '0000-00-00', '0000-00-00', '031/SK.02/II/2022', '02', '', 'SDM', 'Penetapan Kepala Kantor Kas Aditya Nugraha', NULL, NULL, NULL),
(32, '032', '0000-00-00', '0000-00-00', '032/SK.02/II/2022', '02', '', 'SDM', 'Penetapan AO Senior Muhammad', NULL, NULL, NULL),
(33, '033', '0000-00-00', '0000-00-00', '033/SK.02/II/2022', '02', '', 'SDM', 'Penetapan AO Lending Afix Rendra', NULL, NULL, NULL),
(34, '034', '0000-00-00', '0000-00-00', '034/SK.01/II/2022', '01', 'Tabungan', 'Sekretaris', 'SOP Tabungan Bisnis Edisi II', NULL, NULL, NULL),
(35, '035', '0000-00-00', '0000-00-00', '035/SK.03/II/2022', '03', '', 'Sekretaris', 'Penyesuaian RBB Tahun 2022', NULL, NULL, NULL),
(36, '036', '0000-00-00', '0000-00-00', '036/SK.02/II/2022', '02', '', 'SDM', 'Mutasi Kepala Monitoring Surakarta', NULL, NULL, NULL),
(37, '037', '0000-00-00', '0000-00-00', '037/SK.01/II/2022', '01', 'Tabungan', 'Sekretaris', 'SOP Tabungan Smart dan smart Pro Edisi IV', '0000-00-00', 'a. SK Direksi No. 002/SK.Dir/DpTb/II/2018       b. SE Direksi No. 002/SE.Dir/BPR.WM/II/2018', NULL),
(38, '038', '0000-00-00', '0000-00-00', '038/SK.01/II/2022', '01', 'Tabungan', 'Sekretaris', 'Hadiah, Provisi, Insentif dan LTV Tabungan Smart', NULL, NULL, NULL),
(39, '039', '0000-00-00', '0000-00-00', '039/SK.01/II/2022', '01', 'Layanan', 'Sekretaris', 'SOP FAR', NULL, NULL, NULL),
(40, '040', '0000-00-00', '0000-00-00', '040/SK.02/III/2022', '02', '', 'SDM', 'Mutasi Sdr. Mangara Asido sebagai Kepala Kas Gang Besen', NULL, NULL, NULL),
(41, '041', '0000-00-00', '0000-00-00', '041/SK.01/III/2022', '01', 'Layanan ', 'Sekretaris', 'SOP AAR', NULL, NULL, NULL),
(42, '042', '0000-00-00', '0000-00-00', '042/SK.02/III/2022', '02', '', 'SDM', 'Surat Teguran 1', NULL, NULL, NULL),
(43, '043', '0000-00-00', '0000-00-00', '043/SK.02/III/2022', '02', '', 'SDM', 'Surat Teguran 2', NULL, NULL, NULL),
(44, '044', '0000-00-00', '0000-00-00', '044/SK.02/III/2022', '02', '', 'SDM', 'Surat Teguran 3', NULL, NULL, NULL),
(45, '045', '0000-00-00', '0000-00-00', '045/SK.02/III/2022', '02', '', 'SDM', 'Surat Peringatan I', NULL, NULL, NULL),
(46, '046', '0000-00-00', '0000-00-00', '046/SK.02/III/2022', '02', '', 'SDM', 'Surat Peringatan II', NULL, NULL, NULL),
(47, '047', '0000-00-00', '0000-00-00', '047/SK.01/III/2022', '01', 'Layanan', 'Sekretaris', 'SOP CMO', NULL, NULL, NULL),
(48, '048', '0000-00-00', '0000-00-00', '048/SK.01/III/2022', '01', '', 'Sekretaris', 'Daftar Formulir dan Dokumen Rsmi Perusahaan', NULL, NULL, NULL),
(49, '049', '0000-00-00', '0000-00-00', '049/SK.02/III/2022', '02', '', 'SDM', 'Mutasi Novian Agung Analis Pati', NULL, NULL, NULL),
(50, '050', '0000-00-00', '0000-00-00', '050/SK.02/III/2022', '02', '', 'SDM', 'Mutasi Novian Agung nalis Pati', NULL, NULL, NULL),
(51, '051', '0000-00-00', '0000-00-00', '051/SK.02/III/2022', '02', '', 'SDM', 'Mutasi Septian Adi AMU Pati', NULL, NULL, NULL),
(52, '052', '0000-00-00', '0000-00-00', '052/SK.03/III/2022', '03', '', 'Sekretaris', 'Kewenangan Persetujuan Transaksi dan Pembayaran Biaya Operasional', '0000-00-00', 'SK Direksi No. 012/SK.Dir/UM/IV/2021 ', NULL),
(53, '053', '0000-00-00', '0000-00-00', '053/SK.02/III/2022', '02', '', 'SDM', 'Kepala Bisnis Area Pati P Siswanto', NULL, NULL, NULL),
(54, '054', '2022-04-01', '2022-04-04', '054/SK.03/IV/2022', '03', '', 'Sekretaris', 'Standardisasi Stempel Kantor Kas', NULL, NULL, NULL),
(55, '055', '2022-04-12', '2022-04-12', '055/SK.02/IV/2022', '02', '', 'SDM', 'Surat Peringatan I', NULL, NULL, NULL),
(56, '056', '2022-04-12', '2022-04-12', '056/SK.02/IV/2022', '02', '', 'SDM', 'Surat Peringatan II', NULL, NULL, NULL),
(57, '057', '2022-04-12', '2022-04-12', '057/SK.02/IV/2022', '02', '', 'SDM', 'Surat Teguran I', NULL, NULL, NULL),
(58, '058', '2022-04-20', '2022-04-20', '058/SK.02/IV/2022', '02', '', 'SDM', 'Kenaikan Golongan Jabatan AO Rifqy Hazimy', NULL, NULL, NULL),
(59, '059', '2022-04-21', '2022-04-21', '059/SK.02/IV/2022', '02', '', 'SDM', 'Surat Teguran 1', NULL, NULL, NULL),
(60, '060', '2022-04-21', '2022-04-21', '060/SK.02/IV/2022', '02', '', 'SDM', 'Surat Teguran 2', NULL, NULL, NULL),
(61, '061', '2022-04-21', '2022-04-21', '061/SK.02/IV/2022', '02', '', 'SDM', 'Surat Teguran 3', NULL, NULL, NULL),
(62, '062', '2022-04-21', '2022-04-21', '062/SK.02/IV/2022', '02', '', 'SDM', 'Surat Peringatan 1', NULL, NULL, NULL),
(63, '063', '2022-04-21', '2022-04-21', '063/SK.02/IV/2022', '02', '', 'SDM', 'Surat Peringatan 2', NULL, NULL, NULL),
(64, '064', '2022-04-21', '2022-04-21', '064/SK.02/IV/2022', '02', '', 'SDM', 'Surat Peringatan 3', NULL, NULL, NULL),
(65, '065', '2022-04-22', '2022-04-25', '065/SK.01/IV/2022', '01', 'Kredit', 'Sekretaris', 'Perubahan Suku Bunga Kredit, Porvisi dan Administrasi Kredit', NULL, 'SK Direksi No. 018/SK.Dir/KRD/XII/2021', NULL),
(66, '066', '0000-00-00', '0000-00-00', '066/SK.02/V/2022', '02', '', 'SDM', 'Kepala Kas Kaliwungu P Ali', NULL, NULL, NULL),
(67, '067', '2022-04-26', '2022-04-26', '067/SK.02/IV/2022', '02', '', 'SDM', 'Struktur Organisasi', '2022-09-01', NULL, NULL),
(68, '068', '2022-04-26', '2022-04-26', '068/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. Syaifur Rokhman', NULL, NULL, NULL),
(69, '069', '2022-04-26', '2022-04-26', '069/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. RM Dwi Chandra', NULL, NULL, NULL),
(70, '070', '2022-04-26', '2022-04-26', '070/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. Fadjar Hidajat', NULL, NULL, NULL),
(71, '071', '2022-04-26', '2022-04-26', '071/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Ibu Esti Widiyaningrum', NULL, NULL, NULL),
(72, '072', '2022-04-26', '2022-04-26', '072/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. M Sri Tulus', NULL, NULL, NULL),
(73, '073', '2022-04-26', '2022-04-26', '073/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. Gideon A P', NULL, NULL, NULL),
(74, '074', '2022-04-26', '2022-04-26', '074/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. Joko Susanto', NULL, NULL, NULL),
(75, '075', '2022-04-26', '2022-04-26', '075/SK.02/IV/2022', '02', '', 'SDM', 'Penetapan Jabatan PE Bp. M Rohadi', NULL, NULL, NULL),
(76, '076', '0000-00-00', '0000-00-00', '076/SK.02/V/2022', '02', '', 'SDM', 'Kepala AO Kudus P Kris', NULL, NULL, NULL),
(77, '077', '0000-00-00', '0000-00-00', '077/SK.03/V/2022', '03', '', 'Sekretaris', 'Standardisasi Stempel Pusat dan Cabang', NULL, NULL, NULL),
(78, '078', '0000-00-00', '0000-00-00', '078/SK.02/V/2022', '02', '', 'SDM', 'Pengangkatan Tetap Zamhar Arifin', NULL, NULL, NULL),
(79, '079', '0000-00-00', '0000-00-00', '079/SK.02/V/2022', '02', '', 'SDM', 'Kenaikan Golongan Zamhar Arifin', NULL, NULL, NULL),
(80, '080', '0000-00-00', '0000-00-00', '080/SK.02/V/2022', '02', '', 'SDM', 'Surat Teguran I', NULL, NULL, NULL),
(81, '081', '0000-00-00', '0000-00-00', '081/SK.02/V/2022', '02', '', 'SDM', 'Surat Teguran 2', NULL, NULL, NULL),
(82, '082', '0000-00-00', '0000-00-00', '082/SK.02/V/2022', '02', '', 'SDM', 'Surat Teguran 3', NULL, NULL, NULL),
(83, '083', '0000-00-00', '0000-00-00', '083/SK.02/V/2022', '02', '', 'SDM', 'Surat Peringatan 1', NULL, NULL, NULL),
(84, '084', '0000-00-00', '0000-00-00', '084/SK.02/V/2022', '02', '', 'SDM', 'Surat Peringatan 2', NULL, NULL, NULL),
(85, '085', '0000-00-00', '0000-00-00', '085/SK.02/V/2022', '02', '', 'SDM', 'Surat Peringatan 3', NULL, NULL, NULL),
(86, '086', '0000-00-00', '0000-00-00', '086/SK.02/VI/2022', '02', '', 'SDM', 'Naik Golongan Apix Rendra Lending ke Senior', NULL, NULL, NULL),
(87, '087', '0000-00-00', '0000-00-00', '087/SK.02/VI/2022', '02', '', 'SDM', 'Naik Golongan Irwan Setyawan Hunter ke Lending', NULL, NULL, NULL),
(88, '088', '0000-00-00', '0000-00-00', '088/SK.02/VI/2022', '02', '', 'SDM', 'Pegawai Tetap Afix', NULL, NULL, NULL),
(89, '089', '0000-00-00', '0000-00-00', '089/SK.02/VI/2022', '02', '', 'SDM', 'Teguran 1', NULL, NULL, NULL),
(90, '090', '0000-00-00', '0000-00-00', '090/SK.02/VI/2022', '02', '', 'SDM', 'Teguran 2', NULL, NULL, NULL),
(91, '091', '0000-00-00', '0000-00-00', '091/SK.02/VI/2022', '02', '', 'SDM', 'Peringatan 1', NULL, NULL, NULL),
(92, '092', '0000-00-00', '0000-00-00', '092/SK.02/VI/2022', '02', '', 'SDM', 'Peringatan 2', NULL, NULL, NULL),
(93, '093', '0000-00-00', '0000-00-00', '093/SK.02/VI/2022', '02', '', 'SDM', 'Peringatan 3', NULL, NULL, NULL),
(94, '094', '0000-00-00', '0000-00-00', '094/SK.03/VI/2022', '03', '', 'Sekretaris', 'RBB Perubahan', NULL, NULL, NULL),
(95, '095', '0000-00-00', '0000-00-00', '095/SK.02/VI/2022', '02', '', 'SDM', 'Surat Teguran AO Sragen', NULL, NULL, NULL),
(96, '096', '0000-00-00', '0000-00-00', '096/SK.02/VI/2022', '02', '', 'SDM', 'Surat Teguran Analis Sragen', NULL, NULL, NULL),
(97, '097', '0000-00-00', '0000-00-00', '097/SK.02/VI/2022', '02', '', 'SDM', 'Surat Teguran Kepala Cabang Sragen', NULL, NULL, NULL),
(98, '098', '0000-00-00', '0000-00-00', '098/SK.01/VII/2022', '01', 'Layanan', 'Sekretaris', 'SOP Transfer dan Pemindahbukuan Online Edisi II', NULL, 'a. SK Direksi No. 030/SK.Dir/UM/XII/2020                b. 017/Memo.01/IV/2022', NULL),
(99, '099', '0000-00-00', '0000-00-00', '099/SK.02/VII/2022', '02', '', 'HC', 'Surat Teguran 1 AO', NULL, NULL, NULL),
(100, '100', '0000-00-00', '0000-00-00', '100/SK.02/VII/2022', '02', '', 'HC', 'Surat Teguran 3 AO', NULL, NULL, NULL),
(101, '101', '0000-00-00', '0000-00-00', '101/SK.02/VII/2022', '02', '', 'HC', 'Surat Peringatan 2 AO', NULL, NULL, NULL),
(102, '102', '0000-00-00', '0000-00-00', '102/SK.02/VII/2022', '02', '', 'HC', 'Surat Teguran 1 Sugeng Riadi', NULL, NULL, NULL),
(103, '103', '0000-00-00', '0000-00-00', '103/SK.02/VII/2022', '02', '', 'HC', 'Surat Teguran 1 Hermin', NULL, NULL, NULL),
(104, '104', '0000-00-00', '0000-00-00', '104/SK.02/VII/2022', '02', '', 'HC', 'Struktur Organisasi Kas', NULL, NULL, NULL),
(105, '105', '0000-00-00', '0000-00-00', '105/SK.02/VII/2022', '02', '', 'HC', 'Mutasi Sdr. Anita Yulianti', NULL, NULL, NULL),
(106, '106', '0000-00-00', '0000-00-00', '106/SK.02/VII/2022', '02', '', 'HC', 'Kenaikan Golongan Sdr. Siswanto', NULL, NULL, NULL),
(107, '107', '0000-00-00', '0000-00-00', '107/SK.03/VII/2022', '03', '', 'Sekretaris', 'Kewenangan Persetujuan Transaksi dan Pembayaran Biaya Operasional', NULL, 'SK Direksi No. 052/SK.03/III/2022', NULL),
(108, '108', '0000-00-00', '0000-00-00', '108/SK.02/VIII/2022', '02', '', 'HC', 'Surat Peringatan atas Kinerja Maret-Juli Sdr. Mudji Nugroho', NULL, NULL, NULL),
(109, '109', '0000-00-00', '0000-00-00', '109/SK.02/VIII/2022', '02', '', 'HC', 'Surat Teguran 2', NULL, NULL, NULL),
(110, '110', '0000-00-00', '0000-00-00', '110/SK.02/VIII/2022', '02', '', 'HC', 'Surat Teguran 3', NULL, NULL, NULL),
(111, '111', '0000-00-00', '0000-00-00', '111/SK.02/VIII/2022', '02', '', 'HC', 'Surat Peringatan 3', NULL, NULL, NULL),
(112, '112', '0000-00-00', '0000-00-00', '112/SK.02/VIII/2022', '02', '', 'HC', 'Surat Peringatan 1', NULL, NULL, NULL),
(113, '113', '0000-00-00', '0000-00-00', '113/SK.02/VIII/2022', '02', '', 'HC', 'Penetapan Tetap Sdr. Ferra ', NULL, NULL, NULL),
(114, '114', '0000-00-00', '0000-00-00', '114/SK.03/VIII/2022', '03', '', 'Sekretaris', 'Penetapan Limit Risiko', NULL, NULL, NULL),
(115, '115', '0000-00-00', '0000-00-00', '115/SK.01/VIII/2022', '01', 'Tabungan', 'Sekretaris', 'SOP Tabungan Smart dan smart Pro Edisi V', NULL, 'a. SK Direksi No. 037/SK.01/II/2022             b.Memo Intern No. 034/Memo.01/VII/2022', NULL),
(116, '116', '0000-00-00', '0000-00-00', '116/SK.01/VIII/2022', '01', 'Layanan', 'Sekretaris', 'SOP Virtual Account Edisi II', NULL, 'SK Direksi No. 001/SK.Dir/UM/II/2021', NULL),
(117, '117', '0000-00-00', '2022-09-01', '117/SK.02/VIII/2022', '02', '', 'HC', 'Struktur Organisasi', NULL, 'SK Direksi No. 067/SK.02/IV/2022', NULL),
(118, '118', '0000-00-00', '2022-09-02', '118/SK.02/VIII/2022', '02', '', 'HC', 'Penetapan Pegawai Tetap Hermin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `jenis_srt` varchar(1000) NOT NULL,
  `sanksi` varchar(50) DEFAULT NULL,
  `ket_pel` varchar(100) DEFAULT NULL,
  `nom_san` varchar(100) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `dir` int(11) DEFAULT NULL,
  `nomor_srt` varchar(25) DEFAULT NULL,
  `tgl_srt` date DEFAULT NULL,
  `nama_file` text DEFAULT NULL,
  `nama_file2` text DEFAULT NULL,
  `nama_file3` text DEFAULT NULL,
  `nama_file4` text DEFAULT NULL,
  `status` int(2) DEFAULT 0,
  `no_reg` varchar(100) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `jenis_srt`, `sanksi`, `ket_pel`, `nom_san`, `bid`, `dir`, `nomor_srt`, `tgl_srt`, `nama_file`, `nama_file2`, `nama_file3`, `nama_file4`, `status`, `no_reg`, `tgl`) VALUES
(1, 'OJK', 'Pelanggaran', 'Sanksi SLIk', '50000', 1, 1, 'S-400/KR.0312/2021', '2022-09-05', 'img001.jpg', NULL, NULL, NULL, 0, NULL, NULL),
(2, 'LPS', 'Non-Pelanggaran', 'Keterlambatan Laporan SLIK', '600000', 1, 1, 'S-400/KR.0312/2021', '2022-09-20', 'img001.jpg', NULL, NULL, NULL, 0, NULL, NULL),
(3, 'OJK', 'Pelanggaran', 'Keterlambatan Laporan SLIK', '600000', 1, 1, 'S-400/KR.0312/2021', '2022-09-28', 'Memo_Intern_No._023_Memo.01_VI_2022_perihal_Kebijakan_Pemeriksaan_Dokumen_Kredit.pdf', NULL, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_status`
--

CREATE TABLE `surat_status` (
  `id_suratstatus` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `status_sekertarisawal` enum('Baru','Proses','Konfirmasi') DEFAULT NULL,
  `tgl_updatesekertarisawal` datetime DEFAULT NULL,
  `id_usersekertarisawal` int(11) DEFAULT NULL,
  `status_direktur` enum('Baru','Disetujui','Konfirmasi') DEFAULT NULL,
  `qr_direktur` text DEFAULT NULL,
  `catatan_konfirmasi` text DEFAULT NULL,
  `tgl_updatedirektur` datetime DEFAULT NULL,
  `id_userdirektur` int(11) DEFAULT NULL,
  `status_siak` enum('Baru','Order Bayar Sanksi') DEFAULT NULL,
  `tgl_updatesiak` datetime DEFAULT NULL,
  `id_usersiak` int(11) DEFAULT NULL,
  `status_umum` enum('Baru','Upload Order Bayar') DEFAULT NULL,
  `tgl_updateumum` datetime DEFAULT NULL,
  `id_userumum` int(11) DEFAULT NULL,
  `status_sekertarisakhir` enum('Baru','Bukti Bayar Sanksi Selesai','Bukti Konfirmasi Selesai') DEFAULT NULL,
  `tgl_updatesekertarisakhir` datetime DEFAULT NULL,
  `id_usersekertarisakhir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_status`
--

INSERT INTO `surat_status` (`id_suratstatus`, `id_surat`, `status_sekertarisawal`, `tgl_updatesekertarisawal`, `id_usersekertarisawal`, `status_direktur`, `qr_direktur`, `catatan_konfirmasi`, `tgl_updatedirektur`, `id_userdirektur`, `status_siak`, `tgl_updatesiak`, `id_usersiak`, `status_umum`, `tgl_updateumum`, `id_userumum`, `status_sekertarisakhir`, `tgl_updatesekertarisakhir`, `id_usersekertarisakhir`) VALUES
(1, 1, 'Proses', '2022-09-05 16:48:49', 2, 'Disetujui', 'qr-2.png', 'Sudah benar', '2022-09-05 16:58:00', 3, 'Baru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 'Proses', '2022-09-05 16:54:49', 2, 'Disetujui', 'qr-2.png', NULL, '2022-09-05 16:55:06', 0, 'Baru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 'Baru', '2022-09-19 12:09:29', 2, 'Baru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tanda`
--

CREATE TABLE `tanda` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `file` longblob NOT NULL,
  `keterangan` varchar(2000) NOT NULL,
  `tgl_upload` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanda`
--

INSERT INTO `tanda` (`id`, `nama`, `file`, `keterangan`, `tgl_upload`) VALUES
(1, 'OJK_KAMIS', 0x696d673030312e6a7067, 'Pembayaran Tanggal 11 Agustus 2022', '2022-08-11 09:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `tindak_lanjut`
--

CREATE TABLE `tindak_lanjut` (
  `id` int(11) NOT NULL,
  `nama_tl` varchar(100) NOT NULL,
  `file_tlojk` varchar(100) NOT NULL,
  `email_tl` varchar(100) NOT NULL,
  `notif` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `umum`
--

CREATE TABLE `umum` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_srt` varchar(100) NOT NULL,
  `tgl_srt` date DEFAULT NULL,
  `ket` varchar(1000) NOT NULL,
  `nominal` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `notif` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('ADMIN','SEKRETARIS','SDM','SIAK','UMUM','DIREKTUR UTAMA','DIREKTUR KEPATUHAN','DIREKTUR OPERASIONAL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `id_jabatan`, `username`, `password`, `level`) VALUES
(1, 'ADMINTSI', 0, 'admin', '202cb962ac59075b964b07152d234b70', 'ADMIN'),
(2, 'SEKRETARIS', 0, 'sekar1', '202cb962ac59075b964b07152d234b70', 'SEKRETARIS'),
(3, 'KERRY THAMRIM', 1, 'dir1', '202cb962ac59075b964b07152d234b70', 'DIREKTUR UTAMA'),
(4, 'HENDRARDI', 0, 'dir2', '202cb962ac59075b964b07152d234b70', 'DIREKTUR KEPATUHAN'),
(5, 'KASMIATI', 2, 'dir3', '202cb962ac59075b964b07152d234b70', 'DIREKTUR OPERASIONAL'),
(6, 'SDM', 0, 'sdm', '202cb962ac59075b964b07152d234b70', 'SDM'),
(7, 'SIAK', 0, 'siak', '202cb962ac59075b964b07152d234b70', 'SIAK'),
(8, 'Umum', 0, 'umum1', '202cb962ac59075b964b07152d234b70', 'UMUM'),
(24, 'SDM2', 0, 'sdm2', '202cb962ac59075b964b07152d234b70', 'SDM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `absen2`
--
ALTER TABLE `absen2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `hasil_notdekom`
--
ALTER TABLE `hasil_notdekom`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `hukum`
--
ALTER TABLE `hukum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intern`
--
ALTER TABLE `intern`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jabatan2`
--
ALTER TABLE `jabatan2`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kode_srt`
--
ALTER TABLE `kode_srt`
  ADD PRIMARY KEY (`id_kode`);

--
-- Indexes for table `memo`
--
ALTER TABLE `memo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nik`
--
ALTER TABLE `nik`
  ADD PRIMARY KEY (`id_nik`);

--
-- Indexes for table `not_dekom`
--
ALTER TABLE `not_dekom`
  ADD PRIMARY KEY (`id_offline`);

--
-- Indexes for table `not_dir`
--
ALTER TABLE `not_dir`
  ADD PRIMARY KEY (`id_online`);

--
-- Indexes for table `pemegang_saham`
--
ALTER TABLE `pemegang_saham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus_eksekutif`
--
ALTER TABLE `pengurus_eksekutif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus_hub`
--
ALTER TABLE `pengurus_hub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psdir`
--
ALTER TABLE `psdir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pswm`
--
ALTER TABLE `pswm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr`
--
ALTER TABLE `qr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `se`
--
ALTER TABLE `se`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siak`
--
ALTER TABLE `siak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk`
--
ALTER TABLE `sk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_status`
--
ALTER TABLE `surat_status`
  ADD PRIMARY KEY (`id_suratstatus`);

--
-- Indexes for table `tanda`
--
ALTER TABLE `tanda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tindak_lanjut`
--
ALTER TABLE `tindak_lanjut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umum`
--
ALTER TABLE `umum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `absen2`
--
ALTER TABLE `absen2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hasil_notdekom`
--
ALTER TABLE `hasil_notdekom`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hukum`
--
ALTER TABLE `hukum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intern`
--
ALTER TABLE `intern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jabatan2`
--
ALTER TABLE `jabatan2`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `kode_srt`
--
ALTER TABLE `kode_srt`
  MODIFY `id_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `memo`
--
ALTER TABLE `memo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `nik`
--
ALTER TABLE `nik`
  MODIFY `id_nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `not_dekom`
--
ALTER TABLE `not_dekom`
  MODIFY `id_offline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `not_dir`
--
ALTER TABLE `not_dir`
  MODIFY `id_online` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemegang_saham`
--
ALTER TABLE `pemegang_saham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pengurus_eksekutif`
--
ALTER TABLE `pengurus_eksekutif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pengurus_hub`
--
ALTER TABLE `pengurus_hub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `psdir`
--
ALTER TABLE `psdir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `pswm`
--
ALTER TABLE `pswm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `qr`
--
ALTER TABLE `qr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `se`
--
ALTER TABLE `se`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siak`
--
ALTER TABLE `siak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sk`
--
ALTER TABLE `sk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_status`
--
ALTER TABLE `surat_status`
  MODIFY `id_suratstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tanda`
--
ALTER TABLE `tanda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tindak_lanjut`
--
ALTER TABLE `tindak_lanjut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `umum`
--
ALTER TABLE `umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
