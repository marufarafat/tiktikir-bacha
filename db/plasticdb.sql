-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 03:00 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plasticdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_camping`
--

CREATE TABLE `add_camping` (
  `campaign_id` int(11) NOT NULL,
  `admin_id` int(20) NOT NULL,
  `campaign_title` varchar(25) NOT NULL,
  `campaign_description` varchar(500) NOT NULL,
  `campaign_start_date` varchar(20) NOT NULL,
  `campaign_end_date` varchar(20) NOT NULL,
  `campaign_place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `admin_designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_answer`
--

CREATE TABLE `admin_answer` (
  `admin_answer_id` int(11) NOT NULL,
  `user_question_id` int(20) NOT NULL,
  `registration_id` varchar(50) NOT NULL,
  `admin_id` int(20) NOT NULL,
  `admin_answer_solution` varchar(500) NOT NULL,
  `admin_answer_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `audio_id` int(20) NOT NULL,
  `audio_title` varchar(50) NOT NULL,
  `audio_catagory` varchar(20) NOT NULL,
  `audio_link` text NOT NULL,
  `admin_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(12) NOT NULL,
  `registration_id` varchar(20) NOT NULL,
  `registration_email` varchar(50) NOT NULL,
  `donation_purpose` varchar(200) NOT NULL,
  `donation_description` varchar(500) NOT NULL,
  `donation_amount` int(12) NOT NULL,
  `donation_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `latest_on_plastic`
--

CREATE TABLE `latest_on_plastic` (
  `latest_on_plastic_id` int(20) NOT NULL,
  `admin_id` int(20) NOT NULL,
  `latest_on_plastic_title` varchar(50) NOT NULL,
  `latest_on_plastic_description` varchar(500) NOT NULL,
  `latest_on_plastic_image` text NOT NULL,
  `latest_on_plastic_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` varchar(12) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `strategy`
--

CREATE TABLE `strategy` (
  `strategy_id` int(20) NOT NULL,
  `admin_id` int(20) NOT NULL,
  `strategy_title` varchar(50) NOT NULL,
  `strategy_description` varchar(500) NOT NULL,
  `strategy_image` text NOT NULL,
  `strategy_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_question`
--

CREATE TABLE `user_question` (
  `user_question_id` int(20) NOT NULL,
  `registration_id` varchar(50) NOT NULL,
  `user_question_subject` varchar(50) NOT NULL,
  `user_question_message` varchar(500) NOT NULL,
  `user_question_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(20) NOT NULL,
  `video_catagory` varchar(50) NOT NULL,
  `video_link` text NOT NULL,
  `admin_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_camping`
--
ALTER TABLE `add_camping`
  ADD PRIMARY KEY (`campaign_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_answer`
--
ALTER TABLE `admin_answer`
  ADD PRIMARY KEY (`admin_answer_id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`audio_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `latest_on_plastic`
--
ALTER TABLE `latest_on_plastic`
  ADD PRIMARY KEY (`latest_on_plastic_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strategy`
--
ALTER TABLE `strategy`
  ADD PRIMARY KEY (`strategy_id`);

--
-- Indexes for table `user_question`
--
ALTER TABLE `user_question`
  ADD PRIMARY KEY (`user_question_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_camping`
--
ALTER TABLE `add_camping`
  MODIFY `campaign_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_answer`
--
ALTER TABLE `admin_answer`
  MODIFY `admin_answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `audio_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latest_on_plastic`
--
ALTER TABLE `latest_on_plastic`
  MODIFY `latest_on_plastic_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `strategy`
--
ALTER TABLE `strategy`
  MODIFY `strategy_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_question`
--
ALTER TABLE `user_question`
  MODIFY `user_question_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
