<?php

/**
 * This software is intended for use with Oxwall Free Community Software http://www.oxwall.org/ and is
 * licensed under The BSD license.

 * ---
 * Copyright (c) 2011, Oxwall Foundation
 * All rights reserved.

 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the
 * following conditions are met:
 *
 *  - Redistributions of source code must retain the above copyright notice, this list of conditions and
 *  the following disclaimer.
 *
 *  - Redistributions in binary form must reproduce the above copyright notice, this list of conditions and
 *  the following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 *  - Neither the name of the Oxwall Foundation nor the names of its contributors may be used to endorse or promote products
 *  derived from this software without specific prior written permission.

 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
$plugin = OW::getPluginManager()->getPlugin('event');
$router = OW::getRouter();
EVENT_MCLASS_EventHandler::getInstance()->init();
$router->addRoute(new OW_Route('event.add', 'event/add', 'EVENT_MCTRL_Base', 'add'));
$router->addRoute(new OW_Route('event.edit', 'event/edit/:eventId', 'EVENT_MCTRL_Base', 'edit'));
$router->addRoute(new OW_Route('event.delete', 'event/delete/:eventId', 'EVENT_MCTRL_Base', 'delete'));
$router->addRoute(new OW_Route('event.view', 'event/:eventId', 'EVENT_MCTRL_Base', 'view'));
$router->addRoute(new OW_Route('event.main_menu_route', 'events', 'EVENT_CTRL_Base', 'index'));
$router->addRoute(new OW_Route('event.view_event_list', 'events/:list', 'EVENT_MCTRL_Base', 'eventsList'));
$router->addRoute(new OW_Route('event.invite_accept', 'event/:eventId/:list/invite_accept', 'EVENT_MCTRL_Base', 'inviteListAccept'));
$router->addRoute(new OW_Route('event.invite_decline', 'event/:eventId/:list/invite_decline', 'EVENT_MCTRL_Base', 'inviteListDecline'));
//$router->addRoute(new OW_Route('event.private_event', 'event/:eventId/private', 'EVENT_MCTRL_Base', 'privateEvent'));
$eventHandler = new EVENT_CLASS_EventHandler();
$eventHandler->genericInit();