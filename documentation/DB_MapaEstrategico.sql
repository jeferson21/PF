CREATE TABLE IF NOT EXISTS `PERSPECTIVAS` (
  `idPERSPECTIVA` INT NOT NULL AUTO_INCREMENT,
  `TIPO_PERSP` VARCHAR(20) NULL,
  `SITUACAO_PERSP` VARCHAR(10) NULL,
  `DESCRICAO_PERSP` VARCHAR(50) NULL,
  PRIMARY KEY (`idPERSPECTIVA`))
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `GRUPOS` (
  `idGRUPO` INT NOT NULL AUTO_INCREMENT,
  `CATEGORIA` VARCHAR(100) NULL,
  `SITUACAO_GR` VARCHAR(10) NULL,
  `PERSPECTIVAS_idPERSPECTIVA` INT NOT NULL,
  PRIMARY KEY (`idGRUPO`),
  INDEX `fk_GRUPOS_PERSPECTIVAS_idx` (`PERSPECTIVAS_idPERSPECTIVA` ASC),
  CONSTRAINT `fk_GRUPOS_PERSPECTIVAS`
    FOREIGN KEY (`PERSPECTIVAS_idPERSPECTIVA`)
    REFERENCES `PERSPECTIVAS` (`idPERSPECTIVA`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `OBJETIVOS` (
  `idOBJETIVO` INT NOT NULL AUTO_INCREMENT,
  `DESCRICAO_OBJ` VARCHAR(100) NULL,
  `SITUACAO_OBJ` VARCHAR(10) NULL,
  `GRUPOS_idGRUPO` INT NOT NULL,
  PRIMARY KEY (`idOBJETIVO`),
  INDEX `fk_OBJETIVOS_GRUPOS1_idx` (`GRUPOS_idGRUPO` ASC),
  CONSTRAINT `fk_OBJETIVOS_GRUPOS1`
    FOREIGN KEY (`GRUPOS_idGRUPO`)
    REFERENCES `GRUPOS` (`idGRUPO`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `INDICADORES` (
  `idINDICADOR` INT NOT NULL AUTO_INCREMENT,
  `SITUACAO_IND` VARCHAR(10) NULL,
  `TIPO_IND` VARCHAR(100) NULL,
  `OBJETIVOS_idOBJETIVO` INT NOT NULL,
  PRIMARY KEY (`idINDICADOR`),
  INDEX `fk_INDICADORES_OBJETIVOS1_idx` (`OBJETIVOS_idOBJETIVO` ASC),
  CONSTRAINT `fk_INDICADORES_OBJETIVOS1`
    FOREIGN KEY (`OBJETIVOS_idOBJETIVO`)
    REFERENCES `OBJETIVOS` (`idOBJETIVO`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `PROJETOS` (
  `idPROJETO` INT NOT NULL AUTO_INCREMENT,
  `NOME_PROJ` VARCHAR(100) NULL,
  `DATA_INI` DATE NULL,
  `DATA_FIM` DATE NULL,
  `RESPONSAVEL` VARCHAR(80) NULL,
  `SITUACAO_PROJ` VARCHAR(10) NULL,
  `OBJETIVOS_idOBJETIVO` INT NOT NULL,
  PRIMARY KEY (`idPROJETO`),
  INDEX `fk_PROJETOS_OBJETIVOS1_idx` (`OBJETIVOS_idOBJETIVO` ASC),
  CONSTRAINT `fk_PROJETOS_OBJETIVOS1`
    FOREIGN KEY (`OBJETIVOS_idOBJETIVO`)
    REFERENCES `OBJETIVOS` (`idOBJETIVO`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `METAS` (
  `idMETA` INT NOT NULL AUTO_INCREMENT,
  `ANO` INT NULL,
  `SITUACAO_MET` VARCHAR(10) NULL,
  `DESCRICAO_MET` VARCHAR(100) NULL,
  `UNIDADE` VARCHAR(10) NULL,
  `VERDE_INI` FLOAT NULL,
  `VERDE_LIM` FLOAT NULL,
  `AMARELO_LIM` FLOAT NULL,
  `VERMELHO_LIM` FLOAT NULL,
  `INDICADORES_idINDICADOR` INT NOT NULL,
  PRIMARY KEY (`idMETA`),
  INDEX `fk_METAS_INDICADORES1_idx` (`INDICADORES_idINDICADOR` ASC),
  CONSTRAINT `fk_METAS_INDICADORES1`
    FOREIGN KEY (`INDICADORES_idINDICADOR`)
    REFERENCES `INDICADORES` (`idINDICADOR`)
    ON DELETE CASCADE
    ON UPDATE CASCADE) 
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `IMPORTACOES` (
  `idIMPORTACAO` INT NOT NULL AUTO_INCREMENT,
  `UNIDADE` VARCHAR(10) NULL,
  `DATA` DATE NULL,
  `VALOR` FLOAT NULL,
  `INDICADORES_idINDICADOR` INT NOT NULL,
  `PROJETOS_idPROJETO` INT NOT NULL,
  PRIMARY KEY (`idIMPORTACAO`),
  INDEX `fk_IMPORTACOES_INDICADORES1_idx` (`INDICADORES_idINDICADOR` ASC),
  INDEX `fk_IMPORTACOES_PROJETOS1_idx` (`PROJETOS_idPROJETO` ASC),
  CONSTRAINT `fk_IMPORTACOES_INDICADORES1`
    FOREIGN KEY (`INDICADORES_idINDICADOR`)
    REFERENCES `INDICADORES` (`idINDICADOR`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_IMPORTACOES_PROJETOS1`
    FOREIGN KEY (`PROJETOS_idPROJETO`)
    REFERENCES `PROJETOS` (`idPROJETO`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `MAPAS` (
  `idME` INT NOT NULL AUTO_INCREMENT,
  `SITUACAO_ME` VARCHAR(10) NULL,
  `MISSAO` VARCHAR(400) NULL,
  `VISAO` VARCHAR(400) NULL,
  `ANO` INT NULL,
  PRIMARY KEY (`idME`))
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `ITENS` (
  `idITEM` INT NOT NULL AUTO_INCREMENT,
  `MAPAS_idME` INT NOT NULL,
  `GRUPOS_idGRUPO` INT NOT NULL,
  `PERSPECTIVAS_idPERSPECTIVA` INT NOT NULL,
  `OBJETIVOS_idOBJETIVO` INT NOT NULL,
  `INDICADORES_idINDICADOR` INT NOT NULL,
  PRIMARY KEY (`idITEM`),
  INDEX `fk_ITENS_MAPAS1_idx` (`MAPAS_idME` ASC),
  INDEX `fk_ITENS_GRUPOS1_idx` (`GRUPOS_idGRUPO` ASC),
  INDEX `fk_ITENS_PERSPECTIVAS1_idx` (`PERSPECTIVAS_idPERSPECTIVA` ASC),
  INDEX `fk_ITENS_OBJETIVOS1_idx` (`OBJETIVOS_idOBJETIVO` ASC),
  INDEX `fk_ITENS_INDICADORES1_idx` (`INDICADORES_idINDICADOR` ASC),
  CONSTRAINT `fk_ITENS_MAPAS1`
    FOREIGN KEY (`MAPAS_idME`)
    REFERENCES `MAPAS` (`idME`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_ITENS_GRUPOS1`
    FOREIGN KEY (`GRUPOS_idGRUPO`)
    REFERENCES `GRUPOS` (`idGRUPO`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_ITENS_PERSPECTIVAS1`
    FOREIGN KEY (`PERSPECTIVAS_idPERSPECTIVA`)
    REFERENCES `PERSPECTIVAS` (`idPERSPECTIVA`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_ITENS_OBJETIVOS1`
    FOREIGN KEY (`OBJETIVOS_idOBJETIVO`)
    REFERENCES `OBJETIVOS` (`idOBJETIVO`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_ITENS_INDICADORES1`
    FOREIGN KEY (`INDICADORES_idINDICADOR`)
    REFERENCES `INDICADORES` (`idINDICADOR`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB