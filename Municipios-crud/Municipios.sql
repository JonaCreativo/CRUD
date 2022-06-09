--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(3) NOT NULL,
  `nombre_municipio` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `nombre_municipio`) VALUES
(1, 'Izucar de Matamoros'),
(2, 'Atlixco'),
(3, 'Tehuitzingo'),
(4, 'Chietla'),
(5, 'Atzala'),
(6, 'Chiautla'),
(7, 'San Pedro Cholula');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;
