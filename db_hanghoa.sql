-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 08:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

CREATE DATABASE db_hanghoa;
USE db_hanghoa;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hanghoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id_blog` int(10) NOT NULL,
  `ten_blog` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id_blog`, `ten_blog`, `mota`, `url`, `tacgia`, `ngay`) VALUES
(1, 'Chuyển sinh thành Aether, tôi trở thành culi lúc nào chẳng hay', 'Câu chuyện du ngoạn Teyvat', 'blog0', 'Mihoyo', '2021-10-10'),
(2, 'Du lịch một mình thật tuyệt', 'Nhật ký trở thành đại gia', 'blog1', 'Bùi Xuân Huấn', '2021-10-11'),
(3, 'Kiếm tiền thật dễ', 'em yêu trường em', 'blog2', 'Bùi Xuân Huấn', '2021-10-08'),
(4, 'Nhà bếp lấy cảm hứng từ Nhật Bản', 'Múa quạt dẻo như anh Bảnh', 'blog3', 'Ngô Bá Khá', '2021-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chitietsanpham`
--

CREATE TABLE `tbl_chitietsanpham` (
  `id_chitietsp` int(11) NOT NULL,
  `tacgia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `isHot` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chitietsanpham`
--

INSERT INTO `tbl_chitietsanpham` (`id_chitietsp`, `tacgia`, `url1`, `url2`, `url3`, `url4`, `isHot`) VALUES
(1, 'Ma Văn Kháng', 'product12', 'product13', 'product14', 'product15', 'true'),
(2, 'Albert Camus', 'product21', 'product22', 'product23', 'product25', 'true'),
(3, 'Higashino Keigo', 'product31', 'product36', 'product33', 'product34', 'true'),
(4, 'Paulo Coelho', 'product43', 'product46', 'product44', 'product47', 'true'),
(5, 'Neil Gaiman', 'product55', 'product52', 'product56', 'product58', 'true'),
(6, 'Lan Rùa', 'product61', 'product64', 'product65', 'product66', 'true'),
(7, 'Mèo Mốc', 'product76', 'product73', 'product73', 'product77', 'true'),
(8, 'Nhóm Tam Diệp Thảo', 'product81', 'product83', 'product85', 'product86', 'true'),
(9, 'Park Joon', 'product91', 'product93', 'product94', 'product95', 'false'),
(10, 'Rosie Nguyễn', 'product4', 'product3', 'product2', 'product1', 'false'),
(11, 'Jack Canfield, Mark Victor Hansen', 'product1', 'product12', 'product61', 'product91', 'false'),
(12, 'Dương Hành Triệt', 'product2', 'product62', 'product72', 'product82', 'false'),
(13, 'Dương Hành Triệt', 'product3', 'product63', 'product73', 'product83', 'false'),
(14, 'Dương Hành Triệt', 'product4', 'product64', 'product54', 'product74', 'false'),
(15, 'Dương Hành Triệt', 'product5', 'product55', 'product77', 'product45', 'false'),
(16, 'Thy Ngọc', 'product1', 'product12', 'product15', 'product17', 'false'),
(17, 'Nguyên Hồng', 'product11', 'product76', 'product16', 'product1', 'false'),
(18, 'Nguyên Hồng', 'product1', 'product12', 'product14', 'product13', 'false'),
(19, 'Han Kang', 'product9', 'product12', 'product11', 'product14', 'false'),
(20, 'First News', 'product21', 'product24', 'product23', 'product2', 'false'),
(21, 'First News', 'product23', 'product25', 'product26', 'product28', 'false'),
(22, 'Ann Swanson', 'product26', 'product25', 'product24', 'product23', 'false'),
(23, 'DK', 'product24', 'product25', 'product26', 'product27', 'false'),
(24, 'Viktor Mayer, SchÖnberger, Kenneth Cukier', 'product21', 'product22', 'product23', 'product2', 'false'),
(25, 'Trịnh Xuân Thuận', 'product23', 'product24', 'product26', 'product2', 'false'),
(26, 'Lương Đức Hiệp', 'product2', 'product22', 'product21', 'product24', 'false'),
(27, 'Lê Nguyễn', 'product22', 'product25', 'product24', 'product21', 'false'),
(28, 'Nguyễn Đức Dũng', 'product2', 'product23', 'product24', 'product25', 'false'),
(29, 'Lê Nguyễn', 'product23', 'product22', 'product20', 'product2', 'false'),
(30, 'Acacia C Parks, Stephen M Schueller', 'product3', 'product31', 'product32', 'product33', 'false'),
(31, 'Richard J. Gerrig, Philip G. Zimbardo', 'product37', 'product36', 'product35', 'product34', 'false'),
(32, 'Khương Nguy', 'product30', 'product31', 'product33', 'product3', 'false'),
(33, 'Trần Lộ', 'product3', 'product34', 'product35', 'product36', 'false'),
(34, 'Phổ Tường', 'product36', 'product32', 'product31', 'product3', 'false'),
(35, 'Gustave Le Bon', 'product3', 'product32', 'product31', 'product30', 'false'),
(36, 'Stanton E Samenow', 'product23', 'product32', 'product6', 'product3', 'false'),
(37, 'Patrick King', 'product31', 'product3', 'product47', 'product57', 'false'),
(38, 'Giản Tư Hải', 'product35', 'product3', 'product8', 'product31', 'false'),
(39, 'Lượng Lượng', 'product31', 'product3', 'product9', 'product40', 'false'),
(40, 'Arthur Conan Doyle', 'product44', 'product43', 'product42', 'product41', 'false'),
(41, 'Mick Finlay', 'product45', 'product4', 'product46', 'product47', 'false'),
(42, 'Gosho Aoyama, Mutsuki Watanabe, Takahisa Taira', 'product4', 'product2', 'product45', 'product46', 'false'),
(43, 'Gosho Aoyama, Mutsuki Watanabe, Takahisa Taira', 'product3', 'product4', 'product48', 'product41', 'false'),
(44, 'Seimaru Amagi, Yoraburo Kanari', 'product47', 'product42', 'product4', 'product41', 'false'),
(45, 'Seimaru Amagi, Yoraburo Kanari', 'product42', 'product43', 'product40', 'product23', 'false'),
(46, 'Guillermo Del Toro Chuck Hogan', 'product29', 'product93', 'product32', 'product21', 'false'),
(47, 'Guillermo Del Toro Chuck Hogan', 'product12', 'product21', 'product99', 'product49', 'false'),
(48, 'Nhạc Dũng', 'product42', 'product41', 'product8', 'product4', 'false'),
(49, 'Minato Kanae', 'product4', 'product9', 'product41', 'product42', 'false'),
(50, 'Cửu Bả Đao', 'product55', 'product54', 'product51', 'product5', 'false'),
(51, 'Lạc Hòa, Lâm Thúy Kim', 'product5', 'product1', 'product12', 'product21', 'false'),
(52, 'Bản Lật Tử', 'product54', 'product53', 'product2', 'product5', 'false'),
(53, 'Thủy Thiên Mặc', 'product5', 'product3', 'product12', 'product34', 'false'),
(54, 'Thủy Hợp', 'product12', 'product32', 'product4', 'product5', 'false'),
(55, 'Thủy Hợp', 'product5', 'product51', 'product52', 'product23', 'false'),
(56, 'Dorling Kindersley Limited', 'product26', 'product51', 'product6', 'product5', 'false'),
(57, 'Dorling Kindersley Limited', 'product7', 'product72', 'product23', 'product12', 'false'),
(58, 'Minh Long, Khánh Hòa', 'product12', 'product8', 'product5', 'product51', 'false'),
(59, 'William J Bennett', 'product5', 'product9', 'product51', 'product52', 'false'),
(60, 'Mạnh Linh', 'product2', 'product62', 'product1', 'product6', 'false'),
(61, 'Mạnh Linh', 'product1', 'product12', 'product6', 'product62', 'false'),
(62, 'Rob Colson', 'product23', 'product2', 'product6', 'product63', 'false'),
(63, 'Rob Colson', 'product12', 'product6', 'product3', 'product9', 'false'),
(64, 'Thạch Lam', 'product3', 'product12', 'product4', 'product6', 'false'),
(65, 'Phạm Ngọc Hiền', 'product5', 'product6', 'product12', 'product32', 'false'),
(66, 'Nguyễn Hữu Nam', 'product12', 'product60', 'product65', 'product62', 'false'),
(67, 'A J Cronin', 'product61', 'product6', 'product7', 'product62', 'false'),
(68, 'W Bruce Cameron', 'product2', 'product9', 'product8', 'product6', 'false'),
(69, 'Vũ Trọng Phụng', 'product6', 'product9', 'product10', 'product11', 'false'),
(70, 'Guillaume Musso', 'product84', 'product5', 'product12', 'product7', 'false'),
(71, 'Vũ Trọng Phụng', 'product72', 'product93', 'product33', 'product44', 'false'),
(72, 'Trâu Hoành Minh', 'product75', 'product23', 'product2', 'product7', 'false'),
(73, 'Paul Giran', 'product7', 'product3', 'product12', 'product83', 'false'),
(74, 'LS Nguyễn An', 'product44', 'product12', 'product4', 'product7', 'false'),
(75, 'LS Nguyễn An', 'product7', 'product5', 'product23', 'product44', 'false'),
(76, 'Robyn Conley Downs', 'product3', 'product12', 'product6', 'product7', 'false'),
(77, 'Konstantin Platonov', 'product7', 'product12', 'product44', 'product55', 'false'),
(78, 'Nhiều Tác Giả', 'product73', 'product8', 'product7', 'product1', 'false'),
(79, 'Jacques Dournes', 'product71', 'product7', 'product9', 'product12', 'false'),
(80, 'Rutger Bregman', 'product55', 'product44', 'product32', 'product8', 'false'),
(81, 'Gary Chapman, Arlene pellicane', 'product8', 'product1', 'product12', 'product33', 'false'),
(82, 'Michael Thompson, Catherine O‘Neill Grace, Lawrenc', 'product49', 'product20', 'product2', 'product8', 'false'),
(83, 'PGS TS Nguyễn Văn Dân', 'product6', 'product4', 'product3', 'product8', 'false'),
(84, 'Kelly Rimmer', 'product4', 'product8', 'product12', 'product56', 'false'),
(85, 'Nhiều tác giả', 'product83', 'product12', 'product5', 'product8', 'false'),
(86, 'Gosho Aoyama, Takahisa Taira', 'product8', 'product6', 'product1', 'product2', 'false'),
(87, 'Gosho Aoyama, Takahisa Taira', 'product44', 'product32', 'product8', 'product7', 'false'),
(88, 'Seimaru Amagi, Yoraburo Kanari', 'product12', 'product8', 'product55', 'product65', 'false'),
(89, 'Seimaru Amagi, Yoraburo Kanari', 'product43', 'product54', 'product9', 'product8', 'false'),
(90, 'John Bigwood, Kirstin Swanson', 'product9', 'product12', 'product100', 'product3', 'false'),
(91, 'Gosho Aoyama', 'product33', 'product12', 'product1', 'product9', 'false'),
(92, 'Hương Thảo', 'product9', 'product2', 'product12', 'product32', 'false'),
(93, 'Hương Thảo', 'product33', 'product12', 'product3', 'product9', 'false'),
(94, 'Ma Văn Kháng', 'product9', 'product4', 'product55', 'product67', 'false'),
(95, 'Nhiều Tác Giả', 'product34', 'product12', 'product5', 'product9', 'false'),
(96, 'Ma Y', 'product23', 'product9', 'product6', 'product14', 'false'),
(97, 'Nhiều tác giả', 'product9', 'product7', 'product12', 'product43', 'false'),
(98, 'Lý Hiểu Bình', 'product12', 'product100', 'product3', 'product9', 'false'),
(99, 'Higashino Keigo', 'product9', 'product12', 'product42', 'product23', 'false'),
(100, 'Ma Văn Kháng', 'product23', 'product54', 'product1', 'product21', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(101, 'Kinh dị'),
(102, 'Trinh Thám'),
(103, 'Lãng Mạn'),
(104, 'Thiếu nhi'),
(105, 'Khoa học'),
(106, 'Xã hội '),
(107, 'Tâm lý'),
(108, 'Tiểu thuyết');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_makhuyenmai`
--

CREATE TABLE `tbl_makhuyenmai` (
  `id_makm` int(10) NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phantram` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_makhuyenmai`
--

INSERT INTO `tbl_makhuyenmai` (`id_makm`, `code`, `phantram`) VALUES
(1, 'MU999', 20),
(2, 'FG888', 30),
(3, 'VIP888', 60);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoidung`
--

CREATE TABLE `tbl_nguoidung` (
  `id_nguoidung` int(11) NOT NULL,
  `tendangnhap` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quyenid` int(10) NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`id_nguoidung`, `tendangnhap`, `matkhau`, `email`, `quyenid`, `SDT`) VALUES
(1, 'admin', '12345678', 'saolove430@gmail.com', 3, 965860864),
(2, 'vuhoang', '63965189', 'saolove430@gmail.com', 1, 965860864),
(3, 'cheers', 'trantrong1', 'vuhoang.31191026916@st.ueh.edu.vn', 2, 965860864);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quyen`
--

CREATE TABLE `tbl_quyen` (
  `quyenid` int(11) NOT NULL,
  `tenquyen` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_quyen`
--

INSERT INTO `tbl_quyen` (`quyenid`, `tenquyen`) VALUES
(1, 'user'),
(2, 'mod'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `ten_sanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_chitietsp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `ten_sanpham`, `url`, `mota`, `gia`, `id_danhmuc`, `id_chitietsp`) VALUES
(1, 'Khu Vườn Ngôn Từ', 'product1', 'Khu Vườn Ngôn Từ', 116000, 101, 1),
(2, 'Your Name', 'product2', 'Your Name (nguyên bản tiếng Pháp: L\'Étranger, còn được dịch là Kẻ xa lạ hay Người dưng)', 94000, 108, 2),
(3, '5 Centimet trên giây', 'product3', '“Việc nghĩ ra một bài toán vô cùng khó và việc giải bài toán đó, việc nào khó hơn?”', 92000, 103, 3),
(4, 'Đứa Con Của Thời Tiết', 'product4', 'Tất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình của Santiago', 55000, 108, 4),
(5, 'Tanya Chiến Ký', 'product5', 'Khi Coraline bước qua cánh cửa, nó nhìn thấy một ngôi nhà giống hệt nhà mình', 47000, 101, 5),
(6, 'Ánh Sáng Chân Trời', 'product6', 'Tuổi trẻ đầy mộng mơ và tươi đẹp của ai cũng đã từng có một chàng trai bàn bên và một cô nàng lớp kế', 77000, 103, 6),
(7, 'Nhật Ký Bị Lãng Quên', 'product7', 'Mèo Mốc 2 - Chuyện Đèn Đỏ Và Cái Lỗ Đen Vũ Trụ\r\nChiến dịch \"mốc hóa\" thế giới đã chính thức trở lạ', 73000, 104, 7),
(8, 'Slime Taoshite 300 Nen', 'product8', 'Kỉ niệm tình yêu của bạn thường gắn liền với điều gì? Một bản nhạc, một mùi hương, một phong cản', 32000, 103, 8),
(9, 'Thế Giới Này Sẽ Chẳng Có Gì Thay Đổi Kể Cả Khi Bạn Khóc', 'product9', 'Thế Giới Này Sẽ Chẳng Có Gì Thay Đổi Kể Cả Khi Bạn Khóc\r\nTác phẩm giành giải thưởng văn học ', 62000, 103, 9),
(10, 'Tuổi Trẻ Đáng Giá Bao Nhiêu', 'product10', '“Bạn hối tiếc vì không nắm bắt lấy một cơ hội nào đó, chẳng có ai phải mất ngủ.', 78000, 107, 10),
(11, 'Bí Quyết Để Đạt Được Ước Mơ', 'product11', 'Trong xã hội hiện nay, rất nhiều người đã rèn luyện thành công kỹ năng đặt câu hỏi ', 70000, 106, 11),
(12, 'Những Miền Linh Dị - Tập 4: Hàn Quốc', 'product12', 'Hàn Quốc, là kết thúc hay lại là một khởi đầu cho những hành trình ly kỳ mới? ', 104000, 101, 12),
(13, 'Những Miền Linh Dị - Tập 1: Thái Lan', 'product13', 'Hai người bạn thân bị yểm trong mình những lời nguyền bí ẩn - lời nguyền mắt đỏ và lời nguyền ', 104000, 101, 13),
(14, 'Những Miền Linh Dị - Tập 2 - Nhật Bản', 'product14', 'Lần theo dấu kẻ thù, hai người bạn tìm sang Nhật Bản, nào ngờ, lại bước nhầm lên con tàu ma ám', 104000, 101, 14),
(15, 'Những Miền Linh Dị - Tập 3 - Ấn Độ', 'product15', 'Những trải nghiệm kinh hoàng đã chia tách hai người bạn, chỉ còn 1 người phiêu bạt sang Ấn Độ ', 104000, 101, 15),
(16, 'Những Truyện Hay Viết Cho Thiếu Nhi ', 'product16', 'Tuyển tập những truyện hay viết cho thiếu nhi của nhà văn Thy Ngọc', 47500, 104, 16),
(17, 'Dưới Chân Cầu Mây', 'product17', 'Nguyên Hồng được mệnh danh là nhà văn của “những người khốn khổ\"', 27000, 104, 17),
(18, 'Những Ngày Thơ Ấu', 'product18', 'Hồi ký “Những ngày thơ ấu” là một trong những tác phẩm đặc sắc nhất của Nguyên Hồng', 64000, 108, 18),
(19, 'Trắng', 'product19', 'Trắng xóa nhòa ranh giới của các thể loại, làm mờ lằn ranh giữa tự truyện và văn chương ', 69000, 108, 19),
(20, 'Truyện Thiếu Nhi Hạt Giống Tâm Hồn - Kho Tàng Trong Túi Giấy', 'product20', 'Bộ sách Hạt giống cho tâm hồn dành cho thiếu nhi tập hợp những câu chuyện nhỏ ý nghĩa', 32000, 104, 20),
(21, 'Truyện Thiếu Nhi Hạt Giống Tâm Hồn - Phép Màu Có Giá Bao Nhiêu', 'product21', 'Mỗi câu chuyện mang gửi gắm mỗi bài học về tình yêu, lòng vị tha, dũng cả Các em sẽ cảm nhận được đi', 32000, 104, 21),
(22, 'Khoa Học Về Yoga', 'product22', 'Lối sống hiện đại khiến con người dễ gặp stress và mắc các chứng bệnh thời công nghệ số ', 255000, 105, 22),
(23, 'Khoa Học - Khái Lược Những Tư Tưởng Lớn', 'product23', 'hải chăng vũ trụ khởi nguyên từ vụ nổ Big Bang? Ánh sáng là sóng, là hạt – hay cả hai?', 351000, 105, 23),
(24, 'Khoa Học Khám Phá - Dữ Liệu Lớn', 'product24', 'Màu sơn nào có thể cho bạn biết một chiếc xe đã qua sử dụng vẫn còn trong tình trạng tốt? ', 119000, 105, 24),
(25, 'Khoa Học Khám Phá - Khát Vọng Tới Cái Vô Hạn', 'product25', 'Nếu từng có dịp đi tàu hỏa, bạn hẳn biết rằng hai đường ray phải song song với nhau để tàu có thể lă', 136000, 105, 25),
(26, 'Xã Hội Việt Nam', 'product26', 'Tại sao người ta lại định dạng quốc gia Việt Nam bằng một cái tên lai ghép giữa Ấn và Hoa', 80000, 106, 26),
(27, 'Xã Hội Việt Nam Qua Bút Ký Của Người Nước Ngoài', 'product27', ' Người viết không có tham vọng trình bày một cách có hệ thống và đầy đủ những tư liệu đó', 128000, 106, 27),
(28, 'Xã Hội Số', 'product28', '\"Xã hội số sẽ trở thành một nơi có văn hóa học tập nhằm nâng cao tính cạnh tranh \"', 261000, 106, 28),
(29, 'Xã Hội Việt Nam Thời Lê - Nguyễn', 'product29', 'Nguồn sử liệu về thời kỳ Lê - Nguyễn, từ thế kỷ XV đến nửa đầu thế kỷ XX', 146000, 106, 29),
(30, 'Tâm Lý Học Tích Cực', 'product30', 'Nếu được hỏi rằng “Tâm lý học tích cực đã dạy cho chúng ta điều gì?”', 302000, 107, 30),
(31, 'Tâm Lý Học Và Đời Sống', 'product31', ' Hiểu biết tâm lý con người là một lợi thế trong các hoạt động tương tác xã hội.', 331000, 107, 31),
(32, 'Tâm Lý Học Hành Vi', 'product32', 'Cuốn sách giúp bạn thấu hiểu bản thân mình và tâm lý những  người xung quanh!', 78000, 107, 32),
(33, 'Tâm Lý Học - Nghệ Thuật Giải Mã Hành Vi', 'product33', 'TÂM LÝ HỌC – NGHỆ THUẬT GIẢI MÃ HÀNH VI – CUỐN SÁCH GIÚP BẠN THẤU HIỂU THẾ GIỚI QUAN CỦA CON NGƯỜI', 123000, 107, 33),
(34, 'Tâm Lý Học Giao Tiếp', 'product34', 'Trong đời người, từ xin việc cho đến thăng chức, từ xã giao cho đến kết bạn, từ trò chuyện cho đến t', 86000, 107, 34),
(35, 'Tâm Lý Học Đám Đông ', 'product35', 'Gustave Le Bon (1841 - 1931) là nhà tâm lí học xã hội nổi tiếng người Pháp với lí thuyết về đám đông', 100000, 107, 35),
(36, 'Tâm Lý Học Tội Phạm - Tập 2', 'product36', '\"Tâm lý học tội phạm\" là bộ sách gồm 2 tập đề cập đến quyền lựa chọn, ý chí tự do,  thiện và ác', 113000, 107, 36),
(37, 'Tâm Lý Học Ứng Dụng', 'product37', 'Trí thông minh xã hội là việc hòa nhập, thu hút mọi người và khiến sự giao tiếp xã hội ', 105000, 107, 37),
(38, 'Minh Mạng Mật Chỉ', 'product38', 'Khoác lên mình vỏ bọc là một kiến trúc sư nam tính, hào hoa, yêu lịch sử', 104000, 102, 38),
(39, 'Thám Tử Gà Mờ', 'product39', 'Môt âm mưu nhằm vào cô giáo từ một học trò sắp lưu ban, sắp tới ngày hội thể thao', 91000, 102, 39),
(40, 'Thám Tử Sherlock Holmes', 'product40', 'Tên tôi là Sherlock Holmes. Công việc của tôi là để biết những gì mà người khác không biết…', 70000, 102, 40),
(41, 'Thám Tử Arrowood', 'product41', 'Thám Tử Arrowood -  Giới thượng lưu tìm đến Sherlock Holmes, số còn lại cậy nhờ Arrowood', 122000, 102, 41),
(42, 'Thám Tử Lừng Danh Conan - Lá Thư Thách Đấu Gửi Kudo Shinichi ', 'product42', 'Một lá thư thách đấu được gửi tới Kudo Shinichi ', 34000, 102, 42),
(43, 'Thám Tử Lừng Danh Conan - Kudo Shinichi Trở Lại ', 'product43', 'Truyền thuyết Thần Chim được lưu truyền tại một ngôi làng hoang vu hẻo lánh như thế nào?', 45000, 102, 43),
(44, 'Thám Tử Kindaichi (Tập 1) - Án Mạng Ở Nhà Hát Opera', 'product44', 'Kindaichi Hajime (tên thường gọi là Kindaichi) là một cậu học sinh trung học ở trường LiTong', 23000, 102, 44),
(45, 'Thám Tử Kindaichi (Tập 2) - Án Mạng Ở Làng Lục Giác', 'product45', 'Kindaichi Hajime (tên thường gọi là Kindaichi) là một cậu học sinh trung học ở trường LiTong ', 23000, 102, 45),
(46, 'Dị Chủng 3 - Đêm Vĩnh Hằng', 'product46', 'Thế giới đã thay đổi sau đại dịch ma cà rồng. Trong thời khắc đen tối nhất của lịch sử nhân loại', 125000, 101, 46),
(47, 'Dị Chủng 2 - Tàn Thế', 'product47', 'Dị Chủng 2 - Tàn Thế\r\n', 100000, 101, 47),
(48, 'Ám Dạ Hành', 'product48', 'Thành phố Thanh Dương liên tiếp xảy ra các vụ án mạng', 120000, 101, 48),
(49, 'Thú Tội', 'product49', 'Moriguchi là giáo viên cấp hai đồng thời là bà mẹ đơn thân của một cô gái 4 tuổi', 68000, 101, 49),
(50, 'Tình Yêu Hai Tốt Ba Xấu', 'product50', '“Này… Hình như cuối cùng em cũng biết ‘may mắn’ là gì rồi…”', 84000, 103, 50),
(51, 'Tình Yêu Kiên Cường Hơn Cái Chết', 'product51', 'Trong tất cả những năm tháng của hai kiếp người, cô dùng “lời nói dối”để giải bày tình yêu vô tư lợi', 90000, 103, 51),
(52, 'Tình Yêu Của Anh, Thế Giới Của Em ', 'product52', 'Trong thế giới ảo…\r\nCô là tác giả truyện tranh nổi tiếng “Đường Chỉ”, dung tác phẩm để mở ra trào lư', 143000, 103, 52),
(53, 'Tình Đầu Trong Vũ Trụ', 'product53', 'Tình Đầu Trong Vũ Trụ Anh là một mỹ nam quân nhân hoa đã có chủ', 63000, 103, 53),
(54, 'Tình Đầu Của Tiểu Yêu - Tập 1', 'product54', 'Một con chồn tinh và một con hồ ly tinh vì ăn trộm Mị đan quý hiếm nên bị Hồ tộc phái xuống núi ', 86000, 103, 54),
(55, 'Tình Đầu Của Tiểu Yêu - Tập 2\r\n', 'product55', 'Một con chồn tinh và một con hồ ly tinh vì ăn trộm Mị đan quý hiếm nên bị Hồ tộc phái xuống núi', 86000, 103, 55),
(56, 'Tri Thức Trong Lòng Bàn Tay - Bách Khoa Thiếu Nhi - La Mã Cổ Đại', 'product56', 'Bạn có biết chỉ nha khoa là một phát minh của một nha sĩ', 82000, 104, 56),
(57, 'Tri Thức Trong Lòng Bàn Tay - Bách Khoa Thiếu Nhi - Phát Minh Của Nhân Loại', 'product57', 'Bạn có biết đấu trường La Mã có thể chứa đến 50.000 khán giả và vé vào cửa', 82000, 104, 57),
(58, 'Combo Truyện Cổ Tích Việt Nam Dành Cho Thiếu Nhi: Sọ Dừa + Sự Tích Trầu Cau + Tấm Cám', 'product58', 'Việt Nam có một kho tàng truyện cổ tích vô cùng đa dạng và phong phú', 28000, 104, 58),
(59, 'Tuyển Tập Truyện Hay Dành Cho Thiếu Nhi 2', 'product59', 'gày nay, mối quan tâm hàng đầu của các bậc phụ huynh là làm thế nào để giúp con trẻ phát triển toàn ', 32000, 104, 59),
(60, 'Khoa Học Vui - Thế Giới Động Vật', 'product60', 'Thế giới xung quanh ta vô cùng sinh động và ẩn chứa nhiều điều thú vị', 60000, 105, 60),
(61, 'Khoa Học Vui - Hàng Không Vũ Trụ', 'product61', 'Thế giới xung quanh ta vô cùng sinh động và ẩn chứa nhiều điều thú vị', 58000, 105, 61),
(62, 'Khoa Học Khắp Quanh Ta - Hành Tinh Của Chúng Ta', 'product62', 'Khoa học khắp quanh ta” là một bộ sách khoa học thường thức', 45000, 105, 62),
(63, 'Khoa Học Khắp Quanh Ta - Nhiêu Liệu', 'product63', 'Khoa học khắp quanh ta” là một bộ sách khoa học thường thức.', 45000, 105, 63),
(64, 'Tiểu Thuyết Ngày Mới Và Hà Nội 36 Phố Phường', 'product64', 'Trường bước từng bước nhẹ nhàng trên hè phố, ngước mắt nghịch nhìn ngôi sao', 55000, 108, 64),
(65, 'Tiểu Thuyết Việt Nam 1945 -1975', 'product65', 'Mỗi tác phẩm đều có ưu và nhược, không nên coi nặng một vài khuyết điểm mà bỏ qua ưu điểm', 92000, 108, 65),
(66, 'Vua Thành Thái ', 'product66', 'Một cựu vương đã chấp nhận bị phế truất khỏi ngai vàng để rồi bước vào cuộc lưu đày biệt xứ', 86000, 108, 66),
(67, 'Thanh Gươm Công Lý ', 'product67', 'Beyond this place (THANH GƯƠM CÔNG LÝ) kể về hành trình đi tìm công lý', 77000, 108, 67),
(68, 'Chuyện Về Bailey - Chú Chó Trong Tiểu Thuyết Mục Đích Sống Của Một Chú Chó', 'product68', 'Bailey là chú chó trong tiểu thuyết Mục đích sống của một chú chó', 68000, 108, 68),
(69, 'Vũ Trọng Phụng ', 'product69', 'Vũ Trọng Phụng - Tiểu Thuyết (Giông Tố & Vỡ Đê)', 77000, 108, 69),
(70, 'Cuộc Đời Là Một Tiểu Thuyết', 'product70', 'Với anh, mọi thứ đã được viết sẵn\r\nVới cô, mọi thứ đang đợi viết tiếp', 119000, 108, 70),
(71, 'Số Đỏ - Bìa Cứng ', 'product71', 'Hoạt-kê tiểu-thuyết – Theo bản in của Lê Cường Editeur MCMXXXVIII (1938)', 272000, 108, 71),
(72, 'Tâm Lý Học Tính Cách', 'product72', 'Nối tiếp cuốn sách Best seller Tâm lý học hành vi', 90000, 107, 72),
(73, 'Tâm Lý Dân Tộc An Nam', 'product73', 'Tâm lý dân tộc An Nam (Psychologie du Peuple annamite) được Paul Giran', 82000, 107, 73),
(74, 'Tâm Lý - Pháp Lý Học Đường - Tình Huống Và Những Góc Nhìn - Tập 2', 'product74', 'Một bộ gồm 3 tập sách của tác giả - Luật sư Nguyễn An dành cho các bạn trẻ là học sinh, sinh viên', 36000, 107, 74),
(75, 'Tâm Lý - Pháp Lý Học Đường - Tình Huống Và Những Góc Nhìn - Tập 3', 'product75', 'Một bộ gồm 3 tập sách của tác giả - Luật sư Nguyễn An dành cho các bạn trẻ là học sinh, sinh viên', 36000, 107, 75),
(76, 'Tâm Lý Học Hành Vi', 'product76', '“Tâm lý học hành vi” giống như một liệu pháp tâm lý đối với tất cả chúng ta', 122000, 107, 76),
(77, 'Tâm Lý Học Kỳ Thú', 'product77', 'Hiểu biết về tâm lý của mọi người nói chung, và nhất là tâm lý của con cái nói riêng ', 77000, 107, 77),
(78, 'Gam7 No.13 - Chủ Đề Mạng Xã Hội', 'product78', 'Đối với thương hiệu, mạng xã hội lâu nay đã trở thành một mảnh đất “màu mỡ”', 140000, 106, 78),
(79, 'Tọa Độ: Cấu Trúc Gia Đình Và Xã Hội Của Người Jorai', 'product79', 'Tọa độ, cấu trúc gia đình và xã hội Jörai là một trong những tác phẩm vô cùng quan trọng', 187000, 106, 79),
(80, 'Utopia - Hành Trình Xây Dựng Xã Hội Với Tầm Nhìn Xa', 'product80', 'Những quan điểm mới của tác giả - nhà sử học xuất sắc nhất châu Âu hiện nay', 113000, 106, 80),
(81, 'Xây Dựng Kỹ Năng Xã Hội Cho Trẻ Trong Thời Đại Số', 'product81', 'Xây Dựng Kỹ Năng Xã Hội Cho Trẻ Trong Thời Đại Số', 76000, 106, 81),
(82, 'Không Hoảng Loạn Khi Con Kết Bạn - Thấu Hiểu Đời Sống Xã Hội Của Trẻ', 'product82', 'Không hoảng loạn khi con kết bạn nói về tầm quan trọng của đời sống', 79000, 106, 82),
(83, 'Diện Mạo Và Triển Vọng Của Xã Hội Tri Thức', 'product83', 'Nội dung cuốn sách hệ thống hóa lại các quan điểm về đặc trưng của xã hội tri thức,', 71000, 106, 83),
(84, 'Tình Yêu Tìm Lại', 'product84', 'Kelly Rimmer là tác giả của những cuốn tiểu thuyết best-seller trên toàn thế giới', 108000, 103, 84),
(85, 'Tình Yêu Của Rừng', 'product85', 'Tiếp nối 5 tựa sách đầu với những câu chuyện quen thuộc', 23000, 103, 85),
(86, 'Thám Tử Lừng Danh Conan - Lá Thư Thách Đấu Gửi Kudo Shinichi', 'product86', 'rong lúc dẫn nhóm trẻ con đi gõ của từng nhà vào đêm lễ hội Halloween', 55000, 102, 86),
(87, 'Thám Tử Lừng Danh Conan - Phù Thủy Xứ Ejinbara ', 'product87', 'Đây là bộ truyện thám tử cho thiếu nhi nổi tiếng. Nguyên tác của tác giả Aoyama Gosho', 38000, 102, 87),
(88, 'Thám Tử Kindaichi (Tập 9) - Án Mạng Trong Mật Thất Ở Hida', 'product88', 'Kindaichi Hajime (tên thường gọi là Kindaichi) là một cậu học sinh trung học ở trường LiTong', 23000, 102, 88),
(89, 'Thám Tử Kindaichi (Tập 13) - Vụ Án Siêu Trộm Hào Hoa', 'product89', 'Kindaichi Hajime (tên thường gọi là Kindaichi) là một cậu học sinh trung học ở trường LiTong', 23000, 102, 89),
(90, 'Thám Tử Sherlock Bones - Phá Án Bằng Phép Nhân', 'product90', 'Thám tử Sherlock Bones và Bác sĩ Catson đang truy bắt tên tội phạm là Giáo sư Moriratty', 48000, 102, 90),
(91, 'Thám Tử Lừng Danh Conan - Tập 75 (2019)', 'product91', 'Một thám tử mới - AMURO Toru sẽ xuất hiện! Ý đồ của anh chàng thám tử', 23000, 102, 91),
(92, 'Dị Nhãn Phòng Đông - Tập 2', 'product92', 'hi anh chủ nhà có cặp mắt kỳ lạ gặp gỡ những người khách thuê nhà “rất bảnh”,', 72000, 101, 92),
(93, 'Dị Nhãn Phòng Đông - Tập 1', 'product93', 'hi anh chủ nhà có cặp mắt kỳ lạ gặp gỡ những người khách thuê nhà “rất bảnh”, ', 72000, 101, 93),
(94, 'Tập Truyện Ngắn Của Ma Văn Kháng - Người Khách Kỳ Dị', 'product94', 'Tập 16 truyện ngắn Người khách kỳ dị của nhà văn Ma Văn', 68000, 101, 94),
(95, 'Ma Có Thật Hay Không?', 'product95', 'Nhân loại đã bước sang thế kỷ XXI nhưng vẫnluôn đứng trước những bí ẩn không có lời giải', 36000, 101, 95),
(96, 'Ma Y Thần Tướng', 'product96', 'Cuốn sách có 495 trang chuyên phân tích các tượng mạo của các nhân vật lịch sử Trung Quốc ', 263000, 101, 96),
(97, 'Ma Đói', 'product97', 'Chuyện kể rằng, có ngôi chợ bí ẩn mang tên Bảy Bảy Bốn Chín,', 88000, 101, 97),
(98, 'Ma Xui Quỷ Khiến', 'product98', 'Vụ án mạng trong căn nhà gỗ giữa vườn hoa..', 90000, 101, 98),
(99, 'Ma Thuật Bị Cấm', 'product99', 'Nằm trong series điều tra của thanh tra Kusanagi và thiên tài phá án', 98000, 101, 99),
(100, '100 Truyện Ngắn Ma Văn Kháng - Tập 3', 'product100', '100 Truyện Ngắn Ma Văn Kháng - Tập 3', 116000, 101, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thongtinnd`
--

CREATE TABLE `tbl_thongtinnd` (
  `tendangnhap` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hovaten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_thongtinnd`
--

INSERT INTO `tbl_thongtinnd` (`tendangnhap`, `avatar`, `diachi`, `hovaten`) VALUES
('admin', 'avaadmin', 'Inazuma', 'Admin Tikie'),
('cheers', 'avacheers', 'Teyvat Liyue', 'Trần Xuân Phong'),
('vuhoang', 'avavuhoang', 'Quận Cam, California', 'Huấn Hoa Hồng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `tbl_chitietsanpham`
--
ALTER TABLE `tbl_chitietsanpham`
  ADD PRIMARY KEY (`id_chitietsp`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_makhuyenmai`
--
ALTER TABLE `tbl_makhuyenmai`
  ADD PRIMARY KEY (`id_makm`);

--
-- Indexes for table `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  ADD PRIMARY KEY (`id_nguoidung`);

--
-- Indexes for table `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  ADD PRIMARY KEY (`quyenid`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Indexes for table `tbl_thongtinnd`
--
ALTER TABLE `tbl_thongtinnd`
  ADD PRIMARY KEY (`tendangnhap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id_blog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_chitietsanpham`
--
ALTER TABLE `tbl_chitietsanpham`
  MODIFY `id_chitietsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `tbl_makhuyenmai`
--
ALTER TABLE `tbl_makhuyenmai`
  MODIFY `id_makm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  MODIFY `id_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
