-- -----------------------------------------
-- Designed by Generate Script Tool
-- Copyright (c) 2014 by Admin
-- -----------------------------------------
CREATE TABLE IF NOT EXISTS `#__bancc` (
    `id` int(11) NOT NULL auto_increment,
    `nam` int(11) NOT NULL DEFAULT '0',
    `thang` int(11) NOT NULL DEFAULT '0',
    `ngaycong` text NOT NULL,
    `note` text NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__chucvu` (
    `id` int(11) NOT NULL auto_increment,
    `tenchucvu` varchar(100) NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__chuyenmon` (
    `id` int(11) NOT NULL auto_increment,
    `tenchuyenmon` varchar(100) NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__config` (
    `id` int(11) NOT NULL auto_increment,
    `key` varchar(100) NOT NULL,
    `value` text NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__dantoc` (
    `id` int(11) NOT NULL auto_increment,
    `dantoc` varchar(100) NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__giadinh` (
    `id` int(11) NOT NULL auto_increment,
    `idnhanvien` int(11) NOT NULL DEFAULT '0',
    `hotenbo` varchar(100) NOT NULL,
    `nghenghiepbo` varchar(100) NOT NULL,
    `hotenme` varchar(100) NOT NULL,
    `nghenghiepme` varchar(100) NOT NULL,
    `truquan` varchar(100) NOT NULL,
    `vochong` varchar(100) NOT NULL,
    `socon` int(11) NOT NULL DEFAULT '0',
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__hedaotao` (
    `id` int(11) NOT NULL auto_increment,
    `tenhedaotao` varchar(100) NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__hosnv` (
    `id` int(11) NOT NULL auto_increment,
    `hoten` int(11) NOT NULL DEFAULT '0',
    `gioitinh` int(11) NOT NULL DEFAULT '0',
    `ngaysinh` date NOT NULL,
    `noisinh` varchar(100) NOT NULL,
    `nguyenquan` varchar(100) NOT NULL,
    `truquan` varchar(100) NOT NULL,
    `tongiao` varchar(100) NOT NULL,
    `iddantoc` int(11) NOT NULL DEFAULT '0',
    `socmnd` tinyint(4) NOT NULL DEFAULT '0',
    `ngaycap` date NOT NULL,
    `idtinhthanh` int(11) NOT NULL DEFAULT '0',
    `dangvien` int(11) NOT NULL DEFAULT '0',
    `ngayvao` date NOT NULL,
    `idchucvu` int(11) NOT NULL DEFAULT '0',
    `idphongban` int(11) NOT NULL DEFAULT '0',
    `phanxuong` varchar(100) NOT NULL,
    `hesl` float NOT NULL DEFAULT '0',
    `mucluong` double NOT NULL DEFAULT '0',
    `phucap` double NOT NULL DEFAULT '0',
    `thuclinh` double NOT NULL DEFAULT '0',
    `ngayhuongluong` date NOT NULL,
    `idhocvan` int(11) NOT NULL DEFAULT '0',
    `idchuyenmon` int(11) NOT NULL DEFAULT '0',
    `idngoaingu` int(11) NOT NULL DEFAULT '0',
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__ktkl` (
    `id` int(11) NOT NULL auto_increment,
    `idnhanvien` varchar(100) NOT NULL,
    `hinhthuc` varchar(100) NOT NULL,
    `lydo` varchar(100) NOT NULL,
    `caccap` varchar(100) NOT NULL,
    `ngay` date NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__mucluong` (
    `id` int(11) NOT NULL auto_increment,
    `hesl` float NOT NULL DEFAULT '0',
    `mucluong` double NOT NULL DEFAULT '0',
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__ngoaingu` (
    `id` int(11) NOT NULL auto_increment,
    `tenngoaingu` varchar(100) NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__phongban` (
    `id` int(11) NOT NULL auto_increment,
    `tenphongban` varchar(100) NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__quatrinhct` (
    `id` int(11) NOT NULL auto_increment,
    `idnhanvien` int(11) NOT NULL DEFAULT '0',
    `idphongvan` int(11) NOT NULL DEFAULT '0',
    `phanxuong` varchar(100) NOT NULL,
    `idchucvu` int(11) NOT NULL DEFAULT '0',
    `ngaychuyenct` date NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__quatrinhdt` (
    `id` int(11) NOT NULL auto_increment,
    `idnhanvien` int(11) NOT NULL DEFAULT '0',
    `idhedaotao` int(11) NOT NULL DEFAULT '0',
    `idchuyenmon` int(11) NOT NULL DEFAULT '0',
    `tungay` date NOT NULL,
    `denngay` date NOT NULL,
    `ghichu` text NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__tinhthanh` (
    `id` int(11) NOT NULL auto_increment,
    `tinhthanh` varchar(100) NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__tongiao` (
    `id` int(11) NOT NULL auto_increment,
    `tongiao` varchar(100) NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__trinhdo` (
    `id` int(11) NOT NULL auto_increment,
    `trinhdo` varchar(100) NOT NULL,
    PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

