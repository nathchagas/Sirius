--
-- Base de Dados: `db_form`
--
CREATE DATABASE IF NOT EXISTS `db_form` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_form`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_func`
--

CREATE TABLE IF NOT EXISTS `tb_func` (
  `EMAIL` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(80) NOT NULL,
  `ASSUNTO` varchar(25) NOT NULL,
  `MENSAGEM` varchar (1000) NOT NULL,
  PRIMARY KEY (`EMAIL`)
) DEFAULT CHARSET=utf8;

--------------------------