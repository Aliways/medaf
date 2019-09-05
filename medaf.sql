-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 11:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyforscholarship`
--

CREATE TABLE `applyforscholarship` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `scholarship_type` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `state_of_origin` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `islamic_organisation` varchar(50) NOT NULL,
  `local_government_area_of_origin` varchar(50) NOT NULL,
  `name_of_institution` varchar(50) NOT NULL,
  `course_of_study` varchar(50) NOT NULL,
  `official_website_of_institute` varchar(50) NOT NULL,
  `certificate_obtained` varchar(50) NOT NULL,
  `expected_year_of_program_completion` varchar(50) NOT NULL,
  `contact_address_of_the_institution` varchar(50) NOT NULL,
  `personal_statement` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applyforscholarship`
--

INSERT INTO `applyforscholarship` (`id`, `user_id`, `scholarship_type`, `full_name`, `gender`, `religion`, `marital_status`, `email`, `date_of_birth`, `state_of_origin`, `phone_number`, `islamic_organisation`, `local_government_area_of_origin`, `name_of_institution`, `course_of_study`, `official_website_of_institute`, `certificate_obtained`, `expected_year_of_program_completion`, `contact_address_of_the_institution`, `personal_statement`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Date_and_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `comment`, `name`, `email`, `Date_and_time`) VALUES
(1, 'aaaa', 'Aliways', 'aliu317@gmail.com', '2019-07-18 11:36:50'),
(2, 'sssss', 'Aliways', 'niyi@gmail.com', '2019-07-18 11:37:14'),
(3, 'sssss', 'Aliways', 'niyi@gmail.com', '2019-07-18 11:38:42'),
(4, 'sssss', 'Aliways', 'niyi@gmail.com', '2019-07-18 11:38:59'),
(5, 'sssss', 'Aliways', 'niyi@gmail.com', '2019-07-18 11:40:36'),
(6, 'sssss', 'Aliways', 'niyi@gmail.com', '2019-07-18 11:42:14'),
(7, 'aaaa', 'Aliways', 'mariamibraheem0@gmail.com', '2019-07-18 11:46:01'),
(8, 'aaaa', 'Aliways', 'mariamibraheem0@gmail.com', '2019-07-18 11:49:07'),
(9, 'wwww', 'aa', 'tao@gmail.com', '2019-07-18 11:49:55'),
(10, 'Veru nice website', 'Ambrose Ali', 'tao@gmail.com', '2019-07-18 11:53:32'),
(11, 'Veru nice website', 'Ambrose Ali', 'tao@gmail.com', '2019-07-18 11:53:42'),
(12, 'Veru nice website', 'Ambrose Ali', 'tao@gmail.com', '2019-07-18 11:54:01'),
(13, 'Veru nice website', 'Ambrose Ali', 'tao@gmail.com', '2019-07-18 11:54:32'),
(14, 'Veru nice website', 'Ambrose Ali', 'tao@gmail.com', '2019-07-18 11:58:27'),
(15, 'Veru nice website', 'Ambrose Ali', 'tao@gmail.com', '2019-07-18 11:58:37'),
(16, 'Veru nice website', 'Ambrose Ali', 'tao@gmail.com', '2019-07-18 11:58:55'),
(17, 'Veru nice website', 'Ambrose Ali', 'tao@gmail.com', '2019-07-18 12:01:29'),
(18, 'Veru nice website', 'Ambrose Ali', 'tao@gmail.com', '2019-07-18 12:02:06'),
(19, 'Veru nice website', 'Ambrose Ali', 'tao@gmail.com', '2019-07-18 12:03:24'),
(20, 'Veru nice website', 'Ambrose Ali', 'tao@gmail.com', '2019-07-18 12:04:06'),
(21, 'wwww', 'Adebanjo', 'niyi@gmail.com', '2019-07-18 12:04:26'),
(22, 'wwww', 'Adebanjo', 'niyi@gmail.com', '2019-07-18 12:05:36'),
(23, 'wwww', 'Adebanjo', 'aliuajibade317@gmail.com', '2019-07-18 12:06:38'),
(24, 'sssss', 'www', 'alfa@yahoo.com', '2019-07-18 12:08:08'),
(25, 'sssssstttttttttttt', 'Goodluck', 'niyi@gmail.com', '2019-07-18 12:09:35'),
(26, 'dddddddddddddddd', 'rty', 'tao@gmail.com', '2019-07-18 12:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `name`, `phone_number`, `email`, `message`) VALUES
(1, '', '', '', '', 'aaa'),
(2, '', 'Ani', '09098765244', 'tao@gmail.com', 'aaaaaaaaaaaaaaasssssssssssssss'),
(3, '', 'Ahmad', '1234567', 'aliuajibade317@gmail.com', 'DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD'),
(4, '', 'Adams', '1234567', 'tyu@yahoo.com', 'aasdd'),
(5, '', 'Ade', '090', 'aliuajibade317@gmail.com', 'Assalaamu alaykum.'),
(6, '', 'Aliways', '1234567', 'tyu@yahoo.com', 'assssssss'),
(7, '', 'Kunle', '1234567', 'aliuajibade317@gmail.com', 'assssssssssssssssssssxxxxxxxxxxxxxxxxxxx'),
(8, '', 'Ilori', '1234567', 'aliuajibade317@gmail.com', 'ASE'),
(9, '', 'aa', '08084838268', 'tao@gmail.com', 'aaaaaaaaaaaaaaaaaaaaa'),
(10, '', 'Aliways', '08084838268', 'aliu317@gmail.com', 'GJVGG,GIUGLVIUV X\\'),
(11, '', 'Ali', '08084838268', 'aliu317@gmail.com', 'aaa'),
(12, '', 'Ali', '08084838268', 'aliu317@gmail.com', 'aaa'),
(13, '', 'Ali', '08084838268', 'tao@gmail.com', 'aaaaa'),
(14, '', 'Ali', '08084838268', 'tao@gmail.com', 'aaaaa'),
(15, '', 'Ali', '08084838268', 'tao@gmail.com', 'aaaaa'),
(16, '', 'Musa', '08084838268', 'tao@gmail.com', 'aaaaa'),
(17, '', 'Adebanjo', '08084838268', 'adebanjo@yahoo.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(18, '', 'Aliways', '1234567', 'tyu@yahoo.com', 'aaaaaa'),
(19, '', 'Aliways', '1234567', 'aliuajibade317@gmail.com', '1111'),
(20, '', 'Aliways', '1234567', 'aliuajibade317@gmail.com', '1111'),
(21, '', 'Aliways', '08084838268', 'niyi@gmail.com', 'aaa'),
(22, '', 'Aliways', '08084838268', 'niyi@gmail.com', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `dev_camp`
--

CREATE TABLE `dev_camp` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course_of_study` varchar(50) NOT NULL,
  `academic_level` varchar(50) NOT NULL,
  `contact_address` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dev_camp`
--

INSERT INTO `dev_camp` (`id`, `name`, `course_of_study`, `academic_level`, `contact_address`, `trn_date`) VALUES
(1, 'Adebanjo', 'Accounting', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(2, 'Akinwale Ajibade', 'IT', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(3, 'Aliu Olalekan Ajibade', 'Accounting', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(4, 'Maryam Ibrahim', 'IT', '200 Level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(5, 'Aliways', 'Law', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(6, 'Adebanjo', 'law', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(7, 'Adebanjo', 'law', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(8, 'Adebanjo', 'law', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(9, 'Adebanjo', 'law', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(10, 'Adebanjo', 'law', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(11, 'Adebanjo', 'law', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(12, 'Adebanjo', 'law', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(13, 'Adebanjo', 'law', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00'),
(14, 'Aliu Olalekan Ajibade', 'law', '400 level', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `index`
--

CREATE TABLE `index` (
  `id` int(11) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index`
--

INSERT INTO `index` (`id`, `email_address`, `trn_date`) VALUES
(1, 'tunde@yahoo.com', '0000-00-00 00:00:00'),
(2, 'babalakin@gmail.com', '0000-00-00 00:00:00'),
(3, 'aliuajibade317@gmail.com', '0000-00-00 00:00:00'),
(4, 'ase@yahoo.com', '0000-00-00 00:00:00'),
(5, 'yankee@yahoo.com', '0000-00-00 00:00:00'),
(6, 'aliuajibade317@gmail.com', '0000-00-00 00:00:00'),
(7, 'ad@yahoo.com', '0000-00-00 00:00:00'),
(8, 'ad@yahoo.com', '0000-00-00 00:00:00'),
(9, 'preciousa@gmail.com', '0000-00-00 00:00:00'),
(10, 'ad@yahoo.com', '0000-00-00 00:00:00'),
(11, 'ad@yahoo.com', '0000-00-00 00:00:00'),
(12, 'ase@yahoo.com', '0000-00-00 00:00:00'),
(13, 'ase@yahoo.com', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `leadership_training_form`
--

CREATE TABLE `leadership_training_form` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` int(11) NOT NULL,
  `contact_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leadership_training_form`
--

INSERT INTO `leadership_training_form` (`id`, `user_id`, `full_name`, `email`, `contact_address`) VALUES
(1, '', 'adebayo', 0, 'qwerty'),
(2, '', 'ambrose', 0, 'qwerty'),
(3, '', 'Adeyemi', 0, 'xcd'),
(4, '', 'qwertyu', 0, 'aaaaaaa'),
(5, '', 'sde', 0, 'aaaaaa'),
(6, '', '', 0, 'aaaa'),
(7, '', 'ambrose', 0, 'aaaa'),
(8, '', 'Ajewole', 0, 'Sango'),
(9, '', 'Adeyemi', 0, 'QQQ'),
(10, '', 'Adeyemi', 0, 'QQQ'),
(11, '', 'Adeyemi', 0, 'QQQ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `scholarship_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_id`, `email`, `password`, `scholarship_type`) VALUES
(1, '', 'tyu@yahoo.com', '123', 'school_fees_reimbursement'),
(2, '', 'tyu@yahoo.com', '123', 'school_fees_reimbursement'),
(3, '', 'were@gmail.com', 'wet', 'career_advancement_professional_certification'),
(4, '', 'tao@gmail.com', 'qw', 'school_fees_reimbursement'),
(5, '', 'aliuajibade317@gmail.com', 'Adeniyi04', 'school_fees_reimbursement'),
(6, '', 'aliuajibade317@gmail.com', '123', 'school_fees_reimbursement'),
(7, '', 'aliuajibade317@gmail.com', 'qwerty', 'career_advancement_professional_certification'),
(8, '', 'aliuajibade317@gmail.com', '123', 'career_advancement_professional_certification'),
(9, '', 'aliuajibade317@gmail.com', '123', 'school_fees_reimbursement'),
(10, '', 'aliuajibade317@gmail.com', '123', 'school_fees_reimbursement'),
(11, '', 'aliuajibade317@gmail.com', '123', 'school_fees_reimbursement'),
(12, '', 'aliuajibade317@gmail.com', 'Adeniyi04', 'school_fees_reimbursement'),
(13, '', 'aliuajibade317@gmail.com', 'Adeniyi04', 'school_fees_reimbursement'),
(14, '', 'aliuajibade317@gmail.com', 'Adeniyi04', 'school_fees_reimbursement'),
(15, '', 'mariamibraheem0@gmail.com', '090', 'school_fees_reimbursement'),
(16, '', 'aliuajibade317@gmail.com', '123', 'school_fees_reimbursement'),
(17, '', 'aliuajibade317@gmail.com', '123', 'school_fees_reimbursement');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `user_id`, `email_address`) VALUES
(1, '', 'aliuajibade317@gmail.com'),
(2, '', 'yemi@yahoo.com'),
(3, '', 'aliuajibade317@gmail.com'),
(4, '', 'aliuajibade317@gmail.com'),
(5, '', 'aliuajibade317@gmail.com'),
(6, '', 'ad@yahoo.com'),
(7, '', 'yemi@yahoo.com'),
(8, '', 'ad@yahoo.com'),
(9, '', 'ad@yahoo.com'),
(10, '', 'ad@yahoo.com'),
(11, '', 'aliuajibade317@gmail.com'),
(12, '', 'ad@yahoo.com'),
(13, '', 'ad@yahoo.com'),
(14, '', 'yemi@yahoo.com'),
(15, '', 'aliuajibade317@gmail.com'),
(16, '', 'ad@yahoo.com'),
(17, '', 'yemi@yahoo.com'),
(18, '', 'aliuajibade317@gmail.com'),
(19, '', 'ase@yahoo.com'),
(20, '', 'yemi@yahoo.com'),
(21, '', 'yankee@yahoo.com'),
(22, '', 'preciousa@gmail.com'),
(23, '', 'preciousa@gmail.com'),
(24, '', 'preciousa@gmail.com'),
(25, '', 'aliuajibade317@gmail.com'),
(26, '', 'aliuajibade317@gmail.com'),
(27, '', 'ad@yahoo.com'),
(28, '', 'ase@yahoo.com'),
(29, '', 'aliuajibade317@gmail.com'),
(30, '', 'ad@yahoo.com'),
(31, '', 'aliuajibade317@gmail.com'),
(32, '', 'yankee@yahoo.com'),
(33, '', 'ase@yahoo.com'),
(34, '', 'preciousa@gmail.com'),
(35, '', 'aliuajibade317@gmail.com'),
(36, '', 'yankee@yahoo.com'),
(37, '', 'amaka@yahoo.com'),
(38, '', 'mui@yahoo.com'),
(39, '', 'mui@yahoo.com'),
(40, '', 'ola@gmail.com'),
(41, '', 'adebayo_wahid@gmail.com'),
(42, '', 'tunde@yahoo.com'),
(43, '', 'tunde@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `read_2_lead_form`
--

CREATE TABLE `read_2_lead_form` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `read_2_lead_form`
--

INSERT INTO `read_2_lead_form` (`id`, `user_id`, `full_name`, `phone_number`, `email`, `gender`) VALUES
(1, '', 'adebayo', '123', 'aliuajibade317@gmail.com', 'male'),
(2, '', 'Adeyemi', '1234567', 'aliuajibade317@gmail.com', 'male'),
(3, '', 'Adeyemi', '1234567', 'aliuajibade317@gmail.com', 'male'),
(4, '', 'adebayo', '1234567', 'aliuajibade317@gmail.com', 'male'),
(5, '', 'Owoseni', '090', 'aliu317@gmail.com', 'male'),
(6, '', 'Yomi', '1234567', 'aliuajibade317@gmail.com', 'male'),
(7, '', 'ambrose', '1234567', 'aliu317@gmail.com', 'male'),
(8, '', 'Adeyemi', '08084838268', 'aliuajibade317@gmail.com', 'male'),
(9, '', 'Adeyemi', '08084838268', 'aliuajibade317@gmail.com', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(11) NOT NULL,
  `scholarship_type` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `state_of_origin` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `islamic_organisation` varchar(50) NOT NULL,
  `local_government_area_of_origin` varchar(50) NOT NULL,
  `home_address` varchar(50) NOT NULL,
  `name_of_institution` varchar(50) NOT NULL,
  `course_of_study` varchar(50) NOT NULL,
  `official_website_of_institute` varchar(50) NOT NULL,
  `certificate_obtained` varchar(50) NOT NULL,
  `expected_year_of_program_completion` varchar(50) NOT NULL,
  `contact_address_of_islamic_organisation` varchar(50) NOT NULL,
  `personal_statement` varchar(50) NOT NULL,
  `postal_address` varchar(50) NOT NULL,
  `contact_address_of_the_institution` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `scholarship_type`, `full_name`, `gender`, `religion`, `marital_status`, `email`, `password`, `date_of_birth`, `state_of_origin`, `phone_number`, `islamic_organisation`, `local_government_area_of_origin`, `home_address`, `name_of_institution`, `course_of_study`, `official_website_of_institute`, `certificate_obtained`, `expected_year_of_program_completion`, `contact_address_of_islamic_organisation`, `personal_statement`, `postal_address`, `contact_address_of_the_institution`) VALUES
(1, 'career_advancement_professional_certification', 'Bayo', 'male', 'islaam', 'married', 'bayo@yahoo.com', 'fdfgfg', '2019-06-24', 'Jigawa State', '08084838268', 'advanced_centre_for_the_advocacy_development_and_e', 'Atiba', '4, Akinmosin street, Sango-Ota, Ogun State 72, Oyi', 'www.abu.com', 'hnd', '1', '4, Akinmosin street, Sango-Ota, Ogun State 72, Oyi', '4, Akinmosin street, Sango-Ota, Ogun State 72, Oyi', 'ABU', '11111', 'Accounting', '4, Akinmosin street, Sango-Ota, Ogun State 72, Oyi'),
(2, 'career_advancement_professional_certification', 'B', 'male', 'islaam', 'married', 'bayo@yahoo.com', 'dfgfgfhghghg', '2019-06-24', 'Jigawa State', '08084838268', 'advanced_centre_for_the_advocacy_development_and_e', 'Atiba', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', 'www.abu.com', 'hnd', '1', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', 'ABU', '11111', 'Accounting', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy'),
(3, 'career_advancement_professional_certification', 'Best', 'male', 'islaam', 'married', 'bayo@yahoo.com', 'hhghjhj', '2019-06-24', 'Jigawa State', '08084838268', 'advanced_centre_for_the_advocacy_development_and_e', 'Atiba', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', 'www.abu.com', 'hnd', '1', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', 'ABU', '11111', 'Accounting', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy'),
(4, 'school_fees_reimbursement', 'Adeyemi', 'male', 'islaam', 'single', 'aliuajibade317@gmail.com', '123', '2019-07-04', 'Abia State', '1234567', 'advanced_centre_for_the_advocacy_development_and_e', 'Atiba', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', 'www.abu.com', 'phd', '2', '4, Akinmosin street, Sango-Ota, Ogun State', 'qqqqqq', 'ABU', 'qqqqqq', 'Law', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy'),
(5, 'school_fees_reimbursement', 'Adeyemi', 'male', 'islaam', 'single', 'aliuajibade317@gmail.com', '123', '2019-07-04', 'Abia State', '1234567', 'advanced_centre_for_the_advocacy_development_and_e', 'Atiba', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy', 'www.abu.com', 'phd', '2', '4, Akinmosin street, Sango-Ota, Ogun State', 'qqqqqq', 'ABU', 'qqqqqq', 'Law', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy');

-- --------------------------------------------------------

--
-- Table structure for table `training_form`
--

CREATE TABLE `training_form` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `contact_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_form`
--

INSERT INTO `training_form` (`id`, `user_id`, `full_name`, `contact_address`) VALUES
(1, '', 'Adeyemi', '12, Oyinlola st'),
(2, '', 'Adeyemi', 'aaaaaaa'),
(3, '', 'Adeyemi', '2, Ola Ayeni street'),
(4, '', 'Adeyemi', '2, Ola Ayeni street'),
(5, '', 'Adeyemi', '2, Ola Ayeni street'),
(6, '', 'Ambrose Alli', '5, Ekpoma road,'),
(7, '', 'Ambrose Alli', '5, Ekpoma road,'),
(8, '', 'Titi', 'asd'),
(9, '', 'Titi', 'asd'),
(10, '', 'rolex', 'azx'),
(11, '', 'rolex', 'azx'),
(12, '', 'Bose', 'qqqqq'),
(13, '', 'adebayo', 'assssss'),
(14, '', 'Pius Anyim', 'qqqqq'),
(15, '', 'Shakiirah', '10, Mojasola street, Alimosho.');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `files_submitted_documents_invoice` varchar(50) NOT NULL,
  `files_submitted_documents_school_id_card` varchar(50) NOT NULL,
  `files_submitted_documents_last_exam_result` varchar(50) NOT NULL,
  `files_submitted_passport` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `user_id`, `files_submitted_documents_invoice`, `files_submitted_documents_school_id_card`, `files_submitted_documents_last_exam_result`, `files_submitted_passport`) VALUES
(1, '', 'CV.doc', 'eduimp.gif', 'logo1.gif', 'IMG-20190418-WA0002.jpg'),
(2, '', 'eduimp.gif', 'campus.png', 'image.gif', 'mypassport.jpg'),
(3, '', 'bg_wall.jpg', 'bg.gif', 'beancake[1].gif', 'campus.png'),
(4, '', 'beancake[1].gif', 'beancake.png', 'beancake[1].gif', 'beancake.png'),
(5, '', 'Codecademy_CSS DISPLAY AND POSITIONING.docx', 'black-graduates.jpg', 'bg.psd', 'beancake[1].gif'),
(6, '', 'beancake.png', 'logo4.png', 'campus.png', 'eduimp.gif'),
(7, '', 'beancake.png', 'bg_wall.jpg', 'beancake.png', 'campus.png'),
(8, '', 'beancake.png', 'bg.gif', 'beancake.png', 'beancake.png'),
(9, '', 'campus.png', 'bg.gif', 'campus.png', 'eduimp.gif'),
(10, '', 'beancake.png', 'bg_wall.jpg', 'beancake.png', 'beancake.png'),
(11, '', 'bg_wall.jpg', 'campus.png', 'bg_wall.jpg', 'black-graduates.jpg'),
(12, '', 'boy.png', 'boy.png', 'boy.png', 'boy.png'),
(13, '', 'logo1.gif', 'logo1.gif', 'boy.png', 'bg.png'),
(14, '', 'eduimp.gif', 'bg_wall.jpg', 'bg_wall.jpg', 'beancake[1].gif'),
(15, '', 'beancake.png', 'bg.gif', 'campus.png', 'beancake.png'),
(16, '', 'beancake.png', 'beancake.png', 'boy.png', 'beancake[1].gif'),
(17, '', 'beancake.png', 'beancake.png', 'boy.png', 'beancake[1].gif'),
(18, '', 'beancake.png', 'beancake.png', 'boy.png', 'beancake[1].gif'),
(19, '', 'beancake.png', 'beancake.png', 'boy.png', 'beancake[1].gif');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `course_of_study` varchar(50) NOT NULL,
  `level_of_competence` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `area_of_interest` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `home_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `user_id`, `fullname`, `course_of_study`, `level_of_competence`, `gender`, `area_of_interest`, `phone_number`, `email`, `location`, `home_address`) VALUES
(1, '', 'defwewf', 'efwe', 'intermediate', 'female', 'career_mentor', '09030126762', 'aliuajibade317@gmail.com', 'kosofe', 'wefwfwrefwefe'),
(2, '', 'defwewf', 'law', 'expert', 'male', 'career_coach', '1234567', 'aliuajibade317@gmail.com', 'kosofe', 'qwerty'),
(3, '', 'defwewf', 'law', 'intermediate', 'male', 'career_coach', '1234567', 'aliuajibade317@gmail.com', 'lagos_island', 'qwssss'),
(4, '', 'qq', 'qq', 'expert', 'female', 'career_coach', '1234567', 'aliuajibade317@gmail.com', 'lagos_island', 'qqq'),
(5, '', 'qq', 'aa', 'expert', 'male', 'career_coach', '1234567', 'tao@gmail.com', 'kosofe', '4, Akinmosin street, Sango-Ota, Ogun State\r\n72, Oy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyforscholarship`
--
ALTER TABLE `applyforscholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dev_camp`
--
ALTER TABLE `dev_camp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index`
--
ALTER TABLE `index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leadership_training_form`
--
ALTER TABLE `leadership_training_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `read_2_lead_form`
--
ALTER TABLE `read_2_lead_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_form`
--
ALTER TABLE `training_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyforscholarship`
--
ALTER TABLE `applyforscholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `dev_camp`
--
ALTER TABLE `dev_camp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `index`
--
ALTER TABLE `index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `leadership_training_form`
--
ALTER TABLE `leadership_training_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `read_2_lead_form`
--
ALTER TABLE `read_2_lead_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `training_form`
--
ALTER TABLE `training_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
