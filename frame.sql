-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 01 日 10:09
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
-- 表的结构 `cms_album`
--

CREATE TABLE IF NOT EXISTS `cms_album` (
  `albumId` int(11) NOT NULL AUTO_INCREMENT,
  `albumName` varchar(20) NOT NULL,
  `parentId` int(11) NOT NULL,
  `intro` varchar(100) NOT NULL,
  PRIMARY KEY (`albumId`),
  KEY `parentId` (`parentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `cms_album`
--

INSERT INTO `cms_album` (`albumId`, `albumName`, `parentId`, `intro`) VALUES
(1, '相册1', 0, '这是相册1的简介'),
(2, '相册2', 0, ''),
(3, '相册1-1', 1, '这是相册1-1'),
(4, '相册1-1-1', 3, '1-1-1');

-- --------------------------------------------------------

--
-- 表的结构 `cms_article`
--

CREATE TABLE IF NOT EXISTS `cms_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `postTime` date NOT NULL,
  `summary` varchar(200) NOT NULL,
  `author` varchar(30) NOT NULL,
  `source` varchar(50) NOT NULL,
  `keyword` varchar(20) NOT NULL,
  `isRecommend` tinyint(1) NOT NULL,
  `content` text NOT NULL,
  `audit` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`categoryId`),
  KEY `keyword` (`keyword`),
  KEY `is_recommend` (`isRecommend`),
  KEY `audit` (`audit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `cms_article`
--

INSERT INTO `cms_article` (`id`, `title`, `categoryId`, `postTime`, `summary`, `author`, `source`, `keyword`, `isRecommend`, `content`, `audit`) VALUES
(3, '文章标题111', 1, '2015-08-28', '摘要', '作者', '来源', '关键字', 1, '<p>文章内容</p>', 0),
(4, '顶替顶戴', 8, '2015-07-28', 'dfd', 'fdfd', 'fda', 'dfsf', 1, '<p>fddfdfdfdf</p>', 1),
(5, 'sdff', 5, '2015-08-04', 'dfsfds', 'sfsfdsfs', 'dsf', 'dfdsfsff', 1, '<p>sdfsfsfsfsf</p>', 1),
(7, 'dfdfdf', 7, '2015-08-05', '', '', '', '', 1, '<p>dd</p>', 0),
(8, 'sd', 2, '2015-08-30', '', '', '', '', 1, '<p>dd</p>', 0),
(10, 'sfdsf', 3, '2015-08-11', '', '', '', '', 1, '<p>fd</p>', 0),
(14, 'dfdfddf', 10, '2015-08-18', '', '', '', '', 1, '<p>fdfdf</p>', 1),
(21, 'dfdf', 1, '2015-09-09', 'dfdf', '', '', '', 1, '<p><img src="/ueditor/php/upload/image/20150901/1441075330135369.jpg" title="1441075330135369.jpg" alt="001.jpg"/></p>', 0);

-- --------------------------------------------------------

--
-- 表的结构 `cms_category`
--

CREATE TABLE IF NOT EXISTS `cms_category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(20) NOT NULL,
  `parentId` int(11) NOT NULL,
  `intro` varchar(100) NOT NULL,
  PRIMARY KEY (`categoryId`),
  KEY `parent_id` (`parentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `cms_category`
--

INSERT INTO `cms_category` (`categoryId`, `categoryName`, `parentId`, `intro`) VALUES
(1, '手机', 0, ''),
(2, '电脑', 0, ''),
(3, '小米', 1, '小米手机'),
(5, '小米4dd', 3, '这是小米4的手机分类'),
(7, '4C', 5, 'fgf'),
(8, '红米', 3, ''),
(10, '压力', 2, ''),
(12, '大压力', 10, ''),
(13, 'dfdf', 0, ''),
(15, 'ddff', 0, 'dfdf');

-- --------------------------------------------------------

--
-- 表的结构 `cms_picture`
--

CREATE TABLE IF NOT EXISTS `cms_picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `albumId` int(11) NOT NULL,
  `intro` varchar(300) NOT NULL,
  `path` varchar(200) NOT NULL,
  `hasThumb` int(1) NOT NULL,
  `hasMark` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `albumId` (`albumId`),
  KEY `hasThumb` (`hasThumb`),
  KEY `hasMark` (`hasMark`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
