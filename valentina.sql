-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `valentina` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema valentina
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema valentina
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `valentina` DEFAULT CHARACTER SET latin1 ;
USE `valentina` ;

-- -----------------------------------------------------
-- Table `valentina`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `valentina`.`paciente` (
  `idpaciente` INT(11) NOT NULL AUTO_INCREMENT,
  `dpi` VARCHAR(13) NOT NULL,
  `nombre` VARCHAR(75) NULL DEFAULT NULL,
  `apellidos` VARCHAR(75) NULL DEFAULT NULL,
  `telefono` INT(11) NULL DEFAULT NULL,
  `direccion` VARCHAR(105) NULL DEFAULT NULL,
  `fecha_nac` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`idpaciente`),
  UNIQUE INDEX `dpi_UNIQUE` (`dpi` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `valentina`.`consulta` (
  `idconsulta` INT NOT NULL AUTO_INCREMENT,
  `area` VARCHAR(75) NULL,
  `fecha` DATE NULL,
  `hora` TIME NULL,
  `edad` INT NULL,
  `paciente_idpaciente` INT(11) NOT NULL,
  PRIMARY KEY (`idconsulta`),
  INDEX `fk_consulta_paciente_idx` (`paciente_idpaciente` ASC),
  CONSTRAINT `fk_consulta_paciente`
    FOREIGN KEY (`paciente_idpaciente`)
    REFERENCES `valentina`.`paciente` (`idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`informacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `valentina`.`informacion` (
  `idinformacion` INT NOT NULL AUTO_INCREMENT,
  `evento` VARCHAR(75) NULL,
  `servicios` VARCHAR(75) NULL,
  `valoracion` VARCHAR(5) NULL,
  `paciente_idpaciente` INT(11) NOT NULL,
  PRIMARY KEY (`idinformacion`),
  INDEX `fk_informacion_paciente1_idx` (`paciente_idpaciente` ASC),
  CONSTRAINT `fk_informacion_paciente1`
    FOREIGN KEY (`paciente_idpaciente`)
    REFERENCES `valentina`.`paciente` (`idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `valentina` ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;