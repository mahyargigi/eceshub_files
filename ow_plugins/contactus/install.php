<?php
OW::getLanguage()->importPluginLangs(OW::getPluginManager()->getPlugin('contactus')->getRootDir() . 'langs.zip', 'contactus');
$sql = "CREATE TABLE `" . OW_DB_PREFIX . "contactus_department` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(200) NOT NULL,
    PRIMARY KEY (`id`)
)
ENGINE=MyISAM
ROW_FORMAT=DEFAULT";

OW::getDbo()->query($sql);
OW::getPluginManager()->addPluginSettingsRouteName('contactus', 'contactus.admin');

