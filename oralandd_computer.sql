-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 07:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

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
  `Topic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID_student`, `Comment`, `Teacher_Name`, `Topic`, `level`) VALUES
('6111500143', '                          <h1><u>อันนี้ยังไม่ได้ใส่ไฟล์&nbsp;</u></h1><h1><u><br></u></h1>\r\n                        ', 'เอกพรรณ ธัญญาวินิชกุล', 'หุ่นยนต์ตอบคำถาม', 1),
('5555555', '                          <h1><u>sdasdasdasdasdasd</u></h1>\r\n                        ', 'เอกพรรณ ธัญญาวินิชกุล', 'asd', 3),
('6111500140', '                          <h1><u>แนะความคิดเห็นของอาจารย์</u></h1>\r\n                          <h4>แก่นักศึกษา</h4>\r\n                          <p>ข้อความตัวอย่าง ดั้งนี้</p>\r\n                          <ul>\r\n                            <li>แก้ไขคำนำ</li>\r\n                            <li>แก้ชื่อหัวข้อ</li>\r\n                            <li>ลดการใช้คำซ้ำ</li>\r\n                            <li>เขียนไม่วกไปวนมา</li>\r\n                          </ul>\r\n                          <p>ตัวอย่างโดย</p>\r\n                          <p>นักศึกษาเตรียมสหกิจ วิทยาการคอมพิวเตอร์</p>\r\n                        ', 'ชัยศิริ สนิทพลกลาง', 'อิอิ', 3);

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
('6111500143', '19-06-2021 ถึง 21-07-2021', 'กิจกรรมที่ (3)'),
('6111500143', '19-06-2021 ถึง 21-07-2021', 'กิจกรรมที่ (3)'),
('6111500143', '19-06-2021 ถึง 21-07-2021', 'กิจกรรมที่ (3)'),
('', '14-05-2021 ถึง 22-06-2021', 'ก'),
('6111502719', '13-05-2021 ถึง 15-06-2021', 'รวบรวมข้อมูล'),
('5555555', '06/05/2564', 'asd'),
('6111500140', '01-07-2021 ถึง 25-08-2021', 'รวบรวม');

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
-- Table structure for table `end_final`
--

CREATE TABLE `end_final` (
  `id_student` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `final` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster_final` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `end_final`
--

INSERT INTO `end_final` (`id_student`, `final`, `poster_final`, `teacher`) VALUES
('6111500140', '48488-ใบงานเก็บคะแนน.pdf', '11079-ใบงานเก็บคะแนน.pdf', 'อาจารย์ชัยศิริ สนิทพลกลาง'),
('6111500143', '32324-ศุภณัฐ_บินราบ_6111500143.pdf', '90861-form.png', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id_student` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_topic` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `president_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id_student`, `exam_topic`, `date`, `teacher_name`, `director_name`, `president_name`, `status`) VALUES
('6111500143', '25470-ศุภณัฐ_ชินราช_6111500143.pdf', '20/07/2564', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์ ดร.ภาคภูมิ มุกดาสนิท', 'ผู้ช่วยศาสตราจารย์ ดร.จันทรรัตน์ กิ่งแสง', 'อนุมัติ'),
('6111502719', '30176-แบบฝึกหัดท้ายบทที่-4.pdf', '05/05/2564', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์ ดร.จันทรรัตน์ กิ่งแสง', 'อนุมัติ'),
('5555555', '88349-เอกสารการติว-ม.3part-2.pdf', '05/05/2564', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์ ดร.จันทรรัตน์ กิ่งแสง', 'อนุมัติ'),
('6111500140', '12701-แผนผังงาน.docx', '31/08/2564', 'อาจารย์ชัยศิริ สนิทพลกลาง', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์ ดร.จันทรรัตน์ กิ่งแสง', 'อนุมัติ');

-- --------------------------------------------------------

--
-- Table structure for table `exam_progress`
--

CREATE TABLE `exam_progress` (
  `id_student` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress_exam` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `president_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_progress`
--

INSERT INTO `exam_progress` (`id_student`, `progress_exam`, `date`, `teacher_name`, `director_name`, `president_name`, `status`) VALUES
('6111500143', '89022-expert-system.pdf', '12/05/2564', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์ ดร.ภาคภูมิ มุกดาสนิท', 'ผู้ช่วยศาสตราจารย์ ดร.จันทรรัตน์ กิ่งแสง', 'อนุมัติแล้ว'),
('6111502719', '2993-บทที่-1.pdf', '04/05/2564', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์ ดร.จันทรรัตน์ กิ่งแสง', 'อนุมัติแล้ว'),
('5555555', '61294-เอกสารการติว-ม.3part-2.pdf', '26/05/2564', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์ ดร.จันทรรัตน์ กิ่งแสง', 'ยื่นสอบก้าวหน้าครั้งที่ 2'),
('6111500140', '14138-ใบงานเก็บคะแนน.docx', '', 'อาจารย์ชัยศิริ สนิทพลกลาง', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์ ดร.จันทรรัตน์ กิ่งแสง', 'ยื่นสอบก้าวหน้าครั้งที่ 2');

-- --------------------------------------------------------

--
-- Table structure for table `exam_progress2`
--

CREATE TABLE `exam_progress2` (
  `id_student` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress_exam` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `president_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_progress2`
--

INSERT INTO `exam_progress2` (`id_student`, `progress_exam`, `date`, `teacher_name`, `director_name`, `president_name`, `status`) VALUES
('5555555', '37647-เอกสารการติว-ม.3part-2.pdf', '19/05/2564', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์ ดร.จันทรรัตน์ กิ่งแสง', 'อนุมัติแล้ว'),
('6111500140', '22191-งานครั้งที่-10.pdf', '', 'อาจารย์ชัยศิริ สนิทพลกลาง', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ผู้ช่วยศาสตราจารย์ ดร.จันทรรัตน์ กิ่งแสง', 'อนุมัติแล้ว');

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
('', 'รอที่ปรึกษาอนุมัติ', 1),
('5555555', 'กำลังดำเนินการส่งเล่มวิจัย', 5),
('6111500140', 'เล่มวิจัยเเละโปรเจคเสร็จสิ้น', 6),
('6111500143', 'เล่มวิจัยเเละโปรเจคเสร็จสิ้น', 6),
('6111502719', 'กำลังดำเนินการส่งเล่มวิจัย', 5);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
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
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`date`, `id_student`, `Name_teacher`, `NameProjectTH`, `NameProjectEng`, `importance`, `objective`, `Principle`, `plan_work`, `limit_work`, `benefit`, `vocabulary`) VALUES
('วันที่ 12 เดือน พฤษภาคม พ.ศ. 2564', '6111500143', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'หุ่นยนต์ตอบคำถาม (แก้ไข)', 'Robot test', '     ทดสอบย่อหน้าาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาา\r\n1. ทดสอบข้อ\r\n2. ทดสอบข้อ\r\n3. ทดสอบข้อ\r\n     ย่อหน้าที่ 2', '     ทดสอบย่อหน้าาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาา\r\n1. ทดสอบข้อ\r\n2. ทดสอบข้อ\r\n3. ทดสอบข้อ\r\n     ย่อหน้าที่ 2', '     ทดสอบย่อหน้าาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาา\r\n1. ทดสอบข้อ\r\n2. ทดสอบข้อ\r\n3. ทดสอบข้อ\r\n     ย่อหน้าที่ 2', 'กิจกรรมที่ (3)   กิจกรรมที่ (3) ', 'กิจกรรมที่ (3)  กิจกรรมที่ (3)\r\nกิจกรรมที่ (3)\r\nกิจกรรมที่ (3) ', 'กิจกรรมที่ (3) กิจกรรมที่ (3) กิจกรรมที่ (3)', 'กิจกรรมที่ (3) กิจกรรมที่ (3)'),
('วันที่ 12 เดือน พฤษภาคม พ.ศ. 2564', '', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ฟห', 'ก', 'ก', 'ก', 'ก', 'ก', 'ก', 'ก', 'ก'),
('วันที่ 12 เดือน พฤษภาคม พ.ศ. 2564', '6111502719', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ก', 'ก', 'ก', 'ก', 'ก', 'ก', 'ก', 'ก', 'ก'),
('วันที่ 17 เดือน พฤษภาคม พ.ศ. 2564', '5555555', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'asd', 'asd', 'asd', 'asd', 'ads', 'asd', 'asd', 'asd', 'asd'),
('วันที่ 17 เดือน พฤษภาคม พ.ศ. 2564', '6111500140', 'อาจารย์ชัยศิริ สนิทพลกลาง', 'อิอิ', 'hmgfnjm', 'หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก', 'หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก', 'หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก', 'หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก', 'หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก', '1.หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก\r\n2.หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก\r\n3.หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก\r\n4.หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก', '1.หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก\r\n2.หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก\r\n3.หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก\r\n4.หอุอิดิ้ะ่ีั่่่่่่่เพพพพพพพพพพพพพพพพพพพพพพพพดดกกกกกกกกก');

-- --------------------------------------------------------

--
-- Table structure for table `topic_status`
--

CREATE TABLE `topic_status` (
  `id_student` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Name_teacher` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Round_Edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topic_status`
--

INSERT INTO `topic_status` (`id_student`, `Name_teacher`, `Status`, `Round_Edit`) VALUES
('6111500143', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'อนุมัติแล้ว', 1),
('', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'ยังไม่อนุมัติ', 0),
('6111502719', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'อนุมัติแล้ว', 0),
('5555555', 'ผู้ช่วยศาสตราจารย์เอกพรรณ ธัญญาวินิชกุล', 'อนุมัติแล้ว', 0),
('6111500140', 'อาจารย์ชัยศิริ สนิทพลกลาง', 'อนุมัติแล้ว', 0);

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
-- Indexes for table `end_final`
--
ALTER TABLE `end_final`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_student`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
