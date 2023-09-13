-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 04:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `bootcamp_routine1`
--

CREATE TABLE `bootcamp_routine1` (
  `routine1_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine1_sub_prog_Id` int(11) NOT NULL,
  `burpees_to_forward_jump` varchar(255) NOT NULL DEFAULT 'Not yet',
  `forward_backward` varchar(255) NOT NULL DEFAULT 'Not yet',
  `180_degrees` varchar(255) NOT NULL DEFAULT 'Not yet',
  `high_knees` varchar(255) NOT NULL DEFAULT 'Not yet',
  `squat_jump` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bootcamp_routine1`
--

INSERT INTO `bootcamp_routine1` (`routine1_Id`, `guest_Id`, `routine1_sub_prog_Id`, `burpees_to_forward_jump`, `forward_backward`, `180_degrees`, `high_knees`, `squat_jump`, `date_created`) VALUES
(2, 7, 49, 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03'),
(3, 11, 49, 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `bootcamp_routine2`
--

CREATE TABLE `bootcamp_routine2` (
  `routine2_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine2_sub_prog_Id` int(11) NOT NULL,
  `forward_jump` varchar(255) NOT NULL DEFAULT 'Not yet',
  `box_shuffle` varchar(255) NOT NULL DEFAULT 'Not yet',
  `skiers_to_jump` varchar(255) NOT NULL DEFAULT 'Not yet',
  `core_to_core` varchar(255) NOT NULL DEFAULT 'Not yet',
  `trapbar` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bootcamp_routine2`
--

INSERT INTO `bootcamp_routine2` (`routine2_Id`, `guest_Id`, `routine2_sub_prog_Id`, `forward_jump`, `box_shuffle`, `skiers_to_jump`, `core_to_core`, `trapbar`, `date_created`) VALUES
(1, 1, 50, 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03'),
(3, 11, 50, 'Not yet', 'Done', 'Not yet', 'Not yet', 'Done', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `bootcamp_routine3`
--

CREATE TABLE `bootcamp_routine3` (
  `routine3_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine3_sub_prog_Id` int(11) NOT NULL,
  `high_plank` varchar(255) NOT NULL DEFAULT 'Not yet',
  `side_plank_R` varchar(255) NOT NULL DEFAULT 'Not yet',
  `side_plank_L` varchar(255) NOT NULL DEFAULT 'Not yet',
  `elbow_plank` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bootcamp_routine3`
--

INSERT INTO `bootcamp_routine3` (`routine3_Id`, `guest_Id`, `routine3_sub_prog_Id`, `high_plank`, `side_plank_R`, `side_plank_L`, `elbow_plank`, `date_created`) VALUES
(2, 1, 51, 'Not yet', 'Done', 'Not yet', 'Not yet', '2022-05-03'),
(3, 11, 51, 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `bootcamp_routine4`
--

CREATE TABLE `bootcamp_routine4` (
  `routine4_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine4_sub_prog_Id` int(11) NOT NULL,
  `core_slider` varchar(255) NOT NULL DEFAULT 'Not yet',
  `weighted_lateral` varchar(255) NOT NULL DEFAULT 'Not yet',
  `quick_feet` varchar(255) NOT NULL DEFAULT 'Not yet',
  `slam_ball` varchar(255) NOT NULL DEFAULT 'Not yet',
  `weighted_bunny` varchar(255) NOT NULL DEFAULT 'Not yet',
  `icky_shuffle` varchar(255) NOT NULL DEFAULT 'Not yet',
  `lateral_high` varchar(255) NOT NULL DEFAULT 'Not yet',
  `shuttle_run` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bootcamp_routine4`
--

INSERT INTO `bootcamp_routine4` (`routine4_Id`, `guest_Id`, `routine4_sub_prog_Id`, `core_slider`, `weighted_lateral`, `quick_feet`, `slam_ball`, `weighted_bunny`, `icky_shuffle`, `lateral_high`, `shuttle_run`, `date_created`) VALUES
(2, 1, 52, 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03'),
(3, 12, 52, 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03'),
(4, 11, 52, 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `bootcamp_routine5`
--

CREATE TABLE `bootcamp_routine5` (
  `routine5_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine5_sub_prog_Id` int(11) NOT NULL,
  `sit_up` varchar(255) NOT NULL DEFAULT 'Not yet',
  `russian_twist` varchar(255) NOT NULL DEFAULT 'Not yet',
  `knee_to_chest` varchar(255) NOT NULL DEFAULT 'Not yet',
  `sid_crunches` varchar(255) NOT NULL DEFAULT 'Not yet',
  `flutter_back` varchar(255) NOT NULL DEFAULT 'Not yet',
  `scissors` varchar(255) NOT NULL DEFAULT 'Not yet',
  `leg_raise` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bootcamp_routine5`
--

INSERT INTO `bootcamp_routine5` (`routine5_Id`, `guest_Id`, `routine5_sub_prog_Id`, `sit_up`, `russian_twist`, `knee_to_chest`, `sid_crunches`, `flutter_back`, `scissors`, `leg_raise`, `date_created`) VALUES
(1, 1, 53, 'Not yet', 'Not yet', 'Done', 'Not yet', 'Done', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `circuit_routine1`
--

CREATE TABLE `circuit_routine1` (
  `routine1_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine_sub_prog_Id` int(11) NOT NULL,
  `Burpees` varchar(255) NOT NULL DEFAULT 'Not yet',
  `DB_Arnold_press` varchar(255) NOT NULL DEFAULT 'Not yet',
  `Wall_ball` varchar(255) NOT NULL DEFAULT 'Not yet',
  `KB_overhead_triceps_ext` varchar(255) NOT NULL DEFAULT 'Not yet',
  `Ez_bar_bent_over_rows` varchar(255) NOT NULL DEFAULT 'Not yet',
  `DB_bicep_to_hammer_curls` varchar(255) NOT NULL DEFAULT 'Not yet',
  `KB_snatch_R` varchar(255) NOT NULL DEFAULT 'Not yet',
  `Reverse_lunges` varchar(255) NOT NULL DEFAULT 'Not yet',
  `KB_snatch_L` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `circuit_routine1`
--

INSERT INTO `circuit_routine1` (`routine1_Id`, `guest_Id`, `routine_sub_prog_Id`, `Burpees`, `DB_Arnold_press`, `Wall_ball`, `KB_overhead_triceps_ext`, `Ez_bar_bent_over_rows`, `DB_bicep_to_hammer_curls`, `KB_snatch_R`, `Reverse_lunges`, `KB_snatch_L`, `date_created`) VALUES
(4, 1, 40, 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-01'),
(6, 11, 40, 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-01'),
(7, 12, 40, 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-01'),
(8, 15, 40, 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03'),
(9, 16, 40, 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `circuit_routine2`
--

CREATE TABLE `circuit_routine2` (
  `routine2_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine2_sub_prog_Id` int(11) NOT NULL,
  `1_min_elbow_plank` varchar(255) NOT NULL DEFAULT 'Not yet',
  `plank_jack` varchar(255) NOT NULL DEFAULT 'Not yet',
  `bicycles` varchar(255) NOT NULL DEFAULT 'Not yet',
  `L_crunches` varchar(255) NOT NULL DEFAULT 'Not yet',
  `flutter_kicks` varchar(255) NOT NULL DEFAULT 'Not yet',
  `1_min_hollow_plank` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `circuit_routine2`
--

INSERT INTO `circuit_routine2` (`routine2_Id`, `guest_Id`, `routine2_sub_prog_Id`, `1_min_elbow_plank`, `plank_jack`, `bicycles`, `L_crunches`, `flutter_kicks`, `1_min_hollow_plank`, `date_created`) VALUES
(2, 7, 41, 'Done', 'Not yet', 'Not yet', 'Done', 'Done', 'Not yet', '2022-05-01'),
(3, 1, 41, 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-01'),
(4, 12, 41, 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03'),
(6, 11, 41, 'Not yet', 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `circuit_routine3`
--

CREATE TABLE `circuit_routine3` (
  `routine3_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine3_sub_prog_Id` int(11) NOT NULL,
  `trx_superman_to_push` varchar(255) NOT NULL DEFAULT 'Not yet',
  `kb_halo_with_front_press` varchar(255) NOT NULL DEFAULT 'Not yet',
  `half_kneeling_side_arm_press_R` varchar(255) NOT NULL DEFAULT 'Not yet',
  `kb_snatch` varchar(255) NOT NULL DEFAULT 'Not yet',
  `half_kneeling_side_arm_press_L` varchar(255) NOT NULL DEFAULT 'Not yet',
  `suicides` varchar(255) NOT NULL DEFAULT 'Not yet',
  `deadlift_to_front_raise` varchar(255) NOT NULL DEFAULT 'Not yet',
  `inclinde_box_push_ups` varchar(255) NOT NULL DEFAULT 'Not yet',
  `medicine_ball_half_burpee_to_frog_jump` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `circuit_routine3`
--

INSERT INTO `circuit_routine3` (`routine3_Id`, `guest_Id`, `routine3_sub_prog_Id`, `trx_superman_to_push`, `kb_halo_with_front_press`, `half_kneeling_side_arm_press_R`, `kb_snatch`, `half_kneeling_side_arm_press_L`, `suicides`, `deadlift_to_front_raise`, `inclinde_box_push_ups`, `medicine_ball_half_burpee_to_frog_jump`, `date_created`) VALUES
(1, 1, 42, 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Done', 'Not yet', 'Not yet', 'Not yet', '2022-05-01'),
(4, 11, 42, 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `crossfit_routine1`
--

CREATE TABLE `crossfit_routine1` (
  `routine1_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine1_sub_prog_Id` int(11) NOT NULL,
  `11_kb_squat_jump` varchar(255) NOT NULL DEFAULT 'Not yet',
  `11_kb_snatch_R` varchar(255) NOT NULL DEFAULT 'Not yet',
  `11_kb_swing` varchar(255) NOT NULL DEFAULT 'Not yet',
  `11_kb_snatch_L` varchar(255) NOT NULL DEFAULT 'Not yet',
  `11_in_out_squat_pulses` varchar(255) NOT NULL DEFAULT 'Not yet',
  `11_trap_bar_deadlift` varchar(255) NOT NULL DEFAULT 'Not yet',
  `11_bb_squat` varchar(255) NOT NULL DEFAULT 'Not yet',
  `bb_good_mornings` varchar(255) NOT NULL DEFAULT 'Not yet',
  `11_push_press` varchar(255) NOT NULL DEFAULT 'Not yet',
  `3_round_farmers_walk` varchar(255) NOT NULL DEFAULT 'Not yet',
  `100_jump_rope` varchar(255) NOT NULL DEFAULT 'Not yet',
  `30_sec_dead_hang` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crossfit_routine1`
--

INSERT INTO `crossfit_routine1` (`routine1_Id`, `guest_Id`, `routine1_sub_prog_Id`, `11_kb_squat_jump`, `11_kb_snatch_R`, `11_kb_swing`, `11_kb_snatch_L`, `11_in_out_squat_pulses`, `11_trap_bar_deadlift`, `11_bb_squat`, `bb_good_mornings`, `11_push_press`, `3_round_farmers_walk`, `100_jump_rope`, `30_sec_dead_hang`, `date_created`) VALUES
(3, 1, 47, 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-01'),
(4, 11, 47, 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `crossfit_routine2`
--

CREATE TABLE `crossfit_routine2` (
  `routine2_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine2_sub_prog_Id` int(11) NOT NULL,
  `10_sit_ups` varchar(255) NOT NULL DEFAULT 'Not yet',
  `10_flutter_kicks` varchar(255) NOT NULL DEFAULT 'Not yet',
  `10_scissors` varchar(255) NOT NULL DEFAULT 'Not yet',
  `10_leg` varchar(255) NOT NULL DEFAULT 'Not yet',
  `10_knee_crunches` varchar(255) NOT NULL DEFAULT 'Not yet',
  `10_knee_to_chest` varchar(255) NOT NULL DEFAULT 'Not yet',
  `10_plank_alt_single` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crossfit_routine2`
--

INSERT INTO `crossfit_routine2` (`routine2_Id`, `guest_Id`, `routine2_sub_prog_Id`, `10_sit_ups`, `10_flutter_kicks`, `10_scissors`, `10_leg`, `10_knee_crunches`, `10_knee_to_chest`, `10_plank_alt_single`, `date_created`) VALUES
(2, 7, 48, 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-01'),
(3, 1, 48, 'Not yet', 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Done', '2022-05-01'),
(4, 11, 48, 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Done', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_Id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_registered` date NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT 3 COMMENT '1=Admin , 2=Employer, 3=Staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_Id`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `dob`, `age`, `address`, `email`, `contact`, `password`, `image`, `date_registered`, `user_type`) VALUES
(1, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-04-06', 23, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin12@gmail.com', '09359428963', '21232f297a57a5a743894a0e4a801fc3', 'foto-sushi-6anudmpILw4-unsplash.jpg', '2022-04-17', 4),
(7, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-04-21', 432, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin12fds@gmail.com', '35', '202cb962ac59075b964b07152d234b70', 'ali-pazani-9uaNYCqjDLw-unsplash.jpg', '2022-04-17', 4),
(10, 'Erwinewin', 'Cabag', 'Son', '', 'Male', '2022-04-07', 32, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'admin@gmail.com', '09359428963', '21232f297a57a5a743894a0e4a801fc3', 'Screenshot (11).png', '2022-04-17', 2),
(11, '123', 'Cabag', 'Son', '', 'Female', '2022-04-21', 23, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin12123@gmail.com', '2543', '21232f297a57a5a743894a0e4a801fc3', 'logo.png', '2022-04-18', 3),
(12, 'Erwinqwe', 'Cabag', 'Son', '', 'Male', '2022-04-07', 532543, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin1fsdfdsfs2@gmail.com', '5252', '0cc175b9c0f1b6a831c399e269772661', 'Screenshot (111).png', '2022-04-18', 3),
(15, 'Erwin', 'Cabag', 'Son', '', 'Female', '2022-04-07', 32, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwsdasadain12@gmail.com', '13442', '21232f297a57a5a743894a0e4a801fc3', 'sample3.jpg', '2022-04-19', 3),
(17, 'Erwin123', 'Cabag', 'Son', '', 'Male', '2022-04-01', 32, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'qqq@gmail.com', '3254', '4124bc0a9335c27f086f24ba207a4912', 'user.png', '2022-04-23', 3),
(18, 'Erwin', 'Cabag', 'Son', '32', 'Male', '2022-04-13', 32, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwinddd12@gmail.com', '09359428963', '1aabac6d068eef6a7bad3fdf50a05cc8', 'Screenshot (1).png', '2022-04-24', 3),
(19, 'Erwin11111111111111111111111', 'Cabag', 'Son', 'sd', 'Male', '2022-04-27', 32, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwinss12@gmail.com', '09359428963', '3691308f2a4c2f6983f2880d32e29c84', 'Screenshot (1).png', '2022-04-24', 3),
(20, 'Erwin', 'Cabag', 'Son', '', 'Female', '2022-04-14', 12, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwinfsdfsd12@gmail.com', '09359428963', '202cb962ac59075b964b07152d234b70', 'Untitled-1.png', '2022-04-26', 3);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_Id` int(11) NOT NULL,
  `program_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_Id`, `program_name`) VALUES
(2, 'Circuit Training'),
(4, 'Crossfit Workout'),
(5, 'Fitness Bootcamp'),
(6, 'Tabata Workout');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sched_Id` int(11) NOT NULL,
  `sched_today` varchar(255) NOT NULL,
  `sched_time` varchar(255) NOT NULL,
  `prog_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sched_Id`, `sched_today`, `sched_time`, `prog_Id`) VALUES
(4, 'Monday,Wednesday,', '08:00 - 08:30', 2),
(5, 'Thursday,', '08:00 - ', 5),
(7, 'Friday,', '08:00 - 08:30', 6),
(8, 'Saturday,', '08:00 - 08:30', 4),
(9, 'Sunday,', '08:00 - 08:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_program`
--

CREATE TABLE `sub_program` (
  `sub_program_Id` int(11) NOT NULL,
  `prog_Id` int(11) NOT NULL,
  `sub_program_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_program`
--

INSERT INTO `sub_program` (`sub_program_Id`, `prog_Id`, `sub_program_name`) VALUES
(40, 2, 'Whole body circuit with active rest'),
(41, 2, 'Core Workout'),
(42, 2, 'Upper body/ Pull Circuit'),
(43, 6, 'Tabata Workout(5-8 Rounds)'),
(44, 6, 'Tabata Core Workout'),
(45, 6, 'Tabata Target Everything'),
(46, 6, 'Small Ground Core'),
(47, 4, 'Crossfit Wod'),
(48, 4, 'Core (2 Rounds)'),
(49, 5, 'STATION 1: 3-5 sets. 3 rounds is 2 set'),
(50, 5, 'STATION 2: 3 rounds = 1 set'),
(51, 5, 'Core: 3 sets'),
(52, 5, '5-8 Rounds'),
(53, 5, 'CORE EXERCISE 2 SETS OF 10 KPS');

-- --------------------------------------------------------

--
-- Table structure for table `tabata_routine1`
--

CREATE TABLE `tabata_routine1` (
  `routine1_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine1_sub_prog_Id` int(11) NOT NULL,
  `goblet_squat` varchar(255) NOT NULL DEFAULT 'Not yet',
  `crab_kicks` varchar(255) NOT NULL DEFAULT 'Not yet',
  `push_up_rotate` varchar(255) NOT NULL DEFAULT 'Not yet',
  `alt_bent_over_row_db` varchar(255) NOT NULL DEFAULT 'Not yet',
  `squat_2x` varchar(255) NOT NULL DEFAULT 'Not yet',
  `upright_row_to_hammer_curl_db` varchar(255) NOT NULL DEFAULT 'Not yet',
  `quick_feet` varchar(255) NOT NULL DEFAULT 'Not yet',
  `static_hold` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabata_routine1`
--

INSERT INTO `tabata_routine1` (`routine1_Id`, `guest_Id`, `routine1_sub_prog_Id`, `goblet_squat`, `crab_kicks`, `push_up_rotate`, `alt_bent_over_row_db`, `squat_2x`, `upright_row_to_hammer_curl_db`, `quick_feet`, `static_hold`, `date_created`) VALUES
(4, 1, 43, 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03'),
(5, 7, 43, 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03'),
(6, 11, 43, 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Done', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `tabata_routine2`
--

CREATE TABLE `tabata_routine2` (
  `routine2_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine2_sub_prog_Id` int(11) NOT NULL,
  `side_plank_R` varchar(255) NOT NULL DEFAULT 'Not yet',
  `side_plank_L` varchar(255) NOT NULL DEFAULT 'Not yet',
  `elbow_plank` varchar(255) NOT NULL DEFAULT 'Not yet',
  `knee_plank` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabata_routine2`
--

INSERT INTO `tabata_routine2` (`routine2_Id`, `guest_Id`, `routine2_sub_prog_Id`, `side_plank_R`, `side_plank_L`, `elbow_plank`, `knee_plank`, `date_created`) VALUES
(2, 1, 43, 'Done', 'Not yet', 'Not yet', 'Not yet', '2022-05-03'),
(3, 11, 43, 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `tabata_routine3`
--

CREATE TABLE `tabata_routine3` (
  `routine3_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine3_sub_prog_Id` int(11) NOT NULL,
  `start_jump_cardio` varchar(255) NOT NULL DEFAULT 'Not yet',
  `tricep_ext` varchar(255) NOT NULL DEFAULT 'Not yet',
  `jack_to_narrow` varchar(255) NOT NULL DEFAULT 'Not yet',
  `twisted_mount` varchar(255) NOT NULL DEFAULT 'Not yet',
  `jumping_lunges` varchar(255) NOT NULL DEFAULT 'Not yet',
  `side_to_side_jump` varchar(255) NOT NULL DEFAULT 'Not yet',
  `supine_marching` varchar(255) NOT NULL DEFAULT 'Not yet',
  `wall_sit` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabata_routine3`
--

INSERT INTO `tabata_routine3` (`routine3_Id`, `guest_Id`, `routine3_sub_prog_Id`, `start_jump_cardio`, `tricep_ext`, `jack_to_narrow`, `twisted_mount`, `jumping_lunges`, `side_to_side_jump`, `supine_marching`, `wall_sit`, `date_created`) VALUES
(2, 11, 45, 'Done', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `tabata_routine4`
--

CREATE TABLE `tabata_routine4` (
  `routine4_Id` int(11) NOT NULL,
  `guest_Id` int(11) NOT NULL,
  `routine4_sub_prog_Id` int(11) NOT NULL,
  `crunches_with_db_clockwise` varchar(255) NOT NULL DEFAULT 'Not yet',
  `bicycle_with_db` varchar(255) NOT NULL DEFAULT 'Not yet',
  `crunches_with_db_counter` varchar(255) NOT NULL DEFAULT 'Not yet',
  `elbow_prank_hold` varchar(255) NOT NULL DEFAULT 'Not yet',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabata_routine4`
--

INSERT INTO `tabata_routine4` (`routine4_Id`, `guest_Id`, `routine4_sub_prog_Id`, `crunches_with_db_clockwise`, `bicycle_with_db`, `crunches_with_db_counter`, `elbow_prank_hold`, `date_created`) VALUES
(2, 7, 46, 'Done', 'Not yet', 'Not yet', 'Not yet', '2022-05-03'),
(3, 11, 46, 'Not yet', 'Not yet', 'Not yet', 'Not yet', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_Id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `dob`, `age`, `address`, `email`, `contact`, `password`, `image`, `date_registered`) VALUES
(1, 'Erwin12322', 'Cabag', 'Son', '', 'Male', '2022-04-06', 23, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin12@gmail.com', '09359428963', '21232f297a57a5a743894a0e4a801fc3', 'foto-sushi-6anudmpILw4-unsplash.jpg', '2022-04-17'),
(7, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-04-21', 432, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin12fds@gmail.com', '35', '202cb962ac59075b964b07152d234b70', 'sample3.jpg', '2022-04-17'),
(11, 'Erwin-loan', 'Cabag', 'Son', '', 'Male', '2022-04-06', 12, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sample@gmail.com', '09359428963', '21232f297a57a5a743894a0e4a801fc3', 'user.png', '2022-04-18'),
(12, 'sampl', 'Cabag', 'Son', '', 'Male', '2022-04-07', 3242, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sfdfd@gmail.com', '43242', '82d5984c2a2ad4c62caf1dd073b1c91c', 'Screenshot (21).png', '2022-04-18'),
(14, '123eee123', 'Cabag', 'Son', '', 'Male', '2022-04-20', 32, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'fdsfsfsd@gmail.com', '4342', '4124bc0a9335c27f086f24ba207a4912', 'logo.png', '2022-04-23'),
(15, 'Erwin111112222222222222222222', 'Cabag', 'Son', '', 'Female', '2022-04-13', 3232, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin1sssssss2@gmail.com', '09359428963', '1aabac6d068eef6a7bad3fdf50a05cc8', 'Screenshot (2).png', '2022-04-24'),
(16, 'Danilo', 'Cabag', 'Nicolas', '', 'Male', '2022-04-11', 21, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'danilo@gmail.com', '323', '21232f297a57a5a743894a0e4a801fc3', 'NicePng_body-builder-png_988257.png', '2022-04-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bootcamp_routine1`
--
ALTER TABLE `bootcamp_routine1`
  ADD PRIMARY KEY (`routine1_Id`);

--
-- Indexes for table `bootcamp_routine2`
--
ALTER TABLE `bootcamp_routine2`
  ADD PRIMARY KEY (`routine2_Id`);

--
-- Indexes for table `bootcamp_routine3`
--
ALTER TABLE `bootcamp_routine3`
  ADD PRIMARY KEY (`routine3_Id`);

--
-- Indexes for table `bootcamp_routine4`
--
ALTER TABLE `bootcamp_routine4`
  ADD PRIMARY KEY (`routine4_Id`);

--
-- Indexes for table `bootcamp_routine5`
--
ALTER TABLE `bootcamp_routine5`
  ADD PRIMARY KEY (`routine5_Id`);

--
-- Indexes for table `circuit_routine1`
--
ALTER TABLE `circuit_routine1`
  ADD PRIMARY KEY (`routine1_Id`);

--
-- Indexes for table `circuit_routine2`
--
ALTER TABLE `circuit_routine2`
  ADD PRIMARY KEY (`routine2_Id`);

--
-- Indexes for table `circuit_routine3`
--
ALTER TABLE `circuit_routine3`
  ADD PRIMARY KEY (`routine3_Id`);

--
-- Indexes for table `crossfit_routine1`
--
ALTER TABLE `crossfit_routine1`
  ADD PRIMARY KEY (`routine1_Id`);

--
-- Indexes for table `crossfit_routine2`
--
ALTER TABLE `crossfit_routine2`
  ADD PRIMARY KEY (`routine2_Id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_Id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_Id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_Id`);

--
-- Indexes for table `sub_program`
--
ALTER TABLE `sub_program`
  ADD PRIMARY KEY (`sub_program_Id`);

--
-- Indexes for table `tabata_routine1`
--
ALTER TABLE `tabata_routine1`
  ADD PRIMARY KEY (`routine1_Id`);

--
-- Indexes for table `tabata_routine2`
--
ALTER TABLE `tabata_routine2`
  ADD PRIMARY KEY (`routine2_Id`);

--
-- Indexes for table `tabata_routine3`
--
ALTER TABLE `tabata_routine3`
  ADD PRIMARY KEY (`routine3_Id`);

--
-- Indexes for table `tabata_routine4`
--
ALTER TABLE `tabata_routine4`
  ADD PRIMARY KEY (`routine4_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bootcamp_routine1`
--
ALTER TABLE `bootcamp_routine1`
  MODIFY `routine1_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bootcamp_routine2`
--
ALTER TABLE `bootcamp_routine2`
  MODIFY `routine2_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bootcamp_routine3`
--
ALTER TABLE `bootcamp_routine3`
  MODIFY `routine3_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bootcamp_routine4`
--
ALTER TABLE `bootcamp_routine4`
  MODIFY `routine4_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bootcamp_routine5`
--
ALTER TABLE `bootcamp_routine5`
  MODIFY `routine5_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `circuit_routine1`
--
ALTER TABLE `circuit_routine1`
  MODIFY `routine1_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `circuit_routine2`
--
ALTER TABLE `circuit_routine2`
  MODIFY `routine2_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `circuit_routine3`
--
ALTER TABLE `circuit_routine3`
  MODIFY `routine3_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `crossfit_routine1`
--
ALTER TABLE `crossfit_routine1`
  MODIFY `routine1_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `crossfit_routine2`
--
ALTER TABLE `crossfit_routine2`
  MODIFY `routine2_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sched_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_program`
--
ALTER TABLE `sub_program`
  MODIFY `sub_program_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tabata_routine1`
--
ALTER TABLE `tabata_routine1`
  MODIFY `routine1_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabata_routine2`
--
ALTER TABLE `tabata_routine2`
  MODIFY `routine2_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabata_routine3`
--
ALTER TABLE `tabata_routine3`
  MODIFY `routine3_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabata_routine4`
--
ALTER TABLE `tabata_routine4`
  MODIFY `routine4_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
