<?php

class JOBADS_BOL_AdDao extends OW_BaseDao{

    private static $classInstance;
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
        return 'JOBADS_BOL_Ad';
    }
    public function getTableName()
    {
        return OW_DB_PREFIX . 'jobads_ad';
    }
    public function addAd($image , $description , $skills , $email)
    {
        $advertise = new JOBADS_BOL_Ad();
        $advertise->image = $image;
        $advertise->description = $description;
        $advertise->skills = $skills;
        $advertise->email = $email;

        JOBADS_BOL_AdDao::getInstance()->save($advertise);
        return $advertise;
    }
    public function getAllAds(){
        return $this->findAll();
    }
}