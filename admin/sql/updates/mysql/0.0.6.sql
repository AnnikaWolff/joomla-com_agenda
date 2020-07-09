DROP TABLE IF EXISTS `#__nexus_agenda_items`;

CREATE TABLE `#__nexus_agenda_items` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(250) NOT NULL,
	`description` VARCHAR(3000) NULL,
	`speaker_id` INT NULL,
	`place_id` INT NULL,
	`day` DATE NULL,
	`time` TIME NULL,
	`published` TINYINT(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE = InnoDB
	AUTO_INCREMENT = 0
	DEFAULT CHARSET = utf8mb4
	DEFAULT COLLATE = utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `#__nexus_agenda_speaker`;

CREATE TABLE `#__nexus_agenda_speaker` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(250) NOT NULL,
	`description` VARCHAR(3000) NULL,
	`published` TINYINT(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE = InnoDB
	AUTO_INCREMENT = 0
	DEFAULT CHARSET = utf8mb4
	DEFAULT COLLATE = utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `#__nexus_agenda_places`;

CREATE TABLE `#__nexus_agenda_places` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(250) NOT NULL,
	`description` VARCHAR(3000) NULL,
	`published` TINYINT(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE = InnoDB
	AUTO_INCREMENT = 0
	DEFAULT CHARSET = utf8mb4
	DEFAULT COLLATE = utf8mb4_unicode_ci;