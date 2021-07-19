CREATE TABLE `qna` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `category` char(20) DEFAULT NULL,
  `subject` char(50) NOT NULL,
  `content` char(255) NOT NULL,
  `regist_day` char(20) NOT NULL,
  `hit` int(11) NOT NULL,
  primary key(num)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `qna` (`num`, `id`, `name`, `category`, `subject`, `content`, `regist_day`, `hit`) VALUES
(3, 'admin', '관리자', '주문/결제', '회원만 주문할 수 있나요?', '상품 주문은 회원만 가능합니다. 회원가입 후 이용해 주시기 바랍니다.', '2020-11-18 (04:19)', 0),
(4, 'admin', '관리자', '배송', '배송은 언제 시작되나요?', '주문을 하는 즉시 처리가 되니 기다려주세요.', '2020-11-29 (09:19)', 0),
(5, 'admin', '관리자', '취소/반품/교환', '취소/반품은 어떻게 진행하나요?', '판매사이트에 나오는 사항을 따라주세요.', '2020-11-29 (09:20)', 0);
