DROP DATABASE IF EXISTS `nephin_admin`;
CREATE DATABASE `nephin_admin`;
USE `nephin_admin`;
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(250),
  `password` varchar(255) NOT NULL,
  `isAdmin` BOOLEAN NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
INSERT INTO `users` (`id`, `username`, `password`, `isAdmin`)
VALUES (
    1,
    'admin',
    '$2y$10$n8NIJ5zsmtIxASEZSzWyi.7Pu50x5Z8F1uGcTiNA4rEXbS78EOuha',
    true
  ),
  (
    2,
    'email123@email.com',
    '$2y$10$9OOFy5W.Vz0VapyS5U.ZqujRiXnklh48Nhc3qGfdSKxLbXRH3i87m',
    false
  );
DROP TABLE IF EXISTS `submissions`;
CREATE TABLE `submissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `submission_type`
  SET ('booking', 'contact', 'support') NOT NULL,
    `email` varchar(250) NOT NULL,
    `name` varchar(250) NOT NULL,
    `message` TEXT NOT NULL,
    `status` ENUM('pending', 'resolved') NOT NULL DEFAULT 'pending',
    `when_submitted` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
INSERT INTO `submissions` (`submission_type`, `email`, `name`, `message`)
VALUES ('booking', 'test@test.com', 'test', 'test message');