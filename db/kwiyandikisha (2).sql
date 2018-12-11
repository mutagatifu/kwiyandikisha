-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 03:13 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kwiyandikisha`
--

-- --------------------------------------------------------

--
-- Table structure for table `academichistory`
--

CREATE TABLE IF NOT EXISTS `academichistory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentsPC` varchar(20) NOT NULL,
  `from` varchar(20) NOT NULL,
  `to` varchar(20) NOT NULL,
  `school` varchar(100) NOT NULL,
  `field` varchar(50) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `studentsPC` (`studentsPC`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `academichistory`
--

INSERT INTO `academichistory` (`id`, `studentsPC`, `from`, `to`, `school`, `field`, `createdDate`, `updatedDate`) VALUES
(1, 'pc124345', 'january 2001', 'october 2005', 'university of rwanda', 'computer science', '2018-12-07 12:19:47', '0000-00-00 00:00:00'),
(2, 'pc124355', 'january 2001', 'october 2005', 'university of rwanda', 'computer science', '2018-12-07 12:23:21', '0000-00-00 00:00:00'),
(3, 'pc124357', 'january 2001', 'october 2005', 'university of rwanda', 'computer science', '2018-12-10 08:50:30', '0000-00-00 00:00:00'),
(4, 'pc124358', 'january 2001', 'october 2005', 'university of rwanda', 'computer science', '2018-12-10 08:57:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `academichistory2`
--

CREATE TABLE IF NOT EXISTS `academichistory2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentsPC` varchar(20) NOT NULL,
  `from2` varchar(20) NOT NULL,
  `to2` varchar(20) NOT NULL,
  `school2` varchar(100) NOT NULL,
  `field2` varchar(50) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `academichistory2`
--

INSERT INTO `academichistory2` (`id`, `studentsPC`, `from2`, `to2`, `school2`, `field2`, `createdDate`, `updatedDate`) VALUES
(1, 'pc124345', 'january 2008', 'november 2013', 'kss efotek', 'pcm', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'kayihura', 'emmile', 'admin@gmail.com', 'admin123'),
(2, 'kalima', 'ellisa', 'ellisa@gmail.com', 'ellisa123');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=227 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Afghanistan '),
(2, 'Albania '),
(3, 'Algeria '),
(4, 'American Samoa '),
(5, 'Andorra '),
(6, 'Angola '),
(7, 'Anguilla '),
(8, 'Antigua & Barbuda '),
(9, 'Argentina '),
(10, 'Armenia '),
(11, 'Aruba '),
(12, 'Australia '),
(13, 'Austria '),
(14, 'Azerbaijan '),
(15, 'Bahamas, The '),
(16, 'Bahrain '),
(17, 'Bangladesh '),
(18, 'Barbados '),
(19, 'Belarus '),
(20, 'Belgium '),
(21, 'Belize '),
(22, 'Benin '),
(23, 'Bermuda '),
(24, 'Bhutan '),
(25, 'Bolivia '),
(26, 'Bosnia & Herzegovina '),
(27, 'Botswana '),
(28, 'Brazil '),
(29, 'British Virgin Is. '),
(30, 'Brunei '),
(31, 'Bulgaria '),
(32, 'Burkina Faso '),
(33, 'Burma '),
(34, 'Burundi '),
(35, 'Cambodia '),
(36, 'Cameroon '),
(37, 'Canada '),
(38, 'Cape Verde '),
(39, 'Cayman Islands '),
(40, 'Central African Rep. '),
(41, 'Chad '),
(42, 'Chile '),
(43, 'China '),
(44, 'Colombia '),
(45, 'Comoros '),
(46, 'Congo, Dem. Rep. '),
(47, 'Congo, Repub. of the '),
(48, 'Cook Islands '),
(49, 'Costa Rica '),
(50, 'Croatia '),
(51, 'Cuba '),
(52, 'Cyprus '),
(53, 'Czech Republic '),
(54, 'Denmark '),
(55, 'Djibouti '),
(56, 'Dominica '),
(57, 'Dominican Republic '),
(58, 'East Timor '),
(59, 'Ecuador '),
(60, 'Egypt '),
(61, 'El Salvador '),
(62, 'Equatorial Guinea '),
(63, 'Eritrea '),
(64, 'Estonia '),
(65, 'Ethiopia '),
(66, 'Faroe Islands '),
(67, 'Fiji '),
(68, 'Finland '),
(69, 'France '),
(70, 'French Guiana '),
(71, 'French Polynesia '),
(72, 'Gabon '),
(73, 'Gambia, The '),
(74, 'Gaza Strip '),
(75, 'Georgia '),
(76, 'Germany '),
(77, 'Ghana '),
(78, 'Gibraltar '),
(79, 'Greece '),
(80, 'Greenland '),
(81, 'Grenada '),
(82, 'Guadeloupe '),
(83, 'Guam '),
(84, 'Guatemala '),
(85, 'Guernsey '),
(86, 'Guinea '),
(87, 'Guinea-Bissau '),
(88, 'Guyana '),
(89, 'Haiti '),
(90, 'Honduras '),
(91, 'Hong Kong '),
(92, 'Hungary '),
(93, 'Iceland '),
(94, 'India '),
(95, 'Indonesia '),
(96, 'Iran '),
(97, 'Iraq '),
(98, 'Ireland '),
(99, 'Isle of Man '),
(100, 'Israel '),
(101, 'Italy '),
(102, 'Jamaica '),
(103, 'Japan '),
(104, 'Jersey '),
(105, 'Jordan '),
(106, 'Kazakhstan '),
(107, 'Kenya '),
(108, 'Kiribati '),
(109, 'Korea, North '),
(110, 'Korea, South '),
(111, 'Kuwait '),
(112, 'Kyrgyzstan '),
(113, 'Laos '),
(114, 'Latvia '),
(115, 'Lebanon '),
(116, 'Lesotho '),
(117, 'Liberia '),
(118, 'Libya '),
(119, 'Liechtenstein '),
(120, 'Lithuania '),
(121, 'Luxembourg '),
(122, 'Macau '),
(123, 'Macedonia '),
(124, 'Madagascar '),
(125, 'Malawi '),
(126, 'Malaysia '),
(127, 'Maldives '),
(128, 'Mali '),
(129, 'Malta '),
(130, 'Marshall Islands '),
(131, 'Martinique '),
(132, 'Mauritania '),
(133, 'Mauritius '),
(134, 'Mayotte '),
(135, 'Mexico '),
(136, 'Micronesia, Fed. St. '),
(137, 'Moldova '),
(138, 'Monaco '),
(139, 'Mongolia '),
(140, 'Montserrat '),
(141, 'Morocco '),
(142, 'Mozambique '),
(143, 'Namibia '),
(144, 'Nauru '),
(145, 'Nepal '),
(146, 'Netherlands '),
(147, 'Netherlands Antilles '),
(148, 'New Caledonia '),
(149, 'New Zealand '),
(150, 'Nicaragua '),
(151, 'Niger '),
(152, 'Nigeria '),
(153, 'N. Mariana Islands '),
(154, 'Norway '),
(155, 'Oman '),
(156, 'Pakistan '),
(157, 'Palau '),
(158, 'Panama '),
(159, 'Papua New Guinea '),
(160, 'Paraguay '),
(161, 'Peru '),
(162, 'Philippines '),
(163, 'Poland '),
(164, 'Portugal '),
(165, 'Puerto Rico '),
(166, 'Qatar '),
(167, 'Reunion '),
(168, 'Romania '),
(169, 'Russia '),
(170, 'Rwanda '),
(171, 'Saint Helena '),
(172, 'Saint Kitts & Nevis '),
(173, 'Saint Lucia '),
(174, 'St Pierre & Miquelon '),
(175, 'Saint Vincent and the Grenadines '),
(176, 'Samoa '),
(177, 'San Marino '),
(178, 'Sao Tome & Principe '),
(179, 'Saudi Arabia '),
(180, 'Senegal '),
(181, 'Serbia '),
(182, 'Seychelles '),
(183, 'Sierra Leone '),
(184, 'Singapore '),
(185, 'Slovakia '),
(186, 'Slovenia '),
(187, 'Solomon Islands '),
(188, 'Somalia '),
(189, 'South Africa '),
(190, 'Spain '),
(191, 'Sri Lanka '),
(192, 'Sudan '),
(193, 'Suriname '),
(194, 'Swaziland '),
(195, 'Sweden '),
(196, 'Switzerland '),
(197, 'Syria '),
(198, 'Taiwan '),
(199, 'Tajikistan '),
(200, 'Tanzania '),
(201, 'Thailand '),
(202, 'Togo '),
(203, 'Tonga '),
(204, 'Trinidad & Tobago '),
(205, 'Tunisia '),
(206, 'Turkey '),
(207, 'Turkmenistan '),
(208, 'Turks & Caicos Is '),
(209, 'Tuvalu '),
(210, 'Uganda '),
(211, 'Ukraine '),
(212, 'United Arab Emirates '),
(213, 'United Kingdom '),
(214, 'United States '),
(215, 'Uruguay '),
(216, 'Uzbekistan '),
(217, 'Vanuatu '),
(218, 'Venezuela '),
(219, 'Vietnam '),
(220, 'Virgin Islands '),
(221, 'Wallis and Futuna '),
(222, 'West Bank '),
(223, 'Western Sahara '),
(224, 'Yemen '),
(225, 'Zambia '),
(226, 'Zimbabwe ');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `descriptions` varchar(100) NOT NULL,
  `location` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `time` datetime NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `descriptions`, `location`, `image`, `time`, `dateCreated`, `updatedDate`) VALUES
(1, 'kubyina', 'ababyinyyi bane', 'kacyiru minagri', 'employees_service.PNG', '2018-01-21 14:05:03', '2018-12-03 13:26:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentsPC` varchar(20) NOT NULL,
  `from` varchar(20) NOT NULL,
  `to` varchar(20) NOT NULL,
  `school` varchar(100) NOT NULL,
  `field` varchar(50) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `studentsPC`, `from`, `to`, `school`, `field`, `createdDate`, `updatedDate`) VALUES
(1, 'pc124345', 'february 2014', 'augustin 2016', 'kss efotek', 'teacher', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faculity`
--

CREATE TABLE IF NOT EXISTS `faculity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `program` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1 for available and 99 for deleted',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `program` (`program`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `faculity`
--

INSERT INTO `faculity` (`id`, `name`, `program`, `status`, `createdDate`, `updatedDate`) VALUES
(1, 'medecin', 1, 1, '2018-11-28 15:08:14', '0000-00-00 00:00:00'),
(2, 'clinical medecin', 3, 1, '2018-11-30 14:30:33', '0000-00-00 00:00:00'),
(4, 'computer engineering', 1, 1, '2018-11-30 12:11:17', '0000-00-00 00:00:00'),
(5, 'electrical engineering', 1, 1, '2018-11-30 12:11:32', '0000-00-00 00:00:00'),
(6, 'carpentry engineering', 3, 1, '2018-11-30 12:11:51', '0000-00-00 00:00:00'),
(7, 'mechanical engineering', 5, 1, '2018-12-10 13:55:09', '0000-00-00 00:00:00'),
(8, 'construction engineering', 5, 1, '2018-12-10 13:55:24', '0000-00-00 00:00:00'),
(9, 'electrical engineering', 5, 1, '2018-12-10 13:55:40', '0000-00-00 00:00:00'),
(10, 'electro-mechanical engineering', 5, 1, '2018-12-10 13:56:06', '0000-00-00 00:00:00'),
(11, 'political study', 4, 1, '2018-12-10 13:56:51', '0000-00-00 00:00:00'),
(12, 'environmental study', 4, 1, '2018-12-10 13:57:13', '0000-00-00 00:00:00'),
(13, 'healthy study', 4, 1, '2018-12-10 13:57:23', '0000-00-00 00:00:00'),
(14, 'ict', 3, 1, '2018-12-10 13:57:40', '0000-00-00 00:00:00'),
(15, 'curnary art', 3, 1, '2018-12-10 13:57:51', '0000-00-00 00:00:00'),
(16, 'house keeping', 3, 1, '2018-12-10 13:58:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(60) NOT NULL,
  `startingDate` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1 for present program and 99 for deleted',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `names`, `startingDate`, `duration`, `status`, `createdDate`, `updatedDate`) VALUES
(1, 'msters degree', 'september', '2 years', 1, '2018-11-28 14:34:36', '2018-11-30 08:00:16'),
(3, 'no-degree', 'march', '4 years', 1, '2018-11-28 14:37:01', '0000-00-00 00:00:00'),
(4, 'PHD physiology', 'march', '4 years', 1, '2018-11-29 06:05:32', '0000-00-00 00:00:00'),
(5, 'masters ', 'march', '2 years', 1, '2018-11-30 10:08:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` varchar(20) NOT NULL,
  `passPort` varchar(20) NOT NULL,
  `university` int(11) NOT NULL,
  `program` int(11) NOT NULL,
  `faculity` varchar(100) NOT NULL,
  `tlanguage` varchar(30) NOT NULL,
  `studentPlan` text NOT NULL,
  `studentsFiles` varchar(100) NOT NULL,
  `payment` varchar(20) NOT NULL DEFAULT 'not yet',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `passPort` (`passPort`),
  KEY `program` (`program`),
  KEY `university` (`university`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `passPort`, `university`, `program`, `faculity`, `tlanguage`, `studentPlan`, `studentsFiles`, `payment`, `createdDate`, `updatedDate`) VALUES
('pc1243451247', 'pc124345', 2, 1, '1', 'english', 'till masters', 'documents/dd.zip', 'yes', '2018-12-07 12:19:47', '0000-00-00 00:00:00'),
('pc1243551221', 'pc124355', 2, 1, '1', 'english', 'till masters', 'documents/dd.zip', 'yes', '2018-12-07 12:23:21', '0000-00-00 00:00:00'),
('pc1243571230', 'pc124357', 2, 1, '1', 'english', 'till masters', 'documents/moise.zip', 'not yet', '2018-12-10 08:50:30', '0000-00-00 00:00:00'),
('pc1243581204', 'pc124358', 2, 1, '1', 'english', 'till masters', 'documents/moise.zip', 'not yet', '2018-12-10 08:57:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `relationships`
--

CREATE TABLE IF NOT EXISTS `relationships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `relation` varchar(50) NOT NULL,
  `studentsPC` varchar(20) NOT NULL,
  `names` varchar(40) NOT NULL,
  `ages` int(11) NOT NULL,
  `emails` varchar(20) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `company` varchar(50) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `studentsPC` (`studentsPC`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `relationships`
--

INSERT INTO `relationships` (`id`, `relation`, `studentsPC`, `names`, `ages`, `emails`, `phoneNumber`, `company`, `occupation`, `createdDate`, `updatedDate`) VALUES
(1, 'uncle', 'pc124345', 'kankunda', 52, 'health@gmail.com', '02154568787', 'health center', 'nurse', '2018-12-07 12:19:47', '0000-00-00 00:00:00'),
(2, 'uncle', 'pc124355', 'kankunda', 52, 'health@gmail.com', '02154568787', 'health center', 'nurse', '2018-12-07 12:23:21', '0000-00-00 00:00:00'),
(3, 'uncle', 'pc124357', 'kankunda', 52, 'health@gmail.com', '02154568787', 'health center', 'nurse', '2018-12-10 08:50:30', '0000-00-00 00:00:00'),
(4, 'uncle', 'pc124358', 'kankunda', 52, 'health@gmail.com', '02154568787', 'health center', 'nurse', '2018-12-10 08:57:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `relationships2`
--

CREATE TABLE IF NOT EXISTS `relationships2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `relation2` varchar(50) NOT NULL,
  `studentsPC` varchar(20) NOT NULL,
  `names2` varchar(40) NOT NULL,
  `ages2` int(11) NOT NULL,
  `emails2` varchar(20) NOT NULL,
  `phoneNumber2` varchar(20) NOT NULL,
  `company2` varchar(50) NOT NULL,
  `occupation2` varchar(100) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `relationships2`
--

INSERT INTO `relationships2` (`id`, `relation2`, `studentsPC`, `names2`, `ages2`, `emails2`, `phoneNumber2`, `company2`, `occupation2`, `createdDate`, `updatedDate`) VALUES
(1, 'guardian', 'pc124345', 'masumbuko agnes', 54, 'masumbuko@gmail.com', '0784562912', 'bank worker', 'headquarter manager', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'guardian', 'pc124355', 'masumbuko agnes', 54, 'masumbuko@gmail.com', '0784562912', 'bank worker', 'headquarter manager', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'guardian', 'pc124357', 'masumbuko agnes', 54, 'masumbuko@gmail.com', '0784562912', 'bank worker', 'headquarter manager', '2018-12-10 08:50:30', '0000-00-00 00:00:00'),
(4, 'guardian', 'pc124358', 'masumbuko agnes', 54, 'masumbuko@gmail.com', '0784562912', 'bank worker', 'headquarter manager', '2018-12-10 08:57:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `passPort` varchar(20) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `placeOfBirth` varchar(30) NOT NULL,
  `locationOfBirth` varchar(30) NOT NULL,
  `validUntil` varchar(20) NOT NULL,
  `nativeLanguage` varchar(20) NOT NULL,
  `emailAddress` varchar(20) NOT NULL,
  `weChatNumber` varchar(20) NOT NULL,
  `chineseLevel` varchar(20) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `hobby` varchar(20) NOT NULL,
  `profileImage` varchar(50) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`passPort`),
  UNIQUE KEY `passPort` (`passPort`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`passPort`, `firstName`, `lastName`, `nationality`, `dateOfBirth`, `placeOfBirth`, `locationOfBirth`, `validUntil`, `nativeLanguage`, `emailAddress`, `weChatNumber`, `chineseLevel`, `Religion`, `hobby`, `profileImage`, `createdDate`, `updateDate`) VALUES
('pc124345', 'kayihura', 'Robert', 'rwandese', '0000-00-00', 'rwanda', 'kigali', 'june 2020', 'english', 'kayihura@gmail.com', '+250789456512', '4.4', 'christian', 'movies', 'Capture.PNG', '2018-12-07 12:19:47', '0000-00-00 00:00:00'),
('pc124355', 'kayihura', 'Robert', 'rwandese', '0000-00-00', 'rwanda', 'kigali', 'june 2020', 'english', 'kayihura@gmail.com', '+250789456512', '4.4', 'christian', 'movies', 'Capture.PNG', '2018-12-07 12:23:21', '0000-00-00 00:00:00'),
('pc124357', 'kanyankore', 'thiery', 'rwandese', '0000-00-00', 'rwanda', 'kigali', 'june 2020', 'english', 'kanyankore@gmail.com', '+250789456512', '4.4', 'christian', 'movies', 'gacinya.PNG', '2018-12-10 08:50:30', '0000-00-00 00:00:00'),
('pc124358', 'ligobert', 'thiery', 'rwandese', '0000-00-00', 'rwanda', 'kigali', 'june 2020', 'english', 'kanyankore@gmail.com', '+250789456512', '4.4', 'christian', 'movies', 'gacinya.PNG', '2018-12-10 08:57:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1 for available and 99 for deleted',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name`, `country`, `province`, `city`, `logo`, `description`, `status`, `createdDate`, `updatedDate`) VALUES
(1, 'chinese scientific university', 'china', 'chengdu', 'sichuan', 'gacinya.PNG', 'Imirwano no gushyamirana hagati yâ€™abafana ba Boca Juniors na River Plate zo muri Argentina bari bahanganiye igikombe cya Champions League yo muri Amerika .', 99, '2018-11-28 12:55:25', '2018-12-10 11:46:46'),
(2, 'chinese electronic university', 'china', 'chengdu', 'sichuan', 'gacinya.PNG', 'The educational aim of Petroleum Engineering is to cultivate qualified practical elite who will\r\nobtain solid mathematical foundation and systematic petroleum engineering specialty knowledge;\r\nwho will has the higher computer applied and engineering practice abilities; who will be engaged\r\nin engineering design, engineering construction and management, applied research and science\r\nand technology development of the following aspects: oil and gas drilling, well completing engineering,\r\noil extrac', 1, '2018-11-28 12:56:41', '0000-00-00 00:00:00'),
(3, 'chinese electronic university', 'china', 'chengdu', 'sichuan', 'gacinya.PNG', 'The educational aim of Petroleum Engineering is to cultivate qualified practical elite who will\r\nobtain solid mathematical foundation and systematic petroleum engineering specialty knowledge;\r\nwho will has the higher computer applied and engineering practice abilities; who will be engaged\r\nin engineering design, engineering construction and management, applied research and science\r\nand technology development of the following aspects: oil and gas drilling, well completing engineering,\r\noil extrac', 1, '2018-11-28 13:03:16', '0000-00-00 00:00:00'),
(4, 'chinese electronic university', 'china', 'chengdu', 'sichuan', 'gacinya.PNG', 'The educational aim of Petroleum Engineering is to cultivate qualified practical elite who will\r\nobtain solid mathematical foundation and systematic petroleum engineering specialty knowledge;\r\nwho will has the higher computer applied and engineering practice abilities; who will be engaged\r\nin engineering design, engineering construction and management, applied research and science\r\nand technology development of the following aspects: oil and gas drilling, well completing engineering,\r\noil extrac', 1, '2018-11-28 13:23:21', '0000-00-00 00:00:00'),
(5, 'chinese scientific university', 'china', 'chengdu', 'sichuan', 'employees_service.PNG', 'The educational aim of Petroleum Engineering is to cultivate qualified practical elite who will\r\nobtain solid mathematical foundation and systematic petroleum engineering specialty knowledge;\r\nwho will has the higher computer applied and engineering practice abilities; who will be engaged\r\nin engineering design, engineering construction and management, applied research and science\r\nand technology development of the following aspects: oil and gas drilling, well completing engineering,\r\noil extrac', 1, '2018-11-28 13:39:34', '0000-00-00 00:00:00'),
(6, 'Russian scientific university', 'russia', 'moscow', 'ruziniski', 'gacinya.PNG', 'usogafuysdgfuasjkbdfvouysgjvyusgobchgsygc u8w uygyubye gw gywjhbefy bwgy uhwgyugdf uihi afjiuv  uhnvj uhjnva nbu', 1, '2018-11-29 10:10:39', '0000-00-00 00:00:00'),
(12, 'havard', 'usa', 'texas', 'miamy', 'employees_service.PNG', 'fine and kul', 1, '2018-11-30 09:50:44', '0000-00-00 00:00:00'),
(13, 'havard unini', 'usa', 'texas', 'miamy', 'employees_service.PNG', 'fine and kul', 1, '2018-11-30 09:54:44', '0000-00-00 00:00:00'),
(14, 'havard unininin', 'usa', 'texas', 'miamy', 'employees_service.PNG', 'fine and kul', 1, '2018-11-30 09:58:38', '0000-00-00 00:00:00'),
(15, 'havard hvder', 'usa', 'texas', 'miamy', 'employees_service.PNG', 'fine and kul', 1, '2018-11-30 09:59:45', '0000-00-00 00:00:00'),
(16, 'havard hvderer', 'usa', 'texas', 'miamy', 'employees_service.PNG', 'fine and kul', 1, '2018-11-30 10:01:05', '0000-00-00 00:00:00'),
(17, 'havard hv', 'usa', 'texas', 'miamy', 'employees_service.PNG', 'fine and kul', 1, '2018-11-30 10:02:09', '0000-00-00 00:00:00'),
(18, 'ur', 'rwanda', 'kigali', 'kigali', 'gacinya.PNG', 'fine', 1, '2018-11-30 14:56:42', '0000-00-00 00:00:00'),
(19, 'Russian military university', 'russia', 'moscow', 'ruziniski', 'Capture.PNG', 'usogafuysdgfuasjkbdfvouysgjvyusgobchgsygc u8w uygyubye gw gywjhbefy bwgy uhwgyugdf uihi afjiuv  uhnvj uhjnva nbu', 1, '2018-12-10 13:31:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `universityfaculity`
--

CREATE TABLE IF NOT EXISTS `universityfaculity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `university` int(11) NOT NULL,
  `program` int(11) NOT NULL,
  `faculity` int(11) NOT NULL,
  `language` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `university` (`university`),
  KEY `faculity` (`faculity`),
  KEY `program` (`program`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `universityfaculity`
--

INSERT INTO `universityfaculity` (`id`, `university`, `program`, `faculity`, `language`, `price`, `status`, `createdDate`, `updateDate`) VALUES
(1, 1, 3, 2, 'english', 5000, 1, '2018-12-03 07:00:05', '0000-00-00 00:00:00'),
(3, 1, 3, 6, 'english', 6000, 1, '2018-12-03 15:28:16', '0000-00-00 00:00:00'),
(5, 18, 3, 14, 'english', 8000, 1, '2018-12-10 14:00:34', '0000-00-00 00:00:00'),
(6, 18, 3, 15, 'english', 8000, 1, '2018-12-10 14:00:43', '0000-00-00 00:00:00'),
(7, 18, 4, 11, 'english', 4000, 1, '2018-12-10 14:01:01', '0000-00-00 00:00:00'),
(8, 18, 4, 12, 'english', 5000, 1, '2018-12-10 14:01:08', '0000-00-00 00:00:00'),
(9, 18, 4, 13, 'english', 4000, 1, '2018-12-10 14:01:17', '0000-00-00 00:00:00'),
(10, 18, 5, 14, 'english', 7000, 1, '2018-12-10 14:01:43', '0000-00-00 00:00:00'),
(11, 17, 1, 1, 'english', 3000, 1, '2018-12-10 14:02:59', '0000-00-00 00:00:00'),
(12, 17, 1, 4, 'chinese', 3000, 1, '2018-12-10 14:03:14', '0000-00-00 00:00:00'),
(13, 17, 1, 5, 'chinese', 3000, 1, '2018-12-10 14:03:23', '0000-00-00 00:00:00'),
(14, 17, 3, 2, 'chinese', 3000, 1, '2018-12-10 14:04:01', '0000-00-00 00:00:00'),
(15, 17, 3, 6, 'chinese', 3000, 1, '2018-12-10 14:04:11', '0000-00-00 00:00:00'),
(16, 17, 3, 14, 'chinese', 3000, 1, '2018-12-10 14:04:16', '0000-00-00 00:00:00'),
(17, 17, 3, 15, 'chinese', 3000, 1, '2018-12-10 14:04:22', '0000-00-00 00:00:00'),
(18, 17, 3, 16, 'chinese', 3000, 1, '2018-12-10 14:04:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `universityprogram`
--

CREATE TABLE IF NOT EXISTS `universityprogram` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `university` int(11) NOT NULL,
  `program` int(11) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `university` (`university`),
  KEY `program` (`program`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `universityprogram`
--

INSERT INTO `universityprogram` (`id`, `university`, `program`, `createDate`, `updateDate`) VALUES
(1, 16, 1, '2018-11-30 10:01:05', '0000-00-00 00:00:00'),
(3, 17, 1, '2018-11-30 10:02:09', '0000-00-00 00:00:00'),
(5, 17, 3, '2018-11-30 10:02:09', '0000-00-00 00:00:00'),
(6, 18, 1, '2018-11-30 14:56:42', '0000-00-00 00:00:00'),
(7, 18, 3, '2018-11-30 14:56:42', '0000-00-00 00:00:00'),
(8, 18, 4, '2018-11-30 14:56:42', '0000-00-00 00:00:00'),
(9, 18, 5, '2018-11-30 14:56:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`, `phoneNumber`, `createdDate`) VALUES
(1, 'kayihura emmile', 'kayihura@gmail.com', 'kayihura123', '0789124565', '2018-12-10 11:54:44');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academichistory`
--
ALTER TABLE `academichistory`
  ADD CONSTRAINT `academichistory_ibfk_1` FOREIGN KEY (`studentsPC`) REFERENCES `student` (`passPort`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `faculity`
--
ALTER TABLE `faculity`
  ADD CONSTRAINT `faculity_ibfk_1` FOREIGN KEY (`program`) REFERENCES `programs` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`passPort`) REFERENCES `student` (`passPort`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`program`) REFERENCES `programs` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_3` FOREIGN KEY (`university`) REFERENCES `university` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `relationships`
--
ALTER TABLE `relationships`
  ADD CONSTRAINT `relationships_ibfk_1` FOREIGN KEY (`studentsPC`) REFERENCES `student` (`passPort`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `universityfaculity`
--
ALTER TABLE `universityfaculity`
  ADD CONSTRAINT `universityfaculity_ibfk_1` FOREIGN KEY (`university`) REFERENCES `university` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `universityfaculity_ibfk_2` FOREIGN KEY (`faculity`) REFERENCES `faculity` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `universityfaculity_ibfk_3` FOREIGN KEY (`program`) REFERENCES `programs` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `universityprogram`
--
ALTER TABLE `universityprogram`
  ADD CONSTRAINT `universityprogram_ibfk_1` FOREIGN KEY (`university`) REFERENCES `university` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `universityprogram_ibfk_2` FOREIGN KEY (`program`) REFERENCES `programs` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
