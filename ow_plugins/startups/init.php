<?php
OW::getRouter()->addRoute(new OW_Route('startups', 'startups', "STARTUPS_CTRL_Base", 'index'));
OW::getRouter()->addRoute(new OW_Route('startups.newstartup', 'startups/newstartup', "STARTUPS_CTRL_Base", 'newStartup'));
OW::getRouter()->addRoute(new OW_Route('startups_showstartup', 'startups/startup/:startupId', "STARTUPS_CTRL_Base", 'showStartup'));