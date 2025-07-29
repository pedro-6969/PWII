-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/05/2025 às 22:10
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--
CREATE DATABASE IF NOT EXISTS `escola` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `escola`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
(68, 'Batman', 'robin'),
(69, 'Diogo', 'jacare'),
(70, 'Mulher-Maravilha', 'lacoouro'),
(71, 'Tempestade', 'tempestade123'),
(72, 'Jean Grey', 'fenix'),
(73, 'Vampira', 'absorcao'),
(74, 'Feiticeira Escarlate', 'chaosmagic'),
(75, 'Viúva Negra', 'widowsbite'),
(76, 'Hera Venenosa', 'plantas'),
(77, 'Mulher-Gato', 'selinakyle'),
(78, 'Mística', 'shapeshifter'),
(79, 'Emma Frost', 'diamondform'),
(80, 'Capitã Marvel', 'binarypower'),
(81, 'Gamora', 'thanosdaughter'),
(82, 'Nebulosa', 'cybernetic'),
(83, 'Mantis', 'empatica'),
(84, 'Jessica Jones', 'alias'),
(85, 'Sue Storm', 'invisibilidade'),
(86, 'Rogue', 'forcaabsorvida'),
(87, 'Zatanna', 'magicwords'),
(88, 'Ravena', 'azarath'),
(89, 'Starfire', 'tamaran'),
(90, 'She-Hulk', 'verdejustica'),
(91, 'Batgirl', 'oraclegotham'),
(92, 'Arlequina', 'pudim'),
(93, 'Caçadora de Marte', 'marsforever'),
(94, 'Power Girl', 'krypton2'),
(95, 'Miss Marvel', 'embiggen'),
(96, 'Enchantress', 'seidrmagic'),
(97, 'Trinity', 'matrixcode'),
(98, 'Bomba Relógio', 'ticktock'),
(99, 'Elektra', 'ninjasai'),
(100, 'Superman', 'krypton'),
(101, 'WonderWoman', 'themyscira'),
(102, 'Flash', 'speedforce'),
(103, 'GreenLantern', 'ring123'),
(104, 'Aquaman', 'atlantis'),
(105, 'Cyborg', 'boomtube'),
(106, 'Robin', 'batcave'),
(107, 'Joker', 'hahaha'),
(108, 'HarleyQuinn', 'puddin'),
(109, 'LexLuthor', 'kryptonite');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
