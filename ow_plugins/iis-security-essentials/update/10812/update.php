<?php

Updater::getLanguageService()->importPrefixFromZip(dirname(__FILE__) . DS . 'langs.zip', 'iissecurityessentials');

$config = OW::getConfig();
if ( !$config->configExists('iissecurityessentials', 'passwordRequiredProfile') )
{
    $config->addConfig('iissecurityessentials', 'passwordRequiredProfile', false);
}