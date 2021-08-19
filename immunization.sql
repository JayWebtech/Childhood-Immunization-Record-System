-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2021 at 12:07 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `immunization`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `ID` int(11) NOT NULL auto_increment,
  `FirstName` varchar(20) NOT NULL,
  `MiddleName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `LGA` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `vaccine` varchar(100) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`ID`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `Age`, `Address`, `LGA`, `State`, `vaccine`) VALUES
(1, 'Sanusi', 'Hamman ', 'Seyo', 'Male', 25, 'TSU', 'Jalingo', 'Taraba', 'Business '),
(2, 'Abdulrauf', 'Ibrahim', 'Dantsoho', 'Male', 25, 'Baraya', 'Jalingo', 'Taraba', 'Student'),
(3, 'Babayo', 'Lawan', 'Abdullahi', 'Male', 23, 'Wuse 2', 'ABJ', 'FCT', 'Engineer'),
(4, 'Umar ', 'Ahmed', 'Accama', 'Male', 35, 'UnionBay', 'Potiskum', 'Yobe', 'Civil Servant'),
(5, 'Usman', 'Bappa', 'Bayero', 'Male', 26, 'Sabo-layi', 'Nafada', 'Gombe', 'Student'),
(6, 'Ibrahim', 'Tukur', 'Muhammad', 'Male', 38, 'Yedang', 'Jalingo', 'Taraba', 'Student'),
(7, 'Mubarak', 'Muhammad', 'Albarka', 'Male', 23, 'Magatakarda Valley', 'Sokoto', 'Sokoto', 'Engineer'),
(8, 'Maria', 'Wane', 'Volli', 'Female', 5, 'Wuro Sembe', 'Jalingo', 'Taraba', 'Student'),
(9, 'Mardi', 'Umbo', 'bose', 'Female', 4, 'GRA', 'Kano', 'Kano', 'Student'),
(10, 'Mutari', 'D', 'Mallum', 'Male', 23, 'Mallum', 'Kano', 'Kano', 'Student'),
(11, 'ADAMU', 'JETHRO', 'SAMSON', 'MALE', 39, 'NO 234, U/ZAWU GONIN', 'CHIKUN', 'Kaduna', 'STUDENT'),
(12, 'Adamu', 'Japheth', 'Daniel', 'MALE', 3, 'No. 244 U/Zawu Gonin', 'Chikun', 'Cross River', 'Mastra 234');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Abubakar Ma''azu ', 'Chezer', 'Chezer'),
(5, 'Adamu Jethro', 'adamujay', '989810');
