-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2020 at 12:59 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE IF NOT EXISTS `apply` (
  `id2` varchar(10) NOT NULL,
  `name2` varchar(20) NOT NULL,
  `contact2` varchar(20) NOT NULL,
  `gender2` varchar(10) NOT NULL,
  `address2` varchar(40) NOT NULL,
  `qual2` varchar(10) NOT NULL,
  `exp2` varchar(10) NOT NULL,
  `tenth` varchar(10) NOT NULL,
  `twelve` varchar(10) NOT NULL,
  `grad` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id2`, `name2`, `contact2`, `gender2`, `address2`, `qual2`, `exp2`, `tenth`, `twelve`, `grad`) VALUES
('1', 'Rashi', '7081642555', 'Female', 'Ganj Muradabad', 'B.Tech.', '0', '87.3%', '86.6%', '81%'),
('2', 'Rashi', '7081642555', 'Female', 'Ganj Muradabad', 'B.Tech.', '0', '87.3%', '86.6%', '81%');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) NOT NULL,
  `feed` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `feed`) VALUES
('Sakshi', 'Everything is AWESOME'),
('Rashi', 'Apply Section Is Not Made'),
('Angela', 'Profile is not working in properly'),
('Sakshi', 'Everything is Good'),
('Sakshi', 'Everything is AWESOME'),
('Sakshi', 'Everything is AWESOME');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` varchar(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `com_name` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `require` varchar(100) NOT NULL,
  `expe` varchar(20) NOT NULL,
  `idate` varchar(20) NOT NULL,
  `itime` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `com_name`, `location`, `require`, `expe`, `idate`, `itime`) VALUES
('1', 'Web Developer', 'Job Finder', 'Lucknow', '1.Good Communication Skill\r\n2.Good Designing Skill', 'Fresher', '2020-03-09', '9:00-12:00'),
('2', 'Software Developer', 'Job Finder', 'Lucknow', '1.Good Communication Skill\r\n2.Good Designing Skill', 'Fresher', '2020-03-10', '9:00-12:00'),
('3', 'Graphic Designer', 'Job Finder', 'Lucknow', '1.Good Communication Skills\r\n2.Best Graphic Sense', '1 year', '2020-03-09', '9:00-12:00');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `name3` varchar(20) NOT NULL,
  `email3` varchar(20) NOT NULL,
  `contact3` varchar(10) NOT NULL,
  `gender3` varchar(10) NOT NULL,
  `address3` varchar(50) NOT NULL,
  `zip3` varchar(10) NOT NULL,
  `qual3` varchar(20) NOT NULL,
  `exp3` varchar(10) NOT NULL,
  `area3` varchar(20) NOT NULL,
  `key3` varchar(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  PRIMARY KEY (`email3`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`name3`, `email3`, `contact3`, `gender3`, `address3`, `zip3`, `qual3`, `exp3`, `area3`, `key3`, `uname`) VALUES
('Rashi07', 'hit@gmail.com', '7081642555', 'Female', 'Ganj Muradabad', '209869', 'B.Tech.', '0', 'Web Designing', 'PHP', 'Rashi'),
('Rashi07', 'hi@gmail.com', '7081642555', 'Female', 'Ganj Muradabad', '209869', 'B.Tech.', '0', 'Web Designing', 'PHP', 'Rashi');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `zip` varchar(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `contact`, `password`, `gender`, `address`, `zip`) VALUES
('Sakshi', 'sakshi@gmail.cpm', '7081642555', 'S@kshi', 'Female', 'Ganj Muradabad', '209869'),
('Rashi', 'rashi@gmail.com', '7081642555', 'Rashi', 'Female', 'Ganj Muradabad', '209869'),
('Sakshi', 'sakshi@gmail.com', '7081642555', 'Sakshi', 'Female', 'Ganj Muradabad', '209869');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type`) VALUES
('Hope you all are doing well. I have a opening for you all. Contact me-sakshirastogi@gmail.com'),
('Hi Everyone. New Vacancy is waiting for you.'),
('New Vacancy.Apply Now');

-- --------------------------------------------------------

--
-- Table structure for table `uregister`
--

CREATE TABLE IF NOT EXISTS `uregister` (
  `name1` varchar(20) NOT NULL,
  `email1` varchar(20) NOT NULL,
  `contact1` varchar(10) NOT NULL,
  `password1` varchar(10) NOT NULL,
  `gender1` varchar(10) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `zip1` varchar(10) NOT NULL,
  PRIMARY KEY (`email1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uregister`
--

INSERT INTO `uregister` (`name1`, `email1`, `contact1`, `password1`, `gender1`, `address1`, `zip1`) VALUES
('Rashi', 'rashi@gmail.com', '7081642555', 'R@shi', 'Female', 'Ganj Muradabad', '209869'),
('Arushi', 'arushi@gmail.com', '7081642555', 'Arushi', 'Female', 'Ganj Muradabad', '209869');
