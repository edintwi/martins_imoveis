-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Out-2021 às 19:05
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `martins`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Apartamentos'),
(2, 'Casas'),
(3, 'Terrenos'),
(4, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id_imoveis` int(20) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `quartos` int(11) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `diretorio_thumb` varchar(50) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `bairro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id_imoveis`, `titulo`, `descricao`, `quartos`, `imagem`, `diretorio_thumb`, `id_categoria`, `codigo`, `data`, `valor`, `bairro`) VALUES
(557, 'BANGU RUA BOIOBI', 'Servidão, Sala, 2 Quartos, Banheiro Social, Lavabo, Cozinha e Área de Serviço\r\n\r\n  Bangu\r\nRua Boiobi', 2, 'imagens_imoveis/767C/_0.jpg', 'imagens_imoveis/767C', 2, 'CÓDIGO:767', '2013-08-13', '160000', 'Bangu'),
(558, 'BANGU RUA BOIOBI', 'Divisão de Cômodos: Servidão, Sala, 1 Quarto, Banheiro Social, Cozinha Americana e Área de Serviço\r\n\r\n   Bangu\r\nRua Boiobi', 2, 'imagens_imoveis/768C/_0.jpg', 'imagens_imoveis/768C', 2, 'CÓDIGO:768', '2013-08-14', '145000', 'Bangu'),
(559, 'BANGU RUA BOIOBI', 'Servidão, Sala, 2 Quartos, Banheiro Social, Cozinha e Área de Serviço\r\n\r\n  Bangu\r\nRua Boiobi', 2, 'imagens_imoveis/769C/_0.jpg', 'imagens_imoveis/769C', 2, 'CÓDIGO:769', '2013-08-13', '145000', 'Bangu'),
(564, 'BANGU RUA BOIOBI', 'Um Piso Com: Varanda Sala, 2 Quartos, Banheiro Social, Cozinha, Área de Serviço, Terraço e Garagem.\r\n\r\n  Bangu\r\nRua Boiobi', 2, 'imagens_imoveis/776C/_0.jpg', 'imagens_imoveis/776C', 2, 'CÓDIGO:776', '2013-08-22', '280000', 'Bangu'),
(570, 'BARRA AVENIDA DOS FLANBOYANTS', '1° Piso: Sala, 3 Quartos, 3 Banheiros Sociais, Cozinha e Área de Serviço\r\n\r\n2º Piso: Hall de Distribuição, Banheiro Social e Cobertura com Piscina Privativa.\r\n\r\n Barra da Tijuca\r\nAv. Dos Flanboyants', 3, 'imagens_imoveis/615A/_0.jpg', 'imagens_imoveis/615A', 1, 'CÓDIGO:615', '2013-10-03', '2100000', 'Outros Bairros'),
(596, 'SEPETIBA', 'Sala, 2 Quartos (Sendo uma Suíte), Cozinha e Banheiro Social.\r\n\r\nE MAIS: Terraço (Com quarto de Despejo e Dois Banheiros), Quintal da Frente, Lateral Esquerdo, Dos Fundos e Galpão.\r\n\r\nSepetiba', 2, 'imagens_imoveis/635C/_0.jpg', 'imagens_imoveis/635C', 2, 'CÓDIGO:635', '2014-04-07', '140000', 'Outros Bairros'),
(617, 'PECHINCHA AVENIDA GEREMARIO DANTAS', 'Sala, 2 Quartos, Cozinha, Banheiro Social e Área de Serviço.\r\n\r\n       Pechincha\r\nAvenida Geremario Dantas', 2, 'imagens_imoveis/654A/_0.jpg', 'imagens_imoveis/654A', 1, 'CÓDIGO:654', '2014-07-27', '225000', 'Outros Bairros'),
(669, 'BANGU RUA TANGARÁ DA SERRA', '1º Piso: Quintal da Frente, Garagem e uma Suíte.\r\n\r\n2º Piso: Varanda, Sala, 3 Quartos, Cozinha, Banheiro Social, Banheiro e Cozinha de Apoio e Área de Serviço\r\n\r\nE MAIS: Ampla Área nos Fundos\r\n\r\n      Bangu\r\nRua Tangará de Serra', 3, 'imagens_imoveis/703C/_0.jpg', 'imagens_imoveis/703C', 2, 'CÓDIGO:703', '2015-10-16', '200000', 'Bangu'),
(719, 'BANGU RUA AFRODITE', '1º Piso: \r\nVaranda, Sala, Banheiro Social, Cozinha e Área de Serviço.\r\n\r\n2º Piso: \r\nQuatro Quartos (Sendo uma Suíte com Sacada e um Com Sacada)\r\n\r\nE MAIS: Ampla Garagem, Dependência de Empregada e Banheiro de Apoio\r\n\r\n   Bangu \r\nRua Afrodite', 4, 'imagens_imoveis/751C/_0.jpg', 'imagens_imoveis/751C', 2, 'CÓDIGO:751', '2017-03-27', '480000', 'Bangu'),
(720, 'BANGU', 'Divisão de Cômodos: Sala, 3 Quartos (Sento uma suíte com Closet), Dois Banheiros Sociais, Ampla Sacada, Cozinha, Área de Serviço e Despensa\r\n\r\nE MAIS: Cozinha, Quarto e Banheiro de Apoio.\r\n\r\nCondomínio Com: Área para Churrasco\r\n\r\n         Bangu\r\nAvenida Ribeiro Dantas', 4, 'imagens_imoveis/752A/_0.jpg', 'imagens_imoveis/752A', 1, 'CÓDIGO:752', '2017-03-27', '480000', 'Bangu'),
(736, 'BANGU RUA GOULART DE ANDRADE', 'O Terreno possui 6 casas antigas, podendo serem reformadas ou demolidas para outro empreendimento\r\n\r\nMedidas: 8m X 65m\r\n\r\nTotal de 520m²\r\n\r\n      Bangu\r\nRua Goulart de Andrade', 0, 'imagens_imoveis/773C/_0.jpg', 'imagens_imoveis/773C', 3, 'CÓDIGO:773', '2017-02-08', '600000', 'Bangu'),
(769, 'SENADOR CAMARÁ RUA MARMIARI', 'Divisão de Cômodos: Sala, Dois Quartos, Cozinha Banheiro Social e Área de Serviço\r\n\r\nApartamento\r\nRua Marmiari', 2, 'imagens_imoveis/806A/_0.jpg', 'imagens_imoveis/806A', 1, 'CÓDIGO:806', '2018-08-30', '120000', 'Senador Camará'),
(772, 'BANGU RUA DOS ESTAMPADORES', 'Divisão de Cômodos: Sala, Dois Quartos (Sendo uma Suíte), Cozinha, Banheiro Social, Área de Serviço Área de Lazer Exclusiva com Telhado Retrátil Automatizado\r\n\r\n      Bangu\r\nRua dos Estampadores', 2, 'imagens_imoveis/809A/_0.jpg', 'imagens_imoveis/809A', 1, 'CÓDIGO:809', '2018-10-27', '360000', 'Bangu'),
(778, 'BANGU RUA SILVA CARDOSO', '1º Piso: Sala, Cozinha, Banheiro Social e Área de Serviço.\r\n\r\n2º Piso: Dois Quartos (Sendo um com Sacada) e Banheiro Social.\r\n\r\nE MAIS: Quintal da Frente, Lateral Direito, Quintal dos Fundos e Garagem\r\n\r\n     Bangu\r\nRua Silva Cardoso', 2, 'imagens_imoveis/864C/_0.jpg', 'imagens_imoveis/864C', 2, 'CÓDIGO:864', '2019-02-25', '340000', 'Bangu'),
(788, 'BANGU CONJUNTO DA MARINHA', '1º Piso: Sala, Cozinha, Banheiro Social e Área de Serviço\r\n\r\n2º Piso: Dois Quartos Sendo uma Suíte com Sacada e Banheiro Social\r\n\r\nE MAIS: Quintal da Frente com Garagem e Quintal dos Fundos\r\n\r\n              Bangu\r\nEstrada General Afonso de Carvalho', 2, 'imagens_imoveis/825C/_0.jpg', 'imagens_imoveis/825C', 2, 'CÓDIGO:825', '2019-06-10', '339000', 'Bangu'),
(790, 'BANGU CONJUNTO DA MARINHA', '1º Piso: Sala, Cozinha, Banheiro Social e Área de Serviço.\r\n\r\n2º Piso: Dois Quartos Sendo uma Suíte com Sacada e Banheiro Social\r\n\r\nE MAIS: Quintal da Frente Com Garagem e Quintal dos Fundos\r\n\r\n               Bangu\r\nEstrada General Afonso de Carvalho', 2, 'imagens_imoveis/827C/_0.jpg', 'imagens_imoveis/827C', 2, 'CÓDIGO:827', '2019-06-10', '349000', 'Bangu'),
(792, 'PADRE MIGUEL RUA TORONTO', 'Luxuosa Casa com Teto Rebaixado e Armários Embutidos.\r\n\r\nDivisão de Cõmodos: Sala, Dois Quartos, Cozinha, Banheiro Social e Área de Serviço\r\n\r\nE MAIS: Quintal da Frente com Garagem Coberta, Quintal dos Fundos Com Piscina, Área de Churrasco e Banheiro de Apoio\r\n\r\nPadre Miguel\r\nRua Toronto', 2, 'imagens_imoveis/829C/_0.jpg', 'imagens_imoveis/829C', 2, 'CÓDIGO:829', '2019-06-27', '490000', 'Outros Bairros'),
(793, 'BANGU RUA AGRÍCOLA', '1º Casa: Varanda, Sala, Três Quartos, Cozinha, Banheiro Social e Área de Serviço.\r\n\r\n2º Casa: Varando, Sala, Quarto, Cozinha, Banheiro Social e Área de Serviço.\r\n\r\n3º Casa (2° Piso): Varanda, Sala, Quarto, Cozinha, Banheiro Social e Área de Serviço\r\n\r\n4º Casa (2º Piso): Varanda, Sala, Dois Cômodos, Banheiro Social e Área de Serviço\r\n\r\n   Bangu\r\nRua Agrícola', 5, 'imagens_imoveis/830C/_0.jpg', 'imagens_imoveis/830C', 2, 'CÓDIGO:830', '2019-06-27', '450000', 'Bangu'),
(795, 'PADRE MIGUEL RUA MARIA DE CARVALHO', 'Divisão de Cômodos: Sala, Quarto, Cozinha, Banheiro Social e Área de Serviço\r\n\r\nCondomínio Com: Estacionamento, Quadra, Play, Área para Churrasco, Bicicletário e Salão de Festa\r\n\r\n   Padre Miguel\r\nRua Maria de Carvalho', 1, 'imagens_imoveis/832A/_0.jpg', 'imagens_imoveis/832A', 1, 'CÓDIGO:832', '2019-07-17', '100000', 'Padre Miguel'),
(802, 'BANGU RUA BANGU', '1º Piso: Varanda, Sala, Dois Quartos, Cozinha, Banheiro Social e Área de Serviç\r\n\r\n2ºPiso: Ampla Sala com Sacada, Banheiro Social, Dois Quartos (Sendo uma Suíte) e Terraço\r\n\r\nE MAIS: Garagem, Quintal da Frente, Amplo Quintal Lateral Esquerdo com Piscina e Quintal dos Fundos\r\n\r\n  Bangu\r\nRua Bangu\r\n', 4, 'imagens_imoveis/839C/_0.jpg', 'imagens_imoveis/839C', 2, 'CÓDIGO:839', '2019-10-01', '680000', 'Bangu'),
(804, 'REALENGO RUA NEPOMUCENO', '1º Piso: Sala, Cozinha, Banheiro Social, e Área de Serviço\r\n\r\n2º Piso: Dois Quartos Sendo um Com Sacada e Banheiro Social.\r\n\r\nServidão Com: Área para Churrasco e Estacionamento\r\n\r\n  Realengo\r\nRua Nepomuceno', 2, 'imagens_imoveis/841C/_0.jpg', 'imagens_imoveis/841C', 2, 'CÓDIGO:841', '2019-12-27', '90000', 'Realengo'),
(806, 'REALENGO RUA BERNARDO DE VASCONCEL', 'Divisão de Cômodos: Quintal (Com Possibilidade para Garagem), Sala, Dois Quartos, Cozinha, Banheiro Social e Área de Serviço\r\n\r\n        Realengo\r\nRua Bernardo de Vasconcelos', 2, 'imagens_imoveis/843C/_0.jpg', 'imagens_imoveis/843C', 2, 'CÓDIGO:843', '2019-12-27', '140000', 'Realengo'),
(807, 'PADRE MIGUEL ESTRADA DA ÁGUA BRANCA', 'Divisão de Cômodos: Sala, Dois Quartos, Cozinha, Banheiro Social e Área de Serviço\r\n\r\nE MAIS: Incluso no Condomínio, Quadra, Academia, Salão de Festas e Segurança 24hrs\r\n\r\n    Padre Miguel\r\nEstrada da Água Branca', 2, 'imagens_imoveis/844A/_0.jpg', 'imagens_imoveis/844A', 1, 'CÓDIGO:844', '2020-01-29', '140000', 'Outros Bairros'),
(810, 'BANGU RUA EDGAR LIMA', '1º Piso: Varanda, Sala de Dois Ambientes, Copa-Cozinha com Despensa, Banheiro Social, e Área de Serviço\r\n\r\n2º Piso: Quatro Quartos Sendo Um Closet e Banheiro Social\r\n\r\nE MAIS: Garagem Para Dois Carros, Quintal da Frente, Dos Fundos e Área Para Churrasco\r\n\r\n    Bangu\r\nRua Edgar Lima', 4, 'imagens_imoveis/847C/_0.jpg', 'imagens_imoveis/847C', 2, 'CÓDIGO:847', '2020-02-27', '500000', 'Bangu'),
(812, 'REALENGO RUA MONERÁ', 'Divisão de Cômodos: Sala Dois Ambientes, Três Quartos, Cozinha, Banheiro Social e Área de Serviço.\r\n\r\nE MAIS: Garagem Coberta, Amplo Quintal da Frente, Lateral Direito e Dos Fundos\r\n\r\n   Bangu\r\nRua Monerá', 3, 'imagens_imoveis/849C/_0.jpg', 'imagens_imoveis/849C', 2, 'CÓDIGO:849', '2020-04-03', '260000', 'Realengo'),
(813, 'BANGU AVENIDA DOUTORA MARIA ESTR', 'Divisão de Cômodos: Sala, Dois Quartos, Banheiro Social, Cozinha e Área de Serviço\r\n\r\nCondomínio Com: Segurança 24hrs, Quadra e Estacionamento\r\n\r\n           Bangu\r\nAvenida Doutora Maria Estrea', 2, 'imagens_imoveis/822A/_0.jpg', 'imagens_imoveis/822A', 1, 'CÓDIGO:822', '2020-05-02', '170000', 'Bangu'),
(814, 'BANGU RUA ULPIANO', 'Divisão de Cômodos: Ampla Sala, Dois Quartos sendo uma Suíte, Banheiro Social, Cozinha, Área e Área de Serviço.\r\n\r\nE MAIS: Quintal na Frente, Lateral Direito com Garagem Coberta, Quintal dos Fundos, e Quarto de Apoio.\r\n\r\nEdícula Com: Quarto, Banheiro e Cozinha\r\n\r\n   Bangu\r\nRua Ulpiano', 3, 'imagens_imoveis/850C/_0.jpg', 'imagens_imoveis/850C', 2, 'CÓDIGO:850', '2020-05-02', '400000', 'Bangu'),
(816, 'BANGU ESTRADA DA ÁGUA BRANCA', 'Divisão de Cômodos: Sala, Dois Quartos, Banheiro Social, Cozinha e Área de Serviço\r\n\r\n        Bangu\r\nEstrada da Água Branca', 2, 'imagens_imoveis/852A/_0.jpg', 'imagens_imoveis/852A', 1, 'CÓDIGO:852', '2044-03-09', '140000', 'Bangu'),
(820, 'BANGU AVENIDA MINISTRO ARY FRA', 'Divisão de Cômodos: Sala com Sacada, 2 Quartos, Cozinha, Banheiro Social e Área de Serviço\r\n\r\nCondomínio Com: Porteiro 24Hrs, Parqueamento, Piscina, Salão de Festa, Play, Área de Churrasco e Área para Jogos\r\n\r\n          Bangu\r\nAvenida Ministro Ary Franco\r\n  Condomínio Green Park', 2, 'imagens_imoveis/854A/_0.jpg', 'imagens_imoveis/854A', 1, 'CÓDIGO:854', '2020-08-07', '180000', 'Outros Bairros'),
(822, 'TAQUARA RUA APIACÁS', 'Divisão de Cômodos: Sala com Sacada, Dois Quartos Sendo uma Suíte, Cozinha, Banheiro Social e Área de Serviço.\r\n\r\nCondomínio com: Porteiro 24hrs, Parqueamento, Piscina, Salão de Festa, Play, Área de Churrasco, Área para Jogos, Quadra, Bicicletário\r\n\r\n Taquara\r\nRua Apiacás', 2, 'imagens_imoveis/856A/_0.jpg', 'imagens_imoveis/856A', 1, 'CÓDIGO: 856', '2020-10-16', '270000', 'Taquara'),
(823, 'REALENGO RUA SILVA NETO', 'Divisão de Cômodos: Varanda, Sala, Dois Quartos, Cozinha, Banheiro Social, Banheiro de Apoio, Área de Serviço e Terraço Coberto.\r\n\r\nE MAIS: Quintal da Frente e Garagem Para Três Carros\r\n\r\n  Realengo\r\nRua Silva Neto', 2, 'imagens_imoveis/857C/_0.jpg', 'imagens_imoveis/857C', 2, 'CÓDIGO:857', '2020-10-29', '280000', 'Realengo'),
(824, 'REALENGO RUA NELSON CAVAQUINHO', '1º Piso: Varanda, Sala, Cozinha, Banheiro Social e Área de Serviço.\r\n\r\n2º Piso: Hall de Distribuição, Três Quartos, Sendo uma Suíte com Closet e Banheiro Social.\r\n\r\n3º Piso: Amplo Terraço de Parte Coberta\r\n\r\nE MAIS: Garagem, Quintal da Frente e Amplo Quintal dos Fundos Com Quarto de Apoio.\r\n\r\n    Realengo\r\nRua Nelson Cavaquinho', 3, 'imagens_imoveis/858C/_0.jpg', 'imagens_imoveis/858C', 2, 'CÓDIGO:858', '2020-11-06', '500000', 'Realengo'),
(827, 'BANGU RUA AFRODITE', '1º Piso: Sala, Cozinha, Banheiro Social e Área de Serviço\r\n\r\n2º Piso: Dois Quartos Sendo Um Com Sacada e Banheiro Social\r\n\r\nE MAIS: Quintal da Frente com Garagem, Quarto e Varando dos Fundos com Banheiro de Apoio\r\n\r\n     Bangu\r\n  Rua Afrodite\r\nParque Leopoldina\r\n', 3, 'imagens_imoveis/861C/_0.jpg', 'imagens_imoveis/861C', 2, 'CÓDIGO:861', '2021-01-13', '350000', 'Bangu'),
(828, 'BANGU RUA PARIS VIANA', '1º Piso: Varanda, Sala Dois Ambientes, Cozinha, Banheiro Social, Banheiro de Apoio, Área de Serviço e Quarto de Despejo\r\n\r\n2º Piso: Quatro Quartos sendo uma Suíte com Closet, Sacada e Banheiro Social\r\n\r\nE MAIS: Quintal da Frente, Garagem, Quintal dos Fundos com Piscina e Área para Churrasco', 4, 'imagens_imoveis/862C/_0.jpg', 'imagens_imoveis/862C', 2, 'CÓDIGO:862', '2021-01-27', '900000', 'Bangu'),
(829, 'BANGU RUA BOÁRIA', '1º Piso: Ampla Sala, Cozinha Americana, Banheiro Social e Área de Serviço\r\n\r\n2º Piso: Três Quartos (Sendo um com Sacada e Cômodo com Encanamento Para Futuro Banheiro ou Closet) e Banheiro Social\r\n\r\nE MAIS: Amplo Quintal da Frente Com Garagem, Piscina e Quintal dos Fundos\r\n\r\n  Bangu\r\nRua Boária', 3, 'imagens_imoveis/863C/_0.jpg', 'imagens_imoveis/863C', 2, 'CÓDIGO:863', '2021-01-28', '350000', 'Bangu'),
(830, 'BANGU RUA FRANCISCO FRANCO', '1º Piso: Varanda, Sala, Cozinha, Banheiro Social e Área de Serviço\r\n\r\n2º Piso: Hall de Distribuição, Dois Quartos Sendo um Com Sacada.\r\n\r\nE MAIS: Garagem, Quintal da Frente, Quintal Lateral Esquerdo e dos Fundos\r\n\r\n      Bangu\r\nRua Francisco Franco', 2, 'imagens_imoveis/865C/_0.jpg', 'imagens_imoveis/865C', 2, 'CÓDIGO:865', '2021-03-16', '300000', 'Bangu'),
(831, 'BANGU GREEN PARK', 'Divisão de Cômodos: Sala com Sacada, 2 Quartos, Cozinha, Banheiro Social e Área de Serviço\r\n\r\nCondomínio Com: Porteiro 24Hrs, Parqueamento, Piscina, Salão de Festa, Play, Área para Churrasco e Área de Jogos\r\n\r\n          Bangu\r\nAvenida Ministro Ary Franco\r\n  Condomínio Green Park', 2, 'imagens_imoveis/866A/_0.jpg', 'imagens_imoveis/866A', 1, 'CÓDIGO:866', '2021-04-17', '200000', 'Outros Bairros'),
(832, 'JABOUR RUA SILVIO FONTES', 'Divisão de Cômodos: Sala, 2 Quartos, Dependência, Cozinha, Banheiro Social, Lavabo e Área de Serviço\r\n\r\nCondomínio Com: Porteiro 24hrs, Salão de Festa, Área de Churrasco e Área de Lazer\r\n\r\n    Jabour\r\nRua Silvio Fontes', 2, 'imagens_imoveis/867A/_0.jpg', 'imagens_imoveis/867A', 1, 'CÓDIGO:867', '2021-04-29', '160000', 'Senador Camará'),
(833, 'SENADOR CAMARÁ AV. SANTA CRUZ', 'Divisão de Cômodos: Sala, Dois Quartos (Sendo uma Suíte), Banheiro Social, Cozinha e Área de Serviço\r\n\r\nCondomínio Com: Piscina, Área para Churrasco, Quadra, Play, Parqueamento\r\n\r\n  Senador Camará\r\nAvenida Santa Cruz', 2, 'imagens_imoveis/868A/_0.jpg', 'imagens_imoveis/868A', 1, 'CÓDIGO:868', '2021-06-01', '180000', 'Senador Camará'),
(834, 'BANGU RUA CANDIDO VIANNA DE LIMA', '1º Piso: Varanda, Sala, Três Quartos Sendo Duas Suítes, Cozinha, Banheiro Social e Área de Serviço\r\n\r\n2º Piso: Amplo Terraço Parte Coberta com Banheiro Social e Quarto\r\n\r\nE MAIS: Garagem, Quinta da Frente e Quintal dos Fundos.\r\n\r\n         Bangu\r\nRua Candido Vianna de Lima \r\n    Parque Leopoldina', 4, 'imagens_imoveis/869C/_0.jpg', 'imagens_imoveis/869C', 2, 'CÓDIGO:869', '2021-06-02', '520000', 'Bangu'),
(835, 'BANGU RUA MANOEL DA CRUZ', '1º Piso: Sala, Dois Quartos, Cozinha, Banheiro Social e Área de Serviço.\r\n\r\nTerraço: Terraço Parte Coberta e Parte Descoberta\r\n\r\nE MAIS: Garagem, Quintal da Frente e dos Fundos com Área de Churrasco e Banheiro de Apoio', 2, 'imagens_imoveis/870C/_0.jpg', 'imagens_imoveis/870C', 2, 'CÓDIGO:870', '2021-06-11', '490000', 'Bangu'),
(836, 'BANGU RUA JACINTO ALCIDES', '1º Piso: Varanda, Sala, Cozinha Americana, Lavabo e Área de Serviço.\r\n\r\n2º Duas Suítes Conversíveis, Sendo Uma com Sacada.\r\n\r\nE MAIS: Servidão com Vaga de Garagem Coberta.\r\n\r\n     Bangu\r\nRua Jacinto Alcides', 2, 'imagens_imoveis/871C/_0.jpg', 'imagens_imoveis/871C', 2, 'CÓDIGO:871', '2021-07-14', '250000', 'Bangu'),
(837, 'REALENGO RUA LIMITES', '1º Piso: Varanda, Sala, Cozinha Americana, Lavabo e Área de Serviço\r\n\r\n2º Piso: Duas Suítes Conversíveis\r\n\r\nE MAIS: Servidão com Vaga de Garagem\r\n\r\n Realengo\r\nRua Limites', 2, 'imagens_imoveis/872C/_0.jpg', 'imagens_imoveis/872C', 2, 'CÓDIGO:872', '2021-07-15', '250000', 'Bangu'),
(838, 'BANGU RUA COBÉ', '1º Casa: Amplo Quintal da Frente com Garagem, Varanda, Sala, Dois Quartos (Sendo uma Suíte), Cozinha Banheiro Social e Área de Serviço\r\n\r\n2° Casa: Quintal da Frente, Sala, Quarto, Cozinha, Banheiro Social e Área de Serviço\r\n\r\n Bangu\r\nRua Cobé', 3, 'imagens_imoveis/873C/_0.jpg', 'imagens_imoveis/873C', 2, 'CÓDIGO:873', '2021-07-15', '350000', 'Outros Bairros'),
(839, 'BANGU RUA WASHINGTON LIMA', '1º Piso: Varanda, Sala Dois Ambientes, Sala de Jantar, Cozinha, Dois Quartos Sendo uma Suíte, Banheiro Social e Área de Serviço\r\n\r\n2º Piso: Terraço Coberto com Telhado Colonial, Churrasqueira com Bancada, Cozinha, Banheiro, Sauna Piscina e Quarto de Despejo.\r\n\r\nE MAIS: Quintal da Frente e Garagem para 3 Carros.\r\n\r\nPermanecerá no Imóvel: O Bar da Sala com 3 Banquetas, Armários Embutidos da Cozinha, Armários Embutidos da Suíte, Mesa do Terraço com 12 Cadeiras, Ares-Condicionados dos Quartos\r\n\r\n   ', 2, 'imagens_imoveis/874C/_0.jpg', 'imagens_imoveis/874C', 2, 'CÓDIGO:874', '2021-07-16', '800000', 'Bangu'),
(840, 'SULACAP RUA OTTON DA FONSECA', 'Divisão de Cômodos: Sala, Dois Quartos, Banheiro Social, Cozinha e Área de Serviço.\r\n\r\nCondomínio Com: Porteiro 24hrs, Estacionamento, Quadra, Área para Churrasco, Salão de Festa com Banheiro Masculino e Feminino\r\n\r\n     Sulacap\r\nRua Otton da Fonseca', 2, 'imagens_imoveis/875A/_0.jpg', 'imagens_imoveis/875A', 1, 'CÓDIGO:875', '2021-08-09', '160000', 'Outros Bairros'),
(841, 'BANGU RUA JOSÉ CAMPOS BARRETO', 'Medidas do Terreno: 9m Frente, 9m Fundos, 25m Lado Esquerdo e 25m Lado Direito\r\n\r\nAo todo 225m²\r\n\r\n        Bangu\r\nRua José Campos Barreto', 0, 'imagens_imoveis/876T/_0.jpg', 'imagens_imoveis/876T', 3, 'CÓDIGO:876', '2021-08-16', '200000', 'Bangu'),
(842, 'REALENGO ESTRADA DA ÁGUA BRANCA', '1º Casa (1º Piso): Varanda, Sala, Dois Quartos, Sendo uma Suíte, Banheiro Social, Cozinha e Área de Serviço.\r\n\r\nE MAIS: Amplo Quintal da Frente com Garagem Para até 6 Carros\r\n\r\n2º Casa: (2º Piso): Varanda, Sala, Quarto, Cozinha e Banheiro Social\r\n\r\nE MAIS: Quintal Da Frente Com Garagem\r\n\r\n       Realengo\r\nEstrada da Água Branca', 3, 'imagens_imoveis/877C/_0.jpg', 'imagens_imoveis/877C', 2, 'CÓDIGO:877', '2021-08-16', '350000', 'Realengo'),
(843, 'BANGU RUA SIMÃO CRISTINO', '1º Piso: Varanda, Sala, Dois Quartos, Ampla Cozinha e Banheiro Social\r\n\r\n2º Piso: Dois Quartos e Banheiro Social\r\n\r\nSubsolo: Amplo Porão Com Cozinha, Banheiro e Área de Serviço\r\n\r\nE MAIS: Quintal da Frente Com Garagem e Quintal Lateral Esquerdo\r\n\r\n     Bangu\r\nRua Simão Cristino', 4, 'imagens_imoveis/878C/_0.jpg', 'imagens_imoveis/878C', 2, 'CÓDIGO:878', '2021-08-23', '280000', 'Bangu'),
(844, 'SENADOR CAMARÁ RUA ALBINO PAIVA', '1º Piso: Servidão, Sala, Quarto, Cozinha, Banheiro Social e Área de Serviço.\r\n\r\n2º Piso: Distribuição, Dois Quartos Sendo uma Suíte e Sacada.\r\n\r\n Senador Camará\r\nRua Albino Paiva', 3, 'imagens_imoveis/879C/_0.jpg', 'imagens_imoveis/879C', 2, 'CÓDIGO:879', '2021-08-30', '140000', 'Senador Camará');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `user` varchar(15) NOT NULL,
  `senha` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id_imoveis`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id_imoveis` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=845;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
