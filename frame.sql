-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 05 日 16:21
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `cms_album`
--

INSERT INTO `cms_album` (`albumId`, `albumName`, `parentId`, `intro`) VALUES
(1, '相册1', 0, '这是相册1的简介'),
(2, '相册2', 0, ''),
(3, '相册1-1', 1, '这是相册1-1'),
(4, '相册1-1-1', 3, '1-1-10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `cms_article`
--

INSERT INTO `cms_article` (`id`, `title`, `categoryId`, `postTime`, `summary`, `author`, `source`, `keyword`, `isRecommend`, `content`, `audit`) VALUES
(5, 'sdff', 5, '2015-08-04', 'dfsfds', 'sfsfdsfs', 'dsf', 'dfdsfsff', 1, '<p>sdfsfsfsfsf</p>', 0),
(8, 'sd', 2, '2015-08-30', '', '', '', '', 1, '<p>dd</p>', 0),
(22, 'sfsfa', 1, '2015-09-06', 'df', 'dfdfdf', 'dfd', 'dffdfd', 1, '<p>sadsafadfdf</p>', 0),
(23, 'df', 1, '2015-09-16', '', '', '', '', 1, '<p>dffdfd</p>', 0),
(24, 'pic', 1, '2015-09-05', '', '', '', '', 1, '<p><img src="/ueditor/php/upload/image/20150905/1441382839259696.jpg" title="1441382839259696.jpg" alt="p3.jpg"/></p>', 0),
(25, 'a', 1, '2015-09-09', '', '', '', '', 1, '<p>dd</p>', 0),
(26, 'ad', 1, '2015-09-09', '', '', '', '', 1, '<p>ddd</p>', 0),
(27, 'addf', 1, '2015-09-09', '', '', '', '', 1, '<p>dddd</p>', 0),
(28, 'addfaa', 1, '2015-09-09', '', '', '', '', 1, '<p>dfd</p>', 1),
(29, 'addfaaa', 1, '2015-09-09', '', '', '', '', 1, '<p>dfd</p>', 0),
(30, 'd', 1, '2015-08-31', '', '', '', '', 1, '<p>d</p>', 1),
(31, 'q', 1, '2015-08-31', '', '', '', '', 1, '<p>d</p>', 0),
(32, 'w', 1, '2015-08-31', '', '', '', '', 1, '<p>w</p>', 0),
(33, 'e', 1, '2015-08-31', '', '', '', '', 1, '<p>e</p>', 0),
(34, 'r', 1, '2015-08-31', '', '', '', '', 1, '<p>r</p>', 0),
(35, 't', 1, '2015-08-31', '', '', '', '', 1, '<p>t</p>', 0),
(36, 'dd', 1, '2015-09-16', '', '', '', '', 1, '<p><img src="/mvc/ueditor/php/upload/image/20150905/1441384750124921.jpg" title="1441384750124921.jpg" alt="blg2.jpg"/></p>', 0),
(37, 'dfsfd', 1, '2015-09-19', 'd', '', '', '', 1, '<p><img src="/mvc/data/ueditor/php/upload/image/20150905/1441384828860377.jpg" title="1441384828860377.jpg" alt="w3.jpg"/></p>', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `cms_category`
--

INSERT INTO `cms_category` (`categoryId`, `categoryName`, `parentId`, `intro`) VALUES
(1, '手机', 0, ''),
(2, '电脑', 0, ''),
(3, '小米', 1, '小米手机'),
(5, '小米4dd', 3, '这是小米4的手机ddd分类'),
(8, '红米', 3, ''),
(10, '压力', 2, ''),
(12, '大压力', 10, ''),
(13, 'dfdf', 0, ''),
(15, 'ddff', 0, 'dfdf'),
(16, 'dfdfd', 0, 'dfdf'),
(17, 'dfdf', 12, ''),
(18, '上下量', 12, '');

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
  `thumbPath` varchar(100) NOT NULL,
  `hasThumb` int(1) NOT NULL,
  `hasMark` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `albumId` (`albumId`),
  KEY `hasThumb` (`hasThumb`),
  KEY `hasMark` (`hasMark`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `cms_picture`
--

INSERT INTO `cms_picture` (`id`, `title`, `albumId`, `intro`, `path`, `thumbPath`, `hasThumb`, `hasMark`) VALUES
(35, 'a', 1, '', 'data/picture/201509/04/38519b1275a67464162acd97fe1a3c3b.jpg', 'data/picture/201509/04/thumb_38519b1275a67464162acd97fe1a3c3b.jpg', 1, 1),
(36, 'b', 1, '', 'data/picture/201509/04/84a8202722c78f7ad9334f0060876fee.jpg', 'data/picture/201509/04/thumb_84a8202722c78f7ad9334f0060876fee.jpg', 1, 1),
(37, 'c', 1, '', 'data/picture/201509/04/984ded5ba32897ac6c05e7051ae2c161.jpg', 'data/picture/201509/04/thumb_984ded5ba32897ac6c05e7051ae2c161.jpg', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `cms_user`
--

CREATE TABLE IF NOT EXISTS `cms_user` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `pass` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `cms_user`
--

INSERT INTO `cms_user` (`id`, `name`, `pass`) VALUES
(1, 'admin', '4a7d1ed414474e4033ac29ccb8653d9b');

-- --------------------------------------------------------

--
-- 表的结构 `tb_contact`
--

CREATE TABLE IF NOT EXISTS `tb_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `webSite` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
