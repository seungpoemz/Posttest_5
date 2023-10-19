-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 09:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest5`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `judul_film` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `tgl_rilis` varchar(50) NOT NULL,
  `studio_produksi` varchar(50) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `status_film` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul_film`, `genre`, `tgl_rilis`, `studio_produksi`, `sinopsis`, `trailer`, `status_film`) VALUES
(4, ' Transformers: Rise of the Beasts', 'Action, Sci-Fic, Adventure, Fantasy', 'June 7, 2023', 'Paramount Pictures', 'Optimus Prime and the Autobots take on their biggest challenge yet. When a new threat capable of destroying the entire planet emerges, they must team up with a powerful faction of Transformers known as the Maximals to save Earth.', 'https://youtu.be/itnqEauWQZM', 'Sedang Tayang'),
(5, 'Wonka', 'Comedy, Musical, Adventure, Fantasy', 'December 5, 2023', 'Warner Bros', 'Focusing on a young Willy Wonka and how he came to meet the Oompa-Loompas on one of his earliest adventures.', 'https://youtu.be/otNh9bTjXWg', 'Coming Soon!'),
(10, 'Spy x Family Code: White', 'Action, Comedy', 'December 22, 2023', 'WIT Studio, CloverWorks', 'Loid Forgers latest mission requires the assistance of Yor and Anya. Anya learns to cook traditional dishes with Melemele for the missions success. During a journey to Frigis, Anya discovers a secret suitcase linked to world safety. ', 'https://youtu.be/yG_xbqL9Fss', 'Coming Soon!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
