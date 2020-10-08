-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2020 às 19:43
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `nome`, `email`, `password`) VALUES
(1, 'Administrador', 'admin@loja.com', '$2y$10$I4m8shoIG5yPmrQEMKpOn.BCy4c7r7w5Rs9dI1q9JPBbwGoy4TDXS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `num_prod` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `num_prod`, `user`, `quantidade`) VALUES
(3, 29542147, 10, 1),
(4, 31504119, 10, 2),
(6, 22482665, 10, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'ofertas'),
(2, 'televisores'),
(3, 'geladeiras'),
(4, 'fogao'),
(5, 'lavadoras'),
(6, 'notebooks'),
(7, 'celulares'),
(8, 'xiaomi'),
(9, 'apple'),
(10, 'games'),
(11, 'ipad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `nome`) VALUES
(1, 'Grátis'),
(2, 'PagSeguro'),
(3, 'PayPal'),
(4, 'Boleto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `numero` int(31) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `promo` double NOT NULL,
  `preco` double NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `categoria` varchar(250) NOT NULL,
  `vendidos` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `numero`, `titulo`, `promo`, `preco`, `descricao`, `foto`, `quantidade`, `categoria`, `vendidos`) VALUES
(1, 35051917, 'Smart TV LED 65\" Samsung RU7100 UHD 4K com Conversor Digital 3 HDMI 2 USB Wi-Fi - Hdr Premium - Bluetooth', 1799.900001, 3599.900001, 'TV LED 65 POLEGADAS', 'tv_samsung_65.jpg', 1, 'Televisores', 0),
(2, 29542147, 'Smart TV LED 55\" Samsung RU7100 UHD 4K com Conversor Digital 3 HDMI 2 USB Wi-Fi - Hdr Premium - Bluetooth', 1199.900001, 2399.90001, 'TV LED SAMSUNG 55 POLEGADAS', 'tv_samsung55.jpg', 5, 'Televisores', 0),
(3, 32017088, 'Smart TV LED 43\' Samsung RU7100 UHD 4K com Conversor Digital 3 HDMI 2 USB Wi-Fi - Hdr Premium - Bluetooth', 799.900001, 1599.900001, 'Descrição da TV', 'tv_samsung43.jpg', 15, 'televisores', 0),
(4, 22432903, 'Smart TV LED 50\' Samsung RU7100 UHD 4K com Conversor Digital 3 HDMI 2 USB Wi-Fi - Hdr Premium - Bluetooth', 999.9000001, 1999.900001, 'Descrição da TV', 'tv_samsung50.jpg', 10, 'televisores', 0),
(5, 36312661, 'Fogão De Piso Brastemp 4 Bocas BFO4N Branco - Bivolt', 799.90001, 399.90001, 'Descrição do fogão', 'fogao.jpg', 0, 'fogao', 0),
(6, 27389073, 'Geladeira / Refrigerador Brastemp Frost Free BRM44 375 Litros', 899.90001, 1799.90001, 'Descrição da geladeira', 'geladeira3.jpg', 2, 'geladeiras', 0),
(7, 31504119, 'Geladeira/Refrigerador Brastemp Frost Free BRM44 375 Litros - Evox', 1199.90001, 2399.90001, 'Descrição da geladeira', 'geladeira.png', 5, 'geladeiras', 0),
(8, 22919204, 'Geladeira / Refrigerador Brastemp Side Inverse BRO80 540 Litros Ice Maker Evox', 2499.9000001, 4999.90001, 'Descrição da geladeira', 'geladeira2.jpg', 4, 'geladeiras', 0),
(9, 30703407, 'Máquina de Lavar | Lavadora de Roupa Electrolux 10,5Kg - LAC11', 1399.9001, 699.9000001, 'Descrição da lavadora', 'maquina.jpg', 3, 'lavadoras', 0),
(10, 30830802, 'Notebook Lenovo Ideapad S145 - Intel Celeron - 4GB - 500GB', 899.90001, 1799.9000001, 'Descrição do notebook', 'notebook.jpg', 1, 'notebooks', 0),
(11, 28207294, 'Notebook Lenovo Ideapad S145 - Intel I5 - 8GB - 1TB', 1399.90001, 2799.9000001, 'Descrição do notebook', 'notebook.jpg', 3, 'notebooks', 0),
(12, 22482665, 'Notebook Lenovo Ideapad S145 - Intel I7 - 8GB - 1TB', 1599.900001, 3199.9000001, 'Descrição do notebook', 'notebook.jpg', 1, 'notebooks', 0),
(13, 20428134, 'Celular / Smartphone Samsung Galaxy S9+ Dual Chip Android 8.0 Tela 6.2\' Octa-Core 2.8GHz 128GB 4G Câmera 12MP Dual Cam', 999.9000001, 1999.9000001, 'Descrição do celular', 's9.png', 8, 'celulares', 0),
(14, 24748294, 'Pulseira Inteligente Xiaomi Mi Band 4 XM, Resistente Água, Bluetooth, Preta', 0, 129.90001, 'Descrição da Pulseira', 'mi_band.jpg', 20, 'xiaomi', 0),
(15, 26477696, 'Apple iPad PRO - Tela de 11\" - 64GB Wi-Fi + Celular\"', 0, 6799.90001, 'Descrição do iPad', 'ipad.png', 5, 'ipad', 0),
(16, 38206586, 'Apple iPad PRO - Tela de 12.9\" - 64GB Wi-Fi + Celular', 0, 8199.90001, 'Descrição do iPad', 'ipad.png', 5, 'ipad', 0),
(17, 26691736, 'Nintendo Switch 32GB', 0, 1599.90001, 'Descrição do Nintendo', 'nintendo.jpg', 6, 'games', 0),
(18, 25366948, 'Notebook Lenovo IdeaPad S145 Intel Core i5 8265U 15,6\" 8GB HD 1 TB Windows 10 8ª Geração', 0, 1899.90001, 'Descrição do Notebook', 'notebook2.jpg', 6, 'notebooks', 0),
(19, 33508519, 'Smartphone Xiaomi Mi 9SE - Tela de 5.97\" - 128GB - 48MP', 0, 1499.90001, 'Descrição do Celular', '9se.jpg', 3, 'celulares', 0),
(20, 36723784, 'Smartphone Samsung Galaxy Note 10, 256GB, 16MP, Tela 6.3\'', 0, 2899.90001, 'Descrição do Celular', 'note10.jpg', 3, 'celulares', 0),
(21, 30114786, 'Notebook Gamer Samsung Odyssey, Intel Core i5-7300HQ, 8GB, HD 1TB, NVIDIA GeForce GTX 1050 4GB, Windows 10 Home, 15.6\'', 0, 2899.90001, 'Descrição do Notebook', 'notebook_gamer.jpg', 3, 'notebooks', 0),
(22, 25141626, 'Sony Playstation 4 Slim - 1TB', 0, 1399.90001, 'Descrição do PlayStation', 'ps4.jpg', 3, 'games', 0),
(23, 33204126, 'Smartphone Samsung Galaxy S10, 128GB, 16MP, Tela 6.1\'', 0, 2299.90001, 'Descrição do Celular', 's10.jpg', 3, 'celulares', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `sobrenome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_nasc` date NOT NULL,
  `rg` varchar(15) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `sexo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `senha`, `data_cadastro`, `data_nasc`, `rg`, `cpf`, `sexo`) VALUES
(10, 'Testador', 'do Sistema', 'testador@dosistema.com', '$2y$10$slM/S0KiI87rqUzijsqJm.jbdMUoteiYAeun0mtFzQnlJyN56LEl.', '2020-09-17', '2000-12-28', '1212312312', '12312312312', 'M');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `endereco` text NOT NULL,
  `valor` float NOT NULL,
  `forma_pagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
