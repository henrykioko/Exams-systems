-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 07:07 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exams`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `Id` int(11) NOT NULL,
  `Question` text NOT NULL,
  `A` text NOT NULL,
  `B` text NOT NULL,
  `C` text NOT NULL,
  `D` text NOT NULL,
  `Correct` text NOT NULL,
  `next` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`Id`, `Question`, `A`, `B`, `C`, `D`, `Correct`, `next`) VALUES
(1, 'is this a boy', 'yes', 'no', 'none', 'okay', 'A', 0),
(2, 'lamba lolo', 'swat', 'dare', 'ordinary', 'rungu', 'B', 0),
(3, 'Among the following who is not a governor', 'miguna', 'Mutua', 'minji', 'nyongo', 'A', 0),
(4, 'who is a musician here', 'tricky', 'desangu', 'nyashinski', 'raila', 'c', 0),
(5, 'which year did raila become president', '2002', '2007', '2030', 'never', 'D', 0),
(6, 'which country is not in africa\r\n', 'Russia', 'uganda', 'cameroon', 'ghana', 'A', 0),
(7, 'the best song ever', 'my life', 'if i where a boy', 'mapepe', 'none', 'd', 0),
(8, 'maisha ni safari. iyo ni nini', 'methali', 'msemo', 'kitendawili', 'fumbo', 'B', 0),
(9, 'Christiano ako na miaka ngapi', '30', '31', '33', '35', 'D', 0),
(10, 'who is the best footballer in the world', 'christiano', 'messi', 'wanyama', 'oliech', 'C', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
