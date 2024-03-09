-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 11:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(250) DEFAULT NULL,
  `a_email` varchar(250) DEFAULT NULL,
  `a_password` varchar(250) DEFAULT NULL,
  `a_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`a_id`, `a_name`, `a_email`, `a_password`, `a_img`) VALUES
(1, 'Madiha', 'madiha@gmail.com', 'madiha', 'cus4.jpg'),
(2, 'Furqan', 'furqan@gmail.com', 'furqan', 'cus8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`category_id`, `category_name`) VALUES
(5, 'Novel'),
(6, 'Comics'),
(16, 'Story Books'),
(17, 'General Knowledge Books');

-- --------------------------------------------------------

--
-- Table structure for table `book_detail`
--

CREATE TABLE `book_detail` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(250) DEFAULT NULL,
  `b_description` varchar(250) DEFAULT NULL,
  `b_author` varchar(250) DEFAULT NULL,
  `b_price` int(11) DEFAULT NULL,
  `thumbnail_img` varchar(250) DEFAULT NULL,
  `b_category` int(11) DEFAULT NULL,
  `b_file` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_detail`
--

INSERT INTO `book_detail` (`b_id`, `b_name`, `b_description`, `b_author`, `b_price`, `thumbnail_img`, `b_category`, `b_file`) VALUES
(1, 'Anna Karenina ', 'Anna Karenina by Leo Tolstoy is a tragic novel that follows the rise and fall of the love affair between Anna Karenina and Count Vronsky.', 'Leo Tolstoy', 1500, 'Anna Karenina by Leo Tolstoy.jpg', 5, NULL),
(2, 'Crime and Punishment', 'Crime and Punishment is a novel written by Fyodor Dostoevsky in 1866. It portrays the main character, Raskolnikov, as a young, arrogant, and indecisive young man who is living in poverty.', 'Fyodor Dostoyevsky', 1900, 'Crime and Punishment by Fyodor Dostoyevsky.jpg', 6, NULL),
(3, 'Hamlet', ' The ghost of the King of Denmark tells his son Hamlet to avenge his murder by killing the new king, Hamlets uncle.', 'William Shakespeare', 3100, 'Hamlet by William Shakespeare.jpg', 16, NULL),
(4, 'Lolita ', 'Humbert, a middle-aged man obsessed with a young girl named Lolita. The book delves into the dark depths of obsession and explores the blurred boundaries between love and exploitation.', 'Vladimir Nabokov', 1280, 'Lolita by Vladimir Nabokov.jpg', 17, NULL),
(7, 'Madame Bovary ', 'Charles Bovary, a good-hearted but dull and unambitious doctor with a meagre practice, marries Emma, a beautiful farm girl raised in a convent.', 'Gustave Flaubert', 3270, 'Madame Bovary by Gustave Flaubert.jpg', 5, NULL),
(8, 'Moby Dick ', 'He is an exceptionally large whale with a snow-white head, wrinkled brow, crooked jaw, and an especially bushy spout. His hump is also white and shaped like a pyramid, the rest of his body is marbled with white.', 'Herman Melville', 1700, 'Moby Dick by Herman Melville.jpg', 6, NULL),
(9, 'Pride and Prejudice ', 'Pride and Prejudice follows the turbulent relationship between Elizabeth Bennet, the daughter of a country gentleman, and Fitzwilliam Darcy, a rich aristocratic landowner. They must overcome the titular sins of pride and prejudice in order to fall in', 'Jane Austen', 5200, 'Pride and Prejudice by Jane Austen.jpg', 16, NULL),
(10, 'The Adventures of Huckleberry Finn  ', 'The Adventures of Huckleberry Finn (1884) is told from the point of view of Huck Finn, a barely literate teen who fakes his own death to escape his abusive, drunken father. He encounters a runaway slave named Jim, and the two embark on a raft journey', 'Mark Twain', 4870, 'The Adventures of Huckleberry Finn by Mark Twain.jpg', 17, NULL),
(11, 'The Brothers Karamazov ', 'The Brothers Karamazov is a murder mystery, a courtroom drama, and an exploration of erotic rivalry in a series of triangular love affairs involving the “wicked and sentimental” Fyodor Pavlovich Karamazov and his three sons―the impulsive and sensual ', 'Fyodor Dostoyevsky', 7500, 'The Brothers Karamazov by Fyodor Dostoyevsky.jpg', 5, NULL),
(12, 'The Catcher in the Rye', 'The Catcher in the Rye, novel by J.D. Salinger published in 1951. The novel details two days in the life of 16-year-old Holden Caulfield after he has been expelled from prep school. Confused and disillusioned, Holden searches for truth and rails agai', 'J. D. Salinger', 6230, 'The Catcher in the Rye by J. D. Salinger.jpg', 6, NULL),
(13, 'The Divine Comedy', 'The Divine Comedy is simple: a man, generally assumed to be Dante himself, is miraculously enabled to undertake an ultramundane journey, which leads him to visit the souls in Hell, Purgatory, and Paradise.', 'Dante Alighieri', 7310, 'The Divine Comedy by Dante Alighieri.jpg', 16, NULL),
(14, 'The Great Gatsby', 'The Great Gatsby published in 1925. Set in Jazz Age New York, it tells the tragic story of Jay Gatsby, a self-made millionaire, and his pursuit of Daisy Buchanan, a wealthy young woman whom he loved in his youth.', 'F. Scott Fitzgerald', 1300, 'The Great Gatsby by F. Scott Fitzgerald.jpg', 17, NULL),
(15, 'The Iliad', 'Trojan War and the heroic deeds of warriors like Achilles, Hector, and Odysseus. It explores themes of pride, honor, and the human condition, and is considered one of the greatest works of ancient Greek literature.', 'Homer', 2000, 'The Iliad by Homer.jpg', 5, NULL),
(16, 'Ulysses', 'Ulysses is famous for having had the idea, during the Trojan War, to hide inside a giant wooden horse with his army to attack the Trojans by surprise. The Odyssey recounts his adventures on the way home to Ithaca, where he was king, and where his wif', 'James Joyce', 3500, 'Ulysses-by-James-Joyce.jpeg', 6, NULL),
(17, 'War and Peace', 'War and Peace by Leo Tolstoy is an 1867 novel set between the years 1805 and 1813. It follows several different Russians and their families and the events leading up to and during the 1812 invasion of Russia by France.', ' Leo Tolstoy', 1900, 'War and Peace by Leo Tolstoy.jpg', 16, NULL),
(18, 'Wuthering Heights', 'Wuthering Heights by Emily Brontë is a gothic novel that follows the antihero, Heathcliff, as he gets revenge the people who kept him away from his love, Cathy Earnshaw.', 'Emily Brontë', 2300, 'Wuthering Heights by Emily Brontë.jpg', 17, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `competition_list`
--

CREATE TABLE `competition_list` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(250) DEFAULT NULL,
  `comp_description` varchar(250) DEFAULT NULL,
  `comp_prize_amount` int(11) DEFAULT NULL,
  `comp_start_date` date DEFAULT NULL,
  `comp_end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `competition_list`
--

INSERT INTO `competition_list` (`comp_id`, `comp_name`, `comp_description`, `comp_prize_amount`, `comp_start_date`, `comp_end_date`) VALUES
(1, 'Essay', '3 para essay', 5000, '2024-01-31', '2024-02-28'),
(2, 'Novel', '3 Page Novel', 11000, '2024-02-05', '2024-03-13'),
(5, 'Story', '150 Words', 2000, '2024-03-01', '2024-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `competition_submissions`
--

CREATE TABLE `competition_submissions` (
  `sub_id` int(11) NOT NULL,
  `sub_date` date DEFAULT NULL,
  `sub_file` varchar(250) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `competition_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `competition_submissions`
--

INSERT INTO `competition_submissions` (`sub_id`, `sub_date`, `sub_file`, `customer_id`, `competition_id`) VALUES
(4, '2024-02-14', 'This is Essay.', 7, 1),
(6, '2024-02-28', 'Hello! its Novel...', 2, 2),
(7, '2024-03-13', 'Hey there! This is my Story...', 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(250) DEFAULT NULL,
  `u_email` varchar(250) DEFAULT NULL,
  `u_subject` varchar(250) DEFAULT NULL,
  `u_message` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`u_id`, `u_name`, `u_email`, `u_subject`, `u_message`) VALUES
(1, 'saad', 'saad@gmail.com', '64', ' 4551'),
(3, 'Rahim', 'rahim@gmail.com', 'Nothing', ' nothing to say'),
(5, 'fahad', 'fahad@gmail.com', 'no', ' never\r\n'),
(6, 'Umer', 'umer@gmail.com', 'Books', ' I wanna purchase some books');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(250) DEFAULT NULL,
  `c_email` varchar(250) DEFAULT NULL,
  `c_contact` varchar(250) DEFAULT NULL,
  `c_password` varchar(250) DEFAULT NULL,
  `c_address` varchar(250) DEFAULT NULL,
  `c_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_email`, `c_contact`, `c_password`, `c_address`, `c_img`) VALUES
(2, 'Smith', 'smith@gmail.com', '03949485827', 'smith', 'MCG', 'cus5.jpg'),
(6, 'Morrison', 'morrison@gmail.com', '03786948521', 'Morrison', 'Paris', 'cus7.jpg'),
(7, 'Shehzad', 'shehzad@gmail.com', '03245358979', 'shehzad', 'Multan', 'cus2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(250) DEFAULT NULL,
  `u_password` varchar(250) DEFAULT NULL,
  `u_address` varchar(250) DEFAULT NULL,
  `u_contact` varchar(250) DEFAULT NULL,
  `u_img` varchar(250) DEFAULT NULL,
  `u_email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`u_id`, `u_name`, `u_password`, `u_address`, `u_contact`, `u_img`, `u_email`) VALUES
(11, 'Steve', 'steve', 'MSG', '03948572231', 'cus2.jpg', 'steve@gmail.com'),
(12, 'Azhar', 'azhar', ' UK', '03928104839', 'cus3.jpg', 'azhar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `o_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `p_category` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`o_id`, `book_id`, `p_category`, `quantity`, `price`) VALUES
(1, 16, 4, 1, 3500),
(1, 2, 4, 1, 1900),
(1, 17, 4, 1, 1900),
(2, 4, 4, 2, 1280),
(2, 1, 4, 1, 1500),
(2, 7, 4, 1, 3270),
(2, 16, 4, 1, 3500),
(2, 15, 4, 1, 2000),
(3, 12, 2, 1, 6230),
(3, 9, 2, 1, 5200),
(4, 10, 2, 4, 4870),
(5, 2, 3, 3, 1900),
(6, 16, 4, 2, 3500),
(7, 14, 2, 5, 1300),
(8, 17, 3, 2, 1900),
(9, 15, 4, 5, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `m_id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `contact` varchar(250) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `status` varchar(250) DEFAULT 'pending',
  `customer_id` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`m_id`, `name`, `address`, `contact`, `order_date`, `status`, `customer_id`, `dealer_id`) VALUES
(1, 'Huzaifa', 'karachi', '021312322', '2023-12-21', 'Rejected', 0, 11),
(2, 'Rahim', 'Multan', '0123123123', '2023-12-21', 'Approved', 2, 0),
(3, 'Umair', 'Hyderabad', '012312312', '2023-12-21', 'Approved', 6, 0),
(4, 'Raza', 'karachi', '012312312', '2023-12-21', 'Pending', 7, 0),
(5, 'Ahmed', 'Peshawar', '03289340946', '2023-12-04', 'Pending', 6, 0),
(6, 'Yousuf', 'Murree', '03918240129', '2023-12-12', 'Approved', 6, 0),
(7, 'Jordan', 'UK', '03293749822', '2023-11-26', 'Approved', 0, 12),
(8, 'Chris', 'Sydney', '03890973456', '2023-11-28', 'Pending', 2, 0),
(9, 'Austin', 'US', '03948120372', '2023-12-04', 'Approved', 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `publishing_category`
--

CREATE TABLE `publishing_category` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(250) DEFAULT NULL,
  `p_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publishing_category`
--

INSERT INTO `publishing_category` (`p_id`, `p_name`, `p_price`) VALUES
(2, 'hardcopy', 130),
(3, 'CD ', 350),
(4, 'PDF ', 100);

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE `winner` (
  `w_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `competition_id` int(11) DEFAULT NULL,
  `submissions_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winner`
--

INSERT INTO `winner` (`w_id`, `customer_id`, `competition_id`, `submissions_id`) VALUES
(3, 7, 1, 4),
(4, 2, 2, 6),
(5, 6, 5, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_email` (`a_email`),
  ADD UNIQUE KEY `a_email_2` (`a_email`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `book_detail`
--
ALTER TABLE `book_detail`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `b_category` (`b_category`);

--
-- Indexes for table `competition_list`
--
ALTER TABLE `competition_list`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `competition_submissions`
--
ALTER TABLE `competition_submissions`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `competition_id` (`competition_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_email` (`c_email`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `p_category` (`p_category`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `fk_customer` (`customer_id`),
  ADD KEY `fk_dealer` (`dealer_id`);

--
-- Indexes for table `publishing_category`
--
ALTER TABLE `publishing_category`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `winner`
--
ALTER TABLE `winner`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `competition_id` (`competition_id`),
  ADD KEY `submissions_id` (`submissions_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `book_detail`
--
ALTER TABLE `book_detail`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `competition_list`
--
ALTER TABLE `competition_list`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `competition_submissions`
--
ALTER TABLE `competition_submissions`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `publishing_category`
--
ALTER TABLE `publishing_category`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_detail`
--
ALTER TABLE `book_detail`
  ADD CONSTRAINT `book_detail_ibfk_1` FOREIGN KEY (`b_category`) REFERENCES `book_category` (`category_id`);

--
-- Constraints for table `competition_submissions`
--
ALTER TABLE `competition_submissions`
  ADD CONSTRAINT `competition_submissions_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `competition_submissions_ibfk_2` FOREIGN KEY (`competition_id`) REFERENCES `competition_list` (`comp_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book_detail` (`b_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`p_category`) REFERENCES `publishing_category` (`p_id`);

--
-- Constraints for table `winner`
--
ALTER TABLE `winner`
  ADD CONSTRAINT `winner_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `winner_ibfk_2` FOREIGN KEY (`competition_id`) REFERENCES `competition_list` (`comp_id`),
  ADD CONSTRAINT `winner_ibfk_3` FOREIGN KEY (`submissions_id`) REFERENCES `competition_submissions` (`sub_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
