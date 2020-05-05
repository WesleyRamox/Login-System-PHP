CREATE DATABASE login;
USE login;

CREATE TABLE `login`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `isAdmin` VARCHAR(1) NOT NULL,
  PRIMARY KEY (`id`));

/* 

isAdmin = 1 = isAdmin 
isAdmin = 0 = notAdmin

*/