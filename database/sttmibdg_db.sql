-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Des 2016 pada 18.45
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sttmibdg_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(8) NOT NULL,
  `agenda_judul` varchar(50) NOT NULL,
  `agenda_deskripsi` text NOT NULL,
  `agenda_tempat` varchar(50) NOT NULL,
  `agenda_prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `artikel_id` int(8) NOT NULL,
  `artikel_judul` varchar(100) NOT NULL,
  `artikel_foto` varchar(100) NOT NULL,
  `artikel_tanggal` datetime NOT NULL,
  `artikel_isi` text NOT NULL,
  `penulis` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `banner_id` int(1) NOT NULL,
  `banner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_banner`
--

INSERT INTO `tbl_banner` (`banner_id`, `banner`) VALUES
(2, 'profil_1'),
(3, 'profil_2'),
(4, 'profil_3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(8) NOT NULL,
  `berita_judul` varchar(100) NOT NULL,
  `berita_foto` varchar(100) NOT NULL,
  `berita_tanggal` datetime NOT NULL,
  `berita_isi` text NOT NULL,
  `penulis` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_judul`, `berita_foto`, `berita_tanggal`, `berita_isi`, `penulis`) VALUES
(1, 'a', '', '2016-12-13 02:00:00', '', 0),
(2, 'b', '', '2016-12-13 04:00:00', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `dosen_id` int(8) NOT NULL,
  `dosen_nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `pendidikan` text NOT NULL,
  `mengajar` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Luar Biasa',
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`dosen_id`, `dosen_nama`, `tgl_lahir`, `tmpt_lahir`, `pendidikan`, `mengajar`, `status`, `username`, `password`, `email`, `foto`) VALUES
(1, 'Prof. Dr. Mimin Karmini', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(2, 'Prof. Dr. Sapri Hadiwisastra ', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(3, 'Dr. Ir. H. Lukman Umar., M.H', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(4, 'Awang Suwandhi, Ir.,M.Sc', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(5, 'Harmanto, Ir.,M.T.', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(6, 'Nur Hamid, Ir.,M.M', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(7, 'Rasdan A. Siregar, IR.,M.Sc', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(8, 'Siska Karlina S.H', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(9, 'Nur Mutia Sriwana, B.Sc.,M.Si', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(10, 'Daday Kedar Mulja,Ir.,S.T', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(11, 'Tolchani, Ir', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(12, 'Edi Suhaedi, Ir', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(13, 'Euis Maemunah, S.T', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(14, 'Evi B. Roehimat, Ir', '0000-00-00', '', '', '', 'tetap', '', '', '', ''),
(15, 'Prof. Dr. Yahdi Zaim ', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(16, 'Dr. Ir. Yan Rizal, Dipl., Geo. ', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(17, 'Dr. Ir. Aswan ', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(18, 'Dr. Ir. Budi Brahmantyo', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(19, 'Dr. Eng Mirzam Abdurrachman', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(20, 'Dr. Rosgandika Iskandar,Ir.,DEA.', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(21, 'H. Rasyid Iskandar,Drs.,N.Dipl', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(22, 'Dr. Ir. Eko Trisumarnadi Agustin, M.T', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(23, 'Dr. Ir. Ulum A Gany, M.T', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(24, 'Encu Sutarman,Ir.,M.T', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(25, 'Eril Suhada Lanin, S.T.,M.T', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(26, 'Arif Susanto,S.T.,M.T.', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(27, 'Ali Mahmudi Ir.,M.Eng', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(28, 'Tiolintan Simanungkalit,S.Spd', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(29, 'Dr. Kabul Budiyono,Drs.,M.Si', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(30, 'Dr. I.G.B Eddy Sucipta', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(31, 'Dr. Ir. Eko Widianto', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(32, 'Dr. Ir. Johanes Hutabarat M.Sc', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(33, 'Agus Setianto Ir.,M.Eng', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(34, 'Yayat Nur Ahmad Ir. ME', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(35, 'Sahrudin Sahminan,Ir.', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(36, 'Iphov Kumala Sriwana S.T.,M.Si', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(37, 'Kumala Hardkawidjaksana, Ir.,M.Sc', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', ''),
(38, 'Sudaryanto, Ir.MT', '0000-00-00', '', '', '', 'Luar Biasa', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(8) NOT NULL,
  `galeri_deskripsi` text NOT NULL,
  `galeri_tanggal` datetime NOT NULL,
  `galeri_prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_info`
--

CREATE TABLE `tbl_info` (
  `info_id` int(8) NOT NULL,
  `info_judul` varchar(50) NOT NULL,
  `info_deskripsi` text NOT NULL,
  `info_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `profil_id` int(2) NOT NULL,
  `foto_banner` varchar(50) NOT NULL,
  `sambutan` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `sejarah` text NOT NULL,
  `foto_ketua` varchar(50) NOT NULL,
  `tujuan` text NOT NULL,
  `sasaran` text NOT NULL,
  `banyak_staf` varchar(10) NOT NULL,
  `banyak_mahasiswa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_profil`
--

INSERT INTO `tbl_profil` (`profil_id`, `foto_banner`, `sambutan`, `visi`, `misi`, `sejarah`, `foto_ketua`, `tujuan`, `sasaran`, `banyak_staf`, `banyak_mahasiswa`) VALUES
(1, '', '', 'STTMI merupakan Institusi Pendidikan Tinggi terkemuka dan bermutu dalam Ilmu Kebumian, Teknologi Eksplorasi dan Teknik Pertambangan,    menghasilkan lulusan yang profesional dan dapat berkontribusi aktif  dalam rangka pembangunan berkelanjutan.\r\n', 'Menyelenggarakan pendidikan yang profesional dan unggul dalam Ilmu Kebumian, Teknologi Eksplorasi dan Teknik Pertambangan , melalui suatu sistim pendidikan tinggi yang terencana, terintegrasi dan fleksibel untuk menghasilkan sumberdaya manusia mandiri, yang siap dan mampu menghadapi perubahan.\r\n', 'STTMI didirikan pada tanggal 12 Agustus 1988, dibawah naungan YAYASAN BUMI REKAYASA dengan Akte Notaris Muchlis Munir, SH. No. 68, pada tanggal 29 Juli 1988.\r\nSaat  ini telah dialihkelola oleh YAYASAN UMMI BANGSA\r\nTenaga Dosen yang berbobot, seperti dari ITB, UNPAD dan dari Instansi yang terkait dengan disiplin Ilmu Teknik Geologi dan Teknik Pertambangan, juga dari pihak Konsultan yang bergerak dalam bidang jasa Geologi/Geologi Teknik dan Pertambangan. \r\nKehadiran STTMI yang kegiatannya dimulai Tahun Ajaran 1988/1989, ternyata cukup banyak menarik peminat, yaitu dalam penampilan perdananya telah terdaftar 37 sebagai Mahasiswa Geologi dan 31 Sebagai Mahasiswa Pertambangan.\r\n', 'foto-ketua.jpg', 'Menghasilkan lulusan yang menjadi tenaga ahli yang mempunyai ketrampilan dan kemampuan dasar di bidang ilmu kebumian, Teknologi Mineral dan Energi, serta bidang yang terkait menyangkut teori, konsep, pendekatan teknis analisis, pengujian lapangan, serta metodologi, sehingga mampu memahami, menghayati dan melakukan eksplorasi serta  pengelolaan Sumber Daya Mineral dan Energi, yang berwawasan lingkungan. \r\n', 'STTMI adalah untuk memenuhi kebutuhan tenaga ahli kebumian, tenaga ahli dalam eksplorasi sumberdaya alam, dan tenaga ahli teknik pertambangan di Indonesia yang menjadi warga negara yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berjiwa Pancasila, memiliki integritas kepribadian yang tinggi, terbuka dan tanggap terhadap perubahan dan kemajuan ilmu pengetahuan dan  teknologi, serta terbuka dan tanggap terhadap masalah yang dihadapi masyarakat,  khususnya yang berkaitan dengan bidang keahliannya.\r\n', '50', '500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tekgeo`
--

CREATE TABLE `tbl_tekgeo` (
  `foto_banner` varchar(50) NOT NULL,
  `sambutan` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `mata_kuliah` text NOT NULL,
  `jumlah_mahasiswa` int(8) NOT NULL,
  `jumlah_dosen` int(8) NOT NULL,
  `jumlah_alumni` int(8) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tekper`
--

CREATE TABLE `tbl_tekper` (
  `foto_banner` varchar(50) NOT NULL,
  `sambutan` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `mata_kuliah` text NOT NULL,
  `jumlah_mahasiswa` int(8) NOT NULL,
  `jumlah_dosen` int(8) NOT NULL,
  `jumlah_alumni` int(8) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_unduh`
--

CREATE TABLE `tbl_unduh` (
  `unduh_id` int(8) NOT NULL,
  `judul_unduh` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `file_unduh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_unduh`
--

INSERT INTO `tbl_unduh` (`unduh_id`, `judul_unduh`, `keterangan`, `file_unduh`) VALUES
(1, 'Brosur Baru Update Desember 2016', '', 'brosur.rar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`dosen_id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`profil_id`);

--
-- Indexes for table `tbl_unduh`
--
ALTER TABLE `tbl_unduh`
  ADD PRIMARY KEY (`unduh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `artikel_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `banner_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  MODIFY `dosen_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `info_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `profil_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_unduh`
--
ALTER TABLE `tbl_unduh`
  MODIFY `unduh_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
