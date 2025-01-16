-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 03:41 AM
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
-- Database: `student_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_list`
--

CREATE TABLE `students_list` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `civil_status` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_list`
--

INSERT INTO `students_list` (`id`, `first_name`, `middlename`, `surname`, `birthdate`, `age`, `sex`, `address`, `contact_no`, `email`, `civil_status`, `nationality`, `religion`, `course`, `date_added`) VALUES
(1, 'Mia', 'Lucero', 'Sevilla', '02/21/2004', '20', 'Female', 'Saban, Oas, Albay', '09566775188', 'miya6524@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 09:23:44'),
(2, 'Khaye', 'Blazo', 'Benitez', '01/31/2004', '20', 'Female', 'Pantao, Libon, Albay', '09512118629', 'khayebenitez49@gmail', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 09:27:23'),
(3, 'Exequiel', 'Ranara', 'Briagas', '11/09/2003', '20', 'Male', 'Saban, Oas, Albay', '09267041055', 'exequielbriagas@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 09:30:52'),
(4, 'Jan Hericka', 'Abunda', 'Orbase', '07/01/2003', '21', 'Female', 'Calzada, Guinobatan, Albay', '09171522474', 'janherickaorbase@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 09:41:27'),
(5, 'Erica', 'Repuyan', 'Revilla', '07/31/2003', '21', 'Female', 'Tobog, Oas, Albay', '09533277869', 'revillaericka1@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 09:41:27'),
(6, 'Junelito', 'Miranda', 'Sabareza', '12/09/2000', '23', 'Male', 'Polangui, Albay', '09158380148', 'junelitosabareza@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 09:50:23'),
(7, 'Rancel', 'Matza', 'Duran', '01/01/2004', '20', 'Male', 'Ponso, Polangui, Albay', '09500823412', 'rancelduran@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 09:50:23'),
(8, 'Kane', 'Samson', 'Sapiera', ' 08/26/2003', '21', 'Male', 'Ponso, Polangui, Albay', '  09107287307', 'sapierakane12@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 09:50:23'),
(9, 'Princess Aira', 'Brondial', 'Layosa', '06/21/2003', '21', 'Female', 'Calzada, Guinobatan, Albay', '09777653019', 'layosaprincessaira@gmail.com', 'Single', 'Filipino', 'Protestant', 'BS Information Technology', '2024-11-27 09:53:09'),
(10, 'Clarice Ann', 'Florin', 'Sagaysay', '11/08/2004', '20', 'Female', 'Ubaliw, Polangui, Albay', '09515172355', 'clariceannsagaysay@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 09:53:09'),
(11, 'Joshua', 'Arabe', 'Gumbao', '05/04/2004', '20', 'Male', 'San Antonio, Tabaco City, Albay', ' 09104932991', 'gumbaojoshua7@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 09:59:06'),
(12, 'Erica', 'Mordido', 'Reforsado', '12/15/2003', '20', 'Female', 'Alomon, Polangui, Albay', '09301587004', 'reforsadoerica15@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 09:59:06'),
(13, 'Julie', 'Pernecita', 'Romposon', '07/14/2004', '20', 'Female', 'Pantao, Libon, Albay', '09197942744', 'julieromposon033@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 10:02:51'),
(14, 'Sandara', 'Selga', 'Morcozo', '06/06/2004', '20', 'Female', 'Alomon, Polangui, Albay', '09511079109', 'mocozosandara@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 10:02:51'),
(15, 'Adeline Jolie', 'Vargas', 'Gomez', '07/19/2004', '20', 'Female', 'Centro Occidental, Polangui, Albay', '09673521640', 'ajvg2022-5796-81140@bicol-u.edu.ph', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 10:06:12'),
(16, 'Edelyn', 'Torres', 'Jacob', '08/01/2004', '20', 'Female', 'Alomon, Polangui, Albay', '09466381747', 'edelynjacob5@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-27 10:06:12'),
(17, 'Jasmin', 'Mabesa', 'Sawali', '10/13/2004', '20', 'Female', 'Burabod, Libon, Albay', '09271916007', 'jasminsawali13@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 01:31:51'),
(18, 'Alyssa', 'Rito', 'Sumalpong', '02/15/2004', '20', 'Female', 'San Agustin, Oas, Albay', '09454499583', 'alyssasumalpong12@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 01:31:51'),
(19, 'Ma. Fatima', 'Lita', 'Cardel', '12/13/2003', '20', 'Female', 'San Vicente, Libon, Albay', '09959682288', 'mariafatimacardel@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 01:35:24'),
(20, 'Christian', 'Ella', 'Factor', '01/01/2004', '20', 'Male', 'San Miguel, Libon, Albay', '09454499583', 'factorchristianmarlon@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 01:35:24'),
(21, 'Alyssa Gwynn', 'Bagagnan', 'Namora', '06/24/2004', '20', 'Female', 'Tres Marias, Donsol, Sorsogon', '09154074462', 'agbn-2022-7673-54589@bicol-u.edu.ph', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 01:40:21'),
(22, 'Angelie Nerryle', 'Bonso', 'Curioso', '07/12/2003', '20', 'Female', 'Namantao, Daraga, Albay', '09089326546', 'angelienerryle@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 01:40:21'),
(23, 'Qaina Mandella', 'Caleja', 'Lozada', '11/18/2003', '20', 'Female', 'Lomacao, Guinobatan, Albay', '09687729409', 'qainamandellalozada182gmail.com', 'Single', 'Filipino', 'INC', 'BS Information Technology', '2024-11-28 01:45:03'),
(24, 'Simone Andreas', 'Musa', 'Nate', '07/20/2004', '20', 'Male', 'Tinago, Ligao, Albay', '09562244069', 'samnate9@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 01:45:03'),
(25, 'Jeth Roy', 'Lipa', 'Delos Santos', '05/24/2004', '20', 'Male', 'Linao, Libon, Albay', '09167012384', 'jethroyd@gmail.com', 'Single', 'Filipino', 'Born Again', 'BS Information Technology', '2024-11-28 01:49:07'),
(26, 'Rheyvin', 'Escabusa', 'Orogo', '11/22/2002', '21', 'Male', 'San Francisco, Guinobatan, Albay', '09773825163', 'rheyvinorogo@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 01:49:07'),
(27, 'Leander', 'Osila', 'Pines', ' 12/20/2003', '20', 'Male', 'Bonbon, Libon, Albay', '09686258456', 'leandeer20@gmail.com', 'Single', 'Filipino', 'Born Again', 'BS Information Technology', '2024-11-28 01:52:59'),
(28, 'Aleya Mae', 'Tamayo', 'Garma', '07/28/2004', '20', 'Female', 'Travesia, Guinobatan, Albay', '09630415084', 'aleyamaegarma28@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 01:52:59'),
(29, 'Jake', 'Saquido', 'Mariscotes', '12/05/2002', '21', 'Male', 'Centro Oriental, Polangui, Albay', '09509742001', 'jakimariscotes@gmail.com', 'Single', 'Filipino', 'Born Again', 'BS Information Technology', '2024-11-28 01:56:24'),
(30, 'Alyssa Fe', 'Ragual', 'Casuco', '06/08/2004', '20', 'Female', 'Itaran, Polangui, Albay', '09001196934', 'allysacasuco@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 01:56:24'),
(31, 'Cheriz Bianca', 'Jaucian', 'Morco', '07/21/2004', '20', 'Female', 'San Francisco, Guinobatan, Albay', '09927993704', 'cherisublache@gmail.com', 'Single', 'Filipino', 'Born Again', 'BS Information Technology', '2024-11-28 02:00:11'),
(32, 'Christian Jake', 'Paliza', 'Solano', '07/18/2002', '22', 'Male', 'Morera, Guinobatan, Albay', '09850611224', 'Cjsolano@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 02:00:11'),
(33, 'Rommel', 'Grebialde', 'Nicol', '10/10/2004', '19', 'Male', 'San Rafael, Guinobatan, Albay', '09706565358', 'rommelnicol769@gmail.com', 'Single', 'Filipino', 'Born Again', 'BS Information Technology', '2024-11-28 02:04:27'),
(34, 'Mika Ella Mae', 'Millena', 'Nuyles', '07/23/2003', '21', 'Female', 'Pilar, Sorsogon', '09159954949', 'memmn2022-1160-98124@bicol-u.edu.ph', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 02:14:02'),
(35, 'Christine', 'Ganancial', 'Boringot', '08/03/2004', '20', 'Female', 'Tabaco, City', '09773727409', 'cgbn2022-9559-92423@bicol-u.edu.ph', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 02:14:02'),
(36, 'John Omar', 'Cuentas', 'Clutario', '06/22/2003', '21', 'Male', 'Oyama, Tiwi, Albay', '09515276182', 'co2maykillu@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 02:17:26'),
(37, 'Mark John', 'Orlain', 'Oliva', '02/27/2004', '20', 'Male', 'Guinobatan, Albay', '09914815998', 'markjohnoliva@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 02:17:26'),
(38, 'Hon Ezekiel', 'Noble', 'Bognalbal', '05/18/2004', '20', 'Male', 'Quinastillojan, Tabaco City', '09509296565', 'honezekielbognalbal18@gmail.com', 'Single', 'Filipino', 'MGCI', 'BS Information Technology', '2024-11-28 02:26:10'),
(39, 'Joshua', 'Arenes', 'Obstaculo', '07/21/2003', '21', 'Male', 'Iraya, Guinobatan, Albay', '09272781132', 'joshobstaz@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 02:26:10'),
(40, 'John Jacob', 'Orbase', 'Mira', ' 05/31/2002', '21', 'Male', 'Pantao, Libon, Albay', '09480503073', 'johnjacoborbase.mira@bicol-u.edu.ph', 'Single ', 'Filipino', 'Roman Catholic', 'BS Information Technology', '2024-11-28 02:29:03'),
(41, 'Maxpein', 'Del Valle', 'Enrile', '2004-05-10', '21', 'Female', 'Quezon, Ctiy', '0838574456', 'max@gmail.com', 'Married', 'Filipino', 'Atheist', 'BS Medtech', '2024-12-09 23:30:55'),
(52, 'Jasper Jean', 'Del Valle', 'Mariano', '2024-12-30', '20', 'Female', 'Manila', '933455766576', 'JJ@gmail.com', 'Single', 'Filipino', 'Roman Catholic', 'BS Tourism Management', '2024-12-11 13:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `student_users`
--

CREATE TABLE `student_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `access` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_users`
--

INSERT INTO `student_users` (`id`, `username`, `password`, `access`) VALUES
(1, 'Miya', 'miya123', 'admin'),
(2, 'JJ', 'jj123', 'user'),
(3, 'Khaye', 'khaye123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_list`
--
ALTER TABLE `students_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_users`
--
ALTER TABLE `student_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_list`
--
ALTER TABLE `students_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `student_users`
--
ALTER TABLE `student_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
