-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 05:45 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `grade` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class_teacher` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`grade`, `room`, `year`, `class_teacher`, `created_at`, `updated_at`) VALUES
('1', '1', '2017', '3883864246561', NULL, NULL),
('1', '2', '2017', '1624436366416', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_record`
--

CREATE TABLE `class_record` (
  `grade` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `created_at`, `updated_at`) VALUES
('11111', 'Math_is_MAGIC', NULL, NULL),
('19191', 'sleepless in every day life', NULL, NULL),
('55555', 'Beauty', '2017-11-08 13:56:22', '2017-11-08 13:56:22'),
('88888', 'Love Sleep', '2017-12-13 06:50:15', '2017-12-13 06:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `grade` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `day` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`grade`, `room`, `subject`, `day`, `period`, `place`, `created_at`, `updated_at`) VALUES
('1', '1', 'GG191', 3, 4, '211', NULL, NULL),
('1', '1', 'GG191', 3, 5, '211', NULL, NULL),
('1', '1', 'MA001', 1, 1, '311', NULL, NULL),
('1', '1', 'MA001', 3, 1, '311', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enterclub`
--

CREATE TABLE `enterclub` (
  `student_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `club` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enterclub`
--

INSERT INTO `enterclub` (`student_id`, `club`, `created_at`, `updated_at`) VALUES
('00001', '11111', NULL, NULL),
('00002', '19191', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_11_02_061200_create_clubs_table', 1),
(2, '2017_11_02_061300_create_students_table', 1),
(3, '2017_11_02_062000_create_officials_table', 1),
(4, '2017_11_02_063235_create_parents_table', 1),
(5, '2017_11_02_063313_create_subjects_table', 1),
(6, '2017_11_02_063348_create_classrooms_table', 1),
(7, '2017_11_02_063424_create_score_table', 1),
(8, '2017_11_02_063506_create_education_table', 1),
(9, '2017_11_02_063544_create_enterclub_table', 1),
(10, '2017_11_02_063645_create_ownparent_table', 1),
(11, '2017_11_02_063655_create_classrecord_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `ssn` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacherroom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `club` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`ssn`, `name`, `sex`, `address`, `teacherroom`, `club`, `user`, `password`, `created_at`, `updated_at`) VALUES
('1231231231231', 'ไอยา อิยา', 'ช', '1234 bvr hill', '555', '88888', '', '', '2017-12-13 07:00:16', '2017-12-13 07:00:16'),
('1624436366416', 'ด็อกเตอร์โมจิ สโรช', 'm', 'Donec pharetra tortor vitae', '191', '19191', 'mojimoji', '123123', NULL, NULL),
('3883864246561', 'เฟอร์นิเจอร์ วัคค์สป็อต', 'w', 'Mauris quis felis pretium posuere at sed magna', '301', '11111', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ownparent`
--

CREATE TABLE `ownparent` (
  `parent_ssn` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `relation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ownparent`
--

INSERT INTO `ownparent` (`parent_ssn`, `student_id`, `relation`, `created_at`, `updated_at`) VALUES
('1231311314041', '00001', 'Father', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `ssn` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`ssn`, `name`, `address`, `phone`, `created_at`, `updated_at`) VALUES
('1231311314041', 'สมดี ดีนิ', '444 hotel room', '01002020203', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `totalscore` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`score_id`, `student_id`, `year`, `subject`, `totalscore`, `created_at`, `updated_at`) VALUES
('0', '00001', '1', 'GG191', 51, NULL, '2017-12-14 04:34:23'),
('1', '00001', '1', 'MA001', 70, NULL, '2017-12-13 17:35:50'),
('2', '00001', '2', 'GG192', 90, NULL, '2017-12-13 17:33:23'),
('3', '00002', '1', 'MA001', 70, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ssn` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `club` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `behave_score` int(3) NOT NULL DEFAULT '100',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `ssn`, `name`, `sex`, `age`, `address`, `room`, `grade`, `club`, `behave_score`, `created_at`, `updated_at`) VALUES
('00001', '7868206013351', 'ภควัทคี ตาอุปสงค์', 'm', 11, 'Etiam vel neque in odio', '1', '3', '11111', 70, NULL, '2017-12-13 17:45:41'),
('00002', '2535381715261', 'ตู้เซฟ ซูเอี๋ย', 'm', 11, 'Aenean euismod lacus ut', '2', '1', '19191', 70, NULL, NULL),
('34562', '150520000000', 'หยอย อิ', 'ช', 12, 'ssssf', '4', '6', NULL, 100, '2017-11-21 08:42:47', '2017-12-13 12:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade` int(1) DEFAULT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sj_teacher` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `grade`, `time`, `sj_teacher`, `detail`, `created_at`, `updated_at`) VALUES
('11323', 'haha', NULL, '1300', '1624436366416', '1300', '2017-12-13 13:49:44', '2017-12-13 14:32:16'),
('GG191', 'Geometric1', 1, '11.00-12.00 4 dec 2017', '1624436366416', 'PASS:50% / A:80%\r\nMidterm:30% / Final:40%', NULL, NULL),
('GG192', 'Geometric2', 1, '11.00-12.00 4 dec 2018', '1624436366416', 'PASS:40% / A:70%\r\nMidterm:30% / Final:50% ', NULL, NULL),
('MA001', 'MATH101', 1, '8.00-9.00 1 dec 2017', '3883864246561', 'PASS:60% / A:90%\r\nMidterm:50% / Final:50%', NULL, NULL),
('PG444', 'Pray for Grade', 3, '09.00 - 11.00 08/12/2012', '3883864246561', 'Pass:40% / A:80%', NULL, NULL),
('SC202', 'Science for Life', 2, '16/11/2017', '1624436366416', 'Pass 30% : A 75%', '2017-11-09 06:35:15', '2017-11-09 06:43:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`grade`,`room`,`year`),
  ADD KEY `classrooms_class_teacher_foreign` (`class_teacher`);

--
-- Indexes for table `class_record`
--
ALTER TABLE `class_record`
  ADD PRIMARY KEY (`grade`,`room`,`year`,`student_id`),
  ADD KEY `class_record_student_id_foreign` (`student_id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`grade`,`room`,`subject`,`day`,`period`),
  ADD KEY `education_subject_foreign` (`subject`);

--
-- Indexes for table `enterclub`
--
ALTER TABLE `enterclub`
  ADD PRIMARY KEY (`student_id`,`club`),
  ADD KEY `enterclub_club_foreign` (`club`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`ssn`),
  ADD KEY `officials_club_foreign` (`club`);

--
-- Indexes for table `ownparent`
--
ALTER TABLE `ownparent`
  ADD PRIMARY KEY (`student_id`,`parent_ssn`),
  ADD KEY `ownparent_parent_ssn_foreign` (`parent_ssn`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`ssn`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`student_id`,`score_id`,`subject`) USING BTREE,
  ADD KEY `score_subject_foreign` (`subject`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club_students_fk1` (`club`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_sj_teacher_foreign` (`sj_teacher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD CONSTRAINT `classrooms_class_teacher_foreign` FOREIGN KEY (`class_teacher`) REFERENCES `officials` (`ssn`);

--
-- Constraints for table `class_record`
--
ALTER TABLE `class_record`
  ADD CONSTRAINT `class_record_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_subject_foreign` FOREIGN KEY (`subject`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `enterclub`
--
ALTER TABLE `enterclub`
  ADD CONSTRAINT `enterclub_club_foreign` FOREIGN KEY (`club`) REFERENCES `clubs` (`id`),
  ADD CONSTRAINT `enterclub_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `officials`
--
ALTER TABLE `officials`
  ADD CONSTRAINT `officials_club_foreign` FOREIGN KEY (`club`) REFERENCES `clubs` (`id`);

--
-- Constraints for table `ownparent`
--
ALTER TABLE `ownparent`
  ADD CONSTRAINT `ownparent_parent_ssn_foreign` FOREIGN KEY (`parent_ssn`) REFERENCES `parents` (`ssn`),
  ADD CONSTRAINT `ownparent_student_ssn_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `score_subject_foreign` FOREIGN KEY (`subject`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `club_students_fk1` FOREIGN KEY (`club`) REFERENCES `clubs` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_sj_teacher_foreign` FOREIGN KEY (`sj_teacher`) REFERENCES `officials` (`ssn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
