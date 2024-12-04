CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;
 
INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');
