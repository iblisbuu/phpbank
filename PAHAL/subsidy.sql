CREATE TABLE `subsidy` (
  `id` INT AUTO_INCREMENT,
  `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(32),
  `score` INT,
  `screenshot` VARCHAR(64),
  `approved` TINYINT(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
);


INSERT INTO `subsidy` VALUES (21, NOW(), 'person a', 282470, 'road3.jpg', 1);
INSERT INTO `subsidy` VALUES (22, NOW(), 'person b', 123456, 'road4.jpg', 1);
INSERT INTO `subsidy` VALUES (23, NOW(), 'person c', 654321, 'road5.jpg', 1);
INSERT INTO `subsidy` VALUES (24, NOW(), 'person d', 100000, 'road6.jpg', 1);
INSERT INTO `subsidy` VALUES (25, NOW(), 'person e', 222222, 'road7.jpg', 1);
INSERT INTO `subsidy` VALUES (26, NOW(), 'person f', 111111, 'road8.jpg', 1);
INSERT INTO `subsidy` VALUES (27, NOW(), 'person g', 456789, 'road9.jpg', 1);
INSERT INTO `subsidy` VALUES (28, NOW(), 'person h', 121212, 'road10.jpg', 1);
INSERT INTO `subsidy` VALUES (29, NOW(), 'person i', 787878, 'road11.jpg', 1);
INSERT INTO `subsidy` VALUES (30, NOW(), 'person j', 343434, 'road12.jpg', 1);