-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2024 at 04:08 AM
-- Server version: 8.0.39-cll-lve
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluestarsparepar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac_parts`
--

CREATE TABLE `ac_parts` (
  `id` int NOT NULL,
  `images` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `diamension` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ac_parts`
--

INSERT INTO `ac_parts` (`id`, `images`, `name`, `brand`, `weight`, `diamension`, `unit`, `description`, `url`, `phone`) VALUES
(42, '810d6063f2ab13700ba5a08dffdfc6c2.png', 'ac compressor', '', '', '', '', '', 'accompressor', '+971507611980'),
(43, 'a5680b1a2000009ddafd2af3f02bb494.png', 'ac condenser', '', '', '', '', '', 'accondenser', '+971507611980'),
(44, '91ffc56d6ac1ba3302aba98076c4f8bc.png', 'ac fan motor', '', '', '', '', '', 'acfanmotor', '+971507611980'),
(45, '4c3adb421802d6158d58b21d6bec5915.png', 'ac filter', '', '', '', '', '', 'acfilter', '+971507611980'),
(46, '1f2a763e09ed8385b93d35be80e1a535.png', 'ac gas', '', '', '', '', '', 'acgas', '+971507611980'),
(47, '4eb15024457bc8d9eecd7596ad667eda.png', 'evaporator', '', '', '', '', '', 'evaporator', '+971507611980'),
(48, '4d9e6e7f85742a152593e876ed19266a.png', 'expansion valve', '', '', '', '', '', 'expansionvalve', '+971507611980');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'bLustaRR3687');

-- --------------------------------------------------------

--
-- Table structure for table `battery`
--

CREATE TABLE `battery` (
  `id` int NOT NULL,
  `images` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `diamension` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `battery`
--

INSERT INTO `battery` (`id`, `images`, `name`, `brand`, `weight`, `diamension`, `unit`, `description`, `url`, `phone`) VALUES
(20, '0008acdd3ad10953587c5387ef21340a.png', 'Kays-Battery', 'kays', '40kg', 'L 21.26\" W8.74\" H9.45\" Inches', 'PCS', 'lorem iplsuysd battery nssyudidvdvdvdvdvd', 'Kays-Battery', '0'),
(21, 'f6b406d32de3dae05bf89897861274f6.png', 'Optima-battery', 'optima', '40kg', 'L 21.26\" W8.74\" H9.45\" Inches', 'PCS', 'blablabalabjahaajjkaka', 'Optima-battery', '0'),
(22, '1143b7705a229ddd51d59370e77083c4.png', 'Solite-automotive battery', 'solite', '40kg', 'L 21.26\" W8.74\" H9.45\" Inches', 'PCS', 'abhinavkpperwqewoe', 'Solite-automotive-battery', '0'),
(23, '975fcdd355cbc46f97e15953800c7b5b.png', 'Varta-automotive battery', 'varta', '40kg', 'L 21.26\" W8.74\" H9.45\" Inches', 'PCS', 'ththn', 'Varta-automotive-battery', '0'),
(25, '5486431366086c78a4caa93aaee28770.png', 'Acdelco-Car Battery', 'Acdelco', '40kg', 'L 21.26\" W8.74\" H9.45\" Inches', 'PCS', 'fdbrsfgtnrfmnj.....', 'Acdelco-CarBattery', '0');

-- --------------------------------------------------------

--
-- Table structure for table `body_parts`
--

CREATE TABLE `body_parts` (
  `id` int NOT NULL,
  `images` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `diamension` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `body_parts`
--

INSERT INTO `body_parts` (`id`, `images`, `name`, `brand`, `weight`, `diamension`, `unit`, `description`, `url`, `phone`) VALUES
(42, 'dc6a2d7d4d1a0781edfefe64ad157dfa.png', 'all doors', '', '', '', '', '', 'alldoors', '+971507611980'),
(43, 'd1d62a21fa1aacfe36e6341f7db161db.png', 'bonnet', '', '', '', '', '', 'bonnet', '+971507611980'),
(44, 'aab6ac4bfe6a9236d2e0100d89e19958.png', 'door handles', '', '', '', '', '', 'doorhandles', '+971507611980'),
(45, '5c23099bb17b1bb447d727aa955c0e4e.png', 'door lock', '', '', '', '', '', 'doorlock', '+971507611980'),
(46, '9edfd9c7efc0a2b1eb91475e674e749b.png', 'door pad', '', '', '', '', '', 'doorpad', '+971507611980'),
(47, '880120f72ccd29cb0f958d4a6bd9e547.png', 'fender', '', '', '', '', '', 'fender', '+971507611980'),
(48, '658621313dbd171f869738e1b91f2d66.png', 'fr and rr bumper', '', '', '', '', '', 'frandrrbumper', '+971507611980'),
(49, 'a28bac1a8048a64b7592681e52c34836.png', 'front glass', '', '', '', '', '', 'frontglass', '+971507611980'),
(50, 'a494e074ba44a91862707ae5670c2b56.png', 'mud flap', '', '', '', '', '', 'mudflap', '+971507611980'),
(51, '53dfd42d09d512ec509ac6ebd9e1157c.png', 'radiator', '', '', '', '', '', 'radiator', '+971507611980'),
(52, '4bb9d3c18a1aeaf28150fcf60a954137.png', 'seat belt', '', '', '', '', '', 'seatbelt', '+971507611980'),
(53, 'f453905ee66018389e076ef91901293a.png', 'side glass', '', '', '', '', '', 'sideglass', '+971507611980'),
(54, 'c109da95cfc93605a53f3deeffaa5a2c.png', 'side mirror', '', '', '', '', '', 'sidemirror', '+971507611980'),
(55, 'a36fe2886398ce7aa523b5e5d0441357.png', 'wiper arm', '', '', '', '', '', 'wiperarm', '+971507611980'),
(56, '4b47728f8d3ee313626013c372e6d381.png', 'wiper blade', '', '', '', '', '', 'wiperblade', '+971507611980'),
(57, 'a36d35ba16076cbe998055fd89891526.png', 'wiper nozzle', '', '', '', '', '', 'wipernozzle', '+971507611980'),
(58, '2fbce6c7c9c3a92bf372aa1da5cbb895.png', 'wiper tank', '', '', '', '', '', 'wipertank', '+971507611980');

-- --------------------------------------------------------

--
-- Table structure for table `electrical_parts`
--

CREATE TABLE `electrical_parts` (
  `id` int NOT NULL,
  `images` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `diamension` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electrical_parts`
--

INSERT INTO `electrical_parts` (`id`, `images`, `name`, `brand`, `weight`, `diamension`, `unit`, `description`, `url`, `phone`) VALUES
(42, '4a4148bc46ca4c8a3c4526c175060a85.png', 'alternator', '', '', '', '', '', 'alternator', '+971507611980'),
(43, 'a0a04326c1dd5b37c5dc91c8caf2feb4.png', 'fuel pump', '', '', '', '', '', 'fuelpump', '+971507611980'),
(44, 'e660673b4272e6161232627a72380238.png', 'fuse', '', '', '', '', '', 'fuse', '+971507611980'),
(45, '74d5ab8f57aee62a43094bf7cd8addbf.png', 'head lamp', '', '', '', '', '', 'headlamp', '+971507611980'),
(46, '5c2d6924e37cec9c1c83480fb4191c93.png', 'hour meter', '', '', '', '', '', 'hourmeter', '+971507611980'),
(47, '8cdcdc48f4a495fbce3eaafb11a65a3e.png', 'indicator lamp', '', '', '', '', '', 'indicatorlamp', '+971507611980'),
(48, 'ecb4653424e1855229baabc82a9f2d98.png', 'oil sensor', '', '', '', '', '', 'oilsensor', '+971507611980'),
(49, '19b09a5f41d97d0c155263ea040943d5.png', 'solenoid valve', '', '', '', '', '', 'solenoidvalve', '+971507611980'),
(50, '2dcc7c335b5c98ea52f6075ab681ee5c.png', 'speedo meter', '', '', '', '', '', 'speedometer', '+971507611980'),
(51, '61f0a059425cb41a3ca3832faa10e5b1.png', 'starter motor', '', '', '', '', '', 'startermotor', '+971507611980'),
(52, 'fea20635fc4f10be95d1c3dd59faccb6.png', 'temperature sensor', '', '', '', '', '', 'temperaturesensor', '+971507611980'),
(53, 'db0bca9bb30d5997916bc815f61c36ab.png', 'window motor', '', '', '', '', '', 'windowmotor', '+971507611980'),
(54, '9e02223872d1bac11cde6e28b33c8085.png', 'wiper motor', 'demo', '', '', '', 'demo description ', 'wipermotor', '+971507611980');

-- --------------------------------------------------------

--
-- Table structure for table `engin_parts`
--

CREATE TABLE `engin_parts` (
  `id` int NOT NULL,
  `images` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `diamension` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `engin_parts`
--

INSERT INTO `engin_parts` (`id`, `images`, `name`, `brand`, `weight`, `diamension`, `unit`, `description`, `url`, `phone`) VALUES
(42, '97d8bad8d1c588c2295ee60dc6585396.png', 'absorber', '', '', '', '', '', 'absorber', '+971507611980'),
(43, '31a91bfdb1997e74bdcabd5e8f41489c.png', 'Air filter', '', '', '', '', '', 'Airfilter', '+971507611980'),
(44, '7ebe3bb78856a5a308a2bb1bce009eba.png', 'All gasket', '', '', '', '', '', 'Allgasket', '+971507611980'),
(45, 'eb818c5a329414e774ec7f071cd92cd9.png', 'bush', '', '', '', '', '', 'bush', '+971507611980'),
(46, 'fb1f8c006582851825f72eb264dc3743.png', 'Coils', '', '', '', '', '', 'Coils', '+971507611980'),
(47, '4237ae16b1baf4e6768a12fdd7e4632c.png', 'Connecting rod bearing', '', '', '', '', '', 'Connectingrodbearing', '+971507611980'),
(48, 'bbfca07b3f89d739a63e22002d5c8ca0.png', 'Connecting rod', '', '', '', '', '', 'Connectingrod', '+971507611980'),
(49, 'b9f19289ffc93595dad5f994a477f894.png', 'Cylinder liner', '', '', '', '', '', 'Cylinderliner', '+971507611980'),
(50, 'f07d3337fcb486bf48ac2ca6136f7bff.png', 'engin body', '', '', '', '', '', 'enginbody', '+971507611980'),
(51, '6afc4ad13ef6b99eb8e62e8a68239183.png', 'Engine mounting', '', '', '', '', '', 'Enginemounting', '+971507611980'),
(52, '5b8f907f62d98141f7c90b7fe53a4849.png', 'engine seals', '', '', '', '', '', 'engineseals', '+971507611980'),
(53, '2991b1e72224b6a4226290d5303826b2.png', 'Engine sensor', '', '', '', '', '', 'Enginesensor', '+971507611980'),
(54, 'b6ca3e01256c26ec361ea2446b0fcf15.png', 'Ex valve', '', '', '', '', '', 'Exvalve', '+971507611980'),
(55, '4872a0dc5489673e4507c94dfc43227c.png', 'Fuel filter', '', '', '', '', '', 'Fuelfilter', '+971507611980'),
(56, '7e3d45faefa2fda35a2f55609c8c28fb.png', 'Gear filter', '', '', '', '', '', 'Gearfilter', '+971507611980'),
(57, '65c5ec94f33ddcdbb96da35b738d467a.png', 'Gear mounting', '', '', '', '', '', 'Gearmounting', '+971507611980'),
(58, '8be012c256115ac09d7b00a579f13462.png', 'Head gasket', '', '', '', '', '', 'Headgasket', '+971507611980'),
(59, 'c627d3f76ed75809cb0fb0f5479f14ad.png', 'Head', '', '', '', '', '', 'Head', '+971507611980'),
(60, '75b07cb1292e589fa9052e64524a99a3.png', 'Inlet valve', '', '', '', '', '', 'Inletvalve', '+971507611980'),
(61, 'f558f2d3ca7a3fa2198a98d6e0325831.png', 'Main bearing', '', '', '', '', '', 'Mainbearing', '+971507611980'),
(62, '442ab88ebf7da49b0595891805130ced.png', 'Main shaft', '', '', '', '', '', 'Mainshaft', '+971507611980'),
(63, '6c7fdfb9824d1f56c77676d95ae508e3.png', 'Oil filter', '', '', '', '', '', 'Oilfilter', '+971507611980'),
(64, '6b5da33bccd3362043cb20dfb43d573f.png', 'Oil pan', '', '', '', '', '', 'Oilpan', '+971507611980'),
(65, '4c1a9ee5e464f1ff2a4cde9d4f782479.png', 'Piston ring', '', '', '', '', '', 'Pistonring', '+971507611980'),
(66, 'fd101d9d0940c9795d33cd3b72446d34.png', 'Piston', '', '', '', '', '', 'Piston', '+971507611980'),
(67, 'd147b39c168dd840f87c5e9bddb4ede7.png', 'Spark plug', '', '', '', '', '', 'Sparkplug', '+971507611980'),
(68, '6d9ca8188a9bed94f9e4af07cbf6a742.png', 'Trust washer', '', '', '', '', '', 'Trustwasher', '+971507611980'),
(69, 'f5701251e3f75fdbaa46d602a02e0050.png', 'Turbo charger', '', '', '', '', '', 'Turbocharger', '+971507611980'),
(70, '71d6d6987cf85c2c99cc1f4241ab814e.png', 'Valve seal', '', '', '', '', '', 'Valveseal', '+971507611980'),
(71, 'd8b98b62cc20c55dbce284e6f82528b6.png', 'Valve seat', 'volvo etc.', '', '', '', '', 'Valveseat', '+971507611980');

-- --------------------------------------------------------

--
-- Table structure for table `filter`
--

CREATE TABLE `filter` (
  `id` int NOT NULL,
  `images` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `diamension` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filter`
--

INSERT INTO `filter` (`id`, `images`, `name`, `brand`, `weight`, `diamension`, `unit`, `description`, `url`, `phone`) VALUES
(42, 'ad1a3920cbabbfe1cffcd6c10cb77594.png', 'fleet-guard-Lube Filter Cellulose Cartridge', 'fleet-guard', '0.42 Kg', 'L 9.65', 'PCS', 'Air filter Insert', 'fleet-guard-LubeFilterCelluloseCartridge', '+971507611980'),
(43, '711099630f8516369983a126ba1eaa89.png', 'DONALADSON-Replacement Filters', 'DONALADSON', '0.42 Kg', 'L 9.65\" W2.68 HII.81j\' Inches', 'PCS', 'Air filter Insert', 'DONALADSON-ReplacementFilters', '+971507611980'),
(44, '1bda470ed82bf574190c052aa0555024.png', 'Baldwin - Axial Seal Air Filter', 'Baldwin', '0.42 Kg', 'L 9.65\" W2.68 HII.81j\' Inches', 'PCS', 'Air filter Insert', 'Baldwin-AxialSealAirFilter', '+971507611980'),
(45, 'ea2c6b4a71822258968f0853572b9aed.png', 'Hengst-air filter for aftermarket', 'Hengst', '0.42 Kg', 'L 9.65\" W2.68 HII.81j\' Inches', 'PCS', 'Air filter Insert', 'Hengst-airfilterforaftermarket', '+971507611980'),
(46, '6148682a19631424fc56e33db2d51a0f.png', 'mann-fuel filter', 'mann', '0.42 Kg', 'L 9.65\" W2.68 HII.81j\' Inches', 'PCS', 'fuel filter', 'mann-fuelfilter', '+971507611980'),
(47, '00e48f66a97398a1e63c9fdea269579c.png', 'Parker-Cabin Air Filters', 'Parker', '0.42 Kg', 'L 9.65\" W2.68 HII.81j\' Inches', 'PCS', 'Air filter Insert', 'Parker-CabinAirFilters', '+971507611980'),
(48, 'aff7241531b2e0ed234d09b828d38520.png', 'Wix-cabin filters', 'Wix', '0.42 Kg', 'L 9.65\" W2.68 HII.81j\' Inches', 'PCS', 'cabin filters', 'Wix-cabinfilters', '+971507611980');

-- --------------------------------------------------------

--
-- Table structure for table `marine_spare_parts`
--

CREATE TABLE `marine_spare_parts` (
  `id` int NOT NULL,
  `images` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `diamension` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marine_spare_parts`
--

INSERT INTO `marine_spare_parts` (`id`, `images`, `name`, `brand`, `weight`, `diamension`, `unit`, `description`, `url`, `phone`) VALUES
(42, '3915e85bc617fd1776cfc3ee1431b0af.png', 'navigation light', 'all brand', '', '', 'PCS', 'demo description', 'navigationlight', '+971507611980'),
(43, 'ac50dedc971535ae8497ecc75074d9ef.png', 'Marine cable and lamp', '', '', '', '', '', 'Marinecableandlamp', '+971507611980'),
(44, '098761a16ae3a8284765e449f00864bf.png', 'hydraulic fitting and seal', '', '', '', '', '', 'hydraulicfittingandseal', '+971507611980'),
(45, '81d3340b3bb50d80b8a1778af8c1cc0e.png', 'electric contactors', '', '', '', '', '', 'electriccontactors', '+971507611980'),
(46, 'ccd8e9dda4c82fb15cf431adaab3039d.png', 'bearing', '', '', '', '', '', 'bearing', '+971507611980'),
(47, '2454888429a0f94e0f5d0a1c5acbd54f.png', 'All kinds of guages', '', '', '', '', '', 'Allkindsofguages', '+971507611980');

-- --------------------------------------------------------

--
-- Table structure for table `other_parts`
--

CREATE TABLE `other_parts` (
  `id` int NOT NULL,
  `images` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `diamension` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_parts`
--

INSERT INTO `other_parts` (`id`, `images`, `name`, `brand`, `weight`, `diamension`, `unit`, `description`, `url`, `phone`) VALUES
(42, 'f646c54ad88b2c37f35308d5e52e700b.png', 'Axle boot', '', '', '', '', '', 'Axleboot', '+971507611980'),
(43, '391c3d49d3d8d370aec074e6207c2048.png', 'Axle', '', '', '', '', '', 'Axle', '+971507611980'),
(44, 'd5ed9ba278b24ad07ccfaeda2da83187.png', 'Brake liner', '', '', '', '', '', 'Brakeliner', '+971507611980'),
(45, '516a1cb004d7fe1c9f9e309fbaf5b05b.png', 'Brake pads', '', '', '', '', '', 'Brakepads', '+971507611980'),
(46, 'ea892b6d1c6450be68e864bfb0b110e8.png', 'Clutch cover', '', '', '', '', '', 'Clutchcover', '+971507611980'),
(47, '2cf47a75cc1651aa7dec638a97f5cbaa.png', 'Clutch disc', '', '', '', '', '', 'Clutchdisc', '+971507611980'),
(48, '9baf9ea5618539c4370aa4b457538cb4.png', 'Gears', '', '', '', '', '', 'Gears', '+971507611980'),
(49, '2d821977c000c41343c429be816a9379.png', 'Release bearing', '', '', '', '', '', 'Releasebearing', '+971507611980'),
(50, '95ba1eb3e3fa693791622de6d2972aae.png', 'Wheel bearing', '', '', '', '', '', 'Wheelbearing', '+971507611980'),
(51, '10d99adf209d08fa4d8b77384e01220b.png', 'Wheel hub', '', '', '', '', '', 'Wheelhub', '+971507611980'),
(52, '6070645738284b0500fe4cfddf958da1.png', 'Wheel seal', '', '', '', '', '', 'Wheelseal', '+971507611980');

-- --------------------------------------------------------

--
-- Table structure for table `suspenssion`
--

CREATE TABLE `suspenssion` (
  `id` int NOT NULL,
  `images` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `diamension` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suspenssion`
--

INSERT INTO `suspenssion` (`id`, `images`, `name`, `brand`, `weight`, `diamension`, `unit`, `description`, `url`, `phone`) VALUES
(42, 'de5285b1f4f5ea9613abb81220a54f82.png', 'lover arm', '', '', '', '', '', 'loverarm', '+971507611980'),
(43, '18132ef166e52b3669dff943ac898563.png', 'shock bush', '', '', '', '', '', 'shockbush', '+971507611980'),
(44, '3d93326dc142ac36f46d8795bbede3d1.png', 'shock', '', '', '', '', '', 'shock', '+971507611980'),
(45, '1007c37724523f23eb962e5455526e29.png', 'tie rod end', '', '', '', '', '', 'tierodend', '+971507611980'),
(46, 'e09a06d096d3778be033550b7e56bfa4.png', 'upper arm', '', '', '', '', '', 'upperarm', '+971507611980');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac_parts`
--
ALTER TABLE `ac_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `battery`
--
ALTER TABLE `battery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `body_parts`
--
ALTER TABLE `body_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrical_parts`
--
ALTER TABLE `electrical_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engin_parts`
--
ALTER TABLE `engin_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filter`
--
ALTER TABLE `filter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marine_spare_parts`
--
ALTER TABLE `marine_spare_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_parts`
--
ALTER TABLE `other_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suspenssion`
--
ALTER TABLE `suspenssion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac_parts`
--
ALTER TABLE `ac_parts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `battery`
--
ALTER TABLE `battery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `body_parts`
--
ALTER TABLE `body_parts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `electrical_parts`
--
ALTER TABLE `electrical_parts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `engin_parts`
--
ALTER TABLE `engin_parts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `filter`
--
ALTER TABLE `filter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `marine_spare_parts`
--
ALTER TABLE `marine_spare_parts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `other_parts`
--
ALTER TABLE `other_parts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `suspenssion`
--
ALTER TABLE `suspenssion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
