-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 01:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcis-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay_clearance`
--

CREATE TABLE `barangay_clearance` (
  `id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_issued` date NOT NULL,
  `cedula_number` varchar(255) NOT NULL,
  `cedula_place` varchar(255) NOT NULL,
  `cedula_date` date NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangay_clearance`
--

INSERT INTO `barangay_clearance` (`id`, `resident_id`, `name`, `address`, `purpose`, `date_issued`, `cedula_number`, `cedula_place`, `cedula_date`, `url_image`, `date_created`) VALUES
(207, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'Job Application', '2021-06-29', '789456123', 'Brgy Dad North', '2021-06-28', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29'),
(208, 0, 'Jomar Torres Bartolome ', '55 Sta. Cruz Street, Purok 15, Barangay Dadiangas North, General Santos City', 'gfdjfgjd', '2021-06-29', 'dfgjdf', 'jdfgdj', '2021-06-03', '../../brgy-residents/image/1624614837011_yangseokhyung.jpg', '2021-06-29'),
(209, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'dfbdfbsd', '2021-06-29', 'bdfbgsdfbsb', 'bsfdbsbfd', '2021-06-17', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29'),
(210, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'dfgsdf', '2021-06-29', 'fddsf', 'gsdfgsdfg', '2021-06-18', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29'),
(211, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'dfgsdf', '2021-06-29', 'fddsf', 'gsdfgsdfg', '2021-06-18', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29'),
(212, 0, 'Rose Marie Alfonso Tolentino ', '89 Macopa Street, Purok 11, Barangay Dadiangas North, General Santos City', 'fss', '2021-06-29', 'gdsfg', 'dfg', '2021-06-17', '../../brgy-residents/image/1624615254273_janggyeoul.jpg', '2021-06-29'),
(213, 0, 'Rose Marie Alfonso Tolentino ', '89 Macopa Street, Purok 11, Barangay Dadiangas North, General Santos City', 'fss', '2021-06-29', 'gdsfg', 'dfg', '2021-06-17', '../../brgy-residents/image/1624615254273_janggyeoul.jpg', '2021-06-29'),
(214, 0, 'Rose Marie Alfonso Tolentino ', '89 Macopa Street, Purok 11, Barangay Dadiangas North, General Santos City', 'fss', '2021-06-29', 'gdsfg', 'dfg', '2021-06-17', '../../brgy-residents/image/1624615254273_janggyeoul.jpg', '2021-06-29'),
(215, 0, 'Rose Marie Alfonso Tolentino ', '89 Macopa Street, Purok 11, Barangay Dadiangas North, General Santos City', 'sgdsdf', '2021-06-29', 'dsfgsd', 'sdfg', '2021-06-09', '../../brgy-residents/image/1624615254273_janggyeoul.jpg', '2021-06-29'),
(216, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'hfg', '2021-06-29', 'dfjd', 'jdhjfj', '2021-06-17', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29'),
(217, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'ghfg', '2021-06-29', 'hdfghd', 'dfghdfgh', '2021-06-17', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29'),
(218, 0, 'Ana Cruz Sanchez ', '120 Apple Street, Purok 8, Barangay Dadiangas North, General Santos City', 'fdsgdfh', '2021-06-29', 'h', 'dgfhdf', '2021-06-10', '../../brgy-residents/image/1624614867150_janggyeoul.jpg', '2021-06-29'),
(219, 0, 'Ana Cruz Sanchez ', '120 Apple Street, Purok 8, Barangay Dadiangas North, General Santos City', 'fdsgdfh', '2021-06-29', 'h', 'dgfhdf', '2021-06-10', '../../brgy-residents/image/1624614867150_janggyeoul.jpg', '2021-06-29'),
(220, 0, 'Ana Cruz Sanchez ', '120 Apple Street, Purok 8, Barangay Dadiangas North, General Santos City', 'fdsgdfh', '2021-06-29', 'h', 'dgfhdf', '2021-06-10', '../../brgy-residents/image/1624614867150_janggyeoul.jpg', '2021-06-29'),
(221, 0, 'Ana Cruz Sanchez ', '120 Apple Street, Purok 8, Barangay Dadiangas North, General Santos City', 'fdsgdfh', '2021-06-29', 'h', 'dgfhdf', '2021-06-10', '../../brgy-residents/image/1624614867150_janggyeoul.jpg', '2021-06-29'),
(222, 0, 'Ana Cruz Sanchez ', '120 Apple Street, Purok 8, Barangay Dadiangas North, General Santos City', 'fdsgdfh', '2021-06-29', 'h', 'dgfhdf', '2021-06-10', '../../brgy-residents/image/1624614867150_janggyeoul.jpg', '2021-06-29'),
(223, 0, 'Ana Cruz Sanchez ', '120 Apple Street, Purok 8, Barangay Dadiangas North, General Santos City', 'fdsgdfh', '2021-06-29', 'h', 'dgfhdf', '2021-06-10', '../../brgy-residents/image/1624614867150_janggyeoul.jpg', '2021-06-29'),
(224, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'gdhfgh', '2021-06-29', 'dgfhd', 'dfgh', '2021-06-17', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29'),
(225, 0, 'Ana Cruz Sanchez ', '120 Apple Street, Purok 8, Barangay Dadiangas North, General Santos City', 'dsssg', '2021-06-29', 'dfgsd', 'gdf', '2021-06-17', '../../brgy-residents/image/1624614867150_janggyeoul.jpg', '2021-06-29'),
(226, 0, 'Ana Cruz Sanchez ', '120 Apple Street, Purok 8, Barangay Dadiangas North, General Santos City', 'dsssg', '2021-06-29', 'dfgsd', 'gdf', '2021-06-17', '../../brgy-residents/image/1624614867150_janggyeoul.jpg', '2021-06-29'),
(227, 0, 'Ana Cruz Sanchez ', '120 Apple Street, Purok 8, Barangay Dadiangas North, General Santos City', 'dsssg', '2021-06-29', 'dfgsd', 'gdf', '2021-06-17', '../../brgy-residents/image/1624614867150_janggyeoul.jpg', '2021-06-29'),
(228, 0, 'Elena Solis Trinidad ', '78 Lemon Street, Purok 2, Barangay Dadiangas North, General Santos City', 'dfhsd', '2021-06-29', 'sdhsd', 'sgh', '2021-06-26', '../../brgy-residents/image/1624614854153_chaesonghwa.jpg', '2021-06-29'),
(229, 0, 'Ana Cruz Sanchez ', '120 Apple Street, Purok 8, Barangay Dadiangas North, General Santos City', 'gfdh', '2021-06-29', 'dgh', 'dfh', '2021-06-11', '../../brgy-residents/image/1624614867150_janggyeoul.jpg', '2021-06-29'),
(230, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'fuby', '2021-06-29', 'bf', 'byy', '2021-06-09', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29'),
(231, 0, 'Ana Cruz Sanchez ', '120 Apple Street, Purok 8, Barangay Dadiangas North, General Santos City', 'ubyfg', '2021-06-29', 'buyhgy', 'buyb', '2021-06-17', '../../brgy-residents/image/1624614867150_janggyeoul.jpg', '2021-06-29'),
(232, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'fghjgf', '2021-06-29', 'hfhjg', 'hfgjfgj', '2021-06-17', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29'),
(233, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'fdgsd', '2021-06-29', 'sdf', 'sdfg', '2021-06-17', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29'),
(234, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'fdgsd', '2021-06-29', 'sdf', 'sdfg', '2021-06-17', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29'),
(235, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'Job Application', '2021-06-29', '78945123', 'Barangay North', '2021-06-28', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29'),
(236, 0, 'Juan Reyes Dela Cruz Jr.', '127 Recto Street, Purok 7, Barangay Dadiangas North, General Santos City', 'Job Application', '2021-06-29', '78945123', 'Barangay North', '2021-06-28', '../../brgy-residents/image/1624785533672_ahnjeongwon.jpg', '2021-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `mid_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `sex` varchar(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `purok` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `health_status` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `voter_status` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `tel_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `first_name`, `mid_name`, `last_name`, `suffix`, `sex`, `date_of_birth`, `house_number`, `street`, `purok`, `occupation`, `citizenship`, `health_status`, `civil_status`, `voter_status`, `phone_number`, `tel_number`, `email`, `img_url`) VALUES
(1, 'Juan', 'Reyes', 'Dela Cruz', 'Jr.', 'Male', '1989-11-07', '127', 'Recto', 'Purok 7', 'Farmer', 'Filipino', '-', 'married', 'Registered', '09127894512', '8777415', 'juandelacruz@email.com', '1624785533672_ahnjeongwon.jpg'),
(2, 'Jomar', 'Torres', 'Bartolome', '', 'Male', '1999-11-16', '55', 'Sta. Cruz', 'Purok 15', 'IT', 'Filipino', '-', 'single', 'Registered', '09269883740', '5557894', 'j.bartolome@email.com', '1624614837011_yangseokhyung.jpg'),
(3, 'Ana', 'Cruz', 'Sanchez', '', 'Female', '1995-07-31', '120', 'Apple', 'Purok 8', 'Civil Engineer', 'Filipino', '', 'married', 'Registered', '+639105821593', '552-7085', 'ana.sanchez@email.com', '1624614867150_janggyeoul.jpg'),
(4, 'Ricardo', 'Santos', 'Dalisay', 'Sr.', 'Male', '1975-02-12', '187', 'Lansones', 'Purok 9', 'Singer', 'Filipino', '-', 'married', 'Not Registered', '+639782385497', '8500087', 'cardodalisay@email.com', '1624808039428_leeikjun.jpg'),
(5, 'Elena', 'Solis', 'Trinidad', '', 'Female', '1982-06-03', '78', 'Lemon', 'Purok 2', 'Nurse', 'Filipino', '-', 'married', 'Registered', '09531023180', '7784523', 'elena@email.com', '1624614854153_chaesonghwa.jpg'),
(6, 'Sarah Mae', 'Sales', 'Ignacio', '', 'Female', '1992-05-03', '117', 'Mangga', 'Purok 12', 'Teacher', 'Filipino', '-', 'single', 'Not Registered', '09531023180', '09457891295', 'sarahmae@email.com', '1624615098601_heoseonbin.jpg'),
(7, 'Rose Marie', 'Alfonso', 'Tolentino', '', 'Female', '1986-12-07', '89', 'Macopa', 'Purok 11', 'Doctor', 'Filipino', '-', 'single', 'Not Registered', '0945987125', '5528547', 'rosemarie@email.com', '1624615254273_janggyeoul.jpg'),
(8, 'Maria', 'Pineda', 'Legaspi', '', 'Female', '1997-04-30', '85', 'Alerta', 'Purok 13', 'Student', 'Filipino', '-', 'single', 'Not Registered', '09531023180', '87774125', 'maria@email.com', '1624615752167_chuminha.jpg'),
(9, 'Junjun', 'Sarmiento', 'Corpuz', 'III', 'Male', '1981-07-19', '34', 'Mangga', 'Purok 4', 'Lawyer', 'Filipino', '-', 'married', 'Registered', '09531023180', '8700047', 'junjun@email.com', '1624808357897_kimjunwan.jpg'),
(10, 'Imelda', 'Luna', 'Gonzales', '', 'Female', '1958-03-04', '47', 'Santa Cruz', 'Purok 7', 'Businesswoman', 'Filipino', '-', 'widowed', 'Registered', '09531023180', '8775412', 'imelda@email.com', '1624616156555_chaesonghwa.jpg'),
(11, 'Gregorio', 'Ramos', 'Villanueva', 'Sr.', 'Male', '1947-09-13', '107', 'Mangga', 'Purok 5', 'None', 'Filipino', '-', 'widowed', 'Registered', '09531023180', 'n/A', 'N/A', '1624616304912_jujongsu.jpg'),
(12, 'Mirasol', 'Acosta', 'Esteban', '', 'Female', '1999-01-27', '78', 'Sta. Cruz', 'Purok 9', 'Student', 'Filipino', '-', 'married', 'Not Registered', '09531023180', '3312384', 'mirasol@email.com', '1624616436951_janggyeoul.jpg'),
(13, 'Marife', 'Dominguez', 'Aquino', '', 'Female', '1991-09-02', '177', 'Purok 15 Zone 4 Lagao. General Santos City', 'Purok 10', 'Policewoman', 'Filipino', '-', 'married', 'Not Registered', '09531023180', '7885239', 'marife@email.com', '1624808187545_chuminha.jpg'),
(14, 'Amor', 'Asuncion', 'Enriquez', '', 'Female', '1987-10-15', '07', 'Mangga', 'Purok 10', 'Housewife', 'Filipino', '-', 'single', 'Registered', '09531023180', '8777143', 'N/A', '1624808238728_chaesonghwa.jpg'),
(15, 'Danilo', 'Tamayo', 'Perera', '', 'Male', '1995-08-11', '73', 'Purok 15 Zone 4 Lagao. General Santos City', 'Purok 11', 'Businessman', 'Filipino', '-', 'single', 'Not Registered', '09531023180', '5521458', 'danilo@email.com', '1624808277682_dojaehak.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `role`) VALUES
(1, 'admin', 'admin', '', 'Admin'),
(2, 'sec', '123', '', 'Secretary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay_clearance`
--
ALTER TABLE `barangay_clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
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
-- AUTO_INCREMENT for table `barangay_clearance`
--
ALTER TABLE `barangay_clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
