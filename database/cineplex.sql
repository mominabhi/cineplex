-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 07:11 PM
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
-- Table structure for table `coming_movie`
--

CREATE TABLE `coming_movie` (
  `cm_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `movie_image` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coming_movie`
--

INSERT INTO `coming_movie` (`cm_id`, `movie_name`, `release_date`, `movie_image`, `trailer`) VALUES
(1, 'venom', '2018-10-11', 'image/lulupapa.jpg', 'https://www.youtube.com/watch?v=xqlCTjzma7E&list=RDxqlCTjzma7E&start_radio=1');

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
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `show1` time NOT NULL,
  `show2` time NOT NULL,
  `show3` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`id`, `date`, `movie_name`, `show1`, `show2`, `show3`) VALUES
(1, '2018-10-05', 'Venom', '24:09:00', '15:08:00', '13:08:00'),
(2, '2018-10-03', 'The Nun', '15:05:00', '16:02:00', '09:05:00'),
(4, '2018-10-21', 'Venom', '15:11:00', '13:05:00', '09:00:00'),
(5, '2018-10-19', 'Venom', '19:00:00', '09:00:00', '06:00:00'),
(6, '2018-10-20', 'Baby Driver', '12:00:00', '10:00:00', '10:00:00'),
(7, '2018-10-19', 'A Star is Born', '17:00:00', '14:00:00', '13:00:00'),
(8, '2018-10-19', 'A Star Is Born', '01:06:00', '06:06:00', '05:06:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coming_movie`
--
ALTER TABLE `coming_movie`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `movie_list`
--
ALTER TABLE `movie_list`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coming_movie`
--
ALTER TABLE `coming_movie`
  MODIFY `cm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movie_list`
--
ALTER TABLE `movie_list`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `showtime`
--
ALTER TABLE `showtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
