-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 03:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `division_name` varchar(500) NOT NULL,
  `division_description` varchar(500) DEFAULT NULL,
  `district_name` varchar(500) NOT NULL,
  `district_description` varchar(500) NOT NULL,
  `division_img` varchar(500) DEFAULT NULL,
  `district_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `division_name`, `division_description`, `district_name`, `district_description`, `division_img`, `district_img`) VALUES
(8, 'Barisal', 'Barishal Division is one of the eight administrative divisions of Bangladesh. Located in the south-central part of the country, it has an area of 13,644.85 square kilometres.', 'Barguna', 'Barguna is a district in the division of Barisal, Bangladesh. It is situated in the southern part of Bangladesh. Barguna subdivision was established in 1969 and promoted to district on 28 February 1984.', 'Barishal_in_Bangladesh.jpg', 'barguna_dist.jpg'),
(9, 'Chittagong', 'Chittagong Division, officially known as Chattogram Division, is geographically the largest of the eight administrative divisions of Bangladesh. It covers the south-easternmost areas of the country, with a total area of 33,909.00 square kilometres.', 'Bandarban', 'Bandarban (বান্দরবান) is a district in South-Eastern Bangladesh, and a part of the Chittagong Division. It is one of the three districts that make up the Chittagong Hill Tracts, the others being Rangamati District and Khagrachhari District. Bandarban is regarded as one of the most attractive travel destinations in Bangladesh.', 'Chattogram_in_Bangladesh.jpg', 'bandarban_dist.jpg'),
(10, 'Dhaka', 'Dhaka Division is an administrative division within Bangladesh. Dhaka is the capital city of Bangladesh and also the largest city as well of the country. It comes among the 10 most populous cities of the world. The Division as constituted prior to 2015 covered an area of 31,051 square kilometres.', 'Dhaka', 'Dhaka District is a district located in central Bangladesh, and is the densest district in the nation. It is a part of the Dhaka Division. Dhaka, the capital of Bangladesh, rests on the eastern banks of the Buriganga River which flows from the Turag to the south of the district. While Dhaka (city corporation) occupies only about a fifth of the area of Dhaka district, it is the economic, political and cultural centre of the district and the country as a whole.', 'Dhaka_in_Bangladesh.jpg', 'dhaka_dist.jpg'),
(11, 'Khulna', 'Khulna Division is one of the eight divisions of Bangladesh. It has an area of 22,285 square kilometres.', 'Bagerhat', 'Bagerhat District (বাগেরহাট জেলা) is a district in South-western Bangladesh. It is a part of the Khulna Division.', 'Khulna_in_Bangladesh.jpg', 'bagerhat_dist.jpg'),
(12, 'Mymensingh', 'Mymensingh Division (Bengali: ময়মনসিংহ বিভাগ) is one of the eight administrative divisions of Bangladesh. It has an area of 10,485 square kilometres.', 'Jamalpur', 'Jamalpur (জামালপুর জেলা, Jamalpur Jela also Jamalpur Zila) is a district in Bangladesh[1] part of Mymensingh Division. It was established in 1978.', 'Mymensingh_in_Bangladesh.jpg', 'jamalpur_dist.jpg'),
(36, 'Rajshahi', 'Rajshahi Division (Bengali: রাজশাহী বিভাগ) is one of the eight first-level administrative divisions of Bangladesh. It has an area of 18,174.4 square kilometres.', 'Bogra', 'Bogra (বগুড়া) is a northern district of Bangladesh, in the Rajshahi Division. It is called the gateway to North Bengal. Bogra is an industrial city where many small and mid-sized industries are sited. Bogra district was a part of the ancient Pundravardhana territory ', 'Rajshahi_in_Bangladesh.jpg', 'bogra_dist.jpg'),
(38, 'Rangpur', 'Rangpur Division (Bengali: রংপুর বিভাগ) is one of the Divisions in Bangladesh. It was formed on 25 January 2010,[2] as Bangladesh\'s 7th division. Before that, it was under Rajshahi Division. The Rangpur division consists of eight districts.', 'Dinajpur', 'Dinajpur district (দিনাজপুর জেলা) is a district in the Rangpur Division of northern Bangladesh.', 'Rangpur_in_Bangladesh.jpg', 'rangpur_dist.jpg'),
(42, 'Sylhet', 'Sylhet Division is the northeastern division of Bangladesh. It is bordered by the Indian states of Meghalaya, Assam and Tripura to the north, east and south respectively, and by the Bangladeshi divisions of Chittagong to the southwest and Dhaka and Mymensingh to the west.', 'Habiganj', 'Habiganj (হবিগঞ্জ Hobigônj), formerly Habibganj, which was named after its founder, Syed Habib Ullah of Taraf fiefdom, is a district in the north-eastern part of Bangladesh.', 'Sylhet_in_Bangladesh.jpg', 'habiganj_dist.jpg'),
(51, 'Dhaka', NULL, 'Faridpur', 'Faridpur (Bengali: ফরিদপুর জেলা) is a district in south-central Bangladesh. It is a part of the Dhaka Division. It is bounded by the Padma River to its northeast. The district was named after the great sufi saint Farīd-ud-Dīn Masʿūd in British era. A municipality was established in 1869. Historically, the town was known as Fatehabad. It was also called Haveli Mahal Fatehabad.', NULL, 'faridpur_dist.jpg'),
(52, 'Barisal', NULL, 'Barisal', 'Barisal District, officially spelled Barishal District from April 2018, is a district in south-central Bangladesh, formerly called Bakerganj district, established in 1797. Its headquarters are in the city of Barisal, which is also the headquarters of the Barisal Division.', NULL, 'barisal_dist.JPG'),
(53, 'Barisal', NULL, 'Bhola', 'Bhola District (Bengali: ভোলা) is an administrative district (zila) in south-central Bangladesh, which includes Bhola Island, the largest island of Bangladesh. It is located in the Barisal Division and has an area of 3737.21 km2. It is bounded by Lakshmipur and Barisal District to the north, the Bay of Bengal to the south, by Lakshmipur and Noakhali districts, the (lower) Meghna river and Shahbazpur Channel to the east, and by Patuakhali District and the Tetulia river to the west.', NULL, 'bhola_dist.JPG'),
(54, 'Chittagong', NULL, 'Brahmanbaria', 'Brahmanbaria (Bengali: ব্রাহ্মণবাড়িয়া, romanized: Brahmôṇbaṛiya) is a district in eastern Bangladesh located in the Chittagong Division. Geographically, it is mostly farmland and is topographically part of the Gangetic Plain. It is bounded by the districts of Kishoreganj and Habiganj to the north, Narsingdi District and Narayanganj to the west, Comilla to the south, and the Indian state of Tripura to its east.', NULL, 'brahmanbaria_dist.JPG'),
(55, 'Chittagong', NULL, 'Chittagong', 'Chittagong District, officially known as Chattogram District, is a district located in the south-eastern region of Bangladesh. It is a part of the Chittagong Division. The port city of Chittagong, the second-largest city in Bangladesh, is located in this district.', NULL, 'chittagong_dist.JPG'),
(56, 'Dhaka', NULL, 'Gazipur', 'Gazipur is a district in central Bangladesh, part of the Dhaka Division. It has an area of 1741.53 km2. It is the home district of Tajuddin Ahmad, the first Prime Minister of Bangladesh and has been a prominent centre of battles and movements throughout history. Gazipur is home to the Bishwa Ijtema, the second-largest annual Muslim gathering in the world with over 5 million attendees.', NULL, 'gazipur_dist.JPG'),
(57, 'Khulna', NULL, 'Chuadanga', 'Chuadanga is a district of the western Khulna Division of Bangladesh. It is bordered by the Indian state of West Bengal to the west. This was the first capital of Bangladesh (10 April 1971).', NULL, 'chuadanga_dist.JPG'),
(58, 'Khulna', NULL, 'Jessore', 'Jessore District officially spelt Jashore District from April 2018, is a district in the southwestern region of Bangladesh. It is bordered by India to the west. Jessore district was established in 1781. It consists of 8 municipalities, 8 upazilas, 92 unions, 1329 mouzas, 1477 villages and 120 mahallas.', NULL, 'jessore_dist.JPG'),
(60, 'Mymensingh', NULL, 'Netrokona', 'Netrokona is a district of the Mymensingh Division in northern Bangladesh. Netrokona is situated in the northern part of Bangladesh, near the Meghalayan border. There are five main rivers in Netrokona: Kangsha, Someshawri, Dhala, Magra, and Teorkhali. It is a part of the Surma-Meghna River System.', NULL, 'netrokona_dist.JPG'),
(61, 'Mymensingh', NULL, 'Sherpur', 'Sherpur is a district in Northern Bangladesh. It is a part of Mymensingh Division. Sherpur district was a sub-division of Jamalpur District before 1984. It was upgraded to a district on February 22, 1984.', NULL, 'sherpur_dist.JPG'),
(62, 'Sylhet', NULL, 'Moulvibazar', 'Moulvibazar (Bengali: মৌলভীবাজার) also spelled Maulvibazar, Moulavibazar,[2] and Maulavibazar,[3] (former South Sylhet) is the southeastern district of Sylhet Division (Greater Sylhet) in northeastern Bangladesh, named after the town of Moulvibazar. It is bordered by the Indian states of Tripura and Assam to the south and east.', NULL, 'moulvibazar_dist.JPG'),
(63, 'Sylhet', NULL, 'Sunamganj', 'Sunamganj (Bengali: সুনামগঞ্জ) is a district located in north-eastern Bangladesh within the Sylhet Division.', NULL, 'sunamganj_dist.JPG'),
(64, 'Sylhet', NULL, 'Sylhet', 'Sylhet (Bengali: সিলেট), located in north-east Bangladesh, is the divisional capital and one of the four districts in the Sylhet Division. Sylhet district was established on 3 January 1782, and until 1878 it was part of Bengal province.', NULL, 'sylhet_dist.JPG'),
(65, 'Dhaka', NULL, 'Rajbari', 'Rajbari (Bengali: রাজবাড়ি) is a district in central Bangladesh, located in the Dhaka Division.', NULL, 'rajbari_dist.JPG'),
(69, 'Mymensingh', NULL, 'Mymensingh', 'Mymensingh is a district in Mymensingh Division, Bangladesh, and is bordered on the north by Meghalaya, a state of India and the Garo Hills. Mymensingh town is the district headquarters.', NULL, 'Mymensingh_dist.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `touristspot_id` int(11) NOT NULL,
  `rating` float NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 NOT NULL,
  `amenity1` varchar(500) CHARACTER SET utf8 NOT NULL,
  `amenity2` varchar(500) CHARACTER SET utf8 NOT NULL,
  `amenity3` varchar(500) CHARACTER SET utf8 NOT NULL,
  `amenity4` varchar(500) CHARACTER SET utf8 NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`id`, `user_id`, `touristspot_id`, `rating`, `description`, `title`, `amenity1`, `amenity2`, `amenity3`, `amenity4`, `timestamp`) VALUES
(85, 41, 29, 3, 'It is a nice place to hang out with friends.', 'Nice place!', '3', '3', '3', '3', '2021-12-11 15:28:42'),
(86, 45, 30, 3, 'Good place.', 'Good place', '3', '3', '3', '3', '2021-11-02 15:35:57'),
(87, 45, 29, 3, 'Good place to hangout.', 'Good place', '3', '3', '3', '3', '2022-01-02 15:26:22'),
(88, 45, 31, 5, 'Nice forest.', 'Good place', '5', '5', '5', '5', '2021-10-31 16:50:56'),
(89, 45, 28, 4, 'Good place', 'Good place', '3', '3', '5', '5', '2021-10-30 17:55:41'),
(90, 41, 30, 3, 'Good place.', 'Good place', '3', '3', '3', '3', '2021-10-31 15:37:54'),
(91, 41, 31, 3, 'A good place to go with friends.', 'Good place!', '3', '3', '3', '3', '2022-01-04 16:39:03'),
(92, 49, 31, 5, 'Adventurous place.', 'Good place', '5', '5', '5', '5', '2021-10-31 17:09:47'),
(96, 41, 28, 4, 'Good place.', 'Good place', '3', '5', '3', '5', '2021-11-03 00:14:38'),
(97, 41, 37, 4, 'This place is highly recommended for history lover travellers. Because here traveller can know the history of ancient times.', 'History House', '4', '4', '4', '4', '2021-12-05 16:57:10'),
(98, 49, 37, 4, 'This is a very lovely and gracious old building overlooking the river with rooms full of interesting objects and furniture well worth a visit.', 'A very gracious old building', '3', '5', '5', '3', '2021-12-05 17:03:47'),
(99, 49, 40, 4, 'This very large museum covers several floors. It is swarming with locals and contains a bit of everything. From stuffed animals (needing significant refreshing) to sculptures, utensils, cloth, paintings, there is a bit of everything. Most things are labelled but the overall feeling is one of being overwhelmed with dated displays, As with most museums in Bangladesh, no photos allowed.', 'A Must Museum with Dated Displays', '4', '3', '4', '5', '2021-12-05 18:30:20'),
(100, 73, 31, 3.2, 'Nice place for adventurer, clean and helpful staff. ', 'Interesting place to visit', '3', '3', '4', '3', '2021-12-07 14:42:16'),
(101, 41, 42, 4.5, 'This is the Bangladesh National Zoo located in Mirpur. The place is nice in generally, however, could be better! But still recommended (especially, if you are traveling with kids) if you are visiting Dhaka.', 'One and Only Zoo in Dhaka!', '5', '4', '5', '4', '2021-12-07 15:44:49'),
(102, 41, 38, 5, 'Its looking great and showing the Whole Bangladesh in Single Piller. I did a great travel at the Night. I hope you will also enjoy like me. ', 'The Heart of The Bangladesh', '5', '5', '5', '5', '2021-12-08 13:15:35'),
(103, 41, 41, 5, 'Stunning and well kept mosque. Beautiful architecture - can see the old and new. Really unique and worth a visit!', 'Beautiful and unique', '5', '5', '5', '5', '2021-12-08 13:17:52'),
(104, 49, 41, 4, 'Frankly this is just a small, albeit nicely constructed, mosque with interesting star designs - however, given the battle with traffic it could be missed without much of a problem.', 'A small mosque', '3', '5', '3', '5', '2021-12-08 13:31:57'),
(105, 41, 47, 5, 'This beautiful mosque, situated a good hour drive off Barisal is big, beautiful architecture and well kept. Has an orphanage and ladies section on premise. The grounds could be kept better, but the inside is clean and well maintained. Wonderful lighting at night, quite a place to relax.', 'Wonderful at night', '5', '5', '5', '5', '2021-12-10 07:47:05'),
(106, 48, 44, 3, 'It is a large water lake in Barisal. visitors who come Barisal also come at this place. Not so much attractive and no extra other attractions and facilities.', 'Water lake in Barisal', '3', '3', '3', '3', '2021-12-08 13:57:56'),
(107, 41, 46, 4.2, 'This is a very beautiful park in Barisal. Many people gather here at the end of the day. This is an ideal place to relieve fatigue throughout the day. From the confluence of the people of the boundless river of natural beauty, you can spend the whole day here in a beautiful way.', 'Beautiful park', '5', '4', '4', '4', '2021-12-08 15:43:28'),
(108, 41, 49, 4.5, 'A nice tower for tourists, I have seen in Bangladesh, made by a local minister, it is really attractive for the local people! Night view from the outside is very beautiful.', 'Beautiful at Night!', '5', '4', '4', '5', '2022-01-08 20:16:12'),
(109, 41, 50, 4, 'A mesmerising art effect in an island is unbelievable.', 'Nice place!', '4', '4', '4', '4', '2021-12-14 14:59:11'),
(110, 72, 51, 4.5, 'Best place for Kayaking in Bhola and professional service. Must visit place when you’re in Bhola and if you like a little adventure.', 'Very Beautiful!', '5', '5', '4', '4', '2021-12-13 16:00:14'),
(111, 74, 52, 5, 'I have seen many ancient buildings and have always been mesmerized with their architectural and scenic beauty but Kantajew Temple really blew my mind away. This piece of ancient architecture is situated in Dinajpur, a northern Zilla of Bangladesh. The temple has a symmetric structure and is made with handcrafted terracotta tiles which has the stories of Ramayana depicted on them. It also has two gold idols of the Hindu God Krishna and his lover Radha. The temple is still used for veneration by the people who follow Hinduism. It is a must see if you are visiting Bangladesh.', 'The Terracotta Temple', '5', '5', '5', '5', '2021-12-14 17:04:29'),
(112, 75, 53, 4, 'Ramsagar is a lake half an hour distance from Dinajpur Town. Nice place for a family picnic. You can enjoy the beauty of nature.', 'A lake', '4', '4', '4', '4', '2021-12-14 17:14:56'),
(113, 76, 54, 4.2, 'One of the biggest and powerful Raja of Dinajpur in the 16th century. Most of the building is now ruined. Govt didn’t take any necessary steps to protect this historical place.', 'A Palace', '5', '4', '4', '4', '2022-01-12 15:53:34'),
(114, 77, 55, 4, 'Although not much remains of the Citadel, the extensiveness of the walls are amazing. You can still see a land gate, a well, and several temples. Its worth a few hours to wander around. Make sure that you also visit the Mazhar of Shah Sultan Balhki in town.', 'Scattered Ruins', '4', '4', '4', '4', '2021-12-15 19:56:55'),
(115, 78, 57, 4, 'This ancient architecture and historical Heritage of Bangladesh is located at Madhupur Upazila under the Faridpur district.', 'Historical place', '4', '4', '4', '4', '2021-12-17 16:24:42'),
(116, 78, 56, 4.5, 'Interesting Place. Neat and clean. It is named after Someone famous whose name is Alimujjaman. Tourists can visit this place.', 'Nice place', '5', '5', '4', '4', '2021-12-12 15:54:57'),
(117, 79, 65, 3.5, 'Internal decoration is moderate and old without renovation. Water garden is great and decorative. But the approach road is very bad with low road width.', 'Nice Park', '3', '4', '3', '4', '2021-12-15 15:56:24'),
(118, 79, 42, 4, 'I watched here many animals which was very cute and innocent.\r\nThey are looking awesome not dangerous.', 'Attractive zoo', '4', '4', '4', '4', '2021-12-28 15:02:26'),
(119, 80, 66, 4.8, 'It is a place of my heritage in Bangladesh. Which is a unique sign of Bangladesh expansion. People of all religions come to visit it. The place is also beautiful to see.', 'Known as Shorno Mondir', '4', '5', '5', '5', '2022-01-04 16:24:34'),
(120, 80, 37, 5, 'This is a wonderful architecture in the mid of Old Dhaka. Very worth visit along with the boat trip on the river in the south!', 'Real Pink Palace', '5', '5', '5', '5', '2022-01-04 16:27:05'),
(121, 80, 38, 5, 'This is the national martyr monument of Bangladesh located in Nabinagar, Savar, close to Dhaka city. Built-in memory of the freedom fighters who sacrificed their lives in the liberation war. This is one of the modern architectural monuments of Bangladesh, A huge tourists attraction, several hours can be spent here, not only by enjoying the monument but also the park outside.', 'A national pride', '5', '5', '5', '5', '2022-01-04 16:28:37'),
(122, 80, 42, 3.5, 'Some renovation is going on. A large place to visit. You need at least 2-3 hours to visit the whole zoo. Not up to the mark and clean but still you can pass your time. Lots of trees around and many places to sit and take a rest.', 'Nice Place to pass your time with some Animal', '4', '3', '3', '4', '2022-01-04 16:31:38'),
(123, 80, 40, 5, 'This is the biggest museum I have ever seen! this museum is full of many historical data and many different things about Bangladeshi history.', 'Bangladesh national museum tour, a huge collection of history', '5', '5', '5', '5', '2022-01-04 16:33:49'),
(124, 80, 39, 5, 'The history and the witness of the Mughal era, founded in the 17th century. the construction was so affluent compared to that era. The founder of the Lalbagh fort Mughal prince Azam Shah started the construction back in 1678. however, the fort had never been completed for other pathetic reasons described in history.', 'Beauty and history of Mughal Era.', '5', '5', '5', '5', '2022-01-04 16:35:14'),
(125, 80, 47, 4, 'it is the most beautiful mosque in Barisal. if you visit Barisal, you should pay a visit to this mosque. It has a large area and open space. at night lighting is also attractive', 'A beautiful mosque in Bangladesh', '4', '4', '4', '4', '2022-01-04 16:37:55'),
(126, 81, 67, 4, 'Nilachal is one of the most visited places in the Bandarban district of Bangladesh. This attractive tourist center has been set up at Paharchaura of Tigerpara, about six km from Bandarban city, under the supervision of the district administration of Nilachal Tourism Complex Bandarban.', 'The entire Bandarban city can be seen at a glance from Nilachal.', '4', '4', '4', '4', '2022-01-04 17:08:03'),
(127, 81, 37, 4.8, 'Ahsan Manjil, in terms of beauty & location beside River Buriganga, the scenic beauty is lovely & eye soothing. All are in love with this place.', 'Nowab Ahsanullah Baganbari beside buriganga river.', '5', '5', '4', '5', '2022-01-04 17:17:23'),
(128, 81, 38, 5, 'One of the most iconic places in Bangladesh. Situated just outside of Dhaka city. It was built in memory of martyrs of the liberation war. There are 10 mass graves on the premises. The place is beautiful and serene. It is open all day long, every day.', 'Great & Secure Place to Visit', '5', '5', '5', '5', '2022-01-04 17:12:00'),
(129, 81, 39, 5, 'A nice place to hang out with friends and family. Kids friendly.\r\nLegendary leader Shayesta Khan made this place of Muslim heritage.', 'Historical Place', '5', '5', '5', '5', '2022-01-04 17:13:00'),
(130, 81, 40, 4, 'Bangladesh national museum is a good place to visit with families and friends.', 'Good place to visit with family', '4', '4', '4', '4', '2022-01-04 17:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_spot`
--

CREATE TABLE `tourist_spot` (
  `id` int(11) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `tour_name` varchar(500) NOT NULL,
  `tour_des` text NOT NULL,
  `divi_id` varchar(500) NOT NULL,
  `dist_id` varchar(500) NOT NULL,
  `images` varchar(500) NOT NULL,
  `status` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tourist_spot`
--

INSERT INTO `tourist_spot` (`id`, `user_name`, `tour_name`, `tour_des`, `divi_id`, `dist_id`, `images`, `status`) VALUES
(27, 'Admin', 'Test Tourist Spot', 'Test Description', 'Test Division', 'Test District', 'Test Image.bmp', '0'),
(28, 'Admin', 'Bibichini Shahi Mosque', 'Bibi Chini Mosque is an ancient mosque and archaeological site located in Barguna District of Bangladesh. It is located in the Bibi Chini village under Betagi Upazila.', 'Barisal', 'Barguna', 'bibichinimosque.jpg', '0'),
(29, 'Admin', 'Nath Potty Lake', 'Nathpotty Lake is located at Barguna Sadar, Barguna.', 'Barisal', 'Barguna', 'nathpotylake.jpg', '0'),
(30, 'Abdul', 'Sonakata Sea Beach', 'Sonakata Sea Beach is located at Taltali , Barguna.', 'Barisal', 'Barguna', 'sonakataseabeach.jpg', '0'),
(31, 'Ashish ', 'Haringhata Forest', 'The forest is located near the sea beach of Patharghata', 'Barisal', 'Barguna', 'haringhataforest.jpg', '0'),
(37, 'Admin', 'Ahsan Manzil', 'Ahsan Manzil used to be the official residential palace and seat of the Nawab of Dhaka. The building is situated at Kumartoli along the banks of the Buriganga River in Dhaka, Bangladesh. Construction was started in 1859 and was completed in 1872. It was constructed in the Indo-Saracenic Revival architecture. It has been designated as a national museum.', 'Dhaka', 'Dhaka', 'Ahsan_Manzil.jpg', '0'),
(38, 'Admin', 'National Martyrs Memorial', 'The National Martyrs Memorial (Bengali: Jatiyo Sriti Soudho) is the national monument of Bangladesh, set up in the memory of those who died in the Bangladesh War of Independence of 1971, which brought independence and separated Bangladesh from Pakistan. The monument is located in Savar, about 35 km north-west of the capital, Dhaka. It was designed by Syed Mainul Hossain and built by Concord Group.', 'Dhaka', 'Dhaka', 'National_Martyrs_Memorial_08.jpg', '0'),
(39, 'Admin', 'Lalbagh Fort', 'Lalbagh Fort (also Fort Aurangabad) is an incomplete 17th-century Mughal fort complex that stands before the Buriganga River in the southwestern part of Dhaka, Bangladesh. The construction was started in 1678 AD by Mughal Subahdar Muhammad Azam Shah, who was a son of Emperor Aurangzeb and later emperor himself. His successor, Shaista Khan, did not continue the work, though he stayed in Dhaka up to 1688.', 'Dhaka', 'Dhaka', '640px-Awesome_look_of_Lalbagh_Fort.jpg', '0'),
(40, 'Admin', 'Bangladesh National Museum', 'The Bangladesh National Museum is the national museum of Bangladesh. The museum is well organized and displays have been housed chronologically in several departments like department of ethnography and decorative art, department of history and classical art, department of natural history, and department of contemporary and world civilization. The museum also has a rich conservation laboratory. Nalini Kanta Bhattasali served as the first curator of the museum during 1914–1947.', 'Dhaka', 'Dhaka', '1083px-Bangladesh_National_Museum_(01).jpg', '0'),
(41, 'Admin', 'Star Mosque', 'Star Mosque is a mosque located in Armanitola area, Dhaka, Bangladesh. The mosque has ornate designs and is decorated with motifs of blue stars. It was built in the first half of the 19th century by Mirza Golam Pir (Mirza Ahmed Jan).', 'Dhaka', 'Dhaka', 'Tara-masjid.jpg', '0'),
(42, 'Admin', 'Bangladesh National Zoo', 'Bangladesh National Zoo is a zoo located in the Mirpur section of Dhaka, the capital city of Bangladesh. The zoo contains many native and non-native animals and wild life, and hosts about three million visitors each year. The name of zoo has been changed from 5 February 2015 from Dhaka Zoo to Bangladesh National Zoo. Established in 1974, the 186-acre Dhaka Zoo is the largest zoo in Bangladesh, and is operated by the Ministry of Fisheries and Livestock.', 'Dhaka', 'Dhaka', '1197px-Bangladesh_national_zoo.jpg', '0'),
(43, 'Admin', 'National Botanic Garden of Bangladesh', 'The National Botanic Garden of Bangladesh and the Bangladesh National Herbarium make up the largest plant conservation center in Bangladesh, with an area of around 84 hectares (210 acres). It is located at Mirpur-2 in Dhaka,1100, beside the Dhaka Zoo. It was established in 1961. It is one of the greatest botanic gardens of Bangladesh, a knowledge center for nature lovers and botanists and a tourist destination. The herbarium has a scientific collection of approximately 100,000 preserved specimens of plants. Baldha Garden which is in the Wari area of Dhaka is administratively part of the National Garden.', 'Dhaka', 'Dhaka', '960px-Botanical_Garden_Dhaka_Bangladesh_13.jpg', '0'),
(44, 'Admin', 'Durga Sagar', 'Durga Sagar, known locally as Madhabpasha Dighi, is the largest lake in southern Bangladesh. It has a total area of about 25 hectares (62 acres). The lake is about 11 kilometres (6.8 mi) away from Barisal city. Rani Durgabati, mother of Raja Joy Narayan, had the pond excavated in 1780. There is a small island in the middle of the lake; this island was originally not part of the lake - it was created artificially to beautify and increase tourist attraction.', 'Barisal', 'Barisal', 'durga_sagar.jpg', '0'),
(46, 'Admin', 'Freedom Fighters Park', 'Freedom Fighters Park is located in Barisal. Besides this nature attraction, there are five more nature attractions listed in Barisal. Theres also thirteen attractions listed in this district in other categories. You will find the exact location of Freedom Fighters Park on the map above.', 'Barisal', 'Barisal', 'barisal_freedom_fighters_park.jpg', '0'),
(47, 'Admin', 'Baitul Aman Mosque', 'The Baitul Aman Jame Masjid Complex (Bengali: বাইতুল আমান জামে মসজিদ), commonly known as Guthia Mosque (Bengali: গুঠিয়া মসজিদ) of Barisal, is a mosque complex of Bangladesh having a land area of 14 acres, comparing to the 8.30 acres land area of the national mosque Baitul Mukarram of the country. The Baitul Aman Jame Masjid Complex consists of a mosque, a large eidgah, a graveyard, three lakes, a madrasa and an orphanage.', 'Barisal', 'Barisal', 'baitul_aman_barisal.jpg', '0'),
(49, 'Admin', 'Jakob Tower', 'Jakob Tower (Bengali: জ্যাকব টাওয়ার) is a tourist watchtower located in the Char Fasson town of Bhola Island in southern Bangladesh. Natural beauty can be enjoyed from this tower up to an area of 100 km2 (39 sq mi). It is the tallest watchtower in Bangladesh as well as in the subcontinent. Built-in the style of the Eiffel Tower, the 16-story watchtower can accommodate 50 visitors on each floor and 500 visitors throughout the tower', 'Barisal', 'Bhola', 'jacob_tower night.jpg', '0'),
(50, 'Admin', 'The Independence Museum', 'The Independence Museum, স্বাধীনতা জাদুঘর, is in Banglabazar, Bhola. This is the famous Bangla poem which is telling about our liberation war which was taking place in 1971. Not only this poem but also different places, monuments, writing, etc represents the memories and symbols of our liberation war. The Independence Museum in Bhola is one of these places which present and preserve the true history of the language movement to the freedom movement for the next generation.', 'Barisal', 'Bhola', 'liberation_museumbhola.jpg', '0'),
(51, 'Admin', 'Bhola Kayaking Point', 'Tourist attraction in Bhola, Bangladesh. Tourist can come here and rent boats.', 'Barisal', 'Bhola', 'bhola_kayaking_point.jpg', '0'),
(52, 'Admin', 'Kantajew Temple', 'Kantanagar Temple, commonly known as Kantaji Temple or Kantajew Temple (Bengali: কান্তজীর মন্দির) at Kantanagar, is a late-medieval Hindu temple in Dinajpur, Bangladesh. The Kantajew Temple is a religious edifice belonging to the 18th century. The temple belongs to the Hindu Kanta or Krishna and this is most popular with the Radha-Krishna cult (assemble of memorable love) in Bengal.', 'Rangpur', 'Dinajpur', 'kantajew_temple.jpg', '0'),
(53, 'Admin', 'Ramsagar National Park', 'Ramsagar National Park (Bengali: রামসাগর জাতীয় উদ্যান) is a national park in Bangladesh located in Tejpur, near Dinajpur District in the north-west of the country. The Park is 27.76 hectare, in size, and is built around a large water reservoir known as \"Ramsagar tank\". The lake is 1079m in length and 192.6m in width. The soil is red-yellow clay.', 'Rangpur', 'Dinajpur', 'Ramsagar National Park.jpg', '0'),
(54, 'Admin', 'Dinajpur Rajbari', 'The Dinajpur Rajbari (Bengali: দিনাজপুর রাজবাড়ী) is a palace in Bangladesh. The palace was a symbol for the greater Dinajpur district from 1806 to 1951.[1] The building is divided into 3 mahals.', 'Rangpur', 'Dinajpur', 'dinajpur_rajbari.jpg', '0'),
(55, 'Admin', 'Mahasthangarh', 'Mahasthangarh (Bengali: মহাস্থানগড় Môhasthangôṛ) is one of the most earliest urban archaeological sites so far discovered in Bangladesh. The village Mahasthan in Shibganj upazila of Bogra District contains the remains of an ancient city which was called Pundranagara or Paundravardhanapura in the territory of Pundravardhana.', 'Rajshahi', 'Bogra', 'Mahasthangarh.jpg', '0'),
(56, 'Admin', 'Faridpur Museum', 'This is Faridpur Museum. This place was opened by the Honorable sir B. P. Singh Roy, KT. Minister, 1935. Khanbahadur Alimuzzaman Choudhury, MLC, Chairman. Chowdhry Samsuddin Ahmmed, Vice-Chairman. JCSEN, BC district Engineer. Sheikh Nasaruddin, Builder. 1935. Its current position is at Zilla Parishad Faridpur.', 'Dhaka', 'Faridpur', 'faridpur_museum.jpg', '0'),
(57, 'Admin', 'Mathurapur Deul', 'Mathurapur Deul is a deul or monastery located in Mathurapur village in Madhukhali Upazila of Faridpur district in Bangladesh. This archaeological infrastructure is thought to have been built around the sixteenth century; However, some estimate that it is a seventeenth-century installation.', 'Dhaka', 'Faridpur', 'Mathurapur Deul.jpg', '0'),
(65, 'Harun', 'Jess Garden Park', 'A park in Jessore, Khulna.', 'Khulna', 'Jessore', 'Jess_garden_park.JPG', '0'),
(66, 'Admin', 'Bandarban Golden Temple', 'The Buddha Dhatu Jadi (Bengali: বুদ্ধ ধাতু জাদি also known as the Bandarban Golden Temple) is located close to Balaghata town, in Bandarban City, in Bangladesh. Dhatu are the material remains of a holy person, and in this temple the relics belong to Buddha. It is the largest Theravada Buddhist temple in Bangladesh and has the second-largest Buddha statue in the country.', 'Chittagong', 'Bandarban', 'buddha-dhatu-jadi.jpg', '0'),
(67, 'Admin', 'Nilachal Tourist Center', 'Nilachal tourist center is located on a hill about two thousand feet high near the city of Bandarban. Nilachal is located in the Tiger Para area, just 5 km away from the city. Somewhere on the slopes of the wide horizon, the winding roads, the hilly neighbourhoods and the silver rivers are like paintings by an artist. The whole city of Bandarban can be seen at a glance from this hill.', 'Chittagong', 'Bandarban', 'nilachal.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(300) COLLATE utf8_unicode_ci NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `date`, `status`) VALUES
(41, 'Soyad', 'soyad@gmail.com', '123', '', 1),
(45, 'Rozi', 'roz@gmail.com', '123', '', 0),
(48, 'Akram', 'akr@gmail.com', '123', '', 0),
(49, 'Ajjet', 'ajj@gmail.com', '123', '', 0),
(50, 'Admin', 'admin@gmail.com', 'admin123', '', 1),
(72, 'Rahman', 'rahman@gmail.com', '123', '2021-12-06 05:27:59', 0),
(73, 'Asyraf', 'asyrafkarma@gmail.com', '12345678', '2021-12-06 05:49:27', 0),
(74, 'Riyad', 'riyad@gmail.com', '123', '2021-12-14 17:03:05', 0),
(75, 'Sadi', 'sadi@gmail.com', '123', '2021-12-14 17:14:00', 0),
(76, 'Rayhan', 'rayhan@gmail.com', '123', '2021-12-14 17:18:00', 0),
(77, 'Chandan', 'chandan@gmail.com', '123', '2021-12-15 19:50:26', 0),
(78, 'Shakil', 'shakil@gmail.com', '123', '2021-12-17 16:03:54', 0),
(79, 'Harun', 'harun@ymail.com', '123', '2021-12-28 14:49:10', 0),
(80, 'Fahmi', 'fahmi@gmail.com', '123', '2022-01-04 16:21:27', 0),
(81, 'Saber', 'saber@gmail.com', '123', '2022-01-04 17:06:36', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist_spot`
--
ALTER TABLE `tourist_spot`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `tourist_spot`
--
ALTER TABLE `tourist_spot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
