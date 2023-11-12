CREATE DATABASE eeep;
use eeep;

CREATE TABLE `notas_tre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `chave` varchar(20) DEFAULT NULL,
  `dt` datetime DEFAULT NULL,
  `r1` int(11) DEFAULT NULL,
  `r2` int(11) DEFAULT NULL,
  `r3` int(11) DEFAULT NULL,
  `r4` int(11) DEFAULT NULL,
  `r5` int(11) DEFAULT NULL,
  `r6` int(11) DEFAULT NULL,
  `r7` int(11) DEFAULT NULL,
  `att` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

