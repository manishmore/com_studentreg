CREATE TABLE IF NOT EXISTS `#__studentreg_member` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`certificate_number` INT(11)  NOT NULL ,
`course` VARCHAR(255)  NOT NULL ,
`college` VARCHAR(255)  NOT NULL ,
`date` DATETIME(11)  NOT NULL ,
`grade` VARCHAR(255)  NOT NULL ,
`image` VARCHAR(255)  NOT NULL ,
`name` VARCHAR(255)  NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8_general_ci;

