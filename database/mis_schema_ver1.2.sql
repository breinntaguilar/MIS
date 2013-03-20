-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2013 at 06:54 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mis`
--
CREATE DATABASE `mis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mis`;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_num` int(11) NOT NULL,
  `total_water_bill` float NOT NULL DEFAULT '0',
  `total_electric_bill` float NOT NULL DEFAULT '0',
  `total_misc_bill` float unsigned NOT NULL DEFAULT '0',
  `billing_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `occupant`
--

CREATE TABLE IF NOT EXISTS `occupant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(50) NOT NULL COMMENT 'Profile Picture URL',
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `alias` varchar(20) NOT NULL,
  `bdate` date NOT NULL,
  `bplace` varchar(100) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `civil_status` tinyint(4) NOT NULL,
  `cell_num` varchar(50) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `home_add` text NOT NULL,
  `siblings` tinyint(4) NOT NULL,
  `birth_order` varchar(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `sch_name` varchar(100) DEFAULT NULL,
  `sch_add` text,
  `course` varchar(50) DEFAULT NULL,
  `year_level` varchar(10) DEFAULT NULL,
  `comp_name` int(11) DEFAULT NULL,
  `comp_add` int(11) DEFAULT NULL,
  `comp_tel` int(11) DEFAULT NULL,
  `occupation` int(11) DEFAULT NULL,
  `contact_name1` varchar(50) DEFAULT NULL,
  `contact_add1` varchar(100) DEFAULT NULL,
  `contact_num1` varchar(50) DEFAULT NULL,
  `contact_rel1` varchar(10) DEFAULT NULL COMMENT 'Relationship to the Occupant',
  `contact_email1` varchar(50) DEFAULT NULL,
  `contact_name2` varchar(50) DEFAULT NULL,
  `contact_add2` varchar(100) DEFAULT NULL,
  `contact_num2` varchar(50) DEFAULT NULL,
  `contact_rel2` varchar(10) DEFAULT NULL COMMENT 'Relationship to the Occupant',
  `contact_email2` varchar(50) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `room_num` tinyint(4) NOT NULL,
  `date_occupancy` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details` text NOT NULL,
  `amount` float NOT NULL,
  `status` int(11) NOT NULL,
  `payment_date` datetime NOT NULL,
  `occupant_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL,
  `label` varchar(20) NOT NULL,
  `water_usage` int(11) NOT NULL,
  `electric_usage` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
