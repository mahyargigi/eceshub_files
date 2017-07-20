<?php
/**
 * iismainpage
 */
/**
 * @author Yaser Alimardany <yaser.alimardany@gmail.com>
 * @package ow_plugins.iismainpage
 * @since 1.0
 */


$plugin = OW::getPluginManager()->getPlugin('iismainpage');
BOL_LanguageService::getInstance()->importPrefixFromZip($plugin->getRootDir() . 'langs.zip', 'iismainpage');

OW::getPluginManager()->addPluginSettingsRouteName('iismainpage', 'iismainpage.admin');
$config = OW::getConfig();
if(!$config->configExists('iismainpage', 'orders'))
{
    $config->addConfig('iismainpage', 'orders', '');
}
