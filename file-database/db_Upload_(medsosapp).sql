-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 10:07 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medsosapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `datauser`
--

CREATE TABLE `datauser` (
  `ID_DATAUSER` int(11) NOT NULL,
  `IDUSER` int(11) DEFAULT NULL,
  `NAMALENGKAP` varchar(200) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `JENISKELAMIN` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `NOMORTELPON` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datauser`
--

INSERT INTO `datauser` (`ID_DATAUSER`, `IDUSER`, `NAMALENGKAP`, `TGL_LAHIR`, `JENISKELAMIN`, `EMAIL`, `NOMORTELPON`) VALUES
(1, 1, 'Andi Prameswara', '2001-04-08', 'Laki-Laki', 'andipram99@gmail.com', '08123004888');

-- --------------------------------------------------------

--
-- Table structure for table `komentarpostingan`
--

CREATE TABLE `komentarpostingan` (
  `IDKOMENTAR` int(11) NOT NULL,
  `IDPOSTINGAN` int(11) DEFAULT NULL,
  `IDUSER` int(11) DEFAULT NULL,
  `ISIKOMENTAR` text DEFAULT NULL,
  `TANGGALKOMENTAR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentarpostingan`
--

INSERT INTO `komentarpostingan` (`IDKOMENTAR`, `IDPOSTINGAN`, `IDUSER`, `ISIKOMENTAR`, `TANGGALKOMENTAR`) VALUES
(1, 1, 3, 'Harga berapa itu kak ?', '2021-04-21'),
(2, 2, 3, 'Ganti warna cat kah kak ?', '2021-04-21'),
(9, 1, 1, 'Kisar 100 Juta mungkin', '2021-04-21'),
(10, 2, 1, 'Iya juga ya ?', '2021-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `likeuser`
--

CREATE TABLE `likeuser` (
  `IDLIKE` int(11) NOT NULL,
  `IDPOSTINGAN` int(11) DEFAULT NULL,
  `IDUSER` int(11) DEFAULT NULL,
  `TANGGALLIKE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `IDPOSTINGAN` int(11) NOT NULL,
  `IDUSER` int(11) DEFAULT NULL,
  `CAPTION` text DEFAULT NULL,
  `TANGGALUPLOAD` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`IDPOSTINGAN`, `IDUSER`, `CAPTION`, `TANGGALUPLOAD`) VALUES
(1, 2, 'Ini Mobil Xpander terbaru pada tahun ini', '2021-04-21'),
(2, 2, 'Mobil warna kuning', '2021-04-21'),
(3, 2, 'ini mobil baru saya', '2021-04-21'),
(4, 1, 'pabrik mobil ini dari mana ya ?', '2021-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `postingangambar`
--

CREATE TABLE `postingangambar` (
  `IDGAMBAR` int(11) NOT NULL,
  `IDPOSTINGAN` int(11) DEFAULT NULL,
  `NAMAFILE` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingangambar`
--

INSERT INTO `postingangambar` (`IDGAMBAR`, `IDPOSTINGAN`, `NAMAFILE`) VALUES
(1, 1, '001.jpg'),
(2, 2, '002.jpg'),
(5, 3, '003.jpg'),
(6, 4, '001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IDUSER` int(11) NOT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDUSER`, `USERNAME`, `PASSWORD`) VALUES
(1, 'andi99', '123'),
(2, 'ambara', '123'),
(3, 'Miftah1212', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`ID_DATAUSER`),
  ADD KEY `FK_DATAUSER_DATA_USER_USER` (`IDUSER`);

--
-- Indexes for table `komentarpostingan`
--
ALTER TABLE `komentarpostingan`
  ADD PRIMARY KEY (`IDKOMENTAR`),
  ADD KEY `FK_KOMENTAR_KOMENTARU_USER` (`IDUSER`),
  ADD KEY `FK_KOMENTAR_KOMEN_POS_POSTINGA` (`IDPOSTINGAN`);

--
-- Indexes for table `likeuser`
--
ALTER TABLE `likeuser`
  ADD PRIMARY KEY (`IDLIKE`),
  ADD KEY `FK_LIKEUSER_LIKE_POST_POSTINGA` (`IDPOSTINGAN`),
  ADD KEY `FK_LIKEUSER_LIKE_USER_USER` (`IDUSER`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`IDPOSTINGAN`),
  ADD KEY `FK_POSTINGA_POSTINGAN_USER` (`IDUSER`);

--
-- Indexes for table `postingangambar`
--
ALTER TABLE `postingangambar`
  ADD PRIMARY KEY (`IDGAMBAR`),
  ADD KEY `FK_POSTINGA_TEMPATGAM_POSTINGA` (`IDPOSTINGAN`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUSER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datauser`
--
ALTER TABLE `datauser`
  MODIFY `ID_DATAUSER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentarpostingan`
--
ALTER TABLE `komentarpostingan`
  MODIFY `IDKOMENTAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `likeuser`
--
ALTER TABLE `likeuser`
  MODIFY `IDLIKE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `IDPOSTINGAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `postingangambar`
--
ALTER TABLE `postingangambar`
  MODIFY `IDGAMBAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IDUSER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datauser`
--
ALTER TABLE `datauser`
  ADD CONSTRAINT `FK_DATAUSER_DATA_USER_USER` FOREIGN KEY (`IDUSER`) REFERENCES `user` (`IDUSER`);

--
-- Constraints for table `komentarpostingan`
--
ALTER TABLE `komentarpostingan`
  ADD CONSTRAINT `FK_KOMENTAR_KOMENTARU_USER` FOREIGN KEY (`IDUSER`) REFERENCES `user` (`IDUSER`),
  ADD CONSTRAINT `FK_KOMENTAR_KOMEN_POS_POSTINGA` FOREIGN KEY (`IDPOSTINGAN`) REFERENCES `postingan` (`IDPOSTINGAN`);

--
-- Constraints for table `likeuser`
--
ALTER TABLE `likeuser`
  ADD CONSTRAINT `FK_LIKEUSER_LIKE_POST_POSTINGA` FOREIGN KEY (`IDPOSTINGAN`) REFERENCES `postingan` (`IDPOSTINGAN`),
  ADD CONSTRAINT `FK_LIKEUSER_LIKE_USER_USER` FOREIGN KEY (`IDUSER`) REFERENCES `user` (`IDUSER`);

--
-- Constraints for table `postingan`
--
ALTER TABLE `postingan`
  ADD CONSTRAINT `FK_POSTINGA_POSTINGAN_USER` FOREIGN KEY (`IDUSER`) REFERENCES `user` (`IDUSER`);

--
-- Constraints for table `postingangambar`
--
ALTER TABLE `postingangambar`
  ADD CONSTRAINT `FK_POSTINGA_TEMPATGAM_POSTINGA` FOREIGN KEY (`IDPOSTINGAN`) REFERENCES `postingan` (`IDPOSTINGAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
