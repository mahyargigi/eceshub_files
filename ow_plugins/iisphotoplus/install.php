<?php

/**
 * iisvideoplus
 */
/**
 * @author Mohammad Agha Abbasloo <a.mohammad85@gmail.com>
 * @package ow_plugins.iisphotoplus
 * @since 1.0
 */

$path = OW::getPluginManager()->getPlugin('iisphotoplus')->getRootDir() . 'langs.zip';
BOL_LanguageService::getInstance()->importPrefixFromZip($path, 'iisphotooplus');

try {
    OW::getDbo()->query('CREATE TABLE IF NOT EXISTS `' . OW_DB_PREFIX . 'iisphotoplus_status_photo` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `photoId`int(11) NOT NULL,
              `userId` int(11) NOT NULL,
              PRIMARY KEY (`id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;');

} catch (Exception $e) {
    Updater::getLogger()->addEntry(json_encode($e));
}