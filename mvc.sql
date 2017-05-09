-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2017 at 05:12 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `role`) VALUES
(1, 'ancdef', '643b06434070200fc102f3fd35ed83a2c4ef590afd9fccfca2faca332a85d5a5', 'admin'),
(12, 'toanabc', '643b06434070200fc102f3fd35ed83a2c4ef590afd9fccfca2faca332a85d5a5', 'admin'),
(13, 'ahah1212', '643b06434070200fc102f3fd35ed83a2c4ef590afd9fccfca2faca332a85d5a5', 'default'),
(14, 'thach', '96f6056b20bfa4ee2bdfbe3d885026b70b0aee8bb1ef70436571dd22cd127e74', 'admin'),
(18, 'toan', '92d39c30ecd0c4eb89f1332fcdb8448b3d40374b329ef70fa34e4c67cc695fdb', 'admin'),
(19, 'dinh', 'df4d184e25605f125ebbcf8a7894f03a8aecce60c1d59e2fb6021d1b816c9c5d', 'admin'),
(20, 'thanh an', 'e0e7405461d32116315ea39fc4de2eed522770a73accabdcfa1a8d0b15a93d47', 'default'),
(28, 'thach12', 'ffb75a3026fe133dcfd01785854362e5a620ee1d77eda1d0788a78caaba79576', 'admin'),
(22, 'van dat', '2b17a71e65b6aff46eab5b486a8a242ef1130b5199cd273f7ed1e7aa883ecd8b', 'admin'),
(23, 'nam be', '8a092e77f4af02914e28ee12899b828f26e634afd96734f1f2fa726c9b3b5813', 'admin'),
(24, 'van loan', '92d39c30ecd0c4eb89f1332fcdb8448b3d40374b329ef70fa34e4c67cc695fdb', 'admin'),
(25, 'hoangthach', '726d3997d1b36ae8b609f51206af2f3b7fd5a573b9b0a62a97a40f40f94b6fa5', 'default'),
(26, 'hoangthach', '726d3997d1b36ae8b609f51206af2f3b7fd5a573b9b0a62a97a40f40f94b6fa5', 'default');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
