-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 11:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrative_area`
--
ALTER TABLE `administrative_area`
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
-- Indexes for table `vocational_course`
--
ALTER TABLE `vocational_course`
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
-- AUTO_INCREMENT for table `vocational_course`
--
ALTER TABLE `vocational_course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
