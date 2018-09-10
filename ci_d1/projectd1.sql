-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `projectd1`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `user`
-- 

CREATE TABLE `user` (
  `id` varchar(10) collate utf8_unicode_ci NOT NULL,
  `name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `passwd` varchar(10) collate utf8_unicode_ci NOT NULL,
  `status` varchar(1) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `user`
-- 

INSERT INTO `user` VALUES ('1975556639', 'Thanakorn', '4', '5');
INSERT INTO `user` VALUES ('4', '66', '5', '6');
INSERT INTO `user` VALUES ('44', '5', '6', '4');
INSERT INTO `user` VALUES ('111111', '323', '5', '1');
INSERT INTO `user` VALUES ('22', '3', '44', '5');
INSERT INTO `user` VALUES ('454', 'fgf', '4', '4');
