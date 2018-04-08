-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 05:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fdmquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `choiceID` int(3) NOT NULL,
  `questionID` int(3) NOT NULL,
  `choiceName` varchar(50) NOT NULL,
  `correct` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`choiceID`, `questionID`, `choiceName`, `correct`) VALUES
(1, 3, '1 billion', 0),
(2, 3, '1.5 billion', 0),
(3, 3, '1.2 billion', 1),
(4, 3, '2 billion', 0),
(5, 4, '95', 0),
(6, 4, '71', 0),
(7, 4, '54', 1),
(8, 4, '80', 0),
(9, 5, 'Algeria', 1),
(10, 5, 'Sudan', 0),
(11, 5, 'Libya', 0),
(12, 5, 'Angola', 0),
(13, 6, 'Mozambique', 0),
(14, 6, 'Egypt', 0),
(15, 6, 'Madagascar', 0),
(16, 6, 'Somalia', 1),
(17, 7, 'Tripoli', 0),
(18, 7, 'Lagos', 1),
(19, 7, 'Windhoek', 0),
(20, 7, 'Addis Ababa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`choiceID`),
  ADD KEY `FK_QuestionID` (`questionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choice`
--
ALTER TABLE `choice`
  MODIFY `choiceID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `choice`
--
ALTER TABLE `choice`
  ADD CONSTRAINT `FK_QuestionID` FOREIGN KEY (`questionID`) REFERENCES `question` (`questionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
