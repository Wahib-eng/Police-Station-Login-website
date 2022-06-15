CREATE DATABASE `polisler` DEFAULT CHARACTER SET utf8 COLLATE 
utf8_turkish_ci; 

USE `polisler`; 

CREATE TABLE `polis` 
  ( 
     `id`           INT(11) NOT NULL auto_increment, 
     `kullaniciadi` VARCHAR(255) NOT NULL, 
     `eposta`       VARCHAR(255) NOT NULL, 
     `sifre`        VARCHAR(255) NOT NULL, 
     `adres`        VARCHAR(255) NOT NULL,
     `tn`           int(11) NOT NULL,
     
     PRIMARY KEY (`id`) 
  ); 
