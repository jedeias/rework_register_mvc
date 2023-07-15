-- --------------------------------------------------------
-- Servidor:                     dspwiii.mysql.dbaas.com.br
-- Versão do servidor:           5.7.32-35-log - Percona Server (GPL), Release 35, Revision 5688520
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para dspwiii
DROP DATABASE IF EXISTS `dspwiii`;
CREATE DATABASE IF NOT EXISTS `dspwiii` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci */;
USE `dspwiii`;

-- Copiando estrutura para tabela dspwiii.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `cli_sobrenome` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `cli_sexo` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `cli_cpf` int(11) DEFAULT NULL,
  `cli_email` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `cli_senha` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483647 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Copiando dados para a tabela dspwiii.cliente: ~22 rows (aproximadamente)
INSERT IGNORE INTO `cliente` (`cli_id`, `cli_nome`, `cli_sobrenome`, `cli_sexo`, `cli_cpf`, `cli_email`, `cli_senha`) VALUES
	(1, 'demo', 'demonstration', 'M', 1234567891, 'demo@demo.com', '123456789'),
	(2, 'rework', 'more one', 'M', 1234567891, 'rework@good.com', 'senha'),
	(3, 'Ana', 'Torres', 'F', 1111111111, 'ana@gmail.com', '123'),
	(5, 'calvo', 'brilhante!', 'M', 213564, 'calvo@calvo.com', '123456'),
	(6, 'rework', 'verbalizando', 'M', 123456789, 'rework@good.com', '123456'),
	(13, 'Luiz Felipe', 'Costa Silva', 'M', 1234567891, 'luiz@felipe.com', '007'),
	(33, 'Gustavo', 'Almeida ', 'M', 2147483647, 'geral@g.com', '1234'),
	(35, 'Gustavo', 'Teste', 'M', 2147483647, 'g@g.com', '1234'),
	(100, 'Gustavo', 'Teste', 'M', 1970, 'g@g.com', '1234'),
	(200, 'Gustavo', 'Almeida ', 'M', 2147483647, 'teste@gmail.com', '1234'),
	(333, 'Platao', 'Calvo', 'M', 2147483647, 'plataocalvo@gmail.com', 'calvoaos24anos'),
	(3220, 'alex', 'teste', 'M', 2147483647, 'alexteste@gmail.com', '123'),
	(3338, 'Atividade', 'PDO', 'M', 2147483647, 'atividadepdo@email.com', '123'),
	(12333, 'LUCAS', 'jesus', 'm', 2147483647, 'lucas.jesus177@gmail.com', 'lucas123'),
	(12345, 'theo', 'costa', 'm', 2147483642, 'theo@gmail.com', 'theo.costa'),
	(232323, 'theo', 'costa', 'm', 2147483642, 'theo@gmail.com', 'theo.costa'),
	(35639600, 'testenson', 'testenson segundo', 'F', 12345678, 'joaozinho@example.com', 'senha123'),
	(1033490850, 'Xaolin', 'Matador de porco', 'M', 12345678, 'XaolinMatadorDePorcoQueimadorDeCadavar@g', '12345678'),
	(2041852299, 'final', 'day', 'F', 12346579, 'end@end.com', '987654'),
	(2147483616, 'lucas', 'lucas', 'm', 2147483644, 'lucas@gmail.com', 'lucas123'),
	(2147483646, 'lucas', 'lucas', 'm', 2147483644, 'lucas@gmail.com', 'lucas123'),
	(2147483647, 'Anthony', 'Monteiro', 'm', 123456, 'abc@hotmail.com', '12345678');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
