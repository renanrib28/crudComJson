# crudComJson
Projeto de CRUD com JSON

INSTALAÇÃO
1- CRIAR O BD COM AS SEGUNTES TABELAS: categorias e produtos

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias`  (
  `idCategoria` varchar(36) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(100)  DEFAULT NULL,
  PRIMARY KEY (`idCategoria`) USING BTREE
) 
-- ----------------------------
-- Table structure for produtos
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos`  (
  `idProduto` varchar(36)  NOT NULL,
  `idCategoria` varchar(36) DEFAULT NULL,
  `nome` varchar(50)  DEFAULT NULL,
  `descricao` varchar(100)  DEFAULT NULL,
  `valor` decimal(18, 2) NULL DEFAULT NULL,
  `estoque` int(0) NULL DEFAULT NULL,
  `dataHoraCadastro` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`idProduto`) USING BTREE,
  INDEX `fk_prod_categoria`(`idCategoria`) USING BTREE,
  CONSTRAINT `fk_prod_categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE RESTRICT ON UPDATE RESTRICT
)
-- ----------------------------
-- Triggers structure for table categorias
-- ----------------------------
DROP TRIGGER IF EXISTS `bef_ins_categoria`;
delimiter ;;
CREATE TRIGGER `bef_ins_categoria` BEFORE INSERT ON `categorias` FOR EACH ROW BEGIN
SET new.idCategoria = uuid();
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table produtos
-- ----------------------------
DROP TRIGGER IF EXISTS `bef_ins_produto`;
delimiter ;;
CREATE TRIGGER `bef_ins_produto` BEFORE INSERT ON `produtos` FOR EACH ROW BEGIN
SET NEW.idProduto = uuid();
SET NEW.dataHoraCadastro=now();
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;


2- Entrar na pasta assets/functions
No arquivo connection.php preencher os dados do bd

3- Em pages configurar a api nas aplicações(produtos.php e categorias.php) se caso não for usar em localhost
