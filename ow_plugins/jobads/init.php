<?php
OW::getRouter()->addRoute(new OW_Route('jobads', 'jobads', "JOBADS_CTRL_Base", 'index'));
OW::getRouter()->addRoute(new OW_Route('yourads', 'jobads/yourads', "JOBADS_CTRL_Base", 'yourads'));
OW::getRouter()->addRoute(new OW_Route('jobads_newad', 'jobads/newad', "JOBADS_CTRL_Base", 'newad'));
OW::getRouter()->addRoute(new OW_Route('jobads_showad', 'jobads/ad/:adId', "JOBADS_CTRL_Base", 'showad'));