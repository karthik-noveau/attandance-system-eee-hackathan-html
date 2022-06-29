-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 10:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eee`
--

-- --------------------------------------------------------

--
-- Table structure for table `scanned_students`
--

CREATE TABLE `scanned_students` (
  `id` int(4) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scanned_students`
--

INSERT INTO `scanned_students` (`id`, `roll_no`, `reg_no`, `name`) VALUES
(1, '1', '62130906001', 'Aarthy M'),
(2, '2', '62130906002', 'Ajay Aravinth M'),
(4, '4', '62130906004', 'Akash B'),
(5, '5', '62130906005', 'Akash S'),
(6, '6', '62130906006', 'Arun R'),
(7, '7', '62130906007', 'Balaji K'),
(8, '8', '62130906008', 'Barathkumar P'),
(9, '9', '62130906009', 'Boomika V G'),
(10, '10', '62130906010', 'Brundhalakshmi A'),
(11, '11', '62130906011', 'Deva Dharshini B'),
(13, '13', '62130906013', 'Dhanasekaran S A'),
(14, '14', '62130906014', 'Dhanesh K C'),
(15, '15', '62130906015', 'Dhanya R'),
(16, '16', '62130906016', 'Dharanidharan S A'),
(17, '17', '62130906017', 'Dineshkumar G'),
(18, '18', '62130906018', 'Gaudam E'),
(19, '19', '62130906019', 'Gobika S'),
(20, '20', '62130906020', 'Gokul R'),
(21, '21', '62130906021', 'Gokulnath S'),
(22, '22', '62130906022', 'Gowsik G'),
(23, '23', '62130906023', 'Guna K V'),
(24, '24', '62130906024', 'Guru Prasaad S V'),
(25, '25', '62130906025', 'Hariharan V M'),
(26, '26', '62130906026', 'Harish R'),
(27, '27', '62130906027', 'Hemachandran V'),
(28, '28', '62130906028', 'Hemala V'),
(29, '29', '62130906029', 'Hemanithi J'),
(30, '30', '62130906030', 'Jaimisal J S'),
(31, '31', '62130906031', 'jawahar M'),
(32, '32', '62130906032', 'Jayanthi R'),
(34, '34', '62130906034', 'Karthick C'),
(35, '35', '62130906035', 'Karthik B'),
(36, '36', '62130906036', 'Kavin M'),
(37, '37', '62130906037', 'Kavin P'),
(38, '38', '62130906038', 'Kavin P'),
(39, '39', '62130906039', 'Kavipriya R'),
(40, '40', '62130906040', 'Kaviya S'),
(41, '41', '62130906041', 'Keerthana B'),
(42, '42', '62130906042', 'Kiruba M'),
(43, '43', '62130906043', 'Kiruthika B'),
(45, '45', '62130906045', 'Kowsick K'),
(46, '46', '62130906046', 'Kowsika P'),
(47, '47', '62130906047', 'Kumaresan B'),
(48, '48', '62130906048', 'Latha V'),
(49, '49', '62130906049', 'Madhushree S'),
(50, '50', '62130906050', 'Mahashree S'),
(51, '51', '62130906051', 'Manish S'),
(52, '52', '62130906052', 'Manisha K'),
(53, '53', '621309106302', 'Anandhakrishnan B'),
(54, '54', '621309106303', 'Balaji K'),
(55, '55', '621309106305', 'Guna R'),
(56, '56', '621309106306', 'Hariharan K'),
(57, '57', '621309106307', 'Javith B'),
(58, '58', '621309106309', 'Karthick M'),
(59, '59', '621309106311', 'Kishore S D'),
(60, '60', '621309106312', 'Nithyananthan N'),
(61, '61', '621309106316', 'Sundara Moorthi M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scanned_students`
--
ALTER TABLE `scanned_students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scanned_students`
--
ALTER TABLE `scanned_students`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
