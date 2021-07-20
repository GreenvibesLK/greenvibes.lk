-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 09:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`, `last_login`, `is_deleted`) VALUES
(1, 'Srimal', 'Fernando', 'srimal', '17ba0791499db908433b80f37c5fbc89b870084b', '2021-07-21 01:21:22', 0),
(2, 'Naveen', 'Sachintha', 'naveen', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `blog_date` date NOT NULL DEFAULT current_timestamp(),
  `blog_title` varchar(100) NOT NULL,
  `blog_short_title` varchar(40) NOT NULL,
  `blog_text` text NOT NULL DEFAULT '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'',
  `created_by` varchar(20) DEFAULT 'unknown',
  `blog_img` varchar(200) NOT NULL DEFAULT 'blog_img/null.jpg',
  `link` varchar(300) NOT NULL,
  `download` varchar(300) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_date`, `blog_title`, `blog_short_title`, `blog_text`, `created_by`, `blog_img`, `link`, `download`, `online`) VALUES
(1, '2021-07-16', 'Hello world lorem', 'Hello world lorem', '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'', 'unknown', 'blog_img/null.jpg', '', '', 1),
(2, '2021-07-16', 'aefce', 'aefce', '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'', 'unknown', 'blog_img/null.jpg', '', '', 1),
(3, '2021-07-21', 'wedwa', 'wedwa', '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'', 'unknown', 'blog_img/null.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eblog`
--

CREATE TABLE `eblog` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `blog_date` date NOT NULL DEFAULT current_timestamp(),
  `blog_title` varchar(100) NOT NULL,
  `blog_short_title` varchar(40) NOT NULL,
  `blog_text` text NOT NULL DEFAULT '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'',
  `created_by` varchar(20) DEFAULT 'unknown',
  `blog_img` varchar(200) NOT NULL DEFAULT 'blog_img/null.jpg',
  `link` varchar(300) NOT NULL,
  `download` varchar(300) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eblog`
--

INSERT INTO `eblog` (`blog_id`, `blog_date`, `blog_title`, `blog_short_title`, `blog_text`, `created_by`, `blog_img`, `link`, `download`, `online`) VALUES
(1, '2021-07-16', 'Hello world lorem', 'Hello world lorem', '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'', 'unknown', 'blog_img/null.jpg', '', '', 1),
(2, '2021-07-16', 'aefce', 'aefce', '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'', 'unknown', 'blog_img/null.jpg', '', '', 1),
(3, '2021-07-21', 'wedwa', 'wedwa', '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'', 'unknown', 'blog_img/null.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `iblog`
--

CREATE TABLE `iblog` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `blog_date` date NOT NULL DEFAULT current_timestamp(),
  `blog_title` varchar(100) NOT NULL,
  `blog_short_title` varchar(40) NOT NULL,
  `blog_text` text NOT NULL DEFAULT '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'',
  `created_by` varchar(20) DEFAULT 'unknown',
  `blog_img` varchar(200) NOT NULL DEFAULT 'blog_img/null.jpg',
  `link` varchar(300) NOT NULL,
  `download` varchar(300) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iblog`
--

INSERT INTO `iblog` (`blog_id`, `blog_date`, `blog_title`, `blog_short_title`, `blog_text`, `created_by`, `blog_img`, `link`, `download`, `online`) VALUES
(1, '2021-07-16', 'Hello world lorem', 'Hello world lorem', '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'', 'unknown', 'blog_img/null.jpg', '', '', 1),
(2, '2021-07-16', 'aefce', 'aefce', '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'', 'unknown', 'blog_img/null.jpg', '', '', 1),
(3, '2021-07-21', 'wedwa', 'wedwa', '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'', 'unknown', 'blog_img/null.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pblog`
--

CREATE TABLE `pblog` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `blog_date` date NOT NULL DEFAULT current_timestamp(),
  `blog_title` varchar(100) NOT NULL,
  `blog_short_title` varchar(40) NOT NULL,
  `blog_text` text NOT NULL DEFAULT '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'',
  `created_by` varchar(20) DEFAULT 'unknown',
  `blog_img` varchar(200) NOT NULL DEFAULT 'blog_img/null.jpg',
  `link` varchar(300) NOT NULL,
  `download` varchar(300) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pblog`
--

INSERT INTO `pblog` (`blog_id`, `blog_date`, `blog_title`, `blog_short_title`, `blog_text`, `created_by`, `blog_img`, `link`, `download`, `online`) VALUES
(1, '2021-07-16', 'Hello world lorem', 'Hello world lorem', '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'', 'unknown', 'blog_img/null.jpg', '', '', 1),
(2, '2021-07-16', 'aefce', 'aefce', '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'', 'unknown', 'blog_img/null.jpg', '', '', 1),
(3, '2021-07-21', 'wedwa', 'wedwa', '<h2> Post content </h2>\\\\ <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Deserunt officiis veniam accusamus non aspernatur esse vitae illum vel id eius rerum ullam assumenda commodi tenetur, illo tempora? Earum, debitis, nostrum?</p>\'', 'unknown', 'blog_img/null.jpg', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `eblog`
--
ALTER TABLE `eblog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `iblog`
--
ALTER TABLE `iblog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `pblog`
--
ALTER TABLE `pblog`
  ADD PRIMARY KEY (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eblog`
--
ALTER TABLE `eblog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `iblog`
--
ALTER TABLE `iblog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pblog`
--
ALTER TABLE `pblog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
