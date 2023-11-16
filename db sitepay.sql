-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla sitepay.pay_cuenta: ~0 rows (aproximadamente)
INSERT INTO `pay_cuenta` (`id`, `id_persona_fk`, `id_rol_fk`, `pwd`) VALUES
	(1, 1, 1, '25d55ad283aa400af464c76d713c07ad'),
	(2, 2, 2, 'b6840fa025696c3d7b0d27c6a26666b8');

-- Volcando datos para la tabla sitepay.pay_nacionalidad: ~0 rows (aproximadamente)
INSERT INTO `pay_nacionalidad` (`id`, `denominacion`, `cod_tlf`, `cod_dni`) VALUES
	(1, 'VANEZUELA', '+58', 'V.-');

-- Volcando datos para la tabla sitepay.pay_persona: ~0 rows (aproximadamente)
INSERT INTO `pay_persona` (`id`, `id_nacionalidad_fk`, `dni`, `nombre`, `apellido`, `telefono`, `mail`, `fec_nac`, `direccion`) VALUES
	(1, 1, '23445978', 'JUAN DIEGO', 'RINCON URDANETA', '(0414)-6801859', 'jd.rincon021@gmail.com', '1994-12-13', 'AV LA LIMPIA'),
	(2, 1, '24734747', 'Luis Arturo', 'Rincon Urdaneta', '(0414)-6801859', 'lrincon@sitepay.com', '1997-01-16', 'av la limpia\r\n                        ');

-- Volcando datos para la tabla sitepay.pay_rol: ~0 rows (aproximadamente)
INSERT INTO `pay_rol` (`id`, `descripcion`) VALUES
	(1, 'ADMINISTRADOR'),
	(2, 'USUARIO I');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
