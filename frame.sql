-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 08 月 28 日 10:04
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `frame`
--

-- --------------------------------------------------------

--
-- 表的结构 `cms_category`
--

CREATE TABLE IF NOT EXISTS `cms_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `intro` varchar(100) NOT NULL,
  PRIMARY KEY (`category_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `cms_category`
--

INSERT INTO `cms_category` (`category_id`, `category_name`, `parent_id`, `intro`) VALUES
(1, '手机', 0, ''),
(2, '电脑', 0, ''),
(3, '小米', 1, ''),
(5, '小米4', 3, '44445555磊顶戴 11111'),
(7, '4C', 5, ''),
(8, '红米', 3, '');

-- --------------------------------------------------------

--
-- 表的结构 `cms_user`
--

CREATE TABLE IF NOT EXISTS `cms_user` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `pass` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cms_user`
--

INSERT INTO `cms_user` (`id`, `name`, `pass`) VALUES
(1, 'admin', '4a7d1ed414474e4033ac29ccb8653d9b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
