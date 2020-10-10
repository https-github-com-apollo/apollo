-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Out-2020 às 19:07
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `adicionaradm`
--

CREATE TABLE `adicionaradm` (
  `dtAdd` int(8) DEFAULT NOT NULL,
  `CpfAdmChefe` int(11) NOT NULL,
  `CpfAdmSub` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admklabin`
--

CREATE TABLE `admklabin` (
  `Cpf` int(11) NOT NULL,
  `Nome` varchar(250) NOT NULL,
  `Senha` varchar(20) NOT NULL,
  `TokenValidacaoAdm` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `Cnpj` int(14) NOT NULL,
  `Nome` varchar(250) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `localização` varchar(250) NOT NULL,
  `Cep` int(8) NOT NULL,
  `Rua` varchar(250) NOT NULL,
  `NumeroEnd` int(8) NOT NULL,
  `Cidade` varchar(250) NOT NULL,
  `Estado` varchar(250) NOT NULL,
  `Complemento` varchar(250) DEFAULT NULL,
  `TelCelular` varchar(12) NOT NULL,
  `NumContaFinanceira` int(10) NOT NULL,
  `NumOpFinanceira` int(10) DEFAULT NULL,
  `NumAgFinanceira` int(6) NOT NULL,
  `CpfadmKlabin` int(11) NOT NULL,
  `Password` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `ID` int(10) NOT NULL,
  `TipoEmbalagem` varchar(250) NOT NULL,
  `CnpjFabr` int(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`Cpf`);

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
  ADD PRIMARY KEY (`Cnpj`),
  ADD KEY `CpfadmKlabin` (`CpfadmKlabin`);

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
