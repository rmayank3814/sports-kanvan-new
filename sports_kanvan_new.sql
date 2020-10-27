-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 07:13 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_kanvan_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `id` int(11) NOT NULL,
  `doctor_care` varchar(5) NOT NULL,
  `physical_examination` varchar(30) NOT NULL,
  `stress_test` varchar(5) NOT NULL,
  `result` varchar(5) DEFAULT NULL,
  `medication` varchar(5) NOT NULL,
  `hospitalized` varchar(5) NOT NULL,
  `smoke` varchar(5) NOT NULL,
  `pregnant` varchar(5) NOT NULL,
  `drink_alcohal` varchar(5) NOT NULL,
  `stress_level` varchar(5) NOT NULL,
  `moderately` varchar(5) NOT NULL,
  `high_bp` varchar(5) NOT NULL,
  `cholesterol` varchar(5) NOT NULL,
  `diabetes` varchar(5) NOT NULL,
  `siblings` varchar(5) NOT NULL,
  `heart_attack` varchar(5) NOT NULL,
  `stroke` varchar(5) NOT NULL,
  `heart_disease` varchar(5) NOT NULL,
  `rheumatic` varchar(5) NOT NULL,
  `murmur` varchar(5) NOT NULL,
  `chest_pain` varchar(5) NOT NULL,
  `palpitation` varchar(5) NOT NULL,
  `lightheadedness` varchar(5) NOT NULL,
  `breath` varchar(5) NOT NULL,
  `cramping` varchar(5) NOT NULL,
  `emphysema` varchar(5) NOT NULL,
  `metabolic` varchar(5) NOT NULL,
  `epilepsy` varchar(5) NOT NULL,
  `astma` varchar(5) NOT NULL,
  `back_pain` varchar(5) NOT NULL,
  `joint_pain` varchar(5) NOT NULL,
  `muscle_pain` varchar(5) NOT NULL,
  `sign_name` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`id`, `doctor_care`, `physical_examination`, `stress_test`, `result`, `medication`, `hospitalized`, `smoke`, `pregnant`, `drink_alcohal`, `stress_level`, `moderately`, `high_bp`, `cholesterol`, `diabetes`, `siblings`, `heart_attack`, `stroke`, `heart_disease`, `rheumatic`, `murmur`, `chest_pain`, `palpitation`, `lightheadedness`, `breath`, `cramping`, `emphysema`, `metabolic`, `epilepsy`, `astma`, `back_pain`, `joint_pain`, `muscle_pain`, `sign_name`, `date`) VALUES
(1, 'no', 'sdfsdef', 'no', NULL, 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'aakash', '2020-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `ptc`
--

CREATE TABLE `ptc` (
  `id` int(11) NOT NULL,
  `sess_id` int(11) NOT NULL,
  `investment` bigint(20) NOT NULL,
  `method` text NOT NULL,
  `print` varchar(50) NOT NULL,
  `sign` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ptc`
--

INSERT INTO `ptc` (`id`, `sess_id`, `investment`, `method`, `print`, `sign`, `date`) VALUES
(1, 293, 12500, 'card', 'vikas', 'vikas', '2020-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `tfa`
--

CREATE TABLE `tfa` (
  `id` int(11) NOT NULL,
  `sess_id` int(11) DEFAULT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `race` float NOT NULL,
  `fat` float NOT NULL,
  `biceps` float NOT NULL,
  `upper` float NOT NULL,
  `mid` float NOT NULL,
  `buttocks` float NOT NULL,
  `hips` float NOT NULL,
  `waist` float NOT NULL,
  `chest` float NOT NULL,
  `calves` float NOT NULL,
  `handed` float NOT NULL,
  `posture` float NOT NULL,
  `body` float NOT NULL,
  `parent` float NOT NULL,
  `loss` float NOT NULL,
  `problem` float NOT NULL,
  `rockport` float NOT NULL,
  `step` float NOT NULL,
  `resting` float NOT NULL,
  `cardio` float NOT NULL,
  `strength` float NOT NULL,
  `flexibility` float NOT NULL,
  `devoted` float NOT NULL,
  `current` float NOT NULL,
  `energy` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tfa`
--

INSERT INTO `tfa` (`id`, `sess_id`, `height`, `weight`, `race`, `fat`, `biceps`, `upper`, `mid`, `buttocks`, `hips`, `waist`, `chest`, `calves`, `handed`, `posture`, `body`, `parent`, `loss`, `problem`, `rockport`, `step`, `resting`, `cardio`, `strength`, `flexibility`, `devoted`, `current`, `energy`) VALUES
(3, 293, 6.5, 25, 34, 33, 31, 2.3, 32, 22, 23, 223, 321, 2323, 3, 312, 11, 132, 231, 212, 2, 2, 2, 2, 2, 22, 2, 22, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `emergency` bigint(20) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `date`, `mobile`, `email`, `dob`, `age`, `emergency`, `relationship`, `address`, `gender`, `password`) VALUES
(293, 'Aakash shishodia', '2020-10-25', 9643293056, 'aakash143only4u@gmail.com', '1998-11-15', 22, 9784377847, 'self', 'A215, Beta-1, Greater Noida, Gautam Buddha Nagar, UP', 'Male', '5eaef5538992f929bb92138bf4011f33'),
(294, 'Vikas Shishodia', '2020-10-07', 9643293056, 'vikas@gmail.com', '2020-09-27', 19, 9784377847, 'bro', ' Gautam Buddha Nagar, UP', 'Male', 'd0ff951631904f9e6a85156305d08054');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptc`
--
ALTER TABLE `ptc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tfa`
--
ALTER TABLE `tfa`
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
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ptc`
--
ALTER TABLE `ptc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tfa`
--
ALTER TABLE `tfa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
