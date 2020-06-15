-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 02:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favorites`
--

CREATE TABLE `tbl_favorites` (
  `fave_id` int(11) NOT NULL,
  `fave_name` text NOT NULL,
  `fave_category` text NOT NULL,
  `fave_userId` int(11) NOT NULL,
  `fave_img_src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_favorites`
--

INSERT INTO `tbl_favorites` (`fave_id`, `fave_name`, `fave_category`, `fave_userId`, `fave_img_src`) VALUES
(1, 'Barbeque', 'FOODS', 1, 'assets/img/favorites/bbq.jpg'),
(2, 'Pizza', 'FOODS', 1, 'assets/img/favorites/pizza.jpg'),
(3, 'Samgyupsal', 'FOODS', 1, 'assets/img/favorites/samgyup.jpg'),
(4, 'Sisig', 'FOODS', 1, 'assets/img/favorites/sisig.jpg'),
(5, 'Potato', 'FOODS', 1, 'assets/img/favorites/potato.jpg'),
(6, 'Red Rose', 'FLOWERS', 1, 'assets/img/favorites/flower.jpg'),
(7, 'depression', 'Drawing', 1, 'assets/img/hobby/depression.jpg'),
(8, 'Before', 'Photo Manipulation(Photoshop)', 1, 'assets/img/hobby/photoshop1.jpg'),
(9, 'Water Color Painting', 'Water Color Painting', 1, 'assets/img/hobby/painting.jpg'),
(10, 'Miracle Cell in No. 7 (Korean Movie)\r\n', 'MOVIE', 1, 'assets/img/favorites/miracle.jpg'),
(12, 'Water Color Painting', 'Water Color Painting', 1, 'assets/img/hobby/painting2.jpg'),
(13, 'After', 'Photo Manipulation(Photoshop)', 1, 'assets/img/hobby/photoshop2.jpg'),
(14, 'attitude', 'Drawing', 1, 'assets/img/hobby/attitude.jpg'),
(15, 'anxiety', 'Drawing', 1, 'assets/img/hobby/anxiety.jpg'),
(16, 'portrait', 'Drawing', 1, 'assets/img/hobby/portrait.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `img_id` int(11) NOT NULL,
  `img_src` text NOT NULL,
  `img_place` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`img_id`, `img_src`, `img_place`) VALUES
(1, 'assets/img/personal_img/head1.jpg', 'header_place'),
(2, 'assets/img/personal_img/head2.jpg', 'header_place'),
(3, 'assets/img/personal_img/head3.jpg', 'header_place'),
(4, 'assets/img/personal_img/personalInfo.jpg', 'personal_info'),
(5, 'assets/img/travel/baguio1.jpg', 'travel'),
(6, 'assets/img/travel/baguio2.jpg', 'travel'),
(7, 'assets/img/travel/baguio3.jpg', 'travel'),
(8, 'assets/img/travel/puertoGalera.jpg', 'travel'),
(9, 'assets/img/travel/puertoGalera2.jpg', 'travel'),
(10, 'assets/img/travel/bicol1.jpg', 'travel'),
(11, 'assets/img/travel/bicol2.jpg', 'travel'),
(12, 'assets/img/travel/tanayRizal.jpg', 'travel'),
(13, 'assets/img/travel/tanayRizal2.jpg', 'travel'),
(14, 'assets/img/travel/tanayRizal3.jpg', 'travel'),
(15, 'assets/img/travel/tanayRizal4.jpg', 'travel'),
(16, 'assets/img/travel/tanayRizal5.jpg', 'travel'),
(17, 'assets/img/travel/pinto.jpg', 'travel'),
(18, 'assets/img/travel/pinto2.jpg', 'travel'),
(19, 'assets/img/travel/intramuros.jpg', 'travel'),
(20, 'assets/img/travel/intramuros2.jpg', 'travel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personalinfo`
--

CREATE TABLE `tbl_personalinfo` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_birthdate` text NOT NULL,
  `user_gender` text NOT NULL,
  `user_birthplace` text NOT NULL,
  `user_address` text NOT NULL,
  `user_phoneNumber` text NOT NULL,
  `user_email` text NOT NULL,
  `user_height` text NOT NULL,
  `user_weight` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_personalinfo`
--

INSERT INTO `tbl_personalinfo` (`user_id`, `user_name`, `user_birthdate`, `user_gender`, `user_birthplace`, `user_address`, `user_phoneNumber`, `user_email`, `user_height`, `user_weight`) VALUES
(1, 'Ana Katrina Bon Ramos', 'April 21, 1998', 'Female', 'Manila', '11 E San Jose Street Brgy.Damayan Quezon City', '09550175288', 'aaaktrnbon@gmail.com', '5’3', '56kg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programminglanguage`
--

CREATE TABLE `tbl_programminglanguage` (
  `pl_id` int(11) NOT NULL,
  `pl_name` text NOT NULL,
  `pl_yearsExperience` int(11) NOT NULL,
  `pl_userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_programminglanguage`
--

INSERT INTO `tbl_programminglanguage` (`pl_id`, `pl_name`, `pl_yearsExperience`, `pl_userId`) VALUES
(1, 'C++', 1, 1),
(2, 'Java', 2, 1),
(3, 'Assembly', 1, 0),
(4, 'PHP', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school`
--

CREATE TABLE `tbl_school` (
  `school_id` int(11) NOT NULL,
  `school_desc` text NOT NULL,
  `school_category` text NOT NULL,
  `school_img_src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_school`
--

INSERT INTO `tbl_school` (`school_id`, `school_desc`, `school_category`, `school_img_src`) VALUES
(1, 'Python Basic Data Analysis', 'seminar', 'assets/img/school/seminar1.jpg'),
(2, 'Anger Management', 'seminar', 'assets/img/school/seminar2.jpg'),
(3, 'Information Security Management System Awareness', 'seminar', 'assets/img/school/seminar3.jpg'),
(4, 'Cyber Security', 'seminar', 'assets/img/school/seminar4.jpg'),
(5, 'Web Development using CakePHP Framework', 'seminar', 'assets/img/school/seminar5.jpg'),
(6, 'Tech Tutor', 'seminar', 'assets/img/school/seminar6.jpg'),
(7, '', 'ccp', 'assets/img/school/ccp.jpg'),
(8, '', 'ccp', 'assets/img/school/ccp2.jpg'),
(9, 'Christmas Party', 'event', 'assets/img/school/christmas.jpg'),
(10, 'Valentines Day', 'event', 'assets/img/school/valentines.jpg'),
(11, 'Organization Day', 'event', 'assets/img/school/org_day.jpg'),
(12, 'Foundation Day (CCP 65) - CCS Booth', 'event', 'assets/img/school/foundation.jpg'),
(13, 'Intrams', 'event', 'assets/img/school/intrams.jpg'),
(14, 'CAPSTONE - Access Control System using QR Code', 'project', 'assets/img/school/acs.jpg'),
(15, 'Multimedia - ShortFilm (Horror)', 'project', 'assets/img/school/multimedia.jpg'),
(16, 'DBMS (Database Management System) - Cyberport', 'project', 'assets/img/school/dbms.jpg'),
(17, 'ITEL', 'project', 'assets/img/school/itel.jpg'),
(18, 'THESIS 2 - Fleet Management System of Hertz Exclusive Cars Inc', 'project', 'assets/img/school/fleet.jpg'),
(19, 'FRIENDS', 'FRIENDS', 'assets/img/school/friends.jpg'),
(20, 'FRIENDS', 'FRIENDS', 'assets/img/school/friends2.jpg'),
(21, 'FRIENDS', 'FRIENDS', 'assets/img/school/friends3.jpg'),
(22, 'FRIENDS', 'FRIENDS', 'assets/img/school/friends4.jpg'),
(23, 'FRIENDS', 'FRIENDS', 'assets/img/school/friends5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_favorites`
--
ALTER TABLE `tbl_favorites`
  ADD PRIMARY KEY (`fave_id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tbl_personalinfo`
--
ALTER TABLE `tbl_personalinfo`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_programminglanguage`
--
ALTER TABLE `tbl_programminglanguage`
  ADD PRIMARY KEY (`pl_id`);

--
-- Indexes for table `tbl_school`
--
ALTER TABLE `tbl_school`
  ADD PRIMARY KEY (`school_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_favorites`
--
ALTER TABLE `tbl_favorites`
  MODIFY `fave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_personalinfo`
--
ALTER TABLE `tbl_personalinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_programminglanguage`
--
ALTER TABLE `tbl_programminglanguage`
  MODIFY `pl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_school`
--
ALTER TABLE `tbl_school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
