<?php

/**
 * IIS Mobile Support cron job.
 *
 * @author Yaser Alimardani <yaser.alimardany@gmail.com>
 * @package ow.ow_plugins.iismobilesupport.bol
 * @since 1.0
 */
class IISMOBILESUPPORT_Cron extends OW_Cron
{
    public function __construct()
    {
        parent::__construct();
        $this->addJob('sendNotification');
    }

    public function run()
    {

    }

    public function sendNotification()
    {
        $result = IISMOBILESUPPORT_BOL_Service::getInstance()->getNotifications(50);
        foreach ($result as $item) {
            $id = $item->id;
            $data = json_decode($item->data);
            IISMOBILESUPPORT_BOL_Service::getInstance()->sendDataToDevice($data->userId, $data->title, $data->description, $data->avatarUrl, $data->url);
            IISMOBILESUPPORT_BOL_Service::getInstance()->deleteNotifications(array($id));
        }
    }
}