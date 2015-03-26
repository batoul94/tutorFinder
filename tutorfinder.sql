-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2015 at 12:42 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorfinder`
--
CREATE DATABASE IF NOT EXISTS `tutorfinder` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tutorfinder`;

-- --------------------------------------------------------

--
-- Table structure for table `markersdata`
--

DROP TABLE IF EXISTS `markersdata`;
CREATE TABLE `markersdata` (
`id` int(11) NOT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `firstname` varchar(60) DEFAULT NULL,
  `lastname` varchar(60) DEFAULT NULL,
  `gender` varchar(60) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `address` varchar(400) DEFAULT NULL,
  `usrtel` int(11) DEFAULT NULL,
  `qualification` varchar(600) DEFAULT NULL,
  `profile` varchar(600) DEFAULT NULL,
  `subjects` varchar(500) DEFAULT NULL,
  `level` varchar(500) DEFAULT NULL,
  `price` varchar(60) DEFAULT NULL,
  `availability` varchar(600) DEFAULT NULL,
  `img` text,
  `video_link` text,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `validated` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markersdata`
--

INSERT INTO `markersdata` (`id`, `lng`, `lat`, `stars`, `firstname`, `lastname`, `gender`, `bday`, `address`, `usrtel`, `qualification`, `profile`, `subjects`, `level`, `price`, `availability`, `img`, `video_link`, `email`, `password`, `validated`) VALUES
(1, -0.220927, 51.414520, 1, 'Hanna', 'hey', 'female', '1994-10-10', '20 Lantern Court, 99 Worple Road, London, UK , SW20 8HB', 2147483647, 'GCSEs,A-levels', 'I am a student at Brunel', 'maths, physics', 'ks1, ks2', '10', 'Monday afternoons from 1pm-4pm', 'imagesTree/image.jpg', 'https://www.youtube.com/watch?v=FTQbiNvZqaY', 'haha', 'haha', 'yes'),
(2, -0.033119, 51.474312, 2, 'Eneinta', 'Veliai', 'female', '1994-10-10', '2Lewisham Way, New Cross, London SE14 6SW', 20, 'GCSEs,BTEC', 'I am a CS student at Goldsmiths', 'maths, english', 'ks4, ks3', '20', 'Tuesdayafternoons from 11am-2pm', 'imagesTree/image0.jpg', 'https://www.youtube.com/watch?v=xaFEWKObHA4', 'tutu', 'tutu', 'yes'),
(13, -0.214623, 51.563633, NULL, 'Batoul', 'Aljoburi', 'female', '1994-04-21', '28 chiltern gardens, London, nw2 1px', 2085563822, 'A-levels', 'Computer science student at goldsmiths ', 'Java, maths', 'Basic, ks3', '20', 'Weekend only ', 'imagesTree/image3.jpg', 'www.youtube.com', 'batoul@gold.ac.uk', 'gold', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `parentReg`
--

DROP TABLE IF EXISTS `parentReg`;
CREATE TABLE `parentReg` (
`parent_id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentReg`
--

INSERT INTO `parentReg` (`parent_id`, `firstname`, `lastname`, `email`, `password`) VALUES
(8, 'Sara', 'Johnson', 'sara@hotmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_reviews`
--

DROP TABLE IF EXISTS `tutor_reviews`;
CREATE TABLE `tutor_reviews` (
`id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `review_body` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor_reviews`
--

INSERT INTO `tutor_reviews` (`id`, `tutor_id`, `review_body`) VALUES
(1, 1, 'Hanna is a such a great Maths tutor.'),
(2, 2, 'Thanks to Eneinta, my 16 year old girl got an A* in her Maths GCSE.'),
(4, 2, ' excellent tutor ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markersdata`
--
ALTER TABLE `markersdata`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parentReg`
--
ALTER TABLE `parentReg`
 ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `tutor_reviews`
--
ALTER TABLE `tutor_reviews`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markersdata`
--
ALTER TABLE `markersdata`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `parentReg`
--
ALTER TABLE `parentReg`
MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tutor_reviews`
--
ALTER TABLE `tutor_reviews`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
