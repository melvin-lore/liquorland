-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 07:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liqourland`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'melvinlore', '12345'),
(2, 'gabriel007', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(30) NOT NULL,
  `drink_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `drink_type`) VALUES
(1, 'Brandy'),
(2, 'Gin'),
(3, 'Rum'),
(4, 'Tequila'),
(5, 'Whiskey');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(100) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_No` bigint(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `Pay_Mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `Full_Name`, `Phone_No`, `Address`, `date_added`, `Pay_Mode`) VALUES
(4, 'Lionel', 123456, 'Paris', '0000-00-00 00:00:00', 'COD'),
(5, 'Cristiano', 123456789, 'Manchester,England', '0000-00-00 00:00:00', 'COD'),
(6, 'Harry', 7303491831, 'London', '0000-00-00 00:00:00', 'COD'),
(7, 'Auba', 123456, 'London', '0000-00-00 00:00:00', 'COD'),
(8, 'Peter', 1234556, 'gitanga road', '0000-00-00 00:00:00', 'COD'),
(9, 'Trevor', 22222, 'Kileleshwa', '0000-00-00 00:00:00', 'Mpesa'),
(10, 'Lionel Messi', 718425782, 'Egypt', '0000-00-00 00:00:00', 'PayPal'),
(11, 'Patrick', 731134560, 'usiu road', '0000-00-00 00:00:00', 'Card'),
(12, 'Maina Johnstone', 734567794, 'Kisumu', '0000-00-00 00:00:00', 'MPESA'),
(13, 'Peter', 2547367326091, 'Kilimani', '2021-09-22 11:50:26', 'MPESA'),
(14, 'Patrick Lumumba', 703456784, 'Ngong road', '2021-10-12 09:53:07', 'MPESA'),
(15, 'Jackson Gambo', 711235478, 'Mombasa', '2021-11-05 09:57:03', 'MPESA'),
(16, 'Melvin Lore', 708028784, 'Mombasa', '2021-11-17 10:46:01', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(6) NOT NULL,
  `Drink` varchar(45) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Drink`, `Type`, `Price`, `Description`, `Image`) VALUES
(1, 'Bacardi 151', 'Brandy', 2000, 'Do what moves you with Bacardi Rum, a true taste of the Caribbean.', 'images/prod-1.jpg'),
(2, 'Jim Beam Kentucky ', 'Gin', 2739, 'Jim Beam is a bourbon with pronounced oaky vanilla aromas along with a spicy backdrop. It is a medium-bodied drink with mellow hints of caramel and vanilla.', 'images/prod-2.jpg'),
(3, 'The Glenlivet', 'Rum', 4689, 'A classic Glenlivet, with a creamy and fruity character, sweet with hints of chocolate raisins and milk chocolate flakes.', 'images/prod-4.jpg'),
(4, 'Citadelle', 'Gin', 2700, 'The finish is what sets Citadelle Gin apart from its peers: really bright, a touch sweet and strongly aromatic: cardamom, angelica, nutmeg, a wide array of baking spices which melds into a more sharp licorice and fennel on the finish. Generally spice forward and slightly contemporary with a juniper base.', 'images/prod-3.jpg'),
(5, 'Black Label', 'Whiskey', 3069, 'A perfectly balanced blend with uniquely intense and complex flavours from the four corners of Scotland.', 'images/prod-5.jpg'),
(6, 'Macallan', 'Tequila', 5000, 'Each and every Macallan single malt whisky reveals our unrivalled commitment to the mastery of wood and spirit since 1824', 'images/prod-6.jpg'),
(7, 'Old Monk', 'Rum', 1029, 'A 7-year-old iconic vatted dark rum from Uttar Pradesh in India. It was launched in 1954. Has a distinctive vanilla flavor with an alcohol content of 42.8%. Old Monk Rum is one of the largest selling rums in the world, almost all thanks to word of mouth.', 'images/prod-7.jpg'),
(8, 'Jameson Irish ', 'Whiskey', 2329, 'Jameson Original is made of pot still and grain whiskey that is triple distilled to create a smooth taste of vanilla and hints of sweet sherry. Jameson is aged for a minimum of 4 years to give it a floral fragrance smell.', 'images/prod-8.jpg'),
(9, 'Skrewball', 'Whiskey', 2500, 'Skrewball Peanut Butter Whiskey is a 70 proof American whiskey, made from corn and barley and enhanced with premium natural flavors—created specifically for Skrewball—and sweetened by pure cane sugar.', 'images/prod-9.jpg'),
(10, 'Jack Daniels', 'Whiskey', 3189, 'On the nose, Jack Daniels has a nice, balanced character of sweet vanilla, caramel, and a little bit of an oak edge. This is followed by a nice, medium body with a tingling sweet at the tip of the tongue, then balanced notes of sweet and oak on the mid palate.', 'images/prod-10.jpg'),
(11, 'McClelland\'s', 'Whiskey', 2800, 'World-famous blend that has weathered the corporate takeover jungle.', 'images/prod-11.jpg'),
(12, 'Plantation', 'Rum', 2400, 'Plantation produces rums from several Caribbean countries, encompassing a broad range of styles.', 'images/prod-12.jpg'),
(13, 'Hennesy XO', 'Brandy', 4499, 'Very balanced on the palate, X.O confirms the aromas discovered by scent: dried fruit & chocolate.', 'images/hennesy.jpg'),
(14, 'Captain Morgan ', 'Rum', 1689, 'Captain Morgan Jamaica Rum is a blend popular with cocktails and mixed drinks for its rich and full-bodied taste. It is of different rums from Jamaica, Guyana and Barbados, distilled in a two-part process using both pot and continuous stills, then aged for 2 to 7 years in charred oak barrels.', 'images/captain.jpg'),
(15, 'Chrome', 'Gin', 600, 'Chrome Gin brings a smooth and crisp gin inspired by the vibrancy of our streets and celebrates the lively urban consumer.', 'images/chrome.jpg'),
(16, 'Heaven Hill', 'Whiskey', 1300, 'Produced in accordance with a unique set of regulations that define Straight Corn Whiskey.', 'images/heaven.jpg'),
(17, 'Patron Anejo 750ml', 'Tequila', 7600, 'Patron Anejo is a smooth amber colored tequila delicately handcrafted from the finest 100% Weber Blue Agave.', 'images/patron.jpg'),
(18, 'Cicero', 'Brandy', 1100, 'Cicero Brandy is a wonderfully matured local brandy that pours with a brilliant gold color.', 'images/cicero.jpg'),
(19, 'Bloom London', 'Gin', 4029, 'Bloom Gin is a remarkable London Dry Gin curated by Grenall’s and named “Bloom” to characterize the floral nature of the botanicals in this blend.', 'images/bloom.jpg'),
(20, 'Spytail Black', 'Rum', 2500, 'Spytail is imported from France and infused with fresh ginger and other spices.', 'images/spy.jpg'),
(21, 'Louis XIII 700ml', 'Brandy', 422000, 'With its grace, refinement and taste, the mastery of Louis XIII throughout the ages has always been a tireless pursuit of excellence. Louis XIII is acclaimed as being the taste reference for cognac. Richly woven with history and steeped in family tradition, Louis XIII is an enigma to all aesthetes and a symphone of exceptional charm and amazement. It is truly a gift of nature and offers the ultimate precious moment in life.', 'images/remy.jpg'),
(22, 'Glenfiddich', 'Whiskey', 9000, 'Carefully matured for 18 years in the finest Oloroso sherry and bourbon casks built by own expert coopers.', 'images/glen.jpg'),
(23, 'Greenall\'s Wild Berry', 'Gin', 1700, 'Greenall’s Wild Berry takes its inspiration from English countryside hedgerows. Curated by blending blackberries and raspberries with Greenall’s Original London Dry Gin.', 'images/green.jpg'),
(24, 'Havana Club 7 Anos', 'Rum', 1730, 'Havana Club 7 Años is the most prestigious light Cuban rum.', 'images/havana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Melvin', 'Lore', 'melvinlore85@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(2, 'Patrick', 'Lumumba', 'patricklumumba@gmail.com', 'c29c9e709d670b243a0108c94e487b183af6bea9'),
(3, 'Lionel', 'Messi', 'lionelmessi@gmail.com', 'eacb0d1b53a6f12893e95c7c5aec16de3ff2a939'),
(4, 'Hope', 'Kamau', 'hope@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(5, 'Justin', 'Mbeche', 'justin22@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(11, 'Dominic', 'Mbatia', 'dommbatia@gmail.com', '6c8e1862f7eae123ba2946e3eaa7b0087e012ddf'),
(12, 'John', 'Aimba', 'jaimba@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(13, 'Christine', 'Nyawira', 'cnyawira@gmail.com', '7b21848ac9af35be0ddb2d6b9fc3851934db8420'),
(14, 'Mary', 'Wangui', 'mwangui@gmail.com', '403d9917c3e950798601addf7ba82cd3c83f344b'),
(15, 'Wilson', 'Wangai', 'wwangai@gmail.com', '04f081741466827161bede82a374af0ec9a39e31'),
(16, 'Julia', 'Muhoho', 'jmuhoho@gmail.com', '273a0c7bd3c679ba9a6f5d99078e36e85d02b952'),
(17, 'Ivy', 'Mwangi', 'ivymwangi@gmail.com', '69df79bef9287d3bcb8f104a408b06de6a108fd8'),
(18, 'Gibson ', 'Wambugu', 'gwambugu@gmail.com', 'a045b7efa463c6ed195c644163f4168952fbd34a'),
(19, 'Vincent', 'Kompany', 'vkompany@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(20, 'Aaron', 'Ramsdale', 'aaronramsdale@gmail.com', '0fc464fe5e2c7029ef1ba482c1549ce7a8b3e1bf'),
(21, 'Collins', 'Oduor', 'coduor@gamil.com', '8cb2237d0679ca88db6464eac60da96345513964');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_id` int(100) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_id`, `Product`, `Price`, `Quantity`) VALUES
(8, 'Bacardi 151', 2000, 2),
(8, 'Jim Beam Kentucky Straight', 2739, 1),
(9, 'Bacardi 151', 2000, 1),
(10, 'Jim Beam Kentucky ', 2739, 1),
(11, 'The Glenlivet', 4689, 1),
(12, 'Bacardi 151', 2000, 1),
(13, 'Chrome', 600, 1),
(0, '', 0, 0),
(14, 'Hennesy XO', 4499, 1),
(14, 'Spytail Black', 2500, 1),
(15, 'Bacardi 151', 2000, 1),
(16, 'The Glenlivet', 4689, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
