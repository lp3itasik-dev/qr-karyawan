-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2025 at 09:06 AM
-- Server version: 10.11.11-MariaDB-cll-lve-log
-- PHP Version: 8.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp3itasik_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `nik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`nik`, `nama`, `jabatan`, `foto`) VALUES
(200226003, 'Yahya, SE.', 'Staff Eksternal & Other income', '200226003.jpg'),
(200226006, 'H. Rudi Kurniawan, ST., MM.', 'Kepala Kampus', '200226006.jpg'),
(200626036, 'Rheda Adrian', 'Office Boy', '200626036.jpg'),
(200826047, 'Arip Budiman, ST, M.Pd', 'Wakil Kepala Kampus', '200826047.jpg'),
(200926056, 'Ernawati, SE., M.Pd.,MM.', 'Kaprodi Manajemen Pemasaran', '200926056.jpg'),
(200926058, 'Indri Fitrianasari, S. Kom', 'Kabid Marketing', '200926058.jpg'),
(200926059, 'Aep Saepudin, S. Pd.I', 'Koodinator Mentoring ', '200926059.jpg'),
(201026062, 'Rani Ligar Fitriani, M. Pd.', 'Koordinator Kompetensi Bahasa Inggris', '201026062.jpg'),
(201026063, 'Sugianti Melawati, SE', 'Kabid Keuangan dan HRD', '201026063.jpg'),
(201026066, 'Dendi Gunawan', 'Security', '201026066.jpg'),
(201126068, 'Andri Irawan', 'Security', '201126068.jpg'),
(201126071, 'R. Asep Mucharam S, A.Md', 'General Affair & Penagihan', '201126071.jpg'),
(201126072, 'Ratna Sopiah, S.AB.', 'Marketing Staff', '201126072.jpg'),
(201226077, 'Muhamad Aripin, A.Md', 'Wakil Kabid Akademik', '201226077.jpg'),
(201226088, 'Yovi Fernando, ST', 'Staff Program Otomotif ', '201226088.jpg'),
(201326085, 'Untung Eko Setyasari, S.Sos., MA.', 'Kabid Akademik & UPPM', '201326085.jpg'),
(201326087, 'Yudi Kurniadi, M. Pd.', 'Dosen Tetap Bhs.Inggris', '201326087.jpg'),
(201326091, 'Yanti Fadila Wahab, M. Pd.', 'Marketing Staff', '201326091.jpg'),
(201426096, 'Bini Hasbiani, ST', 'Corporate & Placement Staff ', '201426096.jpg'),
(201426099, 'Djoko Handoyo ', 'Security', '201426099.jpg'),
(201426102, 'Nurul Ahyar, S.Sos', 'Marketing Staff', '201426102.jpg'),
(201526103, 'Asep Dadan Suhendar, SE.,MM.', 'Kabid C&P', '201526103.jpg'),
(201526106, 'Rijal', 'Staff Umum', '201526106.jpg'),
(201826117, 'Roni Nugraha , SE.', 'Finance & HRd Staff ', '201826117.jpg'),
(201826119, 'Fara Novelya Anisa , SE.', 'Finance & HRD Staff ', '201826119.jpg'),
(201926120, 'Benny Suryadi Rahman, SE.', 'Marketing Staff', '201926120.jpg'),
(201926121, 'Sopyan Sauri, A.Md', 'Asisten Lab Komputer ', '201926121.jpg'),
(201926123, 'Adzka Rossa Sanjayyana, SE.,Ak.,M.Ak', 'Kaprodi Manajemen Keuangan Perbankan', '2019261231.jpg'),
(201926125, 'Lerian Febrian, A.Md', 'Sosial Media Optimization', '201926125.jpg'),
(201926126, 'Muhamad Kamaluddin Dahlan', 'Assisten Lab Automotive', '201926126.jpg'),
(202026128, 'Asep Manarul Hidayah, S.Kom', 'Asisten Lab Komputer ', '202026128.jpg'),
(202126130, 'Santi Permatasari, A.Md.Ak', 'Accounting Staff', '202126130.jpg'),
(202226135, 'Gina Kamila Shofa, SE', 'Corporate & Placement Staff ', '202226135.jpg'),
(202226136, 'Elfin Yuliani, A.Md.Ak', 'Sekretaris', '202226136.jpg'),
(202226137, 'Monika Sutarsa, S.Ak.,MM.', 'Kaprodi Manajemen Keuangan Perbankan', '202226137.jpg'),
(202226138, 'Nijar Kurnia Romdoni, SE.M.Ak.', 'Sekretaris Kaprodi Manajemen Keuangan Perbankan', '202226138.jpg'),
(202226139, 'Lilip Harlivandi Zakaria, A.Md.Kom', 'Marketing Staff', '202226139.jpg'),
(202226140, 'Verra Rosyalia Widia Sofyan,S.E.,M.M', 'Koordinator Adminstrasi Bisnis', '2022261402.jpg'),
(202226141, 'Nindicka Nurul Fadilah, S.IP', 'Pustakawan', '202226141.jpg'),
(202226142, 'Annisa Desty Puspatriani, SE.,MM.', 'Sekprodi Manajemen Pemasaran', '202226140.jpg'),
(202226143, 'Krisna Aprilian Syah, A.Md.Kom', 'Programmer', '202226143.jpg'),
(202226144, 'Cici Subarkah, A.Md.AB', 'Akademik Staff', '202226144.png'),
(202226145, 'Diki Nur Rahman', 'Asisten Lab Komputer', '202226145.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qr_code`
--

CREATE TABLE `qr_code` (
  `id_qr` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `qr_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qr_code`
--

INSERT INTO `qr_code` (`id_qr`, `nama`, `link`, `qr_code`) VALUES
(1, 'H. Rudi Kurniawan, ST., MM.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=200226006', 'H. Rudi Kurniawan, ST., MM..png'),
(2, 'Ernawati, SE., M.Pd.,MM.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=200926056', 'Ernawati, SE., M.Pd.,MM..png'),
(3, 'Indri Fitrianasari, S. Kom', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=200926058', 'Indri Fitrianasari, S. Kom.png'),
(4, 'Sugianti Melawati, SE', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201026063', 'Sugianti Melawati, SE.png'),
(5, 'Untung Eko Setyasari, S.Sos., MA.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201326085', 'Untung Eko Setyasari, S.Sos., MA..png'),
(6, 'Asep Dadan Suhendar, SE.,MM.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201526103', 'Asep Dadan Suhendar, SE.,MM..png'),
(7, 'Adzka Rossa Sanjayyana, SE.,Ak.,M.Ak', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201926123', 'Adzka Rossa Sanjayyana, SE.,Ak.,M.Ak.png'),
(8, 'Yahya, SE.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=200226003', 'Yahya, SE..png'),
(9, 'Arip Budiman, ST, M.Pd', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=200826047', 'Arip Budiman, ST, M.Pd.png'),
(10, 'Aep Saepudin, S. Pd.I', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=200926059', 'Aep Saepudin, S. Pd.I.png'),
(11, 'Rani Ligar Fitriani, M. Pd.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201026062', 'Rani Ligar Fitriani, M. Pd..png'),
(12, 'Muhamad Aripin, A.Md', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201226077', 'Muhamad Aripin, A.Md.png'),
(13, 'Ratna Sopiah, S.AB.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201126072', 'Ratna Sopiah, S.AB..png'),
(14, 'R. Asep Mucharam S, A.Md', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201126071', 'R. Asep Mucharam S, A.Md.png'),
(15, 'Yudi Kurniadi, M. Pd.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201326087', 'Yudi Kurniadi, M. Pd..png'),
(16, 'Yovi Fernando, ST', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201226088', 'Yovi Fernando, ST.png'),
(17, 'Yanti Fadila Wahab, M. Pd.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201326091', 'Yanti Fadila Wahab, M. Pd..png'),
(18, 'Bini Hasbiani, ST', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201426096', 'Bini Hasbiani, ST.png'),
(19, 'Nurul Ahyar, S.Sos', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201426102', 'Nurul Ahyar, S.Sos.png'),
(20, 'Roni Nugraha , SE.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201826117', 'Roni Nugraha , SE..png'),
(21, 'Fara Novelya Anisa , SE.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201826119', 'Fara Novelya Anisa , SE..png'),
(22, 'Benny Suryadi Rahman, SE.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201926120', 'Benny Suryadi Rahman, SE..png'),
(23, 'Sopyan Sauri, A.Md', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201926121', 'Sopyan Sauri, A.Md.png'),
(24, 'Lerian Febrian, A.Md', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201926125', 'Lerian Febrian, A.Md.png'),
(25, 'Muhamad Kamaluddin Dahlan', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201926126', 'Muhamad Kamaluddin Dahlan.png'),
(26, 'Asep Manarul Hidayah, S.Kom', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202026128', 'Asep Manarul Hidayah, S.Kom.png'),
(27, 'Santi Permatasari, A.Md.Ak', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202126130', 'Santi Permatasari, A.Md.Ak.png'),
(28, 'Gina Kamila Shofa, SE', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202226135', 'Gina Kamila Shofa, SE.png'),
(29, 'Elfin Yuliani, A.Md.Ak', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202226136', 'Elfin Yuliani, A.Md.Ak.png'),
(30, 'Monika Sutarsa, S.Ak.,MM.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202226137', 'Monika Sutarsa, S.Ak.,MM..png'),
(31, 'Nijar Kurnia Romdoni, SE.M.Ak.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202226138', 'Nijar Kurnia Romdoni, SE.M.Ak..png'),
(32, 'Annisa Desty Puspatriani, SE.,MM.', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202226140', 'Annisa Desty Puspatriani, SE.,MM..png'),
(33, 'Cici Subarkah, A.Md.AB', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202226144', 'Cici Subarkah, A.Md.AB.png'),
(34, 'Nindicka Nurul Fadilah, S.IP', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202226141', 'Nindicka Nurul Fadilah, S.IP.png'),
(35, 'Verra Rosyalia Widia Sofyan,S.E.,M.M', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202226140', 'Verra Rosyalia Widia Sofyan,S.E.,M.M.png'),
(36, 'Krisna Aprilian Syah, A.Md.Kom', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202226143', 'Krisna Aprilian Syah, A.Md.Kom.png'),
(37, 'Diki Nur Rahman', 'https://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202226145', 'Diki Nur Rahman.png'),
(38, 'Rijal', 'http://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201526106', 'Rijal.png'),
(39, 'Djoko Handoyo ', 'http://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201426099', 'Djoko Handoyo .png'),
(40, 'Andri Irawan', 'http://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201126068', 'Andri Irawan.png'),
(41, 'Dendi Gunawan', 'http://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=201026066', 'Dendi Gunawan.png'),
(42, 'Rheda Adrian', 'http://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=200626036', 'Rheda Adrian.png'),
(43, 'Lilip Harlivandi Zakaria, A.Md.Kom', 'http://qr-karyawan.politekniklp3i-tasikmalaya.ac.id/home/detail?nik=202226139', 'Lilip Harlivandi Zakaria, A.Md.Kom.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `password`, `level`) VALUES
('admin', 'Admin', '123qwerty', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `qr_code`
--
ALTER TABLE `qr_code`
  ADD PRIMARY KEY (`id_qr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qr_code`
--
ALTER TABLE `qr_code`
  MODIFY `id_qr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
