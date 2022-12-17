create DATABASE willian;
USE willian;


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
  `sexoContato` varchar(20) NOT NULL,
  `dataNascContato` date NOT NULL,
  `flagFavoritoContato` tinyint(1) NOT NULL,
  `nomeFotoContato` varchar(255) DEFAULT NULL,
  cd_cpf_paciente  VARCHAR(25) NOT NULL,
  cd_rg_paciente VARCHAR(25) NOT NULL,
  senhaContato varchar(11) DEFAULT NULL,
  cd_token VARCHAR(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
select*from tbcontatos;

INSERT INTO tbcontatos VALUES (1,"Marcelo","marcelo@gmail.com","9231832","Conselheiro Nébias, 293","M",'2004-10-07','0',null,"9321383","1234534","12345","");
INSERT INTO tbcontatos VALUES (2,"Willian","willian@gmail.com","2397847","Conselheiro Nébias, 195","M",'2000-12-13','0',null,"3487339","2939479","93847","");
INSERT INTO tbcontatos VALUES (3,"Rodrigo","rodrigo@gmail.com","5983487","Rua H, 938","M",'2002-10-30','0',null,"4934873","983721","83723","");
INSERT INTO tbcontatos VALUES (4,"Jussara","jussara@gmail.com","2831908","Rua Mato Grosso, 130","F",'2004-12-15','0',null,"948235","1234534","12345","");
INSERT INTO tbcontatos VALUES (5,"Carla","carla@gmail.com","1393721","Rua Bitencourt","F",'2003-05-10','0',null,"723837","2378733","93837","");
INSERT INTO tbcontatos VALUES (6,"Roberto","roberto@gmail.com","1238732","Rua H, 840","M",'2005-06-27','0',null,"548273","938743","397283","");
INSERT INTO tbcontatos VALUES (7,"Paula","paula@gmail.com","582733","Conselheiro Nébias, 50","F",'2003-03-06','0',null,"2382837","3847434","92383","");
INSERT INTO tbcontatos VALUES (8,"Clara","clara@gmail.com","3328973","Rua Santa Marta","F",'2002-02-21','0',null,"481487","1923173","23874","");
INSERT INTO tbcontatos VALUES (9,"Milena","milena@gmail.com","9483710","Rua Oito, 20","F",'2004-12-16','0',null,"1289378","1239213","21981","");
INSERT INTO tbcontatos VALUES (10,"Kaue","kaue@gmail.com","1239874","Rua Moema, 52","M",'2005-07-07','0',null,"1238173","1238982","09238","");
INSERT INTO tbcontatos VALUES (11,"Angelo","angelo@gmail.com","8347821","Rua H, 1002","M",'2003-01-05','0',null,"12831733","1823337","18300","");
INSERT INTO tbcontatos VALUES (12,"Vitor","vitor@gmail.com","8834781","Rua Santo Américo","M",'2002-08-27','0',null,"9238723","928377","93821","");
INSERT INTO tbcontatos VALUES (13,"Samuel","samuel@gmail.com","3892731","Rua Moema, 60","M",'2002-04-10','0',null,"5132873","9982731","55028","");
INSERT INTO tbcontatos VALUES (14,"Valéria","valeria@gmail.com","5582372","Rua Oito, 30","F",'1996-03-10','0',null,"8231737","9238721","02938","");
INSERT INTO tbcontatos VALUES (15,"Leonardo","leonardo@gmail.com","6347293","Conselheiro Nébias, 105","M",'2003-03-30','0',null,"985237","2318390","92811","");
INSERT INTO tbcontatos VALUES (16,"Maria","maria@gmail.com","956121","Rua Bitencourt","F",'2002-10-05','0',null,"8923172","1239872","93831","");
INSERT INTO tbcontatos VALUES (17,"Juliana","juliana@gmail.com","2932713","Rua Brasília, 123","F",'1995-05-05','0',null,"21391238","5823732","11008","");
INSERT INTO tbcontatos VALUES (18,"Leticia","leticia@gmail.com","13823723","Rua Moema, 52","F",'2000-10-30','0',null,"28372613","2387121","62381","");
INSERT INTO tbcontatos VALUES (19,"Rafael","rafael@gmail.com","5348233","Rua Mato Grosso, 201","M",'2003-09-25','0',null,"3237134","2937133","17913","");
INSERT INTO tbcontatos VALUES (20,"Vitoria","vitoria@gmail.com","923974","Conselheiro Nébias, 195","F",'2004-10-07','0',null,"8382711","2831373","21382","");

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

INSERT INTO tbtarefas VALUES (1,"Consulta","Consulta - Rodrigo Farias",'2023-01-10','14:00:00','2023-01-09','14:00:00',0);
INSERT INTO tbtarefas VALUES (2,"Consulta","Consulta - Thiago Rothje",'2023-01-12','13:00:00','2023-01-11','13:00:00',0);
INSERT INTO tbtarefas VALUES (3,"Consulta","Consulta - Kamilla Luna",'2023-01-05','12:00:00','2023-01-04','12:00:00',0);
INSERT INTO tbtarefas VALUES (4,"Consulta","Consulta - Alexandre Salomão",'2022-12-19','16:00:00','2022-11-19','16:00:00',0);
INSERT INTO tbtarefas VALUES (5,"Consulta","Consulta - Pedro Felisberto",'2022-12-18','12:00:00','2022-12-17','12:00:00',0);
INSERT INTO tbtarefas VALUES (6,"Consulta","Consulta - Rapahel Alcantara",'2023-01-20','14:00:00','2023-01-19','14:00:00',0);
INSERT INTO tbtarefas VALUES (7,"Consulta","Consulta - Felipe Melo",'2023-01-10','13:00:00','2023-01-09','13:00:00',0);
INSERT INTO tbtarefas VALUES (8,"Consulta","Consulta - Isadora Salles",'2023-01-10','18:00:00','2023-01-09','18:00:00',0);
INSERT INTO tbtarefas VALUES (9,"Consulta","Consulta - Marcelo Bezerra",'2022-12-28','14:00:00','2022-12-27','14:00:00',0);
INSERT INTO tbtarefas VALUES (10,"Consulta","Consulta - Kaue Junior",'2023-01-10','15:00:00','2023-01-09','15:00:00',0);
INSERT INTO tbtarefas VALUES (11,"Consulta","Consulta - Ailton Guimarães",'2023-01-10','16:00:00','2023-01-09','16:00:00',0);
INSERT INTO tbtarefas VALUES (12,"Consulta","Consulta - Marinês Maria",'2023-12-17','17:00:00','2023-12-16','17:00:00',0);
INSERT INTO tbtarefas VALUES (13,"Consulta","Consulta - Lucas Tavares",'2023-01-10','17:00:00','2023-01-09','17:00:00',0);

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
