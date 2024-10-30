-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2024 lúc 09:44 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ecommerce`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `is_host` int(11) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `is_host`, `create_at`) VALUES
(3, 'Featured Product', 1, '2024-10-12 21:25:55'),
(4, 'Vegetables', 1, '2024-10-12 22:07:03'),
(6, 'Fresh Meat', 1, '2024-10-13 04:02:06'),
(7, 'Fresh Meat 2', 1, '2024-10-13 04:11:28'),
(8, 'Fresh Meat 3', 1, '2024-10-13 04:11:32'),
(10, 'Fresh Meatsssss', 1, '2024-10-28 19:22:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(350) DEFAULT NULL,
  `iframe` varchar(350) NOT NULL,
  `open_time` varchar(350) DEFAULT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `email`, `phone_number`, `address`, `iframe`, `open_time`, `create_at`) VALUES
(1, 'khongvandt14082004@gmail.com', '0987654321', 'hà nội', '', '10:00 am to 23:00 pm', '2024-10-16 14:10:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `display`
--

CREATE TABLE `display` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `title2` varchar(500) DEFAULT NULL,
  `title3` varchar(500) DEFAULT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `subject_name` varchar(350) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `User_id`, `fullname`, `email`, `phone_number`, `subject_name`, `note`, `create_at`) VALUES
(2, 1, 'vandt14', 'Admin132004@gmail.com', '0987654321', 'sss', 'ww', '2024-10-22 13:57:44'),
(3, 1, 'vandt14', 'Admin132004@gmail.com', '0987654321', 'sss', 'ss', '2024-10-22 14:01:57'),
(4, 1, 'vandt14', 'Admin132004@gmail.com', '0987654321', 'sss', 'ty', '2024-10-22 14:16:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `galery`
--

CREATE TABLE `galery` (
  `Galery_id` int(11) NOT NULL,
  `product_id2` int(11) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `galery`
--

INSERT INTO `galery` (`Galery_id`, `product_id2`, `img2`, `create_at`) VALUES
(12, 12, 'ad-image-2.png', '2024-10-18 01:01:38'),
(13, 13, 'ad-image-1.png', '2024-10-18 18:06:18'),
(14, 14, 'ad-image-1.png', '2024-10-18 18:24:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `name_shop`
--

CREATE TABLE `name_shop` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `img_t` varchar(50) DEFAULT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `User_id`, `fullname`, `phone_number`, `address`, `note`, `order_date`, `status`, `create_at`) VALUES
(2, 1, 'tes', '0987654321', 'test lại api', 'ssss', '2024-10-21 16:17:42', 0, '2024-10-21 21:17:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `total_money` int(11) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `num`, `total_money`, `create_at`) VALUES
(1, 2, 12, 4, 48000, '2024-10-21 21:17:42'),
(2, 2, 14, 4, 80000, '2024-10-21 21:17:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name_sp` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `description` longtext NOT NULL,
  `is_host` int(11) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `name_sp`, `price`, `discount`, `img`, `content`, `description`, `is_host`, `create_at`) VALUES
(12, 4, 'Free delivery', 12000, 11000, 'ad-image-2.png', '', '0', 1, '2024-10-18 01:01:38'),
(13, 4, 'Vetgetable ', 2000000, 2000000, 'ad-image-2.png', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', 1, '2024-10-18 18:06:18'),
(14, 6, 'Vetgetable test', 20000, 20000, 'ad-image-2.png', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', 1, '2024-10-18 18:24:41'),
(15, 4, 'Vetgetable’s Package', 2000000, 2000000, 'thumb-orange-juice.png', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', '0', 1, '2024-10-18 18:29:17'),
(16, 7, 'Vetgetable 222', 2000000, 1000000, 'ad-image-2.png', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', '0', 1, '2024-10-18 18:30:02'),
(17, 8, 'Vetgetable’s Package', 20000, 20000, 'ad-image-4.png', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', 1, '2024-10-18 18:39:30'),
(18, 6, 'Vetgetable’s Package', 20000, 20000, 'product-thumb-14.jpg', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', '0', 1, '2024-10-18 18:43:35'),
(19, 6, 'Vetgetable  ', 20000, 20000, 'product-thumb-1.png', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquetaeleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquetaeleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquetaeleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquetaeleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', 0, '2024-10-18 18:45:25'),
(20, 3, 'Vetgetable’s Package', 20000, 20000, 'ad-image-4.png', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquetaeleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquetaeleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquetaeleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', 1, '2024-10-18 18:52:49'),
(21, 3, 'Vetgetable ', 20000, 20000, 'thumb-bananas.png', 'Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquetaeleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...', '0', 1, '2024-10-18 18:53:47'),
(22, 3, 'Vetgetable’s Package', 1000000, 1000000, 'product-thumb-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 1, '2024-10-23 19:19:06'),
(23, 3, 'Vetgetable ', 1000000, 1000000, 'thumb-tomatoes.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 1, '2024-10-23 19:19:40'),
(24, 3, 'Vetgetable ', 1000000, 1000000, 'slide-1.jpg', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 1, '2024-10-23 19:20:11'),
(25, 4, 'Vetgetable 3333', 100000, 10000, 'thumb-raspberries.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 1, '2024-10-23 19:20:38'),
(26, 4, 'Vetgetable ', 100000, 10000, 'thumb-avocado.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\nTrứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 1, '2024-10-23 19:21:06'),
(42, 6, 'Sản phẩm A', 100000, 10, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 19:59:30'),
(43, 6, 'Sản phẩm B', 150000, 15, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 19:59:30'),
(44, 6, 'Sản phẩm C', 200000, 20, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 19:59:30'),
(45, 6, 'Sản phẩm D', 120000, 5, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 19:59:30'),
(46, 6, 'Sản phẩm E', 180000, 25, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Mô tả chi tiết sản phẩm E', 1, '2024-10-23 19:59:30'),
(47, 6, 'Sản phẩm F', 250000, 30, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 19:59:30'),
(48, 6, 'Sản phẩm G', 300000, 40, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 19:59:30'),
(49, 6, 'Sản phẩm H', 110000, 10, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 19:59:30'),
(50, 6, 'Sản phẩm I', 160000, 15, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 19:59:30'),
(51, 6, 'Sản phẩm J', 210000, 20, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (621, 627, 631) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 19:59:30'),
(52, 8, 'Sản phẩm A', 100000, 10, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:05:00'),
(53, 8, 'Sản phẩm B', 150000, 15, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:05:00'),
(54, 8, 'Sản phẩm C', 200000, 20, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:05:00'),
(55, 8, 'Sản phẩm D', 120000, 5, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:05:00'),
(56, 8, 'Sản phẩm E', 180000, 25, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Mô tả chi tiết sản phẩm E', 1, '2024-10-23 20:05:00'),
(57, 8, 'Sản phẩm F', 250000, 30, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:05:00'),
(58, 8, 'Sản phẩm G', 300000, 40, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:05:00'),
(59, 8, 'Sản phẩm H', 110000, 10, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:05:00'),
(60, 8, 'Sản phẩm I', 180000, 15, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:05:00'),
(61, 8, 'Sản phẩm J', 210000, 20, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (821, 827, 831) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:05:00'),
(62, 7, 'Sản phẩm A', 100000, 10, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:10:41'),
(63, 7, 'Sản phẩm B', 150000, 15, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:10:41'),
(64, 7, 'Sản phẩm C', 200000, 20, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:10:41'),
(65, 7, 'Sản phẩm D', 120000, 5, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.\r\n', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:10:41'),
(66, 7, 'Sản phẩm E', 170000, 25, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Mô tả chi tiết sản phẩm E', 1, '2024-10-23 20:10:41'),
(67, 7, 'Sản phẩm F', 250000, 30, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:10:41'),
(68, 7, 'Sản phẩm G', 300000, 40, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:10:41'),
(69, 7, 'Sản phẩm H', 110000, 10, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:10:41'),
(70, 7, 'Sản phẩm I', 170000, 15, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:10:41'),
(71, 7, 'Sản phẩm J', 210000, 20, 'ad-image-2.png', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 'Trứng (25%), bột mì, đường, dầu thực vật, chà bông gà (ruốc thịt gà) 5.1% - thịt ức gà tươi, đường, chất điều vị (721, 727, 731) nước mắm, nước tương, muối i-ốt - glucose syrup, chất nhũ hoá, bột lòng trắng trứng, cồn thực phẩm, chất giữ ẩm, isomalto oligo syrup, chất ổn định, muối i-ốt, bột chiết xuất nấm men, bơ, hương tổng hợp, chất tạo xốp, chất điều chỉnh độ acid, sắt, chất chống đông vón, chất mang.', 1, '2024-10-23 20:10:41'),
(72, 4, 'Vetgetable test lại giao diện', 11111, 11111, 'thumb-tuna.jpg', '11111', '11111', 1, '2024-10-28 20:25:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` int(11) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`User_id`, `user_name`, `email`, `phone_number`, `password`, `role`, `create_at`) VALUES
(1, 'admin13', 'Admin132004@gmail.com', '0987654321', '1b4eefee6c9cd01ccd45b955223a3efce8820fb0', 0, '2024-10-12 20:19:35'),
(2, 'admin@radiocab.com', 'admin@radiocab.com', '0981967757', 'ff71c5f5d2efc7871295eec45c7a4f3bdc236bff', 1, '2024-10-23 18:41:39'),
(3, 'root', 'khongvandt14082004@gmail.com', '0981967757', '$2y$10$1eDLxno/oDn4PE86NjcE2OT10pt5CWMTq', 1, '2024-10-23 18:56:01'),
(4, 'root12', 'khongvandt1403382004@gmail.com', '0981967757', 'cbfdac6008f9cab4083784cbd1874f76618d2a97', 1, '2024-10-23 18:58:06');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_id` (`User_id`);

--
-- Chỉ mục cho bảng `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`Galery_id`),
  ADD KEY `product_id2` (`product_id2`);

--
-- Chỉ mục cho bảng `name_shop`
--
ALTER TABLE `name_shop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `display`
--
ALTER TABLE `display`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `galery`
--
ALTER TABLE `galery`
  MODIFY `Galery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `name_shop`
--
ALTER TABLE `name_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Các ràng buộc cho bảng `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`product_id2`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
