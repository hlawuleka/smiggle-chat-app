# smiggle-chat-app
Smiggle Chat Application (PHP)

#Configurations
You will need to update the following on the database.php

$host = "localhost";
$user = "username";
$pass = "password";
$database = "database";


#Database with sample content

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'ilsids', 'ilsodam@gmail.com', '45edd741812abf42a7b799a6fc558d9c'),
(2, 'root', 'test@test.co.za', '85a8bb0d8cb6c458642e3b488e6d2b56'),
(3, 'username', 'email@test.co.za', '1a1dc91c907325c69271ddf0c944bc72'),
(4, 'user', 'user@test.co.za', '5214cb51dc79e683d3359821448fc9c7'),
(5, '', 'ilsoda@webmail.co.za', ''),
(6, 'ilsoda@webail.co.za', 'ilsoda@webail.co.za', 'ilsoda@webail.co.za'),
(7, 'demo@enca.co.za', 'demo@enca.co.za', '79593a6a3da24a4fef0ca26b8d655380');