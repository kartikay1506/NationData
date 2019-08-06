-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 05:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhrd`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrative_area`
--

CREATE TABLE `administrative_area` (
  `id` int(10) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `area_of_room` varchar(100) NOT NULL,
  `building_name` varchar(50) NOT NULL,
  `building_number` varchar(100) NOT NULL,
  `readiness_of_flooring` varchar(50) NOT NULL,
  `readiness_of_wall` varchar(50) NOT NULL,
  `readiness_of_electricity` varchar(50) NOT NULL,
  `readiness_of_furniture` varchar(50) NOT NULL,
  `air_conditioning` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrative_area`
--

INSERT INTO `administrative_area` (`id`, `room_type`, `room_name`, `area_of_room`, `building_name`, `building_number`, `readiness_of_flooring`, `readiness_of_wall`, `readiness_of_electricity`, `readiness_of_furniture`, `air_conditioning`) VALUES
(1, '', 'a', '0', 'a', '0', 'a', 'a', 'a', 'a', 'a'),
(2, '', 'b', '0', 'b', '0', 'b', 'b', 'b', 'b', 'b'),
(3, '', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(4, '', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(5, '', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b'),
(6, '', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c'),
(7, '', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x');

-- --------------------------------------------------------

--
-- Table structure for table `aicte_cii_survey`
--

CREATE TABLE `aicte_cii_survey` (
  `id` int(10) NOT NULL,
  `q1` varchar(50) NOT NULL,
  `q1a` varchar(50) NOT NULL,
  `q2` varchar(50) NOT NULL,
  `q2a` varchar(50) NOT NULL,
  `q2b` varchar(50) NOT NULL,
  `q3` varchar(50) NOT NULL,
  `q3a` varchar(50) NOT NULL,
  `q4` varchar(50) NOT NULL,
  `q5` varchar(50) NOT NULL,
  `q5a` varchar(50) NOT NULL,
  `q6` varchar(50) NOT NULL,
  `q7` varchar(50) NOT NULL,
  `q8` varchar(50) NOT NULL,
  `q8a` varchar(50) NOT NULL,
  `q9` varchar(50) NOT NULL,
  `q9a` varchar(50) NOT NULL,
  `q10` varchar(50) NOT NULL,
  `q10a` varchar(50) NOT NULL,
  `q11` varchar(50) NOT NULL,
  `q12` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `amenities_area`
--

CREATE TABLE `amenities_area` (
  `id` int(10) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `area_of_room` varchar(100) NOT NULL,
  `building_name` varchar(50) NOT NULL,
  `building_number` varchar(100) NOT NULL,
  `readiness_of_flooring` varchar(50) NOT NULL,
  `readiness_of_wall` varchar(50) NOT NULL,
  `readiness_of_electricity` varchar(50) NOT NULL,
  `readiness_of_furniture` varchar(50) NOT NULL,
  `air_conditioning` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities_area`
--

INSERT INTO `amenities_area` (`id`, `room_type`, `room_name`, `area_of_room`, `building_name`, `building_number`, `readiness_of_flooring`, `readiness_of_wall`, `readiness_of_electricity`, `readiness_of_furniture`, `air_conditioning`) VALUES
(1, '', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(2, '', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `building_details`
--

CREATE TABLE `building_details` (
  `id` int(10) NOT NULL,
  `building_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `built_up_area_planned` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `built_up_area_ready` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `activities` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `carpet_area_instructional` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `carpet_area_administrative` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `carpet_area_amenities` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `toilet_area` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access_circulation_area` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access_circulation_area_norms` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `circulation_area`
--

CREATE TABLE `circulation_area` (
  `id` int(10) NOT NULL,
  `area_type` varchar(50) NOT NULL,
  `average_carpet_area` varchar(50) NOT NULL,
  `flooring` varchar(50) NOT NULL,
  `painting_done` varchar(50) NOT NULL,
  `sanitary_fitting_done` varchar(50) NOT NULL,
  `electrification_lightning` varchar(50) NOT NULL,
  `furniture` varchar(50) NOT NULL,
  `building_name` varchar(50) NOT NULL,
  `building_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `circulation_area`
--

INSERT INTO `circulation_area` (`id`, `area_type`, `average_carpet_area`, `flooring`, `painting_done`, `sanitary_fitting_done`, `electrification_lightning`, `furniture`, `building_name`, `building_number`) VALUES
(1, 'a', 'a', 'a', 'yes', 'yes', 'a', 'a', 'a', 'a'),
(2, 'b', 'b', 'b', 'yes', 'yes', 'bb', 'b', 'b', 'b'),
(3, 'n', 'n', 'n', 'no', 'no', 'n', 'n', 'n', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `computational_faculty`
--

CREATE TABLE `computational_faculty` (
  `pc_exclusively_student` varchar(50) NOT NULL,
  `pc_available_library` varchar(50) NOT NULL,
  `pc_available_administrativeoffice` varchar(50) NOT NULL,
  `pc_available_faculty` varchar(50) NOT NULL,
  `pc_for_language_lab` varchar(50) NOT NULL,
  `internet_bandwidth` varchar(50) NOT NULL,
  `internett_contention_ratio` varchar(50) NOT NULL,
  `printer_available_student` varchar(50) NOT NULL,
  `no_of_legal_system` varchar(50) NOT NULL,
  `no_of_legal_application` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `id` int(10) NOT NULL,
  `affilating_university` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `full_part_time` varchar(10) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `accreditation_form` varchar(100) NOT NULL,
  `accreditation_type` varchar(20) NOT NULL,
  `accreditation_letter_date` varchar(10) NOT NULL,
  `accreditation_ref_no` varchar(20) NOT NULL,
  `accreditation_till` varchar(20) NOT NULL,
  `nri` varchar(50) NOT NULL,
  `pio` varchar(50) NOT NULL,
  `applying_for` varchar(50) NOT NULL,
  `number_of_division` varchar(20) NOT NULL,
  `university_board_recommendation` varchar(50) NOT NULL,
  `state_recommendation` varchar(50) NOT NULL,
  `annual_fees_approved` varchar(10) NOT NULL,
  `number_of_faculty` varchar(10) NOT NULL,
  `mode_of_conduct` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `details_national_level_program`
--

CREATE TABLE `details_national_level_program` (
  `id` int(10) NOT NULL,
  `national_event_name` varchar(50) NOT NULL,
  `faculty_involved` varchar(50) NOT NULL,
  `students_involved` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `information_collected_institution_innovation_cell`
--

CREATE TABLE `information_collected_institution_innovation_cell` (
  `id` int(10) NOT NULL,
  `institute_name` varchar(50) NOT NULL,
  `institute_type` varchar(50) NOT NULL,
  `aicte_approved` varchar(50) NOT NULL,
  `head_name` varchar(50) NOT NULL,
  `head_email_id` varchar(50) NOT NULL,
  `head_phone_no` varchar(50) NOT NULL,
  `institute_city` varchar(50) NOT NULL,
  `institute_state` varchar(50) NOT NULL,
  `institute_address` varchar(50) NOT NULL,
  `institutes_facilities` varchar(50) NOT NULL,
  `ranking_details` varchar(50) NOT NULL,
  `total_students` varchar(50) NOT NULL,
  `total_faculties` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `social_media_details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `information_collected_startups`
--

CREATE TABLE `information_collected_startups` (
  `id` int(10) NOT NULL,
  `institute_name` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `internship_policy` varchar(50) NOT NULL,
  `teacher_training` varchar(50) NOT NULL,
  `institution_industry_cell` varchar(50) NOT NULL,
  `fabrication_facility` varchar(50) NOT NULL,
  `intellactual_property` varchar(50) NOT NULL,
  `startup_policy` varchar(50) NOT NULL,
  `innovation_cell_club` varchar(50) NOT NULL,
  `national_innovation` varchar(50) NOT NULL,
  `nba_accreditation_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `information_mous_industry`
--

CREATE TABLE `information_mous_industry` (
  `id` int(10) NOT NULL,
  `industry_first_name` varchar(50) NOT NULL,
  `industry_contact_no` varchar(50) NOT NULL,
  `industry_email_id` varchar(50) NOT NULL,
  `industry_second_name` varchar(50) NOT NULL,
  `industry_contact_no_second` varchar(50) NOT NULL,
  `industry_email_id_second` varchar(50) NOT NULL,
  `industry_third_name` varchar(50) NOT NULL,
  `industry_contact_no_third` varchar(50) NOT NULL,
  `industry_email_id_third` varchar(50) NOT NULL,
  `industry_fourth_name` varchar(50) NOT NULL,
  `industry_contact_no_fourth` varchar(50) NOT NULL,
  `industry_email_id_fourth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instructional_area`
--

CREATE TABLE `instructional_area` (
  `id` int(10) NOT NULL,
  `program` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `area_of_room` varchar(50) NOT NULL,
  `building_name` varchar(50) NOT NULL,
  `building_no` varchar(50) NOT NULL,
  `readiness_of_flooring` varchar(50) NOT NULL,
  `readiness_of_wall` varchar(50) NOT NULL,
  `readiness_of_electrification` varchar(50) NOT NULL,
  `readiness_of_furniture` varchar(50) NOT NULL,
  `air_conditioning` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructional_area`
--

INSERT INTO `instructional_area` (`id`, `program`, `level`, `room_type`, `room_name`, `area_of_room`, `building_name`, `building_no`, `readiness_of_flooring`, `readiness_of_wall`, `readiness_of_electrification`, `readiness_of_furniture`, `air_conditioning`) VALUES
(1, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(2, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b'),
(3, 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `instruction_common_facilities`
--

CREATE TABLE `instruction_common_facilities` (
  `room_type` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `area_of_room` int(11) NOT NULL,
  `readiness_of_flooring` varchar(50) NOT NULL,
  `readiness_of_wall` varchar(50) NOT NULL,
  `readiness_of_electrification` varchar(50) NOT NULL,
  `readiness_of_furniture` varchar(50) NOT NULL,
  `air_conditioning` varchar(50) NOT NULL,
  `building_name` varchar(50) NOT NULL,
  `building_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_details`
--

CREATE TABLE `laboratory_details` (
  `id` int(10) NOT NULL,
  `program` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year_budget_equip` varchar(50) NOT NULL,
  `year_budget_consumable` varchar(50) NOT NULL,
  `is_researchlab_pg` varchar(50) NOT NULL,
  `name_laboratory` varchar(50) NOT NULL,
  `lab_major_equipment` varchar(50) NOT NULL,
  `investment_till_date` varchar(50) NOT NULL,
  `building_name` varchar(50) NOT NULL,
  `building_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratory_details`
--

INSERT INTO `laboratory_details` (`id`, `program`, `level`, `course`, `year_budget_equip`, `year_budget_consumable`, `is_researchlab_pg`, `name_laboratory`, `lab_major_equipment`, `investment_till_date`, `building_name`, `building_number`) VALUES
(1, '', '', '', '', '', 'yes', '', '', '', '', ''),
(2, 'a', 'a', 'a', 'a', 'a', 'yes', 'a', 'a', 'a', 'a', 'a'),
(3, 'n', 'n', 'n', 'n', 'n', 'no', 'n', 'n', 'n', 'n', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `land_details`
--

CREATE TABLE `land_details` (
  `id` int(10) NOT NULL,
  `land_registered_with` varchar(30) NOT NULL,
  `date_of_registration` varchar(10) NOT NULL,
  `land_in_hilly_area` varchar(15) NOT NULL,
  `FSI` varchar(30) NOT NULL,
  `number_of_pieces` varchar(10) NOT NULL,
  `land_pieces_area1` varchar(10) NOT NULL,
  `land_pieces_area2` varchar(10) NOT NULL,
  `land_pieces_area3` varchar(10) NOT NULL,
  `max_distance` varchar(10) NOT NULL,
  `latitude_direction` varchar(10) NOT NULL,
  `latitude_degree` varchar(10) NOT NULL,
  `latitude_minute` varchar(10) NOT NULL,
  `latitude_second` varchar(10) NOT NULL,
  `longitude_direction` varchar(10) NOT NULL,
  `longitude_degree` varchar(10) NOT NULL,
  `longitude_minute` varchar(10) NOT NULL,
  `longitude_second` varchar(10) NOT NULL,
  `ownership_details` varchar(100) NOT NULL,
  `is_land_mortagaged` varchar(10) NOT NULL,
  `mortgaged_purpose` varchar(100) NOT NULL,
  `instittute_going_campus_merger` varchar(10) NOT NULL,
  `land_certified_issue_by` varchar(30) NOT NULL,
  `land_certified_issue_date` varchar(10) NOT NULL,
  `additional_land_for_merger` varchar(20) NOT NULL,
  `total_land_after_merger` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `land_details`
--

INSERT INTO `land_details` (`id`, `land_registered_with`, `date_of_registration`, `land_in_hilly_area`, `FSI`, `number_of_pieces`, `land_pieces_area1`, `land_pieces_area2`, `land_pieces_area3`, `max_distance`, `latitude_direction`, `latitude_degree`, `latitude_minute`, `latitude_second`, `longitude_direction`, `longitude_degree`, `longitude_minute`, `longitude_second`, `ownership_details`, `is_land_mortagaged`, `mortgaged_purpose`, `instittute_going_campus_merger`, `land_certified_issue_by`, `land_certified_issue_date`, `additional_land_for_merger`, `total_land_after_merger`) VALUES
(1, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '', 'a', 'a', 'aa', 'a', 'a', 'a', 'a', 'no', 'aa', 'no', 'a', 'a', 'no', 'a'),
(2, 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', '', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'no', 'f', 'no', 'f', 'f', 'no', 'f'),
(3, '', '', '', '', '', '', '', '', '', 'aaaaa', '', '', '', '', '', '', '', '', 'no', '', 'no', '', '', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `land_details_per_registration`
--

CREATE TABLE `land_details_per_registration` (
  `id` int(10) NOT NULL,
  `land_registered_no` varchar(20) NOT NULL,
  `date_of_registration` varchar(10) NOT NULL,
  `area_land` varchar(30) NOT NULL,
  `khasra_no` varchar(20) NOT NULL,
  `plot_no` varchar(20) NOT NULL,
  `land_situated_at` varchar(30) NOT NULL,
  `land_register_name` varchar(50) NOT NULL,
  `ownership_govlease` varchar(10) NOT NULL,
  `land_certified_issue` varchar(20) NOT NULL,
  `land_certified_issue_authority` varchar(100) NOT NULL,
  `is_land_mortgaged` varchar(10) NOT NULL,
  `details_of_bank` varchar(100) NOT NULL,
  `land_required_aicte_approval` varchar(50) NOT NULL,
  `land_available_1st_approval` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `land_details_per_registration`
--

INSERT INTO `land_details_per_registration` (`id`, `land_registered_no`, `date_of_registration`, `area_land`, `khasra_no`, `plot_no`, `land_situated_at`, `land_register_name`, `ownership_govlease`, `land_certified_issue`, `land_certified_issue_authority`, `is_land_mortgaged`, `details_of_bank`, `land_required_aicte_approval`, `land_available_1st_approval`) VALUES
(1, '', '', '', '', 'x', 'x', 'x', 'x', 'x', 'x', 'no', 'x', 'x', 'x'),
(2, 'c', 'c', 'cc', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'no', 'c', 'c', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(10) NOT NULL,
  `login_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `login_type`, `email`, `username`, `password`) VALUES
(1, '', '', 'admin', 'admin'),
(2, '', '', 'geu', 'geu'),
(3, 'nodal_officer', '', 'mike', 'mike');

-- --------------------------------------------------------

--
-- Table structure for table `organisation_details`
--

CREATE TABLE `organisation_details` (
  `id` varchar(20) NOT NULL,
  `tsc` varchar(20) NOT NULL,
  `registration_no` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `land_phone_no` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(20) NOT NULL,
  `fax_no` varchar(30) NOT NULL,
  `registered_with` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pin_no` varchar(10) NOT NULL,
  `website` varchar(20) NOT NULL,
  `registration_date` varchar(10) NOT NULL,
  `land_phone_std_code` varchar(15) NOT NULL,
  `trustee_details` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  `email_id` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_details`
--

INSERT INTO `organisation_details` (`id`, `tsc`, `registration_no`, `state`, `land_phone_no`, `type`, `address`, `district`, `fax_no`, `registered_with`, `city`, `pin_no`, `website`, `registration_date`, `land_phone_std_code`, `trustee_details`, `year`, `email_id`) VALUES
('', '', '', 'SELECT STATE', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pg_scholarship`
--

CREATE TABLE `pg_scholarship` (
  `id` int(10) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `First_Name` varchar(100) DEFAULT NULL,
  `Middle_Name` varchar(100) DEFAULT NULL,
  `Last_Name` varchar(100) DEFAULT NULL,
  `Year1` varchar(100) DEFAULT NULL,
  `Year2` varchar(100) DEFAULT NULL,
  `Year3` varchar(100) DEFAULT NULL,
  `Year4` varchar(100) DEFAULT NULL,
  `Year5` varchar(100) DEFAULT NULL,
  `Mother_Name` varchar(100) DEFAULT NULL,
  `Father_Name` varchar(100) DEFAULT NULL,
  `Res_Phone` varchar(100) DEFAULT NULL,
  `Mobile_Number` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Date_of_Birth` varchar(100) DEFAULT NULL,
  `Student_Status` varchar(100) DEFAULT NULL,
  `Course` varchar(100) DEFAULT NULL,
  `Course_Id` varchar(100) DEFAULT NULL,
  `Program` varchar(100) DEFAULT NULL,
  `Shift` varchar(100) DEFAULT NULL,
  `Level` varchar(100) DEFAULT NULL,
  `Full_Time_Part_Time` varchar(100) DEFAULT NULL,
  `Admission_Type` varchar(100) DEFAULT NULL,
  `Left_the_Course` varchar(100) DEFAULT NULL,
  `Date_of_Admission` varchar(100) DEFAULT NULL,
  `Academic_Year` varchar(100) DEFAULT NULL,
  `Left_the_Course_Date` varchar(100) DEFAULT NULL,
  `Roll_Number` varchar(100) DEFAULT NULL,
  `Record_Created` varchar(100) DEFAULT NULL,
  `Email_Address` varchar(100) DEFAULT NULL,
  `Alternate_e_mail_address` varchar(100) DEFAULT NULL,
  `Admitted_under` varchar(100) DEFAULT NULL,
  `Religion` varchar(100) DEFAULT NULL,
  `Category_as_per_Caste_Validity_Certificate` varchar(100) DEFAULT NULL,
  `Reserve_Category` varchar(100) DEFAULT NULL,
  `Is_Physically_handicapped` varchar(100) DEFAULT NULL,
  `Econ_Backward` varchar(100) DEFAULT NULL,
  `Home_Hostel` varchar(100) DEFAULT NULL,
  `Institute_Fees_Paid` varchar(100) DEFAULT NULL,
  `Hostel_Fees_Month` varchar(100) DEFAULT NULL,
  `Is_Duplicate` varchar(100) DEFAULT NULL,
  `Disclaimer` varchar(100) DEFAULT NULL,
  `Exam_Type` varchar(100) DEFAULT NULL,
  `GATE_GPAT_Score` varchar(100) DEFAULT NULL,
  `GATE_GPAT_Exam_Number` varchar(100) DEFAULT NULL,
  `GATE_GPAT_Score_Year_Valid_From` varchar(100) DEFAULT NULL,
  `GATE_GPAT_Score_Year_Valid_To` varchar(100) DEFAULT NULL,
  `Category_as_per_GATE_GPAT_score_card` varchar(100) DEFAULT NULL,
  `GATE_Examination_Paper` varchar(100) DEFAULT NULL,
  `Marks_Obtanied` varchar(100) DEFAULT NULL,
  `Marks_Out_of_100` varchar(100) DEFAULT NULL,
  `Qualifying_Marks` varchar(100) DEFAULT NULL,
  `Do_you_have_an_Aadhar_Card` varchar(100) DEFAULT NULL,
  `Aadhar_ID` varchar(100) DEFAULT NULL,
  `Do_you_have_National_Population_Register_card` varchar(100) DEFAULT NULL,
  `NPR_Card_Number` varchar(100) DEFAULT NULL,
  `Claimed_Upto_Month` varchar(100) DEFAULT NULL,
  `Claimed_Upto_Year` varchar(100) DEFAULT NULL,
  `Paid_Upto_Month` varchar(100) DEFAULT NULL,
  `Paid_Upto_Year` varchar(100) DEFAULT NULL,
  `Enrolment_Id` varchar(100) DEFAULT NULL,
  `Permanent_Address_line1` varchar(100) DEFAULT NULL,
  `Permanent_Address_line2` varchar(100) DEFAULT NULL,
  `Permanent_Address_line3` varchar(100) DEFAULT NULL,
  `Home_State_of_the_student` varchar(100) DEFAULT NULL,
  `Home_District_of_the_student` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `Pincode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pmsss_scholarship_scheme`
--

CREATE TABLE `pmsss_scholarship_scheme` (
  `id` int(10) NOT NULL,
  `candidate_id` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_mobile_no` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `caste_category` varchar(50) NOT NULL,
  `counselling_year` varchar(50) NOT NULL,
  `mode_of_admission` varchar(50) NOT NULL,
  `application_status` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `current_semister` varchar(50) NOT NULL,
  `dbt_application_status` varchar(50) NOT NULL,
  `iseligible_dbt` varchar(50) NOT NULL,
  `joining_status` varchar(50) NOT NULL,
  `bank_status` varchar(50) NOT NULL,
  `aadhar_status` varchar(50) NOT NULL,
  `student_payment_status` varchar(50) NOT NULL,
  `institute_status` varchar(50) NOT NULL,
  `beneficiary_code` varchar(50) NOT NULL,
  `vendor_code` varchar(50) NOT NULL,
  `college_id` varchar(50) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `mentor_name` varchar(50) NOT NULL,
  `mentor_mobile_no` varchar(50) NOT NULL,
  `mentor_email` varchar(50) NOT NULL,
  `nba_accrediated` varchar(50) NOT NULL,
  `particated_in_nrf` varchar(50) NOT NULL,
  `naac_accrediated` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pragathi_saksham_scholarship`
--

CREATE TABLE `pragathi_saksham_scholarship` (
  `id` int(10) NOT NULL,
  `studentUniqueId` varchar(50) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `studentName` varchar(100) DEFAULT NULL,
  `schemeAppliedFor` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `dateOfBirth` varchar(100) DEFAULT NULL,
  `placeOfBirth` varchar(100) DEFAULT NULL,
  `isDifferentlyAbled` varchar(100) DEFAULT NULL,
  `percentageOfDisability` varchar(100) DEFAULT NULL,
  `casteCategory` varchar(100) DEFAULT NULL,
  `UID` varchar(100) DEFAULT NULL,
  `permanentAddress` varchar(100) DEFAULT NULL,
  `permanentState` varchar(100) DEFAULT NULL,
  `permanentDistrict` varchar(100) DEFAULT NULL,
  `permanentCity` varchar(100) DEFAULT NULL,
  `permanentPinCode` varchar(100) DEFAULT NULL,
  `currentAddress` varchar(100) DEFAULT NULL,
  `currentState` varchar(100) DEFAULT NULL,
  `currentDistrict` varchar(100) DEFAULT NULL,
  `currentCity` varchar(100) DEFAULT NULL,
  `currentPinCode` varchar(100) DEFAULT NULL,
  `fatherName` varchar(100) DEFAULT NULL,
  `fatherOccupation` varchar(100) DEFAULT NULL,
  `fatherDesignation` varchar(100) DEFAULT NULL,
  `fatherIncome` varchar(100) DEFAULT NULL,
  `motherName` varchar(100) DEFAULT NULL,
  `motherOccupation` varchar(100) DEFAULT NULL,
  `familyIncome` varchar(100) DEFAULT NULL,
  `admittedTo` varchar(100) DEFAULT NULL,
  `courseDuration` varchar(100) DEFAULT NULL,
  `dateOfAdmission` varchar(100) DEFAULT NULL,
  `admissionThroughCCP` varchar(100) DEFAULT NULL,
  `instituteName` varchar(100) DEFAULT NULL,
  `courseName` varchar(100) DEFAULT NULL,
  `typeOfInstitute` varchar(100) DEFAULT NULL,
  `affiliatingUniversity` varchar(100) DEFAULT NULL,
  `instituteCategory` varchar(100) DEFAULT NULL,
  `instituteAddress` varchar(100) DEFAULT NULL,
  `instituteState` varchar(100) DEFAULT NULL,
  `instituteDistrict` varchar(100) DEFAULT NULL,
  `instituteWebsite` varchar(100) DEFAULT NULL,
  `contactPersonName` varchar(100) DEFAULT NULL,
  `instituteEmailId` varchar(100) DEFAULT NULL,
  `contactPersonNumber` varchar(100) DEFAULT NULL,
  `feeType` varchar(100) DEFAULT NULL,
  `firstSemesterFee` varchar(100) DEFAULT NULL,
  `secondSemesterFee` varchar(100) DEFAULT NULL,
  `firstYearFee` varchar(100) DEFAULT NULL,
  `totalFee` varchar(100) DEFAULT NULL,
  `accountHolderName` varchar(100) DEFAULT NULL,
  `bankName` varchar(100) DEFAULT NULL,
  `bankBranchName` varchar(100) DEFAULT NULL,
  `branchCode` varchar(100) DEFAULT NULL,
  `bankIFSCCode` varchar(100) DEFAULT NULL,
  `bankMICRCode` varchar(100) DEFAULT NULL,
  `bankAccountNumber` varchar(100) DEFAULT NULL,
  `bankAddress` varchar(100) DEFAULT NULL,
  `aicteInstitutePermanentID` varchar(100) DEFAULT NULL,
  `applicationStatus` varchar(100) DEFAULT NULL,
  `approvalOrDisapprovalComments` varchar(100) DEFAULT NULL,
  `approvalorDisapprovalDate` varchar(100) DEFAULT NULL,
  `approvedOrDisapprovedLogin` varchar(100) DEFAULT NULL,
  `formProcessedBy` varchar(100) DEFAULT NULL,
  `bankSeededAadhaar` varchar(100) DEFAULT NULL,
  `yearOfAdmission` varchar(100) DEFAULT NULL,
  `PSDBTApplicationStatus` varchar(100) DEFAULT NULL,
  `PSDBTApplicationFormSubmittedDate` varchar(100) DEFAULT NULL,
  `DBTStatusChangedBy` varchar(100) DEFAULT NULL,
  `appliedYear` varchar(100) DEFAULT NULL,
  `firstContingencyFee` varchar(100) DEFAULT NULL,
  `secondContingencyFee` varchar(100) DEFAULT NULL,
  `firstApprovedTotalFee` varchar(100) DEFAULT NULL,
  `secondApprovedTotalFee` varchar(100) DEFAULT NULL,
  `studentRank` varchar(100) DEFAULT NULL,
  `studentCategoryRank` varchar(100) DEFAULT NULL,
  `lastUpdated` varchar(100) DEFAULT NULL,
  `hscSchoolName` varchar(100) DEFAULT NULL,
  `hscSchoolAddress` varchar(100) DEFAULT NULL,
  `hscRegistrationNo` varchar(100) DEFAULT NULL,
  `hscRollNo` varchar(100) DEFAULT NULL,
  `hscMarksObtained` varchar(100) DEFAULT NULL,
  `hscTotalMarks` varchar(100) DEFAULT NULL,
  `hscPercentage` varchar(100) DEFAULT NULL,
  `hscDateOfPassing` varchar(100) DEFAULT NULL,
  `hscBoardName` varchar(100) DEFAULT NULL,
  `hscOtherBoardName` varchar(100) DEFAULT NULL,
  `hscSubject1` varchar(100) DEFAULT NULL,
  `hscSubject1MarksObtained` varchar(100) DEFAULT NULL,
  `hscSubject1MaxMarks` varchar(100) DEFAULT NULL,
  `hscSubject2` varchar(100) DEFAULT NULL,
  `hscSubject2MarksObtained` varchar(100) DEFAULT NULL,
  `hscSubject2MaxMarks` varchar(100) DEFAULT NULL,
  `hscSubject3` varchar(100) DEFAULT NULL,
  `hscSubject3MarksObtained` varchar(100) DEFAULT NULL,
  `hscSubject3MaxMarks` varchar(100) DEFAULT NULL,
  `hscSubject4` varchar(100) DEFAULT NULL,
  `hscSubject4MarksObtained` varchar(100) DEFAULT NULL,
  `hscSubject4MaxMarks` varchar(100) DEFAULT NULL,
  `hscSubject5` varchar(100) DEFAULT NULL,
  `hscSubject5MarksObtained` varchar(100) DEFAULT NULL,
  `hscSubject5MaxMarks` varchar(100) DEFAULT NULL,
  `hscSubject6` varchar(100) DEFAULT NULL,
  `hscSubject6MarksObtained` varchar(100) DEFAULT NULL,
  `hscSubject6MaxMarks` varchar(100) DEFAULT NULL,
  `hscSubject7` varchar(100) DEFAULT NULL,
  `hscSubject7MarksObtained` varchar(100) DEFAULT NULL,
  `hscSubject7MaxMarks` varchar(100) DEFAULT NULL,
  `hscSubject8` varchar(100) DEFAULT NULL,
  `hscSubject8MarksObtained` varchar(100) DEFAULT NULL,
  `hscSubject8MaxMarks` varchar(100) DEFAULT NULL,
  `sscSchoolName` varchar(100) DEFAULT NULL,
  `sscSchoolAddress` varchar(100) DEFAULT NULL,
  `sscMarksSystem` varchar(100) DEFAULT NULL,
  `sscMarksObtained` varchar(100) DEFAULT NULL,
  `sscTotalMarks` varchar(100) DEFAULT NULL,
  `sscPercentage` varchar(100) DEFAULT NULL,
  `sscDivision` varchar(100) DEFAULT NULL,
  `sscGrade` varchar(100) DEFAULT NULL,
  `sscGradePoints` varchar(100) DEFAULT NULL,
  `sscDateOfPassing` varchar(100) DEFAULT NULL,
  `sscBoardName` varchar(100) DEFAULT NULL,
  `sscOtherBoardName` varchar(100) DEFAULT NULL,
  `sscRegistrationNo` varchar(100) DEFAULT NULL,
  `sscRollNo` varchar(100) DEFAULT NULL,
  `hscState` varchar(100) DEFAULT NULL,
  `hscDistrict` varchar(100) DEFAULT NULL,
  `hscCity` varchar(100) DEFAULT NULL,
  `hscPincode` varchar(100) DEFAULT NULL,
  `sscState` varchar(100) DEFAULT NULL,
  `sscDistrict` varchar(100) DEFAULT NULL,
  `sscCity` varchar(100) DEFAULT NULL,
  `sscPincode` varchar(100) DEFAULT NULL,
  `sscSubject1` varchar(100) DEFAULT NULL,
  `sscSubject1MarksObtained` varchar(100) DEFAULT NULL,
  `sscSubject1MaxMarks` varchar(100) DEFAULT NULL,
  `sscSubject2` varchar(100) DEFAULT NULL,
  `sscSubject2MarksObtained` varchar(100) DEFAULT NULL,
  `sscSubject2MaxMarks` varchar(100) DEFAULT NULL,
  `sscSubject3` varchar(100) DEFAULT NULL,
  `sscSubject3MarksObtained` varchar(100) DEFAULT NULL,
  `sscSubject3MaxMarks` varchar(100) DEFAULT NULL,
  `sscSubject4` varchar(100) DEFAULT NULL,
  `sscSubject4MarksObtained` varchar(100) DEFAULT NULL,
  `sscSubject4MaxMarks` varchar(100) DEFAULT NULL,
  `sscSubject5` varchar(100) DEFAULT NULL,
  `sscSubject5MarksObtained` varchar(100) DEFAULT NULL,
  `sscSubject5MaxMarks` varchar(100) DEFAULT NULL,
  `sscSubject6` varchar(100) DEFAULT NULL,
  `sscSubject6MarksObtained` varchar(100) DEFAULT NULL,
  `sscSubject6MaxMarks` varchar(100) DEFAULT NULL,
  `sscSubject7` varchar(100) DEFAULT NULL,
  `sscSubject7MarksObtained` varchar(100) DEFAULT NULL,
  `sscSubject7MaxMarks` varchar(100) DEFAULT NULL,
  `sscSubject8` varchar(100) DEFAULT NULL,
  `sscSubject8MarksObtained` varchar(100) DEFAULT NULL,
  `sscSubject8MaxMarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program_details`
--

CREATE TABLE `program_details` (
  `id` int(10) NOT NULL,
  `program` varchar(50) NOT NULL,
  `new_program` varchar(50) NOT NULL,
  `existing_program` varchar(50) NOT NULL,
  `year_started` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_details`
--

INSERT INTO `program_details` (`id`, `program`, `new_program`, `existing_program`, `year_started`) VALUES
(1, 'a', 'a', '', 'a'),
(2, 'v', 'v', '', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `registrar_details`
--

CREATE TABLE `registrar_details` (
  `id` int(10) NOT NULL,
  `registration_no` varchar(20) NOT NULL,
  `registrar_id` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `std_code` varchar(15) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `district` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrar_details`
--

INSERT INTO `registrar_details` (`id`, `registration_no`, `registrar_id`, `title`, `city`, `state`, `std_code`, `mobile_no`, `district`, `address`, `postal_code`, `email_id`) VALUES
(1, 'x', '', 'x', '', 'Dadra and Nagar Haveli', 'x', 'x', 'Amal', 'x', 'x', 'x');

-- --------------------------------------------------------

--
-- Table structure for table `student_enrolment_details`
--

CREATE TABLE `student_enrolment_details` (
  `id` int(10) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `affiliating_university` varchar(50) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `general_male_excluding_minority` varchar(50) NOT NULL,
  `general_female_excluding_minority` varchar(50) NOT NULL,
  `obc_male` varchar(50) NOT NULL,
  `obc_female` varchar(50) NOT NULL,
  `sc_male` varchar(50) NOT NULL,
  `sc_female` varchar(50) NOT NULL,
  `physically_handicapped_male` varchar(50) NOT NULL,
  `physically_handicapped_female` varchar(50) NOT NULL,
  `minority_male_female` varchar(50) NOT NULL,
  `tfw_male` varchar(50) NOT NULL,
  `tfw_female` varchar(50) NOT NULL,
  `nri_male` varchar(50) NOT NULL,
  `nri_female` varchar(50) NOT NULL,
  `pio_male` varchar(50) NOT NULL,
  `pio_female` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vocational_course`
--

CREATE TABLE `vocational_course` (
  `id` int(10) NOT NULL,
  `program` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `level` varchar(50) NOT NULL,
  `intake_applied` varchar(30) NOT NULL,
  `approved_applied` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vocational_course`
--

INSERT INTO `vocational_course` (`id`, `program`, `course`, `level`, `intake_applied`, `approved_applied`) VALUES
(1, 'x', 'x', 'x', 'x', 'x'),
(2, 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `yoga_day_celebration`
--

CREATE TABLE `yoga_day_celebration` (
  `id` int(10) NOT NULL,
  `institute_name` varchar(50) NOT NULL,
  `institute_address` varchar(50) NOT NULL,
  `institute_state` varchar(50) NOT NULL,
  `institute_city` varchar(50) NOT NULL,
  `list_activities_yoga_day` varchar(50) NOT NULL,
  `students_participated` varchar(50) NOT NULL,
  `faculty_participated` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrative_area`
--
ALTER TABLE `administrative_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aicte_cii_survey`
--
ALTER TABLE `aicte_cii_survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities_area`
--
ALTER TABLE `amenities_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building_details`
--
ALTER TABLE `building_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `circulation_area`
--
ALTER TABLE `circulation_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details_national_level_program`
--
ALTER TABLE `details_national_level_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information_collected_institution_innovation_cell`
--
ALTER TABLE `information_collected_institution_innovation_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information_collected_startups`
--
ALTER TABLE `information_collected_startups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information_mous_industry`
--
ALTER TABLE `information_mous_industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructional_area`
--
ALTER TABLE `instructional_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratory_details`
--
ALTER TABLE `laboratory_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_details`
--
ALTER TABLE `land_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_details_per_registration`
--
ALTER TABLE `land_details_per_registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `land_registered_no` (`land_registered_no`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisation_details`
--
ALTER TABLE `organisation_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registration_no` (`registration_no`);

--
-- Indexes for table `pg_scholarship`
--
ALTER TABLE `pg_scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmsss_scholarship_scheme`
--
ALTER TABLE `pmsss_scholarship_scheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pragathi_saksham_scholarship`
--
ALTER TABLE `pragathi_saksham_scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_details`
--
ALTER TABLE `program_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrar_details`
--
ALTER TABLE `registrar_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registration_no` (`registration_no`),
  ADD UNIQUE KEY `registrar_id` (`registrar_id`);

--
-- Indexes for table `student_enrolment_details`
--
ALTER TABLE `student_enrolment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vocational_course`
--
ALTER TABLE `vocational_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yoga_day_celebration`
--
ALTER TABLE `yoga_day_celebration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrative_area`
--
ALTER TABLE `administrative_area`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `aicte_cii_survey`
--
ALTER TABLE `aicte_cii_survey`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amenities_area`
--
ALTER TABLE `amenities_area`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `building_details`
--
ALTER TABLE `building_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `circulation_area`
--
ALTER TABLE `circulation_area`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details_national_level_program`
--
ALTER TABLE `details_national_level_program`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `information_collected_institution_innovation_cell`
--
ALTER TABLE `information_collected_institution_innovation_cell`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `information_collected_startups`
--
ALTER TABLE `information_collected_startups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `information_mous_industry`
--
ALTER TABLE `information_mous_industry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructional_area`
--
ALTER TABLE `instructional_area`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laboratory_details`
--
ALTER TABLE `laboratory_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `land_details`
--
ALTER TABLE `land_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `land_details_per_registration`
--
ALTER TABLE `land_details_per_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pg_scholarship`
--
ALTER TABLE `pg_scholarship`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmsss_scholarship_scheme`
--
ALTER TABLE `pmsss_scholarship_scheme`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pragathi_saksham_scholarship`
--
ALTER TABLE `pragathi_saksham_scholarship`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_details`
--
ALTER TABLE `program_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrar_details`
--
ALTER TABLE `registrar_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_enrolment_details`
--
ALTER TABLE `student_enrolment_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vocational_course`
--
ALTER TABLE `vocational_course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `yoga_day_celebration`
--
ALTER TABLE `yoga_day_celebration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
