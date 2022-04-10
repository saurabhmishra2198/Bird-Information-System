-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 08:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `birdsinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bird_master`
--

CREATE TABLE `bird_master` (
  `sno` int(11) NOT NULL,
  `bird_name` text NOT NULL,
  `habitat` text NOT NULL,
  `scientific_name` text NOT NULL,
  `geographical_name` text NOT NULL,
  `image` varchar(30) NOT NULL,
  `c_status` text NOT NULL,
  `about_info` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bird_master`
--

INSERT INTO `bird_master` (`sno`, `bird_name`, `habitat`, `scientific_name`, `geographical_name`, `image`, `c_status`, `about_info`) VALUES
(1, 'Blacksmith Plover', 'Lakes, marshes, flooded fields', 'Vanellus armatus', 'Southeastern Africa', 'img6.jpg', 'Common', 'These birds feed as all plovers do -- by taking a few rapid steps and then stabbing at their prey. They also engage in typical plover-like foraging behavior as they hunt for insects, including foot-trembling and pecking at the water surface. Blacksmith plovers are very territorial and solitary nesters during the breeding season, but at other times they may form flocks of up to 100 birds.'),
(2, 'Grey-winged Trumpeter', 'Humid forests', 'Psophia crepitans', 'Northern and central South America', 'img2.jpg', 'Threatened', 'These elusive birds are found in mature moist tropical forests, away from all human activity. They pick up ripe fruit off the forest floor, or remove it from small plants. Trumpeters gather in large flocks in forest clearings to perform elaborate and noisy courtship dances. These involve much strutting and leaping, and sometimes even somersaulting.'),
(3, 'Sarus Crane', 'Marshes, flooded fields, swamps', 'Grus antigone', 'Southern Asia, Philippines, northern Australia', 'img3.jpg', 'Threatened', 'Small families or pairs of sarus cranes live in open landscapes, often in marshy areas or along the shores of lakes and ponds. These birds aren\'t picky eaters: they feed on marsh plants, numerous types of aquatic insects, frogs, and even water snakes. Elaborate dancing and loud simultaneous calling between the males and females are parts of the courtship rituals of this species. Breeding season takes place during monsoon season. Both male and female cranes cooperate in building the nest, incubating the eggs, and raising the young. Because of their large size, sarus cranes do not have many natural predators. But eggs left unprotected in the nests are easy pickings for jackals and birds of pre'),
(4, 'White-naped Crane', 'Swamps, marshes, lakes and wet meadows along river valleys', 'Grus vipio', 'Northeastern Mongolia, northeastern China and extreme southeastern Russia', 'img5.jpg', 'Threatened', 'The beauty and grace of these Asian cranes are unforgettable as they bow and leap, engaging in the crane dance. Though the dance is part of their courtship display, at other times it seems to be for just pure joy. Cranes feed in the wild by digging with their beaks in soft, wet mud for tubers and insects. The number of white-naped cranes has declined because of human interference with their wetland habitats.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `message`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, 'saurabh v mishra', 'mishrasaurabh350@gmail.com', 'this is test message'),
(4, 'saurabh v mishra', 'mishrasaurabh350@gmail.com', 'this is test message'),
(5, 'saurabh v mishra', 'mishrasaurabh350@gmail.com', 'this'),
(6, 'saurabh v mishra', 'mishrasaurabh350@gmail.com', 'sat'),
(7, 'saurabh v mishra', 'mishrasaurabh350@gmail.com', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`name`, `email`, `phone`, `password`) VALUES
('saurabh v mishra', 'haidaralishaikh922@gmail.com', '+919554351969', 'sa'),
('saurabh v mishra', 'mishrasaurabh350@gmail.com', '+919554351969', 'sa'),
('saurabh v mishra', 'sachin119811@gmail.com', '+919554351969', 'sachin'),
('saurabh v mishra', 'saurabhcomputers088@gmail.com', '+919554351969', 'sa'),
('saurabh v mishra', 'shivanishukla8595675081@gmail.com', '+919554351969', 'sa'),
('saurabh v mishra', 'smishra111198@gmail.com', '+919554351969', 'sa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bird_master`
--
ALTER TABLE `bird_master`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bird_master`
--
ALTER TABLE `bird_master`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
