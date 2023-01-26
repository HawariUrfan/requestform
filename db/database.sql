CREATE TABLE `requestform`.`form_table`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL,
  `progres` enum('Progres','Done') NOT NULL,
  `created_at` datetime(255) NOT NULL ON UPDATE CURRENT_TIMESTAMP(255),
  PRIMARY KEY (`id`)
);