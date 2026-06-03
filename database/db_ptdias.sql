-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/05/2026 às 22:15
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12
USE db_ptdias;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_ptdias`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `morada` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `assunto` varchar(150) NOT NULL,
  `mensagem` text NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_formador` int(4) NOT NULL,
  `id_categorias` int(4) NOT NULL,
  `id_niveis` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` float NOT NULL,
  `duracao` int(4) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  `sobre` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_formadorfk` (`id_formador`),
  KEY `id_categoriasfk` (`id_categorias`),
  KEY `id_niveisfk` (`id_niveis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `dadosempresa`
--

CREATE TABLE IF NOT EXISTS `dadosempresa` (
  `email` varchar(100) NOT NULL,
  `telefone` int(12) NOT NULL,
  `morada` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `formador`
--

CREATE TABLE IF NOT EXISTS `formador` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `telefone` int(12) NOT NULL,
  `morada` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `matriculas`
--

CREATE TABLE IF NOT EXISTS `matriculas` (
  `matricula` int(6) NOT NULL AUTO_INCREMENT,
  `id_alunos` int(4) NOT NULL,
  `id_cursos` int(4) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `concluido` tinyint(1) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`matricula`),
  KEY `id_alunosfk` (`id_alunos`),
  KEY `id_cursos` (`id_cursos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `niveis`
--

CREATE TABLE IF NOT EXISTS `niveis` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `id_categoriasfk` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_formadorfk` FOREIGN KEY (`id_formador`) REFERENCES `formador` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_niveisfk` FOREIGN KEY (`id_niveis`) REFERENCES `niveis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `matriculas`
--
ALTER TABLE `matriculas`
  ADD CONSTRAINT `id_alunosfk` FOREIGN KEY (`id_alunos`) REFERENCES `alunos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_cursos` FOREIGN KEY (`id_cursos`) REFERENCES `cursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
