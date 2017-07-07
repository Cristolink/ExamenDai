

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



CREATE TABLE `atencion` (
  `idAtencion` int(11) NOT NULL,
  `fechaAtencion` date NOT NULL,
  `rutPaciente` int(11) NOT NULL,
  `rutMedico` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `atencion`
--

INSERT INTO `atencion` (`idAtencion`, `fechaAtencion`, `rutPaciente`, `rutMedico`, `idEstado`) VALUES
(1, '2017-07-21', 19585652, 19585652, 1),
(2, '0000-00-00', 15894841, 0, 0),
(3, '0000-00-00', 15894841, 0, 0),
(4, '0000-00-00', 15894841, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `especialidad`
--

CREATE TABLE `especialidad` (
  `idEspecialidad` int(11) NOT NULL,
  `nomEspecialidad` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `especialidad`
--

INSERT INTO `especialidad` (`idEspecialidad`, `nomEspecialidad`) VALUES
(1, 'Medicina General'),
(2, 'Algo ');

-- --------------------------------------------------------

--
-- Table structure for table `estado_atencion`
--

CREATE TABLE `estado_atencion` (
  `idEstado` int(11) NOT NULL,
  `estado` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `estado_atencion`
--

INSERT INTO `estado_atencion` (`idEstado`, `estado`) VALUES
(1, 'Agendada'),
(2, 'Confirmada'),
(3, 'Anulada'),
(4, 'Perdida'),
(5, 'Realizada');

-- --------------------------------------------------------

--
-- Table structure for table `medico`
--

CREATE TABLE `medico` (
  `rut` int(11) NOT NULL,
  `nomMedico` varchar(30) COLLATE utf8_bin NOT NULL,
  `fechaContratacion` date NOT NULL,
  `especialidad` int(11) NOT NULL,
  `valorConsulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `medico`
--

INSERT INTO `medico` (`rut`, `nomMedico`, `fechaContratacion`, `especialidad`, `valorConsulta`) VALUES
(12135465, 'Hans Neckelmann', '2017-07-26', 1, 5000),
(19647900, 'Curistulinku', '2017-04-26', 1, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE `paciente` (
  `rut` int(9) NOT NULL,
  `idTipoUsuario` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nomPaciente` varchar(25) COLLATE utf8_bin NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` varchar(10) COLLATE utf8_bin NOT NULL,
  `Direccion` varchar(60) COLLATE utf8_bin NOT NULL,
  `Telefono` varchar(13) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`rut`, `idTipoUsuario`, `idUsuario`, `nomPaciente`, `fechaNacimiento`, `sexo`, `Direccion`, `Telefono`) VALUES
(15894841, 4, 6, 'asdf', '2017-07-12', 'Masculino', '912ec803b2ce49e4a541068d495ab570', '123123'),
(19647900, 4, 10, 'Cristobal', '2017-07-03', 'Masculino', '7424926c2732c7800ec49602d8bd2ff1', '+127612387');

-- --------------------------------------------------------

--
-- Table structure for table `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(1) NOT NULL,
  `CategoriaUsuario` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `CategoriaUsuario`) VALUES
(1, 'Director'),
(2, 'Administrador'),
(3, 'Secretaria'),
(4, 'Paciente');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nomUsuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `clave` varchar(50) COLLATE utf8_bin NOT NULL,
  `idTipoUsuario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nomUsuario`, `clave`, `idTipoUsuario`) VALUES
(1, 'Director', '912ec803b2ce49e4a541068d495ab570', 1),
(2, 'Administrador', '912ec803b2ce49e4a541068d495ab570', 2),
(3, 'Secretaria', '912ec803b2ce49e4a541068d495ab570', 3),
(4, 'Paciente', '912ec803b2ce49e4a541068d495ab570', 4),
(5, '1234', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(6, '1111', 'b59c67bf196a4758191e42f76670ceba', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atencion`
--
ALTER TABLE `atencion`
  ADD PRIMARY KEY (`idAtencion`),
  ADD KEY `Consulta_FK_Paciente` (`rutPaciente`),
  ADD KEY `Consulta_FK_Medico` (`rutMedico`),
  ADD KEY `Consulta_FK_Estado` (`idEstado`);

--
-- Indexes for table `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`idEspecialidad`);

--
-- Indexes for table `estado_atencion`
--
ALTER TABLE `estado_atencion`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `Medico_FK_Especialidad` (`especialidad`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `Paciente_FK_Usuario` (`idTipoUsuario`),
  ADD KEY `Paciente_FK_Usuario_3` (`idUsuario`);

--
-- Indexes for table `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `Usuario_FK_Perfil` (`idTipoUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atencion`
--
ALTER TABLE `atencion`
  MODIFY `idAtencion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `idEspecialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `estado_atencion`
--
ALTER TABLE `estado_atencion`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idTipoUsuario` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
