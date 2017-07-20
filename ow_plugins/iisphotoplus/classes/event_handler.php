<?php

/**
 * Copyright (c) 2016, Yaser Alimardany
 * All rights reserved.
 */

/**
 *
 *
 * @author Mohammad Agha Abbasloo <a.mohammad85@gmail.com>
 * @package ow_plugins.iisphotoplus.bol
 * @since 1.0
 */
class IISPHOTOPLUS_CLASS_EventHandler
{
    private static $classInstance;
    const IISPHOTOPLUS_EVENT_GET_UPLOAD_DATA = 'iisphotoplus.upload_data';
    const IISPHOTOPLUS_EVENT_GET_ADDPHOTO_URL = 'iisphotoplus.getAddPhotoURL';
    const HASH_TOKEN = 'abc';
    public static function getInstance()
    {
        if ( self::$classInstance === null )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    private function __construct()
    {
    }

    public function init()
    {
        $service = IISPHOTOPLUS_BOL_Service::getInstance();
        $eventManager = OW::getEventManager();
        $eventManager->bind(IISEventManager::ADD_LIST_TYPE_TO_PHOTO, array($service, 'addListTypeToPhoto'));
        $eventManager->bind(IISEventManager::GET_RESULT_FOR_LIST_ITEM_PHOTO, array($service, 'getResultForListItemPhoto'));
        $eventManager->bind(IISEventManager::SET_TILE_HEADER_LIST_ITEM_PHOTO, array($service, 'setTtileHeaderListItemPhoto'));
        $eventManager->bind(IISEventManager::GET_VALID_LIST_FOR_PHOTO, array($service, 'getValidListForPhoto'));
        $eventManager->bind(self::IISPHOTOPLUS_EVENT_GET_ADDPHOTO_URL, array($this, 'addPhotoURL'));
        $eventManager->bind(IISEventManager::ON_BEFORE_UPDATE_STATUS_FORM_RENDERER, array($service, 'addPhotoInputFieldsToNewsfeed'));
        $eventManager->bind(IISPHOTOPLUS_BOL_Service::IISPHOTOPLUS_ADD_ALL_PHOTOS, array($service, 'addAllPhotos'));
        $eventManager->bind('feed.on_entity_action', array($service,'saveInsertedPhotos'));
        $eventManager->bind(IISEventManager::ON_FEED_ITEM_RENDERER, array($service, 'appendPhotosToFeed'));
        $eventManager->bind(IISPHOTOPLUS_BOL_Service::IISPHOTOPLUS_SET_OUT_FEED_RENDERER, array($service, 'setOutFeedRenderer'));
    }

    public function addPhotoURL( OW_Event $event )
    {
        OW::getDocument()->addScript(OW::getPluginManager()->getPlugin('iisphotoplus')->getStaticJsUrl() . 'iisphotoplus.js');
        $id = uniqid('addNewPhoto');

        $params = $event->getParams();
        $data = $event->getData();
        $data['infoId']=$params['infoId'];
        $extraEventData = OW::getEventManager()->trigger(new OW_Event(self::IISPHOTOPLUS_EVENT_GET_UPLOAD_DATA, $params, $data));

        if ( !OW::getUser()->isAuthorized('photo', 'upload') )
        {
            $status = BOL_AuthorizationService::getInstance()->getActionStatus('photo', 'upload');

            OW::getDocument()->addScriptDeclaration(
                UTIL_JsGenerator::composeJsString(
                    ';window[{$addNewPhoto}] = function()
                    {
                        OW.authorizationLimitedFloatbox({$msg});
                    }',
                    array(
                        'addNewPhoto' => $id,
                        'msg' => $status['msg']
                    )
                )
            );
        }
        else
        {
            OW::getDocument()->addScriptDeclaration(
                UTIL_JsGenerator::composeJsString(';window[{$addNewPhoto}] = function()
                    {
                        showUploadPhoto({$title});
                        jsonUploadImageComponent.bind("close", function()
                        {
                            OW.trigger("photo.onCloseUploaderFloatBox");
                        });
                    }
                    ', array(
                        'addNewPhoto' => $id,
                        'title' => OW::getLanguage()->text('photo', 'upload_photos')
                    )
                )
            );
        }

        return $id;
    }
}