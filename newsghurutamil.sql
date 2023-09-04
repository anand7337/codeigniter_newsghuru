-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 12:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsghurutamil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `username`, `password`) VALUES
(1, 'Newsghurutamil', 'Admin@2023');

-- --------------------------------------------------------

--
-- Table structure for table `banners_table`
--

CREATE TABLE `banners_table` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners_table`
--

INSERT INTO `banners_table` (`id`, `category`, `image1`, `link`, `date`) VALUES
(8, 'top', 'ban-01.png', 'https://cineulagam.com/', ' 01 / 08 / 23');

-- --------------------------------------------------------

--
-- Table structure for table `bollywood_table`
--

CREATE TABLE `bollywood_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `celebrity_table`
--

CREATE TABLE `celebrity_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `english_table`
--

CREATE TABLE `english_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events_table`
--

CREATE TABLE `events_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gossips_table`
--

CREATE TABLE `gossips_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hindi_table`
--

CREATE TABLE `hindi_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hollywood_table`
--

CREATE TABLE `hollywood_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_table`
--

CREATE TABLE `home_table` (
  `id` int(11) NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_table`
--

INSERT INTO `home_table` (`id`, `category`, `title`, `tags`, `sub_title1`, `sub_desc1`, `image1`, `sub_title2`, `sub_desc2`, `image2`, `date`) VALUES
(4, 'Important', 'தனது தந்தையுடன் எடுத்துக்கொண்ட புகைப்படத்தை வெளியிட்ட சினேகா.. அழகிய தருணம்', '#Prasanna #Sneha #Actress', 'சினேகா', 'தமிழ் திரையுலகில் ரசிகர்களால் புன்னகை அரசி என கொண்டாடப்பட்ட நடிகைகளில் ஒருவர் சினேகா.\r\n\r\nவிஜய், அஜித் என தொடர்ந்து பல முன்னணி நட்சத்திரங்களுடன் நடித்து வந்த நடிகை சினேகா பிரபல நடிகர் பிரசன்னாவை காதலித்து திருமணம் செய்துகொண்டார். இந்த காதல் ஜோடிக்கு தற்போத', '23-64c72443f1cb2[1].webp', 'சினேகாவின் தந்தை', 'இன்ஸ்டாகிராமில் ஆக்டிவாக இருக்கும் சினேகா அவ்வப்போது தன்னுடைய குடும்பத்தினருடன் எடுத்துக்கொள்ளும் புகைப்படங்கள் அல்லது தனது போட்டோஷூட் புகைப்படங்களை அதில் பதிவு செய்வார்.', '23-648bc7921a30d.jpg', ' 31 / 07 / 23'),
(5, 'Latest', 'வீரன் திரைவிமர்சனம்', 'hiphop', 'கதைக்களம்', 'வீரனூரில் வாழ்ந்து வரும் கதாநாயகன் குமரன் {ஹிப் ஹாப் ஆதி} தனது சிறு வயதில் மின்னலால் திடீரென தாக்கப்பட்டு சுய நினைவை இழக்கிறார். உடனடியாக ஆதியை மருத்துவமனையில் அனுமதிக்கினர். மருத்துவர்களின் சிகிச்சையில் இருக்கும் ஆதி எப்போது வேண்டுமானாலும் சுய நினைவுக்கு', '23-64798f027d63c.jpg', 'படத்தை பற்றிய அலசல்', 'ஹீரோ ஹிப் ஹாப் ஆதி வீரன் படத்தின் மூலம் மீண்டும் மாஸ் கம் பேக் கொடுத்துள்ளார். குமரனாக வரும் போதும் சரி வீரனாக வரும் போதும் சரி பட்டையை கிளப்பி விட்டார். குறிப்பாக சண்டை காட்சிகளில் மிரட்டி விட்டார் என்றும் தான் சொல்ல வேண்டும். அந்த அளவுக்கு ஸ்கோர் செய்து', '23-64798f03675bd.jpg', ' 31 / 07 / 23'),
(6, 'Important', 'மார்டர் லவ் சென்னை ஒரு பார்வை', 'Ilayaraaja', 'ராஜு முருகனின் காதல்', 'இயக்குனர் ராஜு முருகன் இயக்கத்தில் முதல் எபிசோடாக வந்துள்ளது Lalagunda பொம்மைகள். வட சென்னையில் பிஸ்கட் விற்கும் ஒரு குடும்பத்தில் இருக்கும் பெண், ஆரம்பத்திலேயே தன் கருவை கலைக்கிறாள், இனி காதலே வேண்டாம் என இருக்க, ஒரு வட இந்திய இளைஞன் மீது காதலில் விழ, அத', '23-646756aeca04c.jpg', 'பாலாஜி சக்திவேலின் காதல்', 'பாலாஜி சக்திவேல் இயக்கத்தில் நீண்ட வருடங்களுக்கு பிறகு வந்துள்ள ஒரு படம்(வெப் தொடர்), அசோக் செல்வன் தனக்கு பிடித்த பெண்ணிடம் தன் காதலை சொல்ல, அந்த பெண்ணிற்கு இன்னும் 10 வருடத்தில் கண் பார்வை போக போகிறது என்ற உண்மையை சொல்ல, அதையும் மீறி அசோக் செல்வன் காதலி', '23-646756af2a550.jpg', ' 31 / 07 / 23'),
(7, 'Latest', 'பிச்சைக்காரன் 2 திரை விமர்சனம்', 'Vijay Antony Pichaikkaran 2 Kavya Thapar', 'கதைக்களம்', 'ரூ. 1 லட்சம் கோடிக்கு சொந்தக்காரராக இருக்கும் விஜய் குருமூர்த்தி இந்தியாவின் 7வது பணக்காரனாக கருதப்படுகிறார். இவரிடம் இருந்து இந்த சொத்துக்களை அபகரிக்க விஜய் குருமூர்த்தி கம்பெனியின் CEO அரவிந்த் திட்டம் தீட்டி வருகிறார்.\r\n\r\nஇந்த சமயத்தில் மூளை மாற்று அறு', '23-6467461616cfe.jpg', 'படத்தை பற்றிய அலசல்', 'ஹீரோவாக வரும் விஜய் ஆண்டனி சிறப்பாக நடித்துள்ளார். இதற்கு முன் இருந்த அவருடைய நடிப்பு இப்படத்தில் சற்று மேம்பட்டுள்ளது. ஹீரோயின் காவ்யா தாப்பர் நடிப்பு ஓகே. தேவ், ராதாரவி, யோகி பாபு ஆகிய மூவரும் கொடுத்ததை கட்சிதமாக செய்துள்ளனர்.\r\n\r\nசிறுவன், சிறுமியாக நடித', '23-64674616578ed.jpg', ' 31 / 07 / 23'),
(8, 'Important', 'குட் நைட் திரைவிமர்சனம்', 'Tamil Movie Review Meetha Raghunath K. Manikandan', 'கதைக்களம்', 'அம்மா, அக்கா, தங்கை, மாமா என சந்தாஷமாக கதாநாயகன் மணிகண்டன் வாழ்ந்து வருகிறார். மற்றொரு புறம் கதாநாயகி மீதா, தன்னை ஒரு துரதிஷ்டசாலி என நினைத்துக்கொண்டு வாழ்ந்து வருகிறார். இவர் குடியிருக்கும் வாடகை வீட்டின் உரிமையாளர்கள் பாலாஜி சக்திவேல் மற்றும் அவருடைய மன', '23-645decf88a05d.jpg', 'படத்தை பற்றிய அலசல்  ', 'கதாநாயகன் மணிகண்டன் எதார்த்தமான நடிப்பை வெளிப்படுத்தியுள்ளார். குறிப்பாக குறட்டைவிடும் காட்சியிலும், அதனால் தனக்கு ஏற்படும் துன்பத்தை தாங்கிக்கொள்ளும் காட்சியிலும் ஸ்கோர் செய்கிறார்.\r\n\r\nஹீரோவிற்கு எந்த விதத்திலும் குறையாத நடிப்பை கதாநாயகி மீதா சிறப்பாக கொ', '23-645decf903343.png', ' 31 / 07 / 23'),
(9, 'Important', 'பொன்னியின் செல்வன் 2 திரைவிமர்சனம்', 'Karthi Trisha Ponniyin Selvan: I Mani Ratnam Ponniyin Selvan 2', 'பொன்னியின் செல்வன் முதல் பாகத்தின் கதைக்களம்', 'சோழ மண்ணை ஆண்டு வரும் சுந்தர சோழருக்கு மூன்று பிள்ளைகள். மூத்த மகன் ஆதித்த கரிகாலன், இரண்டாவது மகள் குந்தவை, இளைய மகன் அருண்மொழி வர்மன். இதில் ஆதித்த கரிகாலன் தனது நண்பன் வல்லவரையன் வந்தியத்தேவனுடன் இணைந்து இராஷ்டிரகூடர்களுக்கு எதிராக போர் புரிந்து அதில் ', '23-644b7d3d6fac6.jpg', 'பொன்னியின் செல்வன் 2 கதைக்களம்', 'கடலில் மூழ்கிய அருண்மொழி வர்மனை ஊமை ராணி காப்பாற்றிவிடுகிறார். அருண்மொழி வர்மன் உயிர்பிழைத்த விஷயம் பாண்டிய ஆபத்துதவிகளுக்கும், நந்தினிக்கும் தெரியவருகிறது. மறுபக்கம் சோழ நாடு என்னுடையது, சோழ பட்டத்திற்கு உரியவன் நான் தான் என கூறி சிற்றரசர்களுடன் சேர்ந்து', '23-644b7d3dbaf7c.jpg', ' 31 / 07 / 23'),
(10, 'Important', 'ருத்ரன் திரைவிமர்சனம்', 'Ragava', 'கதைக்களம்', 'தனது தாய் பூர்ணிமா பாக்கியராஜ், தந்தை நாசருடன் மகிழ்ச்சியாக வாழ்ந்து வருகிறார் ருத்ரன் {ராகவா லாரன்ஸ்}. குறிப்பாக தனது தாயின் மீது அளவுகடந்த பாசத்தை வைத்துள்ளார். இந்த சமயத்தில் கதாநாயகி பிரியா பவானி ஷங்கரை சந்திக்கும் ருத்ரன் காதலில் விழுகிறார். இந்த காத', '23-6438f1ca225ec.jpg', 'படத்தை பற்றிய அலசல்', 'மனைவியாக வரும் பிரியா பவானி ஷங்கர் தனக்கு கொடுத்த கதாபாத்திரத்தில் அழகாக நடித்துள்ளார். முழுமையான வில்லன் கதாபாத்திரத்தில் நடித்துள்ள சரத்குமாரின் நடிப்பு மிரட்டல். மற்றபடி அனைவரும் அவரவர் கதாபாத்திரத்தில் நன்றாக நடித்துள்ளார்கள்.\r\n\r\nமுதல் முறையாக இயக்குன', '23-6438f1cc4cb45.jpg', ' 31 / 07 / 23'),
(11, 'Important', 'கப்ஜா திரைவிமர்சனம்', 'kabzhaa', 'கதைக்களம்', 'அமராபுரம் இரண்டு பெரும்புள்ளிகள் பிடிக்க கடுமையாக போராடி வருகின்றனர். இவர்கள் பிரச்சனையில் உபேந்திரா உள்ளே வருகிறார்.\r\n\r\nஇப்போது அமாராபுரம் உபேந்திரா கண்ட்ரோலுக்கு வர, பிறகு என்ன அவர் இடத்தை காலி செய்ய லோக்கல் டான் முதல் இண்டர்நேஷனல் டான் வரை களத்தில் இறங', '23-6414251f73cb3.jpg', 'படத்தை பற்றிய அலசல்', 'புலியை பார்த்து பூனை சூடுப்போட்ட கதையாக கே ஜி எப்-யை பார்த்து சூடு போட்டால் பரவாயில்லை, பழுக்க காட்சி நமக்கு போட்டு விட்டார்கள் சூடு.\r\n\r\nபடத்தில் கே ஜி எப் இன்ஸ்பிரிஷன் இருக்கலாம், அதற்காக கேமரா, கதை, திரைக்கதை, இசை, எடிட்டிங் வரை பிள்ளையார் சுழி கூட காப்', '', ' 31 / 07 / 23'),
(12, 'Latest', 'யார் சூப்பர் ஸ்டார்? ரஜினியா அல்லது விஜய்யா.. சர்ச்சைக்கு தளபதியே கூறிய பதில்', 'Rajinikanth Vijay Jailer Leo', 'சூப்பர்ஸ்டார் யார் ', 'கடந்த சில ஆண்டுகளாகவே தளபதி விஜய் தான் அடுத்த சூப்பர்ஸ்டார் என்று பேசப்பட்டது. மேலும் சமீபகாலாமாக தற்போதைய தமிழ் சினிமாவின் சூப்பர்ஸ்டார் விஜய் தான், ரஜினி கிடையாது என்பது போல் பேச துவங்கிவிட்டனர்.', '23-64c75647147f4.jpg', 'சர்ச்சைக்கு தளபதியே கூறிய பதில்', 'விஜய் தொலைக்காட்சியில் ஒரு முறை விஜய்க்கு விருது வழங்கப்பட்டது. அப்போது, தொகுப்பாளினி டிடி \'உங்களுக்கு தளபதி விஜய்யாக இருக்க பிடித்திருக்கிறதா அல்லது அடுத்த சூப்பர் ஸ்டாராக இருக்க பிடித்திருக்கிறதா\' என்று கேள்வி எழுப்பினார்.\r\n\r\nஇதற்கு பதிலளித்த விஜய் \'நான', '23-64c75646b09c2.jpg', ' 31 / 07 / 23'),
(13, 'Latest', 'இனி அந்தமாதிரி படங்களில் நடிக்க மாட்டேன்.. நடிகை மாளவிகா மோகனன்', 'Malavika Mohanan', 'இனி அப்படி நடிக்க மாட்டேன்', 'மாளவிகா மோகனன் தமிழில் பேட்ட படத்தின் மூலமாக அறிமுகம் ஆனவர். அவர் அதன் பிறகு விஜய் உடன் மாஸ்டர் படத்தில் நடித்தார். அதில் பெரிய ரோல் இல்லை. அடுத்து அவர் நடித்த மாறன் படமும் அதிகம் ட்ரோல்களை தான் சந்தித்தது.\r\n\r\nதற்போது பா.ரஞ்சித் இயக்கத்தில் விக்ரம் உடன் த', '23-64c78a5e9fd51.jpg', '', 'இந்நிலையில் மாளவிகா சமீபத்தில் அளித்த பேட்டியில் தான் இனிமேல் முக்கியத்துவம் இல்லாத ரோல்களிகள் நடிக்கவே மாட்டேன் என கூறி இருக்கிறார்.\r\n\r\n500 கோடி வசூலிக்கும் பெரிய படமாக இருந்தாலும் கூட என் ரோலுக்கு முக்கியத்துவம் இல்லை என்றால் என்னை யாரும் நினைவில் வைத்த', '23-64c78a5e44145.jpg', ' 31 / 07 / 23'),
(14, 'Latest', 'ரிலீஸுக்கு முன்பே ஜெயிலர் படத்தின் ஓவர்சீஸ் வசூல் இவ்வளவா?- அடிதூள் கிளப்பும் சூப்பர் ஸ்டார்', 'Rajinikanth Nelson Dilipkumar Jailer', 'ஜெயிலர் படம்', 'நெல்சன் திலீப்குமார் விஜய்யை வைத்து பீஸ்ட் படத்தை கடைசியாக இயக்கியிருந்தார், அப்படம் சரியான விமர்சனம் மற்றும் வசூலை பெறவில்லை.\r\n\r\nஇதனால் அவர் மீது நிறைய நெகட்டீவ் விமர்சனம், கமெண்ட்ஸ் வீசப்பட்டது.\r\n\r\n', '23-64c89a64d2e72.png', 'புக்கிங் ஓவர்சீஸ்', 'ரஜினி கடைசியாக நடித்த அண்ணாத்த திரைப்படம் சரியான வசூலை பெறவில்லை, விமர்சன ரீதியாகவும் சரியாக வரவேற்பு பெறவில்லை.\r\n\r\nஇந்த நிலையில் படம் ஓவர்சீஸில் ப்ரீ புக்கிங்கில் மட்டுமே ரூ. 1.2 கோடி கலெக்ஷனை பெற்றுள்ளது,', '23-64c89a6460f4e.jpg', ' 01 / 08 / 23');

-- --------------------------------------------------------

--
-- Table structure for table `interviews_table`
--

CREATE TABLE `interviews_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kollywood_table`
--

CREATE TABLE `kollywood_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kollywood_table`
--

INSERT INTO `kollywood_table` (`id`, `title`, `tags`, `sub_title1`, `sub_desc1`, `image1`, `sub_title2`, `sub_desc2`, `image2`, `date`) VALUES
(1, 'குக் வித் கோமாளி 4 புகழ் நடிகை விசித்ராவின் மகனா இவர்?- அம்மா, மகன் எடுத்த லேட்டஸ்ட் க்ளிக்', 'Tamil Cinema Cooku with Comali Tamil Actress', 'நடிகை விசித்ரா', 'தமிழ் சினிமாவில் 90களில் நடித்த நடிகைகளில் ஒருவர் விசித்ரா. தமிழ் மட்டுமில்லாது தெலுங்கு, மலையாளம், கன்னடம் என பல மொழிகளில் நடித்துள்ளார்.\r\n\r\n1991ம் ஆண்டு தமிழ் சினிமாவில் நுழைந்த இவர் திரைப்படங்களில் மட்டுமில்லாது சீரியல்களிலும் நடித்துள்ளார். அதுவும் மா', '23-64c5e70f7efbc.jpg', 'குடும்பம்', 'நடித்துக் கொண்டிருக்கும் போதே திருமணம் செய்த இவர் பூனேவில் செட்டில் ஆகி இருந்தார்.\r\n\r\nஇன்ஸ்டாவில் தனது புகைப்படங்கள் வெளியிடும் விசித்ரா எப்போதும் தனது மகன் ரோகன் சாஜியுடன் எடுத்த புகைப்படத்தை அதிகம் வெளியிடுவார்.\r\n\r\n\r\nஅதைப்பார்த்த ரசிகர்கள் தமிழ் சினிமாவ', '23-64c7444847370.jpg', ' 01 / 08 / 23');

-- --------------------------------------------------------

--
-- Table structure for table `news_table`
--

CREATE TABLE `news_table` (
  `id` int(11) NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_table`
--

INSERT INTO `news_table` (`id`, `category`, `title`, `tags`, `sub_title1`, `sub_desc1`, `image1`, `sub_title2`, `sub_desc2`, `image2`, `date`) VALUES
(2, 'local-news', 'தோணி தயாரித்த LGM படத்தின் இரண்டாம் நாள் வசூல் எவ்ளோ தெரியுமா?.. இவ்ளோ தானா?', 'Harish Kalyan MS Dhoni Tamil Actors', 'LGM ', 'தமிழ் சினிமாவில் வளர்ந்து வரும் நடிகர்களில் ஒருவராக இருப்பவர் தான் ஹரிஷ் கல்யாண். சமீபத்தில் இவர் நடிப்பில் LGM என்ற படம் வெளியானது. இந்த படத்தை இயக்குநர் ரமேஷ் தமிழ்மணி இயக்கியுள்ளார்.\r\n\r\nஇதில் ஹரிஷ் கல்யாணுக்கு ஜோடியாக இவானா நடித்துள்ளார். மேலும் நதியா,', '23-64c5f4800dfcd.jpg', 'வசூல்', 'இந்நிலையில் LGM படம் வெளியாகி இரண்டு நாட்களில் ரூபாய் 2 கோடி வசூல் செய்துள்ளதாக சினிமா வட்டாரங்களில் கூறப்படுகிறது.\r\n\r\n52 வயதில் காவாலா பாடலுக்கு நடனமாடி தமன்னாவை ஓரங்கட்டிய நடிகை ரம்யா கிருஷ்ணன்.. வீடியோ இதோ ', '23-64c5f47f00e4f.jpg', ' 31 / 07 / 23'),
(3, 'local-news', 'அஜித்தின் சூப்பர்ஹிட் பட வாய்ப்பை தவறவிட்ட மீனா.. அதை சரியாக பயன்படுத்தி சினிமாவில் பிரபலமான நடிகை', 'Ajith Kumar Meena Simran', 'அஜித்', 'தமிழ் சினிமாவில் முன்னணி ஹீரோவாக வலம் வருபவர் அஜித். இவர் நடிப்பில் அடுத்ததாக விடாமுயற்சி திரைப்படம் உருவாகி வருகிறது. மகிழ் திருமேனி இயக்கும் இப்படத்திற்கு அனிருத் இசையமைக்கிறார்.', '23-64c5e70f7efbc.jpg', 'வாய்ப்பை தவறவிட்ட மீனா', 'அஜித்தின் திரையுலக வாழ்க்கையில் மிகமுக்கியமான படங்களில் ஒன்று வாலி. எஸ். ஜே. சூர்யா இயக்கிய இப்படத்தில் அஜித்துக்கு ஜோடியாக சிம்ரன் நடித்திருந்தார்.', '23-64c5e70f242a5.jpg', ' 31 / 07 / 23'),
(4, 'local-news', 'இரண்டு நாட்களில் வசூலில் பட்டையை கிளப்பிய சந்தானத்தின் DD Returns.. பாக்ஸ் ஆபிஸ் ரிப்போர்ட்', 'Santhanam DD Returns', 'DD Returns', 'சந்தானம் நடிப்பில் திகில் கலந்த நகைச்சுவையுடன் இதற்கு முன் வெளிவந்த தில்லுக்கு துட்டு 1 மற்றும் 2 ஆகிய இரண்டு படங்களும் மாபெரும் வெற்றிபெற்றது.\r\n\r\nஅதை தொடர்ந்து தற்போது சந்தானம் நடிப்பில் திகில் கலந்த நகைச்சுவையுடன் உருவாகி கடந்த 28ஆம் தேதி திரையரங்கில் வ', '23-64c5d34dd4a00.jpg', 'இரண்டு நாள் வசூல் ', 'இந்நிலையில், இப்படம் வெளிவந்து இரண்டு நாட்கள் முடிவுக்கு வந்துள்ள நிலையில் இதுவரை ரூ. 6 கோடிக்கும் மேல் வசூல் செய்து பாக்ஸ் ஆபிஸில் பட்டையை கிளப்பியுள்ளது.\r\n\r\n', '23-64c5d34e42532.png', ' 31 / 07 / 23'),
(5, 'weather-news', 'மாடர்ன் உடையில் அசத்தும் எதிர்நீச்சல் சீரியல் நடிகை கனிகா.. அசந்துபோன ரசிகர்கள்', 'Serials Photoshoot Kaniha Actress Ethirneechal', 'எதிர்நீச்சல்', 'சன் தொலைக்காட்சியில் வெற்றிகரமாக ஓடிக்கொண்டிருக்கும் சீரியல்களில் ஒன்று எதிர்நீச்சல். TRPயில் சமீபகாலமாக எதிர்நீச்சல் சீரியல் தான் பட்டையை கிளப்பி வருகிறது.\r\n\r\nமக்கள் மனதில் தனி இடத்தை பிடித்திருக்கும் இந்த சீரியலை திருச்செல்வம் இயக்கி, நடித்து வருகிறார்.', '23-64c7444994b67.jpg', 'போட்டோஷூட் ', 'அந்த வகையில் தற்போது மாடர்ன் உடலை ரசிகர்களை அசரவைக்கும் வகையில் தான் எடுத்துக்கொண்ட போட்டோஷூட் புகைப்படங்களை பதிவு செய்துள்ளார். இந்த புகைப்படங்களை பார்க்கும் ரசிகர்கள் பலரும், எதிர்நீச்சல் சீரியலில் வரும் நடிகை கனிகாவா இது என கேட்டு வருகிறார்கள்.\r\n\r\nஇதோ ', '23-64c7444847370.jpg', ' 31 / 07 / 23'),
(6, 'world-news', 'நடிகர் வடிவேலுவின் மருமகளை பார்த்துள்ளீர்களா.. திருமணத்தில் எடுத்த புகைப்படத்தை பாருங்க', 'Vadivelu Maamannan Chandramukhi 2', 'வடிவேலு', 'தமிழ் சினிமாவில் முன்னணி நகைச்சுவை நடிகர்களில் ஒருவர் வடிவேலு. தான் ஒரு நகைச்சுவை நடிகர் மட்டுமல்ல, தன்னால் எமோஷனலாகவும் நடிக்க முடியம் என மாவீரன் படத்தின் மூலம் நமக்கு காட்டிவிட்டார் வடிவேலு.\r\n\r\nசில ஆண்டுகளுக்கு பின் கம் பேக் கொடுத்த வடிவேலுவுக்கு நாய் ச', '23-64c5dc0ca380f.jpg', 'வடிவேலுவின் மருமகள்', 'நடிகர் வடிவேலுவுக்கு கார்த்திகா மற்றும் சுப்பிரமணி என இரு பிள்ளைகள் உள்ளனர். இந்நிலையில், தனது மகன் சுப்பிரமணி திருமணத்தில் மகன் மற்றும் மருமகளுடன் வடிவேலு எடுத்துக்கொண்ட புகைப்படம் தற்போது வெளியாகியுள்ளது.\r\n\r\nஇதோ அந்த புகைப்படம்..\r\n\r\n', '23-64c5dc0d13140.jpg', ' 31 / 07 / 23');

-- --------------------------------------------------------

--
-- Table structure for table `photos_table`
--

CREATE TABLE `photos_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos_table`
--

INSERT INTO `photos_table` (`id`, `title`, `tags`, `sub_title1`, `sub_desc1`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `date`) VALUES
(1, 'நடிகர் வடிவேலுவின் மருமகளை பார்த்துள்ளீர்களா.. திருமணத்தில் எடுத்த புகைப்படத்தை பாருங்க', 'Vadivelu Maamannan Chandramukhi 2', 'வடிவேலு', 'தமிழ் சினிமாவில் முன்னணி நகைச்சுவை நடிகர்களில் ஒருவர் வடிவேலு. தான் ஒரு நகைச்சுவை நடிகர் மட்டுமல்ல, தன்னால் எமோஷனலாகவும் நடிக்க முடியம் என மாவீரன் படத்தின் மூலம் நமக்கு காட்டிவிட்டார் வடிவேலு.\r\n\r\nசில ஆண்டுகளுக்கு பின் கம் பேக் கொடுத்த வடிவேலுவுக்கு நாய் ச', '23-64c5dc0d13140.jpg', '23-64c5dc0ca380f.jpg', '23-64c7444847370.jpg', '23-64c7444994b67.jpg', '23-64c5d34e42532.png', '', '', '', '', '', ' 31 / 07 / 23');

-- --------------------------------------------------------

--
-- Table structure for table `sports_table`
--

CREATE TABLE `sports_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tamil_table`
--

CREATE TABLE `tamil_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tamil_table`
--

INSERT INTO `tamil_table` (`id`, `title`, `tags`, `sub_title1`, `sub_desc1`, `image1`, `sub_title2`, `sub_desc2`, `image2`, `date`) VALUES
(13, 'பொது இடத்திற்கு இப்படி ஒரு உடையா? உச்சகட்ட கவர்ச்சியில் வந்த தமன்னா வீடியோ', '#tamana#hot', 'கிளாமர் உடை', 'தமன்னா தற்போது மீண்டும் ட்ரெண்டிங் ஆன நடிகையாக மாறி இருக்கிறார். அவர் விஜய் வர்மா உடன் காதலில் இருப்பது, மற்றும் அவருடன் லஸ்ட் ஸ்டோரீஸ் தொடரில் மிக நெருக்கமான காட்சிகளில் நடித்தது பரபரப்பாக பேசப்பட்டது.\r\n\r\nஅதனை தொடர்ந்து ஜெயிலர் படத்தில் வந்த காவாலா பாடலு', '23-64bf6d9e26e86.jpg', 'Twitter விமர்சனம்', 'தற்போது காவாலா பாடலை ஹிந்தியில் வெளியிடும் விழா இன்று நடைபெற்றது. அந்த விழாவில் பங்கேற்க தமன்னா உச்சகட்ட கவர்ச்சியில் வந்திருக்கிறார்.\r\n\r\nஅந்த வீடியோ தற்போது இணையத்தில் வைரல் ஆகி வருகிறது. ', '23-642fe7a6b56f9.jpg', ' 27 / 07 / 23'),
(14, 'பாக்கியாவை கட்டிப்பிடித்து முத்தம் கொடுக்க வரும் கோபி, ராதிகா பார்த்தாரா?- பாக்கியலட்சுமி சீரியல் வைரல் வீடியோ', '#Baakiyalakshmi  #Tamil TV Serials', 'பாக்கியலட்சுமி', 'எதார்த்தமான ஒரு குடும்ப கதை, தாத்தா, பாட்டி, பேரன், பேத்திகள் என பலர் இருக்கும் ஒரு அழகிய குடும்பம்.\r\n\r\nகோபி பாக்கியா மீது உள்ள வெறுப்பால் மறுமணம் செய்துகொண்டு அழகிய வாழ்க்கையை இழந்துவிட்டார் என்பது பல ரசிகர்களின் கருத்தாக உள்ளது.\r\n\r\nஇனியா 12ம் வகுப்பு அத', '23-64c0b02d65095.jpg', 'வைரல் வீடியோ', 'தற்போது சமூக வலைதளங்களில் பாக்கியலட்சுமி சீரியல் படிப்பிடிப்பில் இருந்து எடுக்கப்பட்ட ஒரு வீடியோ வைரலாகி வருகிறது. அதில் கோபி தனது முன்னாள் பாக்கியாவை கட்டியணைத்து முத்தம் கொடுக்க செல்ல அதை இனியா வீடியோவாக எடுக்கிறார்.\r\n\r\nஇந்த கலகலப்பான வீடியோ சாதாரணமாக எ', '', ' 27 / 07 / 23'),
(15, 'இதயத்தை திருடாதே சீரியல் புகழ் நவீன் கமிட்டாகியுள்ள புதிய தொடர்- நாயகி இவர் தானா?', '#Tamil Cinema #Tamil TV Serials', 'இதயத்தை திருடாதே', 'கலர்ஸ் தமிழ் தொலைக்காட்சியில் இதயத்தை திருடாதே என்ற தொடர் வெற்றிகரமாக ஓடியது. இந்த தொடர் மூலம் ரசிகர்கள் மத்தியில் மிகவும் பிரபலமானார் நவீன்.\r\n\r\nஅந்த தொடருக்கு பிறகு நவீன் திருமணம், குழந்தை என பிஸியாகவே இருந்தார்.', '23-64c1e68c07b85.jpg', 'Twitter விமர்சனம்', 'தற்போது மீண்டும் நடிப்பதில் பிஸியாக வலம் வரப் போகிறார் நவீன். அதாவது நவீன் ஜீ தமிழில் ஒளிபரப்பாக போகும் புதிய தொடருக்காக அவர் கமிட்டாகியுள்ளாராம்.\r\n\r\nஅவருடன் நாயகியாக மல்லி சீரியல் புகழ் பாவனா லாஸ்யா நடிக்க இருக்கிறாராம். நவீனின் புதிய சீரியல் குறித்து தக', 'CvK0BMgpmKH[1]', ' 27 / 07 / 23'),
(16, 'பொது இடத்திற்கு இப்படி ஒரு உடையா? உச்சகட்ட கவர்ச்சியில் வந்த தமன்னா வீடியோ', '#tamana#hot', 'கிளாமர் உடை', 'தமன்னா தற்போது மீண்டும் ட்ரெண்டிங் ஆன நடிகையாக மாறி இருக்கிறார். அவர் விஜய் வர்மா உடன் காதலில் இருப்பது, மற்றும் அவருடன் லஸ்ட் ஸ்டோரீஸ் தொடரில் மிக நெருக்கமான காட்சிகளில் நடித்தது பரபரப்பாக பேசப்பட்டது.\r\n\r\nஅதனை தொடர்ந்து ஜெயிலர் படத்தில் வந்த காவாலா பாடலு', '23-64bf6d9e26e86.jpg', 'Twitter விமர்சனம்', 'தற்போது காவாலா பாடலை ஹிந்தியில் வெளியிடும் விழா இன்று நடைபெற்றது. அந்த விழாவில் பங்கேற்க தமன்னா உச்சகட்ட கவர்ச்சியில் வந்திருக்கிறார்.\r\n\r\nஅந்த வீடியோ தற்போது இணையத்தில் வைரல் ஆகி வருகிறது. ', '23-64c0b02d65095.jpg', ' 27 / 07 / 23');

-- --------------------------------------------------------

--
-- Table structure for table `tamil_web_table`
--

CREATE TABLE `tamil_web_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trending_table`
--

CREATE TABLE `trending_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trending_table`
--

INSERT INTO `trending_table` (`id`, `title`, `tags`, `sub_title1`, `sub_desc1`, `image1`, `sub_title2`, `sub_desc2`, `image2`, `date`) VALUES
(3, 'இனி அந்தமாதிரி படங்களில் நடிக்க மாட்டேன்.. நடிகை மாளவிகா மோகனன்', 'Malavika Mohanan', 'இனி அப்படி நடிக்க மாட்டேன்', 'இந்நிலையில் மாளவிகா சமீபத்தில் அளித்த பேட்டியில் தான் இனிமேல் முக்கியத்துவம் இல்லாத ரோல்களிகள் நடிக்கவே மாட்டேன் என கூறி இருக்கிறார்.\r\n\r\n500 கோடி வசூலிக்கும் பெரிய படமாக இருந்தாலும் கூட என் ரோலுக்கு முக்கியத்துவம் இல்லை என்றால் என்னை யாரும் நினைவில் வைத்த', '23-64c78a5e44145.jpg', '', ' ', '', ' 31 / 07 / 23'),
(4, 'ராஜமௌலியின் மகதீரா திரைப்படத்தின் மொத்த வசூல்.. எவ்வளவு தெரியுமா', 'ராஜமௌலி', 'ராஜமௌலி', 'உலகளவில் பிரபலமான இயக்குனர்களில் ஒருவர் ராஜமௌலி. இவர் இயக்கத்தில் கடைசியாக வெளிவந்த திரைப்படம் ஆர்.ஆர்.ஆர். இப்படத்தில் இடம்பெற்ற நாட்டு கூத்து பாடல் ஆஸ்கர் வென்றதை நாம் அனைவரும் அறிவோம்.', '23-64c7611cab90f.jpg', 'மொத்த வசூல்', ' ராம் சரண் ஹீரோவாக நடித்த இப்படம் காஜல் அகர்வால் ஹீரோயினாக நடித்து ரசிகர்கள் மனதில் இடம்பிடித்தார். மாபெரும் வெற்றியடைந்த இப்படம் மொத்தமாக செய்த வசூல் குறித்து விவரம் வெளியாகியுள்ளது.', '', ' 31 / 07 / 23'),
(5, 'நீண்ட இடைவேளைக்கு பிறகு புதிய சீரியலில் கமிட்டாகியுள்ள நடிகை சரண்யா துராடி- இந்த டிவி சீரியலா?', 'Tamil TV Serials Tamil Actress', 'நடிகை சரண்யா துராடி', 'விஜய் தொலைக்காட்சியில் ஒளிபரப்பான நெஞ்சம் மறப்பதில்லை என்ற தொடர் மூலம் சின்னத்திரையில் காலடி எடுத்து வைத்தவர் நடிகை சரண்யா துராடி.\r\n\r\nசீரியலில் கமிட்டாகி நடிப்பதற்கு முன் தொகுப்பாளராக களமிறங்கி ரசிகர்களிடம் வரவேற்பு பெற்றிருந்தார். முதல் தொடரில் டாக்டராக ', '23-64c72bb2e79fd.jpg', 'புதிய சீரியல்', ' சீரியலில் நடிக்காமல் இருந்த சரண்யா துராடி நிறைய சுற்றுலா சென்று புகைப்படங்களையும் இன்ஸ்டாவில் பதிவிட்டு இருந்தார். இப்போது நடிகை குறித்து சூப்பரான தகவல் வந்துள்ளது.\r\n\r\nஅதாவது நடிகை சரண்யா துராடி புதிய சீரியலில் கமிட்டாகியுள்ளாராம். ஜீ தமிழில் வரப்போகும் ', '23-64c72bb282013.jpg', ' 31 / 07 / 23');

-- --------------------------------------------------------

--
-- Table structure for table `tvserials_table`
--

CREATE TABLE `tvserials_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tvserials_table`
--

INSERT INTO `tvserials_table` (`id`, `title`, `tags`, `sub_title1`, `sub_desc1`, `image1`, `sub_title2`, `sub_desc2`, `image2`, `date`) VALUES
(2, 'ஒரே பாடலில் ஓஹோன்னு சம்பளத்தை உயர்த்தும் தமன்னா..பாலிவுட் நடிகைகளை மிஞ்சிடுவார் போலயே!', '#tamana#hot', 'தமன்னா', 'இந்திய அளவில் பாப்புலர் நடிகையாக வலம் வருபவர் தான் தமன்னா. தற்போது இவர் ரஜினிகாந்த் நடிப்பில் உருவாகியுள்ள ஜெயிலர் படத்தில் முக்கியமான ரோலில் நடித்துள்ளார்.\r\n\r\nசமீபத்தில் இப்படத்தில் இடம் பெற்றுள்ள காவலா பாடல் வெளியாகி பட்டிதொட்டி எங்கும் கலக்கி வருகிறது.', '23-64bf6d9e26e86.jpg', 'சம்பளம்', 'ஒரே பாடலில் பிரபலமான தமன்னாவிற்கு பாலிவுட்டில் வேதா என்ற படத்தில் நடிக்க வாய்ப்பு கிடைத்துள்ளதாம்.\r\n\r\nஇப்படத்திற்காக இவருக்கு ரூபாய் 15 கோடி சம்பளம் கொடுக்க முன்வந்துள்ளதாக தகவல் வெளியாகி இருக்கிறது. இதன் மூலம் பாலிவுட் பிரபல நடிகை கங்கணா ராவத் சம்பளத்தை ', '23-64bf6d9dbf074.jpg', ' 25 / 07 / 23');

-- --------------------------------------------------------

--
-- Table structure for table `tvshows_table`
--

CREATE TABLE `tvshows_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tvshows_table`
--

INSERT INTO `tvshows_table` (`id`, `title`, `tags`, `sub_title1`, `sub_desc1`, `image1`, `sub_title2`, `sub_desc2`, `image2`, `date`) VALUES
(1, 'ஒரே பாடலில் ஓஹோன்னு சம்பளத்தை உயர்த்தும் தமன்னா..பாலிவுட் நடிகைகளை மிஞ்சிடுவார் போலயே!', '#tamana#hot', 'தமன்னா', 'இந்திய அளவில் பாப்புலர் நடிகையாக வலம் வருபவர் தான் தமன்னா. தற்போது இவர் ரஜினிகாந்த் நடிப்பில் உருவாகியுள்ள ஜெயிலர் படத்தில் முக்கியமான ரோலில் நடித்துள்ளார்.\r\n\r\nசமீபத்தில் இப்படத்தில் இடம் பெற்றுள்ள காவலா பாடல் வெளியாகி பட்டிதொட்டி எங்கும் கலக்கி வருகிறது.', '23-64bf6d9e26e86.jpg', 'சம்பளம்', 'ஒரே பாடலில் பிரபலமான தமன்னாவிற்கு பாலிவுட்டில் வேதா என்ற படத்தில் நடிக்க வாய்ப்பு கிடைத்துள்ளதாம்.\r\n\r\nஇப்படத்திற்காக இவருக்கு ரூபாய் 15 கோடி சம்பளம் கொடுக்க முன்வந்துள்ளதாக தகவல் வெளியாகி இருக்கிறது. இதன் மூலம் பாலிவுட் பிரபல நடிகை கங்கணா ராவத் சம்பளத்தை ', '23-64bf6d9dbf074.jpg', ' 25 / 07 / 23');

-- --------------------------------------------------------

--
-- Table structure for table `video_table`
--

CREATE TABLE `video_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_desc1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video5` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_table`
--

INSERT INTO `video_table` (`id`, `title`, `tags`, `sub_title1`, `sub_desc1`, `video1`, `video2`, `video3`, `video4`, `video5`, `date`) VALUES
(3, 'ரஜினியை பாராட்டிய அன்புமணி ராமதாஸ். எதற்குன்னு பாருங்க', 'Rajinikanth', 'ஜெயிலர் பட விழாவில் பேசியத்திற்கு ரஜினிக்கு பாராட்டு தெரிவித்து இருக்கிறார் அன்புமணி', 'யோகி பாபு உங்களுக்காக CSK Management கிட்ட பேசுறேன் - MS தோனி Speech முழு வீடியோ', 'jimikki-ponnu-varisu-song-status-video-online-video-cuttercom_BAWpVRYL.mp4', 'Video.mp4', 'Video1.mp4', 'WhatsApp_Video_2023-01-23_at_17_15_18.mp4', 'jimikki-ponnu-varisu-song-status-video-online-video-cuttercom_BAWpVRYL.mp4', ' 04 / 08 / 23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners_table`
--
ALTER TABLE `banners_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bollywood_table`
--
ALTER TABLE `bollywood_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celebrity_table`
--
ALTER TABLE `celebrity_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `english_table`
--
ALTER TABLE `english_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_table`
--
ALTER TABLE `events_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gossips_table`
--
ALTER TABLE `gossips_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hindi_table`
--
ALTER TABLE `hindi_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hollywood_table`
--
ALTER TABLE `hollywood_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_table`
--
ALTER TABLE `home_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviews_table`
--
ALTER TABLE `interviews_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kollywood_table`
--
ALTER TABLE `kollywood_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_table`
--
ALTER TABLE `news_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos_table`
--
ALTER TABLE `photos_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports_table`
--
ALTER TABLE `sports_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamil_table`
--
ALTER TABLE `tamil_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamil_web_table`
--
ALTER TABLE `tamil_web_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trending_table`
--
ALTER TABLE `trending_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tvserials_table`
--
ALTER TABLE `tvserials_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tvshows_table`
--
ALTER TABLE `tvshows_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_table`
--
ALTER TABLE `video_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners_table`
--
ALTER TABLE `banners_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bollywood_table`
--
ALTER TABLE `bollywood_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `celebrity_table`
--
ALTER TABLE `celebrity_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english_table`
--
ALTER TABLE `english_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events_table`
--
ALTER TABLE `events_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gossips_table`
--
ALTER TABLE `gossips_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hindi_table`
--
ALTER TABLE `hindi_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hollywood_table`
--
ALTER TABLE `hollywood_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_table`
--
ALTER TABLE `home_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `interviews_table`
--
ALTER TABLE `interviews_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kollywood_table`
--
ALTER TABLE `kollywood_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_table`
--
ALTER TABLE `news_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photos_table`
--
ALTER TABLE `photos_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sports_table`
--
ALTER TABLE `sports_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tamil_table`
--
ALTER TABLE `tamil_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tamil_web_table`
--
ALTER TABLE `tamil_web_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trending_table`
--
ALTER TABLE `trending_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tvserials_table`
--
ALTER TABLE `tvserials_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tvshows_table`
--
ALTER TABLE `tvshows_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_table`
--
ALTER TABLE `video_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
