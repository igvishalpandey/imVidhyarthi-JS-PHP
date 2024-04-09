-- database
-- create database
CREATE DATABASE imvidhyarthi;

-- first table users
-- code for table users
CREATE TABLE `imvidhyarthi`.`users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `fname` VARCHAR(25) NOT NULL,
    `lname` VARCHAR(25) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `pwd` VARCHAR(255) NOT NULL,
    `c_pwd` VARCHAR(255) NOT NULL,
    `contact` VARCHAR(10) NOT NULL,
    `img` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
);

-- second table students_details
-- code for table students_details
CREATE TABLE `imvidhyarthi`.`students_details` (
    `email` VARCHAR(255) NOT NULL,
    `sysid` VARCHAR(255) NOT NULL,
    `rollno` VARCHAR(255) NOT NULL,
    `class` VARCHAR(25) NOT NULL,
    `course` VARCHAR(255) NOT NULL,
    `father_name` VARCHAR(25) NOT NULL,
    `address` VARCHAR(545) NOT NULL
);

ALTER TABLE
    `students_details`
ADD
    PRIMARY KEY(`email`);

-- third table circular
-- code for table circular
CREATE TABLE `imvidhyarthi`.`circular` (
    `sno` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `pdf_file` VARCHAR(545) NOT NULL,
    `course` VARCHAR(128) NOT NULL,
    PRIMARY KEY (`sno`)
);

-- fourth table subject_details
-- code for tabe subject_details
CREATE TABLE `imvidhyarthi`.`subject_details` (
    `email` VARCHAR(255) NOT NULL,
    `subject` VARCHAR(128) NOT NULL,
    `course` VARCHAR(128) NOT NULL,
    `year` VARCHAR(25) NOT NULL
);

-- fifth table attendance
-- code for table attendance 
CREATE TABLE `imvidhyarthi`.`attendance` (
    `email` VARCHAR(255) NOT NULL,
    `sys_id` VARCHAR(25) NOT NULL,
    `subject` VARCHAR(128) NOT NULL,
    `subject_code` VARCHAR(25) NOT NULL,
    `attended` INT(255) NOT NULL,
    `delivered` INT(255) NOT NULL,
    `year` VARCHAR(25) NOT NULL
);

-- sixth table assignment
-- code for table assignment
CREATE TABLE `imvidhyarthi`.`assignment` (
    `class` VARCHAR(25) NOT NULL,
    `subject_name` VARCHAR(255) NOT NULL,
    `subject_code` VARCHAR(25) NOT NULL,
    `assignment_title` VARCHAR(255) NOT NULL,
    `assignment_file` VARCHAR(545) NOT NULL,
    `year` VARCHAR(128) NOT NULL
);

CREATE TABLE `imvidhyarthi`.`sub_assignment` (
    `email` VARCHAR(255) NOT NULL,
    `class` VARCHAR(25) NOT NULL,
    `subject_name` VARCHAR(255) NOT NULL,
    `subject_code` VARCHAR(25) NOT NULL,
    `assignment_title` VARCHAR(255) NOT NULL,
    `assignment_file` VARCHAR(545) NOT NULL,
    `year` VARCHAR(128) NOT NULL,
    `assign_status` VARCHAR(255) NOT NULL,
    `sumbitted_file` VARCHAR(255) NOT NULL
);

-- sixth table project
-- code for table project
CREATE TABLE `imvidhyarthi`.`project` (
    `email` VARCHAR(128) NOT NULL,
    `project` VARCHAR(128) NOT NULL,
    `related` VARCHAR(48) NOT NULL,
    `started_on` VARCHAR(48) NOT NULL,
    `finished_on` VARCHAR(48) NOT NULL,
    `project_link` VARCHAR(255) NOT NULL
) ENGINE = InnoDB;