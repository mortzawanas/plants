SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tadmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `datetime` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `tadmin` (`ID`, `AdminName`, `UserName`, `Email`, `Password`, `datetime`) VALUES
(1, 'Admin', 'admin', 'admin@test.com', '21232f297a57a5a743894a0e4a801fc3', '2024-04-01 04:36:52');

-- --------------------------------------------------------------
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Gender`, `Age`,  `Address`, `Message`, `create_date`, `status`, `Password`) VALUES
(1, 'user', '7700000000', 'user@test.com', 'Male', 33,  'baghdad', ' Hello', '2024-04-15 17:25:27', 1, 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(100) DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `price` float(11) DEFAULT NULL,
  `rate` int(5) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;
--
-- Dumping data for table `users`
--

INSERT INTO `posts` (`FullName`, `Category`, `price`, `rate`, `description`, `create_date`) VALUES
('وردة الفاخرة', 'الورود', 15.50, 4, 'هذه الوردة ذات جودة عالية وتعطي رائحة جميلة', '2024-04-15 17:25:27'),
('زهرة الغاردينيا', 'الزهور العطرية', 25.99, 5, 'هذه الزهرة تتميز برائحتها الزكية وجمالها الساحر', '2024-04-15 17:25:27'),
('زنبق الأرز', 'الزهور البرية', 12.75, 4, 'تعتبر زنبق الأرز من الزهور النادرة والجميلة جداً', '2024-04-15 17:25:27'),
('توليب ذو اللون الأحمر', 'الزهور النبيلة', 18.99, 5, 'هذا الزهرة ذات لون أحمر جميل وتعطي لمسة من الأناقة في الحديقة', '2024-04-15 17:25:27'),
('وردة البنفسج', 'الورود الملونة', 14.25, 4, 'زهرة البنفسج تمثل الجمال والرومانسية في نفس الوقت', '2024-04-15 17:25:27'),
('زهرة الياسمين العطرية', 'الزهور العطرية', 22.50, 5, 'هذه الزهرة تتميز برائحتها الزكية التي تملأ البيت بالعطر الجميل', '2024-04-15 17:25:27'),
('وردة الليلك', 'الورود الفاخرة', 28.75, 5, 'وردة الليلك تمثل الفخامة والجمال في أرض الزهور', '2024-04-15 17:25:27'),
('أوركيد الفانيليا', 'الزهور الاستوائية', 19.99, 4, 'أوركيد الفانيليا تعطي إحساساً بالهدوء والراحة في المنزل', '2024-04-15 17:25:27'),
('زهرة العنبر', 'الزهور العطرية', 17.50, 4, 'هذه الزهرة تعطي رائحة العنبر الجميلة التي تساعد على الاسترخاء', '2024-04-15 17:25:27'),
('زهرة الخوخ', 'الزهور المثمرة', 24.99, 5, 'هذه الزهرة تعتبر مثالية للمناخ الحار وتتميز بثمارها اللذيذة', '2024-04-15 17:25:27'),
('زهرة البابونج', 'الزهور العشبية', 13.75, 4, 'زهرة البابونج تستخدم في العديد من الأغراض الطبية وتمتاز برائحتها المميزة', '2024-04-15 17:25:27'),
('زهرة الكاميليا', 'الزهور الملونة', 21.50, 5, 'تعتبر زهرة الكاميليا من أجمل الزهور وأكثرها أناقة', '2024-04-15 17:25:27');


-- --------------------------------------------------------