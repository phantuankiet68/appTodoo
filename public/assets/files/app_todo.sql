-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2025 at 04:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `key` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `key`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Web-Thomate', 3, 1, '2024-09-30 01:22:43', '2024-09-30 01:22:43'),
(2, 3, 'robot-thuan', 3, 1, '2024-09-30 02:47:39', '2024-09-30 02:47:39'),
(3, 3, 'Web-BanHang-Asp.net', 3, 1, '2024-09-30 02:53:49', '2024-09-30 02:53:49'),
(4, 3, 'Web-Bookin-React-Nodejs', 3, 1, '2024-09-30 02:56:59', '2024-09-30 03:09:12'),
(5, 3, 'Lesson 1', 5, 1, '2024-10-04 07:04:29', '2024-10-04 07:04:29'),
(6, 3, 'Lesson 2', 5, 1, '2024-10-04 07:04:38', '2024-10-04 07:04:38'),
(7, 3, 'Lesson 3', 5, 1, '2024-10-04 07:05:11', '2024-10-04 07:05:11'),
(8, 3, 'Lesson 4', 5, 1, '2024-10-04 07:05:21', '2024-10-04 07:05:21'),
(9, 3, 'Lesson 5', 5, 1, '2024-10-04 07:06:53', '2024-10-04 07:06:53'),
(10, 3, 'Lesson 6', 5, 1, '2024-10-11 00:44:06', '2024-10-11 00:44:06'),
(11, 3, 'Lesson 7', 5, 1, '2024-10-11 00:44:16', '2024-10-11 00:44:16'),
(12, 3, 'Lesson 8', 5, 1, '2024-10-11 00:44:25', '2024-10-11 00:44:25'),
(13, 3, 'Lesson  9', 5, 1, '2024-10-11 00:44:31', '2024-10-11 00:44:31'),
(14, 3, 'Lesson 10', 5, 1, '2024-10-11 00:44:39', '2024-10-11 00:44:39'),
(15, 3, 'Lesson 11', 5, 1, '2024-10-11 07:48:11', '2024-10-11 07:48:11'),
(16, 3, 'Lesson 12', 5, 1, '2024-10-11 00:45:38', '2024-10-11 00:45:38'),
(17, 3, 'Lesson 13', 5, 1, '2024-10-11 00:45:45', '2024-10-11 00:45:45'),
(18, 3, 'Lesson 14', 5, 1, '2024-10-11 00:45:54', '2024-10-11 00:45:54'),
(19, 3, 'Lesson 15', 5, 1, '2024-10-11 00:47:30', '2024-10-11 00:47:30'),
(20, 3, 'Lesson 16', 5, 1, '2024-10-11 00:47:38', '2024-10-11 00:47:38'),
(21, 3, 'Lesson 17', 5, 1, '2024-10-11 00:51:29', '2024-10-11 00:51:29'),
(22, 3, 'Lesson 18', 5, 1, '2024-10-11 00:51:46', '2024-10-11 00:51:46'),
(23, 3, 'Lesson 19', 5, 1, '2024-10-11 00:51:57', '2024-10-11 00:51:57'),
(24, 3, 'Lesson 20', 5, 1, '2024-10-11 00:52:05', '2024-10-11 00:52:05'),
(25, 3, 'HTML', 8, 1, '2024-10-11 07:48:11', '2024-10-11 07:48:11'),
(26, 3, 'Javascript', 9, 1, '2024-10-11 08:01:52', '2024-10-11 08:01:52'),
(27, 3, 'Vuejs', 10, 1, '2024-10-11 08:05:25', '2024-10-11 08:05:25'),
(28, 3, 'ReacJs', 11, 1, '2024-10-11 08:05:25', '2024-10-11 08:05:25'),
(29, 3, 'ECommerce', 3, 1, '2024-10-11 10:16:09', '2024-10-11 10:16:09'),
(30, 3, 'web-pod', 3, 1, '2024-10-11 10:21:02', '2024-10-11 10:21:02'),
(31, 3, 'ES-Code', 3, 1, '2024-10-11 10:22:03', '2024-10-11 10:22:03'),
(32, 3, 'Hatsusa', 3, 1, '2024-10-11 10:23:49', '2024-10-11 10:23:49'),
(33, 3, 'Response-', 3, 1, '2024-10-11 10:32:04', '2024-10-12 06:28:28'),
(34, 10, 'Profile-Me', 3, 1, '2024-11-07 09:36:19', '2024-11-30 07:20:35'),
(35, 10, 'ES', 3, 1, '2024-11-07 09:36:31', '2024-11-07 09:36:31'),
(36, 10, 'Mong-Co', 3, 1, '2024-11-07 09:36:46', '2024-11-07 09:36:46'),
(37, 10, 'Upskillhub', 3, 1, '2024-11-30 07:11:08', '2024-11-30 07:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `category_languages`
--

CREATE TABLE `category_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_languages`
--

INSERT INTO `category_languages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Lesson 1', NULL, NULL),
(2, 'Lesson 2', NULL, NULL),
(3, 'Lesson 3', NULL, NULL),
(4, 'Lesson 4', NULL, NULL),
(5, 'Lesson 5', NULL, NULL),
(6, 'Lesson 6', NULL, NULL),
(7, 'Lesson 7', NULL, NULL),
(8, 'Lesson 8', NULL, NULL),
(9, 'Lesson 9', NULL, NULL),
(10, 'Lesson 10', NULL, NULL),
(11, 'Lesson 11', NULL, NULL),
(12, 'Lesson 12', NULL, NULL),
(13, 'Lesson 13', NULL, NULL),
(14, 'Lesson 14', NULL, NULL),
(15, 'Lesson 15', NULL, NULL),
(16, 'Lesson 16', NULL, NULL),
(17, 'Lesson 17', NULL, NULL),
(18, 'Lesson 18', NULL, NULL),
(19, 'Lesson 19', NULL, NULL),
(20, 'Lesson 20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_tasks`
--

CREATE TABLE `category_tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `code` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `user_id`, `category_id`, `name`, `description`, `image`, `code`, `link`, `created_at`, `updated_at`) VALUES
(1, 3, 25, 'Login Page Tutorial (HTML & CSS)', '<pre>\r\n@import url(&#39;https://fonts.googleapis.com/css2?family=Poppins:wght@300&amp;family=Roboto:wght@300&amp;display=swap&#39;);\r\n* {\r\n    padding: 0;\r\n    margin: 0;\r\n    box-sizing: border-box;\r\n}\r\nbody{\r\n    background: -webkit-linear-gradient(bottom, #0250c5, #d43f8d);\r\n    background-image: -webkit-linear-gradient(bottom, rgb(2,80,197), rgb(212,63,141));\r\n    background-attachment: fixed;\r\n    background-repeat: no-repeat;\r\n    font-family: &quot;Poppins&quot;, cursive;\r\n    cursor: pointer;\r\n}\r\n\r\nform{\r\n    width: 450px;\r\n    min-height: 500px;\r\n    height: auto;\r\n    border-radius: 5px;\r\n    margin: 2% auto;\r\n    box-shadow: 0 9px 50px hsla(20, 67%, 75%,0.31);\r\n    padding: 2%;\r\n    background-image: linear-gradient(-225deg,#ffbf00 50%,#6495ed 50%);\r\n\r\n}\r\n\r\nform .icon{\r\n    display: -webkit-flex;\r\n    display: flex;\r\n    -webkit-justify-content: space-around;\r\n    justify-content: space-around;\r\n    -webkit-flex-wrap: wrap;\r\n    flex-wrap: wrap;\r\n    margin: 0 auto;\r\n}\r\nheader{\r\n    margin: 2% auto 10% auto;\r\n    text-align: center;\r\n}\r\nheader h2{\r\n    font-size: 250%;\r\n    font-family: &quot;Poppins&quot;, sans-serif;\r\n    color: #000;\r\n}\r\nheader p{\r\n    letter-spacing: 0.05em;\r\n}\r\n.input-item{\r\n    background: #fff;\r\n    color: #333;\r\n    padding: 14.5px 0px 15px 9px;\r\n    border-radius: 5px 0px 0px 5px;\r\n}\r\n#eye{\r\n    background: #fff;\r\n    color: #333;\r\n    margin: 5.9px 0 0 0;\r\n    margin-left: -20px;\r\n    padding: 15px 9px 19px 0px;\r\n    border-radius: 0px 5px 5px 0px;\r\n    float: right;\r\n    position: relative;\r\n    right: 1%;\r\n    top: -.2%;\r\n    z-index: 5;\r\n    cursor: pointer;\r\n}\r\ninput[class=&quot;form-input&quot;]{\r\n    width: 240px;\r\n    height: 50px;\r\n    margin-top: 2%;\r\n    padding: 15px;\r\n    font-size: 16px;\r\n    font-family: &#39;Poppins&#39;,sans-serif;\r\n    color: #5e6472;\r\n    outline: none;\r\n    border: none;\r\n    border-radius: 0px 5px 5px 0px;\r\n    transition: 0.2s linear;\r\n}\r\ninput[id=&quot;txt-input&quot;]{\r\n    width: 250px;\r\n}\r\ninput:focus{\r\n    transform: translateX(-2px);\r\n    border-radius: 5px;\r\n}\r\nbutton{\r\n    display: inline-block;\r\n    color: #252537;\r\n    width: 280px;\r\n    height: 50px;\r\n    padding: 0 20px;\r\n    background: #fff;\r\n    border-radius: 5px;\r\n    outline: none;\r\n    border: none;\r\n    cursor: pointer;\r\n    text-align: center;\r\n    transition: all 0.2s linear;\r\n    margin: 7% auto;\r\n    letter-spacing: 0.05em;\r\n}\r\nbutton:hover{\r\n    background-color: #b8f2e6;\r\n}\r\n.submits{\r\n    width: 48%;\r\n    float: left;\r\n    margin-left: 2%;\r\n\r\n}\r\n.frgt-pass {background: transparent;\r\n}\r\n.sign-up{\r\n    background: #b8f2e6;\r\n}\r\nbutton:hover{\r\n    transform: translateY(3px);\r\n    box-shadow: none;\r\n}\r\nbutton:hover{\r\n    animation: ani9 0.4s ease-in-out infinite alternate;\r\n\r\n}\r\n@keyframes ani9 {\r\n    0%{\r\n        transform: translateY(3px);\r\n    }\r\n    100%{\r\n        transform: translateY(5px);\r\n    }\r\n    \r\n}</pre>', '1728635352_Ảnh chụp màn hình 2024-10-11 152851.png', '<pre>\r\n&lt;div class=&quot;overlay&quot;&gt;\r\n     &lt;form&gt;\r\n        &lt;div class=&quot;icon&quot;&gt;\r\n           &lt;header class=&quot;head-form&quot;&gt;\r\n              &lt;h2&gt;LOGIN&lt;/h2&gt;\r\n              &lt;p&gt;login here using your username and password&lt;/p&gt;\r\n           &lt;/header&gt;\r\n           &lt;br&gt;\r\n           &lt;div class=&quot;fiel-set&quot;&gt;\r\n              &lt;span class=&quot;input-item&quot;&gt;\r\n                 &lt;i class=&quot;fa fa-user-circle&quot;&gt;&lt;/i&gt;\r\n              &lt;/span&gt;\r\n              &lt;input class=&quot;form-input&quot; id=&quot;txt&quot; type=&quot;text&quot; placeholder=&quot;Username&quot; required&gt;\r\n              &lt;br&gt;\r\n              &lt;span class=&quot;input-item&quot;&gt;\r\n                 &lt;i class=&quot;fa fa-key&quot;&gt;&lt;/i&gt;\r\n              &lt;/span&gt;\r\n              &lt;input class=&quot;form-input&quot; id=&quot;pwd&quot; type=&quot;password&quot; placeholder=&quot;Password&quot; required&gt;\r\n              &lt;span&gt;\r\n                 &lt;i class=&quot;fa fa-eye&quot; aria-hidden=&quot;true&quot; type=&quot;button&quot; id=&quot;eye&quot;&gt;&lt;/i&gt;\r\n              &lt;/span&gt;\r\n              &lt;br&gt;\r\n              &lt;button class=&quot;log-in&quot;&gt;LOGIN&lt;/button&gt;\r\n           &lt;/div&gt;\r\n           &lt;div class=&quot;other&quot;&gt;\r\n              &lt;button class=&quot;btn submits frgt-pass&quot;&gt;Forgot Password&lt;/button&gt;\r\n              &lt;button class=&quot;btn submits sign-up&quot;&gt;Sign Up\r\n                 &lt;i class=&quot;fa fa-user-plus&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;\r\n              &lt;/button&gt;\r\n           &lt;/div&gt;\r\n        &lt;/div&gt;\r\n     &lt;/form&gt;\r\n  &lt;/div&gt;</pre>', 'https://www.youtube.com/watch?v=N6BTKtkuuI4', '2024-10-11 01:29:12', '2024-10-11 01:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issue_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_issues`
--

CREATE TABLE `comment_issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `issue_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `assignee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_issues`
--

INSERT INTO `comment_issues` (`id`, `content`, `user_id`, `issue_id`, `created_at`, `updated_at`, `assignee_id`, `start_date`, `end_date`, `status`) VALUES
(8, 'Hãy thực hiện những điều mà bạn thích để không bị cản trở giữa việc học và việc làm cùng lúc nếu cảm thấy tốt cần làm thêm', 10, 14, '2024-11-30 10:36:13', '2024-11-30 10:36:13', 8, '2024-12-01', '2024-12-02', 'In Progress'),
(9, 'Hãy làm giúp tôi phần này', 10, 15, '2024-12-17 18:24:30', '2024-12-17 18:24:30', 12, '2024-12-18', '2024-12-19', 'In Progress'),
(10, 'Hãy chỉnh sửa form lại giúp tôi', 10, 16, '2024-12-17 18:58:40', '2024-12-17 18:58:40', 13, '2024-12-18', '2024-12-19', 'In Progress');

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `c_html` text DEFAULT NULL,
  `c_css` text DEFAULT NULL,
  `c_javascript` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `user_id`, `name`, `description`, `image`, `c_html`, `c_css`, `c_javascript`, `link`, `created_at`, `updated_at`) VALUES
(2, 3, 'Login Form Validation in HTML CSS & JavaScript', 'Form Validation in HTML means to check that the user’s entered credential – Email, Username, Password is valid and correct or not. User will not get access to the restricted page until he/she entered a valid email and password. And, Shake Effect in this Login Form means when the user clicks on the login button without entering their email and password then the input boxes shake to inform the user that these fields can’t be blank.', '1728399990_Login-Form-Validation-with-Shake-Effect.jpg', '<p>&lt;div class=&quot;wrapper&quot;&gt;</p>\n\n<p>&lt;header&gt;Login Form&lt;/header&gt;</p>\n\n<p>&lt;form action=&quot;#&quot;&gt;</p>\n\n<p>&lt;div class=&quot;field email&quot;&gt;</p>\n\n<p>&lt;div class=&quot;input-area&quot;&gt;</p>\n\n<p>&lt;input type=&quot;text&quot; placeholder=&quot;Email Address&quot;&gt;</p>\n\n<p>&lt;i class=&quot;icon fas fa-envelope&quot;&gt;&lt;/i&gt;</p>\n\n<p>&lt;i class=&quot;error error-icon fas fa-exclamation-circle&quot;&gt;&lt;/i&gt;</p>\n\n<p>&lt;/div&gt;</p>\n\n<p>&lt;div class=&quot;error error-txt&quot;&gt;Email can&#39;t be blank&lt;/div&gt;</p>\n\n<p>&lt;/div&gt;</p>\n\n<p>&lt;div class=&quot;field password&quot;&gt;</p>\n\n<p>&lt;div class=&quot;input-area&quot;&gt;</p>\n\n<p>&lt;input type=&quot;password&quot; placeholder=&quot;Password&quot;&gt;</p>\n\n<p>&lt;i class=&quot;icon fas fa-lock&quot;&gt;&lt;/i&gt;</p>\n\n<p>&lt;i class=&quot;error error-icon fas fa-exclamation-circle&quot;&gt;&lt;/i&gt;</p>\n\n<p>&lt;/div&gt;</p>\n\n<p>&lt;div class=&quot;error error-txt&quot;&gt;Password can&#39;t be blank&lt;/div&gt;</p>\n\n<p>&lt;/div&gt;</p>\n\n<p>&lt;div class=&quot;pass-txt&quot;&gt;&lt;a href=&quot;#&quot;&gt;Forgot password?&lt;/a&gt;&lt;/div&gt;</p>\n\n<p>&lt;input type=&quot;submit&quot; value=&quot;Login&quot;&gt;</p>\n\n<p>&lt;/form&gt;</p>\n\n<p>&lt;div class=&quot;sign-txt&quot;&gt;Not yet member? &lt;a href=&quot;#&quot;&gt;Signup now&lt;/a&gt;&lt;/div&gt;</p>\n\n<p>&lt;/div&gt;</p>', '<pre>\r\n@import url(&#39;https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap&#39;);\r\n*{\r\n  margin: 0;\r\n  padding: 0;\r\n  box-sizing: border-box;\r\n  font-family: &quot;Poppins&quot;, sans-serif;\r\n}\r\nbody{\r\n  width: 100%;\r\n  height: 100vh;\r\n  display: flex;\r\n  align-items: center;\r\n  justify-content: center;\r\n  background: #5372F0;\r\n}\r\n::selection{\r\n  color: #fff;\r\n  background: #5372F0;\r\n}\r\n.wrapper{\r\n  width: 380px;\r\n  padding: 40px 30px 50px 30px;\r\n  background: #fff;\r\n  border-radius: 5px;\r\n  text-align: center;\r\n  box-shadow: 10px 10px 15px rgba(0,0,0,0.1);\r\n}\r\n.wrapper header{\r\n  font-size: 35px;\r\n  font-weight: 600;\r\n}\r\n.wrapper form{\r\n  margin: 40px 0;\r\n}\r\nform .field{\r\n  width: 100%;\r\n  margin-bottom: 20px;\r\n}\r\nform .field.shake{\r\n  animation: shake 0.3s ease-in-out;\r\n}\r\n@keyframes shake {\r\n  0%, 100%{\r\n    margin-left: 0px;\r\n  }\r\n  20%, 80%{\r\n    margin-left: -12px;\r\n  }\r\n  40%, 60%{\r\n    margin-left: 12px;\r\n  }\r\n}\r\nform .field .input-area{\r\n  height: 50px;\r\n  width: 100%;\r\n  position: relative;\r\n}\r\nform input{\r\n  width: 100%;\r\n  height: 100%;\r\n  outline: none;\r\n  padding: 0 45px;\r\n  font-size: 18px;\r\n  background: none;\r\n  caret-color: #5372F0;\r\n  border-radius: 5px;\r\n  border: 1px solid #bfbfbf;\r\n  border-bottom-width: 2px;\r\n  transition: all 0.2s ease;\r\n}\r\nform .field input:focus,\r\nform .field.valid input{\r\n  border-color: #5372F0;\r\n}\r\nform .field.shake input,\r\nform .field.error input{\r\n  border-color: #dc3545;\r\n}\r\n.field .input-area i{\r\n  position: absolute;\r\n  top: 50%;\r\n  font-size: 18px;\r\n  pointer-events: none;\r\n  transform: translateY(-50%);\r\n}\r\n.input-area .icon{\r\n  left: 15px;\r\n  color: #bfbfbf;\r\n  transition: color 0.2s ease;\r\n}\r\n.input-area .error-icon{\r\n  right: 15px;\r\n  color: #dc3545;\r\n}\r\nform input:focus ~ .icon,\r\nform .field.valid .icon{\r\n  color: #5372F0;\r\n}\r\nform .field.shake input:focus ~ .icon,\r\nform .field.error input:focus ~ .icon{\r\n  color: #bfbfbf;\r\n}\r\nform input::placeholder{\r\n  color: #bfbfbf;\r\n  font-size: 17px;\r\n}\r\nform .field .error-txt{\r\n  color: #dc3545;\r\n  text-align: left;\r\n  margin-top: 5px;\r\n}\r\nform .field .error{\r\n  display: none;\r\n}\r\nform .field.shake .error,\r\nform .field.error .error{\r\n  display: block;\r\n}\r\nform .pass-txt{\r\n  text-align: left;\r\n  margin-top: -10px;\r\n}\r\n.wrapper a{\r\n  color: #5372F0;\r\n  text-decoration: none;\r\n}\r\n.wrapper a:hover{\r\n  text-decoration: underline;\r\n}\r\nform input[type=&quot;submit&quot;]{\r\n  height: 50px;\r\n  margin-top: 30px;\r\n  color: #fff;\r\n  padding: 0;\r\n  border: none;\r\n  background: #5372F0;\r\n  cursor: pointer;\r\n  border-bottom: 2px solid rgba(0,0,0,0.1);\r\n  transition: all 0.3s ease;\r\n}\r\nform input[type=&quot;submit&quot;]:hover{\r\n  background: #2c52ed;\r\n}</pre>', '<pre>\r\nconst form = document.querySelector(&quot;form&quot;);\r\neField = form.querySelector(&quot;.email&quot;),\r\neInput = eField.querySelector(&quot;input&quot;),\r\npField = form.querySelector(&quot;.password&quot;),\r\npInput = pField.querySelector(&quot;input&quot;);\r\n\r\nform.onsubmit = (e)=&gt;{\r\n  e.preventDefault(); //preventing from form submitting\r\n  //if email and password is blank then add shake class in it else call specified function\r\n  (eInput.value == &quot;&quot;) ? eField.classList.add(&quot;shake&quot;, &quot;error&quot;) : checkEmail();\r\n  (pInput.value == &quot;&quot;) ? pField.classList.add(&quot;shake&quot;, &quot;error&quot;) : checkPass();\r\n\r\n  setTimeout(()=&gt;{ //remove shake class after 500ms\r\n    eField.classList.remove(&quot;shake&quot;);\r\n    pField.classList.remove(&quot;shake&quot;);\r\n  }, 500);\r\n\r\n  eInput.onkeyup = ()=&gt;{checkEmail();} //calling checkEmail function on email input keyup\r\n  pInput.onkeyup = ()=&gt;{checkPass();} //calling checkPassword function on pass input keyup\r\n\r\n  function checkEmail(){ //checkEmail function\r\n    let pattern = /^[^ ]+@[^ ]+\\.[a-z]{2,3}$/; //pattern for validate email\r\n    if(!eInput.value.match(pattern)){ //if pattern not matched then add error and remove valid class\r\n      eField.classList.add(&quot;error&quot;);\r\n      eField.classList.remove(&quot;valid&quot;);\r\n      let errorTxt = eField.querySelector(&quot;.error-txt&quot;);\r\n      //if email value is not empty then show please enter valid email else show Email can&#39;t be blank\r\n      (eInput.value != &quot;&quot;) ? errorTxt.innerText = &quot;Enter a valid email address&quot; : errorTxt.innerText = &quot;Email can&#39;t be blank&quot;;\r\n    }else{ //if pattern matched then remove error and add valid class\r\n      eField.classList.remove(&quot;error&quot;);\r\n      eField.classList.add(&quot;valid&quot;);\r\n    }\r\n  }\r\n\r\n  function checkPass(){ //checkPass function\r\n    if(pInput.value == &quot;&quot;){ //if pass is empty then add error and remove valid class\r\n      pField.classList.add(&quot;error&quot;);\r\n      pField.classList.remove(&quot;valid&quot;);\r\n    }else{ //if pass is empty then remove error and add valid class\r\n      pField.classList.remove(&quot;error&quot;);\r\n      pField.classList.add(&quot;valid&quot;);\r\n    }\r\n  }\r\n\r\n  //if eField and pField doesn&#39;t contains error class that mean user filled details properly\r\n  if(!eField.classList.contains(&quot;error&quot;) &amp;&amp; !pField.classList.contains(&quot;error&quot;)){\r\n    window.location.href = form.getAttribute(&quot;action&quot;); //redirecting user to the specified url which is inside action attribute of form tag\r\n  }\r\n}</pre>', 'https://www.codingnepalweb.com/login-form-validation-in-html-javascript/', '2024-10-08 07:48:03', '2024-10-08 07:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(30) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `title`, `color`, `start`, `end`, `created_at`, `updated_at`) VALUES
(11, 10, 'Hoàn thành toàn bộ tast mới!!!!', '#ff9595', '2024-12-19 00:00:00', '2024-12-20 00:00:00', '2024-12-18 21:20:22', '2024-12-18 21:20:22'),
(12, 10, 'Cuộc hẹn vào lúc 5h', '#bf95ff', '2024-12-19 00:00:00', '2024-12-20 00:00:00', '2024-12-18 21:20:44', '2024-12-18 21:20:44'),
(13, 10, 'Ngày lễ trưởng thành', '#ffba95', '2024-12-19 00:00:00', '2024-12-20 00:00:00', '2024-12-18 21:21:10', '2024-12-18 21:21:10'),
(14, 10, 'Thêm đoạn code mới', '#95ddff', '2024-12-10 00:00:00', '2024-12-11 00:00:00', '2024-12-18 21:21:35', '2024-12-18 21:21:35'),
(15, 10, 'Build code vào thứ 7', '#95f8ff', '2024-12-11 00:00:00', '2024-12-12 00:00:00', '2024-12-18 21:21:56', '2024-12-18 21:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `current_date` date NOT NULL,
  `breakfast` int(11) NOT NULL,
  `lunch` int(11) NOT NULL,
  `afternoon_meal` int(11) NOT NULL,
  `dinner` int(11) NOT NULL,
  `coffee` int(11) NOT NULL,
  `fuel` int(11) NOT NULL,
  `sports` int(11) NOT NULL,
  `e_wallet` int(11) NOT NULL,
  `other_shopping` int(11) NOT NULL,
  `other_expenses` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `total_spending_today` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `user_id`, `current_date`, `breakfast`, `lunch`, `afternoon_meal`, `dinner`, `coffee`, `fuel`, `sports`, `e_wallet`, `other_shopping`, `other_expenses`, `rent`, `total_spending_today`, `created_at`, `updated_at`) VALUES
(18, 10, '2024-12-19', 10000, 10000, 10000, 10000, 10000, 10000, 10000, 10000, 10000, 10000, 10000, 110000, '2024-12-18 21:45:21', '2024-12-18 21:45:21'),
(19, 10, '2024-12-20', 0, 0, 0, 0, 0, 20000, 0, 0, 10000, 0, 0, 30000, '2024-12-20 00:49:03', '2024-12-20 00:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friendships`
--

CREATE TABLE `friendships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `friend_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friendships`
--

INSERT INTO `friendships` (`id`, `user_id`, `friend_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 10, 3, 'accepted', '2024-11-10 19:46:50', '2024-11-10 19:47:35'),
(4, 11, 10, 'accepted', '2024-11-12 07:35:30', '2024-11-12 07:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `future_directions`
--

CREATE TABLE `future_directions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'One-Asia', '2024-11-17 07:42:09', '2024-11-17 07:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `group_user`
--

CREATE TABLE `group_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 10, 'Hãy thử sức mình nếu bạn có thể tự làm được có nghĩa bạn đã hiểu hết phần quan trong của nó', '2024-11-07 07:56:43', '2024-11-07 07:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `level` tinyint(4) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assigned_to` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `user_id`, `subject`, `key`, `level`, `description`, `reference`, `start_date`, `end_date`, `category_id`, `status`, `created_at`, `updated_at`, `group_id`, `assigned_to`) VALUES
(16, 10, 'Javascript Form Validation', 'IS_708', 0, '<p>Before <a href=\"https://www.javascripttutorial.net/javascript-dom/javascript-form/\">submitting data to the server</a>, you should check the data in the web browser to ensure that the submitted data is in the correct format.</p><p>To provide quick feedback, you can use JavaScript to validate data. This is called client-side validation.</p><p>If you don’t carry the client-side validation, it may cause a bad user experience. In this case, you may feel a noticeable delay because it takes time for the form data to transfer between the web browsers and the server.</p><p>Unlike the client-side validation that performs in the web browser, the server-side validation is performed on the server. It’s critical always to implement the server-side validation.</p><p>The reason is that client-side validation is quite easy to bypass. Malicious users can disable JavaScript and submit bad data to your server.</p><p>In this tutorial, you’re going to focus on the client-side validation only.</p>', NULL, '2024-12-18', '2024-12-19', 34, 0, '2024-12-17 18:57:56', '2024-12-17 18:57:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `issue_images`
--

CREATE TABLE `issue_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `issue_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issue_images`
--

INSERT INTO `issue_images` (`id`, `user_id`, `issue_id`, `image_path`, `created_at`, `updated_at`) VALUES
(7, 10, 14, '674b4471e4f7a_8e49404fa200e86df9bbf6e7f8c2490bf70e5a87b6b97b80676d41bf425765bc.jpg', '2024-11-30 09:59:30', '2024-11-30 09:59:30'),
(8, 10, 14, '674b447204607_a6fd9f3d527bdd24999ed86f2941976c435e6bb9e2d6f488f50f0a0f562b6a29.png', '2024-11-30 09:59:30', '2024-11-30 09:59:30'),
(9, 10, 15, '6762241ea53ef_9ab90d98a4b7074c20ee08fb2ded361a46528e0a04cb5eaccf87b70e1edf039d.jpg', '2024-12-17 18:23:42', '2024-12-17 18:23:42'),
(10, 10, 16, '67622c2498346_a1f7bfdc01fece4592b7ac50952326b61b8e96c5c862381b98c5c667ea57a0ac.png', '2024-12-17 18:57:56', '2024-12-17 18:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `issue_users`
--

CREATE TABLE `issue_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issue_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issue_users`
--

INSERT INTO `issue_users` (`id`, `issue_id`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 14, 8, '2024-11-30 10:36:13', '2024-11-30 10:36:13'),
(8, 15, 12, '2024-12-17 18:24:30', '2024-12-17 18:24:30'),
(9, 16, 13, '2024-12-17 18:58:40', '2024-12-17 18:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `javascripts`
--

CREATE TABLE `javascripts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `code` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `javascripts`
--

INSERT INTO `javascripts` (`id`, `user_id`, `category_id`, `name`, `description`, `image`, `code`, `link`, `created_at`, `updated_at`) VALUES
(1, 3, 27, 'Khởi tạo project với Vite', '<pre>\r\n&lt;template&gt;\r\n    &lt;div&gt;\r\n      &lt;h1&gt;{{ message }}&lt;/h1&gt;\r\n      &lt;button @click=&quot;updateMessage&quot;&gt;Click me&lt;/button&gt;\r\n    &lt;/div&gt;\r\n&lt;/template&gt;\r\n&lt;script&gt;\r\nimport { ref } from &#39;vue&#39;;\r\nexport default {\r\nname: &#39;Hello&#39;,\r\nsetup() {\r\n    // Define a reactive variable\r\n    const message = ref(&#39;Hello World!&#39;);\r\n    // Function to update the message when button is clicked\r\n    const updateMessage = () =&gt; {\r\n    message.value = &#39;You clicked the button!&#39;;\r\n    };\r\n    // Return variables and functions to use in the template\r\n    return {\r\n    message,\r\n    updateMessage\r\n    };\r\n}\r\n};\r\n&lt;/script&gt;\r\n\r\n\r\n&lt;style scoped&gt;\r\nh1 {\r\ncolor: blue;\r\n}\r\n\r\n\r\nbutton {\r\n\r\n    padding: 10px 20px;\r\n\r\n    background-color: #42b983;\r\n\r\n    border: none;\r\n\r\n    color: white;\r\n\r\n    cursor: pointer;\r\n\r\n}\r\n\r\n\r\nbutton:hover {\r\n\r\n    background-color: #347d39;\r\n\r\n}\r\n\r\n&lt;/style&gt;</pre>', '1728637351_vite-vue-3-tailwind.png', '<pre>\r\n1. npm init @vitejs/app my-project\r\n\r\n2. cd my-project\r\n\r\n3. npm install\r\n\r\n4. npm run dev\r\n\r\n5. Cấu tr&uacute;c\r\n├── node_modules\r\n\r\n├── package-lock.json\r\n\r\n├── package.json\r\n\r\n├── public\r\n\r\n    │ └── favicon.ico\r\n\r\n├── src │\r\n\r\n    ├── App.vue │\r\n\r\n    ├── assets │\r\n\r\n          │ └── logo.png │\r\n\r\n    ├── components │\r\n\r\n    │ └── HelloWorld.vue\r\n\r\n    │ └── main.ts\r\n\r\n├── tsconfig.json\r\n\r\n└── vite.config.ts</pre>', 'https://viblo.asia/p/cai-dat-project-vue-voi-vue-3-vite-typescript-tailwind-RnB5pjOwZPG', '2024-10-11 02:02:31', '2024-10-11 02:02:31'),
(2, 3, 28, 'cấu trúc chuẩn reactjs', '<pre>\r\n// App.js\r\nimport React from &#39;react&#39;;\r\nimport Hello from &#39;./Hello&#39;;\r\n\r\nconst App = () =&gt; {\r\n  return (\r\n    &lt;div&gt;\r\n      &lt;Hello /&gt;\r\n    &lt;/div&gt;\r\n  );\r\n};\r\nexport default App;</pre>', '1728640845_techtalk-reactjs-768x432.png', '<pre>\r\n1. kiểm tra version node</pre>\r\n\r\n<p>2. Tải NVM để kiểm tra list node&nbsp;</p>\r\n\r\n<p>3. Set up m&ocirc;i trường</p>\r\n\r\n<pre>\r\n<code>npm install -g create-react-app</code></pre>\r\n\r\n<pre>\r\n<code>create-react-app my-app</code></pre>\r\n\r\n<pre>\r\n<code>cd my-app</code></pre>\r\n\r\n<pre>\r\n<code>npm start</code></pre>\r\n\r\n<p>my-react-app/<br />\r\n│<br />\r\n├── public/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Chứa c&aacute;c file tĩnh của dự &aacute;n<br />\r\n│ &nbsp; ├── index.html &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # File HTML gốc của ứng dụng<br />\r\n│ &nbsp; └── favicon.ico &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Biểu tượng trang web<br />\r\n│<br />\r\n├── src/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # Nơi chứa m&atilde; nguồn của ứng dụng<br />\r\n│ &nbsp; ├── assets/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Chứa c&aacute;c file tĩnh như h&igrave;nh ảnh, fonts, CSS...<br />\r\n│ &nbsp; │ &nbsp; └── images/<br />\r\n│ &nbsp; │ &nbsp; &nbsp; &nbsp; └── logo.png<br />\r\n│ &nbsp; ├── components/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Chứa c&aacute;c component t&aacute;i sử dụng<br />\r\n│ &nbsp; │ &nbsp; ├── Header.js &nbsp; &nbsp; &nbsp; &nbsp;# V&iacute; dụ về một component Header<br />\r\n│ &nbsp; │ &nbsp; └── Footer.js &nbsp; &nbsp; &nbsp; &nbsp;# V&iacute; dụ về một component Footer<br />\r\n│ &nbsp; ├── hooks/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # Chứa c&aacute;c custom hooks (nếu c&oacute;)<br />\r\n│ &nbsp; │ &nbsp; └── useAuth.js &nbsp; &nbsp; &nbsp; # V&iacute; dụ về một custom hook cho x&aacute;c thực<br />\r\n│ &nbsp; ├── pages/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # Chứa c&aacute;c trang ch&iacute;nh của ứng dụng<br />\r\n│ &nbsp; │ &nbsp; ├── Home.js &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Trang chủ<br />\r\n│ &nbsp; │ &nbsp; └── About.js &nbsp; &nbsp; &nbsp; &nbsp; # Trang giới thiệu<br />\r\n│ &nbsp; ├── services/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Chứa c&aacute;c file tương t&aacute;c với API<br />\r\n│ &nbsp; │ &nbsp; └── api.js &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # V&iacute; dụ về một file gọi API<br />\r\n│ &nbsp; ├── styles/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Chứa c&aacute;c file style chung như CSS hoặc SCSS<br />\r\n│ &nbsp; │ &nbsp; └── global.css &nbsp; &nbsp; &nbsp; # CSS to&agrave;n cục<br />\r\n│ &nbsp; ├── App.js &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # Component gốc của ứng dụng<br />\r\n│ &nbsp; ├── index.js &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # Điểm khởi đầu của ứng dụng<br />\r\n│ &nbsp; └── setupTests.js &nbsp; &nbsp; &nbsp; &nbsp;# Thiết lập testing (nếu cần)<br />\r\n│<br />\r\n├── .gitignore &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # File để bỏ qua c&aacute;c file kh&ocirc;ng cần commit v&agrave;o git<br />\r\n├── package.json &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # File quản l&yacute; c&aacute;c dependencies của dự &aacute;n<br />\r\n└── README.md &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Th&ocirc;ng tin về dự &aacute;n<br />\r\n&nbsp;</p>', 'https://nodemy.vn/tao-du-an-voi-create-react-app-cuc-ky-don-gian-react-js/', '2024-10-11 03:00:45', '2024-10-11 03:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'vn', '2024-10-04 16:48:50', '2024-10-04 16:48:50'),
(2, 'en', '2024-10-04 16:48:50', '2024-10-04 16:48:50'),
(3, 'ja', '2024-10-04 16:48:50', '2024-10-04 16:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `learn_mores`
--

CREATE TABLE `learn_mores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `vocabulary` varchar(255) NOT NULL,
  `meaning_of_vocabulary` varchar(255) NOT NULL,
  `example` varchar(255) NOT NULL,
  `meaning_of_example` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learn_mores`
--

INSERT INTO `learn_mores` (`id`, `user_id`, `language_id`, `vocabulary`, `meaning_of_vocabulary`, `example`, `meaning_of_example`, `created_at`, `updated_at`, `status`) VALUES
(1, 3, 3, 'わたし', 'Tôi', 'わたしは　Kietです。', 'Tôi là Kiệt.', '2024-10-19 23:07:03', '2024-10-19 23:07:03', 1),
(2, 3, 3, 'あなた', 'Bạn', 'あなたは　がくせいですか。', 'Bạn có phải là sinh viên không?', '2024-10-19 23:22:38', '2024-10-19 23:22:38', 1),
(3, 3, 3, 'あのひと', 'Người kia', 'あのひとは　どなたですか。', 'Người kia là ai vậy?', '2024-10-19 23:26:22', '2024-10-19 23:26:22', 1),
(4, 3, 3, 'せんせい', 'giáo viên', 'Thuan さんは　せんせいじゃ　ありません', 'Thuận không phải là giáo viên', '2024-10-19 23:42:39', '2024-10-19 23:42:39', 1),
(5, 3, 3, 'がくせい', 'Sinh viên', 'Thuanさんは　がくせいですか。', 'Thuận có phải là sinh viên không?', '2024-10-19 23:44:45', '2024-10-19 23:44:45', 1),
(6, 3, 3, 'かいしゃいん', 'Nhân viên công ty', 'Thuanさんは katsuraのかいしゃいんですか。', 'Thuận có phải là nhân viên công ty katsura không', '2024-10-19 23:47:44', '2024-10-19 23:49:34', 1),
(7, 3, 3, 'ぎんこういん', 'Nhân viên ngân hàng', 'Thuanさんは　ぎんこういんじゃありません。', 'Thuận không phải là nhân viên ngân hàng', '2024-10-19 23:52:15', '2024-10-19 23:52:49', 1),
(8, 3, 3, 'いしゃ', 'Bác sĩ', 'Thuanさんは　いしゃです。', 'Thuận là bác sĩ', '2024-10-19 23:54:38', '2024-10-19 23:54:38', 1),
(9, 3, 3, 'けんきゅうしゃ', 'Nhà nghiên cứu', 'Thuanさんは　けんきゅうしゃじゃありません', 'Thuận không phải là nhà nghiên cứu', '2024-10-20 00:00:31', '2024-10-20 00:00:31', 1),
(10, 3, 3, 'だいがく', 'Đại học', 'わたしは　Hutechの大学が　そつぎょします。', 'Tôi tốt nghiệp trường đại học hutech', '2024-10-20 00:03:57', '2024-10-20 00:07:21', 1),
(11, 3, 3, 'びょういん', 'Bệnh viện', 'ABCの病院はどこですか。', 'Bệnh viện ABC ở đâu vậy?', '2024-10-20 00:09:51', '2024-10-20 00:09:51', 1),
(12, 3, 3, 'さい', 'Tuổi', 'Thuanさんは　なんさいですか。', 'Thuận bao nhiêu tuổi?', '2024-10-20 00:11:21', '2024-10-20 00:11:21', 1),
(13, 3, 3, 'はじめ', 'Bắt đầu', 'はじめまして', 'Rất hân hạnh được gặp.', '2024-10-20 00:12:47', '2024-10-20 00:12:47', 1),
(14, 3, 3, 'から　きました。', 'Tôi đến từ', 'Ben Treから　きました', 'Tôi đến từ Bến Tre.', '2024-10-20 00:14:33', '2024-10-20 00:14:33', 1),
(15, 3, 3, 'どうぞ', 'Xin mời', 'どうぞ　よろしく　おねがいします', 'Rất mong được sự giúp đỡ từ anh chị', '2024-10-20 00:28:14', '2024-10-20 00:28:14', 1),
(16, 3, 3, 'おなまえ', 'Tên', 'しっれいですが、おなまえは？', 'xin lỗi tên bạn là gi?', '2024-10-20 00:31:55', '2024-10-20 00:31:55', 1),
(17, 3, 2, 'kindergarten', 'mẫu giáo', 'kindergarten is where kids learn to behave in class', 'Mẫu giáo là nơi con học về cách hành sử trong lớp', '2024-10-20 07:15:08', '2024-10-20 07:15:08', 1),
(18, 3, 2, 'primary', 'tiểu học', 'In primary school, students learn basic maths', 'Ở trường tiểu học, học sinh được học về toán cơ bản.', '2024-10-20 07:18:04', '2024-10-20 07:18:04', 1),
(19, 3, 2, 'secondary', 'Trung học cơ sở', 'I met wife when I was in secondary school', 'Tôi đã gặp vợ tôi khi còn học trung học cơ sở', '2024-10-20 07:22:58', '2024-10-20 07:22:58', 1),
(20, 3, 3, 'これ', 'cái này', 'これは　ノートですか。', 'cái này là quyển vở đúng không?', '2024-10-22 06:50:42', '2024-10-22 06:50:42', 2),
(21, 3, 3, 'それ', 'cái đó', 'それは　トイレですか。', 'cái đó là nhà vệ sinh', '2024-10-22 06:51:45', '2024-10-22 06:51:45', 2),
(22, 3, 3, 'あれ', 'cái kia', 'あれは　えんびつですか。', 'cái kia là bút chì đúng không?', '2024-10-22 06:53:15', '2024-10-22 06:53:15', 2),
(23, 3, 3, 'この', 'này', 'この本は　私のです。', 'quyển sách này là của tôi.', '2024-10-22 06:55:10', '2024-10-22 06:55:10', 2),
(24, 3, 3, 'あの', 'kia', 'あのひとは　だれですか。', 'người kia là ai vậy?', '2024-10-22 06:57:01', '2024-10-22 06:57:01', 2),
(25, 3, 3, 'ほん', 'quyển sách', 'この本は　Thuanさんのです。', 'quyển sách này là của Thuận.', '2024-10-22 06:59:15', '2024-10-22 06:59:15', 2),
(26, 3, 3, 'じしょ', 'từ điển', 'これは　日本語のじしょです。', 'đây là từ điển nói về tiếng nhật đúng không?', '2024-10-22 07:02:24', '2024-10-22 07:02:24', 2),
(27, 3, 3, 'ざっし', 'tập chí', 'それは　ざっしですか。', 'cái đó là tập chí đúng không?', '2024-10-22 07:06:10', '2024-10-22 07:06:10', 2),
(28, 3, 3, 'しんぶん', 'báo', 'これは　新聞ですか。', 'cái này là báo đúng không?', '2024-10-22 07:07:46', '2024-10-22 07:07:46', 2),
(29, 3, 3, 'てちょう', 'sổ tay', 'このてちょうは　Thuanのです。', 'sổ tay này là của thuận.', '2024-10-22 07:10:51', '2024-10-22 07:10:51', 2),
(30, 3, 3, 'めしい', 'danh thiếp', 'このめしは　わたしのです。', 'danh thiếp này là của tôi.', '2024-10-22 07:12:09', '2024-10-22 07:12:09', 2),
(31, 3, 3, 'カード', 'thẻ(tín dụng)', 'これは　誰のカードですか。', 'cái này là thẻ của ai vậy?', '2024-10-22 07:16:08', '2024-10-22 07:16:08', 2),
(32, 3, 3, 'かぎ', 'chìa khóa', 'ぞれは　だれのかぎですか。', 'cái đó là chia khóa của ai vậy', '2024-10-22 07:17:33', '2024-10-22 07:17:33', 2),
(33, 3, 3, 'とけい', 'đồng hồ', 'これは　わたしのとけいです。', 'đây là đồng hồ của tôi', '2024-10-22 07:20:59', '2024-10-22 07:20:59', 2),
(34, 3, 3, 'かさ', 'cây dù', 'この傘は　だれですか。', 'Cây dù này của ai vậy?', '2024-10-22 07:22:47', '2024-10-22 07:22:47', 2),
(35, 3, 3, 'かさ', 'cây dù', 'この傘は　だれですか。', 'Cây dù này của ai vậy?', '2024-10-22 07:22:47', '2024-10-22 07:22:47', 2),
(36, 3, 3, 'かばん', 'cái cặp', 'このかばんは　わたしのです。', 'cái cặp này là của tôi.', '2024-10-22 07:24:14', '2024-10-22 07:24:14', 2),
(37, 3, 3, 'テレビ', 'ti vi', 'あれは　テレビですか', 'cái kia là ti vi đúng không?', '2024-10-22 07:25:28', '2024-10-22 07:25:28', 2),
(38, 3, 3, 'カメラ', 'máy ảnh', 'このカメラは　だれですか。', 'máy ảnh này của ai vậy?', '2024-10-22 07:27:27', '2024-10-22 07:27:27', 2),
(39, 3, 3, 'くるま', 'xe hơi', 'このくるまは　あなたのですか。', 'xe hơi này là của anh chị đúng không?', '2024-10-22 07:29:44', '2024-10-22 07:29:44', 2),
(40, 3, 3, 'つくえ', 'cái bàn', 'それは　つくえですか。', 'cái đó là cái bàn đúng không?', '2024-10-22 07:31:13', '2024-10-22 07:31:13', 2),
(41, 3, 3, 'おみやげ', 'món quà', 'これは　わたしのおみやげです。', 'đây là món quà của tôi?', '2024-10-22 07:35:14', '2024-10-22 07:35:14', 2),
(42, 3, 3, 'えいご', 'tiếng anh', 'これは　えいごのじしょです。', 'đây là từ điển tiếng anh.', '2024-10-22 07:37:34', '2024-10-22 07:37:53', 2),
(43, 3, 3, 'にほんご', 'tiếng nhật', 'これは　日本語のじしょです', 'đây là từ điển tiếng nhật.', '2024-10-22 07:38:59', '2024-10-22 07:38:59', 2),
(44, 3, 3, 'あのう', 'à, ờ', 'あのう、日本語が　わかります。', 'à, tôi hiểu tiếng nhật.', '2024-10-22 07:41:21', '2024-10-22 07:41:21', 2),
(45, 3, 3, 'そうです。', 'đúng vậy', 'はい、そうです。', 'vâng, đúng vậy.', '2024-10-22 07:43:11', '2024-10-22 07:43:11', 2),
(46, 3, 3, 'ちがいます。', 'Không phải', 'いいえ、ちがいます。', 'không, không phải.', '2024-10-22 07:44:22', '2024-10-22 07:44:22', 2),
(47, 3, 3, 'これから', 'từ nay', 'これから、おせわに　なります。', 'Từ nay tôi rất mong được sự giúp đỡ từ anh chị.', '2024-10-22 07:50:20', '2024-10-22 07:50:20', 2),
(48, 3, 3, 'こちらこそ', 'chính tôi mới', 'こちらこそ　どうよ　よろしく　おねがいします。', 'Chính tôi mới là người mong được sự giúp đỡ từ anh chị', '2024-10-22 07:52:23', '2024-10-22 07:52:23', 2),
(49, 3, 3, 'ここ', 'chổ này.', 'ここです。', 'chổ này', '2024-10-22 08:40:37', '2024-10-22 08:40:37', 3),
(50, 3, 3, 'そこ', 'chỗ đó', 'そこ', 'chỗ đó', '2024-10-22 08:41:29', '2024-10-22 08:41:29', 3),
(51, 3, 3, 'あそこ', 'chỗ kia', 'あそこです。', 'chỗ kia', '2024-10-22 08:42:12', '2024-10-22 08:42:12', 3),
(52, 3, 3, 'きょうしつ', 'phòng học', 'きょうしつは　どこですか。', 'phòng học ở đâu vậy.', '2024-10-22 08:43:45', '2024-10-22 08:43:45', 3),
(53, 3, 3, 'しょくど', 'nhà ăn', 'しょくどは　あそこです。', 'nhà ăn ở đằng kia.', '2024-10-22 08:50:07', '2024-10-22 08:50:07', 3),
(54, 3, 3, 'じむしょ', 'văn phòng', 'じむしょは　どこですか。', 'văn phòng ở đâu vậy?', '2024-10-22 08:51:11', '2024-10-22 08:51:11', 3),
(55, 3, 3, 'かいぎしつ', 'phòng họp', 'かいぎしつは　２かいです。', 'phòng họp ở tầng 2.', '2024-10-22 08:53:13', '2024-10-22 08:53:13', 3),
(56, 3, 3, 'うけつけ', 'hành lang', 'たかやまさんは　うけつけです。', 'ông takayama đang ở hành lang.', '2024-10-22 08:55:43', '2024-10-22 08:55:43', 3),
(57, 3, 3, 'かいだん', 'cầu thang', 'かいだんは　どこですか。', 'cầu thang nằm ở đâu vậy?', '2024-10-22 08:58:30', '2024-10-22 08:58:30', 3),
(58, 3, 3, 'エレベーター', 'thang máy', 'エレベーターは　どこですか。', 'thang máy ở đâu vậy?', '2024-10-22 08:59:39', '2024-10-22 08:59:39', 3),
(59, 3, 3, 'じどうはんばいき', 'máy bán hàng tự động', 'じどうはんばいきは　どこですか。', 'máy bán hàng tự động nằm ở đâu vậy?', '2024-10-22 09:00:52', '2024-10-22 09:00:52', 3),
(60, 3, 3, 'でんわ', 'điện thoại', 'でんわは　２かいです。', 'điện thoại ở tầng 2', '2024-10-22 09:02:22', '2024-10-22 09:02:22', 3),
(61, 3, 3, 'おくに', 'nước/ quốc gia', 'おくには　どちらですか。', 'anh chị là người nước nào?', '2024-10-22 09:04:02', '2024-10-22 09:04:02', 3),
(62, 3, 3, 'くつ', 'giày', 'これは　くつのです。', 'đây là giày của tôi', '2024-10-22 09:06:51', '2024-10-22 09:07:18', 3),
(63, 3, 3, 'ネクタイ', 'cà vạt', 'これは　にほんのネクタイです。', 'đây là cà vạt của tôi', '2024-10-22 09:08:43', '2024-10-22 09:08:43', 3),
(64, 3, 3, 'ネクタイ', 'cà vạt', 'これは　にほんのネクタイです。', 'đây là cà vạt của nhật.', '2024-10-22 09:08:44', '2024-10-22 09:09:05', 3),
(65, 3, 3, 'うりば', 'quầy/lễ tân', 'うりばは　どこですか。', 'quầy bán ở đâu vậy', '2024-10-22 09:11:29', '2024-10-22 09:11:29', 3),
(66, 3, 3, 'ちか', 'tầng hầm', 'ちかです。', 'ở tầng hầm.', '2024-10-22 09:12:36', '2024-10-22 09:12:36', 3),
(67, 3, 3, 'いくら', 'bao nhiêu tiền', 'このネクタイは　いくらですか。', 'Cà vạt này bao nhiêu tiền?', '2024-10-22 09:14:33', '2024-10-22 09:14:33', 3),
(68, 3, 3, 'ひゃく', 'trăm', '２ひゃくです。', '200 yên', '2024-10-22 09:16:04', '2024-10-22 09:16:04', 3),
(69, 3, 3, 'せん', 'ngàn', '２せんです。', '2 ngàn yên', '2024-10-22 09:16:41', '2024-10-22 09:16:41', 3),
(70, 3, 3, 'いらっしゃい', 'xin chào', 'いらっしゃいませ。', 'xin chào quý khách.', '2024-10-22 09:18:29', '2024-10-22 09:18:29', 3),
(71, 3, 3, 'をみせて　ください。', 'cho tôi xem', 'このくつを　見せて　ください。', 'hãy cho tôi xem đôi giày đó', '2024-10-22 09:20:28', '2024-10-22 09:20:28', 3),
(72, 3, 3, 'おきます', 'thức dậy', '6時に　おきます。', 'tôi thức dậy vào lúc 6h30.', '2024-10-22 09:40:29', '2024-10-22 09:40:29', 4),
(73, 3, 3, 'ねます', 'ngủ', '22時に　ねます。', 'tôi ngủ vào lúc 22 giờ.', '2024-10-22 09:41:54', '2024-10-22 09:41:54', 4),
(74, 3, 3, 'はたらきます', 'làm việc', '８じから　5時まで　はたらきます。', 'tôi làm việc từ 8h đến 5h.', '2024-10-22 09:46:12', '2024-10-22 09:46:12', 4),
(75, 3, 3, 'やすみます。', 'nghỉ', 'ひるやすみは　１２じからです。', 'nghỉ trưa bắt đầu từ lúc 12h.', '2024-10-22 09:51:43', '2024-10-22 09:51:43', 4),
(76, 3, 3, 'べんきょぅしま', 'học', '４ねんに　にほんごをべんきょうしました。', 'tôi đã học tiếng nhật 4 năm.', '2024-10-22 09:54:48', '2024-10-22 09:54:48', 4),
(77, 3, 3, 'デパート', 'bách hóa', 'デパートは　どこですか。', 'bách hóa ở đâu vậy.', '2024-10-22 09:56:20', '2024-10-22 09:56:20', 4),
(78, 3, 3, 'ぎんこう', 'ngân hàng', 'ぎんこうのやすみは　土曜日と　日曜日です。', 'ngần hàng nghỉ vào thứ 7 và chủ nhật', '2024-10-22 09:59:08', '2024-10-22 09:59:08', 4),
(79, 3, 3, 'ゆうびんきょく', 'bưu điện', 'ゆうびんきょくは　あそこです。', 'Bưu điện ở đằng kia', '2024-10-22 10:00:35', '2024-10-22 10:00:35', 4),
(80, 3, 3, 'としょかん', 'Thư viện', 'としょかんは　どこですか。', 'thư viện ở đâu vậy', '2024-10-22 10:01:35', '2024-10-22 10:01:35', 4),
(81, 3, 3, 'いま', 'bây giờ', '今、3時15分です。', 'bây giờ là 3 giờ 15 phút.', '2024-10-22 10:03:36', '2024-10-22 10:03:36', 4),
(82, 3, 3, 'あさ', 'sáng', '朝、５じに　おきます。', 'sáng tôi thức dậy vào lúc 5h.', '2024-10-23 15:46:57', '2024-10-23 15:46:57', 4),
(83, 3, 3, 'ひる', 'trưa', 'ひる　11時50分に　休みます。', 'buổi trưa tôi nghỉ lúc 11 giờ 50.', '2024-10-23 15:48:36', '2024-10-23 15:48:36', 4),
(84, 3, 3, 'おととい', 'hôm kia', 'おととい　22時に　ねます。', 'hôm kia tôi ngủ vào lúc 22 giờ.', '2024-10-23 15:50:18', '2024-10-23 15:50:18', 4),
(85, 3, 3, 'きのう', 'hôm qua', '昨日　５時に　おきます。', 'hôm qua tôi dậy vào lúc 5h.', '2024-10-23 15:54:15', '2024-10-23 15:54:15', 4),
(86, 3, 3, 'きょう', 'hôm nay', 'きょう　５時に　にほんごを　べんきょぅします。', 'hôm nay tôi học tiếng nhật vào lúc 5 giờ.', '2024-10-23 15:56:54', '2024-10-23 15:56:54', 4),
(87, 3, 3, 'あした', 'Ngày mai', '明日　５じに　英語をべんきょぅします。', 'Ngày mai tôi sẽ học tiếng anh vào lúc 5 giờ.', '2024-10-23 15:59:54', '2024-10-23 15:59:54', 4),
(88, 3, 3, 'けさ', 'sáng nay', 'けさ、５じに　おきます。', 'sáng nay tôi dậy lúc 5 giờ.', '2024-10-23 16:01:21', '2024-10-23 16:01:21', 4),
(89, 3, 3, 'しけん', 'kiểm tra', 'あした、にほんごがしけんです。', 'Ngày mai tôi có bài kiểm tra tiếng nhật.', '2024-10-23 16:03:52', '2024-10-23 16:03:52', 4),
(90, 3, 3, 'かいぎ', 'cuộc họp', 'きょう、１０じに　かいぎです。', 'hôm nay tôi họp vào lúc 10 giờ.', '2024-10-23 16:05:33', '2024-10-23 16:05:33', 4),
(91, 3, 3, 'えいが', 'phim', 'これは　日本語のえいがです。', 'đây là bộ phim của nhật.', '2024-10-23 16:07:23', '2024-10-23 16:07:23', 4),
(92, 3, 3, 'まいあさ', 'mỗi sáng', 'まいあさ、５じに　おきます。', 'mỗi sáng tôi thức dậy vào lúc 5 giờ.', '2024-10-23 16:09:07', '2024-10-23 16:09:07', 4),
(93, 3, 3, 'まいばん', 'mỗi tối', 'まいばん　１１じ　ねます。', 'mỗi tối tôi ngủ vào lúc 11 giờ.', '2024-10-23 16:10:34', '2024-10-23 16:10:34', 4),
(94, 3, 3, 'げつようび', 'thứ 2', 'げつようびは　５じに　おきます。', 'thứ hai tôi sẽ thức dậy vào lúc 5 giờ.', '2024-10-23 16:12:53', '2024-10-23 16:12:53', 4),
(95, 3, 3, 'かようび', 'thứ 3', 'かようびは　８じから　５じまで はたらきます。', 'thứ 3 tôi làm việc từ lúc 8 giờ đến 5 giờ.', '2024-10-23 16:14:50', '2024-10-23 16:15:43', 4),
(96, 3, 3, 'すいようび', 'thứ 4', 'すいようびは　11時に　ねます。', 'thứ 4 tôi ngủ vào lúc 11 giờ.', '2024-10-23 16:17:39', '2024-10-23 16:17:39', 4),
(97, 3, 3, 'もくようび', 'thứ 5', '木曜日に　VungTauへ　いきます。', 'thứ năm tôi đi vũng tàu.', '2024-10-23 16:20:46', '2024-10-23 16:20:46', 4),
(98, 3, 3, 'きんようび', 'thứ 6', '金曜日に　しけんですか。', 'thứ 6 tôi có bài kiểm tra.', '2024-10-23 16:24:19', '2024-10-23 16:24:19', 4),
(99, 3, 3, 'どようび。', 'Thứ 7', 'コンパニのやすみは　土曜日と　日曜日です。', 'ngày nghỉ của công ty là thứ 7 và chủ nhật.', '2024-10-23 16:28:41', '2024-10-23 16:28:41', 4),
(100, 3, 3, 'たいへん', 'vất vả', 'たいへんですね。', 'vất vả quá nhỉ', '2024-10-23 16:30:11', '2024-10-23 16:30:11', 4),
(101, 3, 3, 'いきます', 'đi', 'どこも　いきません', 'Tôi không đi đâu cả.', '2024-10-24 21:52:21', '2024-10-24 21:52:21', 5);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `user_id`, `link`, `created_at`, `updated_at`) VALUES
(2, 10, 'https://www.codingnepalweb.com/login-form-validation-in-html-javascript/', '2024-11-11 09:13:14', '2024-11-11 09:13:14'),
(3, 10, 'https://www.tiktok.com/@user27756734184616/video/7305369874468031745', '2024-12-16 08:28:11', '2024-12-16 08:28:11'),
(5, 10, 'https://www.tiktok.com/@user27756734184616/video/7305407858332486913?_t=8heqVlGjRwN&_r=1', '2024-12-18 23:24:13', '2024-12-18 23:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_25_075929_create_category_tasks_table', 2),
(6, '2024_09_27_052739_create_tasks_table', 3),
(7, '2024_09_27_065849_create_todos_table', 4),
(8, '2024_09_27_070717_create_todos_table', 5),
(9, '2024_09_28_034945_create_salaries_table', 6),
(10, '2024_09_28_043958_add_full_date_to_salaries_table', 7),
(11, '2024_09_28_044432_change_day_column_in_salaries_table', 8),
(12, '2024_09_29_160916_create_expenses_table', 9),
(13, '2024_09_30_014856_create_expenses_table', 10),
(14, '2024_09_30_015212_create_expenses_table', 11),
(15, '2024_09_30_015602_update_expenses_table', 12),
(16, '2024_09_30_073732_create_categories_table', 13),
(17, '2024_10_01_161041_create_events_table', 14),
(18, '2024_10_01_161645_create_events_table', 15),
(19, '2024_10_02_020147_create_issues_table', 16),
(20, '2024_10_02_095154_create_comments_table', 16),
(21, '2024_10_03_071019_create_issue_users_table', 16),
(22, '2024_10_03_100501_create_problem_processes_table', 16),
(23, '2024_10_04_090939_create_vocabularies_table', 17),
(24, '2024_10_04_164011_create_languages_table', 18),
(25, '2024_10_04_165419_add_language_id_to_vocabularies_table', 19),
(26, '2024_10_04_170243_create_structures_table', 20),
(27, '2024_10_04_170950_create_quiz_items_table', 21),
(28, '2024_10_06_152530_create_food_table', 22),
(29, '2024_10_07_014753_create_paragraphs_table', 22),
(30, '2024_10_07_033920_create_results_table', 22),
(31, '2024_10_07_053537_add_new_column_to_results_table', 22),
(32, '2024_10_07_100628_create_learn_vocabularies_table', 22),
(33, '2024_10_07_153005_create_questions_table', 23),
(34, '2024_10_08_141418_create_components_table', 24),
(35, '2024_10_09_060952_create_colors_table', 25),
(36, '2024_10_11_021659_create_codes_table', 25),
(37, '2024_10_11_032912_create_javascripts_table', 25),
(38, '2024_10_13_021931_create_tasks_table', 26),
(39, '2024_10_14_145231_create_tasks_table', 27),
(40, '2024_10_15_055639_create_workflows_table', 28),
(41, '2024_10_16_062708_create_posts_table', 29),
(42, '2024_10_16_062907_create_post_images_table', 29),
(46, '2024_10_17_040129_create_post_comments_table', 30),
(47, '2024_10_17_040159_create_post_likes_table', 30),
(48, '2024_10_17_065058_create_learn_mores_table', 30),
(49, '2024_10_19_195355_create_tasks_table', 31),
(50, '2024_10_20_055701_add_status_to_learn_mores_table', 32),
(51, '2024_10_24_092456_create_profiles_table', 33),
(52, '2024_11_06_055702_create_ideas_table', 34),
(53, '2024_11_07_012216_create_profile_languages_table', 34),
(54, '2024_11_07_062952_create_professional_skills_table', 34),
(55, '2024_11_07_074142_create_professional_education_table', 34),
(56, '2024_11_07_153208_create_future_directions_table', 35),
(57, '2024_11_07_153426_create_profile_hobbies_table', 36),
(58, '2024_11_07_153506_create_profile_objectives_table', 36),
(59, '2024_11_07_153525_create_profile_experiences_table', 36),
(60, '2024_11_07_153540_create_profile_projects_table', 36),
(61, '2024_11_10_154726_create_friendships_table', 37),
(62, '2024_11_11_031414_create_messages_table', 38),
(63, '2024_11_11_035758_create_messages_table', 39),
(64, '2024_11_11_144609_create_links_table', 40),
(65, '2024_11_11_144848_create_notes_table', 41),
(66, '2024_11_12_163540_create_issue_images_table', 42),
(67, '2024_11_17_001329_create_groups_table', 43),
(68, '2024_11_17_001410_create_group_user_table', 43),
(69, '2024_11_17_001658_update_issues_table_for_groups_and_assigned_to', 44),
(70, '2024_11_17_150617_create_commentm_issues_table', 45),
(71, '2024_11_17_151242_create_comment_issues_table', 46),
(72, '2024_11_17_152822_add_fields_to_comments_issues_table', 47),
(73, '2024_12_06_040631_create_settings_table', 48),
(74, '2024_12_17_134444_create_category_languages_table', 49),
(75, '2024_12_19_075730_add_image_to_users_table', 50),
(76, '2024_12_29_094438_create_projects_table', 51),
(77, '2024_12_29_094540_create_project_user_table', 51),
(78, '2025_01_05_060325_create_task_projects_table', 51),
(79, '2025_01_11_034206_create_news_table', 51),
(80, '2025_01_11_043834_add_field_to_news_table', 52),
(81, '2025_01_13_072026_create_project_homes_table', 53);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `language` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `user_id`, `image_path`, `description`, `created_at`, `updated_at`, `language`, `status`, `stt`) VALUES
(3, 'Điểm tên TOP 5 công nghệ mới đang HOT trong năm 2024', 10, 'assets/images/1736739820_new1.png', '<p>Năm 2024 đã chứng kiến sự bùng nổ của nhiều công nghệ mới, mang lại những thay đổi đáng kể trong nhiều lĩnh vực. Dưới đây là 5 công nghệ nổi bật mà bạn có thể tham khảo để tạo nội dung cho trang web của mình:</p><p><strong>Trí tuệ nhân tạo tạo sinh (Generative AI)</strong><br>AI tạo sinh đã trở thành một công cụ phổ biến, được tích hợp trong nhiều lĩnh vực như y tế, giáo dục và kinh doanh. Việc ứng dụng rộng rãi các giải pháp AI nguồn mở và chi phí hệ thống giảm đã giúp doanh nghiệp dễ dàng tiếp cận hơn.</p><p><a href=\"https://vietbao.vn/nhung-xu-huong-cong-nghe-the-gioi-noi-bat-nam-2024-523115.html?utm_source=chatgpt.com\">Báo Việt báo</a></p><p>&nbsp;</p><p><img src=\"https://tse4.mm.bing.net/th?id=OIP.w9XxQYp2q802UOQ-G2K8vQHaD4&amp;w=200&amp;h=112&amp;c=7\" alt=\"Top 10 công nghệ trí tuệ nhân tạo hàng đầu hiện nay\"></p><p><strong>Mạng 5G và Internet vạn vật (IoT)</strong><br>Mạng 5G tiếp tục phát triển mạnh mẽ, cung cấp tốc độ kết nối vượt trội và khả năng kết nối hàng tỷ thiết bị cùng lúc. Điều này thúc đẩy sự phát triển của IoT, từ thành phố thông minh đến các ứng dụng y tế và sản xuất.</p><p><a href=\"https://bloganchoi.com/cong-nghe-nam-2024-diem-nhan-va-xu-huong-dang-chu-y/?utm_source=chatgpt.com\">BlogAnChoi</a></p><p>&nbsp;</p><p><img src=\"https://tse3.mm.bing.net/th?id=OIP.CRJfqTFxzdna-6wuYx_gRAHaE8&amp;w=200&amp;h=133&amp;c=7\" alt=\"Mạng 5G là gì? Các tính năng, ứng dụng và cách thức hoạt động của nó ...\"></p><p><strong>Thực tế ảo (VR) và Thực tế tăng cường (AR)</strong><br>VR và AR đang hợp nhất thế giới vật lý và kỹ thuật số, được ứng dụng trong giáo dục, y tế, thương mại và kết nối xã hội. Chúng mang lại trải nghiệm mới mẻ và tương tác cao cho người dùng.</p><p><a href=\"https://bloganchoi.com/cong-nghe-nam-2024-diem-nhan-va-xu-huong-dang-chu-y/?utm_source=chatgpt.com\">BlogAnChoi</a></p><p>&nbsp;</p><p><strong>Điện toán lượng tử (Quantum Computing)</strong><br>Điện toán lượng tử đang phát triển nhanh chóng, có khả năng giải quyết các vấn đề phức tạp mà máy tính truyền thống không thể. Nó được ứng dụng trong các lĩnh vực như mật mã, khám phá thuốc và tối ưu hóa hệ thống phức tạp.</p><p><a href=\"https://futurer.vn/11-xu-huong-cong-nghe-noi-bat-nam-2024/?utm_source=chatgpt.com\">Futurer</a></p><p>&nbsp;</p><p><strong>Công nghệ bền vững (Green Tech)</strong><br>Sự phát triển công nghệ đang gắn liền với xu hướng bền vững, tập trung vào năng lượng tái tạo, vật liệu và quy trình sản xuất thân thiện với môi trường, nhằm giảm thiểu tác động tiêu cực đến hành tinh.</p><p><a href=\"https://futurer.vn/11-xu-huong-cong-nghe-noi-bat-nam-2024/?utm_source=chatgpt.com\">Futurer</a></p>', '2025-01-12 20:43:40', '2025-01-12 20:43:40', '1', 1, 3),
(4, 'Top 5 Hottest Technologies in 2024', 10, 'assets/images/1736740054_new1.png', '<p>2024 has witnessed the explosion of many new technologies, bringing significant changes across various fields. Below are 5 standout technologies that you can explore to create content for your website:</p><p>&nbsp;</p><p><strong>Generative AI</strong><br>Generative AI has become a popular tool integrated into various fields such as healthcare, education, and business. The widespread application of open-source AI solutions and reduced system costs has made it more accessible to businesses.<br>&nbsp;</p><p><strong>5G Network and Internet of Things (IoT)</strong><br>The 5G network continues to grow robustly, providing exceptional connectivity speeds and the ability to connect billions of devices simultaneously. This development propels IoT expansion, from smart cities to applications in healthcare and manufacturing.<br>&nbsp;</p><p>&nbsp;</p><p><strong>Virtual Reality (VR) and Augmented Reality (AR)</strong><br>VR and AR are merging the physical and digital worlds, finding applications in education, healthcare, commerce, and social connections. They offer users a fresh, interactive, and engaging experience.<br>&nbsp;</p><p><strong>Quantum Computing</strong><br>Quantum computing is advancing rapidly, capable of solving complex problems that traditional computers cannot handle. It is being applied in areas like cryptography, drug discovery, and optimizing complex systems.<br>&nbsp;</p><p>&nbsp;</p><p><strong>Green Technology (Green Tech)</strong><br>Technological development is closely tied to sustainability trends, focusing on renewable energy, eco-friendly materials, and environmentally friendly production processes to minimize the negative impact on the planet.<br>&nbsp;</p><p>These technologies are shaping the future and opening up new opportunities. You can create detailed content about each technology to attract readers and stay updated on the latest trends.</p>', '2025-01-12 20:47:34', '2025-01-12 20:47:34', '2', 1, 3),
(5, '2024年の注目技術トップ5', 10, 'assets/images/1736740123_new1.png', '<p>2024年には、多くの新しい技術が急速に進化し、さまざまな分野において大きな変化をもたらしました。以下は、ウェブサイトのコンテンツ作成に役立つ注目の5つの技術です。</p><p>&nbsp;</p><p><strong>生成AI（Generative AI）</strong><br>生成AIは、医療、教育、ビジネスなど、さまざまな分野で広く活用されている人気のあるツールとなっています。オープンソースAIソリューションの普及とシステムコストの削減により、企業がより簡単に導入できるようになりました。<br>&nbsp;</p><p><strong>5Gネットワークとモノのインターネット（IoT）</strong><br>5Gネットワークは引き続き強力に成長し、優れた接続速度と同時に数十億台のデバイスを接続する能力を提供します。この発展は、スマートシティから医療や製造のアプリケーションに至るまで、IoTの拡大を推進しています。<br>&nbsp;</p><p><strong>バーチャルリアリティ（VR）と拡張現実（AR）</strong><br>VRとARは物理世界とデジタル世界を統合し、教育、医療、商取引、社会的つながりなどの分野で応用されています。これにより、新しい体験と高いインタラクションがユーザーに提供されます。<br>&nbsp;</p><p><strong>量子コンピューティング（Quantum Computing）</strong><br>量子コンピューティングは急速に進化しており、従来のコンピューターでは解決できない複雑な問題を解決する能力を持っています。暗号化、薬物開発、複雑なシステムの最適化などの分野で応用されています。<br>&nbsp;</p><p><strong>グリーンテクノロジー（Green Tech）</strong><br>技術開発は持続可能性のトレンドと密接に関連しており、再生可能エネルギー、環境に優しい材料、環境に配慮した生産プロセスに焦点を当てています。これにより、地球への悪影響を最小限に抑えることを目指しています。<br>&nbsp;</p><p>これらの技術は未来を形作り、新たな可能性を開きつつあります。各技術に関する詳細なコンテンツを作成することで、読者を引き付け、最新のトレンドを常に把握することができます。</p>', '2025-01-12 20:48:43', '2025-01-12 20:48:43', '3', 1, 3),
(6, '11 Công Nghệ Lập Trình Web Phổ Biến Nhất Hiện Nay', 10, 'assets/images/1736740894_new2.png', '<p><strong>HTML &amp; CSS</strong></p><ul><li>HTML (HyperText Markup Language) và CSS (Cascading Style Sheets) là nền tảng cơ bản cho mọi trang web. HTML dùng để tạo cấu trúc, còn CSS giúp định dạng và tạo giao diện cho trang web.</li><li>&nbsp;</li></ul><p><strong>JavaScript</strong></p><ul><li>Ngôn ngữ lập trình không thể thiếu cho lập trình web, dùng để phát triển các tính năng động và tương tác trên trình duyệt. Các framework như React, Angular, và Vue.js được xây dựng dựa trên JavaScript.</li><li>&nbsp;</li></ul><p><strong>React.js</strong></p><ul><li>Framework JavaScript phổ biến, được phát triển bởi Facebook, giúp xây dựng giao diện người dùng nhanh chóng, linh hoạt và hiệu quả.</li><li>&nbsp;</li></ul><p><strong>Angular</strong></p><ul><li>Framework do Google phát triển, được sử dụng để xây dựng các ứng dụng web phức tạp với hiệu suất cao. Angular đặc biệt mạnh trong phát triển các ứng dụng doanh nghiệp.</li><li>&nbsp;</li></ul><p><strong>Vue.js</strong></p><ul><li>Framework nhẹ và linh hoạt, rất phổ biến trong các dự án nhỏ và trung bình. Vue.js có cú pháp đơn giản, dễ học nhưng mạnh mẽ.</li><li>&nbsp;</li></ul><p><strong>Node.js</strong></p><ul><li>Runtime JavaScript phía server giúp xây dựng các ứng dụng web thời gian thực, như chat ứng dụng hoặc nền tảng giao dịch. Node.js nổi bật với hiệu suất cao và khả năng xử lý lượng lớn yêu cầu đồng thời.</li><li>&nbsp;</li></ul><p><strong>PHP</strong></p><ul><li>Ngôn ngữ lập trình server-side được sử dụng rộng rãi, đặc biệt phổ biến trong việc xây dựng các hệ thống quản lý nội dung (CMS) như WordPress.</li><li>&nbsp;</li></ul><p><strong>Python và Django/Flask</strong></p><ul><li>Python là ngôn ngữ dễ học, mạnh mẽ và được ưa chuộng để phát triển web. Django và Flask là hai framework nổi tiếng giúp phát triển các ứng dụng web nhanh chóng và bảo mật.</li><li>&nbsp;</li></ul><p><strong>Ruby on Rails</strong></p><ul><li>Framework Ruby nổi tiếng, được biết đến với cú pháp dễ hiểu và khả năng phát triển ứng dụng web nhanh chóng. Ruby on Rails thích hợp cho các startup muốn xây dựng sản phẩm trong thời gian ngắn.</li></ul><p><strong>ASP.NET Core</strong></p><ul><li>Framework mạnh mẽ của Microsoft, dùng để xây dựng các ứng dụng web hiệu suất cao. ASP.NET Core đặc biệt phổ biến trong các dự án doanh nghiệp.</li><li>&nbsp;</li></ul><p><strong>Progressive Web Apps (PWAs)</strong></p><ul><li>PWAs kết hợp giữa web và ứng dụng di động, mang lại trải nghiệm người dùng tương tự ứng dụng native, nhưng hoạt động ngay trên trình duyệt mà không cần tải xuống.</li></ul>', '2025-01-12 21:01:34', '2025-01-12 21:01:34', '1', 1, 4),
(7, '11 Most Popular Web Development Technologies Today', 10, 'assets/images/1736740981_new2.png', '<p><strong>HTML &amp; CSS</strong><br>HTML (HyperText Markup Language) and CSS (Cascading Style Sheets) are the foundational technologies for every website. HTML is used to create structure, while CSS is used to style and design the website interface.</p><p>&nbsp;</p><p><strong>JavaScript</strong><br>A must-have programming language for web development, JavaScript is used to develop dynamic and interactive features in the browser. Frameworks like React, Angular, and Vue.js are built on JavaScript.</p><p>&nbsp;</p><p><strong>React.js</strong><br>A popular JavaScript framework developed by Facebook, React.js helps build user interfaces quickly, flexibly, and efficiently.</p><p>&nbsp;</p><p><strong>Angular</strong><br>A framework developed by Google, Angular is used to build complex, high-performance web applications. It is particularly strong in enterprise application development.</p><p>&nbsp;</p><p><strong>Vue.js</strong><br>A lightweight and flexible framework that is very popular in small to medium projects. Vue.js has a simple syntax, making it easy to learn yet powerful.</p><p>&nbsp;</p><p><strong>Node.js</strong><br>A server-side JavaScript runtime used to build real-time web applications like chat apps or trading platforms. Node.js stands out with high performance and the ability to handle a large number of concurrent requests.</p><p>&nbsp;</p><p><strong>PHP</strong><br>A widely used server-side programming language, PHP is especially popular for building content management systems (CMS) like WordPress.</p><p>&nbsp;</p><p><strong>Python and Django/Flask</strong><br>Python is an easy-to-learn and powerful language widely favored for web development. Django and Flask are two famous frameworks that help develop web applications quickly and securely.</p><p>&nbsp;</p><p><strong>Ruby on Rails</strong><br>A well-known Ruby framework, Ruby on Rails is known for its easy-to-understand syntax and rapid web application development. It is ideal for startups wanting to build products in a short time.</p><p>&nbsp;</p><p><strong>ASP.NET Core</strong><br>A powerful framework from Microsoft used to build high-performance web applications. ASP.NET Core is especially popular in enterprise projects.</p><p>&nbsp;</p><p><strong>Progressive Web Apps (PWAs)</strong><br>PWAs combine web and mobile applications, providing a user experience similar to native apps but running directly in the browser without the need for downloads.</p>', '2025-01-12 21:03:01', '2025-01-12 21:03:01', '2', 1, 4),
(8, '現在最も人気のあるウェブ開発技術11選', 10, 'assets/images/1736741096_new2.png', '<p><strong>HTML &amp; CSS</strong><br>HTML（HyperText Markup Language）とCSS（Cascading Style Sheets）は、すべてのウェブサイトの基盤となる技術です。HTMLは構造を作成し、CSSはウェブサイトのデザインとスタイルを整えるために使用されます。</p><p>&nbsp;</p><p><strong>JavaScript</strong><br>ウェブ開発に欠かせないプログラミング言語であり、ブラウザ内で動的かつインタラクティブな機能を開発するために使用されます。React、Angular、Vue.jsなどのフレームワークはJavaScriptを基盤としています。</p><p>&nbsp;</p><p><strong>React.js</strong><br>Facebookが開発した人気のJavaScriptフレームワークで、迅速かつ柔軟で効率的にユーザーインターフェイスを構築することができます。</p><p>&nbsp;</p><p><strong>Angular</strong><br>Googleが開発したフレームワークで、高度でパフォーマンスの高いウェブアプリケーションを構築するために使用されます。特に企業向けアプリケーションの開発に強みを持っています。</p><p>&nbsp;</p><p><strong>Vue.js</strong><br>軽量で柔軟なフレームワークで、小規模から中規模のプロジェクトで非常に人気があります。Vue.jsはシンプルな構文で学びやすく、強力です。</p><p><strong>Node.js</strong><br>サーバーサイドのJavaScriptランタイムで、リアルタイムのウェブアプリケーション（例: チャットアプリ、取引プラットフォーム）の構築に使用されます。Node.jsは高いパフォーマンスと多数の同時リクエストを処理する能力で注目されています。</p><p>&nbsp;</p><p><strong>PHP</strong><br>広く使用されているサーバーサイドプログラミング言語で、特にWordPressなどのコンテンツ管理システム（CMS）の構築で人気があります。</p><p>&nbsp;</p><p><strong>PythonとDjango/Flask</strong><br>Pythonは学びやすく、強力な言語で、ウェブ開発に非常に人気があります。DjangoとFlaskは、迅速かつ安全にウェブアプリケーションを開発するための有名なフレームワークです。</p><p>&nbsp;</p><p><strong>Ruby on Rails</strong><br>よく知られたRubyフレームワークで、理解しやすい構文と迅速なウェブアプリケーション開発で知られています。短期間で製品を構築したいスタートアップに最適です。</p><p><strong>ASP.NET Core</strong><br>Microsoftが提供する強力なフレームワークで、高性能なウェブアプリケーションを構築するために使用されます。企業プロジェクトで特に人気があります。</p><p>&nbsp;</p><p><strong>プログレッシブウェブアプリ（PWAs）</strong><br>PWAsはウェブとモバイルアプリを組み合わせたもので、ネイティブアプリに似たユーザー体験を提供しますが、ダウンロードせずにブラウザ上で直接動作します。</p>', '2025-01-12 21:04:56', '2025-01-12 21:04:56', '3', 1, 4),
(9, '10 xu hướng nổi bật ngành Lập trình trong năm 2024', 10, 'assets/images/1736741639_new3.png', '<p>Năm 2024 đánh dấu nhiều xu hướng mới trong ngành lập trình, phản ánh sự phát triển không ngừng của công nghệ và nhu cầu thị trường. Dưới đây là 10 xu hướng nổi bật mà các lập trình viên và doanh nghiệp nên quan tâm:</p><p>&nbsp;</p><p><strong>Trí tuệ nhân tạo (AI) và Học máy (Machine Learning)</strong><br>AI và Machine Learning tiếp tục đóng vai trò quan trọng trong nhiều lĩnh vực, từ nhận diện hình ảnh, xử lý ngôn ngữ tự nhiên đến dự đoán tài chính và y tế. Việc nắm vững các công cụ như TensorFlow, PyTorch sẽ giúp lập trình viên tạo ra các hệ thống thông minh và tự học hiệu quả.</p><p><a href=\"https://caodang.fpt.edu.vn/tin-tuc-poly/10-xu-huong-noi-bat-nganh-lap-trinh-trong-nam-2024.html?utm_source=chatgpt.com\">Cao Đẳng FPT</a></p><p>&nbsp;</p><p><strong>Phát triển ứng dụng di động đa nền tảng</strong><br>Với sự phổ biến của các thiết bị di động, nhu cầu về ứng dụng đa nền tảng tăng cao. Các framework như Flutter, React Native cho phép phát triển ứng dụng trên nhiều hệ điều hành, giảm thời gian và chi phí.</p><p><a href=\"https://caodang.fpt.edu.vn/tin-tuc-poly/10-xu-huong-noi-bat-nganh-lap-trinh-trong-nam-2024.html?utm_source=chatgpt.com\">Cao Đẳng FPT</a></p><p>&nbsp;</p><p><strong>Điện toán đám mây (Cloud Computing)</strong><br>Sử dụng dịch vụ đám mây giúp doanh nghiệp linh hoạt trong việc lưu trữ và xử lý dữ liệu. Lập trình viên cần hiểu rõ về các nền tảng như AWS, Azure để triển khai và quản lý ứng dụng hiệu quả.</p><p><a href=\"https://giasutamtaiduc.com/cac-xu-huong-lap-trinh-trong-nam-2024.html?utm_source=chatgpt.com\">Tâm Tài Đức</a></p><p>&nbsp;</p><p><strong>Kiến trúc Microservices</strong><br>Phương pháp phát triển phần mềm dựa trên các dịch vụ nhỏ, độc lập, giúp tăng tính linh hoạt và dễ dàng mở rộng hệ thống. Kiến trúc này đang được nhiều doanh nghiệp áp dụng để cải thiện hiệu suất và quản lý dự án.</p><p>&nbsp;</p><p><strong>Bảo mật thông tin (Cybersecurity)</strong><br>Với sự gia tăng của các mối đe dọa mạng, bảo mật trở thành ưu tiên hàng đầu. Lập trình viên cần trang bị kiến thức về bảo mật để phát triển các ứng dụng an toàn, bảo vệ dữ liệu người dùng.</p><p>&nbsp;</p><p><strong>Phát triển Web 3.0 và Ứng dụng phi tập trung (DApps)</strong><br>Web 3.0 hứa hẹn mang đến trải nghiệm internet mới, với sự xuất hiện của các ứng dụng phi tập trung dựa trên blockchain, tăng cường quyền kiểm soát và bảo mật cho người dùng.</p><p>&nbsp;</p><p><strong>Ứng dụng Thực tế ảo (VR) và Thực tế tăng cường (AR)</strong><br>VR và AR đang được tích hợp vào nhiều lĩnh vực như giáo dục, y tế, giải trí, mang lại trải nghiệm tương tác và sống động cho người dùng.</p><p>&nbsp;</p><p><strong>Phát triển ứng dụng không máy chủ (Serverless Computing)</strong><br>Mô hình này cho phép lập trình viên tập trung vào code mà không cần quản lý hạ tầng, giúp giảm chi phí và tăng hiệu quả triển khai ứng dụng.</p><p>&nbsp;</p><p><strong>Ngôn ngữ lập trình mới nổi</strong><br>Bên cạnh các ngôn ngữ truyền thống, các ngôn ngữ như Kotlin, Rust đang được ưa chuộng nhờ tính an toàn và hiệu suất cao, mở ra cơ hội mới cho lập trình viên.</p><p>&nbsp;</p><p><strong>Phát triển ứng dụng web hiện đại (Modern Web Development)</strong><br>Sự kết hợp giữa các công nghệ như JAMstack, Progressive Web Apps (PWAs) và Single Page Applications (SPAs) giúp tạo ra các ứng dụng web nhanh, mượt mà và thân thiện với người dùng.</p>', '2025-01-12 21:13:59', '2025-01-12 21:13:59', '1', 1, 5),
(10, '10 Prominent Programming Trends in 2024', 10, 'assets/images/1736741728_new3.png', '<p><strong>Artificial Intelligence (AI) and Machine Learning (ML)</strong><br>AI and ML continue to play key roles in various fields, from image recognition and natural language processing to financial and healthcare predictions. Mastering tools like TensorFlow and PyTorch will enable developers to create intelligent, self-learning systems.<br>&nbsp;</p><p><strong>Cross-Platform Mobile App Development</strong><br>With the popularity of mobile devices, the demand for cross-platform applications is rising. Frameworks like Flutter and React Native allow developers to create apps for multiple platforms, saving time and costs.<br>&nbsp;</p><p><strong>Cloud Computing</strong><br>Utilizing cloud services enables businesses to store and process data flexibly. Developers need a strong understanding of platforms like AWS and Azure to deploy and manage applications effectively.<br>&nbsp;</p><p><strong>Microservices Architecture</strong><br>A development method based on small, independent services, enabling greater flexibility and scalability for systems. This architecture is widely adopted by businesses to enhance performance and project management.<br>&nbsp;</p><p><strong>Cybersecurity</strong><br>With the increase in cyber threats, security has become a top priority. Developers must equip themselves with security knowledge to create safe applications that protect user data.<br>&nbsp;</p><p><strong>Web 3.0 and Decentralized Applications (DApps)</strong><br>Web 3.0 promises a new internet experience, with decentralized applications based on blockchain that enhance user control and security.<br>&nbsp;</p><p><strong>Virtual Reality (VR) and Augmented Reality (AR)</strong><br>VR and AR are being integrated into fields such as education, healthcare, and entertainment, providing users with interactive and immersive experiences.<br>&nbsp;</p><p><strong>Serverless Computing</strong><br>This model allows developers to focus on code without managing infrastructure, reducing costs and improving deployment efficiency.<br>&nbsp;</p><p><strong>Emerging Programming Languages</strong><br>In addition to traditional languages, newer ones like Kotlin and Rust are gaining popularity due to their safety and high performance, opening up new opportunities for developers.</p><p>&nbsp;</p><p><strong>Modern Web Development</strong><br>Combining technologies like JAMstack, Progressive Web Apps (PWAs), and Single Page Applications (SPAs) creates fast, smooth, and user-friendly web applications.</p>', '2025-01-12 21:15:28', '2025-01-12 21:15:28', '2', 1, 5),
(11, '2024年注目のプログラミングトレンド10選', 10, 'assets/images/1736741805_new3.png', '<p><strong>人工知能（AI）と機械学習（ML）</strong><br>AIとMLは、画像認識や自然言語処理から金融や医療予測に至るまで、多くの分野で重要な役割を果たし続けています。TensorFlowやPyTorchのようなツールを習得することで、インテリジェントで自己学習型のシステムを構築できます。<br>&nbsp;</p><p><strong>クロスプラットフォームのモバイルアプリ開発</strong><br>モバイルデバイスの普及に伴い、クロスプラットフォームアプリの需要が増加しています。FlutterやReact Nativeなどのフレームワークを使用することで、複数のプラットフォーム向けにアプリを作成し、時間とコストを節約できます。<br>&nbsp;</p><p><strong>クラウドコンピューティング</strong><br>クラウドサービスを活用することで、企業はデータの保存や処理を柔軟に行うことができます。AWSやAzureのようなプラットフォームに精通していることが、アプリケーションを効果的に展開および管理する鍵となります。<br>&nbsp;</p><p><strong>マイクロサービスアーキテクチャ</strong><br>小さく独立したサービスに基づいた開発手法で、システムの柔軟性と拡張性を高めることができます。このアーキテクチャは、パフォーマンスやプロジェクト管理を改善するために多くの企業で採用されています。<br>&nbsp;</p><p><strong>サイバーセキュリティ</strong><br>サイバー脅威の増加に伴い、セキュリティは最優先事項となっています。開発者は、ユーザーデータを保護する安全なアプリケーションを作成するためのセキュリティ知識を身につける必要があります。<br>&nbsp;</p><p><strong>Web 3.0と分散型アプリケーション（DApps）</strong><br>Web 3.0は、ブロックチェーンに基づいた分散型アプリケーションを活用して、ユーザーの制御やセキュリティを強化する新しいインターネット体験を提供します。<br>&nbsp;</p><p><strong>仮想現実（VR）と拡張現実（AR）</strong><br>VRとARは、教育、医療、エンターテイメントなどの分野に統合され、ユーザーにインタラクティブで没入型の体験を提供しています。<br>&nbsp;</p><p><strong>サーバーレスコンピューティング</strong><br>このモデルでは、インフラストラクチャを管理せずにコードに集中できるため、コスト削減と展開効率の向上が可能です。<br>&nbsp;</p><p><strong>新興プログラミング言語</strong><br>従来の言語に加えて、KotlinやRustのような新しい言語が人気を集めています。これらは安全性と高性能を備え、開発者に新たな機会を提供します。<br>&nbsp;</p><p><strong>モダンウェブ開発</strong><br>JAMstack、プログレッシブウェブアプリ（PWA）、シングルページアプリケーション（SPA）などの技術を組み合わせることで、迅速で滑らかでユーザーフレンドリーなウェブアプリケーションを作成できます。<br>&nbsp;</p>', '2025-01-12 21:16:45', '2025-01-12 21:16:45', '3', 1, 5),
(12, 'Xu hướng phát triển của ngôn ngữ lập trình và các công nghệ mới trong năm 2024', 10, 'assets/images/1736742310_new4.png', '<p><strong>Sự nổi lên của các ngôn ngữ lập trình an toàn và hiệu quả</strong></p><ul><li>Các ngôn ngữ như <strong>Rust</strong>, <strong>Kotlin</strong> và <strong>Go</strong> tiếp tục được ưa chuộng nhờ tính năng bảo mật, hiệu suất cao và quản lý bộ nhớ hiệu quả. Rust đặc biệt phổ biến trong lĩnh vực hệ thống và ứng dụng nhúng, trong khi Kotlin và Go lại được ưu ái cho các ứng dụng web và backend.</li><li>&nbsp;</li></ul><p><strong>Sự phát triển mạnh mẽ của JavaScript và các framework</strong></p><ul><li>JavaScript vẫn giữ vị trí trung tâm trong lập trình web. Các framework như <strong>React.js</strong>, <strong>Vue.js</strong>, và <strong>Angular</strong> tiếp tục phát triển với các bản cập nhật hỗ trợ hiệu suất cao hơn, khả năng xây dựng ứng dụng đa nền tảng tốt hơn.</li><li>&nbsp;</li></ul><p><strong>Python và lĩnh vực Trí tuệ nhân tạo (AI)</strong></p><ul><li>Python vẫn là ngôn ngữ hàng đầu trong AI, khoa học dữ liệu và học máy. Với các thư viện như <strong>TensorFlow</strong>, <strong>PyTorch</strong>, và <strong>scikit-learn</strong>, Python thúc đẩy sự phát triển của công nghệ AI.</li><li>&nbsp;</li></ul><p><strong>Công nghệ Web 3.0 và Blockchain</strong></p><ul><li>Web 3.0 mang đến ứng dụng phi tập trung (DApps), với sự hỗ trợ của ngôn ngữ như <strong>Solidity</strong> trong Ethereum hoặc <strong>Rust</strong> trong hệ thống Solana.</li></ul><p><strong>Sự phát triển của các công nghệ hỗ trợ</strong></p><p>&nbsp;</p><p><strong>DevOps</strong></p><ul><li>Ngôn ngữ <strong>Go</strong> được sử dụng nhiều trong việc phát triển công cụ DevOps, như Docker, Kubernetes, và các giải pháp tự động hóa CI/CD.</li><li>&nbsp;</li></ul><p><strong>Tăng cường thực tế ảo và thực tế tăng cường (VR/AR)</strong></p><ul><li>Các ngôn ngữ như <strong>C#</strong> (với Unity) và <strong>C++</strong> vẫn giữ vai trò quan trọng trong việc xây dựng các ứng dụng VR/AR.</li></ul>', '2025-01-12 21:25:10', '2025-01-12 21:25:10', '1', 1, 6),
(13, 'Programming Language Trends and Emerging Technologies in 2024', 10, 'assets/images/1736742583_new4.png', '<p><strong>The Rise of Safe and Efficient Programming Languages</strong></p><ul><li>Languages like <strong>Rust</strong>, <strong>Kotlin</strong>, and <strong>Go</strong> continue to gain popularity due to their safety features, high performance, and efficient memory management. Rust is particularly favored in system-level and embedded applications, while Kotlin and Go shine in web and backend applications.</li><li>&nbsp;</li></ul><p><strong>Continuous Growth of JavaScript and Its Frameworks</strong></p><ul><li>JavaScript remains central to web development. Frameworks like <strong>React.js</strong>, <strong>Vue.js</strong>, and <strong>Angular</strong> are evolving with updates that support higher performance and better cross-platform application development.</li><li>&nbsp;</li></ul><p><strong>Python and Artificial Intelligence (AI)</strong></p><ul><li>Python remains a top language for AI, data science, and machine learning. Libraries such as <strong>TensorFlow</strong>, <strong>PyTorch</strong>, and <strong>scikit-learn</strong> empower AI technology advancements.</li><li>&nbsp;</li></ul><p><strong>Web 3.0 and Blockchain Technology</strong></p><ul><li>Web 3.0 enables decentralized applications (DApps), supported by languages like <strong>Solidity</strong> for Ethereum and <strong>Rust</strong> for the Solana ecosystem.</li><li>&nbsp;</li></ul><p><strong>Growth in DevOps-Supporting Technologies</strong></p><ul><li><strong>Go</strong> is increasingly used to develop DevOps tools like Docker, Kubernetes, and CI/CD automation solutions.</li><li>&nbsp;</li></ul><p><strong>Enhanced Virtual Reality and Augmented Reality (VR/AR)</strong></p><ul><li>Languages like <strong>C#</strong> (with Unity) and <strong>C++</strong> remain essential in building VR/AR applications.</li></ul>', '2025-01-12 21:29:43', '2025-01-12 21:29:43', '2', 1, 6),
(14, '2024年以降のプログラミング言語のトレンドと新しい技術', 10, 'assets/images/1736742642_new4.png', '<p><strong>安全で効率的なプログラミング言語の台頭</strong></p><ul><li><strong>Rust</strong>、<strong>Kotlin</strong>、<strong>Go</strong>などの言語は、その安全性、高性能、効率的なメモリ管理により人気が高まっています。Rustは特にシステムレベルや組み込みアプリケーションで好まれていますが、KotlinとGoはWebおよびバックエンドアプリケーションで注目されています。</li><li>&nbsp;</li></ul><p><strong>JavaScriptとそのフレームワークの継続的な成長</strong></p><ul><li>JavaScriptはWeb開発の中心であり続けています。<strong>React.js</strong>、<strong>Vue.js</strong>、<strong>Angular</strong>のようなフレームワークは、より高性能でクロスプラットフォームアプリケーションの開発をサポートする更新を続けています。</li><li>&nbsp;</li></ul><p><strong>Pythonと人工知能（AI）</strong></p><ul><li>PythonはAI、データサイエンス、機械学習における主要な言語です。<strong>TensorFlow</strong>、<strong>PyTorch</strong>、<strong>scikit-learn</strong>のようなライブラリがAI技術の進歩を支えています。</li><li>&nbsp;</li></ul><p><strong>Web 3.0とブロックチェーン技術</strong></p><ul><li>Web 3.0は分散型アプリケーション（DApps）を可能にし、Ethereumの<strong>Solidity</strong>やSolanaの<strong>Rust</strong>のような言語によってサポートされています。</li><li>&nbsp;</li></ul><p><strong>DevOpsをサポートする技術の成長</strong></p><ul><li><strong>Go</strong>は、Docker、Kubernetes、およびCI/CD自動化ソリューションなどのDevOpsツールの開発にますます使用されています。</li><li>&nbsp;</li></ul><p><strong>仮想現実（VR）と拡張現実（AR）の強化</strong></p><ul><li><strong>C#</strong>（Unityと共に）や**C++**のような言語は、VR/ARアプリケーションの構築において重要な役割を果たし続けています。</li></ul>', '2025-01-12 21:30:42', '2025-01-12 21:30:42', '3', 1, 6),
(15, 'Tết Nguyên đán Ất Tỵ năm 2025', 10, 'assets/images/1736743052_new5.png', '<p>Tết Nguyên đán Ất Tỵ năm 2025, người lao động sẽ được nghỉ 9 ngày liên tục, từ thứ Bảy ngày 25/1/2025 (26 tháng Chạp năm Giáp Thìn) đến hết Chủ nhật ngày 2/2/2025 (mùng 5 tháng Giêng năm Ất Tỵ).</p><p>&nbsp;</p><p>Kỳ nghỉ này bao gồm 5 ngày nghỉ Tết chính thức và 4 ngày nghỉ cuối tuần liền kề, tạo điều kiện thuận lợi cho người dân sắp xếp thời gian về quê, thăm hỏi gia đình và tham gia các hoạt động lễ hội truyền thống.</p><p>&nbsp;</p><p>Đối với học sinh, lịch nghỉ Tết có sự khác biệt giữa các địa phương, kéo dài từ 9 đến 17 ngày. Chẳng hạn, tỉnh Kon Tum cho học sinh nghỉ Tết dài nhất với 17 ngày, tính cả ngày nghỉ cuối tuần.</p><p>&nbsp;</p><p>Việc nghỉ Tết kéo dài không chỉ giúp người lao động có thời gian nghỉ ngơi, tái tạo năng lượng mà còn thúc đẩy các hoạt động du lịch, kích cầu kinh tế địa phương.</p>', '2025-01-12 21:37:32', '2025-01-12 21:37:32', '1', 1, 1),
(16, 'For the Lunar New Year 2025 (Year of the Snake)', 10, 'assets/images/1736743095_new5.png', '<p>For the Lunar New Year 2025 (Year of the Snake), employees will have a continuous 9-day holiday, from Saturday, January 25, 2025 (26th day of the 12th lunar month of the Year of the Dragon) to Sunday, February 2, 2025 (5th day of the 1st lunar month of the Year of the Snake).</p><p><a href=\"https://baochinhphu.vn/chinh-thuc-bo-ldtbxh-thong-bao-lich-nghi-tet-nguyen-dan-at-ty-va-nghi-le-nam-2025-10224120316465192.htm?utm_source=chatgpt.com\">baochinhphu.vn</a></p><p>&nbsp;</p><p>This holiday includes 5 official Tet days and 4 adjacent weekends, providing favorable conditions for people to arrange time to return home, visit family, and participate in traditional festive activities.</p><p>&nbsp;</p><p>For students, the Tet holiday schedule varies between localities, ranging from 9 to 17 days. For example, Kon Tum province grants the longest Tet holiday for students, lasting 17 days, including weekends.</p><p>&nbsp;</p><p>The extended Tet holiday not only allows workers to rest and rejuvenate but also promotes tourism activities, stimulating the local economy.</p>', '2025-01-12 21:38:15', '2025-01-12 21:38:15', '2', 1, 1),
(17, '2025年の旧正月（蛇年）', 10, 'assets/images/1736743146_new5.png', '<p>2025年の旧正月（蛇年）では、労働者は2025年1月25日（土）（辰年の旧暦12月26日）から2025年2月2日（日）（蛇年の旧暦1月5日）まで、連続9日間の休暇となります。</p><p>&nbsp;</p><p>この休暇には、5日間の公式なテト休暇と、隣接する週末の4日間が含まれており、人々が帰省し、家族を訪問し、伝統的な祭り活動に参加するための時間を確保するのに適しています。</p><p>&nbsp;</p><p>学生の場合、テト休暇のスケジュールは地域によって異なり、9日から17日間となっています。 例えば、コンツム省では、週末を含めて最長17日間のテト休暇が学生に与えられています。</p><p>&nbsp;</p><p>長期のテト休暇は、労働者が休息し、エネルギーを再生するだけでなく、観光活動を促進し、地域経済を刺激する効果もあります。</p>', '2025-01-12 21:39:06', '2025-01-12 21:39:06', '3', 1, 1),
(18, 'Mô tả chi tiết về mức lương dành cho các cấp bậc làm việc trong công ty nước ngoài (năm 2024)', 10, 'assets/images/1736743812_new6.png', '<h3><strong>Mô tả chi tiết về mức lương dành cho các cấp bậc làm việc trong công ty nước ngoài (năm 2024)</strong></h3><p>&nbsp;</p><p>Mức lương của lập trình viên khi làm việc cho các công ty nước ngoài thường cao hơn mặt bằng chung trong nước, đặc biệt nếu làm việc từ xa (remote) hoặc tại các thị trường phát triển như Mỹ, châu Âu, và Úc. Dưới đây là chi tiết mức lương trung bình cho từng cấp bậc (Junior, Mid-level, Senior, và Lead/Manager), cùng các yếu tố ảnh hưởng:</p><p>&nbsp;</p><h4><strong>1. Junior Developer (0-2 năm kinh nghiệm)</strong></h4><ul><li><strong>Mức lương trung bình:</strong><ul><li><strong>Remote (công ty nước ngoài):</strong> 1,500 - 3,500 USD/tháng.</li><li><strong>Làm việc onsite tại nước ngoài:</strong> 40,000 - 60,000 USD/năm.</li></ul></li><li><strong>Yêu cầu:</strong><ul><li>Nắm vững kiến thức cơ bản về một ngôn ngữ lập trình phổ biến như JavaScript, Python, hoặc Java.</li><li>Biết sử dụng các công cụ quản lý mã nguồn (Git), hiểu cơ bản về hệ thống.</li></ul></li><li><strong>Cơ hội thăng tiến:</strong> Học thêm công nghệ mới, tích lũy kinh nghiệm thực tế qua dự án.</li><li>&nbsp;</li></ul><h4><strong>2. Mid-level Developer (2-5 năm kinh nghiệm)</strong></h4><ul><li><strong>Mức lương trung bình:</strong><ul><li><strong>Remote (công ty nước ngoài):</strong> 3,500 - 6,000 USD/tháng.</li><li><strong>Làm việc onsite tại nước ngoài:</strong> 60,000 - 90,000 USD/năm.</li></ul></li><li><strong>Yêu cầu:</strong><ul><li>Thành thạo một số ngôn ngữ lập trình (Rust, Go, hoặc Kotlin sẽ có lợi thế cao).</li><li>Có kinh nghiệm thực tế với các framework phổ biến (React, Django, Spring).</li><li>Biết triển khai CI/CD và hiểu về cơ sở dữ liệu (SQL, NoSQL).</li></ul></li><li><strong>Cơ hội thăng tiến:</strong> Phát triển kỹ năng soft skills như giao tiếp, quản lý dự án nhỏ.</li><li>&nbsp;</li></ul><h4><strong>3. Senior Developer (5-10 năm kinh nghiệm)</strong></h4><ul><li><strong>Mức lương trung bình:</strong><ul><li><strong>Remote (công ty nước ngoài):</strong> 6,000 - 10,000 USD/tháng.</li><li><strong>Làm việc onsite tại nước ngoài:</strong> 90,000 - 150,000 USD/năm.</li></ul></li><li><strong>Yêu cầu:</strong><ul><li>Kỹ năng giải quyết vấn đề phức tạp, tối ưu hóa hiệu suất hệ thống.</li><li>Kiến thức chuyên sâu về các hệ thống phân tán, bảo mật.</li><li>Kinh nghiệm quản lý nhóm nhỏ hoặc mentoring cho Junior.</li></ul></li><li><strong>Cơ hội thăng tiến:</strong> Trở thành Tech Lead, Solution Architect.</li><li>&nbsp;</li></ul><h4><strong>4. Lead Developer / Manager (10+ năm kinh nghiệm)</strong></h4><ul><li><strong>Mức lương trung bình:</strong><ul><li><strong>Remote (công ty nước ngoài):</strong> 10,000 - 15,000 USD/tháng.</li><li><strong>Làm việc onsite tại nước ngoài:</strong> 150,000 - 200,000 USD/năm.</li></ul></li><li><strong>Yêu cầu:</strong><ul><li>Kỹ năng lãnh đạo, quản lý nhóm lớn (10+ người).</li><li>Hiểu rõ chiến lược công nghệ và khả năng định hướng dự án.</li><li>Có khả năng đưa ra các quyết định liên quan đến kiến trúc hệ thống và vận hành.</li></ul></li><li><strong>Cơ hội thăng tiến:</strong> CTO, CIO, hoặc Technical Director.</li></ul><h4><strong>Các yếu tố ảnh hưởng đến mức lương:</strong></h4><ol><li><strong>Địa điểm làm việc:</strong> Mỹ và châu Âu thường trả lương cao hơn khu vực châu Á, nhưng làm remote cho các công ty quốc tế vẫn mang lại mức thu nhập rất hấp dẫn.</li><li><strong>Ngành nghề:</strong> Lĩnh vực AI, blockchain, và cloud computing thường trả lương cao hơn các lĩnh vực truyền thống.</li><li><strong>Kỹ năng chuyên biệt:</strong> Biết sử dụng công cụ DevOps, thiết kế hệ thống phân tán, hoặc hiểu sâu về bảo mật có thể giúp bạn đàm phán mức lương cao hơn.</li><li><strong>Ngôn ngữ lập trình:</strong> Rust, Go, Kotlin, và Python thường được trả lương cao hơn nhờ vào nhu cầu thị trường.</li></ol><h3><strong>Gợi ý học tập để đạt mức lương cao:</strong></h3><ul><li><strong>Tập trung vào các kỹ năng đang có nhu cầu:</strong> Học các ngôn ngữ như Rust, Go, và các công nghệ như Docker, Kubernetes.</li><li><strong>Thực hành dự án thực tế:</strong> Tham gia dự án mã nguồn mở hoặc các sản phẩm lớn để nâng cao kinh nghiệm.</li><li><strong>Nâng cao kỹ năng mềm:</strong> Kỹ năng giao tiếp và lãnh đạo giúp bạn thăng tiến lên các vị trí quản lý với mức lương cao hơn.</li></ul>', '2025-01-12 21:50:12', '2025-01-12 21:50:12', '1', 1, 2),
(19, 'Detailed Description of Salary Levels for Foreign Companies in 2024', 10, 'assets/images/1736743871_new6.png', '<p><strong>Detailed Description of Salary Levels for Foreign Companies in 2024</strong></p><p>Salaries for developers working for foreign companies are often higher than the local average, especially for remote positions or those in developed markets like the US, Europe, and Australia. Below is a detailed breakdown of average salaries for each level (Junior, Mid-level, Senior, and Lead/Manager) and the factors influencing them:</p><p>&nbsp;</p><h4><strong>1. Junior Developer (0-2 years of experience)</strong></h4><ul><li><strong>Average Salary:</strong><ul><li>Remote (foreign companies): $1,500 - $3,500/month.</li><li>Onsite abroad: $40,000 - $60,000/year.</li></ul></li><li><strong>Requirements:</strong><ul><li>Solid foundational knowledge in popular programming languages like JavaScript, Python, or Java.</li><li>Familiarity with version control tools (Git) and basic system understanding.</li></ul></li><li><strong>Career Growth:</strong> Learn new technologies and gain real-world experience through projects.</li><li>&nbsp;</li></ul><h4><strong>2. Mid-level Developer (2-5 years of experience)</strong></h4><ul><li><strong>Average Salary:</strong><ul><li>Remote (foreign companies): $3,500 - $6,000/month.</li><li>Onsite abroad: $60,000 - $90,000/year.</li></ul></li><li><strong>Requirements:</strong><ul><li>Proficiency in several programming languages (Rust, Go, or Kotlin is a strong advantage).</li><li>Hands-on experience with popular frameworks (React, Django, Spring).</li><li>Knowledge of CI/CD implementation and database management (SQL, NoSQL).</li></ul></li><li><strong>Career Growth:</strong> Develop soft skills such as communication and managing small projects.</li><li>&nbsp;</li></ul><h4><strong>3. Senior Developer (5-10 years of experience)</strong></h4><ul><li><strong>Average Salary:</strong><ul><li>Remote (foreign companies): $6,000 - $10,000/month.</li><li>Onsite abroad: $90,000 - $150,000/year.</li></ul></li><li><strong>Requirements:</strong><ul><li>Problem-solving skills for complex issues and system performance optimization.</li><li>Deep knowledge of distributed systems and security.</li><li>Experience managing small teams or mentoring Junior developers.</li></ul></li><li><strong>Career Growth:</strong> Transition to roles like Tech Lead or Solution Architect.</li><li>&nbsp;</li></ul><h4><strong>4. Lead Developer / Manager (10+ years of experience)</strong></h4><ul><li><strong>Average Salary:</strong><ul><li>Remote (foreign companies): $10,000 - $15,000/month.</li><li>Onsite abroad: $150,000 - $200,000/year.</li></ul></li><li><strong>Requirements:</strong><ul><li>Leadership skills to manage large teams (10+ members).</li><li>Clear understanding of technology strategies and project direction.</li><li>Decision-making abilities regarding system architecture and operations.</li></ul></li><li><strong>Career Growth:</strong> Transition to roles like CTO, CIO, or Technical Director.</li></ul><h4><strong>Factors Affecting Salaries:</strong></h4><ol><li><strong>Location:</strong> Salaries are higher in the US and Europe compared to Asia, but remote roles with international companies also offer competitive incomes.</li><li><strong>Industry:</strong> Fields like AI, blockchain, and cloud computing tend to pay more than traditional sectors.</li><li><strong>Specialized Skills:</strong> Expertise in DevOps tools, distributed systems design, or security can help negotiate higher salaries.</li><li><strong>Programming Languages:</strong> Rust, Go, Kotlin, and Python are in high demand and often command higher salaries.</li></ol><h4><strong>Suggestions for Achieving High Salaries:</strong></h4><ul><li><strong>Focus on in-demand skills:</strong> Learn languages like Rust, Go, and technologies like Docker and Kubernetes.</li><li><strong>Work on real-world projects:</strong> Participate in open-source projects or large-scale products to gain practical experience.</li><li><strong>Improve soft skills:</strong> Communication and leadership abilities can help advance to managerial roles with higher pay.</li></ul>', '2025-01-12 21:51:11', '2025-01-12 21:51:11', '2', 1, 2),
(20, '2024年 外資系企業における職位別給与の詳細', 10, 'assets/images/1736743921_new6.png', '<p><strong>2024年 外資系企業における職位別給与の詳細</strong></p><p>&nbsp;</p><p>外資系企業で働く開発者の給与は、国内平均よりも高いことが多く、特にリモート勤務や米国、欧州、オーストラリアなどの先進市場での勤務は高収入を見込めます。以下に、各職位（ジュニア、中堅、シニア、リード/マネージャー）の平均給与と影響要因を詳しく説明します。</p><h4><strong>1. ジュニア開発者 (経験0～2年)</strong></h4><ul><li><strong>平均給与：</strong><ul><li>リモート（外資系企業）：月収 $1,500 - $3,500。</li><li>海外でのオンサイト勤務：年収 $40,000 - $60,000。</li></ul></li><li><strong>要件：</strong><ul><li>JavaScript、Python、Javaなどの人気プログラミング言語における基礎知識の確立。</li><li>バージョン管理ツール（Git）の利用経験と基本的なシステム理解。</li></ul></li><li><strong>キャリアの成長:</strong> 新しい技術の学習、プロジェクトを通じた実務経験の蓄積。</li></ul><h4><strong>2. 中堅開発者 (経験2～5年)</strong></h4><ul><li><strong>平均給与：</strong><ul><li>リモート（外資系企業）：月収 $3,500 - $6,000。</li><li>海外でのオンサイト勤務：年収 $60,000 - $90,000。</li></ul></li><li><strong>要件：</strong><ul><li>複数のプログラミング言語に精通（Rust、Go、Kotlinの知識は大きな利点）。</li><li>React、Django、Springなどの人気フレームワークの実務経験。</li><li>CI/CDの導入経験やデータベース管理（SQL、NoSQL）の知識。</li></ul></li><li><strong>キャリアの成長:</strong> コミュニケーションや小規模プロジェクト管理などのソフトスキルを向上。</li><li>&nbsp;</li></ul><h4><strong>3. シニア開発者 (経験5～10年)</strong></h4><ul><li><strong>平均給与：</strong><ul><li>リモート（外資系企業）：月収 $6,000 - $10,000。</li><li>海外でのオンサイト勤務：年収 $90,000 - $150,000。</li></ul></li><li><strong>要件：</strong><ul><li>複雑な問題解決能力やシステムパフォーマンス最適化スキル。</li><li>分散システムやセキュリティに関する高度な知識。</li><li>ジュニア開発者の指導や小規模チーム管理の経験。</li></ul></li><li><strong>キャリアの成長:</strong> テックリードやソリューションアーキテクトへの昇進。</li><li>&nbsp;</li></ul><h4><strong>4. リード開発者 / マネージャー (経験10年以上)</strong></h4><ul><li><strong>平均給与：</strong><ul><li>リモート（外資系企業）：月収 $10,000 - $15,000。</li><li>海外でのオンサイト勤務：年収 $150,000 - $200,000。</li></ul></li><li><strong>要件：</strong><ul><li>大規模チーム（10人以上）の管理能力。</li><li>技術戦略やプロジェクトの方向性を明確に理解。</li><li>システムアーキテクチャや運用に関する意思決定能力。</li></ul></li><li><strong>キャリアの成長:</strong> CTO、CIO、テクニカルディレクターへの昇進。</li></ul><h4><strong>給与に影響を与える要因：</strong></h4><ol><li><strong>勤務地:</strong> 米国や欧州の給与はアジアより高い傾向にありますが、国際企業のリモート職も競争力のある収入を提供します。</li><li><strong>業界:</strong> AI、ブロックチェーン、クラウドコンピューティングの分野は、従来型業界より高収入です。</li><li><strong>専門スキル:</strong> DevOpsツール、分散システム設計、セキュリティの専門知識が給与交渉に有利です。</li><li><strong>プログラミング言語:</strong> Rust、Go、Kotlin、Pythonは市場の需要が高く、高収入が期待できます。</li></ol><h4><strong>高収入を得るための学習アドバイス：</strong></h4><ul><li><strong>需要のあるスキルに集中:</strong> Rust、Goなどの言語やDocker、Kubernetesなどの技術を学ぶ。</li><li><strong>実務プロジェクトでの経験:</strong> オープンソースプロジェクトや大規模製品に参加して経験を積む。</li><li><strong>ソフトスキルの向上:</strong> コミュニケーションやリーダーシップスキルを向上させ、管理職への道を切り開く。</li></ul>', '2025-01-12 21:52:01', '2025-01-12 21:52:01', '3', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `note`, `created_at`, `updated_at`) VALUES
(5, 10, 'Đừng suy nghĩ đến những chuyện không đáng', '2024-12-20 00:46:25', '2024-12-20 00:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `paragraphs`
--

CREATE TABLE `paragraphs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `location`, `description`, `created_at`, `updated_at`) VALUES
(2, 10, 'Nơi tui muốn là nơi yên tĩnh', '💔 \"I understand that creating this software product might impact some people’s work and livelihood.&nbsp;<div>🌱 With the intention of bringing convenience and efficiency, I hope to contribute to adding new values, not to replace but to grow together.&nbsp;</div><div>🌍 Innovation always comes with challenges, and I hope for empathy and understanding from everyone. 🙏\"    </div>', '2024-11-08 20:44:59', '2024-11-08 20:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(3, 2, 10, 'haha sdsa đa', '2024-12-20 00:40:23', '2024-12-20 00:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`id`, `post_id`, `image_path`, `created_at`, `updated_at`) VALUES
(4, 2, 'assets/images/1731123899_6b8d50cb-1ea7-4dfa-8a96-a1aea8036c92.jpg', '2024-11-08 20:44:59', '2024-11-08 20:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--

CREATE TABLE `post_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_likes`
--

INSERT INTO `post_likes` (`id`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 10, '2024-11-08 23:28:13', '2024-11-08 23:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `problem_processes`
--

CREATE TABLE `problem_processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('todo','doing','testing','done') NOT NULL DEFAULT 'todo',
  `progress` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professional_education`
--

CREATE TABLE `professional_education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_education`
--

INSERT INTO `professional_education` (`id`, `user_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 10, '2011-2014 Trường trung học cơ sở Tân Bình, Bến Tre', '2024-11-07 08:13:23', '2024-11-07 08:14:58'),
(2, 10, '2014-2016 Trường trung học phổ thông Ngô Văn Cấn', '2024-11-07 08:23:11', '2024-11-07 08:23:11'),
(3, 10, '2016-2018 Trường trung học phổ thông Nguyễn Bỉnh Khiêm', '2024-11-07 08:23:11', '2024-11-07 08:23:11'),
(4, 10, '2019-2023 Trường đại học Công Nghệ Thành Phố Hồ Chí Minh', '2024-11-07 08:23:49', '2024-11-07 08:23:49'),
(7, 10, 'sd dsa dsa da a', '2024-12-16 07:34:38', '2024-12-16 07:34:38'),
(8, 10, 'dds', '2024-12-18 21:29:43', '2024-12-18 21:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `professional_skills`
--

CREATE TABLE `professional_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_skills`
--

INSERT INTO `professional_skills` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 10, 'HTML', '2024-11-07 08:03:41', '2024-11-07 08:03:41'),
(2, 10, 'CSS/SCSS/LESS', '2024-11-07 08:03:41', '2024-11-07 08:03:41'),
(3, 10, 'JAVASCRIPT', '2024-11-07 08:03:41', '2024-11-07 08:03:41'),
(4, 10, 'VUE JS', '2024-11-07 08:03:41', '2024-11-07 08:03:41'),
(5, 10, 'REACT JS', '2024-11-07 08:03:41', '2024-11-07 08:03:41'),
(6, 10, 'NODE JS', '2024-11-07 08:05:47', '2024-11-07 08:05:47'),
(7, 10, 'LARAVEL', '2024-11-07 08:05:47', '2024-11-07 08:05:47'),
(8, 10, 'JAVA', '2024-11-07 08:05:47', '2024-11-07 08:05:47'),
(9, 10, 'CSHARP', '2024-11-07 08:05:47', '2024-11-07 08:05:47'),
(10, 10, 'MYSQL', '2024-11-07 08:05:47', '2024-11-07 08:05:47'),
(11, 10, 'MONGO', '2024-11-07 08:05:47', '2024-11-07 08:05:47'),
(12, 10, 'SQLSERVER', '2024-11-07 08:05:47', '2024-11-07 08:05:47'),
(13, 10, 'LINUX', '2024-11-07 08:05:47', '2024-11-07 08:05:47'),
(14, 10, 'PHOTOSHOP', '2024-11-07 08:05:47', '2024-11-07 08:05:47'),
(15, 10, 'GIT', '2024-11-07 08:05:47', '2024-11-07 08:05:47'),
(16, 10, 'sdsadsads', '2024-12-16 07:39:17', '2024-12-16 07:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `link_facebook` varchar(255) DEFAULT NULL,
  `link_instagram` varchar(255) DEFAULT NULL,
  `link_linkin` varchar(255) DEFAULT NULL,
  `link_link` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `roles` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `name`, `email`, `phone`, `date_of_birth`, `gender`, `link_facebook`, `link_instagram`, `link_linkin`, `link_link`, `address`, `description`, `roles`, `created_at`, `updated_at`) VALUES
(1, 8, 'Đoàn Thị Thu Trang', 'thutrang10@gmail.com', 837230102, '2024-01-01', '1', 'Please enter the information Học thêm  mơi', 'Please enter the information.', 'Please enter the information.', 'Please enter the information.', '54 Hùng Vương', 'Please enter the information.', 'Luật sư', '2024-10-26 09:50:05', '2024-10-26 19:35:02'),
(2, 9, 'Phan Duy Linh', 'duylinksky@gmail.com', 989392900, '2024-01-01', '0', 'Please enter the information.', 'Please enter the information.', 'Please enter the information.', 'Please enter the information.', 'Please enter the information.', 'Please enter the information.', 'Nhân Viên', '2024-10-26 09:52:56', '2024-10-26 09:52:56'),
(3, 10, 'Phan Tuấn Kiệt', 'phantuankietIT@gmail.com', 768173369, '2000-12-01', 'Nam', 'https://purtosu.io.vn/profile/ a', 'https://purtosu.io.vn/profile/ a', 'https://purtosu.io.vn/profile/ a', 'https://purtosu.io.vn/profile/ a', 'Bến Tre a', 'Trước tiên, em xin cảm ơn anh chị đã tổ chức buổi phỏng vấn hôm nay. Em tên là Phan Tuấn Kiệt, năm nay em 24 tuổi và quê ở Bến Tre.\r\n\r\nEm đã tốt nghiệp Trường Đại học Công nghệ Thành phố Hồ Chí Minh vào tháng 12 năm 2023, ngành Công nghệ thông tin, chuyên ngành Công nghệ phần mềm.\r\n\r\nVề kinh nghiệm làm việc, em có hơn 1 năm kinh nghiệm tại công ty Nhật Bản. những dự án thực tế em từng tham gia như Growupwork, VJP-connect, Digital maketting và Plan-International. Tại công ty Việt Nhật, em đảm nhiệm với vị trí dev, tại công ty em đã tích lũy được nhiều kỹ năng lập trình và kinh nghiệm cho bản thân. b', '0', '2024-11-07 07:43:23', '2024-12-18 23:34:10'),
(4, 11, 'Nguyễn Văn Linh', 'vanlinh@gmail.com', 906942655, NULL, 'Haha', NULL, NULL, NULL, NULL, 'ha tinh', NULL, '0', '2024-11-12 07:34:05', '2024-11-12 07:34:05'),
(5, 12, 'Trần Minh Thuận', 'trminhthuan28@gmail.com', 335279851, NULL, 'Nam', NULL, NULL, NULL, NULL, 'Ho Chi Minh City, Ho Chi Minh City, Vietnam', NULL, '0', '2024-12-17 18:15:12', '2024-12-17 18:15:12'),
(6, 13, 'Lê Quang Huy', 'lequanghuyy0312a@gmail.com', 969140931, NULL, 'Nam', NULL, NULL, NULL, NULL, 'Long Hậu', NULL, '0', '2024-12-17 18:50:52', '2024-12-17 18:50:52'),
(7, 14, 'Phan Van Test', 'test@gmail.com', 768173369, NULL, 'Nam', NULL, NULL, NULL, NULL, 'Hutech', NULL, '0', '2024-12-18 20:54:35', '2024-12-18 20:54:35'),
(8, 15, 'Phan van A', 'testa@gmail.com', 98928192, NULL, 'Nam', NULL, NULL, NULL, NULL, 'Hauhya', NULL, '0', '2024-12-18 20:55:43', '2024-12-18 20:55:43'),
(9, 16, 'Ohsake', 'hocba@gmail.com', 906942655, NULL, 'sdsdsad', NULL, NULL, NULL, NULL, 'ha tinh', NULL, '0', '2024-12-18 21:01:39', '2024-12-18 21:01:39'),
(10, 17, 'Phan Tuan Kiet', 'autopages@gmail.com', 98223989, NULL, 'Nam', NULL, NULL, NULL, NULL, 'ha tinh', NULL, '0', '2024-12-18 21:07:39', '2024-12-18 21:07:39'),
(11, 18, 'Phan Thanh Tú', 'thanhtu@gmail.com', 989382890, NULL, 'Nam', NULL, NULL, NULL, NULL, 'Đại học tài chính', NULL, '0', '2024-12-23 23:35:10', '2024-12-23 23:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `profile_experiences`
--

CREATE TABLE `profile_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_experiences`
--

INSERT INTO `profile_experiences` (`id`, `user_id`, `description`, `created_at`, `updated_at`) VALUES
(2, 10, 'Software Company OneTech Asia (01/2023 - 06/2023)\r\nINTERN\r\nOneTech Asia offers skill training in frontend (HTML, CSS, Element UI, Tailwind\r\nCSS, and Vue.js) and backend (PHP/Laravel).\r\nI also had the opportunity to participate in a part of the actual project.', '2024-11-08 23:08:20', '2024-11-08 23:08:20'),
(3, 10, 'sdsadsad', '2024-12-16 07:39:12', '2024-12-16 07:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `profile_hobbies`
--

CREATE TABLE `profile_hobbies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_hobbies`
--

INSERT INTO `profile_hobbies` (`id`, `user_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 10, 'Tôi rất thích đá bóng vì đây là cách tuyệt vời để rèn luyện sức khỏe và tăng cường tinh thần đồng đội. Mỗi khi ra sân, tôi luôn cảm thấy tràn đầy năng lượng và hứng khởi.', '2024-11-08 21:29:52', '2024-11-08 21:45:20'),
(2, 10, 'Tôi yêu thích tập thể hình vì nó giúp tôi rèn luyện sức khỏe và cải thiện vóc dáng một cách hiệu quả. Mỗi buổi tập là cơ hội để tôi vượt qua giới hạn của bản thân và cảm thấy mạnh mẽ hơn. â', '2024-11-08 21:32:02', '2024-11-08 21:54:54'),
(3, 10, 'Tôi rất thích đọc sách và học thêm tiếng Nhật vì nó mở rộng kiến thức và hiểu biết về văn hóa mới. Mỗi trang sách và từ vựng mới đều mang đến cho tôi niềm vui và động lực để tiếp tục khám phá.', '2024-11-08 21:53:23', '2024-11-08 21:53:23'),
(4, 10, 'sdsadsad  đá s', '2024-12-16 07:37:39', '2024-12-16 07:37:39'),
(5, 10, 'sdsadsad', '2024-12-16 07:38:39', '2024-12-16 07:38:39'),
(6, 10, 'sdsadsad', '2024-12-16 07:38:57', '2024-12-16 07:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `profile_languages`
--

CREATE TABLE `profile_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_languages`
--

INSERT INTO `profile_languages` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 10, 'Tiếng Anh: Trình độ sơ cấp có thể đọc/viết.', '2024-11-07 08:02:44', '2024-11-07 08:02:44'),
(2, 10, 'Tiếng Nhật: ~N3 (mục tiêu sẽ nhận được N2 vào năm 2024).', '2024-11-07 08:02:44', '2024-11-07 08:02:44'),
(3, 10, 'Học thêm thoi', '2024-12-16 07:34:19', '2024-12-16 07:34:19'),
(4, 10, 'a b', '2024-12-18 21:28:21', '2024-12-18 21:28:37'),
(5, 10, 'sdsads', '2024-12-18 21:28:49', '2024-12-18 21:28:49'),
(6, 10, 'dsadsad', '2024-12-18 21:28:49', '2024-12-18 21:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `profile_objectives`
--

CREATE TABLE `profile_objectives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_objectives`
--

INSERT INTO `profile_objectives` (`id`, `user_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 10, '- Mục tiêu ngắn hạn của tôi là trở thành một Front-End Developer trước khi\r\nchuyển sang vai trò Full-Stack Developer trong vòng hai năm.\r\n- Phấn đấu để trở thành một nhân viên IT chuyên nghiệp, mang đến những sản\r\nphẩm tốt nhất cho khách hàng và từ đó giúp công ty gia tăng lượng khách hàng.', '2024-11-08 22:49:18', '2024-11-08 22:53:17'),
(2, 10, '- Mục tiêu ngắn hạn của tôi là trở thành một Front-End Developer trước khi\r\nchuyển sang vai trò Full-Stack Developer trong vòng hai năm.\r\n- Phấn đấu để trở thành một nhân viên IT chuyên nghiệp, mang đến những sản\r\nphẩm tốt nhất cho khách hàng và từ đó giúp công ty gia tăng lượng khác hàng.', '2024-11-08 22:49:38', '2024-11-08 22:53:06'),
(3, 10, 'sss', '2024-12-16 07:34:28', '2024-12-18 21:29:04'),
(4, 10, 'sdsadsd', '2024-12-16 07:37:22', '2024-12-16 07:37:22'),
(5, 10, 'sdsd', '2024-12-18 21:29:21', '2024-12-18 21:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `profile_projects`
--

CREATE TABLE `profile_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_projects`
--

INSERT INTO `profile_projects` (`id`, `user_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 10, 'Phone Store (15/05/2023 - 03/17/2023)<br/>\r\nLink git: https://github.com/TuanKietIT/phone-store.<br/>\r\nPurpose: to set up a sales website.<br/>\r\nTechnologies: HTML/CSS, RESPONSIVE, TAILWIND CSS, JAVASCRIPT,VUE JS, PHP/LARAVEL, MYSQL.<br/>\r\nDetail: Build a small website with self-study experience. Features such as product filter by category, by location, by price. Search by product name, user login and register, creating posts, displaying posts, adding favorites, and\r\npayment...<br/>\r\nDevice: PC, smartphone(responsive)', '2024-11-08 23:38:39', '2024-11-08 23:38:39'),
(2, 10, 'Post Motels (06/02/2023 - 15/05/2023)\r\nLink git: https://github.com/TuanKietIT/Timnhatro.\r\nPurpose: To do graduation project.\r\nTechnologies: HTML, CSS/, RESPONSIVE, BOOSTRAP, SASS\r\nTAILWIND CSS, JAVASCRIPT, VUE JS, PHP/LARAVEL, MYSQL.\r\nDetails: Build a small website with basic features such as searching by category\r\nand location, user login and registration, creating posts, displaying posts, adding\r\nfavorites, and payment integration...\r\nDevice: PC, smartphone(responsive)', '2024-11-08 23:43:47', '2024-11-08 23:43:47'),
(3, 10, 'sadsadsad', '2024-12-16 07:39:04', '2024-12-16 07:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_homes`
--

CREATE TABLE `project_homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `language` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_homes`
--

INSERT INTO `project_homes` (`id`, `name`, `user_id`, `image_path`, `description`, `language`, `status`, `stt`, `created_at`, `updated_at`) VALUES
(1, 'Quản lý thời gian hiệu quả với dự án Web Calendar', 10, 'assets/images/1736777862_project1.png', '<p>Bạn đã bao giờ cảm thấy khó khăn trong việc quản lý thời gian và tổ chức các sự kiện quan trọng? Dự án Web Calendar của tôi được phát triển với mục tiêu giúp mọi người dễ dàng quản lý thời gian, sắp xếp công việc, và không bỏ lỡ bất kỳ sự kiện hay nhắc nhở quan trọng nào trong cuộc sống.</p><p>&nbsp;</p><h4><strong>Thông tin dự án</strong></h4><ul><li><strong>Sinh viên thực hiện:</strong> Một thành viên</li><li>&nbsp;</li><li><strong>Công nghệ sử dụng:</strong><ul><li><strong>Frontend:</strong> HTML, CSS (hỗ trợ responsive), JavaScript, Vue.js, Fullcalendar</li><li><strong>Backend:</strong> PHP (Laravel), MySQL</li></ul></li></ul><h4>&nbsp;</h4><h4><strong>Tính năng chính</strong></h4><p>&nbsp;</p><p><strong>Hệ thống tài khoản:</strong></p><ul><li>&nbsp;</li><li><strong>Đăng ký &amp; Đăng nhập:</strong> Người dùng có thể tạo tài khoản riêng, đăng nhập và bảo mật thông tin cá nhân.</li><li>&nbsp;</li><li><strong>Quản lý người dùng:</strong> Theo dõi lịch sử hoạt động hoặc thông tin cá nhân trong hồ sơ.</li></ul><p>&nbsp;</p><p><strong>Quản lý sự kiện (Event):</strong></p><ul><li><strong>Thêm, sửa, xóa sự kiện (CRUD):</strong> Dễ dàng tạo và quản lý lịch trình cho từng ngày, tuần, tháng hoặc năm.</li><li>&nbsp;</li><li><strong>Hiển thị lịch sự kiện:</strong> Sử dụng thư viện <strong>Fullcalendar</strong> để tạo giao diện lịch chuyên nghiệp, trực quan và dễ sử dụng.</li></ul><p>&nbsp;</p><p><strong>Nhắc nhở cá nhân (Reminder):</strong></p><ul><li><strong>Tạo và quản lý nhắc nhở:</strong> Đặt lời nhắc cho các nhiệm vụ hoặc sự kiện quan trọng.</li><li>&nbsp;</li><li><strong>Hiển thị danh sách nhắc nhở:</strong> Theo dõi nhanh các thông báo để không bỏ lỡ công việc.</li></ul><p>&nbsp;</p><p><strong>Tối ưu giao diện người dùng:</strong></p><ul><li><strong>Responsive:</strong> Giao diện được thiết kế tối ưu cho mọi thiết bị, từ máy tính bàn đến điện thoại di động.</li><li>&nbsp;</li><li><strong>Trực quan:</strong> Sử dụng màu sắc và bố cục thân thiện với người dùng, giúp dễ dàng theo dõi các lịch trình quan trọng.</li></ul><h4>&nbsp;</h4><h4><strong>Mục đích của dự án</strong></h4><p>Dự án Web Calendar không chỉ là bài tập thực hành lập trình, mà còn mang đến giải pháp thiết thực cho những người bận rộn. Với các tính năng tập trung vào <strong>quản lý thời gian hiệu quả</strong>, tôi muốn tạo ra một công cụ đơn giản nhưng mạnh mẽ để giúp mọi người:</p><ul><li>Lập kế hoạch công việc khoa học.</li><li>Theo dõi lịch trình cá nhân và sự kiện nhóm.</li><li>Tăng hiệu suất làm việc và giảm thiểu tình trạng bỏ lỡ lịch trình.</li></ul><h4>&nbsp;</h4><h4><strong>Vì sao bạn nên dùng Web Calendar của tôi?</strong></h4><ul><li>&nbsp;</li><li><strong>Đơn giản nhưng hiệu quả:</strong> Chỉ với vài cú nhấp chuột, bạn có thể thiết lập một ngày làm việc hiệu quả.</li><li>&nbsp;</li><li><strong>Hoàn toàn cá nhân hóa:</strong> Mỗi tài khoản có không gian riêng để lưu trữ và quản lý thông tin.</li><li>&nbsp;</li><li><strong>Hỗ trợ học tập và làm việc:</strong> Phù hợp với sinh viên, người đi làm, và các nhóm làm việc nhỏ.</li></ul><h4>&nbsp;</h4><h4><strong>Lời kết</strong></h4><p>Dự án này là sự kết hợp giữa kiến thức lập trình và mong muốn tạo ra giá trị cho cộng đồng. Nếu bạn đang tìm kiếm một công cụ giúp quản lý thời gian một cách dễ dàng và hiệu quả, Web Calendar chính là lựa chọn lý tưởng!</p>', '1', 1, 6, '2025-01-13 07:17:42', '2025-01-13 07:17:42'),
(2, 'Manage Time Effectively with the Web Calendar Project', 10, 'assets/images/1736778031_project1.png', '<p>Have you ever felt overwhelmed trying to manage your time and organize important events? My Web Calendar project was developed with the goal of helping everyone easily manage their time, organize tasks, and never miss an important event or reminder in life.</p><h4><strong>Project Information</strong></h4><ul><li><strong>Developer:</strong> Solo student</li><li><strong>Technologies Used:</strong><ul><li><strong>Frontend:</strong> HTML, CSS (responsive), JavaScript, Vue.js, Fullcalendar</li><li><strong>Backend:</strong> PHP (Laravel), MySQL</li></ul></li></ul><h4><strong>Main Features</strong></h4><p><strong>Account System:</strong></p><ul><li><strong>Registration &amp; Login:</strong> Users can create their own accounts, log in, and secure their personal information.</li><li><strong>User Management:</strong> Track activity history or personal details in the profile.</li></ul><p><strong>Event Management (Event):</strong></p><ul><li><strong>Create, Edit, Delete Events (CRUD):</strong> Easily create and manage schedules by day, week, month, or year.</li><li><strong>Event Calendar Display:</strong> Utilizes the <strong>Fullcalendar</strong> library to create a professional and user-friendly calendar interface.</li></ul><p><strong>Personal Reminders (Reminder):</strong></p><ul><li><strong>Create and Manage Reminders:</strong> Set reminders for important tasks or events.</li><li><strong>Reminder List Display:</strong> Quickly track notifications to ensure no tasks are missed.</li></ul><p><strong>Optimized User Interface:</strong></p><ul><li><strong>Responsive Design:</strong> The interface is optimized for all devices, from desktops to mobile phones.</li><li><strong>User-Friendly:</strong> Uses intuitive colors and layouts, making it easy to follow key schedules.</li></ul><h4><strong>Project Purpose</strong></h4><p>The Web Calendar project is not just a coding exercise but also provides a practical solution for busy individuals. With features focused on <strong>efficient time management</strong>, I aim to create a simple yet powerful tool to help everyone:</p><ul><li>Plan work scientifically.</li><li>Track personal schedules and group events.</li><li>Increase productivity and minimize missed schedules.</li></ul><h4><strong>Why Should You Use My Web Calendar?</strong></h4><ul><li><strong>Simple yet Effective:</strong> With just a few clicks, you can set up an efficient day.</li><li><strong>Fully Personalized:</strong> Each account has its own space to store and manage information.</li><li><strong>Supports Study and Work:</strong> Suitable for students, working professionals, and small groups.</li></ul><h4><strong>Conclusion</strong></h4><p>This project is a combination of programming knowledge and the desire to create value for the community. If you\'re looking for a tool to help manage time easily and effectively, the Web Calendar is the ideal choice!</p>', '2', 1, 6, '2025-01-13 07:20:31', '2025-01-13 07:20:31'),
(3, 'Web Calendarプロジェクトで時間管理を効率化', 10, 'assets/images/1736778072_project1.png', '<p>時間管理や重要なイベントの整理に苦労したことはありませんか？私のWeb Calendarプロジェクトは、誰でも簡単に時間を管理し、タスクを整理し、重要なイベントやリマインダーを逃さないようにすることを目的として開発されました。</p><h4><strong>プロジェクト情報</strong></h4><ul><li><strong>開発者:</strong> 学生1名</li><li><strong>使用技術:</strong><ul><li><strong>フロントエンド:</strong> HTML、CSS（レスポンシブ対応）、JavaScript、Vue.js、Fullcalendar</li><li><strong>バックエンド:</strong> PHP（Laravel）、MySQL</li></ul></li></ul><h4><strong>主な機能</strong></h4><p><strong>アカウントシステム:</strong></p><ul><li><strong>登録とログイン:</strong> ユーザーは個別のアカウントを作成し、ログインして個人情報を安全に保護できます。</li><li><strong>ユーザー管理:</strong> 活動履歴や個人情報をプロフィール内で追跡。</li></ul><p><strong>イベント管理（Event）:</strong></p><ul><li><strong>イベントの作成、編集、削除（CRUD）:</strong> 日、週、月、または年ごとにスケジュールを簡単に作成・管理できます。</li><li><strong>イベントカレンダー表示:</strong> <strong>Fullcalendar</strong>ライブラリを利用して、プロフェッショナルで使いやすいカレンダーインターフェースを作成。</li></ul><p><strong>個人リマインダー（Reminder）:</strong></p><ul><li><strong>リマインダーの作成と管理:</strong> 重要なタスクやイベントのリマインダーを設定。</li><li><strong>リマインダーリストの表示:</strong> 通知を迅速に確認し、タスクを見逃さない。</li></ul><p><strong>最適化されたユーザーインターフェース:</strong></p><ul><li><strong>レスポンシブデザイン:</strong> デスクトップからスマートフォンまで、あらゆるデバイスに最適化されたインターフェース。</li><li><strong>直感的なデザイン:</strong> 視覚的に分かりやすい色とレイアウトを使用し、重要なスケジュールを簡単に追跡。</li></ul><h4><strong>プロジェクトの目的</strong></h4><p>Web Calendarプロジェクトは単なるプログラミング練習ではなく、多忙な人々のための実用的なソリューションを提供します。<strong>効率的な時間管理</strong>に焦点を当てた機能を備え、以下のことを実現するためのシンプルで強力なツールを目指しています：</p><ul><li>科学的な仕事の計画。</li><li>個人スケジュールやグループイベントの追跡。</li><li>生産性の向上とスケジュールの見逃しを最小限に。</li></ul><h4><strong>Web Calendarを選ぶ理由</strong></h4><ul><li><strong>シンプルで効果的:</strong> 数回のクリックで効率的な1日を設定可能。</li><li><strong>完全にパーソナライズ:</strong> 各アカウントには、情報を保存・管理するための独自のスペースがあります。</li><li><strong>学習と仕事をサポート:</strong> 学生、社会人、小規模チームに最適。</li></ul><h4><strong>結論</strong></h4><p>このプロジェクトは、プログラミングの知識とコミュニティに価値を提供したいという願いの結晶です。時間を簡単かつ効率的に管理できるツールを探しているなら、Web Calendarが最適な選択肢です！</p>', '3', 1, 6, '2025-01-13 07:21:12', '2025-01-13 07:21:12'),
(4, 'Website tìm kiếm nhà trọ', 10, 'assets/images/1736778446_project2.png', '<p><strong>Team size</strong>: 3<br><strong>Thời gian làm đồ án tốt nghiệp</strong>: Dự kiến trong 6 tháng<br><strong>Công nghệ sử dụng</strong>: HTML/CSS, Responsive, TailwindCSS, JavaScript, Vue.js, Three.js, PHP/Laravel, MySQL</p><h3>Mô tả dự án:</h3><p>Dự án này hướng đến việc xây dựng một website tìm kiếm nhà trọ tối ưu cho sinh viên, cung cấp trải nghiệm thân thiện và tiện lợi với các tính năng hiện đại:</p><h4><strong>Chức năng cơ bản</strong>:</h4><ul><li><strong>Tìm kiếm nhà trọ</strong>: Cho phép người dùng tìm kiếm theo danh mục, vị trí, giá cả và diện tích.</li><li><strong>Quản lý tài khoản người dùng</strong>: Tính năng đăng ký, đăng nhập, và chỉnh sửa thông tin cá nhân dễ dàng.</li><li><strong>Đăng tin và quản lý bài đăng</strong>: Người dùng có thể tự tạo bài đăng nhà trọ với hình ảnh và mô tả chi tiết.</li><li><strong>Hiển thị bài đăng</strong>: Giao diện trực quan hiển thị danh sách nhà trọ với thông tin rõ ràng, dễ nắm bắt.</li><li><strong>Thêm vào yêu thích</strong>: Lưu lại những nhà trọ phù hợp để tham khảo sau.</li><li><strong>Tích hợp thanh toán</strong>: Đáp ứng nhu cầu giao dịch thuê nhà trực tuyến an toàn và nhanh chóng.</li></ul><h4><strong>Chức năng nâng cao</strong>:</h4><p><strong>Tìm nhà trọ trong bán kính 1 km</strong>:<br>Sử dụng bản đồ tương tác, người dùng có thể tìm kiếm các nhà trọ nằm trong phạm vi gần, giúp tiết kiệm thời gian và công sức di chuyển.</p><p><strong>Mô hình 3D nhà trọ</strong>:<br>Ứng dụng công nghệ Three.js để dựng mô hình 3D, giúp người dùng khám phá không gian nhà trọ qua các góc nhìn chi tiết và chân thực. Tính năng này tạo ấn tượng mạnh mẽ và tăng khả năng ra quyết định nhanh chóng.</p><h4><strong>Tối ưu trải nghiệm người dùng</strong>:</h4><ul><li><strong>Responsive Design</strong>: Website tương thích trên mọi thiết bị, từ máy tính, máy tính bảng đến điện thoại.</li><li><strong>TailwindCSS</strong>: Cung cấp giao diện hiện đại, dễ tùy chỉnh và đảm bảo hiệu suất cao.</li><li><strong>Vue.js</strong>: Tăng tốc độ phản hồi và cải thiện tương tác người dùng.</li></ul>', '1', 1, 5, '2025-01-13 07:27:26', '2025-01-13 07:27:26'),
(5, 'Accommodation Finder Website', 10, 'assets/images/1736778478_project2.png', '<p><strong>Team size</strong>: 3<br><strong>Graduation project duration</strong>: Estimated 3-6 months<br><strong>Technologies</strong>: HTML/CSS, Responsive Design, TailwindCSS, JavaScript, Vue.js, Three.js, PHP/Laravel, MySQL</p><h4><strong>Project Description</strong></h4><p>This project aims to build an optimized accommodation finder website for students, providing a user-friendly and convenient experience with modern features.</p><h4><strong>Basic Features</strong>:</h4><ul><li><strong>Accommodation Search</strong>: Allows users to search by category, location, price, and size.</li><li><strong>User Account Management</strong>: Easy registration, login, and profile management.</li><li><strong>Post Creation and Management</strong>: Users can create accommodation posts with images and detailed descriptions.</li><li><strong>Post Display</strong>: A clear, intuitive interface that displays accommodation listings for easy navigation.</li><li><strong>Add to Favorites</strong>: Save suitable accommodations for future reference.</li><li><strong>Payment Integration</strong>: Secure and fast online transaction capabilities for rental payments.</li></ul><h4><strong>Advanced Features</strong>:</h4><p><strong>Search for Accommodations within a 1 km Radius</strong>:<br>Using interactive maps, users can locate accommodations within a nearby radius, saving time and travel effort.</p><p><strong>3D Accommodation Models</strong>:<br>Leveraging Three.js technology, users can explore 3D models of accommodations with detailed and realistic perspectives, creating a strong impression and aiding faster decision-making.</p><h4><strong>Optimized User Experience</strong>:</h4><ul><li><strong>Responsive Design</strong>: The website is compatible with all devices, including desktops, tablets, and smartphones.</li><li><strong>TailwindCSS</strong>: Ensures a modern, easily customizable interface with high performance.</li><li><strong>Vue.js</strong>: Enhances response speed and user interaction.</li></ul>', '2', 1, 5, '2025-01-13 07:27:58', '2025-01-13 07:27:58'),
(6, '学生向けの宿泊施設検索ウェブサイト', 10, 'assets/images/1736778515_project2.png', '<p><strong>チームサイズ</strong>: 3人<br><strong>卒業プロジェクト期間</strong>: 約3～6か月<br><strong>使用技術</strong>: HTML/CSS、レスポンシブデザイン、TailwindCSS、JavaScript、Vue.js、Three.js、PHP/Laravel、MySQL</p><h4><strong>プロジェクト概要</strong></h4><p>このプロジェクトは、学生向けに最適化された宿泊施設検索ウェブサイトを構築し、最新機能を備えた使いやすく便利な体験を提供することを目的としています。</p><h4><strong>基本機能</strong>:</h4><ul><li><strong>宿泊施設検索</strong>: カテゴリ、場所、価格、面積で検索可能。</li><li><strong>ユーザーアカウント管理</strong>: 簡単な登録、ログイン、プロフィール管理。</li><li><strong>投稿作成と管理</strong>: ユーザーは画像や詳細説明付きで宿泊施設の投稿が可能。</li><li><strong>投稿表示</strong>: 見やすく直感的なインターフェイスで宿泊施設リストを表示。</li><li><strong>お気に入り追加</strong>: 適切な宿泊施設を保存して後で確認可能。</li><li><strong>支払い統合</strong>: 安全で迅速なオンライン取引による賃貸支払いが可能。</li></ul><h4><strong>高度な機能</strong>:</h4><p><strong>半径1 km以内の宿泊施設検索</strong>:<br>インタラクティブな地図を利用し、近隣の宿泊施設を検索することで、時間と移動の手間を節約します。</p><p><strong>3D宿泊施設モデル</strong>:<br>Three.js技術を活用して、宿泊施設の3Dモデルを詳細でリアルな視点から探索可能。印象を強め、迅速な意思決定を支援します。</p><h4><strong>最適化されたユーザー体験</strong>:</h4><ul><li><strong>レスポンシブデザイン</strong>: デスクトップ、タブレット、スマートフォンなど、すべてのデバイスに対応。</li><li><strong>TailwindCSS</strong>: モダンでカスタマイズ可能なインターフェイスと高性能を実現。</li><li><strong>Vue.js</strong>: 応答速度とユーザーインタラクションを向上。</li></ul>', '3', 1, 5, '2025-01-13 07:28:35', '2025-01-13 07:28:35'),
(7, 'Internship Experience at OneTech Asia: Growing with Real-World Projects', 10, 'assets/images/1736780205_product_2.png', '<p><strong>Duration</strong>: <strong>November 2022 - June 2023</strong><br><strong>Project</strong>: <a href=\"https://growupwork.com/\"><strong>GrowUpWork</strong></a></p><p>From November 2022 to June 2023, I had the opportunity to intern at <strong>OneTech Asia</strong>, a leading software company. This internship was divided into two significant phases: <strong>three months of professional training</strong> and <strong>three months of real-world project experience</strong>.</p><h4><strong>Learning and Growth during the Internship</strong></h4><p>At OneTech Asia, I was immersed in a highly professional and supportive environment. During the first phase of my internship, I received comprehensive training from senior developers, focusing on <strong>frontend</strong> and <strong>backend</strong> development skills:</p><ul><li><strong>Frontend Development</strong>: Hands-on training with HTML, CSS, Element UI, TailwindCSS, and Vue.js, focusing on creating responsive, user-friendly, and visually appealing web interfaces.</li><li><strong>Backend Development</strong>: Gaining knowledge and experience in PHP and Laravel, which equipped me to manage data and build scalable web applications.</li></ul><p>The training sessions were a blend of technical skills and real-world problem-solving approaches, ensuring that I was ready for practical application.</p><h4><strong>Hands-On Experience with the GrowUpWork Project</strong></h4><p>During the second phase, I had the privilege of contributing to the development of <strong>GrowUpWork</strong>, a platform designed to connect businesses and freelancers. As an intern, I collaborated with the team to enhance various aspects of the project, including:</p><ul><li><strong>Frontend Implementation</strong>: Developing intuitive and dynamic interfaces that improved user engagement and usability.</li><li><strong>Backend Support</strong>: Assisting in the implementation of robust server-side functionalities to ensure the platform’s reliability and performance.</li></ul><p>The project helped me sharpen my technical skills and understand the intricacies of working in a professional team. From task planning to collaboration and problem-solving, I learned the essence of teamwork and agile development.</p><h4><strong>Why This Experience Stands Out</strong></h4><ul><li><strong>Real-World Challenges</strong>: Being part of a live project taught me how to navigate challenges and deliver under tight deadlines.</li><li><strong>Mentorship</strong>: The guidance from experienced professionals was invaluable in shaping my skills and work ethics.</li><li><strong>Practical Growth</strong>: Beyond technical skills, I learned to communicate effectively, manage tasks, and adapt to dynamic requirements in a real-world setting.</li></ul><h4><strong>Conclusion</strong></h4><p>My internship at OneTech Asia was a transformative journey. It not only gave me technical expertise but also prepared me for the challenges of the tech industry. The GrowUpWork project allowed me to leave a tangible mark while learning from some of the best in the industry. This experience has been a cornerstone in my career, and I am excited to bring these skills and learnings to future endeavors.</p>', '2', 1, 4, '2025-01-13 07:56:45', '2025-01-13 07:56:45'),
(8, 'Kinh nghiệm thực tập tại OneTech Asia: Trưởng thành từ dự án thực tế', 10, 'assets/images/1736780258_product_2.png', '<h3><strong>Kinh nghiệm thực tập tại OneTech Asia: Trưởng thành từ dự án thực tế</strong></h3><p><strong>Thời gian</strong>: <strong>11/2022 - 6/2023</strong><br><strong>Dự án</strong>: <a href=\"https://growupwork.com/\"><strong>GrowUpWork</strong></a></p><p>Từ tháng 11/2022 đến tháng 6/2023, em có cơ hội thực tập tại <strong>OneTech Asia</strong>, một công ty phần mềm hàng đầu. Kỳ thực tập được chia thành hai giai đoạn quan trọng: <strong>3 tháng đào tạo chuyên môn</strong> và <strong>3 tháng tham gia dự án thực tế</strong>.</p><h4><strong>Học tập và phát triển trong quá trình thực tập</strong></h4><p>Tại OneTech Asia, em được làm việc trong một môi trường chuyên nghiệp và đầy hỗ trợ. Trong giai đoạn đầu, em được đào tạo bài bản bởi các anh chị chuyên môn, tập trung vào phát triển kỹ năng <strong>frontend</strong> và <strong>backend</strong>:</p><ul><li><strong>Frontend</strong>: Được hướng dẫn sử dụng HTML, CSS, Element UI, TailwindCSS và Vue.js để tạo ra giao diện web thân thiện, thẩm mỹ và phản hồi nhanh.</li><li><strong>Backend</strong>: Tìm hiểu và thực hành với PHP và Laravel, giúp xây dựng các ứng dụng web mạnh mẽ và dễ mở rộng.</li></ul><p>Các buổi đào tạo kết hợp giữa kiến thức kỹ thuật và phương pháp giải quyết vấn đề thực tế, giúp em sẵn sàng áp dụng vào dự án.</p><h4><strong>Trải nghiệm thực tế với dự án GrowUpWork</strong></h4><p>Trong giai đoạn thứ hai, em có cơ hội tham gia phát triển dự án <strong>GrowUpWork</strong>, một nền tảng kết nối doanh nghiệp và freelancer. Với vai trò thực tập sinh, em đã đóng góp vào nhiều khía cạnh của dự án, bao gồm:</p><ul><li><strong>Phát triển frontend</strong>: Thiết kế và xây dựng giao diện người dùng trực quan, năng động, nâng cao trải nghiệm người dùng.</li><li><strong>Hỗ trợ backend</strong>: Tham gia triển khai các chức năng phía máy chủ, đảm bảo hiệu suất và độ tin cậy của nền tảng.</li></ul><p>Dự án giúp em trau dồi kỹ năng kỹ thuật và hiểu rõ hơn về quy trình làm việc trong một nhóm chuyên nghiệp. Từ lập kế hoạch công việc đến phối hợp và giải quyết vấn đề, em đã học được tinh thần làm việc nhóm và phát triển theo phương pháp Agile.</p><h4><strong>Điểm nổi bật của trải nghiệm này</strong></h4><ul><li><strong>Thách thức thực tế</strong>: Tham gia vào một dự án trực tiếp giúp em học cách đối mặt với các thử thách và hoàn thành công việc trong thời gian ngắn.</li><li><strong>Hướng dẫn chuyên môn</strong>: Sự chỉ dẫn từ các anh chị có kinh nghiệm là vô giá trong việc định hình kỹ năng và tác phong làm việc.</li><li><strong>Phát triển thực tế</strong>: Ngoài kỹ năng kỹ thuật, em học được cách giao tiếp hiệu quả, quản lý công việc và thích nghi với các yêu cầu thay đổi trong môi trường thực tế.</li></ul>', '1', 1, 4, '2025-01-13 07:57:38', '2025-01-13 07:57:38'),
(9, 'OneTech Asiaでのインターンシップ経験：実践的プロジェクトで成長', 10, 'assets/images/1736780329_product_2.png', '<p><strong>期間</strong>: <strong>2022年11月 - 2023年6月</strong><br><strong>プロジェクト</strong>: <a href=\"https://growupwork.com/\"><strong>GrowUpWork</strong></a></p><p>2022年11月から2023年6月まで、ソフトウェア企業である<strong>OneTech Asia</strong>でインターンシップを経験しました。このインターンシップは、<strong>3か月の専門トレーニング</strong>と<strong>3か月の実践的プロジェクトへの参加</strong>という2つの重要な段階に分かれていました。</p><h4><strong>インターンシップ中の学びと成長</strong></h4><p>OneTech Asiaでは、プロフェッショナルでサポートが充実した環境で働くことができました。インターンシップの最初の段階では、先輩エンジニアの指導のもとで、<strong>フロントエンド</strong>および<strong>バックエンド</strong>開発スキルを学びました：</p><ul><li><strong>フロントエンド開発</strong>: HTML、CSS、Element UI、TailwindCSS、Vue.jsを使用し、レスポンシブで使いやすい魅力的なウェブインターフェースを作成。</li><li><strong>バックエンド開発</strong>: PHPとLaravelを活用し、データ管理や拡張性のあるウェブアプリケーションの構築を学習。</li></ul><p>技術スキルと実践的な課題解決のアプローチが融合したトレーニングで、実務に活かせる準備が整いました。</p><h4><strong>GrowUpWorkプロジェクトでの実践経験</strong></h4><p>インターンシップの後半では、<strong>GrowUpWork</strong>プロジェクトに参加する機会を得ました。このプラットフォームは、企業とフリーランサーをつなぐためのものです。インターン生として、以下のようなプロジェクトに貢献しました：</p><ul><li><strong>フロントエンドの実装</strong>: ユーザーエクスペリエンスを向上させる直感的で動的なインターフェースを開発。</li><li><strong>バックエンドのサポート</strong>: 信頼性と性能を確保するため、サーバーサイド機能の実装を支援。</li></ul><p>このプロジェクトを通じて、技術スキルを向上させるだけでなく、プロのチームでの仕事の流れを深く理解しました。タスク計画、チームワーク、課題解決に至るまで、アジャイル開発の精神を学びました。</p><h4><strong>この経験が特別な理由</strong></h4><ul><li><strong>実践的な課題への挑戦</strong>: 実際のプロジェクトに関わることで、課題を乗り越え、短期間で成果を出す方法を学びました。</li><li><strong>専門的な指導</strong>: 経験豊富な先輩方からの指導は、スキルと仕事の姿勢を形成する上で非常に貴重でした。</li><li><strong>実務の成長</strong>: 技術スキルだけでなく、効果的なコミュニケーション、タスク管理、変化に対応する能力を学びました。</li></ul>', '3', 1, 4, '2025-01-13 07:58:49', '2025-01-13 07:58:49'),
(10, 'Kinh nghiệm làm việc tại VIET JAPAN PARTNER: Vững bước trong môi trường chuyên nghiệp', 10, 'assets/images/1736780628_product_3.png', '<p><strong>Thời gian</strong>: <strong>08/2023 - 11/2023</strong><br><strong>Vị trí</strong>: Nhân viên chính thức<br><strong>Dự án tham gia</strong>: <a href=\"https://vjp-connect.com/\"><strong>VJP Connect</strong></a></p><h4><strong>Tóm tắt kinh nghiệm</strong></h4><p>Trong thời gian làm việc tại <strong>VIET JAPAN PARTNER</strong>, em đã trải qua <strong>2 tháng thử việc</strong> và <strong>6 tháng làm nhân viên chính thức</strong>, là giai đoạn quan trọng giúp em tích lũy kinh nghiệm thực tế và phát triển kỹ năng chuyên môn.</p><h4><strong>Kỹ năng và công nghệ đã áp dụng</strong></h4><p>Trong thời gian thử việc và làm việc tại công ty, em đã được học hỏi và thực hành nhiều công nghệ quan trọng:</p><ul><li><strong>Frontend Development</strong>: Thành thạo HTML, CSS, JavaScript, và React.js, tập trung vào việc tạo ra giao diện người dùng thân thiện và tương tác.</li><li><strong>Backend Development</strong>: Làm việc với PHP/Laravel và Node.js, hỗ trợ xây dựng hệ thống mạnh mẽ và dễ mở rộng.</li><li><strong>Linux System</strong>: Quản lý hệ thống với <strong>Ubuntu 22.04</strong>, thiết lập và sử dụng FTP, cải thiện hiệu suất và bảo mật hệ thống.</li></ul><h4><strong>Dự án nổi bật: VJP Connect</strong></h4><p>Dự án <strong>VJP Connect</strong> là một nền tảng kết nối giữa các đối tác Việt Nam và Nhật Bản, nơi em có cơ hội tham gia vào các giai đoạn phát triển quan trọng:</p><ul><li><strong>Thiết kế và phát triển giao diện</strong>: Đảm bảo giao diện người dùng hiện đại, mượt mà và phản hồi nhanh.</li><li><strong>Tích hợp hệ thống backend</strong>: Hỗ trợ triển khai các tính năng quản lý dữ liệu và giao tiếp giữa các hệ thống.</li><li><strong>Tối ưu hệ thống Linux</strong>: Quản lý và duy trì môi trường máy chủ để đảm bảo dự án vận hành hiệu quả.</li></ul><h4><strong>Điểm nổi bật của quá trình làm việc</strong></h4><ul><li><strong>Trải nghiệm thực tế</strong>: Tham gia vào dự án thực tế ngay từ giai đoạn thử việc, giúp em hiểu sâu hơn về cách áp dụng kiến thức vào môi trường làm việc chuyên nghiệp.</li><li><strong>Học hỏi và phát triển</strong>: Được hướng dẫn từ các đồng nghiệp giàu kinh nghiệm, giúp nâng cao kỹ năng lập trình và quản lý dự án.</li><li><strong>Tính trách nhiệm</strong>: Làm quen với các nhiệm vụ đòi hỏi trách nhiệm cao và cam kết với chất lượng công việc.</li></ul>', '1', 1, 3, '2025-01-13 08:03:48', '2025-01-13 08:03:48'),
(11, 'Work Experience at VIET JAPAN PARTNER: Building a Solid Professional Foundation', 10, 'assets/images/1736780675_product_3.png', '<p><strong>Duration</strong>: <strong>08/2023 - 11/2023</strong><br><strong>Position</strong>: Full-Time Employee<br><strong>Project Involved</strong>: <a href=\"https://vjp-connect.com/\"><strong>VJP Connect</strong></a></p><h4><strong>Summary of Experience</strong></h4><p>During my time at <strong>VIET JAPAN PARTNER</strong>, I completed <strong>2 months of probation</strong> followed by <strong>6 months as a full-time employee</strong>. This period was pivotal in helping me gain hands-on experience and enhance my professional skills.</p><h4><strong>Skills and Technologies Applied</strong></h4><p>Throughout my tenure, I worked extensively with various technologies:</p><ul><li><strong>Frontend Development</strong>: Proficient in HTML, CSS, JavaScript, and React.js, focusing on creating user-friendly and interactive interfaces.</li><li><strong>Backend Development</strong>: Worked with PHP/Laravel and Node.js to build scalable and robust systems.</li><li><strong>Linux Systems</strong>: Managed servers using <strong>Ubuntu 22.04</strong>, handled FTP configurations, and optimized system performance and security.</li></ul><h4><strong>Key Project: VJP Connect</strong></h4><p>The <strong>VJP Connect</strong> project is a platform connecting Vietnamese and Japanese partners. My contributions included:</p><ul><li><strong>UI/UX Design and Development</strong>: Delivered a modern, smooth, and responsive user interface.</li><li><strong>Backend Integration</strong>: Supported the implementation of data management and system communication features.</li><li><strong>Linux Optimization</strong>: Maintained and improved server environments to ensure efficient project operations.</li></ul><h4><strong>Highlights of the Experience</strong></h4><ul><li><strong>Real-World Exposure</strong>: Participated in real-world projects during the probation period, gaining insights into applying knowledge in a professional environment.</li><li><strong>Continuous Learning</strong>: Learned and improved under the mentorship of experienced colleagues, enhancing my coding and project management skills.</li><li><strong>Responsibility and Ownership</strong>: Took on tasks that required high responsibility and a commitment to quality.</li></ul>', '2', 1, 3, '2025-01-13 08:04:35', '2025-01-13 08:04:35'),
(12, 'VIET JAPAN PARTNERでの職務経験：プロフェッショナル基盤の構築', 10, 'assets/images/1736780727_product_3.png', '<p><strong>期間</strong>: <strong>2023年8月 - 2023年11月</strong><br>役職: 正社員<br>参加プロジェクト: <a href=\"https://vjp-connect.com/\">VJP Connect</a></p><h4>経験の概要</h4><p><strong>VIET JAPAN PARTNER</strong>での勤務期間中、<strong>4か月の試用期間</strong>を経て、<strong>4か月間正社員</strong>として働きました。この期間は、実践的な経験を積み、専門スキルを向上させる重要な時間でした。</p><h4><strong>活用したスキルと技術</strong></h4><p>勤務期間中、以下の技術を中心に作業を行いました：</p><ul><li><strong>フロントエンド開発</strong>: HTML、CSS、JavaScript、React.jsに精通し、ユーザーフレンドリーでインタラクティブなインターフェースを作成。</li><li><strong>バックエンド開発</strong>: PHP/LaravelとNode.jsを活用し、拡張性があり堅牢なシステムを構築。</li><li><strong>Linuxシステム</strong>: <strong>Ubuntu 22.04</strong>を使用し、FTPの設定やシステムのパフォーマンスとセキュリティの最適化を実施。</li></ul><h4><strong>主なプロジェクト: VJP Connect</strong></h4><p><strong>VJP Connect</strong>プロジェクトは、ベトナムと日本のパートナーをつなぐプラットフォームです。このプロジェクトで以下の業務を担当しました：</p><ul><li><strong>UI/UX設計と開発</strong>: モダンで滑らか、かつレスポンシブなユーザーインターフェースを提供。</li><li><strong>バックエンド統合</strong>: データ管理やシステム間通信機能の実装をサポート。</li><li><strong>Linuxの最適化</strong>: サーバー環境を維持し、プロジェクトの効率的な運用を確保。</li></ul><h4><strong>この経験のハイライト</strong></h4><ul><li><strong>実践的な体験</strong>: 試用期間中に実際のプロジェクトに参加し、プロフェッショナルな環境での知識の応用を学習。</li><li><strong>継続的な学び</strong>: 経験豊富な同僚の指導のもとで、コーディングスキルやプロジェクト管理スキルを向上。</li><li><strong>責任と所有感</strong>: 高い責任を伴うタスクに取り組み、品質へのコミットメントを強化。</li></ul>', '3', 1, 3, '2025-01-13 08:05:27', '2025-01-13 08:05:27'),
(13, 'PLANINTERNATIONAL', 10, 'assets/images/1736781094_product_4.png', '<p><strong>Thời gian</strong>: <strong>11/2023 - 06/2024</strong><br><strong>Dự án tham gia</strong>: <a href=\"https://plan.w.creativehope.co.jp/\"><strong>PLANINTERNATIONAL</strong></a><br><strong>Vị trí</strong>: Nhân viên thử việc</p><h4><strong>Tóm tắt kinh nghiệm</strong></h4><p>Trong thời gian thử việc tại <strong>VIET JAPAN PARTNER</strong>, em đã có cơ hội tham gia dự án thực tế <strong>PLANINTERNATIONAL</strong>, một nền tảng lớn với quy mô thiết kế lên đến <strong>250 màn hình</strong> từ công cụ Figma. Đây là cơ hội quan trọng giúp em tích lũy kiến thức và kỹ năng chuyên sâu, đồng thời trải nghiệm quá trình phát triển dự án trong môi trường chuyên nghiệp.</p><h4><strong>Kỹ năng và công nghệ đã áp dụng</strong></h4><p><strong>Frontend Development</strong>:</p><ul><li>Sử dụng <strong>HTML</strong>, <strong>CSS</strong>, và <strong>JavaScript</strong> để triển khai các màn hình giao diện từ thiết kế Figma một cách chính xác và tối ưu.</li><li>Tập trung vào trải nghiệm người dùng (UX) và giao diện người dùng (UI) để đảm bảo tính thẩm mỹ và khả năng tương tác cao.</li></ul><p><strong>Backend Development</strong>:</p><ul><li>Làm việc với <strong>PHP</strong> và <strong>WordPress</strong> để xây dựng và quản lý hệ thống nội dung (CMS) mạnh mẽ, đáp ứng nhu cầu của dự án lớn.</li><li>Tích hợp và tối ưu hóa các plugin WordPress để phù hợp với yêu cầu cụ thể.</li></ul><p><strong>Linux System</strong>:</p><ul><li>Quản lý hệ thống và triển khai FTP, đảm bảo quá trình truyền tải và lưu trữ dữ liệu ổn định.</li><li>Bảo trì và tối ưu hóa môi trường máy chủ để hỗ trợ dự án hoạt động hiệu quả.</li></ul><h4><strong>Điểm nổi bật của dự án PLANINTERNATIONAL</strong></h4><p><strong>Quy mô lớn</strong>:</p><ul><li>Với hơn 250 màn hình được thiết kế từ Figma, em đã học được cách làm việc với các dự án phức tạp, yêu cầu sự tỉ mỉ và khả năng phối hợp nhóm cao.</li><li>Hiểu rõ quy trình chuyển đổi từ thiết kế Figma sang mã hóa thực tế, đảm bảo tính chính xác và hiệu suất.</li></ul><p><strong>Học hỏi từ thực tế</strong>:</p><ul><li>Dự án cung cấp cái nhìn sâu sắc về cách vận hành và quản lý một nền tảng quy mô lớn, từ giai đoạn thiết kế đến triển khai và bảo trì.</li><li>Được hướng dẫn bởi các đồng nghiệp giàu kinh nghiệm, giúp em phát triển tư duy logic và khả năng xử lý vấn đề trong dự án thực tế.</li></ul>', '1', 1, 2, '2025-01-13 08:11:34', '2025-01-13 08:11:34'),
(14, 'PLANINTERNATIONAL', 10, 'assets/images/1736781126_product_4.png', '<p><strong>Duration</strong>: <strong>11/2023 - 06/2024</strong><br><strong>Project Involved</strong>: <a href=\"https://plan.w.creativehope.co.jp/\"><strong>PLANINTERNATIONAL</strong></a><br><strong>Position</strong>: Probationary Employee</p><h4><strong>Summary of Experience</strong></h4><p>During my probationary period at <strong>VIET JAPAN PARTNER</strong>, I had the opportunity to work on the <strong>PLANINTERNATIONAL</strong> project, a large-scale platform featuring <strong>250 screens</strong> designed using Figma. This experience allowed me to gain in-depth knowledge and hands-on skills while participating in a professional environment.</p><h4><strong>Skills and Technologies Applied</strong></h4><p><strong>Frontend Development</strong>:</p><ul><li>Utilized <strong>HTML</strong>, <strong>CSS</strong>, and <strong>JavaScript</strong> to implement screens from Figma designs with precision and optimization.</li><li>Focused on delivering excellent user experience (UX) and user interface (UI) with high interactivity and visual appeal.</li></ul><p><strong>Backend Development</strong>:</p><ul><li>Worked with <strong>PHP</strong> and <strong>WordPress</strong> to build and manage a robust content management system (CMS) tailored to the project’s requirements.</li><li>Integrated and optimized WordPress plugins for customized functionality.</li></ul><p><strong>Linux System</strong>:</p><ul><li>Managed system operations and implemented FTP for stable data transmission and storage.</li><li>Maintained and optimized the server environment to ensure the project runs smoothly and efficiently.</li></ul><h4><strong>Highlights of the PLANINTERNATIONAL Project</strong></h4><p><strong>Large-Scale Scope</strong>:</p><ul><li>With over 250 screens designed in Figma, I gained experience in handling complex projects requiring meticulous attention to detail and strong team coordination.</li><li>Learned the complete workflow of transforming Figma designs into functional code, ensuring accuracy and performance.</li></ul><p><strong>Real-World Learning</strong>:</p><ul><li>The project provided valuable insights into managing and operating a large-scale platform, from design to deployment and maintenance.</li><li>Mentorship from experienced colleagues helped me develop logical thinking and problem-solving skills in a real-world project environment.</li></ul>', '2', 1, 2, '2025-01-13 08:12:06', '2025-01-13 08:12:06'),
(15, 'PLANINTERNATIONAL', 10, 'assets/images/1736781174_product_4.png', '<p><strong>期間</strong>: <strong>2023年11月 - 2024年6月</strong><br><strong>参加プロジェクト</strong>: <a href=\"https://plan.w.creativehope.co.jp/\"><strong>PLANINTERNATIONAL</strong></a><br><strong>役職</strong>: 試用期間社員</p><h4><strong>経験の概要</strong></h4><p><strong>VIET JAPAN PARTNER</strong>での試用期間中、<strong>PLANINTERNATIONAL</strong>プロジェクトに参加する機会がありました。このプロジェクトは、Figmaでデザインされた<strong>250以上の画面</strong>を特徴とする大規模なプラットフォームです。この経験を通じて、専門的なスキルを身に付けるだけでなく、プロフェッショナルな環境での実践的な経験も得られました。</p><h4><strong>活用したスキルと技術</strong></h4><p><strong>フロントエンド開発</strong>:</p><ul><li><strong>HTML</strong>、<strong>CSS</strong>、<strong>JavaScript</strong>を使用し、Figmaのデザインを正確かつ効率的に実装。</li><li>高いインタラクティブ性と視覚的魅力を持つ優れたUX/UIを提供することに注力。</li></ul><p><strong>バックエンド開発</strong>:</p><ul><li><strong>PHP</strong>および<strong>WordPress</strong>を活用し、プロジェクトのニーズに合わせた堅牢なコンテンツ管理システム（CMS）を構築および管理。</li><li>WordPressプラグインを統合し、機能を最適化。</li></ul><p><strong>Linuxシステム</strong>:</p><ul><li>システム運用を管理し、FTPを実装して安定したデータ転送とストレージを確保。</li><li>プロジェクトの円滑な運用を支えるため、サーバー環境を維持および最適化。</li></ul><h4><strong>PLANINTERNATIONALプロジェクトのハイライト</strong></h4><p><strong>大規模プロジェクト</strong>:</p><ul><li>Figmaでデザインされた250以上の画面に携わり、細部にまで注意を払い、チームとの連携を強化することで複雑なプロジェクトを扱う経験を積みました。</li><li>Figmaのデザインを機能的なコードに変換する完全なワークフローを学び、正確性とパフォーマンスを確保。</li></ul><p><strong>実践的な学び</strong>:</p><ul><li>設計から展開、保守に至るまで、大規模プラットフォームの管理と運用についての貴重な洞察を得ることができました。</li><li>経験豊富な同僚からの指導により、論理的思考と実際のプロジェクト環境での問題解決スキルを向上。</li></ul>', '3', 1, 2, '2025-01-13 08:12:54', '2025-01-13 08:12:54'),
(16, 'TrySkill.io.vn', 10, 'assets/images/1736782284_project3.png', '<p>TrySkill.io.vn là một nền tảng trực tuyến được phát triển từ tháng 8 năm 2024, nhằm hỗ trợ người dùng rèn luyện và nâng cao ba kỹ năng chính: Lập trình, Tiếng Anh và Tiếng Nhật.</p><p>&nbsp;</p><p><strong>Các tính năng chính của TrySkill.io.vn:</strong></p><p><strong>Ứng dụng thực tiễn:</strong> Cung cấp các bài tập lập trình cùng với thực hành Tiếng Anh và Tiếng Nhật, giúp người dùng áp dụng kiến thức vào thực tế, nâng cao hiệu quả học tập và phát triển bản thân.</p><p>&nbsp;</p><p><strong>Đặt lời nhắc:</strong> Tính năng lời nhắc giúp người dùng quản lý thời gian và công việc hiệu quả hơn, đảm bảo hoàn thành các nhiệm vụ học tập và cá nhân đúng hạn.</p><p>&nbsp;</p><p><strong>Tải bài giảng:</strong> Cho phép tải bài giảng để học mọi lúc, mọi nơi, không lo mất kết nối mạng, giúp việc chinh phục các kỹ năng trở nên dễ dàng hơn.</p><p>&nbsp;</p><p><strong>Quản lý dự án và nhiệm vụ:</strong> Hỗ trợ theo dõi tiến độ học tập và công việc thông qua các công cụ quản lý dự án và nhiệm vụ, giúp người dùng tổ chức và hoàn thành mục tiêu hiệu quả.</p><p>&nbsp;</p><p><strong>Ghi chú và câu hỏi:</strong> Cung cấp không gian để ghi chú và đặt câu hỏi, hỗ trợ quá trình học tập và giải quyết thắc mắc một cách thuận tiện.</p><p>&nbsp;</p><p>Với giao diện thân thiện và các tính năng đa dạng, TrySkill.io.vn là công cụ hữu ích cho những ai muốn phát triển kỹ năng lập trình, Tiếng Anh và Tiếng Nhật một cách toàn diện và hiệu quả.</p>', '1', 1, 1, '2025-01-13 08:31:24', '2025-01-13 08:31:24'),
(17, 'TrySkill.io.vn', 10, 'assets/images/1736782365_project3.png', '<p>TrySkill.io.vn is an online platform developed in August 2024, designed to help users improve and enhance three key skills: <strong>Programming</strong>, <strong>English</strong>, and <strong>Japanese</strong>.</p><p>&nbsp;</p><h4><strong>Main Features of TrySkill.io.vn</strong></h4><p><strong>Practical Application</strong>:<br>Offers programming exercises along with English and Japanese practice to help users apply their knowledge in real-world scenarios, boosting learning efficiency and personal development.</p><p>&nbsp;</p><p><strong>Reminder Setting</strong>:<br>A reminder feature helps users manage time and tasks effectively, ensuring that learning goals and personal tasks are completed on time.</p><p>&nbsp;</p><p><strong>Lecture Downloads</strong>:<br>Allows users to download lectures for offline learning anytime, anywhere, making it easier to conquer new skills without internet access.</p><p>&nbsp;</p><p><strong>Project and Task Management</strong>:<br>Supports tracking of learning progress and tasks through project and task management tools, helping users organize and achieve their goals efficiently.</p><p>&nbsp;</p><p><strong>Notes and Q&amp;A</strong>:<br>Provides space for taking notes and asking questions, supporting a seamless learning process and resolving doubts conveniently.</p><p>&nbsp;</p><p>With a user-friendly interface and a variety of features, TrySkill.io.vn is a valuable tool for those looking to comprehensively and effectively develop skills in programming, English, and Japanese.</p>', '2', 1, 1, '2025-01-13 08:32:45', '2025-01-13 08:32:45'),
(18, 'TrySkill.io.vn', 10, 'assets/images/1736782400_project3.png', '<p>TrySkill.io.vnは2024年8月に開発されたオンラインプラットフォームで、ユーザーが<strong>プログラミング</strong>、<strong>英語</strong>、<strong>日本語</strong>の3つの主要スキルを向上・強化できるように設計されています。</p><h4><strong>TrySkill.io.vnの主な特徴</strong></h4><p><strong>実践的な学習</strong>:<br>プログラミング演習と英語・日本語の練習を提供し、知識を実際のシナリオで活用することで、学習効率と自己成長を促進します。</p><p><strong>リマインダー機能</strong>:<br>リマインダー機能により、時間とタスクを効率的に管理でき、学習目標や個人のタスクを期限内に達成することをサポートします。</p><p><strong>講義のダウンロード</strong>:<br>講義をダウンロードして、いつでもどこでもオフラインで学習できるようにし、インターネット接続がなくてもスキル習得を容易にします。</p><p><strong>プロジェクトとタスク管理</strong>:<br>プロジェクトとタスク管理ツールを通じて学習進捗とタスクを追跡し、目標を効率的に組織化・達成できるようにサポートします。</p><p><strong>ノートとQ&amp;A</strong>:<br>ノートを取ったり質問したりするスペースを提供し、学習プロセスをスムーズにし、疑問を便利に解消します。</p><p>ユーザーフレンドリーなインターフェースと多彩な機能を備えたTrySkill.io.vnは、プログラミング、英語、日本語のスキルを包括的かつ効果的に向上させたい人にとって価値のあるツールです。</p>', '3', 1, 1, '2025-01-13 08:33:20', '2025-01-13 08:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `project_user`
--

CREATE TABLE `project_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 3, 'Bạn đang làm việc nhóm trong một dự án phát triển web. Một đồng nghiệp của bạn quên cập nhật thông tin trong hệ thống quản lý công việc khiến bạn bị trễ tiến độ. Là trưởng nhóm, bạn sẽ xử lý tình huống này như thế nào?', 'Trong tình huống này, tôi sẽ không đổ lỗi cho đồng nghiệp mà thay vào đó, tôi sẽ trao đổi trực tiếp để hiểu rõ nguyên nhân vì sao không cập nhật được thông tin. Sau đó, tôi sẽ đề xuất giải pháp để đảm bảo không lặp lại tình huống này, ví dụ như đề nghị họ cập nhật thông tin thường xuyên hơn hoặc cung cấp hỗ trợ nếu cần thiết. Điều quan trọng là giải quyết vấn đề mà không làm tổn thương tinh thần làm việc của cả nhóm.', '2024-10-07 09:03:58', '2024-10-07 09:03:58'),
(2, 3, 'Khách hàng Nhật Bản yêu cầu bạn cập nhật một tính năng nhỏ trên website. Tuy nhiên, sau khi thực hiện yêu cầu, họ đưa ra thêm nhiều yêu cầu khác mà không có trong kế hoạch ban đầu.\r\nBạn sẽ làm gì để quản lý yêu cầu phát sinh và đảm bảo dự án không bị trễ hạn?', '1. Trao đổi với Pm\r\n- Tôi sẽ báo cáo lại với người quản lý về yêu cầu mới, đồng thời ước tính thời gian hoàn thành các yêu cầu mới.\r\n2.Xác định độ ưu tiên \r\n- Đầu tiên tôi sẽ hỏi khách hàng rằng đây có phải là yêu câu quan trọng hay không.Nếu có tôi sẽ thảo luận với họ về việc điều chỉnh lịch trình hoặc phân bổ thời gian cho phù hợp để không ảnh hướng đến dealine chung của dự án\r\n3. Điều chỉnh phạm vi công việc\r\n- Vì những yêu cầu này không nằm trong kế hoạch ban đầu. Tôi sẽ giải thích rõ với khách hàng về sự cần thiết của việc mở rộng phạm vi công việc và thời gian thực hiện. Điều này làm tranh chậm trễ do khối lượng công việc tăng lên.', '2024-10-19 20:44:41', '2024-10-19 20:44:41'),
(3, 3, 'Khách hàng Nhật Bản đã phê duyệt bản thiết kế giao diện, nhưng sau khi phát triển gần xong, họ lại muốn thay đổi toàn bộ giao diện theo phong cách mới. Bạn sẽ làm gì để xử lý tình huống này mà không ảnh hưởng đến thời hạn bàn giao dự án?', 'Đầu tiên em sẽ báo lại với người quản lý về yêu câu thay đổi giao diện mới của khách hàng, giải thích tình huống và mức độ tác động đến tiến độ của dự án.<br/>\r\nSau đó tôi sẽ kết hợp với nhóm để ược lượng thời gian và tài nguyên cần thiết cho việc thay đổi công việc theo phong cách mới.<br/>\r\nVì đây là yêu cầu mới Tôi sẽ tôi sẽ trình bày với khách hàng về thời gian thực hiện và nguồn lực cần thiết để hoàn thành yêu cầu. Đồng thời tôi sẽ xác đinh với khách hàng yêu cầu này phải là yêu cầu ưu tiên nhất hay không và liệu có thể kéo dài thời gian bàn giao hoặc phân bổ công việc thành các giai đoạn nhỏ hơn Không. <br/>\r\nTrong trường hợp không thể thay đổi thời gian bàn giao tôi sẽ cùng khách hàng và người quản lý thảo luận để tìm ra giải pháp thay thế <br/>\r\n- Điều chỉnh phạm vi yêu cầu mới<br/>\r\n- Tập trung vào các giao diện quan trọng để không làm chậm trễ tiến độ dự án chung.', '2024-10-19 21:10:27', '2024-10-19 21:10:27'),
(4, 3, 'Trong một dự án, hai thành viên trong nhóm của bạn liên tục có sự khác biệt về cách tiếp cận vấn đề và không đồng ý với các đề xuất của nhau. Điều này ảnh hưởng đến tiến độ công việc chung và gây ra xung đột trong nhóm.\r\nCâu hỏi: Bạn sẽ làm gì để giải quyết sự khác biệt và xung đột giữa hai nhân sự mà vẫn đảm bảo tiến độ dự án không bị ảnh hưởng?', 'Đầu tiên em sẽ tổ chức một cuộc họp với 2 thành viên để hiểu rõ mức độ xung đột đến tiến độ của dự án. Trong cuộc hợp em sẽ nêu rõ tầm quang trọng của làm việc nhóm và những hậu quả tiêu cực có thể xảy ra nếu xung đột kéo dài. <br/>\r\nSau đó, sẽ tạo cơ hội để chia sẽ quan điểm và cách tiếp cận của mình bằng cách lắng nghe và hiểu rõ nguyên nhân của sự khác biệt và từ đó xác định được cách tiếp cận phù hợp nhất để đạt được mục tiêu. <br/>\r\nTiếp theo tôi sẽ cố gắng hướng đến mục tiêu chung để tìm ra giải pháp trung hòa và phối hợp với 2 cách tiếp cận để đưa ra cách tiếp cận tốt và hướng mọi người đến mục tiêu chung để không bị trễ dealine đến tiến dộ của công việc', '2024-10-19 21:32:53', '2024-10-19 21:32:53'),
(5, 3, 'Dự án đã gần hoàn thành và bạn đang trong giai đoạn kiểm thử, nhưng khách hàng bất ngờ yêu cầu tích hợp thêm tính năng thanh toán quốc tế mà không có trong phạm vi công việc ban đầu. Bạn sẽ thảo luận với khách hàng và PM như thế nào để quản lý yêu cầu này?', 'Đầu tiên, tôi sẽ thông báo ngay cho PM về yêu cầu bất ngờ của khách hàng liên quan đến việc tích hợp tính năng thanh toán quốc tế. Tôi sẽ cùng PM thảo luận để tìm ra giải pháp tốt nhất cho tình huống này, bao gồm việc đánh giá mức độ phức tạp và tác động của yêu cầu mới đến dự án.<br/>\r\nTiếp theo, tôi sẽ ước lượng thời gian và tài nguyên cần thiết để hoàn thành tích hợp tính năng mới này. Điều này bao gồm việc phân tích các yêu cầu kỹ thuật, thiết kế và lập trình liên quan đến tính năng thanh toán quốc tế.<br/>\r\nSau khi có ước lượng, tôi sẽ báo cáo lại với khách hàng về thời gian thực hiện dự kiến. Tôi cũng sẽ giải thích rằng việc thêm tính năng này sẽ yêu cầu thêm thời gian so với kế hoạch ban đầu và thảo luận với họ về sự cần thiết cũng như mức độ ưu tiên của tính năng này trong bối cảnh dự án hiện tại. Nếu khách hàng xác nhận tính năng này là quan trọng, tôi sẽ đề nghị điều chỉnh thời gian bàn giao hoặc tìm giải pháp tạm thời để đảm bảo tiến độ của dự án không bị ảnh hưởng.', '2024-10-19 21:59:31', '2024-10-19 21:59:31'),
(6, 3, 'Một thành viên trong nhóm thường xuyên phớt lờ hoặc không chấp nhận những phản hồi từ đồng nghiệp và cấp trên. Điều này gây khó khăn trong việc cải thiện chất lượng công việc và làm giảm hiệu suất chung của nhóm.\r\nCâu hỏi: Bạn sẽ xử lý tình huống này như thế nào để giúp thành viên đó tiếp thu phản hồi và cải thiện chất lượng công việc của mình?', 'Tôi sẽ sắp xếp một cuộc trò chuyện riêng với thành viên đó để thảo luận về việc không tiếp thu phản hồi. Tôi sẽ tạo không khí thân thiện, để họ cảm thấy thoải mái chia sẻ ý kiến và cảm xúc của mình.<br/>\r\nrong cuộc trò chuyện, tôi sẽ lắng nghe thành viên đó để hiểu rõ lý do họ không chấp nhận phản hồi. Có thể họ cảm thấy thiếu hỗ trợ, hoặc có vấn đề cá nhân không liên quan đến công việc. Việc hiểu rõ nguyên nhân sẽ giúp tôi tìm ra cách giải quyết hiệu quả hơn.<br>\r\nTôi sẽ khuyến khích thành viên đó thường xuyên yêu cầu phản hồi từ đồng nghiệp và cấp trên. Bằng cách tạo thói quen này, họ sẽ dần nhận ra giá trị của phản hồi và cảm thấy thoải mái hơn khi tiếp nhận.<br/>\r\nCuối cùng, tôi sẽ giúp thành viên đó đặt ra các mục tiêu cụ thể để cải thiện chất lượng công việc, đồng thời theo dõi tiến bộ của họ trong việc tiếp thu phản hồi. Tôi cũng sẽ khuyến khích họ chia sẻ những khó khăn gặp phải trong quá trình thực hiện để có thể hỗ trợ kịp thời.', '2024-10-19 22:03:02', '2024-10-19 22:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_items`
--

CREATE TABLE `quiz_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_a` varchar(255) NOT NULL,
  `answer_b` varchar(255) NOT NULL,
  `answer_c` varchar(255) NOT NULL,
  `answer_d` varchar(255) NOT NULL,
  `answer_correct` char(1) NOT NULL,
  `total_wrong` int(11) NOT NULL DEFAULT 0,
  `total_answers` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz_items`
--

INSERT INTO `quiz_items` (`id`, `language_id`, `category_id`, `question`, `answer_a`, `answer_b`, `answer_c`, `answer_d`, `answer_correct`, `total_wrong`, `total_answers`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '1. Câu: Từ 「名前」 có nghĩa là gì?', 'A. Công việc', 'B. Tên', 'C. Quê hương', 'D. Sở thích', 'B', 0, 0, '2024-10-06 07:01:24', '2024-10-06 07:26:42'),
(2, 3, 1, '1. Câu: Từ 「名前」 có nghĩa là gì?', 'A. Công việc', 'B. Tên', 'C. Quê hương a', 'D. Sở thích a', 'B', 0, 0, '2024-12-05 09:53:34', '2024-12-05 09:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `correct_answers` int(11) NOT NULL,
  `wrong_answers` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `category_id`, `correct_answers`, `wrong_answers`, `created_at`, `updated_at`, `language_id`) VALUES
(1, 10, 5, 2, 0, '2024-12-17 06:24:38', '2024-12-17 06:24:38', 3);

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_create` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `current_time_start` time NOT NULL,
  `current_time_end` time NOT NULL,
  `total_working_time` varchar(255) NOT NULL,
  `total_overtime` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `full_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `user_id`, `name`, `date_create`, `description`, `current_time_start`, `current_time_end`, `total_working_time`, `total_overtime`, `created_at`, `updated_at`, `full_date`) VALUES
(12, 10, 'Phan Tuấn Kiệt', '2024-12-19', 'Làm việc tại công ty', '08:00:00', '17:10:00', '8 giờ 0 phút', '0 giờ 0 phút', '2024-12-18 21:38:47', '2024-12-18 21:38:47', NULL),
(13, 10, 'Phan Tuấn Kiệt', '2024-12-20', 'Test các màn hình còn lại', '08:00:00', '17:10:00', '8 giờ 0 phút', '0 giờ 0 phút', '2024-12-20 00:43:24', '2024-12-20 00:43:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `setting` int(11) NOT NULL DEFAULT 0,
  `issue` int(11) NOT NULL DEFAULT 0,
  `chat` int(11) NOT NULL DEFAULT 0,
  `posts` int(11) NOT NULL DEFAULT 0,
  `task` int(11) NOT NULL DEFAULT 0,
  `workflow` int(11) NOT NULL DEFAULT 0,
  `salary` int(11) NOT NULL DEFAULT 0,
  `expense` int(11) NOT NULL DEFAULT 0,
  `add_japanese` int(11) NOT NULL DEFAULT 0,
  `japanese` int(11) NOT NULL DEFAULT 0,
  `learn_japanese` int(11) NOT NULL DEFAULT 0,
  `add_english` int(11) NOT NULL DEFAULT 0,
  `english` int(11) NOT NULL DEFAULT 0,
  `learn_english` int(11) NOT NULL DEFAULT 0,
  `question` int(11) NOT NULL DEFAULT 0,
  `word` int(11) NOT NULL DEFAULT 0,
  `excel` int(11) NOT NULL DEFAULT 0,
  `test_code` int(11) NOT NULL DEFAULT 0,
  `component` int(11) NOT NULL DEFAULT 0,
  `color` int(11) NOT NULL DEFAULT 0,
  `html` int(11) NOT NULL DEFAULT 0,
  `js` int(11) NOT NULL DEFAULT 0,
  `vue` int(11) NOT NULL DEFAULT 0,
  `react` int(11) NOT NULL DEFAULT 0,
  `jquery` int(11) NOT NULL DEFAULT 0,
  `angular` int(11) NOT NULL DEFAULT 0,
  `php` int(11) NOT NULL DEFAULT 0,
  `laravel` int(11) NOT NULL DEFAULT 0,
  `node` int(11) NOT NULL DEFAULT 0,
  `cshap` int(11) NOT NULL DEFAULT 0,
  `java` int(11) NOT NULL DEFAULT 0,
  `javascript` int(11) NOT NULL DEFAULT 0,
  `ftp` int(11) NOT NULL DEFAULT 0,
  `ubuntu` int(11) NOT NULL DEFAULT 0,
  `mysql` int(11) NOT NULL DEFAULT 0,
  `sqlsever` int(11) NOT NULL DEFAULT 0,
  `mongo` int(11) NOT NULL DEFAULT 0,
  `mysqlworkbench` int(11) NOT NULL DEFAULT 0,
  `postgreSQL` int(11) NOT NULL DEFAULT 0,
  `error` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `setting`, `issue`, `chat`, `posts`, `task`, `workflow`, `salary`, `expense`, `add_japanese`, `japanese`, `learn_japanese`, `add_english`, `english`, `learn_english`, `question`, `word`, `excel`, `test_code`, `component`, `color`, `html`, `js`, `vue`, `react`, `jquery`, `angular`, `php`, `laravel`, `node`, `cshap`, `java`, `javascript`, `ftp`, `ubuntu`, `mysql`, `sqlsever`, `mongo`, `mysqlworkbench`, `postgreSQL`, `error`, `created_at`, `updated_at`) VALUES
(1, 3, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2024-12-18 20:41:21'),
(2, 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2024-12-07 09:42:58'),
(3, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(4, 12, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2024-12-17 18:15:12', '2024-12-17 18:20:28'),
(5, 13, 0, 1, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2024-12-17 18:50:52', '2024-12-18 00:54:13'),
(6, 15, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2024-12-18 20:58:26'),
(7, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2024-12-18 21:07:39', '2024-12-18 21:07:39'),
(8, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2024-12-23 23:35:10', '2024-12-23 23:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `structures`
--

CREATE TABLE `structures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `structure` varchar(255) NOT NULL,
  `meaning_of_structure` varchar(255) NOT NULL,
  `example` varchar(255) NOT NULL,
  `meaning_of_example` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `current_start` date DEFAULT NULL,
  `status` enum('open','doing','testing','done') NOT NULL DEFAULT 'open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `name`, `description`, `current_start`, `status`, `created_at`, `updated_at`) VALUES
(37, 10, 'Học thêm kiến thức mới', '<p>Đừng làm phiền tôi nửa</p><p>&nbsp;</p>', '2024-12-20', 'done', '2024-12-19 00:14:59', '2024-12-23 23:55:37'),
(38, 10, 'Chỉnh sửa giao diện login layout', '<ul><li>Hoàn thành chỉnh sửa&nbsp;</li></ul>', '2024-12-25', 'open', '2024-12-23 23:53:44', '2024-12-23 23:53:44'),
(39, 10, 'Chỉnh sửa form register', '<p>CHỉnh sửa giao diện mới!</p>', '2024-12-25', 'doing', '2024-12-23 23:54:14', '2024-12-23 23:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `task_projects`
--

CREATE TABLE `task_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `assignees` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `start_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `complete` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `status` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `category_id`, `user_id`, `name`, `description`, `date_start`, `date_end`, `status`, `created_at`, `updated_at`) VALUES
(4, 26, 3, 'Học 1 bài tiếng nhật [A-Phan Tuấn Kiệt ]', '<p>Sẽ học theo lộ tr&igrave;nh tiếng nhật đ&atilde; đề ra sẳn v&agrave; c&oacute; thể l&agrave;m th&ecirc;m danh s&aacute;ch lộ tr&igrave;nh l&agrave;m việc a</p>', '2024-09-06', '2024-09-10', 1, '2024-09-27 19:27:45', '2024-09-27 19:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT '0',
  `roles` varchar(255) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `image`, `email_verified_at`, `password`, `phone`, `gender`, `roles`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Phan Tuấn Kiệt', 'tuankiet20@gmail.com', NULL, NULL, '$2y$10$2abpg9G68h5HhUZtLtrrgeWAjG2bZDu7FP3hWHKTjhmvnNyp/erWm', 768173369, '0', '1', '', NULL, '2024-09-24 18:14:17', '2024-12-18 02:38:16'),
(8, 'Đoàn Thi Thu Trang', 'thutrang10@gmail.com', NULL, NULL, '$2y$10$7tewKetIpyeAFNWRJCwVyOKxsGARXbbgTmIzLir2/DFuu0c5Dc4F2', 837230102, '1', '1', '', NULL, '2024-10-26 09:50:05', '2024-11-11 10:14:18'),
(9, 'Phan Duy Linh', 'duylinksky@gmail.com', NULL, NULL, '$2y$10$weWDhzZHKxh.6QZHoBI0SOUkY5YCnZ1QulAmeieXNKO/TpWP/8FXy', 989392900, '0', '1', '', NULL, '2024-10-26 09:52:56', '2024-11-11 10:16:20'),
(10, 'Phan Tuấn Kiệt', 'phantuankietIT@gmail.com', 'assets/images/1734680143_public.jpg', NULL, '$2y$10$7sChYZPI0hQAmJW2nxtc1ezhRdIhmFV3WXP9iDA6fnPgVVNdILQ/y', 768173369, 'Nam', '1', 'Bến Tre', NULL, '2024-11-07 07:43:23', '2024-12-20 00:35:43'),
(11, 'Nguyễn Văn Linh', 'vanlinh@gmail.com', NULL, NULL, '$2y$10$wlYDdoSxyR8zXYcIpORLXezMthKti8hLe6Z7JdNFn7JNmo98OQuu.', 906942655, 'Haha', '1', 'ha tinh', NULL, '2024-11-12 07:34:05', '2024-11-12 07:34:58'),
(12, 'Trần Minh Thuận', 'trminhthuan28@gmail.com', NULL, NULL, '$2y$10$B3LTpGHKM4dFkR9xncTtT.NKOOTcQHjpcsEttotC7P3zwSRDclZem', 335279851, 'Nam', '1', 'Ho Chi Minh City, Ho Chi Minh City, Vietnam', NULL, '2024-12-17 18:15:12', '2024-12-17 18:15:12'),
(13, 'Lê Quang Huy', 'lequanghuyy0312a@gmail.com', NULL, NULL, '$2y$10$M0jPkFk1iDJoleD5GjPYkOLgJzW2cYoElDUmim.9pmIwKmCc0LBd.', 969140931, 'Nam', '1', 'Long Hậu', NULL, '2024-12-17 18:50:52', '2024-12-17 18:50:52'),
(15, 'Phan van A', 'testa@gmail.com', NULL, NULL, '$2y$10$DTzgo3r8mWyfI4ndm0VgpemNtY7NkHrvLJxLGyDqNhitXMmN4c6Rq', 98928192, 'Nam', '1', 'Hauhya', NULL, '2024-12-18 20:55:43', '2024-12-18 20:58:01'),
(16, 'Ohsake', 'hocba@gmail.com', NULL, NULL, '$2y$10$yU7g.iiJ/lVGam0mi2KJc.ZFDu/Ue1w.vJjOq1LGiBvzcqkVxdOBG', 906942655, 'sdsdsad', '0', 'ha tinh', NULL, '2024-12-18 21:01:39', '2024-12-18 21:01:39'),
(17, 'Phan Tuan Kiet', 'autopages@gmail.com', NULL, NULL, '$2y$10$dAY/LyIscOZuK.JaVjPcPOGgGegtHe0GN6/ru.TeuIe22VaGIaQhW', 98223989, 'Nam', '0', 'ha tinh', NULL, '2024-12-18 21:07:39', '2024-12-18 21:07:39'),
(18, 'Phan Thanh Tú', 'thanhtu@gmail.com', NULL, NULL, '$2y$10$tIit6xWkHo/YAQb0LbjmH.4R5ci05/35f0unpbljO5ONh3S5RsNLy', 989382890, 'Nam', '0', 'Đại học tài chính', NULL, '2024-12-23 23:35:10', '2024-12-23 23:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `vocabularies`
--

CREATE TABLE `vocabularies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `meaning_of_word` varchar(255) NOT NULL,
  `romaji` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workflows`
--

CREATE TABLE `workflows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `current_start` date DEFAULT NULL,
  `status` enum('open','doing','testing','done') NOT NULL DEFAULT 'open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workflows`
--

INSERT INTO `workflows` (`id`, `user_id`, `name`, `description`, `current_start`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Học tiếng nhật', '<p>b&agrave;i 1, b&agrave;i 2, b&agrave;i 3, ngữ ph&aacute;p + giới thiệu về bản th&acirc;n</p>', '2024-10-16', 'open', '2024-10-15 07:48:54', '2024-10-19 12:30:54'),
(2, 3, 'Học tiếng anh', '<p>Học từ 1 b&agrave;i từ vựng tiếng anh, sau đ&oacute; soạn một b&agrave;i giới thiệu bản th&acirc;n.</p>\r\n\r\n<pre>\r\n- 1 b&agrave;i đọc </pre>\r\n\r\n<pre>\r\n- 1 b&agrave;i từ vựng bao gồm 30 từ </pre>\r\n\r\n<pre>\r\n- 20 c&acirc;u ngữ ph&aacute;p c&oacute; trong b&agrave;i giới thiệu</pre>\r\n\r\n<pre>\r\n- 30 c&acirc;u test giữa từ vựng v&agrave; tiếng anh</pre>', '2024-10-16', 'open', '2024-10-15 08:06:01', '2024-10-15 08:06:01'),
(3, 3, 'create message', '<pre>\r\n- Tạo giao diện message \r\n- Th&ecirc;m chức năng đăng\r\n- Th&ecirc;m về chức năng th&ecirc;m bạn b&egrave; của facebook</pre>', '2024-10-16', 'open', '2024-10-15 08:11:31', '2024-10-15 08:11:31'),
(4, 3, 'Báo cáo công việc', '<pre>\r\n- Tạo Salary trước 10h t&ocirc;i\r\n- Th&ecirc;m th&ocirc;ng tin đi l&agrave;m\r\n- Nhiệm vụ đ&atilde; l&agrave;m \r\n- Nhiệm vụ c&ograve;n thiếu s&oacute;t</pre>', '2024-10-16', 'open', '2024-10-15 08:13:23', '2024-10-15 08:13:23'),
(5, 3, 'Chi tiêu cho ngày', '<pre>\r\n- Nhập chi ti&ecirc;u cho ng&agrave;y\r\n- Tổng số chi ti&ecirc;u trong tuần\r\n- Kiểm tra lại th&ocirc;ng tin</pre>', '2024-10-16', 'open', '2024-10-15 08:15:09', '2024-10-15 08:15:09'),
(6, 3, 'Tạo trang Cv', '<p>- Tạo trang CV với html css javascript</p>\r\n\r\n<p>- T&igrave;m hiểu c&aacute;ch đownload pdf với CV html</p>\r\n\r\n<p>- T&igrave;m c&aacute;ch lữ liệu CV v&agrave;o đa ta</p>', '2024-10-16', 'open', '2024-10-15 08:18:28', '2024-10-15 08:18:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `category_languages`
--
ALTER TABLE `category_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_tasks`
--
ALTER TABLE `category_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`user_id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codes_user_id_foreign` (`user_id`),
  ADD KEY `codes_category_id_foreign` (`category_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colors_user_id_foreign` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_issue_id_foreign` (`issue_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `comment_issues`
--
ALTER TABLE `comment_issues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_issues_user_id_foreign` (`user_id`),
  ADD KEY `comment_issues_issue_id_foreign` (`issue_id`),
  ADD KEY `comment_issues_assignee_id_foreign` (`assignee_id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`),
  ADD KEY `components_user_id_foreign` (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_user_id_foreign` (`user_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friendships`
--
ALTER TABLE `friendships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friendships_user_id_foreign` (`user_id`),
  ADD KEY `friendships_friend_id_foreign` (`friend_id`);

--
-- Indexes for table `future_directions`
--
ALTER TABLE `future_directions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `future_directions_user_id_foreign` (`user_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_user`
--
ALTER TABLE `group_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_user_group_id_foreign` (`group_id`),
  ADD KEY `group_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ideas_user_id_foreign` (`user_id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issues_user_id_foreign` (`user_id`),
  ADD KEY `issues_category_id_foreign` (`category_id`),
  ADD KEY `issues_group_id_foreign` (`group_id`),
  ADD KEY `issues_assigned_to_foreign` (`assigned_to`);

--
-- Indexes for table `issue_images`
--
ALTER TABLE `issue_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issue_images_user_id_foreign` (`user_id`),
  ADD KEY `issue_images_issue_id_foreign` (`issue_id`);

--
-- Indexes for table `issue_users`
--
ALTER TABLE `issue_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issue_users_issue_id_foreign` (`issue_id`),
  ADD KEY `issue_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `javascripts`
--
ALTER TABLE `javascripts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `javascripts_user_id_foreign` (`user_id`),
  ADD KEY `javascripts_category_id_foreign` (`category_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learn_mores`
--
ALTER TABLE `learn_mores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `learn_mores_user_id_foreign` (`user_id`),
  ADD KEY `learn_mores_language_id_foreign` (`language_id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `links_user_id_foreign` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_user_id_foreign` (`user_id`);

--
-- Indexes for table `paragraphs`
--
ALTER TABLE `paragraphs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paragraphs_category_id_foreign` (`category_id`),
  ADD KEY `paragraphs_language_id_foreign` (`language_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_comments_post_id_foreign` (`post_id`),
  ADD KEY `post_comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_images_post_id_foreign` (`post_id`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_likes_post_id_foreign` (`post_id`),
  ADD KEY `post_likes_user_id_foreign` (`user_id`);

--
-- Indexes for table `problem_processes`
--
ALTER TABLE `problem_processes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `problem_processes_user_id_foreign` (`user_id`);

--
-- Indexes for table `professional_education`
--
ALTER TABLE `professional_education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professional_education_user_id_foreign` (`user_id`);

--
-- Indexes for table `professional_skills`
--
ALTER TABLE `professional_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professional_skills_user_id_foreign` (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `profile_experiences`
--
ALTER TABLE `profile_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_experiences_user_id_foreign` (`user_id`);

--
-- Indexes for table `profile_hobbies`
--
ALTER TABLE `profile_hobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_hobbies_user_id_foreign` (`user_id`);

--
-- Indexes for table `profile_languages`
--
ALTER TABLE `profile_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_languages_user_id_foreign` (`user_id`);

--
-- Indexes for table `profile_objectives`
--
ALTER TABLE `profile_objectives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_objectives_user_id_foreign` (`user_id`);

--
-- Indexes for table `profile_projects`
--
ALTER TABLE `profile_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_projects_user_id_foreign` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_homes`
--
ALTER TABLE `project_homes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_homes_user_id_foreign` (`user_id`);

--
-- Indexes for table `project_user`
--
ALTER TABLE `project_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_user_project_id_foreign` (`project_id`),
  ADD KEY `project_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_user_id_foreign` (`user_id`);

--
-- Indexes for table `quiz_items`
--
ALTER TABLE `quiz_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_items_language_id_foreign` (`language_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_user_id_foreign` (`user_id`),
  ADD KEY `results_category_id_foreign` (`category_id`),
  ADD KEY `results_language_id_foreign` (`language_id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salaries_user_id_foreign` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_user_id_foreign` (`user_id`);

--
-- Indexes for table `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `structures_language_id_foreign` (`language_id`),
  ADD KEY `structures_category_id_foreign` (`category_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_foreign` (`user_id`);

--
-- Indexes for table `task_projects`
--
ALTER TABLE `task_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_projects_project_id_foreign` (`project_id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `todos_category_id_foreign` (`category_id`),
  ADD KEY `todos_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vocabularies`
--
ALTER TABLE `vocabularies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vocabularies_category_id_foreign` (`category_id`),
  ADD KEY `vocabularies_language_id_foreign` (`language_id`);

--
-- Indexes for table `workflows`
--
ALTER TABLE `workflows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workflows_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `category_languages`
--
ALTER TABLE `category_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `category_tasks`
--
ALTER TABLE `category_tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment_issues`
--
ALTER TABLE `comment_issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friendships`
--
ALTER TABLE `friendships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `future_directions`
--
ALTER TABLE `future_directions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `group_user`
--
ALTER TABLE `group_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `issue_images`
--
ALTER TABLE `issue_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `issue_users`
--
ALTER TABLE `issue_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `javascripts`
--
ALTER TABLE `javascripts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `learn_mores`
--
ALTER TABLE `learn_mores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paragraphs`
--
ALTER TABLE `paragraphs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `problem_processes`
--
ALTER TABLE `problem_processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professional_education`
--
ALTER TABLE `professional_education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `professional_skills`
--
ALTER TABLE `professional_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profile_experiences`
--
ALTER TABLE `profile_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile_hobbies`
--
ALTER TABLE `profile_hobbies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile_languages`
--
ALTER TABLE `profile_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile_objectives`
--
ALTER TABLE `profile_objectives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profile_projects`
--
ALTER TABLE `profile_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_homes`
--
ALTER TABLE `project_homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `project_user`
--
ALTER TABLE `project_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quiz_items`
--
ALTER TABLE `quiz_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `structures`
--
ALTER TABLE `structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `task_projects`
--
ALTER TABLE `task_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vocabularies`
--
ALTER TABLE `vocabularies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workflows`
--
ALTER TABLE `workflows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `codes`
--
ALTER TABLE `codes`
  ADD CONSTRAINT `codes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `codes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `colors`
--
ALTER TABLE `colors`
  ADD CONSTRAINT `colors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_issue_id_foreign` FOREIGN KEY (`issue_id`) REFERENCES `issues` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `components`
--
ALTER TABLE `components`
  ADD CONSTRAINT `components_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_homes`
--
ALTER TABLE `project_homes`
  ADD CONSTRAINT `project_homes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_user`
--
ALTER TABLE `project_user`
  ADD CONSTRAINT `project_user_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `task_projects`
--
ALTER TABLE `task_projects`
  ADD CONSTRAINT `task_projects_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
