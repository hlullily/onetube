-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 12 月 24 日 15:33
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `onetube`
--
CREATE DATABASE IF NOT EXISTS `onetube` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `onetube`;

-- --------------------------------------------------------

--
-- 表的结构 `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
  `A_ID` int(11) NOT NULL AUTO_INCREMENT,
  `A_UserName` varchar(20) DEFAULT NULL,
  `A_Password` varchar(50) DEFAULT NULL,
  `A_Email` varchar(30) DEFAULT NULL,
  `A_CreateTime` datetime DEFAULT NULL,
  `A_Status` int(11) DEFAULT NULL,
  PRIMARY KEY (`A_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `admin_info`
--

INSERT INTO `admin_info` (`A_ID`, `A_UserName`, `A_Password`, `A_Email`, `A_CreateTime`, `A_Status`) VALUES
(9, 'vincent2', '123456', 'vincent2@hotmail.com', NULL, NULL),
(8, 'vincent', '123456', 'seandimond@hotmail.com', NULL, NULL),
(10, 'vincent3', '123456', 'vincent3@sina.com', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `member_info`
--

CREATE TABLE IF NOT EXISTS `member_info` (
  `M_ID` int(11) NOT NULL AUTO_INCREMENT,
  `M_Name` varchar(20) DEFAULT NULL,
  `M_Password` varchar(50) DEFAULT NULL,
  `M_Question` varchar(50) DEFAULT NULL,
  `M_Answer` varchar(50) DEFAULT NULL,
  `M_Card` varchar(50) DEFAULT NULL,
  `M_Address` varchar(200) DEFAULT NULL,
  `M_Money` float DEFAULT NULL,
  `M_Blance` float DEFAULT NULL,
  `M_CreateTime` datetime DEFAULT NULL,
  `M_Status` int(11) DEFAULT NULL,
  PRIMARY KEY (`M_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `member_info`
--

INSERT INTO `member_info` (`M_ID`, `M_Name`, `M_Password`, `M_Question`, `M_Answer`, `M_Card`, `M_Address`, `M_Money`, `M_Blance`, `M_CreateTime`, `M_Status`) VALUES
(14, 'test', '123456', '我是谁？', 'test', '18881888188', 'seandimond@hotmail.com', 0, 0, '2015-12-24 10:41:17', 2),
(15, 'test2', '123456', '我是？', 'test2', '12312312312', 'vincent@163.com', 0, 0, '2015-12-24 14:16:18', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
