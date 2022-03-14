-- MySQL Script generated by MySQL Workbench
-- Wed Nov 10 19:19:50 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ubicaBodega CREAR LA BD CON UTF8_SPANISH2_CI
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ubicaBodega
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ubicaBodega` DEFAULT CHARACTER SET utf8 ;
USE `ubicaBodega` ;

-- -----------------------------------------------------
-- Table `ubicaBodega`.`tpersona`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ubicaBodega`.`tpersona` ;

CREATE TABLE IF NOT EXISTS `ubicaBodega`.`tpersona` (
  `persona_dni` INT(8) NOT NULL,
  `persona_nombres` VARCHAR(65) NOT NULL,
  `persona_apaterno` VARCHAR(65) NOT NULL,
  `persona_amaterno` VARCHAR(65) NOT NULL,
  `persona_nacimiento` DATETIME NULL,
  `persona_telefono` VARCHAR(12) NULL,
  `persona_mail` VARCHAR(65) NULL,
  PRIMARY KEY (`persona_dni`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ubicaBodega`.`tempresa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ubicaBodega`.`tempresa` ;

CREATE TABLE IF NOT EXISTS `ubicaBodega`.`tempresa` (
  `empresa_ruc` INT NOT NULL,
  `empresa_razonsocial` VARCHAR(45) NULL,
  `empresa_mail` VARCHAR(45) NULL,
  `empresa_telefono` VARCHAR(45) NULL,
  `empresa_giro` VARCHAR(45) NULL,
  `empresa_responsable` INT(8) NOT NULL,
  PRIMARY KEY (`empresa_ruc`),
  INDEX `fk_tempresa_tpersona1_idx` (`empresa_responsable` ASC),
  CONSTRAINT `fk_tempresa_tpersona1`
    FOREIGN KEY (`empresa_responsable`)
    REFERENCES `ubicaBodega`.`tpersona` (`persona_dni`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ubicaBodega`.`tusuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ubicaBodega`.`tusuario` ;

CREATE TABLE IF NOT EXISTS `ubicaBodega`.`tusuario` (
  `usuario_dni` INT(8) NOT NULL,
  `usuario_clave` VARCHAR(45) NULL,
  `usuario_estado` TINYINT NULL,
  `usuario_privilegio` VARCHAR(45) NULL,
  PRIMARY KEY (`usuario_dni`),
  CONSTRAINT `fk_tusuario_tpersona1`
    FOREIGN KEY (`usuario_dni`)
    REFERENCES `ubicaBodega`.`tpersona` (`persona_dni`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ubicaBodega`.`tlicencia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ubicaBodega`.`tlicencia` ;

CREATE TABLE IF NOT EXISTS `ubicaBodega`.`tlicencia` (
  `licencia_id` INT NOT NULL,
  `licencia_codigo` VARCHAR(45) NULL,
  `licencia_expediente` VARCHAR(45) NULL,
  `licencia_tipo` VARCHAR(45) NULL,
  `licencia_direccion` VARCHAR(45) NULL,
  `licencia_areanegocio` VARCHAR(45) NULL,
  `licencia_fechacreacion` VARCHAR(45) NULL,
  `licencia_estado` TINYINT NULL,
  `licencia_ruc` INT NOT NULL,
  `licencia_usuario` INT(8) NOT NULL,
  PRIMARY KEY (`licencia_id`),
  INDEX `fk_tlicencia_tempresa1_idx` (`licencia_ruc` ASC),
  INDEX `fk_tlicencia_tusuario1_idx` (`licencia_usuario` ASC),
  CONSTRAINT `fk_tlicencia_tempresa1`
    FOREIGN KEY (`licencia_ruc`)
    REFERENCES `ubicaBodega`.`tempresa` (`empresa_ruc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tlicencia_tusuario1`
    FOREIGN KEY (`licencia_usuario`)
    REFERENCES `ubicaBodega`.`tusuario` (`usuario_dni`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ubicaBodega`.`tlespecial`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ubicaBodega`.`tlespecial` ;

CREATE TABLE IF NOT EXISTS `ubicaBodega`.`tlespecial` (
  `lespecial_id` INT NOT NULL,
  `licencia_finicio` DATETIME NOT NULL,
  `licencia_fexpiracion` DATETIME NOT NULL,
  `licencia_horario` VARCHAR(45) NOT NULL,
  `licencia_id` INT NOT NULL,
  PRIMARY KEY (`lespecial_id`),
  INDEX `fk_tlic_especial_tlicencia1_idx` (`licencia_id` ASC),
  CONSTRAINT `fk_tlic_especial_tlicencia1`
    FOREIGN KEY (`licencia_id`)
    REFERENCES `ubicaBodega`.`tlicencia` (`licencia_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
