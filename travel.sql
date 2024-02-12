-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 07:58 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_id` int(100) NOT NULL,
  `Cat_name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_id`, `Cat_name`) VALUES
(1, 'India Tour Packages');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phno` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `package` text NOT NULL,
  `joudate` date NOT NULL,
  `seats` bigint(30) NOT NULL,
  `adult` bigint(30) NOT NULL,
  `children` bigint(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `residence` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(6) NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `phone`, `package`, `joudate`, `seats`, `adult`, `children`, `address`, `residence`, `state`, `zip`, `country`) VALUES
('VASIKARAN P', 'vasikaranp1912@gmail.com', 7708168125, 'ENCHANTING HIMACHAL TOUR', '0000-00-00', 0, 0, 0, '3,udhayam street', 'Kumbakonam', 'Tamil Nadu', 612001, 'India'),
('pragadeeswaran', 'praga12@gmail.com', 7708168125, 'ENCHANTING HIMACHAL TOUR', '0000-00-00', 0, 0, 0, '3,udhayam street', 'Kumbakonam', 'Tamil Nadu', 612001, 'India'),
('Vinoth Kumar', 'vinoth@gmail.com', 9585676754, 'ENCHANTING HIMACHAL TOUR', '2024-03-19', 2, 0, 0, 'thanjavur', 'tnj', 'tn', 613101, 'india'),
('Vinoth Kumar', 'vinoth1@gmail.com', 9585676754, 'MAGICAL ANDAMAN TOUR', '2024-01-18', 4, 2, 2, 'thanjavur', 'tnj', 'tn', 613101, 'india'),
('Vinoth Kumar', 'vinoth2@gmail.com', 9585676754, 'ENCHANTING HIMACHAL TOUR', '2023-04-20', 3, 2, 1, 'thanjavur,tamilnadu', 'tnj', 'tn', 613101, 'india'),
('Vinoth Kumar', 'vinoth3@gmail.com', 9585676754, 'ENCHANTING HIMACHAL TOUR', '2023-04-20', 1, 1, 0, 'thanjavur', 'tnj', 'tn', 613101, 'india'),
('Vinoth Kumar', 'vinoth4@gmail.com', 9585676754, 'ENCHANTING HIMACHAL TOUR', '2023-04-20', 1, 1, 0, 'Thirukkattupalli,Tamilnadu', 'tnj', 'tn', 613101, 'india'),
('Vinoth Kumar', 'vinoth5@gmail.com', 9585676754, 'ENCHANTING HIMACHAL TOUR', '2023-04-19', 2, 1, 1, 'Thirukkattupalli,Tamilnadu', 'tnj', 'tn', 613101, 'india');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Enquiryid` int(50) NOT NULL,
  `Packageid` int(50) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Mobileno` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoofDays` int(50) NOT NULL,
  `Child` int(50) NOT NULL,
  `Adults` int(50) NOT NULL,
  `Message` varchar(900) NOT NULL,
  `Statusfield` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Packid` int(200) NOT NULL,
  `Packname` varchar(1000) NOT NULL,
  `Category` int(200) NOT NULL,
  `Subcategory` int(200) NOT NULL,
  `Packprice` int(200) NOT NULL,
  `Pic1` varchar(8000) NOT NULL,
  `Pic2` varchar(8000) NOT NULL,
  `Pic3` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Packid`, `Packname`, `Category`, `Subcategory`, `Packprice`, `Pic1`, `Pic2`, `Pic3`, `Detail`) VALUES
(1, 'Enchanting Himachal Tour', 1, 1, 22000, 'north india.jpg', 'Himalaya.jpeg', 'himalayas.jpg', 'Explore the unseen and visit Manali!'),
(2, 'Varanasi Bodh Gaya Tour', 1, 1, 18000, 'north india.jpg', 'bodhgaya.jpeg', 'north india.jpg', 'To feel the magic in the air, visit Varanasi!'),
(3, 'Cultural Rajasthan Tour', 1, 1, 27000, 'north india.jpg', 'thar.jpeg', 'jaipur.jpg', 'The Incredible State of India!'),
(4, 'Shimla Manali Tour ', 1, 1, 25000, 'north india.jpg', 'chandigarh.jpg', 'manali.jpg', 'Scenic Beauty!'),
(5, 'Mathura Vrindavan Tour', 1, 1, 25000, 'north india.jpg', 'mathura.jpg', 'north india.jpg', 'Exploring Uttar Pradesh!'),
(6, 'Exotic Corbett Nainital Tour', 1, 1, 27000, 'north india.jpg', 'Corbett.jpeg', 'Corbett.jpeg', 'The Oldest National Park in India!'),
(7, 'Golden Triangle Tour With Jodhpur', 1, 1, 22000, 'north india.jpg', 'jaipur.jpg', 'rajasthan.jpeg', 'The City Beautiful!'),
(8, 'Charming Srinagar Gulmarg  Tour', 1, 1, 29000, 'north india.jpg', 'Gulmarg.jpg', 'Himalaya.jpeg', 'City of Wealth!'),
(9, 'Enchanting Nainital Mussoorie Tour', 1, 1, 23000, 'north india.jpg', 'mussoorie.jpeg', 'Gulmarg.jpg', 'Never miss a moment in the mountains!'),
(10, 'Super Saver Holiday Package', 1, 2, 12000, 'south india.jpg', 'coorg.jpg', 'bangalore.jpg', 'The Scotland of India!'),
(11, 'Magical Andaman Tour', 1, 2, 22000, 'south india.jpg', 'andaman.jpg', 'andaman1.jpg', 'Emerald, Blue and You!'),
(12, 'Spiritual South India Tour ', 1, 2, 18000, 'south india.jpg', 'rameshwaram.jpg', 'madurai.jpg', 'Choose Divinity for Life!'),
(13, 'Mystic Marine Trails', 1, 2, 22000, 'south india.jpg', 'andaman1.jpg', 'andaman.jpg', 'Emerald, Blue and You!'),
(14, 'Exciting Special Hill Tour', 1, 2, 15000, 'south india.jpg', 'hill.jpg', 'bangalore.jpg', 'The Land of Natural Beauty!'),
(15, 'Exotic Tamil Nadu Tour', 1, 2, 19000, 'south india.jpg', 'madurai.jpg', 'rameshwaram.jpg', 'A Familiar Feeling!'),
(16, 'Enchanting Kerala Delight', 1, 2, 15000, 'south india.jpg', 'cochin.jpg', 'kochin.jpg', 'On an Ayurvedic route!'),
(17, 'Chennai Tirupati Package', 1, 2, 12000, 'south india.jpg', 'tirupati.jpg', 'chennai.jpg', 'Tirupati Tourism!'),
(18, 'Mesmerizing Backwaters Tour', 1, 2, 17000, 'south india.jpg', 'backwater.jpg', 'cochin.jpg', 'Cruising through the Backwaters of Kerala!'),
(19, 'Beautiful South Tour', 1, 3, 18000, 'educational.jpg', 'ooty.jpg', 'ooty.jpg', 'Queen of Hill Stations!'),
(20, 'South Indian Ectasy Tour', 1, 3, 17000, 'educational.jpg', 'kodaikanal.jpg', 'hill.jpg', 'Dynamite of Emotions!'),
(21, 'Bangalore Holiday Tour', 1, 3, 21000, 'educational.jpg', 'bangalore.jpg', 'login4.jpg', 'One State Many Worlds!'),
(22, 'Best Of Kannyakumari', 1, 3, 18000, 'educational.jpg', 'kanyakumari.jpg', 'kochin.jpg', 'The Land of Three Seas!'),
(23, 'Alluring South India', 1, 3, 21000, 'educational.jpg', 'chennai.jpg', 'tirupati.jpg', 'Smells of Culture,Coffee,Coast!'),
(24, 'Captivating Kerala', 1, 3, 23000, 'educational.jpg', 'kochin.jpg', 'cochin.jpg', 'Kerala Package!'),
(25, 'The Indian Splendor Package', 1, 3, 24000, 'educational.jpg', 'mumbai.jpg', 'goa.jpg', 'City of Dreams!'),
(26, 'Special Himalayan Tour', 1, 3, 19000, 'educational.jpg', 'agra.jpeg', 'uttarpradesh.jpeg', 'Love at First Sight!'),
(27, 'Deccan Heritage Tour', 1, 3, 17000, 'educational.jpg', 'vizag.jpg', 'vizag.jpg', 'Jewel of the East Coast!'),
(28, 'Amazing Darjeeling Tour', 1, 4, 25000, 'eastindia.jpg', 'darjeeling.jpg', 'Himachal.jpg', 'The tea capital of the world, Darjeeling!'),
(29, 'Verdent Nagaland Tour', 1, 4, 28000, 'eastindia.jpg', 'Nagaland.jpg', 'uttarkhand.jpeg', 'Land of Festivals!'),
(30, 'Eastern Triangle Tour', 1, 4, 29000, 'eastindia.jpg', 'kalimpong.jpg', 'darjeeling.jpg', 'On the way to Lava!'),
(31, 'Jharkhand Tour', 1, 4, 21000, 'eastindia.jpg', 'ranchi.jpg', 'uttarpradesh.jpeg', 'A New Experience!'),
(32, 'Assam and Meghalaya Tour', 1, 4, 30000, 'eastindia.jpg', 'assam.jpg', 'Corbett.jpeg', 'Half Way To Heaven!'),
(33, 'Kolkata Tour', 1, 4, 18000, 'eastindia.jpg', 'Howrah.jpg', 'Howrah.jpg', 'The Sweetest Part of India!'),
(34, 'Sikkim Delight Tour', 1, 4, 26000, 'eastindia.jpg', 'sikkim.jpg', 'darjeeling.jpg', 'Small But Beautiful!'),
(35, 'Mumbai Tour', 1, 5, 21000, 'westindia.jpeg', 'gate.jpeg', 'mumbai.jpg', 'City of Dreams!'),
(36, 'Goa Tour', 1, 5, 32000, 'westindia.jpeg', 'goa.jpg', 'goa2.jpg', 'Discover Goa as Never Before!'),
(37, 'Pune Tour', 1, 5, 24000, 'westindia.jpeg', 'pune.jpg', 'mumbai.jpg', 'The City With An Attitude!'),
(38, 'Gujarat Tour', 1, 5, 21000, 'westindia.jpeg', 'Gujarat.jpg', 'jodhpur.jpg', 'Vibrant Gujarat!'),
(39, 'Magical Andaman Islands', 1, 6, 34000, 'honeymoon.jpg', 'Baratang.jpeg', 'andaman.jpg', 'Emerald, Blue and You!'),
(40, 'Honeymoon In Himalayas', 1, 6, 18000, 'honeymoon.jpg', 'himalayas.jpg', 'Himalaya.jpeg', 'Third Pole of the Earth!'),
(41, 'Glimpses Of Kashmir', 1, 6, 23000, 'honeymoon.jpg', 'kashmir.jpg', 'mussoorie.jpeg', 'Chalo Kashmir!'),
(42, 'Kerala Lovers Paradise', 1, 6, 19000, 'honeymoon.jpg', 'kochin.jpg', 'kerala1.jpg', 'Kerala Paradise'),
(43, 'Romantic Ladakh Tour', 1, 6, 25000, 'honeymoon.jpg', 'ladakh.jpg', 'himalayas.jpg', 'Tired feet, Happy Heart!'),
(44, 'Golden Sands Honeymoon Package', 1, 6, 22000, 'honeymoon.jpg', 'goa2.jpg', 'goa.jpg', 'Paradise of South Asia!'),
(45, 'Fun Filled Thekkady Tour', 1, 6, 21000, 'honeymoon.jpg', 'thekkady.jpg', 'ooty.jpg', 'Thekkady tour'),
(46, 'Romantic Jaipur Delight', 1, 6, 18000, 'honeymoon.jpg', 'jaipur.jpg', 'jaipur.jpg', 'Padharo Mharo Desh!'),
(47, 'Romantic Himachal', 1, 6, 21000, 'honeymoon.jpg', 'manali.jpg', 'mussoorie.jpeg', 'Valley of the Gods!');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `card_no` varchar(25) NOT NULL,
  `exp_date` varchar(10) NOT NULL,
  `ccv` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `card_no`, `exp_date`, `ccv`) VALUES
(1, '1234 4234 2242 3323', '12/24', '2322'),
(2, '2323 1231 3132 1321', '12/31', '1131');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `Subcatid` int(200) NOT NULL,
  `Subcatname` varchar(1000) NOT NULL,
  `Catid` int(200) NOT NULL,
  `Pic` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Subcatid`, `Subcatname`, `Catid`, `Pic`, `Detail`) VALUES
(1, 'North India Tour ', 1, 'north india.jpg', ''),
(2, 'South India Tour ', 1, 'south india.jpg', ''),
(3, 'Educational Tour', 1, 'educational.jpg', ''),
(4, 'East India Tour ', 1, 'eastindia.jpg', ''),
(5, 'West India Tour ', 1, 'westindia.jpeg', ''),
(6, 'Honeymoon Tour ', 1, 'honeymoon.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Pwd`, `Typeofuser`) VALUES
('vasi', '12345', 'Admin'),
('naveen ', '1306', 'Admin'),
('praga', '12344', 'Admin'),
('vasikaran', '1912', 'General');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`Enquiryid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Packid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`Subcatid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `Enquiryid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Packid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `Subcatid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
