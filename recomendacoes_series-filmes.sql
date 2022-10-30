-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2022 às 06:07
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
-- Banco de dados: `recomendacoes_series-filmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_titulos`
--

CREATE TABLE `tb_titulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `voto_recomenda` int(11) NOT NULL DEFAULT 0,
  `voto_nao_recomenda` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_titulos`
--

INSERT INTO `tb_titulos` (`id`, `titulo`, `usuario_id`, `voto_recomenda`, `voto_nao_recomenda`) VALUES
(2, 'The Witcher', 1, 7, 8),
(3, 'Interestelar', 2, 5, 5),
(5, 'Warcraft', 2, 3, 1),
(13, 'The Walking Dead', NULL, 0, 0),
(14, 'Tekken', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `usuario`, `senha`, `email`) VALUES
(1, 'Tester', '123456', 'tester@teste.com'),
(2, 'Junnyldo', '81655032', 'junnycmenezes@gmail.com'),
(4, 'Josivaldo', '123456', 'josivaldo@teste.com'),
(5, 'Belma', '8165', 'belma@gmail.com'),
(9, 'usuarioTeste', '123', 'usuario@teste.com'),
(10, 'teste1', '123', 'teste1@teste.com'),
(11, 'tester2', '123', 'tester2@teste.com'),
(12, 'Júlio', '321', 'julio@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_titulos`
--
ALTER TABLE `tb_titulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_id` (`usuario_id`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`usuario`) USING BTREE;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_titulos`
--
ALTER TABLE `tb_titulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_titulos`
--
ALTER TABLE `tb_titulos`
  ADD CONSTRAINT `fk_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `tb_usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
