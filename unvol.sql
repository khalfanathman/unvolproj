-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2019 at 04:56 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unvol`
--

-- --------------------------------------------------------

--
-- Table structure for table `implimentation_location`
--

CREATE TABLE `implimentation_location` (
  `impliment_id` int(11) NOT NULL,
  `projctrefrence` varchar(200) NOT NULL,
  `impliment_office` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_expense`
--

CREATE TABLE `project_expense` (
  `expense_id` int(11) NOT NULL,
  `projct_ref_exp` varchar(200) NOT NULL,
  `Grant_amount` int(50) NOT NULL,
  `First_disbursement_amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_info`
--

CREATE TABLE `project_info` (
  `Project_Ref` varchar(200) NOT NULL,
  `Project_Title` text NOT NULL,
  `Dates_from_GCF` date NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Duration` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_info`
--

INSERT INTO `project_info` (`Project_Ref`, `Project_Title`, `Dates_from_GCF`, `Start_Date`, `End_Date`, `Duration`) VALUES
('ALB-RS-001', 'Readiness support to Albania', '2016-11-15', '2016-08-30', '2017-08-30', 12),
('BRA-RS-001', ' Technology Needs Assessment for the Implementation of Climate Action Plans ', '2018-06-20', '2018-06-20', '2019-12-19', 18),
('COM-RS-001', '1. Establishing and strengthening National Designated Authorities or Focal Points;\r\n2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.', '2018-11-01', '2018-11-01', '2020-10-21', 24),
('CRI-RS-002', 'Building sub-national capacities for the implementation of the National Adaptation Plan in Costa Rica', '2018-10-23', '2018-10-23', '2021-10-23', 36),
('DOM-RS-002', 'Building capacity to advance National Adaptation Plan Process in the Dominican Republic', '2018-07-11', '2018-07-11', '2021-07-11', 36),
('EGY-RS-001', 'Supporting Egypt’s engagement with the Green Climate Fund: Logical framework support', '2017-05-02', '2017-04-24', '2018-10-23', 18),
('GHA-RS-001', 'Drought Early Warning and Forecasting System: Improving resiliency of crops to drought through strengthened early warning within Ghana, Uganda and Sudan', '2017-05-15', '2017-05-15', '2019-05-10', 24),
('HND-RS-002', 'Supporting strategic planning to engage with the GCF and comply with the national commitments under the Paris Agreement regarding the LULUCF sector', '2018-01-18', '2018-01-18', '2019-07-19', 18),
('JOR-RS-001', 'Strengthening NDA of Jordan to deliver on GCF Investment Framework', '2017-06-15', '2017-06-15', '2018-12-14', 18),
('MDG-RS-001', 'Building Capacity in Madagascar to engage with the GCF', '2018-07-20', '2018-07-20', '2019-07-19', 12),
('MDV-RS-001', 'Establishing and strengthening National Designated Authority (NDA), and developing strategic framework for engagement with the GCF in Maldives', '2017-06-16', '2017-06-16', '2019-06-13', 12),
('MLY-RS-002', 'Accessing REDD+ result-based payments in Malaysia', '2018-11-12', '2018-11-12', '2018-11-13', 24),
('MMR-RS-001', 'Strengthened drought and flood management through improved science?based information availability and management in Myanmar', '2017-07-26', '2017-07-26', '2018-07-26', 12),
('MMR-RS-002', 'Establishing and Strengthening National Designated Authority (NDA), and Developing Strategic Framework for Engagement with the GCF in Myanmar', '2017-11-10', '2017-11-10', '2019-05-11', 18),
('MNE-RS-001', '1. Establishing and strengthening National Designated Authorities or Focal Points;\r\n2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.', '2016-11-15', '2016-08-30', '2017-08-30', 12),
('MNG-RS-003', 'Scaling-up of Implementation of Low-Carbon District Heating Systems in Mongolia', '2018-02-01', '2018-02-01', '2019-02-01', 12),
('MNG-RS-004', 'Building capacity to advance National Adaptation Plan Process in Mongolia', '2018-06-20', '2018-06-20', '2021-06-19', 36),
('MRT-RS-002', 'Building capacity to advance National Adaptation Plan Process in Mauritania', '2018-07-17', '2018-07-17', '2021-07-08', 36),
('MUS-RS-002', 'Climate Change Vulnerability and Adaptation Study for Port of Port Louis', '2018-01-22', '2018-01-22', '2019-04-19', 15),
('NER-RS-002', 'Building Niger’s engagement with the GCF: Establishment and strengthening of the NDA, and elaboration of a country programme identifying strategic priorities', '2018-06-20', '2018-06-20', '2019-12-19', 18),
('NPL-RS-001', 'Building Capacity to Advance National Adaptation Plan Process in Nepal', '2017-05-15', '2017-05-15', '2020-05-14', 36),
('PAK-RS-003', 'Building capacity to advance National Adaptation Plan Process in Pakistan', '2018-03-03', '2018-03-03', '2021-03-04', 36),
('PSE-RS-002', 'Technology Road Map for the Implementation of Climate Action Plans in Palestine.', '2017-10-18', '2017-10-18', '2016-10-18', 12),
('S1-32GCL-000023', 'Jordan Integrated Landscape Management Initiative (JILMI)', '2018-03-05', '2019-12-27', '2019-12-28', 12),
('SRB-RS-001', 'Developing the capacities of the Republic of Serbia for an effective engagement with the Green Climate Fund', '2018-01-12', '2018-01-12', '2019-01-12', 12),
('SSD-RS-001', 'Republic of South Sudan Green Climate Fund’s Readiness and Preparatory Support Project ', '2018-06-20', '2018-06-20', '2019-12-19', 18),
('SWZ-RS-002', 'Green Climate Fund Readiness Support for Swaziland', '2018-03-12', '2018-03-12', '2020-03-13', 24),
('SWZ-RS-003', 'Building capacity to advance National Adaptation Plan process in Swaziland ', '2018-06-28', '2018-06-28', '2021-06-27', 36),
('TON-RS-002', 'To develop an energy efficiency master plan for the Kingdom of Tonga and East Africa', '2017-04-20', '2017-04-20', '2017-10-09', 6),
('ZWE-RS-001', '1. Establishing and strengthening National Designated Authorities or Focal Points;\r\n2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.', '2018-03-05', '2018-03-05', '2020-03-04', 24),
('ZWE-RS-002', 'Building capacity to advance National Adaptation Plan Process in Zimbabwe', '2018-05-11', '2018-05-11', '2021-05-13', 36);

-- --------------------------------------------------------

--
-- Table structure for table `project_states`
--

CREATE TABLE `project_states` (
  `pj_status_id` int(11) NOT NULL,
  `Project_Ref` varchar(200) NOT NULL,
  `prj_Readiness` varchar(200) NOT NULL,
  `type_of_readiness` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_states`
--

INSERT INTO `project_states` (`pj_status_id`, `Project_Ref`, `prj_Readiness`, `type_of_readiness`, `status`) VALUES
(1, 'ALB-RS-001', 'Readiness', 'Capacity Building', 'completed'),
(2, 'BRA-RS-001', 'readiness', 'FI/TNA/other', 'under implementation'),
(3, 'COM-RS-001', 'readiness', 'Capacity Building', 'under implementation'),
(4, 'CRI-RS-002', 'National Adaptation Plans', 'NAP', 'under implementation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `implimentation_location`
--
ALTER TABLE `implimentation_location`
  ADD PRIMARY KEY (`impliment_id`),
  ADD UNIQUE KEY `unique` (`projctrefrence`);

--
-- Indexes for table `project_expense`
--
ALTER TABLE `project_expense`
  ADD PRIMARY KEY (`expense_id`),
  ADD UNIQUE KEY `projct_ref_exp` (`projct_ref_exp`);

--
-- Indexes for table `project_info`
--
ALTER TABLE `project_info`
  ADD PRIMARY KEY (`Project_Ref`(100)),
  ADD KEY `Project_Ref` (`Project_Ref`);

--
-- Indexes for table `project_states`
--
ALTER TABLE `project_states`
  ADD PRIMARY KEY (`pj_status_id`),
  ADD UNIQUE KEY `Project_Ref` (`Project_Ref`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `implimentation_location`
--
ALTER TABLE `implimentation_location`
  MODIFY `impliment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_expense`
--
ALTER TABLE `project_expense`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_states`
--
ALTER TABLE `project_states`
  MODIFY `pj_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `implimentation_location`
--
ALTER TABLE `implimentation_location`
  ADD CONSTRAINT `implimentation_location_ibfk_1` FOREIGN KEY (`projctrefrence`) REFERENCES `project_info` (`Project_Ref`);

--
-- Constraints for table `project_expense`
--
ALTER TABLE `project_expense`
  ADD CONSTRAINT `project_expense_ibfk_1` FOREIGN KEY (`projct_ref_exp`) REFERENCES `project_info` (`Project_Ref`);

--
-- Constraints for table `project_states`
--
ALTER TABLE `project_states`
  ADD CONSTRAINT `project_states_ibfk_1` FOREIGN KEY (`Project_Ref`) REFERENCES `project_info` (`Project_Ref`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
