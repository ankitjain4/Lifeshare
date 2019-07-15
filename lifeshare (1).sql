-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2019 at 06:46 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id9146123_lifeshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE IF NOT EXISTS `blood_bank` (
  `name` text NOT NULL,
  `units_ap` int(11) NOT NULL,
  `units_an` int(11) NOT NULL,
  `units_bp` int(11) NOT NULL,
  `units_bn` int(11) NOT NULL,
  `units_abp` int(11) NOT NULL,
  `units_abn` int(11) NOT NULL,
  `units_op` int(11) NOT NULL,
  `units_on` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number1` int(11) NOT NULL,
  `street` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `price` int(11) NOT NULL,
  `delivery` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_bank`
--


-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `name` text NOT NULL,
  `date_of _birth` date NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `suffering_from` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `number1` text NOT NULL,
  `flat` text NOT NULL,
  `colony` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`name`, `date_of _birth`, `blood_group`, `suffering_from`, `email`, `number1`, `flat`, `colony`, `landmark`, `city`, `state`) VALUES
('Ankit Jain', '1997-07-04', 'O+ve', 'Suffering from none of these', 'ajainavi97@gmail.com', '9929203131', 'Room Number-503', 'Boys Hostel-1, JK Lakshmipat University', 'Mahapura', 'JAIPUR', 'RAJASTHAN'),
('Vipin Agarwal', '1998-09-12', 'O+ve', 'Suffering from none of these ', 'vipinagarwal2016@jklu.edu.in', '9509824706', 'house number 28', 'kalyan nagar', 'om ent hospital', 'JAIPUR', 'RAJASTHAN'),
('Prajjval Govil', '1998-01-30', 'O+ve', 'Suffering from none of these', 'prajjvalgovil@gmail.com', '8436287117', 'b-4', 'mnit staff colonly', 'jln marg', 'JAIPUR', 'RAJASTHAN'),
('Brahm Dutt Tiwari', '1997-03-03', 'B+ve', 'Suffering from none of these', 'brahmdutt02722@gmail.com', '9694568660', 'White House PG, Main Road Bidholi', 'Via Prem Nagar', 'P. O. Bidholi', 'DEHRADUN', 'UTTARAKHAND'),
('Pravesh Bisaria', '1999-01-07', 'B+ve', 'Suffering from none of these', 'praveshbisaria@jklu.edu.in', '7688810363', '116/188', 'Agarwal Farm ', 'Mansarovar', 'JAIPUR', 'RAJASTHAN'),
('Pankaj Jain ', '1978-11-11', 'B+ve', 'Blood Transfusion-6 Months', 'pankajpugalia@gmail.com', '9915842594', 'J M Pugalia 529 Kalgidhar Gurdwara Road', 'Kamaraj road', 'Kalgidhar Gurdwara ', 'LUDHIANA', 'PUNJAB'),
('Ashutosh Gupta', '1997-01-28', 'B+ve', 'Suffering from none of these', 'ashutoshgupta@jklu.edu.in', '7520640918', 'B-34', 'Sitaram Colony Gate 1 Balkeshear', 'Balkeshwar Mandir ', 'AGRA', 'UTTAR PRADESH'),
('Atishay Jain', '1997-07-18', 'B+ve', 'Suffering from none of these', 'atishayjain1807@gmail.com', '9314081212', 'Bdi', 'Sunshine City', 'Golden Tulip', 'BHIWADI', 'RAJASTHAN'),
('Himanshu Rathore', '1997-11-21', 'AB+ve', 'Suffering from none of these', 'himanshurathore@jklu.edu.in', '7340440790', 'Shree Cement Ltd', 'Shree Vihar', 'Bangur Nagar', 'BEAWAR', 'RAJASTHAN'),
('Ananya Sarraf', '1997-04-24', 'O-ve', 'Suffering from none of these', 'ananyasarraf10@gmail.com', '8890807463', 'Sector 37A House No.430', 'Vidhya Path', 'Near Water Workes', 'CHANDIGARH', 'PUNJAB'),
('Megha Jain', '1989-11-20', 'O+ve', 'Suffering from none of these', 'megha2089@yahoo.co.in', '9987100330', 'House number 603, Universal Apartments', 'kalina', 'santacruz east ', 'MUMBAI', 'MAHARASHTRA'),
('Shubham Jain', '1998-04-15', 'B+ve', 'Suffering from none of these', 'shujain64@gmail.com', '7023169107', '404, Tower-18, Aventurine', 'Executive Homez, Omaxe City', 'Near Thakur ji ka Mandir', 'JAIPUR', 'RAJASTHAN'),
('Aman Bhargava', '1998-10-08', 'O+ve', 'Suffering from none of these', 'amanbhargava1998@gmail.com', '8769018313', 'House no. 819', 'barkat nagar, tonk phatak', 'near water tank', 'JAIPUR', 'RAJASTHAN'),
('Ritika Roongta ', '1999-12-08', 'A+ve', 'Suffering from none of these', 'ritikaroongta@jklu.edu.in', '9166627001', 'A-44 A', 'Model town,Jagatpura Road', 'Behind anukampa Apartments, Malviya Nagar', 'JAIPUR', 'RAJASTHAN'),
('Roopesh Sharma', '1998-12-27', 'B+ve', 'Suffering from none of these', 'roopesh1999sharma@gmail.com', '9643823133', 'Room Number-202', 'Boys Hostel-1, JK Lakshmipat University', 'Mahapura', 'JAIPUR', 'RAJASTHAN'),
('Rajat shivhare', '1996-11-18', 'O+ve', 'Suffering from none of these', '15Rajatgupta@gmail.com', '9149044372', 'Apr-76', 'Indra kunj baluganj ', 'Near hotel t9 residency', 'AGRA', 'UTTAR PRADESH'),
('Vinod Vishvakarma', '1984-05-08', 'A+ve', 'Suffering from none of these', 'vinodvishwakarma@jklu.edu.in', '9784661543', 'House Number 603', 'JK LAKSHMIPAT UNIVERSITY', 'Mahapura', 'JAIPUR', 'Rajasthan'),
('Sushama Agarwal', '1966-08-08', 'B+ve', 'Suffering from none of these', 'agarwalsushama.72@gmail.com', '9694868436', 'B-58', 'Barkat nagar vistar ', 'Sawai madhopur railway line ', 'JAIPUR', 'RAJASTHAN'),
('Nikhil', '1998-10-11', 'A+ve', 'Suffering from none of these', 'nikhilnj03@gmail.com', '9783905757', 'House Number A-8', 'Jyoyi nagar shahpura ', 'Near khanya k balaji', 'BHILWARA', 'RAJASTHAN'),
('Mihir Pareek', '1998-03-27', 'B+ve', 'Suffering from none of these', 'mihirpareek@jklu.edu.in', '8209116004', 'Room Number-207', 'Boys Hostel-1, JK Lakshmipat University', 'Mahapura', 'JAIPUR', 'RAJASTHAN'),
('Akshat Abhishek', '1997-10-02', 'O+ve', 'Suffering from none of these', 'akshatabhishek210@gmail.com', '8107680816', 'House no. 404, Tower 18', 'Executive Homez, Omaxe City', 'Mahapura', 'JAIPUR', 'RAJASTHAN'),
('Arpit Sharma', '1997-10-13', 'O+ve', 'Suffering from none of these	', 'arpits470@gmail.com', '7737447829', 'House Number EF-2', 'konark Oasis', 'Near Genesis Mall', 'BHIWADI', 'Rajasthan'),
('Deepti Sethia', '1982-10-30', 'B+ve', 'Suffering from none of these', 'deepti3010@gmail.com', '8153908120', '1B28 Akrabhatta  ', 'housing board', 'Opp B.s. petrolium ', 'ABU ROAD', 'Rajasthan'),
('Videsha', '1997-07-07', 'AB-ve', 'Suffering from none of these	', 'bansal.videsha@gmail.com', '9918250083', 'Room Number-201', 'Girls Hostel, JK Lakshmipat University', 'Mahapura', 'JAIPUR', 'RAJASTHAN'),
('Naman sharma', '1999-06-26', 'O+ve', 'Suffering from none of these', 'namansharma@jklu.edu.in', '6377524691', '54-b', 'Kisan marg Barkat Nagar', 'Near ahinsa park', 'JAIPUR', 'RAJASTHAN'),
('Paritosh Prasad', '1999-03-25', 'B+ve', 'Suffering from none of these	', 'paritoshprasad@jklu.edu.in', '7073696294', 'Room Number-510', 'Boys Hostel-1, JK Lakshmipat University', 'Mahapura', 'JAIPUR', 'RAJASTHAN'),
('Yash Goyal', '1999-10-14', 'B+ve', 'Asthama', 'yashgoyal@jklu.edu.in', '8930410975', 'Flat 101, Tower 13, Omaxe Heights', 'Omaxe City, Palwal, Haryana', 'Omaxe City', 'PALWAL', 'HARYANA'),
('Nikita', '1999-04-06', 'B+ve', 'Suffering from none of these', 'nikitakhoj@jklu.edu.in', '8947845221', 'A-82, nehru nagar ', 'Pani petch', 'Near Temple', 'JAIPUR', 'RAJASTHAN'),
('Pankhi Surana', '1996-05-01', 'B+ve', 'Suffering from none of these', 'paankhi2@gmail.com', '7726849119', '32/1163', 'Neelkanth colony', 'Shastri Nagar', 'BHILWARA', 'RAJASTHAN'),
('Viral Natani', '1999-12-22', 'O-ve', 'Suffering from none of these', 'viralnatani@gmail.com', '9414834346', '1979, Govind Rao ka rasta', 'Chandpole Bazar', 'Opposite Raghunath Temple', 'JAIPUR', 'RAJASTHAN'),
('Khushboo sharma', '1994-09-03', 'A+ve', 'Suffering from none of these', 'vishkhushboo645@gmail.com', '8527781335', 'Mq-645, sector 6 ', 'Nigahi colony Singrauli ', 'Near DAV public school nigahi ', 'Singrauli ', 'Madhya Pradesh'),
('Ayushi Jasoria', '1997-04-23', 'A+ve', 'Suffering from none of these', 'ayushijasoria23@gmail.com', '9521433995', '91/209,', 'Gokhle Marg, Maansarovar,Jaipur', 'Near fire brigade office', 'JAIPUR', 'RAJASTHAN'),
('Adhisha Gupta', '1999-02-24', 'AB-ve', 'Suffering from none of these', 'adhishagupta@jklu.edu.in', '7023268614', 'House No. 38/179', 'Kiran path mansarover', 'Near Kiran path bus stop', 'JAIPUR', 'RAJASTHAN'),
('Pranjal Tripathi', '1999-02-19', 'O+ve', 'Suffering from none of these', 'Pranjaltriapthi@jklu.edu.in', '8387935967', 'plot no. - 176 ', 'Hanuman Nagar', 'Near Railway Station', 'JAIPUR', 'RAJASTHAN'),
('Prateek', '1996-09-14', 'AB+ve', 'Select disease', 'prateek.pdhalwal@gmail.com', '7877286918', 'Room Number-514', 'Boys Hostel-1, JK Lakshmipat University', 'Mahapura', 'JAIPUR', 'RAJASTHAN'),
('Kunal Kumawat', '1999-05-18', 'B+ve', 'Suffering from none of these', 'kunalkumawat@jklu.edu.in', '7619713739', '47,Enginners Colony', 'Sirsi Road,Pachywala', 'Near Genius Public School', 'JAIPUR', 'RAJASTHAN'),
('Anurag Soni', '1999-03-21', 'A+ve', 'Suffering from none of these', 'anurags565@gmail.com', '8233661727', 'House No. C-177', 'Vaishali Nagar, Jaipur', 'Behind Inox ( Vaibhav tower )', 'JAIPUR', 'RAJASTHAN'),
('Satyam singh', '1999-03-17', 'B+ve', 'Suffering from none of these', 'satyamsingh@jklu.edu.in', '9672692073', 'Room Number-208', 'Boys Hostel-1, JK Lakshmipat University', 'Mahapura', 'JAIPUR', 'RAJASTHAN'),
('Pallavi Bhandari', '1998-06-13', 'O-ve', 'Suffering from none of these', 'bhandaripallavi.98@gmail.com', '8306090565', 'B-58', 'Barkat nagar vistar ', 'Sawai madhopur railway line ', 'JAIPUR', 'RAJASTHAN'),
('dishan shukla', '1997-12-10', 'B+ve', 'Suffering from none of these', 'dishanshukla@jklu.edu.in', '7568064774', '22 plot no.', 'sankhala coloney', 'tejaji', 'JAIPUR', 'rajasthan'),
('Lokesh Gujral', '1999-02-21', 'A+ve', 'Suffering from none of these', 'lokeshgujral@jklu.edu.in', '9116705988', 'House No. 65', 'Chandar Nagar', 'Near Race Cource', 'DEHRADUN', 'UTTARAKHAND'),
('Utkarsh Sharma', '1998-09-06', 'A+ve', 'Suffering from none of these', 'uttu1998sharma@gmail.com', '7014203574', 'House No. A-005', 'Ashiana Greens', 'Near Nagina Gardens', 'BHIWADI', 'RAJASTHAN'),
('Archana ', '1984-04-25', 'O+ve', 'Suffering from none of these', 'Archana4rishabh@gmail.com', '9344222203', 'Green square ', 'Ellis nagar ', '70 feet road ', 'Maduari ', 'Tamilnadu '),
('Deepshikha Rajput', '1997-06-27', 'AB+ve', 'Suffering from none of these', 'deepshikha27rajput@gmail.com', '9773956585', 'house no-911', 'sector-6', 'Near Alwar Bypass', 'Dharuhera', 'HARYANA'),
('Shekhar', '1997-02-07', 'B+ve', 'Suffering from none of these', 'shekharomsevda7298@gmail.com', '9799339511', 'Room Number 2755', 'GIT COLLEGE', 'SITAPURA', 'JAIPUR', 'RAJASTHAN'),
('Mahipal singh', '1988-02-01', 'AB-ve', 'Suffering from none of these', 'mahipals233@gmail.com', '9252001010', 'House no 20', 'Pratap Nagar', 'sector 7', 'JAIPUR', 'Rajasthan'),
('Ritwik Raman', '1996-11-19', 'AB+ve', 'Suffering from none of these', 'ritwikraman@jklu.edu.in', '9680329945', 'Room Number-204', 'Boys Hostel-1, JK Lakshmipat University', 'Mahapura', 'JAIPUR', 'RAJASTHAN'),
('Kriti Dodia', '1997-07-14', 'AB+ve', 'Suffering from none of these', 'kritidodia@gmail.com', '9699920884', 'Flat no.5, Floor no.3, Runwal Sarovar ', 'Baner road', 'Behind Ranka Jwellers', 'PUNE', 'MAHARASHTRA'),
('Sachin Agarwal', '1998-06-16', 'B+ve', 'Suffering from none of these', 'sachinagarwal@jklu.edu.in', '9649478125', 'House Number 9/413 ', 'U.I.T.', 'Sector 9', 'BHIWADI', 'RAJASTHAN'),
('Ajay Kumar Jain', '1968-12-31', 'A+ve', 'Suffering from none of these', 'sandak@shreecement.com', '9214037156', 'Block B-5,M-219', 'Ashiana Town', 'Near Thadha mode', 'BHIWADI', 'RAJASTHAN'),
('Monika Jain', '1975-06-15', 'O+ve', 'Suffering from none of these', 'monikajain15@gmail.com', '9414734052', 'Block B-5,M-219', 'Ashiana Town', 'Near Thadha mode', 'BHIWADI', 'RAJASTHAN'),
('Tushar Jain', '1992-04-23', 'B+ve', 'Suffering from none of these', 'tjdarkknight23@gmail.com', '9730458800', 'FLAT no. 1, Laxmi Narayan Residency, ', 'Dhawalgiri Society, Market Yard', 'Opp Kalyan Bhel', 'PUNE', 'MAHARASHTRA'),
('Vishal Sipani', '1981-03-18', 'AB+ve', 'Select disease', 'sipanivishal@yahoo.co', '8879770443', 'House number 603, Universal Apartments', 'kalina', 'Santacruz East ', 'MUMBAI', 'MAHARASHTRA'),
('Ritwik Sen', '1999-01-21', 'B+ve', 'Suffering from none of these', 'ritwik.rckstr@gmail.com', '9928016611', 'House Number-A-001  ', 'Ashiana Greens', 'Near Bhagat Singh Colony', 'BHIWADI', 'RAJASTHAN'),
('Bhaskar Karnatak', '1999-03-21', 'O+ve', 'Suffering from none of these', 'bhaskarkarnatak10@gmail.com', '9870673575', 'Lotus C 401 , City Homes', 'Omaxe Paranoma City', 'Opposite seigwerk factory', 'BHIWADI', 'RAJASTHAN'),
('Anushka Pandit', '1997-12-12', 'A+ve', 'Suffering from none of these', 'anushkapandit97@gmail.com', '7597624819', '4th floor, 309, Ambica Vihar', 'Ambica Vihar, Paschim Vihar', 'Beside Bhatia Global Hospital', 'NEW DELHI', 'NEW DELHI'),
('Deeksha singh', '1996-09-28', 'B+ve', 'Suffering from none of these', 'Deeki.singh96@gmail.com', '7838804651', '720/26 palm appts ', 'cosmos greens ', 'Near Genesis Mall', 'BHIWADI', 'RAJASTHAN'),
('Aroona Yadav', '1997-11-09', 'A+ve', 'Suffering from none of these', 'aroonayadav09@gmail.com', '7734896340', 'House Number C-444', 'Ashiana Village', 'Near Village Center', 'BHIWADI', 'RAJASTHAN'),
('Rajat Nebhnani', '1998-02-16', 'A+ve', 'Suffering from none of these', 'rajatnebhnani@jklu.edu.in', '7733938993', 'C-3, Shiv path, Sanjay colony, Nehru nagar', 'RPA Road', 'Panipech', 'JAIPUR', 'RAJASTHAN'),
('Shreya Mishra', '1998-05-30', 'O+ve', 'Suffering from none of these', 'shreyamishra821@gmail.com', '9205216553', 'Flat No. 131,', 'Rangoli, Ashiana Village', 'Near Village Center', 'BHIWADI', 'RAJASTHAN'),
('Abhishek rawal', '1997-12-25', 'O-ve', 'Suffering from none of these', 'abhishekrawal834@gmail.com', '9887628572', 'House No A-216', 'Ashiana Greens', 'Near Nagina Gardens', 'BHIWADI', 'RAJASTHAN'),
('Juhi Verma', '1997-07-21', 'O-ve', 'Suffering from none of these', 'juhivm@gmail.com', '9649319556', 'House No. A-103', 'Ashiana Village', 'Near Village Center', 'BHIWADI', 'RAJASTHAN'),
('Neelesh Kesarwani', '1999-09-17', 'B+ve', 'Suffering from none of these', 'neeleshkesarwani@jklu.edu.in', '9455998950', '133 BHS', 'Allahpur', 'Tulsi park', 'ALLAHABAD', 'UTTAR PRADESH'),
('Pradhumn Singh Parihar', '2000-07-06', 'B+ve', 'Suffering from none of these', 'singhpradhumnparihar@gmail.com', '6377841186', 'Kk hostel, india gate', 'JECRC College', 'Sitapura Industrial Area', 'JAIPUR', 'RAJASTHAN'),
('Videsha Bansal', '1997-07-07', 'AB-ve', 'Suffering from none of these', 'videshabansal@jklu.edu.in', '9918250083', 'Room Number-201', 'Girls Hostel, JK Lakshmipat University', 'Mahapura', 'JAIPUR', 'RAJASTHAN'),
('Mohit Tekchandani', '2000-06-08', 'AB+ve', 'Suffering from none of these', 'mtekchandani7@gmail.Com', '7976763816', 'B-188', 'Radha vihar colony hari bhau upadhya nagar ', 'Mittal hospital ', 'AJMER', 'RAJASTHAN'),
('Aroona Yadav', '1997-11-09', 'A+ve', 'Suffering from none of these', 'aroonayadav09@gmail.com', '9050926340', 'C- 444 block 11 ', 'Ashiana Village', 'Near Village Center', 'BHIWADI', 'RAJASTHAN'),
('Kriti Dodia', '1996-07-14', 'AB+ve', 'Suffering from none of these', 'kritidodia@gmail.com', '9699920884', 'Flat no.5, Floor no.3', 'Runwal Sarovar, Baner Road', 'Behind Ranka jwellers ', 'Pune', 'Maharashtra'),
('Sachin Agarwal', '1998-06-16', 'B+ve', 'Suffering from none of these', 'sachinagarwal@jklu.edu.in', '9649478125', 'Room Number-207', 'Boys Hostel-1, JK Lakshmipat University', 'Mahapura', 'JAIPUR', 'RAJASTHAN'),
('Snahil Indoria', '1996-12-27', 'O+ve', 'Suffering from none of these', 'snahilindoria999@gmail.com', '9672002488', 'B-116(north) near carrier point', 'Riddhi siddhi gopalpura bypass', 'Riddhi Siddhi', 'JAIPUR', 'RAJASTHAN'),
('Vishal Sipani', '1981-03-18', 'A+ve', 'Suffering from none of these', 'sipanivishal@yahoo.co.in', '8879770443', 'House number 603, Universal Apartments', 'kalina', 'Santacruz East ', 'MUMBAI', 'MAHARASHTRA'),
('Ayush', '1998-08-15', 'A+ve', 'Suffering from none of these', 'ayushbhardwa@gmail.com', '9718556944', 'House number- 1603, p tower', 'amrapali sapphire ', 'Sector 45', 'NOIDA', 'UTTAR PRADESH'),
('Nitin Mandhana', '1987-06-10', 'O+ve', 'Suffering from none of these', 'nitinmaheshwarinitz@gmail.co', '9557356357', 'A3 202, ', 'AVALON recidency ', 'Near toll plaze', 'BHIWADI', 'RAJASTHAN'),
('Gajendra Singh Rathore ', '1977-04-28', 'B+ve', 'Suffering from none of these', 'gajendramertiya@gmail.com', '8058367926', 'A 007', 'Ashiana Village', 'Near Village Center', 'BHIWADI', 'RAJASTHAN');




