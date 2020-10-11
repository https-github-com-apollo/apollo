-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Out-2020 às 17:31
-- Versão do servidor: 5.7.17
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kablinsupercycleid`
--

CREATE Database kablinsupercycleid;
USE kablinsupercycleid;
-- --------------------------------------------------------

--
-- Estrutura da tabela `adicionaradm`
--

CREATE TABLE `adicionaradm` (
  `dtAdd` int(8) NOT NULL,
  `CpfAdmChefe` int(11) NOT NULL,
  `CpfAdmSub` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admklabin`
--

CREATE TABLE `admklabin` (
  `Cpf` varchar(11) NOT NULL,
  `Nome` varchar(250) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `TokenValidacaoAdm` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admklabin`
--

INSERT INTO `admklabin` (`Cpf`, `Nome`, `Senha`, `TokenValidacaoAdm`) VALUES
('99999999999', 'Exemplo', '123456', '5454542125'),
('85474598555', 'EstevÃ£o', '$2y$10$lnTuccpnv6B9cfpwPIGUQOHIn0JfF9nXMULBtbxoPt4NoDw.R8eC2', '8545485485');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadembalagem`
--

CREATE TABLE `cadembalagem` (
  `DtCadastro` int(8) NOT NULL,
  `IdEmbalagem` int(10) NOT NULL,
  `CpfAdmKlabin` int(11) NOT NULL,
  `CnpjFabr` int(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabrecicladora`
--

CREATE TABLE `fabrecicladora` (
  `Cnpj` varchar(14) NOT NULL,
  `Nome` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Cep` varchar(8) NOT NULL,
  `Tel` varchar(14) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fabrecicladora`
--

INSERT INTO `fabrecicladora` (`Cnpj`, `Nome`, `email`, `Cep`, `Tel`, `Senha`) VALUES
('99999', 'Estevão', 'exemplo@exemplo.com', '25040140', '965280268', '123456'),
('66666666666666', 'Labin', 'exemplo@gmail.com', '', '21985671255', '$2y$10$Usc7XHT6udRB539QiaaGAecA0HnsA7apsDAlChLr5FTiopGbYQjty');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permbonificacao`
--

CREATE TABLE `permbonificacao` (
  `dtBonificacao` int(8) NOT NULL,
  `CnpjFabr` int(14) NOT NULL,
  `CpfAdmKlabin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `smartembalagem`
--

CREATE TABLE `smartembalagem` (
  `ID` varchar(12) NOT NULL,
  `TipoEmbalagem` varchar(250) NOT NULL,
  `CnpjFabr` varchar(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `smartembalagem`
--

INSERT INTO `smartembalagem` (`ID`, `TipoEmbalagem`, `CnpjFabr`) VALUES
('84548485', 'Papelão ondulado', '66666666666666'),
('88421881', 'Papel cartão', '66666666666666'),
('78454184', 'Saco industrial', '66666666666666'),
('21848484', 'Papel celulose', '66666666666666'),
('87482878', 'Papel kraft', '66666666666666'),
('18424584', 'Papel kraft', '66666666666666'),
('84842488', 'Papel kraft', '66666666666666'),
('21581888', 'Saco industrial', '66666666666666'),
('94848445', 'Saco industrial', '66666666666666'),
('21845488', 'Papel cartão', '66666666666666'),
('97211582', 'Papelão ondulado', '66666666666666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adicionaradm`
--
ALTER TABLE `adicionaradm`
  ADD PRIMARY KEY (`CpfAdmSub`,`CpfAdmChefe`);

--
-- Indexes for table `admklabin`
--
ALTER TABLE `admklabin`
  ADD PRIMARY KEY (`Cpf`) USING BTREE;

--
-- Indexes for table `cadembalagem`
--
ALTER TABLE `cadembalagem`
  ADD PRIMARY KEY (`CpfAdmKlabin`,`CnpjFabr`,`IdEmbalagem`),
  ADD KEY `CnpjFabr` (`CnpjFabr`),
  ADD KEY `IdEmbalagem` (`IdEmbalagem`);

--
-- Indexes for table `fabrecicladora`
--
ALTER TABLE `fabrecicladora`
  ADD PRIMARY KEY (`Cnpj`);

--
-- Indexes for table `permbonificacao`
--
ALTER TABLE `permbonificacao`
  ADD PRIMARY KEY (`CpfAdmKlabin`,`CnpjFabr`),
  ADD KEY `CnpjFabr` (`CnpjFabr`);

--
-- Indexes for table `smartembalagem`
--
ALTER TABLE `smartembalagem`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CnpjFabr` (`CnpjFabr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
