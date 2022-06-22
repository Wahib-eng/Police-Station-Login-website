CREATE DATABASE `polisler` DEFAULT CHARACTER SET utf8 COLLATE 
utf8_turkish_ci; 

USE `polisler`; 

CREATE TABLE `polis` 
  ( 
     `id`           INT(11) NOT NULL auto_increment, 
     `adi_soyadi` VARCHAR(255) NOT NULL, 
     `eposta`       VARCHAR(255) NOT NULL, 
     `sifre`        VARCHAR(255) NOT NULL, 
     `sifre2`        VARCHAR(255) NOT NULL, 
     `dt`            date,
     `tn`        VARCHAR(255) NOT NULL,
     `adres`           VARCHAR(500) NOT NULL,
     UNIQUE (`eposta`),
     PRIMARY KEY (`id`) 
  ); 

  CREATE TABLE `permission` 
  ( 
     `id` NOT NULL auto_increment,
     `details`   VARCHAR(500)  , 
      `from` date  NOT NULL ,
      `to` date  NOT NULL, 
     PRIMARY KEY (`id`) 
  ); 

