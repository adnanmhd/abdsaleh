-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 11:07 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abdsaleh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `judul` varchar(250) NOT NULL,
  `berita` text NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `tgl_post`, `judul`, `berita`, `gambar`) VALUES
(2, '2016-07-15 03:11:29', 'Lanud Abdul Rachman Saleh larang masyarakat ganggu jalur penerbangan', '<p>Gangguan yang terjadi pada penerbangan dalam beberapa waktu belakangan membuat Lapangan Udara (Lanud) Abdul Rachman Saleh menerbitkan surat larangan aktivitas udara di sekitar bandara. Dilansir dari&nbsp;<a href="http://www.merdeka.com/peristiwa/radius-15-km-dari-lanud-malang-warga-dilarang-main-layang-dan-laser.html" target="_blank"><strong>Merdeka.com</strong></a>, surat bernomor B/374/VII/2016 itu melarang masyarakat dan instansi apapun di radius 15 km memanfaatkan wilayah udara terbuka.<br />\r\n<br />\r\nKomandan Lapangan Udara (Danlanud) Abdul Rachman Saleh mengungkapkan, masyarakat dan instansi dalam radius 15 km dari Pangkalan AU dan Bandara Abdulrachman Saleh diimbau tidak memanfaatkan wilayah udara terbuka untuk kegiatan apapun.<br />\r\n<br />\r\n&quot;Surat tersebut bentuk imbauan untuk mensosialisasikan kepada masyarakat terkait keselamatan penerbangan,&quot; kata Marsekal Pertama Djoko Senoputro, Danlanud Abdul Rachman Saleh Malang.<br />\r\n<br />\r\nBerbagai aktivitas yang dilarang antara lain adalah pelepasan balon udara, menaikkan layang-layang dan menyalakan laser pointer dengan intensitas tinggi ke atas. Semua aktivitas tersebut dilarang untuk dilakukan sekitar bandara.<br />\r\n<br />\r\nSelain itu terdapat berbagai aktivitas yang membutuhkan izin pihak Lanud seperti menerbangkan drone dan sejenisnya, paralayang, paramotor atau trike, serta ultralight (kembang api) dan sejenisnya. Larangan ini dimaksudkan untuk mencegah terjadinya risiko kecelakaan penerbangan.<br />\r\n<br />\r\nLarangan ini muncul setelah terjadinya balon gas yang masuk ke wilayah Lanud Abdul Rachman Saleh pada 13 dan 15 juli lalu. Bahkan hal tersebut sempat menghentikan sementara latihan militer menggunakan pesawat Tucano. Balon itu sendiri diduga berasal dari perataan lebaran ketupat di Jember.<br />\r\n<br />\r\n&quot;Tradisi sebagai sesuatu yang positif, tetapi harus disosialisasikan juga tentang efek dari balon itu terhadap keselamatan penerbangan dan penumpangnya,&quot; katanya.<br />\r\n<br />\r\nDjoko mengungkapkan bahwa balon udara dapat terbang hingga 30 ribu feet sehingga dapat menganggu penerbangan. Balon tersebut dapat berbahaya jika tersangkut pesawat dengan kecepatan tinggi karena materi dari balon dapat masuk dan menganggu mesin pesawat.<br />\r\n<br />\r\n&quot;Materi balon udara tidak hanya plastik, tetapi ada kawat, kayu-kayu bahkan bahan bakar yang dinyalakan,&quot; katanya.<br />\r\n<br />\r\nSelain balon, layang-layang, laser dan kembang api juga dapat membahayakan penerbangan. Djoko menyatakan bahwa jika melakukan berbagai kegiatan tersebut sebaiknya di tempat yang bukan merupakan lintasan penerbangan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sumber : Merdeka.com</p>\r\n', '2.jpg'),
(3, '2016-07-22 06:56:30', 'Akibat Abu Bromo, Bandara Abdurrahman Saleh Ditutup Hingga Minggu Pagi', '<p>Bandara Abdurrahman Saleh, Malang ditutup hingga Minggu pagi. Penutupan ini karena erupsi Bromo. Sebaran abu bisa menggangu penerbangan.<br />\r\nSeperti disampaikan Menhub Ignasius Jonan, Sabtu (16/7/2016) penutupan bandara hingga Minggu (17/7) ini akan kembali dievaluasi esok pagi.<br />\r\n&quot;Diberitahukan karena sebaran vulcanic ashes Gunung Tengger (Bromo), bahwa Bandara Abdurrahman Saleh Malang masih ditutup sampai dengan jam 09.00 tanggal (17/7) dan akan dievaluasi besok pagi, mohon antisipasi,&quot; jelas Jonan.<br />\r\nSudah beberapa hari ini Bromo memang &#39;batuk&#39;. Akibatnya jalur penerbangan demi keselamatan ditutup lebih dahulu.</p>\r\n\r\n<p>Smber : Detik.com</p>\r\n', '1.JPG'),
(4, '2016-07-26 07:49:30', 'Pengamanan Lebaran, Bandara Dilengkapi Personel Penjinak Bom', '                          <p>Jelang Lebaran, Lanud Abdurrahman Saleh memperketat pengamanan bandara, bekerja sama dengan Polri. Hari ini Paskhas Lanud Abdurrahman Saleh menggelar apel pasukan bersama, melibatkan penjinak bom (Jibom) Brimob, bertempat di Bandara Abdurrahman Saleh, Pakis, Kabupaten Malang.Danlanud Abdurrahman Saleh, Marsma TNI Djoko Senoputro, menjelaskan, TNI AU sudah bersinergi dengan aparat gabungan dari Polri, juga pasukan Gegana dari Brimob, untuk membantu proses pengamanan.</p>\r\n\r\n<p>“Kami perketat pengamanan, agar para penumpang di bandara merasa aman,” jelasnya, saat ditemui di Lanud, beberapa menit lalu.Djoko juga menjelaskan, berdasar perintah langsung dari Panglima TNI dan Kapolri, pihaknya tidak mau kecolongan sekecil apapun, terutama di Bandara Abdurrahman Saleh.“Ada  sekitar 223 pasukan gabungan yang siap membantu proses pengamanan. Kami sudah membagi penjagaan di beberapa wilayah,” imbuh dia. Djoko berharap, melalui kerjasama ini bisa meminimalisir terjadinya terorisme, terutama agar tidak terjadi ancaman bom di bandara.</p>\r\n\r\n<p>Sumber : MALANGVOICE.com</p>\r\n                        ', 'IMG_1157.JPG'),
(5, '2016-08-08 01:57:09', 'Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc malesuada elit sem, et posuere dolor placerat nec. Cras auctor nunc sapien. Nam pulvinar bibendum tincidunt. Integer hendrerit lorem lectus, eget eleifend dolor bibendum ut. Nulla facilisi. Proin finibus pellentesque mollis. Pellentesque id pellentesque erat. Morbi arcu risus, imperdiet at scelerisque sit amet, gravida quis nisi.</p>\r\n\r\n<p>Aliquam ac dapibus lorem. Phasellus pretium ligula at interdum porta. Proin sit amet tempus sapien. Phasellus convallis neque sit amet facilisis pharetra. Aenean tincidunt nibh a euismod vestibulum. Aenean enim purus, vulputate at lectus vel, tincidunt fermentum enim. Nam odio risus, hendrerit vitae mi nec, feugiat aliquet orci. Nulla consectetur tincidunt velit non pretium. Duis pharetra non dui eget dapibus. Praesent eget ex ut nunc interdum sagittis quis in neque. Nulla vulputate dui at diam lacinia laoreet.</p>\r\n\r\n<p>Fusce at scelerisque arcu, ac lacinia libero. Curabitur tellus lorem, pellentesque et posuere id, gravida sed neque. Aliquam est est, euismod vitae molestie nec, posuere ut purus. Nullam consectetur sed nibh vitae lacinia. Mauris mollis accumsan accumsan. Sed commodo elementum justo, sit amet sodales nibh facilisis at. Fusce a malesuada dui. Nulla ipsum massa, viverra in mauris tristique, posuere pulvinar enim. Vivamus aliquam libero faucibus ornare dignissim. Sed nec ligula vestibulum, convallis nunc quis, porttitor lorem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean dapibus rhoncus malesuada. Aenean viverra risus vitae ante tincidunt, volutpat fermentum diam iaculis. Nunc purus velit, interdum a rutrum id, scelerisque vel magna.</p>\r\n', '1.jpg'),
(6, '2016-08-08 01:58:54', 'Lorem Ipsum 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc malesuada elit sem, et posuere dolor placerat nec. Cras auctor nunc sapien. Nam pulvinar bibendum tincidunt. Integer hendrerit lorem lectus, eget eleifend dolor bibendum ut. Nulla facilisi. Proin finibus pellentesque mollis. Pellentesque id pellentesque erat. Morbi arcu risus, imperdiet at scelerisque sit amet, gravida quis nisi.</p>\r\n\r\n<p>Aliquam ac dapibus lorem. Phasellus pretium ligula at interdum porta. Proin sit amet tempus sapien. Phasellus convallis neque sit amet facilisis pharetra. Aenean tincidunt nibh a euismod vestibulum. Aenean enim purus, vulputate at lectus vel, tincidunt fermentum enim. Nam odio risus, hendrerit vitae mi nec, feugiat aliquet orci. Nulla consectetur tincidunt velit non pretium. Duis pharetra non dui eget dapibus. Praesent eget ex ut nunc interdum sagittis quis in neque. Nulla vulputate dui at diam lacinia laoreet.</p>\r\n\r\n<p>Fusce at scelerisque arcu, ac lacinia libero. Curabitur tellus lorem, pellentesque et posuere id, gravida sed neque. Aliquam est est, euismod vitae molestie nec, posuere ut purus. Nullam consectetur sed nibh vitae lacinia. Mauris mollis accumsan accumsan. Sed commodo elementum justo, sit amet sodales nibh facilisis at. Fusce a malesuada dui. Nulla ipsum massa, viverra in mauris tristique, posuere pulvinar enim. Vivamus aliquam libero faucibus ornare dignissim. Sed nec ligula vestibulum, convallis nunc quis, porttitor lorem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean dapibus rhoncus malesuada. Aenean viverra risus vitae ante tincidunt, volutpat fermentum diam iaculis. Nunc purus velit, interdum a rutrum id, scelerisque vel magna.</p>\r\n', '1TD212I72S.jpg'),
(7, '2016-08-08 03:52:58', 'Lorem Ipsum 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt aliquam risus ac porttitor. Pellentesque at pellentesque mauris, id rutrum felis. Phasellus vitae augue finibus, posuere nibh id, congue magna. Cras id lorem et mi commodo mattis ut ac leo. Morbi eu nulla ut libero interdum molestie. Quisque eu leo laoreet, luctus mi vitae, posuere orci. Sed aliquet varius massa in ultricies. Aenean at ligula ipsum. In suscipit diam sit amet sapien pellentesque eleifend. Nunc blandit luctus dui ut egestas. Etiam eget dui ut nisl lacinia viverra ut ac nibh. Etiam id turpis ante. Maecenas non ligula sed magna condimentum lobortis. Sed libero est, consectetur vitae suscipit vitae, fringilla dapibus eros.</p>\r\n\r\n<p>Nullam rutrum tortor at bibendum porttitor. Pellentesque in sollicitudin libero. Proin ac euismod diam. Nulla ipsum massa, feugiat eu leo ac, vestibulum pulvinar nisl. Sed risus nisl, tincidunt ut egestas et, gravida sed enim. Sed iaculis elementum mollis. Nullam maximus lectus id ex vehicula, vitae vulputate orci mattis. Ut semper vulputate felis non facilisis. Nam ligula augue, eleifend vitae ex id, interdum faucibus odio.</p>\r\n\r\n<p>In hac habitasse platea dictumst. Donec enim metus, venenatis sed est a, finibus efficitur risus. Aliquam blandit vehicula turpis, in congue ligula fermentum a. Sed lacinia, ante et consectetur congue, ante felis varius leo, vel pulvinar dolor leo ornare massa. Nulla facilisi. Mauris dictum fringilla lacus. Quisque quis mi a nunc tempus condimentum id vel eros. Etiam ut commodo quam. Curabitur sed purus mi.</p>\r\n', 'Untitled 173.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL,
  `informasi_fasilitas` varchar(250) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `informasi_fasilitas`, `jenis`, `gambar`) VALUES
(4, 'Apron', 'Luas area 4.500 m2, telah mengalami perbaikan pada tahun 2014.', 'Air Side', 'IMG_0934.JPG'),
(5, 'Terminal Keberangkatan', 'Luas area 4.500 m2, telah mengalami perbaikan pada tahun 2014.', 'Land Side', 'IMG_5207.JPG'),
(6, 'Terminal Kedatangan', 'Memiliki luas area 750 m satuan luas. Terminal ini pertama kali dibangun pada tahun 1997', 'Land Side', 'IMG_2251.JPG'),
(7, 'Gedung Kantor', 'Dengan luas bangunan 350 m satuan luas. Pertama kali dibangun pada tahun 1997', 'Land Side', 'IMG_0221.JPG'),
(8, 'Parkir Kendaraan Roda 4', 'Dengan luas area 10.690 m satuan luas. Terakhir kali mengalami perbaikan dan renovasi pada tahun 2009', 'Land Side', 'Untitled 175.jpg'),
(9, 'Tower ATC', 'Dengan luas area 25 m satuan luas', 'Land Side', 'Gatwick ATC.jpg'),
(10, 'Runway', 'Dengan total luas area 2.250x40 m satuan luas.', 'Air Side', 'IMG_0657.JPG'),
(11, 'Taxi Way', 'Memiliki luas area 145x20 m satuan luas', 'Air Side', 'IMG_0654.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_photo` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `judul` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_photo`, `waktu`, `judul`, `photo`) VALUES
(7, '2016-07-24 13:05:34', 'Pelatihan dan penyuluhan dari Dinas Kesehatan Propinsi Jawa Timur', 'IMG_1072.JPG'),
(8, '2016-07-24 13:46:35', 'tes', 'IMG_5165.JPG'),
(9, '2016-07-24 13:48:24', 'Prosesi upacara gabungan Dishub dan TNI', 'IMG_1182.JPG'),
(10, '2016-07-24 13:49:41', 'Lorem Ipsum', 'IMG_5164.JPG'),
(14, '2016-07-25 04:12:56', 'Lorem Ipsum.', 'IMG_0154.JPG'),
(15, '2016-07-25 04:13:51', 'kbsmsdbasdbmasdmab', 'IMG_5207.JPG'),
(17, '2016-07-25 04:28:53', 'Lorem Ipsum', 'IMG_5219.JPG'),
(18, '2016-07-25 04:29:27', 'Kunjungan Bapak Presiden SBY', 'IMG_0153.JPG'),
(19, '2016-08-08 03:40:03', 'Lorem Ipsum', 'Kendaraan PKP-PK Bandara Abdulrachman Saleh.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_penerbangan`
--

CREATE TABLE IF NOT EXISTS `jadwal_penerbangan` (
  `id_jadwal` int(11) NOT NULL,
  `no_penerbangan` varchar(10) NOT NULL,
  `id_maskapai` int(11) NOT NULL,
  `id_route` int(11) NOT NULL,
  `waktu_berangkat` time NOT NULL,
  `waktu_tiba` time NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_penerbangan`
--

INSERT INTO `jadwal_penerbangan` (`id_jadwal`, `no_penerbangan`, `id_maskapai`, `id_route`, `waktu_berangkat`, `waktu_tiba`, `status`) VALUES
(1, 'GA-290', 1, 1, '08:25:00', '10:10:00', ''),
(2, 'GA-291', 1, 2, '10:55:00', '12:30:00', ''),
(3, 'GA-292', 1, 1, '10:45:00', '12:25:00', ''),
(4, 'GA-293', 1, 2, '13:10:00', '14:40:00', ''),
(6, 'ID-7580', 4, 4, '10:00:00', '12:00:00', ''),
(7, 'ID-7581', 4, 3, '07:45:00', '09:15:00', ''),
(8, 'ID-7582', 4, 4, '14:30:00', '16:00:00', ''),
(9, 'ID-7583', 4, 3, '12:45:00', '14:15:00', ''),
(10, 'IW-1840', 5, 5, '12:40:00', '13:50:00', ''),
(11, 'IW-1841', 5, 6, '14:20:00', '15:30:00', ''),
(12, 'QG-144', 2, 3, '12:35:00', '14:00:00', ''),
(13, 'QG-145', 2, 4, '14:30:00', '15:55:00', ''),
(14, 'QG-9243', 2, 3, '07:30:00', '08:10:00', ''),
(15, 'QG-9244', 2, 2, '09:25:00', '10:50:00', ''),
(16, 'SJ-246', 3, 1, '10:50:00', '12:15:00', ''),
(17, 'SJ-247', 3, 2, '12:45:00', '14:05:00', ''),
(18, 'SJ-248', 3, 1, '12:30:00', '14:20:00', ''),
(19, 'SJ-249', 3, 2, '14:50:00', '16:10:00', ''),
(20, 'SJ-250', 3, 1, '06:40:00', '08:55:00', ''),
(21, 'SJ-251', 3, 2, '08:40:00', '10:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_penerbangan`
--

CREATE TABLE IF NOT EXISTS `laporan_penerbangan` (
  `tahun` varchar(4) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_penerbangan`
--

INSERT INTO `laporan_penerbangan` (`tahun`, `judul`, `file`) VALUES
('2010', 'PERKEMBANGAN PESAWAT, PENUMPANG, BAGASI DAN CARGO DATANG DAN BERANGKAT DI BANDARA ABDULRACHMAN SALEH MALANG TAHUN 2010', 'laporan2010.xlsx'),
('2011', 'PERKEMBANGAN PESAWAT, PENUMPANG, BAGASI DAN CARGO DATANG DAN BERANGKAT DI BANDARA ABDULRACHMAN SALEH MALANG TAHUN  2011', 'laporan2011.xlsx'),
('2012', 'PERKEMBANGAN PESAWAT, PENUMPANG, BAGASI DAN CARGO DATANG DAN BERANGKAT DI BANDARA ABDULRACHMAN SALEH MALANG	TAHUN  2012', 'laporan2012.xlsx'),
('2013', 'PERKEMBANGAN PESAWAT, PENUMPANG, BAGASI DAN CARGO DATANG DAN BERANGKAT DI BANDARA ABDULRACHMAN SALEH MALANG TAHUN  2013', 'laporan2013.xlsx'),
('2014', 'TOTAL ANGKUTAN UDARA BANDARA  ABDULRACHMAN SALEH MALANG TANGGAL 01 JANUARI s/d   31 Desember  2014', 'laporan2014.xlsx'),
('2015', 'TOTAL ANGKUTAN UDARA BANDARA  ABDULRACHMAN SALEH MALANG TAHUN 2015', 'laporan2015.xlsx'),
('2016', 'PERBANDINGAN PROSENTASE ANGKUTAN LEBARAN TAHUN 2015 DENGAN TAHUN 2016 DI BANDARA ABDULRACHMAN SALEH MALANG', 'laporan2016.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `maskapai`
--

CREATE TABLE IF NOT EXISTS `maskapai` (
  `id_maskapai` int(11) NOT NULL,
  `nama_maskapai` varchar(50) NOT NULL,
  `jenis_pesawat` varchar(20) NOT NULL,
  `kapasitas_kursi` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maskapai`
--

INSERT INTO `maskapai` (`id_maskapai`, `nama_maskapai`, `jenis_pesawat`, `kapasitas_kursi`, `no_telp`, `gambar`) VALUES
(1, 'Garuda Indonesia', 'Airbus 827', 185, '0341 - 2993366', 'ga.png'),
(2, 'Citilink', 'AIRBUS A230-200', 180, '0341 - 2993339', 'ct.png'),
(3, 'Sriwijaya Air', 'BOEING 739', 189, '0341 - 471777', 'sj.png'),
(4, 'Batik Air', 'BOEING 739', 162, '0341 - 2993370', 'ba.png'),
(5, 'Wings Air', 'ATR 72-500/600', 72, '0341 - 2993370', 'wa.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `pesan` text NOT NULL,
  `dibaca` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `waktu`, `nama`, `email`, `subject`, `pesan`, `dibaca`) VALUES
(1, '2016-08-03 04:34:55', 'Test', 'adnan.mhd94@gmail.com', 'coba', 'asdsd', 2),
(2, '2016-08-04 00:22:51', '''adas', 'adnan.mhd94@gmail.com', 'asda<?asas', 'aksdjad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `tentang_kami` text NOT NULL,
  `visi` varchar(100) NOT NULL,
  `misi` text NOT NULL,
  `sejarah` text NOT NULL,
  `alamat` int(11) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `email` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `id_route` int(11) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id_route`, `dari`, `tujuan`) VALUES
(1, '(CGK) Jakarta', 'Malang'),
(2, 'Malang', '(CGK) Jakarta'),
(3, '(HLP) Jakarta', 'Malang'),
(4, 'Malang', '(HLP) Jakarta'),
(5, 'Denpasar', 'Malang'),
(6, 'Malang', 'Denpasar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `jadwal_penerbangan`
--
ALTER TABLE `jadwal_penerbangan`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `laporan_penerbangan`
--
ALTER TABLE `laporan_penerbangan`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `maskapai`
--
ALTER TABLE `maskapai`
  ADD PRIMARY KEY (`id_maskapai`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id_route`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `jadwal_penerbangan`
--
ALTER TABLE `jadwal_penerbangan`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `maskapai`
--
ALTER TABLE `maskapai`
  MODIFY `id_maskapai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id_route` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
