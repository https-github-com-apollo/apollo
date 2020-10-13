-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Out-2020 às 20:44
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
  `dtAdd` int(8) NOT NULL,
  `CpfAdmChefe` int(11) NOT NULL,
  `CpfAdmSub` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admklabin`
--

CREATE TABLE `admklabin` (
  `Cpf` varchar(11) CHARACTER SET latin1 NOT NULL,
  `Nome` varchar(250) CHARACTER SET latin1 NOT NULL,
  `Senha` varchar(255) CHARACTER SET latin1 NOT NULL,
  `TokenValidacaoAdm` varchar(15) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `admklabin`
--

INSERT INTO `admklabin` (`Cpf`, `Nome`, `Senha`, `TokenValidacaoAdm`) VALUES
('85474598555', 'Estevão', '$2y$10$lnTuccpnv6B9cfpwPIGUQOHIn0JfF9nXMULBtbxoPt4NoDw.R8eC2', '8545485485');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadembalagem`
--

CREATE TABLE `cadembalagem` (
  `DtCadastro` int(8) NOT NULL,
  `IdEmbalagem` int(10) NOT NULL,
  `CpfAdmKlabin` int(11) NOT NULL,
  `CnpjFabr` int(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabrecicladora`
--

CREATE TABLE `fabrecicladora` (
  `Cnpj` varchar(14) CHARACTER SET latin1 NOT NULL,
  `Nome` varchar(250) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Cep` varchar(8) CHARACTER SET latin1 NOT NULL,
  `Tel` varchar(14) CHARACTER SET latin1 NOT NULL,
  `Senha` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `fabrecicladora`
--

INSERT INTO `fabrecicladora` (`Cnpj`, `Nome`, `email`, `Cep`, `Tel`, `Senha`) VALUES
('11111111111111', 'Reciclaban', 'reciclaban@gmail.com', '', '21974518144', '$2y$10$4WQJEYew8vaA45Gyq0Bo9OY4IlbyIpztpzx5Vy5QglCIz2PEe3R.6'),
('66666666666666', 'Labin', 'exemplo@gmail.com', '', '21985671255', '$2y$10$Usc7XHT6udRB539QiaaGAecA0HnsA7apsDAlChLr5FTiopGbYQjty'),
('77777777777777', 'Cyclin', 'cyclin@gmail.com', '', '021975882035', '$2y$10$uikBlp72.AG5n1u65bZMZeP9Ml3zXNr7aOH.5k9L0vNJO6Rkjd/J6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permbonificacao`
--

CREATE TABLE `permbonificacao` (
  `dtBonificacao` int(8) NOT NULL,
  `CnpjFabr` int(14) NOT NULL,
  `CpfAdmKlabin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `smartembalagem`
--

CREATE TABLE `smartembalagem` (
  `ID` varchar(12) CHARACTER SET latin1 NOT NULL,
  `TipoEmbalagem` varchar(250) CHARACTER SET latin1 NOT NULL,
  `CnpjFabr` varchar(14) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `smartembalagem`
--

INSERT INTO `smartembalagem` (`ID`, `TipoEmbalagem`, `CnpjFabr`) VALUES
('84548485', 'Papelao ondulado', '66666666666666'),
('88421881', 'Papel cartao', '66666666666666'),
('78454184', 'Saco industrial', '66666666666666'),
('21848484', 'Papel celulose', '66666666666666'),
('87482878', 'Papel kraft', '66666666666666'),
('18424584', 'Papel kraft', '66666666666666'),
('84842488', 'Papel kraft', '66666666666666'),
('21581888', 'Saco industrial', '66666666666666'),
('94848445', 'Saco industrial', '66666666666666'),
('21845488', 'Papel cartao', '66666666666666'),
('97211582', 'Papelao ondulado', '66666666666666'),
('824218154', 'Papelao ondulado', '66666666666666'),
('854848488', 'Papel cartao', '11111111111111'),
('151511155', 'Papel cartao', '11111111111111'),
('848126188', 'Papel cartao', '11111111111111'),
('984854848', 'Papel cartao', '11111111111111'),
('518888181', 'Papel cartao', '11111111111111'),
('514818818', 'Papel kraft', '11111111111111'),
('5415151881', 'Papel cartao', '77777777777777'),
('8484151818', 'Papelao ondulado', '77777777777777'),
('2626262284', 'Papel celulose', '77777777777777'),
('2228881811', 'Papel kraft', '77777777777777'),
('1218484844', 'Saco industrial', '77777777777777'),
('0051810087', 'Saco industrial', '77777777777777'),
('0482181055', 'Saco industrial', '77777777777777'),
('0004848451', 'Papel celulose', '77777777777777'),
('0971241454', 'Papel cartao', '77777777777777'),
('0545151500', 'Papelao ondulado', '77777777777777'),
('4848481511', 'Papel kraft', '77777777777777'),
('5451215151', 'Papel cartao', '77777777777777'),
('4484812121', 'Papelão ondulado', '77777777777777'),
('5111515151', 'Papel cartao', '77777777777777'),
('5451121212', 'Papel cartao', '77777777777777'),
('0151515121', 'Papelao ondulado', '77777777777777'),
('4842151888', 'Papel celulose', '77777777777777'),
('0084848888', 'Saco industrial', '77777777777777'),
('9452145815', 'Papelao ondulado', '77777777777777'),
('1515181888', 'Papelao ondulado', '77777777777777'),
('0515151515', 'Papel celulose', '77777777777777'),
('0511515155', 'Papel cartao', '77777777777777'),
('9871480044', 'Papel kraft', '77777777777777'),
('3971481474', 'Papel kraft', '77777777777777');

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
