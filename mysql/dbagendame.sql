-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2022 às 00:11
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbagendame`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `convites`
--

CREATE TABLE `convites` (
  `id_convite` int(11) NOT NULL,
  `fk_id_destinatario` int(11) NOT NULL,
  `fk_id_remetente` int(11) NOT NULL,
  `fk_id_evento` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `cor` varchar(7) DEFAULT NULL,
  `inicio` datetime NOT NULL,
  `termino` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontatos`
--

CREATE TABLE `tbcontatos` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(200) NOT NULL,
  `emailContato` varchar(100) NOT NULL,
  `telefoneContato` varchar(50) NOT NULL,
  `enderecoContato` varchar(200) NOT NULL,
  `sexoContato` char(1) NOT NULL,
  `dataNascContato` date NOT NULL,
  `flagFavoritoContato` tinyint(1) NOT NULL,
  `nomeFotoContato` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtarefas`
--

CREATE TABLE `tbtarefas` (
  `idTarefa` int(11) NOT NULL,
  `tituloTarefa` varchar(255) NOT NULL,
  `descricaoTarefa` varchar(255) NOT NULL,
  `dataConclusaoTarefa` date NOT NULL,
  `horaConclusaoTarefa` time NOT NULL,
  `dataLembreteTarefa` date NOT NULL,
  `horaLembreteTarefa` time NOT NULL,
  `recorrenciaTarefa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `senha`) VALUES
(1, 'estagiario', '45ce120feaa2c1a2bb53db6c8fb833e58d6bb661'),
(2, 'paciente', '36d64040f731b093d71a02cec21c74cb4ff122c5');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `convites`
--
ALTER TABLE `convites`
  ADD PRIMARY KEY (`id_convite`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Índices para tabela `tbcontatos`
--
ALTER TABLE `tbcontatos`
  ADD PRIMARY KEY (`idContato`);

--
-- Índices para tabela `tbtarefas`
--
ALTER TABLE `tbtarefas`
  ADD PRIMARY KEY (`idTarefa`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `convites`
--
ALTER TABLE `convites`
  MODIFY `id_convite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcontatos`
--
ALTER TABLE `tbcontatos`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtarefas`
--
ALTER TABLE `tbtarefas`
  MODIFY `idTarefa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
