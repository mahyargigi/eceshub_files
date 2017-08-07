<?php
OW::getLanguage()->importPluginLangs(OW::getPluginManager()->getPlugin('startups')->getRootDir() . 'langs.zip', 'startups');

$sql = "CREATE TABLE `" . OW_DB_PREFIX . "startups_startup` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(30) NOT NULL,
    `shortDescription` VARCHAR(140) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `description` text NOT NULL,
    `website`  text default '',
    `address`  text default '',
    `telephoneNumber`  int,
    `creator`  int(11) NOT NULL,
    `likes`  text,
    PRIMARY KEY (`id`),
    KEY `creator` (`creator`)
)
ENGINE=MyISAM CHARSET=utf8
ROW_FORMAT=DEFAULT";
OW::getDbo()->query($sql);