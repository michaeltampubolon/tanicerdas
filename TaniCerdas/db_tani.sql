-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 09:34 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tani`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_komunitas`
--

CREATE TABLE `anggota_komunitas` (
  `id_komunitas` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_komunitas`
--

INSERT INTO `anggota_komunitas` (`id_komunitas`, `id_user`, `role`) VALUES
('1', 'PNY-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tanam`
--

CREATE TABLE `jadwal_tanam` (
  `id` int(3) NOT NULL,
  `id_tanaman` varchar(15) NOT NULL,
  `id_lahan` varchar(15) NOT NULL,
  `kegiatan` text NOT NULL,
  `durasi` int(3) NOT NULL,
  `progress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_tanam`
--

INSERT INTO `jadwal_tanam` (`id`, `id_tanaman`, `id_lahan`, `kegiatan`, `durasi`, `progress`) VALUES
(2, '13', 'IDL-6828', 'kjdfdsjkfbdskj&lt;br&gt;', 9, '0fdjdnf');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_edit` datetime NOT NULL,
  `publish` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `parent_id`, `name`, `slug`, `date_added`, `date_edit`, `publish`) VALUES
(11, 0, 'Web Programming', 'web-programming', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(12, 11, 'PHP', 'php', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(13, 0, 'Web Design', 'web-design', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(14, 13, 'CSS', 'css', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(15, 12, 'Beginner & Installation', 'php-beginner-installation', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, 12, 'Session, Cookie, Security', 'php-session-cookie-security', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(17, 12, 'File & Image Manipulation', 'php-file-image-manipulation', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(18, 14, 'Responsive Layout', 'css-responsive-layout', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(19, 14, 'Beginner', 'css-beginner', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(20, 14, 'Effect, Animation, Gradient', 'css-effect-animation-gradient', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(21, 11, 'Javascript', 'javascript', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(22, 21, 'Jquery', 'jquery', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(23, 0, 'Project Management', 'project-management', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `keahlian_penyuluh`
--

CREATE TABLE `keahlian_penyuluh` (
  `id_keahlian` varchar(15) NOT NULL,
  `keahlian` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` varchar(15) NOT NULL,
  `id_komentar_ref` varchar(15) NOT NULL,
  `id_konsultasi` varchar(15) NOT NULL,
  `pesan` text NOT NULL,
  `id_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komunitas_tani`
--

CREATE TABLE `komunitas_tani` (
  `id_komunitas` varchar(15) NOT NULL,
  `nama_komunitas` varchar(50) NOT NULL,
  `tgl_dibentuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komunitas_tani`
--

INSERT INTO `komunitas_tani` (`id_komunitas`, `nama_komunitas`, `tgl_dibentuk`) VALUES
('1', 'Komunitas Usaha Tani', '2018-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `id_komunitas` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lahan`
--

CREATE TABLE `lahan` (
  `id_lahan` varchar(15) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `longlat` varchar(30) NOT NULL,
  `luas` double NOT NULL,
  `temperatur` double NOT NULL,
  `curah_hujan` double NOT NULL,
  `tekstur` varchar(20) NOT NULL,
  `ph` double NOT NULL,
  `drainase` varchar(25) NOT NULL,
  `kedalaman_tanah` varchar(10) NOT NULL,
  `lereng` double NOT NULL,
  `ketebalan_gambut` double NOT NULL,
  `id_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lahan`
--

INSERT INTO `lahan` (`id_lahan`, `provinsi`, `kota`, `kecamatan`, `longlat`, `luas`, `temperatur`, `curah_hujan`, `tekstur`, `ph`, `drainase`, `kedalaman_tanah`, `lereng`, `ketebalan_gambut`, `id_user`) VALUES
('IDL-6828', 'Jawa Barat', 'Medan', 'michael', 'mm', 7, 7, 8, 'sdjkshk', 9, 'dhbdh', '90', 89, 9999999, 'PNY-'),
('IDL-6829', 'Jawa Barat', 'Medan', 'michael', 'mm', 7, 7, 8, 'sdjkshk', 9, 'dhbdh', '90', 89, 99, 'PNY-');

-- --------------------------------------------------------

--
-- Table structure for table `penyuluh`
--

CREATE TABLE `penyuluh` (
  `id_keahlian` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `reply_to_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `post` text NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `thread_id`, `reply_to_id`, `author_id`, `post`, `date_add`, `date_edit`) VALUES
(2, 2, 0, 5, 'Hello!\r\nI have SMF 2.0.2\r\nI\'ve been tweaking it a lot and now it\'s almost perfect. But one last thing which kinda bothers me (though it might not be so crucial for other, I don\'t know...).\r\nThe left part of body of each post is somewhat different in color. I mean that\'s where you see the name of the poster, etc.\r\nIn my case, it\'s all ONE solid color from wall to wall, so to speak. There\'s no any border or a distinction between the part where the text resides and where the posters\' stats are. ', '2012-08-04 05:25:16', '0000-00-00 00:00:00'),
(4, 3, 0, 5, 'I have a datetime column in mysql which I need to convert to mm/dd/yy H:M (AM/PM) using PHP.', '2012-08-06 06:18:59', '0000-00-00 00:00:00'),
(5, 4, 0, 5, 'Is there a simple way to convert one date format into another date format in PHP?', '2012-08-06 06:19:38', '0000-00-00 00:00:00'),
(17, 2, 0, 5, 'ascsac', '2012-08-06 13:16:04', '0000-00-00 00:00:00'),
(19, 4, 0, 5, 'jtyjtyjyt', '2012-08-06 13:30:00', '0000-00-00 00:00:00'),
(20, 4, 0, 5, 'tyjtyj', '2012-08-06 13:30:02', '0000-00-00 00:00:00'),
(21, 3, 0, 5, 'fyjyytj', '2012-08-06 13:30:13', '0000-00-00 00:00:00'),
(22, 3, 0, 5, 'ytjtyj', '2012-08-06 13:30:16', '0000-00-00 00:00:00'),
(23, 2, 0, 5, '656u5556656u', '2012-08-06 13:30:25', '0000-00-00 00:00:00'),
(32, 2, 0, 5, 'tryrtytr', '2012-08-07 06:34:04', '0000-00-00 00:00:00'),
(33, 2, 0, 5, 'tryrtysytsy', '2012-08-07 06:34:07', '0000-00-00 00:00:00'),
(34, 2, 0, 5, 'tryrtysytsy', '2012-08-07 06:34:07', '0000-00-00 00:00:00'),
(35, 2, 0, 5, 'rtyryrty', '2012-08-07 06:34:38', '0000-00-00 00:00:00'),
(36, 2, 0, 5, 'hthrthrt', '2012-08-07 06:41:41', '0000-00-00 00:00:00'),
(37, 2, 0, 5, 'rthrthrt', '2012-08-07 06:41:57', '0000-00-00 00:00:00'),
(38, 2, 0, 5, '345345', '2012-08-07 06:41:59', '0000-00-00 00:00:00'),
(39, 2, 0, 5, 'q45q45q345', '2012-08-07 06:42:01', '0000-00-00 00:00:00'),
(40, 5, 0, 5, 'I am not good at regular expressio. How to do a php regular expression, make a judge if a string first word is (a-h), second word is @, third part are numbers(length range from 4-15)?', '2012-08-07 12:53:33', '0000-00-00 00:00:00'),
(41, 3, 0, 5, 'dfsdfsd', '2012-08-07 12:55:49', '0000-00-00 00:00:00'),
(42, 3, 0, 5, 'sdfsdf', '2012-08-07 12:56:13', '0000-00-00 00:00:00'),
(43, 3, 0, 5, 'ergerg', '2012-08-07 12:58:48', '0000-00-00 00:00:00'),
(46, 6, 0, 5, 'I\'m basically trying to convert an image into a fluid HTML table. I\'ve dissected the image to one top piece and 5 bottom pieces and placed them in the appropriate cells to reconstruct the image.', '2012-08-07 13:11:09', '0000-00-00 00:00:00'),
(52, 4, 0, 5, 'ghghhgj', '2012-08-13 03:23:51', '0000-00-00 00:00:00'),
(53, 4, 0, 0, 'fdfdg', '2012-08-13 05:30:12', '0000-00-00 00:00:00'),
(54, 4, 0, 0, 'dfgdfg', '2012-08-13 05:30:15', '0000-00-00 00:00:00'),
(55, 4, 0, 0, 'dfg', '2012-08-13 05:30:17', '0000-00-00 00:00:00'),
(59, 7, 0, 5, 'I would like all the resulting methods to be included in the RDoc documentation. Is there an RDoc directive which \"manually\" adds a method to the list of methods for the class? I can\'t find one.', '2012-08-13 06:33:48', '0000-00-00 00:00:00'),
(61, 9, 0, 5, '\r\n0\r\nvotes\r\n0\r\nanswers\r\n37 views\r\ntransfer (add/remove) php array values between 2 divs\r\nI have a normal div, having an input textbox which can be edited manually. I want to add/remove php values from another div having a set of php array values (from a query). Each value have an [Add] or ...', '2012-08-13 06:38:03', '0000-00-00 00:00:00'),
(62, 10, 0, 5, 'My first cry for help here. Not sure if my title is properly explicit but it\'s the only one I can come up with right now. I\'ve been at it for 2 days now and I have read so many different things that I ...', '2012-08-13 06:38:42', '0000-00-00 00:00:00'),
(63, 11, 0, 5, 'How can I remove \'index.php\' from urls, if I have some controllers in the controllers folder and one in subfolder? For example my frontend url looks like this : domain.com/site/contact.html I would like my backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:', '2012-08-13 07:16:03', '0000-00-00 00:00:00'),
(64, 7, 0, 5, 'fghghgthrth', '2012-08-13 07:34:58', '0000-00-00 00:00:00'),
(66, 7, 0, 5, 'ewfwef', '2012-08-13 08:18:47', '0000-00-00 00:00:00'),
(67, 2, 2, 5, 'eyewyy', '2012-08-13 10:40:09', '0000-00-00 00:00:00'),
(68, 2, 67, 5, '123123123', '2012-08-13 10:40:40', '0000-00-00 00:00:00'),
(69, 2, 2, 5, '123213321', '2012-08-13 10:40:53', '0000-00-00 00:00:00'),
(70, 2, 2, 5, 'yjtyjtyjytjytjyjt', '2012-08-13 11:02:40', '0000-00-00 00:00:00'),
(71, 11, 63, 5, 'backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:', '2012-08-13 11:15:20', '0000-00-00 00:00:00'),
(72, 11, 63, 5, 'posted by admin \"How can I remove \'index.php\' from urls, if I have some controllers in the controllers folder and one in subfolder? For example my frontend url looks like this : domain.com/site/contact.html I would like my backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:\"\r\n                        ', '2012-08-13 13:20:35', '0000-00-00 00:00:00'),
(73, 2, 0, 0, '<b>efwefwefew</b><br>', '2012-08-14 05:09:21', '0000-00-00 00:00:00'),
(74, 2, 0, 5, '<p>sdfadfadff</p>', '2012-08-14 05:10:46', '0000-00-00 00:00:00'),
(75, 2, 0, 5, '<p><b>Initial contentsadf</b></p>', '2012-08-14 05:10:53', '0000-00-00 00:00:00'),
(76, 11, 71, 5, 'posted by <b>@admin</b><p><i>backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:</i></p><p>eefwfwefwefwef<i><br></i></p>', '2012-08-14 05:58:30', '0000-00-00 00:00:00'),
(77, 11, 71, 5, '<div style=\"font-size:11px; padding:5px;\">posted by <b>@admin</b><p><i>backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:</i></p>rtyretyery<br></div>', '2012-08-14 05:59:46', '0000-00-00 00:00:00'),
(78, 11, 76, 5, '<div style=\"font-size:11px; background: #e3e3e3;padding:5px;\">posted by <b>@admin</b><p><i>posted by <b>@admin</b></i></p><p><i><i>backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:</i></i></p><p><i>eefwfwefwefwefrety</i></p><p><i><i>rtyretyrty<br></i></i></p><p></p></div>', '2012-08-14 06:01:35', '0000-00-00 00:00:00'),
(79, 11, 63, 5, '<div style=\"font-size:11px; background: #e3e3e3;padding:5px;\">posted by <b>@admin</b><p><i>How can I remove \'index.php\' from urls, if I have some controllers in the controllers folder and one in subfolder? For example my frontend url looks like this : domain.com/site/contact.html I would like my backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:</i></p></div>rtyrtyreyryreyertyrey', '2012-08-14 06:02:20', '0000-00-00 00:00:00'),
(80, 11, 76, 5, '<div style=\"font-size:11px; background: #e3e3e3;padding:5px;\">posted by <b>@admin</b><p><i>posted by <b>@admin</b></i></p><p><i><i>backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:</i></i></p><p><i>eefwfwefwefwef<i><br></i></i></p><p></p></div><br>retyretyeryertyre ret yretyer ty', '2012-08-14 06:02:46', '0000-00-00 00:00:00'),
(81, 11, 80, 5, '<div style=\"font-size:11px; background: #e3e3e3;padding:5px;\">posted by <b>@admin</b><p><i>&lt;div style=\"font-size:11px; background: #e3e3e3;padding:5px;\"&gt;posted by &lt;b&gt;@admin&lt;/b&gt;&lt;p&gt;&lt;i&gt;posted by &lt;b&gt;@admin&lt;/b&gt;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;&lt;i&gt;backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:&lt;/i&gt;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;eefwfwefwefwef&lt;i&gt;&lt;br&gt;&lt;/i&gt;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;/div&gt;&lt;br&gt;retyretyeryertyre ret yretyer ty</i></p></div>', '2012-08-14 06:03:48', '0000-00-00 00:00:00'),
(82, 11, 63, 5, '<div style=\"font-size:11px; background: #e3e3e3;padding:5px;\">posted by <b>@admin</b><p><i>How can I remove \'index.php\' from urls, if I have some controllers in the controllers folder and one in subfolder? For example my frontend url looks like this : domain.com/site/contact.html I would like my backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:</i></p></div>rtyrety', '2012-08-14 06:06:20', '0000-00-00 00:00:00'),
(83, 2, 23, 5, '<div style=\"font-size:11px; background: #e3e3e3;padding:5px;\">posted by <b>@admin</b><p><i>656u5556656u</i></p></div><br>sfsss', '2012-08-14 06:09:56', '0000-00-00 00:00:00'),
(84, 2, 83, 5, '<div style=\"font-size:11px; background: #e3e3e3;padding:5px;\"><i>posted by @admin656u5556656usfsss</i></div><br>sfsfss', '2012-08-14 06:10:20', '0000-00-00 00:00:00'),
(85, 12, 0, 5, '<p><b itemscope=\"\" itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"https://github.com/akzhan/jwysiwyg\" class=\"js-rewrite-sha\" itemprop=\"url\"><span itemprop=\"title\">jwysiwyg</span></a></b> / <span itemscope=\"\" itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"https://github.com/akzhan/jwysiwyg/tree/master/help\" class=\"js-rewrite-sha\" itemscope=\"url\"><span itemprop=\"title\">help</span></a></span> / <span itemscope=\"\" itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"https://github.com/akzhan/jwysiwyg/tree/master/help/examples\" class=\"js-rewrite-sha\" itemscope=\"url\"><span itemprop=\"title\">examples</span></a></span> / <strong class=\"final-path\">10-custom-controls.html</strong></p>', '2012-08-14 06:15:57', '0000-00-00 00:00:00'),
(86, 12, 85, 5, '<div style=\"font-size:11px; background: #e3e3e3;padding:5px;\">posted by <b>@admin</b><p><i>jwysiwyg / help / examples / 10-custom-controls.html</i></p></div><br>how', '2012-08-14 06:15:58', '0000-00-00 00:00:00'),
(87, 13, 0, 5, '<p style=\"margin: 0px 0px 1em; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; background-color: rgb(255, 255, 255); clear: both; word-wrap: break-word; color: rgb(0, 0, 0); font-family: Arial, \'Liberation Sans\', \'DejaVu Sans\', sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-position: initial initial; background-repeat: initial initial; \">I am trying to create a schedule for a Tae Kwon Do school, and I would like the admins to be able to CRUD their table .</p><p style=\"margin: 0px 0px 1em; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; background-color: rgb(255, 255, 255); clear: both; word-wrap: break-word; color: rgb(0, 0, 0); font-family: Arial, \'Liberation Sans\', \'DejaVu Sans\', sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-position: initial initial; background-repeat: initial initial; \">This is how I would like for it to look:</p>', '2012-08-14 06:43:59', '0000-00-00 00:00:00'),
(88, 13, 87, 5, '<div style=\"font-size:11px; background: #e3e3e3;padding:5px;\">posted by <b>@admin</b><p><i>I am trying to create a schedule for a Tae Kwon Do school, and I would like the admins to be able to CRUD their table .This is how I would like for it to look:</i></p></div><br>fyuytuityutyutyu', '2012-08-14 13:22:47', '0000-00-00 00:00:00'),
(89, 2, 0, 5, 'fghfghfgh', '2012-08-15 04:40:45', '0000-00-00 00:00:00'),
(90, 9, 61, 5, 'which can be edited manually. I want to add/remove php values from \r\nanother div having a set of php array values (from a query). Each value \r\nhave an [Add', '2012-08-15 07:30:44', '0000-00-00 00:00:00'),
(91, 13, 0, 5, 'yytyu', '2012-12-02 03:23:57', '0000-00-00 00:00:00'),
(92, 13, 87, 5, '<div style=\"font-size:11px; background: #e3e3e3;padding:5px;\">posted by <b>@admin</b><p><i>I am trying to create a schedule for a Tae Kwon Do school, and I would like the admins to be able to CRUD their table .This is how I would like for it to look:</i></p></div><br>iuiyio', '2012-12-02 03:24:08', '0000-00-00 00:00:00'),
(93, 13, 0, 9, 'TESTTTTTTTT', '2018-01-01 08:48:33', '0000-00-00 00:00:00'),
(94, 13, 92, 9, '<div style=\"font-size:11px; background: #e3e3e3;padding:5px;\">posted by <b>@admin</b><p><i>posted by @adminI am trying to create a schedule for a Tae Kwon Do school, and I would like the admins to be able to CRUD their table .This is how I would like for it to look:iuiyio</i></p></div><br>TESTTTTTTTT', '2018-01-01 08:48:39', '0000-00-00 00:00:00'),
(95, 14, 0, 9, 'TEST', '2018-01-01 08:50:42', '0000-00-00 00:00:00'),
(96, 15, 0, 9, 'lxkjsldfd;', '2018-01-02 15:35:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `admin_area` int(1) NOT NULL DEFAULT '0',
  `thread_create` int(1) NOT NULL DEFAULT '0',
  `thread_edit` int(1) NOT NULL DEFAULT '0',
  `thread_delete` int(1) NOT NULL DEFAULT '0',
  `post_create` int(1) NOT NULL DEFAULT '0',
  `post_edit` int(1) NOT NULL DEFAULT '0',
  `post_delete` int(1) NOT NULL DEFAULT '0',
  `role_create` int(1) NOT NULL DEFAULT '0',
  `role_edit` int(1) NOT NULL DEFAULT '0',
  `role_delete` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `admin_area`, `thread_create`, `thread_edit`, `thread_delete`, `post_create`, `post_edit`, `post_delete`, `role_create`, `role_edit`, `role_delete`) VALUES
(2, 'administrator', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3, 'member', 0, 1, 0, 0, 1, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id_tanaman` varchar(15) NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `kelompok_tanaman` varchar(25) NOT NULL,
  `akar` varchar(25) NOT NULL,
  `biji` varchar(25) NOT NULL,
  `daun` varchar(25) NOT NULL,
  `batang` varchar(25) NOT NULL,
  `kategori_komoditas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`id_tanaman`, `nama_tanaman`, `kelompok_tanaman`, `akar`, `biji`, `daun`, `batang`, `kategori_komoditas`) VALUES
('12', 'JJ', 'MM', 'mm', 'mm', 'mm', 'mm', 'mm'),
('13', 'MM', 'jj', 'jj', 'jj', 'jj', 'jj', 'jj');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` datetime NOT NULL,
  `date_last_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `category_id`, `title`, `slug`, `date_add`, `date_edit`, `date_last_post`) VALUES
(2, 19, 'Need help for forum styling using phpBB', 'need-help-for-forum-styling-using-phpbb', '2012-08-04 05:25:16', '0000-00-00 00:00:00', '2012-08-04 05:25:16'),
(3, 12, 'Format mysql datetime with php', 'format-mysql-datetime-with-php', '2012-08-06 06:18:59', '0000-00-00 00:00:00', '2012-08-06 06:18:59'),
(4, 12, 'Convert one date format into another in PHP', 'convert-one-date-format-into-another-in-php', '2012-08-06 06:19:38', '0000-00-00 00:00:00', '2012-08-06 06:19:38'),
(5, 12, 'Is my php regular expression right?', 'is-my-php-regular-expression-right?', '2012-08-07 12:53:33', '0000-00-00 00:00:00', '2012-08-07 12:53:33'),
(6, 18, 'Fluid images in table - Width: CSS vs HTML', 'fluid-images-in-table---width:-css-vs-html', '2012-08-07 13:11:09', '0000-00-00 00:00:00', '2012-08-07 13:11:09'),
(7, 12, 'How to add RDoc documentation for a method defined using class_eval?', 'how-to-add-rdoc-documentation-for-a-method-defined-using-classeval', '2012-08-13 06:33:48', '0000-00-00 00:00:00', '2012-08-13 06:33:48'),
(9, 11, 'transfer (add/remove) php array values between 2 divs', 'transfer-addremove-php-array-values-between-2-divs', '2012-08-13 06:38:03', '0000-00-00 00:00:00', '2012-08-13 06:38:03'),
(10, 11, 'Creating an associative array from PHP through AJAX in JQUERY', 'creating-an-associative-array-from-php-through-ajax-in-jquery', '2012-08-13 06:38:42', '0000-00-00 00:00:00', '2012-08-13 06:38:42'),
(11, 12, 'Codeigniter - controllers in subfolder, remove index.php from url', 'codeigniter--controllers-in-subfolder-remove-indexphp-from-url', '2012-08-13 07:16:03', '0000-00-00 00:00:00', '2012-08-13 07:16:03'),
(12, 13, '10-custom-controls.html', '10customcontrolshtml', '2012-08-14 06:15:57', '0000-00-00 00:00:00', '2012-08-14 06:15:57'),
(13, 13, 'Multiple forms in tables, multiple submit buttons. Can I do it with just PHP and HTML?', 'multiple-forms-in-tables-multiple-submit-buttons-can-i-do-it-with-just-php-and-html', '2012-08-14 06:43:59', '0000-00-00 00:00:00', '2012-08-14 06:43:59'),
(14, 13, 'Test', 'TEST', '2018-01-01 08:50:42', '0000-00-00 00:00:00', '2018-01-01 08:50:42'),
(15, 15, 'kkkk', 'kkkk', '2018-01-02 15:35:42', '0000-00-00 00:00:00', '2018-01-02 15:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `no_telp` text NOT NULL,
  `no_identitas` int(16) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `alamat_jalan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `password`, `no_telp`, `no_identitas`, `provinsi`, `kota`, `kecamatan`, `alamat_jalan`) VALUES
('1', 'mich', 'kkkk', 'mic@gmail.com', 'michael', '1234567890', 2147483647, 'Jawa Barat', 'Bogor Kota', 'Bogor Tengah', ' ldchsdohs'),
('2', 'admin', 'admin', 'michaelnixn@gmail.com', 'admin', '1234567889', 2147483647, 'Jawa Barat', 'Bogor Kota', 'Bogor Tengah', ' djkgfydgfuis'),
('penyuluh', 'michigans', 'Michael Tampubolon', 'michaelnixn@gmail.com', '0acf4539a14b3aa27deeb4cbdf6e989f', '1234567878', 2147483647, 'Jawa Barat', 'Bogor Kota', 'michael', 'skdhfk'),
('PNY-', 'michaelbln', 'Michael Tampubolonssdmms', 'michaelnixn@yahoo.com', '0acf4539a14b3aa27deeb4cbdf6e989f', '12345678182', 2147483647, 'SUmur', 'Bogor', 'michaeldj', 'djksgvdskgvdskgvdsvdsjkvhdfvdf'),
('PNY-412678', 'michigansd', 'Michael Tampubolon', 'michaelnixn@gmail.com', '0acf4539a14b3aa27deeb4cbdf6e989f', '1234567812', 2147483647, 'Jawa Barat', 'Bogor Kota', 'michael', 'sjkdfsdk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `password`) VALUES
(8, 3, 'test123', 'lezdLKUaX29CLmTsV2tGzPH3F9ejw6yVyKBELV+LzI0ud0OrGf87+7wrXSRXOSadCmLg657sprBt2Ujs1NEmPg=='),
(9, 3, 'michael', '5CorCoume02UdrMIjfvOhB5/gKmADzsfqqDdLTtL+OIcM+sgwW6DTgIauPvEGITQqbafX8pm5saUdVI0fw4vmg==');

-- --------------------------------------------------------

--
-- Table structure for table `user_penyuluh`
--

CREATE TABLE `user_penyuluh` (
  `id_user` varchar(15) NOT NULL,
  `instansi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_komunitas`
--
ALTER TABLE `anggota_komunitas`
  ADD KEY `id_komunitas` (`id_komunitas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `jadwal_tanam`
--
ALTER TABLE `jadwal_tanam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tanaman` (`id_tanaman`),
  ADD KEY `id_lahan` (`id_lahan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keahlian_penyuluh`
--
ALTER TABLE `keahlian_penyuluh`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_konsultasi` (`id_konsultasi`);

--
-- Indexes for table `komunitas_tani`
--
ALTER TABLE `komunitas_tani`
  ADD PRIMARY KEY (`id_komunitas`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_komunitas` (`id_komunitas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`id_lahan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penyuluh`
--
ALTER TABLE `penyuluh`
  ADD KEY `id_keahlian` (`id_keahlian`),
  ADD KEY `penyuluh_ibfk_1` (`id_user`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_penyuluh`
--
ALTER TABLE `user_penyuluh`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_tanam`
--
ALTER TABLE `jadwal_tanam`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota_komunitas`
--
ALTER TABLE `anggota_komunitas`
  ADD CONSTRAINT `anggota_komunitas_ibfk_1` FOREIGN KEY (`id_komunitas`) REFERENCES `komunitas_tani` (`id_komunitas`),
  ADD CONSTRAINT `anggota_komunitas_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `jadwal_tanam`
--
ALTER TABLE `jadwal_tanam`
  ADD CONSTRAINT `jadwal_tanam_ibfk_1` FOREIGN KEY (`id_tanaman`) REFERENCES `tanaman` (`id_tanaman`),
  ADD CONSTRAINT `jadwal_tanam_ibfk_2` FOREIGN KEY (`id_lahan`) REFERENCES `lahan` (`id_lahan`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_konsultasi`) REFERENCES `konsultasi` (`id_konsultasi`);

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_1` FOREIGN KEY (`id_komunitas`) REFERENCES `komunitas_tani` (`id_komunitas`),
  ADD CONSTRAINT `konsultasi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `lahan`
--
ALTER TABLE `lahan`
  ADD CONSTRAINT `lahan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `penyuluh`
--
ALTER TABLE `penyuluh`
  ADD CONSTRAINT `penyuluh_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_penyuluh` (`id_user`),
  ADD CONSTRAINT `penyuluh_ibfk_2` FOREIGN KEY (`id_keahlian`) REFERENCES `keahlian_penyuluh` (`id_keahlian`);

--
-- Constraints for table `user_penyuluh`
--
ALTER TABLE `user_penyuluh`
  ADD CONSTRAINT `user_penyuluh_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
