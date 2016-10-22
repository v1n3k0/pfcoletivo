CREATE TABLE `usuario` (
  `login` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` int(11) NOT NULL,
  `pais` varchar(64) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `data_n` varchar(10) NOT NULL,
  `email` varchar(64) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `projeto` (
  `cpf` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nome_p` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `duracao` int NOT NULL,
  `valor` double NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`);

ALTER TABLE `projeto`
  ADD PRIMARY KEY (`codigo`);

ALTER TABLE `projeto`
  ADD CONSTRAINT `fk_cpf` FOREIGN KEY (`cpf`) REFERENCES `usuario` (`cpf`);