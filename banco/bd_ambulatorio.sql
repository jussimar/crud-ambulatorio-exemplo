-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 06/11/2018 às 12:44
-- Versão do servidor: 5.5.57-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `bd_ambulatorio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_ambulatorio`
--

CREATE TABLE IF NOT EXISTS `tb_ambulatorio` (
  `cd_ambulatorio` int(11) NOT NULL AUTO_INCREMENT,
  `nm_ambulatorio` varchar(50) NOT NULL,
  `ds_logradouro` varchar(80) DEFAULT NULL,
  `ds_cidade` varchar(20) DEFAULT NULL,
  `sg_estado` char(2) DEFAULT NULL,
  PRIMARY KEY (`cd_ambulatorio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `tb_ambulatorio`
--

INSERT INTO `tb_ambulatorio` (`cd_ambulatorio`, `nm_ambulatorio`, `ds_logradouro`, `ds_cidade`, `sg_estado`) VALUES
(2, 'ambulatorio de teste', 'rua nova de teste 200', 'Sao Paulo', 'SP'),
(3, 'unimed', 'av nova 123', 'Sao Paulo', 'SP'),
(4, 'santa casa', 'teste', 'Sao Paulo', 'SP');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_consulta`
--

CREATE TABLE IF NOT EXISTS `tb_consulta` (
  `cd_consulta` int(11) NOT NULL AUTO_INCREMENT,
  `dt_consulta` date NOT NULL,
  `id_ambulatorio` int(11) DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `id_medico` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_consulta`),
  KEY `id_ambulatorio` (`id_ambulatorio`),
  KEY `id_paciente` (`id_paciente`),
  KEY `id_medico` (`id_medico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_medico`
--

CREATE TABLE IF NOT EXISTS `tb_medico` (
  `cd_medico` int(11) NOT NULL AUTO_INCREMENT,
  `nm_medico` varchar(50) NOT NULL,
  `nm_sobrenome` varchar(100) DEFAULT NULL,
  `nr_cpf` varchar(14) DEFAULT NULL,
  `nr_crm` int(11) NOT NULL,
  `ds_especialidade` varchar(20) DEFAULT NULL,
  `vl_consulta` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`cd_medico`),
  UNIQUE KEY `nr_cpf` (`nr_cpf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `tb_medico`
--

INSERT INTO `tb_medico` (`cd_medico`, `nm_medico`, `nm_sobrenome`, `nr_cpf`, `nr_crm`, `ds_especialidade`, `vl_consulta`) VALUES
(3, 'Gustavo', 'ferreira', '5454545', 55555, 'Clinico Geral', '960.00'),
(4, 'JoÃ£o', 'Silva', '230.969.985-96', 66565, 'Clinico Geral', '600.00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_medico_ambulatorio`
--

CREATE TABLE IF NOT EXISTS `tb_medico_ambulatorio` (
  `cd_medico_ambulatorio` int(11) NOT NULL AUTO_INCREMENT,
  `id_ambulatorio` int(11) DEFAULT NULL,
  `id_medico` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_medico_ambulatorio`),
  KEY `id_ambulatorio` (`id_ambulatorio`),
  KEY `id_medico` (`id_medico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Fazendo dump de dados para tabela `tb_medico_ambulatorio`
--

INSERT INTO `tb_medico_ambulatorio` (`cd_medico_ambulatorio`, `id_ambulatorio`, `id_medico`) VALUES
(1, 2, 3),
(2, 3, 3),
(3, 3, 4),
(5, 4, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_paciente`
--

CREATE TABLE IF NOT EXISTS `tb_paciente` (
  `cd_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nm_paciente` varchar(50) NOT NULL,
  `nm_sobrenome` varchar(100) DEFAULT NULL,
  `nr_cpf` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`cd_paciente`),
  UNIQUE KEY `nr_cpf` (`nr_cpf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `tb_paciente`
--

INSERT INTO `tb_paciente` (`cd_paciente`, `nm_paciente`, `nm_sobrenome`, `nr_cpf`) VALUES
(3, 'JoÃ£o', 'Ferreira', '000000000');

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `tb_consulta`
--
ALTER TABLE `tb_consulta`
  ADD CONSTRAINT `tb_consulta_ibfk_1` FOREIGN KEY (`id_ambulatorio`) REFERENCES `tb_ambulatorio` (`cd_ambulatorio`),
  ADD CONSTRAINT `tb_consulta_ibfk_2` FOREIGN KEY (`id_paciente`) REFERENCES `tb_paciente` (`cd_paciente`),
  ADD CONSTRAINT `tb_consulta_ibfk_3` FOREIGN KEY (`id_medico`) REFERENCES `tb_medico` (`cd_medico`);

--
-- Restrições para tabelas `tb_medico_ambulatorio`
--
ALTER TABLE `tb_medico_ambulatorio`
  ADD CONSTRAINT `tb_medico_ambulatorio_ibfk_1` FOREIGN KEY (`id_ambulatorio`) REFERENCES `tb_ambulatorio` (`cd_ambulatorio`),
  ADD CONSTRAINT `tb_medico_ambulatorio_ibfk_2` FOREIGN KEY (`id_medico`) REFERENCES `tb_medico` (`cd_medico`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
