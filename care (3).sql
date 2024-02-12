-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 06:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `care`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descripation` varchar(1600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `descripation`) VALUES
(1, ' \"Compassionate Healing: The Care Hospital Experience\"', 'Title: \"Compassionate Healing: The Care Hospital Experience\"\r\n\r\nDescription:\r\n\"Compassionate Healing: The Care Hospital Experience\" embodies the ethos of care within a healthcare setting, where empathy, expertise, and innovation converge to deliver exceptional patient-centered care. This title encapsulates the mission of Care Hospital to provide not only medical treatment but also holistic support, comfort, and understanding to patients and their families. Through a blend of state-of-the-art technology and compassionate care practices, the hospital creates an environment where healing flourishes and individuals feel valued and respected. The description invites readers to explore the unique journey of care at Care Hospital, where every interaction is infused with empathy, every decision is made with compassion, and every outcome is driven by a commitment to improving lives. From the dedicated healthcare professionals to the comprehensive range of services, this narrative celebrates the transformative impact of care in the realm of healthcare, underscoring Care Hospital\'s dedication to excellence in patient care and well-being.');

-- --------------------------------------------------------

--
-- Table structure for table `appointement`
--

CREATE TABLE `appointement` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `department` varchar(100) NOT NULL,
  `doctor` varchar(80) NOT NULL,
  `city` varchar(55) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `message` varchar(90) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointement`
--

INSERT INTO `appointement` (`id`, `user`, `email`, `phone`, `department`, `doctor`, `city`, `hospital`, `date`, `message`, `time`) VALUES
(3, 'Sarah', 'sarah@gmail.com', '03566667791', 'pharmacy', 'Sarah', 'lahore', 'p.n.sshifa', '2024-01-16', 'hey', '21:09'),
(5, 'hina', 'benishnisar56@gmail.com', '034555566', 'psiotheraphy', 'Dr dua', 'karachi', 'p.n.sshifa', '2024-01-16', '', '21:09'),
(8, 'Benish', 'benishnisar56@gmail.com', '03428410999', 'ICU', '', '', 'p.n.sshifa', '2024-01-19', 'text', '10:18'),
(9, 'Noor', 'noor@gmail.com', '03428410999', 'ICU', 'Dr dua', 'Islamabad', 'p.n.sshifa', '2024-01-17', 'hello', '09:13'),
(10, 'Aiza', 'aiza@gmail.com', '03428410999', 'General medicine ward', 'Sarah', 'lahore', 'p.n.sshifa', '2024-01-21', 'hello', '03:29'),
(11, 'wahab', 'wahab@gmail.com', '03428410999', 'ICU', 'Dr dua', 'lahore', 'p.n.sshifa', '2024-01-21', 'hell', '05:09'),
(13, 'mehwish', 'mehwish@gmail.com', '0342105744', 'ICU', 'Sarah', 'lahore', 'Shaukat khanam', '2024-01-21', 'hey...', '12:05'),
(15, 'wahab', 'wahab@gmail.com', '03428410999', 'General medicine ward', 'Dr Bushra', 'Karachi', 'Shaukat khanam', '2024-01-26', 'Hello', '03:25'),
(29, 'UmmeHaniya', 'nisarkhan@gmail.com', '0345678999', 'General medicine ward', 'Dr Bushra', 'Karachi', 'Karachi', '2024-01-31', 'hello', '23:43'),
(30, 'Sarah', 'sarah@gmail.com', '03566667791', 'General medicine ward', 'Dr Bushra', 'lahore', 'P.n.s Shifa', '2024-02-05', 'hello', '23:46'),
(32, 'hina', 'benishnisar@gmail.com', '03566667791', 'General medicine ward', 'Dr Bushra', 'lahore', 'Jinnah', '2024-02-19', 'hello', '07:30'),
(33, 'Benish Nisar', 'benishnisar56@gmail.com', '03428410999', 'ICU', 'Dr Bushra', 'lahore', 'P.n.s Shifa', '2024-02-19', 'hell', '18:35'),
(36, 'esha', 'esha@gmail.com', '03566667791', 'General medicine ward', 'Dr Maryam', 'lahore', 'P.n.s Shifa', '2024-02-01', 'hey', '12:40');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `avaliabilityid` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `dayavailability` varchar(100) NOT NULL,
  `weekavailability` varchar(90) NOT NULL,
  `monthavalibility` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`avaliabilityid`, `doctorid`, `dayavailability`, `weekavailability`, `monthavalibility`) VALUES
(7, 3, 'mon,tues,wed', 'mon-wed', 'mon-tues-wed'),
(14, 13, 'mon,tues,wed', 'mon-wed', 'mon-tues-wed'),
(15, 16, 'mon', 'mon-tues-wed', 'mon-wed'),
(16, 15, 'mon,wed', 'mon-tues-wed', 'mon-tue-wed-fri'),
(18, 14, 'mon,tues', 'mon-tues-wed', 'mon to wed'),
(19, 18, 'mon,fri', 'mon-tues-wed', 'mon to wed');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cityid` int(11) NOT NULL,
  `cityName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cityid`, `cityName`) VALUES
(1, 'Karachi'),
(2, 'lahore'),
(3, 'Islamabad'),
(6, 'afganistan');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `image`) VALUES
(1, 'client1.png'),
(4, 'client2.png'),
(5, 'client3.png'),
(6, 'client4.png'),
(7, 'client5.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'Benish', 'benishnisar56@gmail.com', '03428410999', 'Hospital treatment', 'not treat well'),
(2, 'noor', 'sarah@gmail.com', '03428410999', 'Hospital treatment', 'DDD'),
(3, 'noor', 'sarah@gmail.com', '03428410999', 'Hospital treatment', 'DDD'),
(4, 'noor', 'sarah@gmail.com', '03428410999', 'Hospital treatment', 'DDD'),
(5, 'noor', 'sarah@gmail.com', '03428410999', 'Hospital treatment', 'DDD'),
(6, 'noor', 'sarah@gmail.com', '03428410999', 'Hospital treatment', 'DDD'),
(7, 'fatima', 'fatimakhan@gmail.com', '03556556', 'Hospital treatment', 'hello'),
(8, 'fatima', 'fatimakhan@gmail.com', '03556556', 'Hospital treatment', 'hello'),
(9, 'nida', 'nida@gmail.com', '0333445554', 'Hospital treatment', 'good as well'),
(10, 'anaya', 'aiza@gmail.com', '03428410999', 'Hospital treatment', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(100) NOT NULL,
  `diseasename` varchar(80) NOT NULL,
  `descripation` varchar(300) NOT NULL,
  `preventation` varchar(900) NOT NULL,
  `cure` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `diseasename`, `descripation`, `preventation`, `cure`, `image`) VALUES
(1, 'Polio', ' The most effective way to prevent polio is through vaccination. The oral polio vaccine (OPV) and the inactivated polio vaccine (IPV) are both used in vaccination campaigns to provide immunity against the poliovirus. Additionally, maintaining high vaccination coverage and implementing proper sanitat', ' The most effective way to prevent polio is through vaccination. The oral polio vaccine (OPV) and the inactivated polio vaccine (IPV) are both used in vaccination campaigns to provide immunity against the poliovirus. Additionally, maintaining high vaccination coverage and implementing proper sanitation and hygiene practices help prevent the spread of the virus.', 'Oral Polio Vaccine (OPV)', 'pol.jpeg'),
(2, 'Diabetes', 'While type 1 diabetes cannot be prevented, type 2 diabetes, which is more common, can often be prevented or delayed through healthy lifestyle choices. This includes maintaining a healthy weight, eating a balanced diet rich in fruits, vegetables, and whole grains, engaging in regular physical activit', 'While type 1 diabetes cannot be prevented, type 2 diabetes, which is more common, can often be prevented or delayed through healthy lifestyle choices. This includes maintaining a healthy weight, eating a balanced diet rich in fruits, vegetables, and whole grains, engaging in regular physical activity, and avoiding tobacco use.', '  Insulin therapy, blood sugar', 'Diabetes.jpg'),
(11, 'Parkinsons Disease', ' Engaging in regular physical activity has been linked to a lower risk of developing Parkinson\'s disease. Aim for at least 150 minutes of moderate-intensity aerobic exercise per week, along with strength training exercises at least two days a week.', ' Engaging in regular physical activity has been linked to a lower risk of developing Parkinson\'s disease. Aim for at least 150 minutes of moderate-intensity aerobic exercise per week, along with strength training exercises at least two days a week.', 'Treatment aims to manage symptoms', 'ds.jpg'),
(12, 'Alzheimer\'s Disease', 'While the exact cause of Alzheimer\'s Disease is not fully understood, several risk factors have been identified, including age, genetics, family history, and certain lifestyle factors (e.g., cardiovascular health, physical activity, diet, social engagement). While it may not be possible to prevent A', 'While the exact cause of Alzheimer\'s Disease is not fully understood, several risk factors have been identified, including age, genetics, family history, and certain lifestyle factors (e.g., cardiovascular health, physical activity, diet, social engagement). While it may not be possible to prevent Alzheimer\'s Diseases.', ' Slowing disease progression', 'aa.webp'),
(13, 'Asthma', 'Prevention:While asthma cannot be prevented entirely, steps can be taken to reduce the risk of asthma attacks and minimize symptoms. This includes avoiding known triggers such as allergens (e.g., pollen, dust mites, pet dander), tobacco smoke, air pollution, and respiratory infections. Maintaining g', 'Prevention:While asthma cannot be prevented entirely, steps can be taken to reduce the risk of asthma attacks and minimize symptoms. This includes avoiding known triggers such as allergens (e.g., pollen, dust mites, pet dander), tobacco smoke, air pollution, and respiratory infections. Maintaining good indoor air quality, using allergen-proof mattress and pillow covers.', 'Corticosteroids to Control', 'aatha.jpg'),
(14, 'Malaria', 'Prevention strategies include the use of insecticide-treated bed nets (ITNs), indoor residual spraying (IRS) of insecticides, wearing protective clothing, using insect repellents, and taking chemoprophylaxis (preventive medication) when traveling to malaria-endemic areas.Prevention strategies includ', 'Prevention strategies include the use of insecticide-treated bed nets (ITNs), indoor residual spraying (IRS) of insecticides, wearing protective clothing, using insect repellents, and taking chemoprophylaxis (preventive medication) when traveling to malaria-endemic areas.Prevention strategies include the use of insecticide-treated bed nets (ITNs).Prevention strategies. the use of insecticide-', 'Combination therapies (ACTs)', 'mlr.webp'),
(15, 'Influenza (Flu)', 'Prevention:He best way to prevent influenza is through vaccination. Yearly flu vaccines are recommended for everyone over six months of age, particularly those at higher risk of complications, such as young children, older adults,and individuals with underlying health conditions. Other preventive me', 'Prevention:He best way to prevent influenza is through vaccination. Yearly flu vaccines are recommended for everyone over six months of age, particularly those at higher risk of complications, such as young children, older adults,and individuals with underlying health conditions. Other preventive measure as young children, older adults,and individuals', '(Tamiflu) and zanamivir (Relenza) ', 'flue.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `doctoraccount`
--

CREATE TABLE `doctoraccount` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `doctorprofile` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `specialty` varchar(90) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` varchar(90) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctoraccount`
--

INSERT INTO `doctoraccount` (`id`, `username`, `doctorprofile`, `firstname`, `lastname`, `specialty`, `image`, `email`, `password`, `phonenumber`, `address`, `city`) VALUES
(2, 'Dr dua', 'doctor.jpg', 'dua', 'khan', 'Dentist', 'doctor.jpg', 'king@gmail.com', '12345', '998988778888', 'Pakistan Navy Colony', 'Karachi'),
(13, 'Dr Bushra', 'doctortwo.webp', 'Bushra', 'khan', 'General surgery', 'doctortwo.webp', 'bushra@gmail.com', '3333', '03422105755', 'Railway Colony', 'lahore'),
(14, 'Dr Maryam', 'doctorthree.webp', 'Maryam', 'Khan', 'Dermatologist', 'doctorthree.webp', 'maryamkhan@gmail.com', '3333', '03478356751', 'korangi', 'Islamabad'),
(15, 'Dr Iqra Eman', 'doctorfive.jpg', 'Iqra', 'Eman', 'Neurologist', 'doctorfive.jpg', 'iqraeman@gmail.com', '1233', '034555443334', '5/3Bahria Town ', 'Islamabad'),
(16, 'Dr Huba', 'doctorsix.webp', 'Huba', 'Khan', 'Psychiatrists', 'doctorsix.webp', 'huba@gmail.com', '12345', '034555443334', 'BahriaTown Karachi', 'afganistan'),
(18, 'Dr Hina', 'de.webp', 'hina', 'khan', 'Dentist', 'de.webp', 'hinakhan@gmail.com', '6677', '034566778822', 'Bahria tiwn', 'lahore');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlogin`
--

CREATE TABLE `doctorlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctorlogin`
--

INSERT INTO `doctorlogin` (`id`, `username`, `email`, `password`) VALUES
(3, 'Dr dua', 'dua@gmail.com', '555'),
(4, 'Sarah', 'sarah@gmail.com', '1234'),
(6, 'Dr Bushra', 'bushra@gmail.com', '1222');

-- --------------------------------------------------------

--
-- Table structure for table `hospitaldata`
--

CREATE TABLE `hospitaldata` (
  `id` int(11) NOT NULL,
  `hospitalroom` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitaldata`
--

INSERT INTO `hospitaldata` (`id`, `hospitalroom`, `experience`) VALUES
(3, 'Room_2(ICU)', '2002'),
(4, 'Room_3(Anatomy)', '2003'),
(5, 'Room4(Pharmacology)', '2023'),
(6, 'Room_5(Lab)', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `hospitalname` varchar(100) NOT NULL,
  `hospitalcity` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospitalname`, `hospitalcity`, `area`, `location`, `zipcode`) VALUES
(3, 'Jinnah', '', 'Railway Colony', 'DHA Phase II', '54556'),
(4, 'P.n.s Shifa', 'lahore', 'near of...', 'Civil Hospital', '22'),
(5, 'Civil Hospital', 'Karachi', ' Masjid New Labour', 'nazimabad', '12334'),
(6, 'Shaukat Khanam', 'lahore', 'garden', 'golden......', '078787');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(1, 'BENISH', 'benishnisarkhan56@gmail.com', '123455'),
(2, '', 'benishnisar56@gmail.com', '22'),
(3, '', 'wahab@gmail.com', '23334'),
(4, '', 'nisarkhan@gmail.com', '2233'),
(5, 'care', 'care@gmail.com', '3333');

-- --------------------------------------------------------

--
-- Table structure for table `medicalnews`
--

CREATE TABLE `medicalnews` (
  `id` int(11) NOT NULL,
  `headlines` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `publicdate` varchar(90) NOT NULL,
  `source` varchar(80) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicalnews`
--

INSERT INTO `medicalnews` (`id`, `headlines`, `content`, `publicdate`, `source`, `image`) VALUES
(2, ' Neural network provides precise analysis of breast symmetry in surgery', 'A newly developed neural network is highly accurate in identifying key landmarks important in breast', '2024-01-27', 'patient to patient', 'neurologist.webp'),
(3, 'Europe gears up for future pandemics with AI-powered \"PAIR\" project', 'The new EU-funded five-year project PAIR just kicked off in Copenaghen with the participation of 20 ', '2024-01-18', 'patient to patient', 'virus.webp'),
(5, 'The association between handgrip strength and functional outcomes in long COVID-19', '\r\nThe association between handgrip strength and functional outcomes in long COVID-19', '2024-01-27', 'Hello How are you..............', 'covid.webp');

-- --------------------------------------------------------

--
-- Table structure for table `medical_inventions`
--

CREATE TABLE `medical_inventions` (
  `id` int(11) NOT NULL,
  `inventionsname` varchar(100) NOT NULL,
  `descripation` varchar(600) NOT NULL,
  `inventor` varchar(100) NOT NULL,
  `inventationsdate` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `diseaseid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_inventions`
--

INSERT INTO `medical_inventions` (`id`, `inventionsname`, `descripation`, `inventor`, `inventationsdate`, `image`, `diseaseid`) VALUES
(9, 'Polio Vaccine', 'It seems like you\'re working on a web application that includes a dropdown menu for the user\'s profile. The profile image displayed in the dropdown menu is fetched from the database. Here\'s a breakdown of what the code does:', 'Dr. Jonas Salk', '2024-02-07', 'pol.jpeg', 1),
(10, ' PancreaGen Bio-Implantable Artificial Pancreas', 'PancreaGen Bio-Implantable Artificial Pancreas is a revolutionary medical device ', 'Dr. Elena Martinez', '2024-01-16', 'Diabetes.jpg', 2),
(15, 'Alzheimer\'s Vaccine', 'Alzheimer\'s Disease is a progressive neurodegenerative disorder that affects memory, thinking, behavior, and the ability to perform daily activities. It is the most common cause of dementia, accounting for 60-70% of cases. Alzheimer\'s Disease ', ' Not applicable ', '2024-02-21', 'aa.webp', 12),
(16, 'Metered Dose Inhaler (MDI)', 'Asthma is a chronic condition, and there is currently no cure. However, it can be effectively managed with appropriate treatment and lifestyle modifications. Treatment typically involves medications such as bronchodilators (to relax the muscles around the airways) and anti-inflammatory drugs (to reduce airway inflammation). In severe cases,', 'George Maison', '2024-01-31', 'aatha.jpg', 13),
(17, 'Rapid Diagnostic Tests (RDTs) for Malaria', 'Prevention strategies include the use of insecticide-treated bed nets (ITNs), indoor residual spraying (IRS) of insecticides, wearing protective clothing, using insect repellents, and taking chemoprophylaxis (preventive medication) when traveling to malaria-endemic areas.Prevention strategies include the use of insecticide-treated bed nets (ITNs).Prevention strategies. the use of insecticide-', 'Rapid Diagnostic Tests (RDTs)', '2024-02-02', 'mlr.webp', 14),
(18, ' Influenza Vaccine', ' Influenza, commonly known as the flu, is a contagious respiratory illness caused by influenza viruses. It typically presents with symptoms such as fever, cough, sore throat, muscle aches, fatigue, and headache. Influenza viruses can cause seasonal outbreaks, usually during the fall and winter months, leading to significant morbidity and mortality worldwide', 'Dr. Jonas Salk', '2024-02-16', 'flue.jpg', 15);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(2, 'benishnisar@gmail.com'),
(3, 'nisarkhan@gmail.com'),
(4, 'hinakhan@gmail.com'),
(5, 'hinakhan@gmail.com'),
(6, 'benishnisar56@gmail.com'),
(7, 'benishnisar56@gmail.com'),
(8, 'benishnisar56@gmail.com'),
(9, 'benishnisar56@gmail.com'),
(10, 'benishnisar56@gmail.com'),
(11, 'kiran@gmail.com'),
(12, 'kiran@gmail.com'),
(13, 'zubia@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `openinghours`
--

CREATE TABLE `openinghours` (
  `id` int(11) NOT NULL,
  `day` varchar(100) NOT NULL,
  `week` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `openinghours`
--

INSERT INTO `openinghours` (`id`, `day`, `week`, `month`) VALUES
(1, 'Monday', 'mon,tues', 'mon,tues,wed');

-- --------------------------------------------------------

--
-- Table structure for table `patientrecord`
--

CREATE TABLE `patientrecord` (
  `id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dateofbirth` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `disease` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientrecord`
--

INSERT INTO `patientrecord` (`id`, `firstname`, `lastname`, `dateofbirth`, `gender`, `email`, `phonenumber`, `address`, `disease`) VALUES
(1, 'Benish', 'Nisar', '13-2-2002', 'female', 'benishnisarkhan56@gmail.com', '03455566666', 'j2/2pak jumhuriya colony', 'abdomen pain'),
(3, 'Bushra', 'khan', '2024-01-20', 'female', 'hinakhan@gmail.com', '034566778822', 'j2/2pakjumhuriyacolony...........................', 'SmallPox'),
(4, 'Haniya', 'Ahmed', '2024-01-21', 'male', 'sarah@gmail.com', '03422105755', 'railwaycolony', 'cholera'),
(5, 'hina', 'Ahmed', '2024-02-13', 'male', 'Care@gmail.com', '0356564556556', 'Pakistan Navy', 'cholera');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descripation` varchar(600) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `descripation`, `image`) VALUES
(1, 'Comprehensive Care Services at Our Hospital', 'In times of emergency, swift access to help is paramount. Calling for emergency care can mean the difference between life and death', 'co.png'),
(2, 'General Treatment', 'hlo', 'doctorthree.webp'),
(4, 'General Treatment', 'At Care Hospital, we provide compassionate and comprehensive healthcare\"', 'doctortwo.webp'),
(5, 'Teeth Whitening', '\"Care Hospital: Brightening smiles with professional teeth whitening services.\"', 'teeth.gif'),
(6, 'Heart Surgery', '\"Care Hospital: Leading the way in life-saving heart surgeries.\"', 'heart.jpg'),
(7, 'Ear Treatment', '\"Care Hospital: Excellence in comprehensive and compassionate ear treatments.\"', 'ear.jpg'),
(8, 'Neurologist', '\"Care Hospital: Specializing in advanced neurology care with compassionate expertise.\"', 'neuro.jpeg'),
(9, 'Blood Transfusion', '\"Care Hospital: Ensuring safe and efficient blood transfusions for patients.\"', 'blood.jpg'),
(11, 'Emergency Help', 'In times of emergency, swift access to help is paramount. Calling for emergency care can mean the difference between life and death. ', 'co.png'),
(12, 'Enriched Pharmacy', 'Enriched Pharmacy is a modern, customer-centric pharmacy that aims to provide comprehensive pharmaceutical services while prioritizing personalized care and convenience for its clients.', 'co.png'),
(13, 'Medical Treatment', 'Medical treatment encompasses a wide range of interventions aimed at preventing, diagnosing, managing, and curing illnesses, injuries, or diseases', 'co.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `descripation` varchar(600) NOT NULL,
  `button` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `subtitle`, `descripation`, `button`, `img`) VALUES
(6, 'Care Hospital', 'Providing Compassionate Care Since 2024', '\"Care Hospital: Your trusted partner in health and wellness.\"', '', 'slider.jpg'),
(7, 'Care Hospital', 'Providing Compassionate Care Since 2024', '\"Welcome to Care Hospital, where we prioritize your health and well-being above all else.. ', '', 'slider2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phonenumber`, `address`) VALUES
(1, 'Benish', '123455', 'benishnisar@gmail.com', '0767', 'paki'),
(4, 'huba', '123', 'huba@gmail.com', '0345566677', 'paknavy');

-- --------------------------------------------------------

--
-- Table structure for table `websiteinformation`
--

CREATE TABLE `websiteinformation` (
  `id` int(11) NOT NULL,
  `websitecontactnumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `websiteinformation`
--

INSERT INTO `websiteinformation` (`id`, `websitecontactnumber`, `email`) VALUES
(3, '+877655656577', 'Careplus@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointement`
--
ALTER TABLE `appointement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`avaliabilityid`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctoraccount`
--
ALTER TABLE `doctoraccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitaldata`
--
ALTER TABLE `hospitaldata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalnews`
--
ALTER TABLE `medicalnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_inventions`
--
ALTER TABLE `medical_inventions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `openinghours`
--
ALTER TABLE `openinghours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientrecord`
--
ALTER TABLE `patientrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websiteinformation`
--
ALTER TABLE `websiteinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointement`
--
ALTER TABLE `appointement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `avaliabilityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctoraccount`
--
ALTER TABLE `doctoraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hospitaldata`
--
ALTER TABLE `hospitaldata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicalnews`
--
ALTER TABLE `medicalnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medical_inventions`
--
ALTER TABLE `medical_inventions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `openinghours`
--
ALTER TABLE `openinghours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patientrecord`
--
ALTER TABLE `patientrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `websiteinformation`
--
ALTER TABLE `websiteinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
