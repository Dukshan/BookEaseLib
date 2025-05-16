-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2025 at 01:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `id` int(10) NOT NULL,
  `b_category` varchar(500) NOT NULL,
  `b_title` varchar(500) NOT NULL,
  `b_photo` varchar(500) NOT NULL,
  `b_descrip` varchar(500) NOT NULL,
  `b_upload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`id`, `b_category`, `b_title`, `b_photo`, `b_descrip`, `b_upload`) VALUES
(1, 'BIOGRAPHY', 'Mahatma Gandhi', '11.jpg', 'A story of Father of Nation', 'Gandhi-bio.pdf'),
(2, 'BIOGRAPHY', 'Mother Teresa', '2.jpg', 'Women Empowerment', 'Mother Teresa - A Biography ( PDFDrive ).pdf'),
(3, 'HORROR', 'Black Forest', '41IiDtKa9xL.jpg', 'Darkest Forest', 'Black_Forest__A_Horror_Novel_-_Shane_Lee.pdf'),
(4, 'COMICS', 'Champak', 'C2.jpg', 'Cartoon Magzine', 'Champak-may-.pdf'),
(5, 'COMICS', 'Spiderman', 'images.jpg', 'Spiderman magzine', 'spiderman-comic.pdf'),
(6, 'SPRITUAL', 'Shrimad Bhagvad Gita', 'S11.jpg', 'Stories of Mahabharta', 'srimad_bhagavad_gita2.pdf'),
(7, 'FICTION', 'One indian girl', '6.jpg', 'Story of a girl', 'One_Indian_Girl_-_Chetan_Bhagat.pdf'),
(8, 'LOVE STORIES', '2 States', '33.jpg', 'Story of 2 states', '2-states-the-story-of-my-marriage-by-chetan-bhagat-booksforbookies-blogspot-in.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 1234),
(2, 'Shan', 2001),
(3, 'testadmin', 2003);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `categoryname` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`, `photo`) VALUES
(1, 'BIOGRAPHY', '11.jpg'),
(2, 'HORROR', 'h2.jpg'),
(3, 'COMICS', 'C2.jpg'),
(4, 'SPRITUAL', 'S11.jpg'),
(5, 'FICTION', '6.jpg'),
(6, 'LOVE STORIES', '33.jpg'),
(7, 'computer', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`id`, `username`, `email`, `password`) VALUES
(0, 'Shan', 'duque.131400@novaliches.sti.edu.ph', 'pass'),
(3, 'Zeb Asuncion', 'Asuncion.141300@novaliches.sti.edu.ph', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbook`
--
ALTER TABLE `addbook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
