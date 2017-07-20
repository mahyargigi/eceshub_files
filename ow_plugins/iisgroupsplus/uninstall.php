<?php

/**
 * iisgroupsplus
 */

BOL_ComponentAdminService::getInstance()->deleteWidget('IISGROUPSPLUS_CMP_FileListWidget');

$eventIisGroupsPlusFiles = new OW_Event('iisgroupsplus.delete.files', array('allFiles'=>true));
OW::getEventManager()->trigger($eventIisGroupsPlusFiles);