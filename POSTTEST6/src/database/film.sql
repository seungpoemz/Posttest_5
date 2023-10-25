-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 12:33 PM
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
  `status_film` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul_film`, `genre`, `tgl_rilis`, `studio_produksi`, `sinopsis`, `trailer`, `status_film`, `gambar`) VALUES
(33, 'Transformers  Rise of the Beasts', 'Sci_Fic, Action, Fantasy', 'June 7, 2023', 'Paramount Pictures', 'Optimus Prime and the Autobots take on their biggest challenge yet. When a new threat capable of destroying the entire planet emerges, they must team up with a powerful faction of Transformers known as the Maximals to save Earth.', 'itnqEauWQZM', 'Sedang Tayang', '../assets/2023-10-23 Transformers  Rise of the Beasts.jpg'),
(34, 'Wonka', 'Fantasy, Adventure', 'December 15, 2023', 'Warner Bros', 'Focusing on a young Willy Wonka and how he came to meet the Oompa-Loompas on one of his earliest adventures.', 'otNh9bTjXWg', 'Coming Soon!', '../assets/2023-10-23 Wonka.jpg'),
(35, 'Petualangan Sherina 2', 'Adventure, Comedy, Musical', 'September 28, 2023', 'Miles Films, Base Entertaiment', 'Petualangan Sherina 2 menceritakan dua tokoh utama yaitu Sherina (Sherina) dan Sadam (Derby Romero) yang telah lama berpisah sejak kecil. Akhirnya mereka bedua dipertemukan kembali di hutan hujan tropis dan akan memulai berpetualang menghadapi rintangan.', 'nAx3GaOE5xI', 'Sedang Tayang', '../assets/2023-10-23 Petualangan Sherina 2.png'),
(37, 'The Marvels', 'Action, Sci-Fic, Fantasy, Adventure', 'November 10, 2023', 'Marvel Studios', 'Carol Danvers, aka Captain Marvel, has reclaimed her identity from the tyrannical Kree and taken revenge on the Supreme Intelligence. However, unintended consequences see her shouldering the burden of a destabilized universe. When her duties send her to a', 'wS_qbDztgVY', 'Coming Soon!', 'The Marvels.jpg'),
(47, 'A Haunting in Venice', 'Mystery, Thriller, Drama', 'September 13, 2023', '20th Century Videos', 'Now retired and living in self imposed exile in the worlds most glamorous city, Poirot reluctantly attends a seance at a decaying, haunted palazzo. He soons gets thrust into a sinister world of shadows and secrets when one of the guests is murdered.', 'yEddsSwweyE', 'Sedang Tayang', '2023-10-23 A Haunting in Venice.jpg'),
(50, 'PAW Patrol The Mighty Movie', 'Animation, Adventure', 'September 29, 2023', 'Paramount Pictures', 'The PAW Patrol pups magically gain superpowers after a meteor strikes Adventure City. However, things take a turn for the worse when Humdinger and a mad scientist steal their powers and turn themselves into supervillains. As the team springs into action t', 'UDgjJ9XzgHk', 'Sedang Tayang', '../assets/2023-10-24 PAW Patrol The Mighty Movie.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
