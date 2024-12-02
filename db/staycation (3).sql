-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 04:44 PM
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
(1, 'ABOUT US1', 'Staycation_alibag', 'We are dedicated to curating unforgettable experiences for your beautiful stays in Alibag. Our mission is to be your trusted companion in discovering the perfect hotel or resort that aligns with your desires, ensuring a truly memorable getaway.', 'Welcome To Staycation-alibag', 'Built in 2023, this hotel is located in famous alibaug in konkan region, with easy access to the alibaug tourist attractions. It offers tastefully budget freindly rooms.', 'Discover Our Hotel & Services.', 't is known for its pristine beaches, historical fo', 'OUR GALLERY', 'Discover Our Work');

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
(2, 'Hotel News', 'Our Blog & Event', 'img\\blog\\kolaba.jpg', 'Fort Trekking Kolaba', 'CAMPING', '2019-04-16', 'Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all, when you visit this magical country you will have the best adventures right there at your doorstep. Only overseas adventure travel in Nepal will give you these kinds of opportunities so if this is not on your list of possible places to visit yet then now is the time to put it on there!', 'In Nepal your overseas adventure travel is going to be fascinating. You will get to see the Himalayan Mountains and experience all that the rich Nepalese culture has to offer. They are an amazing people who have managed to hang on to their own culture and beliefs longer than most other countries. When overseas adventure travel takes you to Nepal you will have the chance to see all of the fantastic and one of a kind lakes and forests and you can even spend days or weeks camping out in their forests with a specialized guide. And the waterfalls in Nepal are to die for, you will never see anything more gorgeous in your life as their waterfalls! This should be at the top of your overseas adventure travel destination list for sure!', 'You know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go.', 'I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.', 'Pooja P'),
(3, 'Hotel News', 'Our Blog & Event', 'img\\blog\\fort.jpg', 'Hill Climbing', 'EVENT', '2019-04-17', 'Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all, when you visit this magical country you will have the best adventures right there at your doorstep. Only overseas adventure travel in Nepal will give you these kinds of opportunities so if this is not on your list of possible places to visit yet then now is the time to put it on there!', 'In Nepal your overseas adventure travel is going to be fascinating. You will get to see the Himalayan Mountains and experience all that the rich Nepalese culture has to offer. They are an amazing people who have managed to hang on to their own culture and beliefs longer than most other countries. When overseas adventure travel takes you to Nepal you will have the chance to see all of the fantastic and one of a kind lakes and forests and you can even spend days or weeks camping out in their forests with a specialized guide. And the waterfalls in Nepal are to die for, you will never see anything more gorgeous in your life as their waterfalls! This should be at the top of your overseas adventure travel destination list for sure!', 'You know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go.', 'I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.', 'Anjali O'),
(4, 'Hotel News', 'Our Blog & Event', 'img\\blog\\varsoli.jpg', 'Varsoli Beach', 'TRAVEL TRIP', '2019-04-15', 'Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all, when you visit this magical country you will have the best adventures right there at your doorstep. Only overseas adventure travel in Nepal will give you these kinds of opportunities so if this is not on your list of possible places to visit yet then now is the time to put it on there!', 'In Nepal your overseas adventure travel is going to be fascinating. You will get to see the Himalayan Mountains and experience all that the rich Nepalese culture has to offer. They are an amazing people who have managed to hang on to their own culture and beliefs longer than most other countries. When overseas adventure travel takes you to Nepal you will have the chance to see all of the fantastic and one of a kind lakes and forests and you can even spend days or weeks camping out in their forests with a specialized guide. And the waterfalls in Nepal are to die for, you will never see anything more gorgeous in your life as their waterfalls! This should be at the top of your overseas adventure travel destination list for sure!', 'You know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go.', 'I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.', 'Amruta N'),
(5, 'Hotel News', 'Our Blog & Event', 'img\\blog\\korlai.jpg', 'Fort Trekking Kolrai', 'CAMPING', '2019-04-16', 'Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all, when you visit this magical country you will have the best adventures right there at your doorstep. Only overseas adventure travel in Nepal will give you these kinds of opportunities so if this is not on your list of possible places to visit yet then now is the time to put it on there!', 'In Nepal your overseas adventure travel is going to be fascinating. You will get to see the Himalayan Mountains and experience all that the rich Nepalese culture has to offer. They are an amazing people who have managed to hang on to their own culture and beliefs longer than most other countries. When overseas adventure travel takes you to Nepal you will have the chance to see all of the fantastic and one of a kind lakes and forests and you can even spend days or weeks camping out in their forests with a specialized guide. And the waterfalls in Nepal are to die for, you will never see anything more gorgeous in your life as their waterfalls! This should be at the top of your overseas adventure travel destination list for sure!', 'You know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go.', 'I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.', 'Pooja P'),
(6, 'Hotel News', 'Our Blog & Event', 'img\\blog\\kankeshwar.jpg', 'Hill Climbing Kankeshwar', 'EVENT', '2019-04-17', 'Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all, when you visit this magical country you will have the best adventures right there at your doorstep. Only overseas adventure travel in Nepal will give you these kinds of opportunities so if this is not on your list of possible places to visit yet then now is the time to put it on there!', 'In Nepal your overseas adventure travel is going to be fascinating. You will get to see the Himalayan Mountains and experience all that the rich Nepalese culture has to offer. They are an amazing people who have managed to hang on to their own culture and beliefs longer than most other countries. When overseas adventure travel takes you to Nepal you will have the chance to see all of the fantastic and one of a kind lakes and forests and you can even spend days or weeks camping out in their forests with a specialized guide. And the waterfalls in Nepal are to die for, you will never see anything more gorgeous in your life as their waterfalls! This should be at the top of your overseas adventure travel destination list for sure!', 'You know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go.', 'I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.', 'Anjali O'),
(7, 'Hotel News', 'Our Blog & Event', 'img\\blog\\aakshi.jpg', 'Aakshi Beach', 'TRAVEL TRIP', '2019-04-15', 'Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all, when you visit this magical country you will have the best adventures right there at your doorstep. Only overseas adventure travel in Nepal will give you these kinds of opportunities so if this is not on your list of possible places to visit yet then now is the time to put it on there!', 'In Nepal your overseas adventure travel is going to be fascinating. You will get to see the Himalayan Mountains and experience all that the rich Nepalese culture has to offer. They are an amazing people who have managed to hang on to their own culture and beliefs longer than most other countries. When overseas adventure travel takes you to Nepal you will have the chance to see all of the fantastic and one of a kind lakes and forests and you can even spend days or weeks camping out in their forests with a specialized guide. And the waterfalls in Nepal are to die for, you will never see anything more gorgeous in your life as their waterfalls! This should be at the top of your overseas adventure travel destination list for sure!', 'You know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go.', 'I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.', 'Amruta N'),
(8, 'Hotel News', 'Our Blog & Event', 'img\\blog\\murud-janjira.jpg', 'Fort Trekking Murud-Janjira', 'CAMPING', '2019-04-16', 'Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all, when you visit this magical country you will have the best adventures right there at your doorstep. Only overseas adventure travel in Nepal will give you these kinds of opportunities so if this is not on your list of possible places to visit yet then now is the time to put it on there!', 'In Nepal your overseas adventure travel is going to be fascinating. You will get to see the Himalayan Mountains and experience all that the rich Nepalese culture has to offer. They are an amazing people who have managed to hang on to their own culture and beliefs longer than most other countries. When overseas adventure travel takes you to Nepal you will have the chance to see all of the fantastic and one of a kind lakes and forests and you can even spend days or weeks camping out in their forests with a specialized guide. And the waterfalls in Nepal are to die for, you will never see anything more gorgeous in your life as their waterfalls! This should be at the top of your overseas adventure travel destination list for sure!', 'You know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go.', 'I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.', 'Pooja P'),
(9, 'Hotel News', 'Our Blog & Event', 'img\\blog\\datta-mandir.jpg', 'Hill Climbing Datta Mandir', 'EVENT', '2019-04-17', 'Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all, when you visit this magical country you will have the best adventures right there at your doorstep. Only overseas adventure travel in Nepal will give you these kinds of opportunities so if this is not on your list of possible places to visit yet then now is the time to put it on there!', 'In Nepal your overseas adventure travel is going to be fascinating. You will get to see the Himalayan Mountains and experience all that the rich Nepalese culture has to offer. They are an amazing people who have managed to hang on to their own culture and beliefs longer than most other countries. When overseas adventure travel takes you to Nepal you will have the chance to see all of the fantastic and one of a kind lakes and forests and you can even spend days or weeks camping out in their forests with a specialized guide. And the waterfalls in Nepal are to die for, you will never see anything more gorgeous in your life as their waterfalls! This should be at the top of your overseas adventure travel destination list for sure!', 'You know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go.', 'I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.', 'Anjali O');

-- --------------------------------------------------------

--
-- Table structure for table `blog_review`
--

CREATE TABLE `blog_review` (
  `id` int(11) NOT NULL,
  `blog_id` int(15) NOT NULL,
  `comment_name` varchar(50) NOT NULL,
  `dt` date NOT NULL,
  `descblog` varchar(1000) NOT NULL,
  `likeblog` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_review`
--

INSERT INTO `blog_review` (`id`, `blog_id`, `comment_name`, `dt`, `descblog`, `likeblog`, `email`) VALUES
(1, 1, 'Aditya', '2019-04-16', 'Lokks good', '1', '1'),
(2, 2, 'vikas', '2023-07-11', 'nice', '1', 'guravadi@gmail.com'),
(3, 3, 'deepak', '2023-07-11', 'DGC', '1', 'pearlarcnew@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `number` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `first_name`, `last_name`, `mail`, `number`, `status`) VALUES
(1, 'ADITYA', 'GURAV', 'guravadi@gmail.com', '+919702204612', 'N');

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
  `rev_desc` varchar(1000) NOT NULL,
  `rev_star` varchar(50) NOT NULL,
  `rev_name` varchar(50) NOT NULL,
  `rev_source` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review_head`, `review_liner`, `rev_desc`, `rev_star`, `rev_name`, `rev_source`) VALUES
(1, 'Testimonials', 'What Customers Say?', 'first After a construction project took longer than expected, my husband, my daughter and I\n                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our\n                                city, neighborhood and the types of housing options available and absolutely love our\n                                vacation at Sona Hotel.', '3', 'Amruta', 'Tripadvisor'),
(2, 'Testimonials', 'What Customers Say?', 'second After a construction project took longer than expected, my husband, my daughter and I\n                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our\n                                city, neighborhood and the types of housing options available and absolutely love our\n                                vacation at Sona Hotel.', '4', 'Kavita', 'Hotelbooking'),
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
  `room_detail_img` varchar(50) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `head`, `fee`, `size`, `capacity`, `bed`, `services`, `img`, `room_detail_img`, `details`, `hotel_id`) VALUES
(1, 'Couples Retreat\r\n', '2400', '20ft', '2 person', '1 normal bed', 'Bathroom,TV,AC,Non-AC', 'img\\room\\sk_4.jpeg', 'img\\room\\room_deatil_2.jpeg', 'Motorhome or Trailer that is the question for you. Here are some of the advantages and disadvantages of both, so you will be confident when purchasing an RV. When comparing Rvs, a motorhome or a travel trailer, should you buy a motorhome or fifth wheeler? The advantages and disadvantages of both are studied so that you can make your choice wisely when purchasing an RV. Possessing a motorhome or fifth wheel is an achievement of a lifetime. It can be similar to sojourning with your residence as you search the various sites of our great land, America.', 1),
(2, 'Comfort Trio\r\n', '3600', '20ft', '3 person', '2 normal bed', 'Bathroom,TV,AC,Non-AC', 'img\\room\\hh_23.jpeg', 'img\\room\\room_deatil_1.jpeg', 'The two commonly known recreational vehicle classes are the motorized and towable. Towable rvs are the travel trailers and the fifth wheel. The rv travel trailer or fifth wheel has the attraction of getting towed by a pickup or a car, thus giving the adaptability of possessing transportation for you when you are parked at your campsite.', 1),
(3, 'Premium Haven\r\n', '4800', '20ft', '4 person', '2 normal bed', 'Bathroom,TV,AC,Non-AC', 'img\\room\\hp.jpeg', 'img\\room\\hp_detail_3.jpeg', 'Motorhome or Trailer that is the question for you. Here are some of the advantages and disadvantages of both, so you will be confident when purchasing an RV. When comparing Rvs, a motorhome or a travel trailer, should you buy a motorhome or fifth wheeler? The advantages and disadvantages of both are studied so that you can make your choice wisely when purchasing an RV. Possessing a motorhome or fifth wheel is an achievement of a lifetime. It can be similar to sojourning with your residence as you search the various sites of our great land, America.', 1),
(4, 'Spacious Family Oasis\r\n', '12000', '20ft', '10 person', '3 normal bed', 'Bathroom,TV,AC,Non-AC', 'img\\room\\hh_4.jpeg', 'img\\room\\hh_detail_4.jpeg', 'The two commonly known recreational vehicle classes are the motorized and towable. Towable rvs are the travel trailers and the fifth wheel. The rv travel trailer or fifth wheel has the attraction of getting towed by a pickup or a car, thus giving the adaptability of possessing transportation for you when you are parked at your campsite.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_availability`
--

CREATE TABLE `room_availability` (
  `id` int(11) NOT NULL,
  `room_id` varchar(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `hotel_room_name` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `dtfrom` date NOT NULL,
  `dtto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_availability`
--

INSERT INTO `room_availability` (`id`, `room_id`, `hotel_id`, `hotel_name`, `hotel_room_name`, `Status`, `dtfrom`, `dtto`) VALUES
(1, '1', 1, 'Happiness Inn', 'Couples Retreat', 'Yes', '2023-07-01', '2023-07-02'),
(2, '2', 2, 'Snehaleela', 'Comfort Trio', 'Yes', '2023-07-08', '2023-07-09'),
(3, '4', 3, 'Happy Holiday', 'Spacious Family Oasis', 'No', '2023-07-15', '2023-07-16'),
(4, '3', 4, 'Sai Krupa', 'Premium Haven', 'Yes', '2023-07-22', '2023-07-23'),
(5, '2', 1, 'Happiness Inn', 'Comfort Trio\n', 'Yes', '2023-07-22', '2023-07-23'),
(6, '3', 1, 'Happiness Inn', 'Premium Haven\n', 'Yes', '2023-07-22', '2023-07-23'),
(7, '4', 1, 'Happiness Inn', 'Spacious Family Oasis\n', 'Yes', '2023-07-22', '2023-07-23'),
(8, '1', 2, 'Snehaleela', 'Couples Retreat\n', 'Yes', '2023-07-08', '2023-07-09'),
(9, '3', 2, 'Snehaleela', 'Premium Haven', 'Yes', '2023-07-08', '2023-07-09'),
(10, '4', 2, 'Snehaleela', 'Spacious Family Oasis\n', 'Yes', '2023-07-08', '2023-07-09'),
(11, '1', 3, 'Happy Holiday', 'Couples Retreat', 'No', '2023-07-15', '2023-07-16'),
(12, '3', 3, 'Happy Holiday', 'Premium Haven', 'No', '2023-07-15', '2023-07-16'),
(13, '2', 3, 'Happy Holiday', 'Comfort Trio', 'No', '2023-07-15', '2023-07-16'),
(14, '1', 4, 'Sai Krupa', 'Couples Retreat', 'Yes', '2023-07-22', '2023-07-23'),
(15, '2', 4, 'Sai Krupa', 'Comfort Trio\n', 'Yes', '2023-07-22', '2023-07-23'),
(16, '4', 4, 'Sai Krupa', 'Spacious Family Oasis', 'Yes', '2023-07-22', '2023-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `room_inquiry`
--

CREATE TABLE `room_inquiry` (
  `id` int(11) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL,
  `guest` varchar(11) NOT NULL,
  `room` varchar(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `mobile_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_inquiry`
--

INSERT INTO `room_inquiry` (`id`, `checkIn`, `checkOut`, `guest`, `room`, `room_id`, `mobile_no`) VALUES
(4, '1970-01-01', '1970-01-01', '3', '2', 3, ''),
(5, '1970-01-01', '1970-01-01', '2', '1', 4, ''),
(6, '1970-01-01', '1970-01-01', '10', '5', 2, '9702204612'),
(7, '1970-01-01', '1970-01-01', '2', '1', 1, '9702204612'),
(8, '1970-01-01', '1970-01-01', '2', '1', 1, '8655444075'),
(9, '1970-01-01', '1970-01-01', '2', '1', 2, '9702204612'),
(10, '1970-01-01', '1970-01-01', '2', '1', 3, '9702204612'),
(11, '1970-01-01', '1970-01-01', '2', '1', 4, '9702204612');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_head` varchar(50) NOT NULL,
  `service_liner` varchar(50) NOT NULL,
  `serv_stage` varchar(50) NOT NULL,
  `serv_desc` varchar(1000) NOT NULL,
  `serv_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_head`, `service_liner`, `serv_stage`, `serv_desc`, `serv_price`) VALUES
(1, 'WHAT WE DO', 'Discover Our Services', 'Travel Plan', 'we go the extra mile to ensure your Alibag experience is seamless. For an additional cost, we offer personalized travel planning services, including expert recommendations on destinations, tailored itineraries, and precise booking assistance, so you can relax and enjoy your trip with confidence', 'Free'),
(2, 'WHAT WE DO', 'Discover Our Services', 'Special Offers and Packages', 'Unlock unforgettable experiences in Alibag with our enticing special offers and packages. From romantic escapes to family adventures, enjoy exclusive perks and discounted rates, creating cherished memories without breaking the bank. Choose your package today and embrace the magic of Alibag.', '500 to 1000'),
(3, 'WHAT WE DO', 'Discover Our Services', 'Hire Driver', 'Effortless Exploration : Hire Professional Drivers for Your Alibag Adventure.', '800 to 1000'),
(4, 'WHAT WE DO', 'Discover Our Services', 'Bar & Drink', 'On additional Cost we will drop to your doorstep beverages.', '40 extra on mrp');

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
-- Indexes for table `blog_review`
--
ALTER TABLE `blog_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
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
-- Indexes for table `room_availability`
--
ALTER TABLE `room_availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_inquiry`
--
ALTER TABLE `room_inquiry`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_review`
--
ALTER TABLE `blog_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `room_availability`
--
ALTER TABLE `room_availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `room_inquiry`
--
ALTER TABLE `room_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
