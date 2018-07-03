-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql10.freemysqlhosting.net
-- Tempo de geração: 03/07/2018 às 21:37
-- Versão do servidor: 5.5.58-0ubuntu0.14.04.1
-- Versão do PHP: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sql10244807`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `bk_contato`
--

CREATE TABLE `bk_contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  `lido` tinyint(1) DEFAULT NULL,
  `lixo` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  `lido` tinyint(1) DEFAULT '0',
  `lixo` tinyint(1) DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `telefone`, `assunto`, `mensagem`, `lido`, `lixo`, `created`) VALUES
(2, 'Enzo Gehlen', 'enzo.ge@hotmail.ccc', 'meu numero', 'uadhudh', 'adhsuihdiusahdu', 1, 0, '2018-06-28 16:53:06'),
(3, 'Enzo Gehlen', 'enzo.ge@hotmail.ccc', 'meu numero', 'uadhudh', 'adhsuihdiusahdu', 0, 0, '2018-06-28 14:29:23'),
(5, 'dsadsasda', 'dsadsad@aaaaa.aaa', 'asddsaasd', 'dsadsasd', 'asdasad', 1, 0, '2018-07-02 13:05:56');

-- --------------------------------------------------------

--
-- Estrutura para tabela `frota`
--

CREATE TABLE `frota` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `frota`
--

INSERT INTO `frota` (`id`, `titulo`, `descricao`, `imagem`) VALUES
(1, 'EXCLUSIVO PARA CURTAS VIAGENS', '', 'curta.jpg'),
(8, 'VANS', '<p><strong>Van branca</strong></p>\r\n<p>Mercedes Benz/Sprinte executiva</p>\r\n<p>15 lugares, poltronas soft</p>\r\n<p>Som com CD, USB, DVD, carregador de celular, ar condicionado e calefa&ccedil;&atilde;o (ar quente)&nbsp;</p>\r\n<p>Ano 2012/2013</p>\r\n<p><strong>Van cinza</strong></p>\r\n<p>Renault/Master executiva</p>\r\n<p>15 lugares, poltronas soft</p>\r\n<p>Som com CD, USB, DVD, carregador de celular, ar condicionado e calefa&ccedil;&atilde;o (ar quente)</p>\r\n<p>Ano 2013/2014</p>', 'vanss.jpg'),
(9, 'Double Deck Leito Turismo', '<p align=\"justify\"><font style=\"background-color: #ffffff;\"><strong>&Ocirc;nibus Scania/Buscar panor&acirc;mico Double Deck Leito Turismo </strong></font></p>\r\n<p align=\"justify\"><font style=\"background-color: #ffffff;\">&Ocirc;nibus DD, com capacidade para 56 passageiros, poltronas Soft com encosto de pernas</font></p>\r\n<p align=\"justify\"><font style=\"background-color: #ffffff;\">Som com CD, USB, DVD</font></p>\r\n<p align=\"justify\"><font style=\"background-color: #ffffff;\"><strong>Carregador de celular</strong></font></p>\r\n<p align=\"justify\"><font style=\"background-color: #ffffff;\">Frigobar com &aacute;gua mineral dispon&iacute;vel no percurso da viagem</font></p>\r\n<p align=\"justify\"><font style=\"background-color: #ffffff;\">Ar condicionado e calefa&ccedil;&atilde;o (Ar quente) e WC.</font></p>\r\n<p align=\"justify\"><font style=\"background-color: #ffffff;\">Ano 2007</font></p>\r\n<p align=\"justify\">&nbsp;</p>\r\n<p align=\"justify\">&nbsp;</p>', 'double.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `imagem` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `galeria`
--

INSERT INTO `galeria` (`id`, `titulo`, `imagem`) VALUES
(1, 'Enzo', 'igre.JPG'),
(3, 'Parque Aquático na cidade ', 'porto1.jpg'),
(4, '', 're.jpg'),
(6, 'Casino', 'casino.jpg'),
(7, 'Portico', 'rigo.jpeg'),
(8, 'Na cidade', 'Na cidade.jpg'),
(9, 'Rumo a Porto Rico', 'Naestrada (cópia).jpg'),
(10, '', 'o.jpg (cópia)'),
(11, 'Na estrada', 'Na estrada.jpg'),
(12, 'Onibus', 'bus.jpg'),
(13, 'Chegando no Casino', 'chgado.jpg'),
(14, 'Na estrada-Argentina', 'u.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `home`
--

CREATE TABLE `home` (
  `dicas` text NOT NULL,
  `galeria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `home`
--

INSERT INTO `home` (`dicas`, `galeria`) VALUES
('<p align=\"left\"><font color=\"#e34a09\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"../images/icons/mala.png\" />&nbsp;&nbsp;<strong>BAGAGEM</strong></font></p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>Sempre a menor poss&iacute;vel&nbsp;</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>Identifique a sua bagagem com nome, endere&ccedil;o e telefone, ponha as etiquetas em lugares vis&iacute;veis&nbsp;</font>e tamb&eacute;m dentro da mala</p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>Leve roupas adequadas a esta&ccedil;&atilde;o</font></p>\r\n<p align=\"left\"><font color=\"#e34a09\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"../images/icons/pills.png\" />&nbsp;&nbsp;<strong>REM&Eacute;DIOS</strong></font><br /><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font></font></p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>Para quem tem problemas cr&ocirc;nicos, leve os rem&eacute;dios na viagem. Mas se for ao exterior, fazer um seguro sa&uacute;de &eacute; a melhor op&ccedil;&atilde;o</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#e34a09\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"../images/icons/cv.png\" /><strong> <font face=\"times new roman,times,serif\">DOCUMENTOS</font></strong></font></p>\r\n<p align=\"left\"><font color=\"#e34a09\">&nbsp;<font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font></font></p>\r\n<p align=\"left\"><font color=\"#e34a09\"><font color=\"#f5230c\"><em><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<font color=\"#000000\"> &nbsp;Viagem Nacional&nbsp;</font></strong></em></font></font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><strong><em><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &rarr;Menores de 12 anos</font></em></strong><font color=\"#f5230c\">:</font> precisam de autoriza&ccedil;&atilde;o judicial para viajar desacompanhados</font></p>\r\n<p align=\"left\"><font color=\"#000000\">. </font></p>\r\n<p align=\"left\"><strong><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; A autoriza&ccedil;&atilde;o &eacute; dispensada quando ele viajar acompanhado por:</font></strong></p>\r\n<p align=\"left\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong><em><font color=\"#f5230c\">&rarr;</font></em></strong>Qualquer dos pais;</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &rarr;</font>Pessoa comprovada titular de sua guarda ou tutela;</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &rarr;</font>Ascendente ou colateral com mais de 21 anos at&eacute; o terceiro grau de parentesco devidamente documentados;</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &rarr;</font>Pessoa com mais de 21 anos, portadora de autoriza&ccedil;&atilde;o dos pais ou respons&aacute;veis.</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#f5230c\"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<font color=\"#000000\"> &nbsp;Viagem Internacional</font></strong></font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;<strong>Menores de 12 anos</strong> </font>com certid&atilde;o de nascimento ou Identidade, sempre com foto, e autoriza&ccedil;&atilde;o judicial para viajar desacompanhados&nbsp;</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<font color=\"#f5230c\">&nbsp; &nbsp; &rarr;</font>Autoriza&ccedil;&atilde;o Judicial&nbsp; &eacute;&nbsp; dispensada quando:&nbsp; viajar acompanhado pelo o pai e m&atilde;e, <font color=\"#f5230c\"><strong>n&atilde;o &eacute; permitido s&oacute; o pai ou a m&atilde;e!</strong></font></font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>Caso s&oacute; o pai ou a m&atilde;e ir&atilde;o viajar, &eacute; necess&aacute;rio autoriza&ccedil;&atilde;o do poder Judici&aacute;rio&nbsp;</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &rarr;</font>Para os pa&iacute;ses lim&iacute;trofes do Brasil apresentando somente carteira de identidade em bom estado de conserva&ccedil;&atilde;o </font></p>\r\n<p align=\"left\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (inclusive para menores de idade).</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#e34a09\"><strong><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &rarr;</font></font>Pa&iacute;ses Lim&iacute;trofes: Argentina, Uruguai, Paraguai, Chile.&nbsp;</strong></font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\">&nbsp;<br /><font color=\"#e34a09\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"../images/icons/hotel.png\" />&nbsp;&nbsp;<strong>CHEGANDO NA CIDADE</strong></font></p>\r\n<p align=\"left\"><br /><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>No hotel,confira a limpeza do quarto, se necess&aacute;rio, exija um quarto limpo, voc&ecirc; pagou, voc&ecirc; tem direito</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>Cuidado com os aparelhos eletr&ocirc;nicos, saiba primeiramente qual &eacute; a voltagem do lugar</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>No primeiro passeio, antes de sair, pe&ccedil;a um cart&atilde;o do hotel. Se voc&ecirc; se perder, mostre o cart&atilde;o e tudo estar&aacute; resolvido</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>Na hora de comer, comece com pratos leves e v&aacute; se habituando aos poucos</font></p>\r\n<p align=\"left\"><br /><font color=\"#e34a09\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"../images/icons/wall-clock.png\" /><strong>&nbsp; HOR&Aacute;RIO DE EMBARQUE</strong></font></p>\r\n<p align=\"left\"><br /><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>Esteja com todos os documentos em m&atilde;os ou na bagagem de m&atilde;o (passaporte, RG, Passagem ou Voucher)&nbsp;</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>Em longas viagens &eacute; recomend&aacute;vel o uso de roupas e sapatos confort&aacute;veis</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>N&atilde;o comer em excesso e, beba muito l&iacute;quido&nbsp;Preocupe-se com suas bolsas, carteiras, pacotes e malas.</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>N&atilde;o pe&ccedil;a e n&atilde;o aceite que outras pessoas transportem suas malas</font></p>\r\n<p align=\"left\">&nbsp;</p>\r\n<p align=\"left\"><font color=\"#000000\"><font color=\"#f5230c\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&rarr;</font>Chegue com 1 hora de anteced&ecirc;ncia nas viagens de turismo realizadas com &ocirc;nibus no local do embarque</font></p>', '<p align=\"center\"><font size=\"5\" color=\"#000000\" face=\"times new roman,times,serif\">A melhor parte de uma viagem &eacute; o caminho, n&atilde;o o destino!</font></p>\r\n<p align=\"center\"><font size=\"5\" color=\"#000000\" face=\"times new roman,times,serif\"> Ent&atilde;o que tal um passeio para esta cidade mission&aacute;ria pequena com belas paisagens???</font></p>\r\n<p align=\"center\"><font size=\"5\" color=\"#000000\" face=\"times new roman,times,serif\">Puerto Rico-Argentina</font></p>');

-- --------------------------------------------------------

--
-- Estrutura para tabela `n_users`
--

CREATE TABLE `n_users` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `n_users`
--

INSERT INTO `n_users` (`id`, `nome`, `senha`, `email`) VALUES
(1, 'Enzo', '123', 'a@b.c');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacotes`
--

CREATE TABLE `pacotes` (
  `cod` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `saida` date NOT NULL,
  `retorno` date NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `pacotes`
--

INSERT INTO `pacotes` (`cod`, `imagem`, `titulo`, `saida`, `retorno`, `descricao`) VALUES
(1, 'panta.jpg', 'Viagem ao Pantanal e Bonito-MS', '2018-09-16', '2018-09-22', '<p align=\"justify\">&nbsp;</p>\r\n<p align=\"justify\">&nbsp;</p>\r\n<p align=\"justify\"><font style=\"background-color: #ffffff;\" color=\"#000000\"><font color=\"#FF9900\"><strong>16/09/2018:</strong> </font>Sa&iacute;da em Itapiranga-SC</font></p>\r\n<p align=\"justify\"><strong><img src=\"../images/subpacotes/colage.jpg\" alt=\"\" width=\"500\" height=\"500\" align=\"right\" /><font color=\"#FF9900\">17/09/2018:</font></strong><font color=\"#000000\"> Chegada em Corumb&aacute;-MS com pernoite no Hotel Nacional</font></p>\r\n<p align=\"justify\"><font color=\"#000000\"><font color=\"#FF9900\"><strong>18/09/2018:</strong></font>Passeio para compras na Bol&iacute;via</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Passeio de chalana pelo Rio Paraguai&nbsp;</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Deslocamento de Corumba-MS para Miranda-MS</font></p>\r\n<p align=\"justify\"><font color=\"#000000\"><font color=\"#FF9900\"><strong>19/09/2018:</strong></font>Passeio na Fazenda S&atilde;o Francisco</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Passeio fotogr&aacute;fico e de chalana</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Deslocamento para Bonito-MS, com pernoite na Pousada do Peralta</font></p>\r\n<p align=\"justify\"><font color=\"#000000\"><font color=\"#FF9900\"><strong>20/09/2018:</strong> </font>Visita &aacute; Gruta Lago Azul e Balne&aacute;rio Municipal</font></p>\r\n<p align=\"justify\"><font color=\"#000000\"><font color=\"#FF9900\"><strong>21/09/2018:</strong></font>Visita Balne&aacute;rio do Sol com almo&ccedil;o</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Baseio de bote no Rio Formoso</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ap&oacute;s jantar viagem de retorno a Itapiranga</font></p>\r\n<p align=\"justify\"><font color=\"#000000\"><font color=\"#FF9900\"><strong>22/09/2018:</strong> </font>Chegada a Itapiranga a tarde.</font></p>\r\n<p align=\"justify\"><font color=\"#000000\"><strong><font color=\"#FF9900\">OBSERVA&Ccedil;&Otilde;ES:</font>&nbsp;</strong> O pacote inclui:</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp;Todas as refei&ccedil;&otilde;es a partir do dia 17/09(caf&eacute; da manh&atilde;) at&eacute; dia 22/09 (almo&ccedil;o).</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp;06 caf&eacute;s da manh&atilde;</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp;06 almo&ccedil;os</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp;05 jantares</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp;Guias tur&iacute;sticos em todos os passeios</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp;Transporte de viagem e deslocamento de Bonito-MS</font></p>\r\n<p align=\"justify\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp;04 pernoites em hotel/pousada</font></p>\r\n<p align=\"justify\"><font color=\"#FF9900\"><strong>Valor por pessoa R$ 2350,00(dois mil trezentos e cinquenta reais). </strong></font></p>\r\n<p align=\"justify\"><font color=\"#FF9900\"><strong>Pagamento: 50% at&eacute; o dia 16/08/2018 e o restante at&eacute; 16/09/2018(dia da viagem)</strong></font></p>\r\n<p align=\"justify\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(3, 'img-teste-01.jpg', 'teste', '2018-07-02', '2018-07-27', '<p>UIAHSDUIPSHDUIASHDIUASHDIUHSDIUSADUHAS</p>\r\n<p>ASDIUHASUIDHASUIHD SA&Iacute;DA DIA TAL</p>\r\n<p>DUISAHDUIASHDIUAHSD</p>\r\n<p>sou lindo</p>');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sobre`
--

CREATE TABLE `sobre` (
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `sobre`
--

INSERT INTO `sobre` (`titulo`, `subtitulo`, `texto`, `imagem`) VALUES
('      Nossa História      ', 'Na estrada desde 2000. Realizando viagens Nacionais e Internacionais . Levando Você Nos Melhores Destinos!', '<p align=\"justify\"><font size=\"3\">Tudo iniciou no ano de 2000 quando Neimar Trasel participou de uma licita&ccedil;&atilde;o de transporte escolar, ganhando uma rota, teve que adquirir um veiculo para o transporte dos alunos, uma VW Combi ano 1978.</font><br /><font size=\"3\">Em 2004 come&ccedil;ou a transportar trabalhadores de um frigorifico da cidade de Itapiranga-SC. Em 2005 o propriet&aacute;rio teve que vender sua van Kia Besta para poder transportar os alunos e tamb&eacute;m acad&ecirc;micos da universidade da regi&atilde;o. Neste ano adquiriu seu primeiro &ocirc;nibus M-Benz/1518 1989</font><br /><font size=\"3\">No ano de 2009 ouve uma grande procura por viagens acad&ecirc;micas, o propriet&aacute;rio Neimar conseguiu a aprova&ccedil;&atilde;o do DETER ( Departamento de Transportes e Terminais), podendo ent&atilde;o realizar viagens por todo estado catarinense, nesse momento necessitava-se um &ocirc;nibus mais adequado um M-Benz/1621 e a compra de uma Van Fiat Ducato. Desde ent&atilde;o, surgiu a empresa de Viagens e Turismo Nego Tur.&nbsp;</font><br /><font size=\"3\">2011 foi realizada a compra do segundo &ocirc;nibus, um M-Benz/0400 e em 2013 foi realizado o alvaliamento da ANNT (Ag&ecirc;ncia Nacional de Transportes Terrestres), podendo ent&atilde;o realizar viagens interestaduais e internacionais.&nbsp;</font><br /><font size=\"3\">E em 2017 foi adquerido o primeiro &ocirc;nibus Double Deck SCANIA/BUSCAR PANORAMICO DD com total conforto aos passageiros.</font></p>', 'colage.jpg');

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vw_contatos`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vw_contatos` (
`id` int(11)
,`nome` varchar(150)
,`assunto` varchar(100)
,`mensagem` text
,`lido` tinyint(1)
,`created` timestamp
);

-- --------------------------------------------------------

--
-- Estrutura para view `vw_contatos`
--
DROP TABLE IF EXISTS `vw_contatos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sql10244807`@`%` SQL SECURITY DEFINER VIEW `vw_contatos`  AS  select `contato`.`id` AS `id`,`contato`.`nome` AS `nome`,`contato`.`assunto` AS `assunto`,`contato`.`mensagem` AS `mensagem`,`contato`.`lido` AS `lido`,`contato`.`created` AS `created` from `contato` where (`contato`.`lixo` <> 1) ;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `bk_contato`
--
ALTER TABLE `bk_contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `frota`
--
ALTER TABLE `frota`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `n_users`
--
ALTER TABLE `n_users`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pacotes`
--
ALTER TABLE `pacotes`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `frota`
--
ALTER TABLE `frota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de tabela `n_users`
--
ALTER TABLE `n_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `pacotes`
--
ALTER TABLE `pacotes`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
