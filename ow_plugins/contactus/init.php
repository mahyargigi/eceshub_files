<?php
OW::getRouter()->addRoute(new OW_Route('contactus.index', 'contactus', "CONTACTUS_CTRL_Contact", 'index'));
OW::getRouter()->addRoute(new OW_Route('contactus.admin', 'admin/plugins/contactus', "CONTACTUS_CTRL_Admin", 'dept'));