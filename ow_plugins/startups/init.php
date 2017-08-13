<?php
OW::getRouter()->addRoute(new OW_Route('startups', 'startups', "STARTUPS_CTRL_Base", 'index'));
OW::getRouter()->addRoute(new OW_Route('startups.newstartup', 'startups/newstartup', "STARTUPS_CTRL_Base", 'newStartup'));
OW::getRouter()->addRoute(new OW_Route('startups_showstartup', 'startups/startup/:startupId', "STARTUPS_CTRL_Base", 'showStartup'));
OW::getRouter()->addRoute(new OW_Route('startups_yourstartups', 'startups/yourstartups', "STARTUPS_CTRL_Base", 'yourStartups'));
OW::getRouter()->addRoute(new OW_Route('startups_startupads', 'startups/startup/:startupId/ads', "STARTUPS_CTRL_Base", 'startupAds'));
OW::getRouter()->addRoute(new OW_Route('startups_startupnews', 'startups/startup/:startupId/news', "STARTUPS_CTRL_Base", 'startupNews'));
OW::getRouter()->addRoute(new OW_Route('startups_deletestartupnews', 'startups/startup/:startupId/:newsId/deletenews', "STARTUPS_CTRL_Base", 'deleteNews'));
OW::getRouter()->addRoute(new OW_Route('startups_addstartupnews', 'startups/startup/:startupId/addnews', "STARTUPS_CTRL_Base", 'addStartupNews'));

OW::getRouter()->addRoute(new OW_Route('startups_deleteStartup', 'startups/startup/deletestartup/:startupId', "STARTUPS_CTRL_Base", 'deleteStartup'));

OW::getRouter()->addRoute(new OW_Route('startups.newLike' , 'startups/addlike/:userId/:startupId',"STARTUPS_CTRL_Base" , 'addLike' ));
OW::getRouter()->addRoute(new OW_Route('startups.removeLike' , 'startups/deletelike/:userId/:startupId',"STARTUPS_CTRL_Base" , 'unLike' ));
