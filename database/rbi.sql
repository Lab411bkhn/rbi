-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2017 at 09:08 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE IF NOT EXISTS `device` (
  `id_device` varchar(40) NOT NULL DEFAULT '',
  `name_device` varchar(40) DEFAULT NULL,
  `parameters` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id_device`, `name_device`, `parameters`) VALUES
('DV1', 'Ong khoi', 'PM1');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `position` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `dob`, `position`) VALUES
('haiduong28', 'Nguyen Hai Duong', '1994-08-02', 'Giam doc'),
('trantam99', 'Tran Tam', '1994-06-01', 'Thu ky');

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE IF NOT EXISTS `parameters` (
  `id_parameter` varchar(40) NOT NULL,
  `name_parameter` varchar(40) NOT NULL,
  `value` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`id_parameter`, `name_parameter`, `value`) VALUES
('PM1', 'size', '50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_component`
--

CREATE TABLE IF NOT EXISTS `tbl_component` (
  `componentName` varchar(100) NOT NULL,
  `componentDescription` varchar(200) NOT NULL,
  `MOC` varchar(45) NOT NULL,
  `LinearMOC` varchar(45) NOT NULL,
  `HeightLength` varchar(45) DEFAULT NULL,
  `Diameter` varchar(45) DEFAULT NULL,
  `NominalThickness` varchar(45) DEFAULT NULL,
  `CA` varchar(45) DEFAULT NULL,
  `DesignPressure` varchar(45) DEFAULT NULL,
  `DesignTemp` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_component`
--

INSERT INTO `tbl_component` (`componentName`, `componentDescription`, `MOC`, `LinearMOC`, `HeightLength`, `Diameter`, `NominalThickness`, `CA`, `DesignPressure`, `DesignTemp`) VALUES
('Convection Tubes', '', '1 1/4 Cr - 1/2 Mo', 'Acid Brick', '3', '0.02', '20', '30', '1', '20'),
('Light S.R Naphtha Piping', '', '04-03-052', '304 SS Clad', '2', '0.02', '30', '20', '1', '30'),
('LPG Piping', '', '1.4941 (Type 321 SS)', 'Acid Brick', '2', '0.02', '30', '20', '1', '30'),
('Naphtha Trays', '', '1 1/4 Cr - 1/2 Mo', '304SS', '3', '0.03', '40', '30', '1', '30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_component_damage`
--

CREATE TABLE IF NOT EXISTS `tbl_component_damage` (
  `Fluid` varchar(100) NOT NULL,
  `CAINL_gas_a` varchar(45) DEFAULT NULL,
  `CAINL_gas_b` varchar(45) DEFAULT NULL,
  `CAINL_liquip_a` varchar(45) DEFAULT NULL,
  `CAINL_liquip_b` varchar(45) DEFAULT NULL,
  `CAIL_gas_a` varchar(45) DEFAULT NULL,
  `CAIL_gas_b` varchar(45) DEFAULT NULL,
  `CAIL_liquip_a` varchar(45) DEFAULT NULL,
  `CAIL_liquip_b` varchar(45) DEFAULT NULL,
  `IAINL_gas_a` varchar(45) DEFAULT NULL,
  `IAINL_gas_b` varchar(45) DEFAULT NULL,
  `IAINL_liquip_a` varchar(45) DEFAULT NULL,
  `IAINL_liquip_b` varchar(45) DEFAULT NULL,
  `IAIL_gas_a` varchar(45) DEFAULT NULL,
  `IAIL_gas_b` varchar(45) DEFAULT NULL,
  `IAIL_liquip_a` varchar(45) DEFAULT NULL,
  `IAIL_liquip_b` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_component_damage`
--

INSERT INTO `tbl_component_damage` (`Fluid`, `CAINL_gas_a`, `CAINL_gas_b`, `CAINL_liquip_a`, `CAINL_liquip_b`, `CAIL_gas_a`, `CAIL_gas_b`, `CAIL_liquip_a`, `CAIL_liquip_b`, `IAINL_gas_a`, `IAINL_gas_b`, `IAINL_liquip_a`, `IAINL_liquip_b`, `IAIL_gas_a`, `IAIL_gas_b`, `IAIL_liquip_a`, `IAIL_liquip_b`) VALUES
('Aromatics', '17.87', '1.097', '103.0', '1.00', '374.5', '1.055', '', '', '11.46', '0.667', '70.12', '1.00', '512.6', '0.713', '701.2', '1.00'),
('C1-C2', '43.0', '0.98', '', '', '280.0', '0.95', '', '', '41.0', '0.67', '', '', '1079', '0.62', '', ''),
('C13-C16', '', '', '64.0', '0.90', '', '', '1023', '0.92', '', '', '0.46', '0.88', '', '', '9.2', '0.88'),
('C17-C25', '', '', '20.0', '0.90', '', '', '861.0', '0.92', '', '', '0.11', '0.91', '', '', '5.6', '0.91'),
('C25+', '', '', '11.0', '0.91', '', '', '544.0', '0.90', '', '', '0.03', '0.99', '', '', '1.4', '0.99'),
('C3-C4', '49.48', '1.00', '', '', '313.6', '1.00', '', '', '27.96', '0.72', '', '', '522.9', '0.63', '', ''),
('C5', '25.17', '0.99', '536.0', '0.89', '304.7', '1.00', '', '', '13.38', '0.73', '1.49', '0.85', '275.0', '0.61', '', ''),
('C6-C8', '29.0', '0.98', '182.0', '0.89', '312.4', '1.00', '525.0', '0.95', '13.98', '0.66', '4.35', '0.78', '275.7', '0.61', '57.0', '0.55'),
('C9-C12', '12.0', '0.98', '130.0', '0.90', '391.0', '0.95', '560.0', '0.95', '7.1', '0.66', '3.3', '0.76', '281.0', '0.61', '6.0', '0.53'),
('CO', '0.107', '1.752', '', '', '', '', '', '', '69.68', '0.667', '', '', '', '', '', ''),
('DEE', '39.84', '1.134', '737.4', '1.106', '320.7', '1.033', '6289', '0.649', '155.7', '0.667', '5.105', '0.919', '', '', '5.672', '0.919'),
('EE', '12.62', '1.005', '173.1', '1.00', '', '', '', '', '38.87', '0.667', '72.21', '1.00', '', '', '', ''),
('EEA', '0.002', '1.035', '117.0', '1.00', '', '', '', '', '8.014', '0.667', '69.0', '1.00', '', '', '', ''),
('EG', '7.721', '0.973', '108.0', '1.00', '', '', '', '', '6.525', '0.667', '69.0', '1.00', '', '', '', ''),
('EO', '31.03', '1.069', '', '', '', '', '', '', '136.3', '0.667', '', '', '', '', '', ''),
('H2', '64.5', '0.992', '', '', '420.0', '1.00', '', '', '61.5', '0.657', '', '', '1430', '0.618', '', ''),
('H2S', '32.0', '1.00', '', '', '203.0', '0.89', '', '', '148.0', '0.63', '', '', '357.0', '0.61', '', ''),
('HF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Methanol', '0.026', '0.909', '1751', '0.934', '', '', '', '', '28.11', '0.667', '1.919', '0.900', '', '', '', ''),
('PO', '14.62', '1.114', '1295', '0.960', '', '', '', '', '65.58', '0.667', '3.404', '0.869', '', '', '', ''),
('Pyrophoric', '12.0', '0.98', '130.0', '0.90', '391.0', '0.95', '560.0', '0.95', '7.1', '0.66', '3.3', '0.76', '281.0', '0.61', '6.0', '0.53'),
('Styrene', '17.87', '1.097', '103.0', '1.00', '374.5', '1.055', '', '', '11.46', '0.667', '70.12', '1.00', '512.6', '0.713', '701.2', '1.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_component_damage_cost`
--

CREATE TABLE IF NOT EXISTS `tbl_component_damage_cost` (
  `EquipmentType` varchar(100) NOT NULL,
  `ComponentType` varchar(45) NOT NULL,
  `Small` varchar(45) DEFAULT NULL,
  `Medium` varchar(45) DEFAULT NULL,
  `Large` varchar(45) DEFAULT NULL,
  `Rupture` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_component_damage_cost`
--

INSERT INTO `tbl_component_damage_cost` (`EquipmentType`, `ComponentType`, `Small`, `Medium`, `Large`, `Rupture`) VALUES
('Compressor', 'COMPC', '10000', '20000', '100000', '300000'),
('Compressor', 'COMPR', '5000', '10000', '50000', '100000'),
('Heat Exchanger', 'HEXSS', '1000', '2000', '20000', '60000'),
('Heat Exchanger', 'HEXTS', '1000', '2000', '20000', '60000'),
('Heat Exchanger', 'HEXTUBE', '1000', '2000', '20000', '60000'),
('Pipe', 'PIPE-1', '5', '0', '0', '20'),
('Pipe', 'PIPE-10', '5', '40', '80', '240'),
('Pipe', 'PIPE-12', '5', '60', '120', '360'),
('Pipe', 'PIPE-16', '5', '80', '160', '500'),
('Pipe', 'PIPE-2', '5', '0', '0', '40'),
('Pipe', 'PIPE-4', '5', '10', '0', '60'),
('Pipe', 'PIPE-6', '5', '20', '0', '120'),
('Pipe', 'PIPE-8', '5', '30', '60', '180'),
('Pipe', 'PIPEGT16', '10', '120', '240', '700'),
('Pump', 'PUMP1S', '1000', '2500', '5000', '5000'),
('Pump', 'PUMP2S', '1000', '2500', '5000', '5000'),
('Pump', 'PUMPR', '1000', '2500', '5000', '10000'),
('Tank650', 'COURSE-1', '5000', '12000', '20000', '40000'),
('Tank650', 'COURSE-10', '5000', '12000', '20000', '40000'),
('Tank650', 'COURSE-2', '5000', '12000', '20000', '40000'),
('Tank650', 'COURSE-3', '5000', '12000', '20000', '40000'),
('Tank650', 'COURSE-4', '5000', '12000', '20000', '40000'),
('Tank650', 'COURSE-5', '5000', '12000', '20000', '40000'),
('Tank650', 'COURSE-6', '5000', '12000', '20000', '40000'),
('Tank650', 'COURSE-7', '5000', '12000', '20000', '40000'),
('Tank650', 'COURSE-8', '5000', '12000', '20000', '40000'),
('Tank650', 'COURSE-9', '5000', '12000', '20000', '40000'),
('Tank650', 'TANKBOTTOM', '5000', '0', '0', '120000'),
('Vessel/FinFan', 'COLBTM', '10000', '25000', '50000', '100000'),
('Vessel/FinFan', 'COLMID', '10000', '25000', '50000', '100000'),
('Vessel/FinFan', 'COLTOP', '10000', '25000', '50000', '100000'),
('Vessel/FinFan', 'DRUM', '5000', '12000', '20000', '40000'),
('Vessel/FinFan', 'FILTER', '1000', '2000', '4000', '10000'),
('Vessel/FinFan', 'FINFAN', '1000', '2000', '20000', '60000'),
('Vessel/FinFan', 'KODRUM', '5000', '12000', '20000', '40000'),
('Vessel/FinFan', 'REACTOR', '10000', '24000', '40000', '80000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_component_damage_personel`
--

CREATE TABLE IF NOT EXISTS `tbl_component_damage_personel` (
  `Fluid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CAINL_gas_a` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CAINL_gas_b` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CAINL_liquid_a` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CAINL_liquid_b` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CAIL_gas_a` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CAIL_gas_b` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CAIL_liquid_a` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CAIL_liquid_b` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IAINL_gas_a` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IAINL_gas_b` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IAINL_liquid_a` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IAINL_liquid_b` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IAIL_gas_a` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IAIL_gas_b` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IAIL_liquid_a` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IAIL_liquid_b` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_component_damage_personel`
--

INSERT INTO `tbl_component_damage_personel` (`Fluid`, `CAINL_gas_a`, `CAINL_gas_b`, `CAINL_liquid_a`, `CAINL_liquid_b`, `CAIL_gas_a`, `CAIL_gas_b`, `CAIL_liquid_a`, `CAIL_liquid_b`, `IAINL_gas_a`, `IAINL_gas_b`, `IAINL_liquid_a`, `IAINL_liquid_b`, `IAIL_gas_a`, `IAIL_gas_b`, `IAIL_liquid_a`, `IAIL_liquid_b`) VALUES
('Aromatics', '64.14', '0.963', '353.5', '0.883', '1344', '0.937', '487.7', '0.268', '18.08', '0.686', '0.14', '0.935', '512.6', '0.713', '1.404', '0.935'),
('C1-C2', '110.0', '0.96', '', '', '745.0', '0.92', '', '', '79.0', '0.67', '', '', '3100', '0.63', '', ''),
('C13-C16', '', '', '183.0', '0.98', '', '', '2850', '0.90', '', '', '1.3', '0.88', '', '', '26.0', '0.88'),
('C17-C25', '', '', '57.0', '0.89', '', '', '2420', '0.90', '', '', '0.32', '0.91', '', '', '16.0', '0.91'),
('C25+', '', '', '33.0', '0.89', '', '', '1604', '0.90', '', '', '0.081', '0.99', '', '', '4.1', '0.99'),
('C3-C4', '125.2', '1.00', '', '', '836.7', '1.00', '', '', '57.72', '0.75', '', '', '1769', '0.63', '', ''),
('C5', '62.05', '1.00', '1545', '0.89', '811.0', '1.00', '', '', '28.45', '0.76', '4.34', '0.85', '959.6', '0.63', '', ''),
('C6-C8', '68.0', '0.96', '516.0', '0.89', '828.7', '1.00', '1315', '0.92', '26.72', '0.67', '12.7', '0.78', '962.8', '0.63', '224.0', '0.54'),
('C9-C12', '29.0', '0.96', '373.0', '0.89', '981.0', '0.92', '1401', '0.92', '13.0', '0.66', '9.5', '0.76', '988.0', '0.63', '20.0', '0.54'),
('CO  ', '27.0', '0.991', '', '', '', '', '', '', '105.3', '0.692', '', '', '', '', '', ''),
('DEE', '128.1', '1.025', '971.9', '1.219', '1182', '0.997', '2658', '0.864', '199.1', '0.682', '47.13', '0.814', '821.7', '0.657', '52.36', '0.814'),
('EE', '35.56', '0.969', '46.56', '0.800', '', '', '', '', '162.0', '0.660', '0.152', '0.927', '', '', '', ''),
('EEA', '0.017', '0.946', '443.1', '0.835', '', '', '', '', '11.41', '0.687', '0.153', '0.924', '', '', '', ''),
('EG', '25.67', '0.947', '324.7', '0.869', '', '', '', '', '8.971', '0.687', '0.138', '0.922', '', '', '', ''),
('EO', '49.43', '1.105', '', '', '', '', '', '', '2200.8', '0.665', '', '', '', '', '', ''),
('H2', '165.0', '0.933', '', '', '1117', '1.00', '', '', '118.5', '0.652', '', '', '4193', '0.621', '', ''),
('H2S', '52.0', '1.00', '', '', '375.0', '0.94', '', '', '271.0', '0.63', '', '', '1253', '0.63', '', ''),
('HF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Methanol', '0.016', '1.008', '4484', '0.902', '', '', '', '', '105.3', '0.692', '', '', '', '', '', ''),
('PO', '38.76', '1.047', '1955', '0.840', '', '', '', '', '83.68', '0.682', '15.21', '0.834', '', '', '', ''),
('Pyrophoric', '29.0', '0.96', '373.0', '0.89', '981.0', '0.92', '1401', '0.92', '13.0', '0.66', '9.5', '0.76', '988.0', '0.63', '20.0', '0.54'),
('Styrene', '64.14', '0963', '353.5', '0.883', '1344', '0.937', '487.7', '0.268', '18.08', '0.686', '0.14', '0.935', '512.6', '0.713', '1.404', '0.935');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_continuous_gas_liquip`
--

CREATE TABLE IF NOT EXISTS `tbl_continuous_gas_liquip` (
  `Chemical` varchar(100) NOT NULL,
  `ContinuousReleasesDuration` varchar(45) NOT NULL,
  `Gas_e` varchar(45) DEFAULT NULL,
  `Gas_f` varchar(45) DEFAULT NULL,
  `Liquip_e` varchar(45) DEFAULT NULL,
  `Liquip_f` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_continuous_gas_liquip`
--

INSERT INTO `tbl_continuous_gas_liquip` (`Chemical`, `ContinuousReleasesDuration`, `Gas_e`, `Gas_f`, `Liquip_e`, `Liquip_f`) VALUES
('Aluminum Chloride (AlCl3)', 'All', '17.663', '0.9411', NULL, NULL),
('Carbon Monoxide (CO)', '10', '834.48', '1.13', NULL, NULL),
('Carbon Monoxide (CO)', '20', '2915.9', '1.11', NULL, NULL),
('Carbon Monoxide (CO)', '3', '41.412', '1.15', NULL, NULL),
('Carbon Monoxide (CO)', '40', '5346.8', '1.17', NULL, NULL),
('Carbon Monoxide (CO)', '5', '279.79', '1.06', NULL, NULL),
('Carbon Monoxide (CO)', '60', '6293.7', '1.21', NULL, NULL),
('Hydrogen Chloride (HCl)', '10', '2397.5', '1.10', NULL, NULL),
('Hydrogen Chloride (HCl)', '20', '950.91', '1.18', NULL, NULL),
('Hydrogen Chloride (HCl)', '3', '215.48', '1.09', NULL, NULL),
('Hydrogen Chloride (HCl)', '40', '3963.7', '1.20', NULL, NULL),
('Hydrogen Chloride (HCl)', '5', '536.28', '1.15', NULL, NULL),
('Hydrogen Chloride (HCl)', '60', '8625.1', '1.23', NULL, NULL),
('Nitric Acid', '10', '96325', '1.24', '12453', '1.06'),
('Nitric Acid', '20', '126942', '1.23', '19149', '1.06'),
('Nitric Acid', '3', '53013', '1.25', '5110.0', '1.08'),
('Nitric Acid', '40', '146941', '1.22', '31145', '1.06'),
('Nitric Acid', '5', '68700', '1.25', '9640.8', '1.02'),
('Nitric Acid', '60', '156345', '1.22', '41999', '1.12'),
('Nitrogen Dioxide (NO2)', '10', '11965', '0.68', '6194.4', '1.07'),
('Nitrogen Dioxide (NO2)', '20', '14248', '0.72', '13843', '1.08'),
('Nitrogen Dioxide (NO2)', '3', '6633.1', '0.70', '2132.9', '0.98'),
('Nitrogen Dioxide (NO2)', '40', '22411', '0.70', '27134', '1.12'),
('Nitrogen Dioxide (NO2)', '5', '9221.4', '0.68', '2887.0', '1.04'),
('Nitrogen Dioxide (NO2)', '60', '24994', '0.71', '41657', '1.13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dfb_thin`
--

CREATE TABLE IF NOT EXISTS `tbl_dfb_thin` (
  `art` varchar(45) NOT NULL,
  `E` varchar(45) DEFAULT NULL,
  `insp` varchar(45) NOT NULL,
  `D` varchar(45) DEFAULT NULL,
  `C` varchar(45) DEFAULT NULL,
  `B` varchar(45) DEFAULT NULL,
  `A` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dfb_thin`
--

INSERT INTO `tbl_dfb_thin` (`art`, `E`, `insp`, `D`, `C`, `B`, `A`) VALUES
('0.02', '1', '1', '1', '1', '1', '1'),
('0.02', '1', '2', '1', '1', '1', '1'),
('0.02', '1', '3', '1', '1', '1', '1'),
('0.02', '1', '4', '1', '1', '1', '1'),
('0.02', '1', '5', '1', '1', '1', '1'),
('0.02', '1', '6', '1', '1', '1', '1'),
('0.04', '1', '1', '1', '1', '1', '1'),
('0.04', '1', '2', '1', '1', '1', '1'),
('0.04', '1', '3', '1', '1', '1', '1'),
('0.04', '1', '4', '1', '1', '1', '1'),
('0.04', '1', '5', '1', '1', '1', '1'),
('0.04', '1', '6', '1', '1', '1', '1'),
('0.06', '1', '1', '1', '1', '1', '1'),
('0.06', '1', '2', '1', '1', '1', '1'),
('0.06', '1', '3', '1', '1', '1', '1'),
('0.06', '1', '4', '1', '1', '1', '1'),
('0.06', '1', '5', '1', '1', '1', '1'),
('0.06', '1', '6', '1', '1', '1', '1'),
('0.08', '1', '1', '1', '1', '1', '1'),
('0.08', '1', '2', '1', '1', '1', '1'),
('0.08', '1', '3', '1', '1', '1', '1'),
('0.08', '1', '4', '1', '1', '1', '1'),
('0.08', '1', '5', '1', '1', '1', '1'),
('0.08', '1', '6', '1', '1', '1', '1'),
('0.10', '2', '1', '2', '1', '1', '1'),
('0.10', '2', '2', '1', '1', '1', '1'),
('0.10', '2', '3', '1', '1', '1', '1'),
('0.10', '2', '4', '1', '1', '1', '1'),
('0.10', '2', '5', '1', '1', '1', '1'),
('0.10', '2', '6', '1', '1', '1', '1'),
('0.12', '6', '1', '5', '3', '2', '1'),
('0.12', '6', '2', '4', '2', '1', '1'),
('0.12', '6', '3', '3', '1', '1', '1'),
('0.12', '6', '4', '2', '1', '1', '1'),
('0.12', '6', '5', '2', '1', '1', '1'),
('0.12', '6', '6', '1', '1', '1', '1'),
('0.14', '20', '1', '17', '10', '6', '1'),
('0.14', '20', '2', '13', '6', '1', '1'),
('0.14', '20', '3', '10', '3', '1', '1'),
('0.14', '20', '4', '7', '2', '1', '1'),
('0.14', '20', '5', '5', '1', '1', '1'),
('0.14', '20', '6', '4', '1', '1', '1'),
('0.16', '90', '1', '70', '50', '20', '3'),
('0.16', '90', '2', '50', '20', '4', '1'),
('0.16', '90', '3', '40', '10', '1', '1'),
('0.16', '90', '4', '30', '5', '1', '1'),
('0.16', '90', '5', '20', '2', '1', '1'),
('0.16', '90', '6', '14', '1', '1', '1'),
('0.18', '250', '1', '200', '130', '70', '7'),
('0.18', '250', '2', '170', '70', '10', '1'),
('0.18', '250', '3', '130', '35', '3', '1'),
('0.18', '250', '4', '100', '15', '1', '1'),
('0.18', '250', '5', '70', '7', '1', '1'),
('0.18', '250', '6', '50', '3', '1', '1'),
('0.20', '400', '1', '300', '210', '110', '15'),
('0.20', '400', '2', '290', '120', '20', '1'),
('0.20', '400', '3', '260', '60', '5', '1'),
('0.20', '400', '4', '180', '20', '2', '1'),
('0.20', '400', '5', '120', '10', '1', '1'),
('0.20', '400', '6', '100', '6', '1', '1'),
('0.25', '520', '1', '450', '290', '150', '20'),
('0.25', '520', '2', '350', '170', '30', '2'),
('0.25', '520', '3', '240', '80', '6', '1'),
('0.25', '520', '4', '200', '30', '2', '1'),
('0.25', '520', '5', '150', '15', '2', '1'),
('0.25', '520', '6', '120', '7', '1', '1'),
('0.30', '650', '1', '550', '400', '200', '30'),
('0.30', '650', '2', '400', '200', '40', '4'),
('0.30', '650', '3', '320', '110', '9', '2'),
('0.30', '650', '4', '240', '50', '4', '2'),
('0.30', '650', '5', '180', '25', '3', '2'),
('0.30', '650', '6', '150', '10', '2', '2'),
('0.35', '750', '1', '650', '550', '300', '80'),
('0.35', '750', '2', '600', '300', '80', '10'),
('0.35', '750', '3', '540', '150', '20', '5'),
('0.35', '750', '4', '440', '90', '10', '4'),
('0.35', '750', '5', '350', '70', '6', '4'),
('0.35', '750', '6', '280', '40', '5', '4'),
('0.40', '900', '1', '800', '700', '400', '130'),
('0.40', '900', '2', '700', '400', '120', '30'),
('0.40', '900', '3', '600', '200', '50', '10'),
('0.40', '900', '4', '500', '140', '20', '8'),
('0.40', '900', '5', '400', '110', '10', '8'),
('0.40', '900', '6', '350', '90', '9', '8'),
('0.45', '1050', '1', '900', '810', '500', '200'),
('0.45', '1050', '2', '800', '500', '160', '40'),
('0.45', '1050', '3', '700', '270', '60', '20'),
('0.45', '1050', '4', '600', '200', '30', '15'),
('0.45', '1050', '5', '500', '160', '20', '15'),
('0.45', '1050', '6', '400', '130', '20', '15'),
('0.50', '1200', '1', '1100', '970', '600', '270'),
('0.50', '1200', '2', '1000', '600', '200', '60'),
('0.50', '1200', '3', '900', '380', '80', '40'),
('0.50', '1200', '4', '800', '270', '50', '40'),
('0.50', '1200', '5', '700', '210', '40', '40'),
('0.50', '1200', '6', '600', '180', '40', '40'),
('0.55', '1350', '1', '1200', '1130', '700', '350'),
('0.55', '1350', '2', '1100', '750', '300', '100'),
('0.55', '1350', '3', '1000', '500', '130', '90'),
('0.55', '1350', '4', '900', '350', '100', '90'),
('0.55', '1350', '5', '800', '260', '90', '90'),
('0.55', '1350', '6', '700', '240', '90', '90'),
('0.60', '1500', '1', '1400', '1250', '850', '500'),
('0.60', '1500', '2', '1300', '900', '400', '230'),
('0.60', '1500', '3', '1200', '620', '250', '210'),
('0.60', '1500', '4', '1000', '450', '220', '210'),
('0.60', '1500', '5', '900', '360', '210', '210'),
('0.60', '1500', '6', '800', '300', '210', '210'),
('0.65', '1900', '1', '1700', '1400', '1000', '700'),
('0.65', '1900', '2', '1600', '1105', '670', '530'),
('0.65', '1900', '3', '1300', '880', '550', '500'),
('0.65', '1900', '4', '1200', '700', '530', '500'),
('0.65', '1900', '5', '1100', '840', '500', '500'),
('0.65', '1900', '6', '1000', '600', '500', '500');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dtb_properties`
--

CREATE TABLE IF NOT EXISTS `tbl_dtb_properties` (
  `calculatorDate` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ageTK` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Trd` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `T` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tmin` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InstallDate` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CrB` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InspEff` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numOfInsp` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fps` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  ` Fip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CA` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelInsp` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Crcm` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Crbm` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fom` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fdl` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fwd` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fam` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fsm` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipmentforrbi`
--

CREATE TABLE IF NOT EXISTS `tbl_equipmentforrbi` (
  `UnitCode` varchar(45) NOT NULL,
  `UnitName` varchar(45) NOT NULL,
  `ProcessSystem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_equipmentforrbi`
--

INSERT INTO `tbl_equipmentforrbi` (`UnitCode`, `UnitName`, `ProcessSystem`) VALUES
('04', 'Ammonia', 6),
('07', 'Granulation', 1),
('20', 'Raw Water Purification and Demineralization', 2),
('21', 'Circulating Cooling Water System', 1),
('26', 'Waste water stripping system', 1),
('29', 'Steam Generation', 3),
('31', 'Instrument & Service and Nitrogen Air System', 1),
('40', 'Liquid Ammonia Storage and Refrigeration', 1),
('41', 'Natural gas distribution system', 1),
('51', 'Flare system', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipmentlist`
--

CREATE TABLE IF NOT EXISTS `tbl_equipmentlist` (
  `ItemNo` varchar(45) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Qty` varchar(45) NOT NULL,
  `SemiQualitative` varchar(45) NOT NULL,
  `Quanlitative` varchar(45) DEFAULT NULL,
  `ProcessStream` varchar(45) DEFAULT NULL,
  `Pressure` varchar(45) DEFAULT NULL,
  `PHA` varchar(45) DEFAULT NULL,
  `Business` varchar(45) DEFAULT NULL,
  `ProcessStreamFluid` varchar(45) DEFAULT NULL,
  `OperatingPressure` varchar(45) NOT NULL,
  `PHARating` varchar(45) DEFAULT NULL,
  `BusinessLossValue` varchar(45) DEFAULT NULL,
  `EquipmentGroup` varchar(45) DEFAULT NULL,
  `Type` varchar(45) DEFAULT NULL,
  `EquipmentDescription` varchar(200) DEFAULT NULL,
  `tbl_equipmentforrbi_UnitCode` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_equipmentlist`
--

INSERT INTO `tbl_equipmentlist` (`ItemNo`, `Name`, `Qty`, `SemiQualitative`, `Quanlitative`, `ProcessStream`, `Pressure`, `PHA`, `Business`, `ProcessStreamFluid`, `OperatingPressure`, `PHARating`, `BusinessLossValue`, `EquipmentGroup`, `Type`, `EquipmentDescription`, `tbl_equipmentforrbi_UnitCode`) VALUES
('E04201', 'Feed Gas/steam Preheater', '1', '1', '1', 'Y', 'Y', 'Y', 'Y', '12', '3580', '1', '1', NULL, NULL, NULL, ''),
('E04202-1', 'Process Air Preheater', '1', '1', '1', 'N', 'Y', 'Y', 'Y', '12', '3210', '1', '1', NULL, NULL, NULL, ''),
('E04202-2', 'Process Air Preheater', '1', '1', '1', 'Y', 'Y', 'Y', 'Y', '12', '3260', '1', '1', NULL, NULL, NULL, ''),
('E04203-1', 'Steam Superheater', '1', '1', '1', 'Y', 'Y', 'Y', 'Y', '12', '11290', '1', '1', NULL, NULL, NULL, ''),
('E04203-2', 'Steam Superheater', '1', '1', '1', 'N', 'Y', 'Y', 'Y', '12', '11590', '1', '1', NULL, NULL, NULL, ''),
('E04204-1', 'Feed Gas Preheater', '1', '1', '1', 'Y', 'Y', 'Y', 'Y', '12', '3870', '1', '1', NULL, NULL, NULL, ''),
('E04204-2', 'Feed Gas Preheater', '1', '1', '1', 'Y', 'Y', 'Y', 'Y', '12', '3890', '1', '1', NULL, NULL, NULL, ''),
('E04204-3', 'Feed Gas Preheater', '1', '1', '1', 'Y', 'Y', 'Y', 'Y', '12', '3900', '1', '1', NULL, NULL, NULL, ''),
('E04205', 'BFW Preheater', '1', '1', '1', 'Y', 'Y', 'Y', 'Y', '12', '12300', '1', '1', NULL, NULL, NULL, ''),
('E04208', 'Waste Heat Boiler NO.1', '1', '1', '1', 'Y', 'Y', 'Y', 'Y', '12', '3450 - 13000', '1', '1', NULL, NULL, NULL, ''),
('E04209', 'Steam Superheater', '1', '1', '1', 'Y', 'Y', 'Y', 'Y', '12', '3450 - 13000', '1', '1', NULL, NULL, NULL, ''),
('E04217', 'Feed and Fuel Preheater', '1', '1', '1', 'Y', 'Y', 'Y', 'Y', '12', '4600', '1', '1', NULL, NULL, NULL, ''),
('E04421', 'Process Air Compressor 1st stage Cooler', '1', '1', '1', 'Y', 'Y', 'Y', 'Y', 'Air + water', '500', '1', '1', NULL, NULL, NULL, ''),
('E04422', 'Process Air Compressor 2nd stage Cooler', '1', '1', '1', 'Y', 'Y', 'Y', 'Y', 'Air + water', '500', '1', '1', NULL, NULL, NULL, ''),
('E04423', 'Process Air Compressor 3rd stage Cooler', '1', '1', '1', 'Y', 'N', 'Y', 'Y', 'Air + water', '500-1000', '1', '1', NULL, NULL, NULL, ''),
('E04424', 'Process Air Compressor 4th inter-stage Cooler', '1', '1', '1', 'Y', 'N', 'Y', 'Y', 'Air + water', '500-2000', '1', '1', NULL, NULL, NULL, ''),
('F04201', 'Primary Reformer', '1', '1', '1', 'N', 'Y', '', '', 'Natural gas, Flash gas, off gas', '350', '1', '1', NULL, NULL, NULL, ''),
('R04201', 'Hydrogenator', '1', '1', '1', '', '', '', '', '', '4400', '1', '1', NULL, NULL, NULL, ''),
('R04202AB', 'Sulphur Absorber', '2', '2', '1', '', '', '', '', '', '4400', '1', '1', NULL, NULL, NULL, ''),
('R04203', 'Secondary Reformer', '1', '1', '1', '', '', '', '', '', '3500', '1', '1', NULL, NULL, NULL, ''),
('S04201', 'Steam Drum', '1', '1', '1', '', '', '', '', '', '11400', '1', '1', NULL, NULL, NULL, ''),
('S04421', 'Process Air Compressor 1st Separator', '1', '', '1', 'Y', 'Y', 'Y', 'Y', 'Water', '132', '1', '1', NULL, NULL, NULL, ''),
('S04422', 'Process Air Compressor 2nd Separator', '1', '', '1', 'Y', 'Y', 'Y', 'Y', 'Water', '362', '1', '', NULL, NULL, NULL, ''),
('S04423', 'Process Air Compressor 3rd Separator', '1', '1', '1', 'Y', 'N', 'Y', 'Y', 'Water', '902', '1', '', NULL, NULL, NULL, ''),
('S04424', 'Process Air Compressor 4th Separator', '1', '1', '1', 'Y', 'N', 'Y', 'Y', 'Water', '1960', '1', '', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipmenttemp`
--

CREATE TABLE IF NOT EXISTS `tbl_equipmenttemp` (
`STT` int(11) NOT NULL,
  `Plant` varchar(45) DEFAULT NULL,
  `OperingPressInlet` varchar(45) DEFAULT NULL,
  `OperTempInlet` varchar(45) DEFAULT NULL,
  `OperingPressOutlet` varchar(45) DEFAULT NULL,
  `OperTempOutlet` varchar(45) DEFAULT NULL,
  `TestPress` varchar(45) DEFAULT NULL,
  `MDMT` varchar(45) DEFAULT NULL,
  `InService` varchar(45) DEFAULT NULL,
  `ServiceDate` varchar(45) DEFAULT NULL,
  `LastInternalInspectionDate` varchar(45) DEFAULT NULL,
  `LDTBXHCovered` varchar(45) DEFAULT NULL,
  `Insulated` varchar(45) DEFAULT NULL,
  `PWHT` varchar(45) DEFAULT NULL,
  `InsulatedType` varchar(45) DEFAULT NULL,
  `OperatingState` varchar(45) DEFAULT NULL,
  `InventoryLiquip` varchar(45) DEFAULT NULL,
  `InventoryVapor` varchar(45) DEFAULT NULL,
  `InventoryTotal` varchar(45) DEFAULT NULL,
  `ConfidentInStreamAnalysis` varchar(45) DEFAULT NULL,
  `VaporDensityAir` varchar(45) DEFAULT NULL,
  `CorrosionInhibitor` varchar(45) DEFAULT NULL,
  `FrequentFeedChanged` varchar(45) DEFAULT NULL,
  `MajorChemicals` varchar(45) DEFAULT NULL,
  `Contaminants` varchar(45) DEFAULT NULL,
  `OnLineMonitoring` varchar(45) DEFAULT NULL,
  `CathodicProtection` varchar(45) DEFAULT NULL,
  `CorrosionMonitoring` varchar(45) DEFAULT NULL,
  `OHCalibUptodate` varchar(45) DEFAULT NULL,
  `DistFromFacility` varchar(45) DEFAULT NULL,
  `EquipCount` varchar(45) DEFAULT NULL,
  `HAZOPRating` varchar(45) DEFAULT NULL,
  `PersonalDensity` varchar(45) DEFAULT NULL,
  `MitigationEquip` varchar(45) DEFAULT NULL,
  `EnvRating` varchar(45) DEFAULT NULL,
  `InspTechUsed` varchar(45) DEFAULT NULL,
  `EquipModification` varchar(45) DEFAULT NULL,
  `InspectionFinding` varchar(45) DEFAULT NULL,
  `VaporDensity` varchar(45) DEFAULT NULL,
  `LiquipDensity` varchar(45) DEFAULT NULL,
  `Vapor` varchar(45) DEFAULT NULL,
  `Liquip` varchar(45) DEFAULT NULL,
  `HMBPFDNum` varchar(45) DEFAULT NULL,
  `PIDNum` varchar(45) DEFAULT NULL,
  `Service` varchar(45) DEFAULT NULL,
  `HMBStream` varchar(45) DEFAULT NULL,
  `CrackPresent` varchar(45) NOT NULL,
  `ProtectionBarrier` varchar(45) NOT NULL,
  `InternalLiner` varchar(45) NOT NULL,
  `CatalogThinning` varchar(45) NOT NULL,
  `NumberofInspection[lần]` varchar(45) NOT NULL,
  `CheckThinning` varchar(45) NOT NULL,
  `Cladding` varchar(45) NOT NULL,
  `InjectionPointFip` varchar(45) NOT NULL,
  `DeadLegsFdl` varchar(45) NOT NULL,
  `WeldedConstructionFwd` varchar(45) NOT NULL,
  `MaintenanceAccordanceFam` varchar(45) NOT NULL,
  `SettlementFsm` varchar(45) NOT NULL,
  `CorrosionRateforBaseMatel` varchar(45) NOT NULL,
  `CorrosionrateforCladding` varchar(45) NOT NULL,
  `ThicknessOfCompbasemetal` varchar(45) NOT NULL,
  `LinningType` varchar(45) NOT NULL,
  `LinningConditionAdjusmentFlc` varchar(45) NOT NULL,
  `YearInService` varchar(45) NOT NULL,
  `LevelCaustic` varchar(45) NOT NULL,
  `CatalogCaustic` varchar(45) NOT NULL,
  `LevelAmine` varchar(45) NOT NULL,
  `CatalogAmine` varchar(45) NOT NULL,
  `CatalogSulfide` varchar(45) NOT NULL,
  `pH` varchar(45) NOT NULL,
  `SulfideConcentration[ppm]` varchar(45) NOT NULL,
  `CatalogHIC/H2S` varchar(45) NOT NULL,
  `H2SConcentration[ppm]` varchar(45) NOT NULL,
  `CatalogCacbon` varchar(45) NOT NULL,
  `CacbonConcentration[ppm]` varchar(45) NOT NULL,
  `CatalogPTA` varchar(45) NOT NULL,
  `FunctionOfHeatTreatment` varchar(45) NOT NULL,
  `CatalogCLSCC` varchar(45) NOT NULL,
  `TemperatureOfpH` varchar(45) NOT NULL,
  `CloConcentration[ppm]` varchar(45) NOT NULL,
  `CatalogHF` varchar(45) NOT NULL,
  `HFpresent` varchar(45) NOT NULL,
  `BrinellHardness` varchar(45) NOT NULL,
  `CatalogHIC/HF` varchar(45) NOT NULL,
  `SulfurConcentration` varchar(45) NOT NULL,
  `Catalog ExtenalCorrosion` varchar(45) NOT NULL,
  `DriverExtend` varchar(45) NOT NULL,
  `CoatQuality` varchar(45) NOT NULL,
  `CatalogCUI` varchar(45) NOT NULL,
  `DriverCUI` int(45) NOT NULL,
  `CorrosionRateforCUI` varchar(45) NOT NULL,
  `Complexity` varchar(45) NOT NULL,
  `Insulation` varchar(45) NOT NULL,
  `AllowConfig` varchar(45) NOT NULL,
  `EnterSoil` varchar(45) NOT NULL,
  `InsulationType` varchar(45) NOT NULL,
  `CatalogExternalCLSCC` varchar(45) NOT NULL,
  `DriverExternalCLSCC` varchar(45) NOT NULL,
  `PipingComplexity` varchar(45) NOT NULL,
  `InsulationCondition` varchar(45) NOT NULL,
  `CatalogHTHA` varchar(45) NOT NULL,
  `AgeHTHA` varchar(45) NOT NULL,
  `TemperatureHTHA[*F]` varchar(45) NOT NULL,
  `HydrogenPartialPressure[MPa]` varchar(45) NOT NULL,
  `TempMinforBrittleFacture` varchar(45) NOT NULL,
  `TempUpsetforBrittleFacture` varchar(45) NOT NULL,
  `Temp BoilingforBrittleFacture` varchar(45) NOT NULL,
  `MinimumDesignMetalTemp` varchar(45) NOT NULL,
  `TempImpact` varchar(45) NOT NULL,
  `MaterialCurve` varchar(45) NOT NULL,
  `LowTemperature` varchar(45) NOT NULL,
  `SCE` varchar(45) NOT NULL,
  `ReferencTemperature` varchar(45) NOT NULL,
  `TempMinfor885` varchar(45) NOT NULL,
  `BrittleCheck` varchar(45) NOT NULL,
  `TempShutdown` varchar(45) NOT NULL,
  `PercentSigma` varchar(45) NOT NULL,
  `NoofPrFatigueFailures` varchar(45) NOT NULL,
  `SeverityofVibration` varchar(45) NOT NULL,
  `NoOfWeeks` varchar(45) NOT NULL,
  `CyclicType` varchar(45) NOT NULL,
  `CorrectiveActionsTake` varchar(45) NOT NULL,
  `TotalPipeFitting` varchar(45) NOT NULL,
  `TypeOfJointInThisPiping` varchar(45) NOT NULL,
  `ConditionOfPipe` varchar(45) NOT NULL,
  `BranchDiameter` varchar(45) NOT NULL,
  `tbl_equipmentlist_ItemNo` varchar(45) CHARACTER SET big5 DEFAULT NULL,
  `tbl_component_componentName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=498 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_equipmenttemp`
--

INSERT INTO `tbl_equipmenttemp` (`STT`, `Plant`, `OperingPressInlet`, `OperTempInlet`, `OperingPressOutlet`, `OperTempOutlet`, `TestPress`, `MDMT`, `InService`, `ServiceDate`, `LastInternalInspectionDate`, `LDTBXHCovered`, `Insulated`, `PWHT`, `InsulatedType`, `OperatingState`, `InventoryLiquip`, `InventoryVapor`, `InventoryTotal`, `ConfidentInStreamAnalysis`, `VaporDensityAir`, `CorrosionInhibitor`, `FrequentFeedChanged`, `MajorChemicals`, `Contaminants`, `OnLineMonitoring`, `CathodicProtection`, `CorrosionMonitoring`, `OHCalibUptodate`, `DistFromFacility`, `EquipCount`, `HAZOPRating`, `PersonalDensity`, `MitigationEquip`, `EnvRating`, `InspTechUsed`, `EquipModification`, `InspectionFinding`, `VaporDensity`, `LiquipDensity`, `Vapor`, `Liquip`, `HMBPFDNum`, `PIDNum`, `Service`, `HMBStream`, `CrackPresent`, `ProtectionBarrier`, `InternalLiner`, `CatalogThinning`, `NumberofInspection[lần]`, `CheckThinning`, `Cladding`, `InjectionPointFip`, `DeadLegsFdl`, `WeldedConstructionFwd`, `MaintenanceAccordanceFam`, `SettlementFsm`, `CorrosionRateforBaseMatel`, `CorrosionrateforCladding`, `ThicknessOfCompbasemetal`, `LinningType`, `LinningConditionAdjusmentFlc`, `YearInService`, `LevelCaustic`, `CatalogCaustic`, `LevelAmine`, `CatalogAmine`, `CatalogSulfide`, `pH`, `SulfideConcentration[ppm]`, `CatalogHIC/H2S`, `H2SConcentration[ppm]`, `CatalogCacbon`, `CacbonConcentration[ppm]`, `CatalogPTA`, `FunctionOfHeatTreatment`, `CatalogCLSCC`, `TemperatureOfpH`, `CloConcentration[ppm]`, `CatalogHF`, `HFpresent`, `BrinellHardness`, `CatalogHIC/HF`, `SulfurConcentration`, `Catalog ExtenalCorrosion`, `DriverExtend`, `CoatQuality`, `CatalogCUI`, `DriverCUI`, `CorrosionRateforCUI`, `Complexity`, `Insulation`, `AllowConfig`, `EnterSoil`, `InsulationType`, `CatalogExternalCLSCC`, `DriverExternalCLSCC`, `PipingComplexity`, `InsulationCondition`, `CatalogHTHA`, `AgeHTHA`, `TemperatureHTHA[*F]`, `HydrogenPartialPressure[MPa]`, `TempMinforBrittleFacture`, `TempUpsetforBrittleFacture`, `Temp BoilingforBrittleFacture`, `MinimumDesignMetalTemp`, `TempImpact`, `MaterialCurve`, `LowTemperature`, `SCE`, `ReferencTemperature`, `TempMinfor885`, `BrittleCheck`, `TempShutdown`, `PercentSigma`, `NoofPrFatigueFailures`, `SeverityofVibration`, `NoOfWeeks`, `CyclicType`, `CorrectiveActionsTake`, `TotalPipeFitting`, `TypeOfJointInThisPiping`, `ConditionOfPipe`, `BranchDiameter`, `tbl_equipmentlist_ItemNo`, `tbl_component_componentName`) VALUES
(494, 'CMFP', '1', '30', '1', '30', '1', '1', '0', '02/06/2020', '02/06/2017', '0', '0', '0', 'abb', 'Liquid', '1', '2', '4', '-1', '-1', '-1', '-1', '20', 'Chlorides (%)', '-1', '-1', '-1', '-1', '52', '1', '4', '1', 'av', 'A', 'Flux Leakage', '2', 'a', '12', '1', '34', 'a', '4', '6', '8', 'HMB Stream#', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL),
(495, 'CMFP', '1', '30', '1', '30', '1', '1', '0', '02/06/2020', '02/06/2017', '0', '0', '0', 'abb', 'Liquid', '3', '3', '4', '-1', '-1', '-1', '-1', '2', 'Caustic (%)', '-1', '-1', '-1', '-1', '52', '1', '4', '1', 'av', 'B', 'Flux Leakage', '5', 'a', '12', '1', '34', '5', '4', '6', '8', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL),
(496, 'CMFP', '1', '30', '1', '30', '1', '1', '0', '02/06/2020', '02/06/2017', '0', '0', '0', 'abb', 'Liquid', '3', '3', '4', '0', '0', '-1', '0', '2', 'Amine (%)', '-1', '-1', '-1', '-1', '52', '1', '4', '1', 'av', 'B', 'Flux Leakage', '5', 'a', '12', '1', '34', '5', '4', '6', '8', 'b', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL),
(497, 'CMFP', '1', '30', '1', '30', '1', '1', '0', '02/06/2020', '02/06/2017', '0', '0', '0', 'abb', 'Liquid', '3', '3', '4', '0', '0', '0', '-1', '2', 'Caustic Injection (Yes/No)', '-1', '-1', '-1', '-1', '52', '1', '4', '1', 'av', 'B', 'Flux Leakage', '5', 'a', '12', '1', '34', '5', '4', '6', '8', 'c', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipment_outage`
--

CREATE TABLE IF NOT EXISTS `tbl_equipment_outage` (
  `EquipmentType` varchar(100) NOT NULL,
  `ComponentType` varchar(45) NOT NULL,
  `Small` varchar(45) DEFAULT NULL,
  `Medium` varchar(45) DEFAULT NULL,
  `Large` varchar(45) DEFAULT NULL,
  `Rupture` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_equipment_outage`
--

INSERT INTO `tbl_equipment_outage` (`EquipmentType`, `ComponentType`, `Small`, `Medium`, `Large`, `Rupture`) VALUES
('Compressor', 'COMPC', '2', '3', '7', '14'),
('Compressor', 'COMPR', '2', '3', '7', '14'),
('Heat Exchanger', 'HEXSS', '0', '0', '0', '0'),
('Heat Exchanger', 'HEXTS', '0', '0', '0', '0'),
('Heat Exchanger', 'HEXTUBE', '0', '0', '0', '0'),
('Pipe', 'PIPE-1', '0', '0', '0', '1'),
('Pipe', 'PIPE-10', '0', '2', '3', '4'),
('Pipe', 'PIPE-12', '0', '3', '4', '4'),
('Pipe', 'PIPE-16', '0', '3', '4', '5'),
('Pipe', 'PIPE-2', '0', '0', '0', '1'),
('Pipe', 'PIPE-4', '0', '1', '0', '2'),
('Pipe', 'PIPE-6', '0', '1', '2', '3'),
('Pipe', 'PIPE-8', '0', '2', '3', '3'),
('Pipe', 'PIPEGT16', '1', '4', '5', '7'),
('Pump', 'PUMP1S', '0', '0', '0', '0'),
('Pump', 'PUMP2S', '0', '0', '0', '0'),
('Pump', 'PUMPR', '0', '0', '0', '0'),
('Tank650', 'COURSE-1', '2', '3', '3', '7'),
('Tank650', 'COURSE-10', '2', '3', '3', '7'),
('Tank650', 'COURSE-2', '2', '3', '3', '7'),
('Tank650', 'COURSE-3', '2', '3', '3', '7'),
('Tank650', 'COURSE-4', '2', '3', '3', '7'),
('Tank650', 'COURSE-5', '2', '3', '3', '7'),
('Tank650', 'COURSE-6', '2', '3', '3', '7'),
('Tank650', 'COURSE-7', '2', '3', '3', '7'),
('Tank650', 'COURSE-8', '2', '3', '3', '7'),
('Tank650', 'COURSE-9', '2', '3', '3', '7'),
('Tank650', 'TANKBOTTOM', '5', '0', '0', '50'),
('Vessel/FinFan', 'COLBTM', '2', '4', '5', '21'),
('Vessel/FinFan', 'COLMID', '2', '4', '5', '21'),
('Vessel/FinFan', 'COLTOP', '2', '4', '5', '21'),
('Vessel/FinFan', 'DRUM', '2', '3', '3', '7'),
('Vessel/FinFan', 'FILTER', '0', '1', '1', '1'),
('Vessel/FinFan', 'FINFAN', '0', '0', '0', '0'),
('Vessel/FinFan', 'KODRUM', '2', '3', '3', '7'),
('Vessel/FinFan', 'REACTOR', '4', '6', '6', '14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fluid_leak`
--

CREATE TABLE IF NOT EXISTS `tbl_fluid_leak` (
  `Fluid` varchar(100) NOT NULL,
  `MolecularWeight` varchar(45) DEFAULT NULL,
  `Density` varchar(45) DEFAULT NULL,
  `NBP` varchar(45) DEFAULT NULL,
  `Fract` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_fluid_leak`
--

INSERT INTO `tbl_fluid_leak` (`Fluid`, `MolecularWeight`, `Density`, `NBP`, `Fract`) VALUES
('Acid', '18', '62.3', '212', '0.90'),
('C1-C2', '23', '15.639', '-193', '1.00'),
('C13-C16', '205', '47.728', '502', '0.10'),
('C17-C25', '280', '48.383', '651', '0.05'),
('C25+', '422', '56.187', '981', '0.02'),
('C3-C5', '58', '36.209', '31', '1.00'),
('C6-C8', '100', '42.702', '210', '0.90'),
('C9-C12', '149', '45.823', '364', '0.50'),
('CO', '28', '50', '-312', '1.00'),
('DEE', '74', '45', '95', '1.00'),
('EE', '90', '58', '275', '0.75'),
('EEA', '132', '61', '313', '0.65'),
('EG', '62', '69', '387', '0.45'),
('EO', '44', '55', '51', '1.00'),
('H2', '2', '4.433', '-423', '1.00'),
('H2S', '34', '61.993', '-75', '1.00'),
('HCl', '36', '74', '-121', '1.00'),
('HF', '20', '60.37', '68', '1.00'),
('Methanol', '32', '50', '149', '1.00'),
('Nitric Acid', '63', '95', '250', '0.80'),
('NO2', '90', '58', '275', '0.75'),
('Phosgene', '99', '86', '181', '1.00'),
('PO', '58', '52', '93', '1.00'),
('Styrene', '104', '42.7', '293', '0.60'),
('TDI', '174', '76', '484', '0.15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gas_toxic`
--

CREATE TABLE IF NOT EXISTS `tbl_gas_toxic` (
  `Toxic` varchar(45) NOT NULL,
  `ContinuousReleasesDuration` varchar(45) NOT NULL,
  `a` varchar(45) DEFAULT NULL,
  `b` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gas_toxic`
--

INSERT INTO `tbl_gas_toxic` (`Toxic`, `ContinuousReleasesDuration`, `a`, `b`) VALUES
('Ammonia', '10', '3581', '1.181'),
('Ammonia', '15', '4459', '1.180'),
('Ammonia', '20', '5326', '1.178'),
('Ammonia', '25', '6180', '1.176'),
('Ammonia', '30', '7022', '1.174'),
('Ammonia', '35', '7852', '1.172'),
('Ammonia', '40', '8669', '1.169'),
('Ammonia', '45', '9475', '1.166'),
('Ammonia', '5', '2690', '1.183'),
('Ammonia', '50', '10268', '1.161'),
('Ammonia', '55', '11049', '1.155'),
('Ammonia', '60', '11817', '1.145'),
('Ammonia', 'Instantaneous Releases', '14.171', '0.9011'),
('Chlorine', '10', '15934', '1.095'),
('Chlorine', '15', '17242', '1.092'),
('Chlorine', '20', '19074', '1.089'),
('Chlorine', '25', '21430', '1.085'),
('Chlorine', '30', '24309', '1.082'),
('Chlorine', '35', '27712', '1.077'),
('Chlorine', '40', '31640', '1.072'),
('Chlorine', '45', '36090', '1.066'),
('Chlorine', '5', '15150', '1.097'),
('Chlorine', '50', '41065', '1.057'),
('Chlorine', '55', '46564', '1.046'),
('Chlorine', '60', '52586', '1.026'),
('Chlorine', 'Instantaneous Releases', '14.976', '1.177'),
('H2S', '10', '1.2410', '4.0948'),
('H2S', '20', '1.2370', '4.238'),
('H2S', '40', '1.2297', '4.3626'),
('H2S', '5', '1.2411', '3.9686'),
('H2S', '60', '1.2266', '4.4365'),
('H2S', 'Instantaneous Releases', '0.9674', '2.7840'),
('HF Acid', '10', '1.1031', '3.8431'),
('HF Acid', '20', '1.0816', '4.1040'),
('HF Acid', '40', '1.0942', '4.3295'),
('HF Acid', '5', '1.1401', '3.5683'),
('HF Acid', '60', '1.1031', '4.4576'),
('HF Acid', 'Instantaneous Releases', '1.4056', '33606');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gff`
--

CREATE TABLE IF NOT EXISTS `tbl_gff` (
  `equipmentType` varchar(100) NOT NULL,
  `componentType` varchar(100) NOT NULL,
  `gffTotal` double DEFAULT NULL,
  `small` double DEFAULT NULL,
  `medium` double DEFAULT NULL,
  `large` double DEFAULT NULL,
  `rupture` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gff`
--

INSERT INTO `tbl_gff` (`equipmentType`, `componentType`, `gffTotal`, `small`, `medium`, `large`, `rupture`) VALUES
('Vessel/FinFan', 'COLBTM', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Vessel/FinFan', 'COLMID', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Vessel/FinFan', 'COLTOP', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Compressor', 'COMPC', 0.00003, 0.000008, 0.00002, 0.000002, 0),
('Compressor', 'COMPR', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Tank650', 'COURSE-1', 0.0001, 0.00007, 0.00002, 0.000005, 0.0000001),
('Tank650', 'COURSE-10', 0.0001, 0.00007, 0.00002, 0.000005, 0.0000001),
('Tank650', 'COURSE-2', 0.0001, 0.00007, 0.00002, 0.000005, 0.0000001),
('Tank650', 'COURSE-3', 0.0001, 0.00007, 0.00002, 0.000005, 0.0000001),
('Tank650', 'COURSE-4', 0.0001, 0.00007, 0.00002, 0.000005, 0.0000001),
('Tank650', 'COURSE-5', 0.0001, 0.00007, 0.00002, 0.000005, 0.0000001),
('Tank650', 'COURSE-6', 0.0001, 0.00007, 0.00002, 0.000005, 0.0000001),
('Tank650', 'COURSE-7', 0.0001, 0.00007, 0.00002, 0.000005, 0.0000001),
('Tank650', 'COURSE-8', 0.0001, 0.00007, 0.00002, 0.000005, 0.0000001),
('Tank650', 'COURSE-9', 0.0001, 0.00007, 0.00002, 0.000005, 0.0000001),
('Vessel/FinFan', 'DRUM', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Vessel/FinFan', 'FILTER', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Vessel/FinFan', 'FINFAN', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Heat Exchanger', 'HEXSS', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Heat Exchanger', 'HEXTS', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Heat Exchanger', 'HEXTUBE', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Vessel/FinFan', 'KODRUM', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Pipe', 'PIPE-1', 0.0000306, 0.000028, 0, 0, 0.0000026),
('Pipe', 'PIPE-10', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Pipe', 'PIPE-12', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Pipe', 'PIPE-16', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Pipe', 'PIPE-2', 0.0000306, 0.000028, 0, 0, 0.0000026),
('Pipe', 'PIPE-4', 0.0000306, 0.000008, 0.00002, 0, 0.0000026),
('Pipe', 'PIPE-6', 0.0000306, 0.000008, 0.00002, 0, 0.0000026),
('Pipe', 'PIPE-8', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Pipe', 'PIPEGT16', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Pump', 'PUMP1S', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Pump', 'PUMP2S', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Pump', 'PUMPR', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Vessel/FinFan', 'REACTOR', 0.0000306, 0.000008, 0.00002, 0.000002, 0.0000006),
('Tank650', 'TANKBOTTOM', 0.00072, 0.00072, 0, 0, 0.000002);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inspectionplan`
--

CREATE TABLE IF NOT EXISTS `tbl_inspectionplan` (
  `System` varchar(45) DEFAULT NULL,
  `DamageMechanism` varchar(45) NOT NULL,
  `Method` varchar(45) NOT NULL,
  `Coverage` varchar(500) DEFAULT NULL,
  `Availability` varchar(45) DEFAULT NULL,
  `LastInspectionDate` varchar(45) DEFAULT NULL,
  `InspectionInterval` varchar(45) DEFAULT NULL,
  `DueDate` varchar(45) DEFAULT NULL,
  `tbl_equipmentlist_ItemNo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material_cost_factor`
--

CREATE TABLE IF NOT EXISTS `tbl_material_cost_factor` (
  `Materials` varchar(100) NOT NULL,
  `CostFactor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_material_cost_factor`
--

INSERT INTO `tbl_material_cost_factor` (`Materials`, `CostFactor`) VALUES
('1.25Cr-0.5Mo', '1.3'),
('2.25Cr-1Mo', '1.7'),
('304 SS', '3.2'),
('316 SS', '4.8'),
('405 SS', '2.8'),
('410 SS', '2.8'),
('5Cr-0.5Mo', '1.7'),
('70/30 Cu/Ni', '8.5'),
('7Cr-0.5Mo', '2.0'),
('90/10 Cu/Ni', '6.8'),
('904L', '8.8'),
('9Cr-1Mo', '2.6'),
('Alloy "B"', '36'),
('Alloy "C"', '29'),
('Alloy 20', '11'),
('Alloy 400', '15'),
('Alloy 600', '15'),
('Alloy 625', '26'),
('Alloy 800', '8.4'),
('Carbon Steel', '1.0'),
('Clad 304 SS', '2.1'),
('Clad 316 SS', '3.3'),
('Clad Alloy 400', '6.4'),
('Clad Alloy 600', '7.0'),
('Clad Nickel', '8.0'),
('CS "Saran" Lined', '3.4'),
('CS "Teflon" Lined', '7.8'),
('CS Glass Lined', '5.8'),
('CS Rubber Lined', '4.4'),
('Nickel', '18'),
('Polypropylene Lined (pp)', '2.5'),
('Tantalum', '535'),
('Titanium', '28'),
('Zirconium', '34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_properties_level1`
--

CREATE TABLE IF NOT EXISTS `tbl_properties_level1` (
  `Fluid` varchar(45) NOT NULL,
  `MW` varchar(45) DEFAULT NULL,
  `Density` varchar(45) DEFAULT NULL,
  `NBP` varchar(45) DEFAULT NULL,
  `Ambient` varchar(45) DEFAULT NULL,
  `ideal` varchar(45) DEFAULT NULL,
  `A` double DEFAULT NULL,
  `B` double DEFAULT NULL,
  `C` double DEFAULT NULL,
  `D` double DEFAULT NULL,
  `E` double DEFAULT NULL,
  `Auto` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_properties_level1`
--

INSERT INTO `tbl_properties_level1` (`Fluid`, `MW`, `Density`, `NBP`, `Ambient`, `ideal`, `A`, `B`, `C`, `D`, `E`, `Auto`) VALUES
('C1-C2', '23', '15.639', '-193', 'Gas', 'Node1', 12.3, 0.115, 0.0000287, -0.0000000013, 0, 1036),
('C3-C4', '51', '33.61', '-6.3', 'Gas', 'Node1', 2.632, 0.3188, -13470, 0.00000001466, 0, 696),
('C5', '72', '39.03', '97', 'Liquid', 'Node1', -3.626, 0.4873, -0.00026, 0.000000053, 0, 544);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rbi_question_score`
--

CREATE TABLE IF NOT EXISTS `tbl_rbi_question_score` (
  `table` int(11) NOT NULL,
  `No` varchar(45) NOT NULL,
  `score` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_rbi_question_score`
--

INSERT INTO `tbl_rbi_question_score` (`table`, `No`, `score`) VALUES
(1, '1', ''),
(1, '2a', ''),
(1, '2b', ''),
(1, '2c', ''),
(1, '2d', ''),
(1, '2e', ''),
(1, '3', ''),
(1, '4', ''),
(1, '5', ''),
(1, '6', ''),
(1, '6a', ''),
(1, '6b', ''),
(2, '1', ''),
(2, '10', ''),
(2, '1a', ''),
(2, '1b', ''),
(2, '2', ''),
(2, '3a', ''),
(2, '3b', ''),
(2, '3c', ''),
(2, '4', ''),
(2, '5', ''),
(2, '6', ''),
(2, '7a', ''),
(2, '7b', ''),
(2, '8a', ''),
(2, '8b', ''),
(2, '8c', ''),
(2, '8d', ''),
(2, '8e', ''),
(2, '8f', ''),
(2, '9', ''),
(3, '1', ''),
(3, '2', ''),
(3, '2a', ''),
(3, '2b', ''),
(3, '2c', ''),
(3, '2d', ''),
(3, '2e', ''),
(3, '3a', ''),
(3, '3b', ''),
(3, '3c', ''),
(3, '3d', ''),
(3, '3e', ''),
(3, '3f', ''),
(3, '3g', ''),
(3, '4a', ''),
(3, '4b', ''),
(3, '4c', ''),
(3, '4d', ''),
(3, '4e', ''),
(3, '5', ''),
(3, '5a', ''),
(3, '5b', ''),
(3, '6', ''),
(3, '7', ''),
(3, '8', ''),
(3, '9', ''),
(4, '1a', ''),
(4, '1b', ''),
(4, '2a', ''),
(4, '2b', ''),
(4, '2c', ''),
(4, '2d', ''),
(4, '3', ''),
(4, '3a', ''),
(4, '3b', ''),
(4, '4a', ''),
(4, '4b', ''),
(4, '4c', ''),
(4, '4d', ''),
(4, '4e', ''),
(4, '4f', ''),
(4, '4g', ''),
(4, '5', ''),
(4, '6', ''),
(5, '1a', ''),
(5, '1b', ''),
(5, '2a', ''),
(5, '2b', ''),
(5, '2c', ''),
(5, '2d', ''),
(5, '2e', ''),
(5, '2f', ''),
(5, '2g', ''),
(5, '2h', ''),
(5, '3a', ''),
(5, '3b', ''),
(5, '3c', ''),
(5, '4', ''),
(5, '5', ''),
(5, '6a', ''),
(5, '6b', ''),
(5, '6c', ''),
(5, '6d', ''),
(5, '7a', ''),
(5, '7b', ''),
(5, '7c', ''),
(5, '7d', ''),
(6, '1a', ''),
(6, '1b', ''),
(6, '1c', ''),
(6, '1d', ''),
(6, '1e', ''),
(6, '1f', ''),
(6, '1g', ''),
(6, '1h', ''),
(6, '1i', ''),
(6, '1j', ''),
(6, '2', ''),
(6, '3a', ''),
(6, '3b', ''),
(6, '3c', ''),
(6, '3d', ''),
(6, '3e', ''),
(6, '4', ''),
(6, '5', ''),
(6, '6a', ''),
(6, '6b', ''),
(6, '6c', ''),
(6, '6d', ''),
(6, '7a', ''),
(6, '7b', ''),
(6, '8a', ''),
(6, '8b', ''),
(7, '1', ''),
(7, '2', ''),
(7, '3a', ''),
(7, '3b', ''),
(7, '3c', ''),
(7, '3d', ''),
(7, '3e', ''),
(7, '3f', ''),
(7, '4a', ''),
(7, '4b', ''),
(7, '4c', ''),
(7, '4d', ''),
(7, '5a', ''),
(7, '5b', ''),
(7, '5c', ''),
(7, '6a', ''),
(7, '6b', ''),
(7, '6c', ''),
(7, '6d', ''),
(7, '6e', ''),
(7, '7', ''),
(7, '7a', ''),
(7, '8a', ''),
(7, '8b', ''),
(7, '8c', ''),
(7, '8d', ''),
(8, '10', ''),
(8, '10a', ''),
(8, '10b', ''),
(8, '11a', ''),
(8, '11b', ''),
(8, '12', ''),
(8, '13a', ''),
(8, '13b', ''),
(8, '14', ''),
(8, '15', ''),
(8, '16', ''),
(8, '16a', ''),
(8, '16b', ''),
(8, '16c', ''),
(8, '17a', ''),
(8, '17b', ''),
(8, '17c', ''),
(8, '17d', ''),
(8, '17e', ''),
(8, '18a', ''),
(8, '18b', ''),
(8, '18c', ''),
(8, '18d', ''),
(8, '18e', ''),
(8, '19', ''),
(8, '1a', ''),
(8, '1b', ''),
(8, '1c', ''),
(8, '1d', ''),
(8, '1e', ''),
(8, '2', ''),
(8, '20', ''),
(8, '2a', ''),
(8, '2b', ''),
(8, '2c', ''),
(8, '3', ''),
(8, '4', ''),
(8, '4a', ''),
(8, '4b', ''),
(8, '5', ''),
(8, '5a1', ''),
(8, '5a2', ''),
(8, '5b', ''),
(8, '5c', ''),
(8, '5d', ''),
(8, '6a', ''),
(8, '6b', ''),
(8, '7', ''),
(8, '8a', ''),
(8, '8b', ''),
(8, '9a', ''),
(8, '9b', ''),
(9, '1', ''),
(9, '2', ''),
(9, '3', ''),
(9, '3a', ''),
(9, '3b', ''),
(9, '4a', ''),
(9, '4b', ''),
(9, '4c', ''),
(9, '5', ''),
(10, '1', ''),
(10, '2', ''),
(10, '2a', ''),
(10, '2b', ''),
(10, '3a', ''),
(10, '3b', ''),
(10, '3c', ''),
(10, '3d', ''),
(10, '3e', ''),
(10, '3f', ''),
(10, '3g', ''),
(10, '3h', ''),
(10, '3i', ''),
(10, '4', ''),
(10, '4a', ''),
(10, '4b', ''),
(10, '4c', ''),
(10, '5a', ''),
(10, '5b', ''),
(10, '6', ''),
(11, '1a', ''),
(11, '1b', ''),
(11, '2a', ''),
(11, '2b', ''),
(11, '3a', ''),
(11, '3b', ''),
(11, '3c', ''),
(11, '3d', ''),
(11, '3e', ''),
(11, '4a', ''),
(11, '4b', ''),
(11, '4c', ''),
(11, '4d', ''),
(11, '4e', ''),
(11, '4f', ''),
(11, '5', ''),
(11, '6', ''),
(11, '7', ''),
(11, '8', ''),
(11, '9', ''),
(12, '1a', ''),
(12, '1b', ''),
(12, '1c', ''),
(12, '2a', ''),
(12, '2b', ''),
(12, '2c', ''),
(12, '2d', ''),
(12, '3', ''),
(12, '4', ''),
(12, '5', ''),
(13, '1a', ''),
(13, '1b', ''),
(13, '1c', ''),
(13, '2', ''),
(13, '3a', ''),
(13, '3b', ''),
(13, '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_risksummary`
--

CREATE TABLE IF NOT EXISTS `tbl_risksummary` (
  `RepresentFluid` varchar(45) DEFAULT NULL,
  `FluidPhase` varchar(45) DEFAULT NULL,
  `CotcatFlammable` varchar(45) DEFAULT NULL,
  `CurrentRisk` varchar(45) DEFAULT NULL,
  `CotcatPeople` varchar(45) DEFAULT NULL,
  `CotcatAsset` varchar(45) DEFAULT NULL,
  `CotcatEnv` varchar(45) DEFAULT NULL,
  `CotcatReputation` varchar(45) DEFAULT NULL,
  `CotcatCombinled` varchar(45) DEFAULT NULL,
  `ComponentMaterialGrade` varchar(45) DEFAULT NULL,
  `InitThinningCategory` varchar(45) DEFAULT NULL,
  `InitEnvCracking` varchar(45) DEFAULT NULL,
  `InitOtherCategory` varchar(45) DEFAULT NULL,
  `InitCategory` varchar(45) DEFAULT NULL,
  `ExtThinningCategory` varchar(45) DEFAULT NULL,
  `ExtEnvCracking` varchar(45) DEFAULT NULL,
  `ExtOtherCategory` varchar(45) DEFAULT NULL,
  `ExtCategory` varchar(45) DEFAULT NULL,
  `POFCategory` varchar(45) DEFAULT NULL,
  `CurrentRiskCal` varchar(45) DEFAULT NULL,
  `FutureRisk` varchar(45) DEFAULT NULL,
  `tbl_component_componentName` varchar(45) NOT NULL,
  `tbl_equipmentlist_ItemNo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_risksummary`
--

INSERT INTO `tbl_risksummary` (`RepresentFluid`, `FluidPhase`, `CotcatFlammable`, `CurrentRisk`, `CotcatPeople`, `CotcatAsset`, `CotcatEnv`, `CotcatReputation`, `CotcatCombinled`, `ComponentMaterialGrade`, `InitThinningCategory`, `InitEnvCracking`, `InitOtherCategory`, `InitCategory`, `ExtThinningCategory`, `ExtEnvCracking`, `ExtOtherCategory`, `ExtCategory`, `POFCategory`, `CurrentRiskCal`, `FutureRisk`, `tbl_component_componentName`, `tbl_equipmentlist_ItemNo`) VALUES
('C1', 'Liquid', '4', 'N/A', '4', '3', '2', '3', '4', 'B', 'A', 'N/A', 'N/A', 'A', 'A', 'N/A', 'N/A', 'N/A', 'A', NULL, NULL, 'Bottom (Desalter Water)', '06'),
('C2', 'Liquid', '5', 'N/A', '4', '3', '3', '3', '4', 'B', 'A', 'N/A', 'N/A', 'A', 'A', 'N/A', 'N/A', 'N/A', 'A', 'low', 'NULL', 'Caustic', '06'),
('C1', 'Liquid', '4', 'N/A', '4', '3', '3', '2', '4', 'B', 'A', 'N/A', 'N/A', 'A', 'A', 'N/A', 'N/A', 'A', 'A', NULL, NULL, 'Convection Tubes', '04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_si_conversion`
--

CREATE TABLE IF NOT EXISTS `tbl_si_conversion` (
  `conversionFactory` int(11) NOT NULL,
  `SIUnits` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_si_conversion`
--

INSERT INTO `tbl_si_conversion` (`conversionFactory`, `SIUnits`) VALUES
(1, 31623),
(2, 1000),
(3, 4536),
(4, 2.205),
(5, 25.2),
(6, 55.6),
(7, 1),
(8, 0.0929),
(9, 0.123),
(10, 9.744),
(11, 0.145),
(12, 1.8),
(13, 6.29),
(14, 1),
(15, 4.685),
(16, 30.89),
(17, 0.001481),
(18, 0.005),
(19, 1.085),
(20, 1.013),
(21, 5328),
(22, 5.8),
(23, 0.45),
(24, 2.6),
(25, 0.0296),
(26, 100),
(27, 1),
(28, 1000),
(29, 0.0004303),
(30, 0.0000000976),
(31, 864),
(32, 0.543),
(33, 0.0815),
(34, 86.4),
(35, 2.382),
(36, 30.5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE IF NOT EXISTS `tbl_test` (
  `a` int(45) NOT NULL,
  `b` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`a`, `b`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `info` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `info`) VALUES
('haiduong', '1', 'haiduong28'),
('trantam99', '2', 'trantam99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device`
--
ALTER TABLE `device`
 ADD PRIMARY KEY (`id_device`), ADD UNIQUE KEY `parameters` (`parameters`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parameters`
--
ALTER TABLE `parameters`
 ADD PRIMARY KEY (`id_parameter`), ADD UNIQUE KEY `id_parameter` (`id_parameter`);

--
-- Indexes for table `tbl_component`
--
ALTER TABLE `tbl_component`
 ADD PRIMARY KEY (`componentName`);

--
-- Indexes for table `tbl_component_damage`
--
ALTER TABLE `tbl_component_damage`
 ADD PRIMARY KEY (`Fluid`);

--
-- Indexes for table `tbl_component_damage_cost`
--
ALTER TABLE `tbl_component_damage_cost`
 ADD PRIMARY KEY (`EquipmentType`,`ComponentType`);

--
-- Indexes for table `tbl_component_damage_personel`
--
ALTER TABLE `tbl_component_damage_personel`
 ADD PRIMARY KEY (`Fluid`);

--
-- Indexes for table `tbl_continuous_gas_liquip`
--
ALTER TABLE `tbl_continuous_gas_liquip`
 ADD PRIMARY KEY (`Chemical`,`ContinuousReleasesDuration`);

--
-- Indexes for table `tbl_dfb_thin`
--
ALTER TABLE `tbl_dfb_thin`
 ADD PRIMARY KEY (`art`,`insp`);

--
-- Indexes for table `tbl_equipmentforrbi`
--
ALTER TABLE `tbl_equipmentforrbi`
 ADD PRIMARY KEY (`UnitCode`);

--
-- Indexes for table `tbl_equipmentlist`
--
ALTER TABLE `tbl_equipmentlist`
 ADD PRIMARY KEY (`ItemNo`), ADD KEY `fk_tbl_equipmentlist_tbl_equipmentforrbi1_idx` (`tbl_equipmentforrbi_UnitCode`);

--
-- Indexes for table `tbl_equipmenttemp`
--
ALTER TABLE `tbl_equipmenttemp`
 ADD PRIMARY KEY (`STT`), ADD KEY `fk_tbl_equipmenttemp_tbl_equipmentlist1_idx` (`tbl_equipmentlist_ItemNo`), ADD KEY `fk_tbl_equipmenttemp_tbl_component1_idx` (`tbl_component_componentName`);

--
-- Indexes for table `tbl_equipment_outage`
--
ALTER TABLE `tbl_equipment_outage`
 ADD PRIMARY KEY (`EquipmentType`,`ComponentType`);

--
-- Indexes for table `tbl_fluid_leak`
--
ALTER TABLE `tbl_fluid_leak`
 ADD PRIMARY KEY (`Fluid`);

--
-- Indexes for table `tbl_gas_toxic`
--
ALTER TABLE `tbl_gas_toxic`
 ADD PRIMARY KEY (`Toxic`,`ContinuousReleasesDuration`);

--
-- Indexes for table `tbl_gff`
--
ALTER TABLE `tbl_gff`
 ADD PRIMARY KEY (`componentType`);

--
-- Indexes for table `tbl_inspectionplan`
--
ALTER TABLE `tbl_inspectionplan`
 ADD PRIMARY KEY (`DamageMechanism`,`Method`,`tbl_equipmentlist_ItemNo`), ADD KEY `fk_tbl_inspectionplan_tbl_equipmentlist_idx` (`tbl_equipmentlist_ItemNo`);

--
-- Indexes for table `tbl_material_cost_factor`
--
ALTER TABLE `tbl_material_cost_factor`
 ADD PRIMARY KEY (`Materials`);

--
-- Indexes for table `tbl_properties_level1`
--
ALTER TABLE `tbl_properties_level1`
 ADD PRIMARY KEY (`Fluid`);

--
-- Indexes for table `tbl_rbi_question_score`
--
ALTER TABLE `tbl_rbi_question_score`
 ADD PRIMARY KEY (`table`,`No`);

--
-- Indexes for table `tbl_risksummary`
--
ALTER TABLE `tbl_risksummary`
 ADD PRIMARY KEY (`tbl_component_componentName`,`tbl_equipmentlist_ItemNo`), ADD KEY `fk_tbl_risksummary_tbl_component1_idx` (`tbl_component_componentName`), ADD KEY `fk_tbl_risksummary_tbl_equipmentlist1_idx` (`tbl_equipmentlist_ItemNo`);

--
-- Indexes for table `tbl_si_conversion`
--
ALTER TABLE `tbl_si_conversion`
 ADD PRIMARY KEY (`conversionFactory`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`), ADD UNIQUE KEY `info` (`info`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_equipmenttemp`
--
ALTER TABLE `tbl_equipmenttemp`
MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=498;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`info`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parameters`
--
ALTER TABLE `parameters`
ADD CONSTRAINT `parameters_ibfk_1` FOREIGN KEY (`id_parameter`) REFERENCES `device` (`parameters`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
