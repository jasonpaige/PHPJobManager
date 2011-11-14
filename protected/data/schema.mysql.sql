CREATE TABLE `user` (
    `id` MEDIUMINT(8) UNSIGNED AUTO_INCREMENT NOT NULL,
    `username` VARCHAR(20) NOT NULL UNIQUE,
    `password` VARCHAR(100) NOT NULL,
    `email` VARCHAR(50) NOT NULL UNIQUE,
    `level` ENUM('admin', 'super'),
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `job` (
    `id` BIGINT UNSIGNED AUTO_INCREMENT NOT NULL,
    `user_id` MEDIUMINT(8) UNSIGNED NOT NULL,
    `name` VARCHAR(100) NOT NULL,
    `command` TEXT NOT NULL,
    `cron` VARCHAR(100)  NOT NULL,
    `created` DATETIME NOT NULL,
    `termination_date` DATETIME,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `user`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;

INSERT INTO `user` VALUES 
(NULL, 'jason', '$2a$08$isDSsGP9.mEfmAHlR.vg0.Xfk5HKgn89u/x.vaJaAZgd2AEguLt0W', 'jason.r.paige@gmail.com', 'super');