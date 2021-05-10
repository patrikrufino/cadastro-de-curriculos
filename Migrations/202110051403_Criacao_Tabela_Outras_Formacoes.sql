-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Maio-2021 às 19:03
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_final`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `experienciaprofissional`
--

CREATE TABLE `experienciaprofissional` (
  `idexperienciaprofissional` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `inicio` date NOT NULL,
  `fim` date DEFAULT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacaoacademica`
--

CREATE TABLE `formacaoacademica` (
  `idformacaoAcademica` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `inicio` date NOT NULL,
  `fim` date DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `outrasformacoes`
--

CREATE TABLE `outrasformacoes` (
  `idoutrasformacoes` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `inicio` date DEFAULT NULL,
  `fim` date DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL,
  `dataNascimento` date DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `experienciaprofissional`
--
ALTER TABLE `experienciaprofissional`
  ADD PRIMARY KEY (`idexperienciaprofissional`),
  ADD KEY `idUser_idx` (`idusuario`);

--
-- Índices para tabela `formacaoacademica`
--
ALTER TABLE `formacaoacademica`
  ADD PRIMARY KEY (`idformacaoAcademica`),
  ADD KEY `IDUSUARIO_idx` (`idusuario`);

--
-- Índices para tabela `outrasformacoes`
--
ALTER TABLE `outrasformacoes`
  ADD PRIMARY KEY (`idoutrasformacoes`),
  ADD KEY `idusuario_idx` (`idusuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `experienciaprofissional`
--
ALTER TABLE `experienciaprofissional`
  MODIFY `idexperienciaprofissional` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `formacaoacademica`
--
ALTER TABLE `formacaoacademica`
  MODIFY `idformacaoAcademica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `outrasformacoes`
--
ALTER TABLE `outrasformacoes`
  MODIFY `idoutrasformacoes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `experienciaprofissional`
--
ALTER TABLE `experienciaprofissional`
  ADD CONSTRAINT `idUser` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `formacaoacademica`
--
ALTER TABLE `formacaoacademica`
  ADD CONSTRAINT `IDUSUARIO` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `outrasformacoes`
--
ALTER TABLE `outrasformacoes`
  ADD CONSTRAINT `fk_idUsuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
