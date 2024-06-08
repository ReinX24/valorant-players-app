-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 09:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valorant_players_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `in_game_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `team` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `join_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `in_game_name`, `name`, `team`, `age`, `region`, `join_date`) VALUES
(1, 'Asuna', 'Peter Mazuryk', '100 Thieves', 20, 'North America', '2020-10-02'),
(2, 'bang', 'Sean Christian Bezerra', '100 Thieves', 20, 'North America', '2022-04-14'),
(3, 'Cryocells', 'Matthew Dylan Panganiban', '100 Thieves', 21, 'North America', '2022-09-29'),
(4, 'eeiu', 'Daniel Vucenovic', '100 Thieves', 23, 'North America', '2023-11-01'),
(5, 'Boostio', 'Kelden Elric Pupello', '100 Thieves', 23, 'North America', '2024-12-08'),
(6, 'zekken', 'Zachary Jude Patrone', 'Sentinels', 19, 'North America', '2022-10-05'),
(7, 'Sacy', 'Gustavo Henrique Rossi da Silva', 'Sentinels', 26, 'North America', '2022-10-15'),
(8, 'TenZ', 'Tyson Van Ngo', 'Sentinels', 23, 'North America', '2023-05-09'),
(9, 'johnqt ', 'Mohamed Amine Ouarid', 'Sentinels', 25, 'North America', '2023-09-13'),
(10, 'Zellsis', 'Jordan Montemurro', 'Sentinels', 26, 'North America', '2024-02-09'),
(11, 'curry', 'Rahul Nemani', 'Sentinels', 21, 'North America', '2024-03-07'),
(12, 'Meteor', 'Kim Tae-o', 'Gen. G', 24, 'Korea', '2022-10-21'),
(13, 't3xture', 'Kim Na-ra', 'Gen. G', 24, 'Korea', '2023-09-26'),
(14, 'Lakia', 'Kim Jong-min', 'Gen. G', 23, 'Korea', '2023-10-25'),
(15, 'Munchkin', 'Byeon Sang-beom', 'Gen. G', 26, 'Korea', '2023-11-09'),
(16, 'Karon', 'Kim Won-tae', 'Gen. G', 21, 'Korea', '2023-11-23'),
(17, 'd4v41', 'Ahmad Khalish Rusyaidee bin Nordin', 'Paper Rex', 25, 'Asia-Pacific', '2021-02-08'),
(18, 'f0rsakeN', 'Jason Susanto', 'Paper Rex', 20, 'Asia-Pacific', '2021-02-08'),
(19, 'mindfreak', 'Alessandro Aaron Leonhart', 'Paper Rex', 24, 'Asia-Pacific', '2021-02-08'),
(20, 'something', 'Ilya Petrov', 'Paper Rex', 22, 'Asia-Pacific', '2023-03-22'),
(21, 'Jinggg', 'Wang Jing Jie', 'Paper Rex', 20, 'Asia-Pacific', '2024-03-29'),
(22, 'Boaster', 'Jake Howlett', 'Fnatic', 29, 'Europe', '2021-02-03'),
(23, 'Derke', 'Nikita Sirmitev', 'Fnatic', 21, 'Europe', '2021-04-08'),
(24, 'Alfajer', 'Emir Ali Beder', 'Fnatic', 18, 'Europe', '2022-05-09'),
(25, 'Leo', 'Leo Jannesson', 'Fnatic', 20, 'Europe', '2022-10-16'),
(26, 'Chronicle', 'Timofey Khromov', 'Fnatic', 21, 'Europe', '2022-11-10'),
(27, 'Boo', 'Ričardas Lukaševičius', 'Team Heretics', 26, 'Europe', '2022-11-10'),
(28, 'benjyfishy', 'Benjy David Fish', 'Team Heretics', 20, 'Europe', '2023-07-12'),
(29, 'MiniBoo', 'Dominykas Lukaševičius', 'Team Heretics', 18, 'Europe', '2023-10-10'),
(30, 'RieNs', 'Enes Ecirli', 'Team Heretics', 19, 'Europe', '2023-10-10'),
(31, 'Wo0t', 'Mert Alkan', 'Team Heretics', 18, 'Europe', '2023-10-10'),
(32, 'paTiTek', 'Patryk Fabrowski', 'Team Heretics', 24, 'Europe', '2024-05-17'),
(33, 'JonahP', 'Jonah Pulice', 'G2 Esports', 24, 'North America', '2023-09-22'),
(34, 'trent', 'Trent Cairns', 'G2 Esports', 19, 'North America', '2023-09-22'),
(35, 'valyn', 'Jacob Batio', 'G2 Esports', 21, 'North America', '2023-09-22'),
(36, 'leaf', 'Nathan Orf', 'G2 Esports', 20, 'North America', '2023-10-25'),
(37, 'icy', 'Jacob Lange', 'G2 Esports', 21, 'North America', '2024-04-04'),
(38, 'crashies', 'Austin Roberts', 'NRG', 26, 'North America', '2022-11-09'),
(39, 'Victor', 'Victor Wong', 'NRG', 27, 'North America', '2022-11-10'),
(40, 'Ethan', 'Ethan Cole Arnold', 'NRG', 24, 'North America', '2023-12-23'),
(41, 'Demon1', 'Max Mazanov', 'NRG', 21, 'North America', '2024-05-25'),
(42, 'FNS', 'Pujan Mehta', 'NRG', 32, 'North America', '2024-05-30'),
(43, 's0m', 'Sam Oh', 'NRG', 22, 'North America', '2024-05-30'),
(44, 'JessieVash', 'Jessie Cristy Angeles Cuyco', 'Team Secret', 34, 'Asia-Pacific', '2021-09-09'),
(45, 'Jremy', 'Jeremy Gagarra Cabrera', 'Team Secret', 19, 'Asia-Pacific', '2022-02-22'),
(46, 'invy', 'Adrian Jiggs Aisa Reyes', 'Team Secret', 19, 'Asia-Pacific', '2022-12-18'),
(47, 'NDG', 'Noel De Guia', 'Team Secret', 19, 'Asia-Pacific', '2023-10-23'),
(48, 'Dispenser', 'Kevin Te', 'Team Secret', 29, 'Asia-Pacific', '2021-09-09'),
(49, 'Wild0reoo', 'Brheyanne Christ Reyes', 'Team Secret', 21, 'Asia-Pacific', '2024-05-23'),
(50, 'ANGE1', 'Kyrylo Karasov', 'Natus Vincere', 34, 'Europe', '2022-11-08'),
(51, 'SUYGETSU', 'Dmitry Ilyushin', 'Natus Vincere', 21, 'Europe', '2022-11-08'),
(52, 'Shao', 'Andrey Kiprsky', 'Natus Vincere', 24, 'Europe', '2022-11-08'),
(53, 'Zyppan', 'Pontus Eek', 'Natus Vincere', 21, 'Europe', '2022-11-08'),
(54, 'ardiis', 'Ardis Svarenieks', 'Natus Vincere', 26, 'Europe', '2023-10-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
