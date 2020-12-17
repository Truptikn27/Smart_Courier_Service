-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 09:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speed_age`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`, `status`) VALUES
(1, 'admin', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `dealer_name` text NOT NULL,
  `branchaddress` text NOT NULL,
  `phone` text NOT NULL,
  `branch_location` text NOT NULL,
  `pincode` text NOT NULL,
  `reqid` text NOT NULL,
  `branch_name` text NOT NULL,
  `branch_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `dealer_name`, `branchaddress`, `phone`, `branch_location`, `pincode`, `reqid`, `branch_name`, `branch_id`) VALUES
(1, 'Suresh', 'Bangalore', '8974563218', 'Yashwanthpur Bangalore', '570001', '123456', 'ypr_Branch', 'SCS00401YPR'),
(2, 'Chandan', 'Behind ganesha temple,Malleshwaram Bangalore', '7894563215', 'Malleshwaram', '570002', '123456', 'Mallesharam_Branch', 'SCS00402MAL'),
(3, 'Darshan', 'Opp Tumkur University Tumkur', '9875642597', 'Near Tumkur university', '572101', '123456', 'Tmk_Branch', 'SCS00403TMK'),
(4, 'Somu', ' tilak nagar,Hubbali', '9575694043', 'Near SKT school,Thilak nagar Hubbali', '572107', '1528562775', 'HUbbali_Branch', 'SCS00404HUB'),
(5, 'Rahul', ' Near Govt clg Hassan', '9576694037', 'Hassan', '572108', '12234', 'Hassan_Branch', 'SCS00405HSN'),
(6, 'Supriya', ' JC arcade MG road Mangalore ', '8745698217', 'MG road Mangalore', '512001', '123456', 'Mangalore_Branch', 'SCS00406MGR'),
(7, 'Chethan', ' Near maharaja park 6th cross Mysore', '9876214863', 'Vijaynagar Mysore', '579101', '12234', 'Mysore_Branch', 'SCS00407MYR'),
(8, 'Shiva', ' Near XYZ circle market road Shivamogga', '9632587461', 'Market road,Shivamogga', '571006', '', 'Shivamogga_Branch', 'SCS00408SMG'),
(9, 'Nagaraj', ' 3rd cross Chickpet Davangere', '7896214862', 'Chickpet Davangere', '571001', '', 'Davangere_Branch', 'SCS00409DVG'),
(10, 'Basappa', ' 3rd cross beside market Raichur', '8453217892', 'Market road,Raichuru', '541002', '', 'Raichur_Branch', 'SCS00410RHR');

-- --------------------------------------------------------

--
-- Table structure for table `consignment`
--

CREATE TABLE `consignment` (
  `ccn` int(10) NOT NULL,
  `shippername` text DEFAULT NULL,
  `shipperasddress` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `material_descrption` text DEFAULT NULL,
  `no_of_item` int(20) DEFAULT NULL,
  `branch_id` text DEFAULT NULL,
  `total_weight` text NOT NULL,
  `mode` varchar(10) NOT NULL DEFAULT 'Medium',
  `reciver_name` text DEFAULT NULL,
  `reciver_phone` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT 'not taken',
  `receiver_street` varchar(20) DEFAULT NULL,
  `receiver_city` varchar(20) DEFAULT 'Banglore',
  `receiver_district` varchar(25) DEFAULT NULL,
  `receiver_state` varchar(23) DEFAULT 'Karnataka'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consignment`
--

INSERT INTO `consignment` (`ccn`, `shippername`, `shipperasddress`, `phone`, `material_descrption`, `no_of_item`, `branch_id`, `total_weight`, `mode`, `reciver_name`, `reciver_phone`, `status`, `receiver_street`, `receiver_city`, `receiver_district`, `receiver_state`) VALUES
(1, 'Soundarya', 'gubbi', '8618825920', 'document', 2, 'SCS00403TMK', '23', 'Medium', 'trupti', '8988675673', 'deliverd', 'tumkur', 'tumkur', 'tumkur', 'karnataka'),
(2, 'Roopa', 'Tumkur', '9739474767', 'document', 2, 'SCS00402MAL', '5000', 'Fast', 'Divya', '8654312345', 'deliverd', 'MG road', 'Banglore', 'Banglore', 'karnataka'),
(3, 'Trupti', 'mysore', '8635623732', 'document', 1, 'SCS00403TMK', '20', 'Medium', 'sushma', '9829657236', 'still processing', 'tumkur', 'Tumkur', 'Tumkur', 'karnataka'),
(4, 'Rashmi', 'Banglore', '7863737631', 'document', 5, 'SCS00408SMG', '30', 'Medium', 'Rekha', '9876457201', 'Still processing', 'MG Road', 'Gubbi', 'Shivamogga', 'Karnataka'),
(5, 'Raju', 'Kolar', '9657346576', 'document', 1, 'SCS00405HSN', '60', 'Medium', 'Ashok', '8346276742', 'Still processing', 'Ashok Nagar ', 'Hassan', 'Hassan', 'Karnataka'),
(6, 'Sushma', 'gubbi', '8475743874', 'document', 1, 'SCS00406MGR', '600', 'document', 'Ranju', '9873565682', 'still processing', 'Sira Gate circle', 'Mangalore', 'Mangalore', 'karnataka'),
(7, 'vijay', 'Bellary', '9008273736', 'document', 1, 'SCS00404HUB', '0.3 kg', 'document', 'Chaithra', '8147747954', 'still processing', 'no 26,3rd main 4th s', 'Hubli', 'Hubli', 'Karnataka'),
(9, 'suresh', 'Mangalore', '9874561232', 'parcel', 1, 'SCS00401YPR', '0.3 kg', 'document', 'suma', '7412589634', 'Not Confirmed', 'A M palya yashwanthp', 'Bangalore', 'Bangalore', 'Karnataka'),
(10, 'suresh', 'Bangalore', '8147747954', 'document', 1, 'SCS00408SMG', '2kg', 'document', 'Sowmya', '7896541238', 'Not Confirmed', 'A M palya siragate ', 'Shivamogga', 'Shivamogga', 'Karnataka'),
(11, 'vijay', 'Bangalore', '8147747954', 'document', 1, 'SCS00405HSN', '1kg', 'document', 'suma', '8745691238', 'Not Confirmed', 'A M palya siragate t', 'Hassan', 'Hassan', 'Karnataka'),
(12, 'vijay', 'Hubli', '9852361472', 'parcel', 1, 'SCS00401YPR', '1000', 'Medium', 'Sowmya', '8475963217', 'deliverd', 'Yashwanthpura', 'Bangalore', 'Bangalore', 'Karnataka'),
(13, 'Kavana', 'Shivamogga', '7894563218', 'parcel', 1, 'SCS00405HSN', '0.50kg', 'Medium', 'Ramu', '9875462186', 'Not Confirmed', 'no 26,3rd main 4th s', 'Hassan', 'Hassan', 'Karnataka'),
(14, 'Murali', 'Davangere', '9875632145', 'document', 1, 'SCS00407MYR', '20 grams', 'Fast', 'Sangeetha', '7591239841', 'Not Confirmed', 'no 28 jaynagar 3rd c', 'mysore', 'mysore', 'Karnataka'),
(15, 'Sharath', 'Hubli', '9865123475', 'parcel', 1, 'SCS00409DVG', '1500', 'Fast', 'Sowmya', '8475693214', 'deliverd', 'No 108, 3rd cross Ch', 'Davangere', 'Davangere', 'Karnataka');

-- --------------------------------------------------------

--
-- Table structure for table `corporate`
--

CREATE TABLE `corporate` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `password` text NOT NULL,
  `cname` text NOT NULL,
  `address` text NOT NULL,
  `c_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate`
--

INSERT INTO `corporate` (`id`, `user_id`, `password`, `cname`, `address`, `c_code`) VALUES
(1, 'sachin', '1234', 'sdfqe11`', 'dfds', 'dsfsdf'),
(6, 'ASDA', 'SDSAD', 'SADASD`', 'asdAS', 'ASDSAD');

-- --------------------------------------------------------

--
-- Table structure for table `deaer`
--

CREATE TABLE `deaer` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deaer`
--

INSERT INTO `deaer` (`id`, `username`, `password`) VALUES
(1, 'dealer', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `dearship_request`
--

CREATE TABLE `dearship_request` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `applydate` date NOT NULL,
  `amount` int(100) NOT NULL,
  `branch_location` text NOT NULL,
  `office` text NOT NULL,
  `pincode` int(20) NOT NULL,
  `reqid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dearship_request`
--

INSERT INTO `dearship_request` (`id`, `name`, `address`, `phone`, `applydate`, `amount`, `branch_location`, `office`, `pincode`, `reqid`) VALUES
(1, 'sachin', 'sagar', '957669403', '2018-06-13', 12000, 'indore', 'sagar', 0, '12234'),
(2, 'sachin', 'sdas', 'sdsadsd', '2018-06-12', 12000, 'cxc', 'xccxc', 0, '123456'),
(3, 'sachin', 'axdsd', 'sdd', '2018-06-08', 11212, 'zxdsd', 'dsd', 0, '3455'),
(4, 'sachin', 'sdas', 'sdsadsd', '2018-06-12', 12000, 'cxc', 'xccxc', 0, '54545'),
(5, 'gulab', 'asas', '2323232', '2018-06-21', 1200, 'sdsd', 'sdd', 121212, '1528545785'),
(6, 'test', 'indore', '9575694043', '2018-06-15', 23000, 'indore', 'tilak nagar ', 452010, '1528562775');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `ccn` text NOT NULL,
  `deliveryid` text NOT NULL,
  `shippername` text NOT NULL,
  `bookatbranch` text NOT NULL,
  `deliveryedatbranch` text NOT NULL,
  `dealername` text NOT NULL,
  `dateofdelivery` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dispatcher`
--

CREATE TABLE `dispatcher` (
  `id` int(11) NOT NULL,
  `ccn` text NOT NULL,
  `Branch_name` text NOT NULL,
  `shipper_name` text NOT NULL,
  `phone` text NOT NULL,
  `sender_address` text NOT NULL,
  `reciver_name` text NOT NULL,
  `reciver_phoneno` text NOT NULL,
  `reciver_ address` text NOT NULL,
  `assignto` text NOT NULL,
  `dispatcher_Id` text NOT NULL,
  `dispatchid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatcher`
--

INSERT INTO `dispatcher` (`id`, `ccn`, `Branch_name`, `shipper_name`, `phone`, `sender_address`, `reciver_name`, `reciver_phoneno`, `reciver_ address`, `assignto`, `dispatcher_Id`, `dispatchid`) VALUES
(2, '1122', '121', 'ds', '21', 's', '2121', '1212', '2121', 'wew', 'wew', 'DIS1528803165');

-- --------------------------------------------------------

--
-- Table structure for table `emplyee`
--

CREATE TABLE `emplyee` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `role` text NOT NULL,
  `branchid` text NOT NULL,
  `branch_name` text NOT NULL,
  `branch_location` text NOT NULL,
  `dateofjoin` date NOT NULL,
  `salary` int(100) NOT NULL,
  `Empid` text NOT NULL,
  `pwd` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emplyee`
--

INSERT INTO `emplyee` (`id`, `name`, `role`, `branchid`, `branch_name`, `branch_location`, `dateofjoin`, `salary`, `Empid`, `pwd`) VALUES
(1, 'sachin', 'Delivery Boy', 'SCS00401YPR', 'ypr_Branch', 'Yashwanthpur Bangalore', '2011-06-12', 18500, 'EMP701', 1234),
(2, 'Bhuvan', 'Delivery Boy', 'SCS00403TMK', 'Tmk_Branch', 'Near Tumkur university', '2010-05-29', 15500, 'EMP702', 3214),
(3, 'Dhanush', 'Delivery Boy', 'SCS00405HSN', 'Hassan_Branch', 'Hassan', '2013-02-10', 18650, 'EMP703', 4567),
(4, 'Arjun', 'Manager', 'SCS00401YPR', 'ypr_Branch', 'Yashwanthpur Bangalore', '2011-03-27', 30000, 'EMP704', 3214),
(5, 'ramu', 'Manager', 'SCS00409DVG', 'Davangere_Branch', 'Chickpet Davangere', '2015-02-12', 28250, 'EMP705', 1234),
(6, 'Sagar', 'Manager', 'SCS00403TMK', 'Tmk_Branch', 'Near Tumkur university', '2013-08-20', 25350, 'EMP706', 1234),
(7, 'Kumar', 'Manager', 'SCS00405HSN', 'Hassan_Branch', 'Hassan', '2014-05-23', 27549, 'EMP707', 1234),
(8, 'rohith', 'Deliveryboy', 'SCS00409DVG', 'Davangere_Branch', 'Chickpet Davangere', '2011-09-10', 18560, 'EMP708', 1234),
(9, 'Mahantesh', 'Manager', 'SCS00404HUB', 'HUbbali_Branch', 'Near SKT school,Thilak nagar Hubbali', '2013-01-16', 22570, 'EMP709', 1234),
(10, 'Sanjay', 'Deliveryboy', 'SCS00404HUB', 'HUbbali_Branch', 'Near SKT school,Thilak nagar Hubbali', '2012-03-14', 20000, 'EMP710', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `place_request`
--

CREATE TABLE `place_request` (
  `id` int(11) NOT NULL,
  `applicant_name` text NOT NULL,
  `applicant_address` text NOT NULL,
  `phoneno` text NOT NULL,
  `date_of_apply` date NOT NULL,
  `amountdeposited` text NOT NULL,
  `branchLocation` text NOT NULL,
  `office_Address` text NOT NULL,
  `placeid` text NOT NULL,
  `status` int(11) NOT NULL,
  `pincode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_request`
--

INSERT INTO `place_request` (`id`, `applicant_name`, `applicant_address`, `phoneno`, `date_of_apply`, `amountdeposited`, `branchLocation`, `office_Address`, `placeid`, `status`, `pincode`) VALUES
(1, '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(2, '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(3, 'sd', 'adsdas', 'sadasd', '2018-06-21', 'sdsad', 'sadas', 'asdas', 'pla1528810365', 1, 'sdsad');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `id` int(11) NOT NULL,
  `ccn` text NOT NULL,
  `receiver_name` text NOT NULL,
  `reciverphoneno` text NOT NULL,
  `Material` text NOT NULL,
  `noofitem` text NOT NULL,
  `dateofreceive` text NOT NULL,
  `recivername` text NOT NULL,
  `relation` text NOT NULL,
  `Dispatchername` text NOT NULL,
  `DispatcherID` text NOT NULL,
  `receiver_id` text NOT NULL,
  `BookedAt` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`id`, `ccn`, `receiver_name`, `reciverphoneno`, `Material`, `noofitem`, `dateofreceive`, `recivername`, `relation`, `Dispatchername`, `DispatcherID`, `receiver_id`, `BookedAt`, `status`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', 0),
(2, '1122', '2121', '1212', 'sdsad', '21', '2018-06-15', 'wd', 'adsad', 'wew', 'wew', 'REC1528808024', '', 0),
(3, '1122', '2121', '1212', 'sdsds', '21', '2018-06-15', 'sdsd', 'sdsd', 'wew', 'wew', 'REC1528808913', '121', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `email`, `subject`, `message`) VALUES
(3, 'Trupti K N', 'trupti.k.n.27@gmail.com', 'FeedBack', 'Im satsfied with your delivery'),
(4, 'Ramesh', 'shiva@gmail.com', 'FeedBack', 'Good Service'),
(5, 'sushma', 'sushma@gmail.com', 'test message', 'Hello'),
(6, 'Ramesh', 'rameshram22@gmail.com', 'FeedBack', 'Im satsfied with your delivery');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uname` varchar(20) DEFAULT NULL,
  `upswd` varchar(8) NOT NULL,
  `uph_no` varchar(10) DEFAULT NULL,
  `uaddress` varchar(50) DEFAULT NULL,
  `u_email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `upswd`, `uph_no`, `uaddress`, `u_email`) VALUES
('Ramesh', '123456', '9008273736', 'No 26 near Shiva temple Mangalore', 'shiva@gmail.com'),
('sushma', 'sushma', '8618825901', 'Tumkur', 'sushmamp22@gmail.com'),
('Trupti', 'trupti', '6334734432', 'Banglore', 'trupti@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consignment`
--
ALTER TABLE `consignment`
  ADD PRIMARY KEY (`ccn`);

--
-- Indexes for table `corporate`
--
ALTER TABLE `corporate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deaer`
--
ALTER TABLE `deaer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dearship_request`
--
ALTER TABLE `dearship_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispatcher`
--
ALTER TABLE `dispatcher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emplyee`
--
ALTER TABLE `emplyee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_request`
--
ALTER TABLE `place_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`upswd`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `consignment`
--
ALTER TABLE `consignment`
  MODIFY `ccn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `corporate`
--
ALTER TABLE `corporate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deaer`
--
ALTER TABLE `deaer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dearship_request`
--
ALTER TABLE `dearship_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dispatcher`
--
ALTER TABLE `dispatcher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emplyee`
--
ALTER TABLE `emplyee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `place_request`
--
ALTER TABLE `place_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
