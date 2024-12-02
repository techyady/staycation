-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 12:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staycation`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `head` varchar(50) NOT NULL,
  `liner` varchar(50) NOT NULL,
  `descriptions` varchar(1000) NOT NULL,
  `detail_liner` varchar(50) NOT NULL,
  `detail_desc` varchar(1000) NOT NULL,
  `detail_video_head` varchar(50) NOT NULL,
  `detail_video_liner` varchar(100) NOT NULL,
  `detail_gallery_head` varchar(50) NOT NULL,
  `detail_gallery` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `head`, `liner`, `descriptions`, `detail_liner`, `detail_desc`, `detail_video_head`, `detail_video_liner`, `detail_gallery_head`, `detail_gallery`) VALUES
(1, 'ABOUT US', 'Staycation_alibag', 'We are dedicated to curating unforgettable experiences for your beautiful stays in Alibag. Our mission is to be your trusted companion in discovering the perfect hotel or resort that aligns with your desires, ensuring a truly memorable getaway.', 'Welcome To Staycation-alibag', 'Built in 2023, this hotel is located in famous alibaug in konkan region, with easy access to the alibaug tourist attractions. It offers tastefully budget freindly rooms.', 'Discover Our Hotel & Services.', 't is known for its pristine beaches, historical fo', 'OUR GALLERY', 'Discover Our Work');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_head` varchar(50) NOT NULL,
  `blog_liner` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `label` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `dt` date NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `desc2` varchar(1000) NOT NULL,
  `desc3` varchar(1000) NOT NULL,
  `desc4` varchar(1000) NOT NULL,
  `blog_author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_head`, `blog_liner`, `img`, `label`, `title`, `dt`, `desc1`, `desc2`, `desc3`, `desc4`, `blog_author`) VALUES
(1, 'Hotel News', 'Our Blog & Event', 'img\\blog\\kashid.jpg', 'kashid Beach', 'TRAVEL TRIP', '2019-04-15', 'Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all, when you visit this magical country you will have the best adventures right there at your doorstep. Only overseas adventure travel in Nepal will give you these kinds of opportunities so if this is not on your list of possible places to visit yet then now is the time to put it on there!', 'In Nepal your overseas adventure travel is going to be fascinating. You will get to see the Himalayan Mountains and experience all that the rich Nepalese culture has to offer. They are an amazing people who have managed to hang on to their own culture and beliefs longer than most other countries. When overseas adventure travel takes you to Nepal you will have the chance to see all of the fantastic and one of a kind lakes and forests and you can even spend days or weeks camping out in their forests with a specialized guide. And the waterfalls in Nepal are to die for, you will never see anything more gorgeous in your life as their waterfalls! This should be at the top of your overseas adventure travel destination list for sure!', 'You know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go.', 'I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.', 'Amruta N'),
(2, 'Hotel News', 'Our Blog & Event', 'img\\blog\\hill.jpg', 'Fort Trekking', 'CAMPING', '2019-04-16', 'Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all, when you visit this magical country you will have the best adventures right there at your doorstep. Only overseas adventure travel in Nepal will give you these kinds of opportunities so if this is not on your list of possible places to visit yet then now is the time to put it on there!', 'In Nepal your overseas adventure travel is going to be fascinating. You will get to see the Himalayan Mountains and experience all that the rich Nepalese culture has to offer. They are an amazing people who have managed to hang on to their own culture and beliefs longer than most other countries. When overseas adventure travel takes you to Nepal you will have the chance to see all of the fantastic and one of a kind lakes and forests and you can even spend days or weeks camping out in their forests with a specialized guide. And the waterfalls in Nepal are to die for, you will never see anything more gorgeous in your life as their waterfalls! This should be at the top of your overseas adventure travel destination list for sure!', 'You know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go.', 'I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.', 'Pooja P'),
(3, 'Hotel News', 'Our Blog & Event', 'img\\blog\\fort.jpg', 'Hill Climbing', 'EVENT', '2019-04-17', 'Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all, when you visit this magical country you will have the best adventures right there at your doorstep. Only overseas adventure travel in Nepal will give you these kinds of opportunities so if this is not on your list of possible places to visit yet then now is the time to put it on there!', 'In Nepal your overseas adventure travel is going to be fascinating. You will get to see the Himalayan Mountains and experience all that the rich Nepalese culture has to offer. They are an amazing people who have managed to hang on to their own culture and beliefs longer than most other countries. When overseas adventure travel takes you to Nepal you will have the chance to see all of the fantastic and one of a kind lakes and forests and you can even spend days or weeks camping out in their forests with a specialized guide. And the waterfalls in Nepal are to die for, you will never see anything more gorgeous in your life as their waterfalls! This should be at the top of your overseas adventure travel destination list for sure!', 'You know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go.', 'I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.', 'Anjali O');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `admin_status`, `status`) VALUES
(1, 'admin', '1234567', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `review_head` varchar(50) NOT NULL,
  `review_liner` varchar(50) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `rev_star` varchar(50) NOT NULL,
  `rev_name` varchar(50) NOT NULL,
  `rev_source` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review_head`, `review_liner`, `review`, `rev_star`, `rev_name`, `rev_source`) VALUES
(1, 'Testimonials', 'What Customers Say?', 'After a construction project took longer than expected, my husband, my daughter and I\r\n                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our\r\n                                city, neighborhood and the types of housing options available and absolutely love our\r\n                                vacation at Sona Hotel.', '3', 'Amruta', 'Tripadvisor'),
(2, 'Testimonials', 'What Customers Say?', 'After a construction project took longer than expected, my husband, my daughter and I\r\n                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our\r\n                                city, neighborhood and the types of housing options available and absolutely love our\r\n                                vacation at Sona Hotel.', '4', 'Kavita', 'Hotelbooking'),
(3, 'Testimonials', 'What Customers Say?', 'After a construction project took longer than expected, my husband, my daughter and I\r\n                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our\r\n                                city, neighborhood and the types of housing options available and absolutely love our\r\n                                vacation at Sona Hotel.', '5', 'Sayali', 'Ibibo');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `head` varchar(100) NOT NULL,
  `fee` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `bed` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `room_detail_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `head`, `fee`, `size`, `capacity`, `bed`, `services`, `img`, `room_detail_img`) VALUES
(1, 'Couples Retreat\r\n', '5000', '20ft', '2 person', '1 normal bed', 'Bathroom,TV,AC,Non-AC', 'img\\room\\sk_4.jpeg', 'img\\room\\hh_detail_4.jpeg'),
(2, 'Comfort Trio\r\n', '5000', '20ft', '3 person', '2 normal bed', 'Bathroom,TV,AC,Non-AC', 'img\\room\\hh_23.jpeg', 'img\\room\\hp_detail_3.jpeg'),
(3, 'Premium Haven\r\n', '5000', '20ft', '4 person', '2 normal bed', 'Bathroom,TV,AC,Non-AC', 'img\\room\\hp.jpeg', 'img\\room\\room_deatil_2.jpeg'),
(4, 'Spacious Family Oasis\r\n', '5000', '20ft', '10 person', '3 normal bed', 'Bathroom,TV,AC,Non-AC', 'img\\room\\hh_4.jpeg', 'img\\room\\room_deatil_1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_head` varchar(50) NOT NULL,
  `service_liner` varchar(50) NOT NULL,
  `serv_stage` varchar(50) NOT NULL,
  `serv_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_head`, `service_liner`, `serv_stage`, `serv_desc`) VALUES
(1, 'WHAT WE DO', 'Discover Our Services', 'Travel Plan', 'we go the extra mile to ensure your Alibag experience is seamless. For an additional cost, we offer personalized travel planning services, including expert recommendations on destinations, tailored itineraries, and precise booking assistance, so you can relax and enjoy your trip with confidence'),
(2, 'WHAT WE DO', 'Discover Our Services', 'Special Offers and Packages', 'Unlock unforgettable experiences in Alibag with our enticing special offers and packages. From romantic escapes to family adventures, enjoy exclusive perks and discounted rates, creating cherished memories without breaking the bank. Choose your package today and embrace the magic of Alibag.'),
(3, 'WHAT WE DO', 'Discover Our Services', 'Hire Driver', 'Effortless Exploration : Hire Professional Drivers for Your Alibag Adventure.'),
(4, 'WHAT WE DO', 'Discover Our Services', 'Bar & Drink', 'On additional Cost we will drop to your doorstep beverages.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
