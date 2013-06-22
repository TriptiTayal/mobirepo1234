-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2013 at 12:11 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upload_download`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `temp` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `temp`, `name`, `email`, `password`, `contact`) VALUES
(1, 201305, 'Tripti Tayal', 'tripti.tayal4@gmail.com', 'tripti', '9711947491'),
(2, 201306, 'yati', 'yati.sharma07@gmail.com', 'yati', '9910760701');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `temp` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `filename` varchar(30) NOT NULL,
  `size` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `temp`, `name`, `filename`, `size`) VALUES
(1, 201305, 'Tripti Tayal', 'i-706865836.png', 5518);
