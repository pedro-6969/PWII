-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/06/2025 às 05:33
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rodasquentes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `anuncio`
--

CREATE TABLE `anuncio` (
  `titulo_anuncio` varchar(255) NOT NULL,
  `descricao_anuncio` varchar(255) NOT NULL,
  `data_publicacao` varchar(255) NOT NULL,
  `marca_veiculo` varchar(255) NOT NULL,
  `modelo_veiculo` varchar(255) NOT NULL,
  `ano_veiculo` varchar(255) NOT NULL,
  `cor_veiculo` varchar(255) NOT NULL,
  `placa_veiculo` varchar(255) NOT NULL,
  `nome_proprietario` varchar(255) NOT NULL,
  `telefone_proprietario` varchar(255) NOT NULL,
  `imagem_veiculo` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `anuncio`
--

INSERT INTO `anuncio` (`titulo_anuncio`, `descricao_anuncio`, `data_publicacao`, `marca_veiculo`, `modelo_veiculo`, `ano_veiculo`, `cor_veiculo`, `placa_veiculo`, `nome_proprietario`, `telefone_proprietario`, `imagem_veiculo`, `id`) VALUES
('Fuscão Preto', 'Fuscão preto, você é feito de aço, fez o meu peito em pedaço, também aprendeu a matar.', '29/10/2022', 'Volkswagen', 'Volkswagen Fusca', '1990', 'Preto', 'TRI1O69', 'Barrerito', '15 99999 8888', '685cb766bfecc-fuscao preto.png', 14),
('Máquina do Mistério', 'Van utilizada pelo Mistério S/A', '12/11/2023', 'Chevrolet', 'Chevrolet G10', '1972', 'Verde, azul e laranja', 'MYST3RY', 'Salsicha', '15 99221 1575', '685cb8d25785f-da16896ea58e964fcc76cf024dd1053a.png', 16);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
