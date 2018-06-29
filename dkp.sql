-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2018 at 01:46 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kode_kemasan`
--

CREATE TABLE `kode_kemasan` (
  `id` int(4) NOT NULL,
  `jenis_kemasan` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_kemasan`
--

INSERT INTO `kode_kemasan` (`id`, `jenis_kemasan`, `keterangan`) VALUES
(1, 'Gelas (Glass)', 'Bukan untuk pangan yang disterilisasi'),
(2, 'Plastik', 'Bukan untuk pangan yang disterilisasi atau pasteurisasi'),
(3, 'Karton / Kertas', ''),
(4, 'Kaleng', 'Bukan untuk pangan yang disterilisasi'),
(5, 'Aluminium Foil', ''),
(6, 'Lain-lain', 'Misalnya daun');

-- --------------------------------------------------------

--
-- Table structure for table `kode_pangan`
--

CREATE TABLE `kode_pangan` (
  `id` int(11) NOT NULL,
  `jenis_pangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_pangan`
--

INSERT INTO `kode_pangan` (`id`, `jenis_pangan`) VALUES
(1, 'HASIL OLAHAN DAGING KERING'),
(2, 'HASIL OLAHAN IKAN KERING'),
(3, 'HASIL OLAHAN UNGGAS KERING'),
(4, 'SAYUR ASIN DAN SAYUR KERING'),
(5, 'HASIL OLAHAN KELAPA'),
(6, 'TEPUNG DAN HASIL OLAHNYA'),
(7, 'MINYAK DAN LEMAK'),
(8, 'SELAI,  JELI  DAN SEJENISNYA'),
(9, 'GULA, KEMBANG GULA DAN MADU'),
(10, 'KOPI, TEH, COKLAT KERING ATAU CAMPURANNYA'),
(11, 'BUMBU'),
(12, 'REMPAH-REMPAH'),
(13, 'MINUMAN RINGAN, MINUMAN SERBUK'),
(14, 'HASIL OLAHAN BUAH'),
(15, 'HASIL OLAHAN BIJI-BIJIAN DAN UMBI');

-- --------------------------------------------------------

--
-- Table structure for table `kode_pangan_detail`
--

CREATE TABLE `kode_pangan_detail` (
  `id` int(5) NOT NULL,
  `kode_pangan_id` int(5) NOT NULL,
  `kode_pangan_detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_pangan_detail`
--

INSERT INTO `kode_pangan_detail` (`id`, `kode_pangan_id`, `kode_pangan_detail`) VALUES
(1, 1, 'Abon Daging'),
(2, 1, 'Dendeng Daging'),
(3, 1, 'Paru Goreng Kering'),
(4, 1, 'Kerupuk Kulit'),
(5, 1, 'Rendang Daging / Paru'),
(6, 2, 'Abon'),
(7, 2, 'Cumi Kering'),
(8, 2, 'Ikan Asin'),
(9, 2, 'Ikan Asap / Ikan Salai / Ikan Kayu'),
(10, 2, 'Kerupuk / Kemplang / Amplang Ikan'),
(11, 2, 'Udang Kering (Ebi)'),
(12, 2, 'Pasta Ikan'),
(13, 2, 'Petis'),
(14, 2, 'Terasi'),
(15, 2, 'Empek-empek kering'),
(16, 2, 'Ikan goreng'),
(17, 2, 'Dendeng Ikan'),
(18, 2, 'Rendang Ikan / Belut'),
(19, 2, 'Serundeng Ikan'),
(20, 2, 'Bekicot Olahan'),
(21, 2, 'Presto Ikan'),
(22, 3, 'Abon unggas'),
(23, 3, 'Usus Goreng'),
(24, 3, 'Ceker Goreng'),
(25, 3, 'Kulit unggas Goreng'),
(26, 3, 'Dendeng'),
(27, 3, 'Telur Asin'),
(28, 3, 'Presto Unggas'),
(29, 3, 'Rendang Telur'),
(30, 4, 'Acar'),
(31, 4, 'Asinan/ Manisan Sayur'),
(32, 4, 'Jamur Asin / Kering'),
(33, 4, 'Sayur Asin Kering'),
(34, 4, 'Sayur Kering'),
(35, 4, 'Keripik / Criping Sayur'),
(36, 4, 'Emping Melinjo / Labu'),
(37, 4, 'Manisan Rumput Laut'),
(38, 5, 'Kelapa Parut Kering'),
(39, 5, 'Nata de Coco'),
(40, 5, 'Geplak'),
(41, 6, 'Bihun'),
(42, 6, 'Biskuit'),
(43, 6, 'Bagelen / Bagelan'),
(44, 6, 'Dodol / Jenang / Galamai'),
(45, 6, 'Kerupuk'),
(46, 6, 'Kue Brem'),
(47, 6, 'Kue Kering'),
(48, 6, 'Makaroni'),
(49, 6, 'Mie Kering'),
(50, 6, 'Tapioka'),
(51, 6, 'Tepung Aren'),
(52, 6, 'Tepung Arcis'),
(53, 6, 'Tepung Beras / Ketan'),
(54, 6, 'Tepung Gandum (bukan tepung terigu yang wajib SNI)'),
(55, 6, 'Tepung Hunkwee'),
(56, 6, 'Tepung Kedele'),
(57, 6, 'Tepung Kelapa'),
(58, 6, 'Tepung Kentang'),
(59, 6, 'Tepung Pisang'),
(60, 6, 'Tepung Sagu'),
(61, 6, 'Tepung Sukun'),
(62, 6, 'Roti / Bluder'),
(63, 6, 'Rempeyek / Peyek'),
(64, 6, 'Sohun'),
(65, 6, 'Bakpao'),
(66, 6, 'Bakpia / Pia'),
(67, 6, 'Bika Ambon'),
(68, 6, 'Cakue'),
(69, 6, 'Cendol'),
(70, 6, 'Cimol'),
(71, 6, 'Cone / Wadah Es Krim yang dapat dimakan'),
(72, 6, 'Kulit Lumpia / Pangsit'),
(73, 6, 'Moci'),
(74, 6, 'Molen / Bolen'),
(75, 6, 'Mutiara / Pacar Cina'),
(76, 6, 'Pilus'),
(77, 6, 'Yangko'),
(78, 7, 'Minyak Jagung'),
(79, 7, 'Minyak Kacang'),
(80, 7, 'Minyak Kedele'),
(81, 7, 'Minyak Kelapa'),
(82, 7, 'Minyak Bunga Matahari'),
(83, 7, 'Minyak Zaitun'),
(84, 7, 'Minyak Sawit'),
(85, 7, 'Minyak/ lemak ayam'),
(86, 7, 'Minyak/ lemak sapi'),
(87, 8, 'Jem / Selai'),
(88, 8, 'Jeli buah'),
(89, 8, 'Jeli agar'),
(90, 8, 'Jeli bubuk rasa buah'),
(91, 8, 'Jeli  Rumput Laut'),
(92, 8, 'Jeli  Lidah Buaya'),
(93, 8, 'Marmalad'),
(94, 8, 'Serikaya / Srikaya / Kayakaya'),
(95, 8, 'Cincau'),
(96, 9, 'Gula  Aren'),
(97, 9, 'Gula Kelapa'),
(98, 9, 'Gula Pasir (bukan gula pasir yang dirafinasi)'),
(99, 9, 'Gula Semut'),
(100, 9, 'Kembang Gula / Permen'),
(101, 9, 'Kembang Gula / Permen Susu'),
(102, 9, 'Kembang Gula / Permen Karet'),
(103, 9, 'Kembang Gula Coklat'),
(104, 9, 'Madu'),
(105, 9, 'Sirop'),
(106, 9, 'Manisan / Aromanis (buah / rimpang)'),
(107, 9, 'Enting-enting / Kipang  Kacang / Ampyang / Noga'),
(108, 10, 'Kopi Biji Kering / Bubuk'),
(109, 10, 'Teh / Teh Hijau'),
(110, 10, 'Teh Rosela'),
(111, 10, 'Coklat (tidak termasuk coklat bubuk)'),
(112, 10, 'Kopi Campur'),
(113, 11, 'Aneka Bumbu Masakan'),
(114, 11, 'Bumbu Cabe'),
(115, 11, 'Bawang Goreng'),
(116, 11, 'Cuka makan seperti cuka buah apel/ anggur, dll'),
(117, 11, 'Kecap Asin / Manis'),
(118, 11, 'Saos Cabe'),
(119, 11, 'Saos Tomat'),
(120, 11, 'Saos Ikan'),
(121, 11, 'Saos Kacang'),
(122, 11, 'Tauco'),
(123, 11, 'Sambal'),
(124, 11, 'Bumbu Kacang / Pecel'),
(125, 12, 'Bawang Merah Kering / Pasta / Bubuk'),
(126, 12, 'Bawang Putih Kering / Pasta / Bubuk'),
(127, 12, 'Cabe Kering / Pasta / Bubuk'),
(128, 12, 'Cengkeh Kering / Pasta / Bubuk'),
(129, 12, 'Jahe Kering / Pasta / Bubuk'),
(130, 12, 'Jintan'),
(131, 12, 'Kayu Manis'),
(132, 12, 'Kapulaga'),
(133, 12, 'Ketumbar'),
(134, 12, 'Kunyit Kering / Pasta / Bubuk'),
(135, 12, 'Lada Putih / Hitam'),
(136, 12, 'Pala / Bunga Pala'),
(137, 12, 'Wijen'),
(138, 13, 'Minuman Beraroma'),
(139, 13, 'Minuman Gula Asam'),
(140, 13, 'Minuman Buah'),
(141, 13, 'Minuman Sayur'),
(142, 13, 'Minuman Kacang Kedele / Sari Kedele'),
(143, 13, 'Minuman Kopi / Campur'),
(144, 13, 'Minuman Kunyit Asam'),
(145, 13, 'Minuman Lidah Buaya'),
(146, 13, 'Minuman Rumput Laut'),
(147, 13, 'Minuman Sari Madu'),
(148, 13, 'Minuman Sari Tebu'),
(149, 13, 'Minuman Sari Jagung'),
(150, 13, 'Minuman Sari Bekatul'),
(151, 13, 'Minuman Sari Kurma'),
(152, 13, 'Minuman Teh'),
(153, 13, 'Minuman Bandrex'),
(154, 13, 'Limun'),
(155, 13, 'Minuman Jeli'),
(156, 13, 'Minuman Rempah'),
(157, 13, 'Minuman Rosela'),
(158, 13, 'Cincau / Minuman Cincau'),
(159, 13, 'Minuman Sari Tape'),
(160, 13, 'Minuman Serbuk'),
(161, 13, 'Minuman Bubuk Kedele'),
(162, 14, 'Keripik / Criping Buah (Sukun/Salak/Nangka/Mangga/ Pisang, dll)'),
(163, 14, 'Buah Kering'),
(164, 14, 'Lempok Buah (Durian, dll)'),
(165, 14, 'Asinan Buah'),
(166, 14, 'Buah Kering'),
(167, 14, 'Manisan Buah'),
(168, 14, 'Buah Dalam Sirop'),
(169, 14, 'Pisang Sale'),
(170, 15, 'Ketan'),
(171, 15, 'Jawadah / Jadah / Uli'),
(172, 15, 'Keripik Kentang'),
(173, 15, 'Keripik kentang Balado'),
(174, 15, 'Keripik Ketela / Singkong'),
(175, 15, 'Keripik / Tortilla Jagung'),
(176, 15, 'Keripik Talas'),
(177, 15, 'Intip'),
(178, 15, 'Keripik Ubi Jalar'),
(179, 15, 'Rangginang / Batiah'),
(180, 15, 'Bekatul'),
(181, 15, 'Bingka Ubi'),
(182, 15, 'Carang mas / Kue Keremes Ubi Jalar / Ceker Ayam');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_pss`
--

CREATE TABLE `layanan_pss` (
  `id` int(5) NOT NULL,
  `layanan_pss_detail_id` int(5) NOT NULL,
  `parameter` varchar(20) DEFAULT NULL,
  `hasil` enum('Positif','Negatif') NOT NULL DEFAULT 'Negatif',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan_pss`
--

INSERT INTO `layanan_pss` (`id`, `layanan_pss_detail_id`, `parameter`, `hasil`, `created_at`, `updated_at`) VALUES
(1, 1, 'BORAK', 'Negatif', '2018-06-27 05:38:41', '2018-06-27 05:38:41'),
(2, 2, 'BORAK', 'Negatif', '2018-06-27 05:40:57', '2018-06-27 05:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_pss_detail`
--

CREATE TABLE `layanan_pss_detail` (
  `id` int(5) NOT NULL,
  `namalengkap` varchar(30) NOT NULL,
  `alamatlengkap` varchar(100) NOT NULL,
  `nomorhp` varchar(20) NOT NULL,
  `namausaha` varchar(50) NOT NULL,
  `alamatusaha` varchar(100) NOT NULL,
  `status` enum('On Progress','Tidak Tersertifikasi','Tersertifikasi','') NOT NULL DEFAULT 'On Progress',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan_pss_detail`
--

INSERT INTO `layanan_pss_detail` (`id`, `namalengkap`, `alamatlengkap`, `nomorhp`, `namausaha`, `alamatusaha`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Harjito', 'Jl. Rejosari timur 33', '081212166678', 'Tahu Gimbal', 'Jl. Barito 67', 'Tersertifikasi', '2018-06-26 04:13:07', '2018-06-27 05:38:41'),
(2, 'mashudi', 'barito 6', '081314157156718', 'Nasi Ayam', 'pancakarya', 'Tersertifikasi', '2018-06-26 06:49:49', '2018-06-27 05:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(10) NOT NULL,
  `nmmenu` varchar(100) DEFAULT NULL,
  `iduser` enum('Admin','User','Admin Layanan Publik','Admin2','Admin3') NOT NULL,
  `parentmenu` int(10) DEFAULT NULL,
  `urlci` varchar(100) DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `nmmenu`, `iduser`, `parentmenu`, `urlci`, `urut`, `created_at`, `updated_at`) VALUES
(1, 'PIRT', 'User', 0, 'Pirt', 0, '2018-05-25 15:02:06', '2018-05-26 16:03:33'),
(2, 'Input PIRT', 'User', 1, 'inputPIRT', 0, '2018-05-25 15:12:16', '2018-05-26 16:02:49'),
(6, 'Tentang Kami', 'Admin', 0, 'TentangKami', 0, '2018-05-29 10:26:23', '2018-05-29 10:53:29'),
(7, 'Sekapur Sirih', 'Admin', 6, 'sekapursirih', 0, '2018-05-29 10:27:06', '2018-05-29 10:27:06'),
(8, 'Visi Misi', 'Admin', 6, 'visimisi', 1, '2018-05-29 10:28:50', '2018-05-29 10:28:50'),
(9, 'Profile DKP', 'Admin', 6, 'profiledkp', 2, '2018-05-29 10:29:14', '2018-05-29 10:29:14'),
(10, 'Tupoksi DKP', 'Admin', 6, 'tupoksidkp', 3, '2018-05-29 10:29:53', '2018-05-29 10:29:53'),
(11, 'Struktur Organisasi', 'Admin', 6, 'strukturorganisasi', 4, '2018-05-29 10:48:39', '2018-05-29 10:48:39'),
(12, 'Data Pegawai', 'Admin', 6, 'datapegwawai', 5, '2018-05-29 10:49:38', '2018-05-29 10:49:51'),
(13, 'Layanan Publik', 'Admin Layanan Publik', 0, 'Layananpublik', 0, '2018-06-02 20:27:29', '2018-06-02 20:28:21'),
(14, 'Pedagang Siap Saji', 'Admin Layanan Publik', 13, 'pedagangsiapsaji', 0, '2018-06-02 20:36:20', '2018-06-02 20:36:20'),
(15, 'Nama Usaha', 'Admin Layanan Publik', 13, 'pedagangsiapsaji/namausaha', 1, '2018-06-26 16:00:00', '2018-06-26 02:59:25'),
(17, 'Pedagang Siap Saji', 'User', 0, 'Pss', 0, '2018-06-27 15:45:17', '2018-06-27 15:46:03'),
(18, 'Input Pedagang Siap Saji', 'User', 17, 'inputPSS', 0, '2018-06-27 15:46:58', '2018-06-27 15:46:58'),
(19, 'Daftar PIRT', 'User', 1, 'index', 1, '2018-06-27 15:56:41', '2018-06-27 15:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon_pirt`
--

CREATE TABLE `pemohon_pirt` (
  `id` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `namalengkap` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telepon_rumah` varchar(30) NOT NULL,
  `telepon_hp` varchar(30) NOT NULL,
  `namaperusahaan` varchar(30) NOT NULL,
  `alamatperusahaan` varchar(30) NOT NULL,
  `kodepos` varchar(30) NOT NULL,
  `telepon_kantor` varchar(30) NOT NULL,
  `kode_pangan` varchar(30) NOT NULL,
  `kode_kemasan` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `namadagang` varchar(30) NOT NULL,
  `beratbersih` varchar(30) NOT NULL,
  `prosesproduksi` varchar(30) NOT NULL,
  `masasimpan` varchar(30) NOT NULL,
  `kodeproduksi` varchar(30) NOT NULL,
  `cara_produksi` text,
  `alat_produksi` text,
  `bulanberdiri` varchar(15) NOT NULL,
  `tahunberdiri` int(5) NOT NULL,
  `komposisi` text NOT NULL,
  `status` enum('Sudah Dikirim','Sudah Diterima','Disurvey','Disetujui') NOT NULL DEFAULT 'Sudah Dikirim',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemohon_pirt`
--

INSERT INTO `pemohon_pirt` (`id`, `id_user`, `namalengkap`, `alamat`, `telepon_rumah`, `telepon_hp`, `namaperusahaan`, `alamatperusahaan`, `kodepos`, `telepon_kantor`, `kode_pangan`, `kode_kemasan`, `merk`, `namadagang`, `beratbersih`, `prosesproduksi`, `masasimpan`, `kodeproduksi`, `cara_produksi`, `alat_produksi`, `bulanberdiri`, `tahunberdiri`, `komposisi`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dimas', 'Sleman', '09090', '8989898', 'SS', 'Jetis', '90', '676', '10', '5', 'Kuaci', 'KOKO', '90', '3', 'Besok', '5665', NULL, NULL, 'Januari', 2010, 'Sayur', 'Sudah Dikirim', '2018-05-27 09:09:03', '2018-06-27 16:22:55'),
(3, 2, 'sadsd', 'dsadsda', 'd8989989', 'd989899', 'uiuiuiui', 'dsadsd', 'sadsdad', '9898998', '1', '1', 'uiiiuiu', 'sadasd', 'sadsad', 'dsadasd', 'dsadsad', 'sadsad', 'sdasd', 'asdasdsad', 'Desember', 2001, 'Beras', 'Sudah Dikirim', '2018-05-27 13:33:20', '2018-05-27 14:41:18'),
(4, 6, 'imam syafii', 'jl. srindito timur semarang', '029533565', '085640282554', 'madeindonesia', 'semarang barat', '02565', '023502456685', '57', '3', 'madein', 'ud.jaya', '250g', 'ulan madu (bahasa Inggris: hon', '1 tahun', '"Bulan pertama setelah pernika', 'Anda tidak harus sudah membaca seluruh kebijakan Wikipedia sebelum berkontribusi. Namun demikian, ada kunci-kunci utama yang penting yang harus Anda ikuti :\r\n\r\nWikipedia adalah sebuah ensiklopedia\r\nIni adalah satu-satunya tujuan kelahiran Wikipedia, dan bahan-bahan tulisan yang di luar tujuan ini harus dipindahkan ke proyek Wikimedia lainnya atau dihapus bila tidak bisa. (Lihat: Wikipedia bukanlah...)\r\nHormati pengguna lain\r\nPengguna yang menyumbangkan artikel atau suntingan datang dari berbagai latar belakang, kebudayaan, bahkan negara, dan mempunyai pandangan yang berbeda-beda. Dengan saling menghormati, kita dapat bekerjasama membangun ensiklopedia ini.\r\nJangan menulis hal-hal yang bisa mengganggu keharmonisan bersama, dan jangan menulis hal-hal yang menyinggung perasaan dan menyinggung SARA. (Lihat: kesopanan, etika, dan menyelesaikan perselisihan.)\r\nJangan melanggar hak cipta\r\nWikipedia merupakan ensiklopedia bebas yang dilisensikan di bawah syarat Lisensi Dokumentasi Bebas GNU.\r\nBila Anda menyumbangkan suatu karya orang lain tanpa izin, maka itu akan mengancam tujuan utama kami untuk membangun ensiklopedia bebas yang bisa disebarluaskan secara bebas. Sumbangan karya tanpa izin juga bisa mengakibatkan masalah hukum bagi Wikipedia. (Lihat hak cipta Wikipedia.)\r\nPoin ini merupakan hal mendasar yang juga berlaku bagi seluruh proyek Wikimedia.\r\nJauhi prasangka\r\nArtikel perlu ditulis dari sudut pandang netral, yang berarti artikel patut mewakili pandangan dari sudut berbeda secara adil, proporsional, dan tanpa prasangka.\r\nPoin ini juga merupakan hal mendasar yang juga berlaku bagi seluruh proyek Wikimedia.\r\nHanya untuk informasi yang dapat diverifikasi.\r\nArtikel-artikel Wikipedia harus berdasarkan sumber-sumber publikasi yang terpercaya, dan sumber-sumber ini harus dituliskan sehingga penyunting lainnya dapat memeriksa artikel-artikel tersebut. (Lihat Wikipedia:Pemastian dan Wikipedia:Bukan riset asli.', 'Berikut adalah urutan bacaan yang kami sarankan, sebelum Anda berkontribusi lebih lanjut di Wikipedia:\r\n\r\nLima pilar Wikipedia: ikhtisar singkat mengenai kelima aturan kunci yang harus Anda ketahui sebelum melakukan penyuntingan.\r\nKumpulan aturan yang disederhanakan: 15 aturan singkat yang akan membantu Anda agar terhindar dari masalah.\r\nDaftar kebijakan Wikipedia: Daftar menyeluruh dari kebijakan-kebijakan resmi yang disertai dengan ikhtisar singkat.\r\nSetiap kebijakan dan pedoman dapat Anda temukan di dalam kategori-kategori berikut:\r\n\r\nKategori:Kebijakan Wikipedia: daftar kebijakan yang harus diikuti setiap penyunting.\r\nKategori:Pedoman Wikipedia: daftar aturan singkat yang diterima secara umum untuk berbagai kasus.', 'maret', 1985, 'Danau Toba\r\nDanau Toba\r\nLarangan mengemudi terhadap wanita di Arab Saudi secara resmi dicabut.\r\nKanada menjadi negara kedua yang melegalkan penggunaan ganja untuk tujuan rekreasi.\r\nKM Sinar Bangun tenggelam di Danau Toba (gambar), Sumatera Utara.\r\nSedikitnya 21 orang tewas terinjak dalam insiden pelemparan gas air mata di sebuah klub malam di Caracas, Venezuela.\r\nFIFA memberikan hak tuan rumah Piala Dunia 2026 kepada Kanada, Meksiko, dan Amerika Serikat.\r\nSedang berlangsung: Piala Dunia FIFA 2018\r\nKematian terkini: Harry Moekti - Nurbuat - Anthony Bourdain - Dawam Rahardjo - Jens Christian Skou', 'Sudah Dikirim', '2018-06-26 03:32:46', '2018-06-26 03:32:46'),
(5, 6, 'alihando darta ', 'jl. singosari semarang barat s', '029563445', '085642856956', 'MADEINDONESIA', 'JL. SRINDITO TIMUR NO.4 SEMARA', '04582', '029565454', '8', '5', 'CIMANIS', 'UD. JAYA MANDIRI', '250g', 'IKAN DARI NELAYAN, DIOLAH DI B', '5 BULAN ', '1245220123', 'Pembersihan Ikan\r\n\r\nPembersihan ikan disini sangatlah penting, dimulai dengan pengelupasan kulit pada ikan supaya saat pengasinan dapat mudah masuk ke dalam daging. Kemudian pembersihan bagian dalam perut ikan, ini sangat penting karena jika tidak dibuang akan mempercepat kebusukan dan pastinya tidak ada yang mau dengan isi perut ikan. \r\n\r\nPemotongan Ikan\r\nPemotongan ikan harus dilakukan dengan hati-hati, pastikan semua potongan anda bagus dan rapi. cara memotong yang baik adalah melakukan pembelahan mulai dari kepala hingga ekor, jangan sampai terpotong atau terpisah menjadi dua. Karena ikan akan terasa lebih besar dan ketebalan daging ikan lebih tipis sehingga lebih bagus dalam proses pengasinan. Setelah dipotong jangan lupa untuk membersihkannya kembali.\r\n\r\nPengasinan Ikan\r\nIkan yang telah dipotong menjadi lebar dan dibersihkan perlua dilakukan proses pengasinan. Ini betujuan untuk pengawetan alami, dan membuat ikan tersebut berasa asin tentunya. Pada proses pengasinan berikut ini anda dapat melakukannya dengan cara membuat kandungna air dan garam dengan persentase 50% air bersih tawar dan 50% garam. Selanjutnya untuk proses perndaman dilakukan 1-1/2 hari tergantung keinginan seberapa tingkat keasinan ikan tersebut. Agar lebih menghemat wadah, bisa dilakukan pengepresan dengan batu bersih agar ikan dapat tenggelam. \r\n\r\n \r\nPengasinan ikan sebenarnya ada 2 jenis yaitu basah dan kering, yang diata adalah cara untuk pengasinan basah. Sedangkan untuk pengasinan kering adalah, Ikan yang telah bersih dan dibelah lalu dijemur sambil diolesi garam kering merata di seluruh bagian tubuh ikan tersebut. \r\n\r\nPenjemuran Ikan Asin\r\nProses penjemuran ini merupakan tahapan yang sangat penting, jika proses penjemuran gagal maka ikan yang telah diasinkan tidak dapat kering secara maksimal dan hasilnyapun akan jelek. Buat wadah /tempat penjemuran bisa dibuat dari bahan kayu / anyaman bambu. Keringkan 1 per 1 jangan ditumpuk, berilah jarak yang cukup agar sekeliling daging ikan dapat terkena sinar matahari dengan baik dan rata. Sesekali ikan yang dijemur haruslah dibalik untuk mendapatkan kering yang merata disemua sisinya.\r\n\r\nPengemasan / Pembungkusan Ikan Asin\r\nIni adalah proses terakhir dari pembuatan ikan asain. Dalam pengemasan sebaiknya dilakukan secara sehat dan rapi. Dalam artian ikan asih ditempatkan yang steril dari sampah, saat pembungkusan di plastik pastikan plasitik itu bersih / baru, rapatkan plastik secara benar-benar rapat agar menghindari angi masuk. Jika ingin membuat bungkus yang baik pakailah alat penyedot udara agar dalam plastik benar-benar bersih dari udara.\r\n\r\nJangan lupa untuk memberi merek supaya produk yang telah anda buat dikenal di masyarakat. Jika sudah banyak yang tertarik jangan lupa untuk melegalkan merek produk anda supaya memiliki standar kualitas yang sama baiknya.', '- pisau dapur .\r\n- bak semen atau bak kayu berlapis plastik kedap air sbg wadah dalam proses penggaraman.\r\n- penutup bak dan pemberat.\r\n- alat ukur berat .\r\n- keranjang plastik atu keranjang bambu.\r\n- tempat penjemuran.', 'MARET', 1999, 'IKAN, GARAM, ', 'Sudah Dikirim', '2018-06-27 03:32:16', '2018-06-27 03:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id` int(5) NOT NULL,
  `admin_id` int(5) DEFAULT NULL,
  `sekapursirih` text,
  `visi` text,
  `misi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_kami`
--

INSERT INTO `tentang_kami` (`id`, `admin_id`, `sekapursirih`, `visi`, `misi`) VALUES
(1, 4, '<p>Insert sekapur sirih</p>', '<p>Test VISI</p>', '<p>Test Misi</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_belakang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('pria','wanita') COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('Admin','User','Admin Layanan Publik','Admin2','Admin3') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_depan`, `nama_belakang`, `alamat`, `tanggal_lahir`, `jenis_kelamin`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Dimas', 'Mahendra', 'Sleman', '2018-05-24', 'pria', 'user1@dkp.com', '$2y$10$GUlpnUfBT3D/9cFWjn.8funLz80UEseS.jbZj.0h71PArFrmz.rri', 'User', '2018-05-25 14:31:40', '2018-06-27 15:26:21'),
(2, 'Vina', 'Selfiana', 'Jetis', '2018-05-15', 'wanita', 'vina@ss.com', '$2y$10$D61w9C3P3.mFKbzJhrEWBuskIWLubgh62UtExw4OkxXabICnVak1G', 'User', '2018-05-27 08:19:50', '2018-05-27 08:19:50'),
(3, 'Santo', 'Petrus', 'Gejayan', '2018-05-23', 'pria', 'santo@ss.com', '$2y$10$FIISRgW3La.L7jHUK/04KOl6BKZLXnpEBccFsHmHmW8fCp7C.75ky', 'User', '2018-05-27 08:26:04', '2018-05-27 08:26:04'),
(4, 'Admin', 'Utama', 'Sleman', '2018-05-08', 'pria', 'admin@dkp.com', '$2y$10$c0GkoWy1RjSB7CvFuKAT1eyETm8sOFyWCpSMNPbhdrzJqS3xhYK8e', 'Admin', '2018-05-29 10:51:01', '2018-05-29 10:51:01'),
(5, 'Layanan', 'Publik', 'Semarang', '2018-06-04', 'pria', 'layananpublik@dkp.com', '$2y$10$4s0HlaylohfLFf3jsgEq9OAxdKDfdOcfBVr81ahXK5NiUpWApg./G', 'Admin Layanan Publik', '2018-06-02 20:25:55', '2018-06-02 20:25:55'),
(6, 'imam', 'suhadak', 'semarangg', '1998-07-07', 'pria', 'imamsyaafii1@gmail.com', '$2y$10$sDoMKNLuVesHCIqfaIa4UuGjatxtXrBKUaT.haY/3NpcyfpIFgnNG', 'User', '2018-06-26 03:25:31', '2018-06-26 03:25:31'),
(7, 'Dimas', 'Mahendra', 'Sleman', '2018-06-27', 'pria', 'dimas@ss.com', '$2y$10$DSBBAyafGXPijoqnSASds.s9Je16QV4KEkmX31Anw9IFRaO9mi.Uu', 'User', '2018-06-26 05:12:24', '2018-06-26 05:12:24'),
(8, 'Heriko', 'Aribowo', 'Ngaliyan semarang', '2018-06-26', 'pria', 'herikoaribowo@gmail.com', '$2y$10$mxaktCLrg/YBf3Di41pv8eglvjp3FJReBAB.fIT/M9tKs1fdhvpjK', 'User', '2018-06-26 05:21:47', '2018-06-26 05:21:47'),
(9, 'ery', 'setyo', 'jl. rejosari 3 no.29', '1978-05-21', 'pria', 'mr_bird80@yahoo.com', '$2y$10$5TJzfCSYGsPkbd4TEBIFcegTMu3B0AgqsYXscn0RclkxX1YZvdgWS', 'User', '2018-06-26 05:22:24', '2018-06-26 05:22:24'),
(10, 'ery', 'setyo', 'jl. rejosari 3 no.29', '1978-05-21', 'pria', 'mr_bird80@yahoo.com', '$2y$10$k5ohYRbzN2VNqVhlyg2fP.S/cpDKj84udkv.AgEqNpfotwS19nKIy', 'User', '2018-06-26 05:38:09', '2018-06-26 05:38:09'),
(11, 'ery', 'setyo', 'jl. rejosari 3 no.29', '1978-05-21', 'pria', 'mr_bird80@yahoo.com', '$2y$10$KnHylkD0mvz7QEpsLfZcM.ApRBghNjqrG/HGanXuSvAC1vpMUZaUq', 'User', '2018-06-26 06:21:10', '2018-06-26 06:21:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kode_kemasan`
--
ALTER TABLE `kode_kemasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_pangan`
--
ALTER TABLE `kode_pangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_pangan_detail`
--
ALTER TABLE `kode_pangan_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_pss`
--
ALTER TABLE `layanan_pss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_pss_detail`
--
ALTER TABLE `layanan_pss_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `pemohon_pirt`
--
ALTER TABLE `pemohon_pirt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kode_kemasan`
--
ALTER TABLE `kode_kemasan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kode_pangan`
--
ALTER TABLE `kode_pangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kode_pangan_detail`
--
ALTER TABLE `kode_pangan_detail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `layanan_pss`
--
ALTER TABLE `layanan_pss`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `layanan_pss_detail`
--
ALTER TABLE `layanan_pss_detail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pemohon_pirt`
--
ALTER TABLE `pemohon_pirt`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `layanan_pss`
--
ALTER TABLE `layanan_pss`
  ADD CONSTRAINT `detail_id` FOREIGN KEY (`id`) REFERENCES `layanan_pss_detail` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
