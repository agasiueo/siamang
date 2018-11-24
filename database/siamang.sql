-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 02:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siamang`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(11) NOT NULL,
  `nama_acara` varchar(50) NOT NULL,
  `gs` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `lokasi` varchar(80) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `rating` int(2) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `nama_acara`, `gs`, `genre`, `lokasi`, `harga`, `tanggal`, `deskripsi`, `rating`, `gambar`) VALUES
(22, 'Malang JAZZ Festival 2017', 'Sheila On 7, The Overtunes', 'jazz', 'LEMBAH DIENG', '90.000', '2017-10-07', 'Malang JAZZ Festival adalah acara tahunan untuk memberikan hiburan musik-musik jazz kepada masyarakat Malang.', 9, 'poster-malang-jazz.jpg'),
(24, 'Flotus Festival 2018', 'Lingkar Atmosfer, Kangroo Project, MOP, Fourtwnty', 'pop', 'GRAHA CAKRAWALA', '35000', '2017-10-14', 'Bergoyang bersama', 8, '420.png'),
(25, 'Nescafe Musik Asik', 'Yoda, Lyla, Yo!k!', 'pop', 'LEMBAH DIENG', '25000', '2018-06-11', 'Asiknya Musik di Malang yang asik', 8, 'nescafe.jpg'),
(26, 'Radar Malang Music Versary', 'Sheila On 7', 'pop', 'GRAHA CAKRAWALA', 'Festival', '2018-05-10', 'Dilarang berisik, mari kita asik-asik', 9, 'poster1.jpg'),
(28, '-', '-', 'jazz', 'LEMBAH DIENG', '-', '2018-06-22', '-', 7, 'poster3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(20) NOT NULL,
  `id_acara` int(20) NOT NULL,
  `komentar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(40) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_admin`, `username`, `password`, `role`, `nama`) VALUES
(1, 'admin1', 'admin1', 'admin', 'admin1'),
(2, 'user', 'user', 'user', 'user'),
(3, 'indonesia', '17agustus', 'admin', 'admin2'),
(4, 'a', 'langsungaja', 'admin3', 'admin3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_acara` (`id_acara`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `id_acara` FOREIGN KEY (`id_acara`) REFERENCES `acara` (`id_acara`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
