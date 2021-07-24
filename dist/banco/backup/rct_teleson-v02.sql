-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jul-2021 às 02:52
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rct_teleson`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimentos`
--

CREATE TABLE `atendimentos` (
  `id` int(11) NOT NULL,
  `protocolo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atendimentos`
--

INSERT INTO `atendimentos` (`id`, `protocolo`) VALUES
(1, 'RCT');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cancelamentos`
--

CREATE TABLE `cancelamentos` (
  `id` int(11) NOT NULL,
  `cpf_cliente` varchar(255) NOT NULL,
  `plano` varchar(255) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `dt_ativacao` date NOT NULL,
  `dt_cancelamento` date NOT NULL,
  `dt_ultimapaga` date NOT NULL,
  `dt_adesaoip` date NOT NULL,
  `fidelidade` varchar(255) NOT NULL,
  `valor_fidelidade` varchar(255) NOT NULL,
  `dias_uso` varchar(255) NOT NULL,
  `valor_diasuso` varchar(255) NOT NULL,
  `total_fatura` varchar(255) NOT NULL,
  `datax` varchar(255) NOT NULL,
  `datay` varchar(255) NOT NULL,
  `diff_diaria` varchar(255) NOT NULL,
  `dia_semana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cancelamentos`
--

INSERT INTO `cancelamentos` (`id`, `cpf_cliente`, `plano`, `valor`, `dt_ativacao`, `dt_cancelamento`, `dt_ultimapaga`, `dt_adesaoip`, `fidelidade`, `valor_fidelidade`, `dias_uso`, `valor_diasuso`, `total_fatura`, `datax`, `datay`, `diff_diaria`, `dia_semana`) VALUES
(1, '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '1', '10', '9', '1'),
(2, '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '2', '10', '7', '2'),
(3, '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '5', '10', '5', '3'),
(4, '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '5', '10', '5', '4'),
(5, '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '20', '10', '-10', '5'),
(6, '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '9', '10', '1', '6'),
(7, '490.127.828-21', 'LIGHT 5', '79', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '3', '266.8', '13', '34.233333333333', '301.03333333333', '', '', '', ''),
(8, '490.127.828-21', 'LIGHT 5', '79', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '3', '266.8', '13', '34.233333333333', '301.03333333333', '', '', '', ''),
(9, '490.127.828-21', 'LIGHT 5', '79', '0000-00-00', '2021-07-23', '0000-00-00', '0000-00-00', '3', '266.8', '13', '34.233333333333', '301.03333333333', '', '', '', ''),
(10, '490.127.828-21', 'LIGHT 5', '79', '2020-10-14', '2021-07-23', '2021-07-10', '0000-00-00', '3', '266.8', '13', '34.233333333333', '301.03333333333', '', '', '', ''),
(11, '490.127.828-21', 'LIGHT 5', '79', '2020-10-14', '2021-07-23', '2021-07-10', '0000-00-00', '3', '266.8', '13', '34.233333333333', '398.32333333333', '', '', '', ''),
(12, '490.127.828-21', 'LIGHT 5', '79', '2020-10-14', '2021-07-23', '2021-07-10', '0000-00-00', '3', '266.8', '13', '34.233333333333', '398.32333333333', '', '', '', ''),
(13, '490.127.828-21', 'LIGHT 5', '79', '2021-07-08', '2021-07-08', '2021-07-15', '0000-00-00', '12', '580', '0', '0', '580', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`) VALUES
(1, 'Thiago Henrique da Silva Pinto', '490.127.828-21', '19987208587');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_empresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `id_usuario`, `id_empresa`, `usuario`, `senha`) VALUES
(1, '1', '1', 'teleson', 'abbec9b9d6fb14b06a29e76bf5554611');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cancelamentos`
--
ALTER TABLE `cancelamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cancelamentos`
--
ALTER TABLE `cancelamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
