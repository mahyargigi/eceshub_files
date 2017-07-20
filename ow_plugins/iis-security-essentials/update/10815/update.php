<?php
/**
 * @author Seyed Ismail Mirvakili
 * Date: 6/11/2017
 * Time: 11:39 AM
 */

$config = OW::getConfig();
if ( !$config->configExists('iissecurityessentials', 'disabled_home_page_action_types') )
{
    $config->addConfig('iissecurityessentials', 'disabled_home_page_action_types', '');
}