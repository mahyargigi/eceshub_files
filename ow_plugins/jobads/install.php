<?php
OW::getLanguage()->importPluginLangs(OW::getPluginManager()->getPlugin('jobads')->getRootDir() . 'langs.zip', 'jobads');

$sql = "CREATE TABLE `" . OW_DB_PREFIX . "jobads_ad` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `image` VARCHAR(255) NOT NULL,
    `description` text NOT NULL,
    `skills`  text default '',
    `email`  text NOT NULL,
    `userid`  int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `userid` (`userid`)
)
ENGINE=MyISAM CHARSET=utf8
ROW_FORMAT=DEFAULT";
OW::getDbo()->query($sql);