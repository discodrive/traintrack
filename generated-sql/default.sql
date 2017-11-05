
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- exercise
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `exercise`;

CREATE TABLE `exercise`
(
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` TEXT,
    `type` TEXT,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- set
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `set`;

CREATE TABLE `set`
(
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `exercise_id` INTEGER,
    `reps` INTEGER,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- week
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `week`;

CREATE TABLE `week`
(
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `workout_id` INTEGER,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- workout
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `workout`;

CREATE TABLE `workout`
(
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` TEXT,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
