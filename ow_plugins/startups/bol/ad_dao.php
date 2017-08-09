<?php
class STARTUPS_BOL_AdDao extends OW_BaseDao{

    private static $classInstance;

    const startup_ID = 'startupId';
    const USER_ID = 'userId';
    const AD_ID = 'adId';

    protected function __construct()
    {
        parent::__construct();
    }
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
        return 'STARTUPS_BOL_Ad';
    }
    public function getTableName()
    {
        return OW_DB_PREFIX . 'startups_ad';
    }

}