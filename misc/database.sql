DROP DATABASE IF EXISTS `nephin_admin`;
CREATE DATABASE `nephin_admin`;
USE `nephin_admin`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL DEFAULT '',
  `password` varchar(200) NOT NULL DEFAULT '',
  `isAdmin` BOOLEAN NOT NULL DEFAULT 0,
  `phoneNumber` PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO `users` (`id`, `username`, `pwd`, `isAdmin`)
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
  `submission_type` SET ('booking', 'contact', 'support') NOT NULL DEFAULT 'email',
  `user_id` varchar(250) NOT NULL DEFAULT '',
  `when_submitted` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

