

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `email`, `senha`, `foto`, `id_usuario`) VALUES
(2, 'isabele', 'isa@gmail.com', '123', 'b00561e7e754ca64719e9957a3819880y.png', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `email_fornecedor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `nota`, `email_fornecedor`) VALUES
(1, 4, 'bbelequeiroz@gmail.com'),
(2, 5, 'bbelequeiroz@gmail.com'),
(3, 4, 'bbelequeiroz@gmail.com'),
(4, 4, 'bbelequeiroz@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id` int(11) NOT NULL,
  `desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `categoria_evento`
--

INSERT INTO `categoria_evento` (`id`, `desc`) VALUES
(1, 'palestra'),
(2, 'missa'),
(3, 'culto'),
(4, 'comissão'),
(5, 'reunião'),
(6, 'show');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` int(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `rg` int(25) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_usuario`, `nome`, `cpf`, `data_nasc`, `rg`, `tel`, `endereco`, `email`, `senha`, `foto`) VALUES
(2, 'marcos vinicius', 2147483647, '2009-02-21', 2147483647, '29403840', 'registro', 'marcosqueiroz495@gmail.com', '123', '814d0c331f26e3c3162e6e3b92114b6br.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especializacao`
--

CREATE TABLE `especializacao` (
  `id` int(11) NOT NULL,
  `desc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `especializacao`
--

INSERT INTO `especializacao` (`id`, `desc`) VALUES
(1, 'decoracao'),
(2, 'alimentos'),
(3, 'iluminacao'),
(4, 'som'),
(5, 'limpeza'),
(6, 'locucao'),
(7, 'locação'),
(8, 'buffet');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `id_categoria` varchar(255) DEFAULT NULL,
  `data_evento` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `local_evento` varchar(255) DEFAULT NULL,
  `servico` int(11) DEFAULT NULL,
  `formas_pagamento` varchar(50) DEFAULT NULL,
  `email_dono` varchar(255) DEFAULT NULL,
  `nome_dono` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `rest_idade` int(11) DEFAULT NULL,
  `qtd_pessoas` int(11) DEFAULT NULL,
  `valor_ingresso` double DEFAULT NULL,
  `qtd_ingressos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `nome`, `id_categoria`, `data_evento`, `horario`, `local_evento`, `servico`, `formas_pagamento`, `email_dono`, `nome_dono`, `foto`, `descricao`, `rest_idade`, `qtd_pessoas`, `valor_ingresso`, `qtd_ingressos`) VALUES
(7, 'Taylor Swift Tour', '6', '2023-05-26', '18:20:00', 'Allianz Parque', 3, 'pago', 'marcosqueiroz495@gmail.com', 'marcos vinicius', 'b2e717a59f1dd1d4188eacdf3d558eebs.jpg', 'Tour Taylor Swift', 18, 50, 300, 50),
(12, 'Posty Fest 2022', '6', '2023-06-02', '17:30:00', 'beira rio', 5, 'pago', 'marcosqueiroz495@gmail.com', 'marcos vinicius', 'b57a3340633c41acbfc76cf86dc077ae.jpg', 'show', 12, 12150, 120, 12000),
(13, 'games e cia', '1', '2023-06-02', '13:00:00', 'Sesc Registro', 4, 'gratuito', 'marcosqueiroz495@gmail.com', 'marcos vinicius', '23f9da91e66c4c363d2f61296ecc117e.jpg', 'Palestra sobre games e suas utilidades', 12, 220, 0, 200),
(14, 'Icy Tour', '6', '2023-07-01', '19:00:00', 'Allianz Parque', 5, 'pago', 'marcosqueiroz495@gmail.com', 'Marcos Queiroz', 'e8bc00867c1722c9f72ebdcd5a81505b.png', 'Tour da dupla Twenty one Pilots.', 15, 700, 300, 400),
(16, 'Mercury Tour', '6', '2023-12-13', '19:00:00', 'Allianz Parque', 3, 'pago', 'marcosqueiroz495@gmail.com', 'Marcos Queiroz', '5740e812781d51fb626d462ba1e29293.jpg', 'Show da banda Imagine Dragons', 17, 500, 300, 300);

-- --------------------------------------------------------

--
-- Estrutura da tabela `feitos`
--

CREATE TABLE `feitos` (
  `id` int(11) NOT NULL,
  `email_fornecedor` varchar(255) DEFAULT NULL,
  `especializacao` int(11) DEFAULT NULL,
  `nome_evento` varchar(255) DEFAULT NULL,
  `data_evento` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `local_evento` varchar(255) DEFAULT NULL,
  `nome_dono` varchar(255) DEFAULT NULL,
  `email_dono` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `feitos`
--

INSERT INTO `feitos` (`id`, `email_fornecedor`, `especializacao`, `nome_evento`, `data_evento`, `horario`, `local_evento`, `nome_dono`, `email_dono`) VALUES
(4, 'bbelequeiroz@gmail.com', 4, 'Taylor Swift Tour', '2023-05-26', '18:20:00', 'Allianz Parque', 'marcos vinicius', 'marcosqueiroz495@gmail.com'),
(5, 'bbelequeiroz@gmail.com', 4, 'Taylor Swift Tour', '2023-05-26', '18:20:00', 'Allianz Parque', 'marcos vinicius', 'marcosqueiroz495@gmail.com'),
(7, 'fulano@gmail.com', 3, 'Posty Fest 2022', '2023-06-02', '17:30:00', 'beira rio', 'marcos vinicius', 'marcosqueiroz495@gmail.com'),
(8, 'bbelequeiroz@gmail.com', 4, 'Taylor Swift Tour', '2023-05-26', '18:20:00', 'Allianz Parque', 'marcos vinicius', 'marcosqueiroz495@gmail.com'),
(9, 'bbelequeiroz@gmail.com', 4, 'Icy Tour', '2023-07-01', '19:00:00', 'Allianz Parque', 'Marcos Queiroz', 'marcosqueiroz495@gmail.com'),
(10, 'bbelequeiroz@gmail.com', 4, 'Icy Tour', '2023-07-01', '19:00:00', 'Allianz Parque', 'Marcos Queiroz', 'marcosqueiroz495@gmail.com'),
(11, 'bbelequeiroz@gmail.com', 4, 'Mercury Tour', '2023-12-13', '19:00:00', 'Allianz Parque', 'Marcos Queiroz', 'marcosqueiroz495@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `cnpj` int(14) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `id_especializacao` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `tel`, `cnpj`, `nome`, `senha`, `id_especializacao`, `email`, `id_usuario`, `endereco`, `foto`, `nota`) VALUES
(1, '123456789', 4674686, 'Isabele Leticia', '123', 4, 'bbelequeiroz@gmail.com', 1, 'FUJI', '25bdc0721da82c8ce6c11b2edf5576ccr.png', 4),
(2, '11111111235', 4674686, 'Fulano', '141414', 3, 'fulano@gmail.com', 1, 'registro', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingresso`
--

CREATE TABLE `ingresso` (
  `id` int(11) NOT NULL,
  `id_evento` int(11) DEFAULT NULL,
  `qtd` int(11) DEFAULT NULL,
  `email_usuario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `ingresso`
--

INSERT INTO `ingresso` (`id`, `id_evento`, `qtd`, `email_usuario`) VALUES
(5, 7, NULL, 'marcosqueiroz495@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao_cliente`
--

CREATE TABLE `notificacao_cliente` (
  `id` int(11) NOT NULL,
  `msg` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) DEFAULT NULL,
  `nome_evento` varchar(255) DEFAULT NULL,
  `servico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `notificacao_cliente`
--

INSERT INTO `notificacao_cliente` (`id`, `msg`, `email`, `nome_evento`, `servico`) VALUES
(22, 'Sua solicitação foi aceita!', 'marcosqueiroz495@gmail.com', 'Mercury Tour', NULL),
(23, 'O fornecedor marcou um serviço no seu evento como feito', 'marcosqueiroz495@gmail.com', 'Icy Tour', 4),
(24, 'O fornecedor marcou um serviço no seu evento como feito', 'marcosqueiroz495@gmail.com', 'Mercury Tour', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao_fornecedor`
--

CREATE TABLE `notificacao_fornecedor` (
  `id` int(11) NOT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nome_evento` varchar(255) DEFAULT NULL,
  `servico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `notificacao_fornecedor`
--

INSERT INTO `notificacao_fornecedor` (`id`, `msg`, `email`, `nome_evento`, `servico`) VALUES
(22, 'Seu serviço foi aceito!', 'bbelequeiroz@gmail.com', 'Icy Tour', 4),
(23, 'Seu serviço foi aceito!', 'bbelequeiroz@gmail.com', 'Mercury Tour', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `participar`
--

CREATE TABLE `participar` (
  `id` int(11) NOT NULL,
  `nome_fornecedor` varchar(255) DEFAULT NULL,
  `email_fornecedor` varchar(255) DEFAULT NULL,
  `nome_evento` varchar(255) DEFAULT NULL,
  `data_evento` date DEFAULT NULL,
  `email_dono` varchar(255) DEFAULT NULL,
  `tel_fornecedor` int(11) DEFAULT NULL,
  `especializacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `participar`
--

INSERT INTO `participar` (`id`, `nome_fornecedor`, `email_fornecedor`, `nome_evento`, `data_evento`, `email_dono`, `tel_fornecedor`, `especializacao`) VALUES
(28, 'Isabele Leticia', 'bbelequeiroz@gmail.com', 'Mercury Tour', '2023-12-13', 'marcosqueiroz495@gmail.com', 123456789, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `email_fornecedor` varchar(255) DEFAULT NULL,
  `nome_evento` varchar(255) DEFAULT NULL,
  `especializacao` int(11) DEFAULT NULL,
  `data_evento` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `local_evento` varchar(255) DEFAULT NULL,
  `nome_dono` varchar(255) DEFAULT NULL,
  `email_dono` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes`
--

CREATE TABLE `solicitacoes` (
  `id` int(11) NOT NULL,
  `nome_dono` varchar(255) DEFAULT NULL,
  `email_dono` varchar(50) DEFAULT NULL,
  `nome_evento` varchar(50) DEFAULT NULL,
  `data_evento` date DEFAULT NULL,
  `id_categoria` varchar(50) DEFAULT NULL,
  `local_evento` varchar(255) DEFAULT NULL,
  `forma_pagamento` varchar(50) DEFAULT NULL,
  `qtd_ingressos` int(11) DEFAULT NULL,
  `valor_ingresso` double DEFAULT NULL,
  `qtd_pessoas` int(11) DEFAULT NULL,
  `horario_evento` time DEFAULT NULL,
  `rest_idade` int(11) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `especializacao` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo_usuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo_usuario`) VALUES
(1, 'provedor'),
(2, 'cliente'),
(3, 'adm');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `especializacao`
--
ALTER TABLE `especializacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `feitos`
--
ALTER TABLE `feitos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ingresso`
--
ALTER TABLE `ingresso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `notificacao_cliente`
--
ALTER TABLE `notificacao_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `notificacao_fornecedor`
--
ALTER TABLE `notificacao_fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `participar`
--
ALTER TABLE `participar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `especializacao`
--
ALTER TABLE `especializacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `feitos`
--
ALTER TABLE `feitos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ingresso`
--
ALTER TABLE `ingresso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `notificacao_cliente`
--
ALTER TABLE `notificacao_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `notificacao_fornecedor`
--
ALTER TABLE `notificacao_fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `participar`
--
ALTER TABLE `participar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
