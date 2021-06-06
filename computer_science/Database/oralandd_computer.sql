-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2021 at 12:53 AM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oralandd_computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID_student` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Comment` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Teacher_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Topic` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `date_event`
--

CREATE TABLE `date_event` (
  `id_student` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Ativity` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `date_event`
--

INSERT INTO `date_event` (`id_student`, `Date`, `Ativity`) VALUES
('6111504327', '11-05-2021 ถึง 13-05-2021', 'เสนอหัวข้อ'),
('6111502677', '27-04-2021 ถึง 26-05-2021', 'าส้ส'),
('6111502677', '01-05-2021 ถึง 01-06-2021', '้สวีสสส');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `id_student` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Director_1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Director_2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Director_3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id_student` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_picker` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sername` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `namelastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idpass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `midterm` int(100) NOT NULL,
  `year` int(100) NOT NULL,
  `team` int(100) NOT NULL,
  `number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Doc_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Round_edit` int(11) NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_log`
--

CREATE TABLE `exam_log` (
  `date_edit` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_picker` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sername` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `namelastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idpass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `midterm` int(100) NOT NULL,
  `year` int(100) NOT NULL,
  `team` int(100) NOT NULL,
  `number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Doc_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Round_edit` int(11) NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Filetopic`
--

CREATE TABLE `Filetopic` (
  `ID_student` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `File` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Rounds` int(11) NOT NULL,
  `date_picker` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_student` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_student`, `Status`, `Level`) VALUES
('6111502677', 'ยังไม่ดำเนินการสอบเสนอหัวข้อ', 2),
('6111504327', 'รอที่ปรึกษาอนุมัติ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Topic`
--

CREATE TABLE `Topic` (
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_student` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Name_teacher` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NameProjectTH` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NameProjectEng` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `importance` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `objective` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Principle` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `plan_work` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `limit_work` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `benefit` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `vocabulary` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Topic`
--

INSERT INTO `Topic` (`date`, `id_student`, `Name_teacher`, `NameProjectTH`, `NameProjectEng`, `importance`, `objective`, `Principle`, `plan_work`, `limit_work`, `benefit`, `vocabulary`) VALUES
('วันที่ 07 เดือน พฤษภาคม พ.ศ. 2564', '6111504327', 'ผู้ช่วยศาสตราจารย์ ดร.ภาคภูมิ มุกดาสนิท', 'ระบบการจัดการวิจัยสาขาวิทยาการคอมพิวเตอร์', 'Research Management System Of Computer Science', 'ะบบการจัดการวิจัยส        าขาวิทยาการคอมพิวเตอร์', 'ะบบการจัดการวิจัยส        าขาวิทยาการคอมพิวเตอร์', 'ะบบการจัดการวิจัยส        าขาวิทยาการคอมพิวเตอร์', 'ะบบการจัดการวิจัยส        าขาวิทยาการคอมพิวเตอร์', 'ะบบการจัดการวิจัยส        าขาวิทยาการคอมพิวเตอร์', 'ะบบการจัดการวิจัยส        าขาวิทยาการคอมพิวเตอร์', 'ะบบการจัดการวิจัยส        าขาวิทยาการคอมพิวเตอร์'),
('วันที่ 07 เดือน พฤษภาคม พ.ศ. 2564', '6111502677', 'ผู้ช่วยศาสตราจารย์ ดร.จันทรรัตน์ กิ่งแสง', 'ๆไดได', 'cZc', 'หเห', 'เหเห', 'เาเ\r\n\r\nยี่นยี่\r\nาว่ว\r\n     แื้ดแ้่กแ้่แ   เ่ด่ทอด', '่ดดพ', '่ดดดด', '่่่่\r\nั้ี่เ\r\n่าเอาเอา\r\n1สืื\r\n2งวทาวงทา', 'าิ้ิิ');

-- --------------------------------------------------------

--
-- Table structure for table `Topic_status`
--

CREATE TABLE `Topic_status` (
  `id_student` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Name_teacher` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Round_Edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Topic_status`
--

INSERT INTO `Topic_status` (`id_student`, `Name_teacher`, `Status`, `Round_Edit`) VALUES
('6111504327', 'ผู้ช่วยศาสตราจารย์ ดร.ภาคภูมิ มุกดาสนิท', 'ยังไม่อนุมัติ', 0),
('6111502677', 'ผู้ช่วยศาสตราจารย์ ดร.จันทรรัตน์ กิ่งแสง', 'อนุมัติแล้ว', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`idpass`);

--
-- Indexes for table `exam_log`
--
ALTER TABLE `exam_log`
  ADD PRIMARY KEY (`idpass`);

--
-- Indexes for table `Filetopic`
--
ALTER TABLE `Filetopic`
  ADD PRIMARY KEY (`ID_student`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_student`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
