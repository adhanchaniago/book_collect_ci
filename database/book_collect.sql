-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2019 at 06:43 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_collect`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` int(35) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `tgl_daftar`, `nama`, `tgl_lahir`, `alamat`, `no_hp`, `email`) VALUES
(6, '2019-12-16', 'Administrator', '0000-00-00', 'Jlanwaudwnadadwad', 2147483647, 'dwadw@dwadwad.cpm'),
(11, '2019-12-18', 'Risha Asdiyana Rifi', '0000-00-00', 'Jalan Wkamdkamdadadawadadwadaw', 2147483647, 'sdadwad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `isi` longtext NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `isi`, `judul`, `tanggal`, `penulis`, `image`) VALUES
(4, '<p>\r\n\r\n\r\n	\r\n	\r\n	\r\n	<style type=\"text/css\">p { margin-bottom: 0.1in; direction: ltr; line-height: 115%; text-align: left; }a:link { color: rgb(0, 0, 255); }</style>\r\n\r\n\r\n</p><p style=\"margin-bottom: 0.26in; line-height: 100%; background: #f5f5f5\">\r\n<font face=\"Times New Roman, serif\"><font style=\"font-size: 12pt\" size=\"3\"><font color=\"#525252\">Brebes,-\r\nDalam rangka memperingati Hari Ulang Tahun Kabupaten Brebes ke 341\r\ntahun, Taman Baca Masyarakat (TBM) Desa Sigambir Kecamatan Brebes\r\nKabupaten Brebes ikut memeriahkan dengan mengadakan perlombaan\r\ntingkat paud, TK/RA dan SD/Mi sederajat, dimana ada tiga katagori\r\nyang diperlombakan yakni Lomba mewarnai tingkat Paud/KB dan tingkat\r\nTK/RA, Lomba baca puisi tingkat SD/MI sederajat dan Lomba Tahfidz\r\nQuran tingkat RA/SD/MI.</font></font></font></p>\r\n<p style=\"margin-bottom: 0.26in; line-height: 100%; background: #f5f5f5\">\r\n<font face=\"Times New Roman, serif\"><font style=\"font-size: 12pt\" size=\"3\"><font color=\"#525252\">Kegiatan\r\nini dilaksanakan sekaligus memperkenalkan adanya gedung TBM yang\r\nberdampingan dengan Polindes untuk tempat bacaan bagi masyarakat\r\nsekitar.<br>\r\nPerlombaan ini, di ikuti oleh sekitar 172 peserta dari\r\nmasing-masing sekolah dengan lomba mewarnai 80 peserta, lomba baca\r\npuisi 32 peserta dan lomba Tahfidz Quran 60 peserta, bahkan ada\r\nbeberapa peserta dari tegal dan slawi yang mengikuti lomba tahfidz\r\nquran.<br>\r\n<br>\r\nPemdes Sigambir, Aulia Fahmi Basa dalam sambutannya\r\nmenuturkan sangat mengapresiasi kepada TBM Sigambir dengan kegiatan\r\nperlombaan seperti ini untuk menggugah anak-anak dari tingkat\r\nPAUD/RA/TK bisa berkreasi dengan mengikuti lomba.<br>\r\n<br>\r\n\"Kami\r\nsangat bangga dengan pemuda pemudi yang sudah mau mengingatkan akan\r\npentingnya membaca dari usia dini dengan mendirikan Taman Bacaan\r\nMasyarakat (TBM) di desa sigambir,\" tuturnya, kemarin.<br>\r\n<br>\r\nLebih\r\nlanjut, pihaknya &nbsp;berharap dengan adanya TBM masyarakat Desa\r\nSigambir khususnya anak anak lebih gemar membaca, karena membaca\r\nsangat penting utk menambah wawasan ilmu kita.<br>\r\n<br>\r\n\"Ini\r\nsalah satu kegiatan yang luar biasa, antusias masyarakat dengan\r\nanak-anaknya bisa reriuhan bareng dengan ikut lomba, semoga kegiatan\r\npositif ini bisa berkesinambungan terus,\"tambahnya.<br>\r\n<br>\r\nDalam\r\nperlombaan tersebut, beberapa anak yang ikut menjadi juara<br>\r\nJuara\r\n1. M. Brilliant (TK Al Ansyor), Juara 2. Avela pratama ersyani (TK\r\npembina Brebes) dan Juara 3. Zonni Nirbita (TK Aisyiyah VIII,\r\nsementara itu lomba mewarnai tingkat PAUD masing-masing untuk\r\nJuara&nbsp;1. Ibra indastra (KB atfalul khaeriyah), Juara 2. Zahnida\r\nsalsabila (Paud Aisyiah Muhajirin), Juara 3. Konita ismay takiya\r\n(Paud TBB 5 sigambir), sedangkan Lomba Baca Puisi untuk pemenangnya\r\nyakni, Juara&nbsp;1. Gladys Putri Nabila ( SD Islam Al Azhar 53),\r\nJuara 2. Azka Nadhira N ( SD IT Harapan Umat), Juara 3. Nisa melani\r\nhidayah (SD N Pagejugan 03) utnuk Juara Harapan 1. Afza khairunnisa\r\n(SD IT Harapan Umat), Harapan 2. Dwi Anggun T ( SD N Sigambir 02),\r\nJuaran Harapan 3. Naufal Adiva Sakha (dukuh ringin), dan Juara Lomba\r\nTahfidz Quran yakni, Juara 1. Annisa rahma aqila ( SD IT usman\r\nTegal), Juara 2. Mayah (MIN Brebes), Juara 3. Sufi Al Maidah ( SD N\r\nSigambir 01), Harapan 1. Reva (MIN Brebes), Harapan 2. Rozan (MIN\r\nBrebes), dan Harapan 3. Sergio Renata (SD N Sigambir 02)<br>\r\n<br>\r\nSementara\r\nitu, Ketua Panitia, Slamet Ade, mengatakan Perlombaan ini sekaligus\r\nmemperkenalkan bahwa Desa Sigambir ada Taman Baca Masyarakat (TBM)\r\ndengan cara kegiatan seperti ini.<br>\r\n<br>\r\n\"Kami tidak mengira\r\nkegiatan yang pertama kali kami buat banyak sekolah yang antusias\r\nmengikuti dan diluar perkiraan kami peserta membeludak,\"\r\nkatanya.<br>\r\n<br>\r\nHal yang sama juga di sampaikan Ketua Umum\r\nMasigab, Toto Carto mengungkapkan, di era modernisasi seperti ini\r\nsudah banyak anak kecil lebih sering bermain gadget (HP) dari pada\r\nmembaca, adanya TBM ini semoga menumbuhkan minat akan baca dari\r\nmasyarakat desa sigambir khususnya.<br>\r\n<br>\r\n\"Alhamdulillah\r\nkami bisa menyempatkan hadir di acara yang sangat luar biasa ini dan\r\nkami dari Masigab sangat mendukung program yang dicanangkan\r\npemerintah tentang literasi sehingga kami mendukung Brebes menuju\r\ndaerah literasi dengan akan mendirikan beberapa TBM di beberapa desa\r\ntermasuk &nbsp;mendukung kegiatan perlombaan di Sigambir ini,\"\r\nungkapnya.</font></font></font></p>\r\n\r\n', 'Perkenalkan Taman Baca Masyarakat Melalui Perlombaan Anak', '2019-12-19', 'Administrator', '15d928bfac3dce7b2f29573cf98557b1.jpg'),
(5, '<p>\r\n\r\n\r\n	\r\n	\r\n	\r\n	<style type=\"text/css\">p { margin-bottom: 0.1in; direction: ltr; line-height: 115%; text-align: left; }a:link { color: rgb(0, 0, 255); }</style>\r\n\r\n\r\n</p><p style=\"margin-bottom: 0.11in; line-height: 108%\"><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">PANTAUTERKINI.CO.ID.BREBES\r\n- Dalam rangka memperingati Hari Ulang Tahun Kabupaten Brebes ke 341\r\ntahun, Taman Baca Masyarakat (TBM) Desa Sigambir Kecamatan Brebes\r\nKabupaten Brebes ikut memeriahkan dengan mengadakan perlombaan\r\ntingkat paud, TK/RA dan SD/Mi sederajat, dimana ada tiga katagori\r\nyang diperlombakan yakni Lomba mewarnai tingkat Paud/KB dan tingkat\r\nTK/RA, Lomba baca puisi tingkat SD/MI sederajat dan Lomba Tahfidz\r\nQuran tingkat RA/SD/MI.</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">Kegiatan\r\nini dilaksanakan sekaligus memperkenalkan adanya gedung TBM yang\r\nberdampingan dengan Polindes untuk tempat bacaan bagi masyarakat\r\nsekitar.</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n<br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">Perlombaan\r\nini, di ikuti oleh sekitar 172 peserta dari masing-masing sekolah\r\ndengan lomba mewarnai 80 peserta, lomba baca puisi 32 peserta dan\r\nlomba Tahfidz Quran 60 peserta, bahkan ada beberapa peserta dari\r\ntegal dan slawi yang mengikuti lomba tahfidz quran.</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n<br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">Pemdes\r\nSigambir, Aulia Fahmi Basa dalam sambutannya menuturkan sangat\r\nmengapresiasi kepada TBM Sigambir dengan kegiatan perlombaan seperti\r\nini untuk menggugah anak-anak dari tingkat PAUD/RA/TK bisa berkreasi\r\ndengan mengikuti lomba.</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n<br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">\"Kami\r\nsangat bangga dengan pemuda pemudi yang sudah mau mengingatkan akan\r\npentingnya membaca dari usia dini dengan mendirikan Taman Bacaan\r\nMasyarakat (TBM) di desa sigambir,\" tuturnya, kemarin.</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n<br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">Lebih\r\nlanjut, pihaknya&nbsp; berharap dengan adanya TBM masyarakat Desa\r\nSigambir khususnya anak anak lebih gemar membaca, karena membaca\r\nsangat penting utk menambah wawasan ilmu kita.</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n<br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">\"Ini\r\nsalah satu kegiatan yang luar biasa, antusias masyarakat dengan\r\nanak-anaknya bisa reriuhan bareng dengan ikut lomba, semoga kegiatan\r\npositif ini bisa berkesinambungan terus,\"tambahnya.</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n<br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">Dalam\r\nperlombaan tersebut, beberapa anak yang ikut menjadi juara</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">Juara\r\n1. M. Brilliant (TK Al Ansyor), Juara 2. Avela pratama ersyani (TK\r\npembina Brebes) dan Juara 3. Zonni Nirbita (TK Aisyiyah VIII,\r\nsementara itu lomba mewarnai tingkat PAUD masing-masing untuk</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">Juara\r\n1. Ibra indastra (KB atfalul khaeriyah), Juara 2. Zahnida salsabila\r\n(Paud Aisyiah Muhajirin), Juara 3. Konita ismay takiya (Paud TBB 5\r\nsigambir), sedangkan Lomba Baca Puisi untuk pemenangnya yakni,</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">Juara\r\n1. Gladys Putri Nabila ( SD Islam Al Azhar 53), Juara 2. Azka Nadhira\r\nN ( SD IT Harapan Umat), Juara 3. Nisa melani hidayah (SD N Pagejugan\r\n03) utnuk Juara Harapan 1. Afza khairunnisa (SD IT Harapan Umat),\r\nHarapan 2. Dwi Anggun T ( SD N Sigambir 02), Juaran Harapan 3. Naufal\r\nAdiva Sakha (dukuh ringin), dan Juara Lomba Tahfidz Quran yakni,\r\nJuara 1. Annisa rahma aqila ( SD IT usman Tegal), Juara 2. Mayah (MIN\r\nBrebes), Juara 3. Sufi Al Maidah ( SD N Sigambir 01), Harapan 1. Reva\r\n(MIN Brebes), Harapan 2. Rozan (MIN Brebes), dan Harapan 3. Sergio\r\nRenata (SD N Sigambir 02)</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n<br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">Sementara\r\nitu, Ketua Panitia, Slamet Ade, mengatakan Perlombaan ini sekaligus\r\nmemperkenalkan bahwa Desa Sigambir ada Taman Baca Masyarakat (TBM)\r\ndengan cara kegiatan seperti ini.</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n<br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">\"Kami\r\ntidak mengira kegiatan yang pertama kali kami buat banyak sekolah\r\nyang antusias mengikuti dan diluar perkiraan kami peserta\r\nmembeludak,\" katanya.</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n<br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">Hal\r\nyang sama juga di sampaikan Ketua Umum Masigab, Toto Carto\r\nmengungkapkan, di era modernisasi seperti ini sudah banyak anak kecil\r\nlebih sering bermain gadget (HP) dari pada membaca, adanya TBM ini\r\nsemoga menumbuhkan minat akan baca dari masyarakat desa sigambir\r\nkhususnya.</span></font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><br>\r\n<br>\r\n</font></font></font><font color=\"#5e5e5e\"><font face=\"Arial, serif\"><font style=\"font-size: 11pt\" size=\"3\"><span style=\"background: #ffffff\">\"Alhamdulillah\r\nkami bisa menyempatkan hadir di acara yang sangat luar biasa ini dan\r\nkami dari Masigab sangat mendukung program yang dicanangkan\r\npemerintah tentang literasi sehingga kami mendukung Brebes menuju\r\ndaerah literasi dengan akan mendirikan beberapa TBM di beberapa desa\r\ntermasuk&nbsp; mendukung kegiatan perlombaan di Sigambir ini,\"\r\nungkapnya.(Eko/Red CN)</span></font></font></font></p>\r\n\r\n', ' Peringati HUT Brebes, TBM Sigambir Adakan Lomba Anak ', '2019-12-12', 'Admin', 'c0047966c956b94778718664a3e15be3.jpg'),
(6, '<p><span class=\"fbPhotosPhotoCaption\" tabindex=\"0\" aria-live=\"polite\" data-ft=\"{&quot;tn&quot;:&quot;K&quot;}\" id=\"fbPhotoSnowliftCaption\"><span class=\"hasCaption\">TBM Sigambir Berlomba<br> Lomba Mewarnai tingkat PAUD/TK/RA<br> Lomba Cipta Karya Puisi tingkat SD/MI Sederajat Tema \"Aku Cinta Indonesia\"<br> Lomba Hafidz Quran jus 30 tingkat RA/SD/MI Sederajat<br> <span class=\"text_exposed_show\"><br> Pendaftaran <br> 8-20 Desember 2018 <br> Rp. 10.000/Katagori lomba (mendapatkan Snack)<br> Perlombaan <br> 25 Desember 2018 pkl. 08.00 - Selesai<br> Tempat Komplek Olahraga Merta Wijaya desa Sigambir<br> <br> Raih Hadiah dan dapatkan Doorprizenya<br> <br> Dimeriahkan oleh<br> Teater Sabili dari MAN 1 Brebes<br> Band Akustik Resika dari Karang Taruna Sigambir<br> Dan penampilan karya seni Lainnya<br> <br> Salam Literasi<br> Salam TBM Sigambir</span></span></span></p>', 'TBM Sigambir Berlomba', '1970-01-01', 'Admin', '8fd330f59c5aa5b42d05afde8d147437.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(10) NOT NULL,
  `kode_buku` int(10) NOT NULL,
  `jenis_buku` varchar(25) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `jumlah_buku` varchar(10) NOT NULL,
  `pengarang` varchar(20) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `lokasi_buku` varchar(20) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `cover_buku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `kode_buku`, `jenis_buku`, `judul_buku`, `jumlah_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `lokasi_buku`, `deskripsi`, `cover_buku`) VALUES
(1, 1, 'Sains', 'Pemahaman Flat Earth Kepada Kasat mata', '2', 'Arief Noer Hidayat', 'Arief Production', 2019, 'Bogorwd', 'Pembuktian oleh kaum Flat Earth , karena globe terlalu mainstreamwda', '3ede0749975d42171d273732d9cf68e2.jpeg'),
(2, 445, 'Bisnis', '77 Cara Kiat Sukses Bisnis Rasullulah', '3', 'Aulia Muthiah', 'Tinta Medina', 2018, 'Indonesia', 'Bagi Anda yang terjun dalam dunia bisnis, pasti ingin bisnisnya sukses, konsumennya banyak, dan kekayaan melimpah. Sejumlah keinginan yang wajar karena itulah tujuan berbisnis. Apakah sampai di situ saja tujuan Anda? Jangan! Jangan sampai tujuan Anda seba', 'ddd62a589baf1e25cd4cdd039159eaed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donasi_buku`
--

CREATE TABLE `donasi_buku` (
  `id` int(11) NOT NULL,
  `nama_donatur` varchar(25) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `instansi` varchar(25) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `jumlah_buku` int(10) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pengiriman` varchar(100) NOT NULL,
  `cara_donasi` varchar(25) NOT NULL,
  `progress` varchar(25) NOT NULL,
  `alamat_jemput` varchar(255) NOT NULL,
  `satu_kota` varchar(25) NOT NULL,
  `id_user` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi_buku`
--

INSERT INTO `donasi_buku` (`id`, `nama_donatur`, `pekerjaan`, `instansi`, `alamat_rumah`, `jumlah_buku`, `no_hp`, `email`, `pengiriman`, `cara_donasi`, `progress`, `alamat_jemput`, `satu_kota`, `id_user`) VALUES
(3, 'Anies Baswedan', 'Gurbernur', 'Pemerintah', 'Jakarta', 2, 2147483647, 'anies@gmail.com', 'Dalam Satu Kota', 'dijemput', 'sedang diproses', '', '', 11),
(4, 'Ahok Basuki', 'Komisaris Utama', 'BUMN', 'Pertamina Jakarta', 1, 2147483647, 'ahok@ahok.com', 'Antar Provinsi', 'dikirim', 'selesai diproses', '', '', 11),
(5, 'Djaror Tjahaja', 'Wakil Gubernur', 'Pemerintah', 'Balai Kota', 1, 2147483647, '', 'Dalam Satu Kota', 'dijemput', 'sedang diproses', '', '', 11),
(6, 'Frans Pambudi', 'Buruh', 'Swasta', 'Bandung', 2, 82773791, 'frans@pambudi.com', 'Antar Provinsi', 'dijemput', 'belum diproses', 'Dayeuhkolot', 'Dalam Kota', 11),
(7, 'Djoko Kirmanto', 'DPR', 'Pemerintah', 'Yogya', 2, 2147483647, 'dikirim@djoko.com', 'Antar Provinsi', 'dikirim', 'sedang diproses', '', 'Satu Kota', 11),
(8, 'Sule', 'Komedian', 'Net TV', 'Bandung', 2, 2147483647, 'Dayaeuhluruh', 'Antar Provinsi', 'dijemput', 'belum diproses', 'Cicaheum', 'Satu Kota', 11),
(9, 'SUsi Similikiti', 'IRT', 'Bukan Empat Mata', 'Purworejo', 2, 937784991, 'susi@wkkwd', 'Antar Negara', 'dikirim', 'belum diproses', '', '', 11),
(10, 'Joko Susilo', 'Programmer', 'Swasta', 'Solo', 2, 2147483647, 'joko@dirman', 'Dalam Satu Kota', 'dikirim', 'belum diproses', '', '', 11);

-- --------------------------------------------------------

--
-- Table structure for table `donasi_non_buku`
--

CREATE TABLE `donasi_non_buku` (
  `id` int(11) NOT NULL,
  `nama_donatur` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `instansi` varchar(25) NOT NULL,
  `no_hp` int(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `terbilang` int(255) NOT NULL,
  `progress` varchar(255) NOT NULL,
  `tgl_transfer` date NOT NULL,
  `bukti_transfer` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `id_user` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi_non_buku`
--

INSERT INTO `donasi_non_buku` (`id`, `nama_donatur`, `pekerjaan`, `instansi`, `no_hp`, `alamat`, `email`, `terbilang`, `progress`, `tgl_transfer`, `bukti_transfer`, `pesan`, `id_user`) VALUES
(6, 'Budi SUsanto', 'Kuli', 'Mandiri', 986546789, 'Jakarta', 'budi@gmail.com', 1000000, 'sedang diproses', '2019-12-12', '85ccb9fbe08a460630403b619817ab07.jpg', 'Untuk Yang Baik2', 11);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `id_anggota` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `id_anggota`, `username`, `password`, `role`) VALUES
(2, 6, 'admin', '7f95b733f4210c71482904eb422143f8', 'admin'),
(7, 11, 'risha', '7f95b733f4210c71482904eb422143f8', 'anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donasi_buku`
--
ALTER TABLE `donasi_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donasi_non_buku`
--
ALTER TABLE `donasi_non_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donasi_buku`
--
ALTER TABLE `donasi_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donasi_non_buku`
--
ALTER TABLE `donasi_non_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
