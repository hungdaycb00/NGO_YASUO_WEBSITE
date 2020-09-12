-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 10, 2020 lúc 05:11 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ngo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_user`
--

INSERT INTO `admin_user` (`admin_id`, `email`, `password`, `confirm_password`, `firstname`, `lastname`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '123456', '123456', 'admin', 'admin', 'HN', '0123456', '2020-08-14 21:07:59', '2020-08-14 21:07:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_post`
--

CREATE TABLE `category_post` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_post`
--

INSERT INTO `category_post` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Education', NULL, NULL),
(2, 'Health Care', NULL, NULL),
(3, 'Privileged Children', NULL, NULL),
(4, 'Other', NULL, NULL),
(5, 'Activitie', '2020-09-07 10:07:12', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donate_details`
--

CREATE TABLE `donate_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `events_id` int(11) DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `donator_status` int(11) NOT NULL,
  `money_status` int(11) NOT NULL,
  `code_payment` int(20) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donate_details`
--

INSERT INTO `donate_details` (`id`, `member_id`, `name`, `email`, `address`, `phone`, `amount`, `events_id`, `category_id`, `donator_status`, `money_status`, `code_payment`, `comment`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Manh Hung', 'hungdaycb00@yahoo.com', 'HN', '0999999999', 10000, 3, 3, 1, 4, 230407338, NULL, '2020-08-22 21:07:56', '2020-08-22 21:07:56'),
(2, NULL, 'Thais', 'test@gmail.com', 'HN', '0123456', 5000, 1, 2, 1, 4, 230419536, NULL, '2020-08-22 21:20:14', '2020-08-22 21:20:14'),
(3, NULL, 'Name', 'hungdaycb00@yahoo.com', 'HN', '0123456', 9000, 4, 1, 1, 4, 230420275, NULL, '2020-08-22 21:20:43', '2020-08-22 21:20:43'),
(4, NULL, 'Kao', 'sang@gmail.com', 'HN', '0123456', 10000, 2, 2, 1, 4, 230422270, NULL, '2020-08-22 21:22:55', '2020-08-22 21:22:55'),
(5, NULL, 'Nông Phan Mạnh Hùng', 'hungcb1994@gmail.com', 'Tổ 23, Phường Sông Bằng, Tp. Cao Bằng', '1682680532', 10000, NULL, 2, 1, 4, 31638033, NULL, '2020-09-03 09:39:13', '2020-09-03 09:39:13'),
(6, NULL, 'Mạnh Hùng', 'hungcb1994@gmail.com', 'Tổ 23, Phường Sông Bằng, Tp. Cao Bằng', '1682680532', 10000, 6, 2, 1, 4, 71159259, NULL, '2020-09-07 04:59:41', '2020-09-07 04:59:41'),
(7, NULL, 'Nông Phan', 'hungcb1994@gmail.com', 'HN', '1682680532', 10000, 7, 3, 1, 4, 71228442, NULL, '2020-09-07 05:29:46', '2020-09-07 05:29:46'),
(8, NULL, 'Nam', 'npb@gmail.com', 'NewYork', '989898999', 15000, 6, 4, 1, 4, 71321546, NULL, '2020-09-07 06:22:36', '2020-09-07 06:22:36'),
(9, NULL, 'Kinh Nam', 'fkb@gmail.com', 'ND', '0123456789', 20000, 5, 4, 1, 4, 71323202, NULL, '2020-09-07 06:24:32', '2020-09-07 06:24:32'),
(10, 1, 'Nông Phan Mạnh Hùng', 'hungcb1994@gmail.com', 'Tổ 23, Phường Sông Bằng, Tp. Cao Bằng', '1682680532', 1000, NULL, 2, 1, 3, 91618530, NULL, '2020-09-09 09:19:15', '2020-09-09 09:19:15'),
(11, 1, 'Nông Phan Mạnh Hùng', 'hungcb1994@gmail.com', 'Tổ 23, Phường Sông Bằng, Tp. Cao Bằng', '1682680532', 1000, NULL, 1, 1, 3, 91621010, NULL, '2020-09-09 09:21:10', '2020-09-09 09:21:10'),
(12, NULL, 'Nông Phan Mạnh Hùng', 'hungcb1994@gmail.com', 'Tổ 23, Phường Sông Bằng, Tp. Cao Bằng', '1682680532', 1000, 2, 1, 1, 3, 101509499, NULL, '2020-09-10 08:09:57', '2020-09-10 08:09:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `guest_message`
--

CREATE TABLE `guest_message` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `guest_message`
--

INSERT INTO `guest_message` (`id`, `subject`, `name`, `mail`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Help', 'Nông Phan Mạnh Hùng', 'hung@gmail.com', 'chúng tôi luôn luôn sẵn sàng giúp đỡ bạn', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_events`
--

CREATE TABLE `list_events` (
  `events_id` int(10) UNSIGNED NOT NULL,
  `events_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `events_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `events_imageName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_donate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` int(11) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `end_time` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `list_events`
--

INSERT INTO `list_events` (`events_id`, `events_title`, `events_content`, `events_imageName`, `total_donate`, `post_status`, `category_id`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 'Marathon Walk', '<h3>Blue Dragon Marathon Walk</h3>\r\n\r\n<h4>When?</h4>\r\n\r\n<p>Sunday, September 13</p>\r\n\r\n<h4>Where?</h4>\r\n\r\n<p>Hanoi, London, Melbourne, Worldwide</p>\r\n\r\n<h4>What?</h4>\r\n\r\n<p>Challenge yourself to a full 42km marathon walk or a 21km half one while raising money for Vietnamese street kids and trafficking survivors!&nbsp;</p>', 'Merri-Walk-2020-op15977375221599465907.jpg', '30000', 1, 2, '2020-12-10', NULL, '2020-09-07 01:12:31'),
(2, 'Spam Cham', '<p><strong>When?</strong></p>\r\n\r\n<p>Every last Wednesday of the month</p>\r\n\r\n<p><strong>Where?</strong></p>\r\n\r\n<p>Al Fresco’s, 62 Xuan Dieu, Hanoi, Vietnam</p>\r\n\r\n<p><strong>What?</strong></p>\r\n\r\n<blockquote>\r\n<p>Every last Wednesday of the month, come and join us at Al Fresco’s Xuan Dieu for great fun and amazing raffle prizes. The 250.000 VND entrance ticket covers free-flow drinks and delicious snacks. All you spend on the raffle will help kids from ethnic communities in Dien Bien to keep going to school after the COVID-19 pandemic.</p>\r\n</blockquote>', 'Charity-concert-op15977376551599466535.jpg', '30000', 1, 1, '2021-01-15', NULL, NULL),
(3, 'Christmas Charity Event', '<p>I have planned a special charity event with my friends and co-workers. The event is about&nbsp;<strong>helping the poor kids by providing them food and clothes</strong>. The event will not be an event to get media coverage or to get popular as an NGO. Our main aim is to help the poor kids in our spare time.</p>\r\n\r\n<p>Winters have been started and there are many&nbsp;<strong>poor kids on footpaths</strong>&nbsp;who don\'t even have enough clothes to cover their bodies. They wander all day in search of food on the streets. Sometimes they get food and sometimes they may have to&nbsp;<strong>sleep empty-stomached</strong>. Their life is full of struggle everyday. We cannot help them financially. But, we can make one day of their life very special. A day when they will get enough food and clothes and a lot of joy through fun activities.</p>\r\n\r\n<p>Christmas is the day of spreading happiness and that\'s what we have planned for this Christmas. We just want to spread happiness. We want to see a&nbsp;<strong>smile on the faces of these innocent kids</strong>. I request you to make this event a success.&nbsp;<strong>A small donation from your end can be a big help to these poor kids</strong>.</p>\r\n\r\n<p>A donation is never small. Remember the below facts while donating:</p>\r\n\r\n<ul>\r\n	<li><strong>$1 is enough to feed a poor child daily.</strong></li>\r\n	<li><strong>$5 is enough to buy a pair of shoes for a poor child.</strong></li>\r\n	<li><strong>$10 is enough to buy clothes for a poor child.</strong></li>\r\n	<li><strong>$15 is enough to buy a blanket to protect a poor child from cold.</strong></li>\r\n</ul>\r\n\r\n<p>So, no matter what amount you donate, it will surely help a poor child in some way. Donate now to make their Christmas a Merry Christmas.</p>', 'photo915975481621599466626.jpg', '15000', 1, 3, '2020-12-10', NULL, NULL),
(4, 'Donate your special', '<p><strong>Make your birthday, anniversary, or engagement party count for more than just a good time.</strong></p>\r\n\r\n<p>To help you celebrate your special event, we want to invite you to join us in making a global impact for those living in extreme global poverty. Simply set up and personalise your own fundraising page and let your family and friends know about your campaign via Facebook and email. So simple and yet, impactful!</p>\r\n\r\n<p><strong><em>Here\'s how it works:</em></strong></p>\r\n\r\n<ol>\r\n	<li><strong>Create a special event campaign page.</strong>&nbsp;Several weeks before your birthday, take a few minutes and&nbsp;create a page.</li>\r\n	<li><strong>Set a fundraising goal.</strong>&nbsp;You can choose any goal and let people know you’re aiming high.</li>\r\n	<li><strong>Share and promote</strong>&nbsp;your celebration! Let your community know via email, Facebook, twitter, local club notices, and anything else you can think of.</li>\r\n</ol>', 'child-parliament-orientation-415977333711599466731.jpg', '50000', 0, 2, '2020-12-12', NULL, '2020-09-10 08:09:34'),
(5, 'SickKids GetLoud ', '<p>Description</p>\r\n\r\n<p>This year is different, so SickKids GetLoud presented by PCL Construction will be different. We can’t rally, march and celebrate together. So we’re going to GetLoud separately, by getting active throughout September. We want everyone to join us – so there’s no registration fees this year. Because our cause – building a new, even safer SickKids – is more important than ever. GetLoud with family and friends – at home, in your neighbourhood, in a local park. Run, walk, or ride, and track your kilometres. Then, ask friends and family to show support by donating to the cause. We may not be getting loud together, but the world will hear us. Visit www.GetLoudforSickKids.ca to join us!</p>', 'new_GetLoud3001599476548.jpg', '15000', 0, 3, '2019-02-01', NULL, NULL),
(6, ' Motorcycle Rally', '<p>Description</p>\r\n\r\n<p>Ride today for tomorrow\'s future. Join us for the 3rd Annual Smiles of Innocence Motorcycle Rally for SickKids. On Saturday, September 12, 2020, family and friends will get together for a social distanced motorcycle ride through Southern Ontario. Check-in begins at 8:00a.m. and kick stands up at 9:00a.m. Light lunch to be provided. For more information and to register, please visit: www.smilesofinnocence.ca.</p>', 'smiles of1599476605.JPG', '10000', 0, 1, '2020-09-09', NULL, NULL),
(7, 'Scotiabank Toronto ', '<p>Description</p>\r\n\r\n<p>Make your race more meaningful this year and raise funds for SickKids! Raise a minimum of $200 for SickKids Foundation and get your official SickKids Bandana to wear on race day! Register for 2020 Scotiabank Toronto Waterfront Marathon on October 18th and participate in the full or half marathon or 5K. Run or walk in honour of a loved one or to simply give something back to your community. No matter which distance you participate in, your fundraising makes a difference! The 2020 Scotiabank Toronto Waterfront Marathon is part of the brand new SickKids Warriors program. Becoming a SickKids Warrior means combining your love of challenge events with fundraising for SickKids. It’s a win for those kids, and the hospital that fights for them, when you fundraise on their behalf. Sign up to fundraise for this event and you will automatically be part of the program. For more information visit www.sickkidsfoundation.com/warriors.</p>', 'scotia logo1599476647.jpeg', '20000', 0, 1, '2018-04-05', NULL, '2020-09-07 04:04:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_post`
--

CREATE TABLE `list_post` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_imageName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_highlights` int(11) DEFAULT NULL,
  `post_status` int(11) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `list_post`
--

INSERT INTO `list_post` (`post_id`, `post_title`, `post_summary`, `post_content`, `post_imageName`, `post_highlights`, `post_status`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'SYRIA: CHILD DEATH RATE TRIPLES IN AL-HOL CAMP AS MEDICAL ACCESS DETERIORATES', 'Eight children under five died in Al Hol camp within five days, as health and nutrition services have rapidly declined.', '<p>Eight children under five died in Al Hol camp within five days, as health and nutrition services have rapidly declined. The spike in under-five mortality was recorded between 6 – 10 August, and is more than three times higher than the mortality rate since the beginning of 2020.</p>\r\n\r\n<p>Fears of a possible COVID-19 outbreak following a spike in cases across North East Syria, coupled with reduced humanitarian access since the beginning of the year due to the restriction in cross border points, has reduced the capacity of operational health facilities by 40%. Only one out of three field hospitals remain operational, and even then is running a reduced service.</p>\r\n\r\n<p>Among the eight children to have died were two Iraqi children, one Syrian child and at least three of foreign nationalities. Their deaths were linked to causes such as heart failure, internal bleeding and severe malnutrition and could have been treated at field hospitals, were they operational.&nbsp; Reduced medical resources including limitations on nutritional screening could lead to further preventable child deaths, Save the Children is warning today.</p>\r\n\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>\r\n\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>', 'photo21597588103.jpg', 1, 1, 3, '2020-08-10 02:55:42', '2020-08-22 21:10:41'),
(4, 'FIRST CASE OF CORONAVIRUS APPEARS AMONG RESIDENTS SYRIAN AL HOL CAMP', 'After earlier cases of COVID-19 among health workers in Al Hol Camp, the first reported case of COVID-19 of a resident of the camp was confirmed today, Save the Children can reveal...', '<p><strong>Sonia Khush, Syria Response Director for Save the Children, said:&nbsp;</strong><br />\r\n<em>\"One of our worst fears has come to pass. An outbreak of COVID-19 in Al Hol camp is going to be&nbsp;challenging&nbsp;to control considering how overcrowded the camp is and&nbsp;how&nbsp;little access families have to water, personal hygiene items, tests&nbsp;and protective equipment, with more than 65,000 people living in the camp at the moment.\"&nbsp;</em></p>\r\n\r\n<p><em>\"Sadly, there will be more cases. We need to act quickly to make sure we can limit the outbreak while minimizing the negative impact of the control measures on the children as well – such as isolation measures or the closure of education facilities.” &nbsp;</em></p>\r\n\r\n<p>She added:<em>&nbsp;\"This will be a children\'s crisis by&nbsp;any&nbsp;measure.&nbsp;As many as 43,000&nbsp;children&nbsp;will be impacted by an outbreak in the camp. We are concerned about their stigmatisation&nbsp;and their weakened&nbsp;immune&nbsp;systems, and how to make sure&nbsp;they’ll get through&nbsp;the next few weeks&nbsp;without additional&nbsp;emotional or psychological distress.\"&nbsp;</em></p>\r\n\r\n<p><em>“We renew our calls for&nbsp;aid workers to be allowed full access to communities so we can do all we can control the spread of infection, providing remote education and distributing soap and other personal hygiene items.&nbsp;We cannot afford the catastrophe&nbsp;of&nbsp;a large-scale outbreak for vulnerable communities in Al Hol.”&nbsp;</em></p>\r\n\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>', 'CH14095111597588330.png', 1, 1, 2, '2020-08-16 02:46:24', '2020-08-16 07:32:10'),
(5, 'Children’s Parliaments play vital role supporting Patna communities through lockdown.', 'Although the coronavirus pandemic and lockdown has meant that many of their regular meetings, campaigns and activities have been paused, ...', '<p>Although the coronavirus pandemic and lockdown has meant that many of their regular meetings, campaigns and activities have been paused, the 10 Children’s Parliaments in Patna have quickly adapted to become an instrumental part of helping their communities through the crisis.&nbsp;</p>\r\n\r\n<p>The sudden restrictions of lockdown in Bihar State crippled earning potential and pushed almost all poor families in the area to a situation of starvation and insecurity. During this time, the&nbsp;Child Parliaments&nbsp;were instrumental in helping to link families most at need to our relief programme. After helping with the initial surveys of 5,000 households, they also had a role in facilitating social distancing whilst supply parcel distributions were taking place.</p>', 'child-parliament-orientation-41597631549.jpg', 1, 1, 1, '2020-08-17 02:32:29', '2020-08-16 19:40:15'),
(6, 'Nisha talks about lockdown in Patna, India', 'My name is Nisha. I am 14 years old and I live with my parents, two sisters and one brother in a village in Patna. My father is a daily wage earner and mother is a sweeper in a private hospital....', '<p>My name is Nisha. I am 14 years old and I live with my parents, two sisters and one brother in a village in Patna. My father is a daily wage earner and mother is a sweeper in a private hospital. I was learning in a local fee paying school, but due to financial problems my parents had to stop my studies. When my schooling was stopped, I used to get bored sitting at home, but myself and my started going&nbsp;attending the NESWSD Learning Centre supported by Children on the Edge in my village. It is free and myself and my sisters have been going for the last two years.&nbsp;<br />\r\n<br />\r\nBecause of this, we are able to continue our learning. Visiting the school library I have learned to use my free time reading books and getting more knowledge in various subjects which will help me for higher studies. I also participated in a Storytelling Contest and I won the second prize! &nbsp;Now I am not bored at home. I don’t just gossip with friends now, I have very many good things to discuss with them and I feel that they value me.&nbsp;</p>', 'lockdown-in-india_orig1597632545.jpg', 1, 1, 2, '2020-08-17 02:49:05', NULL),
(7, 'Plant Trees', 'Trees are like nature’s superhero. According to the Arbor Day Foundation, trees help combat climate change', '<p>Trees are like nature’s superhero. According to the&nbsp;Arbor Day Foundation, trees help combat climate change, clean pollutants from the air, produce oxygen, reduce pollution caused by water runoff, prevent soil erosion, provide vital wildlife habitats, save us energy by providing cooling and shade, and even reduce violence in urban neighborhoods. That’s pretty incredible. Get involved in the&nbsp;tree-planting movement&nbsp;by organizing a tree-planting party (here’s a great&nbsp;guide on how to plant trees&nbsp;properly), or see if your city or town is already part of Arbor Day’s&nbsp;Tree City USA&nbsp;network and, if so, help strengthen the movement.</p>', '__opt__aboutcom__coeus__resources__content_migration__treehugger__images__2016__07__green-forest-trees-697b021e66cf4892ada9ffdca10885761599473753.jpg', 1, 1, 5, '2020-09-07 10:15:53', '2020-09-07 03:47:53'),
(8, 'Become a Trekking Guide', 'Sound too good to be true? We thought so too, at first. But turns out there are plenty of organizations, all over the world, that seek volunteer tour guides to lead eco-conscious expeditions through beautiful natural landscapes', '<p>Sound too good to be true? We thought so too, at first. But turns out there are plenty of organizations, all over the world, that seek volunteer tour guides to lead eco-conscious expeditions through&nbsp;beautiful natural landscapes. If you’re an outdoor enthusiast with experience in things like first aid and backpacking safety, this may be your dream adventure. So how does this help the environment? In addition to showcasing the natural beauty of a nature haven, non-profit eco-tour organizations use the money they make from eco-tourism treks to pay for environmental education programs, advocacy, or land restoration in their community. Some organizations to check out:&nbsp;Sonati Tours&nbsp;in Nicaragua,&nbsp;Condor Trekkers&nbsp;in Bolivia and the&nbsp;American Hiking Society&nbsp;right here in the USA.</p>\r\n\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>', 'trek-1200x7501599473889.jpg', 1, 1, 5, '2020-09-07 10:18:09', '2020-09-07 03:47:29'),
(9, 'Find a Local River Cleanup', 'While this might not seem like the most innovative ways to bring about environmental change, it’s one of the most rewarding.', '<p>While this might not seem like the most innovative ways to bring about environmental change, it’s one of the most rewarding. Since there are no government agencies regularly responsible for cleaning trash from a river, it will usually only happen if a community gets involved. Removing trash can make a river safer for wildlife and humans and improve water quality while protecting aquatic habitats. According to the EPA, as many as&nbsp;2 million seabirds are killed every year&nbsp;due to debris ingestion and entanglement. Another&nbsp;100,000 marine mammals&nbsp;are killed annually from the same cause. While ultimately preventing pollution in the first place is a better solution, most of us don’t want to sit around and wait while our waterways become trash pits. You can join a locally-sponsored cleanup or find a&nbsp;National River Cleanup through American Rivers. Or look for your&nbsp;local Riverkeeper&nbsp;chapter and sign up!</p>', 'River-Trash-1200x7501599473949.jpg', 1, 1, 1, '2020-09-07 10:19:09', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `member_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `members`
--

INSERT INTO `members` (`member_id`, `username`, `email`, `password`, `confirm_password`, `firstname`, `lastname`, `address`, `created_at`, `updated_at`) VALUES
(1, 'test123', 'hungcb1994@gmail.com', '123456', '123456', 'Hùng', 'Mạnh', 'HN', '2020-08-14 21:07:12', '2020-08-14 21:07:12'),
(2, 'hungdaycb', 'test1@gmail.com', '123456', '123456', 'Hùng', 'Mạnh', 'HN', '2020-08-21 18:47:06', '2020-08-21 18:47:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2020_08_13_164508_create_posts_tbl_table', 2),
(10, '2014_10_12_000000_create_users_table', 3),
(11, '2019_08_19_000000_create_failed_jobs_table', 3),
(12, '2020_07_31_091107_create_ngo_admin_table', 3),
(13, '2020_08_02_064106_create_list_donate_table', 3),
(14, '2020_08_03_111729_create_members_table', 3),
(15, '2020_08_03_120024_create_admin_user_table', 3),
(16, '2020_08_13_152404_create_category_post_table', 3),
(17, '2020_08_13_165329_create_list_post_table', 3),
(18, '2020_08_18_035925_create_events_tbl_table', 4),
(25, '2020_08_19_012219_create_events_donate_tbl_table', 5),
(28, '2020_08_20_145027_create_status_tbl_table', 6),
(30, '2020_08_22_063751_create_donate_details_table', 7),
(35, '2020_08_23_001912_creat_slide_tbl_table', 8),
(36, '2020_09_02_100802_create_guest_message_table', 9),
(37, '2020_09_07_075602_create_list_events_table', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide_tbl`
--

CREATE TABLE `slide_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide_tbl`
--

INSERT INTO `slide_tbl` (`id`, `title`, `image_name`, `link_address`, `post_status`, `created_at`, `updated_at`) VALUES
(1, 'THE GLOBAL FUND', 'logo11598147320.png', 'https://www.theglobalfund.org/en/', 1, '2020-08-23 03:28:51', '2020-08-22 20:28:51'),
(2, 'WFP', 'logo21598153775.png', 'https://www.wfp.org/', 1, NULL, NULL),
(3, 'UNCEF', 'logo31598153806.png', 'https://www.unicef.org/vietnam/vi', 1, NULL, NULL),
(4, 'UNHCR', 'logo41598153832.png', 'https://www.unhcr.org/', 1, NULL, NULL),
(5, 'global partnership', 'logo81598154006.png', 'https://www.globalpartnership.org/', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_tbl`
--

CREATE TABLE `status_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `status_tbl`
--

INSERT INTO `status_tbl` (`id`, `status_name`, `created_at`, `updated_at`) VALUES
(1, 'Public', '2020-08-20 10:00:00', NULL),
(2, 'Private', '2020-08-20 10:00:00', NULL),
(3, 'Pending', '2020-08-20 10:00:00', NULL),
(4, 'Complete', '2020-08-20 10:00:00', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_user_email_unique` (`email`),
  ADD UNIQUE KEY `admin_user_phone_unique` (`phone`);

--
-- Chỉ mục cho bảng `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `donate_details`
--
ALTER TABLE `donate_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donate_details_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `guest_message`
--
ALTER TABLE `guest_message`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_events`
--
ALTER TABLE `list_events`
  ADD PRIMARY KEY (`events_id`),
  ADD KEY `list_events_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `list_post`
--
ALTER TABLE `list_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `list_post_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `members_username_unique` (`username`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide_tbl`
--
ALTER TABLE `slide_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `category_post`
--
ALTER TABLE `category_post`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `donate_details`
--
ALTER TABLE `donate_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `guest_message`
--
ALTER TABLE `guest_message`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `list_events`
--
ALTER TABLE `list_events`
  MODIFY `events_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `list_post`
--
ALTER TABLE `list_post`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `slide_tbl`
--
ALTER TABLE `slide_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donate_details`
--
ALTER TABLE `donate_details`
  ADD CONSTRAINT `donate_details_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_post` (`category_id`);

--
-- Các ràng buộc cho bảng `list_events`
--
ALTER TABLE `list_events`
  ADD CONSTRAINT `list_events_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_post` (`category_id`);

--
-- Các ràng buộc cho bảng `list_post`
--
ALTER TABLE `list_post`
  ADD CONSTRAINT `list_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_post` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
