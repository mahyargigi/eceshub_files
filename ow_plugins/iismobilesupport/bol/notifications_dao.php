<?php

/**
 * Copyright (c) 2016, Yaser Alimardany
 * All rights reserved.
 */

/**
 *
 * @author Yaser Alimardany <yaser.alimardany@gmail.com>
 * @package ow_plugins.iismobilesupport.bol
 * @since 1.0
 */
class IISMOBILESUPPORT_BOL_NotificationsDao extends OW_BaseDao
{
    private static $classInstance;

    public static function getInstance()
    {
        if ( self::$classInstance === null )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    public function getDtoClassName()
    {
        return 'IISMOBILESUPPORT_BOL_Notifications';
    }
    
    public function getTableName()
    {
        return OW_DB_PREFIX . 'iismobilesupport_notifications';
    }

    /***
     * @param int $count
     * @return array
     */
    public function getNotifications($count = 10){
        $ex = new OW_Example();
        $ex->setLimitClause(0, $count);
        return $this->findListByExample($ex);
    }

    /***
     * @param $ids
     */
    public function deleteNotifications($ids){
        $ex = new OW_Example();
        $ex->andFieldInArray('id', $ids);
        $this->deleteByExample($ex);
    }

    /***
     * @param $data
     * @return mixed
     */
    public function saveNotifications($data){
        $notificationsData = new IISMOBILESUPPORT_BOL_Notifications();
        $notificationsData->data = $data;
        return $this->save($notificationsData);
    }

}
