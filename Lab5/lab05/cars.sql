-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 11:15 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  `make` varchar(18) NOT NULL,
  `model` varchar(18) NOT NULL,
  `price` int(11) NOT NULL,
  `yom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `make`, `model`, `price`, `yom`) VALUES
('0', 'Holden', 'Astra', 14000, 2005),
('1', 'BMW', 'X3', 35000, 2004),
('2', 'Ford', 'Falcon', 39000, 2010),
('3', 'Toyota', 'Corolla', 20000, 2010),
('4', 'Holden', 'Commodore', 13500, 2005),
('5', 'Holden', 'Astra', 8000, 2001),
('6', 'Holden', 'Commodore', 28000, 2009),
('7', 'Ford', 'Falcon', 14000, 2006),
('8', 'Ford', 'Falcon', 7000, 2003),
('9', 'Ford', 'Laser', 10000, 2001),
('10', 'Mazda', 'RX-7', 26000, 2000),
('11', 'Toyota', 'Corolla', 12000, 2001),
('12', 'Mazda', '3', 14500, 2007);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
