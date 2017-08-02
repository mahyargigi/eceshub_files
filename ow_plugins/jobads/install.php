<?php
OW::getLanguage()->importPluginLangs(OW::getPluginManager()->getPlugin('jobads')->getRootDir() . 'langs.zip', 'jobads');

$sql = "CREATE TABLE `" . OW_DB_PREFIX . "jobads_ad` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `image` VARCHAR(32) NOT NULL,
    `description` text NOT NULL,
    `skills`  NOT NULL,
    PRIMARY KEY (`id`)
)
ENGINE=MyISAM
ROW_FORMAT=DEFAULT";
OW::getDbo()->query($sql);