/*
 Navicat Premium Data Transfer

 Source Server         : Mysqll
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : dbprestamo3

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 28/04/2023 14:59:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for caja
-- ----------------------------
DROP TABLE IF EXISTS `caja`;
CREATE TABLE `caja`  (
  `caja_id` int NOT NULL AUTO_INCREMENT,
  `caja_descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `caja_monto_inicial` float NULL DEFAULT NULL,
  `caja_monto_ingreso` float NULL DEFAULT NULL,
  `caja_prestamo` float NULL DEFAULT NULL,
  `caja_f_apertura` date NULL DEFAULT NULL,
  `caja_f_cierre` date NULL DEFAULT NULL,
  `caja__monto_egreso` float NULL DEFAULT NULL,
  `caja_monto_total` float NULL DEFAULT NULL,
  `caja_estado` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `caja_hora_apertura` time NULL DEFAULT NULL,
  `caja_hora_cierre` time NULL DEFAULT NULL,
  `caja_count_prestamo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `caja_count_ingreso` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `caja_count_egreso` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `caja_correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `caja_interes` float NULL DEFAULT NULL,
  PRIMARY KEY (`caja_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of caja
-- ----------------------------

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes`  (
  `cliente_id` int NOT NULL AUTO_INCREMENT,
  `cliente_nombres` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cliente_dni` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cliente_cel` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cliente_estado_prestamo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cliente_direccion` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cliente_obs` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cliente_correo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cliente_estatus` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cliente_cant_prestamo` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cliente_refe` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cliente_cel_refe` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`cliente_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES (1, 'Gustavo Masias', '71993865', '922804671', 'DISPONIBLE', 'Paita - Piura', NULL, 'juangustavo1315@gmail.com', '1', NULL, '', '');

-- ----------------------------
-- Table structure for empresa
-- ----------------------------
DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa`  (
  `confi_id` int NOT NULL AUTO_INCREMENT,
  `confi_razon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `confi_ruc` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `confi_direccion` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `confi_correlativo` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `config_correo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `config_celular` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `config_moneda` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`confi_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of empresa
-- ----------------------------
INSERT INTO `empresa` VALUES (1, 'Sistema de Prestamos  dd', '1020304050', 'Pita - piura', '00000002', 'gmasiasdeveloper@gmail.com', '922804671', 'S/');

-- ----------------------------
-- Table structure for forma_pago
-- ----------------------------
DROP TABLE IF EXISTS `forma_pago`;
CREATE TABLE `forma_pago`  (
  `fpago_id` int NOT NULL AUTO_INCREMENT,
  `fpago_descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `valor` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `aplica_dias` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fpago_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of forma_pago
-- ----------------------------
INSERT INTO `forma_pago` VALUES (1, 'Diario', '1', '1');
INSERT INTO `forma_pago` VALUES (2, 'Semanal', '7', '1');
INSERT INTO `forma_pago` VALUES (3, 'Quincenal', '15', '1');
INSERT INTO `forma_pago` VALUES (4, 'Mensual', '1', '0');
INSERT INTO `forma_pago` VALUES (5, 'Bimestral', '2', '0');
INSERT INTO `forma_pago` VALUES (6, 'Semestrual', '6', '0');
INSERT INTO `forma_pago` VALUES (7, 'Anual', '1', '0');

-- ----------------------------
-- Table structure for modulos
-- ----------------------------
DROP TABLE IF EXISTS `modulos`;
CREATE TABLE `modulos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `modulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `padre_id` int NULL DEFAULT NULL,
  `vista` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `icon_menu` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `orden` decimal(10, 0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 49 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of modulos
-- ----------------------------
INSERT INTO `modulos` VALUES (1, 'Tablero pincipal', 0, 'dashboard.php', 'fas fa-tachometer-alt', 0);
INSERT INTO `modulos` VALUES (10, 'Reportes', 0, '', 'fas fa-chart-line', 15);
INSERT INTO `modulos` VALUES (11, 'Empresa', 0, 'configuracion.php', 'fas fa-landmark', 9);
INSERT INTO `modulos` VALUES (12, 'Usuarios', 14, 'usuario.php', 'far fa-user', 13);
INSERT INTO `modulos` VALUES (13, 'Modulos y Perfiles', 14, 'modulos_perfiles.php', 'fas fa-tablet-alt', 14);
INSERT INTO `modulos` VALUES (14, 'Mantenimiento', 0, NULL, 'fas fa-cogs', 12);
INSERT INTO `modulos` VALUES (24, 'Clientes', 0, 'cliente.php', 'fas fa-id-card', 4);
INSERT INTO `modulos` VALUES (25, 'Moneda', 0, 'moneda.php', 'fas fa-dollar-sign', 10);
INSERT INTO `modulos` VALUES (29, 'Prestamos', 0, '', 'fas fa-landmark', 5);
INSERT INTO `modulos` VALUES (34, 'Solicitud/Prestamo', 29, 'prestamo.php', 'far fa-circle', 6);
INSERT INTO `modulos` VALUES (35, 'Listado Prestamos', 29, 'administrar_prestamos.php', 'far fa-circle', 7);
INSERT INTO `modulos` VALUES (36, 'Aprobar S/P', 29, 'aprobacion.php', 'far fa-circle', 8);
INSERT INTO `modulos` VALUES (37, 'Por Cliente', 10, 'reporte_cliente.php', 'far fa-circle', 16);
INSERT INTO `modulos` VALUES (38, 'Cuotas Pagadas', 10, 'reporte_cuotas_pagadas.php', 'far fa-circle', 18);
INSERT INTO `modulos` VALUES (39, 'Caja', 0, '', 'fas fa-cash-register', 1);
INSERT INTO `modulos` VALUES (40, 'Aperturar Caja', 39, 'caja.php', 'far fa-circle', 2);
INSERT INTO `modulos` VALUES (41, 'Ingresos / Egre', 39, 'ingresos.php', 'far fa-circle', 3);
INSERT INTO `modulos` VALUES (43, 'Pivot', 10, 'reportes.php', 'far fa-circle', 19);
INSERT INTO `modulos` VALUES (47, 'Backup', 0, 'index_backup.php', 'fas fa-database', 11);
INSERT INTO `modulos` VALUES (48, 'Por Usuario', 10, 'reporte_usuario.php', 'far fa-circle', 17);

-- ----------------------------
-- Table structure for moneda
-- ----------------------------
DROP TABLE IF EXISTS `moneda`;
CREATE TABLE `moneda`  (
  `moneda_id` int NOT NULL AUTO_INCREMENT,
  `moneda_nombre` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `moneda_abrevia` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `moneda_simbolo` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `moneda_Descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`moneda_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of moneda
-- ----------------------------
INSERT INTO `moneda` VALUES (1, 'Soles', 'PEN', 'S/', 'Sol Peruano');
INSERT INTO `moneda` VALUES (2, 'Dolar ame', 'USD', '$', 'Dolar');

-- ----------------------------
-- Table structure for movimientos
-- ----------------------------
DROP TABLE IF EXISTS `movimientos`;
CREATE TABLE `movimientos`  (
  `movimientos_id` int NOT NULL AUTO_INCREMENT,
  `movi_tipo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `movi_descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `movi_monto` float NULL DEFAULT NULL,
  `movi_fecha` datetime NULL DEFAULT NULL,
  `movi_caja` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `caja_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`movimientos_id`) USING BTREE,
  INDEX `caja_id`(`caja_id`) USING BTREE,
  CONSTRAINT `movimientos_ibfk_1` FOREIGN KEY (`caja_id`) REFERENCES `caja` (`caja_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of movimientos
-- ----------------------------

-- ----------------------------
-- Table structure for perfil_modulo
-- ----------------------------
DROP TABLE IF EXISTS `perfil_modulo`;
CREATE TABLE `perfil_modulo`  (
  `idperfil_modulo` int NOT NULL AUTO_INCREMENT,
  `id_perfil` int NOT NULL,
  `id_modulo` int NOT NULL,
  `vista_inicio` tinyint NULL DEFAULT NULL,
  `estado` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`idperfil_modulo`) USING BTREE,
  INDEX `id_perfil`(`id_perfil`) USING BTREE,
  INDEX `id_modulo`(`id_modulo`) USING BTREE,
  CONSTRAINT `perfil_modulo_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles` (`id_perfil`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `perfil_modulo_ibfk_2` FOREIGN KEY (`id_modulo`) REFERENCES `modulos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 480 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of perfil_modulo
-- ----------------------------
INSERT INTO `perfil_modulo` VALUES (174, 1, 13, 0, 1);
INSERT INTO `perfil_modulo` VALUES (442, 1, 1, 1, 1);
INSERT INTO `perfil_modulo` VALUES (443, 1, 40, 0, 1);
INSERT INTO `perfil_modulo` VALUES (444, 1, 39, 0, 1);
INSERT INTO `perfil_modulo` VALUES (445, 1, 41, 0, 1);
INSERT INTO `perfil_modulo` VALUES (446, 1, 24, 0, 1);
INSERT INTO `perfil_modulo` VALUES (447, 1, 34, 0, 1);
INSERT INTO `perfil_modulo` VALUES (448, 1, 29, 0, 1);
INSERT INTO `perfil_modulo` VALUES (449, 1, 35, 0, 1);
INSERT INTO `perfil_modulo` VALUES (450, 1, 36, 0, 1);
INSERT INTO `perfil_modulo` VALUES (451, 1, 11, 0, 1);
INSERT INTO `perfil_modulo` VALUES (452, 1, 25, 0, 1);
INSERT INTO `perfil_modulo` VALUES (453, 1, 47, 0, 1);
INSERT INTO `perfil_modulo` VALUES (454, 1, 12, 0, 1);
INSERT INTO `perfil_modulo` VALUES (455, 1, 14, 0, 1);
INSERT INTO `perfil_modulo` VALUES (456, 1, 37, 0, 1);
INSERT INTO `perfil_modulo` VALUES (457, 1, 10, 0, 1);
INSERT INTO `perfil_modulo` VALUES (458, 1, 38, 0, 1);
INSERT INTO `perfil_modulo` VALUES (459, 1, 43, 0, 1);
INSERT INTO `perfil_modulo` VALUES (460, 1, 48, 0, 1);
INSERT INTO `perfil_modulo` VALUES (465, 2, 34, 0, 1);
INSERT INTO `perfil_modulo` VALUES (466, 2, 29, 0, 1);
INSERT INTO `perfil_modulo` VALUES (467, 2, 35, 0, 1);
INSERT INTO `perfil_modulo` VALUES (468, 2, 36, 0, 1);
INSERT INTO `perfil_modulo` VALUES (469, 2, 39, 0, 1);
INSERT INTO `perfil_modulo` VALUES (470, 2, 40, 0, 1);
INSERT INTO `perfil_modulo` VALUES (471, 2, 41, 0, 1);
INSERT INTO `perfil_modulo` VALUES (472, 2, 1, 1, 1);
INSERT INTO `perfil_modulo` VALUES (473, 2, 24, 0, 1);
INSERT INTO `perfil_modulo` VALUES (474, 2, 25, 0, 1);
INSERT INTO `perfil_modulo` VALUES (475, 2, 10, 0, 1);
INSERT INTO `perfil_modulo` VALUES (476, 2, 37, 0, 1);
INSERT INTO `perfil_modulo` VALUES (477, 2, 48, 0, 1);
INSERT INTO `perfil_modulo` VALUES (478, 2, 38, 0, 1);
INSERT INTO `perfil_modulo` VALUES (479, 2, 43, 0, 1);

-- ----------------------------
-- Table structure for perfiles
-- ----------------------------
DROP TABLE IF EXISTS `perfiles`;
CREATE TABLE `perfiles`  (
  `id_perfil` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `estado` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id_perfil`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of perfiles
-- ----------------------------
INSERT INTO `perfiles` VALUES (1, 'Administrador', 1);
INSERT INTO `perfiles` VALUES (2, 'Prestamista', 1);

-- ----------------------------
-- Table structure for prestamo_cabecera
-- ----------------------------
DROP TABLE IF EXISTS `prestamo_cabecera`;
CREATE TABLE `prestamo_cabecera`  (
  `pres_id` int NOT NULL AUTO_INCREMENT,
  `nro_prestamo` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cliente_id` int NULL DEFAULT NULL,
  `pres_monto` decimal(10, 2) NULL DEFAULT NULL,
  `pres_cuotas` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pres_interes` decimal(10, 2) NULL DEFAULT NULL,
  `fpago_id` int NULL DEFAULT NULL,
  `moneda_id` int NULL DEFAULT NULL,
  `pres_f_emision` date NULL DEFAULT NULL,
  `pres_monto_cuota` decimal(10, 2) NULL DEFAULT NULL,
  `pres_monto_interes` decimal(10, 2) NULL DEFAULT NULL,
  `pres_monto_total` decimal(10, 2) NULL DEFAULT NULL,
  `pres_estado` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pres_estatus` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_usuario` int NULL DEFAULT NULL,
  `pres_aprobacion` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pres_cuotas_pagadas` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pres_monto_restante` decimal(10, 2) NULL DEFAULT NULL,
  `pres_cuotas_restante` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pres_fecha_registro` date NULL DEFAULT NULL,
  `pres_estado_caja` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `caja_id` int NULL DEFAULT NULL,
  `pres_mora` decimal(10, 2) NULL DEFAULT NULL,
  `nombre_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `imagen_p` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pres_id`, `nro_prestamo`) USING BTREE,
  INDEX `cliente_id`(`cliente_id`) USING BTREE,
  INDEX `fpago_id`(`fpago_id`) USING BTREE,
  INDEX `moneda_id`(`moneda_id`) USING BTREE,
  INDEX `nro_prestamo`(`nro_prestamo`) USING BTREE,
  INDEX `caja_id`(`caja_id`) USING BTREE,
  CONSTRAINT `prestamo_cabecera_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`cliente_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `prestamo_cabecera_ibfk_2` FOREIGN KEY (`fpago_id`) REFERENCES `forma_pago` (`fpago_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `prestamo_cabecera_ibfk_3` FOREIGN KEY (`moneda_id`) REFERENCES `moneda` (`moneda_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `prestamo_cabecera_ibfk_4` FOREIGN KEY (`caja_id`) REFERENCES `caja` (`caja_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of prestamo_cabecera
-- ----------------------------

-- ----------------------------
-- Table structure for prestamo_detalle
-- ----------------------------
DROP TABLE IF EXISTS `prestamo_detalle`;
CREATE TABLE `prestamo_detalle`  (
  `pdetalle_id` int NOT NULL AUTO_INCREMENT,
  `nro_prestamo` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pdetalle_nro_cuota` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pdetalle_monto_cuota` decimal(10, 2) NULL DEFAULT NULL,
  `pdetalle_fecha` datetime NULL DEFAULT NULL,
  `pdetalle_estado_cuota` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pdetalle_fecha_registro` timestamp NULL DEFAULT NULL,
  `pdetalle_saldo_cuota` decimal(10, 2) NULL DEFAULT NULL,
  `pdetalle_cant_cuota_pagada` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pdetalle_liquidar` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pdetalle_monto_liquidar` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pdetalle_caja` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pdetalle_aprobacion` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_usuario` int NULL DEFAULT NULL,
  `nombre_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pdetalle_mora` decimal(10, 2) NULL DEFAULT NULL,
  `pdetalle_dias_mora` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pdetalle_id`, `nro_prestamo`) USING BTREE,
  INDEX `nro_prestamo`(`nro_prestamo`) USING BTREE,
  CONSTRAINT `prestamo_detalle_ibfk_1` FOREIGN KEY (`nro_prestamo`) REFERENCES `prestamo_cabecera` (`nro_prestamo`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of prestamo_detalle
-- ----------------------------

-- ----------------------------
-- Table structure for referencias
-- ----------------------------
DROP TABLE IF EXISTS `referencias`;
CREATE TABLE `referencias`  (
  `refe_id` int NOT NULL AUTO_INCREMENT,
  `cliente_id` int NULL DEFAULT NULL,
  `refe_personal` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `refe_cel_per` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `refe_familiar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `refe_cel_fami` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`refe_id`) USING BTREE,
  INDEX `cliente_id`(`cliente_id`) USING BTREE,
  CONSTRAINT `referencias_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`cliente_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of referencias
-- ----------------------------

-- ----------------------------
-- Table structure for rol
-- ----------------------------
DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol`  (
  `rol_id` int NOT NULL,
  `nombre_rol` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of rol
-- ----------------------------
INSERT INTO `rol` VALUES (1, 'Administrador');
INSERT INTO `rol` VALUES (2, 'Prestamista');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `apellido_usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `clave` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_perfil_usuario` int NULL DEFAULT NULL,
  `estado` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE,
  INDEX `id_perfil_usuario`(`id_perfil_usuario`) USING BTREE,
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_perfil_usuario`) REFERENCES `perfiles` (`id_perfil`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'Gustavo ', 'Masias', 'gmasias', '$2a$07$azybxcags23425sdg23sdeWdBD5K/WLuiEyQ3M9yIJwhDvhbblzKK', 1, 1);
INSERT INTO `usuarios` VALUES (3, 'prueba', 'prueba', 'prueba', '$2a$07$azybxcags23425sdg23sdemRuHOE7dGp6OuuwTVOX3TACOEE/3QoG', 2, 1);

-- ----------------------------
-- Procedure structure for SP_ACTUALIZAR_ESTADO_CLIENTE_PRESTAMO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_ACTUALIZAR_ESTADO_CLIENTE_PRESTAMO`;
delimiter ;;
CREATE PROCEDURE `SP_ACTUALIZAR_ESTADO_CLIENTE_PRESTAMO`(IN ID INT)
BEGIN
DECLARE CANTIDAD INT;
SET @CANTIDAD:=(SELECT COUNT(*) FROM prestamo_cabecera where cliente_id =  ID );

UPDATE clientes SET 
cliente_estado_prestamo = 'con prestamo' 
-- cliente_cant_prestamo = @CANTIDAD + 1
WHERE
	cliente_id = ID;
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_ALERTA_PRESTAMO_CAJA
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_ALERTA_PRESTAMO_CAJA`;
delimiter ;;
CREATE PROCEDURE `SP_ALERTA_PRESTAMO_CAJA`()
SELECT 

(select  ROUND(SUM(pres_monto),2) from prestamo_cabecera where pres_aprobacion in ('aprobado','pendiente') and pres_estado_caja = 'VIGENTE') as pres_monto,

(select caja_monto_inicial from caja WHERE caja_estado = 'VIGENTE')  AS monto_inicial_caja,
 
(select IFNULL(ROUND(SUM(movi_monto),2),0) from movimientos WHERE movi_tipo = 'INGRESO' AND  movi_caja = 'VIGENTE') as ingreso,


(select IFNULL(ROUND(SUM(movi_monto),2),0) from movimientos WHERE movi_tipo = 'EGRESO' AND  movi_caja = 'VIGENTE') as egreso,

(select  IFNULL(ROUND(SUM(pres_monto_interes),2),0) from prestamo_cabecera where pres_aprobacion in ('finalizado') and pres_estado_caja = 'VIGENTE') as interes
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_ANULAR_PRESTAMO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_ANULAR_PRESTAMO`;
delimiter ;;
CREATE PROCEDURE `SP_ANULAR_PRESTAMO`(IN N_PRESTAMO VARCHAR(8))
BEGIN

DECLARE CLIENTE INT;
UPDATE prestamo_cabecera SET pres_aprobacion = 'anulado', pres_estado_caja = '', pres_estado = 'Anulado' where nro_prestamo = N_PRESTAMO;

UPDATE prestamo_detalle SET pdetalle_estado_cuota = 'Anulado', pdetalle_caja = '', pdetalle_aprobacion = 'anulado'  where nro_prestamo = N_PRESTAMO;

 SET CLIENTE = (select cliente_id from prestamo_cabecera where nro_prestamo = N_PRESTAMO);
 
 UPDATE clientes set
 cliente_estado_prestamo = 'DISPONIBLE'
 WHERE cliente_id = CLIENTE;


SELECT "ok";

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_CAMBIAR_ESTADO_CABECERA
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_CAMBIAR_ESTADO_CABECERA`;
delimiter ;;
CREATE PROCEDURE `SP_CAMBIAR_ESTADO_CABECERA`(IN prestamo VARCHAR(8))
BEGIN
DECLARE ESTADO INT;
DECLARE CLIENTE INT;
SET @ESTADO:=(select count(*) from prestamo_detalle pd where pd.nro_prestamo = prestamo and pd.pdetalle_estado_cuota like '%pendiente%' );
SET @CLIENTE:=(select cliente_id from prestamo_cabecera where nro_prestamo = prestamo);

 IF  @ESTADO = 0 THEN 
        UPDATE prestamo_cabecera SET
	pres_aprobacion = 'finalizado',
	pres_estado = 'Finalizado'
	WHERE nro_prestamo = prestamo;
	
	UPDATE clientes SET
	cliente_estado_prestamo = 'DISPONIBLE'
	WHERE cliente_id = @CLIENTE;
	

	
	
SELECT 'ok';
ELSE
	SELECT 'error';
END IF;


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_CLIENTES_CON_PRESTAMOS
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_CLIENTES_CON_PRESTAMOS`;
delimiter ;;
CREATE PROCEDURE `SP_CLIENTES_CON_PRESTAMOS`()
BEGIN
SELECT
	-- pc.cliente_id,
	c.cliente_dni,
	c.cliente_nombres,
	count( pc.nro_prestamo ) AS cant,
	SUM(ROUND(pc.pres_monto_total,2) ) AS total 
FROM
	prestamo_cabecera pc
	INNER JOIN clientes c ON pc.cliente_id = c.cliente_id 
WHERE
	pc.pres_aprobacion IN ( 'aprobado', 'finalizado' ) 
GROUP BY
	pc.cliente_id 
ORDER BY
	SUM(
		ROUND( pc.pres_monto_total, 2 )) DESC 
		LIMIT 10;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_CUOTAS_PAGADAS
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_CUOTAS_PAGADAS`;
delimiter ;;
CREATE PROCEDURE `SP_CUOTAS_PAGADAS`(in prestamo VARCHAR(8))
select IFNULL(count(pdetalle_estado_cuota),0) as pdetalle_estado_cuota ,
			(select 	IFNULL(count(pdetalle_estado_cuota),0) from prestamo_detalle where nro_prestamo = prestamo AND  pdetalle_estado_cuota = 'pendiente') as pendiente,
			(select SUM(ROUND(pdetalle_monto_cuota,2)) from prestamo_detalle where nro_prestamo = prestamo and pdetalle_estado_cuota = 'pagada') as monto_c_pagadas
			from prestamo_detalle 
where nro_prestamo = prestamo AND 
			pdetalle_estado_cuota = 'pagada'
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_CUOTAS_VENCIDAS
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_CUOTAS_VENCIDAS`;
delimiter ;;
CREATE PROCEDURE `SP_CUOTAS_VENCIDAS`()
BEGIN
	SELECT
		pc.cliente_id,
		c.cliente_dni,
		c.cliente_nombres,
		pd.nro_prestamo,
		pd.pdetalle_nro_cuota,
		DATE_FORMAT(pd.pdetalle_fecha,'%d/%m/%Y') as fecha,
		pd.pdetalle_monto_cuota,
	(CURDATE() - DATE(pd.pdetalle_fecha) ) as dias,
		(pc.pres_mora * (CURDATE() - DATE(pd.pdetalle_fecha) )) as mora,
		pc.id_usuario,
		u.nombre_usuario
		
		
		
	FROM
		prestamo_cabecera pc
		INNER JOIN clientes c ON pc.cliente_id = c.cliente_id
		INNER JOIN prestamo_detalle pd ON pc.nro_prestamo = pd.nro_prestamo 
		INNER JOIN usuarios u on pc.id_usuario =  u.id_usuario
	WHERE
		pd.pdetalle_fecha <= CURDATE() and
		
		pc.pres_aprobacion = 'aprobado' 
		and pd.pdetalle_estado_cuota = 'pendiente'
		ORDER BY 	DATE(pd.pdetalle_fecha) ASC;
	-- 	LIMIT 10;
		

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_DATOS_DASHBOARD
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_DATOS_DASHBOARD`;
delimiter ;;
CREATE PROCEDURE `SP_DATOS_DASHBOARD`()
BEGIN
	DECLARE
		CAJA FLOAT;
	DECLARE
		CLIENTES FLOAT;
	DECLARE
		PRESTAMOSPEN FLOAT;
	DECLARE
		TOTALACOBRAR FLOAT;
		DECLARE
		CAJACAPI FLOAT;
		
	DECLARE PRODUCTOSINSTOCK INT;
	DECLARE INTERES FLOAT;
	DECLARE MONTO_PRESTADO FLOAT;
	DECLARE CUOTA_PAGADA FLOAT;
	DECLARE TOTALPRES INT;
	DECLARE MONTO_INGRESO FLOAT;
	DECLARE MONTO_EGRESO FLOAT;
	
		-- SET CAJA = (select ROUND(IFNULL(SUM(pres_monto_total),0),2) from prestamo_cabecera where pres_estado_caja = 'VIGENTE' AND pres_aprobacion in (  'finalizado', 'aprobado') );
		SET CAJACAPI = (select ROUND(MAX(caja_monto_inicial),2) from caja where caja_estado = 'VIGENTE'); -- 100
		SET INTERES = (select ROUND(IFNULL(SUM(pres_monto_interes),0),2) from prestamo_cabecera where pres_estado_caja = 'VIGENTE' AND pres_aprobacion in (  'finalizado', 'aprobado') ); -- 30
		SET MONTO_PRESTADO = (select ROUND(IFNULL(SUM(pres_monto),0),2) from prestamo_cabecera where pres_estado_caja = 'VIGENTE' AND pres_aprobacion in (  'finalizado', 'aprobado') );
		SET MONTO_INGRESO = (select ROUND(IFNULL(SUM(movi_monto),0),2) from movimientos where movi_caja = 'VIGENTE' AND movi_tipo = 'INGRESO' );
		SET MONTO_EGRESO = (select ROUND(IFNULL(SUM(movi_monto),0),2) from movimientos where movi_caja = 'VIGENTE' AND movi_tipo = 'EGRESO' );
		SET CUOTA_PAGADA = (select ROUND(IFNULL(SUM(pdetalle_monto_cuota),0),2)  from prestamo_detalle  where pdetalle_estado_cuota = 'pagada' and pdetalle_caja = 'VIGENTE' and pdetalle_aprobacion = 'aprobado' );
		SET CAJA = (CAJACAPI - MONTO_PRESTADO ) + CUOTA_PAGADA + MONTO_INGRESO - MONTO_EGRESO; -- 100
		SET CLIENTES = (select COUNT(*) from clientes c WHERE c.cliente_estatus ='1');
		SET PRESTAMOSPEN =(select COUNT(*)  from prestamo_cabecera pc where pc.pres_aprobacion in ('aprobado'));

		SET TOTALACOBRAR = (select sum(pdetalle_monto_cuota) from prestamo_detalle  where pdetalle_estado_cuota = 'pendiente' );
		
		SET TOTALPRES = (select caja_monto_inicial from caja WHERE caja_estado = 'VIGENTE');
			
		
	SELECT
	  IFNULL(ROUND(CAJA,2),0)	as caja ,
		IFNULL(CLIENTES,0) as clientes,
		IFNULL(PRESTAMOSPEN,0) as prestamospen,
	  IFNULL(ROUND(TOTALACOBRAR,2), 0) as totalacobrar;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_DESAPROBAR_PRESTAMO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_DESAPROBAR_PRESTAMO`;
delimiter ;;
CREATE PROCEDURE `SP_DESAPROBAR_PRESTAMO`(IN N_PRESTAMO VARCHAR(8))
BEGIN 

DECLARE CANTIDAD INT;
DECLARE CLIENTE INT;
SET CLIENTE=(select cliente_id from prestamo_cabecera where nro_prestamo = N_PRESTAMO);
SET @CANTIDAD:=(SELECT COUNT(*) FROM prestamo_detalle where pdetalle_estado_cuota ='pagada' AND nro_prestamo = N_PRESTAMO);
if @CANTIDAD = 0 THEN
	
		UPDATE prestamo_cabecera SET 
		pres_aprobacion = 'pendiente' ,
		pres_estado_caja = 'VIGENTE',
		pres_estado = 'Pendiente' 
		where nro_prestamo = N_PRESTAMO;
		
		
		UPDATE prestamo_detalle SET pdetalle_estado_cuota = 'pendiente', pdetalle_aprobacion = 'pendiente', pdetalle_caja = 'VIGENTE' where nro_prestamo = N_PRESTAMO;
		
		
 
		 UPDATE clientes set
		 cliente_estado_prestamo = 'con prestamo'
		 WHERE cliente_id = CLIENTE;

		
		/*UPDATE prestamo_cabecera SET 
		pres_estado_caja = "" 
		where nro_prestamo = N_PRESTAMO;*/
		
SELECT 1;
ELSE
SELECT 2;
END IF;


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_EDITAR_MOVIMIENTO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_EDITAR_MOVIMIENTO`;
delimiter ;;
CREATE PROCEDURE `SP_EDITAR_MOVIMIENTO`(IN ID VARCHAR(11), IN TIPO_MOV VARCHAR(100), IN DESCRIPCION VARCHAR(100), IN MONTO FLOAT)
BEGIN 

DECLARE CANTIDAD INT;
SET @CANTIDAD:=(SELECT COUNT(*) FROM movimientos where movi_caja ='CERRADO' AND movimientos_id = ID);
if @CANTIDAD = 0 THEN
		
		UPDATE movimientos SET
		movi_tipo = TIPO_MOV,
		movi_descripcion = DESCRIPCION,
		movi_monto = MONTO
		where movimientos_id = ID;
		
SELECT 1;
ELSE
SELECT 2;
END IF;


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_ELIMINAR_MOVIMIENTO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_ELIMINAR_MOVIMIENTO`;
delimiter ;;
CREATE PROCEDURE `SP_ELIMINAR_MOVIMIENTO`(IN ID VARCHAR(11))
BEGIN 

DECLARE CANTIDAD INT;
SET @CANTIDAD:=(SELECT COUNT(*) FROM movimientos where movi_caja ='CERRADO' AND movimientos_id = ID);
if @CANTIDAD = 0 THEN
	
		DELETE FROM movimientos  
		where movimientos_id = ID;
		
SELECT 1;
ELSE
SELECT 2;
END IF;


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LIQUIDAR_PRESTAMO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LIQUIDAR_PRESTAMO`;
delimiter ;;
CREATE PROCEDURE `SP_LIQUIDAR_PRESTAMO`(IN prestamo VARCHAR(8), IN cuota VARCHAR(8))
BEGIN

DECLARE MONTOTOTAL INT;
DECLARE MONTOCUOTA INT;
DECLARE CANTCUOTADETA INT;
DECLARE CANTCUOCABE INT;
DECLARE MONTORESTANTECABE INT;
DECLARE MAXINROCUOTA INT;
DECLARE CLIENTE INT;

SET @MONTOTOTAL:=(select pres_monto_total from prestamo_cabecera where nro_prestamo = prestamo);   -- 768
-- SET @MONTOCUOTA:=(select ROUND(SUM(pdetalle_monto_cuota),2) from prestamo_detalle where nro_prestamo = prestamo AND pdetalle_estado_cuota = 'pagada' ); -- 172.5
 SET @MONTORESTANTECABE:=(select pres_monto_restante from prestamo_cabecera where nro_prestamo = prestamo  ); 
SET @MAXINROCUOTA:=(select max(pdetalle_monto_cuota) from prestamo_detalle where nro_prestamo = prestamo  );
SET @MONTOCUOTA:=(select ROUND(SUM(pdetalle_monto_cuota),2) from prestamo_detalle where nro_prestamo = prestamo AND pdetalle_monto_liquidar = '1' );

--  SET @CANTCUOTADETA:=(select count(pdetalle_estado_cuota) from prestamo_detalle where nro_prestamo = prestamo AND pdetalle_estado_cuota = 'pagada');
 SET @CANTCUOTADETA:=(select count(pdetalle_liquidar) from prestamo_detalle where nro_prestamo = prestamo AND pdetalle_liquidar = '1');
SET @CANTCUOCABE:=(select pres_cuotas from prestamo_cabecera where nro_prestamo = prestamo);

SET @CLIENTE:=(select cliente_id from prestamo_cabecera where nro_prestamo = prestamo);

UPDATE prestamo_detalle SET 
pdetalle_liquidar = '1',
pdetalle_monto_liquidar = '1',
 pdetalle_saldo_cuota = @MONTORESTANTECABE,
pdetalle_cant_cuota_pagada = (@CANTCUOCABE - @CANTCUOTADETA) -1
where nro_prestamo = prestamo 
and pdetalle_nro_cuota = cuota;
-- and pdetalle_estado_cuota = 'pendiente';

UPDATE clientes SET
cliente_estado_prestamo = 'DISPONIBLE'
WHERE cliente_id = @CLIENTE;




END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_CAJA
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_CAJA`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_CAJA`()
SELECT
	caja_id,
	-- caja_descripcion,
	caja_monto_inicial,
	IFNULL(caja_monto_ingreso,0),
	caja__monto_egreso,
	caja_prestamo,
 CONCAT_WS(' ',DATE_FORMAT(caja_f_apertura, '%d/%m/%Y'), caja_hora_apertura) as f_apert,
  CONCAT_WS(' ',DATE_FORMAT(caja_f_cierre, '%d/%m/%Y'), caja_hora_cierre) as caja_f_cierre,
 -- caja_f_cierre,
-- 	(select count(*) from prestamo_cabecera where pres_aprobacion = 'Aprobado' and pres_fecha_registro = CURDATE()) as cant_pres,
caja_count_prestamo,
	caja_monto_total,
	caja_estado,
	'' as opciones
FROM
	caja
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_CLIENTES_PRESTAMO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_CLIENTES_PRESTAMO`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_CLIENTES_PRESTAMO`()
SELECT
	cliente_id, 
	cliente_nombres, 
	cliente_dni, 
	cliente_estado_prestamo, 
	cliente_estatus

FROM
	clientes
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_CLIENTES_TABLE
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_CLIENTES_TABLE`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_CLIENTES_TABLE`()
SELECT
	cliente_id, 
	cliente_nombres, 
	cliente_dni, 
	cliente_cel, 
	cliente_estado_prestamo, 
	cliente_estatus,
	cliente_direccion,
	cliente_correo,
	'' as opciones,
	cliente_refe,
	cliente_cel_refe
FROM
	clientes
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_ID_CAJA_PARA_PRESTAMOS
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_ID_CAJA_PARA_PRESTAMOS`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_ID_CAJA_PARA_PRESTAMOS`()
SELECT
caja_id,
caja_f_apertura 
FROM
	caja 
WHERE
	caja_estado = 'VIGENTE'
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_MONEDAS_TABLE
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_MONEDAS_TABLE`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_MONEDAS_TABLE`()
SELECT
	moneda_id, 
	moneda_nombre, 
	moneda_abrevia, 
	moneda_simbolo, 
	moneda_Descripcion,
	'' as opciones
FROM
	moneda
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_MORA_PRESTAMO_CUOTA
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_MORA_PRESTAMO_CUOTA`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_MORA_PRESTAMO_CUOTA`(nro_p VARCHAR(8), IN nro_cu VARCHAR(8))
SELECT DATEDIFF( CURDATE(), pdetalle_fecha)  AS dias_mora
FROM prestamo_detalle
where nro_prestamo = nro_p and pdetalle_nro_cuota = nro_cu and pdetalle_estado_cuota = 'pendiente'
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_MOVIMIENTOS
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_MOVIMIENTOS`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_MOVIMIENTOS`()
SELECT
	movimientos_id,
	movi_tipo,
	movi_descripcion,
	ROUND(movi_monto,2) as monto,
	 DATE_FORMAT(movi_fecha, '%d/%m/%Y') as fecha,
	 movi_caja,
	'' as opciones
	
FROM
	movimientos
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_MOVIMIENTOS_POR_CAJA
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_MOVIMIENTOS_POR_CAJA`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_MOVIMIENTOS_POR_CAJA`(IN CAJA_ID INT)
SELECT
		m.movi_tipo,
		m.movi_descripcion,
		m.movi_monto,
		 DATE_FORMAT(m.movi_fecha, '%d/%m/%Y') as fecha,
		m.caja_id
FROM
	movimientos m
	where m.caja_id = CAJA_ID
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_NOTIFICACION
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_NOTIFICACION`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_NOTIFICACION`(IN id_usuario int)
SELECT
		pd.nro_prestamo,
		pc.cliente_id,
		c.cliente_nombres,
		pd.pdetalle_nro_cuota,
		DATE_FORMAT(pd.pdetalle_fecha,'%d/%m/%Y') as fecha,
		pd.pdetalle_monto_cuota,
		pc.id_usuario,
		u.nombre_usuario

	FROM
		prestamo_cabecera pc
		INNER JOIN clientes c ON pc.cliente_id = c.cliente_id
		INNER JOIN prestamo_detalle pd ON pc.nro_prestamo = pd.nro_prestamo 
		INNER JOIN usuarios u on pc.id_usuario =  u.id_usuario
	WHERE
		pdetalle_fecha <= CURDATE() and
		pc.pres_aprobacion = 'aprobado' 
		and pd.pdetalle_estado_cuota = 'pendiente'
		and pc.id_usuario = id_usuario
		ORDER BY 	DATE(pd.pdetalle_fecha) ASC
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_PIVOT_POR_DIAS
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_PIVOT_POR_DIAS`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_PIVOT_POR_DIAS`()
SELECT CONCAT(c.cliente_nombres, ' | ',pc.nro_prestamo) as pres,
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '1' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '1',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '2' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '2',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '3' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '3',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '4' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '4',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '5' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '5',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '6' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '6',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '7' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '7',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '8' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '8',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '9' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '9',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '10' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '10',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '11' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '11',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '12' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '12',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '13' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '13',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '14' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '14',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '15' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '15',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '16' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '16',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '17' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '17',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '18' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '18',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '19' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '19',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '20' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '20',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '21' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '21',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '22' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '22',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '23' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '23',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '24' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '24',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '25' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '25',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '26' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '26',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '27' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '27',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '28' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '28',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '29' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '29',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '30' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '30',
		 
		  ROUND(pc.pres_monto_total,2) as m_prestamo,
		 SUM(ROUND(pd.pdetalle_monto_cuota,2)) as t_pagado,
		  ROUND((pc.pres_monto_total - SUM(ROUND(pd.pdetalle_monto_cuota,2))),2) as falta_p_p
     FROM prestamo_detalle pd INNER JOIN prestamo_cabecera pc on
		 pd.nro_prestamo = pc.nro_prestamo 
		 INNER JOIN clientes c on pc.cliente_id = c.cliente_id
		 where pd.pdetalle_estado_cuota = 'pagada'
     GROUP BY pd.nro_prestamo
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_PIVOT_POR_FECHAS
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_PIVOT_POR_FECHAS`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_PIVOT_POR_FECHAS`(in fecha_ini DATE, in fecha_fin DATE)
SELECT CONCAT(c.cliente_nombres, ' | ',pc.nro_prestamo) as pres,
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '1' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '1',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '2' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '2',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '3' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '3',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '4' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '4',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '5' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '5',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '6' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '6',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '7' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '7',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '8' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '8',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '9' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '9',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '10' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '10',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '11' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '11',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '12' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '12',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '13' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '13',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '14' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '14',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '15' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '15',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '16' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '16',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '17' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '17',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '18' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '18',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '19' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '19',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '20' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '20',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '21' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '21',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '22' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '22',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '23' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '23',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '24' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '24',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '25' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '25',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '26' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '26',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '27' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '27',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '28' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '28',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '29' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '29',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '30' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '30',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '31' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '31',
		 
		  pc.pres_monto_total as m_prestamo,
		 SUM(ROUND(pd.pdetalle_monto_cuota,2)) as t_pagado,
		  ROUND((pc.pres_monto_total - SUM(ROUND(pd.pdetalle_monto_cuota,2))),2) as falta_p_p
     FROM prestamo_detalle pd INNER JOIN prestamo_cabecera pc on
		 pd.nro_prestamo = pc.nro_prestamo 
		 INNER JOIN clientes c on pc.cliente_id = c.cliente_id
		 where pd.pdetalle_estado_cuota = 'pagada' AND pd.pdetalle_fecha_registro  BETWEEN fecha_ini AND fecha_fin
     GROUP BY pd.nro_prestamo
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_PRESTAMOS_POR_APROBACION
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_PRESTAMOS_POR_APROBACION`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_PRESTAMOS_POR_APROBACION`(in fecha_ini DATE, in fecha_fin DATE)
select pc.pres_id ,
				pc.nro_prestamo,
				pc.cliente_id,
				c.cliente_nombres,
				pc.pres_monto,
			  pc.pres_interes,
			  pc.pres_cuotas,
				pc.fpago_id,
				fp.fpago_descripcion,
				pc.id_usuario,
				u.usuario,		
				DATE_FORMAT(pc.pres_fecha_registro, '%d/%m/%Y') as fecha,
				pc.pres_aprobacion as estado,
				'' as opciones,
				pc.pres_monto_cuota,
				pc.pres_monto_interes,
				pc.pres_monto_total,
				pc.pres_cuotas_pagadas,
				pc.pres_mora
							
				 from prestamo_cabecera pc
				 INNER JOIN clientes c on
				 pc.cliente_id = c.cliente_id
				 INNER JOIN forma_pago fp on 
				 pc.fpago_id = fp.fpago_id
				 INNER JOIN usuarios u on
				 pc.id_usuario = u.id_usuario
				 WHERE pc.pres_fecha_registro BETWEEN fecha_ini AND fecha_fin
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_PRESTAMOS_POR_CAJA
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_PRESTAMOS_POR_CAJA`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_PRESTAMOS_POR_CAJA`(IN CAJA_ID INT)
SELECT
	pc.nro_prestamo,
	pc.cliente_id,
	c.cliente_nombres,
	pres_monto,
	pres_monto_interes,
	pres_monto_total, 
	DATE_FORMAT(pres_fecha_registro, '%d/%m/%Y') as fecha,
	pc.caja_id,
	pc.pres_aprobacion
FROM
	prestamo_cabecera pc
	INNER JOIN clientes c ON pc.cliente_id = c.cliente_id
	where pc.caja_id = CAJA_ID and pc.pres_aprobacion in ('aprobado','finalizado', 'pendiente')
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_REFERENCIAS_EN_CLIENTE_EDIT
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_REFERENCIAS_EN_CLIENTE_EDIT`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_REFERENCIAS_EN_CLIENTE_EDIT`(IN ID INT)
SELECT
cliente_id,
refe_personal,
refe_cel_per,
refe_familiar,
refe_cel_fami
	
FROM
	referencias
	where cliente_id = ID
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_SELECT_ANIO_RECORD
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_SELECT_ANIO_RECORD`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_SELECT_ANIO_RECORD`()
SELECT YEAR(pres_fecha_registro) as anio FROM prestamo_cabecera
where pres_aprobacion IN  ('aprobado', 'finalizado' )
GROUP BY YEAR(pres_fecha_registro)
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_SELECT_USUARIO_RECORD
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_SELECT_USUARIO_RECORD`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_SELECT_USUARIO_RECORD`()
SELECT
	pd.id_usuario,
	u.nombre_usuario
FROM
	prestamo_detalle pd
	INNER JOIN usuarios u ON pd.id_usuario = u.id_usuario 
	where pd.pdetalle_estado_cuota = 'pagada' and pd.pdetalle_aprobacion = 'aprobado'
	GROUP BY
	u.id_usuario
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_USUARIOS
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_USUARIOS`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_USUARIOS`()
SELECT
	usuarios.id_usuario,
	usuarios.nombre_usuario,
	usuarios.apellido_usuario,
	-- CONCAT_WS(' ', usuarios.nombre_usuario,usuarios.apellido_usuario) as nombre, 
	usuarios.usuario, 
	usuarios.clave,
	usuarios.id_perfil_usuario, 
	perfiles.descripcion, 
	usuarios.estado,
	'' as opciones
FROM
	usuarios
	INNER JOIN
	perfiles
	ON 
		usuarios.id_perfil_usuario = perfiles.id_perfil
		
		ORDER BY usuarios.id_usuario ASC
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_MONTO_POR_CUOTA_PAGADA_D
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_MONTO_POR_CUOTA_PAGADA_D`;
delimiter ;;
CREATE PROCEDURE `SP_MONTO_POR_CUOTA_PAGADA_D`(IN prestamo VARCHAR(8), IN cuota VARCHAR(8))
BEGIN

DECLARE MONTOTOTAL INT;
DECLARE MONTOCUOTA INT;
DECLARE CANTCUOTADETA INT;
DECLARE CANTCUOCABE INT;

SET @MONTOTOTAL:=(select pres_monto_total from prestamo_cabecera where nro_prestamo = prestamo);
SET @MONTOCUOTA:=(select SUM(pdetalle_monto_cuota) from prestamo_detalle where nro_prestamo = prestamo AND pdetalle_estado_cuota = 'pagada' );

SET @CANTCUOTADETA:=(select count(pdetalle_estado_cuota) from prestamo_detalle where nro_prestamo = prestamo AND pdetalle_estado_cuota = 'pagada');
SET @CANTCUOCABE:=(select pres_cuotas from prestamo_cabecera where nro_prestamo = prestamo);

UPDATE prestamo_detalle SET 
pdetalle_saldo_cuota = @MONTOTOTAL -  @MONTOCUOTA,
pdetalle_cant_cuota_pagada = @CANTCUOCABE - @CANTCUOTADETA
where nro_prestamo = prestamo 
and pdetalle_nro_cuota = cuota;

	UPDATE prestamo_detalle SET
	pdetalle_saldo_cuota = '0'
	where nro_prestamo = prestamo and pdetalle_cant_cuota_pagada = '0' ;



END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_OBTENER_DATA_CLIENTE_TEX
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_OBTENER_DATA_CLIENTE_TEX`;
delimiter ;;
CREATE PROCEDURE `SP_OBTENER_DATA_CLIENTE_TEX`(in cliente_dni VARCHAR(20))
SELECT
c.cliente_id,
c.cliente_nombres,
cliente_dni
FROM
	clientes c
	where c.cliente_dni = cliente_dni
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_OBTENER_DATA_EMPRESA
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_OBTENER_DATA_EMPRESA`;
delimiter ;;
CREATE PROCEDURE `SP_OBTENER_DATA_EMPRESA`()
SELECT
	empresa.confi_id, 
	empresa.confi_razon, 
	empresa.confi_ruc, 
	empresa.confi_direccion, 
	empresa.confi_correlativo, 
	empresa.config_correo,
	empresa.config_moneda
FROM
	empresa
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_OBTENER_ESTADO_CAJA
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_OBTENER_ESTADO_CAJA`;
delimiter ;;
CREATE PROCEDURE `SP_OBTENER_ESTADO_CAJA`()
SELECT
	caja_estado,
	caja_f_apertura,
	caja_hora_apertura,
	caja_monto_total,
	caja_monto_ingreso 
FROM
	caja 
WHERE
	caja_estado = 'VIGENTE'
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_OBTENER_NRO_CORRELATIVO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_OBTENER_NRO_CORRELATIVO`;
delimiter ;;
CREATE PROCEDURE `SP_OBTENER_NRO_CORRELATIVO`()
SELECT 
	
		IFNULL(LPAD(MAX(c.confi_correlativo)+1,8,'0'),'00000001') nro_prestamo
		
		from empresa c
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_PRESTAMOS_MES_ACTUAL
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_PRESTAMOS_MES_ACTUAL`;
delimiter ;;
CREATE PROCEDURE `SP_PRESTAMOS_MES_ACTUAL`()
BEGIN
	SELECT
		DATE_FORMAT(pc.pres_fecha_registro,'%d/%m/%Y') as fecha,
		SUM(ROUND(pc.pres_monto_total,2)) as totalprestamo
	FROM
		prestamo_cabecera pc
	WHERE
			DATE(pc.pres_fecha_registro) >= DATE( LAST_DAY( NOW() - INTERVAL 1 MONTH ) + INTERVAL 1 DAY ) 
		AND 	DATE(pc.pres_fecha_registro) <= LAST_DAY(DATE( CURRENT_DATE )) 
		and  pc.pres_aprobacion in ('aprobado', 'pendiente', 'finalizado')
		GROUP BY 	DATE(pc.pres_fecha_registro) ;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_REGISTRAR_APERTURA_CAJA
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_REGISTRAR_APERTURA_CAJA`;
delimiter ;;
CREATE PROCEDURE `SP_REGISTRAR_APERTURA_CAJA`(IN DESCRIPCION VARCHAR(100), IN MONTO_INI FLOAT)
BEGIN
DECLARE CANTIDAD INT;
SET @CANTIDAD:=(SELECT COUNT(*) FROM caja where caja_estado='VIGENTE');
if @CANTIDAD = 0 THEN
	INSERT INTO caja (caja_descripcion, caja_monto_inicial, caja_f_apertura, caja_estado, caja_hora_apertura) VALUES(DESCRIPCION, MONTO_INI, CURDATE(), 'VIGENTE', CURRENT_TIME());
SELECT 1;
ELSE
SELECT 2;
END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_REGISTRAR_CAJA_CIERRE
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_REGISTRAR_CAJA_CIERRE`;
delimiter ;;
CREATE PROCEDURE `SP_REGISTRAR_CAJA_CIERRE`(IN MONTO_INGRESO FLOAT, IN MONTO_PRES FLOAT, IN MONTO_EGRES FLOAT, IN MONTO_TOTAL FLOAT,   IN CANT_PRESTA VARCHAR(100), IN CANT_INGRES VARCHAR(100), IN CANT_EGRESO VARCHAR(100), IN INTERES FLOAT)
BEGIN 

DECLARE CANTIDAD INT;
SET @CANTIDAD:=(SELECT COUNT(*) FROM prestamo_cabecera where pres_estado_caja ='VIGENTE' AND pres_aprobacion = 'aprobado');
if @CANTIDAD = 0 THEN
	
		UPDATE caja SET 
		caja_monto_ingreso = MONTO_INGRESO,
		caja_prestamo =  MONTO_PRES,
		caja_f_cierre = CURDATE(),
		caja__monto_egreso = MONTO_EGRES,
		caja_monto_total = MONTO_TOTAL,
		caja_estado = 'CERRADO',
		caja_hora_cierre = CURRENT_TIME(),
		caja_count_prestamo = CANT_PRESTA,
		caja_count_ingreso = CANT_INGRES,
		caja_count_egreso = CANT_EGRESO,
		caja_interes = INTERES
		WHERE caja_estado = 'VIGENTE';
		
SELECT 1;
ELSE
SELECT 2;
END IF;





END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_REGISTRAR_REFERENCIAS
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_REGISTRAR_REFERENCIAS`;
delimiter ;;
CREATE PROCEDURE `SP_REGISTRAR_REFERENCIAS`(IN ID_CLI INT, IN REFE_PER VARCHAR(255), IN CEL_PER VARCHAR(20), IN REFE_FAM VARCHAR(255), IN CEL_FAM VARCHAR(20))
BEGIN
INSERT INTO referencias (cliente_id, refe_personal, refe_cel_per, refe_familiar, refe_cel_fami) values(ID_CLI, REFE_PER, CEL_PER, REFE_FAM, CEL_FAM);

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_REPORTE_LISTAR_CUOTAS_PAGADAS
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_REPORTE_LISTAR_CUOTAS_PAGADAS`;
delimiter ;;
CREATE PROCEDURE `SP_REPORTE_LISTAR_CUOTAS_PAGADAS`(in fecha_ini DATE, in fecha_fin DATE,  in id_u int)
SELECT
	pc.cliente_id,
	c.cliente_nombres,
	pd.nro_prestamo ,
	pd.pdetalle_nro_cuota,
	pd.pdetalle_monto_cuota,
	pd.pdetalle_fecha_registro,
	pc.moneda_id,
	m.moneda_nombre,
	'' as opciones,
	pd.id_usuario
	 
FROM
 prestamo_detalle pd

	INNER JOIN 	prestamo_cabecera pc ON 
	pd.nro_prestamo = pc.nro_prestamo
	INNER JOIN clientes c
	on pc.cliente_id = c.cliente_id
	INNER JOIN moneda m 
	on pc.moneda_id = m.moneda_id
WHERE
 pd.pdetalle_estado_cuota = 'pagada' and 
 pd.id_usuario = id_u  and DATE(pd.pdetalle_fecha_registro) BETWEEN fecha_ini AND fecha_fin
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_REPORTE_LISTAR_POR_USUARIO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_REPORTE_LISTAR_POR_USUARIO`;
delimiter ;;
CREATE PROCEDURE `SP_REPORTE_LISTAR_POR_USUARIO`(in fecha_ini DATE, in fecha_fin DATE, in id_u int)
SELECT
	pd.nro_prestamo,
	c.cliente_nombres,
	pc.pres_monto,
	DATE_FORMAT(pd.pdetalle_fecha_registro, '%d/%m/%Y') as fecha,
	pc.pres_monto_total,
	ROUND( pd.pdetalle_monto_cuota, 2 ) AS monto_c,
	pd.pdetalle_nro_cuota,
	fp.fpago_descripcion,
	pc.pres_aprobacion as estado,
	'' as opcion,
	pd.id_usuario,
	u.nombre_usuario 
FROM
	prestamo_detalle pd
	INNER JOIN prestamo_cabecera pc ON pd.nro_prestamo = pc.nro_prestamo
	INNER JOIN usuarios u ON pd.id_usuario = u.id_usuario
	INNER JOIN clientes c ON pc.cliente_id = c.cliente_id
	INNER JOIN forma_pago fp ON pc.fpago_id = fp.fpago_id 
WHERE
	pd.pdetalle_estado_cuota = 'pagada' 
	AND pd.pdetalle_aprobacion = 'aprobado' 
  and pd.id_usuario = id_u and	 DATE(pdetalle_fecha_registro) BETWEEN fecha_ini AND fecha_fin
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_REPORTE_LISTAR_TOTAL_CIERRE_CAJA
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_REPORTE_LISTAR_TOTAL_CIERRE_CAJA`;
delimiter ;;
CREATE PROCEDURE `SP_REPORTE_LISTAR_TOTAL_CIERRE_CAJA`()
SELECT 
	(select ROUND(MAX(caja_monto_inicial),2) from caja where caja_estado = 'VIGENTE') as monto_inicial_caja,

	-- (select COUNT(pres_monto) from prestamo_cabecera where pres_estado_caja = 'VIGENTE' AND pres_aprobacion in ( 'aprobado' , 'finalizado')) as cant_prestamo,
	(select COUNT(pres_monto) from prestamo_cabecera where pres_estado_caja = 'VIGENTE' AND pres_aprobacion in ( 'finalizado', 'aprobado')) as cant_prestamo,
	(select ROUND(IFNULL(SUM(pres_monto),0),2) from prestamo_cabecera where pres_estado_caja = 'VIGENTE' AND pres_aprobacion in (  'finalizado', 'aprobado') ) as suma_prestamo_capital,
	(select ROUND(IFNULL(SUM(pres_monto_interes),0),2) from prestamo_cabecera where pres_estado_caja = 'VIGENTE' AND pres_aprobacion in (  'finalizado', 'aprobado') ) as suma_prestamo_interes,
	(Select COUNT(*) from movimientos where movi_tipo = 'INGRESO' AND movi_caja = 'VIGENTE') as cant_ingresos,
	(select ROUND(IFNULL(SUM(movi_monto),0),2) from movimientos where movi_tipo = 'INGRESO' AND movi_caja = 'VIGENTE') as suma_ingresos,
	(Select COUNT(*) from movimientos where movi_tipo = 'EGRESO' AND movi_caja = 'VIGENTE') as cant_egresos,
	(select ROUND(IFNULL(SUM(movi_monto),0),2) from movimientos where movi_tipo = 'EGRESO' AND movi_caja = 'VIGENTE') as suma_egresos,
	
	(select caja_estado from caja where caja_estado = 'VIGENTE' ) as estado,
	(select  CONCAT_WS(' ',DATE_FORMAT(caja_f_apertura, '%d/%m/%Y'), caja_hora_apertura)  from caja where caja_estado = 'VIGENTE' ) as fecha_apertura,
	
	(select ROUND(IFNULL(SUM(pres_monto_total),0),2) from prestamo_cabecera where pres_estado_caja = 'VIGENTE' AND pres_aprobacion in (  'finalizado') ) as suma_total
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_REPORTE_PIVOT
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_REPORTE_PIVOT`;
delimiter ;;
CREATE PROCEDURE `SP_REPORTE_PIVOT`()
SELECT YEAR(pres_f_emision) as anio,
SUM(CASE WHEN MONTH(pres_f_emision)=1 THEN pres_monto_total ELSE 0 END) AS enero,
SUM(CASE WHEN MONTH(pres_f_emision)=2 THEN pres_monto_total ELSE 0 END) AS febrero,
SUM(CASE WHEN MONTH(pres_f_emision)=3 THEN pres_monto_total ELSE 0 END) AS marzo,
SUM(CASE WHEN MONTH(pres_f_emision)=4 THEN pres_monto_total ELSE 0 END) AS abril,
SUM(CASE WHEN MONTH(pres_f_emision)=5 THEN pres_monto_total ELSE 0 END) AS mayo,
SUM(CASE WHEN MONTH(pres_f_emision)=6 THEN pres_monto_total ELSE 0 END) AS junio,
SUM(CASE WHEN MONTH(pres_f_emision)=7 THEN pres_monto_total ELSE 0 END) AS julio,
SUM(CASE WHEN MONTH(pres_f_emision)=8 THEN pres_monto_total ELSE 0 END) AS agosto,
SUM(CASE WHEN MONTH(pres_f_emision)=9 THEN pres_monto_total ELSE 0 END) AS setiembre,
SUM(CASE WHEN MONTH(pres_f_emision)=10 THEN pres_monto_total ELSE 0 END) AS octubre,
SUM(CASE WHEN MONTH(pres_f_emision)=11 THEN pres_monto_total ELSE 0 END) AS noviembre,
SUM(CASE WHEN MONTH(pres_f_emision)=12 THEN pres_monto_total ELSE 0 END) AS diciembre,
SUM(pres_monto_total) as total
FROM prestamo_cabecera
WHERE pres_aprobacion ='finalizado'
GROUP BY YEAR(pres_f_emision)
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_REPORTE_POR_CLIENTE
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_REPORTE_POR_CLIENTE`;
delimiter ;;
CREATE PROCEDURE `SP_REPORTE_POR_CLIENTE`(in id  int)
select pc.pres_id ,
				pc.nro_prestamo,
				pc.cliente_id,
				c.cliente_nombres,
				pc.pres_monto,
				DATE_FORMAT(pc.pres_fecha_registro, '%d/%m/%Y') as fecha,
				pc.pres_monto_total,
				pc.pres_monto_cuota,
			  pc.pres_cuotas,
				pc.fpago_id,
				fp.fpago_descripcion,
				-- pc.id_usuario,
		  	-- 	u.usuario,						
				pc.pres_aprobacion as estado,
				'' as opciones	,
				pc.pres_interes	,
				pc.pres_monto_interes,
				pc.pres_cuotas_pagadas,
				DATE_FORMAT(pc.pres_f_emision, '%d/%m/%Y') as femision,
				pc.id_usuario
				 from prestamo_cabecera pc
				 INNER JOIN clientes c on
				 pc.cliente_id = c.cliente_id
				 INNER JOIN forma_pago fp on 
				 pc.fpago_id = fp.fpago_id
				 INNER JOIN usuarios u on
				 pc.id_usuario = u.id_usuario
				 WHERE pc.cliente_id = id
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_REPORTE_PRESTAMOS_POR_ANIO_AND_USUARIO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_REPORTE_PRESTAMOS_POR_ANIO_AND_USUARIO`;
delimiter ;;
CREATE PROCEDURE `SP_REPORTE_PRESTAMOS_POR_ANIO_AND_USUARIO`(IN ID INT,IN ANIO VARCHAR(10))
SELECT 
YEAR(pc.pres_fecha_registro) as anio, 
case month(pc.pres_fecha_registro) 
WHEN 1 THEN 'Enero'
WHEN 2 THEN  'Febrero'
WHEN 3 THEN 'Marzo' 
WHEN 4 THEN 'Abril' 
WHEN 5 THEN 'Mayo'
WHEN 6 THEN 'Junio'
WHEN 7 THEN 'Julio'
WHEN 8 THEN 'Agosto'
WHEN 9 THEN 'Septiembre'
WHEN 10 THEN 'Octubre'
WHEN 11 THEN 'Noviembre'
WHEN 12 THEN 'Diciembre'
 END mesnombre ,
 u.usuario as usu_nombre,
 count(pc.pres_monto_total) as cant_prestamos,
 SUM(pc.pres_monto_total) as total,
MONTH(pc.pres_fecha_registro) as numero_mes, 
MONTHname(pc.pres_fecha_registro) as mes,
pc.id_usuario, 
u.usuario as usu_nombre

FROM prestamo_cabecera pc
INNER JOIN
	usuarios u
	ON 
		pc.id_usuario = u.id_usuario
where pc.pres_aprobacion ='finalizado' and YEAR(pc.pres_fecha_registro) =ANIO and pc.id_usuario = ID
GROUP BY YEAR(pc.pres_fecha_registro),
month(pc.pres_fecha_registro)
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_REPORT_PIVOT_POR_DIAS
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_REPORT_PIVOT_POR_DIAS`;
delimiter ;;
CREATE PROCEDURE `SP_REPORT_PIVOT_POR_DIAS`()
SELECT CONCAT(c.cliente_nombres, ' | ',pc.nro_prestamo) as pres,
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '1' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '1',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '2' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '2',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '3' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '3',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '4' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '4',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '5' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '5',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '6' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '6',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '7' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '7',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '8' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '8',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '9' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '9',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '10' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '10',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '11' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '11',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '12' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '12',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '13' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '13',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '14' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '14',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '15' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '15',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '16' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '16',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '17' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '17',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '18' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '18',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '19' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '19',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '20' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '20',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '21' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '21',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '22' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '22',
     SUM(CASE WHEN pd.pdetalle_nro_cuota = '23' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '23',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '24' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '24',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '25' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '25',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '26' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '26',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '27' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '27',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '28' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '28',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '29' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '29',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '30' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '30',
		 SUM(CASE WHEN pd.pdetalle_nro_cuota = '31' THEN  ROUND(pd.pdetalle_monto_cuota,2) ELSE 0 END) '31',
		 
		  pc.pres_monto_total as m_prestamo,
		 SUM(ROUND(pd.pdetalle_monto_cuota,2)) as t_pagado,
		  ROUND((pc.pres_monto_total - SUM(ROUND(pd.pdetalle_monto_cuota,2))),2) as falta_p_p
     FROM prestamo_detalle pd INNER JOIN prestamo_cabecera pc on
		 pd.nro_prestamo = pc.nro_prestamo 
		 INNER JOIN clientes c on pc.cliente_id = c.cliente_id
		 where pd.pdetalle_estado_cuota = 'pagada'
     GROUP BY pd.nro_prestamo
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_VER_DETALLE_PRESTAMO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_VER_DETALLE_PRESTAMO`;
delimiter ;;
CREATE PROCEDURE `SP_VER_DETALLE_PRESTAMO`(IN nro_prestamo VARCHAR(8))
select  pd.pdetalle_id,
				pd.nro_prestamo,
				pd.nombre_user,
				pd.pdetalle_nro_cuota as cuota,
				DATE_FORMAT(pd.pdetalle_fecha, '%d/%m/%Y') as fecha,
				pd.pdetalle_monto_cuota as monto,
				pd.pdetalle_estado_cuota as estado,
				'' as accion
				from prestamo_detalle pd 
				where pd.nro_prestamo = nro_prestamo
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table caja
-- ----------------------------
DROP TRIGGER IF EXISTS `TG_CERRAR_PRESTAMO`;
delimiter ;;
CREATE TRIGGER `TG_CERRAR_PRESTAMO` BEFORE UPDATE ON `caja` FOR EACH ROW BEGIN

UPDATE prestamo_cabecera SET
pres_estado_caja= 'CERRADO'
where pres_estado_caja='VIGENTE';
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table caja
-- ----------------------------
DROP TRIGGER IF EXISTS `TG_CERRAR_MOVI_INGRESO`;
delimiter ;;
CREATE TRIGGER `TG_CERRAR_MOVI_INGRESO` BEFORE UPDATE ON `caja` FOR EACH ROW BEGIN

UPDATE movimientos SET
movi_caja= 'CERRADO'
where movi_caja='VIGENTE';
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table prestamo_detalle
-- ----------------------------
DROP TRIGGER IF EXISTS `tg_montocuota_detalle`;
delimiter ;;
CREATE TRIGGER `tg_montocuota_detalle` AFTER UPDATE ON `prestamo_detalle` FOR EACH ROW BEGIN

/*DECLARE MONTOTOTAL INT;
DECLARE MONTOCUOTA INT;

SET MONTOTOTAL:=(select pres_monto_total from prestamo_cabecera where nro_prestamo = prestamo);
SET MONTOCUOTA:=(select SUM(pdetalle_monto_cuota) from prestamo_detalle where nro_prestamo = prestamo AND pdetalle_estado_cuota = 'pagada' );


	UPDATE prestamo_detalle SET 
	 pdetalle_saldo_cuota = @MONTOTOTAL -  @MONTOCUOTA
	where nro_prestamo = new.nro_prestamo
  and pdetalle_nro_cuota = new.pdetalle_monto_cuota;*/


END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table prestamo_detalle
-- ----------------------------
DROP TRIGGER IF EXISTS `tg_can_cuotas_cabecera`;
delimiter ;;
CREATE TRIGGER `tg_can_cuotas_cabecera` AFTER UPDATE ON `prestamo_detalle` FOR EACH ROW BEGIN
DECLARE CUOTA INT;
SET CUOTA:=(select count(*) from prestamo_detalle where nro_prestamo = new.nro_prestamo and pdetalle_estado_cuota = 'pagada' );

        UPDATE prestamo_cabecera SET
	pres_cuotas_pagadas = CUOTA
	WHERE nro_prestamo = new.nro_prestamo;

END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table prestamo_detalle
-- ----------------------------
DROP TRIGGER IF EXISTS `tg_monto_restante`;
delimiter ;;
CREATE TRIGGER `tg_monto_restante` AFTER UPDATE ON `prestamo_detalle` FOR EACH ROW BEGIN
DECLARE MONTO INT;
SET MONTO:=(select SUM(pdetalle_monto_cuota) from prestamo_detalle where nro_prestamo = new.nro_prestamo AND pdetalle_estado_cuota = 'pagada' );


  UPDATE prestamo_cabecera SET
	pres_monto_restante = pres_monto_total - MONTO
	WHERE nro_prestamo = new.nro_prestamo;

END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table prestamo_detalle
-- ----------------------------
DROP TRIGGER IF EXISTS `tg_cuotas_restante`;
delimiter ;;
CREATE TRIGGER `tg_cuotas_restante` AFTER UPDATE ON `prestamo_detalle` FOR EACH ROW BEGIN
DECLARE CANTCUOTA INT;
SET CANTCUOTA:=(select count(pdetalle_estado_cuota) from prestamo_detalle where nro_prestamo = new.nro_prestamo AND pdetalle_estado_cuota = 'pagada');


  UPDATE prestamo_cabecera SET
	pres_cuotas_restante = pres_cuotas - CANTCUOTA
	WHERE nro_prestamo = new.nro_prestamo;

END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
