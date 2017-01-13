-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 01:21 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `rezervari`
--

CREATE TABLE `rezervari` (
  `Id` int(11) NOT NULL,
  `Nume` varchar(100) NOT NULL,
  `Locatie` varchar(100) NOT NULL,
  `Meniu` varchar(100) NOT NULL,
  `Nr_invitati` int(11) NOT NULL,
  `Tort` varchar(100) NOT NULL,
  `Buchet` varchar(100) NOT NULL,
  `Data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rezervari`
--

INSERT INTO `rezervari` (`Id`, `Nume`, `Locatie`, `Meniu`, `Nr_invitati`, `Tort`, `Buchet`, `Data`) VALUES
(1, 'traian', 'Barletto', '2', 100, '4', '5', '11.12.2017'),
(2, 'aidastr', 'barletto', 'meniu1', 50, 'tort1', 'buchet1', '12/11/2017'),
(3, 'aida200', 'Barletto', 'Meniu2', 100, 'Tort7', 'Buchet7', '10.12.2017'),
(4, 'lab223', 'Imperial House', 'Meniu2', -34, 'Tort1', 'Buchet1', '12/12/2017');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Password`) VALUES
(3, 'aida', '1234@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'aida2', '12345@yahoo.com', '202cb962ac59075b964b07152d234b70'),
(5, 'aida200', 'aida.nutty@gmail.com', 'ad0c7faff5443043f1a1046a3bfd6e18'),
(6, 'aida500', 'aida.nutty@gmail.com', 'b8e0ffa9e4de50745d05c9e0ee4ed685'),
(8, 'aidastr', 'aida.nutty@gmail.com', 'ed6aacccfffa8894c43e4fccd18142f7'),
(9, 'traian', 'traian.stroia@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(10, 'traian2', 'aida.nutty@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'vlad', 'aida.nutty@gmail.com', 'd701fde59d74f76803087b6632186caf'),
(12, 'lab223', 'k2095440@mvrht.com', 'a1a2b1fe85fb08dc90a15c08a7ab7006');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rezervari`
--
ALTER TABLE `rezervari`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rezervari`
--
ALTER TABLE `rezervari`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
