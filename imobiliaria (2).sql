-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Mar-2023 às 16:45
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
-- Banco de dados: `imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `arquivo` varchar(100) NOT NULL,
  `data_cad` date NOT NULL,
  `registro` varchar(25) NOT NULL,
  `id_reg` int(11) NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES
(1, 'Documento de Identidade', '', '08-02-2022-14-31-51-00.jpeg', '2022-02-08', 'Vendedores', 2, 3),
(2, 'Escritura do Imóvel', '', '08-02-2022-14-33-16-02-FUNDO-ESCURO.rar', '2022-02-08', 'Vendedores', 2, 3),
(6, 'Guia de IPTU 2022', '', '08-02-2022-14-51-50-iptu-2022.pdf', '2022-02-08', 'Vendedores', 2, 3),
(7, 'Contrato de Compra e Venda', '', '08-02-2022-14-52-38-Contrato-de-Compra-e-Venda-Teste.docx', '2022-02-08', 'Vendedores', 2, 3),
(8, 'Contrato de Compra e Venda', '', '08-02-2022-14-52-53-Contrato-de-Compra-e-Venda-Teste.docx', '2022-02-08', 'Vendedores', 1, 3),
(9, 'Contrato', '', '08-02-2022-15-09-41-Contrato-de-Compra-e-Venda-Teste.docx', '2022-02-08', 'Compradores', 1, 3),
(10, 'Comprovante de Endereço', '', '08-02-2022-15-09-54-02-FUNDO-ESCURO.rar', '2022-02-08', 'Compradores', 1, 3),
(14, 'Contrato de Compra e Venda', '', '08-02-2022-15-19-17-Contrato-de-Compra-e-Venda-Teste.docx', '2022-02-08', 'Locatarios', 1, 3),
(15, 'carteira', '', '12-12-2022-14-51-54-aluguel.jpeg', '2022-12-12', 'Locadores', 1, 3),
(16, 'carteirinha', '', '12-12-2022-17-25-09-passagem-1.jpeg', '2022-12-12', 'Vendedores', 5, 3),
(17, 'teste', '', '12-12-2022-22-10-11-aluguel.jpeg', '2022-12-12', 'Associados', 2, 3),
(18, 'teste', '', '14-12-2022-10-19-38-tabela2.png', '2022-12-14', 'Vendedores', 6, 3),
(19, 'pgn', '', '02-01-2023-16-36-40-tabela.png', '2023-01-02', 'Locadores', 5, 3),
(20, 'teste', '', '04-01-2023-12-48-36-passagem2.jpeg', '2023-01-04', 'Coleta', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `associados`
--

CREATE TABLE `associados` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `pessoa` varchar(20) NOT NULL,
  `doc` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `pg` varchar(12) NOT NULL,
  `status` varchar(12) NOT NULL,
  `data_cadastro` date NOT NULL,
  `corretor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `associados`
--

INSERT INTO `associados` (`id`, `nome`, `apelido`, `pessoa`, `doc`, `telefone`, `valor`, `pg`, `status`, `data_cadastro`, `corretor`) VALUES
(1, 'Marcelo Santos', 'mauro', 'FÃ­sica', '222.222.222-2', '(48) 45545-554', '52', 'ProduÃ§Ã£o', 'Inativo', '2022-12-12', 3),
(2, 'marisa', 'lima', 'FÃ­sica', '111.111.111-11', '(33) 33333-3333', '52', 'Mensal', 'Inativo', '2022-12-12', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairros`
--

CREATE TABLE `bairros` (
  `id` int(11) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `produtor` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL,
  `quantidade` varchar(50) NOT NULL,
  `medida` varchar(10) NOT NULL,
  `totall` varchar(30) NOT NULL,
  `totalll` varchar(30) NOT NULL,
  `data_entrada` date DEFAULT NULL,
  `fonte` varchar(50) NOT NULL,
  `consumo` varchar(50) NOT NULL,
  `data_aquisicao` date DEFAULT NULL,
  `maq` varchar(50) NOT NULL,
  `custo` varchar(50) NOT NULL,
  `residual` varchar(50) NOT NULL,
  `anos` varchar(50) NOT NULL,
  `depreciacao` varchar(50) NOT NULL,
  `dia` varchar(50) NOT NULL,
  `util` varchar(50) NOT NULL,
  `vd` varchar(50) NOT NULL,
  `obra` varchar(50) NOT NULL,
  `hora` varchar(50) NOT NULL,
  `trabalho` varchar(50) NOT NULL,
  `pago` varchar(50) NOT NULL,
  `entradois` varchar(50) NOT NULL,
  `undois` varchar(50) NOT NULL,
  `maqdois` varchar(50) NOT NULL,
  `maqfontedois` varchar(50) NOT NULL,
  `maqconsumodois` varchar(50) NOT NULL,
  `ferdois` varchar(50) NOT NULL,
  `ferfontedois` varchar(50) NOT NULL,
  `ferconsumodois` varchar(50) NOT NULL,
  `data_aquidois` date DEFAULT NULL,
  `custodois` varchar(50) NOT NULL,
  `residualdois` varchar(50) NOT NULL,
  `anosdois` varchar(50) NOT NULL,
  `depreciacaodois` varchar(50) NOT NULL,
  `diadois` varchar(50) NOT NULL,
  `utildois` varchar(50) NOT NULL,
  `vddois` varchar(50) NOT NULL,
  `obradois` varchar(50) NOT NULL,
  `horadois` varchar(50) NOT NULL,
  `trabalhadois` varchar(50) NOT NULL,
  `pagodois` varchar(50) NOT NULL,
  `resuldois` varchar(50) NOT NULL,
  `medidadois` varchar(50) NOT NULL,
  `perdadois` varchar(50) NOT NULL,
  `percedois` varchar(50) NOT NULL,
  `entratres` varchar(50) NOT NULL,
  `untres` varchar(50) NOT NULL,
  `maqtres` varchar(50) NOT NULL,
  `maqfontetres` varchar(50) NOT NULL,
  `maqconsumotres` varchar(50) NOT NULL,
  `fertres` varchar(50) NOT NULL,
  `ferfontetres` varchar(50) NOT NULL,
  `ferconsumotres` varchar(50) NOT NULL,
  `data_aquitres` date DEFAULT NULL,
  `custotres` varchar(50) NOT NULL,
  `residualtres` varchar(50) NOT NULL,
  `anostres` varchar(50) NOT NULL,
  `depreciacaotres` varchar(50) NOT NULL,
  `diatres` varchar(50) NOT NULL,
  `utiltres` varchar(50) NOT NULL,
  `vdtres` varchar(50) NOT NULL,
  `obratres` varchar(50) NOT NULL,
  `horatres` varchar(50) NOT NULL,
  `trabalhotres` varchar(50) NOT NULL,
  `pagotres` varchar(50) NOT NULL,
  `resultres` varchar(50) NOT NULL,
  `medidatres` varchar(50) NOT NULL,
  `perdatres` varchar(50) NOT NULL,
  `percetres` varchar(50) NOT NULL,
  `data_arm` date DEFAULT NULL,
  `armazum` varchar(50) NOT NULL,
  `medum` varchar(50) NOT NULL,
  `formaum` varchar(50) NOT NULL,
  `entraquatro` varchar(50) NOT NULL,
  `unquatro` varchar(50) NOT NULL,
  `maqquatro` varchar(50) NOT NULL,
  `maqfontequatro` varchar(50) NOT NULL,
  `maqconsumoquatro` varchar(50) NOT NULL,
  `ferquatro` varchar(50) NOT NULL,
  `ferfontequatro` varchar(50) NOT NULL,
  `ferconsumoquatro` varchar(50) NOT NULL,
  `data_aquiquatro` date DEFAULT NULL,
  `custoquatro` varchar(50) NOT NULL,
  `residualquatro` varchar(50) NOT NULL,
  `anosquatro` varchar(50) NOT NULL,
  `depreciacaoquatro` varchar(50) NOT NULL,
  `diaquatro` varchar(50) NOT NULL,
  `utilquatro` varchar(50) NOT NULL,
  `vdquatro` varchar(50) NOT NULL,
  `obraquatro` varchar(50) NOT NULL,
  `horaquatro` varchar(50) NOT NULL,
  `trabalhoquatro` varchar(50) NOT NULL,
  `pagoquatro` varchar(50) NOT NULL,
  `resulquatro` varchar(50) NOT NULL,
  `medidaquatro` varchar(50) NOT NULL,
  `perdaquatro` varchar(50) NOT NULL,
  `percequatro` varchar(50) NOT NULL,
  `entracinco` varchar(50) NOT NULL,
  `uncinco` varchar(50) NOT NULL,
  `maqcinco` varchar(50) NOT NULL,
  `maqfontecinco` varchar(50) NOT NULL,
  `maqconsumocinco` varchar(50) NOT NULL,
  `fercinco` varchar(500) NOT NULL,
  `ferfontecinco` varchar(50) NOT NULL,
  `ferconsumocinco` varchar(50) NOT NULL,
  `data_aquicinco` date DEFAULT NULL,
  `custocinco` varchar(50) NOT NULL,
  `residualcinco` varchar(50) NOT NULL,
  `anoscinco` varchar(50) NOT NULL,
  `depreciacaocinco` varchar(50) NOT NULL,
  `diacinco` varchar(50) NOT NULL,
  `utilcinco` varchar(50) NOT NULL,
  `vdcinco` varchar(50) NOT NULL,
  `obracinco` varchar(50) NOT NULL,
  `horacinco` varchar(50) NOT NULL,
  `trabalhocinco` varchar(50) NOT NULL,
  `pagocinco` varchar(50) NOT NULL,
  `resulcinco` varchar(50) NOT NULL,
  `medidacinco` varchar(50) NOT NULL,
  `perdacinco` varchar(50) NOT NULL,
  `percecinco` varchar(50) NOT NULL,
  `produtoum` varchar(50) NOT NULL,
  `insumoum` varchar(50) NOT NULL,
  `medidauma` varchar(50) NOT NULL,
  `data_emum` date DEFAULT NULL,
  `produtodois` varchar(50) NOT NULL,
  `insumodois` varchar(50) NOT NULL,
  `medidasegun` varchar(50) NOT NULL,
  `data_emdois` date DEFAULT NULL,
  `entraseis` varchar(50) NOT NULL,
  `unseis` varchar(50) NOT NULL,
  `maqseis` varchar(50) NOT NULL,
  `maqfonteseis` varchar(50) NOT NULL,
  `maqconsumoseis` varchar(50) NOT NULL,
  `ferseis` varchar(50) NOT NULL,
  `ferfonteseis` varchar(50) NOT NULL,
  `ferconsumoseis` varchar(50) NOT NULL,
  `data_aquiseis` date DEFAULT NULL,
  `custoseis` varchar(50) NOT NULL,
  `residualseis` varchar(50) NOT NULL,
  `anosseis` varchar(50) NOT NULL,
  `depreciacaoseis` varchar(50) NOT NULL,
  `diaseis` varchar(50) NOT NULL,
  `utilseis` varchar(50) NOT NULL,
  `vdseis` varchar(50) NOT NULL,
  `obraseis` varchar(50) NOT NULL,
  `horaseis` varchar(50) NOT NULL,
  `trabalhoseis` varchar(50) NOT NULL,
  `pagoseis` varchar(50) NOT NULL,
  `resulseis` varchar(50) NOT NULL,
  `medidaseis` varchar(50) NOT NULL,
  `perdaseis` varchar(50) NOT NULL,
  `perceseis` varchar(50) NOT NULL,
  `insumtres` varchar(50) NOT NULL,
  `produtotres` varchar(50) NOT NULL,
  `armaztres` varchar(50) NOT NULL,
  `medidaterc` varchar(50) NOT NULL,
  `data_emtres` date DEFAULT NULL,
  `armazquatro` varchar(50) NOT NULL,
  `medidaquart` varchar(50) NOT NULL,
  `formaquatro` varchar(50) NOT NULL,
  `entrasete` varchar(50) NOT NULL,
  `unsete` varchar(50) NOT NULL,
  `maqsete` varchar(50) NOT NULL,
  `maqfontesete` varchar(50) NOT NULL,
  `maqconsumosete` varchar(50) NOT NULL,
  `fersete` varchar(50) NOT NULL,
  `ferfontesete` varchar(50) NOT NULL,
  `ferconsumosete` varchar(50) NOT NULL,
  `data_aquisete` date DEFAULT NULL,
  `custosete` varchar(50) NOT NULL,
  `residualsete` varchar(100) NOT NULL,
  `anossete` varchar(50) NOT NULL,
  `depreciacaosete` varchar(50) NOT NULL,
  `diasete` varchar(50) NOT NULL,
  `utilsete` varchar(50) NOT NULL,
  `vdsete` varchar(50) NOT NULL,
  `obrasete` varchar(50) NOT NULL,
  `horasete` varchar(50) NOT NULL,
  `trabalhosete` varchar(50) NOT NULL,
  `pagosete` varchar(50) NOT NULL,
  `resulsete` varchar(50) NOT NULL,
  `medidasete` varchar(50) NOT NULL,
  `perdasete` varchar(50) NOT NULL,
  `percesete` varchar(30) NOT NULL,
  `np` varchar(50) NOT NULL,
  `qua` varchar(50) NOT NULL,
  `umed` varchar(50) NOT NULL,
  `totalmateria` varchar(50) NOT NULL,
  `totaldepre` varchar(50) NOT NULL,
  `totalrend` varchar(50) NOT NULL,
  `totalhora` varchar(50) NOT NULL,
  `totalobra` varchar(50) NOT NULL,
  `totalproducao` varchar(50) NOT NULL,
  `totalcusto` varchar(50) NOT NULL,
  `totalcustodois` varchar(20) NOT NULL,
  `data_final` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPRESSED;

--
-- Extraindo dados da tabela `bairros`
--

INSERT INTO `bairros` (`id`, `materia`, `produtor`, `local`, `quantidade`, `medida`, `totall`, `totalll`, `data_entrada`, `fonte`, `consumo`, `data_aquisicao`, `maq`, `custo`, `residual`, `anos`, `depreciacao`, `dia`, `util`, `vd`, `obra`, `hora`, `trabalho`, `pago`, `entradois`, `undois`, `maqdois`, `maqfontedois`, `maqconsumodois`, `ferdois`, `ferfontedois`, `ferconsumodois`, `data_aquidois`, `custodois`, `residualdois`, `anosdois`, `depreciacaodois`, `diadois`, `utildois`, `vddois`, `obradois`, `horadois`, `trabalhadois`, `pagodois`, `resuldois`, `medidadois`, `perdadois`, `percedois`, `entratres`, `untres`, `maqtres`, `maqfontetres`, `maqconsumotres`, `fertres`, `ferfontetres`, `ferconsumotres`, `data_aquitres`, `custotres`, `residualtres`, `anostres`, `depreciacaotres`, `diatres`, `utiltres`, `vdtres`, `obratres`, `horatres`, `trabalhotres`, `pagotres`, `resultres`, `medidatres`, `perdatres`, `percetres`, `data_arm`, `armazum`, `medum`, `formaum`, `entraquatro`, `unquatro`, `maqquatro`, `maqfontequatro`, `maqconsumoquatro`, `ferquatro`, `ferfontequatro`, `ferconsumoquatro`, `data_aquiquatro`, `custoquatro`, `residualquatro`, `anosquatro`, `depreciacaoquatro`, `diaquatro`, `utilquatro`, `vdquatro`, `obraquatro`, `horaquatro`, `trabalhoquatro`, `pagoquatro`, `resulquatro`, `medidaquatro`, `perdaquatro`, `percequatro`, `entracinco`, `uncinco`, `maqcinco`, `maqfontecinco`, `maqconsumocinco`, `fercinco`, `ferfontecinco`, `ferconsumocinco`, `data_aquicinco`, `custocinco`, `residualcinco`, `anoscinco`, `depreciacaocinco`, `diacinco`, `utilcinco`, `vdcinco`, `obracinco`, `horacinco`, `trabalhocinco`, `pagocinco`, `resulcinco`, `medidacinco`, `perdacinco`, `percecinco`, `produtoum`, `insumoum`, `medidauma`, `data_emum`, `produtodois`, `insumodois`, `medidasegun`, `data_emdois`, `entraseis`, `unseis`, `maqseis`, `maqfonteseis`, `maqconsumoseis`, `ferseis`, `ferfonteseis`, `ferconsumoseis`, `data_aquiseis`, `custoseis`, `residualseis`, `anosseis`, `depreciacaoseis`, `diaseis`, `utilseis`, `vdseis`, `obraseis`, `horaseis`, `trabalhoseis`, `pagoseis`, `resulseis`, `medidaseis`, `perdaseis`, `perceseis`, `insumtres`, `produtotres`, `armaztres`, `medidaterc`, `data_emtres`, `armazquatro`, `medidaquart`, `formaquatro`, `entrasete`, `unsete`, `maqsete`, `maqfontesete`, `maqconsumosete`, `fersete`, `ferfontesete`, `ferconsumosete`, `data_aquisete`, `custosete`, `residualsete`, `anossete`, `depreciacaosete`, `diasete`, `utilsete`, `vdsete`, `obrasete`, `horasete`, `trabalhosete`, `pagosete`, `resulsete`, `medidasete`, `perdasete`, `percesete`, `np`, `qua`, `umed`, `totalmateria`, `totaldepre`, `totalrend`, `totalhora`, `totalobra`, `totalproducao`, `totalcusto`, `totalcustodois`, `data_final`) VALUES
(4, 'breu', 'marcus', 'USINA APUI', '500', 'Quilo', '', '500', '2023-03-20', 'Motor EstacionÃ¡rio', 'Diesel', '2023-03-27', '', '5000', '2000', '50', '60', '0.16', '5', '0.8', '100', '12.50', '4', '50.00', '', 'Quilo', '', 'Motor EstacionÃ¡rio', 'Diesel', '', 'Motor EstacionÃ¡rio', 'Diesel', '2023-03-24', '', '', '', '', '', '', '', '', '', '', '', '', 'Quilo', '', '', '', 'Quilo', '', 'Motor EstacionÃ¡rio', 'Diesel', '', 'Motor EstacionÃ¡rio', 'Diesel', '2023-03-24', '', '', '', '', '', '', '', '', '', '', '', '', 'Quilo', '', '', '2023-03-24', '', 'Quilo', '', '', 'Quilo', '', 'Motor EstacionÃ¡rio', 'Diesel', '', 'Motor EstacionÃ¡rio', 'Diesel', '2023-03-24', '', '', '', '', '', '', '', '', '', '', '', '', 'Quilo', '', '', '', 'Quilo', '', 'Motor EstacionÃ¡rio', 'Diesel', '', 'Motor EstacionÃ¡rio', 'Diesel', '2023-03-24', '', '', '', '', '', '', '', '', '', '', '', '', 'Quilo', '', '', '', '', 'Quilo', '0000-00-00', '', '', 'Quilo', '0000-00-00', '500', '', '50.00', '', '', '50.00', '', '', '0000-00-00', '50.00', '50.00', '50.00', '3', '50.00', '50.00', '50.00', '50.00', '50.00', '50.00', '50.00', '50.00', '', '50.00', '50.00', '', '50.00', '50.00', '', '0000-00-00', '50.00', '', '50.00', '50.00', '', '50.00', '', '', '50.00', '', '', '0000-00-00', '50.00', '50.00', '50.00', '50.00', '50.00', '50.00', '50.00', '50.00', '50.00', '50.00', '50.00', '50.00', '', '50.00', '50.00', '50.00', '50.00', '', '500.00', '100.80', '50.00', '', '150.00', '50.00', '750.80', '15.02', NULL),
(3, 'teste', 'polpadeira', 'USINA APUI', '500', 'Quilo', '', '7000', '0000-00-00', 'Motor EstacionÃ¡rio', 'Diesel', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Quilo', '', 'Motor EstacionÃ¡rio', 'Diesel', '', 'Motor EstacionÃ¡rio', 'Diesel', '2023-03-24', '', '', '', '', '', '', '', '', '', '', '', '', 'Quilo', '', '', '', 'Quilo', '', 'Motor EstacionÃ¡rio', 'Diesel', '', 'Motor EstacionÃ¡rio', 'Diesel', '2023-03-24', '', '', '', '', '', '', '', '', '', '', '', '', 'Quilo', '', '', '2023-03-24', '', 'Quilo', '', '', 'Quilo', '', 'Motor EstacionÃ¡rio', 'Diesel', '', 'Motor EstacionÃ¡rio', 'Diesel', '2023-03-24', '', '', '', '', '', '', '', '', '', '', '', '', 'Quilo', '', '', '', 'Quilo', '', 'Motor EstacionÃ¡rio', 'Diesel', '', 'Motor EstacionÃ¡rio', 'Diesel', '2023-03-24', '', '', '', '', '', '', '', '', '', '', '', '', 'Quilo', '', '', '', '', 'Quilo', '0000-00-00', '', '', 'Quilo', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '7000.00', '0.00', '', '', '0.00', '0.00', '7000.00', 'Infinity', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`id`, `nome`) VALUES
(1, 'Tesoureiro'),
(2, 'Recepcionista'),
(3, 'Corretor'),
(4, 'Limpeza'),
(5, 'Secretária'),
(6, 'Gerente'),
(7, 'Extrativista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ativo` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `ativo`) VALUES
(1, 'Belo Horizonte', 'Sim'),
(2, 'Contagem', 'Sim'),
(3, 'Jaboticatubas', 'Sim'),
(4, 'Confins', 'Sim'),
(5, 'Ribeirão das Neves', 'Sim'),
(6, 'Curvelo', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `coleta`
--

CREATE TABLE `coleta` (
  `id` int(11) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `produtor` varchar(50) NOT NULL,
  `avaliacao` varchar(50) NOT NULL,
  `local` varchar(50) NOT NULL,
  `bruto` varchar(50) NOT NULL,
  `liquido` varchar(50) NOT NULL,
  `reprovado` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `pagar` varchar(50) NOT NULL,
  `data_cadastro` date NOT NULL,
  `corretor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `coleta`
--

INSERT INTO `coleta` (`id`, `produto`, `produtor`, `avaliacao`, `local`, `bruto`, `liquido`, `reprovado`, `valor`, `pagar`, `data_cadastro`, `corretor`) VALUES
(1, 'CumarÃº', 'manoel silva ', 'Sim', 'usina2', '100', '200', 'NÃ£o', '52', '10400', '2023-02-01', 3),
(2, 'Andiroba', 'manoel lima', 'Sim', 'usina2', '52', '00', 'NÃ£o', '45,00', '80', '2023-02-01', 3),
(3, 'CafÃ© Verde', 'sila m auro', 'NÃ£o', 'usina1', '52', '200', 'Impureza', '52', '10400', '2023-02-01', 3),
(4, 'Ã³leo resina de copaÃ­ba', 'pedro silva silva si', 'Sim', 'usina1', '52', '77', 'NÃ£o', 'R$Â 90,00', 'NaN', '2023-02-01', 3),
(5, 'CopaÃ­ba', 'Silvio', 'Sim', 'apui', '50', '49.5', 'NÃ£o', '20', '990', '2023-02-14', 3),
(6, 'Ã³leo resina de sangue de dragÃ£o', 'Silvio junior', 'Sim', 'apui', '55', '1545', 'NÃ£o', '50', '77250', '2023-03-06', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `compradores`
--

CREATE TABLE `compradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `pessoa` varchar(15) NOT NULL,
  `doc` varchar(20) NOT NULL,
  `inscricao` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `logradouro` varchar(200) DEFAULT NULL,
  `logradouroj` varchar(200) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `cepj` varchar(20) NOT NULL,
  `uf` varchar(5) NOT NULL,
  `ufj` varchar(5) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `cidadej` varchar(20) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `numeroj` varchar(10) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `corretor` int(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_nasc` date NOT NULL,
  `obs` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `compradores`
--

INSERT INTO `compradores` (`id`, `nome`, `pessoa`, `doc`, `inscricao`, `email`, `logradouro`, `logradouroj`, `cep`, `cepj`, `uf`, `ufj`, `cidade`, `cidadej`, `numero`, `numeroj`, `telefone`, `corretor`, `data_cadastro`, `data_nasc`, `obs`) VALUES
(1, 'Jessica ', 'FÃ­sica', '456.666.666-66', '55555555777', 'jessica@hotmail.com', 'Rua Inhame', '', '69015-265', '', 'AM', '', 'Manaus', '', '44', '', '(22) 22222-2222', 3, '2023-03-07', '0000-00-00', 'ooo'),
(3, 'mauro lima da silva', 'JurÃ­dica', '77.777.777/777', '3333333333', 'teste@gmail.com', 'Rua Inhame', '', '69015-265', '', 'AM', '', 'Manaus', '', '44', '', '(33) 33333-3333', 3, '2023-03-13', '0000-00-00', 'uuuu'),
(4, 'pedroso', 'JurÃ­dica', '88.888.888/8888-88', '55555555777', 'teste2@gmail.com', 'Rua PajÃ©', 'Rua Calopsita', '69015-235', '69015-485', 'AM', 'AM', 'Manaus', 'Manaus', '17', '88', '(33) 33333-3333', 3, '2023-03-24', '0000-00-00', 'eee');

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `relatorio` varchar(10) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `favicon` varchar(100) NOT NULL,
  `logo_rel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`id`, `nome`, `telefone`, `email`, `endereco`, `relatorio`, `logo`, `favicon`, `logo_rel`) VALUES
(0, 'USINA APUI', '(31)3220-2058', 'contato@hugocursos.com.br', 'Rua X Nï¿½mero 1100 Bairro Centro - CEP 30512-980 - Belo Horizonte', 'pdf', 'logo.png', 'favicon.ico', 'logo.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_banco`
--

CREATE TABLE `contas_banco` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `banco` varchar(30) NOT NULL,
  `conta` varchar(15) NOT NULL,
  `agencia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contas_banco`
--

INSERT INTO `contas_banco` (`id`, `nome`, `banco`, `conta`, `agencia`) VALUES
(0, 'teste', 'brasil', '888-44', '1021');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `maq` varchar(50) NOT NULL,
  `ferr` varchar(50) NOT NULL,
  `obs` varchar(1000) NOT NULL,
  `fonte` varchar(20) NOT NULL,
  `horimetro` varchar(50) NOT NULL,
  `corretor` int(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_nasc` date NOT NULL,
  `valor` varchar(20) NOT NULL,
  `residual` varchar(50) NOT NULL,
  `vida` varchar(20) NOT NULL,
  `depreciacao` varchar(50) NOT NULL,
  `dia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`id`, `tipo`, `maq`, `ferr`, `obs`, `fonte`, `horimetro`, `corretor`, `data_cadastro`, `data_nasc`, `valor`, `residual`, `vida`, `depreciacao`, `dia`) VALUES
(0, 'Maquina', '555', 'ssss', '', 'Rede ElÃ©trica', 'Gasolina', 3, '2023-01-19', '2023-01-19', 'oo', '', '', '', ''),
(0, 'Maquina', '555', 'ssss', '', 'Rede ElÃ©trica', 'Gasolina', 3, '2023-01-19', '2023-01-19', 'oo', '', '', '', ''),
(0, 'Maquina', '555', 'ssss', '', 'Rede ElÃ©trica', 'Gasolina', 3, '2023-01-19', '2023-01-19', 'oo', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fer`
--

CREATE TABLE `fer` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fer`
--

INSERT INTO `fer` (`id`, `nome`, `foto`, `ativo`) VALUES
(1, 'NÃ£o tem', '11-01-2023-17-08-57-R.png', 'Sim'),
(2, 'FacÃ£o', '11-01-2023-18-04-04-OIP-(2).jfif', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ferramentas`
--

CREATE TABLE `ferramentas` (
  `id` int(11) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `produtor` varchar(50) NOT NULL,
  `avaliacao` varchar(50) NOT NULL,
  `local` varchar(50) NOT NULL,
  `bruto` varchar(50) NOT NULL,
  `liquido` varchar(50) NOT NULL,
  `reprovado` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `pagar` varchar(50) NOT NULL,
  `depre` varchar(50) NOT NULL,
  `dia` varchar(50) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `corretor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ferramentas`
--

INSERT INTO `ferramentas` (`id`, `produto`, `produtor`, `avaliacao`, `local`, `bruto`, `liquido`, `reprovado`, `valor`, `pagar`, `depre`, `dia`, `data_cadastro`, `data_nasc`, `corretor`) VALUES
(2, 'Maquina', 'junior', 'Sim', 'Rede ElÃ©trica', 'Diesel', '29.5', '100', '41', '2', '', '0.08', '2023-01-26', '2023-01-19', 3),
(3, 'Ferramenta', 'manivela', 'NÃ£o', 'Motor EstacionÃ¡rio', 'Gasolina', '200', 'NÃ£o', '90', '18000', '', '', '2023-01-31', '', 3),
(4, 'Maquina', 'polpadeira', 'nÃ£o tem', 'Rede ElÃ©trica', 'Gasolina', '75', '200', '50', '2', '', '0.21', '2023-03-02', '2023-01-19', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencias`
--

CREATE TABLE `frequencias` (
  `id` int(11) NOT NULL,
  `frequencia` varchar(30) NOT NULL,
  `dias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `data_admissao` date NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `uf` varchar(5) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `creci` varchar(20) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `obs` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `cpf`, `telefone`, `email`, `logradouro`, `data_admissao`, `cargo`, `cep`, `uf`, `cidade`, `numero`, `ativo`, `creci`, `foto`, `obs`) VALUES
(2, 'Marcos Silva', '444.444.444-44', '(44) 44444-4444', 'marcos@hotmail.com', 'Rua X', '0000-00-00', '2', '', '', '', '', 'Sim', '', '08-02-2022-10-11-56-4.jpg', ' '),
(3, 'Marcela Tesoureira', '888.888.888-90', '(44) 45555-5555', 'tesoureiro@hotmail.com', 'Rua XXX', '2022-02-07', '1', '', '', '', '', 'Sim', '', '08-02-2022-11-16-25-a.png', 'fasfadsfdas\r\nfdafa\r\nfdsfsaf'),
(5, 'Marta Silva', '565.656.565-6', '(65) 59656-5656', 'marta@hotmail.com', 'Rua X', '2022-02-08', '5', '', '', '', '', 'NÃ£o', '', '08-02-2022-10-58-53-img1.png', ''),
(7, 'Corretor Teste', '844.444.444-44', '(44) 55555-5555', 'corretor@hotmail.com', 'Rua C', '2022-02-08', '3', '', '', '', '', 'Sim', 'MG04518', 'sem-perfil.jpg', ''),
(9, 'Mauro LIma', '999.999.999-99', '(92) 99302-1397', 'mauro.lima@idesam.org', 'av. barrÃ£o', '2023-01-06', '7', '69015-265', 'AM', 'Manaus', '45', 'Sim', '', '06-01-2023-16-58-13-WhatsApp-Image-2022-11-11-at-11.38.00-(1).jpeg', 'teste'),
(12, 'julio cesar', '111.111.111-11', '(88) 88888-8888', 'cesar@gmail', 'Rua Inhame', '2023-01-06', '7', '', '', '', '', 'Sim', NULL, '06-01-2023-17-02-42-passagem2.jpeg', ''),
(13, 'lucas', '666.777.777-77', '(44) 44444-4444', 'lucas@gmail.com', 'Rua Inhame', '2023-01-09', '7', '69015-265', 'AM', 'Manaus', '17', 'Sim', NULL, 'sem-perfil.jpg', 'eeee'),
(14, 'marcus pedroso', '555.555.555-55', '(44) 44444-4444', 'marcus@gmail.com', 'Travessa Caburi', '2023-01-13', '7', '69015-015', 'AM', 'Manaus', '34', 'Sim', NULL, 'sem-perfil.jpg', 'ddd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

CREATE TABLE `imovel` (
  `id` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `insumos`
--

CREATE TABLE `insumos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `cientifico` varchar(200) NOT NULL,
  `medida` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `insumos`
--

INSERT INTO `insumos` (`id`, `nome`, `cientifico`, `medida`, `valor`, `foto`, `ativo`) VALUES
(4, 'copaiba ', 'DestilaÃ§Ã£o', 'Quilo', '77,77', '11-01-2023-16-17-57-Ingredients_Murumuru.jpg', 'Sim'),
(5, 'Andiroba', 'PrÃ©-extraÃ§Ã£o', 'Litro', '34', '11-01-2023-17-20-37-andiroba-sementes.jpg', 'Sim'),
(6, 'Breu branco 666', 'Filtragem', 'Litro', '52,00', '11-01-2023-17-22-26-R-(1).jfif', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locadores`
--

CREATE TABLE `locadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `pessoa` varchar(15) NOT NULL,
  `doc` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `valor` varchar(20) NOT NULL,
  `pg` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `cep` varchar(20) NOT NULL,
  `uf` varchar(10) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `corretor` int(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_nasc` date NOT NULL,
  `obs` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `locadores`
--

INSERT INTO `locadores` (`id`, `nome`, `apelido`, `pessoa`, `doc`, `email`, `valor`, `pg`, `status`, `logradouro`, `cep`, `uf`, `cidade`, `numero`, `telefone`, `corretor`, `data_cadastro`, `data_nasc`, `obs`) VALUES
(1, 'Silvio Santos', 'mauro', 'FÃ­sica', '655.584.555', 'teste3@gmail.com', '2', '0', 'Inativo', 'Rua DDDD', '', '', '', '', '(54) 15555-5555', 3, '2022-12-14', '0000-00-00', 'tttt'),
(3, 'lima', 'mauro', 'FÃ­sica', '444.444.444-44', 'teste@gmail.com', '21', 'DiÃ¡rio', 'Ativo', 'Rua Inhame', '69015-265', 'AM', 'Manaus', '990', '(33) 33333-3333', 3, '2023-01-18', '2022-12-13', 'kkk'),
(4, 'tulio', 'mauro', 'FÃ­sica', '552.222.222-22', 'teste7@gmail.com', '52,00', 'DiÃ¡rio', 'Ativo', 'Travessa Caburi', '69015-015', 'AM', 'Manaus', '55', '(44) 44444-4444', 3, '2023-01-18', '2022-12-14', 'vvv'),
(5, 'Silvio junior', 'paulo', 'FÃ­sica', '885.555.555-55', 'test1@gmail.com', '90,00', 'Mensal', 'Ativo', 'Rua Inhame', '69015-265', 'AM', 'Manaus', '17', '(44) 44444-4444', 3, '2023-02-14', '2022-11-27', '8888'),
(6, 'programador mauro lima', 'paulo', 'FÃ­sica', '222.222.222-2', NULL, '90,00', 'Mensal', 'Ativo', 'mamama', '69015-265', 'AM', 'manaus', '77', '(22) 22222-222', 3, '2023-02-14', '2023-02-14', 'www');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locais`
--

CREATE TABLE `locais` (
  `id` int(11) NOT NULL,
  `local` varchar(60) NOT NULL,
  `comunidade` varchar(60) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lon` varchar(100) NOT NULL,
  `obs` varchar(1000) DEFAULT NULL,
  `data_cadastro` date NOT NULL,
  `corretor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `locais`
--

INSERT INTO `locais` (`id`, `local`, `comunidade`, `municipio`, `lat`, `lon`, `obs`, `data_cadastro`, `corretor`) VALUES
(6, 'usina1', 'rio', 'Apui-AM', '-3.140856', '-60.039494', ' eee', '2023-01-20', 3),
(7, 'usina2', 'uatuma', 'Apui-AM', '-3.062350', '-59.979408', ' teset', '2023-01-24', 3),
(8, 'apui', 'yyyy', 'Apui-AM', '-7.205374', '-59.892906', ' ffff', '2023-02-14', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `locatarios`
--

CREATE TABLE `locatarios` (
  `id` int(11) NOT NULL,
  `local` varchar(60) NOT NULL,
  `comunidade` varchar(60) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lon` varchar(100) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `pessoa` varchar(15) NOT NULL,
  `doc` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `endereco` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) NOT NULL,
  `corretor` int(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_nasc` date NOT NULL,
  `obs` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `locatarios`
--

INSERT INTO `locatarios` (`id`, `local`, `comunidade`, `municipio`, `lat`, `lon`, `nome`, `pessoa`, `doc`, `email`, `endereco`, `telefone`, `corretor`, `data_cadastro`, `data_nasc`, `obs`) VALUES
(4, '', '', '', '', '', 'usina 2', 'FÃ­sica', '444.444.444-44', 'corretor@hotmail.com', 'Rua C', '(44) 55555-5555', 3, '2023-01-05', '2023-01-05', 'Ã§Ã§');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lote`
--

CREATE TABLE `lote` (
  `id` int(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  `empressa` varchar(50) NOT NULL,
  `placa` varchar(50) NOT NULL,
  `origem` varchar(50) NOT NULL,
  `destino` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `nota` varchar(50) NOT NULL,
  `dono` varchar(300) NOT NULL,
  `fisica` varchar(300) NOT NULL,
  `juridica` varchar(300) NOT NULL,
  `produtor` varchar(30) NOT NULL,
  `produto` varchar(30) NOT NULL,
  `emb` varchar(30) NOT NULL,
  `bruto` varchar(30) NOT NULL,
  `liq` varchar(30) NOT NULL,
  `valor` varchar(30) NOT NULL,
  `produtordois` varchar(30) NOT NULL,
  `produtodois` varchar(30) NOT NULL,
  `embdois` varchar(30) NOT NULL,
  `brutodois` varchar(30) NOT NULL,
  `liqdois` varchar(30) NOT NULL,
  `valordois` varchar(30) NOT NULL,
  `produtortres` varchar(30) NOT NULL,
  `produtotres` varchar(30) NOT NULL,
  `embtres` varchar(30) NOT NULL,
  `brutotres` varchar(30) NOT NULL,
  `liqtres` varchar(30) NOT NULL,
  `valortres` varchar(30) NOT NULL,
  `produtorqua` varchar(30) NOT NULL,
  `produtoqua` varchar(30) NOT NULL,
  `embqua` varchar(30) NOT NULL,
  `brutoqua` varchar(30) NOT NULL,
  `liqqua` varchar(30) NOT NULL,
  `valorqua` varchar(30) NOT NULL,
  `produtorcinco` varchar(30) NOT NULL,
  `produtocinco` varchar(30) NOT NULL,
  `embcinco` varchar(30) NOT NULL,
  `brutocinco` varchar(30) NOT NULL,
  `liqcinco` varchar(30) NOT NULL,
  `valorcinco` varchar(30) NOT NULL,
  `produtorseis` varchar(30) NOT NULL,
  `produtoseis` varchar(30) NOT NULL,
  `embseis` varchar(30) NOT NULL,
  `brutoseis` varchar(30) NOT NULL,
  `liqseis` varchar(30) NOT NULL,
  `valorseis` varchar(30) NOT NULL,
  `produtorsete` varchar(30) NOT NULL,
  `produtosete` varchar(30) NOT NULL,
  `embsete` varchar(30) NOT NULL,
  `brutosete` varchar(30) NOT NULL,
  `liqsete` varchar(30) NOT NULL,
  `valorsete` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lote`
--

INSERT INTO `lote` (`id`, `data_cadastro`, `empressa`, `placa`, `origem`, `destino`, `numero`, `nota`, `dono`, `fisica`, `juridica`, `produtor`, `produto`, `emb`, `bruto`, `liq`, `valor`, `produtordois`, `produtodois`, `embdois`, `brutodois`, `liqdois`, `valordois`, `produtortres`, `produtotres`, `embtres`, `brutotres`, `liqtres`, `valortres`, `produtorqua`, `produtoqua`, `embqua`, `brutoqua`, `liqqua`, `valorqua`, `produtorcinco`, `produtocinco`, `embcinco`, `brutocinco`, `liqcinco`, `valorcinco`, `produtorseis`, `produtoseis`, `embseis`, `brutoseis`, `liqseis`, `valorseis`, `produtorsete`, `produtosete`, `embsete`, `brutosete`, `liqsete`, `valorsete`, `total`) VALUES
(6, '2023-03-23', 'programador mauro lima', '4444', 'salvador', 'porto velho', '888888', 'NFE888', 'Jessica  - 456.666.666-66 - 55555555777 - (22) 22222-2222', 'Rua PajÃ© - 17 - Manaus - AM - 69015-235', 'Rua Calopsita - 88 - Manaus - AM - 69015-485', 'mauro', '', '', '', '', '', 'mauro', 'copaiba', 'c00', '45', '33', '5000', 'paulo', '', '', '', '', '', 'paulo', '', '', '', '', '', 'paulo', '', '', '', '', '', 'paulo', '', '', '', '', '', 'paulo', '', '', '', '', '', '5000.00'),
(7, '2023-03-23', 'programador mauro lima', '4444', 'salvador', 'porto velho', '888888', 'NFE888', 'pedroso - 88.888.888/8888-88 - 55555555777 - (33) 33333-3333', 'Rua PajÃ© - 17 - Manaus - AM - 69015-235', 'Rua Calopsita - 88 - Manaus - AM - 69015-485', 'mauro', '', '', '', '', '', 'mauro', 'copaiba', 'c00', '45', '33', '5000', 'paulo', '', '', '', '', '', 'paulo', '', '', '', '', '', 'paulo', '', '', '', '', '', 'paulo', '', '', '', '', '', 'paulo', '', '', '', '', '', '5000.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `maq`
--

CREATE TABLE `maq` (
  `id` int(40) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `maq`
--

INSERT INTO `maq` (`id`, `nome`, `foto`, `ativo`) VALUES
(1, 'NÃ£o tem', '11-01-2023-16-56-17-R.png', 'Sim'),
(2, 'Furadeira', '11-01-2023-16-59-51-R.jfif', 'Sim'),
(3, 'arma', 'sem-foto.png', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagar`
--

CREATE TABLE `pagar` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `pessoa` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `data_lanc` date NOT NULL,
  `data_venc` date NOT NULL,
  `data_pgto` date NOT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `usuario_pgto` int(11) NOT NULL,
  `frequencia` int(11) NOT NULL,
  `saida` varchar(50) NOT NULL,
  `arquivo` varchar(255) DEFAULT NULL,
  `pago` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `cientifico` varchar(200) NOT NULL,
  `medida` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `cientifico`, `medida`, `valor`, `foto`, `ativo`) VALUES
(4, 'copaiba ', 'kkkk', 'Quilo', '77,77', '11-01-2023-16-17-57-Ingredients_Murumuru.jpg', 'Sim'),
(5, 'Andiroba 444', 'tetse', 'Litro', '34', '11-01-2023-17-20-37-andiroba-sementes.jpg', 'Sim'),
(6, 'Breu branco 666', 'teste', 'Litro', '52,00', '11-01-2023-17-22-26-R-(1).jfif', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recepcao`
--

CREATE TABLE `recepcao` (
  `id` int(11) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `corretor` int(11) NOT NULL,
  `produtor` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL,
  `quantidade` varchar(50) NOT NULL,
  `medida` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `data_entrada` date DEFAULT NULL,
  `fonte` varchar(50) NOT NULL,
  `consumo` varchar(50) NOT NULL,
  `data_aquisicao` date DEFAULT NULL,
  `maq` varchar(50) NOT NULL,
  `custo` varchar(50) NOT NULL,
  `residual` varchar(50) NOT NULL,
  `anos` varchar(50) NOT NULL,
  `depreciacao` varchar(50) NOT NULL,
  `dia` varchar(50) NOT NULL,
  `util` varchar(50) NOT NULL,
  `vd` varchar(50) NOT NULL,
  `obra` varchar(50) NOT NULL,
  `hora` varchar(50) NOT NULL,
  `trabalho` varchar(50) NOT NULL,
  `pago` varchar(50) NOT NULL,
  `data_final` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `hora` time NOT NULL,
  `data` date NOT NULL,
  `usuario` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `obs` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `titulo`, `descricao`, `hora`, `data`, `usuario`, `status`, `obs`) VALUES
(1, 'Nova equipe', 'tete', '11:04:00', '2023-01-12', 3, 'Agendada', 'rrr'),
(2, 'Nova equipe', 'tete', '16:21:00', '2023-03-07', 3, 'Agendada', ''),
(3, 'rio', 'tttt', '18:21:00', '2023-03-07', 3, 'Agendada', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `cientifico` varchar(200) NOT NULL,
  `medida` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipos`
--

INSERT INTO `tipos` (`id`, `nome`, `cientifico`, `medida`, `valor`, `foto`, `ativo`) VALUES
(4, 'copaiba ', 'kkkk', 'Quilo', '77,77', '11-01-2023-16-17-57-Ingredients_Murumuru.jpg', 'Sim'),
(5, 'Andiroba', 'tetse', 'Quilo', '34', '11-01-2023-17-20-37-andiroba-sementes.jpg', 'Sim'),
(6, 'Breu branco', 'teste', 'Litro', '52,00', '11-01-2023-17-22-26-R-(1).jfif', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha_crip` varchar(150) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `nivel` varchar(25) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_func` int(11) NOT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `senha_crip`, `senha`, `nivel`, `foto`, `id_func`, `ativo`) VALUES
(3, 'Usina ApuÃ­', '958.412.882-53', 'devmauro.professortec@gmail.com', '202cb962ac59075b964b07152d234b70', '123', 'Administrador', '12-12-2022-11-54-42-WhatsApp-Image-2022-11-11-at-11.37.24.jpeg', 0, 'Sim'),
(5, 'Marcos Silva', '444.444.444-44', 'marcos@hotmail.com', '202cb962ac59075b964b07152d234b70', '123', 'Recepcionista', '08-02-2022-10-11-56-4.jpg', 2, 'Sim'),
(6, 'Marcela Tesoureira', '888.888.888-90', 'tesoureiro@hotmail.com', '202cb962ac59075b964b07152d234b70', '123', 'Tesoureiro', '08-02-2022-11-16-25-a.png', 3, 'Sim'),
(9, 'Corretor Teste', '844.444.444-44', 'corretor@hotmail.com', '202cb962ac59075b964b07152d234b70', '123', 'Corretor', 'sem-perfil.jpg', 7, 'Sim'),
(11, 'julio cesar', '111.111.111-11', 'cesar@gmail', '202cb962ac59075b964b07152d234b70', '123', 'Extrativista', '06-01-2023-17-02-42-passagem2.jpeg', 12, 'Sim'),
(12, 'lucas', '666.777.777-77', 'lucas@gmail.com', '202cb962ac59075b964b07152d234b70', '123', 'Extrativista', 'sem-perfil.jpg', 13, 'Sim'),
(13, 'marcus pedroso', '555.555.555-55', 'marcus@gmail.com', '202cb962ac59075b964b07152d234b70', '123', 'Extrativista', 'sem-perfil.jpg', 14, 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

CREATE TABLE `vendedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `pessoa` varchar(15) NOT NULL,
  `doc` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `valor` varchar(10) NOT NULL,
  `pg` varchar(10) NOT NULL,
  `status` varchar(12) NOT NULL,
  `logradouro` varchar(20) DEFAULT NULL,
  `cep` varchar(20) NOT NULL,
  `uf` varchar(11) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `numero` varchar(11) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `corretor` int(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_nasc` date NOT NULL,
  `obs` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vendedores`
--

INSERT INTO `vendedores` (`id`, `nome`, `apelido`, `pessoa`, `doc`, `email`, `valor`, `pg`, `status`, `logradouro`, `cep`, `uf`, `cidade`, `numero`, `telefone`, `corretor`, `data_cadastro`, `data_nasc`, `obs`) VALUES
(5, 'Silvio Santos', 'lima', 'FÃ­sica', '541.555.555-55', 'silvio@hotmail.com', '45,00', 'DiÃ¡rio', 'Ativo', '52', '', '', '', '', '(88) 88888-8888', 3, '2022-12-19', '2022-11-29', '2022-11-29'),
(6, 'Silvio Santos tulio sanros', 'lima', 'FÃ­sica', '444.444.444-44', 'silvi2o@hotmail.com', '45,00', 'Mensal', 'Ativo', 'Rua Inhame', '69015-265', 'AM', 'Manaus', '17', '(44) 44444-4444', 3, '2023-01-09', '2022-10-31', 'eee'),
(7, 'vitor', 'vitinho', 'FÃ­sica', '333.222.222-22', 'mauro@teste', '45', 'Mensal', 'Ativo', 'Rua Inhame', '69015-265', 'AM', 'Manaus', '67', '(44) 55555-5555', 3, '2023-01-16', '2012-02-08', 'rrr');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `associados`
--
ALTER TABLE `associados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `bairros`
--
ALTER TABLE `bairros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `coleta`
--
ALTER TABLE `coleta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `compradores`
--
ALTER TABLE `compradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fer`
--
ALTER TABLE `fer`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ferramentas`
--
ALTER TABLE `ferramentas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `locadores`
--
ALTER TABLE `locadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `locais`
--
ALTER TABLE `locais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `locatarios`
--
ALTER TABLE `locatarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `maq`
--
ALTER TABLE `maq`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `associados`
--
ALTER TABLE `associados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `bairros`
--
ALTER TABLE `bairros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `coleta`
--
ALTER TABLE `coleta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `compradores`
--
ALTER TABLE `compradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `fer`
--
ALTER TABLE `fer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ferramentas`
--
ALTER TABLE `ferramentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `imovel`
--
ALTER TABLE `imovel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `locadores`
--
ALTER TABLE `locadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `locais`
--
ALTER TABLE `locais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `locatarios`
--
ALTER TABLE `locatarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `lote`
--
ALTER TABLE `lote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `maq`
--
ALTER TABLE `maq`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
