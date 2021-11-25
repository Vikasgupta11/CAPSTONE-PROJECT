-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 09:16 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_email` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_email`, `admin_id`, `admin_name`, `admin_pass`) VALUES
('admin@gmail.com', 1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_author` varchar(255) NOT NULL,
  `course_desc` text NOT NULL,
  `course_duration` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_img` text NOT NULL,
  `course_name` text NOT NULL,
  `course_original_price` int(11) NOT NULL,
  `course_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_author`, `course_desc`, `course_duration`, `course_id`, `course_img`, `course_name`, `course_original_price`, `course_price`) VALUES
('John Ibraham', 'Best Course For the beginner And Easy to learn .', 120, 1, '../images/c++.png', 'C++', 120, 21),
('Salman Khan', 'R is a language and environment for statistical computing and graphic.', 5, 2, '../images/R.png', 'R Language', 50, 40),
('Mukesh Ambani', 'Cloud computing is the on-demand availability of computer system', 5, 3, '../images/cloud-computing.jpg', 'Cloud Computing ', 499, 199),
('Nwasuddin Siddiqi', 'The official home of the Python Programming Language.', 6, 4, '../images/python.jpeg', 'Python', 699, 199),
('Disha Patani', 'Android is a mobile operating system based on a modified version of the Linux kernel and other open source software', 6, 5, '../images/android.png', 'Android ', 999, 399),
('Narendar Modi', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as', 50, 7, '../images/java.png', 'Java Adv.', 399, 199),
('Amir Khan', 'PHP is a general-purpose scripting language especially suited to web development.', 18, 8, '../images/php.jpg', 'Php', 499, 299),
('Vikas', 'This Course is for Beginners Purpose and starting from scratch Enroll Now Limited Seats.', 120, 10, '../images/php.jpg', 'Php', 199, 99);

-- --------------------------------------------------------

--
-- Table structure for table `courseorder`
--

CREATE TABLE `courseorder` (
  `amount` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `co_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_id` text NOT NULL,
  `respmsg` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courseorder`
--

INSERT INTO `courseorder` (`amount`, `course_id`, `co_id`, `order_date`, `order_id`, `respmsg`, `status`, `stu_email`) VALUES
(199, 3, 1, '2021-06-27', 'ORDS85572627', 'Txn Success', 'TXN_SUCCESS', 'abc@gmail.com'),
(199, 4, 2, '2021-06-27', 'ORDS63385726', 'Txn Success', 'TXN_SUCCESS', 'abc@gmail.com'),
(199, 4, 3, '2021-06-28', 'ORDS78193125', 'Txn Success', 'TXN_SUCCESS', 'user@gmail.com'),
(99, 10, 4, '2021-06-28', 'ORDS58031336', 'Txn Success', 'TXN_SUCCESS', 'user123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_content` text NOT NULL,
  `f_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_content`, `f_id`, `stu_id`) VALUES
(' I Suggest thisis best Platform ever  and I thought Its ione of the bes', 1, 1),
('Best course for android And its one ofthe best Course Available in the online market So thanyou', 4, 2),
('Wow !\r\nThe Way of teaching is great and I will Give this site to 5 star', 5, 3),
('Amazing !\r\nWonder Full This is Amazing Course Ever seen', 6, 5),
('Wow  !  Amazing hai  Courses  Ever  Seen Like  these  Wonderful    Amazing.', 7, 6),
('Wow !  best  Course  Ever.', 9, 8),
('Wow  its  the  Best  Course  ever .\r\nAmazing Experience :-) ', 10, 9),
('This is the best course in the World', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` varchar(255) NOT NULL,
  `lesson_desc` text NOT NULL,
  `lesson_link` varchar(255) NOT NULL,
  `course_id` int(255) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(1, 'Introduction to Python', 'Here we will Learn about Basics of Python And Intallation of python IDLE', ' ../lessonvid/_The_Slow-Motion_Art_of_Birds_Flying(360p).mp4', 4, 'Python'),
(2, 'Varables in Python', 'Learn Variables  in python ', ' ../lessonvid/video.mp4', 4, 'Python'),
(3, 'Data Structure In Python', 'We Will Learn various data structure of python e.g List , tuple , dictionary ,set ', ' ../lessonvid/VIDEO_6a5eef99-f8a1-46cb-bff1-758d4f60e5a8.mp4', 4, 'Python'),
(4, 'Introduction tin php', 'Best Course ', ' ../lessonvid/video.mp4', 10, 'Php');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` text NOT NULL,
  `stu_occ` text NOT NULL,
  `stu_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(1, 'abc', 'abc@gmail.com', 'abc', ' Developer', '../images/71WAjLIeLNL._SL1500_.jpg'),
(2, 'vikas', 'vikasgupta.8.b@gmail.com', 'vikas', '  Android Developer', './images/guitar.jpg'),
(3, 'Sam', 'vikas@gmail.com', 'vikas', '  Front End Developer', './images/img2.jpeg'),
(4, 'Free', 'free@gmail.com', 'free', ' Back End developer', '../images/img2.jpeg'),
(5, 'Priya', 'Priya@gmail.com', 'priya', ' Designer', '../images/img_wow.jpg'),
(6, 'sana', 'sana@gmail.com', 'Sana', ' Artist', '../images/img1.jpeg'),
(7, 'user', 'user@gmail.com', 'user123', ' Web Developer', '../images/imh10.jpg'),
(8, 'user', 'user1@gmail.com', 'user', ' Data Science', '../images/img4.jpeg'),
(9, 'user', 'user123@gmail.com', 'user123', ' web Developer', '../images/img3.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `courseorder`
--
ALTER TABLE `courseorder`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courseorder`
--
ALTER TABLE `courseorder`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
