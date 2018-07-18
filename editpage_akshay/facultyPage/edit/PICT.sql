-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2018 at 07:33 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PICT`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE `Books` (
  `eid` varchar(200) NOT NULL,
  `bid` varchar(100) NOT NULL,
  `bname` varchar(1000) NOT NULL,
  `publication` varchar(1000) NOT NULL,
  `year` varchar(20) NOT NULL,
  `description` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`eid`, `bid`, `bname`, `publication`, `year`, `description`) VALUES
('I2K15101932', '1', 'Design and analysis of algorithm', 'TechMax', '2010', 'sdc mdkniwedioewdoiewewodew'),
('I2K15101931', '2', 'Das din me patle ho jaye', 'Adis publication', '2018', 'bbvuiiuhfewwe  wehwe8h ewfewhfu8fhf f fhweufhefh fewf fuewhfuewf hewh fuewhf uwef ewf ewufhewufh euhfu ewfewuhfufh ewufh uewh fuhf ewufh eu8fh ew8fewf hewuhf ewfh e87 few8hf en7yen fe67hf7nfubnfuyewb feb wfuybew');

-- --------------------------------------------------------

--
-- Table structure for table `Conferences`
--

CREATE TABLE `Conferences` (
  `eid` varchar(200) NOT NULL,
  `cid` varchar(200) NOT NULL,
  `ctitle` varchar(1000) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Faculty`
--

CREATE TABLE `Faculty` (
  `eid` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `fullname` varchar(1000) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `acontact` varchar(15) NOT NULL,
  `texperience` varchar(100) NOT NULL,
  `iexperience` varchar(100) NOT NULL,
  `doj` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `responsibility` varchar(2000) NOT NULL,
  `aoi` varchar(2000) NOT NULL,
  `other` varchar(2000) NOT NULL,
  `cv` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Faculty`
--

INSERT INTO `Faculty` (`eid`, `password`, `image`, `fullname`, `contact`, `acontact`, `texperience`, `iexperience`, `doj`, `department`, `designation`, `responsibility`, `aoi`, `other`, `cv`) VALUES
('I2K15101930', 'mahi665', 'faculty.jpeg', 'Ashish ppph', '8975108619', '8600429732', '9 years 6 months', '0 years 0years', '07/02/1997', 'COMP', 'HOD', 'abcdefg', 'ML,AI', 'other details', 'cv.pdf'),
('I2K15101931', 'mahi664', 'faculty.jpeg', 'Aditya Dikshit', '8975108619', '8600429732', '9 years 6 months', '0 years 0years', '07/02/1997', 'COMP', 'Lab Assistant', 'TEACHING AND HEAD INDUSTRY-INSTITUTE INTERACTION', 'ML,AI', 'other details', 'cv.pdf'),
('I2K15101932', 'mahi666', 'faculty.png', 'Mahesh Ghuge', '8975108619', '8600429732', '9 years 6 months', '0 years 0years', '07/02/1997', 'IT', 'HOD', 'abcdefg', 'ML,AI', 'other details', 'cv.pdf'),
('I2K15101933', 'mahi667', 'faculty.png', 'Undir Muthal', '8975108619', '8600429732', '9 years 6 months', '0 years 0years', '07/02/1997', 'IT', 'HOD', 'abcdefg', 'ML,AI', 'other details', 'cv.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `Journals`
--

CREATE TABLE `Journals` (
  `eid` varchar(200) NOT NULL,
  `jid` varchar(20) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `description` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Journals`
--

INSERT INTO `Journals` (`eid`, `jid`, `title`, `type`, `year`, `description`) VALUES
('I2K15101930', '1', 'KIPS, Journal of Information Processing Systems', 'International', '2014', 'The Journal of Information Processing Systems is committed to publishing high-quality papers on the state-of-the-art of information processing systems. Theoretical research contributions presenting new techniques, concepts, or analyses, reports on experiences and experiments of implementation and application of theories, and tutorials on new technologies and trends are all welcome. The subjects covered by the journal include all topics related to a) computer system and theory; b) multimedia system and graphics; c) communication system and security; d) software system and application.'),
('I2K15101930', '2', 'International Journal of information and computer security, Inderscience publications', 'International', '2014', 'The Journal of Information Processing Systems is committed to publishing high-quality papers on the state-of-the-art of information processing systems. Theoretical research contributions presenting new techniques, concepts, or analyses, reports on experiences and experiments of implementation and application of theories, and tutorials on new technologies and trends are all welcome. The subjects covered by the journal include all topics related to a) computer system and theory; b) multimedia system and graphics; c) communication system and security; d) software system and application.'),
('I2K15101931', '3', 'Journal of Computer Science', 'International', '2010', 'The Journal of Information Processing Systems is committed to publishing high-quality papers on the state-of-the-art of information processing systems. Theoretical research contributions presenting new techniques, concepts, or analyses, reports on experiences and experiments of implementation and application of theories, and tutorials on new technologies and trends are all welcome. The subjects covered by the journal include all topics related to a) computer system and theory; b) multimedia system and graphics; c) communication system and security; d) software system and application.'),
('I2K15101931', '4', 'Elixir Electrical Engineering Journal', 'International', '2014', 'The Journal of Information Processing Systems is committed to publishing high-quality papers on the state-of-the-art of information processing systems. Theoretical research contributions presenting new techniques, concepts, or analyses, reports on experiences and experiments of implementation and application of theories, and tutorials on new technologies and trends are all welcome. The subjects covered by the journal include all topics related to a) computer system and theory; b) multimedia system and graphics; c) communication system and security; d) software system and application.'),
('I2K15101931', '5', 'Motapa kam karane ke gharelu nuske', 'Dehati', '2018', 'Are you finding it difficult to fit into your little black number? Is belly fat giving you sleepless nights? If your answer is yes, you need to make some lifestyle changes to get the figure of your dreams. No doubt, belly fat looks aesthetically displeasing. It can assume serious proportions and affect long term health, if not curbed at the right time.');

-- --------------------------------------------------------

--
-- Table structure for table `Qualifications`
--

CREATE TABLE `Qualifications` (
  `eid` varchar(200) NOT NULL,
  `qid` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `specialization` varchar(300) NOT NULL,
  `uname` varchar(300) NOT NULL,
  `college` varchar(500) NOT NULL,
  `year` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Qualifications`
--

INSERT INTO `Qualifications` (`eid`, `qid`, `level`, `degree`, `specialization`, `uname`, `college`, `year`) VALUES
('I2K15101931', '1', 'Graduate', 'BE', 'Computer Science and Engineering', 'Savitribai Fule Pune University', 'Pune Institute of Computer Technology', '2019'),
('I2K15101931', '2', 'Post-Graduate', 'ME', 'Computer Engineering', 'Savitribai Fule Pune University', 'Pune Institute of Computer Technology', '2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `Journals`
--
ALTER TABLE `Journals`
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `Qualifications`
--
ALTER TABLE `Qualifications`
  ADD KEY `eid` (`eid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Books`
--
ALTER TABLE `Books`
  ADD CONSTRAINT `Books_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `Faculty` (`eid`);

--
-- Constraints for table `Journals`
--
ALTER TABLE `Journals`
  ADD CONSTRAINT `Journals_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `Faculty` (`eid`);

--
-- Constraints for table `Qualifications`
--
ALTER TABLE `Qualifications`
  ADD CONSTRAINT `Qualifications_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `Faculty` (`eid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
