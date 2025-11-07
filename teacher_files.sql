/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.5.5-10.1.25-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `teacher_files` (
	`id` double ,
	`teacher_name` varchar (765),
	`subject` varchar (765),
	`grade_section` varchar (150),
	`file_name` varchar (765),
	`file_path` varchar (765),
	`status` varchar (24),
	`submitted_date` datetime ,
	`approve_date` datetime ,
	`created_at` timestamp 
); 
