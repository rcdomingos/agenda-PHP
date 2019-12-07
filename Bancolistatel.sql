-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.34 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para listatel
CREATE DATABASE IF NOT EXISTS `listatel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `listatel`;

-- Copiando estrutura para tabela listatel.contatos
CREATE TABLE IF NOT EXISTS `contatos` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `name_contact` varchar(50) DEFAULT NULL,
  `phone_contact` varchar(12) DEFAULT NULL,
  `mail_contact` varchar(50) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_contact`),
  KEY `FK_contato_usuario` (`id_user`),
  CONSTRAINT `FK_contato_usuario` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela listatel.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(50) DEFAULT NULL,
  `login_user` varchar(50) DEFAULT NULL,
  `pass_user` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
