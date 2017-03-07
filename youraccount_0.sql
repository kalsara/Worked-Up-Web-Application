-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 10:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youraccount_0`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicName` varchar(50) NOT NULL,
  `prodDescrip` varchar(1000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL DEFAULT '0.00',
  `prodQuantity` int(4) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicName`, `prodDescrip`, `prodPrice`, `prodQuantity`) VALUES
(1, 'Beldray  Vacuum Cleaner', 'BeldrayVacuum.jpg', 'The Beldray Wet and Dry Handheld Vacuum cleaner is ideal for cleaning  your home or car in a quick jiffy. It''s specially designed technology  allows for multi-purpose cleaning whether drink spills or dirt and dust.  This handheld portable cleaning device is both practical and powerful  with it''s 12V rechargeable battery. ', '22.50', 100),
(2, 'Sainsbury''s Harvest Hare Objet', 'Rabbit.jpg', 'Dress any room to an Autumnal countryside theme with this hare objet. Part of the Sainsbury''s Harvest Collection.\r\n\r\nDimensions: L12xW10cmxH25\r\n\r\nCare and use instructions:\r\nClean with a soft dry cloth and keep dry\r\n\r\nWarnings:\r\nKeep out of reach of children\r\nuse on non marking surface', '8.00', 100),
(3, 'Home Marble Soap Dispenser', 'soap.jpg', 'Simple yet glam, this soap dispenser comes with a marble base to give your bathroom a modern luxe refresh. Easy to refill, simply take the top of and fill with your favourite soap hand wash. Part of the Sainsbury''s Ethereal Range that brings some sophisticated charm to your home.\r\n', '12.00', 100),
(4, 'Halogen Candle bulb', 'bulb.jpg', 'Dimmable\r\n\r\nWarm colour\r\n\r\nStart time <0.2 seconds\r\n\r\nWarm up time full instant light\r\n\r\nLamp base code\r\nB22\r\nVoltage\r\n220 - 240V \r\nMercury value\r\n0.0mg\r\n', '14.00', 100),
(5, ' Wireless Bluetooth Headphones', 'headphone.jpg', 'Featuring call-handling, wireless connectivity and easy to use earcup controls, the KS Arena headphones are ideal for listening to music wherever you are. Never be held back again by wires or lagging music, as with the KitSound Arena headphones you can stream music wirelessly through Bluetooth without missing a thing. The authentic sound is rich and clear, perfect for relaxing to on the move. Dating back to ancient Roman and Greek times, arenas have long been used to entertain crowds with sporting events, plays and concerts. With our Arena wireless headphones you can enjoy your own personal concert wherever you go.', '51.00', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(4) NOT NULL,
  `UsersType` varchar(45) DEFAULT NULL,
  `UsersFName` varchar(45) DEFAULT NULL,
  `UsersLName` varchar(45) DEFAULT NULL,
  `UsersAddress` varchar(45) DEFAULT NULL,
  `UsersPostCode` varchar(8) DEFAULT NULL,
  `UsersTelNo` int(11) DEFAULT NULL,
  `UsersEmail` varchar(45) NOT NULL,
  `UsersPassword` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `UsersType`, `UsersFName`, `UsersLName`, `UsersAddress`, `UsersPostCode`, `UsersTelNo`, `UsersEmail`, `UsersPassword`) VALUES
(5, NULL, 't', 'y', 'u', 'i', 8, 'o', 'l'),
(6, NULL, 'w', 'e', 'r', 't', 7, 'y@gmail.com', 'y'),
(9, NULL, 'y', 'h', 'u', 'i', 9, 'h@gmail.com', 'h');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `UsersEmail_UNIQUE` (`UsersEmail`),
  ADD UNIQUE KEY `userId_UNIQUE` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
