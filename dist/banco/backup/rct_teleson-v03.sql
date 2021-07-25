-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jul-2021 às 03:00
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
(1, 'RCT.1'),
(2, 'RCT.2'),
(3, 'RCT.3'),
(4, 'RCT.4'),
(5, 'RCT.5'),
(6, 'RCT.6'),
(7, 'RCT.7'),
(8, 'RCT.8'),
(9, 'RCT.9'),
(10, 'RCT.10'),
(11, 'RCT.11'),
(12, 'RCT.12'),
(13, 'RCT.13'),
(14, 'RCT.14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cancelamentos`
--

CREATE TABLE `cancelamentos` (
  `id` int(11) NOT NULL,
  `protocolo` varchar(255) NOT NULL,
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
  `xadesao` varchar(255) NOT NULL,
  `xcancelamento` varchar(255) NOT NULL,
  `diff_diaria` varchar(255) NOT NULL,
  `dia_semana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cancelamentos`
--

INSERT INTO `cancelamentos` (`id`, `protocolo`, `cpf_cliente`, `plano`, `valor`, `dt_ativacao`, `dt_cancelamento`, `dt_ultimapaga`, `dt_adesaoip`, `fidelidade`, `valor_fidelidade`, `dias_uso`, `valor_diasuso`, `total_fatura`, `xadesao`, `xcancelamento`, `diff_diaria`, `dia_semana`) VALUES
(1, 'RCT.2', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '1', '', ''),
(2, 'RCT.3', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '1', '', ''),
(3, 'RCT.4', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '1', '', ''),
(4, 'RCT.5', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '2', '', ''),
(5, 'RCT.6', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '2', '', ''),
(6, 'RCT.7', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '2', '', ''),
(7, 'RCT.8', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '', '', ''),
(8, 'RCT.9', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '', '', ''),
(9, 'RCT.10', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '', '', ''),
(10, 'RCT.11', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '', '', ''),
(11, 'RCT.12', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '', '', ''),
(12, 'RCT.13', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '', '', ''),
(13, 'RCT.14', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '', '', ''),
(14, 'RCT.15', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '', '', ''),
(15, 'RCT.16', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '', '', ''),
(16, 'RCT.17', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '', '', ''),
(17, 'RCT.18', '490.127.828-21', 'MASTER 20', '84', '2021-03-10', '2021-07-20', '2021-07-10', '1970-01-01', '8', '440.8', '10', '28', '468.8', '', '', '', ''),
(18, 'RCT.19', 'Franciele Aparecida de Oliveira', 'SUPER 35', '109', '2021-02-05', '2021-07-20', '2021-07-20', '1970-01-01', '7', '406', '0', '0', '406', '', '', '', ''),
(19, 'RCT.1', '490.127.828-21', 'LIGHT 5', '79', '2021-04-02', '2021-07-20', '2021-07-20', '1970-01-01', '9', '475.6', '0', '0', '475.6', '', '', '', ''),
(20, 'RCT.2', '490.127.828-21', 'LIGHT 5', '79', '2021-04-02', '2021-07-20', '2021-07-20', '1970-01-01', '9', '475.6', '0', '0', '475.6', '', '', '', ''),
(21, 'RCT.3', '490.127.828-21', 'LIGHT 5', '79', '2021-04-02', '2021-07-20', '2021-07-20', '1970-01-01', '9', '475.6', '0', '0', '475.6', '', '', '', ''),
(22, 'RCT.4', '490.127.828-21', 'LIGHT 5', '79', '2021-04-02', '2021-07-20', '2021-07-20', '1970-01-01', '9', '475.6', '0', '0', '475.6', '', '', '', ''),
(23, 'RCT.5', '490.127.828-21', 'LIGHT 5', '79', '2021-04-02', '2021-07-20', '2021-07-20', '1970-01-01', '9', '475.6', '0', '0', '475.6', '', '', '', ''),
(24, 'RCT.6', '490.127.828-21', 'LIGHT 5', '79', '2021-04-02', '2021-07-20', '2021-07-20', '1970-01-01', '9', '475.6', '0', '0', '475.6', '', '', '', ''),
(25, 'RCT.7', '490.127.828-21', 'LIGHT 5', '79', '2021-04-02', '2021-07-20', '2021-07-20', '1970-01-01', '9', '475.6', '0', '0', '475.6', '', '', '', ''),
(26, 'RCT.8', '490.127.828-21', 'LIGHT 5', '79', '2021-04-02', '2021-07-20', '2021-07-20', '1970-01-01', '9', '475.6', '0', '0', '475.6', '', '', '', ''),
(27, 'RCT.9', '490.127.828-21', 'LIGHT 5', '79', '2021-07-07', '2021-07-08', '2021-07-13', '1970-01-01', '12', '580', '0', '0', '580', '', '', '', ''),
(28, 'RCT.10', '490.127.828-21', 'MASTER 20', '84', '2021-07-01', '2021-06-29', '2021-05-21', '2021-07-28', '12', '580', '38', '22.4', '738.884', '', '', '', ''),
(29, 'RCT.11', '490.127.828-21', 'MASTER 20', '84', '2021-07-01', '2021-06-29', '2021-05-21', '2021-07-28', '12', '580', '38', '22.4', '738.884', '', '', '', ''),
(30, 'RCT.12', '490.127.828-21', 'MASTER 20', '84', '2021-07-01', '2021-06-29', '2021-05-21', '2021-07-28', '12', '580', '38', '22.4', '738.884', '', '', '', ''),
(31, 'RCT.13', '490.127.828-21', 'MASTER 20', '84', '2021-07-01', '2021-06-29', '2021-05-21', '2021-07-28', '12', '580', '38', '22.4', '738.884', '', '', '', ''),
(32, 'RCT.14', '490.127.828-21', 'MASTER 20', '84', '2021-07-01', '2021-06-29', '2021-05-21', '2021-07-28', '12', '580', '38', '22.4', '738.884', '', '', '', '');

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
-- Estrutura da tabela `grafico_semanal`
--

CREATE TABLE `grafico_semanal` (
  `id` int(11) NOT NULL,
  `data_dado` date DEFAULT NULL,
  `semana_dado` varchar(255) DEFAULT NULL,
  `protocolo` varchar(255) NOT NULL,
  `xadesao` varchar(255) NOT NULL,
  `xcancelamento` varchar(255) NOT NULL,
  `dif_diaria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `grafico_semanal`
--

INSERT INTO `grafico_semanal` (`id`, `data_dado`, `semana_dado`, `protocolo`, `xadesao`, `xcancelamento`, `dif_diaria`) VALUES
(1, '2021-07-19', '1', 'RCT.9', '16', '1', ''),
(2, '2021-07-20', '2', 'RCT.3', '4', '', ''),
(3, '2021-07-21', '3', '', '6', '', ''),
(4, '2021-07-22', '4', '', '7', '', ''),
(5, '2021-07-23', '5', '', '8', '', ''),
(6, '2021-07-24', '6', '', '0', '', ''),
(7, NULL, '0', '', '', '', '');

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
-- Índices para tabela `grafico_semanal`
--
ALTER TABLE `grafico_semanal`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `cancelamentos`
--
ALTER TABLE `cancelamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `grafico_semanal`
--
ALTER TABLE `grafico_semanal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
