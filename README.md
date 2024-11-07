-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2024 lúc 06:00 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `app_todo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
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
-- Đang đổ dữ liệu cho bảng `categories`
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
(34, 10, 'Profile-Me', 3, 1, '2024-11-07 09:36:19', '2024-11-07 09:36:19'),
(35, 10, 'ES', 3, 1, '2024-11-07 09:36:31', '2024-11-07 09:36:31'),
(36, 10, 'Mong-Co', 3, 1, '2024-11-07 09:36:46', '2024-11-07 09:36:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_tasks`
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

--
-- Đang đổ dữ liệu cho bảng `category_tasks`
--

INSERT INTO `category_tasks` (`id`, `user_id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(26, 3, 'Học tiếng nhật', 'Bao gồm học một bài tiếng nhật với 4 kỹ năng', 1, '2024-09-27 19:26:33', '2024-09-27 19:26:33'),
(27, 3, 'Học tiếng anh', 'Mục đích thi toeic 4 kỹ năng', 1, '2024-09-27 19:35:43', '2024-09-27 19:35:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `codes`
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
-- Đang đổ dữ liệu cho bảng `codes`
--

INSERT INTO `codes` (`id`, `user_id`, `category_id`, `name`, `description`, `image`, `code`, `link`, `created_at`, `updated_at`) VALUES
(1, 3, 25, 'Login Page Tutorial (HTML & CSS)', '<pre>\r\n@import url(&#39;https://fonts.googleapis.com/css2?family=Poppins:wght@300&amp;family=Roboto:wght@300&amp;display=swap&#39;);\r\n* {\r\n    padding: 0;\r\n    margin: 0;\r\n    box-sizing: border-box;\r\n}\r\nbody{\r\n    background: -webkit-linear-gradient(bottom, #0250c5, #d43f8d);\r\n    background-image: -webkit-linear-gradient(bottom, rgb(2,80,197), rgb(212,63,141));\r\n    background-attachment: fixed;\r\n    background-repeat: no-repeat;\r\n    font-family: &quot;Poppins&quot;, cursive;\r\n    cursor: pointer;\r\n}\r\n\r\nform{\r\n    width: 450px;\r\n    min-height: 500px;\r\n    height: auto;\r\n    border-radius: 5px;\r\n    margin: 2% auto;\r\n    box-shadow: 0 9px 50px hsla(20, 67%, 75%,0.31);\r\n    padding: 2%;\r\n    background-image: linear-gradient(-225deg,#ffbf00 50%,#6495ed 50%);\r\n\r\n}\r\n\r\nform .icon{\r\n    display: -webkit-flex;\r\n    display: flex;\r\n    -webkit-justify-content: space-around;\r\n    justify-content: space-around;\r\n    -webkit-flex-wrap: wrap;\r\n    flex-wrap: wrap;\r\n    margin: 0 auto;\r\n}\r\nheader{\r\n    margin: 2% auto 10% auto;\r\n    text-align: center;\r\n}\r\nheader h2{\r\n    font-size: 250%;\r\n    font-family: &quot;Poppins&quot;, sans-serif;\r\n    color: #000;\r\n}\r\nheader p{\r\n    letter-spacing: 0.05em;\r\n}\r\n.input-item{\r\n    background: #fff;\r\n    color: #333;\r\n    padding: 14.5px 0px 15px 9px;\r\n    border-radius: 5px 0px 0px 5px;\r\n}\r\n#eye{\r\n    background: #fff;\r\n    color: #333;\r\n    margin: 5.9px 0 0 0;\r\n    margin-left: -20px;\r\n    padding: 15px 9px 19px 0px;\r\n    border-radius: 0px 5px 5px 0px;\r\n    float: right;\r\n    position: relative;\r\n    right: 1%;\r\n    top: -.2%;\r\n    z-index: 5;\r\n    cursor: pointer;\r\n}\r\ninput[class=&quot;form-input&quot;]{\r\n    width: 240px;\r\n    height: 50px;\r\n    margin-top: 2%;\r\n    padding: 15px;\r\n    font-size: 16px;\r\n    font-family: &#39;Poppins&#39;,sans-serif;\r\n    color: #5e6472;\r\n    outline: none;\r\n    border: none;\r\n    border-radius: 0px 5px 5px 0px;\r\n    transition: 0.2s linear;\r\n}\r\ninput[id=&quot;txt-input&quot;]{\r\n    width: 250px;\r\n}\r\ninput:focus{\r\n    transform: translateX(-2px);\r\n    border-radius: 5px;\r\n}\r\nbutton{\r\n    display: inline-block;\r\n    color: #252537;\r\n    width: 280px;\r\n    height: 50px;\r\n    padding: 0 20px;\r\n    background: #fff;\r\n    border-radius: 5px;\r\n    outline: none;\r\n    border: none;\r\n    cursor: pointer;\r\n    text-align: center;\r\n    transition: all 0.2s linear;\r\n    margin: 7% auto;\r\n    letter-spacing: 0.05em;\r\n}\r\nbutton:hover{\r\n    background-color: #b8f2e6;\r\n}\r\n.submits{\r\n    width: 48%;\r\n    float: left;\r\n    margin-left: 2%;\r\n\r\n}\r\n.frgt-pass {background: transparent;\r\n}\r\n.sign-up{\r\n    background: #b8f2e6;\r\n}\r\nbutton:hover{\r\n    transform: translateY(3px);\r\n    box-shadow: none;\r\n}\r\nbutton:hover{\r\n    animation: ani9 0.4s ease-in-out infinite alternate;\r\n\r\n}\r\n@keyframes ani9 {\r\n    0%{\r\n        transform: translateY(3px);\r\n    }\r\n    100%{\r\n        transform: translateY(5px);\r\n    }\r\n    \r\n}</pre>', '1728635352_Ảnh chụp màn hình 2024-10-11 152851.png', '<pre>\r\n&lt;div class=&quot;overlay&quot;&gt;\r\n     &lt;form&gt;\r\n        &lt;div class=&quot;icon&quot;&gt;\r\n           &lt;header class=&quot;head-form&quot;&gt;\r\n              &lt;h2&gt;LOGIN&lt;/h2&gt;\r\n              &lt;p&gt;login here using your username and password&lt;/p&gt;\r\n           &lt;/header&gt;\r\n           &lt;br&gt;\r\n           &lt;div class=&quot;fiel-set&quot;&gt;\r\n              &lt;span class=&quot;input-item&quot;&gt;\r\n                 &lt;i class=&quot;fa fa-user-circle&quot;&gt;&lt;/i&gt;\r\n              &lt;/span&gt;\r\n              &lt;input class=&quot;form-input&quot; id=&quot;txt&quot; type=&quot;text&quot; placeholder=&quot;Username&quot; required&gt;\r\n              &lt;br&gt;\r\n              &lt;span class=&quot;input-item&quot;&gt;\r\n                 &lt;i class=&quot;fa fa-key&quot;&gt;&lt;/i&gt;\r\n              &lt;/span&gt;\r\n              &lt;input class=&quot;form-input&quot; id=&quot;pwd&quot; type=&quot;password&quot; placeholder=&quot;Password&quot; required&gt;\r\n              &lt;span&gt;\r\n                 &lt;i class=&quot;fa fa-eye&quot; aria-hidden=&quot;true&quot; type=&quot;button&quot; id=&quot;eye&quot;&gt;&lt;/i&gt;\r\n              &lt;/span&gt;\r\n              &lt;br&gt;\r\n              &lt;button class=&quot;log-in&quot;&gt;LOGIN&lt;/button&gt;\r\n           &lt;/div&gt;\r\n           &lt;div class=&quot;other&quot;&gt;\r\n              &lt;button class=&quot;btn submits frgt-pass&quot;&gt;Forgot Password&lt;/button&gt;\r\n              &lt;button class=&quot;btn submits sign-up&quot;&gt;Sign Up\r\n                 &lt;i class=&quot;fa fa-user-plus&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;\r\n              &lt;/button&gt;\r\n           &lt;/div&gt;\r\n        &lt;/div&gt;\r\n     &lt;/form&gt;\r\n  &lt;/div&gt;</pre>', 'https://www.youtube.com/watch?v=N6BTKtkuuI4', '2024-10-11 01:29:12', '2024-10-11 01:29:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `colors`
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
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issue_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `issue_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Hãy thử sức mình nếu bạn có thể tự làm được có nghĩa bạn đã hiểu hết phần quan trong của nó', '2024-10-03 06:27:38', '2024-10-03 06:27:38'),
(2, 1, 3, 'Hãy thử sức mình nếu bạn có thể tự làm được có nghĩa bạn đã hiểu hết phần quan trong của nó', '2024-10-12 07:11:03', '2024-10-12 07:11:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `components`
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
-- Đang đổ dữ liệu cho bảng `components`
--

INSERT INTO `components` (`id`, `user_id`, `name`, `description`, `image`, `c_html`, `c_css`, `c_javascript`, `link`, `created_at`, `updated_at`) VALUES
(2, 3, 'Login Form Validation in HTML CSS & JavaScript', 'Form Validation in HTML means to check that the user’s entered credential – Email, Username, Password is valid and correct or not. User will not get access to the restricted page until he/she entered a valid email and password. And, Shake Effect in this Login Form means when the user clicks on the login button without entering their email and password then the input boxes shake to inform the user that these fields can’t be blank.', '1728399990_Login-Form-Validation-with-Shake-Effect.jpg', '<p>&lt;div class=&quot;wrapper&quot;&gt;</p>\n\n<p>&lt;header&gt;Login Form&lt;/header&gt;</p>\n\n<p>&lt;form action=&quot;#&quot;&gt;</p>\n\n<p>&lt;div class=&quot;field email&quot;&gt;</p>\n\n<p>&lt;div class=&quot;input-area&quot;&gt;</p>\n\n<p>&lt;input type=&quot;text&quot; placeholder=&quot;Email Address&quot;&gt;</p>\n\n<p>&lt;i class=&quot;icon fas fa-envelope&quot;&gt;&lt;/i&gt;</p>\n\n<p>&lt;i class=&quot;error error-icon fas fa-exclamation-circle&quot;&gt;&lt;/i&gt;</p>\n\n<p>&lt;/div&gt;</p>\n\n<p>&lt;div class=&quot;error error-txt&quot;&gt;Email can&#39;t be blank&lt;/div&gt;</p>\n\n<p>&lt;/div&gt;</p>\n\n<p>&lt;div class=&quot;field password&quot;&gt;</p>\n\n<p>&lt;div class=&quot;input-area&quot;&gt;</p>\n\n<p>&lt;input type=&quot;password&quot; placeholder=&quot;Password&quot;&gt;</p>\n\n<p>&lt;i class=&quot;icon fas fa-lock&quot;&gt;&lt;/i&gt;</p>\n\n<p>&lt;i class=&quot;error error-icon fas fa-exclamation-circle&quot;&gt;&lt;/i&gt;</p>\n\n<p>&lt;/div&gt;</p>\n\n<p>&lt;div class=&quot;error error-txt&quot;&gt;Password can&#39;t be blank&lt;/div&gt;</p>\n\n<p>&lt;/div&gt;</p>\n\n<p>&lt;div class=&quot;pass-txt&quot;&gt;&lt;a href=&quot;#&quot;&gt;Forgot password?&lt;/a&gt;&lt;/div&gt;</p>\n\n<p>&lt;input type=&quot;submit&quot; value=&quot;Login&quot;&gt;</p>\n\n<p>&lt;/form&gt;</p>\n\n<p>&lt;div class=&quot;sign-txt&quot;&gt;Not yet member? &lt;a href=&quot;#&quot;&gt;Signup now&lt;/a&gt;&lt;/div&gt;</p>\n\n<p>&lt;/div&gt;</p>', '<pre>\r\n@import url(&#39;https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap&#39;);\r\n*{\r\n  margin: 0;\r\n  padding: 0;\r\n  box-sizing: border-box;\r\n  font-family: &quot;Poppins&quot;, sans-serif;\r\n}\r\nbody{\r\n  width: 100%;\r\n  height: 100vh;\r\n  display: flex;\r\n  align-items: center;\r\n  justify-content: center;\r\n  background: #5372F0;\r\n}\r\n::selection{\r\n  color: #fff;\r\n  background: #5372F0;\r\n}\r\n.wrapper{\r\n  width: 380px;\r\n  padding: 40px 30px 50px 30px;\r\n  background: #fff;\r\n  border-radius: 5px;\r\n  text-align: center;\r\n  box-shadow: 10px 10px 15px rgba(0,0,0,0.1);\r\n}\r\n.wrapper header{\r\n  font-size: 35px;\r\n  font-weight: 600;\r\n}\r\n.wrapper form{\r\n  margin: 40px 0;\r\n}\r\nform .field{\r\n  width: 100%;\r\n  margin-bottom: 20px;\r\n}\r\nform .field.shake{\r\n  animation: shake 0.3s ease-in-out;\r\n}\r\n@keyframes shake {\r\n  0%, 100%{\r\n    margin-left: 0px;\r\n  }\r\n  20%, 80%{\r\n    margin-left: -12px;\r\n  }\r\n  40%, 60%{\r\n    margin-left: 12px;\r\n  }\r\n}\r\nform .field .input-area{\r\n  height: 50px;\r\n  width: 100%;\r\n  position: relative;\r\n}\r\nform input{\r\n  width: 100%;\r\n  height: 100%;\r\n  outline: none;\r\n  padding: 0 45px;\r\n  font-size: 18px;\r\n  background: none;\r\n  caret-color: #5372F0;\r\n  border-radius: 5px;\r\n  border: 1px solid #bfbfbf;\r\n  border-bottom-width: 2px;\r\n  transition: all 0.2s ease;\r\n}\r\nform .field input:focus,\r\nform .field.valid input{\r\n  border-color: #5372F0;\r\n}\r\nform .field.shake input,\r\nform .field.error input{\r\n  border-color: #dc3545;\r\n}\r\n.field .input-area i{\r\n  position: absolute;\r\n  top: 50%;\r\n  font-size: 18px;\r\n  pointer-events: none;\r\n  transform: translateY(-50%);\r\n}\r\n.input-area .icon{\r\n  left: 15px;\r\n  color: #bfbfbf;\r\n  transition: color 0.2s ease;\r\n}\r\n.input-area .error-icon{\r\n  right: 15px;\r\n  color: #dc3545;\r\n}\r\nform input:focus ~ .icon,\r\nform .field.valid .icon{\r\n  color: #5372F0;\r\n}\r\nform .field.shake input:focus ~ .icon,\r\nform .field.error input:focus ~ .icon{\r\n  color: #bfbfbf;\r\n}\r\nform input::placeholder{\r\n  color: #bfbfbf;\r\n  font-size: 17px;\r\n}\r\nform .field .error-txt{\r\n  color: #dc3545;\r\n  text-align: left;\r\n  margin-top: 5px;\r\n}\r\nform .field .error{\r\n  display: none;\r\n}\r\nform .field.shake .error,\r\nform .field.error .error{\r\n  display: block;\r\n}\r\nform .pass-txt{\r\n  text-align: left;\r\n  margin-top: -10px;\r\n}\r\n.wrapper a{\r\n  color: #5372F0;\r\n  text-decoration: none;\r\n}\r\n.wrapper a:hover{\r\n  text-decoration: underline;\r\n}\r\nform input[type=&quot;submit&quot;]{\r\n  height: 50px;\r\n  margin-top: 30px;\r\n  color: #fff;\r\n  padding: 0;\r\n  border: none;\r\n  background: #5372F0;\r\n  cursor: pointer;\r\n  border-bottom: 2px solid rgba(0,0,0,0.1);\r\n  transition: all 0.3s ease;\r\n}\r\nform input[type=&quot;submit&quot;]:hover{\r\n  background: #2c52ed;\r\n}</pre>', '<pre>\r\nconst form = document.querySelector(&quot;form&quot;);\r\neField = form.querySelector(&quot;.email&quot;),\r\neInput = eField.querySelector(&quot;input&quot;),\r\npField = form.querySelector(&quot;.password&quot;),\r\npInput = pField.querySelector(&quot;input&quot;);\r\n\r\nform.onsubmit = (e)=&gt;{\r\n  e.preventDefault(); //preventing from form submitting\r\n  //if email and password is blank then add shake class in it else call specified function\r\n  (eInput.value == &quot;&quot;) ? eField.classList.add(&quot;shake&quot;, &quot;error&quot;) : checkEmail();\r\n  (pInput.value == &quot;&quot;) ? pField.classList.add(&quot;shake&quot;, &quot;error&quot;) : checkPass();\r\n\r\n  setTimeout(()=&gt;{ //remove shake class after 500ms\r\n    eField.classList.remove(&quot;shake&quot;);\r\n    pField.classList.remove(&quot;shake&quot;);\r\n  }, 500);\r\n\r\n  eInput.onkeyup = ()=&gt;{checkEmail();} //calling checkEmail function on email input keyup\r\n  pInput.onkeyup = ()=&gt;{checkPass();} //calling checkPassword function on pass input keyup\r\n\r\n  function checkEmail(){ //checkEmail function\r\n    let pattern = /^[^ ]+@[^ ]+\\.[a-z]{2,3}$/; //pattern for validate email\r\n    if(!eInput.value.match(pattern)){ //if pattern not matched then add error and remove valid class\r\n      eField.classList.add(&quot;error&quot;);\r\n      eField.classList.remove(&quot;valid&quot;);\r\n      let errorTxt = eField.querySelector(&quot;.error-txt&quot;);\r\n      //if email value is not empty then show please enter valid email else show Email can&#39;t be blank\r\n      (eInput.value != &quot;&quot;) ? errorTxt.innerText = &quot;Enter a valid email address&quot; : errorTxt.innerText = &quot;Email can&#39;t be blank&quot;;\r\n    }else{ //if pattern matched then remove error and add valid class\r\n      eField.classList.remove(&quot;error&quot;);\r\n      eField.classList.add(&quot;valid&quot;);\r\n    }\r\n  }\r\n\r\n  function checkPass(){ //checkPass function\r\n    if(pInput.value == &quot;&quot;){ //if pass is empty then add error and remove valid class\r\n      pField.classList.add(&quot;error&quot;);\r\n      pField.classList.remove(&quot;valid&quot;);\r\n    }else{ //if pass is empty then remove error and add valid class\r\n      pField.classList.remove(&quot;error&quot;);\r\n      pField.classList.add(&quot;valid&quot;);\r\n    }\r\n  }\r\n\r\n  //if eField and pField doesn&#39;t contains error class that mean user filled details properly\r\n  if(!eField.classList.contains(&quot;error&quot;) &amp;&amp; !pField.classList.contains(&quot;error&quot;)){\r\n    window.location.href = form.getAttribute(&quot;action&quot;); //redirecting user to the specified url which is inside action attribute of form tag\r\n  }\r\n}</pre>', 'https://www.codingnepalweb.com/login-form-validation-in-html-javascript/', '2024-10-08 07:48:03', '2024-10-08 07:48:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `events`
--

INSERT INTO `events` (`id`, `user_id`, `title`, `description`, `start`, `end`, `created_at`, `updated_at`) VALUES
(3, 3, 'học', '<p>aaaaaaaaaaaaaaaaaaaa</p>', '2024-10-08 00:00:00', '2024-10-11 00:00:00', '2024-10-03 08:12:08', '2024-10-03 09:36:19'),
(4, 3, 'kian', '<p>ssssssssssssssssssssssss</p>', '2024-10-06 00:00:00', '2024-10-07 00:00:00', '2024-10-03 08:12:47', '2024-10-03 08:12:47'),
(5, 3, 'Bai tap', '<p>ssssssssssssssssssssssssssss</p>', '2024-10-21 00:00:00', '2024-10-25 00:00:00', '2024-10-03 08:32:03', '2024-10-03 08:32:03'),
(6, 3, 'Học thoi', 'Học thêm', '2024-11-05 00:00:00', '2024-11-06 00:00:00', '2024-11-05 07:42:52', '2024-11-05 07:42:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `expenses`
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
-- Đang đổ dữ liệu cho bảng `expenses`
--

INSERT INTO `expenses` (`id`, `user_id`, `current_date`, `breakfast`, `lunch`, `afternoon_meal`, `dinner`, `coffee`, `fuel`, `sports`, `e_wallet`, `other_shopping`, `other_expenses`, `rent`, `total_spending_today`, `created_at`, `updated_at`) VALUES
(4, 3, '2024-09-30', 10000, 10000, 10000, 10000, 10000, 10000, 10000, 10000, 10000, 10000, 1500000, 100000, '2024-09-29 18:57:42', '2024-09-29 18:57:42'),
(5, 3, '2024-09-30', 10000, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 2500000, 20000, '2024-09-29 20:31:26', '2024-09-29 20:31:26'),
(6, 3, '2024-09-30', 2000, 3000, 0, 5000, 0, 0, 15452022, 0, 0, 0, 0, 15462022, '2024-09-29 22:45:50', '2024-09-29 22:45:50'),
(7, 3, '2024-10-01', 0, 0, 20000, 0, 0, 50000, 0, 0, 0, 55000, 0, 125000, '2024-10-01 06:23:34', '2024-10-01 06:23:34'),
(8, 3, '2024-10-03', 0, 0, 0, 0, 0, 5000, 30000, 0, 0, 0, 0, 35000, '2024-10-03 06:17:12', '2024-10-03 06:17:12'),
(9, 3, '2024-10-06', 0, 0, 0, 0, 0, 50000, 0, 0, 0, 155000, 0, 205000, '2024-10-06 06:57:03', '2024-10-06 06:57:03'),
(10, 3, '2024-10-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 132000, 0, 132000, '2024-10-06 08:36:02', '2024-10-06 08:36:02'),
(11, 3, '2024-10-20', 0, 0, 0, 6000, 3000, 0, 0, 0, 0, 15000, 0, 24000, '2024-10-20 05:13:32', '2024-10-20 05:13:32'),
(12, 3, '2024-10-21', 0, 60000, 0, 0, 0, 0, 0, 0, 0, 15000, 0, 75000, '2024-10-21 03:51:50', '2024-10-21 03:51:50'),
(13, 3, '2024-11-05', 0, 40000, 0, 0, 20000, 0, 0, 1000, 0, 40000, 0, 101000, '2024-11-05 07:42:02', '2024-11-05 07:42:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `future_directions`
--

CREATE TABLE `future_directions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `future_directions`
--

INSERT INTO `future_directions` (`id`, `user_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 10, 'Năm 1-2: Xây dựng nền tảng vững chắc với Full Stack bằng cách học HTML, CSS, JavaScript (front-end), Node.js hoặc Python (back-end), và SQL/NoSQL cho cơ sở dữ liệu. Tạo dự án cá nhân để thực hành và làm quen với DevOps cơ bản (Docker, CI/CD).', '2024-11-07 09:20:25', '2024-11-07 09:20:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ideas`
--

CREATE TABLE `ideas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ideas`
--

INSERT INTO `ideas` (`id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 10, 'Hãy thử sức mình nếu bạn có thể tự làm được có nghĩa bạn đã hiểu hết phần quan trong của nó', '2024-11-07 07:56:43', '2024-11-07 07:56:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `issues`
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `issues`
--

INSERT INTO `issues` (`id`, `user_id`, `subject`, `key`, `level`, `description`, `reference`, `start_date`, `end_date`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Bài tập 7: Thực hiện code HTML theo nội dung design dưới đây:', 'IS_836', 0, '<h3>C&ocirc;ng thức chung</h3>\r\n\r\n<p>Cần x&aacute;c định r&otilde;: đ&acirc;u l&agrave; image, đ&acirc;u l&agrave; text, đ&acirc;u l&agrave; button, để biết khi n&agrave;o d&ugrave;ng h&igrave;nh, khi n&agrave;o d&ugrave;ng text để sử dụng CSS cho đ&uacute;ng.<br />\r\nTh&ocirc;ng thường image sẽ l&agrave; h&igrave;nh chụp, h&igrave;nh design phức tạp,... trong c&aacute;c b&agrave;i tập của hocwebchuan, image sẽ được thể hiện bằng nội dung c&oacute; chữ &quot;Học Web Chuẩn&quot;, hoặc số VD: &quot;500x600&quot;.</p>\r\n\r\n<p>Một số b&agrave;i tập c&oacute; sử dụng font icon, hocwebchuan sẽ sử dụng bộ font của&nbsp;<a href=\"https://fontawesome.com/\" target=\"_blank\">fontawesome</a>&nbsp;cho thuận lợi việc code.</p>\r\n\r\n<p>Nếu cấu tr&uacute;c l&agrave; một nh&oacute;m c&oacute; nội dung cụ thể, ta d&ugrave;ng&nbsp;<code>&lt;section&gt;</code>&nbsp;bao ngo&agrave;i.</p>\r\n\r\n<p>Nếu cấu tr&uacute;c l&agrave; ti&ecirc;u đề th&igrave; d&ugrave;ng&nbsp;<code>&lt;hx&gt;</code>, khi code thực tế th&igrave; bạn cần sử dụng&nbsp;<code>&lt;hx&gt;</code>&nbsp;cho đ&uacute;ng thứ tự.</p>\r\n\r\n<p>Nếu cấu tr&uacute;c l&agrave; image th&igrave; d&ugrave;ng&nbsp;<code>&lt;img&gt;</code>.</p>\r\n\r\n<p>Nếu cấu tr&uacute;c l&agrave; đoạn văn th&igrave; d&ugrave;ng&nbsp;<code>&lt;p&gt;</code>.</p>\r\n\r\n<p>Nếu cấu tr&uacute;c l&agrave; một danh s&aacute;ch th&igrave; d&ugrave;ng&nbsp;<code>&lt;ul&gt;</code>&nbsp;<code>&lt;li&gt;</code>.</p>\r\n\r\n<p>Nếu cấu tr&uacute;c l&agrave; một danh s&aacute;ch c&oacute; thứ tự, th&igrave; d&ugrave;ng&nbsp;<code>&lt;ol&gt;</code>&nbsp;<code>&lt;li&gt;</code>.</p>\r\n\r\n<p>Nếu cấu tr&uacute;c c&oacute; chứa th&ocirc;ng tin nhập liệu, th&igrave; ta d&ugrave;ng c&aacute;c thẻ&nbsp;<code>&lt;form&gt;</code>.</p>\r\n\r\n<p>Đối với c&aacute;c th&agrave;nh phần lớn gần nhau, theo c&aacute;c nh&oacute;m ri&ecirc;ng biệt, ta d&ugrave;ng&nbsp;<code>&lt;div&gt;</code>&nbsp;để gom lại sẽ thuận lợi cho việc layout.</p>\r\n\r\n<p>Với mỗi th&agrave;nh bao ngo&agrave;i như&nbsp;<code>&lt;section&gt;</code>&nbsp;hay&nbsp;<code>&lt;div&gt;</code>&nbsp;ta cần sử dụng&nbsp;<code>id</code>&nbsp;hoặc&nbsp;<code>class</code>&nbsp;để thuận lợi cho việc layout sau n&agrave;y.</p>', 'none', '2024-10-04', '2024-10-06', 1, 1, '2024-10-03 06:20:37', '2024-10-03 06:20:37'),
(2, 3, 'How to design a table in servicenow', 'IS_182', 0, '<pre>\r\n<code>&lt;div class=&quot;panel panel-body&quot;&gt;\r\n  &lt;h2&gt;Book Rooms v1&lt;/h2&gt;\r\n  &lt;table border=&quot;2&quot; class=&quot;table table-striped m-b-lg&quot;&gt;\r\n    &lt;tr&gt;\r\n      &lt;th&gt;Country&lt;/th&gt;\r\n      &lt;th&gt;Title&lt;/th&gt;\r\n      &lt;th&gt;End Date&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n \r\n  &lt;/table&gt;</code></pre>', 'none', '2024-10-11', '2024-10-12', 2, 2, '2024-10-11 06:57:56', '2024-10-11 06:57:56'),
(3, 3, 'Xây dựng Chuyển đổi Điều hướng Hoạt ảnh JavaScript', 'IS_955', 0, '<p>Khi bạn x&acirc;y dựng c&aacute;c menu của website m&agrave; chỉ sử dụng HTML v&agrave; CSS th&igrave; việc tạo c&aacute;c li&ecirc;n kết để điều hướng người d&ugrave;ng từ trang tĩnh n&agrave;y qua trang tĩnh kh&aacute;c sẽ rất giới hạn. Tuy nhi&ecirc;n, JavaScript lại c&oacute; c&aacute;c t&iacute;nh năng điều hướng thả xuống, c&oacute; thể thu gọn v&agrave; điều hướng hoạt ảnh khi bạn ph&aacute;t triển web.&nbsp;</p>\r\n\r\n<p>Khi bạn nắm vững kiến thức v&agrave; thực sự hiểu r&otilde; về JavaScript th&igrave; việc tạo ra c&aacute;c n&uacute;t chuyển đổi điều hướng hoạt ảnh trở n&ecirc;n dễ d&agrave;ng hơn.</p>\r\n\r\n<p>Mẫu dự &aacute;n JavaScript dưới đ&acirc;y được thực hiện bởi A. James Liptak hiển thị loại t&iacute;nh năng điều hướng động m&agrave; bạn c&oacute; quyền truy cập ngay khi th&ecirc;m JavaScript v&agrave;o bộ c&ocirc;ng cụ của m&igrave;nh.</p>', NULL, '2024-10-12', '2024-10-14', 1, 2, '2024-10-12 08:29:56', '2024-10-12 08:29:56'),
(4, 10, 'Tạo các chức năng thêm còn lại của profile', 'IS_596', 0, '<p>Tạo thêm các design<br>- Future Direction</p><p>&nbsp;</p><p>&nbsp;</p><ul><li>&nbsp;</li></ul><p>-</p>', NULL, '2024-11-07', '2024-11-08', 34, 2, '2024-11-07 09:41:56', '2024-11-07 09:41:56'),
(5, 10, 'Tìm hiểu và triển khai odoo task Issue', 'IS_889', 0, '<ul><li>Chỉnh sửa và thêm giao diện thành viên</li><li>Add thêm về quản lý nhóm:</li><li>- tạo design quản lý</li><li>- Tạo nội dung chi tiết cho thành viên đã thực hiện nhiệm vụ</li><li>- Kiểm tra validate cho từng forform</li></ul>', NULL, '2024-11-07', '2024-11-08', 34, 2, '2024-11-07 09:45:03', '2024-11-07 09:45:03'),
(6, 10, 'Tìm hiểu thêm về giao diện chat và hoàn thiện design', 'IS_413', 0, '<ol><li>-Tạo design cho trang chat</li></ol><ul><li>- thêm vào trang mới&nbsp;</li><li>- Tìm hiểu và add dữ liệu cần tạo</li><li>- Load các bây lên trang infoinfor</li></ul>', NULL, '2024-11-07', '2024-11-08', 34, 2, '2024-11-07 09:46:50', '2024-11-07 09:46:50'),
(7, 10, 'Thực hiện test website với Mongco', 'IS_656', 0, '<p>Đọc và tìm hiểu sơ về cách thức thực hiển</p><ul><li>Dịch toàn bộ tài liệu có săn để hiểu hơn</li><li>kiểm tra từng chi tiết có trong nhiệm vụ</li><li>Bắt các lỗi cần thiết và ghi chú lại</li></ul>', NULL, '2024-11-07', '2024-11-08', 36, 2, '2024-11-07 09:48:57', '2024-11-07 09:48:57'),
(8, 10, 'Hoàn thành task được giao ES', 'IS_646', 0, '<p>Tìm hiểu luồn để tiện cho việc chỉnh sửa validate</p><p>Tìm kiếm xem chỗ cần được sửa ở đâu</p><p>Hoàn thành task trong vòng 1 tiếntiếng</p>', NULL, '2024-11-07', '2024-11-08', 35, 2, '2024-11-07 09:50:26', '2024-11-07 09:50:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `issue_users`
--

CREATE TABLE `issue_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issue_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `issue_users`
--

INSERT INTO `issue_users` (`id`, `issue_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 1, 3, '2024-10-11 03:22:07', '2024-10-11 03:22:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `javascripts`
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
-- Đang đổ dữ liệu cho bảng `javascripts`
--

INSERT INTO `javascripts` (`id`, `user_id`, `category_id`, `name`, `description`, `image`, `code`, `link`, `created_at`, `updated_at`) VALUES
(1, 3, 27, 'Khởi tạo project với Vite', '<pre>\r\n&lt;template&gt;\r\n    &lt;div&gt;\r\n      &lt;h1&gt;{{ message }}&lt;/h1&gt;\r\n      &lt;button @click=&quot;updateMessage&quot;&gt;Click me&lt;/button&gt;\r\n    &lt;/div&gt;\r\n&lt;/template&gt;\r\n&lt;script&gt;\r\nimport { ref } from &#39;vue&#39;;\r\nexport default {\r\nname: &#39;Hello&#39;,\r\nsetup() {\r\n    // Define a reactive variable\r\n    const message = ref(&#39;Hello World!&#39;);\r\n    // Function to update the message when button is clicked\r\n    const updateMessage = () =&gt; {\r\n    message.value = &#39;You clicked the button!&#39;;\r\n    };\r\n    // Return variables and functions to use in the template\r\n    return {\r\n    message,\r\n    updateMessage\r\n    };\r\n}\r\n};\r\n&lt;/script&gt;\r\n\r\n\r\n&lt;style scoped&gt;\r\nh1 {\r\ncolor: blue;\r\n}\r\n\r\n\r\nbutton {\r\n\r\n    padding: 10px 20px;\r\n\r\n    background-color: #42b983;\r\n\r\n    border: none;\r\n\r\n    color: white;\r\n\r\n    cursor: pointer;\r\n\r\n}\r\n\r\n\r\nbutton:hover {\r\n\r\n    background-color: #347d39;\r\n\r\n}\r\n\r\n&lt;/style&gt;</pre>', '1728637351_vite-vue-3-tailwind.png', '<pre>\r\n1. npm init @vitejs/app my-project\r\n\r\n2. cd my-project\r\n\r\n3. npm install\r\n\r\n4. npm run dev\r\n\r\n5. Cấu tr&uacute;c\r\n├── node_modules\r\n\r\n├── package-lock.json\r\n\r\n├── package.json\r\n\r\n├── public\r\n\r\n    │ └── favicon.ico\r\n\r\n├── src │\r\n\r\n    ├── App.vue │\r\n\r\n    ├── assets │\r\n\r\n          │ └── logo.png │\r\n\r\n    ├── components │\r\n\r\n    │ └── HelloWorld.vue\r\n\r\n    │ └── main.ts\r\n\r\n├── tsconfig.json\r\n\r\n└── vite.config.ts</pre>', 'https://viblo.asia/p/cai-dat-project-vue-voi-vue-3-vite-typescript-tailwind-RnB5pjOwZPG', '2024-10-11 02:02:31', '2024-10-11 02:02:31'),
(2, 3, 28, 'cấu trúc chuẩn reactjs', '<pre>\r\n// App.js\r\nimport React from &#39;react&#39;;\r\nimport Hello from &#39;./Hello&#39;;\r\n\r\nconst App = () =&gt; {\r\n  return (\r\n    &lt;div&gt;\r\n      &lt;Hello /&gt;\r\n    &lt;/div&gt;\r\n  );\r\n};\r\nexport default App;</pre>', '1728640845_techtalk-reactjs-768x432.png', '<pre>\r\n1. kiểm tra version node</pre>\r\n\r\n<p>2. Tải NVM để kiểm tra list node&nbsp;</p>\r\n\r\n<p>3. Set up m&ocirc;i trường</p>\r\n\r\n<pre>\r\n<code>npm install -g create-react-app</code></pre>\r\n\r\n<pre>\r\n<code>create-react-app my-app</code></pre>\r\n\r\n<pre>\r\n<code>cd my-app</code></pre>\r\n\r\n<pre>\r\n<code>npm start</code></pre>\r\n\r\n<p>my-react-app/<br />\r\n│<br />\r\n├── public/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Chứa c&aacute;c file tĩnh của dự &aacute;n<br />\r\n│ &nbsp; ├── index.html &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # File HTML gốc của ứng dụng<br />\r\n│ &nbsp; └── favicon.ico &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Biểu tượng trang web<br />\r\n│<br />\r\n├── src/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # Nơi chứa m&atilde; nguồn của ứng dụng<br />\r\n│ &nbsp; ├── assets/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Chứa c&aacute;c file tĩnh như h&igrave;nh ảnh, fonts, CSS...<br />\r\n│ &nbsp; │ &nbsp; └── images/<br />\r\n│ &nbsp; │ &nbsp; &nbsp; &nbsp; └── logo.png<br />\r\n│ &nbsp; ├── components/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Chứa c&aacute;c component t&aacute;i sử dụng<br />\r\n│ &nbsp; │ &nbsp; ├── Header.js &nbsp; &nbsp; &nbsp; &nbsp;# V&iacute; dụ về một component Header<br />\r\n│ &nbsp; │ &nbsp; └── Footer.js &nbsp; &nbsp; &nbsp; &nbsp;# V&iacute; dụ về một component Footer<br />\r\n│ &nbsp; ├── hooks/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # Chứa c&aacute;c custom hooks (nếu c&oacute;)<br />\r\n│ &nbsp; │ &nbsp; └── useAuth.js &nbsp; &nbsp; &nbsp; # V&iacute; dụ về một custom hook cho x&aacute;c thực<br />\r\n│ &nbsp; ├── pages/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # Chứa c&aacute;c trang ch&iacute;nh của ứng dụng<br />\r\n│ &nbsp; │ &nbsp; ├── Home.js &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Trang chủ<br />\r\n│ &nbsp; │ &nbsp; └── About.js &nbsp; &nbsp; &nbsp; &nbsp; # Trang giới thiệu<br />\r\n│ &nbsp; ├── services/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Chứa c&aacute;c file tương t&aacute;c với API<br />\r\n│ &nbsp; │ &nbsp; └── api.js &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # V&iacute; dụ về một file gọi API<br />\r\n│ &nbsp; ├── styles/ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Chứa c&aacute;c file style chung như CSS hoặc SCSS<br />\r\n│ &nbsp; │ &nbsp; └── global.css &nbsp; &nbsp; &nbsp; # CSS to&agrave;n cục<br />\r\n│ &nbsp; ├── App.js &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # Component gốc của ứng dụng<br />\r\n│ &nbsp; ├── index.js &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # Điểm khởi đầu của ứng dụng<br />\r\n│ &nbsp; └── setupTests.js &nbsp; &nbsp; &nbsp; &nbsp;# Thiết lập testing (nếu cần)<br />\r\n│<br />\r\n├── .gitignore &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # File để bỏ qua c&aacute;c file kh&ocirc;ng cần commit v&agrave;o git<br />\r\n├── package.json &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; # File quản l&yacute; c&aacute;c dependencies của dự &aacute;n<br />\r\n└── README.md &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;# Th&ocirc;ng tin về dự &aacute;n<br />\r\n&nbsp;</p>', 'https://nodemy.vn/tao-du-an-voi-create-react-app-cuc-ky-don-gian-react-js/', '2024-10-11 03:00:45', '2024-10-11 03:00:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `languages`
--

INSERT INTO `languages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'vn', '2024-10-04 16:48:50', '2024-10-04 16:48:50'),
(2, 'en', '2024-10-04 16:48:50', '2024-10-04 16:48:50'),
(3, 'ja', '2024-10-04 16:48:50', '2024-10-04 16:48:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `learn_mores`
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
-- Đang đổ dữ liệu cho bảng `learn_mores`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
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
(60, '2024_11_07_153540_create_profile_projects_table', 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `paragraphs`
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

--
-- Đang đổ dữ liệu cho bảng `paragraphs`
--

INSERT INTO `paragraphs` (`id`, `language_id`, `category_id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 'sssssssss', '<p>sssssssssssssssssssssssss</p>', 'images/8CsFzYjHZjkp24Bkms5hrKmTbXinr6ANpmhXJ9fL.jpg', '2024-10-08 07:59:17', '2024-10-08 07:59:17'),
(2, 2, 5, 'sssssssss', '<p>sssssssssssssss</p>', 'D:\\xampp\\tmp\\phpAE19.tmp', '2024-10-08 08:03:22', '2024-10-08 08:03:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `posts`
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
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `location`, `description`, `created_at`, `updated_at`) VALUES
(1, 3, '54 hùng vương', 'Dậy học bạn ơi kiến thức bạn sắp mất hết rồi&nbsp;', '2024-10-16 07:27:11', '2024-10-16 07:27:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_comments`
--

CREATE TABLE `post_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_images`
--

CREATE TABLE `post_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_images`
--

INSERT INTO `post_images` (`id`, `post_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/images/1729088831_462289753_122208445304016499_255300723905032048_n.jpg', '2024-10-16 07:27:11', '2024-10-16 07:27:11'),
(2, 1, 'assets/images/1729088831_Ảnh chụp màn hình 2024-10-11 152851.png', '2024-10-16 07:27:11', '2024-10-16 07:27:11'),
(3, 1, 'assets/images/1729088831_Ảnh chụp màn hình 2024-10-12 184937.png', '2024-10-16 07:27:11', '2024-10-16 07:27:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_likes`
--

CREATE TABLE `post_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `problem_processes`
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
-- Cấu trúc bảng cho bảng `professional_education`
--

CREATE TABLE `professional_education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `professional_education`
--

INSERT INTO `professional_education` (`id`, `user_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 10, '2011-2014 Trường trung học cơ sở Tân Bình, Bến Tre', '2024-11-07 08:13:23', '2024-11-07 08:14:58'),
(2, 10, '2014-2016 Trường trung học phổ thông Ngô Văn Cấn', '2024-11-07 08:23:11', '2024-11-07 08:23:11'),
(3, 10, '2016-2018 Trường trung học phổ thông Nguyễn Bỉnh Khiêm', '2024-11-07 08:23:11', '2024-11-07 08:23:11'),
(4, 10, '2019-2023 Trường đại học Công Nghệ Thành Phố Hồ Chí Minh', '2024-11-07 08:23:49', '2024-11-07 08:23:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `professional_skills`
--

CREATE TABLE `professional_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `professional_skills`
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
(15, 10, 'GIT', '2024-11-07 08:05:47', '2024-11-07 08:05:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profiles`
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
-- Đang đổ dữ liệu cho bảng `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `name`, `email`, `phone`, `date_of_birth`, `gender`, `link_facebook`, `link_instagram`, `link_linkin`, `link_link`, `address`, `description`, `roles`, `created_at`, `updated_at`) VALUES
(1, 8, 'Đoàn Thị Thu Trang', 'thutrang10@gmail.com', 837230102, '2024-01-01', '1', 'Please enter the information Học thêm  mơi', 'Please enter the information.', 'Please enter the information.', 'Please enter the information.', '54 Hùng Vương', 'Please enter the information.', 'Luật sư', '2024-10-26 09:50:05', '2024-10-26 19:35:02'),
(2, 9, 'Phan Duy Linh', 'duylinksky@gmail.com', 989392900, '2024-01-01', '0', 'Please enter the information.', 'Please enter the information.', 'Please enter the information.', 'Please enter the information.', 'Please enter the information.', 'Please enter the information.', 'Nhân Viên', '2024-10-26 09:52:56', '2024-10-26 09:52:56'),
(3, 10, 'Phan Tuấn Kiệt', 'phantuankietIT@gmail.com', 768173369, '2000-12-01', 'Nam', 'https://purtosu.io.vn/profile/', 'https://purtosu.io.vn/profile/', 'https://purtosu.io.vn/profile/', 'https://purtosu.io.vn/profile/', 'Bến Tre', 'Trước tiên, em xin cảm ơn anh chị đã tổ chức buổi phỏng vấn hôm nay. Em tên là Phan Tuấn Kiệt, năm nay em 24 tuổi và quê ở Bến Tre.\r\n\r\nEm đã tốt nghiệp Trường Đại học Công nghệ Thành phố Hồ Chí Minh vào tháng 12 năm 2023, ngành Công nghệ thông tin, chuyên ngành Công nghệ phần mềm.\r\n\r\nVề kinh nghiệm làm việc, em có hơn 1 năm kinh nghiệm tại công ty Nhật Bản. những dự án thực tế em từng tham gia như Growupwork, VJP-connect, Digital maketting và Plan-International. Tại công ty Việt Nhật, em đảm nhiệm với vị trí dev, tại công ty em đã tích lũy được nhiều kỹ năng lập trình và kinh nghiệm cho bản thân.', '0', '2024-11-07 07:43:23', '2024-11-07 08:02:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile_experiences`
--

CREATE TABLE `profile_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile_hobbies`
--

CREATE TABLE `profile_hobbies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile_languages`
--

CREATE TABLE `profile_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `profile_languages`
--

INSERT INTO `profile_languages` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 10, 'Tiếng Anh: Trình độ sơ cấp có thể đọc/viết.', '2024-11-07 08:02:44', '2024-11-07 08:02:44'),
(2, 10, 'Tiếng Nhật: ~N3 (mục tiêu sẽ nhận được N2 vào năm 2024).', '2024-11-07 08:02:44', '2024-11-07 08:02:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile_objectives`
--

CREATE TABLE `profile_objectives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile_projects`
--

CREATE TABLE `profile_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
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
-- Đang đổ dữ liệu cho bảng `questions`
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
-- Cấu trúc bảng cho bảng `quiz_items`
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
-- Đang đổ dữ liệu cho bảng `quiz_items`
--

INSERT INTO `quiz_items` (`id`, `language_id`, `category_id`, `question`, `answer_a`, `answer_b`, `answer_c`, `answer_d`, `answer_correct`, `total_wrong`, `total_answers`, `created_at`, `updated_at`) VALUES
(1, 3, 5, '1. Câu: Từ 「名前」 có nghĩa là gì?', 'A. Công việc', 'B. Tên', 'C. Quê hương', 'D. Sở thích', 'B', 0, 0, '2024-10-06 07:01:24', '2024-10-06 07:26:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `results`
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `day` int(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `full_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `salaries`
--

INSERT INTO `salaries` (`id`, `user_id`, `day`, `data`, `start_time`, `end_time`, `created_at`, `updated_at`, `full_date`) VALUES
(6, 3, 1, 'Setup javascript', '08:00:00', '17:10:00', '2024-09-27 22:31:58', '2024-09-27 22:31:58', '2024-09-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `structures`
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
-- Cấu trúc bảng cho bảng `tasks`
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
-- Đang đổ dữ liệu cho bảng `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `name`, `description`, `current_start`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Học thêm tiếng nhật', '<p>1. Mục tiêu</p><p>- Học tiếng nhật để không bị nói là học rồi bỏ</p><p>- Học để hơn được người khác về cách sử dụng từ</p><p>- Học để tiếp thu thêm kiến thức mới</p><p>- Học để giao tiếp được với người nhật</p><p>2. quy trình</p><p>- Học 3 bài từ vựng tiếng nhật + ngữ pháp</p><p>- Học một bài tiếng nhật giới thiệu về bản thân</p><p>- Soạn thao về nội dung hoạt đông ban ngày</p>', '2024-10-20', 'done', '2024-10-14 02:16:48', '2024-10-20 06:48:27'),
(2, 3, 'Học tiếng anh', '<ol><li>1. Mục tiêu</li></ol><ul><li>- Học để không bị người khác khinh thường</li><li>- Học để có thể giao tiếp với người nước ngoài</li><li>- Học để thi toeic 650</li><li>- Học để có thể nâng cấp được mức lương</li><li>2. Quy trình</li><li>- Nghe một bài giới thiệu bằng tiếng anh</li><li>- Học 1 bài từ vừng hack não + search từ vựng không biết</li><li>- Làm bài + từ vựng vừa mới học vào learning more</li><li>- Học 1 bài tiếng anh giới thiệu về bản thân&nbsp;</li><li>- Tìm kiếm về nội dung giao tiếp hàng ngàngày</li></ul>', '2024-10-20', 'doing', '2024-10-14 02:38:00', '2024-10-20 06:48:21'),
(3, 3, 'Tập thể dục buổi sáng và buổi chiều', '<ol><li>1. Mục đích</li></ol><ul><li>- Không quá làm dụng sức khỏe</li><li>- Giúp giảm đi sự lười biến của bản thân</li><li>- Rèn luyện thêm sức khỏe</li><li>- Không bị người khác ăn híp</li><li>2. Quy trình&nbsp;</li><li>- Sáng tìm hiểu và luyện tập boxing</li><li>- Ghi chép lại quy trình luyện tập</li><li>- Chiều: Tập 50 cái hít đất, 100 cái gặp bụng theo hai cách , tập lại bài boxing 100 cái</li></ul>', '2024-10-20', 'done', '2024-10-17 23:00:07', '2024-10-20 05:11:53'),
(4, 3, 'Hoàn thành bài expense', '<p>1. Mục đích</p><p>- Kiểm tra tổng chi tiêu cho ngày</p><p>- Kiểm tra xem chi tiêu của tháng đã đủ hay dư bao nhiêu</p><ul><li>- Giúp giảm đi chi tiêu cho đúng mức</li><li>2. Quy trình</li><li>- Kiểm tra đã nhập thông tin hay chưa</li><li>- Kiểm tra chi tiêu hôm này</li><li>- Nhập số chi tiêu cho đúng cột&nbsp;</li></ul>', '2024-10-20', 'done', '2024-10-18 01:00:52', '2024-10-20 05:13:50'),
(5, 3, 'Thiết kế giao diện learn more', '<ol><li>1. Mục đích</li></ol><ul><li>- Thêm được số lượng từ vựng đã học&nbsp;</li><li>- Kiểm tra kết quả đã học</li><li>- lưu được thông tin và có thể test&nbsp;</li><li>2. Quy trình</li><li>- Làm giao diện từ vựng</li><li>- Làm bài test theo kiểu chữ để không bị sai sót</li><li>- Sau khi kiểm tra sẽ xem được kết quả vừa làlàm</li></ul>', '2024-10-20', 'done', '2024-10-18 01:02:39', '2024-10-20 06:13:30'),
(6, 3, 'Ngủ sớm', '<ol><li>1. Mục tiêu&nbsp;</li></ol><p>Cải thiện sức khỏe tâm lý: Ngủ đủ giấc giúp cải thiện tâm trạng, giảm căng thẳng và lo âu, đồng thời tăng cường khả năng xử lý cảm xúc.</p><p>Tăng cường hệ miễn dịch: Giấc ngủ đủ và chất lượng cao giúp hệ miễn dịch hoạt động hiệu quả hơn, giúp cơ thể chống lại bệnh tật.</p><p>Cải thiện khả năng tập trung: Ngủ đủ giấc giúp tăng cường khả năng tập trung, cải thiện trí nhớ và khả năng học hỏi.</p><p>2. Quy trình</p><ul><li>- Đánh răng trước 8h&nbsp;</li><li>- Ngủ trước 11h tối</li><li>- Không được thức quá thời gian dù bận cũng bỏ việc hôm sau làm tiếp</li></ul>', '2024-10-20', 'testing', '2024-10-18 01:11:12', '2024-10-20 06:14:13'),
(7, 3, 'Soạn 5 tinh huống về nhân sự', '<p>1. Mục địch</p><p>- Soạn để hiểu thêm về hướng giải quyết khi gặp vấn đề<br>- Học được cách giải quyết vấn đề<br>- Hơn được người khác mà không cần phải suy nghĩ<br>- tránh được việc gặp vấn đề nhưng không biết giải thích<br>2. Quy trình<br>- Vào chat GPT gõ hãy tạo cho tôi 5 câu tình huống<br>- Hãy đưa ra cách mình suy nghĩ và xem chat sẽ trả lời thế nào<br>- Ngẩm nghỉ lại cách giải quyết hợp lí nhất</p>', '2024-10-20', 'done', '2024-10-18 10:09:11', '2024-10-20 05:12:06'),
(8, 3, 'Tạo Cv', '<ol><li>1. Mục đích</li></ol><ul><li>- Tạo thêm cv để tiếp ứng với thị trường</li><li>- Tạo cv để ứng tuyển cho phù hợp&nbsp;</li><li>- Giúp cho tạo nhanh hơn và dễ dàng hơn</li><li>2. Quy trình&nbsp;</li><li>- Tạo cv với html css javascript</li><li>- Xem youtobe để không mất thời gian</li><li>- tìm hiểu về cách đưa dữ liệu và lưu cv&nbsp;</li></ul>', '2024-10-20', 'open', '2024-10-18 10:11:38', '2024-10-19 05:17:45'),
(9, 3, 'Tìm hiểu và cách phỏng vấn', '<ol><li>1. Mục tiêu</li></ol><ul><li>- Đạt được kết quả tốt nhất ttrong kì phỏng vấn sắp tới</li><li>- Mang lại hiệu quả khi làm việc&nbsp;</li><li>- Để dễ trả lời cho cuộc phỏng vấn</li><li>- Giúp nâng cao được kỹ năng giao tiếp</li><li>2. Quy trình</li><li>- Tự ghi ra bài phỏng vấn cá nhân và nnhờ chat nhận xét</li><li>- rút kinh nghiệm từ nhiều llần phỏng vấn mình cần làm gì&nbsp;</li><li>- Hãy viết ra định hướng tương lại cho mình trong 10 năm tới</li></ul>', '2024-10-20', 'done', '2024-10-19 05:22:17', '2024-10-20 06:14:43'),
(10, 3, 'Doạn dẹp', '<ol><li>1. Mục tiêu&nbsp;</li></ol><ul><li>- Dọn dẹp phòng sạch sẽ thoang mát hơn</li><li>- Tránh các mầm bệnh</li><li>- Giúp tạo được một thói quen tốt</li><li>2. Quy trình&nbsp;</li><li>- Dọn dẹp nhà tắm</li><li>- lau tường + lau phòng&nbsp;</li><li>- dọn dẹp bếp cho gọn gàngàng</li></ul>', '2024-10-20', 'done', '2024-10-19 05:25:06', '2024-10-20 05:12:29'),
(11, 3, 'Cập nhật Task ngày mới', '<ol><li>1. Mục tiêu</li></ol><ul><li>- Kiểm tra công việc ngày cũ đã làm chưa</li><li>- Đánh giá được quy trình làm</li><li>- Học được thói quen hàng ngày</li><li>- Soạn trước những việc cần làm cho ngày mới</li><li>2. Quy trình</li><li>- Soạn 10 công việc sắp làm cho ngày mới</li><li>- Soạn trước 10h để không làm cho mất giấc ngủ</li><li>&nbsp;</li></ul>', '2024-10-20', 'done', '2024-10-19 05:28:10', '2024-10-20 06:48:16'),
(12, 3, 'Tập thể dục', '<ol><li>1. Mục tiêu</li></ol><ul><li>- Để có thể lực tốt</li><li>- Giúp giảm đi sự lười biếng và giảm stress</li><li>- Giúp bảo vệ được bản thân</li><li>2. Quy trình</li><li>- Sáng dậy lúlúc 6h30</li><li>- Tập boxing trong vòng 30 phút</li><li>- Ăn sáng</li></ul>', '2024-10-21', 'done', '2024-10-20 06:19:07', '2024-10-21 05:37:52'),
(13, 3, 'Làm việc', '<ol><li>1. Mục tiêu</li></ol><ul><li>- Tìm hiểu thêm về dự án</li><li>- Học được cách quản lý luồng</li><li>- Không bị người khác cười chê</li><li>- Có thể vượt qua được thử thách</li><li>2. Quy trình</li><li>- Tìm hiểu về các cách thay đổi trong report</li><li>- Tao ra page mới</li><li>- Tìm cách khi người dùng click vào f5 sẽ show report</li></ul>', '2024-10-21', 'done', '2024-10-20 06:22:20', '2024-10-21 03:51:13'),
(14, 3, 'Giao diện learn more', '<ol><li>1. Mục tiêu</li></ol><ul><li>- Hoàn thành được giao diện test và học từ vựng</li><li>- Để bổ sung thêm được chức năng</li><li>- Để Tạo thêm đđược cảm giác mới khi học</li><li>2. Quy trình&nbsp;</li><li>- Làm giao diện hiển thị từ vựng + chức năng</li><li>- Làm giao diện bài test và cách thức kiểm tra + chức năng</li><li>- Lưu kết quả khi test&nbsp;</li></ul>', '2024-10-21', 'doing', '2024-10-20 06:25:59', '2024-10-21 03:51:15'),
(15, 3, 'Học tiếng nhật', '<ol><li>1. Mục tiêu</li></ol><ul><li>- Giao tiếp được với người nhật.</li><li>- Có thêm kiến thức để thi bằng N3 chính thức</li><li>- Để nói chuyện mà người khác không hiểu</li><li>- Có thể vượt qua bài phỏng vấn tốt đẹp</li><li>2. Quy trình</li><li>- Soạn bài 2 + 3 trong tiếng nhật</li><li>- Học bài giới thiệu về bản thân bằng tiếng nhật</li><li>- Nghe một bài tiếng nhật</li></ul>', '2024-10-21', 'doing', '2024-10-20 06:29:23', '2024-10-21 03:51:17'),
(16, 3, 'Học tiếng anh', '<ol><li>1. Mục tiêu</li></ol><ul><li>- Có thể giao tiếp với người nước ngoài&nbsp;</li><li>- Thi bằng toeic để được tăng lương</li><li>- Tránh bị người khác xem thường</li><li>2. Quy trình</li><li>- Học từ vựng bài 2 trong hack não&nbsp;</li><li>- soạn thảo một bài tiếng nhật</li><li>- Nghe một bbài giới thiệu bằng tiếng anh</li><li>- Học bài lesson 1 tiếng ananh</li></ul>', '2024-10-21', 'doing', '2024-10-20 06:36:23', '2024-10-21 03:51:19'),
(17, 3, 'Chi tiêu', '<ol><li>1. Mục tiêu</li></ol><ul><li>- Quản lý được cho tiêu trong ngày/tháng&nbsp;</li><li>- Xem cách thức sử dụng đã đúng hay chưa</li><li>- Kiểm tra được phần đã sử dụng và phận dư trong tháng</li><li>2. Quy trình</li><li>- Nhập chi tiêu trong ngay</li><li>- Nhập trước 8h tối</li><li>- Kiểm tra số tiền còn lạlại</li></ul>', '2024-10-21', 'done', '2024-10-20 06:38:42', '2024-10-21 03:52:03'),
(18, 3, 'Thời gian ngủ', '<ol><li>1. Mục tiêu</li></ol><ul><li>- Quản lý được giờ giấc ngủ</li><li>- Giúp tăng sức khỏe</li><li>- Làm giảm đi quá trình buồn ngủ khi làm việc</li><li>2. Quy trình</li><li>- đánh răng trước 8h tối</li><li>- Ngủ vào lúc 11h</li></ul>', '2024-10-21', 'open', '2024-10-20 06:43:01', '2024-10-20 06:43:01'),
(19, 3, 'Cập nhật task', '<ol><li>1. Mục tiêu</li></ol><ul><li>- Quản lý được công việc ngày mới</li><li>- Tạo một thói quen cho bản thân</li><li>- Tránh làm dụng thời gian quá nhiều</li><li>2. Quy trình&nbsp;</li><li>- Nhập toàn bộ công việc ngay mai</li><li>- Ghi rõ nội dung cần làm để không bị thiếu sósót&nbsp;</li></ul>', '2024-10-21', 'open', '2024-10-20 06:45:31', '2024-10-20 06:45:31'),
(20, 3, 'Tình huống', '<ol><li>1. Mục tiêu</li></ol><ul><li>- Biết thêm được nhiều hướng giải quyết vấn đề khi gặp phải</li><li>- Có thể qua bài phỏng vấn sắp tới</li><li>- Tránh được những sai lằm không đáng kể</li><li>2. Quy trình</li><li>- Xem lại 5 câu vừa mới làm khi sáng&nbsp;</li><li>- Làm thêm 5 câu tình huống và cách giải quyết vấn đề</li><li>&nbsp;</li></ul>', '2024-10-21', 'open', '2024-10-20 06:47:55', '2024-10-20 06:47:55'),
(21, 3, 'Học thêm tiếng nhật', '<p>Học thêm</p>', '2024-11-05', 'doing', '2024-11-05 07:34:14', '2024-11-05 07:35:00'),
(22, 10, 'Dậy vào lúc 6h30', '<p>Dậy sớm là một thói quen tốt</p><p>Tránh bị trễ thời gian làm việc&nbsp;</p><p>sáng phải ăn sáng trước khi đi làlàm</p>', '2024-11-08', 'open', '2024-11-07 09:51:39', '2024-11-07 09:51:39'),
(23, 10, 'Phải hoàn thành nhiệm vụ es trong vòng 1 tiếng', '<p>Phải hoàn thành nhiệm vụ es trong vòng 1 tiếng</p><p>Tìm hiểu về luồng và ghi chú lại</p><p>Hãy kiểm tra xem còn lỗi nào trước khi giao</p><p>Báo cáo với anh việc trình trạng hiện tại của backlog</p>', '2024-11-08', 'open', '2024-11-07 09:53:11', '2024-11-07 09:53:11'),
(24, 10, 'Test tính năng cho web mong cỗ', '<p>Hoàn thành task trong vòng 3 tiếng</p><p>Kiểm tra xem có lỗi gì cần báo lại hay không</p><p>kiểm tra chức năng đã hoàn chỉnh hay chưa</p><p>CHụp hình + báo lại với người quản llý</p>', '2024-11-08', 'open', '2024-11-07 09:54:37', '2024-11-07 09:54:37'),
(25, 10, 'Làm profile-me', '<p>Dành thời gian 6 tiếng để hoàn thành công việc hôm nanay</p>', '2024-11-08', 'open', '2024-11-07 09:55:14', '2024-11-07 09:55:14'),
(26, 10, 'Tìm hiểu thêm về SVF', '<ul><li>Tìm hiểu tổng quan về SVF</li><li>Tìm hiểu về điểm mạnh và điểm yếu</li><li>Tìm hiểu vai ttrò của cách sử dụng</li><li>Tìm hiểu thông tin thêm về hình ảnh để tiện&nbsp;</li><li>Ôn lại những điều bên trên</li></ul>', '2024-11-08', 'open', '2024-11-07 09:57:24', '2024-11-07 09:57:24'),
(27, 10, 'Chiều về ghé mua cơm', '<p>Ghé mua cơm gần nhà</p><p>mua bột giặgiặt</p>', '2024-11-08', 'open', '2024-11-07 09:57:58', '2024-11-07 09:57:58'),
(28, 10, 'Hoàn thành chi tiêu cho ngày trước 8h', '<ul><li>điện mọi thông tin có trong phiếu chi tiêu để hoàn thiện</li></ul>', '2024-11-08', 'open', '2024-11-07 09:58:49', '2024-11-07 09:58:49'),
(29, 10, 'Hoàn thiện Issue trước khi đi ngủ', '<ul><li>- Tăng thêm khả năng quản lý cho bản thâthân</li></ul>', '2024-11-08', 'open', '2024-11-07 09:59:49', '2024-11-07 09:59:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `todos`
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
-- Đang đổ dữ liệu cho bảng `todos`
--

INSERT INTO `todos` (`id`, `category_id`, `user_id`, `name`, `description`, `date_start`, `date_end`, `status`, `created_at`, `updated_at`) VALUES
(4, 26, 3, 'Học 1 bài tiếng nhật [A-Phan Tuấn Kiệt ]', '<p>Sẽ học theo lộ tr&igrave;nh tiếng nhật đ&atilde; đề ra sẳn v&agrave; c&oacute; thể l&agrave;m th&ecirc;m danh s&aacute;ch lộ tr&igrave;nh l&agrave;m việc a</p>', '2024-09-06', '2024-09-10', 1, '2024-09-27 19:27:45', '2024-09-27 19:42:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `email_verified_at`, `password`, `phone`, `gender`, `roles`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Phan Tuấn Kiệt', 'tuankiet20@gmail.com', NULL, '$2y$10$2abpg9G68h5HhUZtLtrrgeWAjG2bZDu7FP3hWHKTjhmvnNyp/erWm', 768173369, '0', '1', '', NULL, '2024-09-24 18:14:17', '2024-09-24 18:14:17'),
(8, 'Đoàn Thi Thu Trang', 'thutrang10@gmail.com', NULL, '$2y$10$7tewKetIpyeAFNWRJCwVyOKxsGARXbbgTmIzLir2/DFuu0c5Dc4F2', 837230102, '1', 'Luật sư', '', NULL, '2024-10-26 09:50:05', '2024-10-26 09:50:05'),
(9, 'Phan Duy Linh', 'duylinksky@gmail.com', NULL, '$2y$10$weWDhzZHKxh.6QZHoBI0SOUkY5YCnZ1QulAmeieXNKO/TpWP/8FXy', 989392900, '0', 'Nhân Viên', '', NULL, '2024-10-26 09:52:56', '2024-10-26 09:52:56'),
(10, 'Phan Tuấn Kiệt', 'phantuankietIT@gmail.com', NULL, '$2y$10$x9Rdniqdll5N9UteLLXRM.MsbBlFqHOnciayo3QzGuu.oElQbcudS', 768173369, 'Nam', '1', 'Bến Tre', NULL, '2024-11-07 07:43:23', '2024-11-07 07:43:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vocabularies`
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

--
-- Đang đổ dữ liệu cho bảng `vocabularies`
--

INSERT INTO `vocabularies` (`id`, `language_id`, `category_id`, `name`, `meaning_of_word`, `romaji`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 'はじめまして', 'Rất hân hạnh được gặp bạn.', 'hajimemashite', '2024-10-04 07:30:53', '2024-10-04 08:51:41'),
(2, 3, 5, 'わたし', 'Tôi', 'watashi', '2024-10-04 07:33:10', '2024-10-04 07:33:10'),
(3, 3, 5, 'ベトナム', 'Việt Nam', 'Betonamu', '2024-10-04 07:36:25', '2024-10-04 07:36:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `workflows`
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
-- Đang đổ dữ liệu cho bảng `workflows`
--

INSERT INTO `workflows` (`id`, `user_id`, `name`, `description`, `current_start`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Học tiếng nhật', '<p>b&agrave;i 1, b&agrave;i 2, b&agrave;i 3, ngữ ph&aacute;p + giới thiệu về bản th&acirc;n</p>', '2024-10-16', 'open', '2024-10-15 07:48:54', '2024-10-19 12:30:54'),
(2, 3, 'Học tiếng anh', '<p>Học từ 1 b&agrave;i từ vựng tiếng anh, sau đ&oacute; soạn một b&agrave;i giới thiệu bản th&acirc;n.</p>\r\n\r\n<pre>\r\n- 1 b&agrave;i đọc </pre>\r\n\r\n<pre>\r\n- 1 b&agrave;i từ vựng bao gồm 30 từ </pre>\r\n\r\n<pre>\r\n- 20 c&acirc;u ngữ ph&aacute;p c&oacute; trong b&agrave;i giới thiệu</pre>\r\n\r\n<pre>\r\n- 30 c&acirc;u test giữa từ vựng v&agrave; tiếng anh</pre>', '2024-10-16', 'open', '2024-10-15 08:06:01', '2024-10-15 08:06:01'),
(3, 3, 'create message', '<pre>\r\n- Tạo giao diện message \r\n- Th&ecirc;m chức năng đăng\r\n- Th&ecirc;m về chức năng th&ecirc;m bạn b&egrave; của facebook</pre>', '2024-10-16', 'open', '2024-10-15 08:11:31', '2024-10-15 08:11:31'),
(4, 3, 'Báo cáo công việc', '<pre>\r\n- Tạo Salary trước 10h t&ocirc;i\r\n- Th&ecirc;m th&ocirc;ng tin đi l&agrave;m\r\n- Nhiệm vụ đ&atilde; l&agrave;m \r\n- Nhiệm vụ c&ograve;n thiếu s&oacute;t</pre>', '2024-10-16', 'open', '2024-10-15 08:13:23', '2024-10-15 08:13:23'),
(5, 3, 'Chi tiêu cho ngày', '<pre>\r\n- Nhập chi ti&ecirc;u cho ng&agrave;y\r\n- Tổng số chi ti&ecirc;u trong tuần\r\n- Kiểm tra lại th&ocirc;ng tin</pre>', '2024-10-16', 'open', '2024-10-15 08:15:09', '2024-10-15 08:15:09'),
(6, 3, 'Tạo trang Cv', '<p>- Tạo trang CV với html css javascript</p>\r\n\r\n<p>- T&igrave;m hiểu c&aacute;ch đownload pdf với CV html</p>\r\n\r\n<p>- T&igrave;m c&aacute;ch lữ liệu CV v&agrave;o đa ta</p>', '2024-10-16', 'open', '2024-10-15 08:18:28', '2024-10-15 08:18:28');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `category_tasks`
--
ALTER TABLE `category_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`user_id`);

--
-- Chỉ mục cho bảng `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codes_user_id_foreign` (`user_id`),
  ADD KEY `codes_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colors_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_issue_id_foreign` (`issue_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`),
  ADD KEY `components_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `future_directions`
--
ALTER TABLE `future_directions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `future_directions_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ideas_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issues_user_id_foreign` (`user_id`),
  ADD KEY `issues_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `issue_users`
--
ALTER TABLE `issue_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issue_users_issue_id_foreign` (`issue_id`),
  ADD KEY `issue_users_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `javascripts`
--
ALTER TABLE `javascripts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `javascripts_user_id_foreign` (`user_id`),
  ADD KEY `javascripts_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `learn_mores`
--
ALTER TABLE `learn_mores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `learn_mores_user_id_foreign` (`user_id`),
  ADD KEY `learn_mores_language_id_foreign` (`language_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `paragraphs`
--
ALTER TABLE `paragraphs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paragraphs_category_id_foreign` (`category_id`),
  ADD KEY `paragraphs_language_id_foreign` (`language_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_comments_post_id_foreign` (`post_id`),
  ADD KEY `post_comments_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_images_post_id_foreign` (`post_id`);

--
-- Chỉ mục cho bảng `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_likes_post_id_foreign` (`post_id`),
  ADD KEY `post_likes_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `problem_processes`
--
ALTER TABLE `problem_processes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `problem_processes_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `professional_education`
--
ALTER TABLE `professional_education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professional_education_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `professional_skills`
--
ALTER TABLE `professional_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professional_skills_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `profile_experiences`
--
ALTER TABLE `profile_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_experiences_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `profile_hobbies`
--
ALTER TABLE `profile_hobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_hobbies_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `profile_languages`
--
ALTER TABLE `profile_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_languages_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `profile_objectives`
--
ALTER TABLE `profile_objectives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_objectives_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `profile_projects`
--
ALTER TABLE `profile_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_projects_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `quiz_items`
--
ALTER TABLE `quiz_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_items_language_id_foreign` (`language_id`),
  ADD KEY `quiz_items_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_user_id_foreign` (`user_id`),
  ADD KEY `results_category_id_foreign` (`category_id`),
  ADD KEY `results_language_id_foreign` (`language_id`);

--
-- Chỉ mục cho bảng `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salaries_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `structures_language_id_foreign` (`language_id`),
  ADD KEY `structures_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `todos_category_id_foreign` (`category_id`),
  ADD KEY `todos_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `vocabularies`
--
ALTER TABLE `vocabularies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vocabularies_category_id_foreign` (`category_id`),
  ADD KEY `vocabularies_language_id_foreign` (`language_id`);

--
-- Chỉ mục cho bảng `workflows`
--
ALTER TABLE `workflows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workflows_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `category_tasks`
--
ALTER TABLE `category_tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `codes`
--
ALTER TABLE `codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `components`
--
ALTER TABLE `components`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `future_directions`
--
ALTER TABLE `future_directions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `issue_users`
--
ALTER TABLE `issue_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `javascripts`
--
ALTER TABLE `javascripts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `learn_mores`
--
ALTER TABLE `learn_mores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `paragraphs`
--
ALTER TABLE `paragraphs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `problem_processes`
--
ALTER TABLE `problem_processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `professional_education`
--
ALTER TABLE `professional_education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `professional_skills`
--
ALTER TABLE `professional_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `profile_experiences`
--
ALTER TABLE `profile_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `profile_hobbies`
--
ALTER TABLE `profile_hobbies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `profile_languages`
--
ALTER TABLE `profile_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `profile_objectives`
--
ALTER TABLE `profile_objectives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `profile_projects`
--
ALTER TABLE `profile_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `quiz_items`
--
ALTER TABLE `quiz_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `structures`
--
ALTER TABLE `structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `vocabularies`
--
ALTER TABLE `vocabularies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `workflows`
--
ALTER TABLE `workflows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `codes`
--
ALTER TABLE `codes`
  ADD CONSTRAINT `codes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `codes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `colors`
--
ALTER TABLE `colors`
  ADD CONSTRAINT `colors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_issue_id_foreign` FOREIGN KEY (`issue_id`) REFERENCES `issues` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `components`
--
ALTER TABLE `components`
  ADD CONSTRAINT `components_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `future_directions`
--
ALTER TABLE `future_directions`
  ADD CONSTRAINT `future_directions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ideas`
--
ALTER TABLE `ideas`
  ADD CONSTRAINT `ideas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `issues`
--
ALTER TABLE `issues`
  ADD CONSTRAINT `issues_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `issues_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `issue_users`
--
ALTER TABLE `issue_users`
  ADD CONSTRAINT `issue_users_issue_id_foreign` FOREIGN KEY (`issue_id`) REFERENCES `issues` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `issue_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `javascripts`
--
ALTER TABLE `javascripts`
  ADD CONSTRAINT `javascripts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `javascripts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `learn_mores`
--
ALTER TABLE `learn_mores`
  ADD CONSTRAINT `learn_mores_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `learn_mores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `paragraphs`
--
ALTER TABLE `paragraphs`
  ADD CONSTRAINT `paragraphs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `paragraphs_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `post_comments`
--
ALTER TABLE `post_comments`
  ADD CONSTRAINT `post_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `post_images`
--
ALTER TABLE `post_images`
  ADD CONSTRAINT `post_images_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `post_likes`
--
ALTER TABLE `post_likes`
  ADD CONSTRAINT `post_likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `problem_processes`
--
ALTER TABLE `problem_processes`
  ADD CONSTRAINT `problem_processes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `professional_education`
--
ALTER TABLE `professional_education`
  ADD CONSTRAINT `professional_education_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `professional_skills`
--
ALTER TABLE `professional_skills`
  ADD CONSTRAINT `professional_skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `profile_experiences`
--
ALTER TABLE `profile_experiences`
  ADD CONSTRAINT `profile_experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `profile_hobbies`
--
ALTER TABLE `profile_hobbies`
  ADD CONSTRAINT `profile_hobbies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `profile_languages`
--
ALTER TABLE `profile_languages`
  ADD CONSTRAINT `profile_languages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `profile_objectives`
--
ALTER TABLE `profile_objectives`
  ADD CONSTRAINT `profile_objectives_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `profile_projects`
--
ALTER TABLE `profile_projects`
  ADD CONSTRAINT `profile_projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `quiz_items`
--
ALTER TABLE `quiz_items`
  ADD CONSTRAINT `quiz_items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `quiz_items_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `structures`
--
ALTER TABLE `structures`
  ADD CONSTRAINT `structures_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `structures_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `todos`
--
ALTER TABLE `todos`
  ADD CONSTRAINT `todos_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_tasks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `todos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `vocabularies`
--
ALTER TABLE `vocabularies`
  ADD CONSTRAINT `vocabularies_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vocabularies_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `workflows`
--
ALTER TABLE `workflows`
  ADD CONSTRAINT `workflows_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
