-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 06:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobi_men`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `Sr.no` int(255) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `item_price` int(100) NOT NULL,
  `img_no` int(255) NOT NULL,
  `col_no` int(255) NOT NULL,
  `col-1` varchar(100) NOT NULL,
  `col-2` varchar(100) NOT NULL,
  `col-3` varchar(100) NOT NULL,
  `col-4` varchar(100) NOT NULL,
  `col-5` varchar(100) NOT NULL,
  `col-6` varchar(100) NOT NULL,
  `col-7` varchar(100) NOT NULL,
  `col-8` varchar(100) NOT NULL,
  `col-9` varchar(100) NOT NULL,
  `col-10` varchar(100) NOT NULL,
  `color-no` int(255) NOT NULL,
  `color-1` varchar(100) NOT NULL,
  `color-2` varchar(100) NOT NULL,
  `color-3` varchar(100) NOT NULL,
  `color-4` varchar(100) NOT NULL,
  `color-5` varchar(100) NOT NULL,
  `color-6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`Sr.no`, `item_name`, `company`, `item_price`, `img_no`, `col_no`, `col-1`, `col-2`, `col-3`, `col-4`, `col-5`, `col-6`, `col-7`, `col-8`, `col-9`, `col-10`, `color-no`, `color-1`, `color-2`, `color-3`, `color-4`, `color-5`, `color-6`) VALUES
(2, 'Bose mini speaker', 'Bose', 1500, 1, 3, 'mini boost series 1', 'bluetooth speaker ', 'fast charging', '', '', '', '', '', '', '', 0, '', '', '', '', '', ''),
(4, 'Mobile Game Controller', 'ipega', 3000, 1, 7, 'wireless Controller', 'easy to use', 'easy adjustments ', 'android', 'Along with iOs also', 'PUBG Mobile game controller will take  gaming skills to next level, simulating a game experience.', 'Hypersensitive?Shooting with index finger while your thumb is moving, no delays.', '', '', '', 0, '', '', '', '', '', ''),
(5, 'Sony Headphones', 'Sony', 2100, 1, 10, 'easy to adjust', 'high sound quality', 'super fine sound quality', 'light weight', 'adjustable added factoe', 'amazing and attracting style', 'wireless', 'bluetooth', 'advanced features', 'ON and OFF system', 3, 'red', 'dark blue', 'skin', '', '', ''),
(6, 'Tiktok Mic Lav', '', 500, 3, 7, 'microphone', 'micro cravate', 'compatible with iPhone, ipad, ipod Touch', 'compatible with Android/windows', 'Compatible with smartphones and more', 'good quality Mic', 'high performance', '', '', '', 1, 'black', '', '', '', '', ''),
(7, 'Asset Plus Hand free', 'Asset Plus', 700, 1, 7, 'BR-20', 'Enjoy earphones', 'high sound quality', 'smart looking', 'easy to use', 'notification, message, music sound available', 'less price and good quality', '', '', '', 2, 'blue', 'black', '', '', '', ''),
(9, 'Fantech office mouse', 'FANTECH', 1500, 3, 8, '2.4 GHZ ', 'wIRELESS OFFICE MOUSE', 'easy and handy to use', '10 m blutooth access and range', 'amazing style', 'Responsive cursor', 'comfortable shape', 'DPI 1200', '', '', 1, 'black', '', '', '', '', ''),
(10, 'Gimbal Moza Mini-S essential smartphone', '', 10000, 2, 9, 'For Smartphones up to 7.4 oz', 'Multiple Time-Lapse & Tracking Modes', 'Large Left-Side Focus/Zoom Wheel', 'uick-Response \"PhoneGo\" Mode', 'Dolly/Zoom \"Vertigo\" Effect Mode', 'Control Select Phone Functions', 'Up to 12-Hour Runtime', 'Ergonomic Control Panel', 'Charges Phone While Shooting', '', 1, 'black', '', '', '', '', ''),
(11, 'IP wireless panaromic Hidden bulb camera', '', 3200, 1, 7, '360 Degree Lens', 'built In camera', 'Sharpness: 1080P', '1080 HD Resolution', 'Material: Plastic', 'Size: 13.5cm*7.5cm', 'Weight: 308g', '', '', '', 1, 'white', '', '', '', '', ''),
(12, 'IP wireless triple Antina Camera', '', 3400, 2, 8, 'Two way comminucation helps you communicate.', 'Motion tracking & PTZ presetting', 'Buildin Wirelessmodule', 'PTZ function for widers area view,support motion detection.', 'Support remote viewing on mobile devices. for iPhone/Android supported.', 'Built in sound pick up: video with sound,more perfect video footage', 'Get an on board external storage of up to 128GB', 'Simple and easy to install meaning, you can Plug and Play at your preferred location', '', '', 1, 'White', '', '', '', '', ''),
(14, 'ROMOSS CC-01 USB Type C adapter', 'ROMOSS', 400, 1, 3, 'USB TYpe-C/M to Micro-USB/F', 'fast charging', 'good quality', '', '', '', '', '', '', '', 1, 'white', '', '', '', '', ''),
(15, 'Fast charging Andriod Cable', 'Casim', 400, 2, 4, 'fast charging', 'good quality', 'better performance', 'compatible to android', '', '', '', '', '', '', 2, 'white', 'black', '', '', '', ''),
(16, 'Bluetooth Sun glasses', 'Active outdoor Bluetooth Sun glasses with anti gla...', 2100, 1, 10, 'it is an outdoor sun glasses', 'this does not only serves the purpose of sun glasses', 'But, it is a bluetooth glasses', 'along with anti glare', 'it has advanced features of call ', 'music ', 'it has inbuilt earphones which helps in calling and music listening', 'high sound quality', 'good looking', 'amazing style', 1, 'Black', '', '', '', '', ''),
(18, 'Casim Powerbank 20,000 mAh', 'Casim', 3000, 1, 9, 'micro ', 'Type C', '100% real standard', 'Quality product', '20,000 mAh', 'mode ZT-P20', 'Digital display brushed ', 'great powerbank', 'fast charging', '', 2, 'white', 'black', '', '', '', ''),
(19, 'Metallic Smartwatch straps', '', 900, 3, 8, 'single loop', 'metallic strap', 'good quality', 'trendy and amazing look', 'awesome style', 'stylish', 'easy to wear', 'compatible to all smartwatches ', '', '', 3, 'Black ', 'Golden', 'Silver', '', '', ''),
(20, 'Silicon Smartwatch straps', '', 900, 1, 6, 'Double loop', 'trendy look', 'stylish', 'easy to wear', 'compatible to all smart watches', 'straps only', '', '', '', '', 5, 'Black', 'White', 'Blue', 'Golden', 'Pink', ''),
(21, 'Elastic smartwatch strap solo loop', '', 900, 1, 5, 'compatible to all smartwatches', 'single loop', 'elasticity', 'free size', 'trendy style', '', '', '', '', '', 4, 'Black', 'white', 'red', 'golden', '', ''),
(22, 'Double loop elastic smartwatch strap', '', 1000, 2, 6, 'double loop', 'elasticity', 'trendy', 'stylish', 'easy to wear', 'free size', '', '', '', '', 5, 'black ', 'white', 'red', 'golden', 'green', ''),
(23, 'Mac Safe charger', 'apple', 3700, 2, 4, 'mac charger', 'wireless charging', 'megnatic factor', 'high charging', '', '', '', '', '', '', 1, 'White', '', '', '', '', ''),
(24, 'One plus type C 3.5 mm adapter', '', 500, 1, 7, '3.5 mm adapter', 'one plus', 'type C', 'fast charging', 'compatible to android', 'compatible ti iOs', 'Lightning to headphone Jack ', '', '', '', 1, 'white', '', '', '', '', ''),
(25, 'Airpods generation 2', 'Apple', 2300, 3, 10, 'Built-In Microphone, Rechargeable', 'Microphone Built-in\r\nWireless Technology Bluetooth', 'Type Headset\r\nEarpiece Design Earbud (In Ear)\r\nEarpiece Double', 'Automatically on, automatically connected\r\nEasy setup for all your devices', 'Quick access to Siri by saying Hey Siri\r\nDouble-tap to play or skip forward', 'Charges quickly in the case\r\nCase can be charged using the Lightning connector', 'Bluetooth name can be renamed', 'Touch control function modified / GPS positioning function of iCloud can be used', 'Automatic pop-up window display battery leve', ' current battery value can also be viewed using IOS battery function', 1, 'White', '', '', '', '', ''),
(26, 'Airpods Pro', 'Apple', 3300, 4, 6, 'Transmission Distance: 15 Meters', 'Bluetooth 5.0 technology', ' waterproof and sweat-proof', 'Popups Function, Noise Reduction', 'Charging Box Size: 8cm x 6cm x 3cm/3.15\" x 2.36\" x 1.18\" (Approx.)', 'ring you good listening experience.', '', '', '', '', 0, '', '', '', '', '', ''),
(27, 'Mi air dots', 'redmi ', 1700, 3, 6, 'Wireless connections Bluetooth: 5.0', 'Communication distance: 10 meters ', 'Single earphone net weight: About 4.1g', 'With the total net weight of the charging box: About 35.4g', 'Charging box size: 62×40×27.2mm', 'Headphone size: 26.65×16.4×21.6mm', '', '', '', '', 1, 'black', '', '', '', '', ''),
(28, 'Mi air dots pro', 'REdmi', 2000, 2, 4, 'high quality', 'air dots pro', 'black color', 'long stand by time', '', '', '', '', '', '', 1, 'Black', '', '', '', '', ''),
(29, 'Realme Airdots pro', 'Realme', 2000, 2, 4, 'high quality', 'good sound sytem', 'high stand by time', 'black color', '', '', '', '', '', '', 1, 'Black', '', '', '', '', ''),
(30, 'Samsung Buds plus', 'Samsung', 2600, 3, 6, 'high quality sound system', 'galaxy buds plus', 'easy to wear', 'stylish', 'high quality', 'trendy look', '', '', '', '', 2, 'White', 'Black', 'Black', '', '', ''),
(31, 'Airpods pro 4', '', 2000, 1, 5, 'wireless', 'bluetooth', 'in ear', '10-15m working distance', 'V5.o blutooth version', '', '', '', '', '', 1, 'white', '', '', '', '', ''),
(32, 'Realme Buds air', 'Realme', 2100, 1, 4, 'buds air', 'wireless', 'bluetooth', 'high quality sound', '', '', '', '', '', '', 1, 'white', '', '', '', '', ''),
(33, 'Realme air F9 pro', 'realme', 2500, 2, 3, 'wireless', 'Bluetooth', 'high quality sound system', '', '', '', '', '', '', '', 1, 'Black', '', '', '', '', ''),
(34, 'Mi true wireless Ear buds Basic 2 ', 'redmi', 3400, 1, 5, 'wireless', 'bluetooth', '5.0 blutooth version', '10 m range distance', 'high quality sound system', '', '', '', '', '', 1, 'Black', '', '', '', '', ''),
(35, 'Haylou T19', '', 5400, 3, 10, 'Sound principle : Dynamic\r\nInterfaces : Fully Wireless (TWS)', 'Active noise cancellation : Yes\r\nConstruction : Overhead', 'Sensitivity : 110dB\r\nWireless Type : Bluetooth', 'Bluetooth version : 5.0', 'Driver diameter : 7.2mm\r\nResistance : 32?', 'Charging method : Charging case', 'Inbuilt microphone', 'Frequency Response Range : 20 - 20000Hz', 'Purpose : Sports', 'Purpose : Headset for phone', 1, 'white', '', '', '', '', ''),
(36, 'Iphone converter', 'Apple', 600, 2, 7, 'Connects with iPhone 7 & above', 'Portable', 'Durable', 'long life', 'high quality', 'easy to use', 'easy to carry', '', '', '', 1, 'white', '', '', '', '', ''),
(37, 'USB-C- 20W power adapter', 'Apple', 3500, 1, 3, 'fast charging', 'high speed', 'high quality', '', '', '', '', '', '', '', 1, 'White', '', '', '', '', ''),
(38, 'B033 Foldable Bluetooth Keybord with Touchpad', 'B033', 4700, 4, 5, 'Bluetooth Wireless Keyboard', 'Portable Foldable Keyboard', 'Foldable Wireless Keyboard', 'Foldable Keyboard', 'Wireless Keyboard\r\n', '', '', '', '', '', 1, 'Black', '', '', '', '', ''),
(39, 'Lenovo Live pods', 'Lenovo ', 2700, 2, 7, 'Bluetooth version: V5.0', 'Channel system: stereo', 'Battery capacity: 35mAh, 3.7V/300mAh', 'Frequency Response Range:20Hz -20KHz ', 'Speaker impedance: 16? ± 10%', 'Support Protocol: HSP/HFP/A2DP/AVRCP ', ' Input charging standard: DC 5V', '', '', '', 1, 'gresih white', '', '', '', '', ''),
(40, 'LOUIS VUITTON air buds', 'Louis Vuitton', 2400, 1, 5, 'good looking', 'high quality sound', 'stylish', 'better performance', 'tre3ndy', '', '', '', '', '', 3, 'Red', 'Blue', 'Black', '', '', ''),
(41, 'KM-K99 10,000 mAh Power bank with TWS airpods', '', 3700, 1, 5, 'powerbank in built facility', 'aipods along with powerbank', 'high quality', 'advanced technology ', 'wirlees airpods', '', '', '', '', '', 3, 'Pink', 'Blue', 'White', '', '', ''),
(42, 'Apple watch case', '', 900, 1, 3, 'smartwatches adjusted case', 'protected case', 'along with strap', '', '', '', '', '', '', '', 3, 'white', 'red', 'black', '', '', ''),
(43, 'Lenovo QT81', 'Lenovo', 3100, 1, 5, 'lenovo airbuds ', 'wireless ', 'bluettoth ', 'high quality', 'high sound quality', '', '', '', '', '', 1, 'Black', '', '', '', '', ''),
(44, 'Lenovo h301', 'Lenovo', 2800, 1, 6, 'wirless ear phones', 'Bluetooth', 'TWS buds', 'high quality sound', 'stylish', 'trendy ', '', '', '', '', 1, 'Black', '', '', '', '', ''),
(45, 'Watch and TWS airpods', '', 7500, 1, 4, 'smartwatch ', 'along with TWS airbuds', 'high quality watch ', 'high technology ', '', '', '', '', '', '', 1, 'Black', '', '', '', '', ''),
(46, 'PD 18W Adapter with Cable', '', 2000, 1, 5, 'adapter of high quality', 'along with Cable', 'fast charging', 'fast performance', 'good quality', '', '', '', '', '', 1, 'white', '', '', '', '', ''),
(47, 'Mi Smart bracelet with TWS Earbuds', 'Mi', 0, 1, 7, 'smart bracelet ', 'along with TWs Ear buds ', 'wireless', 'Bluetooth', 'bluetooth version 5.0', 'high technology', 'advanced features', '', '', '', 1, 'Black', '', '', '', '', ''),
(48, 'Mi power bank 10,000 mAh', 'Mi', 2500, 1, 5, 'fast charging', '10,000 mah', 'no harm to battery', 'high quality', 'great performance', '', '', '', '', '', 1, 'Blue', '', '', '', '', ''),
(50, 'Casim power bank 10,000 mAh', 'Casim', 2200, 2, 7, 'Fast Charging', 'Long time battery', 'High Quality', '10,000 mAh', 'Sleek power bank', 'Double output', 'Aero standard', '', '', '', 2, 'white', 'black', '', '', '', ''),
(51, 'Realme Speaker', 'Realme', 1450, 2, 3, 'Impressive sound: Advanced audio performance with a compact design, Anti-clipping function for loud,', 'Simplicity in use: Wireless music streaming via Bluetooth', 'Designed for grab and go: Built-in rechargeable battery for music playback anywhere.', '', '', '', '', '', '', '', 1, 'black', '', '', '', '', ''),
(52, 'Romoss Power bank 10,000 mAh', 'Rommos', 2150, 1, 4, 'Fast Charging', 'High Quality', 'Awesome battery timing', '10,000 mAh', '', '', '', '', '', '', 1, 'white', '', '', '', '', ''),
(53, 'Boya Mic', 'Boya', 2050, 2, 8, 'For All Devices', 'Omni Directional Condenser Microphone', 'Low Handling Noise', 'Includes Lapel Clip, Foam Windscreen, 1/4” Adapter', 'Best For Youtube Videos or Interviews', 'Legth 6m', 'High-quality condenser is ideal for video use', 'Clip-On Mic for Smartphones, DSLR, Camcorders, Audio recorders, PC etc.', '', '', 1, 'black', '', '', '', '', ''),
(54, 'Mi band 5', 'Redmi', 1350, 2, 3, 'Good battery timing', 'Smart features', 'Sleek look', '', '', '', '', '', '', '', 1, 'black', '', '', '', '', ''),
(55, 'Magsafe charger Orignal', 'Orignal Apple', 7500, 2, 4, 'Wireless charging', 'High speed charging', 'Orignal Apple charger', 'Applicable for Iphone 12', '', '', '', '', '', '', 1, 'white', '', '', '', '', ''),
(56, 'Magsafe charger Local', 'Apple', 3700, 2, 4, 'Wireless charging', 'High speed charging', 'Orignal Apple charger', 'Applicable for Iphone 12', '', '', '', '', '', '', 1, 'white', '', '', '', '', ''),
(57, 'Realme air buds m8w', 'realme', 2500, 2, 6, 'High quality sound', 'Good stand by timing', 'Wireless headphone', 'Bluetooth feature', 'Smart look', 'Easy to use', 'Easy to carry', '', '', '', 1, 'black', '', '', '', '', ''),
(58, 'Mi dots blue', 'Radmi', 1700, 1, 6, 'High quality sound', 'Good stand by timing', 'Wireless headphone', 'Bluetooth feature', 'Smart look', 'Easy to use', '', '', '', '', 1, 'blue', '', '', '', '', ''),
(59, 'Mi dots red', 'Radmi', 1900, 1, 6, 'High quality sound', 'Good stand by timing', 'Wireless headphone', 'Bluetooth feature', 'Smart look', 'Easy to use', '', '', '', '', 1, 'red', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `Username` varchar(25) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`Username`, `Password`) VALUES
('mobimen12', 'mobimen12');

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `Sr.no` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `company` varchar(50) NOT NULL,
  `item_price` varchar(100) NOT NULL,
  `img_no` int(255) NOT NULL,
  `col_no` int(255) NOT NULL,
  `col-1` varchar(100) NOT NULL,
  `col-2` varchar(100) NOT NULL,
  `col-3` varchar(100) NOT NULL,
  `col-4` varchar(100) NOT NULL,
  `col-5` varchar(100) NOT NULL,
  `col-6` varchar(100) NOT NULL,
  `col-7` varchar(100) NOT NULL,
  `col-8` varchar(100) NOT NULL,
  `col-9` varchar(100) NOT NULL,
  `col-10` varchar(100) NOT NULL,
  `color_no` int(50) NOT NULL,
  `color-1` varchar(50) NOT NULL,
  `color-2` varchar(50) NOT NULL,
  `color-3` varchar(50) NOT NULL,
  `color-4` varchar(50) NOT NULL,
  `color-5` varchar(50) NOT NULL,
  `color-6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`Sr.no`, `item_name`, `company`, `item_price`, `img_no`, `col_no`, `col-1`, `col-2`, `col-3`, `col-4`, `col-5`, `col-6`, `col-7`, `col-8`, `col-9`, `col-10`, `color_no`, `color-1`, `color-2`, `color-3`, `color-4`, `color-5`, `color-6`) VALUES
(1, 'Infinix Note 8', 'Infinix', '29500', 5, 9, 'Brand Warranty', '64 MP Quad Camera', '6.95 Inches Display Capacitive Touchscreen', '16 MP Dual Front Camera', '5200 mAh Battery', 'PTA Approved', '6GB RAM', '128GB ROM', 'Immediate delivery', '', 3, 'Iceland Fantasy', 'Silver Diamond', 'Deep sea Luster', '', '', ''),
(2, 'Infinix Note 8i', 'Infinix', '26500', 6, 9, 'Brand warranty ', '6GB RAM', '126GB ROM', '6.78\" &#43; Display', '18W Fast Charge', '5200 mAh Battery', '48+8 MP Ultra HD Camera', 'Helio G80 Processor', 'Ultra speed', '', 3, 'Obsidian Black', 'Tranquil Blue', 'Ice Diamond', '', '', ''),
(3, 'Infinix Zero 8', 'Infinix', '38500', 3, 8, '8GB RAM', '128GB ROM', 'Helio G90T Processor', '64+48MP Ultra Night Camera', '6.85\"FHD+ Smooth Display', '33W Fast Charge', '4500 mAh Battery', 'Band warranty ', '', '', 3, 'Green Diamond', 'Black Diamond', 'Silver Diamond', '', '', ''),
(4, 'Infinix Zero 8i', 'Infinix', '33500', 5, 7, '8GB RAM', '128GB ROM', 'Helio G90T Processor ', '48+16MP Ultra Night Camera', '6.85\"FHD+ Smooth Display', '33W Fast Charge', '4500 mAh Battery ', '', '', '', 2, 'Silver Diamond', 'Green Diamond', '', '', '', ''),
(5, 'Infinix Hot 10', 'Infinix', '20500', 3, 10, '4GB RAM', '64GB ROM', 'Brand Warranty', 'SIM Dual SIM (Nano-SIM, dual stand-by', 'Size 6.78 inches, 109.2 cm2 (~82.2% screen-to-body ratio)', 'PLATFORM OS Android 10, XOS 6.0', 'MAIN CAMERA Quad 16 MP, (wide), PDAF', 'SELFIE CAMERA Single 8 MP, (wide)', 'BATTERY Type Li-Po 5200 mAh, non-removable', '2 MP, (macro and depth)', 3, 'Black', 'Ocean wave', 'Moonlight Jade', '', '', ''),
(6, 'Infinix Hot 9 play', 'Infinix', '18500', 4, 7, '4GB RAM', '64GB ROM', 'Android 9.0 OS', 'MediaTek Helio A25', '6.82 Inches IPS LCD Capacitive Touchscreen Display', '13 MP AI Dual Camera', '6000 mAh Battery', 'Brand warranty', '', '', 4, 'Cyan', 'Black', 'Ocean', 'Violet', '', ''),
(7, 'Infinix Smart 5', 'Infinix', '14500', 4, 7, '2GB RAM', '32GB ROM', '13 MP Ai Triple Camera', '5000 mAh Battery', 'Screen Size: 6.6\"HD+ Display', 'Brand warranty', 'Immediate delivery', '', '', '', 3, 'Ocean wave', 'Midnight black', 'Quetzal Cyan', '', '', ''),
(8, 'Infinix Smart 5', 'Infinix', '16500', 4, 7, '3GB RAM', '64GB ROM', '13 MP Ai Triple Camera', '5000 mAh Battery', 'Screen Size: 6.6\"HD+ Display', 'Brand warranty', 'Immediate delivery', '', '', '', 3, 'Ocean wave', 'Midnight black', 'Quetzal Cyan', '', '', ''),
(9, 'Samsung A12', 'Samsung', '28000', 4, 7, '4GB RAM', '64GB ROM', 'PTA Approved Mobile Phone', '1 Year Brand Warranty', '5000 Mah Battery', '48 MP + 5 MP + 2 MP + 2 MPBack Camera', '6.5 inches Display', '', '', '', 3, 'Blue', 'White', 'Black', '', '', ''),
(10, 'Samsung A12', 'Samsung', '32000', 4, 7, '4GB RAM', '128GB ROM', 'PTA approved ', 'Brand warranty', '5000 Mah Battery', '48 MP + 5 MP + 2 MP + 2 MPBack Camera', '6.5 inches Display', '', '', '', 3, 'Black', 'Blue', 'White', '', '', ''),
(11, 'Samsung A02s', 'Samsung', '23500', 6, 10, '4GB RAM', '64GB ROM', 'Awesome screen built for cinema', 'PTA Approved', 'Brand warranty', '5 MP Selfie Camera', '5000 mAh Battery', '6.5\" Display', '13 MP Main Camera', 'Stylish look, comfortable hold\r\nAwesome Quad camera to capture more', 3, 'Black', 'Blue', 'Red', '', '', ''),
(12, 'Samsung A02s', 'Samsung', '19500', 6, 10, '3GB RAM', '32GB ROM', 'PTA Approved', 'Brand warranty', '5 MP Selfie Camera', 'Awesome screen built for cinema', '5000 mAh Battery', '13 MP Main Camera', 'Stylish look, comfortable hold\r\nAwesome Quad camera to capture more', '6.5\" Display', 3, 'Black', 'Blue', 'Red', '', '', ''),
(13, 'Samsung A31', 'Samsung', '35500', 9, 10, '4GB RAM', '128GB ROM', 'PTA Approved', 'Brand warranty', '6.4\" FHD+ Super AMOLED', 'Infinity-U display', 'Multi Quad camera48 MP high-resolution main camera\r\n8MP Ultra Wide Camera (123°)', '5MP Depth and Macro Camera\r\nSelfi Camera 20 MP', 'Battery 5000 mAh\r\nFast charging', 'On-Screen Finger Print Security + Face recognition\r\nSecured by KNOX', 3, 'Black', 'Blue', 'Prism Crush White', '', '', ''),
(14, 'Samsung A51', 'Samsung', '52500', 6, 10, '8GB RAM', '128GB ROM', 'PTA Approved', 'Brand warranty', '32 MP Front Camera', '6.5\" Corning Gorilla Glass 3 - \r\nSuper AMOLED Captivativer Touchscreen', 'Non-removable Li-Po 4000 mAh battery\r\nFast battery charging 15W', '2.0, Type-C 1.0 reversible connector', 'Exynos 9611 Octa-Core Processor', '48+12+5+5 MP Rear Camera', 4, 'pink', 'white', 'Prism black', 'Metallic silver', '', ''),
(15, 'Samsung A51', 'Samsung', '48500', 6, 10, '6GB RAM', '128GB ROM', 'PTA Approved', 'Brand warranty', '48+12+5+5 MP Rear Camera', '32 MP Front Camera\r\n', 'Non-removable Li-Po 4000 mAh battery - \r\nFast battery charging 15W', '2.0, Type-C 1.0 reversible connector', '32 MP Front Camera', '6.5\" Corning Gorilla Glass 3 - \r\nSuper AMOLED Captivativer Touchscreen', 4, 'Pink', 'White', 'Prism black', 'Metalic sliver', '', ''),
(16, 'Oppo Reno 5', 'Oppo', '57000', 3, 10, 'PTA Approved', 'Brand warranty', 'Screen size 6.4 Inches\r\nScreen Type ( AMOLED)', 'Refresh Rate 90HHz - \r\nResolution 2400*1080 (FHD+)', 'Front camera 44MP - \r\nBack camera 64MP+8MP+2MP+2MP', '50 W Flash charge - \r\n4310 mAh(Type)', '5mins charging, 3 hours of video play back', 'Height 159.1mm - \r\nwidth 73.3mm - \r\nweight 171g', 'Qualcomm Snapdragon 720G', 'ColorOS 11.1', 2, 'Fantasy Silver', 'Starry Night', '', '', '', ''),
(17, 'Oppo F17', 'Oppo', '37500', 5, 10, '8GB RAM', '128GB ROM', 'PTA APPROVED', 'Brand warranty', 'SCREEN TYPE: OLED', 'SCREEN SIZE:6.44 inches, 7.45mm', 'RESOLUTION:1080 x 2400 pixels', ' 1/3.06\", PDAF8 MP2 MP, f/2.4, (depth)2 MP, f/2.4, (depth) - \r\nSELFIE CAMERA:16 MP', 'BATTERY:Li-Po 4015 mAh, non-removable\r\nSENSORS: Indisplay Finger Print', 'MAIN CAMERA:16 MP, f/2.2, (wide),', 2, 'Dynamic orange', 'Navy Blue', '', '', '', ''),
(18, 'Oppo F17 Pro', 'Oppo', '50000', 6, 10, '8GM RAM', '128GB ROM ', 'Ultra Sleek design - \r\nUltra Thin 7.48mm', '30W VOOC Flash 4.0', '6 Camera Phone MAIN: 48MP, 8MP, 2MP, 2MP Front: 16MP, 2MP', 'Gorila Glass 3 - \r\nOcta core Processor  -\r\nMini Punch Hole Diameter 3.7mm ', 'High Resolution 2400x1080 - \r\nScreen size 6.43\"', 'In- Display Finger Print 3.0', '30W VOOC Flash 4.0', 'Gorila Glass 3', 2, 'Magic blue', 'Matte black', '', '', '', ''),
(19, 'Oppo A12', 'Oppo', '19000', 3, 9, '3GB RAM', '32GB ROM', 'Display: 6.2 Iches Multi Touch IPS Capative Screen 3D Diamond Blaze Design', 'Storage: 3-GBRAM 32-GB ROM', 'peration System: Color OS 6.1.2 on Anroid 9.0', 'Processor: MT6757', 'Battery: 4230 mAH Large Battery', 'Camera: Dual Rare Cam 13MP+2MP Front 8MP', 'SIM Card Type: Dual Nano SIM Cards & Micro SD Card (Total 3 Slots)', '', 2, 'Black', 'Blue', '', '', '', ''),
(20, 'Vivo Y12s', 'Vivo', '20000', 3, 10, '3GB RAM', '32GB ROM', 'PTA Approved', 'Brand warranty', 'Screen:6.51-Inch HD+ (89% Screen to Body ratio)', 'Camera: 13+2 MP Main, 8MP Selfie', 'IPS LCD Display, 1600*720pixels', 'Battery:Non-removable,5000 mAh, 10W', 'Camera: 13+2 MP Main, 8MP Selfie', 'Sim:Dual SIM (Nano-SIM, dual stand-by)\r\nUnlock: Side Mounted Fingerprint & Face Access', 2, 'Black', 'White', '', '', '', ''),
(21, 'Vivo Y51s', 'Vivo', '37500', 5, 10, '8GB RAM', '128GB ROM', 'PTA Approved ', 'Brand warranty', 'Screen:6.58-Inch FHD+ (89% Screen to Body ratio)', 'IPS LCD Display, 2408*1080pixels', 'Camera: 48+8+2 MP Main, 16MP Selfie', 'Processor: Octa-core,SDM 662, 11nm,', 'Battery:Non-removable,5000 mAh, 18W Fast Charge (Type C)', 'Sim:Dual SIM (Nano-SIM, dual stand-by)', 2, 'Blue', 'Silver', '', '', '', ''),
(22, 'Vivo Y20s', 'Vivo', '27500', 7, 10, '4GB RAM ', '128GB ROM', 'PTA Approved', 'Brand warranty', 'Screen:6.51-Inch HD+ (89% Screen to Body ratio)', 'IPS LCD Display, 1600*720pixels', 'Processor:Octa-core,SDM 460, 13nm,', 'Camera: 13+2+2 MP Main, 8MP Selfie', 'Battery:Non-removable,5000 mAh, 18W Flash Charge', 'Os:Android 10, FunTouch OS 10.5\r\nSim:Dual SIM (Nano-SIM, dual stand-by)', 2, 'Black', 'Blue', '', '', '', ''),
(23, 'Vivo Y20', 'Vivo', '24500', 1, 7, 'PTA Approved', 'Brand warranty', '5000mAh', 'Side Fingerprint ', 'Triple Camera', '4GB RAM ', '64 ROM', '', '', '', 2, 'Dawn white', 'Obsidian black', '', '', '', ''),
(24, 'Techno Spark 6 go', 'Techno', '16000', 3, 9, '3GB RAM', '64GB ROM', 'PTA Approved', 'Brand warranty', '6.52 Inches Display', 'Capacitive Touchscreen', '13 MP Quad Camera', '5000 mAh Battery', 'Body type: Polycarbonate', '', 2, 'Ice jadet', 'Blue', '', '', '', ''),
(25, 'Techno Spark 6 go', 'Techno', '14000', 3, 9, '2GB RAM', '32 ROM', 'PTA APPROVED ', 'Brand warranty', '6.52 Inches Display', '13 MP Quad Camera', '5000 mAh Battery', 'Body type: Polycarbonate', 'Capacitive Touchscreen', '', 2, 'ice jadet', 'Blue', '', '', '', ''),
(26, 'Techno Spark 6 go', 'Techno', '17500', 3, 9, '4GB RAM', '64GB ROM', 'PTA Approved', 'Brand warranty', 'Body type: Polycarbonate', '6.52 Inches Display', 'Capacitive Touchscreen', '13 MP Quad Camera', '5000 mAh Battery', '', 2, 'Ice jadet', 'Blue', '', '', '', ''),
(28, 'Techno Pova', 'Techno', '24000', 3, 10, '6GB RAM', '128GB ROM', 'PTA Approved', 'Brand warranty', '6.8\" Dot-in Display', '8MP Front Camera with Dual Flash', '13MP Quad Rear Camera with Quad Flash', 'Octa-Core', '6000mAh Battery', '18W Flash Charge - Helio G80 Processor', 2, 'Speed purple', 'Magic Blue', '', '', '', ''),
(29, 'iphone 11', 'Apple', '118000', 3, 8, '128GB', 'Front & Back Glass', 'Brand Warranty', '12MP (Wide) + 12MP (Ultrawide) Camera', 'Non-active', ' 6.1 Screen ', 'Front Camera: 12MP, SL 3D Camera', 'Quad LED Dual Tone Flash', '', '', 3, 'Black', 'White', 'Red', '', '', ''),
(30, 'iPhone 12 Pro max', 'Apple', '216000', 4, 5, 'Brand new pack', 'brand warranty', '256GB', 'Model A2342', 'MG9H3LL-A', '', '', '', '', '', 1, 'Gold', '', '', '', '', ''),
(31, 'iPhone 12 Pro max', 'Apple', '215000', 4, 5, 'Non Active', 'Non PTA', '256GB', 'model A2410', 'brand warranty', '', '', '', '', '', 1, 'Gold', '', '', '', '', ''),
(32, 'iPhone 12 Pro max', 'Apple', '213000', 4, 5, 'Non Active', 'Non PTA', 'Model A2410', 'Brand new pack', 'Brand warranty', '', '', '', '', '', 1, 'Blue', '', '', '', '', ''),
(33, 'iPhone 12 Pro max', 'Apple', '205000', 4, 7, '128 GB', 'Brand new pack', 'Non active', 'Non PTA ', 'Model A2342', 'MG9H3LL-A', 'Brand warranty', '', '', '', 1, 'Gold', '', '', '', '', ''),
(34, 'iPhone 12 Pro max', 'Apple', '197000', 4, 5, '128GB', 'Model A2410', 'Non Active', 'Non PTA', 'Brand Warranty', '', '', '', '', '', 2, 'Gold', 'Blue', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Product_price` int(100) NOT NULL,
  `Product_qty` int(50) NOT NULL,
  `Product_clr` varchar(100) NOT NULL,
  `Date and Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `Product_name`, `Product_price`, `Product_qty`, `Product_clr`, `Date and Time`) VALUES
(1, 'Infinix Note 8', 29500, 1, 'Iceland Fantasy', '2021-05-04 00:48:27'),
(1, 'Infinix Note 8i', 26500, 1, 'Obsidian Black', '2021-05-04 00:48:28'),
(1, 'Infinix Hot 9 play', 18500, 1, 'Cyan', '2021-05-04 00:48:28'),
(1, 'Infinix Hot 10', 20500, 1, 'Black', '2021-05-04 00:48:28'),
(1, 'Infinix Smart 5', 14500, 1, 'Ocean wave', '2021-05-04 00:48:28'),
(2, 'Infinix Zero 8i', 33500, 1, 'Silver Diamond', '2021-05-07 02:31:01'),
(3, 'Techno Spark 6 go', 14000, 1, 'ice jadet', '2021-05-07 02:34:32'),
(3, 'iPhone 12 Pro max', 216000, 3, 'Gold', '2021-05-07 02:34:32'),
(3, 'Sony Headphones', 0, 1, 'red', '2021-05-07 02:34:34'),
(3, 'Airpods pro 4', 0, 8, 'white', '2021-05-07 02:34:34'),
(3, 'K8', 7000, 1, 'white', '2021-05-07 02:34:34'),
(3, 'KW66', 6500, 1, 'black', '2021-05-07 02:34:34'),
(4, 'Infinix Note 8i', 26500, 6, 'Obsidian Black', '2021-05-07 22:50:07'),
(4, 'Infinix Zero 8i', 33500, 1, 'Silver Diamond', '2021-05-07 22:50:08'),
(4, 'T500', 2600, 1, 'white', '2021-05-07 22:50:08'),
(4, 'HW12', 4500, 1, 'white', '2021-05-07 22:50:08'),
(4, 'W26 plus', 3600, 1, 'white', '2021-05-07 22:50:08'),
(4, 'FK88', 7500, 1, 'white', '2021-05-07 22:50:08'),
(4, 'FK98', 7000, 1, 'black', '2021-05-07 22:50:08'),
(4, 'Mc72', 3700, 1, 'white', '2021-05-07 22:50:08'),
(4, 'K8', 7000, 1, 'white', '2021-05-07 22:50:08'),
(7, 'T500', 2600, 1, 'white', '2021-05-11 20:36:02');

-- --------------------------------------------------------

--
-- Table structure for table `smartwatches`
--

CREATE TABLE `smartwatches` (
  `Sr.no` int(255) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_desc` varchar(2000) NOT NULL,
  `img_no` int(50) NOT NULL,
  `item_price` varchar(50) NOT NULL,
  `color_no` int(50) NOT NULL,
  `color-1` varchar(50) NOT NULL,
  `color-2` varchar(50) NOT NULL,
  `color-3` varchar(50) NOT NULL,
  `color-4` varchar(50) NOT NULL,
  `color-5` varchar(50) NOT NULL,
  `color-6` varchar(50) NOT NULL,
  `Date and Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smartwatches`
--

INSERT INTO `smartwatches` (`Sr.no`, `item_name`, `item_desc`, `img_no`, `item_price`, `color_no`, `color-1`, `color-2`, `color-3`, `color-4`, `color-5`, `color-6`, `Date and Time`) VALUES
(1, 'W26', 'Chipset: MTK2502D\r\nSize: 44*38*10.7mm\r\nCase Material: Zinc Alloy\r\nStrap: 44mm(changeable fruit straps)\r\nCharger: Magnetic pin charger\r\nScreen: 1.75 inch HD IPS, 320*385pexils\r\nBattery: 280MAH Large-capacity lithium polymer battery\r\nTouch Screen: 2.5D curved Capacitive full touch screen\r\nBluetooth Push: SMS, WeChat, Email, Facebook news and other APP notifications reminder\r\nHeart Rate Monitor: Heart rate monitor, monitor your heartbeat 24 hours\r\nECG: Analysis of ecg data\r\nPedometer: Exercise steps, calorie consumption, exercise mileage record\r\nSedentary Reminder: It\'s time to get moving and change your unhealthy lifestyle\r\nSleep Monitor: Record and analyze your sleep status scientifically and quantitatively\r\nFind Phone: Anti - loss reminder. Two - way search\r\nBluetooth Music: Control music playback on your phone\r\nCalling: support Bluetooth calls with Speaker and Microphone\r\nBluetooth Version: 4.0', 6, '3500', 1, 'asa', 'aa', 'aa', 'asa', 'assa', 'asaa', '2021-01-19 16:13:07'),
(2, 'W26 plus', 'Description\r\nDetail:\r\nW26 PLUS  Smart Watch With Heart rate Monitor ECG Fitness Tracker Smartwatch Full Touch Screen Bluetooth Answer Dial Call\r\n SPEEDLY CROWN WORKING\r\nSpecification\r\n· Chipset: MTK2502D\r\n· Size: 44*38*10.7mm\r\n· Case Material: Zinc Alloy\r\n· Strap: 44mm(changeable fruit straps)\r\n· Charger: Magnetic pin charger\r\n· Screen: 1.75 inch HD IPS, 320*385pexils\r\nBattery: 280MAH Large-capacity lithium polymer battery\r\n· Touch Screen: 2.5D curved Capacitive full touch screen\r\n· Bluetooth Push: SMS, WeChat, Email, Facebook news and other APP notifications reminder Heart Rate Monitor: Heart rate monitor, monitor your heartbeat 24 hours\r\n· ECG: Analysis of ecg data\r\n· Pedometer: Exercise steps, calorie consumption, exercise mileage record\r\n· Sedentary Reminder: It\'s time to get moving and change your unhealthy lifestyle\r\n· Sleep Monitor: Record and analyze your sleep status scientifically and quantitatively\r\n· Find Phone: Anti - loss reminder. Two - way search\r\n· Bluetooth Music: Control music playback on your phone\r\n· Calling: support Bluetooth calls with Speaker and Microphone\r\n· Bluetooth Version: 4.0\r\nPackage Includes\r\nSmart watch *1\r\nCharging cable*1\r\nUser manual*1', 5, '3600', 3, 'white', 'black', 'golden', '0', '0', '0', '2021-01-19 16:13:07'),
(3, 'T500', 'Mechanism:No\r\nType:On Wrist\r\nCompatibility:All Compatible\r\nROM:<128MB\r\nFunction: Passometer\r\nFunction:Sleep Tracker\r\nFunction:Message Reminder\r\nFunction:Call Reminder\r\nFunction:Answer Call\r\nFunction:Dial Call\r\nFunction:24 hour instruction\r\nFunction:Alarm Clock\r\nRear Camera:None\r\nLanguage:English\r\nRAM:<128MB\r\nWaterproof Grade:Life Waterproof\r\nMultiple Dials:Yes\r\nBattery Capacity:180-220mAh\r\nNote: BP, HR can close to actual but no comparison with any medical equipment\r\nCPU Model: MTK2502\r\nStyle:Sport\r\nMovement Type:Electronic\r\nScreen Shape:Square\r\nResolution:240*240\r\nAPP Download Available:No\r\nCase Material:Alloy\r\nCPU Manufacturer:Mediatek\r\nDisplay Size:1.54inch\r\nBand Material:Silica Gel\r\nApplication Age Group:Adult\r\nBattery Detachable:No\r\nBand Detachable:Yes\r\nFunction 1:Sleep Tracker\r\nFunction 2:Heart Rate Tracker\r\nFunction 4:Passometer', 5, '2600', 3, 'white', 'black', 'golden', '0', '0', '0', '2021-01-19 16:17:32'),
(4, 'HW12', 'Smart split screen display\r\n3D dynamic dial\r\nScan code connection\r\nLanguage switch\r\nBluetooth calls\r\nPassword lock Screen\r\nWeather\r\nPedometer\r\nPlay music\r\nCalories\r\nBreath Training\r\nDistance Hourly point\r\nMeasurement Sport mode\r\nHeart rate Monitor\r\nRaise your hand to brighten the screen\r\nBlood pressure\r\nSleep monitoring\r\nBlood oxygen\r\nMessage notification\r\nFatigue analysis\r\nSedentary reminder\r\nCalculator\r\nAlarm reminder\r\nWe Chat\r\nStopwatch\r\nBackground brightness adjustment', 5, '4500', 4, 'white', 'black', 'blue', 'red', '0', '0', '2021-01-19 16:17:32'),
(5, 'K8', 'Measuring body temperature, you can take your temperature in all the places at any time.\r\n\r\nInformation Push: Synchronous incoming messages notification from Notification Center in your phone (Note: For iPhone, Message icon is not available due to IOS system restriction, all incoming messages will be displayed in Notification icon instead)\r\n\r\nCall Reminder: Make & Answer calls after connect Bluetooth with Smart Phone\r\n\r\nMail list: Synchronous mobile phone address book\r\n\r\nHeart rate detection: All weather monitoring your heartbeat\r\n\r\nPedometer: Exercise, calorie consumption, mileage records\r\n\r\nSedentary reminder: It\'s up to the sport, changing the unhealthy lifestyle\r\n\r\nSleep monitoring: To record and analyze your sleep status objectively and scientifically.\r\n\r\nSport Functions: Support walking, running, rope skipping\r\n\r\nmountaineering, cycling, yoga, basketball. table tennis badminton more targeted measurement data more accurate data synchronization app display.\r\n\r\nBluetooth Camera: Remote control of mobile phone camera', 4, '7000', 3, 'white', 'black', 'golden', '0', '0', '0', '2021-01-19 16:20:54'),
(6, 'FK88', 'Color: Black\r\nGPS\r\nROM: <128MB\r\nRAM: <128MB\r\nCase Material: Aluminum alloy\r\nDisplay Size: 1.78inch\r\n2.5D curved capacitive full-fit touch screen\r\nResolution: 380*320\r\nAmoled Display\r\nBand Material: Silicon(Detachable)\r\nExtra Band Material: Nylon\r\nFitness Tracker\r\nPassometer\r\nMultiple Dial\r\nSleep & Heart Rate Tracker\r\nAnti-lost Reminder\r\nBluetooth: V3.0, V4.0\r\nExercise Step count, Exercise mileage Tracker & Calorie Consumption Record\r\nBluetooth push: SMS, WeChat, QQ news, and other client information and other communications in time to remind\r\nBluetooth Music Playback\r\nMessage Reminder\r\nCall Reminder\r\nAnswer Call & Dial Call\r\nPush Message\r\nRemote Control\r\n24 Hours Instruction\r\nChronograph\r\nAlarm Clock, Countdown & Calendar\r\nSpeed Measurement\r\nWater Proof\r\nBattery: 180- 220MAH high-capacity polymer\r\nCharging method: charging stand\r\nSupport Language: English, Turkish, French, Spanish, Italian, Dutch, Arabic, Portuguese, German, Polish, Russian.\r\nAvailable Colors: Black, Silver, Golden', 9, '7500', 3, 'white', 'golden', 'blue', '0', '0', '0', '2021-01-19 16:20:54'),
(7, 'FK98', 'size of the whole machine: 45*37.5*11.5mm.\r\nCase: alloy.\r\nStrap: silicone.\r\nCharging method: charging stand.\r\nColor: black, gold, silver.\r\nTouch screen: 2.5D curved capacitive full-fit touch screen.\r\nBluetooth push: SMS, WeChat, QQ news and other client information and other communications in time to remind.\r\nHeart rate detection: Heart rate monitoring, monitor your heartbeat around the clock.\r\nPedometer: exercise step count, calorie consumption, exercise mileage record.\r\nSedentary reminder: It’s time to get up and exercise and change the unhealthy lifestyle.\r\nSleep monitoring: objectively scientifically record and analyze your sleep status quantitatively.\r\nFind mobile phone function: anti-lost reminder. Two-way search.\r\nBluetooth music playback: Play on the watch.\r\nCall reminder: support.\r\nBluetooth function and version: 3.0, 4.0 support Bluetooth call.\r\nBattery specifications and capacity: 220MAH high-capacity polymer.\r\nVibration motor: support.\r\nLanguage packs: English, Turkish, French, German, Polish, Russian, Spanish, Italian, Dutch, Arabic, Portuguese.\r\nOther functions: alarm clock, calendar, stopwatch, computer.Package list:\r\n1 x smartwatch\r\n1 x nylon bracelet\r\n1 x rubber bracelet\r\n1 x retail box\r\n1 x charger cable\r\n1 x manual', 4, '7000', 4, 'black', 'white', 'red', 'golden', '0', '0', '2021-01-19 16:25:52'),
(8, 'Mc72', 'Main Functions:1.Bluetooth Calls,Answer Calls,Body temperature test, Heart Rate, BP & ECG,Steps, 44mm changeable bracelets,Beehive style menu,The nine box menu,IP68 waterproof,custom watch faces,20 Plus watch faces.2.PLEASE NOTE:This watch is the IWO 13 lite version MC72,not the IWO 13!!! Specification:1.Watch size: 44mm: 44*38*10.7mm2.Watch color: Color: Black, Silver, Rose gold3.Screen size: 44mm: 1.72 inch 4.Screen: HD IPS, 320x385 Pixels 2.5D Curved full touch screen5.CPU:MTK2502C6.Memory: 128M+64M7.Battery: 280mAh Li-ion battery, 1-2 days battery life, unchangeable8.Charger:Magnetic charger,DO NOT charged the watch with the high power chargers(1A or above chargers)!!just use the 0.5-1A chargers or computer USB.9.Bluetooth version:3.0 4.010.System: Support AndroidOS 4.4 above & IOS 8.0 above Functions:1.Touch Screen:2.5D curved Capacitive full touch screen2.Bluetooth Push:SMS, WeChat, Email, Facebook news and other APP notifications reminder3.Heart Rate Monitor:Heart rate monitor, monitor your heartbeat 24 hours4.ECG:ECG Heart Rate Monitor5.Pedometer:Exercise steps, calorie consumption, exercise mileage record6.Sedentary Reminder:It\'s time to get moving and change your unhealthy lifestyle7.Sleep Monitor:Record and analyze your sleep status scientifically and quantitatively8.Find Phone:Anti - loss reminder. Two - way search9.Bluetooth Music Control music playback on your phone10.Calling:support Bluetooth calls with Speaker and Microphone11:Custom watch faces:You can choose your favorite picture as the watch face12.Other function:Alarm clock, calendar, stopwatch, Calculator13.This smart watch it is bettery than W26 W46,it has 20 Plus watch faces to choose and support upload your photo to the watch as the wallpaper.the smart watch has the rotatable button.', 3, '3700', 2, 'white', 'black', '', '0', '0', '0', '2021-01-19 16:25:52'),
(9, 'FK78', 'size of the whole machine: 45*37.5*11.5mm.\r\nCase: alloy.\r\nStrap: silicone.\r\nCharging method: charging stand.\r\nTouch screen: 2.5D curved capacitive full-fit touch screen.\r\nBluetooth push: SMS, WeChat, QQ news, and other client information and other communications in time to remind.\r\nHeart rate detection: Heart rate monitoring, monitor your heartbeat around the clock.\r\nPedometer: exercise step count, calorie consumption, exercise mileage record.\r\nSedentary reminder: It\'s time to get up and exercise and change the unhealthy lifestyle.\r\nSleep monitoring: objectively scientifically record and analyze your sleep status quantitatively.\r\nFind a mobile phone function: an anti-lost reminder. Two-way search.\r\nBluetooth music playback: Play on the watch. Call reminder: support.\r\nBluetooth function and version: 3.0, 4.0 support Bluetooth call.\r\nBattery specifications and capacity: 220MAH high-capacity polymer.\r\nVibration motor: support.\r\nLanguage packs: English, Turkish, French, German, Polish, Russian, Spanish, Italian, Dutch, Arabic, Portuguese.\r\nOther functions: alarm clock, calendar, stopwatch, computer', 6, '7000', 0, '0', '0', '0', '0', '0', '0', '2021-01-19 16:29:11'),
(10, 'T600', 'T600 Smartwatch Women Top Smart Watch Heart Rate Monitor Whatsapp Message Reminder Sports Activity Tacker for IOS Android VS T500Smartwatch Specification:\r\nscreen size:.154 HD IPS, 240*240 Touch screen 2.5D fox surface capacitive full-fit touch screen\r\nCPU chip:MTK2502\r\nRAM/ROM:34M/128M\r\nPhone version require:Android 5.0 and above ,IOS 9.0 and above\r\nWaterproof:IP67 waterproof\r\nMajor Function: Heart rate monitor ,sleep monitor,bluetooth call and message reminder,remote music/camera.Alarm clock, stopwatch\r\npacking list\r\nsmartwatch*1\r\ncharging cable*1\r\nuser manual*1\r\noriginal retail box*1', 4, '3700', 2, 'white', 'black', '0', '0', '0', '0', '2021-01-24 21:36:53'),
(11, 'Y68', 'Heart Rate Monitor\r\nBlood Pressure Monitor\r\nBlood Oxygen Monitor\r\nSleep Monitor\r\nMulti-sport Modes\r\nPedometer\r\nCall or Message Reminder\r\nCall ID Display\r\nInformation Push Reminder (SMS/QQ/WeChat/Skype/Facebook/Twitter/Line/WhatsApp)\r\nAuto Light-up Screen\r\nAlert Type: Vibration\r\nOther Functions: Alarm clock , Camera remote control,Anti-lost\r\nAPP Name: Fitpro\r\nCPU: Hs6620D\r\nBluetooth Version: BT 4.0 or above\r\nCompatible OS: Android 4.4 or above , iOS 8.0 or above\r\nOperating Mode: Single Touch Key\r\nWaterproof: IP67, Do not support swimming and take a shower.\r\nScreen Size: 1.3inch TFT\r\nResolution: 240*240 pixels\r\nBattery Capacity: 100 mAh', 4, '2000', 3, 'white', 'black', 'golden', '0', '0', '0', '2021-01-24 21:36:53'),
(12, 'FK75', 'Screen size:1.54-inch IPS color screen\r\nResolution: 240x240\r\nBattery: rechargeable polymer battery\r\nBluetooth: 4.2\r\nTouch: Full screen touch\r\nAPP: IOS 9.0 and above, android 5.0 and above\r\nStrap style: Solid color silicone strap\r\nPhone Function: Make Phone Call Directly From The Smart Watch, Including Answering And Dial-Up. Support Make Calls By Bluetooth.\r\nCapacitive full-fit touch screen\r\nOther features Alarm clock, calendar, stopwatch, Heart Rate Monitor\r\nIP67 Waterproof and Dustproof\r\nCall Reminder, Message Reminder, Reminder for drinking, Sedentary Reminder. Open the function in APP, the bracelet will vibrate when the phone comes a new message(SMS, QQ, Facebook, Twitter, Whatsapp, WeChat.)', 2, '5300', 4, 'white', 'black', 'blue', 'golden', '0', '0', '2021-01-24 21:41:59'),
(13, 'HW22', '100% Original Sealed Pack\r\nUnprecedented HD Experience 341 PPI AMOLED Display\r\nA Stylish Large Square Screen That Shows More Content.\r\nNew Editable Modular Watch Faces, For What You Care About\r\nModular Information Watch Face\r\nModular Analog Watch Face\r\n5ATM Water Resistance and Professional Swim Tracking\r\n12 Mainstream Exercise Modes.\r\nSlim Watch Body\r\nBioTrackerPPG Biological Tracking Optical Sensor & Realbeats AI-Based Biological Data Engine.\r\nAll-Day Heart Rate and Automatic Arrhythmia Identification.', 3, '4400', 4, 'white', 'black', 'blue', 'red', '0', '0', '2021-01-24 21:41:59'),
(14, 'T55 plus', 'T55 Plus Smart Watch is a perfect and most high graded copy of Apple Watch Series 6 (a master clone). This smartwatch has all the next level features one could look for with long battery life and most importantly t55 plus comes with Singal strap.\r\nGPU: MTK2503AVE Display: 1.7 \" full display (full touch screen) Resolution: 44mm 1.7 inch 240 x 240 Operation Mode: Touch-Screen Screen Positioning: support GPS Beidou positioning, data is sent to apk via bluetooth Engine: vibration motor Heart rate sensor: pah8001es Charging method: wireless charging support (built-in coil) Housing: Aluminum Alloy Case Battery: Built-in Lithium Battery Bluetooth Version: 4.0 Operating Voltage: 4.2 v\r\nAnswer Calls, Messages, Apps & Fitness Notifications\r\n1 Strap included inside the box\r\nManual & Magnetic charger\r\n100% Original Products', 2, '3700', 4, 'white', 'black', 'golden', 'blue', '0', '0', '2021-01-24 21:46:05'),
(15, 'D18', 'Network Mode:None\r\nSIM Card Available:No\r\nSystem:None\r\nMultiple Dials:Yes\r\nROM:\r\nFunction:Passometer\r\nFunction:Fitness Tracker\r\nFunction:Sleep Tracker\r\nFunction:Message Reminder\r\nFunction:Call Reminder\r\nFunction:Remote Control\r\nFunction:Push Message\r\nFunction:24 hour instruction\r\nFunction:Alarm Clock\r\nFunction:Power Reserve\r\nFunction:Week\r\nFunction:Month\r\nFunction:Heart Rate Tracker\r\nFunction:Noctilucent\r\nFunction:Lighting\r\nRear Camera:None\r\nBattery Capacity:\r\nLanguage:English\r\nLanguage:Russian\r\nLanguage:Spanish\r\nLanguage:Portuguese\r\nLanguage:French\r\nLanguage:German\r\nRAM:\r\nMechanism:No\r\nCompatibility:All Compatible\r\nGPS:No\r\nType:On Wrist\r\nWaterproof Grade:Life Waterproof\r\nBand Material:Silica Gel\r\nCPU Manufacturer:MediaTek\r\nAPP Download Available:No\r\nApplication Age Group:Adult\r\nBattery Detachable:No\r\nMovement Type:Electronic\r\nStyle:Sport\r\nScreen Shape:Round\r\nCase Material:Plastic\r\nBand Detachable:Yes\r\nResolution:240*240\r\nDisplay Size:1.3 inch\r\nmessage reminder:whatsapp, facebook, twitter, ins\r\nsupport:IOS 9.0 & Android 5.0 above, bluetooth 4.0 \r\nFunction:\r\n\r\n\r\nHeart Rate Tracker\r\n\r\nBlood Pressure\r\n\r\nBlood Oxygen\r\n\r\nPassometer\r\n\r\nSports moder: steps, skiipping, situp\r\n\r\nSleep Tracker\r\n\r\nCalorie\r\n\r\nPush Message(facebook, twitter, ins, whatsapp )\r\n\r\nCall Reminder\r\n\r\nAlarm Clock\r\n\r\nAnti-lost\r\n\r\nRemote Control\r\n\r\nSocial Media Notifications\r\n\r\nMessage Reminder\r\n\r\nAPP Language: Korean,Russian,Spanish,English,German,Italian,Japanese,French,Chinese\r\n\r\n\r\nSpecification:\r\n\r\n\r\nStyle: Sport\r\n\r\nCase Material: PLASTIC\r\n\r\nWaterproof Grade:Life Waterproof IP67\r\n\r\nScreen Type: 1.3 inch TFT 240*240\r\n\r\nBand Detachable: Yes\r\n\r\nTouch Screen: Yes\r\n\r\nCompatibility: All Compatible\r\n\r\nBlutooth: 4.0\r\n\r\nBattery: 90mAh\r\n\r\nStandby time: about 5 days\r\n\r\nWorking time: about 3 days\r\n\r\nSystem: IOS 9.0 & Android 5.0 above\r\n\r\nAPP name: fitpro\r\n\r\n\r\nPackage include:\r\n\r\n\r\n1 * Smart watch( No charger in the box)\r\n\r\n1 * User manual\r\n\r\n1 * Retail box', 4, '1570', 1, 'black', '0', '0', '0', '0', '0', '2021-01-24 21:46:05'),
(16, 'W3', 'Model: W3\r\nChip: Nordic 52832\r\nDisplay: color screen 1.3 ’\r\nEndurance: 200mAh\r\nWaterproof level: IP67\r\nStandby time: 10 days\r\nBluetooth: 4.0 Charging: magnetic charging\r\nCase material: 316 stainless steel + ABS + PC\r\nMaterial: environmental protection, scratch-resistant TPU, waterproof grade: IP67 / waterproof\r\nNet weight: 38g Gross weight: 165g\r\nPacking size: 11.8 * 16 * 3.2cm\r\nSupport mobile version: iOS 8.0 or later Android 4.4 or later', 5, '6800', 1, 'black', '0', '0', '0', '0', '0', '2021-01-24 21:51:40'),
(17, 'T500 Plus', 'Screen Size:1.54inch\r\nTouch screen\r\nFlash:8M bit 16Mbit\r\nG-sensor:support\r\nHeart rate sensor:support\r\nMotor:support\r\nBattery capacity:150mAh\r\nSystem compatible for: IOS 9.0 Android 5.0 and above\r\nAPP languages:English, simplified Chinese, traditional Chinese, Netherlands, Russia, France, Germany, Portugal, Spain, Turkey, Japanese, Poland, Arabia, Malaysia, Thai, Czech, Slovak', 3, '3400', 3, 'white', 'black', 'golden', '0', '0', '0', '2021-01-24 21:55:09'),
(18, 'MC57', 'SIM Card Available: No\r\nSystem: None\r\nGPS: No\r\nType: On Wrist\r\nCompatibility: All Compatible\r\nROM: <128MB\r\nFunction: Passometer\r\nFunction: Fitness Tracker\r\nFunction: Sleep Tracker\r\nFunction: Message Reminder\r\nFunction: Call Reminder\r\nFunction: Answer Call\r\nFunction: Dial Call\r\nFunction: Remote Control\r\nFunction: Push Message\r\nFunction: Alarm Clock\r\nFunction: Heart Rate Tracker\r\nRear Camera: None\r\nLanguage: English\r\nRAM: <128MB\r\nWaterproof Grade: Life Waterproof\r\nMultiple Dials: Yes\r\nBattery Capacity: 180-220mAh\r\nNetwork Mode: None\r\nCPU Model: HS6621\r\nStyle: SPORT\r\nMovement Type: Electronic\r\nScreen Shape: SQUARE\r\nResolution: 240*288\r\nAPP Download Available: No\r\nCase Material: Alloy\r\nCPU Manufacturer: Mediatek\r\nDisplay Size: 1.57 inch\r\nBand Material: Silica Gel\r\nApplication Age Group: Adult\r\nBattery Detachable: No\r\nBand Detachable: Yes\r\nAPP: Wearfit pro', 3, '4300', 2, 'white', 'black', '0', '0', '0', '0', '2021-01-24 21:55:09'),
(19, 'DT55', '1. 1.3 inch round touch screen\r\n2. Always-on standby dial display\r\n3. Dynamic UI interaction, following the rhythm, gives you a different experience\r\n4. 24-hours heart rate monitoring guards health\r\n5. High performance chips, faster and more stable\r\n6. Intelligent science movement\r\n7. Lightweight to exercise, music is often accompanied\r\n8. All-day activity tracking, convenient life assistant\r\n9. Scientific sleep, documenting complete sleep structure\r\n10. Body material: zinc alloy\r\n11. Strap material: silicone / steel belt\r\n12. capacity: 230mAh\r\n13. Body size: 45.7x11.8mm', 7, '4000', 2, 'white', 'black', '0', '0', '0', '0', '2021-01-24 21:59:35'),
(20, 'W98', 'Chipset MTK2502C\r\n\r\nProduct Model Smart watch\r\n\r\nModel Size Watch dial 44mm: 44*38*10.7mm\r\n\r\nPackage Size 141*141*51mm\r\n\r\nWeight 50g\r\n\r\nWatch Case Aluminium & Ceramicsm\r\n\r\nWatch band TPDIV, Apple standard strap can change\r\n\r\nCharger Wireless Charger\r\n\r\nGreen product CE\r\n\r\nColor DK metal, Silver,Rose gold\r\n\r\nMemory 256M+64M\r\n\r\nScreen 1.54 HD IPS,240*240\r\n\r\nTouch Screen 2.5D curved screen\r\n\r\nBluetooth Push Calls,SMS, Email, Facebook etc.notifications display with contents\r\n\r\nBatteries remove Not Support\r\n\r\nHeart Rate Monitor 24 hours monitor\r\n\r\nECG ECG data analysis\r\n\r\nPedometer Steps, Distance, Calories\r\n\r\nSedentary Reminder time to get up exercise and change unhealth lifestyle\r\n\r\nSleep Monitor Record and analyze your sleep condition objectively, scientifically and quantitatively\r\n\r\nFind Phone Anti-lost,Two-way search\r\n\r\nBluetooth Music Synchronization phone music\r\n\r\nCalling Reminder Support\r\n\r\nBluetooth Version 3.0,4.0\r\n\r\nAlarm Clock Support\r\n\r\nCalculator Support\r\n\r\nWorld Time Support\r\n\r\nStopwatch Support\r\n\r\nBattery 230MAH\r\n\r\nCharge specification Wireless charger\r\n\r\nHeadset Not Support\r\n\r\nSpeaker Support\r\n1*W98 smart watch\r\n1*Charging cable\r\n1*Manual', 7, '3200', 3, 'white', 'black', 'golden', '0', '0', '0', '2021-01-24 21:59:35'),
(21, 'W36', 'Support Bluetooth call, heart rate, ECG, step counter, fruit 4 generation size..\r\nBluetooth push SMS SMS WeChat QQ news and other client information and other timely reminders..\r\nHeart rate detection Heart rate monitoring, monitoring your heartbeat around the clock..\r\nPedometer, sports calorie, calorie consumption, exercise mileage record..\r\nSedentary reminder to get up and change the unhealthy lifestyle..\r\nchangeable straps', 3, '2600', 3, 'white', 'black', 'golden', '0', '0', '0', '2021-01-24 22:03:17'),
(22, 'T6', 'language: Chinese, Traditional Chinese, English, Korean, German, Spanish, Japanese, French, Italian, Russian, Portuguese, Arabic, Ukrainian\r\nSports record: step, exercise time, mileage, calorie consumption, sleep monitoring, Health monitoring: real-time heart rate measurement (all-day heart rate measurement\r\nFunction:Smart Reminder: Custom Alarm Reminder, Sedentary Reminder, Call Reminder\r\nInformation Push Reminder:(SMS/QQ/WeChat/Skype/Facebook/Twitter/Line/WhatsApp)\r\nDisplay specifications:1.3 inch IPS color screen\r\nresolution 240*240\r\nType of battery : 200mah\r\nDynamic heart rate / blood pressure: support\r\nFont Push Type: Multi-language font\r\nSupport APP: for Da Fit\r\nMobile phone system requirements: Support Android 4.4 and above, Apple IOS9.0 or above\r\nColour:Black + Blue\r\nMaterial:Silica gel\r\nPackage Contents:\r\n1* smart watch\r\n1* charging cable\r\n1* instruction manual', 3, '6500', 2, 'white', 'golden', '0', '0', '0', '0', '2021-01-24 22:03:17'),
(23, 'KW66', 'Metal body, ip68 waterproof, 30 days long lasting use\r\n24-hour heart rate monitoring, support custom dial\r\n1.28 inch dial, 13 sports modes\r\nSupport blood pressure monitoring, heart rate monitoring and sleep monitoring', 4, '6500', 2, 'white', 'black', '0', '0', '0', '0', '2021-01-24 22:11:37'),
(24, 'K6 plus', 'Changeable 22mm strap\r\nHeart rate detection/Blood oxygen detection / Blood pressure detection/\r\nTime ,Pedometer,Calorie Consumption,Distance Calculation,Sleep time ,/Off dispaly\r\nStandard exercises functions (Pedometer,Calorie Consumption,Distance Calculation)\r\nSleep detection (Sleep time ,Sleep quality)\r\nCalls to remind,SMS Reminder,Third-party messaging reminder :Multilingual push\r\nAnti-lost function (Overtop the working connection distance between the mibile phone and bracelet will give the reminder)\r\nClock alarm,Task Reminder (Sedentary reminder /Drink water reminder)\r\nSynchronous data to APK/APP\r\nSpecifications:\r\nScreen size: 1.3inch IPS Round screen\r\nScreen resolution: 240x240\r\nBluetooth: 4.0 (low power consumption)\r\nWaterproof index: IP68\r\nSensor:G-sensor\r\nChip:NRF52832\r\nRAM:64K(Flash 512K)\r\nAppearance material top shell: alloy\r\nStrap: Stainless steel Milanese\r\nBattery type: lithium battery 230mAh\r\nCharging type: USB charging\r\nCharging time is about 2 hours\r\nNormal use time: 7-10days\r\nStandby time: 12-15 days\r\nMemory: 7 days detailed exercise record\r\nControl mode: touch button control, APP control\r\nBracelet showing: international icon\r\nAPP: supports languages:Chinese (simplified, traditional),English, French, German, Italian, Japanese, Korean, Malay, Portuguese, Russian, Spanish\r\nCompatible system :Android system 4.4 version or above ;iOS system 9.0 version or above ;Support bluetooth with 4.0 version; APP (wearhealth) for this watch is user friendly.\r\nCharacteristics:Supports real-time monitoring of heart rate, blood pressure and blood oxygen.Activity tracking throughout the day: Exercise time, calories burned, steps and mileage.It allows you to control the quality of your sleep.Supports Alarm clock setting and sedentary reminder.Supports changing the theme and preventing the watch or mobile phone from being lost.The screen will wake up when you turn your wrist.Multisport mode, includes walking, running, cycling and climbing.', 3, '4200', 1, 'red', '0', '0', '0', '0', '0', '2021-01-24 22:11:37'),
(25, 'Apple Series 5', 'Dimensions	44 x 38 x 10.7 mm (1.73 x 1.50 x 0.42 in)\r\nWeight	47.8 g (1.69 oz)\r\nBuild	Glass front (Sapphire crystal), ceramic/sapphire crystal back, stainless steel frame\r\nSIM	eSIM\r\n 	50m water resistant \r\nECG certified (region dependent SW application; HW available on all models) Type	Retina LTPO OLED, 1000 nits (peak)\r\nSize	1.78 inches, 10.0 cm2 (~60.0% screen-to-body ratio)\r\nResolution	448 x 368 pixels (~326 ppi density)\r\nProtection	Sapphire crystal glass\r\n 	3D Touch display\r\nAlways-on display \r\nSOUND	Loudspeaker	Yes\r\n3.5mm jack	No\r\nCOMMS	WLAN	Wi-Fi 802.11 b/g/n\r\nBluetooth	5.0, A2DP, LE\r\nGPS	Yes, with A-GPS, GLONASS, GALILEO, QZSS\r\nNFC	Yes\r\nRadio	No\r\nUSB	No\r\nFEATURES	Sensors	Accelerometer, gyro, heart rate (2nd gen), barometer, compass\r\n 	Natural language commands and dictation (talking mode)\r\nBATTERY	Type	Li-Po 296 mAh (1.13 Wh), non-removable\r\nCharging	Wireless charging\r\nStand-by	Up to 18 h (mixed usage)', 2, '66000', 1, 'anonymous', '0', '0', '0', '0', '0', '2021-01-27 00:43:40'),
(26, 'Apple Series 6', 'Accelerometer, gyro, heart rate (2nd gen), barometer, always-on altimeter, compass, SpO2, VO2max\r\n 	Natural language commands and dictation (talking mode)\r\nUltra Wideband (UWB) support \r\nWireless charging\r\nWLAN	Wi-Fi 802.11 b/g/n, dual-band\r\nBluetooth	5.0, A2DP, LE\r\nGPS	Yes, with A-GPS, GLONASS, GALILEO, QZSS\r\nNFC	Yes\r\nRadio	No\r\nUSB	No\r\nType	Retina LTPO OLED, 1000 nits (peak)\r\nSize	1.78 inches, 10.0 cm2 (~60.0% screen-to-body ratio)\r\nResolution	448 x 368 pixels (~326 ppi density)\r\nProtection	Sapphire crystal glass\r\n 	Always-on display', 2, '76000', 0, '', '0', '0', '0', '0', '0', '2021-01-27 00:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `tablets`
--

CREATE TABLE `tablets` (
  `Sr.no` int(255) NOT NULL,
  `item_company` varchar(50) NOT NULL,
  `item_name` varchar(40) NOT NULL,
  `item_price` varchar(40) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `internal_memory` varchar(20) NOT NULL,
  `color_no` int(255) NOT NULL,
  `color-1` varchar(20) NOT NULL,
  `color-2` varchar(20) NOT NULL,
  `color-3` varchar(20) NOT NULL,
  `color-4` varchar(20) NOT NULL,
  `color-5` varchar(20) NOT NULL,
  `item_condition` varchar(20) NOT NULL,
  `battery` varchar(20) NOT NULL,
  `Date and Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablets`
--

INSERT INTO `tablets` (`Sr.no`, `item_company`, `item_name`, `item_price`, `ram`, `internal_memory`, `color_no`, `color-1`, `color-2`, `color-3`, `color-4`, `color-5`, `item_condition`, `battery`, `Date and Time`) VALUES
(1, 'samsung', 'Samsung Tab 3', '25000', '2GB', '256GB', 4, 'white', 'black', 'grey', 'pink', '', 'New', '1500mAh', '2020-12-25 00:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `user_id` int(255) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone-no` varchar(11) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Comment` varchar(100) NOT NULL,
  `Date and Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`user_id`, `Name`, `Email`, `Address`, `Phone-no`, `City`, `Comment`, `Date and Time`) VALUES
(1, 'asas', 'ass@as.as', '1', '1', '1', '', '2021-05-04 00:48:27'),
(2, 'SSS', 'ssss@ss.ss', '1', '1', '1', '1', '2021-05-07 02:30:59'),
(3, 'aaaa', 'aaaa@aa.aa', '1', '1', '1', '1', '2021-05-07 02:34:32'),
(4, 'asas', 'asas@as.as', '1', '1', '1', '1', '2021-05-07 22:50:07'),
(5, 'asas', 'asas@as.as', '1', '1', '1', '1', '2021-05-07 22:53:06'),
(6, 'as', 'as@as.aaa', 'a', '1', 'as', '<script>alert(\"Hacked\");</script>', '2021-05-10 02:05:23'),
(7, 'iuhih', 'asas@aw.aa', '1', '1', '1', '1', '2021-05-11 20:36:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`Sr.no`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`Sr.no`);

--
-- Indexes for table `smartwatches`
--
ALTER TABLE `smartwatches`
  ADD PRIMARY KEY (`Sr.no`);

--
-- Indexes for table `tablets`
--
ALTER TABLE `tablets`
  ADD PRIMARY KEY (`Sr.no`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `Sr.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `Sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `smartwatches`
--
ALTER TABLE `smartwatches`
  MODIFY `Sr.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tablets`
--
ALTER TABLE `tablets`
  MODIFY `Sr.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
