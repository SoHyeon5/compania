CREATE TABLE `qnaone` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(15) NOT NULL,
  `title` char(80) NOT NULL,
  `content` char(255) NOT NULL,
  `regist_day` char(20) DEFAULT NULL,
  `answer` char(255) DEFAULT NULL,
  `regist_day_a` char(20) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  primary key(num)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `qnaone` (`num`, `id`, `name`, `title`, `content`, `regist_day`, `answer`, `regist_day_a`, `level`) VALUES
(7, 'admin', '관리자', '판매사이트는 어떻게 들어가나요?', '사고싶은데 구매 사이트는 어디를 눌러야하죠?', '2020-11-29 (09:23)', NULL, NULL, NULL),
(8, 'admin', '관리자', '저희 강아지가 좋아해요!', '성품 분석을 보고 산 후에 증상도 많이 완화됐네요!', '2020-11-29 (09:24)', '저희 사이트를 이용해주셔서 감사합니다.', '2020-11-29 (09:24)', NULL);
