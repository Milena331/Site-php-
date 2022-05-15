-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Maio-2022 às 19:39
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adocao`
--

CREATE TABLE `adocao` (
  `id_adocao` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `id_guardiao_do_pet` int(11) NOT NULL,
  `data_adocao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adocao`
--

INSERT INTO `adocao` (`id_adocao`, `id_pet`, `id_guardiao_do_pet`, `data_adocao`) VALUES
(1, 6, 1, '2022-05-13 18:18:04'),
(2, 6, 1, '2022-05-13 18:18:26'),
(3, 6, 1, '2022-05-13 18:18:34'),
(4, 5, 1, '2022-05-13 18:26:09'),
(5, 7, 1, '2022-05-15 10:39:16'),
(6, 9, 24, '2022-05-15 11:49:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE `animais` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `especie` varchar(100) NOT NULL,
  `sexo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`id`, `nome`, `especie`, `sexo`) VALUES
(5, 'Lucas', 'gato', 'macho'),
(6, 'Pricila', 'gato', 'femea'),
(7, 'Paulo', 'cao', 'macho'),
(9, 'Botas', 'gato', 'macho'),
(10, 'Bolt', 'cao', 'macho'),
(11, 'Adam', 'cao', 'macho'),
(12, 'Suzam', 'gato', 'femea'),
(13, 'Lucie', 'cao', 'femea'),
(14, 'Mortícia', 'gato', 'femea'),
(15, 'Thor', 'cao', 'macho'),
(16, 'Julia', 'gato', 'macho'),
(17, 'Joshua', 'gato', 'femea');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tamanho` varchar(100) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `senha`, `tamanho`, `sexo`, `cidade`) VALUES
(1, 'Yasmin', 'assisyasmin593@gmail.com', '86227235', 'grande', 'femea', 'gravatai'),
(2, 'Lucia', 'lucia@gmail.com', '123456789', 'grande', 'Feema', 'Florianópolis'),
(18, 'joana', 'joana@gmail.com', '123456', 'aaa', 'aaaa', 'aaaa'),
(20, 'Marcia', 'marcia@gmail.com', '123456789', 'grande', 'femea', 'aaaa'),
(22, 'Julinha Med', 'Julinha@gmail.com', '123456789', 'enorme', 'femea', 'Gravataí'),
(23, 'YASMIN ASSIS COSTA', 'joaninha593@gmail.com', '123', 'enorme', 'femea', 'Gravataí'),
(24, 'Filssen Schreiber', 'filssen@outlook.com', '1702', 'Enorme', 'Indermenidado', 'Cachoeirinha');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adocao`
--
ALTER TABLE `adocao`
  ADD PRIMARY KEY (`id_adocao`),
  ADD KEY `fk_cadastro` (`id_guardiao_do_pet`),
  ADD KEY `fk_animais` (`id_pet`);

--
-- Índices para tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adocao`
--
ALTER TABLE `adocao`
  MODIFY `id_adocao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `adocao`
--
ALTER TABLE `adocao`
  ADD CONSTRAINT `fk_animais` FOREIGN KEY (`id_pet`) REFERENCES `animais` (`id`),
  ADD CONSTRAINT `fk_cadastro` FOREIGN KEY (`id_guardiao_do_pet`) REFERENCES `cadastro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
