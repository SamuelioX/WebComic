-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema webcomic
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema webcomic
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `webcomic` DEFAULT CHARACTER SET utf8 ;
USE `webcomic` ;

-- -----------------------------------------------------
-- Table `webcomic`.`posts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webcomic`.`posts` ;

CREATE TABLE IF NOT EXISTS `webcomic`.`posts` (
  `postId` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `postBody` TEXT NULL DEFAULT NULL,
  `postTitle` TEXT NULL DEFAULT NULL,
  `postDate` DATE,
  `postImg` LONGBLOB NULL DEFAULT NULL,
  PRIMARY KEY (`postId`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `webcomic`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webcomic`.`user` ;

CREATE TABLE IF NOT EXISTS `webcomic`.`user` (
  `id` INT(11) NOT NULL,
  `usertype` INT(11) NULL DEFAULT NULL,
  `username` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
  AUTO_INCREMENT = 1
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
