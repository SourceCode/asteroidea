-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2014 at 04:49 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asteroidea`
--

-- --------------------------------------------------------

--
-- Table structure for table `as_log`
--

CREATE TABLE IF NOT EXISTS `as_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` tinyint(1) NOT NULL,
  `note` varchar(255) NOT NULL,
  `c_date` datetime NOT NULL,
  `c_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `as_loggrouplog`
--

CREATE TABLE IF NOT EXISTS `as_loggrouplog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log_id` int(11) NOT NULL,
  `log_group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `as_log_group`
--

CREATE TABLE IF NOT EXISTS `as_log_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(64) NOT NULL,
  `type` varchar(32) NOT NULL,
  `c_date` datetime NOT NULL,
  `c_user` int(11) NOT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `as_setting`
--

CREATE TABLE IF NOT EXISTS `as_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(16) NOT NULL,
  `value` varchar(255) NOT NULL,
  `s_group` tinyint(4) NOT NULL,
  `c_date` datetime NOT NULL,
  `c_user` int(11) NOT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `as_user`
--

CREATE TABLE IF NOT EXISTS `as_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `mobile` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `c_date` datetime NOT NULL,
  `c_user` int(11) NOT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `as_usergroupuser`
--

CREATE TABLE IF NOT EXISTS `as_usergroupuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `as_user_group`
--

CREATE TABLE IF NOT EXISTS `as_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `c_date` datetime NOT NULL,
  `c_user` int(11) NOT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
