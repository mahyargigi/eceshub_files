<?php
OW::getRouter()->addRoute(new OW_Route('iismobilesupport-index', 'mobile/service/:key', "IISMOBILESUPPORT_MCTRL_Service", 'index'));
OW::getRouter()->addRoute(new OW_Route('iismobilesupport-use-mobile', 'mobile/use_mobile_only', "IISMOBILESUPPORT_MCTRL_Service", 'useMobile'));
IISMOBILESUPPORT_MCLASS_EventHandler::getInstance()->init();