-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 04:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `content`, `title`, `img`, `created_at`, `updated_at`) VALUES
(1, 'mlem', 'mlem', 'Mlem.jpg', '2022-06-13 16:56:37', '2022-06-14 08:10:34'),
(3, 'Chơi bóng đá trên sân 5 người hay bất cứ đội hình nào, huấn luyện viên đều sẽ xây dựng kế hoạch chi tiết cho đội bóng của mình. Linh hoạt chuyển đổi giữa mục tiêu tấn công và phòng thủ tùy tình hình trận đấu cụ thể.\r\nTrong đó:\r\n\r\n+ Chiến thuật tấn công phù hợp đội hình có sức mạnh tốt hơn đối thủ. Hoặc khi cần phải chiến thắng để không bị loại khỏi giải đấu.\r\n\r\n+ Chiến thuật phòng thủ có thể ứng dụng khi đội bóng bị đánh giá thấp hơn đối thủ. Ngoài ra, nếu đội bóng chỉ cần hòa hoặc thắng cũng chơi phòng thủ là giải pháp an toàn.\r\n\r\nXem thêm: các mẫu giày đá bóng chính hãng mới nhất với giá tốt nhất.\r\n\r\nĐể đạt được hiệu quả như ý, chơi bóng sân mini 5 người đòi hỏi sắp xếp đội hình và nghiên cứu chiến thuật theo các nguyên tắc cơ bản. Có như vậy, mới phát huy tối đa tính liên kết của đội bóng trong trận đấu. Cụ thể:\r\n\r\n- Luôn có 1 người sẵn sàng phản công\r\n\r\nTrong thi đấu bóng 5 người mini, phản công nhanh trở thành ngón đòn lợi hại nhất. Các đợt phản công sẽ bắt đầu bằng 1 cầu thủ có thiên hướng tấn công.\r\n\r\n-Luôn có 1 người bọc lót và truy cản phòng ngự\r\n\r\nNguyên tắc thứ 2 mà bất cứ đội bóng nào cũng cần phải ghi nhớ ở trận đấu 5 người đó là để 1 cầu thủ đảm đương nhiệm vụ bọc lót. Đồng thời, truy cản phòng ngự trong trường hợp đội nhà bị phản công nhanh mà không kịp lui về. Cầu thu này có trọng trách làm chậm nhịp độ tấn công chờ đồng đội kịp về sân nhà tổ chức hàng thủ.\r\n\r\nCác chiến thuật sơ đồ trong bóng đá sân 5\r\nSo với hình thức chơi bóng đá 11 người thông thường, bóng đá 5 người sẽ vận dụng theo 4 đội hình cơ bản. Dù vậy, không vì thế mà chiến thuật dễ dàng xoay chuyển. Do đó, bạn đừng quên tham khảo các sơ đồ cùng cách triển khai được bật mí ngay sau đây nhé!\r\n\r\nChiến thuật 1-2-1: Kim cương đen\r\nTheo các chuyên gia, đội hình 1-2-1 được gọi là “kim cương đen” bởi mang đến sự hài hòa nhất định. Có khả năng cân bằng yếu tố phòng thủ và tấn công. Đội bóng luôn sở hữu 1 tiền đạo đúng nghĩa cùng với 1 hậu vệ thường trực ở phía sau. 2 cầu thủ tiền vệ sẽ hỗ trợ cả phòng ngự, tấn công, đáp ứng tốt mọi yêu cầu của trận đấu trong mọi thời điểm.\r\n\r\nSơ đồ chiến thuật “kim cương đen” trong bóng đá sân 5\r\n\r\nSơ đồ chiến thuật “kim cương đen” trong bóng đá sân 5\r\n\r\nƯu điểm:\r\n\r\n+ Chiến thuật sân 5 giúp đội hình mở thoáng khoảng không gian 2 biên nhằm tạo ra nhiều hướng di chuyển.\r\n\r\n+ Cho phép các cầu thủ đổi cánh linh hoạt, đảm bảo những đường tấn công thêm sắc xảo và phòng ngự có chiều sâu.\r\n\r\n+ Yêu cầu mỗi cầu thủ có kỷ luật, trách nhiệm rõ ràng.\r\n\r\n+ 2 tiền vệ hỗ trợ cả phòng thủ, tấn công, cho phép cả 2 hoặc chỉ 1 trong 2 người tấn công, người còn lại lui về phía sau yểm trợ.\r\n\r\nNhược điểm:\r\n\r\n+ Nếu cả 2 tiền vệ cánh của đội bóng đều thiên về lối chơi tấn công. Hàng thủ sẽ không được đảm bảo nên đòi hỏi các tiền vệ phải đặc biệt tuân thủ chiến thuật.\r\n\r\n+ 2 tiền vệ cánh cần có kỹ thuật tốt, thể lực dồi dào, nhất là khả năng phối hợp ăn ý với nhau. Bản thân cầu thủ phải tự biết khi nào cần tấn công, khi nào nên lùi lại để bọc lót giúp đồng đội dâng lên.\r\n\r\nXem thêm: Kỹ thuật bóng đá mini 5 người từ cơ bản tới nâng cao chi tiết nhất\r\n\r\nChiến thuật 2-2: Tứ trụ (“hình vuông” hoặc “cái hộp”)\r\nĐội hình bóng đá mini 5 người hỗ trợ tối đa cho mục đích phòng ngự khu vực. Về cơ bản, chiến thuật sẽ chia tách 4 cầu thủ thành 2 khu vực rõ ràng là phòng thủ và tấn công. Từng cầu thủ sẽ được phân công nhiệm vụ quản lý khu vực cụ thể.\r\n\r\nTheo lý thuyết, đội hình 2-2 gồm 2 cầu thủ chuyên trách phòng ngự và 2 cầu thủ tấn công. Tuy nhiên, vai trò phải được vận hành linh hoạt mới đem lại hiệu quả tốt. Hầu hết các đội bóng đều cần có có ít nhất là 3 người để thực hiện tấn công hoặc phòng ngự liên tục trong suốt trận đấu.\r\n\r\nƯu điểm:\r\n\r\n+ Đội hình giúp đảm bảo sự cân bằng, chuyển dịch chiến thuật giữa công và thủ.\r\n\r\n+ Xây dựng ý thức ở mỗi cầu thủ trong việc hỗ trợ đồng đội.\r\n\r\nNhược điểm:\r\n\r\n+ Hàng thủ dễ sơ hở, dễ bị đối thủ xâm nhập nếu hậu vệ dâng lên tấn công trong khi tiền vệ, tiền đạo không kịp về phòng ngự.\r\n\r\n+ Vai trò, trách nhiệm của cầu thủ thiếu rõ ràng. Đôi khi vị trí hậu vệ sẽ lưỡng lự việc có nên hay không tấn công bởi còn phải xem phản ứng của hậu vệ.\r\n\r\n+ Yêu cầu thủ trong đội bóng hiểu nhau, kết hợp nhuần nhuyễn với thời gian luyện tập cùng nhau nhiều.\r\n\r\nĐội hình sân 5 bố trí theo chiến thuật “tứ trụ”\r\n\r\nĐội hình sân 5 bố trí theo chiến thuật “tứ trụ”\r\n\r\nChiến thuật 2-1-2: Kim tự tháp\r\nĐây là sơ đồ chiến thuật bóng đá 5 người phù hợp xu hướng phòng ngự phản công. Đội hình “Kim tự tháp” sẽ có 1 tiền vệ trung tâm, đóng vai trò làm cầu nối giữa 2 hậu vệ với tiền đạo. Cũng như sẵn sàng tham gia phối hợp tấn công và phòng ngự.\r\n\r\nƯu điểm:\r\n\r\n+ Lựa chọn mang tính hợp lý trường hợp đội bóng gặp phải đối thủ mạnh hơn. Khi các cầu thủ phối hợp tốt, các cầu thủ dễ pressing và ép đối phương ra biên nhằm đoạt bóng, tiến hành phản công nhanh.\r\n\r\n+ Vị trí tiền đạo có thể tấn công trực diện hoặc làm tường hỗ trợ tiền vệ trung tâm dứt điểm.\r\n\r\n+ 2 hậu vệ dâng cao một cách đột ngột từ dưới lên, tạo ra cho các đợt tấn công yếu tố bất ngờ.\r\n\r\n+ Luôn có ít nhất 1 hậu vệ làm nhiệm vụ bọc lót ở các tình huống bị đe dọa tấn công.\r\n\r\n+ Giải phóng hoàn toàn 1 tiền đạo tập trung vào việc tấn công.\r\n\r\n+ Cầu thủ tiền vệ có cơ hội tham gia nhiều hơn so với sơ đồ 2-2.\r\n\r\nNhược điểm:\r\n\r\n+ Đòi hỏi 1 tiền vệ của đội bóng phải thực sự chất lượng, vừa đủ khả năng phòng ngự, vừa tham gia hỗ trợ tấn công ở mọi tình huống.\r\n\r\n+ Quá trình tấn công, hậu vệ phải phối hợp chặt chẽ với tiền vệ mới hỗ trợ tối đa cho tiền đạo.\r\n\r\nChiến thuật 1-1-2: Đội hình hình chữ Y\r\nChiến thuật 1-1-2: Đội hình hình chữ Y\r\nXem thêm: Cách đá tiền vệ trung tâm sân 7 người ĐẦY ĐỦ - HIỆU QUẢ nhất\r\n\r\nĐội hình 1-1-2 là sự đảo ngược của sơ đồ 2-1-2, thiên về xu hướng tấn công. Với 2 cầu thủ làm nhiệm vụ tấn công, nếu đội bóng áp dụng thành công chiến thuật sẽ ghi được nhiều bàn thắng. Tuy nhiên, chiến thuật bóng đá mini 5 người theo sơ đồ 1-1-2 cũng tiềm ẩn khá nhiều rủi ro.\r\n\r\nƯu điểm:\r\n\r\n+ Đội hình được khuyết khích đối với đội bóng mạnh hơn đối phương hoặc đang cần ghi bàn.\r\n\r\n+ Đội hình chỉ cần 1 hậu vệ nên gần như không xảy ra mâu thuẫn vai trò tổ chức phòng ngự.\r\n\r\n+ Sử dụng đối kháng đối với lối chơi pressing vì các hậu vệ đối phương không dám dâng cao. Khi mà đội bóng của bạn đang có đến 2 tiền đạo luôn luôn túc trực phía trên.\r\n\r\nNhược điểm:\r\n\r\n+ Cầu thủ thi đấu ở vị trí thấp nhất sẽ phải gánh trách nhiệm lớn lao, vừa phòng ngự vừa khởi phát cho các đợt tấn công. Do đó, ngoài kỹ năng còn yêu cầu rất khắt khe về tính kỷ luật.\r\n\r\n+ Khả năng đọc trận đấu của các cầu thủ phải nhanh nhẹn mới linh hoạt chuyển đổi tấn công sang phòng ngự, nếu không sẽ rơi vào thế nguy hiểm.\r\n\r\nChiến thuật sắp xếp đội hình chữ Y đảm bảo tính linh hoạt\r\n\r\nHy vọng thông tin bài viết do Thethaovip.com.vn chia sẻ trên đây sẽ giúp bạn trang bị kiến thức hữu ích. Phục vụ mục đích có hiệu quả xây dựng sơ đồ chiến thuật bóng đá 5 người.\r\n\r\nTự hào là địa chỉ chuyên cung cấp giày đá bóng chính hãng, Thể Thao VIP luôn đồng hành cùng bạn trong mọi trận đấu. Vì vậy, bạn hãy ghé qua hệ thống để tham khảo sản phẩm chất lượng tốt, giá cả ưu đãi.', 'Các nguyên tắc cơ bản của chiến thuật sân 5', NULL, '2022-06-16 14:26:00', '2022-06-16 14:26:00'),
(4, 'Chi tiết các vị trí trên sân futsal quan trọng nhất\r\nĐịnh nghĩa về futsal – bóng đá trong nhà\r\nFutsal hay còn được người ta biết đến là hình thức thi đấu bóng đá trong nhà. Futsal có lối chơi và thi đấu tương tự như bóng đá truyền thống. Trong thời gian thi đấu của 2 đội, đội nào có số lần đưa bóng vào khung thành đối thủ nhiều hơn sẽ là đội chiến thắng. Đương nhiên, mỗi bàn thắng chỉ tính là hợp lệ khi có sự công nhận của đội ngũ trọng tài. \r\n\r\nFutsal – bóng đá trong nhà hiện nay được chơi dưới luật bóng đá futsal. Mỗi đội trong một trận đấu sẽ có 5 cầu thủ chơi chính thức trên sân. Bên ngoài là ban huấn luyện cùng tổng cộng 7 cầu thủ dự bị. Số lần thay người ở futsal không bị giới hạn. Những cầu thủ đã thay ra thì vẫn có thể vào sân và thi đấu tiếp sau đó. \r\n\r\nĐịnh nghĩa về futsal – bóng đá trong nhà\r\n\r\nBóng đá futsal được cho là bắt nguồn từ đất nước Uruguay ở Nam Mỹ. Tuy nhiên nó được bắt đầu tổ chức với quy mô lớn tại Brazil vào những năm 1982. Tổ chức đầu tiên quản lý hệ thống bóng đá futsal là FIFUSA. Sau này, FIFA đã có nhiều sự cải tiến và chính thức đưa ra luật chơi riêng của mình với bộ môn này. Giải bóng đá Futsal đầu tiên được tổ chức dưới sự quản lý của FIFA là vào năm 1989 tại thành phố Rotterdam – Hà Lan. \r\n\r\nCác vị trí trên sân futsal 5 người cần biết\r\nCác vị trí trong sân 5 có thể thay đổi linh hoạt dựa vào chiến thuật futsal 5 người mà đội bóng đề ra. Tuy nhiên các cầu thủ sẽ gần như chỉ thay đổi vai trò và vị trí hoạt động. Về cơ bản vẫn sẽ bao gồm: thủ môn, tiền đạo, tiền vệ và hậu vệ. Chi tiết về các vị trí trên sân futsal như sau. \r\n\r\nVị trí thủ môn trong futsal 5 người\r\nThủ môn chắc chắn là vị trí đầu tiên được nhắc tới ở bộ môn futsal. Sở dĩ đây là vị trí mà sẽ không có bất kỳ những biến thể nào. Mỗi trận có sự góp mặt của 2 đội tương ứng với 2 thủ môn. Thủ môn trong futsal có nhiệm vụ là ngăn cản đối thủ đưa bóng vào lưới của đội nhà. \r\n\r\nThủ môn của mỗi đội sẽ là người duy nhất được sử dụng toàn bộ cơ thể để chơi bóng. Đương nhiên có thể lên tham gia tấn công cùng đồng đội nếu cần thiết. Lưu ý rằng khi di chuyển ra khỏi vòng cấm địa chỉ các thủ môn không được sử dụng tay. \r\n\r\nVị trí thủ môn trong bóng đá futsal\r\n\r\nThủ môn của mỗi đội sẽ có trang phục khác với các cầu thủ. Đó là những trang phục chỉ dành riêng cho thủ môn. Thông thường là quần áo dài, găng tay và có màu khác để dễ dàng nhận biết. Thủ môn trong futsal tương tự như bóng đá. Đây là vị trí cực kỳ quan trọng. Một thủ môn giỏi yêu cầu phải có những phán đoán, phản xạ chuẩn xác. Trong nhiều trường hợp có thể là cầu thủ ghi bàn trực tiếp của đội. \r\n\r\nVị trí hậu vệ trong futsal 5 người (Fixo)\r\nHậu vệ trong futsal còn được gọi là vị trí Fixo. Tương tự như bóng đá, hậu vệ là những cầu thủ đứng ngay trên phía thủ môn. Đứng trên ở đây là với vai trò trong sơ đồ chiến thuật. Đương nhiên hậu vệ cũng có thể di chuyển đi khắp sân để tham gia tấn công và ghi bàn. \r\n\r\nTùy vào chiến thuật mà từng đội đặt ra thì lại có nhiều kiểu hậu vệ khác nhau. Đây gần như là vị trí bắt buộc và chắc chắn không thể thiếu ở bộ môn này. Hậu vệ có nhiệm vụ chính là ngăn cản đối thủ triển khai tấn công. Hỗ trợ thủ môn trong việc bảo vệ lưới nhà. Đồng thời có thể tham gia tấn công cùng đồng đội để ghi bàn. \r\n\r\nVai trò của hậu vệ trong bóng đá futsal\r\n\r\nThông thường ở mỗi đội, hậu vệ sẽ là người được tin tưởng để trao cho tấm băng đội trường. Sở dĩ sân đấu futsal khá nhỏ. Do vậy hậu vệ thường là vị trí có tầm quan sát bao quát nhất. Đương nhiên vẫn còn nhiều yếu tố chuyên môn khác có thể tác động đến phương diện này. \r\n\r\nHiện nay, vị trí hậu vệ trong futsal còn được định nghĩa là vị trí thòng nếu bạn chơi trong sơ đồ 1 hậu vệ. Nếu là sơ đồ 2 hậu vệ thì cả 2 sẽ chơi ngang nhau ngay trên thủ môn. Rất ít các trận đấu mà huấn luyện viên bố trí 3 hậu vệ. Đương nhiên không có luôn trường hợp 4 hậu vệ. \r\n\r\nVị trí tiền vệ trong futsal 5 người (Ala)\r\nTiền vệ là 1 trong 4 vị trí chủ chốt ở hệ thống các vị trí sân 5 futsal. Tương tự như bóng đá truyền thống, tiền vệ gần như là vị trí quyết định tới 70% khả năng ghi bàn cho đội nhà. Vị trí này được định nghĩa là những cầu thủ chơi ở ngay trên hàng hậu vệ và chỉ dưới tiền đạo. \r\n\r\nNhiệm vụ chính của tiền vệ trong các trận đấu là thu hồi và phân phối bóng. Các tiền vệ phải có mặt ở tất cả các điểm nóng trên sân. Tham gia vào các pha tranh chấp, truy cản như hậu vệ. Đồng thời có nhiệm vụ điều tiết trận đấu, kiến tạo cho đồng đội hoặc tự mình ghi bàn. \r\n\r\nTiền vệ trong các vị trí futsal còn được gọi là Ala. Hiện nay có rất nhiều loại Ala khác nhau trong các trận đấu. Tùy thuộc vào sơ đồ mà huấn luyện viên đưa ra. Có tiền vệ chuyên đánh chặn phòng ngự. Bên cạnh đó có những tiền vệ chuyên chơi tấn công, kiến tạo và ghi bàn. Vị trí Ala yêu cầu các cầu thủ phải sở hữu kỹ thuật tốt. Có khả năng quan sát nhạy bén và đặc biệt bình tĩnh trong các pha xử lý. \r\n\r\nVị trí tiền vệ Ala trong futsal 5 người\r\n\r\nVị trí tiền đạo trong futsal 5 người (Pivo)\r\nTiền đạo trong futsal 5 nắm giữ vai trò giống hệt với bóng đá truyền thống. Đây là các cầu thủ chơi ở vị trí cao nhất của mỗi đội. Nhiệm vụ chính là nhận bóng từ đồng đội và ghi bàn. Đương nhiên cũng có rất nhiều các kiểu mẫu tiền đạo futsal khác nhau. Có người chỉ đóng vai trò làm tường cho đồng đội. Có người lại thích chơi theo phong cách đột phát tự làm tự ăn. Điều này tùy thuộc vào từng thế trận và cách sắp xếp của huấn luyện viên. \r\n\r\nVai trò của pivo trong futsal 5 người\r\n\r\nTiền đạo trong futsal còn được gọi là Pivo. Pivo sẽ là vị trí thường xuyên phải chạm mặt với Fixo là hậu vệ bên phía đối thủ. Do sân futsal có kích thước nhỏ nên tiền đạo ở bộ môn này cũng cần phải hỗ trợ phòng ngự liên tục. Đây là điểm khác biệt đáng kể so với bóng đá sân cỏ bình thường. \r\n\r\nNhững cầu thủ chơi ở vị trí Pivo phải là những người đặc biệt có kỹ năng dứt điểm tốt. Đồng thời cũng nên là những cầu thủ có thân hình vạm vỡ để lấn át hậu vệ bên phía đội bạn. Hiện nay trong các sơ đồ chiến thuật của futsal 5 người gần như không thể thiếu tiền đạo. Tuy nhiên họ cũng có thể được đẩy về để chơi như vai trò của một tiền vệ Ala. \r\n\r\nNhững chú ý về các vị trí trên sân futsal \r\nTương tự như bóng đá truyền thống, sự sắp xếp các vị trí trong futsal sẽ quyết định tới 80% khả năng giành chiến thắng của đội. Một vài chú ý cần lưu tâm khi xếp các vị trí ở bộ môn này như sau: \r\n\r\nNhững chú ý khi thi đấu futsal\r\n\r\nPhù hợp với khả năng thi đấu\r\nCác vị trí trong bóng đá 5 người futsal yêu cầu phải phù hợp với năng lực và sở trường. Giả sử như hậu vệ cần đến những cầu thủ chơi rắn, phá bóng tốt, phán đoán truy cản tốt. Tương tự như vậy tiền vệ cần những người có kỹ năng chuyền chọt, rê bóng,… Tiền đạo cần cầu thủ sút xa và xử lý bóng trong phạm vi hẹp ấn tượng. Nếu sắp xếp các cầu thủ vào vị trí không phù hợp sẽ tạo ra một hệ thống không hiệu quả. \r\n\r\nCó chiến thuật cụ thể\r\nCác huấn luyện viên sẽ cần có chiến thuật cụ thể cho từng vị trí trong môn fusal. Tùy vào đối thủ, tùy vào thế trận để đưa ra quyết định về vai trò của cầu thủ. Giả sử như trận A thì cần tiền vệ chơi tấn công năng nổ. Nhưng ở trận B thì các tiền vệ cần chơi lùi sâu và tập trung kiểm soát bóng hơn. \r\n\r\nSử dụng các quyền thay người\r\nThay người trong bóng đá là thao tác cần thiết. Với cá nhân bộ môn futsal cũng vậy. Các huấn luyện viên sẽ cần có những sự thay đổi phù hợp trong quá trình trận đấu diễn ra. Những vị trí thi đấu không hiệu quả cần được cho ra nghỉ. Các trường hợp cầu thủ gặp chấn thương không nên cố thi đấu và cũng cần đến sự thay thế. \r\n\r\nCần lưu ý gì khi tham gia chơi futsal 5 người\r\n\r\nYếu tố tinh thần và thể trạng\r\nCác huấn luyện viên sẽ cần đặc biệt quan tâm tới vấn đề sức khỏe và tinh thần ở từng vị trí. Những cầu thủ không có được thể trạng tốt nhất thì không nên cho ra sân thi đấu. Những cầu thủ ở trận đấu trước có màn trình diễn không tốt hoặc đang có dấu hiệu bất ổn về tâm lý cũng nên để dự bị. \r\n\r\nRõ ràng, vị trí khi thi đấu trên sân futsal là cực kỳ quan trọng. Nếu không lưu tâm tới 4 chú ý trên đây thì bất kỳ đội futsal nào cũng khó có thể thành công ở lĩnh vực này. \r\n\r\nĐối với futsal, kích thước sân bé khiến cho các cầu thủ có thể thay đổi vị trí liên tục. Tuy nhiên về cơ bản thì các vị trí trong futsal là như trên. Hy vọng thông qua bài viết, bạn đọc có thế sở hữu thêm nhiều hơn kiến thức về hình thức đá bóng hấp dẫn này.   ', 'Tìm hiểu về các vị trí trên sân futsal', NULL, '2022-06-16 14:26:54', '2022-06-16 14:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orders_id` int(11) NOT NULL,
  `yard_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2022_04_16_191103_creat_sessions_table', 3),
(9, '2022_04_10_105459_create_users_table', 4),
(11, '2022_04_18_143648_create_yard_table', 5),
(13, '2022_04_23_083622_create_orders_table', 6),
(15, '2022_04_23_104006_create_times_table', 7),
(16, '2022_04_23_111204_create_yard_times_table', 7),
(17, '2022_04_23_111347_create_month_table', 7),
(18, '2022_04_23_112038_create_day_table', 8),
(20, '2022_04_25_143526_create_events_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`id`, `number`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL),
(5, 5, NULL, NULL),
(6, 6, NULL, NULL),
(7, 7, NULL, NULL),
(8, 8, NULL, NULL),
(9, 9, NULL, NULL),
(10, 10, NULL, NULL),
(11, 11, NULL, NULL),
(12, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `yard_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `yard_id`, `user_id`, `customer_id`, `amount`, `status`, `start`, `end`, `created_at`, `updated_at`, `title`) VALUES
(9, 1, 2, 5, 90000, 0, '2022-05-06 06:00:00', '2022-05-06 07:00:00', '2022-05-05 06:09:50', '2022-05-05 06:09:50', '123123'),
(10, 1, 2, 5, 90000, 0, '2022-05-06 07:00:00', '2022-05-06 08:00:00', '2022-05-05 06:19:45', '2022-05-05 06:19:45', 'Úy'),
(11, 1, 2, 5, 90000, 0, '2022-05-06 08:00:00', '2022-05-06 09:00:00', '2022-05-05 06:22:35', '2022-05-05 06:22:35', 'Long'),
(12, 1, 2, 5, 90000, 0, '2022-05-06 09:00:00', '2022-05-06 10:00:00', '2022-05-05 06:24:31', '2022-05-05 06:24:31', 'Hiếu'),
(13, 3, 2, 5, 90000, 0, '2022-05-06 06:00:00', '2022-05-06 07:00:00', '2022-05-05 06:25:18', '2022-05-05 06:25:18', 'THành'),
(14, 3, 2, 5, 90000, 0, '2022-05-06 07:00:00', '2022-05-06 08:00:00', '2022-05-05 06:26:23', '2022-05-05 06:26:23', 'Kim Anh'),
(15, 3, 2, 5, 90000, 0, '2022-05-06 08:00:00', '2022-05-06 09:00:00', '2022-05-05 06:30:11', '2022-05-05 06:30:11', 'Khoa'),
(16, 8, 2, 5, 90000, 0, '2022-05-06 06:00:00', '2022-05-06 07:00:00', '2022-05-05 06:31:52', '2022-05-05 06:31:52', 'THạch sanh'),
(17, 1, 2, 2, 90000, 0, '2022-05-09 06:00:00', '2022-05-09 07:00:00', '2022-05-07 23:42:06', '2022-05-07 23:42:06', 'Luan'),
(18, 1, 2, 5, 90000, 0, '2022-05-29 06:00:00', '2022-05-29 07:00:00', '2022-05-27 21:51:46', '2022-05-27 21:51:46', 'Long'),
(19, 1, 2, 5, 90000, 0, '2022-05-29 07:00:00', '2022-05-29 08:00:00', '2022-05-27 23:16:44', '2022-05-27 23:16:44', 'Phương'),
(20, 1, 2, 5, 90000, 0, '2022-05-29 08:00:00', '2022-05-29 09:00:00', '2022-05-28 01:19:24', '2022-05-28 01:19:24', 'THọ'),
(21, 1, 2, 5, 90000, 0, '2022-05-30 06:00:00', '2022-05-30 07:00:00', '2022-05-28 01:42:20', '2022-05-28 01:42:20', 'Úy'),
(22, 3, 2, 5, 90000, 0, '2022-05-29 06:00:00', '2022-05-29 07:00:00', '2022-05-28 01:43:50', '2022-05-28 01:43:50', 'Công'),
(24, 1, 2, 5, 90000, 0, '2022-06-12 06:00:00', '2022-06-12 07:00:00', '2022-06-11 08:48:46', '2022-06-11 08:48:46', '1sasd'),
(25, 1, 2, 5, 90000, 0, '2022-06-13 06:00:00', '2022-06-13 07:00:00', '2022-06-11 09:00:27', '2022-06-11 09:00:27', 'MInh'),
(26, 1, 2, 5, 90000, 0, '2022-06-14 06:00:00', '2022-06-14 07:00:00', '2022-06-11 09:45:35', '2022-06-11 09:45:35', 'uy');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `order_id`, `customer_id`, `amount`, `status`, `title`, `created_at`, `updated_at`, `type`) VALUES
(1, 2, 12, 5, 90000, 1, 'Hiếu', '2022-05-28 08:48:21', '2022-05-28 15:48:21', 2),
(2, 2, 12, 5, 90000, 1, 'Hiếu', '2022-05-08 06:36:55', '2022-05-08 06:36:55', 0),
(3, 2, 13, 5, 90000, 1, 'THành', '2022-05-08 06:35:58', '2022-05-08 06:35:58', 0),
(4, 2, 13, 5, 90000, 1, 'THành', '2022-05-08 06:36:00', '2022-05-08 06:36:00', 0),
(5, 2, 13, 5, 90000, 1, 'THành', '2022-05-08 06:37:12', '2022-05-08 06:37:12', 0),
(6, 2, 14, 5, 90000, 1, 'Kim Anh', '2022-05-08 06:37:16', '2022-05-08 06:37:16', 0),
(7, 2, 14, 5, 90000, 1, 'Kim Anh', '2022-05-08 06:37:14', '2022-05-08 06:37:14', 0),
(8, 2, 14, 5, 90000, 0, 'Kim Anh', '2022-05-05 06:29:58', '2022-05-05 13:29:58', 0),
(9, 2, 14, 5, 90000, 0, 'Kim Anh', '2022-05-05 06:29:59', '2022-05-05 13:29:59', 0),
(10, 2, 14, 5, 90000, 0, 'Kim Anh', '2022-05-05 06:30:00', '2022-05-05 13:30:00', 0),
(11, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:30:11', '2022-05-05 13:30:11', 0),
(12, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:30:35', '2022-05-05 13:30:35', 0),
(13, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:30:35', '2022-05-05 13:30:35', 0),
(14, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:30:52', '2022-05-05 13:30:52', 0),
(15, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:30:54', '2022-05-05 13:30:54', 0),
(16, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:31:15', '2022-05-05 13:31:15', 0),
(17, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:31:16', '2022-05-05 13:31:16', 0),
(18, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:31:19', '2022-05-05 13:31:19', 0),
(19, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:31:20', '2022-05-05 13:31:20', 0),
(20, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:31:20', '2022-05-05 13:31:20', 0),
(21, 2, 16, 5, 90000, 0, 'THạch sanh', '2022-05-05 06:31:52', '2022-05-05 13:31:52', 0),
(22, 2, 16, 5, 90000, 0, 'THạch sanh', '2022-05-05 07:21:57', '2022-05-05 14:21:57', 0),
(23, 2, 17, 2, 90000, 0, 'Luan', '2022-05-07 23:42:26', '2022-05-08 06:42:26', 0),
(24, 2, 20, 5, 90000, 1, 'THọ', '2022-05-28 01:37:50', '2022-05-28 08:37:50', 0),
(25, 2, 20, 5, 90000, 1, 'THọ', '2022-05-28 01:37:59', '2022-05-28 08:37:59', 0),
(26, 2, 20, 5, 90000, 1, 'THọ', '2022-05-28 01:40:03', '2022-05-28 08:40:03', 0),
(27, 2, 21, 5, 90000, 1, 'Úy', '2022-05-28 01:42:23', '2022-05-28 08:42:23', 0),
(28, 2, 22, 5, 90000, 1, 'Công', '2022-05-28 01:43:52', '2022-05-28 08:43:52', 0),
(29, 2, 25, 5, 90000, 0, 'MInh', '2022-06-16 13:46:09', '2022-06-16 13:46:09', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `number`, `created_at`, `updated_at`) VALUES
(5, 5, NULL, NULL),
(6, 6, NULL, NULL),
(7, 7, NULL, NULL),
(8, 8, NULL, NULL),
(9, 9, NULL, NULL),
(10, 10, NULL, NULL),
(14, 14, NULL, NULL),
(15, 15, NULL, NULL),
(16, 16, NULL, NULL),
(17, 17, NULL, NULL),
(18, 18, NULL, NULL),
(19, 19, NULL, NULL),
(20, 20, NULL, NULL),
(21, 21, NULL, NULL),
(22, 22, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2,
  `coin` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `full_name`, `img`, `email`, `email_verified_at`, `password`, `address`, `phone`, `district`, `ward`, `street`, `role`, `status`, `coin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'uytran99', 'mlem', '/storage/uploads/avatar//1650205057.jpg', 'uytran99@gmail.com', NULL, '$2y$10$Ava.Z/RfSjqZezhUq1LqTO3DGlst9Xi5MYLkub31rzrvJIjUIBJEu', NULL, NULL, 3, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL),
(2, 'ngocuy919nt', 'tran ngoc', '/storage/uploads/avatar//1650205057.jpg', 'ngocuy919nt@gmail.com', NULL, '$2y$10$Ava.Z/RfSjqZezhUq1LqTO3DGlst9Xi5MYLkub31rzrvJIjUIBJEu', '1127', '0393717381', 1, '10', 'Đoàn Văn Bơ', 2, 1, 270000, NULL, '2022-04-17 07:17:37', '2022-06-16 06:46:09'),
(5, 'tnu02', ' uy tran', '/storage/uploads/avatar//1650205057.jpg', 'tnu02@yopmail.com', NULL, '$2y$10$Ava.Z/RfSjqZezhUq1LqTO3DGlst9Xi5MYLkub31rzrvJIjUIBJEu', NULL, '0393717380', 1, NULL, NULL, 3, 1, NULL, NULL, '2022-04-24 09:03:59', '2022-04-24 09:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `yard`
--

CREATE TABLE `yard` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `yard`
--

INSERT INTO `yard` (`id`, `users_id`, `name`, `price`, `is_active`, `size`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Dragon', '100000', 1, 1, 0, '2022-04-20 08:59:24', '2022-04-22 07:45:11'),
(3, 2, 'DragonFly', '100000', 0, 1, 0, '2022-04-20 09:00:44', '2022-04-20 09:00:44'),
(8, 2, 'Lion', '100000', 1, 1, 0, '2022-04-20 09:00:44', '2022-04-24 08:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `yard_times`
--

CREATE TABLE `yard_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `yard_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `month_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `day_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `yard_times`
--

INSERT INTO `yard_times` (`id`, `yard_id`, `time_id`, `month_id`, `created_at`, `updated_at`, `day_id`, `status`) VALUES
(1, 1, 7, 4, NULL, NULL, 24, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `yard`
--
ALTER TABLE `yard`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `yard_name_unique` (`name`);

--
-- Indexes for table `yard_times`
--
ALTER TABLE `yard_times`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `yard`
--
ALTER TABLE `yard`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `yard_times`
--
ALTER TABLE `yard_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
