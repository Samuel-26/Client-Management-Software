-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 06:34 AM
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
-- Database: `crms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`) VALUES
(100, 'password');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `address`, `phone`, `email`, `reg_date`) VALUES
(100, 'Anjan Kumar N', 'Tumkur', 8073912688, 'anjan@gmail.com', '2024-02-07'),
(101, 'TechCorp Solutions', '123 Tech Street, Cityville', 5551234567, 'info@techcorp.com', '2024-02-21'),
(102, 'SoftSys Innovations', '456 Software Avenue, Codetown', 9877654321, 'contact@softsys.com', '2024-02-20'),
(103, 'DevGenius Enterprise', '789 Code Lane, DevCity', 1112223333, 'support@devgenius.com', '2024-02-23'),
(104, 'CodeCraft Solutions', '567 Code Street, Devtown', 3334445555, 'info@codecraft.com', '2024-02-22'),
(105, 'InnoSoft Systems', '890 Innovate Lane, Techville', 7778889999, 'contact@innosoft.com', '2024-02-22'),
(106, 'TechWave Innovations', '112 Tech Boulevard, WaveCity', 1112233444, 'support@techwave.com', '2024-02-22'),
(107, 'ByteCraft Solutions', '789 Code Lane, TechCity', 3334445555, 'info@bytecraft.com', '2024-03-21'),
(108, 'InnoTech Innovations', '555 Innovation Street, Devtown', 8887776666, 'support@innotech.com', '2024-02-22'),
(109, 'CodeNest Enterprises', '123 Nest Avenue, Codetropolis', 1115557777, 'contact@codenest.com', '2024-02-22'),
(110, 'Tech Solutions Inc', '123 Tech Street, Tech City', 9876543210, 'info@techsolutions.com', '2024-02-07'),
(111, 'InnovateTech Corpora', '456 Innovation Avenue', 8765432109, 'contact@innovatetechcorp.', '2024-02-22'),
(112, 'SoftConnect Solution', '789 Software Lane, Connectville', 7654321098, 'support@softconnect.com', '2024-02-17'),
(113, 'DigitalScape Technol', '101 Digital Square, Scapeburg', 6543210987, 'info@digitalscape.tech', '2024-02-16'),
(114, 'FutureTech Innovatio', '202 Future Lane, Innovation City', 5432109876, 'hello@futuretechinnovatio', '2024-02-01'),
(115, 'DataMinds Analytics', '303 Data Street, Mindsburg', 4321098765, 'info@dataminds.com', '2024-02-08'),
(116, 'CloudWise Solutions', '404 Cloud Avenue, Wisetown', 3210987654, 'info@cloudwise.com', '2024-02-06'),
(117, 'WebCraft Studios', '505 Web Lane, Craftville', 2109876543, 'contact@webcraftstudios.c', '2024-02-23'),
(118, 'SecureSoft Systems', '606 Secure Street, Softburg', 1098765432, 'info@securesoftsystems.co', '2024-02-22'),
(119, 'AI Innovations Ltd.', '707 AI Road, Innovate City', 9876543210, 'info@aiinnovations.com', '2024-02-14'),
(120, 'TechGenius Solutions', '808 Tech Square, Geniusville', 8765432109, 'support@techgenius.com', '2024-02-11'),
(121, 'DigitalDream Tech', '101 Dream Street, Techville', 6543210987, 'hello@digitaldreamtech.co', '2024-02-06'),
(122, 'InnoSoft Solutions', '202 Inno Lane, Softville', 5432109876, 'info@innosoftsolutions.co', '2024-02-16'),
(123, 'SwiftCode Systems', '303 Swift Road, Codeburg', 4321098765, 'support@swiftcode.com', '2024-02-17'),
(124, 'DataPulse Technologi', '404 Data Avenue, Pulse City', 3210987654, 'info@datapulse.com', '2024-02-02'),
(125, 'CloudWave Innovation', '505 Cloud Lane, Waveville', 2109876543, 'hello@cloudwaveinnovation', '2024-02-13'),
(126, 'WebWise Solutions', '606 Web Street, Wiseburg', 1098765432, 'info@webwise.com', '2024-02-19'),
(127, 'SecureNet Systems', '707 Secure Square, Netville', 9876543210, 'support@securenet.com', '2024-02-21'),
(128, 'AISoft Innovations', '808 AI Lane, Innovate City', 8765432109, 'info@aisoftinnovations.co', '2024-02-18'),
(129, 'TechSavvy Solutions', '909 Tech Road, Savvyburg', 7654321098, 'hello@techsavvy.com', '2024-02-09'),
(130, 'CodeMasters Innovate', '101 Code Square, Masterburg', 6543210987, 'info@codemasters.com', '2024-02-02'),
(131, 'DigitalHarbor Tech', '202 Digital Lane, Harborville', 5432109876, 'support@digitalharbor.com', '2024-02-14'),
(132, 'InnoCode Solutions', '303 Inno Street, Codeburg', 4321098765, 'info@innocode.com', '2024-02-19'),
(133, 'SwiftTech Innovation', '404 Swift Avenue, Techville', 3210987654, 'hello@swifttechinnovation', '2024-02-15'),
(2003, 'sam', 'sssss', 3232, 'sam@gmail.com', '2024-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `contract_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `service_id` int(15) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`contract_id`, `c_id`, `service_id`, `start_date`, `end_date`) VALUES
(2000, 101, 1001, '2024-02-22', '2024-03-30'),
(2001, 102, 1002, '2024-02-20', '2024-04-18'),
(2002, 103, 1003, '2024-02-14', '2024-04-11'),
(2003, 104, 1004, '2024-02-22', '2024-03-29'),
(2004, 105, 1005, '2024-02-23', '2024-04-11'),
(2005, 106, 1006, '2024-02-22', '2024-04-17');

--
-- Triggers `contracts`
--
DELIMITER $$
CREATE TRIGGER `validate_contract_dates` BEFORE INSERT ON `contracts` FOR EACH ROW BEGIN
    IF NEW.end_date <= NEW.start_date THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'End date must be greater than start date';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `p_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`p_id`, `c_id`, `p_name`, `start_date`, `end_date`, `status`) VALUES
(1, 100, 'web dev', '2024-02-01', '2024-02-28', 'in progress'),
(3, 104, 'Inventory Management System', '2024-02-22', '2024-04-02', 'InProgress'),
(5, 105, 'Education App Development', '2024-02-22', '2024-03-07', 'Completed'),
(6, 106, 'AI-driven Chatbot Implementation', '2024-02-22', '2024-04-04', 'Pending'),
(1001, 101, 'E-commerce Platform', '2024-02-21', '2024-03-29', 'InProgress'),
(2001, 102, 'Healthcare Management System', '2024-02-16', '2024-03-04', 'Completed'),
(3001, 103, 'Financial Analytics App', '2024-01-16', '2024-04-25', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `name`, `description`, `price`) VALUES
(1001, 'Web Development', 'Custom web application development', 10000),
(1002, 'Mobile App Development', 'iOS and Android app development', 15000),
(1003, 'Data Analytics', 'Advanced data analysis and reporting', 20000),
(1004, 'Cloud Integration', 'Integration with cloud platforms', 12000),
(1005, 'UI/UX Design', 'User interface and experience design', 8000),
(1006, 'Blockchain Development', 'Blockchain-based application development', 25000),
(1007, 'Digital Marketing', 'Online marketing and brand promotion', 18000),
(1008, 'Cybersecurity Consultation', 'Expert guidance on cybersecurity measures', 22000),
(1009, 'AI and Machine Learning Soluti', 'Implementing advanced AI and ML technologies', 35000),
(1010, 'IT Infrastructure Management', 'Blockchain Development', 32000),
(1011, 'E-commerce Solutions', 'Designing and developing e-commerce platforms', 20000),
(1012, 'AR/VR Development', 'Creating immersive augmented and virtual reality experiences', 30000),
(1013, 'Business Intelligence Services', 'Extracting insights from business data', 13000),
(1014, 'Cloud Migration Services', 'Migrating applications and data to the cloud', 15000),
(1015, 'ERP Solutions', 'Enterprise Resource Planning for streamlined processes', 28000),
(1016, 'Web Design and Development', 'Building responsive and visually appealing websites', 22000),
(1017, 'Social Media Management', 'Managing and optimizing social media accounts', 16000),
(1018, 'Network Infrastructure Setup', 'Designing and implementing secure network solutions', 27000),
(1019, 'Content Management System (CMS', 'Creating custom CMS solutions', 15000),
(1020, 'Virtual Reality (VR) Developme', 'Creating immersive VR experiences and applications', 14000),
(1021, 'Artificial Intelligence Develo', 'Creating AI-powered applications and solutions', 13500),
(1022, 'Augmented Reality (AR) Develop', 'Building applications with AR capabilities', 13000),
(1023, 'Big Data Solutions', 'Processing and analyzing large sets of data', 21000),
(1024, 'Software as a Service (SaaS)', 'Providing software on a subscription basis', 17000),
(1025, 'Chatbot Development', 'Building chatbots for customer interaction', 7000),
(1026, 'Enterprise Resource Planning (', 'Integrating business management applications', 22000),
(1027, 'Cybersecurity Solutions', 'Implementing security measures to protect digital systems', 30000),
(1028, 'Mobile Game Development', 'Developing games for mobile platforms', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `supportticketes`
--

CREATE TABLE `supportticketes` (
  `ticket_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `p_id` int(15) NOT NULL,
  `description` varchar(300) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supportticketes`
--

INSERT INTO `supportticketes` (`ticket_id`, `c_id`, `p_id`, `description`, `status`) VALUES
(1, 100, 100, 'bgbg\r\n', 'front end completed'),
(2, 101, 1001, 'Website loading issues', 'Open'),
(3, 102, 2001, 'Bug in Healthcare App', 'Closed'),
(4, 103, 3001, 'Assistance needed with Analytics Tool', 'InProgress'),
(5, 104, 3, 'Inventory system malfunction\r\n', 'OPen'),
(6, 105, 5, 'App not loading on certain devices', 'Closed'),
(7, 106, 6, 'Assistance needed with Chatbot', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `u_id` int(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`u_id`, `password`) VALUES
(100, 'password'),
(101, '101'),
(102, '102'),
(103, '103'),
(104, '104'),
(105, '105'),
(106, '106'),
(107, '107'),
(108, '108'),
(109, '109'),
(110, '110'),
(111, '111'),
(112, '112'),
(113, '113'),
(114, '114'),
(115, '115'),
(116, '116'),
(117, '117'),
(118, '118'),
(119, '119'),
(120, '120'),
(121, '121'),
(122, '122'),
(123, '123'),
(124, '124'),
(125, '125'),
(126, '126'),
(127, '127'),
(128, '128'),
(129, '129'),
(130, '130'),
(131, '131'),
(132, '132'),
(133, '133'),
(2003, 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`contract_id`),
  ADD KEY `test` (`c_id`),
  ADD KEY `tes2` (`service_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `tes` (`c_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `supportticketes`
--
ALTER TABLE `supportticketes`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `t` (`c_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supportticketes`
--
ALTER TABLE `supportticketes`
  MODIFY `ticket_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `tes2` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `tes` FOREIGN KEY (`c_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `supportticketes`
--
ALTER TABLE `supportticketes`
  ADD CONSTRAINT `t` FOREIGN KEY (`c_id`) REFERENCES `clients` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
