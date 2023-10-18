-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 06:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_resume`
--

CREATE TABLE `add_resume` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `basic_desc` text NOT NULL,
  `degree` varchar(255) NOT NULL,
  `from_date` varchar(255) NOT NULL,
  `to_date` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `education_desc` text NOT NULL,
  `job_position` varchar(255) NOT NULL,
  `work_from_date` varchar(255) NOT NULL,
  `work_to_date` varchar(255) NOT NULL,
  `work_institute` varchar(255) NOT NULL,
  `work_desc` text NOT NULL,
  `skill_1` varchar(255) NOT NULL,
  `value_1` varchar(255) NOT NULL,
  `skill_2` varchar(255) NOT NULL,
  `value_2` varchar(255) NOT NULL,
  `skill_3` varchar(255) NOT NULL,
  `value_3` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_resume`
--

INSERT INTO `add_resume` (`id`, `name`, `fname`, `country`, `city`, `gender`, `qualification`, `experience`, `basic_desc`, `degree`, `from_date`, `to_date`, `institute`, `education_desc`, `job_position`, `work_from_date`, `work_to_date`, `work_institute`, `work_desc`, `skill_1`, `value_1`, `skill_2`, `value_2`, `skill_3`, `value_3`, `email`, `phone`) VALUES
(8, 'Maryam', 'hashd j', 'Pakistan', 'Sialkot', 'Female', 'Gradute', '2 Year', 'Experienced!', 'BS-IT', '09-17-2015', '07/03/2019', 'UOG', 'Experienced!', 'Data scientist', '10-02-2018', '12-12-2018', 'Netcome', 'experienced!', 'python', '80%', 'Web Developer', '90%', 'Wordpress', '80%', 'maryam@gmail.com', '91234728947'),
(10, 'chand', 'M.Aslam', 'Pakistan', 'Gujranwala', 'Male', 'Matriculation', '1 Year', ' Having more than one year of experience in python!', 'BS-IT', '09-17-2015', '07-03-2019', 'UOG', ' Having more than one year of experience in python!', 'Data scientist', '10-02-2018', '12-12-2018', 'Netcome', ' Having more than one year of experience in python!', 'python', '80%', 'Php', '90%', 'Wordpress', '80%', 'ibrahim90@gmail.com', '91234728947'),
(11, 'farwa nasir', ' fhusduiocfhsd', 'Pakistan', 'Daska', 'Female', 'Gradute', '1 Year', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Bs-CS', '09-17-2015', '07-03-2019', 'UOL', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Content Writer', '10-02-2018', '12-12-2018', 'Netsole', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Adobe photoshop', '60%', 'Ms Word', '85%', 'MS Excel', '50%', 'farwa@gmail.com', '91234728947');

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `id` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `c_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`id`, `companyname`, `fullname`, `phone`, `email`, `address`, `gender`, `password`, `c_password`) VALUES
(24, 'proilm', 'aksontv', '+92 3480410822', 'aksontv74@gmail.com', 'sialkot, head marala', 'Male', '098', ''),
(25, 'ilmson', 'nazim', '34567890987654', 'nazim@gmail.com', 'sialkot, head marala', 'Male', '123', ''),
(26, 'ilmson', 'akramilm4', '+92 3480410821', 'xyz@gmail.com', 'sialkot, head marala', 'Female', '321', ''),
(27, 'akson', 'akram', '12345678909', 'a@dsagmail.com', 'asdjmaskdn diasasi asi9', 'Male', '123456', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `image`, `title`, `admin`, `details`, `post_date`) VALUES
(1, 'images/ffer.jpg', 'Google banned huwaeu anrdoid system', 'nazim', 'fuius fuhsDFUIHS IDFH HOHUIOAS DIOAS HDIOD HIOSdh s]dfsf\r\nSD\r\nSuf s9DF USP9DF', '2019-06-09 05:33:46'),
(3, 'images/ffer.jpg', 'Dummy etxtsa', 'cHAND', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-06-09 06:21:17'),
(5, 'images/ffer.jpg', 'aGAIN DUMMY TEXT', 'hAMZA', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-06-09 06:23:48'),
(6, 'images/ffer.jpg', 'THIRD BAR ADUMMY TEXT', 'nazim', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum ', '2019-06-09 06:24:11'),
(8, 'images/gg.jpg', 'helloooz', 'nazim', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2019-06-09 06:41:21'),
(9, 'images/gg.jpg', 'Next day', 'Ayesha', ' kjjhdfjksdf sduif sodja od jaiodsuifg yujf yucgzc b', '2019-06-10 09:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `f_name`, `designation`, `gender`, `country`, `city`, `qualification`, `experience`, `description`, `picture`, `date`) VALUES
(1, 'Babar Azam', 'Azam Ali', 'Programming', 'Male', 'Pakistan', 'Lahore', 'Gradute', '3 Year', ' He is highly qualified in java programming language with more than 5 years of experience!', 'images/ffer.jpg', '2019-06-30 04:50:37'),
(3, 'Wahab Riaz', 'Riaz', 'Programming', 'Male', 'Pakistan', 'Faislabad', 'Matriculation', '2 Year', ' He is highly qualified in java programming language with more than 5 years of experience!', 'images/gg.jpg', '2019-06-30 04:56:00'),
(5, 'Imad waseem', 'Waseem Malik', 'Programming', 'Male', 'Pakistan', 'Lahore', 'Gradute', '3 Year', '    He is highly qualified in java programming language with more than 5 years of experience!', 'images/IMG-20190517-WA0000.jpg', '2019-06-30 06:36:21'),
(6, 'Zahid', 'NassRullah', 'Programming', 'Male', 'Pakistan', 'Sialkot', 'Matriculation', '2 Year', 'Havinuiasdiusuidfsuif', 'images/gg.jpg', '2019-07-04 14:49:34'),
(10, 'Zahid', 'Nass Rullah', 'Networking', 'Male', 'Pakistan', 'Multan', 'Matriculation', '2 Year', 'He is good in networking  c', 'images/ffer.jpg', '2019-07-04 15:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE `job_apply` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `experties` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(244) NOT NULL,
  `about_you` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `current_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `j_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_apply`
--

INSERT INTO `job_apply` (`id`, `name`, `father_name`, `email`, `address`, `gender`, `country`, `city`, `experties`, `qualification`, `experience`, `about_you`, `picture`, `resume`, `current_date`, `j_id`) VALUES
(63, 'maryam', ' fhusduiocfhsd', 'maryam@gmail.com', 'Gujranwala Pakistan', 'Female', 'Pakistan', 'Gujrat', 'Content Writer', 'Gradute', '2 Year', 'Experienced!', 'candidates/gg.jpg', 'candidates/Ayesha.docx', '2019-07-07 09:02:23', 1),
(64, 'farwa nasir', ' fhusduiocfhsd', 'farwa@gmail.com', 'DASKA', 'Female', 'Pakistan', 'Sialkot', 'Content Writer', 'Gradute', '1 Year', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'candidates/gg.jpg', 'candidates/Ayesha.docx', '2019-07-07 09:31:57', 2),
(65, 'chand', 'M.Aslam', 'ibrahim90@gmail.com', 'Multan dha punjab', 'Male', 'Pakistan', 'Sialkot', 'Graphics Designer', 'Gradute', '2 Year', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'candidates/ffer.jpg', 'candidates/ghg.docx', '2019-07-07 13:25:14', 10),
(66, 'chand', 'M.Aslam', 'ibrahim90@gmail.com', 'Gujranwala Pakistan', 'Male', 'Pakistan', 'Sialkot', 'Web Developer', 'Matriculation', '3 Year', 'Experienced!', 'candidates/candidate.png', 'candidates/ghg.docx', '2019-07-07 18:30:58', 16),
(67, 'chand', 'M.Aslam', 'ibrahim90@gmail.com', 'sialkot, head marala', 'Gender', 'Pakistan', 'Sialkot', 'Data Scientist', 'Matriculation', '1 Year', 'Wwell experienced!', 'candidates/3c5a764.jpg', 'candidates/Ayesha.docx', '2019-07-07 18:34:35', 15);

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `job_category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `last_date` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id`, `job_title`, `job_type`, `job_category`, `location`, `salary`, `gender`, `country`, `city`, `qualification`, `experience`, `last_date`, `message`, `file`, `post_date`) VALUES
(1, 'HR Manager', 'Full time', 'Restaurant / Food Service', 'Gujrat', '$200', 'Male', 'Pakistan', 'Sialkot', 'Matriculation', '3 Year', 'June-19-2019', '  ioas dfasiofhgjkh', 'images/gg.jpg', '2019-05-12 05:16:31'),
(12, 'Mathematician', 'Full time', 'Accounting / Finance', 'Gujrat', '400', 'Female', 'Pakistan', 'Gujrat', 'Gradute', '3 Year', '2011-11-15', 'we a highly experienced person in this foeld', 'images/gg.jpg', '2019-07-05 05:14:00'),
(13, 'n', 'Full time', 'Job Category', 'Karachi', '400', 'Male', 'Pakistan', 'Sialkot', 'Gradute', '2 Year', '11-14-2019', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'images/ffer.jpg', '2019-07-07 17:15:09'),
(14, 'n', 'Full time', 'Job Category', 'Karachi', '400', 'Male', 'Pakistan', 'Sialkot', 'Gradute', '2 Year', '11-14-2019', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'images/ffer.jpg', '2019-07-07 17:21:29'),
(15, 'n', 'Full time', 'Job Category', 'Karachi', '400', 'Male', 'Pakistan', 'Sialkot', 'Gradute', '2 Year', '11-14-2019', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'images/ffer.jpg', '2019-07-07 17:22:18'),
(16, 'Wdlc', 'Full time', 'Job Category', 'Karachi', '400', 'Female', 'Pakistan', 'Sialkot', 'Matriculation', '3 Year', '11-14-2019', 'uifhsdbuif sdi', 'images/Viral-Job-Post.jpg', '2019-07-07 18:25:26'),
(17, 'HR Manager', 'Full time', 'Job Category', 'Gujrat', '400', 'Gender', 'Pakistan', 'Sialkot', 'Qualification', 'Experience', '11-14-2019', 'usahd asui', 'images/Construction-Marketing-Jobs-After-Graduation.jpg', '2019-07-07 18:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `name`, `image`) VALUES
(0, 'akram', 'ilm'),
(1, 'akram', 'ilm'),
(0, 'about-slide3.jpg', 'uploads/about-slide3.jpg'),
(0, 'blog-post1.jpg', 'uploads/blog-post1.jpg'),
(0, 'blog-post1.jpg', 'uploads/blog-post1.jpg'),
(0, '', 'blog-post1.jpg'),
(0, 'akram', 'candidate2.jpg'),
(0, 'akram', 'candidate2.jpg'),
(0, 'akram', 'candidate2.jpg'),
(0, '', 'black-logo.png'),
(0, '', 'black-logo.png'),
(0, '', 'black-logo.png'),
(0, '', 'candidate-listing.jpg'),
(0, 'fff', 'gallery-2.1.jpg'),
(0, 'fff', 'gallery-2.1.jpg'),
(0, 'fff', 'gallery-2.1.jpg'),
(0, 'fff', 'gallery-2.1.jpg'),
(0, 'akram', 'black-logo.png'),
(0, 'nn', 'latest-blog1.jpg'),
(0, 'b', 'about-slide3.jpg'),
(0, 'b', 'uploads/about-slide3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testing1`
--

CREATE TABLE `testing1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing1`
--

INSERT INTO `testing1` (`id`, `name`, `image`) VALUES
(14, 'h', 'uploads/blog-post2.jpg'),
(15, 'akram', 'uploads/candidate.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `c_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `fullname`, `phone`, `email`, `address`, `gender`, `password`, `c_password`) VALUES
(2, 'chand', '34567890987654', 'ibrahim90@gmail.com', 'sialkot, head marala', 'Male', '123', ''),
(16, 'maryam', '12345678901', 'maryam@gmail.com', 'Gujranwala, Pakistan', 'Female', '123', '123'),
(17, 'farwa nasir', '12345678900', 'farwa@gmail.com', 'sialkot, daska', 'Female', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_resume`
--
ALTER TABLE `add_resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing1`
--
ALTER TABLE `testing1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_resume`
--
ALTER TABLE `add_resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `testing1`
--
ALTER TABLE `testing1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
