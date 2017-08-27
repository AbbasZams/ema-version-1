-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2017 at 11:43 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ema`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `creater_email` varchar(30) NOT NULL,
  `commenter_email` varchar(30) NOT NULL,
  `event_id` varchar(30) NOT NULL,
  `comment_id` int(30) DEFAULT NULL,
  `comment` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment_replay`
--

CREATE TABLE IF NOT EXISTS `comment_replay` (
  `comment_id` varchar(30) NOT NULL,
  `replay_id` int(30) DEFAULT NULL,
  `user_email` varchar(30) NOT NULL,
  `replay` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `chargingtype` varchar(30) NOT NULL,
  `event_logo` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `category`, `country`, `city`, `address`, `discription`, `chargingtype`, `event_logo`) VALUES
(1, 'marriage event', 'wedding', 'PK', 'swat', 'main_ street 09 mingoara', 'come you all will be enjoy', 'free', '20170706_174640.jpg'),
(2, 'paid event', 'concert', 'PK', 'peshawar', 'park at peshawar', 'All musician is here come and watch ', 'paid', '20170706_171910.jpg'),
(3, 'past events', 'birthday', 'PK', 'swat', 'main_ street 09 mingoara', 'this is a past event ', 'free', '20170706_152903.jpg'),
(4, 'web development', 'webinar', 'PK', 'peshawar', 'www.ema.com', ' this is a web training event', 'paid', '20170706_174624.jpg'),
(5, 'Program', 'party', 'PK', 'lahore', 'building 09 main lahore', 'an awesome event please come you will be glad', 'free', '20170706_152849.jpg'),
(6, 'anything', 'conference', 'PK', 'peshawar', 'main_ street 09 mingoara', 'asdasfasf', 'free', '20170706_150307.jpg'),
(7, 'LUMS festival', 'expo', 'PK', 'lahore', 'Gate - 4 LUMS', 'Event about culture and some fun shows , music , and many more', 'paid', 'Dup(1)ATGAAA~1000.jpg'),
(8, 'Music concert ', 'concert', 'PK', 'peshawar', 'army stadium ', 'starring Atif aslam and QB', 'paid', 'sample.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event_picture`
--

CREATE TABLE IF NOT EXISTS `event_picture` (
  `event_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `extension` varchar(30) NOT NULL,
  `serial_no` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_picture`
--

INSERT INTO `event_picture` (`event_id`, `name`, `type`, `size`, `extension`, `serial_no`) VALUES
('3', '20170706_151822.jpg', ' image/jpeg', ' 1303419', ' jpg', 1),
('3', '20170706_151828.jpg', ' image/jpeg', ' 1309822', ' jpg', 2),
('4', '20170708_081430.jpg', ' image/jpeg', ' 1335250', ' jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `event_schedul`
--

CREATE TABLE IF NOT EXISTS `event_schedul` (
  `event_id` int(30) NOT NULL,
  `creater_email` varchar(30) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_schedul`
--

INSERT INTO `event_schedul` (`event_id`, `creater_email`, `fromdate`, `todate`, `time`) VALUES
(1, 'itsmuhammad.rahman@gmail.com', '2017-08-30', '2017-08-31', '01:00:00.000000'),
(2, 'itsmuhammad.rahman@gmail.com', '2017-09-02', '2017-09-02', '13:06:00.000000'),
(3, 'itsmuhammad.rahman@gmail.com', '2017-08-21', '2017-08-21', '01:00:00.000000'),
(4, 'itsabbasahmad@gmail.com', '2017-08-20', '2017-08-21', '01:00:00.000000'),
(5, 'itsabbasahmad@gmail.com', '2017-09-05', '2017-09-11', '12:00:00.000000'),
(6, 'itsmuhammad.rahman@gmail.com', '2017-08-24', '2017-08-28', '01:00:00.000000'),
(7, 'itsmuhammad.rahman@gmail.com', '2017-09-02', '2017-09-04', '09:00:00.000000'),
(8, 'itsmuhammad.rahman@gmail.com', '2017-09-14', '2017-09-15', '10:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `event_video`
--

CREATE TABLE IF NOT EXISTS `event_video` (
  `event_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `extension` varchar(30) NOT NULL,
  `serial_no` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_video`
--

INSERT INTO `event_video` (`event_id`, `name`, `type`, `size`, `extension`, `serial_no`) VALUES
('3', '698527790283691.mp4', ' video/mp4', ' 540805', 'mp4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fallow`
--

CREATE TABLE IF NOT EXISTS `fallow` (
  `fallowby_email` varchar(30) NOT NULL,
  `fallowed_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fallow`
--

INSERT INTO `fallow` (`fallowby_email`, `fallowed_email`) VALUES
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `organizer_email` varchar(30) NOT NULL,
  `itemname` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `charge` varchar(30) NOT NULL,
  `rate` varchar(30) NOT NULL,
  `serial_no` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`organizer_email`, `itemname`, `quantity`, `charge`, `rate`, `serial_no`) VALUES
('itsabbasahmad@gmail.com', 'first item ', '1', 'price', '20', 1),
('itsabbasahmad@gmail.com', 'item second', '1', 'rent', '40', 2);

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

CREATE TABLE IF NOT EXISTS `massage` (
  `from_email` varchar(30) NOT NULL,
  `to_email` varchar(30) NOT NULL,
  `massage` varchar(100) NOT NULL,
  `state` varchar(20) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `massage`
--

INSERT INTO `massage` (`from_email`, `to_email`, `massage`, `state`) VALUES
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'hi', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'gula', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'namra', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'kono', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'kha', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'na', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'okan', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'okan', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'srgGWr', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'sdgR', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'igiudgqG', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'HFHFH', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'HI', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'dgg', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'dgg', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'fp9weufp9u', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'hhdh', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'nnncn', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'fyfiguhoihpih', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'go', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'dwfghtyjui', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'earstdyfugihij', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'aSDFGHJKL', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'ADSDFGHJ;', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'D', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'ertyuiiuytre', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'ghuhu', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'go', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'nawaz', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'ugouo', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'juhu', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'kkkk', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'kkkk', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'ndddddddddddddddd', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', '87778t97', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'hay', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'aw', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'sae da', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'sa uwem ', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'ma waya', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'kha g', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'ma kawa ', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'wale', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'ase', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'TTGYUJHJGKGOIY09PUJPOJ', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'JJHJJV', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'TIUOHOHIO', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'UFUYFUYF', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'GIUHU', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'YUFUYFUY', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'FYGYGIU', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'FYFJH', 'unread'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', 'WEJFJ', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'hi', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'how ar eyou', 'unread'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 'sss', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `from_email` varchar(30) NOT NULL,
  `to_email` varchar(30) NOT NULL,
  `event_id` varchar(30) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `state` varchar(30) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`from_email`, `to_email`, `event_id`, `notification`, `state`) VALUES
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', '4', 'Muhammad Rahman  joined in your event', 'view'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', '2', 'Abbas Ahmad send you proposal ', 'view'),
('itsmuhammad.rahman@gmail.com', 'itsmuhammad.rahman@gmail.com', '2 ', 'Muhammad Rahman  reject you as participant in has event', 'view'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', '2 ', 'Muhammad Rahman  reject you as participant in has event', 'view'),
('itsmuhammad.rahman@gmail.com', '', '5', 'Muhammad Rahman  joined in your event', 'new'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', '2', 'Abbas Ahmad send you proposal ', 'view'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', '7', 'Abbas Ahmad send you proposal ', 'view'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', '8', 'Abbas Ahmad send you proposal ', 'view');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `sender_email` varchar(30) NOT NULL,
  `organizer_email` varchar(30) NOT NULL,
  `event_id` varchar(30) NOT NULL,
  `order_note` varchar(500) NOT NULL,
  `order_no` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`sender_email`, `organizer_email`, `event_id`, `order_note`, `order_no`, `state`) VALUES
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', '1', '12367', '1', 'completed'),
('itsabbasahmad@gmail.com', 'itsabbasahmad@gmail.com', '5', 'sae da kana', '2', 'completed'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', '2', 'order de', '3', 'workstream'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', '7', 'we want 7 designers and decorators of different stages .', '4', 'reject'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', '8', 'all this itmes', '5', 'workstream');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_no` varchar(30) NOT NULL,
  `package/item` varchar(100) NOT NULL,
  `package/item_serial_no` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_no`, `package/item`, `package/item_serial_no`) VALUES
('1', 'package', 1),
('2', 'package', 2),
('2', 'item', 2),
('3', 'package', 1),
('3', 'item', 1),
('4', 'package', 2),
('4', 'item', 2),
('5', 'package', 1),
('5', 'package', 2),
('5', 'item', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_payment`
--

CREATE TABLE IF NOT EXISTS `order_payment` (
  `sender_email` varchar(30) NOT NULL,
  `reciver_email` varchar(30) NOT NULL,
  `order_no` int(11) NOT NULL,
  `evant_id` int(11) NOT NULL,
  `sender_accoun_no` int(11) NOT NULL,
  `reciver_accoun_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_payment`
--

INSERT INTO `order_payment` (`sender_email`, `reciver_email`, `order_no`, `evant_id`, `sender_accoun_no`, `reciver_accoun_no`, `amount`, `date`) VALUES
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 1, 1, 123456, 234567, 490, '2017-08-22'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 2, 6, 123124, 1234124, 2010, '2017-08-22'),
('itsmuhammad.rahman@gmail.com', 'itsabbasahmad@gmail.com', 1, 1, 32344252, 234567, 450, '2017-08-24'),
('itsabbasahmad@gmail.com', 'itsabbasahmad@gmail.com', 2, 5, 123, 1234, 990, '2017-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `organized_event`
--

CREATE TABLE IF NOT EXISTS `organized_event` (
  `organizer_email` varchar(30) NOT NULL,
  `event_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE IF NOT EXISTS `organizer` (
  `organizer_email` varchar(30) NOT NULL,
  `companyname` varchar(30) NOT NULL,
  `about` varchar(300) NOT NULL,
  `special` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`organizer_email`, `companyname`, `about`, `special`, `country`, `city`, `address`) VALUES
('itsabbasahmad@gmail.com', 'Abbas company', 'i am good at event management ', 'event manager', 'pakistan', 'peshawar', 'main road peshawar');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `organizer_email` varchar(30) NOT NULL,
  `packagename` varchar(30) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `per` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `serial_no` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`organizer_email`, `packagename`, `detail`, `price`, `per`, `status`, `serial_no`) VALUES
('itsabbasahmad@gmail.com', 'package basic', 'this is basic package', '450', 'per day', 'basic', 1),
('itsabbasahmad@gmail.com', 'premium package', 'this is premium package', '950', 'per event', 'premium', 2),
('itsabbasahmad@gmail.com', 'standard package', 'this is standard package', '1000', 'per head', 'standard', 3);

-- --------------------------------------------------------

--
-- Table structure for table `paid_event_detail`
--

CREATE TABLE IF NOT EXISTS `paid_event_detail` (
  `event_id` int(30) NOT NULL,
  `requirements` varchar(30) NOT NULL,
  `orgDescription` varchar(30) NOT NULL,
  `ticketnumbers` varchar(30) NOT NULL,
  `ticketprice` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid_event_detail`
--

INSERT INTO `paid_event_detail` (`event_id`, `requirements`, `orgDescription`, `ticketnumbers`, `ticketprice`) VALUES
(1, 'i will be require everything', 'want an organization', '100', '10'),
(2, ' web trainer is requered to or', ' good web skill ', '6', '9'),
(3, 'we want some food providers, c', 'see requirements and send prop', '500', '100'),
(4, 'we required maintenance skille', 'musical concerts organizer ', '300', '150');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE IF NOT EXISTS `participant` (
  `participant_email` varchar(30) NOT NULL,
  `event_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`participant_email`, `event_id`) VALUES
('itsmuhammad.rahman@gmail.com', '5');

-- --------------------------------------------------------

--
-- Table structure for table `profile_picture`
--

CREATE TABLE IF NOT EXISTS `profile_picture` (
  `email` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `extension` varchar(30) NOT NULL,
  `for` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_picture`
--

INSERT INTO `profile_picture` (`email`, `name`, `type`, `size`, `extension`, `for`) VALUES
('itsabbasahmad@gmail.com', '20170708_111054.jpg', ' image/jpeg', ' 4690901', ' jpg', 'profile'),
('itsmuhammad.rahman@gmail.com', '20170708_080321.jpg', ' image/jpeg', ' 1098669', ' jpg', 'profile'),
('itsabbasahmad@gmail.com', '2673.JPG', 'image/jpeg', '45450', 'JPG', 'logo');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
  `sender_email` varchar(40) NOT NULL,
  `reciver_email` varchar(40) NOT NULL,
  `event_id` varchar(30) NOT NULL,
  `special` varchar(30) NOT NULL,
  `proposal` varchar(300) NOT NULL,
  `state` varchar(20) NOT NULL DEFAULT 'new',
  `proposal_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`sender_email`, `reciver_email`, `event_id`, `special`, `proposal`, `state`, `proposal_date`) VALUES
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', '2', 'web skills', 'maintanance experteer', 'read', '2017-08-26'),
('itsabbasahmad@gmail.com', 'itsmuhammad.rahman@gmail.com', '8', 'ccccccc', 'zzzzzzzzzzzzzzzzz', 'new', '2017-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `creater_email` varchar(30) NOT NULL,
  `reviewer_email` varchar(30) NOT NULL,
  `event_id` varchar(30) NOT NULL,
  `review_id` int(30) NOT NULL,
  `review` varchar(300) NOT NULL,
  `state` varchar(30) NOT NULL DEFAULT 'new',
  `on_date` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`creater_email`, `reviewer_email`, `event_id`, `review_id`, `review`, `state`, `on_date`) VALUES
('creater_email', 'itsmuhammad.rahman@gmail.com', '1', 1, 'testing review', 'read', '2017-08-22'),
('creater_email', 'itsmuhammad.rahman@gmail.com', '6', 2, 'review  ', 'read', '2017-08-22'),
('creater_email', 'itsmuhammad.rahman@gmail.com', '5', 3, 'fghjkl;', 'read', '2017-08-23'),
('creater_email', 'itsmuhammad.rahman@gmail.com', '6', 4, 'fdfdgdg', 'read', '2017-08-23'),
('creater_email', 'itsmuhammad.rahman@gmail.com', '6', 5, 'fdfdgdg', 'read', '2017-08-23'),
('creater_email', 'itsmuhammad.rahman@gmail.com', '6', 6, 'ffdfdfffdf', 'read', '2017-08-23'),
('creater_email', 'itsmuhammad.rahman@gmail.com', '6', 7, 'dsds sffdffd', 'read', '2017-08-23'),
('creater_email', 'itsmuhammad.rahman@gmail.com', '1', 8, 'TEST', 'read', '2017-08-24'),
('creater_email', 'itsmuhammad.rahman@gmail.com', '1', 9, 'JJJ', 'read', '2017-08-24'),
('creater_email', 'itsmuhammad.rahman@gmail.com', '5', 10, 'acha', 'read', '2017-08-26'),
('creater_email', 'itsmuhammad.rahman@gmail.com', '5', 11, 'sae da nu', 'read', '2017-08-26'),
('creater_email', 'itsmuhammad.rahman@gmail.com', '5', 12, 'sa nashm weye;e', 'read', '2017-08-26'),
('creater_email', 'itsabbasahmad@gmail.com', '5', 13, 'kha', 'read', '2017-08-26'),
('creater_email', 'itsabbasahmad@gmail.com', '7', 14, 'i am going to lums', 'new', '2017-08-26'),
('creater_email', 'itsmuhammad.rahman@gmail.com', '7', 15, ' i ll be there', 'new', '2017-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE IF NOT EXISTS `suggestion` (
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `suggestion` varchar(300) NOT NULL,
  `ondate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` int(30) NOT NULL,
  `event_id` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `account_no` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `event_id`, `user_email`, `account_no`, `amount`) VALUES
(1, '2', 'itsmuhammad.rahman@gmail.com', '$7', ''),
(2, '2', 'itsabbasahmad@gmail.com', '$1234567', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fristname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `mobilenumber` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dateofbrith` varchar(30) NOT NULL,
  `joindate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fristname`, `lastname`, `mobilenumber`, `email`, `password`, `gender`, `dateofbrith`, `joindate`) VALUES
('Abbas', 'Ahmad', '03471219909', 'itsabbasahmad@gmail.com', '12345678', 'male', '1995-02-21', '2017-08-22'),
('Muhammad', 'Rahman', '03466403375', 'itsmuhammad.rahman@gmail.com', '12345678', 'male', '1994-03-03', '2017-08-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_picture`
--
ALTER TABLE `event_picture`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `event_schedul`
--
ALTER TABLE `event_schedul`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_video`
--
ALTER TABLE `event_video`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `paid_event_detail`
--
ALTER TABLE `paid_event_detail`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `event_picture`
--
ALTER TABLE `event_picture`
  MODIFY `serial_no` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `event_schedul`
--
ALTER TABLE `event_schedul`
  MODIFY `event_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `event_video`
--
ALTER TABLE `event_video`
  MODIFY `serial_no` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `serial_no` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `serial_no` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `paid_event_detail`
--
ALTER TABLE `paid_event_detail`
  MODIFY `event_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
