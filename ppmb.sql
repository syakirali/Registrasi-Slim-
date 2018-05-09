-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2018 at 09:43 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama`) VALUES
(1, 'PASCA SARJANA'),
(2, 'KEDOKTERAN'),
(3, 'KEDOKTERAN GIGI'),
(4, 'EKONOMI & BISNIS'),
(5, 'HUKUM'),
(6, 'FARMASI'),
(7, 'ILMU SOSIAL & ILMU POLITIK'),
(8, 'ILMU BUDAYA'),
(9, 'KESEHATAN MASYARAKAT'),
(10, 'SAINTEK'),
(11, 'KEDOKTERAN HEWAN'),
(12, 'KEPERAWATAN'),
(13, 'PSIKOLOGI'),
(14, 'PERIKANAN & KELAUTAN'),
(15, 'VOKASI?'),
(16, 'PDD BWI');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `no_seluler` varchar(15) NOT NULL,
  `tlp_rumah` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pilihan1` int(11) NOT NULL,
  `pilihan2` int(11) NOT NULL,
  `pilihan3` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `asal_sekolah`, `jenis_kelamin`, `agama`, `no_seluler`, `tlp_rumah`, `email`, `alamat`, `pilihan1`, `pilihan2`, `pilihan3`, `created_at`, `updated_at`) VALUES
('092375817589107', 'sadfjasf asfkasf', 'sadfjak ', '1998-09-03', 'skdaksdf alskdfjaoije fksaljf', 'l', 'budha', '903748239420385', '029834280936', 'sajfa@khgurhgk.com', 'kashfopijpoij ghauhfd', 93, 140, 120, '2018-05-09 14:59:48', '0000-00-00 00:00:00'),
('15154141423', 'asfa a wqerar', 'asfasdf ewr', '2018-05-17', 'asf asf e efafa', 'l', 'katolik', '34226524624', '264262622', 'asdfa@asdaf.ghj', 'asdfew wqer qr qwr qw r ', 159, 161, 160, '2018-05-09 14:59:48', '0000-00-00 00:00:00'),
('2520905', 'safasdfasf', 'asfasdfasf', '2018-05-15', 'asgag af asfs', 'l', 'hindu', '27272452562', '34262462362', 'email02081997@gmail.com', 'afasf asfas fas f', 99, 159, 162, '2018-05-09 14:59:48', '0000-00-00 00:00:00'),
('34515415154', 'sdfa asf a asdf ', 'af asfd a ', '1997-05-01', 'safasdfas', 'l', 'islam', '023151515', '01399138911', 'asdfasf@alkaf.com', 'asdfafas asfas saf asf a', 75, 40, 99, '2018-05-09 14:59:48', '0000-00-00 00:00:00'),
('3462623', 'Syakir Ali', 'Bangkalan', '2018-05-09', 'asdfasdf', 'l', 'islam', '351215525', '1253125125', 'admin@admin.com', 'Jl. Raya Ketengan No. 69 - Burneh', 162, 99, 75, '2018-05-09 14:59:48', '0000-00-00 00:00:00'),
('5145254151', 'adsfasdf', 'asdf', '2018-05-15', 'asdfvasd', 'p', 'budha', '264262624633', '436246234636', 'syakirs_mail@yahoo.com', 'asdgag asdf g ', 162, 161, 144, '2018-05-09 17:42:15', '2018-05-09 17:42:15'),
('afa asdfkjafj', 'asdflka asdflkjasd adsfkl', 'asdfasdf', '1999-12-31', 'jklasjfasdf ', 'p', 'katolik', '23642624345', '9023472879283', 'asfas@askjfa', 'sadadfa asfda sdf ', 75, 159, 99, '2018-05-09 14:59:48', '0000-00-00 00:00:00'),
('jlkj;lj oijjaskjhha', 'klj;joiasdf asdlkfjoij', 'aj;lkjoi fkjaj', '2015-12-31', 'kjoijiuj ajijafnjkhahf', 'p', 'katolik', '830728952389471', '90378235892', 'asfkjh@kljhsajgh.co', 'ksjfla asklfja;lkf', 99, 159, 148, '2018-05-09 14:59:48', '0000-00-00 00:00:00'),
('tsga adaf gr', 'asfasf ttyu j', 'dfghtr hthfghgfh', '2018-05-15', 'ddfhdhd sdgga', 'p', 'katolik', '658536226', '264537635', 'sbydev@mail.com', 'dhsdgagagd', 160, 161, 159, '2018-05-09 15:00:54', '2018-05-09 15:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `fakultas` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `akreditasi` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `fakultas`, `nama`, `jenjang`, `akreditasi`) VALUES
(1, 1, 'Ilmu Ekonomi Islam', 'S3', 'A'),
(2, 1, 'Pengembangan Sumber Daya Manusia', 'S3', 'B'),
(3, 1, 'Bioteknologi Perikanan dan Kelautan', 'S2', 'B'),
(4, 1, 'Ilmu Forensik', 'S2', 'B'),
(5, 1, 'Imunologi', 'S2', 'B'),
(6, 1, 'Sains Hukum dan Pembangunan', 'S2', 'B'),
(7, 1, 'Pengembangan Sumber Daya Manusia', 'S2', 'A'),
(8, 1, 'Sains Ekonomi Islam', 'S2', 'A'),
(9, 1, 'Manajemen Bencana', 'S2', 'C'),
(10, 1, 'Teknobiomedik', 'S2', 'B'),
(11, 1, 'Kajian Ilmu Kepolisian', 'S2', 'C'),
(12, 2, 'Pendidikan Dokter', 'S1', 'A'),
(13, 2, 'Pendidikan Bidan', 'S1', 'A'),
(14, 2, 'Ilmu Kedokteran Dasar', 'S2', 'A'),
(15, 2, 'Ilmu Kedokteran Tropis', 'S2', 'A'),
(16, 2, 'Ilmu Kesehatan Olah Raga', 'S2', 'A'),
(17, 2, 'Ilmu Kesehatan Reproduksi', 'S2', 'A'),
(18, 2, 'Ilmu Kedokteran Klinik', 'S2', 'B'),
(19, 2, 'Ilmu Kedokteran', 'S3', 'A'),
(20, 2, 'Bedah Plastik Rekonstruksi dan Estetik', 'Sp1', 'A'),
(21, 2, 'Ilmu Kesehatan Mata', 'Sp1', 'B'),
(22, 2, 'Ilmu Penyakit Dalam', 'Sp1', 'B'),
(23, 2, 'Neurologi', 'Sp1', 'B'),
(24, 2, 'Ilmu Kesehatan Kulit dan Kelamin', 'Sp1', 'A'),
(25, 2, 'Ilmu Kesehatan Telinga Hidung Tenggorok Bedah Kepa', 'Sp1', 'A'),
(26, 2, 'Anestesiologi dan Reanimasi', 'Sp1', 'A'),
(27, 2, 'Ilmu Bedah', 'Sp1', 'A'),
(28, 2, 'Obstetri dan Ginekologi', 'Sp1', 'A'),
(29, 2, 'Pulmonologi dan Ilmu Kedokteran Respirasi', 'Sp1', 'A'),
(30, 2, 'Ilmu Kedokteran Forensik dan Medikolegal', 'Sp1', 'A-'),
(31, 2, 'Ilmu Kesehatan Anak', 'Sp1', 'A'),
(32, 2, 'Orthopaedi dan Traumatologi', 'Sp1', 'A'),
(33, 2, 'Ilmu Kardiologi dan Kedokteran Vaskular', 'Sp1', 'A'),
(34, 2, 'Patologi Anatomi', 'Sp1', 'B'),
(35, 2, 'Patalogi Klinik', 'Sp1', 'B'),
(36, 2, 'Ilmu Kedokteran Fisik dan Rehabilitasi', 'Sp1', 'A'),
(37, 2, 'Radiologi', 'Sp1', 'A'),
(38, 2, 'Psikiatri', 'Sp1', 'A+'),
(39, 2, 'Mikrobiologi klinik', 'Sp1', 'A'),
(40, 2, 'Andrologi', 'Sp1', 'B'),
(41, 2, 'Urologi', 'Sp1', 'A'),
(42, 2, 'Bedah Thoraks Kardiovaskular', 'Sp1', 'A'),
(43, 2, 'Ilmu Bedah saraf', 'Sp1', 'A'),
(44, 2, 'Ilmu Bedah Anak', 'Sp1', '-'),
(45, 2, 'Ilmu Penyakit Dalam', 'Sp2', '-'),
(46, 2, 'Anestesiologi dan Reanimasi', 'Sp2', '-'),
(47, 2, 'Obstetri dan Ginekologi', 'Sp2', '-'),
(48, 2, 'Ilmu Kesehatan Anak', 'Sp2', '-'),
(49, 2, 'Patalogi Klinik', 'Sp2', '-'),
(50, 2, 'Psikiatri Anak dan Remaja', 'Sp2', '-'),
(51, 2, 'Bedah Kepala Leher', 'Sp2', '-'),
(52, 2, 'Bedah Digestif', 'Sp2', '-'),
(53, 2, 'Pendidikan Bidan', 'Profesi', '-'),
(54, 2, 'Pendidikan Dokter', 'Profesi', 'A'),
(55, 3, 'Ilmu Kesehatan Gigi', 'S2', 'B'),
(56, 3, 'Bedah Mulut dan Maksilofasial', 'Sp1', 'A'),
(57, 3, 'Ilmu Penyakit Mulut', 'Sp1', 'B'),
(58, 3, 'Ilmu Konservasi Gigi', 'Sp1', 'A'),
(59, 3, 'Ilmu Kedokteran Gigi Anak', 'Sp1', 'A'),
(60, 3, 'Periodonsia', 'Sp1', 'B'),
(61, 3, 'Ortodonsia', 'Sp1', 'A'),
(62, 3, 'Prostodonsia', 'Sp1', 'A'),
(63, 3, 'Pendidikan Dokter Gigi', 'Profesi', 'A'),
(64, 3, 'Pendidikan Dokter Gigi', 'S1', 'A'),
(65, 4, 'Ilmu Manajemen', 'S3', 'B'),
(66, 4, 'Ilmu Akuntansi', 'S3', 'B'),
(67, 4, 'Ilmu Ekonomi', 'S3', 'B'),
(68, 4, 'Ilmu Ekonomi', 'S2', 'A'),
(69, 4, 'Magister Manajemen', 'S2', 'A'),
(70, 4, 'Akuntansi', 'S2', 'A'),
(71, 4, 'Sains Manajemen', 'S2', 'A'),
(72, 4, 'Ekonomi Islam', 'S1', 'A'),
(73, 4, 'Ekonomi Pembangunan', 'S1', 'A'),
(74, 4, 'Manajemen', 'S1', 'A'),
(75, 4, 'Akuntansi', 'S1', 'A'),
(76, 4, 'Pendidikan Profesi Akuntansi', 'Profesi', 'A'),
(77, 5, 'Ilmu Hukum', 'S3', 'B'),
(78, 5, 'Ilmu Hukum', 'S2', 'A'),
(79, 5, 'Kenotariatan', 'S2', 'B'),
(80, 5, 'Ilmu Hukum', 'S1', 'A'),
(81, 6, 'Ilmu Farmasi', 'S3', 'B'),
(82, 6, 'Ilmu Farmasi', 'S2', 'A'),
(83, 6, 'Farmasi Klinik', 'S2', 'B'),
(84, 6, 'Spesialis Farmasi', 'Sp1', '-'),
(85, 6, 'Pendidikan Apoteker', 'S1', 'A'),
(86, 6, 'Pendidikan Apoteker', 'Profesi', 'A'),
(87, 7, 'Ilmu Sosial', 'S3', 'A'),
(88, 7, 'Kebijakan Publik', 'S2', 'A'),
(89, 7, 'Hubungan Internasional', 'S2', 'B'),
(90, 7, 'Ilmu Politik', 'S2', 'B'),
(91, 7, 'Sosiologi', 'S2', 'A'),
(92, 7, 'Media dan Komunikasi', 'S2', 'A'),
(93, 7, 'Ilmu Administrasi Negara', 'S1', 'A'),
(94, 7, 'Ilmu Hubungan Internasional', 'S1', 'A'),
(95, 7, 'Ilmu Politik', 'S1', 'A'),
(96, 7, 'Sosiologi', 'S1', 'A'),
(97, 7, 'Ilmu Komunikasi', 'S1', 'A'),
(98, 7, 'Ilmu Informasi dan Perpustakaan', 'S1', 'A'),
(99, 7, 'Antropologi', 'S1', 'A'),
(100, 8, 'Kajian Sastra dan Budaya', 'S2', 'A'),
(101, 8, 'Ilmu Linguistik', 'S2', 'B'),
(102, 8, 'Sastra Indonesia', 'S1', 'A'),
(103, 8, 'Sastra Inggris', 'S1', 'A'),
(104, 8, 'Sastra Jepang', 'S1', 'B'),
(105, 8, 'Ilmu Sejarah', 'S1', 'A'),
(106, 9, 'Ilmu Kesehatan', 'S3', 'B'),
(107, 9, 'Ilmu Kesehatan Masyarakat', 'S2', 'A'),
(108, 9, 'Kesehatan dan Keselamatan Kerja', 'S2', 'A'),
(109, 9, 'Kesehatan Lingkungan', 'S2', 'A'),
(110, 9, 'Administrasi Dan Kebijakan Kesehatan', 'S2', 'A'),
(111, 9, 'Epidemiologi', 'S2', 'A'),
(112, 9, 'Kesehatan Masyarakat', 'S1', 'A'),
(113, 9, 'Ilmu Gizi', 'S1', 'B'),
(114, 10, 'Matematika dan Ilmu Pengetahuan Alam', 'S3', 'B'),
(115, 10, 'Biologi', 'S2', 'A'),
(116, 10, 'Kimia', 'S2', 'B'),
(117, 10, 'Teknobiomedik', 'S1', 'B'),
(118, 10, 'Ilmu dan Teknologi Lingkungan', 'S1', 'A'),
(119, 10, 'Matematika', 'S1', 'A'),
(120, 10, 'Fisika', 'S1', 'A'),
(121, 10, 'Biologi', 'S1', 'A'),
(122, 10, 'Kimia', 'S1', 'A'),
(123, 10, 'Sistem Informasi', 'S1', 'A'),
(124, 10, 'Statistika', 'S1', 'B'),
(125, 11, 'Sains Veteriner', 'S3', 'B'),
(126, 11, 'Ilmu Biologi Reproduksi', 'S2', 'A'),
(127, 11, 'Ilmu Penyakit dan Kesehatan Masyarakat Veteriner', 'S2', 'A'),
(128, 11, 'Agribisnis Veteriner', 'S2', 'A'),
(129, 11, 'Vaksinologi dan Imunoterapetika', 'S2', 'A'),
(130, 11, 'Pendidikan Dokter Hewan', 'S1', 'A'),
(131, 11, 'Profesi Dokter Hewan', 'Profesi', 'A'),
(132, 12, 'Keperawatan', 'S2', 'B'),
(133, 12, 'Pendidikan Ners', 'S1', 'A'),
(134, 12, 'Pendidikan Ners', 'Profesi', 'A'),
(135, 13, 'Psikologi', 'S3', 'A'),
(136, 13, 'Psikologi Terapan', 'S2', 'B'),
(137, 13, 'Psikologi', 'S2', 'B'),
(138, 13, 'Psikologi Profesi', 'S2', 'A'),
(139, 13, 'Psikologi', 'S1', 'A'),
(140, 14, 'Budidaya Perairan', 'S1', 'A'),
(141, 14, 'Teknologi Industri Hasil Perikanan', 'S1', '-'),
(142, 15, 'Pengobat Tradisional', 'D3', 'A'),
(143, 15, 'Fisioterapi', 'D3', 'B'),
(144, 15, 'Analis Medis', 'D3', 'B'),
(145, 15, 'Teknik Kesehatan Gigi', 'D3', 'B'),
(146, 15, 'Manajemen Pemasaran', 'D3', 'B'),
(147, 15, 'Manajemen Perbankan', 'D3', 'A'),
(148, 15, 'Akuntansi', 'D3', 'A'),
(149, 15, 'Perpajakan', 'D3', 'A'),
(150, 15, 'Manajemen Kesekretariatan dan Perkantoran', 'D3', 'B'),
(151, 15, 'Manajemen Perhotelan', 'D3', 'A'),
(152, 15, 'Kepariwisataan / Bina Wisata', 'D3', 'A'),
(153, 15, 'Teknisi Perpustakaan', 'D3', 'A'),
(154, 15, 'Bahasa Inggris', 'D3', 'B'),
(155, 15, 'Hiperkes dan Keselamatan Kerja', 'D3', 'A'),
(156, 15, 'Otomasi Sistem Instrumentasi', 'D3', 'B'),
(157, 15, 'Sistem Informasi', 'D3', 'B'),
(158, 15, 'Kesehatan Ternak', 'D3', 'A'),
(159, 15, 'Pengobat Tradisional', 'D4', '-'),
(160, 15, 'Fisioterapi', 'D4', '-'),
(161, 15, 'Radiologi', 'D4', '-'),
(162, 16, 'Akuntansi', 'S1', '-'),
(163, 16, 'Budidaya Perairan', 'S1', '-'),
(164, 16, 'Pendidikan Dokter Hewan', 'S1', '-'),
(165, 16, 'Kesehatan Masyarakat', 'S1', '-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `token`) VALUES
('admin@admin.com', 'adminadmin', '93d0bbcb1f081794b5312b4f8e633b36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `pilihan1` (`pilihan1`),
  ADD KEY `pilihan2` (`pilihan2`),
  ADD KEY `pilihan3` (`pilihan3`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fakultas` (`fakultas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_ibfk_1` FOREIGN KEY (`pilihan1`) REFERENCES `prodi` (`id`),
  ADD CONSTRAINT `pendaftar_ibfk_2` FOREIGN KEY (`pilihan2`) REFERENCES `prodi` (`id`),
  ADD CONSTRAINT `pendaftar_ibfk_3` FOREIGN KEY (`pilihan3`) REFERENCES `prodi` (`id`);

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`fakultas`) REFERENCES `fakultas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
