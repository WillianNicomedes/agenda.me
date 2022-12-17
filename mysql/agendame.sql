create database agendame;
use agendame;
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2022 às 00:12
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
-- Banco de dados: `agendame`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Contatos_paciente` (IN `id` FLOAT)   BEGIN
       SELECT nm_paciente,cd_telefone_paciente,ds_email_paciente,id_contato FROM paciente AS pa
       INNER JOIN contato AS co ON(pa.id_paciente = co.id_paciente) WHERE co.id_paciente = id;
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id_agendamento` int(11) NOT NULL,
  `dt_agendamento` date NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_universidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`id_agendamento`, `dt_agendamento`, `id_paciente`, `id_universidade`) VALUES
(1, '2008-08-22', 1, 1),
(2, '2009-07-12', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `id_atendimento` int(11) NOT NULL,
  `dt_atendimento` date NOT NULL,
  `hr_entrada_atendimento` time NOT NULL,
  `hr_saida_atendimento` time NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_estagiario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atendimento`
--

INSERT INTO `atendimento` (`id_atendimento`, `dt_atendimento`, `hr_entrada_atendimento`, `hr_saida_atendimento`, `id_paciente`, `id_estagiario`) VALUES
(1, '2009-12-12', '19:32:46', '19:32:46', 1, 1),
(2, '2010-11-12', '19:32:46', '19:32:46', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL,
  `cd_telefone_paciente` varchar(30) NOT NULL,
  `ds_email_paciente` varchar(120) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `cd_telefone_paciente`, `ds_email_paciente`, `id_paciente`) VALUES
(1, '1399150536', 'kkk@gmail.com', 1),
(2, '1399159998', 'jorge@gmail.com', 2),
(3, '', '', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estagiario`
--

CREATE TABLE `estagiario` (
  `id_estagiario` int(11) NOT NULL,
  `cd_ra_aluno` int(11) NOT NULL,
  `nm_email_aluno` varchar(45) NOT NULL,
  `cd_cpf_aluno` varchar(25) NOT NULL,
  `nm_aluno` varchar(100) NOT NULL,
  `dt_nascimento_aluno` date NOT NULL,
  `cd_periodo_curso` varchar(15) NOT NULL,
  `cd_senha_aluno` varchar(20) NOT NULL,
  `id_universidade` int(11) NOT NULL,
  `cd_token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estagiario`
--

INSERT INTO `estagiario` (`id_estagiario`, `cd_ra_aluno`, `nm_email_aluno`, `cd_cpf_aluno`, `nm_aluno`, `dt_nascimento_aluno`, `cd_periodo_curso`, `cd_senha_aluno`, `id_universidade`, `cd_token`) VALUES
(1, 8315, 'teste@gmail.com', '47045811870', 'carlos', '2022-05-04', 'ds', '200264', 1, 'huhi'),
(2, 8315, 'yohans@gmail.com', '47045811870', 'carlos', '2022-05-04', 'ds', '200642', 2, 'huhi'),
(3, 3536, 'marcelinho@gmail.com', '47758694152', 'marcelinho caricoca', '1990-02-07', 'noite', '12345', 3, 'beb646bebe07f55c820e23e0be4bc99930527744');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `_start` date DEFAULT NULL,
  `_end` date DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `cd_senha` varchar(200) NOT NULL,
  `ds_email_paciente` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id_evento`, `_start`, `_end`, `title`, `cd_senha`, `ds_email_paciente`) VALUES
(1, NULL, NULL, NULL, '4625FDFOP', 'kkk@gmail.com'),
(2, NULL, NULL, NULL, '12345', 'jorge@gmail.com'),
(3, NULL, NULL, NULL, '200264', '');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `infopaciente`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `infopaciente` (
`id_paciente` int(11)
,`nm_paciente` varchar(100)
,`cd_cpf_paciente` varchar(25)
,`dt_nascimento_paciente` date
,`cd_rg_paciente` varchar(25)
,`nm_genero_paciente` varchar(15)
,`cd_senha` varchar(200)
,`cd_token` varchar(200)
,`cd_telefone_paciente` varchar(30)
,`ds_email_paciente` varchar(120)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `nm_paciente` varchar(100) NOT NULL,
  `cd_cpf_paciente` varchar(25) NOT NULL,
  `dt_nascimento_paciente` date NOT NULL,
  `cd_rg_paciente` varchar(25) NOT NULL,
  `nm_genero_paciente` varchar(15) NOT NULL,
  `cd_senha` varchar(200) NOT NULL,
  `cd_token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nm_paciente`, `cd_cpf_paciente`, `dt_nascimento_paciente`, `cd_rg_paciente`, `nm_genero_paciente`, `cd_senha`, `cd_token`) VALUES
(1, 'yohans', '123456', '2008-08-22', '561651', 'masculino', '4625FDFOP', ''),
(2, 'jorginha', '123456', '2002-10-12', '561651', 'feminino', '12345', 'ae6b71ba65517ccb4c6ea2872785205fbe4c1652'),
(3, 'jorge', '123456', '2002-10-12', '561651', 'feminino', '200264', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE `prontuario` (
  `id_prontuario` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `ds_prontuario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `prontuario`
--

INSERT INTO `prontuario` (`id_prontuario`, `id_paciente`, `ds_prontuario`) VALUES
(1, 1, 'rai'),
(2, 2, 'jhduysgdjhsd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `universidade`
--

CREATE TABLE `universidade` (
  `id_universidade` int(11) NOT NULL,
  `cd_cnpj_universidade` varchar(14) NOT NULL,
  `nm_fantasia` varchar(20) NOT NULL,
  `nm_razao_social` varchar(45) NOT NULL,
  `ds_endereco_universidade` varchar(100) NOT NULL,
  `cd_telefone_universiade` varchar(30) NOT NULL,
  `ds_email_universiade` varchar(100) NOT NULL,
  `cd_token` varchar(200) NOT NULL,
  `cd_senha_universiade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `universidade`
--

INSERT INTO `universidade` (`id_universidade`, `cd_cnpj_universidade`, `nm_fantasia`, `nm_razao_social`, `ds_endereco_universidade`, `cd_telefone_universiade`, `ds_email_universiade`, `cd_token`, `cd_senha_universiade`) VALUES
(1, '3516556', 'Universidadejorge', 'jorgeSocial', 'rua gley espindola avila', '56156156', 'djsakd@gmail.com', 'fiahsufhu', 'sadhfashf'),
(2, '3516556', 'Universidadejorge2', 'jorgin', 'Rua rua', '56156156', 'djsakd@gmail.com', 'fiahsufhu', 'sadhfashf'),
(3, '3516556', 'Universidadejorge', 'jorgeSocial', 'rua gley espindola avila', '56156156', 'unip@gmail.com', '8b7dc734d2d46ea23668dfe1f4053c2dfc7f4a6c', '20026464');

-- --------------------------------------------------------

--
-- Estrutura para vista `infopaciente`
--
DROP TABLE IF EXISTS `infopaciente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `infopaciente`  AS SELECT `pa`.`id_paciente` AS `id_paciente`, `pa`.`nm_paciente` AS `nm_paciente`, `pa`.`cd_cpf_paciente` AS `cd_cpf_paciente`, `pa`.`dt_nascimento_paciente` AS `dt_nascimento_paciente`, `pa`.`cd_rg_paciente` AS `cd_rg_paciente`, `pa`.`nm_genero_paciente` AS `nm_genero_paciente`, `pa`.`cd_senha` AS `cd_senha`, `pa`.`cd_token` AS `cd_token`, `con`.`cd_telefone_paciente` AS `cd_telefone_paciente`, `con`.`ds_email_paciente` AS `ds_email_paciente` FROM (`paciente` `pa` join `contato` `con` on(`pa`.`id_paciente` = `con`.`id_paciente`))  ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id_agendamento`),
  ADD KEY `fk_id_paciente` (`id_paciente`),
  ADD KEY `fk_id_universidade_agenda` (`id_universidade`);

--
-- Índices para tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`id_atendimento`),
  ADD KEY `fk_id_paciente_atendimento` (`id_paciente`),
  ADD KEY `fk_id_estagiario_atendimento` (`id_estagiario`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_contato`),
  ADD KEY `fk_id_paciente_contato` (`id_paciente`);

--
-- Índices para tabela `estagiario`
--
ALTER TABLE `estagiario`
  ADD PRIMARY KEY (`id_estagiario`),
  ADD KEY `fk_id_universidade` (`id_universidade`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Índices para tabela `prontuario`
--
ALTER TABLE `prontuario`
  ADD PRIMARY KEY (`id_prontuario`),
  ADD KEY `fk_id_paciente_prontuario` (`id_paciente`);

--
-- Índices para tabela `universidade`
--
ALTER TABLE `universidade`
  ADD PRIMARY KEY (`id_universidade`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id_agendamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `id_atendimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `estagiario`
--
ALTER TABLE `estagiario`
  MODIFY `id_estagiario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `prontuario`
--
ALTER TABLE `prontuario`
  MODIFY `id_prontuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `universidade`
--
ALTER TABLE `universidade`
  MODIFY `id_universidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_id_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`),
  ADD CONSTRAINT `fk_id_universidade_agenda` FOREIGN KEY (`id_universidade`) REFERENCES `universidade` (`id_universidade`);

--
-- Limitadores para a tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `fk_id_estagiario_atendimento` FOREIGN KEY (`id_estagiario`) REFERENCES `estagiario` (`id_estagiario`),
  ADD CONSTRAINT `fk_id_paciente_atendimento` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Limitadores para a tabela `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `fk_id_paciente_contato` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Limitadores para a tabela `estagiario`
--
ALTER TABLE `estagiario`
  ADD CONSTRAINT `fk_id_universidade` FOREIGN KEY (`id_universidade`) REFERENCES `universidade` (`id_universidade`);

--
-- Limitadores para a tabela `prontuario`
--
ALTER TABLE `prontuario`
  ADD CONSTRAINT `fk_id_paciente_prontuario` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
