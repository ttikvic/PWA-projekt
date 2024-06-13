-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 11:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmovi`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `ID` int(40) NOT NULL,
  `category` varchar(64) NOT NULL,
  `title` text NOT NULL,
  `about` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(64) NOT NULL,
  `archive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`ID`, `category`, `title`, `about`, `content`, `image`, `archive`) VALUES
(2, 'Action', 'Good Fellas', 'gf', 'adwwag', 'goodfellas.jpg', 0),
(3, 'Action', 'Godfather', 'Godfather', 'Godfather al pacino aaaa', 'godfather.jpe', 0),
(4, 'Action', 'Godfather', 'Godfather', 'Godfather al pacino aaaa', 'godfather.jpe', 0),
(5, 'Action', 'Godfather', 'adw', 'awd', 'godfather.jpe', 0),
(6, 'Action', 'Godfather', 'adw', 'awd', 'godfather.jpe', 1),
(7, 'Action', 'Godfather', 'adw', 'awd', 'godfather.jpe', 1),
(8, 'Action', 'Godfather', 'adw', 'awd', 'godfather.jpe', 0),
(9, 'Action', 'Godfather', 'adw', 'awd', 'godfather.jpe', 1),
(13, 'Drama', 'Forrest Gump', 'Forrest Gump Forrest Gump Forrest Gump Forrest Gump ', 'Forrest Gump Forrest Gump Forrest Gump Forrest Gump Forrest Gump Forrest Gump Forrest Gump Forrest Gump Forrest Gump Forrest Gump ', 'fgump.jpe', 0),
(14, 'Drama', 'Forrest Gump', 'Forrest Gump Forrest Gump Forrest Gump Forrest Gump ', 'Forrest Gump Forrest Gump Forrest Gump Forrest Gump Forrest Gump Forrest Gump Forrest Gump Forrest Gump Forrest Gump Forrest Gump ', 'fgump.jpe', 1),
(18, 'Drama', 'Fight Club', 'Fight Club Fight Club', 'Fight Club rule number 1 Fight Club rule number 1 Fight Club rule number 1 Fight Club rule number 1 Fight Club rule number 1 Fight Club rule number 1 Fight Club rule number 1 Fight Club rule number 1 ', 'fclub.jpe', 0),
(19, 'Drama', 'Sopranos', 'Tony Soprano', 'Tony Soprano Tony Soprano Tony Soprano Tony Soprano Tony Soprano Tony Soprano Tony Soprano Tony Soprano Tony Soprano Tony Soprano Tony Soprano ', 'sopranos.jpe', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
