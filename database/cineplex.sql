-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 11:40 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cineplex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `email`, `name`, `password`, `number`) VALUES
(1, 'momin@gmail.com', 'momin', 'pass', '0459989568'),
(2, 'abhi@gmail.com', 'mominAbhi', 'pass', '8795499496');

-- --------------------------------------------------------

--
-- Table structure for table `coming_movie`
--

CREATE TABLE `coming_movie` (
  `cm_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `movie_image` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `rating` int(11) NOT NULL,
  `director` varchar(50) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coming_movie`
--

INSERT INTO `coming_movie` (`cm_id`, `movie_name`, `release_date`, `movie_image`, `trailer`, `synopsis`, `rating`, `director`, `cast`, `genre`) VALUES
(3, 'JURASSIC WORLD', '2018-10-27', 'image/Jurassic.jpg', 'https://www.youtube.com/watch?v=1FJD7jZqZEk', 'Four years after the Jurassic World theme park was closed down, Owen and Claire return to Isla Nubar to save the dinosaurs when they learn that a once dormant volcano on the island is active and is threatening to extinguish all life there. ', 5, 'J.A. Bayona', 'Bryce Dallas Howard, Chris Pratt, Jeff Goldblum', 'Action, Adventure, Sci-Fi'),
(4, 'HALLOWEEN', '2018-10-26', 'image/halloween.png', 'https://www.youtube.com/watch?v=ek1ePFp-nBI', 'Laurie Strode comes to her final confrontation with Michael Myers, the masked figure who has haunted her since she narrowly escaped his killing spree on Halloween night four decades ago.', 4, 'David Gordon Green', 'Judy Greer, Jamie Lee Curtis, Miles Robbins', 'Horror / SUSPENSE'),
(5, 'Aquaman', '2018-10-30', 'image/Aquaman.jpg', 'https://www.youtube.com/watch?v=WDkg3h8PCVU', 'Arthur Curry learns that he is the heir to the underwater kingdom of Atlantis, and must step forward to lead his people and be a hero to the world.', 5, 'James Wan', 'Amber Heard, Jason Momoa, Nicole Kidman', 'Action , Adventure , Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `date_movie`
--

CREATE TABLE `date_movie` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `date_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date_movie`
--

INSERT INTO `date_movie` (`id`, `movie_id`, `date_id`) VALUES
(29, 13, 1),
(30, 18, 3),
(31, 17, 3),
(32, 17, 5),
(33, 15, 4),
(34, 13, 2),
(35, 15, 5),
(36, 20, 5);

-- --------------------------------------------------------

--
-- Table structure for table `date_tbl`
--

CREATE TABLE `date_tbl` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date_tbl`
--

INSERT INTO `date_tbl` (`id`, `date`) VALUES
(1, '2018-10-12'),
(2, '2018-10-23'),
(3, '2018-10-11'),
(4, '2018-10-26'),
(5, '2018-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `final_selection`
--

CREATE TABLE `final_selection` (
  `id` int(11) NOT NULL,
  `movie_date_time_id` int(11) NOT NULL,
  `seats_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_date` date NOT NULL,
  `movie_time` time NOT NULL,
  `current_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_selection`
--

INSERT INTO `final_selection` (`id`, `movie_date_time_id`, `seats_id`, `user_id`, `movie_name`, `movie_date`, `movie_time`, `current_date_time`) VALUES
(52, 29, 11, 1, 'A Star Is Born', '2018-10-11', '06:07:00', '2018-10-26 01:48:53'),
(53, 29, 13, 1, 'A Star Is Born', '2018-10-11', '06:07:00', '2018-10-26 01:49:59'),
(54, 29, 14, 1, 'A Star Is Born', '2018-10-11', '06:07:00', '2018-10-26 01:49:59'),
(55, 29, 5, 1, 'A Star Is Born', '2018-10-11', '06:07:00', '2018-10-26 02:06:45'),
(56, 0, 3, 1, '<br />\r\n<b>Notice</b>:  Undefined variable: info in <b>C:xampphtdocscineplexfinal_page.php</b> on line <b>83</b><br />\r\n', '0000-00-00', '00:00:00', '2018-10-26 02:23:15'),
(57, 0, 4, 1, '<br />\r\n<b>Notice</b>:  Undefined variable: info in <b>C:xampphtdocscineplexfinal_page.php</b> on line <b>83</b><br />\r\n', '0000-00-00', '00:00:00', '2018-10-26 02:23:15'),
(58, 36, 5, 1, 'Venom', '2018-10-26', '14:05:00', '2018-10-26 04:40:46'),
(59, 36, 6, 1, 'Venom', '2018-10-26', '14:05:00', '2018-10-26 04:40:55'),
(60, 37, 6, 1, 'Venom', '2018-10-26', '17:45:00', '2018-10-26 04:51:50'),
(61, 32, 15, 1, 'Baby Driver', '2018-10-11', '17:45:00', '2018-10-26 04:59:53'),
(62, 32, 16, 1, 'Baby Driver', '2018-10-11', '17:45:00', '2018-10-26 05:35:13'),
(63, 32, 17, 1, 'Baby Driver', '2018-10-11', '17:45:00', '2018-10-26 05:37:45'),
(64, 32, 18, 1, 'Baby Driver', '2018-10-11', '17:45:00', '2018-10-26 05:37:45'),
(65, 32, 19, 1, 'Baby Driver', '2018-10-11', '17:45:00', '2018-10-26 05:55:13'),
(66, 32, 20, 1, 'Baby Driver', '2018-10-11', '17:45:00', '2018-10-26 05:55:13'),
(67, 32, 23, 1, 'Baby Driver', '2018-10-11', '17:45:00', '2018-10-26 05:55:36'),
(68, 32, 24, 1, 'Baby Driver', '2018-10-11', '17:45:00', '2018-10-26 05:55:36'),
(69, 32, 25, 1, 'Baby Driver', '2018-10-11', '17:45:00', '2018-10-26 06:02:32'),
(70, 32, 26, 1, 'Baby Driver', '2018-10-11', '17:45:00', '2018-10-26 06:02:32'),
(71, 32, 3, 1, 'Baby Driver', '2018-10-11', '17:45:00', '2018-10-26 06:04:55'),
(72, 32, 27, 1, 'Baby Driver', '2018-10-11', '17:45:00', '2018-10-26 06:05:44'),
(73, 30, 15, 1, 'Baby Driver', '2018-10-11', '13:45:00', '2018-10-26 06:06:00'),
(74, 29, 7, 1, 'A Star Is Born', '2018-10-11', '06:07:00', '2018-10-26 06:26:16'),
(75, 37, 15, 1, 'Venom', '2018-10-26', '17:45:00', '2018-10-26 06:29:08'),
(76, 36, 8, 1, 'Venom', '2018-10-26', '14:05:00', '2018-10-26 14:45:41'),
(77, 32, 28, 1, 'Baby Driver', '2018-10-11', '17:45:00', '0000-00-00 00:00:00'),
(78, 32, 29, 1, 'Baby Driver', '2018-10-11', '17:45:00', '0000-00-00 00:00:00'),
(79, 32, 11, 7, 'Baby Driver', '2018-10-11', '17:45:00', '0000-00-00 00:00:00'),
(80, 33, 24, 7, 'Baby Driver', '2018-10-18', '13:45:00', '0000-00-00 00:00:00'),
(81, 27, 26, 8, 'The Nun', '2018-10-12', '06:07:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `movie_date_time`
--

CREATE TABLE `movie_date_time` (
  `id` int(11) NOT NULL,
  `date_movie_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_date_time`
--

INSERT INTO `movie_date_time` (`id`, `date_movie_id`, `time_id`) VALUES
(26, 29, 3),
(27, 29, 4),
(28, 30, 3),
(29, 30, 4),
(30, 31, 1),
(31, 31, 2),
(32, 31, 3),
(33, 32, 1),
(34, 32, 3),
(35, 33, 1),
(36, 33, 2),
(37, 33, 3),
(38, 34, 1),
(39, 34, 2),
(40, 34, 3),
(41, 35, 4),
(42, 35, 1),
(43, 35, 2),
(44, 35, 3),
(45, 36, 4),
(46, 36, 3);

-- --------------------------------------------------------

--
-- Table structure for table `movie_list`
--

CREATE TABLE `movie_list` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `rating` int(11) NOT NULL,
  `director` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `cast` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_list`
--

INSERT INTO `movie_list` (`movie_id`, `movie_name`, `image`, `trailer`, `synopsis`, `rating`, `director`, `release_date`, `cast`, `genre`) VALUES
(13, 'The Nun', 'image/Nun.jpg', 'https://www.youtube.com/watch?v=xqlCTjzma7E&list=RDxqlCTjzma7E&start_radio=1', 'When Eddie Brock acquires the powers of a symbiote, he will have to release his alter-ego \"Venom\" to save his life.', 4, 'Ruben Fleischer', '0008-06-06', 'om Hardy, Michelle Williams,Woody Harrelson', 'Action, Horror, Sci-Fi'),
(15, 'Venom', 'image/venom.jpg', 'https://www.youtube.com/watch?v=xLCn88bfW1o', 'When Eddie Brock acquires the powers of a symbiote, he will have to release his alter-ego \"Venom\" to save his life.', 5, 'Ruben Fleischer', '2018-10-11', 'om Hardy, Michelle Williams,Woody Harrelson', 'Action, Horror, Sci-Fi'),
(17, 'Baby Driver', 'image/baby.jpg', 'https://www.youtube.com/watch?v=xqlCTjzma7E&list=RDxqlCTjzma7E&start_radio=1', 'When Eddie Brock acquires the powers of a symbiote, he will have to release his alter-ego \"Venom\" to save his life.', 4, 'Ruben Fleischer', '2018-10-05', 'om Hardy, Michelle Williams,Woody Harrelson', 'Action, Horror, Sci-Fi'),
(18, 'A Star Is Born', 'image/a_star.jpg', 'https://www.youtube.com/watch?v=xqlCTjzma7E&list=RDxqlCTjzma7E&start_radio=1', 'When Eddie Brock acquires the powers of a symbiote, he will have to release his alter-ego \"Venom\" to save his life.', 3, 'Ruben Fleischer', '2018-10-09', 'om Hardy, Michelle Williams,Woody Harrelson', 'Action, Horror, Sci-Fi');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `seat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `seat`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'A5'),
(6, 'A6'),
(7, 'A7'),
(8, 'A8'),
(9, 'A9'),
(10, 'A10'),
(11, 'B1'),
(12, 'B2'),
(13, 'B3'),
(14, 'B4'),
(15, 'B5'),
(16, 'B6'),
(17, 'B7'),
(18, 'B8'),
(19, 'B9'),
(20, 'B10'),
(21, 'C1'),
(22, 'C2'),
(23, 'C3'),
(24, 'C4'),
(25, 'C5'),
(26, 'C6'),
(27, 'C7'),
(28, 'C8'),
(29, 'C9'),
(30, 'C10'),
(31, 'D1'),
(32, 'D2'),
(33, 'D3'),
(34, 'D4'),
(35, 'D5'),
(36, 'D6'),
(37, 'D7'),
(38, 'D8'),
(39, 'D9'),
(40, 'D10'),
(41, 'E1'),
(42, 'E2'),
(43, 'E3'),
(44, 'E4'),
(45, 'E5'),
(46, 'E6'),
(47, 'E7'),
(48, 'E8'),
(49, 'E9'),
(50, 'E10'),
(51, 'F1'),
(52, 'F2'),
(53, 'F3'),
(54, 'F4'),
(55, 'F5'),
(56, 'F6'),
(57, 'F7'),
(58, 'F8'),
(59, 'F9'),
(60, 'F10');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `final_selection_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_tbl`
--

CREATE TABLE `time_tbl` (
  `id` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_tbl`
--

INSERT INTO `time_tbl` (`id`, `time`) VALUES
(1, '13:45:00'),
(2, '14:05:00'),
(3, '17:45:00'),
(4, '06:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `usr_email` varchar(50) NOT NULL,
  `name` varchar(50) CHARACTER SET armscii8 NOT NULL,
  `password` varchar(50) NOT NULL,
  `con_pass` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `usr_email`, `name`, `password`, `con_pass`, `number`) VALUES
(1, 'momin@gmail.com', 'MominAbhi', '1a1dc91c907325c69271ddf0c944bc72', 'pass', '2693875865'),
(3, 'sabujar@gmail.com', 'sabujar', '1a1dc91c907325c69271ddf0c944bc72', '1a1dc91c907325c69271ddf0c944bc72', '98987865'),
(4, 'shalehin@gmail.com', 'shalehin', '1a1dc91c907325c69271ddf0c944bc72', '1a1dc91c907325c69271ddf0c944bc72', '2693875865'),
(5, 'sakib@gmail.com', 'NazmuzSakib', '1a1dc91c907325c69271ddf0c944bc72', '1a1dc91c907325c69271ddf0c944bc72', '84398743'),
(6, 'billu@gmail.com', 'zeroBillu', '1a1dc91c907325c69271ddf0c944bc72', '1a1dc91c907325c69271ddf0c944bc72', '2693875865'),
(7, 'saifulla@gmail.com', 'GMB_Saifulla', '1a1dc91c907325c69271ddf0c944bc72', '1a1dc91c907325c69271ddf0c944bc72', '2693875865'),
(8, 'abc@gmail.com', 'abc', '1a1dc91c907325c69271ddf0c944bc72', '1a1dc91c907325c69271ddf0c944bc72', '2693875865');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coming_movie`
--
ALTER TABLE `coming_movie`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `date_movie`
--
ALTER TABLE `date_movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date_tbl`
--
ALTER TABLE `date_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_selection`
--
ALTER TABLE `final_selection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_date_time`
--
ALTER TABLE `movie_date_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_list`
--
ALTER TABLE `movie_list`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_tbl`
--
ALTER TABLE `time_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coming_movie`
--
ALTER TABLE `coming_movie`
  MODIFY `cm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `date_movie`
--
ALTER TABLE `date_movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `date_tbl`
--
ALTER TABLE `date_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `final_selection`
--
ALTER TABLE `final_selection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `movie_date_time`
--
ALTER TABLE `movie_date_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `movie_list`
--
ALTER TABLE `movie_list`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_tbl`
--
ALTER TABLE `time_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
