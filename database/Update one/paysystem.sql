-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 10:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `detail` text NOT NULL,
  `delete_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch`, `address`, `detail`, `delete_status`) VALUES
(1, 'Swindon Branch', '1788 Traction Street', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1'),
(2, 'Dhaka Bank ', 'Dhaka Kamarpara', 'Sector 10 ,Uttara Dhaka\r\nphone: +88025831 4424 (Hunting Number)\r\n+88025834425-31 ,5831 4624 -8\r\nFax:+88025831 4419\r\nEmail:info@dhakabank.com.bd\r\nSwift:DHBLBDDH', '0'),
(3, 'Dhaka Bank 2', 'Housebuilding', '71 ,Purana Paltan lane Dhaka\r\nphone: +88025831 4424 (Hunting Number)\r\n+88025834425-31 ,5831 4624 -8\r\nFax:+88025831 4419\r\nEmail:info@dhakabank.com.bd\r\nSwift:DHBLBDDH', '0'),
(4, 'Dhaka Bank 3', 'Rajlokki', '81 , Dhaka\r\nphone: +88025831 4424 (Hunting Number)\r\n+88025834425-31 ,5831 4624 -8\r\nFax:+88025831 4419\r\nEmail:info@dhakabank.com.bd\r\nSwift:DHBLBDDH', '0'),
(5, 'Birmingham', '22nd St S, Birmingham', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', '1'),
(6, 'Dhaka Bank -Kamarpara', 'Dhaka Kamarpara 1230', '71 ,Purana Paltan lane Dhaka\r\nphone: +88025831 4424 (Hunting Number)\r\n+88025834425-31 ,5831 4624 -8\r\nFax:+88025831 4419\r\nEmail:info@dhakabank.com.bd\r\nSwift:DHBLBDDH', '0');

-- --------------------------------------------------------

--
-- Table structure for table `fees_transaction`
--

CREATE TABLE `fees_transaction` (
  `id` int(255) NOT NULL,
  `stdid` varchar(255) NOT NULL,
  `paid` int(255) NOT NULL,
  `submitdate` datetime NOT NULL,
  `transcation_remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_transaction`
--

INSERT INTO `fees_transaction` (`id`, `stdid`, `paid`, `submitdate`, `transcation_remark`) VALUES
(1, '1', 100, '2017-11-01 00:00:00', ''),
(2, '2', 150, '2017-10-05 00:00:00', ''),
(3, '3', 900, '2017-04-13 00:00:00', 'monthly'),
(4, '3', 1000, '2018-04-01 00:00:00', 'lklk'),
(5, '4', 500, '2018-07-02 00:00:00', 'TEST'),
(6, '5', 1500, '2018-06-02 00:00:00', 'DEMO'),
(7, '6', 200, '2018-07-03 00:00:00', 'DEMO'),
(8, '7', 200, '2018-03-02 00:00:00', 'DEMO'),
(9, '8', 5000, '2017-01-03 00:00:00', 'DEMO'),
(10, '9', 2500, '2018-03-02 00:00:00', 'DEMO'),
(11, '3', 200, '2020-07-01 00:00:00', 'ok'),
(12, '10', 100, '2020-07-01 00:00:00', 'due'),
(13, '10', 1300, '2020-07-02 00:00:00', 'due re'),
(14, '10', 100, '2020-07-02 00:00:00', 'ok'),
(15, '11', 9800, '1998-07-08 00:00:00', 'Registration Complete'),
(16, '12', 1250, '2008-02-23 00:00:00', 'Registration'),
(17, '12', 1200, '0000-00-00 00:00:00', 'ok'),
(18, '11', 200, '2020-07-01 00:00:00', 'ok'),
(19, '13', 9800, '2020-08-13 00:00:00', 'Registration Complete ,Due Semester Fee'),
(20, '13', 440200, '2020-08-19 00:00:00', 'All ok'),
(21, '11', 38000, '2020-09-08 00:00:00', 'ok'),
(22, '14', 9850, '1999-09-15 00:00:00', 'Registration Compolete '),
(23, '15', 9850, '1997-09-10 00:00:00', 'Registrattion Complete '),
(24, '16', 9800, '1997-05-20 00:00:00', 'Registration Complete '),
(25, '17', 9850, '1997-12-10 00:00:00', 'Registration complete'),
(26, '18', 9800, '2001-09-12 00:00:00', 'Registration Complete'),
(27, '19', 9850, '1980-09-16 00:00:00', 'Registration Complete'),
(28, '20', 9800, '2020-09-09 00:00:00', 'Registration ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `joindate` datetime NOT NULL,
  `about` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `fees` int(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL,
  `delete_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `emailid`, `sname`, `joindate`, `about`, `contact`, `fees`, `branch`, `balance`, `delete_status`) VALUES
(10, 'samiubat14@gmail.com', 'sabbir', '2020-07-01 00:00:00', '11th semester', '0130710740', 1500, '2', 0, '0'),
(11, 'susmita@gmail.com', 'Susmita Mondol', '1998-07-08 00:00:00', 'IUBAT -University 11th semester ', '0179782394', 48000, '2', 0, '0'),
(12, 'zalish@gmail.com', 'Zalish Mahmud', '2008-02-23 00:00:00', 'IUBAT student', '0124578952', 70000, '6', 67550, '0'),
(13, 'joli@gmail.com', 'Iubat_demo', '2020-08-13 00:00:00', 'Iubat Demo Student From About', '0130710740', 450000, '6', 0, '0'),
(14, 'soyaib@gmail.com', 'Soyaib Ahmed', '1999-09-15 00:00:00', 'Studied IUBAT , 11 semester', '0909273571', 450000, '2', 440150, '0'),
(15, 'hasnahena@gmail.com', 'Hasna Hena', '1997-09-10 00:00:00', 'IUBAT University ,Gazipur Chowrasta', '0178954621', 12580, '4', 2730, '0'),
(16, 'sadika@gmail.com', 'Sadika Sultana ', '1997-05-20 00:00:00', 'IUABT University , Sector 10 ,house#1 ,Road#1', '0162546262', 12580, '6', 2780, '0'),
(17, 'shuvo@gmail.com.bd', 'Khaledual Islam Shuvo ', '1997-12-10 00:00:00', 'IUBAT University ,Bottola mor ,Dhaka bangladesh', '017854626', 450000, '2', 440150, '0'),
(18, 'taspia@gmail.com', 'Taspia Rowsan', '2001-09-12 00:00:00', 'IUABT University', '0179782394', 450000, '6', 440200, '0'),
(19, 'raz@gmail.com', 'Razanna Oisiojo Rubina', '1980-09-16 00:00:00', 'IUBAT University', '0178954621', 450000, '6', 440150, '0'),
(20, 'a@gmail.com', 'Md Tuhin ', '2020-09-09 00:00:00', 'IUBAT University', '0179782394', 450000, '6', 440200, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `emailid`, `lastlogin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'sabbir ahmed', 'sabbir@gmail.com', '0000-00-00 00:00:00'),
(2, 'student', 'cd73502828457d15655bbd7a63fb0bc8', 'student', 'student.com', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_transaction`
--
ALTER TABLE `fees_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fees_transaction`
--
ALTER TABLE `fees_transaction`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
