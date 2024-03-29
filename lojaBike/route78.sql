-- MySQL Script generated by MySQL Workbench
-- Tue May  8 01:24:34 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema route78
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema route78
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `route78` DEFAULT CHARACTER SET utf8 ;
USE `route78` ;

-- -----------------------------------------------------
-- Table `route78`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `route78`.`funcionario` (
  `codigo_funcionario` INT NOT NULL AUTO_INCREMENT,
  `nome_funcionario` VARCHAR(45) NOT NULL,
  `sexo_funcionario` VARCHAR(45) NOT NULL,
  `cpf_funcionario` VARCHAR(45) NOT NULL,
  `rg_funcionario` VARCHAR(45) NOT NULL,
  `telefone_funcionario` VARCHAR(45) NOT NULL,
  `email_funcionario` VARCHAR(45) NOT NULL,
  `login_funcionario` VARCHAR(45) NOT NULL,
  `senha_funcionario` VARCHAR(45) NOT NULL,
  `situacao_funcionario` VARCHAR(45) NOT NULL,
  `tipo_funcionario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codigo_funcionario`),
  UNIQUE INDEX `login_funcionario_UNIQUE` (`login_funcionario` ASC),
  UNIQUE INDEX `email_funcionario_UNIQUE` (`email_funcionario` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `route78`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `route78`.`cliente` (
  `codigo_cliente` INT NOT NULL AUTO_INCREMENT,
  `nome_cliente` VARCHAR(45) NOT NULL,
  `tipo_cliente` VARCHAR(45) NOT NULL,
  `cpf_cliente` VARCHAR(45) NOT NULL,
  `telefone_cliente` VARCHAR(45) NOT NULL,
  `email_cliente` VARCHAR(45) NOT NULL,
  `endereco_cliente` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`codigo_cliente`),
  UNIQUE INDEX `email_cliente_UNIQUE` (`email_cliente` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `route78`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `route78`.`pedido` (
  `cod_pedido` INT NOT NULL AUTO_INCREMENT,
  `data_pedido` DATE NOT NULL,
  `hora_pedido` DATETIME NOT NULL,
  `subtotal_pedido` DOUBLE NOT NULL,
  `total_pedido` DOUBLE NOT NULL,
  `funcionario_codigo_funcionario` INT NOT NULL,
  `cliente_codigo_cliente` INT NOT NULL,
  PRIMARY KEY (`cod_pedido`, `funcionario_codigo_funcionario`, `cliente_codigo_cliente`),
  INDEX `fk_pedido_funcionario_idx` (`funcionario_codigo_funcionario` ASC),
  INDEX `fk_pedido_cliente1_idx` (`cliente_codigo_cliente` ASC),
  CONSTRAINT `fk_pedido_funcionario`
    FOREIGN KEY (`funcionario_codigo_funcionario`)
    REFERENCES `route78`.`funcionario` (`codigo_funcionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedido_cliente1`
    FOREIGN KEY (`cliente_codigo_cliente`)
    REFERENCES `route78`.`cliente` (`codigo_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `route78`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `route78`.`produto` (
  `codigo_produto` INT NOT NULL AUTO_INCREMENT,
  `nome_produto` VARCHAR(45) NOT NULL,
  `descricao_produto` TEXT(500) NOT NULL,
  `estoque_produto` VARCHAR(45) NOT NULL,
  `valor_produto` DOUBLE NOT NULL,
  `situacao_produto` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codigo_produto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `route78`.`produto_por_pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `route78`.`produto_por_pedido` (
  `produto_codigo_produto` INT NOT NULL,
  `pedido_cod_pedido` INT NOT NULL,
  `pedido_funcionario_codigo_funcionario` INT NOT NULL,
  `pedido_cliente_codigo_cliente` INT NOT NULL,
  PRIMARY KEY (`produto_codigo_produto`, `pedido_cod_pedido`, `pedido_funcionario_codigo_funcionario`, `pedido_cliente_codigo_cliente`),
  INDEX `fk_produto_has_pedido_pedido1_idx` (`pedido_cod_pedido` ASC, `pedido_funcionario_codigo_funcionario` ASC, `pedido_cliente_codigo_cliente` ASC),
  INDEX `fk_produto_has_pedido_produto1_idx` (`produto_codigo_produto` ASC),
  CONSTRAINT `fk_produto_por_pedido`
    FOREIGN KEY (`produto_codigo_produto`)
    REFERENCES `route78`.`produto` (`codigo_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedido_funcionario_cliente`
    FOREIGN KEY (`pedido_cod_pedido` , `pedido_funcionario_codigo_funcionario` , `pedido_cliente_codigo_cliente`)
    REFERENCES `route78`.`pedido` (`cod_pedido` , `funcionario_codigo_funcionario` , `cliente_codigo_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;