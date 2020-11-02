-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 08:21 AM
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
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `id` int(11) NOT NULL,
  `sess_id` int(11) NOT NULL,
  `print2` varchar(100) NOT NULL,
  `sign2` varchar(100) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`id`, `sess_id`, `print2`, `sign2`, `name2`, `date`) VALUES
(1, 293, 'aakash', 'aakash', 'aakash', '2020-09-28 18:30:00'),
(2, 297, 'vikas', 'vikas', 'Vikas Rana', '2020-11-02 06:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `id` int(11) NOT NULL,
  `sess_id` int(11) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `full_name1` varchar(100) NOT NULL,
  `contact1` bigint(20) NOT NULL,
  `relationship1` text NOT NULL,
  `email1` varchar(100) NOT NULL,
  `full_name2` varchar(100) NOT NULL,
  `contact2` bigint(20) NOT NULL,
  `relationship2` text NOT NULL,
  `email2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`id`, `sess_id`, `name1`, `full_name1`, `contact1`, `relationship1`, `email1`, `full_name2`, `contact2`, `relationship2`, `email2`) VALUES
(1, 293, 'aakash', 'sunny', 7467034417, 'abc', 'sunny@gmail.com', 'vikas', 6395840017, 'bro', 'vikas@gmail.com'),
(2, 297, 'Aakash rana', 'Aakash shishodia', 9643293056, 'bro', 'aakash143only4u@gmail.com', 'Aakash shishodia', 9643293056, 'bro', 'aakash143only4u@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `id` int(11) NOT NULL,
  `sess_id` int(11) NOT NULL,
  `doctor_care` varchar(5) NOT NULL,
  `physical_examination` date NOT NULL,
  `stress_test` varchar(5) NOT NULL,
  `result` varchar(10) DEFAULT NULL,
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
  `sign` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`id`, `sess_id`, `doctor_care`, `physical_examination`, `stress_test`, `result`, `medication`, `hospitalized`, `smoke`, `pregnant`, `drink_alcohal`, `stress_level`, `moderately`, `high_bp`, `cholesterol`, `diabetes`, `siblings`, `heart_attack`, `stroke`, `heart_disease`, `rheumatic`, `murmur`, `chest_pain`, `palpitation`, `lightheadedness`, `breath`, `cramping`, `emphysema`, `metabolic`, `epilepsy`, `astma`, `back_pain`, `joint_pain`, `muscle_pain`, `sign`, `date`) VALUES
(2, 297, 'yes', '2020-11-02', 'yes', 'abnormal', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'vikas', '2020-11-02 06:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `ptc`
--

CREATE TABLE `ptc` (
  `id` int(11) NOT NULL,
  `sess_id` int(11) NOT NULL,
  `investment` bigint(20) NOT NULL,
  `method` text NOT NULL,
  `print1` varchar(50) NOT NULL,
  `sign1` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ptc`
--

INSERT INTO `ptc` (`id`, `sess_id`, `investment`, `method`, `print1`, `sign1`, `date`) VALUES
(1, 293, 12321, 'dffdfdfd', 'sdfsfd', 'asdadas', '2020-08-29 18:30:00'),
(2, 297, 12324, 'card', 'vikas', 'vikas', '2020-11-02 06:28:41');

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
(3, 293, 6.5, 25, 34, 33, 31, 2.3, 32, 22, 23, 223, 321, 2323, 3, 312, 11, 132, 231, 212, 2, 2, 2, 2, 2, 22, 2, 22, 2),
(4, 297, 5.5, 70.5, 34, 12, 232, 2.3, 32, 22, 23, 223, 32, 2323, 3, 312, 11, 132, 32, 212, 2, 2, 2, 2, 2, 22, 2, 22, 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mobile` bigint(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `emergency` bigint(20) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(250) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `profile_image` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `date`, `mobile`, `email`, `dob`, `emergency`, `address1`, `address2`, `gender`, `password`, `shift`, `profile_image`) VALUES
(297, 'Aakash', 'shishodia', '2020-11-02 06:42:34', 9643293056, 'aakash@gmail.com', '2020-10-08', 9784377847, 'A215, Beta-1, Greater Noida, ', 'Gautam Buddha Nagar, UP', 'Male', '79ebc7b996ea04eee32c744e4afb950c', 'Morning(5am-11am)', 'pink-MODEL9.jpg'),
(298, 'Aakash', 'shishodia', '2020-10-28 14:44:05', 9643293056, 'aakash143onlu@gmail.com', '2020-10-06', 9784377847, 'A215, Beta-1, Greater Noida, Gautam Buddha Nagar, UP', '', 'Male', '79ebc7b996ea04eee32c744e4afb950c', 'Morning(5am-11am)', ''),
(299, 'aakash', 'raghav', '2020-10-29 17:05:07', 9876543212, 'mayank1234@gmail.com', '2007-10-29', 9784377847, 'Village-Sapnawat ,', 'Block- Dhaulana', 'Male', 'addd2ebbdd67fe6536084542f427b431', 'Morning(5am-11am)', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agreement`
--
ALTER TABLE `agreement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `agreement`
--
ALTER TABLE `agreement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ptc`
--
ALTER TABLE `ptc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tfa`
--
ALTER TABLE `tfa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
