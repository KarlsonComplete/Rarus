-- MySQL Script generated by MySQL Workbench
-- Sat Feb 12 17:15:51 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema publishing office
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema publishing office
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `publishing office finally` DEFAULT CHARACTER SET utf8 ;
USE `publishing office finally` ;

-- -----------------------------------------------------
-- Table `publishing office`.`author`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `publishing office finally`.`author` (
  `id_author` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_author` VARCHAR(45) NOT NULL,
  `lastname_author` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_author`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `publishing office`.`Books`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `publishing office finally`.`Books` (
  `ISBN_Books` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(55) NOT NULL,
  `page_count` INT NOT NULL,
  `publication_date` DATE NOT NULL,
  PRIMARY KEY (`ISBN_Books`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `publishing office`.`book_author`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `publishing office finally`.`book_author` (
  `id_author_ba` INT UNSIGNED NOT NULL,
  `ISBN_Books_ba` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_author_ba`, `ISBN_Books_ba`),
  INDEX `books_idx` (`ISBN_Books_ba` ASC) VISIBLE,
  CONSTRAINT `fk_book_author`
    FOREIGN KEY (`ISBN_Books_ba`)
    REFERENCES `publishing office finally`.`Books` (`ISBN_Books`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_author_book`
    FOREIGN KEY (`id_author_ba`)
    REFERENCES `publishing office finally`.`author` (`id_author`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `publishing office`.`Genre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `publishing office finally`.`Genre` (
  `id_genre` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `genre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_genre`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `publishing office`.`book_genre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `publishing office finally`.`book_genre` (
  `ISBN_Books_bg` INT UNSIGNED NOT NULL,
  `id_genre_bg` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`ISBN_Books_bg`, `id_genre_bg`),
  INDEX `Genre_idx` (`id_genre_bg` ASC) VISIBLE,
  CONSTRAINT `fk_book_genre`
    FOREIGN KEY (`ISBN_Books_bg`)
    REFERENCES `publishing office finally`.`Books` (`ISBN_Books`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_genre_book`
    FOREIGN KEY (`id_genre_bg`)
    REFERENCES `publishing book_authoroffice finally`.`Genre` (`id_genre`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
