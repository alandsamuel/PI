-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2016 at 07:34 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('alandsamuel', 'dari1sampe5'),
('root', '');

-- --------------------------------------------------------

--
-- Table structure for table `detailpembelian`
--

CREATE TABLE IF NOT EXISTS `detailpembelian` (
  `iddetail` int(11) NOT NULL AUTO_INCREMENT,
  `idbeli` int(11) NOT NULL,
  `idgame` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`iddetail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `detailpembelian`
--

INSERT INTO `detailpembelian` (`iddetail`, `idbeli`, `idgame`, `jumlah`) VALUES
(1, 0, 'ST01', 10),
(2, 0, 'F01', 10),
(3, 0, 'F01', 1),
(4, 0, 'ST01', 10),
(5, 0, 'ST01', 10),
(6, 0, '', 10),
(7, 3, 'F01', 10),
(8, 3, 'ST01', 10),
(9, 3, 'R01', 10),
(10, 5, 'RA01', 10),
(11, 5, 'F01', 1),
(12, 5, 'F01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `no` int(2) NOT NULL AUTO_INCREMENT,
  `idgame` varchar(5) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `harga` int(10) NOT NULL,
  `idkategori` varchar(3) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` text,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`no`, `idgame`, `judul`, `harga`, `idkategori`, `gambar`, `deskripsi`) VALUES
(1, 'F01', 'Counter Strike : Global Offensive', 115000, 'K01', 'csgo.jpg', 'Counter-Strike: Global Offensive (CS: GO) adalah game yang sudah ada sejak 14 tahun yang lalu. CS: GO menambahkan fitur-fitur lain seperti peta baru dan senjata baru dan tidak lupa juga memberikan versi update dari versi klasik CS seperti de_dust, de_train, dan lain lain.\n\nGenre: Action\nDeveloper: Valve \nPublisher: Valve	\nRelease Date: 22 Aug, 2012'),
(2, 'F02', 'Rainbow Six Siege', 100000, 'K01', 'r6.png', 'Game taktis tipe baru, ubisoft menawarkan game first person shooter yang mengandalkan kerjasama tim.\n\nGenre: Action\nDeveloper: Ubisoft Montreal \nPublisher: Ubisoft	\nRelease Date: 2 Dec, 2015'),
(3, 'R01', 'Agarest: Generations of War Zero', 115000, 'K02', 'az.jpg', 'Dari kekosongan, para dewa kegelapan dan cahaya menciptakan Agarest, sebuah dunia yang paling sempurna dan ilahi. Sebagai generasi berlalu, surga sayangnya jatuh ke kerusakan waktu. Perang gelap langit dan Agarest segera menjadi neraka menyiksa sebagai dewa dibagi dan tentara besar bentrok,\n\nGenre: Adventure, RPG, Strategy\nDeveloper: Idea Factory \nPublisher: Ghostlight LTD	\nRelease Date: 18 Apr, 2014'),
(4, 'RA01', 'Dirt Rally', 500000, 'K03', 'dr.jpg', NULL),
(5, 'SI01', 'Shoppe Keep', 110000, 'K05', 'sk.png', NULL),
(6, 'SP01', 'PES 2016', 135000, 'K06', 'pes2016.png', NULL),
(7, 'ST01', 'Company Of Heroes', 110000, 'K04', 'coh.jpg', 'Company of Heroes mengubah real time strategy game dengan membawa pengorbanan tentara heroik, lingkungan yang dilanda perang, dan medan perang dinamis untuk hidup.\n\nGenre: Action, Strategy\nDeveloper: Relic Entertainment \nPublisher: SEGA	\nRelease Date: 11 Sep, 2006\n'),
(8, 'ST02', 'Company Of Heroes 2', 199000, 'K04', 'coh2.jpg', 'Alami platform Perang Dunia II RTS terbaik dengan COH2\n\nGenre: Strategy\nDeveloper: Relic Entertainment ,	Feral Interactive (Mac) ,	Feral Interactive (Linux) \nPublisher: SEGA, Feral Interactive (Mac), Feral Interactive (Linux)	\nRelease Date: 26 Jun, 2013\n'),
(9, 'R02', 'Agarest: Generations of War', 115000, 'K02', 'azow.png', 'Pada waktu subuh, perang yang mengerikan berkecamuk antara kekuatan baik dan jahat, berakhir dalam penghancuran dunia Agarest. Setelah kemenangan mereka, para Dewa Cahaya bersatu tubuh membunuh para Dewa Kegelapan dan menciptakan dunia baru.\n\nGenre: Adventure, RPG, Strategy\nDeveloper: Idea Factory \nPublisher: Ghostlight LTD	\nRelease Date: 5 Feb, 2014\n'),
(10, 'R03', 'Agarest: Generations of War 2', 135000, 'K02', 'az2.png', 'Menyusul keberhasilan besar dari jumlah penjualan seri pertama di steam, Agarest: Generations of War dan prekuel nya Agarest: Generations of War ZERO, ghostlight dengan bangga untuk memperkenalkan sekuel kedua, Agarest: Generations Of War 2!\n\nGenre: Adventure, RPG, Strategy\nDeveloper: Idea Factory \nPublisher: Ghostlight LTD	\nRelease Date: 20 Feb, 2015'),
(11, 'ST03', 'Company of Heroes 2 - The British Forces', 109000, 'K04', 'coh2bf.png', 'Ini game terbaru dalam seri COH2. Cara bermain baru yang unik dan menantang pemain untuk menyeimbangkan antara mobilitas dan pertahanan, melancarkan serangan kejutan dengan pilihan pengembangan dan permainan di ruang terbuka\n\nGenre: Strategy\nDeveloper: Relic Entertainment ,	Feral Interactive (Mac) ,	Feral Interactive (Linux) \nPublisher: Sega, Feral Interactive (Mac), Feral Interactive (Linux)	\nRelease Date: 3 Sep, 2015\n'),
(12, 'SI02', 'Starbound', 135000, 'K05', 'sb.png', 'Starbound adalah sebuah game petualangan sandbox luar angkasa! Anda telah melarikan diri dari rumah Anda, hanya untuk menemukan diri Anda tersesat dalam ruang angkasa dengan kapal yang rusak. satu-satunya pilihan Anda adalah untuk turun ke planet di bawah dan mengumpulkan sumber daya yang Anda butuhkan untuk memperbaiki kapal dan berangkat untuk menjelajahi angkasa yang luas, tak terbatas ...\n\nGenre: Action, Adventure, Casual, Indie, RPG\nPublisher: Chucklefish	\nRelease Date: 23 Jul, 2016\n');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `idbeli` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `namapembeli` varchar(255) NOT NULL,
  `steamuser` varchar(255) NOT NULL,
  `kontakpembeli` varchar(45) NOT NULL,
  `cara` varchar(15) DEFAULT NULL,
  `Pesan` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idbeli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempdetailpembelian`
--

CREATE TABLE IF NOT EXISTS `tempdetailpembelian` (
  `iddetail` int(11) NOT NULL AUTO_INCREMENT,
  `idbeli` int(11) NOT NULL,
  `idgame` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`iddetail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temppembelian`
--

CREATE TABLE IF NOT EXISTS `temppembelian` (
  `idbeli` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `namapembeli` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idbeli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
