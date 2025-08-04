-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2025 at 04:14 PM
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
-- Database: `maxvitaf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(85) DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `ingredient` text NOT NULL,
  `popular` int(11) NOT NULL,
  `price` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `new` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `type`, `description`, `ingredient`, `popular`, `price`, `new`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cream and Onion', NULL, 'cream-and-onion.png?v=1.1', 'Potato Chips', 'Just by adding a little bit of salt, cheese powder and the right spices to farm-fresh potatoes and a wonder product with a \'cream and onion flavour\' is created.\r\nAlready a favourite product among snack-lovers across the region, this product showcases Maxvita\'s ability to create lip-smacking snacks from basic ingredients.', 'Farm fresh potatoes, Edible vegetable oil, Iodized salt, Sugar, Milk solids, Cheese Powder, Spices and Condiments.', 1, 'Available in ₹5, ₹10 & ₹20 pack sizes', 0, NULL, NULL, NULL),
(2, 'Chilli Chutney', NULL, 'chilli-chutney.png', 'Potato Chips', 'Dipping potato chips in chilli chutney is one of the ways favoured by many to eat their chips. But you realise it gets soggy very fast. You no longer need to worry about this problem with our \'chilli chutney\' chips. A specialised manufacturing process ensures that our chips tastes like dipped in real chilli chutney and yet retains all the crispiness.', 'Farm fresh potatoes, Edible vegetable oil, Iodized salt, Sugar, Spices and Condiments.', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(3, 'Tomato Ketchup', NULL, 'tomato-ketchup.png?v=1.1', 'Potato Chips', 'One more favourite way of eating potato chips by many food lovers - dip it in tomato ketchup. Take a bit of our magical \'tomato ketchup\' potato chips and you will realise why this is one of the favourites among our customers. Tastes of a potato chip dipped in real tomato ketchup, yet crunchy and crispy.', 'Farm fresh Potatoes, Edible Vegetable Oil, Iodized Salt, Sugar, Spices and Condiments.', 1, 'Available in ₹5, ₹10 & ₹20 pack sizes', 0, NULL, NULL, NULL),
(4, 'Masala Miracle', NULL, 'masala-miracle.png', 'Potato Chips', 'Can adding high quality spices to season potato chips create a magic? Well, you need to really bite-into this. Highly delicious, crispy and crunchy and of course irresistible.', 'Farm fresh Potatoes, Edible Vegetable Oil, Iodized Salt, Sugar, Spices and Condiments.', 1, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(5, 'Corn Rings - Chatpata Masala', NULL, 'corn-rings-chatpata-masala.png', 'Corn Snacks', 'Basic corn rings with an explosion of taste in your mouth. Made with simple ingredient but taste oh-so-great!', 'Corn Meal, Rice Meal, Edible Vegetable Oil, Sugar, Edible Common Salt, Spices and Condiments.', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(6, 'Corn Rings - Yummy Cheese', NULL, 'corn-rings-yummy-cheese.png', 'Corn Snacks', 'Extremely delicious rings oven baked with a burst of cheese. Munch on these healthy corn rings absolutely guilt free.', 'Corn Meal, Rice Meal, Edible Vegetable Oil, Sugar, Edible Common Salt, Spices and Condiments.', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(7, 'Puffcorn - Tomato Twist', NULL, 'puffcorn-tomato-twist.png', 'Corn Snacks', 'Delicious, crunchy, oven baked & healthy puffcorns with a twist of tomato flavour.  You are sure to love tomatoes if you don\'t already!', 'Corn Meal, Rice Meal, Edible Vegetable Oil, Sugar, Edible Common Salt, Spices and Condiments.', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(8, 'PuffCorn - Cheese Masti', NULL, 'puffcorn-cheese-masti.png', 'Corn Snacks', 'Maxvita Puffcorn Cheese Masti is a snack food product that combines the crunchiness of puffcorn with the creamy, cheesy flavor of masti cheese. It\'s a perfect snack for those who love the combination of savory and crunchy textures in a single bite. The cheese flavor is rich, tangy and delicious, making these chips the perfect snack for anytime, anywhere!', 'Corn Meal, Rice Meal, Corn Meal, Cheese Powder, Sugar, Edible Common Salt, Spices and Condiments', 0, 'Available in ₹5 & ₹10 pack sizes', 0, NULL, NULL, NULL),
(9, 'Cheese Balls - Tomato Tango', NULL, 'cheese-balls-tomato-tango.png', 'Corn Snacks', 'Yummy & crunch balls of cheese with a kick of tomato!  Taste so good, you cannot stop at one packet ;)', 'Corn Meal, Corn Meal, Sugar, Edible Common Salt, Spices and Condiments.', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(10, 'Cheese Balls - Chatpata Dhamaka', NULL, 'cheese-balls-chatpata-dhamaka.png', 'Corn Snacks', 'A dhamaka of cheese & excellent taste in your mouth! Grab a packet of these and bring your munch game on!', 'Corn Meal, Rice Meal, Edible Vegetable Oil, Sugar, Edible Common Salt, Spices and Condiments', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(11, 'Wheels - Yummy Tomato', NULL, 'wheels-yummy-tomato.png', 'Fryums Snacks', 'The wheels of the best tasting snacks keep rolling in! Feel a burst of the yummy tomato taste in the yummy tomato.', 'Wheat Flour, Edible Vegetable Oil, Edible Starch, Iodized Salt, Spices and Condiments.', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(12, 'Super Rings - Masala Magic', NULL, 'super-rings-masala-magic.png', 'Fryums Snacks', 'You can now play with your food ;)  Put these crispy & tasty bites on your fingers and munch in style!', 'Wheat Flour, Edible Vegetable Oil, Edible Starch, lodized Salt, Spices & Condiments', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(13, 'Super Rings - Tomato', NULL, 'super-rings-tomato.png', 'Fryums Snacks', 'Tomatoes shaped like a ring and ten  times tastier. Have fun with the ring shaped crisps that our crunchy tomato comes in.', 'Wheat Flour, Edible Vegetable Oil, Edible Starch, Iodized Salt, Spices and Condiments.', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(14, 'Karumkure - Tomato Tangy', NULL, 'karumkure-tomato-tangy.png', 'Namkeen Snacks', 'We turned the ordinary taste of tomatoes into something interesting, crunchy & flavorsome.', 'Rice Meal, Corn Meal, Gram Meal, Edible Vegetable Oil, Iodized Salt, Spices and Condiments', 1, 'Available in ₹5 & ₹10 pack sizes', 0, NULL, NULL, NULL),
(15, 'Karumkure - Chat Masala', NULL, 'karumkure-chat-masala.png', 'Namkeen Snacks', 'Feel the burst of taste in these chat masala induced crunchy bites', 'Rice Meal,Corn Meal,Gram Meal Edible Vegetable Oil,Iodized Salt, Spices and Condiments', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(16, 'Crunchy Noodles - Veg. Biriyani', NULL, 'crunchy-noodles-veg-biriyani.png', 'Fryums Snacks', 'The taste of biryani. In a chip.  No, we are not kidding you.  Fill your biryani cravings anytime, anywhere at the convenience of Maxvita!', 'Wheat Flour, Edible Vegetable Oil, Edible Starch, Iodized Salt, Spices and Condiments.', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(17, 'Crunchy Pasta - Tomato Chaska', NULL, 'crunchy-pasta-tomato-chaska.png', 'Fryums Snacks', 'In the mood for pasta but too tired to make some? We solve your issue! Get the flavour of pasta in our special crunch pasta chips! Who says pasta shouldn\'t be crunchy?', 'Wheat Flour, Edible Vegetable Oil, Edible Starch, lodized Salt, Spices & Condiments', 1, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(18, 'Moong Dal', NULL, 'moong-dal.png', 'Namkeen Snacks', 'India\'s favorite namkeen - Moong Dal! Grab a packet of our super tasty namkeen & bring the binge on!', 'Split Green Gram, Edible Vegetable oil and Edible Salt.', 1, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(19, 'Barbeque Max', NULL, 'barbeque-max.png', 'Potato Chips', 'Enjoy the delicious taste of Barbeque effortlessly. Maxvita has curated the taste of barbeque on a chip to give you the best munching experience.', 'Farm fresh Potatoes, Edible Vegetable Oil, Iodized Salt, Sugar, Spices and Condiments.', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(20, 'Karumkure - Manchurian Magic', NULL, 'manchurian-magic.png', 'Namkeen Snacks', 'The taste of Manchurian into something interesting, crunchy & flavorsome.', 'Rice Meal, Corn Meal, Gram Meal, Edible Vegetable Oil, Iodized Salt, Spices and Condiments', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(21, 'Premium Crunchy Rusk', NULL, 'premium-crunchy-rusk.png', 'Rusks and Cookies', 'Made from the finest ingredients to make it extra crispy, tasty & healthy to tantalise your taste buds at tea time.', 'Refined Whear flour (Maida) (70%), Sugar, Edible vegetable oil(Palm), Sooji, Invert Syrup, Iodised Salt, Yeast, Improvers [1100(i), 1102, 1104], Wheat Gluten, Spices(Cardamom seeds & oil) and Antioxidant (300)', 0, 'Available in ₹10, ₹20 & ₹30 pack sizes', 0, NULL, NULL, NULL),
(22, 'Premium Milk Rusk', NULL, 'premium-milk-rusk.png', 'Rusks and Cookies', 'Premium milk rusk packed with energy and nutrition contains the goodness of milk, a perfect companion to satisfy those light hunger.', 'Refined Whear flour (Maida) (71%), Sugar, Edible vegetable oil fat, Iodised Salt, Yeast, Milk Solids, Wheat Gluten, Bread Improver (Starch, Soya flour treatment agent, [E1100 and anti caking agent (E170(i))) and Antioxidant (E3000)', 0, 'Available in ₹10, ₹20 & ₹30 pack sizes', 0, NULL, NULL, NULL),
(23, 'Classic Salted', NULL, 'classic-salted.png', 'Potato Chips', 'Just by adding a little bit of Classic Salt and the right spices to farm-fresh potatoes and a wonder product called \'Classic Salted\' is created. Already a favourite product among snack-lovers across the region, this product showcases Maxvita\'s ability to create lip-smacking snacks from basic ingredients.', 'Farm fresh potatoes, Edible vegetable oil, Iodized Salt, Sugar, Milk solids, Spices and Condiments.', 0, 'Available in ₹5 & ₹10 pack sizes', 0, NULL, NULL, NULL),
(24, 'Chilli Sprinkled', NULL, 'chilli-sprinkled.png', 'Potato Chips', 'Sprinkling a little bit Chilli Powder and the right spices to farm-fresh potatoes creates a wonder product called \'Chilli Sprinkled\' Potato chips. Already a favourite product among snack-lovers across the region, this product showcases Maxvita\'s ability to create lip-smacking snacks from basic ingredients.', 'Farm fresh potatoes, Chilli Powder, Edible vegetable oil, Iodized Salt, Spices and Condiments', 1, 'Available in ₹5, ₹10 & ₹20  pack sizes', 0, NULL, NULL, NULL),
(25, 'Soya Sticks', NULL, 'soya-stick.png', 'Namkeen Snacks', 'Maxvita Soya Sticks are highly nutritious & contain low sodium and low fat. These light snacks are the perfect accompaniment to your coffee/ tea.', 'Wheat Flour, Edible Vegetable Oil, Edible Starch, Iodized Salt, Spices and Condiments.', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(26, 'Aloo Bhujia', NULL, 'aloo-bhujia.png', 'Namkeen Snacks', 'A premium Maxvita Snack made with a dash of spice to potato & gram flour, Aloo Bhujia is not just tastier but also healthier.', 'Made using farm fresh potatoes, rice flour & gram flour. This is often served as a teatime snack and is extremely popular', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(27, 'Crunchy Gathiya - Magic Masala', NULL, 'crunchy-gathiya-magic-masala.png', 'Namkeen Snacks', 'Maxvita Crunchy Gathiya is a crispy and crunchy snack that is a popular choice for snacking. These are typically seasoned with spices and have a savoury taste. They are a tasty and convenient snack option for those looking for a crunchy and satisfying bite.', 'Rice Flour, Edible Vegetable Oil, Potato Solids, Potato Starch, Chickpea Flour, Cheese Powder, Edible Common Salt, Spices and Condiments. Citric Acid(E330), Malic Acid(E296) as Acidity Regulators', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(28, 'Crispy Moon Chips - Yummy Tomato', NULL, 'crispy-moon-chips-yummy-tomato.png', 'Fryums Snacks', 'Maxvita Crispy Moon Chips in Yummy Tomato Flavor is a delicious and savory snack that combines the crunchiness of chips with the delightful tanginess of tomato flavor. These chips are meticulously crafted to provide an enjoyable snacking experience that caters to both taste and texture.', 'Wheat Flour, Tapioca Starch, Corn Starch, Refined Palm Olien, Seasoning (Iodised Salt, Spices and Condiments, Flavour (Natural and Nature Identical Flavouring Substances))', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(29, 'Potato Finger Sticks - Tomato Tangy', NULL, 'potato-finger-sticks-tomato-tangy.png', 'Potato Chips', 'Maxvita potato finger sticks in tomato tangy flavour are a savoury snack that combines the crunchiness of potato sticks with a zesty tomato tang. These finger sticks are made from real potatoes that are carefully sliced and seasoned to perfection, resulting in a delightful and satisfying snacking experience.', 'Farm Fresh Potato, Refined Palm Olien, Seasoning (Iodised Salt, Spices and Condiments, Flavour (Natural and Nature Identical Flavouring Substances)) ', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(30, 'Punjabi Tadka - Tomato Tangy', NULL, 'punjabi-tadka-tomato-tangy.png', 'Namkeen Snacks', 'Maxvita Punjabi Tadka Tomato Tangy Flavor is a delightful blend of flavours that captures the essence of traditional Punjabi cuisine with a tangy twist. This flavour is designed to tantalize your taste buds with a burst of rich and authentic Indian flavours.', 'Potato Starch, Gram Flour, Refined Palm Olien, Potato, Rice Powder, Seasoning (Tomato Powder, Iodised Salt, Sugar, Spices and Condiments, Flavour (Natural and Nature Identical Flavouring Substances))', 0, 'Available in ₹5 pack size', 0, NULL, NULL, NULL),
(31, 'Salted Peanuts', NULL, 'salted-peanuts.png', 'Namkeen Snacks', 'Maxvita Salted Peanuts are a savoury and satisfying snack that combines the natural goodness of peanuts with a perfect touch of salt. These peanuts are carefully selected for their quality, ensuring a crunchy texture and rich flavour in every bite. The salted coating enhances the taste of the peanuts, creating a delightful balance between the nutty richness and a savoury hint of saltiness.', 'Peanuts, Refined Palm Olein, Seasoning (Iodised Salt,  Flavour (Natural and Nature Identical Flavouring Substances))', 0, 'Available in ₹5 & ₹30 pack sizes', 0, NULL, NULL, NULL),
(32, 'Fruit Rusk', NULL, 'fruit-rusk.png', 'Rusks and Cookies', 'Maxvita Fruit Rusk is a delicious, energy-packed snack crafted with the goodness of milk. Each golden-brown slice is infused with real fruit bits, delivering a delightful burst of fruity flavor in every bite. Perfectly crisp and wholesome, it’s an ideal treat for any time of the day.', 'Refined Wheat Flour(Maida), Sugar, Refined Palm and Palmoline Oil, Tutti Frutti ( Candied Papaya) cherry Fruit, Yeast, Milk Solids, Iodized Salt, Wheat Gluten, Vanilla Powder, Wheat Fiber, Improvers[1100(i) & 1104], Emulsifier [471, 472e] Antioxidant (E3000), Flavour (Natural and Nature Identical Flavouring substances)', 0, 'Available in ₹10 pack size', 0, NULL, NULL, NULL),
(33, 'Crunchy Indian Mixture', NULL, 'crunchy-indian-mixture.png', 'Namkeen Snacks', 'Maxvita Crunchy Indian Mixture is a perfectly balanced snack, packed with bold flavors and an irresistible crunch. Every bite offers a delightful blend of spicy, tangy, and savoury tastes, making it the perfect treat for any occasion.', 'Gram Flour, Peanut, Fried Gram Split, Refined Palm Olein, Seasoning (Chilli Powder, Iodised Salt, Asafoetida, Spices, and condiments), Curry Leaves, (contains natural and nature identical Flavouring Substances)', 1, 'Available in ₹10 & ₹30 pack sizes', 1, NULL, NULL, NULL),
(34, 'Cheese Balls Tomato (Family Pack)', NULL, 'cheese-balls-cheddar-tomato.png', 'Corn Snacks', 'Yummy and crunchy balls of Cheese with a kick of Cheddar tomato! Oven-baked. They taste so good that you cannot stop at one packet.', 'Corn Meal, Refined Palm Olein, Seasoning (Tomato Powder, cheese Powder, Milk Solids, Sugar, Iodised Salt, Spices and Condiments(Contains Natural and Nature Identical Flavouring Substances)', 0, 'Available in ₹30 pack size', 0, NULL, NULL, NULL),
(35, 'Crunchy Moong Dal', NULL, 'moong-dal-salted.png', 'Namkeen Snacks', 'India\'s Favourite Namkeen, enjoy the natural goodness of premium-quality Moong Dal for a wholesome and balanced diet. Grab a packet of our super tasty Namkeen and bring the binge on!', 'Split Pulse Moong (Moong Dal), Refined Palm Olein, and Edible Common Salt.', 0, 'Available in ₹10 pack size', 1, NULL, NULL, NULL),
(36, 'Crunchy Onion Rings', NULL, 'crunchy-onion-rings.png', 'Namkeen Snacks', 'Craving a bold, crispy snack full of flavor? Our crunchy onion rings are the perfect munch-worthy treat! These light, crispy rings pack a delicious onion flavor with just the right balance of seasoning, making them irresistibly tasty.', 'Wheat Flour, Maize Starch, Tapioca Starch, Refined Palm Olein, Seasoning (Onion Powder, Iodised Salt, Garlic Powder, Sugar, Spices and condiments). Contains Natural and Nature Identical  Flavouring Substances.', 1, 'Available in ₹5 pack size', 1, NULL, NULL, NULL),
(37, 'Crunchy Murukku', NULL, 'crunchy-murukku.png', 'Namkeen Snacks', 'Crunchy Murukku – A Crispy, Southern Delight.\r\n\r\nIndulge in the irresistible taste of our Crunchy Murukku, a traditional South Indian snack made with love and authentic ingredients. Perfectly shaped and deep-fried to golden perfection, every bite offers a satisfying crunch and a burst of savoury flavour.\r\n\r\nWhether you enjoy it with your evening chai or share it with guests during festivals, this crispy treat never disappoints!', 'Rice flour, refined palm oil, Urad Dal, besan flour, iodised salt, spices, and condiments. It contains natural and nature-identical flavouring substances.', 1, 'Available in ₹10 and ₹30 pack sizes', 1, NULL, NULL, NULL),
(38, 'Butter Cookies', NULL, 'butter-cookies.png', 'Rusks and Cookies', 'Experience the timeless delight of our Butter Cookies—crafted with premium ingredients to deliver a rich, buttery flavour and a melt-in-your-mouth texture. These cookies are the perfect companion for your tea-time moments or as a delightful snack any time of the day.', 'Refined Wheat Flour, Sugar, Refined Palm Oil, Milk Solids, Liquid Glucose, Iodised Salt, Leavening Agents [INS 503 ii, INS 500 ii], Emulsifier [INS 322 FROM SOY], Cardamom Seeds, Vanillin, Contains Natural and Nature Identical Flavouring Substances.', 1, 'Available in ₹10 pack size', 1, NULL, NULL, NULL),
(39, 'Choco Cookies', NULL, 'choco-cookies.png?v=1', 'Rusks and Cookies', 'Indulge in our Choco Chip Cookies, where every bite is a perfect harmony of crispy cookie and rich chocolate chips. Crafted with premium ingredients, these cookies are designed to satisfy your chocolate cravings with an abundance of choco chips in every mouthful.', 'Refined Wheat Flour, Sugar, Refined Palm Oil, Invert Syrup, Cocoa Powder, Butter, Milk Solids, Chocolate Chips, Iodised Salt, Leavening Agents [INS 503 ii, INS 500 ii], Emulsifier [INS 322 FROM SOY], Vanillin, Contains Natural and Nature Identical Flavouring Substances.', 1, 'Available in ₹10 pack size', 1, NULL, NULL, NULL),
(41, 'Cream and Onion Party Pack', NULL, 'cream-and-onion-fp.png?v=1.1', 'Potato Chips', 'Just by adding a little bit of salt, cheese powder and the right spices to farm-fresh potatoes and a wonder product with a \'cream and onion flavour\' is created.\r\nAlready a favourite product among snack-lovers across the region, this product showcases Maxvita\'s ability to create lip-smacking snacks from basic ingredients.', 'Farm fresh potatoes, Edible vegetable oil, Iodized salt, Sugar, Milk solids, Cheese Powder, Spices and Condiments.', 1, 'Available in ₹50 pack size', 1, NULL, NULL, NULL),
(40, 'Cheese Balls - Cheese Masti', NULL, 'cheese-balls-cheese-masti.png', 'Corn Snacks', 'Get ready for a burst of cheesy delight with our Cheese Ball – Cheese Masti! Each bite-sized ball is perfectly puffed and generously coated with corn, creamy cheese flavour that melts in your mouth.', 'Corn Meal, Refined Palm Olein, Seasoning (Tomato Powder, Cheese Powder, Milk Solids, Sugar, Iodised Salt, Spices and Condiments (Contains Natural and Nature Identical Flavouring Substances)', 1, 'Available in ₹30 pack size', 1, NULL, NULL, NULL),
(42, 'Tomato Ketchup Party Pack', NULL, 'tomato-ketchup-fp.png?v=1.1', 'Potato Chips', 'One more favourite way of eating potato chips by many food lovers - dip it in tomato ketchup. Take a bit of our magical \'tomato ketchup\' potato chips and you will realise why this is one of the favourites among our customers. Tastes of a potato chip dipped in real tomato ketchup, yet crunchy and crispy.', 'Farm fresh Potatoes, Edible Vegetable Oil, Iodized Salt, Sugar, Spices and Condiments.', 1, 'Available in ₹50 pack size', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_slug` (`slug`),
  ADD KEY `idx_deleted_at` (`deleted_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
