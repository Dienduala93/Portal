/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : azcuba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-06-24 10:11:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `areaagricola`
-- ----------------------------
DROP TABLE IF EXISTS `areaagricola`;
CREATE TABLE `areaagricola` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_aa_id` (`tipo_id`),
  CONSTRAINT `areaagricola_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of areaagricola
-- ----------------------------
INSERT INTO `areaagricola` VALUES ('44', 'css', 'css-2021-06-24 09.10.49.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '2', '1624434898', '1624518649');
INSERT INTO `areaagricola` VALUES ('45', 'pedrkjhgfd', 'pedrkjhgfd-2021-06-23 10.40.13.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en ', '2', '1624435127', '1624437613');
INSERT INTO `areaagricola` VALUES ('53', 'css', 'css-2021-06-23 10.41.22.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o \r\n\r\n\r\n\r\n \r\n', '2', '1624436034', '1624437682');
INSERT INTO `areaagricola` VALUES ('57', '', '-2021-06-23 10.41.45.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en ', '2', '1624437705', '1624437705');
INSERT INTO `areaagricola` VALUES ('62', '', '-2021-06-23 11.15.57.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en ', '2', '1624439757', '1624439757');
INSERT INTO `areaagricola` VALUES ('67', '', '-2021-06-24 08.59.54.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '1', '1624517994', '1624517994');
INSERT INTO `areaagricola` VALUES ('68', '', '-2021-06-24 09.00.27.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '1', '1624518027', '1624518027');
INSERT INTO `areaagricola` VALUES ('69', '', '-2021-06-24 09.00.46.png', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '1', '1624518046', '1624518046');
INSERT INTO `areaagricola` VALUES ('70', '', '-2021-06-24 09.01.06.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '1', '1624518066', '1624518066');
INSERT INTO `areaagricola` VALUES ('71', '', '-2021-06-24 09.01.39.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '1', '1624518099', '1624518099');
INSERT INTO `areaagricola` VALUES ('72', '', '-2021-06-24 09.03.36.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '3', '1624518216', '1624518216');
INSERT INTO `areaagricola` VALUES ('73', '', '-2021-06-24 09.03.57.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '3', '1624518237', '1624518237');
INSERT INTO `areaagricola` VALUES ('74', '', '-2021-06-24 09.04.18.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '3', '1624518258', '1624518258');
INSERT INTO `areaagricola` VALUES ('75', '', '-2021-06-24 09.04.41.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '3', '1624518281', '1624518281');
INSERT INTO `areaagricola` VALUES ('76', '', '-2021-06-24 09.05.06.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '3', '1624518306', '1624518306');

-- ----------------------------
-- Table structure for `centro`
-- ----------------------------
DROP TABLE IF EXISTS `centro`;
CREATE TABLE `centro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of centro
-- ----------------------------
INSERT INTO `centro` VALUES ('4', 'mm', 'Producir azúcar y derivados de caña, energía eléctrica y alimento animal, con calidad y costos competitivosccc111111111\r\n', 'Producimos azúcar con eficiencia y buena calidad. La diversificación industrial y  agrícola alcanza el más alto nivel de su historia. Todas las UEB y la empresa son  rentables. La preparación general y técnica de los trabajadores azucareros se ha  elevado considerablemente y continúa en ascenso. La innovación forma parte de la cultura empresarial y de las personas. La satisfacción de los clientes de nuestras producciones ha aumentad ');

-- ----------------------------
-- Table structure for `config`
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `qs` varchar(1500) NOT NULL COMMENT 'Quiénes Somos',
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  `fabricacion` text NOT NULL,
  `cdireccion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', 'Azcuba', 'La Empresa Azucarera Holguín(EAH), subordinada al Grupo Azucarero AZCUBA con domicilio legal carretera central vía a Bayamo No 213-B creada como resultado de la extinción del Ministerio del Azúcar. Surge el 30 de Julio del 2011. a partir de la fusión de la Empresa Azucarera Loynaz Hechavarría. López Peña, Cristino Naranjo, Urbano Noris. Fernando de Dios y el Grupo Empresarial AgroindustriaL La estructura organizacional, está compuesta por 11 UEB, 5 de atención a productores agropecuarios (APA) encargadas de la atención a las plantaciones cañeras y las producciones de alimentos y pecuarias, 5 de atención a plantas industriales para la atención a la industria y una de derivados para dar atención a las producciones secundarias.', 'Carretera Central #28, Holguín', '24336123', 'sala608@cristino.azcuba.cu', 'Producir azúcar y derivados de caña, energía eléctrica y alimento animal, con calidad y costos competitivos.', 'Producimos azúcar con eficiencia y buena calidad. La diversificación industrial y  agrícola alcanza el más alto nivel de su historia. Todas las UEB y la empresa son  rentables. La preparación general y técnica de los trabajadores azucareros se ha  elevado considerablemente y continúa en ascenso. La innovación forma parte de la cultura empresarial y de las personas. La satisfacción de los clientes de nuestras producciones ha aumentado.', '', 'Director: Juan P. Pablo');

-- ----------------------------
-- Table structure for `cpa`
-- ----------------------------
DROP TABLE IF EXISTS `cpa`;
CREATE TABLE `cpa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cpa
-- ----------------------------
INSERT INTO `cpa` VALUES ('1', 'Producir azúcar y derivados de caña, energía eléctrica y alimento animal, con calidad y costos competitivos.\r\n', 'Producimos azúcar con eficiencia y buena calidad. La diversificación industrial y  agrícola alcanza el más alto nivel de su historia. Todas las UEB y la empresa son  rentables. La preparación general y técnica de los trabajadores azucareros se ha  elevado considerablemente y continúa en ascenso. La innovación forma parte de la cultura empresarial y de las personas. La satisfacción de los clientes de nuestras producciones ha aumentado ');

-- ----------------------------
-- Table structure for `dpto`
-- ----------------------------
DROP TABLE IF EXISTS `dpto`;
CREATE TABLE `dpto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `mision` text NOT NULL COMMENT 'Misión Visión',
  `vision` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of dpto
-- ----------------------------
INSERT INTO `dpto` VALUES ('5', 'pedropanda', 'Producir azúcar y derivados de caña, energía eléctrica y alimento animal, con calidad y costos competitivos.\r\n', 'Producimos azúcar con eficiencia y buena calidad. La diversificación industrial y  agrícola alcanza el más alto nivel de su historia. Todas las UEB y la empresa son  rentables. La preparación general y técnica de los trabajadores azucareros se ha  elevado considerablemente y continúa en ascenso. La innovación forma parte de la cultura empresarial y de las personas. La satisfacción de los clientes de nuestras producciones ha aumentado.\r\n');

-- ----------------------------
-- Table structure for `efemeride`
-- ----------------------------
DROP TABLE IF EXISTS `efemeride`;
CREATE TABLE `efemeride` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(99) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo` (`titulo`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of efemeride
-- ----------------------------
INSERT INTO `efemeride` VALUES ('12', 'Produtos', '0000-00-00', 'Ef-2021-06-16 10.46.49.jpg', 'Prudución de azucar en Holguin', '1623833125', '1623833209');
INSERT INTO `efemeride` VALUES ('13', 'Actividades', '2021-05-08', 'Ef-2021-06-24 09.29.26.jpg', 'El usuario no está autenticado. El sistema lo manda a la interfaz itf_autenticarse a autenticarse. El administrador introduce los datos en formato incorrecto y/o deja campos en blanco. El sistema rechaza la propuesta y muestra un mensaje de error.\r\nEl área ya existe en la base de datos. El sistema rechaza la propuesta y muestra un mensaje de error.\r\n', '1624332700', '1624519766');
INSERT INTO `efemeride` VALUES ('14', 'Cultura Cubana', '2021-05-08', 'Ef-2021-06-22 05.37.08.jpg', 'El usuario no está autenticado. El sistema lo manda a la interfaz itf_autenticarse a autenticarse El administrador introduce los datos en formato incorrecto y/o deja campos en blanco. El sistema rechaza la propuesta y muestra un mensaje de error. El área ya existe en la base de datos. El sistema rechaza la propuesta y muestra un mensaje de error\r\n', '1624332897', '1624333028');
INSERT INTO `efemeride` VALUES ('15', 'Eventos', '2021-05-08', 'Ef-2021-06-22 05.36.18.png', 'El usuario no está autenticado. El sistema lo manda a la interfaz itf_autenticarse a autenticarse El administrador introduce los datos en formato incorrecto y/o deja campos en blanco. El sistema rechaza la propuesta y muestra un mensaje de error. El área ya existe en la base de datos. El sistema rechaza la propuesta y muestra un mensaje de error.\r\n', '1624332978', '1624332978');
INSERT INTO `efemeride` VALUES ('16', 'Destacadas', '2021-05-08', 'Ef-2021-06-24 09.35.13.png', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos.', '1624520009', '1624520113');

-- ----------------------------
-- Table structure for `fabricacion`
-- ----------------------------
DROP TABLE IF EXISTS `fabricacion`;
CREATE TABLE `fabricacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `tipoFabricacion` varchar(60) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fabricacion
-- ----------------------------
INSERT INTO `fabricacion` VALUES ('3', 'mmmmmmmmmmmmssssssssssss', 'mmmmmmmmmmmmssssssssssss-2021-06-12 17.38.08.jpg', 'ssssssssssssssssss', '', '0', '0');
INSERT INTO `fabricacion` VALUES ('4', 'mmmmmmmmmm', 'mmmmmmmmmm-2021-06-12 17.41.27.jpg', 'zzzzzzzzzz', '', '0', '0');
INSERT INTO `fabricacion` VALUES ('5', 'ooooooo', 'ooooooo-2021-06-12 17.44.05.png', 'nnnnnnnnnnnn', '', '0', '0');
INSERT INTO `fabricacion` VALUES ('6', 'tonto', 'tonto-2021-06-17 06.06.33.jpg', 'si o tonot ne;lenhgccasar', '', '0', '0');
INSERT INTO `fabricacion` VALUES ('7', 'mart', 'mart-2021-06-23 17.17.11.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada ', 'purificacion', '0', '0');
INSERT INTO `fabricacion` VALUES ('19', 'mmmmmmmmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmmmmmmmmm-2021-06-24 09.19.29.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada ', 'cristalizacion', '0', '0');
INSERT INTO `fabricacion` VALUES ('20', 'xxxxxxxxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxx-2021-06-23 17.03.17.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada ', 'cristalizacion', '0', '0');
INSERT INTO `fabricacion` VALUES ('21', 'xxxxxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxx-2021-06-23 17.29.12.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada ', 'centrifuga', '0', '0');
INSERT INTO `fabricacion` VALUES ('23', 'aaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa-2021-06-23 17.13.51.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada ', 'cristalizacion', '0', '0');
INSERT INTO `fabricacion` VALUES ('26', 'xxxxxxxxxxxxxi', 'xxxxxxxxxxxxxi-2021-06-23 17.15.48.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada ', 'cristalizacion', '0', '0');
INSERT INTO `fabricacion` VALUES ('28', '', '-2021-06-24 09.18.12.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', 'purificacion', '0', '0');
INSERT INTO `fabricacion` VALUES ('29', '', '-2021-06-24 09.19.04.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', 'cristalizacion', '0', '0');

-- ----------------------------
-- Table structure for `flujo`
-- ----------------------------
DROP TABLE IF EXISTS `flujo`;
CREATE TABLE `flujo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `tipoFlujo` varbinary(60) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of flujo
-- ----------------------------
INSERT INTO `flujo` VALUES ('1', 'centro', '', '', '', '0', '0');
INSERT INTO `flujo` VALUES ('6', 'pijhn', 'pijhn-2021-06-12 16.50.13.jpg', 'hgfdcvb', '', '0', '0');
INSERT INTO `flujo` VALUES ('7', 'mmmmmmmmmmm', 'mmmmmmmmmmm-2021-06-12 17.36.08.jpg', 'mmmmmmmmmmmmmmm', '', '0', '0');
INSERT INTO `flujo` VALUES ('8', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx-2021-06-12 17.42.35.png', 'zzzzzzzzzzzzzzz', '', '0', '0');
INSERT INTO `flujo` VALUES ('9', 'mmmmmmmmmmmmmm', 'mmmmmmmmmmmmmm-2021-06-12 17.50.14.jpg', 'mmmmmmmmmmmm', '', '0', '0');
INSERT INTO `flujo` VALUES ('10', 'mmmm', 'mmmm-2021-06-15 04.21.44.jpg', 'panda feio', '', '0', '0');
INSERT INTO `flujo` VALUES ('11', 'pedro', 'pedro-2021-06-17 02.23.05.jpg', 'jjjjj', '', '0', '0');
INSERT INTO `flujo` VALUES ('12', 'antooo', 'antooo-2021-06-17 02.25.53.png', 'poiuytfvb', '', '0', '0');
INSERT INTO `flujo` VALUES ('13', 'tataro', 'tataro-2021-06-17 07.36.37.jpg', 'trezegue', '', '0', '0');
INSERT INTO `flujo` VALUES ('14', 'ttttt', 'ttttt-2021-06-17 20.51.51.png', 'pppppp', '', '0', '0');
INSERT INTO `flujo` VALUES ('15', 'ooooo', 'ooooo-2021-06-17 21.23.38.jpg', 'ccccccc', '', '0', '0');
INSERT INTO `flujo` VALUES ('17', 'sfggh', 'sfggh-2021-06-24 09.14.27.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', 0x62617363756C61646F72, '0', '0');
INSERT INTO `flujo` VALUES ('19', 'tomate', 'tomate-2021-06-24 09.16.18.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', 0x7661706F72, '0', '0');
INSERT INTO `flujo` VALUES ('23', 'retr', 'retr-2021-06-23 18.13.43.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada ', 0x6C61626F7261746F72696F, '0', '0');
INSERT INTO `flujo` VALUES ('24', 'rrrrraaa', 'rrrrraaa-2021-06-23 23.50.57.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada', 0x646572697661646F73, '0', '0');
INSERT INTO `flujo` VALUES ('26', 'pepecale', 'pepecale-2021-06-23 17.56.50.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada ', 0x706C616E7461, '0', '0');
INSERT INTO `flujo` VALUES ('30', 'ddddddddddddddd', 'ddddddddddddddd-2021-06-23 23.49.31.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada', 0x646572697661646F73, '0', '0');
INSERT INTO `flujo` VALUES ('31', 'dd', 'dd-2021-06-23 22.48.56.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', 0x6C61626F7261746F72696F, '0', '0');
INSERT INTO `flujo` VALUES ('36', '', '-2021-06-24 09.11.49.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', 0x63656E74726F, '0', '0');
INSERT INTO `flujo` VALUES ('37', '', '-2021-06-24 09.12.29.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', 0x63656E74726F, '0', '0');
INSERT INTO `flujo` VALUES ('38', '', '-2021-06-24 09.12.58.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', 0x63656E74726F, '0', '0');
INSERT INTO `flujo` VALUES ('39', '', '-2021-06-24 09.13.16.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', 0x63656E74726F, '0', '0');
INSERT INTO `flujo` VALUES ('40', '', '-2021-06-24 09.15.02.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', 0x62617363756C61646F72, '0', '0');
INSERT INTO `flujo` VALUES ('41', '', '-2021-06-24 09.15.22.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', 0x62617363756C61646F72, '0', '0');
INSERT INTO `flujo` VALUES ('42', '', '-2021-06-24 09.16.36.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', 0x7661706F72, '0', '0');

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1623424181');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1623424187');
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', '1623424188');

-- ----------------------------
-- Table structure for `producto`
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES ('10', 'kota', 'kota-2021-06-24 09.23.29.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '0', '0');
INSERT INTO `producto` VALUES ('12', 'mmmmmmmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmmmmmmmm-2021-06-24 09.24.18.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '0', '0');
INSERT INTO `producto` VALUES ('13', 'mmmmm', 'mmmmm-2021-06-23 16.45.49.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada ', '0', '0');
INSERT INTO `producto` VALUES ('18', 'bbbbbbbbbbbbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbbbb-2021-06-24 09.25.03.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '0', '0');
INSERT INTO `producto` VALUES ('19', 'cccccccccccccccccc', 'cccccccccccccccccc-2021-06-23 18.46.41.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada ', '0', '0');
INSERT INTO `producto` VALUES ('20', 'nnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnn-2021-06-23 18.46.59.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada ', '0', '0');
INSERT INTO `producto` VALUES ('21', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaa-2021-06-23 18.47.38.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada ', '0', '0');

-- ----------------------------
-- Table structure for `servicio`
-- ----------------------------
DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of servicio
-- ----------------------------
INSERT INTO `servicio` VALUES ('2', 'mama', 'mama-2021-06-24 09.26.46.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '0', '0');
INSERT INTO `servicio` VALUES ('5', '', '-2021-06-24 09.27.43.jpg', 'Con la utilización de técnicas y tecnologías de Internet en tales sistemas informáticos como servidores y navegadores web, permitiendo conformar un acceso estándar a información de clientes, proveedores, distribuidores, productos, almacenada o no en bases de datos. ', '0', '0');

-- ----------------------------
-- Table structure for `tipo`
-- ----------------------------
DROP TABLE IF EXISTS `tipo`;
CREATE TABLE `tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tipo
-- ----------------------------
INSERT INTO `tipo` VALUES ('1', 'UBPC');
INSERT INTO `tipo` VALUES ('2', 'CSS');
INSERT INTO `tipo` VALUES ('3', 'CPA');

-- ----------------------------
-- Table structure for `ubpc`
-- ----------------------------
DROP TABLE IF EXISTS `ubpc`;
CREATE TABLE `ubpc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ubpc
-- ----------------------------
INSERT INTO `ubpc` VALUES ('1', 'Producir azúcar y derivados de caña, energía eléctrica y alimento animal, con calidad y costos competitivo', 'Producimos azúcar con eficiencia y buena calidad. La diversificación industrial y  agrícola alcanza el más alto nivel de su historia. Todas las UEB y la empresa son  rentables. La preparación general y técnica de los trabajadores azucareros se ha  elevado considerablemente y continúa en ascenso. La innovación forma parte de la cultura empresarial y de las personas. La satisfacción de los clientes de nuestras producciones ha aumentado');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'E1G14CAucrQXLOKHeX_5z2Cmbo_bbZRW', '$2y$13$0rH20QpkUEtarzd9U3t5O.i/GnJq9jR/c4YSY9NdcocAdGLuxWP8e', null, 'admin@admin.local', '10', '1623424352', '1623424441', 'YZHic26lBSZ84sXJyEScE6CzmbHMgCbs_1623424351');
INSERT INTO `user` VALUES ('2', 'pedro', 'W1uvR-tndAIlYGuyOMzZRYdkgpQdfUKD', '$2y$13$nZR7JBMX8fbzLQjmXJstCe60UeN1i13VyZ5e/qSRbh0D5SGN95tMW', null, 'pedro@gmail.com', '9', '1623424979', '1623424979', 'sHfcZD3lQpuGoZXFHctoSOUvGHzM19B1_1623424979');
INSERT INTO `user` VALUES ('3', 'marta', 'wLigI-MYLr_FnLsDK2uqD2LY4HHFcUOw', '$2y$13$q8MS.FVADRHaYmDY5hJgFO3i.2D/0Qc/QIXQiQc2JVbdy9nHTPrn2', null, 'pedropanda@gmail.com', '9', '1624286502', '1624286502', 'jgYxg3n5y9gI4IRTO9yit6hLeaknrC6T_1624286502');
