<?php
/**
 * @author Seyed Ismail Mirvakili
 * Date: 6/14/2017
 * Time: 10:56 AM
 */

$path = OW::getPluginManager()->getPlugin('iischangetranslation')->getRootDir() . 'langs.zip';
BOL_LanguageService::getInstance()->importPrefixFromZip($path, 'iischangetranslation');

OW::getPluginManager()->addPluginSettingsRouteName('iischangetranslation', 'iischangetranslation.admin');