CREATE TABLE `members` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `pass` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `tel` char(20) NOT NULL,
  `email` char(80) NOT NULL,
  `animal_name` char(30) DEFAULT NULL,
  `animal_sort` char(20) DEFAULT NULL,
  `regist_day` char(20) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
    primary key(num)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `members` (`num`, `id`, `pass`, `name`, `tel`, `email`, `animal_name`, `animal_sort`, `regist_day`, `level`) VALUES
(1, 'admin', '12345', '관리자', '010-0000-0000', 'admin@gmail.com', '', '', '2020-11-12 (07:13)', 1),
(2, 'rubato', '12345', '루바토', '010-0000-0000', 'goldmont@naver.com', '또잉', '조류', '2020-11-12 (07:41)', 9);
