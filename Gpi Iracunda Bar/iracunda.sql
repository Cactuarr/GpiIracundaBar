-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 12:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iracunda`
--

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `idhorario` int(11) NOT NULL,
  `nombreproveedor` text NOT NULL,
  `fechapago` date NOT NULL,
  `montopago` text NOT NULL,
  `notapago` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horario`
--

INSERT INTO `horario` (`idhorario`, `nombreproveedor`, `fechapago`, `montopago`, `notapago`) VALUES
(2, 'fgh', '2022-12-31', '1.000.000', 'año nuevo');

-- --------------------------------------------------------

--
-- Table structure for table `inventario`
--

CREATE TABLE `inventario` (
  `nombre` varchar(20) NOT NULL,
  `codigo` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `Proveedoractual` text NOT NULL,
  `Precio` int(11) NOT NULL,
  `notificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventario`
--

INSERT INTO `inventario` (`nombre`, `codigo`, `stock`, `Proveedoractual`, `Precio`, `notificacion`) VALUES
('Prueba', 1, 1000, 'Juan', 100, 500),
('Prueba notificacion', 2, 500, 'Juan', 2500, 600),
('Prueba notificacion ', 3, 1000, 'Juana', 5000, 2000),
('Prueba 3', 4, 5000, 'Juan', 500, 1450),
('prueba 4', 5, 1000, 'joseto', 45, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `idp` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `correo` text NOT NULL,
  `telefono` text NOT NULL,
  `likert` set('Nada satisfecho','Poco satisfecho','Neutral','Muy satisfecho','Totalmente satisfecho') NOT NULL,
  `banco` text NOT NULL,
  `cuenta` set('Cuenta corriente','Cuenta vista','','') NOT NULL,
  `numerocuenta` text NOT NULL,
  `nota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`idp`, `nombre`, `correo`, `telefono`, `likert`, `banco`, `cuenta`, `numerocuenta`, `nota`) VALUES
(39, 'RIVERA FOOD LTDA', 'TEST@Gmail.com', '+569 9999 9999', 'Totalmente satisfecho', 'Bancoestado', 'Cuenta corriente', '9999999999', 'FRUTAS Y VERDURAS'),
(40, 'WALUNG', 'TEST@Gmail.com', '+569 9999 9999', 'Totalmente satisfecho', 'Banco de chile', 'Cuenta vista', '9999999999', 'CERVEZA'),
(41, 'NACH', 'TEST@Gmail.com', '+569 9999 9999', 'Totalmente satisfecho', 'Bancoestado', 'Cuenta corriente', '9999999999', 'KOMBUCHA Y CERVEZA'),
(42, 'INTRINSICAL', 'TEST@Gmail.com', '+569 9999 9999', 'Poco satisfecho', 'Banco de chile', 'Cuenta vista', '9999999999', 'CERVEZA'),
(43, 'GIN OUIJA', 'TEST@Gmail.com', '+569 9999 9999', 'Neutral', 'Bancoestado', 'Cuenta vista', '9999999999', 'GIN'),
(44, 'CHAÑARAL DE CARÉN', 'TEST@Gmail.com', '+569 9999 9999', 'Totalmente satisfecho', 'Bancoestado', 'Cuenta corriente', '9999999999', 'PISCO ARTESANAL'),
(45, 'PRISA', 'TEST@Gmail.com', '+569 9999 9999', 'Poco satisfecho', 'Banco de chile', 'Cuenta corriente', '9999999999', 'ARTÍCULO DE ASEO Y OFICINA'),
(46, 'MALA IDEA', 'TEST@Gmail.com', '+569 9999 9999', 'Neutral', 'Banco de chile', 'Cuenta vista', '9999999999', 'CERVEZA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'iracunda', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`idhorario`);

--
-- Indexes for table `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idp`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `idhorario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
