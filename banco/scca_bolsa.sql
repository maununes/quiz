-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2017 às 05:21
-- Versão do servidor: 5.6.23-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scca_bolsa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_perguntas`
--

CREATE TABLE IF NOT EXISTS `cad_perguntas` (
  `id` int(11) NOT NULL,
  `pergunta` text,
  `resp1` text,
  `resp2` text,
  `resp3` text,
  `resp4` text,
  `respcor` text,
  `usercad` int(11) DEFAULT NULL,
  `dtcad` date DEFAULT NULL,
  `ativa` int(1) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_perguntas`
--

INSERT INTO `cad_perguntas` (`id`, `pergunta`, `resp1`, `resp2`, `resp3`, `resp4`, `respcor`, `usercad`, `dtcad`, `ativa`) VALUES
(32, '<p>resp1</p>', '<p><em><strong>resp1</strong></em></p>', '<p>resp1</p>', '<p><strong>resp1</strong></p>', '<p>resp1</p>', '1', 1, '2017-04-21', 1),
(33, '<p>resp1</p>', '<p><em><strong>resp1</strong></em></p>', '<p>resp1</p>', '<p><strong>resp1</strong></p>', '<p>resp1</p>', '<p><em><strong>resp1</strong></em></p>', 1, '2017-04-21', 1),
(34, '<p><strong>lopes</strong></p>', '<p>maumau</p>', '<p>xupad</p>', '<p>dinha</p>', '<p>marie</p>', '<p>maumau</p>', 1, '2017-04-21', 1),
(35, '<p>pergunta</p>', '<p>lopes</p>', '<p>maumau</p>', '<p>xupad</p>', '<p>leila</p>', '<p>lopes</p>', 1, '2017-04-21', 1),
(36, '<p>pergunta</p>', '<p>lopes</p>', '<p>maumau</p>', '<p>xupad</p>', '<p>leila</p>', '<p>lopes</p>', 1, '2017-04-21', 1),
(37, '<p>pergunta</p>', '<p>lopes</p>', '<p>maumau</p>', '<p>xupad</p>', '<p>leila</p>', '<p>lopes</p>', 1, '2017-04-21', 1),
(38, '<p>pergunta</p>', '<p>lopes</p>', '<p>maumau</p>', '<p>xupad</p>', '<p>leila</p>', '<p>lopes</p>', 1, '2017-04-21', 1),
(39, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(40, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(41, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(42, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(43, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(44, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(45, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(46, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(47, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(48, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(49, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(50, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(51, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1),
(52, '<p>asd</p>', '<p><strong>asda</strong></p>', '<p><strong><em>asdasd</em></strong></p>', '<p><em><strong>adsasd</strong></em></p>', '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '<p><strong><em>asdasd</em></strong></p>', 1, '2017-04-21', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_respostas`
--

CREATE TABLE IF NOT EXISTS `cad_respostas` (
  `id` int(11) NOT NULL,
  `id_pergunta` int(11) DEFAULT NULL,
  `resp` text,
  `jogador` varchar(30) DEFAULT NULL,
  `dtcad` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_respostas`
--

INSERT INTO `cad_respostas` (`id`, `id_pergunta`, `resp`, `jogador`, `dtcad`) VALUES
(9, 45, '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '1492783320643', '2017-04-21 11:02:40'),
(8, 36, '', '1492783320643', '2017-04-21 11:02:40'),
(7, 33, '', '1492783320643', '2017-04-21 11:02:40'),
(6, 37, '', '1492783320643', '2017-04-21 11:02:40'),
(10, 50, '<p><em><strong>adsasd</strong></em></p>', '1492975162492', '2017-04-23 16:19:40'),
(11, 40, '', '1492994734249', '2017-04-23 21:46:14'),
(12, 34, '', '1492994734249', '2017-04-23 21:46:14'),
(13, 47, '', '1492994734249', '2017-04-23 21:46:14'),
(14, 35, '', '1492994734249', '2017-04-23 21:46:14'),
(15, 32, '', '1492994734249', '2017-04-23 21:46:14'),
(16, 48, '', '1492994734249', '2017-04-23 21:46:14'),
(17, 38, '', '1492994734249', '2017-04-23 21:46:14'),
(18, 43, '', '1492994734249', '2017-04-23 21:46:14'),
(19, 52, '', '1492994734249', '2017-04-23 21:46:14'),
(20, 44, '', '1492994734249', '2017-04-23 21:46:14'),
(21, 36, '', '1492994734249', '2017-04-23 21:46:14'),
(22, 49, '', '1492994734249', '2017-04-23 21:46:14'),
(23, 42, '', '1492994734249', '2017-04-23 21:46:14'),
(24, 33, '', '1492994734249', '2017-04-23 21:46:14'),
(25, 41, '', '1492994734249', '2017-04-23 21:46:14'),
(26, 39, '', '1492994734249', '2017-04-23 21:46:14'),
(27, 50, '', '1492994734249', '2017-04-23 21:46:14'),
(28, 46, '', '1492994734249', '2017-04-23 21:46:14'),
(29, 37, '', '1492994734249', '2017-04-23 21:46:14'),
(30, 51, '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '1492994734249', '2017-04-23 21:46:14'),
(31, 35, '<p>maumau</p>', '1492994876844', '2017-04-23 21:48:00'),
(32, 46, '<p><em><strong>adsasd</strong></em></p>', '1492995056101', '2017-04-23 21:51:00'),
(33, 32, '<p><strong>resp1</strong></p>', '1492995460768', '2017-04-23 21:57:51'),
(34, 46, '<p><strong>asda</strong></p>', '1492995460768', '2017-04-23 21:57:51'),
(35, 41, '<p><em><strong>adsasd</strong></em></p>', '1492995672066', '2017-04-23 22:01:18'),
(36, 32, '', '1492995672066', '2017-04-23 22:01:18'),
(37, 34, '<p>maumau</p>', '1492995672066', '2017-04-23 22:01:18'),
(38, 52, '<p><strong>asda</strong></p>', '1492995750031', '2017-04-23 22:02:34'),
(39, 47, '<p><strong>asda</strong></p>', '1492997448732', '2017-04-23 22:30:55'),
(40, 40, '<p><em><strong>adsasd</strong></em></p>', '1492997512432', '2017-04-23 22:32:23'),
(41, 32, '<p>resp1</p>', '1492997512432', '2017-04-23 22:32:23'),
(42, 43, '<p><strong><em>asdasd</em></strong></p>', '1492997512432', '2017-04-23 22:32:23'),
(43, 38, '<p>leila</p>', '1492997512432', '2017-04-23 22:32:23'),
(44, 36, '<p>xupad</p>', '1492997512432', '2017-04-23 22:32:23'),
(45, 45, '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '1492997512432', '2017-04-23 22:32:23'),
(46, 39, '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '1492997512432', '2017-04-23 22:32:23'),
(47, 41, '<p><strong>asda</strong></p>', '1492997512432', '2017-04-23 22:32:23'),
(48, 52, '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '1492997512432', '2017-04-23 22:32:23'),
(49, 51, '<p><em><strong>adsasd</strong></em></p>', '1492997512432', '2017-04-23 22:32:23'),
(50, 44, '<p><strong>asda</strong></p>', '1492997512432', '2017-04-23 22:32:23'),
(51, 33, '<p>resp1</p>', '1492997512432', '2017-04-23 22:32:23'),
(52, 47, '<p><strong><em>asdasd</em></strong></p>', '1492997512432', '2017-04-23 22:32:23'),
(53, 35, '<p>xupad</p>', '1492997512432', '2017-04-23 22:32:23'),
(54, 34, '<p>xupad</p>', '1492997512432', '2017-04-23 22:32:23'),
(55, 33, '<p>resp1</p>', '1492997629908', '2017-04-23 22:33:54'),
(56, 46, '<p><strong><em>asdasd</em></strong></p>', '1492997834888', '2017-04-23 22:37:29'),
(57, 42, '<p><em><strong>adsasd</strong></em></p>', '1492997834888', '2017-04-23 22:37:29'),
(58, 51, '<p><em><strong>adsasd</strong></em></p>', '1492997834888', '2017-04-23 22:37:29'),
(59, 36, '<p>lopes</p>', '1492997834888', '2017-04-23 22:37:29'),
(60, 45, '<p><strong>asda</strong></p>', '1492997834888', '2017-04-23 22:37:29'),
(61, 32, '<p>resp1</p>', '1492997834888', '2017-04-23 22:37:29'),
(62, 44, '<p><strong>asda</strong></p>', '1492998196021', '2017-04-23 22:43:19'),
(63, 37, '<p>leila</p>', '1492998216133', '2017-04-23 22:43:53'),
(64, 34, '<p>dinha</p>', '1492998216133', '2017-04-23 22:43:53'),
(65, 50, '<p><strong>asda</strong></p>', '1492998216133', '2017-04-23 22:43:53'),
(66, 40, '<p><em><strong>adsasd</strong></em></p>', '1492998216133', '2017-04-23 22:43:53'),
(67, 32, '<p><strong>resp1</strong></p>', '1492998216133', '2017-04-23 22:43:53'),
(68, 39, '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '1492998216133', '2017-04-23 22:43:53'),
(69, 41, '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '1492998335323', '2017-04-23 22:45:44'),
(70, 39, '<p><strong><em>asdasd</em></strong></p>', '1492998335323', '2017-04-23 22:45:44'),
(71, 52, '<p><em><strong>adsasd</strong></em></p>', '1492998335323', '2017-04-23 22:45:44'),
(72, 36, '<p>lopes</p>', '1492998580706', '2017-04-23 22:49:45'),
(73, 49, '<p><strong>asdasdasdasdsadasdasdas</strong></p>', '1492998738214', '2017-04-23 22:52:22'),
(74, 33, '<p><strong>resp1</strong></p>', '1492998912543', '2017-04-23 22:55:16'),
(75, 49, '<p><em><strong>adsasd</strong></em></p>', '1492999022546', '2017-04-23 22:57:06'),
(76, 37, '<p>leila</p>', '1492999624109', '2017-04-23 23:07:21'),
(77, 46, '', '1493000132448', '2017-04-23 23:15:40'),
(78, 41, '<p><strong><em>asdasd</em></strong></p>', '1493000132448', '2017-04-23 23:15:40'),
(79, 49, '<p><em><strong>adsasd</strong></em></p>', '1493001101126', '2017-04-23 23:31:54'),
(80, 45, '<p><strong><em>asdasd</em></strong></p>', '1493001101126', '2017-04-23 23:31:54'),
(81, 37, '<p>lopes</p>', '1493001101126', '2017-04-23 23:31:54'),
(82, 38, '<p>maumau</p>', '1493001101126', '2017-04-23 23:31:54'),
(83, 46, '<p><strong>asda</strong></p>', '1493001101126', '2017-04-23 23:31:54'),
(84, 38, '<p>lopes</p>', '1493001213360', '2017-04-23 23:33:51'),
(85, 46, '<p><strong><em>asdasd</em></strong></p>', '1493001213360', '2017-04-23 23:33:51'),
(86, 35, '<p>maumau</p>', '1493001213360', '2017-04-23 23:33:51'),
(87, 43, '<p><strong>asda</strong></p>', '1493003349187', '2017-04-24 00:09:17'),
(88, 50, '<p><strong><em>asdasd</em></strong></p>', '1493003349187', '2017-04-24 00:09:17'),
(89, 32, '<p>resp1</p>', '1493004039292', '2017-04-24 00:20:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL,
  `razao` varchar(60) NOT NULL,
  `fantasia` varchar(80) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `email` varchar(50) NOT NULL,
  `smtp` varchar(30) NOT NULL,
  `pop3` varchar(30) NOT NULL,
  `logradouro` varchar(80) NOT NULL,
  `numero` varchar(8) NOT NULL,
  `complemento` varchar(20) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(21) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `fone1` varchar(15) NOT NULL,
  `fone2` varchar(15) NOT NULL,
  `opfone1` varchar(21) NOT NULL,
  `opfone2` varchar(21) NOT NULL,
  `responsavel1` varchar(40) NOT NULL,
  `responsavel2` varchar(40) NOT NULL,
  `logomarca` blob NOT NULL,
  `qtdusers` int(2) NOT NULL,
  `qtdusersadm` int(2) NOT NULL,
  `qtdusersrep` int(2) NOT NULL,
  `token` varchar(8) NOT NULL,
  `ativo` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `razao`, `fantasia`, `cnpj`, `email`, `smtp`, `pop3`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `fone1`, `fone2`, `opfone1`, `opfone2`, `responsavel1`, `responsavel2`, `logomarca`, `qtdusers`, `qtdusersadm`, `qtdusersrep`, `token`, `ativo`) VALUES
(1, 'Lopes Colaborações', 'Lopes Rep.', '99.999.999/9999-99', 'LOPES@lopes.com.br', '', '', '', '', '', '', 'NATAL', 'RN', '', '', '', '', '', 'Lopes', '', '', 10, 6, 4, 'ijk2347', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE IF NOT EXISTS `jogador` (
  `id` int(11) NOT NULL,
  `jogador` varchar(30) NOT NULL,
  `nomejogador` varchar(255) NOT NULL,
  `dtcad` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogador`
--

INSERT INTO `jogador` (`id`, `jogador`, `nomejogador`, `dtcad`) VALUES
(1, '1493004039292', 'maumau', '2017-04-24 00:20:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `login` varchar(12) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `codigo`, `nome`, `cpf`, `login`, `senha`, `email`) VALUES
(1, '001', 'Rafael Lopes', '10301230', 'lopes', 'lopes', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_perguntas`
--
ALTER TABLE `cad_perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_respostas`
--
ALTER TABLE `cad_respostas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_perguntas`
--
ALTER TABLE `cad_perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `cad_respostas`
--
ALTER TABLE `cad_respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `jogador`
--
ALTER TABLE `jogador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
