-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 11:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imvidhyarthi`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `class` varchar(25) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_code` varchar(25) NOT NULL,
  `assignment_title` varchar(255) NOT NULL,
  `assignment_file` varchar(545) NOT NULL,
  `year` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `email` varchar(255) NOT NULL,
  `sys_id` varchar(25) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `subject_code` varchar(25) NOT NULL,
  `attended` int(255) NOT NULL,
  `delivered` int(255) NOT NULL,
  `year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`email`, `sys_id`, `subject`, `subject_code`, `attended`, `delivered`, `year`) VALUES
('vp69106@gmail.com', '2020490363', 'DAA', 'CSE 205', 12, 15, '2022-2023'),
('vp69106@gmail.com', '2020490363', 'DSA', 'CSE 105', 8, 15, '2022-2023'),
('vp69106@gmail.com', '2020490363', 'DBMS', 'CSE 245', 14, 15, '2022-2023'),
('vp69106@gmail.com', '2020490363', 'PBL', 'CSE 245', 15, 15, '2022-2023'),
('vp69106@gmail.com', '2020490363', 'Computer Networks', 'CSE 165', 1, 15, '2022-2023'),
('vp69106@gmail.com', '2020490363', 'AI & ML', 'CSE 025', 10, 15, '2021-2022'),
('krishna@gmail.com', '2020123456', 'DSA', 'CSE 205', 52, 65, '2022-2023'),
('krishna@gmail.com', '2020123456', 'DAA', 'CSE 105', 52, 74, '2022-2023'),
('krishna@gmail.com', '2020123456', 'DBMS', 'CSE 245', 2, 15, '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `chat_user`
--

CREATE TABLE `chat_user` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_user`
--

INSERT INTO `chat_user` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1115712314, 'Vishal', 'Pandey', 'vp69106@gmail.com', 'f8c1aabc8d4a9751090273cbed5bd8b5', '1668626161Vishal.jpg', 'Active now'),
(2, 720193830, 'Krishna', 'Reddy', 'krishna@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1668708781krishna.jpg', 'Active now');

-- --------------------------------------------------------

--
-- Table structure for table `circular`
--

CREATE TABLE `circular` (
  `sno` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `pdf_file` varchar(545) NOT NULL,
  `course` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `circular`
--

INSERT INTO `circular` (`sno`, `title`, `pdf_file`, `course`) VALUES
(1, 'MySQL_Cheatsheet_CodeWithHarry', 'MySQL_Cheatsheet_CodeWithHarry.pdf', 'BTECH CSE AI & ML'),
(2, 'CSS Notes', 'CSS Notes.pdf', 'BTECH CSE AI & ML'),
(3, 'JavaScript Book', 'JS Book.pdf', 'BTECH CSE AI & ML'),
(4, 'TutorialsPoint JavaScript', 'TutorialsPoint JavaScript.pdf', 'BTECH CSE'),
(5, 'HTML & CSS Jonn Ducket', 'HTML & CSS Jonn Ducket.pdf', 'BTECH CSE'),
(6, 'HTML_Cheatsheet_CWH', 'HTML_Cheatsheet_CWH.pdf', 'BTECH CSE'),
(7, 'HTML Notes', 'HTML Notes.pdf', 'BTECH CSE'),
(8, 'Students_academic_calendar AY 2022-23', 'Students_academic_calendar AY 2022-23 (1).pdf', 'BTECH CSE'),
(9, 'Unit-1_Soft Computing', 'Unit-1_Soft Computing.pdf', 'BTECH CSE'),
(10, 'new test file', 'Vishal_Pandey_TSEP_FILE.pdf.pdf', 'BTECH CSE AI & ML');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 720193830, 1115712314, 'Hey Buddy..'),
(2, 720193830, 1115712314, 'hey krishna how are you');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `subject_name` varchar(128) NOT NULL,
  `subject_code` varchar(128) NOT NULL,
  `course` varchar(128) NOT NULL,
  `year` varchar(56) NOT NULL,
  `notes_file` varchar(545) NOT NULL,
  `faculty_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`subject_name`, `subject_code`, `course`, `year`, `notes_file`, `faculty_name`) VALUES
('DSA', 'CSP 350', 'BTECH CSE AI & ML', '2022-23', 'Values & Ethics Unit 1 2 & 3.pdf', 'DK Pandey');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `email` varchar(128) NOT NULL,
  `project` varchar(128) NOT NULL,
  `related` varchar(48) NOT NULL,
  `started_on` varchar(48) NOT NULL,
  `finished_on` varchar(48) NOT NULL,
  `project_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`email`, `project`, `related`, `started_on`, `finished_on`, `project_link`) VALUES
('vp69106@gmail.com', 'zxmzsxc', 'mz xM XZ', 'zxxzx', 'zxzx', 'zxzxzx');

-- --------------------------------------------------------

--
-- Table structure for table `students_details`
--

CREATE TABLE `students_details` (
  `email` varchar(255) NOT NULL,
  `sysid` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `class` varchar(25) NOT NULL,
  `course` varchar(255) NOT NULL,
  `father_name` varchar(25) NOT NULL,
  `address` varchar(545) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_details`
--

INSERT INTO `students_details` (`email`, `sysid`, `rollno`, `class`, `course`, `father_name`, `address`) VALUES
('krishna@gmail.com', '2020123456', '200101456', 'CS-D', 'BTECH CSE AI & ML', 'B Reddy', 'Hyderbad, India'),
('vp69106@gmail.com', '2020490363', '200101356', 'CS-D', 'BTECH CSE AI & ML', 'Pawan Kumar Pandey', '97A Dharam Vihar, Khora Colony, Ghaziabad, UP-201301');

-- --------------------------------------------------------

--
-- Table structure for table `subject_details`
--

CREATE TABLE `subject_details` (
  `email` varchar(255) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `course` varchar(128) NOT NULL,
  `year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_details`
--

INSERT INTO `subject_details` (`email`, `subject`, `course`, `year`) VALUES
('vp69106@gmail.com', 'AI & ML', 'BTECH CSE AI & ML', '2022-2024'),
('vp69106@gmail.com', 'DAA', 'BTECH CSE AI & ML', '2022-2024'),
('vp69106@gmail.com', 'DSA', 'BTECH CSE AI & ML', '2022-2024'),
('vp69106@gmail.com', 'DBMS', 'BTECH CSE AI & ML', '2022-2024'),
('vp69106@gmail.com', 'PBL', 'BTECH CSE AI & ML', '2022-2024'),
('vp69106@gmail.com', 'Computer Networks', 'BTECH CSE AI & ML', '2022-2024'),
('vp69106@gmail.com', 'Software Engineering', 'BTECH CSE AI & ML', '2022-2024'),
('krishna@gmail.com', 'DAA', 'BTECH CSE AI & ML', '2022-2023'),
('krishna@gmail.com', 'AI & ML', 'BTECH CSE AI & ML', '2022-2023'),
('krishna@gmail.com', 'DSA', 'BTECH CSE AI & ML', '2022-2023'),
('krishna@gmail.com', 'DBMS', 'BTECH CSE AI & ML', '2022-2023'),
('krishna@gmail.com', 'PBL', 'BTECH CSE AI & ML', '2022-2023'),
('krishna@gmail.com', 'Computer Networks', 'BTECH CSE AI & ML', '2022-2023'),
('krishna@gmail.com', 'Software Engineering', 'BTECH CSE AI & ML', '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `sub_assignment`
--

CREATE TABLE `sub_assignment` (
  `email` varchar(255) NOT NULL,
  `class` varchar(25) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_code` varchar(25) NOT NULL,
  `assignment_title` varchar(255) NOT NULL,
  `assignment_file` varchar(545) NOT NULL,
  `year` varchar(128) NOT NULL,
  `assign_status` varchar(255) NOT NULL,
  `sumbitted_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `c_pwd` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `fname`, `lname`, `email`, `pwd`, `c_pwd`, `contact`, `img`) VALUES
(1, 'Abha', 'Mam', 'abha@gmail.com', '$2y$10$8VKc3VilYunKE8a6g2BFTevUGPutQOSaDy1JmQUeqY1rqjFVnm0.i', '$2y$10$lVe/vr8bDWXF8rLwQ.BEvuchDt4TZs7oZ7ad2nagWsJxVAkEOC9Ri', '1234564', 'profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `c_pwd` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `pwd`, `c_pwd`, `contact`, `img`) VALUES
(1, 'Vishal', 'Pandey', 'vp69106@gmail.com', '$2y$10$jSbhNGqhRa51.wunm3XdCeZq6SF/k.itZB9GFJvP1kq7HX3sLiKZ.', '$2y$10$fD/ezDtuHtdN6GXCaeBRwu86edx84D46LcPzCn/J4RWA46rAFhV/u', '9818933338', 'IMG_20220806_212935_962.jpg'),
(2, 'Krishna', 'Reddy', 'krishna@gmail.com', '$2y$10$K8kAxbmjBDjPqvIljT3Rk.2Y.XeqAmvaYah.vv2e7/v0ulubR7SMS', '$2y$10$8MT.WAjYsEwO9bSeGgOGvuZcNA4E6PSiacxU8205fVEXs8UX5yc3S', '0123456789', 'krishna.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_user`
--
ALTER TABLE `chat_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `circular`
--
ALTER TABLE `circular`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `students_details`
--
ALTER TABLE `students_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_user`
--
ALTER TABLE `chat_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `circular`
--
ALTER TABLE `circular`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
