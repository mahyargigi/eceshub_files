<?php
OW::getRouter()->addRoute(new OW_Route('jobads.index', 'jobads/index', "JOBADS_CTRL_Base", 'index'));
OW::getRouter()->addRoute(new OW_Route('jobads.newad', 'jobads/newad', "JOBADS_CTRL_Base", 'newad'));